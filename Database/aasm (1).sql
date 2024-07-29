-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 09:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aasm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `SL` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhNo` varchar(30) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Msg` varchar(1000) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`SL`, `Name`, `Email`, `PhNo`, `Subject`, `Msg`, `Date`, `Time`) VALUES
(1, 'Mamun All Rasid', 'mamunallrasid20@gmail.com', '7001731589', 'Hello', 'Hey My Self Mamun All Rasid From Sahenghata', '12-04-2023', '00:28:52 am'),
(2, 'Osman Goni', 'goni21@gmail.com', '7833901256', 'Opening Time', 'Please Ensure The Visiting Time', '12-04-2023', '01:48:43 am');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `SL` int(11) NOT NULL,
  `Event_Title` varchar(20) NOT NULL,
  `Image_Location` varchar(100) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`SL`, `Event_Title`, `Image_Location`, `Date`, `Time`) VALUES
(2, 'Second', '20200112_115516.jpg', '16-04-2023', '00:31:24 am'),
(3, 'Third', 'IMG-20200417-WA0009.jpg', '16-04-2023', '00:32:47 am'),
(6, 'Entrance Image', 'IMG_20190220_112318.jpg', '16-04-2023', '02:00:36 am'),
(9, 'Orientation Programm', 'Copy of IMG_0297.JPG', '26-04-2023', '08:37:49 am');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `SL` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Reating` varchar(10) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`SL`, `Name`, `Email`, `Reating`, `Message`, `Date`, `Time`) VALUES
(1, 'Mamun All Rasid', 'mamunallrasid20@gmail.com', '4.5', 'Nice Book ', '14-04-2023', ''),
(2, 'Mamun All Rasid', 'mamunall@gmail.com', '3', 'Hello Mamun All Rasid', '14-04-2023', '02:33:05 am'),
(4, 'Final ', 'final@gmail.com', '4.7', 'Nice Book In Our AASM Garden In Raiganj University', '14-04-2023', '03:50:56 am'),
(5, 'Rasid All Mamun', 'rasidallmamun209@gmail.com', '3.9', 'Nice Book ', '18-04-2023', '22:24:49 pm'),
(6, 'Sahid Hossain', 'iamsahid203@gmail.com', '3.8', 'Nice Book', '25-04-2023', '20:17:53 pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(11) NOT NULL,
  `AdminName` varchar(30) NOT NULL,
  `Userid` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `AdminName`, `Userid`, `Password`) VALUES
(1, 'Mamun All Rasid', 'MamunAllRasid', 'Mamun');

-- --------------------------------------------------------

--
-- Table structure for table `mainslider`
--

CREATE TABLE `mainslider` (
  `SL` int(11) NOT NULL,
  `ImageTitle` varchar(50) NOT NULL,
  `Image_Name` varchar(200) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mainslider`
--

INSERT INTO `mainslider` (`SL`, `ImageTitle`, `Image_Name`, `Date`, `Time`) VALUES
(4, 'First Try', 'SU1HXzIwMTkwMjIwXzEwMjkxNy5qcGc=', '29-04-2023', '00:25:48 am'),
(5, 'A. A. S. M. Medicinal Plant Garden', 'SU1HLTIwMjAwNDE3LVdBMDAwNS5qcGc=', '29-04-2023', '00:38:59 am'),
(6, 'রায়গঞ্জ ইউনিভার্সিটি বোটানিক্যাল গার্ডেন', 'SU1HLTIwMjAwNDE3LVdBMDAwNi5qcGc=', '29-04-2023', '00:40:24 am'),
(7, 'A. A. S. M.(RGU)', 'cmFpZ2FuanVuaXZlcnNpdHkzLnBuZw==', '29-04-2023', '00:41:55 am');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `SL` int(11) NOT NULL,
  `Member_Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Image_Location` varchar(50) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`SL`, `Member_Name`, `Description`, `Image_Location`, `Date`, `Time`) VALUES
(6, 'Logo', 'IIT Logo', 'download (1).png', '17-04-2023', '22:32:50 pm'),
(7, 'Hey Hey', 'No Any Type of Require', 'fb.png', '20-04-2023', '03:37:39 am'),
(9, 'M Rasid', 'BCA Dept of CIS', 'IMG_20220529_131630.jpg', '26-04-2023', '08:34:21 am');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `SL` int(11) NOT NULL,
  `Notice_Title` varchar(100) NOT NULL,
  `Notice_Location` varchar(50) NOT NULL,
  `Show_new` varchar(30) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`SL`, `Notice_Title`, `Notice_Location`, `Show_new`, `Date`, `Time`) VALUES
(5, 'New Celebration', 'Application Form.pdf', 'Show', '15-04-2023', '16:01:21 pm'),
(6, 'Invalid', 'chiranjit.pdf', 'Show', '15-04-2023', '23:50:00 pm'),
(7, 'University Will Remain Close', '16.4.2023-1.pdf', 'Show', '16-04-2023', '19:04:35 pm'),
(8, 'Debit Card', 'debit card osman.pdf', 'Hide', '21-04-2023', '01:25:38 am'),
(9, 'jk', 'FridayInvoice.pdf', 'Show', '29-04-2023', '01:34:45 am');

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `SL` int(11) NOT NULL,
  `Plant_Name` varchar(30) NOT NULL,
  `information` varchar(50) NOT NULL,
  `Image_Location` varchar(50) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`SL`, `Plant_Name`, `information`, `Image_Location`, `Type`, `Date`, `Time`) VALUES
(5, 'Aro Second', 'Hey Aro second', '2 Abroma augusta.JPG', 'Arometic', '18-04-2023', '01:11:19 am'),
(9, 'Cordyline Fruticose', 'used', 'Copy of Cordyline fruticosa.jpg', 'Medicinal', '26-04-2023', '08:45:32 am'),
(10, 'Aro', 'AroMetic', 'Sterculia foetida.JPG', 'Arometic', '28-04-2023', '18:40:36 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mainslider`
--
ALTER TABLE `mainslider`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mainslider`
--
ALTER TABLE `mainslider`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
