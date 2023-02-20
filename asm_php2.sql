-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 20, 2023 lúc 04:35 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_cate` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name_cate`, `created_time`, `updated_time`) VALUES
(1, 'Điện thoại', '2023-02-03 00:16:02', '2023-02-03 00:16:02'),
(2, 'Máy tính', '2023-02-03 00:16:02', '2023-02-03 00:16:02'),
(5, 'adgad', '2023-02-14 12:12:17', '2023-02-14 12:12:17'),
(29, 'aabb', '2023-02-17 20:59:45', '2023-02-17 22:02:01'),
(35, 'them1', '2023-02-17 22:02:08', '2023-02-17 22:02:08'),
(38, 'aa', '2023-02-20 21:50:32', '2023-02-20 21:50:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `id_user`, `id_product`, `created_time`, `updated_time`) VALUES
(1, 'aa', 1, 1, '2023-02-03 21:56:13', '2023-02-03 21:56:13'),
(5, 'xin', 4, 1, '2023-02-18 07:27:30', '2023-02-18 07:27:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `id_cate` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name_product`, `price`, `quantity`, `image`, `id_cate`, `description`, `created_time`, `updated_time`) VALUES
(1, 'ip12', 11, 1, 'ip', 1, 'dien thoai', '2023-02-20 21:09:39', '2023-02-20 21:09:39'),
(3, 'iphone', 2700000, 1, 'iphone', 1, 'aaaaa', '2023-02-02 22:43:57', '2023-02-02 22:43:57'),
(4, 'iphone', 2700000, 1, 'iphone', 2, 'aaaaa', '2023-02-02 22:44:02', '2023-02-02 22:44:02'),
(7, 'Laptop Acer Swift 3', 10000000, 1, 'laptop', 2, 'laptop ngon', '2023-02-03 07:54:00', '2023-02-03 07:54:00'),
(17, 'aaa', 1, 1, 'tung2.png', 1, 'bb', '2023-02-14 11:31:09', '2023-02-14 11:31:09'),
(19, 'fagag', 1234567890, 1, 'tung2.png', 1, 'gadhaga', '2023-02-14 11:50:42', '2023-02-14 12:07:03'),
(26, 'them1', 2, 1, 'tung2.png', 1, 'them 1', '2023-02-20 21:43:22', '2023-02-20 21:43:22'),
(27, 'sua', 23, 12, 'received_5472438276117315.jpeg', 1, 'sua', '2023-02-20 21:45:49', '2023-02-20 21:48:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` bit(1) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `salary` int(255) NOT NULL,
  `so_gio_lam` int(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `gender`, `image`, `address`, `phone`, `salary`, `so_gio_lam`, `created_time`, `updated_time`) VALUES
(1, 'aa', b'1', 'àda', 'agaege', '123', 10, 1, '2023-02-06 21:15:07', '2023-02-06 21:15:07'),
(2, 'aa', b'1', 'àda', 'agaege', '1234567891', 10, 1, '2023-02-06 21:15:17', '2023-02-06 23:32:16'),
(4, 'aa', b'1', 'àda', 'agaege', '123', 10, 1, '2023-02-06 21:15:22', '2023-02-06 21:15:22'),
(5, 'aa', b'1', 'IMG_20220329_094558.jpg', 'agaege', '1234567891', 10, 1, '2023-02-06 21:15:25', '2023-02-06 23:31:13'),
(8, 'aa', b'0', 'IMG_20220329_094611.jpg', 'hà nộii', '0396007890', 10, 2, '2023-02-06 21:53:30', '2023-02-06 23:34:47'),
(9, 'aa', b'1', 'tung2.png', 'hà nội', '0396007890', 101, 0, '2023-02-14 12:20:28', '2023-02-14 12:20:28'),
(10, 'tung', b'1', 'received_5472438276117315.jpeg', 'hà nội', '0396007890', 101, 100, '2023-02-14 12:20:29', '2023-02-17 22:14:08'),
(17, 'aa', b'1', 'received_5472438276117315.jpeg', 'hà nội', '0396007890', 11, 0, '2023-02-20 21:36:46', '2023-02-20 21:36:46'),
(18, 'sua1', b'1', 'tung2.png', 'hà nội', '0396007890', 12, 11, '2023-02-20 22:20:21', '2023-02-20 22:22:24'),
(19, 'them2', b'1', 'logofpt.png', 'hà nội', '0396007890', 11, 0, '2023-02-20 22:24:33', '2023-02-20 22:24:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` bit(1) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `image`, `address`, `phone`, `created_time`, `updated_time`) VALUES
(1, 'aa', b'1', 'â', 'aa', '123', '2023-02-06 23:39:22', '2023-02-06 23:39:22'),
(4, 'tung2', b'1', 'received_5472438276117315.jpeg', 'aa', '1233567891', '2023-02-06 23:39:30', '2023-02-20 21:35:41'),
(7, 'tien', b'1', 'tung2.png', 'ha noi', '1234567890', '2023-02-20 21:53:34', '2023-02-20 21:53:34'),
(8, 'tien', b'1', 'tung2.png', 'ha noi', '1234567890', '2023-02-20 21:53:37', '2023-02-20 21:53:37'),
(9, 'tien', b'1', 'tung2.png', 'ha noi', '1234567890', '2023-02-20 21:53:41', '2023-02-20 21:53:41');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
