-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2019 at 04:04 PM
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
-- Database: `p_ksh`
--

-- --------------------------------------------------------

--
-- Table structure for table `cad`
--

CREATE TABLE `cad` (
  `ksnum` int(60) NOT NULL,
  `ecg` varchar(60) NOT NULL,
  `secg` varchar(60) NOT NULL,
  `other` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cad`
--

INSERT INTO `cad` (`ksnum`, `ecg`, `secg`, `other`) VALUES
(0, 'jhbkwejkcekjc', 'bjdekjbd wjkde', 'dvehvjdwbjkdbewk'),
(123456, '12345', 'DSFDAD', 'DSAFGSD');

-- --------------------------------------------------------

--
-- Table structure for table `lifestyle_changes`
--

CREATE TABLE `lifestyle_changes` (
  `ksnum` int(60) NOT NULL,
  `smoking` varchar(60) NOT NULL,
  `alcohol_intake` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifestyle_changes`
--

INSERT INTO `lifestyle_changes` (`ksnum`, `smoking`, `alcohol_intake`) VALUES
(1223, 'Yes', 12),
(12345, 'Yes', 123),
(12345, 'Yes', 123);

-- --------------------------------------------------------

--
-- Table structure for table `lipid_target`
--

CREATE TABLE `lipid_target` (
  `ldate` date NOT NULL,
  `lipid_level` varchar(60) NOT NULL,
  `plan` varchar(60) NOT NULL,
  `ksnum` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lipid_target`
--

INSERT INTO `lipid_target` (`ldate`, `lipid_level`, `plan`, `ksnum`) VALUES
('2019-01-07', '120/12', 'jdnbkjaskfdbsjkd', 12345),
('2019-01-09', 'SDFADFSA', 'SDAFDSAD', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `nephropathy`
--

CREATE TABLE `nephropathy` (
  `ksnum` int(60) NOT NULL,
  `ndate` date NOT NULL,
  `acr` varchar(60) NOT NULL,
  `egfr` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nephropathy`
--

INSERT INTO `nephropathy` (`ksnum`, `ndate`, `acr`, `egfr`) VALUES
(12345, '0000-00-00', 'qwerty', 'qwerty'),
(123466, '2019-01-09', 'qwdfsdv', 'safgdsfass'),
(12345678, '0000-00-00', 'g', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `Neuropathy`
--

CREATE TABLE `Neuropathy` (
  `find_date` date NOT NULL,
  `finds` varchar(60) NOT NULL,
  `ksnum` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Neuropathy`
--

INSERT INTO `Neuropathy` (`find_date`, `finds`, `ksnum`) VALUES
('2019-01-08', 'qwhnfabsjkda', 12345),
('2019-01-09', 'ASDFSVDS', 123445);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `patient_name` varchar(60) NOT NULL,
  `ksnum` int(60) NOT NULL,
  `diabetestype` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `dodiagnosis` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`patient_name`, `ksnum`, `diabetestype`, `dob`, `dodiagnosis`) VALUES
('habil okello', 1223, 'Type 1', '1997-02-01', '2018-09-18'),
('iodnaskd', 12345, 'Type 1', '2007-01-09', '2019-01-08'),
('Patli OKnjnf', 123456, 'Type 1', '1995-12-12', '2019-01-07'),
('ojsjadbskj', 12345678, 'Type 1', '1996-01-10', '2033-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `retinopathy`
--

CREATE TABLE `retinopathy` (
  `e_date` date NOT NULL,
  `report` varchar(60) NOT NULL,
  `plan` varchar(60) NOT NULL,
  `ophthalmologist` varchar(60) NOT NULL,
  `ksnum` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retinopathy`
--

INSERT INTO `retinopathy` (`e_date`, `report`, `plan`, `ophthalmologist`, `ksnum`) VALUES
('2019-01-08', 'jbkjdbjkd', 'jkbdjkbdjbkj', 'bjdbkjbd jk', 12345),
('2019-01-09', 'DSFWSDAFS', 'ADSFDSGFASD', 'DSADFSFAD', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `risk_factors`
--

CREATE TABLE `risk_factors` (
  `ksnum` int(60) NOT NULL,
  `risk_factor` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risk_factors`
--

INSERT INTO `risk_factors` (`ksnum`, `risk_factor`) VALUES
(1223, ''),
(1223, 'CKD'),
(12245, 'Dyslipidaemia'),
(12245, 'Array'),
(12245, 'Hypertension,Dyslipidaemia,CKD'),
(12345, ''),
(12345, 'Hypertension,Foot disease,Coronary Artery Disease'),
(134567, 'Hypertension,CKD,Foot disease,Coronary Artery Disease');

-- --------------------------------------------------------

--
-- Table structure for table `self_management`
--

CREATE TABLE `self_management` (
  `patient_goals` varchar(90) NOT NULL,
  `height` float NOT NULL,
  `weight_target` float NOT NULL,
  `bmi_target` float(10,0) NOT NULL,
  `weight_mngment` text NOT NULL,
  `nutrition_education` text NOT NULL,
  `dodiscussion` date NOT NULL,
  `ksnum` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_management`
--

INSERT INTO `self_management` (`patient_goals`, `height`, `weight_target`, `bmi_target`, `weight_mngment`, `nutrition_education`, `dodiscussion`, `ksnum`) VALUES
('lose weight', 1.23, 120, 2, 'Yes', 'Yes', '2019-01-07', 12243),
('stop smoking', 1.23, 101, 12, 'Yes', 'Yes', '2019-01-08', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `vascular_protection`
--

CREATE TABLE `vascular_protection` (
  `opt1` varchar(20) NOT NULL,
  `opt2` varchar(20) NOT NULL,
  `ksnum` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vascular_protection`
--

INSERT INTO `vascular_protection` (`opt1`, `opt2`, `ksnum`) VALUES
('Yes', '', 12345),
('Yes', 'No', 12345),
('No', 'No', 123451),
('Yes', 'Yes', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `visit_date` date NOT NULL,
  `bp` varchar(40) NOT NULL,
  `weight` varchar(60) NOT NULL,
  `bmi` float NOT NULL,
  `hba1c` varchar(60) NOT NULL,
  `notes` varchar(60) NOT NULL,
  `hypo_gly` varchar(60) NOT NULL,
  `dm_therapy` varchar(60) NOT NULL,
  `ksnum` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`visit_date`, `bp`, `weight`, `bmi`, `hba1c`, `notes`, `hypo_gly`, `dm_therapy`, `ksnum`) VALUES
('2019-01-08', '120/12', '123', 112.134, 'fdagsdv', 'adfadvvbs', 'afvasdvdgsd', 'safagddggdd', 0),
('2019-01-08', '120/12', '120', 12.12, '12342', 'fehffbskj', 'hbjhkfbdsjfhbahj', 'hjvjksdbkjdsv', 0),
('2019-01-07', '12012', '120', 120.11, 'adsyihk', 'jbskafkj', 'jbskac kjab', 'jkbas c', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad`
--
ALTER TABLE `cad`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `lifestyle_changes`
--
ALTER TABLE `lifestyle_changes`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `lipid_target`
--
ALTER TABLE `lipid_target`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `nephropathy`
--
ALTER TABLE `nephropathy`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `Neuropathy`
--
ALTER TABLE `Neuropathy`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`ksnum`);

--
-- Indexes for table `retinopathy`
--
ALTER TABLE `retinopathy`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `risk_factors`
--
ALTER TABLE `risk_factors`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `self_management`
--
ALTER TABLE `self_management`
  ADD KEY `ksnum` (`ksnum`);

--
-- Indexes for table `vascular_protection`
--
ALTER TABLE `vascular_protection`
  ADD KEY `ksnum` (`ksnum`),
  ADD KEY `ksnum_2` (`ksnum`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD KEY `ksnum` (`ksnum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
