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
require(dirname(__FILE__) . '/../../include/init.php');

$xml = $GLOBALS["HTTP_RAW_POST_DATA"];

Log::DEBUG(print_r($xml,TRUE));
$notify = new PayNotifyCallBack();
//print_r($result);exit;




$arr=xml2array($xml);
//print_r($arr );


if($arr['appid']=='wxb5aec13c030a530b'&&$arr['mch_id']=='1267579601'&&$arr['total_fee']==1&&$arr['result_code']=='SUCCESS'){
    $sql="select COUNT(*) from ecs_order_info where order_sn=".$arr['out_trade_no'];
    $result=$GLOBALS['db']->getOne($sql);


    if($result){
	 	$sql="update ecs_order_info set order_status=1,pay_status=2 where order_sn=".$arr['out_trade_no'];
    	if($GLOBALS['db']->query($sql)){
    		$notify->Handle(true);
    	}

    }


}

	/*
	   将xml转换成数组
	 */
	function xml2array($xmlString = '')
	 {
	  $targetArray = array();
	  $xmlString = str_replace( array( '<![CDATA[' , ']]>'), '', $xmlString );
	  $xmlObject = simplexml_load_string($xmlString);
	  $mixArray = (array)$xmlObject;
	  foreach($mixArray as $key => $value)
	  {
	   if(is_string($value))
	   {
		$targetArray[$key] = $value;
	   }
	   if(is_object($value))
	   {
		$targetArray[$key] = xml2array($value->asXML());
	   }
	   if(is_array($value))
	   {
		foreach($value as $zkey => $zvalue)
		{
		 if(is_numeric($zkey))
		 {
		  $targetArray[$key][] = xml2array($zvalue->asXML());
		 }
		 if(is_string($zkey))
		 {
		  $targetArray[$key][$zkey] = xml2array($zvalue->asXML());
		 }
		}
	   }
	  }
	  return $targetArray;

	 }






