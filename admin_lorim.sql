-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2024 at 12:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_lorim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `role` enum('1','2') NOT NULL DEFAULT '1',
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_password_code` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role`, `username`, `email`, `password`, `reset_password_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1', 'مسؤول', 'admin@admin.com', '$2y$10$hF6mF0.Do6FYwDyl6KQgWeCzNcIhP6sPU1mFw1As1l8eybNvEouQS', NULL, 'JbG2eXQCuhYpMKJVFGXh2OTzGxm86XufnTxedxrOtmVqpnb6kHWCTbw8BZFb', '2023-10-30 12:06:00', '2023-10-30 12:06:00'),
(2, '2', 'admin2', 'admin2@admin.com', '$2y$10$eB5Z16Ngf.8qfMkvh01Gs.grVUyN4CJ6pQz0K9IVlZJPqV1qE3Yk2', NULL, NULL, '2023-11-02 03:24:21', '2023-11-02 03:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `image`, `title_ar`, `title_en`, `status`, `created_at`, `updated_at`) VALUES
(1, '36991698870463.469.png', 'إعلان', 'إعلان', '1', '2023-11-02 03:27:43', '2023-11-02 03:27:43'),
(2, '71021703880877.5775.png', 'sdsgv', 'sdfcsd', '1', '2023-12-30 04:14:37', '2023-12-30 04:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `article_text` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_tag`
--

