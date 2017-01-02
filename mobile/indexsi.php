    <?php
    //微信参数
    $appId = 'wxb5aec13c030a530b';
    $appSecret = '2232d4acc3612e530f0ccc311c72d68c';

    //获取get参数
    $code = $_GET['code'];

    //获取 code
    $redirect_uri =  'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    $url = "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$appId&redirect_uri=".urlencode($redirect_uri)."&response_type=code&scope=jsapi_address&state=cft#wechat_redirect";
    if(empty($code)){
        header("location: $url");
    }

    //获取 access_token
    $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=".$appId."&secret=".$appSecret."&code=".$code."&grant_type=authorization_code";
    $access_token_json = getUrl($access_token_url);
    $access_token = json_decode($access_token_json,true);


    // 定义参数
    $timestamp = time();
    $nonceStr = rand(100000,999999);
    $Parameters = array();
    //===============下面数组 生成SING 使用=====================
    $Parameters['appid'] = $appId;
    $Parameters['url'] = $redirect_uri;
    $Parameters['timestamp'] = "$timestamp";
    $Parameters['noncestr'] = "$nonceStr";
    $Parameters['accesstoken'] = $access_token['access_token'];
    // 生成 SING
    $addrSign = genSha1Sign($Parameters);


    function getUrl($url){
        $opts = array(
            CURLOPT_TIMEOUT        => 30,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
        );
        /* 根据请求类型设置特定参数 */
        $opts[CURLOPT_URL] = $url ;
        $ch = curl_init();
        curl_setopt_array($ch, $opts);
        $data  = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);
        return $data;
    }
    function p($star){
        echo '<pre>';
        print_r($star);
        echo '</pre>';
    }
    function logtext($content){
        $fp=fopen("json.ini","a");
        fwrite($fp,"\r\n".$content);
        fclose($fp);
    }
    //创建签名SHA1
    function genSha1Sign($Parameters){
        $signPars = '';
        ksort($Parameters);
        foreach($Parameters as $k => $v) {
            if("" != $v && "sign" != $k) {
                if($signPars == '')
                    $signPars .= $k . "=" . $v;
                else
                    $signPars .=  "&". $k . "=" . $v;
            }
        }
        //$signPars = http_build_query($Parameters);
        $sign = SHA1($signPars);
        $Parameters['sign'] = $sign;
        return $sign;
    }
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>获取共享地址</title>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1; user-scalable=no;" />
    </head>
    <script language="javascript">
        function getaddr(){
            WeixinJSBridge.invoke('editAddress',{
                "appId" : "<?php echo $appId;?>", //公众号名称，由商户传入
                "timeStamp" : "<?php echo $timestamp;?>", //时间戳 这里随意使用了一个值
                "nonceStr" : "<?php echo $nonceStr;?>", //随机串
                "signType" : "SHA1", //微信签名方式:sha1
                "addrSign" : "<?php echo $addrSign;?>", //微信签名
                "scope"    : "jsapi_address"
            },function(res){
                if(res.err_msg == 'edit_address:ok'){
                    document.getElementById("showAddress").innerHTML="收件人："+res.userName+"  联系电话："+res.telNumber+"  收货地址："+res.proviceFirstStageName+res.addressCitySecondStageName+res.addressCountiesThirdStageName+res.addressDetailInfo+"  邮编："+res.addressPostalCode;
                }
                else{
                    alert("获取地址失败，请重新点击");
                }
            });
        }
    </script>
    <body>
    <style>
        section.content{padding:10px 12px;}
        section .showaddr{border:1px dashed #C9C9C9;padding:10px 10px 15px;margin-bottom:20px;color:#666666;font-size:12px;text-align:center;}
        section .showaddr strong{font-weight:normal;color:#9900FF;font-size:26px;font-family:Helvetica;}
    </style>

    <section class="content">
        <div class="showaddr" id="showAddress" ><a id="editAddress" href="javascript:getaddr();"><strong>点击设置收货地址</strong></a></div>
    </section>
    </body>
    </html>


