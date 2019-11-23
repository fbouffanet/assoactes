<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
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
?>
<!DOCTYPE html>

<head>
<meta http-equiv="content-language" content="fr">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='css/styles.css' type='text/css' rel='stylesheet'>
<link href='css/bootstrap.min.css' rel='stylesheet'>
<script src='js/jquery-min.js' type='text/javascript'></script>
<script src='js/bootstrap.min.js' type='text/javascript'></script>
<script type='text/javascript'>
$(document).ready(function() {
	$("#ferme").click(function(){
		window.close();
	});	
});
</script>

<?php  
    print("<title>API Geoportail - $st_commune </title>");
?>
    <style type="text/css"><!--/*--><![CDATA[/*><!--*/
    div#viewerDiv {
        width:800px;
        height:600px;
        background-color:white;
        background-image:url(http://api.ign.fr/geoportail/api/js/2.0.0/theme/geoportal/img/loading.gif);
        background-position:center center;
        background-repeat:no-repeat;
    }
    div#code {
        margin:0px 0px 10px 0px;
        width:800px;
        position:relative;
        left:0px;
        top:0px;
        text-align:justify;
        font-size: 0.75em;
        font-style: italic;
        
    }
    /*]]>*/--></style>

  </head>
  <body>
  <div class="container">
<div class="text-center"><img src="<?php print($gst_logo_association); ?>"></div>
<?php

    print("<div class=\"text-center\">".htmlentities($st_commune,ENT_COMPAT,'cp1252')."</div><br>\n");
?> 
<div align=center>
    <div  id="viewerDiv"></div>
    <div id='code'>

    <script type="text/javascript">
    
 /**
 * Property: key
 *
 * The API key to use
 */
var APIkey= "<?php echo CLEF_API_GEOPORTAIL; ?>";

 
                
/**
 * Property: viewer
 * {<Geoportal.Viewer>} the viewer global instance.
 */
viewer= null;

/**
 * Function: initMap
 * Load the application. Called when all information have been loaded by
 * <loadAPI>().
 */
function initMap() {
   
    // ----- Traduction
    translate();

    // ----- Options
    
    var options= {
        territory:'FXX',
	      mode:'normal'
    };

    viewer= new Geoportal.Viewer.Default('viewerDiv', OpenLayers.Util.extend(
        options,
        // API keys configuration variable set by <Geoportal.GeoRMHandler.getConfig>
        // variable contenant la configuration des clefs API remplie par <Geoportal.GeoRMHandler.getConfig>
        window.gGEOPORTALRIGHTSMANAGEMENT===undefined? {'apiKey':APIkey} : gGEOPORTALRIGHTSMANAGEMENT)
    );
    if (!viewer) {
        // problem ...
        OpenLayers.Console.error(OpenLayers.i18n('new.instance.failed'));
        return;
    }
   
    // ----- Layers
    //viewer.openLayersPanel(true);
    //viewer.addGeoportalLayer('GEOGRAPHICALGRIDSYSTEMS.CASSINI',{});
    viewer.addGeoportalLayers(['GEOGRAPHICALGRIDSYSTEMS.MAPS','GEOGRAPHICALGRIDSYSTEMS.CASSINI'],{'GEOGRAPHICALGRIDSYSTEMS.CASSINI':{visibility:true}});	
    //--FBO TEST
    // ----- Autres
	viewer.getMap().setCenterAtLonLat(<?php echo $f_lon_deg;?>,<?php echo $f_lat_deg;?>,13);
}

/**
 * Function: loadAPI
 * Load the configuration related with the API keys.
 * Called on "onload" event.
 * Call <initMap>() function to load the interface.
 */
function loadAPI() {
    // wait for all classes to be loaded
    // on attend que les classes soient chargées
    if (checkApiLoading('loadAPI();',['OpenLayers','Geoportal','Geoportal.Viewer','Geoportal.Viewer.Default'])===false) {
        return;
    }
    
    Geoportal.GeoRMHandler.getConfig([APIkey], null,null, {
        onContractsComplete: initMap
    });
}

// assign callback when "onload" event is fired
// assignation de la fonction à appeler lors de la levée de l'évènement "onload"
window.onload= loadAPI;
    
  <!-- -->
  </script>

  
<div class="form-row">
<button type="button" id=ferme class="btn btn-warning col-xs-4 col-xs-offset-4">Fermer la fen&ecirc;tre</button>
</div>'


<script type="text/javascript" src="http://api.ign.fr/geoportail/api/js/latest/GeoportalExtended.js"></script>  
<script type="text/javascript" src="js/utils.js"></script>     

</div> 
</body>
</html>
