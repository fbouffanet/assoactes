<?php
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

print("<head>");
print('<link rel="shortcut icon" href="../images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('<title>Base AGC: Actes en vrac</title>');
print("</head>");

print("<body>");
print('<div class="container">');
//print("Vous etes authentifi&eacute; :-)<br>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$connexionBD->ferme();
?>

<div class=TITRE>Actes notariés en vrac</div>


<h2 style="text-align:left">Acte divers dans les <a href="FabriceBouffanet.php">Cantons de Mansle et St-Amant de Boixe</a></h2>
<dir>
<li>Actes notariés relevés par <a href="mailto:fbouffanet@yahoo.fr">Fabrice BOUFFANET</a></li>
</dir>
<h2 style="text-align:left">Acte divers &agrave; <a href="Jean-LouisDars.php">Angoul&ecirc;me </a></h2>
<dir>
<li>Actes notariés relevés par <a href="mailto:jldars@orange.fr">Jean-Louis DARS</a></li>
</dir>
<h2 style="text-align:left">Acte divers &agrave; <a href="AntoineDorcier.php">La Rochefoucauld </a></h2>
<dir>
<li>Actes notariés relevés par <a href="mailto:antoine.dorcier@gmail.com">Antoine DORCIER</a></li>
</dir>
<h2 style="text-align:left">Acte divers &agrave; Rougnac, Dignac, Villebois <a href="PhilippeNexon.php">Derieix et Menut</a></h2>
<dir>
<li> Actes notariés relevés par <a href="mailto:pnexon@free.fr">Philippe NEXON</a></li>
</dir>
<h2 align=left style="text-align:left">Actes notariés de la <a href="CM_CharenteMaritime.php">Charente Maritime</a></h2>
<h2 align=left style="text-align:left">Ils se sont mariés en <a href="Migrants.php">Indre & Loire</a></h2>
<div class=TITRE>Recensement</div>
<h2 style="text-align:left">Recensement d’Angoulême 1936 <a href="1936 _Ang_1er_canton.php">1936 _Ang_1er_canton</a></h2>
<dir>
<li>Recensement relevé par Jean Patrick BAZILLE</li>
</dir>
</div>
</body>
</html>

