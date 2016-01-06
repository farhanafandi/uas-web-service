/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : uas_webservice

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-01-06 17:41:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for laptops
-- ----------------------------
DROP TABLE IF EXISTS `laptops`;
CREATE TABLE `laptops` (
  `LaptopId` int(11) NOT NULL AUTO_INCREMENT,
  `LaptopBrand` varchar(255) DEFAULT NULL,
  `LaptopModel` varchar(255) DEFAULT NULL,
  `LaptopReleaseYear` year(4) DEFAULT NULL,
  PRIMARY KEY (`LaptopId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of laptops
-- ----------------------------
INSERT INTO `laptops` VALUES ('1', 'Dell', 'Vostro 5460', '2010');
INSERT INTO `laptops` VALUES ('2', 'Dell', 'Alienware', '2015');

-- ----------------------------
-- Table structure for parts
-- ----------------------------
DROP TABLE IF EXISTS `parts`;
CREATE TABLE `parts` (
  `PartId` int(11) NOT NULL AUTO_INCREMENT,
  `PartLaptopId` int(11) DEFAULT NULL,
  `PartCategory` varchar(255) DEFAULT NULL,
  `PartNumber` int(11) DEFAULT NULL,
  `PartDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PartId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of parts
-- ----------------------------
INSERT INTO `parts` VALUES ('1', '1', '1', '100001', 'LED Screen');
INSERT INTO `parts` VALUES ('2', '2', '1', '100021', '3D Screen');

-- ----------------------------
-- Table structure for part_categories
-- ----------------------------
DROP TABLE IF EXISTS `part_categories`;
CREATE TABLE `part_categories` (
  `PartCategoryId` int(11) NOT NULL AUTO_INCREMENT,
  `PartCategoryName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PartCategoryId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of part_categories
-- ----------------------------
INSERT INTO `part_categories` VALUES ('1', 'Screen');
INSERT INTO `part_categories` VALUES ('2', 'Keyboard');
