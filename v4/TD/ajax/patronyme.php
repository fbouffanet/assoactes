<?php

require_once('../../Commun/config.php');
require_once('../../Commun/constantes.php');
require_once('../../Commun/ConnexionBD.php');

$a_resultats = array();
if (isset ($_GET['term']))
{  
  $st_rech = substr(trim($_GET['term']),0,30);
  $st_rech=utf8_decode($st_rech);  
  $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $st_requete = "select distinct patronyme from stats_patronyme where nb_personnes>5 and patronyme COLLATE latin1_german1_ci like '$st_rech%' ";
  $a_patronymes = $connexionBD->sql_select($st_requete);
  $a_resultats = array();
  foreach ($a_patronymes as $st_patronyme)
  {
     $a_ligne =array();
     $a_ligne['label'] = utf8_encode($st_patronyme);
     $a_ligne['value'] = utf8_encode($st_patronyme);      
     $a_resultats[] = $a_ligne;     
  }
}
echo json_encode($a_resultats); 

?>
