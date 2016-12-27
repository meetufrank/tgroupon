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



if($_GET['act'] == ''){
		$_GET['act'] = 'wodeshochanglist';
}

     if($_GET['act'] == 'wodeshochanglist'){
		 
    //收藏的单品
    $user_id = 3193;
    $sqlspnum = "SELECT COUNT(*) FROM " .$ecs->table('collect_goods'). " WHERE user_id = '$user_id' order by add_time";
    $spnum = $db->getOne($sqlspnum);
    $smarty->assign('spnum',  $spnum);

    //收藏的商品信息(商品图片,商品名称)
    $sqlspxx = "select shoc.goods_id,shoc.rec_id,gs.goods_img,gs.goods_name from ecs_collect_goods as shoc inner JOIN
    ecs_goods as gs on shoc.goods_id = gs.goods_id
    where `user_id` = '$user_id' order by shoc.add_time";
    $spxx = $db->getAll($sqlspxx);
    // var_dump($spxx);
    $smarty->assign('spxx',  $spxx);



    //收藏的艺术家
    $user_ids = 9;
    $sqlysjnum = "SELECT COUNT(*) FROM " .$ecs->table('shocangysj'). " WHERE user_id = '$user_ids' order by add_time";
    $ysjnum = $db->getOne($sqlysjnum);
    $smarty->assign('ysjnum',  $ysjnum);


    //收藏的艺术家(艺术家头像,艺术家名称)
    $sqlysj = "select sc.ysj_id,sc.scid,u.user_name,u.hav_logo from ecs_shocangysj as sc inner join ecs_admin_user as u ON
    sc.ysj_id = u.user_id
    where sc.`user_id` = '$user_ids' order by sc.add_time";
    $ysjxx = $db->getAll($sqlysj);
	

    $smarty->assign('ysjxx',  $ysjxx);
	$smarty->display('my_grzxgdsc.dwt');
	
	}
	
	
	//删除收藏商品
elseif($_GET['act'] == 'del')
{

    $recid = $_GET['recid'];
    $sqlspdel ="DELETE FROM  `ecs_collect_goods`
    WHERE rec_id = '$recid';";
    $db->query($sqlspdel);
	print_r($sqlspdel);



}
//删除艺术家收藏
elseif ($_GET['act'] == 'delsyj')
{

     $scysjid = $_GET['scysjid'];
     $sqlysjdel ="DELETE FROM  `ecs_shocangysj`
     WHERE scid = '$scysjid'";
     $db->query($sqlysjdel); 
	 
	 print_r($sqlysjdel);
}



?>