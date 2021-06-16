<?php
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CONSULT_NOT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');


print('<!DOCTYPE html>');
print("<head>");
print("<title>Consultation des liasses notariales</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/select2.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/select2-bootstrap.min.css' type='text/css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='../js/select2.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script src='./VerifieChampsGestionActionsLiasse.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {

jQuery.validator.addMethod(
    "format_date",
    function(value, element) {
		var check 			= true;
		var ListeErreurs	= "";
		var jj				= value.substring(0,2);
		var mm				= value.substring(3,5);
		var aa				= value.substring(6);
		var sep1			= value.substring(2,3);
		var sep2			= value.substring(5,6);
		if ( value != "" ) {
			if ( isNaN(jj) || jj<1 || jj>31 ) {
				check = false;
			}	
			else if ( isNaN(mm) || mm<1 || mm>12 ) {
				check = false;
			}	
			else if ( isNaN(aa) || aa<1980 || aa>2100 ) {
				check = false;
			}	
			else if ( ( mm == 4 || mm == 6 || mm == 9 || mm == 11 ) && jj > 30 ) {
				check = false;
			}	
			else if ( mm == 2 && (aa % 4) == 0 && jj > 29 ){
				check = false;
			}	
			else if ( mm == 2 && (aa % 4) != 0 && jj > 28 ){
				check = false;
			}		
			else if ( sep1 != "/" || sep2 != "/" ) {
				check = false;
			}
		}
		return this.optional(element) || check;
    },
    "La date est incorrecte. Attendu : jj/mm/aaaa"
);
	
jQuery.validator.addMethod(
    "releveur_ou_date",
    function(value, element) {
		var check 		= true;
		var releveur	= $(element).val();
		var dateReleve	= $('#date_fin_releve').val();
		if( releveur == 0 && dateReleve == '' ) {
			check=false;
		}
		return this.optional(element) || check;
    },
    "Indiquer au moins le releveur ou la date de relevé"
);

jQuery.validator.addMethod(
    "lien_publi_select",
    function(value, element) {
		var check 	= true;
		if( $(element).val() == 0 ) {
			check=false;
		}
		return this.optional(element) || check;
    },
    "Sélectionner une publication papier"
);

jQuery.validator.addMethod(
    "date_couverture_codif",
    function(value, element) {
		var check 		= true;
		var datePhoto	= $('#date_photo').val();
		var couverture	= $('#idf_couverture_photo').val();
		var codif		= $('#idf_codif_photo').val();
		if( datePhoto == '' && couverture == 0 && codif == 0 ) {
			check=false;
		}
		return this.optional(element) || check;
    },
    "Indiquer au moins la date de photo, la couverture ou la codification"
);

jQuery.validator.addMethod(
    "intervenant_priorite_program",
    function(value, element) {
		var check 		= true;
		var intervenant	= $('#idf_intervenant').val();
		var priorite	= $('#idf_priorite').val();
		var releve		= $('#program_releve').is(':checked');
		var photo		= $('#program_photo').is(':checked');
		if ( intervenant == 0 && priorite == 0 && !releve && !photo )   {
			check=false;
		}
		return this.optional(element) || check;
    },
    "Indiquer au moins l'intervenant, la priorité ou le type de programmation"
);


// --------------------------------------------------------- Navigation
$("#btListe").click(function() {
    $("#modeMenu").val('LISTE'); 
	});
	
$("#btMenuGerer").click(function() {
    $("#mode").val('MENU_GERER'); 
	});
	
// --------------------------------------------------------- Relevés
$("#btSupprimerReleve").click(function() {
	var chaine="";
	// Un seul élément
	if (document.forms['listeReleve'].elements['supp[]'].checked)	{
		chaine+=document.forms['listeReleve'].elements['supp[]'].id+"\n";
	}
	// Au moins deux éléments 
	for (var i = 0; i < document.forms['listeReleve'].elements['supp[]'].length; i++)  {
		if (document.forms['listeReleve'].elements['supp[]'][i].checked)      {
			chaine+=document.forms['listeReleve'].elements['supp[]'][i].id+"\n";
		}                                                             
	}
	if (chaine=="")  {
		alert("Pas de relevé sélectionné");
	}
	else  {
		Message="Etes-vous sûr de supprimer ces relevés :\n"+chaine+"?";
		if (confirm(Message))        {                                                                                                                                    
			document.forms['listeReleve'].submit();
		}
	}
 	});
	
$("#btMenuAjouterReleve").click(function() {
    $("#modeReleve").val('MENU_AJOUTER_RELEVE'); 
	});

$("#btAjouterReleve").click(function() {
    $("#mode").val('AJOUTER_RELEVE'); 
	});

$("#btModifierReleve").click(function() {
    $("#mode").val('MODIFIER_RELEVE'); 
	});
	
$("#majReleve").validate({
  rules: {
		idf_releveur:		{ releveur_ou_date:true },
		date_fin_releve:	{ format_date:true }
  },		
  messages: {
		idf_releveur:		{ releveur_ou_date: "Indiquer au moins le releveur ou la date de relevé" },
		date_fin_releve:	{ format_date: "La date est incorrecte. Attendu : jj/mm/aaaa" }
  }
});

// --------------------------------------------------------- Liens publications	
$("#btSupprimerLienPubli").click(function() {
	var chaine="";
	// Un seul élément
	if (document.forms['listePubli'].elements['supp[]'].checked)	{
		chaine+=document.forms['listePubli'].elements['supp[]'].id+"\n";
	}
	// Au moins deux éléments 
	for (var i = 0; i < document.forms['listePubli'].elements['supp[]'].length; i++)  {
		if (document.forms['listePubli'].elements['supp[]'][i].checked)      {
			chaine+=document.forms['listePubli'].elements['supp[]'][i].id+"\n";
		}                                                             
	}
	if (chaine=="")  {
		alert("Pas de lien de publication sélectionné");
	}
	else  {
		Message="Etes-vous sûr de supprimer ces liens de publications :\n"+chaine+"?";
		if (confirm(Message))        {                                                                                                                                    
			document.forms['listePubli'].submit();
		}
	}
    $("#modePubli").val('SUPPRIMER_LIEN_PUBLI'); 
	});
	
$("#btMenuAjouterLienPubli").click(function() {
    $("#modePubli").val('MENU_AJOUTER_LIEN_PUBLI'); 
	});
	
$("#btAjouterLienPubli").click(function() {
    $("#mode").val('AJOUTER_LIEN_PUBLI'); 
	});

$("#btModifierLienPubli").click(function() {
    $("#mode").val('MODIFIER_LIEN_PUBLI'); 
	});
	
$("#majLienPubli").validate({
  rules: {
		idf_publication:{ lien_publi_select: true }
  },		
  messages: {
		idf_publication:{ lien_publi_select: "Sélectionner une publication papier"	}
  }
});

// --------------------------------------------------------- Photos	
$("#btSupprimerPhoto").click(function() {
	var chaine="";
	// Un seul élément
	if (document.forms['listePhoto'].elements['supp[]'].checked)	{
		chaine+=document.forms['listePhoto'].elements['supp[]'].id+"\n";
	}
	// Au moins deux éléments 
	for (var i = 0; i < document.forms['listePhoto'].elements['supp[]'].length; i++)  {
		if (document.forms['listePhoto'].elements['supp[]'][i].checked)      {
			chaine+=document.forms['listePhoto'].elements['supp[]'][i].id+"\n";
		}                                                             
	}
	if (chaine=="")  {
		alert("Pas de photo sélectionné");
	}
	else  {
		Message="Etes-vous sûr de supprimer ces photos :\n"+chaine+"?";
		if (confirm(Message))        {                                                                                                                                    
			document.forms['listePhoto'].submit();
		}
	}
	});
	
$("#btMenuAjouterPhoto").click(function() {
    $("#modePhoto").val('MENU_AJOUTER_PHOTO'); 
	});
	
$("#btAjouterPhoto").click(function() {
    $("#mode").val('AJOUTER_PHOTO'); 
	});

$("#btModifierPhoto").click(function() {
    $("#mode").val('MODIFIER_PHOTO'); 
	});
	
$("#majPhoto").validate({
  rules: {
		date_photo:		{ format_date:true  },
		idf_codif_photo:{ date_couverture_codif:true }
  },		
  messages: {
		date_photo:		{ format_date: "La date est incorrecte. Attendu : jj/mm/aaaa" },
		idf_codif_photo:{ date_couverture_codif: "Indiquer au moins la date de photo, la couverture ou la codification"	}
  }
});

// --------------------------------------------------------- Programmations	
$("#btSupprimerProgram").click(function() {
	var chaine="";
	// Un seul élément
	if (document.forms['listeProgram'].elements['supp[]'].checked)	{
		chaine+=document.forms['listeProgram'].elements['supp[]'].id+"\n";
	}
	// Au moins deux éléments 
	for (var i = 0; i < document.forms['listeProgram'].elements['supp[]'].length; i++)  {
		if (document.forms['listeProgram'].elements['supp[]'][i].checked)      {
			chaine+=document.forms['listeProgram'].elements['supp[]'][i].id+"\n";
		}                                                             
	}
	if (chaine=="")  {
		alert("Pas de programmation sélectionnée");
	}
	else  {
		Message="Etes-vous sûr de supprimer ces programmations :\n"+chaine+"?";
		if (confirm(Message))        {                                                                                                                                    
			document.forms['listeProgram'].submit();
		}
	}
	});
	
$("#btMenuAjouterProgram").click(function() {
    $("#modeProgram").val('MENU_AJOUTER_PROGRAM'); 
	});

$("#btAjouterProgram").click(function() {
    $("#mode").val('AJOUTER_PROGRAM'); 
	});

$("#btModifierProgram").click(function() {
    $("#mode").val('MODIFIER_PROGRAM'); 
	});
	
$("#majProgram").validate({
  rules: {
		idf_intervenant:{ intervenant_priorite_program: true },
		date_creation:	{ format_date:true },
		date_echeance:	{ format_date:true },
		date_reelle_fin:{ format_date:true }
  },		
  messages: {
		idf_intervenant:{ intervenant_priorite_program: "Indiquer au moins l'intervenant, la priorité ou le type de programmation"	},
		date_creation:	{ format_date: "La date est incorrecte. Attendu : jj/mm/aaaa" },
		date_echeance:	{ format_date: "La date est incorrecte. Attendu : jj/mm/aaaa" },                                                                                              
		date_reelle_fin:{ format_date: "La date est incorrecte. Attendu : jj/mm/aaaa" }
  }
});

// --------------------------------------------------------- Releveurs ou photographes	
$("#btMenuAjouterReleveur").click(function() {
    $("#modeMenu").val('MENU_AJOUTER_RELEVEUR'); 
	});
	
$("#btAjouterReleveur").click(function() {
    $("#mode").val('AJOUTER_RELEVEUR'); 
	});
	
$("#ajoutReleveur").validate({
  rules: {
		numero:			{ required: true,	integer:true },
		depose_ad:		{ depose_avec_dept:true },
		dept_depose_ad:	{ dept_avec_depose:true },
		forme_liasse:	{ required: true }	
  },		
  messages: {
		numero:			{ required: "Vous devez saisir le dernier chiffre du numéro de liasse", integer: "Vous devez saisir un chiffre"	},
		depose_ad:		{ depose_avec_dept: "Le département doit être renseigné pour une liasse déposée aux AD"	},
		dept_depose_ad:	{ dept_avec_depose: "La case 'Déposée aux AD' doit être cochée quand le département est renseigné"	},                                                                                              
		forme_liasse:	{ required: "La forme de la liasse est obligatoire"	}
  }
});

// --------------------------------------------------------- Publications	
$("#btMenuGerePubli").click(function() {
    $("#mode").val('MENU_GERER_PUBLI'); 
	});
	
$("#btMenuAjouterPubli").click(function() {
    $("#mode").val('MENU_AJOUTER_PUBLI'); 
	});
	
$("#btAjouterPubli").click(function() {
    $("#mode").val('AJOUTER_PUBLI'); 
	});
	
$("#btModifierPubli").click(function() {
    $("#mode").val('MODIFIER_PUBLI'); 
	});
	
});
</script>
<?php

