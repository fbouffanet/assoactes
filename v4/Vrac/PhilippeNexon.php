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
<h1>Actes notari&eacute;s de <a href="mailto:pnexon@free.fr">M Philippe NEXON</a></h1>
<h1>Contrats de Mariages.</h1>
<h4><big><b><u><a name="M�DEREIX et MENUT">M�DEREIX et MENUT</a></u></b></big></h4>
<h4><ul type="disc">

<li>le 21/12/1757 � Rougnac , M�DEREIX et MENUT , 2E4796</li>

<li>Jean et jacques NEXON , fils de fran�ois (charpentier) et marie MESTAYER , demeurants � la faye paroisse de Gardes avec Marie et catherine DAYRE , filles de jean (mar�chal) et marie PERROT , demeurants au village de cussac paroisse de Rougnac .</li>
<li>le 15/01/1761 � Rougnac , M�DEREIX et DUMONT , 2E4797</li>
<li>Estienne NEXON , fils de fran�ois et marie MESTAYER ,demeurants � la faye avec marguerite FAURE , fille de jacques (dcd) et gabrielle GUILHON , demeurants au village de cussac .</li>
<li>le 17/01/1790 � Rougnac , M�DEREIX � lavalette , 2E19524</li>
<li>Jean NEXON , fils de �tienne (dcd) et marguerite FAURE , demeurant � cussac avec marguerite FORESTIER , fille de l�onard (dcd) et catherine BAZELY (dcd) , demeurants � l�merie paroisse de Rougnac ( avec son curateur guillaume FORESTIER ) .</li>
<li>le 05/03/1696 , M� DUMONTET � Dignac 2E2741</li>
<li>entre fran�ois VALLADON et Marguerite NEXON , fille jean (dcd) et anne DESBOUCHAUD pr�sents : jean et fran�ois ses fr�res , l�onarde DUPON belle-soeur</li>
<li>le 03/05/1696 , M�DEREIX � gardes , 2E2963</li>
<li>entre henri VIDAUD et toinette NEXON , fille de Pierre et marie CHAIGNEAU</li>

<li>le 02/02/1699 , M� DEREIX � gardes , 2E2964</li>
<li>entre jean  NEXON (voiturier) , fils de Pierre (dcd) et fran�oise ROUDY(?) et antoinette DUMAS</li>
<li>le 04/04/1699 , M� DEREIX � gardes , 2E2964</li>
<li>entre etienne BARDY et fran�oise NEXON , fille de pierre et marie CHAIGNEAUX .</li>
<li>le 15/011777 , M� DEREIX  , 2E?</li>
<li>entre jean JULIEN , fils de Pierre et jeanne MENUT et marie NEXON fille de jean et antoinette ROY</li>
<li>le 17/05/1779 , M� DEREIX � Rougnac 2E4804</li>
<li>entre fran�ois NEXON , fils de L�onard et marie ARTAUD (dcd) et antoinette DELAGE , fille de jean et catherine DAVID</li>
<li>le 08/02/1781 , M� LANAUVE � Lavalette 2E19588</li>

<li>entre jean NEXON , fils de jean (dcd) et marie DAYRE et fran�oise BOUYER , fille de antoine et jeanne LAVAUD</li>
<li>le 06/07/1792 , M� DEREIX � Lavalette 2E19524</li>
<li>entre fran�ois NEXON , fils de jacques et catherine DAYRES et marie CAMPOT , fille de jean et jeanne CHARLES .</li>
<h1>Testament</h1>
<li>le 30/01/1694 , M� DEREIX � gardes , 2E2963</li>
<li>de jean NEXON � jeanne RUDEIX ?</li>
<h1>Partage</h1>
<li>1703 , M� DEREIX � gardes , 2E2965</li>
<li>partage entre les NEXON/CHAIGNEAU/BARDY/VIDAUD</li>

<p>&nbsp;</p>
</div>
</body>
</html>

