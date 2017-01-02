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



include_once(ROOT_PATH .'include/lib_order.php');

if ( $_SESSION['user_id'] != 0)
    {
      $sql  = "SELECT * ".
           "FROM " .$GLOBALS['ecs']->table('users') . " WHERE user_id = '$user_id'";
      $infos = $GLOBALS['db']->getRow($sql);

      $smarty->assign('user_status', 1);
    }


//print_r($infos);exit;
    /* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods();

    //print_r($cart_goods);exit;
    $smarty->assign('goods_list', $cart_goods['goods_list']);
    $smarty->assign('total', $cart_goods['total']);
 $smarty->assign('user_data', $infos);


    $is_wechat=is_wechat_browser();
        if($is_wechat){
            $loginphone = "1";   //微信浏览器
            $smarty->assign('loginphone',  $loginphone);
          }else{

              $loginpc = "2";  //非微信浏览器
              $smarty->assign('loginpc',  $loginpc);
            }




function is_weixin(){

if ( strpos($_SERVER['HTTP_USER_AGENT'],

'MicroMessenger') !== false ) {

        return true;

    }

        return false;

}
function please_in(){



        if(!is_weixin()){
            ecs_header("Location: https://open.weixin.qq.com/connect/qrconnect?appid=wx972a6f963cf1d611&response_type=code&scope=snsapi_login&redirect_uri=http://meetuuu.com/mobile/weixinlogin.php&state=668ee48328701ca10efef2517d8826e8" );
               exit;
          }else{


              ecs_header("Location: https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb5aec13c030a530b&redirect_uri=http://meetuuu.com/mobile/loginphone.php&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect");
               exit;
            }




}


function ajax_please_in(){

       $result['error'] = 12;

        if(!is_weixin()){
           $result['url'] =" https://open.weixin.qq.com/connect/qrconnect?appid=wx972a6f963cf1d611&response_type=code&scope=snsapi_login&redirect_uri=http://meetuuu.com/mobile/weixinlogin.php&state=668ee48328701ca10efef2517d8826e8";

          }else{


              $result['url'] ="https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb5aec13c030a530b&redirect_uri=http://meetuuu.com/mobile/loginphone.php&response_type=code&scope=snsapi_userinfo&state=1#wechat_redirect";

            }

            echo json_encode($result);
            exit;
}









?>