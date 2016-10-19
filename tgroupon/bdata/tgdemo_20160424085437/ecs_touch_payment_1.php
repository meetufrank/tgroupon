<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_payment`;");
E_C("CREATE TABLE `ecs_touch_payment` (
  `pay_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `pay_code` varchar(20) NOT NULL DEFAULT '',
  `pay_name` varchar(120) NOT NULL DEFAULT '',
  `pay_fee` varchar(10) NOT NULL DEFAULT '0',
  `pay_desc` text NOT NULL,
  `pay_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `pay_config` text NOT NULL,
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_cod` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_online` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `pay_code` (`pay_code`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_payment` values('4','alipay','支付宝','0','支付宝网站(www.alipay.com) 是国内先进的网上支付平台。<br/>支付宝收款接口：在线即可开通，<font color=\"red\"><b>零预付，免年费</b></font>，单笔阶梯费率，无流量限制。<br/><a href=\"http://cloud.ecshop.com/payment_apply.php?mod=alipay\" target=\"_blank\"><font color=\"red\">立即在线申请</font></a>','0','a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:3;a:3:{s:4:\"name\";s:17:\"alipay_pay_method\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"0\";}}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('5','alipay1','支付宝免签约支付','0','免签约支付，配置方法：支付宝账号填写个人支付宝账号，合作者身份ID为电话号码即可！','0','a:4:{i:0;a:3:{s:4:\"name\";s:14:\"alipay_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:17:\"1186190309@qq.com\";}i:1;a:3:{s:4:\"name\";s:10:\"alipay_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:14:\"alipay_partner\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:11:\"13903440689\";}i:3;a:3:{s:4:\"name\";s:17:\"alipay_pay_method\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"0\";}}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('6','cod','货到付款','0','开通城市：×××\r\n货到付款区域：×××','0','a:0:{}','1','1','0');");
E_D("replace into `ecs_touch_payment` values('7','bank','银行汇款/转帐','0','银行名称\r\n收款人信息：全称 ××× ；帐号或地址 ××× ；开户行 ×××。\r\n注意事项：办理电汇时，请在电汇单“汇款用途”一栏处注明您的订单号。','0','a:0:{}','1','0','0');");
E_D("replace into `ecs_touch_payment` values('8','balance','余额支付','0','使用帐户余额支付。只有会员才能使用，通过设置信用额度，可以透支。','0','a:0:{}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('9','wx_new_jspay','微信支付','0','本支付适用于新版本微信支付','0','a:5:{i:0;a:3:{s:4:\"name\";s:5:\"appid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:1;a:3:{s:4:\"name\";s:5:\"mchid\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:3:\"key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:3;a:3:{s:4:\"name\";s:9:\"appsecret\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:4;a:3:{s:4:\"name\";s:4:\"logs\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('10','epay95','双乾E支付','0','双乾是国内领先的独立第三方支付企业，旨在为各类企业及个人提供安全、便捷和保密的综合电子支付服务。目前，双乾是支付产品最丰富、应用最广泛的电子支付企业之一，其推出的支付产品不但包括人民币借记卡、信用卡的支付，还支持Visa、Master Card、JCB等国际3D、非3D信用卡的网上支付。近期，双乾支付开发了国内、国际信用卡的远程线下支付，极大地满足了国内外商户和消费者的需求','0','a:8:{i:0;a:3:{s:4:\"name\";s:5:\"MerNo\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:4:\"1002\";}i:1;a:3:{s:4:\"name\";s:6:\"MD5key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:8:\"12345678\";}i:2;a:3:{s:4:\"name\";s:8:\"Currency\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:1:\"3\";}i:3;a:3:{s:4:\"name\";s:4:\"Rate\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:7:\"1.00000\";}i:4;a:3:{s:4:\"name\";s:8:\"Language\";s:4:\"type\";s:6:\"select\";s:5:\"value\";s:2:\"zh\";}i:5;a:3:{s:4:\"name\";s:14:\"TransactionURL\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:37:\"https://payment.95epay.com/sslpayment\";}i:6;a:3:{s:4:\"name\";s:9:\"Returnurl\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:49:\"http://wxmiqi.wushuai.net/respond.php?code=epay95\";}i:7;a:3:{s:4:\"name\";s:9:\"Noticeurl\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:43:\"http://wxmiqi.wushuai.net/notice_95epay.php\";}}','1','0','1');");
E_D("replace into `ecs_touch_payment` values('11','upop_wap','银联在线支付','0','银联在线支付是中国银联推出的网上支付平台！支付前请安装银联支付安全控件：<a href=\"http://mobile.unionpay.com/getclient?platform=android&type=securepayplugin\">Android控件下载</a> <a href=\"http://mobile.unionpay.com/getclient?platform=ios&type=securepayplugin\">iOS控件下载</a>','0','a:3:{i:0;a:3:{s:4:\"name\";s:16:\"upop_wap_merAbbr\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:12:\"商户名称\";}i:1;a:3:{s:4:\"name\";s:16:\"upop_wap_account\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}i:2;a:3:{s:4:\"name\";s:21:\"upop_wap_security_key\";s:4:\"type\";s:4:\"text\";s:5:\"value\";s:0:\"\";}}','1','0','1');");

require("../../inc/footer.php");
?>