-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 28, 2023 at 06:50 AM
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
  `percent` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `status` text NOT NULL,
  `date` text NOT NULL,
  `convacation` text DEFAULT NULL,
  `warden` text DEFAULT NULL,
  `usab` text DEFAULT NULL,
  `daruso` text DEFAULT NULL,
  `library` text DEFAULT NULL,
  `dean` text DEFAULT NULL,
  `coach` text DEFAULT NULL,
  `bursar` text DEFAULT NULL,
  `card` text DEFAULT NULL,
  `loan` text DEFAULT NULL,
  `principal` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `student_id`, `stage`, `percent`, `remarks`, `status`, `date`, `convacation`, `warden`, `usab`, `daruso`, `library`, `dean`, `coach`, `bursar`, `card`, `loan`, `principal`) VALUES
(1, '17', '2', '2', '-', '0', '2023-06-27', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1'),
(2, '18', '13', NULL, '0', '1', '2023-06-27', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(3, '2', '13', '13', '0', '0', '2023-06-28', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(4, '20', '3', '11', '-', '0', '2023-06-28', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clearance`
--
ALTER TABLE `clearance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clearance`
--
ALTER TABLE `clearance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
