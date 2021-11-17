-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 10:31 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_vuanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `displayhomepage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `displayhomepage`) VALUES
(19, 0, 'Tắm & chăm sóc cơ thể', 0),
(20, 0, 'Chăm sóc da mặt', 0),
(22, 0, 'Nước hoa', 0),
(23, 0, 'Trang điểm', 0),
(24, 0, 'Chăm sóc tóc', 0),
(25, 0, 'Loại khác', 0),
(26, 19, 'Sữa tắm', 0),
(27, 19, 'Tẩy da chết', 0),
(28, 24, 'Dầu gội đầu', 0),
(29, 24, 'Dầu xả', 0),
(30, 24, 'Kem ủ', 0),
(31, 25, 'Bông tẩy trang', 0),
(32, 25, 'Kem dưỡng da tay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `password`) VALUES
(0, 'kim anh', 'vanh23@gmail.com', 'Hà Nội', '0912345678', '202cb962ac59075b964b07152d234b70'),
(1, 'Nguyễn Văn A', 'nva@gmail.com', 'Ha noi', '0984712348', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `description`, `content`, `hot`, `photo`) VALUES
(6, 'Những thương hiệu nước hoa tốt nhất', '', '<p>Y&rsquo;ves Rocher giới thiệu chai nước hoa mới mang t&ecirc;n So Elixir, với m&ugrave;i hương d&agrave;nh ri&ecirc;ng cho những người phụ nữ th&agrave;nh c&ocirc;ng v&agrave; trưởng th&agrave;nh. So Elixir được s&aacute;ng tạo bởi ba nh&agrave; pha chế nước hoa nổi tiếng đ&oacute; l&agrave;: Olivier Cresp, Marie Salamagne v&agrave; Jacques Cavallier.</p>\r\n\r\n<p>C&aacute;c th&agrave;nh phần hương chủ đạo của d&ograve;ng nước hoa n&agrave;y l&agrave; hoa trắng tỏa s&aacute;ng tr&ecirc;n nền của c&aacute;c th&agrave;nh phần hương gỗ kết hợp với hương của mật hoa, tr&aacute;i c&acirc;y, hoa l&agrave;i , hoa hồng , v&agrave; nổi bật c&ugrave;ng m&ugrave;i hương gỗ Chypre đến từ hoắc hương. Song song đ&oacute; l&agrave; sự h&agrave;i h&ograve;a của cam bergamot, đậu tonka v&agrave; trầm hương tạo ra một m&ugrave;i hương mang đậm n&eacute;t phương Đ&ocirc;ng. Hương thơm mở ra kh&aacute; mạnh với hương thơm tươi m&aacute;t mạnh mẽ, sau đ&oacute; l&agrave; hương hoa l&agrave;i, hoa hồng Đan Mạch dịu d&agrave;ng, thu h&uacute;t v&agrave; cuối c&ugrave;ng l&agrave; hoắc hương v&agrave; đậu tonka h&ograve;a quyện.</p>\r\n\r\n<p>Chai nước hoa được thiết kế nhẹ nh&agrave;ng uyển chuyển với đường cong của chai tạo sự nữ t&iacute;nh v&agrave; thu h&uacute;t, m&agrave;u sắc v&agrave;ng &oacute;ng của chai tạo n&ecirc;n một c&aacute;i nh&igrave;n sang trọng v&agrave; tinh tế cho tổng thể thiết kế. Chiếc hộp đi k&egrave;m c&oacute; m&agrave;u đen với một b&ocirc;ng hoa trắng.</p>\r\n\r\n<p>So Elixir l&agrave; chai nước hoa d&agrave;nh cho ph&aacute;i đẹp với sự tinh tế nổi bật của n&oacute; được thể hiện qua m&ugrave;i hương hoa trắng đầy nữ t&iacute;nh m&agrave; bạn nữ n&agrave;o cũng khao kh&aacute;t bản th&acirc;n m&igrave;nh được sở hữu. Hương thơm n&agrave;y chứa đựng sự vi&ecirc;n m&atilde;n v&agrave; rạng rỡ, giống như cảm gi&aacute;c của sự rung động của tr&aacute;i tim khi y&ecirc;u.</p>\r\n', 1, '1629811407_những thương hiệu nước hoa.jpg'),
(7, 'Hướng dẫn cách đánh phấn', '', '<p>Y&rsquo;ves Rocher giới thiệu chai nước hoa mới mang t&ecirc;n So Elixir, với m&ugrave;i hương d&agrave;nh ri&ecirc;ng cho những người phụ nữ th&agrave;nh c&ocirc;ng v&agrave; trưởng th&agrave;nh. So Elixir được s&aacute;ng tạo bởi ba nh&agrave; pha chế nước hoa nổi tiếng đ&oacute; l&agrave;: Olivier Cresp, Marie Salamagne v&agrave; Jacques Cavallier.</p>\r\n\r\n<p>C&aacute;c th&agrave;nh phần hương chủ đạo của d&ograve;ng nước hoa n&agrave;y l&agrave; hoa trắng tỏa s&aacute;ng tr&ecirc;n nền của c&aacute;c th&agrave;nh phần hương gỗ kết hợp với hương của mật hoa, tr&aacute;i c&acirc;y, hoa l&agrave;i , hoa hồng , v&agrave; nổi bật c&ugrave;ng m&ugrave;i hương gỗ Chypre đến từ hoắc hương. Song song đ&oacute; l&agrave; sự h&agrave;i h&ograve;a của cam bergamot, đậu tonka v&agrave; trầm hương tạo ra một m&ugrave;i hương mang đậm n&eacute;t phương Đ&ocirc;ng. Hương thơm mở ra kh&aacute; mạnh với hương thơm tươi m&aacute;t mạnh mẽ, sau đ&oacute; l&agrave; hương hoa l&agrave;i, hoa hồng Đan Mạch dịu d&agrave;ng, thu h&uacute;t v&agrave; cuối c&ugrave;ng l&agrave; hoắc hương v&agrave; đậu tonka h&ograve;a quyện.</p>\r\n\r\n<p>Chai nước hoa được thiết kế nhẹ nh&agrave;ng uyển chuyển với đường cong của chai tạo sự nữ t&iacute;nh v&agrave; thu h&uacute;t, m&agrave;u sắc v&agrave;ng &oacute;ng của chai tạo n&ecirc;n một c&aacute;i nh&igrave;n sang trọng v&agrave; tinh tế cho tổng thể thiết kế. Chiếc hộp đi k&egrave;m c&oacute; m&agrave;u đen với một b&ocirc;ng hoa trắng.</p>\r\n\r\n<p>So Elixir l&agrave; chai nước hoa d&agrave;nh cho ph&aacute;i đẹp với sự tinh tế nổi bật của n&oacute; được thể hiện qua m&ugrave;i hương hoa trắng đầy nữ t&iacute;nh m&agrave; bạn nữ n&agrave;o cũng khao kh&aacute;t bản th&acirc;n m&igrave;nh được sở hữu. Hương thơm n&agrave;y chứa đựng sự vi&ecirc;n m&atilde;n v&agrave; rạng rỡ, giống như cảm gi&aacute;c của sự rung động của tr&aacute;i tim khi y&ecirc;u.</p>\r\n', 1, '1629811483_hướng dẫn cách đánh phấn.jpg'),
(8, 'Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’', '<p>Mặc d&ugrave; Kia Seltos đ&atilde; ra mắt c&aacute;ch đ&acirc;y hơn 1 th&aacute;ng nhưng đến nay, trang chủ fanpage Kia Motors Việt Nam mới c&ocirc;ng bố &quot;ch&iacute;nh thức ra mắt v&agrave; tiến h&agrave;nh b&agrave;n giao xe&quot; từ ng&agrave;y 9/9 tới đ&acirc;y. Nhiều khả năng, đ&acirc;y l&agrave; sự kiện ra mắt xe tổ chức tại đại l&yacute; d&agrave;nh ri&ecirc;ng cho kh&aacute;ch h&agrave;ng, đồng thời l&agrave; sự kiện b&agrave;n giao xe cho những kh&aacute;ch h&agrave;ng đặt đầu ti&ecirc;n.</p>\r\n', '<p>Hiện tại, những chiếc Kia Seltos xuất xưởng đầu ti&ecirc;n đ&atilde; được đưa về đại l&yacute; tr&ecirc;n to&agrave;n quốc. Hầu hết xe thuộc c&aacute;c bản 1.4 Premium v&agrave; 1.4 Luxury. Trong đợt n&agrave;y, những kh&aacute;ch đặt mua bản 1.4 Deluxe v&agrave; 1.6 Premium sẽ chưa c&oacute; xe m&agrave; c&oacute; thể phải đợi sang th&aacute;ng 10. Trong thời gian gần đ&acirc;y, kh&aacute;ch h&agrave;ng cũng kh&ocirc;ng thể đặt cọc được bản 1.6 Premium nữa. Phi&ecirc;n bản n&agrave;y được cho l&agrave; thiếu nguồn cung v&agrave; chưa hẹn ng&agrave;y trở lại.</p>\r\n\r\n<p><iframe scrolling=\"no\"></iframe>X</p>\r\n\r\n<p>Những kh&aacute;ch h&agrave;ng đặt xe đợt đầu sẽ được hưởng mức gi&aacute; ưu đ&atilde;i, với c&aacute;c bản 1.4 Deluxe, 1.4 Luxury, 1.6 Premium v&agrave; 1.4 Premium c&oacute; gi&aacute; lần lượt l&agrave; 589 triệu, 649 triệu, 699 triệu v&agrave; 719 triệu đồng. Theo th&ocirc;ng tin từ đại l&yacute;, kể từ sau ng&agrave;y 9/9, gi&aacute; xe c&oacute; thể sẽ tăng tới cả chục triệu đồng. THACO cũng cho biết mức gi&aacute; c&ocirc;ng bố ban đầu l&agrave; gi&aacute; ưu đ&atilde;i.</p>\r\n\r\n<p><img alt=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 1\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/kia-seltos-dl-1-1599381020699842033670-crop-15993811032441209604726.jpg\" title=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 1\" /></p>\r\n\r\n<p><img alt=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 2\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/kia-seltos-dl-2-15993810207161319403356-crop-1599381125936644499717.jpg\" title=\"Kia Seltos ồ ạt về đại lý, rục rịch tăng giá, vừa chốt ngày giao đã có phiên bản ‘cháy hàng’ - 2\" /></p>\r\n\r\n<p>Kia Seltos l&agrave; một trong những mẫu SUV hạng B mới nhất tr&ecirc;n thị trường v&agrave; cũng l&agrave; mẫu xe ho&agrave;n to&agrave;n mới m&agrave; Kia mang tới Việt Nam. Xe nổi bật với một số trang bị như thiết kế hiện đại, đ&egrave;n chiếu s&aacute;ng LED ho&agrave;n to&agrave;n, như ghế chỉnh điện 10 hướng, l&agrave;m m&aacute;t ghế, đồng hồ t&iacute;ch hợp m&agrave;n h&igrave;nh 7 inch, m&agrave;n h&igrave;nh 10,25 inch hỗ trợ Apple CarPlay/Android Auto, đ&egrave;n nội thất 8 m&agrave;u chỉnh theo điệu nhạc...</p>\r\n\r\n<p>C&oacute; 2 tuỳ chọn động cơ tr&ecirc;n Kia Seltos. M&aacute;y 1,4 l&iacute;t tăng &aacute;p c&oacute; mặt tr&ecirc;n 3 phi&ecirc;n bản, cho c&ocirc;ng suất 138 m&atilde; lực v&agrave; m&ocirc;-men xoắn 242 Nm, kết hợp số 7 cấp ly hợp k&eacute;p. M&aacute;y 1,6 l&iacute;t h&uacute;t kh&iacute; tự nhi&ecirc;n cho c&ocirc;ng suất 121 m&atilde; lực v&agrave; m&ocirc;-men xoắn 151 Nm, kết hợp số tự động 6 cấp. Xe c&oacute; c&aacute;c t&iacute;nh năng an to&agrave;n cơ bản đầy đủ như hỗ trợ phanh (ABS, EBD, BA), c&acirc;n bằng điện tử, hỗ trợ khởi h&agrave;nh ngang dốc v&agrave; kiểm so&aacute;t lực k&eacute;o 3 chế độ...</p>\r\n\r\n<p>Theo dự kiến, từ th&aacute;ng 10 trở đi, Kia Seltos sẽ về th&ecirc;m c&aacute;c phi&ecirc;n bản c&ograve;n lại để giao kh&aacute;ch h&agrave;ng tại đại l&yacute;. Mẫu xe n&agrave;y từ nay đến cuối năm được hưởng ưu đ&atilde;i 50% lệ ph&iacute; trước bạ bởi l&agrave; xe lắp r&aacute;p trong nước.</p>\r\n\r\n<p><strong>Theo Đức Kh&ocirc;i (Ph&aacute;p luật &amp; Bạn đọc)</strong></p>\r\n', 1, '1630744595_hinh-nen-vu-tru-6.jpg'),
(9, 'Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ', '<p>Trong một vài năm qua, việc mua ôtô chạy dịch vụ trở nên phổ biến ở Việt Nam nhờ sự phát triển của các hình thức gọi xe công nghệ. Bên cạnh xe đô thị tầm giá 400 triệu đồng, ôtô 600 triệu đồng cũng là phân khúc được nhiều người dùng chọn lựa để đầu tư, với các điểm cộng về không gian rộng rãi, trang bị và an toàn.</p>\r\n', '<p>Ba cái tên đáng chú ý đại diện cho nhóm xe dịch vụ tầm 600 triệu đồng hiện nay có thể kể đến Toyota Vios, Kia Cerato và Suzuki Ertiga.</p>\r\n\r\n<p><strong>Toyota Vios - 470-570 triệu đồng</strong></p>\r\n\r\n<p>Từ lâu, Toyota Vios luôn là cái tên được nhắc đến đầu khi cân nhắc mua xe hạng B. Không chỉ có chi phí sử dụng hợp lý và thuận tiện trong việc bảo trì bảo dưỡng, Vios còn mang thương hiệu Toyota với tính thanh khoản cao. Các yếu tố này giúp người dùng Vios tối ưu được hiệu quả đầu tư.</p>\r\n\r\n<p>Đầu năm nay, Toyota Việt Nam ra mắt các phiên bản nâng cấp 2020 của Vios trước sức ép cạnh tranh doanh số từ 2 mẫu xe Hàn Quốc là Hyundai Accent (426-542 triệu đồng) và Kia Soluto (369-469 triệu đồng).</p>\r\n\r\n<p>Hãng xe Nhật Bản bổ sung trang bị cho các model mới, đồng thời cung cấp thêm tùy chọn 3 túi khí hoặc 7 túi khí cho bản E MT và E CVT. Điều này nhằm giảm mức giá khởi điểm 20 triệu đồng và tiếp cận thêm nhóm khách hàng mua xe chạy dịch vụ. Cụ thể, 5 biến thể Toyota Vios hiện có giá đề xuất dao động từ 470 đến 570 triệu đồng.</p>\r\n\r\n<p>Những tính năng mới giúp Vios bớt phần thua thiệt so với Hyundai Accent hay Honda City (559-599 triệu đồng) về mặt trang bị, gồm có hệ thống giải trí hỗ trợ kết nối Apple CarPlay/Android Auto, ga tự động, camera lùi và cảm biến lùi. Tuy vậy, thiết kế nội ngoại thất trung tính của Toyota Vios được giữ nguyên. Ưu điểm của Vios là không gian cabin rộng rãi và thoải mái cho hành khách.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ\" /></p>\r\n\r\n<p>Toyota Vios vẫn trang bị động cơ xăng I4 1.5L có van biến thiên Dual i-VVT, công suất đạt 107 mã lực cùng mô-men xoắn 140 Nm. Đi kèm với đó là tùy chọn hộp số vô cấp CVT hoặc hộp số sàn 5 cấp. Mức tiêu thụ nhiên liệu ở điều kiện kết hợp theo nhà sản xuất công bố tương ứng là 5,7-5,8 lít/100 km.</p>\r\n\r\n<p><iframe scrolling=\"no\"></iframe>X</p>\r\n\r\n<p>Tính từ đầu năm đến nay, Toyota Vios vẫn là dòng xe bán tốt nhất tại thị trường Việt Nam. Tổng cộng đã có hơn 14.055 model Vios được bán ra đến hết tháng 7, doanh số trung bình 2.000 xe mỗi tháng. Trong khi đó, doanh số của Accent, City cùng Soluto là 9.568, 4.915 và 3.606 chiếc.</p>\r\n\r\n<p><strong>Kia Cerato - 529-665 triệu đồng</strong></p>\r\n\r\n<p>Với mức giá khởi điểm tương đương một vài mẫu xe hạng B, Kia Cerato trội hơn về không gian cũng như có khung gầm vững chắc hơn. Ngoài ra, tính năng trang bị ở mức khá tốt để phục vụ hành khách giúp mẫu sedan Hàn Quốc được chọn lựa để sử dụng làm xe dịch vụ.</p>\r\n\r\n<p>Trong cùng nhóm xe hạng C, Cerato có lợi thế về giá bán cạnh tranh hơn Mazda3 sedan (669-869 triệu đồng), Hyundai Elantra (580-769 triệu đồng), Honda Civic (729-934 triệu đồng) và Toyota Corolla Altis (733-763 triệu đồng).</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 1\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-1.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 1\" /></p>\r\n\r\n<p>Hiện tại, bản Cerato 1.6 MT tiêu chuẩn có giá 529 triệu đồng, trong khi model 2.0 Premium cao cấp có giá 665 triệu đồng. Bên cạnh đó, Cerato có thiết kế trẻ trung, cá tính ở cả ngoại thất lẫn khoang lái.</p>\r\n\r\n<p>Các trang bị đáng chú ý ở bản Cerato 2.0 AT Premium có thể kể đến như màn hình trung tâm 8 inch, dẫn đường tiếng Việt, sạc điện thoại không dây, cửa sổ trời, đèn chiếu sáng LED… Tuy nhiên, Kia Cerato ra mắt từ 2018 đến nay chưa có đợt nâng cấp nào nên có phần thua thiệt về mặt công nghệ an toàn so với các đối thủ.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 2\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-2.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 2\" /></p>\r\n\r\n<p>Kia Cerato có 2 tùy chọn động cơ xăng, gồm động cơ Gamma 1.6L MPI (128 mã lực và 157 Nm) và động cơ Nu 2.0L MPI (159 mã lực và 194 Nm). Đi cùng với đó là hộp số sàn 6 cấp ở bản tiêu chuẩn và hộp số tự động 6 cấp ở 3 phiên bản AT.</p>\r\n\r\n<p>Tính đến cuối tháng 7/2020, Kia Cerato đang là cái tên đứng đầu nhóm xe hạng C, xếp trên một mẫu xe khác cũng được Thaco lắp ráp và phân phối là Mazda3. Cụ thể, Cerato bán được 4.815 chiếc, nhỉnh hơn Mazda3 với 4.675 xe (382 chiếc hatchback và 4.293 mẫu sedan). Xếp sau còn có Hyundai Elantra (2.141 chiếc), Honda Civic (1.464 chiếc) và Toyota Corolla Altis (1.037 chiếc).</p>\r\n\r\n<p><strong>Suzuki Ertiga - 499-559 triệu đồng</strong></p>\r\n\r\n<p>Ởphân khúc MPV 7 chỗ cỡ nhỏ, Suzuki Ertiga là cái tên sáng giá cho mục đích sử dụng làm xe dịch vụ khi có giá bán thấp hơn các đối thủ. Cụ thể, Suzuki hiện bán 3 model là Ertiga GL, Limited và Sport, với mức giá lần lượt 499, 555 và 559 triệu đồng.</p>\r\n\r\n<p>Trong khi đó, mức giá của Toyota Avanza là 544-612 triệu đồng, Kia Rondo có giá dao động 559-655 triệu đồng và Mitsubishi Xpander được bán với giá đề xuất 555-630 triệu đồng.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 3\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-3.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 3\" /></p>\r\n\r\n<p>So với mẫu xe đang bán chạy nhất phân khúc là Mitsubishi Xpander, Ertiga có thiết kế trung tính hơn. Trong khi đó, tính đa dụng là tương đương, với cabin thiết kế kiểu 5+2 có thể đáp được được nhiều nhu cầu di chuyển khác nhau.</p>\r\n\r\n<p>Ở đợt nâng cấp tháng 6/2020, Suzuki trang bị cho Ertiga 2 chức năng an toàn là hệ thống cân bằng điện tử và hỗ trợ khởi hành ngang dốc. Bên cạnh đó, Ertiga 2020 có cụm giải trí nổi bật với màn hình 10 inch lớn nhất phân khúc và hỗ trợ kết nối Apple CarPlay/Android Auto. Điểm hạn chế của Suzuki Ertiga là vẫn chưa có tính năng ga tự động và ghế bọc da như Xpander.</p>\r\n\r\n<p><img alt=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 4\" src=\"https://img.docbao.vn/images/uploads/2020/09/07/the-gioi/xe-dich-vu-4.jpg\" title=\"Những mẫu xe tầm giá 600 triệu phù hợp chạy dịch vụ - 4\" /></p>\r\n\r\n<p>Suzuki trang bị cho Ertiga động cơ xăng I4 dung tích 1.5L, công suất tối đa 103 mã lực và mô-men xoắn cực đại 138 Nm. Đi cùng với đó là hộp số tự động 4 cấp hoặc số sàn 5 cấp. So với các đối thủ, Ertiga có mức tiêu thụ nhiên liệu tốt hơn, đạt 5,95 lít/100 km ở điều kiện hỗn hợp theo công bố của nhà sản xuất.</p>\r\n\r\n<p>Doanh số tính đến hết tháng 7/2020 của Suzuki Ertiga là 1.651 xe, ít hơn Mitsubishi Xpander với 7.493 chiếc. Xếp sau mẫu MPV của Suzuki là Kia Rondo (640 chiếc) và Toyota Avanza (185 chiếc).</p>\r\n\r\n<p><strong>Theo Hoàng Phạm (Tri Thức Trực Tuyến)</strong></p>\r\n', 1, '1629267550_0022_Vuong_An_Vu_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(26, 9, 11, 1, 5000000),
(27, 10, 24, 2, 189000),
(28, 11, 24, 1, 189000),
(29, 12, 24, 3, 189000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `price` float NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `price`, `status`) VALUES
(9, 1, '2021-06-13', 20000000, 1),
(10, 0, '2021-09-01', 336420, 0),
(11, 0, '2021-09-01', 168210, 0),
(12, 0, '2021-09-01', 504630, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `content` text NOT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `hot`, `photo`, `price`, `discount`, `category_id`) VALUES
(26, 'Chanel, the cheetah', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque, purus vitae danos vehicula cursus dui arcu molestie metus, sit amet rhoncus magna neque sit amet cosmodous. Maecenas rutrum semper aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu placerat a felis.</p>\r\n\r\n<h5>SAMPLE UNORDERED LIST</h5>\r\n\r\n<ul>\r\n	<li>Divamus sit amet ligula massa loremous.</li>\r\n	<li>Maecenas cursus ligula sit amet dolor pharetra danos volutpat nisi loremous.</li>\r\n	<li>Loremous de milancelos</li>\r\n	<li>Nunc comodous ipsum fringilla an amet egestas non malesuadas.</li>\r\n</ul>\r\n\r\n<h5>SAMPLE ORDERED LIST</h5>\r\n\r\n<ol>\r\n	<li>Divamus sit amet ligula massa loremous.</li>\r\n	<li>Maecenas cursus ligula sit amet dolor pharetra danos volutpat nisi loremous.</li>\r\n	<li>Loremous de milancelos</li>\r\n	<li>Nunc comodous ipsum fringilla an amet egestas non malesuadas.</li>\r\n</ol>\r\n\r\n<h5>SAMPLE BLOCK QUOTE</h5>\r\n\r\n<blockquote>Phasellus consequat dolor odio, at luctus enim porttitor non. Donec ac mi nec nisl posuere des dolutpat. Mauris vel nisl dictum sem hendrerit suscipit in vitae neque. Divamus metus ligula, mehicula an metus loremous marius varius mauris. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</blockquote>\r\n\r\n<h5>SAMPLE PARAGRAPH TEXT</h5>\r\n\r\n<p>Phasellus consequat dolor odio, at luctus enim porttitor non. Donec ac mi nec nisl posuere des dolutpat. Mauris vel nisl dictum sem hendrerit suscipit in vitae neque. Divamus metus ligula, mehicula an metus loremous marius varius mauris. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Divamus adipiscing nisl an dolor dignissim de semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum.</p>\r\n', 1, '1631086338_1.jpg', 320000, 10, 23),
(27, 'French Connection, straw bag', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086469_2.jpg', 230000, 5, 23),
(28, 'Paul Smith, t-time bag small', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086538_3.jpg', 350000, 10, 22),
(29, 'French Connection, Sunday bliss bag', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086647_4.jpg', 370000, 15, 25),
(30, 'Coco Lee, coins are Kumis brown leather bag', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086823_5.jpg', 350000, 10, 23),
(31, 'Coco Lee, coins are Kumis', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086792_6.jpg', 300000, 5, 23),
(32, 'Coco Lee, Flat Nat\'s', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086909_7.jpg', 390000, 10, 23),
(33, 'Coco Lee', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631086955_8.jpg', 300000, 10, 23),
(34, 'Flat Nat\'s', '', '<p><strong>How to write product descriptions that sell</strong><br />\r\nOne of the best things you can do to make your store successful is invest some time in writing great product descriptions. You want to provide detailed yet concise information that will entice potential customers to buy.<br />\r\n<br />\r\nKeep three things in mind:<br />\r\n<br />\r\n<strong>Think like a consumer</strong><br />\r\nThink about what you as a consumer would want to know, then include those features in your description. For clothes: materials and fit. For food: ingredients and how it was prepared. Bullets are your friends when listing features &mdash; try to limit each one to 5-8 words.<br />\r\n<br />\r\n<strong>Find differentiators</strong><br />\r\nPepper your features with details that show how the product stands out against similar offerings. For clothes: is it vintage or hard to find? For art: is the artist well known? For home d&eacute;cor: is it a certain style like mid-century modern? Unique product descriptions not only help you stand out, they improve your SEO.<br />\r\n<br />\r\n<strong>Keep it simple</strong><br />\r\nProvide enough detail to help consumers make an informed decision, but don&rsquo;t overwhelm with a laundry list of features or flowery language. Densely pack your descriptions with useful information and watch products fly off the shelf.</p>\r\n', 1, '1631087018_9.jpg', 300000, 15, 23);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `product_id`, `star`) VALUES
(23, 20, 5),
(24, 20, 5),
(25, 20, 1),
(26, 20, 3),
(27, 20, 2),
(28, 20, 1),
(29, 11, 5),
(30, 11, 5),
(31, 19, 4),
(32, 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'Vũ Kim Anh', 'va@gmail.com', '202cb962ac59075b964b07152d234b70', '0987654321', 'Hà Nội'),
(2, 'Nguyễn Văn An', 'nva@gmail.com', '202cb962ac59075b964b07152d234b70', '0912345678', 'Hà Nội'),
(3, 'Nguyễn Văn A', 'nva@gmail.com', '202cb962ac59075b964b07152d234b70', '0963287453', 'Bắc Ninh'),
(4, 'Nguyễn Văn B', 'nvb@gmail.com', '202cb962ac59075b964b07152d234b70', '0987612345', 'Bắc Giang'),
(5, 'Nguyễn Văn C', 'nvc@gmail.com', '202cb962ac59075b964b07152d234b70', '0987123456', 'Hải Phòng'),
(6, 'Nguyễn Văn Dương', 'nvd@gmail.com', '202cb962ac59075b964b07152d234b70', '0981234567', 'Thái Bình'),
(7, 'Nguyễn lan Hương', 'nlh@gmail.com', '202cb962ac59075b964b07152d234b70', '0912345678', 'Thái Nguyên'),
(9, 'Nguyễn An Linh', 'nal@gmail.com', '202cb962ac59075b964b07152d234b70', '0987123456', 'Hà Nội');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
