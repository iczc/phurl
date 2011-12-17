SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `phurl_settings` (
  `last_number` bigint(20) unsigned NOT NULL DEFAULT '0',
  KEY `last_number` (`last_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `phurl_settings` (`last_number`) VALUES
(1);

CREATE TABLE IF NOT EXISTS `phurl_stats` (
  `alias` text NOT NULL,
  `country` text NOT NULL,
  `clicks` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `phurl_stats` (`alias`, `country`, `clicks`) VALUES
('a', 'GB', 1);

CREATE TABLE IF NOT EXISTS `phurl_urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `alias` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` text NOT NULL,
  `user` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `alias` (`alias`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

INSERT INTO `phurl_urls` (`id`, `url`, `code`, `alias`, `date_added`, `ip`, `user`) VALUES
(1, 0x687474703a2f2f706875726c2e676f6f676c65636f64652e636f6d2f, 'a', 'phurl', '2010-07-03 15:40:56', '', '');
