-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 08:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morata`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `User` int(255) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID`, `User`, `Image1`, `Image2`, `Product`, `Brand`, `Category`, `Quantity`, `Price`) VALUES
(49, 1, '16.webp', '', 'iPad Air with a vibrant 10.9-inch Liquid ', ' Window', 'Laptop & iPad', 1, 50000),
(50, 1, 'tshirt1.webp', '', 'T-Shirt new Fabric Stuff Available on Sale', 'Zaenix', 'Clothing', 7, 2000),
(52, 2, '16.webp', '', 'iPad Air with a vibrant 10.9-inch Liquid ', ' Window', 'Laptop & iPad', 1, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `ID` int(11) NOT NULL,
  `User` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `State` varchar(255) NOT NULL,
  `Zip` int(255) NOT NULL,
  `Account Name` varchar(255) NOT NULL,
  `Account Number` int(255) NOT NULL,
  `Exp Month` int(255) NOT NULL,
  `Exp Year` int(255) NOT NULL,
  `CVV` int(255) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `SPrice` int(255) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`ID`, `User`, `Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Account Name`, `Account Number`, `Exp Month`, `Exp Year`, `CVV`, `Image1`, `Product`, `Category`, `Brand`, `Price`, `Quantity`, `SPrice`, `Total`, `Status`) VALUES
(1, 1, 'Zain Imran', 'zainsh3ikh@gmail.com', 'Home:193,Street:4,Sahiwal', '', 'Pakistan', 0, '', 123456789, 0, 0, 0, 'products_23_1.webp', 'Apple Airpods Pro MWP22A M/A Bluetooth 7.1', 'Mobile Accesories', 'Samsung', 12500, 1, 12500, 12500, 0),
(2, 2, 'Zain Imran', 'zainsh3ikh@gmail.com', 'Home:193B6,Street:4,Sahiwal', 'Sahiwal', 'Punjab', 57000, 'Zain Imran', 2147483647, 0, 2025, 123, 'products_31_1_9617e01f-65e8-464c-8e92-1f17c1002192.webp, products_23_1.webp', 'Apple Watch with Ultra Features, Apple Airpods Pro MWP22A M/A Bluetooth', 'Watches, Mobile Accesories', 'Apple, Samsung', 25000, 2, 12500, 62500, 3),
(15, 1, 'Zain Imran', 'zainimranofficial@gmail.com', 'Home:193B6,Street:4,Sahiwal', 'Sahiwal', 'Punjab', 57000, 'Zain Imran', 2147483647, 0, 2025, 123, 'tshirt1.webp, tshirt1.webp, 16.webp', 'T-Shirt new Fabric Stuff Available on Sale, T-Shirt new Fabric Stuff Available on Sale, iPad Air with a vibrant 10.9-inch Liquid ', 'Clothing, Clothing, Laptop & iPad', 'Zaenix, Zaenix,  Window', 2000, 1, 50000, 54000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Brand` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Discount` int(255) NOT NULL,
  `Position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Image1`, `Image2`, `Product`, `Description`, `Price`, `Brand`, `Category`, `Discount`, `Position`) VALUES
(9, '16.webp', '14.webp', 'iPad Air with a vibrant 10.9-inch Liquid ', 'iPad Air with a vibrant 10.9-inch Liquid Retina display. Breakthrough Apple M1 chip for faster performance, making iPad Air super-powerful for creativity and mobile gaming. Get Touch ID, an advanced camera, lightning-fast 5G2 and Wi-Fi 6, a USB-C port, an', 50000, ' Window', 'Laptop & iPad', 20, 'hot'),
(10, 'tshirt1.webp', 'tshirt2.webp', 'T-Shirt new Fabric Stuff Available on Sale', 'iPad Air with a vibrant 10.9-inch Liquid Retina display. Breakthrough Apple M1 chip for faster performance, making iPad Air super-powerful for creativity and mobile gaming. Get Touch ID, an advanced camera, lightning-fast 5G2 and Wi-Fi 6, a USB-C port, an', 2000, 'Zaenix', 'Clothing', 10, 'foryou'),
(11, 'products_23_1.webp', 'products_23_3.webp', 'Apple Airpods Pro MWP22A M/A Bluetooth', 'iPad Air with a vibrant 10.9-inch Liquid Retina display. Breakthrough Apple M1 chip for faster performance, making iPad Air super-powerful for creativity and mobile gaming. Get Touch ID, an advanced camera, lightning-fast 5G2 and Wi-Fi 6, a USB-C port, an', 25000, 'Apple', 'Mobile Accesories', 50, ''),
(12, 'products_32_1.webp', 'products_30_1.webp', 'Apple Watch Aluminum Case - Pride Edition', 'iPad Air with a vibrant 10.9-inch Liquid Retina display. Breakthrough Apple M1 chip for faster performance, making iPad Air super-powerful for creativity and mobile gaming. Get Touch ID, an advanced camera, lightning-fast 5G2 and Wi-Fi 6, a USB-C port, an', 10000, 'Apple', 'Watches', 15, ''),
(13, 'led1.webp', 'led2.webp', 'Blink Home Security Camera System', 'iPad Air with a vibrant 10.9-inch Liquid Retina display. Breakthrough Apple M1 chip for faster performance, making iPad Air super-powerful for creativity and mobile gaming. Get Touch ID, an advanced camera, lightning-fast 5G2 and Wi-Fi 6, a USB-C port, an', 75000, 'Samsung', 'Electronics', 30, ''),
(14, 'knife.webp', 'knife2.webp', 'Sharp Food & Vegetable Cutting Knife', 'iPad Air with a vibrant 10.9-inch Liquid Retina display. Breakthrough Apple M1 chip for faster performance, making iPad Air super-powerful for creativity and mobile gaming. Get Touch ID, an advanced camera, lightning-fast 5G2 and Wi-Fi 6, a USB-C port, an', 300, 'Local', 'Dining & Kitchen', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Number` int(255) NOT NULL,
  `DOB` int(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CPassword` varchar(255) NOT NULL,
  `Profile Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Name`, `Email`, `Number`, `DOB`, `Gender`, `Username`, `Password`, `CPassword`, `Profile Image`) VALUES
(1, 'Zain', 'zain@gmail.com', 0, 0, '', 'zain', 'zain123', '0', 'IMG_20230131_181231_928.jpg'),

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL,
  `User` int(255) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Product` varchar(255) NOT NULL,
  `Price` int(255) NOT NULL,
  `Discount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ID`, `User`, `Image1`, `Image2`, `Product`, `Price`, `Discount`) VALUES
(15, 1, '16.webp', '14.webp', 'iPad Air with a vibrant 10.9-inch Liquid ', 50000, 20),
(16, 1, 'tshirt1.webp', 'tshirt2.webp', 'T-Shirt new Fabric Stuff Available on Sale', 2000, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
