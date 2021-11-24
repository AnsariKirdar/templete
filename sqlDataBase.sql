-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2021 at 01:43 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `details`
--

-- --------------------------------------------------------

--
-- Table structure for table `companyDetails`
--

CREATE TABLE `companyDetails` (
  `id` int(11) NOT NULL,
  `CD_key` varchar(255) DEFAULT NULL,
  `CD_values` varchar(255) DEFAULT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `e_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `companyDetails`
--

TRUNCATE TABLE `companyDetails`;
--
-- Dumping data for table `companyDetails`
--

INSERT INTO `companyDetails` (`id`, `CD_key`, `CD_values`, `c_date`, `e_date`) VALUES
(1, 'address', 'adress', '2021-11-24 07:43:53', '2021-11-24 07:39:08'),
(2, 'mobile', 'mobile', '2021-11-24 07:43:53', '2021-11-24 07:43:53'),
(3, 'mail1', 'mail1', '2021-11-24 07:43:53', '2021-11-24 07:43:53'),
(4, 'mail2', 'mail2', '2021-11-24 07:43:53', '2021-11-24 07:43:53'),
(5, 'whatsapp', 'whatsapp', '2021-11-24 07:43:53', '2021-11-24 07:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `readStatus` int(1) NOT NULL DEFAULT 0,
  `c_date` timestamp NULL DEFAULT current_timestamp(),
  `e_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `contact_us`
--

TRUNCATE TABLE `contact_us`;
--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstName`, `lastName`, `phone`, `email`, `message`, `readStatus`, `c_date`, `e_date`) VALUES
(1, '', '', '8850537174', '', 'a', 0, '2021-11-24 12:01:31', '2021-11-24 12:01:31'),
(2, 'Kirdar', 'Ansari', '8850537174', 'anwerahmed1771998@gmail.com', 'a', 0, '2021-11-24 12:02:31', '2021-11-24 12:02:31'),
(3, 'Kirdar', 'Ansari', '8850537174', 'anwerahmed1771998@gmail.com', 'a', 0, '2021-11-24 12:04:44', '2021-11-24 12:04:44'),
(4, 'Kirdar', 'Ansari', '8850537174', 'anwerahmed1771998@gmail.com', '123', 0, '2021-11-24 12:07:38', '2021-11-24 12:07:38'),
(5, 'Kirdar', 'Ansari', '8850537174', 'anwerahmed1771998@gmail.com', 'ss', 0, '2021-11-24 12:08:52', '2021-11-24 12:08:52'),
(6, 'Kirdar', 'Ansari', '8850537174', 'anwerahmed1771998@gmail.com', 'aaa', 0, '2021-11-24 12:09:40', '2021-11-24 12:09:40'),
(7, 'Kirdar', 'Ansari', '8850537174', 'anwerahmed1771998@gmail.com', 'asa', 0, '2021-11-24 12:11:58', '2021-11-24 12:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stauts` int(1) DEFAULT 1,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `e_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `stauts`, `c_date`, `e_date`) VALUES
(1, 'admin', 'TW1kUGpCWktxNktEK3VEOGJJTUJvdz09', 'Admin', 1, '2021-11-24 10:46:57', '2021-11-24 10:46:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companyDetails`
--
ALTER TABLE `companyDetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
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
-- AUTO_INCREMENT for table `companyDetails`
--
ALTER TABLE `companyDetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
