-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2018 at 09:41 PM
-- Server version: 5.7.18
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maliceinwonderland`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

DROP TABLE IF EXISTS `applications`;
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(11) NOT NULL,
  `class` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainspec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offspec` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_on` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_info` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bosses`
--

DROP TABLE IF EXISTS `bosses`;
CREATE TABLE IF NOT EXISTS `bosses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `instance_id` int(11) NOT NULL,
  `npc_id` int(6) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `done` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bosses`
--

INSERT INTO `bosses` (`id`, `instance_id`, `npc_id`, `name`, `mode`, `done`, `created_at`, `updated_at`) VALUES
(1, 1, 31125, 'Archavon the Stone Watcher', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(2, 1, 33993, 'Emalon the Storm Watcher', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(3, 1, 35013, 'Koralon the Flame Watcher', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(4, 1, 38433, 'Toravon the Ice Watcher', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(10, 2, 15956, 'Anub\'Rekhan', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(12, 2, 15953, 'Grand Widow Faerlina', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(14, 2, 15952, 'Maexxna', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(16, 2, 15954, 'Noth the Plaguebringer', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(18, 2, 15936, 'Heigan the Unclean', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(20, 2, 16011, 'Loatheb', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(22, 2, 16061, 'Instructor Razuvious', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(24, 2, 16060, 'Gothik the Harvester', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(26, 2, 181366, 'The Four Horsemen', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(28, 2, 16028, 'Patchwerk', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(32, 2, 15932, 'Gluth', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(34, 2, 15928, 'Thaddius', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(36, 2, 15989, 'Sapphiron', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(38, 2, 15990, 'Kel\'Thuzad', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(40, 3, 28860, 'Sartharion', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(42, 4, 28859, 'Malygos', '10', 1, '2018-01-31 22:00:00', '2018-02-15 19:21:06'),
(44, 5, 33113, 'Flame Leviathan', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(46, 5, 33118, 'Ignis the Furnace Master', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(48, 5, 33186, 'Razorscale', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(50, 5, 33293, 'XT-002 Deconstructor', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(52, 5, 32857, 'Assembly of Iron', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(54, 5, 32930, 'Kologarn', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(56, 5, 33515, 'Auriaya', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(58, 5, 32906, 'Freya', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(60, 5, 32845, 'Hodir', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(62, 5, 33350, 'Mimiron', '10', 1, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(64, 5, 32865, 'Thorim', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(66, 5, 33271, 'General Vezax', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(68, 5, 33288, 'Yogg-Saron', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00'),
(70, 5, 32871, 'Algalon the Observer', '10', 0, '2018-01-31 22:00:00', '2018-01-31 22:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `instances`
--

DROP TABLE IF EXISTS `instances`;
CREATE TABLE IF NOT EXISTS `instances` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modes` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instances`
--

INSERT INTO `instances` (`id`, `name`, `modes`) VALUES
(1, 'Vault of Archavon', '[\"10\",\"25\"]'),
(2, 'Naxxramas', '[\"10\",\"25\"]'),
(3, 'The Obsidian Sanctum', '[\"10\",\"25\"]'),
(4, 'The Eye of Eternity', '[\"10\",\"25\"]'),
(5, 'Ulduar', '[\"10\",\"25\",\"10H\",\"25H\"]'),
(6, 'Onyxia\'s Lair', '[\"10\",\"25\"]'),
(7, 'Trial of the Crusader', '[\"10\",\"25\",\"10H\",\"25H\"]'),
(8, 'Icecrown Citadel', '[\"10\",\"25\",\"10H\",\"25H\"]'),
(9, 'The Ruby Sanctum', '[\"10\",\"25\",\"10H\",\"25H\"]');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_04_162248_create_oauth_identities_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

DROP TABLE IF EXISTS `specs`;
CREATE TABLE IF NOT EXISTS `specs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `class` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recruiting` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`id`, `class`, `name`, `color`, `recruiting`, `created_at`, `updated_at`) VALUES
(1, 'deathknight', 'blood', '#C41F3B', 0, '2018-02-14 18:42:34', '2018-02-15 18:23:53'),
(2, 'deathknight', 'unholy', '#C41F3B', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(3, 'deathknight', 'frost', '#C41F3B', 1, '2018-02-14 18:42:34', '2018-02-15 18:29:22'),
(4, 'druid', 'balance', '#FF7D0A', 1, '2018-02-14 18:42:34', '2018-02-15 18:25:06'),
(5, 'druid', 'feral_dps', '#FF7D0A', 0, '2018-02-14 18:42:34', '2018-02-14 18:59:45'),
(6, 'druid', 'feral_tank', '#FF7D0A', 0, '2018-02-14 18:42:34', '2018-02-15 18:23:59'),
(7, 'druid', 'restoration', '#FF7D0A', 0, '2018-02-14 18:42:34', '2018-02-15 18:25:05'),
(8, 'hunter', 'beastmastery', '#ABD473', 0, '2018-02-14 18:42:34', '2018-02-14 18:59:53'),
(9, 'hunter', 'survival', '#ABD473', 0, '2018-02-14 18:42:34', '2018-02-15 18:24:45'),
(10, 'hunter', 'markmanship', '#ABD473', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(11, 'mage', 'fire', '#69CCF0', 0, '2018-02-14 18:42:34', '2018-02-15 18:25:48'),
(12, 'mage', 'arcane', '#69CCF0', 0, '2018-02-14 18:42:34', '2018-02-15 18:25:45'),
(13, 'mage', 'frost', '#69CCF0', 0, '2018-02-14 18:42:34', '2018-02-15 18:25:45'),
(14, 'paladin', 'retribution', '#F58CBA', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(15, 'paladin', 'protection', '#F58CBA', 0, '2018-02-14 18:42:34', '2018-02-14 18:59:59'),
(16, 'paladin', 'holy', '#F58CBA', 0, '2018-02-14 18:42:34', '2018-02-15 18:25:22'),
(17, 'priest', 'shadow', '#FFFFFF', 0, '2018-02-14 18:42:34', '2018-02-15 18:24:28'),
(18, 'priest', 'holy', '#FFFFFF', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(19, 'priest', 'discipline', '#FFFFFF', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(20, 'rogue', 'combat', '#FFF569', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(21, 'rogue', 'mutilate', '#FFF569', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(22, 'rogue', 'subtetly', '#FFF569', 0, '2018-02-14 18:42:34', '2018-02-15 18:30:13'),
(23, 'shaman', 'enhacement', '#0070DE', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(24, 'shaman', 'restoration', '#0070DE', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(25, 'shaman', 'elemental', '#0070DE', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(26, 'warlock', 'affliction', '#9482C9', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(27, 'warlock', 'demonology', '#9482C9', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(28, 'warlock', 'destruction', '#9482C9', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(29, 'warrior', 'arms', '#C79C6E', 0, '2018-02-14 18:42:34', '2018-02-15 18:25:16'),
(30, 'warrior', 'fury', '#C79C6E', 1, '2018-02-14 18:42:34', '2018-02-14 18:42:34'),
(31, 'warrior', 'protection', '#C79C6E', 0, '2018-02-14 18:42:34', '2018-02-15 18:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discriminator` int(5) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `mfa_enabled` tinyint(1) DEFAULT NULL,
  `permissions` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=389122697814343701 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `discriminator`, `avatar`, `verified`, `mfa_enabled`, `permissions`, `remember_token`, `created_at`, `updated_at`) VALUES
