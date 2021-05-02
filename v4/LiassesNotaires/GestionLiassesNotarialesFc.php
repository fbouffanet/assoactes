<?php
/**
 * Affiche la liste des liasses
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
	global $gi_num_page_cour;
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
	unset($_SESSION['liasse']);
	$a_numerotation_liasses = array("z","1","2","3","4","5","6","7","8","9"); 
	print("<div align=center><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
	print('<div class="panel panel-primary">');
	print('<div class="panel-heading">Liasses notariales</div>');
	print('<div class="panel-body">');
	print('<table border=0 cellpadding=0 cellspacing=0>');
	print('<tr class="ligne_paire"><td rowspan="4" width="500" align="left">');
	print("<div class=\"row text-left\">");
	print('<label for="serie_liasse" class="col-form-label">Série de liasses&nbsp&nbsp</label>');
	print(             "<select name='serie_liasse' id='serie_liasse' onChange='window.location=\"".$_SERVER['PHP_SELF']."?serie_liasse=\"+this.value;'>".
		                    chaine_select_options($st_serie_liasse,$a_serie_liasse)."</select>");
	if( $st_serie_liasse == "L") {
		print("Ces répertoires sont issus de la série L qui regroupe tous les actes de l’administration entre 1789 et l’an VIII. ");
		print("Nous n’avons saisi que les numéros de la série L ayant traits à des répertoires notariés. <br>");
		print("La recherche se fait donc entre des bornes précises, selon 6 groupes : ");
		print(" 2197 à 2263, 2328 à 2393, 2433 à 2492,< 2552 à 2596, 2607 à 2668, 2683 à 2732.");
	}
	print('</div></td><td rowspan="4"><label>Cotes&nbsp&nbsp&nbsp</label></td>');
	// dizaine de milliers
	print('<td>');
	$i_session_init_dixm = isset($_SESSION['init_dixm']) ? $_SESSION['init_dixm'] : $a_numerotation_liasses[0];
	$gc_init_dixm = empty($_GET['init_dixm']) ? $i_session_init_dixm : $_GET['init_dixm'];
	$_SESSION['init_dixm'] = $gc_init_dixm;   
	foreach ($a_numerotation_liasses as $c_init_dixm) 	{
		if ($c_init_dixm==$gc_init_dixm)	print("<span style=\"font-weight: bold;\">$c_init_dixm </span>");
		else								print("<a href=\"".$_SERVER['PHP_SELF']."?init_dixm=$c_init_dixm\">$c_init_dixm</a> ");
	}
	print('</td><td align="left">&nbsp&nbsp&nbsp<I>dizaine de milliers</I></td></tr>');
	// millier
	print('<tr class=ligne_paire><td>');
	$i_session_init_mill = isset($_SESSION['init_mill']) ? $_SESSION['init_mill'] : $a_numerotation_liasses[0];
	$gc_init_mill = empty($_GET['init_mill']) ? $i_session_init_mill : $_GET['init_mill'];
	$_SESSION['init_mill'] = $gc_init_mill;   
	foreach ($a_numerotation_liasses as $c_init_mill)	{
		if ($c_init_mill==$gc_init_mill)	print("<span style=\"font-weight: bold;\">$c_init_mill </span>");
		else								print("<a href=\"".$_SERVER['PHP_SELF']."?init_mill=$c_init_mill\">$c_init_mill</a> ");
	}
	print('</td><td align="left">&nbsp&nbsp&nbsp<I>millier</I></td></tr>');
	// centaine
	print('<tr class=ligne_paire><td>');
	$i_session_init_cent = isset($_SESSION['init_cent']) ? $_SESSION['init_cent'] : $a_numerotation_liasses[0];
	$gc_init_cent = empty($_GET['init_cent']) ? $i_session_init_cent : $_GET['init_cent'];
	$_SESSION['init_cent'] = $gc_init_cent;   
	foreach ($a_numerotation_liasses as $c_init_cent)	{
		if ($c_init_cent==$gc_init_cent)	print("<span style=\"font-weight: bold;\">$c_init_cent </span>");
		else								print("<a href=\"".$_SERVER['PHP_SELF']."?init_cent=$c_init_cent\">$c_init_cent</a> ");
	}
	print('</td><td align="left">&nbsp&nbsp&nbsp<I>centaine</I></td></tr>');
	// dizaine
	print('<tr class=ligne_paire><td>');
	$i_session_init_dix = isset($_SESSION['init_dix']) ? $_SESSION['init_dix'] : $a_numerotation_liasses[0];
	$gc_init_dix = empty($_GET['init_dix']) ? $i_session_init_dix : $_GET['init_dix'];
	$_SESSION['init_dix'] = $gc_init_dix;   
	foreach ($a_numerotation_liasses as $c_init_dix)	{
		if ($c_init_dix==$gc_init_dix)		print("<span style=\"font-weight: bold;\">$c_init_dix </span>");
		else								print("<a href=\"".$_SERVER['PHP_SELF']."?init_dix=$c_init_dix\">$c_init_dix</a> ");
	}
	print('</td><td align="left">&nbsp&nbsp&nbsp<I>dizaine</I></td></tr></table>');
	print('</div></div>');
	$numero  = $gc_init_dixm == 'z' ? '0' : $gc_init_dixm;
	$numero .= $gc_init_mill == 'z' ? '0' : $gc_init_mill;
	$numero .= $gc_init_cent == 'z' ? '0' : $gc_init_cent;
	$numero .= $gc_init_dix == 'z' ? '0' : $gc_init_dix;
	$st_requete = "select cote_liasse as idf,cote_liasse,libelle_notaires,libelle_annees ".
	              "from liasse ".
				  "where cote_liasse like '$st_serie_liasse-$numero%' ".
				  "order by cote_liasse";
	$a_liste_liasses = $pconnexionBD->sql_select_multipleUtf8($st_requete);
  $i_nb_liasses =count($a_liste_liasses);
	if ($i_nb_liasses!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_liasses,
		                                    10,DELTA_NAVIGATION,array('Cote','Notaire(s)','Periode(s)','Modifier','Supprimer'));		
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		//$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition_sil(2);
		//$pagination->affiche_entete_liens_navigation();      
		print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER\">");
		//print("<input type=button value=\"Supprimer les liasses sélectionnées\" ONCLICK=\"VerifieSuppression(0,'supp[]')\"></div>");
		print('<div class="btn-group col-md-2 col-md-offset-3" role="group">');
		print("<button type=submit name=Supprimer class=\"btn btn-sm btn-danger\" ONCLICK=\"VerifieSuppression(0,'supp[]')\">");
		print("    <span class=\"glyphicon glyphicon-trash\"></span> Supprimer les liasses sélectionnées</button>");
		print('</div>');
	}
	else
		print("<div align=center><br>Pas de liasses</div><br>");
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><input type=hidden name=mode value=\"MENU_AJOUTER\">");  
	//print("<input type=submit value=\"Ajouter une liasse\">");
//	print('<div class="btn-group col-md-4 col-md-offset-4" role="group">');
	print("<button type=submit name=Ajouter class=\"btn btn-sm btn-success\">");
	print("    <span class=\"glyphicon glyphicon-new-window\"></span> Ajouter une liasse</button>");
//	print('</div>');
	print("</div>");  
	print('</form>');
	

	print('</div>');  
}

/**
 * Affiche de la table d'édition
 * @param string	$pst_cote					Cote de la liasse
 * @param string	$pst_libelle				Libellé de la liasse
 * @param string	$pst_periodes				Libellé des années couvertes par la liasse
 * @param string	$pst_notaires				Libellé du(des) notaire(s)
 * @param integer	$pi_depose_ad				Indicateur liasse déposée aux AD
 * @param string	$pst_idf_dept_depose_ad		Département de dépose AD
 * @param array		$pa_depts_depose_ad			Tableau des départements de dépose AD
 * @param integer	$pi_liasse_consult			Indicateur liasse consultable
 * @param integer	$pi_idf_forme_liasse		Forme de la liasse 
 * @param array		$pa_depts_depose_ad			Tableau des formes de la liasse
 * @param integer	$pst_info_compl				Informations complémentaires
 */ 
