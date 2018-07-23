-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 03:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_finals`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales_report`
--

CREATE TABLE `sales_report` (
  `prd_num` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `qty_buy` int(100) NOT NULL,
  `Date_Purchase` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_report`
--

INSERT INTO `sales_report` (`prd_num`, `item_name`, `price`, `qty_buy`, `Date_Purchase`) VALUES
(1111111, 'Pineapple Juice', 20, 12, '2017-06-01 00:48:12'),
(1111111, 'Pineapple Juice', 20, 12, '2017-06-01 00:58:21'),
(1111111, 'Pineapple Juice', 20, 100, '2017-06-01 00:58:39'),
(1111111, 'Pineapple Juice', 20, 100, '2017-06-01 00:59:25'),
(1111111, 'Pineapple Juice', 20, 100, '2017-06-01 00:59:42'),
(1, 'Coke', 99, 100, '2017-06-01 01:14:09'),
(45, 'Tears', 23, 100, '2017-06-01 01:15:10'),
(23, 'Pepsi', 34, 12, '2017-06-01 01:18:33'),
(23, 'Pepsi', 34, 12, '2017-06-01 01:18:53'),
(112324, 'Water', 25, 13, '2017-06-01 01:19:21'),
(5, 'RC', 5, 1, '2017-06-01 03:36:03'),
(1, 'Coke', 99, 12, '2017-06-02 13:13:50'),
(112324, 'Water', 25, 145, '2017-06-02 13:14:20'),
(5, 'RC', 10, 21, '2017-06-02 13:29:56'),
(1, 'Coke', 99, 23, '2017-06-02 13:53:41'),
(5, 'RC', 10, 39, '2017-06-02 14:09:42'),
(1, 'Coke', 99, 12, '2017-06-02 14:36:22'),
(45, 'Tears', 23, 124, '2017-06-05 08:25:53'),
(1111111, 'Pineapple Juice', 20, 123, '2017-06-05 13:12:01'),
(1346, 'Fruit Soda', 15, 46, '2017-06-05 13:13:16'),
(5, 'RC', 10, 45, '2017-06-05 13:14:22'),
(1346, 'Fruit Soda', 15, 44, '2017-06-05 13:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE `tbl_inventory` (
  `prd_num` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `Date` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`prd_num`, `item_name`, `price`, `qty`, `Date`) VALUES
(777, 'coke', 8, 14, '2018-07-23 20:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `prd_num` int(100) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `qty_sold` int(100) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty_buy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`prd_num`, `item_name`, `price`, `qty_sold`, `Date`, `qty_buy`) VALUES
(1, 'Coke', 40, 418, '2017-05-30 00:00:00', 12),
(5, 'RC', 10, 136, '2017-06-01 03:35:42', 45),
(23, 'Pepsi', 34, 156, '2017-05-30 00:00:00', 12),
(45, 'Tears', 23, 644, '2017-05-30 00:00:00', 124),
(777, 'coke', 8, 0, '2018-07-23 20:05:33', 0),
(1346, 'Fruit Soda', 15, 90, '2017-06-05 13:12:47', 44),
(3246, 'Vodka', 500, 0, '2017-06-05 13:21:12', 0),
(112324, 'Water', 25, 185, '0000-00-00 00:00:00', 145),
(1111111, 'Pineapple Juice', 20, 535, '2017-05-30 00:00:00', 123);

-- --------------------------------------------------------

--
-- Table structure for table `userinfotable`
--

CREATE TABLE `userinfotable` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` enum('Administrator','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfotable`
--

INSERT INTO `userinfotable` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(8) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `displayName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `displayName`) VALUES
(1, 'admin', 'admin123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
  ADD PRIMARY KEY (`prd_num`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- Indexes for table `tbl_sales`
--
ALTER TABLE `tbl_sales`
  ADD PRIMARY KEY (`prd_num`);

--
-- Indexes for table `userinfotable`
--
ALTER TABLE `userinfotable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfotable`
--
ALTER TABLE `userinfotable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
