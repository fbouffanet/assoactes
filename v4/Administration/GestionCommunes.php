<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CHARGEMENT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;

if ($gst_mode=='EXPORTER')
    exporte_communes_Nim($connexionBD);

print('<!DOCTYPE html>');
print("<head>");
print("<title>Gestion des communes</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
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
      integer: "Le code insee doit �tre un entier"
    },
    num_paroisse: {
      required: "Le num�ro de paroisse est obligatoire",
      integer: "Le num�ro de paroisse doit �tre un entier"
    },
    longitude: {
       number:  "La longitude doit �tre un nombre(Exemple: 0.098625643597231)"
    },
    latitude: {
       number:  "La latitude doit �tre un nombre(Exemple: 0.80823290553212)"
    },
     date_min_controle: {
       dateITA: "Le format doit �tre de la forme JJ/MM/AAAA"
    },
    date_max_controle: {
       dateITA: "Le format doit �tre de la forme JJ/MM/AAAA"
    }
	},
  errorElement: "em",
  errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass( "help-block" );

	// Add `has-feedback` class to the parent div.form-group
	// in order to add icons to inputs
	element.parents( ".col-md-10" ).addClass( "has-feedback" );

	if ( element.prop( "type" ) === "checkbox" ) {
		error.insertAfter( element.parent( "label" ) );
	} else {
		error.insertAfter( element );
	}

	// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !element.next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
		}
	},
	success: function ( label, element ) {
		// Add the span element, if doesn't exists, and apply the icon classes to it.
		if ( !$( element ).next( "span" )[ 0 ] ) {
			$( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
		}
	},
	highlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-md-10" ).addClass( "has-error" ).removeClass( "has-success" );
		$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-md-10" ).addClass( "has-success" ).removeClass( "has-error" );
		$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
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
     "supp[]": "Merci de choisir au moins une commune � supprimer"
  },
  errorElement: "em",
  errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass( "help-block" );

	if ( element.prop( "type" ) === "checkbox" ) {
		error.insertAfter( element.parent( "label" ) );
	} else {
		error.insertAfter( element );
	}
	},
	highlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".lib_erreur" ).addClass( "has-error" ).removeClass( "has-success" );
	},
	unhighlight: function (element, errorClass, validClass) {
		$( element ).parents( ".lib_erreur" ).addClass( "has-success" ).removeClass( "has-error" );
	},
  submitHandler: function(form) {
    var communes='';
    $("input:checkbox").each(function(){
      var $this = $(this);
      if($this.is(":checked")){
        communes=communes+' '+$this.attr("id");
      }
    
    });
        if (confirm('Etes-vous s�r de supprimer les communes'+communes+' ?')) {
            form.submit();
        }
    }
});

$("#modifier" ).click(function() {
    $('#mode').val("MODIFIER");
    $("form").submit();
});

$("#ajouter" ).click(function() {
    $('#mode').val("AJOUTER");
    $("form").submit();
});


$("#annuler" ).click(function() {
    window.location.href = 'GestionCommunes.php';
});
           
});

</script>
<?php
print('</head>');
print('<body>');
print('<div class="container">');


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
   print('<div class="text-center">');   
   print('<ul class="pagination">');
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
   print("</ul></div></div>");
   
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
   print('<button type=submit class="btn btn-danger col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-trash"></span> Supprimer les communes s&eacute;lectionn&eacute;es</button>');   
   print("</form>");  
   
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=\"MENU_AJOUTER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-plus"></span> Ajouter une commune</button>');      
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=\"EXPORTER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-download-alt"></span> Exporter les communes</button>');    
   print('</form></div></div>');  

}

/**
 * Affiche de la table d'�dition
 * @param string $pst_nom_commune Nom de la commune
 * @param integer $pi_code_insee Code Insee
 * @param integer $pi_num_paroisse Num�ro de la paroisse ou arrondissement 
 * @param string $pst_latitude Latitude (forme 0.804596785)
 * @param string $pst_longitude Longitude (forme 0.012217305)
 * @param integer $pi_idf_canton identifiant du canton
 * @param array $pa_cantons liste des cantons 
 * @param integer $pi_debut_communale d�but de la collection communale
 * @param integer $pi_debut_greffe d�but de la collection du greffe
 * @param string $pst_protestants registre protestant (O|N)
 * @param string $pst_sans_rp sans registres paroissiaux (O|N)
 * @param string $pst_points_svg points sur la carte SVG
 * @param string $pst_bureau_controle bureau de contr�le (O|N)
 * @param string $pst_date_min_controle date minimale du bureau des actes
 * @param string $pst_date_max_controle date maximale du bureau des actes
 */ 
