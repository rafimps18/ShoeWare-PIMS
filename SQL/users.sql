-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 01:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'test', 'test@gmail.com', 'test0', '$2y$10$IJ.Fp//EIZSdmVpNfBCD9OvGPhmJARgLfBrSm3sKPT5INq4xtoMxa'),
(2, 'test1', 'test1@gmail.com', 'TEST1', '$2y$10$GjwuW.KCtXEUq0MywrFB6O7uq6G/pHYxYU5lgokm8R/7FR5hQz9Re'),
(3, 'test2', 'test2@gmail.com', 'test2', '$2y$10$LuQ.sHaXRAFZWgg39gPd1eD9nfpMxJDPF8PXqHxMk6kLYnuk9yrqm'),
(4, 'test3', 'test3@gmail.com', 'test3', '$2y$10$pT9Aqh4NMIYq79gAKsxtJOpO21oJJHRiuRwFkzhxK/YYYEGCQrKsW'),
(5, 'test4', 'test4@test.com', 'test4', '$2y$10$qsP3dfmYdMxSerOis8t2GuPVtNJJ8tgMejLBXdgr8cKZvV5ataDuu'),
(6, 'test5', 'test5@gmail.com', 'test5test', '$2y$10$IwgabvqFBsCdID/kGifD.uWs4gP6ly6WnLcs0Klw1rBNvYOjvB2FG'),
(9, 'test7', 'test7@gmail.com', 'test7', '$2y$10$/Z5tyLFBwLY53HYgM0C6VOqKQuSGvVYQ.2Mo/7NifxJtreBnk8D8u'),
(11, 'test8', 'test8@gmail.com', 'test8', '$2y$10$y7Ba2WA4/3tOWOSOYj4dmOSd6TPi/MvGey/2XitG3zNusPO3EOwFC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
