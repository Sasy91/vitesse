-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 04:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `camp_poe`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_check_in` datetime NOT NULL,
  `b_check_out` datetime NOT NULL,
  `b_date` datetime NOT NULL,
  `cd_id` varchar(50) NOT NULL,
  `childrens` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `paid_amount` double(10,2) NOT NULL,
  `audit` varchar(30) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_check_in`, `b_check_out`, `b_date`, `cd_id`, `childrens`, `adult`, `paid_amount`, `audit`) VALUES
(1, '2015-06-23 00:00:00', '2015-06-26 00:00:00', '2015-06-21 00:00:00', '1', 2, 2, 25000.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_linked`
--

CREATE TABLE IF NOT EXISTS `booking_linked` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_id` int(11) NOT NULL,
  `rm_id` int(11) NOT NULL,
  `cd_id` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking_linked`
--

INSERT INTO `booking_linked` (`id`, `b_id`, `rm_id`, `cd_id`) VALUES
(1, 1, 2, '1');

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
-- Table structure for table `home_sider`
--

CREATE TABLE IF NOT EXISTS `home_sider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) NOT NULL,
  `uploaded_by` varchar(100) NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `home_sider`
--

INSERT INTO `home_sider` (`id`, `url`, `uploaded_by`, `date`) VALUES
(1, '/resoures/img/1.png', '', '2015-06-12 10:33:01'),
(2, '/resoures/img/2.png', '', '2015-06-12 10:33:01'),
(3, '/resoures/img/3.png', '', '2015-06-12 10:33:01'),
(4, '/resoures/img/4.png', '', '2015-06-12 10:33:01');

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
  `rm_amount` double(10,2) NOT NULL,
  PRIMARY KEY (`rm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rm_id`, `rm_name`, `rm_comments`, `rm_cover_img`, `rm_available`, `rm_title`, `rm_detail`, `rm_amount`) VALUES
(1, 'SUITE 3', '', 'resoures/img/rooms/6_small.png', 0, '', 'Suite Two offers a sitting room and large bedroom with King Hästens bed. The suite shares a porch and seating area overlooking the hotel grounds with Suite Three. An additional list of the suite’s amenities is available here.', 360.50),
(2, 'SUITE 2', '', 'resoures/img/rooms/5_samll.png', 0, '', 'Suite Two offers a sitting room and large bedroom with King Hästens bed. The suite shares a porch and seating area overlooking the hotel grounds with Suite Three. An additional list of the suite’s amenities is available here.', 999.99),
(3, 'BANKER ROOM', '', 'resoures/img/rooms/4_small.png', 0, '', 'Suite Three sits at the heart of the historic main guest house. The bedroom has a King Hästens bed and the bathroom offers both a large soaking tub and separate walk-in shower. The suite shares a porch and seating area overlooking the lounge and hotel grounds with Suite Two.  Additional amenities are listed here.', 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `room_img_urls`
--

CREATE TABLE IF NOT EXISTS `room_img_urls` (
  `ril_id` int(11) NOT NULL AUTO_INCREMENT,
  `rm_id` int(11) NOT NULL,
  `img_type` varchar(20) NOT NULL,
  `ril_img_url` varchar(500) NOT NULL,
  `style_col` varchar(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  PRIMARY KEY (`ril_id`,`rm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `room_img_urls`
--

INSERT INTO `room_img_urls` (`ril_id`, `rm_id`, `img_type`, `ril_img_url`, `style_col`, `class`) VALUES
(1, 1, 'front', '/resoures/img/room_one/room_one_2.jpg', '3A', 'item active'),
(2, 1, 'front', '/resoures/img/room_one/room_one_3.jpg', '3B', 'item'),
(3, 1, 'front', '/resoures/img/room_one/room_one_4.jpg', '6C', 'item'),
(4, 1, 'front', '/resoures/img/room_one/room_one_5.png', '3D', 'item'),
(5, 1, 'front', '/resoures/img/room_one/room_one_6.jpg', '3E', 'item'),
(6, 1, 'front', '/resoures/img/room_one/room_one_7.jpg', '4F', 'item'),
(7, 1, 'front', '/resoures/img/room_one/room_one_8.jpg', '8G', 'item'),
(8, 1, 'cover', '/resoures/img/room_one/room_one_1.jpg', 'N/A', 'item');

-- --------------------------------------------------------

--
-- Table structure for table `room_parameters`
--

CREATE TABLE IF NOT EXISTS `room_parameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `room_parameters`
--

INSERT INTO `room_parameters` (`id`, `url`) VALUES
(1, 'resoures\\img\\2.png');

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
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `password`, `role`, `last_login`, `registerd_date`, `audit`, `name`) VALUES
(1, 'sameera@vitessesoft.com', '56fafa8964024efa410773781a5f9e93', 'admin', '2015-06-17 22:21:59', '2015-06-12 00:00:00', '::1', 'Mark William');
