-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 20, 2020 at 02:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Activity_Name` varchar(200) NOT NULL,
  `Add_Activity` blob NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Description` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `advertising`
--

CREATE TABLE `advertising` (
  `title_name` varchar(200) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `goals` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertising`
--

INSERT INTO `advertising` (`title_name`, `logo`, `start_time`, `end_time`, `goals`) VALUES
('ad', 'fit.jpeg', '2020-04-15', '2020-04-14', ' The goal of that advertising');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_name` varchar(100) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_name`, `coach_id`, `time_start`, `time_end`) VALUES
('cardio', 123, '23:58:00', '00:58:00'),
('Yoga', 2020, '12:59:00', '13:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `full_name` varchar(100) NOT NULL,
  `coach_id` int(11) NOT NULL,
  `coach_email` varchar(200) NOT NULL,
  `coach_phone` int(11) NOT NULL,
  `skils` varchar(300) NOT NULL,
  `salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`full_name`, `coach_id`, `coach_email`, `coach_phone`, `skils`, `salary`) VALUES
('ahmed', 123, 'f33.2010@hotmail.com', 23456789, 'skill', '2000'),
('noor', 444, 'eerrr@hotmail.com', 7543467, 'Boxing', '1500'),
('fatimah', 2020, 'dfg@hotmail.com', 32456789, 'CAA', '1000'),
('maryam', 2177, 'meme@hotmail.com', 888999966, 'Yoga', '2000'),
('mone', 5555, 'eerrr@hotmail.com', 65674564, 'Resistance', '2000'),
('nabaa', 8888, 'n@hotmail.com', 7543467, 'Boxing', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_name` varchar(100) NOT NULL,
  `member_id` int(11) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_phone` int(11) NOT NULL,
  `member_pass` varchar(100) NOT NULL,
  `member_act` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_name`, `member_id`, `member_email`, `member_phone`, `member_pass`, `member_act`) VALUES
('Batool', 224455, 'btool@hotmail.com', 563745733, 'batool', 1),
('maryam', 217019250, 'maryam@hotmail.com', 567888929, '111', 0),
('noor', 217019798, 'noor@hotmail.com', 566688839, '123', 0),
('Reem', 217036999, 'reem@hotmail.com', 756754778, '234', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Activity_Name`);

--
-- Indexes for table `advertising`
--
ALTER TABLE `advertising`
  ADD PRIMARY KEY (`title_name`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_name`),
  ADD KEY `coach_id` (`coach_id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`coach_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`coach_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
