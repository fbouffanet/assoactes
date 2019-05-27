
<?php

require_once '../Commun/config.php';
require_once('../Commun/ConnexionBD.php');

// Le fichier test.xml contient un document XML avec un élément racine
// et au moins un élément /[racine]/title.
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

if (file_exists('Carte_Communes_Avant_Fusion.svg')) {
    $xml = simplexml_load_file('Carte_Communes_Avant_Fusion.svg');
    /*print("<pre>");
    print_r($xml);
    print("</pre>");
    */
    foreach ($xml->g->g->polygon as $o_polygon)
    {
       //print("$i<br>");
       $st_id= $o_polygon->attributes()->id;
       if (preg_match('/^(\d+)/',$st_id,$a_champs) )
       {
          $i_id=$a_champs[1];
          $st_points=$o_polygon->attributes()->points;
          print(sprintf("id=%s=>%s<br>\n",$i_id,$st_points));
          $st_requete = "update commune_acte set points_svg='$st_points' where code_insee=$i_id ";
          $connexionBD->execute_requete($st_requete);
       }
    }
} else {
    exit('Echec lors de l\'ouverture du fichier Carte_Communes_Avant_Fusion.svg.');
}
?>
