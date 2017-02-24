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

include(ROOT_PATH . 'head.php');

if (!isset($_REQUEST['act']))
{
    $_REQUEST['act'] = "artist_detail";
}
$page_num=1;  //页面显示条数
if($_REQUEST['act']=='artist_detail'){


  //艺术家banner显示
 $sql=" select * from ecs_touch_ad  where start_time<unix_timestamp(now()) and end_time>unix_timestamp(now()) and ad_code!='' and position_id=2 and enabled=1 order by sort desc limit 4 ";
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
$smarty->assign('banner_list',$banner_list);

//艺术家信息
//(头像、名称、地区、艺术家简介)
if(isset($_REQUEST['ysjid'])){
    $ysjid = $_REQUEST['ysjid'];
$ysjxxsql = "select u.user_id,u.user_name,u.hav_logo,u.country,u.artiststalk,u.sjsintro from  `ecs_admin_user` as u where `user_id` = '$ysjid'";
$ysjxx = $db->getRow($ysjxxsql);
/* print_r($ysjxx); */
$smarty->assign('ysjxx',$ysjxx);


//近期作品
$limit=' limit 0,'.$page_num;
$next_limit=' limit '.$page_num.','.$page_num;
$where=" and g.arter_id=".$ysjid;
$ysjzp=get_artist_goods($limit,$where);
$ysjzp_next=get_artist_goods($next_limit,$where);
if(count($ysjzp_next)){
   $more=1;
}else{
    $more=0;
}

$smarty->assign('more',$more);
$smarty->assign('ysjzp',$ysjzp);
}




$smarty->display("artist-detail.dwt");   //加载艺术家
exit;

}elseif($_REQUEST['act']=='get_next_list'){

  if(intval($_POST['page'])){
       $pages=intval($_POST['page']);
    }else{
       $pages=1;
    }
    $ysjid=intval($_POST['userid']);
    if($ysjid){
    $num=$page_num*$pages-1;
     $limit=' limit  '.$num.','.$page_num;
     $next_num=$page_num*($pages+1)-1;
     $next_limit=' limit  '.$next_num.','.$page_num;
     $where=" and g.arter_id=".$ysjid;
     $ysjzp=get_artist_goods($limit,$where);
     $ysjzp_next=get_artist_goods($next_limit,$where);
     if(count($ysjzp_next)){
          $more=1;
        }else{
            $more=0;
        }

        $data['data']=$ysjzp;
        $data['more']=$more;


    }

      echo json_encode($data);
     exit;

}



function get_artist_goods($limit='',$where=''){
      $ysjzpsql = "select min(ep.product_id) as product_id,ep.goods_id,ep.priceratio,cast(ep.attributeprice+g.more_price as decimal(10,2)) as attributeprice,cast(ep.falseprice+g.more_price as decimal(10,2)) as falseprice,ep.attributeimg,g.goods_name from ecs_products as ep INNER JOIN ecs_goods as g on g.goods_id=ep.goods_id where ep.attributeprice<>0 and ep.attributeimg!='' and g.is_delete=0 and g.is_on_sale=1 ".$where." GROUP BY ep.goods_id  order by g.sort_order desc ".$limit;
    $ysjzp = $GLOBALS['db']->getAll($ysjzpsql);

    return $ysjzp;
}
?>