-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 03:58 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `department`
--
CREATE DATABASE IF NOT EXISTS `department` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `department`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `fullname` varchar(22) NOT NULL,
  `emaila` varchar(25) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `fullname`, `emaila`, `status`) VALUES
(1, 'mahid', 'spimahid1318', 'Mahid Ahmed', 'hrmahid@gmail.com', 0),
(2, 'rubel', 'spirubel2018', 'Rubel Ahmed', 'rubelraj225@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `call_name` varchar(255) NOT NULL,
  `div_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`, `call_name`, `div_name`) VALUES
(1, 'BARGUNA', 'BARGUNA', 'BARISAL'),
(2, 'BARISAL', 'BARISAL', 'BARISAL'),
(3, 'BHOLA', 'BHOLA', 'BARISAL'),
(4, 'JHALOKATI', 'JHALOKATI', 'BARISAL'),
(5, 'PATUAKHALI', 'PATUAKHALI', 'BARISAL'),
(6, 'PIROJPUR', 'PIROJPUR', 'BARISAL'),
(7, 'BANDARBAN', 'BANDARBAN', 'CHITTAGONG'),
(8, 'BRAHMANBARIA', 'BRAHMANBARIA', 'CHITTAGONG'),
(9, 'CHANDPUR', 'CHANDPUR', 'CHITTAGONG'),
(10, 'CHITTAGONG', 'CHITTAGONG', 'CHITTAGONG'),
(11, 'COMILLA', 'COMILLA', 'CHITTAGONG'),
(12, 'FENI', 'FENI', 'CHITTAGONG'),
(13, 'KHAGRACHHARI', 'KHAGRACHHARI', 'CHITTAGONG'),
(14, 'LAKSHMIPUR', 'LAKSHMIPUR', 'CHITTAGONG'),
(15, 'NOAKHALI', 'NOAKHALI', 'CHITTAGONG'),
(16, 'RANGAMATI', 'RANGAMATI', 'CHITTAGONG'),
(17, 'DHAKA', 'DHAKA', 'DHAKA'),
(18, 'FARIDPUR', 'FARIDPUR', 'DHAKA'),
(19, 'GAZIPUR', 'GAZIPUR', 'DHAKA'),
(20, 'GOPALGANJ', 'GOPALGANJ', 'DHAKA'),
(21, 'JAMALPUR', 'JAMALPUR', 'DHAKA'),
(22, 'KISHOREGONJ', 'KISHOREGONJ', 'DHAKA'),
(23, 'MADARIPUR', 'MADARIPUR', 'DHAKA'),
(24, 'MANIKGANJ', 'MANIKGANJ', 'DHAKA'),
(25, 'MUNSHIGANJ', 'MUNSHIGANJ', 'DHAKA'),
(26, 'MYMENSINGH', 'MYMENSINGH', 'DHAKA'),
(27, 'NARAYANGANJ', 'NARAYANGANJ', 'DHAKA'),
(28, 'NARSINGDI', 'NARSINGDI', 'DHAKA'),
(29, 'NETRAKONA', 'NETRAKONA', 'DHAKA'),
(30, 'RAJBARI', 'RAJBARI', 'DHAKA'),
(31, 'SHARIATPUR', 'SHARIATPUR', 'DHAKA'),
(32, 'SHERPUR', 'SHERPUR', 'DHAKA'),
(33, 'TANGAIL', 'TANGAIL', 'DHAKA'),
(34, 'BAGERHAT', 'BAGERHAT', 'KHULNA'),
(35, 'CHUADANGA', 'CHUADANGA', 'KHULNA'),
(36, 'JESSORE', 'JESSORE', 'KHULNA'),
(37, 'JHENAIDAH', 'JHENAIDAH', 'KHULNA'),
(38, 'KHULNA', 'KHULNA', 'KHULNA'),
(39, 'KUSHTIA', 'KUSHTIA', 'KHULNA'),
(40, 'MAGURA', 'MAGURA', 'KHULNA'),
(41, 'MEHERPUR', 'MEHERPUR', 'KHULNA'),
(42, 'NARAIL', 'NARAIL', 'KHULNA'),
(43, 'SATKHIRA', 'SATKHIRA', 'KHULNA'),
(44, 'BOGRA', 'BOGRA', 'RAJSHAHI'),
(45, 'JOYPURHAT', 'JOYPURHAT', 'RAJSHAHI'),
(46, 'NAOGAON', 'NAOGAON', 'RAJSHAHI'),
(47, 'NATORE', 'NATORE', 'RAJSHAHI'),
(48, 'CHAPAI NABABGANJ', 'CHAPAI NABABGANJ', 'RAJSHAHI'),
(49, 'PABNA', 'PABNA', 'RAJSHAHI'),
(50, 'RAJSHAHI', 'RAJSHAHI', 'RAJSHAHI'),
(51, 'SIRAJGANJ', 'SIRAJGANJ', 'RAJSHAHI'),
(52, 'DINAJPUR', 'DINAJPUR', 'RANGPUR'),
(53, 'GAIBANDHA', 'GAIBANDHA', 'RANGPUR'),
(54, 'KURIGRAM', 'KURIGRAM', 'RANGPUR'),
(55, 'LALMONIRHAT', 'LALMONIRHAT', 'RANGPUR'),
(56, 'NILPHAMARI', 'NILPHAMARI', 'RANGPUR'),
(57, 'PANCHAGARH', 'PANCHAGARH', 'RANGPUR'),
(58, 'RANGPUR', 'RANGPUR', 'RANGPUR'),
(59, 'THAKURGAON', 'THAKURGAON', 'RANGPUR'),
(60, 'HABIGANJ', 'HABIGANJ', 'SYLHET'),
(61, 'MAULVIBAZAR', 'MAULVIBAZAR', 'SYLHET'),
(62, 'SUNAMGANJ', 'SUNAMGANJ', 'SYLHET'),
(63, 'SYLHET', 'SYLHET', 'SYLHET');

-- --------------------------------------------------------

--
-- Table structure for table `data_entry`
--

