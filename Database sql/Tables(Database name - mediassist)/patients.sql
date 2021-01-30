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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `S_No` int(11) NOT NULL,
  `F_name` varchar(100) NOT NULL,
  `L_name` varchar(100) NOT NULL,
  `D.O.B` date NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Aadhar_No` bigint(12) NOT NULL,
  `Heart_rate` int(3) NOT NULL,
  `Diabetes` varchar(1) NOT NULL,
  `Blood_pres` varchar(1) NOT NULL,
  `Arthritis` varchar(1) NOT NULL,
  `Allergy` varchar(1) NOT NULL,
  `Allergy_Name` varchar(100) NOT NULL,
  `Asthma` varchar(1) NOT NULL,
  `Smoking` varchar(1) NOT NULL,
  `Alcohol` varchar(1) NOT NULL,
  `Exercise` varchar(1) NOT NULL,
  `Surgery1` varchar(100) NOT NULL,
  `D_Surgery1` date NOT NULL,
  `Surgery2` varchar(100) NOT NULL,
  `D_Surgery2` date NOT NULL,
  `Surgery3` varchar(100) NOT NULL,
  `D_Surgery3` date NOT NULL,
  `Add_SurgeryInfo` varchar(500) NOT NULL,
  `Doc_Consult1` varchar(100) NOT NULL,
  `D_Consult1` date NOT NULL,
  `Pur_Consult1` varchar(200) NOT NULL,
  `Doc_Consult2` varchar(100) NOT NULL,
  `D_Consult2` date NOT NULL,
  `Pur_Consult2` varchar(200) NOT NULL,
  `Doc_Consult3` varchar(100) NOT NULL,
  `D_Consult3` date NOT NULL,
  `Pur_Consult3` varchar(200) NOT NULL,
  `Add_ConsultInfo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`S_No`, `F_name`, `L_name`, `D.O.B`, `Age`, `Gender`, `Aadhar_No`, `Heart_rate`, `Diabetes`, `Blood_pres`, `Arthritis`, `Allergy`, `Allergy_Name`, `Asthma`, `Smoking`, `Alcohol`, `Exercise`, `Surgery1`, `D_Surgery1`, `Surgery2`, `D_Surgery2`, `Surgery3`, `D_Surgery3`, `Add_SurgeryInfo`, `Doc_Consult1`, `D_Consult1`, `Pur_Consult1`, `Doc_Consult2`, `D_Consult2`, `Pur_Consult2`, `Doc_Consult3`, `D_Consult3`, `Pur_Consult3`, `Add_ConsultInfo`) VALUES
(1, 'Sarthak', 'Keshari', '1999-05-16', 21, 'M', 123456789123, 65, 'N', 'N', 'N', 'N', '', 'N', 'N', 'N', 'Y', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Yugal Mishra', '2020-08-25', 'Abdomen Pain', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(2, 'Mohit', 'Singh', '1996-09-09', 24, 'M', 135792468012, 70, 'Y', 'Y', 'N', 'N', '', 'N', 'N', 'N', 'N', 'Cardiothoraic', '2020-05-13', 'Cardiothoraic', '2020-05-27', 'N/A', '0000-00-00', 'N/A', 'Dr Naresh Trehan', '2020-05-11', 'Heartache', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(3, 'Raghav', 'Sharma', '1995-08-08', 25, 'M', 125690347812, 60, 'N', 'N', 'N', 'N', '', 'N', 'N', 'N', 'Y', 'Laproscopy', '2020-08-14', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Jotinder Khanna', '2020-08-11', 'Stomach ache', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(4, 'Mayank', 'Kapoor', '1991-12-11', 28, 'M', 120934875612, 61, 'N', 'N', 'N', 'Y', 'Bronchitis', 'Y', 'Y', 'N', 'N', 'Open Heart', '2020-10-19', 'Open Heart', '0000-00-00', 'Open Heart', '0000-00-00', 'N/A', 'Dr Jotinder Khanna', '2020-10-26', 'Non stop Cough', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(5, 'Eshan', 'Ahuja', '1987-07-06', 33, 'M', 147258369123, 72, 'Y', 'Y', 'N', 'Y', 'Dust', 'N', 'N', 'Y', 'N', 'Bariatric', '2020-02-02', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Jotinder Khanna', '2020-02-01', 'High blood pressure', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(6, 'Kunal', 'Verma', '1989-04-03', 31, 'M', 987654321123, 55, 'N', 'N', 'N', 'N', '', 'N', 'N', 'N', 'Y', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Anil Laul', '2020-03-03', 'Normal check up', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(7, 'Sahil', 'Mehra', '1985-02-02', 35, 'M', 896745231123, 80, 'Y', 'Y', 'Y', 'N', '', 'N', 'N', 'Y', 'N', 'liver resection', '2020-04-03', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Jotinder Khanna', '2020-04-02', 'Liver failure', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(8, 'Akshat', 'Saini', '1992-05-05', 28, 'M', 789456123123, 62, 'N', 'N', 'N', 'N', '', 'N', 'N', 'Y', 'N', 'Biopsy', '2020-08-29', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Joy Dev Mukherji', '2020-07-03', 'Uncousciousness', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(9, 'Prashant', 'Chauhan', '1990-01-01', 30, 'M', 678901234512, 73, 'N', 'N', 'N', 'N', '', 'Y', 'N', 'N', 'Y', 'Oral Surgery', '2020-06-02', 'N/A', '0000-00-00', 'N/A', '0000-00-00', 'N/A', 'Dr Anusuya Sharma', '2020-06-01', 'Cavity', 'N/A', '0000-00-00', 'N/A', 'N/A', '0000-00-00', 'N/A', 'N/A'),
(10, 'Aditya', 'Krishna', '1993-10-25', 26, 'M', 986754231123, 75, 'Y', 'Y', 'N', 'N', '', 'Y', 'Y', 'Y', 'N', 'Cardiothoraic', '2020-07-07', 'liver resection', '2020-07-14', 'Oral Surgery', '2020-07-21', 'N/A', 'Dr Naresh Trehan', '2020-07-06', 'Heartache', 'Dr Jotinder Khanna', '2020-07-13', 'Liver pain', 'Dr Anusuya Sharma', '2020-07-20', 'Cavitty', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
