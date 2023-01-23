-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2023 at 09:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_count` bigint NOT NULL,
  `hash_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `client_count`, `hash_ar`, `hash_en`, `desc_ar`, `desc_en`, `created_at`, `updated_at`) VALUES
(1, 'solar', 'solar', 'solar', 'solar', 999, 'solar', 'solar', 'solar', 'solar', '2023-01-18 07:14:56', '2023-01-12 07:14:56');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$NXinuUXyWKIIOvQ1AAr4fukN2DEvsqC.dHy7QqWEehVLn6oFi/7TG', 'dasdsadad.jpg', '2023-01-14 07:59:23', '2023-01-20 07:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(1, 'لابتوب', 'laptop', '2023-01-16 08:13:39', '2023-01-16 08:13:39'),
(2, 'طعام', 'food', '2023-01-16 08:13:46', '2023-01-16 08:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint NOT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_20_123415_create_admins_table', 1),
(3, '2023_01_08_130957_create_settings_table', 1),
(4, '2023_01_08_133119_create_about_us_table', 1),
(5, '2023_01_08_133627_create_brands_table', 1),
(6, '2023_01_08_134015_create_services_table', 1),
(7, '2023_01_08_135121_create_categories_table', 1),
(8, '2023_01_08_135410_create_products_table', 1),
(9, '2023_01_08_141826_create_contacts_table', 1),
(11, '2023_01_08_142347_create_quotes_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `tags` json NOT NULL,
  `desc_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `part_number` bigint NOT NULL,
  `weight` bigint NOT NULL,
  `dimensions` bigint NOT NULL,
  `model_number` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title_ar`, `title_en`, `sub_title_ar`, `sub_title_en`, `sku`, `category_id`, `tags`, `desc_ar`, `desc_en`, `part_number`, `weight`, `dimensions`, `model_number`, `created_at`, `updated_at`) VALUES
