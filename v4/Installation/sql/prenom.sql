--
-- Table structure for table `prenom`
--

CREATE TABLE IF NOT EXISTS `prenom` (
  `idf` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`libelle`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;