<?php
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('<title>Actes en vrac AGC: Philippe Nexon</title>');
print("</head>");

print("<body>");
print('<div class="container">');
//print("Vous etes authentifi&eacute; :-)<br>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$connexionBD->ferme();
?>
<div class= "container-fluid" >
<h1>Actes notari&eacute;s de <a href="mailto:pnexon@free.fr">M Philippe NEXON</a></h1>
<h2>Contrats de Mariages.</h2>
<h4><big><b><u><a name="Me DEREIX et MENUT">Mes DEREIX et MENUT</a></u></b></big></h4>
<h4><ul type="disc">

<li>le 21/12/1757 à Rougnac , Mes DEREIX et MENUT , 2E4796</li>

<li>Jean et jacques NEXON , fils de françois (charpentier) et marie MESTAYER , demeurants à la faye paroisse de Gardes avec Marie et catherine DAYRE , filles de jean (maréchal) et marie PERROT , demeurants au village de cussac paroisse de Rougnac .</li>
<li>le 15/01/1761 à Rougnac , Me DEREIX et DUMONT , 2E4797</li>
<li>Estienne NEXON , fils de françois et marie MESTAYER ,demeurants à la faye avec marguerite FAURE , fille de jacques (dcd) et gabrielle GUILHON , demeurants au village de cussac .</li>
<li>le 17/01/1790 à Rougnac , Me DEREIX à lavalette , 2E19524</li>
<li>Jean NEXON , fils de étienne (dcd) et marguerite FAURE , demeurant à cussac avec marguerite FORESTIER , fille de léonard (dcd) et catherine BAZELY (dcd) , demeurants à lémerie paroisse de Rougnac ( avec son curateur guillaume FORESTIER ) .</li>
<li>le 05/03/1696 , Me DUMONTET à Dignac 2E2741</li>
<li>entre françois VALLADON et Marguerite NEXON , fille jean (dcd) et anne DESBOUCHAUD présents : jean et françois ses fréres , léonarde DUPON belle-soeur</li>
<li>le 03/05/1696 , Me DEREIX à gardes , 2E2963</li>
<li>entre henri VIDAUD et toinette NEXON , fille de Pierre et marie CHAIGNEAU</li>

<li>le 02/02/1699 , Me DEREIX à gardes , 2E2964</li>
<li>entre jean  NEXON (voiturier) , fils de Pierre (dcd) et françoise ROUDY(?) et antoinette DUMAS</li>
<li>le 04/04/1699 , Me DEREIX à gardes , 2E2964</li>
<li>entre etienne BARDY et françoise NEXON , fille de pierre et marie CHAIGNEAUX .</li>
<li>le 15/011777 , Me DEREIX  , 2E?</li>
<li>entre jean JULIEN , fils de Pierre et jeanne MENUT et marie NEXON fille de jean et antoinette ROY</li>
<li>le 17/05/1779 , Me DEREIX à Rougnac 2E4804</li>
<li>entre françois NEXON , fils de Léonard et marie ARTAUD (dcd) et antoinette DELAGE , fille de jean et catherine DAVID</li>
<li>le 08/02/1781 , Me LANAUVE à Lavalette 2E19588</li>

<li>entre jean NEXON , fils de jean (dcd) et marie DAYRE et françoise BOUYER , fille de antoine et jeanne LAVAUD</li>
<li>le 06/07/1792 , Me DEREIX à Lavalette 2E19524</li>
<li>entre françois NEXON , fils de jacques et catherine DAYRES et marie CAMPOT , fille de jean et jeanne CHARLES .</li>
<h2>Testament</h2>
<li>le 30/01/1694 , Me DEREIX à gardes , 2E2963</li>
<li>de jean NEXON à jeanne RUDEIX ?</li>
<h2>Partage</h2>
<li>1703 , Me DEREIX à gardes , 2E2965</li>
<li>partage entre les NEXON/CHAIGNEAU/BARDY/VIDAUD</li>

<p>&nbsp;</p>
</div>
</body>
</html>

