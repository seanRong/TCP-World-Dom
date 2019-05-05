-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb26.awardspace.net
-- Generation Time: May 05, 2019 at 04:39 AM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2954727_thedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `DEMO_progress`
--

CREATE TABLE `DEMO_progress` (
  `team_name` varchar(50) NOT NULL,
  `station_s1` int(11) NOT NULL,
  `station_s2` int(11) NOT NULL,
  `station_s3` int(11) NOT NULL,
  `station_s4` int(11) NOT NULL,
  `station_s5` int(11) NOT NULL,
  `station_s6` int(11) NOT NULL,
  `station_s7` int(11) NOT NULL,
  `station_s8` int(11) NOT NULL,
  `station_s9` int(11) NOT NULL,
  `station_s10` int(11) NOT NULL,
  `station_s11` int(11) NOT NULL,
  `station_s12` int(11) NOT NULL,
  `station_s13` int(11) NOT NULL,
  `station_s14` int(11) NOT NULL,
  `station_s15` int(11) NOT NULL,
  `station_s16` int(11) NOT NULL,
  `station_s17` int(11) NOT NULL,
  `station_s18` int(11) NOT NULL,
  `station_s19` int(11) NOT NULL,
  `station_s20` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DEMO_progress`
--

INSERT INTO `DEMO_progress` (`team_name`, `station_s1`, `station_s2`, `station_s3`, `station_s4`, `station_s5`, `station_s6`, `station_s7`, `station_s8`, `station_s9`, `station_s10`, `station_s11`, `station_s12`, `station_s13`, `station_s14`, `station_s15`, `station_s16`, `station_s17`, `station_s18`, `station_s19`, `station_s20`) VALUES
('blue', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('red', 0, 3, 3, 0, 0, 0, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('yellow', 2, 0, 0, 2, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
