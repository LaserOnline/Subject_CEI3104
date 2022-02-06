-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 10:38 PM
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
-- Table structure for table `data_movie`
--

CREATE TABLE `data_movie` (
  `id` int(3) NOT NULL,
  `img` text NOT NULL,
  `name` text NOT NULL,
  `vdo_ex` text NOT NULL,
  `vdo_main` text NOT NULL,
  `status_list` enum('YES','NO') NOT NULL DEFAULT 'NO',
  `movie_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_movie`
--

INSERT INTO `data_movie` (`id`, `img`, `name`, `vdo_ex`, `vdo_main`, `status_list`, `movie_time`) VALUES
(1, 'onepiece.jpg', 'Onepiece', 'tmeOjFno6Do', 'tmeOjFno6Do', 'YES', '2022-02-06 04:35:25'),
(2, 'conan.jpg', 'Conan', 'tmeOjFno6Do', 'tmeOjFno6Do', 'YES', '2022-02-06 04:36:23'),
(3, 'naruto.jpg', 'Naruto', 'tmeOjFno6Do', 'tmeOjFno6Do', 'YES', '2022-02-06 04:38:49'),
(4, '1.jpg', 'Avenger ', 'tmeOjFno6Do', 'tmeOjFno6Do', 'NO', '2022-02-06 04:39:00'),
(5, '2.jpg', 'Avenger1', 'tmeOjFno6Do', 'tmeOjFno6Do', 'NO', '2022-02-06 04:55:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_movie`
--
ALTER TABLE `data_movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_movie`
--
ALTER TABLE `data_movie`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
