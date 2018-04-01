-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 01, 2018 at 04:06 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nacoss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `carryover`
--

CREATE TABLE IF NOT EXISTS `carryover` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `courseId` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `coursesregistered`
--

CREATE TABLE IF NOT EXISTS `coursesregistered` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `regnum` varchar(100) DEFAULT NULL,
  `courseCode` varchar(20) NOT NULL,
  `creditHour` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facultyId` int(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `final_year`
--

CREATE TABLE IF NOT EXISTS `final_year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(1) NOT NULL,
  `course title` varchar(150) NOT NULL,
  `course code` varchar(7) NOT NULL,
  `cr hrs` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `final_year`
--

INSERT INTO `final_year` (`id`, `semester`, `course title`, `course code`, `cr hrs`) VALUES
(1, 1, 'Automata Theory and Formal lang.', 'CSC4101', 3),
(2, 1, 'Artificial Intelligence', 'CSC4102', 3),
(3, 1, 'Software Engineering', 'CSC4103', 4),
(4, 1, 'System Modelling And Simulation', 'CSC4104', 3),
(5, 1, 'Computer Networks And Comm', 'CSC4105', 3),
(6, 1, 'Seminar', 'CSC4106', 2),
(7, 1, 'Net-Centric Computing', 'CSC4107', 3),
(8, 2, 'Project', 'CSC4200', 6),
(9, 2, 'Queuing Systems', 'CSC4201', 3),
(10, 2, 'Computer Networks Administration', 'CSC4202', 2),
(11, 2, 'Software Project Management', 'CSC4203', 2),
(12, 2, 'Computer Graphics & Visualization', 'CSC4204', 3),
(13, 2, 'Operations Research', 'CSC4205', 2);

-- --------------------------------------------------------

--
-- Table structure for table `first_semester_results`
--

CREATE TABLE IF NOT EXISTS `first_semester_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regnum` varchar(11) NOT NULL,
  `course_code` varchar(11) NOT NULL,
  `ca_test` int(11) NOT NULL,
  `exam` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `grade` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE IF NOT EXISTS `lecturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regnum` varchar(15) NOT NULL,
  `subject` longtext NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `regnum`, `subject`, `email`, `message`) VALUES
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', '', ''),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '15/csc/095', 'title', 'gokoon@gmail.com', 'body'),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, 'regnum', 'subject', 'email', 'message'),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '15/CSC/041', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `second_semester_results`
--

CREATE TABLE IF NOT EXISTS `second_semester_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regnum` varchar(20) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `ca_test` int(20) NOT NULL,
  `exam` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `regnum` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `department` varchar(40) NOT NULL,
  `url` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Bio` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `lastUpload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `year_one`
--

CREATE TABLE IF NOT EXISTS `year_one` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(1) NOT NULL,
  `course title` varchar(80) NOT NULL,
  `course code` varchar(7) NOT NULL,
  `cr hrs` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `year_three`
--

CREATE TABLE IF NOT EXISTS `year_three` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(1) NOT NULL,
  `course title` varchar(150) NOT NULL,
  `course code` varchar(7) NOT NULL,
  `cr hrs` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `year_two`
--

CREATE TABLE IF NOT EXISTS `year_two` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semester` int(1) NOT NULL,
  `course title` varchar(150) NOT NULL,
  `course code` varchar(7) NOT NULL,
  `cr hrs` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr1_first_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr1_first_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `regnum` varchar(50) NOT NULL,
  `courseCode` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr1_second_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr1_second_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(10) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr2_first_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr2_first_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(50) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr2_second_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr2_second_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(10) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr3_first_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr3_first_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(10) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr3_second_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr3_second_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(10) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr4_first_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr4_first_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(10) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `yr4_second_semestar_courses`
--

CREATE TABLE IF NOT EXISTS `yr4_second_semestar_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `courseCode` varchar(10) NOT NULL,
  `regnum` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
