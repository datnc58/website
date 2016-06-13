-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 06:12 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `danhmuc_name` varchar(255) NOT NULL,
  `danhmuc_pid` int(11) NOT NULL,
  `danhmuc_link` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `danhmuc_name`, `danhmuc_pid`, `danhmuc_link`) VALUES
(1, 'Giầy Dép', 1, 'giaydep'),
(2, 'Quần Áo', 2, 'quanao'),
(3, 'Phụ Kiện', 3, 'phukien');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_id` int(11) NOT NULL,
  `name_kh` varchar(50) NOT NULL,
  `pass_kh` varchar(20) NOT NULL,
  `taikhoan_kh` varchar(20) NOT NULL,
  `email_kh` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`kh_id`, `name_kh`, `pass_kh`, `taikhoan_kh`, `email_kh`, `address`) VALUES
(1, 'nguyễn công đát', '123456', 'congdat', 'ngocnghechlamthe@gmail.com', 'viet nam'),
(2, 'nguyen thi trang', '123456', 'trang', 'trang@gmail.com', '24 hai ba trung, ha noi'),
(3, '', '123456', '', '', 'viet nam');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_content` text NOT NULL,
  `product_address` varchar(255) NOT NULL,
  `product_date` datetime NOT NULL,
  `product_price` double NOT NULL,
  `product_pid` int(11) NOT NULL,
  `product_images` text,
  `product_check` int(11) DEFAULT NULL,
  `product_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_title`, `product_content`, `product_address`, `product_date`, `product_price`, `product_pid`, `product_images`, `product_check`, `product_email`) VALUES
