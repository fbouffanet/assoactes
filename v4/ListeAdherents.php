<?php

require_once('Commun/config.php');
require_once('Commun/constantes.php');
require_once('Commun/Identification.php');
require_once('Commun/VerificationDroits.php');
require_once 'Commun/ConnexionBD.php';
require_once('Commun/PaginationTableau.php');
require_once('Commun/commun.php');
require_once('Commun/Adherent.php');

if(!isset($_SESSION['ident']))
   die("<div class=\"alert alert-danger\"> Identifiant non reconnu</div>");
$gst_ident = $_SESSION['ident'];

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_adherent = (int) $_GET['mod'];
}
else
  $gi_idf_adherent = isset($_POST['idf_adht']) ? (int) $_POST['idf_adht']:null;

if (isset($_GET['visu']))
{
   $gst_mode='VISU_ADHERENT';
   $gi_idf_adherent = (int) $_GET['visu'];
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

switch ($gst_mode) {
 case 'PUBLIPOSTAGE' :
   header("Content-type: application/vnd.ms-excel");
   header('Content-disposition: attachment; filename="ListeBulletinAGC.xls"');
   exporte_adresses_publipostage($connexionBD);
   exit();
 break;
 case 'EXPORT_COMPLET' :
   header("Content-type: application/vnd.ms-excel");
   header('Content-disposition: attachment; filename="ListeBulletinAGC.xls"');
   exporte_tout($connexionBD);
   exit();
}

print('<!DOCTYPE html>');
print("<head>\n");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='js/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/jquery.validate.min.js' type='text/javascript'></script>\n");
print("<script src='js/additional-methods.min.js' type='text/javascript'></script>\n");
print("<link href='css/select2.min.css' type='text/css' rel='stylesheet'>");
print("<script src='js/select2.min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
$adherent = new Adherent($connexionBD,$gi_idf_adherent);
?>

$(document).ready(function() {
  $('#nom_a_chercher').autocomplete({
    source : './ajax/nom_adherent.php',
    minLength: 3
  });

  $(".js-select-avec-recherche").select2();
  
  $.validator.addMethod('cotisation_statut', function(value, element) {
    var cotisation_bulletin_min=<?php echo $ga_tarifs['bulletin_metro'];?>;
    cotisation_bulletin_min=parseInt(cotisation_bulletin_min);
    var statut_adh=$('#statut_adherent').val();
    var cotisation = parseInt(value);
    if (statut_adh=='G' || statut_adh=='H' || statut_adh=='S') return true;
    if (statut_adh=='B' && cotisation>=cotisation_bulletin_min) return true;
    if (statut_adh=='I' && cotisation<cotisation_bulletin_min) return true;    
}, "la cotisation n'est pas conforme au statut "+$('#statut_adherent option:selected').text());

  jQuery.validator.addMethod(
    "dateITA",
    function(value, element) {
        var check = false;
        var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
        if( re.test(value)){
            var adata = value.split('/');
            var gg = parseInt(adata[0],10);
            var mm = parseInt(adata[1],10);
            var aaaa = parseInt(adata[2],10);
            var xdata = new Date(aaaa,mm-1,gg);
            if ( ( xdata.getFullYear() == aaaa ) 
                   && ( xdata.getMonth () == mm - 1 ) 
                   && ( xdata.getDate() == gg ) )
                check = true;
            else
                check = false;
        } else
            check = false;
        return this.optional(element) || check;
    },
    "Merci d'entrer une date valide"
);

  $("#ajout_adherent").validate({
  <?php
    print $adherent->regles_validation();
  ?>
  ,
  errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-sm-5" ).addClass( "has-feedback" );

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
			$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
  ,
	 submitHandler: function(form) {
		var nom =$("#nom").val().toUpperCase();
      $("#nom").val(nom);
			var prenom=$("#prenom").val();
      prenom= prenom.replace(/^\s+/g,'').replace(/\s+$/g,'');
      prenom=prenom.replace(/\s+/g,'-');
      prenom=prenom.substr(0,1).toUpperCase()+prenom.substr(1); 
			$("#prenom").val(prenom);      
      form.submit();          
	 }     
  });
  
  $("#modification_adherent").validate({
  <?php
    print $adherent->regles_validation();
  ?>
  ,
  errorElement: "em",
	errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );

		// Add `has-feedback` class to the parent div.form-group
		// in order to add icons to inputs
		element.parents( ".col-sm-5" ).addClass( "has-feedback" );

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
			$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
			$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
	},
	unhighlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
			$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
	}
   ,   
	 submitHandler: function(form) {
		  var nom =$("#nom").val().toUpperCase();
      $("#nom").val(nom);
			var prenom=$("#prenom").val();
      prenom= prenom.replace(/^\s+/g,'').replace(/\s+$/g,'');
      prenom=prenom.replace(/\s+/g,'-');
      prenom=prenom.substr(0,1).toUpperCase()+prenom.substr(1); 
			$("#prenom").val(prenom);      
      form.submit();     
	 }     
  });
  
  $("#supprimer_adherents" ).click(function() {
    $('#mode_selection').val("SUPPRIMER");
    $("#liste_adherents").submit();
  });
  
   $( "#fusionner_adherents" ).click(function() {
    $('#mode_selection').val("FUSIONNER");
    $("#liste_adherents").submit();
  });
     
   $("#email_forum" ).blur(function() {
    $("#email_perso").val($("#email_forum").val());
  });
  
   $("#statut_listadh" ).change(function() {
    $('#mode_statut').val("LISTE");
    $("#liste_filtree").submit();
  });
  
  $("#notifier_adherent" ).click(function() {
    $('#mode_modifier').val("READHESION");
    $("#modification_adherent").submit();
  });
  
   $("#readhesion" ).click(function() {
     var d = new Date();
     var mois = d.getMonth()+1;
     var jour = d.getDate();
     var annee= d.getFullYear();

     var date_fmt = (jour<10 ? '0' : '') + jour + '/' + (mois<10 ? '0' : '') + mois + '/' +annee; 
     $('#date_paiement').val(date_fmt);
     var annee_cotisation = mois>8 ?annee+1 : annee; 
     $('#annee_cotisation').val(annee_cotisation);
  });
    
  $("#bouton_maj_statut_adhts").click(function() {
    if (confirm("Souhaitez-vous mettre � jour le statut de tous les adherents qui ne sont pas a jour ?"))   
    {
      $("#maj_statut_adhts").submit();
    }
  });
    
  $("#liste_adherents").validate({
  errorElement: "em",
		errorPlacement: function ( error, element ) {
		// Add the `help-block` class to the error element
		error.addClass( "help-block" );
		if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.parent( "label" ) );
      } else {
				error.insertAfter( element );
  				}
			},
			highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
			},
			unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
			}
   , 
  submitHandler: function(form) {
    var adherents='';
    var nb_adherents=0;
    $("input:checkbox").each(function(){
      var $this = $(this);
      if($this.is(":checked"))
      {
        adherents=adherents+' '+$this.attr("id");  
        nb_adherents+=1;
      }
    });
    var mode=$('#mode_selection').val();
    switch(mode)
    { 
      case 'SUPPRIMER':
        if(nb_adherents>=1)
        {
          if (confirm('Etes-vous s�r de supprimer les adh�rents '+adherents+' ?'))
          {
            form.submit();
          }
        }
        else
          alert("Merci de s�lectionner au moins un adh�rent");  
      break;
      case 'FUSIONNER':
         if(nb_adherents==2)
        {
          if (confirm('Etes-vous s�r de fusionner les adh�rents '+adherents+' ?'))
          {
            form.submit();
          }
        }
        else
           alert("Merci de s�lectionner deux adh�rents"); 
      break;  
    }
  }  
  });
  
   $("#recreer_mdp").click(function() {
    if (confirm("Souhaitez-vous mettre r�ellement cr�er un nouveau mot de passe ?"))   
    {
      $('#mode_modifier').val("RECREER_MDP");
      $("#modification_adherent").submit();
    }
  });

  $('a.lien_stats').click(function(){
	window.open(this.href,'_blank');
    return false;
  });   
  
  $("#ajouter_adherent").click(function() {

      $('#mode_statut').val("MENU_AJOUTER");
      $("#liste_filtree").submit();
  });
  
  $("#maj_statut_adherents").click(function() {

      $('#mode_statut').val("MAJ_STATUT");
      $("#liste_filtree").submit();
  });
  
  $("#exporter_adherents").click(function() {

      $('#mode_statut').val("EXPORTER");
      $("#liste_filtree").submit();
  });
  
   $("#publipostage").click(function() {

      $('#mode_statut').val("PUBLIPOSTAGE");
      $("#liste_filtree").submit();
  });  
  
  $("#export_complet").click(function() {

      $('#mode_statut').val("EXPORT_COMPLET");
      $("#liste_filtree").submit();
  });
  
  $("#aide_adherents").click(function() {

      $('#mode_statut').val("AIDE_ADHERENTS");
      $("#liste_filtree").submit();
  });
  
  $("#annuler_modifier_adherent").click(function() {
      $('#mode_modifier').val("LISTE");
      $("#modification_adherent").submit();       
  });
  
   $("#annuler_ajouter_adherent").click(function() {

      $('#mode_ajouter').val("LISTE");
      $("#ajout_adherent").submit();       
  });

  
});

