-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 21, 2020 at 10:12 PM
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
-- Database: `shopping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `whisky`
--

DROP TABLE IF EXISTS `whisky`;
CREATE TABLE IF NOT EXISTS `whisky` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `actual_price` float(10,2) DEFAULT NULL,
  `discount_price` float(10,2) DEFAULT NULL,
  `delivery_price` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whisky`
--

INSERT INTO `whisky` (`id`, `product_image`, `product_name`, `product_desc`, `actual_price`, `discount_price`, `delivery_price`, `order_date`) VALUES
(1, 'images/p134.jpg', 'Dimple', 'Product Description Here', 24.00, 20.00, 0, '2020-07-14 12:04:02'),
(2, 'images/p145.jpg', 'Chivas Legal', 'Product Description Here', 23.00, 21.00, 0, '2020-07-14 12:04:02'),
(3, 'images/p137.jpg', 'Talisker', 'Product Description Here', 22.00, 19.00, 0, '2020-07-14 12:04:02'),
(4, 'images/p135.jpg', 'Glenmorangie', 'Product Description Here', 30.00, 28.00, 0, '2020-07-14 12:04:02'),
(5, 'images/p138.jpg', 'Lagavulin', 'Product Description Here', 24.00, 21.00, 0, '2020-07-14 12:04:02'),
(6, 'images/p136.jpg', 'Glenkinchie', 'Product Description Here', 27.00, 24.00, 0, '2020-07-14 12:04:02'),
(7, 'images/p132.jpg', 'Royal Salute', 'Product Description Here', 28.00, 26.00, 0, '2020-07-14 12:04:02'),
(8, 'images/p140.jpg', 'Glenfeddich', 'Product Description Here', 22.00, 20.00, 0, '2020-07-14 12:04:02'),
(10, 'images/p146.jpg', 'Ballantine\'s', 'Product Description Here', 24.00, 20.00, 0, '2020-07-15 21:56:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
