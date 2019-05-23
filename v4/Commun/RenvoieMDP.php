<?php

require_once 'config.php';
require_once 'constantes.php';
require_once 'ConnexionBD.php';

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Renvoi du mot de passe</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
?>
<script type='text/javascript'>
// JavaScript Document
function VerifieChamps(Formulaire)
{
   var email=document.forms[Formulaire].email.value;
   var code_postal=document.forms[Formulaire].code_postal.value;
   var email_ptn = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
   var ListeErreurs	= "";
   if (email=="")
   {
      ListeErreurs+="L'email est obligatoire\n";
   }
   else if (!email_ptn.test(email))
   {
      ListeErreurs+="L'email n'est pas valide\n";
   }
   if (code_postal=="")
   {
      ListeErreurs+="Le code postal est obligatoire\n";
   }
   
   if (ListeErreurs!= "")
   {
      alert(ListeErreurs);
      return false;
   }
   else
   {
      document.forms[Formulaire].submit();
   }
}
</script>
<?php

/**
 * Affiche le menu d'interrogation 
 */
function affiche_menu() {
   print('<div class=TITRE>Renvoi du mot de passe<br></div>');
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">"); 

   print('<div class=alignCenter><br>');
   
   print("<div>Votre adresse e-mail connue par l'AGC :<br> ");
   print("<input type=\"text\" name=\"email\" size=\"30\" maxlength=\"60\"></div><br>\n");
   print("<div>Votre code postal connu par l'AGC : <br>");
   print("<input type=\"text\" name=\"code_postal\" size=\"12\" maxlength=\"12\"></div><br>\n");
  
   print('<div><input type="submit" value="Renvoyer le mot de passe"/></div><br>');
   print('<div><input type="button" value="Annuler" onclick="javascript:window.close();"/></div>');
   print("<input type=\"hidden\" name=\"mode\" value=\"RENVOI\"></div>\n");
   print('</form>');
} 

/**
 * Envoie l'email d'information à l'adhérent identifié par les données suivantes
 * @param integer $pi_idf Numéro de l'adhérent
 * @param string  $pst_nom Nom de l'adhérent
 * @param string $pst_prenom Prénom de l'adhérent
 * @param string $pst_ident Identifiant de l'adhérent sur la base AGC
 * @param string $pst_mdp Mot de passe sur la base et Généabank 
 * @param string $pst_email Email de l'adhérent   
 */
function envoie_mail($pi_idf,$pst_nom,$pst_prenom,$pst_ident,$pst_mdp,$pst_email) {

   $st_texte = "Bonjour <strong>$pst_prenom $pst_nom</strong>\n\n";
   $st_texte .= "Voici votre identifiant et mot de passe d'acc&egrave;s &agrave; la base AGC <strong>GENEA16</strong> et &agrave; G&eacute;n&eacute;aBank\n\n";
   $st_texte .= "N'oubliez pas! votre adresse e-mail doit-&ecirc;tre la m&ecirc;me sur la base GENEA16 et sur Yahoo\n\n";
   $st_texte .="<table border=1>";
   $st_texte .="<tr><td>Votre mot de passe:</td><th>$pst_mdp</th></tr>";
   $st_texte .="<tr><td>Votre identifiant AGC:</td><th>$pst_ident</th></tr>";
   $st_texte .="<tr><td>Votre identifiant G&eacute;n&eacute;aBank:</td><th>".PREFIXE_ADH_GBK."$pi_idf</th></tr>";
   $st_texte .="</table>\n";
   $st_texte .= "Cordialement,\n\nLes responsables du site";
   $st_sujet = "Demande de mot de passe au site AGC";
   $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
   $st_entete .= "Content-type: text/html; charset=cp1252 \r\n";
   $st_entete .= "From: ".EMAIL_DIRASSO."\r\n";
   return (mail($pst_email,$st_sujet, nl2br(stripslashes($st_texte)), $st_entete));
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
  $st_requete = "SELECT idf,nom,prenom,ident,mdp,statut FROM adherent where email_perso=:email_perso and cp = :code_postal";
  list ($i_idf,$st_nom,$st_prenom,$st_ident,$st_mdp,$st_statut) =$connexionBD->sql_select_liste($st_requete);
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
        if (envoie_mail($i_idf,$st_nom,$st_prenom,$st_ident,$st_mdp,$pst_email))
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
   case 'RENVOI':
     // les champs sont netttoyés et tronqués à la valeur maximale de la base
     $st_email = substr(trim($_POST['email']),0,60);
     $st_code_postal = substr(trim($_POST['code_postal']),0,12);
     verifie_demande($st_email,$st_code_postal);     
   break;
}

print('</body></html>');

?>
