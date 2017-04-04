-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 11:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joker`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(50) NOT NULL,
  `a_title` text COLLATE utf8_unicode_ci NOT NULL,
  `a_content` text COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(50) NOT NULL,
  `a_description` text COLLATE utf8_unicode_ci NOT NULL,
  `a_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `a_imgBlog` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `a_img` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `a_thumbnail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `c_id` int(50) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `seo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `a_tag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `highlight` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `a_title`, `a_content`, `u_id`, `a_description`, `a_image`, `a_imgBlog`, `a_img`, `a_thumbnail`, `c_id`, `cate_id`, `seo`, `a_tag`, `highlight`, `view`, `created_at`, `updated_at`) VALUES
(12, 'Từ 2018, muốn hưởng lương hưu tối đa phải đóng thêm 5 năm BHXH', '<p>Luật Bảo hiểm x&atilde; hội 2014 quy định lộ tr&igrave;nh tăng dần thời gian đ&oacute;ng bảo hiểm x&atilde; hội (BHXH) để hưởng lương hưu tối đa.&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href="http://vnexpress.net/infographics/thoi-su/nguoi-ve-huu-duoc-huong-luong-nhu-the-nao-3335725.html"><img alt="tu-2018-muon-huong-luong-huu-toi-da-phai-dong-them-5-nam-bhxh" src="http://img.f29.vnecdn.net/2017/04/03/LuonghuuBHXH-3-1451460727-8742-1491183827.jpg" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Người về hưu được hưởng lương ra sao (<a href="http://vnexpress.net/infographics/thoi-su/nguoi-ve-huu-duoc-huong-luong-nhu-the-nao-3335725.html">Xem chi tiết</a>). Đồ họa:&nbsp;<em>Tiến Th&agrave;nh.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Từ 1/1/2018, lao động nữ nghỉ hưu khi đ&oacute;ng đủ 15 năm BHXH hưởng lương hưu bằng 45% mức b&igrave;nh qu&acirc;n tiền lương th&aacute;ng đ&oacute;ng BHXH. Từ năm thứ 16 trở đi, mức hưởng BHXH tăng th&ecirc;m 2%; đ&oacute;ng đủ 30 năm được hưởng lương hưu tối đa 75% thay v&igrave; 25 năm như hiện nay.</p>\r\n\r\n<p>Hiện lao động nam đ&oacute;ng 15 năm BHXH hưởng lương hưu 45% b&igrave;nh qu&acirc;n tiền lương th&aacute;ng đ&oacute;ng BHXH. Từ 1/1/2018, để hưởng mức tr&ecirc;n, lao động nam phải đ&oacute;ng đủ 16 năm; tới 2022 phải tham gia 20 năm BHXH mới được hưởng mức 45%. Muốn hưởng lương hưu ở mức tối đa 75%, lao động nam phải đ&oacute;ng bảo hiểm 35 năm, thay v&igrave; 30 năm như hiện nay.&nbsp;</p>\r\n\r\n<p>Lao động nam nghỉ hưu trong năm 2018 đ&oacute;ng đủ 31 năm BHXH hưởng lương hưu tối đa 75% b&igrave;nh qu&acirc;n tiền lương th&aacute;ng đ&oacute;ng BHXH. Nếu lao động nam nghỉ hưu từ năm 2019, 2020, 2021 v&agrave; 2022 trở đi phải đ&oacute;ng tương ứng từ 32 đến 35 năm BHXH mới được hưởng 75%.</p>\r\n\r\n<p>Muốn hưởng lương hưu tối đa 75%, người lao động đ&oacute;ng BHXH th&ecirc;m 5 năm nữa so với hiện nay. Mỗi năm nghỉ hưu trước tuổi theo quy định th&igrave; bị trừ 2%.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href="http://vnexpress.net/infographics/thoi-su/lao-dong-bi-tru-nhung-khoan-nao-trong-luong-3334258.html"><img alt="tu-2018-muon-huong-luong-huu-toi-da-phai-dong-them-5-nam-bhxh-1" src="http://img.f29.vnecdn.net/2017/04/03/baohiem1-6066-1491183827.jpg" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&aacute;c khoản người lao động bị trừ trong lương (<a href="http://vnexpress.net/infographics/thoi-su/lao-dong-bi-tru-nhung-khoan-nao-trong-luong-3334258.html">Xem chi tiết</a>). Đồ hoạ:&nbsp;<em>Tiến Th&agrave;nh.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>&Ocirc;ng B&ugrave;i Sỹ Lợi, Ph&oacute; chủ nhiệm Ủy ban C&aacute;c vấn đề x&atilde; hội nhận định t<strong>heo c&aacute;ch t&iacute;nh mới, lương hưu của người lao động sẽ bị giảm &iacute;t nhiề</strong>u,&nbsp;</strong>nhất l&agrave; lao động khu vực tư gồm doanh nghiệp, tư nh&acirc;n.&nbsp;Song &ocirc;ng khẳng định, kh&ocirc;ng phải ai nghỉ hưu trước năm 2018 đều c&oacute; lợi hơn so với người nghỉ hưu từ 2018 trở đi. Bởi lương hưu phụ thuộc nhiều yếu tố như tỷ lệ hưởng, tiền lương đ&oacute;ng BHXH b&igrave;nh qu&acirc;n, thời điểm hưởng, thời gian hưởng lương hưu...</p>\r\n\r\n<p>&Ocirc;ng Lợi ph&acirc;n t&iacute;ch, Luật BHXH 2014 đ&atilde; quy định<a href="http://vnexpress.net/tin-tuc/thoi-su/tu-1-1-2016-muc-dong-bao-hiem-xa-hoi-thay-doi-the-nao-3329622.html">&nbsp;tăng tiền lương th&aacute;ng đ&oacute;ng BHXH bắt buộc</a>&nbsp;n&ecirc;n lương hưu sẽ cao hơn. Cụ thể, từ 1/1/2016 đến hết 2017, mức đ&oacute;ng dựa tr&ecirc;n lương cộng phụ cấp ghi trong hợp đồng lao động. Từ 1/1/2018 trở đi, mức đ&oacute;ng dựa tr&ecirc;n lương c&ugrave;ng phụ cấp v&agrave; c&aacute;c khoản bổ sung ghi trong hợp đồng lao động.&nbsp;</p>\r\n\r\n<p>Phụ cấp được x&aacute;c định l&agrave; c&aacute;c khoản cố định, &iacute;t biến động, gồm tiền để b&ugrave; đắp điều kiện lao động, t&iacute;nh chất phức tạp c&ocirc;ng việc, điều kiện sinh hoạt, mức độ thu h&uacute;t lao động m&agrave; lương thỏa thuận trong hợp đồng chưa t&iacute;nh đến hoặc t&iacute;nh chưa đầy đủ.&nbsp;H&agrave;ng th&aacute;ng, người lao động đ&oacute;ng 8%, c&ograve;n lại 18% sẽ do người sử dụng lao động đ&oacute;ng, tổng cộng 26% đ&oacute;ng v&agrave;o quỹ BHXH.</p>\r\n\r\n<p>&quot;Chưa kể lương tối thiểu v&ugrave;ng năm n&agrave;o cũng được điều chỉnh v&agrave; lương cơ sở c&oacute; lộ tr&igrave;nh tăng&quot;, &ocirc;ng n&oacute;i.</p>\r\n\r\n<p>Luật cũng quy định từ 1/1/2016, c&ocirc;ng chức, vi&ecirc;n chức tham gia BHXH lấy lương b&igrave;nh qu&acirc;n 15 năm cuối để l&agrave;m căn cứ t&iacute;nh hưởng lương hưu thay v&igrave; 5 năm cuối như trước đ&acirc;y. Căn cứ t&iacute;nh lương hưu cho người lao động trong doanh nghiệp l&agrave; b&igrave;nh qu&acirc;n cả qu&aacute; tr&igrave;nh đ&oacute;ng.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href="http://vnexpress.net/infographics/thoi-su/vi-sao-quy-huu-tri-mat-can-doi-3487564.html"><img alt="tu-2018-muon-huong-luong-huu-toi-da-phai-dong-them-5-nam-bhxh-2" src="http://img.f29.vnecdn.net/2017/04/03/huutri-3604-1491183828.jpg" /></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Những nguy&ecirc;n nh&acirc;n được cho l&agrave; khiến quỹ hưu tr&iacute; mất c&acirc;n đối (<a href="http://vnexpress.net/infographics/thoi-su/vi-sao-quy-huu-tri-mat-can-doi-3487564.html">Xem chi tiết</a>). Đồ hoạ:&nbsp;<em>Tiến Th&agrave;nh.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Theo quy định, h&agrave;ng th&aacute;ng chủ doanh nghiệp v&agrave; người lao động đ&oacute;ng v&agrave;o quỹ hưu tr&iacute; bằng 22% mức đ&oacute;ng BHXH. Quỹ n&agrave;y hiện mất c&acirc;n đối. Bảo hiểm x&atilde; hội Việt Nam l&yacute; giải do thời gian đ&oacute;ng BHXH ngắn, b&igrave;nh qu&acirc;n 28 năm với nam v&agrave; 23 năm với nữ. Trong khi đ&oacute;, thời gian hưởng lương hưu d&agrave;i, từ 18 đến 25 năm; nợ đọng BHXH l&ecirc;n đến h&agrave;ng chục ngh&igrave;n tỷ&hellip;</p>\r\n\r\n<p>Theo t&iacute;nh to&aacute;n, kết dư quỹ BHXH đang giảm dần, tổng mức chi trả lương hưu hiện lớn hơn tổng mức đ&oacute;ng. Để c&acirc;n đối hai quỹ n&agrave;y, cơ quan quản l&yacute; t&iacute;nh đến c&aacute;c phương &aacute;n<a href="http://vnexpress.net/tin-tuc/thoi-su/tuoi-nghi-huu-nu-co-the-tang-len-58-hoac-60-3481788.html">&nbsp;tăng tuổi nghỉ hưu</a>, tăng thời gian đ&oacute;ng BHXH, thay đổi tỷ lệ hưởng lương hưu để c&acirc;n đối tỷ lệ đ&oacute;ng - hưởng.</p>', 7, 'Từ ngày 1/1/2018, lao động nam đủ 35 năm, nữ 30 năm mới được hưởng lương hưu tối đa 75% thay vì 30 năm và 25 năm như hiện nay.', '7mNM_LuonghuuBHXH.jpg', 'bigPic_7mNM_LuonghuuBHXH.jpg', 'article_7mNM_LuonghuuBHXH.jpg', 'thumbnail_7mNM_LuonghuuBHXH.jpg', 1, 7, 'tu-2018-muon-huong-luong-huu-toi-da-phai-dong-them-5-nam-bhxh', 'lương hưu, bảo hiểm xã hội', 1, 0, '2017-04-03 08:36:43', '2017-04-03 01:36:43'),
(13, 'GAm Optimus: "Dù đã vô địch MDCS nhưng mình vẫn chưa hài lòng với màn trình diễn đêm nay của đội"', '<p>Ch&uacute;c mừng c&aacute;c bạn đ&atilde; gi&agrave;nh chức v&ocirc; địch MDCS m&ugrave;a Xu&acirc;n 2017!</p>\r\n\r\n<p><strong>Đầu ti&ecirc;n, c&aacute;c bạn cảm thấy thế n&agrave;o về kh&aacute;n giả v&agrave; kh&ocirc;ng kh&iacute; của ng&agrave;y thi đấu h&ocirc;m nay?</strong></p>\r\n\r\n<p><strong>Levi</strong>: Em cảm thấy kh&aacute;n giả h&ocirc;m nay v&ocirc; c&ugrave;ng cuồng nhiệt, ch&iacute;nh điều đ&oacute; đ&atilde; tiếp sức cho bọn m&igrave;nh rất nhiều.</p>\r\n\r\n<p><strong>Archie</strong>: Kh&aacute;n giả năm nay về độ cuồng nhiệt c&oacute; phần &ldquo;&iacute;u&rdquo; hơn so với m&ugrave;a trước.</p>\r\n\r\n<p><img alt="123-16_resize" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123-16_resize-1-507x338.jpg" style="height:400px; width:600px" /></p>\r\n\r\n<p><strong>Ở v&aacute;n đấu đầu ti&ecirc;n, Venus đ&atilde; lựa chọn Nidalee ở vị tr&iacute; đi rừng, tuy nhi&ecirc;n lại kh&ocirc;ng thể cho thấy sự hiệu quả, theo c&aacute;c bạn đ&acirc;y c&oacute; phải sai lầm của YG khiến họ ho&agrave;n to&agrave;n thất bại ở v&aacute;n đấu đ&oacute; kh&ocirc;ng?</strong></p>\r\n\r\n<p><strong>HLV Tinikun</strong>: Thật ra đội m&igrave;nh tập trung nhiều v&agrave;o lối đ&aacute;nh của đội hơn l&agrave; b&ecirc;n đối thủ. V&agrave;&nbsp;đội m&igrave;nh cũng đ&atilde; mắc kh&aacute; nhiều lỗi trong v&aacute;n 1 n&ecirc;n m&igrave;nh cũng kh&ocirc;ng để &yacute; nhiều v&agrave;o lựa chọn Nidalee của Venus.</p>\r\n\r\n<p><strong>Tới v&aacute;n đấu thứ 2, c&aacute;c bạn đ&atilde; bỏ 1 lượt cấm. Đ&oacute; l&agrave; một sự v&ocirc; t&igrave;nh hay chiến thuật của c&aacute;c bạn từ trước?</strong></p>\r\n\r\n<p><strong>HLV Tinikun</strong>: H&igrave;nh như l&agrave; do server giải đấu cũng c&oacute; một số trục trặc n&ecirc;n đội m&igrave;nh kh&ocirc;ng đưa ra được lựa chọn để cấm, chứ kh&ocirc;ng phải l&agrave; li&ecirc;n quan tới chiến thuật.</p>\r\n\r\n<p><img alt="123-17_resize (2)" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123-17_resize-2-507x338.jpg" style="height:400px; width:600px" /></p>\r\n\r\n<p><strong>Trong cả 3 v&aacute;n đấu, c&aacute;c bạn đều quyết định cấm Nami v&agrave; Kled của YG ở những lượt đầu ti&ecirc;n. Đ&acirc;y l&agrave; những vị tướng ảnh hưởng tới chiến thuật của c&aacute;c bạn hay l&agrave; chỉ l&agrave; những vị tướng thuận tay của Nevan v&agrave; Trung?</strong></p>\r\n\r\n<p><strong>HLV Tinikun</strong>: Đối với việc cấm Kled th&igrave; l&agrave; do Stark chưa bao giờ c&oacute; kinh nghiệm đối đầu với vị tướng n&agrave;y n&ecirc;n bọn m&igrave;nh quyết định cấm đi. C&ograve;n về Nami th&igrave; đ&uacute;ng l&agrave; do chiến thuật của đội đ&atilde; đề ra l&agrave; phải cấm.</p>\r\n\r\n<p><strong>Stark chỉ mới gia nhập GAM nhưng đ&atilde; phải g&oacute;p mặt trong một trận đấu Offline v&agrave; mang t&iacute;nh chất rất quan trọng, tuy nhi&ecirc;n m&agrave;n tr&igrave;nh diễn của anh ấy l&agrave; kh&aacute; tốt, điều g&igrave; đ&atilde; khiến Stark c&oacute; thể tự tin như vậy?</strong></p>\r\n\r\n<p><strong>Stark</strong>: V&igrave; trong qu&aacute; tr&igrave;nh luyện tập m&igrave;nh thường c&oacute; được c&aacute;c kết quả tốt n&ecirc;n đ&atilde; tự tin hơn khi bước ra s&agrave;n thi đấu.</p>\r\n\r\n<p><strong>Trong v&aacute;n đấu thứ 3, Renekton thực sự như một con qu&aacute;i vật. Đ&oacute; c&oacute; phải vị tướng tốt nhất của Stark kh&ocirc;ng?</strong></p>\r\n\r\n<p><strong>Stark</strong>: Thần C&aacute; Sấu đ&uacute;ng l&agrave; vị tướng m&igrave;nh chơi nhiều nhất trong chế độ xếp hạng, do vậy m&igrave;nh rất tự tin khi mang Renekton ra trong v&aacute;n đấu thứ 3</p>\r\n\r\n<p><img alt="stark" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/stark.jpg" style="height:400px; width:600px" /></p>\r\n\r\n<p><em>Stark đ&atilde; c&oacute; m&agrave;n thể hiện ấn tượng.</em></p>\r\n\r\n<p><strong>D&ugrave; đ&atilde; gi&agrave;nh được chiến thắng ho&agrave;n hảo với tỉ số 3-0, nhưng c&aacute;c bạn c&oacute; cảm thấy m&igrave;nh vẫn c&ograve;n mắc phải những lỗi m&agrave; cần r&uacute;t ra những b&agrave;i học v&agrave; kinh nghiệm sau trận đấu n&agrave;y kh&ocirc;ng?</strong></p>\r\n\r\n<p><strong>Optimus</strong>: M&igrave;nh nghĩ trong trận Chung kết n&agrave;y bọn m&igrave;nh đ&atilde; mắc kh&aacute; nhiều sai lầm, v&agrave; chỉ do YG mắc nhiều sai lầm hơn n&ecirc;n GAM mới c&oacute; thể c&oacute; được chức v&ocirc; địch. Bọn m&igrave;nh sẽ cố gắng khắc phục để mang đến những m&agrave;n tr&igrave;nh diễn thuyết phục hơn ở đấu trường khu vực cũng như quốc tế. Nh&igrave;n chung m&igrave;nh vẫn chưa h&agrave;i l&ograve;ng với m&agrave;n tr&igrave;nh diễn h&ocirc;m nay của đội.</p>\r\n\r\n<p><strong>B&acirc;y giờ c&aacute;c bạn đ&atilde; l&agrave; những nh&agrave; v&ocirc; địch MDCS m&ugrave;a xu&acirc;n 2017. Vậy kế hoạch tiếp theo của c&aacute;c bạn sẽ l&agrave; g&igrave;?</strong></p>\r\n\r\n<p><strong>Archie</strong>: Bọn m&igrave;nh sẽ tiếp tục tập luyện thật kĩ c&agrave;ng v&igrave; sắp tới sẽ phải thi đấu GPL.</p>\r\n\r\n<p><strong>Optimus:</strong>&nbsp;Bọn m&igrave;nh sẽ chăm chỉ tập luyện để&nbsp;thi đấu tốt hơn nữa trong tương lai, v&igrave; vậy mong l&agrave; sẽ c&oacute; được nhiều nh&agrave; t&agrave;i trợ hỗ trợ gi&uacute;p&nbsp;bọn m&igrave;nh c&oacute; thể c&oacute; m&ocirc;i trường tập luyện tốt hơn.</p>\r\n\r\n<p><img alt="17626446_10203410974472568_3653306687769833042_n" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/17626446_10203410974472568_3653306687769833042_n-541x338.jpg" style="height:375px; width:600px" /></p>\r\n\r\n<p><em>GAM sẽ đại diện cho Việt Nam tranh t&agrave;i tại GPL 2017 M&ugrave;a Xu&acirc;n.</em></p>\r\n\r\n<p><strong>C&aacute;c bạn c&oacute; muốn n&oacute;i g&igrave; tới người h&acirc;m mộ &ndash; những người đ&atilde; lu&ocirc;n theo d&otilde;i v&agrave; cổ vũ c&aacute;c bạn kh&ocirc;ng?</strong></p>\r\n\r\n<p><strong>HLV Tinikun:</strong>&nbsp;Trước mỗi trận đấu th&igrave; m&igrave;nh đều nghĩ đến một điều, đ&oacute; l&agrave; với những người đ&atilde; ủng hộ GAM qua c&aacute;c giai đoạn kh&oacute; khăn nếu m&agrave; họ tới đ&acirc;y, họ mặc &aacute;o GAM rồi chứng kiến đội thua trận m&agrave; ra về th&igrave; cảm x&uacute;c của m&igrave;nh đều rất đau l&ograve;ng. Cảm gi&aacute;c đầu ti&ecirc;n khi GAM v&ocirc; địch đối với m&igrave;nh ch&iacute;nh l&agrave; nhẹ nh&otilde;m, bởi v&igrave; &iacute;t nhất l&agrave; đ&atilde; kh&ocirc;ng phụ l&ograve;ng những người h&acirc;m mộ đ&atilde; ủng hộ cho bọn m&igrave;nh.</p>\r\n\r\n<p><strong>Slay:</strong>&nbsp;Em xin gửi lời cảm ơn tới mọi người đ&atilde; cổ vũ cho GAM trong c&aacute;c giai đoạn kh&oacute; khăn.</p>\r\n\r\n<p><strong>Archie:</strong>&nbsp;M&igrave;nh xin cảm ơn c&aacute;c bạn fan h&acirc;m mộ, gia đ&igrave;nh cũng như l&agrave; bạn b&egrave; đ&atilde; ủng hộ m&igrave;nh để m&igrave;nh c&oacute; được động lực đoạt được chức v&ocirc; địch. Đừng qu&ecirc;n ủng hộ bọn m&igrave;nh ở GPL sắp tới cũng như nhớ coi stream của bọn m&igrave;nh nhiều hơn nh&eacute;!</p>\r\n\r\n<p><strong>Stark:</strong>&nbsp;Cảm ơn c&aacute;c bạn đ&atilde; theo d&otilde;i bọn m&igrave;nh trong trận Chung kết cũng như to&agrave;n giải đấu vừa qua. M&igrave;nh xin gửi tặng chiến thắng n&agrave;y cho gia đ&igrave;nh m&igrave;nh.</p>\r\n\r\n<p><strong>Optimus:</strong>&nbsp;M&igrave;nh xin gửi lời c&aacute;m ơn ch&acirc;n th&agrave;nh tới tất cả c&aacute;c bạn đ&atilde; v&agrave; vẫn đang đặt niềm tin v&agrave;o đội tuyển GAM. Những sự cổ vũ, động vi&ecirc;n cũng như t&igrave;nh y&ecirc;u của c&aacute;c bạn sẽ lu&ocirc;n l&agrave; động lực cho bọn m&igrave;nh để c&oacute; thể thi đấu&nbsp;tốt hơn trong tương lai.</p>\r\n\r\n<p><strong>Sergh:</strong>&nbsp;Cảm ơn c&aacute;c bạn đ&atilde; đến ủng hộ cho tụi m&igrave;nh, v&agrave; chắc chắn tụi m&igrave;nh sẽ kh&ocirc;ng l&agrave;m phụ l&ograve;ng c&aacute;c bạn ở GPL sắp tới.</p>\r\n\r\n<p>Cảm ơn GAM đ&atilde; d&agrave;nh thời gian cho buổi phỏng vấn với LM360 v&agrave; ch&uacute;c c&aacute;c bạn sẽ gặp may mắn trong&nbsp;những giải đấu sắp tới!</p>', 7, 'Phần phỏng vấn của LM360 với GAM ngay sau khi đội tuyển này có được chức vô địch MDCS 2017 Mùa Xuân', 'jEzG_17522040_1647626531918822_252939497_o.jpg', 'bigPic_jEzG_17522040_1647626531918822_252939497_o.jpg', 'article_jEzG_17522040_1647626531918822_252939497_o.jpg', 'thumbnail_jEzG_17522040_1647626531918822_252939497_o.jpg', 7, 2, 'gam-optimus-du-da-vo-dich-mdcs-nhung-minh-van-chua-hai-long-voi-man-trinh-dien-dem-nay-cua-doi', 'GAM, MDCS xuân 2017', 1, 0, '2017-04-03 08:46:48', '2017-04-03 01:12:19'),
(14, 'Chán cảnh sống nghèo, tôi muốn bỏ chồng con để cưới người khác', '<p>T&ocirc;i 31 tuổi, chồng bằng tuổi, ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; một b&eacute; trai 5 tuổi. Chồng t&ocirc;i l&agrave;m ăn thất bại v&agrave; c&oacute; qu&atilde;ng thời gian thất nghiệp. Anh kh&ocirc;ng chơi bời, kh&ocirc;ng rượu ch&egrave;, kh&ocirc;ng trai g&aacute;i, chỉ kh&ocirc;ng lo được kinh tế ổn định trong gia đ&igrave;nh v&igrave; hay th&iacute;ch l&agrave;m ăn kinh doanh m&agrave; kh&ocirc;ng t&igrave;m việc g&igrave; đ&oacute; ổn định. Cuộc sống gia đ&igrave;nh ch&uacute;ng t&ocirc;i đ&atilde; kh&oacute; khăn lại phải đi thu&ecirc; nh&agrave;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trước đ&acirc;y t&ocirc;i đ&atilde; phạm phải một sai lầm khi c&oacute; t&igrave;nh một đ&ecirc;m b&ecirc;n ngo&agrave;i, v&igrave; kinh tế gia đ&igrave;nh n&ecirc;n t&ocirc;i cảm thấy ch&aacute;n nản. Khi t&ocirc;i phạm sai lầm v&agrave; nhận lỗi, anh cũng chỉ cười v&agrave; động vi&ecirc;n t&ocirc;i l&agrave;m lại. Anh rất hiền, &iacute;t khi to tiếng với vợ con kể cả trong những l&uacute;c kh&oacute; khăn nhất.&nbsp;C&aacute;ch đ&acirc;y 2 năm, v&igrave; ho&agrave;n cảnh vẫn rất kh&oacute; khăn t&ocirc;i đi l&agrave;m một nơi, c&ograve;n anh đi l&agrave;m ăn xa cũng phải l&ograve;ng một người, anh về th&uacute; nhận v&agrave; n&oacute;i ly h&ocirc;n. T&ocirc;i kh&ocirc;ng n&oacute;i g&igrave; v&agrave; anh cũng chỉ n&oacute;i vậy chứ kh&ocirc;ng ly h&ocirc;n. Sau đ&oacute; ch&uacute;ng t&ocirc;i sống ly th&acirc;n. Giờ t&ocirc;i vẫn đi l&agrave;m ăn xa, thi thoảng muốn th&igrave; gửi tiền về cho con chứ anh cũng kh&ocirc;ng bắt t&ocirc;i phải tr&aacute;ch nhiệm g&igrave;. Anh đang ở với con, chăm s&oacute;c v&agrave; nu&ocirc;i ch&aacute;u. Ch&uacute;ng t&ocirc;i coi như đ&atilde; ly th&acirc;n, anh muốn gia đ&igrave;nh đo&agrave;n tụ nhưng t&ocirc;i kh&ocirc;ng muốn nữa. T&ocirc;i ch&aacute;n cảnh cuộc sống kh&oacute; khăn hiện tại, ch&aacute;n cảnh đi thu&ecirc; nh&agrave;, kh&ocirc;ng c&oacute; tương lai, muốn chấm dứt cảnh n&agrave;y.</p>\r\n\r\n<p>T&ocirc;i c&oacute; quen người đ&agrave;n &ocirc;ng k&eacute;m 3 tuổi, nh&agrave; cửa ổn định, ở gần chỗ t&ocirc;i l&agrave;m. T&ocirc;i đ&atilde; giấu chồng, đưa người đ&oacute; về nh&agrave; bố mẹ ra mắt. T&ocirc;i n&oacute;i dối bố mẹ l&agrave; vợ chồng đ&atilde; ly h&ocirc;n. C&ograve;n với người kia th&igrave; t&ocirc;i n&oacute;i dối m&igrave;nh chưa c&oacute; gia đ&igrave;nh, chưa c&oacute; con. T&ocirc;i &eacute;p gia đ&igrave;nh m&igrave;nh cũng phải n&oacute;i dối. T&ocirc;i đang sống c&ugrave;ng người đ&agrave;n &ocirc;ng n&agrave;y n&ecirc;n kh&ocirc;ng thể về thăm con được, cũng như kh&ocirc;ng thể gọi điện thường xuy&ecirc;n v&igrave; sợ bị lộ. Cuối c&ugrave;ng chồng t&ocirc;i biết chuyện v&igrave; gia đ&igrave;nh t&ocirc;i đ&atilde; b&aacute;o. Chồng n&oacute;i ch&uacute;ng t&ocirc;i chỉ ly th&acirc;n, đang cố gắng n&iacute;u k&eacute;o chứ chưa hề ly h&ocirc;n. Giờ t&ocirc;i quay về anh vẫn chấp nhận. Anh c&ograve;n động vi&ecirc;n gia đ&igrave;nh cứ l&agrave;m theo &yacute; t&ocirc;i, cứ n&oacute;i dối để l&agrave;m đ&aacute;m cưới cho t&ocirc;i vui vẻ.</p>\r\n\r\n<p>Về mặt đứa con, anh y&ecirc;u cầu t&ocirc;i phải viết đơn xin từ bỏ quyền l&agrave;m mẹ v&igrave; t&ocirc;i đ&atilde; kh&ocirc;ng c&ocirc;ng nhận con. T&ocirc;i n&oacute;i dối mọi người nơi m&igrave;nh đang l&agrave;m l&agrave; bản th&acirc;n chưa c&oacute; con, nay v&igrave; lấy chồng mới t&ocirc;i lại giấu tiếp, v&igrave; thế việc t&ocirc;i đi lấy chồng kh&aacute;c m&agrave; vẫn quan t&acirc;m đến con l&agrave; điều kh&ocirc;ng thể. Việc chồng l&agrave;m được duy nhất cho t&ocirc;i l&uacute;c n&agrave;y l&agrave; kh&ocirc;ng ngăn cản, kh&ocirc;ng kiện tụng g&igrave; cả, bởi t&ocirc;i đi lấy chồng kh&aacute;c m&agrave; chưa ly h&ocirc;n l&agrave; sai ph&aacute;p luật. T&ocirc;i cũng kh&ocirc;ng biết phải l&agrave;m sao b&acirc;y giờ v&igrave; vẫn thương con, nhưng t&ocirc;i cũng muốn l&agrave; g&aacute;i chưa chồng để đi lấy chồng kh&aacute;c. Mong mọi người tư vấn gi&uacute;p t&ocirc;i với.</p>', 7, 'Việc chồng làm được duy nhất cho tôi lúc này là không ngăn cản, không kiện tụng gì cả, bởi tôi đi lấy chồng khác mà chưa ly hôn là sai luật.', 'HKm4_cobac-1491141923-2415-1491141997_490x294.jpg', 'bigPic_HKm4_cobac-1491141923-2415-1491141997_490x294.jpg', 'article_HKm4_cobac-1491141923-2415-1491141997_490x294.jpg', 'thumbnail_HKm4_cobac-1491141923-2415-1491141997_490x294.jpg', 13, 3, 'chan-canh-song-ngheo-toi-muon-bo-chong-con-de-cuoi-nguoi-khac', 'Chán', 1, 0, '2017-04-03 01:35:07', '2017-04-03 01:35:07'),
(15, '[Chung kết MDCS mùa xuân 2017] YG 0-3 GAM:', '<h2>V&aacute;n 1</h2>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-2-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Bước v&agrave;o v&aacute;n đấu đầu ti&ecirc;n, đội h&igrave;nh của cả 2 đội kh&ocirc;ng c&oacute; sự bất ngờ n&agrave;o, vẫn l&agrave; những gương mặt quen thuộc trong c&aacute;c trận đấu gần đ&acirc;y của GAM v&agrave; YG. Với GAM, lựa chọn cho m&igrave;nh một đội h&igrave;nh với thi&ecirc;n hướng giao tranh tổng v&agrave; kh&aacute; mạnh ở giai đoạn giữa tới cuối trận, c&ograve;n b&ecirc;n ph&iacute;a YG, đ&atilde; từ rất l&acirc;u rồi ch&uacute;ng ta mới thấy Nidalee xuất hiện ở vị tr&iacute; đi rừng v&agrave; Venus đ&atilde; lựa chọn vị tướng n&agrave;y, c&ograve;n Naul đ&atilde; quyết định lựa chọn Jayce ở vị tr&iacute; đường giữa.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 4</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-3-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Một pha giao tranh lớn được diễn ra từ những ph&uacute;t kh&aacute; sớm sau một t&igrave;nh huống Optimus di chuyển xuống đường dưới v&agrave; c&oacute; cho m&igrave;nh điểm hạ gục đầu ti&ecirc;n, YG cũng quyết định sử dụng dịch chuyển c&ugrave;ng sự c&oacute; mặt của Nidalee, nhưng họ kh&ocirc;ng thể l&agrave;m g&igrave; th&ecirc;m m&agrave; c&ograve;n phải bỏ lại th&ecirc;m 2 điểm hạ gục của Nevan v&agrave; BigKoro. V&agrave; đặc biệt sau pha giao tranh, Optimus c&oacute; cho m&igrave;nh 2 điểm hạ gục, kh&aacute; nhiều lợi thế cho tuyển thủ đường giữa của GAM.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 13</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-4-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Mặc d&ugrave; GAM lấy được cho m&igrave;nh trụ đầu ti&ecirc;n của v&aacute;n đấu, nhưng Nidalee cũng đ&atilde; rất nhanh ch&oacute;ng đem về b&ugrave;a lợi rồng lửa đầu ti&ecirc;n cho YG.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 14</strong></p>\r\n\r\n<p>GAM đ&atilde; c&oacute; một pha băng trụ sai lầm khi Levi v&agrave; Stark quyết định bắt Nevan, d&ugrave; hạ gục được Nautilus nhưng cả Elise v&agrave; Rumble đều phải nằm xuống v&agrave; 2 điểm hạ gục n&agrave;y lại rơi v&agrave;o tay Jayce của Naul.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 16</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-5-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Lại một pha giao tranh 5 người đến từ cả 2 đội diễn ra ở đường dưới, đội c&oacute; lợi thế vẫn l&agrave; GAM khi họ chỉ phải bỏ lại Optimus nhưng lấy được tới 3 điểm hạ gục b&ecirc;n ph&iacute;a YG, lấy được cả trụ thứ 2 đường dưới, lượng tiền ch&ecirc;nh lệch l&uacute;c n&agrave;y đ&atilde; l&agrave; 4 ngh&igrave;n tiền nghi&ecirc;ng về ph&iacute;a GAM.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 20</strong></p>\r\n\r\n<p>Với việc kiểm so&aacute;t tốt tầm nh&igrave;n, b&ugrave;a lợi rồng thứ 2 của v&aacute;n đấu đ&atilde; thuộc về GAM.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 23</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-6-600x336.png" style="height:336px; width:600px" /></p>\r\n\r\n<p>D&ugrave; l&agrave; những người chủ động khi Nevan quyết định dịch chuyển chặn đường lui về của GAM, nhưng với một đội h&igrave;nh giao tranh tổng mạnh hơn, GAM đ&atilde; c&oacute; một pha qu&eacute;t sạch m&agrave; chỉ mất duy nhất 1 điểm hạ gục của Syndra. C&ugrave;ng với đ&oacute; b&ugrave;a lợi Baron cũng thuộc về GAM, lượng tiền ch&ecirc;nh lệch đ&atilde; l&ecirc;n tới con số 10 ngh&igrave;n tiền.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 25</strong></p>\r\n\r\n<p>Với qu&aacute; nhiều lợi thế, GAM đẩy thẳng v&agrave;o đường giữa v&agrave; c&oacute; cho họ nh&agrave; l&iacute;nh đầu ti&ecirc;n.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 29</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-7-600x336.png" style="height:336px; width:600px" /></p>\r\n\r\n<p>Qu&aacute; &aacute;p đảo, một trận đấu m&agrave; YG c&ograve;n kh&ocirc;ng thể lấy được một trụ n&agrave;o của đội tuyển GAM, tiếp tục đẩy thẳng đường tr&ecirc;n v&agrave; kh&ocirc;ng cho YG c&oacute; một cơ hội n&agrave;o nữa trong v&aacute;n đấu đầu ti&ecirc;n, GAM ph&aacute; hủy nh&agrave; ch&iacute;nh ở ph&uacute;t thứ 29. 1-0 nghi&ecirc;ng về ph&iacute;a GAM.</p>\r\n\r\n<h2>V&aacute;n 2</h2>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-8-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Sang v&aacute;n đấu thứ 2, kh&ocirc;ng c&oacute; sự đổi n&agrave;o về mặt nh&acirc;n sự, với GAM họ quyết định lựa chọn một đội h&igrave;nh m&agrave; ở v&aacute;n đấu thứ nhất YG đ&atilde; chọn nhưng vận h&agrave;nh kh&ocirc;ng th&agrave;nh c&ocirc;ng, đ&oacute; l&agrave; một đội h&igrave;nh k&eacute;o m&aacute;u từ xa với Jayce c&ugrave;ng Varus. C&ograve;n với YG, Venus đ&atilde; c&oacute; con b&agrave;i tủ Lee Sin, cặp đ&ocirc;i đường dưới cũng l&agrave; bộ đ&ocirc;i rất mạnh Ezreal c&ugrave;ng Lulu, chỉ c&oacute; đường tr&ecirc;n của YG c&oacute; phần thua thiệt một ch&uacute;t ở giai đoạn đi đường khi Maokai phải đối đầu với Rumble.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 3</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-9-600x336.png" style="height:336px; width:600px" /></p>\r\n\r\n<p>Một t&igrave;nh huống băng trụ 3 người đến từ GAM khi Levi c&ugrave;ng Archie di chuyển ra đường giữa, d&ugrave; chiến c&ocirc;ng đầu đ&atilde; thuộc về Graves của Levi nhưng Nevan với một t&igrave;nh huống dịch chuyển đ&atilde; hạ gục cả Levi v&agrave; Archie để giữ lại 2 điểm hạ gục cho YG.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 5</strong></p>\r\n\r\n<p>Một lần nữa cả hai người đi rừng của 2 đội đều xuất hiện ở đường tr&ecirc;n, nhưng Optimus đ&atilde; l&agrave;m n&ecirc;n điều kh&aacute;c biệt khi quyết định cũng di chuyển l&ecirc;n đường tr&ecirc;n mặc cho Naul đẩy một lượng l&iacute;nh lớn ở đường giữa, Optimus đ&atilde; đ&uacute;ng khi anh đ&atilde; c&oacute; được 2 điểm hạ gục tới từ Maokai v&agrave; Lee Sin trong t&igrave;nh huống n&agrave;y.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 7</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-10-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Một t&igrave;nh huống tranh thủ với khả năng c&oacute; thể vượt địa h&igrave;nh của Graves, Levi lấy b&ugrave;a lợi rồng lửa đầu ti&ecirc;n của v&aacute;n đấu về cho GAM.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 13</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-11-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>GAM đ&atilde; lấy được c&aacute;i trụ thứ 4 của v&aacute;n đấu n&agrave;y cho m&igrave;nh, lượng tiền ch&ecirc;nh lệch l&uacute;c n&agrave;y l&agrave; 5 ngh&igrave;n tiền nghi&ecirc;ng về ph&iacute;a GAM.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 22</strong></p>\r\n\r\n<p>Sau khi c&oacute; qu&aacute; nhiều lợi thế cho m&igrave;nh, từ tiền cho tới b&ugrave;a lợi rồng, GAM đẩy thẳng v&agrave;o đường giữa v&agrave; c&oacute; cho m&igrave;nh nh&agrave; l&iacute;nh đầu ti&ecirc;n.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 26</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-12-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>B&ugrave;a lợi Baron thuộc về GAM một c&aacute;ch dễ d&agrave;ng sau khi Venus v&agrave; Trung của YG đ&atilde; phải nằm xuống.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 27</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-13-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>V&agrave; một lần nữa, GAM tiếp tục thể hiện sự hủy diệt của m&igrave;nh với YG ở v&aacute;n đấu thứ 2 n&agrave;y. Kết th&uacute;c v&aacute;n đấu ở ph&uacute;t thứ 27, tỉ số hiện tại l&agrave; 2-0 nghi&ecirc;ng về GAM.</p>\r\n\r\n<h2>V&aacute;n 3</h2>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-14-600x335.png" style="height:335px; width:600px" /></p>\r\n\r\n<p>Bước v&agrave;o v&aacute;n đấu quyết định cuối c&ugrave;ng, đội h&igrave;nh của GAM kh&ocirc;ng c&oacute; qu&aacute; nhiều thay đổi khi vẫn hướng tới việc k&eacute;o m&aacute;u từ xa, kh&ocirc;ng c&ograve;n g&igrave; để mất ở v&aacute;n đấu n&agrave;y YG&nbsp;đ&atilde; quyết định sử dụng tất cả l&agrave; c&aacute;c vị tướng đều c&oacute; khả năng g&acirc;y s&aacute;t thương v&agrave; kh&ocirc;ng c&oacute; ai chống chịu, một canh bạc cuối của đội tuyển YG.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 3</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-15-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Với 2 vị tướng đều c&oacute; kĩ năng khống chế ở ngay những cấp độ đầu, kh&ocirc;ng c&oacute; cơ hội n&agrave;o cho Nevan trong t&igrave;nh huống n&agrave;y, điểm hạ gục đầu ti&ecirc;n thuộc về Renekton của Stark.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 6</strong></p>\r\n\r\n<p>Lại một lần nữa Levi gh&eacute; thăm đường tr&ecirc;n, Nevan tiếp tục phải nằm xuống, v&agrave; lần n&agrave;y kh&ocirc;ng chỉ l&agrave; 1 điểm hạ gục m&agrave; c&ugrave;ng với đ&oacute; l&agrave; trụ đầu ti&ecirc;n của v&aacute;n đấu ở đường tr&ecirc;n cũng bị ph&aacute; hủy.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 11</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-16-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Một m&igrave;nh Stark hạ gục cả đường tr&ecirc;n v&agrave; đường dưới của YG kể cả l&agrave; đang ở trong tru, thực sự một con qu&aacute;i vật đ&atilde; xuất hiện.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 16</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-17-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>Một lần nữa, Stark lại thể hiện sức mạnh của Renekton trong tay m&igrave;nh khi quyết định một m&igrave;nh &ldquo;c&acirc;n&rdquo; 2 người của YG, nhưng Stark đ&atilde; phải nằm xuống, tuy nhi&ecirc;n Levi kịp thời &ldquo;gỡ gạc&rdquo; bằng việc lấy được 2 điểm hạ gục ngay sau đ&oacute;. Lượng tiền ch&ecirc;nh lệch l&agrave; 5 ngh&igrave;n tiền, cả hai đội đều thi đấu kh&aacute; cởi mở.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 21</strong></p>\r\n\r\n<p>Sau khi li&ecirc;n tục mắc lỗi v&agrave; để YG c&oacute; được những điểm hạ gục, Venus nhanh ch&oacute;ng lấy được b&ugrave;a lợi rồng đỏ cho YG.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 22</strong></p>\r\n\r\n<p>Tuy nhi&ecirc;n, nh&agrave; l&iacute;nh đầu ti&ecirc;n ở đường tr&ecirc;n của đội tuyển YG lại bị ph&aacute; hủy ngay sau đ&oacute;. V&agrave; GAM vẫn chưa dừng lại đ&oacute; khi c&oacute; được th&ecirc;m nh&agrave; l&iacute;nh đường giữa. Qu&aacute; nhiều lợi thế cho GAM.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 26</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-18-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>MỘT T&Igrave;NH HUỐNG GIAO TRANH RẤT LỚN diễn ra xung quanh khu vực Baron, Levi l&agrave; người gi&agrave;nh được b&ugrave;a lợi Baron nhưng ngay sau đ&oacute; tất cả th&agrave;nh vi&ecirc;n của đội tuyển GAM đều phải nằm xuống trong khi YG chỉ phải bỏ lại 3 điểm hạ gục.</p>\r\n\r\n<p><strong>Ph&uacute;t thứ 29</strong></p>\r\n\r\n<p><img alt="1" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/1-19-600x338.png" style="height:338px; width:600px" /></p>\r\n\r\n<p>NHƯNG TRONG MỘT T&Igrave;NH HUỐNG SAI LẦM KHI CỐ GẮNG BẮT RENEKTON Ở ĐƯỜNG GIỮA, YG đ&atilde; phải trả gi&aacute; khi Nevan v&agrave; BigKoro phải nằm xuống, k&eacute;o theo đ&oacute; l&agrave; một pha qu&eacute;t sạch đến từ GAM để kh&ocirc;ng c&ograve;n g&igrave; c&oacute; thể cản trở họ ph&aacute; hủy nh&agrave; ch&iacute;nh của YG. Một chiến thắng ho&agrave;n hảo 3-0 gi&agrave;nh cho GAM, v&agrave; GAM đ&atilde; ch&iacute;nh thức trở th&agrave;nh đội v&ocirc; địch MDCS m&ugrave;a xu&acirc;n 2017 n&agrave;y.</p>', 7, 'GAM đã cho thấy một bộ mặt rất khác so với lần gần nhất đụng độ đội tuyển YG!', 'OKhp_12.jpg', 'bigPic_OKhp_12.jpg', 'article_OKhp_12.jpg', 'thumbnail_OKhp_12.jpg', 7, 2, '-chung-ket-mdcs-mua-xuan-2017-yg-0-3-gam-', 'final, MDCS xuân 2017, GAM', 1, 0, '2017-04-03 01:49:46', '2017-04-03 01:49:46'),
(16, 'Robot khổng lồ thi công nhà ga metro ngầm như thế nào?', '<p>Robot đ&agrave;o ngầm khổng lồ bao gồm m&aacute;y khoan, băng chuyền giải ph&oacute;ng đất, cụm m&aacute;y l&aacute;t b&ecirc; t&ocirc;ng v&agrave; hệ thống tiếp vận. Tất cả hoạt động trong một khối thống nhất, bảo đảm đường hầm nh&agrave; ga metro được gia cố ngay khi vừa đ&agrave;o xong, tr&aacute;nh nguy cơ sập hầm.</p>', 7, 'Robot đào ngầm là tổ hợp thiết bị gồm máy khoan, hệ thống lát bê tông đúc sẵn, động cơ đẩy và tàu tiếp vận, bảo đảm thi công nhà ga metro ngầm không gián đoạn.', 'H6fc_nguyen-ly-hoat-dong-cua-robot-dao-ham-khong-lo-1491204795_490x294.jpg', 'bigPic_H6fc_nguyen-ly-hoat-dong-cua-robot-dao-ham-khong-lo-1491204795_490x294.jpg', 'article_H6fc_nguyen-ly-hoat-dong-cua-robot-dao-ham-khong-lo-1491204795_490x294.jpg', 'thumbnail_H6fc_nguyen-ly-hoat-dong-cua-robot-dao-ham-khong-lo-1491204795_490x294.jpg', 3, 7, 'robot-khong-lo-thi-cong-nha-ga-metro-ngam-nhu-the-nao-', 'robot', 1, 0, '2017-04-03 01:51:37', '2017-04-03 01:51:37'),
(17, 'Các tài tử gạo cội gốc Hoa tuổi già sống trong bệnh tật', '<p><strong>Kim Si&ecirc;u Quần</strong></p>\r\n\r\n<p>Diễn vi&ecirc;n&nbsp;<em>Bao Thanh Thi&ecirc;n</em>&nbsp;gần đ&acirc;y phải phẫu thuật v&igrave; khối u 10 cm ở đầu. Đỉnh đầu &ocirc;ng c&oacute; vết sẹo lớn h&igrave;nh chữ L. Hiện Kim Si&ecirc;u Quần gầy đi nhiều song lu&ocirc;n giữ tinh thần lạc quan.</p>\r\n\r\n<p>*&nbsp;<strong>Kim Si&ecirc;u Quần trong vai Bao Thanh Thi&ecirc;n</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Ettoday</em>&nbsp;cho hay những năm qua Kim Si&ecirc;u Quần bệnh tật nhiều. &Ocirc;ng mắc chứng ngừng thở l&uacute;c ngủ, v&igrave; thế khi ngủ lu&ocirc;n phải đeo thiết bị h&ocirc; hấp. V&igrave; vấn đề sức khỏe, năm 2015, Kim Si&ecirc;u Quần kh&ocirc;ng thể đ&oacute;ng loạt phim mới về Bao Thanh Thi&ecirc;n.</p>\r\n\r\n<p>Kim Si&ecirc;u Quần từng cho biết trước khi đ&oacute;ng&nbsp;<em>Bao Thanh Thi&ecirc;n</em>, &ocirc;ng ăn nhiều để to b&eacute;o hơn, nhằm thể hiện sự uy vũ của Bao C&ocirc;ng. Tuy nhi&ecirc;n, từ đ&oacute; trở đi nam diễn vi&ecirc;n kh&ocirc;ng thể giảm c&acirc;n. &Ocirc;ng mắc c&aacute;c bệnh huyết &aacute;p cao, đường huyết cao, mỡ m&aacute;u cao. Nhờ c&oacute; vợ từng l&agrave; y t&aacute;, Kim Si&ecirc;u Quần được chăm s&oacute;c theo khoa học, v&igrave; thế t&igrave;nh trạng của &ocirc;ng dần được cải thiện.</p>\r\n\r\n<p><strong>Trần T&ugrave;ng Dũng</strong></p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="cac-tai-tu-gao-coi-goc-hoa-tuoi-gia-song-trong-benh-tat" src="http://img.f9.giaitri.vnecdn.net/2017/04/03/dung-3838-1491192888.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trần T&ugrave;ng Dũng kh&ocirc;ng kết h&ocirc;n,&nbsp;&ocirc;ng thu&ecirc; người đỡ đần &ocirc;ng việc khi ốm yếu.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trần T&ugrave;ng Dũng bị tai biến mạch m&aacute;u n&atilde;o năm 2006, phải nằm viện điều trị thời gian d&agrave;i, từ đ&oacute; sức khỏe giảm s&uacute;t. Hiện &ocirc;ng kh&ocirc;ng thể đứng l&acirc;u hay đi lại nhiều, thường phải ngồi xe lăn.</p>\r\n\r\n<p>Ngo&agrave;i ra, Trần T&ugrave;ng Dũng bị tiểu đường, mắc bệnh tim, thận. Hiện một mắt &ocirc;ng m&ugrave; l&ograve;a, mắt c&ograve;n lại chỉ nh&igrave;n được lờ mờ. &Ocirc;ng dự định phẫu thuật để tr&aacute;nh nguy cơ m&ugrave; cả hai mắt.</p>\r\n\r\n<p>D&ugrave; nhiều bệnh tật, diễn vi&ecirc;n 76 tuổi vẫn giữ&nbsp;<a href="http://giaitri.vnexpress.net/tin-tuc/gioi-sao/quoc-te/tai-tu-phuong-the-ngoc-tu-xa-hoi-den-den-ong-gia-bat-kham-3559812.html" target="_blank">lối sống ph&oacute;ng kho&aacute;ng</a>&nbsp;như thời sung sức. &Ocirc;ng uống nhiều rượu, kh&ocirc;ng ăn ki&ecirc;ng.</p>\r\n\r\n<p>*&nbsp;<strong>Th&agrave;nh Long b&oacute;p cổ, sờ tượng v&agrave;ng của Trần T&ugrave;ng Dũng</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Trần T&ugrave;ng Dũng từng đ&oacute;ng&nbsp;<em>Phương Thế Ngọc</em>,&nbsp;<em>Hắc Kim</em>,&nbsp;<em>Hồng Hy Quan</em>... Phim nổi bật nhất trong sự nghiệp của &ocirc;ng l&agrave;&nbsp;<em>A City of Sadness</em>&nbsp;(<em>Bi t&igrave;nh th&agrave;nh thị</em>) - t&aacute;c phẩm của đạo diễn Hầu Hiếu Hiền. Trần T&ugrave;ng Dũng được chọn đ&oacute;ng l&atilde;o đại trong t&aacute;c phẩm do xuất th&acirc;n x&atilde; hội đen, am hiểu về thế giới ngầm. Phim mang về cho &ocirc;ng danh hiệu&nbsp;<em>Nam diễn vi&ecirc;n ch&iacute;nh xuất sắc</em>&nbsp;giải Kim M&atilde;. Năm đ&oacute; Th&agrave;nh Long cũng được đề cử danh hiệu n&agrave;y. Khi c&ocirc;ng bố Trần T&ugrave;ng Dũng đoạt giải, Th&agrave;nh Long quay sang b&oacute;p cổ đối thủ, chạy l&ecirc;n s&acirc;n khấu sờ tượng Kim M&atilde; n&oacute;i: &quot;T&ocirc;i kh&ocirc;ng đoạt được th&igrave; cho t&ocirc;i sờ một ch&uacute;t&quot;.</p>\r\n\r\n<p><strong>Trương Chấn Ho&agrave;n</strong></p>\r\n\r\n<p>T&agrave;i tử gạo cội Đ&agrave;i Loan mắc bệnh gout nặng, gặp kh&oacute; khăn khi đi lại, v&igrave; thế hiếm khi ra ngo&agrave;i, ngay cả h&agrave;ng x&oacute;m cũng &iacute;t nh&igrave;n thấy &ocirc;ng. B&agrave; chủ một cửa tiệm m&agrave; Trương Chấn Ho&agrave;n từng l&agrave;m thu&ecirc; thường mang đồ ăn cho nam diễn vi&ecirc;n. Mỗi lần gọi cửa, Trương Chấn Ho&agrave;n từ chối gặp mặt, bảo b&agrave; đặt đồ ăn b&ecirc;n ngo&agrave;i rồi &ocirc;ng ra lấy.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Trương Chấn Hoàn là ngôi sao sáng giá Đài Loan thập niên 1980 và đầu thập niên 1990. Ông nổi tiếng với Tiểu Lý phi đao (vai Kinh Vô Mệnh), Thiếu niên Trương Tam Phong (vai Dương Quỹ Sơn), Bao Thanh Thiên (vai Bạch Ngọc Đường), Người tình của Tần Thủy Hoàng (vai Mông Điềm)" src="http://img.f9.giaitri.vnecdn.net/2017/04/03/hoan-4063-1491206824.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trương Chấn Ho&agrave;n l&agrave; ng&ocirc;i sao s&aacute;ng gi&aacute; Đ&agrave;i Loan thập ni&ecirc;n 1980 v&agrave; đầu thập ni&ecirc;n 1990. &Ocirc;ng nổi tiếng với &quot;Tiểu L&yacute; phi đao&quot; (vai Kinh V&ocirc; Mệnh), &quot;Thiếu ni&ecirc;n Trương Tam Phong&quot; (vai Dương Quỹ Sơn), &quot;Bao Thanh Thi&ecirc;n&quot; (vai Bạch Ngọc Đường), &quot;Người t&igrave;nh của Tần Thủy Ho&agrave;ng&quot; (vai M&ocirc;ng Điềm)...</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ở tuổi ngũ tuần, Trương Chấn Ho&agrave;n gặp kh&oacute; khăn kinh tế. Những năm gần đ&acirc;y &ocirc;ng l&agrave;m nhiều nghề mưu sinh như rửa b&aacute;t ở nh&agrave; h&agrave;ng, nh&acirc;n vi&ecirc;n vệ sinh, b&aacute;n b&aacute;nh lề đường... Tuy nhi&ecirc;n, do t&acirc;m l&yacute; bất ổn, t&iacute;nh t&igrave;nh n&oacute;ng nảy, c&aacute;c c&ocirc;ng việc thường kh&ocirc;ng được l&acirc;u d&agrave;i. Nam diễn vi&ecirc;n từng phải quỳ gối cầu xin một c&ocirc;ng ty cho &ocirc;ng cơ hội việc l&agrave;m.&nbsp;</p>\r\n\r\n<p><strong>Ng&ocirc; Mạnh Đạt</strong></p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="cac-tai-tu-gao-coi-goc-hoa-tuoi-gia-song-trong-benh-tat-2" src="http://img.f9.giaitri.vnecdn.net/2017/04/03/dat-1412-1491206824.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ng&ocirc; Mạnh Đạt - Ch&acirc;u Tinh Tr&igrave; l&agrave; &quot;cặp b&agrave;i tr&ugrave;ng&quot; tr&ecirc;n m&agrave;n ảnh. &Ocirc;ng tham gia nhiều phim h&agrave;i như &quot;Th&aacute;nh&nbsp;B&agrave;i&quot;, &quot;Trường&nbsp;học uy long&quot;...</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Năm 2014, Ng&ocirc; Mạnh Đạt được chẩn đo&aacute;n mắc bệnh vi&ecirc;m cơ tim, từ đ&oacute; phải dừng đ&oacute;ng phim để chữa bệnh, tĩnh dưỡng. Những năm gần đ&acirc;y &ocirc;ng &iacute;t xuất hiện ở sự kiện giải tr&iacute;.</p>\r\n\r\n<p>Ng&ocirc; Mạnh Đạt từng chia sẻ tr&ecirc;n&nbsp;<em>Appledaily</em>&nbsp;sau khi ph&aacute;t hiện bệnh, &ocirc;ng tr&acirc;n trọng cuộc sống hơn. Nam diễn vi&ecirc;n cai thuốc l&aacute;, chăm chỉ tập thể dục.</p>\r\n\r\n<p>*&nbsp;<strong>Ng&ocirc; Mạnh Đạt v&agrave; Ch&acirc;u Tinh Tr&igrave; trong &quot;Th&aacute;nh B&agrave;i&quot;</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i bệnh tật, Ng&ocirc; Mạnh Đạt gặp&nbsp;<a href="http://giaitri.vnexpress.net/tin-tuc/gioi-sao/quoc-te/thoi-tre-phong-luu-cua-dien-vien-hai-trong-phim-chau-tinh-tri-3340903.html" target="_blank">g&aacute;nh nặng kinh tế</a>&nbsp;ở tuổi lục tuần. Nam diễn vi&ecirc;n phải chăm lo cho ba gia đ&igrave;nh gồm gia đ&igrave;nh hiện tại c&ugrave;ng hai người vợ cũ. Năm 2015, &ocirc;ng b&aacute;n nh&agrave; để lấy tiền trang trải cuộc sống.</p>\r\n\r\n<p><strong>Lưu Gia Huy</strong></p>\r\n\r\n<p>Năm 2011, Gia Huy bị tr&uacute;ng phong, dẫn đến bại liệt nửa người. Từ khi mắc bệnh, &ocirc;ng bị vợ con hắt hủi. Người vợ quốc tịch Th&aacute;i Lan đ&ograve;i ph&acirc;n chia t&agrave;i sản của &ocirc;ng. Con trai của Gia Huy b&agrave;n với người kh&aacute;c, t&igrave;m c&aacute;ch cuỗm tiền của cha.&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="cac-tai-tu-gao-coi-goc-hoa-tuoi-gia-song-trong-benh-tat-3" src="http://img.f9.giaitri.vnecdn.net/2017/04/03/luu-4244-1491206824.jpg" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ở tuổi lục tuần, ng&ocirc;i sao v&otilde; thuật một thời gắn liền với chiếc xe lăn. &Ocirc;ng cũng kh&ocirc;ng thể ph&aacute;t &acirc;m r&otilde; r&agrave;ng. Nam diễn vi&ecirc;n hiện sống ở viện dưỡng l&atilde;o, được một số bạn b&egrave; trong l&agrave;ng giải tr&iacute; gi&uacute;p đỡ.</p>\r\n\r\n<p>Lưu Gia Huy sinh năm 1955, l&agrave; ng&ocirc;i sao v&otilde; thuật nổi tiếng Hong Kong những năm 1970-1980. &Ocirc;ng nổi danh với c&aacute;c phim&nbsp;<em>T&acirc;y Du K&yacute;</em>&nbsp;(bản TVB),&nbsp;<em>Thiếu L&acirc;m tam thập lục ph&ograve;ng</em>,&nbsp;<em>To&agrave;n cầu nhiệt luyến</em>,&nbsp;<em>Thần đi&ecirc;u đại hiệp</em>&nbsp;1995...</p>', 7, 'Kim Siêu Quần, Trần Tùng Dũng bệnh tật liên miên, Trương Chấn Hoàn, Lưu Gia Huy ốm đau và cô độc.', 'VzB2_gia-3056-1491206824_490x294.jpg', 'bigPic_VzB2_gia-3056-1491206824_490x294.jpg', 'article_VzB2_gia-3056-1491206824_490x294.jpg', 'thumbnail_VzB2_gia-3056-1491206824_490x294.jpg', 13, 3, 'cac-tai-tu-gao-coi-goc-hoa-tuoi-gia-song-trong-benh-tat', 'tài tử', 1, 0, '2017-04-03 01:52:48', '2017-04-03 01:52:48'),
(18, 'Tấn công khủng bố tàu điện ngầm Nga, 10 người chết', '<p>Một thiết bị nổ ph&aacute;t nổ tr&ecirc;n chuyến t&agrave;u điện ngầm từ ga Sennaya tới ga Viện C&ocirc;ng nghệ, th&agrave;nh phố St Petersburg, Nga, v&agrave;o khoảng 14h40 chiều 3/4 l&agrave;m 10 người thiệt mạng v&agrave; 37 người bị thương. Thiết bị nổ được cho l&agrave; tự chế v&agrave; chứa nhiều mảnh nhọn.</p>\r\n\r\n<p>Tổng thống Nga Vladimir Putin gửi lời chia buồn đến gia đ&igrave;nh c&aacute;c nạn nh&acirc;n, tuy&ecirc;n bố sẽ điều tra đầy đủ vụ việc. &quot;Ch&uacute;ng t&ocirc;i đang xem x&eacute;t mọi khả năng, bao gồm cả chủ nghĩa khủng bố&quot;, &ocirc;ng cho biết. Trong khi đ&oacute;, Thủ tướng Nga Dmitry Medvedev cho rằng đ&acirc;y l&agrave; &quot;một vụ tấn c&ocirc;ng khủng bố&quot;.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Hiện trường vụ nổ. Ảnh: Vkontakte." src="http://img.f29.vnecdn.net/2017/04/03/xanh-1-1491225214-1200x0-4941-1491235160.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Hiện trường vụ nổ. Ảnh:&nbsp;<em>Vkontakte.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ngay sau vụ nổ, thị trưởng Moscow lập tức tăng cường an ninh tại c&aacute;c tuyến đường ngầm v&agrave; t&agrave;u điện ngầm ở thủ đ&ocirc;. Nh&agrave; chức tr&aacute;ch St Petersburg th&ocirc;ng b&aacute;o để tang ba ng&agrave;y, bắt đầu từ ng&agrave;y 4/4, để tưởng nhớ c&aacute;c nạn nh&acirc;n trong vụ nổ tr&ecirc;n t&agrave;u điện ngầm.</p>\r\n\r\n<p><em>Cửa sổ toa t&agrave;u ở St Petersburg biến dạng sau vụ nổ</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>M&aacute;y quay an ninh ghi lại h&igrave;nh ảnh một người đ&agrave;n &ocirc;ng c&oacute; r&acirc;u được cho l&agrave; đứng sau vụ nổ.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="Nghi phạm trong vụ nổ ở St Petersburg. Ảnh: Ren TV." src="http://img.f29.vnecdn.net/2017/04/03/C8ft0jVXoAE0Lyg-1981-1491235160.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nghi phạm trong vụ nổ ở St Petersburg. Ảnh:&nbsp;<em>Ren TV.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 7, 'Một thiết bị phát nổ trên một chuyến tàu điện ngầm ở thành phố St Petersburg, Nga, chiều 3/4 làm ít nhất 10 người thiệt mạng.', 'U6Xh_C8fKCUjXUAATCUM-1491223307_490x294.jpg', 'bigPic_U6Xh_C8fKCUjXUAATCUM-1491223307_490x294.jpg', 'article_U6Xh_C8fKCUjXUAATCUM-1491223307_490x294.jpg', 'thumbnail_U6Xh_C8fKCUjXUAATCUM-1491223307_490x294.jpg', 1, 7, 'tan-cong-khung-bo-tau-dien-ngam-nga-10-nguoi-chet', 'Khủng bố, Nga, Tàu điện ngầm', 1, 0, '2017-04-03 17:20:15', '2017-04-03 17:20:15');
INSERT INTO `article` (`a_id`, `a_title`, `a_content`, `u_id`, `a_description`, `a_image`, `a_imgBlog`, `a_img`, `a_thumbnail`, `c_id`, `cate_id`, `seo`, `a_tag`, `highlight`, `view`, `created_at`, `updated_at`) VALUES
(19, 'Mọi điều cần biết về GPL Mùa Xuân 2017', '<p>H&atilde;y chuẩn bị tinh thần sẵn s&agrave;ng cho những trận chiến giữa c&aacute;c đội tuyển h&agrave;ng đầu Đ&ocirc;ng Nam &Aacute; tại giải đấu GPL M&ugrave;a Xu&acirc;n 2017 tới! Khởi tranh v&agrave;o ng&agrave;y 12/04, 6 đội tuyển đại diện cho 6 quốc gia sẽ tranh t&agrave;i tại Taguig, Philippines&nbsp;để t&igrave;m ra nh&agrave; v&ocirc; địch.</p>\r\n\r\n<h2>C&aacute;c đội tuyển tham gia</h2>\r\n\r\n<table align="center" border="1">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="123px-Ascension_Gaminglogo" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123px-Ascension_Gaminglogo.png" style="height:123px; width:123px" /></td>\r\n			<td><img alt="123px-Mineski_logo" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123px-Mineski_logo.png" style="height:123px; width:123px" /></td>\r\n			<td><img alt="123px-Fortius_Logo" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123px-Fortius_Logo.png" style="height:123px; width:123px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Ascension Gaming</strong></p>\r\n\r\n			<p>(Đại diện Th&aacute;i Lan)</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Mineski</strong></p>\r\n\r\n			<p>(Đại diện Philippines)</p>\r\n			</td>\r\n			<td><strong>Fortius Gaming</strong>\r\n			<p>&nbsp;</p>\r\n\r\n			<p>(Đại diện Indonesia)</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td><img alt="123px-Klhlogo" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123px-Klhlogo.png" style="height:98px; width:107px" /></td>\r\n			<td><img alt="123px-Team_Flash_Logo" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123px-Team_Flash_Logo.png" style="height:123px; width:123px" /></td>\r\n			<td><img alt="123px-GIGABYTE_Marines" src="http://img.cdn.ved.com.vn/web/lmht360/wp-content/uploads/2017/04/123px-GIGABYTE_Marines.png" style="height:123px; width:123px" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><strong>Kuala Lumpur Hunters</strong></p>\r\n\r\n			<p>(Đại diện Malaysia)</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>Team Flash</strong></p>\r\n\r\n			<p>(Đại diện Singapore)</p>\r\n			</td>\r\n			<td>\r\n			<p><strong>GIGABYTE Marines</strong></p>\r\n\r\n			<p>(Đại diện Việt Nam)</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h2>Thể thức thi đấu</h2>\r\n\r\n<p>GPL M&ugrave;a Xu&acirc;n 2017 sẽ được chia l&agrave;m 2 v&ograve;ng: V&ograve;ng đấu bảng v&agrave; v&ograve;ng playoffs.</p>\r\n\r\n<p><strong>V&ograve;ng đấu bảng:</strong></p>\r\n\r\n<ul>\r\n	<li>C&aacute;c đội tuyển sẽ đấu v&ograve;ng tr&ograve;n một lượt t&iacute;nh điểm</li>\r\n	<li>C&aacute;c trận đấu sẽ diễn ra theo thể thức Bo1</li>\r\n	<li>4 đội tuyển đứng đầu sẽ đi tiếp v&agrave;o v&ograve;ng playoffs</li>\r\n</ul>\r\n\r\n<p><strong>V&ograve;ng playoffs:</strong></p>\r\n\r\n<ul>\r\n	<li>4 đội tuyển chia cặp đ&aacute;nh 2 trận b&aacute;n kết</li>\r\n	<li>2 đội chiến thắng b&aacute;n kết sẽ lọt v&agrave;o chung kết</li>\r\n	<li>C&aacute;c trận đấu diễn ra theo thể thức Bo5</li>\r\n	<li>Đội v&ocirc; địch sẽ l&agrave; đại diện cho GPL tham dự V&ograve;ng Khởi Động MSI tại CBLOL Studio ở S&atilde;o Paulo, Brazil</li>\r\n</ul>\r\n\r\n<h2>Lịch thi đấu</h2>\r\n\r\n<ul>\r\n	<li>V&ograve;ng bảng sẽ được diễn ra trong 2 ng&agrave;y 12 v&agrave; 13/4.</li>\r\n	<li>V&ograve;ng loại trực tiếp sẽ diễn ra v&agrave;o ng&agrave;y 15/4</li>\r\n	<li>Trận chung kết diễn ra v&agrave;o ng&agrave;y 16/4</li>\r\n</ul>\r\n\r\n<p>Lịch thi đấu cụ thể ch&uacute;ng t&ocirc;i sẽ gửi đến c&aacute;c bạn sau khi Ban Tổ Chức c&oacute; th&ocirc;ng b&aacute;o ch&iacute;nh thức.</p>\r\n\r\n<h2>Đ&oacute;n xem tại đ&acirc;u?</h2>\r\n\r\n<p>Tất cả c&aacute;c trận đấu của giải đấu GPL M&ugrave;a Xu&acirc;n 2017 sẽ được Vietnam Esports TV tường thuật trực tiếp c&ugrave;ng phần b&igrave;nh luận tiếng Việt tại địa chỉ&nbsp;<strong><a href="http://vetv.vn/">http://vetv.vn/</a></strong>&nbsp;v&agrave;&nbsp;<strong><a href="http://garena.live/" target="_blank">Garena Live</a></strong>.&nbsp;C&aacute;c bạn h&atilde;y nhớ ch&uacute; &yacute; đ&oacute;n xem v&agrave; cổ vũ cho đội tuyển GIGABYTE MARINES&nbsp;nh&eacute;.</p>', 7, 'GPL Mùa Xuân 2017, giải đấu dành cho các đội tuyển hàng đầu Đông Nam Á sẽ khởi tranh vào ngày 12/04 tới tại Philippines', 'BMuE_gpl-spring-2017-2-1280x378.jpg', 'bigPic_BMuE_gpl-spring-2017-2-1280x378.jpg', 'article_BMuE_gpl-spring-2017-2-1280x378.jpg', 'thumbnail_BMuE_gpl-spring-2017-2-1280x378.jpg', 7, 2, 'moi-dieu-can-biet-ve-gpl-mua-xuan-2017', 'ascension gaming, Fortius Gaming, GIGABYTE Marines, gpl mua xuan 2017, kuala lumpur hunters, mineski', 1, 0, '2017-04-03 17:21:21', '2017-04-03 17:21:21'),
(20, '17 học sinh ngủ gục trong lớp vì hút shisha', '<p>Ng&agrave;y 3/4, C&ocirc;ng an thị x&atilde; Điện B&agrave;n (Quảng Nam) cho biết đang củng cố hồ sơ để xử l&yacute; hai người b&aacute;n shisha cho học sinh.&nbsp;</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="17-hoc-sinh-ngu-guc-trong-lop-vi-hut-shisha" src="http://img.f29.vnecdn.net/2017/04/03/truongdungsi-6014-1491220037.jpg" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trường THCS Dũng Sĩ Điện Ngọc.&nbsp;Ảnh:&nbsp;<em>Đại Hiệp</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Trước đ&oacute; ng&agrave;y 6/3, l&atilde;nh đạo trường THCS Dũng Sĩ Điện Ngọc (phường Điện Ngọc, thị x&atilde; Điện B&agrave;n) phản &aacute;nh c&oacute; một số học sinh h&uacute;t shisha. C&ocirc;ng an phường xuống x&aacute;c minh, ph&aacute;t hiện 17 em lớp 7 c&oacute; biểu hiện lờ đờ, ngủ gục trong lớp.</p>\r\n\r\n<p>C&ocirc;ng an đ&atilde; tạm giữ một ống kim loại c&oacute; đầu h&uacute;t bằng nhựa, b&ecirc;n trong chứa chất lỏng. Học sinh khai sử dụng loại thuốc l&aacute; điện tử shisha, đặt mua qua mạng x&atilde; hội.</p>\r\n\r\n<p>V&agrave;o cuộc, nh&agrave; chức tr&aacute;ch x&aacute;c định Ng&ocirc; Thị Ho&agrave;ng (17 tuổi, phường Điện Thắng Bắc) mua lại số ống h&uacute;t shisha v&agrave; tinh dầu của Nguyễn Thị Yến Thanh (22 tuổi, phường Vĩnh Điện) v&agrave; b&aacute;n lại cho học sinh.</p>\r\n\r\n<p>Đại t&aacute; L&ecirc; Trung Hai, Trưởng c&ocirc;ng an Điện B&agrave;n cho biết, đ&acirc;y l&agrave; lần đầu ti&ecirc;n ph&aacute;t hiện học sinh h&uacute;t shisha. C&ocirc;ng an huyện đ&atilde; c&oacute; c&ocirc;ng văn đề nghị Ph&ograve;ng Gi&aacute;o dục v&agrave; Đ&agrave;o tạo thị x&atilde; Điện B&agrave;n th&ocirc;ng b&aacute;o cho c&aacute;c trường trung học tr&ecirc;n địa b&agrave;n, c&oacute; kế hoạch tuy&ecirc;n truyền cho học sinh nhằm ngăn chặn kịp thời việc h&uacute;t shisha.</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td>Tổ chức Y tế thế giới cảnh b&aacute;o việc h&uacute;t shisha c&oacute; thể g&acirc;y hại cho sức khỏe người d&ugrave;ng. Khi được đốt ch&aacute;y, shisha tạo ra kh&iacute; CO (carbon monoxide) rất độc hại. Loại kh&iacute; n&agrave;y c&ugrave;ng với lượng nicotine trong shisha sẽ t&agrave;n hại phổi người h&uacute;t về l&acirc;u d&agrave;i v&agrave; g&acirc;y ra c&aacute;c bệnh về đường h&ocirc; hấp, tim, thậm ch&iacute; l&agrave; ung thư. Ngo&agrave;i ra, việc d&ugrave;ng chung ống h&uacute;t shisha, kh&ocirc;ng c&oacute; sự vệ sinh kỹ cũng c&oacute; thể khiến người h&uacute;t bị l&acirc;y nhiễm virus c&uacute;m, virus vi&ecirc;m gan si&ecirc;u vi C.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 7, 'Nhóm học sinh THCS ở Quảng Nam lên mạng đặt mua shisha hút, khi đến lớp học thì lờ đờ, ngủ gục.', 'wyu1_truongdungsi-9589-1491220038_490x294.jpg', 'bigPic_wyu1_truongdungsi-9589-1491220038_490x294.jpg', 'article_wyu1_truongdungsi-9589-1491220038_490x294.jpg', 'thumbnail_wyu1_truongdungsi-9589-1491220038_490x294.jpg', 14, 3, '17-hoc-sinh-ngu-guc-trong-lop-vi-hut-shisha', 'shisha, THPT', 0, 0, '2017-04-03 17:24:52', '2017-04-03 17:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(50) NOT NULL,
  `c_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `c_seo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `c_highlight` int(11) NOT NULL,
  `cate_id` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_seo`, `c_highlight`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức đó đây', 'tin-tuc-do-day', 1, 7, '2017-03-29 03:27:22', '2017-03-28 20:27:22'),
