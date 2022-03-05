-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 05, 2022 at 07:12 PM
-- Server version: 8.0.28
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(5, 'syed', 'syed');

-- --------------------------------------------------------

--
-- Table structure for table `Comments`
--

CREATE TABLE `Comments` (
  `Comment_id` int NOT NULL,
  `User_id` int NOT NULL,
  `text_cm` varchar(500) NOT NULL,
  `Post_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Employee`
--

CREATE TABLE `Employee` (
  `Employee_id` int NOT NULL,
  `Emp_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Emp_Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sr_no` int NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `res_id` int NOT NULL,
  `feedback` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sr_no`, `fname`, `email`, `res_id`, `feedback`) VALUES
(15, 'Syed Ahmed', 'syedmuaz96@gmail.com', 69, 'Hello'),
(16, 'Syed Ahmed', 'syedmuaz96@gmail.com', 6516584, 'asdfdsafwqe');

-- --------------------------------------------------------

--
-- Table structure for table `Food_Item`
--

CREATE TABLE `Food_Item` (
  `Item_id` int NOT NULL,
  `Name` varchar(50) NOT NULL,
  `FoodPrice` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Food_Item`
--

INSERT INTO `Food_Item` (`Item_id`, `Name`, `FoodPrice`) VALUES
(1, 'Pizza', 10),
(2, 'Roti', 2),
(3, 'Burger', 4),
(4, 'Pasta', 9),
(5, 'Tea', 3),
(22, 'Meat Balls', 12),
(23, 'Salads', 4),
(24, 'Chicken Salad', 6),
(25, 'Biryani', 14),
(26, 'Rice With French Fries', 8);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE `Orders` (
  `Order_id` int NOT NULL,
  `User_id` int NOT NULL,
  `Item_id` int NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`Order_id`, `User_id`, `Item_id`, `Date`) VALUES
(1, 89, 4, '2022-02-19 20:59:45'),
(2, 89, 5, '2022-02-19 21:27:29'),
(3, 89, 4, '2022-02-19 21:28:22'),
(4, 89, 5, '2022-02-19 21:29:01'),
(5, 89, 5, '2022-02-19 21:29:38'),
(6, 89, 5, '2022-02-19 21:35:15'),
(7, 89, 5, '2022-02-19 21:36:20'),
(8, 89, 5, '2022-02-19 21:37:22'),
(9, 91, 1, '2022-02-19 21:39:13'),
(10, 92, 1, '2022-02-19 21:40:53'),
(11, 92, 2, '2022-02-19 21:40:53'),
(12, 92, 3, '2022-02-19 21:40:53'),
(13, 93, 1, '2022-02-19 21:43:10'),
(14, 93, 2, '2022-02-19 21:43:10'),
(15, 93, 1, '2022-02-19 21:44:14'),
(16, 93, 2, '2022-02-19 21:44:14'),
(17, 93, 22, '2022-02-19 21:44:14'),
(18, 93, 1, '2022-02-19 21:44:25'),
(19, 93, 2, '2022-02-19 21:44:25'),
(20, 93, 22, '2022-02-19 21:44:25'),
(21, 94, 4, '2022-02-21 07:33:03'),
(22, 94, 5, '2022-02-21 07:33:03'),
(23, 95, 23, '2022-02-21 07:34:37'),
(24, 95, 25, '2022-02-21 07:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `Payment`
--

CREATE TABLE `Payment` (
  `Payment_id` int NOT NULL,
  `User_id` int NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Payment`
--

INSERT INTO `Payment` (`Payment_id`, `User_id`, `Amount`) VALUES
(1, 89, 9),
(2, 89, 12),
(3, 89, 21),
(4, 89, 24),
(5, 89, 27),
(6, 89, 30),
(7, 89, 33),
(8, 89, 36),
(9, 91, 10),
(10, 92, 16),
(11, 93, 12),
(12, 93, 36),
(13, 93, 60),
(14, 94, 12),
(15, 95, 18);

-- --------------------------------------------------------

--
-- Table structure for table `Post`
--

CREATE TABLE `Post` (
  `Post_id` int NOT NULL,
  `Employee_id` int NOT NULL,
  `Text_ps` varchar(1000) NOT NULL,
  `date_ps` datetime NOT NULL,
  `Header` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int NOT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `res_event` varchar(50) DEFAULT NULL,
  `no_of_guests` varchar(50) DEFAULT NULL,
  `res_date` varchar(50) DEFAULT NULL,
  `res_tim` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `cust_name`, `email`, `contact_no`, `res_event`, `no_of_guests`, `res_date`, `res_tim`) VALUES
(52, 'Syed Ahmed', 'syedmuaz96@gmail.com', '406512464', '686516', '1', '2022-02-11', '19:21'),
(53, 'Syed Ahmed', 'syedmuaaz87@gmail.com', '406512464', 'fdasfasfafsawqf', '2', '2022-02-19', '19:29'),
(55, 'Deepak', 'syedmuaz96@hkt.com', '5555351', 'sdfafdasf', '4', '2022-03-15', '21:15');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `User_id` int NOT NULL,
  `Username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phonenumber` bigint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`User_id`, `Username`, `email`, `phonenumber`) VALUES
(89, 'Amjad', 'hafiz_khurram47@yahoo.com', 1111),
(90, 'Imran', 'hafiz_khurram47@yahoo.com', 12),
(91, 'Khurram', 'k@yahoo.com', 987654),
(92, 'Hafiz', 'hafiz@yahoo.com', 123000000),
(93, 'Riaz', 'riaz@yahoo.com', 123),
(94, 'Anton', 'anton@gmail.com', 12334),
(95, 'Syed', 'syed@gmail.com', 11234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`Comment_id`),
  ADD KEY `foriegnkey2` (`Post_id`),
  ADD KEY `foriegnkey7` (`User_id`);

--
-- Indexes for table `Employee`
--
ALTER TABLE `Employee`
  ADD PRIMARY KEY (`Employee_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `res_id` (`res_id`);

--
-- Indexes for table `Food_Item`
--
ALTER TABLE `Food_Item`
  ADD PRIMARY KEY (`Item_id`);

--
-- Indexes for table `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `fkey` (`User_id`),
  ADD KEY `foriegnkey5` (`Item_id`);

--
-- Indexes for table `Payment`
--
ALTER TABLE `Payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `foriegnkey1` (`User_id`);

--
-- Indexes for table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`Post_id`),
  ADD KEY `foriegnkey8` (`Employee_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Comments`
--
ALTER TABLE `Comments`
  MODIFY `Comment_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Employee`
--
ALTER TABLE `Employee`
  MODIFY `Employee_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sr_no` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Food_Item`
--
ALTER TABLE `Food_Item`
  MODIFY `Item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `Orders`
--
ALTER TABLE `Orders`
  MODIFY `Order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Payment`
--
ALTER TABLE `Payment`
  MODIFY `Payment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Post`
--
ALTER TABLE `Post`
  MODIFY `Post_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `User_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `foriegnkey2` FOREIGN KEY (`Post_id`) REFERENCES `Post` (`Post_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `foriegnkey7` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `foriegnkey5` FOREIGN KEY (`Item_id`) REFERENCES `Food_Item` (`Item_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Payment`
--
ALTER TABLE `Payment`
  ADD CONSTRAINT `foriegnkey1` FOREIGN KEY (`User_id`) REFERENCES `Users` (`User_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `foriegnkey8` FOREIGN KEY (`Employee_id`) REFERENCES `Employee` (`Employee_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
