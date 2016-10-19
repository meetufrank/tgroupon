<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=185 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1427669137','2','编辑商店设置: ','183.34.91.92');");
E_D("replace into `ecs_admin_log` values('2','1427680247','2','编辑会员账号: tianxin96','113.117.246.255');");
E_D("replace into `ecs_admin_log` values('3','1427681221','2','批量删除会员账号: 001,2222,003','183.54.19.247');");
E_D("replace into `ecs_admin_log` values('4','1427740490','2','编辑商店设置: ','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('5','1427740491','2','编辑商店设置: ','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('6','1427740657','2','编辑商店设置: ','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('7','1427761820','2','编辑商品类型: 电影','110.83.9.149');");
E_D("replace into `ecs_admin_log` values('8','1427780472','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('9','1427780563','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('10','1427780614','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.206.80');");
E_D("replace into `ecs_admin_log` values('11','1427829891','2','编辑商店设置: ','58.248.103.208');");
E_D("replace into `ecs_admin_log` values('12','1427848892','2','编辑商品: 迪奥红毒女士香水EDT 50ml','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('13','1427848892','2','编辑商品: 迪奥红毒女士香水EDT 50ml','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('14','1427849452','2','添加会员账号: 123123','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('15','1427851097','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('16','1427851186','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('17','1427851196','2','编辑会员账号: tianxin320','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('18','1427851552','2','编辑商品: 肌研极润玻尿酸保湿沫面乳100g','182.121.205.157');");
E_D("replace into `ecs_admin_log` values('19','1427851658','2','编辑会员账号: tianxin318','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('20','1427857226','2','添加商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('21','1427857226','2','添加商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('22','1427858242','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('23','1427858242','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('24','1427858283','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('25','1427858283','2','编辑商品: 150401商品测试','49.65.65.129');");
E_D("replace into `ecs_admin_log` values('26','1427879111','2','删除会员账号: tianxin2','183.34.69.49');");
E_D("replace into `ecs_admin_log` values('27','1427915837','2','添加文章: 测试','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('28','1427916597','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('29','1427916611','2','编辑会员账号: tianxin319','111.75.71.203');");
E_D("replace into `ecs_admin_log` values('30','1428012017','2','编辑会员账号: tianxin466','121.22.183.126');");
E_D("replace into `ecs_admin_log` values('31','1428046411','2','回收商品: 彼得罗夫温和洁面泡沫200ml','112.225.226.164');");
E_D("replace into `ecs_admin_log` values('32','1428046722','2','删除文章: 88','112.225.226.164');");
E_D("replace into `ecs_admin_log` values('33','1428097408','2','编辑订单: 2015040433447,订单总金额由 543.50 变为 550.00','115.199.169.207');");
E_D("replace into `ecs_admin_log` values('34','1428304064','1','编辑商店设置: ','113.93.100.107');");
E_D("replace into `ecs_admin_log` values('35','1428304098','1','Edit Shop config: ','113.93.100.107');");
E_D("replace into `ecs_admin_log` values('36','1428304098','1','编辑商店设置: ','113.93.100.107');");
E_D("replace into `ecs_admin_log` values('37','1428449817','2','编辑订单: 2015040888900','27.224.37.84');");
E_D("replace into `ecs_admin_log` values('38','1428528215','2','批量回收商品: ','113.93.100.11');");
E_D("replace into `ecs_admin_log` values('39','1428607081','2','编辑广告: cate_1_6','182.121.203.226');");
E_D("replace into `ecs_admin_log` values('40','1428607112','2','删除广告: ','182.121.203.226');");
E_D("replace into `ecs_admin_log` values('41','1428726664','2','编辑会员账号: tianxin1059','119.131.249.204');");
E_D("replace into `ecs_admin_log` values('42','1428729956','2','编辑商品: 玫琳凯中性洗面乳绿2号','182.121.205.76');");
E_D("replace into `ecs_admin_log` values('43','1428752445','2','删除商品分类: 唇妆','183.52.104.2');");
E_D("replace into `ecs_admin_log` values('44','1428753950','2','删除权限管理: bbsbaby89','183.52.104.2');");
E_D("replace into `ecs_admin_log` values('45','1428754023','2','删除广告: ','183.52.104.2');");
E_D("replace into `ecs_admin_log` values('46','1428856967','2','编辑文章: 测试','113.243.48.80');");
E_D("replace into `ecs_admin_log` values('47','1428862478','2','编辑会员账号: tianxin1121','113.243.48.80');");
E_D("replace into `ecs_admin_log` values('48','1428972855','2','编辑权限管理: tianxin100','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('49','1428972871','2','编辑权限管理: admin','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('50','1429067214','2','编辑会员账号: tianxin1320','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('51','1429067307','2','编辑会员账号: tianxin1320','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('52','1429067311','2','编辑会员账号: tianxin1320','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('53','1429098065','2','编辑会员账号: tianxin350','61.143.18.10');");
E_D("replace into `ecs_admin_log` values('54','1429149985','2','编辑会员账号: tianxin1231','113.93.101.201');");
E_D("replace into `ecs_admin_log` values('55','1429268592','2','编辑权限管理: admin','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('56','1429268816','2','编辑权限管理: admin','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('57','1429269882','1','编辑权限管理: admin','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('58','1429270056','1','编辑权限管理: xiaojun','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('59','1429270063','1','编辑权限管理: xiaojun','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('60','1429270075','1','编辑权限管理: xiaojun','113.101.138.211');");
E_D("replace into `ecs_admin_log` values('61','1429451360','1','删除权限管理: xiaojun','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('62','1429451366','1','编辑权限管理: admin','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('63','1429451381','1','编辑权限管理: tianxin100','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('64','1429451437','1','编辑权限管理: tianxin100','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('65','1429451482','1','编辑权限管理: admin','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('66','1429451547','1','编辑权限管理: tianxin100','121.12.23.140');");
E_D("replace into `ecs_admin_log` values('67','1461361135','1','编辑商店设置: ','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('68','1461361194','1','编辑商店设置: ','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('69','1461361351','1','编辑商店设置: ','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('70','1461362624','1','批量删除会员账号: tianxin1613,tianxin1614,tianxin1615,tianxin1618,tianxin1619,tianxin1625','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('71','1461362632','1','批量删除会员账号: tianxin1607,tianxin1608,tianxin1609,tianxin1610,cdman,tianxin1612,tianxin1616,tianxin1617,tianxin1620,tianxin1621,tianxin1622,333,tianxin1624,tianxin1626,xieaotian','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('72','1461362638','1','批量删除会员账号: tianxin1592,tianxin1593,tianxin1594,tianxin1595,tianxin1596,tianxin1597,tianxin1598,tianxin1599,tianxin1600,tianxino0,摇摇123,tianxin1603,tianxin1604,tianxin1605,tianxin1606','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('73','1461362646','1','批量删除会员账号: tianxin1577,tianxin1578,tianxin1579,tianxin1580,tianxin1581,tianxin1582,tianxin1583,13908214188,tianxin1585,xaheimi,tianxin1587,tianxin1588,tianxin1589,tianxin1590,tianxin1591','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('74','1461362652','1','批量删除会员账号: tianxin1562,tianxin1563,tianxin1564,tianxin1565,bytzzb,tianxin1567,tianxin1568,a499041091,tianxin1570,tianxin1571,tianxin1572,tianxin1573,tianxin1574,18500231654,tianxin1576','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('75','1461362657','1','批量删除会员账号: tianxin1547,tianxin1548,tianxin1549,tianxin1550,tianxin1551,tianxin1552,tianxin1553,tianxin1554,tianxin1555,tianxin1556,tianxin1557,tianxin1558,tianxin1559,tianxin1560,tianxin1561','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('76','1461362661','1','批量删除会员账号: tianxin1532,tianxin1533,tianxin1534,tianxin1535,tianxin1536,tianxin1537,tianxin1538,tianxin1539,tianxin1540,tianxin1541,tianxin1542,tianxin1543,tianxin1544,tianxin1545,tianxin1546','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('77','1461362668','1','批量删除会员账号: webdesign,tianxin1518,tianxin1519,tianxin1520,tianxin1521,tianxin1522,tianxin1523,tianxin1524,tianxin1525,tianxin1526,tianxin1527,tianxin1528,tianxin1529,tianxin1530,tianxin1531','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('78','1461362675','1','批量删除会员账号: tianxin1502,daming8186,tianxin1504,tianxin1505,tianxin1506,tianxin1507,tianxin1508,tianxin1509,tianxin1510,tianxin1511,tianxin1512,tianxin1513,tianxin1514,tianxin1515,tianxin1516','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('79','1461362680','1','批量删除会员账号: moster,dgfqaz,tianxin1489,mingripang,tianxin1491,0056,tianxin1493,我是谁,tianxin1495,tianxin1496,tianxin1497,tianxin1498,tianxin1499,tianxin1500,tianxin1501','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('80','1461362684','1','批量删除会员账号: tianxin1472,asdf,tianxin1474,tianxin1475,tianxin1476,tianxin1477,tianxin1478,tianxin1479,元峰,tianxin1481,tianxin1482,tianxin1483,tianxin1484,tianxin1485,tianxin1486','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('81','1461362689','1','批量删除会员账号: tianxin1457,tianxin1458,tianxin1459,tianxin1460,tianxin1461,tianxin1462,tianxin1463,tianxin1464,tianxin1465,tianxin1466,tianxin1467,13812345678,tianxin1469,tianxin1470,tianxin1471','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('82','1461362694','1','批量删除会员账号: tianxin1442,tianxin1443,tianxin1444,tianxin1445,tianxin1446,tianxin1447,qazxsw,tianxin1449,tianxin1450,xiasw,tianxin1452,tianxin1453,tianxin1454,tianxin1455,tianxin1456','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('83','1461362701','1','批量删除会员账号: tianxin1427,tianxin1428,叶娜,tianxin1430,tianxin1431,tianxin1432,tianxin1433,tianxin1434,tianxin1435,muzijie,tianxin1437,tianxin1438,tianxin1439,tianxin1440,haode','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('84','1461362706','1','批量删除会员账号: tianxin1412,tianxin1413,tianxin1414,tianxin1415,tianxin1416,tianxin1417,tianxin1418,tianxin1419,yaya,tianxin1421,tianxin1422,tianxin1423,tianxin1424,tianxin1425,tianxin1426','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('85','1461362714','1','批量删除会员账号: tianxin1397,tianxin1398,测试一号,tianxin1400,198890704,tianxin1402,tianxin1403,tianxin1404,tianxin1405,tianxin1406,tianxin1407,tianxin1408,tianxin1409,tianxin1410,23234','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('86','1461362719','1','批量删除会员账号: tianxin1382,x88d,tianxin1384,tianxin1385,tianxin1386,tianxin1387,tianxin1388,tianxin1389,tianxin1390,111111111111,tianxin1392,tianxin1393,tianxin1394,tianxin1395,tianxin1396','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('87','1461362724','1','批量删除会员账号: tianxin1367,tianxin1368,tianxin1369,tianxin1370,tianxin1371,tianxin1372,tianxin1373,tianxin1374,tianxin1375,tianxin1376,tianxin1377,333333,tianxin1379,tianxin1380,tianxin1381','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('88','1461362732','1','批量删除会员账号: tianxin1352,tianxin1353,tianxin1354,957852831@qq.com,tianxin1356,tianxin1357,tianxin1358,tianxin1359,tianxin1360,tianxin1361,tianxin1362,722,tianxin1364,tianxin1365,tianxin1366','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('89','1461362742','1','批量删除会员账号: tianxin1337,tianxin1338,tianxin1339,tianxin1340,tianxin1341,tianxin1342,tianxin1343,tianxin1344,tianxin1345,tianxin1346,tianxin1347,tianxin1348,tianxin1349,tianxin1350,tianxin1351','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('90','1461362747','1','批量删除会员账号: tianxin1322,tianxin1323,tianxin1324,tianxin1325,tianxin1326,tianxin1327,tianxin1328,tianxin1329,tianxin1330,tianxin1331,tianxin1332,tianxin1333,天天,tianxin1335,tianxin1336','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('91','1461362751','1','批量删除会员账号: tianxin1307,tianxin1308,tianxin1309,tianxin1310,tianxin1311,tianxin1312,tianxin1313,mrz,tianxin1315,tianxin1316,ok001,tianxin1318,tianxin1319,tianxin1320,tianxin1321','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('92','1461362758','1','批量删除会员账号: tianxin1292,tianxin1293,weishang,tianxin1295,tianxin1296,tianxin1297,tianxin1298,tianxin1299,tianxin1300,tianxin1301,tianxin1302,tianxin1303,tianxin1304,tianxin1305,tianxin1306','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('93','1461362763','1','批量删除会员账号: dewfnyga3,dewfnyga4,tianxin1279,tianxin1280,tianxin1281,tianxin1282,tianxin1283,tianxin1284,tianxin1285,tianxin1286,tianxin1287,tianxin1288,tianxin1289,tianxin1290,tianxin1291','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('94','1461362768','1','批量删除会员账号: tianxin1262,tianxin1263,tianxin1264,tianxin1265,tianxin1266,tianxin1267,865342,tianxin1269,tianxin1270,tianxin1271,tianxin1272,tianxin1273,dewfnyga,dewfnyga1,dewfnyga2','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('95','1461362772','1','批量删除会员账号: tianxin1247,tianxin1248,tianxin1249,tianxin1250,tianxin1251,tianxin1252,tianxin1253,pczster,tianxin1255,tianxin1256,123123123,tianxin1258,tianxin1259,tianxin1260,959275796','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('96','1461362777','1','批量删除会员账号: tianxin1232,15383511688,764529843,tianxin1235,tianxin1236,tianxin1237,tianxin1238,tianxin1239,tianxin1240,tianxin1241,tianxin1242,tianxin1243,tianxin1244,tianxin1245,l422289568','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('97','1461362782','1','批量删除会员账号: tianxin1217,tianxin1218,tianxin1219,tianxin1220,tianxin1221,tianxin1222,zheng,sxh1987923,tianxin1225,tianxin1226,tianxin1227,tianxin1228,tianxin1229,tianxin1230,tianxin1231','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('98','1461362787','1','批量删除会员账号: tianxin1202,tianxin1203,tianxin1204,tianxin1205,tianxin1206,tianxin1207,tianxin1208,pinbaobei,tianxin1210,tianxin1211,tianxin1212,tianxin1213,tianxin1214,tianxin1215,tianxin1216','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('99','1461362793','1','批量删除会员账号: tianxin1187,tianxin1188,tianxin1189,tianxin1190,tianxin1191,idenden,tianxin1193,tianxin1194,jjtear,tianxin1196,tianxin1197,tianxin1198,tianxin1199,tianxin1200,tianxin1201','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('100','1461362798','1','批量删除会员账号: tianxin1172,tianxin1173,sgh,tianxin1175,tianxin1176,tianxin1177,tianxin1178,tianxin1179,tianxin1180,tianxin1181,tianxin1182,tianxin1183,tianxin1184,tianxin1185,tianxin1186','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('101','1461362804','1','批量删除会员账号: tianxin1157,tianxin1158,tianxin1159,tianxin1160,tianxin1161,tianxin1162,tianxin1163,tianxin1164,tianxin1165,tianxin1166,tianxin1167,tianxin1168,tianxin1169,tianxin1170,tianxin1171','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('102','1461362809','1','批量删除会员账号: tianxin1142,tianxin1143,tianxin1144,18751467160,tianxin1146,tianxin1147,tianxin1148,tianxin1149,tianxin1150,tianxin1151,tianxin1152,tianxin1153,tianxin1154,123456,tianxin1156','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('103','1461362813','1','批量删除会员账号: a123123a,tianxin1128,tianxin1129,tianxin1130,tianxin1131,tianxin1132,tianxin1133,tianxin1134,tianxin1135,tianxin1136,tianxin1137,tianxin1138,tianxin1139,tianxin1140,tianxin1141','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('104','1461362819','1','批量删除会员账号: 15259598188,tianxin1113,tianxin1114,ok123,tianxin1116,tianxin1117,tianxin1118,anyface,tianxin1120,tianxin1121,tianxin1122,tianxin1123,tianxin1124,tianxin1125,tianxin1126','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('105','1461362823','1','批量删除会员账号: tianxin1097,tianxin1098,tianxin1099,tianxin1100,tianxin1101,tianxin1102,tianxin1103,tianxin1104,tianxin1105,tianxin1106,tianxin1107,tianxin1108,tianxin1109,wz000,tianxin1111','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('106','1461362828','1','批量删除会员账号: tianxin1082,tianxin1083,tianxin1084,tianxin1085,tianxin1086,tianxin1087,tianxin1088,tianxin1089,tianxin1090,26010588,tianxin1092,tianxin1093,tianxin1094,tianxin1095,18905103331','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('107','1461362832','1','批量删除会员账号: tianxin1067,tianxin1068,tianxin1069,tianxin1070,tianxin1071,测试人员,tianxin1073,tianxin1074,tianxin1075,tianxin1076,tianxin1077,tianxin1078,tianxin1079,tianxin1080,tianxin1081','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('108','1461362837','1','批量删除会员账号: tianxin1052,tianxin1053,tianxin1054,tianxin1055,tianxin1056,tianxin1057,tianxin1058,tianxin1059,tianxin1060,tianxin1061,tianxin1062,tianxin1063,tianxin1064,tianxin1065,tianxin1066','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('109','1461362841','1','批量删除会员账号: tianxin1037,tianxin1038,tianxin1039,tianxin1040,tianxin1041,tianxin1042,tianxin1043,tianxin1044,tianxin1045,tianxin1046,tianxin1047,tianxin1048,tianxin1049,tianxin1050,tianxin1051','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('110','1461362845','1','批量删除会员账号: tianxin1022,tianxin1023,tianxin1024,tianxin1025,tianxin1026,tianxin1027,tianxin1028,tianxin1029,tianxin1030,tianxin1031,tianxin1032,tianxin1033,tianxin1034,tianxin1035,tianxin1036','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('111','1461362850','1','批量删除会员账号: tianxin1007,tianxin1008,tianxin1009,tianxin1010,tianxin1011,tianxin1012,tianxin1013,tianxin1014,tianxin1015,tianxin1016,tianxin1017,tianxin1018,tianxin1019,tianxin1020,tianxin1021','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('112','1461362855','1','批量删除会员账号: tianxin992,tianxin993,tianxin994,tianxin995,18804633568,a123123,tianxin998,tianxin999,tianxin1000,tianxin1001,tianxin1002,tianxin1003,xiangyejia,tianxin1005,tianxin1006','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('113','1461362859','1','批量删除会员账号: tianxin977,tianxin978,tianxin979,tianxin980,tianxin981,tianxin982,tianxin983,tianxin984,tianxin985,tianxin986,tianxin987,tianxin988,tianxin989,qu21,tianxin991','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('114','1461362864','1','批量删除会员账号: tianxin962,tianxin963,tianxin964,tianxin965,tianxin966,tianxin967,tianxin968,tianxin969,tianxin970,tianxin971,tianxin972,tianxin973,tianxin974,tianxin975,tianxin976','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('115','1461362868','1','批量删除会员账号: tianxin947,tianxin948,tianxin949,qqqqqqqqqq,tianxin951,tianxin952,gaobie1982,tianxin954,tianxin955,tianxin956,tianxin957,tianxin958,tianxin959,tianxin960,tianxin961','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('116','1461362873','1','批量删除会员账号: tianxin932,tianxin933,tianxin934,tianxin935,tianxin936,tianxin937,tianxin938,tianxin939,tianxin940,tianxin941,tianxin942,tianxin943,tianxin944,tianxin945,tianxin946','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('117','1461362877','1','批量删除会员账号: tianxin917,tianxin918,ceshi3345,tianxin920,tianxin921,tianxin922,tianxin923,tianxin924,tianxin925,tianxin926,tianxin927,tianxin928,tianxin929,tianxin930,tianxin931','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('118','1461362881','1','批量删除会员账号: tianxin902,tianxin903,tianxin904,tianxin905,tianxin906,tianxin907,tianxin908,tianxin909,tianxin910,tianxin911,xrxxw,tianxin913,tianxin914,tianxin915,tianxin916','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('119','1461362886','1','批量删除会员账号: 林一,tianxin888,tianxin889,tianxin890,tianxin891,tianxin892,tianxin893,tianxin894,tianxin895,tianxin896,tianxin897,tianxin898,tianxin899,tianxin900,tianxin901','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('120','1461362891','1','批量删除会员账号: tianxin872,jakepf,jakeshen,tianxin875,mosgentor,tianxin877,15658900300,tianxin879,tianxin880,tianxin881,tianxin882,tianxin883,tianxin884,tianxin885,huoguo121','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('121','1461362898','1','批量删除会员账号: tianxin857,tianxin858,tianxin859,888888,tianxin861,tianxin862,tianxin863,tianxin864,tianxin865,tianxin866,lycancheng,tianxin868,jiang123,tianxin870,成文','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('122','1461362903','1','批量删除会员账号: tianxin842,tianxin843,tianxin844,tianxin845,tianxin846,tianxin847,tianxin848,tianxin849,tianxin850,1914142279,tianxin852,tianxin853,shellcn,13650841000,tianxin856','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('123','1461362909','1','批量删除会员账号: tianxin827,tianxin828,whp,tianxin830,tianxin831,tianxin832,tianxin833,tianxin834,159357,tianxin836,tianxin837,tianxin838,tianxin839,tianxin840,tianxin841','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('124','1461362914','1','批量删除会员账号: tianxin812,tianxin813,tianxin814,tianxin815,tianxin816,tianxin817,zhangsan,tianxin819,tianxin820,tianxin821,tianxin822,tianxin823,tianxin824,tianxin825,tianxin826','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('125','1461362919','1','批量删除会员账号: tianxin797,tianxin798,tianxin799,tianxin800,tianxin801,123,tianxin803,tianxin804,gz123,tianxin806,tianxin807,tianxin808,tianxin809,tianxin810,tianxin811','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('126','1461362924','1','批量删除会员账号: tianxin782,tianxin783,lili,tianxin785,tianxin786,tianxin787,tianxin788,tianxin789,tianxin790,tianxin791,tianxin792,tianxin793,tianxin794,tianxin795,tianxin796','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('127','1461362928','1','批量删除会员账号: tianxin767,tianxin768,tianxin769,tianxin770,tianxin771,tianxin772,tianxin773,tianxin774,tianxin775,123456789,九阳3路,tianxin778,tianxin779,tianxin780,tianxin781','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('128','1461362932','1','批量删除会员账号: tianxin752,lcx13148,tianxin754,897,mfkgad,tianxin757,tianxin758,litongpinh,tianxin760,tianxin761,tianxin762,tianxin763,tianxin764,tianxin765,tianxin766','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('129','1461362938','1','批量删除会员账号: tianxin737,tianxin738,tianxin739,tianxin740,tianxin741,tianxin742,tianxin743,tianxin744,tianxin745,tianxin746,tianxin747,tianxin748,tianxin749,tianxin750,tianxin751','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('130','1461362945','1','批量删除会员账号: tianxin722,tianxin723,13580411086,tianxin725,tianxin726,tianxin727,tianxin728,tianxin729,tianxin730,tianxin731,tianxin732,tianxin733,tianxin734,tianxin735,tianxin736','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('131','1461362949','1','批量删除会员账号: tianxin707,tianxin708,tianxin709,lessgun,tianxin711,tianxin712,tianxin713,tianxin714,tianxin715,tianxin716,tianxin717,tianxin718,tianxin719,tianxin720,tianxin721','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('132','1461362953','1','批量删除会员账号: 子诚,tianxin693,tianxin694,llll,le8888,tianxin697,tianxin698,tianxin699,tianxin700,tianxin701,tianxin702,tianxin703,tianxin704,tianxin705,tianxin706','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('133','1461362957','1','批量删除会员账号: tianxin677,tianxin678,tianxin679,tianxin680,tianxin681,tianxin682,18636967512,tianxin684,tianxin685,tianxin686,tianxin687,tianxin688,tianxin689,tianxin690,tianxin691','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('134','1461362963','1','批量删除会员账号: tianxin662,yiy114,tianxin664,tianxin665,tianxin666,tianxin667,tianxin668,tianxin669,tianxin670,qingyajun,tianxin672,tianxin673,tianxin674,tianxin675,tianxin676','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('135','1461362967','1','批量删除会员账号: tianxin647,mdl789,tianxin649,王红华,tianxin651,tianxin652,tianxin653,tianxin654,tianxin655,tianxin656,tianxin657,tianxin658,tianxin659,tianxin660,tianxin661','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('136','1461362972','1','批量删除会员账号: tianxin632,tianxin633,tianxin634,tianxin635,15893892513,tianxin637,tianxin638,tianxin639,tianxin640,tianxin641,tianxin642,tianxin643,tianxin644,tianxin645,tianxin646','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('137','1461362977','1','批量删除会员账号: tianxin617,tianxin618,tianxin619,tianxin620,tianxin621,tianxin622,tianxin623,tianxin624,tianxin625,tianxin626,tianxin627,tianxin628,tianxin629,testtest,tianxin631','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('138','1461362981','1','批量删除会员账号: tianxin602,tianxin603,tianxin604,tianxin605,tianxin606,t6666666,tianxin608,tianxin609,tianxin610,tianxin611,tianxin612,tianxin613,tianxin614,tianxin615,tianxin616','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('139','1461362986','1','批量删除会员账号: tianxin587,tianxin588,tianxin589,tianxin590,tianxin591,tianxin592,tianxin593,tianxin594,tianxin595,tianxin596,tianxin597,tianxin598,tianxin599,tianxin600,tianxin601','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('140','1461362991','1','批量删除会员账号: tianxin572,tianxin573,tianxin574,tianxin575,tianxin576,tianxin577,tianxin578,tianxin579,tianxin580,测试,yuyu,tianxin583,tianxin584,tianxin585,tianxin586','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('141','1461362996','1','批量删除会员账号: 222222,guanjia,tianxin559,tianxin560,tianxin561,tianxin562,tianxin563,tianxin564,tianxin565,tianxin566,tianxin567,tianxin568,tianxin569,tianxin570,tianxin571','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('142','1461363000','1','批量删除会员账号: tianxin542,tianxin543,tianxin544,tianxin545,tianxin546,tianxin547,tianxin548,tianxin549,tianxin550,lsg888,tianxin552,tianxin553,tianxin554,test123,tianxin556','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('143','1461363005','1','批量删除会员账号: tianxin527,fengyoung,tianxin529,tianxin530,tianxin531,tianxin532,tianxin533,tianxin534,tianxin535,adxvb,tianxin537,tianxin538,tianxin539,tianxin540,tianxin541','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('144','1461363010','1','批量删除会员账号: tianxin512,tianxin513,tianxin514,tianxin515,tianxin516,tianxin517,tianxin518,tianxin519,tianxin520,tianxin521,tianxin522,tianxin523,tianxin524,tianxin525,tianxin526','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('145','1461363016','1','批量删除会员账号: tianxin497,tianxin498,tianxin499,tianxin500,tianxin501,tianxin502,qiyun153,tianxin504,yiye001,tianxin506,tianxin507,tianxin508,tianxin509,tianxin510,tianxin511','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('146','1461363020','1','批量删除会员账号: tianxin482,tianxin483,tianxin484,杨,tianxin486,tianxin487,tianxin488,tianxin489,tianxin490,tianxin491,tianxin492,tianxin493,tianxin494,tianxin495,tianxin496','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('147','1461363028','1','批量删除会员账号: tianxin467,tianxin468,tianxin469,tianxin470,tianxin471,tianxin472,tianxin473,tianxin474,tianxin475,tianxin476,带我去范文芳,dgsx20154,tianxin479,tianxin480,tianxin481','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('148','1461363032','1','批量删除会员账号: tianxin452,tianxin453,tianxin454,tianxin455,tianxin456,tianxin457,tianxin458,tianxin459,tianxin460,tianxin461,tianxin462,tianxin463,tianxin464,tianxin465,tianxin466','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('149','1461363036','1','批量删除会员账号: tianxin437,wang1zzz,tianxin439,tianxin440,tianxin441,tianxin442,tianxin443,12345099,tianxin445,q418870424,tianxin447,tianxin448,tianxin449,tianxin450,tianxin451','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('150','1461363041','1','批量删除会员账号: tianxin422,tianxin423,tianxin424,tianxin425,tianxin426,tianxin427,tianxin428,tianxin429,tianxin430,tianxin431,tianxin432,tianxin433,tianxin434,tianxin435,tianxin436','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('151','1461363044','1','批量删除会员账号: tianxin407,tianxin408,zxianghua,tianxin410,tianxin411,tianxin412,tianxin413,tianxin414,tianxin415,tianxin416,tianxin417,tianxin418,tianxin419,tianxin420,tianxin421','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('152','1461363049','1','批量删除会员账号: tianxin392,ceshi01,tianxin394,guest,398366651,tianxin397,tianxin398,tianxin399,tianxin400,tianxin401,xl5d,chs2004,tianxin404,tianxin405,tianxin406','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('153','1461363053','1','批量删除会员账号: tianxin377,jun333425,tianxin379,tianxin380,tianxin381,tianxin382,tianxin383,tianxin384,tianxin385,tianxin386,tianxin387,7502626,tianxin389,tianxin390,tianxin391','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('154','1461363059','1','批量删除会员账号: 凯泰,tianxin363,tianxin364,tianxin365,testmm,tianxin367,tianxin368,tianxin369,tianxin370,18396244886,tianxin372,tianxin373,tianxin374,tianxin375,tianxin376','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('155','1461363063','1','批量删除会员账号: tianxin347,tianxin348,tianxin349,tianxin350,20862594,tianxin352,tianxin353,tianxin354,tianxin355,tianxin356,tianxin357,tianxin358,tianxin359,tianxin360,贤夫人','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('156','1461363068','1','批量删除会员账号: tianxin332,tianxin333,tianxin334,tianxin335,tianxin336,eryao,tianxin338,tianxin339,tianxin340,tianxin341,tianxin342,tianxin343,tianxin344,tianxin345,tianxin346','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('157','1461363072','1','批量删除会员账号: 123123,tianxin318,tianxin319,tianxin320,tianxin321,tianxin322,lingh,tianxin324,tianxin325,tianxin326,tianxin327,tianxin328,tianxin329,rui7777,tianxin331','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('158','1461363078','1','批量删除会员账号: randy,tianxin303,tianxin304,iii,tianxin306,tianxin307,tianxin308,tianxin309,jjjjj,iiii,tianxin312,tianxin313,tianxin314,tianxin315,tianxin316','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('159','1461363082','1','批量删除会员账号: tianxin287,tianxin288,路路,tianxin290,tianxin291,tianxin292,tianxin293,tianxin294,tianxin295,tianxin296,tianxin297,tianxin298,tianxin299,tianxin300,tianxin301','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('160','1461363086','1','批量删除会员账号: tianxin272,tianxin273,tianxin274,tianxin275,tianxin276,tianxin277,tianxin278,tianxin279,tianxin280,tianxin281,tianxin282,5290620340,tianxin284,tianxin285,tianxin286','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('161','1461363092','1','批量删除会员账号: tianxin257,tianxin258,tianxin259,tianxin260,tianxin261,tianxin262,tianxin263,tianxin264,tianxin265,tianxin266,666666,tianxin268,eddiep,tianxin270,tianxin271','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('162','1461363097','1','批量删除会员账号: tianxin242,tianxin243,tianxin244,tianxin245,tianxin246,tianxin247,tianxin248,tianxin249,tianxin250,tianxin251,tianxin252,tianxin253,tianxin254,tianxin255,ty88523476','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('163','1461363103','1','批量删除会员账号: tianxin227,tianxin228,tianxin229,tianxin230,tianxin231,tianxin232,tianxin233,tianxin234,tianxin235,tianxin236,tianxin237,lmcnet,tianxin239,tianxin240,tianxin241','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('164','1461363108','1','批量删除会员账号: tianxin212,tianxin213,tianxin214,tianxin215,tianxin216,tianxin217,147258,tianxin219,tianxin220,tianxin221,tianxin222,tianxin223,tianxin224,tianxin225,tianxin226','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('165','1461363112','1','批量删除会员账号: tianxin197,tianxin198,tianxin199,tianxin200,tianxin201,tianxin202,tianxin203,tianxin204,tianxin205,tianxin206,tianxin207,tianxin208,tianxin209,tianxin210,tianxin211','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('166','1461363116','1','批量删除会员账号: tianxin182,tianxin183,tianxin184,tianxin185,tianxin186,tianxin187,tianxin188,tianxin189,tianxin190,tianxin191,tianxin192,tianxin193,tianxin194,tianxin195,tianxin196','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('167','1461363121','1','批量删除会员账号: jianwen,13264015420,tianxin169,tianxin170,tianxin171,马儿,tianxin173,tianxin174,tianxin175,tianxin176,tianxin177,tianxin178,tianxin179,tianxin180,tianxin181','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('168','1461363126','1','批量删除会员账号: tianxin152,tianxin153,tianxin154,tianxin155,tianxin156,tianxin157,tianxin158,tianxin159,tianxin160,tianxin161,tianxin162,ceshi,111111,363144512@qq.com,tianxin166','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('169','1461363132','1','批量删除会员账号: tianxin137,tianxin138,tianxin139,刘坤,tianxin141,tianxin142,tianxin143,tianxin144,tianxin145,tianxin146,tianxin147,tianxin148,tianxin149,tianxin150,tianxin151','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('170','1461363137','1','批量删除会员账号: tianxin122,tianxin123,tianxin124,tianxin125,tianxin126,tianxin127,tianxin128,tianxin129,tianxin130,tianxin131,tianxin132,tianxin133,tianxin134,tianxin135,tianxin136','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('171','1461363141','1','批量删除会员账号: tianxin107,tianxin108,tianxin109,tianxin110,tianxin111,tianxin112,tianxin113,tianxin114,tianxin115,huyuepu,tianxin117,tianxin118,tianxin119,tianxin120,tianxin121','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('172','1461363145','1','批量删除会员账号: tianxin91,tianxin92,tianxin93,13960267981,tianxin96,tianxin97,tianxin98,001,002,tianxin101,tianxin102,tianxin103,18229187277,tianxin105,tianxin106','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('173','1461363150','1','批量删除会员账号: tianxin74,byhui,tianxin76,tianxin77,tianxin78,tianxin79,tianxin80,tianxin81,tianxin82,tianxin83,tianxin84,tianxin85,keikowf,tianxin88,tianxin90','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('174','1461363156','1','批量删除会员账号: tianxin59,tianxin60,tianxin61,tianxin62,tianxin63,tianxin64,tianxin65,tianxin66,tianxin67,tianxin68,tianxin69,tianxin70,tianxin71,tianxin72,tianxin73','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('175','1461363160','1','批量删除会员账号: wellmate,tianxin45,tianxin46,tianxin47,tianxin48,tianxin49,tianxin50,xx1234,tianxin52,tianxin53,海浩,tianxin55,wgq1,tianxin57,tianxin58','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('176','1461363165','1','批量删除会员账号: tianxin29,tianxin30,tianxin31,tianxin32,tianxin33,tianxin34,tianxin35,tianxin36,tianxin37,tianxin38,tianxin39,13468487281,tianxin41,tianxin42,tianxin43','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('177','1461363171','1','批量删除会员账号: tianxin14,tianxin15,tianxin16,test,tianxin18,tianxin19,tianxin20,tianxin21,tianxin22,tianxin23,tianxin24,tianxin25,tianxin26,tianxin27,tianxin28','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('178','1461363176','1','批量删除会员账号: tianxin1,tianxin3,tianxin4,tianxin5,tianxin6,tianxin7,tianxin8,13366480362,tianxin10,tianxin11,tianxin12,tianxin13','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('179','1461365329','1','编辑权限管理: admin','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('180','1461430270','1','编辑广告位置: 手机版首页Banner','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('181','1461430293','1','编辑广告: 3','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('182','1461430302','1','编辑广告: 3','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('183','1461430324','1','编辑广告: 2','222.129.37.238');");
E_D("replace into `ecs_admin_log` values('184','1461430338','1','编辑广告: 1','222.129.37.238');");

require("../../inc/footer.php");
?>