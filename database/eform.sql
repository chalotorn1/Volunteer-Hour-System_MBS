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
-- Database: `eform`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp2007`
--

CREATE TABLE `emp2007` (
  `empID` int(11) NOT NULL,
  `id` int(4) NOT NULL DEFAULT 0,
  `name` varchar(225) NOT NULL DEFAULT '',
  `title` varchar(50) NOT NULL DEFAULT '',
  `title2` varchar(50) NOT NULL DEFAULT '',
  `title2_eng` varchar(50) NOT NULL DEFAULT '',
  `edu_top` text NOT NULL,
  `edu_continue` text DEFAULT NULL,
  `p_edu` varchar(225) NOT NULL DEFAULT '',
  `p_adm` varchar(225) NOT NULL DEFAULT '',
  `salary` int(7) NOT NULL DEFAULT 0,
  `Tlevel` varchar(10) NOT NULL DEFAULT '',
  `number` varchar(10) NOT NULL DEFAULT '',
  `birthday` varchar(100) NOT NULL DEFAULT '',
  `insignia` text NOT NULL,
  `address` text NOT NULL,
  `edu` text NOT NULL,
  `p_work` text NOT NULL,
  `subject` text NOT NULL,
  `tel` varchar(50) NOT NULL DEFAULT '',
  `e_mail` varchar(255) NOT NULL DEFAULT '',
  `web` varchar(255) NOT NULL DEFAULT '',
  `type_emp` char(2) NOT NULL DEFAULT '',
  `major2` char(1) NOT NULL DEFAULT '',
  `major3` char(1) NOT NULL DEFAULT '',
  `img` varchar(50) NOT NULL DEFAULT '',
  `passname` varchar(20) NOT NULL DEFAULT '',
  `password1` varchar(20) NOT NULL DEFAULT '',
  `spacail` int(1) NOT NULL DEFAULT 0,
  `name_eng` varchar(50) NOT NULL DEFAULT '',
  `start_date` varchar(255) NOT NULL DEFAULT '',
  `current_work` varchar(255) NOT NULL DEFAULT '',
  `current_position` varchar(255) NOT NULL DEFAULT '',
  `room` text NOT NULL,
  `commity` text NOT NULL,
  `Tedu` text NOT NULL,
  `Tbook` text NOT NULL,
  `Tsheet` text NOT NULL,
  `Treseach` text NOT NULL,
  `Tcenter` text NOT NULL,
  `Tarticle` text NOT NULL,
  `Tproject` text NOT NULL,
  `Ttraining` text NOT NULL,
  `strType` varchar(50) NOT NULL DEFAULT '',
  `tqf` varchar(10) NOT NULL,
  `email_acc_login` varchar(50) NOT NULL COMMENT 'อีเมล์คณะ สำหรับ auto login',
  `dep_id` int(11) NOT NULL COMMENT 'รหัสแผนก/หน่วยงานที่สังกัด',
  `pusadu_admin` int(11) NOT NULL COMMENT '1=ผู้อนุมัติ,2=ผู้จ่าย ผู้ลงบัญชี'
) ENGINE=MyISAM DEFAULT CHARSET=tis620;

--
-- Dumping data for table `emp2007`
--

INSERT INTO `emp2007` (`empID`, `id`, `name`, `title`, `title2`, `title2_eng`, `edu_top`, `edu_continue`, `p_edu`, `p_adm`, `salary`, `Tlevel`, `number`, `birthday`, `insignia`, `address`, `edu`, `p_work`, `subject`, `tel`, `e_mail`, `web`, `type_emp`, `major2`, `major3`, `img`, `passname`, `password1`, `spacail`, `name_eng`, `start_date`, `current_work`, `current_position`, `room`, `commity`, `Tedu`, `Tbook`, `Tsheet`, `Treseach`, `Tcenter`, `Tarticle`, `Tproject`, `Ttraining`, `strType`, `tqf`, `email_acc_login`, `dep_id`, `pusadu_admin`) VALUES
(77, 1, 'เอกพล กลลวง', '', 'นาย', 'MR.', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '7', '', '', '', 'akkapon', '4321', 0, '', '', '- ดูแลห้องถ่ายเอกสาร', 'เจ้าหน้าที่โสตทัศนูปกรณ์', '', '', '', '', '', '', '', '', '', '', '', '', 'akkapon.k@acc.msu.ac.th', 5, 0),
(78, 0, 'มะนะ ขยันเรียน', '', 'นาย', 'MR.', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '5', '', '', '', 'mana', '1234', 0, '', '', '- ดูแลห้องถ่ายเอกสาร', 'เจ้าหน้าที่โสตทัศนูปกรณ์', '', '', '', '', '', '', '', '', '', '', '', '', 'mana.k@acc.msu.ac.th', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_ID` varchar(11) NOT NULL,
  `stitle` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `numfhon` varchar(10) DEFAULT NULL,
  `sclassroom` varchar(50) NOT NULL,
  `smajor` varchar(11) NOT NULL,
  `stdyingAT` varchar(50) NOT NULL,
  `studentType` int(11) NOT NULL COMMENT '1 คือ ระบบปกติ, 2 คือ ระบบต่อเนื่อง 2 ปี ระบบปกติ',
  `degree` varchar(50) NOT NULL,
  `education` int(11) NOT NULL COMMENT '1 คือ  ระบบปกติ หรือ ระบบในระบบราชการ  ',
  `suser` varchar(50) NOT NULL,
  `spwd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_ID`, `stitle`, `sname`, `numfhon`, `sclassroom`, `smajor`, `stdyingAT`, `studentType`, `degree`, `education`, `suser`, `spwd`) VALUES
('1', 'นาย', 'ชโลธร พลอยสุภา', '0807683774', 'BC602', '1', 'วิทยาเขตมหาสารคาม', 1, 'ปริญญาตรี', 1, '60010912681', '1409901817671'),
('2', 'นาย', 'อิทธิพล มีหวัง', '55555', 'BC602', '1', 'วิทยาเขตมหาสารคาม', 1, 'ปริญญาตรี', 1, '60010912656', '60010912656'),
('3', 'นาย', 'วิศรุต ศรีศักดิ์นอก', '66666', 'BC602', '1', 'วิทยาเขตมหาสารคาม', 1, 'ปริญญาตรี', 1, '60010912636', '60010912636'),
('4', 'นางสาว', 'ภัคจิรา ภูระสิม', '0807683774', 'BC602', '1', 'วิทยาเขตมหาสารคาม', 1, 'ปริญญาตรี', 1, '60010912648', '60010912648');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp2007`
--
ALTER TABLE `emp2007`
  ADD PRIMARY KEY (`empID`) USING BTREE;

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp2007`
--
ALTER TABLE `emp2007`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
