<?php

ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

require_once "../lib/WxPay.Api.php";
require_once '../lib/WxPay.Notify.php';
require_once 'log.php';


//初始化日志
$logHandler= new CLogFileHandler("../logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}

	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
		Log::DEBUG("call back:" . json_encode($data));
		$notfiyOutput = array();

		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}
		return true;
	}
}

define('IN_ECTOUCH', true);
require('../../include/init.php');

$xml = $GLOBALS["HTTP_RAW_POST_DATA"];

Log::DEBUG($xml);
$notify = new PayNotifyCallBack();


// $xml='<xml><appid><![CDATA[wxb5aec13c030a530b]]></appid>
// <attach><![CDATA[娃娃啊啊]]></attach>
// <bank_type><![CDATA[CMB_DEBIT]]></bank_type>
// <cash_fee><![CDATA[1]]></cash_fee>
// <fee_type><![CDATA[CNY]]></fee_type>
// <is_subscribe><![CDATA[Y]]></is_subscribe>
// <mch_id><![CDATA[1267579601]]></mch_id>
// <nonce_str><![CDATA[9m48w4jsudwn577934lhlgkt5pk8tqb1]]></nonce_str>
// <openid><![CDATA[okRTqvv9Rri34dDloixJeixyRPms]]></openid>
// <out_trade_no><![CDATA[126757960120161224143511]]></out_trade_no>
// <result_code><![CDATA[SUCCESS]]></result_code>
// <return_code><![CDATA[SUCCESS]]></return_code>
// <sign><![CDATA[9563957A7BC4D2BBCC4314A1F694DC92]]></sign>
// <time_end><![CDATA[20161224143541]]></time_end>
// <total_fee>1</total_fee>
// <trade_type><![CDATA[NATIVE]]></trade_type>
// <transaction_id><![CDATA[4000242001201612243817562256]]></transaction_id>
// </xml>';


$arr=xml2array($xml);

//print_r($arr);exit;

if($arr['appid']=='wxb5aec13c030a530b'&&$arr['mch_id']=='1267579601'&&$arr['total_fee']==1&&$arr['result_code']=='SUCCESS'){
    $sql="select order_amount from ecs_order_info where order_sn='".$arr['out_trade_no']."'";
    $result=$GLOBALS['db']->getOne($sql);
    $price=$result-$arr['cash_fee']/100;

    if($result){
	 	$sql="update ecs_order_info set order_status=1,pay_status=2,order_amount=0,money_paid=".$price." where order_sn=".$arr['out_trade_no'];
    	if($GLOBALS['db']->query($sql)){
    		$notify->Handle(true);
    		    	}

    }


}exit;








