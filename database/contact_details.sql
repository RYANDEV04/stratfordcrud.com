-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 04:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `middlename` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `contact`, `email`, `address`, `date_created`, `date_updated`) VALUES
(8, ' JERICHO', 'MONTILLA', 'YWAY', 'Male', '09195668888', 'jerico@gmail.com', 'General Santos City', '2024-11-22 10:54:59', NULL),
(9, 'GLENN', 'TABORA', 'DUMALANTA', 'Male', '09155668888', 'glenn@gmail.com', 'General Santos City', '2024-11-22 10:56:15', NULL),
(10, 'SEAN MICHAEL CEDRICK', 'MONTILLA', 'ZACARIAS', 'Male', '09955668888', 'zacarias@gmail.com', 'General Santos City', '2024-11-22 10:58:18', NULL),
(11, 'MARY JOY', 'AMPAN', 'DIAGAN', 'Male', '08885338888', 'maryjoy@gmail.com', 'General Santos City', '2024-11-22 11:00:37', '2024-11-22 11:01:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
