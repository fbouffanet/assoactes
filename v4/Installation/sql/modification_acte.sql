
--
-- Table structure for table `modification_acte`
--

CREATE TABLE IF NOT EXISTS `modification_acte` (
  `idf` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `idf_acte` mediumint(8) unsigned NOT NULL,
  `date_modif` date NOT NULL,
  `email_demandeur` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `ip_demandeur` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `cmt_modif` text COLLATE latin1_general_ci,
  `photo1` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `photo2` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `photo3` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `photo4` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `idf_valideur` smallint(5) unsigned NOT NULL,
  `date_validation` date NOT NULL,
  `statut` varchar(1) COLLATE latin1_general_ci DEFAULT NULL,
  `motif_refus` text COLLATE latin1_general_ci NOT NULL,
  `date` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `date_rep` varchar(25) COLLATE latin1_general_ci DEFAULT NULL,
  `cote` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `libre` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `commentaires` text COLLATE latin1_general_ci,
  `url` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;