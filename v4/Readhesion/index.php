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
  Démarrage du programme
  ---------------------------------------------------------------------------*/
print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='$gst_url_site/Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='$gst_url_site/Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_url_site/Commun/menu.js' type='text/javascript'></script>");
print("<title>Re-Adhesion a l'AGC</title>");
print('</head>');

/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/
print('<body>');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

if(!isset($_SESSION['ident']))
   die("<div class=ERREUR> Identifiant non reconnu</div>");
$gst_ident = $_SESSION['ident'];

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$a_adh_agc= $connexionBD->sql_select_liste("select idf,nom, prenom,cp,pays, annee_cotisation from adherent where ident='$gst_ident'");
if (empty($a_adh_agc))
   die("<div class=ERREUR> Identifiant AGC non retrouv&eacute;</div>");
list($i_idf_agc,$st_nom_adh,$st_prenom_adh,$st_cp,$st_pays,$i_annee_cotisation)= $a_adh_agc;

list($i_sec,$i_min,$i_heure,$i_jour,$i_mois,$i_annee,$i_jsem,$i_jan,$b_hiv)= localtime();
$i_mois++;
$i_annee+=1900;

//FBO: à décommenter lorsque validé
if (($i_mois>10 && $i_annee_cotisation==$i_annee) ||  $i_annee_cotisation+1==$i_annee) 
//FBOif (true)
{
   print("<div class=accueil_centre>");
   print("<div class=TITRE>R&eacute;-Adh&eacute;sion</div>");
   print("<div class=IMPORTANT><br>Merci d'&eacute;viter le navigateur CHROME pour cette &eacute;tape (risque de perte de sessions)</div>");
   print("<div class=IMPORTANT>Si vous n'obtenez pas apr&egrave;s la validation de ce formulaire une page vous demandant votre choix de paiement, veuillez &eacute;galement v&eacute;rifier les r&eacute;glages de votre parefeu et de votre antivirus</div>");
   print("<form method=\"post\" action=\"$gst_url_adhesion/Payement.php\">");
   print("<div><br><table border=1>");
   print("<tr><th>Nom</th><td>$st_nom_adh</td></tr>");
   print("<tr><th>Pr&eacute;nom</th><td>$st_prenom_adh</td></tr>");
   print("<tr><th>Code Postal</th><td>$st_cp</td></tr>");
   print("<tr><th>Pays</th><td>$st_pays</td></tr>");
   print("</table><br></div>");
   $adherent = new Adherent($connexionBD,$i_idf_agc);
   print($adherent->formulaire_type_inscription($st_pays,$st_cp));
   print($adherent->formulaire_aides_possibles());
   print($adherent->formulaire_origine());
   print("<div align=center><input type=hidden name=type value=".TYPE_READHESION.">");
   print("<br><input type=submit value=\"Proceder au reglement\"></div>");
   print('</form></div>');
}
else
{
   $i_annee_readh = ($i_mois>10) ? $i_annee+1: $i_annee;
   print("<div class=IMPORTANT> La p&eacute;riode de r&eacute;-adh&eacute;sion s'ouvre en novembre $i_annee_readh</div>");
}

print('</body></html>');
?>