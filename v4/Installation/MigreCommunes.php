<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

require_once '../Commun/ConnexionBD.php';
require_once('../Commun/commun.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
	$("#migration_commune").validate({
	rules: {
     prefixe_table: "required"
	},
	messages: {
		prefixe_table: {
			required: "Le prefixe de table EA est obligatoire"
		},
	},
	errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-md-8" ).addClass( "has-feedback" );

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
			$( element ).parents( ".col-md-8" ).addClass( "has-error" ).removeClass( "has-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".col-md-8" ).addClass( "has-success" ).removeClass( "has-error" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
	});
});   
</script>
<?php
print('<title>Migration des communes ExpoActes</title>');
print('</head>');
print('<body>');
print('<div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

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
 * @param array $pa_coordonnees_communes tableau des coordonnées des communes (latitude,longitude) indexées par l'identifiant commune
 * @param double $pf_latitude latitude de la commune ajoutée
 * @param double $pf_longitude longitude de la commune ajoutée 
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

if (empty($_POST['prefixe_table']))
{
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="migration_commune">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Migration des communes ExpoActes</div>");
	print('<div class="panel-body">');
	print("<div class=\"row\">Les conditions suivantes doivent &ecirc;tre remplies:</div>");
	print("<ul>\n");
	print("<li>Les codes communes doivent commencer par un entier</li>\n");
	print("<li>Deux communes distinctes ne doivent pas partager le m&ecirc;me code commune (l'entier doit &ecirc;tre diff&eacute;rent)</li>\n");
	print("</ul>\n");
	print('<div class="form-group row">');
    print("<label for=\"prefixe_table\" class=\"col-md-4 col-form-label control-label\">Pr&eacute;fixe des tables EA:</label>");
    print('<div class="col-md-8">');
	print("<input type=text maxlength=20 size=20 name=prefixe_table id=prefixe_table value=\"\" class=\"form-control\">");
    print('</div></div>');
	print('<button type="submit" class="btn btn-primary  col-md-offset-4 col-md-4""><span class="glyphicon glyphicon-wrench"></span> Migrer les comumnes</button>'); 
	print('</form>');
}	
else
{	
	
	$gst_prefixe_table = isset($_POST['prefixe_table']) ? trim($_POST['prefixe_table']) : 'act';
	$pf = fopen('prefixe_tables_EA.txt', 'w');
	fwrite($pf,$gst_prefixe_table);
    fclose($pf);
	$ga_actes = array();
	$ga_coordonnees = array();
	$st_requete = sprintf("SELECT distinct m.codcom,m.commune,g.lon,g.lat FROM %s_mar3 m left join %s_geoloc g on (m.commune=g.commune)",$gst_prefixe_table,$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune,$f_longitude,$f_latitude) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['M'] = 1;
		$ga_coordonnees[$st_code_commune][$st_nom_commune] = array($f_longitude,$f_latitude);
	}	
	$st_requete = sprintf("SELECT distinct n.codcom,n.commune,g.lon,g.lat FROM %s_nai3 n left join %s_geoloc g on (n.commune=g.commune)",$gst_prefixe_table,$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune,$f_longitude,$f_latitude) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['N'] = 1;
		$ga_coordonnees[$st_code_commune][$st_nom_commune] = array($f_longitude,$f_latitude);
	}
	$st_requete = sprintf("SELECT distinct d.codcom,d.commune,g.lon,g.lat FROM %s_dec3 d left join %s_geoloc g on (d.commune=g.commune)",$gst_prefixe_table,$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune,$f_longitude,$f_latitude)= $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['D'] = 1;
		$ga_coordonnees[$st_code_commune][$st_nom_commune] = array($f_longitude,$f_latitude);
	}
	$st_requete = sprintf("SELECT distinct v.codcom,v.commune,g.lon,g.lat FROM %s_div3 v join %s_geoloc g on (v.commune=g.commune)",$gst_prefixe_table,$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune,$f_longitude,$f_latitude) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['V'] = 1;
		$ga_coordonnees[$st_code_commune][$st_nom_commune] = array($f_longitude,$f_latitude);
	}

	$ga_num_paroisse = array();
	$ga_idf_commune_cree = array();
	// Création des communes
	foreach ($ga_actes as $st_code_commune => $a_ligne)
	{
		foreach ($a_ligne as $st_nom_commune => $a_ligne2)
		{
			$ga_num_paroisse[$st_code_commune] = array_key_exists($st_code_commune,$ga_num_paroisse) ? $ga_num_paroisse[$st_code_commune] +1 : 0;
			if (preg_match('/^(\d+)/',$st_code_commune,$a_correspondances))
			{	
		        print(sprintf("<div class=\"alert alert-info\">Cr&eacute;ation de la commune: %s (%d-%d)</div>",cp1252_vers_utf8($st_nom_commune),$a_correspondances[1],$ga_num_paroisse[$st_code_commune]));
				if (isset($ga_coordonnees[$st_code_commune][$st_nom_commune]))
				{	
					list($f_longitude,$f_latitude) = $ga_coordonnees[$st_code_commune][$st_nom_commune];
					// conversion en radians
					if (!empty($f_longitude) && !empty($f_latitude))
					{	
						$f_longitude = $f_longitude * pi()/180;
						$f_latitude = $f_latitude * pi()/180;
						$st_requete = "insert into commune_acte(nom,code_insee,numero_paroisse,longitude,latitude) values(:nom,:code_insee,:num_paroisse,:longitude,:latitude)";
						$connexionBD->initialise_params(array(':nom'=>$st_nom_commune,':code_insee'=>$a_correspondances[1],':num_paroisse'=>$ga_num_paroisse[$st_code_commune],':longitude'=>$f_longitude,':latitude'=>$f_latitude));
					}
					else
					{
						$st_requete = "insert into commune_acte(nom,code_insee,numero_paroisse) values(:nom,:code_insee,:num_paroisse)";
						$connexionBD->initialise_params(array(':nom'=>$st_nom_commune,':code_insee'=>$a_correspondances[1],':num_paroisse'=>$ga_num_paroisse[$st_code_commune]));
					}
				}
				else
				{
					$st_requete = "insert into commune_acte(nom,code_insee,numero_paroisse,idf_canton) values(:nom,:code_insee,:num_paroisse,:idf_canton)";
					$connexionBD->initialise_params(array(':nom'=>$st_nom_commune,':code_insee'=>$a_correspondances[1],':num_paroisse'=>$ga_num_paroisse[$st_code_commune],':idf_canton'=>0));
				}
				
				
				try
				{					
					$connexionBD->execute_requete($st_requete);
				}
				catch (PDOException $e) {
					echo 'Insertion impossible : ' . $e->getMessage();
					continue;
				}
				$i_idf_commune_ajoutee = $connexionBD->dernier_idf_insere();	
				$ga_idf_commune_cree[$st_code_commune][$st_nom_commune]=$i_idf_commune_ajoutee;
				if (!empty($f_longitude) && !empty($f_latitude))
				{
					$i_nb_communes= $connexionBD->sql_select1("select count(*) from commune_acte");
					if ($i_nb_communes>1)
					{
						$a_coord_communes = $connexionBD->sql_select_multiple_par_idf("select idf,latitude,longitude from commune_acte");
						calcule_coordonnees_commune($connexionBD,$a_coord_communes,$i_idf_commune_ajoutee,$f_latitude,$f_longitude);
					}
				}
			}
			else
				print("<div class=\alert alert-danger\>$st_code_commune ne contient pas d'entier</div>");
		}
	}
	// Création du fichier de communes
	$pf = fopen('communes.csv', 'w');	
	foreach ($ga_actes as $i_code_commune => $a_ligne)
	{
		foreach ($a_ligne as $st_nom_commune => $a_ligne2)
		{
			foreach ($a_ligne2 as $st_type => $a_ligne3)
			{
				if (isset($ga_idf_commune_cree[$i_code_commune][$st_nom_commune]))
				{
					// Création d'un ligne de la forme:
					// Code commune, nom commune, identifiant interne de la commune, type d'acte, statut, nombre d'actes créés
					fputcsv($pf, array($i_code_commune,$st_nom_commune,$ga_idf_commune_cree[$i_code_commune][$st_nom_commune],$st_type,'',''),SEP_CSV);
				}
				else
					print("<div class=\"alert alert-danger\">Pas d'identifiant de commune cr&eacute;e pour le code $i_code_commune et la commune ".cp1252_vers_utf8($st_nom_commune)."</div>");
			}
		}
	}
	fclose($pf);
	print("<div class=\"alert alert-success\">Fichier des communes cr&eacute;&eacute;</div>");
	print("<a href=\"MigreActes.php\" class=\"btn btn-warning\" role=\"button\">Lancer la migration des actes</a>");
}	

print('</div></body></html>');
?>