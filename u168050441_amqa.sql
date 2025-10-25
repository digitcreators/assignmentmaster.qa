-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 25, 2025 at 09:26 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u168050441_amqa`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_levels`
--

CREATE TABLE `academic_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_levels`
--

INSERT INTO `academic_levels` (`id`, `name`) VALUES
(1, 'High School'),
(3, 'Master'),
(4, 'Mphil/PhD'),
(2, 'Undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `description` longtext NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Assignment Writing', 'assignment-writing', '2025-03-21 17:27:41', '2025-03-21 17:27:41'),
(2, 'Academic Writing', 'academic-writing', '2025-03-21 17:28:02', '2025-03-21 17:28:02'),
(3, 'Content Writing', 'content-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(4, 'Essay Writing', 'essay-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(5, 'Research Paper', 'research-paper', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(6, 'Admission', 'admission', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(7, 'Jobs', 'jobs', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(8, 'Tips', 'tips', '2025-03-21 16:43:22', '2025-03-21 16:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `country`, `subject`, `phone`, `detail`, `created_at`, `updated_at`) VALUES
(35, 'Rhona Frank', 'ayeshaaa.6000@gmail.com', 'Monaco', 'Magni minim possimus', '+19343566247', 'Quia molestiae anim', '2025-10-01 10:10:27', '2025-10-01 10:10:27'),
(36, 'Carla Dodson', 'ayeshaaa.6000@gmail.com', 'Tunisia', 'Non error et harum a', '+16026059909', 'Eligendi aut fuga O', '2025-10-01 10:12:19', '2025-10-01 10:12:19'),
(37, 'Hamza', 'hamzakarim786@gmail.com', 'Qatar', 'test', '+97450345779', 'test', '2025-10-06 09:13:56', '2025-10-06 09:13:56'),
(38, 'Leslie Gallagher', 'ayeshaaa.6000@gmail.com', 'Micronesia, Federated States of', 'Beatae consectetur s', '+97450345779', 'Consectetur exercita', '2025-10-06 09:20:41', '2025-10-06 09:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and/or Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British lndian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'CA', 'Canada'),
(37, 'KH', 'Cambodia'),
(38, 'CM', 'Cameroon'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'CD', 'Democratic Republic of Congo'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecudaor'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'KW', 'Kuwait'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'LA', 'Lao People\'s Democratic Republic'),
(118, 'LV', 'Latvia'),
(119, 'LB', 'Lebanon'),
(120, 'LS', 'Lesotho'),
(121, 'LR', 'Liberia'),
(122, 'LY', 'Libyan Arab Jamahiriya'),
(123, 'LI', 'Liechtenstein'),
(124, 'LT', 'Lithuania'),
(125, 'LU', 'Luxembourg'),
(126, 'MO', 'Macau'),
(127, 'MK', 'Macedonia'),
(128, 'MG', 'Madagascar'),
(129, 'MW', 'Malawi'),
(130, 'MY', 'Malaysia'),
(131, 'MV', 'Maldives'),
(132, 'ML', 'Mali'),
(133, 'MT', 'Malta'),
(134, 'MH', 'Marshall Islands'),
(135, 'MQ', 'Martinique'),
(136, 'MR', 'Mauritania'),
(137, 'MU', 'Mauritius'),
(138, 'TY', 'Mayotte'),
(139, 'MX', 'Mexico'),
(140, 'FM', 'Micronesia, Federated States of'),
(141, 'MD', 'Moldova, Republic of'),
(142, 'MC', 'Monaco'),
(143, 'MN', 'Mongolia'),
(144, 'MS', 'Montserrat'),
(145, 'MA', 'Morocco'),
(146, 'MZ', 'Mozambique'),
(147, 'MM', 'Myanmar'),
(148, 'NA', 'Namibia'),
(149, 'NR', 'Nauru'),
(150, 'NP', 'Nepal'),
(151, 'NL', 'Netherlands'),
(152, 'AN', 'Netherlands Antilles'),
(153, 'NC', 'New Caledonia'),
(154, 'NZ', 'New Zealand'),
(155, 'NI', 'Nicaragua'),
(156, 'NE', 'Niger'),
(157, 'NG', 'Nigeria'),
(158, 'NU', 'Niue'),
(159, 'NF', 'Norfork Island'),
(160, 'MP', 'Northern Mariana Islands'),
(161, 'NO', 'Norway'),
(162, 'OM', 'Oman'),
(163, 'PK', 'Pakistan'),
(164, 'PW', 'Palau'),
(165, 'PA', 'Panama'),
(166, 'PG', 'Papua New Guinea'),
(167, 'PY', 'Paraguay'),
(168, 'PE', 'Peru'),
(169, 'PH', 'Philippines'),
(170, 'PN', 'Pitcairn'),
(171, 'PL', 'Poland'),
(172, 'PT', 'Portugal'),
(173, 'PR', 'Puerto Rico'),
(174, 'QA', 'Qatar'),
(175, 'SS', 'Republic of South Sudan'),
(176, 'RE', 'Reunion'),
(177, 'RO', 'Romania'),
(178, 'RU', 'Russian Federation'),
(179, 'RW', 'Rwanda'),
(180, 'KN', 'Saint Kitts and Nevis'),
(181, 'LC', 'Saint Lucia'),
(182, 'VC', 'Saint Vincent and the Grenadines'),
(183, 'WS', 'Samoa'),
(184, 'SM', 'San Marino'),
(185, 'ST', 'Sao Tome and Principe'),
(186, 'SA', 'Saudi Arabia'),
(187, 'SN', 'Senegal'),
(188, 'RS', 'Serbia'),
(189, 'SC', 'Seychelles'),
(190, 'SL', 'Sierra Leone'),
(191, 'SG', 'Singapore'),
(192, 'SK', 'Slovakia'),
(193, 'SI', 'Slovenia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SO', 'Somalia'),
(196, 'ZA', 'South Africa'),
(197, 'GS', 'South Georgia South Sandwich Islands'),
(198, 'ES', 'Spain'),
(199, 'LK', 'Sri Lanka'),
(200, 'SH', 'St. Helena'),
(201, 'PM', 'St. Pierre and Miquelon'),
(202, 'SD', 'Sudan'),
(203, 'SR', 'Suriname'),
(204, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(205, 'SZ', 'Swaziland'),
(206, 'SE', 'Sweden'),
(207, 'CH', 'Switzerland'),
(208, 'SY', 'Syrian Arab Republic'),
(209, 'TW', 'Taiwan'),
(210, 'TJ', 'Tajikistan'),
(211, 'TZ', 'Tanzania, United Republic of'),
(212, 'TH', 'Thailand'),
(213, 'TG', 'Togo'),
(214, 'TK', 'Tokelau'),
(215, 'TO', 'Tonga'),
(216, 'TT', 'Trinidad and Tobago'),
(217, 'TN', 'Tunisia'),
(218, 'TR', 'Turkey'),
(219, 'TM', 'Turkmenistan'),
(220, 'TC', 'Turks and Caicos Islands'),
(221, 'TV', 'Tuvalu'),
(222, 'UG', 'Uganda'),
(223, 'UA', 'Ukraine'),
(224, 'AE', 'United Arab Emirates'),
(225, 'GB', 'United Kingdom'),
(226, 'US', 'United States'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `deadlines`
--

CREATE TABLE `deadlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deadlines`
--

INSERT INTO `deadlines` (`id`, `name`) VALUES
(3, '10 Days'),
(11, '12 Hours'),
(2, '15 Days '),
(9, '2 Days'),
(1, '20 Days +'),
(10, '24 Hours'),
(8, '3 Days'),
(7, '4 Days'),
(6, '5 Days'),
(5, '6 Days'),
(12, '6 Hours'),
(4, '7 Days');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_level_id` int(10) UNSIGNED NOT NULL,
  `deadline_id` int(10) UNSIGNED NOT NULL,
  `per_page_price` double(6,2) NOT NULL,
  `per_slide_price` double(6,2) NOT NULL,
  `per_poster_price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fares`
--

INSERT INTO `fares` (`id`, `academic_level_id`, `deadline_id`, `per_page_price`, `per_slide_price`, `per_poster_price`) VALUES
(1, 1, 1, 30.00, 30.00, 75.00),
(3, 1, 3, 45.00, 45.00, 113.00),
(4, 1, 4, 50.00, 50.00, 125.00),
(5, 1, 5, 55.00, 55.00, 138.00),
(6, 1, 6, 60.00, 60.00, 150.00),
(7, 1, 7, 65.00, 65.00, 163.00),
(8, 1, 8, 70.00, 70.00, 175.00),
(9, 1, 9, 85.00, 85.00, 213.00),
(10, 1, 10, 105.00, 105.00, 263.00),
(11, 1, 11, 145.00, 145.00, 363.00),
(12, 2, 1, 40.00, 40.00, 100.00),
(14, 2, 3, 55.00, 55.00, 138.00),
(15, 2, 4, 60.00, 60.00, 150.00),
(16, 2, 5, 65.00, 65.00, 163.00),
(17, 2, 6, 70.00, 70.00, 175.00),
(18, 2, 7, 75.00, 75.00, 188.00),
(19, 2, 8, 85.00, 85.00, 213.00),
(20, 2, 9, 105.00, 105.00, 263.00),
(21, 2, 10, 115.00, 115.00, 288.00),
(22, 2, 11, 155.00, 155.00, 388.00),
(23, 3, 1, 50.00, 50.00, 125.00),
(25, 3, 3, 65.00, 65.00, 163.00),
(26, 3, 4, 70.00, 70.00, 175.00),
(27, 3, 5, 75.00, 75.00, 188.00),
(28, 3, 6, 80.00, 80.00, 200.00),
(29, 3, 7, 85.00, 85.00, 213.00),
(30, 3, 8, 95.00, 95.00, 238.00),
(31, 3, 9, 115.00, 115.00, 288.00),
(32, 3, 10, 125.00, 125.00, 313.00),
(33, 3, 11, 165.00, 165.00, 413.00),
(34, 4, 1, 60.00, 60.00, 150.00),
(36, 4, 3, 75.00, 75.00, 188.00),
(37, 4, 4, 80.00, 80.00, 200.00),
(38, 4, 5, 85.00, 85.00, 213.00),
(39, 4, 6, 90.00, 90.00, 225.00),
(40, 4, 7, 95.00, 95.00, 238.00),
(41, 4, 8, 105.00, 105.00, 263.00),
(42, 4, 9, 125.00, 125.00, 313.00),
(43, 4, 10, 135.00, 135.00, 338.00),
(44, 4, 11, 175.00, 175.00, 438.00),
(45, 1, 12, 165.00, 165.00, 413.00),
(46, 2, 12, 175.00, 175.00, 438.00),
(47, 3, 12, 185.00, 185.00, 463.00),
(48, 4, 12, 195.00, 195.00, 488.00),
(49, 2, 1, 40.00, 40.00, 100.00),
(50, 3, 1, 50.00, 50.00, 125.00),
(51, 4, 1, 60.00, 60.00, 150.00),
(52, 1, 2, 35.00, 35.00, 88.00),
(53, 2, 2, 45.00, 45.00, 113.00),
(54, 3, 2, 55.00, 55.00, 138.00),
(55, 4, 2, 65.00, 65.00, 163.00);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `order_id`, `file_path`) VALUES
(9, 88, 'uploads/68e388aa02c27_1759742122_Assignment Help UK - Backlinks & Keywords.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` varchar(255) NOT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'QAR',
  `stripe_id` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `auto_mail` int(11) NOT NULL DEFAULT 0,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 4,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `ref_no`, `gateway`, `currency`, `stripe_id`, `amount`, `auto_mail`, `status_id`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(78, '3971059d-8b2d-4a0b-bc5f-284ee330afe2', 'stripe', 'QAR', NULL, 32590, 0, 4, 45, 80, '2025-10-01 10:13:41', '2025-10-01 10:13:41'),
(79, '77bc9fac-487d-480b-97a3-9790c1905728', 'stripe', 'QAR', NULL, 20680, 0, 4, 46, 81, '2025-10-01 10:15:55', '2025-10-01 10:15:55'),
(80, 'ab475d95-52af-46e1-bd8c-5057539fdf88', 'stripe', 'QAR', NULL, 20080, 0, 4, 45, 82, '2025-10-01 10:21:31', '2025-10-01 10:21:31'),
(81, 'd863c362-90fa-4d71-9635-d42f7ab6bb50', 'stripe', 'QAR', NULL, 13020, 0, 4, 45, 83, '2025-10-01 10:25:54', '2025-10-01 10:25:54'),
(82, '661df94f-ab3b-475b-9c13-a8334267ae87', 'stripe', 'QAR', NULL, 25875, 0, 4, 45, 84, '2025-10-01 10:32:47', '2025-10-01 10:32:47'),
(83, '2e483f23-845c-43ca-ae4f-18b2e0bb0056', 'stripe', 'QAR', NULL, 193, 0, 4, 45, 85, '2025-10-03 08:57:55', '2025-10-03 08:57:55'),
(84, '42efa693-5cdf-454d-aa50-ad6df739899d', 'stripe', 'QAR', NULL, 21120, 0, 4, 45, 86, '2025-10-04 10:16:26', '2025-10-04 10:16:26'),
(85, 'e28f0148-f839-46d9-8fb3-aebe767e7fd9', 'stripe', 'QAR', NULL, 20223, 0, 4, 45, 87, '2025-10-04 10:32:49', '2025-10-04 10:32:49'),
(86, '611577a0-5c5f-4c27-a68f-bf38d741bbfa', 'stripe', 'QAR', NULL, 240, 0, 4, 37, 88, '2025-10-06 09:15:22', '2025-10-06 09:15:22'),
(87, 'bfee4b50-3def-446d-8ff6-0cfd198cb7c8', 'stripe', 'QAR', NULL, 8050, 0, 4, 45, 89, '2025-10-06 09:19:05', '2025-10-06 09:19:05'),
(88, 'de70d4f5-6291-4618-b85a-cf33c05aeef6', 'stripe', 'QAR', NULL, 21914, 0, 5, 45, 90, '2025-10-13 10:16:52', '2025-10-13 10:17:28'),
(89, 'fa691505-e105-43cd-ac07-f7a4adaf055c', 'stripe', 'QAR', NULL, 2945, 0, 4, 41, 91, '2025-10-13 11:19:05', '2025-10-13 11:19:05'),
(90, '2cc2324f-a662-453c-9264-04072d9ac5c5', 'stripe', 'QAR', NULL, 735, 0, 4, 41, 92, '2025-10-21 10:44:02', '2025-10-21 10:44:02');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_11_104107_create_statuses_table', 1),
(4, '2022_05_24_000001_create_permissions_table', 1),
(5, '2022_05_24_000002_create_roles_table', 1),
(6, '2022_05_24_000003_create_users_table', 1),
(7, '2022_05_24_000004_create_permission_role_pivot_table', 1),
(8, '2022_05_24_000005_create_role_user_pivot_table', 1),
(9, '2022_06_08_085252_create_web_settings_table', 1),
(10, '2022_06_09_072430_create_services_table', 1),
(11, '2022_06_09_103559_create_blogs_table', 1),
(12, '2022_06_11_081924_create_contacts_table', 1),
(13, '2022_06_13_085818_create_paper_types_table', 1),
(14, '2022_06_13_100951_create_academic_levels_table', 1),
(15, '2022_06_13_103131_create_deadlines_table', 1),
(16, '2022_06_13_111450_create_fares_table', 1),
(17, '2022_06_15_085659_create_subjects_table', 1),
(18, '2022_06_15_093044_create_refrence_styles_table', 1),
(19, '2022_06_15_101945_create_countries_table', 1),
(20, '2022_06_20_093634_create_orders_table', 1),
(21, '2022_06_20_093817_create_files_table', 1),
(22, '2023_01_13_094552_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `paper_type` varchar(255) NOT NULL,
  `paper_topic` text NOT NULL,
  `academic_level` varchar(255) NOT NULL,
  `number_of_pages` varchar(255) NOT NULL,
  `no_of_slides` int(11) NOT NULL DEFAULT 0,
  `no_of_posters` int(11) NOT NULL DEFAULT 0,
  `reference_style` varchar(255) NOT NULL,
  `no_of_references` int(11) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT 0,
  `cost_per_page` int(11) NOT NULL,
  `cost_per_slide` varchar(255) NOT NULL,
  `cost_per_poster` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL,
  `academic_level_id` int(11) DEFAULT NULL,
  `deadline_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `country`, `subject`, `paper_type`, `paper_topic`, `academic_level`, `number_of_pages`, `no_of_slides`, `no_of_posters`, `reference_style`, `no_of_references`, `deadline`, `detail`, `is_complete`, `cost_per_page`, `cost_per_slide`, `cost_per_poster`, `total_price`, `academic_level_id`, `deadline_id`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(80, 'Ginger Mccall', 'ayeshaaa.6000@gmail.com', '+15188217966', 'Jamaica', 'IT Management', 'Assignment', 'Dolorem commodo eu c', 'Master', '49 Pages - 12250 Words', 0, 0, 'Chicago', 15, '24 Hours', 'Sequi proident haru', 0, 130, '130', '280', 32590, 3, 10, 45, 1, '2025-10-01 10:13:41', '2025-10-01 10:13:41'),
(81, 'Oprah Stanley', 'hunuwuhyf@mailinator.com', '+97450345779', 'Czech Republic', 'Case Study', 'Term Paper', 'In provident autem', 'Undergraduate', '97 Pages - 24250 Words', 0, 0, 'Harvard', 5, '12 Hours', 'Quo et id rem labor', 0, 140, '140', '300', 20680, 2, 11, 46, 1, '2025-10-01 10:15:55', '2025-10-01 10:15:55'),
(82, 'Edan Clements', 'ayeshaaa.6000@gmail.com', '+97450345779', 'Turkmenistan', 'Communication Strategies', 'Course Work', 'Eos pariatur Cillum', 'Undergraduate', '79 Pages - 19750 Words', 0, 0, 'Turabian', 1, '5 Days', 'Nihil explicabo Eu', 0, 80, '80', '200', 20080, 2, 6, 45, 1, '2025-10-01 10:21:31', '2025-10-01 10:21:31'),
(83, 'Leila Madden', 'ayeshaaa.6000@gmail.com', '+12694133616', 'Lesotho', 'East European Studies', 'Thesis', 'Aspernatur odio id a', 'Undergraduate', '45 Pages - 11250 Words', 0, 0, 'Oxford', 6, '3 Days', 'Provident delectus', 0, 90, '90', '240', 13020, 2, 8, 45, 1, '2025-10-01 10:25:54', '2025-10-01 10:25:54'),
(84, 'Gretchen Burt', 'ayeshaaa.6000@gmail.com', '+19193371537', 'Barbados', 'Physics', 'Essay', 'Aut nihil assumenda', 'High School', '25 Pages - 6250 Words', 0, 0, 'Oxford', 2, '5 Days', 'Praesentium in labor', 0, 75, '75', '200', 25875, 1, 6, 45, 1, '2025-10-01 10:32:47', '2025-10-01 10:32:47'),
(85, 'Axel Whitaker', 'ayeshaaa.6000@gmail.com', '+15044368311', 'Gabon', 'Latin-American Studies', 'Research Paper', 'Qui consequat Quae', 'High School', '2 Pages - 500 Words', 0, 0, 'Turabian', 1, '15 Days', 'In sit et consectet', 0, 35, '35', '88', 193, 1, 2, 45, 1, '2025-10-03 08:57:55', '2025-10-03 08:57:55'),
(86, 'Athena Wolfe', 'ayeshaaa.6000@gmail.com', '+13144957491', 'Portugal', 'Design Analysis', 'Other', 'Fuga Et sunt adipi', 'Mphil/PhD', '74 Pages - 18500 Words', 0, 0, 'Turabian', 10, '20 Days +', 'Non impedit incidid', 0, 60, '60', '150', 21120, 4, 1, 45, 1, '2025-10-04 10:16:26', '2025-10-04 10:16:26'),
(87, 'Gwendolyn Lynn', 'ayeshaaa.6000@gmail.com', '+97450345779', 'Papua New Guinea', 'Linguistics', 'Book Report', 'Ut voluptas tenetur', 'High School', '56 Pages - 14000 Words', 0, 0, 'Vancouver', 8, '2 Days', 'Rerum qui hic sit q', 0, 85, '85', '213', 20223, 1, 9, 45, 1, '2025-10-04 10:32:49', '2025-10-04 10:32:49'),
(88, 'Hamza', 'hamzakarim786@gmail.com', '+97450345779', 'Qatar', 'Accounting', 'Book Report', 'test', 'High School', '1 Pages - 250 Words', 0, 0, 'APA', 18, '20 Days +', 'test', 0, 30, '30', '75', 240, 1, 1, 37, 1, '2025-10-06 09:15:21', '2025-10-06 09:15:21'),
(89, 'Burke Medina', 'ayeshaaa.6000@gmail.com', '+97450345779', 'Germany', 'History', 'Research Paper', 'Vel dolor nostrud ad', 'Master', '55 Pages - 13750 Words', 0, 0, 'Chicago', 4, '20 Days +', 'Aliquid eu eum commo', 0, 50, '50', '125', 8050, 3, 1, 45, 1, '2025-10-06 09:19:05', '2025-10-06 09:19:05'),
(90, 'Nelle Craft', 'ayeshaaa.6000@gmail.com', '+97450345779', 'Guatemala', 'Native-American Studies', 'Research Paper', 'Tempora quis irure e', 'Undergraduate', '36 Pages - 9000 Words', 0, 0, 'Other', 16, '6 Days', 'Rerum provident off', 0, 65, '65', '163', 21914, 2, 5, 45, 1, '2025-10-13 10:16:52', '2025-10-13 10:16:52'),
(91, 'riffat mushtaq', 'Mahik6061@gmail.com', '+15487084611', 'Puerto Rico', 'Creative Writing', 'Essay', 'Notification check', 'Undergraduate', '19 Pages - 4750 Words', 0, 0, 'CBE', 19, '12 Hours', 'scdas', 0, 155, '155', '388', 2945, 2, 11, 41, 1, '2025-10-13 11:19:05', '2025-10-13 11:19:05'),
(92, 'riffat mushtaq', 'Mahik6061@gmail.com', '+447403663991', 'Reunion', 'Case Study', 'Book Report', 'Notification check', 'High School', '20 Pages - 5000 Words', 0, 0, 'APA', 17, '15 Days', 'dc', 0, 35, '35', '88', 735, 1, 2, 41, 1, '2025-10-21 10:44:02', '2025-10-21 10:44:02');

-- --------------------------------------------------------

--
-- Table structure for table `paper_types`
--

CREATE TABLE `paper_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_types`
--

INSERT INTO `paper_types` (`id`, `name`) VALUES
(11, 'Assignment'),
(2, 'Book Report'),
(7, 'Course Work'),
(6, 'Dissertation'),
(10, 'Dissertation Proposal'),
(1, 'Essay'),
(12, 'Other'),
(3, 'Research Paper'),
(9, 'Research Proposal'),
(4, 'Term Paper'),
(5, 'Thesis'),
(8, 'Thesis Proposal');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dc.usmankhaliq@gmail.com', '$2y$10$CK0wYFzdECuaHCSkpomS7uUa.t6Bn3vzDbxx4JyXKSqGQIxcvbUvG', '2023-01-17 16:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `refrence_styles`
--

CREATE TABLE `refrence_styles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refrence_styles`
--

INSERT INTO `refrence_styles` (`id`, `name`, `active`) VALUES
(1, 'APA', 1),
(2, 'MLA', 1),
(3, 'Chicago', 1),
(4, 'Turabian', 1),
(5, 'Harvard', 1),
(6, 'Oxford', 1),
(7, 'Vancouver', 1),
(8, 'CBE', 1),
(9, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(31, 2),
(32, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `for` varchar(255) NOT NULL,
  `css_class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `slug`, `for`, `css_class`) VALUES
(1, 'Pending', 'pending', 'order', 'badge-warning'),
(2, 'In Progress', 'in-progress', 'order', 'badge-info'),
(3, 'Completed', 'completed', 'order', 'badge-success'),
(4, 'Unpaid', 'unpaid', 'invoice', 'badge-warning'),
(5, 'Paid', 'paid', 'invoice', 'badge-success');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `active`) VALUES
(1, 'Art', 1),
(2, 'Architecture', 1),
(3, 'Dance', 1),
(4, 'Design Analysis', 1),
(5, 'Drama', 1),
(6, 'Movies', 1),
(7, 'Music', 1),
(8, 'Paintings', 1),
(9, 'Theatre', 1),
(10, 'Biology', 1),
(11, 'Chemistry', 1),
(12, 'Communication and Media', 1),
(13, 'Advertising', 1),
(14, 'Communication Strategies', 1),
(15, 'Journalism', 1),
(16, 'Public Relations', 1),
(17, 'Creative Writing', 1),
(18, 'Economics', 1),
(19, 'Accounting', 1),
(20, 'Case Study', 1),
(21, 'Company Analysis', 1),
(22, 'E-Commerce', 1),
(23, 'Finance', 1),
(24, 'Logistics', 1),
(25, 'Trade', 1),
(26, 'Education', 1),
(27, 'Application Essay', 1),
(28, 'Education Theories', 1),
(29, 'Pedogogy', 1),
(30, 'Teacher\'s Career', 1),
(31, 'Engineering', 1),
(32, 'English', 1),
(33, 'Ethics', 1),
(34, 'History', 1),
(35, 'African-American Studies', 1),
(36, 'American History', 1),
(37, 'Asian Studis', 1),
(38, 'Canadian Studies', 1),
(39, 'East European Studies', 1),
(40, 'Holocaust', 1),
(41, 'Latin-American Studies', 1),
(42, 'Native-American Studies', 1),
(43, 'West European Studies', 1),
(44, 'Law', 1),
(45, 'Criminology', 1),
(46, 'Legal Issues', 1),
(47, 'Linguistics', 1),
(48, 'Literature', 1),
(49, 'American Literature', 1),
(50, 'Antique Literature', 1),
(51, 'Asian Literature', 1),
(52, 'English Literature', 1),
(53, 'Shakespeare Studies', 1),
(54, 'Management', 1),
(55, 'Marketing', 1),
(56, 'Mathematics', 1),
(57, 'Medicine and Health', 1),
(58, 'Alternative Medicine', 1),
(59, 'Healthcare', 1),
(60, 'Nursing', 1),
(61, 'Nurtition', 1),
(62, 'Pharmacology', 1),
(63, 'Sport', 1),
(64, 'Nature', 1),
(65, 'Agricultural Studies', 1),
(66, 'Anthropology', 1),
(67, 'Astronomy', 1),
(68, 'Environmental Issues', 1),
(69, 'Geography', 1),
(70, 'Geology', 1),
(71, 'Philosophy', 1),
(72, 'Physics', 1),
(73, 'Political Science', 1),
(74, 'Psychology', 1),
(75, 'Religion and Theology', 1),
(76, 'Sociology', 1),
(77, 'Technology', 1),
(78, 'Aeronautics', 1),
(79, 'Aviation', 1),
(80, 'Computer Science', 1),
(81, 'Internet', 1),
(82, 'IT Management', 1),
(83, 'Web Design', 1),
(84, 'Toursim', 1),
(85, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Assignment', NULL, NULL),
(2, 'Thesis', NULL, NULL),
(3, 'Writing', NULL, NULL),
(4, 'Essay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `state`, `zip_code`, `city`, `country`, `email_verified_at`, `password`, `provider_id`, `provider_name`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'info@assignmentmaster.qa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$SA3MQioa134ZwTjtlRnh.OrOxUktlgEO1dTYBqE58T.IE5EHffFee', NULL, NULL, 'c3AqdKa9i4y5ySOKO76n6KDXhYhqy6RdI4cQjDClbZ59rSAjPeISqut88vmo', NULL, NULL, NULL),
(31, 'Vincent Lowery', 'umehanihammad@gmail.com', '+14153742823', NULL, NULL, NULL, NULL, 'Jordan', NULL, '$2y$10$dbpxbHtFbbsVRyOOLN6Azu6h/dlrNjhrXPMBGu1PtTJpfKxkl94Li', NULL, NULL, 'W2H2QglWStMn0j9QiHaRR2hoRvMiTDImNk5KlvU78GD0PvXrBXjcoBkk34fD', '2025-03-20 07:17:36', '2025-03-20 07:17:36', NULL),
(32, 'Riffat', 'asmatmushtaq949@gmail.com', '+441158881209', NULL, NULL, NULL, NULL, 'Bahrain', NULL, '$2y$10$H8m.C2.TkocvR.XG3ZVStem1QbSjRL/KPvQN4p.nAnU1rk4tOEZXW', NULL, NULL, NULL, '2025-03-29 08:38:37', '2025-03-29 08:38:37', NULL),
(36, 'Venus Hensley', 'vozymuwyro@mailinator.com', '+18126021226', NULL, NULL, NULL, NULL, 'Belarus', NULL, '$2y$10$JQnfKTrV5Q0bTUKa0bcnJePyWXhBZdl2nQB.wCYIvsY61ajaSXq0y', NULL, NULL, NULL, '2025-04-07 14:02:19', '2025-04-07 14:02:19', NULL),
(37, 'Hamza', 'hamzakarim786@gmail.com', '+443413096652', NULL, NULL, NULL, NULL, 'Pakistan', NULL, '$2y$10$TmP58FmY420bgPisHPWydeVXZRuFCsjYNodETrF.WaNElK3uJpfWy', NULL, NULL, 'ISTxJVJtwmJdYFMxK2MhA302IPGYQN9ffDx7PiS71Lsqm3UeT8J7ukPjG50b', '2025-04-08 11:29:18', '2025-04-08 11:35:49', NULL),
(38, 'Hamza', 'digitcreators@gmail.com', '+443413096652', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$N4ZYkFHyjcfYJKbhuG3eK.nSMl/9YHElhBY4COcJ0Rtn6uzsyJJSm', NULL, NULL, NULL, '2025-04-08 11:37:43', '2025-04-08 11:37:43', NULL),
(39, 'Hoyt Wolf', 'gupiqaba@mailinator.com', '+441158881209', NULL, NULL, NULL, NULL, 'American Samoa', NULL, '$2y$10$FzJly.eSugn7OakXqGgFL.hhr1xDesaPnA3Wmxn6RskCyS7rDpvTu', NULL, NULL, NULL, '2025-04-08 13:52:03', '2025-04-08 13:52:03', NULL),
(40, 'Priscilla Moss', 'vyzew@mailinator.com', '+441158881209', NULL, NULL, NULL, NULL, 'Saint Vincent and the Grenadines', NULL, '$2y$10$tTPSfUfWqYnSf72GhDQHYOOQZ4kgBosrj7Ga7.yOjcj9BBytZxdd2', NULL, NULL, NULL, '2025-04-08 13:58:41', '2025-04-08 13:58:41', NULL),
(41, 'Riffat', 'mahik6061@gmail.com', '+601119890389', NULL, NULL, NULL, NULL, 'Bangladesh', NULL, '$2y$10$WZTWOutJuj0t5xpOUAz0R.M6sTJFxYuRqv9GjF5EZTS2QdHYyaNb6', NULL, NULL, NULL, '2025-04-14 09:04:52', '2025-04-14 09:04:52', NULL),
(42, 'RIFFAT PAGAL', 'dckiran97@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'United Kingdom', NULL, '$2y$10$lyiQbmZuRn7j8DJmGA.Sze9wAAYCdYCjpF7qqRGb3EDLTRl.PRvOm', NULL, NULL, NULL, '2025-06-11 10:57:44', '2025-06-11 10:57:44', NULL),
(43, 'Neve Sanders', 'mahwishali.kingdomvision@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'Bolivia', NULL, '$2y$10$NJnzGZnPOezf.f.FHy8vQO1/0JqrCpPBC9iniV6CY4Tc8zTvUiInm', NULL, NULL, NULL, '2025-06-14 11:05:11', '2025-06-14 11:05:11', NULL),
(44, 'Aline Dickerson', 'fexu@mailinator.com', '+447403663991', NULL, NULL, NULL, NULL, 'Lebanon', NULL, '$2y$10$YTEq2B62fe39EXCMv/JopuryfENsd8ejP.R/H0jy7xPdcX.hp7LQ.', NULL, NULL, NULL, '2025-08-27 08:16:25', '2025-08-27 08:16:25', NULL),
(45, 'Nehru Robertson', 'ayeshaaa.6000@gmail.com', '+97450345779', NULL, NULL, NULL, NULL, 'Suriname', NULL, '$2y$10$Mr54Or4vqjcce82kBKr7gO5U3GKayzYOpVQT4T5x/ob0fRLtGVtgu', NULL, NULL, NULL, '2025-10-01 06:43:25', '2025-10-01 06:43:25', NULL),
(46, 'Oprah Stanley', 'hunuwuhyf@mailinator.com', '+97450345779', NULL, NULL, NULL, NULL, 'Czech Republic', NULL, '$2y$10$gZWN/3BtNdIZM7k0w9CNH.cdQ/SMcIrgLf/ipoT6XxRG/YW7xDk/S', NULL, NULL, NULL, '2025-10-01 10:15:55', '2025-10-01 10:15:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `is_blogs_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_services_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_index` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `name`, `email`, `contact`, `address`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `whatsapp_no`, `is_blogs_offers`, `is_services_offers`, `is_index`) VALUES
(1, 'assignmentmasterqa', 'info@assignmentmaster.qa', '97450345779', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio dicta voluptate necessitatibus, error autem tenetur fuga eveniet maxime facilis quo aperiam hic, beatae ullam. Iusto, dolorum doloribus. Sed, cum.', 'https://www.facebook.com/assignmentmasterqatar/', 'https://www.instagram.com/assignmentmasterqatar/', 'https://www.pinterest.com/assignmenthelpukcouk/', 'null', 'https://api.whatsapp.com/send?phone=971555947610', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academic_levels_name_unique` (`name`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_academic_level_id_foreign` (`category_id`);

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
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `deadlines`
--
ALTER TABLE `deadlines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deadlines_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fares_academic_level_id_foreign` (`academic_level_id`),
  ADD KEY `fares_deadline_id_foreign` (`deadline_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_order_id_foreign` (`order_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_ref_no_unique` (`ref_no`),
  ADD KEY `invoices_status_id_foreign` (`status_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`);

--
-- Indexes for table `paper_types`
--
ALTER TABLE `paper_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paper_types_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6657804` (`role_id`),
  ADD KEY `permission_id_fk_6657804` (`permission_id`);

--
-- Indexes for table `refrence_styles`
--
ALTER TABLE `refrence_styles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refrence_styles_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6657813` (`user_id`),
  ADD KEY `role_id_fk_6657813` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`),
  ADD UNIQUE KEY `statuses_slug_unique` (`slug`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `academic_levels`
--
ALTER TABLE `academic_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `deadlines`
--
ALTER TABLE `deadlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `paper_types`
--
ALTER TABLE `paper_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `refrence_styles`
--
ALTER TABLE `refrence_styles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_academic_level_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `fares`
--
ALTER TABLE `fares`
  ADD CONSTRAINT `fares_academic_level_id_foreign` FOREIGN KEY (`academic_level_id`) REFERENCES `academic_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fares_deadline_id_foreign` FOREIGN KEY (`deadline_id`) REFERENCES `deadlines` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_6657804` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_6657804` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_6657813` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_6657813` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
