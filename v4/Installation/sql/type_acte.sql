--
-- Table structure for table `type_acte`
--

CREATE TABLE IF NOT EXISTS `type_acte` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `sigle_nimegue` varchar(5) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `type_acte` (`idf`, `nom`, `sigle_nimegue`) VALUES
(1, 'Mariage', ''),
(2, 'Contrat de mariage', 'CM'),
(3, 'Baptême/Naissance', ''),
(4, 'Sépulture/Décès', ''),
(5, 'Testament', 'Ttt'),
(6, 'Recensement', 'Recen');