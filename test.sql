-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 05:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(256) NOT NULL,
  `secretkey` varchar(256) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `twofaissetup` tinyint(1) DEFAULT NULL,
  `twofaenabled` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `secretkey`, `active`, `twofaissetup`, `twofaenabled`) VALUES
(1, 'webservices', 'webservices@vanier', 123, '123', '', 0, NULL, NULL),
(3, 'webapps', 'ckhawand@gmail.com', 0, '$2y$10$hAy7N6FIpSPJSg/qHGaXkO.NV8AwtoYwVwAWcpalfaVsbMJy9807S', '5FO4Z6W7UZWEXWFS', 1, 1, 1),
(4, 'webapps1', 'a@a', 0, '$2y$10$30f/nBZtxiaTfJofQTpKj.A9rzu30hIZP6ndHkl5sRIFpL8QrrL9e', '', 0, NULL, NULL),
(16, 'totp1', 'ckhawand@gmail.com', 0, '$2y$10$9seqKxablcWi2jh1scyCr.qBa8GAllGA8OqvoLtPVvkm6AH2kwtke', '5FO4Z6W7UZWEXWFS', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
