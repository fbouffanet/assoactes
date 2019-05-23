<?php

require_once 'config.php';
require_once 'constantes.php';


$lien_bd = mysql_connect($gst_serveur_bd , $gst_utilisateur_bd, $gst_mdp_utilisateur_bd);

if (!$lien_bd) {
  die('Connexion impossible : ' . mysql_error());
}

if (!mysql_select_db($gst_nom_bd))
{
  die("Impossible de choisir la base".mysql_error());
}
echo "Connecté correctement<br>\n";
$i_debut = time();

if ($_SERVER{'argc'}==2)
{
   $st_nom_fich= $_SERVER{'argv'}[1];
   $pf=fopen($st_nom_fich,"r") or die("Impossible de lire $st_nom_fich\n");
   $i_idf_groupe =0;
   $st_prev_majeure = '';
   $a_groupes_patros = array();
   while (!feof($pf))
   {      
      $st_ligne           = fgets($pf);
      if (preg_match("/^[ ]*$/",$st_ligne)) continue;
      list($st_nimv3,$st_homon,$st_majeure,$st_variante,$st_ajeter) = split(';',$st_ligne);
      if ($st_prev_majeure == '') 
      {
         $st_prev_majeure=$st_majeure;
         // Ajout de la majeure à la liste des variantes
         $a_groupes_patros[$st_majeure]=$i_idf_groupe;
      }
      if ($st_prev_majeure!=$st_majeure)
      {
         $i_idf_groupe++;
         $st_prev_majeure=$st_majeure;
         // Ajout de la majeure à la liste des variantes
         $a_groupes_patros[$st_majeure]=$i_idf_groupe;
      }
      $a_groupes_patros[$st_variante]=$i_idf_groupe;       
   }   
   fclose($pf);
   $st_nom_fich2 = $gst_rep_trav.'variantes.csv';
   print("F=$st_nom_fich2\n");
   $pf=fopen($st_nom_fich2,"w") or die("Impossible d'ecrire $st_nom_fich2\n");
   foreach ($a_groupes_patros as $st_patronyme  => $i_idf_groupe)
   {
      fwrite($pf,"$i_idf_groupe;$st_patronyme\n");
   }
   fclose($pf);
   $st_nom_fich2=addslashes($st_nom_fich2);
   $st_requete = "DELETE FROM variantes_patro";
   if (mysql_query($st_requete,$lien_bd)===FALSE)
    print(mysql_error());
   $st_requete = "LOAD DATA LOCAL INFILE '$st_nom_fich2' INTO TABLE variantes_patro FIELDS TERMINATED BY '".SEP_CSV."' LINES TERMINATED BY '".FDL_CSV."' (idf_groupe,patronyme)";
    if (mysql_query($st_requete,$lien_bd)===FALSE)
    print(mysql_error());
}


mysql_close($lien_bd);
$i_duree=time()-$i_debut;
print ("Duree = $i_duree s\n");
?>
