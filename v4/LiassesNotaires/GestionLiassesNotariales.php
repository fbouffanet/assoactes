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
print("<title>Gestion des actions sur les liasses notariales</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/select2.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/select2-bootstrap.min.css' type='text/css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='../js/select2.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script src='./VerifieChampsGestionLiasseNot.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
	
$.fn.select2.defaults.set( "theme", "bootstrap" );
	
$(".js-select-avec-recherche").select2();

jQuery.validator.addMethod(
    "depose_avec_dept",
    function(value, element) {
		var check = false;
		if ($(element).is(':checked'))	{
			check = $('#dept_depose_ad').val()!='';
		}
		return this.optional(element) || check;
    },
    "Le département doit être renseigné pour une liasse déposée aux AD"
);

jQuery.validator.addMethod(
    "dept_avec_depose",
    function(value, element) {
		var check = false;
		if ($(element).val()!='')	{
			check = $('#dept_depose_ad').is(':checked');
		}
		return this.optional(element) || check;
    },
    "La case 'Déposée aux AD' doit être cochée quand le département est renseigné"
);

$("#cre_liasses").validate({
  rules: {
		numero:			{ required: true,	integer:true },
		depose_ad:		{ depose_avec_dept:true },
		dept_depose_ad:	{ dept_avec_depose:true },
		forme_liasse:	{ required: true }	
  },		
  messages: {
		numero:			{ required: "Vous devez saisir le dernier chiffre du numéro de liasse", integer: "Vous devez saisir un chiffre"	},
		depose_ad:		{ depose_avec_dept: "Le département doit être renseigné pour une liasse déposée aux AD"	},
		dept_depose_ad:	{ dept_avec_depose: "La case 'Déposée aux AD' doit être cochée quand le département est renseigné"	},                                                                                              
		forme_liasse:	{ required: "La forme de la liasse est obligatoire"	}
  }
});

$("#maj_liasses").validate({
  rules: {
		"depose_ad":		{	depose_avec_dept:true	},
		"dept_depose_ad":	{	dept_avec_depose:true	},
		"forme_liasse":		{	"integer":true	"minlength":1 }	
  },		
  messages: {
		"depose_ad":		{	integer: "Le département doit être renseigné pour une liasse déposée aux AD"	},
		"dept_depose_ad":	{	annee_min_sans_periode: "La case 'Déposée aux AD' doit être cochée quand le département est renseigné"	},                                                                                              
		"forme_liasse":		{	notaire_sans_notaire: "La forme de la liasse est obligatoire"	}
  }
});

});
</script>
<?php
print('</head>');
print("<body>");
print('<div class="container">');

