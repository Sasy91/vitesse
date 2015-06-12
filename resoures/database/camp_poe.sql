-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 06:24 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `camp_poe`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `rm_id` int(11) NOT NULL,
  `b_check_id` datetime NOT NULL,
  `b_check_out` datetime NOT NULL,
  `b_date` datetime NOT NULL,
  `audit` varchar(30) NOT NULL,
  PRIMARY KEY (`b_id`,`rm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `cd_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL,
  `cd_fname` varchar(100) NOT NULL,
  `cd_lname` varchar(100) NOT NULL,
  `cd_gender` varchar(50) NOT NULL,
  `cd_passport` varchar(50) NOT NULL,
  `cd_country` varchar(100) NOT NULL,
  `cd_paid_amt` double(10,2) NOT NULL,
  `cd_no_of_guest` int(11) NOT NULL,
  `cd_registerd_date` datetime NOT NULL,
  PRIMARY KEY (`cd_id`,`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `rm_id` int(11) NOT NULL AUTO_INCREMENT,
  `rm_name` varchar(200) NOT NULL,
  `rm_comments` varchar(1000) NOT NULL,
  `rm_cover_img` varchar(500) NOT NULL,
  `rm_available` int(2) NOT NULL,
  `rm_title` varchar(400) NOT NULL,
  `rm_detail` varchar(1000) NOT NULL,
  `rm_amount` double(5,2) NOT NULL,
  PRIMARY KEY (`rm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `room_img_urls`
--

CREATE TABLE IF NOT EXISTS `room_img_urls` (
  `ril_id` int(11) NOT NULL AUTO_INCREMENT,
  `rm_id` int(11) NOT NULL,
  `ril_img_url` varchar(500) NOT NULL,
  PRIMARY KEY (`ril_id`,`rm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `registerd_date` datetime NOT NULL,
  `audit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
