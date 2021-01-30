-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 04:26 PM
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
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `ambulance_id` int(11) NOT NULL,
  `registration_number` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`ambulance_id`, `registration_number`, `type`, `availability`) VALUES
(1, 'UP70AA1234', 'AC', 1),
(2, 'TN67GH8790', 'Non-AC', 0),
(3, 'MH26FG4431', 'Non-AC', 1),
(4, 'UP70AA1235', 'Non-AC', 0),
(5, 'TN67GH8791', 'AC', 0),
(6, 'MH26FG4432', 'Non-AC', 0),
(7, 'UP70AA1236', 'AC', 1),
(8, 'TN67GH8792', 'Non-AC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `dis_id` int(11) NOT NULL,
  `disease` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`dis_id`, `disease`) VALUES
(1, 'Muscle Pain'),
(2, 'Running Nose'),
(3, 'Shivering'),
(4, 'Fever'),
(5, 'Watery Eyes'),
(6, 'Fatigue'),
(7, 'Congestion'),
(8, 'Throat Irritation'),
(9, 'Loss of Smell'),
(10, 'Headache'),
(11, 'Chest Pain'),
(12, 'Dehydration'),
(13, 'Chronic Cough'),
(14, 'Loss of Weight'),
(15, 'Skin Rash');

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

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `S_No` int(4) NOT NULL,
  `Med_Name` varchar(200) NOT NULL,
  `Med_Cost` int(9) NOT NULL,
  `Cap_perPack` int(4) NOT NULL,
  `Med_Brand` varchar(100) NOT NULL,
  `Uses` varchar(500) NOT NULL,
  `Side_Effect` varchar(500) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`S_No`, `Med_Name`, `Med_Cost`, `Cap_perPack`, `Med_Brand`, `Uses`, `Side_Effect`, `Image`) VALUES
(1, 'Parasal-650', 20, 10, 'Parasal', 'Headache, muscle aches, arthritis, backache, toothaches, colds, fevers and mild arthritis', 'Hives, difficulty breathing,swelling of your face, lips, tongue, or throat', 'Images/parasal-650.png'),
(2, 'Hydrochlorothiazide', 12, 10, 'Aquazide', 'Edema (fluid retention; excess fluid held in body tissues),rid of unneeded water and salt from the body into the urine', 'Upset stomach, dizziness, or headache may occur as your body adjusts to the medication', 'Images/Hydrochlorothiazide.png'),
(3, 'Digene', 16, 15, 'Abbot', 'Indigestion, extra gas, bloating, belching and feeling of discomfort in the stomach or gut', 'The most common side effects observed with this medicine include nausea, headache, dizziness, flatulence, diarrhea, and stomach pain, vomiting', 'Images/Digene.png'),
(4, 'Multivitamin', 90, 15, 'Zincovit', 'Vitamin and mineral deficiency and acts as an immunity booster in adults.', ' Nausea, vomiting, diarrhoea, and upset stomach may be seen as side effects', 'Images/zincovit.png'),
(5, 'Calcium', 8000, 180, 'bluebonnet', 'Bone loss (osteoporosis),  weak bones (osteomalacia/rickets), decreased activity of the parathyroid gland (hypoparathyroidism),   certain muscle disease (latent tetany)', 'Calcium supplements may increase the incidence of constipation, severe diarrhea, abdominal pain', 'Images/Calcium_Citrate_Magnesium_Vitamin D3.png'),
(6, 'Cetrizine', 25, 10, 'Jocund', 'Watery eyes, runny nose, itching eyes/nose, sneezing, hives, and itching,  blockes a certain natural substance (histamine)', 'Some drowsiness, excessive tirednessdry mouth, stomach pain, diarrhea, vomiting', 'Images/Cetrizine.png'),
(7, 'Dextromethorphan', 30, 10, 'West Coast', 'Relieve cough caused by the common cold, the flu, or other conditions.', 'Slight drowsiness/dizziness, nausea, or vomiting may occur.', 'Images/Dextromethorphan.png'),
(8, 'Curcuminoid', 188, 10, 'Nu eyes', 'Vitamin deficiency, improves vision', 'Constipation, diarrhea, or upset stomach may occur. ', 'Images/Curcuminoid.png'),
(9, 'Modalert', 205, 10, 'Sun', 'Extreme sleepiness due to narcolepsy and other sleep disorders, headache, nausea, nervousness, dizziness, or difficulty sleeping', 'Headache, nausea, nervousness, dizziness, or difficulty sleeping may occur. ', 'Images/Modalert.png'),
(10, 'Biotin', 500, 90, 'HealthKart', 'Thicken hair, increase fullness, and add shine.', ' Side effects can include skin rashes, digestive upset, problems with insulin release, kidney problems', 'Images/Biotin.png');

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(123) NOT NULL,
  `l_name` varchar(123) NOT NULL,
  `email_id` varchar(123) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email_id`, `mobile`, `password`) VALUES
(1, 'Sarthak', 'Keshari', 'sarthak.keshari2019@vitstudent.ac.in', 9879068958, 'Sarthak'),
(7, 'ant1', 'vh', 'hjv@gmail.com', 0, 'hvj'),
(8, 'ant1', 'vh', 'hjv@gmail.com', 0, 'a'),
(9, 'SARTHAK', 'KESHARI', 'srthkkeshari84@gmail.com', 7052877001, 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`ambulance_id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `selfassess`
--
ALTER TABLE `selfassess`
  ADD PRIMARY KEY (`S_No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `ambulance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `S_No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `S_No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `selfassess`
--
ALTER TABLE `selfassess`
  MODIFY `S_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
