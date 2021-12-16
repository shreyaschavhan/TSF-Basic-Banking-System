-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 11:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(4) NOT NULL COMMENT 'id',
  `name` varchar(40) NOT NULL COMMENT 'name',
  `account` varchar(10) NOT NULL COMMENT 'account',
  `email` varchar(40) NOT NULL COMMENT 'email',
  `balance` int(10) NOT NULL COMMENT 'balance',
  `image` longtext NOT NULL COMMENT 'image',
  `dob` varchar(10) NOT NULL COMMENT 'dateofbirth'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `account`, `email`, `balance`, `image`, `dob`) VALUES
(1, 'Piyanka Sharma', '9090909090', 'piyankasharma@task.com', 2000, 'assets/images/1.jpg', '19/10/2001'),
(2, 'Allu Arjun', '12389123', 'alluarjun@superstar.com', 20000, 'assets/images/3.jpg', '20/10/2002'),
(3, 'Random Girl', '12313432', 'randomgirl@random.com', 2993, 'assets/images/2.jpg', '2/06/2001'),
(4, 'Sourabh Agarwal', '2342342342', 'sourabh@agarwal.com', 3004, 'assets/images/4.jpg', '15/2/2002'),
(5, 'Random Person', '24234242', 'random@person.com', 5000, 'assets/images/5.jpg', '12/5/2003'),
(6, 'Random Boy', '12313232', 'random@boy.com', 9000, 'assets/images/6.jpg', '2/12/2004'),
(7, 'Name Surname', '2342342', 'name@surname.com', 2500, 'assets/images/7.jpg', '12/08/2015'),
(8, 'Mighty Raju', '2342342', 'mighty@raju.com', 12645, 'assets/images/8.jpg', '5/5/2006'),
(9, 'Nobita Nobi', '534222132', 'nobita@nobi.com', 6069, 'assets/images/9.jpg', '23/12/2015'),
(10, 'Dora Doraemon', '41312311', 'dora@doraemon.com', 52497, 'assets/images/10.jpg', '12/4/2003');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `fromMail` varchar(40) NOT NULL,
  `toMail` varchar(40) NOT NULL,
  `amount` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`fromMail`, `toMail`, `amount`) VALUES
('dora@doraemon.com', 'nobita@nobi.com', 12),
('dora@doraemon.com', 'mighty@raju.com', 300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
