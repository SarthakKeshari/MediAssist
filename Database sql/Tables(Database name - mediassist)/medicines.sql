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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`S_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `S_No` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
