<?php

require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once 'Commun/ConnexionBD.php';
require_once 'Commun/Adherent.php';

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Creation d'un nouveau mot de passe</title>");
print("<link href='$gst_url_site/css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='$gst_url_site/css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='$gst_url_site/js/jquery-min.js' type='text/javascript'></script>\n");
print("<script src='$gst_url_site/js/bootstrap.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
$("#ferme").click(function(){
    window.close();
});
});
</script>
<?php
print('</head>');
print('<body>');
print('<div class="container">');

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
		 //if ($adherent->change_mdp($st_mdp))
         if (true)
		 {       
            print(sprintf("<div class=\"alert alert-success\">Bonjour <strong>%s %s</strong><br><br>",$adherent->getPrenom(),$adherent->getNom()));
            print("Votre nouveau mot de passe a bien &eacute;t&eacute; g&eacute;n&eacute;r&eacute;<br>");
            print("Vous le recevrez sous peu, &agrave; l'adresse email que vous nous avez indiqu&eacute;e<br>");
            print(sprintf("---><strong>%s</strong><---<br><br>",$adherent->getEmailPerso()));
            print("Cordialement,<br>Les responsables du site</div>");
         }
      }
      else
         print("<div class=\"alert alert-danger\">Clef $gi_clef non reconnue</div>"); 
   }
   else
   {
      print("<div class=\"alert alert-danger\">Adh&eacute;rent non reconnu</div>");
   }
}
else
{
   print("<div class=\"alert alert-danger\">Les param&egrave;tres sont manquants</div>");
}
print('<div class="form-row">');
print('<button type="button" id=ferme class="btn btn-warning col-md-4 col-md-offset-4">Fermer la fen&ecirc;tre</button>');
print('</div>');
print('</div></body></html>');

?>
