-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 04:46 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_staff`
--

CREATE TABLE `log_staff` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `employee_code` varchar(15) NOT NULL,
  `datetime_in` datetime NOT NULL,
  `datetime_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_staff`
--

INSERT INTO `log_staff` (`id`, `staff_id`, `employee_code`, `datetime_in`, `datetime_out`) VALUES
(1, 2, 'JEC2', '2018-07-18 23:24:40', '2018-07-18 23:38:46'),
(2, 1, 'JEC1', '2018-07-18 23:25:50', '2018-07-18 23:26:06'),
(3, 2, 'JEC2', '2018-07-18 23:35:48', '2018-07-18 23:38:46'),
(4, 3, 'JEC3', '2018-07-20 11:43:01', '2018-07-20 11:55:03'),
(5, 1, 'JEC1', '2018-07-23 16:45:39', '0000-00-00 00:00:00'),
(6, 2, 'JEC2', '2018-07-23 16:46:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_student`
--

CREATE TABLE `log_student` (
  `id` int(11) NOT NULL,
  `students_id` int(11) NOT NULL,
  `admission_no` varchar(16) NOT NULL,
  `datetime_in` datetime NOT NULL,
  `datetime_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_student`
--

INSERT INTO `log_student` (`id`, `students_id`, `admission_no`, `datetime_in`, `datetime_out`) VALUES
(1, 1, '1111', '2018-07-18 23:21:59', '2018-07-23 17:30:48'),
(2, 2, '2222', '2018-07-18 23:22:28', '2018-07-23 16:45:26'),
(3, 1, '1111', '2018-07-18 23:35:33', '2018-07-23 17:30:48'),
(4, 1, '1111', '2018-07-20 11:44:16', '2018-07-23 17:30:48'),
(5, 1, '1111', '2018-07-20 12:08:05', '2018-07-23 17:30:48'),
(6, 2, '2222', '2018-07-20 12:10:53', '2018-07-23 16:45:26'),
(7, 1, '1111', '2018-07-20 12:11:13', '2018-07-23 17:30:48'),
(9, 1, '1111', '2018-07-18 15:16:27', '2018-07-23 17:30:48'),
(10, 1, '1111', '2018-07-22 20:51:29', '2018-07-23 17:30:48'),
(11, 2, '2222', '2018-07-22 20:51:56', '2018-07-23 16:45:26'),
(12, 1, '1111', '2018-07-22 20:52:02', '2018-07-23 17:30:48'),
(13, 1, '1111', '2018-07-22 20:52:26', '2018-07-23 17:30:48'),
(14, 2, '2222', '2018-07-22 20:59:29', '2018-07-23 16:45:26'),
(15, 1, '1111', '2018-07-22 21:17:37', '2018-07-23 17:30:48'),
(16, 1, '1111', '2018-07-22 21:17:37', '2018-07-23 17:30:48'),
(17, 1, '1111', '2018-07-22 21:18:51', '2018-07-23 17:30:48'),
(18, 1, '1111', '2018-07-22 21:19:18', '2018-07-23 17:30:48'),
(19, 1, '1111', '2018-07-22 21:20:31', '2018-07-23 17:30:48'),
(20, 1, '1111', '2018-07-22 21:22:49', '2018-07-23 17:30:48'),
(21, 1, '1111', '2018-07-23 11:39:53', '2018-07-23 17:30:48'),
(22, 1, '1111', '2018-07-23 11:40:09', '2018-07-23 17:30:48'),
(23, 2, '2222', '2018-07-23 11:42:11', '2018-07-23 16:45:26'),
(24, 1, '1111', '2018-07-23 11:49:22', '2018-07-23 17:30:48'),
(25, 1, '1111', '2018-07-23 11:58:37', '2018-07-23 17:30:48'),
(26, 2, '2222', '2018-07-23 11:59:32', '2018-07-23 16:45:26'),
(27, 1, '1111', '2018-07-23 12:04:54', '2018-07-23 17:30:48'),
(28, 2, '2222', '2018-07-23 12:05:41', '2018-07-23 16:45:26'),
(29, 1, '1111', '2018-07-23 16:45:33', '2018-07-23 17:30:48'),
(30, 2, '2222', '2018-07-23 16:46:40', '0000-00-00 00:00:00'),
(31, 1, '1111', '2018-07-23 17:30:10', '2018-07-23 17:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `employee_code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `employee_code`, `name`, `department`) VALUES
(1, 'JEC1', 'VADAKKAN', 'MGM'),
(2, 'JEC2', 'maneesh', 'CSE'),
(3, 'JEC3', 'VADAKKAN', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `admission_no` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(5) NOT NULL,
  `sem` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_no`, `name`, `dept`, `sem`) VALUES
(1, '1111', 'sreerag', 'MRE', 'S2'),
(2, '2222', 'maneesh', 'CSE', 'S3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_staff`
--
ALTER TABLE `log_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_student`
--
ALTER TABLE `log_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admission_no` (`admission_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_staff`
--
ALTER TABLE `log_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_student`
--
ALTER TABLE `log_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
