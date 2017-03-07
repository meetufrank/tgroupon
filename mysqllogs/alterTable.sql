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


/*#2016/11/12 王晋  修改分成类型
*/
ALTER TABLE `ecs_fencheng`
MODIFY COLUMN `type`  int(2) NOT NULL DEFAULT 0 COMMENT '//分成类型 0代表产品分成 1代表销售分成 2代表艺术家分成 3代表厂商' AFTER `status`;

/*#2016/11/26 汪江  users表添加wx_open_id微信用户openid
*/
alter table `ecs_users` add `wx_open_id` varchar(25) not Null;

/*#2016/12/11 王晋   支付方式添加字段logo
*/
ALTER TABLE `ecs_touch_payment`
ADD COLUMN `logo`  varchar(255) NULL COMMENT '//支付logo' AFTER `is_online`;




/*#2016/12/16 王晋   新建偏远地区表
*/
CREATE TABLE `ecs_yuan_area` (
`yuan_id`  mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '//偏远地区id(省级id)' ,
`yuan_name`  mediumint(8) NULL COMMENT '//省级id' ,
PRIMARY KEY (`yuan_id`)
)
;

/*#2016/12/16 王晋   添加该偏远地区邮费表
*/
ALTER TABLE `ecs_yuan_area`
ADD COLUMN `price`  double(6,2) NOT NULL DEFAULT 0 COMMENT '//该偏远地区邮费' AFTER `yuan_name`;

/*#2016/12/16 王晋   商品表 添加字段  额外费用
*/
ALTER TABLE `ecs_goods`
MODIFY COLUMN `more_price`  decimal(10,2) NULL DEFAULT 0.00 COMMENT '//额外费用' AFTER `father_id`;

/*#2016/12/16 王晋   订单表添加订单邮费字段
*/
ALTER TABLE `ecs_order_info`
ADD COLUMN `post_price`  decimal(10,2) NOT NULL DEFAULT 0 COMMENT '//邮费' AFTER `lineshop_id`;


/*#2016/12/16 汪江   ecs_admin_user表添加艺术家备注字段
*/
ALTER TABLE `ecs_admin_user`
ADD COLUMN `artiststalk`  varchar(255) NULL COMMENT '//艺术家备注' AFTER `ysj_tixian`;



/*#2016/12/16 汪江   ecs_products表添加字段
*/
ALTER TABLE `ecs_products`
ADD COLUMN `attributeprice`  varchar(255) NULL AFTER `product_number`,
ADD COLUMN `attributeimg`  varchar(255) NULL AFTER `attributeprice`;


/*#2016/12/16 汪江   ecs_goods_attr添加商品属性表字段
*/

ALTER TABLE `ecs_goods_attr`
ADD COLUMN `attr_img`  varchar(255) NULL COMMENT '//具体商品属性表' AFTER `attr_price`;


/*#2016/12/28 汪江   ecs_user_address  收货人的信息列表 添加默认地址字段
*/

ALTER TABLE `ecs_user_address`
ADD COLUMN `default`  int(10) NULL COMMENT '//1为默认'
ADD COLUMN `attr_img`  varchar(255) NULL COMMENT '//具体商品属性表' AFTER `attr_price`;



/*#2016/12/16 王晋   添加新表，价格区间表
*/

CREATE TABLE `ecs_money_type` (
`money_id`  smallint(2) NOT NULL COMMENT '//筛选区间 ' ,
`money_name`  varchar(20) NULL ,
`min_money`  int NULL ,
`max_money`  int  NULL ,

PRIMARY KEY (`money_id`)
);

/*#2016/12/28 汪江   ecs_users 表中修改索引
*/

ALTER TABLE `ecs_users`
DROP INDEX `user_name` ,
ADD INDEX `user_name` (`user_name`) USING BTREE ;


/*#2016/12/30 汪江   修改wx_open_id长度
*/
ALTER TABLE `ecs_users`
MODIFY COLUMN `wx_open_id`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `tj_fencheng`;


/*#2016/12/30 王晋     在购物车中添加字段
*/

ALTER TABLE `ecs_cart`
ADD COLUMN `cart_type`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '//1为立即支付' AFTER `new_fencheng`;



/*#2016/12/33 汪江   添加字段 unionid
*/
ALTER TABLE `ecs_users`
ADD COLUMN `unionid`  varchar(255) NOT NULL COMMENT '//微信公众，开发平台用户唯一标识' AFTER `headimgurl`;



/*#2017/02/06 王晋  会员表中添加字段
*/
ALTER TABLE `ecs_users`
ADD COLUMN `is_art`  int(2) NOT NULL DEFAULT 0 COMMENT '//是否绑定艺术家' AFTER `unionid`;


