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



    /* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods();

    //print_r($cart_goods);exit;
    $smarty->assign('goods_list', $cart_goods['goods_list']);
    $smarty->assign('total', $cart_goods['total']);
 $smarty->assign('user_data', $infos);






function please_in(){

        /* 用户没有登录且没有选定匿名购物，转向到登录页面 */
        ecs_header("Location: flow.php?step=login\n");
        exit;


}










?>