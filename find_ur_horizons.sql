-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 02:28 AM
-- Server version: 10.4.32-MariaDB-log
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find_ur_horizons`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `parameter_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `aksi` int(11) DEFAULT NULL,
  `plan` int(11) DEFAULT NULL,
  `kreatif` int(11) DEFAULT NULL,
  `idealisme` int(11) DEFAULT NULL,
  `fleksibilitas` int(11) DEFAULT NULL,
  `simpati` int(11) DEFAULT NULL,
  `sosial` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`parameter_id`, `user_id`, `aksi`, `plan`, `kreatif`, `idealisme`, `fleksibilitas`, `simpati`, `sosial`) VALUES
(1, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 8, 15, 10, 0, 0, 20, 15, 20),
(3, 9, 65, 100, 50, 55, 75, NULL, 10),
(4, 10, 5, 10, 10, 5, 20, 0, 0),
(5, 11, 20, 40, 20, 25, 40, 10, 0),
(6, 12, 20, 60, 30, 20, 25, 0, 10),
(7, 13, 50, 35, 40, 45, 65, NULL, 5),
(8, 14, 0, 0, 0, 0, 0, 0, 0),
(9, 15, 0, 0, 0, 0, 0, 0, 0),
(10, 16, 30, 20, 45, 35, 25, -15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(1, '', '', ''),
(2, '', 'test11@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5'),
(3, '', 'azza1@gmail.com', 'test123'),
(4, '', 'pulcadesign@gmail.com', 'test123'),
(5, '', 'mahezayuu@gmail.com', 'test123'),
(6, 'test150', 'test150@gmail.com', 'test123'),
(7, '', 'test151@gmail.com', 'test123'),
(8, '', 'test152@gmail.com', 'test123'),
(9, '', 'fix@gmail.com', 'test123'),
(10, '', '', ''),
(11, '', 'fix2@gmail.com', 'test123'),
(12, '', '', ''),
(13, 'test12345', 'test11111@gmail.com', 'test123'),
(14, 'test1234', 'test12333@gmail.com', 'test123'),
(15, 'testlagi1', 'testlagi1@gmail.com', 'test123'),
(16, 'admin', 'adm@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`parameter_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `parameter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
