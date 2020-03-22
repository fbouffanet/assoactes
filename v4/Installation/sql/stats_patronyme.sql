--
-- Table structure for table `stats_patronyme`
--

CREATE TABLE IF NOT EXISTS `stats_patronyme` (
  `idf_patronyme` mediumint(8) unsigned NOT NULL,
  `idf_commune` smallint(5) unsigned NOT NULL DEFAULT '0',
  `idf_type_acte` smallint(5) unsigned NOT NULL DEFAULT '0',
  `idf_source` tinyint(3) unsigned NOT NULL,
  `annee_min` smallint(5) unsigned DEFAULT NULL,
  `annee_max` smallint(5) unsigned DEFAULT NULL,
  `nb_personnes` smallint(5) unsigned DEFAULT NULL,
  KEY `idf_commune` (`idf_commune`),
  KEY `idf_type_acte` (`idf_type_acte`),
  KEY `idf_patronyme` (`idf_patronyme`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;