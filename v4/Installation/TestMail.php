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
	$("#mail_brut").validate({
	rules: {
     email1: {"required": true,
			 "email":true
	 }
	},
	messages: {
		email1: {
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
});   
</script>
<?php

/* Affiche le menu */
function affiche_menu()
{
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="mail_brut">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Envoi d'un email brut</div>");
	print('<div class="panel-body">');
	print('<input name="mode" type="hidden" value="brut">');
    print('<div class="form-group row">');  
    print("<label for=\"email_brut\" class=\"col-md-4 col-form-label control-label\">Email de destination</label>");
	print('<div class="col-md-8">');
	print("<input type=text maxlength=40 size=40 name=email1 id=email1 value=\"fbouffanet@yahoo.fr\" class=\"form-control\">");
    print('</div></div>');
	print('<button type="submit" class="btn btn-primary  col-md-offset-4 col-md-4""><span class="glyphicon glyphicon-wrench"></span> Envoyer un email brut</button>'); 
	print('</div></div>');
	print('</form>');
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="mail_html">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Envoi d'un email HTML</div>");
	print('<div class="panel-body">');
	print('<input name="mode" type="hidden" value="html">');
    print('<div class="form-group row">');  
    print("<label for=\"email_brut\" class=\"col-md-4 col-form-label control-label\">Email de destination</label>");
	print('<div class="col-md-8">');
	print("<input type=text maxlength=40 size=40 name=email2 id=email2 value=\"fbouffanet@yahoo.fr\" class=\"form-control\">");
    print('</div></div>');
	print('<button type="submit" class="btn btn-primary  col-md-offset-4 col-md-4""><span class="glyphicon glyphicon-wrench"></span> Envoyer un email HTML</button>'); 
	print('</div></div>');
	print('</form>');
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="mail_html">');
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Envoi d'un email en plusieurs formats (Texte/HTML)</div>");
	print('<div class="panel-body">');
	print('<input name="mode" type="hidden" value="multiple">');
    print('<div class="form-group row">');  
    print("<label for=\"email_brut\" class=\"col-md-4 col-form-label control-label\">Email de destination</label>");
	print('<div class="col-md-8">');
	print("<input type=text maxlength=40 size=40 name=email2 id=email2 value=\"fbouffanet@yahoo.fr\" class=\"form-control\">");
    print('</div></div>');
	print('<button type="submit" class="btn btn-primary  col-md-offset-4 col-md-4""><span class="glyphicon glyphicon-wrench"></span> Envoyer un email en plusieurs formats</button>'); 
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
	switch($_POST['mode'])
	{
		case 'brut':
		    $st_entete  = 'MIME-Version: 1.0' . "\n";
			$st_entete .= "Content-Type: text/plain; charset=\"cp1252\"; format=flowed\n";
			$st_entete .= "Content-Transfer-Encoding: 8bit\n";
			$st_entete .= "X-Mailer: PHP".phpversion()."\n";
			$st_entete  = "From: ".LIB_ASSO." <".EMAIL_DIRASSO.">\n>";
			$st_destinataire=trim($_POST['email1']);
			if (@mail($st_destinataire, "Test de mail brut", "Ceci est un message brut", $st_entete))
				print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_destinataire</div>");
			else
			{
				print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_destinataire</div>");
				print("<blockquote>".error_get_last()['message']."</blockquote>");	
			}				
			affiche_menu();
		break;
		case 'html':
		    $st_entete  = 'MIME-Version: 1.0' . "\n";
			$st_entete .= "Content-Type: text/html; charset=\"cp1252\"; format=flowed\n";
			$st_entete .= "Content-Transfer-Encoding: 8bit\n";
			$st_entete .= "X-Mailer: PHP".phpversion()."\n";
			$st_entete  = "From: ".LIB_ASSO." <".EMAIL_DIRASSO.">\n>";
			$st_destinataire=trim($_POST['email2']);
			if (@mail($st_destinataire, "Test de mail HTML", "Ceci est un message HTML",$st_entete))
				print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_destinataire</div>");
			else
			{
				print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_destinataire</div>");
				print("<blockquote>".error_get_last()['message']."</blockquote>");	
			}				
			affiche_menu();
		break;
		case 'multiple':
			$st_message_texte= "Ceci est un message texte";
			$st_message_html = "Ceci est un <font color=\"red\"> message <h3>HTML</h3>";
			$st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
		    $st_entete  = "From: ".LIB_ASSO." <".EMAIL_DIRASSO.">\n>";
			$st_entete .= "Reply-to: ".LIB_ASSO." <".EMAIL_DIRASSO.">\n";
			$st_entete .= "Cc: ".EMAIL_DIRASSO."\n";
			$st_entete .= "Reply-to: ".SIGLE_ASSO." <".EMAIL_DIRASSO.">\n";
			$st_entete .= "Disposition-Notification-To: ".SIGLE_ASSO."<".EMAIL_DIRASSO.">\n";
			$st_entete .= 'MIME-Version: 1.0' . "\n"; 
			$st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
			$st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n"; 
			$st_message .= '--'.$st_frontiere."\n";
			$st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
			$st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
			$st_message .= $st_message_texte."\n\n";
			$st_message .= '--'.$st_frontiere."\n";
			$st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
			$st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
			$st_message .= $st_message_html."\n\n";
			$st_message .= '--'.$st_frontiere."--\n";
			$st_destinataire=trim($_POST['email2']);
			if (@mail($st_destinataire, "Test de mail HTML", "Ceci est un message HTML",$st_entete))
				print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; $st_destinataire</div>");
			else
			{
				print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; $st_destinataire</div>");
				print("<blockquote>".error_get_last()['message']."</blockquote>");	
			}				
			affiche_menu();
		break;
	}
}	
print('</div></body></html>');
?>