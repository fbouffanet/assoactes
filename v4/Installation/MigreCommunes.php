<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

require_once '../Commun/ConnexionBD.php';
require_once('../Commun/commun.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
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

if (empty($_POST['prefixe_table']))
{
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="migration_commune">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Migration des communes ExpoActes</div>");
    print('<div class="panel-body">');
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
	$ga_actes = array();
	$st_requete = sprintf("SELECT distinct codcom,commune FROM %s_mar3",$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['M'] = 1;
	}	
	$st_requete = sprintf("SELECT distinct codcom,commune FROM %s_nai3",$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['N'] = 1;
	}
	$st_requete = sprintf("SELECT distinct codcom,commune FROM %s_dec3",$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['D'] = 1;
	}
	$st_requete = sprintf("SELECT distinct codcom,commune FROM %s_div3",$gst_prefixe_table);
	$a_communes = $connexionBD->sql_select_multiple($st_requete);
	foreach ($a_communes as $a_ligne)
	{
		list($st_code_commune,$st_nom_commune) = $a_ligne;
		$ga_actes[$st_code_commune][$st_nom_commune]['V'] = 1;
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
				print(sprintf("<div class=\"alert alert-info\">Cr&eacute;ation de la commune: %s (%d-%d)</div>",$st_nom_commune,$a_correspondances[1],$ga_num_paroisse[$st_code_commune]));
				$st_requete = "insert into commune_acte(nom,code_insee,numero_paroisse) values(:nom,:code_insee,:num_paroisse)";
				$connexionBD->initialise_params(array(':nom'=>$st_nom_commune,':code_insee'=>$a_correspondances[1],':num_paroisse'=>$ga_num_paroisse[$st_code_commune]));
				try
				{					
					$connexionBD->execute_requete($st_requete);
				}
				catch (PDOException $e) {
					echo 'Insertion impossible : ' . $e->getMessage();
					continue;
				}		
				$ga_idf_commune_cree[$st_code_commune][$st_nom_commune]=$connexionBD->dernier_idf_insere();
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
					print("<div class=\"alert alert-danger\">Pas d'identifiant de commune cr&eacute;e pour le code $i_code_commune et la commune $st_nom_commune</div>");
			}
		}
	}
	fclose($pf);
	print("<div class=\"alert alert-success\">Fichier des communes cr&eacute;&eacute; . Lancer la migration des actes</div>");
}	

print('</div></body></html>');
?>