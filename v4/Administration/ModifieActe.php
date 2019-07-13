<?php

require_once('../Commun/Identification.php');
require_once '../Commun/commun.php';
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/VerificationDroits.php');
require_once('../Commun/phonex.cls.php');
require_once('../Commun/Benchmark.inc');

verifie_privilege(DROIT_CHARGEMENT);
	
require_once('../Commun/finediff.php');
require_once '../Administration/chargement/chargement.php';
require_once '../Administration/chargement/CompteurActe.php';
require_once '../Administration/chargement/Acte.php';	
require_once '../Administration/chargement/CompteurPersonne.php';
require_once '../Administration/chargement/Personne.php';
require_once '../Administration/chargement/CommunePersonne.php';
require_once '../Administration/chargement/Patronyme.php';
require_once '../Administration/chargement/Prenom.php';
require_once '../Administration/chargement/Profession.php';
require_once '../Administration/chargement/TypeActe.php';
require_once '../Administration/chargement/Union.php';
require_once '../Administration/chargement/StatsPatronyme.php';
require_once '../Administration/chargement/StatsCommune.php';
		
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

/*
* Construit la chaine permettant la validation des param�tres d'un formulaire
* @return string r�gles de validation
*/
function regles_validation()
{
  global $go_acte;
	$a_filtres = $go_acte->getFiltresParametres();
  $ga_liste_personnes = $go_acte->getListePersonnes();
	$a_messages =array();
	$st_chaine='';
	foreach ($ga_liste_personnes as $o_pers)
	{
    foreach ($o_pers->getFiltresParametres() as $st_param => $a_filtres_personne)
    {
      $a_filtres[$st_param]=$a_filtres_personne;
    }  
	}
	foreach ($a_filtres as $st_param => $a_liste_tests)
	{
		$st_test =	"\t$st_param: { ";
		$st_message= "\t$st_param: { ";
		$a_tests=array();
		$a_msgs=array();
		foreach($a_liste_tests as $a_test)
		{
			list($st_type_test,$st_valeur_test,$st_message_erreur) = $a_test;
			$a_tests[] = "\t\t$st_type_test: $st_valeur_test";
			$a_msgs[] = "\t\t$st_type_test: \"$st_message_erreur\"";
		}
		$st_test .= implode(",\n",$a_tests);
		$st_test .= "\n\t}";
		$st_message .= implode(",\n",$a_msgs);
		$st_message .= "\n\t}";
		$a_regles[]=$st_test;
		$a_messages[]=$st_message;
	}
	$st_chaine=	"rules: {\n".implode(",\n",$a_regles)."},\n";
	$st_chaine.= "messages: {\n".implode(",\n",$a_messages)."}\n";
	return  $st_chaine;
}

$gst_mode = isset($_REQUEST['MODE']) ? $_REQUEST['MODE'] : '';

if (isset($_REQUEST['idf_acte']))
{
	//+ v�rification que l'acte a bien �t� demand� par l'adh�rent connect�
	$gi_idf_acte= (int) $_REQUEST['idf_acte'];
	$go_acte = new Acte($connexionBD,null,null,null,null,null,null);
	$a_filtres_acte=array();
  $go_acte->setFiltresParametres($a_filtres_acte);  
  $go_acte->charge($gi_idf_acte);
  if (empty($gst_mode))
  {
    $gst_formulaire = $go_acte->affichage_image_permalien(800,800); 
    $gst_formulaire .= $go_acte->formulaire_haut_acte();
    $gst_formulaire .= $go_acte->formulaire_liste_personnes();
    $gst_formulaire .= $go_acte->formulaire_bas_acte();
  }
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='../css/styles.css' type='text/css' rel='stylesheet'>
<link href='../css/bootstrap.min.css' rel='stylesheet'>;
<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>
<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>
<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>
<meta http-equiv="content-language" content="fr">
<script src='../js/jquery-min.js' type='text/javascript'></script>
<script src='../js/jquery.validate.min.js' type='text/javascript'></script>
<script src='../js/additional-methods.min.js' type='text/javascript'></script>
<script src='../js/jquery-ui.min.js' type='text/javascript'></script>
<script src='../js/CalRep.js' type='text/javascript'></script>
<script src='../js/iviewer/jquery-ui.min.js' type='text/javascript'></script>
<script src='../js/iviewer/jquery.mousewheel.min.js' type='text/javascript'></script>
<script src='../js/iviewer/jquery.iviewer.js' type='text/javascript'></script>
<link href='../js/iviewer/jquery.iviewer.css' type='text/css' rel='stylesheet'>
<script src='../js/bootstrap.min.js' type='text/javascript'></script>
<script type='text/javascript'>
$(document).ready(function() {
<?php
print file_get_contents('../js/dateITA.js');
?>
$("#edition_acte").validate({
<?php
print regles_validation();
?>,
errorElement: "em",
		errorPlacement: function ( error, element ) {
			// Add the `help-block` class to the error element
			error.addClass( "help-block" );

			// Add `has-feedback` class to the parent div.form-group
			// in order to add icons to inputs
			element.parents( ".lib_erreur" ).addClass( "has-feedback" );

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
			$( element ).parents( ".lib_erreur" ).addClass( "has-error" ).removeClass( "has-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
		},
		unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".lib_erreur" ).addClass( "has-success" ).removeClass( "has-error" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
		}
});
$(function() {
   $("#bouton_supprimer").click(function(){
      if (confirm("Confirmer la suppression?")){
         $('#suppression_acte').submit();
      }
   });
});
<?php
//print parametres_completion_auto();
print $go_acte->fonctions_jquery_completion();
print file_get_contents('../js/EditionActe.js');
?>
 }); 
});  
</script>
<?php
print("<title>Modification d'un acte</title>");
print("</head>\n");
/******************************************************************************/
/*                     CORPS DE LA PAGE                                   	  */
/******************************************************************************/
print("<body>\n");
print('<div class="container">');
require_once("../Commun/menu.php");

