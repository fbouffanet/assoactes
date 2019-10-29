--
-- Table structure for table `canton`
--

CREATE TABLE IF NOT EXISTS `canton` (
  `idf` tinyint(4) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;