<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CHARGEMENT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');

print('<!DOCTYPE html>');
print("<head>");
print("<title>Gestion des communes</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");

print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");

print("<link href='../Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>"); 
?>
<script type='text/javascript'>
$(document).ready(function() {

$("#edition_commune").validate({
  rules: {
		nom_commune: "required",
    code_insee:  {
      "required": true,
      "integer": true
    },
    num_paroisse:  {
      "required": true,
      "integer": true
    },
    longitude:  {
      "number": true
    },
    latitude:  {
      "number": true
    },
    date_min_controle: {
       "dateITA": true
    },
    date_max_controle: {
       "dateITA": true
    }
  },
  messages: {
		nom_commune: {
			required: "Le nom de commune est obligatoire"
		},
    code_insee: {
      required: "Le code insee est obligatoire",
      integer: "Le code insee doit être un entier"
    },
    num_paroisse: {
      required: "Le numéro de paroisse est obligatoire",
      integer: "Le numéro de paroisse doit être un entier"
    },
    longitude: {
       number:  "La longitude doit être un nombre(Exemple: 0.098625643597231)"
    },
    latitude: {
       number:  "La latitude doit être un nombre(Exemple: 0.80823290553212)"
    },
     date_min_controle: {
       dateITA: "Le format doit être de la forme JJ/MM/AAAA"
    },
    date_max_controle: {
       dateITA: "Le format doit être de la forme JJ/MM/AAAA"
    }
	}
});

$("#suppression_communes").validate({
  rules: {
    "supp[]": { 
                    required: true, 
                    minlength: 1 
            } 
  },
  messages: {
     "supp[]": "Merci de choisir au moins une commune à supprimer"
  },
  submitHandler: function(form) {
    var communes='';
    $("input:checkbox").each(function(){
      var $this = $(this);
      if($this.is(":checked")){
        communes=communes+' '+$this.attr("id");
      }
    
    });
        if (confirm('Etes-vous sûr de supprimer les communes'+communes+' ?')) {
            form.submit();
        }
    }
});
           
});

</script>
<?php
print('</head>');
print('<body>');
print('<div class="container">');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_commune = (int) $_GET['mod'];
}
else
  $gi_idf_commune = isset($_POST['idf_commune']) ? (int) $_POST['idf_commune'] : null;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];


/**
 * Affiche la liste des communes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour;
   $st_requete = "SELECT DISTINCT (left( nom, 1 )) AS init FROM `commune_acte` ORDER BY init";
   $a_initiales_communes = $pconnexionBD->sql_select($st_requete);
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Gestion des communes/paroisses</div>');
   print('<div class="panel-body">');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" id=\"suppression_communes\" method=\"post\">");
   
   print('<div class="form-row col-md-12">');   
   print('<ul class="pagination justify-content-center">');
   $i_session_initiale = isset($_SESSION['initiale']) ? $_SESSION['initiale'] : $a_initiales_communes[0];
   $gc_initiale = empty($_GET['initiale']) ? $i_session_initiale : $_GET['initiale'];
   $_SESSION['initiale'] = $gc_initiale;   
   foreach ($a_initiales_communes as $c_initiale)
   {
     if ($c_initiale==$gc_initiale)
        print("<li class=\"page-item active\"><span class=\"page-link\">$c_initiale<span class=\"sr-only\">(current)</span></span></li>");
     else
        print("<li class=\"page-item\"><a href=\"".$_SERVER['PHP_SELF']."?initiale=$c_initiale\">$c_initiale</a></li>");
   }
   print("</ul></div>");
   
   $st_requete = "select idf,nom from commune_acte where nom like '$gc_initiale%' order by nom";
   $a_liste_communes = $pconnexionBD->liste_valeur_par_clef($st_requete);
   $i_nb_communes=count($a_liste_communes);
   if ($i_nb_communes!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_communes,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Commune','Modifier','Supprimer'));
      $pagination->init_param_bd($pconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $pagination->affiche_tableau_edition();
      $pagination->affiche_entete_liens_navigation();      
   }
   else
   print('<div class="alert alert-danger">Pas de communes</div>');
   print("<input type=hidden name=mode value=\"SUPPRIMER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Supprimer les communes s&eacute;lectionn&eacute;es</button>');   
   print("</form>");  
   
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=\"MENU_AJOUTER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Ajouter une commune</button>');      
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=\"EXPORTER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Exporter les communes</button>');    
   print('</form></div></div>');  

}

/**
 * Affiche de la table d'édition
 * @param string $pst_nom_commune Nom de la commune
 * @param integer $pi_code_insee Code Insee
 * @param integer $pi_num_paroisse Numéro de la paroisse ou arrondissement 
 * @param string $pst_latitude Latitude (forme 0.804596785)
 * @param string $pst_longitude Longitude (forme 0.012217305)
 * @param integer $pi_idf_canton identifiant du canton
 * @param array $pa_cantons liste des cantons 
 * @param integer $pi_debut_communale début de la collection communale
 * @param integer $pi_debut_greffe début de la collection du greffe
 * @param string $pst_protestants registre protestant (O|N)
 * @param string $pst_sans_rp sans registres paroissiaux (O|N)
 * @param string $pst_points_svg points sur la carte SVG
 * @param string $pst_bureau_controle bureau de contrôle (O|N)
 * @param string $pst_date_min_controle date minimale du bureau des actes
 * @param string $pst_date_max_controle date maximale du bureau des actes
 */ 
