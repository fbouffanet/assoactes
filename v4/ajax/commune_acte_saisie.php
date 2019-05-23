<?php

require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

$a_resultats = array();
if (isset ($_GET['term']))
{
  $st_rech = substr(trim($_GET['term']),0,30);
  $st_rech=utf8_decode($st_rech);  
  $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $st_requete = "select idf,nom,code_insee from commune_acte where nom COLLATE latin1_german1_ci like '%$st_rech%'";
  $a_communes = $connexionBD->sql_select_multiple_par_idf($st_requete);
  $a_resultats = array();
  foreach ($a_communes as $i_idf => $a_ligne)
  {
     list($st_commune,$i_insee) = $a_ligne;
     $a_val =array();
     $a_val['label'] = sprintf("%s (%5d)",utf8_encode($st_commune),$i_insee);
     $a_val['value'] = sprintf("%s (%5d)",utf8_encode($st_commune),$i_insee);      
     $a_resultats[] = $a_val;     
  }
}
echo json_encode($a_resultats); 

?>
