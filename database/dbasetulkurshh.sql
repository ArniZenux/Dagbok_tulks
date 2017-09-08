-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 01:04 PM
-- Server version: 5.7.19-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbasetulkurshh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblgreidsla`
--

CREATE TABLE `tblgreidsla` (
  `Nr` int(11) NOT NULL,
  `Heiti` text COLLATE utf8_icelandic_ci,
  `Verd` text COLLATE utf8_icelandic_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotandi`
--

CREATE TABLE `tblnotandi` (
  `Kt` varchar(10) COLLATE utf8_icelandic_ci NOT NULL,
  `Notandi` varchar(255) COLLATE utf8_icelandic_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_icelandic_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpanta`
--

CREATE TABLE `tblpanta` (
  `Nr` int(11) NOT NULL,
  `Kt` varchar(255) COLLATE utf8_icelandic_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbltulkur`
--

CREATE TABLE `tbltulkur` (
  `Kt` varchar(10) COLLATE utf8_icelandic_ci NOT NULL,
  `Nafn` varchar(255) COLLATE utf8_icelandic_ci NOT NULL,
  `Simi` varchar(7) COLLATE utf8_icelandic_ci NOT NULL,
  `Netfang` varchar(255) COLLATE utf8_icelandic_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblverkefni`
--

CREATE TABLE `tblverkefni` (
  `Nr` int(11) NOT NULL,
  `Heiti` text COLLATE utf8_icelandic_ci,
  `Stadur` text COLLATE utf8_icelandic_ci,
  `Dagur` text COLLATE utf8_icelandic_ci,
  `Tima_byrja` text COLLATE utf8_icelandic_ci,
  `Tima_endir` text COLLATE utf8_icelandic_ci,
  `Vettvangur` text COLLATE utf8_icelandic_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblvidskiptavinur`
--

CREATE TABLE `tblvidskiptavinur` (
  `Kt` varchar(10) COLLATE utf8_icelandic_ci NOT NULL,
  `Nafn` varchar(255) COLLATE utf8_icelandic_ci NOT NULL,
  `Simi` varchar(7) COLLATE utf8_icelandic_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblvinna`
--

CREATE TABLE `tblvinna` (
  `Nr` int(11) NOT NULL,
  `Kt` varchar(255) COLLATE utf8_icelandic_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_icelandic_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgreidsla`
--
ALTER TABLE `tblgreidsla`
  ADD PRIMARY KEY (`Nr`);

--
-- Indexes for table `tblnotandi`
--
ALTER TABLE `tblnotandi`
  ADD PRIMARY KEY (`Kt`);

--
-- Indexes for table `tblpanta`
--
ALTER TABLE `tblpanta`
  ADD PRIMARY KEY (`Nr`),
  ADD KEY `Kt` (`Kt`);

--
-- Indexes for table `tbltulkur`
--
ALTER TABLE `tbltulkur`
  ADD PRIMARY KEY (`Kt`);

--
-- Indexes for table `tblverkefni`
--
ALTER TABLE `tblverkefni`
  ADD PRIMARY KEY (`Nr`);

--
-- Indexes for table `tblvidskiptavinur`
--
ALTER TABLE `tblvidskiptavinur`
  ADD PRIMARY KEY (`Kt`);

--
-- Indexes for table `tblvinna`
--
ALTER TABLE `tblvinna`
  ADD PRIMARY KEY (`Nr`),
  ADD KEY `Kt` (`Kt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgreidsla`
--
ALTER TABLE `tblgreidsla`
  MODIFY `Nr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblpanta`
--
ALTER TABLE `tblpanta`
  MODIFY `Nr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblverkefni`
--
ALTER TABLE `tblverkefni`
  MODIFY `Nr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tblvinna`
--
ALTER TABLE `tblvinna`
  MODIFY `Nr` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblgreidsla`
--
ALTER TABLE `tblgreidsla`
  ADD CONSTRAINT `tblgreidsla_ibfk_1` FOREIGN KEY (`Nr`) REFERENCES `tblverkefni` (`Nr`);

--
-- Constraints for table `tblpanta`
--
ALTER TABLE `tblpanta`
  ADD CONSTRAINT `tblpanta_ibfk_1` FOREIGN KEY (`Kt`) REFERENCES `tblvidskiptavinur` (`Kt`);

--
-- Constraints for table `tblverkefni`
--
ALTER TABLE `tblverkefni`
  ADD CONSTRAINT `tblverkefni_ibfk_1` FOREIGN KEY (`Nr`) REFERENCES `tblpanta` (`Nr`),
  ADD CONSTRAINT `tblverkefni_ibfk_2` FOREIGN KEY (`Nr`) REFERENCES `tblvinna` (`Nr`);

--
-- Constraints for table `tblvinna`
--
ALTER TABLE `tblvinna`
  ADD CONSTRAINT `tblvinna_ibfk_1` FOREIGN KEY (`Kt`) REFERENCES `tbltulkur` (`Kt`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