function menu_edition($pst_nom_commune,$pi_code_insee,$pi_num_paroisse,$pst_latitude,$pst_longitude,$pi_idf_canton,$pa_cantons,$pi_debut_communale,$pi_debut_greffe,$pst_protestants,$pst_sans_rp,$pst_points_svg,$pst_bureau_controle,$pst_date_min_controle,$pst_date_max_controle)
{
   print('<div class="form-group row">'); 
   print('<label for="nom_commune" class="col-form-label col-md-2">Nom</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=50 size=30 name=nom_commune id=nom_commune value=\"$pst_nom_commune\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="code_insee" class="col-form-label col-md-2">Code Insee</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=5 size=5 name=code_insee id=code_insee value=\"$pi_code_insee\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="num_paroisse" class="col-form-label col-md-2">Num&eacute;ro Paroisse</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=2 size=2 name=num_paroisse id=num_paroisse value=\"$pi_num_paroisse\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="latitude" class="col-form-label col-md-2">Latitude (radian)</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=30 name=latitude id=latitude value=\"$pst_latitude\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="longitude" class="col-form-label col-md-2">Longitude (radian)</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=30 name=longitude id=longitude value=\"$pst_longitude\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="idf_canton" class="col-form-label col-md-2">Canton</label>');
   print('<div class="col-md-10">');
   print("<select name=idf_canton id=idf_canton class=\"form-control\">".chaine_select_options($pi_idf_canton,$pa_cantons)."</select>");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="debut_communale" class="col-form-label col-md-2">D&eacute;but Communale</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=4 name=debut_communale id=debut_communale value=\"$pi_debut_communale\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="debut_greffe" class="col-form-label col-md-2">D&eacute;but Greffe</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=4 name=debut_greffe id=debut_greffe value=\"$pi_debut_greffe\" class=\"form-control\">");
   print('</div>');
   print('</div>');
     
   $st_checked = ($pst_protestants=='O') ? "checked": '';
   print('<div class="form-group row">');
   print('<label for="protestants" class="col-form-label col-md-2">Protestants</label>');   
   print('<div class="col-md-10">');
   print('<div class="form-check">');
   print("<input type=\"checkbox\" class=\"form-check-input\" name=protestants id=protestants value=\"O\" $st_checked>");
   print('</div>');
   print('</div>');
   print('</div>');
   $st_checked = ($pst_sans_rp=='O') ? "checked": '';
   print('<div class="form-group row">');
   print('<label for="sans_rp" class="col-form-label col-md-2">Sans registres paroissiaux</label>');
   print('<div class="col-md-10">');
   print('<div class="form-check">');
   print("<input type=\"checkbox\" class=\"form-check-input\" name=sans_rp id=sans_rp value=\"O\" $st_checked >");
   print('</div>');
   print('</div>');
   print('</div>');
   print('<div class="form-group row">');    
   print('<label for="points_svg" class="col-form-label col-md-2">Points SVG</label>');
   print('<div class="col-md-10">');
   print("<textarea class=\"form-control\" cols=64 rows=16 name=points_svg id=points_svg >$pst_points_svg</textarea>");
   print('</div>');
   print('</div>');
   $st_checked = ($pst_bureau_controle=='O') ? "checked": '';
   print('<div class="form-group row">');
   print('<label for="bureau_controle" class="form-check-label col-form-label col-md-2">Bureau de contr&ocirc;le</label>');
   print('<div class="col-md-10">');
   print("<input type=\"checkbox\" class=\"form-check-input\" name=bureau_controle id=bureau_controle value=\"O\" $st_checked>");
   print('</div>');
   print('</div>');
 
   print('<div class="form-group row">');
   print('<label for="date_min_controle" class="col-form-label col-md-2">Date minimale du contr&ocirc;le (JJ/MM/AAAA)</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=10 size=10 name=date_min_controle id=date_min_controle value=\"$pst_date_min_controle\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   
   print('<div class="form-group row">');
   print('<label for="date_max_controle" class="col-form-label col-md-2">Date maximale du contr&ocirc;le (JJ/MM/AAAA)</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=10 size=10 name=date_max_controle id=date_max_controle value=\"$pst_date_max_controle\" class=\"form-control\">");
   print('</div>');
   print('</div>');
}

/** Affiche le m�nu de modification d'une commune
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_commune Identifiant de la commune � modifier 
 * @param array $pa_cantons liste des cantons 
 */ 
function menu_modifier($pconnexionBD,$pi_idf_commune,$pa_cantons)
{
   list($st_commune_acte,$st_code_insee,$i_num_paroisse,$st_latitude,$st_longitude,$i_idf_canton,$i_debut_communale,$i_debut_greffe,$st_points_svg,$st_protestants,$st_sans_rp,$st_bureau_controle,$st_date_min_controle,$st_date_max_controle)=$pconnexionBD->sql_select_liste("select nom,code_insee,numero_paroisse,latitude, longitude,idf_canton,debut_communale, debut_greffe,points_svg,protestants,sans_rp,bureau_controle,date_min_controle,date_max_controle from commune_acte where idf=$pi_idf_commune");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_commune\">");
   print("<input type=hidden name=mode id=mode value=\"MODIFIER\">");
   print("<input type=hidden name=idf_commune value=$pi_idf_commune>");
   menu_edition($st_commune_acte,$st_code_insee,$i_num_paroisse,$st_latitude,$st_longitude,$i_idf_canton,$pa_cantons,$i_debut_communale,$i_debut_greffe,$st_protestants,$st_sans_rp,$st_points_svg,$st_bureau_controle,$st_date_min_controle,$st_date_max_controle);
   print('<div class="btn-group col-md-4 col-md-offset-4" role="group">');
   print('<button type=button class="btn btn-primary" id="modifier"><span class="glyphicon glyphicon-ok"></span> Modifier</button>');
   print('<button type=button class="btn btn-primary" id="annuler"><span class="glyphicon glyphicon-remove"></span> Annuler</button>');
   print('</div>');
   print('</form>');
}

