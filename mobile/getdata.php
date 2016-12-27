<?php
/**
 * @Author: anchen
 * @Date:   2016-12-24 15:11:54
 * @Last Modified by:   anchen
 * @Last Modified time: 2016-12-24 15:50:21
 */
define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
require(ROOT_PATH . 'include/lib_order.php');

if(!empty($_POST['orderid'])){

    set_time_limit(0);  //这里是关键，设置链接永不过时

    $starttime=time();
    while (true) {
        //查订单orderid  差状态
         //已付款 $step=3
        $sql=" select pay_status from ecs_order_info where order_id=".$_POST['orderid'];
        $pay_status=$GLOBALS['db']->getOne($sql);

        # code...
        #
        #
        if($pay_status == 2){
             echo "{step:3}";
            exit;
        }
        sleep(1);
        $endtime=time();
        if(($endtime-$starttime)>5){
            break;
        }
    }
    echo "{step:1}";



 }