<?php

require_once('../Commun/config.php');
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VALIDATION_TD);
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/commun.php');

$st_delimiteur = ';';

$st_requete = "select c.nom,ca.nom,count(*) from acte a join commune_acte ca on (a.idf_commune=ca.idf) join canton c on (ca.idf_canton=c.idf) where a.idf_source=1  and a.idf_type_acte=1 and a.annee > 1794 and a.details_supplementaires=0 group by c.nom,ca.nom order by c.nom,ca.nom
";

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$a_nb_actes=$connexionBD->sql_select_multiple($st_requete);
if (count($a_nb_actes>0))
{
   $fp=fopen("php://output",'w') or die ("Impossible d'�crire le fichier en sortie");
   header('Content-Type: text/csv; charset=utf-8');
   header('Content-Disposition: attachment; filename=tdm_non_classees.csv');
   fputcsv($fp,array('Canton','Commune','Nombre d\'actes'),$st_delimiteur);
   foreach ($a_nb_actes as $a_ligne)
   {
      fputcsv($fp,$a_ligne,$st_delimiteur);
   }
   fclose($fp);
}  
?>
