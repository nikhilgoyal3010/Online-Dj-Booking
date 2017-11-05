-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2017 at 05:10 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odj`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_dates_status`
--

CREATE TABLE `booking_dates_status` (
  `d_id` int(11) NOT NULL,
  `b_avail_date` date NOT NULL,
  `b_status` varchar(10) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_dates_status`
--

INSERT INTO `booking_dates_status` (`d_id`, `b_avail_date`, `b_status`) VALUES
(201, '2017-11-09', 'Available'),
(201, '2017-11-12', 'Available'),
(201, '2017-11-15', 'Available'),
(202, '2017-11-02', 'Available'),
(202, '2017-11-05', 'Available'),
(202, '2017-11-07', 'Available'),
(202, '2017-11-08', 'Available'),
(203, '2017-11-02', 'Available'),
(203, '2017-11-10', 'Available'),
(203, '2017-11-11', 'Available'),
(203, '2017-11-20', 'Available'),
(204, '2017-11-11', 'Available'),
(204, '2017-11-16', 'Available'),
(204, '2017-11-18', 'Available'),
(204, '2017-11-20', 'Available'),
(205, '2017-11-03', 'Available'),
(205, '2017-11-04', 'Available'),
(205, '2017-11-08', 'Available'),
(206, '2017-11-11', 'Available'),
(206, '2017-11-21', 'Available'),
(206, '2017-11-25', 'Available'),
(207, '2017-11-10', 'Available'),
(207, '2017-11-12', 'Available'),
(207, '2017-11-15', 'Available'),
(208, '2017-11-13', 'Available'),
(208, '2017-11-21', 'Available'),
(209, '2017-11-01', 'Available'),
(209, '2017-11-03', 'Available'),
(209, '2017-11-05', 'Available'),
(210, '2017-11-02', 'Available'),
(210, '2017-11-05', 'Available'),
(210, '2017-11-07', 'Available'),
(210, '2017-11-10', 'Available'),
(211, '2017-11-05', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `u_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `u_phone_no` bigint(20) NOT NULL,
  `d_name` varchar(15) NOT NULL,
  `b_date` date NOT NULL,
  `b_payment_mode` varchar(20) NOT NULL,
  `b_payment_amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`u_id`, `d_id`, `u_phone_no`, `d_name`, `b_date`, `b_payment_mode`, `b_payment_amt`) VALUES
(102, 203, 9646813586, 'DJ Full House', '2017-10-25', 'paytm', 15000),
(102, 206, 9646813586, 'DJ Cat GIF', '2017-10-27', 'cash', 15000),
(106, 202, 9646813590, 'DJ Harvey', '2017-10-23', 'cash', 14500),
(106, 210, 9646813590, 'DJ Nugget', '2017-10-25', 'cash', 22000),
(106, 204, 9646813590, 'DJ Sprinkles', '2017-10-27', 'paytm', 10000),
(105, 207, 9646813589, 'DJ Bubblebutt', '2017-10-25', 'paytm', 13500),
(103, 209, 9646813587, 'DJ Fingerbang', '2017-10-24', 'cash', 12000),
(103, 202, 9646813587, 'DJ Harvey', '2017-10-27', 'cash', 14500),
(103, 210, 9646813587, 'DJ Nugget', '2017-10-31', 'cash', 22000),
(104, 201, 9646813588, 'DJ Snackwells', '2017-10-24', 'paytm', 25000),
(104, 207, 9646813588, 'DJ Bubblebutt', '2017-10-28', 'cash', 13500),
(104, 205, 9646813588, 'DJ The Hang', '2017-10-31', 'paytm', 24000),
(105, 203, 9646813589, 'DJ Full House', '2017-10-27', 'paytm', 24000),
(105, 206, 9646813589, 'DJ Cat GIF', '2017-10-30', 'cash', 8000),
(137, 201, 9876543210, 'DJ Snackwells', '2017-11-05', 'Paytm', 25000),
(102, 201, 9646813586, 'DJ Snackwells', '2017-11-08', 'Paytm', 15000),
(102, 201, 9646813586, 'DJ Snackwells', '2017-11-06', 'Paytm', 15000),
(137, 202, 9876543210, 'DJ Harvey', '2017-11-03', 'Cash', 23000),
(138, 208, 9874563210, 'DJ Soup n Salad', '2017-11-20', 'Cash', 17000);

-- --------------------------------------------------------

--
-- Table structure for table `dj`
--

CREATE TABLE `dj` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(15) NOT NULL,
  `d_by` varchar(15) NOT NULL,
  `d_rating` double NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `d_day_charges` int(11) NOT NULL,
  `d_evening_charges` int(11) NOT NULL,
  `d_phone_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dj`
--

INSERT INTO `dj` (`d_id`, `d_name`, `d_by`, `d_rating`, `d_image`, `d_day_charges`, `d_evening_charges`, `d_phone_no`) VALUES
(201, 'DJ Snackwells', 'Nikhil', 5, 'dj1.jpg', 15000, 25000, 7894561230),
(202, 'DJ Harvey', 'Udipto', 4.5, 'dj2.jpg', 14500, 23000, 7894561231),
(203, 'DJ Full House', 'Hasan', 4.6, 'dj3.jpg', 15000, 24000, 7894561232),
(204, 'DJ Sprinkles', 'Subham', 3.9, 'dj4.jpg', 10000, 20000, 7894561233),
(205, 'DJ The Hang', 'Shubham', 4.2, 'dj5.jpg', 18000, 24000, 7894561234),
(206, 'DJ Cat GIF', 'Mitush', 3.8, 'dj6.jpg', 8000, 15000, 7894561235),
(207, 'DJ Bubblebutt', 'Bhavesh', 4, 'dj7.jpg', 13500, 21500, 7894561236),
(208, 'DJ Soup n Salad', 'Rishi', 4.9, 'dj8.jpg', 17000, 25000, 7894561237),
(209, 'DJ Fingerbang', 'Manish', 4.4, 'dj9.jpg', 12000, 20000, 7894561238),
(210, 'DJ Nugget', 'Priya', 4.8, 'dj10.jpg', 16000, 22000, 7894561239),
(211, 'DJ Srv', 'srivastava', 3.5, '3.jpg', 10000, 20000, 2134567890);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `u_phone_no` bigint(10) NOT NULL,
  `u_email_id` varchar(30) NOT NULL,
  `u_password` varchar(15) NOT NULL,
  `u_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_phone_no`, `u_email_id`, `u_password`, `u_image`) VALUES
(101, 'admin', 9646813585, 'nikhilgoyal@gmail.com', 'admin', 'IMG_20170622_103158_730.jpg'),
(102, 'user1', 9646813586, 'nikhilgoyal1@gmail.com', 'user1', 'IMG_20170622_103158_730.jpg'),
(103, 'user2', 9646813587, 'nikhilgoyal2@gmail.com', 'user2', 'IMG_20170622_103158_730.jpg'),
(104, 'user3', 9646813588, 'nikhilgoyal3@gmail.com', 'user3', 'IMG_20170622_103158_730.jpg'),
(105, 'user4', 9646813589, 'nikhilgoyal4@gmail.com', 'user4', 'IMG_20170622_103158_730.jpg'),
(106, 'user5', 9646813590, 'nikhilgoyal5@gmail.com', 'user5', 'IMG_20170622_103158_730.jpg'),
(136, 'nikhil', 9999999999, 'nikhilgoyal7@gmail.com', 'user123', 'IMG_20170622_103158_730.jpg'),
(137, 'Mitush', 9876543210, 'mitush@gmail.com', 'abc12345', 'IMG_20170202_001159_466.jpg'),
(138, 'Nikhil', 9874563210, 'nikhilgoyal8@gmail.com', 'nikhil12', 'IMG_20170711_234252_688.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_dates_status`
--
ALTER TABLE `booking_dates_status`
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `u_phone_no` (`u_phone_no`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `d_name` (`d_name`);

--
-- Indexes for table `dj`
--
ALTER TABLE `dj`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_phone_no` (`d_phone_no`),
  ADD UNIQUE KEY `d_name` (`d_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email_id` (`u_email_id`),
  ADD UNIQUE KEY `u_phone_no` (`u_phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dj`
--
ALTER TABLE `dj`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_dates_status`
--
ALTER TABLE `booking_dates_status`
  ADD CONSTRAINT `booking_dates_status_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `dj` (`d_id`);

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `booking_details_ibfk_2` FOREIGN KEY (`u_phone_no`) REFERENCES `user` (`u_phone_no`),
  ADD CONSTRAINT `booking_details_ibfk_3` FOREIGN KEY (`d_id`) REFERENCES `dj` (`d_id`),
  ADD CONSTRAINT `booking_details_ibfk_4` FOREIGN KEY (`d_name`) REFERENCES `dj` (`d_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
