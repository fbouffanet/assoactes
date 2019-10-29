<?php

require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/Identification.php');

require_once('../Commun/ConnexionBD.php');
require_once('../Commun/commun.php');
require_once('../Commun/phonex.cls.php');

require_once('../Administration/chargement/chargement.php');
require_once('../Administration/chargement/CompteurPersonne.php');
require_once('../Administration/chargement/Personne.php');
require_once('../Administration/chargement/CommunePersonne.php');
require_once('../Administration/chargement/Patronyme.php');
require_once('../Administration/chargement/Prenom.php');
require_once('../Administration/chargement/Profession.php');
require_once('../Administration/chargement/CompteurActe.php');
require_once('../Administration/chargement/TypeActe.php');
require_once('../Administration/chargement/Acte.php');
require_once('../Administration/chargement/Union.php');
require_once('../Administration/chargement/StatsCommune.php');
require_once('../Administration/chargement/StatsPatronyme.php');
require_once('../Administration/chargement/Releveur.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('<title>Migration des Actes ExpoActes</title>');
print('</head>');
print('<body>');
print('<div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

/**
* Charge les mariages d'une base ExpoActes
* @param integer $pi_code_insee: code insee
* @param string $pst_nom_commune: nom de la commune
* @param integer $pi_idf_commune : identifiant interne de la commune a charger dans la base
* @param integer $pi_idf_source : identifiant de la source 
* @param integer $pi_idf_releveur : identifiant de l'adherent releveur 
* @param array $pa_liste_mariages_existants : Liste des mariages existants indexés par date, nom époux, prénom époux, nom épouse, prénom épouse (valeur=true))        
* @return integer : nombre d'actes chargés  
*/ 
function charge_mariages($pi_code_insee,$pst_nom_commune,$pi_idf_commune,$pi_idf_source,$pi_idf_releveur,$pa_liste_mariages_existants)
{
	global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_prefixe_table;
	$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
	$union = Union::singleton($connexionBD);
	$stats_patronyme = new StatsPatronyme($connexionBD,$pi_idf_commune,$pi_idf_source);
	$stats_commune = new StatsCommune($connexionBD,$pi_idf_commune,$pi_idf_source);
	$releveur =  new Releveur($connexionBD);
	$a_liste_personnes = array();
	$a_liste_actes = array();
	$connexionBD -> initialise_params(array(':code_com'=>$pi_code_insee,':commune'=>$pst_nom_commune));
	$st_requete = sprintf("select DATETXT,DREPUB,COTE,LIBRE,NOM,PRE,ORI,DNAIS,AGE,COM,PRO,EXCON,EXC_PRE,EXC_COM,P_NOM,P_PRE,P_COM,P_PRO,M_NOM,M_PRE,M_COM,M_PRO,C_NOM,C_PRE,C_ORI,C_DNAIS,C_AGE,C_COM,C_PRO,C_EXCON,C_X_PRE,C_X_COM,CP_NOM,CP_PRE,CP_COM,CP_PRO,CM_NOM,CM_PRE,CM_COM,CM_PRO,T1_NOM,T1_PRE,T1_COM,T2_NOM,T2_PRE,T2_COM,T3_NOM,T3_PRE,T3_COM,T4_NOM,T4_PRE,T4_COM,COMGEN,IDNIM,PHOTOS from %s_mar3 where CODCOM=:code_com and COMMUNE=:commune",$gst_prefixe_table);
	$a_actes = $connexionBD -> sql_select_multiple($st_requete);	
	//Empeche le chargement de la table le temps de la mise a jour
	$connexionBD->execute_requete("LOCK TABLES `personne` write , `patronyme` write,`prenom` write,`acte` write, `profession` write, `commune_personne` write, `stats_patronyme` write, `stats_commune` write, `union` write,`acte` as a read,`personne` as p1 read,`personne` as p2 read,`union` as u read, `type_acte` as ta read,`type_acte` write, `releveur` write,`adherent` read,`prenom_simple` write, `groupe_prenoms` write");  
	$i_nb_actes =0 ;
	foreach ($a_actes as $a_ligne)
	{         		
		list($st_date,$st_date_rep,$st_cote,$st_libre,$st_nom_epx,$st_prn_epx,$st_orig_epx,$st_dnais_epx,$i_age_epx,$st_cmt_epx,$st_prof_epx,$st_nom_excjt_epx,$st_prn_excjt_epx,$st_cmt_excjt_epx,$st_nom_pere_epx,$st_prn_pere_epx,$st_cmt_pere_epx,$st_prof_pere_epx,$st_nom_mere_epx,$st_prn_mere_epx,$st_cmt_mere_epx,$st_prof_mere_epx,$st_nom_epse,$st_prn_epse,$st_orig_epse,$st_dnais_epse,$i_age_epse,$st_cmt_epse,$st_prof_epse,$st_nom_excjt_epse,$st_prn_excjt_epse,$st_cmt_excjt_epse,$st_nom_pere_epse,$st_prn_pere_epse,$st_cmt_pere_epse,$st_prof_pere_epse,$st_nom_mere_epse,$st_prn_mere_epse,$st_cmt_mere_epse,$st_prof_mere_epse,$st_nom_tem1,$st_prn_tem1,$st_cmt_tem1,$st_nom_tem2,$st_prn_tem2,$st_cmt_tem2,$st_nom_tem3,$st_prn_tem3,$st_cmt_tem3,$st_nom_tem4,$st_prn_tem4,$st_cmt_tem4,$st_cmt_acte,$i_num_enreg,$st_permalien) = $a_ligne;
		// nettoyage des noms
		nettoie_nom($st_nom_epx);
		nettoie_nom($st_nom_epse);      
		// Nettoyage des prénoms
		nettoie_prenom($st_prn_epx);
		nettoie_prenom($st_prn_epse);  
		if ((!isset($pa_liste_mariages_existants[strval($st_date)][strval($st_nom_epx)][strval($st_prn_epx)][strval($st_nom_epse)][strval($st_prn_epse)])))
		{
			$i_nb_actes++;
			$acte = new Acte($connexionBD,$pi_idf_commune,LIB_MARIAGE,'M',$pi_idf_source,$st_date,$releveur->idf_releveur($pi_idf_releveur));
			$i_annee = $acte->getAnnee();
			$stats_commune->compte_acte(LIB_MARIAGE,$i_annee); 
			$acte->importeNimV3($st_date_rep,$st_cote,$st_libre,$st_cmt_acte);
			$acte->setUrl($st_permalien);
			$i_detail_supp = "$st_date$st_date_rep$st_cote$st_libre$st_nom_epx$st_prn_epx$st_orig_epx$st_dnais_epx$i_age_epx$st_cmt_epx$st_prof_epx$st_nom_excjt_epx$st_prn_excjt_epx$st_cmt_excjt_epx$st_nom_pere_epx$st_prn_pere_epx$st_cmt_pere_epx$st_prof_pere_epx$st_nom_mere_epx$st_prn_mere_epx$st_cmt_mere_epx$st_prof_mere_epx$st_nom_epse$st_prn_epse$st_orig_epse$st_dnais_epse$i_age_epse$st_cmt_epse$st_prof_epse$st_nom_excjt_epse$st_prn_excjt_epse$st_cmt_excjt_epse$st_nom_pere_epse$st_prn_pere_epse$st_cmt_pere_epse$st_prof_pere_epse$st_nom_mere_epse$st_prn_mere_epse$st_cmt_mere_epse$st_prof_mere_epse$st_nom_tem1$st_prn_tem1$st_cmt_tem1$st_nom_tem2$st_prn_tem2$st_cmt_tem2$st_nom_tem3$st_prn_tem3$st_cmt_tem3$st_nom_tem4$st_prn_tem4$st_cmt_tem4$st_cmt_acte" != "$st_nom_epx$st_prn_epx$st_nom_epse$st_prn_epse" ? 1: 0; 
			$acte->setDetailSupp($i_detail_supp); // A corriger
			$i_acte=$acte->getIdf();
			$a_liste_actes[] = $acte;         
			// Création de l'epoux, de ses éventuels conjoint et parents
			$epoux = new Personne($connexionBD,$i_acte,IDF_PRESENCE_INTV,'M',$st_nom_epx,$st_prn_epx);
			$epoux->importeMarNimV3($st_orig_epx,$st_dnais_epx,$i_age_epx,$st_prof_epx);
			$epoux->setCommentaires($st_cmt_epx);
			$stats_patronyme->maj_patro($st_nom_epx,LIB_MARIAGE,$i_annee);
			if ($st_nom_excjt_epx=='' && $st_prn_excjt_epx!='')
				$st_nom_excjt_epx = LIB_MANQUANT;
			if ($st_nom_excjt_epx!= '')
			{
				// Tentative de récupération d'un fichier Nimègue V3 issu d'un fichier Nimègue V2 
				if ($st_prn_excjt_epx=='' && $st_cmt_excjt_epx== '')
				{
					list($st_nom_excjt_epx,$st_prn_excjt_epx,$st_cmt_excjt_epx) = infos_conjoint($st_nom_excjt_epx);
				}          
				$cjt_epoux = new Personne($connexionBD,$i_acte,IDF_PRESENCE_EXCJT,'F',$st_nom_excjt_epx,$st_prn_excjt_epx);
				$cjt_epoux->setCommentaires($st_cmt_excjt_epx);
				$a_liste_personnes[]=$cjt_epoux;
				$stats_patronyme->maj_patro($st_nom_excjt_epx,LIB_MARIAGE,$i_annee);               
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_MARIAGE,$epoux->getIdf(),$st_nom_epx,$cjt_epoux->getIdf(),$st_nom_excjt_epx);      
			}   
			if ($st_nom_pere_epx=='' && $st_prn_pere_epx!='')
				$st_nom_pere_epx = LIB_MANQUANT;             
			if ($st_nom_pere_epx!='')
			{
				$pere_epoux = new Personne($connexionBD,$i_acte,IDF_PRESENCE_PERE,'M',$st_nom_pere_epx,$st_prn_pere_epx);
				$stats_patronyme->maj_patro($st_nom_pere_epx,LIB_MARIAGE,$i_annee);
				$pere_epoux->setProfession($st_prof_pere_epx);
				$pere_epoux->setCommentaires($st_cmt_pere_epx);
				$a_liste_personnes[]=$pere_epoux;
				$epoux->setIdfPere($pere_epoux->getIdf());
			}
			if ($st_nom_mere_epx=='' && $st_prn_mere_epx!='')
				$st_nom_mere_epx = LIB_MANQUANT;
			if ($st_nom_mere_epx!='')
			{
				$mere_epoux = new Personne($connexionBD,$i_acte,IDF_PRESENCE_MERE,'F',$st_nom_mere_epx,$st_prn_mere_epx);
				$stats_patronyme->maj_patro($st_nom_mere_epx,LIB_MARIAGE,$i_annee);
				$mere_epoux->setProfession($st_prof_mere_epx); 
				$mere_epoux->setCommentaires($st_cmt_mere_epx);
				$a_liste_personnes[]=$mere_epoux;
				$epoux->setIdfMere($mere_epoux->getIdf());
			}
			$a_liste_personnes[]=$epoux;
			if ($st_nom_pere_epx!='' && $st_nom_mere_epx!='')
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_MARIAGE,$pere_epoux->getIdf(),$st_nom_pere_epx,$mere_epoux->getIdf(),$st_nom_mere_epx); 
			// Création de l'epouse, de ses éventuels conjoint et parents
			$epouse = new Personne($connexionBD,$i_acte,IDF_PRESENCE_INTV,'F',$st_nom_epse,$st_prn_epse);
			$epouse->importeMarNimV3($st_orig_epse,$st_dnais_epse,$i_age_epse,$st_prof_epse);
			$epouse->setCommentaires($st_cmt_epse);
			$stats_patronyme->maj_patro($st_nom_epse,LIB_MARIAGE,$i_annee);
			if ($st_nom_excjt_epse=='' && $st_prn_excjt_epse!='')
				$st_nom_excjt_epse = LIB_MANQUANT;
			if ($st_nom_excjt_epse!= '')
			{
				// Tentative de récupération d'un fichier Nimègue V3 issu d'un fichier Nimègue V2 
				if ($st_prn_excjt_epse=='' && $st_cmt_excjt_epse== '')
				{
					list($st_nom_excjt_epse,$st_prn_excjt_epse,$st_cmt_excjt_epse) = infos_conjoint($st_nom_excjt_epse);
				}	 
				$cjt_epouse = new Personne($connexionBD,$i_acte,IDF_PRESENCE_EXCJT,'M',$st_nom_excjt_epse,$st_prn_excjt_epse);
				$cjt_epouse->setCommentaires($st_cmt_excjt_epse);
				$stats_patronyme->maj_patro($st_nom_excjt_epse,LIB_MARIAGE,$i_annee);               
				$a_liste_personnes[]=$cjt_epouse;
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_MARIAGE,$cjt_epouse->getIdf(),$st_nom_excjt_epse,$epouse->getIdf(),$st_nom_epse);   
			}           
			if ($st_nom_pere_epse=='' && $st_prn_pere_epse!='')
				$st_nom_pere_epse = LIB_MANQUANT;         
			if ($st_nom_pere_epse!='')
			{
				$pere_epouse = new Personne($connexionBD,$i_acte,IDF_PRESENCE_PERE,'M',$st_nom_pere_epse,$st_prn_pere_epse);
				$stats_patronyme->maj_patro($st_nom_pere_epse,LIB_MARIAGE,$i_annee);
				$pere_epouse->setProfession($st_prof_pere_epse);
				$pere_epouse->setCommentaires($st_cmt_pere_epse);
				$a_liste_personnes[]=$pere_epouse;
				$epouse->setIdfPere($pere_epouse->getIdf());
			}
			if ($st_nom_mere_epse=='' && $st_prn_mere_epse!='')
				$st_nom_mere_epse = LIB_MANQUANT;
			if ($st_nom_mere_epse!='')
			{
				$mere_epouse = new Personne($connexionBD,$i_acte,IDF_PRESENCE_MERE,'F',$st_nom_mere_epse,$st_prn_mere_epse);
				$mere_epouse->setProfession($st_prof_mere_epse);
				$mere_epouse->setCommentaires($st_cmt_mere_epse);
				$stats_patronyme->maj_patro($st_nom_mere_epse,LIB_MARIAGE,$i_annee);
				$a_liste_personnes[]=$mere_epouse;
				$epouse->setIdfMere($mere_epouse->getIdf());
			}
			$a_liste_personnes[]=$epouse;
			if ($st_nom_pere_epse!='' && $st_nom_mere_epse!='')
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_MARIAGE,$pere_epouse->getIdf(),$st_nom_pere_epse,$mere_epouse->getIdf(),$st_nom_mere_epse); 
			// Création du lien conjoint entre époux
			$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_MARIAGE,$epoux->getIdf(),$st_nom_epx,$epouse->getIdf(),$st_nom_epse);
			if ($st_nom_tem1=='' && ($st_prn_tem1!='' || $st_cmt_tem1!=''))
				$st_nom_tem1 = LIB_MANQUANT;
			if ($st_nom_tem1!='')
			{
				$temoin1 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem1,$st_prn_tem1);
				$temoin1->setCommentaires($st_cmt_tem1);
				$stats_patronyme->maj_patro($st_nom_tem1,LIB_MARIAGE,$i_annee);            
				$a_liste_personnes[]=$temoin1;
			}
			if ($st_nom_tem2=='' && ($st_prn_tem2!='' || $st_cmt_tem2!=''))
				$st_nom_tem2 = LIB_MANQUANT;
			if ($st_nom_tem2!='')
			{
				$temoin2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem2,$st_prn_tem2);
				$temoin2->setCommentaires($st_cmt_tem2);
				$stats_patronyme->maj_patro($st_nom_tem2,LIB_MARIAGE,$i_annee);           
				$a_liste_personnes[]=$temoin2;
			}
			if ($st_nom_tem3=='' && ($st_prn_tem3!='' || $st_cmt_tem3!=''))
				$st_nom_tem3 = LIB_MANQUANT;   
			if ($st_nom_tem3!='')
			{
				$temoin3 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem3,$st_prn_tem3);
				$temoin3->setCommentaires($st_cmt_tem3);
				$stats_patronyme->maj_patro($st_nom_tem3,LIB_MARIAGE,$i_annee);            
				$a_liste_personnes[]=$temoin3;
			}
			if ($st_nom_tem4=='' && ($st_prn_tem4!='' || $st_cmt_tem4!=''))
				$st_nom_tem4 = LIB_MANQUANT;
			if ($st_nom_tem4!='')
			{
				$temoin4 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem4,$st_prn_tem4);
				$temoin4->setCommentaires($st_cmt_tem4);
				$stats_patronyme->maj_patro($st_nom_tem4,LIB_MARIAGE,$i_annee);            
				$a_liste_personnes[]=$temoin4;
			}
		}
		else
		{
			$this->a_deja_existants[] = "Le mariage $st_prn_epx $st_nom_epx X $st_prn_epse $st_nom_epse du $st_date existe déjà";
		} 
	}   
  
	if (count($a_liste_personnes)>0)
	{
		$a_liste_personnes[0]->sauveCommunePersonne();
		$a_liste_personnes[0]->sauveProfession();
		$a_liste_personnes[0]->sauvePrenom();
		$st_personnes = '';
		$a_personnes_a_creer=array();
		$a_lignes_personnes = array();
		$i_nb_personnes_courant  =1;
		reset($a_liste_personnes);
		while($personne=current($a_liste_personnes))
		{
			list($st_ligne,$a_personnes)=$personne->ligne_sql_a_inserer();
			$a_lignes_personnes[]=$st_ligne;
			$a_personnes_a_creer=$a_personnes_a_creer+$a_personnes;
			if ($i_nb_personnes_courant==NB_PERSONNES_BLOC_CHGMT)
			{ 
				$connexionBD->initialise_params($a_personnes_a_creer);
				$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_personnes_courant=1;
				$st_personnes = '';
				$a_personnes_a_creer=array();
				$a_lignes_personnes = array();
			}
			next($a_liste_personnes);
			$i_nb_personnes_courant++;
		}
		if (count($a_personnes_a_creer)>0)
		{
			$connexionBD->initialise_params($a_personnes_a_creer);
			$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
			$connexionBD->execute_requete($st_requete);
		}  
	}
   
	if (count($a_liste_actes)>0)
	{
		$st_actes = '';
		$a_actes_a_creer=array();
		$a_lignes_actes = array();
		$i_nb_actes_courant =1;
		reset($a_liste_actes);
		while($acte=current($a_liste_actes))
		{
			list($st_ligne,$a_actes)=$acte->ligne_sql_a_inserer();
			$a_lignes_actes[]=$st_ligne;
			$a_actes_a_creer=$a_actes_a_creer+$a_actes;
			if ($i_nb_actes_courant==NB_ACTES_BLOC_CHGMT)
			{			
				$connexionBD->initialise_params($a_actes_a_creer);
				$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_actes_courant=1;
				$st_actes = '';
				$a_actes_a_creer=array();
				$a_lignes_actes = array();
			}
			next($a_liste_actes);
			$i_nb_actes_courant++;
		}
		if (count($a_actes_a_creer)>0)
		{
			$connexionBD->initialise_params($a_actes_a_creer);
			$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
			$connexionBD->execute_requete($st_requete);	  
		}
	}
		
	$union->sauve();
	$stats_patronyme->sauvePatronyme();	
	$stats_patronyme->sauveTypeActe();	
	$stats_patronyme->sauve();
	$stats_commune->sauve();
	$connexionBD->execute_requete("UNLOCK TABLES");  

	return $i_nb_actes;
}
   
