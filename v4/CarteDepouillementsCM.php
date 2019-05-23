<html>
<head>
<link rel="stylesheet" type="text/css" href="Commun/tooltipster.bundle.min.css"/>
<link rel="stylesheet" type="text/css" href="Commun/tooltipster-sideTip-light.min"/>
<script type="text/javascript" src="Commun/jquery-min.js"></script>
<script type="text/javascript" src="js/tooltipster.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('.tooltip').tooltipster({
        theme: 'tooltipster-light',
        contentAsHTML: true
        });
    });
</script>
 
</head> 
<body>
<table border=1>
<tr><th>Nombre de liasses</th></tr>
<tr><td bgcolor="lightgrey">Pas de liasses</td></tr>
<tr><td bgcolor="MediumOrchid">Aucun relev&eacute; AGC</td></tr>
<tr><td bgcolor="LemonChiffon">Entre  et 5 % relev&eacute;s</td></tr>
<tr><td bgcolor="yellow">Entre 6 et 10 % relev&eacute;s</td></tr>
<tr><td bgcolor="Tomato">Entre 11 et 30 % relev&eacute;s</td></tr>
<tr><td bgcolor="coral">Entre 31 et 60 % relev&eacute;s</td></tr>
<tr><td bgcolor="brown">Entre 61 et 80 % relev&eacute;s</td></tr>
<tr><td bgcolor="maroon"><font color="white">Plus de 80% relev&eacute;s</font></td></tr>
</table>
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

</style>>

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
require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once 'Commun/ConnexionBD.php';



$a_communes = array();
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$st_requete="SELECT ca.code_insee,ca.numero_paroisse,count(DISTINCT replace(cote,' ','')) FROM commune_acte ca join `acte` on (acte.idf_commune=ca.idf) WHERE annee<=1792 and idf_type_acte=".IDF_CM." group by ca.code_insee,ca.numero_paroisse";
$a_nb_liasses_cm= $connexionBD->liste_valeur_par_doubles_clefs($st_requete);

$st_requete="select ca.code_insee,ca.numero_paroisse, count(*) as nb_liasses from commune_acte ca left join liasse_notaire ln on (ln.idf_commune_etude=ca.idf) left join liasse_dates ld on (ln.idf=ld.idf) where ld.annee_fin_periode<=1792 group by ca.code_insee,ca.numero_paroisse";
$a_nb_liasses=  $connexionBD->liste_valeur_par_doubles_clefs($st_requete);

$st_requete="select code_insee,numero_paroisse, nom,points_svg from commune_acte where code_insee like '16%' order by code_insee,numero_paroisse";
$a_communes=  $connexionBD->liste_valeur_par_doubles_clefs($st_requete);
foreach ($a_communes as $i_idf_commune => $a_infos)
{
  $st_info_bulle ='';
  $i_nb_tot_liasses = 0;
  $i_nb_tot_liasses_cm = 0;
  foreach ($a_infos as $i_num_paroisse => $a_infos_commune)
  {
    list($st_commune,$st_points)=$a_infos_commune;    
    if (isset($a_nb_liasses[$i_idf_commune][$i_num_paroisse]))
    {
       $i_nb_liasses =$a_nb_liasses[$i_idf_commune][$i_num_paroisse][0];
       $i_nb_tot_liasses+=$i_nb_liasses;
       if (isset($a_nb_liasses_cm[$i_idf_commune][$i_num_paroisse]))
       {
          $i_nb_liasses_releves = $a_nb_liasses_cm[$i_idf_commune][$i_num_paroisse][0];
          $i_nb_tot_liasses_cm+= $i_nb_liasses_releves;
          $st_info_bulle .= "$st_commune - $i_nb_liasses_releves/$i_nb_liasses liasses relevees<br>\n"; 
       }
       else   
          $st_info_bulle .= "$st_commune - $i_nb_liasses liasses<br>\n"; 
    }
    else
    {
      $st_info_bulle .= "$st_commune - pas de liasses<br>\n";            
    }
  }
  if ($i_nb_tot_liasses==0)
    print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"lightgrey\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
  else
  {  
     if ($i_nb_tot_liasses_cm==0)
        print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"MediumOrchid\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
     else
     {
        $f_perc = $i_nb_tot_liasses_cm/$i_nb_tot_liasses*100;
        if ($f_perc<=5)  
          print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"LemonChiffon\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
        else if ($f_perc<=10)
          print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"yellow\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
        else if ($f_perc<=30)
          print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"Tomato\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
        else if ($f_perc<=60)
          print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"coral\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
        else if ($f_perc<=80)
          print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"brown\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");   
        else 
          print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"maroon\" class=\"tooltip\" title=\"$st_info_bulle\"></polygon>\n");
     }        
  }  
}
	
?>
</g>

</g>

</svg>
</body>
</html>