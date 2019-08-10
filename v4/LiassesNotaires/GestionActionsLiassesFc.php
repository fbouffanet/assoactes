<?php
/**
 * Affiche la liste des liasses
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
	$a_serie_liasse = $pconnexionBD->liste_valeur_par_clef("SELECT serie_liasse, nom FROM serie_liasse order by ordre");
	if( isset($_POST['serie_liasse']) ) {
		$_SESSION['serie_liasse'] = $_POST['serie_liasse'];
	}
	elseif( isset($_GET['serie_liasse']) ) {
		$_SESSION['serie_liasse'] = $_GET['serie_liasse'];
	}
	if( ! isset($_SESSION['serie_liasse']) ) {
		$_SESSION['serie_liasse'] = '2E';
	}
	$st_serie_liasse = $_SESSION['serie_liasse'];
	global $gi_num_page_cour;
	unset($_SESSION['liasse']);
	if( isset($_SESSION['serie_liasse']) ) {
		$st_serie_liasse = $_SESSION['serie_liasse'];
	}
	else {
		$st_serie_liasse = '2E';
	}
	$a_numerotation_liasses = array("z","1","2","3","4","5","6","7","8","9"); 
	print("<div class=TITRE>Gestion des actions sur les liasses notariales</div>");
	print("<div align=center><br><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return\">");
	print("<div><br>");
	print("<div align=center>S&eacute;rie : ".
	      "<select name=serie_liasse id='serie_liasse' onChange='window.location=\"".$_SERVER['PHP_SELF']."?serie_liasse=\"+this.value;'>".
		  chaine_select_options($st_serie_liasse,$a_serie_liasse)."</select></div><br>");
	if( $st_serie_liasse == "L") {
		print("<div align=center>Ces répertoires sont issus de la série L qui regroupe tous les actes de l’administration entre 1789 et l’an VIII. ");
		print("Nous n’avons saisi que les numéros de la série L ayant traits à des répertoires notariés. <br>");
		print("La recherche se fait donc entre des bornes précises, selon 6 groupes : ");
		print(" 2197 à 2263, 2328 à 2393, 2433 à 2492,< 2552 à 2596, 2607 à 2668, 2683 à 2732.</div><br>");
	}
	print("<table border=0 cellpadding=0 cellspacing=0><caption>S&eacute;lection des cotes<br></caption>");
	print('<tr class=ligne_paire><td align="center" width="200">dizaines de milliers</td><td>');
	$i_session_init_dixm = isset($_SESSION['init_dixm']) ? $_SESSION['init_dixm'] : $a_numerotation_liasses[0];
	$gc_init_dixm = empty($_GET['init_dixm']) ? $i_session_init_dixm : $_GET['init_dixm'];
	$_SESSION['init_dixm'] = $gc_init_dixm;   
	foreach ($a_numerotation_liasses as $c_init_dixm)
	{
		if ($c_init_dixm==$gc_init_dixm)
			print("<span style=\"font-weight: bold;\">$c_init_dixm </span>");
		else
			print("<a href=\"".$_SERVER['PHP_SELF']."?init_dixm=$c_init_dixm\">$c_init_dixm</a> ");
	}
	print('</td></tr>');
	print('<tr class=ligne_paire><td align="center">milliers</td><td>');
	$i_session_init_mill = isset($_SESSION['init_mill']) ? $_SESSION['init_mill'] : $a_numerotation_liasses[0];
	$gc_init_mill = empty($_GET['init_mill']) ? $i_session_init_mill : $_GET['init_mill'];
	$_SESSION['init_mill'] = $gc_init_mill;   
	foreach ($a_numerotation_liasses as $c_init_mill)
	{
		if ($c_init_mill==$gc_init_mill)
			print("<span style=\"font-weight: bold;\">$c_init_mill </span>");
		else
			print("<a href=\"".$_SERVER['PHP_SELF']."?init_mill=$c_init_mill\">$c_init_mill</a> ");
	}
	print('</td></tr>');
	print('<tr class=ligne_paire><td align="center">centaines</td><td>');
	$i_session_init_cent = isset($_SESSION['init_cent']) ? $_SESSION['init_cent'] : $a_numerotation_liasses[0];
	$gc_init_cent = empty($_GET['init_cent']) ? $i_session_init_cent : $_GET['init_cent'];
	$_SESSION['init_cent'] = $gc_init_cent;   
	foreach ($a_numerotation_liasses as $c_init_cent)
	{
		if ($c_init_cent==$gc_init_cent)
			print("<span style=\"font-weight: bold;\">$c_init_cent </span>");
		else
			print("<a href=\"".$_SERVER['PHP_SELF']."?init_cent=$c_init_cent\">$c_init_cent</a> ");
	}
	print('</td></tr>');
	print('<tr class=ligne_paire><td align="center">dizaines</td><td>');
	$i_session_init_dix = isset($_SESSION['init_dix']) ? $_SESSION['init_dix'] : $a_numerotation_liasses[0];
	$gc_init_dix = empty($_GET['init_dix']) ? $i_session_init_dix : $_GET['init_dix'];
	$_SESSION['init_dix'] = $gc_init_dix;   
	foreach ($a_numerotation_liasses as $c_init_dix)
	{
		if ($c_init_dix==$gc_init_dix)
			print("<span style=\"font-weight: bold;\">$c_init_dix </span>");
		else
			print("<a href=\"".$_SERVER['PHP_SELF']."?init_dix=$c_init_dix\">$c_init_dix</a> ");
	}
	print('</td></tr></table>');
	print("</div>");
	$numero  = $gc_init_dixm == 'z' ? '0' : $gc_init_dixm;
	$numero .= $gc_init_mill == 'z' ? '0' : $gc_init_mill;
	$numero .= $gc_init_cent == 'z' ? '0' : $gc_init_cent;
	$numero .= $gc_init_dix == 'z' ? '0' : $gc_init_dix;
	$st_requete = "select liasse.cote_liasse as idf, liasse.cote_liasse, liasse.libelle_notaires, liasse.libelle_annees, ".
	              "       max(case when liasse_releve.idf is null then 'Non' else 'Oui' end) as releve, ".
	              "       max(case when liasse_publication_papier.idf is null then 'Non' else 'Oui' end) as publication_papier, ".
	              "       max(case when liasse_releve.in_publication_numerique = 1 then 'Oui' else 'Non' end) as publication_numerique, ".
	              "       max(case when liasse_photo.idf is null then 'Non' else 'Oui' end) as photo, ".
	              "       max(case when liasse_programmation.idf is null then 'Non' else 'Oui' end) as program ".
	              "from liasse ".
	              "     left outer join liasse_releve on liasse.cote_liasse = liasse_releve.cote_liasse ".
	              "     left outer join liasse_publication_papier on liasse.cote_liasse = liasse_publication_papier.cote_liasse ".
	              "     left outer join liasse_photo on liasse.cote_liasse = liasse_photo.cote_liasse ".
	              "     left outer join liasse_programmation on liasse.cote_liasse = liasse_programmation.cote_liasse and ".
				  "                                             (liasse_programmation.date_reelle_fin is null or ".
				  "                                              liasse_programmation.date_reelle_fin=str_to_date('0000/00/00', '%Y/%m/%d'))".
				  "where liasse.cote_liasse like '".$st_serie_liasse."-".$numero."%' ".
				  "group by liasse.cote_liasse, liasse.libelle_notaires, liasse.libelle_annees ".
				  "order by liasse.cote_liasse";
	$a_liste_liasses = $pconnexionBD->sql_select_multiple($st_requete);
  $i_nb_liasses = count($a_liste_liasses);
	if ($i_nb_liasses!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_liasses,
		                                    10,DELTA_NAVIGATION,
											array('Cote','Notaire(s)','Periode(s)','Relev&eacute;','Papier','Num&eacute;rique','Photo','Programm&eacute;e',''));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition_select();
		$pagination->affiche_entete_liens_navigation();      
	}
	else
		print("<div align=center>Pas de liasses</div>\n");
	print("</form>");  
	print('</div>');  
}

/**
 * Affiche la liste des relevés d'une liasse
 * @param object	$pconnexionBD
 */ 
