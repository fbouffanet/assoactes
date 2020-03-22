--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_commune` smallint(5) DEFAULT NULL,
  `type_acte` tinyint(3) unsigned DEFAULT NULL,
  `nature_acte` tinyint(3) unsigned DEFAULT NULL,
  `fourchette` varchar(9) DEFAULT NULL,
  `support` tinyint(3) unsigned DEFAULT NULL,
  `collection` tinyint(3) unsigned DEFAULT NULL,
  `quantite` smallint(6) DEFAULT NULL,
  `auteur` text,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `unicite` (`id_commune`,`fourchette`,`support`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1;