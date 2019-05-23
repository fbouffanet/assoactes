<?php

require_once 'config.php';
require_once 'constantes.php';
require_once 'ConnexionBD.php';
require_once 'Adherent.php';

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Creation d'un nouveau mot de passe</title>");
print("<link href='Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='jquery-min.js' type='text/javascript'></script>\n");
print("<script src='jquery.validate.min.js' type='text/javascript'></script>\n");
print("<script src='additional-methods.min.js' type='text/javascript'></script>\n");
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
});
</script>
<?php

/**
 * Affiche le menu d'interrogation 
 */
function affiche_menu() {
   print("<div class=TITRE>Demande d'un nouveau mot de passe<br></div>");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"demande_nouveau_mdp\" >"); 
   print('<div class=alignCenter><br>');   
   print("<div>Votre adresse e-mail connue par l'AGC :<br> ");
   print("<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"60\"></div><br>\n");  
   print('<div><input type="submit" value="Demander un nouveau mot de passe"/></div><br>');
   print('<div><input type="button" value="Annuler" onclick="javascript:window.close();"/></div>');
   print("<input type=\"hidden\" name=\"mode\" value=\"DEMANDE\"></div>\n");
   print('</form>');
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
  print("<div class=TITRE>Demande d'un nouveau mot de passe<br></div>");
  print('<div class=alignCenter><br>');  
  $connexionBD= ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $connexionBD->ajoute_params(array(':email_perso'=>$pst_email));
  $st_requete = "SELECT idf FROM adherent where email_perso=:email_perso";
  $i_idf = $connexionBD->sql_select1($st_requete);
  if (!empty($i_idf))
  {
    
    $adherent = new Adherent($connexionBD,$i_idf);
    if ($adherent-> demande_nouveau_mdp())
    {
       print("Un email dont le titre est \"Demande d'un nouveau mot de passe AGC\" a &eacute;t&eacute; envoy&eacute; &agrave; l'adresse $pst_email<br>");
       print("Vous devrez confirmer votre demande en cliquant sur le lien contenu dans ce mail<br>");
       print("Merci<br>");      
    }	
    else
    {
      print("<div class=IMPORTANT>Vous n'&ecirc;tes pas ou plus adh&eacute;rent de l'AGC<br><br></div>");
      if (isset($gst_url_inscription))
      {
		  print("<div>Veuillez vous r&eacute;inscrire en utilisant l'adresse suivante:<br>");
        print("<a href=\"$gst_url_inscription\">$gst_url_inscription</a><br>");
        print("Merci de votre fidelit&eacute;<br></div>");
      }        
      print("</div>");
    } 
  }
  else
  {
     print("<div class=IMPORTANT>Votre adresse email n'a pas &eacute;t&eacute; reconnue<br><br></div>");
  }
  print('<div><br><input type="button" value="Fermer la fenêtre" onclick="javascript:window.close();"/></div>');
  print('</div>'); 
} 

print('</head>');
print('<body>');

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

print('</body></html>');

?>
