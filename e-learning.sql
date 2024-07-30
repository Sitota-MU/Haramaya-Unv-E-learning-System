-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 22, 2019 at 10:36 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `account_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`account_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `account`
--


-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `action` varchar(200) NOT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_id`, `username`, `date`, `action`) VALUES
(0, '', '2019-04-29', 'Add faculty wwwww');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `l_name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `f_name`, `l_name`, `username`, `password`, `location`) VALUES
(2, 'some', 'sherefa', 'hiba', '1234', 'uploads/18193992_502443460146661_568697730447356482_n.jpg'),
(12, 'semira', 'sherefa', '', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `ass_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `file` varchar(200) NOT NULL,
  `datesub` date NOT NULL,
  PRIMARY KEY (`ass_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ass_id`, `name`, `course_code`, `file`, `datesub`) VALUES
(2, 'dsfghj', 'ITEC345', '4_6043914228455179344(1).docx', '2019-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chat_id` int(20) NOT NULL AUTO_INCREMENT,
  `chat_person_name` varchar(20) NOT NULL,
  `chat_value` varchar(200) NOT NULL,
  `chat_time` datetime NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_person_name`, `chat_value`, `chat_time`) VALUES
(1, 'GETE', 'SDSFVFBD', '0000-00-00 00:00:00'),
(2, 'hi', 'nn', '2019-06-08 07:43:15'),
(3, 'gete', '', '2019-06-19 05:15:19'),
(4, 'gete', 'ttt', '2019-06-19 05:15:25'),
(5, 'gete', 'dd', '2019-06-19 05:18:14'),
(6, 'test', 'gg', '2019-06-19 05:32:48'),
(7, 'test', 'hi teacher', '2019-06-19 05:48:33'),
(8, 'test', 'we are fine', '2019-06-19 05:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `class_id` int(10) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(25) NOT NULL,
  `department_name` varchar(25) NOT NULL,
  PRIMARY KEY (`class_id`),
  KEY `department_name` (`department_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `department_name`) VALUES
(1, 'first_year', 'IT'),
(2, 'second_year', 'IT'),
(3, 'thrid_year', 'IT'),
(4, 'fourth_year', 'IT'),
(5, 'first_year', 'plant science'),
(6, 'second_year', 'plant science'),
(7, 'first_year', 'plant science'),
(8, 'first_year', 'CS'),
(9, 'second_year', 'CS'),
(10, 'thrid_year', 'CS'),
(11, 'fourth_year', 'CS'),
(12, 'frist year', 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `class_id_id` int(10) NOT NULL AUTO_INCREMENT,
  `class_id` int(25) NOT NULL,
  `class_name` varchar(25) NOT NULL,
  `department_name` varchar(25) NOT NULL,
  PRIMARY KEY (`class_id_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id_id`, `class_id`, `class_name`, `department_name`) VALUES
(1, 1, 'first_year', 'IT'),
(2, 2, 'second_year', 'IT'),
(3, 3, 'thrid_year', 'IT'),
(4, 4, 'fourth_year', 'IT'),
(5, 5, 'first_year', 'plant science'),
(6, 6, 'second_year', 'plant science'),
(7, 7, 'thrid_year', 'plant science'),
(9, 8, 'first_year', 'CS'),
(10, 9, 'second_year', 'CS'),
(11, 10, 'thrid_year', 'CS'),
(12, 11, 'fourth_year', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_code` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `Inst_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `thumbnails` varchar(500) NOT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_code`, `title`, `Inst_id`, `class_id`, `thumbnails`) VALUES
('cs3456', 'java', 65, 0, 'uploads/thumbnails.jpg'),
('ITEC345', 'java', 45, 2, 'uploads/thumbnails.jpg'),
('ITEC5677', 'php', 45, 2, 'uploads/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_name` varchar(25) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `head_id` int(10) NOT NULL,
  `dept_status` varchar(25) NOT NULL,
  PRIMARY KEY (`department_name`),
  KEY `head_id` (`head_id`),
  KEY `head_id_2` (`head_id`),
  KEY `head_id_3` (`head_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_name`, `faculty`, `head_id`, `dept_status`) VALUES
('CS', 'CCI', 56, 'deactivated'),
('IT', 'CCI', 33, 'deactivated'),
('plant science', 'coa', 43, 'deactivated');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(20) NOT NULL AUTO_INCREMENT,
  `event_title` varchar(20) NOT NULL,
  `date_start` varchar(25) NOT NULL,
  `teacher_class_id` int(25) NOT NULL,
  `date_end` varchar(25) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `date_start`, `teacher_class_id`, `date_end`) VALUES
(4, 'end of classs', '08/27/2018', 0, '06/28/2019');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` int(10) NOT NULL AUTO_INCREMENT,
  `dean_name` varchar(25) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `dean_name`, `name`, `date`) VALUES
(1, 'tamrat', 'CCI', '2019-05-14 21:08:53'),
(4, 'KEBEDE', 'FB', '2019-05-19 06:02:17'),
(5, 'belete', 'NSC', '2019-05-19 06:03:43'),
(6, 'debebe', 'COA', '2019-06-03 21:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(10) NOT NULL AUTO_INCREMENT,
  `floc` varchar(50) NOT NULL,
  `fdatein` varchar(25) NOT NULL,
  `fdesc` varchar(25) NOT NULL,
  `Inst_id` varchar(10) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `uploaded_by` varchar(25) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `Inst_id` (`Inst_id`),
  KEY `inst_course_id` (`course_code`),
  KEY `course_code` (`course_code`),
  KEY `course_code_2` (`course_code`),
  KEY `Inst_id_2` (`Inst_id`),
  KEY `course_code_3` (`course_code`),
  KEY `course_code_4` (`course_code`),
  KEY `course_code_5` (`course_code`),
  KEY `course_code_6` (`course_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `floc`, `fdatein`, `fdesc`, `Inst_id`, `course_code`, `fname`, `uploaded_by`) VALUES
