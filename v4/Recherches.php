<?php

require_once('Commun/Identification.php');
require_once('Commun/commun.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<title>Base AGC: Vos recherches</title>');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/select2.min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>"); 
print('<link rel="shortcut icon" href="images/favicon.ico">');
?>
<script type='text/javascript'>
$(document).ready(function() {

    $('.raz').click(function() {
        $("#idf_source_recherches_communes").val('').trigger('change');
        $("#idf_type_acte_recherches_communes").val('').trigger('change');
        $("#idf_commune_recherches_communes").val('').trigger('change');
        $('#paroisses_rattachees_recherches_communes').prop('checked', true);
        $("#rayon_recherches_communes").val('');
        $("#annee_min_recherches_communes").val('');
        $("#annee_max_recherches_communes").val('');
        $("#nom_epx").val('');
        $("#prenom_epx").val('');
        $('#variantes_epx').prop('checked', true);
        $("#nom_epse").val('');
        $("#prenom_epse").val('');
        $('#variantes_epse').prop('checked', true);
        $("#nom").val('');
        $("#prenom").val('');
        $('#variantes').prop('checked', true);
        $("#idf_type_presence").val('');
        $("#sexe").val('');
        $("#commentaires").val('');
        $("#releve_mois_min_communes").val('');
        $("#releve_mois_max_communes").val('');
        $("#releve_annee_min_communes").val('');
        $("#releve_tous_patronymes_communes").prop('checked', false);
		    $('#releve_tous_patronymes_communes').trigger('change');
    });

    $('#nom_epx').autocomplete({
        source: './ajax/patronyme.php',
        minLength: 3
    });

    $('#nom_epse').autocomplete({
        source: './ajax/patronyme.php',
        minLength: 3
    });

    $('#nom').autocomplete({
        source: './ajax/patronyme.php',
        minLength: 3
    });

    $(".js-select-avec-recherche").select2();

    $.validator.addMethod('plusGrand', function(value, element, param) {
        if (this.optional(element)) return true;
        var annee_max = $(param).val();
        if (jQuery.trim(annee_max).length == 0) return true;
        var i = parseInt(value);
        var j = parseInt(annee_max);
        return i >= j;
    }, "l'ann�e maximale doit �tre plus grande que l'ann�e minimale");
	
	$.validator.addMethod('verifDate', function(value, element, param) {		
		
		var annee = parseFloat($(param).val());
		value = parseFloat(value);
		
		if(jQuery.trim(annee).length > 0 && !isNaN(annee)){
			if(isNaN(value) ){
				return false;
			}
		}
		return true;
		
    }, "La p�riode est invalide.");

    $.validator.addMethod('plusGrandReleve', function(value, element, param) {
        if (this.optional(element)) return true;
        var annee_max = $(param).val();
        if (jQuery.trim(annee_max).length == 0) return true;
		
		var start = new Date();
		start.setDate(1);
		start.setMonth(jQuery('#releve_mois_min_communes').val() - 1);
		start.setYear(jQuery('#releve_annee_min_communes').val());
		start.setHours(0);
		start.setMinutes(0);
		start.setSeconds(0);
		
		var end = new Date();
		end.setMonth(jQuery('#releve_mois_max_communes').val() - 1);
		end.setYear(jQuery('#releve_annee_max_communes').val());
		end.setDate(31);
		end.setHours(0);
		end.setMinutes(0);
		end.setSeconds(0);

        return end >= start;
    }, "la date maximale doit �tre plus grande que la date minimale");

    jQuery.validator.addMethod("libelle_joker", function(value, element) {
        // allow any non-whitespace characters as the host part
        var libelle = value.replace(/\*+/g, '*');
        return (libelle != '*' && libelle != '!') || ((libelle == '*' || libelle == '!') && $("#idf_commune_recherches_communes").val() != '');
    }, 'La commune doit �tre sp�cifi�e quand le caract�re joker ou ! est utilis�');

    //validation rules
    $("#recherches_communes").validate({
        ignore: [],
        rules: {
            annee_min: {
                integer: true,
                minlength: 4
            },
            annee_max: {
                integer: true,
                minlength: 4,
                plusGrand: '#annee_min_recherches_communes'
            },
			 releve_mois_min_communes: {
                integer: true,
                maxlength: 2,
                verifDate: '#releve_annee_min_communes'
            },
			releve_mois_max_communes: {
                integer: true,
                maxlength: 2,
                verifDate: '#releve_annee_max_communes'
            },
            releve_annee_min_communes: {
                required: {depends: function(element) {
                        return $('#releve_tous_patronymes_communes').is(":checked");
                    }
                },
                integer: true,
                minlength: 4
            },
            releve_annee_max_communes: {
                required: {depends: function(element) {
                        return $('#releve_tous_patronymes_communes').is(":checked");
                    }
                },
                integer: true,
                minlength: 4,
                plusGrandReleve: '#releve_annee_min_communes'
            },
            idf_commune_recherches_communes: {
                required: {
                    depends: function(element) {
                         return $("#rayon_recherches_communes").val() != '' || $('#releve_tous_patronymes_communes').is(":checked");
                    }
                }
            },
            rayon: {
                integer: true
            }
        },
        messages: {
            annee_min: {
                integer: "L'ann�e doit �tre un entier",
                minlength: "L'ann�e doit comporter 4 chiffes"
            },
            annee_max: {
                integer: "L'ann�e doit �tre un entier",
                minlength: "L'ann�e doit comporter 4 chiffes"
            },
            releve_annee_min_communes: {
                integer: "L'ann�e doit �tre un entier",
                minlength: "L'ann�e doit comporter 4 chiffes",
                required: "L'ann�e est obligatoire"
            },
            releve_annee_max_communes: {
                integer: "L'ann�e doit �tre un entier",
                minlength: "L'ann�e doit comporter 4 chiffes",
                required: "L'ann�e est obligatoire"
            },
            idf_commune_recherches_communes: {
                required: "Une commune doit �tre remplie si le rayon est non vide ou si tous les patronymes sont choisis"
            },
            rayon: {
                integer: "Le rayon doit �tre un entier"
            }
        }
    });

    jQuery.validator.addMethod("patro_recherche", function(value, element) {
        var patro = value.replace(/\*+/g, '*');
        return this.optional(element) || (patro == '*' || patro.length >= 3 || patro == '!');
    }, "Le patronyme doit comporter au moins 3 caract�res (* comprises) ou correspondre � * ou ! exactement");

    //validation rules
    $("#recherches_couple").validate({
        rules: {
            nom_epx: {
                required: true,
                patro_recherche: true,
                libelle_joker: true
            },
            nom_epse: {
                required: true,
                patro_recherche: true,
                libelle_joker: true
            }
        },
        messages: {
            nom_epx: {
                required: "Le nom de l'�poux est obligatoire"
            },
            nom_epse: {
                required: "Le nom de l'�pouse est obligatoire"
            }
        },
        submitHandler: function(form) {
            if ($("#recherches_communes").valid()) {
                $("#idf_source_recherches_couple").val($("#idf_source_recherches_communes").val());
                $("#idf_type_acte_recherches_couple").val($("#idf_type_acte_recherches_communes").val());
                $("#idf_commune_recherches_couple").val($("#idf_commune_recherches_communes").val());
                if ($('#paroisses_rattachees_recherches_communes').is(':checked'))
                $("#paroisses_rattachees_recherches_couple").val("oui");
                $("#rayon_recherches_couple").val($("#rayon_recherches_communes").val());
                $("#annee_min_recherches_couple").val($("#annee_min_recherches_communes").val());
                $("#annee_max_recherches_couple").val($("#annee_max_recherches_communes").val());
                $("#releve_mois_min_couple").val($("#releve_mois_min_communes").val());
                $("#releve_mois_max_couple").val($("#releve_mois_max_communes").val());
                $("#releve_annee_min_couple").val($("#releve_annee_min_communes").val());
                $("#releve_annee_max_couple").val($("#releve_annee_max_communes").val());
				$("#releve_type_couple").val($("#releve_type_communes").val());      
                form.submit();
            }
        }
    });

    $("#recherches_personne").validate({
        rules: {
            nom: {
                required: true,
                patro_recherche: true,
                libelle_joker: true
            },
            prenom: {
                libelle_joker: true,
                required: {
                   depends: function(element) {
                         return $("#idf_commune_recherches_communes").val() == '' &&  $("#idf_source_recherches_communes").val()!=4;
                   }
                }
            }
        },
        messages: {
            nom: {
                required: "Le nom est obligatoire"
            },
            prenom: {
                required: "Le pr&eacute;nom est obligatoire si aucune commune/paroisse n'est s&eacute;lectionn&eacute;e. Veuillez choisir une commune avec un rayon de recherche"
            }
        },
        submitHandler: function(form) {
            if ($("#recherches_communes").valid()) {
                $("#idf_source_recherches_personne").val($("#idf_source_recherches_communes").val());
                $("#idf_type_acte_recherches_personne").val($("#idf_type_acte_recherches_communes").val());
                $("#idf_commune_recherches_personne").val($("#idf_commune_recherches_communes").val());
                if ($('#paroisses_rattachees_recherches_communes').is(':checked'))
                    $("#paroisses_rattachees_recherches_personne").val("oui");
                $("#rayon_recherches_personne").val($("#rayon_recherches_communes").val());
                $("#annee_min_recherches_personne").val($("#annee_min_recherches_communes").val());
                $("#annee_max_recherches_personne").val($("#annee_max_recherches_communes").val());
                $("#releve_mois_min_personne").val($("#releve_mois_min_communes").val());
                $("#releve_mois_max_personne").val($("#releve_mois_max_communes").val());
                $("#releve_annee_min_personne").val($("#releve_annee_min_communes").val());
                $("#releve_annee_max_personne").val($("#releve_annee_max_communes").val());  
				$("#releve_type_personne").val($("#releve_type_communes").val());               
                form.submit();
            }
        }
    });
	
	$("#recherches_tous_patronymes").validate({
        submitHandler: function(form) {
            if ($("#recherches_communes").valid()) {
                $("#idf_source_recherches_tous_patronymes").val($("#idf_source_recherches_communes").val());
                $("#idf_type_acte_recherches_tous_patronymes").val($("#idf_type_acte_recherches_communes").val());
                $("#idf_commune_recherches_tous_patronymes").val($("#idf_commune_recherches_communes").val());
                if ($('#paroisses_rattachees_recherches_communes').is(':checked'))
                    $("#paroisses_rattachees_recherches_tous_patronymes").val("oui");
                $("#rayon_recherches_tous_patronymes").val($("#rayon_recherches_communes").val());
                $("#annee_min_recherches_tous_patronymes").val($("#annee_min_recherches_communes").val());
                $("#annee_max_recherches_tous_patronymes").val($("#annee_max_recherches_communes").val());
                $("#releve_mois_min_tous_patronymes").val($("#releve_mois_min_communes").val());
                $("#releve_mois_max_tous_patronymes").val($("#releve_mois_max_communes").val());
                $("#releve_annee_min_tous_patronymes").val($("#releve_annee_min_communes").val());
                $("#releve_annee_max_tous_patronymes").val($("#releve_annee_max_communes").val());  
				        $("#releve_type_tous_patronymes").val($("#releve_type_communes").val()); 
                form.submit();
            }
        }
    });

    $('#echange_patros').click(function() {
        var nom_epx = $("#nom_epx").val();
        $("#nom_epx").val($("#nom_epse").val());
        $("#nom_epse").val(nom_epx);
    });
	
	function setMaxDateReleve(el){
		if(!isNaN(parseFloat($(el).val()))){
			if(isNaN(parseFloat($('#releve_mois_max_communes').val())) && isNaN(parseFloat($('#releve_annee_max_communes').val()))){
				$('#releve_mois_max_communes').val( $('#releve_mois_max_communes').attr('data-max') );
				$('#releve_annee_max_communes').val( $('#releve_annee_max_communes').attr('data-max') );
			}			
		}   		
	}	
	
	$('#releve_mois_min_communes').change(function(e) {
		    setMaxDateReleve($(this));
    });
	
	$('#releve_annee_min_communes').change(function(e) {
		    setMaxDateReleve($(this));
    });
	
	$('#releve_tous_patronymes_communes').change(function() {		
		 if($(this).is(":checked")) {
		   
		   		//'checked' event code
				  $('.pave-couple').hide();
				  $('#recherches_couple').hide();
				  $('.pave-personne').hide();
				  $('#recherches_personne').hide();
				  $('.pave-tous-patronymes').show();
				  $('#recherches_tous_patronymes').show();;	  
	   }
     else
     {
	     //'unchecked' event code
	     $('.pave-tous-patronymes').hide();
	     $('#recherches_tous_patronymes').hide();
	     $('.pave-couple').show();
	     $('#recherches_couple').show();
	     $('.pave-personne').show();
	     $('#recherches_personne').show();
	  }
  });
	
	$('#releve_tous_patronymes_communes').trigger('change');
	
});
</script>
<?php
print("</head>");
print("<body>");
print('<div class="container">');
//print("Vous etes authentifi&eacute; :-)<br>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("Commun/menu.php");
$gst_type_recherche         = isset($_GET['recherche']) ? $_GET['recherche'] : '';

