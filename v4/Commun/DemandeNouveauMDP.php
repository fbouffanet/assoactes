<?php

require_once 'config.php';
require_once 'constantes.php';
require_once 'ConnexionBD.php';
require_once 'Adherent.php';

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<title>Creation d'un nouveau mot de passe</title>");
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>\n");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>\n");
print("<script src='../js/jqueryadditional-methods.min.js' type='text/javascript'></script>\n");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>"); 
?>
<script type='text/javascript'>
$(document).ready(function() {

  $("#demande_nouveau_mdp").validate({
  rules: {
    email: {
      required: true,
		email: true,
	 }
  },
  messages: {
    email: {
      required: "L'adresse email est obligatoire",
		email: "Ce n'est pas un email"
	 }
  }   
  });
  
  $("#ferme").click(function(){
    window.close();
});
});
</script>
<?php

/**
 * Affiche le menu d'interrogation 
 */
function affiche_menu()
{
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Demande d\'un nouveau mot de passe</div>');
   print('<div class="panel-body">');	
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"demande_nouveau_mdp\" >"); 
   print('<div class="form-row">');
   print('<div class="form-group col-md-4 col-md-offset-4">');  
   print("<label for=\"email\">Votre adresse e-mail connue par l'AGC :</label>");
   print("<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"60\" class=\"form-control\">\n"); 
   print("</div></div>");
   print('<div class="form-row">');
   print('<div class="btn-group-vertical" role="group">');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Demander un nouveau mot de passe</button>');   
   print('<button type="button" id=ferme class="btn btn-warning raz">Annuler</button>');
   print("</div></div>");
   print("<input type=\"hidden\" name=\"mode\" value=\"DEMANDE\"></div>\n");
   print('</form></div>');
} 
  
/**
 * Renvoie le mot de passe à l'utilisateur si son email est reconnu, sinon renvoie à la première page.
 * @param string $pst_email Email perso de l'adhérent
 * @global string $gst_serveur_bd
 * @global string $gst_utilisateur_bd
 * @global string $gst_nom_bd
 * @global string $gst_mdp_utilisateur_bd   
 */
function verifie_demande($pst_email)
{
  global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd;
  global $gst_url_inscription;
  print('<div class="panel panel-primary">');
  print('<div class="panel-heading">Demande d\'un nouveau mot de passe</div>');
  print('<div class="panel-body">');
  $connexionBD= ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $connexionBD->ajoute_params(array(':email_perso'=>$pst_email));
  $st_requete = "SELECT idf FROM adherent where email_perso=:email_perso";
  $i_idf = $connexionBD->sql_select1($st_requete);
  if (!empty($i_idf))
  {
    
    $adherent = new Adherent($connexionBD,$i_idf);
    if ($adherent-> demande_nouveau_mdp())
    {
       print("<div class=\"text-center alert alert-success\">Un email dont le titre est \"Demande d'un nouveau mot de passe AGC\" a &eacute;t&eacute; envoy&eacute; &agrave; l'adresse $pst_email<br>");
       print("Vous devrez confirmer votre demande en cliquant sur le lien contenu dans ce mail<br>");
       print("Merci<br></div>");      
    }	
    else
    {
      print("<div class=\"text-center alert alert-warning\">Vous n'&ecirc;tes pas ou plus adh&eacute;rent de l'AGC</div>");
      if (isset($gst_url_inscription))
      {
		  print("<div class=\"text-center\">Veuillez vous r&eacute;inscrire en utilisant l'adresse suivante:<br>");
        print("<a href=\"$gst_url_inscription\">$gst_url_inscription</a><br>");
        print("Merci de votre fidelit&eacute;<br></div>");
      }        
    } 
  }
  else
  {
     print("<div class=\"text-center alert alert-danger\">Votre adresse email n'a pas &eacute;t&eacute; reconnue</div>");
  }
  print('<div class="form-row">');
  print('<input type="button" value="Annuler" id=ferme class="btn btn-warning raz col-md-4 col-md-offset-4">');
  print('</div></div>'); 
} 

print('</head>');
print('<body>');
print('<div class="container">');

switch($gst_mode)
{
   case 'FORMULAIRE' : 
      affiche_menu();
   break;
   case 'DEMANDE':
     // le champ est netttoyé et tronqué à la valeur maximale de la base
     $st_email = substr(trim($_POST['email']),0,60);
     verifie_demande($st_email);     
   break;
}
print('</div></body></html>');

?>