(10, 'admin/uploads/3451_File_6425_File_4_60439142284551', '2019-06-21 19:09:36', 'read', '45', 'ITEC5677', 'chapter one', 'getenshmaru');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE IF NOT EXISTS `head` (
  `head_id` int(10) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `location` varchar(200) NOT NULL,
  `phone` int(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dep_head_status` varchar(25) NOT NULL,
  PRIMARY KEY (`head_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`head_id`, `f_name`, `l_name`, `username`, `email`, `password`, `location`, `phone`, `sex`, `dep_head_status`) VALUES
(33, 'semira', 'sherefa', 'test', 'df@gamil.com', 'dd', 'uploads/18198397_502128676844806_6782655970542776005_n.jpg', 901172334, 'male', 'activated'),
(43, 'zekarya', 'kebede', 'zeki', 'zeki@gamil.com', 'cvv', 'uploads/18194063_502129480178059_4959784623318286100_n.jpg', 901172334, 'male', 'activated'),
(56, 'samuyel', 'abebe', 'sami', 'sam@gamil.com', 'sss', 'uploads/2012-08-27_13.35.19_old_adminstration_2-1024x768.jpg', 901172334, 'male', 'activated');

-- --------------------------------------------------------

--
-- Table structure for table `head_announcement`
--

CREATE TABLE IF NOT EXISTS `head_announcement` (
  `announce_id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(200) NOT NULL,
  `head_id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`announce_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `head_announcement`
--

INSERT INTO `head_announcement` (`announce_id`, `content`, `head_id`, `date`) VALUES
(12, '<h3 style="color:#aaa;font-style:italic;">ASDFSGFDSDFGGF</h3>\r\n', 33, '2019-05-19 02:24:56'),
(14, '<p>SDFGFDSFDAS</p>\r\n', 33, '2019-05-19 02:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `Inst_id` int(25) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `username` text NOT NULL,
  `dep_name` text NOT NULL,
  `password` varchar(25) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `head_id` int(10) NOT NULL,
  `inst_status` varchar(25) NOT NULL,
  PRIMARY KEY (`Inst_id`),
  KEY `head_id` (`head_id`),
  KEY `head_id_2` (`head_id`),
  KEY `head_id_3` (`head_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`Inst_id`, `f_name`, `l_name`, `username`, `dep_name`, `password`, `location`, `phone`, `email`, `sex`, `head_id`, `inst_status`) VALUES
(45, 'getensh', 'maru', 'gete', 'IT', 'gh', 'uploads/18198397_502128676844806_6782655970542776005_n.jpg', 901172334, 'ge@gamil.com', 'female', 33, 'activated'),
(65, 'kidane', 'mare', 'kedi', 'CS', 'fff', 'uploads/18198397_502128676844806_6782655970542776005_n.jpg', 2147483647, 'ke@gamil.com', 'male', 56, 'activated');

-- --------------------------------------------------------

--
-- Table structure for table `instructors_course`
--

CREATE TABLE IF NOT EXISTS `instructors_course` (
  `inst_course_id` int(20) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  `Inst_id` int(10) NOT NULL,
  `thumbnails` varchar(25) NOT NULL,
  PRIMARY KEY (`inst_course_id`),
  KEY `Inst_id` (`course_code`),
  KEY `course_code` (`course_code`),
  KEY `course_code_2` (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors_course`
--

INSERT INTO `instructors_course` (`inst_course_id`, `course_code`, `class_id`, `Inst_id`, `thumbnails`) VALUES
(10, 'ITEC5677', 3, 45, 'uploads/thumbnails.jpg'),
(11, 'cs4566', 3, 65, 'uploads/thumbnails.jpg'),
(12, 'IT234', 4, 45, 'uploads/thumbnails.jpg'),
(13, 'IT453', 2, 45, 'uploads/thumbnails.jpg'),
(14, 'cs34', 3, 45, 'uploads/thumbnails.jpg'),
(15, 'IT345', 0, 45, 'uploads/thumbnails.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_class`
--

CREATE TABLE IF NOT EXISTS `instructor_class` (
  `instructor_class_id` int(10) NOT NULL AUTO_INCREMENT,
  `Inst_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  PRIMARY KEY (`instructor_class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `instructor_class`
--

INSERT INTO `instructor_class` (`instructor_class_id`, `Inst_id`, `class_id`) VALUES
(5, 45, 2),
(6, 45, 2),
(7, 45, 2);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_course`
--

CREATE TABLE IF NOT EXISTS `instructor_course` (
  `course_code` varchar(10) NOT NULL,
  `Inst_id` int(20) NOT NULL,
  `thumbnails` varchar(20) NOT NULL,
  PRIMARY KEY (`course_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor_course`
--


-- --------------------------------------------------------

--
-- Table structure for table `inst_announcement`
--

CREATE TABLE IF NOT EXISTS `inst_announcement` (
  `announce_id` int(10) NOT NULL,
  `content` varchar(100) NOT NULL,
  `Inst_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`announce_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inst_announcement`
--


-- --------------------------------------------------------

--
-- Table structure for table `inst_class`
--

CREATE TABLE IF NOT EXISTS `inst_class` (
  `inst_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `Inst_id` int(11) NOT NULL,
  `class_id` int(10) NOT NULL,
  `department_name` varchar(11) NOT NULL,
  PRIMARY KEY (`inst_class_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `inst_class`
--

INSERT INTO `inst_class` (`inst_class_id`, `Inst_id`, `class_id`, `department_name`) VALUES
(1, 45, 1, 'IT'),
(2, 32, 7, 'plant scien'),
(4, 45, 2, 'IT');

-- --------------------------------------------------------

--
-- Table structure for table `inst_notification`
--

CREATE TABLE IF NOT EXISTS `inst_notification` (
  `notfication_id` int(25) NOT NULL AUTO_INCREMENT,
  `head_id` int(25) NOT NULL,
  `notifcation` varchar(25) NOT NULL,
  `date` datetime NOT NULL,
  `link` varchar(10) NOT NULL,
  PRIMARY KEY (`notfication_id`),
  KEY `head_id` (`head_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `inst_notification`
--

INSERT INTO `inst_notification` (`notfication_id`, `head_id`, `notifcation`, `date`, `link`) VALUES
(1, 33, 'Add Annoucements', '2019-05-19 02:27:50', 'announceme');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(20) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(25) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date_sended` datetime NOT NULL,
  `sender_id` int(25) NOT NULL,
  `reciever_name` varchar(25) NOT NULL,
  `sender_name` varchar(25) NOT NULL,
  `message_status` varchar(10) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `reciever_id`, `content`, `date_sended`, `sender_id`, `reciever_name`, `sender_name`, `message_status`) VALUES
(29, 0, '', '2019-06-18 11:41:34', 33, ' ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `message_sent`
--

CREATE TABLE IF NOT EXISTS `message_sent` (
  `message_sent_id` int(10) NOT NULL AUTO_INCREMENT,
  `reciever_id` int(25) NOT NULL,
  `content` varchar(100) NOT NULL,
  `date_sended` datetime NOT NULL,
  `sender_id` int(25) NOT NULL,
  `receiver_name` varchar(25) NOT NULL,
  `sender_name` varchar(25) NOT NULL,
  PRIMARY KEY (`message_sent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `message_sent`
--


-- --------------------------------------------------------

--
-- Table structure for table `post_notices`
--

CREATE TABLE IF NOT EXISTS `post_notices` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `deadline` date NOT NULL,
  `head_id` int(10) NOT NULL,
  `post_title` varchar(25) NOT NULL,
  `post_content` varchar(200) NOT NULL,
  `usernam` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `statu` varchar(25) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `head_id` (`head_id`),
  KEY `head_id_2` (`head_id`),
  KEY `head_id_3` (`head_id`),
  KEY `head_id_4` (`head_id`),
  KEY `head_id_5` (`head_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_notices`
--


-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(10) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` varchar(1) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`que_id`, `course_code`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `date`) VALUES
(34, '0', '<p>aaaaa</p>\r\n', 'aaa', 'aa', 'aaas', 'asa', '0', '2019-06-22'),
(35, 'ITEC5', '<p>sdd</p>\r\n', 'a', 'd', 'ds', 'c', '0', '2019-06-22'),
(36, 'ITEC5', '<p>zxxx</p>\r\n', 'zx', 'x', 'z', 'z', '0', '2019-06-22'),
(37, 'ITEC5', '<p>sfdfghjk</p>\r\n', 'cvcb', 'vbn', 'vcbn', 'cvbn', '0', '2019-06-22'),
(38, 'ITEC5', '<p>dsfgh</p>\r\n', 'sdfg', 'fg', 'gg', 'ggg', '0', '2019-06-22'),
(39, 'ITEC5', '<p>sasd</p>\r\n', 'saas', 'sadf', 'sdsf', 'sdsfg', '0', '2019-06-22'),
(40, 'ITEC5677', '<p>dsfgh</p>\r\n', 'sdf', 'zxc', 'asd', 'asd', 's', '2019-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `login` varchar(20) DEFAULT NULL,
  `stud_id` int(11) NOT NULL,
  `course_code` varchar(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`login`, `stud_id`, `course_code`, `test_date`, `score`) VALUES
(NULL, 456, 'ITEC5', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE IF NOT EXISTS `school_year` (
  `school_year_id` int(10) NOT NULL AUTO_INCREMENT,
  `school_year` int(10) NOT NULL,
  PRIMARY KEY (`school_year_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`school_year_id`, `school_year`) VALUES
(1, 2018),
(2, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stud_id` int(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `department_name` varchar(10) NOT NULL,
  `Inst_id` int(25) NOT NULL,
  `course_code` varchar(25) NOT NULL,
  `class_id` varchar(25) NOT NULL,
  PRIMARY KEY (`stud_id`),
  KEY `Inst_id` (`Inst_id`),
  KEY `course_code` (`course_code`),
  KEY `course_code_2` (`course_code`),
  KEY `Inst_id_2` (`Inst_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `fname`, `lname`, `department_name`, `Inst_id`, `course_code`, `class_id`) VALUES
(13, 'jema', 'jema ali', 'IT', 45, 'ITEC345', '3'),
(23, 'semira', 'sherefa', 'IT', 45, 'IT345', '3'),
(24, 'zebiba', 'mohammed', 'IS', 45, 'ITEC5677', '2'),
(33, 'mahdi', 'jeylu', 'CS', 65, 'cs345', '3'),
(56, 'gfhj', 'dfghj', 'IT', 45, 'java', '56'),
(452, 'semira', 'ssssssss', 'IT', 34, 'ITEC5677', '54'),
(456, 'edris', 'mohammed', 'IT', 45, 'ITEC5677', '3');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `up_id` int(10) NOT NULL,
  `image1` mediumtext NOT NULL,
  `image2` mediumtext NOT NULL,
  `image3` mediumtext NOT NULL,
  `image4` mediumtext NOT NULL,
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`up_id`, `image1`, `image2`, `image3`, `image4`) VALUES
(0, '18268610_502457310145276_6159506603071777216_n.jpg', '18193688_501974580193549_963850773766702903_n.jpg', '18198397_502128676844806_6782655970542776005_n.jpg', '18194704_501485376909136_7206923223628759879_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(25) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `head_id` int(10) NOT NULL,
  `Inst_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` int(21) NOT NULL,
  `location` varchar(200) NOT NULL,
  `dep_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `user_status` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `head_id`, `Inst_id`, `username`, `email`, `phone`, `location`, `dep_name`, `password`, `date`, `user_status`) VALUES
(8, 'semira', 'sherefa', 33, 0, 'test', 'df@gamil.com', 0, 'uploads/18198397_502128676844806_6782655970542776005_n.jpg', '', 'dd', '2019-05-16', 0),
(15, 'getensh', 'maru', 0, 45, 'gete', 'ge@gamil.com', 901172334, 'uploads/18198517_501448580246149_1499544472322398909_n.jpg', 'IT', 'gh', '2019-05-19', 1),
(17, 'kidane', 'mare', 0, 65, 'kedi', 'ke@gamil.com', 2147483647, 'uploads/18198397_502128676844806_6782655970542776005_n.jpg', 'CS', 'fff', '2019-05-19', 0),
(18, 'vnbm', 'cvbn', 0, 0, 'ghjgg', 'ghj@gamil.com', 1234567, 'uploads/An_Amharic_stemmer_reducing_words_to_their_citatio.pdf', 'CS', 'gh', '2019-06-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE IF NOT EXISTS `useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `course_code` varchar(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE IF NOT EXISTS `user_login` (
  `user_login_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `login_date` date NOT NULL,
  `logout_date` date NOT NULL,
  `admin_id` int(10) NOT NULL,
  PRIMARY KEY (`user_login_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=229 ;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_login_id`, `username`, `login_date`, `logout_date`, `admin_id`) VALUES
(13, 'hiba', '2019-05-21', '0000-00-00', 2),
(14, 'hiba', '2019-05-21', '0000-00-00', 2),
(15, '', '0000-00-00', '2019-05-21', 0),
(16, '', '0000-00-00', '2019-05-21', 0),
(17, '', '0000-00-00', '2019-05-21', 0),
(18, '', '0000-00-00', '2019-05-21', 0),
(19, 'hiba', '2019-05-21', '0000-00-00', 2),
(20, '', '0000-00-00', '2019-05-21', 0),
(21, 'hiba', '2019-05-22', '0000-00-00', 2),
(22, '', '0000-00-00', '2019-05-24', 0),
(23, '', '0000-00-00', '2019-05-24', 0),
(24, '', '0000-00-00', '2019-05-24', 0),
(25, '', '0000-00-00', '2019-05-24', 0),
(26, '', '0000-00-00', '2019-05-24', 0),
(27, 'hiba', '2019-05-28', '0000-00-00', 2),
(28, 'hiba', '2019-05-28', '0000-00-00', 2),
(29, 'hiba', '2019-05-28', '0000-00-00', 2),
(30, 'hiba', '2019-05-28', '0000-00-00', 2),
(31, 'hiba', '2019-05-28', '0000-00-00', 2),
(32, 'hiba', '2019-05-29', '0000-00-00', 2),
(33, '', '0000-00-00', '2019-05-29', 0),
(34, 'hiba', '2019-05-29', '0000-00-00', 2),
(35, '', '0000-00-00', '2019-05-29', 0),
(36, '', '0000-00-00', '2019-05-30', 0),
(37, '', '0000-00-00', '2019-05-30', 0),
(38, '', '0000-00-00', '2019-05-30', 0),
(39, '', '0000-00-00', '2019-05-30', 0),
(40, '', '0000-00-00', '2019-05-30', 0),
(41, '', '0000-00-00', '2019-05-31', 0),
(42, 'hiba', '2019-05-31', '0000-00-00', 2),
(43, '', '0000-00-00', '2019-05-31', 0),
(44, '', '0000-00-00', '2019-05-31', 0),
(45, '', '0000-00-00', '2019-05-31', 0),
(46, '', '0000-00-00', '2019-05-31', 0),
(47, '', '0000-00-00', '2019-05-31', 0),
(48, '', '0000-00-00', '2019-06-01', 0),
(49, '', '0000-00-00', '2019-06-01', 0),
(50, '', '0000-00-00', '2019-06-01', 0),
(51, '', '0000-00-00', '2019-06-01', 0),
(52, '', '0000-00-00', '2019-06-01', 0),
(53, '', '0000-00-00', '2019-06-01', 0),
(54, '', '0000-00-00', '2019-06-01', 0),
(55, '', '0000-00-00', '2019-06-01', 0),
(56, '', '0000-00-00', '2019-06-01', 0),
(57, '', '0000-00-00', '2019-06-01', 0),
(58, '', '0000-00-00', '2019-06-01', 0),
(59, '', '0000-00-00', '2019-06-01', 0),
(60, '', '0000-00-00', '2019-06-01', 0),
(61, '', '0000-00-00', '2019-06-02', 0),
(62, '', '0000-00-00', '2019-06-02', 0),
(63, 'hiba', '2019-06-02', '0000-00-00', 2),
(64, '', '0000-00-00', '2019-06-02', 0),
(65, 'hiba', '2019-06-02', '0000-00-00', 2),
(66, 'hiba', '2019-06-02', '0000-00-00', 2),
(67, '', '0000-00-00', '2019-06-02', 0),
(68, '', '0000-00-00', '2019-06-02', 0),
(69, '', '0000-00-00', '2019-06-02', 0),
(70, '', '0000-00-00', '2019-06-02', 0),
(71, '', '0000-00-00', '2019-06-02', 0),
(72, '', '0000-00-00', '2019-06-03', 0),
(73, '', '0000-00-00', '2019-06-03', 0),
(74, '', '0000-00-00', '2019-06-03', 0),
(75, '', '0000-00-00', '2019-06-03', 0),
(76, '', '0000-00-00', '2019-06-03', 0),
(77, '', '0000-00-00', '2019-06-03', 0),
(78, 'hiba', '2019-06-03', '0000-00-00', 2),
(79, 'hiba', '2019-06-03', '0000-00-00', 2),
(80, 'hiba', '2019-06-03', '0000-00-00', 2),
(81, '', '0000-00-00', '2019-06-03', 0),
(82, 'hiba', '2019-06-04', '0000-00-00', 2),
(83, 'hiba', '2019-06-04', '0000-00-00', 2),
(84, 'hiba', '2019-06-04', '0000-00-00', 2),
(85, 'hiba', '2019-06-04', '0000-00-00', 2),
(86, '', '0000-00-00', '2019-06-04', 0),
(87, 'hiba', '2019-06-04', '0000-00-00', 2),
(88, '', '0000-00-00', '2019-06-04', 0),
(89, 'hiba', '2019-06-04', '0000-00-00', 2),
(90, '', '0000-00-00', '2019-06-04', 0),
(91, 'hiba', '2019-06-04', '0000-00-00', 2),
(92, '', '0000-00-00', '2019-06-04', 0),
(93, '', '0000-00-00', '2019-06-04', 0),
(94, '', '0000-00-00', '2019-06-04', 0),
(95, '', '0000-00-00', '2019-06-04', 0),
(96, '', '0000-00-00', '2019-06-08', 0),
(97, '', '0000-00-00', '2019-06-08', 0),
(98, '', '0000-00-00', '2019-06-08', 0),
(99, '', '0000-00-00', '2019-06-08', 0),
(100, '', '0000-00-00', '2019-06-08', 0),
(101, '', '0000-00-00', '2019-06-08', 0),
(102, '', '0000-00-00', '2019-06-08', 0),
(103, '', '0000-00-00', '2019-06-08', 0),
(104, 'hiba', '2019-06-10', '0000-00-00', 2),
(105, 'hiba', '2019-06-11', '0000-00-00', 2),
(106, '', '0000-00-00', '2019-06-11', 0),
(107, '', '0000-00-00', '2019-06-11', 0),
(108, '', '0000-00-00', '2019-06-11', 0),
(109, 'hiba', '2019-06-12', '0000-00-00', 2),
(110, '', '0000-00-00', '2019-06-12', 0),
(111, '', '0000-00-00', '2019-06-12', 0),
(112, '', '0000-00-00', '2019-06-12', 0),
(113, '', '0000-00-00', '2019-06-12', 0),
(114, '', '0000-00-00', '2019-06-12', 0),
(115, '', '0000-00-00', '2019-06-12', 0),
(116, '', '0000-00-00', '2019-06-12', 0),
(117, '', '0000-00-00', '2019-06-12', 0),
(118, '', '0000-00-00', '2019-06-12', 0),
(119, '', '0000-00-00', '2019-06-12', 0),
(120, '', '0000-00-00', '2019-06-12', 0),
(121, '', '0000-00-00', '2019-06-12', 0),
(122, '', '0000-00-00', '2019-06-12', 0),
(123, '', '0000-00-00', '2019-06-12', 0),
(124, '', '0000-00-00', '2019-06-12', 0),
(125, '', '0000-00-00', '2019-06-12', 0),
(126, '', '0000-00-00', '2019-06-12', 0),
(127, '', '0000-00-00', '2019-06-12', 0),
(128, '', '0000-00-00', '2019-06-12', 0),
(129, '', '0000-00-00', '2019-06-13', 0),
(130, '', '0000-00-00', '2019-06-13', 0),
(131, 'hiba', '2019-06-13', '0000-00-00', 2),
(132, 'hiba', '2019-06-13', '0000-00-00', 2),
(133, '', '0000-00-00', '2019-06-13', 0),
(134, '', '0000-00-00', '2019-06-13', 0),
(135, 'hiba', '2019-06-13', '0000-00-00', 2),
(136, 'hiba', '2019-06-13', '0000-00-00', 2),
(137, 'hiba', '2019-06-13', '0000-00-00', 2),
(138, '', '0000-00-00', '2019-06-13', 0),
(139, '', '0000-00-00', '2019-06-13', 0),
(140, '', '0000-00-00', '2019-06-13', 0),
(141, '', '0000-00-00', '2019-06-13', 0),
(142, '', '0000-00-00', '2019-06-13', 0),
(143, '', '0000-00-00', '2019-06-13', 0),
(144, '', '0000-00-00', '2019-06-13', 0),
(145, '', '0000-00-00', '2019-06-13', 0),
(146, '', '0000-00-00', '2019-06-13', 0),
(147, '', '0000-00-00', '2019-06-17', 0),
(148, '', '0000-00-00', '2019-06-18', 0),
(149, '', '0000-00-00', '2019-06-18', 0),
(150, 'hiba', '2019-06-18', '0000-00-00', 2),
(151, '', '0000-00-00', '2019-06-18', 0),
(152, '', '0000-00-00', '2019-06-18', 0),
(153, '', '0000-00-00', '2019-06-18', 0),
(154, '', '0000-00-00', '2019-06-19', 0),
(155, 'hiba', '2019-06-19', '0000-00-00', 2),
(156, '', '0000-00-00', '2019-06-19', 0),
(157, '', '0000-00-00', '2019-06-19', 0),
(158, '', '0000-00-00', '2019-06-19', 0),
(159, '', '0000-00-00', '2019-06-19', 0),
(160, '', '0000-00-00', '2019-06-19', 0),
(161, '', '0000-00-00', '2019-06-19', 0),
(162, '', '0000-00-00', '2019-06-19', 0),
(163, '', '0000-00-00', '2019-06-19', 0),
(164, '', '0000-00-00', '2019-06-19', 0),
(165, '', '0000-00-00', '2019-06-19', 0),
(166, '', '0000-00-00', '2019-06-19', 0),
(167, '', '0000-00-00', '2019-06-19', 0),
(168, '', '0000-00-00', '2019-06-19', 0),
(169, '', '0000-00-00', '2019-06-19', 0),
(170, '', '0000-00-00', '2019-06-19', 0),
(171, '', '0000-00-00', '2019-06-19', 0),
(172, '', '0000-00-00', '2019-06-19', 0),
(173, 'hiba', '2019-06-19', '0000-00-00', 2),
(174, '', '0000-00-00', '2019-06-19', 0),
(175, 'hiba', '2019-06-19', '0000-00-00', 2),
(176, '', '0000-00-00', '2019-06-20', 0),
(177, '', '0000-00-00', '2019-06-20', 0),
(178, '', '0000-00-00', '2019-06-20', 0),
(179, '', '0000-00-00', '2019-06-20', 0),
(180, '', '0000-00-00', '2019-06-20', 0),
(181, '', '0000-00-00', '2019-06-20', 0),
(182, '', '0000-00-00', '2019-06-20', 0),
(183, '', '0000-00-00', '2019-06-20', 0),
(184, '', '0000-00-00', '2019-06-20', 0),
(185, '', '0000-00-00', '2019-06-20', 0),
(186, '', '0000-00-00', '2019-06-20', 0),
(187, '', '0000-00-00', '2019-06-20', 0),
(188, '', '0000-00-00', '2019-06-20', 0),
(189, '', '0000-00-00', '2019-06-20', 0),
(190, '', '0000-00-00', '2019-06-20', 0),
(191, '', '0000-00-00', '2019-06-20', 0),
(192, '', '0000-00-00', '2019-06-20', 0),
(193, '', '0000-00-00', '2019-06-20', 0),
(194, '', '0000-00-00', '2019-06-20', 0),
(195, '', '0000-00-00', '2019-06-20', 0),
(196, '', '0000-00-00', '2019-06-20', 0),
(197, '', '0000-00-00', '2019-06-20', 0),
(198, '', '0000-00-00', '2019-06-20', 0),
(199, '', '0000-00-00', '2019-06-20', 0),
(200, '', '0000-00-00', '2019-06-20', 0),
(201, '', '0000-00-00', '2019-06-20', 0),
(202, '', '0000-00-00', '2019-06-20', 0),
(203, '', '0000-00-00', '2019-06-20', 0),
(204, '', '0000-00-00', '2019-06-20', 0),
(205, '', '0000-00-00', '2019-06-20', 0),
(206, '', '0000-00-00', '2019-06-20', 0),
(207, '', '0000-00-00', '2019-06-20', 0),
(208, '', '0000-00-00', '2019-06-20', 0),
(209, '', '0000-00-00', '2019-06-20', 0),
(210, '', '0000-00-00', '2019-06-20', 0),
(211, '', '0000-00-00', '2019-06-20', 0),
(212, '', '0000-00-00', '2019-06-20', 0),
(213, '', '0000-00-00', '2019-06-20', 0),
(214, '', '0000-00-00', '2019-06-20', 0),
(215, '', '0000-00-00', '2019-06-21', 0),
(216, '', '0000-00-00', '2019-06-21', 0),
(217, '', '0000-00-00', '2019-06-21', 0),
(218, '', '0000-00-00', '2019-06-21', 0),
(219, '', '0000-00-00', '2019-06-21', 0),
(220, '', '0000-00-00', '2019-06-21', 0),
(221, '', '0000-00-00', '2019-06-21', 0),
(222, '', '0000-00-00', '2019-06-21', 0),
(223, '', '0000-00-00', '2019-06-21', 0),
(224, '', '0000-00-00', '2019-06-21', 0),
(225, '', '0000-00-00', '2019-06-21', 0),
(226, '', '0000-00-00', '2019-06-22', 0),
(227, '', '0000-00-00', '2019-06-22', 0),
(228, '', '0000-00-00', '2019-06-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `course_code` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `course_code` (`course_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `course_code`) VALUES
(9, ' videos/sadat kemal best due.mp4', '10'),
(15, ' Fix - DataTables warninig_ table id=manageTable - Invalid JSON response.mp4', '0'),
(16, ' Fix - DataTables warninig_ table id=manageTable - Invalid JSON response.mp4', 'ITEC345'),
(17, ' Fatal error Uncaught Error Call to a member function query on null or string in .mp4', 'ITEC5677'),
(18, ' Fatal error Uncaught Error Call to a member function query on null or string in .mp4', 'ITEC345');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `head` (`head_id`);

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `head` (`head_id`);

--
-- Constraints for table `inst_class`
--
ALTER TABLE `inst_class`
  ADD CONSTRAINT `inst_class_ibfk_1` FOREIGN KEY (`inst_class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `post_notices`
--
ALTER TABLE `post_notices`
  ADD CONSTRAINT `post_notices_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `head` (`head_id`);