<?php
print("</script>");
print('<title>Base AGC: Les Adherents</title>');
print('</head>');

/**
 * Affiche la liste des communes
 * @param object $pconnexionBD
 * @param string $pst_ident identifiant de l'utilisateur courant 
 * @param string $pst_nom_a_chercher nom � chercher
 * @param char identifiant du statut � afficher  
 */ 
function menu_liste($pconnexionBD,$pst_ident,$pst_nom_a_chercher,$pc_statut)
{
   global $gi_num_page_cour;
   
   print("<form action=\"".$_SERVER['PHP_SELF']."\" id=\"liste_filtree\" method=\"post\" class=\"form-inline\">");
   print("<input type=hidden name=mode id=mode_statut value=\"LISTE\">");
   if (a_droits($pst_ident,DROIT_GESTION_ADHERENT))
   {
	  print('<div class="form-row">');   
      print('<div class="form-group col-md-offset-4 col-md-4">');      
	  $a_statuts_adherents = $pconnexionBD->liste_valeur_par_clef("select idf,nom from statut_adherent order by nom");
      $a_statuts_adherents['T'] = 'Tous';
      print('<label for="statut_listadh">Statut</label><select name="statut_listadh" id="statut_listadh" class="form-control">');
      print(chaine_select_options($pc_statut,$a_statuts_adherents));
      print('</select>');
      print("</div></div>"); 
   }    
   
   print('<div class="form-row">');
   print('<div class="form-group col-md-8">');    
   print("<label for=\"nom_a_chercher\">G&eacute;n&eacute;alogiste</label><input name=\"nom_a_chercher\" id=\"nom_a_chercher\" value=\"$pst_nom_a_chercher\" size=\"25\" maxlength=\"25\" type=\"Text\" class=\"form-control\" aria-describedby=\"aideAdht\">");
   print('<small id="aideAdht" class="form-text text-muted">Vous pouvez mettre le caract&egrave;re "*" pour chercher sur une racine (ex.: ber*)</small></div>');
   print(' <button type=submit class="col-md-2 btn btn-primary">Chercher</button></div>');
   print("</form>");
   
   $a_champs_recherche = array();
   $st_clause_statut = '';
   if (!empty($pc_statut) && $pc_statut!='T')
   {
      $st_clause_statut = "where statut=:statut";
      $a_champs_recherche[':statut'] = $pc_statut;
   }
   $st_requete = "SELECT DISTINCT (left( nom, 1 )) AS init FROM `adherent` $st_clause_statut ORDER BY init";
   $pconnexionBD->initialise_params($a_champs_recherche);
   $a_initiales_adherents = $pconnexionBD->sql_select($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" id=\"liste_adherents\" method=\"post\" class=\"form-inline\">");
   print("<input type=hidden name=mode id=\"mode_selection\" value=\"LISTE\">");
   print('<div class="form-row">'); 
   print('<div class="text-center">');
   print('<ul class="pagination">');
   if ($pst_nom_a_chercher=='')
   {
     $i_session_initiale = isset($_SESSION['initiale_adh']) ? $_SESSION['initiale_adh'] : $a_initiales_adherents[0];
     $gc_initiale = empty($_GET['initiale_adh']) ? $i_session_initiale : $_GET['initiale_adh'];
   }
   else
   {
      $gc_initiale = strtoupper(substr($pst_nom_a_chercher,0,1));
      if ($gc_initiale=='*') $gc_initiale = $a_initiales_adherents[0];
   }
   if (!in_array($gc_initiale,$a_initiales_adherents))
      $gc_initiale = $a_initiales_adherents[0];
   $_SESSION['initiale_adh'] = $gc_initiale;   
   foreach ($a_initiales_adherents as $c_initiale)
   {
     if ($c_initiale==$gc_initiale)
        print("<li class=\"page-item active\"><span class=\"page-link\">$c_initiale<span class=\"sr-only\">(current)</span></span></li>");
     else
        print("<li class=\"page-item\"><a href=\"".$_SERVER['PHP_SELF']."?initiale_adh=$c_initiale\">$c_initiale</a></li>");
   }
   print("</ul></div>");
   print("</div>");
   
   
   $pst_nom_a_chercher = str_replace('*','%',$pst_nom_a_chercher);  
   $a_champs_recherche = array();
   $st_clause_statut = '';
   if (!empty($pc_statut) && $pc_statut!='T')
   {
      $st_clause_statut = "and statut=:statut";
      $a_champs_recherche[':statut'] = $pc_statut;
   }
   
   if (!empty($pst_nom_a_chercher))
      $a_champs_recherche[':nom_a_chercher']=$pst_nom_a_chercher;
   if (a_droits($pst_ident,DROIT_GESTION_ADHERENT))
   { 
      $st_requete = ($pst_nom_a_chercher=='') ? "select adherent.idf,concat(prenom, ' ',adherent.nom),adherent.ident, email_perso, DATE_FORMAT(derniere_connexion,'%d/%m/%Y'),sa.nom from adherent join statut_adherent sa on (sa.idf=adherent.statut) where adherent.nom like '$gc_initiale%' $st_clause_statut" : "select adherent.idf,concat(prenom, ' ',adherent.nom),adherent.ident, email_perso, DATE_FORMAT(derniere_connexion,'%d/%m/%Y'),sa.nom from adherent join statut_adherent sa on (sa.idf=adherent.statut) where (adherent.nom like :nom_a_chercher or adherent.email_forum like :nom_a_chercher or adherent.email_perso like :nom_a_chercher or adherent.ip_connexion like :nom_a_chercher) $st_clause_statut";
   }
   else
      $st_requete = ($pst_nom_a_chercher=='') ? "select concat(prenom, ' ',adherent.nom),adherent.idf, email_forum,site from adherent join statut_adherent sa on (sa.idf=adherent.statut) where adherent.nom like '$gc_initiale%' and statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."')" : "select concat(prenom, ' ',adherent.nom),adherent.idf, email_forum,site from adherent where adherent.nom like :nom_a_chercher and statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."')";
    
   $st_requete .= ' order by adherent.nom,prenom';
   //print("Req=$st_requete<br>");
   $pconnexionBD->initialise_params($a_champs_recherche);
   $a_liste_adherents = $pconnexionBD->sql_select_multiple($st_requete);
   if (count($a_liste_adherents)!=0)
   {                
      if (a_droits($pst_ident,DROIT_GESTION_ADHERENT))
      {  
         // membre ayant les droits de cr�ation  
         $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_adherents),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Adh&eacute;rent','Identifiant','Email','Visite','Statut','Modifier','Selectionner','Stats','Recherches'));
         $pagination->init_page_cour($gi_num_page_cour);
         $pagination->affiche_entete_liens_navigation();
         $a_tableau_modification = array();
         foreach ($a_liste_adherents as $a_adherent)
         {
            list($i_idf_adh,$st_adherent,$st_ident_adh,$st_email_adh,$st_derniere_connexion_adh,$st_statut_adh) = $a_adherent;
            $a_tableau_modification[] = array($st_adherent,$st_ident_adh,$st_email_adh,$st_derniere_connexion_adh,$st_statut_adh,"<a id=\"$i_idf_adh\" href=\"".$_SERVER['PHP_SELF']."?mod=$i_idf_adh\" type=\"button\" class='btn btn-info'>Modifier</a>","<input type=checkbox name=\"supp[]\" id=\"$st_ident_adh\" value=$i_idf_adh>","<a href='Stats/StatsAdht.php?idf_adherent=$i_idf_adh' target='_blank' class='btn btn-info lien_stats'>Stats</a>","<a href='Stats/RecherchesAdht.php?idf_adherent=$i_idf_adh' target='_blank' class='btn btn-info lien_stats'>Recherches</a>");
         }
         $pagination->affiche_tableau_simple($a_tableau_modification);
      }
      else if (a_droits($pst_ident,DROIT_STATS))
      {
          // adh�rent avec les droits stats        
         $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_adherents),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Adh&eacute;rent','Identifiant','Email','Site','Stats','Recherches'));
         $pagination->init_page_cour($gi_num_page_cour);
         $pagination->affiche_entete_liens_navigation();
         $a_tableau_visualisation = array();
         foreach ($a_liste_adherents as $a_adherent)
         {
            list($st_adherent,$i_idf_adh,$st_email_forum,$st_site) = $a_adherent;
            $st_email_forum = ($st_email_forum!='') ? "<a href=\"mailto:$st_email_forum\">$st_email_forum</a>" : $st_email_forum;
            $st_site = ($st_site!='') ? "<a href=\"$st_site\">$st_site</a>": $st_site;
            $a_tableau_visualisation[] = array("<a href=\"".$_SERVER['PHP_SELF']."?visu=$i_idf_adh\">$st_adherent</a>",$i_idf_adh,$st_email_forum,$st_site,"<a href='Stats/StatsAdht.php?idf_adherent=$i_idf_adh' target='_blank' class='btn btn-info lien_stats'>Stats</a>","<a href='Stats/RecherchesAdht.php?idf_adherent=$i_idf_adh' target='_blank' class='btn btn-info lien_stats'>Recherches</a>");
         }
         $pagination->affiche_tableau_simple($a_tableau_visualisation);
      }
      else
      {
          // adh�rent de base          
         $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_adherents),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Adh&eacute;rent','Identifiant','Email','Site'));
         $pagination->init_page_cour($gi_num_page_cour);
         $pagination->affiche_entete_liens_navigation();
         $a_tableau_visualisation = array();
         foreach ($a_liste_adherents as $a_adherent)
         {
            list($st_adherent,$i_idf_adh,$st_email_forum,$st_site) = $a_adherent;
            $st_email_forum = ($st_email_forum!='') ? "<a href=\"mailto:$st_email_forum\">$st_email_forum</a>" : $st_email_forum;
            $st_site = ($st_site!='') ? "<a href=\"$st_site\">$st_site</a>": $st_site;
            $a_tableau_visualisation[] = array("<a href=\"".$_SERVER['PHP_SELF']."?visu=$i_idf_adh\">$st_adherent</a>",$i_idf_adh,$st_email_forum,$st_site);
         }
         $pagination->affiche_tableau_simple($a_tableau_visualisation);
      }
   }
   else
		print("<div class=\"alert alert-danger\">Pas d'adh&eacute;rents</div>\n");   
   if (a_droits($pst_ident,DROIT_GESTION_ADHERENT))  
   {
      print("<div class=\"form-row col-md-12\">");
	    print('<div class="btn-group" role="group">');   
      print("<button type=button id=supprimer_adherents class=\"btn btn-danger\">Supprimer les adh&eacute;rents s&eacute;lectionn&eacute;s</button>");
      print("<button type=button id=fusionner_adherents class=\"btn btn-warning\">Fusionner les adh&eacute;rents s&eacute;lectionn&eacute;s</button>");
	    print('<button type="button" class="btn btn-primary" id="ajouter_adherent">Ajouter un adh&eacute;rent</button>');
	    print('<button type="button" class="btn btn-warning" id="maj_statut_adherents">Mettre &agrave; jour le statut des adh&eacute;rents qui ne sont pas &agrave; jour</button>');
      
      print('</div>');
      print('</div>');	    
   
      $a_statuts_adherents = $pconnexionBD->liste_valeur_par_clef("select idf,nom from statut_adherent order by nom");
    print("<div class=\"form-row col-md-12\">");
	  print('<div class="btn-toolbar col-md-6" role="toolbar" aria-label="Toolbar">');  
	  print('<button type=button id=exporter_adherents class="btn btn-primary col-md-4">Exporter les adherents</button>');
	  $a_statuts_adherents[ADHESION_PARIS] = 'Adh&eacute;rents parisiens';
      $a_statuts_adherents[TOUS_ADHERENTS] = 'Adherents &agrave; jour';
	  print('<div class="input-group-prepend"><div class="input-group-text col-md-2">dont le statut est:</div><select name="statut_export" id="statut_export" class="col-md-2 form-control">');
      print(chaine_select_options($pc_statut,$a_statuts_adherents));
      print('</select></div>');
     print("</div>");
	  print('<div class="btn-group col-md-6" role="group">');
    print('<button type=button id=publipostage class="btn btn-primary">Exporter les @ pour le bulletin (Excel)</button>');
	  print('<button type=button class="btn btn-primary id=export_complet">Exporter tout (Excel)</button>');	  
	  print('</div>');
	  print('</div>');
    print("<div class=\"form-ow col-md-12\">");
    print('<button type=button id="aide_adherents" class="btn btn-primary col-md-4 col-md-offset-4">Montrer les aides possibles</button>');
    print('</div>');  
   }  
}

