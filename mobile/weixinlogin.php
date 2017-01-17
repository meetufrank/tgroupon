<?php

/**
 * TGROUPON 购物流程
 * ============================================================================
 * 版权所有 2005-2010 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: douqinghua $
 * $Id: flow.php 17218 2011-01-24 04:10:41Z douqinghua $
 */

define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');


/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */

$code = $_GET['code'];
$state = $_GET['state'];


//换成自己的接口信息
$appid = 'wx972a6f963cf1d611';
$appsecret = '668ee48328701ca10efef2517d8826e8';
if (empty($code)) $this->error('授权失败');
$token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$appsecret.'&code='.$code.'&grant_type=authorization_code';
$token = json_decode(file_get_contents($token_url));
if (isset($token->errcode)) {
    echo '<h1>错误：</h1>'.$token->errcode;
    echo '<br/><h2>错误信息：</h2>'.$token->errmsg;
    exit;
}
$access_token_url = 'https://api.weixin.qq.com/sns/oauth2/refresh_token?appid='.$appid.'&grant_type=refresh_token&refresh_token='.$token->refresh_token;


//转成对象
$access_token = json_decode(file_get_contents($access_token_url));
if (isset($access_token->errcode)) {
    echo '<h1>错误：</h1>'.$access_token->errcode;
    echo '<br/><h2>错误信息：</h2>'.$access_token->errmsg;
    exit;
}
$user_info_url = 'https://api.weixin.qq.com/sns/userinfo?access_token='.$access_token->access_token.'&openid='.$access_token->openid.'&lang=zh_CN';
//转成对象
$user_info = json_decode(file_get_contents($user_info_url));
if (isset($user_info->errcode)) {
    echo '<h1>错误：</h1>'.$user_info->errcode;
    echo '<br/><h2>错误信息：</h2>'.$user_info->errmsg;

}

$rs =  json_decode(json_encode($user_info),true);//返回的json数组转换成array数组




//打印用户信息
$unionid = $rs['unionid'];

$openid = $rs['openid'];

$nickname = $rs['nickname'];

$sex = $rs['sex'];

$headimgurl = $rs['headimgurl'];

$sql = "select user_id from `ecs_users` where unionid = '$unionid'";
$openids = $db->getOne($sql);


if(!$openids){
	$sql = 'INSERT INTO ' . $ecs->table('users') . '(alias , wx_open_id , sex , reg_time  , headimgurl,unionid) VALUES ' .
                    "('$nickname'  , '$openid' , '$sex' , '" . time() . "' , '$headimgurl','$unionid')";
     $db->query($sql);
     $uid=$db->insert_id();

     $_SESSION['user_id'] = $uid;

}else{
	$sql = "update `ecs_users` set alias='$nickname',sex='$sex',reg_time='time()',headimgurl='$headimgurl',wx_open_id='$openid' where unionid='$unionid'";
	$db->query($sql);
   $_SESSION['user_id'] = $openids;
}





if($_SESSION['back_url']){
header("Location:".$_SESSION['back_url']);
}else{
   header("Location: goods_list.php");
}






?>