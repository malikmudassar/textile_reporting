-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 11:35 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akhtar_textile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(3) NOT NULL,
  `parent` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `class` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent`, `name`, `class`, `url`) VALUES
(2, 0, 'test', 'icon  icon-user', ''),
(3, 0, 'fucku', 'icon icon-cog', '');

-- --------------------------------------------------------

--
-- Table structure for table `email_notification`
--

CREATE TABLE `email_notification` (
  `id` int(11) NOT NULL,
  `user_id` int(14) NOT NULL,
  `profile_update` enum('Yes','No') NOT NULL,
  `image_update` enum('Yes','No') NOT NULL,
  `password_change` enum('Yes','No') NOT NULL,
  `project_AF` enum('Yes','No') NOT NULL,
  `module_AF` enum('Yes','No') NOT NULL,
  `task_AF` enum('Yes','No') NOT NULL,
  `daily_updates` enum('Yes','No') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_notification`
--

INSERT INTO `email_notification` (`id`, `user_id`, `profile_update`, `image_update`, `password_change`, `project_AF`, `module_AF`, `task_AF`, `daily_updates`) VALUES
(1, 1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(3, 3, 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(17, 18, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(8, 8, 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', 'Yes'),
(9, 9, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(10, 10, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(11, 11, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(12, 12, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(13, 13, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(14, 14, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(15, 15, 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No'),
(16, 16, 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No'),
(18, 19, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(19, 20, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(20, 21, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(21, 22, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(22, 23, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(23, 24, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(24, 25, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(25, 26, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(26, 27, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(27, 28, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(28, 29, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(29, 30, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(30, 31, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes'),
(31, 32, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(1) NOT NULL,
  `host` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `port` int(3) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `sent_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sent_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `reply_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `reply_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_settings`
--

INSERT INTO `email_settings` (`id`, `host`, `port`, `email`, `password`, `sent_email`, `sent_title`, `reply_email`, `reply_title`) VALUES
(1, 'gator4113.hostgator.com', 465, 'no-reply@duperty.com', 'MuhammaD@123', 'no-reply@duperty.com', 'Technologicx', 'no-reply@duperty.com', 'Technologicx');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(2) NOT NULL,
  `hash` varchar(100) NOT NULL,
  `status` enum('pending','approved') NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` text NOT NULL,
  `operating_system` varchar(20) NOT NULL,
  `device` varchar(20) NOT NULL,
  `location` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `hash`, `status`, `ip`, `browser`, `operating_system`, `device`, `location`, `date_time`) VALUES
(1, 'Webmaster', 'cyberasad09@gmail.com', 'aa52f7cc2781cab1c2822650d6f5c4e9', 1, 'fb85e5fd46706d4c7f87b4c0ab536e33', 'approved', '127.0.0.1', 'Firefox', 'Windows 8.1', 'Computer', '', '2017-08-14 18:39:05'),
(3, 'Malik Mudassar', 'malikmudassar@gmail.com', 'c4ca39eb28e16c1c915b880acd0a1f47', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(11, 'Talaal Sheikh', 's.talal@smartbaba.com', 'c4ca39eb28e16c1c915b880acd0a1f47', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(12, 'Bilal Qureshi', 'b.qureshi@smartbaba.com', 'c4ca39eb28e16c1c915b880acd0a1f47', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(13, 'Kamran Ali', 'kamran@smartbaba.com', 'ba1f9ae53862781c2aa5de6ca0b90f7c', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(8, 'Syed Saba', 'saba64@gmail.com', 'aa52f7cc2781cab1c2822650d6f5c4e9', 3, '', 'approved', '127.0.0.1', 'Firefox', 'Windows 8.1', 'Computer', '', '2017-08-14 18:39:05'),
(9, 'Unaib Amir', 'u.amir@smartbaba.com', '2ea9690876a001abf4f54bfa03eee0c1', 2, '', 'approved', '::1', 'Firefox', 'Windows 8.1', 'Computer', '', '2017-08-14 18:39:05'),
(10, 'Sehrish Manzoor', 's.manzoor@smartbaba.com', '03ea71020e5f520415b8f0f41b760865', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(14, 'Muhammad Zeeshan', 'm.zeeshan@smartbaba.com', 'c4ca39eb28e16c1c915b880acd0a1f47', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(15, 'Andrew Misra', 'andrew@smartbaba.com', '2ea9690876a001abf4f54bfa03eee0c1', 4, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(16, 'Arif Khan', 'arif@smartbaba.com', '2ea9690876a001abf4f54bfa03eee0c1', 1, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(17, 'Waqif', 'y.waqif@smartbaba.com', 'c4ca39eb28e16c1c915b880acd0a1f47', 1, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05'),
(18, 'Muhammad Fyaz', 'm.fyaz@smartbaba.com', 'c4ca39eb28e16c1c915b880acd0a1f47', 2, '', 'approved', '', '', '', '', '', '2017-08-14 18:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'employee'),
(3, 'client'),
(4, 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_notification`
--
ALTER TABLE `email_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `email_notification`
--
ALTER TABLE `email_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
