<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');
require_once('../Commun/VerificationDroits.php');

verifie_privilege(DROIT_UTILITAIRES);

require_once '../Commun/ConnexionBD.php';

$st_fich_temp = tempnam ($gst_repertoire_telechargement, "test.csv");
$pf=@fopen($st_fich_temp,"w");
if ($pf===FALSE)
throw new Exception("Ecriture fichier test.csv impossible");
fwrite($pf,"$st_type_acte;$st_sigle\n");
fclose($pf);
?>
