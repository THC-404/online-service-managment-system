-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 04:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin_tb`
--

CREATE TABLE `adminlogin_tb` (
  `a_login_id` int(11) NOT NULL,
  `a_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `a_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `adminlogin_tb`
--

INSERT INTO `adminlogin_tb` (`a_login_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin ', 'admin@gmail.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `assignwork_tb`
--

CREATE TABLE `assignwork_tb` (
  `rno` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `assign_tech` varchar(60) COLLATE utf8_bin NOT NULL,
  `assign_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `assignwork_tb`
--

INSERT INTO `assignwork_tb` (`rno`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `assign_tech`, `assign_date`) VALUES
(1, 1, 'KeyBoard', 'keyboard is not broken . not working properly .', 'Taufiq', 'House 123 A', 'Bahadderhat', 'CTG', 'CTG', 4231, 'taufiq@gmail.com', 1234567789, 'Jabar', '2022-03-09'),
(2, 2, 'Mouse', 'Mouse is broken not working well ', 'Asif', '123 b House', 'Quyais', 'CTG', 'CTG', 4314, 'asd@gmail.com', 1234567789, 'Soikot', '2022-03-11'),
(3, 3, 'Fan', 'fan is broken  . the capacitor is damage ', 'Rifat', '234 A block', 'Agrabad', 'CTG', 'CTG', 4231, 'Rifat@gmail.com', 1234596121, 'Karim', '2022-03-12'),
(4, 4, 'Light', 'all the light of our house is broken  cause of high voltage ', 'Safi Ulla', '765 road 2 ', 'muradpur', 'CTG', 'CTG', 4314, 'safi@gmail.com', 1234567789, 'Rahim', '2022-03-13'),
(5, 5, 'Switches', 'cause of power problem the switch  become automatic . so we can not use it ', 'karim khan', '123 House ', '2no gate', 'CTG', 'CTG', 4312, 'karim@gmail.com', 1121459623, 'Rahim', '2022-03-14'),
(6, 6, 'AC', 'the ac is not working properly . the cooler is not  ok ', 'taufiq', 'House 123 A', 'Bahadderhat', 'CTG', 'CTG', 4312, 'taufiq@gmail.com', 1623121459, 'Jabar', '2022-03-16'),
(7, 7, 'Washing Maching', 'washing maching is getting overheat  and the wheeler is not spinning', 'Asif', 'House 123 A', 'Quyais', 'CTG', 'CTG', 4314, 'asd@gmail.com', 1234567789, 'Karim', '2022-03-19'),
(8, 8, 'Fridge', 'Fridge is broken not working properly ', 'CSE21', '123 A block', 'khulsi', 'CTG', 'CTG ', 4371, 'cse21@gmail.com', 12345678, 'Soikot', '2022-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `requesterlogin_tb`
--

CREATE TABLE `requesterlogin_tb` (
  `r_login_id` int(11) NOT NULL,
  `r_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `r_password` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `requesterlogin_tb`
--

INSERT INTO `requesterlogin_tb` (`r_login_id`, `r_name`, `r_email`, `r_password`) VALUES
(1, 'Taufiq', 'taufiq@gmail.com', 'asd'),
(2, 'Asif', 'asd@gmail.com', 'asd'),
(3, 'Rifat', 'Rifat@gmail.com', 'asd'),
(4, 'Safi Ulla', 'safi@gmail.com', 'zxc'),
(5, 'karim khan ', 'karim@gmail.com', 'asd'),
(6, 'CSE21', 'cse21@gmail.com', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text COLLATE utf8_bin NOT NULL,
  `request_desc` text COLLATE utf8_bin NOT NULL,
  `requester_name` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_add1` text COLLATE utf8_bin NOT NULL,
  `requester_add2` text COLLATE utf8_bin NOT NULL,
  `requester_city` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_state` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) COLLATE utf8_bin NOT NULL,
  `requester_mobile` bigint(11) NOT NULL,
  `request_date` date NOT NULL,
  `requester_tech` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_date`, `requester_tech`) VALUES
(9, 'PC', 'pc nosto hoi geche ', 'Taufiq', '123 A block', 'bahadderhat', 'CTG', 'CTG ', 4371, 'Taufiq@gmail.com', 12345678, '2022-03-30', 'Karim'),
(10, 'Light', 'All of our light has been broken ', 'Asif', '123 A block', 'khulsi', 'CTG', 'CTG ', 4234, 'asd@gmail.com', 12345678, '2022-03-31', 'Jabar');

-- --------------------------------------------------------

--
-- Table structure for table `technician_tb`
--

CREATE TABLE `technician_tb` (
  `empid` int(11) NOT NULL,
  `empName` varchar(60) COLLATE utf8_bin NOT NULL,
  `empCity` varchar(60) COLLATE utf8_bin NOT NULL,
  `empMobile` bigint(11) NOT NULL,
  `empEmail` varchar(60) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `technician_tb`
--

INSERT INTO `technician_tb` (`empid`, `empName`, `empCity`, `empMobile`, `empEmail`) VALUES
(1, 'Jabar', 'CTG', 1712432345, 'Jabar@gmail.com'),
(2, 'Zahir ', 'CTG', 1712432355, 'Zahir@gmai.com'),
(3, 'Soikoit', 'Dhaka', 1312423455, 'Soikoit@gmail.com'),
(4, 'Rahim', 'CTG', 1612633455, 'Rahim@gmail.com'),
(5, 'Karim', 'CTG', 1712432345, 'Karim@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  ADD PRIMARY KEY (`a_login_id`);

--
-- Indexes for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  ADD PRIMARY KEY (`r_login_id`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `technician_tb`
--
ALTER TABLE `technician_tb`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin_tb`
--
ALTER TABLE `adminlogin_tb`
  MODIFY `a_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignwork_tb`
--
ALTER TABLE `assignwork_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requesterlogin_tb`
--
ALTER TABLE `requesterlogin_tb`
  MODIFY `r_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `technician_tb`
--
ALTER TABLE `technician_tb`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
