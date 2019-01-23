<?php

require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_UTILITAIRES);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/AffichageActe.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>MAJ Annee Prem Insc</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');



/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);



print("<body>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");


$st_requete = "select idf,annee_cotisation,infos_agc from adherent where annee_premiere_adhesion=0 order by idf";

$a_adh = $connexionBD->sql_select_multiple_par_idf($st_requete);    
foreach ($a_adh as $i_idf_adh => $a_ligne)
{
   list($i_annee_cotisation,$st_infos)=$a_ligne;
   $a_annees = array();
   preg_match('/\d{4}/',$st_infos,$a_annees);
   if (count($a_annees)>0)
   {
      list($i_annee)=$a_annees;
      $st_requete = "update adherent set annee_premiere_adhesion=$i_annee where idf=$i_idf_adh";
   }
   else
   {
      $st_requete = "update adherent set annee_premiere_adhesion=$i_annee_cotisation where idf=$i_idf_adh";
   }
   $connexionBD->execute_requete($st_requete);
   print($i_idf_adh." ($i_annee_cotisation)=>".join(',',$a_annees)."<br>");
}    
print("</body></html>");

?>
