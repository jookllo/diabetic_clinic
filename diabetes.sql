-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 10:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diabetes`
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

-- --------------------------------------------------------

--
-- Table structure for table `lipid_target`
--

CREATE TABLE `lipid_target` (
  `target_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `ldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `phone_num` varchar(10) NOT NULL,
  `patient_num` varchar(255) NOT NULL,
  `diabetes_type` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `dodiagnosis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`phone_num`, `patient_num`, `diabetes_type`, `dob`, `dodiagnosis`) VALUES
('0700000000', '134', 'sdgsrg', '2019-01-01', '2019-01-09'),
('0723758190', 'djfijvb', 'efjvnjfdk', '2019-01-02', '2019-01-02'),
('0724748913', 'sdfb', 'sgdbh', '2019-01-10', '2019-01-07');

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

-- --------------------------------------------------------

--
-- Table structure for table `risk_factors`
--

CREATE TABLE `risk_factors` (
  `risk_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `risk_factor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `visit_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `bp` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `hba1c` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `hypo_gly` varchar(255) NOT NULL,
  `dm_therapy` varchar(255) NOT NULL,
  `visit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- Indexes for table `lipid_target`
--
ALTER TABLE `lipid_target`
  ADD PRIMARY KEY (`target_id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`);

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
  ADD PRIMARY KEY (`phone_num`);

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
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- Indexes for table `self_management`
--
ALTER TABLE `self_management`
  ADD PRIMARY KEY (`man_id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- Indexes for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  ADD PRIMARY KEY (`vascular_id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`visit_id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad`
--
ALTER TABLE `cad`
  MODIFY `cad_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  MODIFY `life_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lipid_target`
--
ALTER TABLE `lipid_target`
  MODIFY `target_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `neuropathy`
--
ALTER TABLE `neuropathy`
  MODIFY `neuro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retinopathy`
--
ALTER TABLE `retinopathy`
  MODIFY `ret_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `risk_factors`
--
ALTER TABLE `risk_factors`
  MODIFY `risk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `self_management`
--
ALTER TABLE `self_management`
  MODIFY `man_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  MODIFY `vascular_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `neuropathy`
--
ALTER TABLE `neuropathy`
  ADD CONSTRAINT `neuropathy_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

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
