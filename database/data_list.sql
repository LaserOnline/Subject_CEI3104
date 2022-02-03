-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 08:45 PM
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
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_list`
--

CREATE TABLE `data_list` (
  `id` int(3) NOT NULL,
  `main_id` int(3) NOT NULL,
  `name` text NOT NULL,
  `vdo` text NOT NULL,
  `part` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_list`
--

INSERT INTO `data_list` (`id`, `main_id`, `name`, `vdo`, `part`) VALUES
(1, 72, 'ยอดนักสืบจิ๋วโคนัน', 'TJaGTRJ3CCY', 1),
(2, 72, 'ยอดนักสืบจิ๋วโคนัน', 'zYEYNyVntvY', 2),
(3, 72, 'ยอดนักสืบจิ๋วโคนัน', 'WcvdKa13MCY', 3),
(4, 72, 'ยอดนักสืบจิ๋วโคนัน', 'WcvdKa13MCY', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_list`
--
ALTER TABLE `data_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_list`
--
ALTER TABLE `data_list`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
