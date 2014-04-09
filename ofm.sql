-- phpMyAdmin SQL Dump
-- version 4.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2014 at 11:32 AM
-- Server version: 5.6.11-log
-- PHP Version: 5.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ofm`
--
CREATE DATABASE IF NOT EXISTS `ofm` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `ofm`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'Nisan', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `union_id` int(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `name`, `union_id`) VALUES
(1, 'test', 3),
(2, '1', 2),
(3, '2', 2),
(4, '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `crop`
--

CREATE TABLE IF NOT EXISTS `crop` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `crop`
--

INSERT INTO `crop` (`id`, `name`) VALUES
(1, 'Paddy'),
(2, 'Jute'),
(3, 'Sugarcane'),
(4, 'Patato'),
(5, 'Tomato'),
(6, 'Carrot');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Dhaka'),
(2, 'Narayanganj'),
(3, 'Manikganj'),
(11, 'Narshingdi');

-- --------------------------------------------------------

--
-- Table structure for table `ecoyear`
--

CREATE TABLE IF NOT EXISTS `ecoyear` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `ecoyear` text NOT NULL,
  `submission_start` date NOT NULL,
  `submission_end` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ecoyear`
--

INSERT INTO `ecoyear` (`id`, `ecoyear`, `submission_start`, `submission_end`) VALUES
(4, '2014-2015', '2014-04-06', '2014-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `news` text NOT NULL,
  `dist_id` int(13) NOT NULL,
  `subdist_id` int(13) NOT NULL,
  `union_id` int(13) NOT NULL,
  `block_id` int(13) NOT NULL,
  `status` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `dist_id`, `subdist_id`, `union_id`, `block_id`, `status`) VALUES
