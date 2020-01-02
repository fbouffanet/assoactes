--
-- Table structure for table `personne`
--

CREATE TABLE IF NOT EXISTS `personne` (
  `idf` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `idf_acte` mediumint(8) unsigned NOT NULL,
  `idf_type_presence` tinyint(3) unsigned NOT NULL,
  `sexe` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `patronyme` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `idf_prenom` mediumint(8) unsigned NULL,
  `surnom` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `idf_origine` mediumint(8) unsigned DEFAULT NULL,
  `idf_residence` smallint(5) unsigned DEFAULT NULL,
  `date_naissance` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `age` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `idf_profession` smallint(5) unsigned DEFAULT NULL,
  `commentaires` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  `idf_pere` int(8) unsigned DEFAULT NULL,
  `idf_mere` int(8) unsigned DEFAULT NULL,
  `est_decede` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idf`),
  KEY `index_patronyme_idx` (`patronyme`),
  KEY `idf_acte_idx` (`idf_acte`),
  KEY `idf_type_presence_idx` (`idf_type_presence`),
  FULLTEXT KEY `commentaires` (`commentaires`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;