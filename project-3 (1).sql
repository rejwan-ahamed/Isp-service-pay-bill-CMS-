-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 10:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `sno` int(3) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`sno`, `username`, `password`) VALUES
(1, 'absalom', 'idontknow'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(3) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `username`, `password`, `date`) VALUES
(1, 'rahi', '200991', '2021-11-30 14:03:03'),
(2, '', '', '2021-11-30 14:13:39'),
(3, '', '', '2021-11-30 14:15:43'),
(4, '', '', '2021-11-30 14:16:02'),
(5, '', 'rkl%DvkxqyI&@MZaEvYL', '2021-11-30 14:19:52'),
(6, '', '113@gmail.com', '2021-11-30 14:28:51'),
(7, 'rahi', '123', '2021-11-30 14:41:20'),
(8, 'hh', '123456', '2021-11-30 14:42:41'),
(9, '1', '1', '2021-11-30 14:43:59'),
(10, '1', '2', '2021-11-30 14:44:38'),
(11, 'hhh', '1234', '2021-11-30 14:45:10'),
(12, '22', '33', '2021-11-30 14:46:27'),
(13, '', '', '2021-11-30 14:58:02'),
(14, '', '', '2021-11-30 14:58:33'),
(15, '', '', '2021-11-30 14:58:37'),
(16, 'hh', 'hh', '2021-11-30 14:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `user-data`
--

CREATE TABLE `user-data` (
  `sno` int(4) NOT NULL,
  `user` varchar(200) NOT NULL,
  `trx` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `state` text NOT NULL,
  `methord` text NOT NULL,
  `package` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user-regester`
--

CREATE TABLE `user-regester` (
  `sno` int(4) NOT NULL,
  `phone` int(13) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-regester`
--

INSERT INTO `user-regester` (`sno`, `phone`, `name`, `password`, `email`, `address`, `date`) VALUES
(15, 1860414440, 'fahim shahariar', '123', 'fshahariar1@gmail.com', 'norpur', '2021-11-30 18:24:20'),
(18, 741, 'fahim shahariar', '741', 'fahim@gmail.com', 'nolpur', '2021-12-01 19:37:13'),
(19, 852, 'hamum helisa', '852', 'hummam@gmail.com', 'fokirpur', '2021-12-01 19:45:13'),
(21, 1725281740, 'rahi2', '20099172', 'rahi@gmail.com', 'Town Hall, Maijdee Court, Noakhali, Press office', '2021-12-01 20:07:36'),
(22, 1, 'goodman sara10', '1', 'deadpoolzrx@gmail.com', 'Town Hall, Maijdee Court, Noakhali, Press office', '2021-12-01 20:23:38'),
(23, 2, '2', '2', 'ee@gamil.com', 'Town Hall, Maijdee Court, Noakhali, Press office', '2021-12-02 19:25:14'),
(24, 3, '3', '3', 'ee@gamil.com', 'Town Hall, Maijdee Court, Noakhali, Press office', '2021-12-03 20:59:56'),
(25, 4, '4', '4', 'ee@gamil.com', 'Town Hall, Maijdee Court, Noakhali, Press office', '2021-12-03 21:00:52'),
(26, 5, '5', '5', 'ee@gamil.com', 'gyasdtgyg', '2021-12-03 21:02:23'),
(27, 10, '10', '10', 'ee@gamil.com', 'Town Hall, Maijdee Court, Noakhali, Press office', '2021-12-04 13:23:42'),
(28, 122, 'test t1', '20099172', 'rejwan@gmail.com', 'gyasdtgyg', '2021-12-04 19:10:47'),
(29, 2147483647, 'test t1', '20099172', 'rejwan', 'gyasdtgyg', '2021-12-05 13:36:20'),
(33, 4444, '1', '1', 'ee@gamil.com', 'gyasdtgyg', '2021-12-05 13:38:59');

-- --------------------------------------------------------

--
-- Table structure for table `userdata_backup`
--

CREATE TABLE `userdata_backup` (
  `sno` int(3) NOT NULL,
  `user` int(200) NOT NULL,
  `trx` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `state` text NOT NULL,
  `methord` text NOT NULL,
  `package` varchar(220) NOT NULL,
  `amount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user-data`
--
ALTER TABLE `user-data`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user-regester`
--
ALTER TABLE `user-regester`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `userdata_backup`
--
ALTER TABLE `userdata_backup`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user-data`
--
ALTER TABLE `user-data`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `user-regester`
--
ALTER TABLE `user-regester`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `userdata_backup`
--
ALTER TABLE `userdata_backup`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
