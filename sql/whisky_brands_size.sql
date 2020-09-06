-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 29, 2020 at 09:08 PM
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
-- Table structure for table `whisky_brands_size`
--

DROP TABLE IF EXISTS `whisky_brands_size`;
CREATE TABLE IF NOT EXISTS `whisky_brands_size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_image` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `actual_price` int(11) NOT NULL,
  `discount_price` int(11) NOT NULL,
  `size` varchar(200) NOT NULL,
  `product_cataloge` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `time_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whisky_brands_size`
--

INSERT INTO `whisky_brands_size` (`id`, `product_image`, `product_name`, `actual_price`, `discount_price`, `size`, `product_cataloge`, `time_added`) VALUES
(1, 'images/zoom/z7.jpg', 'Dimple', 24, 23, '102ml', 'd001', '2020-07-18 08:20:59'),
(2, 'images/zoom/z6.jpg', 'Dimple', 20, 18, '80ml', 'd002', '2020-07-18 08:20:59'),
(3, 'images/zoom/z8.jpg', 'Dimple', 10, 9, '20ml', 'd003', '2020-07-18 08:20:59'),
(5, 'images/zoom/z10.jpg', 'Chivas Legal', 20, 19, '70ml', 'cl001', '2020-07-18 08:20:59'),
(6, 'images/zoom/z7.jpg', 'Chivas Legal', 20, 18, '40ml', 'cl002', '2020-07-18 08:20:59'),
(7, 'images/zoom/z1.jpg', 'Chivas Legal', 10, 9, '80ml', 'cl003', '2020-07-18 08:20:59'),
(8, 'images/zoom/z8.jpg', 'Chivas Legal', 30, 28, '100ml', 'cl004', '2020-07-18 08:20:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
