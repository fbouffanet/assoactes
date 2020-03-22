--
-- Table structure for table `union`
--

CREATE TABLE IF NOT EXISTS `union` (
  `idf_source` tinyint(3) unsigned NOT NULL,
  `idf_commune` smallint(5) unsigned NOT NULL,
  `idf_acte` mediumint(8) unsigned NOT NULL,
  `idf_type_acte` smallint(5) unsigned NOT NULL,
  `idf_epoux` int(9) unsigned NOT NULL,
  `patronyme_epoux` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `idf_epouse` int(9) unsigned NOT NULL,
  `patronyme_epouse` varchar(30) COLLATE latin1_general_ci NOT NULL,
  KEY `nom_epoux` (`patronyme_epoux`,`patronyme_epouse`),
  KEY `index_union_idf_source_idx` (`idf_source`),
  KEY `index_union_idf_commune_idx` (`idf_commune`),
  KEY `index_union_idf_acte_idx` (`idf_acte`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Table pour accelrer les recherches sur les unions';