/** Affiche le menu de modification d'un adh�rent
 * @param object $padherent
 * @param integer $pi_idf_adherent identifiant de l'adht
 * @global string $gst_rep_trombinoscope 
 * @global string $gst_url_trombinoscope
 */ 
function menu_modifier($padherent,$pi_idf_adherent)
{
	global $gst_ident,$gst_rep_trombinoscope,$gst_url_trombinoscope;;
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"modification_adherent\" >");
	print("<input type=hidden name=mode id=mode_modifier value=MODIFIER>");
	print('<div class="row col-md-12">');
	print('<div class="col-md-6">');
  if (!empty($pi_idf_adh) && file_exists("$gst_rep_trombinoscope/$pi_idf_adh.jpg"))      
		print("<img src=\"$gst_url_trombinoscope/$pi_idf_adh.jpg\" width=115 height=132 alt=\"MaPhoto\">");
	print($padherent->formulaire_infos_personnelles(a_droits($gst_ident,DROIT_GESTION_ADHERENT)));
	print($padherent->formulaire_aides_possibles());
	print($padherent->formulaire_origine());
	print("</div>");
	print('<div class="col-md-6">');  
    print($padherent->formulaire_infos_agc());
	print($padherent->formulaire_droits_adherents());
	print("</div></div>");      

  print('<div class="btn-group-vertical col-md-4 col-md-offset-4">'); 
	print("<button type=submit class=\"btn btn-primary\">Modifier</button>"); 
  print("<button type=button id=\"notifier_adherent\" class=\"btn btn-primary\">Modifier et notifier une r&eacute;adh&eacute;sion</button>");
  print("<button type=button id=\"recreer_mdp\" class=\"btn btn-primary\">Cr&eacute;er un nouveau mot de passe</button>");
	print('<button type=button id="annuler_modifier_adherent" class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
	print("</div>");
	print("</form>");
}

