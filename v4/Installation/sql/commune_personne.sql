--
-- Table structure for table `commune_personne`
--

CREATE TABLE IF NOT EXISTS `commune_personne` (
  `idf` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `index_commune_pers_idx` (`nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;