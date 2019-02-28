<?php

session_start();

require_once 'Commun/config.php';
require_once('Commun/constantes.php');
require_once 'Commun/commun.php';
require_once('Commun/ConnexionBD.php');

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/select2.min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");  
print('<title>Base AGC: Statistiques par commune</title>');
print("<script type='text/javascript'>");
?>

$(document).ready(function() {

$(".js-select-avec-recherche").select2();

$("#idf_source").change(function() {
     this.form.submit();
});

$("#idf_commune").change(function() {
     this.form.submit();
});

});

<?php
print("</script>");
print('</head>');

print("<body>");
print('<div class="container">');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("Commun/menu.php");
$a_sources = $connexionBD->liste_valeur_par_clef("select idf,nom from source order by nom");
    
print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");

$i_get_idf_source=isset($_GET['idf_source']) ? $_GET['idf_source']: 1 ; 
$gi_idf_source=isset($_POST['idf_source']) ? $_POST['idf_source'] : $i_get_idf_source;

print('<div class="form-row col-md-12"><label for="idf_source">Source:</label><select name=idf_source id=idf_source class="js-select-avec-recherche form-control">');
print(chaine_select_options($gi_idf_source,$a_sources));
print('</select></div>');

$a_communes = $connexionBD->liste_valeur_par_clef("select ca.idf,ca.nom from commune_acte ca join `stats_commune` sc on (ca.idf=sc.idf_commune) where sc.idf_source=$gi_idf_source order by ca.nom");

$a_idf_communes = array_keys ($a_communes);
$i_get_idf_commune=isset($_GET['idf_commune']) ? $_GET['idf_commune']: $a_idf_communes[0];
$gi_idf_commune = isset($_POST['idf_commune']) ? $_POST['idf_commune'] : $i_get_idf_commune;

$a_liste_stats = array();

if (count($a_communes)!=0)
{
   if (!in_array($gi_idf_commune,$a_idf_communes))
   $gi_idf_commune = $a_idf_communes[0];
   
   $a_liste_stats = $connexionBD->sql_select_multiple("select nom, annee_min,annee_max,nb_actes from stats_commune join type_acte on (idf_type_acte=idf) where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune order by nom");
}

print('<div class="form-row col-md-12"><label for=\"idf_commune\">Commune:</label><select name=idf_commune id=idf_commune class="js-select-avec-recherche form-control">');
print(chaine_select_options($gi_idf_commune,$a_communes));
print('</select></div>');

if (count($a_liste_stats)!=0)
{
   print("<table class=\"table table-bordered table-striped\">\n");
   print("<tr><th>Type d'acte</th><th>Ann&eacute;e minimale</th><th>Ann&eacute;e maximale</th><th>Nombre d'actes</th></tr>\n");
   $i=0;
   foreach ($a_liste_stats as $a_ligne)
   {
      print("<tr>");
      foreach ($a_ligne as $st_champ)
      {
         print("<td>$st_champ</td>");
      }
      print("</tr>");
      $i++;
   }
   print("</table>\n");
}
else
{
   print("<div class=\"text-center alert alert-danger\">Pas de donn&eacute;es</div>");
}
print ("</form>");
print("</div></body></html>");
?>
