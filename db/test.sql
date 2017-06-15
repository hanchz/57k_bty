/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-15 12:01:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for game_info
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of game_info
-- ----------------------------
INSERT INTO `game_info` VALUES ('1', '战术大师1', '冒险', '内容内容内容内容', '20.1', '300', 'http://localhost/test/images/gamelogo.png', '[\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\"]', 'http://localhost/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('2', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost/test/images/gamelogo.png', '[\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\"]', 'http://localhost/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('3', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost/test/images/gamelogo.png', '[\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\"]', 'http://localhost/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('4', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost/test/images/gamelogo.png', '[\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\"]', 'http://localhost/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('5', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost/test/images/gamelogo.png', '[\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\"]', 'http://localhost/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('6', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', '[\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\",\"http:\\/\\/localhost\\/test\\/images\\/gamelogo.png\"]', 'http://localhost:8080/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('7', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('8', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('9', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '2', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('10', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('11', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('12', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('13', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('14', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('15', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '1', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('16', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('17', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('18', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('19', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('20', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('21', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('22', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('23', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');
INSERT INTO `game_info` VALUES ('24', '战术大师1', '冒险', '内容内容内容内容', '2331', '32', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', 'http://localhost:8080/test/images/gamelogo.png', '3', '2017-06-10 15:55:02');

-- ----------------------------
-- Table structure for gifts
-- ----------------------------
DROP TABLE IF EXISTS `gifts`;
CREATE TABLE `gifts` (
  `gameid` int(10) NOT NULL,
  `giftsinfo` varchar(225) NOT NULL,
  `giftsnum` int(10) NOT NULL,
  `addtime` datetime NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gifts
-- ----------------------------

-- ----------------------------
-- Table structure for kf
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
INSERT INTO `kf` VALUES ('2', '2', '2017-06-13 18:27:18', '3');
INSERT INTO `kf` VALUES ('3', '3', '2017-06-08 18:27:32', '2');
INSERT INTO `kf` VALUES ('4', '1', '2017-06-10 18:28:36', '3');
INSERT INTO `kf` VALUES ('5', '1', '2017-06-14 18:30:16', '7');
INSERT INTO `kf` VALUES ('6', '5', '2017-06-19 18:30:31', '8');

-- ----------------------------
-- Table structure for kv
-- ----------------------------
DROP TABLE IF EXISTS `kv`;
CREATE TABLE `kv` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kv
-- ----------------------------
INSERT INTO `kv` VALUES ('1', 'http://localhost/test/images/huandeng.jpg', 'http://localhost/test/images/huandeng.jpg', '2017-06-10 13:50:05');
INSERT INTO `kv` VALUES ('2', 'http://localhost/test/images/huandeng.jpg', 'http://localhost/test/images/huandeng.jpg', '2017-06-10 14:43:19');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` text,
  `addtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------

-- ----------------------------
-- Table structure for users
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
-- Table structure for user_info
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
