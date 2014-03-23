-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 23, 2014 at 11:11 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


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
  `title` text COLLATE utf8_unicode_ci,
  `caption` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `title_eng` text COLLATE utf8_unicode_ci,
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

--
-- Dumping data for table `detailmenu`
--


-- --------------------------------------------------------

--
-- Table structure for table `detailmenuimage`
--

CREATE TABLE IF NOT EXISTS `detailmenuimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) DEFAULT NULL,
  `caption` text COLLATE utf8_unicode_ci,
  `caption_eng` text COLLATE utf8_unicode_ci,
  `image_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  `public_flg` tinyint(4) DEFAULT NULL,
  `feature_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `detailmenuimage`
--

INSERT INTO `detailmenuimage` (`id`, `menu_id`, `caption`, `caption_eng`, `image_path`, `create_date`, `create_user`, `update_date`, `del_flg`, `public_flg`, `feature_flg`) VALUES
(1, 14, '', '', 'Hydrangeas.jpg', '2014-03-22 07:25:53', 1, NULL, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `imageslide`
--

CREATE TABLE IF NOT EXISTS `imageslide` (
  `id` int(11) NOT NULL,
  `image_path` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `caption` text COLLATE utf8_unicode_ci,
  `title_eng` text COLLATE utf8_unicode_ci,
  `caption_eng` text COLLATE utf8_unicode_ci,
  `create_date` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `del_flg` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `imageslide`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `keyword`
--

INSERT INTO `keyword` (`id`, `keyword`, `keyword_eng`, `create_date`) VALUES
(1, '', '', '2014-03-22 07:24:05'),
(2, '', '', '2014-03-23 13:59:46'),
(3, '', '', '2014-03-23 17:00:10'),
(4, '', '', '2014-03-23 17:06:13');

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
  `priority` tinyint(4) NOT NULL DEFAULT '2',
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
  `title` text COLLATE utf8_unicode_ci,
  `caption` text COLLATE utf8_unicode_ci,
  `detail` text COLLATE utf8_unicode_ci,
  `title_eng` text COLLATE utf8_unicode_ci,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `menu_id`, `title`, `caption`, `detail`, `title_eng`, `caption_eng`, `detail_eng`, `thumb_image_path`, `list_file_attach`, `create_user_id`, `create_date`, `feature_flag`, `update_date`, `is_public`, `del_flg`) VALUES
(1, 1, 'GIỚI THIỆU CÔNG TY KIỂM TOÁN VACO', '', '&lt;p&gt;\r\n	&lt;img src=&quot;file:///C:/xampp/htdocs/vaco/protected/data/template/images/img_gioithieu.png&quot; /&gt;&lt;img src=&quot;file:///C:/xampp/htdocs/vaco/protected/data/template/images/img_gioithieu.png&quot; /&gt;&lt;img src=&quot;file:///C:/xampp/htdocs/vaco/protected/data/template/images/img_gioithieu.png&quot; /&gt;&lt;img src=&quot;file:///C:/xampp/htdocs/vaco/protected/data/template/images/img_gioithieu.png&quot; /&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; line-height: 18.479999542236328px; text-align: justify;&quot;&gt;C&amp;ocirc;ng ty TNHH H&amp;atilde;ng Kiểm to&amp;aacute;n AASC (gọi tắt l&amp;agrave; AASC), đổi t&amp;ecirc;n từ C&amp;ocirc;ng ty TNHH Dịch vụ Tư vấn T&amp;agrave;i ch&amp;iacute;nh Kế to&amp;aacute;n v&amp;agrave; Kiểm to&amp;aacute;n (AASC) - Th&amp;agrave;nh vi&amp;ecirc;n HLB Quốc tế tại Việt Nam &amp;ndash; Mạng lưới Quốc tế c&amp;aacute;c H&amp;atilde;ng Kiểm to&amp;aacute;n v&amp;agrave; Tư vấn Quản trị chuy&amp;ecirc;n nghiệp. H&amp;atilde;ng Kiểm to&amp;aacute;n AASC l&amp;agrave; một trong hai tổ chức hợp ph&amp;aacute;p đầu ti&amp;ecirc;n v&amp;agrave; lớn nhất của Việt Nam hoạt động trong lĩnh vực Kiểm to&amp;aacute;n, Kế to&amp;aacute;n, Tư vấn T&amp;agrave;i ch&amp;iacute;nh, Tư vấn thuế v&amp;agrave; x&amp;aacute;c định gi&amp;aacute; trị doanh nghiệp. Hiện nay, AASC c&amp;oacute; trụ sở ch&amp;iacute;nh đặt tại H&amp;agrave; Nội, chi nh&amp;aacute;nh tại TP Hồ Ch&amp;iacute; Minh v&amp;agrave; chi nh&amp;aacute;nh tại Quảng Ninh.&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br style=&quot;color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; line-height: 18.479999542236328px; text-align: justify;&quot; /&gt;\r\n	&lt;span style=&quot;color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; line-height: 18.479999542236328px; text-align: justify;&quot;&gt;Theo nhận x&amp;eacute;t của Trưởng ban Kinh tế T.Ư, Nguy&amp;ecirc;n Tổng Kiểm to&amp;aacute;n Nh&amp;agrave; nước, nguy&amp;ecirc;n Bộ trưởng Bộ T&amp;agrave;i ch&amp;iacute;nh Gi&amp;aacute;o sư - Tiến sỹ Vương Đ&amp;igrave;nh Huệ v&amp;agrave; xếp hạng của Bộ T&amp;agrave;i ch&amp;iacute;nh v&amp;agrave; Hội VACPA, AASC hiện nay được xếp hạng Nhất v&amp;agrave; l&amp;agrave; Nh&amp;agrave; cung cấp dịch vụ lớn Đầu đ&amp;agrave;n của Hệ thống c&amp;aacute;c C&amp;ocirc;ng ty Kiểm to&amp;aacute;n Việt Nam, với lượng kh&amp;aacute;ch h&amp;agrave;ng đa dạng v&amp;agrave; c&amp;oacute; dịch vụ kiểm to&amp;aacute;n B&amp;aacute;o c&amp;aacute;o quyết to&amp;aacute;n vốn đầu tư chất lượng nhất.&lt;/span&gt;&lt;br style=&quot;color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; line-height: 18.479999542236328px; text-align: justify;&quot; /&gt;\r\n	&lt;br style=&quot;color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; line-height: 18.479999542236328px; text-align: justify;&quot; /&gt;\r\n	&lt;span style=&quot;color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; line-height: 18.479999542236328px; text-align: justify;&quot;&gt;Thực hiện c&amp;aacute;c cam kết với Tổ chức thương mại thế giới (WTO), năm 2007, AASC đ&amp;atilde; chuyển đổi th&amp;agrave;nh c&amp;ocirc;ng từ Doanh nghiệp nh&amp;agrave; nước thuộc Bộ T&amp;agrave;i ch&amp;iacute;nh th&amp;agrave;nh C&amp;ocirc;ng ty TNHH c&amp;oacute; 2 th&amp;agrave;nh vi&amp;ecirc;n trở l&amp;ecirc;n v&amp;agrave; l&amp;agrave; một trong 5 Đơn vị kiểm to&amp;aacute;n hoạt động tại Việt Nam c&amp;oacute; doanh thu h&amp;agrave;ng năm, c&amp;oacute; hệ thống kh&amp;aacute;ch h&amp;agrave;ng v&amp;agrave; c&amp;oacute; số lượng Kiểm to&amp;aacute;n vi&amp;ecirc;n v&amp;agrave; nh&amp;acirc;n vi&amp;ecirc;n lớn nhất hiện nay (Gần 80 Kiểm to&amp;aacute;n vi&amp;ecirc;n Nh&amp;agrave; nước, 03 Kiểm to&amp;aacute;n vi&amp;ecirc;n c&amp;oacute; chứng chỉ ACCA của Vương quốc Anh, 01 Kiểm to&amp;aacute;n vi&amp;ecirc;n c&amp;oacute; Chứng chỉ CPA Mỹ, 01 chuy&amp;ecirc;n gia người Nhật Bản, 19 Thẩm định vi&amp;ecirc;n về gi&amp;aacute;, 54 Chứng chỉ Tư vấn Thủ tục về Thuế v&amp;agrave; gần 400 nh&amp;acirc;n vi&amp;ecirc;n). Trong suốt 23 năm hoạt động, d&amp;ugrave; dưới h&amp;igrave;nh thức DNNN hay c&amp;ocirc;ng ty TNHH, t&amp;ocirc;n chỉ hoạt động của AASC vẫn lu&amp;ocirc;n l&amp;agrave; cung cấp những dịch vụ c&amp;oacute; chất lượng cao nhất v&amp;igrave; lợi &amp;iacute;ch hợp ph&amp;aacute;p của kh&amp;aacute;ch h&amp;agrave;ng. Kh&amp;aacute;ch h&amp;agrave;ng của ch&amp;uacute;ng t&amp;ocirc;i rất đa dạng, bao gồm tất cả c&amp;aacute;c lĩnh vực kinh tế, th&amp;agrave;nh phần kinh tế: Tập đo&amp;agrave;n kinh tế, Tổng c&amp;ocirc;ng ty nh&amp;agrave; nước, C&amp;ocirc;ng ty c&amp;oacute; vốn đầu tư nước ngo&amp;agrave;i, C&amp;ocirc;ng ty ni&amp;ecirc;m yết, C&amp;ocirc;ng ty cổ phần, Ng&amp;acirc;n h&amp;agrave;ng thương mại, c&amp;aacute;c Dự &amp;aacute;n c&amp;oacute; sử dụng vốn vay, vốn viện trợ của Ng&amp;acirc;n h&amp;agrave;ng Thế giới (WB), Ng&amp;acirc;n h&amp;agrave;ng Ph&amp;aacute;t triển Ch&amp;acirc;u &amp;aacute; (ADB) cũng như c&amp;aacute;c tổ chức t&amp;iacute;n dụng quốc tế kh&amp;aacute;c v&amp;agrave; c&amp;aacute;c c&amp;ocirc;ng tr&amp;igrave;nh đầu tư x&amp;acirc;y dựng cơ bản.&lt;/span&gt;&lt;/p&gt;\r\n', 'adassdasd', '', '', 'img_gioithieu.png', NULL, 1, '2014-03-22 07:24:05', 1, '2014-03-23 16:56:25', 0, 0),
(2, 5, 'aaaaaaaaaaa', '', '&lt;p&gt;\r\n	Mặc cho t&amp;igrave;nh h&amp;igrave;nh kinh tế ảm đạm đến mức n&amp;agrave;o, gi&amp;aacute; trị thương hiệu của c&amp;aacute;c nh&amp;agrave; b&amp;aacute;n lẻ h&amp;agrave;ng đầu thế giới vẫn kh&amp;ocirc;ng ngừng gia tăng. Điều n&amp;agrave;y cho thấy khả năng chống đỡ của họ trước khủng hoảng l&amp;agrave; kh&amp;ocirc;ng hề nhỏ. Đ&amp;oacute; l&amp;agrave; th&amp;agrave;nh quả của những chiến lược th&amp;ocirc;ng minh v&amp;agrave; đặc biệt l&amp;agrave; những nỗ lực kh&amp;ocirc;ng mệt mỏi.&lt;/p&gt;\r\n', 'aaaaaaaaa', '', '', NULL, NULL, 1, '2014-03-23 13:59:46', 1, NULL, 0, 0),
(3, 4, 'CHÚC MỪNG NGÀY QUỐC TẾ PHỤ NỮ 8-3', '', '', '8-3', '', '', 'Thiep 8-3 gui CBNV.jpg', NULL, 1, '2014-03-23 17:00:09', 1, '2014-03-23 17:01:49', 0, 0),
(4, 4, 'AASC MỞ RỘNG THỊ TRƯỜNG, KHÔNG NGỪNG TĂNG TRƯỞNG THỊ PHẦN TẠI CỘNG HÒA DÂN CHỦ NHÂN DÂN LÀO', '', '&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	Thực hiện Chiến lược ph&amp;aacute;t triển H&amp;atilde;ng Kiểm to&amp;aacute;n AASC đến năm 2020, tầm nh&amp;igrave;n 2030, từ ng&amp;agrave;y 21/02/2014 đến ng&amp;agrave;y 25/02/2014, đo&amp;agrave;n c&amp;ocirc;ng t&amp;aacute;c H&amp;atilde;ng Kiểm to&amp;aacute;n AASC do: &amp;Ocirc;ng Ng&amp;ocirc; Đức Đo&amp;agrave;n - Tổng Gi&amp;aacute;m đốc AASC l&amp;atilde;nh đạo, chỉ đạo đ&amp;atilde; khảo s&amp;aacute;t v&amp;agrave; thực hiện kiểm to&amp;aacute;n c&amp;ocirc;ng tr&amp;igrave;nh: Nh&amp;agrave; văn h&amp;oacute;a Cayson Phomvihan do Đảng, Nh&amp;agrave; nước nh&amp;acirc;n d&amp;acirc;n Việt Nam tặng Đảng, Nh&amp;agrave; nước nh&amp;acirc;n d&amp;acirc;n L&amp;agrave;o.&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	Trong chuyến c&amp;ocirc;ng t&amp;aacute;c, đo&amp;agrave;n kiểm to&amp;aacute;n AASC đ&amp;atilde; gặp gỡ v&amp;agrave; trao đổi với Ban Quản l&amp;yacute; dự &amp;aacute;n (BQLDA) Nh&amp;agrave; văn h&amp;oacute;a Cayson Phomvihan về kế hoạch kiểm to&amp;aacute;n v&amp;agrave; khảo s&amp;aacute;t hiện trường c&amp;ocirc;ng tr&amp;igrave;nh. Đồng thời, đo&amp;agrave;n cũng chia sẻ, tư vấn BQLDA về c&amp;ocirc;ng t&amp;aacute;c quản l&amp;yacute; T&amp;agrave;i ch&amp;iacute;nh, quản l&amp;yacute; nguồn vốn đầu tư x&amp;acirc;y dựng theo c&amp;aacute;c quy định của ph&amp;aacute;p luật trong qu&amp;aacute; tr&amp;igrave;nh thực hiện dự &amp;aacute;n. Ph&amp;aacute;t biểu trong c&amp;aacute;c buổi l&amp;agrave;m việc, Tổng Gi&amp;aacute;m đốc Ng&amp;ocirc; Đức Đo&amp;agrave;n đ&amp;atilde; b&amp;agrave;y tỏ sự tin tưởng rằng, AASC sẽ thực hiện v&amp;agrave; ho&amp;agrave;n th&amp;agrave;nh xuất sắc hợp đồng kiểm to&amp;aacute;n với chất lượng cao nhất đ&amp;aacute;p ứng c&amp;aacute;c y&amp;ecirc;u cầu khắt khe v&amp;agrave; sự tin tưởng của Trung ương Đảng hai nước v&amp;agrave; BQLDA. Chuyến c&amp;ocirc;ng t&amp;aacute;c n&amp;agrave;y sẽ l&amp;agrave; tiền đề tốt ph&amp;aacute;t triển mối quan hệ hợp t&amp;aacute;c chặt chẽ, l&amp;acirc;u d&amp;agrave;i giữa H&amp;atilde;ng Kiểm to&amp;aacute;n AASC v&amp;agrave; Văn ph&amp;ograve;ng Trung ương Đảng.&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;Một số h&amp;igrave;nh ảnh của chuyến c&amp;ocirc;ng t&amp;aacute;c&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;&lt;img alt=&quot;Anh khao sat 1&quot; height=&quot;480&quot; src=&quot;http://aasc.com.vn/web/images/tinnoibo/Thang_02.2014/Anh_khao_sat_1.png&quot; style=&quot;max-width: 100%; height: auto; vertical-align: middle; border: 0px;&quot; width=&quot;640&quot; /&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em style=&quot;line-height: 1.3em;&quot;&gt;C&amp;ocirc;ng tr&amp;igrave;nh Nh&amp;agrave; văn h&amp;oacute;a Cayson Phomvihan&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;&lt;img alt=&quot;Anh khao sat 2&quot; height=&quot;415&quot; src=&quot;http://aasc.com.vn/web/images/tinnoibo/Thang_02.2014/Anh_khao_sat_2.png&quot; style=&quot;max-width: 100%; height: auto; vertical-align: middle; border: 0px;&quot; width=&quot;640&quot; /&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em style=&quot;line-height: 1.3em;&quot;&gt;Tổng Gi&amp;aacute;m đốc Ng&amp;ocirc; Đức Đo&amp;agrave;n gặp gỡ, trao đổi với BQLDA Nh&amp;agrave; văn h&amp;oacute;a&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;&lt;img alt=&quot;Anh khao sat 3&quot; height=&quot;387&quot; src=&quot;http://aasc.com.vn/web/images/tinnoibo/Thang_02.2014/Anh_khao_sat_3.png&quot; style=&quot;max-width: 100%; height: auto; vertical-align: middle; border: 0px;&quot; width=&quot;640&quot; /&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em style=&quot;line-height: 1.3em;&quot;&gt;Đo&amp;agrave;n c&amp;ocirc;ng t&amp;aacute;c khảo s&amp;aacute;t hiện trường c&amp;ocirc;ng tr&amp;igrave;nh&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: right;&quot;&gt;\r\n	&lt;strong&gt;&lt;em&gt;BBT&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;\r\n', 'AASC EXTENDS MARKET REACH AND INCREASES MARKE', '', '&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	Following the development strategy of AASC Auditing Firm to 2020, with a vision towards 2030, on a working visit from 21/01/2014 to 25/02/2014, AASC delegation led by Mr. Ngo Duc Doan, General Director of AASC, investigated and undertook the audit course of the Cayson Phomvihan Cultural House construction, a meaningful present of the Vietnamese Communist Party, State and people to Laos.&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	Accordingly, AASC delegation visited and discussed with Cayson Phomvihan Cultural House Project Management Unit (the PMU) on the audit plan as well as conducted field investigation of the construction. AASC delegation also shared experiences and consulted the PMU on the financial and investment capital management of the project in compliance with applicable laws and regulations. Speaking at the meetings, Mr. Doan believed that AASC will implement and outstandingly complete this audit course, provide the PMU professional services with highest quality in response to the trust of the Lao People&amp;#39;s Revolutionary Party, the Vietnamese Communist Party and the PMU. This working visit of AASC delegation will be a good premise for the development of the long-term relationship between AASC Auditing Firm and the Central Office of the Vietnamese Communist Party.&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;Photos of the working visit.&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em style=&quot;line-height: 1.3em;&quot;&gt;&lt;img alt=&quot;Anh khao sat 1&quot; height=&quot;480&quot; src=&quot;http://aasc.com.vn/web/images/tinnoibo/Thang_02.2014/Anh_khao_sat_1.png&quot; style=&quot;max-width: 100%; height: auto; vertical-align: middle; border: 0px;&quot; width=&quot;640&quot; /&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;Cayson Phomvihan Cultural House&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em&gt;&lt;img alt=&quot;Anh khao sat 2&quot; height=&quot;415&quot; src=&quot;http://aasc.com.vn/web/images/tinnoibo/Thang_02.2014/Anh_khao_sat_2.png&quot; style=&quot;max-width: 100%; height: auto; vertical-align: middle; border: 0px;&quot; width=&quot;640&quot; /&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&amp;nbsp;&lt;em style=&quot;line-height: 1.3em;&quot;&gt;General Director Mr. Ngo Duc Doan visited and discussed with the PMU&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em style=&quot;line-height: 1.3em;&quot;&gt;&lt;img alt=&quot;Anh khao sat 3&quot; height=&quot;387&quot; src=&quot;http://aasc.com.vn/web/images/tinnoibo/Thang_02.2014/Anh_khao_sat_3.png&quot; style=&quot;max-width: 100%; height: auto; vertical-align: middle; border: 0px;&quot; width=&quot;640&quot; /&gt;&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: justify;&quot;&gt;\r\n	&lt;em style=&quot;line-height: 1.3em;&quot;&gt;AASC delegation conducted field investigation of the construction&lt;/em&gt;&lt;/p&gt;\r\n&lt;p style=&quot;margin: 8px 0px 15px; color: rgb(0, 0, 0); font-family: Arial, Verdana, Helvetica, sans-serif; font-size: 11px; line-height: 17.600000381469727px; text-align: right;&quot;&gt;\r\n	&lt;strong&gt;&lt;em&gt;BBT&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;\r\n', NULL, NULL, 1, '2014-03-23 17:06:13', 1, NULL, 0, 0);

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
