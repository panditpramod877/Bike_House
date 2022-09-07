-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 09:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bike_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `bike_buy`
--

CREATE TABLE `bike_buy` (
  `id_b` int(11) NOT NULL,
  `buyerid` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `bike_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_buy`
--

INSERT INTO `bike_buy` (`id_b`, `buyerid`, `status`, `bike_id`) VALUES
(1, 2, 'cancled', 1),
(2, 2, 'approved', 1),
(3, 2, 'approved', 2),
(4, 2, 'cancled', 1),
(5, 2, 'approved', 2),
(6, 2, 'pending', 2),
(7, 2, 'approved', 1),
(8, 2, 'cancled', 2),
(10, 4, 'cancled', 1),
(11, 4, 'approved', 3),
(12, 4, 'pending', 1),
(13, 4, 'pending', 1),
(15, 4, 'pending', 4),
(16, 4, 'pending', 4),
(17, 4, 'pending', 4),
(18, 4, 'pending', 4),
(19, 4, 'pending', 4),
(20, 4, 'pending', 4),
(21, 4, 'pending', 4),
(22, 4, 'pending', 4),
(23, 4, 'pending', 4),
(24, 4, 'pending', 4),
(25, 2, 'pending', 4),
(26, 2, 'pending', 1),
(27, 4, 'pending', 1),
(28, 4, 'pending', 1),
(29, 4, 'pending', 1),
(30, 2, 'pending', 1),
(31, 2, 'pending', 1),
(32, 2, 'pending', 1),
(33, 2, 'pending', 1),
(34, 2, 'pending', 1),
(35, 2, 'pending', 1),
(36, 2, 'pending', 1),
(37, 2, 'pending', 1),
(38, 2, 'pending', 1),
(39, 2, 'pending', 1),
(40, 2, 'pending', 1),
(41, 2, 'pending', 1),
(42, 2, 'pending', 4),
(43, 6, 'pending', 1),
(44, 6, 'pending', 1),
(45, 6, 'pending', 2),
(46, 6, 'pending', 4),
(47, 6, 'pending', 4),
(48, 6, 'approved', 4),
(49, 4, 'pending', 4),
(50, 4, 'approved', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bike_sell`
--

CREATE TABLE `bike_sell` (
  `id` int(11) NOT NULL,
  `bikename` varchar(100) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `bikecc` varchar(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `bikepicture` varchar(100) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `bike_description` varchar(100) DEFAULT NULL,
  `total_rating` double NOT NULL DEFAULT 0,
  `total_raters` double NOT NULL DEFAULT 0,
  `rating` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike_sell`
--

INSERT INTO `bike_sell` (`id`, `bikename`, `companyname`, `bikecc`, `price`, `bikepicture`, `admin_id`, `bike_description`, `total_rating`, `total_raters`, `rating`) VALUES
(1, ' FZ-V2 ', 'Yamaha', ' 150', 3, 'img201.png', 1, 'The Yamaha FZ Series set a new benchmark for biking. The FZS-FI takes it to the next level. It bring', 16, 5, 3.2),
(2, ' Discover ', 'Bajaj', ' 125', 2, 'img209.jpg', 1, '    Type: 4-valve DTS-i Twin Spark with ExhausTEC    Max Power: 13 @ 9000 (Ps @ RPM)    Max To', 5, 2, 2.5),
(3, ' Pulsar NS ', 'Bajaj', ' 200', 3, 'img200.png', 1, 'this is pulsar 200 NS bike', 9, 2, 4.5),
(4, ' NS 200 ', 'Bajaj', ' 200', 400, 'img200.png', 1, 'The Bajaj Pulsar NS200 is powered by a 199.5 cc air-cooled engine which produces of power. It has a ', 38, 9, 4.2222222222222);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `address`, `message`, `time`) VALUES
(1, 'Pramod Pandit', 'pan@gmail.com', ' 9876543210', 'nkt', 'good time to develop this website.', ''),
(2, 'binod', 'bi@gmail.com', ' 1234567890', 'ktm', 'good', '2022/06/05/Sunday'),
(3, 'hello', 'hello@gmail.com', ' 9876543210', 'he', 'i m ready to use this site', '2022/06/05/Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `username`, `password`, `email`, `mobile`, `address`, `gender`, `usertype`) VALUES
(1, 'admin', 'admin100', 'admin100', 'admin@gmail.com', '9876567865', 'ktm', 'male', 'admin'),
(2, ' pramod', 'pramod', 'pandit', ' pan@gmail.com', '9876874323', 'nkt', ' Male', 'rider'),
(4, ' binod', 'binod', 'bk', ' binod@gmail.com', '9876567897', 'ktm', ' Male', 'rider'),
(5, ' umesh', 'umesh', 'aryal', ' umar@gmail.com', '9876897656', 'nuwakot', ' Male', 'rider'),
(6, ' Thakur Pd Sapkota', 'thakur', 'sapkota', ' thakur@gmail.com', '9876897656', 'nuwakot', ' Male', 'rider');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bike_buy`
--
ALTER TABLE `bike_buy`
  ADD PRIMARY KEY (`id_b`),
  ADD KEY `buyerid` (`buyerid`),
  ADD KEY `bike_id` (`bike_id`);

--
-- Indexes for table `bike_sell`
--
ALTER TABLE `bike_sell`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bike_buy`
--
ALTER TABLE `bike_buy`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `bike_sell`
--
ALTER TABLE `bike_sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bike_buy`
--
ALTER TABLE `bike_buy`
  ADD CONSTRAINT `bike_buy_ibfk_1` FOREIGN KEY (`buyerid`) REFERENCES `information` (`id`),
  ADD CONSTRAINT `bike_buy_ibfk_2` FOREIGN KEY (`bike_id`) REFERENCES `bike_sell` (`id`);

--
-- Constraints for table `bike_sell`
--
ALTER TABLE `bike_sell`
  ADD CONSTRAINT `bike_sell_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `information` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
