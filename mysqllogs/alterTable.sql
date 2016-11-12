/*#2016/10/29 王晋在ecs_goods 表中添加两个字段名 艺术家id  厂商id
*/
ALTER TABLE `ecs_goods`

ADD COLUMN `arter_id`  smallint(5) NOT NULL AFTER `fencheng`,
ADD COLUMN `father_id`  smallint(5) NOT NULL AFTER `arter_id`;



/*#2016/10/29 王晋  创建线下店签约表
*/

CREATE TABLE `ecs_line_shop` (
  `ls_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '//编号',
  `ls_goodsid` int(11) NOT NULL COMMENT '//商品id',
  `ls_userid` int(11) NOT NULL COMMENT '//线下店id',
  `ls_ratio` double(4,2) NOT NULL COMMENT '//分成比例',
  `ls_addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '//签约时间',
  PRIMARY KEY (`ls_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='//线下店签约表';




/*#2016/11/1 王晋  用户表中增加判断会员和线下店的区分字段、特殊标志字段
*/
ALTER TABLE `ecs_users`
ADD COLUMN `is_line`  int(2) NOT NULL DEFAULT 0 COMMENT '//是否为线下店 ' AFTER `password_tianxin`,
ADD COLUMN `hav_logo`  varchar(255) NULL COMMENT '//特殊标志（线下店logo）' AFTER `is_line`;

/*#2016/11/1 王晋  在ecs_order_goods 添加字段线下店id,分成
*/
ALTER TABLE `ecs_order_goods`
ADD COLUMN `lineshop_id`  mediumint(8) NOT NULL COMMENT '//线下店id' AFTER `goods_attr_id`,
ADD COLUMN `fencheng`  double(4,2) NOT NULL AFTER `lineshop_id`;



/*#2016/11/5 汪江  在ecs_cart 添加lineid 线下店id字段
*/
alter table `ecs_cart` add `lineid` int(11) not Null;


/*#2016/11/5 王晋  在ecs_admin_user 添加国家、艺术家logo字段
*/
ALTER TABLE `ecs_admin_user`
ADD COLUMN `country`  varchar(20) NULL COMMENT '//国家' AFTER `role_id`,
ADD COLUMN `hav_logo`  varchar(255) NULL COMMENT '//艺术家logo' AFTER `country`;




/*#2016/11/5 王晋  在ecs_cart 添加分成比例字段
*/
ALTER TABLE `ecs_cart`
ADD COLUMN `new_fencheng`  double(4,2) NULL COMMENT '//线下店分成比例' AFTER `lineid`;



/*#2016/11/5 王晋  添加分成表ecs_fencheng
*/
CREATE TABLE `ecs_fencheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '//分成编号',
  `goodsid` mediumint(8) NOT NULL COMMENT '//商品id',
  `line_shopid` mediumint(8) NOT NULL COMMENT '//线下店id',
  `userid` mediumint(8) NOT NULL COMMENT '//购买用户',
  `money` double(7,2) NOT NULL DEFAULT '0.00' COMMENT '//分成金额',
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '//时间',
  `status` smallint(2) NOT NULL DEFAULT '0' COMMENT '//状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


/*#2016/11/5 王晋  添加提现表   ecs_tixian
*/

CREATE TABLE `ecs_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '//提现编号',
  `line_shopid` mediumint(8) NOT NULL COMMENT '//线下店id',
  `money` double(7,2) NOT NULL DEFAULT '0.00' COMMENT '//提现金额',
  `time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '//提现时间',
  `status` smallint(2) NOT NULL COMMENT '//状态',
  `other` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



/*#2016/11/5 王晋  会员表中 线下店添加 可提现金额字段。
*/

ALTER TABLE `ecs_users`
ADD COLUMN `hav_money`  double(7,2) NOT NULL DEFAULT 0 COMMENT '//可提现金额' AFTER `hav_logo`;



/*#2016/11/11 王晋  会员表中 添加用户第一次购买标示、线下店推荐分成字段。
*/
ALTER TABLE `ecs_users`
MODIFY COLUMN `tuijian`  mediumint(9) NOT NULL DEFAULT '-1' COMMENT '//推荐人' AFTER `hav_money`,
CHANGE COLUMN `hav_fencheng` `tj_fencheng`  double(4,2) NULL DEFAULT 0.00 COMMENT '//线下店推荐分成' AFTER `tuijian`;


/*#2016/11/11 王晋  分成表中添加分成类型
*/
ALTER TABLE `ecs_fencheng`
ADD COLUMN `type`  int(2) NOT NULL DEFAULT 0 COMMENT '//分成类型' AFTER `status`;


/*#2016/11/11 王晋  分成表中添加获得提成用户
*/
ALTER TABLE `ecs_fencheng`
ADD COLUMN `get_shopid`  mediumint(8) NOT NULL DEFAULT 0 COMMENT '//获得提成用户' AFTER `type`;


/*#2016/11/11 王晋  管理员表中添加艺术家分成字段
*/
ALTER TABLE `ecs_admin_user`
ADD COLUMN `ysj_fencheng`  double(4,2) NOT NULL DEFAULT 0 COMMENT '//艺术家分成' AFTER `hav_logo`;



/*#2016/11/11 王晋  管理员表中添加艺术家可提现金额
*/
ALTER TABLE `ecs_admin_user`
ADD COLUMN `ysj_tixian`  double(7,2) NOT NULL DEFAULT 0 COMMENT '//艺术家可提现金额' AFTER `ysj_fencheng`;
