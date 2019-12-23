<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
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
require_once('../Commun/phonex.cls.php');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

switch ($gst_mode) {
 case 'EXPORT' :
   $i_idf_rep =  isset($_POST['idf_rep']) ? (int) $_POST['idf_rep']: 0;
   $st_cote=$connexionBD->sql_select1("select cote from rep_not_desc where idf_repertoire=$i_idf_rep");
   $st_cote = str_replace(' ','_',$st_cote);
   header("Content-type: text/csv");
   header("Expires: 0");
   header("Pragma: public");
   header("Content-disposition: attachment; filename=\"$st_cote.csv\""); 
   exporte_rep_not($connexionBD,$i_idf_rep);
   exit();
 break;
 case 'LISTE_REP':
   $st_requete = "SELECT rnd.nom_notaire,ca.nom,rnd.cote,rnd.publication, concat(adht.prenom,' ',adht.nom), count(rna.idf_acte) FROM rep_not_desc rnd join commune_acte ca on (rnd.idf_commune=ca.idf) left join rep_not_actes rna on (rnd.idf_repertoire=rna.idf_repertoire) left join adherent adht on (rnd.idf_releveur=adht.idf) group by rnd.idf_repertoire order by rnd.nom_notaire,ca.nom";
   header("Content-type: text/csv");
   header("Expires: 0");
   header("Pragma: public");
   header("Content-disposition: attachment; filename=\"liste_rep.csv\"");
   $a_liste_rep=$connexionBD->sql_select_multiple($st_requete);
   $fh = @fopen('php://output', 'w' );       
   if (count($a_liste_rep)>0)
   {
     fputcsv($fh, array("Notaire","Commune","Cote","Publication","Releveur","Nb actes"),SEP_CSV); 
     foreach ($a_liste_rep as $a_ligne)
     {
       fputcsv($fh, $a_ligne,SEP_CSV);           
     }
     fclose($fh);
   }
   exit();
 break;  
}

print('<!DOCTYPE html>');
print("<head>");
print("<title>Gestion des Repertoires de notaire</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/select2.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/select2-bootstrap.min.css' type='text/css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script src='../js/select2.min.js' type='text/javascript'></script>");

?>
<script type='text/javascript'>

