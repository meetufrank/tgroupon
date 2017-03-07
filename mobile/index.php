<?php

/**
 * TGROUPON 首页文件
 * ============================================================================
 * * 版权所有 2005-2012 TGROUPON中国，并保留所有权利。
 * 网站地址: http://www.tgroupon.cn；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: index.php 17217 2011-01-19 06:29:08Z liubo $
*/
//
//
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');

include('head.php');


//首页banner显示
 $sql=" select * from ecs_touch_ad  where  ad_code!='' and position_id=1 and enabled=1 order by sort desc limit 4 ";
$banner_list=$GLOBALS['db']->getAll($sql);

foreach ($banner_list as $key => $value) {
    if(!strpos($value['ad_code'],'http://')){
           $banner_list[$key]['ad_code']="data/afficheimg/".$value['ad_code'];
    }
    if(strpos($value['ad_link'], '?')){
      $banner_list[$key]['ad_link']=$value['ad_link'].$linestring2;
    }else{
      $banner_list[$key]['ad_link']=$value['ad_link'].$linestring1;
    }
}



//分类列表及小图标
 $sql = 'SELECT cat_id,cat_name,cat_ico  FROM ' . $GLOBALS['ecs']->table('category') . " WHERE is_show=1 and cat_ico!=''  order by sort_order desc ";
 $type_list = $GLOBALS['db']->getAll($sql);
if(count($type_list)<5){   //首页艺术家列表的更多是否显示
    $type_hide=0;
}else{
    $type_hide=1;
}
//特别优惠
$tb_where=' and g.is_very=1';
$tb_limit=" ,rand() limit 1";
$tb_list=get_goods_list($tb_where,$tb_limit);  //获取特别优惠商品列表

//新品上架
$xp_where=' and g.is_new=1';
$xp_limit=" ,rand() limit 8";
$xp_list=get_goods_list($xp_where,$xp_limit);  //获取新品上架商品列表

//打折优惠
$dz_where=' and g.is_hot=1';
$dz_limit=" ,rand() limit 8";
$dz_list=get_goods_list($dz_where,$dz_limit);  //获取新品上架商品列表

//艺术家列表
 $sql  = 'SELECT user_id, user_name,hav_logo'.

            ' FROM ' .$GLOBALS['ecs']->table('admin_user')."WHERE role_id = 4  and hav_logo!=''".' ORDER BY rand() limit 5';

    $ysj_list = $GLOBALS['db']->getAll($sql);
if(count($ysj_list)<5){   //首页艺术家列表的更多是否显示
    $ysj_hide=0;
}else{
    $ysj_hide=1;
}

$smarty->assign("banner_list",$banner_list);
$smarty->assign("ysj_hide",$ysj_hide);
$smarty->assign("type_hide",$type_hide);
$smarty->assign("ysj_list",$ysj_list);
$smarty->assign("dz_list",$dz_list);
$smarty->assign("xp_list",$xp_list);
$smarty->assign("tb_list",$tb_list[0]);
$smarty->assign("type_list",$type_list);
$smarty->display('xs_index.dwt');


//获取商品列表
function get_goods_list($where='',$limit=''){

      $sql="select min(ep.product_id) as product_id,ep.goods_id,cast((1-ep.priceratio)*100 as decimal(2,0))as  priceratio,cast(ep.attributeprice+g.more_price as decimal(10,2)) as attributeprice,g.listimg,cast(ep.falseprice+g.more_price as decimal(10,2)) as falseprice,ep.attributeimg,g.goods_name,g.goods_img,g.veryimg from ecs_products as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where." GROUP BY ep.goods_id  order by g.sort_order desc ".$limit;
      $data=$GLOBALS['db']->getALL($sql);
      return $data;
}
?>