if ($gst_type_recherche=='nouvelle')
{
  $gi_idf_source        = isset($_GET['idf_src']) ? (int) $_GET['idf_src'] : '0';
  $gi_idf_commune       = isset($_GET['idf_ca']) ? (int) $_GET['idf_ca']: '0';
  $gi_rayon             = '';
  $gi_idf_type_acte     = isset($_GET['idf_ta']) ? (int) $_GET['idf_ta']: '0';
  $gi_annee_min         = isset($_GET['a_min']) ? (int) $_GET['a_min']:'';
  $gi_annee_max         = isset($_GET['a_max']) ? (int) $_GET['a_max']:'';

  $gst_nom_epx          = '';
  $gst_prenom_epx       = '';
  $gst_variantes_epx    = 'oui';
  $gst_nom_epse         = '';
  $gst_prenom_epse      = '';
  $gst_variantes_epse   = 'oui';
  $gi_idf_type_presence = '0';
  $gst_sexe             = '0';
  $gst_nom              = isset($_GET['nom']) ? stripslashes($_GET['nom']) : '';
  $gst_prenom           = '';
  $gst_variantes        = isset($_GET['var']) && $_GET['var']=='N'? '' :'oui';
  $gst_paroisses_rattachees = 'oui';
  $gst_commentaires     = '';
  
  $gst_releve_mois_min  = '';
  $gst_releve_annee_min   = '';
  $gst_releve_mois_max  = '';
  $gst_releve_annee_max   = '';
  $gst_releve_type		 = 0;
  $gst_releve_tous_patronymes = '';
}
else
{
  $gi_idf_source        = isset($_SESSION['idf_source_recherche']) ? $_SESSION['idf_source_recherche']: '0';
  $gi_idf_commune       = isset($_SESSION['idf_commune_recherche']) ? $_SESSION['idf_commune_recherche']: '0'; 
  $gi_rayon             = isset($_SESSION['rayon']) ? $_SESSION['rayon']: '';
  $gi_idf_type_acte  	= isset($_SESSION['idf_type_acte_recherche']) ? $_SESSION['idf_type_acte_recherche']: '0';
  $gi_annee_min         = isset($_SESSION['annee_min']) ? $_SESSION['annee_min']: '';
  $gi_annee_max         = isset($_SESSION['annee_max']) ? $_SESSION['annee_max']: '';

  $gst_nom_epx          = isset($_SESSION['nom_epx']) ? $_SESSION['nom_epx']: '';
  $gst_prenom_epx       = isset($_SESSION['prenom_epx']) ? $_SESSION['prenom_epx']: '';
  $gst_variantes_epx    = isset($_SESSION['variantes_epx']) ? $_SESSION['variantes_epx']: 'oui';
  $gst_nom_epse         = isset($_SESSION['nom_epse']) ? $_SESSION['nom_epse']: '';
  $gst_prenom_epse      = isset($_SESSION['prenom_epse']) ? $_SESSION['prenom_epse']: '';
  $gst_variantes_epse   = isset($_SESSION['variantes_epse']) ? $_SESSION['variantes_epse']: 'oui';
  $gst_sexe             = isset($_SESSION['sexe']) ? $_SESSION['sexe']: '0';
  $gi_idf_type_presence = isset($_SESSION['idf_type_presence']) ? $_SESSION['idf_type_presence']: '0';
  $gst_nom              = isset($_SESSION['nom']) ? $_SESSION['nom']: '';
  $gst_prenom           = isset($_SESSION['prenom']) ? $_SESSION['prenom']: '';
  $gst_variantes        = isset($_SESSION['variantes']) ? $_SESSION['variantes']: 'oui';
  $gst_paroisses_rattachees = isset($_SESSION['paroisses_rattachees']) ? $_SESSION['paroisses_rattachees']: 'oui';
  $gst_commentaires     = isset($_SESSION['commentaires']) ? $_SESSION['commentaires']: '';
  
  $gst_releve_mois_min  = isset($_SESSION['releve_mois_min']) ? $_SESSION['releve_mois_min']: '';
  $gst_releve_annee_min   = isset($_SESSION['releve_annee_min']) ? $_SESSION['releve_annee_min']: '';
  $gst_releve_mois_max  = isset($_SESSION['releve_mois_max']) ? $_SESSION['releve_mois_max']: '';
  $gst_releve_annee_max   = isset($_SESSION['releve_annee_max']) ? $_SESSION['releve_annee_max']: '';
  $gst_releve_type       = isset($_SESSION['releve_type']) ? $_SESSION['releve_type']: 0;
  $gst_releve_tous_patronymes = isset($_SESSION['releve_tous_patronymes']) ? $_SESSION['releve_tous_patronymes']: '';

}