function menu_edition($pst_nom_commune,$pi_code_insee,$pi_num_paroisse,$pst_latitude,$pst_longitude,$pi_idf_canton,$pa_cantons,$pi_debut_communale,$pi_debut_greffe,$pst_protestants,$pst_sans_rp,$pst_points_svg,$pst_bureau_controle,$pst_date_min_controle,$pst_date_max_controle)
{
   print("<table class=\"table table-bordered table-striped\">");
   print("<tr><th>Nom</th><td><input type=\"text\" maxlength=50 size=30 name=nom_commune value=\"$pst_nom_commune\"></td></tr>");
   print("<tr><th>Code Insee</th><td><input type=\"text\" maxlength=5 size=5 name=code_insee value=\"$pi_code_insee\"></td></tr>");
   print("<tr><th>Numéro Paroisse</th><td><input type=\"text\" maxlength=2 size=2 name=num_paroisse value=\"$pi_num_paroisse\"></td></tr>");
   print("<tr><th>Latitude (radian)</th><td><input type=\"text\" maxlength=30 name=latitude value=\"$pst_latitude\"></td></tr>");
   print("<tr><th>Longitude (radian)</th><td><input type=\"text\" maxlength=30 name=longitude value=\"$pst_longitude\"></td></tr>");
   print("<tr><th>Canton</th><td><select name=idf_canton>".chaine_select_options($pi_idf_canton,$pa_cantons)."</select></td></tr>");
   print("<tr><th>D&eacute;but Communale</th><td><input type=\"text\" maxlength=4 name=debut_communale value=\"$pi_debut_communale\"></td></tr>");
   print("<tr><th>D&eacute;but Greffe</th><td><input type=\"text\" maxlength=4 name=debut_greffe value=\"$pi_debut_greffe\"></td></tr>");
   $st_checked = ($pst_protestants=='O') ? "checked": '';
   print("<tr><th>Protestants</th><td><input type=\"checkbox\" name=protestants value=\"O\" $st_checked /></td></tr>");
   $st_checked = ($pst_sans_rp=='O') ? "checked": '';
   print("<tr><th>Sans registres paroissiaux</th><td><input type=\"checkbox\" name=sans_rp value=\"O\" $st_checked /></td></tr>");
   print("<tr><th>Points SVG</th><td><textarea cols=64 rows=16 name=points_svg>$pst_points_svg</textarea></td></tr>");
   $st_checked = ($pst_bureau_controle=='O') ? "checked": '';
   print("<tr><th>Bureau de contr&ocirc;le</th><td><input type=\"checkbox\" name=bureau_controle value=\"O\" $st_checked /></td></tr>");
   print("<tr><th>Date minimale du contr&ocirc;le (JJ/MM/AAAA)</th><td><input type=\"text\" maxlength=10 size=10 name=date_min_controle value=\"$pst_date_min_controle\"></td></tr>");
   print("<tr><th>Date maximale du contr&ocirc;le (JJ/MM/AAAA)</th><td><input type=\"text\" maxlength=10 size=10 name=date_max_controle value=\"$pst_date_max_controle\"></td></tr>");
   print("</table>");
}

