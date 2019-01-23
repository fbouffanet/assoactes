<?php
require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VALIDATION_TD);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Liste des demandes de modification de TD en attente</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');
print('<body>');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
print("<div class=\"TITRE\">Demandes de modification de TD</div>");

$i_nb_tds=$connexionBD->sql_select1("select sum( nb_actes ) from `stats_commune` where `idf_type_acte` =".IDF_MARIAGE." and `idf_source` =".IDF_SOURCE_TD);
print("<div class=\"SOUSTITRE\">$i_nb_tds TDMs en base</div>");
if (isset($_SESSION['ident']))
{
  $st_requete = "select distinct ma.idf,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut is null or ma.statut not in ('A','R') group by ma.idf";
  $a_liste_modifs=$connexionBD->sql_select_multiple_par_idf($st_requete);
  if (count($a_liste_modifs)>0)
  {   
      print("<br><div class=\"SOUSTITRE\">Demandes de modifications</div>");    
      print("<div><br><table border=1 align=center>");
      print("<tr>");
      print("<th>Date de l'acte</th>");
      print("<th>Type</th>");
      print("<th>Commune</th>");
      print("<th>Parties</th>");
      print("<th>Date de la demande</th>");
      print("<th>Email demandeur</th>");
      print("<th>&nbsp;</th>");
      print("</tr>");
      foreach ($a_liste_modifs as $i_idf_modif  => $a_groupe)
      {
          list($st_date,$st_type,$st_commune,$st_parties,$st_date_demande,$st_email_demandeur) = $a_groupe;
          print("<tr>");
          print("<td>$st_date</td>");
          print("<td>$st_type</td>");
          print("<td>$st_commune</td>");
          print("<td>$st_parties</td>");
          print("<td>$st_date_demande</td>");
          print("<td>$st_email_demandeur</td>");
          print("<td>");
          print("<form action=\"../Administration/ValidationModification.php\" method=\"POST\">");
          print("<input type=\"hidden\" name=\"idf_modification\" value=\"$i_idf_modif\">");
          print("<input type=\"hidden\" name=\"adresse_retour\" value=\"".$_SERVER['PHP_SELF']."\">");
          print("<input type=submit value=\"Voir la modification\">");
          print("</form></td>");
          print("</tr>");
      }
      print("</table></div>");
  }       
  else
  {
    print("<div align=center><br>Pas de demandes de TD en attente</div>");
  }
  
}
print("</body></html>");
?>