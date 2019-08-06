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

/*
* Renvoie le minimum des 3 valeurs (vide si une des valeurs n'est pas définie)
* @param integer $i1
* @param integer $i2
* @param integer $i3 
*/
function min3val($i1,$i2,$i3)
{
  $i_min = 0;
  if (!empty($i1) && !empty($i2))
  {
     $i_min = $i1<$i2 ? $i1 : $i2;
     if (!empty($i3))
        $i_min = $i_min<$i3 ? $i_min : $i3;
  }
  else if (!empty($i2) && !empty($i3))
  {
     $i_min = $i2<$i3 ? $i2 : $i3;
      if (!empty($i1))
        $i_min = $i_min<$i1 ? $i_min : $i1;
  }
  else if (!empty($i1) && !empty($i3))
  {
     $i_min = $i1<$i3 ? $i1 : $i3;
      if (!empty($i2))
        $i_min = $i_min<$i2 ? $i_min : $i2;
  }
  else
    $i_min=$i3;
  return (int) $i_min;  
}

/*
* Renvoie la chaine intervalle d'années correspondant au type d'acte
* @param string $pst_type (B|M|S) type du relevé
* @param integer $pi_annnee_min année minimale
* @param integer $pi_annnee_max année maximale 
*/
function chaine_intervalle($pst_type,$pi_annnee_min,$pi_annee_max)
{
   if (!empty($pi_annnee_min) && !empty($pi_annee_max))
      return " $pst_type $pi_annnee_min-$pi_annee_max";
   else
      return '';
}

$a_communes = array();
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$fp = fopen("journal_carte.txt","w");
$st_requete = "select distinct ca.code_insee,ca.numero_paroisse,nom,debut_communale,debut_greffe,points_svg,s_nai.annee_min as min_nai,s_nai.annee_max as max_nai,s_nai.nb_actes as nb_nai,s_mar.annee_min as min_mar,s_mar.annee_max as max_mar,s_mar.nb_actes as nb_mar,s_dec.annee_min as min_dec,s_dec.annee_max as max_dec,s_dec.nb_actes as nb_dec,chtiers.statut from commune_acte ca left join stats_commune s_nai on (ca.idf=s_nai.idf_commune and s_nai.idf_type_acte=".IDF_NAISSANCE." and s_nai.idf_source=1) left join stats_commune s_mar on (ca.idf=s_mar.idf_commune and s_mar.idf_type_acte=".IDF_MARIAGE." and s_mar.idf_source=1) left join stats_commune s_dec on (ca.idf=s_dec.idf_commune and s_dec.idf_type_acte=".IDF_DECES." and s_dec.idf_source=1) left join documents doc on (ca.idf=doc.id_commune and doc.fourchette like '1%' and left(doc.fourchette,4)<1789 and (doc.type_acte&1!=0 or doc.type_acte&2!=0 or doc.type_acte&4!=0)) left join chantiers chtiers on (doc.idf=chtiers.id_document and chtiers.statut=1) where protestants='N' and points_svg is not null and ca.sans_rp='N'and code_insee like '16%' order by ca.nom,chtiers.statut ";
fwrite($fp,"$st_requete\n");
$a_communes=  $connexionBD->liste_valeur_par_doubles_clefs($st_requete);

foreach ($a_communes as $i_insee => $a_infos)
{
  $st_info_bulle = '';
  $b_depouillement_complet=true;
  $b_depouillement_mariage=true;
  $b_depouillement_divers=false; 
  foreach ($a_infos as $i_num_paroisse => $a_infos_commune)
  {
	   list($st_commune,$i_deb_communale,$i_deb_greffe,$st_points,$i_min_bap,$i_max_bap,$i_nb_bap,$i_min_mar,$i_max_mar,$i_nb_mar,$i_min_sep,$i_max_sep,$i_nb_sep,$i_statut)=   $a_infos_commune;     
     if (!empty($i_deb_communale) && !empty($i_deb_greffe))      
        $i_min_reg = $i_deb_communale < $i_deb_greffe ? (int) $i_deb_communale : (int) $i_deb_greffe;
     else if (!empty($i_deb_communale))
        $i_min_reg=(int) $i_deb_communale;
     else if (!empty($i_deb_greffe))
        $i_min_reg=(int) $i_deb_greffe;
     else
        $i_min_reg=0;       
     $i_min_dep = min3val($i_min_bap,$i_min_mar,$i_min_sep);
     $st_info_bulle.="$st_commune";
     $st_info_bulle.=chaine_intervalle('B',$i_min_bap,$i_max_bap);
     $st_info_bulle.=chaine_intervalle('M',$i_min_mar,$i_max_mar);
     $st_info_bulle.=chaine_intervalle('S',$i_min_sep,$i_max_sep);
     $st_info_bulle.="<br>";
     fwrite($fp,sprintf("$st_commune,Deb Com=$i_deb_communale,Deb Greffe=$i_deb_greffe,Min Reg=$i_min_reg,Min Dep=$i_min_dep\n"));
     if (empty($i_min_dep))
     {
        $b_depouillement_complet= false;
        fwrite($fp,"Pas complet (Min Dep=$i_min_dep)\n");
     }
     if (!empty($i_min_reg) && !empty($i_min_dep))
     {
        if ($i_min_dep>$i_min_reg+10)
        {
           $b_depouillement_complet= false;              
           fwrite($fp,sprintf("Pas complet Min Dep %d > Min Reg %d\n",$i_min_dep,$i_min_reg));
        }
     }        
     if (!empty($i_max_bap) && !empty($i_max_sep) && ($i_max_bap<1787||$i_max_sep<1787))
     {
        $b_depouillement_complet= false;
        fwrite($fp,sprintf("Pas complet Max Bap %d > Max Sep %d\n",$i_max_bap,$i_max_sep));    
     }
     if (!empty($i_min_bap) && !empty($i_min_sep) && !empty($i_min_mar)) 
     {
        $i_min_bap_sep =  $i_min_bap>$i_min_sep ? $i_min_sep : $i_min_bap;
        if (abs($i_min_mar-$i_min_bap_sep)>100)
        {
           $b_depouillement_complet= false;
           fwrite($fp,sprintf("Pas complet Min Bap Sep %d  Min Mar %d > 100 ans\n",$i_min_bap_sep,$i_min_mar));
        }         
     }
     if (!empty($i_nb_bap) || !empty($i_nb_sep))
        $b_depouillement_divers=true;
     else
        if ($i_nb_mar==0||$i_max_mar<1790)
            $b_depouillement_mariage=false;   
    
  }
  if (!empty($i_statut) && $i_statut==1)
  {
     print("<polygon id=\"$i_insee\" points=\"$st_points\" fill=\"chartreuse\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
  }
  else
  {
    if ($b_depouillement_complet)
      print("<polygon id=\"$i_insee\" points=\"$st_points\" fill=\"midnightblue\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
    else
      if ($b_depouillement_divers)
        print("<polygon id=\"$i_insee\" points=\"$st_points\" fill=\"darkturquoise\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");
      else
        if ($b_depouillement_mariage)
          print("<polygon id=\"$i_insee\" points=\"$st_points\" fill=\"lightskyblue\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");      
        else
          print("<polygon id=\"$i_insee\" points=\"$st_points\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-html=\"true\" title=\"$st_info_bulle\"></polygon>\n");  
   }
}
fclose($fp);	
?>
</g>

</g>

</div>
</body>
</html>