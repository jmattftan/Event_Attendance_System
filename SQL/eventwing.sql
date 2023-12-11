-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 11, 2023 at 06:11 AM
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
-- Table structure for table `admin_account_data`
--

CREATE TABLE `admin_account_data` (
  `id` int(50) NOT NULL,
  `admin_number` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_account_created` datetime NOT NULL DEFAULT current_timestamp(),
  `admin_account_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account_data`
--

INSERT INTO `admin_account_data` (`id`, `admin_number`, `last_name`, `first_name`, `middle_name`, `date_of_birth`, `sex`, `contact_number`, `email_address`, `password`, `admin_account_created`, `admin_account_updated`) VALUES
(1, '28021110122023', 'Tan', 'James Matthew', 'Figueroa', '1999-12-12', 'Male', '09770971992', 'matt.taning121299@gmail.com', '$2y$10$tj6JO2jxCAojYdtzh0U/SueeyZXSAc79JBCXuihu8.jJC68k0f58m', '2023-12-10 23:02:28', '2023-12-10 23:08:20'),
(2, '59261211122023', 'Musk', 'Elon', 'Senior', '1976-12-04', 'Male', '09770971995', 'elonmusk@gmail.com', '$2y$10$Kgcz9LHZpsGpGSqoaCP9deyjQ7vgW.SsUMpzZEL2KNo5.sHBfnWJu', '2023-12-11 00:26:59', '2023-12-11 00:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `event_data`
--

CREATE TABLE `event_data` (
  `id` int(50) NOT NULL,
  `event_id` varchar(255) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_description` varchar(1000) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_start_time` time NOT NULL,
  `event_end_time` time NOT NULL,
  `event_location` varchar(255) NOT NULL,
  `event_speaker` varchar(255) NOT NULL,
  `event_handler` varchar(255) NOT NULL,
  `event_cost` varchar(255) NOT NULL,
  `event_created` datetime NOT NULL DEFAULT current_timestamp(),
  `event_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_data`
--

INSERT INTO `event_data` (`id`, `event_id`, `event_name`, `event_description`, `event_type`, `event_date`, `event_start_time`, `event_end_time`, `event_location`, `event_speaker`, `event_handler`, `event_cost`, `event_created`, `event_updated`) VALUES
(1, '20231209021735', 'Arduino Workshop', 'None', 'Curricular', '2024-12-05', '10:00:00', '23:00:00', 'University of the Eastern', 'Elon Musk', 'Elon Musk', '250', '2023-12-09 14:17:35', '2023-12-11 03:19:18'),
(2, '20231209021838', 'CSS Tutorial', 'None', 'Outreach', '2023-12-13', '13:00:00', '14:00:00', 'University of the East', 'Mark Zuckerberg', 'James Matthew Tan', '500', '2023-12-09 14:18:38', '2023-12-11 00:25:06'),
(3, '20231209030850', 'NodeJS Tutorial', 'None', 'Curricular', '2023-12-23', '13:00:00', '17:00:00', 'University of the East', 'Jeff Bezos', 'James Matthew Tan', '100', '2023-12-09 15:08:50', '2023-12-11 00:25:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_data`
--

CREATE TABLE `user_account_data` (
  `id` int(50) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_account_created` datetime NOT NULL DEFAULT current_timestamp(),
  `user_account_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account_data`
--

INSERT INTO `user_account_data` (`id`, `student_number`, `last_name`, `first_name`, `middle_name`, `date_of_birth`, `sex`, `year_level`, `program`, `contact_number`, `email_address`, `password`, `user_account_created`, `user_account_updated`) VALUES
(1, '20170123214', 'Tan', 'James', 'Figueroa', '1999-12-12', 'Male', '4th Year College Student', 'Bachelor of Science in Computer Engineering', '09770971992', 'tan.jamesmatthew@ue.edu.ph', '$2y$10$viwwJ/np7tY8swj9XAnYlOWN5kdrwyHZ/xWRFOOtvGVotlxuyhwti', '2023-12-09 14:14:14', '2023-12-09 14:14:14'),
(2, '20170123215', 'Santos', 'Mikaela', 'Renysse', '1997-12-04', 'Female', '4th Year College Student', 'Bachelor of Science in Computer Engineering', '09770971993', 'mikarennyse@gmail.com', '$2y$10$1BVyviZVKI2DizzLWStfeeA53QUMRvTLg395qQqqFYYYVvQFgGt6y', '2023-12-09 14:15:09', '2023-12-09 14:15:09'),
(3, '20170123216', 'Flores', 'Nora', 'Joson', '1945-02-06', 'Female', '4th Year College Student', 'Bachelor of Science in Chemical Engineering', '09770971998', 'noraflores@yahoo.com', '$2y$10$giyzmAAKGTKT3Otupd3xee0yXLCJ2.uw0TuGQ.JrniyFM5i7NFXPi', '2023-12-09 14:16:05', '2023-12-11 12:15:51');

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
-- Indexes for table `admin_account_data`
--
ALTER TABLE `admin_account_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_data`
--
ALTER TABLE `event_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account_data`
--
ALTER TABLE `user_account_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment_data`
--
ALTER TABLE `user_payment_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account_data`
--
ALTER TABLE `admin_account_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_data`
--
ALTER TABLE `event_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_account_data`
--
ALTER TABLE `user_account_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_payment_data`
--
ALTER TABLE `user_payment_data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
