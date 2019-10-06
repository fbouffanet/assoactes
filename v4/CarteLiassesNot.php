<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<script type="text/javascript" src="js/jquery-min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $(function () {
			$('[data-toggle="tooltip"]').tooltip({
			'container': 'body'
			})
		});
	});	
</script> 
</head> 
<body>
<div class="container">
<table border=1>
<tr><th>Nombre de liasses</th></tr>
<tr><td bgcolor="lightgrey">Pas de liasses</td></tr>
<tr><td bgcolor="LemonChiffon">Entre 1 et 5 liasses</td></tr>
<tr><td bgcolor="yellow">Entre 6 et 10 liasses</td></tr>
<tr><td bgcolor="Tomato">Entre 11 et 30 liasses</td></tr>
<tr><td bgcolor="coral">Entre 31 et 80 liasses</td></tr>
<tr><td bgcolor="brown">Entre 81 et 150 liasses</td></tr>
<tr><td bgcolor="maroon"><font color="white">Plus de 150 liasses</font></td></tr>
</table>
<div>Les libell&eacute;s sont positionn&eacute;s correctement uniquement sous Chrome</div>
<?php print('<?xml version="1.0" encoding="windows-1252"?>'); ?>
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="1000"
   height="963"
   viewBox="-0.463154086 45.19163256 1.406483136 0.947332129999999"
   preserveAspectRatio="none"
   version="1.1"
   id="svg2"
   inkscape:version="0.48.4 r9939"
   sodipodi:docname="Blank_Map_of_Charente_Department,_France,_with_Communes.svg">
  <metadata
     id="metadata418">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <defs
     id="defs416" />
  <sodipodi:namedview
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1"
     objecttolerance="10"
     gridtolerance="10"
     guidetolerance="10"
     inkscape:pageopacity="0"
     inkscape:pageshadow="2"
     inkscape:window-width="1863"
     inkscape:window-height="1056"
     id="namedview414"
     showgrid="false"
     inkscape:zoom="0.66627953"
     inkscape:cx="885.14972"
     inkscape:cy="473.05589"
     inkscape:window-x="57"
     inkscape:window-y="24"
     inkscape:window-maximized="1"
     inkscape:current-layer="g8" />
  <style
     type="text/css"
     id="style4">

.communes { 
	fill           : #b9b9b9;
	fill-opacity   : 1;
	stroke         : white;
	stroke-opacity : 1;
	stroke-width   : 0.002;
}

</style>

<g transform="translate(0,46.13896469) scale(1,-1) translate(0,-45.19163256)">
    <!-- Generator: Sketch 3.8.3 (29802) - http://www.bohemiancoding.com/sketch -->
    <defs>
        <rect id="path-1" x="0" y="0" width="768" height="447"></rect>
        <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="768" height="447" fill="white">
            <use xlink:href="#path-1"></use>
        </mask>
    </defs>

<g class="communes">
<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once 'Commun/ConnexionBD.php';

$a_nb_liasses= array();
$a_communes = array();
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$st_requete="select ca.code_insee,ca.numero_paroisse, count(*) as nb_liasses from commune_acte ca left join liasse_notaire ln on (ca.idf=ln.idf_commune_etude) left join liasse_dates ld on (ln.idf=ld.idf) where ld.annee_fin_periode<=1792 group by ca.code_insee, ca.numero_paroisse order by ca.idf,ca.numero_paroisse";
$a_nb_liasses=  $connexionBD->liste_valeur_par_doubles_clefs($st_requete);

$st_requete="select code_insee,numero_paroisse, nom,points_svg from commune_acte where code_insee like '16%' order by code_insee,numero_paroisse";
$a_communes=  $connexionBD->liste_valeur_par_doubles_clefs($st_requete);

$fp = fopen("journal_carte_liasses_not.txt","w");

foreach ($a_communes as $i_idf_commune => $a_infos)
{
  $st_info_bulle ='';
  $i_nb_tot_liasses = 0;
  foreach ($a_infos as $i_num_paroisse => $a_infos_commune)
  {
    list($st_commune,$st_points)=$a_infos_commune;    
    if (isset($a_nb_liasses[$i_idf_commune][$i_num_paroisse]))
    {
       $i_nb_liasses =$a_nb_liasses[$i_idf_commune][$i_num_paroisse][0];
       fwrite($fp," $st_commune - $i_nb_liasses liasses\n");
       $i_nb_tot_liasses+=$i_nb_liasses;
       $st_info_bulle .= "$st_commune - $i_nb_liasses liasses<br>\n"; 
    }
    else
    {
      $st_info_bulle .= "$st_commune - pas de liasses<br>\n";            
      fwrite($fp," $st_commune - pas de liasses\n");
    }
  }
  if ($i_nb_tot_liasses==0)
    print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"lightgrey\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
  else
  {  
    if ($i_nb_tot_liasses<=5)  
       print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"LemonChiffon\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
    else if ($i_nb_tot_liasses<=10)
       print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"yellow\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
    else if ($i_nb_tot_liasses<=30)
         print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"Tomato\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
    else if ($i_nb_tot_liasses<=80)
       print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"coral\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
    else if ($i_nb_tot_liasses<=150)
       print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"brown\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");   
    else 
       print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"maroon\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");      
  }  
}
fclose($fp);		
?>
</g>

</g>

</svg>
</div>
</body>
</html>