(1, 'Giầy Da Cao Cấp', 'Giầy da cao cấp giảm giá 20%', 'Suốt thời gian qua, người ta chỉ nói về Leicester City, về câu chuyện thần kì mà thầy trò Claudio Ranieri vừa viết trọn vẹn đến chương cuối cùng. Nhưng có lẽ, trận đấu thủ tục với Everton và khoảnh khắc "Bầy cáo" nâng cúp vào cuối tuần này đã vô tình khiến tất cả quên đi "kẻ thất bại tội nghiệp" Tottenham.', '175 Xuân thủy, Cầu Giấy, Hà Nội', '2016-05-06 15:32:45', 36, 1, 'product1.jpg', 1, 'ngocnghechlamthe@gmail.com'),
(2, 'Giầy Đá Bóng', 'Giầy Đá Bóng Nike chính hãng giảm giá 10%', 'Thất bại trước Real ở bán kết Champions League đã khiến những nỗ lực có lời chia tay đẹp nhất của HLV Pellegrini đổ sông đổ biển. Không những khiến các ngôi sao Man City bị ảnh hưởng về mặt tinh thần, mà thể lực của họ còn bị bào mòn nghiêm trọng sau 90 phút tại Bernabeu, thậm chí ảnh hưởng cả đến nhiệm vụ giữ vững vị trí thứ 4 ở Premier League.', '123 Đại La, Hà Nội', '2016-05-07 17:07:24', 100, 1, 'product2.jpg', 1, 'ngocnghechlamthe@gmail.com'),
(3, 'Giầy Cao Gót', 'Giảm giá 20% các loại giầy cao gót', 'Trong quá khứ, Real và Atletico đã gặp nhau tổng cộng 200 lần ở La Liga và cúp Nhà vua, với thành tích áp đảo thuộc về “Kền kền trắng” với việc họ đã thắng đến 102 trận, hòa 48 lần và thua 50 trận trước “gã hàng xóm”.', '222 Đường Láng, Hà Nội', '2016-05-06 09:23:34', 77, 1, 'product3.jpg', 1, 'ngocnghechlamthe@gmail.com'),
(4, 'Giầy Lười Da', 'Giầy Lười giảm giá 15% trong ngày 30/4', 'Trong quá khứ, Real và Atletico đã gặp nhau tổng cộng 200 lần ở La Liga và cúp Nhà vua, với thành tích áp đảo thuộc về “Kền kền trắng” với việc họ đã thắng đến 102 trận, hòa 48 lần và thua 50 trận trước “gã hàng xóm”.', '222 Đường Láng, Hà Nội', '2016-05-06 18:23:34', 99, 1, 'product4.jpg', 1, 'ngocnghechlamthe@gmail.com'),
(5, 'Áo Da Cao Cấp', 'Áo Da giảm giá 20% trong đợt chào mừng ngày quốc khánh', 'Đón tiếp Everton trên sân nhà King Power, tân vương Leicester City rất muốn có chiến thắng để tạo dấu ấn đẹp trong ngày họ được nâng cúp vô địch. Quyết tâm của đội bóng vừa làm nên "chuyện cổ tích giữa đời thường" đã phát huy hiệu quả từ rất sớm.\r\n\r\nNgay phút thứ 6, Andy King (người được HLV Ranieri xếp đá thay Drinkwater bị treo giò) đã có pha chuyền bóng rất hay để Jamie Vardy ập vào dứt điểm cắt mặt mở tỉ số cho Leicester.', '222 Đường Láng, Hà Nội', '2016-05-08 05:15:18', 200, 2, 'three1.png', 1, 'ngocnghechlamthe@gmail.com'),
(6, 'Đồng Hồ Casio', 'Đồng Hồ Chính Hãng Casio Giảm GIá 10% New', 'Sang hiệp 2, phút 64, Pennington phạm lỗi với Vardy trong vòng cấm và tiền đạo số 9 bên phía Leicester đã dễ dàng thực hiện thành công quả phạt đền để có cú đúp cho riêng mình và nâng tỉ số lên 3-0 cho "Bầy cáo" 1 phút sau đó. \r\n\r\nĐến phút 72, Vardy lại được trao nhiệm vụ trên chấm đá phạt 11m nhưng lần này anh đã không thành công. Những nỗ lực muộn màng của Everton cũng giúp họ có bàn gỡ danh dự của cầu thủ vào sân thay người Kevin Mirallas ở phút 88.\r\n\r\nKết quả cuối cùng, Leicester City đánh bại Everton 3-1 để có trận đấu cuối cùng trên sân nhà đầy thành công trong ngày "Bầy cáo" nhận chiếc cúp vô địch Premier League lần đầu tiên trong lịch sử CLB này.', '222 Đường Láng, Hà Nội', '2016-05-08 05:28:15', 300, 3, 'two.png', 1, 'ngocnghechlamthe@gmail.com'),
(7, 'Áo Sơ Mi Nam', 'Giảm giá tất 10% tất cả các loại áo sơ mi', 'Mỗi tối có hàng trăm gia đình dẫn trẻ em vào phố đi bộ vui chơi. Tối thứ bảy, chủ nhật quảng trường cấm xe cơ giới nên nhiều người để con vô tư chạy nhảy. Trong khi đó tụ điện ở đây bị hư khóa, hở nắp trong lối đi rộng nhất, gây nguy hiểm.\r\nAnh Nguyễn Thanh Huy (31 tuổi, ngụ quận 10) cho biết, cuối tuần thường cùng bạn bè ra đây dạo mát, ngồi chơi đàn. "Tôi biết ở nước ngoài đường lát đá granite có độ bền rất lâu. Đường này cấm xe tải chạy sao lại bị bong tróc, nứt nẻ sớm vậy", anh Huy nói.', '222 Đường Láng, Hà Nội', '2016-05-08 07:45:41', 50, 2, 'gallery2.jpg', 1, 'ngocnghechlamthe@gmail.com'),
(9, 'Quần Lót Nam', 'Giảm giá sốc 70%', 'Suốt thời gian qua, người ta chỉ nói về Leicester City, về câu chuyện thần kì mà thầy trò Claudio Ranieri vừa viết trọn vẹn đến chương cuối cùng. Nhưng có lẽ, trận đấu thủ tục với Everton và khoảnh khắc "Bầy cáo" nâng cúp vào cuối tuần này đã vô tình khiến tất cả quên đi "kẻ thất bại tội nghiệp" Tottenham.\r\nĐảm bảo ngon!!!!', '222 Đường Láng, Hà Nội', '2016-05-10 04:14:53', 11, 2, 'WIN_20160111_233430.JPG', 1, 'ngocnghechlamthe@gmail.com'),
(10, 'Áo nam', 'Giảm giá sốc 70%', 'tim adhasdkksjdsa', '222 Đường Láng, Hà Nội', '2016-05-10 04:55:34', 45, 2, 'dc.JPG', 1, 'ngocnghechlamthe@gmail.com'),
(11, 'Nhẫn Kim Cương', 'Nhân Dịp Mùa Cưới Giảm Giá 20%', 'Thay mặt các ứng cử viên ĐBQH, Bí thư Đinh La Thăng ghi nhận những ý kiến phản ánh của người dân. Ông cho rằng điều người dân quan tâm nhất chính là vấn đề quy hoạch, ông chỉ đạo Giám đốc Sở QHKT Nguyễn Thanh Nhã (cùng dự tiếp xúc cử tri) phải rà soát lại toàn bộ quy hoạch trên địa bàn huyện Củ Chi.', '23 Cầu Giấy, Hà nội', '2016-05-10 10:02:05', 1000, 3, 'product51.jpg', 1, 'trang@gmail.com'),
(12, 'Kính Thời Trang', 'Giảm giá sốc 70%', 'Thay mặt các ứng cử viên ĐBQH, Bí thư Đinh La Thăng ghi nhận những ý kiến phản ánh của người dân. Ông cho rằng điều người dân quan tâm nhất chính là vấn đề quy hoạch, ông chỉ đạo Giám đốc Sở QHKT Nguyễn Thanh Nhã (cùng dự tiếp xúc cử tri) phải rà soát lại toàn bộ quy hoạch trên địa bàn huyện Củ Chi.', '23 Nguyễn Văn Huyên, Hà nội', '2016-05-10 10:53:41', 45, 3, 'iframe1.png', 1, 'ngocnghechlamthe@gmail.com'),
(13, 'Vòng Cổ', 'Giảm giá sốc 70%', 'Suốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester', '1247, xuân thủy, cầu giấy, hà nội', '2016-05-24 05:20:19', 345, 3, '1462546394465_32464.jpg', 0, 'ngocnghechlamthe@gmail.com'),
(14, 'áo phông nữ', 'Giảm giá tất 10% tất cả các loại áo phông', 'Suốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về Leicester\r\nSuốt thời gian qua, người ta chỉ nói về LeicesterSuốt thời gian qua, người ta chỉ nói về Leicester', '110 Đại La, Hai Bà Trưng, Hà Nội', '2016-05-24 05:25:02', 34, 2, '1462546395659_32469.jpg', 0, 'ngocnghechlamthe@gmail.com'),
(15, 'Quần âu', 'Nhân Dịp Mùa Cưới Giảm Giá 20%', 'Hai mục tiêu mà Mourinho đặc biệt quan tâm trong kỳ chuyển nhượng tới đây đã được xác định. Đầu tiên là Ibrahimovic và tiếp đến là John Stones. Để có được trung vệ của Everton không thực sự dễ dàng bởi phải cạnh tranh cùng nhiều đối thủ khác như Man City, Chelsea. Bởi vậy, Mou đang tập trung thuyết phục chân sút người Thụy Điển.', '924 CT2B, Tân Tây Đô, Hoài Đức, Hà Nội', '2016-05-24 16:47:05', 111, 2, '1462546395868_32470.jpg', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `name`, `images`) VALUES
(1, 'ảnh 1', 'girl1.jpg'),
(2, 'ảnh 3', 'girl2.jpg'),
(3, 'ảnh 2', 'girl3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `user_pass` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'admin'),
(2, 'congdat', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