/**
 * Charge les actes divers d'une base ExpoActes
 * @param integer $pi_code_insee: code insee
 * @param string $pst_nom_commune: nom de la commune
 * @param integer $pi_idf_commune : identifiant interne de la commune a charger dans la base
 * @param integer $pi_idf_source : identifiant de la source 
 * @param integer $pi_idf_releveur : identifiant de l'adherent releveur 
 * @param array $pa_liste_divers_existants : Liste des divers existants indexés par date, nom époux, prénom époux, nom épouse, prénom épouse (valeur=true))  
 * @return integer : nombre d'actes chargés   
 */ 
function charge_divers($pi_code_insee,$pst_nom_commune,$pi_idf_commune,$pi_idf_source,$pi_idf_releveur,$pa_liste_divers_existants)
{
   global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_prefixe_table;
   $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   $union = Union::singleton($connexionBD);
   $stats_patronyme = new StatsPatronyme($connexionBD,$pi_idf_commune,$pi_idf_source);
   $stats_commune = new StatsCommune($connexionBD,$pi_idf_commune,$pi_idf_source);
   $releveur =  new Releveur($connexionBD);   
   $a_types_acte_par_idf = $connexionBD->liste_clef_par_valeur("select idf,nom from type_acte");
   $a_liste_personnes = array();
   $a_liste_actes = array();  
   $connexionBD -> initialise_params(array(':code_com'=>$pi_code_insee,':commune'=>$pst_nom_commune));
	$st_requete = sprintf("select DATETXT,DREPUB,COTE,LIBRE,SIGLE,LIBELLE,NOM,PRE,SEXE,ORI,DNAIS,AGE,COM,PRO,EXCON,EXC_PRE,EXC_COM,P_NOM,P_PRE,P_COM,P_PRO,M_NOM,M_PRE,M_COM,M_PRO,C_NOM,C_PRE,C_SEXE,C_ORI,C_DNAIS,C_AGE,C_COM,C_PRO,C_EXCON,C_X_PRE,C_X_COM,CP_NOM,CP_PRE,CP_COM,CP_PRO,CM_NOM,CM_PRE,CM_COM,CM_PRO,T1_NOM,T1_PRE,T1_COM,T2_NOM,T2_PRE,T2_COM,T3_NOM,T3_PRE,T3_COM,T4_NOM,T4_PRE,T4_COM,COMGEN,IDNIM,PHOTOS from %s_div3 where CODCOM=:code_com and COMMUNE=:commune",$gst_prefixe_table);
	$a_actes = $connexionBD -> sql_select_multiple($st_requete);
   
   // Empeche le chargement de la table le temps de la mise a jour
   $connexionBD->execute_requete("LOCK TABLES `personne` write, `patronyme` write, `prenom` write ,`acte` write, `profession` write, `commune_personne` write, `stats_patronyme` write, `stats_commune` write, `union` write,`personne` as p1 read,`personne` as p2 read,`union` as u read,`type_acte` as ta read,`type_acte` write, `acte` as a read,`releveur` write,`adherent` read,`prenom_simple` write, `groupe_prenoms` write"); 
   // les redondances de donnees seront traitees par sql load data et la contrainte sur l'index nom   
   $i_nb_actes =0 ;
	foreach ($a_actes as $a_ligne)
	{         
		list($st_date,$st_date_rep,$st_cote,$st_libre,$st_sigle_type_acte,$st_type_acte,$st_nom_intv1,$st_prn_intv1,$c_sexe_intv1,$st_orig_intv1,$st_dnais_intv1,$i_age_intv1,$st_cmt_intv1,$st_prof_intv1,$st_nom_excjt_intv1,$st_prn_excjt_intv1,$st_cmt_excjt_intv1,$st_nom_pere_intv1,$st_prn_pere_intv1,$st_cmt_pere_intv1,$st_prof_pere_intv1,$st_nom_mere_intv1,$st_prn_mere_intv1,$st_cmt_mere_intv1,$st_prof_mere_intv1,$st_nom_intv2,$st_prn_intv2,$c_sexe_intv2,$st_orig_intv2,$st_dnais_intv2,$i_age_intv2,$st_cmt_intv2,$st_prof_intv2,$st_nom_excjt_intv2,$st_prn_excjt_intv2,$st_cmt_excjt_intv2,$st_nom_pere_intv2,$st_prn_pere_intv2,$st_cmt_pere_intv2,$st_prof_pere_intv2,$st_nom_mere_intv2,$st_prn_mere_intv2,$st_cmt_mere_intv2,$st_prof_mere_intv2,$st_nom_tem1,$st_prn_tem1,$st_cmt_tem1,$st_nom_tem2,$st_prn_tem2,$st_cmt_tem2,$st_nom_tem3,$st_prn_tem3,$st_cmt_tem3,$st_nom_tem4,$st_prn_tem4,$st_cmt_tem4,$st_cmt_acte,$i_num_enreg,$st_permalien) = $a_ligne;
		// nettoyage des noms
		nettoie_nom($st_nom_intv1);
		nettoie_nom($st_nom_intv2);      
		// Nettoyage des prénoms
		nettoie_prenom($st_prn_intv1);
		nettoie_prenom($st_prn_intv2);
		if (!array_key_exists(strval($st_type_acte),$a_types_acte_par_idf))
			$b_acte_nexistepas = true;
		else
			$b_acte_nexistepas = !isset($pa_liste_divers_existants[strval($st_date)][strval($st_nom_intv1)][strval($st_prn_intv1)][strval($st_nom_intv2)][strval($st_prn_intv2)]);
		if ($b_acte_nexistepas)
		{
			$i_nb_actes++;
			$acte = new Acte($connexionBD,$pi_idf_commune,$st_type_acte,$st_sigle_type_acte,$pi_idf_source,$st_date,$releveur->idf_releveur($pi_idf_releveur));
			$i_annee = $acte->getAnnee();
			$stats_commune->compte_acte($st_type_acte,$i_annee); 
			$acte->importeNimV3($st_date_rep,$st_cote,$st_libre,$st_cmt_acte);
			$acte->setUrl($st_permalien);
			$i_detail_supp = "$st_nom_intv1$st_prn_intv1$c_sexe_intv1$st_orig_intv1$st_dnais_intv1$i_age_intv1$st_cmt_intv1$st_prof_intv1$st_nom_excjt_intv1$st_prn_excjt_intv1$st_cmt_excjt_intv1$st_nom_pere_intv1$st_prn_pere_intv1$st_cmt_pere_intv1$st_prof_pere_intv1$st_nom_mere_intv1$st_prn_mere_intv1$st_cmt_mere_intv1$st_prof_mere_intv1$st_nom_intv2$st_prn_intv2$c_sexe_intv2$st_orig_intv2$st_dnais_intv2$i_age_intv2$st_cmt_intv2$st_prof_intv2$st_nom_excjt_intv2$st_prn_excjt_intv2$st_cmt_excjt_intv2$st_nom_pere_intv2$st_prn_pere_intv2$st_cmt_pere_intv2$st_prof_pere_intv2$st_nom_mere_intv2$st_prn_mere_intv2$st_cmt_mere_intv2$st_prof_mere_intv2$st_nom_tem1$st_prn_tem1$st_cmt_tem1$st_nom_tem2$st_prn_tem2$st_cmt_tem2$st_nom_tem3$st_prn_tem3$st_cmt_tem3$st_nom_tem4$st_prn_tem4$st_cmt_tem4$st_cmt_acte" != "$st_nom_intv1$st_prn_intv1$st_nom_intv2$st_prn_intv2" ? 1: 0; 
			$acte->setDetailSupp($i_detail_supp);
			$i_acte=$acte->getIdf();         
			$a_liste_actes[] = $acte;
			// Création de l'intervenant 1, de ses éventuels conjoint et parents
			$intv1 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_INTV,$c_sexe_intv1,$st_nom_intv1,$st_prn_intv1);
			$intv1->importeDivNimV3($st_orig_intv1,$st_dnais_intv1,$i_age_intv1,$st_prof_intv1);
			$intv1->setCommentaires($st_cmt_intv1);
			$stats_patronyme->maj_patro($st_nom_intv1,$st_type_acte,$i_annee);
			if ($st_nom_excjt_intv1=='' && $st_prn_excjt_intv1!='')
               $st_nom_excjt_intv1 = LIB_MANQUANT;
			if ($st_nom_excjt_intv1!= '')
			{         
				$c_sexe_cjt_intv1 = ($c_sexe_intv1=='M') ? 'F' : 'M';
				// Tentative de récupération d'un fichier Nimègue V3 issu d'un fichier Nimègue V2 
				if ($st_prn_excjt_intv1=='' && $st_cmt_excjt_intv1== '')
				{
					list($st_nom_excjt_intv1,$st_prn_excjt_intv1,$st_cmt_excjt_intv1) = infos_conjoint($st_nom_excjt_intv1);
				}     
				$cjt_intv1 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_EXCJT,$c_sexe_cjt_intv1,$st_nom_excjt_intv1,$st_prn_excjt_intv1);
				$cjt_intv1->setCommentaires($st_cmt_excjt_intv1);
				$stats_patronyme->maj_patro($st_nom_excjt_intv1,$st_type_acte,$i_annee);               
				$a_liste_personnes[]=$cjt_intv1;
				switch ($c_sexe_intv1)
				{
					case 'M' : $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$intv1->getIdf(),$st_nom_intv1,$cjt_intv1->getIdf(),$st_nom_excjt_intv1);break;
					case 'F' : $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$cjt_intv1->getIdf(),$st_nom_excjt_intv1,$intv1->getIdf(),$st_nom_intv1);break;
					default : $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$intv1->getIdf(),$st_nom_intv1,$cjt_intv1->getIdf(),$st_nom_excjt_intv1);                           
				}
			}   
			if ($st_nom_pere_intv1=='' && $st_prn_pere_intv1!='')
				$st_nom_pere_intv1 = LIB_MANQUANT;
			if ($st_nom_pere_intv1!='')
			{
				$pere_intv1= new Personne($connexionBD,$i_acte,IDF_PRESENCE_PERE,'M',$st_nom_pere_intv1,$st_prn_pere_intv1);
				$stats_patronyme->maj_patro($st_nom_pere_intv1,$st_type_acte,$i_annee);
				$pere_intv1->setProfession($st_prof_pere_intv1);
				$pere_intv1->setCommentaires($st_cmt_pere_intv1);
				$a_liste_personnes[]=$pere_intv1;
				$intv1->setIdfPere($pere_intv1->getIdf());
			}
			if ($st_nom_mere_intv1=='' && $st_prn_mere_intv1!='')
				$st_nom_mere_intv1 = LIB_MANQUANT;
			if ($st_nom_mere_intv1!='')
			{
				$mere_intv1= new Personne($connexionBD,$i_acte,IDF_PRESENCE_MERE,'F',$st_nom_mere_intv1,$st_prn_mere_intv1);
				$stats_patronyme->maj_patro($st_nom_mere_intv1,$st_type_acte,$i_annee);
				$mere_intv1->setProfession($st_prof_mere_intv1);
				$mere_intv1->setCommentaires($st_cmt_mere_intv1);
				$a_liste_personnes[]=$mere_intv1;
				$intv1->setIdfMere($mere_intv1->getIdf());
			}
			$a_liste_personnes[]=$intv1;
			if ($st_nom_pere_intv1!='' && $st_nom_mere_intv1!='')
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$pere_intv1->getIdf(),$st_nom_pere_intv1,$mere_intv1->getIdf(),$st_nom_mere_intv1); 
			// Création de l'intervenant2, de ses éventuels conjoint et parents
			if($st_nom_intv2!='')
			{
				$intv2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_INTV,$c_sexe_intv2,$st_nom_intv2,$st_prn_intv2);
				$intv2->importeDivNimV3($st_orig_intv2,$st_dnais_intv2,$i_age_intv2,$st_prof_intv2);
				$intv2->setCommentaires($st_cmt_intv2);
				$stats_patronyme->maj_patro($st_nom_intv2,$st_type_acte,$i_annee);
				if ($st_nom_excjt_intv2=='' && $st_prn_excjt_intv2!='')
					$st_nom_excjt_intv2 = LIB_MANQUANT;
				if ($st_nom_excjt_intv2!= '')
				{
					$c_sexe_cjt_intv2 = ($c_sexe_intv2=='M') ? 'F' : 'M';
					// Tentative de récupération d'un fichier Nimègue V3 issu d'un fichier Nimègue V2 
					if ($st_prn_excjt_intv2=='' && $st_cmt_excjt_intv2== '')
					{
						list($st_nom_excjt_intv2,$st_prn_excjt_intv2,$st_cmt_excjt_intv2) = infos_conjoint($st_nom_excjt_intv2);
					}      
					$cjt_intv2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_EXCJT,$c_sexe_cjt_intv2,$st_nom_excjt_intv2,$st_prn_excjt_intv2);
					$stats_patronyme->maj_patro($st_nom_excjt_intv2,$st_type_acte,$i_annee);
					$cjt_intv2->setCommentaires($st_cmt_excjt_intv2);
					$a_liste_personnes[]=$cjt_intv2;
					switch ($c_sexe_intv2)
					{
						case 'M' : $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$intv2->getIdf(),$st_nom_intv2,$cjt_intv2->getIdf(),$st_nom_excjt_intv2);break;
						case 'F' : $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$cjt_intv2->getIdf(),$st_nom_excjt_intv2,$intv2->getIdf(),$st_nom_intv2);break;
						default : $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$intv2->getIdf(),$st_nom_intv2,$cjt_intv2->getIdf(),$st_nom_excjt_intv2);
					}
                                     
				}    
				if ($st_nom_pere_intv2=='' && $st_prn_pere_intv2!='')
					$st_nom_pere_intv2 = LIB_MANQUANT;         
				if ($st_nom_pere_intv2!='')
				{
					$pere_intv2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_PERE,'M',$st_nom_pere_intv2,$st_prn_pere_intv2);
					$stats_patronyme->maj_patro($st_nom_pere_intv2,$st_type_acte,$i_annee);
					$pere_intv2->setProfession($st_prof_pere_intv2);
					$pere_intv2->setCommentaires($st_cmt_pere_intv2);
					$a_liste_personnes[]=$pere_intv2;
					$intv2->setIdfPere($pere_intv2->getIdf());
				}
				if ($st_nom_mere_intv2=='' && $st_prn_mere_intv2!='')
					$st_nom_mere_intv2 = LIB_MANQUANT;
				if ($st_nom_mere_intv2!='')
				{
					$mere_intv2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_MERE,'F',$st_nom_mere_intv2,$st_prn_mere_intv2);
					$stats_patronyme->maj_patro($st_nom_mere_intv2,$st_type_acte,$i_annee);
					$mere_intv2->setProfession($st_prof_mere_intv2);
					$mere_intv2->setCommentaires($st_cmt_mere_intv2);
					$a_liste_personnes[]=$mere_intv2;
					$intv2->setIdfMere($mere_intv2->getIdf());
				}
				$a_liste_personnes[]=$intv2;
				if ($st_nom_pere_intv2!='' && $st_nom_mere_intv2!='')
					$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$pere_intv2->getIdf(),$st_nom_pere_intv2,$mere_intv2->getIdf(),$st_nom_mere_intv2); 
				// Création du lien couple entre intervenant si c'est un couple :
				// personnes de sexes différents
				if (($c_sexe_intv1=='M' && $c_sexe_intv2=='F')
					||
					($c_sexe_intv1=='F' && $c_sexe_intv2=='M')
					||
                 ($c_sexe_intv1=='?' && $c_sexe_intv2=='?')
                )
					$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,$st_type_acte,$intv1->getIdf(),$st_nom_intv1,$intv2->getIdf(),$st_nom_intv2);   
			}
			if ($st_nom_tem1=='' && ($st_prn_tem1!='' || $st_cmt_tem1!=''))
               $st_nom_tem1 = LIB_MANQUANT;
			if ($st_nom_tem1!='')
			{
				$temoin1 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem1,$st_prn_tem1);
				$temoin1->setCommentaires($st_cmt_tem1);
				$stats_patronyme->maj_patro($st_nom_tem1,$st_type_acte,$i_annee);            
				$a_liste_personnes[]=$temoin1;
			}
			if ($st_nom_tem2=='' && ($st_prn_tem2!='' || $st_cmt_tem2!=''))
				$st_nom_tem2 = LIB_MANQUANT;
			if ($st_nom_tem2!='')
			{
				$temoin2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem2,$st_prn_tem2);
				$temoin2->setCommentaires($st_cmt_tem2);
				$stats_patronyme->maj_patro($st_nom_tem2,$st_type_acte,$i_annee);           
				$a_liste_personnes[]=$temoin2;
			}
			if ($st_nom_tem3=='' && ($st_prn_tem3!='' || $st_cmt_tem3!=''))
				$st_nom_tem3 = LIB_MANQUANT;   
			if ($st_nom_tem3!='')
			{
				$temoin3 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem3,$st_prn_tem3);
				$temoin3->setCommentaires($st_cmt_tem3);
				$stats_patronyme->maj_patro($st_nom_tem3,$st_type_acte,$i_annee);            
				$a_liste_personnes[]=$temoin3;
			}
			if ($st_nom_tem4=='' && ($st_prn_tem4!='' || $st_cmt_tem4!=''))
               $st_nom_tem4 = LIB_MANQUANT;
			if ($st_nom_tem4!='')
			{
				$temoin4 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem4,$st_prn_tem4);
				$temoin4->setCommentaires($st_cmt_tem4);
				$stats_patronyme->maj_patro($st_nom_tem4,$st_type_acte,$i_annee);            
				$a_liste_personnes[]=$temoin4;
			}
		}
		else
		{
			$this->a_deja_existants[] ="L'acte divers $st_prn_intv1 $st_nom_intv1 X $st_prn_intv2 $st_nom_intv2 du $st_date existe déjà";
		} 
	}      
	
	if (count($a_liste_personnes)>0)
	{
		$a_liste_personnes[0]->sauveCommunePersonne();
		$a_liste_personnes[0]->sauveProfession();
		$a_liste_personnes[0]->sauvePrenom();
		$st_personnes = '';
		$a_personnes_a_creer=array();
		$a_lignes_personnes = array();
		$i_nb_personnes_courant  =1;
		reset($a_liste_personnes);
		while($personne=current($a_liste_personnes))
		{
			list($st_ligne,$a_personnes)=$personne->ligne_sql_a_inserer();
			$a_lignes_personnes[]=$st_ligne;
			$a_personnes_a_creer=$a_personnes_a_creer+$a_personnes;
			if ($i_nb_personnes_courant==NB_PERSONNES_BLOC_CHGMT)
			{ 
				$connexionBD->initialise_params($a_personnes_a_creer);
				$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_personnes_courant=1;
				$st_personnes = '';
				$a_personnes_a_creer=array();
				$a_lignes_personnes = array();
			}
			next($a_liste_personnes);
			$i_nb_personnes_courant++;
		}
		if (count($a_personnes_a_creer)>0)
		{
			$connexionBD->initialise_params($a_personnes_a_creer);
			$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
			$connexionBD->execute_requete($st_requete);
		}  
	}   
    if (count($a_liste_actes)>0)
	{
		$a_liste_actes[0]->sauveTypeActe();
		$st_actes = '';
		$a_actes_a_creer=array();
		$a_lignes_actes = array();
		$i_nb_actes_courant =1;
		reset($a_liste_actes);
		while($acte=current($a_liste_actes))
		{
			list($st_ligne,$a_actes)=$acte->ligne_sql_a_inserer();
			$a_lignes_actes[]=$st_ligne;
			$a_actes_a_creer=$a_actes_a_creer+$a_actes;
			if ($i_nb_actes_courant==NB_ACTES_BLOC_CHGMT)
			{			
				$connexionBD->initialise_params($a_actes_a_creer);
				$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_actes_courant=1;
				$st_actes = '';
				$a_actes_a_creer=array();
				$a_lignes_actes = array();
			}
			next($a_liste_actes);
			$i_nb_actes_courant++;
		}
		if (count($a_actes_a_creer)>0)
		{		
			$connexionBD->initialise_params($a_actes_a_creer);
			$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
			$connexionBD->execute_requete($st_requete);	  
		}
	}
	$union->sauve();
	$stats_patronyme->sauvePatronyme();	
	$stats_patronyme->sauveTypeActe();		
	$stats_patronyme->sauve();
	$stats_commune->sauve();
	
	
	$connexionBD->execute_requete("UNLOCK TABLES");    
	return $i_nb_actes;
} 

