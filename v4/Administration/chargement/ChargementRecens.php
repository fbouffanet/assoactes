<?php

/**
 * Charge les recensements
 * @param string $pst_fichier localisation du fichier
 * @param integer $pi_idf_commune : identifiant de la commune a charger
 * @param integer $pi_annee: année de recensement
 * @param integer $pi_idf_source : identifiant de la source 
 * @param integer $pi_idf_releveur : identifiant de l'adherent releveur 
 * @param string $pst_rep_trav : localisation du repertoire de travail   
 * @return boolean : a reussi ou pas  
 */ 
function charge_recensement($pst_fichier,$pi_idf_commune,$pi_annee,$pi_idf_source,$pi_idf_releveur,$pst_rep_trav)
{
   global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_parametres_load_data;
   $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   $type_acte = TypeActe::singleton($connexionBD);
   $union = Union::singleton($connexionBD);
   $stats_patronyme = new StatsPatronyme($connexionBD,$pi_idf_commune,$pi_idf_source);
   $stats_commune = new StatsCommune($connexionBD,$pi_idf_commune,$pi_idf_source);
   $prenom = Prenom::singleton($connexionBD);
   $commune_personne = CommunePersonne::singleton($connexionBD);
   $profession = Profession::singleton($connexionBD);
   $releveur =  new Releveur($connexionBD);
   $a_liste_personnes = array();
   $a_liste_actes = array();      
   $pf=fopen($pst_fichier,"r") or die("Impossible de lire $pst_fichier");
   // Empeche le chargement de la table le temps de la mise a jour
   $connexionBD->execute_requete("LOCK TABLES `personne` write , `prenom` write ,`acte` write, `profession` write, `commune_personne` write, `stats_patronyme` write, `stats_commune` write, `union` write, `acte` as a read, `personne` as p read,`personne` as pers_pere read,`personne` as pers_mere read,`type_acte` as ta read,`type_acte` write, `releveur` write,`adherent` read,`prenom_simple` write, `groupe_prenoms` write");
   // les redondances de donnees seront traitees par sql load data et la contrainte sur l'index nom
   $st_fich_actes = addslashes($pst_rep_trav.'/menages_recens.csv');
   $pf_actes=fopen($st_fich_actes,"w") or die("Impossible d'ecrire le fichier $st_fich_actes");
   $i_nb_actes =0 ;
   $st_rue_courante=null;
   $st_quartier_courant=null;
   $i_maison_courante=null;
   $i_menage_courant=null;
   $i_acte_courant = null;
   $i_page_courante = null;
   $i_idf_derniere_personne = null;
   $stats_commune->compte_acte(LIB_RECENSEMENT,$pi_annee); 
   while (!feof($pf))
   {      
      $st_ligne       = fgets($pf);
      // saute les lignes vides
      if (preg_match("/^[ ]*$/",$st_ligne)) continue;
      if (preg_match("/^$/",$st_ligne)) continue;
	  if (preg_match("/^__________/",$st_ligne)) continue;
	  
      $a_champs       = explode(SEP_CSV,$st_ligne);
      // Saute les lignes dont le nombre de champs n'est pas valide
      if (count($a_champs)<11) continue;
  
      list($st_rue_ligne,$st_quartier_ligne,$i_page_ligne,$i_maison_ligne,$i_menage_ligne) = array_splice($a_champs,0,5);
	  $st_rue_ligne = empty($st_rue_ligne) ? $st_rue_courante: $st_rue_ligne;
	  $st_quartier_ligne = empty($st_quartier_ligne) ? $st_quartier_courant: $st_quartier_ligne;
	  $i_maison_ligne = empty($i_maison_ligne) ? $i_maison_courante: $i_maison_ligne;
	  $i_menage_ligne = empty($i_menage_ligne) ? $i_menage_courant: $i_menage_ligne;
	  $i_page_ligne = empty($i_page_ligne) ? $i_page_courante: $i_page_ligne;
      list($st_nom,$st_prenom,$st_profession,$st_fonction,$st_observations,$st_age) = array_splice($a_champs,0,6);
      nettoie_nom($st_nom);    
      nettoie_prenom($st_prenom);   
	  if ((empty($st_rue_courante) && empty($st_quartier_courant) && empty($i_maison_courante) && empty($i_menage_courant)) || ($st_rue_ligne!=$st_rue_courante || $st_quartier_ligne!=$st_quartier_courant ||  $i_maison_ligne!=$i_maison_courante || $i_menage_ligne!=$i_menage_courant))
	  {
		 $acte = new Acte($connexionBD,$pi_idf_commune,LIB_RECENSEMENT,'N',$pi_idf_source,sprintf("00/00/%04d",$pi_annee),$releveur->idf_releveur($pi_idf_releveur));
		 $st_commentaires = sprintf("Nom de la Rue: %s\n",$st_rue_ligne);
		 $st_commentaires .= sprintf("Quartier: %s\n",$st_quartier_ligne);
		 $st_commentaires .= sprintf("N° maison: %d\n",$i_maison_ligne);
		 $st_commentaires .= sprintf("N° ménage: %d\n",$i_menage_ligne);
		 $st_commentaires .= sprintf("N° de page: %d",$i_page_ligne);
		 $acte->setCommentaires($st_commentaires);
		 $a_liste_actes[] = $acte;
		 $i_acte_courant = $acte->getIdf();
		 $i_nb_actes++;
		 if (!empty($st_nom))
		 {	 
			$personne = new Personne($connexionBD,$i_acte_courant,IDF_PRESENCE_INTV,'?',$st_nom,$st_prenom);
			$stats_patronyme->maj_patro($st_nom,LIB_RECENSEMENT,$pi_annee);
			$personne->setProfession($st_profession);
			$personne->setCommentaires("$st_fonction. $st_observations");
			$personne->setAge($st_age);
			$a_liste_personnes[]=$personne;
		 }
      }
	  else
	  {
		 $stats_patronyme->maj_patro($st_nom,LIB_RECENSEMENT,$pi_annee);
		 if (!empty($st_nom))
		 {
			if (preg_match('/sa femme/i',$st_fonction))
			{
				$derniere_personne = array_pop($a_liste_personnes);
				$derniere_personne->setSexe('M');
				$i_idf_derniere_personne=$derniere_personne->getIdf();
				$st_nom_derniere_personne=$derniere_personne->getPatronyme();
				$a_liste_personnes[]=$derniere_personne;
				
				$personne = new Personne($connexionBD,$i_acte_courant,IDF_PRESENCE_INTV,'F',$st_nom,$st_prenom);
				$personne->setProfession($st_profession);
				$personne->setCommentaires("$st_fonction. $st_observations");
				$personne->setAge($st_age);
				$i_idf_personne_courante = $personne->getIdf();
				$a_liste_personnes[]=$personne;
				
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte_courant,LIB_RECENSEMENT,$i_idf_derniere_personne,$st_nom_derniere_personne,$i_idf_personne_courante,$st_nom);		
			}
			else
			{
				$personne = new Personne($connexionBD,$i_acte_courant,IDF_PRESENCE_INTV,'?',$st_nom,$st_prenom);
				$personne->setProfession($st_profession);
				$personne->setCommentaires("$st_fonction $st_observations");
				$personne->setAge($st_age);
				$a_liste_personnes[]=$personne; 
			}
		}		
	  }
	  $st_rue_courante=$st_rue_ligne;
      $st_quartier_courant=$st_quartier_ligne;
      $i_maison_courante=$i_maison_ligne;
      $i_menage_courant=$i_menage_ligne;
      $i_page_courante = $i_page_ligne;
   } 
   fclose($pf);  
   fclose($pf_actes);
   // Sauvegarde des types d'acte par sécurité si 'Naissance' n'a pas été déjà défini comme type d'acte
   $type_acte->sauve($pst_rep_trav,$gst_parametres_load_data);
   $union->sauve($pst_rep_trav,$gst_parametres_load_data);
   $stats_patronyme->sauve($pst_rep_trav,$gst_parametres_load_data);
   $stats_commune->sauve();
   $prenom->sauve($pst_rep_trav,$gst_parametres_load_data);
   $profession->sauve($pst_rep_trav,$gst_parametres_load_data);
   $st_fich_personnes = addslashes($pst_rep_trav.'/personnes.csv');  
   $pf_personnes=fopen($st_fich_personnes,"w") or die("Impossible d'ecrire le fichier $st_fich_personnes");
   foreach ($a_liste_personnes as $personne)
   {
      fwrite($pf_personnes,$personne->vers_csv()."\n");
   }
   fclose($pf_personnes);
   $st_fich_actes = addslashes($pst_rep_trav.'/actes.csv');
   $pf_actes=fopen($st_fich_actes,"w") or die("Impossible d'ecrire le fichier $st_fich_actes");
   foreach ($a_liste_actes as $acte)
   {
      fwrite($pf_actes,$acte->vers_csv()."\n");
   }
   fclose($pf_actes);
   $connexionBD->execute_requete(Personne::requete_chargement_massif($st_fich_personnes,"\n",$gst_parametres_load_data));
   $connexionBD->execute_requete(Acte::requete_chargement_massif($st_fich_actes,"\n",$gst_parametres_load_data));
   $connexionBD->execute_requete("UNLOCK TABLES");     
   return $i_nb_actes;
}

?>