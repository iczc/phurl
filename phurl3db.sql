-- phpMyAdmin SQL Dump
-- version 3.4.4-rc1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2011 at 12:25 AM
-- Server version: 5.1.60
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `henry_urcxbeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `phurl_settings`
--

CREATE TABLE IF NOT EXISTS `phurl_settings` (
  `last_number` bigint(20) unsigned NOT NULL DEFAULT '0',
  KEY `last_number` (`last_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phurl_settings`
--

INSERT INTO `phurl_settings` (`last_number`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `phurl_stats`
--

CREATE TABLE IF NOT EXISTS `phurl_stats` (
  `alias` text NOT NULL,
  `country` text NOT NULL,
  `clicks` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phurl_urls`
--

CREATE TABLE IF NOT EXISTS `phurl_urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `alias` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phurl_urls`
--

INSERT INTO `phurl_urls` (`id`, `url`, `code`, `alias`, `date_added`) VALUES
(1, 0x687474703a2f2f706875726c2e676f6f676c65636f64652e636f6d2f, 'a', 'phurl', '2010-07-03 15:40:56');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