CREATE TABLE `article_tag` (
  `article_id` int(10) UNSIGNED DEFAULT NULL,
  `tag_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` int(10) UNSIGNED NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_03_185839_create_admins_table', 1),
(7, '2023_09_06_185456_create_sections_table', 1),
(8, '2023_09_07_202733_create_sub_sections_table', 1),
(9, '2023_09_10_140832_create_providers_table', 1),
(10, '2023_09_26_181822_create_articles_table', 1),
(11, '2023_09_26_181947_create_tags_table', 1),
(12, '2023_09_26_182024_create_article_tag_table', 1),
(13, '2023_09_27_100525_create_provider_sub_section_table', 1),
(14, '2023_09_30_082303_create_provider_section_table', 1),
(15, '2023_10_10_195115_create_ads_table', 1),
(16, '2023_10_11_201957_create_rates_table', 1),
(17, '2023_10_13_142902_create_orders_table', 1),
(18, '2023_10_13_190220_create_coupons_table', 1),
(19, '2023_10_13_191904_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `providers_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `order_cost` int(11) DEFAULT NULL,
  `delivery_cost` int(11) DEFAULT NULL,
  `total_cost` int(11) DEFAULT NULL,
  `status` enum('0','1','2','3','4') NOT NULL COMMENT '0=>new,1=>confirmed,2=>canceled,3=>underway,4=>done',
  `payment_method` enum('0','1') NOT NULL COMMENT '0 => online, 1=>cash on delivery',
  `address_description` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `providers_id`, `code`, `order_cost`, `delivery_cost`, `total_cost`, `status`, `payment_method`, `address_description`, `images`, `created_at`, `updated_at`) VALUES
(1, 1, 69, '9691292', NULL, NULL, NULL, '2', '0', 'ashdjkas', '19731890cb561686f398e2d67c0090a4.png', '2023-11-11 00:34:21', '2023-11-11 00:34:55'),
(2, 1, 69, '6708231', 1117600, NULL, 1117600, '0', '0', 'ashdjkas', 'cb3e2f29c65af068935e4e18873cde8e.png', '2023-11-11 00:34:34', '2023-11-11 00:34:34'),
(3, 1, 69, '3938914', 400, NULL, 400, '3', '0', 'ashdjkas', 'a424617d49e6d6753472bd5ac208790e.png', '2023-11-11 00:47:03', '2023-11-11 00:49:34'),
(4, 1, 69, '4228551', 200, NULL, 200, '4', '0', 'ashdjkas', '6526b87e932f9707fef7657734b6c72d.png', '2023-11-11 00:50:10', '2023-12-30 04:14:18'),
(5, 1, 69, '7334215', 200, NULL, 200, '0', '0', 'ashdjkas', 'd44f81834d4c94dbc3cd76ff804d8636.png', '2023-11-11 00:59:11', '2023-11-11 00:59:11'),
(6, 1, 69, '5752233', 200, NULL, 200, '0', '0', 'ashdjkas', 'bb15f0ff52a85e758fb24f4b14df3d1b.png', '2023-11-11 00:59:53', '2023-11-11 00:59:53'),
(7, 1, 69, '6353668', 200, NULL, 200, '0', '0', 'ashdjkas', '1039550483c5718fa3f06615bd61d836.png', '2023-11-11 01:00:09', '2023-11-11 01:00:09'),
(8, 1, 69, '5596187', 200, NULL, 200, '0', '0', 'ashdjkas', 'fdf1074445b7fc02551e19edb744b1f0.png', '2023-11-11 01:00:41', '2023-11-11 01:00:41'),
(9, 1, 69, '1633396', 200, NULL, 200, '1', '0', 'ashdjkas', 'bcdc653ffc45ec0a0e6520b33bba37b8.png', '2023-11-11 01:02:02', '2023-11-11 01:02:48'),
(10, 2, 70, '6605982', NULL, NULL, NULL, '4', '0', 'ashdjkas', '1fb9cca401489ffceb1ef80c5e996cdf.png', '2024-01-19 00:57:10', '2024-01-19 00:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `sub_sections_id` int(10) UNSIGNED DEFAULT NULL,
  `providers_id` int(10) UNSIGNED NOT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'for one peace',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_ar` varchar(255) NOT NULL,
  `description_en` varchar(255) NOT NULL,
  `shipping_cost` int(10) UNSIGNED DEFAULT NULL,
  `rate` double UNSIGNED NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `image`, `title_ar`, `title_en`, `description_ar`, `description_en`, `shipping_cost`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(70, '91841702154102.8145.png', 'mohamed', 'mohamed', 'mohamedmohamedmohamed', 'mohamedmohamedmohamed', NULL, 0, '1', '2023-12-10 04:35:02', '2023-12-10 04:35:02'),
(72, '35051709497317.4314.jpeg', 'سيلبث', 'سيل', 'سشبؤص', 'شسب', NULL, 0, '1', '2024-03-03 18:21:57', '2024-03-03 18:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `provider_section`
--

CREATE TABLE `provider_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(10) UNSIGNED DEFAULT NULL,
  `providers_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provider_section`
--

INSERT INTO `provider_section` (`id`, `sections_id`, `providers_id`) VALUES
(86, 2, 70),
(89, 1, 72),
(90, 2, 72);

-- --------------------------------------------------------

--
-- Table structure for table `provider_sub_section`
--

CREATE TABLE `provider_sub_section` (
  `id` int(10) UNSIGNED NOT NULL,
  `sections_id` int(10) UNSIGNED DEFAULT NULL,
  `sub_sections_id` int(10) UNSIGNED DEFAULT NULL,
  `providers_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provider_sub_section`
--

INSERT INTO `provider_sub_section` (`id`, `sections_id`, `sub_sections_id`, `providers_id`) VALUES
(119, NULL, 5, 70),
(126, NULL, 2, 72),
(127, NULL, 4, 72),
(128, NULL, 5, 72),
(129, NULL, 6, 72);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `provider_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rate` double(8,2) UNSIGNED NOT NULL,
  `review` text DEFAULT NULL,
  `cons_review` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `image`, `title_ar`, `title_en`, `created_at`, `updated_at`) VALUES
(1, '81251698685596.4161.png', 'قسم رئيسي one', 'قسم رئيسي one', '2023-10-31 00:06:36', '2023-10-31 00:06:36'),
(2, '75091698685607.5829.png', 'قسم رئيسي tow', 'قسم رئيسي tow', '2023-10-31 00:06:47', '2023-10-31 00:06:47'),
(4, '45041698861098.6749.png', 'قسم رئيسي3', 'قسم رئيسي3', '2023-11-02 00:51:38', '2023-11-02 00:51:38'),
(5, '10141698861132.604.png', 'قسم رئيسي 4', 'قسم رئيسي 4', '2023-11-02 00:52:12', '2023-11-02 00:52:12'),
(6, '92721698861277.5255.png', 'قسم رئيسي 6', 'قسم رئيسي 6', '2023-11-02 00:54:37', '2023-11-02 00:54:37'),
(7, '56081698861348.354.png', 'قسم رئيسي 7', 'قسم رئيسي 7', '2023-11-02 00:55:48', '2023-11-02 00:55:48'),
(8, '32831698861384.9916.png', 'قسم رئيسي 8', 'قسم رئيسي 8', '2023-11-02 00:56:24', '2023-11-02 00:56:24'),
(9, '40921698870297.3433.png', 'قسم رئيسي 9', 'قسم رئيسي 9', '2023-11-02 03:24:57', '2023-11-02 03:24:57'),
(10, '86861703880730.3443.png', 'باسل', 'باسل', '2023-12-30 04:12:10', '2023-12-30 04:12:10'),
(12, '17251707068852.157.png', 'يوسف', 'يوسف', '2024-02-04 15:47:32', '2024-02-04 15:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sections`
--

CREATE TABLE `sub_sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sections`
--

INSERT INTO `sub_sections` (`id`, `title_ar`, `title_en`, `price`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'قسم فرعي one', 'قسم فرعي one', 200, 1, '2023-10-31 00:07:33', '2023-10-31 00:07:33'),
(2, 'قسم فرعي tow', 'قسم فرعي tow', 320, 1, '2023-10-31 00:07:44', '2023-10-31 00:07:44'),
(3, 'قسم فرعي three', 'قسم فرعي three', 562, 1, '2023-10-31 00:07:58', '2023-10-31 00:07:58'),
(4, 'قسم فرعي bbb', 'قسم فرعي bbb', 78, 2, '2023-10-31 00:08:09', '2023-10-31 00:08:09'),
(5, 'قسم فرعي ff', 'قسم فرعي ff', 456, 2, '2023-10-31 00:08:24', '2023-10-31 00:08:24'),
(6, 'قسم فرعي hyu', 'قسم فرعي hyu', 5468, 2, '2023-10-31 00:08:39', '2023-10-31 00:08:39'),
(8, 'باسل٢', 'باسل٢', 555, 10, '2023-12-30 04:12:41', '2023-12-30 04:12:41'),
(9, 'باسل3', 'باسل3', 98, 10, '2023-12-30 04:12:50', '2023-12-30 04:12:50'),
(10, 'اي اسم', 'اي اسم', 200, 12, '2024-02-04 16:08:46', '2024-02-04 16:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `reset_password_code` varchar(255) DEFAULT NULL,
  `code_expiration` varchar(255) DEFAULT NULL,
  `fcm_token` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `is_verified` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `image`, `reset_password_code`, `code_expiration`, `fcm_token`, `status`, `is_verified`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zein', 'zein2@zein.com', '01234567872', '$2y$10$3r0G/O6rtl7HUuk54SpKOO.41gSRn.CZsbXS/81BBDnKoUvMMGBK.', NULL, NULL, NULL, NULL, '1', '1', NULL, '2023-11-11 00:33:19', '2023-11-11 00:33:29'),
(2, 'bassl', 'bassl@bassl.com', '01234567874', '$2y$10$eTH1CWVYEpwiaIIkC8tu9uTlkuF/0f.Ev0gWO2Ha2kkfTt2L/OYRa', NULL, '55555', '2024-02-03 08:39:59', NULL, '1', '1', NULL, '2024-01-19 00:54:34', '2024-02-03 06:34:59'),
(3, 'row', 'row@row.gmail', '01234567878', '$2y$10$5tImglmhPO6pFMqPz8jSQOSViBRniQ3/WX12a7bUZlfSHpgdwnpHa', NULL, NULL, NULL, NULL, '1', '1', NULL, '2024-02-01 17:26:41', '2024-02-01 17:26:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD KEY `article_tag_article_id_foreign` (`article_id`),
  ADD KEY `article_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_sub_sections_id_foreign` (`sub_sections_id`),
  ADD KEY `order_items_providers_id_foreign` (`providers_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_section`
--
ALTER TABLE `provider_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_section_sections_id_foreign` (`sections_id`),
  ADD KEY `provider_section_providers_id_foreign` (`providers_id`);

--
-- Indexes for table `provider_sub_section`
--
ALTER TABLE `provider_sub_section`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provider_sub_section_sub_sections_id_foreign` (`sub_sections_id`),
  ADD KEY `provider_sub_section_providers_id_foreign` (`providers_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rates_provider_id_foreign` (`provider_id`),
  ADD KEY `rates_user_id_foreign` (`user_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sections`
--
ALTER TABLE `sub_sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sections_section_id_foreign` (`section_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `provider_section`
--
ALTER TABLE `provider_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `provider_sub_section`
--
ALTER TABLE `provider_sub_section`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sub_sections`
--
ALTER TABLE `sub_sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_tag`
--
ALTER TABLE `article_tag`
  ADD CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_providers_id_foreign` FOREIGN KEY (`providers_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_sub_sections_id_foreign` FOREIGN KEY (`sub_sections_id`) REFERENCES `sub_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `provider_section`
--
ALTER TABLE `provider_section`
  ADD CONSTRAINT `provider_section_providers_id_foreign` FOREIGN KEY (`providers_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provider_section_sections_id_foreign` FOREIGN KEY (`sections_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `provider_sub_section`
--
ALTER TABLE `provider_sub_section`
  ADD CONSTRAINT `provider_sub_section_providers_id_foreign` FOREIGN KEY (`providers_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `provider_sub_section_sub_sections_id_foreign` FOREIGN KEY (`sub_sections_id`) REFERENCES `sub_sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `rates_provider_id_foreign` FOREIGN KEY (`provider_id`) REFERENCES `providers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_sections`
--
ALTER TABLE `sub_sections`
  ADD CONSTRAINT `sub_sections_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
