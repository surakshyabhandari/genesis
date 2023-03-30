-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2023 at 07:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nst`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `passport_number` varchar(255) NOT NULL,
  `passport_issue_date` date NOT NULL,
  `passport_expiry_date` date NOT NULL,
  `date_of_birth` date NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `phone_no1` varchar(255) NOT NULL,
  `phone_no2` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `flight_no` bigint(20) NOT NULL,
  `arrival_date` date NOT NULL,
  `departure_date` date NOT NULL,
  `econtact_name` varchar(255) NOT NULL,
  `econtact_email` varchar(255) NOT NULL,
  `econtact_phone_no` varchar(255) NOT NULL,
  `econtact_address` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `policy_no` bigint(20) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_phone_no` varchar(255) NOT NULL,
  `fitness_level` varchar(255) DEFAULT NULL,
  `outdoor_experience` longtext DEFAULT NULL,
  `high_altitude` longtext DEFAULT NULL,
  `training` longtext DEFAULT NULL,
  `signature` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `group_id`, `first_name`, `middle_name`, `last_name`, `nationality`, `gender`, `passport_number`, `passport_issue_date`, `passport_expiry_date`, `date_of_birth`, `address1`, `address2`, `phone_no1`, `phone_no2`, `customer_email`, `flight_no`, `arrival_date`, `departure_date`, `econtact_name`, `econtact_email`, `econtact_phone_no`, `econtact_address`, `relationship`, `company_name`, `policy_no`, `company_email`, `company_phone_no`, `fitness_level`, `outdoor_experience`, `high_altitude`, `training`, `signature`, `created_at`, `updated_at`) VALUES
