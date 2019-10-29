--
-- Table structure for table `statut_adherent`
--

CREATE TABLE IF NOT EXISTS `statut_adherent` (
  `idf` char(1) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nom` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `statut_adherent` (`idf`, `nom`) VALUES
('B', 'Bulletin'),
('I', 'Internet'),
('S', 'Suspendu'),
('H', 'Honneur'),
('G', 'Gratuit');