/** Affiche le ménu de modification d'une commune
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_commune Identifiant de la commune à modifier 
 * @param array $pa_cantons liste des cantons 
 */ 
function menu_modifier($pconnexionBD,$pi_idf_commune,$pa_cantons)
{
   list($st_commune_acte,$st_code_insee,$i_num_paroisse,$st_latitude,$st_longitude,$i_idf_canton,$i_debut_communale,$i_debut_greffe,$st_points_svg,$st_protestants,$st_sans_rp,$st_bureau_controle,$st_date_min_controle,$st_date_max_controle)=$pconnexionBD->sql_select_liste("select nom,code_insee,numero_paroisse,latitude, longitude,idf_canton,debut_communale, debut_greffe,points_svg,protestants,sans_rp,bureau_controle,date_min_controle,date_max_controle from commune_acte where idf=$pi_idf_commune");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_commune\">");
   print("<input type=hidden name=mode value=\"MODIFIER\">");
   print("<input type=hidden name=idf_commune value=$pi_idf_commune>");
   menu_edition($st_commune_acte,$st_code_insee,$i_num_paroisse,$st_latitude,$st_longitude,$i_idf_canton,$pa_cantons,$i_debut_communale,$i_debut_greffe,$st_protestants,$st_sans_rp,$st_points_svg,$st_bureau_controle,$st_date_min_controle,$st_date_max_controle);
   print("</div>");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Modifier</button>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
   print("<input type=hidden name=mode value=\"LISTE\">");
   print('</form>');
}

/** Affiche le menu d'ajout d'une commune
 * @param array $pa_cantons liste des cantons 
 */ 
function menu_ajouter($pa_cantons)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_commune\">");
   print("<input type=hidden name=mode value=\"AJOUTER\">");
   menu_edition('','','','','',0,$pa_cantons,'','','N','N','','N','','');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Ajouter</button>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=\"LISTE\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
   print('</form>');
}

/**
 * Renvoie la distance entre les deux communes identifiées par leur longitudes et latitudes
 * @param double $pf_lat1 latitude de la première commune (Exemple : 0.804179843464377)
 * @param double $pf_lon1 longitude de la première commune (Exemple : 0.00363609679055735)
 * @param double $pf_lat1 latitude de la seconde commune 
 * @param double $pf_lon1 longitude de la seconde commune
 * @return double distance entre les deux communes en km  
 */ 
function distance($pf_lat1, $pf_lon1, $pf_lat2, $pf_lon2) 
{	
	$R = 6371;
	$dLat = $pf_lat2 - $pf_lat1;
	$dLong = $pf_lon2 - $pf_lon1;
	$var1= $dLong/2;
	$var2= $dLat/2;
	$a= pow(sin($dLat/2), 2) + cos($pf_lat1) * cos($pf_lat2) * pow(sin($dLong/2), 2);
	$c= 2 * atan2(sqrt($a),sqrt(1-$a));
	$d= $R * $c;
	return $d;
}

/**
 * Ajoute dans la table SQL tableau_kilometrique la liste des distances
 * entre chaque commune et la nouvelle commune crée
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param string Répertoire temporaire  
 * @param array $pa_coordonnees_communes tableau des coordonnées des communes (latitude,longitude) indexées par l'identifiant commune
 * @param double $pf_latitude latitude de la commune ajoutée
 * @param double $pf_longitude longitude de la commune ajoutée 
 */ 
