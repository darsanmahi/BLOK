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
-- Database: `gblock`
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
  `class_code` int(11) NOT NULL,
  `roll_no` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`hallnumber`, `period`, `date`, `day`, `class_code`, `roll_no`) VALUES
('G409', 5, '2020-06-15', 'Monday', 1, '18z256'),
('G504', 5, '2020-05-26', 'Tuesday', 1, '18z256'),
('G603', 5, '2020-05-25', 'Monday', 1, '18z256'),
('G607', 5, '2020-06-15', 'Monday', 1, '18z256');

-- --------------------------------------------------------

--
-- Table structure for table `bookingclub`
--

CREATE TABLE `bookingclub` (
  `hallnumber` varchar(4) NOT NULL,
  `period` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `roll_no` varchar(6) DEFAULT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_code` int(11) NOT NULL,
  `department` varchar(15) NOT NULL,
  `year` int(11) NOT NULL,
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
('G306', 1),
('G306', 2),
('G306', 3),
('G306', 4),
('G306', 5),
('G306', 6),
('G306', 7),
('G306', 8),
('G306', 9),
('G402', 2),
('G402', 3),
('G402', 4),
('G402', 7),
('G402', 8),
('G406', 1),
('G406', 2),
('G406', 7),
('G406', 8),
('G406', 9),
('G407', 1),
('G407', 5),
('G407', 8),
('G408', 1),
('G408', 2),
('G408', 3),
('G408', 4),
('G408', 5),
('G408', 6),
('G408', 7),
('G408', 8),
('G408', 9),
('G409', 5),
('G409', 7),
('G409', 8),
('G502', 6),
('G502', 7),
('G502', 8),
('G502', 9),
('G503', 3),
('G503', 4),
('G503', 8),
('G503', 9),
('G506', 1),
('G506', 2),
('G506', 3),
('G506', 4),
('G506', 7),
('G506', 8),
('G506', 9),
('G508', 6),
('G508', 7),
('G508', 8),
('G602', 3),
('G602', 4),
('G602', 7),
('G602', 8),
('G603', 7),
('G603', 9),
('G606', 1),
('G606', 5),
('G606', 6),
('G606', 7),
('G606', 9),
('G607', 1),
('G607', 2),
('G607', 3),
('G607', 4),
('G607', 8),
('G607', 9),
('G608', 5),
('G608', 6),
('G608', 7),
('G608', 8),
('G608', 9),
('G609', 7),
('G609', 8);

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE `monday` (
  `hallnumber` varchar(20) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`hallnumber`, `startingperiod`) VALUES
('G304', 7),
('G304', 8),
('G304', 9),
('G306', 1),
('G306', 2),
('G306', 3),
('G306', 4),
('G306', 5),
('G306', 6),
('G306', 7),
('G402', 1),
('G402', 3),
('G402', 4),
('G402 ', 5),
('G402', 7),
('G402', 8),
('G406', 1),
('G406', 7),
('G406', 8),
('G406', 9),
('G407', 1),
('G407', 3),
('G407', 4),
('G407', 5),
('G407', 6),
('G407', 7),
('G407', 8),
('G408', 3),
('G408', 4),
('G408', 6),
('G409', 5),
('G409', 6),
('G409', 7),
('G409', 8),
('G502', 1),
('G502', 3),
('G502', 4),
('G502', 8),
('G502', 9),
('G502', 10),
('G503', 5),
('G503', 6),
('G504', 1),
('G504', 6),
('G504', 8),
('G506', 8),
('G506', 9),
('G508', 1),
('G508', 3),
('G508', 4),
('G508', 8),
('G602', 1),
('G602', 4),
('G603', 5),
('G603', 6),
('G603', 7),
('G603', 8),
('G603', 9),
('G606', 1),
('G606', 5),
('G606', 8),
('G606', 9),
('G607', 5),
('G607', 6),
('G607', 7),
('G607', 8),
('G607', 9),
('G608', 1),
('G608', 3),
('G608', 4),
('G608', 5),
('G608', 6),
('G608', 8),
('G608', 9);

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE `thursday` (
  `hallnumber` varchar(5) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`hallnumber`, `startingperiod`) VALUES
('G306', 1),
('G306', 2),
('G306', 3),
('G306', 4),
('G306', 5),
('G306', 6),
('G306', 7),
('G306', 8),
('G306', 9),
('G402', 3),
('G402', 4),
('G402', 7),
('G402', 8),
('G406', 3),
('G406', 4),
('G406', 6),
('G406', 7),
('G406', 8),
('G406', 9),
('G407', 5),
('G407', 6),
('G407', 7),
('G407', 8),
('G408', 1),
('G408', 2),
('G408', 8),
('G408', 9),
('G409', 1),
('G409', 2),
('G409', 3),
('G409', 4),
('G409', 8),
('G502', 5),
('G502', 6),
('G502', 7),
('G502', 8),
('G502', 9),
('G503', 5),
('G503', 6),
('G503', 7),
('G503', 8),
('G503', 9),
('G506', 1),
('G506', 5),
('G506', 6),
('G506', 7),
('G506', 8),
('G506', 9),
('G508', 5),
('G508', 6),
('G508', 7),
('G508', 8),
('G509', 8),
('G602', 2),
('G602', 8),
('G603', 1),
('G603', 2),
('G603', 3),
('G603', 4),
('G603', 7),
('G603', 8),
('G603', 9),
('G606', 1),
('G606', 8),
('G606', 9),
('G607', 9),
('G609', 5),
('G609', 6),
('G609', 7),
('G609', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE `tuesday` (
  `hallnumber` varchar(5) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`hallnumber`, `startingperiod`) VALUES
('G304', 1),
('G304', 2),
('G304', 7),
('G304', 8),
('G304', 9),
('G306', 1),
('G306', 2),
('G306', 3),
('G306', 4),
('G306', 5),
('G306', 6),
('G402', 7),
('G402', 8),
('G406', 1),
('G406', 8),
('G406', 9),
('G407', 5),
('G407', 6),
('G407', 8),
('G408', 3),
('G408', 4),
('G408', 6),
('G408', 7),
('G408', 8),
('G408', 9),
('G409', 5),
('G409', 6),
('G409', 7),
('G409', 8),
('G502', 3),
('G502', 6),
('G502', 7),
('G502', 8),
('G502', 9),
('G503', 8),
('G503', 9),
('G504', 5),
('G504', 7),
('G506', 5),
('G506', 6),
('G506', 7),
('G506', 8),
('G506', 9),
('G508', 1),
('G508', 2),
('G508', 3),
('G508', 4),
('G508', 8),
('G509', 5),
('G509', 6),
('G509', 7),
('G509', 8),
('G602', 1),
('G602', 2),
('G602', 3),
('G602', 4),
('G602', 8),
('G602', 9),
('G603', 3),
('G603', 4),
('G603', 5),
('G603', 6),
('G603', 7),
('G603', 8),
('G603', 9),
('G606', 1),
('G606', 3),
('G606', 4),
('G606', 8),
('G606', 9),
('G608', 1),
('G608', 3),
('G608', 4),
('G608', 6),
('G608', 9),
('G609', 1),
('G609', 3),
('G609', 4),
('G609', 7),
('G609', 8);

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE `wednesday` (
  `hallnumber` varchar(5) NOT NULL,
  `startingperiod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`hallnumber`, `startingperiod`) VALUES
