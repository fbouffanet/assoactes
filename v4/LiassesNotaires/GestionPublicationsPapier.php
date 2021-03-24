<?php
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_NOTAIRES);
require_once '../Commun/ConnexionBDutf8.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');


print('<!DOCTYPE html>');
print("<head>");
print("<title>Gestion des publications papier de liasses notiariales</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script src='./VerifieChampsGestionActionsLiasse.js' type='text/javascript'></script>");
print('</head>');
print("<body>");
print('<div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

if (isset($_GET['initpub'])) {
	$gst_m1 = 'MENU_GERER_PUBLI';
}
else {
	$gst_m1 = empty($_POST['mode']) ? 'MENU_GERER_PUBLI': $_POST['mode'] ;
}
$gst_mode = isset($_REQUEST['smode']) ? $_REQUEST['smode'] : $gst_m1 ;

if (isset($_GET['mod'])) {
	if(substr($_GET['mod'],0,3) == 'PPA') {
		$gst_mode='MENU_MODIFIER_PUBLI';
		$gi_idf_publication = substr($_GET['mod'], 3,10);
	}
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

$pa_publication = $connexionBD->liste_valeur_par_clef("SELECT idf, concat(nom, ', publi&eacute; le ', ".
                                                      "                   case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
                                                      "                        else date_format(date_publication, '%d/%m/%Y') ".
                                                      "                        end, ', ', ".
													  "                   info_complementaires) as nom ".
													  "FROM publication_papier order by nom");
$pa_publication[0] = '';

require_once('GestionPublicationsPapierFc.php');
switch ($gst_mode) {
	/** -------------------- publication papier --------------------- **/
	case 'MENU_GERER_PUBLI' :
		menu_gerer_publication($connexionBD);
		break;
	case 'MENU_MODIFIER_PUBLI' :
		menu_modifier_publication($connexionBD, $gi_idf_publication);
		break;
	case 'MODIFIER_PUBLI' :     
		$i_idf_publication		= $_POST['idf_publication'];
		$st_nom					= escape_apostrophe(trim($_POST['titre']));;
		$st_date_publication	= $_POST['date_publication'];
		$st_info_compl			= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_nom = mb_convert_encoding($st_nom, 'cp1252', 'UTF8');
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "update publication_papier set ".
		              "    nom='".$st_nom."',  ".
		              "    date_publication=str_to_date('".$st_date_publication."', '%d/%m/%Y'), ".
					  "    info_complementaires='".$st_info_compl."' ".
					  "where idf=".$i_idf_publication."";
		$connexionBD->execute_requete($st_requete);
		menu_gerer_publication($connexionBD);
		break;
	case 'MENU_AJOUTER_PUBLI' : 
		menu_ajouter_publication($connexionBD);
		break;
	case 'AJOUTER_PUBLI':
		$st_nom					= escape_apostrophe(trim($_POST['titre']));;
		$st_date_publication	= $_POST['date_publication'];
		$st_info_compl			= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_nom = mb_convert_encoding($st_nom, 'cp1252', 'UTF8');
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "INSERT INTO `publication_papier`(`nom`, `date_publication`, `info_complementaires`) ".
					  "VALUES ('".$st_nom."', str_to_date('".$st_date_publication."', '%d/%m/%Y'), '".$st_info_compl."')";
		$connexionBD->execute_requete($st_requete);
		menu_gerer_publication($connexionBD);
		break;
	case 'SUPPRIMER_PUBLI':
		$a_liste_publis = $_POST['supp'];
		foreach ($a_liste_publis as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$a_liasses = $connexionBD->sql_select_multiple("select cote_liasse from liasse_publication_papier where idf_publication_papier=".$i_idf);
			if (count($a_liasses)==0) {
				$connexionBD->execute_requete("delete from publication_papier where idf=".$i_idf);
			}
			else {
				print("<div align=center>Des liasses sont li&eacute;es &agrave; une des publications s&eacute;lectionn&eacute;es</div><br>");
			} 
		}
		menu_gerer_publication($connexionBD);
		break;
}  
print('</div></body></html>');
$connexionBD->ferme(); 
?>