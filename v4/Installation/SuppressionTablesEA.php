<?php

require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/Identification.php');

require_once('../Commun/ConnexionBD.php');
require_once('../Commun/commun.php');


print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
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
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print('<title>Suppression des tables ExpoActes</title>');
print("<script type='text/javascript'>");
?>
$(document).ready(function() {
	$("#formulaire_suppression").validate({
	submitHandler: function(form) {
		var question = 'Etes-vous sûr de supprimer toutes les tables ExpoActes ?';
		if (confirm(question))
		{
			 form.submit();
		}
	}	
	});
	});
<?php
print("</script>");
print('</head>');
print('<body>');
print('<div class="container">');

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;
$gst_prefixe = 'act';
print('</div></body></html>');
switch($gst_mode)
{
   case 'FORMULAIRE' :
    print('<div class="panel panel-primary">');
    print('<div class="panel-heading">Suppression des tables ExpoActes</div>');
    print('<div class="panel-body">');
    print("<form enctype=\"multipart/form-data\" id=\"formulaire_suppression\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
    print('<button type=submit class="btn btn-danger col-md-offset-4 col-md-4"><span class="glyphicon glyphicon-trash"> Lancer la suppression de toutes les tables ExpoActes</button>');	
    print('<input type="hidden" name="mode" value="SUPPRESSION">');
	print('</div></div>');
   break;
   case 'SUPPRESSION' :
	$a_tables = array('nai3','mar3','dec3','div3','geoloc','log','metadb','metalg','mgrplg','params','prenom','sums','traceip','user3');
	foreach ($a_tables as $st_table)
	{
		$st_table =  sprintf("%s_%s",$gst_prefixe,$st_table);
		print(sprintf("<div class=\"alert alert-info\">Suppression de la table %s</div>",$st_table));
		$st_requete = "drop table $st_table";
		$connexionBD->execute_requete($st_requete);
	}
   break;
   default : print("mode $gst_mode inconnu");   
}   
   
?>