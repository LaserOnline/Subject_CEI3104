-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 10:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblogin`
--

CREATE TABLE `tblogin` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_status` enum('0','100','500','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblogin`
--

INSERT INTO `tblogin` (`login_id`, `login_username`, `login_password`, `login_email`, `login_status`) VALUES
(1, 'admin', '499dbfe047ec6d1be088d659ee5bff4e1a72d5ca2038e5638c90306ef217ff39', 'piyawatbol@gmail.com', '500'),
(3, '207B', 'e4b1b4d8c05c060b9548bb0b8da9d0f1c324c43b45812ad940909fb01ffe2059', 'piyawatbol@gmail.com', '0'),
(4, 'bol2', '499dbfe047ec6d1be088d659ee5bff4e1a72d5ca2038e5638c90306ef217ff39', 'piyawatbol@gmail.com', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblogin`
--
ALTER TABLE `tblogin`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblogin`
--
ALTER TABLE `tblogin`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