(14, '202301171426.jpg', 'لابتوب', 'laptop', 'بسيبسيبسي', 'solar_valley1', '001', 2, '\"[\\\"dasdad,dasdas,dasd,asdasdas\\\"]\"', 'dasdas', 'dasdas', 455464, 564564, 5645645, 6456456, '2023-01-17 12:26:21', '2023-01-17 12:26:21'),
(15, '202301171428.jpg', 'طعام', 'food', 'بسيبسيبسي', 'erw', '0015', 2, '\"[\\\"dasghdj,dashgdasj,dashdj\\\"]\"', 'dasdasd', 'asdasdas', 566546, 4564564, 56456456, 4564564, '2023-01-17 12:28:34', '2023-01-17 12:28:34'),
(16, '202301171429.jpg', 'ايشتسنياشستن', 'asjkdhjk', 'اسيتشياشستنا', 'jkashdjkashjk', '0016', 2, '\"[\\\"adsadas,dasdas,dasd\\\"]\"', 'dasdas', 'dasdas', 54654, 564564, 56456456, 456456456, '2023-01-17 12:29:06', '2023-01-17 12:29:06'),
(17, '202301171500.jpg', 'dasdas', 'dasdas', 'dasdas', 'dasd', '0017', 1, '\"[\\\"dasdas,dasdasdasdas,dsad,wq,asd,asdd\\\"]\"', 'dasdas', 'dasdas', 544564, 5645646, 464, 6464, '2023-01-17 13:00:48', '2023-01-17 13:00:48'),
(18, '202301171501.jpg', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '0018', 1, '\"\\\"dasdas,saudkas,dasjdk\\\"\"', 'dasdasd', 'asdasdasdas', 56456, 456456, 4645646, 44564, '2023-01-17 13:01:04', '2023-01-18 15:02:22'),
(19, '202301171501.jpg', 'asdkfhsdjkahg', 'dashgdhj', 'shaddgasjghd', 'ghdaj', '0019', 1, '\"[\\\"dashdjkas,\\\\\\\\dasdjkas,dasjkkd\\\"]\"', 'dasdasdas', 'adsdasd', 544546, 45646, 45646, 4646, '2023-01-17 13:01:26', '2023-01-17 13:01:26'),
(20, '202301181439.jpg', 'solar_valley1', 'laptop', 'بسيبسيبسي', 'qw', '0020', 2, '\"[\\\"dasdas,adsdas,das,dasdasdas,d,asddas\\\"]\"', 'dasdas', 'asdsad', 5456456, 4564, 56456456, 4564564, '2023-01-18 12:39:35', '2023-01-18 12:39:35'),
(21, '202301181621.jpg', 'dasda', 'sdasda', 'das', 'sdasdasd', '0021', 1, '\"[\\\"asdas,dasdas,dasd,asd,as,5456,456456456\\\"]\"', 'dasdas', 'dasdasd', 5456, 456464, 564564, 5645646, '2023-01-18 14:21:44', '2023-01-18 14:21:44'),
(22, '202301181623.jpg', 'asdsad', 'dasd', 'asdas', 'asdas', '0022', 1, '\"[\\\"dasdas,dasd,asdas,dasdasdas,d\\\"]\"', 'dasdasd', 'dasdas', 54564, 56456, 456464, 56456456, '2023-01-18 14:23:49', '2023-01-18 14:23:49'),
(23, '202301181651.jpg', 'dasd', 'dasdas', 'asdas', 'das', '0023', 2, '\"[\\\"dasdas,dasd,asdas,dasdasasdas,d,as,das,dasdsad\\\"]\"', 'dasdas', 'dasdas', 456, 4564564, 564564, 64564, '2023-01-18 14:51:56', '2023-01-18 14:51:56'),
(24, '202301181658.jpg', 'dasdas', 'asdas', 'dasd', 'dasdas', '0024', 1, '\"[\\\"dasdas,dasjhdasjdjk,fkjfdg,shkjfsd\\\"]\"', 'dasdas', 'dsasdas', 564, 456456, 4564564, 64646, '2023-01-18 14:58:56', '2023-01-18 14:58:56'),
(25, '202301181700.jpg', 'dasdas', 'asdas', 'dasd', 'das', '0025', 1, '\"[\\\"asdhjkasd,dasdhasjkd,dasjdaskdha\\\"]\"', 'dasdas', 'dasdas', 54564, 564564, 5645646, 456456, '2023-01-18 15:00:21', '2023-01-18 15:00:21'),
(26, '202301181703.jpg', 'dasd', 'dasd', 'asdas', 'asdas', '0026', 2, '\"\\\"dasdd,asd,as,d,asdasasd\\\"\"', 'dasd', 'asdas', 566, 456456, 45645646, 55564, '2023-01-18 15:03:14', '2023-01-18 15:03:14'),
(27, '202301181708.jpg', 'dasdas', 'das', 'dasdas', 'dasdasda', '0027', 1, '\"{\\\"tags\\\":[\\\"sdasdasdAS,das,d,as,dasdasdas,da\\\"]}\"', 'dasdasd', 'asdasd', 5456, 456456, 45646, 464, '2023-01-18 15:08:13', '2023-01-18 15:08:13'),
(28, '202301181711.jpg', 'solar_valley1', 'dasdasd', 'dsadas', 'asdas', '0028', 1, '\"{\\\"tags\\\":[\\\"sadasdas,das,dasdas,dasdasdas,d\\\"]}\"', 'dasdasd', 'sdadasdas', 5456456, 4564, 564564, 564564, '2023-01-18 15:11:01', '2023-01-18 15:11:01'),
(29, '202301181714.jpg', 'dasdas', 'dasd', 'dasdsa', 'asdas', '0029', 1, '\"[\\\"dasfsad,asdas,das,dasdsad,asdasdas\\\"]\"', 'dsadasd', 'dasdas', 21564, 56456, 45646, 464, '2023-01-18 15:14:52', '2023-01-18 15:14:52'),
(30, '202301181717.jpg', 'dasdasd', 'asdasd', 'asdasd', 'asdasd', '0030', 1, '\"{\\\"tags\\\":[\\\"asdasdasdas,asdasdas,dasdasdas,dasd,as,dasdsad\\\"]}\"', 'dasd', 'dasdas', 456, 456456, 456456, 456456, '2023-01-18 15:17:27', '2023-01-18 15:17:27'),
(31, '202301181718.jpg', 'dasdasdas', 'asdasd', 'dasd', 'asdasd', '0031', 1, '[\"dasdas,dasdasdasd,asdas,das,dasdasdasddasda\"]', 'dasdas', 'asddasd', 4564, 56464, 564564, 6456, '2023-01-18 15:18:46', '2023-01-18 15:18:46'),
(32, '202301181722.jpg', 'dasdasd', 'dasdas', 'asdas', 'das', '0032', 1, '\"{\\\"tags\\\":[\\\"asdasas,dasd,asdasd,asdas,das,dasdas\\\"]}\"', 'asdasdasd', 'asdasdas', 54564, 564564, 564564, 564564, '2023-01-18 15:22:02', '2023-01-18 15:22:02'),
(33, '202301181725.jpg', 'dasdasda', 'asdasdas', 'dsadas', 'dasdasd', '0033', 1, '\"[]\"', 'dasdas', 'dasdaas', 4564, 56456, 4564, 564, '2023-01-18 15:25:33', '2023-01-18 15:25:33');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `who_install` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `system_complete` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usage` bigint NOT NULL,
  `system_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `panels_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `your_roof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefer_contact` enum('all','phone','email') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'all',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `who_install`, `system_complete`, `usage`, `system_type`, `panels_place`, `your_roof`, `message`, `first_name`, `last_name`, `phone`, `email`, `prefer_contact`, `address`, `state`, `city`, `zip`, `country`, `created_at`, `updated_at`) VALUES
(1, 'local contractor', '3:6 months', 12, 'OffGrid', 'huge farm', 'comp shingle', 'Et esse mollit sint', 'Moses', 'Golden', '+1 (507) 167-7641', 'vuca@mailinator.com', 'all', 'Voluptate odio sed n', 'Alabama', 'Aut dolores omnis ea', '96374', 'default', '2023-01-19 08:32:06', '2023-01-19 08:32:06'),
(2, 'foreign contractor', '6:12 months', 4546, 'OnGrid', 'small farm', 'roof shingle', 'sadasdas', 'dasd', 'asdasd', 'asdasdas', 'dasdas@gmail.com', 'all', 'dasdas', 'New york', 'dasdasd', '56565', 'AL', '2023-01-19 09:01:28', '2023-01-19 09:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dots_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dots_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `desc_ar`, `desc_en`, `dots_ar`, `dots_en`, `created_at`, `updated_at`) VALUES
(1, 'لابتوب', 'laptop', 'توصيل', 'delevery', NULL, NULL, '2023-01-18 10:49:53', '2023-01-18 10:49:53'),
(2, 'لابتوب1', 'laptop1', 'توصيل1', 'delevery1', NULL, NULL, '2023-01-18 10:50:03', '2023-01-18 10:50:03'),
(3, 'لابتوب2', 'laptop2', 'توصيل2', 'delevery2', NULL, NULL, '2023-01-18 10:50:19', '2023-01-18 10:50:19'),
(4, 'لابتوب21', 'laptop121', 'توصيل121', 'delevery1212', NULL, NULL, '2023-01-18 12:04:26', '2023-01-18 12:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `banner_home` json DEFAULT NULL,
  `title_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_experince` bigint DEFAULT NULL,
  `phone` bigint DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `facebook` text COLLATE utf8mb4_unicode_ci,
  `twitter` text COLLATE utf8mb4_unicode_ci,
  `terms_conditions` text COLLATE utf8mb4_unicode_ci,
  `shipping_policy` text COLLATE utf8mb4_unicode_ci,
  `returns` text COLLATE utf8mb4_unicode_ci,
  `work_date` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
