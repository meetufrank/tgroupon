
 
 <!DOCTYPE html>
    <html>
    <head>
<meta name="Generator" content="TGROUPON v2.7.3" />
        <title>获取共享地址</title>
        <meta charset="utf-8" />
        <meta id="viewport" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1; user-scalable=no;" />
    </head>
    <script language="javascript">
        function getaddr(){
            WeixinJSBridge.invoke('editAddress',{
                "appId" : "<?php echo '<?php'; ?>
 echo $appId;<?php echo '?>'; ?>
", //公众号名称，由商户传入
                "timeStamp" : "<?php echo '<?php'; ?>
 echo $timestamp;<?php echo '?>'; ?>
", //时间戳 这里随意使用了一个值
                "nonceStr" : "<?php echo '<?php'; ?>
 echo $nonceStr;<?php echo '?>'; ?>
", //随机串
                "signType" : "SHA1", //微信签名方式:sha1
                "addrSign" : "<?php echo '<?php'; ?>
 echo $addrSign;<?php echo '?>'; ?>
", //微信签名
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

    
        <div class="showaddr" id="showAddress" ><a id="editAddress" href="javascript:getaddr();"><strong>点击设置收ss货地址</strong></a></div>

    </body>
    </html>