$(document).ready(function() {

$("#modifie_rep_not").validate({ 
    rules: {
      nom_notaire: "required",
      cote: "required",
      },
    messages: {
         nom_notaire: "Le nom du notaire est obligatoire",
         cote: "La cote du notaire est obligatoire" 
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

$("#ajoute_rep_not").validate({ 
    rules: {
      nom_notaire: "required",
      cote: "required"
    },
    messages: {
         nom_notaire: "Le nom du notaire est obligatoire",
         cote: "La cote du notaire est obligatoire" 
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

$("#import_rep_not").validate({ 
    submitHandler : function(form) {
      if (confirm("Voulez-vous vraiment recharger le répertoire "+$("#idf_rep_import option:selected").text()+' ?')) {
        form.submit();
      }
    },
    rules: {
      RepNotFich: {
        required: true,
        extension: "csv"
      }
    },
    messages: {
       RepNotFich: {
         required: "Choisir un fichier",
         extension: "Un fichier CSV est requis" 
       } 
    },
	errorElement: "em",
  errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass( "help-block" );

	// Add `has-feedback` class to the parent div.form-group
	// in order to add icons to inputs
	element.parents( ".col-md-4" ).addClass( "has-feedback" );

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
		$( element ).parents( ".col-md-4" ).addClass( "has-error" ).removeClass( "has-success" );
		$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-md-4" ).addClass( "has-success" ).removeClass( "has-error" );
		$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
});

function MajTypeDest (json, textStatus, jqXHR) {
    $('#type_acte_dest').empty();   
    if (json.length>0)
    {
		  $.each(json, function(key, val) {
			 $("#type_acte_dest").append('<option>'+ val +'</option>');   
		  });
    }
	};

$("#type_acte_orig").change(function() {
		$.ajax({
			url: './ajax/type_acte.php',
			data: 'type_excl='+$('#type_acte_orig').val(),
			dataType: 'json',
			cache: false,
			success: MajTypeDest
		});
	});

$("#fusionner_type").validate({ 
    submitHandler : function(form) {
      if (confirm("Voulez-vous vraiment remplacer le type '"+$("#type_acte_orig option:selected").text()+"' par le type '"+$("#type_acte_dest option:selected").text()+ "' ?")) {
        form.submit();
      }
    },
    rules: {
      type_acte_orig: "required",
      type_acte_dest: "required"
    },
    messages: {
         type_acte_orig: "Choisir un type à remplacer",
         type_acte_dest: "Choisir le type de destination"  
    },
	errorElement: "em",
  errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass( "help-block" );

	// Add `has-feedback` class to the parent div.form-group
	// in order to add icons to inputs
	element.parents( ".col-md-5" ).addClass( "has-feedback" );

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
		$( element ).parents( ".col-md-5" ).addClass( "has-error" ).removeClass( "has-success" );
		$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
		$( element ).parents( ".col-md-5" ).addClass( "has-success" ).removeClass( "has-error" );
		$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
});

$("#suppression_repertoires").validate({
  rules: {
    "supp[]": { 
                    required: true, 
                    minlength: 1 
            } 
  },
  messages: {
     "supp[]": "Merci de choisir au moins un répertoire à supprimer"
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
    var repertoires='';
    $("input:checkbox").each(function(){
      var $this = $(this);
      if($this.is(":checked")){
        repertoires=repertoires+' '+$this.attr("id");
      }   
    });
    if (confirm('Etes-vous sûr de supprimer les répertoires '+repertoires+' ?')) {
            form.submit();
        }
    }
  });

  $("#annuler" ).click(function() {
    window.location.href = 'GestionRepNot.php';
});

  $.fn.select2.defaults.set( "theme", "bootstrap" );
  
  $(".js-select-avec-recherche").select2();
}); 
</script>
<?php
print('</head>');
print('<body>');
print('<div class="container">');

if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_repertoire = (int) $_GET['mod'];
}
else
  $gi_idf_repertoire = isset($_POST['idf_repertoire']) ? (int) $_POST['idf_repertoire']:null;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

/* Renvoie la liste des répertoires de notaires
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @return array tableau de (nom_notaire,paroisse, cote, publication, nb actes) indexé par l'identifiant du répertoire
*/
function liste_rep_not($pconnexionBD)
{
  $st_requete = "SELECT rnd.idf_repertoire,rnd.nom_notaire,ca.nom,rnd.cote FROM rep_not_desc rnd join commune_acte ca on (rnd.idf_commune=ca.idf) left join rep_not_actes rna on (rnd.idf_repertoire=rna.idf_repertoire)  order by rnd.nom_notaire,ca.nom";
	$a_liste_repertoires = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
  return $a_liste_repertoires;
}

/**
 * Affiche la liste des communes
 * @param object $pconnexionBD Identifiant de la connexion de base
 */ 
function menu_liste($pconnexionBD)
{
	global $gi_num_page_cour,$gi_max_taille_upload;  
  $st_requete = "SELECT rnd.idf_repertoire,rnd.nom_notaire,ca.nom,rnd.cote,rnd.publication, concat(adht.prenom,' ',adht.nom),count(rna.idf_acte) FROM rep_not_desc rnd join commune_acte ca on (rnd.idf_commune=ca.idf) left join rep_not_actes rna on (rnd.idf_repertoire=rna.idf_repertoire) left join adherent adht on (rnd.idf_releveur=adht.idf) group by rnd.idf_repertoire order by rnd.nom_notaire,ca.nom";
	$a_liste_rep_not =liste_rep_not($pconnexionBD);
	print('<div class="panel panel-primary">');
    print('<div class="panel-heading">Gestion des R&eacute;pertoires de notaire</div>');
    print('<div class="panel-body">');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"suppression_repertoires\">");
	$a_liste_repertoires = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
  $i_nb_repertoires=count($a_liste_repertoires);
	if ($i_nb_repertoires!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_repertoires,NB_LIGNES_PAR_PAGE,1,array('Notaire','Commune','Cote','Publication','Releveur','Nb Actes','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition();
	}
	else
		print("<div class=\"alert alert-danger\">Pas de r&eacute;pertoires</div>\n");
	print("<input type=hidden name=mode value=\"SUPPRIMER\">");
	print('<div class="form-group row">');   
    print('<button type=submit class="btn btn-danger col-md-offset-4 col-md-4"><span class="glyphicon glyphicon-trash"></span> Supprimer les r&eacute;pertoires selectionn&eacute;s</button>');
	print('</div>');
	print("</form>");

	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<input type=hidden name=mode value=\"MENU_AJOUTER\">");
	print('<div class="form-group row">');
    print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4"><span class="glyphicon glyphicon-plus"></span> Ajouter un r&eacute;pertoire </button>');
    print('</div>');	
 	print('</form>');
	
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print('<input type="hidden" name="mode" value="CALCUL_VARIANTES">');
	print('<div class="form-group row">');
    print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4"><span class="glyphicon glyphicon-signal"></span> (Re)Calculer les variantes</button>');
    print('</div>');
	print('</form>');
  
    print('<div class="panel panel-info">');
    print('<div class="panel-heading">Export</div>');
    print('<div class="panel-body">');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print('<div class="form-row col-md-12">');
    print('<div class="col-md-6">');
	print("<select name=idf_rep id=idf_rep_export class=\"form-control\">");
	foreach($a_liste_rep_not as $i_idf_rep => $a_ligne)
	{
      list($st_notaire,$st_paroisse,$st_cote) = $a_ligne;
      print("<option value=\"$i_idf_rep\">$st_notaire - $st_paroisse ($st_cote)</option>");
	}
	print("</select></div>"); 
	print('<input type="hidden" name="mode" value="EXPORT" />');
	print('<div class="col-md-6">');
	print('<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-download-alt"></span> Exporter le r&eacute;pertoire</button>');
	print("</div>");
	print("</div></div>"); 
	
	print('</form></div></div>');
  
    print('<div class="panel panel-info">');
    print('<div class="panel-heading">Import:</div>');
    print('<div class="panel-body">');
	print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"import_rep_not\">");
	print('<input type="hidden" name="MAX_FILE_SIZE" value="$gi_max_taille_upload" >');
    print('<div class="form-row col-md-12">');
    print('<div class="col-md-4">');	
	print("<select name=idf_rep id=idf_rep_import class=\"form-control\">");
	foreach($a_liste_rep_not as $i_idf_rep => $a_ligne)
	{
      list($st_notaire,$st_paroisse,$st_cote) = $a_ligne;
      print("<option value=\"$i_idf_rep\">$st_notaire - $st_paroisse ($st_cote)</option>");
	}
	print("</select></div>");
	print('<input type="hidden" name="mode" value="IMPORT" >');
	print('<div class="col-md-4">');
	print('<label for="RepNotFich" class="custom-file-label">Fichier:</label><input name="RepNotFich" type="file" id="RepNotFich" class="custom-file-input"></div>');
	print('<div class="col-md-4">');
	print('<button type=submit class="btn btn-primary"><span class="glyphicon glyphicon-upload"></span> Charger le fichier r&eacute;pertoire</button></div></div>');
	print('</form></div></div>');
	
	print('<div class="panel panel-info">');
    print('<div class="panel-heading">Fusion de types:</div>');
    print('<div class="panel-body">');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"fusionner_type\">");
	print("<input type=hidden name=mode value=\"FUSIONNER_TYPE\">");
	$st_requete ="SELECT distinct `type` from `rep_not_actes` order by `type`";
	$a_types = $pconnexionBD->sql_select($st_requete);
	print('<div class="form-row col-md-12">');
	print('<div class="form-group col-md-5">');
	print("<label for=\"type_acte_orig\">Remplacer le type:</label><select name=\"type_acte_orig\" id=\"type_acte_orig\" class=\"form-control js-select-avec-recherche\"><option></option>");
	foreach ($a_types as $st_type)
	{
		print("<option>$st_type</option>\n");
	}
	print("</select></div>");
	print('<div class="form-group col-md-5">');
	print("<label for\"type_acte_dest\">par le type:</label><select name=\"type_acte_dest\" id=\"type_acte_dest\" class=\"form-control js-select-avec-recherche\"><option></option>");	
	foreach ($a_types as $st_type)
   {
		print("<option>$st_type</option>\n");
	}
   print("</select>\n");
	print("</div>");
	print('<div class="form-group col-md-2">');
	print("<button type=submit class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-arrow-left\"></span> Fusionner</button></div></div>");
	print('</form>');
	print('</div></div>');
  
    print('<div class="panel panel-info">');
    print('<div class="panel-heading">Liste des r&eacute;pertoires:</div>');
    print('<div class="panel-body">'); 
    print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"exporter_liste\">");
    print("<input type=hidden name=mode value=\"LISTE_REP\">");
	print('<div class="form-row col-md-12">');
    print("<button type=submit class=\"col-md-offset-4 col-md-4 btn btn-primary\"><span class=\"glyphicon glyphicon-download-alt\"></span> Exporter la liste des notaires</button>");
    print('</div>');
	print('</form></div></div>');
  
    print('</div></div>');
}

/**
 * Affiche de la table d'édition
 * @param array $pa_communes liste des communes
 * @param array $pa_releveurs liste des releveurs
 * @param integer $pi_idf_repertoire identifiant du répertoire
 * @param string $pst_nom_notaire Nom du notaire
 * @param string $pst_cote Cote du notaire
 * @param integer $pi_idf_commune Identifiant de la commune
 * @param integer $pi_idf_releveur Identifiant du releveur
 * @param character $pc_publication Publication du répertoire ('O'|'N')
 */ 
function menu_edition($pa_communes,$pa_releveurs,$pi_idf_repertoire,$pst_nom_notaire,$pst_cote,$pi_idf_commune,$pi_idf_releveur,$pc_publication)
{
   print('<div class="form-group row">');
   print('<label for="idf_repertoire" class="col-form-label col-md-2">Identifiant du r&eacute;pertoire</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=50 size=30 name=idf_repertoire id=idf_repertoire value=\"$pi_idf_repertoire\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">');
   print('<label for="nom_notaire" class="col-form-label col-md-2">Nom du notaire</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=50 size=30 name=nom_notaire id=nom_notaire value=\"".cp1252_vers_utf8($pst_nom_notaire)."\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">');
   print('<label for="cote" class="col-form-label col-md-2">Cote du notaire</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=10 size=10 name=cote id=cote value=\"$pst_cote\" class=\"form-control\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">');
   print('<label for="idf_commune" class="col-form-label col-md-2">Commune</label>');
   print('<div class="col-md-10">');
   print("<select name=\"idf_commune\" id=\"idf_commune\" class=\"form-control js-select-avec-recherche\">");
   print(chaine_select_options($pi_idf_commune,$pa_communes));
   print("</select>");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">');
   print('<label for="idf_releveur" class="col-form-label col-md-2">Releveur</label>');
   print('<div class="col-md-10">');
   print("<select name=\"idf_releveur\" id=\"idf_releveur\" class=\"form-control js-select-avec-recherche\">");
   print(chaine_select_options($pi_idf_releveur,$pa_releveurs));
   print("</select>");
   print('</div>');
   print('</div>');
   $st_coche = $pc_publication=='O' ? 'checked' : '';
   print('<div class="form-group row">');
   print('<label for="publication" class="col-form-label col-md-2">Publication</label>');
   print('<div class="col-md-10">');
   print("<input type=checkbox value='O' name='publication' id='publication' $st_coche class=\"form-control\">");
   print('</div>');
   print('</div>');
}

/** Affiche le menu de modification d'un répertoire
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_repertoire Identifiant du répertoire à modifier 
 * @param array $pa_communes liste des communes
 * @param array $pa_releveurs liste des releveurs
 */ 
function menu_modifier($pconnexionBD,$pi_idf_repertoire,$pa_communes,$pa_releveurs)
{
   list($st_nom_notaire,$st_cote,$idf_commune,$idf_releveur,$c_publication)=$pconnexionBD->sql_select_liste("select nom_notaire,cote,idf_commune,idf_releveur,publication from `rep_not_desc` where idf_repertoire=$pi_idf_repertoire");  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"modifie_rep_not\">");
   print("<input type=hidden name=mode value=MODIFIER>");
   print("<input type=hidden name=idf_repertoire value=$pi_idf_repertoire>");
   menu_edition($pa_communes,$pa_releveurs,$pi_idf_repertoire,$st_nom_notaire,$st_cote,$idf_commune,$idf_releveur,$c_publication);
   print('<div class="form-row col-md-12">');
   print("<button type=submit class=\"col-md-offset-4 col-md-4 btn btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> Modifier</button>");
   print('</div>');
   print('<div class="form-row col-md-12">');
   print("<button type=button id=annuler class=\"col-md-offset-4 col-md-4 btn btn-primary\"><span class=\"glyphicon glyphicon-remove\"></span> Annuler</button>");
   print('</div>');
   print('</form>');
}

