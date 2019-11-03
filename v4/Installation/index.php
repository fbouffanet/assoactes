<?php

$gst_url_site = isset($_SERVER['SERVER_NAME'])? $_SERVER['SERVER_NAME'] : '';
$gst_rep_site = isset($_SERVER['DOCUMENT_ROOT'])? $_SERVER['DOCUMENT_ROOT'] : '';
$gst_url_sortie = '';

$gst_serveur_bd  = '';
$gst_utilisateur_bd = '';
$gst_mdp_utilisateur_bd = '';
$gst_nom_bd = '';

$gst_administrateur_gbk = '';
$gst_mdp_administrateur_gbk = '';

$gst_fichier_configuration='../Commun/config.php';
if (file_exists($gst_fichier_configuration))
	require_once($gst_fichier_configuration);

$gst_logo_association = isset($gst_logo_association) ? basename($gst_logo_association): '';

require_once("../Commun/Adherent.php");

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
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
	$("#installation").validate({
	rules: {
     url_site: "required",
     rep_site: "required",
	 url_sortie: "required",
	 serveur_bd: "required",
     utilisateur_bd: "required",
	 mdp_utilisateur_bd: "required",
	 nom_bd: "required",
	 nom_administrateur: "required",
	 prenom_administrateur: "required",
	 mdp_administrateur: "required",
	 email_administrateur: {
		required: true,
		email: true
	 }
	},
	messages: {
		url_site: {
			required: "L'adresse du site est obligatoire"
		},
		rep_site: {
			required: "L'emplacement du site est obligatoire"
		},
		url_sortie: {
			required: "L'URL de sortie est obligatoire"
		},
		serveur_bd: {
			required: "Le nom du serveur est obligatoire"
		},
		utilisateur_bd: {
			required: "Le nom d'utilisateur est obligatoire"
		},
		mdp_utilisateur_bd: {
			required: "Le mot de passe de l'utilisateur est obligatoire"
		},
		nom_bd: {
			required: "Le nom de la base est obligatoire"
		},
		nom_administrateur: {
			required: "Le nom de l'administrateur est obligatoire"
		},
		prenom_administrateur: {
			required: "Le pr�nom de l'administrateur est obligatoire"
		},
		mdp_administrateur: {
			required: "Le mot de passe de l'administrateur est obligatoire"
		},
		email_administrateur: {
			required: "L'email de l'administrateur est obligatoire",
			email: "Ceci n'est pas un email"
		}
		
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
print('<title>Installation d\'AssoActes</title>');
print('</head>');
print('<body>');
print('<div class="container">');

/*
*  Affiche le menu des param�tres du site
*  @param string $pst_url_site Adresse du site
*  @param string $pst_rep_site R�pertoire du site
*  @param string $pst_logo_asso Logo du l'association
*  @param string $pst_rep_site Adresse de sortie du site
*/
function affiche_parametres_site($pst_url_site,$pst_rep_site,$pst_logo_asso,$pst_url_sortie)
{
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Param&egrave;tres du site</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"url_site\" class=\"col-md-4 col-form-label control-label\">Adresse http du site:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=100 size=20 name=url_site id=url_site value=\"$pst_url_site\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"rep_site\" class=\"col-md-4 col-form-label control-label\">Emplacement du site:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=100 size=20 name=rep_site id=rep_site value=\"$pst_rep_site\" class=\"form-control\">");
    print('</div></div>');
    print('<div class="form-group row">');
	print("<label for=\"logo_asso\" class=\"col-md-4 col-form-label control-label\">Logo de l'association (doit &ecirc;tre d&eacute;j&agrave; t&eacute;l&eacute;charg&eacute; dans le r&eacute;pertoire images du site):</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=100 size=20 name=logo_asso id=logo_asso value=\"$pst_logo_asso\" class=\"form-control\">");
    print('</div></div>');
    print("<label for=\"url_sortie\" class=\"col-md-4 col-form-label control-label\">Adresse de sortie du site:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=100 size=20 name=url_sortie id=url_sortie value=\"$pst_url_sortie\" class=\"form-control\">");
    print('</div></div>');	
	print("</div></div>");
}

/*
*  Affiche le menu des param�tres de la base
*  @param string $pst_serveur_bd nom du serveur
*  @param string $pst_utilisateur_bd utilisateur de la base
*  @param string $pst_mdp_utilisateur_bd mot de passe utilisateur
*  @param string $pst_nom_bd nom de la base
*/
function affiche_parametres_base($pst_serveur_bd,$pst_utilisateur_bd,$pst_mdp_utilisateur_bd,$pst_nom_bd)
{
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Param&egrave;tres de la base de donn&eacute;es</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"serveur_bd\" class=\"col-md-4 col-form-label control-label\">Nom du serveur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=serveur_bd id=serveur_bd value=\"$pst_serveur_bd\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"utilisateur_bd\" class=\"col-md-4 col-form-label control-label\">Utilisateur de la base de donn&eacute;es:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=utilisateur_bd id=utilisateur_bd value=\"$pst_utilisateur_bd\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"mdp_utilisateur_bd\" class=\"col-md-4 col-form-label control-label\">Mot de passe de l'utilisateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=mdp_utilisateur_bd id=mdp_utilisateur_bd value=\"$pst_mdp_utilisateur_bd\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
	print("<label for=\"nom_bd\" class=\"col-md-4 col-form-label control-label\">Nom de la base:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=nom_bd id=nom_bd value=\"$pst_nom_bd\" class=\"form-control\">");
    print('</div></div>');	
	print("</div></div>");
}

/*
*  Affiche le menu du compte administrateur de la base
*  @param string $pst_nom_administrateur Nom de l'administrateur
*  @param string $pst_prenom_administrateur Prenom de l'administrateur
*  @param string $pst_mdp_administrateur Mot de passe administrateur
*  @param string $pst_email_administrateur Email administrateur
*/
function affiche_parametres_administrateur($pst_nom_administrateur,$pst_prenom_administrateur,$pst_mdp_administrateur,$pst_email_administrateur)
{
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Cr&eacute;ation du compte administrateur</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"nom_administrateur\" class=\"col-md-4 col-form-label control-label\">Nom de l'administrateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=nom_administrateur id=nom_administrateur value=\"$pst_nom_administrateur\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"prenom_administrateur\" class=\"col-md-4 col-form-label control-label\">Pr&eacute;nom de l'administrateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=prenom_administrateur id=prenom_administrateur value=\"$pst_prenom_administrateur\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"mdp_administrateur\" class=\"col-md-4 col-form-label control-label\">Mot de passe administrateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=mdp_administrateur id=mdp_administrateur value=\"$pst_mdp_administrateur\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"email_administrateur\" class=\"col-md-4 col-form-label control-label\">Email administrateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=email_administrateur id=email_administrateur value=\"$pst_email_administrateur\" class=\"form-control\">");
    print('</div></div>');
	print("</div></div>");
}

/*
*  Affiche le menu des param�tres Geneabank
*  @param string $pst_administrateur_gbk Compte administrateur Geneabank
*  @param string $pst_mdp_administrateur_gbk Mot de passe administrateur
*/
function affiche_parametres_geneabank($pst_administrateur_gbk,$pst_mdp_administrateur_gbk)
{
	print('<div class="panel panel-primary">');
	print("<div class=\"panel-heading\">Param&egrave;tres G&eacute;n&eacute;bank</div>");
    print('<div class="panel-body">');
	print('<div class="form-group row">');
    print("<label for=\"administrateur_gbk\" class=\"col-md-4 col-form-label control-label\">Compte administrateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=administrateur_gbk id=administrateur_gbk value=\"$pst_administrateur_gbk\" class=\"form-control\">");
    print('</div></div>');
	print('<div class="form-group row">');
    print("<label for=\"mdp_administrateur_gbk\" class=\"col-md-4 col-form-label control-label\">Mot de passe administrateur:</label>");
    print('<div class="col-md-8">');
    print("<input type=text maxlength=20 size=20 name=mdp_administrateur_gbk id=mdp_administrateur_gbk value=\"$pst_mdp_administrateur_gbk\" class=\"form-control\">");
    print('</div></div>');
	print("</div></div>");
}

/*
* Affiche le menu de configuration
*  @param string $pst_url_site Adresse du site
*  @param string $pst_rep_site R�pertoire du site
*  @param string $pst_logo_asso Logo de l'association
*  @param string $pst_rep_site Adresse de sortie du site
*  @param string $pst_serveur_bd nom du serveur
*  @param string $pst_utilisateur_bd utilisateur de la base
*  @param string $pst_mdp_utilisateur_bd mot de passe utilisateur
*  @param string $pst_nom_bd nom de la base
*  @param string $pst_administrateur_gbk Compte administrateur Geneabank
*  @param string $pst_mdp_administrateur_gbk Mot de passe administrateur
*/
function affiche_menu_configuration ($pst_url_site,$pst_rep_site,$pst_logo_asso,$pst_url_sortie,$pst_serveur_bd,$pst_utilisateur_bd,$pst_mdp_utilisateur_bd,$pst_nom_bd,$pst_administrateur_gbk,$pst_mdp_administrateur_gbk)
{
	print('<form method="post" action='.$_SERVER['PHP_SELF'].' id="installation">');
	affiche_parametres_site($pst_url_site,$pst_rep_site,$pst_logo_asso,$pst_url_sortie);
	affiche_parametres_base($pst_serveur_bd,$pst_utilisateur_bd,$pst_mdp_utilisateur_bd,$pst_nom_bd);
	affiche_parametres_administrateur('','','','');
	affiche_parametres_geneabank($pst_administrateur_gbk,$pst_mdp_administrateur_gbk);
	print('<div class="form-row col-md-12">'); 
	print('<button type="submit" class="btn btn-primary  col-md-offset-4 col-md-4""><span class="glyphicon glyphicon-wrench"></span> Sauvegarder les param&egrave;tres</button>'); 
	print('</div>');
	print('</form>');
}

/*
* Ecrit le fichier de configuration
*  @param string $pst_fichier_configuration Fichier de configuration
*  @param string $pst_url_site Adresse du site
*  @param string $pst_rep_site R�pertoire du site
*  @param string $pst_emails_gestbase emails des administrateurs de base
*  @param string $pst_rep_site Adresse de sortie du site
*  @param string $pst_logo_asso Logo de l'association
*  @param string $pst_url_sortie Url de sortie
*  @param string $pst_serveur_bd nom du serveur
*  @param string $pst_utilisateur_bd utilisateur de la base
*  @param string $pst_mdp_utilisateur_bd mot de passe utilisateur
*  @param string $pst_nom_bd nom de la base
*  @param string $pst_administrateur_gbk Compte administrateur Geneabank
*  @param string $pst_mdp_administrateur_gbk Mot de passe administrateur
*/
function ecrit_fichier_de_configuration($pst_fichier_configuration,$pst_url_site,$pst_rep_site,$pst_emails_gestbase,$pst_logo_asso,$pst_url_sortie,$pst_serveur_bd,$pst_utilisateur_bd,$pst_mdp_utilisateur_bd,$pst_nom_bd,$pst_administrateur_gbk,$pst_mdp_administrateur_gbk)
{
	$pf = fopen($pst_fichier_configuration, "w");
	if ($pf===false)
	{
		print("<div class=\"alert alert-danger\">Impossible d'eacute;crire dans $pst_fichier_configuration</div>");
	}
	else
	{
		fwrite($pf,"<?php\n");
		fwrite($pf,"// Param�tres Site\n");
		fwrite($pf,"\$gst_url_site = \"$pst_url_site\";\n");
		fwrite($pf,"\$gst_rep_site = \"$pst_rep_site\";\n");
		fwrite($pf,"\$gst_emails_gestbase = \"$pst_emails_gestbase\";\n");
		fwrite($pf,"\$gst_url_sortie = \"$pst_url_sortie\";\n");
		fwrite($pf,"// Param�tres Base de donn�es\n");
		fwrite($pf,"\$gst_serveur_bd = \"$pst_serveur_bd\";\n");
		fwrite($pf,"\$gst_utilisateur_bd = \"$pst_utilisateur_bd\";\n");
		fwrite($pf,"\$gst_mdp_utilisateur_bd = \"$pst_mdp_utilisateur_bd\";\n");
		fwrite($pf,"\$gst_nom_bd = \"$pst_nom_bd\";\n");
		fwrite($pf,"\n");
		fwrite($pf,"// Param�tres G�n�abank\n");
		fwrite($pf,"\$gst_administrateur_gbk = \"$pst_administrateur_gbk\";\n");
		fwrite($pf,"\$gst_mdp_administrateur_gbk = \"$pst_mdp_administrateur_gbk\";\n");
		fwrite($pf,"\n");
		
		fwrite($pf,'$gst_url_images = "$gst_url_site/images";');
		fwrite($pf,"\n");
		fwrite($pf,"\$gst_logo_association = \"\$gst_url_images/$pst_logo_asso\";\n");
		fwrite($pf,"\n");
		fwrite($pf,'$gst_repertoire_telechargement = "$gst_rep_site/Administration/telechargements";');
		fwrite($pf,"\n");
		fwrite($pf,'$gst_url_telechargement_actes = $gst_url_site."Administration/telechargements";');
		fwrite($pf,"\n");
		fwrite($pf,'$gst_rep_trombinoscope = "$gst_rep_site/trombinoscope";');
		fwrite($pf,"\n");
		fwrite($pf,'$gst_url_trombinoscope = "$gst_url_site/trombinoscope";');
		fwrite($pf,"\n");
		fwrite($pf,'$gi_max_taille_upload = 6000000; // Taille maximale d\'upload en octets');
		fwrite($pf,"\n");
		fwrite($pf,'$gi_nb_max_reponses = 100;');
		fwrite($pf,"\n");
		fwrite($pf,'$gst_rep_logs = "$gst_rep_site/logs";');
		fwrite($pf,"\n");
		fwrite($pf,'$gst_time_zone =\'Europe/Paris\';');
		fwrite($pf,"\n");
		fwrite($pf,'$gi_precision_prenom=7;');
		fwrite($pf,"\n");
		fwrite($pf,"\n?>\n");
		
		fclose($pf);
		print("<div class=\"alert alert-success\">$pst_fichier_configuration sauvegard&eacute;</div>");
	}	
}

if (isset($_POST['nom_bd']))
{
	$gst_url_site = trim($_POST['url_site']);
	$gst_rep_site = trim($_POST['rep_site']);
	$gst_url_sortie = trim($_POST['url_sortie']);
	$gst_logo_asso = trim($_POST['logo_asso']);

	$gst_serveur_bd  = trim($_POST['serveur_bd']);
	$gst_utilisateur_bd = trim($_POST['utilisateur_bd']);
	$gst_mdp_utilisateur_bd = trim($_POST['mdp_utilisateur_bd']);
	$gst_nom_bd = trim($_POST['nom_bd']);

	$gst_nom_administrateur = trim($_POST['nom_administrateur']);
	$gst_prenom_administrateur = trim($_POST['prenom_administrateur']);
	$gst_mdp_administrateur = trim($_POST['mdp_administrateur']);
	$gst_email_administrateur = trim($_POST['email_administrateur']);
	$gst_administrateur_gbk = trim($_POST['administrateur_gbk']);
	$gst_mdp_administrateur_gbk = trim($_POST['mdp_administrateur_gbk']);
	
	try
	{
		$connexionBD = new PDO("mysql:host=$gst_serveur_bd;dbname=$gst_nom_bd;charset=latin1", $gst_utilisateur_bd, $gst_mdp_utilisateur_bd);
		$connexionBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $x)
	{
		die("<div class=\"alert alert-danger\">Connexion &agrave; la base de donn&eacute;es impossible</div>");
    }
	ecrit_fichier_de_configuration($gst_fichier_configuration,$gst_url_site,$gst_rep_site,$gst_email_administrateur,$gst_logo_asso,$gst_url_sortie,$gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_administrateur_gbk,$gst_mdp_administrateur_gbk);
	$b_erreur=false;
	foreach (glob("sql/*.sql") as $st_fichier)
	{
		$st_requete = file_get_contents($st_fichier);
		$sth = $connexionBD->prepare($st_requete);
		if (!$sth) { 
			print("<div class=\"alert alert-danger\">Impossible de cr&eacute;er la table $st_fichier</div>"); 
			print_r($dbh->errorInfo());
			$b_erreur=true;
			continue;
		}
		if ($sth->execute())
		{
			print("<div class=\"alert alert-success\">Table $st_fichier cr&eacute;e</div>"); 
		}
	}
	if (!$b_erreur)
	{	
		$st_mdp_hash = password_hash($gst_mdp_administrateur, PASSWORD_DEFAULT);
		date_default_timezone_set('Europe/Paris');
		$st_date_premiere_adhesion = date("Y-m-d");
		$aujourdhui = getdate();
		$i_annee_adhesion = $aujourdhui['year'];
		$st_requete =  "insert into adherent(idf,ident,prenom,nom,email_perso,email_forum,mdp,statut,annee_cotisation,date_premiere_adhesion,date_paiement,confidentiel,prix,infos_agc,type_origine,description_origine,jeton_paiement,clef_nouveau_mdp) values(1,1,:prenom,:nom,:email_perso,:email_forum,:mdp,'I',:annee_cotisation,:date_premiere_adhesion,:date_paiement,:confidentiel,:prix,:infos_agc,:type_origine,:description_origine,:jeton_paiement,:clef_nouveau_mdp)";
		$sth = $connexionBD->prepare($st_requete);
		if (!$sth) { 
			print("<div class=\"alert alert-danger\">Impossible de cr&eacute;er l'adh&eacute;rent</div>"); 
			print_r($dbh->errorInfo());
			$b_erreur=true;		
		} 
		if ($sth->execute(array(':prenom'=>$gst_prenom_administrateur,':nom'=>$gst_nom_administrateur,':email_perso'=>$gst_email_administrateur,':email_forum'=>$gst_email_administrateur,':mdp'=>$st_mdp_hash,':annee_cotisation'=>$i_annee_adhesion,':date_premiere_adhesion'=>$st_date_premiere_adhesion,':date_paiement'=>$st_date_premiere_adhesion,':confidentiel'=>'O',':prix'=>15,':infos_agc'=>'',':type_origine'=>0,':description_origine'=>0,':jeton_paiement'=>'',':clef_nouveau_mdp'=>0)))
			print("<div class=\"alert alert-success\">L'adh&eacute;rent a &eacute;t&eacute; cr&eacute;&eacute;</div>");
		else
		{	
			print("<div class=\"alert alert-danger\">Impossible de cr&eacute;er l'adh&eacute;rent</div>");
		$b_erreur=true;
		}
	}
	if (!$b_erreur)
	{	
		$st_requete =  "insert into privilege(idf_adherent,droit) values(1,:privilege)";
		$sth = $connexionBD->prepare($st_requete);
		if (!$sth) { 
			print("<div class=\"alert alert-danger\">Impossible d'accorder des privil&egrave;ges &agrave l'adh&eacute;rent</div>"); 
			print_r($dbh->errorInfo()); 
			$b_erreur=true;
		}
		$sth->execute(array(':privilege'=>'CHGMT_EXPT'));
		$sth->execute(array(':privilege'=>'GESTADHT'));
		$sth->execute(array(':privilege'=>'GESTDROITS'));
		$sth->execute(array(':privilege'=>'UTILITAIRE'));
		$sth->execute(array(':privilege'=>'VARIANTES'));
		$sth->execute(array(':privilege'=>'RELEVES'));
		$sth->execute(array(':privilege'=>'STATS'));	
		print("<div class=\"alert alert-success\">Compte administrateur cr&eacute;&eacute;</div>");
		print("<div class=\"alert alert-info\"><a href=\"$gst_url_site\" target=\"_blank\">Acc&eacute;s au site</a></div>");
	}
}
else
{	
	affiche_menu_configuration($gst_url_site,$gst_rep_site,$gst_logo_association,$gst_url_sortie,$gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_administrateur_gbk,$gst_mdp_administrateur_gbk);	
}

print('</div></body></html>');
?>
