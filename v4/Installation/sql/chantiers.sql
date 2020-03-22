--
-- Table structure for table `chantiers`
--

CREATE TABLE IF NOT EXISTS `chantiers` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_document` smallint(5) DEFAULT NULL,
  `id_releveur` smallint(5) DEFAULT NULL,
  `type_acte` tinyint(3) unsigned DEFAULT NULL,
  `date_convention` date DEFAULT NULL,
  `date_envoi` date DEFAULT NULL,
  `date_retour` date NOT NULL,
  `date_fin` date DEFAULT NULL,
  `comment_envoi` text,
  `comment_retour` text,
  `statut` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `unicite` (`id_document`,`id_releveur`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;