function menu_liste_releve($pconnexionBD)
{
	global $gi_num_page_cour;
	$st_requete = "select concat('REL', liasse_releve.idf) as idf, ".
	              "       case when liasse_releve.idf_releveur=0 then 'Inconnu' else concat(releveur.nom, ' ', releveur.prenom) end as releveur, ".
	              "       case when date_fin_releve = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_fin_releve, '%d/%m/%Y') end as date_fin_releve, ".
				  "       case when in_publication_numerique=1 then 'Oui' else 'Non' end as publi_num, ".
				  "       info_complementaires ".
	              "from liasse_releve ".
	              "     left outer join releveur on liasse_releve.idf_releveur = releveur.idf ".
				  "where liasse_releve.cote_liasse = '".$_SESSION['cote_liasse_gal']."' ".
				  "order by liasse_releve.date_fin_releve";
	$a_liste_liasses = $pconnexionBD->sql_select_multiple($st_requete);
	print("<div align=center><form name='releve' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  $i_nb_liasses = count($a_liste_liasses);
	if ($i_nb_liasses!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_liasses,
		                                    10,DELTA_NAVIGATION,
											array('Releveur','Date fin relev&eacute;','Publication num&eacute;rique','Infos compl&eacute;mentaires','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();      
		print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_RELEVE\">");
		print("<input type=button value=\"Supprimer les relev&eacute;s s&eacute;lectionn&eacute;s\" ONCLICK=\"VerifieSuppressionReleves(0,'supp[]')\"></div>");   
	}
	else
		print("<div align=center>Pas de relev&eacute;</div>\n");
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER_RELEVE\"><input type=submit value=\"Ajouter un relev&eacute;\"></div>");  
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER_RELEVEUR\"><input type=submit value=\"Ajouter un releveur\"></div>");  
	print("<div align=center>______________________________________________________________________</div>");  
	print('</form>');
	print('</div>');
}

