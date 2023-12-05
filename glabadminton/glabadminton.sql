-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glabadminton`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '211ef5f9a14e7ce8a394b304926f9863', '2017-05-13 11:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `alumnicorner`
--

CREATE TABLE `alumnicorner` (
  `alumniid` int(3) NOT NULL,
  `alumniname` varchar(50) NOT NULL,
  `alumnicourse` varchar(20) NOT NULL,
  `alumnijob` varchar(20) NOT NULL,
  `alumniphone` bigint(11) NOT NULL,
  `alumniemail` varchar(50) NOT NULL,
  `alumnithought` varchar(500) NOT NULL,
  `alumniphoto` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumnicorner`
--

INSERT INTO `alumnicorner` (`alumniid`, `alumniname`, `alumnicourse`, `alumnijob`, `alumniphone`, `alumniemail`, `alumnithought`, `alumniphoto`, `timestamp`) VALUES
(1, 'Mr Satyam Kaushal', 'B.Tech(CS)', 'TCS', 9455593295, 'shubhanshunishad2221@gmail.com', 'HI i am good what about you . ', 'shubhansuh_pic-min (1).png', '2022-04-02 18:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_nivesharth`
--

CREATE TABLE `contact_nivesharth` (
  `id_na` int(3) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_nivesharth`
--

INSERT INTO `contact_nivesharth` (`id_na`, `name`, `phone`, `email`, `message`) VALUES
(1, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'hi ji jijiji'),
(13, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'hi '),
(14, 'Shubhanshu Nishad', 9455593295, 'shubhanshunishad24@gmail.com', 'hi '),
(15, 'Thomas Kraynik', 89695281627, 'autoreply@ddmmarketing.hu', 'Üdvözlöm, \r\n \r\nVállalkozása online jelenlétének elemzése után azonosítottunk néhány kulcsfontosságú növekedési lehetőséget. \r\n \r\nAz Ön közreműködésével fejleszthetjük ezeket a pontokat, és rendelkezésre bocsátjuk adat - és piaci intelligencia - elemzésünket az Ön konkrét réséről. \r\n \r\nA legjobb az egészben, hogy minden szóban forgó informatikai és marketing megoldást mi kezelünk, ezáltal is megkönnyítve az Ön munkáját. \r\n \r\nAmennyiben, tehát többet szeretne megtudni arról, hogyan segíthetünk Önn'),
(16, 'Richarddek', 83385255314, 'no-replyheltsoola@gmail.com', 'Good day!  nivesharth.com \r\n \r\nWe offer \r\n \r\nSending your business proposition through the Contact us form which can be found on the sites in the contact section. Feedback forms are filled in by our application and the captcha is solved. The profit of this method is that messages sent through feedback forms are whitelisted. This technique improve the probability that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your messag');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(3) NOT NULL,
  `quotes` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lasteventwinner`
--

CREATE TABLE `lasteventwinner` (
  `id` int(3) NOT NULL,
  `eventname` varchar(20) NOT NULL,
  `winnername` varchar(20) NOT NULL,
  `rank` int(1) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lasteventwinner`
--

INSERT INTO `lasteventwinner` (`id`, `eventname`, `winnername`, `rank`, `phone`, `email`, `photo`, `timestamp`) VALUES
(1, 'Get-set', 'Shubhanshu Nishad', 1, 8318595363, 'shubhanshunishad24@gmail.com', 'shubhansuh_pic-min (1).png', '2022-04-02 18:44:22'),
(2, 'Get-set', 'Kamal Kishan', 2, 8318595363, 'shubhanshunishad24@gmail.com', 't14.jpeg', '2022-04-02 18:45:48'),
(3, 'Get-set', 'Uday', 3, 8318595363, 'shubhanshunishad24@gmail.com', 't1.jpeg', '2022-04-02 18:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year` int(4) NOT NULL,
  `message` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumnicorner`
--
ALTER TABLE `alumnicorner`
  ADD PRIMARY KEY (`alumniid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contact_nivesharth`
--
ALTER TABLE `contact_nivesharth`
  ADD PRIMARY KEY (`id_na`),
  ADD UNIQUE KEY `id_na` (`id_na`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lasteventwinner`
--
ALTER TABLE `lasteventwinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alumnicorner`
--
ALTER TABLE `alumnicorner`
  MODIFY `alumniid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact_nivesharth`
--
ALTER TABLE `contact_nivesharth`
  MODIFY `id_na` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lasteventwinner`
--
ALTER TABLE `lasteventwinner`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
