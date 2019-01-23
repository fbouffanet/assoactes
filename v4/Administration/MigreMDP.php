<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once '../Commun/ConnexionBD.php';

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$ga_mdp = $connexionBD->liste_valeur_par_clef("select idf,mdp from `adherent`");

foreach ($ga_mdp as $i_idf => $st_mdp)
{
  $st_mdp_hash = password_hash($st_mdp, PASSWORD_DEFAULT);
  $st_requete = "update adherent set mdp='$st_mdp_hash' where idf=$i_idf";
  print("Req=$st_requete\n");
  $connexionBD->execute_requete($st_requete); 
}

?>