/*#2017/02/06 王晋  会员表中添加字段
*/
ALTER TABLE `ecs_users`
ADD COLUMN `all_money`  double(7,2) NOT NULL DEFAULT 0 COMMENT '//提现总额' AFTER `is_art`;


/*#2017/02/06 王晋  新建提现记录表
*/
CREATE TABLE `NewTable` (
`log_id`  mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '//提现记录id' ,
`log_userid`  mediumint(8) NOT NULL COMMENT '//提现用户id' ,
`log_content`  text NULL COMMENT '//反馈信息' ,
`log_time`  timestamp NULL ON UPDATE CURRENT_TIMESTAMP ,
PRIMARY KEY (`log_id`)
)
;

/*#2017/02/06 王晋  修改提现记录表
*/
ALTER TABLE `ecs_txlog`
MODIFY COLUMN `log_time`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP AFTER `log_content`;


/*#2017/02/06 王晋  用户表中添加字段
*/
ALTER TABLE `ecs_users`
ADD COLUMN `xs_fencheng`  double(4,2) NOT NULL DEFAULT 0 COMMENT '//线下店销售分成' AFTER `all_money`;

/*#2017/02/06 王晋  修改艺术家字段
*/
ALTER TABLE `ecs_admin_user`
MODIFY COLUMN `ysj_tixian`  mediumint(8) NOT NULL DEFAULT 0 COMMENT '//艺术家绑定提现用户id' AFTER `ysj_fencheng`;



/*#2017/02/08 汪江  添加提现审核日志表中的审核备注字段
*/
ALTER TABLE `ecs_txlog`
ADD COLUMN `remark`  text NOT NULL COMMENT '//审核备注' AFTER `log_time`;

/*#2017/02/08 汪江  添加提现审核日志表中的拒绝理由字段
*/
ALTER TABLE `ecs_txlog`
ADD COLUMN `objection`  text NOT NULL COMMENT '//拒绝理由' AFTER `remark`;

/*#2017/02/06 王晋  用户表中添加唯一编号
*/
ALTER TABLE `ecs_users`
ADD COLUMN `weiyi_num`  varchar(255) NULL COMMENT '//唯一编号' AFTER `xs_fencheng`;

/*#2017/02/06 王晋  修改表注释
*/
ALTER TABLE `ecs_users`
MODIFY COLUMN `xs_fencheng`  double(4,2) NOT NULL DEFAULT 0.00 COMMENT '//线下店产品分成' AFTER `all_money`;




/*#2017/02/06 王晋  提现表修改
*/
ALTER TABLE `ecs_tixian`
MODIFY COLUMN `time`  datetime NOT NULL DEFAULT '' COMMENT '//提现时间' AFTER `money`;




/*#2017/02/14 汪江  给货品表优惠价格比例字段
*/
ALTER TABLE `ecs_products`
ADD COLUMN `priceratio`  int(11) NULL COMMENT '//货品价格比例' AFTER `attributeimg`;

/*#2017/02/14 王晋  修改字段数据类型
*/
ALTER TABLE `ecs_products`
MODIFY COLUMN `attributeprice`  decimal(10,2) NULL DEFAULT 0.00 AFTER `product_number`;

/*#2017/02/16 汪江  修改字段数据类型
*/
ALTER TABLE `ecs_products`
MODIFY COLUMN `priceratio`  double(7,6) NULL DEFAULT 1 COMMENT '//货品价格比例' AFTER `attributeimg`;

/*#2017/02/20 汪江  添加货品假价格字段
*/
ALTER TABLE `ecs_products`
ADD COLUMN `falseprice`  decimal(10,2) NULL DEFAULT 0.00 COMMENT '//货品假价格' AFTER `priceratio`;


/*#2017/02/21 汪江  商品表添加特别优惠字段
*/
ALTER TABLE `ecs_goods`
ADD COLUMN `is_very`  tinyint(1) NOT NULL DEFAULT 0 COMMENT '//特别优惠' AFTER `more_price`;


/*#2017/02/22 汪江  首页轮播图表添加排序字段
*/
ALTER TABLE `ecs_touch_ad`
ADD COLUMN `sort`  int(11) NULL DEFAULT 0 COMMENT '//首页轮播图排序' AFTER `enabled`;


/*#2017/02/23 汪江  用户表添加一个手机openid字段
*/
ALTER TABLE `ecs_users`
ADD COLUMN `openidphone`  varchar(50) NOT NULL COMMENT '//手机openid' AFTER `weiyi_num`;