function calcule_coordonnees_commune($pconnexionBD,$gst_rep_tmp,$pa_coordonnees_communes,$pi_idf_commune,$pf_latitude,$pf_longitude)
{
   global $gst_parametres_load_data,$gst_repertoire_chargement_actes;
   //$st_nomfich_temp = tempnam ($gst_rep_tmp, "coor");
   $st_nomfich_temp = "$gst_repertoire_chargement_actes/coord.csv";
   $pf = fopen($st_nomfich_temp, "w");
   foreach($pa_coordonnees_communes as $i_idf_commune => $a_coord)
   {
      list($f_latitude_cour,$f_longitude_cour) = $a_coord;
      $i_dist=round(distance($pf_latitude,$pf_longitude,$f_latitude_cour,$f_longitude_cour));
      fwrite($pf,"$i_idf_commune;$pi_idf_commune;$i_dist\n");
      if ($pi_idf_commune!=$i_idf_commune)
        fwrite($pf,"$pi_idf_commune;$i_idf_commune;$i_dist\n");       
   }
   fclose($pf);
   $pconnexionBD->execute_requete("LOAD DATA $gst_parametres_load_data INFILE '$st_nomfich_temp' INTO TABLE tableau_kilometrique FIELDS TERMINATED BY ';' LINES TERMINATED BY '\n'");
   unlink($st_nomfich_temp);
}

/**
 * Exporte les communes au format Nimègue
 * @param object $pconnexionBD Connexion à la base
 * @param string $pst_fichier Chemin du fichier à exporter  
 */ 
function exporte_communes_Nim($pconnexionBD,$pst_fichier) {
    $a_communes = $pconnexionBD->sql_select_multiple("select nom, code_insee, numero_paroisse from commune_acte order by nom");
    $pf = fopen($pst_fichier, "w");
    $a_depts = array('16' => 'Charente',
                     '79' => 'Deux-Sèvres',
                     '86' => 'Vienne',
                     '24' => 'Dordogne',
                     '87' => 'Haute-Vienne'
               );
    foreach ($a_communes as $a_commune)
    {
       list($st_nom,$i_code_insee,$i_num_paroisse) = $a_commune;
       $i_dept = substr($i_code_insee,0,2);
       $st_dept = array_key_exists($i_dept,$a_depts) ? $a_depts[$i_dept] : 'Inconnu';
       fwrite($pf,sprintf("NIMEGUEV3;C;%05d-%02d;%s;;%02d;%s\r\n",$i_code_insee,$i_num_paroisse,$st_nom,$i_dept,$st_dept));
    }
    fclose($pf);
}


