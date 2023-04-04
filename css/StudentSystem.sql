-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2023 at 01:47 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `StudentSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_fee` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_fee`) VALUES
(10, 'Mathematics', 500000),
(11, 'Biology', 300000),
(12, 'Chemistry', 250000),
(13, 'Language', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enroll_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enroll_id`, `student_id`, `course_id`) VALUES
(1, 8, 12),
(2, 7, 12),
(3, 7, 12),
(4, 8, 12),
(5, 7, 12),
(6, 7, 12),
(7, 8, 12),
(8, 8, 12),
(9, 8, 12),
(10, 8, 12),
(11, 8, 12),
(12, 8, 12),
(13, 7, 12),
(14, 7, 12),
(15, 7, 12),
(16, 7, 12),
(17, 7, 12),
(18, 7, 12),
(19, 7, 10),
(20, 7, 11),
(21, 11, 11),
(22, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount_paid` int(11) NOT NULL,
  `enroll_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `firstname`, `lastname`, `gender`, `email`, `mobile`, `birthdate`, `status`) VALUES
(7, 'Swaumu', '   Muddinyo', 'female', 'swau@gmail.com', '   074849404', '1986-01-01', 'graduate'),
(8, 'Alex', ' Habimana1', 'female', 'alex@gmail.com', ' 03939384', '2023-03-18', 'graduate'),
(10, 'Mwania', 'Moha', 'female', 'mon@gmail.com', '07585859', '1997-06-30', 'INACTIVE'),
(11, 'John', 'Mwambamba', 'male', 'john@gmail.com', '0753525227', '1996-04-23', 'Active'),
(12, 'Aisha', 'Mwinyi', 'female', 'mwi@gmail.com', '073637272', '2009-02-04', 'Active'),
(13, 'Rama', ' Juma', 'male', 'ram@gmail.com', ' 073636822', '1978-04-12', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `firstname`, `lastname`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'sauda', 'salehe', '0755176265', 'sau', 'sau@gmail.com', '$2y$10$5E3jxRiN.jztiqFrea20z.XWvTf4Hl1G7Y1eM0PXCKQ.AB2XD/sv.'),
(2, 'swaum', 'mohammed', 'muu@gmail.com', '0755176265', 'swau', '$2y$10$xkeCgHLckx7tqwBK9i1cTuxYW35HRVQXX6tcMMSZyz6UBI8hVbXHC'),
(3, 'alexis', 'h', 'alexis@gm.com', '07888', 'ale', '$2y$10$W2sBq3VLU0qXQhWiBsw8Uu77l92DW81eTIEwmG8z67EwK.u7qhQ/e'),
(4, 'Muddy', 'Moo', 'maka@gmail.com', '076464646', 'sau', '$2y$10$176qxAt4vV1nu95k1MkoweD58CerFgXvZltIjsyFxfasnMCTj.djm'),
(5, 'alex', 'ale', 'alexis@gmail.com', '09885', 'alexis', '$2y$10$O0fK1FGPcXjOpricXHp4WOSRzqgktm3rkzQsUc2ETIIgvB2vewCn6'),
(6, 'Rama', 'Juma', 'juma@gmail.com', '0762626262', 'Rama', '$2y$10$ZtxW47bhY.f3Bjl50YPBJOT5cPNF2zIy9BQvGtrcfH0AxaoAl39Ui'),
(7, 'mwania', 'Juma', 'moni@gmail.com', '0762626262', 'Monea', '$2y$10$f4vyrMRE5xW6mfzzc03gy.E67CEt597zNKysdOFD6AtwXjpEG8G9y'),
(8, 'park', 'jin', 'jin@gmail.com', '0762626262', 'jin', '$2y$10$s0DBgn5oNoxZ9RP2enDbEOwJPJRZWYexnOIEuf5vDnRZ6No7Q39AC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `FK_StudentsEnrollment` (`student_id`),
  ADD KEY `FK_CoursesEnrollment` (`course_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `FK_EnrollmentPayment` (`enroll_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `FK_CoursesEnrollment` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `FK_StudentsEnrollment` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `FK_EnrollmentPayment` FOREIGN KEY (`enroll_id`) REFERENCES `enrollment` (`enroll_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
