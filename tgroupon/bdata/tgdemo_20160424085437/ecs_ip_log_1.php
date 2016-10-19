<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_ip_log`;");
E_C("CREATE TABLE `ecs_ip_log` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `ip` varchar(20) DEFAULT NULL,
  `u_id` int(20) DEFAULT NULL,
  `state` int(2) DEFAULT '0',
  `phone_state` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3359 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_ip_log` values('3355','222.129.37.238','1627','0','Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Mobile/13E238 MicroMessenger/6.3.16 NetType/WIFI Language/zh_CN');");
E_D("replace into `ecs_ip_log` values('3356','14.17.43.100','1627','0','Mozilla/5.0 (iPhone; CPU iPhone OS 8_3 like Mac OS X) AppleWebKit/600.1.4 (KHTML; like Gecko) Mobile/12F70 MicroMessenger/6.1.5 NetType/WIFI');");
E_D("replace into `ecs_ip_log` values('3357','222.129.37.238','1627','0','Mozilla/5.0 (iPhone; CPU iPhone OS 9_3_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13E238 Safari/601.1');");
E_D("replace into `ecs_ip_log` values('3358','123.151.42.49','1627','0','Mozilla/5.0 (Linux; Android 5.1; HUAWEI TIT-AL00 Build/HUAWEITIT-AL00) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/37.0.0.0 Mobile MQQBrowser/6.2 TBS/036215 Safari/537.36 MicroMessenger/6.3.16.49_r03ae324.780 NetType/WIFI Language/zh_CN');");

require("../../inc/footer.php");
?>