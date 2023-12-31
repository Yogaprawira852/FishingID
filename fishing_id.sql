-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 31, 2023 at 03:01 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fishing_id`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Joran', 'joran', NULL, NULL),
(2, 'Reel', 'reel', NULL, NULL),
(3, 'Kail', 'kail', NULL, NULL),
(4, 'Umpan', 'umpan', NULL, NULL),
(5, 'Senar', 'senar', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'hero.png',
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `totalSold` int(11) NOT NULL DEFAULT '0',
  `rating` enum('1','2','3','4','5') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `price`, `body`, `created_at`, `updated_at`, `image`, `category_id`, `totalSold`, `rating`) VALUES
(1, 'non', '13', 'Qui ipsum totam et doloremque et tempore eum. Voluptate suscipit dolores quia ut voluptates. Itaque voluptas debitis similique sed amet id molestiae.', '2023-12-30 08:25:01', '2023-12-31 06:34:22', 'hero.png', 1, 0, '3'),
(2, 'tempore', '59', 'Ducimus consequatur magnam qui porro. Dolor in sed eum quia at sunt laudantium. Incidunt occaecati doloribus officiis.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(3, 'nemo', '22', 'Aut consequatur aliquam non dolorem ab. Dolorem quo ex itaque nisi. Dolores laborum rem qui vel velit molestiae.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(4, 'repudiandae', '86', 'Possimus ab et ipsam asperiores recusandae esse dolorem. Nisi amet debitis adipisci id accusantium dignissimos rerum.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(5, 'illum', '6', 'Quia vero qui provident dolorem modi vel voluptas accusamus. Tempora distinctio libero aut aspernatur voluptatem ab blanditiis.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(6, 'aut', '64', 'Saepe tenetur impedit eum aut et aut. Qui enim ipsa aut quam quaerat porro. Eligendi aut quia error iure quod sint impedit aspernatur.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(7, 'assumenda', '4', 'Dolores illum nesciunt occaecati numquam natus eos. Error ipsa adipisci consequatur minus sit quia omnis modi. Aut accusamus ex quaerat amet nobis provident itaque.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(8, 'minus', '3', 'Sit iure temporibus velit qui nihil error. Inventore porro cumque soluta atque a eius voluptatem. Perferendis repudiandae omnis velit qui molestiae. Omnis rem cumque dolore quia ipsam provident.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(9, 'earum', '73', 'Labore et sint occaecati doloribus et aliquid deleniti mollitia. Cumque rerum corrupti vel maxime enim. Illo qui exercitationem optio doloremque. Consequatur dignissimos est rerum voluptate et et explicabo.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(10, 'et', '69', 'Occaecati ut et dolor ut porro. Eius quo nisi atque dicta. Rerum provident veritatis eos at.', '2023-12-30 08:25:01', '2023-12-30 08:25:01', 'hero.png', 1, 0, NULL),
(12, 'P Adu retri', '121', 'indomaret', '2023-12-30 08:31:10', '2023-12-30 08:31:10', 'hero.png', 1, 2122, '2'),
(13, 'asyuu', '121', 'kontloo goblok', '2023-12-30 08:59:27', '2023-12-30 08:59:27', 'hero.png', 4, 2, '2'),
(16, 'Najril kek anj', '2000', 'diobral teman baik aga laknat dikit', '2023-12-31 03:03:47', '2023-12-31 03:03:47', 'hero.png', 2, 2122, '4'),
(17, 'Kail belut', '200000', 'buat mancing belut babon', '2023-12-31 07:14:39', '2023-12-31 07:14:39', 'hero.png', 3, 2122, '4');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_26_065500_create_categories_table', 1),
(6, '2023_12_26_071622_create_items_table', 1),
(7, '2023_12_26_143952_add_column_to_items', 1),
(8, '2023_12_27_153042_add_columns_to_items_table', 1),
(9, '2023_12_28_152116_add_role_to_users_table', 1),
(10, '2023_12_29_064217_add_github_columns_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_refresh_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `github_id`, `github_token`, `github_refresh_token`) VALUES
(1, 'Dicky Rahmanto', 'dicky@gmail.com', NULL, '$2y$12$WF8JIxdcHMq0eqnXk.4kQurLXsnYqsV66qOx2LY2ct0rSFjLrEWWi', NULL, '2023-12-30 08:25:16', '2023-12-30 08:25:16', 'admin', NULL, NULL, NULL),
(2, 'Evaan', 'evan@gmail.com', NULL, '$2y$12$xNMI9IDh1Bl91CRchjzUKepzOwiT7R7Sp8wK5ruycIaqX.Gn1rIJW', NULL, '2023-12-30 09:19:25', '2023-12-30 09:19:25', 'user', NULL, NULL, NULL),
(3, 'najril', 'ajil@gmail.com', NULL, '$2y$12$X8JMDI3HMQgrWv/.Nqk.M.ELmX1IQRoTpn0194/kHKX6wggrpX1Li', NULL, '2023-12-31 03:50:58', '2023-12-31 03:50:58', 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_category_id_foreign` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
