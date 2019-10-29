--
-- Table structure for table `groupe_prenoms`
--

CREATE TABLE IF NOT EXISTS `groupe_prenoms` (
  `idf_prenom` mediumint(8) unsigned NOT NULL,
  `idf_prenom_simple` smallint(5) unsigned NOT NULL,
  KEY `idf_prenom` (`idf_prenom`,`idf_prenom_simple`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;