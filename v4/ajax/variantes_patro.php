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
       $st_rech = substr(trim($_GET['term']),0,35);
    else
      $st_rech = stripslashes(substr(trim($_GET['term']),0,35)); 
  }   
  else
    $st_rech = substr(trim($_GET['term']),0,35);  
  $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  $st_rech=utf8_decode($st_rech); 
  //$st_rech="$st_rech%";
   
  $connexionBD->initialise_params(array(':recherche'=>$st_rech));
  $st_requete = "select idf_groupe,patronyme,majeure from variantes_patro like :recherche  order by majeure desc";
  $a_patros = $connexionBD->sql_select_multiple($st_requete);
  $a_variantes_patros = array();
  $st_majeure= '';
  if (count($a_patros)>0)
  {	
    list($i_idf_groupe,$st_majeure,$st_majeure) = array_shift(($a_patros);  
	foreach ($a_patros as  $a_ligne)
	{
     list($i_idf_groupe,$st_patronyme,$st_majeure)  =  $a_ligne;
	   $a_variantes_patros[]=utf8_encode($st_patronyme);
     if (array_key_exists($i_idf_groupe,$a_resultats))
         $a_resultats[$i_idf_groupe][]=utf8_encode($st_patronyme);         
     else
         $a_resultats[$i_idf_groupe]=array(utf8_encode($st_patronyme));       
	}
  }  
}
$a_retour = array();
$i_nb_resultats = count($a_resultats);
$a_retour['nb_reponses']= $i_nb_resultats;
if ($i_nb_resultats==1)
{
  $a_clefs = array_keys($a_resultats);
  $a_valeurs = array_values($a_resultats);
  $a_retour['idf_groupe']=$a_clefs[0];
  $a_retour['majeure']=$st_majeure;
  $a_retour['variantes']=array_unique($a_valeurs[0]);
}
else
  $a_retour['variantes']=$a_variantes_prenom;	
echo json_encode($a_retour); 
?>