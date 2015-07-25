--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

CREATE TABLE IF NOT EXISTS `rankings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attack` int(10) unsigned NOT NULL DEFAULT '0',
  `defense` int(10) unsigned NOT NULL DEFAULT '0',
  `overall` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE IF NOT EXISTS `stats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gold` int(10) unsigned NOT NULL DEFAULT '100',
  `food` int(10) unsigned NOT NULL DEFAULT '100',
  `turns` int(10) unsigned NOT NULL DEFAULT '100',
  `attack` int(10) unsigned NOT NULL DEFAULT '10',
  `defense` int(10) unsigned NOT NULL DEFAULT '10',
  `income` int(10) unsigned NOT NULL DEFAULT '10',
  `farming` int(10) unsigned NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `worker` int(10) unsigned NOT NULL DEFAULT '5',
  `farmer` int(10) unsigned NOT NULL DEFAULT '5',
  `warrior` int(10) unsigned NOT NULL DEFAULT '0',
  `defender` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE IF NOT EXISTS `weapons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sword` int(10) unsigned NOT NULL DEFAULT '0',
  `shield` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;