<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_config`;");
E_C("CREATE TABLE `wxch_config` (
  `id` int(1) NOT NULL,
  `token` varchar(100) NOT NULL,
  `appid` char(18) NOT NULL,
  `appsecret` char(32) NOT NULL,
  `access_token` text NOT NULL,
  `dateline` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `wxch_config` values('1','weixin','wx4053f8763a39e608','347373b0122d44633f1bff6fc246b31c','ZJyU1BJ9-A9e4qzjP0YPCX8Sr7oJFRFB3KtHqjr5wfN6pJK97iF3GsGbQAp7p1xOSclsCSMDy1kCx0rbnO95QNygQdYF5d-jXnEqVz0Qkhg','1429479022');");

require("../../inc/footer.php");
?>