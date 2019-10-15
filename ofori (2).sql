-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 07:00 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ofori`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ansid` int(15) NOT NULL,
  `qno` int(15) NOT NULL,
  `choice1` varchar(20) NOT NULL,
  `m1` int(15) NOT NULL,
  `choice2` varchar(20) NOT NULL,
  `m2` int(15) NOT NULL,
  `choice3` varchar(20) NOT NULL,
  `m3` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ansid`, `qno`, `choice1`, `m1`, `choice2`, `m2`, `choice3`, `m3`) VALUES
(1, 0, '', 1, '', 2, 'c', 3),
(2, 2, '', 1, '', 2, 'c', 3),
(3, 3, 'm', 32, 'b', 2, 'c', 3),
(4, 4, 'sd', 32, 'b', 2, 'c', 3);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `logid` int(15) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `psw`, `username`, `type`) VALUES
(1, 'admin1', 'admin', 'admin'),
(16, 'qwe', 'asdfgh', 'teacher'),
(17, 'aishu', 'aishu', 'teacher'),
(18, 'qwe', 'aaa', 'teacher'),
(19, 'qwe', 'mj', 'psychiatrist'),
(20, 'qwe', 'second', 'psychiatrist'),
(26, 'qwe', 'klm', 'teacher'),
(27, 'qwe', 'ak', 'teacher'),
(28, 'qwe', 'dani', 'psychiatrist'),
(29, 'qwe', 'kljio', 'psychiatrist'),
(30, 'qwer', 'hari', 'psychiatrist'),
(32, 'yu', 'YU', 'psychiatrist'),
(50, 'qwe', 'admil', 'student'),
(51, 'qw', 'op', 'psychiatrist'),
(52, 'yh', 'hhh', 'psychiatrist');

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrist`
--

CREATE TABLE `psychiatrist` (
  `logid` int(15) NOT NULL,
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `pph` bigint(20) NOT NULL,
  `pemail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psychiatrist`
--

INSERT INTO `psychiatrist` (`logid`, `pid`, `pname`, `pph`, `pemail`) VALUES
(33, 3, 'hi', 9876543210, 'ytkiy@gmail.com'),
(51, 4, 'hari', 9876543210, 'ytkiy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `qstn`
--

CREATE TABLE `qstn` (
  `qno` int(15) NOT NULL,
  `qstn` text NOT NULL,
  `testype` varchar(20) NOT NULL,
  `level` int(15) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qstn`
--

INSERT INTO `qstn` (`qno`, `qstn`, `testype`, `level`, `usertype`) VALUES
(1, 'depression', 'depression', 0, 'teacher'),
(2, 'anxiexy', 'anxiety', 0, 'teacher'),
(3, 'depressed', 'depression', 0, 'teacher'),
(4, 'dafed', 'bipolar', 1, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rsltid` int(10) NOT NULL,
  `st_id` int(10) NOT NULL,
  `sscore` int(15) NOT NULL,
  `sdate` date NOT NULL,
  `tid` int(15) NOT NULL,
  `tscore` int(15) NOT NULL,
  `tdate` date NOT NULL,
  `tcomm` text NOT NULL,
  `pid` varchar(20) NOT NULL,
  `pcomm` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `level` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `logid` int(15) NOT NULL,
  `st_id` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `sgender` varchar(20) NOT NULL,
  `scourse` varchar(20) NOT NULL,
  `ssem` varchar(20) NOT NULL,
  `sbatch` int(15) NOT NULL,
  `sdob` date NOT NULL,
  `sph` bigint(15) NOT NULL,
  `semail` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`logid`, `st_id`, `sname`, `sgender`, `scourse`, `ssem`, `sbatch`, `sdob`, `sph`, `semail`) VALUES
(34, 3, 'aishu', 'f', 'MCA', '6', 2017, '2019-10-01', 2147483647, 'hai@gmail.com'),
(50, 19, 'aishu', 'm', 'MCA', '6', 2017, '2019-10-24', 934567890, 'hai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `logid` varchar(20) NOT NULL,
  `tid` int(15) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `tcourse` varchar(20) NOT NULL,
  `tsem` varchar(20) NOT NULL,
  `tgender` varchar(20) NOT NULL,
  `tph` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`logid`, `tid`, `tname`, `tcourse`, `tsem`, `tgender`, `tph`) VALUES
('17', 2, 'aishu', '', 'mca', 'm', 2147483647),
('18', 3, 'aishu', 'mca', '6', 'm', 2147483647),
('26', 6, 'muf', 'mca', '6', 'm', 2147483647),
('27', 7, 'muf', 'mca', '6', 'f', 9876543210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`ansid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`logid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `psychiatrist`
--
ALTER TABLE `psychiatrist`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `qstn`
--
ALTER TABLE `qstn`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `ansid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `logid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `psychiatrist`
--
ALTER TABLE `psychiatrist`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qstn`
--
ALTER TABLE `qstn`
  MODIFY `qno` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
