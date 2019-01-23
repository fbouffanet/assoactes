<?
require_once 'Commun/config.php';
require_once('Commun/Identification.php');
require_once('Commun/constantes.php');
require_once 'Commun/commun.php';
require_once('Commun/ConnexionBD.php');
require_once('Commun/PaginationTableau.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/menu.js' type='text/javascript'></script>");
print('</head>');

/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'/>");

print("<body>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("Commun/menu.php");


echo("<img src=\"images/MenuMembre.JPG\">"); 
echo("<img src=\"images/reinscription.JPG\">"); 

print("</body>");
?>