unset($_SESSION['idf_source_recherche']);
unset($_SESSION['idf_commune_recherche']);
unset($_SESSION['rayon']);
unset($_SESSION['idf_type_acte_recherche']);
unset($_SESSION['annee_min']);
unset($_SESSION['annee_max']);
unset($_SESSION['nom_epx']);
unset($_SESSION['prenom_epx']);
unset($_SESSION['variantes_epx']);
unset($_SESSION['nom_epse']);
unset($_SESSION['prenom_epse']);
unset($_SESSION['variantes_epse']);
unset($_SESSION['sexe']);
unset($_SESSION['nom']);
unset($_SESSION['prenom']);
unset($_SESSION['variantes']);
unset($_SESSION['idf_type_presence']);
unset($_SESSION['paroisses_rattachees']);
unset($_SESSION['commentaires']);

unset($_SESSION['releve_mois_min']);
unset($_SESSION['releve_annee_min']);
unset($_SESSION['releve_mois_max']);
unset($_SESSION['releve_annee_max']);
unset($_SESSION['releve_type']);
unset($_SESSION['releve_tous_patronymes']);

$a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte order by nom");
$a_types_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_acte order by nom");
$a_types_presence = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence order by nom");
$a_types_presence[0] = 'Toutes';
$a_sources = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM source order by nom");

