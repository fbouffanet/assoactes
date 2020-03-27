--
-- Table structure for table `tableau_kilometrique`
--

CREATE TABLE IF NOT EXISTS `tableau_kilometrique` (
  `idf_commune1` smallint(5) unsigned NOT NULL DEFAULT '0',
  `idf_commune2` smallint(5) unsigned NOT NULL DEFAULT '0',
  `distance` tinyint(3) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`idf_commune1`,`idf_commune2`,`distance`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;