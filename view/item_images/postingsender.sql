-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 04:49 AM
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
-- Table structure for table `postingsender`
--

CREATE TABLE IF NOT EXISTS `postingsender` (
  `item_id` int(10) unsigned NOT NULL,
  `Jobtitle` varchar(5000) NOT NULL DEFAULT '',
  `Jobdescription` varchar(1000) DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_date` date NOT NULL DEFAULT '0000-00-00',
  `Education` varchar(1000) DEFAULT NULL,
  `dh` varchar(100) DEFAULT NULL,
  `category_id` int(10) NOT NULL,
  `Vacancy` varchar(1000) NOT NULL,
  `status` varchar(200) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `img_type` varchar(255) NOT NULL,
  `WorkXP` varchar(1000) NOT NULL,
  `Gender` varchar(1000) NOT NULL,
  `Salary` varchar(1000) NOT NULL,
  `skills` varchar(1000) NOT NULL,
  `fname` varchar(1000) NOT NULL,
  `mname` varchar(1000) NOT NULL,
  `lname` varchar(1000) NOT NULL,
  `Contact` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `upload_by` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingsender`
--

INSERT INTO `postingsender` (`item_id`, `Jobtitle`, `Jobdescription`, `item_image`, `item_date`, `Education`, `dh`, `category_id`, `Vacancy`, `status`, `img_name`, `img_path`, `img_type`, `WorkXP`, `Gender`, `Salary`, `skills`, `fname`, `mname`, `lname`, `Contact`, `Email`, `upload_by`, `department`) VALUES
(14, 'IT Specialist', NULL, 'Overtime Form and Transportation Form - adjusted 6-30-2018.xlsx', '2019-05-31', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'Gerard ', 'Roque', 'Singian', '09056189976', 'sdfhusdh@gmail.com', 'sdsd', ''),
(15, 'Pattern Staff', NULL, 'bordernew.docx', '2019-05-31', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'Leo', 'mord', 'gord', '090561899721', 'sasuassh@gmail.com', 'sdsd', ''),
(16, 'General Service Assistant Mgr', NULL, 'Print Cd Cover - Copy cherrie ann.docx', '2019-05-31', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'Kimmy', 'grock', 'lelst', '555454', 'sds@fdsfsdf.com', 'sdsd', ''),
(17, 'Impex Staff', NULL, 'Print Cd Cover - Copy cherrie ann.docx', '2019-06-01', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'jake', 'vbaras', 'sdsdsd', '544455', '54454554', 'sdsd', ''),
(18, 'Impex Staff', NULL, 'DSC00445.jpg', '2019-06-01', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'Lhyn', 'Janea', 'Miscopal', '090561899721', 'sasa@gmail.com', 'sdsd', ''),
(19, 'Pattern Staff', NULL, 'MIS stock level for  the month of May 2019.xlsx', '2019-06-04', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'kerung', 'sfkjas', 'klmshfjk', 'jsfhkj', 'jksfhksa', 'sdsd', ''),
(20, 'Executive Driver', NULL, 'masarap.jpg', '2019-06-06', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'James', 'asa', 's', 'asa', 'asas', 'sdsd', ''),
(21, 'Executive Driver', NULL, 'chatting.sql', '2019-09-22', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'James', 'dan', 'Yap', '09650695254', 'singian28@gmail.com', 'sdsd', ''),
(22, 'IT Specialist', NULL, 'ABMK-Computation-of-Grades.xlsx', '2019-09-22', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'Carlo', 'yumul', 'dela pena', '09650695254', 'singian28@gmail.com', 'sdsd', ''),
(23, 'Executive Driver', NULL, 'FEDORA - SIR GERARD NEW.docx', '2021-10-30', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'asdasd', 'asdasd', 'sadsad', '1212', 'canda@yahoo.com', 'sdsd', ''),
(24, 'Executive Driver', NULL, 'data1.xlsx', '2021-10-30', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'asdasd', 'asdasdsa', 'asd', '232323', 'canda@yahoo.com', 'sdsd', ''),
(25, 'Executive Driver', NULL, 'august 27 repack.xlsx', '2021-10-31', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'asdasd', 'asdasd', 'asdsad', '232323', 'canda@yahoo.com', 'sdsd', ''),
(26, 'Executive Driver', NULL, 'Data Import.xlsx', '2021-10-31', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'xxxx', 'xxxx', 'xxxx', '232323', 'canda@yahoo.com', 'sdsd', ''),
(27, 'Executive Driver', NULL, 'data1.xlsx', '2021-10-31', NULL, NULL, 0, '', '', '', '', '', '', '', '', '', 'aaaaa', 'aaaaa', 'aaaaa', '232323', 'canda@yahoo.com', 'sdsd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `postingsender`
--
ALTER TABLE `postingsender`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `postingsender`
--
ALTER TABLE `postingsender`
  MODIFY `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
