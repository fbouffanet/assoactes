--
-- Table structure for table `commune_acte`
--

CREATE TABLE IF NOT EXISTS `commune_acte` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE latin1_german1_ci NOT NULL,
  `code_insee` mediumint(8) unsigned NOT NULL,
  `numero_paroisse` tinyint(4) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `idf_canton` tinyint(4) NOT NULL,
  `debut_communale` smallint(5) unsigned DEFAULT NULL,
  `debut_greffe` smallint(5) unsigned DEFAULT NULL,
  `protestants` varchar(1) COLLATE latin1_german1_ci NOT NULL DEFAULT 'N',
  `sans_rp` varchar(1) COLLATE latin1_german1_ci NOT NULL DEFAULT 'N' COMMENT 'Sans registres paroissiaux',
  `points_svg` varchar(1024) COLLATE latin1_german1_ci NOT NULL,
  `bureau_controle` varchar(1) COLLATE latin1_german1_ci NOT NULL DEFAULT 'N',
  `date_min_controle` varchar(10) COLLATE latin1_german1_ci NOT NULL COMMENT 'date de début du contrôle',
  `date_max_controle` varchar(10) COLLATE latin1_german1_ci NOT NULL COMMENT 'date de fin du contrôle',
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;