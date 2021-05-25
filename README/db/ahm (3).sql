-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 25, 2021 lúc 08:14 PM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ahm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `amount`) VALUES
(1, 2, 2, 1),
(2, 2, 14, 7),
(3, 3, 12, 2),
(4, 3, 17, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `state`, `updated_at`, `created_at`) VALUES
(1, 'Kim cương viên', '', 1, '2021-05-16 04:28:37', '2021-05-16 04:28:37'),
(2, 'Trang sức kim cương', '', 1, '2021-05-16 04:29:37', '2021-05-16 04:29:37'),
(3, 'Trang sức đá màu', '', 1, '2021-05-16 04:29:58', '2021-05-16 04:29:58'),
(4, 'Trang sức ngọc trai', '', 1, '2021-05-16 04:30:27', '2021-05-16 04:30:27'),
(5, 'Trang sức cưới', '', 1, '2021-05-16 04:30:46', '2021-05-16 04:30:46'),
(6, 'Trang sức trẻ', '', 1, '2021-05-16 04:31:07', '2021-05-16 04:31:07'),
(7, 'Đồng hồ', '', 1, '2021-05-16 04:33:53', '2021-05-16 04:33:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `product_id`, `content`, `updated_at`, `created_at`) VALUES
(1, 3, 1, 'Sản phẩm rất đẹp, giao hàng nhanh, đóng gói cẩn thận', '2021-05-16 05:02:08', '2021-05-16 05:02:08'),
(2, 2, 5, 'Sản phẩm rất đẹp, đóng gói cẩn thận', '2021-05-16 05:03:23', '2021-05-16 05:03:23'),
(3, 2, 12, 'Đỉnh của chóp', '2021-05-16 07:05:24', '2021-05-16 07:05:24'),
(4, 3, 9, 'Sang xịn mịn', '2021-05-16 07:05:56', '2021-05-16 07:05:56'),
(6, 1, 1, 'san pham cuc ki dep pppp', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 1, 1, 'san pham cuc ki dep pppp', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_banner`
--

CREATE TABLE `image_banner` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `state` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_category`
--

CREATE TABLE `image_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `state` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_comment`
--

CREATE TABLE `image_comment` (
  `id` int(11) DEFAULT NULL,
  `comment_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_product`
--

CREATE TABLE `image_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `state` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `image_product`
--

INSERT INTO `image_product` (`id`, `product_id`, `link`, `state`, `updated_at`, `created_at`) VALUES
(1, 2, 'abc.jpg', 1, '2021-05-23 12:35:50', '2021-05-23 12:35:50'),
(3, 2, 'xyz.jpg', 1, '2021-05-23 17:55:50', '2021-05-23 17:55:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `state`, `updated_at`, `created_at`) VALUES
(1, 2, 0, '2021-05-16 12:31:42', '2021-05-16 07:15:59'),
(2, 3, 3, '2021-05-16 12:32:07', '2021-05-16 07:16:50'),
(3, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `amount`) VALUES
(1, 1, 2, 1),
(2, 1, 14, 2),
(3, 2, 10, 2),
(4, 1, 2, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `material` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `material`, `price`, `amount`, `state`, `updated_at`, `created_at`) VALUES
(1, 1, 'KIM CƯƠNG VIÊN 0720DA7953I1', 'Cam kết 100% kim cương viên là Kim cương tự nhiên', 'Kim cương tự nhiên', 26488000, 10, 1, '2021-05-16 04:35:13', '2021-05-16 04:35:13'),
(2, 1, 'KIM CƯƠNG VIÊN 0720DA7949I1', 'Cam kết 100% chính xác về trọng lượng, chất lượng, số khắc bằng lazer ', 'Kim cương tự nhiên', 28888000, 20, 1, '2021-05-16 04:37:51', '2021-05-16 04:37:51'),
(4, 2, 'NHẪN KIM CƯƠNG DJR3095', '100% Chuẩn xác về hàm lượng vàng. Tất cả các sản phẩm trang sức của DOJI được kiểm định chặt chẽ với', 'Vàng, Kim cương', 49000000, 10, 1, '2021-05-16 04:40:13', '2021-05-16 04:40:13'),
(5, 2, 'MẶT DÂY KIM CƯƠNG DJP99', '100% Chuẩn xác về hàm lượng vàng, kim cương', 'Vàng, Kim cương', 37000000, 10, 1, '2021-05-16 04:40:13', '2021-05-16 04:40:13'),
(6, 3, 'MẶT DÂY RUBY GJP712', '100% sản phẩm trang sức đá màu đều có đầy đủ kiểm định uy tín.', 'Đá tự nhiên', 11999000, 10, 1, '2021-05-16 04:43:30', '2021-05-16 04:43:30'),
(7, 3, 'HOA TAI RUBY GJE712', '100% sản phẩm trang sức đá màu đều có đầy đủ kiểm định uy tín.', 'Đá tự nhiên', 9900000, 30, 1, '2021-05-16 04:46:05', '2021-05-16 04:46:05'),
(8, 4, 'NHẪN NGỌC TRAI AKOYA PJR168', '100% sản phẩm trang sức ngọc trai đều có đầy đủ kiểm định uy tín.', 'Ngọc trai', 15000000, 30, 1, '2021-05-16 04:47:40', '2021-05-16 04:47:40'),
(9, 4, 'MẶT DÂY NGỌC TRAI AKOYA PJP554', '100% sản phẩm trang sức ngọc trai đều có đầy đủ kiểm định uy tín.', 'Ngọc trai', 7000000, 50, 1, '2021-05-16 04:48:32', '2021-05-16 04:48:32'),
(10, 5, 'NHẪN CƯỚI MONO NWR766', 'Wedding Land - Thương hiệu trang sức cưới thuộc Tập đoàn Vàng bạc đá quý DOJI', 'Vàng', 14900000, 50, 1, '2021-05-16 04:50:31', '2021-05-16 04:50:31'),
(11, 5, 'NHẪN CƯỚI SALSA NWR1574', 'Wedding Land - Thương hiệu trang sức cưới thuộc Tập đoàn Vàng bạc đá quý DOJI', 'Vàng', 15700000, 30, 1, '2021-05-16 04:52:00', '2021-05-16 04:52:00'),
(12, 6, 'LẮC TAY 329-WG', '100% chuẩn xác về trọng lượng vàng.', 'Vàng', 3900000, 100, 1, '2021-05-16 04:53:11', '2021-05-16 04:53:11'),
(13, 6, 'MẶT DÂY YJP632', '100% chuẩn xác về trọng lượng vàng.', 'Vàng', 2900000, 100, 1, '2021-05-16 04:55:43', '2021-05-16 04:55:43'),
(14, 7, 'ĐỒNG HỒ EMPORIO ARMANI AR11100', 'Các sản phẩm đồng hồ được phân phối tại DOJI WATCH rất đa dạng về mẫu mã, chất lượng vượt trội', 'Đồng hồ', 8000000, 10, 1, '2021-05-16 04:56:25', '2021-05-16 04:56:25'),
(15, 7, 'ĐỒNG HỒ EMPORIO ARMANI AR11100', 'ảo hành chính hãng và Chế độ hậu mãi vượt trội bởi đội ngũ Kỹ thuật viên được hãng đào tạo, với tran', 'Đồng hồ', 6000000, 100, 1, '2021-05-16 04:58:10', '2021-05-16 04:58:10'),
(16, 7, 'ĐỒNG HỒ EMPORIO ARMANI AR11100', 'ảo hành chính hãng và Chế độ hậu mãi vượt trội ', 'Đồng hồ', 6000000, 100, 1, '2021-05-16 04:58:10', '2021-05-16 04:58:10'),
(17, 1, 'Kim cuong xin vkl llldsfl', 'kim cuong xin nen d mo ta nhieu', 'kim cuong 100%', 1999999, 100, 1, '0000-00-00 00:00:00', '2021-05-16 04:59:31'),
(26, 1, 'Kim cuong xin vkl llldsfl', 'kim cuong xin nen d mo ta nhieu', 'kim cuong 100%', 1999999, 100, 1, '2021-05-25 20:13:17', '2021-05-26 01:12:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `state` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `birthday`, `address`, `role`, `state`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '0987654321', 1, '2000-07-06', 'Hai Bà Trưng - Hà Nội', 1, 1, '2021-05-16 04:19:27', '2021-05-16 04:19:27'),
(2, 'Nguyễn Văn A', 'client@gmail.com', 'client', '0987654322', 0, '2000-07-01', 'Lê Thanh Nghị - Đồng Tâm -Hai Bà Trưng - Hà Nội', 0, 1, '2021-05-16 04:23:03', '2021-05-16 04:23:03'),
(3, 'Trần Đức B', 'client1@gmail.com', 'client1', '0987654323', 1, '2001-05-01', 'Nhân Chính - Thanh Xuân - Hà Nội', 0, 1, '2021-05-16 04:26:11', '2021-05-16 04:26:11'),
(4, 'Ngo Duc Minh', 'minhnd@gmail.com', '123456', '0394076666', 1, '2000-07-06', 'Hung Yen', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Ngo Duc Minh', 'minhnd@gmail.com', '123456', '0394076666', 1, '2000-07-06', 'Hung Yen', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ngo Duc Minh', 'ndminh@gmail.com', '123456', '0394076666', 1, '2000-01-01', 'HBT - Ha Noi', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Minh', 'ndminh@gmail.com', '123456', '0394076666', 1, '2000-01-01', 'HBT - Ha Noi', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Minh', 'ndminh@gmail.com', '123456', '0394076666', 1, '2000-01-01', 'HBT - Ha Noi', 1, 1, '2021-05-23 15:42:10', '0000-00-00 00:00:00'),
(9, 'Minh', 'ndminh@gmail.com', '123456', '0394076666', 1, '2000-01-01', 'HBT - Ha Noi', 1, 1, '2021-05-23 15:52:48', '2021-05-23 15:52:48'),
(10, 'Minh', 'ndminh@gmail.com', '123456', '0394076666', 1, '2000-01-01', 'HBT - Ha Noi', 1, 1, '2021-05-23 15:53:09', '2021-05-23 15:53:09'),
(11, 'abc', 'dkjds@gmial.com', 'sdsassa', '42432', 2, '2021-05-11', 'đấ', 3, 1, '2021-05-23 10:57:42', '2021-05-25 15:59:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `image_category`
--
ALTER TABLE `image_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `image_comment`
--
ALTER TABLE `image_comment`
  ADD KEY `comment_id` (`comment_id`);

--
-- Chỉ mục cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `image_category`
--
ALTER TABLE `image_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `image_category`
--
ALTER TABLE `image_category`
  ADD CONSTRAINT `image_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `image_comment`
--
ALTER TABLE `image_comment`
  ADD CONSTRAINT `image_comment_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`);

--
-- Các ràng buộc cho bảng `image_product`
--
ALTER TABLE `image_product`
  ADD CONSTRAINT `image_product_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
