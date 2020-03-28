<?php
/**
 * Affiche la liste des periodes d'une liasse
 * @param object $pconnexionBD
 * @param string $pst_cote_liasse	cote de la liasse
 */ 
function menu_liste_periode($pconnexionBD, $pst_cote_liasse)
{
	global $gi_num_page_cour;
	print("<div class=TITRE>Gestion des liasses notariales</div>");
	print("<div class=SOUSTITRE>P&eacute;riodes couvertes par la liasse ".$pst_cote_liasse."</div>");
	print("<div align=center><br><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPeriode(0)\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	$st_requete = "select concat('PER', idf) as idf, libelle_periode, ".
	              "       date_format(date_debut_periode, '%d/%m/%Y') as date_debut, ".
				  "       date_format(date_fin_periode, '%d/%m/%Y') as date_fin ".
	              "from (select idf, date_debut_periode, date_fin_periode, libelle_periode from liasse_dates ".
				  "      where cote_liasse = '" . $pst_cote_liasse . "' ".
				  "      order by 2, 1) SEL";
	$a_liste_periodes = $pconnexionBD->sql_select_multiple($st_requete);
  $i_nb_periodes =count($a_liste_periodes);
	if ($i_nb_periodes!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_periodes,
		                                    10,DELTA_NAVIGATION,
											array('P&eacute;riode','date d&eacute;but','date fin','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();      
	}
	else
		print("<div align=center>Pas de p&eacute;riode</div>\n");
	print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_PERIODE\">");
	print("<input type=button value=\"Supprimer les p&eacute;riodes s&eacute;lectionn&eacute;es\" ".
	      "       ONCLICK=\"VerifieSuppressionPeriodes(0,'supp[]')\"></div>");   
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<div align=center><br><input type=hidden name=mode value=\"MENU_AJOUTER_PERIODE\">");  
	print("<input type=submit value=\"Ajouter une p&eacute;riode\"></div>");  
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."?cote_liasse='$pst_cote_liasse'\" method=\"post\">");  
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<div align=center><br><input type=hidden name=mode value=\"MENU_MODIFIER\">");  
	print("<input type=submit value=\"Revenir à la liasse\"></div>");  
	print('</form>');
}

/**
 * Affiche de la table d'édition
 * @param string	$pst_annee_debut	Année de début de la période
 * @param string	$pst_mois_debut		Mois de début de la période. si vide, année complète
 * @param string	$pst_annee_fin		Année de fin de la période. si vide, pas d'intervalle
 * @param string	$pst_mois_fin		Mois de fin de la période. si vide, année complète
 * @param array		$pa_mois			Tableau des mois
 */ 