/** Affiche le menu d'ajout d'une commune
 * @param array $pa_cantons liste des cantons 
 */ 
function menu_ajouter($pa_cantons)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_commune\">");
   print("<input type=hidden name=mode id=mode value=\"AJOUTER\">");
   menu_edition('','','','','',0,$pa_cantons,'','','N','N','','N','','');
   print('<div class="btn-group col-md-4 col-md-offset-4" role="group">');
   print('<button type=button class="btn btn-primary" id="ajouter"><span class="glyphicon glyphicon-ok"> Ajouter</button>');
   print('<button type=button class="btn btn-primary" id="annuler"><span class="glyphicon glyphicon-remove"> Annuler</button>');
   print('</div>');
   print('</form>');
}

/**
 * Renvoie la distance entre les deux communes identifi�es par leur longitudes et latitudes
 * @param double $pf_lat1 latitude de la premi�re commune (Exemple : 0.804179843464377)
 * @param double $pf_lon1 longitude de la premi�re commune (Exemple : 0.00363609679055735)
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
 * entre chaque commune et la nouvelle commune cr�e
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param array $pa_coordonnees_communes tableau des coordonn�es des communes (latitude,longitude) index�es par l'identifiant commune
 * @param double $pf_latitude latitude de la commune ajout�e
 * @param double $pf_longitude longitude de la commune ajout�e 
 */ 
function calcule_coordonnees_commune($pconnexionBD,$pa_coordonnees_communes,$pi_idf_commune,$pf_latitude,$pf_longitude)
{

   $st_requete = 'insert into tableau_kilometrique (idf_commune1,idf_commune2,distance) values ';
   $a_lignes = array();
   foreach($pa_coordonnees_communes as $i_idf_commune => $a_coord)
   {
      list($f_latitude_cour,$f_longitude_cour) = $a_coord;
      $i_dist=round(distance($pf_latitude,$pf_longitude,$f_latitude_cour,$f_longitude_cour));
      if ($pi_idf_commune!=$i_idf_commune)
        $a_lignes[]= "($pi_idf_commune,$i_idf_commune,$i_dist)";     
   }
   $st_lignes = join(',',$a_lignes);
   $st_requete .= $st_lignes;
   $pconnexionBD->execute_requete($st_requete);
}

/**
 * Exporte les communes au format Nim�gue
 * @param object $pconnexionBD Connexion � la base
  
 */ 
function exporte_communes_Nim($pconnexionBD) {
    $a_communes = $pconnexionBD->sql_select_multiple("select nom, code_insee, numero_paroisse from commune_acte order by nom");
    $a_depts = array('16' => 'Charente',
                     '79' => 'Deux-S�vres',
                     '86' => 'Vienne',
                     '24' => 'Dordogne',
                     '87' => 'Haute-Vienne'
               );
	header("Content-Type: text/csv");
	header('Content-disposition: attachment; filename="Communes.csv"');
	$fichier = fopen('PHP://output', 'w');		   
    foreach ($a_communes as $a_commune)
    {
       list($st_nom,$i_code_insee,$i_num_paroisse) = $a_commune;
       $i_dept = substr($i_code_insee,0,2);
       $st_dept = array_key_exists($i_dept,$a_depts) ? $a_depts[$i_dept] : 'Inconnu';
	   fputcsv($fichier,array("NIMEGUEV3","C",sprintf("%05d-%02d",$i_code_insee,$i_num_paroisse),$st_nom,'',sprintf("%02d",$i_dept),$st_dept),SEP_CSV);
    }
    fclose($fichier);
	exit();
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
		$i_nb_communes= $connexionBD->sql_select1("select count(*) from commune_acte");
		if ($i_nb_communes>1)
			calcule_coordonnees_commune($connexionBD,$a_coord_communes,$gi_idf_commune,$f_latitude,$f_longitude);
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
		$i_nb_communes= $connexionBD->sql_select1("select count(*) from commune_acte");
		if ($i_nb_communes>1)
		{
			$i_idf_commune_ajoutee = $connexionBD->dernier_idf_insere();
			calcule_coordonnees_commune($connexionBD,$a_coord_communes,$i_idf_commune_ajoutee,$f_latitude,$f_longitude);
		}
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
   
      
}  

print('</div></body></html>');

?>