<?php

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');



$code = $_GET['code'];
$state = $_GET['state'];
//换成自己的接口信息
$appid = $config['appidphonecs'];
$appsecret = $config['appSecretphonecs'];
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
    exit;
}



 $unionid = $user_info ->unionid;

 $openid = $user_info -> openid;
 $nickname = $user_info->nickname;
 $sex = $user_info->sex;
 $headimgurl = $user_info->headimgurl;


$sql = "select user_id from `ecs_users` where unionid = '$unionid'";

$openids = $GLOBALS['db']->getOne($sql);



if(!$openids){
	 $sql = 'INSERT INTO ' . $ecs->table('users') . '(user_name,alias , wx_open_id , sex , reg_time  , headimgurl,unionid) VALUES ' .
                    "('$nickname','$nickname'  , '$openid' , '$sex' , '" . time() . "' , '$headimgurl','$unionid')";
     $GLOBALS['db']->query($sql);
     $uid=$GLOBALS['db']->insert_id();

      setcookie('user_id',$uid);
      $idstring=uniqid();

   $sql = "UPDATE ecs_users set weiyi_num='".$idstring."' where user_id=".$uid;
    $db->query($sql);

}else{
	 $sql = "UPDATE  ecs_users set user_name='$nickname',alias='$nickname',sex=$sex,reg_time='time()',headimgurl='$headimgurl',wx_open_id='$openid' where unionid='$unionid'";
	$GLOBALS['db']->query($sql);

    setcookie('user_id',$openids);
}


           if($_SESSION['back_url']){
        ecs_header("Location:".$_SESSION['back_url']);
        }else{
          ecs_header("Location:goods_list.php");
        }









?>