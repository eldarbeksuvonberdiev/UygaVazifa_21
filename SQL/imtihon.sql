-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2024 at 05:42 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imtihon`
--

-- --------------------------------------------------------

--
-- Table structure for table `fanlar`
--

CREATE TABLE `fanlar` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `fanlar`
--

INSERT INTO `fanlar` (`id`, `name`) VALUES
(1, 'Ona-tili'),
(2, 'Matematik'),
(7, 'Geografiya'),
(13, 'Adabiyot');

-- --------------------------------------------------------

--
-- Table structure for table `imtihonlar`
--

CREATE TABLE `imtihonlar` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `fan_id` int NOT NULL,
  `ball` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `imtihonlar`
--

INSERT INTO `imtihonlar` (`id`, `user_id`, `fan_id`, `ball`) VALUES
(1, 7, 7, 50),
(2, 1, 1, 100),
(3, 1, 5, 70),
(4, 2, 1, 85),
(5, 5, 5, 100),
(6, 9, 1, 95),
(7, 10, 11, 85);

-- --------------------------------------------------------

--
-- Table structure for table `talaba`
--

CREATE TABLE `talaba` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `talaba`
--

INSERT INTO `talaba` (`id`, `name`) VALUES
(1, 'Sardor'),
(2, 'Abdug\'ani'),
(7, 'Shohona'),
(9, 'Kiydirish'),
(10, 'Marosimi'),
(13, 'Elbek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fanlar`
--
ALTER TABLE `fanlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imtihonlar`
--
ALTER TABLE `imtihonlar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talaba`
--
ALTER TABLE `talaba`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fanlar`
--
ALTER TABLE `fanlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `imtihonlar`
--
ALTER TABLE `imtihonlar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `talaba`
--
ALTER TABLE `talaba`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
