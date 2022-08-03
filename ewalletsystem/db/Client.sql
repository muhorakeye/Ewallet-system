-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 09:35 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `Client` (
  `Id` int(11) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` int(255) NOT NULL,
  `Account-Number` varchar(255) NOT NULL
  `Pin-Number` varchar(255) NOT NULL
  `Total-Amount` varchar(255) NOT NULL
  `Telephone` varchar(255) NOT NULL
  

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `Client` (`Id`, `Names`, `Email`, `Password`, `Account-Number`, `Pin-Number`, `Total-Amount`, `Telephone`))) VALUES
(1, 'kelly', 'keely@gmail.com', 123, 0123, 1997, 1000, 078123456, ),
(2, 'Dja', 'Dja@gmail.com', 1234, 01234, 1998, 1000, 078123457, );

--
-- Indexes for dumped tables
CREATE TABLE `Signin` (
  `Id` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` int(255) NOT NULL)

INSERT INTO `login` (`Id`, `Email`, `Password`))) VALUES
(1, 'keely@gmail.com', 123, )

-- Indexes for table `notification`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `Client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;
  MODIFY `Account-Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;
  MODIFY `Pin-Number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;
  


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
