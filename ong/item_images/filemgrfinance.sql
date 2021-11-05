-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 04:36 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `filemgrfinance`
--

CREATE TABLE IF NOT EXISTS `filemgrfinance` (
  `item_id` int(11) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_date` datetime NOT NULL,
  `upload_by` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `grade` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filemgrfinance`
--

INSERT INTO `filemgrfinance` (`item_id`, `item_image`, `item_date`, `upload_by`, `department`, `grade`) VALUES
(1, 'laptop req aila image.docx', '2019-03-30 08:49:12', 'GerardÂ singian', 'MIS', ''),
(3, 'aa2000.sql', '2019-09-21 15:42:14', 'FaithÂ Lanser', 'HR Department', ''),
(4, 'admin policy portal.txt', '2020-11-29 20:10:56', 'FaithÂ Lanser', 'HR Department', ''),
(6, 'TICKET PROJ UPDATE 102221.docx', '2021-10-24 15:25:28', 'GerardÂ singian', 'MIS', ''),
(7, 'Trainings and seminar PAU.xlsx', '2021-10-24 15:47:07', 'GerardÂ singian', 'MIS', ''),
(8, 'MIS Department Policy.pdf.pdf', '2021-10-24 16:01:11', 'GerardÂ singian', 'MIS', ''),
(9, 'blank_excel_file.xlsx', '2021-10-24 16:02:28', 'GerardÂ singian', 'MIS', '5'),
(10, 'GerardÂ singian', '2021-10-24 21:33:38', '', 'MIS', '6'),
(11, 'PAU - Project Overview & Update.pptx', '2021-10-24 21:34:51', 'laptop req aila image.docx', 'MIS', '8'),
(12, 'jQuery.pdf', '2021-10-24 21:35:46', 'laptop req aila image.docx', 'MIS', '4'),
(13, '3.png', '2021-10-24 21:37:40', 'laptop req aila image.docx', 'MIS', '8'),
(14, 'mis-wfh KBarona 08-26-2021.docx', '2021-10-24 21:38:29', 'DhtsuDevs', 'MIS', '4'),
(17, '41.jpg', '2021-10-30 11:27:52', 'DhtsuDevs', '', '4'),
(18, 'Fedora Teamviwer_1611018248.xlsx', '2021-10-30 15:12:24', 'DhtsuDevs', 'Finance', 'Grade 10'),
(19, 'august 27 repack.xlsx', '2021-10-30 15:13:03', 'DhtsuDevs', 'Finance', 'Grade 7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filemgrfinance`
--
ALTER TABLE `filemgrfinance`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filemgrfinance`
--
ALTER TABLE `filemgrfinance`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
