--
-- Table structure for table `rep_not_variantes`
--

CREATE TABLE IF NOT EXISTS `rep_not_variantes` (
  `idf_groupe` smallint(5) unsigned NOT NULL,
  `nom` varchar(40) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  KEY `patronyme` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;