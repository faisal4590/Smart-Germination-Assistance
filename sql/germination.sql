-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2018 at 11:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `germination`
--

-- --------------------------------------------------------

--
-- Table structure for table `seeddetails`
--

CREATE TABLE `seeddetails` (
  `id` int(13) NOT NULL,
  `seed_name` varchar(255) NOT NULL,
  `plant_date` datetime NOT NULL,
  `temperature` varchar(255) NOT NULL,
  `moisture` varchar(255) NOT NULL,
  `humidity` varchar(255) NOT NULL,
  `light` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seeddetails`
--

INSERT INTO `seeddetails` (`id`, `seed_name`, `plant_date`, `temperature`, `moisture`, `humidity`, `light`, `ph`) VALUES
(2, 'asd', '0000-00-00 00:00:00', '4', '2', '2', '2', '2'),
(3, 'asd', '2018-06-11 00:00:00', '23', '2', '2', '2', '2'),
(4, 'dsa', '2018-06-18 02:03:00', '31', '22', '2', '2', '2'),
(5, 'rice', '2018-06-11 14:02:00', '12', '22', '21', '21', '4'),
(6, 'jute', '2018-06-04 15:04:00', '32', '22', '22', '22', '2');

-- --------------------------------------------------------

--
-- Table structure for table `testedseed`
--

CREATE TABLE `testedseed` (
  `id` int(13) NOT NULL,
  `tested_seed_name` varchar(255) NOT NULL,
  `tested_seed_temp` varchar(255) NOT NULL,
  `tested_seed_moisture` varchar(255) NOT NULL,
  `tested_seed_humidity` varchar(255) NOT NULL,
  `tested_seed_light` varchar(255) NOT NULL,
  `tested_seed_ph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testedseed`
--

INSERT INTO `testedseed` (`id`, `tested_seed_name`, `tested_seed_temp`, `tested_seed_moisture`, `tested_seed_humidity`, `tested_seed_light`, `tested_seed_ph`) VALUES
(1, 'asd', '12', '12', '12', '12', '12'),
(2, 'asd', '32', '32', '32', '32', '32'),
(3, 'asd', '53', '54', '32', '32', '2'),
(4, 'das', '12', '12', '12', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Faisal Ibn Aziz', 'optimizedfaisal42@gmail.com', 'googlemaniac420'),
(2, 'Shams Rony', 'shams@gmail.com', 'shams123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seeddetails`
--
ALTER TABLE `seeddetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testedseed`
--
ALTER TABLE `testedseed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seeddetails`
--
ALTER TABLE `seeddetails`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testedseed`
--
ALTER TABLE `testedseed`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
