<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_oauth`;");
E_C("CREATE TABLE `wxch_oauth` (
  `oid` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contents` text NOT NULL,
  `count` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_oauth` values('1','手机版网站首页','http://demo.tgroupon.cn/mobile','6368','1');");
E_D("replace into `wxch_oauth` values('12','推广教程','http://www.tgroupon.cn','3086','1');");
E_D("replace into `wxch_oauth` values('14','分销中心','http://demo.tgroupon.cn/mobile','6886','1');");
E_D("replace into `wxch_oauth` values('16','新单品演示','http://demo.tgroupon.cn/mobile/goods.php?id=122','3771','1');");

require("../../inc/footer.php");
?>