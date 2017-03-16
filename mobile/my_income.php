<?php
/**
 * @Author: anchen
 * @Date:   2017-02-06 13:22:33
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-02-10 17:15:54
 */
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');


include_once('head.php');
//定义选中样式
$smarty->assign('my_active',5);
 // $userid=6;

   if ($_SESSION['user_id'] <= 0)
        {
            please_in();
        }else{
          $userid=$_SESSION['user_id'];
        }

if($_REQUEST['act']==''){
  $act="income";
}else{
    $act=$_REQUEST['act'];
}
$page_num=10;  //分成每页显示数量
$log_num=5;    //提现记录每页显示数量
/*
   我的收益，商品销量
 */
if($act=='income'){




  $sql="select hav_money,all_money from ".$ecs->table('users')." where user_id=".$userid." and (is_line!=0 or is_art!=0)";    //查询提现金额
  $tixian=$GLOBALS['db']->getRow($sql);
  if(is_array($tixian)){
    $smarty->assign('tixian_money',$tixian['hav_money']);   //可提现金额
    $smarty->assign('all_money',$tixian['all_money']);    //提现总额
  }else{
    ecs_header("Location:my_user.php?act=order_list");
    exit;
  }
// $fencheng_limit=' limit 0,'.$page_num;

//查询分成记录总数量
$sql=" select count(*) from ".$ecs->table('fencheng')." where get_shopid=".$userid." and status=0 ";
$fencheng_count=$GLOBALS['db']->getOne($sql);
$fencheng_pages=ceil($fencheng_count/$page_num);
$smarty->assign('fencheng_pages',$fencheng_pages);

//查询提现记录总数量
$sql=" select count(*) from ".$ecs->table('txlog')." where log_userid=".$userid;
$tixian_count=$GLOBALS['db']->getOne($sql);
$tixian_pages=ceil($tixian_count/$log_num);
$smarty->assign('tixian_pages',$tixian_pages);


//   $fc_list=get_fencheng_list($userid,$fencheng_limit);



// $smarty->assign('fc_list',$fc_list);


// $sql="select log_content,DATE_FORMAT(log_time,'%Y/%m/%d %H:%i') as log_time from ".$ecs->table('txlog')." where log_userid=".$userid." order by log_time desc";
// $logarr=$GLOBALS['db']->getAll($sql);

// $smarty->assign('logstring',json_encode($logarr));
 // print_r($logarr);exit;
   $smarty->display('my_income.dwt');
   exit;
}elseif($act=='add_tixian'){

    $sql="select time from ".$ecs->table('tixian')." where line_shopid=".$userid;    //查询提现金额
   $time=$GLOBALS['db']->getOne($sql);
   $time=strtotime($time);
   $now=time();
   $days=round(($now-$time)/86400)+1;

   $sql="select hav_money from ".$ecs->table('users')." where user_id=".$userid." and (is_line!=0 or is_art!=0)";    //查询提现金额
   $tixian=$GLOBALS['db']->getOne($sql);

 if($tixian>=200||$days>=30&&$tixian>0){
     $time=date('Y-m-d H:i:s');
    $sql="insert into ecs_tixian(line_shopid,money,status,time) values(".$userid.",".$tixian.",0,'".$time."')";
    $GLOBALS['db']->query($sql);

    $sql=" update ".$ecs->table('users')." set hav_money=hav_money-".$tixian.",all_money=all_money+".$tixian." where user_id=".$userid;
    $GLOBALS['db']->query($sql);
    $string="提现金额为".$tixian."元，正在审核中。。。";
     $sql="insert into ecs_txlog(log_userid,log_content) values(".$userid.",'".$string."')";
     $GLOBALS['db']->query($sql);
    $data['msg']="提交成功";

 }else{
    $data['msg']="提交失败，提现间隔需超过30天或提现金额大于200元";
 }
 echo json_encode($data);
 exit;

}elseif($act=='ajax_get_fencheng'){
   $page=intval($_POST['page_num']);
   if(!$page){
    $page=1;
   }
   $limit=" limit ".($page-1)*$page_num.",".$page_num;
   if($userid){
   $fc_list=get_fencheng_list($userid,$limit);
   }


   echo json_encode($fc_list);
exit;
}elseif($act=='ajax_get_tixian'){
   $page=intval($_POST['page_num']);
   if(!$page){
    $page=1;
   }
   $limit=" limit ".($page-1)*$log_num.",".$log_num;
   if($userid){
   $tx_list=get_tixian_list($userid,$limit);
   }


   echo json_encode($tx_list);
exit;
}



//获取分成列表
function get_fencheng_list($userid,$fencheng_limit){
  $sql="select ef.money,DATE_FORMAT(ef.time,'%m/%d %H:%i') as time,eg.goods_name,ef.type,eu.alias from ecs_fencheng as ef INNER JOIN ecs_goods as eg
      on eg.goods_id=ef.goodsid
      INNER JOIN ecs_users as eu
      on ef.userid=eu.user_id
      where ef.get_shopid=".$userid." order by ef.time desc ".$fencheng_limit;    //查询分成列表
  $fc_list=$GLOBALS['db']->getAll($sql);
foreach ($fc_list as $key => $value) {
   $fc_list[$key]['alias']=mb_substr($value['alias'],0,1,'utf-8')."**";
   $fc_list[$key]['goods_name']=mb_substr($value['goods_name'],0,5,'utf-8');
}
   return $fc_list;
}
//获取提现列表
function get_tixian_list($userid,$tixian_limit){

  $sql="select log_content,DATE_FORMAT(log_time,'%Y/%m/%d %H:%i') as log_time from ecs_txlog where log_userid=".$userid." order by log_time desc".$tixian_limit;   //查询分成列表
  $tx_list=$GLOBALS['db']->getAll($sql);


  return $tx_list;

}