-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 10:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donateb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'njoropingu@gmail.com', '3b2b7c969137c361c148df47220d50bc'),
(2, 'raila', 'njoropingu@gmail.com', '3b2b7c969137c361c148df47220d50bc'),
(3, 'admin', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'ben', 'benmill@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(100) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `merchant_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `transaction_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `first_name`, `last_name`, `merchant_id`, `status`, `transaction_code`, `phone`, `description`, `amount`, `date`) VALUES
(1, 'bernard', '', '', '', '', '0723829300', '', '999', ''),
(2, 'ryan', 'njoroge', '2', 'completed', 'WELCOME', '0723829300', '', '100', 'TODAY'),
(3, 'pressure', 'kamau', '27', 'PENDING', '02a2d8d7-7ab8-481f-8fa2-5b0cce3ba616', '0723829300', 'donation', '3', '2020-07-30 15:37:33'),
(4, 'ben', 'ben', '28', 'PENDING', '1b209e0e-514d-4ac7-b83d-804787a551a7', '0723829300', 'test', '10', '2020-07-31 06:16:36'),
(5, 'de', 'de', '32', 'PENDING', 'f1dfaaf5-41ce-44cb-b437-6edeedf70dd3', '0723829300', 'donation', '100', '2020-07-31 06:36:45'),
(6, 'biden', 'b', '34', 'PENDING', '1cf1b1fa-4873-4dd0-b9cb-2ddf5fdbea04', '0723829300', 'r', '1', '2020-07-31 07:10:22'),
(7, 'caster', 'fai', '35', 'PENDING', 'afee7b73-0031-4e86-beb7-dc7f296e5c05', '0723829300', 'donation', '10', '2020-07-31 07:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `param`
--

CREATE TABLE `param` (
  `id` int(100) NOT NULL,
  `conkey` varchar(255) NOT NULL,
  `secret` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
