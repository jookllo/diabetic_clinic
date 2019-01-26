-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 01:27 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdets`
--

-- --------------------------------------------------------

--
-- Table structure for table `cad`
--

CREATE TABLE `cad` (
  `cad_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `ecg` varchar(255) NOT NULL,
  `secg` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cad`
--

INSERT INTO `cad` (`cad_id`, `phone_num`, `ecg`, `secg`, `other`) VALUES
(1, '0723758190', 'asczxcxzv', 'asdasdasdas', 'asdascxzfaS');

-- --------------------------------------------------------

--
-- Table structure for table `lifestyle_changes`
--

CREATE TABLE `lifestyle_changes` (
  `life_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `alcohol_intake` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifestyle_changes`
--

INSERT INTO `lifestyle_changes` (`life_id`, `phone_num`, `smoking`, `alcohol_intake`) VALUES
(1, '0723758190', 'Yes', '1435'),
(2, '12345672', 'Yes', '146');

-- --------------------------------------------------------

--
-- Table structure for table `lipid_target`
--

CREATE TABLE `lipid_target` (
  `target_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `lipid_level` varchar(80) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `ldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid_target`
--

INSERT INTO `lipid_target` (`target_id`, `phone_num`, `lipid_level`, `plan`, `ldate`) VALUES
(1, '0723758190', 'asdsfsfsa', 'sadsadasc', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `nephropathy`
--

CREATE TABLE `nephropathy` (
  `nid` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `acr` varchar(255) NOT NULL,
  `egfr` varchar(255) NOT NULL,
  `ndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nephropathy`
--

INSERT INTO `nephropathy` (`nid`, `phone_num`, `acr`, `egfr`, `ndate`) VALUES
(1, '0723758190', 'fasfas', 'afsfas', '2019-01-08'),
(2, '0723758190', 'fasfas', 'afsfasasdas', '2019-01-08'),
(3, '0723758190', 'fasfas', 'afsfasasdas', '2019-01-08'),
(4, '0723758190', 'fasfas', 'afsfasasdas', '2019-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `neuropathy`
--

CREATE TABLE `neuropathy` (
  `neuro_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `find_date` varchar(255) NOT NULL,
  `finds` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neuropathy`
--

INSERT INTO `neuropathy` (`neuro_id`, `phone_num`, `find_date`, `finds`) VALUES
(1, '0723758190', '2019-01-15', 'asfasfsafas'),
(2, '0723758190', '2019-01-15', 'asfasfsafasasda');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `p_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `patient_num` varchar(255) NOT NULL,
  `diabetes_type` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `dodiagnosis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`p_id`, `phone_num`, `patient_num`, `diabetes_type`, `dob`, `dodiagnosis`) VALUES
(1, '0700000000', '134', 'sdgsrg', '2019-01-01', '2019-01-09'),
(2, '0723758190', 'djfijvb', 'efjvnjfdk', '2019-01-02', '2019-01-02'),
(3, '0724748913', 'sdfb', 'sgdbh', '2019-01-10', '2019-01-07'),
(4, '12345672', 'qertyui', 'Type 1', '2000-02-09', '0000-00-00'),
(5, '145678445', 'qcvbcxb', 'Type 1', '2019-01-13', '0000-00-00'),
(6, '1234567822', 'DSGNFJHBKJNLK', 'Type 1', '2019-01-06', '0000-00-00'),
(7, '1345678', 'qwertyui', 'Type 1', '2019-01-06', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `retinopathy`
--

CREATE TABLE `retinopathy` (
  `ret_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `report` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `ophthamologist` varchar(255) NOT NULL,
  `e_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retinopathy`
--

INSERT INTO `retinopathy` (`ret_id`, `phone_num`, `report`, `plan`, `ophthamologist`, `e_date`) VALUES
(1, '0723758190', 'asfasfsa', 'dasdasfax', 'cxzffawq', '2019-01-08'),
(2, '0723758190', 'asfasfsa', 'dasdasfax', 'cxzffawqasdas', '2019-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `risk_factors`
--

CREATE TABLE `risk_factors` (
  `risk_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `risk_factor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risk_factors`
--

INSERT INTO `risk_factors` (`risk_id`, `phone_num`, `risk_factor`) VALUES
(1, '0723758190', 'Dyslipidaemia,CKD,Foot disease'),
(2, '0724748913', 'Dyslipidaemia,CKD,Foot disease'),
(3, '0723758190', 'Hypertension,Dyslipidaemia,CKD,Foot disease'),
(4, '0723758190', 'Hypertension,Dyslipidaemia,CKD,Foot disease'),
(5, '12345672', 'Hypertension,Dyslipidaemia,CKD,Coronary Artery Disease');

-- --------------------------------------------------------

--
-- Table structure for table `self_management`
--

CREATE TABLE `self_management` (
  `man_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `patient_goals` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight_target` varchar(255) NOT NULL,
  `bmi_target` varchar(255) NOT NULL,
  `weight_management` varchar(255) NOT NULL,
  `nutrition_education` varchar(255) NOT NULL,
  `dodiscussion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_management`
--

INSERT INTO `self_management` (`man_id`, `phone_num`, `patient_goals`, `height`, `weight_target`, `bmi_target`, `weight_management`, `nutrition_education`, `dodiscussion`) VALUES
(1, '0700000000', 'qwerty', 'werty', 'wertyu', 'wertyu', 'Yes', 'Yes', '2019-01-07'),
(2, '0723758190', 'cfnchgnbv', 'dghbcjhmbv', 'rgdfhcvjmjfg', 'tfhgnmnb', 'No', 'Yes', '2019-01-15'),
(3, '12345672', 'fasfas', '1.24m', 'asfsa', 'asfas', 'Yes', 'Yes', '2019-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `vascular_protection`
--

CREATE TABLE `vascular_protection` (
  `vascular_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vascular_protection`
--

INSERT INTO `vascular_protection` (`vascular_id`, `phone_num`, `opt1`, `opt2`) VALUES
(1, '0723758190', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `visit_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `bp` varchar(255) NOT NULL,
  `weight_p` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `hba1c` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `hypo_gly` varchar(255) NOT NULL,
  `dm_therapy` varchar(255) NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`visit_id`, `phone_num`, `bp`, `weight_p`, `bmi`, `hba1c`, `notes`, `hypo_gly`, `dm_therapy`, `visit_date`) VALUES
(1, '12345672', 'sdfghjk', 'fgsfdhgjfkg', 'fdsghfdjgfk', 'fsdgfhjdgkf', 'afgdhsfjdg', 'agdshfdjgf', 'gsdhfdjkf', '2019-01-07'),
(2, '12345672', 'sdfghjk', 'fgsfdhgjfkg', 'fdsghfdjgfk', 'fsd', 'afgdhsfjdg', 'agdshfdjgf', 'gsdhfdjkf', '2019-01-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad`
--
ALTER TABLE `cad`
  ADD PRIMARY KEY (`cad_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD PRIMARY KEY (`life_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `lipid_target`
--
ALTER TABLE `lipid_target`
  ADD PRIMARY KEY (`target_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `nephropathy`
--
ALTER TABLE `nephropathy`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `neuropathy`
--
ALTER TABLE `neuropathy`
  ADD PRIMARY KEY (`neuro_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `phone_num_2` (`phone_num`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `retinopathy`
--
ALTER TABLE `retinopathy`
  ADD PRIMARY KEY (`ret_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD PRIMARY KEY (`risk_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `self_management`
--
ALTER TABLE `self_management`
  ADD PRIMARY KEY (`man_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  ADD PRIMARY KEY (`vascular_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`visit_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad`
--
ALTER TABLE `cad`
  MODIFY `cad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  MODIFY `life_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lipid_target`
--
ALTER TABLE `lipid_target`
  MODIFY `target_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nephropathy`
--
ALTER TABLE `nephropathy`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `neuropathy`
--
ALTER TABLE `neuropathy`
  MODIFY `neuro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `retinopathy`
--
ALTER TABLE `retinopathy`
  MODIFY `ret_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `risk_factors`
--
ALTER TABLE `risk_factors`
  MODIFY `risk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `self_management`
--
ALTER TABLE `self_management`
  MODIFY `man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  MODIFY `vascular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cad`
--
ALTER TABLE `cad`
  ADD CONSTRAINT `cad_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD CONSTRAINT `lifestyle_changes_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `lipid_target`
--
ALTER TABLE `lipid_target`
  ADD CONSTRAINT `lipid_target_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `nephropathy`
--
ALTER TABLE `nephropathy`
  ADD CONSTRAINT `nephropathy_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `retinopathy`
--
ALTER TABLE `retinopathy`
  ADD CONSTRAINT `retinopathy_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD CONSTRAINT `risk_factors_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `self_management`
--
ALTER TABLE `self_management`
  ADD CONSTRAINT `self_management_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  ADD CONSTRAINT `vascular_protection_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
