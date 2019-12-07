/*
 Navicat Premium Data Transfer

 Source Server         : sahar-local
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : saharertebat

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 07/12/2019 17:08:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for bnm_host
-- ----------------------------
DROP TABLE IF EXISTS `bnm_host`;
CREATE TABLE `bnm_host`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_service_dahande` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_mojavez` bigint(20) NULL DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_tamas` bigint(20) NULL DEFAULT NULL,
  `shomare_poshtibani` bigint(20) NULL DEFAULT NULL,
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `address_shekayat` varchar(150) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_logo` varchar(150) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_tarefe` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `dsl_license` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `dsl_bitstream` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `wlan_license` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `wlan_bitstream` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `td_lte` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ngn` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `phone_orgination` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `domain` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `host` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `olaviat` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bnm_host
-- ----------------------------
INSERT INTO `bnm_host` VALUES (1, 'fg', 0, 'asdsad', 0, 0, 'asdsad', 'asdsad', '', 'asd', 'on', 'on', 'on', NULL, 'on', 'on', 'on', NULL, 'on', 123);

-- ----------------------------
-- Table structure for bnm_markaz_mokhaberat
-- ----------------------------
DROP TABLE IF EXISTS `bnm_markaz_mokhaberat`;
CREATE TABLE `bnm_markaz_mokhaberat`  (
  `id` int(11) NOT NULL,
  `ostan` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_gharardad` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL COMMENT 'onvan3',
  `mizban` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL COMMENT 'onvan3',
  `pish_shomare_ostan` int(11) NULL DEFAULT NULL,
  `shomare_tamas_markaz` bigint(20) NULL DEFAULT NULL,
  `shomare_tamas_mdf_markaz` bigint(20) NULL DEFAULT NULL,
  `masire_avale_faktor` varchar(150) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `masire_dovome_faktor` varchar(150) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bnm_moshtarakine_haghighi
-- ----------------------------
DROP TABLE IF EXISTS `bnm_moshtarakine_haghighi`;
CREATE TABLE `bnm_moshtarakine_haghighi`  (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `name_khanevadegi` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `name_pedar` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `meliat` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `tabeiat` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `noe_shenase_hoviati` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `code_meli` bigint(30) NOT NULL,
  `passport` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `karte_panahandegi` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `karte_hoviat` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_shenasname` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `tarikh_tavalod` datetime(6) NOT NULL,
  `jensiat` varchar(5) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `mahale_sodore_shenasname` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `ostan` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `telephone_hamrah` bigint(30) NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `fax` bigint(30) NOT NULL,
  `website` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `code_posti` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `shoghl` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `reshte_tahsili` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `madrake_daneshgahi` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `nahve_ashnai_campain` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `moaref` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tozihat` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bnm_moshtarakine_hoghoghi
-- ----------------------------
DROP TABLE IF EXISTS `bnm_moshtarakine_hoghoghi`;
CREATE TABLE `bnm_moshtarakine_hoghoghi`  (
  `id` int(11) NOT NULL,
  `name_englisi` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_sherkat` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_sabt` bigint(30) NULL DEFAULT NULL,
  `telephone` bigint(30) NULL DEFAULT NULL,
  `telephone_hamrah` bigint(30) NULL DEFAULT NULL,
  `shomare_dakheli` int(11) NULL DEFAULT NULL,
  `ostan` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_khanevadegi_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_shenasname_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_pedar_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `jensiat_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_shenase_hoviati_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tarikhe_tavalode_modir_amel` datetime(6) NULL DEFAULT NULL,
  `name_englisi_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tabeiat_modir_amel` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tarikh_sabt` datetime(6) NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `fax` bigint(30) NULL DEFAULT NULL,
  `website` varchar(60) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `code_posti` bigint(30) NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `code_meli` bigint(30) NULL DEFAULT NULL,
  `code_eghtesadi` bigint(30) NULL DEFAULT NULL,
  `reshte_tahsili_modir_amel` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `madreke_daneshgahi_modir_amel` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `reshte_faaliat` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `nahve_moarefi` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `nahve_ashnai_ba_campain` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `gorohe_moshtarak` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `moaref` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tozihat` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bnm_namayandegi
-- ----------------------------
DROP TABLE IF EXISTS `bnm_namayandegi`;
CREATE TABLE `bnm_namayandegi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_sherkat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_sabt` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `code_eghtesadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shenase_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_sherkat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `telephone1` bigint(20) NULL DEFAULT NULL,
  `telephone2` bigint(20) NULL DEFAULT NULL,
  `dornegar` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ostan` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `code_posti` bigint(20) NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_mohiti` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_tablo` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_code_eghtesadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_rozname_tasis` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_shenase_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_akharin_taghirat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bnm_namayandegi
-- ----------------------------
INSERT INTO `bnm_namayandegi` VALUES (2, 'شرکت', '123', '123', '123', 'سهامی خاص', 'www.asdad.com', 'mokhtarpour@gmail.com', 123, 123, '123', 'اصفهان', 'دماوند', 1232313, 'address', '', '', '', '', '', '', '');
INSERT INTO `bnm_namayandegi` VALUES (3, 'sdf', 'sdf', 'sdf', 'sdf', 'sfd', 'fds', '', 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '');

-- ----------------------------
-- Table structure for bnm_operator
-- ----------------------------
DROP TABLE IF EXISTS `bnm_operator`;
CREATE TABLE `bnm_operator`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_namayandegi` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_khanevadegi` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `code_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_shenasname` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_pedar` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tarikhe_tavalod` date NULL DEFAULT NULL,
  `madrake_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `reshteye_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ostan_tavalod` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr_tavalod` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `telephone_hamrah` bigint(20) NULL DEFAULT NULL,
  `telephone_mahale_sokonat` bigint(20) NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `semat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_karbari` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ramze_obor` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_karte_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_shenasname` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_madrake_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `t_chehre` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `namayandegi_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `namayandegi-operator`(`namayandegi_id`) USING BTREE,
  CONSTRAINT `namayandegi-operator` FOREIGN KEY (`namayandegi_id`) REFERENCES `bnm_namayandegi` (`id`) ON DELETE NO ACTION ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bnm_operator
-- ----------------------------
INSERT INTO `bnm_operator` VALUES (2, 'dfg', 'sdf', 'sdf', '123', '345435', 'sdfdsfg', '1390-12-12', 'sdf', 'sdf', 'sdf', 'sdfg', 1232131, 123213, 'asdasd', 'assdf@asd.com', 'dfgfdg', 'sadsada', 'sd', '', '', '', '', NULL);
INSERT INTO `bnm_operator` VALUES (3, 'asdsa', 'sadsa', 'sdsad', '123', '123', 'asd', '0000-00-00', 'sdf', 'sd', 'safd', 'asdf', 123, 345, 'sdf', 'asd', 'sdf', 'asd', 'sdf', '', '', '', '', NULL);

-- ----------------------------
-- Table structure for bnm_ostan
-- ----------------------------
DROP TABLE IF EXISTS `bnm_ostan`;
CREATE TABLE `bnm_ostan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bnm_ostan
-- ----------------------------
INSERT INTO `bnm_ostan` VALUES (8, '');
INSERT INTO `bnm_ostan` VALUES (3, 'اصفهان');
INSERT INTO `bnm_ostan` VALUES (2, 'تهران');
INSERT INTO `bnm_ostan` VALUES (5, 'فارس');

-- ----------------------------
-- Table structure for bnm_popsite
-- ----------------------------
DROP TABLE IF EXISTS `bnm_popsite`;
CREATE TABLE `bnm_popsite`  (
  `id` int(11) NOT NULL,
  `name_dakal` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `ostan` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `post_code` int(10) NULL DEFAULT NULL,
  `noe_dakal` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ertefa_sakhteman` int(11) NULL DEFAULT NULL,
  `ertefa_dakal` int(11) NULL DEFAULT NULL,
  `majmoe_ertefa` int(11) NULL DEFAULT NULL,
  `tol_joghrafiai` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `arz_joghrafiai` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_sabt` varchar(25) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_malekiat_dakal` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL COMMENT 'استیجاری یا مالکیت',
  `malek_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_malek` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_khanevadegi_malek` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `rotbe_dakal` varchar(1) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `mizban_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `postiban_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_postiban_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `name_khanevadegi_poshtiban_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_poshtiban` bigint(20) NULL DEFAULT NULL,
  `ejare_mahiane_nasbe_anten_roye_dakal` bigint(20) NULL DEFAULT NULL,
  `bime_dakal` tinyint(1) NULL DEFAULT NULL,
  `cheragh_dakal` tinyint(1) NULL DEFAULT NULL,
  `bargh_ezterari` tinyint(1) NULL DEFAULT NULL,
  `batri_poshtiban` tinyint(1) NULL DEFAULT NULL,
  `ert` tinyint(1) NULL DEFAULT NULL,
  `emkane_nasbe_anten` tinyint(1) NULL DEFAULT NULL,
  `ejaze_dastresi24_saate_dakal` tinyint(1) NULL DEFAULT NULL,
  `masire_avale_faktore_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `masire_dovome_faktore_dakal` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bnm_pre_number
-- ----------------------------
DROP TABLE IF EXISTS `bnm_pre_number`;
CREATE TABLE `bnm_pre_number`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_markaz` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tedade_pishshomare` int(11) NULL DEFAULT NULL,
  `mantaghe` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ostan` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `mizban` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `sarshomare` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_gharardad` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tozihat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bnm_pre_number
-- ----------------------------
INSERT INTO `bnm_pre_number` VALUES (2, 'aaa', 345, '4', '1', '1', '1', '456', 'fdsf', 'fsdfdf');

-- ----------------------------
-- Table structure for bnm_sabt_pish_shomare
-- ----------------------------
DROP TABLE IF EXISTS `bnm_sabt_pish_shomare`;
CREATE TABLE `bnm_sabt_pish_shomare`  (
  `id` int(11) NOT NULL,
  `ostan` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `markaze_mokhaberati` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `mizban` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `gharardad` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tozihat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tedad_pish_shomare` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bnm_shahr
-- ----------------------------
DROP TABLE IF EXISTS `bnm_shahr`;
CREATE TABLE `bnm_shahr`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `ostan_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shahr_ostan`(`ostan_id`) USING BTREE,
  CONSTRAINT `shahr_ostan` FOREIGN KEY (`ostan_id`) REFERENCES `bnm_ostan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bnm_shahr
-- ----------------------------
INSERT INTO `bnm_shahr` VALUES (21, 'پردیس', 2);
INSERT INTO `bnm_shahr` VALUES (30, 'شهرضا', 3);
INSERT INTO `bnm_shahr` VALUES (32, 'دماوند', 2);
INSERT INTO `bnm_shahr` VALUES (34, 'اسلامشهر', 2);

-- ----------------------------
-- Table structure for bnm_tajhizate_standard
-- ----------------------------
DROP TABLE IF EXISTS `bnm_tajhizate_standard`;
CREATE TABLE `bnm_tajhizate_standard`  (
  `id` int(11) NOT NULL,
  `mark` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `model` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `keshvare_sazande` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tarihke_sodor` datetime(6) NOT NULL,
  `tarikhe_payan` datetime(6) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for bnm_telecommunications_center
-- ----------------------------
DROP TABLE IF EXISTS `bnm_telecommunications_center`;
CREATE TABLE `bnm_telecommunications_center`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ostan` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `pish_shomare` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shomare_tamas_markaz` bigint(20) NULL DEFAULT NULL,
  `shomare_tamas_mdf` bigint(20) NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `masire_avale_faktorha` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `masire_dovome_faktorha` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `mizban` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_gharardad` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `mizban_id` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bnm_telecommunications_center
-- ----------------------------
INSERT INTO `bnm_telecommunications_center` VALUES (7, 'bbb', '2', '21', '123', 123, 123123, 'adsda', 'adsa', 'asd', '1', '1', NULL);

-- ----------------------------
-- Table structure for bnm_terminal
-- ----------------------------
DROP TABLE IF EXISTS `bnm_terminal`;
CREATE TABLE `bnm_terminal`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ostan` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `markaze_mokhaberati` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_terminal` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tighe` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `etesali` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `radif` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `az_port` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ta_port` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `mizban` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `noe_gharardad` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ip_ppoe_server` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `user_ppoe_server` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `snmp_ppoe_server` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `password_ppoe_server` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bnm_terminal
-- ----------------------------
INSERT INTO `bnm_terminal` VALUES (3, '1', 'faghededakal', '1', '1', '123', 'asd', '123', 'asd', 'asd', 'faghededakal', '1', 'asda', 'asd', 'asd', 'asd');

-- ----------------------------
-- Table structure for bnm_users
-- ----------------------------
DROP TABLE IF EXISTS `bnm_users`;
CREATE TABLE `bnm_users`  (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `access_list` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of bnm_users
-- ----------------------------
INSERT INTO `bnm_users` VALUES (1, 'admin', 'admin', '123', '1,2,3');

-- ----------------------------
-- Table structure for bnm_wireless_ap
-- ----------------------------
DROP TABLE IF EXISTS `bnm_wireless_ap`;
CREATE TABLE `bnm_wireless_ap`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarikhe_payan` date NULL DEFAULT NULL,
  `tarikhe_sabt` date NULL DEFAULT NULL,
  `shomare_link_sabt_samane` bigint(20) NULL DEFAULT NULL,
  `popsite` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL COMMENT 'tarif1',
  `shenase_dakal` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ostan` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `shahr` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `tol_joghrafiai` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `arz_joghrafiai` varchar(20) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `ertefae_sakhteman` int(11) NULL DEFAULT NULL,
  `ertefae_dakal` int(11) NULL DEFAULT NULL,
  `bahre_anten` int(11) NULL DEFAULT NULL COMMENT 'dbi',
  `shomare_seriale_dastgah` bigint(20) NULL DEFAULT NULL,
  `teke_bande_ferekansi` bigint(20) NULL DEFAULT NULL COMMENT 'عدد یا حروف بپرس',
  `hadeaxar_tavane_khoroji_ferestande` int(11) NULL DEFAULT NULL COMMENT 'نوع دیتا رو بپرس',
  `marke_dastgah` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL COMMENT 'onvan4',
  `modele_dastgah` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL COMMENT 'onvan4',
  `ip_address` varchar(15) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `port_winbox` int(11) NULL DEFAULT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_persian_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf32 COLLATE utf32_persian_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf32 COLLATE = utf32_persian_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES (1, 'asd');

SET FOREIGN_KEY_CHECKS = 1;
