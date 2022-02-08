-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 10:37 PM
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
  `part` int(3) NOT NULL,
  `series_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_list`
--

INSERT INTO `data_list` (`id`, `main_id`, `name`, `vdo`, `part`, `series_time`) VALUES
(1, 1, 'Onepiece', 'npFAmRqHpQc', 1, '2022-02-06 04:35:32'),
(2, 1, 'Onepiece', 'npFAmRqHpQc', 2, '2022-02-06 04:35:42'),
(3, 1, 'Onepiece', 'npFAmRqHpQc', 3, '2022-02-06 04:35:58'),
(4, 1, 'Onepiece', 'npFAmRqHpQc', 4, '2022-02-06 04:36:00'),
(5, 2, 'Conan', 'npFAmRqHpQc', 1, '2022-02-06 04:36:29'),
(6, 2, 'Conan', 'npFAmRqHpQc', 2, '2022-02-06 04:36:31'),
(7, 2, 'Conan', 'npFAmRqHpQc', 3, '2022-02-06 04:36:32'),
(8, 2, 'Conan', 'npFAmRqHpQc', 4, '2022-02-06 04:36:34'),
(9, 2, 'Conan', 'npFAmRqHpQc', 5, '2022-02-06 04:36:35'),
(10, 3, 'Naruto', 'npFAmRqHpQc', 1, '2022-02-06 04:39:51'),
(11, 3, 'Naruto', 'npFAmRqHpQc', 2, '2022-02-06 04:39:52'),
(12, 3, 'Naruto', 'npFAmRqHpQc', 3, '2022-02-06 04:39:53'),
(13, 3, 'Naruto', 'npFAmRqHpQc', 4, '2022-02-06 04:39:55'),
(14, 3, 'Naruto', 'npFAmRqHpQc', 5, '2022-02-06 04:39:57');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
