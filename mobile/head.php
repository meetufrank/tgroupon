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
//-- INPUT
/*------------------------------------------------------ */

if (!isset($_REQUEST['step']))
{
    $_REQUEST['step'] = "cart";
}
/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */

assign_template();
assign_dynamic('flow');
$position = assign_ur_here(0, $_LANG['shopping_flow']);
$smarty->assign('page_title',       $position['title']);    // 页面标题
$smarty->assign('ur_here',          $position['ur_here']);  // 当前位置

$smarty->assign('categories',       get_categories_tree()); // 分类树
$smarty->assign('helps',            get_shop_help());       // 网店帮助
$smarty->assign('lang',             $_LANG);
$smarty->assign('show_marketprice', $_CFG['show_marketprice']);
$smarty->assign('data_dir',    DATA_DIR);       // 数据目录



    /* 标记购物流程为普通商品 */
    $_SESSION['flow_type'] = CART_GENERAL_GOODS;

    /* 如果是一步购物，跳到结算中心 */
    if ($_CFG['one_step_buy'] == '1')
    {
        ecs_header("Location: flow.php?step=checkout\n");
        exit;
    }

    /* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods();
   // print_r($cart_goods);exit;
    //print_r($cart_goods);exit;
    $smarty->assign('goods_list', $cart_goods['goods_list']);
    $smarty->assign('total', $cart_goods['total']);














?>