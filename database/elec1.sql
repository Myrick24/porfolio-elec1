-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2025 at 12:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elec1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idea_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `idea_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'kjhbjigfyf', '2025-03-07 18:09:45', '2025-03-07 18:09:45'),
(2, 4, 2, 'test2commenr', '2025-03-07 19:04:06', '2025-03-07 19:04:06'),
(3, 5, 6, 'test3', '2025-03-07 19:20:48', '2025-03-07 19:20:48'),
(4, 4, 6, 'test3', '2025-03-07 19:21:13', '2025-03-07 19:21:13'),
(5, 7, 6, 'qweqwe', '2025-03-07 20:08:25', '2025-03-07 20:08:25'),
(6, 9, 6, 'new c', '2025-03-07 20:12:30', '2025-03-07 20:12:30'),
(7, 9, 6, 'f', '2025-03-08 17:02:23', '2025-03-08 17:02:23'),
(8, 14, 1, 'eee', '2025-03-08 21:55:49', '2025-03-08 21:55:49'),
(9, 15, 8, 'simply dummy text', '2025-03-08 23:01:55', '2025-03-08 23:01:55');

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
-- Table structure for table `follower_user`
--

CREATE TABLE `follower_user` (
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follower_user`
--

INSERT INTO `follower_user` (`follower_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 2, '2025-03-08 19:44:46', '2025-03-08 19:44:46'),
(6, 2, '2025-03-08 19:45:02', '2025-03-08 19:45:02'),
(6, 1, '2025-03-08 22:06:56', '2025-03-08 22:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'test login', '2025-03-07 17:38:19', '2025-03-07 17:38:19'),
(4, 2, 'test 2 ideaas', '2025-03-07 19:03:21', '2025-03-07 19:03:21'),
(5, 6, 'test 3', '2025-03-07 19:20:34', '2025-03-07 19:20:34'),
(7, 6, 'dsfsdfsfsqweqe', '2025-03-07 19:35:24', '2025-03-07 20:08:22'),
(9, 6, 'test routeresource', '2025-03-07 20:08:48', '2025-03-07 20:08:48'),
(10, 6, 'eeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrtr', '2025-03-07 20:16:07', '2025-03-07 20:16:07'),
(11, 6, 'retertertvevrterter', '2025-03-07 20:16:12', '2025-03-07 20:16:12'),
(12, 6, 'zzzzzzzzzzzzzrt', '2025-03-07 20:22:25', '2025-03-08 17:32:47'),
(13, 6, 'fdgdgdfg', '2025-03-08 19:46:20', '2025-03-08 19:46:20'),
(14, 1, 'werwer', '2025-03-08 20:36:56', '2025-03-08 20:36:56'),
(15, 7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', '2025-03-08 23:00:10', '2025-03-08 23:00:10'),
(16, 8, 'smply dummy text of the printing and typesetting industry.', '2025-03-08 23:02:16', '2025-03-08 23:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `idea_like`
--

CREATE TABLE `idea_like` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idea_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `idea_like`
--

INSERT INTO `idea_like` (`id`, `idea_id`, `user_id`, `created_at`, `updated_at`) VALUES
(14, 13, 1, '2025-03-08 21:58:12', '2025-03-08 21:58:12'),
(15, 14, 6, '2025-03-08 22:09:37', '2025-03-08 22:09:37'),
(16, 14, 8, '2025-03-09 02:25:54', '2025-03-09 02:25:54'),
(17, 16, 8, '2025-03-09 02:26:24', '2025-03-09 02:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_02_050219_add_two_factor_columns_to_users_table', 1),
(5, '2025_02_02_050310_create_personal_access_tokens_table', 1),
(8, '2025_03_05_051603_create_ideas_table', 2),
(9, '2025_03_06_074300_create_comments_table', 2),
(10, '2025_03_09_011544_add_bio_and_image_to_users', 3),
(11, '2025_03_09_032125_create_follower_user_table', 4),
(12, '2025_03_09_042439_drop_likes_from_ideas', 5),
(13, '2025_03_09_051806_create_idea_like_table', 6);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('glrwmOP3t6YxwEVtWcGJVQByoiW9RVZ1nrwbCId4', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidXV4ZXVIcHFWOUhWMzN4MkVISnpYbk1iNWRqVG9XMm9COGMyNm9MZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9fQ==', 1741524773),
('na521MAR1CTG2BUFXP8WH1Vx0XWVqWdQJVTiOu3P', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRXRSd2Q3Q3pjU3NiZ3ZxVldKd0xOWmkzZE1UbDBJdzYyV0VEekJkUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2Vycy8xIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NjtzOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e319', 1741503383),
('UYkw86n6BPZc7SFfygmg7R3m8AMDoXbiSwh9x8Nf', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRWZFZkVDQ2VlUzVFT3pTZUVFVmpDVnN5RFhNYnJ6WkRGc05ieklxdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjg7czoyMjoiUEhQREVCVUdCQVJfU1RBQ0tfREFUQSI7YTowOnt9fQ==', 1741503890);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `bio`, `image`) VALUES
(1, 'test@gmail.com', 'test@gmail.com', NULL, '$2y$12$Js/o.ddMl6OuEcf7NwE9UOIsnVkswA2UguoB3vRBXZdOtaiMhLBKi', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 05:53:56', '2025-03-08 21:01:25', NULL, 'profile/UAyCFGa71InICg6V3rtU6W5ZWA1sVKj8RCxOvtba.jpg'),
(2, 'test2@gmail.com', 'test2@gmail.com', NULL, '$2y$12$w7DqToW2aWpAO0KsJQOEIeH5uN4/J5dVD4EUN1c49DG0Z8Hg2itzS', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 05:56:27', '2025-03-07 05:56:27', NULL, NULL),
(3, 'test4@gmail.com', 'test4@gmail.com', NULL, '$2y$12$WS.UYQLUpjUk58VV.CoS8OhE1jwFJqdshGPk5JVuG9uefxg/kKevS', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 05:56:55', '2025-03-07 05:56:55', NULL, NULL),
(4, 'test5@gmail.com', 'test5@gmail.com', NULL, '$2y$12$T5FKE5HfzOSntpqhMqd9dehwSkNu3gNfQ/KY6BIadlP5optHnkmnW', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 05:57:39', '2025-03-07 05:57:39', NULL, NULL),
(5, 'final', 'final@gmail.com', NULL, '$2y$12$jG7Zx30QKYgWo.l2S6jRaebQRUcLP68tblpPjzLzvYcir/tLDWGw.', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 16:45:16', '2025-03-07 16:45:16', NULL, NULL),
(6, 'test3@we', 'test3@gmail.com', NULL, '$2y$12$3qn2I6PdUpIEOSQX2znP9OxkzNtGz5Q3ckeSA0fNNKcLYs5uTwrZm', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-07 19:04:44', '2025-03-08 22:46:26', 'qweqeqeqeq', 'profile/b7cXYF5LKMBBiMcJArxsD9ogLjs1EBG45FVIWmIQ.jpg'),
(7, 'Jun Marlou', 'junmarlou@gmail.com', NULL, '$2y$12$dLk2XvFgUC/gRkiMPslBteW3FGujOyr.FxvFcqIpJr/3WnjMQEnBO', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-08 22:58:43', '2025-03-08 23:00:46', NULL, 'profile/gsuYjOiXqT3xOV3EBfDvxOuVfgHwBRcRI0zNdCZb.jpg'),
(8, 'Marc Christian', 'marcchristian@gmail.com', NULL, '$2y$12$wrVowsPNGern0k86cpCma.8LrdI/dZ4ggAbsXo0Kt/8iJg7R2seXu', NULL, NULL, NULL, NULL, NULL, NULL, '2025-03-08 23:01:27', '2025-03-08 23:02:49', NULL, 'profile/W2KNWFkDWbdTTPInbJA3xWKIVcQfKYMYXcdEGO9w.jpg');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_idea_id_foreign` (`idea_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follower_user`
--
ALTER TABLE `follower_user`
  ADD KEY `follower_user_follower_id_foreign` (`follower_id`),
  ADD KEY `follower_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ideas_user_id_foreign` (`user_id`);

--
-- Indexes for table `idea_like`
--
ALTER TABLE `idea_like`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idea_like_idea_id_foreign` (`idea_id`),
  ADD KEY `idea_like_user_id_foreign` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `idea_like`
--
ALTER TABLE `idea_like`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_idea_id_foreign` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follower_user`
--
ALTER TABLE `follower_user`
  ADD CONSTRAINT `follower_user_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follower_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `ideas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `idea_like`
--
ALTER TABLE `idea_like`
  ADD CONSTRAINT `idea_like_idea_id_foreign` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `idea_like_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