CREATE TABLE `data_entry` (
  `id` int(11) NOT NULL,
  `name` varchar(24) NOT NULL,
  `email` varchar(222) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_entry`
--

INSERT INTO `data_entry` (`id`, `name`, `email`, `password`) VALUES
(1, 'Mahid', 'hrmahid@gmail.com', '7654');

-- --------------------------------------------------------

--
-- Table structure for table `dept_sessions`
--

CREATE TABLE `dept_sessions` (
  `id` int(11) NOT NULL,
  `sessions` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dept_sessions`
--

INSERT INTO `dept_sessions` (`id`, `sessions`) VALUES
(1, '2015-16'),
(2, '2016-17'),
(3, '2017-18'),
(4, '2018-19');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `div_name` varchar(255) NOT NULL,
  `call_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `div_name`, `call_name`) VALUES
(1, 'BARISAL ', 'BARISAL '),
(2, 'CHITTAGONG', 'CHITTAGONG'),
(3, 'DHAKA', 'DHAKA'),
(4, 'RAJSHAHI', 'RAJSHAHI'),
(5, 'RANGPUR', 'RANGPUR'),
(6, 'SYLHET', 'SYLHET'),
(7, 'KHULNA', 'KHULNA');

-- --------------------------------------------------------

--
-- Table structure for table `education_boards`
--

CREATE TABLE `education_boards` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_boards`
--

INSERT INTO `education_boards` (`id`, `name`) VALUES
(1, 'Barisal'),
(2, 'Chittagong'),
(3, 'Comilla'),
(4, 'Dhaka'),
(5, 'Dinajpur'),
(6, 'Jessore'),
(7, 'Rajshahi'),
(8, 'Sylhet'),
(9, 'Madrasah'),
(10, 'Technical'),
(11, 'DIBS(Dhaka)');

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `realid` int(20) NOT NULL,
  `dateofb` date NOT NULL,
  `desgisnation` varchar(44) NOT NULL,
  `joindate` date NOT NULL,
  `educationquali` varchar(257) NOT NULL,
  `email` varchar(54) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `photo` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `name`, `realid`, `dateofb`, `desgisnation`, `joindate`, `educationquali`, `email`, `phone`, `photo`) VALUES