(2, 'Chuyện làng game', 'chuyen-lang-game', 1, 2, '2017-03-27 18:44:57', '2017-03-27 18:44:57'),
(3, 'Khoa học thường thức', 'khoa-hoc-thuong-thuc', 0, 7, '2017-03-27 18:46:02', '2017-03-27 18:46:02'),
(4, 'Cuộc sống số', 'cuoc-song-so', 0, 7, '2017-03-27 18:46:13', '2017-03-27 18:46:13'),
(5, 'Xa luận', 'xa-luan', 0, 7, '2017-03-27 18:46:22', '2017-03-27 18:46:22'),
(6, 'Bạn nên biết', 'ban-nen-biet', 0, 7, '2017-03-27 18:46:28', '2017-03-27 18:46:28'),
(7, 'Liên minh huyền thoại', 'lien-minh-huyen-thoai', 0, 2, '2017-03-27 18:46:36', '2017-03-27 18:46:36'),
(8, 'Võ lâm truyền kỳ - VNG', 'vo-lam-truyen-ky-vng', 0, 2, '2017-03-27 18:46:46', '2017-03-27 18:46:46'),
(9, 'Võ lâm truyền kỳ - Private', 'vo-lam-truyen-ky-private', 0, 2, '2017-03-27 18:46:54', '2017-03-27 18:46:54'),
(10, 'Bí kíp game thủ', 'bi-kip-game-thu', 1, 2, '2017-03-28 02:05:19', '2017-03-27 19:05:19'),
(11, 'Thế giới game', 'the-gioi-game', 0, 2, '2017-03-27 18:47:19', '2017-03-27 18:47:19'),
(12, 'Beauty shots', 'beauty-shots', 0, 4, '2017-03-27 18:47:35', '2017-03-27 18:47:35'),
(13, 'Trà quán', 'tra-quan', 0, 3, '2017-03-27 18:47:43', '2017-03-27 18:47:43'),
(14, 'Có gì hay hôm nay', 'co-gi-hay-hom-nay', 0, 3, '2017-03-27 18:47:56', '2017-03-27 18:47:56'),
(15, 'Đi đâu hôm nay', 'di-dau-hom-nay', 1, 3, '2017-03-28 02:05:29', '2017-03-27 19:05:29'),
(16, 'Ăn gì hôm nay', 'an-gi-hom-nay', 0, 3, '2017-03-28 02:05:35', '2017-03-27 19:05:35'),
(17, 'Đà thành hôm nay', 'da-thanh-hom-nay', 0, 3, '2017-03-27 18:48:19', '2017-03-27 18:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `cate_group`
--

CREATE TABLE `cate_group` (
  `cate_id` int(50) NOT NULL,
  `cate_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cate_seo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cate_group`
--

INSERT INTO `cate_group` (`cate_id`, `cate_name`, `cate_seo`, `created_at`, `updated_at`) VALUES
(2, 'Tin game', 'tin-game', '2017-03-24 19:25:04', '2017-03-24 19:25:04'),
(3, 'Blog', 'blog', '2017-03-24 19:25:13', '2017-03-24 19:25:13'),
(4, 'Photograph', 'photograph', '2017-03-24 19:25:25', '2017-03-24 19:25:25'),
(7, 'Tin tức', 'tin-tuc', '2017-03-24 20:11:42', '2017-03-24 20:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cm_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cm_content` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`cm_id`, `u_id`, `a_id`, `created_at`, `updated_at`, `cm_content`) VALUES
(1, 7, 1, '2017-03-30 08:13:09', '0000-00-00 00:00:00', 'Bài hay quá'),
(2, 7, 1, '2017-03-30 08:13:09', '0000-00-00 00:00:00', 'Bài hay ghê');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `i_id` int(10) NOT NULL,
  `i_preview` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `i_full` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `i_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `i_view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`i_id`, `i_preview`, `i_full`, `u_id`, `c_id`, `created_at`, `updated_at`, `i_title`, `i_view`) VALUES
(3, 'preview_u6lp_cobac-1491141923-2415-1491141997_490x294.jpg', 'u6lp_cobac-1491141923-2415-1491141997_490x294.jpg', 7, NULL, '2017-04-03 02:38:36', '2017-04-03 02:38:36', 'Thử cái', NULL),
(4, 'preview_QSnh_7161827032_41a660efbb_b.jpg', 'QSnh_7161827032_41a660efbb_b.jpg', 7, NULL, '2017-04-03 02:40:37', '2017-04-03 02:40:37', 'Thử cái 2', NULL),
(5, 'preview_XCdO_16406603_1412958278735447_6582466042119963914_n.jpg', 'XCdO_16406603_1412958278735447_6582466042119963914_n.jpg', 7, NULL, '2017-04-03 02:55:23', '2017-04-03 02:55:23', 'Thử 3', NULL),
(6, 'preview_DwXX_hy-lap-1465282234384.png', 'DwXX_hy-lap-1465282234384.png', 7, NULL, '2017-04-03 02:55:28', '2017-04-03 02:55:28', 'Thử 4', NULL),
(7, 'preview_B6ZX_13873242_1233627423335201_4384629794007413772_n.jpg', 'B6ZX_13873242_1233627423335201_4384629794007413772_n.jpg', 7, NULL, '2017-04-03 02:55:34', '2017-04-03 02:55:34', 'Thử 5', NULL),
(8, 'preview_caKc_best_150693810-1-1465296072-untitled-2.jpeg', 'caKc_best_150693810-1-1465296072-untitled-2.jpeg', 7, NULL, '2017-04-03 02:55:40', '2017-04-03 02:55:40', 'Thử 6', NULL),
(9, 'preview_iM8D_screenshot-20160607-125046-1465282302481-1465814028014.png', 'iM8D_screenshot-20160607-125046-1465282302481-1465814028014.png', 7, NULL, '2017-04-03 02:55:47', '2017-04-03 02:55:47', 'Thử 7', NULL),
(10, 'preview_G4f0_screenshot-20160607-125151-1465282336361.png', 'G4f0_screenshot-20160607-125151-1465282336361.png', 7, NULL, '2017-04-03 02:55:54', '2017-04-03 02:55:54', 'Thử 8', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `r_id` int(10) NOT NULL,
  `r_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `r_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`r_id`, `r_name`, `r_description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Webmaster', '2017-03-27 02:30:27', '0000-00-00 00:00:00'),
(2, 'Photographer', 'Nhiếp ảnh gia', '2017-03-27 02:30:27', '0000-00-00 00:00:00'),
(3, 'Blogger', 'Blogger of Blog page', '2017-03-27 03:33:03', '0000-00-00 00:00:00'),
(4, 'User', 'normal user', '2017-03-27 03:33:03', '0000-00-00 00:00:00'),
(5, 'Supper Mod', 'Leader of Moderator', '2017-03-29 02:18:40', '2017-03-28 19:18:40'),
(6, 'Moderator', 'Người kiểm duyệt nội dung', '2017-03-28 19:18:59', '2017-03-28 19:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(10) NOT NULL,
  `s_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_special` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_price` int(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(10) NOT NULL,
  `u_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `u_avatar` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_roles` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `u_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pass`, `u_avatar`, `u_roles`, `remember_token`, `created_at`, `updated_at`, `u_email`) VALUES
(4, 'neetjoker', '$2y$10$1BXLUuJU8WVx9RVsP1SphOWGuoHkZIH0w8FG1/BDvvfivCv80e2He', 'example.png', 1, NULL, '2017-03-27 09:15:22', '2017-03-27 02:15:22', 'abc@gmail.com'),
(5, 'abc123', '$2y$10$bROYEHdn4hegZN4u7klw3exac5ZH/nKYsxlzkFuWENecS90IaHdCm', 'example.png', 3, NULL, '2017-03-28 19:25:33', '2017-03-28 19:25:33', 'admin@gmail.com'),
(7, 'Administrator', '$2y$10$y52ia0bnzRzMJnMcC5s4l.1/pxTN/n/6KRC7Qf2D.s7afJobiV66q', 'k0DF_CTtaqtfU8AEbTdY.jpg', 1, 'IsWFDeDDOvwcJ1Y5iy0u28hrNjenfIoOl6Laavg8QLvkq3fDIscw8rv30cXD', '2017-04-04 09:26:17', '2017-03-29 23:32:51', 'linh.nguyenphanhoang@gmail.com'),
(8, 'Moderator', '$2y$10$MeHFeWAuUxsIE6drNJAaZOEs9nlyi4Mu22/Nc.yZQ.q0eXOBMqZ2y', 'example.png', 6, NULL, '2017-03-29 23:30:02', '2017-03-29 23:30:02', 'aaa@gmail.com'),
(9, 'SupperMod', '$2y$10$lkFdTkUPlWIZQL2H5BYCPOZ2iZ3eYU0oHs3uF4ecZfTg/0CMQff6.', 'example.png', 5, NULL, '2017-03-29 23:31:53', '2017-03-29 23:31:53', 'mod@gmail.com'),
(10, 'Blogger', '$2y$10$fJXi8URPCU92j7usN/Ia5ucnKxq6p2nRMbEPbOLQzWTXyF/8sLQeO', 'Oknb_images.jpg', 3, NULL, '2017-03-29 23:33:52', '2017-03-29 23:33:52', 'blog@gmail.com'),
(11, 'customer1', '$2y$10$CdIB0MPmWoAJrSQyhNyO2OEVFqEcem5fwcsieSP/NE9YYmJraVVgG', 'axJf_7161827032_41a660efbb_b.jpg', 4, 'NkqIDxfMk5hXDKbypkzlzmTsukSolRXnTLvjSB3fM0AeS2QWSnL3lIDlfRDq', '2017-04-04 09:29:28', '2017-04-04 00:07:04', 'c@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `cate_group`
--
ALTER TABLE `cate_group`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cate_group`
--
ALTER TABLE `cate_group`
  MODIFY `cate_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
