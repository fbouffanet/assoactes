--
-- Table structure for table `modification_personne`
--

CREATE TABLE IF NOT EXISTS `modification_personne` (
  `idf` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `idf_modification_acte` mediumint(8) unsigned NOT NULL,
  `idf_type_presence` tinyint(3) unsigned NOT NULL,
  `sexe` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `patronyme` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `surnom` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `origine` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `residence` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `date_naissance` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `age` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `profession` varchar(35) COLLATE latin1_general_ci DEFAULT NULL,
  `commentaires` varchar(70) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;