(1, 1, 'Portia', 'Madison Leonard', 'Sanford', 'Distinctio Sunt qu', 'Esse explicabo Dolo', '4', '2005-04-05', '2022-03-25', '1996-09-07', '867 East Rocky New Freeway', 'Cumque culpa esse do', '46', '46', 'romive@mailinator.com', 663, '1986-04-17', '1989-05-20', 'Katelyn Salinas', 'tugor@mailinator.com', '764', 'Proident voluptatum', 'Reprehenderit dolor', 'Price and Day Inc', 209, 'susuqifana@mailinator.com', '427', 'basic', 'Repellendus Sit in ', 'Qui cumque quo odit ', 'Commodi non autem co', '5490_para1.png', '2023-03-26 23:38:54', '2023-03-26 23:39:03'),
(2, 2, 'Geraldine', 'Madeson Jackson', 'Ware', 'Cupiditate tempore ', 'Quibusdam sunt digni', '584', '1984-02-22', '1985-06-29', '2002-05-24', '91 Old Parkway', 'Consectetur eveniet', '33', '85', 'decit@mailinator.com', 857, '1973-03-13', '1980-11-15', 'Chase Garner', 'watevaq@mailinator.com', '324', 'Eos dolores iste tem', 'Voluptas qui enim ac', 'Pittman Head Trading', 539, 'fusetuzika@mailinator.com', '693', 'expert', 'Repudiandae qui vita', 'Qui doloremque liber', 'Aut autem reprehende', '400_para2.png', '2023-03-26 23:43:48', '2023-03-26 23:43:58'),
(3, 3, 'Carissa', 'Keegan Crane', 'Patton', 'Magnam quia officiis', 'Et saepe rerum cupid', '84', '2000-10-17', '2014-07-02', '1988-04-09', '60 Green New Parkway', 'Et et ea aut in elit', '57', '59', 'bezilodebi@mailinator.com', 78, '2015-03-23', '1998-10-10', 'Brenda Casey', 'zejuhus@mailinator.com', '145', 'Nam impedit veniam', 'Accusamus suscipit i', 'Christensen and Wilkinson Traders', 592, 'paqipebid@mailinator.com', '447', 'basic', 'Et ex quia quae volu', 'Omnis ut tempore di', 'Ex ut voluptas est ', '4607_para1.png', '2023-03-26 23:49:45', '2023-03-27 00:08:13'),
(4, 6, 'Lawrence', 'Tanisha Noel', 'Morris', 'Autem qui labore mol', 'Nobis quia sequi tot', '786', '1983-12-05', '1985-06-23', '1975-12-26', '421 New Boulevard', 'Veniam est at offic', '24', '94', 'jykareb@mailinator.com', 68, '1972-03-24', '1974-06-01', 'Dustin Leach', 'pupohapef@mailinator.com', '924', 'Ad ut sint eos des', 'Distinctio Dolores ', 'Sloan and Decker Co', 554, 'tewifowono@mailinator.com', '341', 'basic', 'Nihil praesentium a ', 'Nostrud voluptatem ', 'Officiis eu adipisic', '9571_para1.png', '2023-03-27 01:22:17', '2023-03-27 01:23:16'),
(5, 6, 'Hunter', 'Candace Silva', 'David', 'Eaque officia illum', 'Eiusmod ea tempor vo', '968', '2021-04-12', '2008-12-08', '1993-12-10', '581 Fabien Parkway', 'Nesciunt proident ', '60', '15', 'nolos@mailinator.com', 834, '1977-05-15', '2021-06-10', 'Valentine Workman', 'kifazodav@mailinator.com', '887', 'Mollitia ex quis neq', 'Est quidem sunt magn', 'Padilla Pittman Inc', 199, 'cydufazi@mailinator.com', '387', 'expert', 'Eius dolores omnis l', 'Quia sed incidunt e', 'Error et in perspici', '8033_avatar-icon-images-4.jpg', '2023-03-27 01:22:17', '2023-03-27 01:23:16'),
(6, 7, 'Josiah', 'Sage Lynn', 'Barber', 'Labore dolore mollit', 'Nemo ut est quasi ex', '103', '2014-08-18', '1995-01-25', '1980-09-13', '83 Oak Street', 'Non sed quas est tem', '10', '14', 'dulod@mailinator.com', 638, '1993-12-20', '1973-10-09', 'Callum Perry', 'lahepyvu@mailinator.com', '182', 'Natus culpa accusant', 'Temporibus iusto lab', 'Smith and Bush Co', 989, 'taqelanemi@mailinator.com', '230', 'basic', 'Sint ad ut in sunt N', 'Ut id odit perferend', 'Distinctio Quo pari', '1057_para1.png', '2023-03-27 06:26:04', '2023-03-27 06:26:16'),
(7, 8, 'Jermaine', 'Brendan Poole', 'Clarke', 'Laborum nostrum est ', 'Labore officiis sit ', '148', '2011-05-23', '2015-06-23', '2009-09-07', '55 East Milton Drive', 'Itaque sed est asper', '22', '43', 'cotebecike@mailinator.com', 969, '1987-09-21', '1989-02-22', 'Howard Booker', 'tirykana@mailinator.com', '286', 'Aut vero est proiden', 'Accusantium quia ani', 'Hahn Frye Associates', 21, 'fonu@mailinator.com', '671', 'basic', 'Nobis veniam non cu', 'Deleniti laboriosam', 'Eligendi totam est a', '980_para1.png', '2023-03-27 06:29:10', '2023-03-27 06:29:33'),
(8, 8, 'Iola', 'Yoshi Gay', 'Chavez', 'Incidunt enim ut ar', 'Quae qui consequat ', '532', '2014-12-25', '1983-05-15', '2011-09-12', '19 West Hague Freeway', 'Dolores pariatur Qu', '45', '84', 'tabesixu@mailinator.com', 852, '1979-08-07', '1999-02-28', 'Porter Dixon', 'toryxofig@mailinator.com', '247', 'Ut aut minim ipsam e', 'Tenetur voluptatem s', 'Burks and Luna Traders', 985, 'ludyl@mailinator.com', '735', 'basic', 'Iusto quod rem id o', 'Et tempore eu dolor', 'Reiciendis dolores r', '4572_para2.png', '2023-03-27 06:29:10', '2023-03-27 06:29:33'),
(9, 9, 'Elijah', 'Dahlia Hurley', 'Flowers', 'Sapiente expedita de', 'Ratione Nam adipisic', '136', '2010-09-01', '1971-03-10', '1973-02-04', '99 South White Second Road', 'Illo tenetur consequ', '63', '75', 'rifimuv@mailinator.com', 204, '1983-02-20', '2000-08-24', 'Boris Velez', 'hyty@mailinator.com', '252', 'Sit neque labore qu', 'Ut voluptatum expedi', 'Huff and Boyd Trading', 832, 'kinomof@mailinator.com', '405', 'basic', 'Eveniet ea unde et ', 'Sequi non obcaecati ', 'Sint in ut mollitia ', '6810_para1.png', '2023-03-27 06:30:58', '2023-03-27 06:32:04'),
(10, 10, 'Mallory', 'Mollie Mckay', 'Rollins', 'Voluptatem Illo ut ', 'Molestias culpa dis', '499', '1974-10-27', '2008-09-30', '2004-05-22', '78 Hague Road', 'Delectus tenetur bl', '24', '32', 'tuqume@mailinator.com', 685, '2000-04-24', '1988-09-17', 'Zenaida Roach', 'jahubu@mailinator.com', '701', 'Ea impedit nostrud ', 'Occaecat minim conse', 'Ratliff and Mooney Inc', 336, 'xedomi@mailinator.com', '216', 'basic', 'Sint asperiores null', 'Eum a porro quia qui', 'Amet reprehenderit ', '4511_para1.png', '2023-03-27 22:57:51', '2023-03-27 22:58:06'),
(11, 11, 'Kim', 'Chadwick Monroe', 'Stevenson', 'Molestias aperiam co', 'Necessitatibus in at', '967', '2019-12-18', '1995-12-05', '1990-03-13', '383 Rocky Fabien Drive', 'Impedit quisquam au', '6', '64', 'nozipusare@mailinator.com', 883, '2003-02-10', '1975-07-10', 'Kessie Wooten', 'pilurin@mailinator.com', '563', 'Voluptas qui cupidit', 'Non quasi occaecat d', 'Franks and Shaffer Co', 355, 'cuhuba@mailinator.com', '252', 'basic', 'Nobis sint ex neque ', 'Sit ipsa at quia i', 'Est voluptatibus nul', '6824_para2.png', '2023-03-27 23:05:42', '2023-03-27 23:10:41'),
(12, 11, 'Louis', 'Victor Molina', 'Moses', 'Officia qui laborum ', 'Excepturi iusto ut a', '443', '1986-09-02', '1998-08-25', '2011-09-12', '250 North Cowley Lane', 'Do voluptas consequa', '37', '54', 'dyja@mailinator.com', 671, '1991-09-14', '2001-05-06', 'Kellie Hebert', 'qape@mailinator.com', '920', 'Tempora consequat N', 'Ad temporibus omnis ', 'Dudley and Massey Inc', 761, 'wuhupyd@mailinator.com', '703', 'basic', 'Sit sit molestias t', 'Pariatur Veniam vo', 'Dolorem duis optio ', '1664_para1.png', '2023-03-27 23:05:42', '2023-03-27 23:10:41'),
(14, 13, 'Ferris', 'Aidan Nixon', 'Ramsey', 'Est nihil voluptate', 'Est nulla occaecat ', '48', '2004-02-02', '1988-02-27', '1981-06-26', '64 East Nobel Extension', 'Veniam dolore irure', '67', '76', 'gojemuhet@mailinator.com', 296, '1989-09-16', '2013-05-30', 'Xena Walls', 'giba@mailinator.com', '29', 'Voluptas maxime et u', 'Velit maiores adipis', 'Chaney Prince Plc', 853, 'tafax@mailinator.com', '149', 'expert', 'Recusandae Sed labo', 'Distinctio Debitis ', 'Nulla esse ea ut no', '3407_para1.png', '2023-03-28 03:46:28', '2023-03-28 03:46:49'),
(15, 13, 'Hilel', 'Darryl Mclean', 'Ayala', 'Consequat Nesciunt', 'Fugiat aut nesciunt', '200', '2020-09-03', '2020-03-13', '1997-06-10', '851 Rocky Milton Drive', 'Beatae adipisicing e', '45', '43', 'buly@mailinator.com', 640, '2009-10-11', '1971-08-27', 'Kevin Lindsey', 'lybubor@mailinator.com', '789', 'Dolor veniam id ob', 'Magna velit deserunt', 'Yates Joseph LLC', 339, 'maqokopuf@mailinator.com', '324', 'expert', 'Veniam alias laudan', 'Officia ea autem odi', 'Et quas illo et odio', '7008_para2.png', '2023-03-28 03:46:28', '2023-03-28 03:46:49'),
(16, 15, 'Felicia', 'Rhiannon Carlson', 'Stark', 'Sunt dolore numquam', 'Culpa quam consequat', '988', '1993-06-17', '1982-06-02', '2018-02-26', '85 Green Cowley Drive', 'Molestiae ea quos fa', '34', '22', 'vedyx@mailinator.com', 116, '2002-11-28', '2016-06-01', 'Phillip Ellison', 'romaruqymu@mailinator.com', '323', 'Ducimus vel quod om', 'Enim omnis anim perf', 'Yates Jarvis Co', 546, 'ziviq@mailinator.com', '431', 'basic', 'Dolor qui a consecte', 'Minim tempor ut itaq', 'Doloribus dolore ten', '2214_para1.png', '2023-03-28 23:14:21', '2023-03-28 23:14:39'),
(17, 16, 'Charde', 'Dante Mcgee', 'Calhoun', 'Tempora tempore exe', 'Adipisicing rerum fa', '761', '1995-04-08', '1975-02-13', '2005-01-15', '317 Fabien Court', 'Obcaecati laboris li', '71', '38', 'gabujewex@mailinator.com', 657, '2001-01-22', '2010-05-28', 'Barry Vaughan', 'dewa@mailinator.com', '579', 'Corrupti tempora vo', 'Quis labore nulla am', 'Byrd Green Plc', 892, 'nasibepode@mailinator.com', '718', 'mid', 'Veniam itaque omnis', 'Occaecat magna iure ', 'At dignissimos dolor', '5645_para1.png', '2023-03-28 23:15:38', '2023-03-28 23:16:05'),
(18, 16, 'Martena', 'Louis Schroeder', 'Hays', 'Enim et ea sit amet', 'Ex reiciendis omnis ', '540', '1989-04-09', '2009-04-12', '1977-04-30', '22 Oak Boulevard', 'Neque omnis molestia', '11', '26', 'xakysifyfa@mailinator.com', 508, '1984-06-03', '2022-02-01', 'Mona Garcia', 'kirebovi@mailinator.com', '167', 'Facere eveniet omni', 'Cillum do nostrum si', 'Powers Klein Inc', 377, 'fohew@mailinator.com', '498', 'expert', 'Excepturi et amet a', 'Aut est doloremque ', 'Provident quia sed ', '9142_para2.png', '2023-03-28 23:15:38', '2023-03-28 23:16:05'),
(19, 16, 'Lucas', 'Brock Hicks', 'Phelps', 'Rerum irure voluptat', 'Consequuntur dolore ', '643', '2008-03-09', '1971-08-05', '2005-07-17', '415 East Nobel Road', 'Cum aut excepteur ha', '96', '12', 'pemigoxyw@mailinator.com', 482, '2012-09-12', '2020-06-28', 'Mark Richards', 'hupi@mailinator.com', '228', 'Qui consequatur Non', 'Porro dicta officia ', 'Murray Maddox Plc', 945, 'vexamyj@mailinator.com', '931', 'mid', 'Aliqua Dolore vero ', 'Dignissimos recusand', 'Magnam et eiusmod il', '7163_para3.png', '2023-03-28 23:15:38', '2023-03-28 23:16:05'),
(20, 17, 'Blake', 'Quyn Duffy', 'Richardson', 'Ipsa deserunt dolor', 'Minima Nam ipsam qui', '80', '1989-07-18', '2016-08-24', '2020-09-11', '32 East Milton Drive', 'Corrupti maiores qu', '9', '25', 'sulajimit@mailinator.com', 15, '1990-02-01', '1985-05-16', 'Dorothy Dejesus', 'gygejynix@mailinator.com', '112', 'Id est excepturi b', 'Dolores corrupti cu', 'Mccullough Camacho Inc', 376, 'syfaba@mailinator.com', '934', 'mid', 'Quisquam fuga Optio', 'Assumenda est id il', 'Ut temporibus perfer', NULL, '2023-03-29 01:07:09', '2023-03-29 01:07:09');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `dietary` longtext DEFAULT NULL,
  `allergies` longtext DEFAULT NULL,
  `medical_condition` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `room` varchar(255) DEFAULT NULL,
  `tent` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `trip_id`, `name`, `slug`, `dietary`, `allergies`, `medical_condition`, `status`, `room`, `tent`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'grp-1679894627', 'grp-1679894627', 'Illo consequatur aut', 'Esse veniam adipisc', 'Enim sunt doloremque', 0, NULL, NULL, NULL, '2023-03-26 23:38:47', '2023-03-26 23:38:58'),
(2, 2, 'grp-1679894920', 'grp-1679894920', 'Esse est excepturi s', 'Voluptatem nisi face', 'Ut illo necessitatib', 0, NULL, NULL, NULL, '2023-03-26 23:43:40', '2023-03-26 23:43:51'),
(3, 3, 'grp-1679895268', 'grp-1679895268', 'Incididunt qui sit', 'Et est autem invento', 'Qui possimus commod', 1, NULL, NULL, '2023-03-27 03:09:39', '2023-03-26 23:49:28', '2023-03-27 03:09:39'),
(4, 4, 'grp-1679897686', 'grp-1679897686', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-27 00:29:46', '2023-03-27 00:29:46'),
(5, 5, 'grp-1679900675', 'grp-1679900675', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-27 01:19:35', '2023-03-27 01:19:35'),
(6, 6, 'grp-1679900822', 'grp-1679900822', 'Aut placeat maxime', 'Vel ut mollitia irur', 'Facilis laboris recu', 1, NULL, NULL, NULL, '2023-03-27 01:22:02', '2023-03-27 01:23:16'),
(7, 7, 'grp-1679919058', 'grp-1679919058', 'Eius lorem eius qui', 'Consequatur sequi d', 'Sint et sit dicta a', 1, NULL, NULL, NULL, '2023-03-27 06:25:58', '2023-03-27 06:26:17'),
(8, 8, 'grp-1679919096', 'grp-1679919096', 'Rerum qui et dicta n', 'Deleniti labore pari', 'Repudiandae est sol', 1, NULL, NULL, NULL, '2023-03-27 06:26:36', '2023-03-27 06:29:33'),
(9, 9, 'grp-1679919350', 'grp-1679919350', 'Inventore veniam ve', 'Eiusmod voluptatem', 'Dolore irure corrupt', 1, NULL, NULL, NULL, '2023-03-27 06:30:50', '2023-03-27 06:31:19'),
(10, 10, 'grp-1679978360', 'grp-1679978360', 'Culpa lorem culpa un', 'Enim officia deserun', 'Dicta atque architec', 1, NULL, NULL, NULL, '2023-03-27 22:54:20', '2023-03-27 22:58:06'),
(11, 11, 'grp-1679979027', 'grp-1679979027', 'Distinctio Temporib', 'Nulla autem fugiat', 'Enim rerum dolore pr', 1, NULL, NULL, NULL, '2023-03-27 23:05:27', '2023-03-27 23:06:27'),
(12, 12, 'grp-1679979642', 'grp-1679979642', 'Consequatur Officii', 'Elit a quos alias u', 'Impedit ut sed culp', 1, NULL, NULL, NULL, '2023-03-27 23:15:42', '2023-03-27 23:16:06'),
(13, 13, 'grp-1679995879', 'grp-1679995879', 'Mollitia non et magn', 'Magna anim nisi minu', 'Similique ab illo in', 1, NULL, NULL, NULL, '2023-03-28 03:46:19', '2023-03-28 03:46:49'),
(14, 14, 'grp-1679997736', 'grp-1679997736', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2023-03-28 04:17:16', '2023-03-28 04:17:16'),
(15, 15, 'grp-1680065954', 'grp-1680065954', 'Iure placeat ea et', 'Impedit asperiores', 'Qui eveniet volupta', 1, NULL, NULL, NULL, '2023-03-28 23:14:14', '2023-03-28 23:14:33'),
(16, 16, 'grp-1680066022', 'grp-1680066022', 'Autem tempor praesen', 'In aut ipsa dolorum', 'Debitis doloremque o', 1, NULL, NULL, NULL, '2023-03-28 23:15:22', '2023-03-28 23:16:05'),
(17, 17, 'grp-1680072720', 'grp-1680072720', 'Nihil molestiae offi', 'Velit est commodo p', 'Ut dolorum in nulla', 0, NULL, NULL, NULL, '2023-03-29 01:07:00', '2023-03-29 01:07:14');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_14_085816_create_trips_table', 1),
(7, '2023_03_14_112510_create_groups_table', 1),
(8, '2023_03_14_115822_create_customers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `extension_number` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `name`, `slug`, `extension_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Moses Davidson', 'moses-davidson', '90', 1, '2023-03-26 23:38:47', '2023-03-26 23:38:47'),
(2, 'Tiger Buckley', 'tiger-buckley', '735', 1, '2023-03-26 23:43:40', '2023-03-26 23:43:40'),
(3, 'Naomi Mejia', 'naomi-mejia', '496', 1, '2023-03-26 23:49:28', '2023-03-26 23:49:28'),
(4, 'Calista Haney', 'calista-haney', '557', 1, '2023-03-27 00:29:46', '2023-03-27 00:29:46'),
(5, 'Zephr House', 'zephr-house', '730', 1, '2023-03-27 01:19:35', '2023-03-27 01:19:35'),
(6, 'Abdul Mack', 'abdul-mack', '925', 1, '2023-03-27 01:22:02', '2023-03-27 01:22:02'),
(7, 'Bertha Sullivan', 'bertha-sullivan', '480', 1, '2023-03-27 06:25:58', '2023-03-27 06:25:58'),
(8, 'Vaughan Hancock', 'vaughan-hancock', '103', 1, '2023-03-27 06:26:36', '2023-03-27 06:26:36'),
(9, 'Irma Mcleod', 'irma-mcleod', '388', 1, '2023-03-27 06:30:50', '2023-03-27 06:30:50'),
(10, 'Wallace Riggs', 'wallace-riggs', '49', 1, '2023-03-27 22:54:20', '2023-03-27 22:54:20'),
(11, 'Yetta Mullins', 'yetta-mullins', '682', 1, '2023-03-27 23:05:27', '2023-03-27 23:05:27'),
(12, 'Ginger Holman', 'ginger-holman', '485', 1, '2023-03-27 23:15:42', '2023-03-27 23:15:42'),
(13, 'Alec Barnett', 'alec-barnett', '189', 1, '2023-03-28 03:46:19', '2023-03-28 03:46:19'),
(14, 'Angela Clements', 'angela-clements', '930', 1, '2023-03-28 04:17:15', '2023-03-28 04:17:15'),
(15, 'Adele Valdez', 'adele-valdez', '71', 1, '2023-03-28 23:14:14', '2023-03-28 23:14:14'),
(16, 'George Cantrell', 'george-cantrell', '915', 1, '2023-03-28 23:15:22', '2023-03-28 23:15:22'),
(17, 'Samantha Stephenson', 'samantha-stephenson', '555', 1, '2023-03-29 01:07:00', '2023-03-29 01:07:00');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'surakshyabhandari57@gmail.com', NULL, '$2y$10$k38d/IRe7ImKa8OgToGeSe6IWhqOgDXwiw0WzmfAzCCW3ROxU0TDy', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_group_id_foreign` (`group_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_trip_id_foreign` (`trip_id`);

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
-- Indexes for table `trips`
--
ALTER TABLE `trips`
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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
