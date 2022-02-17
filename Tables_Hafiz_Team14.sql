-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 17, 2022 at 01:35 PM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Team14Web`
--

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Employee_id` int NOT NULL,
  `Emp_name` int NOT NULL,
  `Emp_Address` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Food_Item`
--

CREATE TABLE `Food_Item` (
  `Item_id` int NOT NULL,
  `Order_id` int NOT NULL,
  `Quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `Order_id` int NOT NULL,
  `User_id` int NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Employee_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `Payment_id` int NOT NULL,
  `Order_id` int NOT NULL,
  `User_id` int NOT NULL,
  `Amount` float NOT NULL,
  `Employee_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `User_id` int NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `Food_Item`
--
ALTER TABLE `Food_Item`
  ADD PRIMARY KEY (`Item_id`),
  ADD KEY `foeignkey` (`Order_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `fkey` (`User_id`),
  ADD KEY `foriegnkey3` (`Employee_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `foriegnkey1` (`User_id`),
  ADD KEY `foriegnkey2` (`Order_id`),
  ADD KEY `foriegnkey4` (`Employee_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `Employee_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Food_Item`
--
ALTER TABLE `Food_Item`
  MODIFY `Item_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Order_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `Payment_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `User_id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Food_Item`
--
ALTER TABLE `Food_Item`
  ADD CONSTRAINT `foeignkey` FOREIGN KEY (`Order_id`) REFERENCES `Orders` (`Order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `foriegnkey3` FOREIGN KEY (`Employee_id`) REFERENCES `Employee` (`Employee_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `foriegnkey1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `foriegnkey2` FOREIGN KEY (`Order_id`) REFERENCES `Orders` (`Order_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `foriegnkey4` FOREIGN KEY (`Employee_id`) REFERENCES `Employee` (`Employee_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

describe Food_Item;
