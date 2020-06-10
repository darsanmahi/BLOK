-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 11:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hallbookingauthority`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `dates` date NOT NULL,
  `reason` varchar(50) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`dates`, `reason`, `year`) VALUES
('2020-06-03', 'Continuous Assessment 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_code` int(11) NOT NULL,
  `department` varchar(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `section` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_code`, `department`, `year`, `section`) VALUES
(1, 'CSE', 2, 'G1'),
(2, 'CSE', 2, 'G2'),
(3, 'Automobile', 1, ''),
(4, 'Biotechnology', 1, ''),
(5, 'Biomedical', 1, ''),
(6, 'Civil', 1, ''),
(7, 'CSE', 1, 'G1'),
(8, 'CSE', 1, 'G2'),
(9, 'MechSW', 1, ''),
(10, 'RAE', 1, ''),
(11, 'Textile', 1, ''),
(12, 'FDM', 2, ''),
(13, 'Automobile', 2, ''),
(14, 'Civil', 2, ''),
(15, 'EEESW', 2, ''),
(16, 'ECE', 2, 'G1'),
(17, 'FT', 2, ''),
(18, 'IT', 2, 'G1'),
(19, 'ICE', 2, ''),
(20, 'MechSW', 2, ''),
(21, 'Metallurgy', 2, ''),
(22, 'ProductionSW', 2, ''),
(23, 'RAE', 2, ''),
(24, 'Textile', 2, ''),
(25, 'FDM', 3, ''),
(26, 'Automobile', 3, ''),
(27, 'BioTechnology', 3, ''),
(28, 'BioMedical', 3, ''),
(29, 'Civil', 3, ''),
(30, 'EEESW', 3, ''),
(31, 'ECE', 3, 'G1'),
(32, 'FT', 3, ''),
(33, 'IT', 3, 'G1'),
(34, 'ICE', 3, ''),
(35, 'MechSW', 3, ''),
(36, 'ProductionSW', 3, ''),
(37, 'RAE', 3, ''),
(38, 'Textile', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `hallnumber` varchar(4) NOT NULL,
  `issues` varchar(100) DEFAULT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`hallnumber`, `issues`, `status`) VALUES
('G402', 'Projector is not working', 'rectified'),
('G402', 'Mic is not working', 'rectified'),
('G402', 'No Speaker', 'unrectified');

-- --------------------------------------------------------

--
-- Table structure for table `logininfoh`
--

CREATE TABLE `logininfoh` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logininfoh`
--

INSERT INTO `logininfoh` (`username`, `password`) VALUES
('abcd', '1234'),
('efgh', '');

-- --------------------------------------------------------

--
-- Table structure for table `permanentclass`
--

CREATE TABLE `permanentclass` (
  `hallnumber` varchar(4) NOT NULL,
  `class_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permanentclass`
--

INSERT INTO `permanentclass` (`hallnumber`, `class_code`) VALUES
('G402', 1);

-- --------------------------------------------------------

--
-- Table structure for table `representative`
--

CREATE TABLE `representative` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `class_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `representative`
--

INSERT INTO `representative` (`username`, `password`, `class_code`) VALUES
('18z218', 'gayathri', 1),
('18z256', 'srinagul', 1);

-- --------------------------------------------------------

--
-- Table structure for table `secretaries`
--

CREATE TABLE `secretaries` (
  `username` varchar(6) NOT NULL,
  `password` varchar(20) NOT NULL,
  `club_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secretaries`
--

INSERT INTO `secretaries` (`username`, `password`, `club_name`) VALUES
('16L102', 'abcdefgh', 'Fine Arts Club\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tempfreeperiod`
--

CREATE TABLE `tempfreeperiod` (
  `hallnumber` varchar(4) NOT NULL,
  `period` int(11) NOT NULL,
  `date` date NOT NULL,
  `block` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempfreeperiod`
--

INSERT INTO `tempfreeperiod` (`hallnumber`, `period`, `date`, `block`, `status`) VALUES
('G402', 3, '2020-05-20', 'gblock', 'Free'),
('G402', 3, '2020-06-16', 'gblock', 'Free'),
('G402', 4, '2020-06-15', 'gblock', 'Free'),
('G402', 5, '2020-05-19', 'gblock', 'Booked'),
('G402', 6, '2020-05-19', 'gblock', 'Booked'),
('G402', 8, '2020-06-11', 'gblock', 'Free');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_code`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD KEY `fki` (`hallnumber`);

--
-- Indexes for table `logininfoh`
--
ALTER TABLE `logininfoh`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `permanentclass`
--
ALTER TABLE `permanentclass`
  ADD PRIMARY KEY (`hallnumber`),
  ADD KEY `fk12` (`class_code`);

--
-- Indexes for table `representative`
--
ALTER TABLE `representative`
  ADD PRIMARY KEY (`username`),
  ADD KEY `class_code` (`class_code`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tempfreeperiod`
--
ALTER TABLE `tempfreeperiod`
  ADD PRIMARY KEY (`hallnumber`,`period`,`date`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue`
--
ALTER TABLE `issue`
  ADD CONSTRAINT `fki` FOREIGN KEY (`hallnumber`) REFERENCES `permanentclass` (`hallnumber`);

--
-- Constraints for table `permanentclass`
--
ALTER TABLE `permanentclass`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);

--
-- Constraints for table `representative`
--
ALTER TABLE `representative`
  ADD CONSTRAINT `representative_ibfk_1` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
