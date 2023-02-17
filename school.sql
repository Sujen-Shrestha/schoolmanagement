-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 01:12 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `privilege` tinyint(1) NOT NULL,
  `announcement_status` enum('show','hide') NOT NULL,
  `content_link` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `title`, `description`, `date`, `privilege`, `announcement_status`, `content_link`, `staff_id`) VALUES
(22, 'Announcements for student', 'welcome', '2021-4-12 20:18:5', 0, 'show', '', 0),
(23, 'Announcements for module leader ', 'welcome', '2021-4-12 20:18:31', 1, 'show', '', 0),
(24, 'Quiz 1', 'get ready', '2021-4-12 20:21:23', 2, 'show', '', 30),
(25, 'helo', 'welcome', '2021-4-12 21:4:40', 0, 'show', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(255) NOT NULL,
  `module_code` int(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `taken` varchar(10) NOT NULL,
  `student_added` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `module_code`, `date`, `taken`, `student_added`) VALUES
(151, 28, '2021-04-12', 'yes', 'yes'),
(152, 28, '2021-04-12', 'yes', 'yes'),
(153, 28, '2021-04-12', 'yes', 'yes'),
(159, 28, '2021-04-12', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_data`
--

CREATE TABLE `attendance_data` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `attendance_id` int(11) NOT NULL,
  `status` enum('O','X','A','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_data`
--

INSERT INTO `attendance_data` (`id`, `student_id`, `attendance_id`, `status`) VALUES
(86, 29, 151, 'X'),
(87, 29, 152, 'X'),
(88, 29, 153, 'X'),
(89, 29, 159, 'X');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_percentage`
--

CREATE TABLE `attendance_percentage` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `attend_id` int(11) NOT NULL,
  `percentage` double NOT NULL,
  `mod_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_percentage`
--

INSERT INTO `attendance_percentage` (`id`, `std_id`, `attend_id`, `percentage`, `mod_id`) VALUES
(90, 26, 0, 66.67, 23),
(91, 27, 0, 33.33, 23),
(92, 28, 0, 33.33, 23),
(93, 29, 0, 100, 28);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `staff_id` int(100) NOT NULL,
  `course_duration` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_title`, `staff_id`, `course_duration`) VALUES
(33, 'cource 1', 'cource 1', 29, 0),
(34, 'cource 2', 'cource 2', 29, 0);

-- --------------------------------------------------------

--
-- Table structure for table `last_button`
--

CREATE TABLE `last_button` (
  `id` int(11) NOT NULL,
  `last_button_id` varchar(100) NOT NULL DEFAULT 'null',
  `active` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `last_button`
--

INSERT INTO `last_button` (`id`, `last_button_id`, `active`) VALUES
(1, 'null', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `mod_id` int(11) NOT NULL,
  `module_code` varchar(11) NOT NULL,
  `module_title` varchar(255) NOT NULL,
  `level` int(10) NOT NULL,
  `credit_points` int(4) NOT NULL,
  `description` int(255) NOT NULL,
  `course_id` int(100) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`mod_id`, `module_code`, `module_title`, `level`, `credit_points`, `description`, `course_id`, `staff_id`) VALUES
(28, '', 'module 1', 0, 0, 0, 33, 30),
(29, '', 'module 2', 0, 0, 0, 33, 0),
(30, '', 'module 3', 0, 0, 0, 33, 0),
(31, '', 'module 4', 0, 0, 0, 33, 0),
(32, '', 'module 5', 0, 0, 0, 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `module_assignment`
--

CREATE TABLE `module_assignment` (
  `assignment_id` int(11) NOT NULL,
  `assignment_title` varchar(255) NOT NULL,
  `posted_date` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `weightage` varchar(5) NOT NULL,
  `module_code` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_assignment`
--

INSERT INTO `module_assignment` (`assignment_id`, `assignment_title`, `posted_date`, `due_date`, `weightage`, `module_code`) VALUES
(41, 'Assignment 1', '12 April, 2021', '2021-04-21', '', '28');

-- --------------------------------------------------------

--
-- Table structure for table `module_assignment_files`
--

CREATE TABLE `module_assignment_files` (
  `id` int(11) NOT NULL,
  `brief_document` varchar(255) NOT NULL,
  `other_documents` varchar(255) NOT NULL,
  `assignment_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_assignment_files`
--

INSERT INTO `module_assignment_files` (`id`, `brief_document`, `other_documents`, `assignment_id`) VALUES
(34, 'Assignment2.docx.pdf', '', 41),
(35, '', 'project_file_18-cs-010.pdf', 41);

-- --------------------------------------------------------

--
-- Table structure for table `module_assignment_grade`
--

CREATE TABLE `module_assignment_grade` (
  `id` int(11) NOT NULL,
  `grade` int(100) NOT NULL DEFAULT 0,
  `assignment_id` int(100) NOT NULL,
  `std_id` int(100) NOT NULL,
  `submitted` enum('Yes','No','','') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_assignment_grade`
--

INSERT INTO `module_assignment_grade` (`id`, `grade`, `assignment_id`, `std_id`, `submitted`) VALUES
(47, 110, 41, 29, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `module_content`
--

CREATE TABLE `module_content` (
  `content_id` int(11) NOT NULL,
  `module_code` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('show','hide') NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_content`
--

INSERT INTO `module_content` (`content_id`, `module_code`, `title`, `description`, `status`, `date`) VALUES
(146, 28, 'content 1', '', 'show', '12 April, 2021'),
(147, 28, 'module 1', '', 'show', '12 April, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `module_content_files`
--

CREATE TABLE `module_content_files` (
  `id` int(100) NOT NULL,
  `files` blob NOT NULL,
  `module_content_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `module_content_files`
--

INSERT INTO `module_content_files` (`id`, `files`, `module_content_id`, `name`, `type`) VALUES
(132, '', 146, 'Assignment2.docx.pdf', 'pdf'),
(133, '', 146, 'lab5.docx.pdf', 'pdf'),
(134, '', 147, 'lab5.docx.pdf', 'pdf');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_first_name` varchar(100) DEFAULT NULL,
  `staff_middlename` varchar(100) DEFAULT NULL,
  `staff_surname` varchar(100) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `stutas` varchar(100) DEFAULT NULL,
  `dormancy_reason` varchar(100) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `date_joined` date DEFAULT NULL,
  `login_password` varchar(50) DEFAULT NULL,
  `privilege` tinyint(3) UNSIGNED DEFAULT NULL,
  `profile_photo` varchar(255) DEFAULT 'not',
  `last_btn_click_id` varchar(100) NOT NULL DEFAULT 'null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_first_name`, `staff_middlename`, `staff_surname`, `gender`, `email`, `contact_no`, `address`, `stutas`, `dormancy_reason`, `date_of_birth`, `date_joined`, `login_password`, `privilege`, `profile_photo`, `last_btn_click_id`) VALUES
(29, 'Admin 1', NULL, '', NULL, 'admin@admin.com', '', NULL, NULL, NULL, NULL, NULL, 'admin', 1, '3d_fractal_blue_round_shapes_hd_abstract-1920x1080.jpg', 'null'),
(30, 'module leader 1', NULL, '', 'male', 'leader@leader.com', '', '', NULL, '', '0000-00-00', '0000-00-00', 'leader', 0, 'a_hero_is_an_ordinary_individual_hd_motivational-1920x1080.jpg', 'null'),
(31, 'module leader 2', NULL, '', '', '', '', '', NULL, '', '0000-00-00', '0000-00-00', '', 0, 'not', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `student_firstname` varchar(100) NOT NULL,
  `student_middlename` varchar(100) NOT NULL,
  `student_surname` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL DEFAULT 'male',
  `date_of_birth` date NOT NULL,
  `term_time_address` varchar(100) NOT NULL,
  `home_address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dormancy_reason` varchar(20) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL DEFAULT 'not',
  `archive` varchar(50) NOT NULL,
  `std_course` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_firstname`, `student_middlename`, `student_surname`, `gender`, `date_of_birth`, `term_time_address`, `home_address`, `contact_no`, `email`, `status`, `dormancy_reason`, `login_password`, `profile_photo`, `archive`, `std_course`) VALUES
(29, 'studen 1', '', '', 'female', '2021-04-14', '', '', '', 'student@student.com', 'live', '', 'n91tDajf2F', 'blade_daywalker_fortnite_4k_hd_games-3840x2160.jpg', '', 33),
(30, 'student 2', '', '', 'male', '0000-00-00', '', '', '', '', 'live', '', 'HontpEabAc', 'not', '', 0),
(31, 'studen 3', '', '', 'male', '0000-00-00', '', '', '', '', 'live', '', 'yuCU04gZYp', 'not', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_document`
--

CREATE TABLE `student_document` (
  `document_id` int(100) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `transcript` varchar(50) DEFAULT NULL,
  `personal_essay` varchar(1000) DEFAULT NULL,
  `agreement_form` varchar(255) DEFAULT NULL,
  `identity_document` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `cource_id` int(100) NOT NULL,
  `index_number` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `cource_id`, `index_number`, `value`) VALUES
(98, 33, 'value10', 'helo'),
(99, 33, 'value23', 'jj'),
(100, 33, 'value35', 'jj'),
(101, 33, 'value41', 'mn'),
(102, 33, 'value12', 'n'),
(103, 33, 'value15', 'n'),
(104, 33, 'value20', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `attendance_data`
--
ALTER TABLE `attendance_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_percentage`
--
ALTER TABLE `attendance_percentage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `last_button`
--
ALTER TABLE `last_button`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`mod_id`);

--
-- Indexes for table `module_assignment`
--
ALTER TABLE `module_assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `module_assignment_files`
--
ALTER TABLE `module_assignment_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_assignment_grade`
--
ALTER TABLE `module_assignment_grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_content`
--
ALTER TABLE `module_content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `module_content_files`
--
ALTER TABLE `module_content_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_document`
--
ALTER TABLE `student_document`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `FK__students` (`student_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `attendance_data`
--
ALTER TABLE `attendance_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `attendance_percentage`
--
ALTER TABLE `attendance_percentage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `module_assignment`
--
ALTER TABLE `module_assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `module_assignment_files`
--
ALTER TABLE `module_assignment_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `module_assignment_grade`
--
ALTER TABLE `module_assignment_grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `module_content`
--
ALTER TABLE `module_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `module_content_files`
--
ALTER TABLE `module_content_files`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student_document`
--
ALTER TABLE `student_document`
  MODIFY `document_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_document`
--
ALTER TABLE `student_document`
  ADD CONSTRAINT `FK__students` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