function menu_edition($pst_cote, $pst_libelle, $pst_periodes, $pst_notaires, 
                      $pi_depose_ad, $pst_idf_dept_depose_ad, $pa_depts_depose_ad, 
					  $pi_liasse_consult, $pi_idf_forme_liasse, $pa_formes_liasses, $pst_info_compl, $pst_mode)
{
	//**pc**// à remplacer par une image du site
	$st_icone_info = '../images/infos.png';

	print("<input type=hidden name='mode_enr' value='".$pst_mode."'>");
	if( $pst_mode == 'M' ) {
		print('<div class="form-row col-md-12">'.
					'<div class="form-group col-md-4" align="right"><label class="col-form-label">Cote de la liasse&nbsp</label></div>'.
					'<div class="form-group col-md-1"><span class="input-group-addon">'.$pst_cote.'</span></div></div></div>');
		print('<div class="form-row col-md-12">'.
					'<div class="form-group col-md-4" align="right"><label class="col-form-label">Période(s)&nbsp</label></div>'.
					'<div class="form-group col-md-3"><span class="input-group-addon">'.$pst_periodes.'</span></div>'.
					"<div class='form-group' align='left'><a href='".$_SERVER['PHP_SELF']."?smode=LISTE_PERIODE&cote_liasse=".$pst_cote."'>".
					"<img src='".$st_icone_info."' border=0 alt='détail des périodes'></a></div></div>");
		print('<div class="form-row col-md-12">'.
					'<div class="form-group col-md-4" align="right"><label class="col-form-label">Notaire(s)&nbsp</label></div>'.
					'<div class="form-group col-md-3"><span class="input-group-addon" align="left">'.$pst_notaires.'</span></div>'.
					"<div align=\"left\"><a href='".$_SERVER['PHP_SELF']."?smode=LISTE_NOTAIRE&cote_liasse=".$pst_cote."'>".
					"<img src='".$st_icone_info."' border=0 alt='détail des notaires'></a></div></div>");
	}
	else {
		print("<div class='form-row col-md-12'>".
					"<div class='form-group col-md-4' align='right'><label class='col-form-label'>Série de la liasse&nbsp</label></div>".
					"<div class='form-group col-md-1'><span class='input-group-addon'>".$_SESSION['serie_liasse']."</span></div></div>");
		print("<div class='form-row col-md-12'>".
					"<div class='form-group col-md-4' align='right'><label class='col-form-label'>Numéro de la liasse&nbsp</label></div>".
					"<div class='form-group col-md-2'>");
		print( 		$_SESSION['init_dixm'] == 'z' ? '0' : $_SESSION['init_dixm']);
		print( 		$_SESSION['init_mill'] == 'z' ? '0' : $_SESSION['init_mill']);
		print( 		$_SESSION['init_cent'] == 'z' ? '0' : $_SESSION['init_cent']);
		print( 		$_SESSION['init_dix'] == 'z' ? '0' : $_SESSION['init_dix']);
		print( 		"<input type=text name='numero' id='numero' size=1 maxlength='1' value='' class='form-control'></div></div>");
	}
	print("<table><tr><th>Déposée aux AD</th><td colspan=2>");
	if($pi_depose_ad == 1)
		print("<input type=checkbox name=depose_ad value=\"1\" checked></tr>");
	else
		print("<input type=checkbox name=depose_ad value=\"1\"></tr>");
	print("<tr><th>Département</th><td colspan=2>".
	      "<select name=dept_depose_ad id='dept_depose'>".chaine_select_options($pst_idf_dept_depose_ad,$pa_depts_depose_ad)."</select></td></tr>");
	print("<tr><th>Liasse consultable</th><td colspan=2>");
	if($pi_liasse_consult == 1)
		print("<input type=checkbox name=liasse_consult value=\"1\" checked></tr>");
	else
		print("<input type=checkbox name=liasse_consult value=\"1\"></tr>");
	print("<tr><th>Forme liasse</th><td colspan=2>".
	      "<select name=forme_liasse>".chaine_select_options($pi_idf_forme_liasse,$pa_formes_liasses)."</select></td></tr>");
	
 
	print("<tr><th>Informations complémentaires</th><td colspan=2>".
	      "<textarea rows='13' cols='80' maxlength=1000 name='info_compl'>".$pst_info_compl."</textarea></td></tr>");
	print("</table>");
}

