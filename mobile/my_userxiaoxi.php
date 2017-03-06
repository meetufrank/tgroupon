<?php

/*个人中心 --- 我的消息*/

define('IN_ECTOUCH', true);

require(dirname(__FILE__) . '/include/init.php');
include('head.php');



//个人中心  -- 当前页面选中样式，声明的变量
$xuanzhong = 3;
$smarty->assign('my_active',  $xuanzhong);


//查询出系统消息总数
$xxcount = "select count(*) from `ecs_xiaoxi`";
$xxcounts = $db->getOne($xxcount);
$smarty->assign('xxcounts',  $xxcounts);



//查询系统消息信息
$xxxx = "select * from `ecs_xiaoxi`";
$xxxxs = $db->getAll($xxxx);
$smarty->assign('xxxxs',$xxxxs);
$smarty->display('my_userxiaoxi.dwt');




?>