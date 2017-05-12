#!  /www/wdlinux/apache_php-5.6.21/bin/php -q
<?php
define('IN_ECTOUCH', true);
require(dirname(__FILE__) . '/include/init.php');
//更新订单状态
$string3=" where order_status!=2 and order_status!=3 and order_status!=4 and pay_status=2 and shipping_status=1";//待收货
    $sql= " select shipping_id,invoice_no,order_id,user_id from ecs_order_info ".$string3;
    $come_arr=$GLOBALS['db']->getAll($sql);
$come_orders['data']=get_shipping_data($come_arr);  //待收货订单跟踪


function get_shipping_data($ye_arr=array()){

    include_once(ROOT_PATH . 'include/lib_transaction.php');

    include_once(ROOT_PATH . 'include/lib_order.php');

     foreach ($ye_arr as $key => $value) {

    $get_content=array();

    $array=array();


    //生成快递100查询接口链接

    if($value['shipping_id']!=14){

        $shipping   = get_shipping_object($value['shipping_id']);



        $query_link = $shipping->kuaidi100($value['invoice_no']);



        //优先使用curl模式发送数据

        if (function_exists('curl_init') == 1){

          $curl = curl_init();

          curl_setopt ($curl, CURLOPT_URL, $query_link);

          curl_setopt ($curl, CURLOPT_HEADER,0);

          curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);

          curl_setopt ($curl, CURLOPT_USERAGENT,$_SERVER['HTTP_USER_AGENT']);

          curl_setopt ($curl, CURLOPT_TIMEOUT,5);

          $get_content = curl_exec($curl);

          $get_content=json_decode($get_content);
           $time=strtotime($get_content->data[0]->time) + 3600*24*7; //寄送到地七天后
           $now=time();
        if($get_content->state==3&&$now>=$time){//自动分成及确认收货
             get_money($value['order_id'],$value['user_id']);   //计算分成
             $sql="update ecs_order_info set shipping_status=2 where order_id=".$value['order_id'];
             $GLOBALS['db']->query($sql);
        }



          curl_close ($curl);

        }

    }



  }







}
 ?>
