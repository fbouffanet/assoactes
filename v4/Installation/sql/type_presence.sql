--
-- Table structure for table `type_presence`
--

CREATE TABLE IF NOT EXISTS `type_presence` (
  `idf` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `type_presence` (`idf`, `nom`) VALUES
(5, 'Ancien conjoint'),
(1, 'Intervenant'),
(4, 'Marraine'),
(3, 'Parrain'),
(6, 'Père'),
(7, 'Mère'),
(2, 'Témoin');