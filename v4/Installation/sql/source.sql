--
-- Table structure for table `source`
--

CREATE TABLE IF NOT EXISTS `source` (
  `idf` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `type_publication_id` tinyint(3) unsigned DEFAULT NULL,
  `publication_geneabank` tinyint(3) unsigned DEFAULT NULL,
  `script_demande` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `utilise_ds` tinyint(1) NOT NULL COMMENT 'Utilise le champ details supplementaires ou pas',
  `icone_info` varchar(20) COLLATE latin1_general_ci NOT NULL COMMENT 'Icone à afficher si une information est disponible',
  `icone_ninfo` varchar(20) COLLATE latin1_general_ci NOT NULL COMMENT 'Icone à afficher si aucune information n''est disponible',
  `icone_index` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `nom` (`nom`),
  KEY `type_publication_id_idx` (`type_publication_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci ;

INSERT INTO `source` (`idf`, `nom`, `type_publication_id`, `publication_geneabank`, `script_demande`, `utilise_ds`, `icone_info`, `icone_ninfo`, `icone_index`) VALUES
(1, 'Releves', NULL, 0, 'InfosActe.php', 1, 'infos.png', 'ninfos.png', 'idx.png');