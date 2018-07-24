-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 09:06 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `user_password`) VALUES
('anjana', 'anjana'),
('login', 'login');

-- --------------------------------------------------------

--
-- Table structure for table `u_reg`
--

CREATE TABLE IF NOT EXISTS `u_reg` (
`u_id` int(10) NOT NULL,
  `user_name` text NOT NULL,
  `father_name` text NOT NULL,
  `school_name` text NOT NULL,
  `roll_no` int(50) NOT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `u_reg`
--

INSERT INTO `u_reg` (`u_id`, `user_name`, `father_name`, `school_name`, `roll_no`, `class`) VALUES
(2, 'anjana', 'ram surat', 'manav mangal', 12345, '10th'),
(5, 'Shruti', 'Mr. Avasti', 'abc', 345655, '10th'),
(6, 'Shruti', 'Mr. Avasti', 'abc', 345655, '10th'),
(8, 'Shruti', 'Mr. Avasti', 'abc', 345655, '10th'),
(32, 'Shruti', 'Mr. Avasti', 'abc', 345655, '10th'),
(33, 'Puneet', 'Mr. Avasti', 'abc', 345655, '10th'),
(34, 'rtg', 'rtr', 'sds', 1222, '9th'),
(35, 'rtg', 'rtr', 'sds', 1222, '9th'),
(36, 'rtg', 'rtr', 'sds', 1222, '10th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `u_reg`
--
ALTER TABLE `u_reg`
 ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `u_reg`
--
ALTER TABLE `u_reg`
MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
