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

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');

print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");

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
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");  
?>
<script type='text/javascript'>
$(document).ready(function() {
  $(".js-select-avec-recherche").select2();

  $("#change_mdp").validate({
  rules: {
    mdp_courant: {
      required: true,
		  pattern: /^\w+$/,
      minlength: 8,
		  maxlength: 12
	 },
   nouveau_mdp: {
      required: true,
		  pattern: /^\w+$/,
      minlength: 8,
		  maxlength: 12
	 },
   nouveau_mdp2: {
      required: true,
		  pattern: /^\w+$/,
      minlength: 8,
		  maxlength: 12,
      equalTo: "#nouveau_mdp"
	 }
  },
  messages: {
    mdp_courant: {
      required: "Le mot de passe courant est obligatoire",
		  pattern: "Le mot de passe ne doit contenir que des lettres et des chiffres",
      minlength: "Le mot de passe doit contenir au minimum 8 caractères",
		  maxlength: "Le mot de passe doit contenir au maximum 12 caractères"
	 },
   nouveau_mdp: {
      required: "Le nouveau mot de passe est obligatoire",
		  pattern: "Le mot de passe ne doit contenir que des lettres et des chiffres",
      minlength: "Le mot de passe doit contenir au minimum 8 caractères",
		  maxlength: "Le mot de passe doit contenir au maximum 12 caractères"
	 },
   nouveau_mdp2: {
      required: "Le second nouveau mot de passe est obligatoire",
		  pattern: "Le mot de passe ne doit contenir que des lettres et des chiffres",
      minlength: "Le mot de passe doit contenir au minimum 8 caractères",
		  maxlength: "Le mot de passe doit contenier au maximum 12 caractères",
      equalTo: "le second mot de passe est différent du premier"
	 }
  }   
  });
});
</script>
<?php
print("<title>Base AGC: Changer votre mot de passe</title>\n");
print('</head>');

/**
 * Affiche de la table d'édition
 * @param object $pconnexionBD
 * @param object $padherent objet adherent 
 * @param integer $pi_idf_adh identifiant de l'adhérent

 */ 
function menu_change_mdp($pconnexionBD,$padherent,$pi_idf_adh)
{
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Modifier votre mot de passe</div>');
   print('<div class="panel-body">');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" id=\"change_mdp\" method=\"post\">\n");
   print("<input type=hidden name=mode value=MODIFIER>\n");
   print('<div class="form-row">');
   print('<div class="form-group col-md-4 col-md-offset-4">');
   print("<label for=\"mdp_courant\">Votre mot de passe courant</label><input type=\"password\" id=\"mdp_courant\" name=\"mdp_courant\" maxlength=12 class=\"form-control\"/>");
   print('</div></div>');
   print('<div class="form-row">');
   print('<div class="form-group col-md-4 col-md-offset-4">');
   print("<label for=\"nouveau_mdp\">Votre nouveau mot de passe</label><input type=\"password\" id=\"nouveau_mdp\" name=\"nouveau_mdp\" maxlength=12 class=\"form-control\" >");
   print('</div></div>');
   print('<div class="form-row">');
   print('<div class="form-group col-md-4 col-md-offset-4">');
   print("<label for=\"nouveau_mdp2\">Retapez votre nouveau mot de passe</label><input type=\"password\" id=\"nouveau_mdp2\"  name=\"nouveau_mdp2\" maxlength=12 class=\"form-control\"/></td></tr>");
   print('</div></div>');
   print('<div class="form-row">');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Modifier votre mot de passe</button>');   
   print('</div></div>');   
   print('</form></div>');         
}


/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/
print('<body>');
print('<div class="container">');
if(!isset($_SESSION['ident']))
   die("<div class=\"text-center alert alert-danger\">Identifiant non reconnu</div>\n");
$gst_ident = $_SESSION['ident'];

require_once("Commun/menu.php");

switch ($gst_mode) {
  case 'MENU_MODIFIER' :
     menu_change_mdp($connexionBD,$adherent,$i_idf_adht_connecte);
  break;
  case 'MODIFIER' :
     $gst_mdp_courant = substr(trim($_POST['mdp_courant']),0,12);
     $gst_nouveau_mdp = substr(trim($_POST['nouveau_mdp']),0,12);
     $st_requete = "select mdp from adherent where ident='$gst_ident'";
     $st_mdp_hash = $connexionBD->sql_select1($st_requete);
     if (password_verify($gst_mdp_courant,$st_mdp_hash))
     {
        try
        {
           $adherent->change_mdp($gst_nouveau_mdp); 
        }
        catch (Exception $e) 
        {
          print("<div class=\"text-center alert alert-danger\">Impossible de changer le mot de passe</div>".$e->getMessage());  
        }
        print("<div class=\"text-center alert alert-success\">Mot de passe chang&eacute;</div>");          
     }
     else
     {     
      print("<div class=\"text-center alert alert-danger\>Le mot de passe courant ne correspond pas &agrave; celui de l'identifiant connect&eacute;. Le mot de passe n'a pas &eacute;t&eacute; chang&eacute;</div>");
      menu_change_mdp($connexionBD,$adherent,$i_idf_adht_connecte);
    }
  break;        
}  

print("</div>");
print('</body></html>');



?>