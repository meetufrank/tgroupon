<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_affiliate_log`;");
E_C("CREATE TABLE `ecs_affiliate_log` (
  `log_id` mediumint(8) NOT NULL AUTO_INCREMENT,
  `order_id` mediumint(8) NOT NULL,
  `time` int(10) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `user_name` varchar(60) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `point` int(10) NOT NULL DEFAULT '0',
  `separate_type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_affiliate_log` values('1','27','1427735783','105','tianxin105','0.78','0','-1');");
E_D("replace into `ecs_affiliate_log` values('2','62','1427850774','318','tianxin318','34.95','0','0');");
E_D("replace into `ecs_affiliate_log` values('3','75','1427916747','372','tianxin372','22.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('4','75','1427916747','318','tianxin318','13.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('5','262','1428892084','15','tianxin15','334.50','0','0');");
E_D("replace into `ecs_affiliate_log` values('6','266','1428903929','15','tianxin15','25.00','0','0');");

require("../../inc/footer.php");
?>