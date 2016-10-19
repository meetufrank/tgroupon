<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_bonus`;");
E_C("CREATE TABLE `ecs_user_bonus` (
  `bonus_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bonus_type_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `bonus_sn` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `used_time` int(10) unsigned NOT NULL DEFAULT '0',
  `order_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `emailed` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`bonus_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_bonus` values('3','4','1000018450','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('4','4','1000023774','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('5','4','1000039394','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('6','4','1000049305','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('7','4','1000052248','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('8','4','1000061542','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('9','4','1000070278','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('10','4','1000080588','0','0','0','0');");
E_D("replace into `ecs_user_bonus` values('11','4','1000091405','0','0','0','0');");

require("../../inc/footer.php");
?>