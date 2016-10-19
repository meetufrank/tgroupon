<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_role`;");
E_C("CREATE TABLE `ecs_role` (
  `role_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL DEFAULT '',
  `action_list` text NOT NULL,
  `role_describe` text,
  PRIMARY KEY (`role_id`),
  KEY `user_name` (`role_name`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_role` values('2','测试','wx_api,wx_menu,wx_config,wx_bonus,wx_regmsg,wx_lang,wx_keywords,wx_point,wx_fun,wx_prize,wx_zjd,wx_dzp,wx_qr,wx_order,wx_pay,wx_reorder,wx_fans,wx_oauth,wx_tuijian,wx_list,wx_autoreg,affiliate,affiliate_ck,zdy_parent,danpin_tuiguang',' ');");
E_D("replace into `ecs_role` values('3','供应商','','供应商  ');");

require("../../inc/footer.php");
?>