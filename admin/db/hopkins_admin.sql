-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 12:14 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hopkins_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `hp_adminusers`
--

CREATE TABLE IF NOT EXISTS `hp_adminusers` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_firstname` varchar(250) DEFAULT NULL,
  `user_lastname` varchar(250) DEFAULT NULL,
  `user_email` varchar(250) DEFAULT NULL,
  `user_password` varchar(250) DEFAULT NULL,
  `user_activestatus` varchar(255) DEFAULT '0',
  `user_lastlogin` datetime DEFAULT NULL,
  `user_phone` varchar(11) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `leave` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `hp_adminusers`
--

INSERT INTO `hp_adminusers` (`id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_activestatus`, `user_lastlogin`, `user_phone`, `user_role`, `leave`) VALUES
(67, 'demo', 'tree1', 'demo@gmail.com', NULL, '0', NULL, '222-222-222', 'Admin', ''),
(69, 'demo', 'demo12', 'demo@gmail.com', 'demo', '0', NULL, '222-222-222', 'Admin', ''),
(75, 'subha', 'suba', 'suba@gmail.com', 'subha', '0', NULL, '222-222-222', 'user', ''),
(114, 'ss', 'ss', 'demo@gmail.com', NULL, '0', '2017-05-08 06:14:19', '222-222-222', 'Teaching staff', ''),
(116, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaa', 'add@gmail.com', NULL, '0', '2017-05-08 08:08:27', '121-121-212', 'Non teaching staff', ''),
(117, 'add asdfasdf sdafsd afsda', '3333333333333333', 'fsssss@gmail.com', NULL, '0', '2017-05-08 09:37:26', '333-333-333', 'Manager', '');

-- --------------------------------------------------------

--
-- Table structure for table `hp_dept`
--

CREATE TABLE IF NOT EXISTS `hp_dept` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) NOT NULL,
  `dept_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hp_dept`
--

INSERT INTO `hp_dept` (`dept_id`, `dept_name`, `dept_desc`) VALUES
(1, 'test', 'test'),
(3, 'ss', 'english'),
(4, 'ww', 'maths'),
(5, 'PHysics', 'science'),
(6, 'chemisty', 'science'),
(7, 'maths', 'MATHEMATICS'),
(8, 'biology', 'science');

-- --------------------------------------------------------

--
-- Table structure for table `hp_role`
--

CREATE TABLE IF NOT EXISTS `hp_role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `roles` varchar(255) NOT NULL,
  `role_desc` varchar(255) NOT NULL,
  `staff_role` varchar(255) NOT NULL,
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `hp_role`
--

INSERT INTO `hp_role` (`role_id`, `roles`, `role_desc`, `staff_role`) VALUES
(1, 'Admin', 'sasa', 'Staff Rating,Student Performance,Decision Making,Appraisal'),
(2, 'Manager', 'dsd', 'Decision Making,Appraisal,Fees Reminder,Staff Attendance'),
(3, 'Non teaching staff', 'eee', 'Student Performance,Decision Making,Appraisal'),
(4, 'Teaching staff', 'asdasd', 'Staff Rating,Student Performance,Decision Making,Appraisal'),
(68, 'test123', 'test123', 'Staff Rating,Student Performance,Decision Making'),
(69, 'a', 'a', 'Staff Rating,Student Performance,Decision Making');

-- --------------------------------------------------------

--
-- Table structure for table `hp_user`
--

CREATE TABLE IF NOT EXISTS `hp_user` (
  `user_id` int(32) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `gender` varchar(32) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_ph` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_status` varchar(32) DEFAULT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `hp_user`
--

INSERT INTO `hp_user` (`user_id`, `user_name`, `gender`, `date_of_birth`, `role_id`, `user_ph`, `address`, `user_email`, `user_status`, `user_password`) VALUES
(1, 'suba', 'female', '06/30/2017', 2, '222-333-3333', 'chennaiiiiiii', 'subha@gmail.com', NULL, ''),
(7, 'testss', 'male', '05-10-2017', 1, '666-666-6666', 'guindy', 'test@gmail.com', NULL, ''),
(8, 'rtyrytyty', 'female', '05-10-2017', 1, '122-222-2222', '3qeresgrd', 'eree@fdsg.hjgh', NULL, ''),
(14, 'treee', 'female', '05-10-2017', 1, '777-777-7777', 'chennai', 'treee@gmail.com', NULL, ''),
(15, 'ss', 'male', '06/06/2017', 68, '222-222-2222', 'sfsdgx', 'sa@ghs.com', NULL, ''),
(25, 'aaaaaaaaaa', 'female', '03/10/2016', 4, '444-444-4444', 'sdfgdg', 'aaaaaaa@dxcfgdf.ngh', NULL, ''),
(27, 'tree123', 'female', '05-18-2017', 4, '111-111-1111', 'teree', 'tree@gm.com', NULL, ''),
(29, 'tree', 'female', '05-18-2017', 4, '111-111-1111', 'teree', 'tree@gmail.com', NULL, ''),
(59, 'ww', 'female', '06/08/2017', 2, '213-132-3132', 'test', 'ww@gdf.vb', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_department`
--

CREATE TABLE IF NOT EXISTS `user_department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(255) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user_department`
--

INSERT INTO `user_department` (`dept_id`, `dept_name`) VALUES
(1, 'class A'),
(2, 'class B'),
(3, 'class C'),
(4, 'class D');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
