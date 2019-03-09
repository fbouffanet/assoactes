<?php

require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once('Commun/Identification.php');
require_once('Commun/VerificationDroits.php');
require_once 'Commun/ConnexionBD.php';
require_once('Commun/commun.php');
require_once('Commun/Adherent.php');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$connexionBD->initialise_params(array(':ident'=>$gst_ident));
$i_idf_adht_connecte= $connexionBD->sql_select1("select idf from adherent where ident=:ident");

$gst_mode = isset($_POST['mode']) ? $_POST['mode'] : 'MENU_MODIFIER';
$adherent = new Adherent($connexionBD,$i_idf_adht_connecte);

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>\n");
print("<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>\n");
print("<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>\n");
print("<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>\n");
print("<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>\n");
print("<script src='Commun/additional-methods.min.js' type='text/javascript'></script>\n");
print("<link href='Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>\n");
print("<script src='js/select2.min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");  
?>
<script type='text/javascript'>
$(document).ready(function() {
  $(".js-select-avec-recherche").select2();

  $("#maj_infos_adherent").validate({
  <?php
    print $adherent->regles_validation();
  ?>
   ,
  errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-sm-5" ).addClass( "has-feedback" );

		if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.parent( "label" ) );
		} else {
				error.insertAfter( element );
		}

		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !element.next( "span" )[ 0 ] ) {
			 $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
		}
	},
	success: function ( label, element ) {
		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !$( element ).next( "span" )[ 0 ] ) {
			 $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
		}
	},
	highlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
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
       extension: "L'image doit �tre au format JPEG"
		  }, 
  }
  });
});
</script>
<?php
print("<title>Base AGC: Vos informations personnelles</title>\n");
print('</head>');

/**
 * Affiche de la table d'�dition
 * @param object $pconnexionBD
 * @param object $padherent objet adherent 
 * @param integer $pi_idf_adh identifiant de l'adh�rent
 * @global array $ga_droits tableau des droits possibles class�s par identifiant
 * @global array $ga_pays liste des pays
 * @global integer $gi_max_taille_upload taille maximale d'upload  
 * @global string $gst_rep_trombinoscope R�pertoire du trombinoscope 
 * @global string $gst_url_trombinoscope Url du trombinoscope 
 */ 
function menu_edition_adherent($pconnexionBD,$padherent,$pi_idf_adh)
{
   global $ga_pays,$gi_max_taille_upload,$gst_rep_trombinoscope,$gst_url_trombinoscope;
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" id=\"maj_infos_adherent\" method=\"post\">\n");
   print("<input type=hidden name=mode value=MODIFIER>\n");
   print('<div class="row col-md-12">');
   
   print('<div class="col-md-6">');
   print($padherent->formulaire_infos_personnelles(false));
   print("</div>");
   
   print('<div class="col-md-6">');  
   print($padherent->formulaire_aides_possibles());
   print($padherent->formulaire_origine());
   if (file_exists("$gst_rep_trombinoscope/$pi_idf_adh.jpg"))
   {
      print("<img src=\"$gst_url_trombinoscope/$pi_idf_adh.jpg\" width=115 height=132 alt=\"MaPhoto\" class=\"rounded mx-auto d-block\">");
   }
   print("</div></div>");
   
   print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Modifier toutes vos informations</button>');   
   print('</form>');
   
   print("<form enctype=\"multipart/form-data\" id=\"maj_photo\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$gi_max_taille_upload\" >"); 
   print('<input type="hidden" name="mode" value="CHARGEMENT_PHOTO">');
   print('<label for="MaPhoto" class="custom-file-label">Photo au format JPEG</label><input name="MaPhoto" id="MaPhoto" type="file" class="custom-file-input">');
   print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Charger la photo</button>');  
   print('</form>');
   
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Supprimer la photo</button>');   
   print('<input type="hidden" name="mode" value="SUPPRIMER_PHOTO">');
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
 * Charge la photo de l'adh�rent sur le site
 * @param integer $pi_idf_adh identifiant de l'adh�rent 
 */ 
function maj_photo($pi_idf_adh) {
   global $gst_rep_trombinoscope;
   if ($_FILES['MaPhoto']['type'] == "image/jpeg")
   {
      if (!move_uploaded_file($_FILES['MaPhoto']['tmp_name'],"$gst_rep_trombinoscope/$pi_idf_adh.jpg")) 
      {
         print("<div class=\"alert alert-danger\">Erreur de t&eacute;l&eacute;chargement :</div><br>");
         switch($_FILES['Variantes']['error'])
         { 
           case 2 : print("Fichier trop gros par rapport � MAX_FILE_SIZE");break;
           default : print("Erreur inconnue");print_r($_FILES);
         }
         exit;
      }   
   }
   else
      print("<div class=\"alert alert-danger\">Type d'image ".$_FILES['MaPhoto']['type']." non accept&eacute;</div>");
}
/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/
print('<body>');
print('<div class="container">');

if(!isset($_SESSION['ident']))
   die("<div class=\"alert alert-danger\">Identifiant non reconnu</div>");
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
        echo 'Exception re�ue : ',  $e->getMessage(), "\n";
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