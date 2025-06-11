-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 07:42 AM
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
-- Database: `home_services`
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
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `user_id`, `name`, `institute`, `start_date`, `end_date`, `description`, `created_at`, `updated_at`) VALUES
(19, '9', 'random', 'random', '2025-06-01', '2025-06-03', 'random', '2025-06-07 23:11:44', '2025-06-07 23:11:44'),
(69, '16', 'HVAC Installation Training', 'Blue Collar Training School', '2024-01-01', '2025-06-01', 'None', '2025-06-09 16:08:39', '2025-06-09 16:08:39'),
(70, '17', 'Appliance Repair Certification', 'Reliable Hands Institute', '2023-01-09', '2024-01-09', 'None', '2025-06-09 16:12:22', '2025-06-09 16:12:22'),
(72, '18', 'Plumbing', 'National Skills', '2023-01-09', '2025-06-01', 'this is description', '2025-06-09 16:16:34', '2025-06-09 16:16:34'),
(81, '5', 'Certified Web Developer', 'Institute of Technology', '2020-01-08', '2025-01-08', 'Passionate about creating positive customer experiences. I pride myself on clear communication, attentive service, and building lasting relationships through reliable support.', '2025-06-10 10:25:34', '2025-06-10 10:25:34'),
(82, '5', 'Appliance Repair Certification', 'Reliable Hands Institute', '2023-01-08', '2024-01-08', 'Meticulous and thorough, with a keen eye for detail. I ensure precision and accuracy in all undertakings, striving for perfection in every aspect of my work', '2025-06-10 10:25:34', '2025-06-10 10:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `expertises`
--

CREATE TABLE `expertises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text NOT NULL,
  `tags` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertises`
--

INSERT INTO `expertises` (`id`, `user_id`, `tags`, `created_at`, `updated_at`) VALUES
(5, '9', 'random', '2025-06-07 23:11:44', '2025-06-07 23:11:44'),
(158, '16', 'Electrical Repair', '2025-06-09 16:08:39', '2025-06-09 16:08:39'),
(159, '16', 'Home Appliance Installation', '2025-06-09 16:08:39', '2025-06-09 16:08:39'),
(160, '16', 'Furniture Assembly', '2025-06-09 16:08:39', '2025-06-09 16:08:39'),
(161, '17', 'CCTV Installation', '2025-06-09 16:12:22', '2025-06-09 16:12:22'),
(162, '17', 'AC Service', '2025-06-09 16:12:22', '2025-06-09 16:12:22'),
(165, '18', 'Plumbing', '2025-06-09 16:16:34', '2025-06-09 16:16:34'),
(166, '18', 'Painting', '2025-06-09 16:16:34', '2025-06-09 16:16:34'),
(183, '5', 'Web Development', '2025-06-10 10:25:34', '2025-06-10 10:25:34'),
(184, '5', 'Mobile App Design', '2025-06-10 10:25:34', '2025-06-10 10:25:34'),
(185, '5', 'Graphic Design', '2025-06-10 10:25:34', '2025-06-10 10:25:34'),
(186, '5', 'Expertise3', '2025-06-10 10:25:34', '2025-06-10 10:25:34');

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
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Quantum Study Institute', '2025-06-06 05:55:12', '2025-06-06 05:55:12'),
(3, 'KnowledgeTree Institute', '2025-06-06 05:55:37', '2025-06-06 06:09:58'),
(4, 'Nova Scholars Institute', '2025-06-06 05:55:45', '2025-06-06 05:55:45'),
(5, 'BrightMind Academy', '2025-06-06 05:55:53', '2025-06-06 06:09:53');

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
(4, '2025_06_02_101729_create_settings_table', 2),
(5, '2025_06_05_023314_create_services_table', 3),
(6, '2025_06_05_054225_create_experiences_table', 4),
(7, '2025_06_05_063604_create_certificates_table', 5),
(8, '2025_06_06_104906_create_institutes_table', 6),
(9, '2025_06_07_004023_create_expertises_table', 7),
(10, '2025_06_09_071851_create_requests_table', 8),
(11, '2025_06_09_072208_create_reviews_table', 8);

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
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employer_id` text NOT NULL,
  `service_provider_id` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `employer_id`, `service_provider_id`, `status`, `details`, `created_at`, `updated_at`) VALUES
(13, '15', '5', 'pending', 'Need a reliable painter to repaint the living room and hallway. Paint will be provided', '2025-06-11 03:47:43', '2025-06-11 03:47:43'),
(14, '15', '16', 'accepted', 'Require pest control treatment for cockroaches and ants in the house', '2025-06-11 03:48:01', '2025-06-11 04:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reviewee_id` text NOT NULL,
  `reviewer_id` text NOT NULL,
  `request_id` text DEFAULT NULL,
  `rating` tinyint(4) NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewee_id`, `reviewer_id`, `request_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(16, '16', '15', '14', 3, 'Excellent service! Very professional and punctual. Will definitely hire again', '2025-06-11 04:04:25', '2025-06-11 04:04:25');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` text NOT NULL,
  `image` text DEFAULT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `user_id`, `image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(22, '9', 'logo.png', 'random', 'random', '2025-06-07 23:11:44', '2025-06-07 23:11:44'),
(74, '5', 'Annotation 2025-05-21 012123.png', 'HVAC Installation Training', 'Highly skilled and customer-focused Service Provider with 5+ years of experience delivering exceptional results across various client needs. Dedicated to providing timely, efficient, and high-quality service, ensuring complete client satisfaction. Proven ability to adapt to diverse project requirements and consistently exceed expectations', '2025-06-08 23:43:57', '2025-06-10 10:18:00'),
(79, '16', '1749485218_684706a289602.png', 'HVAC Installation Training', 'this is description', '2025-06-09 16:06:58', '2025-06-09 16:06:58'),
(80, '17', '1749485542_684707e625070.png', 'HVAC Installation Training', 'this is description', '2025-06-09 16:12:22', '2025-06-09 16:12:22'),
(81, '18', '1749485779_684708d3381ed.png', 'Electrical Wiring Certification', 'this is description', '2025-06-09 16:16:19', '2025-06-09 16:16:19');

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
('nyMLlBNv2INNK2XgbcZLMZy20TLNJarrYzR9v15e', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUtWQkMwZkpVaDRzNlROQkczdkhnRWFuYzJFbFlJU2VUYlZLVjB1NCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1749620014);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` varchar(255) DEFAULT NULL,
  `site_favicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_logo`, `site_favicon`, `created_at`, `updated_at`) VALUES
(1, 'Home-Services', 'favicon.png', 'faicon1.png', NULL, '2025-06-06 00:50:32');

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
  `type` text NOT NULL DEFAULT '0',
  `cover_image` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `job_title` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `type`, `cover_image`, `image`, `status`, `job_title`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin User', 'admin@gmail.com', NULL, '$2y$12$7LIdqWGeDMpoltDf9PPIYeQzcZR6XgNcWDQe8Rk.gZkFHoeDBY5BK', '1', NULL, 'avatar-icon-images-4 (1).jpg', '1', 'Specialization', NULL, '2025-06-01 02:25:49', '2025-06-06 06:32:02'),
(5, 'Zohaib Shaikh', 'service@gmail.com', NULL, '$2y$12$7WX2D0OV2tyhNV0nJOVvr.TcFJyXeJaW7LyLLNzixLmPXIKERVsoG', '2', 'logo1.jpg', '1749484914_6847057264a82.jpg', '1', 'Specialization', NULL, '2025-06-01 02:25:49', '2025-06-11 04:54:41'),
(8, 'Admin No12', 'admin12@gmail.com', NULL, '$2y$12$5I5XLFzp.TEZJBadwilTSOwieklVYYyZxBfD1UbkLgtOuGgivj1tO', '1', NULL, 'avatar-icon-images-4 (1).jpg', '1', NULL, NULL, '2025-06-06 01:41:24', '2025-06-06 05:29:18'),
(15, 'Javed Emp', 'employer@gmail.com', NULL, '$2y$12$hSjA7BjKVFL1SCqYTpilieP.QWalM5MgQuqV5PZkG1rNTfR9BeSsC', '0', NULL, '1749617509_68490b65139f6.png', '1', NULL, NULL, '2025-06-09 01:52:16', '2025-06-11 04:51:49'),
(16, 'Bilal Mehmood', 'service2@gmail.com', NULL, '$2y$12$aEQ9n9jrY..E5jVx8PeCDeFXQTKih7KGxV6VhwNkE5dW8Ekn4f/sO', '2', NULL, '1749618216_68490e28a9363.png', '1', 'Specialization', NULL, '2025-06-09 03:19:46', '2025-06-11 05:03:36'),
(17, 'Hira Fatima', 'service3@gmail.com', NULL, '$2y$12$HGtMz8DU1vchub5hn4B1Y.KwY9NPB72kW.Vb7v6hKjqQwcQsZlS5e', '2', NULL, '1749485542_684707e60c4bd.jpg', '1', 'Specialization', NULL, '2025-06-09 03:20:13', '2025-06-11 05:32:28'),
(18, 'Danish Qureshi', 'service4@gmail.com', NULL, '$2y$12$wWBmgyVMZqxmsvQETqPVAetV5MtHxQ4wS7G0hrK.0WwIVuW0lr17O', '2', NULL, '1749485794_684708e204d38.png', '1', NULL, NULL, '2025-06-09 03:20:43', '2025-06-09 16:16:34'),
(19, 'Service Provider No 6', 'service6@gmail.com', NULL, '$2y$12$APxSSNBG2s2B39pGpdeut.khvV/ekyrrpgtbXXw/7H2muQH8gBud6', '1', NULL, '1749618333_68490e9d6eced.jpg', '1', NULL, NULL, '2025-06-11 05:05:33', '2025-06-11 05:05:33');

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
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expertises`
--
ALTER TABLE `expertises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `expertises`
--
ALTER TABLE `expertises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
