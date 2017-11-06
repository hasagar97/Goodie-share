-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 12:14 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p1`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) DEFAULT NULL,
  `base_price` float DEFAULT NULL,
  `curr_price` float DEFAULT NULL,
  `end_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `base_price`, `curr_price`, `end_date`) VALUES
(10, 88320, 88320, '0000-00-00'),
(5, 1540, 1540, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) DEFAULT NULL,
  `base_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `base_price`) VALUES
(1, 12999),
(2, 99),
(3, 40),
(4, 540),
(5, 1540),
(6, 20),
(7, 220),
(8, 120),
(9, 1320),
(10, 88320);

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

CREATE TABLE `lend` (
  `id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `fare` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lend`
--

INSERT INTO `lend` (`id`, `start_date`, `end_date`, `fare`) VALUES
(1, '0000-00-00', '0000-00-00', 500),
(2, '0000-00-00', '0000-00-00', 10),
(5, '0000-00-00', '0000-00-00', 400),
(10, '0000-00-00', '0000-00-00', 500);

-- --------------------------------------------------------

--
-- Table structure for table `object`
--

CREATE TABLE `object` (
  `id` int(11) DEFAULT NULL,
  `user` varchar(40) DEFAULT NULL,
  `tag1` varchar(40) DEFAULT NULL,
  `tag2` varchar(40) DEFAULT NULL,
  `tag3` varchar(40) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `object`
--

INSERT INTO `object` (`id`, `user`, `tag1`, `tag2`, `tag3`, `description`, `price`) VALUES
(1, 'hoomanlovescat@gmail.com', 'bike', 'MTB', 'cycle', 'a beautiful mtb with front suspensions and 27 speed system', 12999),
(2, 'hoomanlovesdog@gmail.com', 'pendrive', 'usb', '16gb', 'toshiba', 99),
(3, 'ritwiksaha@hotmail.com', 'gulabjamuns', 'sweets', 'food', 'Home made gulab jamuns ', 40),
(4, 'wuahjiwuah@hotmail.com', 'game controller', 'pc controller', 'xbox controller', 'Amazing controller with vibrations and good hand grip ', 540),
(5, 'aruyani@ymail.com', 'love necklace', 'pendant', 'piece', 'Silver jewel', 1540),
(6, 'pandai@ymail.com', 'lays', 'chips', 'food', 'lays', 20),
(7, 'tigerzindahai@yolo.com', 'gun', 'pistol', 'toy', 'plastic gun with bb bullets', 220),
(8, 'shera@pnb.com', 'ladoo', 'mithai', 'food', 'moti chur ke ladoo', 120),
(9, 'lovelysingh@pnb.com', 'shoes', 'basketball', 'high ankle', 'soft mesh 10 size UK', 1320),
(10, 'jogi@qatar.com', 'iphone x', 'mobile', 'apple', 'the newly releasd iphone x', 88320);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(40) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `userid`) VALUES
('hoomanlovescat@gmail.com', 1),
('hoomanlovesdog@gmail.com', 2),
('ritwiksaha@hotmail.com', 3),
('wuahjiwuah@hotmail.com', 4),
('aruyani@ymail.com', 5),
('panda@ymail.com', 6),
('tigerzindahai@yolo.com', 7),
('lovelysingh@pnb.com', 8),
('shera@pnb.com', 9),
('jogi@qatar.com', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
