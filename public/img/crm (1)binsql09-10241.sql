-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2021 at 12:42 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL DEFAULT '0',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `online` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`, `role`, `pin`, `confirmed`, `online`, `remember_token`) VALUES
(1, 'Bulzart', 'bulzarti@gmail.com', NULL, '$2y$10$/zrkqp456yzkwFkJ2atsjOi5ypfrC5J6hgO.0.HVlx6WCUpqCFHZi', '2021-11-25 11:42:43', '2021-12-06 09:30:51', 'admin', 2673, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_id` int(11) NOT NULL,
  `family` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `lead_id`, `family`, `created_at`, `updated_at`, `lname`, `birthday`) VALUES
(5, 'bulzart', 1, '[{\"fname\": \"bulzart\", \"lname\": \"aliu\", \"birthday\": \"2021-12-21\"}, {\"fname\": \"aswqewq\", \"lname\": \"aqwqwe\", \"birthday\": \"2021-12-08\"}, {\"fname\": \"basss\", \"lname\": \"ewqe\", \"birthday\": \"2021-12-21\"}]', '2021-12-06 15:10:29', '2021-12-06 15:10:29', 'aliu', '2021-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'instagram', NULL, NULL),
(2, 'facebook', NULL, NULL),
(5, 'google', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `costumer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `chat` json DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `costumer_id`, `admin_id`, `chat`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 'Nice', '2021-12-01 10:22:38', '2021-12-01 10:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `birthday` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civilstatus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actions` json NOT NULL,
  `dateofbirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kvg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vvg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `health` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `phone`, `admin_id`, `birthday`, `age`, `nationality`, `civilstatus`, `surname`, `actions`, `dateofbirth`, `kvg`, `vvg`, `health`) VALUES
(1, 'Bulzart', 'bulzarti@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2021-11-29 14:46:00', NULL, '045917726', 1, '2000-08-26', 21, 'Kosover', NULL, 'Aliu', 'null', '', '', '', '');

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
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `campaign_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `assigned` tinyint(1) NOT NULL DEFAULT '0',
  `completed` int(11) NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advisor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telprivat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appointmentdate` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wantsonline` tinyint(1) NOT NULL DEFAULT '0',
  `app` tinyint(1) DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `name`, `count`, `created_at`, `updated_at`, `campaign_id`, `admin_id`, `assigned`, `completed`, `address`, `advisor`, `day`, `language`, `nationality`, `postcode`, `location`, `telprivat`, `appointmentdate`, `lname`, `wantsonline`, `app`, `time`, `slug`) VALUES
(1, 'Adrienne', 4, '2021-11-27 14:23:49', '2021-11-29 14:24:08', 5, 1, 1, 1, 'Kuvendi i Ferizajt', NULL, NULL, NULL, NULL, NULL, 'ferizaj', NULL, '2021-12-04', 'Funk', 0, NULL, '18:43', 'adrienne-4'),
(4, 'Cristoba', 9, '2021-11-27 14:23:49', '2021-11-29 14:24:13', 5, 1, 1, 0, 'Vellezerit Gervala', NULL, NULL, NULL, NULL, NULL, 'ferizaj', NULL, '2021-12-04', 'Dooley', 0, NULL, '16:44', 'cristoba-5'),
(5, 'Violet Runte', 10, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 5, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-04', '', 1, NULL, NULL, ''),
(6, 'Kenny Armstrong Sr.', 8, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-04', '', 1, NULL, NULL, ''),
(7, 'Zula Reichert', 10, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1, NULL, NULL, ''),
(8, 'Laila Hayes', 2, '2021-11-27 14:23:49', '2021-11-27 14:23:49', 1, 1, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', 1, NULL, NULL, ''),
(9, 'Bulzart', 4, '2021-11-30 13:27:20', '2021-11-30 13:27:20', 2, 1, 0, 0, 'Kuvendi i Ferizajt', NULL, '2', NULL, 'Kosovo', 70000, 'Ferizaj', '045917726', NULL, 'Aliu', 0, NULL, NULL, ''),
(10, 'Bulzart', 3, '2021-11-30 13:35:52', '2021-11-30 13:35:52', 2, 1, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(11, 'Bulzart', 3, '2021-11-30 13:36:43', '2021-11-30 13:36:43', 2, 1, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(12, 'Bulzart', 3, '2021-11-30 13:36:57', '2021-11-30 13:36:57', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(13, 'Bulzart', 3, '2021-11-30 13:37:19', '2021-11-30 13:37:19', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(14, 'Bulzart', 3, '2021-11-30 13:38:18', '2021-11-30 13:38:18', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(15, 'Bulzart', 3, '2021-11-30 13:38:44', '2021-11-30 13:38:44', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(16, 'Bulzart', 3, '2021-11-30 13:39:16', '2021-11-30 13:39:16', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(17, 'Bulzart', 3, '2021-11-30 13:39:46', '2021-11-30 13:39:46', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '048266616', NULL, 'Aliu', 0, NULL, NULL, ''),
(18, 'Bulzart', 3, '2021-11-30 13:52:17', '2021-11-30 13:52:17', 2, NULL, 0, 0, 'Kuvendi i Ferizajt', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '045405629', NULL, 'Aliu', 0, NULL, NULL, ''),
(19, 'Bulzart', 3, '2021-11-30 13:53:01', '2021-11-30 13:53:01', 2, NULL, 0, 0, 'qwewqewq', NULL, 'Tuesday', NULL, 'ferizaj', 72255, 'qwewqewq', '55465456', NULL, 'Aliu', 0, NULL, NULL, ''),
(20, 'Bulzart', 9, '2021-11-30 13:54:56', '2021-11-30 13:54:56', 2, NULL, 0, 0, 'fewqewq', NULL, 'Tuesday', NULL, 'qwqwwq', 51111, 'Ferizaj', '5454545', NULL, 'Aliu', 0, NULL, NULL, ''),
(21, 'Bulzart', 4, '2021-11-30 13:55:20', '2021-11-30 13:55:20', 2, NULL, 0, 0, 'vllezerit gervalla', NULL, 'Tuesday', NULL, 'Kosovo', 70000, 'Ferizaj', '55465456', NULL, 'Aliu', 0, NULL, NULL, ''),
(22, 'Bleron', 4, '2021-12-01 12:23:30', '2021-12-01 12:23:30', 0, NULL, 0, 0, 'FusheKosove', NULL, 'Wednesday', NULL, 'Kosove', 10000, 'Prishtine', '455444564', NULL, 'Maxhuani', 0, NULL, NULL, ''),
(23, 'Bleron', 4, '2021-12-01 12:32:55', '2021-12-01 12:32:55', 0, NULL, 0, 0, 'FusheKosove', NULL, 'Wednesday', NULL, 'Kosove', 10000, 'Prishtine', '455444564', NULL, 'Maxhuani', 0, NULL, NULL, ''),
(25, 'Jasin', 3, '2021-12-01 12:53:47', '2021-12-01 12:53:47', 0, 1, 1, 0, 'Rruga b mati 1', NULL, 'Wednesday', NULL, 'Kosovo', 10000, 'Prishtine', '45444444', '2021-12-04', 'Bilalli', 0, NULL, '17:00', 'jasin-bilalli'),
(26, 'Bulzart', 9, '2021-12-01 12:55:18', '2021-12-01 12:55:18', 0, NULL, 1, 0, 'vllezerit gervalla', NULL, 'Wednesday', NULL, 'Kosovo', 70000, 'Ferizaj', '55465456', NULL, 'Aliu', 1, NULL, NULL, ''),
(27, 'Bulzart', 5, '2021-12-01 13:29:34', '2021-12-01 13:29:34', 0, NULL, 1, 0, 'Kuvendi i Ferizajt', NULL, 'Wednesday', NULL, 'Kosovo', 70000, 'Ferizaj', '45917726', '', 'Aliu', 1, NULL, NULL, ''),
(28, 'Miranda Lindsay', 4, '2021-12-04 12:06:14', '2021-12-04 12:06:14', NULL, NULL, 1, 0, 'Aliqua Tenetur fugi', NULL, 'Saturday', NULL, 'Dolores tempore sed', 3000, 'Harum rem ea qui fug', '+1 (921) 327-1461', '1987-11-23', 'Chadwick Knapp', 1, NULL, NULL, ''),
(29, 'Lewis', 2, '2021-12-04 12:10:20', '2021-12-04 12:10:20', NULL, 1, 0, 0, 'Facilis quidem fugia', NULL, 'Saturday', NULL, 'Provident labore ex', 3000, 'Consectetur quis imp', '+1 (553) 412-3652', '2009-09-11', 'Farmer', 0, NULL, NULL, ''),
(30, 'Kelsey Rowland', 91, '2021-12-04 12:16:34', '2021-12-04 12:16:34', NULL, NULL, 1, 0, 'Aliquam elit libero', NULL, 'Saturday', NULL, 'Dolor vel sint nobi', 21, 'Et a enim nostrum no', '+1 (845) 597-4703', '1984-10-12', 'Judith Pennington', 1, NULL, NULL, ''),
(31, 'Kamal Vazquez', 72, '2021-12-04 12:18:13', '2021-12-04 12:18:13', NULL, NULL, 1, 0, 'Expedita ea sed occa', NULL, 'Saturday', NULL, 'Officia adipisicing', 60, 'Quia sint aliquam ci', '+1 (173) 517-1584', '1990-12-12', 'Angelica Allison', 1, NULL, NULL, ''),
(32, 'Kamal Vazquez', 72, '2021-12-04 12:18:53', '2021-12-04 12:18:53', NULL, NULL, 1, 0, 'Expedita ea sed occa', NULL, 'Saturday', NULL, 'Officia adipisicing', 60, 'Quia sint aliquam ci', '+1 (173) 517-1584', '1990-12-12', 'Angelica Allison', 1, NULL, NULL, '');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_25_100748_changeuser', 1),
(6, '2021_11_25_103611_create_roles_table', 2),
(7, '2021_11_25_104229_costumers_table_migration', 2),
(8, '2021_11_25_105731_costumer_add_field', 3),
(10, '2021_11_25_121655_change_user_fields_pin', 4),
(11, '2021_11_25_122936_create_admins_table', 5),
(12, '2021_11_25_123543_admins_pin_column', 6),
(13, '2021_11_25_124108_admins_confirmed_field', 7),
(14, '2021_11_25_152405_add_online_admins', 8),
(15, '2021_11_26_124724_create_costumers_table', 9),
(22, '2021_11_27_132304_create_leads_table', 10),
(23, '2021_11_27_142414_change_campaign_leads', 10),
(24, '2021_11_27_150841_add_token_admins', 11),
(25, '2021_11_27_152057_add_unsigned_leads', 12),
(26, '2021_11_29_105505_add_completed_leads', 12),
(28, '2021_11_29_114109_add_details_costumer', 13),
(29, '2021_11_29_130943_add_actions_costumer', 14),
(30, '2021_11_29_150416_add_address_leads', 15),
(32, '2021_11_30_105617_lead_add_fields', 16),
(33, '2021_11_30_111015_add_fields_costumers', 17),
(34, '2021_11_30_135639_create_campaigns_table', 18),
(35, '2021_11_30_151111_add_lead_online', 19),
(36, '2021_12_01_095352_create_chats_table', 20),
(37, '2021_12_01_153328_add_app_field', 21),
(38, '2021_12_04_113832_appointment_add_time', 22),
(39, '2021_12_04_132939_add_slug_leads', 23),
(40, '2021_12_06_144011_create_appointments_table', 24),
(41, '2021_12_06_152927_add_birthday_lname_appointments', 25);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin` int(11) NOT NULL,
  `confirmed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `pin`, `confirmed`) VALUES
(1, 'Bulzart', 'bulzarti@gmail.com', NULL, '$2y$10$2QWY1.0Hayb3nfdBHgV.PuaH0k/Pv44ze9Nar3gpKg/j0FR.hwIyO', NULL, '2021-11-25 11:07:57', '2021-11-25 11:07:57', 'sm', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_role_index` (`role`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_costumer_id_index` (`costumer_id`),
  ADD KEY `chats_admin_id_index` (`admin_id`),
  ADD KEY `chats_rating_index` (`rating`);

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `costumers_name_index` (`name`),
  ADD KEY `costumers_email_index` (`email`),
  ADD KEY `costumers_phone_index` (`phone`),
  ADD KEY `costumers_surname_index` (`surname`),
  ADD KEY `costumers_dateofbirth_index` (`dateofbirth`),
  ADD KEY `costumers_health_index` (`health`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leads_campaign_id_index` (`campaign_id`),
  ADD KEY `leads_address_index` (`address`),
  ADD KEY `leads_advisor_index` (`advisor`),
  ADD KEY `leads_nationality_index` (`nationality`),
  ADD KEY `leads_location_index` (`location`),
  ADD KEY `leads_telprivat_index` (`telprivat`),
  ADD KEY `leads_slug_index` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_role_index` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_index` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
