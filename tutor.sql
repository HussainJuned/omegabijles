-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2018 at 06:23 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hasan Al banna', 'emrul7427@gmail.com', '$2y$10$BjVx1X8NzTpCweWqREsoGezlX24xwz5Vc4Qc53NckgmJajRxdiUrm', 'N25xiNvrD2N3M1bxffUgGcICFEhM3grpuHWGTIK5JlWfHxCrVIJY4CtLoDk5', '2017-03-25 09:04:44', '2018-04-21 08:35:07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `coursesnames`
-- (See below for the actual view)
--
CREATE TABLE `coursesnames` (
`user_id` int(11)
,`classes` varchar(20)
,`coursename` text
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postcode`
--

CREATE TABLE `postcode` (
  `id` int(11) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postcode`
--

INSERT INTO `postcode` (`id`, `postcode`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(2, '1011 AA', '52.3811146', '4.898726899999929', '2018-05-17 12:22:17', '2018-05-17 12:22:17'),
(3, '1001', '52.374', '4.8897', '2018-05-17 12:22:17', '2018-05-17 12:22:17'),
(5, '3100', '31.335005', '-92.422378', '2018-05-17 12:22:17', '2018-05-17 12:22:17'),
(6, '1981EH', '52.4552223', '4.6407878', '2018-07-13 13:40:35', '2018-07-13 13:40:35'),
(7, '1940', '39.9827712', '-75.1562449', '2018-07-13 14:20:58', '2018-07-13 14:20:58'),
(8, '1971', '36.1025111', '-95.9108845', '2018-07-13 14:23:15', '2018-07-13 14:23:15'),
(9, '1981bz', '52.4625551', '4.6320855', '2018-07-13 14:48:49', '2018-07-13 14:48:49');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tutoravgrating`
-- (See below for the actual view)
--
CREATE TABLE `tutoravgrating` (
`user_id` int(11)
,`totalrating` bigint(21)
,`avgrating` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Table structure for table `tutorcourse`
--

CREATE TABLE `tutorcourse` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `classes` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorcourse`
--

INSERT INTO `tutorcourse` (`id`, `user_id`, `coursename`, `classes`, `created_at`, `updated_at`) VALUES
(9, 16, 'Wiskunde A', '2,3,4', '2018-03-31 12:52:08', '2018-03-31 12:52:08'),
(10, 16, 'Filosofie', '2,3,4', '2018-03-31 12:52:08', '2018-03-31 12:52:08'),
(13, 18, 'Wiskunde A', '1,2,3', '2018-04-01 10:50:38', '2018-04-01 10:50:38'),
(19, 17, 'Wiskunde B', '1,3,4,5,6', '2018-04-28 08:14:21', '2018-04-28 08:14:21'),
(20, 17, 'Engels', '1,2,3,4', '2018-04-28 08:14:21', '2018-04-28 08:14:21'),
(21, 17, 'Filosofie', '2,3,4', '2018-04-28 08:14:21', '2018-04-28 08:14:21'),
(22, 20, 'Wiskunde A', '1,2,4', '2018-05-17 12:17:04', '2018-05-17 12:17:04'),
(23, 20, 'Wiskunde B', '1,2,3', '2018-05-17 12:17:04', '2018-05-17 12:17:04'),
(24, 21, 'Wiskunde A', '1,2,3', '2018-05-17 12:22:18', '2018-05-17 12:22:18'),
(25, 21, 'Wiskunde B', '3,4,5', '2018-05-17 12:22:18', '2018-05-17 12:22:18'),
(26, 22, 'Wiskunde A', '1,2,3', '2018-05-17 12:23:51', '2018-05-17 12:23:51'),
(27, 22, 'Wiskunde B', '4,5,6', '2018-05-17 12:23:51', '2018-05-17 12:23:51'),
(28, 23, 'Wiskunde A', '5,6', '2018-05-18 14:13:39', '2018-05-18 14:13:39'),
(29, 23, 'Wiskunde B', '4,5,6', '2018-05-18 14:13:39', '2018-05-18 14:13:39'),
(30, 24, 'Wiskunde A', '3,4,5', '2018-07-13 14:19:48', '2018-07-13 14:19:48'),
(31, 24, 'Wiskunde B', '3,4,5', '2018-07-13 14:19:48', '2018-07-13 14:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `tutorexperience`
--

CREATE TABLE `tutorexperience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `experiencewithtutoring` varchar(256) NOT NULL,
  `experiencewithgiftedness` varchar(255) NOT NULL,
  `experiencewithaddpdd` varchar(255) NOT NULL,
  `experiencewithadhd` varchar(255) NOT NULL,
  `experiencewithautisme` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorexperience`
--

INSERT INTO `tutorexperience` (`id`, `user_id`, `experiencewithtutoring`, `experiencewithgiftedness`, `experiencewithaddpdd`, `experiencewithadhd`, `experiencewithautisme`, `created_at`, `updated_at`) VALUES
(1, 16, '3', '1,4', '3,4', '3,4', '', '2018-03-31 12:52:08', '2018-03-31 12:52:08'),
(2, 17, 'Nee, ik heb nog geen ervaring met bijles geven', 'Nee, ik heb hier niet specifiek ervaring mee', 'Nee, ik heb hier niet specifiek ervaring mee', 'Nee, ik heb hier niet specifiek ervaring mee', 'Nee, ik heb hier niet specifiek ervaring mee', '2018-04-28 15:22:01', '2018-04-28 09:22:01'),
(3, 18, 'Ja, ik help mijn broertje/zusje/familielid regelmatig', 'Ja, ik heb hier specifiek iets over geleerd tijdens mijn studie', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven', '2018-04-01 10:50:38', '2018-04-01 10:50:38'),
(4, 20, 'Ja, ik heb al 3 of meer leerlingen bijles gegeven', 'Nee, niet specifiek', 'Ja, in persoonlijke sfeer/door mijn studie', 'Ja, in persoonlijke sfeer/door mijn studie', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', '2018-05-17 12:17:04', '2018-05-17 12:17:04'),
(5, 21, 'Ja, ik heb al 3 of meer leerlingen bijles gegeven', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, in persoonlijke sfeer/door mijn studie', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, in persoonlijke sfeer/door mijn studie', '2018-05-17 12:22:18', '2018-05-17 12:22:18'),
(6, 22, 'Ja, ik heb al 3 of meer leerlingen bijles gegeven', 'Ja, in persoonlijke sfeer/door mijn studie', 'Ja, in persoonlijke sfeer/door mijn studie', 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven', 'Ja, in persoonlijke sfeer/door mijn studie', '2018-05-17 12:23:51', '2018-05-17 12:23:51'),
(7, 23, 'Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school', 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven', 'Ja, in persoonlijke sfeer/door mijn studie', '2018-05-18 14:13:39', '2018-05-18 14:13:39'),
(8, 24, 'Nee, maar ik help wel regelmatig mijn broertje/zusje/vrienden/vriendinnen met school', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, ik heb al een leerling die dit heeft bijles gegeven', 'Ja, ik heb al 2 of meer leerlingen die dit hebben bijles gegeven', 'Ja, ik heb al meerdere leerlingen die dit hebben bijles gegeven', '2018-07-13 14:19:48', '2018-07-13 14:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `tutorinfo`
--

CREATE TABLE `tutorinfo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tutor_type` int(11) NOT NULL,
  `current_class_for_student` int(11) DEFAULT NULL,
  `graduation_year` int(11) DEFAULT NULL,
  `current_study_for_former_student` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `street` varchar(255) NOT NULL,
  `house` varchar(255) NOT NULL,
  `postalcode` varchar(50) NOT NULL,
  `residence` varchar(100) NOT NULL,
  `birthdate` datetime NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Briefintroduction` text NOT NULL,
  `helpthestudent` text NOT NULL,
  `abitmore` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorinfo`
--

INSERT INTO `tutorinfo` (`id`, `user_id`, `tutor_type`, `current_class_for_student`, `graduation_year`, `current_study_for_former_student`, `firstname`, `lastname`, `phone`, `street`, `house`, `postalcode`, `residence`, `birthdate`, `sex`, `Briefintroduction`, `helpthestudent`, `abitmore`, `image`, `experience`, `created_at`, `updated_at`) VALUES
(11, 17, 1, 6, NULL, NULL, 'Emrul', 'Hassan', '01784587858', '20', '20', '3200', 'dipika', '2018-04-25 00:00:00', 'Vrouw', 'dsafaf fsdfsd', 'fsfs sdgsdgs', 'fsfs sfsfs sgs', 'option1524928921hvlWgxwPle.PNG', 3, '2018-07-27 15:29:32', '2018-04-28 09:22:01'),
(12, 18, 1, 4, NULL, NULL, 'Kamrul', 'Hassan', '01784587858', '10', '10', '3200', 'dipika', '2018-04-17 00:00:00', 'Man', 'fdgdfgd fdfgd fdgd', 'dfg gdgdgd gdg', 'drgd gdfg', 'user1522601438f3yZVx4rjp.PNG', 2, '2018-07-27 20:07:37', '2018-04-01 10:50:38'),
(13, 20, 1, 3, NULL, NULL, 'Juned', 'Hassan', '5544454', '10', '10', '1011 AA', 'dipika', '2018-05-04 00:00:00', 'Man', 'fds fsdfs', 'fsfs fsdfs', 'sfsd fsfsd', 'user1526581024NpzILbckB4.PNG', 1, '2018-07-27 20:07:42', '2018-05-17 12:17:04'),
(14, 21, 1, 3, NULL, NULL, 'Shawon', 'Hassan', '5544454', '10', '10', '1011 AA', 'dipika', '2018-05-04 00:00:00', 'Man', 'fds fsdfs', 'fsfs fsdfs', 'sfsd fsfsd', 'user1526581337SPVlssMx0i.PNG', 2, '2018-07-27 20:07:47', '2018-05-17 12:22:18'),
(15, 22, 1, 3, NULL, NULL, 'Chris', 'Hassan', '5544454', '10', '10', '1011 AA', 'dipika', '2018-05-19 00:00:00', 'Man', 'dfdsfs', 'dfsd dsfs', 'fsdf dsfds', 'user1526581431q7wxcOs6Wi.PNG', 3, '2018-07-27 20:07:54', '2018-05-17 12:23:51'),
(16, 23, 2, 3, 2010, 'sdfs', 'Nurul', 'Hassan', '5544454', '10', '10', '1011 AA', 'dipika', '2018-05-01 00:00:00', 'Man', 'FXFGBX', 'DFSDFF', 'dxvxdvxv', 'user1526674419tuAsWwP1V6.PNG', 1, '2018-07-27 20:08:00', '2018-05-18 14:13:39'),
(17, 24, 1, 5, NULL, NULL, 'Amin', 'Hassan', '+44174547545', 'sylhet', '10', '1011 AA', 'dipika', '2018-07-06 00:00:00', 'Man', 'sadsadasd', 'sdasdasdas', 'sdsadasd', 'user1531513187bA3epcgggY.jpg', 2, '2018-07-27 20:08:04', '2018-07-13 14:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `tutorsearch`
--

CREATE TABLE `tutorsearch` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorsearch`
--

INSERT INTO `tutorsearch` (`id`, `subject`, `postcode`, `created_at`, `updated_at`) VALUES
(1, 'Wiskunde B', '1011 AA', '2018-07-15 15:16:46', '2018-07-15 15:16:46'),
(2, 'Wiskunde B', '1011 AA', '2018-07-15 15:19:13', '2018-07-15 15:19:13'),
(3, 'Wiskunde B', '1011 AA', '2018-07-15 15:24:32', '2018-07-15 15:24:32'),
(4, 'Wiskunde B', '1011 AA', '2018-07-15 15:41:29', '2018-07-15 15:41:29'),
(5, 'Wiskunde B', '1011 AA', '2018-07-15 15:41:58', '2018-07-15 15:41:58'),
(6, 'Wiskunde B', '1011 AA', '2018-07-15 15:42:27', '2018-07-15 15:42:27'),
(7, 'Wiskunde B', '1011 AA', '2018-07-15 15:42:34', '2018-07-15 15:42:34'),
(8, 'Wiskunde B', '1011 AA', '2018-07-15 15:42:38', '2018-07-15 15:42:38'),
(9, 'Wiskunde B', '1011 AA', '2018-07-15 15:44:49', '2018-07-15 15:44:49'),
(10, 'Wiskunde B', '1011 AA', '2018-07-15 15:44:52', '2018-07-15 15:44:52'),
(11, 'Wiskunde B', '1011 AA', '2018-07-15 15:45:07', '2018-07-15 15:45:07'),
(12, 'Wiskunde B', '1011 AA', '2018-07-15 15:45:14', '2018-07-15 15:45:14'),
(13, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:15', '2018-07-15 15:48:15'),
(14, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:16', '2018-07-15 15:48:16'),
(15, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:21', '2018-07-15 15:48:21'),
(16, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:26', '2018-07-15 15:48:26'),
(17, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:32', '2018-07-15 15:48:32'),
(18, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:43', '2018-07-15 15:48:43'),
(19, 'Wiskunde B', '1011 AA', '2018-07-15 15:48:49', '2018-07-15 15:48:49'),
(20, 'Wiskunde B', '1011 AA', '2018-07-15 15:50:35', '2018-07-15 15:50:35'),
(21, 'Wiskunde B', '1011 AA', '2018-07-15 15:50:41', '2018-07-15 15:50:41'),
(22, 'Wiskunde B', '1011 AA', '2018-07-15 16:01:21', '2018-07-15 16:01:21'),
(23, 'Wiskunde B', '1011 AA', '2018-07-15 16:01:23', '2018-07-15 16:01:23'),
(24, 'Wiskunde B', '1011 AA', '2018-07-15 16:03:44', '2018-07-15 16:03:44'),
(25, 'Wiskunde B', '1011 AA', '2018-07-15 16:03:50', '2018-07-15 16:03:50'),
(26, 'Wiskunde B', '1011 AA', '2018-07-15 16:09:17', '2018-07-15 16:09:17'),
(27, 'Wiskunde B', '1011 AA', '2018-07-15 16:09:27', '2018-07-15 16:09:27'),
(28, 'Wiskunde B', '1011 AA', '2018-07-15 16:10:47', '2018-07-15 16:10:47'),
(29, 'Wiskunde B', '1011 AA', '2018-07-15 16:10:54', '2018-07-15 16:10:54'),
(30, 'Wiskunde B', '1011 AA', '2018-07-15 16:10:54', '2018-07-15 16:10:54'),
(31, 'Wiskunde B', '1011 AA', '2018-07-15 16:11:20', '2018-07-15 16:11:20'),
(32, 'Wiskunde B', '1011 AA', '2018-07-15 16:11:27', '2018-07-15 16:11:27'),
(33, 'Wiskunde B', '1011 AA', '2018-07-15 16:11:29', '2018-07-15 16:11:29'),
(34, 'Wiskunde B', '1011 AA', '2018-07-15 16:11:37', '2018-07-15 16:11:37'),
(35, 'Wiskunde B', '1011 AA', '2018-07-15 16:11:42', '2018-07-15 16:11:42'),
(36, 'Wiskunde B', '1011 AA', '2018-07-15 16:15:17', '2018-07-15 16:15:17'),
(37, 'Wiskunde B', '1011 AA', '2018-07-15 16:15:18', '2018-07-15 16:15:18'),
(38, 'Wiskunde B', '1011 AA', '2018-07-15 16:15:19', '2018-07-15 16:15:19'),
(39, 'Wiskunde B', '1011 AA', '2018-07-15 16:15:42', '2018-07-15 16:15:42'),
(40, 'Wiskunde B', '1011 AA', '2018-07-15 16:15:44', '2018-07-15 16:15:44'),
(41, 'Wiskunde B', '1011 AA', '2018-07-15 16:15:44', '2018-07-15 16:15:44'),
(42, 'Wiskunde B', '1011 AA', '2018-07-22 14:34:06', '2018-07-22 14:34:06'),
(43, 'Wiskunde B', '1011 AA', '2018-07-23 13:48:25', '2018-07-23 13:48:25'),
(44, 'Wiskunde B', '1011 AA', '2018-07-23 13:49:06', '2018-07-23 13:49:06'),
(45, 'Wiskunde B', '1011 AA', '2018-07-23 13:49:09', '2018-07-23 13:49:09'),
(46, 'Wiskunde B', '1011 AA', '2018-07-23 14:12:44', '2018-07-23 14:12:44'),
(47, 'Wiskunde B', '1011 AA', '2018-07-23 14:17:28', '2018-07-23 14:17:28'),
(48, 'Wiskunde B', '1011 AA', '2018-07-23 14:18:08', '2018-07-23 14:18:08'),
(49, 'Wiskunde B', '3100', '2018-07-24 12:11:00', '2018-07-24 12:11:00'),
(50, 'Wiskunde B', '1011 AA', '2018-07-24 12:11:28', '2018-07-24 12:11:28'),
(51, 'Wiskunde B', '1011 AA', '2018-07-24 12:35:20', '2018-07-24 12:35:20'),
(52, 'Wiskunde B', '1011 AA', '2018-07-24 12:35:33', '2018-07-24 12:35:33'),
(53, 'Wiskunde A', '1011 AA', '2018-07-24 12:36:13', '2018-07-24 12:36:13'),
(54, 'Wiskunde B', '1011 AA', '2018-07-24 12:36:43', '2018-07-24 12:36:43'),
(55, 'Wiskunde A', '1011 AA', '2018-07-24 12:36:55', '2018-07-24 12:36:55'),
(56, 'Wiskunde B', '1011 AA', '2018-07-24 12:37:08', '2018-07-24 12:37:08'),
(57, 'Wiskunde B', '1011 AA', '2018-07-24 12:38:45', '2018-07-24 12:38:45'),
(58, 'Wiskunde B', '1011 AA', '2018-07-24 12:43:45', '2018-07-24 12:43:45'),
(59, 'Wiskunde B', '1011 AA', '2018-07-24 12:44:29', '2018-07-24 12:44:29'),
(60, 'Wiskunde B', '1011 AA', '2018-07-24 12:44:41', '2018-07-24 12:44:41'),
(61, 'Wiskunde B', '1011 AA', '2018-07-24 12:57:07', '2018-07-24 12:57:07'),
(62, 'Wiskunde B', '1011 AA', '2018-07-24 12:59:01', '2018-07-24 12:59:01'),
(63, 'Wiskunde B', '1011 AA', '2018-07-24 13:05:52', '2018-07-24 13:05:52'),
(64, 'Wiskunde B', '1011 AA', '2018-07-24 13:06:33', '2018-07-24 13:06:33'),
(65, 'Wiskunde B', '1011 AA', '2018-07-24 13:07:26', '2018-07-24 13:07:26'),
(66, 'Wiskunde B', '1011 AA', '2018-07-24 13:07:39', '2018-07-24 13:07:39'),
(67, 'Wiskunde B', '1011 AA', '2018-07-24 13:15:07', '2018-07-24 13:15:07'),
(68, 'Wiskunde B', '1011 AA', '2018-07-24 13:27:05', '2018-07-24 13:27:05'),
(69, 'Wiskunde B', '1011 AA', '2018-07-24 13:35:46', '2018-07-24 13:35:46'),
(70, 'Wiskunde B', '1011 AA', '2018-07-24 13:36:21', '2018-07-24 13:36:21'),
(71, 'Wiskunde B', '1011 AA', '2018-07-24 13:37:17', '2018-07-24 13:37:17'),
(72, 'Wiskunde B', '1011 AA', '2018-07-24 13:41:28', '2018-07-24 13:41:28'),
(73, 'Wiskunde B', '1011 AA', '2018-07-24 13:41:54', '2018-07-24 13:41:54'),
(74, 'Wiskunde B', '1011 AA', '2018-07-24 14:24:02', '2018-07-24 14:24:02'),
(75, 'Wiskunde B', '1011 AA', '2018-07-24 14:24:43', '2018-07-24 14:24:43'),
(76, 'Wiskunde B', '1011 AA', '2018-07-24 14:58:45', '2018-07-24 14:58:45'),
(77, 'Wiskunde B', '1011 AA', '2018-07-24 14:58:50', '2018-07-24 14:58:50'),
(78, 'Wiskunde B', '1011 AA', '2018-07-24 15:04:46', '2018-07-24 15:04:46'),
(79, 'Wiskunde B', '1011 AA', '2018-07-24 15:04:54', '2018-07-24 15:04:54'),
(80, 'Wiskunde B', '1011 AA', '2018-07-24 15:04:57', '2018-07-24 15:04:57'),
(81, 'Wiskunde B', '1011 AA', '2018-07-24 15:33:01', '2018-07-24 15:33:01'),
(82, 'Wiskunde B', '1011 AA', '2018-07-24 15:33:24', '2018-07-24 15:33:24'),
(83, 'Wiskunde B', '1011 AA', '2018-07-24 15:35:25', '2018-07-24 15:35:25'),
(84, 'Wiskunde B', '3100', '2018-07-25 12:22:37', '2018-07-25 12:22:37'),
(85, 'Wiskunde B', '1011 AA', '2018-07-25 12:22:54', '2018-07-25 12:22:54'),
(86, 'Wiskunde B', '1011 AA', '2018-07-25 12:25:47', '2018-07-25 12:25:47'),
(87, 'Wiskunde B', '1011 AA', '2018-07-25 12:26:10', '2018-07-25 12:26:10'),
(88, 'Wiskunde B', '1011 AA', '2018-07-25 13:04:02', '2018-07-25 13:04:02'),
(89, 'Wiskunde B', '1011 AA', '2018-07-25 13:05:51', '2018-07-25 13:05:51'),
(90, 'Wiskunde B', '1011 AA', '2018-07-25 14:28:48', '2018-07-25 14:28:48'),
(91, 'Wiskunde B', '1011 AA', '2018-07-26 03:07:16', '2018-07-26 03:07:16'),
(92, 'Wiskunde B', '1011 AA', '2018-07-26 14:59:41', '2018-07-26 14:59:41'),
(93, 'Wiskunde B', '1011 AA', '2018-07-26 14:59:47', '2018-07-26 14:59:47'),
(94, 'Wiskunde B', '1011 AA', '2018-07-26 14:59:49', '2018-07-26 14:59:49'),
(95, 'Wiskunde B', '1011 AA', '2018-07-26 14:59:52', '2018-07-26 14:59:52'),
(96, 'Wiskunde B', '1011 AA', '2018-07-26 14:59:52', '2018-07-26 14:59:52'),
(97, 'Wiskunde B', '1011 AA', '2018-07-26 14:59:52', '2018-07-26 14:59:52'),
(98, 'Wiskunde B', '1011 AA', '2018-07-27 08:15:36', '2018-07-27 08:15:36'),
(99, 'Wiskunde B', '1011 AA', '2018-07-27 08:15:38', '2018-07-27 08:15:38'),
(100, 'Wiskunde B', '1011 AA', '2018-07-27 08:15:41', '2018-07-27 08:15:41'),
(101, 'Wiskunde B', '1011 AA', '2018-07-27 08:15:42', '2018-07-27 08:15:42'),
(102, 'Wiskunde B', '1011 AA', '2018-07-27 08:34:09', '2018-07-27 08:34:09'),
(103, 'Wiskunde B', '1011 AA', '2018-07-27 09:30:08', '2018-07-27 09:30:08'),
(104, 'Wiskunde B', '1011 AA', '2018-07-27 11:25:24', '2018-07-27 11:25:24'),
(105, 'Wiskunde B', '1011 AA', '2018-07-27 11:25:58', '2018-07-27 11:25:58'),
(106, 'Wiskunde B', '1011 AA', '2018-07-27 11:26:22', '2018-07-27 11:26:22'),
(107, 'Wiskunde B', '1011 AA', '2018-07-27 11:27:27', '2018-07-27 11:27:27'),
(108, 'Wiskunde B', '1011 AA', '2018-07-27 11:27:53', '2018-07-27 11:27:53'),
(109, 'Wiskunde B', '1011 AA', '2018-07-27 11:28:11', '2018-07-27 11:28:11'),
(110, 'Wiskunde B', '1011 AA', '2018-07-27 11:28:37', '2018-07-27 11:28:37'),
(111, 'Wiskunde B', '1011 AA', '2018-07-27 11:29:37', '2018-07-27 11:29:37'),
(112, 'Wiskunde B', '1011 AA', '2018-07-27 11:30:34', '2018-07-27 11:30:34'),
(113, 'Wiskunde B', '1011 AA', '2018-07-27 11:31:19', '2018-07-27 11:31:19'),
(114, 'Wiskunde B', '1011 AA', '2018-07-27 11:32:12', '2018-07-27 11:32:12'),
(115, 'Wiskunde B', '1011 AA', '2018-07-27 11:34:20', '2018-07-27 11:34:20'),
(116, 'Wiskunde B', '1011 AA', '2018-07-27 11:34:53', '2018-07-27 11:34:53'),
(117, 'Wiskunde B', '1011 AA', '2018-07-27 11:35:50', '2018-07-27 11:35:50'),
(118, 'Wiskunde B', '1011 AA', '2018-07-27 11:36:30', '2018-07-27 11:36:30'),
(119, 'Wiskunde B', '1011 AA', '2018-07-27 11:38:33', '2018-07-27 11:38:33'),
(120, 'Wiskunde B', '1011 AA', '2018-07-27 11:38:59', '2018-07-27 11:38:59'),
(121, 'Wiskunde B', '1011 AA', '2018-07-27 11:39:20', '2018-07-27 11:39:20'),
(122, 'Wiskunde B', '1011 AA', '2018-07-27 11:47:21', '2018-07-27 11:47:21'),
(123, 'Wiskunde B', '1011 AA', '2018-07-27 11:49:27', '2018-07-27 11:49:27'),
(124, 'Wiskunde B', '1011 AA', '2018-07-27 11:51:10', '2018-07-27 11:51:10'),
(125, 'Wiskunde B', '1011 AA', '2018-07-27 11:53:51', '2018-07-27 11:53:51'),
(126, 'Wiskunde B', '1011 AA', '2018-07-27 11:53:59', '2018-07-27 11:53:59'),
(127, 'Wiskunde B', '1011 AA', '2018-07-27 11:54:19', '2018-07-27 11:54:19'),
(128, 'Wiskunde B', '1011 AA', '2018-07-27 11:59:53', '2018-07-27 11:59:53'),
(129, 'Wiskunde B', '1011 AA', '2018-07-27 12:05:50', '2018-07-27 12:05:50'),
(130, 'Wiskunde B', '1011 AA', '2018-07-27 12:06:36', '2018-07-27 12:06:36'),
(131, 'Wiskunde B', '1011 AA', '2018-07-27 12:07:06', '2018-07-27 12:07:06'),
(132, 'Wiskunde B', '1011 AA', '2018-07-27 12:07:43', '2018-07-27 12:07:43'),
(133, 'Wiskunde B', '1011 AA', '2018-07-27 12:09:32', '2018-07-27 12:09:32'),
(134, 'Wiskunde B', '1011 AA', '2018-07-27 12:09:43', '2018-07-27 12:09:43'),
(135, 'Wiskunde B', '1011 AA', '2018-07-27 12:12:16', '2018-07-27 12:12:16'),
(136, 'Wiskunde B', '1011 AA', '2018-07-27 12:12:50', '2018-07-27 12:12:50'),
(137, 'Wiskunde B', '1011 AA', '2018-07-27 12:12:55', '2018-07-27 12:12:55'),
(138, 'Wiskunde B', '1011 AA', '2018-07-27 12:13:01', '2018-07-27 12:13:01'),
(139, 'Wiskunde B', '1011 AA', '2018-07-27 12:13:03', '2018-07-27 12:13:03'),
(140, 'Wiskunde B', '1011 AA', '2018-07-27 12:13:03', '2018-07-27 12:13:03'),
(141, 'Wiskunde B', '1011 AA', '2018-07-27 12:17:25', '2018-07-27 12:17:25'),
(142, 'Wiskunde B', '1011 AA', '2018-07-27 12:17:30', '2018-07-27 12:17:30'),
(143, 'Wiskunde B', '1011 AA', '2018-07-27 12:18:34', '2018-07-27 12:18:34'),
(144, 'Wiskunde B', '1011 AA', '2018-07-27 12:20:44', '2018-07-27 12:20:44'),
(145, 'Wiskunde B', '1011 AA', '2018-07-27 12:20:53', '2018-07-27 12:20:53'),
(146, 'Wiskunde B', '1011 AA', '2018-07-27 12:20:55', '2018-07-27 12:20:55'),
(147, 'Wiskunde B', '1011 AA', '2018-07-27 12:20:58', '2018-07-27 12:20:58'),
(148, 'Wiskunde B', '1011 AA', '2018-07-27 12:38:40', '2018-07-27 12:38:40'),
(149, 'Wiskunde B', '1011 AA', '2018-07-27 12:56:54', '2018-07-27 12:56:54'),
(150, 'Wiskunde B', '1011 AA', '2018-07-27 12:56:57', '2018-07-27 12:56:57'),
(151, 'Wiskunde B', '1011 AA', '2018-07-27 12:56:58', '2018-07-27 12:56:58'),
(152, 'Wiskunde B', '1011 AA', '2018-07-27 12:56:59', '2018-07-27 12:56:59'),
(153, 'Wiskunde B', '1011 AA', '2018-07-27 12:59:44', '2018-07-27 12:59:44'),
(154, 'Wiskunde B', '1011 AA', '2018-07-27 13:00:35', '2018-07-27 13:00:35'),
(155, 'Wiskunde B', '1011 AA', '2018-07-27 13:01:59', '2018-07-27 13:01:59'),
(156, 'Wiskunde B', '1011 AA', '2018-07-27 13:02:02', '2018-07-27 13:02:02'),
(157, 'Wiskunde B', '1011 AA', '2018-07-27 13:02:04', '2018-07-27 13:02:04'),
(158, 'Wiskunde B', '1011 AA', '2018-07-27 13:04:58', '2018-07-27 13:04:58'),
(159, 'Wiskunde B', '1011 AA', '2018-07-27 13:07:37', '2018-07-27 13:07:37'),
(160, 'Wiskunde B', '1011 AA', '2018-07-27 13:08:55', '2018-07-27 13:08:55'),
(161, 'Wiskunde B', '1011 AA', '2018-07-27 13:08:56', '2018-07-27 13:08:56'),
(162, 'Wiskunde B', '1011 AA', '2018-07-27 13:09:01', '2018-07-27 13:09:01'),
(163, 'Wiskunde B', '1011 AA', '2018-07-27 13:09:43', '2018-07-27 13:09:43'),
(164, 'Wiskunde B', '1011 AA', '2018-07-27 13:09:44', '2018-07-27 13:09:44'),
(165, 'Wiskunde B', '1011 AA', '2018-07-27 13:09:53', '2018-07-27 13:09:53'),
(166, 'Wiskunde B', '1011 AA', '2018-07-27 13:13:07', '2018-07-27 13:13:07'),
(167, 'Wiskunde B', '1011 AA', '2018-07-27 13:14:09', '2018-07-27 13:14:09'),
(168, 'Wiskunde B', '1011 AA', '2018-07-27 13:15:05', '2018-07-27 13:15:05'),
(169, 'Wiskunde B', '1011 AA', '2018-07-27 13:15:07', '2018-07-27 13:15:07'),
(170, 'Wiskunde B', '1011 AA', '2018-07-27 13:15:07', '2018-07-27 13:15:07'),
(171, 'Wiskunde B', '1011 AA', '2018-07-27 13:16:57', '2018-07-27 13:16:57'),
(172, 'Wiskunde B', '1011 AA', '2018-07-27 13:17:06', '2018-07-27 13:17:06'),
(173, 'Wiskunde B', '1011 AA', '2018-07-27 13:17:08', '2018-07-27 13:17:08'),
(174, 'Wiskunde B', '1011 AA', '2018-07-27 13:17:08', '2018-07-27 13:17:08'),
(175, 'Wiskunde B', '1011 AA', '2018-07-27 13:30:30', '2018-07-27 13:30:30'),
(176, 'Wiskunde B', '1011 AA', '2018-07-27 13:55:38', '2018-07-27 13:55:38'),
(177, 'Wiskunde B', '1011 AA', '2018-07-27 13:56:40', '2018-07-27 13:56:40'),
(178, 'Wiskunde B', '1011 AA', '2018-07-27 13:56:45', '2018-07-27 13:56:45'),
(179, 'Wiskunde B', '1011 AA', '2018-07-27 13:56:47', '2018-07-27 13:56:47'),
(180, 'Wiskunde B', '1011 AA', '2018-07-27 13:57:12', '2018-07-27 13:57:12'),
(181, 'Wiskunde B', '1011 AA', '2018-07-27 14:04:57', '2018-07-27 14:04:57'),
(182, 'Wiskunde B', '1011 AA', '2018-07-27 14:06:51', '2018-07-27 14:06:51'),
(183, 'Wiskunde B', '1011 AA', '2018-07-27 14:07:26', '2018-07-27 14:07:26'),
(184, 'Wiskunde B', '1011 AA', '2018-07-27 14:08:11', '2018-07-27 14:08:11'),
(185, 'Wiskunde B', '1011 AA', '2018-07-27 14:09:40', '2018-07-27 14:09:40'),
(186, 'Wiskunde B', '1011 AA', '2018-07-27 14:09:44', '2018-07-27 14:09:44'),
(187, 'Wiskunde B', '1011 AA', '2018-07-27 14:09:45', '2018-07-27 14:09:45'),
(188, 'Wiskunde B', '1011 AA', '2018-07-27 14:09:47', '2018-07-27 14:09:47'),
(189, 'Wiskunde B', '1011 AA', '2018-07-27 14:10:20', '2018-07-27 14:10:20'),
(190, 'Wiskunde B', '1011 AA', '2018-07-27 14:10:41', '2018-07-27 14:10:41'),
(191, 'Wiskunde B', '1011 AA', '2018-07-27 14:10:48', '2018-07-27 14:10:48'),
(192, 'Wiskunde B', '1011 AA', '2018-07-27 14:10:49', '2018-07-27 14:10:49'),
(193, 'Wiskunde B', '1011 AA', '2018-07-27 14:10:50', '2018-07-27 14:10:50'),
(194, 'Wiskunde B', '1011 AA', '2018-07-27 14:12:18', '2018-07-27 14:12:18'),
(195, 'Wiskunde B', '1011 AA', '2018-07-27 14:12:22', '2018-07-27 14:12:22'),
(196, 'Wiskunde B', '1011 AA', '2018-07-27 14:12:24', '2018-07-27 14:12:24'),
(197, 'Wiskunde B', '1011 AA', '2018-07-27 15:03:30', '2018-07-27 15:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `tutortotime`
--

CREATE TABLE `tutortotime` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sat` varchar(100) DEFAULT NULL,
  `sun` varchar(100) DEFAULT NULL,
  `mon` varchar(100) DEFAULT NULL,
  `tue` varchar(100) DEFAULT NULL,
  `wed` varchar(100) DEFAULT NULL,
  `thus` varchar(100) DEFAULT NULL,
  `fri` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutortotime`
--

INSERT INTO `tutortotime` (`id`, `user_id`, `sat`, `sun`, `mon`, `tue`, `wed`, `thus`, `fri`, `created_at`, `updated_at`) VALUES
(11, 17, 'Ochtend,Middag,Avond', 'Ochtend,Middag,Avond', 'Ochtend,Middag,Avond', 'Ochtend,Middag,Avond', 'Ochtend,Middag,Avond', 'Ochtend,Middag,Avond', 'Ochtend,Middag,Avond', '2018-04-28 15:22:01', '2018-04-28 09:22:01'),
(12, 20, 'Middag,Avond', 'Ochtend,Middag', 'Ochtend,Middag', 'Middag,Avond', 'Ochtend,Middag', 'Middag,Avond', 'Ochtend,Middag', '2018-05-17 12:17:04', '2018-05-17 12:17:04'),
(13, 21, 'Avond', 'Middag', 'Ochtend', 'Middag', 'Ochtend', 'Middag', 'Middag', '2018-05-17 12:22:18', '2018-05-17 12:22:18'),
(14, 22, 'Middag', 'Avond', 'Ochtend', 'Middag', 'Avond', 'Middag', 'Ochtend', '2018-05-17 12:23:51', '2018-05-17 12:23:51'),
(15, 23, 'Avond', 'Middag', 'Middag', 'Avond', 'Middag', 'Avond', 'Middag', '2018-05-18 14:13:39', '2018-05-18 14:13:39'),
(16, 24, NULL, NULL, NULL, 'Middag', 'Avond', NULL, NULL, '2018-07-13 14:19:48', '2018-07-13 14:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `tutor_reviews`
--

CREATE TABLE `tutor_reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_rating` int(11) NOT NULL,
  `r_comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_reviews`
--

INSERT INTO `tutor_reviews` (`id`, `user_id`, `r_name`, `r_email`, `r_rating`, `r_comment`, `created_at`, `updated_at`) VALUES
(2, 17, 'Emrul Hassan', 'emrul7427@gmail.com', 5, 'some comment', '2018-07-24 12:21:54', '2018-07-24 12:21:54'),
(3, 20, 'Juned ahmed', 'juned@gmail.com', 3, 'bad very vad', '2018-07-24 13:08:07', '2018-07-24 13:08:07'),
(4, 20, 'shawon ahmed', 'shawon@gmail.com', 4, 'sadd', '2018-07-24 13:08:58', '2018-07-24 13:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_reset_token` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `useractive` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `password_reset_token`, `useractive`, `created_at`, `updated_at`) VALUES
(17, 'emrul7427@gmail.com', '$2y$10$pn66mCHqv1YGgkMzFnU5..AHtOQ59TJT025gvKCM/R0IuPj1MSmM2', '7wI5mCjiGbC1VDOWBZkzbyX62qFQu7jFPOE5Q72A91bwtsqd0B26lGJOb8pO', NULL, 1, '2018-04-01 10:16:27', '2018-04-27 14:05:49'),
(18, 'emrul74275@gmail.com', '$2y$10$E8SQjNbpEPrRfU5yq927/u7.JNThVvUDvix95dGkKhE4mPR4St.A6', NULL, NULL, 0, '2018-04-01 10:50:38', '2018-04-21 09:22:12'),
(19, 'emrul74285@gmail.com', '$2y$10$E8SQjNbpEPrRfU5yq927/u7.JNThVvUDvix95dGkKhE4mPR4St.A6', NULL, NULL, 1, '2018-04-18 10:50:38', '2018-04-19 12:56:57'),
(20, 'emrul7427a@gmail.com', '$2y$10$9L1GNBHAiLuABxmZIUHsAeMTBDs1iKNxl4L2aUYvKf0fd4zrGU2Gu', NULL, NULL, 0, '2018-05-17 12:17:04', '2018-05-17 12:17:04'),
(21, 'emrul7427b@gmail.com', '$2y$10$smr5sec1H.ivk9JSvdI9..aZ.9nCxQa34ejqIhvjiq5ToCr1ouDNa', NULL, NULL, 0, '2018-05-17 12:22:18', '2018-05-17 12:22:18'),
(22, 'emrul7427c@gmail.com', '$2y$10$kgtaOA5OmtasAsoJPUDQ1.4JkhTHY5Vd/bsyJHT7l2RIeToZG67ne', NULL, NULL, 0, '2018-05-17 12:23:51', '2018-05-17 12:23:51'),
(23, 'emrul7427m@gmail.com', '$2y$10$aezfZpbn2HlOqL5dUpif9ev7R6MBNUP.ASDvY8f2pweQDm3h0GuEe', NULL, NULL, 0, '2018-05-18 14:13:39', '2018-05-18 14:13:39'),
(24, 'emrul7427sdas@gmail.com', '$2y$10$.R2uezjirDF7rEvpsyZ5/OHOJ7N5U6qVGweTWgGHpz3YCtwshf0rC', NULL, NULL, 0, '2018-07-13 14:19:47', '2018-07-13 14:19:47');

-- --------------------------------------------------------

--
-- Structure for view `coursesnames`
--
DROP TABLE IF EXISTS `coursesnames`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `coursesnames`  AS  select `tutorcourse`.`user_id` AS `user_id`,`tutorcourse`.`classes` AS `classes`,group_concat(`tutorcourse`.`coursename` separator ', ') AS `coursename` from `tutorcourse` group by `tutorcourse`.`user_id` ;

-- --------------------------------------------------------

--
-- Structure for view `tutoravgrating`
--
DROP TABLE IF EXISTS `tutoravgrating`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tutoravgrating`  AS  select `tutor_reviews`.`user_id` AS `user_id`,count(`tutor_reviews`.`id`) AS `totalrating`,avg(`tutor_reviews`.`r_rating`) AS `avgrating` from `tutor_reviews` group by `tutor_reviews`.`user_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postcode`
--
ALTER TABLE `postcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorcourse`
--
ALTER TABLE `tutorcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorexperience`
--
ALTER TABLE `tutorexperience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorinfo`
--
ALTER TABLE `tutorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorsearch`
--
ALTER TABLE `tutorsearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutortotime`
--
ALTER TABLE `tutortotime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postcode`
--
ALTER TABLE `postcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tutorcourse`
--
ALTER TABLE `tutorcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tutorexperience`
--
ALTER TABLE `tutorexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tutorinfo`
--
ALTER TABLE `tutorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tutorsearch`
--
ALTER TABLE `tutorsearch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT for table `tutortotime`
--
ALTER TABLE `tutortotime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tutor_reviews`
--
ALTER TABLE `tutor_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
