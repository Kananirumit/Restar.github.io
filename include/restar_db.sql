-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 06:19 AM
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
  `name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `admin_email`, `pass`) VALUES
(1001, 'Rumit', 'kananirumit2003@gmail.com', 'rumit123'),
(1002, 'Rushit', 'chovatiyarushit@gmail.com', 'rushit123'),
(1003, 'Vatsal', 'diyoravatsal@gmail.com', 'vatsal123');

-- --------------------------------------------------------

--
-- Table structure for table `cardevent`
--

CREATE TABLE `cardevent` (
  `id` int(11) NOT NULL,
  `cardno` text NOT NULL,
  `cardname` text NOT NULL,
  `cardemail` varchar(50) NOT NULL,
  `cardmonth` enum('01','02','03','04','05','06','07','08','09','10','11','12') NOT NULL,
  `cardyear` year(4) NOT NULL,
  `cvv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cardevent`
--

INSERT INTO `cardevent` (`id`, `cardno`, `cardname`, `cardemail`, `cardmonth`, `cardyear`, `cvv`) VALUES
(2, '8797654345678908', 'ykurdfgtr', ' tftrdfc@kujyff.chd', '08', '2027', '654');

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

--
-- Dumping data for table `cardticket`
--

INSERT INTO `cardticket` (`cardid`, `cardno`, `cardname`, `cardemail`, `cardmonth`, `cardyear`, `cvv`) VALUES
(1, '9876543567899876', 'nfd', ' jgttf@hgf.ggfd', '08', '2027', '5435');

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
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `info` text NOT NULL,
  `event_price` text NOT NULL,
  `event_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `start_date`, `end_date`, `info`, `event_price`, `event_image`) VALUES
(1, 'family fun day', '2024-04-20', '2024-04-27', 'spical event for family fun', '₹8000', 'Event1.png'),
(2, 'summer fun', '2024-05-12', '2024-05-20', 'specail event for kids fun', '₹6500', 'event2.png');

-- --------------------------------------------------------

--
-- Table structure for table `event_data`
--

CREATE TABLE `event_data` (
  `event_id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `event` text NOT NULL,
  `npass` text NOT NULL,
  `totalprice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_data`
--

INSERT INTO `event_data` (`event_id`, `fname`, `lname`, `email`, `phone`, `event`, `npass`, `totalprice`) VALUES
(1, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '9106776464', 'Family Fun day', '3', '₹24000'),
(2, '', '', '', '', 'Family Fun day', '1', '₹8000'),
(3, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '9106776464', 'Family Fun day', '2', '₹16000');

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
(4, 'test', 'test', 'test@gmail.com', '2024-02-26', 'surat', '9856953265', 'Deluxe Room', '2', '₹36000', '2024-03-22', '2024-03-16'),
(5, 'rushit', 'chovatiya', 'chovatiyarushit@gmail.com', '2024-03-05', 'surat', '9562356253', 'Family Room', '2', '₹20000', '2024-03-20', '2024-03-21');

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
(1, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 0, '2024-03-22', '₹3600'),
(2, 'test ', 'chovatiyarushit@gmail.com', 1, 2, 1, '2024-03-21', '₹3800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cardevent`
--
ALTER TABLE `cardevent`
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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_data`
--
ALTER TABLE `event_data`
  ADD PRIMARY KEY (`event_id`);

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
-- AUTO_INCREMENT for table `cardevent`
--
ALTER TABLE `cardevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cardroom`
--
ALTER TABLE `cardroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cardticket`
--
ALTER TABLE `cardticket`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_data`
--
ALTER TABLE `event_data`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
