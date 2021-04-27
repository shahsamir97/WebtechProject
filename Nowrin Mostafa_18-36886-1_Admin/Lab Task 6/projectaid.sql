-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 07:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectaid`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `gid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` varchar(200) NOT NULL,
  `glink` varchar(200) NOT NULL,
  `con` varchar(200) NOT NULL,
  `gtype` varchar(200) NOT NULL,
  `uid` int(200) NOT NULL,
  `verf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`gid`, `title`, `des`, `glink`, `con`, `gtype`, `uid`, `verf`) VALUES
(1, 'pubg', 'pubg', 'pubg', 'pubg', 'game', 13, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uname` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `fname`, `lname`, `email`, `password`, `phone`, `address`, `occupation`, `status`, `user_type`) VALUES
(11, 'RafatLegend', '', '', 'rafat@legend.com', '123123', '01912304102', '', '', 'active', 'admin'),
(12, 'Nowrin', 'abc', 'def', 'abc@gmail.com', '12345678', '99191919', 'abc', 'Others', 'banned', 'gen_user'),
(13, 'nowrin mostofa', 'Nowrin ', 'Mostofa', 'nowrin@gmail.com', '123456789', '+8801995387975', '161/2-D,Baganbari,Dhaka Cantonment', 'Others', 'active', 'gen_user'),
(20, 'Mostofa', 'narjis', 'mostofa', 'narjis@gmail.com', '12345678', '0155558888', 'Dhaka', 'Job', 'Active', 'admin'),
(21, 'Prionty', '', '', 'prionty@gmail.com', '12345678', '012587496', '', '', 'active', 'admin'),
(22, 'hehe', 'heh', 'huhu', 'hehe@gmail.com', '12345678', '2434242424', 'dsjwodjwow', 'Others', 'active', 'gen_user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