function menu_edition_periode($pst_annee_debut, $pst_mois_debut, $pst_annee_fin, $pst_mois_fin, $pa_mois)
{
	print("<table border=1>");
	print("<tr><th>Ann&eacute;e de d&eacute;but de la p&eacute;riode</th><td>".
	      "<input type=\"text\" maxlength=7 size=7 name=annee_debut value=\"$pst_annee_debut\"></td></tr>");
	print("<tr><th>Mois de d&eacute;but de la p&eacute;riode</th><td>".
	      "<select name=mois_debut id='mois_debut'>".chaine_select_options($pst_mois_debut,$pa_mois)."</select></td></tr>");
	print("<tr><th>Ann&eacute;e de fin de la p&eacute;riode</th><td>".
	      "<input type=\"text\" maxlength=7 size=7 name=annee_fin value=\"$pst_annee_fin\"></td></tr>");
	print("<tr><th>Mois de fin de la p&eacute;riode</th><td>".
	      "<select name=mois_fin id='mois_fin'>".chaine_select_options($pst_mois_fin,$pa_mois)."</select></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'une période
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param string	$pst_cote_liasse	Identifiant de la liasse porteuse de la période  
 * @param integer	$pi_idf_periode		Identifiant de la période à modifier 
 * @param array		$pa_mois			Tableau des mois
 */ 
function menu_modifier_periode($pconnexionBD, $pst_cote_liasse, $pi_idf_periode, $pa_mois)
{
	list($st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin)
	=$pconnexionBD->sql_select_liste("select annee_debut_periode, mois_debut_periode, ".
	                                 "       annee_fin_periode, mois_fin_periode ".
									 "from liasse_dates ".
									 "where idf=$pi_idf_periode");
	print("<div class=TITRE>Gestion des liasses notariales</div>");
	print("<div class=SOUSTITRE>P&eacute;riode couverte par la liasse ".$pst_cote_liasse."</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPeriode(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_PERIODE\">");
	print("<input type=hidden name=idf_periode value=$pi_idf_periode>");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	menu_edition_periode($st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin, $pa_mois);
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsPeriode(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<div align=center><input type=hidden name=mode value=\"LISTE_PERIODE\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'une période
 * @param string	$pst_cote_liasse	Identifiant de la liasse porteuse de la période 
 * @param array		$pa_mois			Tableau des mois
 */ 
function menu_ajouter_periode($pst_cote_liasse, $pa_mois)
{

	print("<div class=TITRE>Gestion des liasses notariales</div>");
	print("<div class=SOUSTITRE>P&eacute;riode couverte par la liasse ".$pst_cote_liasse."</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPeriode(0)\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_PERIODE\">");
	menu_edition_periode('','','','',$pa_mois);
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsPeriode(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	print("<div align=center><input type=hidden name=mode value=\"LISTE_PERIODE\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Calcul la date de début d'une période
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param string	$pst_annee_debut	Année de début de la période
 * @param string	$pst_mois_debut		Mois de début de la période. si vide, année complète
 */
function calculer_date_debut( $pconnexionBD, $pst_annee_debut, $pst_mois_debut)
{
	if( substr($pst_annee_debut, 0, 2) <> 'an' ) {
		if( empty($pst_mois_debut) ) 
			$st_date_debut = $pst_annee_debut . '-01-01';
		else 
			$st_date_debut = $pst_annee_debut . '-' . $pst_mois_debut . '-01';
		}
	else {	
		if( empty($pst_mois_debut) ) 
			$st_mois_revol = 'Vendémiaire';
		else
			$st_mois_revol = $pst_mois_debut;
		print($st_mois_revol);
		$st_requete = "select date_format(prem_jour_greg, '%Y-%m-%d') from calendrier_revolutionaire ".
		              "where an_revol='" . $pst_annee_debut . "' and mois_revol='" . $st_mois_revol . "'";
		list($st_date_debut) = $pconnexionBD->sql_select_liste($st_requete);
	}
	return( $st_date_debut );
}

/** Calcul la date de fin d'une période
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param string	$pst_annee_debut	Année de début de la période
 * @param string	$pst_mois_debut		Mois de début de la période. si vide, année complète
 * @param string	$pst_annee_fin		Année de fin de la période. si vide, pas d'intervalle
 * @param string	$pst_mois_fin		Mois de fin de la période. si vide, année complète
 */
function calculer_date_fin( $pconnexionBD, $pst_annee_debut, $pst_mois_debut, $pst_annee_fin, $pst_mois_fin)
{
	if( empty($pst_annee_fin) ) {
		$pst_annee_fin = $pst_annee_debut;
		$pst_mois_fin = $pst_mois_debut;
	}
	if( substr($pst_annee_fin, 0, 2) <> 'an' ) {
		if( empty($pst_mois_fin) ) 
			$st_date_fin = $pst_annee_fin . '-12-31';
		else {
			switch( $pst_mois_fin ) {
				case '01': case '03': case '05': case '07': case '08': case '10': case '12':
					$st_jour='31';
					break;
				case '04': case '06': case '09': case '11': 
					$st_jour='30';
					break;
				default:
					$i_bis=intval($pst_annee_fin) % 4;
					$i_cent=intval($pst_annee_fin) % 100;
					$i_mill=intval($pst_annee_fin) % 1000;
					if( $i_bis != 0 )
						$st_jour='28';
					elseif( $i_mill == 0 )
						$st_jour='29';
					elseif( $i_cent == 0 )
						$st_jour='28';
					else
						$st_jour='29';
					break;
			}
			$st_date_fin = $pst_annee_fin . '-' . $pst_mois_fin . '-' . $st_jour;
		}
	}
	else {	
		if( empty($pst_mois_fin) ) 
			$st_mois_revol = 'Complémentaires';
		else if( $pst_mois_fin == 'Fructidor' ) 
			$st_mois_revol = 'Complémentaires';
		else
			$st_mois_revol = $pst_mois_fin;
		$st_requete = "select date_format(dern_jour_greg, '%Y-%m-%d') from calendrier_revolutionaire ".
		              "where an_revol='" . $pst_annee_fin . "' and mois_revol='" . $st_mois_revol . "'";
		list($st_date_fin) = $pconnexionBD->sql_select_liste($st_requete);
	}
	return( $st_date_fin );
}

/** Calcul le libellé d'une période
 * @param string	$pst_annee_debut	Année de début de la période
 * @param string	$pst_mois_debut		Mois de début de la période. si vide, année complète
 * @param string	$pst_annee_fin		Année de fin de la période. si vide, pas d'intervalle
 * @param string	$pst_mois_fin		Mois de fin de la période. si vide, année complète
 */
function calculer_libelle_periode( $st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin)
{
	if( empty($st_mois_debut) )
		$st_libelle_debut = $st_annee_debut;
	else
		$st_libelle_debut = $st_annee_debut . ':' . $st_mois_debut;
	if( empty($st_annee_fin) )
		$st_libelle_fin = '';
	elseif( empty($st_mois_fin) )
		$st_libelle_fin = $st_annee_fin;
	else
		$st_libelle_fin = $st_annee_fin . ':' . $st_mois_fin;
	if( $st_libelle_fin == '' )
		$st_libelle = $st_libelle_debut;
	else
		$st_libelle = $st_libelle_debut . '-' . $st_libelle_fin;
	return( $st_libelle );
}

/** Met à jour le libellé périodes d'une liasse
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param string	$pst_cote_liasse	Identifiant de la liasse porteuse du notaire
 */ 
function maj_libelle_periode($pconnexionBD, $pst_cote_liasse)
{
	$st_requete = "select libelle_periode ".
	              "from (select libelle_periode, date_debut_periode, date_fin_periode  from liasse_dates ".
				  "      where cote_liasse = '" . $pst_cote_liasse . "' ".
				  "      order by 2, 3) SEL";
	$a_liste_periodes = $pconnexionBD->sql_select($st_requete);
	if (count($a_liste_periodes)!=0)
		$st_libelle = implode(",",$a_liste_periodes);
	else
		$st_libelle = '';
	$st_requete = "update liasse set libelle_annees = '".$st_libelle."' ".
				  "where cote_liasse='" . $pst_cote_liasse . "'";
	$pconnexionBD->execute_requete($st_requete);
}

?>