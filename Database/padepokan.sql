-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2022 at 07:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `padepokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_nasabah`
--

CREATE TABLE `tb_nasabah` (
  `AccountId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nasabah`
--

INSERT INTO `tb_nasabah` (`AccountId`, `Name`) VALUES
(1, 'Customer1'),
(2, 'Customer2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_point`
--

CREATE TABLE `tb_point` (
  `PointId` int(11) NOT NULL,
  `AccountId` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `poin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_point`
--

INSERT INTO `tb_point` (`PointId`, `AccountId`, `Name`, `poin`) VALUES
(1, 1, 'Customer1', 0),
(2, 1, 'Customer1', 10),
(3, 1, 'Customer1', 0),
(4, 1, 'Customer1', 40),
(5, 1, 'Customer1', 50),
(6, 1, 'Customer1', 10),
(7, 2, 'Customer2', 36);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `TransactionId` int(11) NOT NULL,
  `AccountId` int(11) NOT NULL,
  `TransactionDate` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `DebitCreditStatus` varchar(1) NOT NULL,
  `Amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`TransactionId`, `AccountId`, `TransactionDate`, `Description`, `DebitCreditStatus`, `Amount`) VALUES
(1, 1, '2017-01-01', '2', 'C', 200000),
(2, 1, '2017-01-05', '3', 'D', 10000),
(3, 1, '2017-01-06', '4', 'D', 70000),
(4, 1, '2017-01-07', '1', 'D', 100000),
(5, 1, '2017-02-01', '2', 'C', 300000),
(6, 1, '2017-02-05', '4', 'D', 50000),
(7, 1, '2017-02-15', '1', 'D', 50000),
(8, 1, '2017-02-20', '3', 'D', 40000),
(9, 1, '2017-02-28', '1', 'D', 50000),
(10, 1, '2017-03-01', '2', 'C', 50000),
(11, 1, '2017-03-07', '4', 'D', 125000),
(12, 1, '2017-03-15', '3', 'D', 20000),
(13, 2, '2017-03-15', '4', 'D', 111000),
(14, 2, '2017-01-01', '2', 'C', 500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  ADD PRIMARY KEY (`AccountId`);

--
-- Indexes for table `tb_point`
--
ALTER TABLE `tb_point`
  ADD PRIMARY KEY (`PointId`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`TransactionId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_nasabah`
--
ALTER TABLE `tb_nasabah`
  MODIFY `AccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_point`
--
ALTER TABLE `tb_point`
  MODIFY `PointId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `TransactionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
