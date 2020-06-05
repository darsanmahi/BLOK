-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 10:59 AM
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
-- Database: `ablock`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `hallnumber` varchar(5) NOT NULL,
  `period` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `class_code` int(11) DEFAULT NULL,
  `roll_no` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingclub`
--

CREATE TABLE `bookingclub` (
  `hallnumber` varchar(5) NOT NULL,
  `period` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `roll_no` varchar(6) NOT NULL,
  `reason` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_code` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` int(11) NOT NULL,
  `section` varchar(5) DEFAULT NULL
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
-- Table structure for table `friday`
--

CREATE TABLE `friday` (
  `hallnumber` varchar(10) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`hallnumber`, `startingperiod`) VALUES
('A105', 1),
('A105', 6),
('A105', 7),
('A105', 8),
('A307', 1),
('A307', 8);

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE `monday` (
  `hallnumber` varchar(10) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`hallnumber`, `startingperiod`) VALUES
('A105', 7),
('A105', 8),
('A307', 1),
('A307', 5),
('A307', 6),
('A307', 7),
('A307', 8);

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE `thursday` (
  `hallnumber` varchar(10) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`hallnumber`, `startingperiod`) VALUES
('A105', 5),
('A105', 6),
('A105', 7),
('A105', 8),
('A307', 1),
('A307', 2),
('A307', 3),
('A307', 4),
('A307', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE `tuesday` (
  `hallnumber` varchar(10) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`hallnumber`, `startingperiod`) VALUES
('A105', 1),
('A105', 2),
('A105', 3),
('A105', 4),
('A105', 8),
('A307', 1),
('A307', 2),
('A307', 8);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE `wednesday` (
  `hallnumber` varchar(10) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`hallnumber`, `startingperiod`) VALUES
('A105', 8),
('A307', 5),
('A307', 6),
('A307', 7),
('A307', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`hallnumber`,`period`,`date`),
  ADD KEY `fk1` (`class_code`);

--
-- Indexes for table `bookingclub`
--
ALTER TABLE `bookingclub`
  ADD PRIMARY KEY (`hallnumber`,`period`,`date`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_code`);

--
-- Indexes for table `friday`
--
ALTER TABLE `friday`
  ADD PRIMARY KEY (`hallnumber`,`startingperiod`);

--
-- Indexes for table `monday`
--
ALTER TABLE `monday`
  ADD PRIMARY KEY (`hallnumber`,`startingperiod`);

--
-- Indexes for table `thursday`
--
ALTER TABLE `thursday`
  ADD PRIMARY KEY (`hallnumber`,`startingperiod`);

--
-- Indexes for table `tuesday`
--
ALTER TABLE `tuesday`
  ADD PRIMARY KEY (`hallnumber`,`startingperiod`);

--
-- Indexes for table `wednesday`
--
ALTER TABLE `wednesday`
  ADD PRIMARY KEY (`hallnumber`,`startingperiod`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