/** Affiche le menu d'ajout d'un répertoire
 * @param array $pa_communes liste des communes
 * @param array $pa_releveurs liste des releveurs 
 */ 
function menu_ajouter($pa_communes,$pa_releveurs)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"ajoute_rep_not\">");
   print("<input type=hidden name=mode value=\"AJOUTER\">");
   menu_edition($pa_communes,$pa_releveurs,null,'','',0,0,'N');
   print('<div class="form-row col-md-12">');
   print("<button type=submit class=\"col-md-offset-4 col-md-4 btn btn-primary\"><span class=\"glyphicon glyphicon-ok\"></span> Ajouter</button>");
   print('</div>');
   print('<div class="form-row col-md-12">');
   print("<button type=button id=annuler class=\"col-md-offset-4 col-md-4 btn btn-primary\"><span class=\"glyphicon glyphicon-remove\"></span>Annuler</button>");
   print('</div>');
   print('</form>');
}

/**
 * Calcule les variantes de tous les patronymes commençant par une lettre ou une parenthese
 * @param object $pconnexionBD Connexion à la base 
 * @param string $pst_rep_tmp répertoire temporaire où est stocké le fichier avant chargement en base
 */
function calcule_variantes($pconnexionBD,$pst_rep_tmp) {
    $ga_patronymes = $pconnexionBD->sql_select("select distinct nom1 as patronyme from rep_not_actes union select distinct nom2 as patronyme from rep_not_actes");
    //$i_precision = 7; 
    $i_precision = 8;     
    $oPhonex = new phonex;
    $ga_patronymes=array_unique($ga_patronymes);
    $a_groupe_patros  =array();
    foreach($ga_patronymes as $st_patronyme)
    {
       if (empty($st_patronyme))
          continue;
       $st_patronyme_sans_espaces = preg_replace('/\s+/','',$st_patronyme);      
       $oPhonex -> build ($st_patronyme_sans_espaces);
       $sPhonex = trim($oPhonex -> sString);
       $i_phonex =  intval(round($sPhonex * pow(10,$i_precision)));
       if (array_key_exists($i_phonex,$a_groupe_patros))
          $a_groupe_patros[$i_phonex][]= $st_patronyme;
       else
          $a_groupe_patros[$i_phonex]= array($st_patronyme); 
       
    }    
    $i=0;
	$st_requete_insertion = "insert ignore into `rep_not_variantes` (idf_groupe,nom) values ";
    $a_lignes = array();
	$a_params = array();
    foreach ($a_groupe_patros as $i_idf_groupe => $a_patros)
    {
       if (count($a_patros)>1)
       {
          foreach ($a_patros as $st_patronyme)
          {
            $a_lignes[] = "($i,:param_$i)";
            $a_params[":param_$i"] = $st_patronyme; 			 
          }
          $i++;
       }
    }
    if (count ($a_lignes)>0)
	{	
		$st_requete="truncate table `rep_not_variantes`";
		try
		{
			$pconnexionBD->execute_requete($st_requete);
		}
		catch (Exception $e) {
			die('<div class=\"alert alert-danger\">Suppression rep_not_variantes impossible: ' . $e->getMessage()).'</div>';
		}
		$st_lignes = join(',',$a_lignes);
		$st_requete_insertion .= $st_lignes;
		try
		{
			$pconnexionBD->initialise_params($a_params);
			$pconnexionBD->execute_requete($st_requete_insertion);
		}
		catch (Exception $e) {
			die('<div class=\"alert alert-danger\">Chargement variantes rep_not impossible: ' . $e->getMessage()).$st_requete_insertion.'</div>';
		}
	}	 
}   