/**
 * Charge les naissances d'une base ExpoActes
 * @param integer $pi_code_insee: code insee
 * @param string $pst_nom_commune: nom de la commune
 * @param integer $pi_idf_commune : identifiant interne de la commune a charger dans la base
 * @param integer $pi_idf_source : identifiant de la source 
 * @param integer $pi_idf_releveur : identifiant de l'adherent releveur 
 * @param array $pa_liste_naissances_existantes : Liste des naissances existantes indexées par date, nom , prénom,(valeur=true))    
* @return integer : nombre d'actes chargés   
 */ 
function charge_naissances($pi_code_insee,$pst_nom_commune,$pi_idf_commune,$pi_idf_source,$pi_idf_releveur,$pa_liste_naissances_existantes)
{
	global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_prefixe_table;
	$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
	$union = Union::singleton($connexionBD);
	$stats_patronyme = new StatsPatronyme($connexionBD,$pi_idf_commune,$pi_idf_source);
	$stats_commune = new StatsCommune($connexionBD,$pi_idf_commune,$pi_idf_source);
	$releveur =  new Releveur($connexionBD);
	$a_liste_personnes = array();
	$a_liste_actes = array();
	$connexionBD -> initialise_params(array(':code_com'=>$pi_code_insee,':commune'=>$pst_nom_commune));
	$st_requete = sprintf("select DATETXT,DREPUB,COTE,LIBRE,NOM,PRE,SEXE,COM,P_NOM,P_PRE,P_COM,P_PRO,M_NOM,M_PRE,M_COM,M_PRO,T1_NOM,T1_PRE,T1_COM,T2_NOM,T2_PRE,T2_COM,COMGEN,IDNIM,PHOTOS
 from %s_nai3 where CODCOM=:code_com and COMMUNE=:commune",$gst_prefixe_table);
	$a_actes = $connexionBD -> sql_select_multiple($st_requete);
	// Empeche le chargement de la table le temps de la mise a jour
   $connexionBD->execute_requete("LOCK TABLES `personne` write, `patronyme` write , `prenom` write ,`acte` write, `profession` write, `commune_personne` write, `stats_patronyme` write, `stats_commune` write, `union` write, `acte` as a read, `personne` as p read,`personne` as pers_pere read,`personne` as 	pers_mere read,`type_acte` as ta read,`type_acte` write, `releveur` write,`adherent` read,`prenom_simple` write, `groupe_prenoms` write");
	// les redondances de donnees seront traitees par sql load data et la contrainte sur l'index nom
	$i_nb_actes =0 ;
	foreach ($a_actes as $a_ligne)
	{      

		list($st_date,$st_date_rep,$st_cote,$st_libre,$st_nom,$st_prn,$st_sexe,$st_cmt,$st_nom_pere,$st_prn_pere,$st_cmt_pere,$st_prof_pere,$st_nom_mere,$st_prn_mere,$st_cmt_mere,$st_prof_mere,$st_nom_tem1,$st_prn_tem1,$st_cmt_tem1,$st_nom_tem2,$st_prn_tem2,$st_cmt_tem2,$st_cmt_acte,$i_num_enreg,$st_permalien) = $a_ligne;
		// nettoyage des noms
		nettoie_nom($st_nom);    
		nettoie_nom($st_nom_pere);
		nettoie_nom($st_nom_mere);
		// Nettoyage des prénoms
		nettoie_prenom($st_prn);
		nettoie_prenom($st_prn_pere);
		nettoie_prenom($st_prn_mere);          

		if (!isset($pa_liste_naissances_existantes[strval($st_date)][strval($st_nom)][strval($st_prn)]))
		{  
			$i_nb_actes++;
			$acte = new Acte($connexionBD,$pi_idf_commune,LIB_NAISSANCE,'N',$pi_idf_source,$st_date,$releveur->idf_releveur($pi_idf_releveur));
			$i_annee = $acte->getAnnee();
			//print("$st_date,$st_nom,$st_prn,$st_sexe,$st_nom_pere,$st_prn_pere,$st_nom_mere,$st_prn_mere<br>");
			$stats_commune->compte_acte(LIB_NAISSANCE,$i_annee); 
			$acte->importeNimV3($st_date_rep,$st_cote,$st_libre,$st_cmt_acte);
			$acte->setUrl($st_permalien);
			$acte->setDetailSupp(1); // à compléter si l'on veut affiner le détail
			$i_acte = $acte->getIdf();
			$a_liste_actes[] = $acte; 
			// Création du nouveau né
			$nouveaune = new Personne($connexionBD,$i_acte,IDF_PRESENCE_INTV,$st_sexe,$st_nom,$st_prn);
			$nouveaune->setCommentaires($st_cmt);        
			$stats_patronyme->maj_patro($st_nom,LIB_NAISSANCE,$i_annee);
			if ($st_nom_pere=='' && $st_prn_pere!='')
				$st_nom_pere = LIB_MANQUANT;   
			if ($st_nom_pere!='')
			{
				$pere = new Personne($connexionBD,$i_acte,IDF_PRESENCE_PERE,'M',$st_nom_pere,$st_prn_pere);
				$stats_patronyme->maj_patro($st_nom_pere,LIB_NAISSANCE,$i_annee);
				$pere->setProfession($st_prof_pere);
				$pere->setCommentaires($st_cmt_pere);
				$a_liste_personnes[]=$pere;
				$nouveaune->setIdfPere($pere->getIdf());
			}
			if ($st_nom_mere=='' && $st_prn_mere!='')
				$st_nom_mere = LIB_MANQUANT;
			if ($st_nom_mere!='')
			{
				$mere = new Personne($connexionBD,$i_acte,IDF_PRESENCE_MERE,'F',$st_nom_mere,$st_prn_mere);
				$stats_patronyme->maj_patro($st_nom_mere,LIB_NAISSANCE,$i_annee);
				$mere->setProfession($st_prof_mere);
				$mere->setCommentaires($st_cmt_mere);
				$a_liste_personnes[]=$mere;
				$nouveaune->setIdfMere($mere->getIdf());
			}
			$a_liste_personnes[]=$nouveaune;
			if ($st_nom_pere!='' && $st_nom_mere!='')
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_NAISSANCE,$pere->getIdf(),$st_nom_pere,$mere->getIdf(),$st_nom_mere);
			if ($st_nom_tem1=='' && ($st_prn_tem1!='' || $st_cmt_tem1!=''))
				$st_nom_tem1 = LIB_MANQUANT;   
			if ($st_nom_tem1!='')
			{
				$temoin1 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_PARRAIN,'?',$st_nom_tem1,$st_prn_tem1);
				$temoin1->setCommentaires($st_cmt_tem1);
				$stats_patronyme->maj_patro($st_nom_tem1,LIB_NAISSANCE,$i_annee);            
				$a_liste_personnes[]=$temoin1;
			}
			if ($st_nom_tem2=='' && ($st_prn_tem2!='' || $st_cmt_tem2!=''))
				$st_nom_tem2 = LIB_MANQUANT;
			if ($st_nom_tem2!='')
			{
				$temoin2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_MARRAINE,'?',$st_nom_tem2,$st_prn_tem2);
				$temoin2->setCommentaires($st_cmt_tem2);
				$stats_patronyme->maj_patro($st_nom_tem2,LIB_NAISSANCE,$i_annee);           
				$a_liste_personnes[]=$temoin2;
			}                                  
		}
		else
		{
			$this->a_deja_existants[] = "La naissance de $st_prn $st_nom du $st_date existe déjà";
		} 
	}  
   	
	if (count($a_liste_personnes)>0)
	{
		//$a_liste_personnes[0]->sauveCommunePersonne();
		$a_liste_personnes[0]->sauveProfession();
		$a_liste_personnes[0]->sauvePrenom();
		$st_personnes = '';
		$a_personnes_a_creer=array();
		$a_lignes_personnes = array();
		$i_nb_personnes_courant  =1;
		reset($a_liste_personnes);
		while($personne=current($a_liste_personnes))
		{
			list($st_ligne,$a_personnes)=$personne->ligne_sql_a_inserer();
			$a_lignes_personnes[]=$st_ligne;
			$a_personnes_a_creer=$a_personnes_a_creer+$a_personnes;
			if ($i_nb_personnes_courant==NB_PERSONNES_BLOC_CHGMT)
			{ 
				$connexionBD->initialise_params($a_personnes_a_creer);
				$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_personnes_courant=1;
				$st_personnes = '';
				$a_personnes_a_creer=array();
				$a_lignes_personnes = array();
			}
			next($a_liste_personnes);
			$i_nb_personnes_courant++;
		}
		if (count($a_personnes_a_creer)>0)
		{
			$connexionBD->initialise_params($a_personnes_a_creer);
			$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
			$connexionBD->execute_requete($st_requete);
		}  
	}
   
    if (count($a_liste_actes)>0)
	{
		$st_actes = '';
		$a_actes_a_creer=array();
		$a_lignes_actes = array();
		$i_nb_actes_courant =1;
		reset($a_liste_actes);
		while($acte=current($a_liste_actes))
		{
			list($st_ligne,$a_actes)=$acte->ligne_sql_a_inserer();
			$a_lignes_actes[]=$st_ligne;
			$a_actes_a_creer=$a_actes_a_creer+$a_actes;
			if ($i_nb_actes_courant==NB_ACTES_BLOC_CHGMT)
			{			
				$connexionBD->initialise_params($a_actes_a_creer);
				$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_actes_courant=1;
				$st_actes = '';
				$a_actes_a_creer=array();
				$a_lignes_actes = array();
			}
			next($a_liste_actes);
			$i_nb_actes_courant++;
		}
		if (count($a_actes_a_creer)>0)
		{	
			$connexionBD->initialise_params($a_actes_a_creer);
			$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
			$connexionBD->execute_requete($st_requete);	  
		}
	}
	$union->sauve();
	$stats_patronyme->sauvePatronyme();	
	$stats_patronyme->sauveTypeActe();		
	$stats_patronyme->sauve();
	$stats_commune->sauve();
    	
	$connexionBD->execute_requete("UNLOCK TABLES");   
	return $i_nb_actes;
}

