<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('94dba5ff0c0bc4bb7d48a572040db458','1461459156','0','0','222.129.37.238','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e80c1483956e2b3ccd9e0191c1be2962','1461459056','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('a5735166bcbefb6ff27e7daab0489a09','1461459059','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('d7bf254cd442f738f59049a80c7167d9','1461459070','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('84bcc01f360860b7424a0adc2066f97a','1461459074','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('7d6ae34c752c8d6e9214a1bd88b09862','1461459096','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('cc85c317b6c10f51f9c5fa20a2aa7be4','1461459098','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('8e06938749b7e8bcfefe9f8b0f6a2ab2','1461459106','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('a02fcfdff8aa6f454351e8805a4d0bf4','1461459107','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('c8799de6dd1aed82fde3e30b276d86ac','1461459128','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('a97c27eb9deb6e553762448efb8a0c7b','1461459131','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('fbe806d20b4ee1416047e167806630a6','1461459139','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('c550f053664ccd6ad0d3c8167a80f6a4','1461459149','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('f54efa71541205665c80324d50285544','1461459200','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('a037c5eb9209b4a3137d57777aa7b486','1461459223','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");
E_D("replace into `ecs_sessions` values('fa71d6abc4b0cc9d18802cca63a3e533','1461459228','0','0','222.129.37.238','0','0','0.00','0','a:0:{}');");

require("../../inc/footer.php");
?>