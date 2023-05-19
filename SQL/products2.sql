-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 01:55 PM
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
-- Database: `product_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `pid` int(11) NOT NULL,
  `pname` varchar(64) NOT NULL,
  `pbrand` varchar(64) NOT NULL,
  `pcolor` varchar(64) NOT NULL,
  `price` int(11) NOT NULL,
  `pquantity` int(11) NOT NULL,
  `dateAdded` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`pid`, `pname`, `pbrand`, `pcolor`, `price`, `pquantity`, `dateAdded`) VALUES
(27, 'Nike Air Kukini “Water” ', 'Nike', 'Coffee', 6000, 20, '2023-04-16 11:02:39'),
(28, 'Nike SB Ishod Wair', 'Nike', 'Grey & Red', 6000, 20, '2023-04-18 21:26:10'),
(29, 'New Balance 990v3 ', 'Nike ', 'Grey & Red', 9000, 20, '2023-04-19 20:50:54'),
(32, 'Nike Air Kukini “Water” ', 'Nike', 'Red', 8000, 10, '2023-04-20 19:36:07'),
(39, 'Yeezys', 'Nike', 'Coffee', 6000, 12, '2023-04-22 20:29:58'),
(41, 'Air Force 1', 'Nike', 'Coffee', 6000, 10, '2023-04-22 20:36:15'),
(44, 'Yeezys', 'Nike', 'Red', 6000, 20, '2023-04-22 20:45:22'),
(49, 'Nike SB Ishod Wair', 'Nike', 'Coffee', 6000, 10, '2023-04-23 21:16:43'),
(50, 'Nike Air Force 1 React', 'Nike', 'Grey & Red', 9000, 19, '2023-04-23 21:23:15'),
(51, 'mango', 'manga', 'mango grahamn', 12, 21, '2023-04-24 15:37:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
