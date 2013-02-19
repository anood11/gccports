-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 19, 2013 at 05:07 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gccports`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnews`
--

CREATE TABLE IF NOT EXISTS `tblnews` (
  `newsID` int(11) NOT NULL AUTO_INCREMENT,
  `newsHeading` varchar(256) DEFAULT NULL,
  `newsMatter` varchar(8000) DEFAULT NULL,
  `newsDate` date DEFAULT NULL,
  `newsTime` time DEFAULT NULL,
  `newsImage` varchar(128) DEFAULT NULL,
  `newsStatus` int(1) DEFAULT NULL,
  PRIMARY KEY (`newsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tblnews`
--

INSERT INTO `tblnews` (`newsID`, `newsHeading`, `newsMatter`, `newsDate`, `newsTime`, `newsImage`, `newsStatus`) VALUES
(1, 'awesxseaxcc', 'escc', '2013-02-12', '12:44:00', 'szc', 0),
(2, 'grtgf', 'fbgc', '2013-02-07', NULL, 'sdc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(64) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` text,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userId`, `userName`, `password`, `email`) VALUES
(1, 'admin', 'N7lZie7bQiNuEc+esxlHylGh/Y8yb5Vcf77pziJGAMQ=', 'admin@gccports.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