(1, 'Md. Alamgir Hossain', 0, '1973-12-20', 'Chief Instructor  & Head of the Department', '2007-04-11', 'M.Sc in CSE', 'mdalamgirh@yahoo.com', '01715300399', 'Alamgir.jpg'),
(2, 'Roksana Nahar', 77181135, '1997-07-05', 'Junior Instructor ', '2003-03-04', 'B.Sc in CSE ', 'roksanacmt@gmail.com', '01961570740', 'roksana.jpg'),
(3, 'Ruma Akhter', 2147483647, '1982-01-01', 'Junior Instructor (Computer)', '2006-02-19', 'B.Sc in Technical Education (EEE) ', 'rumaakter459@gmail.com', '01914280888', 'Ruma.jpg'),
(4, 'Abdullah Ibn Nazim', 2147483647, '1982-12-10', 'Instructor (Computer)', '2013-05-07', ' B.Sc in CSE', 'cseabdullah@gmail.com', '01756182176', 'Nazim.jpg'),
(5, 'Shantonu Roy', 2147483647, '1990-02-13', 'Junior Instructor (Computer)', '2012-12-26', 'B.Sc in CSE', 'shantobd68@gmail.com', '01944481440', 'Shantonu.jpg'),
(6, 'Bashir Alam', 2147483647, '1991-01-01', 'Junior Instructor (Computer)', '2012-12-26', 'B.Sc in CSE', 'edujobs24@gmail.com', '01678591330', 'Bashir.jpg'),
(7, 'Mohammad Ismail Shake', 79181276, '1979-10-01', 'Craft Instructor (Computer)', '2005-02-19', 'Diploma in Computer Tec.', 'mdismail.spi15@yahoo.com', '01715171302', 'Ismail.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `justresult`
--

CREATE TABLE `justresult` (
  `id` int(11) NOT NULL,
  `sessions` varchar(25) NOT NULL,
  `groups` varchar(25) NOT NULL,
  `roll` int(25) NOT NULL,
  `reg` int(25) NOT NULL,
  `results` varchar(10) NOT NULL,
  `refered` int(8) NOT NULL,
  `sems` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `book` varchar(6999) NOT NULL,
  `thumb` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `name`, `book`, `thumb`) VALUES
(1, 'HTML Bangla Book Download', 'HTML BD Web Link.pdf', 'HTMLDesign.jpg'),
(2, 'CSS Bangla Book Download', 'Css Tutorial eBook.pdf', 'CSS-BanglaDownload.jpg'),
(3, 'PHP & MySql Bangla', 'PHP_MySQL Final.pdf', '1464941337.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_notices`
--

CREATE TABLE `pdf_notices` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `pdffile` mediumtext NOT NULL,
  `dateofup` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pdf_notices`
--

INSERT INTO `pdf_notices` (`id`, `name`, `pdffile`, `dateofup`) VALUES
(1, 'à¦¡à¦¿à¦ªà§à¦²à§‹à¦®à¦¾ à¦‡à¦¨ à¦‡à¦žà§à¦œà¦¿à¦¨à¦¿à§Ÿà¦¾à¦°à¦¿à¦‚ à¦¶à¦¿à¦•à§à¦·à¦¾à¦•à§à¦°à¦®à§‡à¦° à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦«à¦°à¦® à¦ªà§‚à¦°à¦£à§‡à¦° à¦¸à¦‚à¦¶à§‹à¦§à¦¨à§€ à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿', '', '2018-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `single_notice`
--

CREATE TABLE `single_notice` (
  `id` int(11) NOT NULL,
  `noticeline` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `single_notice`
--

INSERT INTO `single_notice` (`id`, `noticeline`) VALUES
(1, 'à¦¸à¦¬à¦¾à¦‡à¦•à§‡ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦“à§Ÿà§‡à¦¬ à¦¸à¦¾à¦‡à¦Ÿà§‡ à¦¸à§à¦¬à¦¾à¦—à¦¤à¦®');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`) VALUES
(1, 'working-at-computer-DSE-desks.jpg'),
(2, 'computer-technology-business-website-header.jpg'),
(3, 'blog1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `personalphone` varchar(13) NOT NULL,
  `homephone` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quota` varchar(55) NOT NULL,
  `relegion` varchar(10) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `presenddist` varchar(255) NOT NULL,
  `presentcareof` varchar(255) NOT NULL,
  `prespoliceupzila` varchar(255) NOT NULL,
  `presentaddrs` varchar(255) NOT NULL,
  `permadist` varchar(255) NOT NULL,
  `percareof` varchar(255) NOT NULL,
  `peraddrs` varchar(255) NOT NULL,
  `perpoliceupzila` varchar(255) NOT NULL,
  `psc` varchar(20) NOT NULL,
  `pscboard` varchar(20) NOT NULL,
  `pscgrp` varchar(30) NOT NULL,
  `pscres` varchar(6) NOT NULL,
  `pscyear` int(4) NOT NULL,
  `jsc` varchar(20) NOT NULL,
  `jscboard` varchar(20) NOT NULL,
  `jscgrp` varchar(20) NOT NULL,
  `jscres` varchar(20) NOT NULL,
  `jscyear` varchar(20) NOT NULL,
  `ssc` varchar(20) NOT NULL,
  `sscboard` varchar(20) NOT NULL,
  `sscgrp` varchar(20) NOT NULL,
  `sscres` varchar(20) NOT NULL,
  `sscyear` varchar(20) NOT NULL,
  `hsc` varchar(20) NOT NULL,
  `hscboard` varchar(20) NOT NULL,
  `hscgrp` varchar(20) NOT NULL,
  `hscres` varchar(20) NOT NULL,
  `hscyear` varchar(20) NOT NULL,
  `predivision` varchar(20) NOT NULL,
  `perdivision` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `registration` int(10) NOT NULL,
  `shift` varchar(5) NOT NULL,
  `clggroup` varchar(10) NOT NULL,
  `sessions` varchar(20) NOT NULL,
  `bloodgrp` varchar(4) NOT NULL,
  `1semsresult` varchar(10) NOT NULL,
  `2semsresult` varchar(6) NOT NULL,
  `3semsresult` varchar(6) NOT NULL,
  `4semsresult` varchar(6) NOT NULL,
  `5semsresult` varchar(6) NOT NULL,
  `6semsresult` varchar(6) NOT NULL,
  `7semsresult` varchar(6) NOT NULL,
  `8semsresult` varchar(6) NOT NULL,
  `cgpa` varchar(8) NOT NULL,
  `remarks` varchar(10) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `std_pass` varchar(20) NOT NULL,
  `acc_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fname`, `mname`, `birthdate`, `personalphone`, `homephone`, `email`, `quota`, `relegion`, `sex`, `presenddist`, `presentcareof`, `prespoliceupzila`, `presentaddrs`, `permadist`, `percareof`, `peraddrs`, `perpoliceupzila`, `psc`, `pscboard`, `pscgrp`, `pscres`, `pscyear`, `jsc`, `jscboard`, `jscgrp`, `jscres`, `jscyear`, `ssc`, `sscboard`, `sscgrp`, `sscres`, `sscyear`, `hsc`, `hscboard`, `hscgrp`, `hscres`, `hscyear`, `predivision`, `perdivision`, `semester`, `roll`, `registration`, `shift`, `clggroup`, `sessions`, `bloodgrp`, `1semsresult`, `2semsresult`, `3semsresult`, `4semsresult`, `5semsresult`, `6semsresult`, `7semsresult`, `8semsresult`, `cgpa`, `remarks`, `image`, `std_pass`, `acc_name`) VALUES
(1, 'Habibur Rahman Mahid', 'Mokbul Ahmed', 'Afsana Begum', '1998-05-23', '01845635308', '01731248107', 'hrmahid@gmail.com', 'Merit', 'Islam', 'Male', 'SYLHET', 'Father', 'SYLHET SADAR', 'Gashitula,Sylhet', 'SYLHET', 'Father', 'Gashitula,Sylhet', 'SYLHET SADAR', '', '', '', '', 0, 'JSC', 'Sylhet', 'General', '3.31', '2014', 'SSC Voc', 'Technical', 'Scince', '5.00', '2016', '', '', '', '', '', 'SYLHET', '', '4th', 372590, 228485, '1st', 'A1', '2016-17', 'B+', '3.23', '2.74', '2.76', '0', '0', '0', '0', '0', '0.4365', '', 'MAHID.JPG', 'mahidspi', 'mahid');

-- --------------------------------------------------------

--
-- Table structure for table `upzilah`
--

CREATE TABLE `upzilah` (
  `id` int(11) NOT NULL,
  `up_name` varchar(222) NOT NULL,
  `city_name` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upzilah`
--

INSERT INTO `upzilah` (`id`, `up_name`, `city_name`) VALUES
(1, 'AMTALI', 'BARGUNA'),
(2, 'BAMNA', 'BARGUNA'),
(3, 'BARGUNA SADAR', 'BARGUNA'),
(4, 'BETAGI', 'BARGUNA'),
(5, 'PATHARGHATA', 'BARGUNA'),
(6, 'TALTALI', 'BARGUNA'),
(7, 'AGAILJHARA', 'BARISAL'),
(8, 'BABUGANJ', 'BARISAL'),
(9, 'BAKERGANJ', 'BARISAL'),
(10, 'BANARI PARA', 'BARISAL'),
(11, 'GAURNADI', 'BARISAL'),
(12, 'HIZLA', 'BARISAL'),
(13, 'BARISAL SADAR (KOTWALI)', 'BARISAL'),
(14, 'MHENDIGANJ', 'BARISAL'),
(15, 'MULADI', 'BARISAL'),
(16, 'WAZIRPUR', 'BARISAL'),
(17, 'BHOLA SADAR', 'BHOLA'),
(18, 'BURHANUDDIN', 'BHOLA'),
(19, 'CHAR FASSON', 'BHOLA'),
(20, 'DAULAT KHAN', 'BHOLA'),
(21, 'LALMOHAN', 'BHOLA'),
(22, 'MANPURA', 'BHOLA'),
(23, 'TAZUMUDDIN', 'BHOLA'),
(24, 'JHALOKATI SADAR', 'JHALOKATI'),
(25, 'KANTHALIA', 'JHALOKATI'),
(26, 'NALCHITY', 'JHALOKATI'),
(27, 'RAJAPUR', 'JHALOKATI'),
(28, 'BAUPHAL', 'PATUAKHALI'),
(29, 'DASHMINA', 'PATUAKHALI'),
(30, 'DUMKI', 'PATUAKHALI'),
(31, 'GALACHIPA', 'PATUAKHALI'),
(32, 'KALAPARA', 'PATUAKHALI'),
(33, 'MIRZAGANJ', 'PATUAKHALI'),
(34, 'PATUAKHALI SADAR', 'PATUAKHALI'),
(35, 'RANGABALI', 'PATUAKHALI'),
(36, 'BHANDARIA', 'PIROJPUR'),
(37, 'KAWKHALI', 'PIROJPUR'),
(38, 'MATHBARIA', 'PIROJPUR'),
(39, 'PIROJPUR SADAR', 'PIROJPUR'),
(40, 'NESARABAD ', 'PIROJPUR'),
(41, 'ZIANAGAR', 'PIROJPUR'),
(42, 'ALIKADAM', 'BANDARBAN'),
(43, 'BANDARBAN SADAR', 'BANDARBAN'),
(44, 'LAMA', 'BANDARBAN'),
(45, 'NAIKHONGCHHARI', 'BANDARBAN'),
(46, 'ROWANGCHHARI', 'BANDARBAN'),
(47, 'RUMA', 'BANDARBAN'),
(48, 'THANCHI', 'BANDARBAN'),
(49, 'AKHAURA', 'BRAHMANBARIA'),
(50, 'BANCHHARAMPUR', 'BRAHMANBARIA'),
(51, 'BIJOYNAGAR', 'BRAHMANBARIA'),
(53, 'BRAHMANBARIA SADAR', 'BRAHMANBARIA'),
(54, 'ASHUGANJ', 'BRAHMANBARIA'),
(55, 'KASBA', 'BRAHMANBARIA'),
(56, 'NABINAGAR', 'BRAHMANBARIA'),
(57, 'NASIRNAGAR', 'BRAHMANBARIA'),
(58, 'SARAIL', 'BRAHMANBARIA'),
(59, 'CHANDPUR SADAR', 'CHANDPUR'),
(60, 'FARIDGANJ', 'CHANDPUR'),
(61, 'HAIM CHAR', 'CHANDPUR'),
(62, 'HAJIGANJ', 'CHANDPUR'),
(63, 'KACHUA', 'CHANDPUR'),
(64, 'MATLAB DAKSHIN', 'CHANDPUR'),
(65, 'MATLAB UTTAR', 'CHANDPUR'),
(66, 'SHAHRASTI', 'CHANDPUR'),
(67, 'ANOWARA', 'CHITTAGONG'),
(68, 'BAYEJID BOSTAMI', 'CHITTAGONG'),
(69, 'BANSHKHALI', 'CHITTAGONG'),
(70, 'BAKALIA', 'CHITTAGONG'),
(71, 'BOALKHALI', 'CHITTAGONG'),
(72, 'CHANDANAISH', 'CHITTAGONG'),
(73, 'CHANDGAON', 'CHITTAGONG'),
(74, 'CHITTAGONG PORT', 'CHITTAGONG'),
(75, 'DOUBLE MOORING', 'CHITTAGONG'),
(76, 'FATIKCHHARI', 'CHITTAGONG'),
(77, 'HALISHAHAR', 'CHITTAGONG'),
(78, 'HATHAZARI', 'CHITTAGONG'),
(79, 'KOTWALI', 'CHITTAGONG'),
(80, 'KHULSHI', 'CHITTAGONG'),
(81, 'LOHAGARA', 'CHITTAGONG'),
(82, 'MIRSHARAI', 'CHITTAGONG'),
(83, 'PAHARTALI', 'CHITTAGONG'),
(84, 'PANCHLAISH', 'CHITTAGONG'),
(85, 'PATIYA', 'CHITTAGONG'),
(86, 'PATENGA', 'CHITTAGONG'),
(87, 'RANGUNIA', 'CHITTAGONG'),
(88, 'RAOZAN', 'CHITTAGONG'),
(89, 'SANDWIP', 'CHITTAGONG'),
(90, 'SATKANIA', 'CHITTAGONG'),
(91, 'SITAKUNDA', 'CHITTAGONG'),
(92, 'BARURA', 'COMILLA'),
(93, 'BRAHMAN PARA', 'COMILLA'),
(94, 'BURICHANG', 'COMILLA'),
(95, 'CHANDINA', 'COMILLA'),
(96, 'CHAUDDAGRAM', 'COMILLA'),
(97, 'COMILLA SADAR DAKSHIN', 'COMILLA'),
(98, 'DAUDKANDI', 'COMILLA'),
(99, 'DEBIDWAR', 'COMILLA'),
(100, 'HOMNA', 'COMILLA'),
(101, 'COMILLA ADARSHA SADAR', 'COMILLA'),
(102, 'LAKSAM', 'COMILLA'),
(103, 'MANOHARGANJ', 'COMILLA'),
(104, 'MEGHNA', 'COMILLA'),
(105, 'MURADNAGAR', 'COMILLA'),
(106, 'NANGALKOT', 'COMILLA'),
(107, 'TITAS', 'COMILLA'),
(108, 'CHHAGALNAIYA', 'FENI'),
(109, 'DAGANBHUIYAN', 'FENI'),
(110, 'FENI SADAR', 'FENI'),
(111, 'FULGAZI', 'FENI'),
(112, 'PARSHURAM', 'FENI'),
(113, 'SONAGAZI', 'FENI'),
(114, 'DIGHINALA', 'KHAGRACHHARI'),
(115, 'KHAGRACHHARI SADAR', 'KHAGRACHHARI'),
(116, 'LAKSHMICHHARI', 'KHAGRACHHARI'),
(117, 'MAHALCHHARI', 'KHAGRACHHARI'),
(118, 'MANIKCHHARI', 'KHAGRACHHARI'),
(119, 'MATIRANGA', 'KHAGRACHHARI'),
(120, 'MATIRANGA', 'KHAGRACHHARI'),
(121, 'RAMGARH', 'KHAGRACHHARI'),
(122, 'KAMALNAGAR', 'LAKSHMIPUR'),
(123, 'LAKSHMIPUR SADAR', 'LAKSHMIPUR'),
(124, 'ROYPUR', 'LAKSHMIPUR'),
(125, 'RAMGANJ', 'LAKSHMIPUR'),
(126, 'RAMGATI', 'LAKSHMIPUR'),
(127, 'BEGUMGANJ', 'NOAKHALI'),
(128, 'CHATKHIL', 'NOAKHALI'),
(129, 'COMPANIGANJ', 'NOAKHALI'),
(130, 'HATIYA', 'NOAKHALI'),
(131, 'KABIRHAT', 'NOAKHALI'),
(132, 'SENBAGH', 'NOAKHALI'),
(133, 'SONAIMURI', 'NOAKHALI'),
(134, 'SUBARNACHAR', 'NOAKHALI'),
(135, 'NOAKHALI SADAR', 'NOAKHALI'),
(136, 'BAGHAICHHARI', 'RANGAMATI'),
(137, 'BARKAL UPAZILA', 'RANGAMATI'),
(138, 'KAWKHALI (BETBUNIA)', 'RANGAMATI'),
(139, 'BELAI CHHARI UPAZI', 'RANGAMATI'),
(140, 'KAPTAI UPAZILA', 'RANGAMATI'),
(141, 'JURAI CHHARI UPAZIL', 'RANGAMATI'),
(142, 'LANGADU UPAZILA', 'RANGAMATI'),
(143, 'NANIARCHAR UPAZILA', 'RANGAMATI'),
(144, 'RAJASTHAL', 'RANGAMATI'),
(145, 'RANGAMATI SADAR', 'RANGAMATI'),
(146, 'ADABOR', 'DHAKA'),
(147, 'BADDA', 'DHAKA'),
(148, 'BANGSHAL', 'DHAKA'),
(149, 'BIMAN BANDAR', 'DHAKA'),
(150, 'BANANI', 'DHAKA'),
(151, 'CANTONMENT', 'DHAKA'),
(152, 'CHAK BAZAR', 'DHAKA'),
(153, 'DAKSHINKHAN', 'DHAKA'),
(154, 'DARUS SALAM', 'DHAKA'),
(155, 'DEMRA', 'DHAKA'),
(156, 'DHAMRAI', 'DHAKA'),
(157, 'DHANMONDI', 'DHAKA'),
(158, 'DOHAR', 'DHAKA'),
(159, 'BHASAN TEK', 'DHAKA'),
(160, 'BHATARA', 'DHAKA'),
(161, 'GENDARIA', 'DHAKA'),
(162, 'GULSHAN', 'DHAKA'),
(163, 'HAZARIBAGH', 'DHAKA'),
(164, 'JATRABARI', 'DHAKA'),
(165, 'KAFRUL', 'DHAKA'),
(166, 'KADAMTALI', 'DHAKA'),
(167, 'KALABAGAN', 'DHAKA'),
(168, 'KAMRANGIR CHAR', 'DHAKA'),
(169, 'KHILGAON', 'DHAKA'),
(170, 'KHILKHET', 'DHAKA'),
(171, 'KERANIGANJ', 'DHAKA'),
(172, 'KOTWALI', 'DHAKA'),
(173, 'LALBAGH', 'DHAKA'),
(174, 'MIRPUR', 'DHAKA'),
(175, 'MOHAMMADPUR', 'DHAKA'),
(176, 'MOTIJHEEL', 'DHAKA'),
(177, 'MUGDA PARA', 'DHAKA'),
(178, 'NAWABGANJ', 'DHAKA'),
(179, 'NEW MARKET', 'DHAKA'),
(180, 'PALLABI', 'DHAKA'),
(181, 'PALTAN', 'DHAKA'),
(182, 'RAMNA', 'DHAKA'),
(183, 'RAMPURA', 'DHAKA'),
(184, 'SABUJBAGH', 'DHAKA'),
(185, 'RUPNAGAR', 'DHAKA'),
(186, 'SAVAR', 'DHAKA'),
(187, 'SHAHJAHANPUR', 'DHAKA'),
(188, 'SHAH ALI', 'DHAKA'),
(189, 'SHAHBAGH', 'DHAKA'),
(190, 'SHYAMPUR', 'DHAKA'),
(191, 'SHER-E-BANGLA NAGAR', 'DHAKA'),
(192, 'SUTRAPUR', 'DHAKA'),
(193, 'TEJGAON', 'DHAKA'),
(194, 'TEJGAON IND. AREA', 'DHAKA'),
(195, 'TURAG', 'DHAKA'),
(196, 'UTTARA PASCHIM', 'DHAKA'),
(197, 'UTTARA PURBA', 'DHAKA'),
(198, 'UTTAR KHAN', 'DHAKA'),
(199, 'WARI', 'DHAKA'),
(200, 'ALFADANGA', 'FARIDPUR'),
(201, 'BHANGA', 'FARIDPUR'),
(202, 'BOALMARI', 'FARIDPUR'),
(203, 'CHAR BHADRASAN', 'FARIDPUR'),
(204, 'FARIDPUR SADAR', 'FARIDPUR'),
(205, 'MADHUKHALI', 'FARIDPUR'),
(206, 'NAGARKANDA', 'FARIDPUR'),
(207, 'SADARPUR', 'FARIDPUR'),
(208, 'SALTHA', 'FARIDPUR'),
(209, 'GAZIPUR SADAR', 'GAZIPUR'),
(210, 'KALIAKAIR', 'GAZIPUR'),
(211, 'KALIGANJ', 'GAZIPUR'),
(212, 'KAPASIA', 'GAZIPUR'),
(213, 'SREEPUR', 'GAZIPUR'),
(214, 'GOPALGANJ SADAR', 'GOPALGANJ'),
(215, 'KASHIANI', 'GOPALGANJ'),
(216, 'KOTALIPARA', 'GOPALGANJ'),
(217, 'MUKSUDPUR', 'GOPALGANJ'),
(218, 'TUNGIPARA', 'GOPALGANJ'),
(219, 'BAKSHIGANJ', 'JAMALPUR'),
(220, 'DEWANGANJ', 'JAMALPUR'),
(221, 'ISLAMPUR', 'JAMALPUR'),
(222, 'JAMALPUR SADAR', 'JAMALPUR'),
(223, 'MADARGANJ', 'JAMALPUR'),
(224, 'MELANDAHA', 'JAMALPUR'),
(225, 'SARISHABARI UPAZILA', 'JAMALPUR'),
(226, 'AUSTAGRAM', 'KISHOREGONJ'),
(227, 'BAJITPUR', 'KISHOREGONJ'),
(228, 'BHAIRAB', 'KISHOREGONJ'),
(229, 'HOSSAINPUR', 'KISHOREGONJ'),
(230, 'ITNA', 'KISHOREGONJ'),
(231, 'KARIMGANJ', 'KISHOREGONJ'),
(232, 'KATIADI', 'KISHOREGONJ'),
(233, 'KISHOREGANJ SADAR', 'KISHOREGONJ'),
(234, 'KULIAR CHAR', 'KISHOREGONJ'),
(235, 'MITHAMAIN', 'KISHOREGONJ'),
(236, 'NIKLI', 'KISHOREGONJ'),
(237, 'PAKUNDIA', 'KISHOREGONJ'),
(238, 'TARAIL', 'KISHOREGONJ'),
(239, 'KALKINI', 'MADARIPUR'),
(240, 'MADARIPUR SADAR', 'MADARIPUR'),
(241, 'RAJOIR', 'MADARIPUR'),
(242, 'SHIBCHAR', 'MADARIPUR'),
(243, 'DAULATPUR', 'MANIKGANJ'),
(244, 'GHIOR', 'MANIKGANJ'),
(245, 'HARIRAMPUR', 'MANIKGANJ'),
(246, 'MANIKGANJ SADAR', 'MANIKGANJ'),
(247, 'SATURIA', 'MANIKGANJ'),
(248, 'SHIBALAYA', 'MANIKGANJ'),
(249, 'SINGAIR', 'MANIKGANJ'),
(250, 'GAZARIA', 'MUNSHIGANJ'),
(251, 'LOHAJANG', 'MUNSHIGANJ'),
(252, 'MUNSHIGANJ SADAR', 'MUNSHIGANJ'),
(253, 'SERAJDIKHAN', 'MUNSHIGANJ'),
(254, 'SREENAGAR', 'MUNSHIGANJ'),
(255, 'TONGIBARI', 'MUNSHIGANJ'),
(256, 'BHALUKA', 'MYMENSINGH'),
(257, 'DHOBAURA', 'MYMENSINGH'),
(258, 'FULBARIA', 'MYMENSINGH'),
(259, 'GAFFARGAON', 'MYMENSINGH'),
(260, 'GAURIPUR', 'MYMENSINGH'),
(261, 'HALUAGHAT', 'MYMENSINGH'),
(262, 'ISHWARGANJ', 'MYMENSINGH'),
(263, 'MYMENSINGH SADAR', 'MYMENSINGH'),
(264, 'MUKTAGACHHA', 'MYMENSINGH'),
(265, 'NANDAIL', 'MYMENSINGH'),
(266, 'PHULPUR', 'MYMENSINGH'),
(267, 'TRISHAL', 'MYMENSINGH'),
(268, 'ARAIHAZAR', 'NARAYANGANJ'),
(269, 'SONARGAON', 'NARAYANGANJ'),
(270, 'BANDAR', 'NARAYANGANJ'),
(271, 'NARAYANGANJ SADAR', 'NARAYANGANJ'),
(272, 'RUPGANJ', 'NARAYANGANJ'),
(273, 'BELABO', 'NARSINGDI'),
(274, 'MANOHARDI', 'NARSINGDI'),
(275, 'NARSINGDI SADAR', 'NARSINGDI'),
(276, 'PALASH', 'NARSINGDI'),
(277, 'ROYPURA', 'NARSINGDI'),
(278, 'SHIBPUR', 'NARSINGDI'),
(279, 'ATPARA', 'NETRAKONA'),
(280, 'BARHATTA', 'NETRAKONA'),
(281, 'DURGAPUR', 'NETRAKONA'),
(282, 'KHALIAJURI', 'NETRAKONA'),
(283, 'KALMAKANDA', 'NETRAKONA'),
(284, 'KENDUA', 'NETRAKONA'),
(285, 'MADAN', 'NETRAKONA'),
(286, 'MOHANGANJ', 'NETRAKONA'),
(287, 'NETROKONA SADAR', 'NETRAKONA'),
(288, 'PURBADHALA', 'NETRAKONA'),
(289, 'BALIAKANDI', 'RAJBARI'),
(290, 'GOALANDA', 'RAJBARI'),
(291, 'KALUKHALI', 'RAJBARI'),
(292, 'PANGSHA', 'RAJBARI'),
(293, 'RAJBARI SADAR', 'RAJBARI'),
(294, 'BHEDARGANJ', 'SHARIATPUR'),
(295, 'DAMUDYA', 'SHARIATPUR'),
(296, 'GOSAIRHAT', 'SHARIATPUR'),
(297, 'NARIA', 'SHARIATPUR'),
(298, 'SHARIATPUR SADAR', 'SHARIATPUR'),
(299, 'ZANJIRA', 'SHARIATPUR'),
(300, 'JHENAIGATI', 'SHERPUR'),
(301, 'NAKLA', 'SHERPUR'),
(302, 'NALITABARI', 'SHERPUR'),
(303, 'SHERPUR SADAR', 'SHERPUR'),
(304, 'SREEBARDI', 'SHERPUR'),
(305, 'BASAIL', 'TANGAIL'),
(306, 'BHUAPUR', 'TANGAIL'),
(307, 'DELDUAR', 'TANGAIL'),
(308, 'DHANBARI', 'TANGAIL'),
(309, 'GHATAIL', 'TANGAIL'),
(310, 'GOPALPUR', 'TANGAIL'),
(311, 'KALIHATI', 'TANGAIL'),
(312, 'MADHUPUR', 'TANGAIL'),
(313, 'MIRZAPUR', 'TANGAIL'),
(314, 'NAGARPUR', 'TANGAIL'),
(315, 'SAKHIPUR', 'TANGAIL'),
(316, 'TANGAIL SADAR', 'TANGAIL'),
(317, 'BAGERHAT SADAR', 'BAGERHAT'),
(318, 'CHITALMARI', 'BAGERHAT'),
(319, 'FAKIRHAT', 'BAGERHAT'),
(320, 'KACHUA', 'BAGERHAT'),
(321, 'MOLLAHAT', 'BAGERHAT'),
(322, 'MONGLA', 'BAGERHAT'),
(323, 'MORRELGANJ', 'BAGERHAT'),
(324, 'RAMPAL', 'BAGERHAT'),
(325, 'SARANKHOLA', 'BAGERHAT'),
(326, 'ALAMDANGA', 'CHUADANGA'),
(327, 'CHUADANGA SADAR', 'CHUADANGA'),
(328, 'DAMURHUDA', 'CHUADANGA'),
(329, 'JIBAN NAGAR', 'CHUADANGA'),
(330, 'ABHAYNAGAR', 'JESSORE'),
(331, 'BAGHER PARA', 'JESSORE'),
(332, 'CHAUGACHHA', 'JESSORE'),
(333, 'JHIKARGACHHA', 'JESSORE'),
(334, 'KESHABPUR', 'JESSORE'),
(335, 'JESSORE SADAR', 'JESSORE'),
(336, 'MANIRAMPUR', 'JESSORE'),
(337, 'SHARSHA', 'JESSORE'),
(338, 'HARINAKUNDA', 'JHENAIDAH'),
(339, 'JHENAIDAH SADAR', 'JHENAIDAH'),
(340, 'KALIGANJ', 'JHENAIDAH'),
(341, 'KOTCHANDPUR', 'JHENAIDAH'),
(342, 'MAHESHPUR', 'JHENAIDAH'),
(343, 'SHAILKUPA', 'JHENAIDAH'),
(344, 'BATIAGHATA', 'KHULNA'),
(345, 'DACOPE', 'KHULNA'),
(346, 'DAULATPUR', 'KHULNA'),
(347, 'DUMURIA', 'KHULNA'),
(348, 'DIGHALIA', 'KHULNA'),
(349, 'KHALISHPUR', 'KHULNA'),
(350, 'KHAN JAHAN ALI', 'KHULNA'),
(351, 'KHULNA SADAR', 'KHULNA'),
(352, 'KOYRA', 'KHULNA'),
(353, 'PAIKGACHHA', 'KHULNA'),
(354, 'PHULTALA', 'KHULNA'),
(355, 'RUPSA', 'KHULNA'),
(356, 'SONADANGA', 'KHULNA'),
(357, 'TEROKHADA', 'KHULNA'),
(358, 'BHERAMARA', 'KUSHTIA'),
(359, 'DAULATPUR', 'KUSHTIA'),
(360, 'KHOKSA', 'KUSHTIA'),
(361, 'KUMARKHALI', 'KUSHTIA'),
(362, 'KUSHTIA SADAR', 'KUSHTIA'),
(363, 'MIRPUR', 'KUSHTIA'),
(364, 'MAGURA SADAR', 'MAGURA'),
(365, 'MOHAMMADPUR', 'MAGURA'),
(366, 'SHALIKHA', 'MAGURA'),
(367, 'SREEPUR', 'MAGURA'),
(368, 'GANGNI', 'MEHERPUR'),
(369, 'MUJIB NAGAR', 'MEHERPUR'),
(370, 'MEHERPUR SADAR', 'MEHERPUR'),
(371, 'KALIA', 'NARAIL'),
(372, 'LOHAGARA', 'NARAIL'),
(373, 'NARAIL SADAR', 'NARAIL'),
(374, 'ASSASUNI', 'SATKHIRA'),
(375, 'DEBHATA', 'SATKHIRA'),
(376, 'KALAROA', 'SATKHIRA'),
(377, 'KALIGANJ', 'SATKHIRA'),
(378, 'SATKHIRA SADAR', 'SATKHIRA'),
(379, 'SHYAMNAGAR', 'SATKHIRA'),
(380, 'TALA', 'SATKHIRA'),
(381, 'ADAMDIGHI', 'BOGRA'),
(382, 'BOGRA SADAR', 'BOGRA'),
(383, 'DHUNAT', 'BOGRA'),
(384, 'DHUPCHANCHIA', 'BOGRA'),
(385, 'GABTALI', 'BOGRA'),
(386, 'KAHALOO', 'BOGRA'),
(387, 'NANDIGRAM', 'BOGRA'),
(388, 'SARIAKANDI', 'BOGRA'),
(389, 'SHAJAHANPUR', 'BOGRA'),
(390, 'SHERPUR', 'BOGRA'),
(391, 'SHIBGANJ', 'BOGRA'),
(392, 'SONATOLA', 'BOGRA'),
(393, 'AKKELPUR', 'JOYPURHAT'),
(394, 'JOYPURHAT SADAR', 'JOYPURHAT'),
(395, 'KALAI', 'JOYPURHAT'),
(396, 'KHETLAL', 'JOYPURHAT'),
(397, 'PANCHBIBI', 'JOYPURHAT'),
(398, 'ATRAI', 'NAOGAON'),
(399, 'BADALGACHHI', 'NAOGAON'),
(400, 'DHAMOIRHAT', 'NAOGAON'),
(401, 'MANDA', 'NAOGAON'),
(402, 'MAHADEBPUR', 'NAOGAON'),
(403, 'NAOGAON SADAR', 'NAOGAON'),
(404, 'NIAMATPUR', 'NAOGAON'),
(405, 'PATNITALA', 'NAOGAON'),
(406, 'PORSHA', 'NAOGAON'),
(407, 'RANINAGAR', 'NAOGAON'),
(408, 'SAPAHAR', 'NAOGAON'),
(409, 'BAGATIPARA', 'NATORE'),
(410, 'BARAIGRAM', 'NATORE'),
(411, 'GURUDASPUR', 'NATORE'),
(412, 'LALPUR', 'NATORE'),
(413, 'NATORE SADAR', 'NATORE'),
(414, 'SINGRA', 'NATORE'),
(415, 'BHOLAHAT', 'CHAPAI NABABGANJ'),
(416, 'GOMASTAPUR', 'CHAPAI NABABGANJ'),
(417, 'NACHOLE', 'CHAPAI NABABGANJ'),
(418, 'CHAPAI NABABGANJ SADAR', 'CHAPAI NABABGANJ'),
(419, 'SHIBGANJ', 'CHAPAI NABABGANJ'),
(420, 'ATGHARIA', 'PABNA'),
(421, 'BERA', 'PABNA'),
(422, 'BHANGURA', 'PABNA'),
(423, 'CHATMOHAR', 'PABNA'),
(424, 'FARIDPUR', 'PABNA'),
(425, 'ISHWARDI', 'PABNA'),
(426, 'PABNA SADAR', 'PABNA'),
(427, 'SANTHIA', 'PABNA'),
(428, 'SUJANAGAR', 'PABNA'),
(429, 'BAGHA', 'RAJSHAHI'),
(430, 'BAGHMARA', 'RAJSHAHI'),
(431, 'BOALIA', 'RAJSHAHI'),
(432, 'CHARGHAT', 'RAJSHAHI'),
(433, 'DURGAPUR', 'RAJSHAHI'),
(434, 'GODAGARI', 'RAJSHAHI'),
(435, 'MATIHAR', 'RAJSHAHI'),
(436, 'MOHANPUR', 'RAJSHAHI'),
(437, 'PABA', 'RAJSHAHI'),
(438, 'PUTHIA', 'RAJSHAHI'),
(439, 'RAJPARA', 'RAJSHAHI'),
(440, 'SHAH MAKHDUM', 'RAJSHAHI'),
(441, 'TANORE', 'RAJSHAHI'),
(442, 'BELKUCHI', 'SIRAJGANJ'),
(443, 'CHAUHALI', 'SIRAJGANJ'),
(444, 'KAMARKHANDA', 'SIRAJGANJ'),
(445, 'KAZIPUR', 'SIRAJGANJ'),
(446, 'ROYGANJ', 'SIRAJGANJ'),
(447, 'SHAHJADPUR', 'SIRAJGANJ'),
(448, 'SIRAJGANJ SADAR', 'SIRAJGANJ'),
(449, 'TARASH', 'SIRAJGANJ'),
(450, 'ULLAH PARA', 'SIRAJGANJ'),
(451, 'BIRAMPUR', 'DINAJPUR'),
(452, 'BIRGANJ', 'DINAJPUR'),
(453, 'BIRAL', 'DINAJPUR'),
(454, 'BOCHAGANJ', 'DINAJPUR'),
(455, 'CHIRIRBANDAR', 'DINAJPUR'),
(456, 'FULBARI', 'DINAJPUR'),
(457, 'GHORAGHAT', 'DINAJPUR'),
(458, 'HAKIMPUR', 'DINAJPUR'),
(459, 'KAHAROLE', 'DINAJPUR'),
(460, 'KHANSAMA', 'DINAJPUR'),
(461, 'DINAJPUR SADAR', 'DINAJPUR'),
(462, 'NAWABGANJ', 'DINAJPUR'),
(463, 'PARBATIPUR', 'DINAJPUR'),
(464, 'FULCHHARI', 'GAIBANDHA'),
(465, 'GAIBANDHA SADAR', 'GAIBANDHA'),
(466, 'GOBINDAGANJ', 'GAIBANDHA'),
(467, 'PALASHBARI', 'GAIBANDHA'),
(468, 'SADULLAPUR', 'GAIBANDHA'),
(469, 'SAGHATA', 'GAIBANDHA'),
(470, 'SUNDARGANJ', 'GAIBANDHA'),
(471, 'BHURUNGAMARI', 'KURIGRAM'),
(472, 'CHAR RAJIBPUR', 'KURIGRAM'),
(473, 'CHILMARI', 'KURIGRAM'),
(474, 'PHULBARI', 'KURIGRAM'),
(475, 'KURIGRAM SADAR', 'KURIGRAM'),
(476, 'NAGESHWARI', 'KURIGRAM'),
(477, 'RAJARHAT', 'KURIGRAM'),
(478, 'RAUMARI', 'KURIGRAM'),
(479, 'ULIPUR', 'KURIGRAM'),
(480, 'ADITMARI', 'LALMONIRHAT'),
(481, 'HATIBANDHA', 'LALMONIRHAT'),
(482, 'KALIGANJ', 'LALMONIRHAT'),
(483, 'LALMONIRHAT SADAR', 'LALMONIRHAT'),
(484, 'PATGRAM', 'LALMONIRHAT'),
(485, 'DIMLA UPAZILA', 'NILPHAMARI ZILA'),
(486, 'DOMAR UPAZILA', 'NILPHAMARI ZILA'),
(487, 'JALDHAKA UPAZILA', 'NILPHAMARI ZILA'),
(488, 'KISHOREGANJ UPAZILA', 'NILPHAMARI ZILA'),
(489, 'NILPHAMARI SADAR UPAZ', 'NILPHAMARI ZILA'),
(490, 'SAIDPUR UPAZILA', 'NILPHAMARI ZILA'),
(491, 'ATWARI', 'PANCHAGARH'),
(492, 'BODA', 'PANCHAGARH'),
(493, 'DEBIGANJ', 'PANCHAGARH'),
(494, 'PANCHAGARH SADAR', 'PANCHAGARH'),
(495, 'TENTULIA', 'PANCHAGARH'),
(496, 'BADARGANJ', 'RANGPUR'),
(497, 'GANGACHARA', 'RANGPUR'),
(498, 'KAUNIA', 'RANGPUR'),
(499, 'RANGPUR SADAR', 'RANGPUR'),
(500, 'MITHA PUKUR', 'RANGPUR'),
(501, 'PIRGACHHA', 'RANGPUR'),
(502, 'PIRGANJ', 'RANGPUR'),
(503, 'TARAGANJ', 'RANGPUR'),
(504, 'BALIADANGI', 'THAKURGAON'),
(505, 'HARIPUR', 'THAKURGAON'),
(506, 'PIRGANJ', 'THAKURGAON'),
(507, 'RANISANKAIL', 'THAKURGAON'),
(508, 'THAKURGAON SADAR', 'THAKURGAON'),
(509, 'AJMIRIGANJ', 'HABIGANJ'),
(510, 'BAHUBAL', 'HABIGANJ'),
(511, 'BANIACHONG', 'HABIGANJ'),
(512, 'CHUNARUGHAT', 'HABIGANJ'),
(513, 'HABIGANJ SADAR', 'HABIGANJ'),
(514, 'LAKHAI', 'HABIGANJ'),
(515, 'MADHABPUR', 'HABIGANJ'),
(516, 'NABIGANJ', 'HABIGANJ'),
(517, 'BARLEKHA', 'MAULVIBAZAR'),
(518, 'JURI', 'MAULVIBAZAR'),
(519, 'KAMALGANJ', 'MAULVIBAZAR'),
(520, 'KULAURA', 'MAULVIBAZAR'),
(521, 'MAULVIBAZAR SADAR', 'MAULVIBAZAR'),
(522, 'RAJNAGAR', 'MAULVIBAZAR'),
(523, 'SREEMANGAL', 'MAULVIBAZAR'),
(524, 'BISHWAMBARPUR', 'SUNAMGANJ'),
(525, 'CHHATAK', 'SUNAMGANJ'),
(526, 'DAKSHIN SUNAMGANJ', 'SUNAMGANJ'),
(527, 'DERAI', 'SUNAMGANJ'),
(528, 'DHARAMPASHA', 'SUNAMGANJ'),
(529, 'DOWARABAZAR', 'SUNAMGANJ'),
(530, 'JAGANNATHPUR', 'SUNAMGANJ'),
(531, 'JAMALGANJ', 'SUNAMGANJ'),
(532, 'SULLA', 'SUNAMGANJ'),
(533, 'SUNAMGANJ SADAR', 'SUNAMGANJ'),
(534, 'TAHIRPUR', 'SUNAMGANJ'),
(535, 'BALAGANJ', 'SYLHET'),
(536, 'BEANI BAZAR', 'SYLHET'),
(537, 'BISHWANATH', 'SYLHET'),
(538, 'COMPANIGANJ', 'SYLHET'),
(539, 'DAKSHIN SURMA', 'SYLHET'),
(540, 'FENCHUGANJ', 'SYLHET'),
(541, 'GOLAPGANJ', 'SYLHET'),
(542, 'GOWAINGHAT', 'SYLHET'),
(543, 'JAINTIAPUR', 'SYLHET'),
(544, 'KANAIGHAT', 'SYLHET'),
(545, 'SYLHET SADAR', 'SYLHET'),
(546, 'ZAKIGANJ', 'SYLHET');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_entry`
--
ALTER TABLE `data_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dept_sessions`
--
ALTER TABLE `dept_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_boards`
--
ALTER TABLE `education_boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `justresult`
--
ALTER TABLE `justresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf_notices`
--
ALTER TABLE `pdf_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_notice`
--
ALTER TABLE `single_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upzilah`
--
ALTER TABLE `upzilah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `data_entry`
--
ALTER TABLE `data_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dept_sessions`
--
ALTER TABLE `dept_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `education_boards`
--
ALTER TABLE `education_boards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `justresult`
--
ALTER TABLE `justresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pdf_notices`
--
ALTER TABLE `pdf_notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `single_notice`
--
ALTER TABLE `single_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `upzilah`
--
ALTER TABLE `upzilah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=547;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
