-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2022 lúc 03:20 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `incrediblebridges`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brigdes`
--

CREATE TABLE `brigdes` (
  `id` int(11) NOT NULL,
  `infomation_id` int(11) DEFAULT NULL,
  `name_brigdes` varchar(50) NOT NULL,
  `thumbnail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brigdes`
--

INSERT INTO `brigdes` (`id`, `infomation_id`, `name_brigdes`, `thumbnail`) VALUES
(1, NULL, '[THE GOLDEN GATE BRIDGE]', ''),
(2, NULL, '[AKASHI KAIKYO BRIDGE]', ''),
(3, NULL, '[SUNSHINE SKYWAY BRIDGE]', ''),
(4, NULL, '[TOWER BRIDGE]', ''),
(5, NULL, '[FIRTH OF FORTH BRIDGE]', ''),
(6, NULL, '[BROOKLYN BRIDGE]', ''),
(7, NULL, '[CHESAPEAKE BAY BRIDGE]', ''),
(8, NULL, '[SYDNEY HARBOR BRIDGE]', ''),
(9, NULL, '[LEONARD P. ZAKIM BRIDGE]', ''),
(10, NULL, '[LONDON BRIDGE]', ''),
(11, NULL, '[DANYANG KUNSHAN BRIDGE]', ''),
(12, NULL, '[TIANJIN GRAND BRIDGE]', ''),
(13, NULL, '[MANCHAC SWAMP BRIDGE]', ''),
(14, NULL, '[DUGE BRIDGE]', ''),
(15, NULL, '[SIDU RIVER BRIDGE]', ''),
(16, NULL, '[PULI BRIDGE]', ''),
(17, NULL, '[BRIDGE NEAR LIMYRA]', ''),
(18, NULL, '[KAPELLBRUCKE]', ''),
(19, NULL, '[FRANKFORD AVENUE BRIDGE]', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `name_city` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`id`, `country_id`, `name_city`, `address`) VALUES
(1, 1, '[San Francisco]', '[null]'),
(2, 2, '[Kobe]', '[Akashi Strait]'),
(3, 3, '[Florida]', '[null]'),
(4, 4, '[Southwark]', '[River Thames]'),
(5, 5, '[Edinburgh]', '[null]'),
(6, 6, '[null]', '[East River]'),
(7, 7, '[Virginia]', '[null]'),
(8, 8, '[Port Jackson]', '[Bay]'),
(9, 9, '[Boston]', '[Charles River]'),
(10, 10, '[Central London]', '[River Thames]'),
(11, 11, '[Jiangsu]', '[null]'),
(12, 12, '[Tianjin]', '[East of China]'),
(13, 13, '[Louisiana]', '[Manchac Swamp]'),
(14, 14, '[Shuicheng]', '[Beipan River]'),
(15, 15, '[Hubei]', '[null]'),
(16, 16, '[Xuanwei]', '[null]'),
(17, 17, '[Kırkgöz]', '[null]'),
(18, 18, '[Lucerne]', '[Luzern]'),
(19, 19, '[Northeast Philadelphia]', '[Holmesburg]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `continents`
--

CREATE TABLE `continents` (
  `id` int(11) NOT NULL,
  `name_continents` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `continents`
--

INSERT INTO `continents` (`id`, `name_continents`) VALUES
(1, '[America]'),
(2, '[Asia]'),
(3, '[Europe]'),
(4, '[Europe]'),
(5, '[Europe]'),
(6, '[America]'),
(7, '[America]'),
(8, '[Oceania]'),
(9, '[America]'),
(10, '[Europe]'),
(11, '[Asia]'),
(12, '[Asia]'),
(13, '[America]'),
(14, '[Asia]'),
(15, '[Asia]'),
(16, '[Asia]'),
(17, '[Europe]'),
(18, '[Europe]'),
(19, '[America]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name_country` varchar(50) NOT NULL,
  `continents_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `country`
--

INSERT INTO `country` (`id`, `name_country`, `continents_id`) VALUES
(1, '[California]', 1),
(2, '[Japan]', 2),
(3, '[Petersburg]', 3),
(4, '[London]', 4),
(5, '[Scotland]', 5),
(6, '[New York]', 6),
(7, '[US]', 7),
(8, '[Australia]', 8),
(9, '[Massachusetts]', 9),
(10, '[London]', 10),
(11, '[China]', 11),
(12, '[China]', 12),
(13, '[US]', 13),
(14, '[Yunnan]', 14),
(15, '[China]', 15),
(16, '[China]', 16),
(17, '[Turkey]', 17),
(18, '[Switzerland]', 18),
(19, '[US]', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cmt` varchar(500) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name_brigdes` varchar(50) NOT NULL,
  `thumbnail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brigdes`
--
ALTER TABLE `brigdes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_id` (`infomation_id`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Chỉ mục cho bảng `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD KEY `continents_id` (`continents_id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `gallery`
--
ALTER TABLE `gallery`
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
-- AUTO_INCREMENT cho bảng `brigdes`
--
ALTER TABLE `brigdes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `continents`
--
ALTER TABLE `continents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `brigdes`
--
ALTER TABLE `brigdes`
  ADD CONSTRAINT `brigdes_ibfk_1` FOREIGN KEY (`infomation_id`) REFERENCES `information` (`id`);

--
-- Các ràng buộc cho bảng `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`);

--
-- Các ràng buộc cho bảng `country`
--
ALTER TABLE `country`
  ADD CONSTRAINT `country_ibfk_1` FOREIGN KEY (`continents_id`) REFERENCES `continents` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
