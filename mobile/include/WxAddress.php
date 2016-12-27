<?php
/**
 * 微信地址共享接口文件
 * 1.配置好APPID，APPSECRET就可以直接使用
 * 2.https://pay.weixin.qq.com/wiki/doc/api/jsapi.php?chapter=7_8&index=7 官方文档，确保使用条件无误
 * 3.友情提示，共享支付链接地址需要是【微信支付的受信任链接】，具体参考微信支付接口
 * 4.友情提示，共享支付链接地址需要是【公众号的 授权回调域名】，具体参考网页授权接口
 * 		http://mp.weixin.qq.com/wiki/17/c0f37d5704f0b64713d5d2c37b468d75.html
 * 5.工具类经过验证有效之后，做过部分改动，不确保100%有效运行。希望使用者通过日志调试。
 *
 */
class WxAddress{
	
	const APPID = 'wxb5aec13c030a530b';

	const APPSECRET = '2232d4acc3612e530f0ccc311c72d68c';
	
	const LOGPATH = 'a.';//日志路径,随意填写
	/**
	 * 
	 * 获取微信地址共享接口参数
	 * 
	 * 注意：需要使用微信地址共享页面的url不允许包含参数code和state！！！！
	 * 
	 */
	public static function getWxAddressConfig(){
		if(isset($_GET['code'])){
			$code=$_GET['code'];
			if(!$code){
					return array(
					'appId'=>'',
					'addrSign'=>'',
					'timeStamp'=>'',
					'nonceStr'=>''
				);	 
			}
			$state=$_GET['state'];
			
			$appId=self::APPID;
			
			$data = array(
				'appid' => $appId,
				'secret' => self::APPSECRET,
				'code'=>$code,
				'grant_type'=>'authorization_code'
			);
			
			$tokenurl = "https://api.weixin.qq.com/sns/oauth2/access_token";
			
			$result=self::getCurl($tokenurl,$data);
			
			$result=json_decode($result,true);
	
			if(isset($result['errcode']) && $result['errcode']!=0){
				self::log('ADDRESS_GET_TOKEN_ERROR-----'.json_encode($result),'','','','PAY');
			}
			
			$scope='jsapi_address';
			$signType='SHA1';
			$timeStamp=time().'';//必须是字符串
			$nonceStr=self::getNonceStr(12);
	
			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$addrSign='accesstoken='.$result['access_token'].'&appid='.$appId.'&noncestr='.$nonceStr.'&timestamp='.$timeStamp.'&url='.$url;
			self::log('ADDRESS_GET_TOKEN_SIGN-----'.$addrSign,'','','','PAY');
			$addrSign=sha1($addrSign);
			self::log('ADDRESS_GET_TOKEN_SIGN_SHA1-----'.$addrSign,'','','','PAY');
			//最终返回的需要传到前台的参数
			return array(
				'appId'=>$appId,
				'addrSign'=>$addrSign,
				'timeStamp'=>$timeStamp,
				'nonceStr'=>$nonceStr
			);	
		}else{
			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$url=rawurlencode($url);
			$state=self::getNonceStr(6);
			$call='https://open.weixin.qq.com/connect/oauth2/authorize?appid='.self::APPID.'&redirect_uri='.$url.'&response_type=code&scope=snsapi_base&state='.$state.'#wechat_redirect';
			self::log('ADDRESS_OAUTH2_URL---'.$call,'','','','PAY');
			header('Location:'.$call);
			exit();
		}
	}
	
	public static function getCurl($url,$data=array()){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$data = curl_exec($ch);
		//返回结果
		if($data){
			curl_close($ch);
			return $data;
		} else {
			$error = curl_errno($ch);
			curl_close($ch);
			throw new WxPayException("curl出错，错误码:$error");
		}
	}
	
	/**
	 *
	 * 产生随机字符串，不长于32位
	 * @param int $length
	 * @return 产生的随机字符串
	 */
	public static function getNonceStr($length = 32)
	{
		$chars = "abcdefghijklmnopqrstuvwxyz0123456789";
		$str ="";
		for ( $i = 0; $i < $length; $i++ )  {
			$str .= substr($chars, mt_rand(0, strlen($chars)-1), 1);
		}
		return $str;
	}
	
	/**
	* 写日志
	* 参数：要写入的信息，文件名，错误行数，错误代号，日志文件名
	**/
	public static function log($msg, $errfile='',$errline='',$errno='',$saveLogPrev=''){
		if(!$saveLogPrev){
			$saveLogPrev = date('Ymd');
		}
		$path = self::LOGPATH.'/';
		$file = $path.$saveLogPrev.'.log' ;
		$msg  = date('Y-m-d H:i:s ').$_SERVER['QUERY_STRING'].'|'.$errfile.'|'.$errline.'|'.$errno.'|'.str_replace(array("\r", "\n"), array('\\r', '\\n'), $msg)."\r\n";
		error_log($msg, 3, $file);
	}
}