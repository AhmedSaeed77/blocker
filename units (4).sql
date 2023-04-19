-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 11:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `units`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'a@a.com', 'a@a.com', '$2y$10$kiuDpsxMkAaA1we.GUrSBeabs77i3bRloj2D1fe3z7ivhC9cEzc/a', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `amenitieprojects`
--

CREATE TABLE `amenitieprojects` (
  `id` int(11) NOT NULL,
  `amenitie_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenitieprojects`
--

INSERT INTO `amenitieprojects` (`id`, `amenitie_id`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 1, 31, '2022-10-25 05:34:57', '2022-10-25 05:34:57'),
(2, 2, 31, '2022-10-25 05:34:57', '2022-10-25 05:34:57'),
(3, 1, 32, '2022-10-25 05:35:49', '2022-10-25 05:35:49'),
(4, 2, 32, '2022-10-25 05:35:49', '2022-10-25 05:35:49'),
(5, 1, 33, '2022-10-25 05:36:50', '2022-10-25 05:36:50'),
(6, 2, 33, '2022-10-25 05:36:50', '2022-10-25 05:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `name_ar`, `name_en`, `created_at`, `updated_at`) VALUES
(1, ' Air Cond', 'اير كو', ' Air Cond', '2022-10-24 21:01:22', '2022-10-24 21:01:22'),
(2, 'Balcony', 'بلاك', 'Balcony', '2022-10-24 21:01:22', '2022-10-24 21:01:22');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `region_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Al Ghadeer ', 1, '2022-10-24 22:05:29', '2022-10-24 22:05:29'),
(2, 'Al Barsha 1', 2, '2022-10-24 22:05:29', '2022-10-24 22:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `title_ar` varchar(100) NOT NULL,
  `title_fr` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `article_ar` text NOT NULL,
  `article_fr` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `title_ar`, `title_fr`, `article`, `article_ar`, `article_fr`, `image`, `created_at`, `updated_at`) VALUES
(1, 'rt', 'سيسي', 'سي', 'tr', 'سي', 'سي', '1666500165157.webp', '2022-10-23 02:42:45', '2022-10-23 02:42:45'),
(2, 'rt', 'ي', 'سي', 'tr', 'يس', 'سي', '1666500181109.webp', '2022-10-23 02:43:01', '2022-10-23 02:43:01'),
(3, 'rt', 'سي', 'سي', 'tr', 'سي', 'ي', '166650031614.webp', '2022-10-23 02:45:17', '2022-10-23 02:45:17'),
(5, 'fggf', 'fggf', 'fg', 'fg', 'fg', 'fg', '166668500621.webp', '2022-10-25 06:03:26', '2022-10-25 06:03:26'),
(6, 'rtrtr', 'trt', 'rtt', 'trtr', 'trt', 'trt', '166668508296.webp', '2022-10-25 06:04:43', '2022-10-25 06:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `developers`
--

CREATE TABLE `developers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `site` varchar(200) DEFAULT NULL,
  `logo` varchar(100) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developers`
--

INSERT INTO `developers` (`id`, `name`, `fax`, `site`, `logo`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(4, 'dev_1', NULL, NULL, '166665594590.webp', NULL, NULL, '2022-10-24 20:49:28', '2022-10-24 20:49:28'),
(5, 'dev_2', NULL, NULL, '166665621519.webp', NULL, NULL, '2022-10-24 20:49:28', '2022-10-24 20:49:28');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featurs`
--

CREATE TABLE `featurs` (
  `id` int(11) NOT NULL,
  `featur` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `location` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Abu Dhabi', '16656215180.webp', '2022-10-23 03:39:09', '2022-10-23 03:39:09'),
(2, 'Dubai', '166656215180.webp', '2022-10-23 03:39:09', '2022-10-23 03:39:09'),
(3, 'Sharjah', '1666656215180.webp', '2022-10-23 03:39:09', '2022-10-23 03:39:09');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `pers` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `project_id`, `pers`, `created_at`, `updated_at`) VALUES
(12, 21, 1, '2022-10-24 21:54:50', '2022-10-24 21:54:50'),
(13, 21, 1, '2022-10-24 21:54:50', '2022-10-24 21:54:50'),
(14, 21, 1, '2022-10-24 21:54:50', '2022-10-24 21:54:50'),
(15, 21, 1, '2022-10-24 21:54:50', '2022-10-24 21:54:50'),
(16, 22, 1, '2022-10-24 21:55:23', '2022-10-24 21:55:23'),
(17, 22, 1, '2022-10-24 21:55:23', '2022-10-24 21:55:23'),
(18, 22, 1, '2022-10-24 21:55:23', '2022-10-24 21:55:23'),
(19, 22, 1, '2022-10-24 21:55:23', '2022-10-24 21:55:23'),
(20, 23, 1, '2022-10-24 21:56:48', '2022-10-24 21:56:48'),
(21, 23, 1, '2022-10-24 21:56:48', '2022-10-24 21:56:48'),
(22, 23, 1, '2022-10-24 21:56:48', '2022-10-24 21:56:48'),
(23, 23, 1, '2022-10-24 21:56:48', '2022-10-24 21:56:48'),
(24, 24, 1, '2022-10-24 21:59:05', '2022-10-24 21:59:05'),
(25, 24, 1, '2022-10-24 21:59:05', '2022-10-24 21:59:05'),
(26, 24, 1, '2022-10-24 21:59:05', '2022-10-24 21:59:05'),
(27, 24, 1, '2022-10-24 21:59:05', '2022-10-24 21:59:05'),
(28, 25, 1, '2022-10-24 21:59:39', '2022-10-24 21:59:39'),
(29, 25, 1, '2022-10-24 21:59:39', '2022-10-24 21:59:39'),
(30, 25, 1, '2022-10-24 21:59:39', '2022-10-24 21:59:39'),
(31, 25, 1, '2022-10-24 21:59:39', '2022-10-24 21:59:39'),
(32, 26, 1, '2022-10-24 22:02:44', '2022-10-24 22:02:44'),
(33, 26, 1, '2022-10-24 22:02:44', '2022-10-24 22:02:44'),
(34, 26, 1, '2022-10-24 22:02:44', '2022-10-24 22:02:44'),
(35, 26, 1, '2022-10-24 22:02:44', '2022-10-24 22:02:44'),
(36, 27, 1, '2022-10-24 22:03:35', '2022-10-24 22:03:35'),
(37, 27, 1, '2022-10-24 22:03:35', '2022-10-24 22:03:35'),
(38, 27, 1, '2022-10-24 22:03:35', '2022-10-24 22:03:35'),
(39, 27, 1, '2022-10-24 22:03:35', '2022-10-24 22:03:35'),
(40, 28, 10, '2022-10-25 03:55:17', '2022-10-25 03:55:17'),
(41, 28, 10, '2022-10-25 03:55:17', '2022-10-25 03:55:17'),
(42, 29, 100, '2022-10-25 03:56:30', '2022-10-25 03:56:30'),
(47, 31, 1, '2022-10-25 05:34:55', '2022-10-25 05:34:55'),
(48, 31, 1, '2022-10-25 05:34:55', '2022-10-25 05:34:55'),
(49, 31, 1, '2022-10-25 05:34:55', '2022-10-25 05:34:55'),
(50, 31, 1, '2022-10-25 05:34:55', '2022-10-25 05:34:55'),
(51, 31, 1, '2022-10-25 05:34:55', '2022-10-25 05:34:55'),
(52, 32, 1, '2022-10-25 05:35:47', '2022-10-25 05:35:47'),
(53, 32, 1, '2022-10-25 05:35:47', '2022-10-25 05:35:47'),
(54, 32, 1, '2022-10-25 05:35:47', '2022-10-25 05:35:47'),
(55, 32, 1, '2022-10-25 05:35:47', '2022-10-25 05:35:47'),
(56, 32, 1, '2022-10-25 05:35:47', '2022-10-25 05:35:47'),
(57, 33, 1, '2022-10-25 05:36:48', '2022-10-25 05:36:48'),
(58, 33, 1, '2022-10-25 05:36:48', '2022-10-25 05:36:48'),
(59, 33, 1, '2022-10-25 05:36:48', '2022-10-25 05:36:48'),
(60, 33, 1, '2022-10-25 05:36:48', '2022-10-25 05:36:48'),
(61, 33, 1, '2022-10-25 05:36:48', '2022-10-25 05:36:48');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `name_fr` varchar(100) NOT NULL,
  `name_ar` varchar(100) NOT NULL,
  `type_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `description_ar` text NOT NULL,
  `description_fr` text NOT NULL,
  `price` double NOT NULL,
  `region_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `pdf` varchar(100) NOT NULL,
  `pay_plan` int(11) NOT NULL,
  `vedio_link` text NOT NULL,
  `rooms` smallint(2) NOT NULL,
  `bath` mediumint(2) NOT NULL,
  `garage` mediumint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `name_fr`, `name_ar`, `type_id`, `status_id`, `description`, `description_ar`, `description_fr`, `price`, `region_id`, `area_id`, `bedrooms`, `code`, `dev_id`, `pdf`, `pay_plan`, `vedio_link`, `rooms`, `bath`, `garage`, `created_at`, `updated_at`) VALUES
(25, 'er', 'er', '', 6, 2, 'er', 're', 'er', 10, 1, 1, 1, 'er', 5, '', 4, 'tryty', 1, 1, 1, '2022-10-24 21:59:39', '2022-10-24 21:59:39'),
(26, 'er', 'er', '', 6, 2, 'er', 're', 'er', 10, 1, 1, 1, 'er', 5, '', 4, 'tryty', 1, 1, 1, '2022-10-24 22:02:44', '2022-10-24 22:02:44'),
(27, 'er', 'er', '', 6, 2, 'er', 're', 'er', 10, 1, 1, 1, 'er', 5, '', 4, 'tryty', 1, 1, 1, '2022-10-24 22:03:35', '2022-10-24 22:03:35'),
(28, 'sdsd', 'sdsd', '', 7, 2, 'dsds', 'sdds', 'dsds', 100, 2, 2, 4, '4554', 5, '', 2, 'ghhgh', 4, 4, 4, '2022-10-25 03:55:17', '2022-10-25 03:55:17'),
(29, 'rtrt', 'rtrt', '', 6, 2, 'rt', 'rtt', 'rt', 100, 2, 2, 45, 'rrt', 4, '', 1, 'utyuyt', 45, 45, 45, '2022-10-25 03:56:30', '2022-10-25 03:56:30'),
(31, 'fgfg', 'fggfg', 'fgf', 7, 2, 'fgg', 'fgfg', 'gfgf', 100, 2, 2, 4, 'fgfg', 4, '1666683295.png', 5, 'fddfdf', 4, 4, 4, '2022-10-25 05:34:55', '2022-10-25 05:34:55'),
(32, 'fgfg', 'fggfg', 'fgf', 7, 2, 'fgg', 'fgfg', 'gfgf', 100, 2, 2, 4, 'fgfg', 4, '1666683347.txt', 5, 'fddfdf', 4, 4, 4, '2022-10-25 05:35:47', '2022-10-25 05:35:47'),
(33, 'project33', 'حقخ 33 33', 'مشروع33', 7, 2, 'fgg', 'fgfg', 'gfgf', 100, 2, 2, 4, 'fgfg', 4, '1666683408.pdf', 5, 'fddfdf', 4, 4, 4, '2022-10-25 05:36:48', '2022-10-25 05:36:48');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `name`, `project_id`, `created_at`, `updated_at`) VALUES
(1, '1666655979133.webp', 25, '2022-10-24 21:59:40', '2022-10-24 21:59:40'),
(2, '1666656164119.webp', 26, '2022-10-24 22:02:44', '2022-10-24 22:02:44'),
(3, '166665621519.webp', 27, '2022-10-24 22:03:35', '2022-10-24 22:03:35'),
(4, '1666677317570.webp', 28, '2022-10-25 03:55:19', '2022-10-25 03:55:19'),
(5, '1666677391392.webp', 29, '2022-10-25 03:56:31', '2022-10-25 03:56:31'),
(6, '1666677390840.webp', 29, '2022-10-25 03:56:31', '2022-10-25 03:56:31'),
(8, '1666683296193.webp', 31, '2022-10-25 05:34:56', '2022-10-25 05:34:56'),
(9, '1666683348843.webp', 32, '2022-10-25 05:35:48', '2022-10-25 05:35:48'),
(10, '1666683409973.webp', 33, '2022-10-25 05:36:50', '2022-10-25 05:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `email`, `phone`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'dfgfgf', 'rttr', 'rtrtrt', 'trttr', '2022-10-25 06:00:27', '2022-10-25 06:00:27'),
(2, 'dfgfgf', 'rttr', 'rtrtrt', 'trttr', '2022-10-25 06:00:32', '2022-10-25 06:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'app_name', 'J-www', '2022-10-22 18:14:08', '2022-10-22 18:14:08'),
(2, 'goals', 'test english', '2022-10-23 00:26:35', '2022-10-23 00:26:35'),
(3, 'phone', '0104554554', '2022-10-23 00:29:13', '2022-10-23 00:29:13'),
(4, 'address', '95 South Park Avenue, USA', '2022-10-23 00:29:36', '2022-10-23 00:29:36'),
(5, 'email', 'support@findhouses.com', '2022-10-23 00:29:54', '2022-10-23 00:29:54'),
(6, 'Brief', '\"شركة جيوار العقارية هي شركة مصرية متخصصة في إدارة المشروعات العقارية من حيث التطوير والاستثمار العقاري،\r\nالتسويق العقاري، الإشراف على أعمال المقاولات والتشطيبات الداخلية وتقديم الاستشارات الادرية والمالية للشركات\r\nالعقارية\r\n\"', '2022-10-23 04:25:51', '2022-10-23 04:25:51'),
(7, 'vision', '\"Selling is the goal of every broker company, it\'s the ultimate goal in advertising campaigns through the page. but, aim to appear in a different way. Provide deep local real estate experience and knowledge to make The client’s experience as frictionless and empowering as possible.\r\nThe brand is raising product and page value, but the most essential features automatically come into the client\'s thoughts.\"', '2022-10-23 04:26:29', '2022-10-23 04:26:29'),
(8, 'message', 'To be the only one in real estate field and the easiest way to rush your business ', '2022-10-23 04:26:59', '2022-10-23 04:26:59'),
(9, 'insta', 'https://instagram.com/jiwar__realestate?igshid=YzAyZWRlMzg=', '2022-10-23 04:27:35', '2022-10-23 04:27:35'),
(10, 'linkedin', 'https://www.linkedin.com/in/jiwar-real-estate-87b33587', '2022-10-23 04:28:01', '2022-10-23 04:28:01'),
(11, 'facebook', 'https://www.facebook.com/jiwarproperties', '2022-10-23 04:28:19', '2022-10-23 04:28:19'),
(12, 'site', 'http://jiwarrealestate.com/', '2022-10-23 04:28:34', '2022-10-23 04:28:34'),
(13, 'whatsapp', '971 50 230 6164', '2022-10-23 04:28:54', '2022-10-23 04:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'New Launch', '2022-10-23 03:36:02', '2022-10-23 03:36:02'),
(2, 'Under Construction', '2022-10-23 03:36:02', '2022-10-23 03:36:02'),
(3, 'Ready to Move in', '2022-10-23 03:36:02', '2022-10-23 03:36:02'),
(4, 'Upcoming', '2022-10-23 03:36:02', '2022-10-23 03:36:02');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `project_id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 27, '454', '1666656215180.webp', '2022-10-24 22:03:36', '2022-10-24 22:03:36'),
(2, 28, 'fghgh', '1666677319148.webp', '2022-10-25 03:55:20', '2022-10-25 03:55:20'),
(3, 29, 'tytyrty', '1666677391171.webp', '2022-10-25 03:56:32', '2022-10-25 03:56:32'),
(5, 31, 'fgfg', '166668329646.webp', '2022-10-25 05:34:57', '2022-10-25 05:34:57'),
(6, 32, 'fgfg', '166668334881.webp', '2022-10-25 05:35:49', '2022-10-25 05:35:49'),
(7, 33, 'fgfg', '166668341086.webp', '2022-10-25 05:36:50', '2022-10-25 05:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'eng', '2022-10-16 14:10:44', '2022-10-16 14:10:44'),
(2, 'eng', '2022-10-16 14:11:27', '2022-10-16 14:11:27'),
(3, 'eng', '2022-10-16 14:12:41', '2022-10-16 14:12:41'),
(4, 'eng', '2022-10-16 14:12:41', '2022-10-16 14:12:41'),
(5, 'eng', '2022-10-16 14:18:27', '2022-10-16 14:18:27'),
(6, 'eng', '2022-10-16 14:19:16', '2022-10-16 14:19:16'),
(7, 'en', '2022-10-16 14:32:19', '2022-10-16 14:32:19'),
(8, 'en', '2022-10-16 14:35:37', '2022-10-16 14:35:37'),
(9, 'en', '2022-10-16 14:36:13', '2022-10-16 14:36:13'),
(10, 'en', '2022-10-16 14:37:34', '2022-10-16 14:37:34'),
(11, 'en', '2022-10-16 14:38:56', '2022-10-16 14:38:56'),
(12, 'en', '2022-10-16 14:39:28', '2022-10-16 14:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `transcodes`
--

CREATE TABLE `transcodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang_` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `row_` int(11) NOT NULL,
  `transcode` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transcodes`
--

INSERT INTO `transcodes` (`id`, `table_`, `lang_`, `column_`, `row_`, `transcode`, `created_at`, `updated_at`) VALUES
(5913, 'test', 'ar', 'name', 7, 'ar', '2022-10-16 14:32:19', '2022-10-16 14:32:19'),
(5914, 'test', 'fr', 'name', 7, 'فرنساوى', '2022-10-16 14:32:19', '2022-10-16 14:32:19'),
(5915, 'test', 'ar', 'name', 12, 'عربي', '2022-10-16 14:39:28', '2022-10-16 14:39:28'),
(5916, 'test', 'fr', 'name', 12, 'فرنساوى', '2022-10-16 14:39:28', '2022-10-16 14:39:28'),
(5925, 'projects', 'ar', 'name', 12, 'يبيبي', '2022-10-20 23:01:31', '2022-10-20 23:01:31'),
(5926, 'projects', 'ar', 'description', 12, 'يبيبيب', '2022-10-20 23:01:31', '2022-10-20 23:01:31'),
(5927, 'projects', 'fr', 'name', 12, 'ddfdfd', '2022-10-20 23:01:31', '2022-10-20 23:01:31'),
(5928, 'projects', 'fr', 'description', 12, 'fdfdfdf', '2022-10-20 23:01:31', '2022-10-20 23:01:31'),
(5929, 'projects', 'ar', 'name', 13, 'dfdf', '2022-10-20 23:05:48', '2022-10-20 23:05:48'),
(5930, 'projects', 'ar', 'description', 13, 'dffd', '2022-10-20 23:05:48', '2022-10-20 23:05:48'),
(5931, 'projects', 'fr', 'name', 13, 'dfdffd', '2022-10-20 23:05:48', '2022-10-20 23:05:48'),
(5932, 'projects', 'fr', 'description', 13, 'dfdf', '2022-10-20 23:05:48', '2022-10-20 23:05:48'),
(5945, 'projects', 'ar', 'name', 17, 'fg', '2022-10-21 00:04:34', '2022-10-21 00:04:34'),
(5946, 'projects', 'ar', 'description', 17, 'fg', '2022-10-21 00:04:34', '2022-10-21 00:04:34'),
(5947, 'projects', 'fr', 'name', 17, 'fg', '2022-10-21 00:04:34', '2022-10-21 00:04:34'),
(5948, 'projects', 'fr', 'description', 17, 'fg', '2022-10-21 00:04:34', '2022-10-21 00:04:34'),
(5949, 'type', 'ar', 'type', 1, '1', '2022-10-21 20:32:00', '2022-10-21 20:32:00'),
(5950, 'type', 'fr', 'type', 1, '3', '2022-10-21 20:32:00', '2022-10-21 20:32:00'),
(5951, 'type', 'ar', 'type', 2, 'rt', '2022-10-21 21:21:53', '2022-10-21 21:21:53'),
(5952, 'type', 'fr', 'type', 2, 't', '2022-10-21 21:21:53', '2022-10-21 21:21:53'),
(5953, 'type', 'ar', 'type', 3, 'fg', '2022-10-21 21:22:57', '2022-10-21 21:22:57'),
(5954, 'type', 'fr', 'type', 3, 'g', '2022-10-21 21:22:57', '2022-10-21 21:22:57'),
(5955, 'type', 'ar', 'type', 4, 'fg', '2022-10-21 21:24:14', '2022-10-21 21:24:14'),
(5956, 'type', 'fr', 'type', 4, 'fg', '2022-10-21 21:24:14', '2022-10-21 21:24:14'),
(5957, 'setting', 'fr', 'value', 2, 'ffffffffffffffffffffffffffffffffffffff', NULL, NULL),
(5958, 'blogs', 'ar', 'title', 1, 'rt', '2022-10-23 02:42:45', '2022-10-23 02:42:45'),
(5959, 'blogs', 'ar', 'title', 2, 'rt', '2022-10-23 02:43:01', '2022-10-23 02:43:01'),
(5960, 'blogs', 'ar', 'title', 3, 'rt', '2022-10-23 02:45:17', '2022-10-23 02:45:17'),
(5961, 'blogs', 'ar', 'article', 3, 'tr', '2022-10-23 02:45:17', '2022-10-23 02:45:17'),
(5962, 'blogs', 'ar', 'title', 4, 'rt', '2022-10-23 02:45:58', '2022-10-23 02:45:58'),
(5963, 'blogs', 'ar', 'article', 4, 'tr', '2022-10-23 02:45:58', '2022-10-23 02:45:58'),
(5964, 'blogs', 'fr', 'title', 4, 'rt', '2022-10-23 02:45:58', '2022-10-23 02:45:58'),
(5965, 'blogs', 'fr', 'article', 4, 'tr', '2022-10-23 02:45:58', '2022-10-23 02:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`, `created_at`, `updated_at`) VALUES
(5, 'apartement', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(6, 'villa', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(7, 'townhouse', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(8, 'twin house', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(9, 'penthouse', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(10, 'plot or land', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(11, 'hotel rooms', '2022-10-23 03:35:15', '2022-10-23 03:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'en',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lang`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed adawe', 'en', 'aaa15107@gmail.com', NULL, '$2y$10$DaccoTVyKKyGb6GTtx2NAuCDRHUM4guXCsT5cwEmbQWmfeIGZ5wmi', NULL, '2022-10-16 14:08:54', '2022-10-16 14:08:54'),
(2, 'fgfg', 'en', 'a@a.com', NULL, '$2y$10$kiuDpsxMkAaA1we.GUrSBeabs77i3bRloj2D1fe3z7ivhC9cEzc/a', NULL, '2022-10-21 21:55:38', '2022-10-21 21:55:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `amenitieprojects`
--
ALTER TABLE `amenitieprojects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `developers`
--
ALTER TABLE `developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featurs`
--
ALTER TABLE `featurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transcodes`
--
ALTER TABLE `transcodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `amenitieprojects`
--
ALTER TABLE `amenitieprojects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featurs`
--
ALTER TABLE `featurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transcodes`
--
ALTER TABLE `transcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5966;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
