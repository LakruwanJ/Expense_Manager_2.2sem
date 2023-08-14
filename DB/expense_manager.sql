-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 03:44 PM
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
-- Database: `expense_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `Type` varchar(50) NOT NULL,
  `PhoneNumOffice` int(10) DEFAULT NULL,
  `PhoneNumPersonal` int(10) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `RegistedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `ExID` int(10) NOT NULL,
  `ProID` int(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `FeedID` int(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `Msj` varchar(1500) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `financeteam`
--

CREATE TABLE `financeteam` (
  `FID` int(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `PromotedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `InID` int(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `Category` varchar(11) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Amount` varchar(20) NOT NULL,
  `Description` varchar(2000) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `MngID` int(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `PromotedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `Nid` int(10) NOT NULL,
  `ProIDOr` int(10) NOT NULL,
  `Nfrom` varchar(10) NOT NULL,
  `Nto` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Msj` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `possisions`
--

CREATE TABLE `possisions` (
  `id` int(10) NOT NULL,
  `Value` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `ProID` int(10) NOT NULL,
  `EmpID` int(10) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Amount` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposalmodify`
--

CREATE TABLE `proposalmodify` (
  `PM_ID` int(10) NOT NULL,
  `ProID` int(10) NOT NULL,
  `FID` int(10) NOT NULL,
  `DescriptionF` varchar(1500) NOT NULL,
  `DateF` date NOT NULL,
  `TimeF` time NOT NULL,
  `MngID` int(10) NOT NULL,
  `DescriptionM` varchar(1500) NOT NULL,
  `DateM` date NOT NULL,
  `TimeM` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`ExID`),
  ADD KEY `ProID` (`ProID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`FeedID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `financeteam`
--
ALTER TABLE `financeteam`
  ADD PRIMARY KEY (`FID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`InID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`MngID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`Nid`);

--
-- Indexes for table `possisions`
--
ALTER TABLE `possisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`ProID`),
  ADD KEY `EmpID` (`EmpID`);

--
-- Indexes for table `proposalmodify`
--
ALTER TABLE `proposalmodify`
  ADD PRIMARY KEY (`PM_ID`),
  ADD KEY `FID` (`FID`),
  ADD KEY `MngID` (`MngID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `ExID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `FeedID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `financeteam`
--
ALTER TABLE `financeteam`
  MODIFY `FID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `InID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `MngID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `Nid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `possisions`
--
ALTER TABLE `possisions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `ProID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposalmodify`
--
ALTER TABLE `proposalmodify`
  MODIFY `PM_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expense`
--
ALTER TABLE `expense`
  ADD CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`ProID`) REFERENCES `proposal` (`ProID`),
  ADD CONSTRAINT `expense_ibfk_2` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `financeteam`
--
ALTER TABLE `financeteam`
  ADD CONSTRAINT `financeteam_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `income_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`EmpID`) REFERENCES `employee` (`EmpID`);

--
-- Constraints for table `proposalmodify`
--
ALTER TABLE `proposalmodify`
  ADD CONSTRAINT `proposalmodify_ibfk_1` FOREIGN KEY (`FID`) REFERENCES `employee` (`EmpID`),
  ADD CONSTRAINT `proposalmodify_ibfk_2` FOREIGN KEY (`MngID`) REFERENCES `employee` (`EmpID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
