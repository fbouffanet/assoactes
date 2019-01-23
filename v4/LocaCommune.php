<?php

require_once('Commun/config.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');

$gf_pi=3.14159265359;

if (isset($_GET['idf_commune']))
{
  $gi_idf_commune = (int) $_GET['idf_commune'];
}

else
 die("Erreur: L'identifiant de commune est manquant");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

try {
    list($st_commune,$f_lat_rad,$f_lon_rad)=$connexionBD->sql_select_liste("select nom, latitude,longitude from commune_acte where idf=$gi_idf_commune");
    if (is_null($st_commune))
    {
       $error = "Cette commune n'existe pas";
       throw new Exception($error);
    }
    $f_lat_deg=$f_lat_rad*180/$gf_pi;
    $f_lon_deg=$f_lon_rad*180/$gf_pi;
    
}
catch (Exception $e) {
    die("ERREUR : $e");
}

print("<Head>\n");
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
</script>');
print("<script type='text/javascript'>");

print("function initialize() {");
print("  var CentreCarte = new google.maps.LatLng($f_lat_deg, $f_lon_deg);");
?>
  var optionsCarte = {
    zoom: 13,
    center: CentreCarte,
    mapTypeId: google.maps.MapTypeId.TERRAIN  
  }
  var Carte = new google.maps.Map(document.getElementById("map_canvas"), optionsCarte);
	
	var optionsMarqueur = {
		position: CentreCarte,
		map: Carte,
<?php		
		print("title: \"$st_commune\"\n");
?>
	}
  var marqueur = new google.maps.Marker(optionsMarqueur);
}
  
function loadScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize";
  document.body.appendChild(script);
}
  
window.onload = loadScript;
<?php
print("</script>");
print('</Head>');

print('<body onload="initialize()">');
print("<div align=center><img src=\"./images/LogoAGC.jpg\"></div><br>");
print("<div align=center>");
print('<div  id="map_canvas"  style="width:40%; height:50% "></div>');
print("</div>");
print("<br><div align=center><Input type=button value=\"Fermer la fenetre\" OnClick=\"javascript:window.close()\"></div>");
print('</body>');


?>