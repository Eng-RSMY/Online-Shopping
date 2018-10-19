-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2017 at 12:48 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_category`, `product_desc`) VALUES
(1, 'mango- Himsagar', 150, 11, 'product_image/b48da0e122463846352957747b8a1285800px-Mango_Himsagar_Asit_ftg.jpg', 'Fruits', 'Himsagar is an extremely popular mango cultivar.'),
(3, 'Cabbage', 34, 30, 'product_image/85180852e467b0321ab366304fe277281280px-Cabbage_and_cross_section_on_white.jpg', 'Vegetables', 'Cabbage or headed cabbage (comprising several cultivars of Brassica oleracea) is a leafy green or purple biennial plant, grown as an annual vegetable crop for its dense-leaved heads.'),
(8, 'mango-Fazley', 55, 37, 'product_image/3b237a6aedbb18aa3ed8f6bfb87d6bda220px-Mango_Bangladesh_(6).JPG', 'Fruits', 'Fruit');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(110) NOT NULL,
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `password` varchar(50) NOT NULL,
  `email` varchar(110) NOT NULL,
  `add` varchar(100) NOT NULL,
  `usertype` varchar(110) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `password`, `email`, `add`, `usertype`) VALUES
('Bob', 1, '12345678', 'bob@mail.com', 'a', 'admin'),
('Anne', 2, '22222222', 'anne@mail.edu', 'b', 'user'),
('munia', 3, '11111111', 'muniakhter@gmail.com', 'c', 'admin'),
('Bob', 4, '12345678', 'bob@mail.edu', 'd', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
