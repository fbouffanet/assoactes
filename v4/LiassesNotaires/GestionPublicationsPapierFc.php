<?php
/**
 * Affiche la liste des liasses
 * @param object $pconnexionBD
 */ 

/** --------------------------------------- publication papier ----------------------------------- **/
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
	print('<div align=center><form  action="'.$_SERVER['PHP_SELF'].'" method="post">');
	print('<div class="panel panel-primary">');
	print('<div class="panel-heading">Publications papiers</div>');
	print('<div class="panel-body">');
	print('<form name="listePubli" id="listePubli" action='.$_SERVER['PHP_SELF'].'" method="post" onSubmit="return">');
	print('<input type=hidden name=mode id=mode value="SUPPRIMER_PUBLI">');
	print('<table border=0 cellpadding=0 cellspacing=0>');
	print('<tr class=ligne_paire><td align="center" width="200"><label class="col-form-label">Première lettre du titre&nbsp&nbsp</label></td><td>');
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
	print('</td></tr></table></div></div>');
	$st_requete = "select concat('PPA', idf) as idf, nom, ".
	              "       case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' else date_format(date_publication, '%d/%m/%Y') end as date_publication, ".
				  "       info_complementaires ".
	              "from publication_papier ".
				  "where nom like '".$gc_init."%' ".
				  "order by nom, date_publication";
	$a_liste_publis = $pconnexionBD->sql_select_multipleUtf8($st_requete);
	$i_nb_publis = count($a_liste_publis) / 3;
	if ($i_nb_publis!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'], 'num_page', $i_nb_publis, 10, DELTA_NAVIGATION,
											array('Titre publication','Date publication','Infos compl&eacute;mentaires','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navlimite();
		$pagination->affiche_tableau_edition_sil(2);
		$pagination->affiche_entete_liens_navlimite();    
		print('<div class="btn-group col-md-9 col-md-offset-3" role="group">');
		print('<button type=button class="btn btn-sm btn-danger" id="btSupprimerPubli"><span class="glyphicon glyphicon-trash"></span>  Supprimer les publications sélectionnées</button>');
	}
	else {
		print('<div align=centerclass="alert alert-danger" >Pas de publication papier</div>\n');
		print('<div class="btn-group col-md-9 col-md-offset-3" role="group">');
	}
	print('<button type=submit id="btMenuAjouterPubli" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-new-window"></span> Ajouter une publication papier</button>');
	print('</div></form></div>');
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
	=$pconnexionBD->sql_select_listeUtf8("select nom, ".
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