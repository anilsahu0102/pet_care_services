-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2015 at 10:35 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocate_services`
--

CREATE TABLE IF NOT EXISTS `allocate_services` (
  `id` int(10) unsigned NOT NULL,
  `service_type_id` int(10) unsigned NOT NULL,
  `pet_type_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `allocate_services`
--

INSERT INTO `allocate_services` (`id`, `service_type_id`, `pet_type_ids`, `created_at`, `updated_at`) VALUES
(1, 8, '2,5', '2015-10-03 14:45:54', '2015-10-03 15:45:59'),
(2, 5, '2,3', '2015-10-03 14:45:54', '2015-10-03 14:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_10_03_082906_create_users_table', 1),
('2015_10_03_154654_create_service_type_table', 2),
('2015_10_03_154706_create_pet_type_table', 2),
('2015_10_03_183714_create_allocate_service_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pet_types`
--

CREATE TABLE IF NOT EXISTS `pet_types` (
  `id` int(10) unsigned NOT NULL,
  `pet_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pet_types`
--

INSERT INTO `pet_types` (`id`, `pet_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dog', '2015-10-03 12:39:19', '2015-10-03 12:53:09', '2015-10-03 12:53:09'),
(2, 'Cats', '2015-10-03 12:53:13', '2015-10-03 12:53:13', NULL),
(3, 'Dogs', '2015-10-03 12:53:20', '2015-10-03 12:53:20', NULL),
(4, 'Rabbits', '2015-10-03 12:53:28', '2015-10-03 12:53:28', NULL),
(5, 'Tortoises', '2015-10-03 12:53:37', '2015-10-03 12:53:37', NULL),
(6, 'Pet snakes', '2015-10-03 12:55:20', '2015-10-03 12:55:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_types`
--

CREATE TABLE IF NOT EXISTS `service_types` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_types`
--

INSERT INTO `service_types` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', '2015-10-03 10:41:27', '2015-10-03 12:52:06', '2015-10-03 12:52:06'),
(4, 'Washing', '2015-10-03 12:52:13', '2015-10-03 12:52:13', NULL),
(5, 'Shampooing', '2015-10-03 12:52:21', '2015-10-03 12:52:21', NULL),
(6, 'Pedicure', '2015-10-03 12:52:32', '2015-10-03 12:52:32', NULL),
(7, 'Manicure', '2015-10-03 12:52:40', '2015-10-03 12:52:40', NULL),
(8, 'Polishing', '2015-10-03 12:52:47', '2015-10-03 12:52:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '$2y$10$IaycDYry48h3J0m67JJU7Ocof0gwdDoXK0Wp3Ojqd9dU9zuNxKIxe', 'zE9VA9VcF1Fjpyt0AiQ7n0lbGdIP6KZ3geAreZoSUJTFemU0Rl5fHhnCjIar', '2015-10-03 03:05:08', '2015-10-03 16:49:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate_services`
--
ALTER TABLE `allocate_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `allocate_services_service_type_id_foreign` (`service_type_id`);

--
-- Indexes for table `pet_types`
--
ALTER TABLE `pet_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_types`
--
ALTER TABLE `service_types`
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
-- AUTO_INCREMENT for table `allocate_services`
--
ALTER TABLE `allocate_services`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pet_types`
--
ALTER TABLE `pet_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service_types`
--
ALTER TABLE `service_types`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `allocate_services`
--
ALTER TABLE `allocate_services`
  ADD CONSTRAINT `allocate_services_service_type_id_foreign` FOREIGN KEY (`service_type_id`) REFERENCES `service_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
