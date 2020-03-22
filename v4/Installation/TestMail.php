<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';

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
	$("#test_email").validate({
	rules: {
     email_destinataire: {"required": true,
			 "email":true
	 },
	 email_origine: {
			 "email":true
	 }
	},
	messages: {
		email_destinataire: {
			required: "L'email est obligatoire",
			email:"Ceci n'est pas un email"
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
	
	$( "#bouton_basique" ).click(function() {
      $("#mode").val('basique');
      $("#test_email").submit();
	});
	
	$( "#bouton_brut" ).click(function() {
      $("#mode").val('brut');
      $("#test_email").submit();
	});
	
	$( "#bouton_html" ).click(function() {
      $("#mode").val('html');
      $("#test_email").submit();
	});
	
	$( "#bouton_multiple" ).click(function() {
      $("#mode").val('multiple');
      $("#test_email").submit();
	});
}); 
   
</script>
<?php

/* Affiche le menu */
function affiche_menu()
{
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="test_email">');
	print('<input name="mode" id="mode" type="hidden" value="">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Test d'envoi de mail</div>");
	print('<div class="panel-body">');	
	print('<div class="form-group row">');  
    print("<label for=\"email_origine\" class=\"col-md-4 col-form-label control-label\">Email d'origine</label>");
	print('<div class="col-md-8">');
	print("<input type=text maxlength=40 size=40 name=email_origine id=email_origine value=\"".EMAIL_DIRASSO."\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');  
    print("<label for=\"lib_origine\" class=\"col-md-4 col-form-label control-label\">libell&eacute; d'origine</label>");
	print('<div class="col-md-8">');
	print("<input type=text maxlength=40 size=40 name=lib_origine id=lib_origine value=\"".LIB_ASSO."\" class=\"form-control\">");
    print('</div></div>');
    print('<div class="form-group row">');  
    print("<label for=\"email_destinataire\" class=\"col-md-4 col-form-label control-label\">Email de destination</label>");	
	print('<div class="col-md-8">');
	print("<input type=text maxlength=40 size=40 name=email_destinataire id=email_destinataire value=\"fbouffanet@yahoo.fr\" class=\"form-control\">");
    print('</div></div>');
	//print('<div class="btn-group " role="group">');
	print('<button type="button" id="bouton_basique" class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-envelope"></span> Envoyer un email basique</button>'); 
	print('<button type="button" id="bouton_brut" class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-envelope"></span> Envoyer un email brut</button>');
    print('<button type="button" id="bouton_html" class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-envelope"></span> Envoyer un email HTML</button>');
    print('<button type="button" id="bouton_multiple" class="btn btn-primary col-md-4 col-md-offset-4"><span class="glyphicon glyphicon-envelope"></span> Envoyer un email en plusieurs formats</button>');  	
	print('</div></div>');
	print('</form>');
}
print('<title>Test de l\'envoi des emails</title>');
print('</head>');
print('<body>');
print('<div class="container">');
if (empty($_POST['mode']))
{
	affiche_menu();	
}
else
{
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $st_email_destinataire=trim($_POST['email_destinataire']);
    $st_email_origine=trim($_POST['email_origine']);	
	switch($_POST['mode'])
	{
		case 'basique':
		    print("<div class=\"alert alert-info\"> Envoi d'un mail basique</div>");
			$st_entete = '';
			if (!empty($st_email_origine))
				$st_entete  = "From: $st_email_origine\r\n";
			if (empty($st_entete))
			{
				if (mail($st_email_destinataire, "Test de mail brut", "Ceci est un message brut"))
					print("<div class=\"alert alert-success\">Message envoy&eacute; &agrave; $st_email_destinataire</div>");
				else
				{
					print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_email_destinataire</div>");
					print("<blockquote>".error_get_last()['message']."</blockquote>");	
				}
			}	
			else
			{	
				if (mail($st_email_destinataire, "Test de mail brut", "Ceci est un message brut", $st_entete))
					print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_email_destinataire</div>");
				else
				{
					print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_email_destinataire</div>");
					print("<blockquote>".error_get_last()['message']."</blockquote>");	
				}
			}	
			affiche_menu();
		break;
		case 'brut':
			print("<div class=\"alert alert-info\"> Envoi d'un mail brut</div>");
            $st_lib_origine=trim($_POST['lib_origine']);			
		    $st_entete  = 'MIME-Version: 1.0' . "\n";
			$st_entete .= "Content-Type: text/plain; charset=\"utf-8\"; format=flowed\n";
			$st_entete .= "Content-Transfer-Encoding: 8bit\n";
			$st_entete .= "X-Mailer: PHP".phpversion()."\n";
			if (!empty($st_email_origine))
			{	
				$st_entete  .= "From: $st_lib_origine";
				if (!empty($st_email_origine))
					$st_entete  .=" <$st_email_origine>";
				$st_entete  .="\n>";
			}
			if (mail($st_email_destinataire, "Test de mail brut", "Ceci est un message brut", $st_entete))
				print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_email_destinataire</div>");
			else
			{
				print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_email_destinataire</div>");
				print("<blockquote>".error_get_last()['message']."</blockquote>");	
			}				
			affiche_menu();
		break;
		case 'html':
			print("<div class=\"alert alert-info\"> Envoi d'un mail html</div>");
            $st_lib_origine=trim($_POST['lib_origine']);
		    $st_entete  = 'MIME-Version: 1.0' . "\n";
			$st_entete .= "Content-Type: text/html; charset=\"utf-8\"; format=flowed\n";
			$st_entete .= "Content-Transfer-Encoding: 8bit\n";
			$st_entete .= "X-Mailer: PHP".phpversion()."\n";
			if (!empty($st_email_origine))
			{	
				$st_entete  .= "From: $st_lib_origine";
				if (!empty($st_email_origine))
					$st_entete  .=" <$st_email_origine>";
				$st_entete  .="\n>";
			}
			if (mail($st_email_destinataire, "Test de mail HTML", "Ceci est un message HTML",$st_entete))
				print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_email_destinataire</div>");
			else
			{
				print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_email_destinataire</div>");
				print("<blockquote>".error_get_last()['message']."</blockquote>");	
			}				
			affiche_menu();
		break;
		case 'multiple':
			print("<div class=\"alert alert-info\"> Envoi d'un mail multiple</div>");
            $st_lib_origine=trim($_POST['lib_origine']);
			$st_message_texte= "Ceci est un message texte";
			$st_message_html = "Ceci est un <font color=\"red\"> message <h3>HTML</h3>";
			$st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
		    $st_entete  = "";
			if (!empty($st_email_origine))
			{	
				$st_entete  .= "From: $st_lib_origine";
				if (!empty($st_email_origine))
					$st_entete  .=" <$st_email_origine>";
				$st_entete  .="\n>";
			}
			$st_entete .= 'MIME-Version: 1.0' . "\n"; 
			$st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
			$st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n"; 
			$st_message .= '--'.$st_frontiere."\n";
			$st_message .= 'Content-Type: text/plain; charset="utf-8"'."\n";
			$st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
			$st_message .= $st_message_texte."\n\n";
			$st_message .= '--'.$st_frontiere."\n";
			$st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
			$st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
			$st_message .= $st_message_html."\n\n";
			$st_message .= '--'.$st_frontiere."--\n";
			if (mail($st_email_destinataire, "Test de mail HTML", "Ceci est un message HTML",$st_entete))
				print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_email_destinataire</div>");
			else
			{
				print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_email_destinataire</div>");
				print("<blockquote>".error_get_last()['message']."</blockquote>");	
			}				
			affiche_menu();
		break;
	}
}	
print('</div></body></html>');
?>