print('<div class="panel-group">');
print('<div class="panel-body">');
print('<form id="recherches_communes" class="form-inline">');
print("<input type=hidden name=recherche value=\"\">");
print('<div class="form-row col-md-12">');
print('<div class="form-group  col-md-offset-1  col-md-2"><label for="idf_source_recherches_communes">Source:</label><select name="idf_source_recherches_communes" id="idf_source_recherches_communes" class="js-select-avec-recherche form-control">');
$a_sources[0] = 'Toutes';
print(chaine_select_options($gi_idf_source,$a_sources));
print('</select></div>');

print('<div class="form-group col-md-offset-2 col-md-2"><label for="idf_type_acte_recherches_communes">Type d\'acte:</label><select name="idf_type_acte_recherches_communes" id="idf_type_acte_recherches_communes" class="js-select-avec-recherche form-control">');
$a_types_acte[0] = 'Tous';
print(chaine_select_options($gi_idf_type_acte,$a_types_acte));
print('</select>');
print('</div></div>');

print('<div class="form-row col-md-12">');
print('<div class="form-group col-md-4"><label for="idf_commune_recherches_communes">Commune/Paroisse:</label><select name="idf_commune_recherches_communes" id="idf_commune_recherches_communes" class="js-select-avec-recherche form-control">');
$a_toutes_communes = array(''=>'Toutes')+$a_communes_acte;
print(chaine_select_options($gi_idf_commune,$a_toutes_communes));
print('</select></div>');

