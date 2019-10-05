<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../commun_indexation.php');

$a_resultats = array();
if (isset ($_GET['idf_reg']))
{
	$i_idf_registre = (int) $_GET['idf_reg'];
	$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
	$st_requete = "select idf_acte,date,date_rep,table_idx,type_acte, parties from (select idf_acte,date,date_rep,'C' as table_idx,`type_acte`,concat(prenom_epx,' ',patronyme_epx,' X ',prenom_epse,' ',patronyme_epse) as parties from indexation_td_couple where idf_registre=$i_idf_registre union select idf_acte,date,date_rep,'C' as table_idx,`type_acte`,concat(prenom,' ',patronyme,' (',sexe,')') as parties from indexation_td_personne where idf_registre=$i_idf_registre ) actes_idx order by idf_acte desc limit 15";
	$a_actes = $connexionBD->sql_select_multiple($st_requete);
	$a_resultats = array();
	foreach ($a_actes as $a_acte)
	{
		list($i_idf_acte,$st_date,$st_date_rep,$st_table,$st_type_acte,$st_parties)=$a_acte;
		$a_val['idf_acte'] = $i_idf_acte;
		$a_val['date'] = utf8_encode($st_date);
    $a_val['date_rep'] = utf8_encode($st_date_rep);
    $a_val['table'] = utf8_encode($st_table);
		$a_val['type_acte'] = utf8_encode($st_type_acte);
    $a_val['parties'] = utf8_encode($st_parties);		 
		$a_resultats[] = $a_val;     
	}
}
echo json_encode($a_resultats); 
?>