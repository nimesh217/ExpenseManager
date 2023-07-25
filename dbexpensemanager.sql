-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 25, 2023 at 05:21 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbexpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `AcId` int NOT NULL AUTO_INCREMENT,
  `AcName` varchar(100) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isStatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`AcId`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`AcId`, `AcName`, `CreatedDate`, `isStatus`) VALUES
(1, 'Personal', '2023-07-24 03:10:02', 1),
(2, 'Hobby', '2023-07-24 03:10:13', 1),
(3, 'Travel', '2023-07-24 03:10:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

DROP TABLE IF EXISTS `paymentmethod`;
CREATE TABLE IF NOT EXISTS `paymentmethod` (
  `PMId` int NOT NULL AUTO_INCREMENT,
  `PMName` varchar(100) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`PMId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `paymentmethod`
--

INSERT INTO `paymentmethod` (`PMId`, `PMName`, `CreatedDate`, `Status`) VALUES
(1, 'Debit Card', '2023-07-24 03:16:14', 1),
(2, 'Credit Card', '2023-07-24 03:16:38', 1),
(3, 'Cash', '2023-07-24 03:16:42', 1),
(4, 'Cheque', '2023-07-24 03:16:46', 1),
(5, 'Upi', '2023-07-24 03:24:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
CREATE TABLE IF NOT EXISTS `transaction` (
  `TransId` int NOT NULL AUTO_INCREMENT,
  `AcId` int NOT NULL,
  `TransTypeId` int NOT NULL,
  `TransAmount` decimal(10,0) NOT NULL,
  `TransDescription` varchar(400) NOT NULL,
  `TransComment` varchar(200) NOT NULL,
  `TransDate` datetime NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) NOT NULL,
  `PMId` int NOT NULL,
  PRIMARY KEY (`TransId`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TransId`, `AcId`, `TransTypeId`, `TransAmount`, `TransDescription`, `TransComment`, `TransDate`, `CreatedDate`, `Status`, `PMId`) VALUES
(1, 2, 1, '1000', 'Fav Food - Macd', 'at evening', '2023-07-24 00:00:00', '2023-07-24 03:24:20', 1, 1),
(2, 1, 2, '25000', 'KBS-Salary', 'July Month Salary', '2013-07-05 00:00:00', '2023-07-24 12:33:07', 1, 4),
(4, 2, 1, '1500', 'Lunch', 'at morning', '2023-07-01 00:00:00', '2023-07-23 21:54:20', 1, 1),
(5, 2, 1, '100', 'dosa', 'at morning', '2023-07-02 00:00:00', '2023-07-23 21:54:20', 1, 1),
(6, 2, 1, '25', 'vadapav', 'at morning', '2023-07-03 00:00:00', '2023-07-23 21:54:20', 1, 1),
(7, 2, 1, '500', 'Lunch', 'at morning', '2023-07-04 00:00:00', '2023-07-23 21:54:20', 1, 1),
(8, 2, 1, '780', 'Lunch', 'at morning', '2023-07-05 00:00:00', '2023-07-23 21:54:20', 1, 1),
(9, 2, 1, '450', 'keyboard', 'at morning', '2023-07-06 00:00:00', '2023-07-23 21:54:20', 1, 1),
(10, 2, 1, '5000', 'Zinkal Fees', 'at morning', '2023-07-07 00:00:00', '2023-07-23 21:54:20', 1, 1),
(11, 2, 1, '1200', 'mouse for laptop', 'at morning', '2023-07-08 00:00:00', '2023-07-23 21:54:20', 1, 1),
(12, 2, 1, '1500', 'diesel', 'at morning', '2023-07-09 00:00:00', '2023-07-23 21:54:20', 1, 1),
(13, 2, 1, '1300', 'petrol', 'at morning', '2023-07-10 00:00:00', '2023-07-23 21:54:20', 1, 1),
(14, 2, 1, '300', 'Lunch', 'at morning', '2023-07-11 00:00:00', '2023-07-23 21:54:20', 1, 1),
(15, 2, 1, '20', 'wafer', 'at morning', '2023-07-12 00:00:00', '2023-07-23 21:54:20', 1, 1),
(16, 2, 1, '500', 'nasto', 'at morning', '2023-07-13 00:00:00', '2023-07-23 21:54:20', 1, 1),
(17, 2, 1, '1000', 'dinnee', 'at morning', '2023-07-14 00:00:00', '2023-07-23 21:54:20', 1, 1),
(18, 2, 1, '1200', 'Lunch', 'at morning', '2023-07-15 00:00:00', '2023-07-23 21:54:20', 1, 1),
(19, 2, 1, '1500', 'petrol', 'at morning', '2023-07-16 00:00:00', '2023-07-23 21:54:20', 1, 1),
(20, 2, 1, '1500', 'Diesel', 'at morning', '2023-07-17 00:00:00', '2023-07-23 21:54:20', 1, 1),
(21, 2, 1, '1700', 'Lunch', 'at morning', '2023-07-18 00:00:00', '2023-07-23 21:54:20', 1, 1),
(22, 2, 1, '1500', 'Lunch', 'at morning', '2023-07-19 00:00:00', '2023-07-23 21:54:20', 1, 1),
(23, 2, 1, '7000', 'miren fees', 'at morning', '2023-07-20 00:00:00', '2023-07-23 21:54:20', 1, 1),
(24, 2, 1, '1500', 'Lunch', 'at morning', '2023-07-21 00:00:00', '2023-07-23 21:54:20', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactiontype`
--

DROP TABLE IF EXISTS `transactiontype`;
CREATE TABLE IF NOT EXISTS `transactiontype` (
  `TransTypeId` int NOT NULL AUTO_INCREMENT,
  `TransTypeName` varchar(10) NOT NULL,
  PRIMARY KEY (`TransTypeId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactiontype`
--

INSERT INTO `transactiontype` (`TransTypeId`, `TransTypeName`) VALUES
(1, 'Debit'),
(2, 'Credit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
