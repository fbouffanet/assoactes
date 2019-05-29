<?php

require_once('Commun/constantes.php');
require_once('Commun/config.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');
require_once('Commun/phonex.cls.php');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$st_requete = "select libelle from patronyme where phonex is null";
$a_variantes= $connexionBD->sql_select($st_requete);

$i=0;
$oPhonex = new phonex;
foreach ($a_variantes as $st_patronyme)
{
	if (empty($st_patronyme))
          continue;   
    $oPhonex -> build ($st_patronyme);
    $sPhonex = $oPhonex -> sString;
	$a_params = array(':phonex'=>$sPhonex,':patronyme'=>$st_patronyme); 
	$st_requete = "update patronyme set phonex=:phonex where libelle=:patronyme";
	$connexionBD->initialise_params($a_params);
	$connexionBD->execute_requete($st_requete);
	if ($i==1000)
		print(sprintf("%d patronymes traites\n",$i*1000));
	$i++;		
}


?>