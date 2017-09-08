-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2017 at 05:06 PM
-- Server version: 5.7.19-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shhdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnotandi`
--

CREATE TABLE `tblnotandi` (
  `Kt` varchar(10) NOT NULL,
  `Notandi` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblnotandi`
--

INSERT INTO `tblnotandi` (`Kt`, `Notandi`, `Password`) VALUES
('1411813359', 'arni', 'arni14'),
('2406863359', 'idunn', 'idunn24');

-- --------------------------------------------------------

--
-- Table structure for table `tbltulkur`
--

CREATE TABLE `tbltulkur` (
  `Kt` varchar(10) NOT NULL,
  `Nafn` varchar(255) NOT NULL,
  `Simi` varchar(7) NOT NULL,
  `Netfang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbltulkur`
--

INSERT INTO `tbltulkur` (`Kt`, `Nafn`, `Simi`, `Netfang`) VALUES
('1411813359', 'Árni Ingi Jóhannesson', '8240245', 'arnijoha@hi.is'),
('2406863359', 'Iðunn Ása Óladóttir', '7750245', 'idunnasa@shh.is');

-- --------------------------------------------------------

--
-- Table structure for table `tblverkefni`
--

CREATE TABLE `tblverkefni` (
  `Nr` int(11) NOT NULL,
  `Heiti` text,
  `Stadur` text,
  `Dagur` text,
  `Tima_byrja` text,
  `Tima_endir` text,
  `Vettvangur` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblverkefni`
--

INSERT INTO `tblverkefni` (`Nr`, `Heiti`, `Stadur`, `Dagur`, `Tima_byrja`, `Tima_endir`, `Vettvangur`) VALUES
(1, 'Rauðás ehf', 'Síðamúli 7', '23 júni', '14:00', '14:40', 'Atvinnumál'),
(2, 'Sveppó ehf', 'Ármúli 7', '23 september', '11:00', '12:40', 'Atvinnumál'),
(3, 'Rst Net', 'HFJ', '23 Febrúar', '10:00', '12:00', 'Vesenmál');

-- --------------------------------------------------------

--
-- Table structure for table `tblvinna`
--

CREATE TABLE `tblvinna` (
  `Nr` int(11) NOT NULL,
  `Kt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblvinna`
--

INSERT INTO `tblvinna` (`Nr`, `Kt`) VALUES
(1, '1411813359'),
(2, '1411813359'),
(3, '2406863359');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tblvinna`
--
ALTER TABLE `tblvinna`
  ADD PRIMARY KEY (`Nr`),
  ADD KEY `Kt` (`Kt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblverkefni`
--
ALTER TABLE `tblverkefni`
  MODIFY `Nr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tblvinna`
--
ALTER TABLE `tblvinna`
  MODIFY `Nr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblverkefni`
--
ALTER TABLE `tblverkefni`
  ADD CONSTRAINT `tblverkefni_ibfk_1` FOREIGN KEY (`Nr`) REFERENCES `tblvinna` (`Nr`);

--
-- Constraints for table `tblvinna`
--
ALTER TABLE `tblvinna`
  ADD CONSTRAINT `tblvinna_ibfk_1` FOREIGN KEY (`Kt`) REFERENCES `tbltulkur` (`Kt`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