/* Affiche le menu d'ajout d'un adh�rent
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param string $pst_ident identifiant de l'utilisateur courant 
 */ 
function menu_ajouter($padherent)
{
  global $gst_ident; 
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"ajout_adherent\">");
	print("<input type=hidden name=mode id=mode_ajouter value=AJOUTER>");
	print('<div class="row col-md-12">');
	print('<div class="col-md-6">');
	print($padherent->formulaire_infos_personnelles(a_droits($gst_ident,DROIT_GESTION_ADHERENT)));
	print($padherent->formulaire_aides_possibles());
	print($padherent->formulaire_origine());
	print("</div>");
	print('<div class="col-md-6">');
	print($padherent->formulaire_infos_agc());
	print($padherent->formulaire_droits_adherents());
	print('</div>');	   
	print("</div>\n");
        
	print('<div class="form-row col-md-12">');
  print('<div class="btn-group col-md-4 col-md-offset-4">');
  print('<button type=submit class="btn btn-primary">Ajouter</button>');
	print('<button type=submit class="btn btn-primary" id="annuler_ajouter_adherent">Annuler</button>');
	print("</div>");
  print("</div>");
	print("</form>");
}

/** Affiche le menu de visualisation d'un adh�rent (visiteur sans aucun droit)
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_adherent Identifiant de l'adherent � modifier 
 * @param string $pst_ident identifiant de l'utilisateur courant
 * @global string $gst_rep_trombinoscope r�pertoire du trombinoscope
 * @global string $gst_url_trombinoscope url du trombinoscope  
 */ 