$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD); 
  break;
  case 'MENU_MODIFIER' :
  $a_cantons = $connexionBD->liste_valeur_par_clef("select idf,nom from canton order by nom");
  $a_cantons[0] = ""; 
  menu_modifier($connexionBD,$gi_idf_commune,$a_cantons);
  break;
  case 'MODIFIER' :     
     if (get_magic_quotes_gpc())
     {
        if (ini_get('magic_quotes_sybase'))
        {
          $st_nom_commune        =  trim($_POST['nom_commune']);
          $st_date_min_controle = trim($_POST['date_min_controle']);
          $st_date_max_controle = trim($_POST['date_max_controle']);
        }
        else
        {
          $st_nom_commune        = stripslashes(trim($_POST['nom_commune']));
          $st_date_min_controle = stripslashes(trim($_POST['date_min_controle']));
          $st_date_max_controle = stripslashes(trim($_POST['date_max_controle']));
        }
     }
     else
     { 
         $st_nom_commune        =  trim($_POST['nom_commune']);
         $st_date_min_controle = trim($_POST['date_min_controle']);
         $st_date_max_controle = trim($_POST['date_max_controle']);
     }
     $i_code_insee = trim($_POST['code_insee']);
     $i_num_paroisse = trim($_POST['num_paroisse']);
     $f_latitude = trim($_POST['latitude']);
     $f_longitude = trim($_POST['longitude']);
     $i_idf_canton = trim($_POST['idf_canton']);
     $i_debut_communale = trim($_POST['debut_communale']);
     $i_debut_greffe = trim($_POST['debut_greffe']);
     $st_points_svg = trim($_POST['points_svg']);
     $st_protestants= isset($_POST['protestants'])? 'O': 'N';     
     $st_sans_rp= isset($_POST['sans_rp'])? 'O': 'N';
     $st_bureau_controle   = isset($_POST['bureau_controle'])? 'O': 'N';
     $a_coord_communes = $connexionBD->sql_select_multiple_par_idf("select idf,latitude,longitude from commune_acte");
     $connexionBD->initialise_params(array(':nom_commune'=>$st_nom_commune,':code_insee'=>$i_code_insee,':numero_paroisse'=>$i_num_paroisse,':latitude'=>$f_latitude,':longitude'=>$f_longitude,':idf_canton'=>$i_idf_canton,':debut_communale'=>$i_debut_communale,':debut_greffe'=>$i_debut_greffe,':points_svg'=>$st_points_svg,':protestants'=>$st_protestants,':sans_rp'=>$st_sans_rp,':bureau_controle'=>$st_bureau_controle,':date_min_controle'=>$st_date_min_controle,':date_max_controle'=>$st_date_max_controle,':idf_commune'=>$gi_idf_commune));
     $st_requete = "update commune_acte set nom=:nom_commune, code_insee=:code_insee,numero_paroisse=:numero_paroisse,latitude=:latitude,longitude=:longitude,idf_canton=:idf_canton,debut_communale=:debut_communale,debut_greffe=:debut_greffe,points_svg=:points_svg,protestants=:protestants,sans_rp=:sans_rp,bureau_controle=:bureau_controle,date_min_controle=:date_min_controle,date_max_controle=:date_max_controle where idf=:idf_commune";
     $connexionBD->execute_requete($st_requete);
     if (!empty($f_latitude) && !empty($f_longitude))
     {
        $connexionBD->execute_requete("delete from tableau_kilometrique where idf_commune1=$gi_idf_commune or idf_commune2=$gi_idf_commune");
        calcule_coordonnees_commune($connexionBD,$gst_repertoire_chargement_actes,$a_coord_communes,$gi_idf_commune,$f_latitude,$f_longitude);
     }
     menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' : 
  $a_cantons = $connexionBD->liste_valeur_par_clef("select idf,nom from canton order by nom");
  $a_cantons[0] = "";
  menu_ajouter($a_cantons);
  break;
  case 'AJOUTER':     
     if (get_magic_quotes_gpc())
     {
        if (ini_get('magic_quotes_sybase'))
        {
          $st_nom_commune        =  trim($_POST['nom_commune']);
          $st_date_min_controle = trim($_POST['date_min_controle']);
          $st_date_max_controle = trim($_POST['date_max_controle']);
        }
        else
        {
          $st_nom_commune        = stripslashes(trim($_POST['nom_commune']));
          $st_date_min_controle = stripslashes(trim($_POST['date_min_controle']));
          $st_date_max_controle = stripslashes(trim($_POST['date_max_controle']));
        }
     }
     else
     { 
         $st_nom_commune        =  trim($_POST['nom_commune']);
         $st_date_min_controle = trim($_POST['date_min_controle']);
         $st_date_max_controle = trim($_POST['date_max_controle']);
     }
     $i_code_insee = trim($_POST['code_insee']);
     $i_num_paroisse = trim($_POST['num_paroisse']);
     $f_latitude = trim($_POST['latitude']);
     $f_longitude = trim($_POST['longitude']);
     $i_idf_canton = trim($_POST['idf_canton']);
     $i_debut_communale = trim($_POST['debut_communale']);
     $i_debut_greffe = trim($_POST['debut_greffe']);
     $st_points_svg = trim($_POST['points_svg']);
     $st_protestants= isset($_POST['protestants'])? 'O': 'N';
     $st_sans_rp= isset($_POST['sans_rp'])? 'O': 'N';
     $st_bureau_controle   = isset($_POST['bureau_controle'])? 'O': 'N';  
     $a_coord_communes = $connexionBD->sql_select_multiple_par_idf("select idf,latitude,longitude from commune_acte");
     $connexionBD->initialise_params(array(':nom_commune'=>$st_nom_commune,':code_insee'=>$i_code_insee,':numero_paroisse'=>$i_num_paroisse,':latitude'=>$f_latitude,':longitude'=>$f_longitude,':idf_canton'=>$i_idf_canton,':debut_communale'=>$i_debut_communale,':debut_greffe'=>$i_debut_greffe,':points_svg'=>$st_points_svg,':protestants'=>$st_protestants,':sans_rp'=>$st_sans_rp,':bureau_controle'=>$st_bureau_controle,':date_min_controle'=>$st_date_min_controle,':date_max_controle'=>$st_date_max_controle));
     $st_requete="insert into commune_acte(nom,code_insee,numero_paroisse,longitude,latitude,idf_canton,debut_communale,debut_greffe,protestants,sans_rp,points_svg,bureau_controle,date_min_controle,date_max_controle) values(:nom_commune,:code_insee,:numero_paroisse,:latitude,:longitude,:idf_canton,:debut_communale,:debut_greffe,:protestants,:sans_rp,:points_svg,:bureau_controle,:date_min_controle,:date_max_controle)";
     $connexionBD->execute_requete($st_requete);   
     menu_liste($connexionBD);
     if (!empty($f_latitude) && !empty($f_longitude))
     {
         $i_idf_commune_ajoutee = $connexionBD->dernier_idf_insere();
         calcule_coordonnees_commune($connexionBD,$gst_repertoire_chargement_actes,$a_coord_communes,$i_idf_commune_ajoutee,$f_latitude,$f_longitude);
     }
   break;
   case 'SUPPRIMER':
     $a_liste_communes = $_POST['supp'];
     foreach ($a_liste_communes as $i_idf_commune)
     {
        $a_actes = $connexionBD->sql_select_multiple("select source.nom,type_acte.nom from stats_commune join type_acte on (type_acte.idf=stats_commune.idf_type_acte) join source on (idf_source=source.idf) where idf_commune=$i_idf_commune");
        if (count($a_actes)==0)
        {
          $connexionBD->execute_requete("delete from tableau_kilometrique where idf_commune1=$i_idf_commune or idf_commune2=$i_idf_commune");
          $connexionBD->execute_requete("delete from commune_acte where idf=$i_idf_commune");
        }
        else
        {
          print("<div class=\"text-center\">Les actes suivants doivent &ecirc;tre supprim&eacute;s auparavant :</div>");
          $st_nom_commune = $connexionBD->sql_select1("select nom from commune_acte where idf=$i_idf_commune");
          print("<div class=\"text-center\">Commune: $st_nom_commune</div>");
          print("<table class=\"table table-bordered table-striped\">");
          print("<tr><th>Source</th><th>Type d'acte</th></tr>\n");
          foreach ($a_actes as $a_acte)
          {
             list($st_source,$st_type) = $a_acte;
             print("<tr><td>$st_source</td><td>$st_type</td></tr>\n");
          }
          print("</table>");          
        } 
     }
     menu_liste($connexionBD);
   break;
   case 'EXPORTER':
     $st_export_nimv2 = "$gst_repertoire_telechargement/CommunesNim.csv";
     exporte_communes_Nim($connexionBD,$st_export_nimv2);
     print("<div class=\"text-center\">Export cr&eacute;&eacute;: <a href=\"./telechargements/CommunesNim.csv\">Communes Nim&egrave;gue</a><br></div>");
     menu_liste($connexionBD);
   break;
      
}  

print('</div></body></html>');

?>