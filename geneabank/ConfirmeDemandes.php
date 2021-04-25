<?php

include ('Geneabank.inc');
session_start();

require_once('../v4/Commun/config.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/constantes.php');
require_once('commun_gbk.php');

print('<!DOCTYPE html>');
print("<head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<title>Geneabank ".SIGLE_ASSO.": Recherches</title>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");
print("</head>\n");
print("<body>");
print('<div class="container">');

$ga_idf_actes  = empty($_POST['actes']) ? array() : $_POST['actes'];
print('<div class="panel panel-primary">');
print('<div class="panel-body">');
print('<div class="form-row col-md-12">');
print("<div class=\"col-md-4 col-md-offset-1\"><a href=\"$gst_url_site\"><img src=\"$gst_logo_association\"></a></div>");
print("<div class=\"col-md-4 col-md-offset-1\"><a href=\"http://www.geneabank.org\"><img src=\"https://www.geneabank.org/pictures/logo4.jpg\"></a></div>");
print('</div>'); // fin ligne
print('</div>'); // fin panel body
print('</div>'); // fin panel primary

print('<div class="panel panel-primary">');
print('<div class="panel-heading">Registres de '.LIB_ASSO_AVEC.'</div>');
print("<div class=\"panel-body\">");

if (count($ga_idf_actes)==0)
{
  print('<div class="form-row col-md-12">');	
  print("<div class='alert alert-danger'>Aucun acte s&eacute;lectionn&eacute;</div>");
  print('</div>');
  print('<div class="form-row col-md-12">');
  print('<a href="index.php?recherche=nouvelle" class="btn btn-primary col-md-4 col-md-offset-4">Nouvelle Recherche</a>');
  print('</div>');
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

$st_requete_code = md5(implode('|',$ga_idf_actes));
print("<blockquote>R&eacute;capitulatif de votre demande<br>");
print("Cliquer sur le bouton au bas de la page pour valider votre demande</blockquote>");
print("<table class=\"table table-bordered table-striped\">");
print("<thead><tr>");
print("<th>Type d'acte</th><th>Parties</th><th>Ann&eacute;e</th><th>Commentaires</th>");
$i_nb_actes=0;
print('<tbody>');
foreach ($ga_idf_actes as $i_idf_acte) {
  print("<tr><td>$a_types_actes[$i_idf_acte]</td><td>$a_parties[$i_idf_acte]</td><td>$a_annees[$i_idf_acte]</td>");
  if ($a_renseignements[$i_idf_acte]!= '')
    print("<td>$a_renseignements[$i_idf_acte]</td>");
  else
  print("<td>&nbsp;</td>");
  print("</tr>"); 
  $i_nb_actes++;
}
print('</tbody>');
print("</table>");
print GeneaBank($i_nb_actes,IDF_ASSO_GBK,$st_requete_code,$gst_url_reponse_gbk);
print('<div class="row">');
print('<div class="btn-group col-md-6 col-md-offset-4" role="group">');
print('<a href="index.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span> Revenir &agrave; la page de recherche</a>');
print('<a href="index.php?recherche=nouvelle" class="btn btn-warning raz" role="button"><span class="glyphicon glyphicon-erase"></span>Commencer une nouvelle recherche</a>');
print('</div>'); // fin btn-group
print('</div>'); //fin ligne

print('</div>'); // fin panel body
print('</div>'); // fin panel primary

print("<div class=\"panel-footer text-center\"><a href=\"$gst_url_site\">".LIB_ASSO."</a></div>");

print('</div>'); // fin div container
print("</body></html>");  

?>
