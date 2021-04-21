<?php
require ('Geneabank.inc');
Gbk_session_start(); 
require_once('../v4/Commun/config.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/constantes.php');
require_once('commun_gbk.php');
require_once('AffichageActe.php');

print('<!DOCTYPE html>');
print("<head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'>");
print("<title>Geneabank ".SIGLE_ASSO.": Recherches</title>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
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
print('<form>');

function entre_quotes($pst_chaine)
{
   return "'$pst_chaine'";
}

$str = verifJetonGbk();

print("<div class='alert alert-info'>>Vos r&eacute;ponses</div>");
if (! $str) 
{
  print("<div class='alert alert-danger'>D&eacute;sol&eacute;, mais je ne peux afficher les actes dans ce contexte.</div>");	 
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
    print("<textarea cols=100 rows=40>");
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
    print("</textarea>");   
  }
  else
  {
	print("<div class='alert alert-danger'>Actes Généabank absents</div>");  
  }
}

print('<div class="form-row">');
print('<div class="btn-group col-md-6 col-md-offset-4" role="group">');
print('<a href="index.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span> Revenir &agrave; la page de recherche</a>');
print('</div>'); // fin btn-group
print('</div>'); //fin ligne
print('</form>');

print('</div>'); // fin panel body
print("<div class=\"panel-footer text-center\"><a href=\"$gst_url_site\">".LIB_ASSO."</a></div>");
print('</div>'); // fin panel primary

print('</div>'); // fin div container
print("</body></html>");  

?>
