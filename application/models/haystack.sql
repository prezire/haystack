-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2015 at 09:45 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `haystack_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_informations`
--

CREATE TABLE IF NOT EXISTS `additional_informations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resume_id` int(11) NOT NULL,
  `information` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `resume_id` (`resume_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `analytics_report_emailers`
--

CREATE TABLE IF NOT EXISTS `analytics_report_emailers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(255) NOT NULL,
  `frequency` varchar(10) NOT NULL,
  `recipients` varchar(500) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `report_type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `expected_salary` float NOT NULL,
  `desired_internship_position` varchar(255) NOT NULL,
  `preferred_country` varchar(255) NOT NULL,
  `current_position_title` varchar(255) NOT NULL,
  `resume_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `desired_internship_position` (`desired_internship_position`),
  FULLTEXT KEY `preferred_country` (`preferred_country`),
  FULLTEXT KEY `current_position_title` (`current_position_title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `user_id`, `birth_date`, `expected_salary`, `desired_internship_position`, `preferred_country`, `current_position_title`, `resume_path`) VALUES
(33, 59, '0000-00-00', 0, 'Web Developer', 'All Countries', 'Student', ''),
(32, 58, '0000-00-00', 0, 'Manager', 'All Countries', 'Web Developer', '');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `publish_state` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `content`, `slug`, `publish_state`, `tags`) VALUES
(1, 'Internship Basics', 'An internship isn''t just any temporary job. It can be a bridge to your life''s work or an experiment in a career that interests you. Maybe you''ve heard a lot about them from parents, counselors or a co-worker who used one to transition from another field. You might be wondering, "What''s in it for me?"\r\n\r\nIf you''ve got questions about whether interning is the right way to achieve your career goals, this is the place to start. We''ll begin with the basic definiton and move to answering many of the most common questions people have about taking on the role of the intern.\r\n\r\nClick one of the sections below, and let''s get rolling!', 'internship-basics', '2014-11-12', 'internship basics');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE IF NOT EXISTS `certifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resume_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `from_user_id` (`from_user_id`),
  KEY `to_user_id` (`to_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `from_user_id`, `to_user_id`, `comment`, `date_time`, `approved`) VALUES
(1, 17, 19, 'This is a test comment.', '2014-11-17 16:55:25', 1),
(9, 17, 59, 'testxxxx', '2015-01-18 08:08:43', 0),
(10, 17, 59, 'fesfe', '2015-01-13 13:22:06', 1),
(11, 17, 59, 'fsdf', '2015-01-13 13:24:06', 1),
(12, 17, 59, 'fsdkfjl', '2015-01-13 13:25:09', 1),
(13, 17, 59, 'ldskfjslf', '2015-01-13 13:27:55', 1),
(14, 17, 59, 'ldskfjslf', '2015-01-13 13:28:08', 1),
(15, 17, 59, 'sldkfj', '2015-01-13 13:29:44', 1),
(16, 17, 59, 'sldfkj', '2015-01-13 13:31:40', 1),
(17, 17, 59, 'fsdkf', '2015-01-13 13:32:11', 1),
(18, 17, 59, 'vdklf', '2015-01-13 13:32:26', 1),
(19, 17, 59, 'asdflk', '2015-01-13 13:33:09', 1),
(20, 17, 59, 'fsdlkf', '2015-01-13 13:37:43', 1),
(21, 17, 59, 'fsldfj', '2015-01-13 13:38:06', 1),
(22, 17, 59, 'sdlkfj', '2015-01-13 13:38:14', 1),
(23, 17, 59, 'slkdfj', '2015-01-13 13:44:59', 1),
(24, 17, 59, 'sdklfj', '2015-01-13 13:54:25', 1),
(25, 17, 59, 'fsdlkfj', '2015-01-13 13:55:46', 1),
(26, 17, 59, 'sdfj sldfkj', '2015-01-13 13:55:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resume_id` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `resume_id` (`resume_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `resume_id`, `degree`, `field_of_study`, `school`, `country`, `city`, `from`, `to`) VALUES
(2, 2, 'bsit', 'it', 'usjr', 'Albania', 'city', '2015-01-12', '2015-01-15'),
(3, 2, 'pm', 'mgt', 'up', 'Algeria', 'city 1', '2015-01-13', '2015-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE IF NOT EXISTS `employers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `user_id`, `organization_name`) VALUES
(6, 17, 'test org'),
(7, 60, 'org1');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE IF NOT EXISTS `internships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `industry` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `shift_pattern` varchar(255) NOT NULL,
  `salary` float NOT NULL,
  `vacancy_count` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `industry` (`industry`),
  FULLTEXT KEY `description` (`description`),
  FULLTEXT KEY `address` (`address`),
  FULLTEXT KEY `country` (`country`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `name`, `description`, `date_from`, `date_to`, `industry`, `address`, `country`, `working_hours`, `shift_pattern`, `salary`, `vacancy_count`, `employer_id`) VALUES
(1, 'sxx', 'asdf', '2014-12-02', '2014-12-10', 'Information Technology', '', '', 'sdfasdf', 'asdfsadf', 1, 1, 6),
(2, 'Something Medical', 'test', '2014-12-02', '2015-12-30', 'Medical / Therapy Services', '', '', 'asdf', 'adsf', 1, 1, 6),
(3, 'test internship', 'Role:\r\n- some role\r\n\r\nRequirements:\r\n- some req\r\n\r\nSkills:\r\n- some skills\r\n- ', '2015-01-01', '2015-11-21', 'Architecture / Interior Design', 'somewhere', 'Algeria', '4', '3 Shift or Semi Continuous (8 hour shifts, averaging 40 hours per week)', 1, 2, 6),
(4, 'some info tech', 'alskdf\r\nasd\r\nfa\r\nsdf\r\nas\r\n\r\nadsf\r\nadf\r\nasf\r\n-dfaf\r\n\r\n\r\nadsf', '2015-01-01', '2015-01-31', 'Information Technology', 'addr', 'Afghanistan', '3', 'Night Shift', 3, 3, 6),
(11, 'Project Manager', 'sldfkj lf\r\nasdf\r\na\r\ndf', '2015-01-01', '2015-01-31', 'Accounting / Auditing / Taxation', 'sldkfj', 'Albania', '', '2 Shift', 1, 1, 7),
(12, 'Graphic Artist', 'Job Description: Something.\r\nRequirements: Must be awesome in Photoshop.', '2015-01-21', '2015-01-31', 'Advertising / Media', 'sdf', 'All Countries', '9 AM - 6 PM', '3 Shift or Semi Continuous (8 hour shifts, averaging 40 hours per week)', 1000, 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `internship_applications`
--

CREATE TABLE IF NOT EXISTS `internship_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `date_time_applied` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `internship_applications`
--

INSERT INTO `internship_applications` (`id`, `applicant_id`, `internship_id`, `date_time_applied`) VALUES
(14, 32, 1, '2015-01-30 03:19:34'),
(13, 33, 1, '2015-01-27 05:11:42'),
(12, 33, 4, '2015-01-27 05:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `internship_impressions`
--

CREATE TABLE IF NOT EXISTS `internship_impressions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `internship_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `internship_impressions`
--

INSERT INTO `internship_impressions` (`id`, `ip_address`, `internship_id`, `address`, `timestamp`) VALUES
(1, '0', 2, '', '2015-02-16 13:06:12'),
(2, '0', 2, '', '2015-02-16 13:06:16'),
(3, '192.168.56.1', 2, '', '2015-02-16 14:26:09'),
(4, '192.168.56.1', 2, '', '2015-02-16 14:26:21'),
(5, '180.191.112.3', 2, 'Manila, MM, Philippines', '2015-02-16 14:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `organization_id` (`organization_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` int(50) NOT NULL,
  `state` int(50) NOT NULL,
  `country` int(50) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `landline` int(15) NOT NULL,
  `mobile` int(15) NOT NULL,
  `fax` int(15) NOT NULL,
  `email` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pooled_applicants`
--

CREATE TABLE IF NOT EXISTS `pooled_applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicant_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `notes` text NOT NULL,
  `date_time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pooled_applicants`
--

INSERT INTO `pooled_applicants` (`id`, `applicant_id`, `employer_id`, `notes`, `date_time_created`) VALUES
(1, 32, 6, 'test', '2015-01-18 06:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE IF NOT EXISTS `resumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(255) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `current_industry` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `additional_information` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `applicant_id` (`applicant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `headline`, `applicant_id`, `availability`, `current_industry`, `qualification`, `summary`, `additional_information`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique finibus mi, sit amet egestas nisi porta nec. Ut porttitor libero nec viverra imperdiet. Pellentesque dapibus suscipit convallis. Maecenas nec dignissim erat, in posuere sapien. ', 33, 'Not applicable', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique finibus mi, sit amet egestas nisi porta nec. Ut porttitor libero nec viverra imperdiet. Pellentesque dapibus suscipit convallis. Maecenas nec dignissim erat, in posuere sapien. Nulla facilisi. Vestibulum et arcu sit amet nisi mollis porta. Praesent eu metus tristique, ultrices felis eleifend, consequat mi. Aenean et egestas urna, vel blandit lorem. Ut id dapibus nunc, a convallis purus.\r\n\r\nMorbi in mauris vel lacus auctor viverra nec at purus. Morbi accumsan, ex eu auctor tempor, erat turpis consectetur nibh, non accumsan arcu libero ac dolor. Sed finibus fringilla congue. Aliquam erat volutpat. Curabitur pharetra efficitur rutrum. Cras arcu ligula, tempus eget rhoncus a, dictum a massa. Aliquam viverra tellus ligula, eget semper lorem dapibus gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse in finibus libero. Vivamus aliquam odio eget nisl sollicitudin ultricies. Sed fringilla ut arcu vitae varius. Fusce molestie erat ante. Nullam vitae tortor finibus, mollis nunc ut, blandit sapien.', 'ai'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique finibus mi, sit amet egestas nisi porta nec. Ut porttitor libero nec viverra imperdiet. Pellentesque dapibus suscipit convallis. Maecenas nec dignissim erat, in posuere sapien. ', 32, 'Not applicable', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tristique finibus mi, sit amet egestas nisi porta nec. Ut porttitor libero nec viverra imperdiet. Pellentesque dapibus suscipit convallis. Maecenas nec dignissim erat, in posuere sapien. Nulla facilisi. Vestibulum et arcu sit amet nisi mollis porta. Praesent eu metus tristique, ultrices felis eleifend, consequat mi. Aenean et egestas urna, vel blandit lorem. Ut id dapibus nunc, a convallis purus.\r\n\r\nMorbi in mauris vel lacus auctor viverra nec at purus. Morbi accumsan, ex eu auctor tempor, erat turpis consectetur nibh, non accumsan arcu libero ac dolor. Sed finibus fringilla congue. Aliquam erat volutpat. Curabitur pharetra efficitur rutrum. Cras arcu ligula, tempus eget rhoncus a, dictum a massa. Aliquam viverra tellus ligula, eget semper lorem dapibus gravida. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse in finibus libero. Vivamus aliquam odio eget nisl sollicitudin ultricies. Sed fringilla ut arcu vitae varius. Fusce molestie erat ante. Nullam vitae tortor finibus, mollis nunc ut, blandit sapien.', 'ai');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Applicant'),
(3, 'Employer'),
(4, 'Subscriber');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resume_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `resume_id`, `name`) VALUES
(2, 2, 'test skill 1'),
(3, 2, 'test skills 2');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `user_id`) VALUES
(1, 61),
(2, 62),
(3, 63),
(4, 64),
(5, 65);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `enable_token` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `alternate_email` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `title`, `full_name`, `enabled`, `enable_token`, `password_reset_token`, `landline`, `mobile`, `address`, `city`, `state`, `country`, `nationality`, `alternate_email`, `image_path`, `image_filename`) VALUES
(17, 3, 'empl1@e.com', '1', 'Mr.', 'sdlfkj', 1, '', '', '3234', '123', 'fjlsd', '', '', 'All Countries', 'fldsk', 'e1@e.com', '73a5838236d879fc450e82504ff0ec4b.jpg', 'work3.jpg'),
(19, 1, 'a@a.com', '1', 'Mrs.', 'Admin', 0, '', '', '', '', '', '', '', '', '', '', '3f957d0badb26c516594b6dbe9f9278f.jpg', 'work4.jpg'),
(58, 2, 'appl2@a.com', '1', 'Mr.', 'fn', 1, 'ee6f0505e6cb9defc356823bafdfbbb2', '', '', '', '', '', '', 'All Countries', '', '', '', ''),
(59, 2, 'appl1@a.com', '1', 'Ms.', 'fnx', 1, '193676911309f137a4a67c420b21c4c9', '', '123', '123', 'fasd', 'city test 1', 'state test', 'Bahamas', 'adf', 'appl3@a.com', '09a6cc299a015528656af1d974b2bbb8.jpg', 'work2.jpg'),
(60, 3, 'e1@e.com', '1', 'Mr.', 'fn', 1, 'd1c6e0fdb78e0538cb0cfef94c02f203', '', '', '', '', '', '', 'All Countries', '', '', '', ''),
(61, 4, 's@scom', '1', 'Mr.', 'fn', 0, '', '', '', '', '', '', '', 'All Countries', '', '', '', ''),
(62, 4, 's@s.com', '1', 'Mr.', 'fn', 0, '7ae50df22190eb09ea2031c1c3e866e3', '', '', '', '', '', '', 'All Countries', '', '', '', ''),
(63, 4, 's2@s.com', '1', 'Mr.', 'fn', 0, '6fa0e6cfa70262b9e60d40fb88bdb92f', '', '', '', '', '', '', 'All Countries', '', '', '', ''),
(64, 4, 's3@s.com', '1', 'Mr.', 'f', 0, 'd399ea54e6b6b97fd733e789ff6530c3', '', '', '', '', '', '', 'All Countries', '', '', '', ''),
(65, 4, 'subscr1@s.com', '1', 'Mr.', 'f', 1, 'd2d688633d540ac4bc78ae6b5ef53429', '', '', '', '', '', '', 'All Countries', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `work_histories`
--

CREATE TABLE IF NOT EXISTS `work_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resume_id` int(11) NOT NULL,
  `position` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `is_current_work` tinyint(1) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `resume_id` (`resume_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `work_histories`
--

INSERT INTO `work_histories` (`id`, `resume_id`, `position`, `company`, `location`, `summary`, `is_current_work`, `from`, `to`) VALUES
(2, 2, 'something', 'som com', 'somehwere', 'test', 0, '2015-01-21', '2015-01-24');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additional_informations`
--
ALTER TABLE `additional_informations`
  ADD CONSTRAINT `additional_informations_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `employers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD CONSTRAINT `subscribers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `work_histories`
--
ALTER TABLE `work_histories`
  ADD CONSTRAINT `work_histories_ibfk_1` FOREIGN KEY (`resume_id`) REFERENCES `resumes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