/** Export le contenu du répertoire de notaire spécifié
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_stat_export identifiant du statut de l'export 
 */ 
function exporte_rep_not($pconnexionBD,$pi_idf_rep)
{
   $st_requete = "select jour,mois,annee,date_rep,type,nom1,prenom1,nom2,prenom2,paroisse,commentaires,page from rep_not_actes rna where rna.idf_repertoire=$pi_idf_rep order by annee,mois,jour";
   $a_liste_actes=$pconnexionBD->sql_select_multiple($st_requete);
   $fh = @fopen('php://output', 'w' );       
   if (count($a_liste_actes)>0)
   {
     fputcsv($fh, array("Date","DateRep","Type","Nom1","Prenom1","Nom2","Prenom2","Paroisse","Commentaires","Page"),SEP_CSV); 
     foreach ($a_liste_actes as $a_ligne)
     {
       list($i_jour,$i_mois,$i_annee,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page) = $a_ligne;
       $st_date=sprintf("%0.2d/%0.2d/%0.4d",$i_jour,$i_mois,$i_annee);
       fputcsv($fh, array($st_date,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page),SEP_CSV);           
     }
     fclose($fh);
   }
}

/**
 *  Charge le ficher dans le répertoire spécifié
 * @param object $pconnexionBD Identifiant de la connexion de base 
 * @param integer $pi_idf_rep Identifiant du répertoire
 * @param string $pst_parametre_load_data Paramètres du Load Data
 */
