-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 12:42 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `manash_db6a6d8237ec63019edecad9d1956149`
--

CREATE TABLE `manash_db6a6d8237ec63019edecad9d1956149` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nubul_aleem`
--

CREATE TABLE `nubul_aleem` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nubul_manash`
--

CREATE TABLE `nubul_manash` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nubul_manash`
--

INSERT INTO `nubul_manash` (`id`, `username`, `msg`, `time_`) VALUES
(1, 'nubul', 'Hiii bro', '2017-11-22 09:43:08'),
(2, 'manash', 'whats up', '2017-11-22 09:43:17'),
(3, 'manash', 'sdojfdf', '2017-11-22 09:43:23'),
(4, 'nubul', 'dfghdfiog', '2017-11-22 09:43:43'),
(5, 'manash', 'ghgfh', '2017-11-22 09:43:53'),
(6, 'nubul', 'hethgff', '2017-11-22 09:43:54'),
(7, 'nubul', 'tzxdcfbdszcfbdafb', '2017-11-22 09:53:08'),
(8, 'nubul', 'asdfasdfasf', '2017-11-22 09:53:11'),
(9, 'nubul', 'asdfasdfasdf', '2017-11-22 09:53:13'),
(10, 'nubul', 'asdf', '2017-11-22 09:53:16'),
(11, 'nubul', 'asdfasdf', '2017-11-22 09:53:18'),
(12, 'nubul', 'gfjgfjf', '2017-11-25 08:41:34'),
(14, 'nubul', 'dfghdfgd', '2017-11-25 08:44:06'),
(15, 'nubul', 'asdfasdfasdf', '2017-11-25 08:53:39'),
(16, 'nubul', 'how are you', '2017-11-25 08:53:50'),
(17, 'nubul', 'how are you?', '2017-11-25 08:53:59'),
(18, 'nubul', 'asdfasfd', '2017-11-25 08:55:03'),
(19, 'nubul', 'dghmjghjgh', '2017-11-25 08:55:09'),
(20, 'nubul', 'adfa', '2017-11-25 09:04:13'),
(21, 'nubul', 'asdfasdf', '2017-11-29 14:41:14'),
(22, 'nubul', 'asdfasdf', '2017-11-29 14:41:17'),
(23, 'nubul', 'fffss', '2017-11-29 14:41:22'),
(24, 'nubul', 'how !2', '2017-11-29 14:48:44'),
(25, 'nubul', 'wht is dis place<', '2017-11-29 14:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `nubul_raj`
--

CREATE TABLE `nubul_raj` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nubul_tanmay`
--

CREATE TABLE `nubul_tanmay` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nubul_tanmay`
--

INSERT INTO `nubul_tanmay` (`id`, `username`, `msg`, `time_`) VALUES
(1, 'nubul', 'asdf', '2017-11-23 17:01:29'),
(2, 'tanmay', 'asdfasdff', '2017-11-23 17:06:55'),
(3, 'nubul', 'fuck offf', '2017-11-23 17:07:00'),
(4, 'tanmay', 'same here', '2017-11-23 17:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `nubul_tapas`
--

CREATE TABLE `nubul_tapas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tapas_manash`
--

CREATE TABLE `tapas_manash` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(60) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `time_` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `userkey` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `time_`, `userkey`) VALUES
(1, '', 'nubul', 'pass', '2017-11-15 16:47:15', ''),
(2, '', 'manash', 'pass', '2017-11-15 16:47:15', ''),
(3, '', 'tanmay', 'passd', '2017-11-17 10:20:52', ''),
(4, '', 'aleem', 'pass', '2017-11-17 17:08:30', ''),
(5, '', 'tapas', 'pass', '2017-11-17 20:50:59', ''),
(6, '', 'Raj', 'pass', '2017-11-18 07:15:00', ''),
(7, 'asdfasf@asdfasdfa', 'asdfasd', 'asdf', '2017-11-29 15:34:25', 'f79921bbae40a577928b76d2fc3edc2a'),
(8, 'trial@gami', 'something', 'some', '2017-11-29 15:37:38', '82cec96096d4281b7c95cd7e74623496'),
(9, 'asdfasf@asdfasdfa', 'fdf', 'asdf', '2017-11-29 15:38:34', '8e296a067a37563370ded05f5a3bf3ec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manash_db6a6d8237ec63019edecad9d1956149`
--
ALTER TABLE `manash_db6a6d8237ec63019edecad9d1956149`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nubul_aleem`
--
ALTER TABLE `nubul_aleem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nubul_manash`
--
ALTER TABLE `nubul_manash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nubul_raj`
--
ALTER TABLE `nubul_raj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nubul_tanmay`
--
ALTER TABLE `nubul_tanmay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nubul_tapas`
--
ALTER TABLE `nubul_tapas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tapas_manash`
--
ALTER TABLE `tapas_manash`
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
-- AUTO_INCREMENT for table `manash_db6a6d8237ec63019edecad9d1956149`
--
ALTER TABLE `manash_db6a6d8237ec63019edecad9d1956149`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nubul_aleem`
--
ALTER TABLE `nubul_aleem`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nubul_manash`
--
ALTER TABLE `nubul_manash`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `nubul_raj`
--
ALTER TABLE `nubul_raj`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nubul_tanmay`
--
ALTER TABLE `nubul_tanmay`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nubul_tapas`
--
ALTER TABLE `nubul_tapas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tapas_manash`
--
ALTER TABLE `tapas_manash`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
