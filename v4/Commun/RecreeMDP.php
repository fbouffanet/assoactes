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

  $("#recree_mdp").validate({
  rules: {
    email: {
      required: true,
		  email: true,
	 },
   code_postal: {
      required: true
	 }
  },
  messages: {
    email: {
      required: "Le mot de passe courant est obligatoire",
		  email: "Ce n'est pas un email"

	 },
   code_postal: {
      required: "Le code postal est obligatoire"
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
   print("<div class=TITRE>Cr&eacute;ation d'un nouveau mot de passe<br></div>");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"recree_mdp\" >"); 

   print('<div class=alignCenter><br>');
   
   print("<div>Votre adresse e-mail connue par l'AGC :<br> ");
   print("<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"60\"></div><br>\n");
   print("<div>Votre code postal connu par l'AGC : <br>");
   print("<input type=\"text\" name=\"code_postal\" id=\"code_postal\" size=\"12\" maxlength=\"12\"></div><br>\n");
  
   print('<div><input type="submit" value="Creer un nouveau mot de passe"/></div><br>');
   print('<div><input type="button" value="Annuler" onclick="javascript:window.close();"/></div>');
   print("<input type=\"hidden\" name=\"mode\" value=\"RECREE\"></div>\n");
   print('</form>');
} 
  
/**
 * Renvoie le mot de passe à l'utilisateur si son email et code postaux sont reconnus, sinon renvoie à la première page.
 * @param string $pst_email Email perso de l'adhérent
 * @param string $pst_code_postal Code postal de l'adhérent
 * @global string $gst_serveur_bd
 * @global string $gst_utilisateur_bd
 * @global string $gst_nom_bd
 * @global string $gst_mdp_utilisateur_bd   
 */
function verifie_demande($pst_email,$pst_code_postal)
{
  global $gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd;
  global $gst_url_inscription;
  $connexionBD= ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);	
  $connexionBD->ajoute_params(array(':email_perso'=>$pst_email,':code_postal'=>$pst_code_postal));
  $st_requete = "SELECT idf,nom,prenom,ident,statut FROM adherent where email_perso=:email_perso and replace(cp,' ','') = replace(:code_postal,' ','')";
  list ($i_idf,$st_nom,$st_prenom,$st_ident,$st_statut) =$connexionBD->sql_select_liste($st_requete);
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  if (empty($i_idf))
  {
     print("<div class=alignCenter>"); 
     print("<div class=IMPORTANT>Votre email ou votre code postal n'ont pas &eacute;t&eacute; reconnus</div><br>");
     print("<input type=\"hidden\" name=\"mode\" value=\"FORMULAIRE\">\n");
     print('<div><input type="submit" value="Retour"/></div>');
     print("</div>");   
  }
  else
  {
     
     print("<div class=alignCenter>");
     if ($st_statut==ADHESION_INTERNET || $st_statut==ADHESION_BULLETIN || $st_statut==ADHESION_HONNEUR)
     {
        $adherent = new Adherent($connexionBD,$i_idf);
        $st_mdp = Adherent::mdp_alea();
        //print("Nouveau MDP=$st_mdp<br>");
        if ($adherent->change_mdp($st_mdp))
        {       
           print("Bonjour <strong>$st_prenom $st_nom</strong><br><br>");
           print("Votre demande de mot de passe a bien &eacute;t&eacute; enregistr&eacute;e<br>");
           print("Vous le recevrez sous peu, &agrave; l'adresse email que vous nous avez indiqu&eacute;e<br>");
           print("---><strong>$pst_email</strong><---<br><br>");
           print("Cordialement,<br>Les responsables du site<br><br>");        
        }
        else
        {
           print("<div class=IMPORTANT>Envoi impossible. Veuillez contacter les responsables du site<br><br></div>");
        }
     }
     else
     {
        print("<div class=IMPORTANT>Vous n'&ecirc;tes plus adh&eacute;rent de l'AGC<br><br></div>");
        if (isset($gst_url_inscription))
        {
			print("<div>Veuillez vous r&eacute;inscrire en utilisant l'adresse suivante:<br>");
            print("<a href=\"$gst_url_inscription\">$gst_url_inscription</a><br>");
            print("Merci de votre fidelit&eacute;<br></div>");
        }
     }
     print('<div><br><input type="button" value="Fermer la fenêtre" onclick="javascript:window.close();"/></div>'); 
     print("</div>");
  }
  print("</form>");
} 

print('</head>');
print('<body>');

switch($gst_mode)
{
   case 'FORMULAIRE' : 
      affiche_menu();
   break;
   case 'RECREE':
     // les champs sont netttoyés et tronqués à la valeur maximale de la base
     $st_email = substr(trim($_POST['email']),0,60);
     $st_code_postal = substr(trim($_POST['code_postal']),0,12);
     verifie_demande($st_email,$st_code_postal);     
   break;
}

print('</body></html>');

?>
