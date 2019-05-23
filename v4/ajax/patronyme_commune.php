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
  $i_idf_source = isset($_GET['idf_source']) ? (int) $_GET['idf_source']: null;   
  $i_idf_commune = isset($_GET['idf_commune']) ? (int) $_GET['idf_commune']: null; 
  $i_idf_type_acte = isset($_GET['idf_type_acte']) ? (int) $_GET['idf_type_acte']: null;
  $a_clauses = array();
  if (!is_null($i_idf_source) && $i_idf_source!=-1 )
     $a_clauses[]= "idf_source=$i_idf_source";
  if (!is_null($i_idf_commune) && $i_idf_commune!=-1)
     $a_clauses[]= "idf_commune=$i_idf_commune"; 
  if (!is_null($i_idf_type_acte) && $i_idf_type_acte!=-1)
     $a_clauses[]= "idf_type_acte=$i_idf_type_acte";       
  $st_rech=utf8_decode($st_rech);  
  $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $st_rech="$st_rech%";
  $connexionBD->initialise_params(array(':recherche'=>$st_rech)); 
  if (count($a_clauses)==0)
    $st_requete = "select distinct patronyme from stats_patronyme where patronyme COLLATE latin1_german1_ci like :recherche order by patronyme";
  else
  {
    $st_clauses = implode(' and ',$a_clauses);
    $st_requete = "select distinct patronyme from stats_patronyme where  patronyme COLLATE latin1_german1_ci like :recherche and $st_clauses order by patronyme";
  }
  //print("Req=$st_requete<br>");
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