print('<div class="form-check col-md-4">');

if ($gst_paroisses_rattachees=='')
   print('<input type=checkbox name=paroisses_rattachees id="paroisses_rattachees_recherches_communes" value=oui class="form-check-input">');
else
   print('<input type=checkbox name=paroisses_rattachees id="paroisses_rattachees_recherches_communes" value=oui checked class="form-check-input" >');
print('<label for="paroisses_rattachees_recherches_communes" class="form-check-label">Paroisses rattach&eacute;es</label>');
print('</div>');


print("<div class=\"form-group col-md-4\"><div class=\"input-group\"><span class=\"input-group-addon\">Rayon de recherche:</span><label for=\"rayon_recherches_communes\" class=\"sr-only\">Rayon</label><input type=text name=rayon id='rayon_recherches_communes' size=2 maxlength=2 value=\"$gi_rayon\" class=\"form-control\"><span class=\"input-group-addon\">Km</span></div></div>");


print('</div>');

print('<div class="form-row col-md-12">'); 
print('<div class="input-group col-md-offset-4 col-md-4">');
print("<span class=\"input-group-addon\">Ann&eacute;es de</span><input type=text name=annee_min id=\"annee_min_recherches_communes\" size=4 value=\"$gi_annee_min\" class=\"form-control\">");
print("<span class=\"input-group-addon\">&agrave;</span><input type=text name=annee_max size=4 id=\"annee_max_recherches_communes\" value=\"$gi_annee_max\" class=\"form-control\">");
print('</div>');

