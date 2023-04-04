-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 07:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `childstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_descript` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descript`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(3, 'Áo Thun', 'Áo Thun', 'Áo Thun', 1, 1, '1663325741.jpg', 'Áo Thun', 'Áo Thun', 'Áo Thun', '2022-09-16 03:53:28', '2022-09-16 03:55:41'),
(4, 'Áo Khoác', 'Áo Khoác', 'Áo Khoác', 1, 1, '1663325637.jpg', 'Áo Khoác', 'Áo Khoác', 'Áo Khoác', '2022-09-16 03:53:57', '2022-09-16 03:53:57'),
(5, 'Áo sơ mi', 'Áo sơ mi', 'Áo sơ mi', 1, 1, '1663325728.jpg', 'Áo sơ mi', 'Áo sơ mi', 'Áo sơ mi', '2022-09-16 03:55:28', '2022-09-16 03:55:28'),
(6, 'Quần dài', 'Quần dài', 'Quần dài', 1, 1, '1663325789.jpg', 'Quần dài', 'Quần dài', 'Quần dài', '2022-09-16 03:56:29', '2022-09-16 03:56:29'),
(7, 'Quần short', 'Quần short', 'Quần short', 1, 1, '1663325811.jpg', 'Quần short', 'Quần short', 'Quần short', '2022-09-16 03:56:51', '2022-09-16 03:56:51'),
(8, 'Váy Đầm', 'Váy Đầm', 'Váy Đầm', 1, 1, '1663325840.jpg', 'Váy Đầm', 'Váy Đầm', 'Váy Đầm', '2022-09-16 03:57:20', '2022-09-16 03:57:20'),
(9, 'Áo cặp', 'Áo cặp', 'Áo cặp', 1, 1, '1663325886.jpg', 'Áo cặp', 'Áo cặp', 'Áo cặp', '2022-09-16 03:58:06', '2022-09-16 03:58:06'),
(10, 'Giày trẻ em', 'Giày trẻ em', 'Giày da chất lượng cao', 1, 1, '1663596562.jpg', 'Giày trẻ em', 'Giày trẻ em', 'Giày trẻ em', '2022-09-19 06:46:57', '2022-09-19 07:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_09_15_191609_create_categories_table', 2),
(5, '2022_09_16_041959_create_products_table', 3),
(6, '2022_09_16_165049_create_carts_table', 4),
(7, '2022_09_17_040608_create_order_table', 5),
(8, '2022_09_17_041207_create_order_items_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `fname`, `lname`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `total_price`, `status`, `message`, `tracking_no`, `created_at`, `updated_at`) VALUES
(1, '2', 'Khánh Linh', 'Trương', 'truongkhanhlinh233201@gmail.com', '0987564899', '118/135 đường số 8, phường bình hưng hoà b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', '', 1, NULL, 'Duy7495', '2022-09-17 03:25:58', '2022-09-18 04:15:15'),
(2, '2', 'Võ', 'Duy', 'duyvo2680@gmail.com', '+84967719032', '118/135 đường số 8, phường bình hưng hòa b', '118/135 đường số 8, phường bình hưng hòa b', 'TP. Hồ Chí Minh', 'Hồ Chí Minh', 'Việt Nam', '700000', '', 1, NULL, 'Duy5671', '2022-09-17 03:29:15', '2022-09-18 04:15:31'),
(3, '2', 'Khánh Linh', 'Trương', 'truongkhanhlinh233201@gmail.com', '0987564899', '118/135 đường số 8, phường bình hưng hoà b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', '390000', 0, NULL, 'Duy8192', '2022-09-17 03:45:40', '2022-09-17 03:45:40'),
(4, '2', 'Võ', 'Duy', 'duyvo2680@gmail.com', '+84967719032', '118/135 đường số 8, phường bình hưng hòa b', '118/135 đường số 8, phường bình hưng hòa b', 'TP. Hồ Chí Minh', 'Hồ Chí Minh', 'Việt Nam', '700000', '600000', 0, NULL, 'HD1791', '2022-09-17 12:16:11', '2022-09-17 12:16:11'),
(5, '2', 'Khánh Linh', 'Trương', 'truongkhanhlinh233201@gmail.com', '0987564899', '118/135 đường số 8, phường bình hưng hoà b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', '350000', 1, NULL, 'HD6421', '2022-09-18 23:48:06', '2022-09-18 23:48:57'),
(6, '1', 'vo', 'duy', 'duydeptrai13579@gmail.com', '0987564899', '118/135 đường số 8, phường bình hưng hoà b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', '900000', 1, NULL, 'HD4323', '2022-09-19 10:33:14', '2022-09-19 10:34:19'),
(7, '1', 'vo', 'duy', 'duydeptrai13579@gmail.com', '0987564899', '118/135 đường số 8, phường bình hưng hoà b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', '350000', 0, NULL, 'HD6548', '2022-09-19 10:52:34', '2022-09-19 10:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '1', '600000', '2022-09-17 03:25:58', '2022-09-17 03:25:58'),
(2, '1', '5', '1', '1000000', '2022-09-17 03:25:58', '2022-09-17 03:25:58'),
(3, '2', '2', '1', '350000', '2022-09-17 03:29:15', '2022-09-17 03:29:15'),
(4, '3', '8', '1', '390000', '2022-09-17 03:45:40', '2022-09-17 03:45:40'),
(5, '4', '3', '1', '600000', '2022-09-17 12:16:12', '2022-09-17 12:16:12'),
(6, '5', '2', '1', '350000', '2022-09-18 23:48:06', '2022-09-18 23:48:06'),
(7, '6', '4', '1', '300000', '2022-09-19 10:33:15', '2022-09-19 10:33:15'),
(8, '6', '6', '4', '600000', '2022-09-19 10:33:15', '2022-09-19 10:33:15'),
(9, '7', '2', '1', '350000', '2022-09-19 10:52:34', '2022-09-19 10:52:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('duydeptrai13579@gmail.com', '$2y$10$DksPFh5hE.WghsLT9TlhX.h2PP7DPJsGoB7hqwamkV2NGbeJe9wUi', '2022-09-18 18:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_keywords` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `tax`, `status`, `trending`, `meta_title`, `small_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(2, 3, 'Áo thun sọc đen', 'Áo thun sọc đen', 'Áo thun sọc đen nhập khẩu từ Nhật Bản', 'Áo thun sọc đen nhập khẩu từ Nhật descriptiondescriptiondescriptiondescriptiondescriptiondescriptiondescription', '300000', '350000', '1663326094.jpg', '-1', '10', 1, 1, 'Áo thun', 'Áo thun, Áo thun sọc đen', 'Áo thun, Áo thun sọc đen', '2022-09-16 04:01:34', '2022-09-19 10:52:34'),
(3, 4, 'Áo khoác hoodie xanh lá', 'Áo khoác hoodie', 'Áo khoác hoodie', 'Áo khoác hoodie', '500000', '600000', '1663326349.jpg', '0', '8', 1, 1, 'Áo khoác', 'Áo khoác', 'Áo khoác', '2022-09-16 04:05:49', '2022-09-17 12:16:12'),
(4, 3, 'Áo Thun Champs', 'Áo Thun', 'Áo Thun Champs', 'Áo Thun Champs', '275000', '300000', '1663326481.jpg', '27', '8', 1, 1, 'Áo Thun Champs', 'Áo Thun Champs', 'Áo Thun Champs', '2022-09-16 04:08:01', '2022-09-19 10:33:15'),
(5, 9, 'Áo cặp cho sinh đôi', 'Áo cặp', 'Áo cặp cho sinh đôi', 'Áo cặp cho sinh đôi', '780000', '1000000', '1663326552.jpg', '5', '8', 1, 1, 'Áo cặp cho sinh đôi', 'Áo cặp cho sinh đôi', 'Áo cặp cho sinh đôi', '2022-09-16 04:09:13', '2022-09-17 03:25:58'),
(6, 6, 'Quần jeans dài', 'Quần jeans', 'Quần jeans dài', 'Quần jeans dài', '500000', '600000', '1663326617.jpg', '44', '8', 1, 1, 'Quần jeans dài', 'Quần jeans', 'Quần jeans dài', '2022-09-16 04:10:17', '2022-09-19 10:33:15'),
(7, 6, 'Quần kaki dài', 'Quần kaki', 'Quần kaki dài', 'Quần kaki dài', '250000', '400000', '1663326684.jpg', '100', '8', 1, 1, 'Quần kaki dài', 'Quần kaki dài', 'Quần kaki dài', '2022-09-16 04:11:24', '2022-09-16 04:11:24'),
(8, 7, 'Quần jeans short', 'Quần short', 'Quần jeans short', 'Quần jeans short', '315000', '390000', '1663326767.jpg', '492', '8', 1, 1, 'Quần jeans short', 'Quần jeans short', 'Quần jeans short', '2022-09-16 04:12:47', '2022-09-17 03:45:41'),
(9, 8, 'Đầm hồng', 'Váy Đầm', 'Đầm hồng', 'Đầm hồng', '340000', '360000', '1663326829.jpg', '100', '8', 1, 1, 'Đầm hồng', 'Đầm hồng', 'Đầm hồng', '2022-09-16 04:13:49', '2022-09-16 04:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `lname`, `phone`, `address1`, `address2`, `city`, `state`, `country`, `pincode`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vo', 'duydeptrai13579@gmail.com', NULL, '$2y$10$amovY8Vi4NwTBQeEHoRpfel.a84yUZxSdp4GZVhIvg.RRk4IUazLy', 'duy', '0987564899', '118/135 đường số 8, phường bình hưng hoà b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', 1, NULL, '2022-09-15 03:14:19', '2022-09-19 10:33:15'),
(2, 'Khánh Linh', 'truongkhanhlinh233201@gmail.com', NULL, '$2y$10$DxKBCL2L.Bw8Ljc/nR0BuudtzvhYlWZC9osHua5CNVC/BOvBU9lmy', 'Trương', '0987564899', '118/135 đường số 8, phường bình hưng hòa b', '118/135 đường số 8, phường bình hưng hòa b', 'Quận Bình Tân', 'TP. Hồ Chí Minh', 'Việt Nam', '700000', 0, NULL, '2022-09-15 09:22:25', '2022-09-16 21:50:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
