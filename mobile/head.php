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




/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */


$code = $_GET['code'];
$state = $_GET['state'];


//换成自己的接口信息
$appid = 'wx7eee3208b7b59ea1';
$appsecret = '9d9360d18e266b81d69888227fbbadeb';
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

$rs =  json_decode(json_encode($user_info),true);//返回的json数组转换成array数组





        $db->query($sql);

//打印用户信息

print_r($rs);
$openid = $rs['openid'];
$nickname = $rs['nickname'];
$sex = $rs['sex'];
$headimgurl = $rs['headimgurl'];
 $sql = 'INSERT INTO ' . $ecs->table('users') . '(alias , wx_open_id , sex , reg_time  , headimgurl) VALUES ' .
                    "('$nickname'  , '$openid' , '$sex' , '" . time() . "' , '$headimgurl')";
$db->query($sql);

header("Location:index.php");



if ( $_SESSION['user_id'] != 0)
    {
      $sql  = "SELECT user_name, birthday, sex, question, answer, rank_points, pay_points,user_money, user_rank,".
             " msn, qq, office_phone, home_phone, mobile_phone, passwd_question, passwd_answer ".
           "FROM " .$GLOBALS['ecs']->table('users') . " WHERE user_id = '$user_id'";
      $infos = $GLOBALS['db']->getRow($sql);

      $smarty->assign('user_status', 1);
    }



    /* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods();
   // print_r($cart_goods);exit;
    //print_r($cart_goods);exit;
    $smarty->assign('goods_list', $cart_goods['goods_list']);
    $smarty->assign('total', $cart_goods['total']);
 $smarty->assign('user_data', $infos);






function please_in(){
    echo '
  <script  type="text/javascript" charset="utf-8" >alert(\'您需要登录\');</script>
    ';
    /* 用户没有登录且没有选定匿名购物，转向到登录页面 */
        ecs_header("Location: flow.php?step=login\n");
        exit;


}









?>