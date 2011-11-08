-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2011 at 07:16 PM
-- Server version: 5.5.9
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `death2qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `signers`
--

CREATE TABLE `signers` (
  `id` varchar(225) NOT NULL,
  `screen_name` text NOT NULL,
  `name` text NOT NULL,
  `profile_image_url` varchar(2083) NOT NULL,
  `description` text NOT NULL,
  `followers_count` int(225) NOT NULL,
  `url` varchar(2083) NOT NULL,
  `location` varchar(500) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signers`
--

INSERT INTO `signers` VALUES('18424068', 'gardnersmitha', 'Austin Gardner-Smith', 'http://a0.twimg.com/profile_images/542508666/team_ags_normal.jpg', 'Internet guy, recent transplant to the ad industry w/ @HillHolliday. Proud to have helped build @Pinyadda and @BostInnovation before that. Opinions mine alone.', 593, 'http://www.austingardnersmith.me', 'iPhone: 41.552597,-70.598969', '0000-00-00 00:00:00');
