-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 21, 2020 at 10:10 PM
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
-- Dumping data for table `whisky_dimple_thumbnails`
--

INSERT INTO `whisky_brands_size` ( `product_image`, `product_name`, `actual_price`, `discount_price`, `size`, `product_catalogue`, `time_added`) VALUES
( 'images/zoom/z10.jpg', 'Chivas Legal', 20, 19, '70ml', 'cl001', '2020-07-18 08:20:59'),
( 'images/zoom/z7.jpg', 'Chivas Legal', 20, 18, '40ml', 'cl002', '2020-07-18 08:20:59'),
( 'images/zoom/z1.jpg', 'Chivas Legal', 10, 9, '80ml', 'cl003', '2020-07-18 08:20:59'),
( 'images/zoom/z8.jpg', 'Chivas Legal', 30, 28, '100ml', 'cl004', '2020-07-18 08:20:59');
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
