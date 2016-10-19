<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_order`;");
E_C("CREATE TABLE `wxch_order` (
  `id` tinyint(1) NOT NULL,
  `order_name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `autoload` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_order` values('1','order','发货提醒','images/201401/1388925596106500893.jpg','<p>&nbsp;ffffff</p>','no');");
E_D("replace into `wxch_order` values('2','reorder','订单确认提醒','images/201503/1427621719267514890.jpg','fff','yes');");
E_D("replace into `wxch_order` values('3','pay','成功支付','images/201503/1427622066404211104.jpg','已经成功支付','yes');");
E_D("replace into `wxch_order` values('4','tuijian_reply','发展会员关注提醒','','','yes');");

require("../../inc/footer.php");
?>