function menu_visualiser($pconnexionBD,$pi_idf_adherent)
{
   global $gst_rep_trombinoscope,$gst_url_trombinoscope;
   list($i_idf,$st_nom,$st_prenom,$st_email,$st_site,$c_confidentiel,$st_adr1,$st_adr2,$st_cp,$st_ville,$st_pays) = $pconnexionBD->sql_select_liste("select idf,nom,prenom,email_forum,site, confidentiel,adr1,adr2,cp,ville,pays from adherent where idf=$pi_idf_adherent");
   print("<table class=\"table table-bordered table-striped\">");
   if (file_exists("$gst_rep_trombinoscope/$pi_idf_adherent.jpg"))
   {
      print("<tr><th>Photo</th>");
      print("<td><img src=\"$gst_url_trombinoscope/$pi_idf_adherent.jpg\" width=115 height=132></td>");
      print("</tr>");       
   }
   print("<tr><th>Nom</th><td>$st_prenom $st_nom (Num&eacute;ro d'adh&eacute;rent: $i_idf)</td></tr>");
   if ($st_email!='')
      print("<tr><th>Email</th><td><a href=\"mailto:$st_email\">$st_email</a></td></tr>");
   if ($st_site!='')
      print("<tr><th>Site</th><td><a href=\"$st_site\">$st_site</a></td></tr>");
   if ($st_pays!='')
      print("<tr><th>Pays</th><td>$st_pays</td></tr>");
   if ($c_confidentiel=='N')
   {
      print("<tr><th>Adresse</th><td>$st_adr1<br>$st_adr2</tr>"); 
      print("<tr><th>Code postal</th><td>$st_cp</tr>"); 
      print("<tr><th>Ville</th><td>$st_ville</tr>");
   }
   print("</table>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");   
   print('<div class="form-row">');   
   print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Liste des adherents</button>');
   print('</div>');
   print("</form>");

}

/** Exporte les adh�rents d�finis par le statut. Le r�sultat est un tableau HTML
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param string statut de l'adh�rent
 */ 
function exporte_adresses_par_statut($pconnexionBD,$pc_statut)
{
    switch ($pc_statut)
    {
       case ADHESION_PARIS:
       $st_requete = "select concat(nom,' ',prenom),idf, email_perso,adr1,adr2,cp,ville,upper(pays) from adherent where statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."','".ADHESION_GRATUIT."') and left(cp,2) in (75,77,78,91,92,93,94,95) order by nom, prenom";
       break;
       case TOUS_ADHERENTS:
       $st_requete = "select concat(nom,' ',prenom),idf, email_perso,adr1,adr2,cp,ville,upper(pays) from adherent where statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."','".ADHESION_GRATUIT."') order by nom, prenom";
       break;
       default:
       $pconnexionBD->initialise_params(array(':statut'=>$pc_statut)); 
       $st_requete = "select concat(nom,' ',prenom),idf, email_perso,adr1,adr2,cp,ville,upper(pays) from adherent where statut=:statut order by nom, prenom";
       
    }
    //print("R=$st_requete<br>");
    $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);       
    if (count($a_liste_adherents)==0)
    {
       print("<div class=\"alert alert-danger\">");
       print("Pas d'adh&eacute;rent avec le  statut '$pc_statut'");
       print("</div>");
    }
    else
    {
       print("<table class=\"table table-bordered table-striped\">\n");
       print("<tr><th>Adh&eacute;rent</th><th>N�</th><th>Email</th><th>Adresse1</th><th>Adresse2</th><th>CP</th><th>Ville</th><th>Pays</th></tr>\n");
       foreach ($a_liste_adherents as $a_ligne)
       {
          print("<tr>"); 
          foreach ($a_ligne as $st_cellule)
          {
             if ($st_cellule=='')
                print("<td>&nbsp;</td>");
             else
                print("<td>$st_cellule</td>");   
          }
          print("</tr>"); 
       }
       print("</table>\n");
    }
    
    print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
    print("<input type=hidden name=mode value=LISTE>");
    print('<div class="form-row">');   
    print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Liste des adherents</button>');
    print('</div>');	
	print("</form>");
}

/** Exporte les adh�rents d�finis par le statut. Le r�sultat est un tableau HTML
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param string statut de l'adh�rent
 */ 
