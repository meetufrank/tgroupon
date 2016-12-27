<?php


require (dirname(__FILE__) . '/../../mobile/include/init.php');
$wxch_config = $db->getRow("SELECT * FROM `wxch_config` WHERE `id` = 1");
$appid = $wxch_config['appid'];
$appsecret = $wxch_config['appsecret'];
$code = !empty($_GET['code']) ? $_GET['code'] : '';
$url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
$ret_json = curl_get_contents($url);
$ret = json_decode($ret_json);
$openid = !empty($ret->openid) ? $ret->openid : '';
$access_token = !empty($ret->access_token) ? $ret->access_token : '';



?>