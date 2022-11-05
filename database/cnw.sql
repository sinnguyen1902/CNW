-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220810.35f421a69b
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 01:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cnw`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `title`) VALUES
(1, 'gucci'),
(2, 'MLB');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Túi Xách'),
(2, 'Giày');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `address`, `phone`, `zipcode`) VALUES
(1, 'SIN', 'sinb1812813@student.ctu.edu.vn', '123456', '', '0378986231', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `cus_cart`
--

CREATE TABLE `cus_cart` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity_product` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cus_cart`
--

INSERT INTO `cus_cart` (`id`, `customer_id`, `quantity_product`, `product_id`) VALUES
(6, 1, 4, 21),
(7, 1, 3, 20);

-- --------------------------------------------------------

--
-- Table structure for table `dangnhaps`
--

CREATE TABLE `dangnhaps` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dangnhaps`
--

INSERT INTO `dangnhaps` (`id`, `username`, `password`, `diachi`, `stt`) VALUES
(1, 'sin', '123456', 'Ag', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanphams`
--

CREATE TABLE `sanphams` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanphams`
--

INSERT INTO `sanphams` (`id`, `title`, `brand_id`, `category_id`, `img`, `des`, `price`) VALUES
(18, 'Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666 khonggg', 1, 1, '3b825d4447.jpg', 'Mua 1 Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666 chính hãng 100% có sẵn tại Authentic Shoes.', '10000'),
(19, 'Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666', 2, 1, '98ec2c930d.jpg', 'Mua Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666 chính hãng 100% có sẵn tại Authentic Shoes.', '50000'),
(20, 'Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666', 1, 2, 'ff831fc321.jpg', 'Mua Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666 chính hãng 100% có sẵn tại Authentic Shoes.', '10000'),
(21, 'Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666', 2, 2, 'bb1cad6eba.jpg', 'Mua Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666 chính hãng 100% có sẵn tại Authentic Shoes.', '60000'),
(22, 'Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666', 2, 2, 'bb1cad6eba.jpg', 'Mua Giày Gucci Wmns Screener \'Distressed Green Orange\' 570443-9Y920-9666 chính hãng 100% có sẵn tại Authentic Shoes.', '60000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cus_cart`
--
ALTER TABLE `cus_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dangnhaps`
--
ALTER TABLE `dangnhaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanphams`
--
ALTER TABLE `sanphams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cus_cart`
--
ALTER TABLE `cus_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dangnhaps`
--
ALTER TABLE `dangnhaps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sanphams`
--
ALTER TABLE `sanphams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
