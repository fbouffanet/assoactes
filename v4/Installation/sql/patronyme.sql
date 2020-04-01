--
-- Table structure for table `patronyme`
--

CREATE TABLE IF NOT EXISTS `patronyme` (
  `idf` mediumint(9) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `phonex` decimal(14,14) DEFAULT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `patronyme` (`libelle`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;