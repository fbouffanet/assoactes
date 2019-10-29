--
-- Table structure for table `variantes_patro`
--

CREATE TABLE IF NOT EXISTS `variantes_patro` (
  `patronyme` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `idf_groupe` smallint(5) unsigned DEFAULT NULL,
  `majeure` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`patronyme`),
  KEY `idf_groupe` (`idf_groupe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;