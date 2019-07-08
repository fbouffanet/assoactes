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
<div>Les bureaux de Burie, Chaux, Chevanceau, Montauziers, Saint-Aigulin et La Barde situ&eacute;s dans l'actuel d&eacute;partement de la Charente Maritime ne figurent pas sur cette carte</div>
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
require_once 'Commun/config.php';
require_once 'Commun/constantes.php';
require_once 'Commun/ConnexionBD.php';

$a_communes = array();
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);



$st_requete="select code_insee,numero_paroisse, nom,points_svg,bureau_controle,date_min_controle,date_max_controle from commune_acte where code_insee like '16%' order by code_insee,numero_paroisse";
$a_communes=  $connexionBD->liste_valeur_par_doubles_clefs($st_requete);

$fp = fopen("journal_carte_bureaux_controle.txt","w");

foreach ($a_communes as $i_idf_commune => $a_infos)
{
  $st_info_bulle ='';
  $st_est_bureau = false;
  foreach ($a_infos as $i_num_paroisse => $a_infos_commune)
  {
    list($st_commune,$st_points,$st_bureau_controle,$st_date_min_controle,$st_date_max_controle)=$a_infos_commune;
    if ($st_bureau_controle=='O')
    {
        $st_est_bureau = true;
        $st_info_bulle .= "$st_commune - Bureau de contrôle du $st_date_min_controle au $st_date_max_controle<br>\n";    
    }
    else
       $st_info_bulle .= "$st_commune - Pas de bureau de contrôle<br>\n"; 
  }
  if ($st_est_bureau)
    print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"coral\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
  else
    print("<polygon id=\"$i_idf_commune\" points=\"$st_points\" fill=\"lightgrey\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");  
}
fclose($fp);		
?>
</g>

</g>

</svg>
</div>
</body>
</html>