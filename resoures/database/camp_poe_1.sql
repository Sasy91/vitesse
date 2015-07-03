-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2015 at 06:20 AM
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
(1, 0, '2015-06-21 00:00:00', '4', 2, 2, 'paypal', 25000.00, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `booking_linked`
--

INSERT INTO `booking_linked` (`id`, `booking_id`, `room_id`, `check_in`, `check_out`) VALUES
(1, 1, 2, '2015-06-22 00:00:00', '2015-06-28 00:00:00'),
(2, 2, 2, '2015-06-29 00:00:00', '2015-07-02 00:00:00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `cat_id`, `name`, `discription`, `cost`, `price`) VALUES
(1, 1, 'SAINT CECILIA ASHTRAY', 'Porcelain Saint Cecilia ashtray.', 4000.00, 4500.00),
(2, 1, 'DOG COLLAR', 'Deep blue leather dog collar made exclusively for the Hotel Saint Cecilia by New York leather designer Andrew McAteer.', 8000.00, 8500.00),
(3, 1, 'HOTEL SAINT CECILIA COMB', 'Custom HSC pocket comb.\r\nColors may vary.', 1250.00, 1500.00),
(4, 1, 'HOTEL SAINT KIMONO ROBE', 'The Hotel Saint Cecilia indigo robe is custom made of soft 100% cotton indigo-dyed batik fabric and is fashioned in the spirit of the Japanese yukata or summer robe. It is unlined and comes with a wide 3/4 length sleeve and sash belt. Unisex, one size fits all', 22500.00, 25000.00),
(5, 1, 'LEATHER WALLET HANDMADE', 'Cambria Harkey created this custom men''s wallet for the Hotel Saint Cecilia with supple navy cowhide specially ordered from the historic Horween Tannery in Chicago. Since 1905, Horween has been producing some of the highest quality leather available in the world.  The "Elton" bifold card case is perfect for slimming down your back pocket.', 15000.00, 18000.00),
(6, 1, 'ANVIL + AURA SPIKE NECKLACE', 'Four hands, two hearts, and endless hours of fun!  Local  designers Tiva Rose and Andrea Moore work to create one of a kind pieces using the finest materials.  \r\n<br>\r\n10k gold chain and beads with sterling silver spikes.', 80000.00, 99000.00),
(7, 1, 'INKWELL SHARPENER', 'Classic glass inkwell pencil sharpener. Screw cap, steel blade. Made in Germany. Available in three colors.', 1800.00, 2200.00),
(8, 1, 'HOTEL SAINT CECILIA SLIPPER', 'Cambria Harkey created slippers from scratch exclusively for the Hotel Saint Cecilia. With a slightly upturned toe, a soft leather upper, and a base of firm cowhide. These are the perfect slipper. Unisex sizing.\r\n<br>\r\nSmall is 9.5" in length 3.5" in width\r\n<br>\r\nMedium is 10" in length 3.25" in width\r\n<br>\r\nLarge is 11" in length 4" in width', 22000.00, 28000.00),
(9, 1, 'LEATHER FOLIO', 'Leather folio custom made by Dean Accessories of Los Angeles. The cover is supple leather, hand stamped with the hotel logo, and the interior contains one whipstitched pocket.\r\n<br>\r\n12 X 9.5"', 12000.00, 15000.00);

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
-- Table structure for table `item_images`
--

CREATE TABLE IF NOT EXISTS `item_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `img_type` varchar(50) NOT NULL,
  `img_url` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `item_images`
--

INSERT INTO `item_images` (`id`, `item_id`, `img_type`, `img_url`) VALUES
(1, 1, '1', 'resoures/img/shop/ash1.jpg'),
(2, 1, '2', 'resoures/img/shop/ash1.jpg'),
(3, 2, '1', 'resoures/img/shop/belt.jpg'),
(4, 3, '1', 'resoures/img/shop/comb1.jpg'),
(5, 3, '2', 'resoures/img/shop/comb2.jpg'),
(6, 3, '2', 'resoures/img/shop/comb3.jpg'),
(7, 3, '2', 'resoures/img/shop/comb4.jpg'),
(8, 4, '1', 'resoures/img/shop/kim1.jpg'),
(9, 4, '2', 'resoures/img/shop/kim2.jpg'),
(10, 5, '1', 'resoures/img/shop/lether1.jpg'),
(11, 5, '2', 'resoures/img/shop/lether2.jpg'),
(12, 5, '2', 'resoures/img/shop/lether3.jpg'),
(13, 6, '1', 'resoures/img/shop/nakless1.jpg'),
(14, 7, '1', 'resoures/img/shop/perfum1.jpg'),
(15, 7, '2', 'resoures/img/shop/perfum2.jpg'),
(16, 8, '1', 'resoures/img/shop/sho1.jpg'),
(17, 8, '2', 'resoures/img/shop/sho2.jpg'),
(18, 8, '2', 'resoures/img/shop/sho3.jpg'),
(19, 8, '2', 'resoures/img/shop/sho4.jpg'),
(20, 9, '1', 'resoures/img/shop/vol1.jpg'),
(21, 9, '2', 'resoures/img/shop/vol2.jpg');

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
-- Table structure for table `packagers`
--

CREATE TABLE IF NOT EXISTS `packagers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `short_detail` varchar(500) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `instructor` varchar(200) NOT NULL,
  `availability` varchar(10) NOT NULL,
  `amount` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `packagers`
--

INSERT INTO `packagers` (`id`, `name`, `short_detail`, `discription`, `instructor`, `availability`, `amount`) VALUES
(1, 'Surf Level One (Beginners)', '10 hours of surf lessons, free hire of equipment, 2 theory lessons and video analysis.', '5 x 2 hour beginner lessons with an internationally qualified surf instructor and beach lifeguard, free hire of surf equipment, 2 x theory lessons, video analysis.\r\nThis package is perfect if you are completely new to surfing. Over the course of the week, our experienced instructors will break down the basis of surfing to ensure you learn how to stand in a comfortable and safe environment. You will learn how the surfboard works, vital ocean and surfing safety, how to catch waves and tailored techniques to get to your feet. At Camp Poe we believe everyone is capable of catching and surfing on a wave, and we will be there to coach and encourage you all the way!', 'Till Rohrmann', '0', 150.00),
(2, 'Surf Level Two (Advance)', '10 hours of surf lessons, free hire of equipment, 2 theory lessons and video analysis. ', '5 x 2 hour improver lessons with an internationally qualified surf instructor and beach lifeguard, free hire of surf equipment, 2 x theory lessons, video analysis.\r\nIf you have already had several beginner lessons, and feel comfortable popping up and catching green, or unbroken waves, then this package is a great opportunity for you to take your surfing to the next level. You will have access to Camp Poe’s quiver of surf boards and a two hour session each day with a qualified surf coach who will be offering you invaluable tips as well as taking photos and video footage of your progress. ', 'Till Rohrmann', '0', 150.00),
(3, 'Surf and Yoga Week', '10 hours of surf lessons, free hire of equipment, 2 theory lessons and video analysis. 6 Yoga sessions.', 'N/A', 'N/A', '0', 190.00),
(4, 'Yoga Week', '6 yoga sessions.', 'N/A', 'N/A', '0', 50.00);

-- --------------------------------------------------------

--
-- Table structure for table `package_linked`
--

CREATE TABLE IF NOT EXISTS `package_linked` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registerd_users`
--

CREATE TABLE IF NOT EXISTS `registerd_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `id_type` varchar(50) NOT NULL,
  `id_number` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `registerd_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `registerd_users`
--

INSERT INTO `registerd_users` (`id`, `title`, `f_name`, `l_name`, `id_type`, `id_number`, `email`, `country`, `tel`, `user_name`, `password`, `registerd_date`) VALUES
(3, 'MR.', 'Sasika', 'Ransilu', 'NIC', '9145789671V', 'sameera7@outlook.com', 'SRI LANKA', '94758558596', 'rana0913', '6e9454559ab0f65c702f78d553acab30', '2015-06-26 21:06:20'),
(4, 'MR.', 'Sasika', 'Ransilu', 'NIC', '9145789671V', 'sameera9th@outlook.com', 'SRI LANKA', '94758558596', 'rana091', '56fafa8964024efa410773781a5f9e93', '2015-06-27 09:41:01'),
(5, 'MR.', 'Ruchika ', 'Gamage', 'NIC', 'N58985885', 'ruchika.newonline@gmail.com', 'SRI LANKA', '895874585', 'ruchi089', '9f1abb6c236af0b767f84a1adf905127', '2015-06-30 11:44:46');

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
  `max_no_of_guest` int(11) NOT NULL,
  `rm_detail` varchar(1000) NOT NULL,
  `rm_addtional_details` varchar(1000) NOT NULL,
  `rm_amount` double(10,2) NOT NULL,
  PRIMARY KEY (`rm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`rm_id`, `rm_name`, `rm_comments`, `rm_cover_img`, `rm_available`, `max_no_of_guest`, `rm_detail`, `rm_addtional_details`, `rm_amount`) VALUES
(1, 'SUITE 1', '', 'resoures/img/rooms/6_small.png', 5, 5, 'Suite Two offers a sitting room and large bedroom with King Hästens bed. The suite shares a porch and seating area overlooking the hotel grounds with Suite Three. An additional list of the suite’s amenities is available here.', '<br><br>\n<span style="font-weight: bold">Prices include:</span><br>\n7 x nights accommodation<br>\n7 x breakfast and<br>\n5x evening meal<br>\n1 x transfer to group evening meal<br> \nFree use of long-boards, snorkeling equipment<br>\nFree Wireless', 360.50),
(2, 'SUITE 2', '', 'resoures/img/rooms/5_samll.png', 5, 5, 'Suite Two offers a sitting room and large bedroom with King Hästens bed. The suite shares a porch and seating area overlooking the hotel grounds with Suite Three. An additional list of the suite’s amenities is available here.', '<br><br>\n<span style="font-weight: bold">Prices include:</span><br>\n7 x nights accommodation<br>\n7 x breakfast and<br>\n5x evening meal<br>\n1 x transfer to group evening meal<br> \nFree use of long-boards, snorkeling equipment<br>\nFree Wireless', 999.99),
(3, 'SUITE 3', '', 'resoures/img/rooms/4_small.png', 10, 10, 'Suite Three sits at the heart of the historic main guest house. The bedroom has a King Hästens bed and the bathroom offers both a large soaking tub and separate walk-in shower. The suite shares a porch and seating area overlooking the lounge and hotel grounds with Suite Two.  Additional amenities are listed here.', '<br><br>\n<span style="font-weight: bold">Prices include:</span><br>\n7 x nights accommodation<br>\n7 x breakfast and<br>\n5x evening meal<br>\n1 x transfer to group evening meal<br> \nFree use of long-boards, snorkeling equipment<br>\nFree Wireless', 500.00);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
(16, 2, 'front', '/resoures/img/room_two/pic3.jpg', '8G', 'item'),
(17, 3, 'cover', 'resoures/img/room_three/cover.jpg', 'N/A', 'item active'),
(18, 3, 'front', 'resoures/img/room_three/1.jpg', '3A', 'item'),
(19, 3, 'front', 'resoures/img/room_three/2.png', '3B', 'item'),
(20, 3, 'front', 'resoures/img/room_three/3.jpg', '6C', 'item'),
(21, 3, 'front', 'resoures/img/room_three/4.jpg', '3D', 'item'),
(22, 3, 'front', 'resoures/img/room_three/5.jpg', '3E', 'Item'),
(23, 3, 'front', 'resoures/img/room_three/6.jpg', '4F', 'Item'),
(24, 3, 'front', 'resoures/img/room_three/7.jpg', '8G', 'Item');

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
-- Table structure for table `room_types`
--

CREATE TABLE IF NOT EXISTS `room_types` (
  `id` int(11) NOT NULL,
  `type_name` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'sameera@vitessesoft.com', '56fafa8964024efa410773781a5f9e93', 'admin', '2015-07-01 06:08:58', '2015-06-12 00:00:00', '::1', 'Mark William', '');
