<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

require_once '/var/www/clients/client1/web3/web/v4/Commun/config.php';
require_once '/var/www/clients/client1/web3/web/v4/Commun/constantes.php';
require_once '/var/www/clients/client1/web3/web/v4/Commun/ConnexionBD.php';

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$i_nb_cnx=$connexionBD->sql_select1("select count(*) from adherent where date(derniere_connexion)=date(DATE_SUB(now(), INTERVAL 1 DAY))");

$connexionBD->execute_requete("insert into stats_cnx(date,nbre) values(DATE_SUB(now(),INTERVAL 1 DAY),'$i_nb_cnx')");

$connexionBD->ferme();

print("Script terminé<br>");

?>
