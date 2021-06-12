-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2021 at 11:54 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `frogs`
--

CREATE TABLE `frogs` (
  `id` int(11) NOT NULL,
  `weight` varchar(45) NOT NULL,
  `colour` varchar(45) NOT NULL,
  `hatch_date` date NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frogs`
--

INSERT INTO `frogs` (`id`, `weight`, `colour`, `hatch_date`, `description`) VALUES
(1, '20', 'Brown', '2021-06-01', 'The description'),
(5, '45', 'Green', '2021-06-10', 'a description');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frogs`
--
ALTER TABLE `frogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frogs`
--
ALTER TABLE `frogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
