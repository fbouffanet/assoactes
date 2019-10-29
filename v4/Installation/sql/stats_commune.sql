--
-- Table structure for table `stats_commune`
--

CREATE TABLE IF NOT EXISTS `stats_commune` (
  `idf_commune` smallint(5) unsigned NOT NULL DEFAULT '0',
  `idf_type_acte` smallint(5) unsigned NOT NULL DEFAULT '0',
  `idf_source` tinyint(3) unsigned NOT NULL,
  `annee_min` smallint(5) unsigned DEFAULT NULL,
  `annee_max` smallint(5) unsigned DEFAULT NULL,
  `nb_actes` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`idf_commune`,`idf_type_acte`,`idf_source`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;