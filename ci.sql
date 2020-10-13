-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 04:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_news`
--

CREATE TABLE `ci_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_news`
--

INSERT INTO `ci_news` (`id`, `title`, `content`, `slug`, `created_on`, `updated_on`) VALUES
(1, 'This is all about KFIN Solutions', 'This is test page <b>Need More</b> views.', 'this-is-all-about-kfin-solutions', '2020-10-07 12:35:50', '2020-10-07 14:29:21'),
(5, 'India\'s Covid cases cross 71-lakh mark with over 61 lakh recoveries', '<p>India\'s coronavirus tally on Monday crossed the 71-lakh mark with a spike of 66,732 new cases and 816 deaths reported in the last 24 hours, according to the Union Health Ministry.</p>\r\n<p>The total Covid cases now stands at 71,20,538 with 61,49,535 recoveries and 1,09,150 deaths.</p>\r\n<p>Among states, Maharashtra has reported 15,28,226 positive cases so far with 12,66,240 recoveries nad 40,349 fatalities.</p>', 'indias-covid-cases-cross-71-lakh-mark-with-over-61-lakh-recoveries', '2020-10-12 20:26:13', '2020-10-12 20:26:13'),
(6, 'Testing Add', 'testing add news', 'testing-add', '2020-10-12 20:34:28', '2020-10-12 20:34:28');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL,
  `email` varchar(155) NOT NULL,
  `pword` varchar(512) NOT NULL,
  `name` varchar(55) NOT NULL,
  `rst_token` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_on` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`id`, `email`, `pword`, `name`, `rst_token`, `created_on`, `updated_on`) VALUES
(1, 's.keerthi@123.com', '$2y$10$jKiYT02ffShCzgtg4raeY.RgS/qziz/mzpWY.EQ/zcUBbtrb1w6ai', 'Keerthivasan', '', '2020-10-11 18:09:36', '2020-10-11 18:09:36'),
(2, 'nrkumarsg@gmail.com', '$2y$10$EPgriiY/CUaOyGjHUbVQxO9V0RyAdKzK66BcUQDtKWrHyQA85a5rS', 'Kumar', '', '2020-10-13 19:31:42', '2020-10-13 19:31:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_news`
--
ALTER TABLE `ci_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_users`
--
ALTER TABLE `ci_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ci_news`
--
ALTER TABLE `ci_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ci_users`
--
ALTER TABLE `ci_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
