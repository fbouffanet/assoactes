<?php

/**
 * Charge les recensements
 * @param string $pst_fichier localisation du fichier
 * @param integer $pi_idf_commune : identifiant de la commune a charger
 * @param integer $pi_annee: ann�e de recensement
 * @param integer $pi_idf_source : identifiant de la source 
 * @param integer $pi_idf_releveur : identifiant de l'adherent releveur   
 * @return boolean : a reussi ou pas  
 */ 
function charge_recensement($pst_fichier,$pi_idf_commune,$pi_annee,$pi_idf_source,$pi_idf_releveur)
{
   global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd;
   $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   $type_acte = TypeActe::singleton($connexionBD);
   $union = Union::singleton($connexionBD);
   $patronyme = Patronyme::singleton($connexionBD);
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
   $connexionBD->execute_requete("LOCK TABLES `personne` write , `patronyme` write ,`prenom` write ,`acte` write, `profession` write, `commune_personne` write, `stats_patronyme` write, `stats_commune` write, `union` write, `acte` as a read, `personne` as p read,`personne` as pers_pere read,`personne` as pers_mere read,`type_acte` as ta read,`type_acte` write, `releveur` write,`adherent` read,`prenom_simple` write, `groupe_prenoms` write");
   
   $i_nb_actes =0 ;
   $st_rue_courante=null;
   $st_quartier_courant=null;
   $i_maison_courante=null;
   $i_menage_courant=null;
   $i_acte_courant = null;
   $i_page_courante = null;
   $i_idf_derniere_personne = null;
   $stats_commune->compte_acte(LIB_RECENSEMENT,$pi_annee);
   $i=0;   
   while (!feof($pf))
   {      
      $st_ligne       = fgets($pf);
      // saute les lignes vides
      if (preg_match("/^[ ]*$/",$st_ligne)) continue;
      if (preg_match("/^$/",$st_ligne)) continue;
	  if (preg_match("/^__________/",$st_ligne)) continue;
	  
      $a_champs       = explode(SEP_CSV,$st_ligne);
      // Saute les lignes dont le nombre de champs n'est pas valide
      $i_nb_champs = count($a_champs);
	  $i_annee_naissance = '';
	  $st_lieu_naissance = '';
	  $st_age='';
      switch ($i_nb_champs)
      {
		 case 13:
           list($st_rue_ligne,$st_quartier_ligne,$i_page_ligne,$i_maison_ligne,$i_menage_ligne) = array_splice($a_champs,0,5);
	         $st_rue_ligne = empty($st_rue_ligne) ? $st_rue_courante: $st_rue_ligne;
	         $st_quartier_ligne = empty($st_quartier_ligne) ? $st_quartier_courant: $st_quartier_ligne;
	         $i_maison_ligne = empty($i_maison_ligne) ? $i_maison_courante: $i_maison_ligne;
	         $i_menage_ligne = empty($i_menage_ligne) ? $i_menage_courant: $i_menage_ligne;
	         $i_page_ligne = empty($i_page_ligne) ? $i_page_courante: $i_page_ligne;
           list($st_nom,$st_prenom,$st_profession,$st_fonction,$st_observations,$st_age,$i_annee_naissance,$st_lieu_naissance) = array_splice($a_champs,0,7);
		 break;
		 case 12:
           list($st_rue_ligne,$st_quartier_ligne,$i_page_ligne,$i_maison_ligne,$i_menage_ligne) = array_splice($a_champs,0,5);
	         $st_rue_ligne = empty($st_rue_ligne) ? $st_rue_courante: $st_rue_ligne;
	         $st_quartier_ligne = empty($st_quartier_ligne) ? $st_quartier_courant: $st_quartier_ligne;
	         $i_maison_ligne = empty($i_maison_ligne) ? $i_maison_courante: $i_maison_ligne;
	         $i_menage_ligne = empty($i_menage_ligne) ? $i_menage_courant: $i_menage_ligne;
	         $i_page_ligne = empty($i_page_ligne) ? $i_page_courante: $i_page_ligne;
           list($st_nom,$st_prenom,$st_profession,$st_fonction,$st_observations,$st_age,$i_annee_naissance) = array_splice($a_champs,0,6);
		 break;   
         case 11:
           list($st_rue_ligne,$st_quartier_ligne,$i_page_ligne,$i_maison_ligne,$i_menage_ligne) = array_splice($a_champs,0,5);
	         $st_rue_ligne = empty($st_rue_ligne) ? $st_rue_courante: $st_rue_ligne;
	         $st_quartier_ligne = empty($st_quartier_ligne) ? $st_quartier_courant: $st_quartier_ligne;
	         $i_maison_ligne = empty($i_maison_ligne) ? $i_maison_courante: $i_maison_ligne;
	         $i_menage_ligne = empty($i_menage_ligne) ? $i_menage_courant: $i_menage_ligne;
	         $i_page_ligne = empty($i_page_ligne) ? $i_page_courante: $i_page_ligne;
           list($st_nom,$st_prenom,$st_profession,$st_fonction,$st_observations,$st_age) = array_splice($a_champs,0,6);
		 break;  
         case 10:
           list($st_rue_ligne,$st_quartier_ligne,$i_page_ligne,$i_maison_ligne,$i_menage_ligne) = array_splice($a_champs,0,5);
	         $st_rue_ligne = empty($st_rue_ligne) ? $st_rue_courante: $st_rue_ligne;
	         $st_quartier_ligne = empty($st_quartier_ligne) ? $st_quartier_courant: $st_quartier_ligne;
	         $i_maison_ligne = empty($i_maison_ligne) ? $i_maison_courante: $i_maison_ligne;
	         $i_menage_ligne = empty($i_menage_ligne) ? $i_menage_courant: $i_menage_ligne;
	         $i_page_ligne = empty($i_page_ligne) ? $i_page_courante: $i_page_ligne;
           list($st_nom,$st_prenom,$st_profession,$st_fonction,$st_observations) = array_splice($a_champs,0,5);          
          break;
		  default:
		   print("<div class=\"row alert alert-warning\">Ligne $i ignor&eacute;e ($i_nb_champs champs)</div>");
		   print("<div class=\"row alert alert-warning\">$st_ligne</div>");
            continue 2;   
      }      
      nettoie_nom($st_nom);    
      nettoie_prenom($st_prenom);   
	  if ((empty($st_rue_courante) && empty($st_quartier_courant) && empty($i_maison_courante) && empty($i_menage_courant)) || ($st_rue_ligne!=$st_rue_courante || $st_quartier_ligne!=$st_quartier_courant ||  $i_maison_ligne!=$i_maison_courante || $i_menage_ligne!=$i_menage_courant))
	  {
		 $acte = new Acte($connexionBD,$pi_idf_commune,LIB_RECENSEMENT,'N',$pi_idf_source,sprintf("00/00/%04d",$pi_annee),$releveur->idf_releveur($pi_idf_releveur));
		 $st_commentaires = sprintf("Nom de la Rue: %s\n",$st_rue_ligne);
		 $st_commentaires .= sprintf("Quartier: %s\n",$st_quartier_ligne);
		 $st_commentaires .= sprintf("N� maison: %d\n",$i_maison_ligne);
		 $st_commentaires .= sprintf("N� m�nage: %d\n",$i_menage_ligne);
		 $st_commentaires .= sprintf("N� de page: %d",$i_page_ligne);
		 $acte->setCommentaires($st_commentaires);
     $acte->setDetailSupp(1);
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
        if (!empty($st_age))
				  $personne->setAge($st_age);
			  
		if (!empty($i_annee_naissance))
					$personne->setAnneeNaissance($i_annee_naissance);
				
		if (!empty($st_lieu_naissance))
					$personne->setOrigine($st_lieu_naissance);
				
				$i_idf_personne_courante = $personne->getIdf();
				$a_liste_personnes[]=$personne;
				
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte_courant,LIB_RECENSEMENT,$i_idf_derniere_personne,$st_nom_derniere_personne,$i_idf_personne_courante,$st_nom);		
			}
			else
			{
				$personne = new Personne($connexionBD,$i_acte_courant,IDF_PRESENCE_INTV,'?',$st_nom,$st_prenom);
				$personne->setProfession($st_profession);
				$personne->setCommentaires("$st_fonction $st_observations");
        if (!empty($st_age))
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
	  $i++;
   } 
   fclose($pf);  
   
   // Sauvegarde des types d'acte par s�curit� si 'Naissance' n'a pas �t� d�j� d�fini comme type d'acte
	$type_acte->sauve();
	$union->sauve();
    $patronyme->sauve();	
	$stats_patronyme->sauve();
	$stats_commune->sauve();
	$commune_personne->sauve();
	$profession->sauve();   
	$prenom->sauve();
	
	if (count($a_liste_personnes)>0)
	{
		$st_personnes = '';
		$a_personnes_a_creer=array();
		$a_lignes_personnes = array();
		foreach ($a_liste_personnes as $personne)
		{
			list($st_ligne,$a_personnes)=$personne->ligne_sql_a_inserer();
			$a_lignes_personnes[]=$st_ligne;
			$a_personnes_a_creer=$a_personnes_a_creer+$a_personnes;
		}
		$connexionBD->initialise_params($a_personnes_a_creer);
		$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
		$connexionBD->execute_requete($st_requete);	  
	}
   
    if (count($a_liste_actes)>0)
	{
		$st_actes = '';
		$a_actes_a_creer=array();
		$a_lignes_actes = array();
		foreach ($a_liste_actes as $acte)
		{
			list($st_ligne,$a_actes)=$acte->ligne_sql_a_inserer();
			$a_lignes_actes[]=$st_ligne;
			$a_actes_a_creer=$a_actes_a_creer+$a_actes;
		}
		$connexionBD->initialise_params($a_actes_a_creer);
		$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
		$connexionBD->execute_requete($st_requete);	  
	}
   $connexionBD->execute_requete("UNLOCK TABLES");     
   return $i_nb_actes;
}

?>