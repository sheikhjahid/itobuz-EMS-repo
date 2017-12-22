-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2017 at 04:50 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itobuz-EMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(50) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `status`) VALUES
(1, 'admin', 1),
(7, 'Team Leader', 1),
(8, 'Team Member', 1),
(9, 'Chief Executive Officer', 1),
(10, 'Chief Technical Officer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(50) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `status`) VALUES
(1, 'admin', 1),
(2, 'PHP', 1),
(3, 'Front End', 1),
(4, 'Back End', 1),
(5, 'Word Press', 1),
(6, 'JavaScript', 1),
(7, 'Elegant Themes', 1),
(8, 'Quality Analyst', 1),
(9, 'Human Resource', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user-image`
--

CREATE TABLE `user-image` (
  `id` int(11) NOT NULL,
  `image_path` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-image`
--

INSERT INTO `user-image` (`id`, `image_path`, `user_id`, `status`) VALUES
(2, 'sheikh_jahid_profile4.jpg', 1, 0),
(3, 'sheikh_jahid_profile5.jpg', 1, 0),
(4, 'sheikh_jahid_profile6.jpg', 1, 0),
(5, 'sheikh_jahid_profile7.jpg', 1, 0),
(6, 'sheikh_jahid_profile8.jpg', 1, 0),
(14, 'tristup_ghosh_profile.jpg', 13, 0),
(15, 'mausam_profile.jpg', 14, 1),
(16, 'jin_kazama_profile.jpg', 15, 1),
(17, 'saheen_khatoon_profile.jpg', 16, 0),
(27, 'sheikh_jahid_profile9.jpg', 1, 0),
(28, 'saheen_khatoon_profile1.jpg', 16, 1),
(29, 'sheikh_jahid_profile10.jpg', 1, 1),
(30, 'tristup_ghosh_profile.jpg', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user-login`
--

CREATE TABLE `user-login` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `login` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `logout` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-login`
--

INSERT INTO `user-login` (`id`, `user_email`, `login`, `logout`, `status`) VALUES
(4, 'jahid@itobuz.com', '2017-12-08 05:41:51', NULL, 'failed'),
(6, 'root', '2017-12-08 05:59:43', NULL, 'failed'),
(7, 'jahid@itobuz.com', '2017-12-08 06:01:12', NULL, 'success'),
(8, 'root', '2017-12-08 06:12:25', NULL, 'failed'),
(9, 'jahid@itobuz.com', '2017-12-08 06:13:34', NULL, 'success'),
(10, 'jahid@itobuz.com', '2017-12-08 06:16:46', NULL, 'success'),
(11, 'jahid@itobuz.com', '2017-12-08 06:33:33', NULL, 'failed'),
(12, 'jahid@itobuz.com', '2017-12-08 06:33:45', NULL, 'success'),
(13, 'jahid@itobuz.com', '2017-12-08 06:43:42', NULL, 'success'),
(14, 'jahid@itobuz.com', '2017-12-08 06:44:28', NULL, 'success'),
(15, 'jahid@itobuz.com', '2017-12-08 06:52:36', NULL, 'success'),
(16, 'jahid@itobuz.com', '2017-12-08 07:24:33', NULL, 'success'),
(17, 'jahid@itobuz.com', '2017-12-08 07:39:51', NULL, 'success'),
(18, 'jahid@itobuz.com', '2017-12-08 07:46:52', NULL, 'success'),
(19, 'jahid@itobuz.com', '2017-12-08 09:19:40', NULL, 'success'),
(20, 'jahid@itobuz.com', '2017-12-08 09:35:50', NULL, 'success'),
(21, 'jahid@itobuz.com', '2017-12-08 09:36:37', NULL, 'failed'),
(22, 'jahid@itobuz.com', '2017-12-08 09:40:33', NULL, 'failed'),
(23, 'jahid@itobuz.com', '2017-12-08 09:40:57', NULL, 'success'),
(24, 'jahid@itobuz.com', '2017-12-08 09:47:16', NULL, 'success'),
(25, 'jahid@itobuz.com', '2017-12-08 09:47:43', NULL, 'success'),
(26, 'root', '2017-12-08 11:26:21', NULL, 'failed'),
(27, 'jahid@itobuz.com', '2017-12-08 11:26:42', NULL, 'failed'),
(28, 'jahid@itobuz.com', '2017-12-08 11:27:34', NULL, 'success'),
(29, 'root', '2017-12-08 11:34:43', NULL, 'failed'),
(30, 'root', '2017-12-08 11:34:43', NULL, 'failed'),
(31, 'jahid@itobuz.com', '2017-12-08 11:34:52', NULL, 'success'),
(32, 'jahid@itobuz.com', '2017-12-08 11:38:14', NULL, 'success'),
(33, 'jahid@itobuz.com', '2017-12-08 11:38:50', NULL, 'success'),
(34, 'jahid@itobuz.com', '2017-12-08 13:41:28', NULL, 'failed'),
(35, 'jahid@itobuz.com', '2017-12-08 13:41:39', NULL, 'success'),
(36, 'jahid@itobuz.com', '2017-12-11 05:12:24', NULL, 'success'),
(37, 'jahid@itobuz.com', '2017-12-11 05:38:09', NULL, 'success'),
(38, 'tristup@itobuz.com', '2017-12-11 07:23:00', NULL, 'failed'),
(39, 'tristup@itobuz.com', '2017-12-11 07:23:25', NULL, 'failed'),
(40, 'jahid@itobuz.com', '2017-12-11 07:23:41', NULL, 'success'),
(41, 'jahid@itobuz.com', '2017-12-11 11:24:08', NULL, 'success'),
(42, 'jahid@itobuz.com', '2017-12-11 11:27:35', NULL, 'success'),
(43, 'jahi\\', '2017-12-11 11:28:17', NULL, 'failed'),
(44, 'jahid@itobuz.com', '2017-12-11 11:28:29', NULL, 'success'),
(45, 'jahid@itobuz.com', '2017-12-11 13:38:59', NULL, 'success'),
(46, 'jahid@itobuz.com', '2017-12-12 05:50:19', NULL, 'success'),
(47, 'jahid@itobuz.com', '2017-12-12 12:20:07', NULL, 'success'),
(48, 'tristup@itobuz.com', '2017-12-12 12:21:57', NULL, 'failed'),
(49, 'jahid@itobuz.com', '2017-12-12 12:22:43', NULL, 'success'),
(50, 'jahid@itobuz.com', '2017-12-12 12:29:50', NULL, 'success'),
(51, 'jahid@itobuz.com', '2017-12-13 05:23:26', NULL, 'success'),
(52, 'jahid@itobuz.com', '2017-12-13 05:23:26', NULL, 'success'),
(53, 'jahid@itobuz.com', '2017-12-13 07:23:58', NULL, 'success'),
(54, 'tristup@itobuz.com', '2017-12-13 07:54:40', NULL, 'failed'),
(55, 'jahid@itobuz.com', '2017-12-13 07:54:52', NULL, 'success'),
(56, 'jahid@itobuz.com', '2017-12-13 10:35:04', NULL, 'success'),
(57, 'jahid@itobuz.com', '2017-12-15 05:06:34', NULL, 'success'),
(58, 'tristup@itobuz.com', '2017-12-15 05:46:05', NULL, 'failed'),
(59, 'jahid@itobuz.com', '2017-12-15 05:46:27', NULL, 'success'),
(60, 'tristup@itobuz.com', '2017-12-15 05:59:46', NULL, 'failed'),
(61, 'tristup@itobuz.com', '2017-12-15 06:00:18', NULL, 'failed'),
(62, 'jahid@itobuz.com', '2017-12-15 06:00:33', NULL, 'success'),
(63, 'trsitup@itobuz.com', '2017-12-15 06:03:31', NULL, 'failed'),
(64, 'jahid@itobuz.com', '2017-12-15 06:03:53', NULL, 'success'),
(65, 'jahid@itobuz.com', '2017-12-15 07:42:24', NULL, 'failed'),
(66, 'jahid@itobuz.com', '2017-12-15 07:42:56', NULL, 'failed'),
(67, 'jahid@itobuz.com', '2017-12-15 07:43:39', NULL, 'success'),
(68, 'tristup@itobuz.com', '2017-12-15 08:05:57', NULL, 'success'),
(69, 'jahid@itobuz.com', '2017-12-15 08:07:17', NULL, 'success'),
(70, 'mausam@gmail.com', '2017-12-15 08:16:19', NULL, 'failed'),
(71, 'mausam@gmail.com', '2017-12-15 08:16:37', NULL, 'failed'),
(72, 'tristup', '2017-12-15 08:16:58', NULL, 'failed'),
(73, 'tristup@itobuz.com', '2017-12-15 08:17:07', NULL, 'success'),
(74, 'tristup@itobuz.com', '2017-12-15 08:17:30', NULL, 'success'),
(75, 'shahid@gmail.com', '2017-12-15 08:18:09', NULL, 'success'),
(76, 'jahid@itobuz.com', '2017-12-15 08:18:42', NULL, 'success'),
(77, 'tristup@itobuz.com', '2017-12-15 10:12:36', NULL, 'success'),
(78, 'tristup@itobuz.com', '2017-12-15 10:15:24', NULL, 'success'),
(79, 'jahid@itobuz.com', '2017-12-15 10:20:43', NULL, 'success'),
(80, 'jahid@itobuz.com', '2017-12-15 10:45:04', NULL, 'success'),
(81, 'trsitup@itobuz.com', '2017-12-15 11:09:27', NULL, 'failed'),
(82, 'tristup@itobuz.com', '2017-12-15 11:09:45', NULL, 'success'),
(83, 'jahid@itobuz.com', '2017-12-15 11:15:04', NULL, 'success'),
(84, 'tristup@itobuz.com', '2017-12-15 11:25:37', NULL, 'success'),
(85, 'jahid@itobuz.com', '2017-12-15 11:27:52', NULL, 'success'),
(86, 'tristup@itobuz.com', '2017-12-15 11:31:26', NULL, 'success'),
(87, 'jahid@itobuz.com', '2017-12-15 11:39:26', NULL, 'success'),
(88, 'jahid@itobuz.com', '2017-12-15 11:50:04', NULL, 'success'),
(89, 'trsitup@itobuz.com', '2017-12-15 12:16:21', NULL, 'failed'),
(90, 'trsitup@itobuz.com', '2017-12-15 12:16:42', NULL, 'failed'),
(91, 'jahid@itobuz.com', '2017-12-15 12:17:01', NULL, 'success'),
(92, 'tristup@itobuz.com', '2017-12-15 12:18:14', NULL, 'success'),
(93, 'root', '2017-12-15 12:41:48', NULL, 'failed'),
(94, 'jahid@itobuz.com', '2017-12-15 12:42:01', NULL, 'success'),
(95, 'root', '2017-12-15 13:15:24', NULL, 'failed'),
(96, 'tristup@itobuz.com', '2017-12-15 13:15:40', NULL, 'success'),
(97, 'root', '2017-12-15 13:16:29', NULL, 'failed'),
(98, 'root', '2017-12-15 13:17:17', NULL, 'failed'),
(99, 'root', '2017-12-15 13:17:17', NULL, 'failed'),
(100, 'root', '2017-12-15 13:17:32', NULL, 'failed'),
(101, 'root', '2017-12-15 13:17:55', NULL, 'failed'),
(102, 'root', '2017-12-15 13:17:55', NULL, 'failed'),
(103, 'root', '2017-12-15 13:19:05', NULL, 'failed'),
(104, 'jahid@itobuz.com', '2017-12-15 13:23:56', NULL, 'failed'),
(105, 'jahid@itobuz.com', '2017-12-15 13:24:09', NULL, 'success'),
(106, 'jahid@itobuz.com', '2017-12-15 13:25:44', NULL, 'success'),
(107, 'root', '2017-12-15 13:29:54', NULL, 'failed'),
(108, 'root', '2017-12-15 13:29:57', NULL, 'failed'),
(109, 'root', '2017-12-15 13:31:26', NULL, 'failed'),
(110, 'root', '2017-12-15 13:32:32', NULL, 'failed'),
(111, 'root', '2017-12-15 13:33:08', NULL, 'failed'),
(112, 'jahid@itobuz.com', '2017-12-15 13:36:13', NULL, 'success'),
(113, 'jahid@itobuz.com', '2017-12-16 04:53:12', NULL, 'success'),
(114, 'jahid@itobuz.com', '2017-12-16 05:22:26', NULL, 'success'),
(115, 'jahid@itobuz.com', '2017-12-16 05:51:50', NULL, 'success'),
(116, 'root', '2017-12-16 05:52:00', NULL, 'failed'),
(117, 'root', '2017-12-16 05:57:43', NULL, 'failed'),
(118, 'root', '2017-12-16 05:57:50', NULL, 'failed'),
(119, 'root', '2017-12-16 05:57:55', NULL, 'failed'),
(120, 'root', '2017-12-16 05:59:42', NULL, 'failed'),
(121, 'root', '2017-12-16 05:59:57', NULL, 'failed'),
(122, 'root', '2017-12-16 06:04:18', NULL, 'failed'),
(123, 'root', '2017-12-16 06:05:14', NULL, 'failed'),
(124, 'root', '2017-12-16 06:05:43', NULL, 'failed'),
(125, 'jahid@itobuz.com', '2017-12-16 06:06:22', NULL, 'success'),
(126, 'root', '2017-12-16 06:07:20', NULL, 'failed'),
(127, 'root', '2017-12-16 06:09:55', NULL, 'failed'),
(128, 'jahid@itobuz.com', '2017-12-16 06:14:42', NULL, 'success'),
(129, 'jahid@itobuz.com', '2017-12-16 07:01:44', NULL, 'success'),
(130, 'root', '2017-12-16 07:44:25', NULL, 'failed'),
(131, 'jahid@itobuz.com', '2017-12-16 07:44:52', NULL, 'failed'),
(132, 'jahid@itobuz.com', '2017-12-16 07:45:03', NULL, 'failed'),
(133, 'jahid@itobuz.com', '2017-12-16 07:45:19', NULL, 'success'),
(134, 'jahid@itobuz.com', '2017-12-16 07:48:32', NULL, 'success'),
(135, 'root', '2017-12-16 08:53:18', NULL, 'failed'),
(136, 'jahid@itobuz.com', '2017-12-16 08:54:29', NULL, 'success'),
(137, 'jin@gmail.com', '2017-12-16 11:22:31', NULL, 'success'),
(138, 'jahid@itobuz.com', '2017-12-16 11:22:58', NULL, 'success'),
(139, 'root', '2017-12-16 11:44:47', NULL, 'failed'),
(140, 'root', '2017-12-16 11:45:02', NULL, 'failed'),
(141, 'root', '2017-12-16 11:46:29', NULL, 'failed'),
(142, 'root', '2017-12-16 11:47:00', NULL, 'failed'),
(143, 'root', '2017-12-16 11:47:24', NULL, 'failed'),
(144, 'root', '2017-12-16 11:48:04', NULL, 'failed'),
(145, 'root', '2017-12-16 11:48:25', NULL, 'failed'),
(146, 'root', '2017-12-16 11:48:36', NULL, 'failed'),
(147, 'root', '2017-12-16 11:50:33', NULL, 'failed'),
(148, 'root', '2017-12-16 11:51:15', NULL, 'failed'),
(149, 'root', '2017-12-16 11:51:35', NULL, 'failed'),
(150, 'root', '2017-12-16 11:52:18', NULL, 'failed'),
(151, 'root', '2017-12-16 11:53:04', NULL, 'failed'),
(152, 'root', '2017-12-16 11:53:57', NULL, 'failed'),
(153, 'jahid@itobuz.com', '2017-12-16 11:54:32', NULL, 'success'),
(154, 'jahid@itobuz.com', '2017-12-16 12:34:16', NULL, 'success'),
(155, 'root', '2017-12-16 13:00:17', NULL, 'failed'),
(156, 'jahid@itobuz.com', '2017-12-16 13:01:08', NULL, 'success'),
(157, 'tristup@itobuz.com', '2017-12-16 13:03:31', NULL, 'success'),
(158, 'jahid@itobuz.com', '2017-12-18 05:22:24', NULL, 'success'),
(159, 'jahid@itobuz.com', '2017-12-18 05:47:30', NULL, 'success'),
(160, 'jahid@itobuz.com', '2017-12-18 06:01:28', NULL, 'success'),
(161, 'jahid@itobuz.com', '2017-12-18 06:30:32', NULL, 'failed'),
(162, 'jahid@itobuz.com', '2017-12-18 06:31:01', NULL, 'success'),
(163, 'tristup@itobuz.com', '2017-12-18 07:42:19', NULL, 'success'),
(164, 'jahid@itobuz.com', '2017-12-18 07:42:53', NULL, 'success'),
(165, 'jahid@itobuz.com', '2017-12-18 09:47:22', NULL, 'success'),
(166, 'jahid@itobuz.com', '2017-12-18 09:49:59', NULL, 'success'),
(167, 'tristup@itobuz.com', '2017-12-18 12:00:32', NULL, 'success'),
(168, 'jahid@itobuz.com', '2017-12-18 12:00:52', NULL, 'success'),
(169, 'jahid@itobuz.com', '2017-12-18 12:51:50', NULL, 'success'),
(170, 'trsitup@itobuz.com', '2017-12-18 12:52:48', NULL, 'failed'),
(171, 'tristup@itobuz.com', '2017-12-18 12:53:04', NULL, 'success'),
(172, 'jahid@itobuz.com', '2017-12-18 13:32:18', NULL, 'success'),
(173, 'tristup@itobuz.com', '2017-12-18 13:34:52', NULL, 'success'),
(174, 'jahid@itobuz.com', '2017-12-18 13:36:57', NULL, 'success'),
(175, 'tristup@itobuz.com', '2017-12-18 13:41:16', NULL, 'success'),
(176, 'jahid@itobuz.com', '2017-12-19 04:58:48', NULL, 'success'),
(177, 'tristup@itobuz.com', '2017-12-19 05:28:01', NULL, 'success'),
(178, 'jahid@itobuz.com', '2017-12-19 05:32:56', NULL, 'success'),
(179, 'jahid@itobuz.com', '2017-12-19 07:59:21', NULL, 'success'),
(180, 'tristup@itobuz.com', '2017-12-19 08:02:39', NULL, 'success'),
(181, 'jahid@itobuz.com', '2017-12-19 08:02:58', NULL, 'success'),
(182, 'jahid@itobuz.com', '2017-12-19 08:15:46', NULL, 'success'),
(183, 'jahid@itobuz.com', '2017-12-19 09:48:38', NULL, 'failed'),
(184, 'jahid@itobuz.com', '2017-12-19 09:48:47', NULL, 'success'),
(185, 'jahid@itobuz.com', '2017-12-19 10:06:18', NULL, 'success'),
(186, 'tristup@itobuz.com', '2017-12-19 10:35:39', NULL, 'success'),
(187, 'jahid@itobuz.com', '2017-12-19 11:27:29', NULL, 'success'),
(188, 'jahid@itobuz.com', '2017-12-19 11:46:46', NULL, 'success'),
(189, 'jahid@itobuz.com', '2017-12-19 11:47:35', NULL, 'success'),
(190, 'tristup@itobuz.com', '2017-12-19 11:50:37', NULL, 'success'),
(191, 'jahid@itobuz.com', '2017-12-19 12:05:15', NULL, 'success'),
(192, 'saheen@gmail.com', '2017-12-19 12:10:26', NULL, 'success'),
(193, 'jahid@itobuz.com', '2017-12-19 12:11:46', NULL, 'success'),
(194, 'jahid@itobuz.com', '2017-12-20 05:07:46', NULL, 'success'),
(195, 'jahid@itobuz.com', '2017-12-20 05:18:57', NULL, 'success'),
(196, 'jahid@itobuz.com', '2017-12-20 06:19:21', NULL, 'success'),
(197, 'tristup@itobuz.com', '2017-12-20 09:54:52', NULL, 'success'),
(198, 'jahid@itobuz.com', '2017-12-20 12:04:20', NULL, 'success'),
(199, 'jahid@itobuz.com', '2017-12-20 12:55:31', NULL, 'success'),
(200, 'tristup@itobuz.com', '2017-12-20 13:23:47', NULL, 'failed'),
(201, 'tristup@itobuz.com', '2017-12-20 13:24:42', NULL, 'success'),
(202, 'jahid@itobuz.com', '2017-12-21 05:32:08', NULL, 'success'),
(203, 'jahid@itobuz.com', '2017-12-21 06:37:41', NULL, 'success'),
(204, 'jahid@itobuz.com', '2017-12-21 06:38:20', NULL, 'success'),
(205, 'jahid@itobuz.com', '2017-12-21 06:38:46', NULL, 'success'),
(206, 'jahid@itobuz.com', '2017-12-21 06:39:00', NULL, 'success'),
(207, 'jahid@itobuz.com', '2017-12-21 06:40:11', NULL, 'success'),
(208, 'jahid@itobuz.com', '2017-12-21 06:46:17', NULL, 'success'),
(209, 'jahid@itobuz.com', '2017-12-21 06:47:18', NULL, 'success'),
(210, 'tristup@itobuz.com', '2017-12-21 06:49:06', NULL, 'success'),
(211, 'jahid@itobuz.com', '2017-12-21 06:50:08', NULL, 'success'),
(212, 'jahid@itobuz.com', '2017-12-21 06:58:30', NULL, 'success'),
(213, 'jahid@itobuz.com', '2017-12-21 07:03:08', NULL, 'success'),
(214, 'roo', '2017-12-21 07:10:02', NULL, 'failed'),
(215, '', '2017-12-21 07:11:56', NULL, 'failed'),
(216, 'jahid@itobuz.com', '2017-12-21 07:12:38', NULL, 'success'),
(217, 'jahid@itobuz.com', '2017-12-21 07:13:17', NULL, 'success'),
(218, 'root', '2017-12-21 07:40:44', NULL, 'failed'),
(219, 'root', '2017-12-21 07:40:44', NULL, 'failed'),
(220, 'jahid@itobuz.com', '2017-12-21 07:40:53', NULL, 'success'),
(221, 'tristup@itobuz.com', '2017-12-21 07:47:38', NULL, 'failed'),
(222, 'tristup@itobuz.com', '2017-12-21 07:47:52', NULL, 'success'),
(223, 'tristup@itobuz.com', '2017-12-21 07:48:56', NULL, 'success'),
(224, 'jahid@itobuz.com', '2017-12-21 07:50:29', NULL, 'success'),
(225, 'jahid@itobuz.com', '2017-12-21 08:01:43', NULL, 'success'),
(226, 'jahid@itobuz.com', '2017-12-21 08:59:07', NULL, 'success'),
(227, 'tristup@itobuz.com', '2017-12-21 09:05:05', NULL, 'success'),
(228, 'tristup@itobuz.com', '2017-12-21 09:07:20', NULL, 'success'),
(229, 'tristup@itobuz.com', '2017-12-21 09:08:06', NULL, 'success'),
(230, 'tristup@itobuz.com', '2017-12-21 09:15:10', NULL, 'success'),
(231, 'jahid@itobuz.com', '2017-12-21 09:28:08', NULL, 'success'),
(232, 'jahid@itobuz.com', '2017-12-21 09:29:10', NULL, 'success'),
(233, 'tristup@itobuz.com', '2017-12-21 09:56:12', NULL, 'success'),
(234, 'tristup@itobuz.com', '2017-12-21 10:08:24', NULL, 'success'),
(235, 'tristup@itobuz.com', '2017-12-21 10:16:43', NULL, 'success'),
(236, 'tristup@itobuz.com', '2017-12-21 10:19:09', NULL, 'success'),
(237, 'jahid@itobuz.com', '2017-12-21 10:23:18', NULL, 'success'),
(238, 'jahid@itobuz.com', '2017-12-21 10:25:55', NULL, 'failed'),
(239, 'jahid@itobuz.com', '2017-12-21 10:26:12', NULL, 'success'),
(240, 'jahid@itobuz.com', '2017-12-21 10:27:01', NULL, 'success'),
(241, 'tristup@itobuz.com', '2017-12-21 10:31:33', NULL, 'success'),
(242, 'jahid@itobuz.com', '2017-12-21 10:32:05', NULL, 'success'),
(243, 'tristup@itobuz.com', '2017-12-21 10:34:50', NULL, 'success'),
(244, 'tristup@itobuz.com', '2017-12-21 10:35:35', NULL, 'success'),
(245, 'jahid@itobuz.com', '2017-12-21 10:37:06', NULL, 'success'),
(246, 'mausam@gmail.com', '2017-12-21 10:38:39', NULL, 'failed'),
(247, 'mausam@gmail.com', '2017-12-21 10:39:03', NULL, 'failed'),
(248, 'shahid@gmail.com', '2017-12-21 10:39:32', NULL, 'success'),
(249, 'shahid@gmail.com', '2017-12-21 10:40:01', NULL, 'success'),
(250, 'jin@gmail.com', '2017-12-21 10:42:01', NULL, 'success'),
(251, 'jin@gmail.com', '2017-12-21 10:43:40', NULL, 'success'),
(252, 'saheen@gmail.com', '2017-12-21 10:45:11', NULL, 'success'),
(253, 'saheen@gmail.com', '2017-12-21 10:46:38', NULL, 'success'),
(254, 'jahid@itobuz.com', '2017-12-21 10:54:13', NULL, 'success'),
(255, 'saheen@gmail.com', '2017-12-21 11:12:39', NULL, 'success'),
(256, 'tristup@itobuz.com', '2017-12-21 11:33:29', NULL, 'success'),
(257, 'jin@gmail.com', '2017-12-21 11:35:03', NULL, 'success'),
(258, 'jahid@itobuz.com', '2017-12-21 12:36:09', NULL, 'failed'),
(259, 'jahid@itobuz.com', '2017-12-21 12:36:20', NULL, 'success'),
(260, 'saheen@gmail.com', '2017-12-21 12:45:02', NULL, 'success'),
(261, 'jahid@itobuz.com', '2017-12-21 12:47:24', NULL, 'success'),
(262, 'jahid@itobuz.com', '2017-12-22 05:17:25', NULL, 'success'),
(263, 'jahid@itobuz.com', '2017-12-22 05:44:51', NULL, 'success'),
(264, 'saheen@gmail.com', '2017-12-22 09:52:51', NULL, 'success'),
(265, 'jahid@itobuz.com', '2017-12-22 09:57:05', NULL, 'success'),
(266, 'tristup@itobuz.com', '2017-12-22 11:04:13', NULL, 'success'),
(267, 'jahid@itobuz.com', '2017-12-22 11:04:42', NULL, 'success');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `status` int(50) NOT NULL DEFAULT '1',
  `team_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phone`, `address`, `email`, `password`, `status`, `team_id`, `role_id`) VALUES
(1, 'sheikh jahid', '9867346567', 'kolkata', 'jahid@itobuz.com', '5dcc5a5c27ab971ad554fb46a2a93df7', 1, 1, 1),
(13, 'tristup ghosh', '9867364531', 'pune', 'tristup@itobuz.com', '169f34a39dad9ddd077fa35f1947f7d4', 1, 3, 7),
(14, 'mausam', '9735476344', 'pune', 'shahid@gmail.com', '6991576685eefd76197ebd4740cfbd57', 1, 4, 8),
(15, 'jin kazama', '9837463743', 'gurgaon', 'jin@gmail.com', '3f7316202bbb870f5256ea5430ea6f1f', 1, 5, 7),
(16, 'saheen khatoon', '9937647276', 'thakurpukur', 'saheen@gmail.com', 'a5bb0b69d3363f498413e60dffd1d74a', 1, 4, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-image`
--
ALTER TABLE `user-image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user-login`
--
ALTER TABLE `user-login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `role_id` (`id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user-image`
--
ALTER TABLE `user-image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user-login`
--
ALTER TABLE `user-login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user-image`
--
ALTER TABLE `user-image`
  ADD CONSTRAINT `user-image_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `role_fk` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_fk` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
