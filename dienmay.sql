-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table mayphatdienphananh.tv.ads
CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `videos_id` int(11) DEFAULT NULL,
  `articles_id` int(11) DEFAULT NULL,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_sapo` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.ads: ~15 rows (approximately)
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` (`id`, `cid`, `videos_id`, `articles_id`, `vn_name`, `vn_sapo`, `link`, `image_link`, `status`, `created`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
	(50, 2, NULL, NULL, 'logo', NULL, '', '1603099432_index_03.gif', 1, 1603099432, NULL, NULL, NULL, NULL, NULL),
	(55, 4, NULL, NULL, 'favicon', NULL, '', '1603099444_index_03.gif', 1, 1603099444, NULL, NULL, NULL, NULL, NULL),
	(61, 5, NULL, NULL, 'Vận chuyển liên hiệp quốc', NULL, 'https://facebook.com', '1601725872_content.jpg', 1, 1601725872, NULL, NULL, NULL, NULL, NULL),
	(62, 5, NULL, NULL, 'Vận chuyển liên hiệp quốc', NULL, '', '1601725858_content.jpg', 1, 1601725906, NULL, NULL, NULL, NULL, NULL),
	(63, 5, NULL, NULL, 'Vận chuyển liên hiệp quốc', NULL, '', '1601725828_content.jpg', 1, 1601725893, NULL, NULL, NULL, NULL, NULL),
	(68, 1, NULL, NULL, 'Hình 1', NULL, '', '1603099382_index_05.gif', 1, 1603099706, NULL, NULL, NULL, NULL, NULL),
	(69, 1, NULL, NULL, 'Hình 2', NULL, '', '1603099399_index_05.gif', 1, 1603099698, NULL, NULL, NULL, NULL, NULL),
	(70, 7, NULL, NULL, 'mishubishi', NULL, '', '1603099774_index_68.gif', 1, 1603099774, NULL, NULL, NULL, NULL, NULL),
	(71, 7, NULL, NULL, 'denyo', NULL, '', '1603099797_index_70.gif', 1, 1603099797, NULL, NULL, NULL, NULL, NULL),
	(72, 7, NULL, NULL, 'power', NULL, '', '1603099828_index_72_1.gif', 1, 1603099828, NULL, NULL, NULL, NULL, NULL),
	(73, 8, NULL, NULL, 'mua bán bảo trì cho thuê', NULL, '', '1603099933_index_03.png', 1, 1603099933, NULL, NULL, NULL, NULL, NULL),
	(74, 8, NULL, NULL, 'khỏa sát tư vấn', NULL, '', '1603099955_index_04.gif', 1, 1603099955, NULL, NULL, NULL, NULL, NULL),
	(75, 8, NULL, NULL, 'kí kết hợp đồng', NULL, '', '1603099977_index_06.gif', 1, 1603099977, NULL, NULL, NULL, NULL, NULL),
	(76, 8, NULL, NULL, 'thi công lắp đặt', NULL, '', '1603099993_index_07.gif', 1, 1603099993, NULL, NULL, NULL, NULL, NULL),
	(77, 8, NULL, NULL, 'bảo hành bảo trì', NULL, '', '1603100012_index_08.png', 1, 1603100012, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.ads_category
CREATE TABLE IF NOT EXISTS `ads_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_description` text COLLATE utf8_unicode_ci,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.ads_category: ~6 rows (approximately)
/*!40000 ALTER TABLE `ads_category` DISABLE KEYS */;
INSERT INTO `ads_category` (`id`, `pid`, `vn_name`, `vn_slug`, `vn_title`, `vn_keyword`, `vn_description`, `status`, `created`) VALUES
	(1, 0, 'Slider', 'slider', NULL, NULL, NULL, 1, 1603098868),
	(2, 0, 'logo', 'logo', NULL, NULL, NULL, 1, 1571796977),
	(4, 0, 'favicon', 'favicon', NULL, NULL, NULL, 1, 1571879782),
	(5, 0, 'khách hàng', 'khach-hang', NULL, NULL, NULL, 1, 1601724307),
	(7, 0, 'Đối tác', 'doi-tac', NULL, NULL, NULL, 1, 1603098950),
	(8, 0, 'Banner trang home', 'banner-trang-home', NULL, NULL, NULL, 1, 1603099867);
/*!40000 ALTER TABLE `ads_category` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videos_id` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_description` text COLLATE utf8_unicode_ci,
  `vn_sapo` text COLLATE utf8_unicode_ci,
  `vn_detail` longtext COLLATE utf8_unicode_ci,
  `is_home` tinyint(3) DEFAULT NULL,
  `is_hot` tinyint(3) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.articles: ~2 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `videos_id`, `cid`, `vn_name`, `vn_slug`, `vn_keyword`, `vn_title`, `vn_description`, `vn_sapo`, `vn_detail`, `is_home`, `is_hot`, `view`, `image_link`, `file_link`, `status`, `created`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
	(91, NULL, 5, 'Cho thuê máy phát điện công nghiệp từ 10kva - 1000kva', 'cho-thue-may-phat-dien-cong-nghiep-tu-10kva-1000kva', 'Cho thuê máy phát điện công nghiệp từ 10kva - 1000kva', 'Cho thuê máy phát điện công nghiệp từ 10kva - 1000kva', 'Cho thuê máy phát điện công nghiệp từ 10kva - 1000kva', '<h2>Cho thuê máy phát điện công nghiệp có công suất từ 100kva đến 1000kva cho các tòa nhà cao tầng, căn hộ chung cư, công trình xây dựng</h2>\r\n', '<p>K&iacute;nh gửi Qu&yacute; kh&aacute;ch h&agrave;ng!</p>\r\n\r\n<p>M&aacute;y ph&aacute;t điện ng&agrave;y nay được sử dụng hầu hết tại c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng d&acirc;n dụng, c&ocirc;ng nghiệp, nh&agrave; xưởng, c&aacute;c nh&agrave; m&aacute;y, x&iacute; nghiệp. trang trại, ao nu&ocirc;i t&ocirc;m c&aacute;...</p>\r\n\r\n<p>C&ocirc;ng ty m&aacute;y ph&aacute;t điện Phan Anh - chuy&ecirc;n mua b&aacute;n v&agrave; cho thu&ecirc; c&aacute;c loại m&aacute;y ph&aacute;t điện c&ocirc;ng nghiệp ch&iacute;nh h&atilde;ng c&oacute; c&ocirc;ng suất lớn từ 100kva, 150kva, 200kva, 250kva, 300kva, 400kva, 500kva, 1000kva , nếu qu&yacute; kh&aacute;ch c&oacute; nhu cầu thu&ecirc; m&aacute;y ph&aacute;t c&ocirc;ng suất nhỏ hoặc lớn hơn, vui l&ograve;ng li&ecirc;n hệ, ch&uacute;ng t&ocirc;i sẽ b&aacute;o gi&aacute; cạnh tranh.</p>\r\n\r\n<h2>Bảng gi&aacute; cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng nghiệp c&oacute; c&ocirc;ng suất từ 100kva đến 1000kva</h2>\r\n\r\n<p><strong>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (75kva &ndash; 100kva):&nbsp;từ 1.500.000 &ndash; 1.700.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (100kva &ndash; 150kva): từ&nbsp;<strong>1.700.000 &ndash; 2.000.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (150kva &ndash; 250kva): từ<strong>&nbsp;2.000.000 &ndash; 2.400.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (250kva &ndash; 300kva): gi&aacute;&nbsp;<strong>2.500.000 &ndash; 3.000.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (300kva &ndash; 400kva): gi&aacute;&nbsp;<strong>3.500.000 &ndash; 4.500.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (400kva &ndash; 500kva): gi&aacute;&nbsp;<strong>4.500.000 &ndash; 6.000.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (500kva &ndash; 600kva): gi&aacute;<strong>&nbsp;6.000.000 &ndash; 7.500.000 đồng/ ng&agrave;y.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất (700kva &ndash; 1000kva):&nbsp;gi&aacute; vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p><strong>Đt: 0915262242</strong></p>\r\n\r\n<p><strong>Ngo&agrave;i ra ch&uacute;ng t&ocirc;i c&ograve;n cho thu&ecirc; m&aacute;y ph&aacute;t điện gi&aacute; rẻ c&oacute; c&ocirc;ng suất nhỏ hơn, qu&yacute; kh&aacute;ch h&agrave;ng tham khảo.</strong></p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện gi&aacute; rẻ c&oacute; c&ocirc;ng suất (10kva &ndash; 25kva): từ 800.000 &ndash; 1.000.000 đồng/ ng&agrave;y.</p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện gi&aacute; rẻ c&oacute; c&ocirc;ng suất (25kva &ndash; 45kva): từ 1.000.000 &ndash; 1.200.000 đồng/ ng&agrave;y.</p>\r\n\r\n<p>Cho thu&ecirc; m&aacute;y ph&aacute;t điện gi&aacute; rẻ c&oacute; c&ocirc;ng suất (45kva &ndash; 75kva): từ 1.200.000 &ndash; 1.500.000 đồng/ ng&agrave;y.</p>\r\n\r\n<h2>Những d&ograve;ng m&aacute;y ph&aacute;t điện c&oacute; chất lượng tốt được sử dụng rộng r&atilde;i nhất hiện nay c&oacute; ưu điểm sau:</h2>\r\n\r\n<p>+ Sử dụng động cơ m&aacute;y dầu Diesel n&ecirc;n tiết kiệm nhi&ecirc;n liệu đến 30% so với m&aacute;y xăng.</p>\r\n\r\n<p>+ M&aacute;y bền bỉ, khỏe, thời gian sử dụng li&ecirc;n tục l&acirc;u d&agrave;i, v&ograve;ng đời sử dụng l&ecirc;n đến 50 năm.</p>\r\n\r\n<p>+ C&ocirc;ng suất cho ra lớn, d&ograve;ng điện 1 pha, 3 pha c&oacute; c&ocirc;ng suất từ: 20kva, 25kva, 30kva, 40kva, 50kva, 75kva, 100kva, 150kva, 200kva, 300kva, 400kva, 1000kva, 2000kva...</p>\r\n\r\n<p>+ Bảng điều khiển dể sử dụng ngay cả những người mới bắt đầu hoặc kh&ocirc;ng c&oacute; chuy&ecirc;n m&ocirc;n cũng c&oacute; thể vận h&agrave;nh tốt.</p>\r\n\r\n<h2>Địa chỉ thu&ecirc; m&aacute;y ph&aacute;t điện c&ocirc;ng suất 10kva - 1000kva</h2>\r\n\r\n<p>Ch&uacute;ng t&ocirc;i kinh doanh m&aacute;y ph&aacute;t điện mới, cũ đ&atilde; qua sử dụng c&ocirc;ng suất lớn nhỏ t&ugrave;y theo nhu cầu sử dụng của kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Qu&yacute; kh&aacute;ch tại TP.HCM, Đồng Nai, Vũng T&agrave;u, B&igrave;nh Dương, Long An, Tiền Giang, S&oacute;c Trăng, C&agrave; Mau, Bạc Li&ecirc;u, Nha Trang, Đ&agrave; Nẵng, Hải Ph&ograve;ng, H&agrave; Nội, Quảng Ninh, Lạng Sơn, Cao Bằng... đang c&oacute; kh&oacute; khăn về nguồn điện, h&atilde;y li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để được tư vấn, với thủ tục thu&ecirc; nhanh gọn, vận chuyển tận nơi, hỗ trợ bảo tr&igrave; sửa chữa trong qu&aacute; tr&igrave;nh sử dụng.</p>\r\n\r\n<p><strong>C&Ocirc;NG TY TNHH CƠ ĐIỆN&nbsp;PHAN ANH</strong></p>\r\n\r\n<p>Địa chỉ: 36c/16 Đường 16, Kp 1, P.Linh Trung, Q.Thủ Đức, TP.HCM .</p>\r\n\r\n<p>MST: 0315 806 770</p>\r\n\r\n<p>Mail: mayphatdiennhap@gmail.com</p>\r\n\r\n<p>Điện thoại:&nbsp;<strong>0915262242</strong></p>\r\n', NULL, NULL, NULL, '1603098253_denyo20kva300x200.jpg', '', 1, 1603098253, NULL, NULL, NULL, NULL, NULL),
	(92, NULL, 5, 'Mua bán máy phát điện cũ nhập khẩu', 'mua-ban-may-phat-dien-cu-nhap-khau', 'Mua bán máy phát điện cũ nhập khẩu', 'Mua bán máy phát điện cũ nhập khẩu', 'Mua bán máy phát điện cũ nhập khẩu', '<p>Mua bán máy phát điện cũ nhập khẩu</p>\r\n', '<p>Mua b&aacute;n m&aacute;y ph&aacute;t điện cũ nhập khẩu</p>\r\n', NULL, NULL, NULL, '1603098446_denyo80kva300x200.jpg', '', 1, 1603098446, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.articles_category
CREATE TABLE IF NOT EXISTS `articles_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_description` text COLLATE utf8_unicode_ci,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.articles_category: ~2 rows (approximately)
/*!40000 ALTER TABLE `articles_category` DISABLE KEYS */;
INSERT INTO `articles_category` (`id`, `pid`, `vn_name`, `vn_slug`, `vn_keyword`, `vn_title`, `vn_description`, `image_link`, `position`, `status`, `created`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
	(3, 0, 'Cho Thuê Máy Phát Điện Giá Rẻ', 'cho-thue-may-phat-dien-gia-re', 'Cho Thuê Máy Phát Điện Giá Rẻ', 'Cho Thuê Máy Phát Điện Giá Rẻ', 'Cho Thuê Máy Phát Điện Giá Rẻ', NULL, 2, 1, 1603097577, '', '', '', '', ''),
	(5, 0, 'Dịch vụ', 'dich-vu', 'Dịch vụ', 'Dịch vụ', 'Dịch vụ', NULL, 1, 1, 1571884509, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `articles_category` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.ci_sessions
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table mayphatdienphananh.tv.ci_sessions: ~19 rows (approximately)
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
	('33fmtgpl58m4ttnvvdt8906vd7b15hps', '::1', 1603175792, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137353530343B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('390v49mormu527pdieo5kf6fu6vdlhjm', '::1', 1603163934, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136333639323B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('47ht0u0095ltg365gd59bn5uolrqd6h6', '::1', 1603167316, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136373330383B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('59cmeirl71g20fcqcmhlvpdj1khl3k3t', '::1', 1603166270, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136363139323B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('5mfqk198a821q1sj6dlh3gkt53agr36u', '::1', 1603175834, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137353833323B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('67drb52rku951urfjvq2lglh8poq62hu', '::1', 1603177677, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137373338353B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('78c8rof2bcor6ciggfbpsmaa4qnp9dt2', '::1', 1603164863, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136343636323B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('9mbuphe8e75em1akqnvrue10dddqo1s4', '::1', 1603164553, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136343238363B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('9s11f60hos3nao9dfbdr6657807tv7hk', '::1', 1603167931, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136373836353B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('9tgf2rmfdh54bjn9avcivt5k2j638ulu', '::1', 1603176469, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137363137323B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('alga5glvcn9kkonhi5bb6usucc9afsnj', '::1', 1603166748, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136363639383B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('b798sbgmiec9u6468j9kj1n120lfdoi2', '::1', 1603175445, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137353135373B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('g6nnbiavqs33924pcpjjcgurbe5v9fic', '::1', 1603165658, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136353435383B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('ks7u9e6o8s85g9o3tqsmg2dfbv6rqgtc', '::1', 1603176951, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137363836353B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('mja7fm77kgna2p5ettjtpq16btbd6kkl', '::1', 1603169286, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136393032363B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('oi5ummb17t99o30rnnl2du69otiv6ceb', '::1', 1603176725, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333137363532353B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('pgvb4opkm2tf8aiqa8st9va3h41aih6i', '::1', 1603166071, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136353836373B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('t65pqgejrdoq43nrtttcsj72nla2df0k', '::1', 1603168476, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136383437333B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B),
	('t6liq4kesbsep0bi0bff6537fciq87pq', '::1', 1603169597, _binary 0x5F5F63695F6C6173745F726567656E65726174657C693A313630333136393333393B69647C733A313A2237223B7469647C733A313A2234223B6E616D657C733A31353A22437479205472C3AD205669E1BB8774223B656D61696C7C733A32313A226B696E68646F616E6840747269766965742E6E6574223B70686F6E657C733A31323A22303930332036333620323439223B616464726573737C733A39353A223331314B31332C20C490C6B0E1BB9D6E672073E1BB9120382C204B6875207068E1BB9120312C205068C6B0E1BB9D6E6720416E205068C3BA2C5175E1BAAD6E20322C2054702E48E1BB93204368C3AD204D696E682C5669E1BB8774204E616D223B6973436865636B4C6F67696E7C623A313B);
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.configs
CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `values` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.configs: ~4 rows (approximately)
/*!40000 ALTER TABLE `configs` DISABLE KEYS */;
INSERT INTO `configs` (`id`, `key`, `values`) VALUES
	(1, 'general', '{"vn_title_site":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","vn_keyword_site":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","vn_description_site":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","about":null,"address":null,"email":"mayphatdienphananh@gmail.com","hotline":"0962375579","zalo":"https:\\/\\/www.zalo.com\\/","cn_1_name":null,"cn_1_address":null,"cn_1_phone":null,"cn_1_hotline":null,"cn_1_email":null,"cn_1_fax":null,"cn_2_name":null,"cn_2_address_1":null,"cn_2_address_2":null,"cn_2_phone":null,"cn_2_hotline":null,"cn_2_email":null,"cn_2_fax":null,"cn_3_name":null,"cn_3_address":null,"cn_3_phone":null,"cn_3_hotline":null,"cn_3_email":null,"cn_3_fax":null,"alt_web":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","h1":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","h2":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","h3":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","h4":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","h5":"M\\u00e1y ph\\u00e1t \\u0111i\\u1ec7n phan anh","about_footer":"<p>C\\u00f4ng Ty TNHH C\\u01a1 \\u0110i\\u1ec7n Phan Anh<\\/p>\\r\\n\\r\\n<p>\\u0110\\u1ecba ch\\u1ec9 : 36\\/6c Phan \\u0110\\u00ecnh Ph\\u00f9ng, Ph\\u01b0\\u1eddng 6, Qu\\u1eadn9, H\\u1ed3 Ch\\u00ed Minh<\\/p>\\r\\n\\r\\n<p>\\u0110i\\u1ec7n tho\\u1ea1i : 0913636249 - 0982374340<\\/p>\\r\\n\\r\\n<p>Email : info@mayphatdien.vn<\\/p>\\r\\n\\r\\n<p>Website: www.mayphatdien.vn<\\/p>\\r\\n","facebook":"https:\\/\\/www.facebook.com\\/","youtube":"https:\\/\\/www.youtube.com\\/","address_website":"mayphatdienphananh.com"}'),
	(2, 'home-top', '{"title":"[\\"Tham gia t\\\\u1ed1 t\\\\u1ee5ng c\\\\u00e1c v\\\\u1ee5 \\\\u00e1n, v\\\\u1ee5 vi\\\\u1ec7c\\",\\"\\\\u0110\\\\u1ea1i di\\\\u1ec7n \\\\u1ee7y quy\\\\u1ec1n\\",\\"T\\\\u01b0 v\\\\u1ea5n ph\\\\u00e1p lu\\\\u1eadt\\"]","content":"[\\"16474\\",\\"467573\\",\\"37373\\"]","image_link":"[\\"1559616095-service-icon-1.png\\",\\"1559616102-service-icon-2.png\\",\\"1559616111-service-icon-3.png\\"]"}'),
	(3, 'about', '{"title":"\\"C\\u00f4ng ty Lu\\u1eadt Ph\\u00fac Anh Thi\\u1ec7n, v\\u1edbi \\u0111\\u1ed9i ng\\u0169 lu\\u1eadt s\\u01b0 th\\u00e0nh vi\\u00ean v\\u00e0 chuy\\u00ean vi\\u00ean l\\u00e0m vi\\u1ec7c theo ti\\u00eau ch\\u00ed: S\\u00e0ng l\\u1ecdc \\u2013 S\\u1eafp x\\u1ebfp \\u2013 S\\u0103n s\\u00f3c \\u2013 S\\u1ea1ch s\\u1ebd \\u2013 S\\u1eb5n s\\u00e0ng.\\"","content":"V\\u1edbi nh\\u1eefng kinh nghi\\u1ec7m th\\u1ef1c ti\\u1ec5n qua nhi\\u1ec1u n\\u0103m l\\u00e0m vi\\u1ec7c trong nh\\u1eefng m\\u00f4i tr\\u01b0\\u1eddng kh\\u00e1c nhau: Th\\u01b0 k\\u00fd T\\u00f2a \\u00e1n; Chuy\\u00ean vi\\u00ean; Qu\\u1ea3n l\\u00fd Doanh nghi\\u1ec7p; Ban ch\\u1ea5p h\\u00e0nh H\\u1ed9i Doanh nghi\\u1ec7p; \\u0110i\\u1ec1u h\\u00e0nh V\\u0103n ph\\u00f2ng Lu\\u1eadt s\\u01b0;\\u2026.. c\\u1ee7a Lu\\u1eadt s\\u01b0 Tr\\u01b0\\u01a1ng Th\\u00e0nh Thi\\u1ec7n \\u2013 Th\\u1ea1c s\\u1ef9 chuy\\u00ean ng\\u00e0nh lu\\u1eadt kinh t\\u1ebf. C\\u00f4ng ty Lu\\u1eadt Ph\\u00fac Anh Thi\\u1ec7n lu\\u00f4n c\\u00f3 nh\\u1eefng gi\\u1ea3i ph\\u00e1p t\\u1ed1t nh\\u1ea5t trong t\\u1eebng v\\u1ee5 vi\\u1ec7c m\\u00e0 kh\\u00e1ch h\\u00e0ng y\\u00eau c\\u1ea7u v\\u00e0 nh\\u1eadn \\u0111\\u01b0\\u1ee3c s\\u1ef1 tin t\\u01b0\\u1edfng c\\u1ee7a kh\\u00e1ch h\\u00e0ng t\\u1eeb d\\u1ecbch v\\u1ee5 c\\u1ee7a t\\u1eadp th\\u1ec3 Lu\\u1eadt s\\u01b0 v\\u00e0 chuy\\u00ean vi\\u00ean c\\u00f4ng ty; th\\u00f4ng qua vi\\u1ec7c mang \\u0110a gi\\u1ea3i ph\\u00e1p v\\u1edbi m\\u1ee5c ti\\u00eau V\\u1eefng ni\\u1ec1m tin v\\u00e0 x\\u00e2y d\\u1ef1ng th\\u01b0\\u01a1ng hi\\u1ec7u lu\\u1eadt s\\u01b0 uy t\\u00edn c\\u1ee7a m\\u1ecdi kh\\u00e1ch h\\u00e0ng.","link":"http:\\/\\/test.trilastin.vn\\/kem-ran-da.html","image_link":"1559642375-aboutus.png"}'),
	(4, 'thong-ke', '{"title":"[\\"100\\",\\"85\\",\\"100\\",\\"95\\"]","content":"[\\"L\\\\u00e0m vi\\\\u1ec7c t\\\\u1eadn t\\\\u00e2m\\",\\"\\\\u0110\\\\u1ea3m b\\\\u1ea3o t\\\\u00edn nhi\\\\u1ec7m\\",\\"\\\\u0110\\\\u1ea3m b\\\\u1ea3o t\\\\u00edn nhi\\\\u1ec7m\\",\\"Kh\\\\u00e1ch h\\\\u00e0ng h\\\\u00e0i l\\\\u00f2ng\\"]","image_link":"[\\"1559617879-achievement-1.png\\",\\"1559617879-achievement-2.png\\",\\"1559617879-achievement-3.png\\",\\"1559617879-achievement-4.png\\",0,0,0,0]"}');
/*!40000 ALTER TABLE `configs` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.contact: ~4 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `address`, `title`, `content`, `status`, `created`) VALUES
	(11, 'adasdsadsad', 'vuvanhao122995@gmail.com', '0966890063', NULL, '2143124141414sada', 'ádasdsadsad', 1, 1566277397),
	(21, 'Hảo', NULL, '0966890063', '123', NULL, 'dkm', 2, 1601828619),
	(22, 'Hảo', NULL, '0966890063', '123', NULL, '123', 2, 1601828708),
	(23, 'Hảo', 'vuvanhao122995@gmail.com', '0966890063', NULL, 'acesport.net', 'ưeqeqeq', 1, 1601904264);
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.counters
CREATE TABLE IF NOT EXISTS `counters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yesterday` varchar(20) NOT NULL,
  `today` varchar(20) NOT NULL,
  `week` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `properties` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table mayphatdienphananh.tv.counters: ~1 rows (approximately)
/*!40000 ALTER TABLE `counters` DISABLE KEYS */;
INSERT INTO `counters` (`id`, `yesterday`, `today`, `week`, `month`, `year`, `properties`) VALUES
	(1, '179.5', '121', '299.5', '2856.5', '19328.5', 'a:4:{s:3:"day";s:2:"20";s:4:"week";s:2:"43";s:5:"month";s:2:"10";s:4:"year";s:4:"2020";}');
/*!40000 ALTER TABLE `counters` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.list_image_product
CREATE TABLE IF NOT EXISTS `list_image_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

-- Dumping data for table mayphatdienphananh.tv.list_image_product: 1 rows
/*!40000 ALTER TABLE `list_image_product` DISABLE KEYS */;
INSERT INTO `list_image_product` (`id`, `product_id`, `name`, `created`) VALUES
	(42, 944, '1603169164_denyo300kva600x400.jpg', 1603169164);
/*!40000 ALTER TABLE `list_image_product` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_created` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `properties` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table mayphatdienphananh.tv.orders: ~8 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `fullname`, `date_created`, `properties`, `status`) VALUES
	(6, 0, 'tran quo huy', '1571900623', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"0326213596";s:7:"address";s:12:"ádadadadasd";s:8:"messages";s:4:"test";}', 1),
	(7, 0, 'sada', '1571900894', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567890";s:7:"address";s:6:"ádasd";s:8:"messages";s:20:"ádadasdsadsadsadsad";}', 1),
	(8, 0, 'tran quo huy', '1571901141', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567891";s:7:"address";s:6:"ádasd";s:8:"messages";s:7:"ádadad";}', 1),
	(9, 0, 'tran quo huy', '1571901321', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567891";s:7:"address";s:6:"ádasd";s:8:"messages";s:4:"đá";}', 1),
	(10, 0, 'tran quo huy', '1571901372', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567891";s:7:"address";s:6:"ádasd";s:8:"messages";s:5:"adasd";}', 1),
	(11, 0, 'tran quo huy', '1571901519', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567891";s:7:"address";s:6:"ádasd";s:8:"messages";s:5:"adasd";}', 1),
	(12, 0, 'tran quo huy', '1571901593', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567891";s:7:"address";s:6:"ádasd";s:8:"messages";s:6:"adadad";}', 1),
	(13, 0, 'tran quo huy', '1571901705', 'a:4:{s:5:"email";s:24:"it.tranquochuy@gmail.com";s:4:"cell";s:10:"1234567895";s:7:"address";s:6:"ádasd";s:8:"messages";s:9:"ádasdasd";}', 1);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.order_item
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `properties` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table mayphatdienphananh.tv.order_item: ~9 rows (approximately)
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
INSERT INTO `order_item` (`id`, `order_id`, `pro_id`, `properties`) VALUES
	(6, 6, 501, 'a:4:{s:8:"pro_name";s:13:"San phẩm 12";s:9:"pro_price";N;s:8:"quantity";i:3;s:5:"total";i:0;}'),
	(7, 6, 503, 'a:4:{s:8:"pro_name";s:13:"San phẩm 11";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}'),
	(8, 7, 499, 'a:4:{s:8:"pro_name";s:12:"San phẩm 1";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}'),
	(9, 8, 499, 'a:4:{s:8:"pro_name";s:12:"San phẩm 1";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}'),
	(10, 9, 499, 'a:4:{s:8:"pro_name";s:12:"San phẩm 1";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}'),
	(11, 10, 499, 'a:4:{s:8:"pro_name";s:12:"San phẩm 1";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}'),
	(12, 11, 503, 'a:4:{s:8:"pro_name";s:13:"San phẩm 11";s:9:"pro_price";N;s:8:"quantity";i:2;s:5:"total";i:0;}'),
	(13, 12, 499, 'a:4:{s:8:"pro_name";s:12:"San phẩm 1";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}'),
	(14, 13, 503, 'a:4:{s:8:"pro_name";s:13:"San phẩm 11";s:9:"pro_price";N;s:8:"quantity";i:1;s:5:"total";i:0;}');
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_description` text COLLATE utf8_unicode_ci,
  `price` decimal(15,0) DEFAULT NULL,
  `sale_price` decimal(15,0) DEFAULT NULL,
  `vn_sapo` text COLLATE utf8_unicode_ci,
  `vn_detail` longtext COLLATE utf8_unicode_ci,
  `properties` longtext COLLATE utf8_unicode_ci,
  `view` int(11) DEFAULT NULL,
  `is_home` tinyint(3) DEFAULT NULL,
  `is_sell` tinyint(3) DEFAULT NULL,
  `is_pay` tinyint(3) DEFAULT NULL,
  `is_new` tinyint(3) DEFAULT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_list` text COLLATE utf8_unicode_ci,
  `status` tinyint(3) DEFAULT NULL,
  `spnb` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=945 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.product: ~1 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id`, `user_id`, `cid`, `vn_name`, `vn_slug`, `vn_keyword`, `vn_title`, `vn_description`, `price`, `sale_price`, `vn_sapo`, `vn_detail`, `properties`, `view`, `is_home`, `is_sell`, `is_pay`, `is_new`, `code`, `image_link`, `image_list`, `status`, `spnb`, `created`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
	(944, NULL, 174, 'Máy phát điện Denyo 300kva', 'may-phat-dien-denyo-300kva', 'Máy phát điện Denyo 300kva', 'Máy phát điện Denyo 300kva', 'Máy phát điện Denyo 300kva', NULL, NULL, '<p>Máy phát điện Denyo 300kva</p>\r\n', '<p>M&aacute;y ph&aacute;t điện Denyo 300kva</p>\r\n', '{"pw_1":"10","pw_2":"50","pw_3":"10","pw_4":"50"}', 1, NULL, NULL, NULL, NULL, 'Máy phát điện Denyo 300kva', '1603169164_denyo300kva600x400.jpg', '', 1, 0, 1603176883, 'Máy phát điện Denyo 300kva', 'Máy phát điện Denyo 300kva', 'Máy phát điện Denyo 300kva', 'Máy phát điện Denyo 300kva', 'Máy phát điện Denyo 300kva');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.product_category
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT NULL,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_description` text COLLATE utf8_unicode_ci,
  `vn_sapo` longtext COLLATE utf8_unicode_ci,
  `position` int(11) DEFAULT NULL,
  `position_home` int(11) DEFAULT NULL,
  `spnb` int(11) NOT NULL,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_show_product_top` int(1) DEFAULT NULL,
  `is_show_product_bottom` int(1) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `left` int(11) DEFAULT NULL,
  `right` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.product_category: ~6 rows (approximately)
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;
INSERT INTO `product_category` (`id`, `pid`, `vn_name`, `vn_slug`, `vn_keyword`, `vn_title`, `vn_description`, `vn_sapo`, `position`, `position_home`, `spnb`, `image_link`, `is_show_product_top`, `is_show_product_bottom`, `status`, `created`, `left`, `right`, `level`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
	(146, 0, 'Phụ tùng máy phát điện ', 'phu-tung-may-phat-dien', 'Máy Phát Điện Đã Qua Sử Dụng Giá Rẻ', 'Máy Phát Điện Đã Qua Sử Dụng Giá Rẻ', 'Máy Phát Điện Đã Qua Sử Dụng Giá Rẻ', '<p>Máy Phát Điện Đã Qua Sử Dụng Giá Rẻ</p>\r\n', 1, 0, 0, '1577431272_thit_b_vi_mi_trng.jpg', 0, NULL, 1, 1603096813, NULL, NULL, NULL, '', '', '', '', ''),
	(147, 0, 'Máy phát điện mới', 'may-phat-dien-moi', 'Máy phát điện mới', 'Máy phát điện mới', 'Máy phát điện mới', '<p>Máy phát điện mới</p>\r\n', 2, 0, 0, '1577431313_thit_b_sinh_hc.jpg', 0, NULL, 1, 1603096779, NULL, NULL, NULL, '', '', '', '', ''),
	(148, 0, 'Máy Phát Điện Đã Qua Sử Dụng Giá Rẻ', 'may-phat-dien-da-qua-su-dung-gia-re', 'Phụ tùng máy phát điện', 'Phụ tùng máy phát điện', 'Phụ tùng máy phát điện', '<p>Phụ tùng máy phát điện</p>\r\n', 3, 0, 0, '1571815632_logo52790_508x374.png', 0, NULL, 1, 1603096713, NULL, NULL, NULL, '', '', '', '', ''),
	(173, 147, 'Máy phát điện Cummins', 'may-phat-dien-cummins', 'Máy phát điện Cummins', 'Máy phát điện Cummins', 'Máy phát điện Cummins', '<p>Máy phát điện Cummins</p>\r\n', NULL, 3, 0, NULL, 1, NULL, 1, 1603097215, NULL, NULL, NULL, '', '', '', '', ''),
	(174, 147, 'Máy phát điện Denyo', 'may-phat-dien-denyo', 'Máy phát điện Denyo', 'Máy phát điện Denyo', 'Máy phát điện Denyo', '<p>Máy phát điện Denyo</p>\r\n', NULL, 1, 0, NULL, 1, NULL, 1, 1603097342, NULL, NULL, NULL, '', '', '', '', ''),
	(175, 147, 'Máy phát điện Mitsubishi', 'may-phat-dien-mitsubishi', 'Máy phát điện Mitsubishi', 'Máy phát điện Mitsubishi', 'Máy phát điện Mitsubishi', '<p>Máy phát điện Mitsubishi</p>\r\n', NULL, 2, 0, NULL, 1, NULL, 1, 1603097405, NULL, NULL, NULL, '', '', '', '', '');
/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.static_page
CREATE TABLE IF NOT EXISTS `static_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vn_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vn_description` text COLLATE utf8_unicode_ci,
  `title` mediumtext COLLATE utf8_unicode_ci,
  `vn_sapo` text COLLATE utf8_unicode_ci,
  `vn_detail` longtext COLLATE utf8_unicode_ci,
  `image_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.static_page: ~6 rows (approximately)
/*!40000 ALTER TABLE `static_page` DISABLE KEYS */;
INSERT INTO `static_page` (`id`, `vn_name`, `vn_slug`, `vn_keyword`, `vn_title`, `vn_description`, `title`, `vn_sapo`, `vn_detail`, `image_link`, `status`, `created`, `h1`, `h2`, `h3`, `h4`, `h5`) VALUES
	(1, 'Giới thiệu', 'gioi-thieu', 'Giới thiệu, thiết bị thắng phát. thiet bi thang phat, thiet bi vat lieu xay dung, vat lieu xay dung', 'Giới thiệu', 'Giới thiệu', 'Tại sao nên chọn dịch vụ bốc xếp hàng hóa của chúng tôi', '<p style="text-align:justify">C&ocirc;ng Ty TNHH Thiết Bị Thắng Ph&aacute;t&nbsp;<br />\r\nL&agrave; doanh nghiệp đi đầu trong lĩnh vực ph&aacute;t triển c&ocirc;ng nghệ tại Việt Nam&nbsp;với đội ngũ nh&acirc;n vi&ecirc;n trẻ năng động C&ocirc;ng Ty TNHH Thiết Bị Thắng Ph&aacute;t đ&atilde; v&agrave; đang đưa ra thị trường được rất nhiều sản phẩm c&oacute; t&iacute;nh c&ocirc;ng nghệ cao, chất lượng tốt, đảm bảo uy t&iacute;n tr&ecirc;n thị trường, g&oacute;p phần v&agrave;o việc giảm thiểu nhập si&ecirc;u, th&acirc;m hụt ngoại tệ theo chủ trương chung của Nh&agrave; Nước. Hiện nay, ngo&agrave;i hệ thống ph&acirc;n phối sản phẩm tr&ecirc;n to&agrave;n quốc, C&ocirc;ng Ty TNHH Thiết Bị Thắng Ph&aacute;t đang mở rộng thị trường hoạt động ra ngo&agrave;i l&atilde;nh thổ Việt Nam:&nbsp;</p>\r\n\r\n<p style="text-align:justify">Văn Ph&ograve;ng HCM: &nbsp;360/32 T&ocirc; K&yacute;, Phường T&acirc;n Ch&aacute;nh Hiệp, Quận 12, Th&agrave;nh Phố Hồ Ch&iacute; Minh<br />\r\nVăn Ph&ograve;ng H&agrave; Nội: X&oacute;m Ch&ugrave;a, th&ocirc;n Y&ecirc;n X&aacute;, x&atilde; T&acirc;n Triều, huyện Thanh Tr&igrave;, H&agrave; Nội&nbsp;&nbsp;</p>\r\n', '<p style="text-align:justify">&nbsp;C&ocirc;ng Ty TNHH Thiết BịThắng Ph&aacute;t<br />\r\nL&agrave; doanh nghiệp đi đầu trong lĩnh vực ph&aacute;t triển c&ocirc;ng nghệ tại Việt Nam. với đội ngũ nh&acirc;n vi&ecirc;n trẻ năng động C&ocirc;ng Ty TNHH Thiết Bị Thắng Ph&aacute;t đ&atilde; v&agrave; đang đưa ra thị trường được rất nhiều sản phẩm c&oacute; t&iacute;nh c&ocirc;ng nghệ cao, chất lượng tốt, đảm bảo uy t&iacute;n tr&ecirc;n thị trường, g&oacute;p phần v&agrave;o việc giảm thiểu nhập si&ecirc;u, th&acirc;m hụt ngoại tệ theo chủ trương chung của Nh&agrave; Nước. Hiện nay, ngo&agrave;i hệ thống ph&acirc;n phối sản phẩm tr&ecirc;n to&agrave;n quốc, C&ocirc;ng Ty TNHH Thiết Bị Thắng Ph&aacute;t đang mở rộng thị trường hoạt động ra ngo&agrave;i l&atilde;nh thổ Việt Nam:<br />\r\n&nbsp;<br />\r\nVăn Ph&ograve;ng HCM: &nbsp;360/32 T&ocirc; K&yacute;, Phường T&acirc;n Ch&aacute;nh Hiệp, Quận 12, Th&agrave;nh Phố Hồ Ch&iacute; Minh<br />\r\nVăn Ph&ograve;ng H&agrave; Nội: X&oacute;m Ch&ugrave;a, th&ocirc;n Y&ecirc;n X&aacute;, x&atilde; T&acirc;n Triều, huyện Thanh Tr&igrave;, H&agrave; Nội&nbsp;&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>TẦM NH&Igrave;N SỨ MỆNH:&nbsp;</strong><br />\r\nVới t&ocirc;n chỉ &ldquo; SỰ H&Agrave;I L&Ograve;NG CỦA QU&Yacute; KH&Aacute;CH L&Agrave; SỰ TH&Agrave;NH C&Ocirc;NG CỦA CH&Uacute;NG T&Ocirc;I&rdquo; THIẾT BỊ THẮNG PH&Aacute;T phấn đấu trở th&agrave;nh một Tập đo&agrave;n Khoa học C&ocirc;ng nghệ h&agrave;ng đầu Việt Nam v&agrave; . C&aacute;c sản phẩm của &nbsp;C&ocirc;ng Ty TNHH Thiết Bị Thắng Ph&aacute;t đ&atilde; được ph&acirc;n phối rộng khắp trong nhiều năm qua, đem lại được nhiều gi&aacute; trị đ&iacute;ch thực cho Kh&aacute;ch h&agrave;ng v&agrave; g&oacute;p phần đưa Việt Nam trở th&agrave;nh một nước c&oacute; nền Khoa học C&ocirc;ng nghệ ph&aacute;t triển tr&ecirc;n thế giới. Sự h&agrave;i l&ograve;ng của qu&yacute; kh&aacute;ch ch&iacute;nh l&agrave; sự th&agrave;nh c&ocirc;ng của ch&uacute;ng t&ocirc;i<br />\r\n<strong>C&Aacute;C LĨNH VỰC HOẠT ĐỘNG CH&Iacute;NH&nbsp;</strong><br />\r\nCung cấp Thiết bị điện tử, viễn th&ocirc;ng, tin học.<br />\r\nSản xuất v&agrave; cung cấp Thiết bị th&iacute; nghiệm vật liệu v&agrave; Kiểm định x&acirc;y dựng.<br />\r\nSản xuất, cung cấp Thiết bị gi&aacute;o dục dạy nghề gồm: Nghề điện, điện tử, điện lạnh, h&agrave;n, cơ kh&iacute;, sửa chữa v&agrave; lắp r&aacute;p &ocirc;t&ocirc;&hellip;<br />\r\nSản xuất v&agrave; cung cấp Thiết bị Khoa học đo lường, ho&aacute; sinh, m&ocirc;i trường.<br />\r\nSản xuất v&agrave; cung cấp Thiết bị, dụng cụ y tế.<br />\r\nTƯ VẤN CẤP CHỨNG CHỈ NĂNG LỰC HOẠT ĐỘNG X&Acirc;Y DỰNG<br />\r\nTƯ VẤN TH&Agrave;NH LẬP PH&Ograve;NG TH&Iacute; NGHIỆM KIỂM ĐỊNH X&Acirc;Y DỰNG LAS-XD&nbsp;</p>\r\n', '1571814471_logo52790_508x374.png', 1, 1601903908, 'Công Ty TNHH Thiết Bị Thắng Phát.', 'Là doanh nghiệp đi đầu trong lĩnh vực phát triển công nghệ tại Việt Nam.', 'Đã và đang đưa ra thị trường được rất nhiều sản phẩm có tính công nghệ cao, chất lượng tốt, đảm bảo uy tín trên thị trường.', 'Sản xuất và cung cấp Thiết bị Khoa học đo lường, hoá sinh, môi trường.', 'Sản xuất và cung cấp Thiết bị thí nghiệm vật liệu và Kiểm định xây dựng.'),
	(3, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', 'Chính sách bảo hành', 'Chính sách bảo hành', 'Chính sách bảo hành', 'Chính sách bảo hành', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=18" title="Chính sách bảo hành">Ch&iacute;nh s&aacute;ch bảo h&agrave;nh</a></p>\r\n', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=18" title="Chính sách bảo hành">Ch&iacute;nh s&aacute;ch bảo h&agrave;nh</a></p>\r\n', NULL, 1, 1603100761, 'Chính sách bảo hành', 'Chính sách bảo hành', 'Chính sách bảo hành', 'Chính sách bảo hành', 'Chính sách bảo hành'),
	(4, 'Chính sách đổi trả hàng', 'chinh-sach-doi-tra-hang', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=21" title="Chính sách đổi trả hàng">Ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng</a></p>\r\n', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=21" title="Chính sách đổi trả hàng">Ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng</a></p>\r\n', NULL, 1, 1603100789, 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng', 'Chính sách đổi trả hàng'),
	(5, 'Quy trình giao hàng', 'quy-trinh-giao-hang', 'Quy trình giao hàng', 'Quy trình giao hàng', 'Quy trình giao hàng', 'Quy trình giao hàng', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=23" title="Quy trình giao hàng">Quy tr&igrave;nh giao h&agrave;ng</a></p>\r\n', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=23" title="Quy trình giao hàng">Quy tr&igrave;nh giao h&agrave;ng</a></p>\r\n', NULL, 1, 1603100824, 'Quy trình giao hàng', 'Quy trình giao hàng', 'Quy trình giao hàng', 'Quy trình giao hàng', 'Quy trình giao hàng'),
	(6, 'Chính sách vận chuyển', 'chinh-sach-van-chuyen', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=20" title="Chính sách vận chuyển">Ch&iacute;nh s&aacute;ch vận chuyển</a></p>\r\n', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=20" title="Chính sách vận chuyển">Ch&iacute;nh s&aacute;ch vận chuyển</a></p>\r\n', NULL, 1, 1603100849, 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển', 'Chính sách vận chuyển'),
	(7, 'Hướng dẫn thanh toán', 'huong-dan-thanh-toan', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=22" title="Hướng dẫn thanh toán">Hướng dẫn thanh to&aacute;n</a></p>\r\n', '<p><a href="https://www.mayphatdienphananh.com/index.php?route=information/information&amp;information_id=22" title="Hướng dẫn thanh toán">Hướng dẫn thanh to&aacute;n</a></p>\r\n', NULL, 1, 1603100878, 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán', 'Hướng dẫn thanh toán');
/*!40000 ALTER TABLE `static_page` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.supports
CREATE TABLE IF NOT EXISTS `supports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nick_skype` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nick_yahoo` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `cell` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table mayphatdienphananh.tv.supports: 2 rows
/*!40000 ALTER TABLE `supports` DISABLE KEYS */;
INSERT INTO `supports` (`id`, `fullname`, `nick_skype`, `nick_yahoo`, `cell`, `email`, `status`, `created`) VALUES
	(8, 'Phòng Kinh Doanh 1', 'sontran2603', NULL, '0962375579', 'tbthangphat@gmail.com', 1, 1603100989),
	(13, 'Tư vấn', '', NULL, '0962375579', '', 1, 1603101005);
/*!40000 ALTER TABLE `supports` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table mayphatdienphananh.tv.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `tid`, `username`, `password`, `name`, `phone`, `email`, `address`, `status`, `created`) VALUES
	(3, 4, 'triviet', '6a44648cffdd730673adc0e535e09dc4', 'Cty Trí Việt', '0903 636 249', 'kinhdoanh@triviet.net', '311K13, Đường số 8, Khu phố 1, Phường An Phú,Quận 2, Tp.Hồ Chí Minh,Việt Nam', 1, 1529052420),
	(5, 2, 'huy', '32ca6377299d453ad40e6a6b9096854b', 'Thiên', '0961800223', 'langthien.nina@gmail.com', 'Hồ Chí Minh', 1, 1531205346),
	(6, 4, 'triviet99', '215bd54fbb7be28fa7b4b8ff48ecf53c', 'Cty Trí Việt', '0903 636 249', 'kinhdoanh@triviet.net', '311K13, Đường số 8, Khu phố 1, Phường An Phú,Quận 2, Tp.Hồ Chí Minh,Việt Nam', 1, 1529052420),
	(7, 4, 'admin', '202cb962ac59075b964b07152d234b70', 'Cty Trí Việt', '0903 636 249', 'kinhdoanh@triviet.net', '311K13, Đường số 8, Khu phố 1, Phường An Phú,Quận 2, Tp.Hồ Chí Minh,Việt Nam', 1, 1529052420);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table mayphatdienphananh.tv.user_online
CREATE TABLE IF NOT EXISTS `user_online` (
  `session_id` varchar(200) NOT NULL,
  `time` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `local` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table mayphatdienphananh.tv.user_online: ~2 rows (approximately)
/*!40000 ALTER TABLE `user_online` DISABLE KEYS */;
INSERT INTO `user_online` (`session_id`, `time`, `local`) VALUES
	('ks7u9e6o8s85g9o3tqsmg2dfbv6rqgtc', '1603176951', '/mayphatdienphananh/index.php/$l'),
	('67drb52rku951urfjvq2lglh8poq62hu', '1603177677', '/mayphatdienphananh/index.php');
/*!40000 ALTER TABLE `user_online` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