print('</div>');

/* dates de releves */

print('<div class="form-row">');
print('<div class="input-group col-md-1">');
print("<label for =\"releve_type_communes\">Actes</label><select id=\"releve_type_communes\" name=\"releve_type_communes\" class=\"form-control \">");
$options = array(0=>'publi�s', 1=>"modifi�s");
print(chaine_select_options($gst_releve_type,$options));
print("</select></div>");

print('<div class="input-group col-md-1">');
print("<label for=\"releve_mois_min_communes\">entre</label><select id=\"releve_mois_min_communes\" name=\"releve_mois_min_communes\" class=\"form-control\">");

for($i = 1; $i <= 12; $i++){
	$mois[$i] = str_pad($i, 2, '0', STR_PAD_LEFT);
}
$a_mois = array(''=>'Mois')+$mois;
print(chaine_select_options($gst_releve_mois_min,$a_mois));
print("</select></div>");

print("<div class=\"input-group col-md-1\"><label for=\"releve_annee_min_communes\" class=\"sr-only\">Ann&eacute;e Min</label><input type=\"text\" name=\"releve_annee_min_communes\" id=\"releve_annee_min_communes\" size=\"4\" maxlength=\"4\" value=\"$gst_releve_annee_min\" class=\"form-control\"></div>");

print("<div class=\"input-group col-md-1\"><label for=\"releve_mois_max_communes\">et</label><select id=\"releve_mois_max_communes\" name=\"releve_mois_max_communes\" data-max=\"" . date('n') . "\" class=\"form-control\">");
print(chaine_select_options($gst_releve_mois_max,$a_mois));
print("</select></div>");

print("<div class=\"input-group col-md-1\"><label for=\"releve_annee_max_communes\" class=\"sr-only\">Ann&eacute;e Max</label><input type=\"text\" name=\"releve_annee_max_communes\" id=\"releve_annee_max_communes\" size=\"4\" maxlength=\"4\" value=\"$gst_releve_annee_max\" data-max=\"" . date('Y') . "\" class=\"form-control\"></div>");


print('<div class="form-check col-md-4">');
$checked = ($gst_releve_tous_patronymes)? ' checked="checked" ' : '';
print("<input type=\"checkbox\" name=\"releve_tous_patronymes\" id=\"releve_tous_patronymes_communes\" ". $checked ." value=\"1\" class=\"form-check-input\" ><label  for=\"releve_tous_patronymes_communes\" class=\"form-check-label\" >Tous patronymes</label>");
print('</div>');

print('</div>');

print("</form>");
print('</div>');

print('<div class="pave-couple panel panel-primary">');
print('<div class="panel-heading">Recherche par couple</div>');

print('<div class="panel-body">');
print('<form id="recherches_couple" method="post" action="ReponsesRecherches.php">');
print('<input type="hidden" name="type_recherche" value="couple">');
print('<input type="hidden" id="idf_source_recherches_couple" name="idf_source_recherche">');
print('<input type="hidden" id="idf_type_acte_recherches_couple" name="idf_type_acte_recherche">');
print('<input type="hidden" id="idf_commune_recherches_couple" name="idf_commune_recherche">');
print('<input type="hidden" id="rayon_recherches_couple" name="rayon">');
print('<input type="hidden" id="paroisses_rattachees_recherches_couple" name="paroisses_rattachees">');
print('<input type="hidden" id="annee_min_recherches_couple" name="annee_min">');
print('<input type="hidden" id="annee_max_recherches_couple" name="annee_max">');
print('<input type="hidden" id="releve_mois_min_couple" name="releve_mois_min">');
print('<input type="hidden" id="releve_annee_min_couple" name="releve_annee_min">');
print('<input type="hidden" id="releve_mois_max_couple" name="releve_mois_max">');
print('<input type="hidden" id="releve_annee_max_couple" name="releve_annee_max">');
print('<input type="hidden" id="releve_type_couple" name="releve_type">');