('G304', 3),
('G304', 4),
('G304', 8),
('G304', 9),
('G306', 1),
('G306', 2),
('G306', 3),
('G306', 4),
('G402', 5),
('G402', 6),
('G402', 7),
('G402', 8),
('G402', 9),
('G406', 3),
('G406', 4),
('G406', 5),
('G406', 6),
('G406', 7),
('G406', 8),
('G406', 9),
('G407', 1),
('G407', 5),
('G407', 8),
('G408', 1),
('G408', 2),
('G408', 3),
('G408', 4),
('G409', 7),
('G409', 8),
('G502', 6),
('G502', 7),
('G502', 8),
('G502', 9),
('G503', 6),
('G503', 7),
('G503', 9),
('G506', 1),
('G506', 7),
('G506', 8),
('G506', 9),
('G508', 4),
('G508', 7),
('G508', 8),
('G509', 1),
('G509', 2),
('G509', 3),
('G509', 4),
('G509', 5),
('G602', 5),
('G602', 6),
('G602', 7),
('G602', 8),
('G606', 6),
('G606', 7),
('G606', 8),
('G606', 9),
('G607', 9),
('G608', 5),
('G608', 6),
('G608', 7),
('G608', 9),
('G609', 1),
('G609', 2),
('G609', 3),
('G609', 4),
('G609', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`hallnumber`,`period`,`date`),
  ADD KEY `class_code` (`class_code`);

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
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
