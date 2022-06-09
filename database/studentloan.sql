-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 10:47 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentloan`
--

CREATE TABLE `studentloan` (
  `std_id_auto` int(11) NOT NULL,
  `stu_id` varchar(15) NOT NULL COMMENT 'รหัสนิสิต',
  `stu_n` varchar(80) NOT NULL COMMENT 'ชื่อ - นามสกุล',
  `branch` varchar(80) NOT NULL COMMENT 'สาขา',
  `stu_year` varchar(80) NOT NULL COMMENT 'ชั้นปี',
  `stu_board` varchar(80) NOT NULL COMMENT 'คณะ',
  `std_name` varchar(100) NOT NULL COMMENT 'ชื่อกิจกรรมจิตอาสา',
  `std_po` varchar(100) NOT NULL COMMENT 'สถานที่ทำกิจกรรม',
  `std_lo` varchar(80) NOT NULL COMMENT 'ลักษณะของกิจกรรม',
  `s_date` date NOT NULL COMMENT 'วัน/เดือน/ปี',
  `t_ime` time NOT NULL COMMENT 'เวลาที่ทำกิจกรรม',
  `p_ao` time NOT NULL COMMENT 'ถึง',
  `p_io` double NOT NULL COMMENT 'ภาคเรียนที่',
  `p_lo` double NOT NULL COMMENT 'ปีการศึกษา',
  `p_do` text NOT NULL COMMENT 'จำนวนชั่วโมงรวม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentloan`
--

INSERT INTO `studentloan` (`std_id_auto`, `stu_id`, `stu_n`, `branch`, `stu_year`, `stu_board`, `std_name`, `std_po`, `std_lo`, `s_date`, `t_ime`, `p_ao`, `p_io`, `p_lo`, `p_do`) VALUES
(88, '60010912656', 'นายอิทธิพล มีหวัง', 'สาขาวิชาการจัดการ', 'ชั้นปีที่ 2', 'คณะการบัญชีและการจัดการ', '21', '12', '213', '2021-05-26', '15:33:00', '17:31:00', 1, 2564, '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentloan`
--
ALTER TABLE `studentloan`
  ADD PRIMARY KEY (`std_id_auto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentloan`
--
ALTER TABLE `studentloan`
  MODIFY `std_id_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
