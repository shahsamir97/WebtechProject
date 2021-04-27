-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 08:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `country`, `phone`, `email`, `password`) VALUES
(8, 'admin', 'Bangladesh', 1701005002, 'admin@gmail.com', '1234'),
(12, 'Onim Khan', 'Bangladesh', 1701005002, 'ff@gmail.com', '123456'),
(16, 'games', 'Bangladesh', 1701005002, 'onim@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `country`, `phone`, `email`, `password`) VALUES
(2, 'Onim Khan', 'Bangladesh', 1788500222, 'animdad@gmail.com', 'animkhan121'),
(14, '65', '654', 2147483647, 'Onim Khan', 'animkhan121'),
(22, 'Onim Khan', 'Bangladesh', 2147483647, 'animdad@gmail.com', 'animkhan121'),
(23, 'Onim Khan', 'Bangladesh', 2147483647, 'animdad@gmail.com', 'animkhan121'),
(24, '', '', 0, 'Onim Khan', 'animkhan121'),
(25, '', '', 0, 'Onim Khan', 'animkhan121'),
(26, '', '', 0, 'Onim Khan', 'animkhan121'),
(27, '', '', 0, 'Onim Khan', 'animkhan121'),
(28, '', '', 0, 'Onim Khan', 'animkhan121'),
(29, '', '', 0, 'Onim Khan', 'animkhan121'),
(30, 'Onim Khan', 'Bangladesh', 2147483647, 'animdad@gmail.com', 'animkhan121'),
(32, '', '', 0, 'Onim Khan', 'animkhan121'),
(33, '', '', 0, 'Onim Khan', 'animkhan121'),
(35, '', '', 0, 'Onim Khan', 'animkhan121'),
(36, '', '', 0, 'Onim Khan', 'animkhan121'),
(37, '', '', 0, 'Onim Khan', 'animkhan121'),
(41, 'anim', 'Bangladesh', 1235367812, 'animdad@gmail.com', 'onim121'),
(42, 'Onim Khan', 'Bangladesh', 1701005002, 'animdad@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
