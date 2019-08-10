<?php

require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

print('<!DOCTYPE html>');
print("<head>");
/* ------------------- modif title */
print("<title>Base AGC: Vos recherches d'actions sur les liasses</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
//print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
//print('<meta http-equiv="content-language" content="fr"> ');
//print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='./VerifieChampsRechercheActionLiasse.js' type='text/javascript'></script>");
print('<link rel="shortcut icon" href="../images/favicon.ico">');

print("</head>");

print("<body>");
print('<div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once('../Commun/menu.php');

	
if( isset($_POST['menu'] ) ) {
	$_SESSION['menu_rla'] = $_POST['menu'];
}
else {
	$_SESSION['menu_rla'] = isset($_SESSION['menu_rla']) ? $_SESSION['menu_rla']: ''; 
}
$st_check_revele		= $_SESSION['menu_rla'] == 'releve' 	? 'checked' : '';
$st_check_pas_releve	= $_SESSION['menu_rla'] == 'pas_releve'	? 'checked' : '';
$st_check_publi_pap		= $_SESSION['menu_rla'] == 'publi_pap'	? 'checked' : '';
$st_check_publi_num		= $_SESSION['menu_rla'] == 'publi_num'	? 'checked' : '';
$st_check_photo			= $_SESSION['menu_rla'] == 'photo'		? 'checked' : '';
$st_check_pas_photo		= $_SESSION['menu_rla'] == 'pas_photo'	? 'checked' : '';
$st_check_repert		= $_SESSION['menu_rla'] == 'repert'		? 'checked' : '';
$st_check_sans			= $_SESSION['menu_rla'] == 'sans'		? 'checked' : '';
$st_check_non_comm		= $_SESSION['menu_rla'] == 'non_comm'	? 'checked' : '';
$st_check_program		= $_SESSION['menu_rla'] == 'program'	? 'checked' : '';
$st_check_publication	= $_SESSION['menu_rla'] == 'publication'	? 'checked' : '';
$st_check_complete		= $_SESSION['menu_rla'] == 'complete'	? 'checked' : '';

$st_titre['releve']		= "Liste des liasses ayant &eacute;t&eacute; relev&eacute;es";
$st_titre['pas_releve']	= "Liste des liasses n'ayant pas &eacute;t&eacute; relev&eacute;es";
$st_titre['publi_pap']	= "Liste des liasses ayant fait l'objet d'une publication papier";
$st_titre['publi_num']	= "Liste des liasses ayant fait l'objet d'une publication num&eacute;rique";
$st_titre['photo']		= "Liste des liasses ayant &eacute;t&eacute; photographi&eacute;es";
$st_titre['pas_photo']	= "Liste des liasses n'ayant pas &eacute;t&eacute; photographi&eacute;es";
$st_titre['repert']		= "Liste des r&eacute;pertoires";
$st_titre['sans']		= "Liste des liasses sans notaire, dates ou lieu";
$st_titre['non_comm']	= "Liste des liasses non communicables";
$st_titre['program']	= "Liste des programmations";
$st_titre['publication']	= "Liste des publications papier";
$st_titre['complete']	= "Liste compl&egrave;te";

print("<div class=TITRE>Recherches avanc&eacute;es sur les liasses</div>");
print("<form id='choixmenu' action=\"".$_SERVER['PHP_SELF']."\" method='post'>");
print("<table border='0' align='center'><tr><td><div style='text-align:left'>");
print("<input type='radio' name='menu' value='releve' ".$st_check_revele." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['releve']."<br>");
print("<input type='radio' name='menu' value='pas_releve' ".$st_check_pas_releve." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['pas_releve']."<br>");
print("<input type='radio' name='menu' value='publi_pap' ".$st_check_publi_pap." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['publi_pap']."<br>");
print("<input type='radio' name='menu' value='publi_num' ".$st_check_publi_num." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['publi_num']."<br>");
print("<input type='radio' name='menu' value='photo' ".$st_check_photo." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['photo']."<br>");
print("<input type='radio' name='menu' value='pas_photo' ".$st_check_pas_photo." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['pas_photo']."<br>");
print("<input type='radio' name='menu' value='repert' ".$st_check_repert." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['repert']."<br>");
print("<input type='radio' name='menu' value='sans' ".$st_check_sans." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['sans']."<br>");
print("<input type='radio' name='menu' value='non_comm' ".$st_check_non_comm." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['non_comm']."<br>");
print("<input type='radio' name='menu' value='program' ".$st_check_program." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['program']."<br>");
print("<input type='radio' name='menu' value='publication' ".$st_check_publication." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['publication']."<br>");
print("<input type='radio' name='menu' value='complete' ".$st_check_complete." onclick='document.getElementById(\"choixmenu\").submit()'>".$st_titre['complete']."<br>");
print("</td></tr></table></div>");
print("</form>");

$a_serie_liasse = $connexionBD->liste_valeur_par_clef("SELECT serie_liasse, nom FROM serie_liasse order by ordre");
$a_serie_liasse[0] = '';

$a_forme_liasse = $connexionBD->liste_valeur_par_clef("SELECT idf, nom FROM forme_liasse order by nom");
$a_forme_liasse[0] = '';

$a_communes = $connexionBD->liste_valeur_par_clef("SELECT idf, nom FROM commune_acte order by nom");
$a_communes[0] = 'Toutes';

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

$gst_cote_debut				= '';
$gst_cote_fin				= '';
$gst_repertoire				= 'non';
$gst_sans_notaire			= 'non';
$gst_sans_periode			= 'non';
$gst_sans_lieu				= 'non';
$gst_non_comm				= 'non';
$gst_releve					= 'non';
$gst_photo					= 'non';
$gst_pas_photo				= 'non';
$gst_pas_publi_num			= 'non';
$gst_publi_pap				= 'non';
$gst_pas_publi_pap			= 'non';
$gst_av_1793				= 'non';
$gst_sans_photographe		= 'non';
$gst_sans_date_photo		= 'non';
$gst_avec_commentaire		= 'non';
$gi_commune					= 0;
$gi_forme_liasse			= 0;

if( $_SESSION['menu_rla'] != '' ){
	print("<div class=SOUSTITRE>".$st_titre[$_SESSION['menu_rla']]."</div>");
	print("<form id='critere' action=\"".$_SERVER['PHP_SELF']."\" method='post'>");
	print("<div><input type=hidden name=menu value='".$_SESSION['menu_rla']."'</div>");  
	if( $_SESSION['menu_rla'] != 'publication' ){
		print('<div style="text-align:center">');
		print('<br>S&eacute;rie de liasses : ');
		print("<select name='serie_liasse' id='serie_liasse' onChange='window.location=\"".$_SERVER['PHP_SELF']."?serie_liasse=\"+this.value;'>".
				chaine_select_options($st_serie_liasse,$a_serie_liasse)."</select>");
		print('</div><br>');
	}
	switch ($_SESSION['menu_rla']) {
		case 'releve' :
			print('<div style="text-align:center">');
			print("Premi&egrave;re cote: <input type='text' name='cote_debut' size='5' MAXLENGTH='5' value='".$gst_cote_debut."' onKeyPress='SoumissionAction(0,event)'>");
			print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			print("Derni&egrave;re cote: <input type='text' name='cote_fin' size='5' MAXLENGTH='5' value='".$gst_cote_fin."' onKeyPress='SoumissionAction(0,event)'> ");
			print('</div><br>');
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forme de liasses : ');
			print("<select name='forme_liasse' id='forme_liasse'>".
					chaine_select_options($gi_forme_liasse,$a_forme_liasse)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_non_comm=='non')				print('<input type="checkbox" name="non_comm" value="oui" unchecked >');
			else									print('<input type="checkbox" name="non_comm" value="oui" checked>');
			print(' Restreindre aux liasses non communicables');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_av_1793=='non')				print('<input type="checkbox" name="av_1793" value="oui" unchecked >');
			else									print('<input type="checkbox" name="av_1793" value="oui" checked>');
			print(' Restreindre aux liasses ant&eacute;rieures &agrave; 1793</div>');
			print('<div style="text-align:center">');
			if ($gst_photo=='non')				    print("<input type='checkbox' name='photo' value='oui' unchecked >");
			else									print("<input type='checkbox' name='photo' value='oui' checked>");
			print(' Restreindre aux liasses photographi&eacute;es');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_pas_photo=='non')				print("<input type='checkbox' name='pas_photo' value='oui' unchecked >");
			else									print("<input type='checkbox' name='pas_photo' value='oui' checked>");
			print(' Restreindre aux liasses non photographi&eacute;es</div><br>');
			break;
		case 'pas_releve' :
			print('<div style="text-align:center">');
			print("Premi&egrave;re cote: <input type='text' name='cote_debut' size='5' MAXLENGTH='5' value='".$gst_cote_debut."' onKeyPress='SoumissionAction(0,event)'>");
			print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			print("Derni&egrave;re cote: <input type='text' name='cote_fin' size='5' MAXLENGTH='5' value='".$gst_cote_fin."' onKeyPress='SoumissionAction(0,event)'> ");
			print('</div><br>');
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forme de liasses : ');
			print("<select name='forme_liasse' id='forme_liasse'>".
					chaine_select_options($gi_forme_liasse,$a_forme_liasse)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_non_comm=='non')				print('<input type="checkbox" name="non_comm" value="oui" unchecked >');
			else									print('<input type="checkbox" name="non_comm" value="oui" checked>');
			print(' Restreindre aux liasses non communicables');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_av_1793=='non')				print('<input type="checkbox" name="av_1793" value="oui" unchecked >');
			else									print('<input type="checkbox" name="av_1793" value="oui" checked>');
			print(' Restreindre aux liasses ant&eacute;rieures &agrave; 1793</div>');
			break;
		case 'publi_pap' :
			print('<div style="text-align:center">');
			print("Premi&egrave;re cote: <input type='text' name='cote_debut' size='5' MAXLENGTH='5' value='".$gst_cote_debut."' onKeyPress='SoumissionAction(0,event)'>");
			print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			print("Derni&egrave;re cote: <input type='text' name='cote_fin' size='5' MAXLENGTH='5' value='".$gst_cote_fin."' onKeyPress='SoumissionAction(0,event)'> ");
			print('</div><br>');
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_pas_publi_num=='non')			print("<input type='checkbox' name='pas_publi_num' value='oui' unchecked >");
			else									print("<input type='checkbox' name='pas_publi_num' value='oui' checked>");
			print(' Restreindre aux liasses non publi&eacute;es num&eacute;rique</div><br>');
			break;
		case 'publi_num' :
			print('<div style="text-align:center">');
			print("Premi&egrave;re cote: <input type='text' name='cote_debut' size='5' MAXLENGTH='5' value='".$gst_cote_debut."' onKeyPress='SoumissionAction(0,event)'>");
			print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			print("Derni&egrave;re cote: <input type='text' name='cote_fin' size='5' MAXLENGTH='5' value='".$gst_cote_fin."' onKeyPress='SoumissionAction(0,event)'> ");
			print('</div><br>');
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_publi_pap=='non')				print("<input type='checkbox' name='publi_pap' value='oui' unchecked >");
			else									print("<input type='checkbox' name='publi_pap' value='oui' checked>");
			print(' Restreindre aux liasses publi&eacute;es papier');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_pas_publi_pap=='non')			print("<input type='checkbox' name='pas_publi_pap' value='oui' unchecked >");
			else									print("<input type='checkbox' name='pas_publi_pap' value='oui' checked>");
			print(' Restreindre aux liasses non publi&eacute;es papier</div><br>');
			break;
		case 'photo' :
			print('<div style="text-align:center">');
			print("Premi&egrave;re cote: <input type='text' name='cote_debut' size='5' MAXLENGTH='5' value='".$gst_cote_debut."' onKeyPress='SoumissionAction(0,event)'>");
			print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
			print("Derni&egrave;re cote: <input type='text' name='cote_fin' size='5' MAXLENGTH='5' value='".$gst_cote_fin."' onKeyPress='SoumissionAction(0,event)'> ");
			print('</div><br>');
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forme de liasses : ');
			print("<select name='forme_liasse' id='forme_liasse'>".
					chaine_select_options($gi_forme_liasse,$a_forme_liasse)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_non_comm=='non')				print('<input type="checkbox" name="non_comm" value="oui" unchecked >');
			else									print('<input type="checkbox" name="non_comm" value="oui" checked>');
			print(' Restreindre aux liasses non communicables</div>');
			print('<div style="text-align:center">');
			if ($gst_pas_publi_pap=='non')			print("<input type='checkbox' name='pas_publi_pap' value='oui' unchecked >");
			else									print("<input type='checkbox' name='pas_publi_pap' value='oui' checked>");
			print(' Restreindre aux liasses non publi&eacute;es papier');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_pas_publi_num=='non')			print("<input type='checkbox' name='pas_publi_num' value='oui' unchecked >");
			else									print("<input type='checkbox' name='pas_publi_num' value='oui' checked>");
			print(' Restreindre aux liasses non publi&eacute;es num&eacute;rique</div>');
			print('<div style="text-align:center">');
			if ($gst_sans_photographe=='non')		print("<input type='checkbox' name='sans_photographe' value='oui' unchecked >");
			else									print("<input type='checkbox' name='sans_photographe' value='oui' checked>");
			print(' Restreindre aux liasses sans photographe');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_sans_date_photo=='non')		print("<input type='checkbox' name='sans_date_photo' value='oui' unchecked >");
			else									print("<input type='checkbox' name='sans_date_photo' value='oui' checked>");
			print(' Restreindre aux liasses sans date de photo</div><br>');
			print('<div style="text-align:center">');
			if ($gst_avec_commentaire=='non')		print("<input type='checkbox' name='avec_commentaire' value='oui' unchecked >");
			else									print("<input type='checkbox' name='avec_commentaire' value='oui' checked>");
			print(' Liste avec commentaires</div><br>');
			break;
		case 'pas_photo' :
			print('<div style="text-align:center">');
			print("Premi&egrave;re cote: <input type='text' name='cote_debut' size='5' MAXLENGTH='5' value='".$gst_cote_debut."' onKeyPress='SoumissionAction(0,event)'>");
			print("Derni&egrave;re cote: <input type='text' name='cote_fin' size='5' MAXLENGTH='5' value='".$gst_cote_fin."' onKeyPress='SoumissionAction(0,event)'> ");
			print('</div><br>');
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forme de liasses : ');
			print("<select name='forme_liasse' id='forme_liasse'>".
					chaine_select_options($gi_forme_liasse,$a_forme_liasse)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_non_comm=='non')				print('<input type="checkbox" name="non_comm" value="oui" unchecked >');
			else									print('<input type="checkbox" name="non_comm" value="oui" checked>');
			print(' Restreindre aux liasses non communicables');
			print('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
			if ($gst_av_1793=='non')				print('<input type="checkbox" name="av_1793" value="oui" unchecked >');
			else									print('<input type="checkbox" name="av_1793" value="oui" checked>');
			print(' Restreindre aux liasses ant&eacute;rieures &agrave; 1793</div>');
			break;
		case 'repert' :
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_av_1793=='non')				print('<input type="checkbox" name="av_1793" value="oui" unchecked >');
			else									print('<input type="checkbox" name="av_1793" value="oui" checked>');
			print(' Restreindre aux liasses ant&eacute;rieures &agrave; 1793</div>');
			break;
		case 'sans' :
			print('<div style="text-align:center">');
			if ($gst_sans_notaire=='non')			print('   <input type="checkbox" name="sans_notaire" value="oui" unchecked >');
			else									print('   <input type="checkbox" name="sans_notaire" value="oui" checked>');
			print(' Liasses sans notaire<br><br>');
			if ($gst_sans_periode=='non')			print('   <input type="checkbox" name="sans_periode" value="oui" unchecked >');
			else									print('   <input type="checkbox" name="sans_periode" value="oui" checked>');
			print(' Liasses sans date<br><br>');
			if ($gst_sans_lieu=='non')			print('   <input type="checkbox" name="sans_lieu" value="oui" unchecked >');
			else									print('   <input type="checkbox" name="sans_lieu" value="oui" checked>');
			print(' Liasses sans lieu</div>');
			break;
		case 'non_comm' :
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_av_1793=='non')				print('<input type="checkbox" name="av_1793" value="oui" unchecked >');
			else									print('<input type="checkbox" name="av_1793" value="oui" checked>');
			print(' Restreindre aux liasses ant&eacute;rieures &agrave; 1793</div>');
			break;
		case 'program' :
			print('<div style="text-align:center">');
			print('Commune : ');
			print("<select name='commune' id='commune'>".
				chaine_select_options($gi_commune,$a_communes)."</select>");
			print('</div><br>');
			print('<div style="text-align:center">');
			if ($gst_releve=='non')					print('   <input type=checkbox name="releve" value="oui" unchecked >');
			else									print('   <input type=checkbox name="releve" value="oui" checked>');
			print(' Uniquement les programmations de relev&eacute;s</div>');
			print('<div style="text-align:center">');
			if ($gst_photo=='non')					print('   <input type=checkbox name="photo" value="oui" unchecked >');
			else									print('   <input type=checkbox name="photo" value="oui" checked>');
			print(' Uniquement les programmations de photographies</div>');
			break;
	}
	print('<div style="text-align:center"><br>');
	print('<input type="button" value="Rechercher" ONCLICK="VerifieChampsRechercheAction(0)">');
	print('<input type="button" value="Effacer tous les Champs"  ONCLICK="RazChampsAction(0)">');
	print('</div> ');
	print("</form>");
}
print('</div></body></html>');
?>