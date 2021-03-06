-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2020 at 06:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15134064_kremlin`
--

-- --------------------------------------------------------

--
-- Table structure for table `M_Cart`
--

CREATE TABLE `M_Cart` (
  `id` int(11) NOT NULL,
  `Product_id` int(255) NOT NULL,
  `User_id` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `M_Product`
--

CREATE TABLE `M_Product` (
  `id` int(255) NOT NULL,
  `name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(255) NOT NULL,
  `image1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image 2` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image 3` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image 4` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image 5` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `M_Product`
--

INSERT INTO `M_Product` (`id`, `name`, `description`, `price`, `image1`, `image 2`, `image 3`, `image 4`, `image 5`, `tag`) VALUES
(1, 'Puma Red T-Shirt', 'Exclusive Red Puma Tshirt from Puma, has a round neck.', 999, '/images/buy-1.jpg', '/images/gallery-1.jpg', '/images/gallery-2.jpg', '/images/gallery-3.jpg', '/images/gallery-4.jpg', 'Men'),
(2, 'Nike Black T-Shirt', 'Black and white back printed training T-shirt, has a round neck, and sleeveless Engineered with Dry-Fit technology.', 799, '/images/nikej1.jpg', '/images/nikej1.jpg', '/images/nikej2.jpg', '/images/nikej3.jpg', '/images/nikej4.jpg', 'Men'),
(3, 'Nike Pink T-Shirt', 'Pink training T-shirt, has a round neck, and Engineered with Dry-Fit technology.', 999, '/images/nike tshirt1.jpg', '/images/nike tshirt1.jpg', '/images/nike tshirt2.jpg', '/images/nike tshirt3.jpg', '/images/nike tshirt14.jpg', 'Men'),
(4, 'Puma Pant', 'Puma Pant.', 1250, '/images/pv1.webp', '/images/pv1.webp', '/images/pv1.webp', '/images/pv1.webp', '/images/pv1.webp', 'Men'),
(5, 'Under Armour Shoes', 'Under Armour Shoes', 999, '/images/unn1.jpg', '/images/unn1.jpg', '/images/unn1.jpg', '/images/unn1.jpg', '/images/unn1.jpg', 'Women'),
(6, 'Reebok White/Black Tshirt', 'Reebok White/Black Tshirt', 1599, '/images/r1.jpeg', '/images/r1.jpeg', '/images/r1.jpeg', '/images/r1.jpeg', '/images/r1.jpeg', 'Men'),
(7, 'Under Armour Women Shoes', 'Under Armour Women Shoes', 2000, '/images/un1.jpeg', '/images/un1.jpeg', '/images/un1.jpeg', '/images/un1.jpeg', '/images/un1.jpeg', 'Men'),
(8, 'Adidas Tshirt', 'Adidas Tshirt', 1399, '/images/add1.plp', '/images/add1.plp', '/images/add1.plp', '/images/add1.plp', '/images/add1.plp', 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `M_User`
--

CREATE TABLE `M_User` (
  `id` int(255) NOT NULL,
  `username` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `emailid` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `M_User`
--

INSERT INTO `M_User` (`id`, `username`, `emailid`, `password`) VALUES
(10, 'relson', 'relsonpinto24@gmail.com', 'donthack@105D'),
(48, 'yashraj', 'yashraj@gmail.com', 'yashraj@123Y'),
(50, 'priya', 'priya@gmail.com', 'priya@123P'),
(51, 'yash', 'yash@gamil.com', 'yash@123Ya'),
(52, 'Al', 'allanfernandes312@gmail.com', '123A3bjsj'),
(53, 'LohitP', 'fff@rrr.com', 'Lohit123'),
(54, 'gh', 'fh@gmail.com', 'Anushka@123'),
(55, 'sh', 'sh@gmail.com', '123123123Sar'),
(56, 'shh', 'shh@gmail.com', 'Sar8097100'),
(57, '181123', 'fh@gmail.com', 'Anushka@123'),
(58, 'shhsjsis', 'shieie@gmail.com', 'Sshske9202@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `M_Cart`
--
ALTER TABLE `M_Cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `M_Product`
--
ALTER TABLE `M_Product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `M_User`
--
ALTER TABLE `M_User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `M_Cart`
--
ALTER TABLE `M_Cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `M_Product`
--
ALTER TABLE `M_Product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `M_User`
--
ALTER TABLE `M_User`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
