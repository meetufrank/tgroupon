<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2014-06-24','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-01-25','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-01-26','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-01','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-02-04','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-05','GOOGLE','90');");
E_D("replace into `ecs_searchengine` values('2015-02-05','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-06','GOOGLE','821');");
E_D("replace into `ecs_searchengine` values('2015-02-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-07','GOOGLE','936');");
E_D("replace into `ecs_searchengine` values('2015-02-08','GOOGLE','1207');");
E_D("replace into `ecs_searchengine` values('2015-02-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-09','GOOGLE','1635');");
E_D("replace into `ecs_searchengine` values('2015-02-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-18','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-18','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-02-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-20','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-02-20','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-21','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-21','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-22','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-02-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-22','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-23','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-23','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-02-23','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-24','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-02-24','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-25','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-02-25','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-26','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-02-26','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-27','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-02-27','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-27','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-02-28','GOOGLE','28');");
E_D("replace into `ecs_searchengine` values('2015-02-28','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-02-28','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-01','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-03-01','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-01','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-02','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-02','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-03-03','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-03','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2015-03-04','GOOGLE','22');");
E_D("replace into `ecs_searchengine` values('2015-03-04','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-05','GOOGLE','10');");
E_D("replace into `ecs_searchengine` values('2015-03-06','GOOGLE','17');");
E_D("replace into `ecs_searchengine` values('2015-03-07','GOOGLE','7');");
E_D("replace into `ecs_searchengine` values('2015-03-08','GOOGLE','11');");
E_D("replace into `ecs_searchengine` values('2015-03-08','BAIDU','21');");
E_D("replace into `ecs_searchengine` values('2015-03-09','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-03-11','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-11','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-12','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-12','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-13','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-13','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-14','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-14','GOOGLE','13');");
E_D("replace into `ecs_searchengine` values('2015-03-15','GOOGLE','68');");
E_D("replace into `ecs_searchengine` values('2015-03-15','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-16','GOOGLE','19');");
E_D("replace into `ecs_searchengine` values('2015-03-17','GOOGLE','4');");
E_D("replace into `ecs_searchengine` values('2015-03-18','GOOGLE','51');");
E_D("replace into `ecs_searchengine` values('2015-03-18','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-19','GOOGLE','33');");
E_D("replace into `ecs_searchengine` values('2015-03-19','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-20','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-03-21','GOOGLE','124');");
E_D("replace into `ecs_searchengine` values('2015-03-21','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-22','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-03-22','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-24','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-25','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-26','GOOGLE','21');");
E_D("replace into `ecs_searchengine` values('2015-03-26','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-27','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-03-27','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-03-28','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-28','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-03-29','GOOGLE','32');");
E_D("replace into `ecs_searchengine` values('2015-03-29','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-30','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-03-30','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-31','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-03-31','GOOGLE','20');");
E_D("replace into `ecs_searchengine` values('2015-04-01','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-04-01','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-02','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-03','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-03','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2015-04-04','GOOGLE','9');");
E_D("replace into `ecs_searchengine` values('2015-04-04','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-05','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-06','GOOGLE','6');");
E_D("replace into `ecs_searchengine` values('2015-04-06','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-07','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-08','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-08','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-09','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-09','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-09','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-10','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-10','MSN','1');");
E_D("replace into `ecs_searchengine` values('2015-04-11','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-11','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-11','YAHOO','1');");
E_D("replace into `ecs_searchengine` values('2015-04-12','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-13','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-13','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-13','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-14','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-04-15','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-15','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-15','SOGOU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-16','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-16','BAIDU','1');");
E_D("replace into `ecs_searchengine` values('2015-04-16','GOOGLE ADSENSE','1');");
E_D("replace into `ecs_searchengine` values('2015-04-17','GOOGLE','2');");
E_D("replace into `ecs_searchengine` values('2015-04-18','GOOGLE','5');");
E_D("replace into `ecs_searchengine` values('2015-04-19','BAIDU','2');");
E_D("replace into `ecs_searchengine` values('2015-04-19','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2015-04-20','SOGOU','1');");

require("../../inc/footer.php");
?>