function importe_rep_not($pconnexionBD,$pi_idf_rep)
{
    global $gst_repertoire_telechargement;
	$st_nom_fich_dest = sprintf("rep_not_%d.txt",$pi_idf_rep);     
    $st_fich_dest = "$gst_repertoire_telechargement/$st_nom_fich_dest";
    if (!move_uploaded_file($_FILES['RepNotFich']['tmp_name'],$st_fich_dest)) 
    {
       print("Erreur de telechargement : impossible de copier en $st_fich_dest:<br>");
       switch($_FILES['RepNotFich']['error'])
       { 
          case 2 : print("Fichier trop gros par rapport a MAX_FILE_SIZE");break;
          default : print("Erreur inconnue");print_r($_FILES);
       }        
       exit;
    }
    $fp=fopen($st_fich_dest,"r") or die("Impossible de lire le fichier $st_fich_dest");
    
	$a_champs_a_ajouter=array();
	$a_colonnes=array();
	$i=0;
    while (($a_champs = fgetcsv($fp, 4096, SEP_CSV)) !== FALSE)
    {   
       $i_nb_champs=count($a_champs);
       if ($i_nb_champs==10)
       {      
          list($st_date,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page) = $a_champs;
       
       }
       else if ($i_nb_champs==9)
       {
          list($st_date,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$i_page) = $a_champs;
          $st_cmt='';
       }
       else
       {
          print("Ligne comportant $i_nb_champs colonnes ignor&eacute;e<br>");
          continue;
       }
       if (preg_match('/^Date/',$st_date)) continue;   
       list($i_jour,$i_mois,$i_annee)=explode('/',$st_date);
	   $a_colonnes[]="(:idf_rep$i,:jour$i,:mois$i,:annee$i,:date_rep$i,:type$i,:nom1_$i,:prenom1_$i,:nom2_$i,:prenom2_$i,:paroisse$i,:cmt$i,:page$i)";
	   $a_champs_a_ajouter[":idf_rep$i"]=$pi_idf_rep;
	   $a_champs_a_ajouter[":jour$i"]=$i_jour;
	   $a_champs_a_ajouter[":mois$i"]=$i_mois;
	   $a_champs_a_ajouter[":annee$i"]=$i_annee;
	   $a_champs_a_ajouter[":date_rep$i"]=$st_date_rep;
	   $a_champs_a_ajouter[":type$i"]=$st_type;
	   $a_champs_a_ajouter[":nom1_$i"]=$st_nom1;
	   $a_champs_a_ajouter[":prenom1_$i"]=$st_prenom1;
	   $a_champs_a_ajouter[":nom2_$i"]=$st_nom2;
	   $a_champs_a_ajouter[":prenom2_$i"]=$st_prenom2;
	   $a_champs_a_ajouter[":paroisse$i"]=$st_paroisse;
	   $a_champs_a_ajouter[":cmt$i"]=$st_cmt;
	   $a_champs_a_ajouter[":page$i"]=$i_page;
	   $i++;
    }
    fclose($fp);
    $st_requete = "delete from rep_not_actes  where idf_repertoire=$pi_idf_rep";
    $pconnexionBD->execute_requete($st_requete);
    if (count($a_colonnes)>0)
	{
		$st_requete = " insert into `rep_not_actes` (idf_repertoire,jour,mois,annee,date_rep,type,nom1,prenom1,nom2,prenom2,paroisse,commentaires,page) values";$st_requete = $st_requete .join(',',$a_colonnes);
		$pconnexionBD->initialise_params($a_champs_a_ajouter);
		 $pconnexionBD->execute_requete($st_requete);
		
    }		   
    print('<div class="row text-center alert alert-success">Chargement effectu&eacute;</div>');
    unlink($st_fich_dest); 

}

