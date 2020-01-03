<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/Identification.php');

require_once('../Commun/ConnexionBD.php');
require_once('../Commun/commun.php');


print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('<title>Migration des Utilisateurs ExpoActes</title>');
print('</head>');
print('<body>');
print('<div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
if (file_exists('prefixe_tables_EA.txt'))
{
	$gst_prefixe_table = file_get_contents('prefixe_tables_EA.txt');
	$st_requete =  sprintf("insert into adherent(ident,prenom,nom,email_perso,email_forum,mdp,statut,annee_cotisation,date_premiere_adhesion,date_paiement,confidentiel,prix,infos_agc,type_origine,description_origine,jeton_paiement,clef_nouveau_mdp) select login,prenom,nom,email,email,hashpass,'I',year(now()),ifnull(dtcreation,curdate()),ifnull(dtcreation,curdate()),'O',15,'',0,'','',0
	from %s_user3",$gst_prefixe_table);
	try
	{					
		$connexionBD->execute_requete($st_requete);
	}
	catch (PDOException $e) {
		die("<div class=\"alert alert-danger\">Impossible de migrer les utilisateurs ".$e->getMessage()."</div>"); 
	}
	print("<div class=\"alert alert-success\">Migration des utilisateurs effectu&eacute;e</div>");
}
else
	print("<div class=\"alert alert-danger\">Erreur: Le pr&eacute;fixe 'prefixe_ea_bd' n'est pas d&eacute;fini !</div>");	
print('</div></body></html>');
?>	