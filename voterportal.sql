-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2021 at 05:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voterportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidatedetails`
--

CREATE TABLE `candidatedetails` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Age` int(100) NOT NULL,
  `Party` varchar(255) NOT NULL,
  `Slogan` varchar(255) NOT NULL,
  `Votes` int(100) NOT NULL,
  `Image` varchar(350) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidatedetails`
--

INSERT INTO `candidatedetails` (`ID`, `Name`, `Age`, `Party`, `Slogan`, `Votes`, `Image`) VALUES
(1, 'Narendra Modi', 71, 'BJP', 'Abki Baar Modi Sarkar', 100, 'CandidateImages/1.jpg'),
(2, 'Rahul Gandhi', 51, 'INC', 'Ab Hoga Nyaay', 55, 'CandidateImages/2.jpg'),
(3, 'Akhilesh Yadav', 48, 'SP', 'Sab bolo dil se, Akhilesh bhaiya phir se', 35, 'CandidateImages/3.jpg'),
(4, 'Mamata Banerjee', 66, 'AITC', 'Mother, Motherland and People', 42, 'CandidateImages/4.jpg'),
(5, 'Naveen Patnaik', 75, 'BJD', 'Not okay with just okay', 67, 'CandidateImages/5.jpg'),
(6, 'Mayawati', 65, 'BSP', 'Bahujana Hitaya Bahujana Sukhaya', 37, 'CandidateImages/6.jpg'),
(7, 'Arvind Kejriwal', 53, 'AAP', 'Acche Beete 5 Saal, Lage Raho Kejriwal', 45, 'CandidateImages/7.jpg'),
(8, 'Uddhav Thackeray', 61, 'Shiv Sena', '80 takke samajkaran, 20 takke rajkaran', 62, 'CandidateImages/8.jpg'),
(9, 'Y. S. Jagan Mohan Reddy', 48, 'YSRC', 'Ravali Jagan Kavali Jagan', 55, 'CandidateImages/9.jpg'),
(10, 'Tejashwi Yadav', 32, 'RJD', 'Kare ke Ba, Lade ke Ba, Jeete ke Ba', 23, 'CandidateImages/10.jpg'),
(11, 'Owaisi Assaddudin', 52, 'AIMIM', 'Jai Bheem Jai Mim', 20, 'CandidateImages/11.jpg'),
(12, 'Nitish Kumar', 70, 'JDU', '2021 fir se nititsh', 25, 'CandidateImages/12.jpg'),
(14, 'Sitaram Yechury', 69, 'CPI', 'National Democracy', 40, '../CandidateImages/13.jpg'),
(15, 'M. K. Stalin', 68, 'DMK', 'For the pride', 50, '../CandidateImages/14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `canpersonal`
--

CREATE TABLE `canpersonal` (
  `ID` int(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Image` varchar(350) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Party` varchar(30) NOT NULL,
  `Slogan` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Age` int(100) NOT NULL,
  `Contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canpersonal`
--

INSERT INTO `canpersonal` (`ID`, `Name`, `Image`, `Email`, `Party`, `Slogan`, `DOB`, `Age`, `Contact`) VALUES
(1, 'Narendra Modi', 'CandidateDetails/1.jpg', 'modibjp@gmail.com', 'BJP', 'Abki Baar Modi Sarkar', '1950-09-17', 71, '9345675612'),
(2, 'Rahul Gandhi', 'CandidateDetails/2.jpg', 'rahulgandhi@gmail.com', 'INC', 'Ab Hoga Nyaay', '1970-06-19', 51, '9383728372'),
(3, 'Akhilesh Yadav', 'CandidateDetails/3.jpg', 'akhilesh@gmail.com', 'SP', 'Sab bolo dil se, Akhilesh bhaiya phir se', '1973-07-01', 48, '9876345684'),
(4, 'Mamata Banerjee', 'CandidateDetails/4.jpg', 'mamata@gmail.com', 'AITC', 'Mother, Motherland and People', '1955-01-05', 66, '9879584938'),
(5, 'Naveen Patnaik', 'CandidateDetails/5.jpg', 'naveen@gmail.com', 'BJD', 'Not okay with just okay', '1946-10-16', 75, '9838146782'),
(6, 'Mayawati', 'CandidateDetails/6.jpg', 'mayabsp@gmail.com', 'BSP', 'Bahujana Hitaya Bahujana Sukhaya', '1956-01-15', 65, '8437653343'),
(7, 'Arvind Kejriwal', 'CandidateDetails/7.jpg', 'arvindkejriwal@gmail.com', 'AAP', 'Acche Beete 5 Saal, Lage Raho Kejriwal', '1968-08-16', 53, '7893456789'),
(8, 'Uddhav Thackeray', 'CandidateDetails/8.jpg', 'uddhav123@gmail.com', 'Shiv Sena', '80 takke samajkaran, 20 takke rajkaran', '1960-07-27', 61, '6783984378'),
(9, 'Y. S. Jagan Mohan Reddy', 'CandidateDetails/9.jpg', 'mohanreddy@gmail.com', 'YSRC', 'Ravali Jagan Kavali Jagan', '1972-12-21', 48, '7896567845'),
(10, 'Tejashwi Yadav', 'CandidateDetails/10.jpg', 'tejyadav@gmail.com', 'RJD', 'Kare ke Ba, Lade ke Ba, Jeete ke Ba', '1989-11-09', 32, '9876549833'),
(11, 'Owaisi Assaddudin', 'CandidateDetails/11.jpg', 'owaisi123@gmail.com', 'AIMIM', 'Jai Bheem Jai Mim', '1969-05-13', 52, '9899668799'),
(12, 'Nitish Kumar', 'CandidateImages/12.jpg', 'nitish@gmail.com', 'JDU', '2021 fir se nititsh', '1951-03-01', 70, '9847789748'),
(14, 'Sitaram Yechury', '../CandidateImages/13.jpg', 'sita5757@gmail.com', 'CPI', 'National Democracy', '1952-08-12', 69, '8947694587'),
(15, 'M. K. Stalin', '../CandidateImages/14.jpg', 'mkstalin@gmail.com', 'DMK', 'For the pride', '1953-03-01', 68, '7875968475');

