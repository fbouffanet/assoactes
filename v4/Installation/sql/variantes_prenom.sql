--
-- Table structure for table `variantes_prenom`
--

CREATE TABLE IF NOT EXISTS `variantes_prenom` (
  `libelle` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL DEFAULT '',
  `idf_groupe` smallint(5) unsigned DEFAULT NULL,
  KEY `libelle` (`libelle`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;