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

/*#2016/10/29 王晋  在ecs_order_info 添加字段线下店id
*/

ALTER TABLE `ecs_order_info`
ADD COLUMN `lineshop_id`  smallint(8) NOT NULL COMMENT '//线下店id' AFTER `fencheng`;


/*#2016/11/1 王晋  用户表中增加判断会员和线下店的区分字段、特殊标志字段
*/
ALTER TABLE `ecs_users`
ADD COLUMN `is_line`  int(2) NOT NULL DEFAULT 0 COMMENT '//是否为线下店 ' AFTER `password_tianxin`,
ADD COLUMN `hav_logo`  varchar(255) NULL COMMENT '//特殊标志（线下店logo）' AFTER `is_line`;