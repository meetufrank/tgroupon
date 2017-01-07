<?php
session_start();
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');
include_once(dirname(__FILE__) .'/include/lib_order.php');


$appid = "wxb5aec13c030a530b";
$secret = "2232d4acc3612e530f0ccc311c72d68c";
$code = $_GET["code"];

//第一步:取全局access_token
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$secret";
$token = getJson($url);

//第二步:取得openid
$oauth2Url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$secret&code=$code&grant_type=authorization_code";

$oauth2 = getJson($oauth2Url);

//第三步:根据全局access_token和openid查询用户信息
$access_token = $token["access_token"];
$openid = $oauth2['openid'];
$get_user_info_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$access_token&openid=$openid&lang=zh_CN";
$userinfo = getJson($get_user_info_url);

//打印用户信息


function getJson($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}

 $unionid = $userinfo['unionid'];
 $openid = $userinfo['openid'];
 $nickname = $userinfo['nickname'];
 $sex = $userinfo['sex'];
 $headimgurl = $userinfo['headimgurl'];

if($_GET['code']){
 $sql = "select user_id from `ecs_users` where unionid = '$unionid'";

$openids = $GLOBALS['db']->getOne($sql);



if(!$openids){
	$sql = 'INSERT INTO ' . $ecs->table('users') . '(alias , wx_open_id , sex , reg_time  , headimgurl,unionid) VALUES ' .
                    "('$nickname'  , '$openid' , '$sex' , '" . time() . "' , '$headimgurl','$unionid')";
     $GLOBALS['db']->query($sql);
     $uid=$GLOBALS['db']->insert_id();
     $_SESSION['user_id'] = $uid;


}else{
	$sql = "update `ecs_users` set alias='$nickname',sex='$sex',reg_time='time()',headimgurl='$headimgurl',wx_open_id='$openid' where unionid='$unionid'";
	$GLOBALS['db']->query($sql);
    $_SESSION['user_id'] = $openids;

}


// print_r($_SESSION['user_id']);exit;

           if($_SESSION['back_url']){
        header("Location:".$_SESSION['back_url']);
        }else{
           header("Location: goods_list.php");
        }

}







?>