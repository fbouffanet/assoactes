<?php

// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------?

session_start();

require_once 'config.php';
require_once 'constantes.php';
require_once 'ConnexionBD.php';
require_once 'commun.php';

$gst_url_retour = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$gst_adresse_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
$gst_ip_restreinte = null;
	
$connexionBD            = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);	

if (isset($_POST['ident']))
{
   // on vient du menu d'authentification
   $st_ident=substr($_POST['ident'],0,12);
   $st_mdp=substr($_POST['mdp'],0,12);
   if (verifie_utilisateur($st_ident,$st_mdp)==true)
   {
      if (empty($gst_ip_restreinte)or $gst_ip_restreinte==$gst_adresse_ip)
      {   
          //print("PST=".$_POST['ident'].'|'.$_POST['mdp']."<br>");      
          $_SESSION['ident']=$st_ident;
          $_SESSION['mdp']=$st_mdp;
          $connexionBD->ajoute_params(array(':ident'=>$st_ident,':adresse_ip'=>$gst_adresse_ip)); 
          $st_requete = "update adherent set derniere_connexion=now(),ip_connexion=:adresse_ip where ident=:ident";
		  $connexionBD->execute_requete($st_requete);
          date_default_timezone_set($gst_time_zone); 
          list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
          $i_mois++;
          $i_annee+=1900;
          $st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
          $st_chaine_log = join(';',array($st_date_log,$_SESSION['ident'],$gst_adresse_ip));
          $pf=@fopen("$gst_rep_logs/connexions.log",'a');
          @fwrite($pf,"$st_chaine_log\n"); 
          @fclose($pf);
          header("Location:".$_SESSION['url_retour']);
      }
      else
      {
          $st_sujet = "Base V4 - Refus de connexion";
          $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
          $st_entete .= 'Content-type: text/html; charset=cp1252' . "\r\n";
          $st_entete .= "From: BASE ".SIGLE_ASSO." <".EMAIL_INFOASSO.">\r\n";
          $st_texte = "L'adh&eacute;rent $st_ident a tent&eacute; de se connecter depuis l'adresse ip $gst_adresse_ip qui n'est pas autoris&eacute;e<br>";
          mail($gst_emails_gestbase, $st_sujet, $st_texte, $st_entete);
          affiche_menu_refus();   		    
      }

   }
   else
   {   
      affiche_menu_auth('Erreur');
      exit(0);
   }     
}
else
{  
   $gst_ident = isset($_SESSION['ident']) ? $_SESSION['ident'] : '';
   $gst_mdp   = isset($_SESSION['mdp']) ? $_SESSION['mdp'] : '';
   if (!verifie_utilisateur($gst_ident,$gst_mdp))
   {
      $_SESSION['url_retour'] = $gst_url_retour;
      affiche_menu_auth('');
      exit(0);
   }
}



/**
* V�rifie que si l'utilisateur est autoris� � se connecter (statut B,I,H)
* @param string $pst_ident identifiant de l'utilisateur
* @param string $pst_mdp mot de passe de l'utilisateur
* @return boolean l'utilisateur est authentifie ou non ?
* @global $connexionBD identifiant de connexion BD
*/
function verifie_utilisateur($pst_ident,$pst_mdp)
{
  global $connexionBD,$gst_ip_restreinte;
  if (empty($pst_ident) || empty($pst_mdp)) return false; 
  $connexionBD->ajoute_params(array(':ident'=>$pst_ident));
  $st_requete = "SELECT mdp FROM adherent where ident=:ident and statut in ('B','I','H')";
  $st_mdp_hash=$connexionBD->sql_select1($st_requete);
  if (password_verify($pst_mdp,$st_mdp_hash))
  {
	  $connexionBD->ajoute_params(array(':ident'=>$pst_ident));   
	  $st_requete = "SELECT ip_restreinte FROM adherent where ident=:ident";
 	  $gst_ip_restreinte=$connexionBD->sql_select1($st_requete);
    return true;
  }	  
  else
    return false;
}

