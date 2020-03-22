--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `idf` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `id_commune` smallint(5) DEFAULT NULL,
  `fourchette` varchar(20) DEFAULT NULL,
  `id_collection` smallint(6) DEFAULT NULL,
  `nbr_photos` smallint(6) DEFAULT NULL,
  `poids_total` smallint(6) DEFAULT NULL,
  `id_auteur` smallint(5) DEFAULT NULL,
  `releve_papier` enum('O','N') DEFAULT NULL,
  `releve_base` enum('O','N') DEFAULT NULL,
  `releve_td` enum('O','N') DEFAULT NULL,
  `date_prise` date NOT NULL,
  PRIMARY KEY (`idf`),
  UNIQUE KEY `unicite` (`id_commune`,`fourchette`,`id_collection`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;