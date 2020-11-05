-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 09:41 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `train_id` char(4) NOT NULL,
  `s_station` varchar(30) NOT NULL,
  `s_out` time NOT NULL,
  `h_in` time NOT NULL,
  `h_out` time NOT NULL,
  `f_station` varchar(30) NOT NULL,
  `f_in` time NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`train_id`, `s_station`, `s_out`, `h_in`, `h_out`, `f_station`, `f_in`, `type`) VALUES
('234', 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพฯ', '14:15:00', 'รถธรรมดา'),
('424', 'สำโรงทาบ', '05:50:00', '07:39:00', '07:40:00', 'นครราชสีมา', '09:50:00', 'รถดีเซลราง'),
('444', 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพฯ', '14:15:00', 'รถธรรมดา'),
('72', 'อุบลราชธานี', '05:40:00', '08:22:00', '08:23:00', 'กรุงเทพฯ', '14:55:00', 'รถด่วนดีเซลราง'),
('asd', 'asd', '04:59:00', '04:14:00', '05:48:00', 'dd', '04:59:00', 'รถธรรมดา');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`train_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
