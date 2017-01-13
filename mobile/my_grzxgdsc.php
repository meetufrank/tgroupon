<?php

/**
 * TGROUPON 会员中心
 * ============================================================================
 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: user.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
include('head.php');

   if ($_SESSION['user_id'] <= 0)
        {
            please_in();
        }


$user_id=$_SESSION['user_id'];

if($_GET['act'] == ''){
		$_GET['act'] = 'wodeshochanglist';
}

     if($_GET['act'] == 'wodeshochanglist'){

    //收藏的商品数量
    $user_id = $_SESSION['user_id'];

    $sqlspnum = "SELECT COUNT(*) FROM " .$ecs->table('collect_goods'). " WHERE user_id = '$user_id' order by add_time";
    $spnum = $db->getOne($sqlspnum);
    $smarty->assign('spnum',  $spnum);

    //收藏的商品信息(商品图片,商品名称)
    $sqlspxx = "
select c.rec_id,g.goods_id,p.attributeimg,g.goods_name,p.product_number from `ecs_collect_goods` as c
inner join `ecs_products` as p
on c.goods_id = p.goods_id
inner join `ecs_goods` as g
on c.goods_id = g.goods_id
where c.user_id = $user_id
group by g.goods_id";
    $spxx = $db->getAll($sqlspxx);

    $smarty->assign('spxx',  $spxx);



    //收藏的艺术家

    $sqlysjnum = "SELECT COUNT(*) FROM " .$ecs->table('shocangysj'). " WHERE user_id = '$user_id' order by add_time";
    $ysjnum = $db->getOne($sqlysjnum);
    $smarty->assign('ysjnum',  $ysjnum);


    //收藏的艺术家(艺术家头像,艺术家名称)
    $sqlysj = "select sc.ysj_id,sc.scid,u.user_name,u.hav_logo from ecs_shocangysj as sc inner join ecs_admin_user as u ON
    sc.ysj_id = u.user_id
    where sc.`user_id` = '$user_id' order by sc.add_time";
    $ysjxx = $db->getAll($sqlysj);


    $smarty->assign('ysjxx',  $ysjxx);
	$smarty->display('my_grzxgdsc.dwt');

	}


	//删除收藏商品
elseif($_GET['act'] == 'del')
{

    $recid = $_GET['recid'];
    $sqlspdel ="DELETE FROM  `ecs_collect_goods`
    WHERE rec_id = '$recid'";
    $db->query($sqlspdel);
}
//删除艺术家收藏
elseif ($_GET['act'] == 'delsyj')
{

     $scysjid = $_GET['scysjid'];
     $sqlysjdel ="DELETE FROM  `ecs_shocangysj`
     WHERE scid = '$scysjid'";
     $db->query($sqlysjdel);


}



?>