print('<div class="panel panel-primary">');
print("<div class=\"panel-heading\">Modification d'un acte</div>");
print('<div class="panel-body">');

if (empty($gst_mode))
{
  print("<form id=\"edition_acte\" method=\"POST\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"MODE\" value=\"EDITION\">");
  print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">");
  print("<table class=\"table table-bordered\">");
  print($gst_formulaire);
  print("</table>");
  print('<button type="submit" class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-edit"></span> Modifier l\'acte</button>');
  print("</form>");
  print("<form id=\"suppression_acte\" name=\"suppression_acte\" method=\"POST\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">\n");
  print("<input type=\"hidden\" name=\"MODE\" value=\"SUPPRESSION\">");
  print('<button type="button" class="btn btn-danger col-md-4 col-md-offset-4" id="bouton_supprimer"><span class="glyphicon glyphicon-trash"></span> Supprimer l\'acte</button>');

  print("</form>");
}
else                             
{
  $gi_idf_acte= isset($_REQUEST['idf_acte']) ?(int) $_REQUEST['idf_acte'] :  null;
  if (empty($gi_idf_acte))
  {
     print("<div class=\"alert alert-danger\">Pas d'identifiant d'acte d&eacute;fini</div>");
  }
  else
  {  
    $stats_patronyme = new StatsPatronyme($connexionBD,$go_acte->getIdfCommune(),$go_acte->getIdfSource());
    $stats_commune = new StatsCommune($connexionBD,$go_acte->getIdfCommune(),$go_acte->getIdfSource());
    $unions = Union::singleton($connexionBD);
    switch($gst_mode)
    {
      case 'EDITION':        
        $go_acte->initialise_depuis_formulaire($gi_idf_acte);
        $st_requete = "LOCK TABLES `personne` write, `patronyme` as pat write, `patronyme` write, `prenom` write  ,`acte` write, `profession` write, `commune_personne` write, `union` write, `stats_patronyme` write,`stats_commune` write,`acte` as a read,`personne` as p read, `type_acte` read, `type_acte` as ta read,`prenom_simple` write, `groupe_prenoms` write";
        $connexionBD->execute_requete($st_requete);
        $go_acte->maj_liste_personnes($go_acte->getIdfSource(),$go_acte->getIdfCommune(),$unions);
		$go_acte->sauve();
        $stats_patronyme->maj_stats($go_acte->getIdfTypeActe(),$gi_idf_acte);
        $stats_commune->maj_stats($go_acte->getIdfTypeActe());
        $connexionBD->execute_requete("UNLOCK TABLES");
        print("<div class=\"text-center\"><textarea rows=40 cols=80>\n");
        print($go_acte->versChaine());
        print("</textarea></div>\n");  
        print("<div class=\"alert alert-success\"><br>Modification effectu&eacute;e</div><br>\n");
        print("<form id=\"export_nimv3\" method=\"POST\" action=\"ExportNimV3.php\">");
        print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">\n");
		print('<button type="submit" class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-download-alt"></span> Export Nimegue V3</button>');
        print("</form>");
        
      break;
      case 'SUPPRESSION':
        $st_requete = "LOCK TABLES `personne` write, `patronyme` as pat write,`acte` write, `profession` write, `commune_personne` write, `union` write, `stats_patronyme` write,`stats_commune` write,`acte` as a read,`personne` as p read, `type_acte` read, `type_acte` as ta read";
        $connexionBD->execute_requete($st_requete);
        $connexionBD->execute_requete("DELETE FROM `personne` where idf_acte=$gi_idf_acte");
		$connexionBD->execute_requete("DELETE FROM `union` where idf_acte=$gi_idf_acte");
        $connexionBD->execute_requete("DELETE FROM `acte` where idf=$gi_idf_acte");
        $stats_patronyme->maj_stats($go_acte->getIdfTypeActe(),null);
        $stats_commune->maj_stats($go_acte->getIdfTypeActe());
        $connexionBD->execute_requete("UNLOCK TABLES");
        print("<div class=\"alert alert-success\">Acte supprim&eacute;</div>");
      break;
    }  
  }
}
print("</div></div>");  
print("<a href=\"../Recherches.php\" class=\"btn btn-primary col-md-4 col-md-offset-4\"><span class=\"glyphicon glyphicon-search\"></span> Retour au menu recherche</a>");
print("</div></body></HTML>\n");
?>