print('</head>');
print('<body><div class="container">');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

if (isset($_GET['initpub'])) {
	$gst_m1 = 'MENU_GERER_PUBLI';
}
elseif (isset($_POST['modeReleve'])) {
	$gst_m1 = $_POST['modeReleve']; 
}
elseif (isset($_POST['modePubli'])) {
	$gst_m1 = $_POST['modePubli'];
}
elseif (isset($_POST['modePhoto'])) {
	$gst_m1 = $_POST['modePhoto'];
}
elseif (isset($_POST['modeProgram'])) {
	$gst_m1 = $_POST['modeProgram'];
}
elseif (isset($_POST['modeMenu'])) {
	$gst_m1 = $_POST['modeMenu'];
}
else {
	$gst_m1 = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
}
$gst_mode = isset($_REQUEST['smode']) ? $_REQUEST['smode'] : $gst_m1 ;

if (isset($_GET['mod'])) {
	if(substr($_GET['mod'],0,3) == 'REL') {
		$gst_mode='MENU_MODIFIER_RELEVE';
		$gi_idf_releve = substr($_GET['mod'], 3,10);
		}
	elseif(substr($_GET['mod'],0,3) == 'PUB') {
		$gst_mode='MENU_MODIFIER_LIEN_PUBLI';
		$gi_idf_lien_publication = substr($_GET['mod'], 3,10);
	}
	elseif(substr($_GET['mod'],0,3) == 'PPA') {
		$gst_mode='MENU_MODIFIER_PUBLI';
		$gi_idf_publication = substr($_GET['mod'], 3,10);
	}
	elseif(substr($_GET['mod'],0,3) == 'PHO') {
		$gst_mode='MENU_MODIFIER_PHOTO';
		$gi_idf_photo = substr($_GET['mod'], 3,10);
	}
	elseif(substr($_GET['mod'],0,3) == 'PRO') {
		$gst_mode='MENU_MODIFIER_PROGRAM';
		$gi_idf_program = substr($_GET['mod'], 3,10);
	}
	else {
		$gst_mode='MENU_GERER';
		$_SESSION['cote_liasse_gal'] = $_GET['mod'];
		list($_SESSION['periodes_gal'], $_SESSION['notaires_gal'])
		=$connexionBD->sql_select_listeUtf8("select libelle_annees, libelle_notaires from liasse where cote_liasse='".$_SESSION['cote_liasse_gal']."'");
	}
}

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

