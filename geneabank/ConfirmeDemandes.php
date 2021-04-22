<?php

include ('Geneabank.inc');
session_start();

require_once('../v4/Commun/config.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/constantes.php');
require_once('commun_gbk.php');

print('<!DOCTYPE html>');
print("<Head>\n");
print('<meta http-equiv="content-language" content="fr" /> ');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'/>");
print('</Head>');

$ga_idf_actes  = empty($_POST['actes']) ? array() : $_POST['actes'];
print('<body>');
print('<div class=alignCenter>');
print('<a href="http://www.genea16.net"><img src="images/logo_AGC250.jpg" border="0" width="100" height="100"></a><img src="http://www.geneabank.org/pictures/logo4.jpg" width="233" height="104">');
print('</div><br>');

print('<div class="PAVE">Registres de l\'Association G&eacute;n&eacute;alogique de la Charente</a></div><br>');


if (count($ga_idf_actes)==0)
{
  print("<div class=ERREUR>Aucun acte s&eacute;lectionn&eacute;</div>");
  print("<br><div align=alignCenter>");
  print("<a href=index.php>Revenir &agrave; la page de recherche</a></div>");

  exit();
}
$_SESSION['actes_gbk'] = $ga_idf_actes;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$gst_requete_intv = "select idf_acte,personne.idf,sexe,patronyme,ifnull(prenom.libelle,''),idf_pere,idf_mere,type_acte.idf,type_acte.nom,acte.annee,details_supplementaires from personne left join prenom on (personne.idf_prenom=prenom.idf) join acte on (personne.idf_acte=acte.idf) join type_acte on (type_acte.idf=acte.idf_type_acte) where idf_acte in (".join(',',$ga_idf_actes).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,personne.idf";
//print("Req=$gst_requete_intv<br>");
$a_intervenants=$connexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv);  
$a_parties= array();
$a_types_actes = array();
$a_annees= array();
$a_renseignements= array();
foreach ($a_intervenants as $i_idf_acte => $a_intervenant)
{
  $a_intv = array();
  $a_parents= array();
  foreach ($a_intervenant as $i_idf_personne => $a_personne)
  {
     list($c_sexe,$st_patronyme,$st_prenom,$i_idf_pere,$i_idf_mere,$i_idf_type_acte,$st_type_acte,$i_annee,$i_details_supplementaires) = $a_personne;
     $a_intv[]= "$st_prenom $st_patronyme";
     $st_parents = ($i_idf_pere==0) ? "Pas d'information sur le p&egrave;re" : '';
     $st_parents .= ($i_idf_mere==0) ? "/Pas d'information sur la m&egrave;re" : '';
     if ($st_parents!='')
        $a_parents[] = $st_parents;          
  }
  $a_parties[$i_idf_acte] = cp1252_vers_utf8(implode(" X ",$a_intv));
  $a_types_actes[$i_idf_acte] = cp1252_vers_utf8($st_type_acte);
  $a_annees[$i_idf_acte] = $i_annee;
  if ($i_details_supplementaires==0)
  {
     $a_renseignements[$i_idf_acte] = "Le seul renseignement disponible est le nom de la commune";
  }
  else if (count($a_parents)>1)
  {
     $a_renseignements[$i_idf_acte] = cp1252_vers_utf8("Epoux : $a_parents[0]<br>");
     $a_renseignements[$i_idf_acte] .= cp1252_vers_utf8("Epouse : $a_parents[1]");
  }
  else
  {
     $a_renseignements[$i_idf_acte] = $st_parents;
  }
}

$st_requete_codee = md5(implode('|',$ga_idf_actes));
print("<div class=TITRE>R&eacute;capitulatif de votre demande</div><br>");
print("<div class=alignCenter>Cliquer sur le bouton au bas de la page pour valider votre demande</div><br>");
print("<div class=alignCenter><table align=center border=1>");
print("<tr><th>Type d'acte</th><th>Parties</th><th>Ann&eacute;e</th><th>Commentaires</th></tr>");
$i_nb_actes=0;
foreach ($ga_idf_actes as $i_idf_acte) {
  $st_class = ($i_nb_actes%2==0) ? 'ligne_paire':  'ligne_impaire';
  print("<tr class=$st_class><td>$a_types_actes[$i_idf_acte]</td><td>$a_parties[$i_idf_acte]</td><td>$a_annees[$i_idf_acte]</td>");
  if ($a_renseignements[$i_idf_acte]!= '')
    print("<td>$a_renseignements[$i_idf_acte]</td>");
  else
  print("<td>&nbsp;</td>");
  print("</tr>"); 
  $i_nb_actes++;
}
print("</table></div><br>");
print("<div class=alignCenter>");
print GeneaBank($i_nb_actes,IDF_ASSO_GBK,$st_requete_codee,$gst_url_reponse_gbk);
print("</div>");
print("<div align=center>");
print("<a href=\"index.php\" class=\"RetourReponses\">Revenir &agrave; la page de recherche</a>");
print("<a href=\"index.php?recherche=nouvelle\" class=\"RetourReponses\">Commencer une nouvelle recherche</a>");
print("</div>");
print('<br><div class=alignCenter><a href="http://www.genea16.net" class=LienAGC>Association G&eacute;n&eacute;alogique de la Charente</a></div>');
print("</body>"); 

?>
