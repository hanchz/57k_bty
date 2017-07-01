/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-07-01 18:18:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `game_info`
-- ----------------------------
DROP TABLE IF EXISTS `game_info`;
CREATE TABLE `game_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) DEFAULT NULL,
  `gametype` varchar(225) DEFAULT NULL COMMENT '游戏类型',
  `about` text COMMENT '游戏详细介绍',
  `size` varchar(225) DEFAULT NULL COMMENT '游戏大小',
  `downnum` int(10) DEFAULT NULL COMMENT '下载次数',
  `logo` varchar(225) DEFAULT NULL,
  `pic` varchar(225) DEFAULT NULL COMMENT '游戏截图',
  `url` varchar(225) DEFAULT NULL,
  `type` int(2) DEFAULT NULL COMMENT '游戏是否推荐：1：精品，2：人气，3：普通',
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_info
-- ----------------------------
INSERT INTO `game_info` VALUES ('1', '战术大师', '冒险', '《战术大师》是一款西方魔幻战争题材、超强策略互动玩法手游,以人族、兽族、精灵、亡灵四个种族间的争斗为背景,穿插着各种惊险刺激的冒险和战斗。', '20.1', '300', '/images/gamelogo.png', '[\"/images/gamelogo.png\",\"/images/gamelogo.png\",\"/images/gamelogo.png\"]', '/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('2', '萌兔跳跳跳', '冒险', '萌兔已经做好准备,主人求包养~飞跃云霄,不是问题,就看你有没有时间!', '2331', '32', '/images/gamelogo2.png', '[\"/images/gamelogo2.png\",\"/images/gamelogo2.png\",\"/images/gamelogo2.png\"]', '/images/gamelogo2.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('3', '传奇', '传奇', '《热血传奇》是2017年推出的一款大型多人在线角色扮演游戏（MMORPG）。该游戏具有战士、魔法师和道士三种', '2331', '32', '/images/gamelogo3.png', '[\"/images/gamelogo3.png\",\"/images/gamelogo3.png\",\"/images/gamelogo3.png\"]', '/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('4', '暮光', '冒险', '暮光之城是一款根据同名小说，电影改编而成的经典解密游戏，不过因为文化原因，对中国玩家来说比较难懂些。', '2331', '32', '/images/gamelogo4.png', '[\"/images/gamelogo4.png\",\"/images/gamelogo4.png\",\"/images/gamelogo4.png\"]', '/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('5', '约斗', '卡牌', '斗地主约牌下载,斗地主约牌为玩家们带来了非常独特的斗地主游戏,游戏中玩家们将享受趣味性的游戏玩法,游戏画面精美,多人在线互动游戏让玩家们享受畅爽的趣味玩法', '2331', '32', '/images/gamelogo5.png', '[\"/images/gamelogo5.png\",\"/images/gamelogo5.png\",\"/images/gamelogo5.png\"]', '/images/gamelogo.png', '2', '2017-06-10 15:55:02');

-- ----------------------------
-- Table structure for `gifts`
-- ----------------------------
DROP TABLE IF EXISTS `gifts`;
CREATE TABLE `gifts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gameid` int(10) NOT NULL,
  `giftsname` varchar(255) DEFAULT NULL,
  `giftsinfo` varchar(225) NOT NULL,
  `giftsnum` int(10) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gifts
-- ----------------------------
INSERT INTO `gifts` VALUES ('1', '1', '新手礼包', '好吃的X*1', '1999', '2017-06-15 16:54:31');
INSERT INTO `gifts` VALUES ('2', '3', '独家礼包', 'hhh*99', '11', '2017-06-17 16:55:01');

-- ----------------------------
-- Table structure for `gifts_list`
-- ----------------------------
DROP TABLE IF EXISTS `gifts_list`;
CREATE TABLE `gifts_list` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `gameid` int(10) NOT NULL,
  `userid` int(10) DEFAULT NULL,
  `key` varchar(50) NOT NULL,
  `gettime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gifts_list
-- ----------------------------
INSERT INTO `gifts_list` VALUES ('1', '1', '1', 'dsfsf1231', '2017-07-01 18:14:18');
INSERT INTO `gifts_list` VALUES ('2', '1', '332', 'dsfsf1231', null);
INSERT INTO `gifts_list` VALUES ('3', '3', null, 'dsfsf1231', '0000-00-00 00:00:00');
INSERT INTO `gifts_list` VALUES ('4', '3', null, 'dsfsf1231', '0000-00-00 00:00:00');
INSERT INTO `gifts_list` VALUES ('5', '2', null, 'dsfsf1231', null);
INSERT INTO `gifts_list` VALUES ('6', '2', null, 'dsfsf1231', null);
INSERT INTO `gifts_list` VALUES ('7', '2', null, 'dsfsf1231', null);
INSERT INTO `gifts_list` VALUES ('8', '2', null, 'dsfsf1231', null);
INSERT INTO `gifts_list` VALUES ('9', '2', null, 'dsfsf1231', null);

-- ----------------------------
-- Table structure for `kf`
-- ----------------------------
DROP TABLE IF EXISTS `kf`;
CREATE TABLE `kf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gameid` int(10) NOT NULL,
  `opentime` datetime NOT NULL,
  `serverid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of kf
-- ----------------------------
INSERT INTO `kf` VALUES ('1', '1', '2017-06-16 18:26:16', '5');
INSERT INTO `kf` VALUES ('2', '2', '2017-06-22 18:27:18', '3');
INSERT INTO `kf` VALUES ('3', '3', '2017-06-21 18:27:32', '2');
INSERT INTO `kf` VALUES ('4', '1', '2017-06-21 18:28:36', '3');
INSERT INTO `kf` VALUES ('5', '1', '2017-07-14 18:30:16', '7');
INSERT INTO `kf` VALUES ('6', '5', '2017-06-19 18:30:31', '8');

-- ----------------------------
-- Table structure for `kv`
-- ----------------------------
DROP TABLE IF EXISTS `kv`;
CREATE TABLE `kv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kv
-- ----------------------------
INSERT INTO `kv` VALUES ('1', '/images/huandeng.jpg', '/images/huandeng.jpg', '2017-06-10 13:50:05');
INSERT INTO `kv` VALUES ('2', '/images/huandeng1.jpg', '/images/huandeng1.jpg', '2017-06-10 14:43:19');

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gameid` int(10) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text,
  `addtime` datetime DEFAULT NULL,
  `downnum` int(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '1', '微服务', '方法发广告日光灯管', '2017-06-15 17:34:55', '10');
INSERT INTO `news` VALUES ('2', '2', 'dfsf ', 'dsfsfsdf 发送的', '2017-06-16 17:35:06', '222');
INSERT INTO `news` VALUES ('3', '3', '我发的说法', '水电费的说法是的范德萨', '2017-06-13 17:35:24', '3333');

-- ----------------------------
-- Table structure for `top10`
-- ----------------------------
DROP TABLE IF EXISTS `top10`;
CREATE TABLE `top10` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `gameid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of top10
-- ----------------------------
INSERT INTO `top10` VALUES ('1', '1');
INSERT INTO `top10` VALUES ('2', '3');
INSERT INTO `top10` VALUES ('3', '4');
INSERT INTO `top10` VALUES ('4', '15');
INSERT INTO `top10` VALUES ('5', '6');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'zj', '123456');

-- ----------------------------
-- Table structure for `user_info`
-- ----------------------------
DROP TABLE IF EXISTS `user_info`;
CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_info
-- ----------------------------
INSERT INTO `user_info` VALUES ('1', 'hanzc', '123');
INSERT INTO `user_info` VALUES ('2', 'zj', '123456');
