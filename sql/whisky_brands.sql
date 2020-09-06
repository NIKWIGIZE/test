-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 21, 2020 at 10:11 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avectime.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `whisky_brands`
--

DROP TABLE IF EXISTS `whisky_brands`;
CREATE TABLE IF NOT EXISTS `whisky_brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `actual_price` int(10) NOT NULL,
  `discount_price` int(10) NOT NULL,
  `delivery_price`int(10) NOT NULL,
  `size` varchar(200) NOT NULL,
  `product_cataloge` varchar(200) NOT NULL,
  `time_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whisky_brands`
--

INSERT INTO `whisky_brands` (`id`, `product_image`, `product_name`, `actual_price`, `discount_price`,`delivery_price`, `size`, `product_cataloge`, `time_added`) VALUES
(1, 'images/zoom/z1.jpg', 'Dimple', 24, 20,0, '300ml', 'di000', '2020-07-17 02:42:18'),
(2, 'images/zoom/z2.jpg', 'Chivas Legal', 23,21,0,  '110ml', 'chi000', '2020-07-17 02:43:57'),
(3, 'images/zoom/z3.jpg', 'Product Name Here', 22, 19,0,  '80ml', '000', '2020-07-17 02:43:57'),
(4, 'images/zoom/z4.jpg', 'Product Name Here', 30, 28,0,  '70ml', '000', '2020-07-17 02:43:57'),
(5, 'images/zoom/z5.jpg', 'Product Name Here', 24, 21, 0, '120ml', '000', '2020-07-17 02:43:57'),
(6, 'images/zoom/z6.jpg', 'Product Name Here', 27, 24, 0, '200ml', '000', '2020-07-17 02:43:57'),
(7, 'images/zoom/z7.jpg', 'Product Name Here', 28, 26, 0, '100ml', '000', '2020-07-17 02:43:57'),
(8, 'images/zoom/z8.jpg', 'Product Name Here', 22, 20, 0, '90ml', '000', '2020-07-17 02:43:57'),
(9, 'images/zoom/z9.jpg', 'Product Name Here', 32, 30,0,  '20ml', '000', '2020-07-17 02:43:57'),
(10, 'images/zoom/z10.jpg', 'Product Name Here', 32, 30, 0, '40', '000', '2020-07-17 02:44:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