/**
 * Affiche la liste des publications papier d'une liasse
 * @param object	$pconnexionBD
 */ 
function menu_liste_publication($pconnexionBD)
{
	global $gi_num_page_cour;
	$st_requete = "select concat('PUB', liasse_publication_papier.idf) as idf, publication_papier.nom, ".
	              "       case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_publication, '%d/%m/%Y') end as date_publication, ".
				  "       substr(info_complementaires,1,50) as info_complementaires ".
	              "from liasse_publication_papier ".
	              "     left outer join publication_papier on liasse_publication_papier.idf_publication_papier = publication_papier.idf ".
				  "where liasse_publication_papier.cote_liasse = '".$_SESSION['cote_liasse_gal']."' ".
				  "order by publication_papier.date_publication";
	$a_liste_liasses = $pconnexionBD->sql_select_multiple($st_requete);
	print("<div align=center><form name='publi' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  $i_nb_liasses = count($a_liste_liasses);
	if ($i_nb_liasses!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_liasses,
		                                    10,DELTA_NAVIGATION,
											array('Titre publication','Date publication','Infos compl&eacute;mentaires','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();      
		print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_LIEN_PUBLI\">");
		print("<input type=button value=\"Supprimer les liens publications s&eacute;lectionn&eacute;s\" ONCLICK=\"VerifieSuppressionLiensPublis(0,'supp[]')\"></div>");   
	}
	else
		print("<div align=center>Pas de publication papier</div>\n");
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER_LIEN_PUBLI\"><input type=submit value=\"Ajouter un lien publication papier\"></div>");  
	print('</form>');
	/*print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER_PUBLI\"><input type=submit value=\"G&eacute;rer les publications papiers\"></div>");  
	print('</form>');*/
	print("<div align=center>______________________________________________________________________</div>");  
	print('</div>');
}

/**
 * Affiche la liste des photos d'une liasse
 * @param object	$pconnexionBD
 */ 
function menu_liste_photo($pconnexionBD)
{
	global $gi_num_page_cour;
	$st_requete = "select concat('PHO', liasse_photo.idf) as idf, ".
	              "       case when liasse_photo.idf_photographe=0 then 'Inconnu' else concat(releveur.nom, ' ', releveur.prenom) end as photographe, ".
	              "       case when date_photo = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_photo, '%d/%m/%Y') end as date_photo, ".
				  "       couverture_photo.nom as couverture, codif_photo.nom as codif, info_complementaires ".
	              "from liasse_photo ".
	              "     left outer join releveur on liasse_photo.idf_photographe = releveur.idf ".
	              "     left outer join couverture_photo on liasse_photo.idf_couverture_photo = couverture_photo.idf ".
	              "     left outer join codif_photo on liasse_photo.idf_codif_photo = codif_photo.idf ".
				  "where liasse_photo.cote_liasse = '".$_SESSION['cote_liasse_gal']."' ".
				  "order by liasse_photo.date_photo";
	$a_liste_liasses = $pconnexionBD->sql_select_multiple($st_requete);
	print("<div align=center><form name='photo' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  $i_nb_liasses=count($a_liste_liasses);
	if ($i_nb_liasses!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_liasses,
		                                    10,DELTA_NAVIGATION,
											array('Photographe','Date photos','Couverture photos','Codif photos','Infos compl&eacute;mentaires','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();      
		print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_PHOTO\">");
		print("<input type=button value=\"Supprimer les photos s&eacute;lectionn&eacute;es\" ONCLICK=\"VerifieSuppressionPhotos(0,'supp[]')\"></div>");   
	}
	else
		print("<div align=center>Pas de photo</div>\n");
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER_PHOTO\"><input type=submit value=\"Ajouter des photos\"></div>");  
	print("<div align=center>______________________________________________________________________</div>");  
	print('</form>');
	print('</div>');
}

/**
 * Affiche la liste des programmations d'une liasse
 * @param object	$pconnexionBD
 */ 
