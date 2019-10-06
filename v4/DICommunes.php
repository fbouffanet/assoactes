<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once('Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('Commun/VerificationDroits.php');
verifie_privilege(DROIT_UTILITAIRES);
require_once 'Commun/ConnexionBD.php';

require_once('Commun/commun.php');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

if (isset($_SESSION['ident']))
{

$st_requete  = "select distinct date_format(di.date_demande , \"%d/%m/%Y\" ), di.idf_acte,demandeur.nom,demandeur.prenom, ca.nom,aa.patronyme from demande_information di join acte a on (di.idf_acte=a.idf) join personne p on (p.idf_acte=a.idf) join variantes_patro vp1 on (p.patronyme=vp1.patronyme) join alertes_adherent aa on (aa.idf_commune=di.idf_commune) join variantes_patro vp2 on (aa.patronyme=vp2.patronyme and vp2.idf_groupe=vp1.idf_groupe) join commune_acte ca on (di.idf_commune=ca.idf) join adherent adht on (aa.idf_adherent=adht.idf) join adherent as demandeur on (di.idf_demandeur=demandeur.idf)where p.idf_type_presence=1 and di.idf_demandeur!=aa.idf_adherent and datediff(now(),di.date_demande)<=180 and adht.ident='".$_SESSION['ident']."' group by di.date_demande";

header("Content-type: text/csv");
header("Expires: 0");
header("Pragma: public");
header("Content-disposition: attachment; filename=\"meme_recherches.csv\"");

$a_liste_recherches=$connexionBD->sql_select_multiple($st_requete);
$fh = @fopen('php://output', 'w' );       
if (count($a_liste_recherches)>0)
{
     fputcsv($fh, array("Date Demande","Idf Acte","Nom Demandeur","Prenom Demandeur","Paroisse","Patronyme"),SEP_CSV); 
     foreach ($a_liste_recherches as $a_ligne)
     {
       fputcsv($fh, $a_ligne,SEP_CSV);           
     }
     fclose($fh);
} 
}
?>