/** Affiche le menu de modification d'une commune
 * @param object	$pconnexionBD			Identifiant de la connexion de base
 * @param integer	$pst_cote_liasse		Cote de la liasse à modifier 
 * @param array		$pa_depts_depose_ad		Tableau des départements de dépose AD 
 * @param array		$pa_formes_liasses		Tableau des formes de liasses 
 */ 
function menu_modifier($pconnexionBD, $pst_cote_liasse, $pa_depts_depose_ad, $pa_formes_liasses)
{
	list($st_cote, $st_libelle, $st_periodes, $st_notaires, $i_depose_ad, $st_idf_dept_depose_ad, $i_liasse_consult, 
	     $i_idf_forme_liasse, $st_info_compl)
	=$pconnexionBD->sql_select_listeUtf8("select cote_liasse, libelle_liasse, libelle_annees, libelle_notaires, ".
	                                 "       in_liasse_depose_ad, idf_dept_depose_ad, in_liasse_consultable, ".
									 "       idf_forme_liasse, info_complementaires ".
									 "from liasse ".
									 "where cote_liasse='".$pst_cote_liasse."'");
	print('<div align=center>');
	print('<div class="panel panel-primary">');
	print('<div class="panel-heading">Liasses notariales</div>');
	print('<div class="panel-body">');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
	print("<div align=center><input type=hidden name=mode value=\"MODIFIER\">");
	print("<input type=hidden name=cote_liasse value=$pst_cote_liasse>");
	menu_edition($st_cote, $st_libelle, $st_periodes, $st_notaires, $i_depose_ad, $st_idf_dept_depose_ad, $pa_depts_depose_ad, 
                 $i_liasse_consult, $i_idf_forme_liasse, $pa_formes_liasses, $st_info_compl, 'M');
	print("</div>");
	print("<div align=center><br>");
	print("<button type=submit name=\"MODIFIER\" class=\"btn btn-sm btn-warning\" ONCLICK=\"VerifieChamps(0)\">");
	print("    <span class=\"glyphicon glyphicon-floppy-save\"></span>  Modifier</button>");
	print('</div>');
	print('</form></div></div>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"LISTE\">");
	print('<button type=submit name=LISTE class="btn btn-sm btn-primary">');
	print('<span class="glyphicon glyphicon-arrow-left"></span> Retour</button>');
	print('</div>');
	print('</form></div>');
}

/** Affiche le menu d'ajout d'une liasse
 * @param array		$pa_depts_depose_ad		Tableau des départements de dépose AD 
 * @param array		$pa_formes_liasses		Tableau des formes de liasses 
 */ 
function menu_ajouter($pconnexionBD, $pa_depts_depose_ad, $pa_formes_liasses)
{
	print('<div class="panel panel-primary">');
	print('<div class="panel-heading" align="center">Liasses notariales</div>');
	print('<div class="panel-body">');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
	print("<div align='center'><input type='hidden' name='mode' value='AJOUTER'>");
	menu_edition('', '', '', '', 0, '', $pa_depts_depose_ad, 0, 0, $pa_formes_liasses, '', 'A');
	print("</div>");
	print("<div align=center><br>");
	print("<button type=submit name=\"AJOUTER\" class=\"btn btn-sm btn-warning\" ONCLICK=\"VerifieChamps(0)\">");
	print("    <span class=\"glyphicon glyphicon-floppy-save\"></span>  Ajouter</button>");
	print('</div>');
	print('</form></div></div>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=\"LISTE\">");
	print('<button type=submit name=LISTE class="btn btn-sm btn-primary">');
	print('<span class="glyphicon glyphicon-arrow-left"></span> Retour</button>');
	print('</div>');
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


?>