-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 09:27 AM
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
(6, 2, 33, '2022-10-25 05:36:50', '2022-10-25 05:36:50'),
(11, 1, 25, '2022-11-03 12:05:37', '2022-11-03 12:05:37'),
(12, 2, 25, '2022-11-03 12:05:37', '2022-11-03 12:05:37'),
(13, 1, 34, '2022-11-06 07:10:13', '2022-11-06 07:10:13'),
(14, 2, 34, '2022-11-06 07:10:13', '2022-11-06 07:10:13');

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
(2, 'Al Barsha 1', 2, '2022-10-24 22:05:29', '2022-10-24 22:05:29'),
(3, 'hhhgggghgh', 11, '2022-11-03 12:00:16', '2022-11-03 12:00:16');

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
(8, 'فغ', 'فغ', 'فغ', 'فغغف', 'فغفغغ', 'فغفغف', '1667741971156.webp', '2022-11-06 11:39:32', '2022-11-06 11:39:32'),
(9, 'rt', 'rt', 'trt', 'rt', 'rtrrrrrr', 'rtttttt', '1667742241149.webp', '2022-11-06 11:44:01', '2022-11-06 11:44:01'),
(10, 'rt', 'rt', 'rt', 'rtrt', 'rt', 'rt', '166774244258.webp', '2022-11-06 11:47:22', '2022-11-06 11:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_name`, `flag_img`, `country_code`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', 'AF', NULL, '93', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(2, 'Albania', 'AL', NULL, '355', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(3, 'Algeria', 'DZ', NULL, '213', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(4, 'American Samoa', 'AS', NULL, '1684', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(5, 'Andorra', 'AD', NULL, '376', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(6, 'Angola', 'AO', NULL, '244', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(7, 'Anguilla', 'AI', NULL, '1264', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(8, 'Antarctica', 'AQ', NULL, '0', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(9, 'Antigua And Barbuda', 'AG', NULL, '1268', '2022-10-24 18:22:11', '2022-10-24 18:22:11'),
(10, 'Argentina', 'AR', NULL, '54', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(11, 'Armenia', 'AM', NULL, '374', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(12, 'Aruba', 'AW', NULL, '297', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(13, 'Australia', 'AU', NULL, '61', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(14, 'Austria', 'AT', NULL, '43', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(15, 'Azerbaijan', 'AZ', NULL, '994', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(16, 'Bahamas The', 'BS', NULL, '1242', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(17, 'Bahrain', 'BH', NULL, '973', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(18, 'Bangladesh', 'BD', NULL, '880', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(19, 'Barbados', 'BB', NULL, '1246', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(20, 'Belarus', 'BY', NULL, '375', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(21, 'Belgium', 'BE', NULL, '32', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(22, 'Belize', 'BZ', NULL, '501', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(23, 'Benin', 'BJ', NULL, '229', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(24, 'Bermuda', 'BM', NULL, '1441', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(25, 'Bhutan', 'BT', NULL, '975', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(26, 'Bolivia', 'BO', NULL, '591', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(27, 'Bosnia and Herzegovina', 'BA', NULL, '387', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(28, 'Botswana', 'BW', NULL, '267', '2022-10-24 18:22:12', '2022-10-24 18:22:12'),
(29, 'Bouvet Island', 'BV', NULL, '0', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(30, 'Brazil', 'BR', NULL, '55', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(31, 'British Indian Ocean Territory', 'IO', NULL, '246', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(32, 'Brunei', 'BN', NULL, '673', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(33, 'Bulgaria', 'BG', NULL, '359', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(34, 'Burkina Faso', 'BF', NULL, '226', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(35, 'Burundi', 'BI', NULL, '257', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(36, 'Cambodia', 'KH', NULL, '855', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(37, 'Cameroon', 'CM', NULL, '237', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(38, 'Canada', 'CA', NULL, '1', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(39, 'Cape Verde', 'CV', NULL, '238', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(40, 'Cayman Islands', 'KY', NULL, '1345', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(41, 'Central African Republic', 'CF', NULL, '236', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(42, 'Chad', 'TD', NULL, '235', '2022-10-24 18:22:13', '2022-10-24 18:22:13'),
(43, 'Chile', 'CL', NULL, '56', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(44, 'China', 'CN', NULL, '86', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(45, 'Christmas Island', 'CX', NULL, '61', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(46, 'Cocos (Keeling) Islands', 'CC', NULL, '672', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(47, 'Colombia', 'CO', NULL, '57', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(48, 'Comoros', 'KM', NULL, '269', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(49, 'Cook Islands', 'CK', NULL, '682', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(50, 'Costa Rica', 'CR', NULL, '506', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(51, 'Cote D\'Ivoire (Ivory Coast)', 'CI', NULL, '225', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(52, 'Croatia (Hrvatska)', 'HR', NULL, '385', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(53, 'Cuba', 'CU', NULL, '53', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(54, 'Cyprus', 'CY', NULL, '357', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(55, 'Czech Republic', 'CZ', NULL, '420', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(56, 'Democratic Republic Of The Congo', 'CD', NULL, '243', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(57, 'Denmark', 'DK', NULL, '45', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(58, 'Djibouti', 'DJ', NULL, '253', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(59, 'Dominica', 'DM', NULL, '1767', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(60, 'Dominican Republic', 'DO', NULL, '1809', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(61, 'East Timor', 'TP', NULL, '670', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(62, 'Ecuador', 'EC', NULL, '593', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(63, 'Egypt', 'EG', NULL, '20', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(64, 'El Salvador', 'SV', NULL, '503', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(65, 'Equatorial Guinea', 'GQ', NULL, '240', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(66, 'Eritrea', 'ER', NULL, '291', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(67, 'Estonia', 'EE', NULL, '372', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(68, 'Ethiopia', 'ET', NULL, '251', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(69, 'Falkland Islands', 'FK', NULL, '500', '2022-10-24 18:22:14', '2022-10-24 18:22:14'),
(70, 'Faroe Islands', 'FO', NULL, '298', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(71, 'Fiji Islands', 'FJ', NULL, '679', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(72, 'Finland', 'FI', NULL, '358', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(73, 'France', 'FR', NULL, '33', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(74, 'French Guiana', 'GF', NULL, '594', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(75, 'French Polynesia', 'PF', NULL, '689', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(76, 'French Southern Territories', 'TF', NULL, '0', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(77, 'Gabon', 'GA', NULL, '241', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(78, 'Gambia The', 'GM', NULL, '220', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(79, 'Georgia', 'GE', NULL, '995', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(80, 'Germany', 'DE', NULL, '49', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(81, 'Ghana', 'GH', NULL, '233', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(82, 'Gibraltar', 'GI', NULL, '350', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(83, 'Greece', 'GR', NULL, '30', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(84, 'Greenland', 'GL', NULL, '299', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(85, 'Grenada', 'GD', NULL, '1473', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(86, 'Guadeloupe', 'GP', NULL, '590', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(87, 'Guam', 'GU', NULL, '1671', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(88, 'Guatemala', 'GT', NULL, '502', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(89, 'Guernsey and Alderney', 'XU', NULL, '44', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(90, 'Guinea', 'GN', NULL, '224', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(91, 'Guinea-Bissau', 'GW', NULL, '245', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(92, 'Guyana', 'GY', NULL, '592', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(93, 'Haiti', 'HT', NULL, '509', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(94, 'Heard and McDonald Islands', 'HM', NULL, '0', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(95, 'Honduras', 'HN', NULL, '504', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(96, 'Hong Kong S.A.R.', 'HK', NULL, '852', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(97, 'Hungary', 'HU', NULL, '36', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(98, 'Iceland', 'IS', NULL, '354', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(99, 'India', 'IN', NULL, '91', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(100, 'Indonesia', 'ID', NULL, '62', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(101, 'Iran', 'IR', NULL, '98', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(102, 'Iraq', 'IQ', NULL, '964', '2022-10-24 18:22:15', '2022-10-24 18:22:15'),
(103, 'Ireland', 'IE', NULL, '353', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(104, 'Israel', 'IL', NULL, '972', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(105, 'Italy', 'IT', NULL, '39', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(106, 'Jamaica', 'JM', NULL, '1876', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(107, 'Japan', 'JP', NULL, '81', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(108, 'Jersey', 'XJ', NULL, '44', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(109, 'Jordan', 'JO', NULL, '962', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(110, 'Kazakhstan', 'KZ', NULL, '7', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(111, 'Kenya', 'KE', NULL, '254', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(112, 'Kiribati', 'KI', NULL, '686', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(113, 'Korea North', 'KP', NULL, '850', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(114, 'Korea South', 'KR', NULL, '82', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(115, 'Kuwait', 'KW', NULL, '965', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(116, 'Kyrgyzstan', 'KG', NULL, '996', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(117, 'Laos', 'LA', NULL, '856', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(118, 'Latvia', 'LV', NULL, '371', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(119, 'Lebanon', 'LB', NULL, '961', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(120, 'Lesotho', 'LS', NULL, '266', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(121, 'Liberia', 'LR', NULL, '231', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(122, 'Libya', 'LY', NULL, '218', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(123, 'Liechtenstein', 'LI', NULL, '423', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(124, 'Lithuania', 'LT', NULL, '370', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(125, 'Luxembourg', 'LU', NULL, '352', '2022-10-24 18:22:16', '2022-10-24 18:22:16'),
(126, 'Macau S.A.R.', 'MO', NULL, '853', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(127, 'Macedonia', 'MK', NULL, '389', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(128, 'Madagascar', 'MG', NULL, '261', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(129, 'Malawi', 'MW', NULL, '265', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(130, 'Malaysia', 'MY', NULL, '60', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(131, 'Maldives', 'MV', NULL, '960', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(132, 'Mali', 'ML', NULL, '223', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(133, 'Malta', 'MT', NULL, '356', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(134, 'Man (Isle of)', 'XM', NULL, '44', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(135, 'Marshall Islands', 'MH', NULL, '692', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(136, 'Martinique', 'MQ', NULL, '596', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(137, 'Mauritania', 'MR', NULL, '222', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(138, 'Mauritius', 'MU', NULL, '230', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(139, 'Mayotte', 'YT', NULL, '269', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(140, 'Mexico', 'MX', NULL, '52', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(141, 'Micronesia', 'FM', NULL, '691', '2022-10-24 18:22:17', '2022-10-24 18:22:17'),
(142, 'Moldova', 'MD', NULL, '373', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(143, 'Monaco', 'MC', NULL, '377', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(144, 'Mongolia', 'MN', NULL, '976', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(145, 'Montserrat', 'MS', NULL, '1664', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(146, 'Morocco', 'MA', NULL, '212', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(147, 'Mozambique', 'MZ', NULL, '258', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(148, 'Myanmar', 'MM', NULL, '95', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(149, 'Namibia', 'NA', NULL, '264', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(150, 'Nauru', 'NR', NULL, '674', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(151, 'Nepal', 'NP', NULL, '977', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(152, 'Netherlands Antilles', 'AN', NULL, '599', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(153, 'Netherlands The', 'NL', NULL, '31', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(154, 'New Caledonia', 'NC', NULL, '687', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(155, 'New Zealand', 'NZ', NULL, '64', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(156, 'Nicaragua', 'NI', NULL, '505', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(157, 'Niger', 'NE', NULL, '227', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(158, 'Nigeria', 'NG', NULL, '234', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(159, 'Niue', 'NU', NULL, '683', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(160, 'Norfolk Island', 'NF', NULL, '672', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(161, 'Northern Mariana Islands', 'MP', NULL, '1670', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(162, 'Norway', 'NO', NULL, '47', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(163, 'Oman', 'OM', NULL, '968', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(164, 'Pakistan', 'PK', NULL, '92', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(165, 'Palau', 'PW', NULL, '680', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(166, 'Palestinian Territory Occupied', 'PS', NULL, '970', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(167, 'Panama', 'PA', NULL, '507', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(168, 'Papua new Guinea', 'PG', NULL, '675', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(169, 'Paraguay', 'PY', NULL, '595', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(170, 'Peru', 'PE', NULL, '51', '2022-10-24 18:22:18', '2022-10-24 18:22:18'),
(171, 'Philippines', 'PH', NULL, '63', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(172, 'Pitcairn Island', 'PN', NULL, '0', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(173, 'Poland', 'PL', NULL, '48', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(174, 'Portugal', 'PT', NULL, '351', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(175, 'Puerto Rico', 'PR', NULL, '1787', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(176, 'Qatar', 'QA', NULL, '974', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(177, 'Republic Of The Congo', 'CG', NULL, '242', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(178, 'Reunion', 'RE', NULL, '262', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(179, 'Romania', 'RO', NULL, '40', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(180, 'Russia', 'RU', NULL, '70', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(181, 'Rwanda', 'RW', NULL, '250', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(182, 'Saint Helena', 'SH', NULL, '290', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(183, 'Saint Kitts And Nevis', 'KN', NULL, '1869', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(184, 'Saint Lucia', 'LC', NULL, '1758', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(185, 'Saint Pierre and Miquelon', 'PM', NULL, '508', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(186, 'Saint Vincent And The Grenadines', 'VC', NULL, '1784', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(187, 'Samoa', 'WS', NULL, '684', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(188, 'San Marino', 'SM', NULL, '378', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(189, 'Sao Tome and Principe', 'ST', NULL, '239', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(190, 'Saudi Arabia', 'SA', NULL, '966', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(191, 'Senegal', 'SN', NULL, '221', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(192, 'Serbia', 'RS', NULL, '381', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(193, 'Seychelles', 'SC', NULL, '248', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(194, 'Sierra Leone', 'SL', NULL, '232', '2022-10-24 18:22:19', '2022-10-24 18:22:19'),
(195, 'Singapore', 'SG', NULL, '65', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(196, 'Slovakia', 'SK', NULL, '421', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(197, 'Slovenia', 'SI', NULL, '386', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(198, 'Smaller Territories of the UK', 'XG', NULL, '44', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(199, 'Solomon Islands', 'SB', NULL, '677', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(200, 'Somalia', 'SO', NULL, '252', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(201, 'South Africa', 'ZA', NULL, '27', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(202, 'South Georgia', 'GS', NULL, '0', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(203, 'South Sudan', 'SS', NULL, '211', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(204, 'Spain', 'ES', NULL, '34', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(205, 'Sri Lanka', 'LK', NULL, '94', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(206, 'Sudan', 'SD', NULL, '249', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(207, 'Suriname', 'SR', NULL, '597', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(208, 'Svalbard And Jan Mayen Islands', 'SJ', NULL, '47', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(209, 'Swaziland', 'SZ', NULL, '268', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(210, 'Sweden', 'SE', NULL, '46', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(211, 'Switzerland', 'CH', NULL, '41', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(212, 'Syria', 'SY', NULL, '963', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(213, 'Taiwan', 'TW', NULL, '886', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(214, 'Tajikistan', 'TJ', NULL, '992', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(215, 'Tanzania', 'TZ', NULL, '255', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(216, 'Thailand', 'TH', NULL, '66', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(217, 'Togo', 'TG', NULL, '228', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(218, 'Tokelau', 'TK', NULL, '690', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(219, 'Tonga', 'TO', NULL, '676', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(220, 'Trinidad And Tobago', 'TT', NULL, '1868', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(221, 'Tunisia', 'TN', NULL, '216', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(222, 'Turkey', 'TR', NULL, '90', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(223, 'Turkmenistan', 'TM', NULL, '7370', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(224, 'Turks And Caicos Islands', 'TC', NULL, '1649', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(225, 'Tuvalu', 'TV', NULL, '688', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(226, 'Uganda', 'UG', NULL, '256', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(227, 'Ukraine', 'UA', NULL, '380', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(228, 'United Arab Emirates', 'AE', NULL, '971', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(229, 'United Kingdom', 'GB', NULL, '44', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(230, 'United States', 'US', NULL, '1', '2022-10-24 18:22:20', '2022-10-24 18:22:20'),
(231, 'United States Minor Outlying Islands', 'UM', NULL, '1', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(232, 'Uruguay', 'UY', NULL, '598', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(233, 'Uzbekistan', 'UZ', NULL, '998', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(234, 'Vanuatu', 'VU', NULL, '678', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(235, 'Vatican City State (Holy See)', 'VA', NULL, '39', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(236, 'Venezuela', 'VE', NULL, '58', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(237, 'Vietnam', 'VN', NULL, '84', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(238, 'Virgin Islands (British)', 'VG', NULL, '1284', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(239, 'Virgin Islands (US)', 'VI', NULL, '1340', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(240, 'Wallis And Futuna Islands', 'WF', NULL, '681', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(241, 'Western Sahara', 'EH', NULL, '212', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(242, 'Yemen', 'YE', NULL, '967', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(243, 'Yugoslavia', 'YU', NULL, '38', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(244, 'Zambia', 'ZM', NULL, '260', '2022-10-24 18:22:21', '2022-10-24 18:22:21'),
(245, 'Zimbabwe', 'ZW', NULL, '263', '2022-10-24 18:22:21', '2022-10-24 18:22:21');

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
(15, 'تيست4', '455445', '4545', '166772485092.webp', '4554', 'email@email.com', '2022-11-06 06:54:11', '2022-11-06 07:01:07'),
(16, 'تيست 4', NULL, NULL, '1667725300169.webp', NULL, 'test@test.com', '2022-11-06 07:01:40', '2022-11-06 07:01:40');

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
(3, 'Sharjah', '1666656215180.webp', '2022-10-23 03:39:09', '2022-10-23 03:39:09'),
(4, 'test', '1666923531172.webp', '2022-10-28 00:18:53', '2022-10-28 00:18:53'),
(5, 'ttyty', '1666923670147.webp', '2022-10-28 00:21:10', '2022-10-28 00:21:10'),
(8, 'tyutyu', '166693349286.webp', '2022-10-28 03:04:52', '2022-10-28 03:04:52'),
(9, 'ty', '1666933736139.webp', '2022-10-28 03:09:00', '2022-10-28 03:09:00'),
(10, 'ty', '1666933777102.webp', '2022-10-28 03:09:37', '2022-10-28 03:09:37'),
(11, 'tyty', '166693384179.webp', '2022-10-28 03:10:41', '2022-10-28 03:10:41'),
(13, 'kjjk', '166693392085.webp', '2022-10-28 03:12:03', '2022-10-28 03:12:03'),
(14, 'df', '166693401743.webp', '2022-10-28 03:13:37', '2022-10-28 03:13:37'),
(15, 'fgfgfg', '1666934077131.webp', '2022-10-28 03:14:37', '2022-10-28 03:14:37'),
(16, 'fgfgf', '166693412720.webp', '2022-10-28 03:15:31', '2022-10-28 03:15:31'),
(17, 'rttrtr', '166693426364.webp', '2022-10-28 03:17:43', '2022-10-28 03:17:43'),
(18, 'hghhgghgh', '1667484031107.webp', '2022-11-03 12:00:31', '2022-11-03 12:00:31'),
(19, 'فغغفغف', '166774432179.webp', '2022-11-06 12:18:41', '2022-11-06 12:18:41');

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
(61, 33, 1, '2022-10-25 05:36:48', '2022-10-25 05:36:48'),
(62, 34, 20, '2022-11-06 07:10:11', '2022-11-06 07:10:11'),
(63, 34, 20, '2022-11-06 07:10:11', '2022-11-06 07:10:11'),
(64, 34, 20, '2022-11-06 07:10:11', '2022-11-06 07:10:11'),
(65, 34, 20, '2022-11-06 07:10:11', '2022-11-06 07:10:11'),
(66, 34, 20, '2022-11-06 07:10:11', '2022-11-06 07:10:11');

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
  `plan` text NOT NULL,
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

INSERT INTO `projects` (`id`, `name`, `name_fr`, `name_ar`, `type_id`, `status_id`, `description`, `description_ar`, `description_fr`, `price`, `region_id`, `area_id`, `bedrooms`, `code`, `dev_id`, `pdf`, `plan`, `pay_plan`, `vedio_link`, `rooms`, `bath`, `garage`, `created_at`, `updated_at`) VALUES
(34, 'test 2', 'tetst', 'تيست 1', 7, 3, 'Reeeeeeeeeeee\neeeeeeeeeeeeeees\ndfddddddddd\nddddddddddd\nddddddddd\ndddddddddddddddd\ndddddddddd\nddddddddddddddddddd\nddddddddd\nddddddddddddddddddddddd\ndddd', 'تيسسسسسسسسسسسسسسسسسسس\nسسسسسسسس\nسسسسسسسس\nسسسسسسسسسسسسسسسس\nسسسسسسسسسسسسسس\nسسسسسسسسسسسسس\nسسسسسسسسسسسسسسسس\nسسسسسسسسسسسسس\nسسسسسسسسسسسسسس\nسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسسس', 'Reee\neeeeeeeeeeeeee\neeeeeeeeeesdfddddd\ndddddddddddddddddd\nddddddddddddddddddd\nddddddddddddddddddddd\nddddddddddddddddddddddddd\ndddddddddddddddddddddd', 100, 2, 2, 4, '10', 15, '1667725811.pdf', '', 5, 'https://www.youtube.com/watch?v=gJQWAkZctc0', 4, 4, 4, '2022-11-06 07:10:11', '2022-11-06 07:10:11');

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
(11, '16677258131962.webp', 34, '2022-11-06 07:10:13', '2022-11-06 07:10:13');

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

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value_en` text NOT NULL,
  `value_ar` text DEFAULT NULL,
  `value_fr` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key`, `value_en`, `value_ar`, `value_fr`, `created_at`, `updated_at`) VALUES
(1, 'app_name', 'dfdffdf', 'تيست', 'test', '2022-10-22 18:14:08', '2022-10-26 07:09:57'),
(2, 'goals', 'test english', 'عربي ', '', '2022-10-23 00:26:35', '2022-10-23 00:26:35'),
(3, 'phone', '0104554554', '', '', '2022-10-23 00:29:13', '2022-10-23 00:29:13'),
(4, 'address', 'fgfgfg', '', '', '2022-10-23 00:29:36', '2022-10-23 00:29:36'),
(5, 'email', 'support@findhouses.com', '', '', '2022-10-23 00:29:54', '2022-10-23 00:29:54'),
(6, 'Brief', '\"شركة جيوار العقارية هي شركة مصرية متخصصة في إدارة المشروعات العقارية من حيث التطوير والاستثمار العقاري،\nالتسويق العقاري، الإشراف على أعمال المقاولات والتشطيبات الداخلية وتقديم الاستشارات الادرية والمالية للشركات\nالعقارية\n\"', '', '', '2022-10-23 04:25:51', '2022-10-23 04:25:51'),
(7, 'vision', '\"Selling is the goal of every broker company, it\'s the ultimate goal in advertising campaigns through the page. but, aim to appear in a different way. Provide deep local real estate experience and knowledge to make The client’s experience as frictionless and empowering as possible.\r\nThe brand is raising product and page value, but the most essential features automatically come into the client\'s thoughts.\"', '', '', '2022-10-23 04:26:29', '2022-10-23 04:26:29'),
(8, 'message', 'To be the only one in real estate field and the easiest way to rush your business ', '', '', '2022-10-23 04:26:59', '2022-10-23 04:26:59'),
(9, 'insta', 'https://instagram.com/jiwar__realestate?igshid=YzAyZWRlMzg=', '', '', '2022-10-23 04:27:35', '2022-10-23 04:27:35'),
(10, 'linkedin', 'https://www.linkedin.com/in/jiwar-real-estate-87b33587', '', '', '2022-10-23 04:28:01', '2022-10-23 04:28:01'),
(11, 'facebook', 'https://www.facebook.com/jiwarproperties', '', '', '2022-10-23 04:28:19', '2022-10-23 04:28:19'),
(12, 'site', 'http://jiwarrealestate.com/', '', '', '2022-10-23 04:28:34', '2022-10-23 04:28:34'),
(13, 'whatsapp', '971 50 230 6164', NULL, NULL, '2022-10-23 04:28:54', '2022-10-27 04:19:15'),
(14, 'twitter', 'erer', NULL, NULL, '2022-11-06 09:53:33', '2022-11-06 09:53:33'),
(15, 'youtube', 'tyty', NULL, NULL, '2022-11-06 09:54:08', '2022-11-06 09:54:08');

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
(8, 34, 'test1', '1667725813172.webp', '2022-11-06 07:10:13', '2022-11-06 07:10:13');

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
(5965, 'blogs', 'fr', 'article', 4, 'tr', '2022-10-23 02:45:58', '2022-10-23 02:45:58'),
(5966, 'type', 'ar', 'type', 12, 'يبيب', '2022-11-06 18:49:34', '2022-11-06 18:49:34'),
(5967, 'type', 'fr', 'type', 12, 'يب', '2022-11-06 18:49:34', '2022-11-06 18:49:34');

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
(6, 'villa', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(7, 'townhouse', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(8, 'twin house', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(9, 'penthouse', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(10, 'plot or land', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(11, 'hotel rooms', '2022-10-23 03:35:15', '2022-10-23 03:35:15'),
(12, 'يب', '2022-11-06 18:49:34', '2022-11-06 18:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `country`, `city`, `photo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'trytry', 'admin@admin.com', 'rtyrtyrty', 'Afghanistan', 'gjgjghjgh', '1666694603.webp', NULL, '$2y$10$oLzEgRjuAqqVPeee.6RS1eenBIy.Welsqy7suudkWlUIc70M7iJES', NULL, '2022-10-25 08:43:23', '2022-10-25 08:43:23');

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
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `developers`
--
ALTER TABLE `developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transcodes`
--
ALTER TABLE `transcodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5968;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
