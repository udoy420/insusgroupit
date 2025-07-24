-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2025 at 06:11 PM
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
-- Database: `insusgroupit`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('insus_group_cache_avatar_77e9aa05d04c87e7a424f3fa66d778e0', 's:1670:\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEhUlEQVR4nO2dTWvUQBjH/9m37to3LCpIxYMUlVIqqBc92IOK4kGrYMFv4Afw6EEQEW8eBL9DL3pQsFWwUkU8KL6hogg9tPWlxdrS7e62m8RDWd3GJJtJZjJPdp/fNWQz8/zyn5lkQ2LYtg2GDhndDRAlM1oUPoOqI+2GiraowKCckDDFDwpVSaSEqBTQCCqCSAjRKcKJbjHahFCS4IUOObELSYIIJ3GKScV1ICCZMoB42x1LQpIqwg3VaVEqpJlEOFElRomQZhbhRLaYWOcQpjFSE9JKyXAiKynSEtLKMgB5/ZcipNVl1JBRh8hCWMZGotYjkhCW4U6UuoQWwjL8CVufUEJYRjDC1ElYCMsQQ7RefGFIjMAXhpyM6AS5eOSEECOQEE6HHILUkRNCjIZCOB1yaVRPTggxfIVwOtTgV1dPISxDLV715SGLGK5COB3x4FZnTggxWAgx/ruXFddw9f5kAXu73M+Hm5/XcOn1qvBvXhnI4nJ/znXbVNFC3/2S7/639udwsS/ruu31gomDD8vCbQpC/T0uTggxNgjhyVwP9XXnhBCDhRCDhRDjrxCeP/RSqz8nhBgshBgshBgshBgpgCd0KmRGizYnhBgshBgshBgshBgshBgshBgshBgshBgshBgkheRCtipPsjdiaOvCquW9rSsT7i0VXVnv/ao+x6OENiHzFe/bZ7s6wgnZ1e7dnaVqMm7XpQA97xb0EzLYnUJW8FQxAOzf7L3TbIm+kOpIu6EtIe8WvceQjqyB4d600O+d7k2jp837vHr7OxljljYh499N3+1XB3IoBHTSlgKuD7o/sVjjYYPjUUGbkJcLFqZXvM/avs4Uxoby6C34j6bb8wbGhvLY3endlekVC5PzyUiI1ne/X/uwhtsH2zy3H96SxpdTBdydMfFkzsRU0cbSmo2OjIGdmwwMbUvj3I408ml/aTc+rsluujI2PGwd9z+HBoA3Jwro71YX1FcLJg49KsMM0DNdD1sD/xZWWi+lbABnn5V9V1xRmK/YuPC8EkgGFbRf235dtnFmsoxfkqXMliwcnyjh63KCbICAEAB48cvCvrESJn7KWQndm63iwHgJ7xaTJQNwCNH5ZYBvZRvHJso4/6yMp3PiYizbxoNvVRx9XMLw0wrmKgoaqYj6upP7ws6dGRN3Zkzs6TRwZGsah7akMNCdQk/OQE/OQEcGWKmu3wqZKtr4tGRhcs7C+A8TP8rJS4QT19cz8XNa8eEclUjMIcw/WAgxXIXo/uxPq+BWZ04IMTyFcErU4lVf34SwFDX41ZWHLGI0FMIpkUujenJCiBFICKdEDvwi5QQi/A0qvs8ljsgIwwkhhrAQnk/EEK1XqISwlGCEqVPoIYul+BO2PpHmEJbiTpS6RJ7UWcpGotZDyiqLpawjow7Slr2tLkVW//nz3RHhz3c3OUoSUqOZk6JqiFYqpEYziVE9V8YipEaSxcS1aIl1DknqSizOdseakHqSkBYdJ5A2IfVQkqM7xSSE1NApRreIGqSEOFEpiIoAJ6SFuBFGEtXiu/EH7OHdiinhEdQAAAAASUVORK5CYII=\";', 1753298108),
('insus_group_cache_avatar_dfd65ab5b1c9a641099921513b27f079', 's:1670:\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAEhUlEQVR4nO2dTWvUQBjH/9m37to3LCpIxYMUlVIqqBc92IOK4kGrYMFv4Afw6EEQEW8eBL9DL3pQsFWwUkU8KL6hogg9tPWlxdrS7e62m8RDWd3GJJtJZjJPdp/fNWQz8/zyn5lkQ2LYtg2GDhndDRAlM1oUPoOqI+2GiraowKCckDDFDwpVSaSEqBTQCCqCSAjRKcKJbjHahFCS4IUOObELSYIIJ3GKScV1ICCZMoB42x1LQpIqwg3VaVEqpJlEOFElRomQZhbhRLaYWOcQpjFSE9JKyXAiKynSEtLKMgB5/ZcipNVl1JBRh8hCWMZGotYjkhCW4U6UuoQWwjL8CVufUEJYRjDC1ElYCMsQQ7RefGFIjMAXhpyM6AS5eOSEECOQEE6HHILUkRNCjIZCOB1yaVRPTggxfIVwOtTgV1dPISxDLV715SGLGK5COB3x4FZnTggxWAgx/ruXFddw9f5kAXu73M+Hm5/XcOn1qvBvXhnI4nJ/znXbVNFC3/2S7/639udwsS/ruu31gomDD8vCbQpC/T0uTggxNgjhyVwP9XXnhBCDhRCDhRDjrxCeP/RSqz8nhBgshBgshBgshBgpgCd0KmRGizYnhBgshBgshBgshBgshBgshBgshBgshBgshBgkheRCtipPsjdiaOvCquW9rSsT7i0VXVnv/ao+x6OENiHzFe/bZ7s6wgnZ1e7dnaVqMm7XpQA97xb0EzLYnUJW8FQxAOzf7L3TbIm+kOpIu6EtIe8WvceQjqyB4d600O+d7k2jp837vHr7OxljljYh499N3+1XB3IoBHTSlgKuD7o/sVjjYYPjUUGbkJcLFqZXvM/avs4Uxoby6C34j6bb8wbGhvLY3endlekVC5PzyUiI1ne/X/uwhtsH2zy3H96SxpdTBdydMfFkzsRU0cbSmo2OjIGdmwwMbUvj3I408ml/aTc+rsluujI2PGwd9z+HBoA3Jwro71YX1FcLJg49KsMM0DNdD1sD/xZWWi+lbABnn5V9V1xRmK/YuPC8EkgGFbRf235dtnFmsoxfkqXMliwcnyjh63KCbICAEAB48cvCvrESJn7KWQndm63iwHgJ7xaTJQNwCNH5ZYBvZRvHJso4/6yMp3PiYizbxoNvVRx9XMLw0wrmKgoaqYj6upP7ws6dGRN3Zkzs6TRwZGsah7akMNCdQk/OQE/OQEcGWKmu3wqZKtr4tGRhcs7C+A8TP8rJS4QT19cz8XNa8eEclUjMIcw/WAgxXIXo/uxPq+BWZ04IMTyFcErU4lVf34SwFDX41ZWHLGI0FMIpkUujenJCiBFICKdEDvwi5QQi/A0qvs8ljsgIwwkhhrAQnk/EEK1XqISwlGCEqVPoIYul+BO2PpHmEJbiTpS6RJ7UWcpGotZDyiqLpawjow7Slr2tLkVW//nz3RHhz3c3OUoSUqOZk6JqiFYqpEYziVE9V8YipEaSxcS1aIl1DknqSizOdseakHqSkBYdJ5A2IfVQkqM7xSSE1NApRreIGqSEOFEpiIoAJ6SFuBFGEtXiu/EH7OHdiinhEdQAAAAASUVORK5CYII=\";', 1753298108);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_28_001441_add_field_user_table', 1),
(5, '2025_07_01_233537_create_slides_table', 2),
(7, '2025_07_12_061200_create_softwares_table', 3);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4fqgcO5dvmUAGtPxdigKeQUkgpKQQS5gh0RzH6PK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUmtxbGdtbVJsbnA2U1dVNHREc1pNOEptZGl4eE1tV3V0U1p4cll2RCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvc29mdHdhcmUvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1753298009),
('wwRR63SEQusPIDWaHKmWHcuDgbz5rzopG1USgWlj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:140.0) Gecko/20100101 Firefox/140.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSDVTZElOTjJxeXBiV1VKQlVYcWlzUDAxN0hGOThjRVFxRmhJWlNuaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91bmRlci1jb25zdHJ1Y3Rpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1753239113);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `home_slide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `softwares`
--

CREATE TABLE `softwares` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `softwares`
--

INSERT INTO `softwares` (`id`, `title`, `category`, `image`, `filter`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eduaction', 'Commodo nulla qui et', '8e3b1baa-0b67-49f8-9508-3ba2cc43029e.jpg', 'filter-product', NULL, 'active', '2025-07-18 01:48:16', '2025-07-18 01:48:16'),
(2, 'Sit accusamus persp', 'Enim unde debitis vo', 'cc1fb5ff-4706-41a8-98bf-995d3b608e15.jpg', 'filter-app', 'https://www.nuwevocelosyla.me.uk', 'active', '2025-07-18 02:18:31', '2025-07-18 02:18:31'),
(3, 'Nobis ipsa reprehen', 'Ut et ex est dolor', '0c856330-f51a-46e2-b604-0198b0ce7211.jpg', 'filter-product', 'https://www.vybove.cm', 'active', '2025-07-22 19:17:08', '2025-07-22 19:17:08'),
(4, 'Sit occaecat reicie', 'Nostrud est tempore', 'fa0f3ac2-f2d8-4451-ba82-6d15c8e99ab8.jpg', 'filter-app', 'https://www.jejutyhoraly.me', 'active', '2025-07-22 19:17:30', '2025-07-22 19:17:30'),
(5, 'Sapiente non asperna', 'Sit reiciendis dolor', '85f14481-fcb9-4e57-938e-65278e5c91de.jpg', 'filter-product', 'https://www.lovevadit.cc', 'active', '2025-07-22 19:18:10', '2025-07-22 19:18:10'),
(6, 'Quisquam illo anim a', 'Reprehenderit volup', 'bcbfef7b-4e34-4804-961c-d83f3a834dd5.jpg', 'filter-app', 'https://www.jojivyjyrowi.co.uk', 'active', '2025-07-22 19:18:33', '2025-07-22 19:18:33'),
(7, 'Est molestias quasi', 'Obcaecati labore est', '37a62889-b6f0-4fef-8ccc-db107a87c777.png', 'filter-app', NULL, 'active', '2025-07-23 02:25:39', '2025-07-23 02:25:39'),
(8, 'Quis dolor natus cul', 'InSus', 'ec55d6ed-5581-4c0a-bdfe-e56b17885da0.png', 'filter-app', 'http://127.0.0.1:8000/under-construction', 'active', '2025-07-23 02:51:30', '2025-07-23 02:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_photo`, `contact_no`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Udoy Imam Hemal', 'udoy@admin.com', NULL, NULL, NULL, '$2y$12$wBSBA0oCm2V2rg108aTxj.BkdiwP4NBVJeWuLLw4I1Gkum46.7fcO', NULL, '2025-07-18 00:52:38', '2025-07-18 00:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softwares`
--
ALTER TABLE `softwares`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `softwares`
--
ALTER TABLE `softwares`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
