<?php

/**
 * TGROUPON 商品详情
 * ============================================================================
 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: goods.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
require(ROOT_PATH . 'include/lib_weixintong.php');
//头部需要文件
require(ROOT_PATH . 'include/lib_order.php');

/* 载入语言文件 */
require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/user.php');
require_once(ROOT_PATH . 'lang/' .$_CFG['lang']. '/shopping_flow.php');
require(ROOT_PATH . 'head.php');



//艺术家信息
//(头像、名称、地区、艺术家简介)
$ysjid = $_REQUEST['ysjid'];
$ysjxxsql = "select u.user_id,u.user_name,u.hav_logo,u.country,u.artiststalk from  `ecs_admin_user` as u where `user_id` = '$ysjid'";
$ysjxx = $db->getAll($ysjxxsql);
/* print_r($ysjxx); */
$smarty->assign('ysjxx',$ysjxx);


//近期作品
$ysjzpsql = "select g.goods_id,g.goods_name,g.goods_img,g.market_price from `ecs_admin_user` as u inner join `ecs_goods` as g
on u.user_id = g.arter_id where u.user_id = '$ysjid'";
$ysjzp = $db->getAll($ysjzpsql);
$smarty->assign('ysjzp',$ysjzp);


$smarty->display("artist-detail.dwt");   //加载艺术家	
?>