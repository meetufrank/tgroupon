<?php
/**
 * @Author: anchen
 * @Date:   2017-02-06 13:22:33
 * @Last Modified by:   anchen
 * @Last Modified time: 2017-02-06 18:23:43
 */
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');


include_once('head.php');

 $userid=6;

if($_REQUEST['act']==''){
  $act="income";
}else{
    $act=$_REQUEST['act'];
}
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



   $sql="select ef.money,DATE_FORMAT(ef.time,'%Y/%m/%d %H:%i') as time,eg.goods_name,ef.type,eu.alias from ".$ecs->table('fencheng')." as ef INNER JOIN ecs_goods as eg
      on eg.goods_id=ef.goodsid
      INNER JOIN ecs_users as eu
      on ef.userid=eu.user_id
      where ef.get_shopid=".$userid." order by ef.time desc";    //查询分成列表
  $fc_list=$GLOBALS['db']->getAll($sql);

foreach ($fc_list as $key => $value) {
   $fc_list[$key]['alias']=mb_substr($value['alias'],0,1,'utf-8')."**";
}

$smarty->assign('fc_list',$fc_list);


$sql="select log_content,DATE_FORMAT(log_time,'%Y/%m/%d %H:%i') as log_time from ".$ecs->table('txlog')." where log_userid=".$userid." order by log_time desc";
$logarr=$GLOBALS['db']->getAll($sql);

$smarty->assign('logstring',json_encode($logarr));
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

 if($tixian>=500||$days>=30){
    $sql="insert into ecs_tixian(line_shopid,money,status) values(".$userid.",".$tixian.",0)";
    $GLOBALS['db']->query($sql);

    $sql=" update ".$ecs->table('users')." set hav_money=hav_money-".$tixian." where user_id=".$userid;
    $GLOBALS['db']->query($sql);

    $data['msg']="提交成功";
 }else{
    $data['msg']="提交失败，提现间隔不超过30天或者提现金额小于500元";
 }
 echo json_encode($data);
 exit;

}