$a_releveur = $connexionBD->liste_valeur_par_clef("SELECT idf,concat(nom, ' ', prenom) as nom FROM releveur order by nom");
$a_releveur[0] = 'Inconnu';
$a_couverture_photo = $connexionBD->liste_valeur_par_clef("SELECT idf, nom FROM couverture_photo order by idf");
$a_couverture_photo[0] = '';
$a_codif_photo = $connexionBD->liste_valeur_par_clef("SELECT idf, nom FROM codif_photo order by idf");
$a_codif_photo[0] = '';
$a_priorite_program = $connexionBD->liste_valeur_par_clef("SELECT idf, nom FROM programmation_releve order by idf");
$a_priorite_program[0] = '';
$pa_publication = $connexionBD->liste_valeur_par_clef("SELECT idf, concat(nom, ', publi&eacute; le ', ".
                                                      "                   case when date_publication = str_to_date('0000/00/00', '%Y/%m/%d') then '' ".
                                                      "                        else date_format(date_publication, '%d/%m/%Y') ".
                                                      "                        end, ', ', ".
													  "                   substr(info_complementaires,1,80)) as nom ".
													  "FROM publication_papier order by nom");
$pa_publication[0] = '';
//print($gst_mode);
require_once('ConsultationLiassesFc.php');
switch ($gst_mode) {
	case 'LISTE' : 
		if(isset($_SESSION['cote_liasse_gal'])) {
			unset($_SESSION['cote_liasse_gal']);
		}
		menu_liste($connexionBD); 
		break;
	case 'MENU_GERER' :
		menu_gerer($connexionBD);
		break;
}  
print('</div></body></html>');
//$connexionBD->ferme(); 
?>