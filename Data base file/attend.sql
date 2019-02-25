-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 11:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `status`) VALUES
(1, '123', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg` varchar(11) NOT NULL,
  `branch` varchar(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `name`, `reg`, `branch`, `status`, `date`) VALUES
(24, 'Harsh Sharma', '17A91A0553', 'cse', 'Absent', '2019-02-16'),
(25, 'Mukesh', '23rwrq34r', 'cse', 'Present', '2019-02-16'),
(26, 'Binay Kr', '45t34t4eg', 'cse', 'Present', '2019-02-16'),
(27, 'jhdfuyr', 'djfkb5', 'cse', 'Present', '2019-02-16'),
(28, 'Aashish', '17P31A0565', 'cse', 'Present', '2019-02-16'),
(29, 'Sunil', '17P31A0594', 'it', 'Present', '2019-02-16'),
(30, 'Mukesh', 'fge555', 'it', 'Present', '2019-02-16'),
(31, 'fghsfdthsrt', 'dfgh6y5', 'it', 'Absent', '2019-02-16'),
(32, 'fbnhgnty', 'fgyt6rt', 'it', 'Absent', '2019-02-16'),
(33, 'Kamal', '17P31A0586', 'ece', 'Present', '2019-02-16'),
(34, 'Sunil kr', 'dfghnd65', 'ece', 'Absent', '2019-02-16'),
(35, 'dfghty', 'ftu65', 'ece', 'Absent', '2019-02-16'),
(36, 'fghyhth', 'fdgh56', 'ece', 'Absent', '2019-02-16'),
(38, 'Harsh Sharma', '17A91A0553', 'cse', 'Absent', '2019-02-17'),
(39, 'Mukesh', '23rwrq34r', 'cse', 'Absent', '2019-02-17'),
(40, 'Binay Kr', '45t34t4eg', 'cse', 'Present', '2019-02-17'),
(41, 'jhdfuyr', 'djfkb5', 'cse', 'Present', '2019-02-17'),
(42, 'Aashish', '17P31A0565', 'cse', 'Present', '2019-02-17'),
(43, 'Sunil', '17P31A0594', 'it', 'Present', '2019-02-17'),
(44, 'Mukesh', 'fge555', 'it', 'Absent', '2019-02-17'),
(45, 'fghsfdthsrt', 'dfgh6y5', 'it', 'Absent', '2019-02-17'),
(46, 'fbnhgnty', 'fgyt6rt', 'it', 'Present', '2019-02-17'),
(47, 'Kamal', '17P31A0586', 'ece', 'Present', '2019-02-17'),
(48, 'Sunil kr', 'dfghnd65', 'ece', 'Present', '2019-02-17'),
(49, 'dfghty', 'ftu65', 'ece', 'Absent', '2019-02-17'),
(50, 'fghyhth', 'fdgh56', 'ece', 'Present', '2019-02-17'),
(51, 'Harsh Sharma', '17A91A0553', 'cse', 'Present', '2019-02-18'),
(52, 'Mukesh', '23rwrq34r', 'cse', 'Present', '2019-02-18'),
(53, 'Binay Kr', '45t34t4eg', 'cse', 'Absent', '2019-02-18'),
(54, 'jhdfuyr', 'djfkb5', 'cse', 'Absent', '2019-02-18'),
(55, 'Aashish', '17P31A0565', 'cse', 'Present', '2019-02-18'),
(56, 'Sunil', '17P31A0594', 'it', 'Absent', '2019-02-18'),
(57, 'Mukesh', 'fge555', 'it', 'Absent', '2019-02-18'),
(59, 'fghsfdthsrt', 'dfgh6y5', 'it', 'Present', '2019-02-18'),
(60, 'fbnhgnty', 'fgyt6rt', 'it', 'Absent', '2019-02-18'),
(61, 'Kamal', '17P31A0586', 'ece', 'Absent', '2019-02-18'),
(62, 'Sunil kr', 'dfghnd65', 'ece', 'Present', '2019-02-18'),
(63, 'dfghty', 'ftu65', 'ece', 'Absent', '2019-02-18'),
(64, 'fghyhth', 'fdgh56', 'ece', 'Present', '2019-02-18'),
(65, 'Harsh Sharma', '17A91A0553', 'cse', 'Present', '2019-02-20'),
(66, 'Mukesh', '23rwrq34r', 'cse', 'Absent', '2019-02-20'),
(67, 'Binay Kr', '45t34t4eg', 'cse', 'Absent', '2019-02-20'),
(68, 'jhdfuyr', 'djfkb5', 'cse', 'Absent', '2019-02-20'),
(69, 'Aashish', '17P31A0565', 'cse', 'Absent', '2019-02-20'),
(70, 'Ajit', '17MH1A0502', 'cse', 'Absent', '2019-02-20'),
(71, 'A v s s Anandh vamse', '17A91A0565', 'cse', 'Present', '2019-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg` varchar(11) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `test1` int(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`ID`, `name`, `reg`, `branch`, `test1`, `status`) VALUES
(1, 'Harsh Sharma', '', 'CSE', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `reg` varchar(11) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `phno` varchar(12) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `name`, `reg`, `branch`, `phno`, `status`) VALUES
(16, 'Harsh Sharma', '17A91A0553', 'cse', '2147483647', 1),
(17, 'Sunil', '17P31A0594', 'it', '3453634', 1),
(18, 'Kamal', '17P31A0586', 'ece', '2147483647', 1),
(19, 'Mukesh', '23rwrq34r', 'cse', '3245234', 1),
(20, 'Binay Kr', '45t34t4eg', 'cse', '56735674', 1),
(21, 'jhdfuyr', 'djfkb5', 'cse', '6754746', 1),
(22, 'Mukesh', 'fge555', 'it', '563745543', 1),
(23, 'fghsfdthsrt', 'dfgh6y5', 'it', '45674565', 1),
(24, 'fbnhgnty', 'fgyt6rt', 'it', '45673565', 1),
(25, 'Sunil kr', 'dfghnd65', 'ece', '56754654', 1),
(26, 'dfghty', 'ftu65', 'ece', '5674564', 1),
(27, 'fghyhth', 'fdgh56', 'ece', '546746784', 1),
(28, 'Aashish', '17P31A0565', 'cse', '9852508432', 1),
(29, 'Ajit', '17MH1A0502', 'cse', '9097943200', 1),
(30, 'A v s s Anandh vamse', '17A91A0565', 'cse', '8639428585', 1),
(31, 'Anupam', '17fudbi', 'cse', '734962341', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
