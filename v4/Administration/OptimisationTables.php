<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');
require_once('../Commun/VerificationDroits.php');
require_once('../Commun/Benchmark.inc');

verifie_privilege(DROIT_CHARGEMENT);

require_once '../Commun/ConnexionBD.php';

/**
 * Affiche le menu de lancement
 * @param array $pa_tables Liste des tables à optimiser
 */
function affiche_menu($pa_tables) {
   print('<div CLASS=TITRE>Optimisation des tables MySql</div>');
   print('<div class=alignCenter><br>');
   print(implode('<br>',$pa_tables));
   print('<br>');
   print('<input type=hidden name=mode value="OPTIMISATION"></div>');
   print('<div class=alignCenter><br><input type="submit" value="Lancer l\'optimisation"/></div>');
}

/**
 * Optimise les tables MySql correspondantes
 * @param object $pconnexionBD Connection à la base des données
 * @param array $pa_tables Liste des tables à optimiser  
 */
function optimise_tables($pconnexionBD,$pa_tables) {
   print('<div class=alignCenter>');
   foreach ($pa_tables as $st_table) {
      $etape_prec = getmicrotime();
      $pconnexionBD->execute_requete("optimize table `$st_table`");
      print benchmark("Optimisation de la table $st_table");
   }
   print('<input type=hidden name=mode value="FORMULAIRE">');
   print("<br><input type=submit value=\"Menu Optimisation\"></div>");
   print('</div>');  
} 

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Optimisation des tables</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');
print('<body>');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$ga_tables = array('acte','chargement','commune_personne','personne','profession','stats_commune','stats_patronyme','tableau_kilometrique','type_acte','union','variantes_patro');
$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;
print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
switch($gst_mode)
{
   case 'FORMULAIRE' : 
       affiche_menu($ga_tables);
   break;
   
   case 'OPTIMISATION' :     
       optimise_tables($connexionBD,$ga_tables);
          
   break;
   
   default: print("mode inconnu : $gst_mode");
        
}

print('</form>');
print('</body></html>');


?>
