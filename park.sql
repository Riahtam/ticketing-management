-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 04, 2021 at 04:24 PM
-- Server version: 10.3.20-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(9, 'User', 'admin', 9876543211, 'admin@gmail.com', 'admin2', '2020-08-18 11:57:59'),
(10, 'User', 'asg', 1235, 'b', 'bthr', '2020-08-18 12:55:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblticforeigner`
--

DROP TABLE IF EXISTS `tblticforeigner`;
CREATE TABLE IF NOT EXISTS `tblticforeigner` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `TicketID` varchar(200) DEFAULT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `pname` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `TicketID` (`TicketID`),
  KEY `TicketID_2` (`TicketID`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticforeigner`
--

INSERT INTO `tblticforeigner` (`ID`, `TicketID`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`, `pname`) VALUES
(16, '187764004', 1, 1, '50', '30', '2020-10-03 12:00:09', 'Nohkalikai'),
(17, '734109518', 2, 1, '100', '50', '2020-10-03 12:35:45', 'Nohkalikai'),
(18, '996554783', 1, 1, '100', '50', '2020-10-03 16:05:09', 'Nohkalikai'),
(19, '266970996', 1, 1, '100', '50', '2020-10-03 16:05:50', 'Nohkalikai'),
(20, '316182942', 1, 3, '100', '50', '2020-10-03 16:06:12', 'Nohkalikai'),
(21, '174628605', 1, 3, '100', '50', '2020-10-03 16:06:46', 'Nohkalikai'),
(22, '947771399', 2, 3, '100', '50', '2020-10-03 16:07:39', 'Nohkalikai'),
(23, '995305610', 2, 5, '100', '50', '2020-10-03 16:21:52', 'Nohkalikai'),
(24, '175911384', 2, 3, '100', '50', '2020-10-03 16:23:00', 'Nohkalikai'),
(25, '804352851', 1, 1, '100', '50', '2020-10-09 12:09:38', 'Nohkalikai'),
(26, '293194409', 1, 1, '100', '50', '2020-10-09 12:17:31', 'Nohkalikai'),
(27, '574085500', 1, 1, '100', '50', '2020-10-09 12:22:58', 'Nohkalikai'),
(28, '282229910', 2, 1, '100', '50', '2020-10-09 12:38:59', 'Nohkalikai'),
(29, '131594904', 2, 2, '100', '50', '2020-10-09 12:48:05', 'Nohkalikai'),
(30, '964666569', 15, 2, '100', '50', '2020-10-18 11:09:05', 'Nohkalikai'),
(31, '549846289', 2, 4, '100', '50', '2020-10-20 04:05:19', ''),
(32, '438325067', 5, 8, '100', '50', '2020-10-20 04:44:48', ''),
(33, '418948554', 5, 5, '100', '50', '2020-10-20 04:46:15', 'Nohkalikai'),
(34, '349260175', 2, 2, '100', '50', '2020-10-20 15:36:58', 'Nohkalikai');

-- --------------------------------------------------------

--
-- Table structure for table `tblticindian`
--

DROP TABLE IF EXISTS `tblticindian`;
CREATE TABLE IF NOT EXISTS `tblticindian` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `TicketID` varchar(100) NOT NULL,
  `NoAdult` int(10) DEFAULT NULL,
  `NoChildren` int(10) DEFAULT NULL,
  `AdultUnitprice` varchar(50) DEFAULT NULL,
  `ChildUnitprice` varchar(50) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `pname` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `TicketID` (`TicketID`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblticindian`
--

INSERT INTO `tblticindian` (`ID`, `TicketID`, `NoAdult`, `NoChildren`, `AdultUnitprice`, `ChildUnitprice`, `PostingDate`, `pname`) VALUES
(21, '784432094', 1, 1, '50', '30', '2020-10-03 11:54:28', 'Nohkalikai'),
(22, '639979203', 2, 1, '50', '30', '2020-10-03 12:37:27', 'Nohkalikai'),
(23, '433275864', 1, 1, '50', '30', '2020-10-03 12:41:33', 'Nohkalikai'),
(24, '949329383', 1, 4, '50', '30', '2020-10-03 12:43:12', 'Nohkalikai'),
(25, '817255488', 1, 4, '50', '30', '2020-10-03 15:37:29', 'Nohkalikai'),
(26, '274125909', 1, 4, '50', '30', '2020-10-03 15:39:11', 'Nohkalikai'),
(27, '552523217', 1, 1, '50', '30', '2020-10-03 16:00:16', 'Nohkalikai'),
(28, '665730720', 2, 1, '50', '30', '2020-10-03 16:08:14', 'Nohkalikai'),
(29, '911153581', 5, 1, '50', '30', '2020-10-03 16:09:51', 'Nohkalikai'),
(30, '682919191', 2, 5, '50', '30', '2020-10-03 16:18:36', 'Nohkalikai'),
(31, '854086570', 9, 8, '50', '30', '2020-10-07 05:35:20', 'Nohkalikai'),
(32, '521285239', 1, 2, '50', '30', '2020-10-08 13:50:48', 'Nohkalikai'),
(33, '380230976', 3, 4, '50', '30', '2020-10-08 13:53:01', 'Nohkalikai'),
(34, '607772623', 5, 6, '50', '30', '2020-10-08 14:05:33', 'Nohkalikai'),
(35, '726743220', 1, 1, '50', '30', '2020-10-09 06:09:29', 'Nohkalikai'),
(36, '672195270', 1, 1, '50', '30', '2020-10-09 12:16:51', 'Nohkalikai'),
(37, '341299743', 1, 1, '50', '30', '2020-10-09 12:18:38', 'Nohkalikai'),
(38, '717149815', 1, 1, '50', '30', '2020-10-09 12:21:36', 'Nohkalikai'),
(39, '929735765', 1, 1, '50', '30', '2020-10-09 12:36:04', 'Nohkalikai'),
(40, '385727926', 1, 1, '50', '30', '2020-10-09 12:36:23', 'Nohkalikai'),
(41, '588946074', 1, 1, '50', '30', '2020-10-09 12:36:59', 'Nohkalikai'),
(42, '608691344', 1, 1, '50', '30', '2020-10-09 12:37:32', 'Nohkalikai'),
(43, '393257918', 1, 1, '50', '30', '2020-10-09 12:37:54', 'Nohkalikai'),
(44, '338792612', 1, 1, '50', '30', '2020-10-09 12:38:08', 'Nohkalikai'),
(45, '609610174', 1, 1, '50', '30', '2020-10-09 12:38:44', 'Nohkalikai'),
(46, '658127720', 1, 1, '50', '30', '2020-10-09 12:40:08', 'Kharmih'),
(47, '665205632', 1, 1, '50', '30', '2020-10-09 12:46:55', 'Nohkalikai'),
(48, '808321060', 8, 5, '50', '30', '2020-10-20 03:24:16', 'Nohkalikai'),
(49, '335725466', 8, 5, '50', '30', '2020-10-20 03:24:17', 'Nohkalikai'),
(50, '788965308', 1, 3, '54', '30', '2020-10-20 04:04:07', ''),
(51, '541279534', 6, 3, '54', '30', '2020-10-20 04:40:09', 'Nohkalikai'),
(52, '313081236', 5, 3, '54', '30', '2020-10-20 04:44:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltickettype`
--

DROP TABLE IF EXISTS `tbltickettype`;
CREATE TABLE IF NOT EXISTS `tbltickettype` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `TicketType` varchar(200) DEFAULT NULL,
  `Price` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ID`),
  KEY `TicketType` (`TicketType`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltickettype`
--

INSERT INTO `tbltickettype` (`ID`, `TicketType`, `Price`, `CreationDate`) VALUES
(1, 'Normal Adult', '54', '2019-12-30 06:31:56'),
(2, 'Normal Child', '30', '2019-12-30 06:32:27'),
(3, 'Foreigner Adult', '100', '2019-12-30 06:33:16'),
(4, 'Foreigner Child', '50', '2019-12-30 06:33:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
