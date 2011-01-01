--
-- Table structure for table `ph_stats`
--

CREATE TABLE IF NOT EXISTS `ph_stats` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `ip` varchar(16) NOT NULL,
  `country` varchar(32) NOT NULL,
  `isp` varchar(32) NOT NULL,
  `browser` varchar(32) NOT NULL,
  `os` varchar(32) NOT NULL,
  `resolution` varchar(32) NOT NULL,
  `referer` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


--
-- Table structure for table `ph_urls`
--

CREATE TABLE IF NOT EXISTS `ph_urls` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `alias` varchar(32) NOT NULL,
  `url` longtext NOT NULL,
  `user` int(10) NOT NULL,
  `time` int(32) NOT NULL,
  `ip` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


--
-- Table structure for table `ph_users`
--

CREATE TABLE IF NOT EXISTS `ph_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `last_login` int(32) NOT NULL,
  `time_reg` int(32) NOT NULL,
  `admin` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;