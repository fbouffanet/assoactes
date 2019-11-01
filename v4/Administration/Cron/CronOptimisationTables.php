<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once '/var/www/clients/client1/web3/web/v4/Commun/config.php';
require_once '/var/www/clients/client1/web3/web/v4/Commun/constantes.php';
require_once '/var/www/clients/client1/web3/web/v4/Commun/ConnexionBD.php';

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$ga_tables = array('acte','chargement','commune_personne','demandes_adherent','document','groupe_prenoms','modification_acte','modification_personne','patronyme','personne','photos','prenom','prenom_simple','profession','releveur','rep_not_actes','rep_not_desc','rep_not_variantes','source','stats_cnx','stats_commune','stats_patronyme','tableau_kilometrique','type_acte','type_presence','union','variantes_patro','variantes_prenom');


$st_texte = '';
foreach ($ga_tables as $st_table) {
  print("Table $st_table<br>");
  list($usec, $sec) = explode(" ",microtime());
  $i_temp_prec= (float)$usec + (float)$sec;
  $connexionBD->execute_requete("optimize table `$st_table`");
  list($usec, $sec) = explode(" ",microtime());
$i_temp_cour= (float)$usec + (float)$sec;
  $st_texte .= sprintf("Optimisation de <b>%s</b> en %d ms<br>\n",strtoupper($st_table),$i_temp_cour-$i_temp_prec);
  $st_texte .= sprintf("Derniere erreur SQL=%s <br>\n",$connexionBD->msg_erreur());
}


//
$st_entete  = 'MIME-Version: 1.0' . "\r\n";    
$st_entete .= 'Content-type: text/html; charset=cp1252' . "\r\n";
$st_entete .= "From: FB <genefreb@neuf.fr>\r\n";
mail('genefreb@neuf.fr', "Cron Optimisation V4 termin�", $st_texte, $st_entete);  
//mail('genefreb@neuf.fr,fbouffanet@yahoo.fr', "Cron Optimisation V4 termin�", $st_texte, $st_entete);   
$connexionBD->ferme();

print("Script termin�<br>");

?>
