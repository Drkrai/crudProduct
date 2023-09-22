-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2023 at 01:38 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id` int NOT NULL,
  `ProductCategory` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id`, `ProductCategory`) VALUES
(1, 'Soft Drinks'),
(2, 'Bread');

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `id` int NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductDescription` varchar(50) NOT NULL,
  `ProductQuantity` int NOT NULL,
  `ProductPrice` int NOT NULL,
  `ProductCategory` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`id`, `ProductName`, `ProductDescription`, `ProductQuantity`, `ProductPrice`, `ProductCategory`) VALUES
(1, 'cola', 'A Beverage', 50, 50, 1),
(3, 'Cheese cake', 'cupcake', 100, 10, 2),
(4, 'Cheese cake', 'cupcake', 100, 10, 2),
(5, 'Cheese cake', 'cupcake', 100, 10, 2),
(6, 'Cheese cake', 'cupcake', 100, 10, 2),
(7, 'Cheese cake', 'cupcake', 100, 10, 2),
(8, 'Cheese cake', 'cupcake', 100, 10, 2),
(9, 'Cheese cake', 'cupcake', 100, 10, 2),
(10, 'Cheese cake', 'cupcake', 100, 10, 2),
(11, 'Cheese cake', 'cupcake', 100, 10, 2),
(12, 'Cheese cake', 'cupcake', 100, 10, 2),
(13, 'Cheese cake', 'cupcake', 100, 10, 2),
(14, 'Cheese cake', 'cupcake', 100, 10, 2),
(15, 'Cheese cake', 'cupcake', 100, 10, 2),
(16, 'Cheese cake', 'cupcake', 100, 10, 2),
(17, 'Pepsi', 'beverage', 100, 55, 1),
(18, 'Royal', 'A beverage', 100, 55, 1),
(19, 'watere', 'A beverage', 100, 55, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ProductCategory` (`ProductCategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_products`
--
ALTER TABLE `table_products`
  ADD CONSTRAINT `ProductCategory` FOREIGN KEY (`ProductCategory`) REFERENCES `table_category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
