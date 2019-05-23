--
-- Structure de la table `codif_photo`
--

CREATE TABLE IF NOT EXISTS `codif_photo` (
  `idf` tinyint(3) unsigned NOT NULL,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  PRIMARY KEY (`idf`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Contenu de la table `codif_photo`
--

INSERT INTO `codif_photo` (`idf`, `nom`) VALUES
(1, 'Nimègue'),
(2, 'Personnelle');