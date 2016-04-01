-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2016 at 12:13 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `User_ID` int(10) NOT NULL COMMENT 'Enter user id',
  `Time` varchar(30) NOT NULL COMMENT 'time'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='To store login attempts';

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `Registration No` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Enter registration no.',
  `Name` varchar(30) NOT NULL COMMENT 'Enter name',
  `E-mail` varchar(30) NOT NULL COMMENT 'Enter e-mail id',
  `Password` binary(60) NOT NULL COMMENT 'Enter password',
  PRIMARY KEY (`Registration No`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Table containing information about user' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`Registration No`, `Name`, `E-mail`, `Password`) VALUES
(1, 'test_user', 'test@example.com', '$2y$10$IrzYJi10j3Jy/K6jzSLQtOLif1wEZqTRQoK3DcS3jdnFEhL4fWM4G');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
