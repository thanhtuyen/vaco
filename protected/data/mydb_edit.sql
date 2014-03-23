-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2014 at 09:15 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailmenu`
--

CREATE TABLE IF NOT EXISTS `detailmenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `title_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_eng` text COLLATE utf8_unicode_ci,
  `detail_eng` text COLLATE utf8_unicode_ci,
  `image_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_file_attach` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  `feature_flg` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `detailmenuimage`
--

CREATE TABLE IF NOT EXISTS `detailmenuimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `caption` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  `public_flg` tinyint(4) DEFAULT NULL,
  `feature_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `imageslide`
--

CREATE TABLE IF NOT EXISTS `imageslide` (
  `id` int(11) NOT NULL,
  `image_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keyword`
--

CREATE TABLE IF NOT EXISTS `keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_menu_id` int(11) DEFAULT NULL,
  `menu_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_name_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menu_type` tinyint(4) NOT NULL,
  `priority` tinyint(1) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Menu_Menu_idx` (`id`,`parent_menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `parent_menu_id`, `menu_name`, `menu_name_eng`, `menu_type`, `priority`, `create_date`, `create_user_id`, `update_date`, `del_flg`) VALUES
(1, 0, 'Giới thiệu', 'Introduce', 1, 2, '2014-03-03 15:01:02', 1, NULL, 0),
(2, 0, 'Trang chủ', 'Home', 2, 1, '2014-03-03 15:01:32', 1, NULL, 0),
(3, 0, 'Tin tức', 'News', 1, 2, '2014-03-03 15:19:54', 1, NULL, 0),
(4, 3, 'Tin VACO', 'VACO news', 2, 2, '2014-03-03 15:21:25', 1, NULL, 0),
(5, 3, 'Tin thời sự', 'Lastest news', 2, 2, '2014-03-03 15:22:44', 1, NULL, 0),
(6, 3, 'Thông cáo báo chí', 'Published Statements', 2, 1, '2014-03-03 15:23:46', 1, NULL, 0),
(7, 3, 'Quy định mới', 'News Regulations', 2, 2, '2014-03-03 15:24:12', 1, NULL, 0),
(8, 3, 'Tóm tắt VBPL', 'Legal newsletters', 2, 1, '2014-03-03 15:25:21', 1, NULL, 0),
(9, 0, 'Dịch vụ', 'Services', 2, 3, '2014-03-03 15:25:42', 1, NULL, 0),
(10, 0, 'Thông tin ngành', 'Industries Infomation', 2, 2, '2014-03-03 15:26:38', 1, NULL, 0),
(11, 0, 'Mạng lưới', 'Network', 2, 3, '2014-03-03 15:26:57', 1, NULL, 0),
(12, 0, 'Tuyển dụng', 'Carrers', 2, 3, '2014-03-03 15:27:15', 1, NULL, 0),
(13, 0, 'Liên hệ', 'Contact us', 2, 4, '2014-03-03 15:28:04', 1, NULL, 0),
(14, 0, '55', '55', 3, 0, NULL, NULL, NULL, 0),
(15, 0, 'type3', 'ww', 3, 1, '2014-03-18 16:04:09', 1, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `title` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `title_eng` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `caption_eng` text COLLATE utf8_unicode_ci,
  `detail_eng` text COLLATE utf8_unicode_ci,
  `thumb_image_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `list_file_attach` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `feature_flag` tinyint(4) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `is_public` tinyint(4) DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_news_Menu1_idx` (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `userpass` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `user_mobile` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `userpass`, `user_fullname`, `user_mobile`, `user_address`, `user_role`, `create_date`, `create_user`, `update_date`, `del_flg`) VALUES
(1, 'admin', '61bd60c60d9fb60cc8fc7767669d40a1', 'admin', '', '', 1, NULL, NULL, '2014-03-09 15:47:47', 0),
(2, 'thanhtuyen', 'fcea920f7412b5da7be0cf42b8c93759', 'nguyen thanh tuyen', '0989280619', 'quang ngai 4545', 0, '2014-03-18 00:31:33', 1, '2014-03-18 00:32:40', 0),
(3, 't', '224cf2b695a5e8ecaecfb9015161fa4b', '1234567', '', '', 0, '2014-03-18 00:39:50', 1, '2014-03-18 00:43:42', 0),
(4, 'tamem', '14e1b600b1fd579f47433b88e8d85291', 'NguyenThiNgocTamEm', '0984028003', 'Tiền Giang', 0, '2014-03-18 15:34:43', 1, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;