<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once '../Commun/ConnexionBD.php';
require_once './chargement/Patronyme.php';

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$requete = 'select patronyme from personne where patronyme not in (select libelle from patronyme)';
$a_patronymes = $connexionBD->sql_select($requete);
$o_patronyme = Patronyme::singleton($connexionBD);
foreach ($a_patronymes as $st_patronyme)
{
	$o_patronyme->ajoute($st_patronyme);
}
$o_patronyme -> sauve();

?>
