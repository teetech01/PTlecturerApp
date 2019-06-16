-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 15, 2019 at 07:30 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PTlecturerApp`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_lecturers`
--

CREATE TABLE `applied_lecturers` (
  `id` int(11) NOT NULL,
  `session` varchar(10) NOT NULL,
  `desire_department` varchar(200) NOT NULL,
  `form_no` varchar(100) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `office_address` varchar(200) NOT NULL,
  `position` varchar(50) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `marital` varchar(10) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `referee_name` varchar(50) NOT NULL,
  `referee_address` varchar(50) NOT NULL,
  `referee_position` varchar(20) NOT NULL,
  `referee_phone` varchar(20) NOT NULL,
  `kin_details` varchar(100) NOT NULL,
  `institution_attended` varchar(50) NOT NULL,
  `from_year` varchar(5) NOT NULL,
  `to_year` varchar(5) NOT NULL,
  `sch_qualification` varchar(50) NOT NULL,
  `sch_award_date` varchar(20) NOT NULL,
  `pro_qualification` varchar(50) NOT NULL,
  `awarding_body` varchar(50) NOT NULL,
  `pro_award_date` varchar(20) NOT NULL,
  `work_school` varchar(50) NOT NULL,
  `work_department` varchar(30) NOT NULL,
  `course_taught` varchar(50) NOT NULL,
  `student_category` varchar(20) NOT NULL,
  `book_published` varchar(100) NOT NULL,
  `journal_publication` varchar(100) NOT NULL,
  `invigilated_school` varchar(50) NOT NULL,
  `invigilated_program` varchar(50) NOT NULL,
  `invigilated_period` varchar(50) NOT NULL,
  `marked_school` varchar(50) NOT NULL,
  `marked_department` varchar(50) NOT NULL,
  `marked_course` varchar(50) NOT NULL,
  `marked_period` varchar(50) NOT NULL,
  `passport_filename` varchar(500) NOT NULL,
  `date_applied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `applied_lecturers`
--

INSERT INTO `applied_lecturers` (`id`, `session`, `desire_department`, `form_no`, `surname`, `othername`, `email`, `phone`, `home_address`, `office_address`, `position`, `dob`, `religion`, `nationality`, `state`, `gender`, `marital`, `spouse_name`, `referee_name`, `referee_address`, `referee_position`, `referee_phone`, `kin_details`, `institution_attended`, `from_year`, `to_year`, `sch_qualification`, `sch_award_date`, `pro_qualification`, `awarding_body`, `pro_award_date`, `work_school`, `work_department`, `course_taught`, `student_category`, `book_published`, `journal_publication`, `invigilated_school`, `invigilated_program`, `invigilated_period`, `marked_school`, `marked_department`, `marked_course`, `marked_period`, `passport_filename`, `date_applied`) VALUES
(1, '2019/2020', 'ANIMAL PRODUCTION TECHNOLOGY', 'SPTSR/LAF/19-20/488919665', 'Adegoke', 'toheeb', 'atoheeb39@gmail.com', '8184613415', '34, Akinhanmi Street,, Ojuelegba, Surulere, Lagos.', 'Kofo Abayomi', 'software developer', '0019-02-08', 'ISLAM', 'NIGERIAN', 'Lagos', 'MALE', 'SINGLE', 'nil', 'Toheeb Adegoke', 'ikd', 'technologist', '899879', 'not avail', 'laspo', '7898', '6787', 'MBA/Bsc', 'june 10', 'msssc', 'nsc', 'july19', 'flklkajf', 'jhdlfjah', 'k;ljdlf', 'kjdflkj', 'fortran', '5g in africa', 'lkjfkld', 'kfdfd', 'jklj;0980', 'j;djf', 'kjfldj', 'kjflajdkl', 'jlkjf997', 'IMG_8287.jpeg', '2019-06-14 08:37:08');

-- --------------------------------------------------------

--
-- Table structure for table `sptsr_lect_dept`
--

CREATE TABLE `sptsr_lect_dept` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sptsr_lect_dept`
--

INSERT INTO `sptsr_lect_dept` (`id`, `dept_name`) VALUES
(1, 'ACCOUNTANCY'),
(2, 'AGRIC. and BIO-ENVIRONMENTAL ENGINEERING (POST HARVEST OPTION)'),
(3, 'AGRIC. EXTENSION AND MANAGEMENT'),
(4, 'AGRICULTURAL AND BIOENVIRONMENTAL ENGINEERING (POWER AND MACHINERY)'),
(5, 'AGRICULTURAL AND BIOENVIRONMENTAL ENGINEERING (SOIL AND WATER)'),
(6, 'ANIMAL PRODUCTION TECHNOLOGY'),
(7, 'ARCHITECTURAL TECHNOLOGY');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_lecturers`
--
ALTER TABLE `applied_lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sptsr_lect_dept`
--
ALTER TABLE `sptsr_lect_dept`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_lecturers`
--
ALTER TABLE `applied_lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sptsr_lect_dept`
--
ALTER TABLE `sptsr_lect_dept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
