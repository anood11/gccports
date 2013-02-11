-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 11, 2013 at 07:50 PM
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
