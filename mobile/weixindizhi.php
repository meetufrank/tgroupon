    <?php
echo "调用微信地址php文件测试";
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
    $smarty->assign('appId', $appId);

    $Parameters['url'] = $redirect_uri;
    $smarty->assign('redirect_uri', $redirect_uri);

    $Parameters['timestamp'] = "$timestamp";
    $smarty->assign('timestamp', $timestamp);

    $Parameters['noncestr'] = "$nonceStr";
    $smarty->assign('nonceStr', $nonceStr);

    $Parameters['accesstoken'] = $access_token['access_token'];

    // 生成 SING

    $addrSign = genSha1Sign($Parameters);
     $smarty->assign('addrSign', $addrSign);




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

