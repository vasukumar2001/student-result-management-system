-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 10:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'vasu', '123456'),
(3, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL,
  `mark` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `rollno`, `courseid`, `subjectid`, `mark`) VALUES
(29, 1, 1, 23, 86),
(30, 34, 1, 23, 79),
(31, 36, 1, 23, 76),
(32, 1, 1, 27, 78),
(33, 34, 1, 27, 82),
(34, 36, 1, 27, 85),
(35, 1, 1, 28, 75),
(36, 34, 1, 28, 79),
(37, 36, 1, 28, 78),
(38, 1, 1, 29, 88),
(39, 34, 1, 29, 75),
(40, 36, 1, 29, 89),
(41, 7, 2, 41, 66),
(42, 7, 2, 42, 78),
(43, 7, 2, 43, 86),
(44, 7, 2, 44, 58),
(45, 8, 3, 37, 77),
(46, 8, 3, 38, 59),
(47, 8, 3, 39, 78),
(48, 8, 3, 40, 87);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobilenumber` int(255) NOT NULL,
  `address` text NOT NULL,
  `course` int(150) NOT NULL,
  `password` text NOT NULL,
  `image_path` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `birthdate`, `email`, `mobilenumber`, `address`, `course`, `password`, `image_path`) VALUES
(1, 'vasu', 'pravinbhai', 'fadadu', 'male', '2001-05-15', 'vasufadadu123@gmail.com', 1234567824, 'junagadh', 1, 'vasu@123', 'image/logo.jpg'),
(7, 'raj', 'hareshbhai', 'javiya', 'male', '2001-12-12', 'rajjaviya123@gmail.com', 2147483647, 'junagadh.', 2, '123456', 'image/Screenshot_20200221-124401_2.png'),
(8, 'vivek', 'rajubhai', 'joshi', 'male', '2020-08-06', 'vivekjoshi123@gmail.com', 1234567898, 'junagadh', 3, '123456', 'image/download.png'),
(34, 'jay', 'sanjaybhai', 'doshi', 'male', '2000-12-22', 'jaydoshi123@gmail.com', 1234567895, 'surat.', 1, '123456', 'image/download.png'),
(36, 'yes', 'sanjaybhai', 'fadadu', 'male', '2000-12-04', 'yesjoshi123@gmail.com', 1234567895, 'surat.', 1, '123456', 'image/download.png'),
(47, 'aryan', 'hareshbhai', 'vachhani', 'male', '2001-07-05', 'aryanvachhani123@gmail.com', 1234567891, 'manavadar.', 3, '123456', 'image/download.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `id` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `coursecode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`id`, `course`, `coursecode`) VALUES
(1, 'computer eng.', 'ce101'),
(2, 'civil eng.', 'civil101'),
(3, 'mechanical eng.', 'me101');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`id`, `subject`, `subjectcode`, `courseid`) VALUES
(23, 'dbms', 'ce10db', 1),
(27, 'cn', 'ce10cn', 1),
(28, 'java', 'ce10jv', 1),
(29, 'c++', 'ce10c', 1),
(37, 'maths', 'me13mt', 3),
(38, 'Materials engineering', 'me13me', 3),
(39, 'thermodynamics', 'me13td', 3),
(40, 'structural analysis', 'me13sa', 3),
(41, 'Building Planning and Drawing', 'c34bd', 2),
(42, 'Surveying', 'c34sy', 2),
(43, 'structural analysis', 'c34sa', 2),
(44, 'maths', 'c34mt', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
