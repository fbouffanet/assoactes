--
-- Table structure for table `element_menu`
--

CREATE TABLE IF NOT EXISTS `element_menu` (
  `libelle` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `rang` tinyint(4) NOT NULL,
  `categorie` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `script` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `droit` varchar(10) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `rang` (`rang`,`categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


INSERT INTO `element_menu` (`libelle`, `rang`, `categorie`, `script`, `droit`) VALUES
('Couple/Individu', 1, 'Les Recherches', 'index.php', ''),
('Etat des relevés', 2, 'Les Recherches', 'AfficheStatsCommune.php', ''),
('Chargement/Export', 1, 'Administration', 'Administration/GestionDonnees.php', 'CHGMT_EXPT'),
('Suppression', 3, 'Administration', 'Administration/SuppressionDonnees.php', 'CHGMT_EXPT'),
('Stats/Commune', 3, 'Les Recherches', 'AfficheStatsTypeActeCommune.php', ''),
('Patronymes/Commune', 4, 'Les Recherches', 'AffichePatrosCommune.php', ''),
('Gestion Variantes', 4, 'Administration', 'Administration/ChargementVariantes.php', 'CHGMT_EXPT'),
('Communes', 5, 'Administration', 'Administration/GestionCommunes.php', 'CHGMT_EXPT'),
('Mes demandes', 1, 'Compte Personnel', 'MesDemandes.php', ''),
('Patronymes', 5, 'Les Recherches', 'AffichePatros.php', ''),
('Notification', 2, 'Administration', 'Administration/NotificationCommune.php', 'CHGMT_EXPT'),
('Changer mon mot de passe', 4, 'Compte Personnel', 'ChangeMDP.php', ''),
('Sources', 7, 'Administration', 'Administration/GestionSources.php', 'CHGMT_EXPT'),
('Liste', 1, 'Membres', 'ListeAdherents.php', ''),
('Mes informations', 3, 'Compte Personnel', 'MajInfosAdherent.php', ''),
('Stats Consultations', 1, 'Stats', 'Stats/StatsConsultations.php', 'STATS'),
('Optimisation base', 9, 'Administration', 'Administration/OptimisationTables.php', 'CHGMT_EXPT'),
('Derniers connectés', 5, 'Utilitaires', 'Utilitaires/DerniersConnectes.php', 'UTILITAIRE'),
('Publi/chargements', 3, 'Utilitaires', 'Utilitaires/PublicationChargements.php', 'UTILITAIRE'),
('Aide', 12, 'Les Recherches', 'AideRecherches.php', ''),
('Comparaison Nim/V4', 5, 'Stats', 'Stats/VerifieStatsNim.php', 'STATS'),
('Variantes Patronyme', 1, 'Utilitaires', 'Utilitaires/AjoutVariantes.php', 'VARIANTES'),
('Documents Releveurs', 9, 'Gestion releveurs', 'Releves/GestionDocuments.php', 'RELEVES'),
('Chantiers Releveurs', 10, 'Gestion releveurs', 'Releves/GestionChantiers.php', 'RELEVES'),
('Photos Releveurs', 11, 'Gestion releveurs', 'Releves/GestionPhotos.php', 'RELEVES'),
('Statistiques NMD', 6, 'Les Recherches', 'StatsNMD.php', ''),
('Occupation tables', 18, 'Utilitaires', 'Utilitaires/UtilisationTables.php', 'UTILITAIRE'),
('Stats Adhésions', 4, 'Stats', 'Stats/StatsAdhesion.php', 'STATS'),
('Log des Adhérents', 4, 'Utilitaires', 'Utilitaires/Lecture_log.php', 'UTILITAIRE'),
('Rep Notaires', 10, 'Administration', 'RepNot/GestionRepNot.php', 'CHGMT_EXPT'),
('Variantes Prénom', 2, 'Utilitaires', 'Utilitaires/GestionVariantesPrenom.php', 'VARIANTES'),
('Types d''actes', 6, 'Administration', 'Administration/GestionTypesActesDivers.php', 'CHGMT_EXPT'),
('Répertoires Notaire', 9, 'Les Recherches', 'RepNot/RechercheRepNot.php', ''),
('Export Historique', 2, 'Stats', 'Stats/ExportHisto.php', 'STATS'),
('Ttes les demandes', 2, 'Compte Personnel', 'DemandesMesCantons.php', ''),
('Corrections demandées', 1, 'Suivi corrections', 'SuiviCorrections/CorrectionsDemandees.php', 'CHGMT_EXPT'),
('Corrections faites', 2, 'Suivi corrections', 'SuiviCorrections/CorrectionsFaites.php ', 'CHGMT_EXPT');




