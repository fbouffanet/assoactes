--
-- Table structure for table `collection_acte`
--

CREATE TABLE IF NOT EXISTS `collection_acte` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `libelle` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci NOT NULL,
  `divers` varchar(30) CHARACTER SET latin1 COLLATE latin1_german1_ci DEFAULT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO `collection_acte` (`idf`, `libelle`, `divers`) VALUES
(1, 'Greffe', ''),
(2, 'RP', 'Registres paroissiaux'),
(3, 'EC', 'Etat civil'),
(4, 'CM', 'Contrat mariage'),
(5, 'Dépôt commune', NULL),
(6, 'Actes épars', NULL),
(7, 'Mairie', NULL),
(8, 'Archives Municipales', NULL),
(9, 'Dep. Com. + Greffe', NULL),
(10, 'E.C. Mariages', NULL),
(11, 'AD', NULL);