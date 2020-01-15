--
-- Table structure for table `demandes_adherent`
--

CREATE TABLE IF NOT EXISTS `demandes_adherent` (
  `idf` mediumint(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identifiant de la demande',
  `idf_adherent` mediumint(6) unsigned NOT NULL DEFAULT '0' COMMENT 'Identifiant de l''adherent',
  `adresse_ip` varchar(23) COLLATE latin1_general_ci NOT NULL,
  `idf_commune` smallint(5) unsigned NOT NULL COMMENT 'Commune de l''acte',
  `idf_acte` mediumint(11) unsigned DEFAULT NULL,
  `idf_type_acte` smallint(5) unsigned DEFAULT NULL,
  `date_demande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date de la demande',
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;