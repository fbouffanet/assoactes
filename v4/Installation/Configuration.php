<?php

$gst_fichier_constantes = '../Commun/constantes.php';
$gst_fichier_configuration='../Commun/config.php';
if (file_exists($gst_fichier_configuration))
	require_once($gst_fichier_configuration);

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
	$("#configuration").validate({
	rules: {
     lib_asso: "required",
     lib_asso_avec: "required",
	 sigle_asso: "required",
	 email_dir_asso: {
		required: true,
		email: true
	 },
	 email_info_asso: {
		required: true,
		email: true
	 },
	 email_pres_asso: {
		required: true,
		email: true
	 },
	 email_inscription_forum: "email",
	 email_forum: "email",
	 email_admin_gbk: "email",
	 nb_points_gbk: "number"

	},
	messages: {
		lib_asso: {
			required: "Le nom du site ou association est obligatoire"
		},
		lib_asso_avec: {
			required: "Le nom du site ou association est obligatoire"
		},
		sigle_asso: {
			required: "Le sigle du site ou association est obligatoire"
		},
		email_dir_asso: {
			required: "L'email de la direction de l'association est obligatoire",
			email: "Ceci n'est pas un email"
		},
		email_info_asso: {
			required: "L'email d'information de l'association est obligatoire",
			email: "Ceci n'est pas un email"
		},
		email_pres_asso: {
			required: "L'email de la présidence de l'association est obligatoire",
			email: "Ceci n'est pas un email"
		},
		email_inscription_forum: {
			email: "Ceci n'est pas un email"
		},
		email_forum: {
			email: "Ceci n'est pas un email"
		},
		email_admin_gbk: {
			email: "Ceci n'est pas un email"
		},
		nb_points_gbk: {
			Number: "Ceci n'est pas un entier"
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
print('<title>Configuration d\'AssoActes</title>');
print('</head>');
print('<body>');
print('<div class="container">');

$gst_lib_asso = '';
$gst_lib_asso_avec = '';
$gst_sigle_asso = '';
$gst_email_inscription_forum = '';
$gst_email_forum = '';
$gst_email_dir_asso = '';
$gst_email_info_asso = '';
$gst_email_admin_gbk = '';
$gst_email_pres_asso = '';
$gst_idf_asso_gbk = '';
$gst_prefixe_adh_gbk = '';
$gi_nb_points_gbk = 0;

/*
* Renvoie le fichier de constantes dans une chaine
*  @param string $pst_fichier Fichier de constantes
*  @return string Contenu du fichier constantes sans les constantes à mettre à jour
*  @global string $gst_lib_asso
*  @global string $gst_lib_asso_avec
*  @global string $gst_sigle_asso
*  @global string $gst_email_inscription_forum
*  @global string $gst_email_forum
*  @global string $gst_email_dir_asso
*  @global string $gst_email_info_asso
*  @global string $gst_email_admin_gbk
*  @global string $gst_idf_asso_gbk
*  @global string $gst_prefixe_adh_gbk
*  @global integer $gi_nb_points_gbk

*/
function constantes($pst_fichier)
{
	global $gst_lib_asso,$gst_lib_asso_avec,$gst_sigle_asso,$gst_email_inscription_forum,$gst_email_forum,$gst_email_dir_asso,$gst_email_admin_gbk,$gst_email_pres_asso,$gst_email_info_asso,$gst_idf_asso_gbk,$gst_prefixe_adh_gbk,$gi_nb_points_gbk,$gst_clef_api_geoportail;
	$a_lignes =file($pst_fichier);
	$st_chaine_constantes = '';
	foreach ($a_lignes as $st_ligne)
	{
		if (preg_match('/^define\(\'LIB_ASSO\',\"([\w\s\'-]*)\"\);/',$st_ligne,$a_correspondances))
			$gst_lib_asso = $a_correspondances[1];
		else if (preg_match('/^define\(\'LIB_ASSO_AVEC\',\"([\w\s\'-]*)\"\);/',$st_ligne,$a_correspondances))
			$gst_lib_asso_avec = $a_correspondances[1];
		else if (preg_match('/^define\(\'SIGLE_ASSO\',\'([\w-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_sigle_asso = $a_correspondances[1];
		else if (preg_match('/^define\(\'EMAIL_INSCRIPTION_FORUM\',\'([\w\.\@-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_email_inscription_forum = $a_correspondances[1];
		else if (preg_match('/^define\(\'EMAIL_FORUM\',\'([\w\.\@-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_email_forum = $a_correspondances[1];
		else if (preg_match('/^define\(\'EMAIL_DIRASSO\',\'([\w\.\@-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_email_dir_asso = $a_correspondances[1];
		else if (preg_match('/^define\(\'EMAIL_INFOASSO\',\'([\w\.\@-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_email_info_asso = $a_correspondances[1];
		else if (preg_match('/^define\(\'EMAIL_GBKADMIN\',\'([\w\.\@-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_email_admin_gbk = $a_correspondances[1];
		else if (preg_match('/^define\(\'EMAIL_PRESASSO\',\'([\w\.\@-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_email_pres_asso = $a_correspondances[1];
		else if (preg_match('/^define\(\'IDF_ASSO_GBK\',\'([\w\.-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_idf_asso_gbk = $a_correspondances[1];
		else if (preg_match('/^define\(\'PREFIXE_ADH_GBK\',\'([\w\.-]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_prefixe_adh_gbk = $a_correspondances[1];
		else if (preg_match('/^define\(\'NB_POINTS_GBK\',([\d]*)\);/',$st_ligne,$a_correspondances))
			$gi_nb_points_gbk = $a_correspondances[1];
		else if (preg_match('/^define\(\'CLEF_API_GEOPORTAIL\',\'([\w]*)\'\);/',$st_ligne,$a_correspondances))
			$gst_clef_api_geoportail = $a_correspondances[1];
		else if (preg_match('/^\<\?php/',$st_ligne))
			continue;
		else if (preg_match('/^\?\>/',$st_ligne))
			continue;
		else
			$st_chaine_constantes .= $st_ligne;
	}
	return $st_chaine_constantes;
}

$gst_constantes = constantes($gst_fichier_constantes);
if (isset($_POST['lib_asso']))
{
	$gst_lib_asso = trim($_POST['lib_asso']);
	$gst_lib_asso_avec =trim($_POST['lib_asso_avec']);
	$gst_sigle_asso = trim($_POST['sigle_asso']);
	
	$gst_email_dir_asso = trim($_POST['email_dir_asso']);
	$gst_email_info_asso = trim($_POST['email_info_asso']);
	$gst_email_pres_asso = trim($_POST['email_pres_asso']);
	
	$gst_email_inscription_forum = trim($_POST['email_inscription_forum']);
	$gst_email_forum = trim($_POST['email_forum']);
	
	$gst_email_admin_gbk = trim($_POST['email_admin_gbk']);
	$gst_idf_asso_gbk = trim($_POST['idf_asso_gbk']);
	$gst_prefixe_adh_gbk = trim($_POST['prefixe_adh_gbk']);
	$gi_nb_points_gbk = (int) trim($_POST['nb_points_gbk']);
	$gst_clef_api_geoportail = trim($_POST['clef_api_geoportail']);
	
	$pf = fopen($gst_fichier_constantes, "w");
	if ($pf===false)
	{
		print("<div class=\"alert alert-danger\">Impossible d'eacute;crire dans $gst_fichier_constantes</div>");
	}
	else
	{
		
		fwrite($pf,"<?php\n");
		fwrite($pf,$gst_constantes);
		fwrite($pf,"\n");
		fwrite($pf,"define('LIB_ASSO',\"$gst_lib_asso\");\n");
		fwrite($pf,"define('LIB_ASSO_AVEC',\"$gst_lib_asso_avec\");\n");
		fwrite($pf,"define('SIGLE_ASSO','$gst_sigle_asso');\n");
		fwrite($pf,"\n");
		fwrite($pf,"define('EMAIL_DIRASSO','$gst_email_dir_asso');\n");
		fwrite($pf,"define('EMAIL_INFOASSO','$gst_email_info_asso');\n");
		fwrite($pf,"define('EMAIL_PRESASSO','$gst_email_pres_asso');\n");
		fwrite($pf,"\n");
		fwrite($pf,"define('EMAIL_INSCRIPTION_FORUM','$gst_email_inscription_forum');\n");
		fwrite($pf,"define('EMAIL_FORUM','$gst_email_forum');\n");
		fwrite($pf,"\n");
		fwrite($pf,"define('EMAIL_GBKADMIN','$gst_email_admin_gbk');\n");
		fwrite($pf,"define('IDF_ASSO_GBK','$gst_idf_asso_gbk');\n");
		fwrite($pf,"define('PREFIXE_ADH_GBK','$gst_prefixe_adh_gbk');\n");
		fwrite($pf,"define('NB_POINTS_GBK',$gi_nb_points_gbk);\n");
		fwrite($pf,"define('CLEF_API_GEOPORTAIL','$gst_clef_api_geoportail');\n");
		fwrite($pf,"?>\n");
		print("<div class=\"alert alert-success\">$gst_fichier_constantes sauvegard&eacute;</div>");
		print("<a href=\"$gst_url_site\" class=\"btn btn-info\" role=\"button\" target=\"_blank\">Acc&eacute;der au site</a>");
		mail('fbouffanet@yahoo.fr', 'AssoActes', "Programme installé sur $gst_url_site\n");
		print("<div>Si vous souhaitez essayer de migrer des donn&eacute;es depuis ExpoActes, cliquez sur le bouton suivant</div>");
		print("<div>Les donn&eacute;es d'ExpoActes ne sont pas modifi&eacute;es</div>");
		print("<a href=\"MigreCommunes.php\" class=\"btn btn-warning\" role=\"button\" target=\"_blank\">Migration de donn&eacute;es depuis ExpoActes</a>");
	}	
}
else	
{	
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="configuration">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Identit&eacute; du site</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"lib_asso\" class=\"col-md-4 col-form-label control-label\">Libell&eacute; du site (Exemple: Association G&eacute;n&eacute;alogique de ... ou Cercle G&eacute;n&eacute;alogique de ...):</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=lib_asso id=lib_asso value=\"$gst_lib_asso\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"lib_asso_avec\" class=\"col-md-4 col-form-label control-label\">Libell&eacute; du site avec article devant (Exemple: l'Association G&eacute;n&eacute;alogique de ... ou le Cercle G&eacute;n&eacute;alogique de ....):</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=60 size=40 name=lib_asso_avec id=lib_asso_avec value=\"$gst_lib_asso_avec\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"sigle_asso\" class=\"col-md-4 col-form-label control-label\">Sigle du site (Exemple: AG...  ou CG... ....):</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=60 size=40 name=sigle_asso id=lsigle_asso value=\"$gst_sigle_asso\" class=\"form-control\">");
    print('</div></div>');
	print("</div></div>");
	
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Emails de contact</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"email_dir_asso\" class=\"col-md-4 col-form-label control-label\">Email de la direction de l'association:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=email_dir_asso id=email_dir_asso value=\"$gst_email_dir_asso\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"email_info_asso\" class=\"col-md-4 col-form-label control-label\">Email d'information de l'association:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=email_info_asso id=email_info_asso value=\"$gst_email_info_asso\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"email_pres_asso\" class=\"col-md-4 col-form-label control-label\">Email de la pr&eacute;sidence de l'association:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=email_pres_asso id=email_pres_asso value=\"$gst_email_pres_asso\" class=\"form-control\">");
    print('</div></div>');
	print("</div></div>");
	
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Emails de forum (S'il existe)</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"email_inscription_forum\" class=\"col-md-4 col-form-label control-label\">Email d'inscription au forum:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=email_inscription_forum id=email_inscription_forum value=\"$gst_email_inscription_forum\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"email_forum\" class=\"col-md-4 col-form-label control-label\">Email du forum:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=email_forum id=email_forum value=\"$gst_email_forum\" class=\"form-control\">");
    print('</div></div>');
	print("</div></div>");
	
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Constantes G&eacute;n&eacute;abank (uniquement si recr&eacute;ditation automatique des points)</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"email_admin_gbk\" class=\"col-md-4 col-form-label control-label\">Email du responsable G&eacute;n&eacute;abank de l'Association (si erreur):</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=email_admin_gbk id=email_admin_gbk value=\"$gst_email_admin_gbk\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"idf_asso_gbk\" class=\"col-md-4 col-form-label control-label\">Identifiant G&eacute;n&eacute;abank de l'Association:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=idf_asso_gbk id=idf_asso_gbk value=\"$gst_idf_asso_gbk\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"prefixe_adh_gbk\" class=\"col-md-4 col-form-label control-label\">Pr&eacute;fixe G&eacute;n&eacute;abank de l'Association:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=prefixe_adh_gbk id=prefixe_adh_gbk value=\"$gst_prefixe_adh_gbk\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"nb_points_gbk\" class=\"col-md-4 col-form-label control-label\">Nombre de points G&eacute;n&eacute;abank d mensuels:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=nb_points_gbk id=nb_points_gbk value=\"$gi_nb_points_gbk\" class=\"form-control\">");
    print('</div></div>');
	print('</div></div>');
	
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Cartographie</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"nb_points_gbk\" class=\"col-md-4 col-form-label control-label\">Clef API G&eacute;portail (laisser vide si inutilis&eacute;e):</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=40 size=40 name=clef_api_geoportail id=clef_api_geoportail value=\"$gst_clef_api_geoportail\" class=\"form-control\">");
    print('</div></div>');
	print("</div></div>");
	
	print('<div class="form-row col-md-12">'); 
	print('<button type="submit" class="btn btn-primary  col-md-offset-4 col-md-4""><span class="glyphicon glyphicon-wrench"></span> Sauvegarder les constantes</button>'); 
	print('</div>');
	print('</form>');	
}

print('</div></body></html>');
?>
