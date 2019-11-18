CREATE TABLE IF NOT EXISTS `categorie_menu` (
  `libelle` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `rang` tinyint(4) NOT NULL,
  `script` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `droit` varchar(10) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `rang` (`rang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

INSERT INTO `categorie_menu` (`libelle`, `rang`, `script`, `droit`) VALUES
('Accueil', 1, 'index.php', ''),
('Les Recherches', 2, '', ''),
('Compte Personnel', 3, '', ''),
('Membres', 4, '', ''),
('Administration', 5, '', 'CHGMT_EXPT'),
('Suivi corrections', 6, '', 'CHGMT_EXPT'),
('Utilitaires', 7, '', 'UTILITAIRE'),
('Stats', 8, '', 'STATS'),
('Gestion releveurs', 9, '', 'RELEVES'),
('AdminGKB', 10, '/Administration/ExportGeneabank.php', 'GENEABANK'),
('Sortie', 11, 'Sortie.php', '');