(1, 'à¦¨à¦¤à§à¦¨ à¦…à¦°à§à¦¥à¦¬à¦›à¦° 2014-2015  à¦¯à§à¦•à§à¦¤ à¦•à¦°à¦¾ à¦¹à§Ÿà§‡à¦›à§‡, à¦¤à¦¥à§à¦¯ à¦œà¦®à¦¾à¦¦à¦¾à¦¨à§‡à¦° à¦¸à¦®à§Ÿ 2014-04-06  à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ 2014-05-05 à¦¤à¦¾à¦°à¦¿à¦– à¦ªà¦°à§à¦¯à¦¨à§à¦¤', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sheet1`
--

CREATE TABLE IF NOT EXISTS `sheet1` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `ecoyear` int(13) NOT NULL,
  `submitting_time` date NOT NULL,
  `district` int(13) NOT NULL,
  `subdistrict` int(13) NOT NULL,
  `union_id` int(13) NOT NULL,
  `block` int(13) NOT NULL,
  `aez` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `land_ammount` double NOT NULL,
  `crop1` int(13) NOT NULL,
  `ammount1` double NOT NULL,
  `crop2` int(13) NOT NULL,
  `ammount2` double NOT NULL,
  `crop3` int(13) NOT NULL,
  `ammount3` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sheet1`
--

INSERT INTO `sheet1` (`id`, `ecoyear`, `submitting_time`, `district`, `subdistrict`, `union_id`, `block`, `aez`, `name`, `g_name`, `land_ammount`, `crop1`, `ammount1`, `crop2`, `ammount2`, `crop3`, `ammount3`) VALUES
(1, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'Tanvir', 'unknown ', 124, 1, 121, 5, 110, 2, 122),
(2, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'Tanvir', 'unknown ', 11, 3, 11, 6, 10, 3, 11),
(4, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'anis', 'kabir ', 123, 3, 123, 4, 120, 5, 121),
(5, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'manus', 'unknown ', 124, 4, 123, 1, 120, 6, 121),
(6, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'Faizur rahman', 'Abdur rahman ', 19.6, 2, 11, 1, 19, 5, 19.6),
(7, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'Sobur Ali', 'unknown ', 119.9, 3, 119.9, 1, 119.9, 2, 108),
(8, 4, '2014-04-08', 1, 2, 2, 2, '13,7,9,2', 'Mukto', 'unknown ', 123, 3, 123, 4, 120, 5, 111);

-- --------------------------------------------------------

--
-- Table structure for table `sheet2`
--

CREATE TABLE IF NOT EXISTS `sheet2` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `season` int(2) NOT NULL,
  `crop` int(13) NOT NULL,
  `numbers` int(13) NOT NULL,
  `land` double NOT NULL,
  `submitting_date` date NOT NULL,
  `aez` text COLLATE utf8_unicode_ci NOT NULL,
  `district` int(13) NOT NULL,
  `subdistrict` int(13) NOT NULL,
  `union_id` int(13) NOT NULL,
  `block` int(13) NOT NULL,
  `ecoyear` int(13) NOT NULL,
  `boron` double NOT NULL,
  `alluminium_salfet` double NOT NULL,
  `magnesium_salfet` double NOT NULL,
  `zinc_salfet` double NOT NULL,
  `jipsam` double NOT NULL,
  `mpks` double NOT NULL,
  `mop` double NOT NULL,
  `dmp` double NOT NULL,
  `tsp` double NOT NULL,
  `uria` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sheet2`
--

INSERT INTO `sheet2` (`id`, `season`, `crop`, `numbers`, `land`, `submitting_date`, `aez`, `district`, `subdistrict`, `union_id`, `block`, `ecoyear`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) VALUES
(1, 1, 2, 2, 121.9, '2014-04-08', '19,13,7,17', 1, 1, 0, 1, 4, 12.4, 21, 32, 23, 32, 43, 23, 12, 21, 21.21),
(2, 1, 1, 1, 121, '2014-04-09', '13,7,9,2', 1, 2, 2, 2, 4, 231, 21.2, 23, 43, 45, 23, 0, 32, 121, 121.2);

-- --------------------------------------------------------

--
-- Table structure for table `sheet3`
--

CREATE TABLE IF NOT EXISTS `sheet3` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `ecoyear` int(13) NOT NULL,
  `district` int(13) NOT NULL,
  `subdistrict` int(13) NOT NULL,
  `union_id` int(13) NOT NULL,
  `season` int(2) NOT NULL,
  `crop` int(13) NOT NULL,
  `farmers` int(13) NOT NULL,
  `land` double NOT NULL,
  `submitting_date` date NOT NULL,
  `aez` text COLLATE utf8_unicode_ci NOT NULL,
  `boron` double NOT NULL,
  `alluminium_salfet` double NOT NULL,
  `magnesium_salfet` double NOT NULL,
  `zinc_salfet` double NOT NULL,
  `jipsam` double NOT NULL,
  `mpks` double NOT NULL,
  `mop` double NOT NULL,
  `dmp` double NOT NULL,
  `tsp` double NOT NULL,
  `uria` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sheet3`
--

INSERT INTO `sheet3` (`id`, `ecoyear`, `district`, `subdistrict`, `union_id`, `season`, `crop`, `farmers`, `land`, `submitting_date`, `aez`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) VALUES
(1, 4, 1, 2, 2, 1, 2, 2, 121.9, '2014-04-09', '13,7,9,2', 12.4, 21, 32, 23, 32, 43, 0, 12, 21, 21.21),
(2, 4, 1, 2, 2, 1, 1, 1, 121, '2014-04-09', '13,7,9,2', 231, 21.2, 23, 43, 45, 23, 0, 32, 121, 121.2);

-- --------------------------------------------------------

--
-- Table structure for table `sheet4`
--

CREATE TABLE IF NOT EXISTS `sheet4` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `ecoyear` int(13) NOT NULL,
  `district` int(13) NOT NULL,
  `subdistrict` int(13) NOT NULL,
  `union_id` int(13) NOT NULL,
  `season` int(2) NOT NULL,
  `crop` int(13) NOT NULL,
  `farmers` int(13) NOT NULL,
  `land` double NOT NULL,
  `submitting_date` date NOT NULL,
  `aez` text COLLATE utf8_unicode_ci NOT NULL,
  `boron` double NOT NULL,
  `alluminium_salfet` double NOT NULL,
  `magnesium_salfet` double NOT NULL,
  `zinc_salfet` double NOT NULL,
  `jipsam` double NOT NULL,
  `mpks` double NOT NULL,
  `mop` double NOT NULL,
  `dmp` double NOT NULL,
  `tsp` double NOT NULL,
  `uria` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sheet4`
--

INSERT INTO `sheet4` (`id`, `ecoyear`, `district`, `subdistrict`, `union_id`, `season`, `crop`, `farmers`, `land`, `submitting_date`, `aez`, `boron`, `alluminium_salfet`, `magnesium_salfet`, `zinc_salfet`, `jipsam`, `mpks`, `mop`, `dmp`, `tsp`, `uria`) VALUES
(1, 4, 1, 2, 0, 1, 2, 2, 121.9, '2014-04-09', '13,7,9,2', 12.4, 21, 32, 23, 32, 43, 0, 12, 21, 21.21),
(2, 4, 1, 2, 0, 1, 1, 1, 121, '2014-04-09', '13,7,9,2', 231, 21.2, 23, 43, 45, 23, 0, 32, 121, 121.2);

-- --------------------------------------------------------

--
-- Table structure for table `subdistrict`
--

CREATE TABLE IF NOT EXISTS `subdistrict` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `dist_id` int(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subdistrict`
--

INSERT INTO `subdistrict` (`id`, `name`, `dist_id`) VALUES
(3, 'Dhamrai', 1),
(2, 'Savar', 1),
(4, '', 0),
(5, '', 0),
(6, '', 0),
(7, 'Raypura', 11);

-- --------------------------------------------------------

--
-- Table structure for table `union`
--

CREATE TABLE IF NOT EXISTS `union` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `subdist_id` int(13) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `union`
--

INSERT INTO `union` (`id`, `name`, `subdist_id`) VALUES
(1, 'test', 0),
(2, 'Dewgoan', 2),
(3, 'Asulia', 2),
(5, 'Kusura', 3),
(6, 'Babutia', 3),
(7, 'Raypura', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(13) NOT NULL AUTO_INCREMENT,
  `reg_date` date NOT NULL,
  `mob` text NOT NULL,
  `full_name` text NOT NULL,
  `adress` text NOT NULL,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `sec_ques` text NOT NULL,
  `ans` text NOT NULL,
  `right_lavel` int(2) NOT NULL,
  `district` int(4) NOT NULL DEFAULT '0',
  `subdistrict` int(4) NOT NULL DEFAULT '0',
  `union_loc` int(4) NOT NULL DEFAULT '0',
  `block` int(4) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `reg_date`, `mob`, `full_name`, `adress`, `username`, `pass`, `sec_ques`, `ans`, `right_lavel`, `district`, `subdistrict`, `union_loc`, `block`, `status`) VALUES
(1, '2014-04-03', '01678136088', 'Mustafa Kamal Hossain', '32/3, South Rajashion, Savar, Dhaka', 'nisan', '12345678', 'who is ?', 'is who', 1, 1, 2, 2, 0, 1),
(4, '2014-04-07', '01913484746', 'Mustafa Kamal Hossain', '32/3, South Razashion, Savar, Dhaka', 'sabbir', '12345678', 'dddd?', 'fffff', 3, 1, 0, 0, 0, 1),
(3, '2014-04-07', '01724939534', 'Mustafa Kamal Hossain', '32/3, South Razashion, Savar, Dhaka', 'sabbir', '12345678', 'dddd?', 'aaaa', 2, 1, 2, 0, 0, 1),
(5, '2014-04-07', '01824567477', 'Mustafa Kamal Hossain', '32/3, South Razashion, Savar, Dhaka', 'nisan', '12345678', 'dddd?', 'aaaa', 4, 0, 0, 0, 0, 1),
(6, '2014-04-07', '', '', '', '', '', '', '', 0, -1, -1, -1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
