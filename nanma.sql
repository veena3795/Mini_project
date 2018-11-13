-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2017 at 05:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nanma`
--

-- --------------------------------------------------------

--
-- Table structure for table `nanma_user_detail`
--

CREATE TABLE IF NOT EXISTS `nanma_user_detail` (
  `USER_DETAIL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_TYPE_ID` tinyint(2) NOT NULL,
  `USER_DETAIL_USER_NAME` varchar(100) NOT NULL,
  `USER_DETAIL_USER_PASSWORD` varchar(100) NOT NULL,
  `USER_DETAIL_USER_EMAIL` varchar(200) NOT NULL,
  `USER_DETAIL_USER_MOBILE` varchar(10) NOT NULL,
  `USER_DETAIL_USER_STATUS` tinyint(1) NOT NULL DEFAULT '1',
  `USER_DETAIL_USER_ARCHIVE` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`USER_DETAIL_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `nanma_user_detail`
--

INSERT INTO `nanma_user_detail` (`USER_DETAIL_ID`, `USER_TYPE_ID`, `USER_DETAIL_USER_NAME`, `USER_DETAIL_USER_PASSWORD`, `USER_DETAIL_USER_EMAIL`, `USER_DETAIL_USER_MOBILE`, `USER_DETAIL_USER_STATUS`, `USER_DETAIL_USER_ARCHIVE`) VALUES
(6, 1, 'admin', '25d55ad283aa400af464c76d713c07ad', 'praveen.pn@india.com', '8123586102', 1, 0),
(7, 2, 'pravi', 'a6bb4faacdff9dcdcb6f6e22bc51eac9', 'pnpraveenpn@gmail.com', '9446956355', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nanma_user_enquiry`
--

CREATE TABLE IF NOT EXISTS `nanma_user_enquiry` (
  `USER_ENQUIRY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ENQUIRY_USER_NAME` varchar(100) NOT NULL,
  `USER_ENQUIRY_USER_EMAIL` varchar(200) NOT NULL,
  `USER_ENQUIRY_USER_MOBILE` varchar(10) NOT NULL,
  `USER_ENQUIRY_USER_MESSGAE` varchar(1000) NOT NULL,
  PRIMARY KEY (`USER_ENQUIRY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nanma_user_enquiry`
--

INSERT INTO `nanma_user_enquiry` (`USER_ENQUIRY_ID`, `USER_ENQUIRY_USER_NAME`, `USER_ENQUIRY_USER_EMAIL`, `USER_ENQUIRY_USER_MOBILE`, `USER_ENQUIRY_USER_MESSGAE`) VALUES
(1, 'Praveen P N', 'pnpraveenpn@gmail.com', '8123586102', 'Hai msdmsidjfdksfnvdmvncnvjckvncmbcmvvcvvmcvvvcmncmnvmcnvcm,nvm,cnvcmnvm,cv');

-- --------------------------------------------------------

--
-- Table structure for table `nanma_user_signup`
--

CREATE TABLE IF NOT EXISTS `nanma_user_signup` (
  `USER_SIGNUP_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_TYPE_ID` tinyint(1) NOT NULL,
  `USER_SIGNUP_USER_NAME` varchar(100) NOT NULL,
  `USER_SIGNUP_PASSWORD` varchar(20) NOT NULL,
  `USER_SIGNUP_CONFIRM_PASSWORD` varchar(20) NOT NULL,
  `USER_SIGNUP_REF_ID` varchar(15) NOT NULL,
  `USER_SIGNUP_EMAIL` varchar(200) NOT NULL,
  `USER_SIGNUP_MOBILE` varchar(10) NOT NULL,
  PRIMARY KEY (`USER_SIGNUP_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nanma_user_signup`
--

INSERT INTO `nanma_user_signup` (`USER_SIGNUP_ID`, `USER_TYPE_ID`, `USER_SIGNUP_USER_NAME`, `USER_SIGNUP_PASSWORD`, `USER_SIGNUP_CONFIRM_PASSWORD`, `USER_SIGNUP_REF_ID`, `USER_SIGNUP_EMAIL`, `USER_SIGNUP_MOBILE`) VALUES
(1, 2, 'pravi', 'a6bb4faacdff9dcdcb6f', '827ccb0eea8a706c4c34', '789', 'pnpraveenpn@gmail.com', '9446956355');

-- --------------------------------------------------------

--
-- Table structure for table `nanma_user_type`
--

CREATE TABLE IF NOT EXISTS `nanma_user_type` (
  `USER_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_TYPE_EMP_ID` int(11) NOT NULL COMMENT '1->Admn , 2->Volunteer , 3->User',
  `USER_TYPE_STATUS` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1-> Active, 0->Not Active ',
  `USER_TYPE_ARCHIVE` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1-> Archive, 0->Not Archive',
  PRIMARY KEY (`USER_TYPE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nanma_user_type`
--

INSERT INTO `nanma_user_type` (`USER_TYPE_ID`, `USER_TYPE_EMP_ID`, `USER_TYPE_STATUS`, `USER_TYPE_ARCHIVE`) VALUES
(1, 1, 1, 0),
(2, 2, 1, 0),
(3, 3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed_entry`
--

CREATE TABLE IF NOT EXISTS `newsfeed_entry` (
  `NEWSEVENT` varchar(200) NOT NULL ,
  
 
  
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nanma_user_signup`
--

INSERT INTO `newsfeed_entry` (`NEWSEVENT`) VALUES
('organisational events');

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
