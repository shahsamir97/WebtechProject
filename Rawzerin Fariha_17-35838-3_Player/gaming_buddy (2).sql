-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 06:00 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
(23, '99193445700075521', '99174686708989952'),
(26, '99224554718625792', '99174686708989952'),
(27, '99174686708989952', '99224554718625792'),
(32, '99225376768655360', '99174686708989952'),
(33, '99174686708989952', '99225376768655360');

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
(49, '99224554718625793', '99224554718625792', 'pendding'),
(50, '99224554718625792', '99193445700075521', 'pendding'),
(52, '99193445700075521', '99217301223505920', 'pendding'),
(59, '99174686708989952', '99193445700075524', 'pendding'),
(60, '99174686708989952', '99205109438742528', 'pendding');

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
('99174686708989952', 'rawzerin@gmail.com', 'raw@123', 'rawzerin fariha', '0172237324', 'Bangladesh', '2000-09-27', 'Female', '../storage/player_profile_pictures/99174686708989952.jpg', 'GTA V,FIFA 21,CS GO'),
('99193445700075521', 'samir@gmail.com', 'sam@123', 'Samir', '01626', 'Afghanistan', '1999-12-29', 'Male', '../storage/player_profile_pictures/99193445700075521.jpg', 'Valorant'),
('99193445700075524', 'rawzerin3@gmail.com', 'raw@123', 'rawzerin', '93402394890', 'Afghanistan', '1999-02-12', 'Female', '../storage/player_profile_pictures/99193445700075524.jpg', 'FIFA 21'),
('99193962287333376', 'jam@gmail.com', 'raw@123', 'Jams', '3832038', 'Bangladesh', '1233-03-12', 'Male', '../img/male_avatar_icon.png', 'GTA V'),
('99193962287333377', 'nishi@gmail.com', 'raw@123', 'Nishi', '2391290', 'Bangladesh', '1122-02-12', 'Female', '../storage/player_profile_pictures/99193962287333377.jpg', 'Valorant,GTA V,Pubg'),
('99205109438742528', 'a@gmail.com', '@a123456', 'rita', '01453564657', 'Afghanistan', '2021-03-29', 'Female', '../img/female_avatar_icon.png', 'Freefire,CS GO'),
('99208067345809408', 'raw@gmail.com', '123@1345a', 'mita', '0172237324', 'Bangladesh', '2021-04-22', 'Female', '../img/female_avatar_icon.png', 'Valorant,Apex Legends,GTA V,Pubg'),
('99217301223505920', 'sahir@gmail.com', 'sahir@123', 'sahir', '018456799', 'Afghanistan', '2009-02-08', 'Male', '../img/male_avatar_icon.png', 'FIFA 21,Red Dead Online,COD Warzone'),
('99224554718625792', 'sara@gmail.com', 'sara@123', 'sara', '01845768808', 'Afghanistan', '2012-05-03', 'Female', '../storage/player_profile_pictures/99224554718625792.jpg', 'Pubg,Freefire,FIFA 21,CS GO'),
('99224554718625793', 'samin@gmail.com', 'samin@123', 'samin', '019098804', 'Afghanistan', '1994-07-07', 'Male', '../storage/player_profile_pictures/99224554718625793.jpg', 'Valorant,GTA V,Pubg,FIFA 21,CS GO'),
('99224554718625794', 'abid@gmail.com', 'abid@123', 'abid', '01375879', 'Bangladesh', '1998-02-04', 'Male', '../img/male_avatar_icon.png', 'Valorant,GTA V,Pubg,Freefire,FIFA 21'),
('99224554718625795', 'shahim@gmail.com', 'shahim@123', 'shahim', 'shahim@gmail.com', 'Bangladesh', '2011-06-08', 'Male', '../img/male_avatar_icon.png', 'GTA V,FIFA 21,CS GO'),
('99224554718625796', 'sabiha@gmail.com', 'sabiha@123', 'sabiha', '012899479639', 'Bangladesh', '2003-02-08', 'Female', '../storage/player_profile_pictures/99224554718625796.jpg', 'FIFA 21,CS GO'),
('99225376768655360', 'mahira@gmail.com', 'mahira@123', 'mahira', '0135767080', 'Afghanistan', '2005-04-05', 'Female', '../img/female_avatar_icon.png', 'Freefire,FIFA 21,CS GO');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
