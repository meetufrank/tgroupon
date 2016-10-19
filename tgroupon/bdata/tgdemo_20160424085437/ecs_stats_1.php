<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_stats`;");
E_C("CREATE TABLE `ecs_stats` (
  `access_time` int(10) unsigned NOT NULL DEFAULT '0',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  `visit_times` smallint(5) unsigned NOT NULL DEFAULT '1',
  `browser` varchar(60) NOT NULL DEFAULT '',
  `system` varchar(20) NOT NULL DEFAULT '',
  `language` varchar(20) NOT NULL DEFAULT '',
  `area` varchar(30) NOT NULL DEFAULT '',
  `referer_domain` varchar(100) NOT NULL DEFAULT '',
  `referer_path` varchar(200) NOT NULL DEFAULT '',
  `access_url` varchar(255) NOT NULL DEFAULT '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_stats` values('1461351801','222.129.37.238','2','FireFox 35.0','Windows XP','zh-cn,zh','','','','/index.php');");
E_D("replace into `ecs_stats` values('1461355144','222.129.37.238','3','FireFox 35.0','Windows XP','zh-cn,zh','','http://demo.tgroupon.cn','/','/index.php');");
E_D("replace into `ecs_stats` values('1461360014','222.129.37.238','1','Unknow browser','Unknown','zh-cn','','http://demo.tgroupon.cn','/mobile/','/index.php');");
E_D("replace into `ecs_stats` values('1461360351','222.129.37.238','4','FireFox 35.0','Windows XP','zh-cn,zh','','','','/index.php');");

require("../../inc/footer.php");
?>