print('<div class="form-row col-md-12">');

print('<div class="form-group col-md-4">');
print("<label for=\"nom_epx\">Nom Epoux:</label><input type=text id=nom_epx name=nom_epx size=15 maxlength=30 value=\"$gst_nom_epx\" class=\"form-control\">");
print('</div>');

print('<div class="form-group col-md-4">');
print("<label for=\"prenom_epx\">Pr&eacute;nom Epoux:</label><input type=text name=prenom_epx id=prenom_epx size=15 maxlength=30 value=\"$gst_prenom_epx\" class=\"form-control\">");
print('</div>');

print('<div class="form-check col-md-4">');
if ($gst_variantes_epx=='')
   print('<input type=checkbox name=variantes_epx id=variantes_epx value="oui" class="form-check-input">');
else
   print('<input type=checkbox name=variantes_epx id=variantes_epx value="oui" checked class="form-check-input">');   
print('<label for="variantes_epx" class="form-check-label">Recherche par variantes connues</label>');
print('</div>');

print('</div>'); //fin ligne

print('<div class="form-row col-md-12">');

print('<div class="form-group col-md-4">');
print('<img src="./images/swap.png" id="echange_patros" alt="Echange les patronymes">');
print("<label for=\"nom_epse\">Nom Epouse:</label><input type=text id=nom_epse name=nom_epse size=15 maxlength=30 value=\"$gst_nom_epse\" class=\"form-control\">");
print('</div>');

print('<div class="form-group col-md-4">');
print("<label for=\"prenom_epse\">Pr&eacute;nom Epouse:</label><input type=text name=prenom_epse id=prenom_epse size=15 maxlength=30 value=\"$gst_prenom_epse\" class=\"form-control\">");
print('</div>');

print('<div class="col-md-4">');
if ($gst_variantes_epse=='')
   print('<input type=checkbox name=variantes_epse id=variantes_epse value="oui class="form-check-input">');
else
   print('<input type=checkbox name=variantes_epse id=variantes_epse value="oui"  checked class="form-check-input">'); 
print('<label for="variantes_epse" class="form-check-label">Recherche par variantes connues</label>');
print('</div>');

print('</div>'); // fin ligne

print('<div class="form-row">');

print('<div class="btn-group" role="group">');
print('<input class="btn btn-primary" type=submit name=Rechercher value="Rechercher le couple">');
print('<input class="btn btn-warning raz" type=button value="Effacer tous les Champs" name="raz">');
print('</div>');

print('</div>');
print('</form>');
print('</div>');
print('</div>'); // fin pave-couple

print('<div class="pave-personne panel panel-primary">');
print('<div class="panel-heading">Recherche par personne</div>');
print('<div class="panel-body">');

print('<form id="recherches_personne" method="post" action="ReponsesRecherches.php">');
print('<input type="hidden" name="type_recherche" value="personne">');
print('<input type="hidden" id="idf_source_recherches_personne" name="idf_source_recherche">');
print('<input type="hidden" id="idf_type_acte_recherches_personne" name="idf_type_acte_recherche">');
print('<input type="hidden" id="idf_commune_recherches_personne" name="idf_commune_recherche">');
print('<input type="hidden" id="rayon_recherches_personne" name="rayon">');
print('<input type="hidden" id="paroisses_rattachees_recherches_personne" name="paroisses_rattachees">');
print('<input type="hidden" id="annee_min_recherches_personne" name="annee_min">');
print('<input type="hidden" id="annee_max_recherches_personne" name="annee_max">');
print('<input type="hidden" id="releve_mois_min_personne" name="releve_mois_min">');
print('<input type="hidden" id="releve_annee_min_personne" name="releve_annee_min">');
print('<input type="hidden" id="releve_mois_max_personne" name="releve_mois_max">');
print('<input type="hidden" id="releve_annee_max_personne" name="releve_annee_max">');
print('<input type="hidden" id="releve_type_personne" name="releve_type">');

$ga_sexe[0] = 'Tous';
print('<div class="form-row">');

print('<div class="form-group col-md-2">');
print('<label for="sexe">Sexe:</label><select name="sexe" id="sexe" class="form-control">');
print(chaine_select_options($gst_sexe,$ga_sexe));
print('</select>');
print('</div>');