-- --------------------------------------------------------

--
-- Table structure for table `phase`
--

CREATE TABLE `phase` (
  `NO` int(3) NOT NULL,
  `Phase` enum('REGISTRATION','VOTING','RESULTS') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phase`
--

INSERT INTO `phase` (`NO`, `Phase`) VALUES
(1, 'REGISTRATION');

-- --------------------------------------------------------

--
-- Table structure for table `voterdetails`
--

CREATE TABLE `voterdetails` (
  `VID` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Image` varchar(350) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Aadhar` bigint(20) DEFAULT NULL,
  `Contact` bigint(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Pincode` int(6) NOT NULL,
  `Age` int(3) NOT NULL,
  `pwd` varchar(40) DEFAULT NULL,
  `Voted` enum('Yes','No') DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voterdetails`
--

INSERT INTO `voterdetails` (`VID`, `Name`, `Image`, `Email`, `Aadhar`, `Contact`, `DOB`, `Pincode`, `Age`, `pwd`, `Voted`) VALUES
(213065, 'Amit Kumar', 'VoterImages/1.jpeg', 'ay716976@gmail.com', 558576023958, 8692083915, '2002-07-20', 401107, 19, 'amit123', 'Yes'),
(213066, 'Ankit Yadav', 'VoterImages/2.jpeg', 'mr.ankityadav118@gmail.com', 876743876458, 7893486583, '1993-07-08', 401101, 28, 'ankit@123', 'No'),
(213067, 'Sushma Singh', 'VoterImages/3.jpeg', 'sushma45@gmail.com', 876894567498, 9887568976, '1998-05-29', 230104, 23, 'ss!@#', 'No'),
(213068, 'Aditya Vichare', 'VoterImages/4.jpeg', 'masteraditya45@gmail.com', 236786467568, 9876678655, '1997-03-06', 309789, 24, 'adiv8808', 'Yes'),
(213069, 'Karan Upadhyay', 'VoterImages/5.jpeg', 'karan67@gmail.com', 564739765239, 7865430987, '2000-07-13', 463446, 21, '@564karan', 'Yes'),
(213070, 'Nikhil Singh', 'VoterImages/6.png', 'nikhilsingh@gmail.com', 786843756937, 9094058694, '1977-11-17', 609375, 44, '@nikhil89345', 'Yes'),
(213074, 'Arvind Jaiswal', 'VoterImages/7.jpg', 'arvind@gmail.com', 875948574384, 9853873465, '1987-02-11', 578346, 34, 'arvindj123', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidatedetails`
--
ALTER TABLE `candidatedetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `canpersonal`
--
ALTER TABLE `canpersonal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `phase`
--
ALTER TABLE `phase`
  ADD PRIMARY KEY (`NO`);

--
-- Indexes for table `voterdetails`
--
ALTER TABLE `voterdetails`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidatedetails`
--
ALTER TABLE `candidatedetails`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `canpersonal`
--
ALTER TABLE `canpersonal`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `phase`
--
ALTER TABLE `phase`
  MODIFY `NO` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voterdetails`
--
ALTER TABLE `voterdetails`
  MODIFY `VID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213076;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
