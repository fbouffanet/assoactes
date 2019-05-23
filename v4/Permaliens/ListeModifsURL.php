<?php
require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VALIDATION_PERMALIEN);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Liste des demandes de modification des permaliens en attente</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');
print('<body>');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
print("<div class=\"TITRE\">Demandes de modification de permaliens</div>");


if (isset($_SESSION['ident']))
{
  $a_liste_modifs=$connexionBD->sql_select_multiple_par_idf("select mod_url.idf_modif, mod_url.date_modif,a.date,ta.nom,ca.nom,group_concat(concat(p.patronyme,' ',prn.libelle) SEPARATOR ' X ') from modif_url mod_url join acte a on (mod_url.idf_acte=a.idf) join commune_acte ca on (a.idf_commune=ca.idf) join type_acte ta on (a.idf_type_acte=ta.idf) join personne p on (a.idf=p.idf_acte) join prenom prn on (p.idf_prenom=prn.idf) where p.idf_type_presence=".IDF_PRESENCE_INTV." and mod_url.statut is null group  by mod_url.idf_modif, mod_url.date_modif,a.date,ta.nom,ca.nom order by mod_url.date_modif asc");
  if (count($a_liste_modifs)>0)
  {       
      print("<div><br><table border=1 align=center>");
      print("<tr>");
      print("<th>Date de l'acte</th>");
      print("<th>Type de l'acte</th>");
      print("<th>Commune</th>");
      print("<th>Parties</th>");
      print("<th>Date de la demande</th>");
      print("<th>&nbsp;</th>");
      print("</tr>");
      foreach ($a_liste_modifs as $i_idf_modif  => $a_groupe)
      {
          list($st_date,$st_date_demande,$st_type_acte,$st_commune,$st_parties) = $a_groupe;
          print("<tr>");
          print("<td>$st_date</td>");
          print("<td>$st_type_acte</td>");
          print("<td>$st_commune</td>");
          print("<td>$st_parties</td>");
          print("<td>$st_date_demande</td>");
          print("<td>");
          print("<form action=\"ValideModifURL.php\" method=\"POST\">");
          print("<input type=\"hidden\" name=\"idf_modif\" value=\"$i_idf_modif\">");
          print("<input type=submit value=\"Voir la modification\">");
          print("</form></td>");
          print("</tr>");
      }
      print("</table></div>");
  }       
  else
  {
    print("<div align=center><br>Pas de demandes en attente</div>");
  }
  print("<br>");
}
print("</body></html>");
?>