print('<div class="form-group col-md-3">');
print("<label for=\"nom\">Nom:</label><input type=text name=nom id=nom size=15 maxlength=30 value=\"$gst_nom\" class=\"form-control\">");
print('</div>');

print('<div class="form-group col-md-3">');
print("<label for=\"prenom\">Pr&eacute;nom:</label><input type=text name=prenom id=prenom size=15 maxlength=30 value=\"$gst_prenom\" class=\"form-control\">" );
print('</div>');

print('<div class="form-group col-md-3">');
print('<label for="idf_type_presence"> Type de pr&eacute;sence<sup>*</sup>:</label><select name="idf_type_presence" id="idf_type_presence" class="form-control" aria-describedby="aideTP">');
print(chaine_select_options($gi_idf_type_presence,$a_types_presence));
print('</select>');
print('<small id="aideTP" class="form-text text-muted">Nim&egrave;gue ne renseignant pas le sexe d\'un parrain, t&eacute;moin ou marraine, ne pas le sp&eacute;cifier dans une recherche de ce type</small>');
print('</div>');

print('<div class="form-group col-md-1">');
if ($gst_variantes=='')
   print('<input type=checkbox name=variantes id=variantes value=oui class="form-check-input">');
else
   print('<input type=checkbox name=variantes id=variantes value=oui checked class="form-check-input">');
print('<label for="variantes" class="form-check-label">Recherche par variantes connues</label>');    
print('</div>');

print('</div>'); // fin ligne

print('<div class="form-row col-md-12">');
print('<div class="form-group col-md-8">');
print("<label for=\"commentaires\">Recherche libre dans les commentaires:</label><input type=text name=commentaires id=commentaires size=40 maxlength=40 value=\"$gst_commentaires\" class=\"form-control\">");
print('</div>'); 

print('</div>'); //fin ligne

print('<div class="form-row">');

print('<div class="btn-group" role="group">');
print('<input type=submit name=Rechercher value="Rechercher la personne" class="btn btn-primary">');
print('<input type=button value="Effacer tous les Champs" name="raz" class="btn btn-warning raz">');
print('</div>');

print('</div>'); //fin ligne

print("</form>");
print('</div>'); 
print('</div>');  // fin pav�

print('<div class="pave-tous-patronymes panel panel-primary">');
print('<div class="panel-heading">Recherche sur tous les patronymes</div>');
print('<div class="panel-body">');

print('<form id="recherches_tous_patronymes" method="post" action="ReponsesRecherches.php">');
print('<input type="hidden" name="type_recherche" value="tous_patronymes">');
print('<input type="hidden" id="idf_source_recherches_tous_patronymes" name="idf_source_recherche">');
print('<input type="hidden" id="idf_type_acte_recherches_tous_patronymes" name="idf_type_acte_recherche">');
print('<input type="hidden" id="idf_commune_recherches_tous_patronymes" name="idf_commune_recherche">');
print('<input type="hidden" id="rayon_recherches_tous_patronymes" name="rayon">');
print('<input type="hidden" id="paroisses_rattachees_recherches_tous_patronymes" name="paroisses_rattachees">');
print('<input type="hidden" id="annee_min_recherches_tous_patronymes" name="annee_min">');
print('<input type="hidden" id="annee_max_recherches_tous_patronymes" name="annee_max">');
print('<input type="hidden" id="releve_mois_min_tous_patronymes" name="releve_mois_min">');
print('<input type="hidden" id="releve_annee_min_tous_patronymes" name="releve_annee_min">');
print('<input type="hidden" id="releve_mois_max_tous_patronymes" name="releve_mois_max">');
print('<input type="hidden" id="releve_annee_max_tous_patronymes" name="releve_annee_max">');
print('<input type="hidden" id="releve_type_tous_patronymes" name="releve_type">');


print('<div class="form-row">');
print('<div class="btn-group" role="group">');   
print('<input type=submit name=Rechercher value="Rechercher les patronymes" class="btn btn-primary">');
print('<input type=button value="Effacer tous les Champs" name="raz" class="btn btn-warning raz">');
print('</div>');
print('</div>'); //fin ligne

print("</form>");
print('</div>'); // fin body pav�
print("</div>"); // fin pav�

print("</div>"); // fin panel-group
print("</div>"); // fin container

print("</body>");
print("</html>");
//print_r($_SESSION);
//$connexionBD->ferme(); 
?>