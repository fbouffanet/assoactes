<?php
require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

$a_resultats = array();
if (isset ($_GET['term']))
{  
  if (get_magic_quotes_gpc())
  {
    if (ini_get('magic_quotes_sybase'))
       $st_rech = substr(trim($_GET['term']),0,30);
    else
      $st_rech = stripslashes(substr(trim($_GET['term']),0,30)); 
  }   
  else
    $st_rech = substr(trim($_GET['term']),0,30);  
  $st_rech=utf8_decode($st_rech);  
  $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $st_rech="$st_rech%";
  $connexionBD->initialise_params(array(':recherche'=>$st_rech));
  $st_requete = "select distinct patronyme from variantes_patro where `patronyme` COLLATE latin1_german1_ci like :recherche order by patronyme";
  $a_patros = $connexionBD->sql_select($st_requete);
  $a_resultats = array();
  foreach ($a_patros as $st_patro)
  {
     $a_val =array();
     $a_val['label'] = sprintf("%s",utf8_encode($st_patro));
     $a_val['value'] = sprintf("%s",utf8_encode($st_patro));      
     $a_resultats[] = $a_val;     
  }
}
echo json_encode($a_resultats); 
?>