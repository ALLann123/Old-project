-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 12:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculturalstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Allan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `id` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `salary` int(255) NOT NULL,
  `equipment` int(255) NOT NULL,
  `oil` int(255) NOT NULL,
  `tcost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `req_time` varchar(100) NOT NULL,
  `ret_date` varchar(100) NOT NULL,
  `ret_time` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `pickup_point` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `confirmation` int(11) NOT NULL,
  `veh_reg` varchar(255) NOT NULL,
  `driverid` int(11) NOT NULL,
  `finished` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`booking_id`, `name`, `username`, `department`, `req_date`, `req_time`, `ret_date`, `ret_time`, `destination`, `pickup_point`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`, `paid`) VALUES
(1, ' paul gichure', 'paul', 'Information Technology', '07/22/2021', '', '07/24/2021', '', 'Nairobi', 'Juja', 'gichurepaul97@gmail.com', 797770433, 0, '', 0, 0, 1),
(2, 'kelvin maina', 'kelvin', 'Information Technology', '07/23/2021', '10:00Am', '07/24/2021', '200PM', 'Nairobi', '', 'kelvin@gmail.com', 23456789, 0, '', 0, 0, 0),
(3, 'sarah wairimu', 'sarai', 'Public Relations', '07/23/2021', '10:00Am', '07/23/2021', '200PM', 'Nairobi', 'jkuat', 'sarah@gmail.com', 2147483647, 0, '', 0, 0, 0),
(4, 'sarah wairimu', 'sarai', 'Computing', '07/28/2021', '1200', '07/31/2021', '300', 'Nairobi', 'Juja', 'sarah@gmail.com', 2147483647, 0, '', 0, 0, 0),
(5, 'martha kisangi', 'martha', 'Information Technology', '07/24/2021', '10:00Am', '07/24/2021', '200PM', 'Nairobi', 'Juja', 'martha@gmail.com', 45678890, 0, '', 0, 0, 1),
(6, 'simon shepherd', 'shepherd', 'Pharmacy', '08/05/2021', '10:00Am', '08/31/2021', '200PM', 'Nairobi', 'Juja', 'simon@gmail.com', 797570433, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cereals`
--

CREATE TABLE `cereals` (
  `Cerealtype` varchar(11) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `legumes`
--

CREATE TABLE `legumes` (
  `Legume Type` varchar(25) NOT NULL,
  `Quantity` varchar(25) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legumes`
--

INSERT INTO `legumes` (`Legume Type`, `Quantity`, `Price`) VALUES
('Beans', '100', 120);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `admin`) VALUES
(8, 'allan', 'kariuki', 'allankaris237@gmail.com', 'allan', '1234567', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `VegetableType` varchar(25) NOT NULL,
  `Quantity` int(25) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`VegetableType`, `Quantity`, `Price`) VALUES
('Carrot', 400, 20),
('Beetroot', 300, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cereals`
--
ALTER TABLE `cereals`
  ADD PRIMARY KEY (`Cerealtype`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legumes`
--
ALTER TABLE `legumes`
  ADD PRIMARY KEY (`Legume Type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
