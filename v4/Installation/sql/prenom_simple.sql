--
-- Table structure for table `prenom_simple`
--

CREATE TABLE IF NOT EXISTS `prenom_simple` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) COLLATE latin1_general_cs NOT NULL,
  `phonex` decimal(14,14) NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`libelle`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;