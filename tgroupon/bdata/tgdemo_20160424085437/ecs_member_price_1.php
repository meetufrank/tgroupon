<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_member_price`;");
E_C("CREATE TABLE `ecs_member_price` (
  `price_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_rank` tinyint(3) NOT NULL DEFAULT '0',
  `user_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`price_id`),
  KEY `goods_id` (`goods_id`,`user_rank`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_member_price` values('1','23','3','3200.00');");
E_D("replace into `ecs_member_price` values('2','23','2','3300.00');");
E_D("replace into `ecs_member_price` values('3','13','3','1100.00');");
E_D("replace into `ecs_member_price` values('4','13','2','1200.00');");
E_D("replace into `ecs_member_price` values('5','158','1','198.00');");
E_D("replace into `ecs_member_price` values('6','158','99','193.00');");
E_D("replace into `ecs_member_price` values('7','158','100','10.00');");
E_D("replace into `ecs_member_price` values('8','158','2','180.00');");
E_D("replace into `ecs_member_price` values('9','123','1','111.00');");
E_D("replace into `ecs_member_price` values('10','123','99','222.00');");
E_D("replace into `ecs_member_price` values('11','123','100','333.00');");
E_D("replace into `ecs_member_price` values('12','123','2','444.00');");
E_D("replace into `ecs_member_price` values('13','121','1','11.00');");
E_D("replace into `ecs_member_price` values('14','121','99','44.00');");
E_D("replace into `ecs_member_price` values('15','121','100','333.00');");
E_D("replace into `ecs_member_price` values('16','121','2','88.00');");

require("../../inc/footer.php");
?>