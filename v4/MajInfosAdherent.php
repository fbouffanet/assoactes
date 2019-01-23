<?php

require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once('Commun/Identification.php');
require_once('Commun/VerificationDroits.php');
require_once 'Commun/ConnexionBD.php';
require_once('Commun/commun.php');
require_once('Commun/Adherent.php');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
if(!isset($_SESSION['ident']))
   die("<div class=ERREUR> Identifiant non reconnu</div>");
$gst_ident = $_SESSION['ident'];

$connexionBD->initialise_params(array(':ident'=>$gst_ident));
$i_idf_adht_connecte= $connexionBD->sql_select1("select idf from adherent where ident=:ident");

$gst_mode = isset($_POST['mode']) ? $_POST['mode'] : 'MENU_MODIFIER';
$adherent = new Adherent($connexionBD,$i_idf_adht_connecte);

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>\n");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>\n");
print("<script src='Commun/menu.js' type='text/javascript'></script>\n");
print("<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>\n");
print("<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>\n");
print("<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>\n");
print("<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>\n");
print("<script src='Commun/additional-methods.min.js' type='text/javascript'></script>\n");
print("<link href='Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>\n");
print("<script src='js/select2.min.js' type='text/javascript'></script>"); 
?>
<script type='text/javascript'>
$(document).ready(function() {
  $(".js-select-avec-recherche").select2();

  $("#maj_infos_adherent").validate({
  <?php
    print $adherent->regles_validation();
  ?>
 ,
	 submitHandler: function(form) {
			var nom =$("#nom").val().toUpperCase();
      $("#nom").val(nom);
			var prenom=$("#prenom").val();
      prenom= prenom.replace(/^\s+/g,'').replace(/\s+$/g,'');
      prenom=prenom.replace(/\s+/g,'-');
      prenom=prenom.substr(0,1).toUpperCase()+prenom.substr(1); 
			$("#prenom").val(prenom);      
      form.submit();     
	 }     
  });
  $("#maj_photo").validate({
  rules: {
     MaPhoto: {
        required: true,
        extension: "jpg|jpeg"
      }
     },
     messages: {
       MaPhoto: {
			 required: "La photo est obligatoire",
       extension: "L'image doit être au format JPEG"
		  }, 
  }
  });
});
</script>
<?php
print("<title>Base AGC: Vos informations personnelles</title>\n");
print('</head>');

/**
 * Affiche de la table d'édition
 * @param object $pconnexionBD
 * @param object $padherent objet adherent 
 * @param integer $pi_idf_adh identifiant de l'adhérent
 * @global array $ga_droits tableau des droits possibles classés par identifiant
 * @global array $ga_pays liste des pays
 * @global integer $gi_max_taille_upload taille maximale d'upload  
 * @global string $gst_rep_trombinoscope Répertoire du trombinoscope 
 * @global string $gst_url_trombinoscope Url du trombinoscope 
 */ 
function menu_edition_adherent($pconnexionBD,$padherent,$pi_idf_adh)
{
   global $ga_pays,$gi_max_taille_upload,$gst_rep_trombinoscope,$gst_url_trombinoscope;
   print("<div class=gauche_adherent>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" id=\"maj_infos_adherent\" method=\"post\">\n");
   print("<input type=hidden name=mode value=MODIFIER>\n");
   print($padherent->formulaire_infos_personnelles(false));
   print("</div>");
   print("<div class=droite_adherent>");
   print($padherent->formulaire_aides_possibles());
   print($padherent->formulaire_origine());
   if (file_exists("$gst_rep_trombinoscope/$pi_idf_adh.jpg"))
   {
      print("<div class=alignCenter>");
      print("<img src=\"$gst_url_trombinoscope/$pi_idf_adh.jpg\" width=115 height=132 alt=\"MaPhoto\">");
      print("<br></div>");
       
   }
   print("<br><div class=alignCenter><input type=submit value=\"Modifier toutes vos informations\" ><br></div>");
   print('</form>');
   print("<form enctype=\"multipart/form-data\" id=\"maj_photo\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<div align=center><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$gi_max_taille_upload\" >"); 
   print('<input type="hidden" name="mode" value="CHARGEMENT_PHOTO">');
   print('Photo au format JPEG: <input name="MaPhoto" type="file"> ');
   print('<input type="submit" value="Charger la photo"></div>');
   print('</form>');
   
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
   print('<div align=center><input type="submit" value="Supprimer la photo">');
   print('<input type="hidden" name="mode" value="SUPPRIMER_PHOTO"><br></div></div>');
   print('</form>');      
}

