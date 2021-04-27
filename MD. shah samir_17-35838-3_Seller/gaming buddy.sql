-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:59 AM
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
-- Database: `gaming_buddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `userId` varchar(36) NOT NULL,
  `friendId` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `userId`, `friendId`) VALUES
(20, '99174686708989952', '99193445700075521'),
(21, '99193445700075521', '99174686708989952'),
(22, '99193962287333376', '99174686708989952'),
(23, '99174686708989952', '99193962287333376'),
(24, '99193445700075521', '99193962287333376'),
(25, '99193962287333376', '99193445700075521'),
(26, '99193962287333377', '99174686708989952'),
(27, '99174686708989952', '99193962287333377'),
(28, '99193962287333377', '99174686708989952'),
(29, '99174686708989952', '99193962287333377');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` double NOT NULL,
  `senderId` varchar(36) NOT NULL,
  `receiverId` varchar(36) NOT NULL,
  `status` text NOT NULL DEFAULT 'pendding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `senderId`, `receiverId`, `status`) VALUES
(66, '99193445700075521', '99193445700075521', 'pendding'),
(67, '99193445700075521', '99193445700075524', 'pendding'),
(68, '99193445700075521', '99193445700075523', 'pendding'),
(69, '99193445700075521', '99193962287333376', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(36) NOT NULL,
  `sellerId` varchar(36) NOT NULL,
  `userId` varchar(36) NOT NULL,
  `itemsId` text NOT NULL,
  `payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `region` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `imgUrl` text DEFAULT '\'\\\'\\\\\\\'../img/avatar_icon.png\\\\\\\'\\\'\'',
  `selectedGames` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `email`, `password`, `name`, `phone`, `region`, `dob`, `gender`, `imgUrl`, `selectedGames`) VALUES
('99174686708989952', 'rawzerin@gmail.com', 'raw@123', 'Rawzerin Fariha', '0172237323', 'Bangladesh', '2000-09-27', 'Female', '../storage/player_profile_pictures/99174686708989952.jpg', 'GTA V,FIFA 21,CS GO'),
('99193445700075521', 'samir@gmail.com', 'sam@123', 'Samir', '01626', 'Afghanistan', '1999-12-29', 'Male', '../storage/player_profile_pictures/99193445700075521.jpeg', 'Valorant'),
('99193445700075522', 'rawzerin1@gmail.com', 'raw@123', 'rawzerin', '293018290', 'Bangladesh', '1999-12-29', 'Male', '\'\\\'\\\\\\\'../img/avatar_icon.png\\\\\\\'\\\'\'', 'Valorant,CS GO'),
('99193445700075523', 'rawzerin2@gmail.com', 'raw@123', 'rawzerin', '9032930', 'Bangladesh', '1999-02-12', 'Male', '\'\\\'\\\\\\\'../img/avatar_icon.png\\\\\\\'\\\'\'', 'Freefire'),
('99193445700075524', 'rawzerin3@gmail.com', 'raw@123', 'rawzerin', '93402394890', 'Afghanistan', '1999-02-12', 'Male', '\'\\\'\\\\\\\'../img/avatar_icon.png\\\\\\\'\\\'\'', 'FIFA 21'),
('99193962287333376', 'jam@gmail.com', 'raw@123', 'Jams', '3832038', 'Bangladesh', '1233-03-12', 'Male', '../img/male_avatar_icon.png', 'GTA V'),
('99193962287333377', 'nishi@gmail.com', 'raw@123', 'Nishi', '2391290', 'Bangladesh', '1122-02-12', 'Female', '../img/female_avatar_icon.png', 'Valorant,GTA V,Pubg'),
('99209421116145665', 'bill@gmail.com', 'sam@123', 'Bill gates', '3849728312', 'United', '1950-01-12', 'Male', '../img/male_avatar_icon.png', 'GTA V,FIFA 21');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(36) NOT NULL,
  `sellerId` text NOT NULL,
  `productName` text NOT NULL,
  `ProductDetails` text NOT NULL,
  `price` double NOT NULL,
  `category` text NOT NULL,
  `imgUrl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `sellerId`, `productName`, `ProductDetails`, `price`, `category`, `imgUrl`) VALUES
('99179696972890115', '99170945389821956', 'CS Go', 'gift card', 1200, 'Gift', '../storage/product_pictures/99170945389821956.jpeg'),
('99180722127896576', '99170945389821956', 'GTA 5 Pc game', 'The most popular game by Rockstar games djaskdhaks iahdlas  daksdklajds diasjdlasd aksdjasdlas d asdkaljsdla djaksdka s  daksjdl', 1500, 'Game', '../storage/product_pictures/437097725342679842199170945389821956.jpg'),
('99180722127896577', '99170945389821956', 'Fifa 21', 'Fifa 21 pc game', 2000, 'Game', '../storage/product_pictures/394105986352182889199170945389821956.png'),
('99180722127896578', '99170945389821956', 'Dota 2', 'New season battlepass', 1300, 'BattlePass', '../storage/product_pictures/37520550360459500599170945389821956.jpg'),
('99180722127896579', '99170945389821956', 'Valorant Gun skin', 'Unlock the gun skin with brand new battle pass', 2000, 'BattlePass', '../storage/product_pictures/231244521278266426199170945389821956.jpg'),
('99180722127896580', '99170945389821956', 'Valorant Gun skin', 'Unlock the gun skin with brand new battle pass', 2000, 'BattlePass', '../storage/product_pictures/427073287187757632999170945389821956.jpg'),
('99218220463947776', '99170945389821956', 'COD Warzone', 'pc game', 300, 'Game', '../storage/product_pictures/470793741678262251399170945389821956.jpg'),
('99218220463947777', '99170945389821956', 'Apex Legends', 'pc games', 1233, 'Game', '../storage/product_pictures/270849731316169414499170945389821956.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` varchar(36) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(35) NOT NULL,
  `shopName` text NOT NULL,
  `phone` text NOT NULL,
  `region` text NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` text NOT NULL,
  `imgUrl` text DEFAULT '../img/avatar_icon.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `email`, `password`, `name`, `shopName`, `phone`, `region`, `dob`, `gender`, `imgUrl`) VALUES
('99170945389821956', 'samir@gmail.com', 'sam@123', 'Md samir', 'Eshop', '01626737', 'Bangladesh', '1999-12-29', 'Male', '../storage/seller_profile_pictures/99170945389821956.jpeg'),
('99209421116145664', 'rawzerin@gmail.com', 'sam@123', 'rawzerin', 'e-mart', '83921890', 'Bangladesh', '1999-12-12', 'Female', '../img/avatar_icon.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
