<?php
/**
 * Affiche la liste des liasses
 * @param object $pconnexionBD
 */ 
function menu_liste_notaire($pconnexionBD, $pst_cote_liasse, $pa_communes)
{
	global $gi_num_page_cour;
	print("<div class=TITRE>Gestion des liasses notariales</div>");
	print("<div class=SOUSTITRE>Notaires de la liasse ".$pst_cote_liasse."</div>");
	print("<div align=center><br><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsNotaires(0)\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	$st_requete = "select concat('NOT', liasse_notaire.idf) as idf, liasse_notaire.nom_notaire, ".
	              "       liasse_notaire.prenom_notaire, commentaire, libelle_lieu, commune_acte.nom ".
	              "from liasse_notaire ".
				  "     left outer join commune_acte on liasse_notaire.idf_commune_etude = commune_acte.idf ".
				  "where liasse_notaire.cote_liasse = '" . $pst_cote_liasse . "' ".
				  "order by liasse_notaire.nom_notaire, liasse_notaire.prenom_notaire";
	$a_liste_dates = $pconnexionBD->sql_select_multiple($st_requete);
  $i_nb_dates=count($a_liste_dates);
	if ($i_nb_dates!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_dates,
		                                    10,DELTA_NAVIGATION,array('Nom','Pr&eacute;nom','Commentaire',
											'Libell&eacute; lieu &eacute;tude', 'Commune associ&eacute;e','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();      
	}
	else
		print("<div align=center>Pas de notaire</div>\n");
	print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_NOTAIRE\">");
	print("<input type=button value='Supprimer les notaires s&eacute;lectionn&eacute;s' ONCLICK=\"VerifieSuppressionNotaires(0,'supp[]')\"></div>");   
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><br><input type=hidden name=mode value=\"MENU_AJOUTER_NOTAIRE\">");  
	print("<input type=submit value=\"Ajouter un notaire\"></div>");  
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."?cote_liasse='$pst_cote_liasse'\" method=\"post\">");  
	print("<div align=center><br><input type=hidden name=mode value=\"MENU_MODIFIER\">");  
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<input type=submit value=\"Revenir à la liasse\"></div>");  
	print('</form>');
	print('</div>');
}

/**
 * Affiche de la table d'édition
 * @param string  $pst_cote					Cote de la liasse
 * @param integer $pi_idf					Identifiant du notaire pour la liasse
 * @param string  $pst_nom_notaire			Nom du notaire
 * @param string  $pst_prenom_notaire		Prénom du notaire
 * @param string  $pst_commentaire			Commentaire ou précision sur le notaire (sénior, le jeune, ...)
 * @param string  $pst_libelle_lieu			Nom du lieu de l'étude
 * @param integer $pi_commune_etude			Identifiant de la commune de rattachement de l'étude
 * @param array   $pa_communes				Tableau des communes 
 */ 
function menu_edition_notaire($pst_cote, $pi_idf, $pst_nom_notaire, $pst_prenom_notaire, $pst_commentaire, 
                              $pst_libelle_lieu, $pi_commune_etude, $pa_communes)
{
	print("<table border=1>");
	print("<tr><th>Nom du notaire</th><td>".
	      "<input type=\"text\" maxlength=30 size=30 name=nom value=\"$pst_nom_notaire\"></td></tr>");
	print("<tr><th>Pr&eacute;nom du notaire</th><td>".
	      "<input type=\"text\" maxlength=50 size=50 name=prenom value=\"$pst_prenom_notaire\"></td></tr>");
	print("<tr><th>Commentaire</th><td>".
	      "<input type=\"text\" maxlength=80 size=30 name=commentaire value=\"$pst_commentaire\"></td></tr>");
	print("<tr><th>Nom lieu &eacute;tude</th><td>".
	      "<input type=\"text\" maxlength=50 size=30 name=lieu value=\"$pst_libelle_lieu\"></td></tr>");
	print("<tr><th>Commune &eacute;tude</th><td>".
	      "<select name=idf_commune id='idf_commune'>".chaine_select_options($pi_commune_etude,$pa_communes)."</select></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'une commune
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param string	$pst_cote_liasse	Identifiant de la liasse porteuse du notaire
 * @param integer	$pi_idf_notaire		Identifiant du notaire à modifier
 * @param array		$pa_communes		Tableau des communes 
 */ 
function menu_modifier_notaire($pconnexionBD, $pst_cote_liasse, $pi_idf_notaire, $pa_communes)
{
	list($st_nom_notaire, $st_prenom_notaire, $st_commentaire, $st_libelle_lieu, $i_idf_commune_etude)
	=$pconnexionBD->sql_select_liste("select nom_notaire, prenom_notaire, commentaire, libelle_lieu, idf_commune_etude  ".
	                                 "from liasse_notaire ".
				                     "where idf = " . $pi_idf_notaire);
	print("<div class=TITRE>Gestion des liasses notariales</div>");
	print("<div class=SOUSTITRE>Notaire de la liasse ".$pst_cote_liasse."</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsNotaire(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_NOTAIRE\">");
	print("<input type=hidden name=idf_notaire value=$pi_idf_notaire>");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	menu_edition_notaire($pst_cote_liasse, $pi_idf_notaire, $st_nom_notaire, $st_prenom_notaire, $st_commentaire, 
	                     $st_libelle_lieu, $i_idf_commune_etude, $pa_communes);
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsNotaire(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"LISTE_NOTAIRE\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'une liasse
 * @param string	$pst_cote_liasse	Identifiant de la liasse porteuse du notaire
 * @param array		$pa_communes		Tableau des communes 
 */ 
function menu_ajouter_notaire($pst_cote_liasse, $pa_communes)
{
	print("<div class=TITRE>Gestion des liasses notariales</div>");
	print("<div class=SOUSTITRE>Notaire de la liasse ".$pst_cote_liasse."</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsNotaire(0)\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_NOTAIRE\">");
	menu_edition_notaire($pst_cote_liasse, 0,'','','','',0,$pa_communes);
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsNotaire(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"LISTE_NOTAIRE\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Met à jour le libellé notaires d'une liasse
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param string	$pst_cote_liasse	Identifiant de la liasse porteuse du notaire
 */ 
function maj_libelle_notaire($pconnexionBD, $pst_cote_liasse)
{
	$st_requete = "select distinct concat(liasse_notaire.nom_notaire, ".
	                      "'(', case when commune_acte.nom is null then '' else commune_acte.nom end, ')' )".
	              "from liasse_notaire ".
				  "     left outer join commune_acte on liasse_notaire.idf_commune_etude = commune_acte.idf ".
				  "where cote_liasse='" . $pst_cote_liasse . "'";
	$a_liste_notaires = $pconnexionBD->sql_select($st_requete);
	if (count($a_liste_notaires)!=0)
		$st_libelle = implode("/",$a_liste_notaires);
	else
		$st_libelle='';
  $pconnexionBD->initialise_params(array(':libelle'=>$st_libelle));
	$st_requete = "update liasse set libelle_notaires = :libelle where cote_liasse='" . $pst_cote_liasse . "'";
	$pconnexionBD->execute_requete($st_requete);
}
?>