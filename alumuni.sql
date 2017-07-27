-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2015 at 12:29 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `branch` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`branch`, `year`, `notification`, `file`) VALUES
('CSE', 2011, 'Hello', 'notice/7.jpg'),
('CSE', 2015, 'Hello', 'notice/7.jpg'),
('CSE', 2016, 'Hello', 'notice/7.jpg'),
('CSE', 2014, 'Hiiiiiiii', 'notice/DOS Commands.pdf'),
('CSE', 2015, 'Hiiiiiiii', 'notice/DOS Commands.pdf'),
('CSE', 2016, 'Hiiiiiiii', 'notice/DOS Commands.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `registertbl`
--

CREATE TABLE IF NOT EXISTS `registertbl` (
  `studentid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registertbl`
--

INSERT INTO `registertbl` (`studentid`, `name`, `password`, `branch`, `year`, `mobile`, `email`, `image`, `status`) VALUES
(1, 'Anand', '005', 'CSE', 2015, 100, 'ascaca', '01.JPG', 'Student'),
(2, 'Ashu', '007', 'CSE', 2015, 100, 'ashu@gmail.com', '10.jpg', 'Faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registertbl`
--
ALTER TABLE `registertbl`
  ADD PRIMARY KEY (`studentid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