function exporte_adresses_publipostage($pconnexionBD)
{
   $st_requete = "select concat(nom,' ',prenom),idf, email_perso,adr1,adr2,cp,ville,upper(pays) from adherent where statut in ('".ADHESION_BULLETIN."','".ADHESION_HONNEUR."','".ADHESION_GRATUIT."') order by nom, prenom";
   $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);       
   if (count($a_liste_adherents)==0)
   {
     print("<div class=\"alert alert-danger\">");
     print("Pas d'adh&eacute;rent");
     print("</div>");
   }
   else
   {
     print("<table class=\"table table-bordered table-striped\">\n");
     print("<tr><th>Adh&eacute;rent</th><th>N�</th><th>Email</th><th>Adresse1</th><th>Adresse2</th><th>CP</th><th>Ville</th><th>Pays</th></tr>\n");     
     foreach ($a_liste_adherents as $a_ligne)
     {
        list($st_adherent,$i_numero,$st_email,$st_adr1,$st_adr2,$i_cp,$st_ville,$st_pays) = $a_ligne;
        if ($i_cp != '') $i_cp="'$i_cp";
        print("<tr>"); 
        foreach (array($st_adherent,$i_numero,$st_email,$st_adr1,$st_adr2,$i_cp,$st_ville,$st_pays) as $st_cellule)
        {
           if ($st_cellule=='')
              print("<td>&nbsp;</td>");
           else
              print("<td>$st_cellule</td>");   
        }
        print("</tr>"); 
     }
     print("</table>\n");
   }
}

/** Exporte tous les adh�rents
 * @param object $pconnexionBD Identifiant de la connexion de base
 */ 
function exporte_tout($pconnexionBD)
{
   $st_requete = "select * from adherent order by nom, prenom";
   $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);       
   if (count($a_liste_adherents)==0)
   {
     print("<div class=\"alert alert-danger\">");
     print("Pas d'adh&eacute;rent");
     print("</div>");
   }
   else
   {
     print("<table class=\"table table-bordered table-striped\">\n");
     foreach ($a_liste_adherents as $a_ligne)
     {
        print("<tr>"); 
        foreach ($a_ligne as $st_cellule)
        {
           if ($st_cellule=='')
              print("<td>&nbsp;</td>");
           else
              print("<td>$st_cellule</td>");   
        }
        print("</tr>"); 
     }
     print("</table>\n");
   }
}

/** Exporte tous les adh�rents
 * @param object $pconnexionBD Identifiant de la connexion de base
 */ 
function montre_aides_adherents($pconnexionBD)
{
   $st_requete = "select nom,prenom, idf from adherent where aide &".AIDE_RELEVES." and statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."') order by nom, prenom";
   $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);
   print('<div class="panel-group">');
   print('<div class="panel-heading">Aide aux relev&eacute;s</div>'); 
   print('<div class="panel-body">');
   if (count($a_liste_adherents)==0)
   {
     print("<div class=\"alert alert-danger\">");
     print("Pas d'adh&eacute;rent");
     print("</div>");
   }
   else
   {
     print("<table class=\"table table-bordered table-striped\">\n");
     foreach ($a_liste_adherents as $a_ligne)
     {
        print("<tr>"); 
        foreach ($a_ligne as $st_cellule)
        {
           print("<td>$st_cellule</td>");   
        }
        print("</tr>"); 
     }
     print("</table>\n");
   }
   print("</div>");
   $st_requete = "select nom,prenom, idf from adherent where aide &".AIDE_INFORMATIQUE." and statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."') order by nom, prenom";
   $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);
   print('<div class="panel-heading">Aide &agrave; l\'informatique</div>'); 
   print('<div class="panel-body">');   
   if (count($a_liste_adherents)==0)
   {
     print("<div class=\"alert alert-danger\">");
     print("Pas d'adh&eacute;rent");
     print("</div>");
   }
   else
   {
     print("<table class=\"table table-bordered table-striped\">\n");
     foreach ($a_liste_adherents as $a_ligne)
     {
        print("<tr>"); 
        foreach ($a_ligne as $st_cellule)
        {
           print("<td>$st_cellule</td>");   
        }
        print("</tr>"); 
     }
     print("</table>\n");
   }
   print("</div>");
   $st_requete = "select nom,prenom, idf from adherent where aide &".AIDE_AD." and statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."') order by nom, prenom";
   $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);       
   print('<div class="panel-heading">Entraide aux AD</div>'); 
   print('<div class="panel-body">');
   if (count($a_liste_adherents)==0)
   {
     print("<div class=\"alert alert-danger\">");
     print("Pas d'adh&eacute;rent");
     print("</div>");
   }
   else
   {
     print("<table class=\"table table-bordered table-striped\">\n");
     foreach ($a_liste_adherents as $a_ligne)
     {
        print("<tr>"); 
        foreach ($a_ligne as $st_cellule)
        {
           print("<td>$st_cellule</td>");   
        }
        print("</tr>"); 
     }
     print("</table>\n");
   }
   print("</div>");
   $st_requete = "select nom,prenom, idf from adherent where aide &".AIDE_BULLETIN." and statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."','".ADHESION_HONNEUR."') order by nom, prenom";
   $a_liste_adherents =$pconnexionBD->sql_select_multiple($st_requete);
   print('<div class="panel-heading">Participation au bulletin</div>'); 
   print('<div class="panel-body">');    
   if (count($a_liste_adherents)==0)
   {
     print("<div class=\"alert alert-danger\">");
     print("Pas d'adh&eacute;rent");
     print("</div>");
   }
   else
   {
     print("<table class=\"table table-bordered table-striped\">\n");
     foreach ($a_liste_adherents as $a_ligne)
     {
        print("<tr>"); 
        foreach ($a_ligne as $st_cellule)
        {
           print("<td>$st_cellule</td>");   
        }
        print("</tr>"); 
     }
     print("</table>\n");
   }
   print("</div>");
   
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print('<div class="form-row">');   
   print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Liste des adherents</button>');
   print('</div>');   
   print("</form></div>");
}


