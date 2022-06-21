-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 07:36 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidstudentmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid_student`
--

CREATE TABLE `covid_student` (
  `matric_number` varchar(50) NOT NULL,
  `mysejahtera_id` varchar(250) NOT NULL,
  `covid_start_date` date NOT NULL,
  `covid_last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_student`
--

INSERT INTO `covid_student` (`matric_number`, `mysejahtera_id`, `covid_start_date`, `covid_last_date`) VALUES
('', '1234567890', '2021-08-21', '2021-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `homework_id` varchar(50) NOT NULL,
  `subject_id` varchar(50) NOT NULL,
  `homework_assign_date` date NOT NULL,
  `homework_due_date` date NOT NULL,
  `homework_details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` varchar(50) NOT NULL,
  `lecturer_fname` text NOT NULL,
  `lecturer_lname` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `lecturer_fname`, `lecturer_lname`, `email`, `password`) VALUES
('112222', 'John', 'else', 'noahsupitang@gmail.com', 'Noah1234'),
('43214', 'Jane', 'Doe', 'admin1@mail.com', '1234Abcd');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `subject_id` varchar(50) NOT NULL,
  `matric_number` varchar(50) NOT NULL,
  `notes_details` text NOT NULL,
  `notes_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `matric_number` varchar(50) NOT NULL,
  `lecturer_id` varchar(50) NOT NULL,
  `section_details` varchar(250) NOT NULL,
  `no_of_students` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `matric_number` varchar(50) NOT NULL,
  `student_fname` text NOT NULL,
  `student_lname` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`matric_number`, `student_fname`, `student_lname`, `email`, `password`) VALUES
('12345', 'John', 'Doe', 'user1@mail.com', 'Abcd1234');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` varchar(50) NOT NULL,
  `matric_number` varchar(50) NOT NULL,
  `subject_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE `submission` (
  `subject_id` varchar(50) NOT NULL,
  `homework_id` varchar(50) NOT NULL,
  `submission_date` date NOT NULL,
  `submission_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `matric_number` varchar(50) NOT NULL,
  `mysejahtera_id` varchar(250) NOT NULL,
  `symptoms_details` text NOT NULL,
  `symptoms_condition` text NOT NULL,
  `symptoms_start_date` date NOT NULL,
  `symptoms_last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid_student`
--
ALTER TABLE `covid_student`
  ADD PRIMARY KEY (`mysejahtera_id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`homework_id`),
  ADD KEY `fk_subject_id_homework` (`subject_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD KEY `fk_matric_number_notes` (`matric_number`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD KEY `fk_matric_number_section` (`matric_number`),
  ADD KEY `fk_lecturer_id_section` (`lecturer_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`matric_number`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `fk_matric_number_subject` (`matric_number`);

--
-- Indexes for table `submission`
--
ALTER TABLE `submission`
  ADD KEY `fk_subject_id_submission` (`subject_id`),
  ADD KEY `fk_homework_id_submission` (`homework_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD KEY `fk_mysejahtera_id_symptoms` (`mysejahtera_id`),
  ADD KEY `fk_matric_number_symptoms` (`matric_number`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `homework`
--
ALTER TABLE `homework`
  ADD CONSTRAINT `fk_subject_id_homework` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `fk_matric_number_notes` FOREIGN KEY (`matric_number`) REFERENCES `student` (`matric_number`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `fk_lecturer_id_section` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`lecturer_id`),
  ADD CONSTRAINT `fk_matric_number_section` FOREIGN KEY (`matric_number`) REFERENCES `student` (`matric_number`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `fk_matric_number_subject` FOREIGN KEY (`matric_number`) REFERENCES `student` (`matric_number`);

--
-- Constraints for table `submission`
--
ALTER TABLE `submission`
  ADD CONSTRAINT `fk_homework_id_submission` FOREIGN KEY (`homework_id`) REFERENCES `homework` (`homework_id`),
  ADD CONSTRAINT `fk_subject_id_submission` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD CONSTRAINT `fk_matric_number_symptoms` FOREIGN KEY (`matric_number`) REFERENCES `student` (`matric_number`),
  ADD CONSTRAINT `fk_mysejahtera_id_symptoms` FOREIGN KEY (`mysejahtera_id`) REFERENCES `covid_student` (`mysejahtera_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
