<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_qr_tgroupon`;");
E_C("CREATE TABLE `wxch_qr_tgroupon` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `qr_path` varchar(255) DEFAULT NULL,
  `scene` varchar(255) DEFAULT NULL,
  `scene_id` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>