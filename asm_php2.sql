-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 14, 2023 lúc 09:17 AM
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
(6, 'gadhhhhahdhah', '2023-02-14 12:13:39', '2023-02-14 12:16:08'),
(7, 'jdgadga', '2023-02-14 12:14:47', '2023-02-14 12:16:02');

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
(2, 'aa', 1, 1, '2023-02-03 21:56:16', '2023-02-03 21:56:16'),
(3, 'aa', 1, 1, '2023-02-03 21:56:22', '2023-02-03 21:56:22'),
(4, 'aa', 1, 1, '2023-02-03 21:56:26', '2023-02-03 21:56:26');

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
(3, 'iphone', 2700000, 1, 'iphone', 1, 'aaaaa', '2023-02-02 22:43:57', '2023-02-02 22:43:57'),
(4, 'iphone', 2700000, 1, 'iphone', 2, 'aaaaa', '2023-02-02 22:44:02', '2023-02-02 22:44:02'),
(7, 'Laptop Acer Swift 3', 10000000, 1, 'laptop', 2, 'laptop ngon', '2023-02-03 07:54:00', '2023-02-03 07:54:00'),
(17, 'aaa', 1, 1, 'tung2.png', 1, 'bb', '2023-02-14 11:31:09', '2023-02-14 11:31:09'),
(19, 'fagag', 1234567890, 1, 'tung2.png', 1, 'gadhaga', '2023-02-14 11:50:42', '2023-02-14 12:07:03'),
(20, 'ghaha', 1, 2, 'tung2.png', 2, 'adgadg', '2023-02-14 11:58:41', '2023-02-14 12:07:13'),
(22, 'aabb', 1, 1, 'IMG_20220329_094558.jpg', 1, '1', '2023-02-14 14:57:02', '2023-02-14 15:02:55');

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
(10, 'aa', b'1', 'received_5472438276117315.jpeg', 'hà nội', '0396007890', 101, 0, '2023-02-14 12:20:29', '2023-02-14 15:15:51'),
(15, 'aabb', b'1', 'IMG_20220329_094558.jpg', 'hà nội', '0396007890', 22, 0, '2023-02-14 15:12:00', '2023-02-14 15:16:29');

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
(2, 'aa', b'1', 'â', 'aa', '123', '2023-02-06 23:39:25', '2023-02-06 23:39:25'),
(3, 'aa', b'1', 'â', 'aa', '123', '2023-02-06 23:39:27', '2023-02-06 23:39:27'),
(4, 'aabb', b'0', 'IMG_20220329_094558.jpg', 'aa', '1233567891', '2023-02-06 23:39:30', '2023-02-14 15:07:48');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
