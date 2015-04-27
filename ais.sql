-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2015 at 05:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ais`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'mahadev', '4138262dab0bccf8d829e6ad085c7d8b');

-- --------------------------------------------------------

--
-- Table structure for table `motor1_log`
--

CREATE TABLE IF NOT EXISTS `motor1_log` (
`id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor1_log`
--

INSERT INTO `motor1_log` (`id`, `start_time`, `end_time`) VALUES
(1, '2015-04-27 06:31:30', '2015-04-27 06:31:43'),
(2, '2015-04-27 12:15:35', '2015-04-27 19:25:41'),
(3, '2015-04-27 19:30:46', '2015-04-27 19:30:47'),
(4, '2015-04-27 19:30:47', '2015-04-27 19:30:47'),
(5, '2015-04-27 19:30:51', '2015-04-27 19:31:28'),
(6, '2015-04-27 19:32:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `motor1_status`
--

CREATE TABLE IF NOT EXISTS `motor1_status` (
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor1_status`
--

INSERT INTO `motor1_status` (`status`) VALUES
('ON');

-- --------------------------------------------------------

--
-- Table structure for table `motor2_log`
--

CREATE TABLE IF NOT EXISTS `motor2_log` (
`id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor2_log`
--

INSERT INTO `motor2_log` (`id`, `start_time`, `end_time`) VALUES
(1, '2015-04-27 06:34:29', '2015-04-27 06:34:34'),
(2, '2015-04-27 19:31:12', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `motor2_status`
--

CREATE TABLE IF NOT EXISTS `motor2_status` (
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor2_status`
--

INSERT INTO `motor2_status` (`status`) VALUES
('ON'),
('ON');

-- --------------------------------------------------------

--
-- Table structure for table `motor3_log`
--

CREATE TABLE IF NOT EXISTS `motor3_log` (
`id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor3_log`
--

INSERT INTO `motor3_log` (`id`, `start_time`, `end_time`) VALUES
(1, '2015-04-27 06:34:45', '2015-04-27 06:34:49'),
(2, '2015-04-27 19:23:38', '2015-04-27 07:28:07');

-- --------------------------------------------------------

--
-- Table structure for table `motor3_status`
--

CREATE TABLE IF NOT EXISTS `motor3_status` (
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor3_status`
--

INSERT INTO `motor3_status` (`status`) VALUES
('OFF'),
('OFF');

-- --------------------------------------------------------

--
-- Table structure for table `motor4_log`
--

CREATE TABLE IF NOT EXISTS `motor4_log` (
`id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor4_log`
--

INSERT INTO `motor4_log` (`id`, `start_time`, `end_time`) VALUES
(1, '2015-04-27 06:34:38', '2015-04-27 06:34:41'),
(2, '2015-04-27 19:26:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `motor4_status`
--

CREATE TABLE IF NOT EXISTS `motor4_status` (
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor4_status`
--

INSERT INTO `motor4_status` (`status`) VALUES
('ON'),
('ON');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor1_log`
--
ALTER TABLE `motor1_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor2_log`
--
ALTER TABLE `motor2_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor3_log`
--
ALTER TABLE `motor3_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motor4_log`
--
ALTER TABLE `motor4_log`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `motor1_log`
--
ALTER TABLE `motor1_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `motor2_log`
--
ALTER TABLE `motor2_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `motor3_log`
--
ALTER TABLE `motor3_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `motor4_log`
--
ALTER TABLE `motor4_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
