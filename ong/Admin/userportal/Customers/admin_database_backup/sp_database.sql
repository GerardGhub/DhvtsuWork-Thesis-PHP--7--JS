-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2014 at 07:06 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sp_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `category_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(40) NOT NULL,
  `category_price` varchar(50) NOT NULL,
  `category_capacity` varchar(40) NOT NULL,
  `category_image` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`, `category_price`, `category_capacity`, `category_image`) VALUES
(6, 'Table', '500', '10', 'Table.jpg'),
(7, 'Steel Cottage', '3342', '23', 'Steel cottage.jpg'),
(8, 'Family Villa', '2500', '30', 'Family Villa.jpg'),
(9, 'Kubo', '1553', '56', 'Kubo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_entrance`
--

CREATE TABLE IF NOT EXISTS `tb_entrance` (
  `entrace_id` int(15) NOT NULL AUTO_INCREMENT,
  `entrance_details` varchar(50) NOT NULL,
  `entrance_time` varchar(50) NOT NULL,
  PRIMARY KEY (`entrace_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_entrance`
--

INSERT INTO `tb_entrance` (`entrace_id`, `entrance_details`, `entrance_time`) VALUES
(1, 'Day entrance', '8:00am - 5:00pm'),
(2, 'Night entrance', '5:01pm -12:00am');

-- --------------------------------------------------------

--
-- Table structure for table `tb_entrance_swimmers`
--

CREATE TABLE IF NOT EXISTS `tb_entrance_swimmers` (
  `swimmer_id` int(15) NOT NULL AUTO_INCREMENT,
  `swimmer_details` varchar(50) NOT NULL,
  `swimmer_price` varchar(50) NOT NULL,
  `entrance_id` varchar(50) NOT NULL,
  PRIMARY KEY (`swimmer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_entrance_swimmers`
--

INSERT INTO `tb_entrance_swimmers` (`swimmer_id`, `swimmer_details`, `swimmer_price`, `entrance_id`) VALUES
(14, 'Adult', '2202', '1'),
(15, '31231', '23', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guest`
--

CREATE TABLE IF NOT EXISTS `tb_guest` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_reg` varchar(32) NOT NULL,
  `time_reg` varchar(32) NOT NULL,
  `image` varchar(50) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_guest`
--

INSERT INTO `tb_guest` (`id_user`, `lastname`, `name`, `email`, `phone_number`, `username`, `password`, `date_reg`, `time_reg`, `image`, `confirmcode`) VALUES
(1, 'Hunter', 'Creative', 'jade@yahoo.com', '9213131314', 'hunter1990', '5f4dcc3b5aa765d61d8327deb882cf99', '2014-09-01', '8:42:50 A.M.', 'default_avatar.jpg', 'y'),
(2, 'Magic', 'Jade', 'kingdom@yahoo.com', '9213131314', 'kingdom', '5f4dcc3b5aa765d61d8327deb882cf99', '2014-09-01', '8:47:08 A.M.', 'default_avatar.jpg', '2e1a30075f498e2b6cdbacafbe8f0439'),
(3, 'Gdsgdsgsd', 'Fdsgsd', 'kringcarl_j@yahoo.com', '9213131314', 'jenny123', '5f4dcc3b5aa765d61d8327deb882cf99', '2014-09-01', '10:34:10 A.M.', 'default_avatar.jpg', 'f6cb8f62f12420df43fc7f4e4ad5a47d');

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE IF NOT EXISTS `tb_message` (
  `message_id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_send` varchar(50) NOT NULL,
  `time_send` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`message_id`, `name`, `email`, `contact_no`, `message`, `date_send`, `time_send`) VALUES
(4, 'Michael', 'kringcarl_j@yahoo.com', '9213131314', 'kfsd dsfdf dsfds', '2014-08-31', '2:55:35 A.M.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_promo`
--

CREATE TABLE IF NOT EXISTS `tb_promo` (
  `promo_id` int(15) NOT NULL AUTO_INCREMENT,
  `promo_code` varchar(50) NOT NULL,
  `promo` varchar(30) NOT NULL,
  `promo_discount` varchar(50) NOT NULL,
  `swimmer_id` varchar(15) NOT NULL,
  PRIMARY KEY (`promo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_promo`
--

INSERT INTO `tb_promo` (`promo_id`, `promo_code`, `promo`, `promo_discount`, `swimmer_id`) VALUES
(12, '6B2D6', '20-30 person', '23212', '14');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservation`
--

CREATE TABLE IF NOT EXISTS `tb_reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `roomID` int(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `arrival` varchar(50) DEFAULT NULL,
  `departure` varchar(50) DEFAULT NULL,
  `day_no` int(25) NOT NULL,
  `payable` int(11) NOT NULL,
  `status_id` varchar(15) NOT NULL,
  `booked` date NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tb_reservation`
--

INSERT INTO `tb_reservation` (`reservation_id`, `roomID`, `id_user`, `arrival`, `departure`, `day_no`, `payable`, `status_id`, `booked`, `confirmation`) VALUES
(1, 44, 1, '09/11/2014', '09/13/2014', 2, 6684, '4', '2014-09-01', 'MVYBT2EPNV'),
(2, 68, 1, '09/11/2014', '09/13/2014', 2, 5000, '4', '2014-09-01', 'WDB5M5WPDU'),
(3, 69, 1, '09/11/2014', '09/13/2014', 2, 5000, '4', '2014-09-01', 'FGADNMPRGF'),
(4, 78, 1, '09/11/2014', '09/13/2014', 2, 5000, '4', '2014-09-01', 'WNIATVTRRZ'),
(5, 79, 1, '09/11/2014', '09/13/2014', 2, 5000, '4', '2014-09-01', 'Q43NEWCA8S'),
(6, 67, 2, '09/11/2014', '09/13/2014', 2, 5000, '3', '2014-09-01', 'SQXBQBVKFJ'),
(7, 77, 2, '09/11/2014', '09/13/2014', 2, 5000, '3', '2014-09-01', 'DS3NM33I5A'),
(8, 80, 2, '09/11/2014', '09/13/2014', 2, 5000, '3', '2014-09-01', 'TWQOHQKFGS'),
(9, 68, 3, '09/07/2014', '09/10/2014', 3, 7500, '1', '2014-09-01', 'FC7NQYTAZ8'),
(10, 77, 3, '09/07/2014', '09/10/2014', 3, 7500, '1', '2014-09-01', '4ZY8KHOOB5'),
(11, 78, 3, '09/07/2014', '09/10/2014', 3, 7500, '1', '2014-09-01', 'X7SEVTQJED');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rooms`
--

CREATE TABLE IF NOT EXISTS `tb_rooms` (
  `roomID` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(30) NOT NULL,
  `category_id` int(15) NOT NULL,
  PRIMARY KEY (`roomID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `tb_rooms`
--

INSERT INTO `tb_rooms` (`roomID`, `room_name`, `category_id`) VALUES
(20, 'S-VBA', 7),
(42, 'T-3YS', 6),
(36, 'T-65V', 6),
(46, 'T-R5Y', 6),
(47, 'T-WIU', 6),
(44, 'S-M8R', 7),
(48, 'T-2KW', 6),
(53, 'T-I4U', 6),
(55, 'T-GFX', 6),
(64, 'F-02A', 8),
(65, 'F-7QU', 8),
(66, 'F-BOK', 8),
(67, 'F-SI8', 8),
(68, 'F-Y2M', 8),
(69, 'F-0AG', 8),
(77, 'F-O0V', 8),
(78, 'F-52K', 8),
(79, 'F-WA8', 8),
(80, 'F-WY7', 8),
(81, 'F-6OK', 8),
(82, 'F-4CJ', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE IF NOT EXISTS `tb_slider` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(50) NOT NULL,
  `slider_details` varchar(500) NOT NULL,
  `slider_image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `slider_title`, `slider_details`, `slider_image`) VALUES
(1, 'Welcome to Magic Jade Resort', 'Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.', 'Twin Pool.jpg'),
(2, 'Welcome to Magic Jade Resort', 'Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.', 'Wave Pool.jpg'),
(3, 'Welcome to Magic Jade Resort', 'Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.', 'Olympic pool.jpg'),
(4, 'Welcome to Magic Jade Resort', 'Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.', 'Kiddie Pool.jpg'),
(5, 'Welcome To Kingsfield Express Inn', 'Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.', 'Open Function Hall.jpg'),
(6, 'Welcome to Magic Jade Resort', 'Welcome to Magic Jade Resort, the most known resorts located in Arayat Pampanga, Philippines. A perfect place to relax and enjoy your summer with your family, friends and workmates. Friendly atmosphere, comfort of the rooms, courteous services and a pleasant surroundings for nature lovers.', 'Jacuzzi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE IF NOT EXISTS `tb_status` (
  `status_id` int(15) NOT NULL AUTO_INCREMENT,
  `status_details` varchar(50) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`status_id`, `status_details`) VALUES
(1, 'pending'),
(2, 'checkin'),
(3, 'checkout'),
(4, 'cancel');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  `date_reg` varchar(32) NOT NULL,
  `time_reg` varchar(32) NOT NULL,
  `type_id` int(15) NOT NULL,
  `confirmcode` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `lastname`, `name`, `email`, `phone_number`, `username`, `password`, `date_reg`, `time_reg`, `type_id`, `confirmcode`) VALUES
(8, 'Admin', 'Admin', 'magicjade_@yahoo.com.ph.org', '9213131314', 'magicadmin', '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-30', '', 1, 'y'),
(9, 'OL', 'Staff', 'staff@yahoo.com', '9213131314', 'staff2014', '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-31', '5:33:56 A.M.', 2, '6ca8e3aa6647ced0225216ab7b21837d'),
(10, 'Admin', 'Admin', 'admin@yahoo.com', '9213131314', 'admin2014', 'ef15ad51feb70ced94165021ff4fe8dd', '2014-09-01', '11:46:47 P.M.', 1, '1a40a9b93d58ca66d6582effe0274659');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usertype`
--

CREATE TABLE IF NOT EXISTS `tb_usertype` (
  `type_id` int(15) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_usertype`
--

INSERT INTO `tb_usertype` (`type_id`, `type_name`) VALUES
(1, 'administrator'),
(2, 'Staff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
