-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 07:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eid`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount`
--

CREATE TABLE `acount` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ps` varchar(11) NOT NULL,
  `db` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acount`
--

INSERT INTO `acount` (`id`, `name`, `email`, `ps`, `db`) VALUES
(9, 'akter', '66674@gmail.com', 'akter', '0000-00-00'),
(16, 'Akter Hossain', '66674@gmail.com', 'akter123', '0000-00-00'),
(17, 'ArafatAli', 'arafat@gmail.com', '123456', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'akter', 'akter123');

-- --------------------------------------------------------

--
-- Table structure for table `lotari`
--

CREATE TABLE `lotari` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(14) NOT NULL,
  `pnumber` text NOT NULL DEFAULT '01800000000',
  `nationality` text NOT NULL,
  `gender` varchar(11) NOT NULL,
  `nid` int(255) NOT NULL,
  `db` date NOT NULL,
  `img` varchar(255) NOT NULL,
  `time` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lotari`
--

INSERT INTO `lotari` (`id`, `name`, `fname`, `mname`, `address`, `email`, `pnumber`, `nationality`, `gender`, `nid`, `db`, `img`, `time`) VALUES
(6, '', '', '', '', '', '', 'Bangladesh', '', 0, '0000-00-00', '', '0000-00-00 00:00:00.00000'),
(7, '', '', '', '', '', '', 'Bangladesh', '', 0, '0000-00-00', 'Md Ariful Islam.wmv', '0000-00-00 00:00:00.00000'),
(8, '', '', '', '', '', '', 'Bangladesh', '', 0, '0000-00-00', '', '0000-00-00 00:00:00.00000'),
(9, '', '', '', '', '', '', 'Bangladesh', '', 0, '0000-00-00', '', '0000-00-00 00:00:00.00000'),
(10, '', '', '', '', '', '', 'Bangladesh', '', 0, '0000-00-00', '', '0000-00-00 00:00:00.00000'),
(11, '', '', '', '', '', '', 'Bangladesh', '', 0, '0000-00-00', '', '0000-00-00 00:00:00.00000'),
(12, 'Akter Hossain', 'Shomser Ali', 'ASMA KHATUN', 'jhenaidah', '66674@gmail.co', '01787845510', 'India', 'Male', 21545454, '2022-06-08', 'imran.jpg', '0000-00-00 00:00:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `price1`
--

CREATE TABLE `price1` (
  `id` int(11) NOT NULL,
  `no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price1`
--

INSERT INTO `price1` (`id`, `no`, `name`, `image`) VALUES
(2, '1', 'KTM', 'imran.jpg'),
(4, '03', 'akter', 'ktm.webp');

-- --------------------------------------------------------

--
-- Table structure for table `price2`
--

CREATE TABLE `price2` (
  `Id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `name` varchar(14) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price2`
--

INSERT INTO `price2` (`Id`, `no`, `name`, `image`) VALUES
(4, 1, 'KTM', 'ktm.webp');

-- --------------------------------------------------------

--
-- Table structure for table `price3`
--

CREATE TABLE `price3` (
  `Id` int(11) NOT NULL,
  `no` int(14) NOT NULL,
  `name` varchar(14) NOT NULL,
  `image` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price3`
--

INSERT INTO `price3` (`Id`, `no`, `name`, `image`) VALUES
(2, 1, 'KTM', 'laptop.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acount`
--
ALTER TABLE `acount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lotari`
--
ALTER TABLE `lotari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price1`
--
ALTER TABLE `price1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price2`
--
ALTER TABLE `price2`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `price3`
--
ALTER TABLE `price3`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acount`
--
ALTER TABLE `acount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lotari`
--
ALTER TABLE `lotari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `price1`
--
ALTER TABLE `price1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price2`
--
ALTER TABLE `price2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price3`
--
ALTER TABLE `price3`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
