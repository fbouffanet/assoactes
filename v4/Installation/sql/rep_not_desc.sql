--
-- Table structure for table `rep_not_desc`
--

CREATE TABLE IF NOT EXISTS `rep_not_desc` (
  `idf_repertoire` smallint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nom_notaire` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `idf_commune` smallint(10) unsigned NOT NULL,
  `page_courante` smallint(5) unsigned DEFAULT NULL,
  `annee_courante` smallint(5) unsigned DEFAULT NULL,
  `mois_courant` tinyint(3) unsigned DEFAULT NULL,
  `idf_releveur` smallint(8) unsigned DEFAULT NULL,
  `cote` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `publication` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`idf_repertoire`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;