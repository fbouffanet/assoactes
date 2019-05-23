CREATE TABLE `prenom` (
  `idf` mediumint(8) UNSIGNED NOT NULL,
  `libelle` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `phonex` decimal(14,14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;
ALTER TABLE `prenom`
   ADD PRIMARY KEY (`idf`),  
  ADD UNIQUE KEY `nom` (`libelle`);
ALTER TABLE `prenom`
  MODIFY `idf` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;
insert into prenom(libelle) select  distinct prenom from personne order by prenom;
alter table personne add  `idf_prenom` mediumint(8) UNSIGNED NOT NULL after prenom;
update personne pers join prenom prn on (pers.prenom=prn.libelle) set pers.idf_prenom=prn.idf;
alter table personne drop column prenom;