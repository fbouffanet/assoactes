--
-- Table structure for table `rep_not_actes`
--

CREATE TABLE IF NOT EXISTS `rep_not_actes` (
  `idf_repertoire` smallint(5) unsigned NOT NULL,
  `idf_acte` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `annee` smallint(5) unsigned NOT NULL,
  `mois` tinyint(3) unsigned NOT NULL,
  `jour` tinyint(3) unsigned NOT NULL,
  `date_rep` varchar(25) COLLATE latin1_general_ci NOT NULL COMMENT 'Date républicaine',
  `type` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `nom1` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `prenom1` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `nom2` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `prenom2` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `paroisse` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `commentaires` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `page` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`idf_repertoire`,`idf_acte`),
  KEY `nom1` (`nom1`),
  KEY `prenom2` (`prenom2`),
  KEY `nom1_2` (`nom1`),
  KEY `nom2` (`nom2`),
  FULLTEXT KEY `commentaires` (`commentaires`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;