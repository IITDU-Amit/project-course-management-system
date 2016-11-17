-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 04:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(8) NOT NULL,
  `answer_body` varchar(10000) NOT NULL,
  `name` varchar(30) NOT NULL,
  `question_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_body`, `name`, `question_id`) VALUES
(3, '2 types:\na. BlackBox Testing\nb. WhiteBox Testing', 'Alim Ul Gias', 5),
(4, 'Unit testing is a software development process in which the smallest testable parts of an application, called units, are individually and independently scrutinized for proper operation', 'Md. Mehedi Hasan', 6),
(5, 'Bugzilla is a software testing tool.', 'Tanvir Ahasan Anik', 7),
(6, 'ami baal tao janina ', 'Fazlul Haque', 8);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(5) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_description` varchar(1000) NOT NULL,
  `user_id` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `course_description`, `user_id`, `start_date`, `end_date`) VALUES
(4, 'Software Testing', 'SE-605', 'N/A', 7, '2016-11-08', '2016-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `marks_id` int(10) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `student_id` int(5) NOT NULL,
  `distribution_id` int(5) NOT NULL,
  `mark` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marks_distribution`
--

CREATE TABLE `marks_distribution` (
  `distribution_id` int(5) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `distribution_criteria` varchar(20) NOT NULL,
  `distribution_weight` int(4) NOT NULL,
  `viewable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(5) NOT NULL,
  `question_body` varchar(10000) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_body`, `course_code`, `name`) VALUES
(5, 'How many types of Software Testing are commonly used?', 'SE-605', 'Md. Mehedi Hasan'),
(6, 'What is Unit Testing?', 'SE-605', 'Tanvir Ahasan Anik'),
(7, 'What is Bugzilla?', 'SE-605', 'Md. Mehedi Hasan'),
(8, 'What is Ethis?', 'GE-604', 'Md. Mehedi Hasan');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'iit12345',
  `contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `email`, `password`, `contact`) VALUES
(2, 'Md. Mehedi Hasan', 'bsse0607@iit.du.ac.bd', 'iit12345', NULL),
(3, 'Tanvir Ahasan Anik', 'bsse0629@iit.du.ac.bd', 'iit12345', NULL),
(4, 'Farzana Muna', 'bsse0627@iit.du.ac.bd', 'iit12345', NULL),
(6, 'Nur Mohammad', 'bsse0624@iit.du.ac.bd', 'iit12345', NULL),
(8, 'Shubho Roy', 'bsse0619@iit.du.ac.bd', 'iit12345', NULL),
(11, ' Rubama Yeasmin', 'bsse0632@iit.du.ac.bd', 'iit12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_allocation`
--

CREATE TABLE `student_allocation` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `student_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_allocation`
--

INSERT INTO `student_allocation` (`id`, `course_code`, `student_id`) VALUES
(44, 'SE-605', 2),
(4, 'SE-605', 3),
(10, 'SE-605', 4),
(11, 'SE-605', 6),
(13, 'SE-605', 8),
(51, 'SE-605', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'teacher',
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT 'teacher12345',
  `contact` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `name`, `email`, `password`, `contact`) VALUES
(1, 'admin', 'System Admin', 'admin@cms.com', 'admin12345', NULL),
(2, 'staff', 'Student Staff', 'staff_student@cms.com', 'staff12345', NULL),
(3, 'committee', 'Course Committee', 'course_committee@cms.com', 'committee12345', NULL),
(6, 'teacher', 'Amit Seal Ami', 'amit@iit.du.ac.bd', 'teacher12345', NULL),
(7, 'teacher', 'Alim Ul Gias', 'alim@iit.du.ac.bd', 'teacher12345', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `fk_answer` (`question_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_code` (`course_code`),
  ADD UNIQUE KEY `course_code_2` (`course_code`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`),
  ADD UNIQUE KEY `marks_unique` (`course_code`,`student_id`,`distribution_id`,`mark`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `distribution_id` (`distribution_id`);

--
-- Indexes for table `marks_distribution`
--
ALTER TABLE `marks_distribution`
  ADD PRIMARY KEY (`distribution_id`),
  ADD UNIQUE KEY `marks_distribution_unique` (`course_code`,`distribution_criteria`),
  ADD UNIQUE KEY `course_code` (`course_code`,`distribution_criteria`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_allocation`
--
ALTER TABLE `student_allocation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_allocation_unique` (`course_code`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `marks_distribution`
--
ALTER TABLE `marks_distribution`
  MODIFY `distribution_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student_allocation`
--
ALTER TABLE `student_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `fk_answer` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `marks_ibfk_3` FOREIGN KEY (`distribution_id`) REFERENCES `marks_distribution` (`distribution_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks_distribution`
--
ALTER TABLE `marks_distribution`
  ADD CONSTRAINT `marks_distribution_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_allocation`
--
ALTER TABLE `student_allocation`
  ADD CONSTRAINT `student_allocation_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_allocation_ibfk_2` FOREIGN KEY (`course_code`) REFERENCES `course` (`course_code`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
