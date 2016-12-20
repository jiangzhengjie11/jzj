/*
Navicat MySQL Data Transfer

Source Server         : 222
Source Server Version : 50716
Source Host           : 192.168.113.140:3306
Source Database       : subentry

Target Server Type    : MYSQL
Target Server Version : 50716
File Encoding         : 65001

Date: 2016-12-20 14:50:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL DEFAULT '',
  `registTime` int(10) unsigned NOT NULL DEFAULT '0',
  `registIP` varchar(20) NOT NULL DEFAULT '',
  `status` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'jzj', '111', '20161214', '127.0.0.1', '启用');
INSERT INTO `admin` VALUES ('2', 'zhangsan', '123', '1481785495', '0.0.0.0', '禁用');
INSERT INTO `admin` VALUES ('3', 'lisi', '123', '1481785571', '0.0.0.0', '禁用');
INSERT INTO `admin` VALUES ('4', 'wangwu', '123', '1481785768', '0.0.0.0', '禁用');
INSERT INTO `admin` VALUES ('5', 'zhaoliu', '123', '1481787936', '192.168.113.1', '启用');
INSERT INTO `admin` VALUES ('6', 'aaa', '123', '1481788375', '192.168.113.1', '启用');
INSERT INTO `admin` VALUES ('7', 'bbbb', '123', '1481795597', '192.168.113.1', '启用');
INSERT INTO `admin` VALUES ('8', 'admin', '123', '1481795606', '192.168.113.1', '启用');
INSERT INTO `admin` VALUES ('9', 'sss', 'ssss', '1481875194', '192.168.113.1', '启用');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '产品1');
INSERT INTO `category` VALUES ('2', '产品2');
INSERT INTO `category` VALUES ('3', '产品3');
INSERT INTO `category` VALUES ('4', '44444');

-- ----------------------------
-- Table structure for companyInfo
-- ----------------------------
DROP TABLE IF EXISTS `companyInfo`;
CREATE TABLE `companyInfo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comBriefIntro` text CHARACTER SET utf8,
  `aName` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `addTime` int(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of companyInfo
-- ----------------------------
INSERT INTO `companyInfo` VALUES ('1', '是的房间啦说的话flash到了开发商的旅客谨防了看啥地方啦圣诞节分厘卡似的离开房间了家啊适量淀粉料酒adsl看风景啊是独立风机啊撒旦解放拉萨的解放拉萨酱豆腐立刻涉及多方了解啊是锻炼腹肌啊收到了', 'jzj', '1481877550');

-- ----------------------------
-- Table structure for contactUs
-- ----------------------------
DROP TABLE IF EXISTS `contactUs`;
CREATE TABLE `contactUs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aName` varchar(20) CHARACTER SET utf8 DEFAULT '',
  `addTime` int(10) unsigned NOT NULL DEFAULT '0',
  `addr` varchar(255) CHARACTER SET utf8 DEFAULT '',
  `contactPerson` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mobileTelephone` int(11) unsigned NOT NULL DEFAULT '0',
  `fixedTelephone` int(11) unsigned DEFAULT '0',
  `fax` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of contactUs
-- ----------------------------
INSERT INTO `contactUs` VALUES ('1', 'jzj', '0', '是对方告诉对方公司的风格', '大多数', '111111111', '213434234', '123131');
INSERT INTO `contactUs` VALUES ('2', 'jzj', '1481874318', '哈哈哈', '哈哈哈哈', '222', '222', '222');
INSERT INTO `contactUs` VALUES ('3', 'jzj', '1481874449', '哈哈哈', '哈哈哈哈111', '222', '222', '222');
INSERT INTO `contactUs` VALUES ('4', 'jzj', '1481874562', '111', '11111', '111', '111', '11');

-- ----------------------------
-- Table structure for guestBook
-- ----------------------------
DROP TABLE IF EXISTS `guestBook`;
CREATE TABLE `guestBook` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `content` varchar(1000) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of guestBook
-- ----------------------------
INSERT INTO `guestBook` VALUES ('1', '掐去去去请', '其味无穷诶我去额为我去额外企鹅王企鹅王企鹅王企鹅王企鹅');
INSERT INTO `guestBook` VALUES ('2', 'jzj', 'SZDfasdfas');
INSERT INTO `guestBook` VALUES ('3', 'Sdfgasdf', 'sadfasdf');
INSERT INTO `guestBook` VALUES ('4', 'jzj', '撒士大夫大师傅士大夫士大夫士大夫');
INSERT INTO `guestBook` VALUES ('5', '手动阀手动阀啊手动阀手动阀手动阀', '啊手动阀手动阀阿斯蒂芬撒地方阿斯蒂芬');
INSERT INTO `guestBook` VALUES ('6', '法规和公共', '速度符合国家科技路科技高峰过后觉得发个啥地方');
INSERT INTO `guestBook` VALUES ('7', 'asdfasd', 'asdfasdfasdfasfasd');

-- ----------------------------
-- Table structure for industryInformation
-- ----------------------------
DROP TABLE IF EXISTS `industryInformation`;
CREATE TABLE `industryInformation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `infoTitle` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `publishTime` int(20) unsigned NOT NULL DEFAULT '0',
  `aName` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `infoContent` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of industryInformation
-- ----------------------------
INSERT INTO `industryInformation` VALUES ('1', 'aaaaa', '42354354', 'jzj', '哈哈哈哈哈哈哈啊哈哈就阿九急啊急啊急啊急啊急啊急啊急啊急');
INSERT INTO `industryInformation` VALUES ('2', '阿斯顿发射点发生', '445313216', '士大夫撒旦', '士大夫士大夫撒旦发射点发射点发射点发射点');
INSERT INTO `industryInformation` VALUES ('3', '手动阀示范点', '45464565', '似的发射点', '兽性大发根深蒂固的说法挂号费第三个对手岁的法国电风扇赶得上分隔符设定个');
INSERT INTO `industryInformation` VALUES ('4', 'aaaaa', '1482127675', 'jzj', 'asdfasdfsdafsdafsdafsdafsadfasdfasdSDF法师打发士大夫士大夫的所发生的法师打发士大夫士大夫士大夫撒旦');
INSERT INTO `industryInformation` VALUES ('5', '双方都是大哥发的', '1482127989', 'jzj', '爱的噶是的法规撒旦法撒旦法撒旦法撒旦法与科技感和积分高级护肤水果阿斯顿发送到发送到法国大使馆凤凰股份及韩国换个方法好地方刚合适的风格都是刚发的噶哈地方噶的风格');
INSERT INTO `industryInformation` VALUES ('6', '士大夫撒旦法师', '1482128011', 'jzj', '水电费等符合规范和他人就好看黄金客户就要离开方法是天涯尔雅的身份干涩慰安妇');
INSERT INTO `industryInformation` VALUES ('7', '阿萨德发的好关于机关', '1482128021', 'jzj', '对方是个粉红色如果特色其实的发生的功夫大使馆的双方各有后台如意UI，妈妈会根据地方工会干部从v不v初步形成标准GV阿斯顿法国');
INSERT INTO `industryInformation` VALUES ('8', '下得厨房法规和规范化', '1482128045', 'jzj', '非共和国环境好阔以附带夫人听哈燃烧法规和顺丰单号的人反应让他和预防关节炎退油卡地方更天然防御头几天国际分工和生态与认同或热水石头人一种风格和方式');
INSERT INTO `industryInformation` VALUES ('9', '士大夫士大夫', '1482128068', 'jzj', '速度范围而撒范德萨发水电费个体户已经哭一会开发有时间让发给他只是如图虽然符合规范和发生的规划是否更好的恢复供货');
INSERT INTO `industryInformation` VALUES ('10', '数据还看见好看就好', '1482128093', 'jzj', '是东风股份和于一体UI开工活动晴儿我让他娃儿额外热温热问题热帖人员投入有图有退役u疑uoiu瓶可乐就回家');
INSERT INTO `industryInformation` VALUES ('11', ' 士大夫似的', '1482128120', 'jzj', '撒旦法师打发士大夫士大夫更换过就好看了就哦了非要看美国和家人符合双方附近的太阳还是不是的人但仍然会让他仍会是对方太噶尔个');
INSERT INTO `industryInformation` VALUES ('12', 'sedfasdfasd', '1482199717', 'jzj', 'asdfasdfasdfasdfasdf');

-- ----------------------------
-- Table structure for link
-- ----------------------------
DROP TABLE IF EXISTS `link`;
CREATE TABLE `link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `url` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of link
-- ----------------------------
INSERT INTO `link` VALUES ('1', '百度', 'http://www.baidu.com');
INSERT INTO `link` VALUES ('2', '淘宝', 'http://www.taobao.com');
INSERT INTO `link` VALUES ('3', '要出发', 'http://www.yaochufa.com');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `publishTime` int(10) unsigned NOT NULL,
  `newContent` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `aName` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '111', '1481814524', '11111', 'jzj');
INSERT INTO `news` VALUES ('2', '111', '1481814524', '11111', 'jzj');
INSERT INTO `news` VALUES ('3', '111', '1481814524', '11111', 'jzj');
INSERT INTO `news` VALUES ('4', '111', '1481815735', '轻轻去去去', 'jzj');
INSERT INTO `news` VALUES ('5', '111', '1481815737', 'qwewqe', 'jzj');
INSERT INTO `news` VALUES ('6', 'qqqqqqqqqqqqqqqq', '1481820539', '阿萨德飞洒的第三方阿萨德飞洒地方撒旦法撒旦法', 'jzj');
INSERT INTO `news` VALUES ('7', '111111111111111', '1481855593', '11qqqqqqq', 'jzj');
INSERT INTO `news` VALUES ('8', '按时打发第三方', '1482078414', '是规范合格机构会尽快康复', 'jzj');
INSERT INTO `news` VALUES ('9', 'asasdada', '1482161632', 'asdasdasdasd', 'jzj');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `picPath` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `pdesc` varchar(50) CHARACTER SET utf8 DEFAULT '',
  `aid` int(10) unsigned NOT NULL DEFAULT '0',
  `cid` int(10) unsigned NOT NULL DEFAULT '0',
  `addTime` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('6', '11111111', 'uploads/2016DecMon210540637.png', '撒旦法撒旦法撒旦法撒飞洒发三个多撒', '1', '1', '1482152712');
INSERT INTO `products` VALUES ('7', '22222', 'uploads/2016DecMon210558383.png', '非国家法规尽快换个环境的国际化的团队就反弹的机会是否', '1', '2', '1482152740');
INSERT INTO `products` VALUES ('8', '33333', 'uploads/2016DecMon210611847.jpg', ' ', '1', '3', '1482152758');
INSERT INTO `products` VALUES ('9', '5555555555', 'uploads/2016DecMon210645990.jpg', '按地方噶啥地方噶的双方各', '1', '1', '1482152771');
INSERT INTO `products` VALUES ('10', '6666666666', 'uploads/2016DecMon210700938.png', '二哥让啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊爱的', '1', '3', '1482152805');
INSERT INTO `products` VALUES ('11', '777777', 'uploads/2016DecMon210717132.jpg', '地方撒灌灌灌灌灌灌灌灌灌灌灌灌灌灌灌哥哥说的', '1', '2', '1482152820');
INSERT INTO `products` VALUES ('12', '爱上对方发生的发生', 'uploads/2016DecMon220605197.png', '阿斯顿发送到发送到', '1', '3', '1482156349');
