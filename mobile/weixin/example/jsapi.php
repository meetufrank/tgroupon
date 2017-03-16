<?php
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);
require_once "../lib/WxPay.Api.php";
require_once "WxPay.JsApiPay.php";
require_once 'log.php';

//初始化日志
$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

//打印输出数组信息
function printf_info($data)
{
    foreach($data as $key=>$value){
        echo "<font color='#00ff55;'>$key</font> : $value <br/>";
    }
}

//①、获取用户openid
$tools = new JsApiPay();
$openId = $tools->GetOpenid();

define('IN_ECTOUCH', true);
require('../../include/init.php');

$orderid=$_SESSION['my_mobile_order'];
if($orderid){
$order_id=$orderid;
//查询货品是否足够
$sql=" select product_id,goods_number from ".$GLOBALS['ecs']->table('order_goods')." where  order_id=".$order_id;

                $pro_arr=$GLOBALS['db']->getAll($sql);
                foreach ($pro_arr as $key => $value) {
                    if($value['product_id']){
                            $sql=" select   sum(eg.goods_number) from ecs_order_goods as eg inner join ecs_order_info as ei on eg.order_id=ei.order_id where ei.pay_status=2 and eg.product_id=".$value['product_id'];
                            $numbers=$GLOBALS['db']->getOne($sql);
                            $sql=" select product_number from ".$GLOBALS['ecs']->table('products')." where product_id=".$value['product_id'];
                            $sumnumber=$GLOBALS['db']->getOne($sql); //总库存
                            if($value['goods_number']+$numbers>$sumnumber){
                            	echo '<script>alert("该订单中含有库存不足商品，请重新下单");</script>';
                                 ecs_header("Location: ../../my_user.php?act=order_list");
                                  exit;
                            }
                        }
                }

$sql=" select pay_status from  ecs_order_info where order_id=".$order_id;
$pay_status=$GLOBALS['db']->getOne($sql);
if($pay_status==2){
      ecs_header("Location: ../../flow.php?step=pay_ok&order_id=".$order_id);
}else{

	$sql="select eog.goods_name,eoi.goods_amount,eoi.order_sn from ecs_order_goods as eog
			INNER JOIN ecs_order_info as eoi
			INNER JOIN ecs_goods as eg
			on  eog.order_id=eoi.order_id and eog.goods_id=eg.goods_id
			where eog.order_id=".$order_id;
			$orderdata=$GLOBALS['db']->getAll($sql);
			foreach ($orderdata as $key => $value) {
			    foreach ($orderdata[$key] as $k => $v){
			    if($k=='goods_name'){
			        $goodsname[]=$orderdata[$key][$k];
			    }
			}
}

}

$title=@implode('、',$goodsname);

$price=$orderdata[0]['goods_amount']*100;
$goods_sn=$orderdata[0]['order_sn'];
//②、统一下单
$input = new WxPayUnifiedOrder();
$input->SetBody("型色主义：".$goods_sn);
$input->SetAttach("$title");
$input->SetOut_trade_no("$goods_sn");
//$input->SetTotal_fee("$price");
$input->SetTotal_fee("$price");
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("test");
$input->SetNotify_url("http://meetuuu.com/mobile/weixin/example/notify.php");
$input->SetTrade_type("JSAPI");
$input->SetProduct_id("$goods_sn");
$input->SetOpenid($openId);
print_r($order);
$order = WxPayApi::unifiedOrder($input);

$jsApiParameters = $tools->GetJsApiParameters($order);
}

// $js_string.=' <script type="text/javascript"> ';
// $js_string.=' function jsApiCall(){  ';
// $js_string.=' WeixinJSBridge.invoke(  ';
// $js_string.="'getBrandWCPayRequest',  ";
// $js_string.=$jsApiParameters.', ';
// $js_string.=' function(res){ WeixinJSBridge.log(res.err_msg);alert(res.err_code+res.err_desc+res.err_msg);})}';
// $js_string.='function callpay()
// 	{
// 		if (typeof WeixinJSBridge == "undefined"){
// 		    if( document.addEventListener ){
// 		        document.addEventListener(\'WeixinJSBridgeReady\', jsApiCall, false);
// 		    }else if (document.attachEvent){
// 		        document.attachEvent(\'WeixinJSBridgeReady\', jsApiCall);
// 		        document.attachEvent(\'onWeixinJSBridgeReady\', jsApiCall);
// 		    }
// 		}else{
// 		    jsApiCall();
// 		}
// 	}';
// $js_string.="</script>";


//获取共享收货地址js函数参数
// $editAddress = $tools->GetEditAddressParameters();

//③、在支持成功回调通知中处理成功之后的事宜，见 notify.php
/**
 * 注意：
 * 1、当你的回调地址不可访问的时候，回调通知会失败，可以通过查询订单来确认支付是否成功
 * 2、jsapi支付时需要填入用户openid，WxPay.JsApiPay.php中有获取openid流程 （文档可以参考微信公众平台“网页授权接口”，
 * 参考http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html）
 */
?>

<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>微信支付</title>
    <script type="text/javascript">
	//调用微信JS api 支付
	function jsApiCall()
	{
		WeixinJSBridge.invoke(
			'getBrandWCPayRequest',
			<?php echo $jsApiParameters; ?>,
			function(res){
				 WeixinJSBridge.log(res.err_msg);
				// alert(res.err_code+res.err_desc+res.err_msg);
				if (res.err_msg == "get_brand_wcpay_request:ok") {
                    window.location.href="../../flow.php?step=pay_success";

                }else if (res.err_msg == "get_brand_wcpay_request:cancel")  {
                     alert("支付过程中用户取消");
                 }else{
                    //支付失败
                    alert(res.err_msg)
                 }
			}
		);
	}

	function callpay()
	{
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', jsApiCall);
		        document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
		    }
		}else{
		    jsApiCall();
		}
	}
	window.onload=function(){
		callpay();
	}

	</script>
	<!-- <script type="text/javascript">
	//获取共享地址
	function editAddress()
	{
		WeixinJSBridge.invoke(
			'editAddress',
			<?php //echo $editAddress; ?>,
			function(res){
				var value1 = res.proviceFirstStageName;
				var value2 = res.addressCitySecondStageName;
				var value3 = res.addressCountiesThirdStageName;
				var value4 = res.addressDetailInfo;
				var tel = res.telNumber;

				alert(value1 + value2 + value3 + value4 + ":" + tel);
			}
		);
	}

	window.onload = function(){
		if (typeof WeixinJSBridge == "undefined"){
		    if( document.addEventListener ){
		        document.addEventListener('WeixinJSBridgeReady', editAddress, false);
		    }else if (document.attachEvent){
		        document.attachEvent('WeixinJSBridgeReady', editAddress);
		        document.attachEvent('onWeixinJSBridgeReady', editAddress);
		    }
		}else{
			editAddress();
		}
	};

	</script> -->
</head>
<body>
    <!-- <br/>
    <font color="#9ACD32"><b>该笔订单支付金额为<span style="color:#f00;font-size:50px">1分</span>钱</b></font><br/><br/>
	<div align="center">
		<button style="width:210px; height:50px; border-radius: 15px;background-color:#FE6714; border:0px #FE6714 solid; cursor: pointer;  color:white;  font-size:16px;" type="button" onclick="callpay()" >立即支付</button>
	</div> -->
</body>
</html>