function menu_liste_program($pconnexionBD)
{
	global $gi_num_page_cour;
	$st_requete = "select concat('PRO', liasse_programmation.idf) as idf, ".
	              "       case when liasse_programmation.idf_intervenant=0 then 'Inconnu' else concat(releveur.nom, ' ', releveur.prenom) end as intervenant, ".
	              "       case when date_creation = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_creation, '%d/%m/%Y') end as date_creation, ".
	              "       case when date_echeance = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_echeance, '%d/%m/%Y') end as date_echeance, ".
	              "       programmation_releve.nom as etat, ".
				  "       case when in_program_releve=1 then 'Oui' else 'Non' end as releve, ".
				  "       case when in_program_photo=1 then 'Oui' else 'Non' end as photo, info_complementaires  ".
	              "from liasse_programmation ".
	              "     left outer join releveur on liasse_programmation.idf_intervenant = releveur.idf ".
	              "     left outer join programmation_releve on liasse_programmation.idf_priorite = programmation_releve.idf ".
				  "where liasse_programmation.cote_liasse = '".$_SESSION['cote_liasse_gal']."' and".
				  "      (liasse_programmation.date_reelle_fin is null or liasse_programmation.date_reelle_fin=str_to_date('0000/00/00', '%Y/%m/%d')) ".
				  "order by liasse_programmation.date_creation";
	$a_liste_liasses = $pconnexionBD->sql_select_multiple($st_requete);
	print("<div align=center><form name='program' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  $i_nb_liasses=count($a_liste_liasses);
	if ($i_nb_liasses!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_liasses,
		                                    10,DELTA_NAVIGATION,
											array('Intervenant','Date cr&eacute;ation','Date &eacute;ch&eacute;ance','Etat programmation','Programmation relev&eacute;','Programmation photo',
											      'Infos compl&eacute;mentaires','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();      
		print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_PROGRAM\">");
		print("<input type=button value=\"Supprimer les programmations s&eacute;lectionn&eacute;es\" ONCLICK=\"VerifieSuppressionPrograms(0,'supp[]')\"></div>");   
	}
	else
		print("<div align=center>Pas de programmation</div>\n");
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER_PROGRAM\"><input type=submit value=\"Ajouter une programmation\"></div>");  
	print("<div align=center>______________________________________________________________________</div>");  
	print('</form>');
	print('</div>');
}

/** Affiche le menu des actions sur une liasse
 * @param object	$pconnexionBD			Identifiant de la connexion de base
 */ 
function menu_gerer($pconnexionBD)
{
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	menu_liste_releve($pconnexionBD);
	menu_liste_publication($pconnexionBD);
	menu_liste_photo($pconnexionBD);
	menu_liste_program($pconnexionBD);
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"LISTE\"><br><input type=submit value=\"Retour\"></div>");
	print('</form>');
}
/** --------------------------------------- relevés ----------------------------------- **/
/**
 * Affiche de la table d'édition d'un relevé
 * @param object	$pconnexionBD				Identifiant de la connexion de base
 * @param array		$pa_releveur				Tableau des releveurs
 * @param integer	$pi_idf_releve				Identifiant du relevé à modifier
 * @param integer	$pi_idf_releveur			Identifiant du releveur 
 * @param string	$pst_date_fin_releve		Date de fin de relevé
 * @param integer	$pi_publication_numerique	booleen publication numérique Oui/Non
 * @param string	$pst_info_compl				Informations complémentaires sur le relevé
 */ 
