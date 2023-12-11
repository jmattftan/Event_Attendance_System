-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 11, 2023 at 05:47 AM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventwing`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_payment_data`
--

CREATE TABLE `user_payment_data` (
  `id` int(50) NOT NULL,
  `user_payment_id` varchar(255) NOT NULL,
  `event_purchaser` varchar(255) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `date_of_purchase` datetime NOT NULL DEFAULT current_timestamp(),
  `user_payment_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment_data`
--

INSERT INTO `user_payment_data` (`id`, `user_payment_id`, `event_purchaser`, `event_id`, `event_name`, `amount`, `payment_method`, `date_of_purchase`, `user_payment_updated`, `attendance`) VALUES
(1, '52202312111126', 'James Tan', '20231209021735', 'Arduino Workshop', '250', 'Cash', '2023-12-11 11:26:52', '2023-12-11 11:35:02', 'Present'),
(2, '03202312111127', 'Mikaela Santos', '20231209021735', 'Arduino Workshop', '250', 'Cash', '2023-12-11 11:27:03', '2023-12-11 11:27:27', 'Present'),
(3, '39202312111229', 'Nora Flores', '20231209021735', 'Arduino Workshop', '250', 'Online Payment', '2023-12-11 12:29:39', '2023-12-11 12:29:51', 'None yet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_payment_data`
--
ALTER TABLE `user_payment_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_payment_data`
--
ALTER TABLE `user_payment_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
