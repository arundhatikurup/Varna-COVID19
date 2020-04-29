-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 12:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `varna`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecr table`
--

CREATE TABLE `ecr table` (
  `Referral Number` bigint(20) NOT NULL,
  `Name` text NOT NULL,
  `Sex` varchar(1) NOT NULL,
  `Shelter` text NOT NULL,
  `Age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecr table`
--

INSERT INTO `ecr table` (`Referral Number`, `Name`, `Sex`, `Shelter`, `Age`) VALUES
(112233, 'Akankshya Patra', 'F', 'Good', 22),
(113333, 'Jijnasa Nayak', 'F', 'Good', 23),
(115573, 'Dawdkkdd Kurup', 'M', 'Ritueye', 23),
(115599, 'Arundhati Kurup', 'F', 'Ritueye', 23),
(309123, 'Dawn Lee', 'M', 'Illumination Center', 25);

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `Cell_Phone` varchar(12) NOT NULL,
  `Name` text NOT NULL,
  `Referral_number` bigint(20) NOT NULL,
  `NO_Cough` tinyint(1) DEFAULT NULL,
  `Dry_cough` tinyint(1) DEFAULT NULL,
  `Wet_cough` tinyint(1) DEFAULT NULL,
  `Sore_Throat` tinyint(1) NOT NULL,
  `Shortness_of_Breath` tinyint(1) NOT NULL,
  `Loss_of_Taste` tinyint(1) NOT NULL,
  `Loss_of_Smell` tinyint(1) NOT NULL,
  `Fever_reducing_medicine` tinyint(1) NOT NULL,
  `Someone_in_household` tinyint(1) NOT NULL,
  `Shelter_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`Cell_Phone`, `Name`, `Referral_number`, `NO_Cough`, `Dry_cough`, `Wet_cough`, `Sore_Throat`, `Shortness_of_Breath`, `Loss_of_Taste`, `Loss_of_Smell`, `Fever_reducing_medicine`, `Someone_in_household`, `Shelter_name`) VALUES
