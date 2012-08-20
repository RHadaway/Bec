-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2012 at 03:23 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";# MySQL returned an empty result set (i.e. zero rows).

SET time_zone = "+00:00";# MySQL returned an empty result set (i.e. zero rows).



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;# MySQL returned an empty result set (i.e. zero rows).

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;# MySQL returned an empty result set (i.e. zero rows).

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;# MySQL returned an empty result set (i.e. zero rows).

/*!40101 SET NAMES utf8 */;# MySQL returned an empty result set (i.e. zero rows).


--
-- Database: `together`
--

-- --------------------------------------------------------

--
-- Table structure for table `mealstogether`
--

CREATE TABLE IF NOT EXISTS `mealstogether` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `members` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;# MySQL returned an empty result set (i.e. zero rows).


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;# MySQL returned an empty result set (i.e. zero rows).

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;# MySQL returned an empty result set (i.e. zero rows).

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;# MySQL returned an empty result set (i.e. zero rows).
