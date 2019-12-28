-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 02:09 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saharertebat`
--

-- --------------------------------------------------------

--
-- Table structure for table `bnm_access_menu_operator`
--

CREATE TABLE `bnm_access_menu_operator` (
  `menu_id` int(11) NOT NULL,
  `operator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_access_menu_operator`
--

INSERT INTO `bnm_access_menu_operator` (`menu_id`, `operator_id`) VALUES
(2, 2),
(15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_branch`
--

CREATE TABLE `bnm_branch` (
  `id` int(11) NOT NULL,
  `name_sherkat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_sabt` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `code_eghtesadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shenase_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_sherkat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `telephone1` bigint(20) DEFAULT NULL,
  `telephone2` bigint(20) DEFAULT NULL,
  `dornegar` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `code_posti` bigint(20) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_logo` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_mohiti` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_tablo` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_code_eghtesadi` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_rozname_tasis` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_shenase_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_akharin_taghirat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bnm_branch`
--

INSERT INTO `bnm_branch` (`id`, `name_sherkat`, `shomare_sabt`, `code_eghtesadi`, `shenase_meli`, `noe_sherkat`, `website`, `email`, `telephone1`, `telephone2`, `dornegar`, `ostan`, `shahr`, `code_posti`, `address`, `t_logo`, `t_mohiti`, `t_tablo`, `t_code_eghtesadi`, `t_rozname_tasis`, `t_shenase_meli`, `t_akharin_taghirat`) VALUES
(2, 'شرکت', '123', '123', '123', 'سهامی خاص', 'www.asdad.com', 'mokhtarpour@gmail.com', 123, 123, '123', 'اصفهان', 'دماوند', 1232313, 'address', '', '', '', '', '', '', ''),
(3, 'sdf', 'sdf', 'sdf', 'sdf', 'sfd', 'fds', '', 0, 0, '', '', '', 0, '', '', '', '', '', '', '', ''),
(4, 'ad', 'b', 'h', 'h', 'jb', 'b', 'b', 0, 0, 'hb', 'hjb', '', 0, 'bb', 'fighter.jpg', 'fighter.jpg', 'fighter.jpg', 'fighter.jpg', 'fighter.jpg', 'fighter.jpg', 'fighter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_dashboard_menu`
--

CREATE TABLE `bnm_dashboard_menu` (
  `id` int(11) NOT NULL,
  `en_name` varchar(80) COLLATE utf8_persian_ci DEFAULT NULL,
  `fa_name` varchar(80) COLLATE utf8_persian_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_dashboard_menu`
--

INSERT INTO `bnm_dashboard_menu` (`id`, `en_name`, `fa_name`, `category_id`) VALUES
(1, 'province', 'استان', 1),
(2, 'city', 'شهر', 1),
(3, 'organization_level', 'سمت', 1),
(4, 'tax', 'مالیات', 1),
(5, 'type_subscribers', 'نوع مشتری', 1),
(6, 'restrictions', 'محدودیت ها', 1),
(7, 'popsite', 'پاپ سایت', 2),
(8, 'telecommunications_center', 'مرکز مخابراتی', 2),
(9, 'terminal', 'ترمینال', 2),
(10, 'pre_number', 'پیش شماره', 2),
(11, 'host', 'میزبان', 2),
(12, 'wireless_ap', 'Wireless-AP', 2),
(13, 'wireless_station', 'Wireless-Staion', 2),
(14, 'services', 'سرویس ها', 2),
(15, 'branch', 'نمایندگی', 3),
(16, 'operator', 'پرسنل', 3),
(17, 'real_subscribers', 'مشترکین حقیقی', 4),
(18, 'legal_subscribers', 'مشترکین حقوقی', 4),
(19, 'factors', 'فاکتورها', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_dashboard_menu_category`
--

CREATE TABLE `bnm_dashboard_menu_category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_dashboard_menu_category`
--

INSERT INTO `bnm_dashboard_menu_category` (`id`, `name`) VALUES
(1, 'عنوان ها'),
(2, 'تعاریف'),
(3, 'نمایندگی ها'),
(4, 'مشترکین');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_delete_menu_operator`
--

CREATE TABLE `bnm_delete_menu_operator` (
  `menu_id` int(11) NOT NULL,
  `operator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_edit_menu_operator`
--

CREATE TABLE `bnm_edit_menu_operator` (
  `menu_id` int(11) NOT NULL,
  `operator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_host`
--

CREATE TABLE `bnm_host` (
  `id` int(11) NOT NULL,
  `name_service_dahande` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_mojavez` bigint(20) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_tamas` bigint(20) DEFAULT NULL,
  `shomare_poshtibani` bigint(20) DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `address_shekayat` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL,
  `t_logo` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_tarefe` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `dsl_license` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `dsl_bitstream` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `wlan_license` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `wlan_bitstream` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `td_lte` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `ngn` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `phone_orgination` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `domain` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `host` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `olaviat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bnm_host`
--

INSERT INTO `bnm_host` (`id`, `name_service_dahande`, `shomare_mojavez`, `address`, `shomare_tamas`, `shomare_poshtibani`, `website`, `address_shekayat`, `t_logo`, `name_tarefe`, `dsl_license`, `dsl_bitstream`, `wlan_license`, `wlan_bitstream`, `td_lte`, `ngn`, `phone_orgination`, `domain`, `host`, `olaviat`) VALUES
(2, 'test2', 0, 'test2', 0, 0, 'test2', 'test2', '', 'asd', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 12);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_markaz_mokhaberat`
--

CREATE TABLE `bnm_markaz_mokhaberat` (
  `id` int(11) NOT NULL,
  `ostan` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_gharardad` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'onvan3',
  `mizban` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'onvan3',
  `pish_shomare_ostan` int(11) DEFAULT NULL,
  `shomare_tamas_markaz` bigint(20) DEFAULT NULL,
  `shomare_tamas_mdf_markaz` bigint(20) DEFAULT NULL,
  `masire_avale_faktor` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL,
  `masire_dovome_faktor` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_moshtarakine_haghighi`
--

CREATE TABLE `bnm_moshtarakine_haghighi` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `name_khanevadegi` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `name_pedar` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `meliat` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `tabeiat` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `noe_shenase_hoviati` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `code_meli` bigint(30) NOT NULL,
  `passport` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `karte_panahandegi` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `karte_hoviat` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_shenasname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `tarikh_tavalod` datetime(6) NOT NULL,
  `jensiat` varchar(5) COLLATE utf8_persian_ci NOT NULL,
  `mahale_sodore_shenasname` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `ostan` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `telephone_hamrah` bigint(30) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `fax` bigint(30) NOT NULL,
  `website` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `code_posti` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `shoghl` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `reshte_tahsili` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `madrake_daneshgahi` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `nahve_ashnai_campain` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `moaref` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `tozihat` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_moshtarakine_hoghoghi`
--

CREATE TABLE `bnm_moshtarakine_hoghoghi` (
  `id` int(11) NOT NULL,
  `name_englisi` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_sherkat` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_sabt` bigint(30) DEFAULT NULL,
  `telephone` bigint(30) DEFAULT NULL,
  `telephone_hamrah` bigint(30) DEFAULT NULL,
  `shomare_dakheli` int(11) DEFAULT NULL,
  `ostan` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_khanevadegi_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_shenasname_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_pedar_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `jensiat_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_shenase_hoviati_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `tarikhe_tavalode_modir_amel` datetime(6) DEFAULT NULL,
  `name_englisi_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `tabeiat_modir_amel` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `tarikh_sabt` datetime(6) DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `fax` bigint(30) DEFAULT NULL,
  `website` varchar(60) COLLATE utf8_persian_ci DEFAULT NULL,
  `code_posti` bigint(30) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe` varchar(80) COLLATE utf8_persian_ci DEFAULT NULL,
  `code_meli` bigint(30) DEFAULT NULL,
  `code_eghtesadi` bigint(30) DEFAULT NULL,
  `reshte_tahsili_modir_amel` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `madreke_daneshgahi_modir_amel` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `reshte_faaliat` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `nahve_moarefi` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `nahve_ashnai_ba_campain` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `gorohe_moshtarak` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `moaref` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `tozihat` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_operator`
--

CREATE TABLE `bnm_operator` (
  `id` int(11) NOT NULL,
  `name_namayandegi` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name_khanevadegi` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `code_meli` bigint(20) DEFAULT NULL,
  `shomare_shenasname` varchar(30) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name_pedar` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `tarikhe_tavalod` date DEFAULT NULL,
  `madrake_tahsili` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `reshteye_tahsili` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan_tavalod` varchar(70) COLLATE utf32_persian_ci DEFAULT NULL,
  `shahr_tavalod` varchar(70) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `telephone_hamrah` bigint(20) DEFAULT NULL,
  `telephone_mahale_sokonat` bigint(20) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `semat` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name_karbari` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ramze_obor` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_karte_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_shenasname` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_madrake_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_chehre` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `namayandegi_id` int(11) DEFAULT NULL,
  `level_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bnm_operator`
--

INSERT INTO `bnm_operator` (`id`, `name_namayandegi`, `name`, `name_khanevadegi`, `code_meli`, `shomare_shenasname`, `name_pedar`, `tarikhe_tavalod`, `madrake_tahsili`, `reshteye_tahsili`, `ostan_tavalod`, `shahr_tavalod`, `telephone_hamrah`, `telephone_mahale_sokonat`, `address`, `email`, `semat`, `name_karbari`, `ramze_obor`, `t_karte_meli`, `t_shenasname`, `t_madrake_tahsili`, `t_chehre`, `namayandegi_id`, `level_id`) VALUES
(2, 'aaa', 'sdf', 'sdf', 123, '345435', 'sdfdsfg', '0000-00-00', 'sdf', 'sdf', 'sdf', 'sdfg', 1232131, 123213, 'asdasd', 'assdf@asd.com', 'dfgfdg', 'operator1', '1234', '', '', '', '', 2, 5),
(3, 'asdsa', 'sadsa', 'sdsad', 123, '123', 'asd', '0000-00-00', 'sdf', 'sd', 'safd', 'asdf', 123, 345, 'sdf', 'asd', 'sdf', 'operator2', '1234', '', '', '', '', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_organization_level`
--

CREATE TABLE `bnm_organization_level` (
  `id` int(11) NOT NULL,
  `semat` varchar(80) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_organization_level`
--

INSERT INTO `bnm_organization_level` (`id`, `semat`) VALUES
(5, 'مدیر عامل');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_ostan`
--

CREATE TABLE `bnm_ostan` (
  `id` int(11) NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bnm_ostan`
--

INSERT INTO `bnm_ostan` (`id`, `name`) VALUES
(3, 'اصفهان'),
(2, 'تهران'),
(10, 'فارس');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_popsite`
--

CREATE TABLE `bnm_popsite` (
  `id` int(11) NOT NULL,
  `name_dakal` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `ostan` varchar(70) COLLATE utf8_persian_ci NOT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `post_code` int(10) DEFAULT NULL,
  `noe_dakal` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `ertefa_sakhteman` int(11) DEFAULT NULL,
  `ertefa_dakal` int(11) DEFAULT NULL,
  `majmoe_ertefa` int(11) DEFAULT NULL,
  `tol_joghrafiai` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `arz_joghrafiai` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_sabt` varchar(25) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_malekiat_dakal` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'استیجاری یا مالکیت',
  `malek_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_malek` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_khanevadegi_malek` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `rotbe_dakal` varchar(1) COLLATE utf8_persian_ci DEFAULT NULL,
  `mizban_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `postiban_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_postiban_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_khanevadegi_poshtiban_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_poshtiban` bigint(20) DEFAULT NULL,
  `ejare_mahiane_nasbe_anten_roye_dakal` bigint(20) DEFAULT NULL,
  `bime_dakal` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `cheragh_dakal` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `bargh_ezterari` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `batri_poshtiban` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `ert` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `emkane_nasbe_anten` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `ejaze_dastresi24_saate_dakal` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `masire_avale_faktore_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `masire_dovome_faktore_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `maleke_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_tamas_malek` bigint(20) DEFAULT NULL,
  `name_poshtiban` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `code_posti` varchar(25) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_malekiat` varchar(40) COLLATE utf8_persian_ci DEFAULT NULL,
  `mizbane_dakal` int(11) DEFAULT NULL,
  `family_poshtiban` varchar(60) COLLATE utf8_persian_ci DEFAULT NULL,
  `shoamre_tamas_poshtiban` bigint(20) DEFAULT NULL,
  `masire_avale_faktorha` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `barghe_ezterari` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `batrie_poshtiban` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `cheraghe_dakal` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL,
  `ejaze_dastresi_24_saate` varchar(10) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bnm_popsite`
--

INSERT INTO `bnm_popsite` (`id`, `name_dakal`, `ostan`, `shahr`, `address`, `post_code`, `noe_dakal`, `ertefa_sakhteman`, `ertefa_dakal`, `majmoe_ertefa`, `tol_joghrafiai`, `arz_joghrafiai`, `shomare_sabt`, `noe_malekiat_dakal`, `malek_dakal`, `name_malek`, `name_khanevadegi_malek`, `rotbe_dakal`, `mizban_dakal`, `postiban_dakal`, `name_postiban_dakal`, `name_khanevadegi_poshtiban_dakal`, `shomare_poshtiban`, `ejare_mahiane_nasbe_anten_roye_dakal`, `bime_dakal`, `cheragh_dakal`, `bargh_ezterari`, `batri_poshtiban`, `ert`, `emkane_nasbe_anten`, `ejaze_dastresi24_saate_dakal`, `masire_avale_faktore_dakal`, `masire_dovome_faktore_dakal`, `maleke_dakal`, `shomare_tamas_malek`, `name_poshtiban`, `code_posti`, `noe_malekiat`, `mizbane_dakal`, `family_poshtiban`, `shoamre_tamas_poshtiban`, `masire_avale_faktorha`, `barghe_ezterari`, `batrie_poshtiban`, `cheraghe_dakal`, `ejaze_dastresi_24_saate`) VALUES
(0, 'دکل1', 'asd', 'sd', 'sd', NULL, 'faghededakal', 123, 123, 123, 'sd', 'sd', 'sd', NULL, NULL, NULL, NULL, 'A', NULL, NULL, NULL, NULL, NULL, 1231321, 'no', NULL, NULL, NULL, 'no', 'no', NULL, NULL, NULL, 'asd', 123123, 'ad', 'asd', 'estijari', 0, 'asd', 123123, 'asd', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_pre_number`
--

CREATE TABLE `bnm_pre_number` (
  `id` int(11) NOT NULL,
  `name_markaz` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `tedade_pishshomare` int(11) DEFAULT NULL,
  `mantaghe` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `mizban` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `sarshomare` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_gharardad` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `tozihat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_sabt_pish_shomare`
--

CREATE TABLE `bnm_sabt_pish_shomare` (
  `id` int(11) NOT NULL,
  `ostan` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `markaze_mokhaberati` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `mizban` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `gharardad` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `tozihat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tedad_pish_shomare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_services`
--

CREATE TABLE `bnm_services` (
  `id` int(11) NOT NULL,
  `noe_khadamat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `namayeshe_service` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `namayeshe_dar_profile` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `onvane_service` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `zaname_estefade` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `takhfif` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_service_dahande` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `porsant` float DEFAULT NULL,
  `tarikhe_shoroe_namayesh` date DEFAULT NULL,
  `tarikhe_payane_namayesh` date DEFAULT NULL,
  `emtiaze_jayeze` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `hadeaghale_emtiaz` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `hadeaksare_emtiaz` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `mablaghe_har_emtiaz` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_grohe_moshtari` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_groh` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `range_namayeshe_profile` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `range_vizhesazie_profile` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `saat_vasle_movaghat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `roze_vasle_movaghat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `terafike_vasle_movaghat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `dore_be_mah` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `dore_be_saat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `terafik` bigint(20) DEFAULT NULL,
  `hazine_nasb` bigint(20) DEFAULT NULL,
  `hazine_dranzhe` bigint(20) DEFAULT NULL,
  `hazine_kharabi` bigint(20) DEFAULT NULL,
  `hazine_ranzhe` bigint(20) DEFAULT NULL,
  `tozihate_faktor` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tozihate_website` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `sorate_paye_daryaft` int(11) DEFAULT NULL,
  `hadeaxar_sorat_daryaft` int(11) DEFAULT NULL,
  `sorat_paye_ersal` int(11) DEFAULT NULL,
  `port` int(11) DEFAULT NULL,
  `tajhizat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `faza` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_pardakht` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `gheymat` bigint(20) DEFAULT NULL,
  `dore_be_rooz` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_services`
--

INSERT INTO `bnm_services` (`id`, `noe_khadamat`, `namayeshe_service`, `namayeshe_dar_profile`, `onvane_service`, `zaname_estefade`, `takhfif`, `name_service_dahande`, `porsant`, `tarikhe_shoroe_namayesh`, `tarikhe_payane_namayesh`, `emtiaze_jayeze`, `hadeaghale_emtiaz`, `hadeaksare_emtiaz`, `mablaghe_har_emtiaz`, `name_grohe_moshtari`, `name_groh`, `range_namayeshe_profile`, `range_vizhesazie_profile`, `saat_vasle_movaghat`, `roze_vasle_movaghat`, `terafike_vasle_movaghat`, `dore_be_mah`, `dore_be_saat`, `terafik`, `hazine_nasb`, `hazine_dranzhe`, `hazine_kharabi`, `hazine_ranzhe`, `tozihate_faktor`, `tozihate_website`, `sorate_paye_daryaft`, `hadeaxar_sorat_daryaft`, `sorat_paye_ersal`, `port`, `tajhizat`, `faza`, `type`, `noe_pardakht`, `gheymat`, `dore_be_rooz`) VALUES
(1, 'VDSL(Share)', 'yes', 'yes', '', 'sdf', 'sdf', '1', 0, '0000-00-00', '0000-00-00', 'sdf', 'df', '', '', '1', '1', '#27ADCA', '#27ADCA', 'sdf', 'sdf', 'sdf', '13', '123', 13, 123, 123, 123, 123, 'sdf', 'd', 123, 123, 123, 123, '123', '123', 'adsl', NULL, 123, ''),
(2, 'Wireless(Transport)', 'yes', 'yes', 'عنوان1', '4', '4.5', '1', 5, '1398-09-30', '1398-10-30', '2', '3', '', '', '1', '1', 'rgb(0, 0, 0)', 'rgb(246, 13, 13)', '1', '1', '1024', '', '5', 2048, 123123, NULL, 123123, NULL, 'sdfsf', 'sdf', 512, 512, 256, 3000, 'asd', '2000', 'wireless', NULL, 123, '');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_shahr`
--

CREATE TABLE `bnm_shahr` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `ostan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bnm_shahr`
--

INSERT INTO `bnm_shahr` (`id`, `name`, `ostan_id`) VALUES
(30, 'شهرضا', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_subscribers`
--

CREATE TABLE `bnm_subscribers` (
  `id` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `f_name` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_pedar` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `meliat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tabeiat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_shenase_hoviati` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shenase_hoviati` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_shenasname` bigint(20) DEFAULT NULL,
  `tarikhe_tavalod` date DEFAULT NULL,
  `ostane_tavalod` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahre_tavalod` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `telephone` bigint(20) DEFAULT NULL,
  `telephone_hamrah` bigint(20) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `fax` bigint(20) DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `code_posti` bigint(20) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shoghl` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `reshteye_tehsili` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `akharin_madrake_tahsili` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `nahve_ashnai_campain` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `gorohe_moshtarak` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `moaref` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tozihat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `r_t_karte_meli` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `r_t_ghabze_telephone` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `r_t_ejare_malekiat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `r_t_gharardad` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `r_t_sayer` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `jensiat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_sherkat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_sabt` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tarikhe_sabt` date DEFAULT NULL,
  `name_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `fname_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_en_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `meliat_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `tabeiat_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_dakheli` int(11) DEFAULT NULL,
  `code_eghtesadi` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `shenase_meli` bigint(20) DEFAULT NULL,
  `tarikhe_tavalode_modir_amel` date DEFAULT NULL,
  `name_pedare_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `reshte_tahsili_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `madrake_daneshgahi_modir_amel` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `reshteye_faaliat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `nahve_moarefi` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_agahie_tasis` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_akharin_taghirat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_saheb_kartemeli_emzaye_aval` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_saheb_kartemeli_emzaye_dovom` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_kartemeli_namayande` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_moarefiname_namayande` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_ghabze_telephone` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_gharardad` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_ejarename_malekiat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `l_t_sayer` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_subscribers`
--

INSERT INTO `bnm_subscribers` (`id`, `type`, `name`, `f_name`, `name_pedar`, `meliat`, `tabeiat`, `noe_shenase_hoviati`, `shenase_hoviati`, `shomare_shenasname`, `tarikhe_tavalod`, `ostane_tavalod`, `shahre_tavalod`, `telephone`, `telephone_hamrah`, `email`, `fax`, `website`, `code_posti`, `address`, `shoghl`, `reshteye_tehsili`, `akharin_madrake_tahsili`, `nahve_ashnai_campain`, `gorohe_moshtarak`, `moaref`, `tozihat`, `r_t_karte_meli`, `r_t_ghabze_telephone`, `r_t_ejare_malekiat`, `r_t_gharardad`, `r_t_sayer`, `jensiat`, `name_en`, `name_sherkat`, `shomare_sabt`, `tarikhe_sabt`, `name_modir_amel`, `fname_modir_amel`, `name_en_modir_amel`, `meliat_modir_amel`, `tabeiat_modir_amel`, `ostan`, `shahr`, `shomare_dakheli`, `code_eghtesadi`, `shenase_meli`, `tarikhe_tavalode_modir_amel`, `name_pedare_modir_amel`, `reshte_tahsili_modir_amel`, `madrake_daneshgahi_modir_amel`, `reshteye_faaliat`, `nahve_moarefi`, `l_t_agahie_tasis`, `l_t_akharin_taghirat`, `l_t_saheb_kartemeli_emzaye_aval`, `l_t_saheb_kartemeli_emzaye_dovom`, `l_t_kartemeli_namayande`, `l_t_moarefiname_namayande`, `l_t_ghabze_telephone`, `l_t_gharardad`, `l_t_ejarename_malekiat`, `l_t_sayer`) VALUES
(2, 'legal', NULL, NULL, NULL, NULL, NULL, 'code_melo', NULL, 0, NULL, NULL, NULL, 0, 0, 'h', 0, 'h', 0, 'kj', NULL, NULL, NULL, '1', '1', 'hk', 'h', NULL, NULL, NULL, NULL, NULL, 'man', 'aaaaa', 'aaa', 'aaaa', '0000-00-00', 'aaa', 'jkh', 'u', 'gkj', 'h', 'jkh', 'kh', 0, 'hj', 0, '0000-00-00', 'jh', 'kh', 'diplom', '', '1', '', '', '', '', '', '', '', '', '', ''),
(3, 'real', 'ads', 'h', 'h', 'kh', 'kjhk', 'opt1', 'h', 0, '0000-00-00', 'jh', 'jkh', 0, 0, 'jkh', 0, 'jk', 0, 'hjk', 'h', 'kh', 'diplom', '1', '1', '', '', '', '', '', '', '', 'mard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'real', 'ads', 'h', 'h', 'kh', 'kjhk', 'opt1', 'h', 0, '0000-00-00', 'jh', 'jkh', 0, 0, 'jkh', 0, 'jk', 0, 'hjk', 'h', 'kh', 'diplom', '1', '1', '', '', '', '', '', '', '', 'mard', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_tajhizate_standard`
--

CREATE TABLE `bnm_tajhizate_standard` (
  `id` int(11) NOT NULL,
  `mark` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `model` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `keshvare_sazande` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `tarihke_sodor` datetime(6) NOT NULL,
  `tarikhe_payan` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_tax`
--

CREATE TABLE `bnm_tax` (
  `id` int(11) NOT NULL,
  `darsade_arzeshe_afzode` double DEFAULT NULL,
  `darsade_maliate_arzeshe_afzode` double DEFAULT NULL,
  `darsade_avarez_arzeshe_afzode` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_tax`
--

INSERT INTO `bnm_tax` (`id`, `darsade_arzeshe_afzode`, `darsade_maliate_arzeshe_afzode`, `darsade_avarez_arzeshe_afzode`) VALUES
(2, 4.4, 5.5, 7.7);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_telecommunications_center`
--

CREATE TABLE `bnm_telecommunications_center` (
  `id` int(11) NOT NULL,
  `name` varchar(120) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `pish_shomare` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_tamas_markaz` bigint(20) DEFAULT NULL,
  `shomare_tamas_mdf` bigint(20) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `masire_avale_faktorha` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `masire_dovome_faktorha` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `mizban` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_gharardad` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `mizban_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bnm_telecommunications_center`
--

INSERT INTO `bnm_telecommunications_center` (`id`, `name`, `ostan`, `shahr`, `pish_shomare`, `shomare_tamas_markaz`, `shomare_tamas_mdf`, `address`, `masire_avale_faktorha`, `masire_dovome_faktorha`, `mizban`, `noe_gharardad`, `mizban_id`) VALUES
(8, 'testttt', '2', '30', '123', 123, 123, 'fsd', 'sdfsdf', 'sff', '1', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bnm_terminal`
--

CREATE TABLE `bnm_terminal` (
  `id` int(11) NOT NULL,
  `ostan` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `markaze_mokhaberati` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_terminal` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `tighe` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `etesali` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `radif` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `az_port` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `ta_port` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `mizban` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `noe_gharardad` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `ip_ppoe_server` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `user_ppoe_server` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `snmp_ppoe_server` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `password_ppoe_server` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_users`
--

CREATE TABLE `bnm_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `bnm_users`
--

INSERT INTO `bnm_users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_wireless_ap`
--

CREATE TABLE `bnm_wireless_ap` (
  `id` int(11) NOT NULL,
  `tarikhe_payan` date DEFAULT NULL,
  `tarikhe_sabt` date DEFAULT NULL,
  `shomare_link_sabt_samane` bigint(20) DEFAULT NULL,
  `popsite` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'tarif1',
  `shenase_dakal` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan` varchar(70) COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `tol_joghrafiai` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `arz_joghrafiai` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `ertefae_sakhteman` int(11) DEFAULT NULL,
  `ertefae_dakal` int(11) DEFAULT NULL,
  `bahre_anten` int(11) DEFAULT NULL COMMENT 'dbi',
  `shomare_seriale_dastgah` bigint(20) DEFAULT NULL,
  `teke_bande_ferekansi` bigint(20) DEFAULT NULL COMMENT 'عدد یا حروف بپرس',
  `hadeaxar_tavane_khoroji_ferestande` int(11) DEFAULT NULL COMMENT 'نوع دیتا رو بپرس',
  `marke_dastgah` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'onvan4',
  `modele_dastgah` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'onvan4',
  `ip_address` varchar(15) COLLATE utf8_persian_ci DEFAULT NULL,
  `port_winbox` int(11) DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf32_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bnm_access_menu_operator`
--
ALTER TABLE `bnm_access_menu_operator`
  ADD PRIMARY KEY (`menu_id`,`operator_id`),
  ADD KEY `operator_id` (`operator_id`);

--
-- Indexes for table `bnm_branch`
--
ALTER TABLE `bnm_branch`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_dashboard_menu`
--
ALTER TABLE `bnm_dashboard_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`category_id`) USING BTREE;

--
-- Indexes for table `bnm_dashboard_menu_category`
--
ALTER TABLE `bnm_dashboard_menu_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_delete_menu_operator`
--
ALTER TABLE `bnm_delete_menu_operator`
  ADD PRIMARY KEY (`menu_id`,`operator_id`),
  ADD KEY `operator_id` (`operator_id`);

--
-- Indexes for table `bnm_edit_menu_operator`
--
ALTER TABLE `bnm_edit_menu_operator`
  ADD PRIMARY KEY (`menu_id`,`operator_id`);

--
-- Indexes for table `bnm_host`
--
ALTER TABLE `bnm_host`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_markaz_mokhaberat`
--
ALTER TABLE `bnm_markaz_mokhaberat`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_moshtarakine_haghighi`
--
ALTER TABLE `bnm_moshtarakine_haghighi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_moshtarakine_hoghoghi`
--
ALTER TABLE `bnm_moshtarakine_hoghoghi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_operator`
--
ALTER TABLE `bnm_operator`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `name_karbari` (`name_karbari`),
  ADD UNIQUE KEY `name_karbari_2` (`name_karbari`),
  ADD UNIQUE KEY `name_karbari_3` (`name_karbari`),
  ADD KEY `namayandegi-operator` (`namayandegi_id`) USING BTREE;

--
-- Indexes for table `bnm_organization_level`
--
ALTER TABLE `bnm_organization_level`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `semat` (`semat`);

--
-- Indexes for table `bnm_ostan`
--
ALTER TABLE `bnm_ostan`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `bnm_popsite`
--
ALTER TABLE `bnm_popsite`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_pre_number`
--
ALTER TABLE `bnm_pre_number`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_sabt_pish_shomare`
--
ALTER TABLE `bnm_sabt_pish_shomare`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_services`
--
ALTER TABLE `bnm_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_shahr`
--
ALTER TABLE `bnm_shahr`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `shahr_ostan` (`ostan_id`) USING BTREE;

--
-- Indexes for table `bnm_subscribers`
--
ALTER TABLE `bnm_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_tajhizate_standard`
--
ALTER TABLE `bnm_tajhizate_standard`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_tax`
--
ALTER TABLE `bnm_tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_telecommunications_center`
--
ALTER TABLE `bnm_telecommunications_center`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_terminal`
--
ALTER TABLE `bnm_terminal`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_users`
--
ALTER TABLE `bnm_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bnm_wireless_ap`
--
ALTER TABLE `bnm_wireless_ap`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bnm_branch`
--
ALTER TABLE `bnm_branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bnm_dashboard_menu`
--
ALTER TABLE `bnm_dashboard_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bnm_dashboard_menu_category`
--
ALTER TABLE `bnm_dashboard_menu_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bnm_host`
--
ALTER TABLE `bnm_host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bnm_operator`
--
ALTER TABLE `bnm_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bnm_organization_level`
--
ALTER TABLE `bnm_organization_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bnm_ostan`
--
ALTER TABLE `bnm_ostan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bnm_pre_number`
--
ALTER TABLE `bnm_pre_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bnm_services`
--
ALTER TABLE `bnm_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bnm_shahr`
--
ALTER TABLE `bnm_shahr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `bnm_subscribers`
--
ALTER TABLE `bnm_subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bnm_tax`
--
ALTER TABLE `bnm_tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bnm_telecommunications_center`
--
ALTER TABLE `bnm_telecommunications_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bnm_terminal`
--
ALTER TABLE `bnm_terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bnm_users`
--
ALTER TABLE `bnm_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bnm_wireless_ap`
--
ALTER TABLE `bnm_wireless_ap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bnm_access_menu_operator`
--
ALTER TABLE `bnm_access_menu_operator`
  ADD CONSTRAINT `bnm_access_menu_operator_ibfk_1` FOREIGN KEY (`operator_id`) REFERENCES `bnm_operator` (`id`),
  ADD CONSTRAINT `bnm_access_menu_operator_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `bnm_dashboard_menu` (`id`);

--
-- Constraints for table `bnm_dashboard_menu`
--
ALTER TABLE `bnm_dashboard_menu`
  ADD CONSTRAINT `bnm_dashboard_menu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `bnm_dashboard_menu_category` (`id`);

--
-- Constraints for table `bnm_delete_menu_operator`
--
ALTER TABLE `bnm_delete_menu_operator`
  ADD CONSTRAINT `bnm_delete_menu_operator_ibfk_1` FOREIGN KEY (`operator_id`) REFERENCES `bnm_operator` (`id`);

--
-- Constraints for table `bnm_operator`
--
ALTER TABLE `bnm_operator`
  ADD CONSTRAINT `namayandegi-operator` FOREIGN KEY (`namayandegi_id`) REFERENCES `bnm_branch` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `bnm_shahr`
--
ALTER TABLE `bnm_shahr`
  ADD CONSTRAINT `shahr_ostan` FOREIGN KEY (`ostan_id`) REFERENCES `bnm_ostan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
