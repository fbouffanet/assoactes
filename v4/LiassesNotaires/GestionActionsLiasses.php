<?php
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_NOTAIRES);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');


print('<!DOCTYPE html>');
print("<head>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='./VerifieChampsGestionActionsLiasse.js' type='text/javascript'></script>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<title>Gestion des actions sur les liasses notariales</title>");
print('</head>');
print('<body> <div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

if (isset($_GET['initpub'])) {
	$gst_m1 = 'MENU_GERER_PUBLI';
}
else {
	$gst_m1 = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
}
$gst_mode = isset($_REQUEST['smode']) ? $_REQUEST['smode'] : $gst_m1 ;

if (isset($_GET['mod'])) {
	if(substr($_GET['mod'],0,3) == 'REL') {
		$gst_mode='MENU_MODIFIER_RELEVE';
		$gi_idf_releve = substr($_GET['mod'], 3,10);
		}
	elseif(substr($_GET['mod'],0,3) == 'PUB') {
		$gst_mode='MENU_MODIFIER_LIEN_PUBLI';
		$gi_idf_lien_publication = substr($_GET['mod'], 3,10);
	}
	elseif(substr($_GET['mod'],0,3) == 'PPA') {
		$gst_mode='MENU_MODIFIER_PUBLI';
		$gi_idf_publication = substr($_GET['mod'], 3,10);
	}
	elseif(substr($_GET['mod'],0,3) == 'PHO') {
		$gst_mode='MENU_MODIFIER_PHOTO';
		$gi_idf_photo = substr($_GET['mod'], 3,10);
	}
	elseif(substr($_GET['mod'],0,3) == 'PRO') {
		$gst_mode='MENU_MODIFIER_PROGRAM';
		$gi_idf_program = substr($_GET['mod'], 3,10);
	}
	else {
		$gst_mode='MENU_GERER';
		$_SESSION['cote_liasse_gal'] = $_GET['mod'];
		list($_SESSION['periodes_gal'], $_SESSION['notaires_gal'])
		=$connexionBD->sql_select_listeUtf8("select libelle_annees, libelle_notaires from liasse where cote_liasse='".$_SESSION['cote_liasse_gal']."'");
	}
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

$a_releveur = $connexionBD->liste_valeur_par_clefUtf8("SELECT idf,concat(nom, ' ', prenom) as nom FROM releveur order by nom");
$a_releveur[0] = 'Inconnu';
$a_couverture_photo = $connexionBD->liste_valeur_par_clefUtf8("SELECT idf, nom FROM couverture_photo order by idf");
$a_couverture_photo[0] = '';
$a_codif_photo = $connexionBD->liste_valeur_par_clefUtf8("SELECT idf, nom FROM codif_photo order by idf");
$a_codif_photo[0] = '';
$a_priorite_program = $connexionBD->liste_valeur_par_clefUtf8("SELECT idf, nom FROM programmation_releve order by idf");
$a_priorite_program[0] = '';
$pa_publication = $connexionBD->liste_valeur_par_clefUtf8("SELECT idf, concat(nom, ', publi&eacute; le ', ".
                                                      "                   case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
                                                      "                        else date_format(date_publication, '%d/%m/%Y') ".
                                                      "                        end, ', ', ".
													  "                   substr(info_complementaires,1,80)) as nom ".
													  "FROM publication_papier order by nom");
$pa_publication[0] = '';

require_once('GestionActionsLiassesFc.php');
switch ($gst_mode) {
	case 'LISTE' : 
		if(isset($_SESSION['cote_liasse_gal'])) {
			unset($_SESSION['cote_liasse_gal']);
		}
		menu_liste($connexionBD); 
		break;
	case 'MENU_GERER' :
		menu_gerer($connexionBD);
		break;
	/** -------------------- releve --------------------- **/
	case 'MENU_MODIFIER_RELEVE' :
		menu_modifier_releve($connexionBD, $gi_idf_releve, $a_releveur);
		break;
	case 'MODIFIER_RELEVE' :     
		$i_idf_releve		= $_POST['idf_releve'];
		$i_idf_releveur		= $_POST['idf_releveur'];
		$st_date_fin_releve	= $_POST['date_fin_releve'];
		$i_publi_num		= empty($_POST['publi_num']) ? 0 : trim($_POST['publi_num']);
		$st_info_compl		= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "update liasse_releve set ".
		              "    idf_releveur=".$i_idf_releveur.", date_fin_releve=str_to_date('".$st_date_fin_releve."', '%d/%m/%Y'), ".
					  "    in_publication_numerique=".$i_publi_num.", info_complementaires='".$st_info_compl."' ".
					  "where idf=".$i_idf_releve."";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'MENU_AJOUTER_RELEVE' : 
		menu_ajouter_releve($connexionBD, $a_releveur);
		break;
	case 'AJOUTER_RELEVE':
		$i_idf_releveur		= $_POST['idf_releveur'];
		$st_date_fin_releve	= $_POST['date_fin_releve'];
		$i_publi_num		= empty($_POST['publi_num']) ? 0 : trim($_POST['publi_num']);
		$st_info_compl		= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "INSERT INTO `liasse_releve`(`cote_liasse`, `idf_releveur`, `date_fin_releve`, ".
		              "            `in_publication_numerique`, `info_complementaires`) ".
					  "VALUES ('".$_SESSION['cote_liasse_gal']."', ".$i_idf_releveur.", str_to_date('".$st_date_fin_releve."', '%d/%m/%Y'), ".
					  "        ".$i_publi_num.", '".$st_info_compl."')";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'SUPPRIMER_RELEVE':
		$a_liste_releves = $_POST['supp'];
		foreach ($a_liste_releves as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$connexionBD->execute_requete("delete from liasse_releve where idf=".$i_idf);
		}
		menu_gerer($connexionBD);
		break;
	case 'MENU_AJOUTER_RELEVEUR' : 
		menu_ajouter_releveur($connexionBD);
		break;
	case 'AJOUTER_RELEVEUR':
		$i_idf_adherent		= $_POST['idf_adherent'];
		list($st_nom, $st_prenom) = $connexionBD->sql_select_listeUtf8("select nom, prenom from adherent where idf=".$i_idf_adherent);
		$st_nom = escape_apostrophe(trim($st_nom));
		$st_prenom = escape_apostrophe(trim($st_prenom));
		//---- modif UTF8
		$st_nom = mb_convert_encoding($st_nom, 'cp1252', 'UTF8');
		$st_prenom = mb_convert_encoding($st_prenom, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "INSERT INTO `releveur`(`idf_adherent`, `nom`, `prenom`) ".
					  "VALUES (".$i_idf_adherent.", '".$st_nom."', '".$st_prenom."')";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	/** -------------------- publication papier --------------------- **/
	case 'MENU_MODIFIER_LIEN_PUBLI' :
		menu_modifier_lien_publication($connexionBD, $gi_idf_lien_publication, $pa_publication);
		break;
	case 'MODIFIER_LIEN_PUBLI' :     
		$i_idf_lien_publication		= $_POST['idf_lien_publi'];
		$i_idf_publication_papier	= $_POST['idf_publication'];
		$st_requete = "update liasse_publication_papier set ".
		              "    idf_publication_papier=".$i_idf_publication_papier." ".
					  "where idf=".$i_idf_lien_publication."";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'MENU_AJOUTER_LIEN_PUBLI' : 
		menu_ajouter_lien_publication($connexionBD, $pa_publication);
		break;
	case 'AJOUTER_LIEN_PUBLI':
		$i_idf_publication_papier	= $_POST['idf_publication'];
		$st_requete = "INSERT INTO `liasse_publication_papier`(`cote_liasse`, `idf_publication_papier`) ".
					  "VALUES ('".$_SESSION['cote_liasse_gal']."', ".$i_idf_publication_papier.")";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'SUPPRIMER_LIEN_PUBLI':
		$a_liste_publis = $_POST['supp'];
		foreach ($a_liste_publis as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$connexionBD->execute_requete("delete from liasse_publication_papier where idf=".$i_idf);
		}
		menu_gerer($connexionBD);
		break;
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
			$a_liasses = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_publication_papier where idf_publication_papier=".$i_idf);
			if (count($a_liasses)==0) {
				$connexionBD->execute_requete("delete from publication_papier where idf=".$i_idf);
			}
			else {
				print("<div align=center>Des liasses sont li&eacute;es &agrave; une des publications s&eacute;lectionn&eacute;es</div><br>");
			} 
		}
		menu_gerer_publication($connexionBD);
		break;
	/** -------------------- photo --------------------- **/
	case 'MENU_MODIFIER_PHOTO' :
		menu_modifier_photo($connexionBD, $gi_idf_photo, $a_releveur, $a_couverture_photo, $a_codif_photo);
		break;
	case 'MODIFIER_PHOTO' :     
		$i_idf_photo				= $_POST['idf_photo'];
		$i_idf_photographe			= $_POST['idf_photographe'];
		$st_date_photo				= $_POST['date_photo'];
		$i_idf_couverture_photo		= empty($_POST['idf_couverture_photo']) ? 0 : trim($_POST['idf_couverture_photo']);
		$i_idf_codif_photo			= empty($_POST['idf_codif_photo']) ? 0 : trim($_POST['idf_codif_photo']);
		$st_info_compl				= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "update liasse_photo set ".
		              "    idf_photographe=".$i_idf_photographe.", date_photo=str_to_date('".$st_date_photo."', '%d/%m/%Y'), ".
					  "    idf_couverture_photo=".$i_idf_couverture_photo.", idf_codif_photo=".$i_idf_codif_photo.", info_complementaires='".$st_info_compl."' ".
					  "where idf=".$i_idf_photo."";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'MENU_AJOUTER_PHOTO' : 
		menu_ajouter_photo($connexionBD, $a_releveur, $a_couverture_photo, $a_codif_photo);
		break;
	case 'AJOUTER_PHOTO':
		$i_idf_photographe			= $_POST['idf_photographe'];
		$st_date_photo				= $_POST['date_photo'];
		$i_idf_couverture_photo		= empty($_POST['idf_couverture_photo']) ? 0 : trim($_POST['idf_couverture_photo']);
		$i_idf_codif_photo			= empty($_POST['idf_codif_photo']) ? 0 : trim($_POST['idf_codif_photo']);
		$st_info_compl				= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "INSERT INTO `liasse_photo`(`cote_liasse`, `idf_photographe`, `date_photo`, ".
		              "            `idf_couverture_photo`, `idf_codif_photo`, `info_complementaires`) ".
					  "VALUES ('".$_SESSION['cote_liasse_gal']."', ".$i_idf_photographe.", str_to_date('".$st_date_photo."', '%d/%m/%Y'), ".
					  "        ".$i_idf_couverture_photo.", ".$i_idf_codif_photo.", '".$st_info_compl."')";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'SUPPRIMER_PHOTO':
		$a_liste_releves = $_POST['supp'];
		foreach ($a_liste_releves as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$connexionBD->execute_requete("delete from liasse_photo where idf=".$i_idf);
		}
		menu_gerer($connexionBD);
		break;
	/** -------------------- programmation --------------------- **/
	case 'MENU_MODIFIER_PROGRAM' :
		menu_modifier_program($connexionBD, $gi_idf_program, $a_releveur, $a_priorite_program);
		break;
	case 'MODIFIER_PROGRAM' :     
		$i_idf_program			= $_POST['idf_program'];
		$i_idf_intervenant		= $_POST['idf_intervenant'];
		$i_idf_priorite			= $_POST['idf_priorite'];
		$st_date_creation		= $_POST['date_creation'];
		$st_date_echeance		= $_POST['date_echeance'];
		$st_date_reelle_fin		= $_POST['date_reelle_fin'];
		$i_program_releve		= empty($_POST['program_releve']) ? 0 : trim($_POST['program_releve']);
		$i_program_photo		= empty($_POST['program_photo']) ? 0 : trim($_POST['program_photo']);
		$st_info_compl			= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "update liasse_programmation set ".
		              "    idf_intervenant=".$i_idf_intervenant.", idf_priorite=".$i_idf_priorite.", ".
					  "    date_creation=str_to_date('".$st_date_creation."', '%d/%m/%Y'), ".
					  "    date_echeance=str_to_date('".$st_date_echeance."', '%d/%m/%Y'), ".
					  "    date_reelle_fin=str_to_date('".$st_date_reelle_fin."', '%d/%m/%Y'), ".
					  "    in_program_releve=".$i_program_releve.", in_program_photo=".$i_program_photo.", info_complementaires='".$st_info_compl."' ".
					  "where idf=".$i_idf_program."";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'MENU_AJOUTER_PROGRAM' : 
		menu_ajouter_program($connexionBD, $a_releveur, $a_priorite_program);
		break;
	case 'AJOUTER_PROGRAM':
		$i_idf_intervenant		= $_POST['idf_intervenant'];
		$i_idf_priorite			= $_POST['idf_priorite'];
		$st_date_creation		= $_POST['date_creation'];
		$st_date_echeance		= $_POST['date_echeance'];
		$st_date_reelle_fin		= $_POST['date_reelle_fin'];
		$i_program_releve		= empty($_POST['program_releve']) ? 0 : trim($_POST['program_releve']);
		$i_program_photo		= empty($_POST['program_photo']) ? 0 : trim($_POST['program_photo']);
		$st_info_compl			= escape_apostrophe(trim($_POST['info_compl']));
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "INSERT INTO `liasse_programmation`(`cote_liasse`, `idf_intervenant`, `idf_priorite`, `date_creation`, `date_echeance`, `date_reelle_fin`, ".
		              "            `in_program_releve`, `in_program_photo`, `info_complementaires`) ".
					  "VALUES ('".$_SESSION['cote_liasse_gal']."', ".$i_idf_intervenant.", ".$i_idf_priorite.", ".
					  "        str_to_date('".$st_date_creation."', '%d/%m/%Y'), ".
					  "        str_to_date('".$st_date_echeance."', '%d/%m/%Y'), ".
					  "        str_to_date('".$st_date_reelle_fin."', '%d/%m/%Y'), ".
					  "        ".$i_program_releve.", ".$i_program_photo.", '".$st_info_compl."')";
		$connexionBD->execute_requete($st_requete);
		menu_gerer($connexionBD);
		break;
	case 'SUPPRIMER_PROGRAM':
		$a_liste_releves = $_POST['supp'];
		foreach ($a_liste_releves as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$connexionBD->execute_requete("delete from liasse_programmation where idf=".$i_idf);
		}
		menu_gerer($connexionBD);
		break;

}  
print('</div></body></html>');
//$connexionBD->ferme(); 
?>