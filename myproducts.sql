-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 16, 2021 at 05:53 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproducts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` decimal(11,0) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `status`, `image`) VALUES
(14, 'TruSkin Vitamin C | FACE SERUM', 'When we polled our panel of dermatologists for the Anti-Aging Awards, SkinCeuticals C E Ferulic consistently came up as one of the must-haves for firmer, more radiant skin. The combo of vitamins and ferulic acid instantly gives skin back its glow.', '56', 'In stock', '<img src=\"imgs/product1.jpg\">'),
(2, 'Youthful Glow | SUGAR MASK', 'Physical exfoliants can be abrasive on skin, but this one is different. With a neutral pH of 7, this multitasking mask nourishes as the fine sucrose granules buff away dead skin cells so dull, dry skin looks brighter and more even.', '35', 'Out of stock', '<img src=\"imgs/product2.jpg\" alt=\"Top 10 Sugar Masks\">'),
(3, 'Oilness & Breakouts | TONIC', 'Formulated for oily, congested skin, this facial mist helps to infuse your skin with effective, oil-free hydration to restore a fresh, clear-looking complexion without drying out the skin. Witch hazel helps to balance excess oil and calm the skin, while aloe vera and vegetable glycerin deeply hydrate the skin. The synergistic combination of juniper berry and lavender helps to decongest pores and calm breakouts.', '89', 'Available online', '<img src=\"imgs/product3.jpg\" alt=\"\">'),
(18, 'test', 'test', '5', '', '<img src=imgs/product5.jpg>');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_name`) VALUES
(1, 'draft'),
(2, 'published');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
