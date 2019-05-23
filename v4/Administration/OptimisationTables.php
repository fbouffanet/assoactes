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
 * @param array $pa_tables Liste des tables � optimiser
 */
function affiche_menu($pa_tables) {
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Optimisation des tables MySql</div>');
   print('<div class="panel-body">');
   print('<div class="align-center">');
   print(implode('<br>',$pa_tables));
   print('</div>');
   print('<input type=hidden name=mode value="OPTIMISATION"></div>');
   print('<button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">Lancer l\'optimisation</button>');
   print('</div></div>');
}

/**
 * Optimise les tables MySql correspondantes
 * @param object $pconnexionBD Connection � la base des donn�es
 * @param array $pa_tables Liste des tables � optimiser  
 */
function optimise_tables($pconnexionBD,$pa_tables) {
   print('<div class="align-center">');
   foreach ($pa_tables as $st_table) {
      $etape_prec = getmicrotime();
      $pconnexionBD->execute_requete("optimize table `$st_table`");
      print benchmark("Optimisation de la table $st_table");
   }
   print('</div>');
   print('<input type=hidden name=mode value="FORMULAIRE">');
   print('<button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">Menu Optimisation</button>');
     
} 

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Optimisation des tables</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('</head>');
print('<body>');
print('<div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$ga_tables = array('acte','chargement','commune_personne','patronyme','personne','prenom','profession','stats_commune','stats_patronyme','tableau_kilometrique','type_acte','union','variantes_patro');
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
print('</div></body></html>');


?>
