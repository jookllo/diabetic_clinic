-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2019 at 09:45 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdets_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cad`
--

DROP TABLE IF EXISTS `cad`;
CREATE TABLE IF NOT EXISTS `cad` (
  `cad_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `ecg` varchar(255) NOT NULL,
  `secg` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  PRIMARY KEY (`cad_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cad`
--

INSERT INTO `cad` (`cad_id`, `p_id`, `ecg`, `secg`, `other`) VALUES
(1, 'f9s0', 'jlghliejf', 'jsnfjgjer', 'nbfkjnk'),
(2, 'h5b3', 'jfjivjef', 'joi', 'hjoj');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone_num` varchar(10) NOT NULL,
  `patname` varchar(255) NOT NULL,
  `aptype` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`event_id`),
  KEY `phone_num` (`phone_num`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `phone_num`, `patname`, `aptype`, `date`, `time`, `status`) VALUES
(1, '0723980381', 'cheres', 'dick', '2019-03-27', '03:45:00', 1),
(2, '0765492145', 'wfwdf', 'dumby', '2019-03-29', '17:02:00', 1),
(3, '0794381048', 'brian', 'bvangi', '2019-04-20', '21:00:00', 1),
(4, '0794381048', 'brian', 'bvangi', '2019-04-20', '21:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lifestyle_changes`
--

DROP TABLE IF EXISTS `lifestyle_changes`;
CREATE TABLE IF NOT EXISTS `lifestyle_changes` (
  `life_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `alcohol_intake` varchar(255) NOT NULL,
  `cessation` varchar(6) NOT NULL,
  `advise` varchar(6) NOT NULL,
  PRIMARY KEY (`life_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifestyle_changes`
--

INSERT INTO `lifestyle_changes` (`life_id`, `p_id`, `smoking`, `alcohol_intake`, `cessation`, `advise`) VALUES
(1, 'k3kc', 'isudahfuihuias', 'jhiuhuihou', '', ''),
(2, 'f9s0', 'ljnnj', 'iojioji', '', ''),
(3, 'h5b3', 'uihuhuuihui', 'hiuhuih', '', ''),
(4, 'n4np', 'Yes', '', '', ''),
(5, 'n4np', 'Yes', '', '', ''),
(6, 'k3kc', 'Yes', '13', '', ''),
(8, 'n4np', 'Yes', '12', '', ''),
(9, 'MZedV7T4iG', 'Yes', '', '', ''),
(10, 'n4np', 'Yes', '15', '', ''),
(11, 'n4np', 'Yes', '15', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lipid_target`
--

DROP TABLE IF EXISTS `lipid_target`;
CREATE TABLE IF NOT EXISTS `lipid_target` (
  `target_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `lipid_level` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `ldate` date DEFAULT NULL,
  PRIMARY KEY (`target_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid_target`
--

INSERT INTO `lipid_target` (`target_id`, `p_id`, `lipid_level`, `plan`, `ldate`) VALUES
(1, 'f9s0', 'noisfjg', 'jkdsfnjg', '2019-04-09'),
(2, 'h5b3', 'joijiojijiojiojioj', 'oijoijiojiojo', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `nephropathy`
--

DROP TABLE IF EXISTS `nephropathy`;
CREATE TABLE IF NOT EXISTS `nephropathy` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `acr` varchar(255) NOT NULL,
  `egfr` varchar(255) NOT NULL,
  `ndate` date DEFAULT NULL,
  PRIMARY KEY (`nid`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nephropathy`
--

INSERT INTO `nephropathy` (`nid`, `p_id`, `acr`, `egfr`, `ndate`) VALUES
(1, 'f9s0', 'nkjknj', 'jnjn', '2019-03-11'),
(2, 'h5b3', 'io;joiiojiojiojio', 'iojioioi', '2019-04-02'),
(3, 'k3kc', 'abcdefg', 'more or less', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `neuropathy`
--

DROP TABLE IF EXISTS `neuropathy`;
CREATE TABLE IF NOT EXISTS `neuropathy` (
  `neuro_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `find_date` date DEFAULT NULL,
  `find` varchar(255) NOT NULL,
  PRIMARY KEY (`neuro_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `neuropathy`
--

INSERT INTO `neuropathy` (`neuro_id`, `p_id`, `find_date`, `find`) VALUES
(1, 'f9s0', '2019-03-04', 'jnjjnn'),
(2, 'h5b3', '2019-04-01', 'uiojhhiojijoj');

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

DROP TABLE IF EXISTS `patient_details`;
CREATE TABLE IF NOT EXISTS `patient_details` (
  `p_id` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `diabetes_type` varchar(255) NOT NULL,
  `dod` date DEFAULT NULL,
  `dodiagnosis` year(4) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `phone_num` (`phone_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`p_id`, `patient_name`, `phone_num`, `diabetes_type`, `dod`, `dodiagnosis`, `status`) VALUES
('2TIqiriq6P', 'Oyugi Ocampo', '7245465684', 'Type 2', '1990-12-12', 2011, 0),
('f9s0', 'Onyango onn', '0783516727', 'j', '2019-03-05', 0000, 1),
('h5b3', 'micheal kors', '0723980381', 'a', '2019-03-03', 2019, 0),
('h6h4', 'AISHA d bella', '0794618395', '1', '2019-03-18', 0000, 0),
('k3kc', 'jade inc', '0765492145', 'd', '2019-03-06', 2019, 0),
('MZedV7T4iG', 'Oyugi Ocampo', '7121223126', 'Type 1', '1990-12-12', 2011, 0),
('n4np', 'willim son ', '0794381048', 'd', '2019-03-03', 2019, 0),
('rtujgufjfufufg', 'Onyango Ocamp', '0723456789', 'Type 2', '1990-12-12', 2011, 0);

-- --------------------------------------------------------

--
-- Table structure for table `retinopathy`
--

DROP TABLE IF EXISTS `retinopathy`;
CREATE TABLE IF NOT EXISTS `retinopathy` (
  `ret_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `opthamologist` varchar(255) NOT NULL,
  `e_date` date DEFAULT NULL,
  PRIMARY KEY (`ret_id`),
  KEY `foreign_key_name` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retinopathy`
--

INSERT INTO `retinopathy` (`ret_id`, `p_id`, `report`, `plan`, `opthamologist`, `e_date`) VALUES
(1, 'f9s0', 'kpokpok', 'OIJIOJIOJOI', 'JOIJOIJOIJOI', '2019-03-11'),
(2, 'h5b3', 'hluihuhuhhioh', 'ouihoiho;ihoih', 'hoihoiio', '2019-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `risk_factors`
--

DROP TABLE IF EXISTS `risk_factors`;
CREATE TABLE IF NOT EXISTS `risk_factors` (
  `risk_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `risk_factor` varchar(255) NOT NULL,
  PRIMARY KEY (`risk_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risk_factors`
--

INSERT INTO `risk_factors` (`risk_id`, `p_id`, `risk_factor`) VALUES
(1, 'f9s0', 'rtherth'),
(2, 'h5b3', 'huihiuhuhu'),
(3, 'k3kc', 'CKD,Foot disease,Coronary Artery Disease'),
(4, 'k3kc', 'CKD,Foot disease,Coronary Artery Disease'),
(5, 'k3kc', 'CKD,Foot disease,Coronary Artery Disease'),
(6, 'n4np', 'CKD,Foot disease,Coronary Artery Disease'),
(7, 'n4np', 'Hypertension,Dyslipidaemia,CKD,Foot disease,Coronary Artery Disease'),
(8, 'h6h4', 'Hypertension,CKD,Foot disease'),
(9, 'h6h4', 'Hypertension,CKD,Foot disease,Coronary Artery Disease'),
(10, 'h6h4', 'Hypertension,CKD,Erectile dysfunction'),
(11, 'h6h4', 'Hypertension,CKD,Foot disease,Erectile dysfunction'),
(12, 'h6h4', 'Hypertension,Dyslipidaemia,CKD,Foot disease,Erectile dysfunction'),
(13, 'h6h4', 'Hypertension,Dyslipidaemia,CKD,Foot disease,Erectile dysfunction'),
(14, 'h6h4', 'Hypertension,Dyslipidaemia,CKD,Foot disease,Erectile dysfunction'),
(15, 'h6h4', 'Hypertension,Dyslipidaemia,CKD,Foot disease,Coronary Artery Disease,Erectile dysfunction'),
(16, 'h6h4', 'Dyslipidaemia'),
(17, 'n4np', 'CKD,Foot disease');

-- --------------------------------------------------------

--
-- Table structure for table `self_management`
--

DROP TABLE IF EXISTS `self_management`;
CREATE TABLE IF NOT EXISTS `self_management` (
  `man_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `patient_goals` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight_target` varchar(255) NOT NULL,
  `bmi_target` varchar(255) NOT NULL,
  `weight_management` varchar(255) NOT NULL,
  `nutrition_education` varchar(255) NOT NULL,
  `dodiscussion` date DEFAULT NULL,
  PRIMARY KEY (`man_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_management`
--

INSERT INTO `self_management` (`man_id`, `p_id`, `patient_goals`, `height`, `weight_target`, `bmi_target`, `weight_management`, `nutrition_education`, `dodiscussion`) VALUES
(1, 'f9s0', 'rnj;joiji', 'ojioj', 'ioj', 'iojio', 'joi', 'joi', '2019-03-18'),
(2, 'h5b3', 'hlhhhoioho;ihoi', 'hoih', 'iohoi', 'hoihoi', 'hoi', 'hoiho', '2019-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `vascular_protection`
--

DROP TABLE IF EXISTS `vascular_protection`;
CREATE TABLE IF NOT EXISTS `vascular_protection` (
  `vascular_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  PRIMARY KEY (`vascular_id`),
  KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vascular_protection`
--

INSERT INTO `vascular_protection` (`vascular_id`, `p_id`, `opt1`, `opt2`) VALUES
(1, 'f9s0', 'lkjjjkop', 'jjljk'),
(2, 'h5b3', 'jljioijio', 'jhoijhoijio');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

DROP TABLE IF EXISTS `visits`;
CREATE TABLE IF NOT EXISTS `visits` (
  `visit_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` varchar(255) NOT NULL,
  `weight_p` varchar(255) NOT NULL,
  `bmi` varchar(255) NOT NULL,
  `hba1c` varchar(255) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `hypo_gly` varchar(255) NOT NULL,
  `dm_therapy` varchar(255) NOT NULL,
  `visit_date` varchar(255) NOT NULL,
  PRIMARY KEY (`visit_id`),
  KEY `phone_num` (`p_id`),
  KEY `phone_num_2` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`visit_id`, `p_id`, `weight_p`, `bmi`, `hba1c`, `notes`, `hypo_gly`, `dm_therapy`, `visit_date`) VALUES
(1, 'f9s0', 'jjho', 'hu', 'h', 'jh', 'kjj', 'o', 'oi'),
(2, 'h5b3', 'hiooiiojojojoiho', 'hoihoio', 'oihoh', 'oihio', 'hoh', 'oh', 'ohh');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cad`
--
ALTER TABLE `cad`
  ADD CONSTRAINT `cad_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`phone_num`) REFERENCES `patient_details` (`phone_num`);

--
-- Constraints for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD CONSTRAINT `lifestyle_changes_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `lipid_target`
--
ALTER TABLE `lipid_target`
  ADD CONSTRAINT `lipid_target_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `nephropathy`
--
ALTER TABLE `nephropathy`
  ADD CONSTRAINT `nephropathy_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `neuropathy`
--
ALTER TABLE `neuropathy`
  ADD CONSTRAINT `neuropathy_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `retinopathy`
--
ALTER TABLE `retinopathy`
  ADD CONSTRAINT `foreign_key_name` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD CONSTRAINT `risk_factors_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `self_management`
--
ALTER TABLE `self_management`
  ADD CONSTRAINT `self_management_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  ADD CONSTRAINT `vascular_protection_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);

--
-- Constraints for table `visits`
--
ALTER TABLE `visits`
  ADD CONSTRAINT `visits_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient_details` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
