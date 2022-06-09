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
-- Database: `person`
--

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`m_id`, `m_name`) VALUES
(1, '-'),
(2, 'สาขาวิชาการตลาด'),
(3, 'สาขาวิชาการจัดการ'),
(4, 'สาขาวิชาคอมพิวเตอร์ธุรกิจ'),
(5, 'สาขาการเงิน'),
(6, 'สาขาวิชาเศรษฐศาสตร์ธุรกิจ'),
(7, 'สาขาวิชาธุรกิจระหว่างประเทศ'),
(8, 'สาขาวิชาเทคโนโลยีสารสนเทศธุรกิจ'),
(9, 'สาขาการบัญชี');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `y_id` int(11) NOT NULL,
  `y_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`y_id`, `y_name`) VALUES
(1, '-'),
(2, 'ชั้นปีที่ 1'),
(3, 'ชั้นปีที่ 2'),
(4, 'ชั้นปีที่ 3'),
(5, 'ชั้นปีที่ 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`y_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `y_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
