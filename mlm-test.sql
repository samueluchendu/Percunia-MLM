-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 10, 2021 at 04:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlm-test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `password`) VALUES
(1, 'mlm', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
CREATE TABLE IF NOT EXISTS `income` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `day_bal` int(11) DEFAULT '0',
  `current_bal` int(11) DEFAULT '0',
  `total_bal` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `userid`, `day_bal`, `current_bal`, `total_bal`) VALUES
(1, 'user@tutorialvilla.com', 100, 100, 100),
(6, 'samu@gmail.com', 0, 0, 0),
(7, 'peacepac4good@gmail.com', 0, 0, 0),
(8, 'tobi@gmail.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `income_received`
--

DROP TABLE IF EXISTS `income_received`;
CREATE TABLE IF NOT EXISTS `income_received` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pin_list`
--

DROP TABLE IF EXISTS `pin_list`;
CREATE TABLE IF NOT EXISTS `pin_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'open',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pin_request`
--

DROP TABLE IF EXISTS `pin_request`;
CREATE TABLE IF NOT EXISTS `pin_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` enum('open','close') NOT NULL DEFAULT 'open',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pin_request`
--

INSERT INTO `pin_request` (`id`, `email`, `pin`, `date`, `status`) VALUES
(23, 'user@tutorialvilla.com', 658210, '2021-04-01', 'open'),
(24, 'user@tutorialvilla.com', 705785, '2021-04-01', 'open'),
(25, 'user@tutorialvilla.com', 179918, '2021-04-01', 'open'),
(26, 'user@tutorialvilla.com', 584565, '2021-04-14', 'open'),
(27, 'user@tutorialvilla.com', 392879, '2021-04-16', 'close'),
(28, 'user@tutorialvilla.com', 426376, '2021-05-04', 'close'),
(29, 'samu@gmail.com', 306025, '2021-05-04', 'close'),
(30, 'samu@gmail.com', 582401, '2021-05-08', 'open');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

DROP TABLE IF EXISTS `tree`;
CREATE TABLE IF NOT EXISTS `tree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `left` varchar(50) DEFAULT NULL,
  `right` varchar(50) DEFAULT NULL,
  `leftcount` int(11) DEFAULT '0',
  `rightcount` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `userid`, `left`, `right`, `leftcount`, `rightcount`) VALUES
(1, 'user@tutorialvilla.com', 'samu@gmail.com', 'peacepac4good@gmail.com', 2, 1),
(4, 'samu@gmail.com', 'tobi@gmail.com', '', 1, 0),
(5, 'peacepac4good@gmail.com', NULL, NULL, 0, 0),
(6, 'tobi@gmail.com', NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `account` varchar(20) NOT NULL,
  `under_userid` varchar(50) NOT NULL,
  `side` enum('left','right') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `userName`, `email`, `password`, `mobile`, `address`, `account`, `under_userid`, `side`) VALUES
(1, '', '', '', 'user@tutorialvilla.com', '123456', '9897883700', 'Gurgaon', '98978789789', '', 'left'),
(3, 'sam', 'sam', 'sammy', 'samu@gmail.com', '0000', '', '', '', 'user@tutorialvilla.com', 'left'),
(4, 'peace', 'adizue', 'peace', 'peacepac4good@gmail.com', '0000', '', '', '', 'user@tutorialvilla.com', 'right'),
(5, 'tobi', 'ade', 'tobby', 'tobi@gmail.com', '0000', '', '', '', 'samu@gmail.com', 'left');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
