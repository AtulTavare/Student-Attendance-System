-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2023 at 09:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user_name` varchar(100) NOT NULL,
  `admin_password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_user_name`, `admin_password`) VALUES
(1, 'admin', '$2y$10$D74Zy1qMkATvmGRoVeq7hed4ajWof2aqDGnEaD3yPHABA.p.e7f4u');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attendance_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `attendance_status` enum('Present','Absent') NOT NULL,
  `attendance_date` date NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `grade_id` int(11) NOT NULL,
  `grade_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`grade_id`, `grade_name`) VALUES
(1, 'Python'),
(2, 'Java'),
(3, 'C++'),
(4, 'VB.Net'),
(5, 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(150) NOT NULL,
  `student_roll_number` int(11) NOT NULL,
  `student_dob` date NOT NULL,
  `student_grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_roll_number`, `student_dob`, `student_grade_id`) VALUES
(1, 'Naresh Chavan', 100, '1999-01-01', 5),
(2, 'Aditya Pagare', 101, '2000-02-01', 5),
(3, 'Akshay Jadhav', 102, '2000-03-01', 5),
(4, 'Ajay Jadhav', 103, '1998-04-03', 3),
(5, 'Raj Gajra', 104, '1999-05-11', 3),
(6, 'Pranav Patil', 105, '1998-07-15', 3),
(7, 'Swapnil Rathod`', 106, '1999-07-07', 2),
(8, 'Utkarsh Khoje', 107, '2000-02-08', 2),
(9, 'Swapnil Shane', 108, '2001-01-31', 2),
(10, 'Sandip Shaha', 109, '1999-07-07', 1),
(11, 'Pavan Vakude', 110, '2000-06-06', 1),
(12, 'Abhay Bangar', 111, '2000-06-21', 1),
(14, 'Amol Jadhav', 112, '2000-06-07', 4),
(15, 'Rohit Ragade', 113, '1999-11-18', 4),
(16, 'Ajit Rathod', 114, '1999-07-26', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(150) NOT NULL,
  `teacher_address` text NOT NULL,
  `teacher_emailid` varchar(100) NOT NULL,
  `teacher_password` varchar(100) NOT NULL,
  `teacher_qualification` varchar(100) NOT NULL,
  `teacher_doj` date NOT NULL,
  `teacher_image` varchar(100) NOT NULL,
  `teacher_grade_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teacher_id`, `teacher_name`, `teacher_address`, `teacher_emailid`, `teacher_password`, `teacher_qualification`, `teacher_doj`, `teacher_image`, `teacher_grade_id`) VALUES
(1, 'Amit Tiwari', 'Kranti chowk aurangabad ', 'amit@gmail.com', '$2y$10$NjPhp7.gAkIsowaov4Orm.D.5qUBlCKrMD5F1YA38uTOzbMTDCROu', 'MCA', '2023-02-01', '63ea90a3ca74d.jpg', 5),
(2, 'Rajesh Rathod', 'Usmanpura Aurangabad', 'rajesh@gmail.com', '$2y$10$CtytmNTyMcNM48giV1eY0.rv5Oi7Ua9Pa.ydQiP5WH1eIG07mvQQa', 'MSC', '2023-02-01', '63ea90fd4c68f.jpg', 3),
(3, 'Nandini Chavan', 'Kranti chowk Aurangabad ', 'nandini@gmail.com', '$2y$10$Bf6D1XsOIhP3EnWj4W/nNuZtCCyoHi5vbFbSvASO8qNc/OFLGOc9W', 'MCA', '2023-02-01', '63ea914a3eaab.jpg', 2),
(4, 'Prashant Kulkarni', 'Deolai', 'prashant@gmail.com', '$2y$10$eW59UpcHL7s5OQUrT2eR5O/3yxia3r3eGNJmnazuYOVOsOwvR7qdW', 'MCA', '2023-02-01', '63ea91a6833f4.jpg', 1),
(5, 'Priya', 'Beed bypass Aurangabad', 'priya@gmail.com', '$2y$10$4pbMNAD13YwrjqJQiaOtvemMSW.W19z1UH0yxVeyeyAFFqi8uZVHW', 'MSC', '2023-02-01', '63ea91f3952e8.jpg', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