/*#2017/02/23 汪江  商品表添加首页轮播图片
*/
ALTER TABLE `ecs_goods`
ADD COLUMN `listimg`  varchar(255) NULL COMMENT '//首页列表轮播图片' AFTER `is_very`;


/*#2017/02/23 汪江  广告表添加广告栏位
*/
ALTER TABLE `ecs_touch_ad`
MODIFY COLUMN `position_id`  smallint(5) UNSIGNED NOT NULL DEFAULT 0 COMMENT '//首页1; 设计师2; 设计师列表详情3' AFTER `ad_id`;




/*#2017/02/24 汪江  admin_user 表添加设计师简介
*/
ALTER TABLE `ecs_admin_user`
ADD COLUMN `sjsintro`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '//设计师简介' AFTER `artiststalk`;


/*#2017/02/27 汪江  用户表添加是否关注微信公众号
*/
ALTER TABLE `ecs_users`
ADD COLUMN `attention`  int(10) NOT NULL DEFAULT 0 COMMENT '//是否关注微信公众号 0未关注  1已关注' AFTER `openidphone`;




/*#2017/03/1 汪江  admin_user 表添加设计师详情banner图
*/
ALTER TABLE `ecs_admin_user`
ADD COLUMN `sjsbanner`  varchar(255) NOT NULL COMMENT '//设计师详情banner' AFTER `sjsintro`;

/*#2017/03/1 王晋  添加合作申请表 ecs_shenqing
*/
CREATE TABLE `ecs_shenqing` (
`sq_id`  mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '//申请表id' ,
`sq_userid`  mediumint(8) NOT NULL COMMENT '//发起申请的用户id' ,
`sq_username`  varchar(20) NOT NULL DEFAULT '' COMMENT '//姓名' ,
`sq_tel`  varchar(20) NOT NULL DEFAULT '' COMMENT '//联系方式' ,
`sq_email`  varchar(50) NOT NULL DEFAULT '' COMMENT '//邮箱' ,
`sq_wxname`  varchar(100) NULL DEFAULT '' COMMENT '//微信号' ,
`sq_kjname`  varchar(30) NOT NULL DEFAULT '' COMMENT '//微信名称' ,
`sq_kjaddress`  varchar(255) NOT NULL DEFAULT '' COMMENT '//空间地址' ,
`sq_text`  text NULL COMMENT '//合作期待' ,
`sq_type`  smallint(1) NOT NULL DEFAULT 1 COMMENT '//合作期待内容' ,
PRIMARY KEY (`sq_id`)
)
;


/*#2017/03/1 王晋  修改合作申请表 ecs_shenqing
*/
ALTER TABLE `ecs_shenqing`
MODIFY COLUMN `sq_type`  smallint(1) NOT NULL DEFAULT 1 COMMENT '//合作类型 1渠道 2 品牌 3设计师' AFTER `sq_text`;

/*#2017/03/1 王晋  添加合作申请表 ecs_shenqing字段
*/
ALTER TABLE `ecs_shenqing`
ADD COLUMN `sq_time`  timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '//申请时间' AFTER `sq_type`,
ADD COLUMN `sq_status`  smallint(1) NOT NULL DEFAULT 0 COMMENT '//状态' AFTER `sq_time`;




/*#2017/03/2 汪江  商品表添加特别优惠图片字段
*/
ALTER TABLE `ecs_goods`
ADD COLUMN `veryimg`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '//特别优惠图片' AFTER `listimg`;

/*#2017/03/03 汪江  添加系统消息表
*/
CREATE TABLE `ecs_xiaoxi` (
`xxid`  int(10) NOT NULL AUTO_INCREMENT COMMENT '//系统消息id' ,
`xxtitle`  varchar(255) NULL COMMENT '//系统消息标题' ,
`xxlink`  varchar(255) NULL COMMENT '//系统消息链接' ,
`xxtime`  varchar(255) NULL COMMENT '//系统消息时间' ,
PRIMARY KEY (`xxid`)
)
;


/*#2017/03/03 王晋  添加读取消息记录表
*/
CREATE TABLE `ecs_read` (
`re_id`  mediumint(8) NOT NULL AUTO_INCREMENT COMMENT '//消息读取id' ,
`re_userid`  mediumint(8) NOT NULL COMMENT '//用户id' ,
`re_xxid`  mediumint(8) NOT NULL COMMENT '//消息id' ,
PRIMARY KEY (`re_id`)
)
;

/*#2017/03/03 王晋  修改消息表消息时间字段数据类型
*/
ALTER TABLE `ecs_xiaoxi`
MODIFY COLUMN `xxtime`  timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '//系统消息时间' AFTER `xxlink`;


