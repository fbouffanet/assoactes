<?php

$gst_chemin = "../";
//$gst_chemin = ($_SERVER['HTTP_HOST']=='adherents.genea16.net')? dirname($_SERVER['DOCUMENT_ROOT'])."/v4/Site": dirname($_SERVER['DOCUMENT_ROOT'])."/Site";
//$gst_chemin = "";
//print_r($_SERVER);
//print($gst_chemin);
//require_once("$gst_chemin/Commun/config.php");
//require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/Identification.php");
require_once("$gst_chemin/Commun/commun.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/Adherent.php");                      

/*---------------------------------------------------------------------------
  D�marrage du programme
  ---------------------------------------------------------------------------*/
print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='$gst_url_site/css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='$gst_url_site/css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='$gst_url_site/css/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_url_site/js/bootstrap.min.js' type='text/javascript'></script>"); 

print("<title>Re-Adhesion a l'AGC</title>");
print('</head>');

/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/
print('<body>');
print('<div class="container">');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

if(!isset($_SESSION['ident']))
   die("<div class=\"alert alert-danger\"> Identifiant non reconnu</div>");
$gst_ident = $_SESSION['ident'];

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$a_adh_agc= $connexionBD->sql_select_liste("select idf,nom, prenom,cp,pays, annee_cotisation from adherent where ident='$gst_ident'");
if (empty($a_adh_agc))
   die("<div class=\"alert alert-danger\"> Identifiant AGC non retrouv&eacute;</div>");
list($i_idf_agc,$st_nom_adh,$st_prenom_adh,$st_cp,$st_pays,$i_annee_cotisation)= $a_adh_agc;

list($i_sec,$i_min,$i_heure,$i_jour,$i_mois,$i_annee,$i_jsem,$i_jan,$b_hiv)= localtime();
$i_mois++;
$i_annee+=1900;

//FBO: � d�commenter lorsque valid�
if (($i_mois>10 && $i_annee_cotisation==$i_annee) ||  $i_annee_cotisation+1==$i_annee) 
//FBOif (true)
{
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">R&eacute;-Adh&eacute;sion</div>');
   print('<div class="panel-body">');
   print("<form method=\"post\" action=\"$gst_url_adhesion/Payement.php\">");
   print("<div class=\"alert alert-danger\">Merci d'&eacute;viter le navigateur CHROME pour cette &eacute;tape (risque de perte de sessions)</div>");
   print("<div class=\"alert alert-warning\">Si vous n'obtenez pas apr&egrave;s la validation de ce formulaire une page vous demandant votre choix de paiement, veuillez &eacute;galement v&eacute;rifier les r&eacute;glages de votre parefeu et de votre antivirus</div>");
   
   print('<div class="row">');
   print('<div class="form-group col-md-6">');
   print("<label for=\"nom_adht\" class=\"col-md-2 col-form-label\">Nom</label>");
   print("<div class=\"col-md-4\"><input type=\"text\" readonly class=\"form-control-plaintext\" id=\"nom_adht\" value=\"$st_nom_adh\"></div>");
   print('</div>');
   print('<div class="form-group col-md-6">');
   print("<label for=\"prenom_adht\" class=\"col-md-2 col-form-label\">Pr&eacute;nom</label>");
   print("<div class=\"col-md-4\"><input type=\"text\" readonly class=\"form-control-plaintext\" id=\"prenom_adht\" value=\"$st_prenom_adh\"></div>");
   print('</div>');
   print('</div>');

   print('<div class="row">');
   print('<div class="form-group col-md-6">');
   print("<label for=\"cp_adht\" class=\"col-md-2 col-form-label\">Code Postal</label>");
   print("<div class=\"col-md-4\"><input type=\"text\" readonly class=\"form-control-plaintext\" id=\"cp_adht\" value=\"$st_cp\"></div>");
   print('</div>');
   print('<div class="form-group col-md-6">');
   print("<label for=\"pays_adht\" class=\"col-md-2 col-form-label\">Pays</label>");
   print("<div class=\"col-md-4\"><input type=\"text\" readonly class=\"form-control-plaintext\" id=\"pays_adht\" value=\"$st_pays\"></div>");
   print('</div>');
   print('</div>');

   $adherent = new Adherent($connexionBD,$i_idf_agc);
   print($adherent->formulaire_type_inscription($st_pays,$st_cp));
   print($adherent->formulaire_aides_possibles());
   print($adherent->formulaire_origine());
   print("<input type=hidden name=type value=".TYPE_READHESION.">");
   print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Proc&eacute;der au r&egrave;glement</button>');
   print('</form></div></div>');
}
else
{
   $i_annee_readh = ($i_mois>10) ? $i_annee+1: $i_annee;
   print("<div class=\"alert alert-danger\"> La p&eacute;riode de r&eacute;-adh&eacute;sion s'ouvre en novembre $i_annee_readh</div>");
}

print('</div></body></html>');
?>