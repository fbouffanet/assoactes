<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_UTILITAIRES);
require_once('../Commun/ConnexionBD.php');


$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;

if ($gst_mode=='COMPARAISON')
{
	$st_fich_dest = "$gst_repertoire_telechargement/adhts_cgcp";
	if (!move_uploaded_file($_FILES['AdhtsCGCP']['tmp_name'],$st_fich_dest)) 
    {
        print("<div class=\"alert alert-danger\">Erreur de t&eacute;l&eacute;chargement :</div>");
        switch($_FILES['AdhtsCGCP']['error'])
        { 
            case 2 : print("Fichier trop gros par rapport &agrave; MAX_FILE_SIZE");break;
            default : print("Erreur inconnue");print_r($_FILES);
        }
        exit;
    }
    if (($pf = fopen($st_fich_dest, "r")) !== FALSE)
	{
		$ga_adht_cgcp=array();
		while ((list($i_idf_adht,$i_annee_inscription,$st_nom_adht,$st_email_adht,$i_annee_cotisation,$st_derniere_cnx) = fgetcsv($pf, 1000, ";")) !== FALSE)
		{
			$ga_adht_cgcp[$i_idf_adht] = array($i_annee_inscription,$st_nom_adht,$st_email_adht,$i_annee_cotisation,$st_derniere_cnx); 
		}
		fclose($pf);
    }
    header("Content-type: text/csv");
    header("Expires: 0");
    header("Pragma: public");
    header("Content-disposition: attachment; filename=\"adhts_cgcp.csv\"");
    $fh = @fopen('php://output', 'w' );
	fputcsv($fh,array('Ann�e inscription CGCP','Adht','Email','Ann�e cotisation CGCP','Derni�re connexion CGCP','Statut AGC','Derni�re connexion AGC'),';'); 
	foreach ($ga_adht_cgcp as $i_idf_adht => $a_adht)
	{
		list($i_annee_inscription_cgcp,$st_nom_adht,$st_email_adht,$i_annee_cotisation,$st_derniere_cnx_cgcp) = $a_adht;
		$st_requete="select statut,date(derniere_connexion) from adherent where email_forum='$st_email_adht' or email_perso='$st_email_adht'";
		$st_statut_agc=  '';
		$st_derniere_cnx_agc='';
		list($st_statut_agc,$st_derniere_cnx_agc)=$connexionBD->sql_select_liste($st_requete);
		fputcsv($fh,array($i_annee_inscription_cgcp,$st_nom_adht,$st_email_adht,$i_annee_cotisation,$st_derniere_cnx_cgcp,$st_statut_agc,$st_derniere_cnx_agc),';');  		
	}	
    fclose($fh);
	unlink($st_fich_dest);
	exit();     
}


/**
 * Affiche le menu de selection
 * @global $gi_max_taille_upload Maximum de la taille  
 */
function affiche_menu() {
   global $gi_max_taille_upload;
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Chargement des adh&eacute;rents du CGCP</div>');
   print('<div class="panel-body">');
   print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print("<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$gi_max_taille_upload\">"); 
   print('<input type="hidden" name="mode" value="COMPARAISON" >');
   print('<div class="custom-file">');
   print('<label for="AdhtsCGCP" class="custom-file-label">Fichier <span class="alert alert-danger">CSV</span> des adh&eacute;rents du CGCP:</label>');
   print('<input name="AdhtsCGCP" id="AdhtsCGCP" type="file" class="custom-file-input">');
   print('</div>');
   print('<div class="form-group col-md-4 col-md-offset-4"><button type="submit" class="btn btn-primary">Compare les adh&eacute;rents communs</button></div>'); 
   print('</form>');
   print('</div></div>');
} 

/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/
print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Comparaison des adherents CGCP</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('</head>');
print('<body>');
print('<div class="container">');
require_once("../Commun/menu.php");

if ($gst_mode='FORMULAIRE' )
	affiche_menu();
print('</div></body>');
print('</html>');
?>