/** Effectue la bascule des adh�rents. Les adh�rents plus � jour de leur cotisations sont suspendus
 * Ceux de plus de 5 ans sont supprim�s
 * @param object $pconnexionBD Identifiant de la connexion de base
 */ 
function maj_statut_adherents($pconnexionBD)
{
    global $gst_time_zone;
    date_default_timezone_set($gst_time_zone);
    $a_localtime= localtime(); 
    $i_annee_prec=$a_localtime[5]+1899;
    $st_date_inscription = "$i_annee_prec-10-01";
    $st_requete = "update adherent set statut='".ADHESION_SUSPENDU."' where statut in ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."') and (annee_cotisation!=year(now()) and date_paiement<'$st_date_inscription')";
    $pconnexionBD->execute_requete($st_requete);
    $st_requete = "update adherent set  annee_cotisation=year(now()) where statut='".ADHESION_GRATUIT."'";
    $pconnexionBD->execute_requete($st_requete);
    $st_requete = "select idf from adherent where annee_cotisation =year(now()) -1 and statut='".ADHESION_SUSPENDU."' order by idf";
    $a_adhts_suspendus = $pconnexionBD->sql_select($st_requete);
    $st_cmd_gbk = "";
    $st_erreurs_gbk='';
    foreach ($a_adhts_suspendus as $i_idf)
    {
       $adherent = new Adherent($pconnexionBD,$i_idf);
       if (!$adherent->supprime_utilisateur_gbk())
	   {	   
          $st_erreur_gbk= $adherent::erreur_gbk();
          print("$st_erreur_gbk<br>\n"); 
          $st_erreurs_gbk.="$st_erreur_gbk\n";
       }		  
    }    
    $st_requete = "select idf,prenom, nom from adherent where statut='".ADHESION_SUSPENDU."' and (year(now())-annee_cotisation>".SEUIL_RETENTION_ADHTS.") order by idf";
    $a_adhts_a_supprimer = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
    $st_adhts_supprimes='';
    foreach ($a_adhts_a_supprimer as $i_idf_adht => $a_infos_adhts)
    {
       list($st_prenom,$st_nom) = $a_infos_adhts;
       $st_adhts_supprimes .= "<tr><td>$i_idf_adht</td><td>$st_prenom</td><td>$st_nom</td></tr>\n";
       $adherent = new Adherent($pconnexionBD,$i_idf_adht);
       $adherent->supprime();
    }
    if (!empty($st_adhts_supprimes))
    {
       $st_message_html = "<table border=1>";
       $st_message_html .= "<tr><th>Num&eacute;ro</th><th>Pr&eacute;nom</th><th>Nom</th></tr>";
       $st_message_html .= $st_adhts_supprimes; 
       $st_message_html .= "</table>";
       if (!empty($st_erreurs_gbk))
       {
          $st_message_html .= "<h3>Erreurs GBK lors de la suspension d'&eacute;rents";
          $st_message_html .= "$st_erreurs_gbk";
       }
       $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
       $st_sujet = "Adherents supprimes";  
       $st_frontiere = '-----=' . md5(uniqid(mt_rand()));
       $st_entete  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
       $st_entete .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
       $st_entete .= "Bcc: fbouffanet@yahoo.fr\n";
       $st_entete .= "Reply-to: AGC <".EMAIL_DIRASSO.">\n";
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
       mail(EMAIL_PRESASSO,$st_sujet, $st_message, $st_entete);
    }
}

/** Fusionne 2 adh�rents: le plus petit num�ro est conserv� et les informations
 * du second adh�rent ajout�es au premier si les nom et adresses sont identiques 
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_adh1 identifiant du premier adh�rent
 * @param integer $pi_idf_adh1 identifiant du second adh�rent 
 */
function fusionner($pconnexionBD,$pi_idf_adh1,$pi_idf_adh2)
{
   if ($pi_idf_adh1<$pi_idf_adh2)
   {
       $i_ancien_numero = $pi_idf_adh1;
       $i_nouveau_numero = $pi_idf_adh2;       
   }
   else
   {
       $i_ancien_numero = $pi_idf_adh2;
       $i_nouveau_numero = $pi_idf_adh1;
   }
   $a_champs_adht = array(0 => 'Nom',1=> 'Pr&eacutenom',2=>'Adr1',3=>'Adr2',4=>'Code Postal',5=>'Ville',6=>'Pays',7=>'T&eacutel&eacute;phone');
   $a_ancien_adht = $pconnexionBD->sql_select_liste("select nom,prenom,adr1,adr2,cp,ville,pays,tel from adherent where idf=$i_ancien_numero");
   $a_nouvel_adht = $pconnexionBD->sql_select_liste("select nom,prenom,adr1,adr2,cp,ville,pays,tel from adherent where idf=$i_nouveau_numero");
   $a_erreurs = array();
   foreach ($a_champs_adht as $i_num_champs => $st_lib_champs)
   {
      if (strtoupper($a_ancien_adht[$i_num_champs])!=strtoupper($a_nouvel_adht[$i_num_champs]))
         $a_erreurs[$st_lib_champs] = array($a_ancien_adht[$i_num_champs],$a_nouvel_adht[$i_num_champs]);          
   }
   if (count($a_erreurs)>0)
   {
      print("<div class=\"alert alert-danger\">Fusion impossible. Merci de corriger les champs suivants auparavant:</div>");
      print("<table class=\"table table-bordered table-striped\">");
      print("<tr><th>Adh&eacute;rent</th><th>$i_ancien_numero</th><th>$i_nouveau_numero</th></tr>");
      foreach ($a_erreurs as $st_lib => $a_val)
      {
          list ($st_champs_ancien,$st_champs_nouveau) = $a_val;
          print("<tr><th>$st_lib</th><td>$st_champs_ancien</td><td>$st_champs_nouveau</td></tr>");
      }      
      print("</table></div>");
   }
   else
   {
      $pconnexionBD->initialise_params(array(':ancien_idf'=>$i_ancien_numero,':nouvel_idf'=>$i_nouveau_numero));
      $st_requete = "update `adherent` ancien_adh, `adherent` nouvel_adh set ancien_adh.statut=nouvel_adh.statut, ancien_adh.aide=nouvel_adh.aide, ancien_adh.prix=nouvel_adh.prix, ancien_adh.jeton_paiement=nouvel_adh.jeton_paiement, ancien_adh.date_paiement=nouvel_adh.date_paiement, ancien_adh.annee_cotisation=nouvel_adh.annee_cotisation,ancien_adh.email_perso=nouvel_adh.email_perso,ancien_adh.email_forum=nouvel_adh.email_forum,ancien_adh.infos_agc=CONCAT_WS(\"\n\",ancien_adh.infos_agc,nouvel_adh.infos_agc) where ancien_adh.idf=:ancien_idf and nouvel_adh.idf=:nouvel_idf";
      $pconnexionBD->execute_requete($st_requete); 
      $adherent = new Adherent($pconnexionBD,$i_nouveau_numero);
      $adherent->supprime();
   }  
}

