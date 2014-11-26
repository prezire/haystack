-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2014 at 01:57 PM
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
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `birth_date` date NOT NULL,
  `expected_salary` int(11) NOT NULL,
  `internship_position` varchar(255) NOT NULL,
  `preferred_country` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `resume_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `user_id`, `birth_date`, `expected_salary`, `internship_position`, `preferred_country`, `job_title`, `resume_path`) VALUES
(7, 20, '0000-00-00', 12, 'sdf', 'Bahamas', 'Web Developer', ''),
(8, 21, '0000-00-00', 1900, 'Chef', 'Bahamas', 'Web Developer', ''),
(9, 22, '0000-00-00', 123, 'adsf', 'All Countries', 'Project Manager', ''),
(10, 23, '0000-00-00', 123, 'Management', 'All Countries', 'Nurse', ''),
(11, 24, '0000-00-00', 123, 'Management', 'All Countries', 'Engineer', '');

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
-- Table structure for table `company_ams`
--

CREATE TABLE IF NOT EXISTS `company_ams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE IF NOT EXISTS `employers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `user_id`) VALUES
(6, 17);

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE IF NOT EXISTS `internships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_from` varchar(255) NOT NULL,
  `date_to` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `shift_pattern` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `vacancy_count` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `employer_id` (`employer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `internships`
--

INSERT INTO `internships` (`id`, `name`, `description`, `date_from`, `date_to`, `industry`, `working_hours`, `shift_pattern`, `salary`, `vacancy_count`, `employer_id`) VALUES
(2, 'adlfk', ';adslkfjlskf', '1', '1', 'Information Technology', 'fasdf', '1', '1000', 1, 6),
(3, 'Something Medical', 'Test', '2014-11-13', '2014-11-14', 'Medical / Therapy Services', '8', '0', '3000', 10, 6);

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
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_applicant_comments`
--

CREATE TABLE IF NOT EXISTS `subscriber_applicant_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriber_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `landline` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `alternate_email` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `title`, `full_name`, `enabled`, `enable_token`, `landline`, `mobile`, `address`, `nationality`, `alternate_email`, `image_path`, `image_filename`) VALUES
(17, 3, 'e@e.com', '1', 'Mrs.', 'sdlfkj', 0, '', '3234', '123', 'fjlsd', 'fldsk', 'e1@e.com', 'ceb89d4816838082bba7759a0ba1abe7.jpg', 'work2.jpg'),
(19, 1, 'a@a.com', '1', 'Mrs.', 'Admin', 0, '', '', '', '', '', '', '3f957d0badb26c516594b6dbe9f9278f.jpg', 'work4.jpg'),
(20, 2, 'a@b.com', '1', 'Mrs.', 'sdf', 0, '', '123', '123', 'sdf', 'asdf', 'fsldkfj@fsldkfj.com', '1e526c8b5850a70a9e6fd4913ac09df4.jpg', 'work1.jpg'),
(21, 2, 'a@c.com', '1', 'Mrs.', 'culpa qui officia deserunt mollit', 0, '', '123', '231', 'sdaf', 'sdf', 'sdf', '64f202d92a4ba438d578bf10954e7086.jpg', 'work2.jpg'),
(22, 2, 'a@d.com', '1', 'Mrs.', 'culpa qui officia deserunt mollit', 0, '', '213', '123', 'dfa', 'sadf', 'sdf', 'c9ff9f5167c9a3edfd25f531578f852b.jpg', 'work3.jpg'),
(23, 2, 'a@e.com', '1', 'Mrs.', 'Lorem Ipsum', 0, '', '123', '123', 'afslfkj', 'slkfj', 'fsldkfj@lsdkf.com', 'a0c60be7284b8cdd25054d3faebd1292.jpg', 'work6.jpg'),
(24, 2, 'f@a.com', '1', 'Mrs.', 'Lorem Ipsum', 0, '', '123', '123', 'afsldk', 'lakdf', 'fslkdf@fslkdf.com', '4e2a4bd0ef28d7f9658d4a0ae4e7b353.jpg', 'work5.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicants`
--
ALTER TABLE `applicants`
  ADD CONSTRAINT `applicants_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employers`
--
ALTER TABLE `employers`
  ADD CONSTRAINT `employers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `internships`
--
ALTER TABLE `internships`
  ADD CONSTRAINT `internships_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
