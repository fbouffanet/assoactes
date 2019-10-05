<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
if ($_REQUEST['sid']) session_id($_REQUEST['sid']); 

require_once('../Commun/config.php');
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

if (isset($_GET['idf_reg']) && isset($_GET['type_releve'])  && isset ($_GET['idf_acte']))
{
	$i_idf_registre = (int) $_GET['idf_reg'];
	$i_idf_acte = (int) $_GET['idf_acte'];
  $c_type_releve =  substr($_GET['type_releve'],0,1);
  $st_requete='';
  switch ($c_type_releve)
  {
    case 'C':
      $st_requete = "delete from `indexation_td_couple` where idf_registre=$i_idf_registre and idf_acte=$i_idf_acte"; 
    break;
    case 'P':
      $st_requete = "delete from `indexation_td_personne` where idf_registre=$i_idf_registre and idf_acte=$i_idf_acte";
    break;
    default:
      echo "Type de releve $c_type_releve inconnu";
  }
	if (!empty($st_requete))
  {
    $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
	  $connexionBD->execute_requete($st_requete);
  }
} 
else
{
	echo "Pas d'identifiant de registre, de type de releve et/ou d'actes spécifiés";	
}	
?>