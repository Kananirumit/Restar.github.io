-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 07:09 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `admin_email`, `pass`) VALUES
(1001, 'kananirumit2003@gmail.com', 'rumit123'),
(1002, 'chovatiyarushit@gmail.com', 'rushit123'),
(1003, 'diyoravatsal@gmail.com', 'vatsal123');

-- --------------------------------------------------------

--
-- Table structure for table `cardroom`
--

CREATE TABLE `cardroom` (
  `id` int(11) NOT NULL,
  `cardno` text NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardemail` varchar(50) NOT NULL,
  `cardmonth` enum('01','02','03','04','05','06','07','08','09','10','11','12') NOT NULL,
  `cardyear` year(4) NOT NULL,
  `cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cardticket`
--

CREATE TABLE `cardticket` (
  `cardid` int(11) NOT NULL,
  `cardno` text NOT NULL,
  `cardname` varchar(50) NOT NULL,
  `cardemail` varchar(50) NOT NULL,
  `cardmonth` enum('01','02','03','04','05','06','07','08','09','10','11','12') NOT NULL,
  `cardyear` year(4) NOT NULL,
  `cvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `guestId` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` text NOT NULL,
  `confirmpss` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`guestId`, `fname`, `lname`, `gender`, `phone`, `email`, `pass`, `confirmpss`) VALUES
(1, 'Rumit', 'Kanani', 'male', '9106776464', 'kananirumit2003@gmail.com', '2003', '2003'),
(2, 'henisha', 'desai', 'female', '9876576765', 'henishadesai2003@gmail.com', '2003', '2003');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `city` text NOT NULL,
  `phone` text NOT NULL,
  `room` text NOT NULL,
  `nroom` text NOT NULL,
  `totalprice` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `fname`, `lname`, `email`, `birthdate`, `city`, `phone`, `room`, `nroom`, `totalprice`, `checkin`, `checkout`) VALUES
(1, 'brijesh', 'kachadiya', 'brijesh2002@gmail.com', '2002-06-27', 'Surat', '9876654323', 'Classic Room', '5', '₹65000', '2024-03-27', '2024-03-29'),
(2, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '3', '₹90000', '2024-03-22', '2024-03-28'),
(3, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '3', '₹90000', '2024-03-23', '2024-03-29'),
(4, 'test', 'test', 'test@gmail.com', '2024-02-26', 'surat', '9856953265', 'Deluxe Room', '2', '₹36000', '2024-03-22', '2024-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `child` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `senior` int(11) NOT NULL,
  `txtDate` date NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `email`, `child`, `adult`, `senior`, `txtDate`, `total`) VALUES
(1, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 0, '2024-03-22', '₹3600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardroom`
--
ALTER TABLE `cardroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardticket`
--
ALTER TABLE `cardticket`
  ADD PRIMARY KEY (`cardid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`guestId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `cardroom`
--
ALTER TABLE `cardroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cardticket`
--
ALTER TABLE `cardticket`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
