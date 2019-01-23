<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/phonex.cls.php');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$ga_prenoms = $connexionBD->liste_valeur_par_clef("select idf,libelle from `prenom`");

foreach ($ga_prenoms as $i_idf => $st_prenom)
{
   if (!empty($st_prenom))
   {
      $oPhonex = new phonex;   
      $oPhonex -> build ($st_prenom);
      $sPhonex = trim($oPhonex -> sString);
      $st_requete = "update prenom set phonex=$sPhonex where idf=$i_idf";
      print("Req=$st_requete\n");
      $connexionBD->execute_requete($st_requete); 
   }
}

?>