/**
 * Charge les deces d'une base ExpoActes
 * @param integer $pi_code_insee: code insee
 * @param string $pst_nom_commune: nom de la commune
 * @param integer $pi_idf_commune : identifiant interne de la commune a charger dans la base
 * @param integer $pi_idf_source : identifiant de la source 
 * @param integer $pi_idf_releveur : identifiant de l'adherent releveur 
 * @param array $pa_liste_deces_existants : Liste des deces existants indexées par date, nom , prénom,(valeur=true))  
* @return integer : nombre d'actes chargés   
 */ 
function charge_deces($pi_code_insee,$pst_nom_commune,$pi_idf_commune,$pi_idf_source,$pi_idf_releveur,$pa_liste_deces_existants)
{
   global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_prefixe_table;
   $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   $union = Union::singleton($connexionBD);
   $stats_patronyme = new StatsPatronyme($connexionBD,$pi_idf_commune,$pi_idf_source);
   $stats_commune = new StatsCommune($connexionBD,$pi_idf_commune,$pi_idf_source);
   $releveur =  new Releveur($connexionBD);
   $a_liste_personnes = array();
   $a_liste_actes = array();
	$connexionBD -> initialise_params(array(':code_com'=>$pi_code_insee,':commune'=>$pst_nom_commune));
	$st_requete = sprintf("select DATETXT,DREPUB,COTE,LIBRE,NOM,PRE,ORI,DNAIS,SEXE,AGE,COM,PRO,C_NOM,C_PRE,C_COM,C_PRO,P_NOM,P_PRE,P_COM,P_PRO,M_NOM,M_PRE,M_COM,M_PRO,T1_NOM,T1_PRE,T1_COM,T2_NOM,T2_PRE,T2_COM,COMGEN,IDNIM,PHOTOS
 from %s_dec3 where CODCOM=:code_com and COMMUNE=:commune",$gst_prefixe_table);
	$a_actes = $connexionBD -> sql_select_multiple($st_requete);
   // Empeche le chargement de la table le temps de la mise a jour
   $connexionBD->execute_requete("LOCK TABLES `personne` write , `patronyme` write ,`prenom` write,`acte` write, `profession` write, `commune_personne` write, `stats_patronyme` write, `stats_commune` write, `union` write,`acte` as a read, `personne` as p read,`personne` as pers_pere read,`personne` as pers_mere read,`type_acte` as ta read,`type_acte` write, `releveur` write,`adherent` read,`prenom_simple` write, `groupe_prenoms` write");
   // les redondances de donnees seront traitees par sql load data et la contrainte sur l'index nom
   $i_nb_actes =0 ;
   foreach ($a_actes as $a_ligne)
   {      
		list($st_date,$st_date_rep,$st_cote,$st_libre,$st_nom,$st_prn,$st_orig,$st_dnais,$c_sexe,$st_age,$st_cmt,$st_prof,$st_nom_cjt,$st_prn_cjt,$st_cmt_cjt,$st_prof_cjt,$st_nom_pere,$st_prn_pere,$st_cmt_pere,$st_prof_pere,$st_nom_mere,$st_prn_mere,$st_cmt_mere,$st_prof_mere,$st_nom_tem1,$st_prn_tem1,$st_cmt_tem1,$st_nom_tem2,$st_prn_tem2,$st_cmt_tem2,$st_cmt_acte,$i_num_enreg,$st_permalien) = $a_ligne;
		// nettoyage des noms
		nettoie_nom($st_nom);    
		nettoie_nom($st_nom_pere);
		nettoie_nom($st_nom_mere);
		// Nettoyage des prénoms
		nettoie_prenom($st_prn);
		nettoie_prenom($st_prn_pere);
		nettoie_prenom($st_prn_mere);              
		if (!isset($pa_liste_deces_existants[strval($st_date)][strval($st_nom)][strval($st_prn)]))
		{
			$i_nb_actes++;
			$acte = new Acte($connexionBD,$pi_idf_commune,LIB_DECES,'D',$pi_idf_source,$st_date,$releveur->idf_releveur($pi_idf_releveur));
			$i_annee = $acte->getAnnee();
			$stats_commune->compte_acte(LIB_DECES,$i_annee); 
			$acte->importeNimV3($st_date_rep,$st_cote,$st_libre,$st_cmt_acte);
			$acte->setUrl($st_permalien);
			$acte->setDetailSupp(1); // à compléter si l'on veut affiner le détail
			$i_acte = $acte->getIdf(); 
			$a_liste_actes[]=$acte;
			// Création du nouveau né
			$defunt = new Personne($connexionBD,$i_acte,IDF_PRESENCE_INTV,$c_sexe,$st_nom,$st_prn);
			$defunt->importeDecNimV3($st_orig,$st_dnais,$st_age,$st_prof,$st_cmt);   
			$stats_patronyme->maj_patro($st_nom,LIB_DECES,$i_annee);

			if ($st_nom_cjt!= '')
			{
				$c_sexe_cjt = ($c_sexe=='M')? 'F': 'M';
				$cjt_defunt = new Personne($connexionBD,$i_acte,IDF_PRESENCE_EXCJT,$c_sexe_cjt,$st_nom_cjt,$st_prn_cjt);
				$cjt_defunt->setProfession($st_prof_cjt);
				$cjt_defunt->setCommentaires($st_cmt_cjt);
				$stats_patronyme->maj_patro($st_nom_cjt,LIB_DECES,$i_annee);               
				$a_liste_personnes[]=$cjt_defunt;
				switch($c_sexe)
				{
					case 'M': $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_DECES,$defunt->getIdf(),$st_nom,$cjt_defunt->getIdf(),$st_nom_cjt);break;
					case 'F': $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_DECES,$cjt_defunt->getIdf(),$st_nom_cjt,$defunt->getIdf(),$st_nom);break;
					default: $union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_DECES,$defunt->getIdf(),$st_nom,$cjt_defunt->getIdf(),$st_nom_cjt);
				}
             
			}
			if ($st_nom_pere=='' && $st_prn_pere!='')
				$st_nom_pere = LIB_MANQUANT;              
			if ($st_nom_pere!='')
			{
				$pere = new Personne($connexionBD,$i_acte,IDF_PRESENCE_PERE,'M',$st_nom_pere,$st_prn_pere);
				$stats_patronyme->maj_patro($st_nom_pere,LIB_DECES,$i_annee);
				$pere->setProfession($st_prof_pere);
				$pere->setCommentaires($st_cmt_pere);
				$a_liste_personnes[]=$pere;
				$defunt->setIdfPere($pere->getIdf());
			}
			if ($st_nom_mere=='' && $st_prn_mere!='')
                $st_nom_mere = LIB_MANQUANT;
			if ($st_nom_mere!='')
			{
				$mere = new Personne($connexionBD,$i_acte,IDF_PRESENCE_MERE,'F',$st_nom_mere,$st_prn_mere);
				$stats_patronyme->maj_patro($st_nom_mere,LIB_DECES,$i_annee);
				$mere->setProfession($st_prof_mere);
				$mere->setCommentaires($st_cmt_mere);
				$a_liste_personnes[]=$mere;
				$defunt->setIdfMere($mere->getIdf());
			}

			$a_liste_personnes[]=$defunt;
        
			if ($st_nom_pere!='' && $st_nom_mere!='')
				$union->ajoute($pi_idf_source,$pi_idf_commune,$i_acte,LIB_DECES,$pere->getIdf(),$st_nom_pere,$mere->getIdf(),$st_nom_mere);
			if ($st_nom_tem1=='' && ($st_prn_tem1!='' || $st_cmt_tem1!=''))
				$st_nom_tem1 = LIB_MANQUANT;
			if ($st_nom_tem1!='')
			{
				$temoin1 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem1,$st_prn_tem1);
				$temoin1->setCommentaires($st_cmt_tem1);
				$stats_patronyme->maj_patro($st_nom_tem1,LIB_DECES,$i_annee);            
				$a_liste_personnes[]=$temoin1;
			}
			if ($st_nom_tem2=='' && ($st_prn_tem2!='' || $st_cmt_tem2!=''))
				$st_nom_tem2 = LIB_MANQUANT;
			if ($st_nom_tem2!='')
			{
				$temoin2 = new Personne($connexionBD,$i_acte,IDF_PRESENCE_TEMOIN,'?',$st_nom_tem2,$st_prn_tem2);
				$temoin2->setCommentaires($st_cmt_tem2);
				$stats_patronyme->maj_patro($st_nom_tem2,LIB_DECES,$i_annee);           
				$a_liste_personnes[]=$temoin2;
			}                                  
		}
		else
		{
			$this->a_deja_existants[] = "Le décès de $st_prn $st_nom du $st_date existe déjà";
		} 
	} 
		
	if (count($a_liste_personnes)>0)
	{
		$a_liste_personnes[0]->sauveCommunePersonne();
		$a_liste_personnes[0]->sauveProfession();
		$a_liste_personnes[0]->sauvePrenom();
		$st_personnes = '';
		$a_personnes_a_creer=array();
		$a_lignes_personnes = array();
		$i_nb_personnes_courant  =1;
		reset($a_liste_personnes);
		while($personne=current($a_liste_personnes))
		{
			list($st_ligne,$a_personnes)=$personne->ligne_sql_a_inserer();
			$a_lignes_personnes[]=$st_ligne;
			$a_personnes_a_creer=$a_personnes_a_creer+$a_personnes;
			if ($i_nb_personnes_courant==NB_PERSONNES_BLOC_CHGMT)
			{ 
				$connexionBD->initialise_params($a_personnes_a_creer);
				$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_personnes_courant=1;
				$st_personnes = '';
				$a_personnes_a_creer=array();
				$a_lignes_personnes = array();
			}
			next($a_liste_personnes);
			$i_nb_personnes_courant++;
		}
		if (count($a_personnes_a_creer)>0)
		{
			$connexionBD->initialise_params($a_personnes_a_creer);
			$st_requete = Personne::requete_base().join(',',$a_lignes_personnes);
			$connexionBD->execute_requete($st_requete);
		}  
	}
   
    if (count($a_liste_actes)>0)
	{
		$st_actes = '';
		$a_actes_a_creer=array();
		$a_lignes_actes = array();
		$i_nb_actes_courant =1;
		reset($a_liste_actes);
		while($acte=current($a_liste_actes))
		{
			list($st_ligne,$a_actes)=$acte->ligne_sql_a_inserer();
			$a_lignes_actes[]=$st_ligne;
			$a_actes_a_creer=$a_actes_a_creer+$a_actes;
			if ($i_nb_actes_courant==NB_ACTES_BLOC_CHGMT)
			{			
				$connexionBD->initialise_params($a_actes_a_creer);
				$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
				$connexionBD->execute_requete($st_requete);
				$i_nb_actes_courant=1;
				$st_actes = '';
				$a_actes_a_creer=array();
				$a_lignes_actes = array();
			}
			next($a_liste_actes);
			$i_nb_actes_courant++;
		}
		if (count($a_actes_a_creer)>0)
		{			
			$connexionBD->initialise_params($a_actes_a_creer);
			$st_requete = Acte::requete_base().join(',',$a_lignes_actes);
			$connexionBD->execute_requete($st_requete);	  
		}
	}
	$union->sauve();
	$stats_patronyme->sauvePatronyme();	
	$stats_patronyme->sauveTypeActe();		
	$stats_patronyme->sauve();
	$stats_commune->sauve();	
	$connexionBD->execute_requete("UNLOCK TABLES");	 
	return $i_nb_actes;
}

