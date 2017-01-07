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


define('PC_URL', $config['pc_url']);   //定义非微信浏览器跳转链接
define('PHONE_URL', $config['phone_url']);   //定义微信浏览器跳转链接

if($_SERVER['REQUEST_METHOD']!="POST"){

  $url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  $_SESSION['back_url']=$url;
}


if ( $_SESSION['user_id'] != 0)
    {
      $sql  = "SELECT * ".
           "FROM " .$GLOBALS['ecs']->table('users') . " WHERE user_id = ".$_SESSION['user_id'];
      $infos = $GLOBALS['db']->getRow($sql);

      $smarty->assign('user_status', 1);
      $css='<a href="#userinfo" class="toolbar-toggle"><i class="material-icons person"></i></a>';

    }else{
      $css='<a href="#account"class="toolbar-toggle"><i class="material-icons person"></i></a>';
    }

$smarty->assign('login_css', $css);

//print_r($infos);exit;
    /* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods(0,1);

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

$url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$_SESSION['back_url']=$url;
        if(!is_weixin()){

            ecs_header("Location: ".PC_URL);
               exit;
          }else{


              ecs_header("Location: ".PHONE_URL);
               exit;
            }


}


function ajax_please_in(){

       $result['error'] = 12;

        if(!is_weixin()){
           $result['url'] =PC_URL;

          }else{


              $result['url'] =PHONE_URL;

            }

            echo json_encode($result);
            exit;
}









?>