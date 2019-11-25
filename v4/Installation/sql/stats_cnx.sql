--
-- Table structure for table `stats_cnx`
--

CREATE TABLE IF NOT EXISTS `stats_cnx` (
  `date` date NOT NULL,
  `nbre` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Statistiques de connexion';