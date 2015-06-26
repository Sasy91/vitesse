-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2015 at 07:42 AM
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

CREATE DATABASE camp_poe;

CREATE TABLE IF NOT EXISTS `booking` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `booked_date` datetime NOT NULL,
  `no_of_guests` varchar(50) NOT NULL,
  `childrens` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `paid_amount` double(10,2) NOT NULL,
  `audit` varchar(30) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `customer_id`, `booked_date`, `no_of_guests`, `childrens`, `adult`, `payment_type`, `paid_amount`, `audit`) VALUES
(1, 0, '2015-06-21 00:00:00', '1', 2, 2, '', 25000.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_linked`
--

CREATE TABLE IF NOT EXISTS `booking_linked` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking_linked`
--

INSERT INTO `booking_linked` (`id`, `booking_id`, `room_id`, `check_in`, `check_out`) VALUES
(1, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, '/resoures/img/1.png', 'admin', '2015-06-12 10:33:01'),
(2, '/resoures/img/2.png', 'admin', '2015-06-12 10:33:01'),
(3, '/resoures/img/3.png', 'admin', '2015-06-12 10:33:01'),
(4, '/resoures/img/4.png', 'admin', '2015-06-12 10:33:01');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `discription` varchar(500) NOT NULL,
  `cost` double(10,2) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE IF NOT EXISTS `item_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `orderd_items`
--

CREATE TABLE IF NOT EXISTS `orderd_items` (
  `id` int(11) NOT NULL DEFAULT '0',
  `ord_id` int(11) NOT NULL,
  `item_id` varchar(200) NOT NULL,
  `qty` int(50) NOT NULL,
  `unit_price` double(10,2) NOT NULL,
  `total` double(10,2) NOT NULL,
  `audit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`ord_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `orderd_date` datetime NOT NULL,
  `audit` varchar(50) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registerd_users`
--

CREATE TABLE IF NOT EXISTS `registerd_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `id_type` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `registerd_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
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
  `rm_amount` double(10,2) NOT NULL,
  PRIMARY KEY (`rm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rm_id`, `rm_name`, `rm_comments`, `rm_cover_img`, `rm_available`, `rm_title`, `rm_detail`, `rm_amount`) VALUES
(1, 'SUITE 1', '', 'resoures/img/rooms/6_small.png', 0, '', 'Suite Two offers a sitting room and large bedroom with King HÃ¤stens bed. The suite shares a porch and seating area overlooking the hotel grounds with Suite Three. An additional list of the suiteâ€™s amenities is available here.', 360.50),
(2, 'SUITE 2', '', 'resoures/img/rooms/5_samll.png', 0, '', 'Suite Two offers a sitting room and large bedroom with King HÃ¤stens bed. The suite shares a porch and seating area overlooking the hotel grounds with Suite Three. An additional list of the suiteâ€™s amenities is available here.', 999.99),
(3, 'BANKER ROOM', '', 'resoures/img/rooms/4_small.png', 0, '', 'Suite Three sits at the heart of the historic main guest house. The bedroom has a King HÃ¤stens bed and the bathroom offers both a large soaking tub and separate walk-in shower. The suite shares a porch and seating area overlooking the lounge and hotel grounds with Suite Two.  Additional amenities are listed here.', 500.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
(8, 1, 'cover', '/resoures/img/room_one/cover.jpg', 'N/A', 'item'),
(9, 2, 'cover', '/resoures/img/room_two/cover.jpg', 'N/A', 'item active'),
(10, 2, 'front', '/resoures/img/room_two/pic1.jpg', '3A', 'item'),
(11, 2, 'front', '/resoures/img/room_two/pic2.jpg', '3B', 'item'),
(12, 2, 'front', '/resoures/img/room_two/pic4.jpg', '6C', 'item'),
(13, 2, 'front', '/resoures/img/room_two/pic6.jpg', '3D', 'item'),
(14, 2, 'front', '/resoures/img/room_two/pic5.png', '3E', 'item'),
(15, 2, 'front', '/resoures/img/room_two/pic7.jpg', '4F', 'item'),
(16, 2, 'front', '/resoures/img/room_two/pic3.jpg', '8G', 'item');

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
(1, 'resoures\img\2.png');

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
  `img_url` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `password`, `role`, `last_login`, `registerd_date`, `audit`, `name`, `img_url`) VALUES
(1, 'sameera@vitessesoft.com', '56fafa8964024efa410773781a5f9e93', 'admin', '2015-06-25 04:09:04', '2015-06-12 00:00:00', '::1', 'Mark William', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
