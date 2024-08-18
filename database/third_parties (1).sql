-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 01:03 PM
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
-- Database: `ascepiushealthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `third_parties`
--

CREATE TABLE `third_parties` (
  `Company_ID` varchar(10) NOT NULL CHECK (`Company_ID` like 'TP%'),
  `Company_Name` varchar(255) DEFAULT NULL,
  `Company_Type` varchar(50) DEFAULT NULL,
  `Web` varchar(255) DEFAULT NULL,
  `Hotline` varchar(15) NOT NULL,
  `Email` varchar(100) DEFAULT NULL CHECK (`Email` like '%_@__%.__%'),
  `Address` varchar(255) NOT NULL,
  `City` varchar(100) NOT NULL,
  `District` varchar(100) NOT NULL,
  `Postal_code` varchar(5) NOT NULL,
  `Description` text DEFAULT NULL,
  `Logo` mediumblob DEFAULT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `third_parties`
--
ALTER TABLE `third_parties`
  ADD PRIMARY KEY (`Company_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
