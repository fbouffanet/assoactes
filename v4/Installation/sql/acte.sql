--
-- Table structure for table `acte`
--

CREATE TABLE IF NOT EXISTS `acte` (
  `idf` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `idf_commune` smallint(5) unsigned NOT NULL,
  `idf_type_acte` smallint(5) unsigned NOT NULL,
  `idf_source` tinyint(3) unsigned NOT NULL,
  `idf_releveur` smallint(5) unsigned DEFAULT NULL,
  `date` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `jour` tinyint(4) DEFAULT NULL,
  `mois` tinyint(4) DEFAULT NULL,
  `annee` smallint(6) DEFAULT NULL,
  `date_rep` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `cote` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `libre` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `commentaires` text COLLATE latin1_general_ci,
  `url` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `details_supplementaires` tinyint(4) DEFAULT '0',
  `created` int(11) NOT NULL DEFAULT '0',
  `changed` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idf`),
  KEY `idf_commune_idx` (`idf_commune`),
  KEY `idf_type_acte_idx` (`idf_type_acte`),
  FULLTEXT KEY `commentaires` (`commentaires`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;