-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 04:27 PM
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
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `S_No` int(4) NOT NULL,
  `Doc_Name` varchar(200) NOT NULL,
  `Doc_Qual` varchar(100) NOT NULL,
  `Doc_Spec` varchar(500) NOT NULL,
  `Doc_Addr` varchar(700) NOT NULL,
  `Doc_Exp` int(2) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `Rating` decimal(2,1) NOT NULL,
  `Image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`S_No`, `Doc_Name`, `Doc_Qual`, `Doc_Spec`, `Doc_Addr`, `Doc_Exp`, `contact`, `Rating`, `Image`) VALUES
(1, 'Dr Naresh Trehan', 'MBBS and MS', 'Cardiothoracic surgery', 'Medanta the medicity, Gurgaon', 42, 9938029230, '4.5', 'Images/Dr_Naresh_Trehan.png'),
(2, 'Dr Yugal Mishra', 'MBBS ,MS and PHD', 'Cardiovascular surgery', 'Dwarka,New Delhi', 32, 8928029230, '3.5', 'Images/Dr_Yugal_Mishra.png'),
(3, 'Dr Ashok Seth', 'MBBS,MD and D Litt', 'Interventional Cardiology', 'Okhla Road, New Delhi', 42, 9983028230, '5.0', 'Images/Dr_Ashok_Seth.png'),
(4, 'Dr Anil Laul', 'MBBS and MD', 'General Medicine', 'Dwarka, New Delhi', 30, 9938021232, '4.5', 'Images/Dr_Anil_Laul.png'),
(5, 'Dr Sushila Kataria', 'MBBS,MD and PG diploma', 'Internal medicine', 'Medanta, Gurgaon', 19, 9438029230, '4.0', 'Images/Dr_Sushila_Kataria.png'),
(6, 'Dr Amrita Gogia', 'BDS and MDS', 'Dental Sciences', 'South ex, New Delhi', 27, 9938389288, '5.0', 'Images/Dr_Amrita_Gogia.png'),
(7, 'Dr Anusuya Sharma', 'BDS and MDS', 'Oral surgery', 'Greater Noida, Uttar Pradesh', 33, 6276993802, '4.0', 'Images/Dr_Anusuya_Sharma.png'),
(8, 'Dr Prasad Rao Voleti', 'MBBS and MD', 'General medicine', 'Medanta Hospital, Gurgaon', 43, 9548029230, '4.0', 'Images/Dr_Prasad_Rao_Voleti.png'),
(9, 'Dr Joy Dev Mukherji', 'MBBS,MD,DM and FRCP', 'Neurosurgeon', 'Max Hospital, Noida ,Uttar Pradesh', 23, 9938012822, '5.0', 'Images/Dr_Joy_Dev_Mukherji.png'),
(10, 'Dr Jotinder Khanna', 'MBBS and MS', 'General surgery(laproscopy)', '464 Gate No 2 Mandkani Enclave Alaknanda, Delhi', 15, 7899654123, '5.0', 'Images/Dr_Jotinder_Khanna.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `S_No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
