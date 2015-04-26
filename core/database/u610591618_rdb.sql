-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2015 at 04:49 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u610591618_rdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `ssn` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `concentration` varchar(255) NOT NULL,
  `starting_year` year(4) NOT NULL,
  `ending_year` year(4) NOT NULL,
  `course` varchar(255) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `degree` varchar(20) NOT NULL,
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dir_user`
--

CREATE TABLE IF NOT EXISTS `dir_user` (
  `dir_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `ssn` int(11) DEFAULT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `area_code` bigint(6) NOT NULL,
  PRIMARY KEY (`dir_id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `dir_user`
--

INSERT INTO `dir_user` (`dir_id`, `ssn`, `fname`, `lname`, `user_name`, `mobile`, `email`, `password`, `status`, `gender`, `dob`, `location`, `website`, `area_code`) VALUES
(1, NULL, 'dfsa', 'dsfsd', 'dfsa1429357534', 0, 'saf@fdfs.com', '95bce394d432997231e7ea96a978a6533b65e97a', 0, 'M', '1935-01-01', '', '', 0),
(2, NULL, 'awq', 'sd', 'qwe123', 0, 'sds@h.com', '8cb2237d0679ca88db6464eac60da96345513964', 1, 'F', '1935-01-01', '', '', 0),
(3, NULL, 'QALEAT', 'dcsc', 'QALEAT1429359905', 0, 'qaleat1978@dayrep.com', '95bce394d432997231e7ea96a978a6533b65e97a', 0, 'M', '1935-01-01', '', '', 0),
(4, NULL, 'gaurav', 'arya', 'gaurav.3437', 8447855205, 'gaurav.arya37@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1, 'Male', '2015-04-06', 'noida', 'gauravaryalive.in', 25252),
(5, NULL, 'Gaurav', 'wew', 'Gaurav1429982775', 0, 'we@eer.com', '6cd4a90adfa66116d2e5ca0e5196d497f869a243', 0, 'M', '1935-01-01', '', '', 0),
(6, NULL, 'sadasf', 'fdsfsd', 'sadasf1429983454', 0, 'dsfsd@fsg.com', '95bce394d432997231e7ea96a978a6533b65e97a', 0, 'F', '1935-01-01', '', '', 0),
(7, NULL, 'Remo', 'dosa', 'Remo1429992639', 0, 'remo.dosa34@gmail.com', '95bce394d432997231e7ea96a978a6533b65e97a', 0, 'F', '1935-01-01', '', '', 0),
(8, NULL, 'martin', 'garte', 'martin1429992855', 0, 'martin@gmail.com', '95bce394d432997231e7ea96a978a6533b65e97a', 0, 'F', '1935-01-01', '', '', 0),
(9, NULL, 'chutiya', 'ram', 'chutiya1429993405', 0, 'chu@gmail.com', '95bce394d432997231e7ea96a978a6533b65e97a', 0, 'F', '1935-01-01', '', '', 0),
(10, NULL, 'hello', 'world', 'hello1429996481', 0, 'hello@gmail.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(11, NULL, 'aks', 'dwi', 'aks1429996755', 0, 'ada@fmaf.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(12, NULL, 'gopu', 'rouge', 'gopu1429997187', 0, 'roguenamtion@gmail.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'M', '1935-01-01', '', '', 0),
(13, NULL, 'fafs', 'dsf', 'fafs1429997378', 0, 'dsf@fsf.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'M', '1935-01-01', '', '', 0),
(14, NULL, 'asda', 'dsfs', 'asda1430044595', 0, 'dsf@sdf.om', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'M', '1935-01-01', '', '', 0),
(15, NULL, 'adfa', 'sfdfas', 'adfa1430044865', 0, 'sdfs@gmail.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(16, NULL, 'ggfsfs', 'fsfdsaa', 'ggfsfs1430044943', 0, 'ddfddssdsd@sds.fdfsd', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(17, NULL, 'afasf', 'fsdfs', 'afasf1430045060', 0, 'fsdfssdff@fsdfsfs.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(18, NULL, 'fssfs', 'fsdfsfs', 'fssfs1430045422', 0, 'dsfsd@sfs.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(19, NULL, 'asfasfd', 'sdfgs', 'asfasfd1430045954', 0, 'dsgfsgdfgdsgsfdgsd@dsgs.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1953-01-01', '', '', 0),
(20, NULL, 'afasgfdsgds', 'sdfsdf', 'afasgfdsgds143004656', 0, 'fsdfagasdg@fdfs.dfsf', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(21, NULL, 'afa', 'fdgdffg', 'afa1430046703', 0, 'fdgdsgd@sgs.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'M', '1935-10-01', '', '', 0),
(22, NULL, 'fsfsfsg', 'fsdfddsf', 'fsfsfsg1430046763', 0, 'fsdfsddfs@dsdsd.sdffsdsd', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(23, NULL, 'fsdsfdfs', 'SDDFFDGFDG', 'fsdsfdfs1430046871', 0, 'SDDSDSF@FFS.COM', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(24, 65, 'ffffv', 'rffdfd', 'ffffv1430046925', 0, 'ffff@hhhj.sddsds', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0),
(25, 66, 'fff', 'vvghvgcg', 'fff1430046989', 0, 'vvghgvvghh@vvhj.com', '96b21c810cf72494fca6eb02bf1487c42b141442', 0, 'F', '1935-01-01', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `extra_detail`
--

CREATE TABLE IF NOT EXISTS `extra_detail` (
  `ssn` bigint(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `motive` text NOT NULL,
  `dream_job` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facebook_users`
--

CREATE TABLE IF NOT EXISTS `facebook_users` (
  `fb_ssn` bigint(20) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `birthday` varchar(12) DEFAULT NULL,
  `email` varchar(1024) DEFAULT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `name` varchar(550) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `link` varchar(2048) NOT NULL,
  `locale` varchar(50) NOT NULL,
  `updated_time` varchar(1024) NOT NULL,
  `verified` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`fb_ssn`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `facebook_users`
--

INSERT INTO `facebook_users` (`fb_ssn`, `id`, `birthday`, `email`, `first_name`, `last_name`, `name`, `gender`, `link`, `locale`, `updated_time`, `verified`) VALUES
(1, 785294088183260, '07/24/1994', 'gaurav.arya37@gmail.com', 'Gaurav', 'Arya', 'Gaurav Arya', 'male', 'https://www.facebook.com/app_scoped_user_id/785294088183260/', 'en_US', '2015-02-19T19:23:11+0000', 1),
(2, 749625871763475, '', 'aadiithegame22@gmail.com', 'Gaurav', 'Arya', 'Gaurav Arya', 'male', 'https://www.facebook.com/app_scoped_user_id/749625871763475/', 'en_US', '2012-07-17T17:30:55+0000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fb_user`
--

CREATE TABLE IF NOT EXISTS `fb_user` (
  `fb_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `org_id` bigint(16) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `area_code` int(6) NOT NULL,
  PRIMARY KEY (`fb_id`),
  UNIQUE KEY `org_id` (`org_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `google_user`
--

CREATE TABLE IF NOT EXISTS `google_user` (
  `go_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `google_id` decimal(21,0) NOT NULL,
  `fname` varchar(35) NOT NULL,
  `lname` varchar(35) NOT NULL,
  `google_name` varchar(60) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `google_email` varchar(60) NOT NULL,
  `profile_link` varchar(1024) NOT NULL,
  `google_picture_link` varchar(1024) NOT NULL,
  `dob` date NOT NULL,
  `website` varchar(255) NOT NULL,
  `mob` bigint(12) NOT NULL,
  `location` varchar(255) NOT NULL,
  `area_code` int(12) NOT NULL,
  PRIMARY KEY (`go_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `google_user`
--

INSERT INTO `google_user` (`go_id`, `google_id`, `fname`, `lname`, `google_name`, `user_name`, `google_email`, `profile_link`, `google_picture_link`, `dob`, `website`, `mob`, `location`, `area_code`) VALUES
(1, 109496505151934026536, '', '', 'gaurav arya', '', 'gaurav.arya37@gmail.com', 'https://plus.google.com/109496505151934026536', 'https://lh4.googleusercontent.com/-KRaPmEQCPlo/AAAAAAAAAAI/AAAAAAAACWY/W7Ww0JThbMg/photo.jpg', '0000-00-00', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `high_school`
--

CREATE TABLE IF NOT EXISTS `high_school` (
  `ssn` bigint(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `school_name` varchar(100) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `description` varchar(100) NOT NULL,
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ssn` bigint(12) NOT NULL,
  `image_link` longtext NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` bigint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `ssn`, `image_link`, `created`, `status`) VALUES
(1, 4, 'resume/184411-1418300618-face7.jpg', '2014-12-11 12:23:38', 0),
(14, 4, 'resume/682829-1420880594-sem6.PNG', '2015-01-10 09:03:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `intermediate`
--

CREATE TABLE IF NOT EXISTS `intermediate` (
  `ssn` bigint(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `passing_year` year(4) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `username` varchar(50) NOT NULL,
  `mssg` varchar(50) NOT NULL,
  `readed` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ssn` bigint(12) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `ssn`, `created`, `body`) VALUES
(1, 4, '2014-12-11 12:24:04', 'hello World!!....'),
(2, 4, '2014-12-11 12:26:36', '      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 4, '2014-12-11 12:27:34', '\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n\n '),
(5, 4, '2014-12-12 11:40:22', 'What the hell');

-- --------------------------------------------------------

--
-- Table structure for table `public_data`
--

CREATE TABLE IF NOT EXISTS `public_data` (
  `ssn` bigint(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `public_image` varchar(1024) DEFAULT NULL,
  `public_pdf` varchar(1024) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resume_content`
--

CREATE TABLE IF NOT EXISTS `resume_content` (
  `ssn` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(1024) NOT NULL,
  `zipcode` bigint(10) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `hi_school_name` varchar(1024) NOT NULL,
  `hi_year` year(4) NOT NULL,
  `inter_school_name` varchar(1024) NOT NULL,
  `inter_year` year(4) NOT NULL,
  `inter_branch` varchar(1024) NOT NULL,
  `college_name` text NOT NULL,
  `college_concentration` varchar(1024) NOT NULL,
  `college_star_year` year(4) NOT NULL,
  `college_end_year` year(4) NOT NULL,
  `college_course` text NOT NULL,
  `pro_skills` text NOT NULL,
  `working_skills` text NOT NULL,
  `company_name` text NOT NULL,
  `company_position` text NOT NULL,
  `company_location` text NOT NULL,
  `company_staring_year` year(4) NOT NULL,
  `company_ending_year` varchar(50) NOT NULL,
  `company_project_working` text NOT NULL,
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shout_box`
--

CREATE TABLE IF NOT EXISTS `shout_box` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `ssn` bigint(12) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `pro_skills` text NOT NULL,
  `working_skills` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uni_connection`
--

CREATE TABLE IF NOT EXISTS `uni_connection` (
  `sno` bigint(20) NOT NULL AUTO_INCREMENT,
  `ssn` bigint(20) NOT NULL,
  `college` int(1) NOT NULL,
  `school` int(1) NOT NULL,
  `skills` int(1) NOT NULL,
  `other` int(1) NOT NULL,
  `online` int(1) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uni_connection`
--

INSERT INTO `uni_connection` (`sno`, `ssn`, `college`, `school`, `skills`, `other`, `online`) VALUES
(1, 4, 0, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `uni_recommend`
--

CREATE TABLE IF NOT EXISTS `uni_recommend` (
  `sno` bigint(10) NOT NULL AUTO_INCREMENT,
  `ssn` bigint(20) NOT NULL,
  `college` int(1) NOT NULL,
  `school` int(1) NOT NULL,
  `skills` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`sno`),
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ssn` bigint(20) NOT NULL AUTO_INCREMENT,
  `dir_id` bigint(20) DEFAULT NULL,
  `fb_id` bigint(20) DEFAULT NULL,
  `go_id` bigint(20) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `profile_pic` varchar(700) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(700) NOT NULL,
  `status` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ssn`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ssn`, `dir_id`, `fb_id`, `go_id`, `fname`, `lname`, `user_name`, `profile_pic`, `password`, `email`, `status`, `timestamp`) VALUES
(63, 4, NULL, NULL, 'gaurav', 'arya', 'gaurav.3437', '', '', 'gaurav.arya37@gmail.com', 0, '2015-04-26 10:57:25'),
(64, 19, NULL, NULL, 'asfasfd', 'sdfgs', 'asfasfd1430045954', '', '', 'dsgfsgdfgdsgsfdgsd@dsgs.com', 0, '2015-04-26 10:59:14'),
(65, 24, NULL, NULL, 'ffffv', 'rffdfd', 'ffffv1430046925', '', '', 'ffff@hhhj.sddsds', 0, '2015-04-26 11:15:25'),
(66, 25, NULL, NULL, 'fff', 'vvghvgcg', 'fff1430046989', '', '', 'vvghgvvghh@vvhj.com', 0, '2015-04-26 11:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `user_storage`
--

CREATE TABLE IF NOT EXISTS `user_storage` (
  `ssn` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `resume_file_name` varchar(1024) NOT NULL,
  `profile_pic` varchar(1024) NOT NULL,
  UNIQUE KEY `ssn` (`ssn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working`
--

CREATE TABLE IF NOT EXISTS `working` (
  `ssn` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `starting_year` year(4) NOT NULL,
  `ending_year` varchar(25) NOT NULL,
  `project_working` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;