/** Affiche le menu de modification d'une commune
 * @param object $pconnexionBD Identifiant de la connexion de base 
 * @param string $pst_ident identifiant de l'utilisateur courant   
 */ 
function menu_modifier($pconnexionBD,$pst_ident)
{
   list($i_idf_adh,$st_statut,$pi_annee,$st_nom,$st_prenom,$st_adr1,$st_adr2,$st_pays,$st_cp,$st_ville,$st_tel,$st_email_forum,$st_email_perso,$st_site,$st_confidentiel,$st_ident_adh,$st_mdp_adh,$st_aide)=$pconnexionBD->sql_select_liste("select adherent.idf,adherent.statut,adherent.annee_cotisation,adherent.nom,prenom, adr1, adr2, pays, cp, ville,tel,email_forum,email_perso,site,confidentiel,ident,mdp,aide from adherent where adherent.ident='$pst_ident'");   
   menu_edition_adherent($pconnexionBD,$pst_ident,$i_idf_adh,$st_statut,$pi_annee,$st_nom,$st_prenom,$st_adr1,$st_adr2,$st_pays,$st_cp,$st_ville,$st_tel,$st_email_forum,$st_email_perso,$st_site,$st_confidentiel,$st_ident_adh,$st_mdp_adh,$st_aide);           
}


/**
 * Charge la photo de l'adhérent sur le site
 * @param integer $pi_idf_adh identifiant de l'adhérent 
 */ 
function maj_photo($pi_idf_adh) {
   global $gst_rep_trombinoscope;
   if ($_FILES['MaPhoto']['type'] == "image/jpeg")
   {
      if (!move_uploaded_file($_FILES['MaPhoto']['tmp_name'],"$gst_rep_trombinoscope/$pi_idf_adh.jpg")) 
      {
         print("<div CLASS=IMPORTANT>Erreur de téléchargement :</div><br>");
         switch($_FILES['Variantes']['error'])
         { 
           case 2 : print("Fichier trop gros par rapport à MAX_FILE_SIZE");break;
           default : print("Erreur inconnue");print_r($_FILES);
         }
         exit;
      }   
   }
   else
      print("<div class=IMPORTANT>Type d'image ".$_FILES['MaPhoto']['type']." non accepté</div>");
}
/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/
print('<body>');
print('<div>');

if(!isset($_SESSION['ident']))
   die("<div class=ERREUR> Identifiant non reconnu</div>");
$gst_ident = $_SESSION['ident'];

require_once("Commun/menu.php");

switch ($gst_mode) {
  case 'MENU_MODIFIER' :
     menu_edition_adherent($connexionBD,$adherent,$i_idf_adht_connecte);
  break;
  case 'MODIFIER' :
     $adherent->initialise_depuis_formulaire();
     try
     {
        $adherent->modifie_infos_personnelles();
     }
     catch (Exception $e)
     {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
     }
     menu_edition_adherent($connexionBD,$adherent,$i_idf_adht_connecte);
  break;
  case 'CHARGEMENT_PHOTO':
  $i_idf_adh=$connexionBD->sql_select1("select idf from adherent where ident='$gst_ident'");
  maj_photo($i_idf_adh);
  menu_modifier($connexionBD,$gst_ident);
  break;
  case 'SUPPRIMER_PHOTO':
  $i_idf_adh=$connexionBD->sql_select1("select idf from adherent where ident='$gst_ident'");
  unlink("$gst_rep_trombinoscope/$i_idf_adh.jpg");
  menu_modifier($connexionBD,$gst_ident); 
  break;         
}  

print("</div>");
print('</body></html>');



?>