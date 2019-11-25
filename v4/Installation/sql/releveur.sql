--
-- Table structure for table `releveur`
--

CREATE TABLE IF NOT EXISTS `releveur` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `idf_adherent` smallint(5) unsigned NOT NULL,
  `nom` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `prenom` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ;