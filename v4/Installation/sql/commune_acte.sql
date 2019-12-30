-- --------------------------------------------------------

--
-- Structure de la table `commune_acte`
--

CREATE TABLE `commune_acte` (
  `idf` smallint(5) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE latin1_german1_ci NOT NULL,
  `code_insee` mediumint(8) UNSIGNED NOT NULL,
  `numero_paroisse` tinyint(4) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `idf_canton` tinyint(4) DEFAULT NULL,
  `debut_communale` smallint(5) UNSIGNED DEFAULT NULL,
  `debut_greffe` smallint(5) UNSIGNED DEFAULT NULL,
  `protestants` varchar(1) COLLATE latin1_german1_ci NOT NULL DEFAULT 'N',
  `sans_rp` varchar(1) COLLATE latin1_german1_ci NOT NULL DEFAULT 'N' COMMENT 'Sans registres paroissiaux',
  `points_svg` varchar(1024) COLLATE latin1_german1_ci DEFAULT NULL,
  `bureau_controle` varchar(1) COLLATE latin1_german1_ci NOT NULL DEFAULT 'N',
  `date_min_controle` varchar(10) COLLATE latin1_german1_ci DEFAULT NULL COMMENT 'date de début du contrôle',
  `date_max_controle` varchar(10) COLLATE latin1_german1_ci DEFAULT NULL COMMENT 'date de fin du contrôle'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commune_acte`
--
ALTER TABLE `commune_acte`
  ADD PRIMARY KEY (`idf`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commune_acte`
--
ALTER TABLE `commune_acte`
  MODIFY `idf` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;