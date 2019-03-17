<?php
//echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
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
print("<title>Gestion des Types d'actes</title>");
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
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
  $("#edition_type_acte").validate({
  rules: {
		nom_type_acte: "required"
    },
    messages: {
		nom_type_acte: {
			required: "Le nom du type est obligatoire"
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

  $("#annuler" ).click(function() {
    window.location.href = 'GestionTypesActesDivers.php';
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
   $gi_idf_type_acte = (int) $_GET['mod'];
}
else
{
	if (isset($_GET['remp']))
	{
	   $gst_mode='MENU_REMPLACER';
	   $gi_idf_type_acte = (int) $_GET['remp'];
	}
	else
	   $gi_idf_type_acte = isset($_POST['idf_type_acte']) ? (int) $_POST['idf_type_acte']:null;
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];


/**
 * Affiche la liste des types d'actes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour;
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Gestion des types d\'actes Divers</div>');
   print('<div class="panel-body">');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");

   $st_requete = "SELECT TA.idf, CONCAT('[NULL]-',TA.idf), TA.nom, TA.sigle_nimegue, 0 FROM type_acte TA LEFT OUTER JOIN acte A ON A.idf_type_acte = TA.idf WHERE A.idf_type_acte IS NULL UNION SELECT A.idf_type_acte, CONCAT('[',A.idf_type_acte,']-',CASE WHEN TA.idf IS NULL THEN 'NULL' ELSE TA.idf END), TA.nom, TA.sigle_nimegue, count(A.idf_type_acte) FROM acte A LEFT OUTER JOIN type_acte TA ON A.idf_type_acte = TA.idf GROUP BY 3 , 1, 4 ORDER BY 3";
   $a_liste_type_acte = $pconnexionBD->sql_select_liste($st_requete);
   $i_nb_types_acte=count($a_liste_type_acte);
   if ($i_nb_types_acte!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_types_acte,NB_LIGNES_PAR_PAGE,(int)($i_nb_types_acte/NB_LIGNES_PAR_PAGE),array('ID[A]-TA', 'Type_Acte','Sigle','Nb actes', 'Modifier','Convertir'));
      $pagination->init_param_bd($pconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $pagination->affiche_tableau_edition_remplacer();
   }
   else
     print('<div class="alert alert-danger">Pas de type d\'acte</div>');
   print("</form>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=\"MENU_AJOUTER\">");  
   print("<button type=submit class=\"btn btn-primary col-md-4 col-md-offset-4\">Nouveau type</button>");  
   print('</form>');
   print("<form id=nettoyage  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<input type="hidden" name="mode" value="NETTOYAGE_TYPE_ACTE">'); 
   print("<button type=submit class=\"btn btn-primary col-md-4 col-md-offset-4\">Supprimer les types d'actes inutilis&eacute;s</button>");      
   print("</form></div></div>");
}

/**
 * Affichage de la table d'�dition des types d'actes
 * @param string $pst_type_acte Nom du type d'acte
 * @param string $pst_sigle Sigle du type d'acte
 * @param integer $pi_idf_type_acte cl� idf du type d'acte
 */ 
function menu_edition($pst_type_acte,$pst_sigle,$pi_idf_type_acte)
{
   print('<div class="form-group row">');    
   print('<label for="nom_type_acte" class="col-form-label col-md-2">Type d\'acte</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=50 size=30 name=nom_type_acte id=nom_type_acte value=\"$pst_type_acte\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="sigle_type_acte" class="col-form-label col-md-2">Sigle</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=5 size=5 name=sigle_type_acte id=sigle_type_acte value=\"$pst_sigle\">");
   print('</div>');
   print('</div>');
   print('<div class="form-group row">'); 
   print('<label for="sigle_type_acte" class="col-form-label col-md-2">IDF</label>');
   print('<div class="col-md-10">');
   print("<input type=\"text\" maxlength=5 size=5 name=idf_type_acte id=idf_type_acte value=\"$pi_idf_type_acte\" readonly>");
   print('</div>');
   print('</div>');
}

/** Affiche le formulaire de modification d'un type d'acte
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_type_acte Identifiant du type d'acte � modifier 
 */ 
function menu_modifier($pconnexionBD,$pi_idf_type_acte)
{
	list($st_nom_type_acte,$st_sigle)=$pconnexionBD->sql_select_liste("select nom, sigle_nimegue from type_acte where idf=$pi_idf_type_acte");
	print('<div class="panel panel-primary">');
    print('<div class="panel-heading">Edition d\'un type d\'acte</div>');
    print('<div class="panel-body">');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_type_acte\">");
	print("<input type=hidden name=mode value=MODIFIER>");
	print("<input type=hidden name=idf_type_acte value=$pi_idf_type_acte>");
	menu_edition($st_nom_type_acte,$st_sigle,$pi_idf_type_acte);
	print("<button type=submit class=\"btn btn-primary col-md-4 col-md-offset-4\">Modifier</button>");  
	print("<button type=button id=annuler class=\"btn btn-primary col-md-4 col-md-offset-4\">Annuler</button>");
	print('</form></div></div>');
}

/** Affiche liste des types d'actes pour s�lectionner celui qui remplacera le type s�lectionn�
 */
function menu_remplacer($pconnexionBD,$pi_idf_type_acte)
{
	print("\r\n<form name='remplacertype' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return 1\">");
	print("<input type=hidden name=idf_type_acte value=$pi_idf_type_acte>");
	print("\r\n<input type=hidden name=mode value=\"REMPLACER\">");

	list($st_nom_type_acte,$st_sigle)=$pconnexionBD->sql_select_liste("select nom, sigle_nimegue from type_acte where idf=$pi_idf_type_acte");
	print('<div class="panel panel-primary">');
    print('<div class="panel-heading">Remplacement d\'un type d\'acte</div>');
    print('<div class="panel-body">');
	print('<div class="form-group row">'); 
    print('<label for="sigle_type_acte" class="col-form-label col-md-2">IDF</label>');
    print('<div class="col-md-10">');
    print("<input type=\"text\" maxlength=5 size=5 name=idf_type_acte id=idf_type_acte value=\"$pi_idf_type_acte\" readonly>");
    print('</div>');
    print('</div>');
	print('<div class="form-group row">'); 
    print('<label for="sigle_type_acte" class="col-form-label col-md-2">Sigle</label>');
    print('<div class="col-md-10">');
    print("<input type=\"text\" maxlength=5 size=5 name=sigle_type_acte id=sigle_type_acte value=\"$st_sigle\">");
    print('</div>');
    print('</div>');
	print('<div class="form-group row">');    
    print('<label for="nom_type_acte" class="col-form-label col-md-2">Type d\'acte</label>');
    print('<div class="col-md-10">');
    print("<input type=\"text\" maxlength=50 size=30 name=nom_type_acte id=nom_type_acte value=\"$st_nom_type_acte\">");
    print('</div>');
    print('</div>');
    print('<div class="form-group row">');    
    print('<label for="NouveauTypeActe" class="col-form-label col-md-2">Remplacer par </label>');
    print('<div class="col-md-10">');
    print('<select name="NouveauTypeActe" id="NouveauTypeActe" class="form-control">');
	$listetypes=$pconnexionBD->liste_valeur_par_clef("select idf, nom from type_acte order by nom");
	foreach ($listetypes as $idf=>$nom)
	{
		if($nom == $st_nom_type_acte)
		{
			print("<option value='".$idf."' selected=\"selected\">".$nom."</option>");
		}
		else
			print("<option value='".$idf."'>".$nom."</option>\r\n");
	}
    print("</select>");	
    print('</div>');
    print('</div>');
	print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Remplacer</button>');
	print('<button type=button id=annuler class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
	print('</form></div></div>');
}
/** Affiche le formulaire d'ajout d'un type d'acte
 */ 
function menu_ajouter($pi_idf_type_acte)
{
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_type_acte\" >");
	print("<input type=hidden name=mode value=\"AJOUTER\">");
	menu_edition('','',$pi_idf_type_acte);
	print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Ajouter</button>');
	print('<button type=button id=annuler class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
	print('</form>');
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

switch ($gst_mode) 
{
  case 'LISTE' : 
	menu_liste($connexionBD); 
  break;
  case 'MENU_MODIFIER' :
	menu_modifier($connexionBD,$gi_idf_type_acte);
  break;
  case 'MODIFIER' :
     $st_nom_type_acte = trim($_POST['nom_type_acte']);
     $st_sigle_type_acte = trim($_POST['sigle_type_acte']);
     $connexionBD->execute_requete("update type_acte set nom='$st_nom_type_acte', sigle_nimegue='$st_sigle_type_acte' where idf=$gi_idf_type_acte");
     menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' : 
	 $idf_type_acte = 0; 
	 $sql_req="select idf from type_acte order by idf";
	 $li_idf_type_acte=$connexionBD->sql_select($sql_req);
	 foreach ($li_idf_type_acte as $i_idf_type_acte)
		{
			$idf_type_acte++;
			if ($i_idf_type_acte>$idf_type_acte) 
			{
				$gi_idf_type_acte=$idf_type_acte;
				$idf_type_acte=$idf_type_acte+999;
			}
		}
 	 menu_ajouter($gi_idf_type_acte);
  break;
  case 'AJOUTER':
     $st_nom_type_acte = trim($_POST['nom_type_acte']);
     $st_sigle_type_acte = trim($_POST['sigle_type_acte']);
	 $gi_idf_type_acte = $_POST['idf_type_acte'];
	 $sql_req="insert into type_acte (idf, nom, sigle_nimegue) values ($gi_idf_type_acte, '$st_nom_type_acte', '$st_sigle_type_acte')";
     $connexionBD->sql_select1($sql_req);
     menu_liste($connexionBD);
  break;
  case 'MENU_REMPLACER' :
	menu_remplacer($connexionBD,$gi_idf_type_acte);
  break;
  case 'REMPLACER':
     $idf_type_acte = trim($_POST['idf_type_acte']);
     $connexionBD->execute_requete("update acte set idf_type_acte=".$_POST['NouveauTypeActe']." where idf_type_acte=$idf_type_acte");
	 //echo "update acte set idf_type_acte=".$_POST['NouveauTypeActe']." where idf_type_acte=$idf_type_acte";
     menu_liste($connexionBD);  
  break;
  case 'NETTOYAGE_TYPE_ACTE':
      $st_requete = "delete from type_acte where idf not in (select distinct idf_type_acte from acte) and idf!=".IDF_UNION;
      //print("Req=$st_requete");
      print("<div class=\"alert alert-success\"> Nettoyage effectu&eacute;</div>");
      $connexionBD->execute_requete($st_requete);
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
      print('<input type="hidden" name="mode" value="LISTE"/><br>'); 
      print("<button type=submit class=\"btn btn-primary col-md-4 col-md-offset-4\">Retour vers la gestion des types d'acte</button>");	  
      print("</form>"); 
   break;  
}  

print('</div></body></html>');

?>
