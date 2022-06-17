-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:32 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `username` varchar(133) NOT NULL,
  `email` varchar(133) NOT NULL,
  `phone` int(133) DEFAULT NULL,
  `password` varchar(133) NOT NULL,
  `firstname` varchar(133) NOT NULL,
  `lastname` varchar(133) NOT NULL,
  `secretkey` varchar(256) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `twofaissetup` tinyint(4) DEFAULT NULL,
  `twofaenabled` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `firstname`, `lastname`, `secretkey`, `active`, `twofaissetup`, `twofaenabled`) VALUES
(5, 'simba21', 'simba@gmail.com', 8374298, 'simba1234', 'Simba', 'Paredes', NULL, NULL, NULL, NULL),
(6, 'sims', 'sims@gmail.com', 34890573, '$2y$10$RumKIa7ADluWmR3St/zYf.CA..daA9ZxnpiQLMJZZsRjRJhx5wMY6', 'Simba', 'Paredes', NULL, NULL, NULL, NULL),
(7, 'sims', 'sims@gmail.com', 309428532, '$2y$10$Je1b0d8mgoo3TEr.yXNOdu0Ksj8bpgEeAxVZMGsvzvhuq4N641jXS', 'Simba', 'Paredes', NULL, NULL, NULL, NULL),
(8, 'cess', 'cess@gmail.com', 234324, '$2y$10$GzqOJQLwaHSyl2sGP3F1pO67QKWuVyByoc6UXHFmWdNR8Ei8tSr42', 'Cesar', 'Paredes', NULL, NULL, NULL, NULL),
(9, 'gutoman', 'guto@gmail.com', 0, '$2y$10$cLcuGrrY.MDe.s26ggnMreOkybB9zjt9flioCX6nmlJzITBHDnRq.', 'Guto', 'Man', NULL, NULL, NULL, NULL),
(10, 'guto', 'guto@gmail.com', 0, '$2y$10$78KpEWHbyI9Hg2NqTSce9.Ax0VekbKW76jPuaToYStRU06MDabVzS', 'Guto', 'Man', NULL, NULL, NULL, NULL),
(11, 'great', 'great@gmail.com', 0, '$2y$10$WU4Sx/iciF7tXl47R.KpjOKQ2OlTKToGwYngA5gyfSuPsARn90SSC', 'Guto', 'Man', NULL, NULL, NULL, NULL),
(12, 'sims432', 's@gmail.comn', 0, '$2y$10$6bROCUtUQGAp7q0w3oasT..NxOrbwaiT8LvQh7LssB9uWIgZ5szgS', 'fdsfd', 'ffffd', NULL, NULL, NULL, NULL),
(13, 'helloo21', 'hello1234@gmail.com', 0, '$2y$10$9ilgN3RAHhyA.PnK08mUiOPlb0nCNUWfiivNP7fBWCiJCmFSRFQme', 'Hello', 'Hi', NULL, NULL, NULL, NULL),
(14, 'loko', 'loko1234@gmail.com', 0, '$2y$10$RcdZiFiIFGRpqzKBirY3GOwsZMEpewhsv3.E25I9mL6dvq8U2I8OO', 'loko', 'coco', NULL, NULL, NULL, NULL),
(15, 'cesar1234', 'cesar@gmail.com', 0, '$2y$10$eyPj1eSrPGhveBppE0PD/ezL0igyBkYbrOGcMQUDe9c3ITMwFZOC2', 'Cesar', 'Paredes', NULL, 1, NULL, NULL),
(16, 'cesss2', 'cesss4@gmail.com', 0, '$2y$10$5gMYmAypasYYMFyyCVvb5eMCrdWt5g0kHt6jZQBmt9izxggalWUfq', 'csdf', 'dfdsf', NULL, NULL, NULL, NULL),
(17, 'superman', 'superman@gmail.com', 45345, 'superman1234', 'cesar', 'adfasf', NULL, NULL, NULL, NULL),
(18, 'gutoman444', 'gutoman22@gmail.com', 0, 'gutoman1234', 'sdf', 'dfgf', NULL, NULL, NULL, NULL),
(19, 'lokoloko', 'lokoloko@gmail.com', 323423, '$2y$10$qYZITrDJzkPxAt8ZF6FF8eger2vHqYJbWat5be3p5IeOeFIxy2UP2', 'cesar', 'paredes', NULL, 1, NULL, NULL),
(20, 'simbaloko', 'simbaloko@gmail.com', 0, '$2y$10$KPi/t23vFJZuBUWbGgOfMudCSZvLZovIrtEqTs4JRkqKRlMaCrfB6', 'simba', 'paredes', NULL, 1, NULL, NULL),
(21, 'Alex', 'alex@gmail.com', 234, '$2y$10$tsCztlzvltrpTYEl.iyqFuwj7jJHSEAz9kYcks2jrjou/nAURaiZe', 'Alex', 'TheGreat', NULL, 1, NULL, NULL),
(22, 'alexa', 'alexa@gmail.com', 0, '$2y$10$PSdgSFDlBwqXEHRh8c7LQ.DBlrs0E8iargyLHxxe28RNbEit4/DBC', 'alexa', 'AMAZNAS', NULL, 1, NULL, NULL),
(23, 'AXEL', 'axel@gmail.com', 0, '$2y$10$0LDYMOoHpAURAbwGvtEIxufBMdFPsVy5Blve2PnmpdNAG/wbdbwtK', 'axel', 'paredes', NULL, 1, NULL, NULL),
(24, 'AXELITO', 'axelito@gmail.com', 0, '$2y$10$qPfRq9qrHguhhFba13btROYX1AWSffc3HI0RvqFsMEC8YlKv8QlsW', 'AXELITO', 'PAREDED', NULL, 1, NULL, NULL),
(25, 'gutoman', '', 0, '$2y$10$jsk3dckdAuvB8Y2s/V2XgeB0zFqmwXkoQiIZuLFfa.YGbPKA6Bi0G', '', '', NULL, 1, NULL, NULL),
(26, 'welcome', 'welcome@gmail.com', 23432, '$2y$10$rNVDTGZ3v92rWKb0L3wnjOM9SbpE5hTsUs1EiUL9V3N0GiXEx7aoe', 'simba', 'paredes', NULL, 1, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
