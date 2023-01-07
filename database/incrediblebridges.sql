-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2023 lúc 04:52 PM
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
-- Tạo: Th12 28, 2022 lúc 05:23 PM
--

CREATE TABLE `brigdes` (
  `id` int(11) NOT NULL,
  `infomation_id` int(11) DEFAULT NULL,
  `name_brigdes` varchar(50) NOT NULL,
  `thumbnail` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELATIONSHIPS FOR TABLE `brigdes`:
--   `infomation_id`
--       `information` -> `id`
--

--
-- Đang đổ dữ liệu cho bảng `brigdes`
--

INSERT INTO `brigdes` (`id`, `infomation_id`, `name_brigdes`, `thumbnail`) VALUES
(1, 1, '[THE GOLDEN GATE BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/gold.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(2, 2, '[AKASHI KAIKYO BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Akashi%20Kaikyo%20Bridge.JPG\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(3, 3, '[SUNSHINE SKYWAY BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Sun%20Shine%20Sky%20Way.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(4, 4, '[TOWER BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Tower%20Bridge%20img.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(5, 5, '[FIRTH OF FORTH BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/forth%20bridge.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(6, 6, '[BROOKLYN BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/BROOKLYN%201.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(7, 7, '[CHESAPEAKE BAY BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Chesapeake%20Bay%20Bridge%20Tunnel.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(8, 8, '[SYDNEY HARBOR BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Sydney%20Harbour%20Bridge.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(9, 9, '[LEONARD P. ZAKIM BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/LEONARD%20P.%20ZAKIM%20BUNKER%20HILL%20BRIDGE.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(10, 10, '[LONDON BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/LONDON%20BRIDGE%20(LAKE%20HAVASU%20CITY).jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(11, 11, '[DANYANG KUNSHAN BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/DanyangKunshan%20Grand%20Bridge.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(12, 12, '[TIANJIN GRAND BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/TIANJIN%20GRAND%20BRIDGE.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(13, 13, '[MANCHAC SWAMP BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/MANCHAC%20SWAMP%20BRIDGE.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(14, 14, '[DUGE BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/DUGE%20BRIDGEE.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(15, 15, '[SIDU RIVER BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Sidu%20river%20bridge.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(16, 16, '[PULI BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/puli%20bridge.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(17, 17, '[BRIDGE NEAR LIMYRA]', '<img src=\"https://www.amazingbridges.ml/IMAGES/Bridge%20near%20Limyra.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(18, 18, '[KAPELLBRUCKE]', '<img src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/1/1e/Kapellbruecke.JPG/1024px-Kapellbruecke.JPG\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">'),
(19, 19, '[FRANKFORD AVENUE BRIDGE]', '<img src=\"https://www.amazingbridges.ml/IMAGES/fraank%20ford.jpg\" style=\"height: 250px; width: 350px; float: left; padding: 15px;\">');

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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brigdes`
--
ALTER TABLE `brigdes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `brigdes`
--
ALTER TABLE `brigdes`
  ADD CONSTRAINT `brigdes_ibfk_1` FOREIGN KEY (`infomation_id`) REFERENCES `information` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
