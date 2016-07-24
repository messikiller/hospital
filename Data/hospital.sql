/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : hospital

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-07-24 21:49:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `hos_auth`
-- ----------------------------
DROP TABLE IF EXISTS `hos_auth`;
CREATE TABLE `hos_auth` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hos_auth
-- ----------------------------
INSERT INTO `hos_auth` VALUES ('1', '1', '15a9cd4c8a14d0699f39992d212dab91');
INSERT INTO `hos_auth` VALUES ('2', '4', '15a9cd4c8a14d0699f39992d212dab91');

-- ----------------------------
-- Table structure for `hos_comment`
-- ----------------------------
DROP TABLE IF EXISTS `hos_comment`;
CREATE TABLE `hos_comment` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_content` text NOT NULL,
  `o_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hos_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `hos_course`
-- ----------------------------
DROP TABLE IF EXISTS `hos_course`;
CREATE TABLE `hos_course` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hos_course
-- ----------------------------

-- ----------------------------
-- Table structure for `hos_user`
-- ----------------------------
DROP TABLE IF EXISTS `hos_user`;
CREATE TABLE `hos_user` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `level` tinyint(5) unsigned NOT NULL DEFAULT '0',
  `o_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hos_user
-- ----------------------------
INSERT INTO `hos_user` VALUES ('1', 'admin', '1', '1469284528');
INSERT INTO `hos_user` VALUES ('4', 'messikiller', '0', '1469284528');

-- ----------------------------
-- Table structure for `hos_user_course`
-- ----------------------------
DROP TABLE IF EXISTS `hos_user_course`;
CREATE TABLE `hos_user_course` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `course_id` int(11) unsigned NOT NULL,
  `o_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hos_user_course
-- ----------------------------
