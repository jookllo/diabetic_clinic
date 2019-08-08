-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 12:55 AM
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
-- Database: `pdets`
--

-- --------------------------------------------------------

--
-- Table structure for table `cad`
--

CREATE TABLE `cad` (
  `cad_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `ecg` varchar(255) NOT NULL,
  `secg` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `patname` varchar(255) NOT NULL,
  `aptype` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `lifestyle_changes` (
  `life_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `smoking` varchar(255) NOT NULL,
  `alcohol_intake` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifestyle_changes`
--

INSERT INTO `lifestyle_changes` (`life_id`, `p_id`, `smoking`, `alcohol_intake`) VALUES
(1, 'k3kc', 'isudahfuihuias', 'jhiuhuihou'),
(2, 'f9s0', 'ljnnj', 'iojioji'),
(3, 'h5b3', 'uihuhuuihui', 'hiuhuih');

-- --------------------------------------------------------

--
-- Table structure for table `lipid_target`
--

CREATE TABLE `lipid_target` (
  `target_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `lipid_level` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `ldate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `nephropathy` (
  `nid` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `acr` varchar(255) NOT NULL,
  `egfr` varchar(255) NOT NULL,
  `ndate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nephropathy`
--

INSERT INTO `nephropathy` (`nid`, `p_id`, `acr`, `egfr`, `ndate`) VALUES
(1, 'f9s0', 'nkjknj', 'jnjn', '2019-03-11'),
(2, 'h5b3', 'io;joiiojiojiojio', 'iojioioi', '2019-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `neuropathy`
--

CREATE TABLE `neuropathy` (
  `neuro_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `find_date` date DEFAULT NULL,
  `find` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `patient_details` (
  `p_id` varchar(255) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `diabetes_type` varchar(255) NOT NULL,
  `dod` date DEFAULT NULL,
  `dodiagnosis` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`p_id`, `patient_name`, `phone_num`, `diabetes_type`, `dod`, `dodiagnosis`) VALUES
('f9s0', 'twwen onn', '0783516727', 'j', '2019-03-05', '2019-03-27'),
('h5b3', 'micheal kors', '0723980381', 'a', '2019-03-03', '2019-02-03'),
('h6h4', 'hadid bella', '0794618395', 'e', '2019-03-18', '2019-03-30'),
('k3kc', 'jade inc', '0765492145', 'd', '2019-03-06', '2019-03-30'),
('n4np', 'willim son ', '0794381048', 'd', '2019-03-03', '2019-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `retinopathy`
--

CREATE TABLE `retinopathy` (
  `ret_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `report` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `opthamologist` varchar(255) NOT NULL,
  `e_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `risk_factors` (
  `risk_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `risk_factor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risk_factors`
--

INSERT INTO `risk_factors` (`risk_id`, `p_id`, `risk_factor`) VALUES
(1, 'f9s0', 'rtherth'),
(2, 'h5b3', 'huihiuhuhu');

-- --------------------------------------------------------

--
-- Table structure for table `self_management`
--

CREATE TABLE `self_management` (
  `man_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `patient_goals` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight_target` varchar(255) NOT NULL,
  `bmi_target` varchar(255) NOT NULL,
  `weight_management` varchar(255) NOT NULL,
  `nutrition_education` varchar(255) NOT NULL,
  `dodiscussion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `vascular_protection` (
  `vascular_id` int(11) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vascular_protection`
--

INSERT INTO `vascular_protection` (`vascular_id`, `p_id`, `opt1`, `opt2`) VALUES
(1, 'f9s0', 'lkjjjkop', 'jjljk'),
(2, 'h5b3', 'jljioijio', 'jhoijhoijio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad`
--
ALTER TABLE `cad`
  ADD PRIMARY KEY (`cad_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `phone_num` (`phone_num`);

--
-- Indexes for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD PRIMARY KEY (`life_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `lipid_target`
--
ALTER TABLE `lipid_target`
  ADD PRIMARY KEY (`target_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `nephropathy`
--
ALTER TABLE `nephropathy`
  ADD PRIMARY KEY (`nid`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `neuropathy`
--
ALTER TABLE `neuropathy`
  ADD PRIMARY KEY (`neuro_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `phone_num` (`phone_num`);

--
-- Indexes for table `retinopathy`
--
ALTER TABLE `retinopathy`
  ADD PRIMARY KEY (`ret_id`),
  ADD KEY `foreign_key_name` (`p_id`);

--
-- Indexes for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD PRIMARY KEY (`risk_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `self_management`
--
ALTER TABLE `self_management`
  ADD PRIMARY KEY (`man_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  ADD PRIMARY KEY (`vascular_id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad`
--
ALTER TABLE `cad`
  MODIFY `cad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  MODIFY `life_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lipid_target`
--
ALTER TABLE `lipid_target`
  MODIFY `target_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nephropathy`
--
ALTER TABLE `nephropathy`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `neuropathy`
--
ALTER TABLE `neuropathy`
  MODIFY `neuro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `retinopathy`
--
ALTER TABLE `retinopathy`
  MODIFY `ret_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `risk_factors`
--
ALTER TABLE `risk_factors`
  MODIFY `risk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `self_management`
--
ALTER TABLE `self_management`
  MODIFY `man_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  MODIFY `vascular_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
