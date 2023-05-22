-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2023 at 12:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gocs`
--

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(255) NOT NULL,
  `student_id` text NOT NULL,
  `stage` text NOT NULL,
  `percent` text NOT NULL,
  `remarks` text DEFAULT NULL,
  `status` text NOT NULL,
  `warden` text NOT NULL,
  `usab` text NOT NULL,
  `daruso` text NOT NULL,
  `library` text NOT NULL,
  `dean` text NOT NULL,
  `coach` text NOT NULL,
  `bursar` text NOT NULL,
  `card` text NOT NULL,
  `loan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `student_id`, `stage`, `percent`, `remarks`, `status`, `warden`, `usab`, `daruso`, `library`, `dean`, `coach`, `bursar`, `card`, `loan`) VALUES
(8, '2', '3', '12', '-', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` text NOT NULL,
  `fullname` text NOT NULL,
  `id_number` text NOT NULL,
  `role` text NOT NULL,
  `status` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `fullname`, `id_number`, `role`, `status`, `password`) VALUES
(1, 'admin@gocs.go.tz', 'admin', '123456', '1', '1', 'YWRtaW4='),
(2, 'mariam@gmail.com', 'Mariam Ahmad', '2020-04-07432', '2', '1', 'YWRtaW4='),
(4, 'rose@gocs.go.tz', 'Rosemary Mgema', '192-900-593-299', '3', '1', 'cm9zZTEyMzQ='),
(5, 'malima@gocs.go.tz', 'Ernest Malima', '81910-1891-912', '4', '1', 'TWFsaW1hQDIwMjM='),
(6, 'balihutha@gocs.go.tz', 'Pius Balihutha', '28910-2798-12981', '5', '1', 'QmFsaWh1dGhhQDIwMjM='),
(7, 'msilu@gocs.go.tz', 'Andrea Msilu', '2892-1291-1212', '6', '1', 'TXNpbHVAMjAyMw=='),
(8, 'msuya@gocs.go.tz', 'Denis Msuya', '7777-7777-7777', '7', '1', 'TXN1eWFAMjAyMw=='),
(9, 'sisti@gocs.go.tz', 'Brian Sisti', '8888-8888-8888', '8', '1', 'U2lzdGlAMjAyMw=='),
(10, 'kamoyo@gocs.go.tz', 'Daniel Kamoyo', '9999-9999-9999', '9', '1', 'S2Ftb3lvQDIwMjM='),
(11, 'lambileki@gocs.go.tz', 'Allen Lambileki', '1010-1010-1010', '10', '1', 'TGFtYmlsZWtpQDIwMjM='),
(12, 'hamisi@gocs.go.tz', 'Onesmo Hamisi', '1111-1111-1111', '11', '1', 'SGFtaXNpQDIwMjM='),
(13, 'muya@gocs.go.tz', 'Karim Muya', '1212-1212-1212', '12', '1', 'TXV5YUAyMDIz'),
(14, 'mushi@gocs.go.tz', 'Brian Mushi', '1313-1313-1313', '13', '1', 'TXVzaGlAMjAyMw==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
