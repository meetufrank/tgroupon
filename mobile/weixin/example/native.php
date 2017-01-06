<?php
ini_set('date.timezone','Asia/Shanghai');
//error_reporting(E_ERROR);

require_once __DIR__."/../lib/WxPay.Api.php";
require_once "WxPay.NativePay.php";
require_once 'log.php';
$notify = new NativePay();

//模式二
/**
 * 流程：
 * 1、调用统一下单，取得code_url，生成二维码
 * 2、用户扫描二维码，进行支付
 * 3、支付完成之后，微信服务器会通知支付成功
 * 4、在支付成功通知中需要查单确认是否真正支付成功（见：notify.php）
 */

$order_id=$order['order_id'];
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
$title=implode('、',$goodsname);
$price=$orderdata[0]['goods_amount']*100;
$goods_sn=$orderdata[0]['order_sn'];
$input = new WxPayUnifiedOrder();
$input->SetBody("型色主义：".$goods_sn);
$input->SetAttach("$title");
$input->SetOut_trade_no("$goods_sn");
//$input->SetTotal_fee("$price");
$input->SetTotal_fee("$price");
$input->SetTime_start(date("YmdHis"));
$input->SetTime_expire(date("YmdHis", time() + 600));
$input->SetGoods_tag("test");
$input->SetNotify_url("http://meetuuu.com/mobile/weixin/example/notify.php ");
$input->SetTrade_type("NATIVE");
$input->SetProduct_id("$goods_sn");
$result = $notify->GetPayUrl($input);//print_r($result);exit;
$url2 = $result["code_url"];


