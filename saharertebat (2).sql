-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 05:17 AM
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
-- Table structure for table `bnm_ap_wireless`
--

CREATE TABLE `bnm_ap_wireless` (
  `id` int(11) NOT NULL,
  `tarikh` datetime(6) DEFAULT NULL,
  `shomare_link_sabt_samane` bigint(20) DEFAULT NULL,
  `popsite` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL COMMENT 'tarif1',
  `shenase_dajak` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
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
  `port` int(11) DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_host`
--

CREATE TABLE `bnm_host` (
  `id` int(11) NOT NULL,
  `name_service_dahande` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `shomare_mojavez` bigint(20) DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_tamas` bigint(20) DEFAULT NULL,
  `shomare_poshtibani` bigint(20) DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `address_shekayat` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL,
  `t_logo` varchar(150) COLLATE utf8_persian_ci DEFAULT NULL,
  `name_tarefe` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `dsl_license` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `dsl_bitstream` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `wlan_license` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `wlan_bitstream` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `td_lte` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `ngn` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `phone_orgination` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `domain` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `host` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `olaviat` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

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
-- Table structure for table `bnm_namayandegi`
--

CREATE TABLE `bnm_namayandegi` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `bnm_namayandegi`
--

INSERT INTO `bnm_namayandegi` (`id`, `name_sherkat`, `shomare_sabt`, `code_eghtesadi`, `shenase_meli`, `noe_sherkat`, `website`, `email`, `telephone1`, `telephone2`, `dornegar`, `ostan`, `shahr`, `code_posti`, `address`, `t_logo`, `t_mohiti`, `t_tablo`, `t_code_eghtesadi`, `t_rozname_tasis`, `t_shenase_meli`, `t_akharin_taghirat`) VALUES
(2, 'شرکت', '123', '123', '123', 'سهامی خاص', 'www.asdad.com', 'mokhtarpour@gmail.com', 123, 123, '123', 'اصفهان', 'دماوند', 1232313, 'address', '', '', '', '', '', '', ''),
(3, 'sdf', 'sdf', 'sdf', 'sdf', 'sfd', 'fds', '', 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_operator`
--

CREATE TABLE `bnm_operator` (
  `id` int(11) NOT NULL,
  `name_namayandegi` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name_khanevadegi` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `code_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shomare_shenasname` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name_pedar` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `tarikhe_tavalod` date DEFAULT NULL,
  `madrake_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `reshteye_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ostan_tavalod` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `shahr_tavalod` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `telephone_hamrah` bigint(20) DEFAULT NULL,
  `telephone_mahale_sokonat` bigint(20) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `semat` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `name_karbari` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `ramze_obor` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_karte_meli` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_shenasname` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_madrake_tahsili` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `t_chehre` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `namayandegi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bnm_ostan`
--

CREATE TABLE `bnm_ostan` (
  `id` int(11) NOT NULL,
  `name` varchar(80) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `bnm_ostan`
--

INSERT INTO `bnm_ostan` (`id`, `name`) VALUES
(6, ''),
(3, 'اصفهان'),
(2, 'تهران'),
(5, 'فارس');

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
  `bime_dakal` tinyint(1) DEFAULT NULL,
  `cheragh_dakal` tinyint(1) DEFAULT NULL,
  `bargh_ezterari` tinyint(1) DEFAULT NULL,
  `batri_poshtiban` tinyint(1) DEFAULT NULL,
  `ert` tinyint(1) DEFAULT NULL,
  `emkane_nasbe_anten` tinyint(1) DEFAULT NULL,
  `ejaze_dastresi24_saate_dakal` tinyint(1) DEFAULT NULL,
  `masire_avale_faktore_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `masire_dovome_faktore_dakal` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `bnm_pre_number`
--

INSERT INTO `bnm_pre_number` (`id`, `name_markaz`, `tedade_pishshomare`, `mantaghe`, `ostan`, `shahr`, `mizban`, `sarshomare`, `noe_gharardad`, `tozihat`) VALUES
(2, 'aaa', 345, '4', '1', '1', '1', '456', 'fdsf', 'fsdfdf');

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
-- Table structure for table `bnm_shahr`
--

CREATE TABLE `bnm_shahr` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `ostan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `bnm_shahr`
--

INSERT INTO `bnm_shahr` (`id`, `name`, `ostan_id`) VALUES
(21, 'پردیس', 2),
(30, 'شهرضا', 3),
(32, 'دماوند', 2),
(34, 'اسلامشهر', 2);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `bnm_telecommunications_center`
--

INSERT INTO `bnm_telecommunications_center` (`id`, `name`, `ostan`, `shahr`, `pish_shomare`, `shomare_tamas_markaz`, `shomare_tamas_mdf`, `address`, `masire_avale_faktorha`, `masire_dovome_faktorha`, `mizban`, `noe_gharardad`, `mizban_id`) VALUES
(7, 'bbb', '2', '21', '123', 123, 123123, 'adsda', 'adsa', 'asd', '1', '1', NULL);

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

--
-- Dumping data for table `bnm_terminal`
--

INSERT INTO `bnm_terminal` (`id`, `ostan`, `shahr`, `markaze_mokhaberati`, `noe_terminal`, `tighe`, `etesali`, `radif`, `az_port`, `ta_port`, `mizban`, `noe_gharardad`, `ip_ppoe_server`, `user_ppoe_server`, `snmp_ppoe_server`, `password_ppoe_server`) VALUES
(3, '1', 'faghededakal', '1', '1', '123', 'asd', '123', 'asd', 'asd', 'faghededakal', '1', 'asda', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `bnm_users`
--

CREATE TABLE `bnm_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `access_list` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `bnm_users`
--

INSERT INTO `bnm_users` (`id`, `name`, `family`, `token`, `access_list`) VALUES
(1, 'admin', 'admin', '123', '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf32_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_persian_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`) VALUES
(1, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bnm_ap_wireless`
--
ALTER TABLE `bnm_ap_wireless`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_host`
--
ALTER TABLE `bnm_host`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `bnm_namayandegi`
--
ALTER TABLE `bnm_namayandegi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_operator`
--
ALTER TABLE `bnm_operator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `namayandegi-operator` (`namayandegi_id`);

--
-- Indexes for table `bnm_ostan`
--
ALTER TABLE `bnm_ostan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `bnm_popsite`
--
ALTER TABLE `bnm_popsite`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_pre_number`
--
ALTER TABLE `bnm_pre_number`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_sabt_pish_shomare`
--
ALTER TABLE `bnm_sabt_pish_shomare`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_shahr`
--
ALTER TABLE `bnm_shahr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shahr_ostan` (`ostan_id`);

--
-- Indexes for table `bnm_tajhizate_standard`
--
ALTER TABLE `bnm_tajhizate_standard`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `bnm_telecommunications_center`
--
ALTER TABLE `bnm_telecommunications_center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_terminal`
--
ALTER TABLE `bnm_terminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bnm_users`
--
ALTER TABLE `bnm_users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bnm_host`
--
ALTER TABLE `bnm_host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bnm_namayandegi`
--
ALTER TABLE `bnm_namayandegi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bnm_operator`
--
ALTER TABLE `bnm_operator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bnm_ostan`
--
ALTER TABLE `bnm_ostan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bnm_pre_number`
--
ALTER TABLE `bnm_pre_number`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bnm_shahr`
--
ALTER TABLE `bnm_shahr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `bnm_telecommunications_center`
--
ALTER TABLE `bnm_telecommunications_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bnm_terminal`
--
ALTER TABLE `bnm_terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bnm_operator`
--
ALTER TABLE `bnm_operator`
  ADD CONSTRAINT `namayandegi-operator` FOREIGN KEY (`namayandegi_id`) REFERENCES `bnm_namayandegi` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `bnm_shahr`
--
ALTER TABLE `bnm_shahr`
  ADD CONSTRAINT `shahr_ostan` FOREIGN KEY (`ostan_id`) REFERENCES `bnm_ostan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
