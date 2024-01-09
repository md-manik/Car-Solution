-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 06:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsolution`
--
CREATE DATABASE IF NOT EXISTS `carsolution` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `carsolution`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `carwash_booking`
--

CREATE TABLE `carwash_booking` (
  `cwb_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` time NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `carwash_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carwash_details`
--

CREATE TABLE `carwash_details` (
  `carwash_id` int(11) NOT NULL,
  `carwash_name` varchar(30) NOT NULL,
  `carwash_price` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carwash_details`
--

INSERT INTO `carwash_details` (`carwash_id`, `carwash_name`, `carwash_price`, `admin_id`) VALUES
(1, 'Basic', 1000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `carwash_payment`
--

CREATE TABLE `carwash_payment` (
  `payment_id` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_details`
--

CREATE TABLE `car_details` (
  `car_id` int(11) NOT NULL,
  `car_model` varchar(30) NOT NULL,
  `car_name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_details`
--

INSERT INTO `car_details` (`car_id`, `car_model`, `car_name`, `price`, `admin_id`) VALUES
(1, 'M5', 'BMW', 9500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_rent_booking`
--

CREATE TABLE `car_rent_booking` (
  `crb_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `car_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `city`, `subject`) VALUES
(1, 'Mithila', 'mithila@gmail.com', 'Dhaka', 'I want to book car');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `password`) VALUES
(1, 'mim', 'mim@gmail.com', '$2y$10$WHkAf2HEUUPhXQ1Imr5jjO3L0siaicHe1R97GXx0bJCJJH1Oysqay');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `carwash_booking`
--
ALTER TABLE `carwash_booking`
  ADD PRIMARY KEY (`cwb_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `carwash_id` (`carwash_id`);

--
-- Indexes for table `carwash_details`
--
ALTER TABLE `carwash_details`
  ADD PRIMARY KEY (`carwash_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `carwash_payment`
--
ALTER TABLE `carwash_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk10` (`customer_id`);

--
-- Indexes for table `car_details`
--
ALTER TABLE `car_details`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `car_rent_booking`
--
ALTER TABLE `car_rent_booking`
  ADD PRIMARY KEY (`crb_id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carwash_booking`
--
ALTER TABLE `carwash_booking`
  MODIFY `cwb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carwash_details`
--
ALTER TABLE `carwash_details`
  MODIFY `carwash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carwash_payment`
--
ALTER TABLE `carwash_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `car_details`
--
ALTER TABLE `car_details`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_rent_booking`
--
ALTER TABLE `car_rent_booking`
  MODIFY `crb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carwash_booking`
--
ALTER TABLE `carwash_booking`
  ADD CONSTRAINT `carwash_booking_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `carwash_booking_ibfk_2` FOREIGN KEY (`carwash_id`) REFERENCES `carwash_details` (`carwash_id`);

--
-- Constraints for table `carwash_details`
--
ALTER TABLE `carwash_details`
  ADD CONSTRAINT `carwash_details_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `carwash_payment`
--
ALTER TABLE `carwash_payment`
  ADD CONSTRAINT `fk10` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `car_details`
--
ALTER TABLE `car_details`
  ADD CONSTRAINT `car_details_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `car_rent_booking`
--
ALTER TABLE `car_rent_booking`
  ADD CONSTRAINT `car_rent_booking_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car_details` (`car_id`),
  ADD CONSTRAINT `car_rent_booking_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