/**
* Affiche le menu d'authentification
*/
function affiche_menu_auth($pst_message)
{
  global $gst_url_site,$gst_logo_association;
  print("<!DOCTYPE html>");
  print("<head>\n");

  print("<link href='$gst_url_site/css/styles.css' type='text/css' rel='stylesheet'>");
  print("<link href='$gst_url_site/css/bootstrap.min.css' rel='stylesheet'>");
   
  print("<link href='$gst_url_site/css/jquery-ui.css' type='text/css' rel='stylesheet'>");
  print("<link href='$gst_url_site/css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
  print("<link href='$gst_url_site/css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
  print("<script src='$gst_url_site/js/jquery-min.js' type='text/javascript'></script>");
  print("<script src='$gst_url_site/js/jquery-ui.min.js' type='text/javascript'></script>");
  print("<script src='$gst_url_site/js/jquery.validate.min.js' type='text/javascript'></script>\n");
  print("<script src='$gst_url_site/js/bootstrap.min.js' type='text/javascript'></script>");
  print("<link rel=\"shortcut icon\" href=\"$gst_url_site/images/favicon.ico\">");
  print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />');
  print("<title>Identification</title>\n");
  print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
  print("<script type='text/javascript'>");
  print("$(document).ready(function() {
  
  $(\"#DemandeNouveauMDP\").click(function(){
  window.open('$gst_url_site/Commun/DemandeNouveauMDP.php', 'RecreeMDP','width=400,height=280');
  return false;
  });

  $(\"#identification\").validate({
  rules: {
    ident: {
      required: true
	 }
    ,
    mdp: {
      required: true
	 }
  },
  messages: {
    ident: {
      required: \"L'identifiant est obligatoire\"
	 },
    mdp: {
      required: \"Le mot de passe est obligatoire\"
	 }
  },
  errorElement: \"em\",
  errorPlacement: function ( error, element ) {
	// Add the `help-block` class to the error element
	error.addClass(\"help-block\" );

	// Add `has-feedback` class to the parent div.form-group
	// in order to add icons to inputs
	element.parents( \".col-md-4\" ).addClass( \"has-feedback\" );

	if ( element.prop( \"type\" ) === \"checkbox\" ) {
		error.insertAfter( element.parent( \"label\" ) );
	} else {
		error.insertAfter( element );
	}

	// Add the span element, if doesn't exists, and apply the icon classes to it.
	if ( !element.next( \"span\" )[ 0 ] ) {
		$( \"<span class='glyphicon glyphicon-remove form-control-feedback'></span>\" ).insertAfter( element );
	}
  },
  success: function ( label, element ) {
	// Add the span element, if doesn't exists, and apply the icon classes to it.
	if ( !$( element ).next( \"span\" )[ 0 ] ) {
		$( \"<span class='glyphicon glyphicon-ok form-control-feedback'></span>\" ).insertAfter( $( element ) );
	}
  },
  highlight: function ( element, errorClass, validClass ) {
	$( element ).parents( \".col-md-4\" ).addClass( \"has-error\" ).removeClass( \"has-success\" );
	$( element ).next( \"span\" ).addClass( \"glyphicon-remove\" ).removeClass( \"glyphicon-ok\" );
  },
  unhighlight: function ( element, errorClass, validClass ) {
	$( element ).parents( \".col-md-4\" ).addClass( \"has-success\" ).removeClass( \"has-error\" );
	$( element ).next( \"span\" ).addClass( \"glyphicon-ok\" ).removeClass( \"glyphicon-remove\" );
  }   
  });
});
 ");
  print("</script>");
  print("</head><body>");
  
  print('<div class="container">');
  print("<div class=\"text-center\"><img src= '$gst_logo_association' class=\"rounded mx-auto d-block\"  alt='Logo ".SIGLE_ASSO."'></div>");
  print('<div class="panel panel-primary col-md-offset-2 col-md-8">');
  print('<div class="panel-heading">Authentification requise</div>');
  print('<div class="panel-body">');  
  print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="identification" class="form-horizontal">');
  if ($pst_message!= '')
  {
     print("<div class=\"alert alert-danger\">$pst_message</div>");
  } 
  print('<div class="form-group">');  
  print('<label for="ident" class="col-md-4 col-form-label"> Identifiant:</label>');
  print('<div class="col-md-6">');
  print('<div class="input-group">');
  print('<span class="input-group-addon">');
  print('<span class="glyphicon glyphicon-user"></span>');
  print('</span>');
  print("<input type=\"text\" name=\"ident\" id=\"ident\" size=\"30\" maxlength=\"30\" class=\"js-select-avec-recherche form-control\">\n");
  print('</div>');
  print('</div>');
  print('</div>');
  
  print('<div class="form-group">');   
  print('<label for="mdp" class="col-md-4 col-form-label">Mot de passe:</label>');
  print('<div class="col-md-6">');
  print('<div class="input-group">');
  print('<span class="input-group-addon">');
  print('<span class="glyphicon glyphicon-lock"></span>');
  print('</span>');
  print("<input type=\"password\" name=\"mdp\" id=\"mdp\" size=\"30\" maxlength=\"30\" class=\"js-select-avec-recherche form-control\">\n");
  print("</div>\n");
  print("</div>\n");
  print("</div>\n");
  
  print('<div class="btn-group-vertical col-md-offset-3 col-md-6" role="group" >');
  print('<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Se connecter</button>');  
  print("<button class=\"form-row col-md-offset-2 col-md-8 btn btn-warning\" id=\"DemandeNouveauMDP\"><span class=\"glyphicon glyphicon-warning-sign\"></span> J'ai oubli&eacute; mon mot de passe</button>");
  print("</div>\n");

  print('</form>');
  print('</div></div>'); // fin panel body
  
  
  print("</div></body>");
  print("</html>");
}

/**
* Affiche le menu d'authentification
*/
function affiche_menu_refus()
{
  global $gst_url_site;
  print("<!DOCTYPE html>");
  print("<head>\n");
  print("<link rel=\"shortcut icon\" href=\"$gst_url_site/images/favicon.ico\">");
  print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />');
  print("<link href='$gst_url_site/css/styles.css' type='text/css' rel='stylesheet'>");
  print("<link href='$gst_url_site/css/bootstrap.min.css' rel='stylesheet'>");
  print("<title>Refus de connexion</title>\n");
  print("</head><body>");
  print('<div class="panel panel-primary col-md-offset-4 col-md-4">');
  print('<div class="panel-heading">Refus de connexion</div>');
  print('<div class="panel-body">');
  $st_prefixe_asso = commence_par_une_voyelle(SIGLE_ASSO) ? "l'": "le " ;  
  print("<div class=\"alert alert-danger\">L'acc&egrave;s &agrave la base $st_prefixe_asso".SIGLE_ASSO." est limit&eacute; &agrave; ses adh&eacute;rents &agrave; jour<br>Les intrus ne sont pas autoris&eacute;s</div>");
  print('</div>');
  print("</body>");
  print("</html>");
  die();
}
?>