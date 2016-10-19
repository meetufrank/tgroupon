<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_back_goods`;");
E_C("CREATE TABLE `ecs_back_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `back_id` mediumint(8) unsigned DEFAULT '0',
  `goods_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `product_sn` varchar(60) DEFAULT NULL,
  `goods_name` varchar(120) DEFAULT NULL,
  `brand_name` varchar(60) DEFAULT NULL,
  `goods_sn` varchar(60) DEFAULT NULL,
  `is_real` tinyint(1) unsigned DEFAULT '0',
  `send_number` smallint(5) unsigned DEFAULT '0',
  `goods_attr` text,
  PRIMARY KEY (`rec_id`),
  KEY `back_id` (`back_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_back_goods` values('1','5','21','0','','蜜丝佛陀纤柔眼线液1#0.75ml',NULL,'ECS000021','1','1','颜色:黑色 \n');");
E_D("replace into `ecs_back_goods` values('2','5','123','0','','迪奥红毒女士香水EDT 50ml',NULL,'ECS000123','1','1','外        观:红色 \n');");
E_D("replace into `ecs_back_goods` values('3','6','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml',NULL,'ECS000021','1','1','颜色:黑色 \n');");
E_D("replace into `ecs_back_goods` values('4','6','123','0','','迪奥红毒女士香水EDT 50ml',NULL,'ECS000123','1','1','外        观:红色 \n');");
E_D("replace into `ecs_back_goods` values('5','7','21','4','','蜜丝佛陀纤柔眼线液1#0.75ml',NULL,'ECS000021','1','1','颜色:黑色 \r\n');");

require("../../inc/footer.php");
?>