/* Corps du programmes */

$ga_communes = array ();
$i_idf_commune_courant = null;
$st_code_commune_courant= null;
$st_nom_commune_courant=null;
$st_type_courant =null;
if (isset($_GET['prefixe_ea_bd']))
{
	$gst_prefixe_table = $_GET['prefixe_ea_bd'];
	$i_compteur = isset($_GET['compteur']) ? (int) $_GET['compteur'] :  1;
 	if (file_exists('communes.csv'))
	{
		if (($pf = fopen("communes.csv", "r")) !== FALSE)
		{
			while (( $a_ligne= fgetcsv($pf, 1024,SEP_CSV)) !== FALSE)
			{
				list($st_code_commune,$st_nom_commune,$i_idf_commune,$st_type,$st_statut,$i_nb_actes) = $a_ligne;
				$ga_communes[$i_idf_commune][$st_type]=array($st_code_commune,$st_nom_commune,$st_statut,$i_nb_actes);
				
				if (is_null($i_idf_commune_courant) && empty($st_statut))
				{
					$i_idf_commune_courant		= $i_idf_commune;
					$st_code_commune_courant	= $st_code_commune;
					$st_nom_commune_courant		= $st_nom_commune;
					$st_type_courant			= $st_type;
				}
			}
			fclose($pf);
			if (is_null($i_idf_commune_courant))
			{
				print("<div class=\"alert alert-success\">Migration termin&eacute;e</div>");
			}
			else
			{	
				switch ($st_type_courant)
				{
					case 'N':
						print("<div class=\"alert alert-info\">Migration des actes de naissances de la commune $st_nom_commune_courant($st_code_commune_courant)</div>");
						$a_liste_naissances_existantes = array();
						$i_nb_actes = charge_naissances($st_code_commune_courant,$st_nom_commune_courant,$i_idf_commune_courant,1,null,$a_liste_naissances_existantes);
						$ga_communes[$i_idf_commune_courant]['N']=array($st_code_commune_courant,$st_nom_commune_courant,'OK',$i_nb_actes);
					break;
					case 'M':
						print("<div class=\"alert alert-info\">Migration des actes de mariages de la commune $st_nom_commune_courant($st_code_commune_courant)</div>");
						$a_liste_mariages_existants = array();
						$i_nb_actes = charge_mariages($st_code_commune_courant,$st_nom_commune_courant,$i_idf_commune_courant,1,null,$a_liste_mariages_existants);
						$ga_communes[$i_idf_commune_courant]['M']=array($st_code_commune_courant,$st_nom_commune_courant,'OK',$i_nb_actes);
					break;
					case 'D':
						print("<div class=\"alert alert-info\">Migration des actes de d&eacute;c&eagrave;s de la commune $st_nom_commune_courant($st_code_commune_courant)</div>");
						$a_liste_deces_existants = array();
						$i_nb_actes = charge_deces($st_code_commune_courant,$st_nom_commune_courant,$i_idf_commune_courant,1,null,$a_liste_deces_existants);
						$ga_communes[$i_idf_commune_courant]['D']=array($st_code_commune_courant,$st_nom_commune_courant,'OK',$i_nb_actes);
					break;
					case 'V':
						print("<div class=\"alert alert-info\">Migration des actes divers de la commune $st_nom_commune_courant($st_code_commune_courant)</div>");
						$a_liste_divers_existants = array();
						$i_nb_actes = charge_divers($st_code_commune_courant,$st_nom_commune_courant,$i_idf_commune_courant,1,null,$a_liste_divers_existants);
						$ga_communes[$i_idf_commune_courant]['D']=array($st_code_commune_courant,$st_nom_commune_courant,'OK',$i_nb_actes);
					break;
				}
				// réécriture du fichier communes
				$pf = fopen('communes.csv', 'w') or die ("Impossible d'écrire le fichier communes.csv");
				foreach ($ga_communes as $i_idf_commune => $a_ligne)
				{
					foreach ($a_ligne as $st_type => $a_ligne2)
					{
						list ($st_code_commune,$st_nom_commune,$st_statut,$i_nb_actes) = $a_ligne2;
						fputcsv($pf, array($st_code_commune,$st_nom_commune,$i_idf_commune,$st_type,$st_statut,$i_nb_actes),SEP_CSV);
					}
				}
				fclose($pf);
				print("<div class=\"alert alert-warning\">Chargement de la prochaine commune. Ne pas interrompre</div>");
				print("<meta http-equiv=\"refresh\" content=\"1; url=".$_SERVER['PHP_SELF']."?prefixe_ea_bd=$gst_prefixe_table\" />");
			}
		}
		else
			print("<div class=\"alert alert-danger\">Impossible de lire le fichier communes.csv</div>");
	}
	else
		print("<div class=\"alert alert-danger\">Erreur: Le fichier communes.csv n'existe pas !</div>");
}
else
	print("<div class=\"alert alert-danger\">Erreur: Le pr&eacute;fixe 'prefixe_ea_bd' n'est pas d&eacute;fini !</div>");
print('</div></body></html>');
?>	
 