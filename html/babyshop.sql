-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2016 at 09:50 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `babyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `oid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `total_price` float NOT NULL,
  `pid` int(10) unsigned NOT NULL,
  `num_items` int(10) unsigned NOT NULL,
  `order_des` varchar(300) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `uid` (`pid`),
  KEY `pid` (`pid`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `descr` varchar(300) NOT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `image` varchar(100) NOT NULL,
  `subType_id` int(10) unsigned NOT NULL,
  `price` float NOT NULL,
  `pdate` date NOT NULL,
  PRIMARY KEY (`pId`),
  KEY `subType_id` (`subType_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `name`, `descr`, `quantity`, `image`, `subType_id`, `price`, `pdate`) VALUES
(51, 't-shirt', 'xs', 0, 'images/items/item14.jpg', 12, 222, '2016-01-01'),
(54, 'dabdooooby', 'small', 5, 'images/items/item19.jpg', 12, 333, '2016-01-01'),
(55, 'junjo', 'xs', 5, 'images/items/item21.jpg', 12, 222, '2016-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `subType`
--

CREATE TABLE IF NOT EXISTS `subType` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `tid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `tid` (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `subType`
--

INSERT INTO `subType` (`id`, `name`, `tid`) VALUES
(12, 'tshirts', 9);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE IF NOT EXISTS `types` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`tid`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`tid`, `name`) VALUES
(9, 'adventur'),
(13, 'coord'),
(8, 'fun'),
(12, 'school'),
(6, 'tools'),
(4, 'tweety');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `credit` float NOT NULL DEFAULT '0',
  `address` varchar(300) NOT NULL,
  `interests` varchar(300) NOT NULL,
  `isAdmin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `username`, `password`, `birthdate`, `job`, `email`, `credit`, `address`, `interests`, `isAdmin`) VALUES
(1, 'inas', 'enginas', '123', NULL, NULL, 'inas@gmail.com', 200, 'mansoura', 'reading', 0),
(2, 'zina', 'qq', '123', '0000-00-00', 'eng', 'z@gmail.com', 56, 'mans', 'ttttt', 0),
(3, 'admin', 'admin', 'admin', '2010-01-01', 'admin', 'admin@gmail.com', 5000, 'mans', 'admin', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`pId`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`subType_id`) REFERENCES `subType` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subType`
--
ALTER TABLE `subType`
  ADD CONSTRAINT `subType_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `types` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
