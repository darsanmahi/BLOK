-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 11:01 AM
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
-- Database: `jblock`
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
  `hallnumber` varchar(4) NOT NULL,
  `period` int(11) NOT NULL,
  `date` date NOT NULL,
  `day` varchar(10) DEFAULT NULL,
  `roll_no` varchar(6) DEFAULT NULL,
  `reason` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_code` int(11) NOT NULL,
  `department` varchar(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `section` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('J202', 3),
('J202', 4),
('J202', 5),
('J202', 6),
('J202', 7),
('J202', 8),
('J204', 1),
('J204', 4),
('J204', 8),
('J205', 3),
('J205', 4),
('J205', 5),
('J205', 6),
('J205', 7),
('J205', 8),
('J205', 9),
('J401', 1),
('J401', 2),
('J401', 3),
('J401', 4),
('J401', 7),
('J401', 8),
('J402', 8),
('J413', 1),
('J413', 7),
('J413', 8),
('J413', 9),
('J414', 1),
('J414', 5),
('J414', 6),
('J414', 7),
('J414', 8),
('J414', 9),
('J415', 1),
('J415', 3),
('J415', 4),
('J415', 7),
('J415', 8),
('J515', 1),
('J515', 2),
('J515', 8),
('J515', 9),
('J516', 1),
('J516', 4),
('J516', 5),
('J516', 6),
('J516', 7),
('J516', 8);

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
('J202', 5),
('J202', 6),
('J202', 7),
('J202', 8),
('J204', 1),
('J204', 2),
('J204', 3),
('J204', 4),
('J204', 8),
('J205', 1),
('J205', 2),
('J205', 3),
('J205', 4),
('J205', 5),
('J205', 6),
('J205', 7),
('J205', 9),
('J401', 1),
('J401', 4),
('J401', 5),
('J401', 6),
('J401', 7),
('J401', 8),
('J402', 8),
('J413', 1),
('J413', 6),
('J413', 7),
('J413', 8),
('J413', 9),
('J414', 1),
('J414', 6),
('J414', 7),
('J414', 8),
('J414', 9),
('J415', 1),
('J415', 2),
('J415', 7),
('J415', 8),
('J515', 1),
('J515', 2),
('J515', 3),
('J515', 4),
('J515', 5),
('J515', 6),
('J515', 7),
('J515', 8),
('J515', 9),
('J516', 3),
('J516', 4),
('J516', 7),
('J516', 8);

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
('J202', 1),
('J202', 2),
('J202', 3),
('J202', 4),
('J202', 7),
('J202', 8),
('J204', 1),
('J204', 2),
('J204', 3),
('J204', 4),
('J204', 5),
('J204', 6),
('J204', 7),
('J204', 8),
('J205', 1),
('J205', 2),
('J205', 5),
('J205', 6),
('J205', 7),
('J401', 1),
('J401', 2),
('J401', 6),
('J401', 7),
('J401', 8),
('J402', 4),
('J402', 5),
('J402', 6),
('J402', 7),
('J402', 8),
('J413', 1),
('J413', 2),
('J413', 8),
('J413', 9),
('J414', 1),
('J414', 5),
('J414', 6),
('J414', 7),
('J414', 8),
('J414', 9),
('J415', 1),
('J415', 2),
('J515', 5),
('J515', 6),
('J515', 7),
('J515', 8),
('J515', 9),
('J516', 5),
('J516', 6),
('J516', 7),
('J516', 8);

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
('J202', 1),
('J202', 2),
('J202', 3),
('J202', 4),
('J202', 7),
('J202', 8),
('J204', 1),
('J204', 2),
('J204', 6),
('J204', 7),
('J204', 8),
('J205', 1),
('J205', 2),
('J205', 3),
('J205', 4),
('J205', 5),
('J205', 6),
('J205', 7),
('J205', 8),
('J205', 9),
('J401', 1),
('J401', 2),
('J401', 3),
('J401', 4),
('J401', 7),
('J401', 8),
('J401', 9),
('J402', 8),
('J413', 1),
('J413', 2),
('J413', 3),
('J413', 4),
('J413', 9),
('J414', 1),
('J414', 2),
('J414', 6),
('J414', 7),
('J414', 8),
('J414', 9),
('J415', 1),
('J415', 5),
('J415', 6),
('J415', 7),
('J415', 8),
('J515', 1),
('J515', 2),
('J515', 3),
('J515', 4),
('J516', 3),
('J516', 4),
('J516', 5),
('J516', 6),
('J516', 7),
('J516', 8);

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
('J202', 1),
('J202', 2),
('J204', 1),
('J204', 2),
('J204', 3),
('J204', 7),
('J204', 8),
('J205', 1),
('J205', 2),
('J205', 5),
('J205', 6),
('J205', 7),
('J205', 9),
('J401', 1),
('J401', 2),
('J401', 6),
('J401', 7),
('J401', 8),
('J401', 9),
('J401', 10),
('J402', 4),
('J402', 5),
('J402', 6),
('J402', 7),
('J402', 8),
('J413', 1),
('J413', 5),
('J413', 6),
('J413', 7),
('J413', 8),
('J413', 9),
('J414', 7),
('J414', 8),
('J414', 9),
('J415', 1),
('J415', 2),
('J415', 6),
('J415', 8),
('J515', 5),
('J515', 6),
('J515', 7),
('J515', 8),
('J515', 9),
('J516', 5),
('J516', 6),
('J516', 7),
('J516', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`period`,`hallnumber`,`date`) USING BTREE,
  ADD KEY `fk21` (`class_code`);

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
  ADD CONSTRAINT `fk21` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
