<?php

require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once 'Commun/ConnexionBD.php';
require_once 'Commun/Adherent.php';

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Creation d'un nouveau mot de passe</title>");
print("<link href='Styles.css' type='text/css' rel='stylesheet'>");

print('</head>');
print('<body>');

$gi_idf_adht = isset($_GET['idf_adht']) ? (int) $_GET['idf_adht'] : null;
$gi_clef = isset($_GET['clef']) ? (int) $_GET['clef'] : null;

if(!empty($gi_idf_adht) && !empty($gi_clef))
{
   $connexionBD= ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   $connexionBD->initialise_params(array(':idf'=>$gi_idf_adht));	
   $st_requete = "SELECT count(*) FROM adherent where idf=:idf";
   $i_nb_adhts = $connexionBD->sql_select1($st_requete);
   if ($i_nb_adhts==1)
   {
      $adherent = new Adherent($connexionBD,$gi_idf_adht);
      if ($adherent->est_clef_nouveau_mdp($gi_clef))
      {
         $st_mdp = Adherent::mdp_alea();
         if ($adherent->change_mdp($st_mdp))
         {       
            print(sprintf("Bonjour <strong>%s %s</strong><br><br>",$adherent->getPrenom(),$adherent->getNom()));
            print("Votre nouveau mot de passe a bien &eacute;t&eacute; g&eacute;n&eacute;r&eacute;<br>");
            print("Vous le recevrez sous peu, &agrave; l'adresse email que vous nous avez indiqu&eacute;e<br>");
            print(sprintf("---><strong>%s</strong><---<br><br>",$adherent->getEmailPerso()));
            print("Cordialement,<br>Les responsables du site<br><br>");
         }
      }
      else
         print("<div class=\"IMPORTANT\">Clef $gi_clef non reconnue</div>"); 
   }
   else
   {
      print("<div class=\"IMPORTANT\">Adh&eacute;rent non reconnu</div>");
   }
}
else
{
   print("<div class=\"IMPORTANT\">Les param&egrave;tres sont manquants</div>");
}
print('<div><br><input type="button" value="Fermer la fenêtre" onclick="javascript:window.close();"/></div>');
print('</body></html>');

?>
