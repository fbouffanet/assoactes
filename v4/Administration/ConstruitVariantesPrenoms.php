<?php

require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/phonex.cls.php');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$st_requete = "select libelle from prenom_simple";
$a_prenoms_simples =$connexionBD->sql_select($st_requete);

$gi_precision = 8;

setlocale(LC_CTYPE, 'fr_FR.UTF8');
$oPhonex = new phonex;
$ga_phonex_sans_accents = array();
$ga_phonex_avec_accents = array();
$ga_correspondances = array();
foreach ($a_prenoms_simples as $st_prenom_avec_accents)
{
	$st_prenom_sans_accents = iconv("cp1252", "ASCII//TRANSLIT",$st_prenom_avec_accents);
	$oPhonex -> build ($st_prenom_avec_accents);
    $sPhonex_prenom = $oPhonex -> sString;
	$i_phonex_prenom_sans_accents =  intval(round($sPhonex_prenom * pow(10,$gi_precision)));
	if ($st_prenom_avec_accents==$st_prenom_sans_accents)
	{
		// le prénom ne contient pas de caractères particuliers
		$ga_phonex_sans_accents[$i_phonex_prenom_sans_accents][]=$st_prenom_sans_accents;
	}
	else
	{
		// le prénom contient des caractères particuliers
		$oPhonex -> build ($st_prenom_avec_accents);
		$sPhonex_prenom_avec_accents = $oPhonex -> sString;
		$i_phonex_prenom_avec_accents =  intval(round($sPhonex_prenom_avec_accents * pow(10,$gi_precision)));
		$ga_phonex_avec_accents[$i_phonex_prenom_avec_accents][]=$st_prenom_avec_accents;
	}
}

$st_nom_fich = join(DIRECTORY_SEPARATOR,array($gst_repertoire_chargement_actes,'variantes_prenoms.csv'));
$pf=fopen($st_nom_fich,"w") or die("Impossible d'ecrire $st_nom_fich\n");
$gi_idf_groupe=1;
foreach ($ga_phonex_sans_accents as $i_phonex => $a_prenoms)
{
  $a_prenoms_a_ecrire  = $a_prenoms;
	if (array_key_exists($i_phonex,$ga_phonex_avec_accents))
	{
  	$a_prenoms_a_ecrire=array_merge($a_prenoms_a_ecrire,$ga_phonex_avec_accents[$i_phonex]);
  }
  if (count($a_prenoms_a_ecrire)>1)
  {
    foreach ($a_prenoms_a_ecrire as $st_prenom)
		{
			fwrite($pf,"$gi_idf_groupe;$st_prenom\n");
		}
  }
	$gi_idf_groupe++;
}

foreach ($ga_correspondances as $i_idf_phonex => $a_autres_variantes)
{
  if (!array_key_exists($i_idf_phonex,$ga_phonex_sans_accents))
  {
		  foreach ($a_autres_variantes as $i_idf_phonex_avec_accents)
		  {
         $a_variantes =  $a_prenoms_avec_accents[$i_idf_phonex_avec_accents];
         if (count($a_variantes)>0)
         {
            foreach ($a_variantes as $st_prenom)
            {
              fwrite($pf,"$gi_idf_groupe;$st_prenom\n");
		        }
         }
      }
  }
}

fclose($pf);

$st_nom_fich = addslashes($st_nom_fich);
$st_requete = "LOAD DATA INFILE '$st_nom_fich' INTO TABLE variantes_prenom CHARACTER SET latin1 FIELDS TERMINATED BY ';' LINES TERMINATED BY '\\n' (idf_groupe,libelle)";
$connexionBD->execute_requete($st_requete);
?>