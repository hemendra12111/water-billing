-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 02:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_info`
--

CREATE TABLE `billing_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `dob` date NOT NULL,
  `meter_number` varchar(10) NOT NULL,
  `zone_number` varchar(10) NOT NULL,
  `meter_reading` int(11) NOT NULL,
  `inserted_date` varchar(20) NOT NULL,
  `update_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_info`
--

INSERT INTO `billing_info` (`id`, `first_name`, `last_name`, `father_name`, `address`, `phone`, `zipcode`, `dob`, `meter_number`, `zone_number`, `meter_reading`, `inserted_date`, `update_date`) VALUES
(1, 'tulika', 'dubey', 'Nagesh dubey', 'abc, triveni, triveni', 7737151585, 323214, '2018-08-16', '1', '1234', 1000, '1534425840', '1534425840'),
(2, 'Neha', 'arun', 'arun ', 'Jaipur', 8233500750, 324001, '2018-08-16', '2', '1234', 2000, '1534425840', '1534425840'),
(3, 'Hemendra', 'Gurjar', 'Mohan Lal Gurjar', 'Alwar', 7976323694, 313324, '2018-08-16', '3', '4567', 3000, '1534425840', '1534425840'),
(4, 'ashish', 'shyam', 'Gagan', 'Bundi', 8233328101, 302019, '2018-08-16', '4', '1234', 4000, '1534425840', '1534425840'),
(5, 'vartika', 'gaurav', 'avinash ', 'Kota', 985647852, 324001, '2018-08-16', '5', '1555', 5000, '1534425840', '1534425840');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_info`
--
ALTER TABLE `billing_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing_info`
--
ALTER TABLE `billing_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
