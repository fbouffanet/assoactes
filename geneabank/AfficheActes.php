<?php

require ('Geneabank.inc');

Gbk_session_start(); 

require_once('../v4/Commun/config.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/constantes.php');
require_once('AffichageActe.php');
require_once('commun_gbk.php');

print('<!DOCTYPE html>');
print("<Head>\n");
print('<meta http-equiv="content-language" content="fr" /> ');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'/>");
print('</Head>');

print('<body>');
print('<div class=alignCenter>');
print('<a href="http://www.genea16.net"><img src="images/logo_AGC250.jpg" border="0" width="100" height="100"></a><img src="http://www.geneabank.org/pictures/logo4.jpg" width="233" height="104">');
print('</div><br>');

print('<div class="PAVE">Registres de l\'Association G&eacute;n&eacute;alogique de la Charente</a></div><br>');

function entre_quotes($pst_chaine)
{
   return "'$pst_chaine'";
}

$str = verifJetonGbk();

print("<br><div class=PAVE>Vos r&eacute;ponses</div><br>");
if (! $str) 
{ 
  echo "<p><b>D&eacute;sol&eacute;, mais je ne peux afficher les actes dans ce contexte.</b></p>";  
}
else
{
  if (isset($_SESSION['actes_gbk']))
  {
    $a_actes = $_SESSION['actes_gbk'];
    $a_requete_actes = array_map('entre_quotes',$a_actes);
    $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
    $st_requete = "select idf,idf_commune,idf_type_acte from acte where idf in (".join(',',$a_requete_actes).")";
    $a_description_actes=$connexionBD->sql_select_multiple_par_idf($st_requete);
    print("<div class=alignCenter><textarea cols=100 rows=40>");
    $a_commune_personne=$connexionBD->liste_valeur_par_clef("select idf, nom from commune_personne");
    $a_profession=$connexionBD->liste_valeur_par_clef("select idf, nom from profession");
    $a_type_acte=$connexionBD->liste_valeur_par_clef("select idf, nom from type_acte");
    foreach ($a_actes as $i_idf_acte)
    { 
      list($i_idf_commune,$i_idf_type_acte) = $a_description_actes[$i_idf_acte];
      switch ($i_idf_type_acte)
      {
         case IDF_NAISSANCE: list($st_description,$st_commentaires)=description_naissance($connexionBD,$a_profession,$i_idf_acte);
         print("$st_description\n");
         print("$st_commentaires\n");
         break;
         case IDF_DECES: list($st_description,$st_commentaires)=description_deces($connexionBD,$a_profession,$a_commune_personne,$i_idf_acte); 
         print("$st_description\n");
         print("$st_commentaires\n");
         break;
         default:  list($st_description_acte,$st_permalien)=description_mariage_ou_divers($connexionBD,$a_type_acte,$a_profession,$a_commune_personne,$i_idf_acte);
            print("$st_description_acte\n");
      }
      print(str_repeat('-',80));
      print("\n");
      $connexionBD->execute_requete("insert into stats_gbk(date_demande,idf_commune,idf_type_acte) values(now(),'$i_idf_commune','$i_idf_type_acte')");
    }
    print("</textarea></div>");   
  }
  else
  {
    print("<div class=ERREUR>Actes Généabank absents</div>");
  }
}
print("<form action=index.php method=post>");
print("<br><div class=alignCenter><input type=submit value=\"Revenir &agrave; la page de recherche\"></div>"); 
print("</form>");
print('<br><div class=alignCenter><a href="http://www.genea16.net" class=LienAGC>Association G&eacute;n&eacute;alogique de la Charente</a></div>');
print("</body>");

