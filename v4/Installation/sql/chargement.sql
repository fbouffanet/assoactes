--
-- Table structure for table `chargement`
--

CREATE TABLE IF NOT EXISTS `chargement` (
  `idf` mediumint(9) NOT NULL AUTO_INCREMENT,
  `date_chgt` datetime NOT NULL,
  `idf_commune` smallint(5) unsigned NOT NULL,
  `type_acte_nim` tinyint(1) unsigned NOT NULL,
  `nb_actes` smallint(4) unsigned NOT NULL,
  `publication` enum('O','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ;