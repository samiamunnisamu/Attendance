-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 11:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('admin@gmail.com', ''),
('admin@gmail.com', ''),
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `atthistory`
--

CREATE TABLE `atthistory` (
  `id` int(11) NOT NULL,
  `att` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atthistory`
--

INSERT INTO `atthistory` (`id`, `att`, `date`, `section`) VALUES
(1, 'present', '2021-01-20', '10-A'),
(2, 'present', '2021-01-20', '10-A'),
(3, 'present', '2021-01-20', '10-A'),
(1, 'absent', '2021-01-22', '10-A'),
(2, 'absent', '2021-01-22', '10-A'),
(3, 'absent', '2021-01-22', '10-A');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_name` varchar(100) NOT NULL,
  `student_roll` int(12) NOT NULL,
  `student_section` varchar(50) NOT NULL,
  `present` int(30) NOT NULL,
  `absent` int(30) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_name`, `student_roll`, `student_section`, `present`, `absent`, `Date`) VALUES
('pappu', 1, '10-A', 8, 1, '2021-01-19 17:54:22'),
('Asif', 2, '10-A', 6, 3, '2021-01-19 17:54:23'),
('Fateha', 2, '10-B', 6, 1, '2021-01-19 17:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(10) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `teacher_password` varchar(12) NOT NULL,
  `teacher_section` varchar(20) NOT NULL,
  `teacher_course` varchar(100) NOT NULL,
  `teacher_email` varchar(100) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_password`, `teacher_section`, `teacher_course`, `teacher_email`, `joining_date`) VALUES
(8, 'Reshna ali', 'ra555', '10-B', 'Dance', 'rits22@gmail.com', '2021-01-17 13:47:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
