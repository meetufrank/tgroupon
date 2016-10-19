<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `wxch_prize_cnum`;");
E_C("CREATE TABLE `wxch_prize_cnum` (
  `pcid` int(5) NOT NULL AUTO_INCREMENT,
  `paid` int(5) NOT NULL,
  `pid` int(4) NOT NULL,
  `prize_name` varchar(64) NOT NULL,
  `prize_value` int(8) unsigned NOT NULL,
  `user_count` int(8) unsigned NOT NULL,
  PRIMARY KEY (`pcid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8");
E_D("replace into `wxch_prize_cnum` values('1','5','1','未中奖5','2','5');");
E_D("replace into `wxch_prize_cnum` values('2','10','7','未中奖','1000','7');");
E_D("replace into `wxch_prize_cnum` values('3','18','2','甜心10000','9','901');");
E_D("replace into `wxch_prize_cnum` values('4','15','2','甜心10','1','10');");
E_D("replace into `wxch_prize_cnum` values('5','14','2','甜心1','1','10');");
E_D("replace into `wxch_prize_cnum` values('6','6','1','未中奖6','9','1189');");
E_D("replace into `wxch_prize_cnum` values('7','16','2','甜心100','1','10');");
E_D("replace into `wxch_prize_cnum` values('8','3','1','Ipad3','1','3');");
E_D("replace into `wxch_prize_cnum` values('9','4','1','话费100元4','1','4');");
E_D("replace into `wxch_prize_cnum` values('10','17','2','甜心1000','1','10');");
E_D("replace into `wxch_prize_cnum` values('11','1','1','10万汽车1','1','1');");
E_D("replace into `wxch_prize_cnum` values('12','2','1','Macbook2','1','2');");
E_D("replace into `wxch_prize_cnum` values('13','13','2','甜心','1','1');");

require("../../inc/footer.php");
?>