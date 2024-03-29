-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 12:32 PM
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

--
-- Dumping data for table `cardroom`
--

INSERT INTO `cardroom` (`id`, `cardno`, `cardname`, `cardemail`, `cardmonth`, `cardyear`, `cvv`) VALUES
(2, '3231244532244564', 'ASScaC', ' rumit@gamil.com', '09', '2031', 2323),
(3, '3231244532244564', 'ASScaC', 'rumit@gamil.com', '09', '2031', 2323),
(4, '6543567897654356', 'rumit', 'rumit@gmail.com', '09', '2029', 311),
(5, '3243421352413234', 'rumit', 'kananirumit2003@gmail.com', '07', '2027', 242),
(6, '8765435678976545', 'rumit kanani', 'kananirumit2003@gmail.com', '07', '2029', 2412),
(7, '8765435678908765', 'adAD', 'kananirumit2003@gmail.com', '07', '2030', 3342),
(8, '8976543344565678', 'rumit', 'kananirumit2003@gmail.com', '07', '2028', 311),
(9, '8765432345678908', 'rumit', 'kananirumit2003@gmail.com', '05', '2028', 221),
(10, '8765435678908768', 'askxjnA', 'kananirumit2003@gmail.com', '06', '2030', 121),
(11, '7654345678976543', 'rumit', 'kananirumit2003@gmail.com', '08', '2026', 121),
(12, '7865434567890876', 'rumit', 'kananirumit2003@gmail.com', '06', '2027', 313),
(13, '9898765434565678', 'rumit', 'kananirumit2003@gmail.com', '04', '2029', 312),
(14, '8654356789876546', 'rumit', 'kananirumit2003@gmail.com', '05', '2027', 312),
(15, '8776543434567865', 'rushit', 'chovatiyarushit@gmail.com', '07', '2029', 3121),
(16, '7654322345657876', 'rumit kanani', 'kananirumit2003@gmail.com', '05', '2027', 4223),
(17, '7654324456789765', 'rumit', 'kananirumit2003@gmail.com', '07', '2028', 321),
(18, '6754323445657865', 'rumit', 'kananirumit2003@gmail.com', '10', '2026', 422),
(19, '3456788675454345', 'rumit', 'kananirumit2003@gmail.com', '06', '2029', 321),
(20, '8767545332445656', 'rumit', 'kananirumit2003@gmail.com', '05', '2029', 323),
(21, '7656444567897654', 'rumit', 'kananirumit2003@gmail', '05', '2028', 121),
(22, '6543456789765434', 'rumit', 'kananirumit2003@gmail.com', '06', '2029', 321),
(23, '8767545678878657', 'rumit kanani', 'kananirumit2003@gmail.com', '07', '2028', 121),
(24, '8786543567897654', 'rumit', 'kananirumit2003@gmail.com', '08', '2030', 121),
(25, '7865432456789087', 'rumit', 'kananirumit2003@gmail.com', '08', '2028', 212),
(26, '6432456789089765', 'rumit', 'kananirumit2003@gmail.com', '07', '2028', 212),
(27, '7654678976546789', 'rumit kanani', 'kananirumit2003@gmail.com', '06', '2030', 212),
(28, '0987654324567890', 'rumit kanani', 'kananirumit2003@gmail.com', '09', '2027', 213),
(29, '8878654356789765', 'rumit', 'kananirumit2003@gmail.com', '08', '2028', 352),
(30, '8765432345678897', 'rumit', 'kananirumit2003@gmail.com', '07', '2029', 898),
(31, '8765432345678987', 'rumit', 'kananirumit2003@gmail.com', '07', '2029', 543),
(32, '8765432456789076', 'rumit', 'kananirumit2003@gmail.com', '07', '2027', 776),
(33, '8765432456788654', 'rumit', 'kananirumit2003@gmail.com', '07', '2028', 676),
(34, '7654356786543567', 'rumit', 'kananirumit2003@gmail.com', '04', '2030', 322),
(35, '8976543245678999', 'rumit', 'kananirumit2003@gmail.com', '06', '2030', 232),
(36, '7654324567865467', 'rumit', 'kananirumit2003@gmail.com', '06', '2027', 322),
(37, '7675432456786543', 'rumit', 'kananirumit2003@gmail.com', '07', '2030', 757),
(38, '7654324567865432', 'rumit', 'kananirumit2003@gmail.com', '08', '2027', 234),
(39, '7654324567865465', 'rumit', 'kananirumit2003@gmail.com', '04', '2028', 123),
(40, '7675432456786543', 'rumit', 'kananirumit2003@gmail.com', '08', '2029', 213),
(41, '8765432456786543', 'rumit', 'kananirumit2003@gmail.com', '07', '2030', 112),
(42, '8786543245678976', 'rumit', 'kananirumit2003@gmail.com', '07', '2029', 234),
(43, '2345678976543245', 'rumiy', 'kananirumit2003@gmail.com', '07', '2029', 787),
(44, '9876545687765678', 'tujgv', 'kananirumit2003@gmail.com', '07', '2031', 876),
(45, '1324567865435677', 'rumit', 'kananirumit2003@gmail.com', '08', '2030', 234),
(46, '9876543212345678', 'rumit', 'kananirumit2003@gmail.com', '10', '2029', 221),
(47, '9876543212345678', 'rumit', 'kananirumit2003@gmail.com', '07', '2031', 321),
(48, '8786545345678654', 'rumit', 'kananirumit2003@gmail.com', '09', '2030', 321),
(49, '2345678654324567', 'rumit', 'kananirumit2003@gmail.com', '09', '2030', 232),
(50, '8765432456786543', 'rumit', 'kananirumit2003@gmail.com', '09', '2029', 232),
(51, '7654324567865435', 'rumit', 'kananirumit2003@gmail.com', '09', '2029', 422),
(52, '6875435678654356', 'rumit', 'kananirumit2003@gmail.com', '08', '2029', 234),
(53, '2324564356754675', 'rumit', 'kananirumit2003@gmail.com', '07', '2028', 234),
(54, '6775432456786543', 'rumit', 'brijeshkachhadiya542@gmail.com', '08', '2029', 3231),
(55, '9876543567867564', 'rushit', 'chovatiyarushit@gmail.com', '09', '2029', 432),
(56, '6545342344565676', 'rumit', 'kananirumit2003@gmail.com', '08', '2031', 321),
(57, '2354324563245654', 'rumit', 'kananirumit2003@gmail.com', '06', '2027', 232),
(58, '6754324567865437', 'brijesh', 'brijeshkachhadiya542@gmail.com', '09', '2030', 321);

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
(2, '8876543245678976', 'RUMIT', 'kananirumit2003@gmail.com', '08', '2030', '313'),
(3, '8765432456789765', 'rumit', 'kananirumit2003@gmail.com', '06', '2027', '323'),
(4, '9887865432456789', 'rumit kanani', 'kananirumit2003@gmail.com', '06', '2028', '989'),
(5, '8765434567890876', 'rushit', 'chovatiyarushit@gmail.com', '06', '2028', '754'),
(6, '8765434567897654', 'rumit', 'kananirumit2003@gmail.com', '08', '2027', '676'),
(7, '9876543456789765', 'rumit', 'kananirumit2003@gmail.com', '06', '2031', '454'),
(8, '8787654324567890', 'rumit', 'kananirumit2003@gmail.com', '12', '2030', '331'),
(9, '7654324567897658', 'rumit', 'kananirumit2003@gmail.com', '09', '2026', '322'),
(10, '8976543456789876', 'rumit', 'kananirumit2003@gmail.com', '06', '2030', '432');

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
(3, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '9106776464', 'Family Fun day', '2', '₹16000'),
(5, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '9106776464', 'Summer Event', '2', '₹13000');

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
(5, 'rushit', 'chovatiya', 'chovatiyarushit@gmail.com', '2024-03-05', 'surat', '9562356253', 'Family Room', '2', '₹20000', '2024-03-20', '2024-03-21'),
(6, 'henisha', 'kachadiya', 'kananirumit2003@gmail.com', '2024-03-22', 'Surat', '9876654323', 'Classic Room', '3', '₹39000', '2024-03-31', '2024-04-05'),
(7, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '5', '₹150000', '2024-03-31', '2024-04-04'),
(8, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '4', '₹120000', '2024-03-29', '2024-04-04'),
(9, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Superior Room', '3', '₹66000', '2024-03-30', '2024-04-03'),
(10, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Classic Room', '3', '₹39000', '2024-03-31', '2024-04-07'),
(11, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Superior Room', '3', '₹66000', '2024-03-30', '2024-04-03'),
(12, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '1', '₹30000', '2024-03-30', '2024-04-02'),
(13, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Deluxe Room', '3', '₹54000', '2024-03-30', '2024-04-05'),
(14, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '3', '₹90000', '2024-04-06', '2024-04-07'),
(15, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Classic Room', '3', '₹39000', '2024-03-31', '2024-04-03'),
(16, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-28', 'Surat', '9106776464', 'Classic Room', '3', '₹39000', '2024-03-31', '2024-04-04'),
(17, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-28', 'Surat', '9106776464', 'Classic Room', '3', '₹13500', '2024-03-31', '2024-04-04'),
(18, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Classic Room', '3', '₹39000', '2024-03-31', '2024-04-04'),
(19, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2001-06-29', 'Surat', '9106776464', 'Superior Room', '3', '₹66000', '2024-04-07', '2024-04-11'),
(20, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Luxury Room', '3', '₹90000', '2024-03-30', '2024-04-04'),
(21, 'Rumit', 'Kanani', 'kananirumit2003@gmail.com', '2003-12-19', 'Surat', '9106776464', 'Classic Room', '3', '₹39000', '2024-04-07', '2024-04-12'),
(22, 'brijesh', 'kachhadiya', 'brijeshkachhadiya542@gmail.com', '2002-07-25', 'Surat', '9106776464', 'Luxury Room', '10', '₹300000', '2024-03-30', '2024-04-05');

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
(2, 'test ', 'chovatiyarushit@gmail.com', 1, 2, 1, '2024-03-21', '₹3800'),
(3, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 1, 1, 1, '2024-03-31', '₹2850'),
(4, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 1, 1, 1, '2024-03-30', '₹2850'),
(5, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 1, 2, 1, '2024-03-31', '₹3800'),
(6, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 1, 1, 2, '2024-03-30', '₹3900'),
(7, 'Rushit chovatiya ', 'chovatiyarushit@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(8, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 1, 0, '2024-03-29', '₹2650'),
(9, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(10, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 3, '2024-04-06', '₹6750'),
(11, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(12, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 1, 2, 0, '2024-04-06', '₹2750'),
(13, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-31', '₹5700'),
(14, 'Rumit Kanani ', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(15, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 6, '2024-03-30', '₹9900'),
(16, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-04-05', '₹5700'),
(17, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-04-03', '₹5700'),
(18, 'Rumit Kanani', 'kananirumit2003@gmail.com', 8, 7, 7, '2024-03-29', '₹20800'),
(19, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-29', '₹5700'),
(20, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-29', '₹5700'),
(21, 'Rushit chovatiya', 'chovatiyarushit@gmail.com', 3, 2, 2, '2024-03-30', '₹6550'),
(22, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-29', '₹5700'),
(23, 'Rumit Kanani', 'kananirumit2003@gmail.com', 3, 3, 2, '2024-03-29', '₹7500'),
(24, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-29', '₹5700'),
(25, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 0, '2024-03-30', '₹3600'),
(26, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-31', '₹5700'),
(27, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-31', '₹5700'),
(28, 'Rushit chovatiya', 'chovatiyarushit@gmail.com', 11, 2, 2, '2024-04-06', '₹13350'),
(29, 'Rumit Kanani', 'kananirumit2003@gmail.com', 3, 2, 2, '2024-03-31', '₹6550'),
(30, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 1, 2, '2024-03-31', '₹4750'),
(31, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 1, 2, '2024-03-30', '₹4750'),
(32, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 1, 2, '2024-03-31', '₹4750'),
(33, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 1, 2, '2024-03-30', '₹4750'),
(34, 'Rumit Kanani', 'kananirumit2003@gmail.com', 3, 3, 2, '2024-04-05', '₹7500'),
(35, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 1, 1, '2024-04-05', '₹3700'),
(36, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 1, '2024-03-30', '₹4650'),
(37, 'Rumit Kanani', 'kananirumit2003@gmail.com', 4, 2, 3, '2024-03-31', '₹8450'),
(38, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-04-07', '₹5700'),
(39, 'Rumit', 'kananirumit2003@gmail.com', 1, 1, 1, '2024-04-05', '₹2850'),
(40, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-04-06', '₹5700'),
(41, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-31', '₹5700'),
(42, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 0, '2024-04-04', '₹3600'),
(43, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(44, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 3, '2024-04-05', '₹6750'),
(45, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 3, '2024-04-07', '₹6750'),
(46, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(47, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-04-06', '₹5700'),
(48, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 2, '2024-03-30', '₹5700'),
(49, 'Rumit Kanani', 'kananirumit2003@gmail.com', 3, 3, 2, '2024-03-30', '₹7500'),
(50, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 0, '2024-04-06', '₹3600'),
(51, 'Rumit Kanani', 'kananirumit2003@gmail.com', 2, 2, 0, '2024-04-07', '₹3600'),
(52, 'brijesh kachadiya', 'brijeshkachhadiya542@gmail.com', 11, 2, 0, '2024-03-30', '₹11250'),
(53, 'Rushit chovatiya', 'chovatiyarushit@gmail.com', 2, 2, 0, '2024-03-30', '₹3600');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `cardticket`
--
ALTER TABLE `cardticket`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
