-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 03:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(100) NOT NULL,
  `indentity` int(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `indentity`, `firstname`, `lastname`, `email`, `phone`, `address`) VALUES
(2, 1, 'Abdullh Al ', 'Tuhin', 'sssssss@gmail.com', '01917546365', 'Dhaka'),
(4, 2, 'Abu ', 'saleh', 'abu@gmail.com', '01917546365', 'rajshahi'),
(5, 2, 'Abu ', 'Mostofa', 'tumpa@gmail.com', '01917546365', 'Rajshahi'),
(6, 2, 'john', 'john', 'john@gmail.com', '01917546365', 'Khulna'),
(7, 1, 'Rased', 'rana', 'rasel@gmail.com', '01917546365', 'Rajshahi'),
(8, 1, 'Shhekhar', 'Shhekhar', 'shekhardebnath@gmail.com', '01917546365', 'Khulna');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'John Smith', 'tumpa@gmail.com', 'tumpa', 'tumpa'),
(2, 'John Smith', 'tumpa@gmail.com', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