$gst_m1 = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
$gst_mode = isset($_REQUEST['smode']) ? $_REQUEST['smode'] : $gst_m1 ;
if (isset($_GET['mod'])) {
	if(substr($_GET['mod'],0,3) == 'NOT') {
		$gst_mode='MENU_MODIFIER_NOTAIRE';
		$gi_idf_notaire = substr($_GET['mod'], 3,10);
		}
	elseif(substr($_GET['mod'],0,3) == 'PER') {
		$gst_mode='MENU_MODIFIER_PERIODE';
		$gi_idf_periode = substr($_GET['mod'], 3,10);
	}
	else {
		$gst_mode='MENU_MODIFIER';
		$gst_cote_liasse = $_GET['mod'];
	}
}
if( empty($gst_cote_liasse) ){
	if(isset($_POST['cote_liasse'])){
		$gst_cote_liasse = $_POST['cote_liasse'];
	}
	else if (isset($_REQUEST['cote_liasse'])) {
		$gst_cote_liasse = $_REQUEST['cote_liasse'];
	}
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$a_depts_depose_ad = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM departement order by nom");
$a_depts_depose_ad[''] = '';
$a_formes_liasses = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM forme_liasse order by nom");
$a_mois = array("", "01"=>"01", "02"=>"02", "03"=>"03", "04"=>"04", "05"=>"05", "06"=>"06", 
                    "07"=>"07", "08"=>"08", "09"=>"09", "10"=>"10", "11"=>"11", "12"=>"12",
                    "Vendémiaire"=>"Vendémiaire", "Brumaire"=>"Brumaire", "Frimaire"=>"Frimaire", 
					"Nivôse"=>"Nivôse", "Pluviôse"=>"Pluviôse", "Ventôse"=>"Ventôse",
                    "Germinal"=>"Germinal", "Floréal"=>"Floréal", "Prairial"=>"Prairial", 
					"Messidor"=>"Messidor", "Thermidor"=>"Thermidor", "Fructidor"=>"Fructidor");
$a_communes = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte order by nom");
$a_communes[0] = '';

$a_serie_liasse = $connexionBD->liste_valeur_par_clef("SELECT serie_liasse, nom FROM serie_liasse order by ordre");
$a_serie_liasse[0] = '';


require_once('GestionLiassesNotarialesFc.php');
require_once('GestionLiassesNotarialesFcPeriodes.php');
require_once('GestionLiassesNotarialesFcNotaires.php');

switch ($gst_mode) {
	case 'LISTE' : 
		menu_liste($connexionBD); 
		break;
	case 'MENU_MODIFIER' :
		menu_modifier($connexionBD, $gst_cote_liasse, $a_depts_depose_ad, $a_formes_liasses);
		break;
	case 'MODIFIER' :     
		$st_info_compl = escape_apostrophe(trim($_POST['info_compl']));
		$st_in_liasse_depose_AD = empty($_POST['depose_ad']) ? 0: $_POST['depose_ad'];
		$st_idf_dept_depose_AD = empty($_POST['dept_depose_ad']) ? null: $_POST['dept_depose_ad'];
		$st_in_liasse_consultable = empty($_POST['liasse_consult']) ? 0: $_POST['liasse_consult'];
		$i_idf_forme_liasse = $_POST['forme_liasse'];
		//---- modif UTF8
		$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "update liasse set ".
					  "in_liasse_depose_AD='$st_in_liasse_depose_AD', ".
					  "idf_dept_depose_AD='$st_idf_dept_depose_AD', in_liasse_consultable='$st_in_liasse_consultable', ".
					  "idf_forme_liasse='$i_idf_forme_liasse', info_complementaires='$st_info_compl' ".
					  "where cote_liasse='".$gst_cote_liasse."'";
		$connexionBD->execute_requete($st_requete);
		menu_liste($connexionBD);  
		break;
	case 'MENU_AJOUTER' : 
		menu_ajouter($connexionBD, $a_depts_depose_ad, $a_formes_liasses);
		break;
	case 'AJOUTER' :    
		$st_numero = $_POST['numero'];
		$st_init_dixm = $_SESSION['init_dixm'] == 'z' ? '0' : $_SESSION['init_dixm'];
		$st_init_mill = $_SESSION['init_mill'] == 'z' ? '0' : $_SESSION['init_mill'];
		$st_init_cent = $_SESSION['init_cent'] == 'z' ? '0' : $_SESSION['init_cent'];
		$st_init_dix  = $_SESSION['init_dix'] == 'z' ? '0' : $_SESSION['init_dix'];
		$st_cote = $_SESSION['serie_liasse']."-".$st_init_dixm.$st_init_mill.$st_init_cent.$st_init_dix.$st_numero;
		$a_liasse = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse where cote_liasse='".$st_cote."'");
		if( count($a_liasse)!=0 ) {
			print("<div align='center' class='IMPORTANT'>La liasse ".$st_cote." existe d&eacute;j&agrave;. Ajout impossible.</div><br>");
		}
		else {
			$st_type_serie = substr($_SESSION['serie_liasse'], 1, 1);
			$st_info_compl = escape_apostrophe(trim($_POST['info_compl']));
			$st_in_liasse_depose_AD = empty($_POST['depose_ad']) ? 0: $_POST['depose_ad'];
			$st_idf_dept_depose_AD = empty($_POST['dept_depose_ad']) ? 0: $_POST['dept_depose_ad'];
			$st_in_liasse_consultable = empty($_POST['liasse_consult']) ? 0: $_POST['liasse_consult'];
			$i_idf_forme_liasse = $_POST['forme_liasse'];
			//---- modif UTF8
			$st_type_serie = mb_convert_encoding($st_type_serie, 'cp1252', 'UTF8');
			$st_info_compl = mb_convert_encoding($st_info_compl, 'cp1252', 'UTF8');
			$st_in_liasse_depose_AD = mb_convert_encoding($st_in_liasse_depose_AD, 'cp1252', 'UTF8');
			$st_idf_dept_depose_AD = mb_convert_encoding($st_idf_dept_depose_AD, 'cp1252', 'UTF8');
			$st_in_liasse_consultable = mb_convert_encoding($st_in_liasse_consultable, 'cp1252', 'UTF8');
			//---- fin modif UTF8
			$st_requete = "insert into liasse (`cote_liasse`, `type_serie`, `in_liasse_depose_AD`, `idf_dept_depose_AD`, `in_liasse_consultable`, ".
						"                    `idf_forme_liasse`, `info_complementaires` ) ".
						"VALUES ('".$st_cote."', '".$st_type_serie."', ".$st_in_liasse_depose_AD.", ".$st_idf_dept_depose_AD.", ".$st_in_liasse_consultable.", ".
									$i_idf_forme_liasse.", '".$st_info_compl."')";
			$connexionBD->execute_requete($st_requete);
		}
		menu_liste($connexionBD);  
		break;
	case 'SUPPRIMER':
		$a_liste_liasses = $_POST['supp'];
		foreach ($a_liste_liasses as $st_cote_liasse) {
			$a_liasse_notaire = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_notaire where cote_liasse='".$st_cote_liasse."'");
			$a_liasse_dates = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_dates where cote_liasse='".$st_cote_liasse."'");
			$a_liasse_photo = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_photo where cote_liasse='".$st_cote_liasse."'");
			$a_liasse_programmation = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_programmation where cote_liasse='".$st_cote_liasse."'");
			$a_liasse_publication_papier = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_publication_papier where cote_liasse='".$st_cote_liasse."'");
			$a_liasse_releve = $connexionBD->sql_select_multipleUtf8("select cote_liasse from liasse_releve where cote_liasse='".$st_cote_liasse."'");
			if( count($a_liasse_notaire)==0 && count($a_liasse_dates)==0 && count($a_liasse_photo)==0 && 
			    count($a_liasse_programmation)==0 && count($a_liasse_publication_papier)==0 && count($a_liasse_releve)==0 ) {
				$connexionBD->execute_requete("delete from liasse where cote_liasse='".$st_cote_liasse."'");
			}
			else {
				print("<div align='center' class='IMPORTANT'>Toutes les informations associ&eacute;es &agrave; la liasse ".$st_cote_liasse.
				      " doivent &ecirc;tre supprim&eacute;es auparavant</div><br>");
			} 
		}
		menu_liste($connexionBD);
		break;
	// gestion des périodes
	case 'LISTE_PERIODE' : 
		menu_liste_periode($connexionBD, $gst_cote_liasse); 
		break;
	case 'MENU_MODIFIER_PERIODE' :
		list($gst_cote_liasse) 
		= $connexionBD->sql_select_listeUtf8("select cote_liasse from liasse_dates where idf = " . $gi_idf_periode);
		menu_modifier_periode($connexionBD, $gst_cote_liasse, $gi_idf_periode, $a_mois);
		break;
	case 'MODIFIER_PERIODE' :     
		$st_cote_liasse	= $_POST['cote_liasse'];
		$i_idf_periode	= $_POST['idf_periode'];
		$st_annee_debut = $_POST['annee_debut'];
		$st_mois_debut = $a_mois[$_POST['mois_debut']];
		$st_annee_fin = $_POST['annee_fin'];
		$st_mois_fin = $a_mois[$_POST['mois_fin']];
		//---- modif UTF8
		$st_cote_liasse = mb_convert_encoding($st_cote_liasse, 'cp1252', 'UTF8');
		$st_annee_debut = mb_convert_encoding($st_annee_debut, 'cp1252', 'UTF8');
		$st_mois_debut = mb_convert_encoding($st_mois_debut, 'cp1252', 'UTF8');
		$st_annee_fin = mb_convert_encoding($st_annee_fin, 'cp1252', 'UTF8');
		$st_mois_fin = mb_convert_encoding($st_mois_fin, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_date_debut = calculer_date_debut( $connexionBD, $st_annee_debut, $st_mois_debut, $a_mois);
		$st_date_fin = calculer_date_fin( $connexionBD, $st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin, $a_mois);
		$st_libelle = calculer_libelle_periode( $st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin);
		$st_requete = "update liasse_dates set ".
		              "    annee_debut_periode='".$st_annee_debut."', mois_debut_periode='".$st_mois_debut."', ".
					  "    annee_fin_periode='".$st_annee_fin."',mois_fin_periode='".$st_mois_fin."', ".
					  "    date_debut_periode=str_to_date('".$st_date_debut."', '%Y-%m-%d'), ".
					  "    date_fin_periode=str_to_date('".$st_date_fin."', '%Y-%m-%d'), ".
					  "    libelle_periode='".$st_libelle."' ".
					  "where idf=".$i_idf_periode."";
		$connexionBD->execute_requete($st_requete);
		maj_libelle_periode($connexionBD, $st_cote_liasse);
		menu_liste_periode($connexionBD, $st_cote_liasse, $a_mois);  
		break;
	case 'MENU_AJOUTER_PERIODE' : 
		menu_ajouter_periode($gst_cote_liasse, $a_mois);
		break;
	case 'AJOUTER_PERIODE':
		$st_cote_liasse	= $_POST['cote_liasse'];
		$st_annee_debut = $_POST['annee_debut'];
		$st_mois_debut = $_POST['mois_debut'];
		$st_annee_fin = $_POST['annee_fin'];
		$st_mois_fin = $_POST['mois_fin'];
		//---- modif UTF8
		$st_cote_liasse = mb_convert_encoding($st_cote_liasse, 'cp1252', 'UTF8');
		$st_annee_debut = mb_convert_encoding($st_annee_debut, 'cp1252', 'UTF8');
		$st_mois_debut = mb_convert_encoding($st_mois_debut, 'cp1252', 'UTF8');
		$st_annee_fin = mb_convert_encoding($st_annee_fin, 'cp1252', 'UTF8');
		$st_mois_fin = mb_convert_encoding($st_mois_fin, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_date_debut = calculer_date_debut( $connexionBD, $st_annee_debut, $st_mois_debut);
		$st_date_fin = calculer_date_fin( $connexionBD, $st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin);
		$st_libelle = calculer_libelle_periode( $st_annee_debut, $st_mois_debut, $st_annee_fin, $st_mois_fin);
		$st_requete = "INSERT INTO `liasse_dates`(`cote_liasse`, `annee_debut_periode`, `mois_debut_periode`, ".
		              "            `annee_fin_periode`, `mois_fin_periode`, `date_debut_periode`, ".
					  "            `date_fin_periode`, `libelle_periode`) ".
					  "VALUES ('".$st_cote_liasse."', '".$st_annee_debut."', '".$st_mois_debut."', ".
					  "        '".$st_annee_fin."', '".$st_mois_fin."', str_to_date('".$st_date_debut."', '%Y-%m-%d'), ".
					  "        str_to_date('".$st_date_fin."', '%Y-%m-%d'), '".$st_libelle."')";
		$connexionBD->execute_requete($st_requete);
		maj_libelle_periode($connexionBD, $st_cote_liasse);
		menu_liste_periode($connexionBD, $st_cote_liasse, $a_mois);  
		break;
	case 'SUPPRIMER_PERIODE':
		$st_cote_liasse	= $_POST['cote_liasse'];
		$a_liste_periodes = $_POST['supp'];
		foreach ($a_liste_periodes as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$connexionBD->execute_requete("delete from liasse_dates where idf=".$i_idf);
		}
		maj_libelle_periode($connexionBD, $st_cote_liasse);
		menu_liste_periode($connexionBD, $st_cote_liasse, $a_mois);  
		break;
	// gestion des notaires
	case 'LISTE_NOTAIRE' : 
		menu_liste_notaire($connexionBD, $gst_cote_liasse, $a_communes); 
		break;
	case 'MENU_MODIFIER_NOTAIRE' :
		list($gst_cote_liasse) 
		= $connexionBD->sql_select_listeUtf8("select cote_liasse from liasse_notaire where idf = " . $gi_idf_notaire);
		menu_modifier_notaire($connexionBD, $gst_cote_liasse, $gi_idf_notaire, $a_communes);
		break;
	case 'MODIFIER_NOTAIRE' :     
		$st_cote_liasse	= $_POST['cote_liasse'];
		$i_idf_notaire	= $_POST['idf_notaire'];
		$st_nom			= strtoupper(escape_apostrophe(trim($_POST['nom'])));
		$st_prenom		= ucwords(empty($_POST['prenom']) ? '': escape_apostrophe(trim($_POST['prenom'])));
		$st_commentaire = empty($_POST['commentaire']) ? '': escape_apostrophe(trim($_POST['commentaire']));
		$st_lieu		= ucwords(empty($_POST['lieu']) ? '': escape_apostrophe(trim($_POST['lieu'])));
		$i_idf_commune	= $_POST['idf_commune'];
		//---- modif UTF8
		$st_cote_liasse = mb_convert_encoding($st_cote_liasse, 'cp1252', 'UTF8');
		$st_nom = mb_convert_encoding($st_nom, 'cp1252', 'UTF8');
		$st_prenom = mb_convert_encoding($st_prenom, 'cp1252', 'UTF8');
		$st_commentaire = mb_convert_encoding($st_commentaire, 'cp1252', 'UTF8');
		$st_lieu = mb_convert_encoding($st_lieu, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "update liasse_notaire set ".
		              "nom_notaire='$st_nom', prenom_notaire='$st_prenom', commentaire='$st_commentaire', ".
					  "libelle_lieu='$st_lieu',idf_commune_etude=$i_idf_commune ".
					  "where idf=$i_idf_notaire";
		$connexionBD->execute_requete($st_requete);
		maj_libelle_notaire($connexionBD, $st_cote_liasse);
		menu_liste_notaire($connexionBD, $st_cote_liasse, $a_communes);  
		break;
	case 'MENU_AJOUTER_NOTAIRE' : 
		menu_ajouter_notaire($gst_cote_liasse, $a_communes);
		break;
	case 'AJOUTER_NOTAIRE':
		$st_cote_liasse	= $_POST['cote_liasse'];
		$st_nom			= strtoupper(escape_apostrophe(trim($_POST['nom'])));
		$st_prenom		= ucwords(empty($_POST['prenom']) ? '': escape_apostrophe(trim($_POST['prenom'])));
		$st_commentaire = empty($_POST['commentaire']) ? '': escape_apostrophe(trim($_POST['commentaire']));
		$st_lieu		= ucwords(empty($_POST['lieu']) ? '': escape_apostrophe(trim($_POST['lieu'])));
		$i_idf_commune	= $_POST['idf_commune'];
		//---- modif UTF8
		$st_cote_liasse = mb_convert_encoding($st_cote_liasse, 'cp1252', 'UTF8');
		$st_nom = mb_convert_encoding($st_nom, 'cp1252', 'UTF8');
		$st_prenom = mb_convert_encoding($st_prenom, 'cp1252', 'UTF8');
		$st_commentaire = mb_convert_encoding($st_commentaire, 'cp1252', 'UTF8');
		$st_lieu = mb_convert_encoding($st_lieu, 'cp1252', 'UTF8');
		//---- fin modif UTF8
		$st_requete = "INSERT INTO `liasse_notaire`(`cote_liasse`, `nom_notaire`, `prenom_notaire`, ".
		              "            `commentaire`, `libelle_lieu`, `idf_commune_etude`) ".
					  "VALUES ('".$st_cote_liasse."', '".$st_nom."', '".$st_prenom."', '".$st_commentaire."', ".
					  "        '".$st_lieu."', ".$i_idf_commune.")";
		$connexionBD->execute_requete($st_requete);
		maj_libelle_notaire($connexionBD, $st_cote_liasse);
		menu_liste_notaire($connexionBD, $st_cote_liasse, $a_communes);  
		break;
	case 'SUPPRIMER_NOTAIRE':
		$st_cote_liasse	= $_POST['cote_liasse'];
		$a_liste_notaires = $_POST['supp'];
		foreach ($a_liste_notaires as $st_idf) {
			$i_idf=substr($st_idf, 3, 6);
			$connexionBD->execute_requete("delete from liasse_notaire where idf=$i_idf");
		}
		maj_libelle_notaire($connexionBD, $st_cote_liasse);
		menu_liste_notaire($connexionBD, $st_cote_liasse, $a_communes);  
		break;
}  
print('</div></body></html>');
?>