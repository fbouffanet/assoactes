<?php 
  header("Content-type: image/svg+xml"); 
  print('<?xml version="1.0" encoding="iso-8859-1"?>');
?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" 
  "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg width="1000" height="963" viewBox="-0.463154086 45.19163256 1.406483136 0.947332129999999"  preserveAspectRatio="none"
     xmlns="http://www.w3.org/2000/svg" version="1.1">

<style type="text/css" >
<![CDATA[

.communes { 
	fill           : #b9b9b9;
	fill-opacity   : 1;
	stroke         : white;
	stroke-opacity : 1;
	stroke-width   : 0.002;
}

]]>
</style>

<g transform="translate(0,46.13896469) scale(1,-1) translate(0,-45.19163256)">

<g class="communes">
<?php
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once '../Commun/ConnexionBD.php';
$a_communes = array();
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$st_requete = "select distinct idf,nom,points_svg,s_nai.annee_min as min_nai,s_nai.annee_max as max_nai,s_nai.nb_actes as nb_nai,s_mar.annee_min as min_mar,s_mar.annee_max as max_mar,s_mar.nb_actes as nb_mar from commune_acte ca left join stats_commune s_nai on (ca.idf=s_nai.idf_commune and s_nai.idf_type_acte=".IDF_NAISSANCE." and s_nai.idf_source=1) left join stats_commune s_mar on (ca.idf=s_mar.idf_commune and s_mar.idf_type_acte=".IDF_MARIAGE." and s_mar.idf_source=1) where points_svg is not null and code_insee like '16%'";
$a_communes=  $connexionBD->sql_select_multiple_par_idf($st_requete);

foreach ($a_communes as $i_idf_commune => $a_infos)
{
	list($st_commune,$st_points,$i_min_nai,$i_max_nai,$i_nb_nai,$i_min_mar,$i_max_mar,$i_nb_mar)=   $a_infos;
  if($i_nb_mar>0 && $i_nb_nai>0 && $i_max_nai>=1790 )  
   print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"midnightblue\"><title>$st_commune</title></polygon>\n");
  else
   print("<polygon id=\"$i_idf_commune\" points=\"$st_points\"><title>$st_commune</title></polygon>\n"); 
}	
?>
</g>

</g>

</svg>