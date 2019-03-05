<?php

require_once('Commun/Identification.php');
require_once('Commun/commun.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<title>Bienvenue sur la base de l\'AGC !</title>');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
//script Google Analytics -- debut
/*
print('<script type="text/javascript">');

  print("var _gaq = _gaq || [];");
  print("_gaq.push(['_setAccount', 'UA-9306738-3']);");
  print("_gaq.push(['_trackPageview']);");

  print("(function() {");
    print("var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;");
    print("ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';");
    print("var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);");
  print("})();");

print('</script>');
*/
//script Google Analytics -- fin
print("</head>");

print("<body>");

print('<div class="container">');
require_once("Commun/menu.php");


$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

print("<div class='row col-md-12'>");
print("<div class='col-md-4'>");
// Combien d'adhérents ?				
$gi_nb_adherents = $connexionBD->sql_select1("select count(*) from adherent where statut IN ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."')");

// Combien de X ?
$gi_nb_mar = $connexionBD->sql_select1("select sum(nb_actes) from `stats_commune` where idf_type_acte=".IDF_MARIAGE);
// Combien de DIV ?
$gi_nb_cm = $connexionBD->sql_select1("select sum(nb_actes) from `stats_commune` where idf_type_acte=".IDF_DIVERS);		
// Combien de ¦ ?
$gi_nb_nai = $connexionBD->sql_select1("select sum(nb_actes) from `stats_commune`  where idf_type_acte=".IDF_NAISSANCE);
// Combien de + ?
$gi_nb_dec = $connexionBD->sql_select1("select sum(nb_actes) from `stats_commune` where idf_type_acte=".IDF_DECES);
	// combien au total		
$gi_nb_actes_total = $connexionBD->sql_select1("select sum(nb_actes) from `stats_commune`");

print('<div class="panel-group">');
print('<div class="panel panel-default">');
print('<div class="panel-heading">Notre espace membres</div>');
print('<div class="panel-body">');
// Heure & Date
$st_date = date("d-m-Y");
$st_heure = date("H:i");
print("<div class=\"row text-center\">Aujourd'hui le $st_date &agrave; $st_heure</div>");
print("<div class=\"row text-center\">$gi_nb_adherents adh&eacute;rents inscrits sur la base de l'AGC.</div>");
print('</div></div>');

print('<div class="panel panel-default">');
print('<div class="panel-heading">Info sur la base</div>');
print('<div class="panel-body">');
print("<div class=\"row text-center\">".number_format($gi_nb_actes_total,0,',', ' ') ." actes dont :</div>");
print("<div class=\"row text-center\">Naissances: ".number_format($gi_nb_nai,0,',', ' ') ." actes</div>");
print("<div class=\"row text-center\">Mariages: ".number_format($gi_nb_mar,0,',', ' ') ." actes</div>");
print("<div class=\"row text-center\">D&eacute;c&egrave;s: ".number_format($gi_nb_dec,0,',', ' ') ." actes</div>");
print("<div class=\"row text-center\">CM: ".number_format($gi_nb_cm,0,',', ' ') ." actes</div>");
print("<div class=\"row text-center\">et autres...</div>");
print('</div></div>');

$gi_nbjours = 30;

print('<div class="panel panel-default">');
print("<div class=\"panel-heading\">Historique des chargements sur les $gi_nbjours derniers jours</div>");
print('<div class="panel-body">');
$a_chargements = $connexionBD->sql_select_multiple("select date_format(c.date_chgt,'%d/%m/%Y'),ca.nom,c.type_acte_nim,c.nb_actes from `chargement` c join commune_acte ca on (c.idf_commune=ca.idf) where datediff(now(),c.date_chgt)<$gi_nbjours and c.publication='O' order by c.date_chgt desc");
if (count($a_chargements)==0)
{
   print("<div class=\"alert alert-danger\">Pas de chargements dans les $gi_nbjours derniers jours</div>");
}
else
{
   print("<table class=\"table table-bordered table-striped\">");
   print("<tr>");
   print("<th>Commune</th><th>Type</th><th>Nbre actes</th>");
   print("</tr>");
   foreach ($a_chargements as $a_chargement)
   {
      list($st_date,$st_commune,$st_type_nim,$i_nb_actes) = $a_chargement;
      switch ($st_type_nim) 
      {
         case IDF_NAISSANCE: $st_type_acte='°';break;
         case IDF_MARIAGE: $st_type_acte='X';break;
         case IDF_DECES: $st_type_acte='&dagger;';break;
         case IDF_DIVERS: $st_type_acte='Divers(CM...)';break;
      }
      print("<tr>");
      print("<td>$st_commune</td><td>$st_type_acte</td><td>$i_nb_actes</td>");
      print("</tr>");
      
   }
   print("</table>");
}
print('</div></div></div>');
print("</div>");

print('<div class="col-md-6">');
// Lit les bulletins dans le répertoire Articles. Ils doivent commencer par ArticleBulletin et avoir l'extension HTML
$a_bulletins = glob("Articles/ArticleBulletin*.html");
// Choisit un numéro au hasard
$i_bulletin_choisi = mt_rand(1,count($a_bulletins));
// construit le nom de fichier
$st_article_bulletin = $a_bulletins[$i_bulletin_choisi];
//$st_article_bulletin = "./Articles/lettre_CG.htm";// en provisoire
$st_bulletin_html = file_get_contents($st_article_bulletin);
if (preg_match('~<body[^>]*>(.*?)</body>~si', $st_bulletin_html, $a_patterns))
	print($a_patterns[1]); 
print("</div>");
?>
   <p></p>
    <div style="text-align: center; color: rgb(102, 102, 204);" class="alignCenter"><strong><span

          style="font-size: 16pt;">Entraide inter-régionale, mariés ailleurs :</span></strong><br>
      <strong></strong></div>
    <strong> <br>
      le Cercle généalogique des Deux-Sèvres nous a communiqué la liste des
      mariages relevés dans les registres des communes (79) dont l'un au moins
      des époux est originaire de Charente.<br>
      <br>
      Nos adhérents, peuvent consulter ces relevés sur les ordinateurs de notre
      local de permanence, ou lors de rencontres ponctuelles ou l'A.G.C est
      présente.<br>
      <br>
      A noter que nous procédons de même avec l'envoi des mariages de
      Deux-Sévriens célébrés en Charente.<br>
      <br>
      <br>
      <br>

<div  style="text-align: center; color: rgb(102, 102, 204);" class=alignCenter><strong><span style="font-size: 12pt;">Loi sur les délais de
communication</span></strong></div>
<div  style="text-align: center;" class=alignCenter><strong style="color: rgb(102, 102, 204);"><span style="font-size: 12pt;">des archives</span></strong></div>
<div  style="text-align: center;" class=alignCenter><span style="font-size: 12pt; color: black;">(<em>Journal
Officiel du 16&nbsp;juillet&nbsp;2008)</em></span></div>

<table border="1" >
        <tbody>
          <tr style="height: 33.55pt;">
            <td  width="151">
            <div  class=alignCenter align="center"><b ><span style="color: black;"><span style="color: rgb(204, 102, 204);">Nature des documents</span></span></b></div>
            <div  class=alignCenter align="center"><b ><span style="color: black;">&nbsp;</span></b></div>
            </td>
            <td >
            <div  class=alignCenter align="center"><b ><span style="color: black;"><span style="color: rgb(204, 102, 204);">Délai initial</span></span></b></div>

            <div  class=alignCenter><b ><span style="color: black;">&nbsp;</span></b></div>
            </td>
            <td >
            <div  class=alignCenter align="center"><b ><span style="color: black;"><span style="color: rgb(204, 102, 204);">Nouveau délai</span></span></b></div>
            <div  class=alignCenter align="center"><b ><span style="color: black;">&nbsp;</span></b></div>
            </td>
          </tr>
          <tr>

            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Vie priv&eacute;e</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">60
ans</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">50
ans</span></div>

            </td>
          </tr>
          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Actes des notaires</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">100
ans</span></div>

            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">75
ans</span></div>
            </td>
          </tr>
          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Archives des juridictions</span></div>

            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">100
ans</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">75
ans</span></div>
            </td>
          </tr>

          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Registres de naissance de
l’état civil</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">100
ans</span></div>
            </td>
            <td >

            <div  style="text-align: center;" align="center"><span style="color: black;">75
ans</span></div>
            </td>
          </tr>
          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Registres de mariage de
l’état civil</span></div>
            </td>
            <td >

            <div  style="text-align: center;" align="center"><span style="color: black;">100
ans</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">75
ans</span></div>
            </td>
          </tr>
          <tr>
            <td >

            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Registres de
décès de l’état civil</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">-</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">Immédiat</span></div>

            </td>
          </tr>
          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Tables décennales</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">100
ans</span></div>

            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">Immédiat</span></div>
            </td>
          </tr>
          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Questionnaires de recensement de la population</span></div>

            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">100 ans</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">75 ans</span></div>
            <div  style="text-align: center;" align="center"><span style="color: black;">&nbsp;</span></div>
            </td>

          </tr>
          <tr>
            <td >
            <div  style="text-align: center; line-height: 150%;" align="center"><span style="color: black;">Dossiers de personnels</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">120 ans</span></div>
            </td>

            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">75 ans</span></div>
            </td>
          </tr>
          <tr>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">Secret médical</span></div>
            </td>

            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">150 ans</span></div>
            </td>
            <td >
            <div  style="text-align: center;" align="center"><span style="color: black;">120 ans ou 25 ans à compter du décès</span></div>
            </td>
          </tr>

        </tbody>
      </table>

<?php
print("</div>");
print("</div>");
print("</div></body></html>");
 
?>

