--
-- Table structure for table `canton`
--

CREATE TABLE `canton` (
  `idf` tinyint(4) UNSIGNED NOT NULL,
  `nom` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour la table `canton`
--
ALTER TABLE `canton`
  ADD PRIMARY KEY (`idf`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `canton`
--
ALTER TABLE `canton`
  MODIFY `idf` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;