function menu_edition_releve($pconnexionBD, $pa_releveur, $pi_idf_releve, $pi_idf_releveur,
                             $pst_date_fin_releve, $pi_publication_numerique, $pst_info_compl)
{
	print("<table border=1>");
	print("<tr><th>Releveur</th><td>".
	      "<select name=idf_releveur id='idf_releveur'>".chaine_select_options($pi_idf_releveur,$pa_releveur)."</select></td></tr>");
	print("<tr><th>Date de fin de relev&eacute;</th><td>".
	      "<input type=\"text\" maxlength=10 size=10 name=date_fin_releve value=\"$pst_date_fin_releve\"></td></tr>");
	print("<tr><th>Publication num&eacute;rique</th><td>");
	if($pi_publication_numerique == 1)
		print("<input type=checkbox name=publi_num value=\"1\" checked></tr>");
	else
		print("<input type=checkbox name=publi_num value=\"1\" unchecked></tr>");
	print("<tr><th>Informations compl&eacute;mentaires</th><td colspan=2>".
	      "<textarea rows='3' cols='80' maxlength=255 name='info_compl'>".$pst_info_compl."</textarea></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'un relevé
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param integer	$pi_idf_releve		Identifiant du revelée à modifier 
 * @param array		$pa_releveur		Tableau des releveurs
 */ 
function menu_modifier_releve($pconnexionBD, $pi_idf_releve, $pa_releveur)
{
	list($i_idf_releveur, $st_date_fin_releve, $i_publication_numerique, $st_info_compl)
	=$pconnexionBD->sql_select_liste("select idf_releveur, ".
	                                 "       case when date_fin_releve = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
									 "            else date_format(date_fin_releve, '%d/%m/%Y') ".
									 "            end as date_fin_releve, ".
	                                 "       in_publication_numerique, info_complementaires ".
									 "from liasse_releve ".
									 "where idf=$pi_idf_releve");
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Modification d'un relev&eacute;</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsReleve(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_RELEVE\">");
	print("<input type=hidden name=idf_releve value=$pi_idf_releve>");
	menu_edition_releve($pconnexionBD, $pa_releveur, $pi_idf_releve, $i_idf_releveur, $st_date_fin_releve,
	                    $i_publication_numerique, $st_info_compl); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsReleve(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'un relevé
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param array		$pa_releveur		Tableau des releveurs
 */ 
function menu_ajouter_releve($pconnexionBD, $pa_releveur)
{
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Ajout d'un relev&eacute;</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsReleve(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_RELEVE\">");
	menu_edition_releve($pconnexionBD, $pa_releveur, '', 0, '', '', ''); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsReleve(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'un releveur
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 */ 
function menu_ajouter_releveur($pconnexionBD)
{
	$st_requete = "SELECT idf,concat(nom, ' ', prenom) as nom FROM adherent ".
	              "where idf not in (select idf_adherent from releveur) ".
				  "order by nom";
	$a_adherent = $pconnexionBD->liste_valeur_par_clef($st_requete);
	print("<div class=TITRE>Ajout d'un releveur</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsReleveur(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_RELEVEUR\">");
	print("<table border=1>");
	print("<tr><th>Adh&eacute;rent</th><td>".
	      "<select name='idf_adherent' id='idf_adherent'>".chaine_select_options(0,$a_adherent)."</select></td></tr>");
	print("</table>");
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsReleveur(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** --------------------------------------- publication papier ----------------------------------- **/
/**
 * Affiche de la table d'édition d'un lien publication papier
 * @param object	$pconnexionBD				Identifiant de la connexion de base
 * @param array		$pa_publication				Tableau des publications papier
 * @param integer	$pi_idf_publication				Identifiant d'une publication papier
 */ 
function menu_edition_lien_publication($pconnexionBD, $pa_publication, $pi_idf_publication)
{
	print("<table border=1>");
	print("<tr><th>Publication</th><td>".
	      "<select name=idf_publication id='idf_publication'>".chaine_select_options($pi_idf_publication,$pa_publication)."</select></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'un lien publication papier
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param integer	$pi_idf_publication	Identifiant du lien publication papier 
 * @param array		$pa_publication		Tableau des publications papier
 */ 
function menu_modifier_lien_publication($pconnexionBD, $pi_idf_lien_publication, $pa_publication)
{
	list($i_idf_publication)
	=$pconnexionBD->sql_select_liste("select idf_publication_papier from liasse_publication_papier where idf=".$pi_idf_lien_publication);
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Modification d'un lien publication papier</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsLienPubli(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_LIEN_PUBLI\">");
	print("<input type=hidden name=idf_lien_publi value=$pi_idf_lien_publication>");
	menu_edition_lien_publication($pconnexionBD, $pa_publication, $i_idf_publication); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsLienPubli(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'un lien publication papier
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param array		$pa_publication		Tableau des publications papier
 */ 
function menu_ajouter_lien_publication($pconnexionBD, $pa_publication)
{
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Ajout d'un lien publication papier</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsLienPubli(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_LIEN_PUBLI\">");
	menu_edition_lien_publication($pconnexionBD, $pa_publication, 0); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsLienPubli(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/**
 * Affiche la liste des publications papier
 * @param object	$pconnexionBD
 * @param array		$pa_publication		Tableau des publications papier
 */ 
function menu_gerer_publication($pconnexionBD)
{
	global $gi_num_page_cour;
	unset($_SESSION['liasse']);
	$a_init_titres = array("A","B","C","D","E","F","G","H","I","J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "*"); 
	print("<div class=TITRE>Gestion des publications papiers</div>");
	print("<div align=center><br><form  name='publi' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return\">");
	print("<input type=hidden name=mode value=\"MENU_GERER_PUBLI\">");
	print("<table border=0 cellpadding=0 cellspacing=0><caption>S&eacute;lection des publications<br><br></caption>");
	print('<tr class=ligne_paire><td align="center" width="200">Premi&egrave;re lettre du titre</td><td>');
	$i_session_init = isset($_SESSION['init']) ? $_SESSION['init'] : $a_init_titres[0];
	$gc_init = empty($_GET['initpub']) ? $i_session_init : $_GET['initpub'];
	if( $gc_init == "*" )
		$gc_init = "";
	$_SESSION['init'] = $gc_init;   
	foreach ($a_init_titres as $c_init)
	{
		if ($c_init==$gc_init)
			print("<span style=\"font-weight: bold;\">$c_init </span>");
		else
			print("<a href=\"".$_SERVER['PHP_SELF']."?initpub=$c_init\">$c_init</a> ");
	}
	print('</td></tr></table>');
	$st_requete = "select concat('PPA', idf) as idf, nom, ".
	              "       case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_publication, '%d/%m/%Y') end as date_publication, ".
				  "       info_complementaires ".
	              "from publication_papier ".
				  "where nom like '".$gc_init."%' ".
				  "order by nom, date_publication";
	$a_liste_publis = $pconnexionBD->sql_select_multiple($st_requete);
  $i_nb_publis=count($a_liste_publis);
	if ($i_nb_publis!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_publis,
		                                    10,DELTA_NAVIGATION,
											array('Titre publication','Date publication','Infos compl&eacute;mentaires','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition(2);
		$pagination->affiche_entete_liens_navigation();    
		//print("<input type=hidden name=mode value=\"MENU_GERER_PUBLI\">");
		print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER_PUBLI\">");
		print("<input type=button value=\"Supprimer les publications s&eacute;lectionn&eacute;s\" ONCLICK=\"VerifieSuppressionPublis(0,'supp[]')\"></div>");   
	}
	else
		print("<div align=center>Pas de publication papier</div>\n");
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER_PUBLI\"><input type=submit value=\"Ajouter une publication papier\"></div>");  
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Retour\"></div>");
	print('</form>');
	print('</div>');  
}

/**
 * Affiche de la table d'édition d'une publication
 * @param object	$pconnexionBD				Identifiant de la connexion de base
 * @param string	$pst_nom					Titre de la publication
 * @param string	$pst_date_publication		Date de la publication
 * @param string	$pst_info_compl				Informations complémentaires sur le relevé
 */ 
function menu_edition_publication($pconnexionBD, $pst_nom, $pst_date_publication, $pst_info_compl)
{
	print("<table border=1>");
	print("<tr><th>Titre de la publication</th><td colspan=2>".
	      "<textarea rows='2' cols='80' maxlength=100 name='titre'>".$pst_nom."</textarea></td></tr>");
	print("<tr><th>Date de publication</th><td>".
	      "<input type=\"text\" maxlength=10 size=10 name=date_publication value=\"$pst_date_publication\"></td></tr>");
	print("<tr><th>Informations compl&eacute;mentaires</th><td colspan=2>".
	      "<textarea rows='3' cols='80' maxlength=255 name='info_compl'>".$pst_info_compl."</textarea></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'une publication
 * @param object	$pconnexionBD			Identifiant de la connexion de base
 * @param string	$pi_idf_publication		Titre de la publication
 */ 
function menu_modifier_publication($pconnexionBD, $pi_idf_publication)
{
	list($st_nom, $st_date_publication, $st_info_compl)
	=$pconnexionBD->sql_select_liste("select nom, ".
	                                 "       case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
									 "            else date_format(date_publication, '%d/%m/%Y') ".
									 "            end as date_publication, info_complementaires ".
									 "from publication_papier ".
									 "where idf=$pi_idf_publication");
	print("<div class=TITRE>Gestion des publications</div>");
	print("<div class=SOUSTITRE>Modification d'une publication</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPubli(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_PUBLI\">");
	print("<input type=hidden name=idf_publication value=$pi_idf_publication>");
	menu_edition_publication($pconnexionBD, $st_nom, $st_date_publication, $st_info_compl); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsPubli(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER_PUBLI\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'un relevé
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 */ 
function menu_ajouter_publication($pconnexionBD)
{
	print("<div class=TITRE>Gestion des publications</div>");
	print("<div class=SOUSTITRE>Ajout d'une publication</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPubli(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_PUBLI\">");
	menu_edition_publication($pconnexionBD, '', '', ''); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsPubli(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER_PUBLI\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** --------------------------------------- photos ----------------------------------- **/
/**
 * Affiche de la table d'édition d'une photo
 * @param object	$pconnexionBD				Identifiant de la connexion de base
 * @param array		$pa_reveleur				Tableau des releveurs
 * @param integer	$pi_idf_photo				Identifiant de la prise de photo à modifier
 * @param integer	$pi_idf_photographe			Identifiant du photographe 
 * @param string	$pst_date_photo				Date de photo
 * @param integer	$pi_couverture_photo	code couverture photo
 * @param integer	$pi_codif_photo			codif photo
 * @param string	$pst_info_compl				Informations complémentaires sur la prise de photo
 */ 
function menu_edition_photo($pconnexionBD, $pa_reveleur, $pi_idf_photo, $pi_idf_photographe,
                             $pst_date_photo, $pi_couverture_photo, $pi_codif_photo, $pst_info_compl, $pa_couverture_photo, $pa_codif_photo)
{
	print("<table border=1>");
	print("<tr><th>Photographe</th><td>".
	      "<select name=idf_photographe id='idf_photographe'>".chaine_select_options($pi_idf_photographe,$pa_reveleur)."</select></td></tr>");
	print("<tr><th>Date de photo</th><td>".
	      "<input type=\"text\" maxlength=10 size=10 name=date_photo value=\"$pst_date_photo\"></td></tr>");
	print("<tr><th>Couverture photo</th><td>".
	      "<select name=idf_couverture_photo id='idf_couverture_photo'>".chaine_select_options($pi_couverture_photo,$pa_couverture_photo)."</select></td></tr>");
	print("<tr><th>Codif photo</th><td>".
	      "<select name=idf_codif_photo id='idf_codif_photo'>".chaine_select_options($pi_codif_photo,$pa_codif_photo)."</select></td></tr>");
	print("<tr><th>Informations compl&eacute;mentaires</th><td colspan=2>".
	      "<textarea rows='3' cols='80' maxlength=255 name='info_compl'>".$pst_info_compl."</textarea></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'une photo
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param integer	$pi_idf_photo		Identifiant de la prise de photo à modifier 
 * @param array		$pa_reveleur		Tableau des releveurs
 */ 
function menu_modifier_photo($pconnexionBD, $pi_idf_photo, $pa_reveleur, $pa_couverture_photo, $pa_codif_photo)
{
	list($i_idf_photographe, $st_date_photo, $pi_couverture_photo, $pi_codif_photo, $st_info_compl)
	=$pconnexionBD->sql_select_liste("select idf_photographe, ".
	                                 "       case when date_photo = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
									 "            else date_format(date_photo, '%d/%m/%Y') ".
									 "            end as date_photo, ".
	                                 "       idf_couverture_photo, idf_codif_photo, info_complementaires ".
									 "from liasse_photo ".
									 "where idf=$pi_idf_photo");
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Modification d'une prise de photo</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPhoto(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_PHOTO\">");
	print("<input type=hidden name=idf_photo value=$pi_idf_photo>");
	menu_edition_photo($pconnexionBD, $pa_reveleur, $pi_idf_photo, $i_idf_photographe, $st_date_photo,
	                    $pi_couverture_photo, $pi_codif_photo, $st_info_compl, $pa_couverture_photo, $pa_codif_photo); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsPhoto(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'une photo
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param array		$pa_reveleur		Tableau des releveurs
 */ 
function menu_ajouter_photo($pconnexionBD, $pa_reveleur, $pa_couverture_photo, $pa_codif_photo)
{
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Ajout d'une prise de photo</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsPhoto(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_PHOTO\">");
	menu_edition_photo($pconnexionBD, $pa_reveleur, 0, 0, '', 0, 0, '', $pa_couverture_photo, $pa_codif_photo); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsPhoto(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** --------------------------------------- programmation ----------------------------------- **/
/**
 * Affiche de la table d'édition d'une programmation
 * @param object	$pconnexionBD				Identifiant de la connexion de base
 * @param array		$pa_reveleur				Tableau des releveurs
 * @param integer	$pi_idf_program				Identifiant de la programmation à modifier
 * @param integer	$pi_idf_intervenant			Identifiant de l'intervenant (la personne programmée) 
 * @param string	$pst_date_creation			Date de création de la programmation
 * @param string	$pst_date_reelle_fin		Date réelle de fin de l'action programmée
 * @param integer	$pi_program_releve			booleen programmation d'un relevé Oui/Non
 * @param integer	$pi_program_photo			booleen programmation de photos Oui/Non
 * @param string	$pst_info_compl				Informations complémentaires sur le relevé
 */ 
function menu_edition_program($pconnexionBD, $pa_reveleur, $pi_idf_program, $pi_idf_intervenant, $pi_priorite_program, 
                              $pst_date_creation, $pst_date_echeance, $pst_date_reelle_fin, 
							  $pi_program_releve, $pi_program_photo, $pst_info_compl, $pa_priorite_program)
{
	print("<table border=1>");
	print("<tr><th>Intervenant programm&eacute;</th><td>".
	      "<select name=idf_intervenant id='idf_intervenant'>".chaine_select_options($pi_idf_intervenant,$pa_reveleur)."</select></td></tr>");
	print("<tr><th>Date de cr&eacute;ation de la programmation</th><td>".
	      "<input type=\"text\" maxlength=10 size=10 name=date_creation value=\"$pst_date_creation\"></td></tr>");
	print("<tr><th>Date d'&eacute;ch&eacute;ance de la programmation</th><td>".
	      "<input type=\"text\" maxlength=10 size=10 name=date_echeance value=\"$pst_date_echeance\"></td></tr>");
	print("<tr><th>Priorit&eacute; de la programmation</th><td>".
	      "<select name=idf_priorite id='idf_priorite'>".chaine_select_options($pi_priorite_program, $pa_priorite_program)."</select></td></tr>");
	print("<tr><th>Programmation relev&eacute;</th><td>");
	if($pi_program_releve == 1)
		print("<input type=checkbox name=program_releve value=\"1\" checked></tr>");
	else
		print("<input type=checkbox name=program_releve value=\"1\" unchecked></tr>");
	print("<tr><th>Programmation photo</th><td>");
	if($pi_program_photo == 1)
		print("<input type=checkbox name=program_photo value=\"1\" checked></tr>");
	else
		print("<input type=checkbox name=program_photo value=\"1\" unchecked></tr>");
	print("<tr><th>Informations compl&eacute;mentaires</th><td colspan=2>".
	      "<textarea rows='3' cols='80' maxlength=255 name='info_compl'>".$pst_info_compl."</textarea></td></tr>");
	print("<tr><th>Date de fin r&eacute;elle de l'action programm&eacute;e</th><td>".
	      "<input type=\"text\" maxlength=10 size=10 name=date_reelle_fin value=\"$pst_date_reelle_fin\">".
		  "<br>Si vous renseignez cette date, la programmation disparaîtra de la liste, sans être supprim&eacute;e</td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'un relevé
 * @param object	$pconnexionBD			Identifiant de la connexion de base
 * @param integer	$pi_idf_program			Identifiant de la programmation à modifier 
 * @param array		$pa_reveleur			Tableau des releveurs
 * @param array		$pa_priorite_program	Tableau des priorités de programmation
 */ 
function menu_modifier_program($pconnexionBD, $pi_idf_program, $pa_reveleur, $pa_priorite_program)
{
	list($i_idf_intervenant, $i_priorite_program, $st_date_creation, $pst_date_echeance, $st_date_reelle_fin, $i_program_releve, $i_program_photo, $st_info_compl)
	=$pconnexionBD->sql_select_liste("select idf_intervenant, idf_priorite, ".
	                                 "       case when date_creation = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
									 "            else date_format(date_creation, '%d/%m/%Y') ".
									 "            end as date_creation, ".
	                                 "       case when date_echeance = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
									 "            else date_format(date_echeance, '%d/%m/%Y') ".
									 "            end as date_echeance, ".
	                                 "       case when date_reelle_fin = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
									 "            else date_format(date_reelle_fin, '%d/%m/%Y') ".
									 "            end as date_reelle_fin, ".
	                                 "       in_program_releve, in_program_photo, info_complementaires ".
									 "from liasse_programmation ".
									 "where idf=$pi_idf_program");
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Modification d'une programmation</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsProgram(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER_PROGRAM\">");
	print("<input type=hidden name=idf_program value=$pi_idf_program>");
	menu_edition_program($pconnexionBD, $pa_reveleur, $pi_idf_program, $i_idf_intervenant, $i_priorite_program, 
	                     $st_date_creation, $pst_date_echeance, $st_date_reelle_fin, $i_program_releve, $i_program_photo, $st_info_compl, $pa_priorite_program); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Modifier\" ONCLICK=\"VerifieChampsProgram(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche le menu d'ajout d'une programmation
 * @param object	$pconnexionBD		Identifiant de la connexion de base
 * @param array		$pa_reveleur			Tableau des releveurs
 * @param array		$pa_priorite_program	Tableau des priorités de programmation
 */ 
function menu_ajouter_program($pconnexionBD, $pa_reveleur, $pa_priorite_program)
{
	print("<div class=TITRE>Gestion des actions sur la liasse ".$_SESSION['cote_liasse_gal']."<br>Notaire(s) ".$_SESSION['notaires_gal'].", ".$_SESSION['periodes_gal']."</div>");
	print("<div class=SOUSTITRE>Ajout d'une programmatron</div><br><br>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChampsProgram(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER_PROGRAM\">");
	menu_edition_program($pconnexionBD, $pa_reveleur, 0, 0, 0, date('d/m/Y'), '', '', 0, 0, '', $pa_priorite_program); 
	print("</div>");
	print("<div align=center><br><input type=button value=\"Ajouter\" ONCLICK=\"VerifieChampsProgram(0)\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"MENU_GERER\">");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Elimine les éventuels \ du texte et remplace les ' par \'
 * @param string	$pst_texte			Le texte à traiter
 */ 
function escape_apostrophe($pst_texte)
{
	$st_texte = str_replace("\\", "", $pst_texte);
	$st_texte = str_replace("'", "\'", $pst_texte);
	return($st_texte);
}


//$connexionBD->ferme(); 
?>