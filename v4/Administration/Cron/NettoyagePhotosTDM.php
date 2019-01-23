<?php
// repertoire a nettoyer
$gst_repertoire= $_SERVER['DOCUMENT_ROOT'].'/v4/TD/photos'; 
$gi_delai_suppression=14*86400; // en secondes
 
$repertoire = opendir($gst_repertoire);
 
while (false !== ($st_nom_fichier = readdir($repertoire)))
{
  $st_fichier = "$gst_repertoire/$st_nom_fichier";
  $i_age_fichier = time() - filemtime($st_fichier);
  if ($st_nom_fichier != ".." AND $st_nom_fichier != "." AND !is_dir($st_fichier) and $i_age_fichier>$gi_delai_suppression)
  unlink($st_fichier);
    //print("$st_fichier: $i_age_fichier s<br>");   
}
