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
?>
    <!DOCTYPE html>
<html >
  <head>
<?php  
    print("<title>API Geoportail - $st_commune </title>");
?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
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
<div align=center><img src="./images/LogoAGC.jpg"></div><br>
<?php

    print("<div align=center>".htmlentities($st_commune,ENT_COMPAT,'cp1252')."</div><br>\n");
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
var APIkey= "cervpkrr0dboxq0t5hnw1jbm"; //Changement de la cl� 25/10/2016 //FP 
//var APIkey= "ehy2f6q20wxy93lyvkchxetb"; 
// Clef de test apr�s
//const APIkey = "pyn3zoiee6xv53fcm140sdun";
 
                
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
    // on attend que les classes soient charg�es
    if (checkApiLoading('loadAPI();',['OpenLayers','Geoportal','Geoportal.Viewer','Geoportal.Viewer.Default'])===false) {
        return;
    }
    
    Geoportal.GeoRMHandler.getConfig([APIkey], null,null, {
        onContractsComplete: initMap
    });
}

// assign callback when "onload" event is fired
// assignation de la fonction � appeler lors de la lev�e de l'�v�nement "onload"
window.onload= loadAPI;
    
  <!-- -->
  </script>


  
</div><br></div><div align=center><Input type=button value="Fermer la fenetre" OnClick="javascript:window.close()"></div>


<script type="text/javascript" src="http://api.ign.fr/geoportail/api/js/latest/GeoportalExtended.js"></script>  
<script type="text/javascript" src="js/utils.js"></script>     
 
  </body>
</html>
