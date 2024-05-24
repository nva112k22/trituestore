-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 06:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `fullname` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `orderss` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `fullname`, `phone_number`, `email`, `address`, `orderss`, `created_date`, `updated_at`) VALUES
(1, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 1, '2023-11-04 14:48:57', '2023-11-04 14:48:57'),
(2, 'Nguyễn Viết An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-04 15:08:01', '2023-11-04 15:08:01'),
(3, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-04 17:08:58', '2023-11-04 17:08:58'),
(4, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 07:33:58', '2023-11-05 07:33:58'),
(5, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 07:42:11', '2023-11-05 07:42:11'),
(6, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', '1', 0, '2023-11-05 07:45:53', '2023-11-05 07:45:53'),
(7, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 07:46:37', '2023-11-05 07:46:37'),
(8, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 07:47:12', '2023-11-05 07:47:12'),
(9, 'Nguyễn Viết An', '0964384528', 'nguyenvietan112k2@gmail.com', '1', 0, '2023-11-05 07:48:19', '2023-11-05 07:48:19'),
(10, 'Nguyễn An', '0964384528', 'nguyenvietan112k2@gmail.com', 'Nam Từ Liêm, Hà Nội', 0, '2023-11-05 07:50:20', '2023-11-05 07:50:20'),
(11, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 07:51:14', '2023-11-05 07:51:14'),
(12, 'Nguyễn An', '0964384528', 'nguyenvietan112k2@gmail.com', 'hai duong', 0, '2023-11-05 07:52:03', '2023-11-05 07:52:03'),
(13, 'Nguyễn Viết An', '7044889613', 'nguyenvietan112k2@gmail.com', '1', 0, '2023-11-05 07:54:01', '2023-11-05 07:54:01'),
(14, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 17:06:10', '2023-11-05 17:06:10'),
(15, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 17:08:12', '2023-11-05 17:08:12'),
(16, 'Nguyễn Viết An', '09643845289', 'nguyenvietan112k2@gmail.com', '1', 0, '2023-11-05 17:51:49', '2023-11-05 17:51:49'),
(17, 'Nguyễn Viết An', '0964384528', 'nguyenvietan112k2@gmail.com', '1', 0, '2023-11-05 17:52:51', '2023-11-05 17:52:51'),
(18, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 17:56:51', '2023-11-05 17:56:51'),
(19, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 17:57:42', '2023-11-05 17:57:42'),
(20, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 17:58:07', '2023-11-05 17:58:07'),
(21, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 18:00:40', '2023-11-05 18:00:40'),
(22, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 18:01:49', '2023-11-05 18:01:49'),
(23, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-05 18:02:19', '2023-11-05 18:02:19'),
(24, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-06 14:48:22', '2023-11-06 14:48:22'),
(25, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-06 14:58:36', '2023-11-06 14:58:36'),
(26, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-06 14:59:23', '2023-11-06 14:59:23'),
(27, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', 'hai duong', 0, '2023-11-08 17:10:19', '2023-11-08 17:10:19'),
(28, 'Lê Ngọc Sơn', '0964384528', 'nguyenvietan112k2@gmail.com', 'Số 12, Xuân Phương, Nam Từ Liêm, Hà Nội', 1, '2023-11-09 15:41:54', '2023-11-09 15:41:54'),
(29, 'Nguyễn An', '0964384528', 'annguyen1112k2@gmail.com', '1', 0, '2023-12-12 15:22:50', '2023-12-12 15:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `image_id` int(11) NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `image_alt` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image_title` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`image_id`, `image_url`, `file_name`, `file_size`, `image_alt`, `image_title`, `user_id`, `created_at`) VALUES
(1, 'uploads/image-1.jpg', '', 0, '', '', 0, '2023-12-12 08:54:01'),
(2, 'uploads/image-2.jpg', '', 0, '', '', 0, '2023-12-12 08:58:59'),
(3, 'uploads/image-3.jpg', '', 0, '', '', 0, '2023-12-12 09:03:31'),
(4, 'uploads/image-1.jpg', '', 0, '', '', 0, '2023-12-12 09:07:56'),
(5, 'uploads/image-2.jpg', '', 0, '', '', 0, '2023-12-12 09:09:15'),
(6, 'uploads/image-3.jpg', '', 0, '', '', 0, '2023-12-12 09:10:20'),
(7, 'uploads/image-4.jpg', '', 0, '', '', 0, '2023-12-12 09:11:38'),
(8, 'uploads/image-5.jpg', '', 0, '', '', 0, '2023-12-12 09:12:50'),
(9, 'uploads/image-6.jpg', '', 0, '', '', 0, '2023-12-12 09:14:29'),
(10, 'uploads/image-7.webp', '', 0, '', '', 0, '2023-12-12 09:16:21'),
(11, 'uploads/image-8.webp', '', 0, '', '', 0, '2023-12-12 09:17:54'),
(12, 'uploads/image-10.jpg', '', 0, '', '', 0, '2023-12-12 09:19:03'),
(13, 'uploads/image-11.png', '', 0, '', '', 0, '2023-12-12 09:21:04'),
(14, 'uploads/image-12.jpg', '', 0, '', '', 0, '2023-12-12 09:22:15'),
(15, 'uploads/image-13.jpg', '', 0, '', '', 0, '2023-12-12 09:23:19'),
(16, 'uploads/image-14.png', '', 0, '', '', 0, '2023-12-12 09:24:10'),
(17, 'uploads/image-15.jpg', '', 0, '', '', 0, '2023-12-12 09:25:18'),
(18, 'uploads/image-16.webp', '', 0, '', '', 0, '2023-12-12 09:26:55'),
(19, 'uploads/image-17.webp', '', 0, '', '', 0, '2023-12-12 09:27:58'),
(20, 'uploads/image-18.jpg', '', 0, '', '', 0, '2023-12-12 09:29:10'),
(21, 'uploads/image-19.jpg', '', 0, '', '', 0, '2023-12-12 09:30:22'),
(22, 'uploads/image-20.jpg', '', 0, '', '', 0, '2023-12-12 09:31:28'),
(23, 'uploads/image-21.png', '', 0, '', '', 0, '2023-12-12 09:32:44'),
(24, 'uploads/image-22.webp', '', 0, '', '', 0, '2023-12-12 09:33:42'),
(25, 'uploads/image-23.webp', '', 0, '', '', 0, '2023-12-12 09:34:46'),
(26, 'uploads/image-24.webp', '', 0, '', '', 0, '2023-12-12 09:35:42'),
(27, 'uploads/image-25.png', '', 0, '', '', 0, '2023-12-12 09:37:50'),
(28, 'uploads/image-26.png', '', 0, '', '', 0, '2023-12-12 09:39:38'),
(29, 'uploads/image-9.jpg', '', 0, '', '', 0, '2023-12-12 09:44:20'),
(30, 'uploads/image-27.jpg', '', 0, '', '', 0, '2023-12-12 09:45:43'),
(31, 'uploads/image-28.jpg', '', 0, '', '', 0, '2023-12-12 09:46:56'),
(32, 'uploads/image-29.jpg', '', 0, '', '', 0, '2023-12-12 09:48:04'),
(33, 'uploads/image-30.jpg', '', 0, '', '', 0, '2023-12-12 09:49:43'),
(34, 'uploads/image-31.jpg', '', 0, '', '', 0, '2023-12-12 09:50:58'),
(35, 'uploads/image-32.jpg', '', 0, '', '', 0, '2023-12-12 09:51:48'),
(36, 'uploads/image-33.jpg', '', 0, '', '', 0, '2023-12-12 09:52:58'),
(37, 'uploads/image-34.jpg', '', 0, '', '', 0, '2023-12-12 09:53:55'),
(38, 'uploads/image-35.jpg', '', 0, '', '', 0, '2023-12-12 09:54:59'),
(39, 'uploads/slider-1- Copy.png', '', 0, '', '', 0, '2023-12-12 10:13:11'),
(40, 'uploads/slider-2.jpg', '', 0, '', '', 0, '2023-12-12 10:13:30'),
(41, 'uploads/image-11.png', '', 0, '', '', 0, '2023-12-12 14:07:15'),
(42, 'uploads/slider-3.png', '', 0, '', '', 0, '2023-12-12 14:37:48'),
(43, 'uploads/image-37.jpg', '', 0, '', '', 0, '2023-12-12 14:56:05'),
(44, 'uploads/image-30.jpg', '', 0, '', '', 0, '2023-12-12 15:03:18'),
(45, 'uploads/image-38.jpg', '', 0, '', '', 0, '2023-12-12 15:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_media`
--

CREATE TABLE `tbl_media` (
  `media_id` int(11) NOT NULL,
  `image` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_media`
--

INSERT INTO `tbl_media` (`media_id`, `image`, `created_date`) VALUES
(5, 'img-detail.jpg', '2023-10-06 15:33:53'),
(6, 'img-post.jpg', '2023-10-06 15:34:02'),
(7, 'Quy-dinh-moi.jpg', '2023-10-06 15:34:28'),
(8, 'slider-01.png', '2023-10-06 15:34:43'),
(9, 'slider-02.png', '2023-10-06 15:34:53'),
(10, 'slider-03.png', '2023-10-06 15:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `pages` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category_product_id` int(11) NOT NULL,
  `category_post_id` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `name`, `slug`, `pages`, `category_product_id`, `category_post_id`, `orders`, `user_id`, `created_date`, `updated_at`) VALUES
(2, 'Blog', 'Blog', 'Blog', 2, 2, 1, 1, '2023-11-04 16:18:33', '2023-11-04 23:18:46'),
(3, 'Liên hệ', 'lien-he', 'Liên hệ', 2, 2, 2, 1, '2023-11-04 16:18:33', '2023-11-04 23:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

CREATE TABLE `tbl_orders` (
  `order_id` int(11) NOT NULL,
  `product_quantity` int(3) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `number` int(11) NOT NULL,
  `note` varchar(300) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `status` enum('shipped','pending','processing','delivered','canceled') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `payment` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`order_id`, `product_quantity`, `fullname`, `number`, `note`, `total_price`, `status`, `payment`, `order_date`, `user_id`, `customer_id`, `created_date`, `updated_at`) VALUES
(1, 2, 'Nguyễn An', 0, 'Không', 348000, 'shipped', 'Thanh toán online', '2023-12-12 15:22:50', 1, 29, '2023-12-12 15:22:50', '2023-12-12 15:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_items`
--

CREATE TABLE `tbl_order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `product` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_order_items`
--

INSERT INTO `tbl_order_items` (`item_id`, `order_id`, `code`, `product_id`, `quantity`, `price`, `sub_total`, `product`) VALUES
(1, 1, '#Ismart9', 9, 1, 189000, 189000, 'PHÂN TÍCH THỊ TRƯỜNG CHỨNG KHOÁN'),
(2, 1, '#Ismart5', 5, 1, 159000, 159000, 'QUẢN LÝ SỰ TẬP TRUNG ĐỂ NÂNG CAO HIỆU SUẤT CÔNG VIỆC');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `content` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` enum('draft','published','pending','archived') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `descs` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`page_id`, `title`, `content`, `slug`, `status`, `created_date`, `updated_at`, `user_id`, `descs`) VALUES
(2, 'Blog', '', 'blog', '', '2023-10-26 14:16:38', '2023-10-26 14:16:38', 1, '<h2><strong>Bắt đầu từ ng&agrave;y 22/10/2023 tới đ&acirc;y, lệ ph&iacute; đăng k&yacute;, cấp biển số xe m&aacute;y sẽ được điều chỉnh, trong đ&oacute; c&oacute; những thay đổi theo chiều hướng tăng l&ecirc;n.</strong></h2>\r\n\r\n<p>Th&ocirc;ng tư số 60/2023/TT-BTC Quy định mức thu, chế độ thu, nộp, miễn, quản l&yacute; lệ ph&iacute; đăng k&yacute;, cấp biển phương tiện giao th&ocirc;ng cơ giới đường bộ (gọi tắt l&agrave; Th&ocirc;ng tư 60) của Bộ T&agrave;i ch&iacute;nh ban h&agrave;nh ng&agrave;y 7/9/2023 bắt đầu c&oacute; hiệu lực kể từ ng&agrave;y 22/10/2023.</p>\r\n\r\n<p><img alt=\"Quy định mới có hiệu lực trong tháng 10/2023, lái xe máy phải biết - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/Quy-dinh-moi-co-hieu-luc-trong-thang-10-2023-lai-xe-may-phai-biet-dang-ky1-1696473979-70-width740height480.jpg\" /></p>\r\n\r\n<p>So với Th&ocirc;ng tư số 229/2016/TT-BTC (sẽ hết hiệu lực kể từ ng&agrave;y 22/10/2023) th&igrave; Th&ocirc;ng tư 60 tăng mức lệ ph&iacute; đăng k&yacute;, cấp biển số cho xe m&aacute;y ở khu vực I v&agrave; II l&ecirc;n gấp 2 lần, v&agrave; khu vực III th&igrave; mức lệ ph&iacute; n&agrave;y tăng l&ecirc;n gấp 3 lần. Việc tăng mức lệ ph&iacute; n&agrave;y được điều chỉnh khi m&agrave; Th&ocirc;ng tư 60 &aacute;p ngay mức trần cao nhất, chứ kh&ocirc;ng c&ograve;n để ở khoảng dao động như Th&ocirc;ng tư 229 nữa.</p>\r\n\r\n<p><img alt=\"Quy định mới có hiệu lực trong tháng 10/2023, lái xe máy phải biết - 2\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/Quy-dinh-moi-co-hieu-luc-trong-thang-10-2023-lai-xe-may-phai-biet-dang-ky2-1696473979-526-width740height555.jpg\" /></p>\r\n\r\n<p>Cụ thể mức ph&iacute; đăng k&yacute;, cấp biển số xe m&aacute;y theo Th&ocirc;ng tư 60 được thể hiện r&otilde; qua bảng sau:</p>\r\n\r\n<p><em>Đơn vị t&iacute;nh: Đồng</em></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>TT</strong></td>\r\n			<td><strong>Nội dung lệ ph&iacute;</strong></td>\r\n			<td><strong>Khu vực I</strong></td>\r\n			<td><strong>Khu vực II</strong></td>\r\n			<td><strong>Khu vực III</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>I</strong></td>\r\n			<td><strong>Cấp lần đầu chứng nhận đăng k&yacute; k&egrave;m theo biển số</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Xe m&ocirc; t&ocirc; trị gi&aacute; đến 15.000.000 đồng</td>\r\n			<td>1.000.000</td>\r\n			<td>200.000</td>\r\n			<td>150.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Xe m&ocirc; t&ocirc; trị gi&aacute; tr&ecirc;n 15.000.000 đồng đến 40.000.000 đồng</td>\r\n			<td>2.000.0000</td>\r\n			<td>400.000</td>\r\n			<td>150.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Xe m&ocirc; t&ocirc; trị gi&aacute; tr&ecirc;n 40.000.000 đồng&nbsp;</td>\r\n			<td>4.000.0000</td>\r\n			<td>800.000</td>\r\n			<td>150.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>II</strong></td>\r\n			<td><strong>Cấp đổi chứng nhận đăng k&yacute;, biển số&nbsp;</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Xe m&ocirc; t&ocirc;</td>\r\n			<td colspan=\"3\" rowspan=\"1\">50.00</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>III</strong></td>\r\n			<td><strong>Cấp chứng nhận đăng k&yacute;, biển số tạm thời</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Cấp chứng nhận đăng k&yacute; tạm thời v&agrave; biển số tạm thời bằng giấy</td>\r\n			<td colspan=\"3\" rowspan=\"1\">50.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Cấp chứng nhận đăng k&yacute; tạm thời v&agrave; biển số tạm thời bằng kim loại</td>\r\n			<td colspan=\"3\" rowspan=\"1\">150.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>*C&aacute;c khu vực I, II, III được hiểu cụ thể như sau:&nbsp;</strong></p>\r\n\r\n<p>a) Khu vực I gồm: Th&agrave;nh phố H&agrave; Nội, Th&agrave;nh phố Hồ Ch&iacute; Minh bao gồm tất cả c&aacute;c quận, huyện trực thuộc th&agrave;nh phố kh&ocirc;ng ph&acirc;n biệt nội th&agrave;nh hay ngoại th&agrave;nh.</p>\r\n\r\n<p>b) Khu vực II gồm: Th&agrave;nh phố trực thuộc Trung ương (trừ Th&agrave;nh phố H&agrave; Nội, Th&agrave;nh phố Hồ Ch&iacute; Minh) bao gồm tất cả c&aacute;c quận, huyện trực thuộc th&agrave;nh phố kh&ocirc;ng ph&acirc;n biệt nội th&agrave;nh hay ngoại th&agrave;nh; th&agrave;nh phố trực thuộc tỉnh, thị x&atilde; bao gồm tất cả c&aacute;c phường, x&atilde; thuộc th&agrave;nh phố, thị x&atilde; kh&ocirc;ng ph&acirc;n biệt phường nội th&agrave;nh, nội thị hay x&atilde; ngoại th&agrave;nh, ngoại thị.</p>\r\n\r\n<p>c) Khu vực III gồm: C&aacute;c khu vực kh&aacute;c ngo&agrave;i khu vực I v&agrave; khu vực II quy định tại điểm a v&agrave; điểm b Khoản n&agrave;y.</p>\r\n'),
(4, 'blog', 'gg', 'blog', 'published', '2023-11-08 17:14:59', '2023-11-08 17:14:59', 1, 'f'),
(37, 'Liên hệ', '', 'lien-he', '', '2023-10-26 14:16:41', '2023-10-26 14:16:41', 2, '<p>Li&ecirc;n hệ</p>\r\n'),
(38, 'Giới thiệu', '', 'gioi-thieu', '', '2023-10-26 14:16:44', '2023-10-26 14:16:44', 1, '<p>Giới thiệu</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `image_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `descs` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `desc_detail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` enum('draft','published','pending','archived') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_post_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `title`, `image_id`, `created_date`, `descs`, `desc_detail`, `status`, `slug`, `user_id`, `category_post_id`, `updated_at`) VALUES
(1, 'Doanh nghiệp EU tìm kiếm cơ hội hợp tác đầu tư công nghệ xanh tại Việt Nam', 1, '2023-10-30 10:15:41', 'Elon Musk nghĩ rằng các công ty lưới điện không có gì phải lo sợ các hệ thống mái ngói năng lượng mặt trời. Nhiều báo cáo cho rằng đang có một “cuộc chiến” giữa các công ty năng lượng mặt trời và các công ty lưới điện tại Hoa Kỳ, xoay quanh một số vấn đề quan trọng.', '<p><strong>Elon Musk nghĩ rằng c&aacute;c c&ocirc;ng ty lưới điện kh&ocirc;ng c&oacute; g&igrave; phải lo sợ c&aacute;c hệ thống m&aacute;i ng&oacute;i năng lượng mặt trời. Nhiều b&aacute;o c&aacute;o cho rằng đang c&oacute; một &ldquo;cuộc chiến&rdquo; giữa c&aacute;c c&ocirc;ng ty năng lượng mặt trời v&agrave; c&aacute;c c&ocirc;ng ty lưới điện tại Hoa Kỳ, xoay quanh một số vấn đề quan trọng.</strong></p>\r\n\r\n<p>Một trong số đ&oacute; l&agrave; nhiều tiểu bang c&oacute; luật &ldquo;mua lại điện&rdquo; đỏi hỏi c&aacute;c c&ocirc;ng ty lưới điện phải mua lại lượng điện dư thừa m&agrave; kh&aacute;ch h&agrave;ng tạo ra bởi năng lượng mặt trời. Cũng c&oacute; những lo ngại rằng người ta c&oacute; thể d&ugrave;ng ng&oacute;i năng lượng mặt trời tự sản xuất điện năng lượng mặt trời độc lập với lưới &ndash; v&agrave; như vậy sẽ giảm số người phụ thuộc v&agrave;o lưới điện v&agrave; chuyển c&aacute;c chi ph&iacute; điện lưới đ&oacute; cho những người kh&ocirc;ng d&ugrave;ng điện năng lượng mặt trời.</p>\r\n\r\n<p>Ph&aacute;t biểu tại buổi ra mắt sản phẩm m&aacute;i ng&oacute;i năng lượng mặt trời v&agrave; hệ thống pin dự trữ mới của Tesla v&agrave; SolarCity v&agrave;o thứ S&aacute;u vừa rồi, Musk, người vừa l&agrave; chủ tịch của cả hai c&ocirc;ng ty vừa l&agrave; CEO của Tesla, n&oacute;i về l&yacute; do tại sao tầm nh&igrave;n của &ocirc;ng ấy về điện năng lượng mặt trời tại Mỹ s&acirc;u xa hơn sẽ c&oacute; nhiều việc cho c&aacute;c c&ocirc;ng lưới điện chứ kh&ocirc;ng phải &iacute;t hơn</p>\r\n\r\n<p><img alt=\"\" src=\"https://anhquang.unitopcv.com/public/images/img-detail.jpg\" /></p>\r\n\r\n<p>Một trong số đ&oacute; l&agrave; nhiều tiểu bang c&oacute; luật &ldquo;mua lại điện&rdquo; đỏi hỏi c&aacute;c c&ocirc;ng ty lưới điện phải mua lại lượng điện dư thừa m&agrave; kh&aacute;ch h&agrave;ng tạo ra bởi năng lượng mặt trời. Cũng c&oacute; những lo ngại rằng người ta c&oacute; thể d&ugrave;ng ng&oacute;i năng lượng mặt trời tự sản xuất điện năng lượng mặt trời độc lập với lưới &ndash; v&agrave; như vậy sẽ giảm số người phụ thuộc v&agrave;o lưới điện v&agrave; chuyển c&aacute;c chi ph&iacute; điện lưới đ&oacute; cho những người kh&ocirc;ng d&ugrave;ng điện năng lượng mặt trời. Ph&aacute;t biểu tại buổi ra mắt sản phẩm m&aacute;i ng&oacute;i năng lượng mặt trời v&agrave; hệ thống pin dự trữ mới của Tesla v&agrave; SolarCity v&agrave;o thứ S&aacute;u vừa rồi, Musk, người vừa l&agrave; chủ tịch của cả hai c&ocirc;ng ty vừa l&agrave; CEO của Tesla, n&oacute;i về l&yacute; do tại sao tầm nh&igrave;n của &ocirc;ng ấy về điện năng lượng mặt trời tại Mỹ s&acirc;u xa hơn sẽ c&oacute; nhiều việc cho c&aacute;c c&ocirc;ng lưới điện chứ kh&ocirc;ng phải &iacute;t hơn.</p>\r\n\r\n<p>Một trong số đ&oacute; l&agrave; nhiều tiểu bang c&oacute; luật &ldquo;mua lại điện&rdquo; đỏi hỏi c&aacute;c c&ocirc;ng ty lưới điện phải mua lại lượng điện dư thừa m&agrave; kh&aacute;ch h&agrave;ng tạo ra bởi năng lượng mặt trời. Cũng c&oacute; những lo ngại rằng người ta c&oacute; thể d&ugrave;ng ng&oacute;i năng lượng mặt trời tự sản xuất điện năng lượng mặt trời độc lập với lưới &ndash; v&agrave; như vậy sẽ giảm số người phụ thuộc v&agrave;o lưới điện v&agrave; chuyển c&aacute;c chi ph&iacute; điện lưới đ&oacute; cho những người kh&ocirc;ng d&ugrave;ng điện năng lượng mặt trời.</p>\r\n\r\n<p>Một trong số đ&oacute; l&agrave; nhiều tiểu bang c&oacute; luật &ldquo;mua lại điện&rdquo; đỏi hỏi c&aacute;c c&ocirc;ng ty lưới điện phải mua lại lượng điện dư thừa m&agrave; kh&aacute;ch h&agrave;ng tạo ra bởi năng lượng mặt trời. Cũng c&oacute; những lo ngại rằng người ta c&oacute; thể d&ugrave;ng ng&oacute;i năng lượng mặt trời tự sản xuất điện năng lượng mặt trời độc lập với lưới &ndash; v&agrave; như vậy sẽ giảm số người phụ thuộc v&agrave;o lưới điện v&agrave; chuyển c&aacute;c chi ph&iacute; điện lưới đ&oacute; cho những người kh&ocirc;ng d&ugrave;ng điện năng lượng mặt trời. Ph&aacute;t biểu tại buổi ra mắt sản phẩm m&aacute;i ng&oacute;i năng lượng mặt trời v&agrave; hệ thống pin dự trữ mới của Tesla v&agrave; SolarCity v&agrave;o thứ S&aacute;u vừa rồi, Musk, người vừa l&agrave; chủ tịch của cả hai c&ocirc;ng ty vừa l&agrave; CEO của Tesla, n&oacute;i về l&yacute; do tại sao tầm nh&igrave;n của &ocirc;ng ấy về điện năng lượng mặt trời tại Mỹ s&acirc;u xa hơn sẽ c&oacute; nhiều việc cho c&aacute;c c&ocirc;ng lưới điện chứ kh&ocirc;ng phải &iacute;t hơn.</p>\r\n\r\n<p>Một trong số đ&oacute; l&agrave; nhiều tiểu bang c&oacute; luật &ldquo;mua lại điện&rdquo; đỏi hỏi c&aacute;c c&ocirc;ng ty lưới điện phải mua lại lượng điện dư thừa m&agrave; kh&aacute;ch h&agrave;ng tạo ra bởi năng lượng mặt trời. Cũng c&oacute; những lo ngại rằng người ta c&oacute; thể d&ugrave;ng ng&oacute;i năng lượng mặt trời tự sản xuất điện năng lượng mặt trời độc lập với lưới &ndash; v&agrave; như vậy sẽ giảm số người phụ thuộc v&agrave;o lưới điện v&agrave; chuyển c&aacute;c chi ph&iacute; điện lưới đ&oacute; cho những người kh&ocirc;ng d&ugrave;ng điện năng lượng mặt trời.</p>\r\n', 'published', 'trang/trang-1', 1, 1, '2023-10-30 10:15:41'),
(2, 'Quy định mới có hiệu lực trong tháng 10/2023, lái xe máy phải biết', 2, '2023-10-26 14:22:20', 'Bắt đầu từ ngày 22/10/2023 tới đây, lệ phí đăng ký, cấp biển số xe máy sẽ được điều chỉnh, trong đó có những thay đổi theo chiều hướng tăng lên.', '<h2><strong>Bắt đầu từ ng&agrave;y 22/10/2023 tới đ&acirc;y, lệ ph&iacute; đăng k&yacute;, cấp biển số xe m&aacute;y sẽ được điều chỉnh, trong đ&oacute; c&oacute; những thay đổi theo chiều hướng tăng l&ecirc;n.</strong></h2>\r\n\r\n<p>Th&ocirc;ng tư số 60/2023/TT-BTC Quy định mức thu, chế độ thu, nộp, miễn, quản l&yacute; lệ ph&iacute; đăng k&yacute;, cấp biển phương tiện giao th&ocirc;ng cơ giới đường bộ (gọi tắt l&agrave; Th&ocirc;ng tư 60) của Bộ T&agrave;i ch&iacute;nh ban h&agrave;nh ng&agrave;y 7/9/2023 bắt đầu c&oacute; hiệu lực kể từ ng&agrave;y 22/10/2023.</p>\r\n\r\n<p><img alt=\"Quy định mới có hiệu lực trong tháng 10/2023, lái xe máy phải biết - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/Quy-dinh-moi-co-hieu-luc-trong-thang-10-2023-lai-xe-may-phai-biet-dang-ky1-1696473979-70-width740height480.jpg\" /></p>\r\n\r\n<p>So với Th&ocirc;ng tư số 229/2016/TT-BTC (sẽ hết hiệu lực kể từ ng&agrave;y 22/10/2023) th&igrave; Th&ocirc;ng tư 60 tăng mức lệ ph&iacute; đăng k&yacute;, cấp biển số cho xe m&aacute;y ở khu vực I v&agrave; II l&ecirc;n gấp 2 lần, v&agrave; khu vực III th&igrave; mức lệ ph&iacute; n&agrave;y tăng l&ecirc;n gấp 3 lần. Việc tăng mức lệ ph&iacute; n&agrave;y được điều chỉnh khi m&agrave; Th&ocirc;ng tư 60 &aacute;p ngay mức trần cao nhất, chứ kh&ocirc;ng c&ograve;n để ở khoảng dao động như Th&ocirc;ng tư 229 nữa.</p>\r\n\r\n<p><img alt=\"Quy định mới có hiệu lực trong tháng 10/2023, lái xe máy phải biết - 2\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/Quy-dinh-moi-co-hieu-luc-trong-thang-10-2023-lai-xe-may-phai-biet-dang-ky2-1696473979-526-width740height555.jpg\" /></p>\r\n\r\n<p>Cụ thể mức ph&iacute; đăng k&yacute;, cấp biển số xe m&aacute;y theo Th&ocirc;ng tư 60 được thể hiện r&otilde; qua bảng sau:</p>\r\n\r\n<p><em>Đơn vị t&iacute;nh: Đồng</em></p>\r\n\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>TT</strong></td>\r\n			<td><strong>Nội dung lệ ph&iacute;</strong></td>\r\n			<td><strong>Khu vực I</strong></td>\r\n			<td><strong>Khu vực II</strong></td>\r\n			<td><strong>Khu vực III</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>I</strong></td>\r\n			<td><strong>Cấp lần đầu chứng nhận đăng k&yacute; k&egrave;m theo biển số</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Xe m&ocirc; t&ocirc; trị gi&aacute; đến 15.000.000 đồng</td>\r\n			<td>1.000.000</td>\r\n			<td>200.000</td>\r\n			<td>150.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Xe m&ocirc; t&ocirc; trị gi&aacute; tr&ecirc;n 15.000.000 đồng đến 40.000.000 đồng</td>\r\n			<td>2.000.0000</td>\r\n			<td>400.000</td>\r\n			<td>150.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Xe m&ocirc; t&ocirc; trị gi&aacute; tr&ecirc;n 40.000.000 đồng&nbsp;</td>\r\n			<td>4.000.0000</td>\r\n			<td>800.000</td>\r\n			<td>150.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>II</strong></td>\r\n			<td><strong>Cấp đổi chứng nhận đăng k&yacute;, biển số&nbsp;</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Xe m&ocirc; t&ocirc;</td>\r\n			<td colspan=\"3\" rowspan=\"1\">50.00</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>III</strong></td>\r\n			<td><strong>Cấp chứng nhận đăng k&yacute;, biển số tạm thời</strong></td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>Cấp chứng nhận đăng k&yacute; tạm thời v&agrave; biển số tạm thời bằng giấy</td>\r\n			<td colspan=\"3\" rowspan=\"1\">50.000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Cấp chứng nhận đăng k&yacute; tạm thời v&agrave; biển số tạm thời bằng kim loại</td>\r\n			<td colspan=\"3\" rowspan=\"1\">150.000</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>*C&aacute;c khu vực I, II, III được hiểu cụ thể như sau:&nbsp;</strong></p>\r\n\r\n<p>a) Khu vực I gồm: Th&agrave;nh phố H&agrave; Nội, Th&agrave;nh phố Hồ Ch&iacute; Minh bao gồm tất cả c&aacute;c quận, huyện trực thuộc th&agrave;nh phố kh&ocirc;ng ph&acirc;n biệt nội th&agrave;nh hay ngoại th&agrave;nh.</p>\r\n\r\n<p>b) Khu vực II gồm: Th&agrave;nh phố trực thuộc Trung ương (trừ Th&agrave;nh phố H&agrave; Nội, Th&agrave;nh phố Hồ Ch&iacute; Minh) bao gồm tất cả c&aacute;c quận, huyện trực thuộc th&agrave;nh phố kh&ocirc;ng ph&acirc;n biệt nội th&agrave;nh hay ngoại th&agrave;nh; th&agrave;nh phố trực thuộc tỉnh, thị x&atilde; bao gồm tất cả c&aacute;c phường, x&atilde; thuộc th&agrave;nh phố, thị x&atilde; kh&ocirc;ng ph&acirc;n biệt phường nội th&agrave;nh, nội thị hay x&atilde; ngoại th&agrave;nh, ngoại thị.</p>\r\n\r\n<p>c) Khu vực III gồm: C&aacute;c khu vực kh&aacute;c ngo&agrave;i khu vực I v&agrave; khu vực II quy định tại điểm a v&agrave; điểm b Khoản n&agrave;y.</p>\r\n', '', 'trang/trang-2', 1, 3, '0000-00-00 00:00:00'),
(3, 'Loạt xe tải Isuzu bị triệu hồi vì lỗi hệ thống điện', 1, '2023-10-26 14:23:46', 'Hãng Isuzu vừa phát đi thông tin triệu hồi gần  6.000 xe tải QKR tại Việt Nam do bị lỗi hệ thống điện.', '<h2><strong>H&atilde;ng Isuzu vừa ph&aacute;t đi th&ocirc;ng tin triệu hồi gần&nbsp; 6.000 xe tải QKR tại Việt Nam do bị lỗi hệ thống điện.</strong></h2>\r\n\r\n<p>Theo th&ocirc;ng b&aacute;o từ Cục Đăng kiểm Việt Nam, mẫu xe tải&nbsp;<a href=\"https://www.24h.com.vn/xe-isuzu-c747e6091.html\" title=\"Isuzu\">Isuzu</a>&nbsp;QKR đang bị triệu hồi do nh&aacute;nh d&acirc;y điện c&oacute; thể bị cọ x&aacute;t với quang treo nh&iacute;p dẫn đến hư hỏng v&agrave; mất kết nối giữa c&aacute;c hệ thống điện tr&ecirc;n xe, điều n&agrave;y c&oacute; thể khiến động cơ ngừng hoạt động hoặc kh&ocirc;ng khởi động được.&nbsp;</p>\r\n\r\n<p>Isuzu Việt Nam cho biết c&aacute;c xe tải QKR sản xuất sau ng&agrave;y 3/3/2023 đ&atilde; được xử l&yacute; vấn đề n&agrave;y trong qu&aacute; tr&igrave;nh lắp r&aacute;p nhưng c&aacute;c xe xuất xưởng trước ng&agrave;y n&agrave;y phải được triệu hồi để tr&aacute;nh nguy cơ tai nạn xảy ra. Tổng cộng c&oacute; 5.879 chiếc Isuzu QKR bị ảnh hưởng bởi đợt triệu hồi n&agrave;y tại Việt Nam, tất cả đều được sản xuất trong nước từ th&aacute;ng 4/2021 đến th&aacute;ng 3/2023.</p>\r\n\r\n<p><img alt=\"Loạt xe tải Isuzu bị triệu hồi vì lỗi hệ thống điện - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-02/Loat-xe-tai-Isuzu-bi-trieu-hoi-vi-loi-he-thong-dien-qkr-1696235750-641-width740height555.jpg\" /></p>\r\n\r\n<p>Từ ng&agrave;y 25/9/2023 đến 30/9/2026, chủ sở hữu c&oacute; thể mang c&aacute;c xe trong diện triệu hồi đến đại l&yacute; của Isuzu tr&ecirc;n to&agrave;n quốc, xe sẽ được định tuyến lại bộ d&acirc;y điện khung xe v&agrave; cố định bằng c&aacute;c loại d&acirc;y r&uacute;t ph&ugrave; hợp để đảm bảo khoảng c&aacute;ch giữa d&acirc;y điện v&agrave; quang treo nh&iacute;p. Thời gian thực hiện qu&aacute; tr&igrave;nh kiểm tra v&agrave; sửa chữa l&agrave; 4,5 giờ mỗi xe.</p>\r\n', '', 'trang/trang-3', 1, 2, '0000-00-00 00:00:00'),
(4, 'ĐT bóng chuyền nữ Việt Nam đấu Nhật Bản bán kết ASIAD', 2, '2023-10-26 14:23:48', '(Tin bóng chuyền) ĐT bóng chuyền nữ Việt Nam gặp lại Nhật Bản ở bán kết ASIAD chỉ 1 tháng sau trận đấu ở giải châu Á.', '<h2><strong>(Tin b&oacute;ng chuyền) ĐT b&oacute;ng chuyền nữ Việt Nam gặp lại Nhật Bản ở b&aacute;n kết ASIAD chỉ 1 th&aacute;ng sau trận đấu ở giải ch&acirc;u &Aacute;.</strong></h2>\r\n\r\n<p>Đ&atilde; chắc chắn gi&agrave;nh v&eacute; v&agrave;o b&aacute;n kết ASIAD lần đầu ti&ecirc;n trong lịch sử, ĐT b&oacute;ng chuyền nữ Việt Nam đ&uacute;ng như dự đo&aacute;n đ&atilde; kh&ocirc;ng bung sức trong trận gặp Trung Quốc chiều tối 5/10 v&agrave; để thua kh&aacute; nhanh sau 3 set. Sự ch&uacute; &yacute; của c&aacute;c cầu thủ v&agrave; HLV Nguyễn Tuấn Kiệt đ&atilde; hướng về b&aacute;n kết v&agrave; cơ hội tranh huy chương.</p>\r\n\r\n<p><img alt=\"ĐT bóng chuyền nữ Việt Nam đấu Nhật Bản bán kết ASIAD, mơ &quot;đòi nợ&quot; để giành huy chương - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/2023-10-05_21-52-23-495-1696517932-488-width740height495.jpg\" /></p>\r\n\r\n<p>1 th&aacute;ng trước Nhật Bản đ&atilde; phải mất 5 set để vượt qua tuyển Việt Nam ở trận tranh hạng Ba&nbsp;giải v&ocirc; địch ch&acirc;u &Aacute;</p>\r\n\r\n<p>Sau trận đấu giữa Việt Nam v&agrave; Trung Quốc, tuyển nữ Nhật Bản đ&atilde; đ&aacute;nh bại Th&aacute;i Lan cũng chỉ sau 3 set để x&aacute;c định c&aacute;c cặp đấu b&aacute;n kết. Với lực lượng kh&aacute; ngang nhau, Nhật Bản c&oacute; được sự tỏa s&aacute;ng của c&aacute;c c&aacute; nh&acirc;n ở đ&uacute;ng thời điểm để thắng&nbsp;25-23, 25-19, 25-23.</p>\r\n\r\n<p>Như vậy ĐT nữ Việt Nam sẽ đối đầu Nhật Bản ở trận b&aacute;n kết v&agrave; đ&acirc;y được xem l&agrave; một cặp đấu đ&aacute;ng chờ đợi, bởi lần gần nhất hai đội gặp nhau ở giải v&ocirc; địch ch&acirc;u &Aacute; đầu th&aacute;ng 9 năm nay Nhật Bản với tư c&aacute;ch ĐKVĐ đ&atilde; phải đấu 5 set để vượt qua tuyển Việt Nam trong trận tranh hạng Ba&nbsp;với c&aacute;c tỷ số 21-25, 25-14, 25-22, 20-25, 15-11.&nbsp;</p>\r\n\r\n<p>Đ&atilde; thua đ&aacute;ng tiếc ở lần gặp đ&oacute; v&agrave; lỡ tấm v&eacute; dự giải v&ocirc; địch thế giới, nhưng h&ocirc;m nay ĐT Việt Nam sẽ c&oacute; thời cơ đ&ograve;i lại m&oacute;n nợ n&agrave;y,&nbsp;thậm ch&iacute; mơ về một tấm HCB trở l&ecirc;n. Nhật Bản vẫn rất mạnh với những&nbsp;Yuki Nishikawa hay Haruyo Shimamura đ&oacute;ng vai tr&ograve; ghi điểm ch&iacute;nh, nhưng cuộc chạm tr&aacute;n 1 th&aacute;ng trước cho thấy Thanh Th&uacute;y, Kiều Trinh c&ugrave;ng c&aacute;c đồng đội c&oacute; thể tạo ra một bất ngờ.</p>\r\n\r\n<p>Trận đấu Việt Nam - Nhật Bản sẽ l&agrave; trận b&aacute;n kết 1 v&agrave; diễn ra v&agrave;o l&uacute;c 13h30 ng&agrave;y 6/10 (giờ Việt Nam). Trong khi đ&oacute; Th&aacute;i Lan hứa hẹn sẽ rất kh&oacute; khăn trong trận b&aacute;n kết c&ograve;n lại gặp Trung Quốc v&agrave;o l&uacute;c 18h c&ugrave;ng ng&agrave;y.</p>\r\n', '', 'trang/trang-4', 1, 1, '0000-00-00 00:00:00'),
(5, 'Khi iPhone không còn là mặt hàng xa xỉ', 1, '2023-10-26 14:23:50', 'Những chiếc iPhone gần như đã chiếm lĩnh phần lớn thị trường smartphone trong những năm gần đây, và việc sở hữu nó trở nên “quá bình thường”.', '<h2><strong>Những chiếc iPhone gần như đ&atilde; chiếm lĩnh phần lớn thị trường smartphone trong những năm gần đ&acirc;y, v&agrave; việc sở hữu n&oacute; trở n&ecirc;n &ldquo;qu&aacute; b&igrave;nh thường&rdquo;.</strong></h2>\r\n\r\n<p>Hầu như mọi người đi đường đều c&oacute; một chiếc iPhone. Kh&ocirc;ng chỉ người lớn m&agrave; cả học sinh tiểu học cũng sử dụng iPhone. Ch&iacute;nh v&igrave; l&yacute; do n&agrave;y, một số cư d&acirc;n mạng b&agrave;y tỏ &yacute; kiến khi cho rằng việc học sinh tiểu học c&oacute; thể sở hữu iPhone khi c&ograve;n nhỏ cho thấy những chiếc điện thoại của Apple đ&atilde; kh&ocirc;ng c&ograve;n l&agrave; mặt h&agrave;ng xa xỉ như trước đ&acirc;y nữa.</p>\r\n\r\n<p><img alt=\"Khi iPhone không còn là mặt hàng xa xỉ - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/2-1696519201-101-width740height493.jpg\" /></p>\r\n\r\n<p>Nhiều người vẫn xem iPhone l&agrave; một sản phẩm xa xỉ.</p>\r\n\r\n<p>Quay trở lại những năm trước 2010, nhiều người thế hệ 8x cho rằng việc sở hữu một chiếc điện thoại di động ngay trong thời c&ograve;n cấp 3 cũng đ&atilde; chứng minh sự kh&aacute; giả, đặc biệt l&agrave; những sản phẩm như điện thoại dạng trượt. Nhưng giờ đ&acirc;y, c&aacute;c học sinh tiểu học đều c&oacute; thể sử dụng iPhone. So s&aacute;nh với ho&agrave;n cảnh trước đ&acirc;y, r&otilde; r&agrave;ng nhiều người thế hệ 8x r&otilde; r&agrave;ng c&oacute; những cảm x&uacute;c kh&aacute;c biệt. Một người cho rằng: &ldquo;T&ocirc;i dường như l&agrave; một người lỗi thời. Lương thấp v&agrave; vẫn sử dụng điện thoại Android. Trong khi đ&oacute;, bọn trẻ đang sử dụng iPhone. Tại sao lại như vậy? Những đứa trẻ c&oacute; ch&uacute;ng trước khi kiếm được tiền. Thậm ch&iacute; đ&oacute; kh&ocirc;ng phải l&agrave; những chiếc điện thoại cũ m&agrave; một số sở hữu những chiếc iPhone thế hệ mới nhất&rdquo;.</p>\r\n\r\n<p>Ngay sau khi th&ocirc;ng tin được đăng tải, nhiều cư d&acirc;n mạng đ&atilde; để lại tin nhắn v&agrave; phản hồi, nhiều người cho rằng thời thế đ&atilde; thay đổi, iPhone từ l&acirc;u đ&atilde; được coi l&agrave; &ldquo;sản phẩm xa xỉ, tương đương với sự gi&agrave;u c&oacute;&rdquo;. Nhưng mọi thứ giờ đ&acirc;y đ&atilde; kh&ocirc;ng c&ograve;n như vậy v&agrave; quan điểm n&agrave;y cần phải thay đổi. Theo cộng đồng, trước đ&acirc;y iPhone l&agrave; h&agrave;ng chất lượng cao, nhưng b&acirc;y giờ th&igrave; gi&aacute; cả phải chăng. Thậm ch&iacute;, c&oacute; những &yacute; kiến cho rằng việc iPhone trở th&agrave;nh sản phẩm phổ th&ocirc;ng kh&ocirc;ng phải l&agrave; qu&aacute; ngạc nhi&ecirc;n.</p>\r\n\r\n<p><img alt=\"Khi iPhone không còn là mặt hàng xa xỉ - 2\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/3-1696519212-84-width740height493.jpg\" /></p>\r\n\r\n<p>Nhưng thực tế iPhone đ&atilde; kh&aacute; l&agrave; phổ biến.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, một số người c&ograve;n chỉ ra rằng iPhone kh&aacute; bền bỉ v&agrave; c&oacute; gi&aacute; trị b&aacute;n lại cao hơn so với c&aacute;c d&ograve;ng điện thoại di động kh&aacute;c, với nhiều chiếc iPhone được trẻ em sử dụng thực chất l&agrave; điện thoại cũ m&agrave; c&aacute;c cha mẹ vứt đi cho con c&aacute;i sử dụng, hoặc chỉ đơn giản l&agrave; mua điện thoại cũ. Ngay cả khi đ&oacute; l&agrave; điện thoại cũ m&agrave; c&aacute;c bậc cha mẹ bỏ đi, ch&uacute;ng vẫn rất hữu &iacute;ch. Một người nhận x&eacute;t: &ldquo;Việc cha mẹ đổi c&aacute;i cũ tặng người gi&agrave; v&agrave; trẻ em ở nh&agrave; l&agrave; chuyện rất b&igrave;nh thường&rdquo;, hoặc đơn giản &ldquo;Chat mẹ thay c&aacute;i mới v&agrave; đưa c&aacute;i cũ cho con&rdquo;.</p>\r\n\r\n<p>Nhiều cư d&acirc;n mạng cho rằng, tr&ecirc;n thực tế, iPhone kh&ocirc;ng đắt như mọi người nghĩ khi nh&igrave;n v&agrave;o tần suất sử dụng h&agrave;ng ng&agrave;y v&agrave; độ tuổi của iPhone, gi&aacute; th&agrave;nh của ch&uacute;ng kh&ocirc;ng đặc biệt cao. Ngo&agrave;i ra, nếu người d&ugrave;ng mua một chiếc &ldquo;điện thoại mới&rdquo; hoặc &ldquo;thay điện thoại cũ bằng điện thoại mới, chi ph&iacute; sẽ rẻ hơn dự kiến&rdquo;. Điều n&agrave;y &aacute;m chỉ đến c&aacute;c ch&iacute;nh s&aacute;ch thu cũ đổi mới sẽ gi&uacute;p việc mua iPhone mới trở n&ecirc;n rẻ hơn nhiều.</p>\r\n', '', 'trang/trang-5', 1, 1, '0000-00-00 00:00:00'),
(6, 'Camera AI đã có thể cảnh báo cháy nổ nhờ bản đồ nhiệt tích hợp', 2, '2023-10-26 14:23:52', 'Đó là một trong nhiều giải pháp tại Ngày Chuyển đổi số quốc gia 2023 do VINASA và UBND TP.HCM tổ chức.', '<h2><strong>Đ&oacute; l&agrave; một trong nhiều giải ph&aacute;p tại Ng&agrave;y Chuyển đổi số quốc gia 2023 do VINASA v&agrave; UBND TP.HCM tổ chức.</strong></h2>\r\n\r\n<p>Triển l&atilde;m v&agrave; Hội nghị Tech4Life l&agrave; sự kiện ch&agrave;o mừng Ng&agrave;y Chuyển đổi số quốc gia 2023 do VINASA v&agrave; UBND TP.HCM tổ chức với chủ đề &ldquo;C&ocirc;ng nghệ n&acirc;ng tầm cuộc sống&rdquo;. Sự kiện c&oacute; sự tham gia của nhiều doanh nghiệp c&ocirc;ng nghệ, start-up với&nbsp;c&aacute;c sản phẩm, giải ph&aacute;p c&ocirc;ng nghệ mới như: AI, IoT, Blockchain, Web 3.0, AR/VR,&hellip;</p>\r\n\r\n<p><img alt=\"Camera AI đã có thể cảnh báo cháy nổ nhờ bản đồ nhiệt tích hợp - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05/vng-db-1696498973-505-width740height512.jpg\" /></p>\r\n\r\n<p>Tr&iacute; tuệ nh&acirc;n tạo đang len lỏi v&agrave;o nhiều sản phẩm c&ocirc;ng nghệ mới. (Ảnh minh họa)</p>\r\n\r\n<p>Tại sự kiện n&agrave;y, LifeVNG Digital Business vừa giới thiệu giải ph&aacute;p c&ocirc;ng nghệ Cloud Camera AI trong vận h&agrave;nh đ&ocirc; thị th&ocirc;ng minh, v&agrave; nền tảng điện to&aacute;n đ&aacute;m m&acirc;y hỗ trợ doanh nghiệp chuyển đổi số của VNG Cloud. VNG Digital Business l&agrave; mảng kinh doanh mới nhất v&agrave; cũng l&agrave; một trong 4 mảng kinh doanh cốt l&otilde;i của VNG hiện nay, tập trung v&agrave;o c&aacute;c giải ph&aacute;p c&ocirc;ng nghệ B2B, hỗ trợ doanh nghiệp chuyển đổi số.</p>\r\n\r\n<p>Trong đ&oacute;, Cloud Camera AI l&agrave; bộ giải ph&aacute;p camera ứng dụng tr&iacute; tuệ nh&acirc;n tạo do Veka.ai (tiền th&acirc;n l&agrave; vCloudcam) ph&aacute;t triển&nbsp;cho từng nh&oacute;m ng&agrave;nh: Ng&acirc;n h&agrave;ng, Chuỗi b&aacute;n lẻ, An ninh, Giao th&ocirc;ng v&agrave; T&ograve;a nh&agrave;/Chung cư, Nh&agrave; m&aacute;y, Khu c&ocirc;ng nghiệp. Giải ph&aacute;p c&oacute; chức năng ph&acirc;n t&iacute;ch v&agrave; đưa ra cảnh b&aacute;o, tăng cường an ninh v&agrave; ph&ograve;ng ngừa c&aacute;c rủi ro c&oacute; thể xảy ra.</p>\r\n\r\n<p>Theo Market Research Future, thị trường Camera AI (Camera ứng dụng tr&iacute; tuệ nh&acirc;n tạo) to&agrave;n cầu đ&atilde; đạt quy m&ocirc; 20,1 tỷ USD trong năm 2022 v&agrave; được dự đo&aacute;n sẽ tăng l&ecirc;n 23,1 tỷ USD v&agrave;o năm 2023. Tốc độ tăng trưởng h&agrave;ng năm được dự đo&aacute;n l&ecirc;n tới 15,2% trong giai đoạn từ 2023 - 2032. Sự tăng trưởng n&agrave;y xuất ph&aacute;t từ nhu cầu gi&aacute;m s&aacute;t v&agrave; quản l&yacute; tại c&aacute;c cửa h&agrave;ng thương mại, cải thiện hiệu quả kinh doanh cũng như gia tăng trải nghiệm cho kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Trong khu&ocirc;n khổ sự kiện Tech4Life, đại diện Veka.ai cũng giới thiệu s&acirc;u hơn về giải ph&aacute;p quản l&yacute; h&agrave;ng r&agrave;o an ninh từ xa, kiểm so&aacute;t phương tiện v&agrave; nhận diện người ra v&agrave;o một c&aacute;ch tự động,... nhờ khả năng qu&eacute;t gương mặt, chế độ cảnh b&aacute;o sớm nguy cơ ch&aacute;y nổ với bản đồ nhiệt.</p>\r\n\r\n<p>Nhờ v&agrave;o nền tảng AI, hệ thống Camera AI của Veka.ai c&ograve;n gi&uacute;p gi&aacute;m s&aacute;t giao th&ocirc;ng v&agrave; trật tự trong th&agrave;nh phố bằng c&aacute;c chế độ nhận diện v&agrave; cảnh b&aacute;o sớm c&aacute;c h&agrave;nh vi bất thường, truy xuất h&igrave;nh ảnh, h&agrave;nh tr&igrave;nh của c&aacute;c phương tiện sai phạm, đối tượng khả nghi đang bị theo d&otilde;i hoặc cần được theo d&otilde;i cho c&aacute;c cơ quan chức năng.</p>\r\n\r\n<p>B&ecirc;n cạnh sự xuất hiện của Veka.ai v&agrave; VNG Cloud trong c&aacute;c phi&ecirc;n thảo luận của Tech4Life, gian triển l&atilde;m của VNG Digital Business cũng tr&igrave;nh diễn nhiều nh&oacute;m giải ph&aacute;p c&ocirc;ng nghệ phục vụ chuyển đổi số cho doanh nghiệp kh&aacute;c, bao gồm: PRISM (Hệ thống tự động h&oacute;a t&ograve;a nh&agrave;), TrueID (Đơn vị ph&aacute;t triển ứng dụng định danh người d&ugrave;ng tr&ecirc;n nền tảng AI), A4B (Giải ph&aacute;p Quản trị doanh nghiệp),&nbsp;Verichains (Đơn vị cung cấp giải ph&aacute;p an ninh mạng chuy&ecirc;n s&acirc;u) v&agrave; VNG Data Center (Trung t&acirc;m dữ liệu đạt chuẩn Uptime Tier III).</p>\r\n', '', 'trang/trang-6', 1, 3, '0000-00-00 00:00:00'),
(7, 'TPHCM sẽ không có quỹ lớp, quỹ trường', 1, '2023-10-26 14:23:54', 'Chiều 5/10, tại cuộc họp báo, trả lời PV Tiền Phong về việc lạm thu, ông Hồ Tấn Minh, Chánh Văn phòng Sở GD&ĐT TPHCM cho biết, sở vừa có văn bản hướng dẫn cụ thể về việc thu vận động tài trợ. Theo đó, các trường trên địa bàn TPHCM sẽ không có quỹ lớp, quỹ trường.', '<h2><strong>Chiều 5/10, tại cuộc họp b&aacute;o, trả lời PV Tiền Phong về việc lạm thu, &ocirc;ng Hồ Tấn Minh, Ch&aacute;nh Văn ph&ograve;ng Sở GD&amp;ĐT TPHCM cho biết, sở vừa c&oacute; văn bản hướng dẫn cụ thể về việc thu vận động t&agrave;i trợ. Theo đ&oacute;, c&aacute;c trường tr&ecirc;n địa b&agrave;n TPHCM sẽ kh&ocirc;ng c&oacute; quỹ lớp, quỹ trường.</strong></h2>\r\n\r\n<p>Tất cả c&aacute;c hoạt động thu trong nh&agrave; trường th&igrave; hiệu trưởng phải kiểm duyệt v&agrave; chịu tr&aacute;ch nhiệm. Trước khi thực hiện thu phải c&oacute; dự to&aacute;n v&agrave; c&ocirc;ng khai r&otilde; r&agrave;ng cho phụ huynh học sinh về mục đ&iacute;ch thu v&agrave; chi, dự to&aacute;n được sở duyệt mới được ph&eacute;p thu. &Ocirc;ng Minh cũng cho biết, việc thu v&agrave; chi đầu năm học đang được HĐND th&agrave;nh phố rất quan t&acirc;m.</p>\r\n\r\n<p>&ldquo;Tr&ecirc;n thực tế, một số đơn vị đ&atilde; l&agrave;m kh&ocirc;ng đ&uacute;ng quy tr&igrave;nh, kh&ocirc;ng tu&acirc;n theo hướng dẫn thu,chi. V&igrave; một số trường hợp l&agrave;m kh&ocirc;ng đ&uacute;ng m&agrave; cả ng&agrave;nh&nbsp;<a href=\"https://www.24h.com.vn/giao-duc-du-hoc-c216.html\" title=\"giáo dục\">gi&aacute;o dục</a>&nbsp;th&agrave;nh phố bị mang tiếng l&agrave; lạm thu, nghe rất buồn&rdquo;, &ocirc;ng Minh n&oacute;i v&agrave; cho biết th&ecirc;m, hiện tại Sở GD&amp;ĐT TPHCM đang kiểm tra đột xuất đối với c&aacute;c cơ sở gi&aacute;o dục để ph&aacute;t hiện sai phạm. Sở ki&ecirc;n quyết xử l&yacute; nghi&ecirc;m đối với c&aacute;c cơ sở gi&aacute;o dục nếu l&agrave;m sai quy định về việc thu, chi&rdquo;.</p>\r\n\r\n<p>Sau qu&aacute; tr&igrave;nh triển khai, thanh tra sở sẽ tiến h&agrave;nh hậu kiểm. Những cơ sở thu, chi sai mục đ&iacute;ch, sai quy định sẽ bị xử l&yacute; nghi&ecirc;m. &ldquo;Ng&agrave;nh gi&aacute;o dục th&agrave;nh phố ki&ecirc;n quyết xử l&yacute;, kh&ocirc;ng thể để t&igrave;nh trạng trong trường c&oacute; nguồn thu m&agrave; hiệu trưởng kh&ocirc;ng biết&rdquo;, &ocirc;ng Minh n&oacute;i.</p>\r\n\r\n<p><img alt=\"TPHCM sẽ không có quỹ lớp, quỹ trường - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696554218-tp-mk5-5495-width645height440.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p>Học sinh TPHCM trong năm học mới 2023- 2024. Ảnh: Nguyễn Dũng</p>\r\n\r\n<p>Về h&igrave;nh thức xử l&yacute; để ngăn chặn t&aacute;i diễn trong những năm tiếp theo, &ocirc;ng Minh cho rằng, t&ugrave;y theo mức độ của vụ việc để c&oacute; h&igrave;nh thức xử l&yacute; ph&ugrave; hợp. Khi xử l&yacute; c&aacute;n bộ quản l&yacute; cần c&oacute; quy tr&igrave;nh, tu&acirc;n thủ nội quy theo c&aacute;c th&ocirc;ng tư quy định. Trường hợp vi phạm thu, chi tại Trường tiểu học Hồng H&agrave; (quận B&igrave;nh Thạnh), Sở GD&amp;ĐT TPHCM đ&atilde; xử l&yacute; rất nghi&ecirc;m khắc với h&igrave;nh thức bắt buộc phải trả tiền lại cho phụ huynh, ph&ecirc; b&igrave;nh gi&aacute;o vi&ecirc;n v&agrave; l&atilde;nh đạo nh&agrave; trường. Khi ph&ecirc; b&igrave;nh th&igrave; việc đ&aacute;nh gi&aacute; vi&ecirc;n chức của gi&aacute;o vi&ecirc;n sẽ bị ảnh hưởng. &quot;Nếu đ&atilde; c&oacute; hướng dẫn m&agrave; l&atilde;nh đạo nh&agrave; trường, thủ trưởng đơn vị vẫn c&ograve;n l&agrave;m sai th&igrave; sẽ c&oacute; những h&igrave;nh thức kỷ luật kh&aacute;c cao hơn&rdquo;, &ocirc;ng Minh n&oacute;i.</p>\r\n\r\n<p>Trước đ&oacute;, tại hội nghị giao ban khối ph&ograve;ng GD&amp;ĐT ng&agrave;y 4/10, Gi&aacute;m đốc Sở GD&amp;ĐT TPHCM Nguyễn Văn Hiếu nhắc lại việc Th&ocirc;ng tư 16 của Bộ GD-ĐT quy định r&otilde; về việc nhận t&agrave;i trợ, thu t&agrave;i trợ. Tuy nhi&ecirc;n, hiện nay c&oacute; t&igrave;nh trạng c&aacute;c trường nhắm v&agrave;o phụ huynh để thu, rồi chia trung b&igrave;nh tr&ecirc;n đầu phụ huynh. &ldquo;Thầy, c&ocirc; gi&aacute;o kh&ocirc;ng thu cho m&igrave;nh nhưng ng&oacute; lơ để xảy ra những khoản thu rất phản cảm. Đ&atilde; được hướng dẫn, tập huấn n&ecirc;n thu sai th&igrave; phải xử l&yacute; v&igrave; để ảnh hưởng gh&ecirc; gớm&rdquo;- &ocirc;ng Hiếu n&oacute;i v&agrave; nhấn mạnh mọi vấn đề li&ecirc;n quan giữa ban đại diện phụ huynh lớp, trường th&igrave; hiệu trưởng đều phải nắm th&ocirc;ng tin, b&agrave;n bạc để c&oacute; sự đồng thuận.</p>\r\n\r\n<p>Đồng thời, người đứng đầu ng&agrave;nh GD&amp;ĐT th&agrave;nh phố đề nghị Ph&ograve;ng Kế hoạch T&agrave;i ch&iacute;nh hướng dẫn c&aacute;c trường về tất cả c&aacute;c khoản thu phải kh&ocirc;ng d&ugrave;ng tiền mặt. Việc n&agrave;y gi&uacute;p Sở GD&amp;ĐT TPHCM quản l&yacute; được vấn đề thu v&agrave; chi, v&igrave; c&aacute;c trường sẽ phải c&ocirc;ng khai mục đ&iacute;ch thu l&agrave; g&igrave;, nội dung chi l&agrave; g&igrave;. Sở cũng đề nghị c&aacute;c ph&ograve;ng GD&amp;ĐT tham mưu UBND c&aacute;c quận, huyện kiểm tra, r&agrave; so&aacute;t, chấn chỉnh trường hợp thu kh&ocirc;ng đ&uacute;ng quy định.</p>\r\n', '', 'trang/trang-7', 1, 1, '0000-00-00 00:00:00'),
(8, 'Chồi cây mọc hoang, có gì ', 2, '2023-10-26 14:23:55', 'Loại cây mọc hoang từng bị bỏ đi nay bỗng trở thành loại rau \"đắt đỏ trên thế giới\", giá lên tới hàng chục triệu đồng/kg, thậm chí có tiền chưa chắc đã mua được.', '<h2><strong>Loại c&acirc;y mọc hoang từng bị bỏ đi nay bỗng trở th&agrave;nh loại rau &quot;đắt đỏ tr&ecirc;n thế giới&quot;, gi&aacute; l&ecirc;n tới h&agrave;ng chục triệu đồng/kg, thậm ch&iacute; c&oacute; tiền chưa chắc đ&atilde; mua được.</strong></h2>\r\n\r\n<p><strong>Chồi hoa bia&nbsp;&ldquo;đắt hơn cả v&agrave;ng&rdquo;</strong></p>\r\n\r\n<p>Loại rau mọc hoang được nhắc đến ở đ&acirc;y l&agrave; chồi hoa bia. Đ&acirc;y l&agrave; một trong những loại rau đắt nhất thế giới. Chồi loại rau n&agrave;y c&oacute; hương vị &quot;lạ&quot; n&ecirc;n thường được c&aacute;c nh&agrave; h&agrave;ng sang trọng chế&nbsp; biến phục vụ thực kh&aacute;ch.</p>\r\n\r\n<p>Hoa bia l&agrave; thực vật dạng d&acirc;y leo trong họ Cannabaceae. Hoa bia được mi&ecirc;u tả khoa học lần đầu ti&ecirc;n v&agrave;o năm 1753. Hoa bia l&agrave; loại c&acirc;y sống l&acirc;u năm, c&oacute; chiều cao trung b&igrave;nh từ 10 đến 15m. Hoa bia c&oacute; hoa đực v&agrave; c&aacute;i ri&ecirc;ng cho từng c&acirc;y. Nguồn gốc đầu ti&ecirc;n của hoa bia l&agrave; mọc hoang tại một số nơi ở ch&acirc;u &Acirc;u, từ ven bờ s&ocirc;ng đến v&agrave;o tận trong rừng. Sau đ&oacute; một số người d&acirc;n đ&atilde; đưa ch&uacute;ng về trồng v&agrave; chăm s&oacute;c trong vườn nh&agrave;.</p>\r\n\r\n<p>N&oacute; được d&ugrave;ng để tạo vị đắng cho bia kể từ thế kỷ 17, tuy nhi&ecirc;n người ta chỉ sử dụng hoa c&aacute;i chưa thụ phấn. Theo c&aacute;c chuy&ecirc;n gia, chồi hoa bia l&agrave; những ngọn m&agrave;u xanh l&aacute; c&acirc;y của c&acirc;y hoa bia - một loại c&acirc;y được sử dụng để sản xuất đồ uống c&oacute; cồn. Hoa bia c&oacute; c&aacute;c hiệu ứng kh&aacute;ng sinh gi&uacute;p cho hoạt động của men bia tốt hơn trước c&aacute;c loại vi sinh vật kh&ocirc;ng mong muốn. Việc sử dụng hoa bia c&ograve;n gi&uacute;p bia duy tr&igrave; thời gian giữ bọt l&acirc;u hơn.</p>\r\n\r\n<p><img alt=\"Chồi cây mọc hoang, có gì &quot;hot&quot; mà giá lên đến 23 triệu đồng/kg - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-05//1696516538-choi-cay-moc-hoang-co-gi-hot-ma-co-gia-len-den-23-trieu-dong-kg-32-width958height600.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p>Chồi hoa bia l&agrave; một trong những loại rau đắt nhất thế giới.&nbsp;Sở dĩ gi&aacute; của chồi hoa bia cao đến vậy l&agrave; v&igrave; sự khan hiếm của lo&agrave;i c&acirc;y n&agrave;y.</p>\r\n\r\n<p><strong>Chồi hoa bia c&oacute; g&igrave; đặc biệt m&agrave; gi&aacute; đắt đỏ nhất thế giới?</strong></p>\r\n\r\n<p>Thời gian qua, chồi hoa bia lại trở th&agrave;nh một trong những loại rau c&oacute; gi&aacute; th&agrave;nh cao nhất thế giới. Chồi hoa bia được b&aacute;n với gi&aacute; từ 1.000-1.500 USD (tương đương 23-35 triệu đồng) mỗi kg.&nbsp;Sở dĩ gi&aacute; của chồi hoa bia cao đến như vậy l&agrave; bởi sự khan hiếm của loại c&acirc;y dại n&agrave;y.</p>\r\n\r\n<p>Hoa bia chỉ đ&acirc;m chồi một lần v&agrave;o m&ugrave;a xu&acirc;n, khoảng giữa th&aacute;ng 3 v&agrave; th&aacute;ng 4 ở một số nước ch&acirc;u &Acirc;u. Hơn nữa, thời gian sống của chồi hoa bia kh&ocirc;ng l&acirc;u v&agrave; chỉ được thu h&aacute;i bằng tay. Theo đ&oacute; gi&aacute; trị của n&oacute; cũng tăng từ đ&oacute;.&nbsp;</p>\r\n\r\n<p>Nhưng &iacute;t người biết rằng chồi hoa bia từng l&agrave; c&acirc;y mọc hoang dại tại một số nơi ở ch&acirc;u &Acirc;u, từ ven bờ s&ocirc;ng đến v&agrave;o tận trong rừng, khi đ&oacute; &iacute;t ai để &yacute; tới n&oacute;. Hơn nữa, thời gian sống của chồi hoa bia kh&ocirc;ng l&acirc;u. Chỉ một thời gian ngắn sau khi đ&acirc;m chồi hoa bia sẽ nhanh ch&oacute;ng lụi t&agrave;n nếu kh&ocirc;ng được thu hoạch.&nbsp;Kh&ocirc;ng những vậy, qu&aacute; tr&igrave;nh thu hoạch loại n&ocirc;ng sản n&agrave;y cũng mất rất nhiều thời gian v&agrave; cần độ tỉ mỉ cao.&nbsp;</p>\r\n\r\n<p>Một trong những l&yacute; do khiến chồi hoa bia trở n&ecirc;n đắt đỏ tr&ecirc;n thế giới l&agrave; bởi ch&uacute;ng kh&ocirc;ng c&oacute; nhiều tr&ecirc;n thị trường. Loại n&ocirc;ng sản n&agrave;y mỗi năm chỉ nở 1 lần. Hoa bia chỉ đ&acirc;m chồi chủ yếu v&agrave;o m&ugrave;a xu&acirc;n, trong giai đoạn khoảng giữa th&aacute;ng 2 v&agrave; th&aacute;ng 3.</p>\r\n\r\n<p>Đặc biệt loại chồi hoa bia chủ yếu ph&aacute;t triển ở những v&ugrave;ng lạnh v&agrave; cần khoảng 5 đến 6 tuần ở nhiệt độ gần như đ&oacute;ng băng để ph&aacute;t triển tối ưu. Ch&uacute;ng chủ yếu được trồng ở H&agrave; Lan, Anh v&agrave; Bỉ.</p>\r\n\r\n<p>Chồi hoa bia kh&ocirc;ng mọc theo h&agrave;ng đồng nhất n&ecirc;n phải thu hoạch ho&agrave;n to&agrave;n bằng tay v&agrave; mất nhiều c&ocirc;ng sức. Để thu hoạch chồi hoa bia, người ta phải c&uacute;i người xuống để t&igrave;m ra những chồi non trong c&aacute;c t&aacute;n l&aacute;. Đặc biệt, k&iacute;ch thước của ch&uacute;ng kh&aacute; nhỏ n&ecirc;n người n&ocirc;ng d&acirc;n phải nhặt lượm rất l&acirc;u mới c&oacute; thể thu hoạch được một lượng kh&aacute; nhỏ.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, chồi hoa bia cũng cần được bảo quản trong m&ocirc;i trường tốt v&agrave; ph&ugrave; hợp mới c&oacute; thể giữ nguy&ecirc;n chất lượng đến tay kh&aacute;ch h&agrave;ng.</p>\r\n', '', 'trang/trang-8', 1, 1, '0000-00-00 00:00:00'),
(9, 'Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến?', 1, '2023-10-26 14:23:57', 'Núi Dukono là một trong những ngọn núi lửa hoạt động mạnh nhất trên thế giới và phun trào không ngừng kể từ năm 1933. Rất nhiều ngươi thích leo núi đã đến gần ngọn núi lửa đáng sợ này để khám phá những điều thú vị và đây là một trong những chuyến đi bộ đường dài tuyệt vời nhất tại Indonesia.', '<h2><strong>N&uacute;i Dukono l&agrave; một trong những ngọn n&uacute;i lửa hoạt động mạnh nhất tr&ecirc;n thế giới v&agrave; phun tr&agrave;o kh&ocirc;ng ngừng kể từ năm 1933. Rất nhiều ngươi th&iacute;ch leo n&uacute;i đ&atilde; đến gần ngọn n&uacute;i lửa đ&aacute;ng sợ n&agrave;y để kh&aacute;m ph&aacute; những điều th&uacute; vị v&agrave; đ&acirc;y l&agrave; một trong những chuyến đi bộ đường d&agrave;i tuyệt vời nhất tại Indonesia.</strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-1-1696425158-503-width740height592.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>N&uacute;i Dukono nằm tr&ecirc;n đảo Halmahera, ph&iacute;a Bắc Maluku, Indonesia. Bạn c&oacute; thể leo l&ecirc;n n&uacute;i Dukono trong 1 ng&agrave;y, nhưng việc d&agrave;nh 2 ng&agrave;y 1 đ&ecirc;m cắm trại tr&ecirc;n n&uacute;i sẽ&nbsp;chi&ecirc;m ngưỡng được nhiều quang cảnh tuyệt vời hơn. Nếu đủ dũng cảm, bạn thậm ch&iacute; c&oacute; thể leo l&ecirc;n miệng n&uacute;i lửa v&agrave; nh&igrave;n v&agrave;o b&ecirc;n trong, mặc d&ugrave; n&oacute; kh&aacute; nguy hiểm.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 2\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-2-1696425158-67-width740height493.jpg\" /></p>\r\n\r\n<p>Bạn cần c&oacute; hướng dẫn vi&ecirc;n người địa phương đi c&ugrave;ng để đảm bảo&nbsp;an to&agrave;n tại Dukono. Đường đi gần như ho&agrave;n to&agrave;n kh&ocirc;ng được đ&aacute;nh dấu v&agrave; sẽ rất kh&oacute; khăn nếu bạn cố gắng tự đi một m&igrave;nh. Hướng dẫn vi&ecirc;n sẽ hiểu r&otilde; hơn về hoạt động của n&uacute;i lửa v&agrave; mức độ bạn c&oacute; thể tiếp cận n&oacute; một c&aacute;ch an to&agrave;n v&agrave;o bất kỳ ng&agrave;y n&agrave;o.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 3\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-3-1696425158-387-width740height493.jpg\" /></p>\r\n\r\n<p>N&uacute;i lửa Dukono c&oacute; đỉnh cao 1.335m nhưng bạn sẽ bắt đầu đi bộ ở độ cao gần mực nước biển. Phần đầu ti&ecirc;n của chuyến đi bộ Dukono l&agrave; xuy&ecirc;n qua rừng rậm, mặc d&ugrave; phần lớn đường đ&atilde;&nbsp;được trải nhựa. Bạn sẽ phải đi bộ l&ecirc;n một ngọn đồi dốc suốt chặng đường v&agrave; đ&ocirc;i khi sẽ băng qua một số con lạch, nhưng ch&uacute;ng thường kh&ocirc;ng c&oacute; nước. Lũ qu&eacute;t c&oacute; thể l&agrave; một vấn đề khi mưa lớn v&agrave; thử th&aacute;ch ch&iacute;nh l&agrave; cố gắng kh&ocirc;ng trượt ch&acirc;n tr&ecirc;n đất hoặc vấp phải rễ c&acirc;y. Sau 4 hoặc 5 giờ đi bộ, du kh&aacute;ch sẽ ra khỏi rừng v&agrave; lần đầu ti&ecirc;n nh&igrave;n thấy miệng n&uacute;i lửa bốc kh&oacute;i.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 4\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-4-1696425158-148-width740height493.jpg\" /></p>\r\n\r\n<p>Tiếp sau đ&oacute;, bạn sẽ đi bộ qua c&aacute;nh đồng dung nham đen cho đến khi l&ecirc;n đến đỉnh miệng n&uacute;i lửa. Nh&igrave;n từ đ&acirc;y kh&ocirc;ng xa lắm nhưng phải mất 1 hoặc 2 giờ để l&ecirc;n đến đỉnh với tốc độ vừa phải. Tr&ecirc;n đường, bạn sẽ đi qua một hồ nước m&agrave;u ngọc lam tuyệt đẹp.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 5\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-5-1696425158-937-width740height493.jpg\" /></p>\r\n\r\n<p>Đi bộ tr&ecirc;n đ&aacute; nham thạch c&oacute; thể hơi kh&oacute; khăn một ch&uacute;t, nhưng đối với một số du kh&aacute;ch th&igrave; điều n&agrave;y dễ d&agrave;ng hơn đi trong rừng.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 6\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-6-1696425158-795-width740height493.jpg\" /></p>\r\n\r\n<p>Khi l&ecirc;n đến đỉnh n&uacute;i lửa Dukono, nếu l&agrave; người dũng cảm, bạn c&oacute; thể b&ograve; l&ecirc;n m&eacute;p miệng n&uacute;i lửa v&agrave; nh&igrave;n v&agrave;o b&ecirc;n trong khi n&oacute; đang phun ra kh&oacute;i v&agrave; tro. Đ&oacute; l&agrave; một cảnh tượng tuyệt vời. Đ&ocirc;i khi bạn cũng c&oacute; thể nh&igrave;n thấy dung nham n&oacute;ng chảy m&agrave;u đỏ.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 7\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-7-1696425158-127-width740height837.jpg\" /></p>\r\n\r\n<p>Tuy nhi&ecirc;n, v&igrave; sự an to&agrave;n,&nbsp;đừng đến gần miệng n&uacute;i lửa nếu n&oacute; đang phun ra đ&aacute; nham thạch. Dukono thỉnh thoảng phun ra những tảng đ&aacute; nham thạch khổng lồ, rơi xuống như những quả bom tr&ecirc;n sườn miệng n&uacute;i lửa v&agrave; ch&uacute;ng&nbsp;c&oacute; thể g&acirc;y tử vong. Ở đ&acirc;y c&oacute; những tiếng ồn, sức n&oacute;ng v&agrave; kh&oacute;i v&ocirc; c&ugrave;ng đ&aacute;ng sợ nhưng đồng thời cũng rất&nbsp;tuyệt vời.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 8\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-8-1696425158-823-width740height493.jpg\" /></p>\r\n\r\n<p>Đi xuống từ Dukono dễ hơn đi l&ecirc;n, nhưng n&oacute; vẫn kh&ocirc;ng thực sự dễ d&agrave;ng. Bạn c&oacute; thể mất 4 giờ để đi từ đỉnh miệng n&uacute;i lửa đến đầu đường m&ograve;n.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 9\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-9-1696425159-621-width740height493.jpg\" /></p>\r\n\r\n<p>Tổng cộng, du kh&aacute;ch sẽ mất khoảng 12 giờ đi bộ đường d&agrave;i ở Dukono, v&agrave; phần lớn trong số đ&oacute; l&agrave; di chuyển&nbsp;kh&oacute; khăn tr&ecirc;n địa h&igrave;nh n&uacute;i lửa gồ ghề v&agrave; những con đường b&ugrave;n trơn trượt trong rừng rậm.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 10\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-10-1696425159-823-width740height987.jpg\" /></p>\r\n\r\n<p>R&otilde; r&agrave;ng l&agrave; sự an to&agrave;n tổng thể của chuyến đi n&agrave;y l&agrave; kh&ocirc;ng thể chắc chắn v&igrave; bạn đang leo l&ecirc;n r&igrave;a của một ngọn n&uacute;i lửa đang hoạt động mạnh, nhưng c&oacute; nhiều c&aacute;ch để&nbsp;giảm thiểu một số rủi ro trong khi vẫn c&oacute; trải nghiệm tuyệt vời v&agrave; được chi&ecirc;m ngưỡng cảnh quan thi&ecirc;n nhi&ecirc;n hiếm c&oacute;, v&iacute; dụ như hồ nước lộng lẫy n&agrave;y.</p>\r\n\r\n<p><img alt=\"Núi lửa ở Indonesia có gì mà thu hút du khách ưa mạo hiểm kéo đến? - 11\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-04/Nui-lua-o-Indonesia-co-gi-ma-thu-hut-du-khach-ua-mao-hiem-keo-den-11-1696425159-3-width740height960.jpg\" /></p>\r\n\r\n<p>Mối nguy hiểm ch&iacute;nh ở Dukono l&agrave; khi miệng n&uacute;i lửa phun ra đ&aacute; nham thạch khổng lồ. Nếu muốn an to&agrave;n hơn, bạn chỉ c&oacute; thể ngắm n&uacute;i lửa từ xa v&agrave; kh&ocirc;ng nh&igrave;n v&agrave;o b&ecirc;n trong miệng n&uacute;i lửa. Bạn vẫn c&oacute; thể chụp được nhiều&nbsp;bức ảnh tuyệt vời về Dukono từ c&aacute;nh đồng dung nham m&agrave; kh&ocirc;ng sợ&nbsp;lọt v&agrave;o tầm bắn của bom đ&aacute;.</p>\r\n', '', 'trang/trang-9', 1, 2, '0000-00-00 00:00:00');
INSERT INTO `tbl_posts` (`post_id`, `title`, `image_id`, `created_date`, `descs`, `desc_detail`, `status`, `slug`, `user_id`, `category_post_id`, `updated_at`) VALUES
(11, 'Hoa đu đủ đực tốt cho tiểu đường, hô hấp ', 2, '2023-10-26 14:23:58', 'Hoa đu đủ đực vẫn được nhiều người sử dụng. Thế nhưng nhiều người vẫn chỉ sử dụng như uống trà. Chế biến theo cách này vừa không đắng vừa bổ dưỡng, bạn có thể tham khảo.', '<h2><strong>Hoa đu đủ đực vẫn được nhiều người sử dụng. Thế nhưng nhiều người vẫn chỉ sử dụng như uống tr&agrave;. Chế biến theo c&aacute;ch n&agrave;y vừa kh&ocirc;ng đắng vừa bổ dưỡng, bạn c&oacute; thể tham khảo.</strong></h2>\r\n\r\n<p><strong>Hoa đu đủ đực hỗ trợ trị h&ocirc; hấp, tiểu đường</strong></p>\r\n\r\n<p>Đu đủ vẫn được biết đến l&agrave; một loại thực phẩm đồng thời l&agrave; một dược liệu đa chức năng. Đặc biệt l&agrave; bộ phận hoa đu đủ đực khi sử dụng c&oacute; t&aacute;c dụng hỗ trợ trị một số bệnh về đường h&ocirc; hấp, tiểu đường&hellip;</p>\r\n\r\n<p><img alt=\"Hoa đu đủ đực tốt cho tiểu đường, hô hấp nhưng đừng chỉ dùng uống, chế biến món ăn kiểu này ngon, bổ, hết đắng - 1\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696561063-hoa-du-du-duc-3-1696467010236921391341-width640height443.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p>Hoa đu đủ đực tốt cho người bị h&ocirc; hấp, tiểu đường...</p>\r\n\r\n<p>Theo TS. DS Nguyễn Th&agrave;nh Triết, Ph&oacute; trưởng Bộ m&ocirc;n Dược học cổ truyền &ndash; Đại học Y dược TP HCM cho rằng, độc t&iacute;nh của l&aacute; v&agrave; hoa đu đủ hiện chưa được đ&aacute;nh gi&aacute; đầy đủ n&ecirc;n c&oacute; thể d&ugrave;ng ch&uacute;ng như một loại tr&agrave; uống th&ocirc;ng thường. Tuy nhi&ecirc;n, chỉ n&ecirc;n d&ugrave;ng liều th&ocirc;ng thường khoảng 4-12gr/ng&agrave;y trong một khoảng thời gian nhất định chứ kh&ocirc;ng uống thay nước.</p>\r\n\r\n<p>Trong hoa đu đủ đực c&oacute; chứa nhiều vitamin như vitamin A, B1, protein, tannin, kho&aacute;ng chất, chất chống oxy ho&aacute;&hellip; tốt cho sức khỏe. L&acirc;u nay mọi người vẫn chỉ d&ugrave;ng hoa đu đủ đực như uống tr&agrave; bằng c&aacute;ch đun nước uống. Trong bữa ăn h&agrave;ng ng&agrave;y, mọi người c&oacute; thể th&ecirc;m m&oacute;n ăn chế biến từ hoa đu đủ đực vừa kh&ocirc;ng đắng vừa thơm ngon, bổ dưỡng cho sức khỏe.</p>\r\n\r\n<p><strong>Một số m&oacute;n ngon chế biến từ hoa đu đủ đơn giản</strong></p>\r\n\r\n<p><strong><em>* Hoa đu đủ đực x&agrave;o chay</em></strong></p>\r\n\r\n<p>Nguy&ecirc;n liệu: 100gr hoa đu đủ đực, 3 &ndash; 4 l&aacute; đu đủ b&aacute;nh tẻ, quả c&agrave; dại, h&agrave;nh tăm</p>\r\n\r\n<p>Chọn ch&ugrave;m hoa đu đủ tươi v&agrave; xanh, c&ograve;n đ&oacute;ng b&uacute;p sẽ &iacute;t đắng hơn; kh&ocirc;ng lấy hoa đ&atilde; bị đốm trắng, dập n&aacute;t.</p>\r\n\r\n<p>Chế biến:</p>\r\n\r\n<p>Bước 1: Hoa v&agrave; l&aacute; đu đủ đực đem đi rửa sạch, để r&aacute;o nước rồi đem l&aacute; đu đủ th&aacute;i nhỏ. C&agrave; rửa sạch, cắt miếng vừa phải; h&agrave;nh b&oacute;c cắt nhỏ.</p>\r\n\r\n<p>Bước 2: Phi h&agrave;nh tăm c&ugrave;ng với dầu ăn cho thơm rồi cho tất cả v&agrave;o x&agrave;o nhanh tay, n&ecirc;m nếm c&aacute;c gia vị cho vừa miệng. D&ugrave;ng ăn k&egrave;m trong bữa cơm như một m&oacute;n rau.</p>\r\n\r\n<p><img alt=\"Hoa đu đủ đực tốt cho tiểu đường, hô hấp nhưng đừng chỉ dùng uống, chế biến món ăn kiểu này ngon, bổ, hết đắng - 2\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696561063-hoa-du-du-xao--16964674364191293221366-width640height383.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p><em><strong>* M&oacute;n hoa đu đủ x&agrave;o thịt b&ograve;</strong></em></p>\r\n\r\n<p>Nguy&ecirc;n liệu:&nbsp;100gr hoa đu đủ đực tươi, tỏi v&agrave; c&aacute;c gia vị th&ocirc;ng dụng; 200g thịt b&ograve;.&nbsp;</p>\r\n\r\n<p>C&aacute;ch l&agrave;m:</p>\r\n\r\n<p>Bước 1: Rửa v&agrave; ng&acirc;m hoa đu đủ với nước muối pha lo&atilde;ng cho sạch, vớt ra để r&aacute;o nước. Thịt b&ograve; ướp ch&uacute;t x&iacute;t dầu ăn, dầu h&agrave;o, bột canh, 1 th&igrave;a c&agrave; ph&ecirc; đường.</p>\r\n\r\n<p>Bước 2: Cho nước vừa phải v&agrave;o nồi đun s&ocirc;i, cho hoa đu đủ đực v&agrave;o luộc qua để giảm bớt vị đắng ch&aacute;t của hoa tầm 5 ph&uacute;t. Vớt hoa ra ướp với một ch&uacute;t gia vị, hạt ti&ecirc;u để khoảng 5 ph&uacute;t cho ngấm vị.</p>\r\n\r\n<p><img alt=\"Hoa đu đủ đực tốt cho tiểu đường, hô hấp nhưng đừng chỉ dùng uống, chế biến món ăn kiểu này ngon, bổ, hết đắng - 3\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696561063-so-che-hoa-du-du-duc-16964670666221904985544-width640height446.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p>Chần hoa đu đủ đực</p>\r\n\r\n<p>Bước 3: Tỏi cho v&agrave;o chảo phi thơm, thịt b&ograve; cho v&agrave;o x&agrave;o ch&iacute;n tới rồi cho ra đĩa. Phi tiếp tỏi để x&agrave;o hoa đu đủ đực đ&atilde; luộc nhanh với lửa to, n&ecirc;m gia vị vừa miệng rồi x&agrave;o tới khi ch&iacute;n l&agrave; được. Khi cho ra đĩa, rắc th&ecirc;m ti&ecirc;u l&agrave; ăn được rồi.</p>\r\n\r\n<p><img alt=\"Hoa đu đủ đực tốt cho tiểu đường, hô hấp nhưng đừng chỉ dùng uống, chế biến món ăn kiểu này ngon, bổ, hết đắng - 4\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696561063-du-du-xao-thit-bo-16964673324281760627877-width640height436.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p>Ảnh Hải Nguyễn</p>\r\n\r\n<p><em><strong>* Hoa đu đủ đực x&agrave;o trứng g&agrave;</strong></em></p>\r\n\r\n<p>Nguy&ecirc;n liệu: 300gr hoa đu đủ đực, 2 quả trứng g&agrave;, gia vị bột canh, m&igrave; ch&iacute;nh, dầu ăn&hellip;</p>\r\n\r\n<p>C&aacute;ch l&agrave;m:</p>\r\n\r\n<p>Bước 1: Hoa đu đủ đực nhặt chỉ giữ lại b&uacute;p v&agrave; những c&aacute;nh hoa m&agrave;u ng&agrave;, bỏ cuống. Sau đ&oacute; cho hoa v&agrave;o luộc qua nước s&ocirc;i rồi vớt ra xả qua nước lạnh, vắt r&aacute;o nước gi&uacute;p hoa đỡ bớt vị đắng.</p>\r\n\r\n<p>Bước 2: Sau khi đ&atilde; sơ chế xong cho hoa đu đủ đực v&agrave;o đảo đều với lửa lớn v&agrave; n&ecirc;m gia vị t&ugrave;y theo khẩu vị mỗi gia đ&igrave;nh. Đảo tới khi hoa đu đủ ch&iacute;n, đập 1 &ndash; 2 quả trứng g&agrave; rồi đảo đều tay cho trứng quện v&agrave;o hoa.</p>\r\n\r\n<p>Hoa đu đủ đực x&agrave;o gi&ograve;n ăn c&oacute; vị ngăm ngăm kết hợp b&eacute;o mềm của trứng g&agrave; l&agrave;m m&oacute;n ăn thơm ngon, rất lạ miệng.</p>\r\n\r\n<p><img alt=\"Hoa đu đủ đực tốt cho tiểu đường, hô hấp nhưng đừng chỉ dùng uống, chế biến món ăn kiểu này ngon, bổ, hết đắng - 5\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696561064-hoa-du-du-duc-xao-trung-169646657032291728301-width640height454.jpg\" style=\"width:740px\" /></p>\r\n\r\n<p><em><strong>* Nộm hoa đu đủ đực</strong></em></p>\r\n\r\n<p>Nguy&ecirc;n liệu: 300gr hoa đu đủ đực; 1 tai lợn; chanh hoặc quất hoặc khế chua; tỏi, củ xả, măng riềng&hellip; v&agrave; c&aacute;c gia vị muối, đường, m&igrave; ch&iacute;nh.</p>\r\n\r\n<p>C&aacute;ch l&agrave;m:</p>\r\n\r\n<p>Bước 1: Hoa đu đủ sau khi được lấy về nhặt bỏ cuống d&agrave;i, chỉ lấy mỗi phần b&ocirc;ng rồi đem sửa sạch v&agrave; cho luộc ch&iacute;n trong khoảng thời gian 7-10 ph&uacute;t. Lưu &yacute; l&agrave;m sao hoa đu đủ đực đảm bảo đủ mềm, kh&ocirc;ng ch&iacute;n nhũn m&agrave; cũng kh&ocirc;ng qu&aacute; dai. Tai lợn cũng phải luộc ch&iacute;n sau đ&oacute; th&aacute;i mỏng.</p>\r\n\r\n<p>Bước 2: Chanh hoặc quất vắt lấy nước cốt. Nếu kh&ocirc;ng c&oacute; d&ugrave;ng khế chua th&aacute;i miếng vắt nước; Tỏi đập dập, băm nhỏ. Măng riềng ngon n&ecirc;n chọn những b&uacute;p măng c&ograve;n non v&agrave; l&agrave;m sạch, cắt kh&uacute;c vừa miệng v&agrave; chẻ mỏng.</p>\r\n\r\n<p>Sau khi đ&atilde; chuẩn bị đầy đủ nguy&ecirc;n liệu, cho tất cả v&agrave;o nồi to rồi trộn đều với nhau, n&ecirc;m gia vị vừa miệng để khoảng 15 ph&uacute;t cho ngấm l&agrave; được. Cuối c&ugrave;ng, bạn c&oacute; thể rắc lạc rang, th&ecirc;m &iacute;t ớt v&agrave;o để cho ngon. Nộm hoa đu đủ thưởng thức c&oacute; vị hơi đắng h&ograve;a với vị ngọt nhẹ của măng giềng, gi&ograve;n của tai lợn n&ecirc;n rất ngon miệng.</p>\r\n\r\n<p><img alt=\"Hoa đu đủ đực tốt cho tiểu đường, hô hấp nhưng đừng chỉ dùng uống, chế biến món ăn kiểu này ngon, bổ, hết đắng - 6\" src=\"https://icdn.24h.com.vn/upload/4-2023/images/2023-10-06/1696561064-nom-du-du-duc-1696467167353191129211-width640height480.jpg\" style=\"width:740px\" /></p>\r\n', '', 'trang/trang-11', 1, 2, '0000-00-00 00:00:00'),
(12, 'Đà Nẵng đưa vào hoạt động Bếp ăn mẫu ', 1, '2023-10-26 14:24:00', 'Ngày 27/09 vừa qua, mô hình Bếp ăn mẫu thứ 4 thuộc Dự án Bữa ăn học đường do Công ty Ajinomoto Việt Nam, Bộ Giáo dục và Đào tạo, Viện Dinh dưỡng quốc gia - Bộ Y tế phối hợp triển khai đã chính thức đi vào hoạt động tại Trường Tiểu học Ngô Gia Tự, Tp. Đà Nẵng.', '<h2><strong>Ng&agrave;y 27/09 vừa qua, m&ocirc; h&igrave;nh Bếp ăn mẫu thứ 4 thuộc Dự &aacute;n Bữa ăn học đường do C&ocirc;ng ty Ajinomoto Việt Nam, Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo, Viện Dinh dưỡng quốc gia - Bộ Y tế phối hợp triển khai đ&atilde; ch&iacute;nh thức đi v&agrave;o hoạt động tại Trường Tiểu học Ng&ocirc; Gia Tự, Tp. Đ&agrave; Nẵng.</strong></h2>\r\n\r\n<p>Lễ kh&aacute;nh th&agrave;nh Bếp ăn mẫu đầu ti&ecirc;n tại Đ&agrave; Nẵng thuộc khu&ocirc;n khổ dự &aacute;n Bữa ăn học đường đ&atilde; diễn ra với sự hiện diện của &Ocirc;ng Nguyễn Thanh Đề &ndash; Vụ trưởng Vụ Gi&aacute;o dục thể chất - Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo, Ng&agrave;i Yakabe Yoshinori - Tổng L&atilde;nh sự Nhật Bản tại Đ&agrave; Nẵng, &Ocirc;ng Tsutomu Nara &ndash; Tổng Gi&aacute;m đốc C&ocirc;ng ty Ajinomoto Việt Nam, B&agrave; L&ecirc; Thị B&iacute;ch Thuận - Gi&aacute;m đốc Sở Gi&aacute;o dục v&agrave; Đ&agrave;o tạo TP. Đ&agrave; Nẵng, l&atilde;nh đạo Ủy ban Nh&acirc;n d&acirc;n TP. Đ&agrave; Nẵng, l&atilde;nh đạo Sở gi&aacute;o dục TP. Đ&agrave; Nẵng v&agrave; ban gi&aacute;m hiệu, c&aacute;n bộ, gi&aacute;o vi&ecirc;n nh&agrave; trường, phụ huynh v&agrave; học sinh trường tiểu học Ng&ocirc; Gia Tự.</p>\r\n\r\n<p><img alt=\"Đà Nẵng đưa vào hoạt động Bếp ăn mẫu thuộc Dự án Bữa ăn học đường - 1\" src=\"https://icdn.24h.com.vn/upload/3-2023/images/2023-09-29/da-Nang-dua-vao-hoat-dong-Bep-an-mau-thuoc-Du-an-Bua-an-hoc-duong-am-thuc--1--1695984883-624-width800height534.jpg\" /></p>\r\n\r\n<p>C&aacute;c đại biểu cắt băng kh&aacute;nh th&agrave;nh Bếp ăn mẫu tại Trường tiểu học Ng&ocirc; Gia Tự - Sơn Tr&agrave; &ndash; TP. Đ&agrave; Nẵng (Từ tr&aacute;i sang phải: B&agrave; Trần Thị Kim B&igrave;nh - Hiệu trưởng Trường tiểu học Ng&ocirc; Gia Tự, &Ocirc;ng Huỳnh Văn H&ugrave;ng - Ph&oacute; Chủ tịch Ủy ban nh&acirc;n d&acirc;n Quận Sơn Tr&agrave; , &Ocirc;ng Tsutomu Nara - Tổng Gi&aacute;m đốc C&ocirc;ng ty Ajinomoto Việt Nam, Ng&agrave;i Yakabe Yoshinori - Tổng L&atilde;nh sự Nhật Bản tại Đ&agrave; Nẵng, &Ocirc;ng Nguyễn Thanh Đề - Vụ trưởng Vụ Gi&aacute;o dục thể chất - Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo, B&agrave; L&ecirc; Thị B&iacute;ch Thuận - Gi&aacute;m đốc Sở Gi&aacute;o dục v&agrave; Đ&agrave;o tạo TP. Đ&agrave; Nẵng, &Ocirc;ng Phan Văn H&ograve;a &ndash; Trưởng Ban Đại diện cha mẹ HS &ndash; Trường TH Ng&ocirc; Gia Tự)&nbsp;</p>\r\n\r\n<p>Bếp ăn mẫu vừa kh&aacute;nh th&agrave;nh tại trường tiểu học Ng&ocirc; Gia Tự l&agrave; một phần quan trọng thuộc Dự &aacute;n Bữa ăn học đường do Ajinomoto Việt Nam phối hợp với Bộ Gi&aacute;o dục &amp; Đ&agrave;o tạo v&agrave; Viện Dinh dưỡng Quốc gia &ndash; Bộ Y tế triển khai tr&ecirc;n cả nước, với mục ti&ecirc;u đ&oacute;ng g&oacute;p cho dinh dưỡng v&agrave; sức khỏe của trẻ em Việt Nam.</p>\r\n\r\n<p>Bếp được x&acirc;y dựng với tổng kinh ph&iacute; hơn 2 tỷ&nbsp;29 triệu đồng, trong đ&oacute; 1 tỷ 634 triệu đồng từ vốn viện trợ của Đại sứ qu&aacute;n Nhật Bản tại Việt Nam, 297 triệu đồng từ vốn đối ứng ng&acirc;n s&aacute;ch quận Sơn Tr&agrave; v&agrave; 98 triệu đồng được nh&agrave; trường huy động từ tổ chức, c&aacute; nh&acirc;n kh&aacute;c.&nbsp;</p>\r\n\r\n<p>Đ&acirc;y cũng l&agrave; Bếp ăn mẫu thứ 3 được x&acirc;y dựng từ nguồn t&agrave;i trợ của Ch&iacute;nh phủ Nhật Bản, nối tiếp c&aacute;c bếp ăn mẫu tại Trường tiểu học Ho&agrave;ng Văn Thụ, Lạng Sơn v&agrave; Trường tiểu học Phan Đ&igrave;nh Ph&ugrave;ng ở Hồ Ch&iacute; Minh.</p>\r\n\r\n<p>Điều n&agrave;y cho thấy sự đ&aacute;nh gi&aacute; cao của Ch&iacute;nh phủ Nhật Bản đối với c&aacute;c đ&oacute;ng g&oacute;p của Dự &aacute;n Bữa ăn học đường trong việc cải thiện t&igrave;nh trạng dinh dưỡng trẻ em Việt Nam, đồng thời khẳng định t&igrave;nh hữu nghị, đặc biệt trong cột mốc 50 năm quan hệ ngoại giao Việt Nam &ndash; Nhật Bản.</p>\r\n\r\n<p><img alt=\"Đà Nẵng đưa vào hoạt động Bếp ăn mẫu thuộc Dự án Bữa ăn học đường - 2\" src=\"https://icdn.24h.com.vn/upload/3-2023/images/2023-09-29/da-Nang-dua-vao-hoat-dong-Bep-an-mau-thuoc-Du-an-Bua-an-hoc-duong-am-thuc--2--1695984883-656-width800height512.jpg\" /></p>\r\n\r\n<p>Ng&agrave;i Yakabe Yoshinori - Tổng L&atilde;nh sự&nbsp;Nhật Bản tại Đ&agrave; Nẵng tại buổi lễ kh&aacute;nh th&agrave;nh.</p>\r\n\r\n<p>Ph&aacute;t biểu tại buổi lễ, Ng&agrave;i Yakabe Yoshinori - Tổng L&atilde;nh sự&nbsp;Nhật Bản tại Đ&agrave; Nẵng nhấn mạnh: &ldquo;T&ocirc;i hy vọng trường tiểu học Ng&ocirc; Gia Tự v&agrave; Ủy ban nh&acirc;n d&acirc;n quận Sơn Tr&agrave; tiếp tục duy tr&igrave; quản l&yacute; bếp ăn học đường, nỗ lực cải thiện dinh dưỡng cho trẻ em với m&ocirc; h&igrave;nh bếp ăn mẫu thuộc dự &aacute;n Bữa ăn học đường tại th&agrave;nh phố Đ&agrave; Nẵng.&rdquo;.</p>\r\n\r\n<p><img alt=\"Đà Nẵng đưa vào hoạt động Bếp ăn mẫu thuộc Dự án Bữa ăn học đường - 3\" src=\"https://icdn.24h.com.vn/upload/3-2023/images/2023-09-29/da-Nang-dua-vao-hoat-dong-Bep-an-mau-thuoc-Du-an-Bua-an-hoc-duong-am-thuc--3--1695984883-208-width800height600.jpg\" /></p>\r\n\r\n<p>&Ocirc;ng Nguyễn Thanh Đề - Vụ trưởng Vụ Gi&aacute;o dục thể chất Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo</p>\r\n\r\n<p>Cũng tại buổi lễ, &Ocirc;ng Nguyễn Thanh Đề &ndash; Vụ trưởng Vụ Gi&aacute;o dục thể chất - Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo đề nghị Sở GDĐT TP. Đ&agrave; Nẵng n&oacute;i ri&ecirc;ng v&agrave; c&aacute;c tỉnh th&agrave;nh kh&aacute;c n&oacute;i chung tiếp tục duy tr&igrave; v&agrave; th&uacute;c đẩy triển khai c&aacute;c nội dung của Dự &aacute;n Bữa ăn học được ng&agrave;y c&agrave;ng hiệu quả, bền vững tại c&aacute;c nh&agrave; trường.</p>\r\n\r\n<p>&Ocirc;ng đề nghị Sở GDĐT, c&aacute;c Ph&ograve;ng GDĐT c&aacute;c huyện/th&agrave;nh phố của Đ&agrave; Nẵng tiếp tục hướng dẫn c&aacute;c nh&agrave; trường thường xuy&ecirc;n kiểm tra, đ&aacute;nh gi&aacute;, nhắc nhở việc thực hiện c&ocirc;ng t&aacute;c tổ chức bữa ăn cho học sinh đảm bảo dinh dưỡng hợp l&yacute; ph&ugrave; hợp với điều kiện kinh tế của gia đ&igrave;nh c&aacute;c em.&nbsp;&nbsp;</p>\r\n\r\n<p><strong>Ajinomoto Việt Nam đồng h&agrave;nh c&ugrave;ng nh&agrave; trường đưa v&agrave;o sử dụng bếp ăn mẫu</strong></p>\r\n\r\n<p>Để bếp ăn mẫu ch&iacute;nh thức đi v&agrave;o hoạt động, C&ocirc;ng ty Ajinomoto Việt Nam đ&atilde; lu&ocirc;n đồng h&agrave;nh tư vấn, đ&agrave;o tạo nh&acirc;n sự c&oacute; li&ecirc;n quan của trường Ng&ocirc; Gia Tự để vận h&agrave;nh bếp ăn mẫu theo quy tr&igrave;nh chuẩn bếp ăn Nhật Bản.</p>\r\n\r\n<p>Ph&aacute;t biểu tại buổi lễ, &ocirc;ng Tsutomu Nara - Tổng gi&aacute;m đốc Ajinomoto Việt Nam cho biết với Mục đ&iacute;ch tồn tại l&agrave; &ldquo;G&oacute;p phần mang đến sức khỏe v&agrave; hạnh ph&uacute;c cho người d&acirc;n v&agrave; x&atilde; hội Việt Nam th&ocirc;ng qua việc cung cấp những sản phẩm chất lượng v&agrave; s&aacute;ng kiến c&oacute; gi&aacute; trị&rdquo;, Ajinomoto Việt Nam đ&atilde; v&agrave; đang phối hợp triển khai nhiều s&aacute;ng kiến c&oacute; gi&aacute; trị trong lĩnh vực dinh dưỡng v&agrave; sức khỏe, được x&atilde; hội ghi nhận qua những đ&oacute;ng g&oacute;p &yacute; nghĩa v&agrave; thiết thực, đặc biệt l&agrave; Dự &aacute;n Bữa ăn Học đường.</p>\r\n\r\n<p><img alt=\"Đà Nẵng đưa vào hoạt động Bếp ăn mẫu thuộc Dự án Bữa ăn học đường - 4\" src=\"https://icdn.24h.com.vn/upload/3-2023/images/2023-09-29/da-Nang-dua-vao-hoat-dong-Bep-an-mau-thuoc-Du-an-Bua-an-hoc-duong-am-thuc--4--1695984883-52-width800height533.jpg\" /></p>\r\n\r\n<p>&Ocirc;ng Tsutomu Nara - Tổng Gi&aacute;m đốc C&ocirc;ng ty Ajinomoto Việt Nam ph&aacute;t biểu tại chương tr&igrave;nh.</p>\r\n\r\n<p>So với c&aacute;c bếp ăn th&ocirc;ng thường, Bếp ăn mẫu ti&ecirc;u chuẩn Nhật Bản tu&acirc;n thủ nghi&ecirc;m ngặt an to&agrave;n vệ sinh thực phẩm khi &aacute;p dụng quy tắc 1 chiều từ kh&acirc;u tiếp nhận nguy&ecirc;n liệu đến kh&acirc;u chế biến th&agrave;nh phẩm v&agrave; vệ sinh sau bữa ăn.</p>\r\n\r\n<p>Thiết kế ph&acirc;n chia theo từng khu vực ri&ecirc;ng biệt như khu tiếp nhận nguy&ecirc;n liệu, sơ chế, chế biến, vệ sinh&hellip; với quy định trang phục kh&aacute;c nhau ở từng khu v&agrave; dụng cụ l&agrave;m việc được đ&aacute;nh dấu theo m&agrave;u sắc ngăn ngừa nhiễm ch&eacute;o giữa c&aacute;c c&ocirc;ng đoạn v&agrave; x&acirc;y dựng t&aacute;ch biệt nh&agrave; vệ sinh với c&aacute;c nguồn &ocirc; nhiễm kh&aacute;c.</p>\r\n\r\n<p><img alt=\"Đà Nẵng đưa vào hoạt động Bếp ăn mẫu thuộc Dự án Bữa ăn học đường - 5\" src=\"https://icdn.24h.com.vn/upload/3-2023/images/2023-09-29/da-Nang-dua-vao-hoat-dong-Bep-an-mau-thuoc-Du-an-Bua-an-hoc-duong-am-thuc--5--1695984883-316-width800height451.jpg\" /></p>\r\n\r\n<p>M&ocirc; h&igrave;nh &ldquo;Bếp ăn mẫu&rdquo; tại trường tiểu học Ng&ocirc; Gia Tự theo ti&ecirc;u chuẩn Nhật Bản.</p>\r\n\r\n<p>Đồng thời, c&aacute;c trang thiết bị hiện đại như hệ thống bếp &ldquo;ni&ecirc;u tay quay&rdquo; v&agrave; nồi hầm c&oacute; c&ocirc;ng suất gấp 2 - 3 lần bếp ăn th&ocirc;ng thường, hệ thống v&ograve;i nước di động cấp nước nhanh đến từng khu vực, xe đẩy trung chuyển&hellip; sẽ giảm bớt c&ocirc;ng việc v&agrave; tiết kiệm thời gian cho nh&acirc;n vi&ecirc;n cấp dưỡng.</p>\r\n\r\n<p>M&ocirc; h&igrave;nh Bếp ăn mẫu tại trường tiểu học Ng&ocirc; Gia Tự được kỳ vọng sẽ hỗ trợ nh&agrave; trường thực hiện tốt c&ocirc;ng t&aacute;c b&aacute;n tr&uacute;, mang lại c&aacute;c bữa ăn c&acirc;n bằng dinh dưỡng, đa dạng v&agrave; ngon miệng &aacute;p dụng theo Dự &aacute;n Bữa ăn học đường. B&ecirc;n cạnh bếp ăn mẫu, Dự &aacute;n cũng hỗ trợ c&aacute;c trường tiểu học &aacute;p dụng Phần mềm &ldquo;X&acirc;y dựng thực đơn c&acirc;n bằng dinh dưỡng&rdquo; cho c&aacute;c em v&agrave; t&agrave;i liệu gi&aacute;o dục dinh dưỡng thuộc Chương tr&igrave;nh &ldquo;3 ph&uacute;t thay đổi nhận thức&rdquo;, hỗ trợ nh&agrave; trường gi&aacute;o dục kiến thức dinh dưỡng về thực phẩm cho học sinh trước giờ ăn trưa.</p>\r\n', '', 'trang/trang-12', 1, 2, '0000-00-00 00:00:00'),
(23, 's', 19, '2023-10-30 15:45:31', 's', '<p>s12</p>\r\n', '', 'hy', 1, 3, '2023-10-30 15:45:31'),
(24, 'f', 16, '2023-10-30 12:33:23', 'f', '<p>f</p>\r\n', '', 'f', 1, 3, '2023-10-30 12:33:23'),
(25, 'fg', 20, '2023-10-30 16:09:06', 'hf', '<p>jf</p>\r\n', 'published', 'hhf', 1, 11, '2023-10-30 16:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts_category`
--

CREATE TABLE `tbl_posts_category` (
  `category_post_id` int(11) NOT NULL,
  `name` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(60) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `orders` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_posts_category`
--

INSERT INTO `tbl_posts_category` (`category_post_id`, `name`, `slug`, `orders`, `created_date`, `user_id`, `parent_id`, `updated_at`) VALUES
(1, 'Chính trị - Xã hội', '', 1, '2023-10-26 14:29:15', 1, 0, '2023-10-26 14:29:15'),
(2, 'Đời sống - Dân sinh', '', 2, '2023-10-26 14:29:18', 1, 0, '2023-10-26 14:29:18'),
(3, 'Giao thông - Đô thị', '', 3, '2023-10-26 14:29:20', 1, 0, '2023-10-26 14:29:20'),
(4, 'Nóng trên mạng', '', 4, '2023-10-26 14:29:24', 1, 0, '2023-10-26 14:29:24'),
(11, 'Tecno RVA Neo', 'giao-thong', 4, '2023-10-30 16:06:48', 1, 0, '2023-10-30 16:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price_new` int(11) NOT NULL,
  `price_old` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `descs` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `desc_detail` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `category_product_id` int(11) NOT NULL,
  `category_product` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('inactive','active','out_of_stock') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `name`, `code`, `slug`, `price_new`, `price_old`, `stock_quantity`, `is_featured`, `descs`, `desc_detail`, `category_product_id`, `category_product`, `user_id`, `status`, `created_date`, `updated_at`) VALUES
(1, 'Content marketing trong kỷ nguyên 4.0', '#Ismart1', '', 139000, 150000, 0, 0, 'Tác giả : Alexander Jutkowitz', '<p>NXB : NXB Lao Động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 336</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 03-2019</p>\r\n', 1, '', 1, 'active', '2023-12-12 09:08:03', '2023-12-12 09:08:03'),
(2, 'Dùng chữ sao cho đúng, viết gì cũng thấy hay', '#Ismart2', '', 129000, 140000, 0, 0, 'Tác giả : Trish Hall', '<p>Dịch giả : Hoa Nguyễn Ngọc</p>\r\n\r\n<p>NXB : NXB Phụ Nữ Việt Nam</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 129,000 đ</p>\r\n\r\n<p>Số trang : 312</p>\r\n\r\n<p>K&iacute;ch thước : 13x20,5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : qu&yacute; I năm 2020</p>\r\n', 1, '', 1, 'active', '2023-12-12 09:09:19', '2023-12-12 09:09:19'),
(3, 'Content đắt có bắt được trend', '#Ismart3', '', 119000, 130000, 0, 0, 'Tác giả : Ryan Wakeman', '<p>Dịch giả : Đỗ Ho&agrave;ng Lan</p>\r\n\r\n<p>NXB : NXB C&ocirc;ng Thương</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 119,000 đ</p>\r\n\r\n<p>Số trang : 268</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : qu&yacute; I năm 2020</p>\r\n', 1, '', 1, 'active', '2023-12-12 09:10:25', '2023-12-12 09:10:25'),
(4, 'NGHỆ THUẬT QUẢN LÝ NHÂN SỰ', '#Ismart4', '', 139000, 150000, 0, 0, 'Tác giả : Welby Altidor', '<p>Dịch giả : Khanh Trần</p>\r\n\r\n<p>NXB : C&ocirc;ng Thương</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 432</p>\r\n\r\n<p>K&iacute;ch thước : 13x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 8/2019</p>\r\n', 1, '', 1, 'active', '2023-12-12 09:11:43', '2023-12-12 09:11:43'),
(5, 'QUẢN LÝ SỰ TẬP TRUNG ĐỂ NÂNG CAO HIỆU SUẤT CÔNG VIỆC', '#Ismart5', '', 159000, 170000, 0, 0, 'Tác giả : Micheal Hyatt', '<p>Dịch giả : Hải Yến</p>\r\n\r\n<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 159,000 đ</p>\r\n\r\n<p>Số trang : 404</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 1, '', 1, 'active', '2023-12-12 09:12:54', '2023-12-12 09:12:54'),
(6, 'Kaizen - Nền Tảng Cốt Lõi Tạo Nên Giá Trị Toyota', '#Ismart6', '', 139000, 150000, 0, 0, 'Tác giả : Isao Kato & Art Smalley', '<p>Dịch giả : Nguyễn Hải Đăng</p>\r\n\r\n<p>NXB : NXB C&ocirc;ng Thương</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 298</p>\r\n\r\n<p>K&iacute;ch thước : 13 x20 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 30/05/2020</p>\r\n', 2, '', 1, 'active', '2023-12-12 09:14:35', '2023-12-12 09:14:35'),
(7, 'DIGITAL MARKETING – KẾ HOẠCH 7 BƯỚC ĐỂ THU HÚT KHÁCH HÀNG', '#Ismart7', '', 110000, 120000, 0, 0, 'Tác giả : Claudio Torres', '<p>NXB : Lao Động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 110,000 đ</p>\r\n\r\n<p>Số trang : 228</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 8/2019</p>\r\n', 1, '', 1, 'active', '2023-12-12 09:16:27', '2023-12-12 09:16:27'),
(8, 'KHÁC BIỆT ĐỂ DẪN ĐẦU TRONG KINH DOANH', '#Ismart8', '', 139000, 150000, 0, 0, 'Tác giả : Jeremy Gutsche', '<p>NXB : Đại học Kinh tế Quốc d&acirc;n</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 432</p>\r\n\r\n<p>K&iacute;ch thước : 13x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 2, '', 1, 'active', '2023-12-12 09:18:01', '2023-12-12 09:18:01'),
(9, 'PHÂN TÍCH THỊ TRƯỜNG CHỨNG KHOÁN', '#Ismart9', '', 189000, 20000, 0, 0, 'Tác giả : Howard Marks', '<p>Dịch giả : Nguyễn Minh Chung</p>\r\n\r\n<p>NXB : Đại học Kinh Tế Quốc D&acirc;n</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 189,000 đ</p>\r\n\r\n<p>Số trang : 424</p>\r\n\r\n<p>K&iacute;ch thước : 16x23</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 2, '', 1, 'active', '2023-12-12 09:19:07', '2023-12-12 09:19:07'),
(10, 'HỌC NHƯ EINSTEIN', '#Ismart10', '', 110000, 120000, 0, 0, 'Tác giả : Peter Hollins', '<p>Dịch giả : Huyền Vũ</p>\r\n\r\n<p>NXB : Đại học Kinh Tế Quốc D&acirc;n</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 0 đ</p>\r\n\r\n<p>Số trang : 204</p>\r\n\r\n<p>K&iacute;ch thước : 13x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 3, '', 1, 'active', '2023-12-12 09:40:10', '2023-12-12 09:40:10'),
(11, 'PHƯƠNG PHÁP HỌC TẬP THÔNG MINH', '#Ismart11', '', 119000, 130000, 0, 0, 'Tác giả : Peg Dawson and', '<p>Richard Guare</p>\r\n\r\n<p>Dịch giả : Đỗ Minh Hường</p>\r\n\r\n<p>NXB : D&acirc;n tr&iacute;</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 119,000 đ</p>\r\n\r\n<p>Số trang : 451</p>\r\n\r\n<p>K&iacute;ch thước : 14x20,5</p>\r\n', 3, '', 1, 'active', '2023-12-12 09:40:13', '2023-12-12 09:40:13'),
(12, 'PHƯƠNG PHÁP HỌC TẬP GIẢM ÁP LỰC TRONG THI CỬ', '#Ismart12', '', 85000, 100000, 0, 0, 'Tác giả : Johnathan Broekhuizen', '<p>NXB : Thế Giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 85,000 đ</p>\r\n\r\n<p>Số trang : 280</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2016</p>\r\n', 3, '', 1, 'active', '2023-12-12 09:40:16', '2023-12-12 09:40:16'),
(13, 'Học sao cho đúng', '#Ismart13', '', 119000, 130000, 0, 0, 'Tác giả : Ron Fry', '<p>Dịch giả : Th&ugrave;y &Aacute;i</p>\r\n\r\n<p>NXB : Đại học Kinh tế Quốc d&acirc;n</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 119,000 đ</p>\r\n\r\n<p>Số trang : 412</p>\r\n\r\n<p>K&iacute;ch thước : 13x20,5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 11/2017</p>\r\n', 3, '', 1, 'active', '2023-12-12 09:40:20', '2023-12-12 09:40:20'),
(14, 'LUYỆN TRÍ NHỚ TRONG HỌC TẬP', '#Ismart14', '', 59000, 70000, 0, 0, 'Tác giả : 1980 Books biên soạn', '<p>NXB : Đại học Kinh tế Quốc d&acirc;n</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 59,000 đ</p>\r\n\r\n<p>Số trang : 148</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 2/2017</p>\r\n', 3, '', 1, 'active', '2023-12-12 09:40:24', '2023-12-12 09:40:24'),
(15, 'Phương pháp dạy con không đòn roi 2', '#Ismart15', '', 129000, 140000, 0, 0, 'Tác giả : Tina Payne Bryson Daniel J. Siegel', '<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 129,000 đ</p>\r\n\r\n<p>Số trang : 13x20</p>\r\n\r\n<p>K&iacute;ch thước : 252</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2019</p>\r\n', 4, '', 1, 'active', '2023-12-12 09:40:26', '2023-12-12 09:40:26'),
(16, 'Phương pháp nuôi dạy con thời 4.0', '#Ismart16', '', 129000, 140000, 0, 0, 'Tác giả : Diana Graber', '<p>NXB : D&acirc;n tr&iacute;</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 129,000 đ</p>\r\n\r\n<p>Số trang : 480</p>\r\n\r\n<p>K&iacute;ch thước : 13x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2019</p>\r\n', 4, '', 1, 'active', '2023-12-12 09:40:29', '2023-12-12 09:40:29'),
(17, 'CÁCH NGƯỜI NHẬT TRUYỀN CẢM HỨNG CHO CON', '#Ismart17', '', 85000, 100000, 0, 0, 'Tác giả : Nishimura Hajime', '<p>Dịch giả : Nguyễn Ho&agrave;ng Ng&acirc;n</p>\r\n\r\n<p>NXB : Thế Giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 85,000 đ</p>\r\n\r\n<p>Số trang : 244</p>\r\n\r\n<p>K&iacute;ch thước : 13x20cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2016</p>\r\n', 4, '', 1, 'active', '2023-12-12 09:40:33', '2023-12-12 09:40:33'),
(18, 'LÀM MẸ KHÔNG ÁP LỰC', '#Ismart18', '', 139000, 150000, 0, 0, 'Tác giả : Anh Nguyễn', '<p>NXB : Thế Giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 218</p>\r\n\r\n<p>K&iacute;ch thước : 15x24</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 12/2016</p>\r\n', 4, '', 1, 'active', '2023-12-12 09:40:37', '2023-12-12 09:40:37'),
(19, 'PHƯƠNG PHÁP DẠY CON KHÔNG ĐÒN ROI', '#Ismart19', '', 109000, 120000, 0, 0, 'Tác giả : Daniel J. Siegel & Tina Payne Bryson', '<p>NXB : NXB Lao Động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 109,000 đ</p>\r\n\r\n<p>Số trang : 376</p>\r\n\r\n<p>K&iacute;ch thước : 13x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 3/2017</p>\r\n', 4, '', 1, 'active', '2023-12-12 09:40:40', '2023-12-12 09:40:40'),
(20, 'IELTS No Vocab - No Worries !', '#Ismart20', '', 139000, 150000, 0, 0, 'Tác giả : Vũ Hải', '<p>NXB : NXB Đại học Kinh tế quốc d&acirc;n</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 196</p>\r\n\r\n<p>K&iacute;ch thước : 16 x 24</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : năm 2019</p>\r\n', 5, '', 1, 'active', '2023-12-12 09:40:45', '2023-12-12 09:40:45'),
(21, 'Giải mã môn Ngữ Văn', '#Ismart21', '', 250000, 270000, 0, 0, 'Tác giả : Trịnh Văn Quỳnh', '<p>NXB : D&acirc;n tr&iacute;</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 250,000 đ</p>\r\n\r\n<p>Số trang : 516</p>\r\n\r\n<p>K&iacute;ch thước : 19x27</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 4/2019</p>\r\n', 5, '', 1, 'active', '2023-12-12 09:40:47', '2023-12-12 09:40:47'),
(22, 'Chinh phục Toán Anh Lớp 1', '#Ismart22', '', 89000, 100000, 0, 0, 'Tác giả : Scholastic', '<p>NXB : Thế Giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 89,000 đ</p>\r\n\r\n<p>Số trang : 120</p>\r\n\r\n<p>K&iacute;ch thước : 16x24</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2019</p>\r\n', 5, '', 1, 'active', '2023-12-12 09:40:50', '2023-12-12 09:40:50'),
(23, 'Chinh phục Toán Anh Lớp 2', '#Ismart23', '', 89000, 100000, 0, 0, 'Tác giả : Scholastic', '<p>NXB : Thế Giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 89,000 đ</p>\r\n\r\n<p>Số trang : 128</p>\r\n\r\n<p>K&iacute;ch thước : 16x24</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2019</p>\r\n', 5, '', 1, 'active', '2023-12-12 09:40:55', '2023-12-12 09:40:55'),
(24, 'Chinh phục Toán Anh Lớp 3', '#Ismart24', '', 89000, 100000, 0, 0, 'Tác giả : Scholastic', '<p>NXB : Thế Giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 89,000 đ</p>\r\n\r\n<p>Số trang : 128</p>\r\n\r\n<p>K&iacute;ch thước : 16x24</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2019</p>\r\n', 5, '', 1, 'active', '2023-12-12 09:37:56', '2023-12-12 09:37:56'),
(25, 'BRUSH - THANH XUÂN RỰC RỠ ĐẾN THẾ', '#Ismart25', '', 89000, 100000, 0, 0, 'Tác giả : Izuru Tanaka', '<p>Dịch giả : Nguyễn Nhật Linh</p>\r\n\r\n<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 0 đ</p>\r\n\r\n<p>Số trang : 388</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2019</p>\r\n', 6, '', 1, 'active', '2023-12-12 09:39:44', '2023-12-12 09:39:44'),
(26, 'ĐỊNH VỊ THƯƠNG HIỆU TRONG THỜI ĐẠI 4.0', '#Ismart26', '', 139000, 150000, 0, 0, 'Tác giả : Mario Natarelli & Rina Plapler', '<p>Dịch giả : Lương Thị Thu Uy&ecirc;n</p>\r\n\r\n<p>NXB : C&ocirc;ng Thương</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 139,000 đ</p>\r\n\r\n<p>Số trang : 408</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 2, '', 1, 'active', '2023-12-12 09:44:23', '2023-12-12 09:44:23'),
(28, 'Bất Trị', '#Ismart28', '', 118000, 130000, 0, 0, 'Tác giả : A. G. Howard', '<p>Dịch giả : Trang Dương</p>\r\n\r\n<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 118,000 đ</p>\r\n\r\n<p>Số trang : 424</p>\r\n\r\n<p>K&iacute;ch thước : 14x20,5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 8/2017</p>\r\n', 6, '', 1, 'active', '2023-12-12 09:47:05', '2023-12-12 09:47:05'),
(29, 'Khi chúng ta còn trẻ', '#Ismart29', '', 75000, 90000, 0, 0, 'Tác giả : Nhiều tác giả', '<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 75,000 đ</p>\r\n\r\n<p>Số trang : 208</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 5/2017</p>\r\n', 6, '', 1, 'active', '2023-12-12 09:48:09', '2023-12-12 09:48:09'),
(31, 'NƯỚC MỸ DƯỚI THỜI DONALD TRUMP', '#Ismart31', '', 100000, 120000, 0, 0, 'Tác giả : David Cay Johnston', '<p>Dịch giả : Th&ugrave;y Dương</p>\r\n\r\n<p>NXB : Th&ocirc;ng tin v&agrave; Truyền th&ocirc;ng</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 0 đ</p>\r\n\r\n<p>Số trang : 516</p>\r\n\r\n<p>K&iacute;ch thước : 14x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 7, '', 1, 'active', '2023-12-12 09:51:02', '2023-12-12 09:51:02'),
(32, 'TỪ Ý TƯỞNG ĐẾN THỰC THI', '#Ismart32', '', 149000, 160000, 0, 0, 'Tác giả : Allen Gannett', '<p>Dịch giả : B&ugrave;i Thị B&iacute;ch Phương</p>\r\n\r\n<p>NXB : C&ocirc;ng Thương</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 149,000 đ</p>\r\n\r\n<p>Số trang : 428</p>\r\n\r\n<p>K&iacute;ch thước : 13x20.5</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 7/2019</p>\r\n', 7, '', 1, 'active', '2023-12-12 09:51:52', '2023-12-12 09:51:52'),
(33, 'SỐNG CHO ĐIỀU Ý NGHĨA', '#Ismart33', '', 65000, 80000, 0, 0, 'Tác giả : Cheryl Strayed', '<p>Dịch giả : Quỳnh Chi</p>\r\n\r\n<p>NXB : Thế giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 65,000 đ</p>\r\n\r\n<p>Số trang : 149</p>\r\n\r\n<p>K&iacute;ch thước : 13x19</p>\r\n', 7, '', 1, 'active', '2023-12-12 09:53:01', '2023-12-12 09:53:01'),
(34, 'HẠNH PHÚC TỪ NHỮNG ĐIỀU GIẢN DỊ', '#Ismart34', '', 69000, 80000, 0, 0, 'Tác giả : Hiroshi Kamata', '<p>Dịch giả : Đặng Th&ugrave;y Dung</p>\r\n\r\n<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 69,000 đ</p>\r\n\r\n<p>Số trang : 200</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 4/2017</p>\r\n', 7, '', 1, 'active', '2023-12-12 09:54:00', '2023-12-12 09:54:00'),
(35, 'Ươm mầm hạnh phúc', '#Ismart35', '', 75000, 90000, 0, 0, 'Tác giả : Kamata Hiroshi', '<p>Dịch giả : Nguyễn Hồng Nhung</p>\r\n\r\n<p>NXB : Thế giới</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 75,000 đ</p>\r\n\r\n<p>Số trang : 211</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 5/2017</p>\r\n', 7, '', 1, 'active', '2023-12-12 09:55:03', '2023-12-12 09:55:03'),
(38, 'RONG CHƠI', '#Ismart37', '', 99000, 110000, 0, 0, 'Tác giả : Yo - Le', '<p>NXB : Lao động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 99,000 đ</p>\r\n\r\n<p>Số trang : 230</p>\r\n\r\n<p>K&iacute;ch thước : 13x20</p>\r\n', 6, '', 1, 'active', '2023-12-12 14:56:11', '2023-12-12 14:56:11'),
(39, 'CHỈ CÒN NHỮNG MÙA NHỚ', '#Ismart30', '', 79000, 90000, 0, 0, 'Tác giả : Nhiều tác giả', '<p>NXB : NXB Lao Động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 79,000 đ</p>\r\n\r\n<p>Số trang : 260</p>\r\n\r\n<p>K&iacute;ch thước : 13 x 20 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2016</p>\r\n', 6, '', 1, 'active', '2023-12-12 15:03:23', '2023-12-12 15:03:23'),
(40, 'GỬI THANH XUÂN KHÔNG BAO GIỜ NGOẢNH LẠI', '#Ismart36', '', 79000, 90000, 0, 0, 'Tác giả : Linh Chi', '<p>NXB : NXB Lao Động</p>\r\n\r\n<p>Gi&aacute; b&igrave;a : 79,000 đ</p>\r\n\r\n<p>Số trang : 240</p>\r\n\r\n<p>K&iacute;ch thước : 13 x 20 cm</p>\r\n\r\n<p>Ng&agrave;y ph&aacute;t h&agrave;nh : 6/2016</p>\r\n', 6, '', 1, 'active', '2023-12-12 15:05:43', '2023-12-12 15:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_category`
--

CREATE TABLE `tbl_products_category` (
  `category_product_id` int(11) NOT NULL,
  `title` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `orders` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `parent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products_category`
--

INSERT INTO `tbl_products_category` (`category_product_id`, `title`, `url`, `orders`, `created_date`, `parent_id`, `user_id`, `updated_at`) VALUES
(1, 'Kỹ năng', '?mod=product&action=cat&category_product_id=1', 1, '2023-12-12 14:23:23', 0, 1, '2023-12-12 14:23:23'),
(2, 'Kinh doanh', '?mod=product&action=cat&category_product_id=2', 2, '2023-12-12 08:44:28', 1, 1, '2023-12-12 08:44:28'),
(3, 'Học tập', '?mod=product&action=cat&category_product_id=3', 3, '2023-12-12 08:44:41', 1, 1, '2023-12-12 08:44:41'),
(4, 'Làm cha mẹ', '?mod=product&action=cat&category_product_id=4', 4, '2023-12-12 08:44:50', 3, 1, '2023-12-12 08:44:50'),
(5, 'Giáo dục', '?mod=product&action=cat&category_product_id=5', 5, '2023-12-12 08:45:00', 3, 1, '2023-12-12 08:45:00'),
(6, 'Văn học', '?mod=product&action=cat&category_product_id=6', 6, '2023-12-12 08:45:04', 1, 1, '2023-12-12 08:45:04'),
(7, 'Truyền cảm hứng', '?mod=product&action=cat&category_product_id=7', 7, '2023-12-12 14:23:26', 0, 1, '2023-12-12 14:23:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products_image`
--

CREATE TABLE `tbl_products_image` (
  `product_img_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `pin` enum('1','0') COLLATE utf8mb4_vietnamese_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_products_image`
--

INSERT INTO `tbl_products_image` (`product_img_id`, `product_id`, `image_id`, `pin`) VALUES
(4, 1, 4, '1'),
(5, 2, 5, '1'),
(6, 3, 6, '1'),
(7, 4, 7, '1'),
(8, 5, 8, '1'),
(9, 6, 9, '1'),
(10, 7, 10, '1'),
(11, 8, 11, '1'),
(12, 9, 12, '1'),
(13, 10, 13, '1'),
(14, 11, 14, '1'),
(15, 12, 15, '1'),
(16, 13, 16, '1'),
(17, 14, 17, '1'),
(18, 15, 18, '1'),
(19, 16, 19, '1'),
(20, 17, 20, '1'),
(21, 18, 21, '1'),
(22, 19, 22, '1'),
(23, 20, 23, '1'),
(24, 21, 24, '1'),
(25, 22, 25, '1'),
(26, 23, 26, '1'),
(27, 24, 27, '1'),
(28, 25, 28, '1'),
(29, 26, 29, '1'),
(31, 28, 31, '1'),
(32, 29, 32, '1'),
(34, 31, 34, '1'),
(35, 32, 35, '1'),
(36, 33, 36, '1'),
(37, 34, 37, '1'),
(38, 35, 38, '1'),
(41, 38, 43, '1'),
(42, 39, 44, '1'),
(43, 40, 45, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `link` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `descs` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `orders` tinyint(1) NOT NULL,
  `image_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('Công khai','Chờ duyệt') COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `name`, `link`, `descs`, `orders`, `image_id`, `user_id`, `status`, `created_date`, `updated_at`) VALUES
(1, 'Slider1', 'lien-he', '<p>HI</p>\r\n', 1, 39, 1, 'Công khai', '2023-12-12 10:13:11', '2023-12-12 10:13:11'),
(2, 'Slider2', '2', '<p>f</p>\r\n', 2, 40, 1, 'Công khai', '2023-12-12 10:13:30', '2023-12-12 10:13:30'),
(3, 'Slider3', 'd', '<p>d</p>\r\n', 3, 42, 1, 'Công khai', '2023-12-12 14:37:48', '2023-12-12 14:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_templates`
--

CREATE TABLE `tbl_templates` (
  `template_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `code` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `descs` varchar(400) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_templates`
--

INSERT INTO `tbl_templates` (`template_id`, `name`, `code`, `descs`, `created_date`, `user_id`, `updated_at`) VALUES
(1, 'Thông tin footer', 'info_footer', '<p>info_footer</p>\r\n', '2023-11-04 15:33:45', 1, '0000-00-00 00:00:00'),
(2, 'Thông tin header', 'info_header', 'info_header', '2023-11-04 15:33:48', 1, '0000-00-00 00:00:00'),
(3, 'Thông tin sidebar', 'info_sidebar', '<p>info_sidebar</p>\r\n', '2023-11-04 15:33:49', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `created_date` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_login_ip` varchar(45) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `fullname`, `username`, `email`, `phone_number`, `created_date`, `updated_at`, `last_login_ip`, `password`, `address`, `gender`) VALUES
(1, 'Nguyễn Viết An', 'admin111', 'nhaminh.ng1@gmail.com', '+84964384564', 1695909001, '2023-10-25 15:52:00', '', 'd464e1b629343878286f092969abe15a', 'Hà Nội', 'male'),
(2, 'Nguyễn Viết An', 'nva1112k2', 'annguyen1112k2@gmail.com', '+84964384528', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', '1932  Goosetown Drive', 'male'),
(3, 'Nguyễn Nhật Minh', 'nhatminh', 'nhaminh.ng@gmail.com', '+84964384564', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Hà Nội', 'male'),
(4, 'Nguyễn Ngọc Hiếu	', 'ngochieu', 'ngochieu1@gmail.com', '+84964384523', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Hồ Chí Minh', 'male'),
(5, 'Mai Ngọc Diễm	', 'ngocdiem', 'ngocdiem@gmail.com', '+84964384324', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Tây Ninh', 'female'),
(6, 'Nguyễn Ngọc Mai', 'ngocmai', 'ngocmai@gmail.com', '+8496438357', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Ninh Bình', 'female'),
(7, 'Lại Thành Công	', 'thanhcong', 'thanhcong@gmail.com', '+84964388765', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Hưng Yên', 'male'),
(8, 'Nguyễn Đồng Trung	', 'dongtrung', 'dongtrung@gmail.com', '+84964381234', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Đan Phượng', 'male'),
(9, 'Bùi Quốc Đạt	', 'quocdat', 'quocdat@gmail.com', '+84964384345', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Bắc Ninh', 'male'),
(10, 'Thái Thiên Duy	', 'thienduy', 'thienduy@gmail.com', '+8496438245', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Quận 7', 'male'),
(11, 'Lý Gia Cường	', 'giacuong', 'giacuong@gmail.com', '+84964384353', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Mỹ', 'male'),
(12, 'Nguyen Ngoc Mai	', 'ngocmai', 'ngocmai@gmail.com', '+84964323456', 0, '2023-10-25 15:52:00', '', '808a64acbbb55bb93873322b1883c042', 'Cầu Giấy', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `tbl_media`
--
ALTER TABLE `tbl_media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_post_id` (`category_post_id`),
  ADD KEY `category_product_id` (`category_product_id`);

--
-- Indexes for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`page_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_post_id` (`category_post_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `tbl_posts_category`
--
ALTER TABLE `tbl_posts_category`
  ADD PRIMARY KEY (`category_post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_id` (`product_id`),
  ADD KEY `product_id_2` (`product_id`),
  ADD KEY `category_product_id` (`category_product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  ADD PRIMARY KEY (`category_product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_products_image`
--
ALTER TABLE `tbl_products_image`
  ADD PRIMARY KEY (`product_img_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `tbl_templates`
--
ALTER TABLE `tbl_templates`
  ADD PRIMARY KEY (`template_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_media`
--
ALTER TABLE `tbl_media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_posts_category`
--
ALTER TABLE `tbl_posts_category`
  MODIFY `category_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  MODIFY `category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_products_image`
--
ALTER TABLE `tbl_products_image`
  MODIFY `product_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_templates`
--
ALTER TABLE `tbl_templates`
  MODIFY `template_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD CONSTRAINT `tbl_menu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_menu_ibfk_2` FOREIGN KEY (`category_post_id`) REFERENCES `tbl_posts_category` (`category_post_id`),
  ADD CONSTRAINT `tbl_menu_ibfk_3` FOREIGN KEY (`category_product_id`) REFERENCES `tbl_products_category` (`category_product_id`);

--
-- Constraints for table `tbl_orders`
--
ALTER TABLE `tbl_orders`
  ADD CONSTRAINT `tbl_orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`);

--
-- Constraints for table `tbl_order_items`
--
ALTER TABLE `tbl_order_items`
  ADD CONSTRAINT `tbl_order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `tbl_orders` (`order_id`),
  ADD CONSTRAINT `tbl_order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`product_id`);

--
-- Constraints for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD CONSTRAINT `tbl_pages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `tbl_posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_posts_ibfk_2` FOREIGN KEY (`category_post_id`) REFERENCES `tbl_posts_category` (`category_post_id`),
  ADD CONSTRAINT `tbl_posts_ibfk_3` FOREIGN KEY (`image_id`) REFERENCES `tbl_images` (`image_id`);

--
-- Constraints for table `tbl_posts_category`
--
ALTER TABLE `tbl_posts_category`
  ADD CONSTRAINT `tbl_posts_category_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD CONSTRAINT `tbl_products_ibfk_1` FOREIGN KEY (`category_product_id`) REFERENCES `tbl_products_category` (`category_product_id`),
  ADD CONSTRAINT `tbl_products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_products_category`
--
ALTER TABLE `tbl_products_category`
  ADD CONSTRAINT `tbl_products_category_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);

--
-- Constraints for table `tbl_products_image`
--
ALTER TABLE `tbl_products_image`
  ADD CONSTRAINT `tbl_products_image_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_products` (`product_id`),
  ADD CONSTRAINT `tbl_products_image_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `tbl_images` (`image_id`);

--
-- Constraints for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD CONSTRAINT `tbl_slider_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`),
  ADD CONSTRAINT `tbl_slider_ibfk_2` FOREIGN KEY (`image_id`) REFERENCES `tbl_images` (`image_id`);

--
-- Constraints for table `tbl_templates`
--
ALTER TABLE `tbl_templates`
  ADD CONSTRAINT `tbl_templates_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
