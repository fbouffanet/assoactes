<?php

require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/phonex.cls.php');
   
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);


$st_requete = "select idf,libelle from prenom";
$a_prenoms= $connexionBD->liste_valeur_par_clef($st_requete);
$a_prenoms=array_unique($a_prenoms);

$st_requete = "select idf,libelle from prenom_simple";
$a_prenoms_simples= $connexionBD->liste_clef_par_valeur($st_requete);

$a_groupe_prenoms_avec_idf=array();
$a_groupe_prenoms_sans_idf=array();

foreach ($a_prenoms as $i_idf => $st_prenom)
{
	$a_champs = preg_split("/[,\s\/\=\&-]+/",$st_prenom);
  $a_champs = array_unique($a_champs);
	foreach ($a_champs as $st_champ)
	{
		$st_champ = preg_replace("/[\"\'\(\)]+/",'',$st_champ);
    if (!empty($st_champ))
			if (array_key_exists($st_champ,$a_prenoms_simples))
        if (array_key_exists($i_idf,$a_groupe_prenoms_avec_idf))
           $a_groupe_prenoms_avec_idf[$i_idf][]=$a_prenoms_simples[$st_champ];
        else
           $a_groupe_prenoms_avec_idf[$i_idf]=array($a_prenoms_simples[$st_champ]);
      else
         if (array_key_exists($i_idf,$a_groupe_prenoms_sans_idf))
           $a_groupe_prenoms_sans_idf[$i_idf][]=$st_champ;
        else
           $a_groupe_prenoms_sans_idf[$i_idf]=array($st_champ);
	}
}

$st_nom_fich = join(DIRECTORY_SEPARATOR,array($gst_repertoire_chargement_actes,'prenoms_simples.csv'));
$pf=fopen($st_nom_fich,"w") or die("Impossible d'ecrire $st_nom_fich\n");
$oPhonex = new phonex;
// Masque les erreurs Notice d'offset de la classe Phonex
error_reporting(E_ERROR | E_WARNING | E_PARSE);
foreach($a_groupe_prenoms_sans_idf as $i_idf => $a_prenoms)
{
    $oPhonex = new phonex;
    foreach ($a_prenoms as $st_prenom)
    { 
      if (!empty($st_prenom))
      {           
          $oPhonex -> build ($st_prenom);
          $sPhonex = $oPhonex -> sString;
          fwrite($pf,"$st_prenom;$sPhonex\n");
      }
    }
}
fclose($pf);
$st_nom_fich=addslashes($st_nom_fich);
//print($st_nom_fich);
$st_requete = "LOAD DATA INFILE '$st_nom_fich' IGNORE INTO TABLE prenom_simple CHARACTER SET latin1 FIELDS TERMINATED BY ';' LINES TERMINATED BY '\\n' (libelle,phonex) ";
print($st_requete);
$connexionBD->execute_requete($st_requete);

$st_requete = "select idf,libelle from prenom_simple";
$a_prenom_simples= $connexionBD->liste_clef_par_valeur($st_requete);

foreach($a_groupe_prenoms_sans_idf as $i_idf => $a_prenoms)
{
    foreach ($a_prenoms as $st_prenom)
    {
        if (array_key_exists($st_prenom,$a_prenom_simples))
        {
            if (array_key_exists($i_idf,$a_groupe_prenoms_avec_idf))
              $a_groupe_prenoms_avec_idf[$i_idf][]=$a_prenom_simples[$st_prenom];
            else
              $a_groupe_prenoms_avec_idf[$i_idf]=array($a_prenom_simples[$st_prenom]);
        }
    }
}

$st_nom_fich = join(DIRECTORY_SEPARATOR,array($gst_repertoire_chargement_actes,'groupe_prenoms.csv'));
$pf=fopen($st_nom_fich,"w") or die("Impossible d'ecrire $st_nom_fich\n");
foreach($a_groupe_prenoms_avec_idf as $i_idf_groupe => $a_idf_prenoms)
{
    foreach ($a_idf_prenoms as $i_idf_prenom)
    {
      //print("$i_idf_groupe;$i_idf_prenom\n");
      fwrite($pf,"$i_idf_groupe;$i_idf_prenom\n");
    }
}
fclose($pf);
$st_nom_fich=addslashes($st_nom_fich);
//print($st_nom_fich);
$st_requete = "LOAD DATA  INFILE '$st_nom_fich' IGNORE INTO TABLE groupe_prenoms FIELDS TERMINATED BY ';' LINES TERMINATED BY '\\n' (idf_prenom,idf_prenom_simple) ";
print($st_requete);
$connexionBD->execute_requete($st_requete);
	
?>