(389122697814343700, 'Superbone', 'incuk13@gmail.com', '$2y$10$.o34bfmkkC6L4jYKLCinquXgkvPEt.Fv948wA3C07x/Wpd1XUQMKC', 413, 'https://cdn.discordapp.com/avatars/389122697814343700/31b03965fc0766bf9c2322e91e33367c.png', 1, 0, 104324161, 'qDhBhtqPjT98IwmozLOnLHd7oljFc1yD0TmAGT362HjUPUhBt5Df1cAnxbC4', '2018-02-07 19:31:59', '2018-02-15 18:27:09'),
(249959877487624193, 'Tpynak', NULL, '$2y$10$RQ7NNiykXsaxYk75PpOPQe7kNb.XwcB7aLI.tUlhpYWeaLu2.DhoG', 3690, NULL, NULL, 0, 0, 'Ds2Yzhx28odUDCpxQvtjEAEmefYm5kSPNB8cDUiPPiIfOHbvGKhbHUSEPOzo', '2018-02-11 15:58:46', '2018-02-15 03:39:07'),
(227850658240266243, 'Eyedea', NULL, '$2y$10$6Q58nIN4Z469q5gmkQJz7.7qx60208x8fuaKX/ybhaOsAj2gLYuD.', 6116, 'https://cdn.discordapp.com/avatars/227850658240266243/88ae5abb8bb20e7b66eeb8eab5ba7280.png', NULL, 0, 104324161, 'pqVhziJB8rVDMcsO39URaeJhTGRkIJOiyS8PH67zg8VfPSKe2C2MIVrvnQJc', '2018-02-14 19:17:43', '2018-02-15 18:25:02'),
(211103328686440449, 'Sacred', NULL, '$2y$10$/5pY4W9KKXztyqRGQrlm6.cAuR0qgKRTeEqYaCgatTkXknbhoH5VG', 7569, 'https://cdn.discordapp.com/avatars/211103328686440449/9f2101e4f23174d5be5757de9db3e673.png', NULL, 0, 2146958591, 'OM5U860htjmLXlWKeM7ahWm3D2oiifF4jqBiytF9m9qZWYVGe80XVbJ8rmXJ', '2018-02-15 18:23:24', '2018-02-15 18:23:24'),
(272286193964548096, 'Jessikka', NULL, '$2y$10$Lf0I6.tZFeO.P5S4knPmK.KxcPM2a.WNsZHkkX3Fiz.bjfUdTEHHG', 1303, 'https://cdn.discordapp.com/avatars/272286193964548096/24b6626bd57d43a3108801981193fd8d.png', NULL, 0, 104324161, '89xOtpoSs7pr4uWzOFUKxJ2Pc9njBPHzxNdsuKPjBiKxRjrWvDkmohVlxQBX', '2018-02-15 18:47:03', '2018-02-15 18:47:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
