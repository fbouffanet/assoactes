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
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
//print("<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
//print("<script src='https://code.jquery.com/jquery-3.3.1.min.js' type='text/javascript'></script>");
print("<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/select2.min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>"); 
//print("<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js' type='text/javascript'></script>"); 
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
    }, "l'année maximale doit être plus grande que l'année minimale");
	
	$.validator.addMethod('verifDate', function(value, element, param) {		
		
		var annee = parseFloat($(param).val());
		value = parseFloat(value);
		
		if(jQuery.trim(annee).length > 0 && !isNaN(annee)){
			if(isNaN(value) ){
				return false;
			}
		}
		return true;
		
    }, "La période est invalide.");

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
    }, "la date maximale doit être plus grande que la date minimale");

    jQuery.validator.addMethod("libelle_joker", function(value, element) {
        // allow any non-whitespace characters as the host part
        var libelle = value.replace(/\*+/g, '*');
        return (libelle != '*' && libelle != '!') || ((libelle == '*' || libelle == '!') && $("#idf_commune_recherches_communes").val() != '');
    }, 'La commune doit être spécifiée quand le caractère joker ou ! est utilisé');

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
                integer: "L'année doit être un entier",
                minlength: "L'année doit comporter 4 chiffes"
            },
            annee_max: {
                integer: "L'année doit être un entier",
                minlength: "L'année doit comporter 4 chiffes"
            },
            releve_annee_min_communes: {
                integer: "L'année doit être un entier",
                minlength: "L'année doit comporter 4 chiffes",
                required: "L'année est obligatoire"
            },
            releve_annee_max_communes: {
                integer: "L'année doit être un entier",
                minlength: "L'année doit comporter 4 chiffes",
                required: "L'année est obligatoire"
            },
            idf_commune_recherches_communes: {
                required: "Une commune doit être remplie si le rayon est non vide ou si tous les patronymes sont choisis"
            },
            rayon: {
                integer: "Le rayon doit être un entier"
            }
        }
    });

    jQuery.validator.addMethod("patro_recherche", function(value, element) {
        var patro = value.replace(/\*+/g, '*');
        return this.optional(element) || (patro == '*' || patro.length >= 3 || patro == '!');
    }, "Le patronyme doit comporter au moins 3 caractères (* comprises) ou correspondre à * ou ! exactement");

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
                required: "Le nom de l'époux est obligatoire"
            },
            nom_epse: {
                required: "Le nom de l'épouse est obligatoire"
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

print("<input type=hidden name=recherche value=\"\">");
print('<form id="recherches_communes" >');
print('<div class="form-row align-items-center"><div class="form-group col-md-4">');
print('<label for="idf_source_recherches_communes">Source:</label><select name="idf_source_recherches_communes" id="idf_source_recherches_communes" class="js-select-avec-recherche" >');
$a_sources[0] = 'Toutes';
print(chaine_select_options($gi_idf_source,$a_sources));
print('</select></div>');

print('<div class="form-group col-md-4"><label for="idf_type_acte_recherches_communes">Type d\'acte:</label><select name="idf_type_acte_recherches_communes" id="idf_type_acte_recherches_communes" class="js-select-avec-recherche">');
$a_types_acte[0] = 'Tous';
print(chaine_select_options($gi_idf_type_acte,$a_types_acte));
print('</select>');
print('</div></div>');

/* ligne commune */
print('<div class="form-row">');
print('<div class="form-group col-md-4"><label for="idf_commune_recherches_communes">Commune/Paroisse:</label> <select name="idf_commune_recherches_communes" id="idf_commune_recherches_communes" class="js-select-avec-recherche">');
$a_toutes_communes = array(''=>'Toutes')+$a_communes_acte;
print(chaine_select_options($gi_idf_commune,$a_toutes_communes));
print('</select></div>');

print("<div class=\"input-group col-md-4\"><span class=\"input-group-addon\">Rayon de recherche:</span><input type=text name=rayon id='rayon_recherches_communes' size=2 MAXLENGTH=2 value=\"$gi_rayon\"><span class=\"input-group-addon\">Km</span></div>");

print('<div class=\"input-group col-md-4\"><span class=\"input-group-addon\">Paroisses rattach&eacute;es:</span>');

if ($gst_paroisses_rattachees=='')
   print('<input type=checkbox name=paroisses_rattachees id="paroisses_rattachees_recherches_communes" value=oui>');
else
   print('<input type=checkbox name=paroisses_rattachees id="paroisses_rattachees_recherches_communes" value=oui>');
print('</div>');
print('</div>');

/* ligne années */
print('<div class="form-row">');
print('<div class="form-group align-items-center col-md-offset-4 col-md-3">');
print("<div class=\"input-group\"><span class=\"input-group-addon\">Ann&eacute;es de </span><input type=text name=annee_min id=\"annee_min_recherches_communes\" size=4 value=\"$gi_annee_min\"><span class=\"input-group-addon\"> &agrave; </span><input type=text name=annee_max size=4 id=\"annee_max_recherches_communes\" value=\"$gi_annee_max\"></div>");
print('</div>');
print('</div>');

/* dates de releves */
print('<div class="form-row">');
print('<div class="input-group col-md-8">');
print("<span class=\"input-group-addon\">Actes</span><select id=\"releve_type_communes\" name=\"releve_type_communes\">");
$options = array(0=>'publiés', 1=>"modifiés");
print(chaine_select_options($gst_releve_type,$options));
print("</select>");
print("<span class=\"input-group-addon\">entre</span><select id=\"releve_mois_min_communes\" name=\"releve_mois_min_communes\">");

for($i = 1; $i <= 12; $i++){
	$mois[$i] = str_pad($i, 2, '0', STR_PAD_LEFT);
}

$a_mois = array(''=>'Mois')+$mois;
print(chaine_select_options($gst_releve_mois_min,$a_mois));
print("</select><input type=\"text\" name=\"releve_annee_min_communes\" id=\"releve_annee_min_communes\" size=\"4\" maxlength=\"4\" value=\"$gst_releve_annee_min\" ><span class=\"input-group-addon\">et</span><select id=\"releve_mois_max_communes\" name=\"releve_mois_max_communes\" data-max=\"" . date('n') . "\" >");
print(chaine_select_options($gst_releve_mois_max,$a_mois));
print("</select><input type=\"text\" name=\"releve_annee_max_communes\" id=\"releve_annee_max_communes\" size=\"4\" maxlength=\"4\" value=\"$gst_releve_annee_max\" data-max=\"" . date('Y') . "\"></div>");

print('<div class="input-group col-md-4">');
$checked = ($gst_releve_tous_patronymes)? ' checked="checked" ' : '';
print("<input type=\"checkbox\" name=\"releve_tous_patronymes\" id=\"releve_tous_patronymes_communes\" ". $checked ." value=\"1\" /> <label for=\"releve_tous_patronymes_communes\">Tous patronymes</label>");
print('</div></div>');

print("</form>");


print('<div class="PAVE pave-couple">');
print('Recherche par couple');
print('<br></div>');
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
print('<div class="form-row">');
print("<div class=\"form-group col-md-3 col-md-offset-1\"><label for=\"nom_epx\">Nom Epoux:</label><input type=text id=nom_epx name=nom_epx size=15 MAXLENGTH=30 value=\"$gst_nom_epx\" ></div>");
print("<div class=\"form-group col-md-4\"><label for=\"prenom_epx\">Pr&eacute;nom Epoux:</label><input type=text name=prenom_epx id=prenom_epx size=15 MAXLENGTH=30 value=\"$gst_prenom_epx\"></div>");
print('<div class=\"form-group col-md-4\"><label for\"variantes_epx\">Recherche par variantes connues:</label>');
if ($gst_variantes_epx=='')
   print('<input type=checkbox name=variantes_epx id=variantes_epx value=oui >');
else
   print('<input type=checkbox name=variantes_epx id=variantes_epx value=oui checked>');   

print('</div></div>');

print('<div class="form-row">');
print("<div class=\"form-group col-md-4\">");
print('<img src="./images/swap.png" id="echange_patros" alt="Echange les patronymes"> ');
print("<label for\"nom_epse\">Nom Epouse:</label><input type=text id=nom_epse name=nom_epse size=15 MAXLENGTH=30 value=\"$gst_nom_epse\">");
print("</div>");
print("<div class=\"form-group col-md-4\"><label for\"prenom_epse\">Pr&eacute;nom Epouse:</label><input type=text name=prenom_epse id=prenom_epse size=15 MAXLENGTH=30 value=\"$gst_prenom_epse\"></div>");

print('<div class=\"form-group col-md-4\"><label for\"variantes_epse\">Recherche par variantes connues:</label>');
if ($gst_variantes_epse=='')
   print('<input type=checkbox name=variantes_epse id=variantes_epse value=oui >');
else
   print('<input type=checkbox name=variantes_epse id=variantes_epse value=oui checked>'); 
print('</div></div>');

print('<div class="form-row">');
print('<div class="col-md-offset-4 col-md-4">');
print('<button type="submit" name=Rechercher class="btn btn-primary pull-right">Rechercher le couple</button>');
print('</div>');
print('<div class="col-md-4">');
print('<button type="button" name="raz" class="raz btn btn-warning">Effacer tous les Champs</button>');
print('</div>');
print('</div>');
print('</form></div>');

print('<div CLASS="PAVE pave-personne">');
print('Recherche par personne');
print('<br></div>');
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
print("");
print('<div style="text-align:center"><br>');
print('Sexe: <select name="sexe" id="sexe">');
print(chaine_select_options($gst_sexe,$ga_sexe));
print('</select>');

print(" Nom: <input type=text name=nom id=nom size=15 MAXLENGTH=30 value=\"$gst_nom\" > Prénom: <input type=text name=prenom id=prenom size=15 MAXLENGTH=30 value=\"$gst_prenom\">" );
print(' Type de pr&eacute;sence<sup>*</sup>: <select name="idf_type_presence" id="idf_type_presence">');
print(chaine_select_options($gi_idf_type_presence,$a_types_presence));
print('</select>');
print(' Recherche par variantes connues:');
if ($gst_variantes=='')
   print('<input type=checkbox name=variantes id=variantes value=oui >');
else
   print('<input type=checkbox name=variantes id=variantes value=oui checked>');
print('<br></div>');    
print("<div style=\"text-align:center\">Recherche libre dans les commentaires:  <input type=text name=commentaires id=commentaires size=40 MAXLENGTH=40 value=\"$gst_commentaires\"></div>");

print('<div class=alignCenter><br>(*) Nim&egrave;gue ne renseignant pas le sexe d\'un parrain, t&eacute;moin ou marraine, ne pas le sp&eacute;cifier dans une recherche de ce type<br></div>');
print('<div style="text-align:center"><br><input type=submit name=Rechercher value="Rechercher la personne" > <input type=button value="Effacer tous les Champs" name="raz" class="raz"></div> ');
print("</form>");

print('<br>');
print('<div class="PAVE pave-tous-patronymes">');
print('Recherche sur tous les patronymes');
print('<br></div>');

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
print('<div style="text-align:center"><br><input type=submit name=Rechercher value="Rechercher les patronymes" > <input type=button value="Effacer tous les Champs" name="raz" class="raz"></div> ');
print("</form>");

print("</div>");
print("</body>");
print("</html>");
//print_r($_SESSION);
//$connexionBD->ferme(); 
?>