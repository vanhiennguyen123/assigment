-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 03:06 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `huynkshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `quanao`
--

CREATE TABLE IF NOT EXISTS `quanao` (
  `id_product` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(100) NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quanao`
--

INSERT INTO `quanao` (`id_product`, `name`, `soluong`, `description`, `img`, `cost`, `category`) VALUES
(1, 'Áo kẻ cá tính nam mẫu 1', 20, 'Áo kẻ cá tính, mang lại vẻ đẹp trai năng động cho các bạn nam', '1.jpg', 70000, 'áo'),
(2, 'Áo kẻ xanh thanh lịch mẫu 2', 18, 'Áo kẻ xanh thanh lịch mang đến vẻ thanh lịch và sang trọng cho các bạn nam', '2.jpg', 80000, 'áo'),
(3, 'Áo khoác nam thời trang mẫu 3', 17, 'áo khoác thể thao cá tính cho những ngày mùa đông giá rét', '3.jpg', 240000, 'áo'),
(4, 'Áo sơ mi công sở mẫu 4', 20, 'Áo sơ mi công sở mầu trắng mang vẻ quý phải, nam tính cho phái mạnh', '4.jpg', 120000, 'áo'),
(5, 'áo hoodie thể thao mẫu 5', 19, 'Áo thể thao phù hợp cho các bạn chơi thể thao và hoạt động ngoài trời', '5.jpg', 200000, 'áo'),
(6, 'áo cộc tay mẫu 6', 30, 'áo cộc tay mát mẻ cho ngày hè nóng nực', '6.jpg', 50000, 'áo'),
(7, 'Áo thun dài tay mẫu 7', 25, 'phù hợp cho vẻ đẹp trai khỏe khoắn của các bạn nam , cho tiết trời mùa thu se lạnh.', '7.jpg', 110000, 'áo'),
(8, 'Áo thun dài tay mẫu 8', 24, 'Áo thun dài tay màu đen ghi, sự kết hợp hoàn hảo , thể thao và cá tính', '8.jpg', 140000, 'áo'),
(10, 'Sản phẩm mẫu 9', 18, 'áo thể thao cá tính , dành cho những bạn yêu thể thao', '9.jpg', 40000, 'áo'),
(11, 'sản phẩm số 11', 15, 'Áo mưa mới', 'aomua.jpg', 40000, 'áo'),
(13, 'Sản phẩm 12', 12, 'sản phẩm mới , test thử', '13.jpg', 10000, 'áo'),
(14, 'sản phẩm số 12', 20, 'Sản phấm mới cho mùa đông', '5.jpg', 50000, 'áo');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE IF NOT EXISTS `thanhvien` (
  `taikhoan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`taikhoan`, `matkhau`) VALUES
('admin', '123456'),
('huy', 'huy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quanao`
--
ALTER TABLE `quanao`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quanao`
--
ALTER TABLE `quanao`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