('2132587940', '', 112233, 0, 0, 0, 0, 0, 0, 1, 0, 0, 'Milton shelter'),
('2134056707', 'Dawn Lee', 309123, 1, 1, 0, 0, 1, 0, 1, 1, 0, 'Springview shelter'),
('3256987412', 'Drew Pooli', 113333, 0, 0, 1, 0, 1, 0, 1, 0, 1, 'Palsoei'),
('6842697153', 'Rosy Chicken', 115599, 0, 0, 1, 0, 1, 1, 1, 1, 1, 'Eotyriuhj'),
('6987412359', 'Henry Looo', 112233, 1, 0, 0, 1, 1, 1, 1, 1, 1, 'Ignasius'),
('95175538526', 'Paras Sharma', 115573, 0, 1, 0, 1, 0, 0, 1, 0, 0, 'Eyeoiu'),
('9518476235', 'Jijnasa Sahu', 113333, 0, 0, 1, 0, 0, 1, 0, 1, 0, 'Poeuytr'),
('9638527415', 'Arundhati Kurup', 115599, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pliuytr'),
('9638529635', 'M. Arundhati', 115573, 1, 0, 0, 1, 0, 0, 0, 0, 0, 'Pwokmdb'),
('9876543215', 'Akshat Kurup', 115573, 0, 0, 1, 1, 1, 0, 1, 1, 0, 'Werloiuyt');

--
-- Triggers `patientdetails`
--
DELIMITER $$
CREATE TRIGGER `update` AFTER INSERT ON `patientdetails` FOR EACH ROW INSERT INTO total_patient_details VALUES (NEW.Cell_Phone, NEW.Name, NEW.Referral_number, NEW.NO_Cough, NEW.Dry_cough, NEW.Wet_cough, NEW.Sore_Throat,NEW.Shortness_of_Breath,NEW.Loss_of_Taste,NEW.Loss_of_Smell,NEW.Fever_reducing_medicine,NEW.Someone_in_household,NEW.Shelter_name,NEW.Cell_Phone/20,NEW.Cell_Phone/20,'Mid')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `total_patient_details`
--

CREATE TABLE `total_patient_details` (
  `Cell_Phone` varchar(12) NOT NULL,
  `Name` text NOT NULL,
  `Referral_number` bigint(20) NOT NULL,
  `Cough` tinyint(4) NOT NULL,
  `Dry_cough` tinyint(4) NOT NULL,
  `Wet_cough` tinyint(4) NOT NULL,
  `Sore_Throat` tinyint(4) NOT NULL,
  `Shortness_of_Breath` tinyint(4) NOT NULL,
  `Loss of Taste` tinyint(4) NOT NULL,
  `Loss of Smell` tinyint(4) NOT NULL,
  `Fever reducing medicine in past 24 hours` tinyint(4) NOT NULL,
  `Someone in household diagnosed with Covid-19` tinyint(4) NOT NULL,
  `Shelter name assigned` varchar(25) NOT NULL,
  `Room` int(11) NOT NULL,
  `Bed` int(11) NOT NULL,
  `Temperature` float NOT NULL DEFAULT '98.7',
  `Risk_factor` varchar(5) NOT NULL DEFAULT 'Low',
  `Start` int(11) NOT NULL,
  `End` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_patient_details`
--

INSERT INTO `total_patient_details` (`Cell_Phone`, `Name`, `Referral_number`, `Cough`, `Dry_cough`, `Wet_cough`, `Sore_Throat`, `Shortness_of_Breath`, `Loss of Taste`, `Loss of Smell`, `Fever reducing medicine in past 24 hours`, `Someone in household diagnosed with Covid-19`, `Shelter name assigned`, `Room`, `Bed`, `Temperature`, `Risk_factor`, `Start`, `End`) VALUES
('2134056707', 'Dawn Lee', 309123, 1, 1, 0, 0, 1, 0, 1, 1, 0, 'Springview Shelter', 106702835, 1104, 101.3, 'Mid', 7, 16),
('3256987412', 'Drew Pooli', 113333, 0, 0, 1, 0, 1, 0, 1, 0, 1, 'Palsoei', 162849371, 405, 99.7, 'Mid', 9, 18),
('6842697153', 'Rosy Chicken', 115599, 0, 0, 1, 0, 1, 1, 1, 1, 1, 'Eotyriuhj', 342134858, 413, 103.5, 'Low', 6, 15),
('6987412359', 'Henry Looo', 112233, 1, 0, 0, 1, 1, 1, 1, 1, 1, 'Ignasius', 349370618, 401, 98.7, 'High', 5, 14),
('95175538526', 'Paras Sharma', 115573, 0, 1, 0, 1, 0, 0, 1, 0, 0, 'Eyeoiu', 2147483647, 413, 100.4, 'Low', 10, 19),
('9518476235', 'Jijnasa Sahu', 113333, 0, 0, 1, 0, 0, 1, 0, 1, 0, 'Poeuytr', 475923812, 405, 98.7, 'Low', 10, 19),
('9638527415', 'Arundhati Kurup', 115599, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Pliuytr', 481926371, 413, 98.7, 'Low', 7, 16),
('9638529635', 'M. Arundhati', 115573, 1, 0, 0, 1, 0, 0, 0, 0, 0, 'Pwokmdb', 481926482, 413, 99.8, 'Low', 9, 18),
('9876543215', 'Akshat Kurup', 115573, 0, 0, 1, 1, 1, 0, 1, 1, 0, 'Werloiuyt', 493827161, 413, 102.7, 'High', 10, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecr table`
--
ALTER TABLE `ecr table`
  ADD PRIMARY KEY (`Referral Number`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`Cell_Phone`),
  ADD KEY `Referral number` (`Referral_number`);

--
-- Indexes for table `total_patient_details`
--
ALTER TABLE `total_patient_details`
  ADD PRIMARY KEY (`Cell_Phone`),
  ADD KEY `Referral_number` (`Referral_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD CONSTRAINT `patientdetails_ibfk_1` FOREIGN KEY (`Referral_number`) REFERENCES `ecr table` (`Referral Number`);

--
-- Constraints for table `total_patient_details`
--
ALTER TABLE `total_patient_details`
  ADD CONSTRAINT `total_patient_details_ibfk_1` FOREIGN KEY (`Cell_Phone`) REFERENCES `patientdetails` (`Cell_Phone`),
  ADD CONSTRAINT `total_patient_details_ibfk_2` FOREIGN KEY (`Referral_number`) REFERENCES `ecr table` (`Referral Number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
