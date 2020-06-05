-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 10:53 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
