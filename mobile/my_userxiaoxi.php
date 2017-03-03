<?php

/*个人中心 --- 我的消息*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
include('head.php');

$xuanzhong = 3;
$smarty->assign('my_active',  $xuanzhong);




$smarty->display('my_userxiaoxi.dwt');




?>