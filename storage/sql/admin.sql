/*
 Navicat Premium Data Transfer

 Source Server         : aws_tulivery_test
 Source Server Type    : MySQL
 Source Server Version : 50722
 Source Host           : kallpa-desarrollo.cwfe8bk8ds70.us-east-1.rds.amazonaws.com:3306
 Source Schema         : db_tulivery_10

 Target Server Type    : MySQL
 Target Server Version : 50722
 File Encoding         : 65001

 Date: 24/10/2019 12:38:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cia_id` varchar(36) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `password` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `token` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `token_mobile` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `store_id` int(11) NULL DEFAULT NULL,
  `role` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'usr',
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `generals`;
CREATE TABLE `generals`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `key` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sede aplicación` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `sexo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p090` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p091` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p092_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p092_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p092_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p092_4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p093` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p094` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p095` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p096_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p096_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p096_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `demographics`;
CREATE TABLE `demographics`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p001` int(11) DEFAULT 0,
  `p002` int(11) DEFAULT 0,
  `p003` int(11) DEFAULT 0,
  `p003_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p004` int(11) DEFAULT 0,
  `p005` int(11) DEFAULT 0,
  `p006` int(11) DEFAULT 0,
  `p007_1` int(11) DEFAULT 0,
  `p007_1_4_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p007_2` int(11) DEFAULT 0,
  `p007_2_4_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `homes`;
CREATE TABLE `homes`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p008` int(11) DEFAULT 0,
  `p008_9_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p009` int(11) DEFAULT 0,
  `p009_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p010` int(11) DEFAULT 0,
  `p010_4_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p011` int(11) DEFAULT 0,
  `p012` int(11) DEFAULT 0,
  `p012_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p013` int(11) DEFAULT 0,
  `p013_6_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p014_1` int(11) DEFAULT 0,
  `p014_2` int(11) DEFAULT 0,
  `p014_3` int(11) DEFAULT 0,
  `p014_4` int(11) DEFAULT 0,
  `p014_5` int(11) DEFAULT 0,
  `p014_6` int(11) DEFAULT 0,
  `p014_6_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p015_1` int(11) DEFAULT 0,
  `p015_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p015_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------
-- correr query a partir de aquí
DROP TABLE IF EXISTS `certifications`;
CREATE TABLE `certifications`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p016` int(11) DEFAULT 0,
  `p016_1` int(11) DEFAULT 0,
  `p017_1` int(11) DEFAULT 0,
  `p017_2` int(11) DEFAULT 0,
  `p017_3` int(11) DEFAULT 0,
  `p017_4` int(11) DEFAULT 0,
  `p017_5` int(11) DEFAULT 0,
  `p017_6` int(11) DEFAULT 0,
  `p017_7` int(11) DEFAULT 0,
  `p017_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p018` int(11) DEFAULT 0,
  `p019_1` int(11) DEFAULT 0,
  `p019_2` int(11) DEFAULT 0,
  `p019_3` int(11) DEFAULT 0,
  `p019_4` int(11) DEFAULT 0,
  `p019_5` int(11) DEFAULT 0,
  `p019_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p020` int(11) DEFAULT 0,
  `p020_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p021` int(11) DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `certified_activities`;
CREATE TABLE `certified_activities`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p022_1` int(11) DEFAULT 0,
  `p022_2` int(11) DEFAULT 0,
  `p022_3` int(11) DEFAULT 0,
  `p022_4` int(11) DEFAULT 0,
  `p022_5` int(11) DEFAULT 0,
  `p022_6` int(11) DEFAULT 0,
  `p022_7` int(11) DEFAULT 0,
  `p022_8` int(11) DEFAULT 0,
  `p022_9` int(11) DEFAULT 0,
  `p022_10` int(11) DEFAULT 0,
  `p022_10_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p023_1` int(11) DEFAULT 0,
  `p023_2` int(11) DEFAULT 0,
  `p023_3` int(11) DEFAULT 0,
  `p023_4` int(11) DEFAULT 0,
  `p023_5` int(11) DEFAULT 0,
  `p023_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p024_1` int(11) DEFAULT 0,
  `p024_2` int(11) DEFAULT 0,
  `p024_3` int(11) DEFAULT 0,
  `p024_4` int(11) DEFAULT 0,
  `p024_5` int(11) DEFAULT 0,
  `p024_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `economic_activities`;
CREATE TABLE `economic_activities`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p025_1` int(11) DEFAULT 0,
  `p025_2` int(11) DEFAULT 0,
  `p025_3` int(11) DEFAULT 0,
  `p025_4` int(11) DEFAULT 0,
  `p025_5` int(11) DEFAULT 0,
  `p025_6` int(11) DEFAULT 0,
  `p025_7` int(11) DEFAULT 0,
  `p025_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p026` int(11) DEFAULT 0,
  `p026_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p027` int(11) DEFAULT 0,
  `p028` int(11) DEFAULT 0,
  `p029_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p029_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p029_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p029_4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p029_5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `economic_activity_mains`;
CREATE TABLE `economic_activity_mains`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p030` int(11) DEFAULT 0,
  `p030_2_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p031` int(11) DEFAULT 0,
  `p031_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p032` int(11) DEFAULT 0,
  `p032_12_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p033` int(11) DEFAULT 0,
  `p033_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p034` int(11) DEFAULT 0,
  `p034_esp` int(11) DEFAULT 0,
  `p035` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p036_1` int(11) DEFAULT 0,
  `p036_2` int(11) DEFAULT 0,
  `p037` int(11) DEFAULT 0,
  `p037_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p037_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p038` int(11) DEFAULT 0,
  `p039` int(11) DEFAULT 0,
  `p040` int(11) DEFAULT 0,
  `p041_1` int(11) DEFAULT 0,
  `p041_2` int(11) DEFAULT 0,
  `p041_3` int(11) DEFAULT 0,
  `p041_4` int(11) DEFAULT 0,
  `p041_5` int(11) DEFAULT 0,
  `p041_6` int(11) DEFAULT 0,
  `p041_6_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p041_1_1` int(11) DEFAULT 0,
  `p041_2_1` int(11) DEFAULT 0,
  `p041_3_1` int(11) DEFAULT 0,
  `p041_4_1` int(11) DEFAULT 0,
  `p041_5_1` int(11) DEFAULT 0,
  `p041_6_1` int(11) DEFAULT 0,
  `p041_1_2` int(11) DEFAULT 0,
  `p041_2_2` int(11) DEFAULT 0,
  `p041_3_2` int(11) DEFAULT 0,
  `p041_4_2` int(11) DEFAULT 0,
  `p041_5_2` int(11) DEFAULT 0,
  `p041_6_2` int(11) DEFAULT 0,
  `p042_1` int(11) DEFAULT 0,
  `p042_2` int(11) DEFAULT 0,
  `p042_3` int(11) DEFAULT 0,
  `p042_4` int(11) DEFAULT 0,
  `p042_5` int(11) DEFAULT 0,
  `p042_6` int(11) DEFAULT 0,
  `p042_4_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p042_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p043` int(11) DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `economic_activity_secs`;
CREATE TABLE `economic_activity_secs`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p044_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p044_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p044_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p045` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p046` int(11) DEFAULT 0,
  `p046_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p047` int(11) DEFAULT 0,
  `p047_12_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p048` int(11) DEFAULT 0,
  `p048_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p049` int(11) DEFAULT 0,
  `p049_esp` int(11) DEFAULT 0,
  `p050` int(11) DEFAULT 0,
  `p051_1` int(11) DEFAULT 0,
  `p051_2` int(11) DEFAULT 0,
  `p052` int(11) DEFAULT 0,
  `p052_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p052_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p053` int(11) DEFAULT 0,
  `p054` int(11) DEFAULT 0,
  `p055_1` int(11) DEFAULT 0,
  `p055_2` int(11) DEFAULT 0,
  `p055_3` int(11) DEFAULT 0,
  `p055_4` int(11) DEFAULT 0,
  `p055_5` int(11) DEFAULT 0,
  `p055_6` int(11) DEFAULT 0,
  `p055_6_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p055_1_1` int(11) DEFAULT 0,
  `p055_2_1` int(11) DEFAULT 0,
  `p055_3_1` int(11) DEFAULT 0,
  `p055_4_1` int(11) DEFAULT 0,
  `p055_5_1` int(11) DEFAULT 0,
  `p055_6_1` int(11) DEFAULT 0,
  `p055_1_2` int(11) DEFAULT 0,
  `p055_2_2` int(11) DEFAULT 0,
  `p055_3_2` int(11) DEFAULT 0,
  `p055_4_2` int(11) DEFAULT 0,
  `p055_5_2` int(11) DEFAULT 0,
  `p055_6_2` int(11) DEFAULT 0,
  `p056_1` int(11) DEFAULT 0,
  `p056_2` int(11) DEFAULT 0,
  `p056_3` int(11) DEFAULT 0,
  `p056_4` int(11) DEFAULT 0,
  `p056_5` int(11) DEFAULT 0,
  `p056_6` int(11) DEFAULT 0,
  `p056_4_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p056_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `finance_markets`;
CREATE TABLE `finance_markets`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p057_1` int(11) DEFAULT 0,
  `p057_2` int(11) DEFAULT 0,
  `p057_3` int(11) DEFAULT 0,
  `p057_4` int(11) DEFAULT 0,
  `p057_5` int(11) DEFAULT 0,
  `p057_6` int(11) DEFAULT 0,
  `p057_7` int(11) DEFAULT 0,
  `p057_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p058_1` int(11) DEFAULT 0,
  `p058_2` int(11) DEFAULT 0,
  `p058_3` int(11) DEFAULT 0,
  `p058_4` int(11) DEFAULT 0,
  `p058_5` int(11) DEFAULT 0,
  `p058_6` int(11) DEFAULT 0,
  `p058_7` int(11) DEFAULT 0,
  `p058_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p059_1` int(11) DEFAULT 0,
  `p059_2` int(11) DEFAULT 0,
  `p059_3` int(11) DEFAULT 0,
  `p059_4` int(11) DEFAULT 0,
  `p059_5` int(11) DEFAULT 0,
  `p059_6` int(11) DEFAULT 0,
  `p059_6_esp` int(11) DEFAULT 0,
  `p060` int(11) DEFAULT 0,
  `p060_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p060_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p060_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `education`;
CREATE TABLE `education`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p061` int(11) DEFAULT 0,
  `p061_1` int(11) DEFAULT 0,
  `p062` int(11) DEFAULT 0,
  `p062_8_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p063` int(11) DEFAULT 0,
  `p064_1` int(11) DEFAULT 0,
  `p064_2` int(11) DEFAULT 0,
  `p064_3` int(11) DEFAULT 0,
  `p064_4` int(11) DEFAULT 0,
  `p064_5` int(11) DEFAULT 0,
  `p064_6` int(11) DEFAULT 0,
  `p064_7` int(11) DEFAULT 0,
  `p064_8` int(11) DEFAULT 0,
  `p064_9` int(11) DEFAULT 0,
  `p064_10` int(11) DEFAULT 0,
  `p064_11` int(11) DEFAULT 0,
  `p064_11_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p064_12` int(11) DEFAULT 0,
  `p064_12_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p064_13` int(11) DEFAULT 0,
  `p064_13_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p064_a_1` int(11) DEFAULT 0,
  `p064_a_2` int(11) DEFAULT 0,
  `p064_a_3` int(11) DEFAULT 0,
  `p064_a_4` int(11) DEFAULT 0,
  `p064_a_5` int(11) DEFAULT 0,
  `p064_a_6` int(11) DEFAULT 0,
  `p064_a_7` int(11) DEFAULT 0,
  `p064_a_8` int(11) DEFAULT 0,
  `p064_a_9` int(11) DEFAULT 0,
  `p064_a_10` int(11) DEFAULT 0,
  `p064_a_11` int(11) DEFAULT 0,
  `p064_a_12` int(11) DEFAULT 0,
  `p064_a_13` int(11) DEFAULT 0,
  `p064_b_1` int(11) DEFAULT 0,
  `p064_b_2` int(11) DEFAULT 0,
  `p064_b_3` int(11) DEFAULT 0,
  `p064_b_4` int(11) DEFAULT 0,
  `p064_b_5` int(11) DEFAULT 0,
  `p064_b_6` int(11) DEFAULT 0,
  `p064_b_7` int(11) DEFAULT 0,
  `p064_b_8` int(11) DEFAULT 0,
  `p064_b_9` int(11) DEFAULT 0,
  `p064_b_10` int(11) DEFAULT 0,
  `p064_b_11` int(11) DEFAULT 0,
  `p064_b_12` int(11) DEFAULT 0,
  `p064_b_13` int(11) DEFAULT 0,
  `p065` int(11) DEFAULT 0,
  `p066_1` int(11) DEFAULT 0,
  `p066_2` int(11) DEFAULT 0,
  `p066_3` int(11) DEFAULT 0,
  `p066_4` int(11) DEFAULT 0,
  `p066_5` int(11) DEFAULT 0,
  `p066_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p066_6` int(11) DEFAULT 0,
  `p066_6_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p066_7` int(11) DEFAULT 0,
  `p066_7_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p066_a_1` int(11) DEFAULT 0,
  `p066_a_2` int(11) DEFAULT 0,
  `p066_a_3` int(11) DEFAULT 0,
  `p066_a_4` int(11) DEFAULT 0,
  `p066_a_5` int(11) DEFAULT 0,
  `p066_a_6` int(11) DEFAULT 0,
  `p066_a_7` int(11) DEFAULT 0,
  `p066_b_1` int(11) DEFAULT 0,
  `p066_b_2` int(11) DEFAULT 0,
  `p066_b_3` int(11) DEFAULT 0,
  `p066_b_4` int(11) DEFAULT 0,
  `p066_b_5` int(11) DEFAULT 0,
  `p066_b_6` int(11) DEFAULT 0,
  `p066_b_7` int(11) DEFAULT 0,
  `p066_c_1` int(11) DEFAULT 0,
  `p066_c_2` int(11) DEFAULT 0,
  `p066_c_3` int(11) DEFAULT 0,
  `p066_c_4` int(11) DEFAULT 0,
  `p066_c_5` int(11) DEFAULT 0,
  `p066_c_6` int(11) DEFAULT 0,
  `p066_c_7` int(11) DEFAULT 0,
  `p066_d_1` int(11) DEFAULT 0,
  `p066_d_2` int(11) DEFAULT 0,
  `p066_d_3` int(11) DEFAULT 0,
  `p066_d_4` int(11) DEFAULT 0,
  `p066_d_5` int(11) DEFAULT 0,
  `p066_d_6` int(11) DEFAULT 0,
  `p066_d_7` int(11) DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `socials`;
CREATE TABLE `socials`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p067_1` int(11) DEFAULT 0,
  `p067_2` int(11) DEFAULT 0,
  `p068_1` int(11) DEFAULT 0,
  `p068_2` int(11) DEFAULT 0,
  `p069` int(11) DEFAULT 0,
  `p069_1` int(11) DEFAULT 0,
  `p070` int(11) DEFAULT 0,
  `p070_1` int(11) DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `expectatives`;
CREATE TABLE `expectatives`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p071` int(11) DEFAULT 0,
  `p071_3_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p072` int(11) DEFAULT 0,
  `p072_3_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p073` int(11) DEFAULT 0,
  `p073_3_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p074` int(11) DEFAULT 0,
  `p075` int(11) DEFAULT 0,
  `p076_1` int(11) DEFAULT 0,
  `p076_2` int(11) DEFAULT 0,
  `p076_3` int(11) DEFAULT 0,
  `p076_4` int(11) DEFAULT 0,
  `p076_5` int(11) DEFAULT 0,
  `p076_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p077` int(11) DEFAULT 0,
  `p078` int(11) DEFAULT 0,
  `p079` int(11) DEFAULT 0,
  `p079_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `p080` int(11) DEFAULT 0,
  `p081` int(11) DEFAULT 0,
  `p082` int(11) DEFAULT 0,
  `p082_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `externals`;
CREATE TABLE `externals`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p083_1` int(11) DEFAULT 0,
  `p083_2` int(11) DEFAULT 0,
  `p083_3` int(11) DEFAULT 0,
  `p083_4` int(11) DEFAULT 0,
  `p083_5` int(11) DEFAULT 0,
  `p083_6` int(11) DEFAULT 0,
  `p083_7` int(11) DEFAULT 0,
  `p084` int(11) DEFAULT 0,
  `p085` int(11) DEFAULT 0,
  `p085_5_esp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p086_1` int(11) DEFAULT 0,
  `p086_2` int(11) DEFAULT 0,
  `p086_3` int(11) DEFAULT 0,
  `p087` int(11) DEFAULT 0,
  `p088` int(11) DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------

DROP TABLE IF EXISTS `self_esteems`;
CREATE TABLE `self_esteems`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `general_id` int(11) DEFAULT 0,
  `p089_1` int(11) DEFAULT 0,
  `p089_2` int(11) DEFAULT 0,
  `p089_3` int(11) DEFAULT 0,
  `p089_4` int(11) DEFAULT 0,
  `p089_5` int(11) DEFAULT 0,
  `p089_6` int(11) DEFAULT 0,
  `p089_7` int(11) DEFAULT 0,
  `p089_8` int(11) DEFAULT 0,
  `p089_9` int(11) DEFAULT 0,
  `p089_10` int(11) DEFAULT 0,
  `p089_11` int(11) DEFAULT 0,
  `p089_12` int(11) DEFAULT 0,
  `p089_13` int(11) DEFAULT 0,
  `p089_14` int(11) DEFAULT 0,
  `p089_15` int(11) DEFAULT 0,
  `p089_16` int(11) DEFAULT 0,
  `p089_17` int(11) DEFAULT 0,
  `p089_18` int(11) DEFAULT 0,
  `p089_19` int(11) DEFAULT 0,
  `p089_20` int(11) DEFAULT 0,
  `p089_21` int(11) DEFAULT 0,
  `p089_22` int(11) DEFAULT 0,
  `p089_23` int(11) DEFAULT 0,
  `p089_24` int(11) DEFAULT 0,
  `p089_25` int(11) DEFAULT 0,
  `created_at` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- --------------------------- --------------------------- --------------------------- --------------------------- -------------------------