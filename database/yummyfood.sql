-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 22, 2024 lúc 03:33 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yummyfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numGuests` int DEFAULT NULL,
  `User_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booktable`
--

CREATE TABLE `booktable` (
  `Book_id` int NOT NULL,
  `User_id` int DEFAULT NULL,
  `Table_id` int DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `num_guests` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `booktable`
--

INSERT INTO `booktable` (`Book_id`, `User_id`, `Table_id`, `time`, `phone`, `num_guests`) VALUES
(1, 1, 3, '2023-01-01 12:00:00', '', 0),
(2, 3, 1, '2023-01-20 00:33:00', '', 0),
(3, 3, 2, '2023-01-03 15:45:00', '', 0),
(4, 4, 4, '2023-01-04 20:00:00', '', 0),
(5, 5, 5, '2023-01-05 17:15:00', '', 0),
(7, 3, 3, '2024-01-25 11:30:00', '', 0),
(8, 1, 1, '2024-01-22 10:50:00', '0385855533', 2),
(9, 11, 3, '2024-01-20 10:55:00', '0385855533', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `dish_id` int NOT NULL,
  `user_id` int NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL DEFAULT '1',
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`cart_id`, `dish_id`, `user_id`, `dish_name`, `image`, `details`, `quantity`, `price`) VALUES
(21, 17, 1, 'Hawaiian Pizza', 'https://i.imgur.com/trsMrE8.png', 'Made with eggs, lettuce, salt, oil and other ingredients.', 1, 15.00),
(35, 12, 3, 'Fried Eggs', 'https://i.imgur.com/Pa3DUKV.png', 'Made with eggs, lettuce, salt, oil and other ingredients.', 8, 13.00),
(36, 17, 3, 'Hawaiian Pizza', 'https://i.imgur.com/trsMrE8.png', 'Made with eggs, lettuce, salt, oil and other ingredients.', 1, 15.00),
(37, 18, 3, 'Martinez Cocktail', 'https://i.imgur.com/AtKb7D4.png', 'Made with eggs, lettuce, salt, oil and other ingredients.', 4, 7.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Nguyen Van A', 'nguyenvana@example.com', 'Question 1', 'This is the first message.'),
(2, 'Tran Thi B', 'tranthib@example.com', 'Feedback', 'Thank you for your service.'),
(3, 'Le Van C', 'levanc@example.com', 'Inquiry', 'I would like to inquire about your products.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dish`
--

