--
-- Table structure for table `profession`
--

CREATE TABLE IF NOT EXISTS `profession` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(35) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;