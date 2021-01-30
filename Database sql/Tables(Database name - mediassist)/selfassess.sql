-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 04:28 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `selfassess`
--

CREATE TABLE `selfassess` (
  `S_No` int(11) NOT NULL,
  `Muscle_Pain` varchar(1) NOT NULL,
  `Running_Nose` varchar(1) NOT NULL,
  `Shivering` varchar(1) NOT NULL,
  `Fever` varchar(1) NOT NULL,
  `Watery_Eyes` varchar(1) NOT NULL,
  `Fatigue` varchar(1) NOT NULL,
  `Congestion` varchar(1) NOT NULL,
  `Throat_Irritation` varchar(1) NOT NULL,
  `Loss_of_Smell` varchar(1) NOT NULL,
  `Headache` varchar(1) NOT NULL,
  `Chest_Pain` varchar(1) NOT NULL,
  `Dehydration` varchar(1) NOT NULL,
  `Chronic_Cough` varchar(1) NOT NULL,
  `Loss_of_Weight` varchar(1) NOT NULL,
  `Skin_Rash` varchar(1) NOT NULL,
  `Diseases` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selfassess`
--

INSERT INTO `selfassess` (`S_No`, `Muscle_Pain`, `Running_Nose`, `Shivering`, `Fever`, `Watery_Eyes`, `Fatigue`, `Congestion`, `Throat_Irritation`, `Loss_of_Smell`, `Headache`, `Chest_Pain`, `Dehydration`, `Chronic_Cough`, `Loss_of_Weight`, `Skin_Rash`, `Diseases`) VALUES
(1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'A'),
(2, 'Y', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'B'),
(3, 'Y', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N', 'N', 'N', 'Y', 'Y', 'Y', 'N', 'N', 'C'),
(4, 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Y', 'N', 'N', 'Y', 'N', 'D'),
(5, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'E'),
(6, 'N', 'Y', 'Y', 'N', 'Y', 'N', 'Y', 'Y', 'N', 'Y', 'N', 'N', 'Y', 'N', 'Y', 'F'),
(7, 'Y', 'N', 'N', 'Y', 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 'N', 'N', 'N', 'Y', 'Y', 'G'),
(8, 'N', 'Y', 'N', 'N', 'Y', 'Y', 'N', 'N', 'N', 'Y', 'N', 'Y', 'N', 'Y', 'N', 'H'),
(9, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'No Disease (Healthy)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `selfassess`
--
ALTER TABLE `selfassess`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `selfassess`
--
ALTER TABLE `selfassess`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