CREATE TABLE `dish` (
  `dish_id` int NOT NULL,
  `Image_dish` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Dish_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Detail` text COLLATE utf8mb4_general_ci,
  `Price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dish`
--

INSERT INTO `dish` (`dish_id`, `Image_dish`, `Dish_name`, `Category`, `Detail`, `Price`) VALUES
(12, 'https://i.imgur.com/Pa3DUKV.png', 'Fried Eggs', 'Breakfast', 'Made with eggs, lettuce, salt, oil and other ingredients.', 13.00),
(17, 'https://i.imgur.com/trsMrE8.png', 'Hawaiian Pizza', 'Main', 'Made with eggs, lettuce, salt, oil and other ingredients.', 15.99),
(18, 'https://i.imgur.com/AtKb7D4.png', 'Martinez Cocktail', 'Drink', 'Made with eggs, lettuce, salt, oil and other ingredients.', 7.25),
(19, 'https://i.imgur.com/0GWfe1L.png', 'Butterscotch Cake', 'Breakfast', 'Made with eggs, lettuce, salt, oil and other ingredients.', 20.99),
(20, 'https://i.imgur.com/UHUCOLw.png', 'Mint Lemonade', 'Drink', 'Made with eggs, lettuce, salt, oil and other ingredients.', 5.89),
(21, 'https://i.imgur.com/e4RU6sA.png', 'Chocolate Icecream', 'Dessert', 'Made with eggs, lettuce, salt, oil and other ingredients.', 18.05),
(22, 'https://i.imgur.com/Va6jS7L.png', 'Cheese Burger', 'Main', 'Made with eggs, lettuce, salt, oil and other ingredients.', 12.55),
(23, 'https://i.imgur.com/WMZlS5Y.png', 'Classic Waffles', 'Main', 'Made with eggs, lettuce, salt, oil and other ingredients.', 12.99),
(25, 'https://i.imgur.com/YCVgYYj.jpg', 'Peach Tea', 'Breakfast', 'Made with black tea, ripe peaches.', 6.00),
(31, 'https://i.imgur.com/lFKa2a2.jpg', 'Noodles', 'Main', 'Made with eggs, lettuce, salt, oil and other ingredients.', 5.50),
(32, 'https://i.imgur.com/GQyRd3D.jpg', 'King crab', 'Main', 'Made with eggs, lettuce, salt, oil and other ingredients.', 50.00),
(33, 'https://i.imgur.com/F3Iln6y.jpg', 'Salad Avocado', 'Dessert', 'Made with eggs, lettuce, salt, oil and other ingredients.', 10.00),
(34, 'https://i.imgur.com/FZguAFi.jpg', 'Strawberry ice-cream', 'Dessert', 'Made with eggs, lettuce, salt, oil and other ingredients.', 15.00),
(35, 'https://i.imgur.com/HpYWmVu.jpg', 'chicken Meat', 'Main', 'Made with eggs, lettuce, salt, oil and other ingredients.', 60.55),
(36, 'https://i.imgur.com/I30Ao0e.jpg', 'Cooling Tea', 'Drink', 'Made with eggs, lettuce, salt, oil and other ingredients.', 7.56),
(37, 'https://i.imgur.com/D3oUgIg.jpg', 'Hambuger', 'Breakfast', 'Made with eggs, lettuce, salt, oil and other ingredients.', 10.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `order_date` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `status`, `delivery_date`, `user_id`, `discount`) VALUES
(2, '2024-01-11 08:23:49', 'completed', '2024-01-26 12:01:00', 2, 2.00),
(5, '2024-01-20 11:40:09', 'pending', '2024-02-02 12:03:00', 11, 0.00),
(6, '2024-01-20 11:42:21', 'pending', NULL, 11, 0.00);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int NOT NULL,
  `dish_id` int NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `dish_id`, `dish_name`, `price`, `quantity`, `total_price`, `address`, `phone`, `payment`) VALUES
(2, 18, 'Martinez Cocktail', 7.25, 2, 12.50, NULL, NULL, NULL),
(5, 17, 'Hawaiian Pizza', 15.99, 1, 15.00, NULL, NULL, NULL),
(6, 18, 'Martinez Cocktail', 7.25, 1, 7.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `table`
--

CREATE TABLE `table` (
  `table_id` int NOT NULL,
  `Tablename` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `numberchair` int DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `table`
--

INSERT INTO `table` (`table_id`, `Tablename`, `numberchair`, `status`) VALUES
(1, 'Table 10', 5, 'occupied'),
(2, 'Table 2', 6, 'Occupied'),
(3, 'Table 3', 2, 'occupied'),
(4, 'Table 4', 8, 'Available'),
(5, 'Table 5', 4, 'Occupied'),
(9, 'Table 10', 4, '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `Username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `Username`, `Password`, `Name`, `Phone`, `Email`, `role`) VALUES
(1, 'hello', 'password1', 'John', '00123456', 'john.d@example.com', 'customer'),
(2, 'user2', 'password2', 'Jane Doe', '9876543216', 'jane.doe@example.com', 'customer'),
(3, 'admin1', 'adminpass1', 'Admin User', '13243254', 'admin@example.com', 'admin'),
(4, 'waiter1', 'waiterpass1', 'Waiter User', NULL, 'waiter@example.com', 'waiter'),
(5, 'chef1', 'chefpass1', 'Chef User', '123409860', 'chef@example.com', 'chef'),
(10, 'thao123', '12345678', 'thao', '0385855533', 'thao.le25@student.passerellesnumeriques.org', 'customer'),
(11, 'thaovt', '12345678', 'LVT', '0385855533', 'thao.le25@student.passerellesnumeriques.org', 'customer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id` (`User_id`);

--
-- Chỉ mục cho bảng `booktable`
--
ALTER TABLE `booktable`
  ADD PRIMARY KEY (`Book_id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Table_id` (`Table_id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`dish_id`),
  ADD KEY `dish_id` (`dish_id`);

--
-- Chỉ mục cho bảng `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`table_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `booktable`
--
ALTER TABLE `booktable`
  MODIFY `Book_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `table`
--
ALTER TABLE `table`
  MODIFY `table_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `booktable`
--
ALTER TABLE `booktable`
  ADD CONSTRAINT `booktable_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `booktable_ibfk_2` FOREIGN KEY (`Table_id`) REFERENCES `table` (`table_id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`dish_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
