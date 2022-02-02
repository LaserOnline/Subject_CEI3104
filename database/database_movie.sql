-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 07:56 PM
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
  `vdo_main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_movie`
--

INSERT INTO `data_movie` (`id`, `img`, `name`, `vdo_ex`, `vdo_main`) VALUES
(1, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(2, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(3, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(4, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(5, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(6, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(7, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(8, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(9, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(10, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(11, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(12, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(13, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(14, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(15, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(16, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(17, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(18, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(19, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(20, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(21, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(22, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(23, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(24, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(25, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(26, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(27, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(28, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(29, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(30, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(31, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(32, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(33, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(34, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(35, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(36, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(37, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(38, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(39, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(40, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(41, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(42, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(43, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(44, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(45, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(46, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(47, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(48, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(49, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(50, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(51, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(52, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(53, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(54, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(55, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(56, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(57, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(58, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(59, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(60, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(61, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(62, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(63, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(64, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(65, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(66, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(67, '2.jpg\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(68, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(69, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY'),
(70, '1.jpg\r\n', 'Avenger ', 'eOrNdBpGMv8', 'https://www.youtube.com/results?search_query=avenger+%E0%B8%AB%E0%B8%99%E0%B8%B1%E0%B8%87'),
(71, '2.jpg', 'The Avenger Age of Ultron', 'tmeOjFno6Do', 'https://www.youtube.com/watch?v=tmeOjFno6Do'),
(72, 'American History X.jpg', 'American History X', 'nOzR5Jnd6bU', 'srS90jjC_IY');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