require_once("../Commun/menu.php");

switch ($gst_mode) {
  case 'LISTE' :
    menu_liste($connexionBD);
       
  break;
  case 'MENU_MODIFIER':
	$st_requete ="SELECT idf,nom FROM commune_acte order by nom";
	$a_communes = $connexionBD->liste_valeur_par_clef($st_requete);
	$st_requete ="SELECT idf, CONCAT(nom,' ',prenom,' (',idf,')') FROM adherent where statut in ('B','I') order by nom,prenom";
	$a_releveurs = $connexionBD->liste_valeur_par_clef($st_requete);  
	menu_modifier($connexionBD,$gi_idf_repertoire,$a_communes,$a_releveurs);
  break;
  case 'MODIFIER' :
	if (isset($_POST['idf_repertoire']))
	{
		$i_idf_repertoire = (int) $_POST['idf_repertoire'];
		$st_notaire = trim($_POST['nom_notaire']);
		$st_notaire = utf8_vers_cp1252(substr($st_notaire,0,50));
		$st_cote = trim($_POST['cote']);
		$st_cote = substr($st_cote,0,10);
		$i_idf_commune = (int) ($_POST['idf_commune']);
		$i_idf_releveur = (int) ($_POST['idf_releveur']);
		$c_publication = isset ($_POST['publication']) ? 'O' : 'N';
		$connexionBD->initialise_params(array(':notaire'=>$st_notaire,':cote'=>$st_cote,':idf_commune'=>$i_idf_commune,':idf_releveur'=>$i_idf_releveur,':publication'=>$c_publication,':idf_repertoire'=>$i_idf_repertoire));
		$st_requete = "update `rep_not_desc` set nom_notaire=:notaire, cote=:cote,idf_commune=:idf_commune,idf_releveur=:idf_releveur,publication=:publication where idf_repertoire=:idf_repertoire";
		$connexionBD->execute_requete($st_requete);
	}
	else
	{
		print("<div class=\"alert alert-danger\">Identifiant de r&eacute;pertoire non sp&eacute;cifi&eacute;</div>");
	}
	menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' :
		$st_requete ="SELECT idf,nom FROM commune_acte order by nom";
		$a_communes = $connexionBD->liste_valeur_par_clef($st_requete);
		$st_requete ="SELECT idf, CONCAT(nom,' ',prenom,' (',idf,')') FROM adherent where statut in ('B','I') order by nom,prenom";
		//print("Req=$st_requete");
		$a_releveurs = $connexionBD->liste_valeur_par_clef($st_requete);
		menu_ajouter($a_communes,$a_releveurs);
  break;
  case 'AJOUTER':
		$st_notaire = trim($_POST['nom_notaire']);
		$st_notaire = utf8_vers_cp1252(substr($st_notaire,0,50));
		$st_cote = trim($_POST['cote']);
		$st_cote = substr($st_cote,0,10);
		$i_idf_commune = (int) ($_POST['idf_commune']);
		$i_idf_releveur = (int) ($_POST['idf_releveur']);
		$c_publication = isset ($_POST['publication']) ? 'O' : 'N';
		$connexionBD->initialise_params(array(':notaire'=>$st_notaire,':cote'=>$st_cote,':idf_commune'=>$i_idf_commune,':idf_releveur'=>$i_idf_releveur,':publication'=>$c_publication));
		$st_requete = "insert into `rep_not_desc`(nom_notaire,cote,idf_commune,idf_releveur,publication) values(:notaire,:cote,:idf_commune,:idf_releveur,:publication)";
		$connexionBD->execute_requete($st_requete);
     menu_liste($connexionBD);
   break;
   case 'SUPPRIMER':
		$a_liste_repertoires = $_POST['supp'];
		foreach ($a_liste_repertoires as $i_idf_repertoire)
		{
			$st_requete ="select count(idf_acte) from `rep_not_actes` rna  join `rep_not_desc` rnd on (rna.idf_repertoire=rnd.idf_repertoire) where rnd.idf_repertoire=$i_idf_repertoire";
			$i_nb_actes = $connexionBD->sql_select1($st_requete);
			if ($i_nb_actes==0)
				$connexionBD->execute_requete("delete from `rep_not_desc` where idf_repertoire=$i_idf_repertoire");
			else
				print("<div class=\"alert alert-danger\">Des actes sont d&eacute;j&agrave; index&eacute;s pour ce r&eacute;pertoire</div>");
        }
		menu_liste($connexionBD);
	break;
  case 'CALCUL_VARIANTES':
     calcule_variantes($connexionBD,$gst_repertoire_telechargement);
     print("<div class=\"alert alert-success\">Variantes calcul&eacute;es</div>");
     menu_liste($connexionBD);  
  break;
  case 'IMPORT':
     $i_idf_rep =  isset($_POST['idf_rep']) ? (int) $_POST['idf_rep']: 0;
     importe_rep_not($connexionBD,$i_idf_rep);
     menu_liste($connexionBD);
  break;
  case 'FUSIONNER_TYPE':
     $st_type_acte_orig = trim($_POST['type_acte_orig']);
	 $st_type_acte_orig = utf8_vers_cp1252(substr($st_type_acte_orig,0,40));
     $st_type_acte_dest = trim($_POST['type_acte_dest']);
	 $st_type_acte_dest = utf8_vers_cp1252(substr($st_type_acte_dest,0,40));
	 $connexionBD->initialise_params(array(':type_orig'=>$st_type_acte_orig,':type_dest'=>$st_type_acte_dest));
	 $st_requete = "update `rep_not_actes` set `type`=:type_dest where `type`=:type_orig";
     try
     {
        $connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e)
     {
      echo 'Exception reçuue : ',  $e->getMessage(), "\n";
     }
     print("<div class=\"alert alert-success\">Remplacement effectu&eacute;</div>");
     menu_liste($connexionBD);
  break;    
}  
print('</div></body></html>');
?>