/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/
print('<body>');
print('<div class="container">');
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

require_once("Commun/menu.php");

$st_session_nom_a_chercher = isset($_SESSION['nom_a_chercher']) ? $_SESSION['nom_a_chercher']: '';
$st_post_nom_a_chercher =isset($_POST['nom_a_chercher']) ? $_POST['nom_a_chercher']:'';
if (get_magic_quotes_gpc())
{
   if (ini_get('magic_quotes_sybase'))
   {
      
     $gst_nom_a_chercher = empty ($st_post_nom_a_chercher) && empty($_GET['initiale_adh'])? $st_session_nom_a_chercher : trim($st_post_nom_a_chercher); 
   }
   else
   {
      $gst_nom_a_chercher =  empty($st_post_nom_a_chercher) && empty($_GET['initiale_adh']) ? $st_session_nom_a_chercher :stripslashes(trim($st_post_nom_a_chercher));
   }   
}
else
{ 
   $gst_nom_a_chercher =  empty($st_post_nom_a_chercher) && empty($_GET['initiale_adh']) ? $st_session_nom_a_chercher : trim($st_post_nom_a_chercher); 
}

$c_session_statut =  isset($_SESSION['statut_listadh']) ? $_SESSION['statut_listadh'] : 'T';
$gc_statut = isset($_POST['statut_listadh']) ? $_POST['statut_listadh']: $c_session_statut;
$_SESSION['statut_listadh'] = $gc_statut;
$_SESSION['nom_a_chercher'] = $gst_nom_a_chercher;
$ga_aide = isset($_POST['aide']) ? $_POST['aide']: array();
$gst_aide = array_sum($ga_aide);
switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut); 
  break;
  case 'MENU_MODIFIER' :
    if (a_droits($gst_ident,DROIT_GESTION_ADHERENT))
    {   
      $adherent = new Adherent($connexionBD,$gi_idf_adherent);
      menu_modifier($adherent,$gi_idf_adherent);
    }
  break;
  case 'MODIFIER' :
      $adherent = new Adherent($connexionBD,$gi_idf_adherent);
      $adherent->initialise_depuis_formulaire();
      $adherent->modifie_avec_droits();  
    menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);  
  break;
  case 'MENU_AJOUTER' :
    if (a_droits($gst_ident,DROIT_GESTION_ADHERENT))
    {  
      $adherent = new Adherent($connexionBD,null);
      menu_ajouter($adherent);
    }  
  break;
  case 'AJOUTER':
     $adherent = new Adherent($connexionBD,null);
     $adherent->initialise_depuis_formulaire();
     $adherent->cree_avec_droits();           
     menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);    
   break;
   case 'SUPPRIMER':
   if (a_droits($gst_ident,DROIT_GESTION_ADHERENT))
   {
     $a_liste_adherents = $_POST['supp'];
     foreach ($a_liste_adherents as $i_idf_adherent)
     {
        $adherent = new Adherent($connexionBD,$i_idf_adherent);
        $adherent->supprime();         
     }
     menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);
   }
   break;
   case 'FUSIONNER' : 
   if (a_droits($gst_ident,DROIT_GESTION_ADHERENT))
   {
        list($i_idf_adh1,$i_idf_adh2) = $_POST['supp'];
        fusionner($connexionBD,$i_idf_adh1,$i_idf_adh2);
        menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);
   }
   break;
   case 'READHESION':
    $adherent = new Adherent($connexionBD,$gi_idf_adherent);
    if ($adherent->getStatut()==ADHESION_SUSPENDU)
		   $adherent->reactive();
    $adherent->initialise_depuis_formulaire();
    $adherent->modifie_avec_droits();       
    if ($adherent->envoie_message_readhesion())
      print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; l'adh&eacute;rent</div>");
    else
      print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; l'adh&eacute;rent</div>");
    menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);
   break;
   case 'VISU_ADHERENT':
   menu_visualiser($connexionBD,$gi_idf_adherent);  
   break; 
   case 'EXPORTER':
   $st_statut=  $_POST['statut_export'];
   exporte_adresses_par_statut($connexionBD,$st_statut);
   break;
   case 'MAJ_STATUT':
      maj_statut_adherents($connexionBD);
      menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);
   break;
   case 'AIDE_ADHERENTS':
        montre_aides_adherents($connexionBD);
   break;
   case 'RECREER_MDP':
      $adherent = new Adherent($connexionBD,$gi_idf_adherent);
      $st_mdp = Adherent::mdp_alea();
      //print("Nouveau MDP=$st_mdp<br>");        
      if ($adherent->change_mdp($st_mdp))
        print("<div class=\"alert alert-success\"> Message envoy&eacute; &agrave; l'adh&eacute;rent</div>");
      else
        print("<div class=\"alert alert-danger\"> Echec lors de l'envoi du  message &agrave; l'adh&eacute;rent</div>");
      menu_liste($connexionBD,$gst_ident,$gst_nom_a_chercher,$gc_statut);
   break;       
}  
print('</div></body></html>');
?>