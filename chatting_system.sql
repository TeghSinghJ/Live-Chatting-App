-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2024 at 08:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `ch`
--

CREATE TABLE `ch` (
  `id` int(11) NOT NULL,
  `msg` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ch`
--

INSERT INTO `ch` (`id`, `msg`) VALUES
(1, 'Hi'),
(2, 'Are youThere?'),
(3, 'Hmm'),
(4, 'Hi\n'),
(5, 'Are you ther?'),
(6, 'Hi'),
(7, 'Hi'),
(8, 'ff'),
(9, 'ddd'),
(10, 'Hi'),
(11, 'hi'),
(12, 'Hmm'),
(13, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `incoming_msg_id` int(11) NOT NULL,
  `outgoing_msg_id` int(11) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `ch_timestamp` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `ch_timestamp`) VALUES
(57, 1167046111, 700681104, 'Are you there?', '2021-06-12 04:40:58'),
(56, 1276770813, 700681104, 'Hi', '2021-06-12 04:37:59'),
(55, 1167046111, 700681104, 'Hmm', '2021-06-12 04:29:52'),
(54, 1167046111, 700681104, 'Are you there?', '2021-06-12 04:24:13'),
(53, 1167046111, 1230622217, 'Are you there?', '2021-06-11 12:50:53'),
(52, 1167046111, 1230622217, '', '2021-06-11 12:50:46'),
(51, 1167046111, 1230622217, 'hi', '2021-06-11 12:50:46'),
(50, 700681104, 1167046111, 'Hi', '2021-06-11 10:21:58'),
(49, 700681104, 1167046111, 'Bro', '2021-06-11 10:06:56'),
(48, 700681104, 1230622217, 'Hi', '2021-06-11 10:06:15'),
(47, 700681104, 1167046111, 'Uncle bro', '2021-06-11 09:42:27'),
(46, 700681104, 1167046111, 'Are you there', '2021-06-11 09:41:20'),
(45, 700681104, 1167046111, 'Hi', '2021-06-11 09:41:17'),
(58, 1167046111, 700681104, 'Are you there?', '2021-06-12 04:41:49'),
(59, 700681104, 1167046111, 'Hmm', '2021-06-12 05:09:42'),
(60, 700681104, 1167046111, 'hey', '2021-06-12 05:29:39'),
(61, 700681104, 1167046111, 'hey', '2021-06-12 05:29:44'),
(62, 700681104, 1167046111, 'Are you there?', '2021-06-12 05:29:55'),
(63, 700681104, 1167046111, 'hi', '2021-06-12 05:30:52'),
(64, 700681104, 1276770813, 'Whatsup Bro?', '2021-06-14 12:07:24'),
(65, 700681104, 1276770813, 'Bro', '2021-06-14 12:14:47'),
(66, 700681104, 1276770813, 'Love You', '2021-06-14 12:14:53'),
(67, 1167046111, 1276770813, 'Hi', '2021-06-14 12:16:55'),
(68, 1167046111, 1276770813, 'How are you?', '2021-06-14 12:17:03'),
(69, 700681104, 1276770813, 'Hi', '2021-06-14 12:48:03'),
(70, 700681104, 1167046111, 'Hmm', '2021-06-14 12:48:15'),
(71, 1276770813, 700681104, 'hmm', '2021-06-15 03:57:42'),
(72, 1276770813, 700681104, 'bro', '2021-06-15 03:57:58'),
(73, 1276770813, 700681104, 'cc', '2021-06-15 03:58:14'),
(74, 1276770813, 700681104, 'cc', '2021-06-15 03:58:17'),
(75, 1276770813, 700681104, 'ccfdfdf', '2021-06-15 03:58:23'),
(76, 1276770813, 700681104, 'Hi', '2021-06-15 05:32:52'),
(77, 1276770813, 700681104, 'Bro', '2021-06-15 05:32:58'),
(78, 700681104, 1167046111, 'Bro', '2021-06-15 06:34:16'),
(79, 700681104, 1167046111, 'Hello Vishal!', '2023-08-31 09:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `outgoing_id` varchar(50) NOT NULL,
  `incoming_id` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `outgoing_id`, `incoming_id`, `status`) VALUES
(20, '1276770813', '700681104', 'No'),
(19, '1276770813', '1167046111', 'No'),
(18, '700681104', '1167046111', 'Yes'),
(21, '700681104', '1167046111', 'Yes'),
(22, '1276770813', '1167046111', 'No'),
(24, '1276770813', '1167046111', 'No'),
(25, '1276770813', '1167046111', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(10) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_state` varchar(50) NOT NULL,
  `avatar` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Offline'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `user_name`, `user_pass`, `user_mobile`, `user_address`, `user_state`, `avatar`, `status`) VALUES
(6, 700681104, 'Juni Tegh Singh', '123', 7842236346, '#3-1-11,Kakatiya Colony', 'Telangana', '16.jpg', '2023-08-31 15:11:37'),
(7, 1167046111, 'Vishal Pariki', '123', 7456893254, '#4-143-Yadavnagar', 'Telangana', '20.jpg', 'Online'),
(9, 1276770813, 'Shwetha Sahi', '123', 123, '#4-143-Yadavnagar', 'Kerala', '5.jpg', '2021-06-15 11:21:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ch`
--
ALTER TABLE `ch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ch`
--
ALTER TABLE `ch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
