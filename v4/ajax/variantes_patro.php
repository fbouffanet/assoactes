<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
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
  $st_requete = "select distinct vp1.idf_groupe,vp1.patronyme,vp1.majeure from variantes_patro vp1 join variantes_patro vp2 on (vp1.idf_groupe=vp2.idf_groupe) where vp2. patronyme like :recherche  order by majeure desc";
  $a_patros = $connexionBD->sql_select_multiple($st_requete);
  $a_variantes_patros = array();
  $st_majeure= '';
  if (count($a_patros)>0)
  {	
    list($i_idf_groupe,$st_patronylme_majeur,$st_majeure) = array_shift($a_patros);  
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
  $a_retour['idf_groupe']=$i_idf_groupe;
  $a_retour['majeure']=$st_patronylme_majeur;
  $a_retour['variantes']= $a_variantes_patros;
}
else
  $a_retour['variantes']=$a_variantes_patros;	
echo json_encode($a_retour); 
?>