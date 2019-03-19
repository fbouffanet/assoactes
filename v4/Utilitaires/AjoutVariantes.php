<?php

require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VARIANTES);
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/phonex.cls.php');

$gst_mode = empty($_POST['mode']) ? 'AFFICHER': $_POST['mode'] ;
$gi_idf_groupe = empty($_POST['idf_groupe']) ? '': $_POST['idf_groupe'] ;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$gst_infos = '';
$gst_erreurs = '';

/**
 * Affiche le menu formulaire
 * @param object $pconnexionBD  Connexion à la base
 * @param integer $pi_idf_groupe Identifiant du groupe à ajouter 
 * @global string $gst_infos Chaine d'infos (succes)
 * @global string $gst_erreurs (danger)
 */ 
function affiche_menu($pconnexionBD,$pi_idf_groupe) {
	global $gst_infos,$gst_erreurs;
	print('<form id="variantes_patro" method="post" action="'.$_SERVER['PHP_SELF'].'">');
	print('<input type="hidden" name="mode" id="mode" value="EXPORT">');
	print("<input type=\"hidden\" name=\"idf_groupe\" id=\"idf_groupe\" value=\"$pi_idf_groupe\">");
	if (!empty($gst_erreurs))
		print("<div id=\"infos\" class=\"alert alert-success\">$gst_infos</div>");
	if (!empty($gst_infos))
		print("<div id=\"erreurs\" class=\"alert alert-danger\">$gst_erreurs</div>");
	print("<div class='row col-md-12'>");
	print("<div class='col-md-5'>");
    print('<div id="cmt_retour"></div>');
	
	print("<label for=\"variante_a_chercher\" class=\"col-form-label col-md-2\">Variante &agrave; chercher:</label>");
	print("<div class='col-md-10'>");
	print("<input type=text name=\"variante_a_chercher\" id=\"variante_a_chercher\" value=\"\" class=\"form-control\" size=30>");
	print("</div>");
  
	print("<label for=\"majeure\" class=\"col-form-label col-md-2\">Majeure trouv&eacute;e</label>");
	print("<div class='col-md-10'>");
	print("<input type=text name=\"majeure\" id=\"majeure\" value=\"\" class=\"form-control\" size=30>");
	print("</div>");
  
	print("<div class='row col-md-12'>");  
	print("<textarea rows=20 cols=40 id=\"variantes\" name=\"variantes\" class=\"form-control col-md-8 col-md-offset-2\">");

	if (!empty($pi_idf_groupe))
	{
		$a_variantes = $pconnexionBD->sql_select("select patronyme from variantes_patro where idf_groupe=$pi_idf_groupe order by libelle");
		foreach ($a_variantes as $st_variante)
		{
			print("$st_variante\n");
		}
	}
	print("</textarea>");
	print("</div>");
	print("</div>");
	print("<div class='col-md-2'>");
	print('<div class="btn-group-vertical">');
	print("<button type=\"button\" id=\"creer\" class=\"btn btn-primary\">Creer</button>");
	print("<button type=\"button\" id=\"modifier\" class=\"btn btn-primary\">Modifier</button>");
	print("<button type=\"button\" id=\"completer\" class=\"btn btn-primary\">Compl&eacute;ter</button>");
	print("<button type=\"button\" id=\"supprimer\" class=\"btn btn-danger\">Supprimer</button>");
	print("<button type=\"button\" id=\"fusionner\" class=\"btn btn-warning\">Fusionner</button>");
  
	print("</div>");
  
	print("<div class='col-md-5'>");
	print('<div id="cmt_retour_a_fusionner"></div>');
	print('<label for="variante_a_fusionner" class="col-form-label col-md-2">Variante &agrave; chercher:</label>');
	print("<div class='col-md-10'>");
	print("<input type=text name=\"variante_a_fusionner\" id=\"variante_a_fusionner\" value=\"\" size=30 class=\"form-control\">");
	print('</div>');
	print("<input type=\"hidden\" name=\"idf_groupe_a_fusionner\" id=\"idf_groupe_a_fusionner\" value=\"\">");
	print("<label for=\"majeure_a_fusionner\" class=\"col-form-label col-md-2\">Majeure trouv&eacute;e</label>");
	print("<div class='col-md-10'>");
	print("<input type=text name=\"majeure_a_fusionner\" id=\"majeure_a_fusionner\" value=\"\" class=\"form-control\" size=30>");
	print("</div>");
	print("<div class='row col-md-12'>");  
	print("<textarea rows=20 cols=40 id=\"variantes_a_fusionner\" name=\"variantes_a_fusionner\" class=\"form-control col-md-8 col-md-offset-2\"></textarea>");
	print("</div>");
	print("</div>");
	print('</form>');
	print("</div>");
}

/*
* Ajoute les variantes au groupe sélectionnées
* @param object $pconnexionBD  Connexion à la base
* @param integer $pi_idf_groupe identifiant du groupe
* @param string $pst_majeure majeure du groupe
* @param array $pa_variantes liste des variantes à ajouter
* @global string $gst_infos Chaine d'infos (succes)
* @global string $gst_erreurs (danger)
*/
function ajoute_variantes($pconnexionBD,$pi_idf_groupe,$pst_majeure,$pa_variantes)
{
	global $gst_infos,$gst_erreurs;
	$st_majeure = strtoupper(stripslashes(trim($pst_majeure)));
	$a_variantes = array_unique(array_map('trim',explode("\n",$pst_variantes)));
	$st_infos = '';
	$st_erreurs = '';
	$pconnexionBD->initialise_params(array(':majeure'=>$pst_majeure));
	$i_nb_majeures =$pconnexionBD->sql_select1("select count(*) from variantes_patro where patronyme = :majeure collate latin1_general_ci");   
	if ($i_nb_majeures>0)
	{
      $gst_erreurs = "La majeure $st_majeure est d&eacute;j&agrave; pr&eacute;sente dans les variantes";
	}
	else
	{
		$a_variantes_a_ajouter =array();
		$a_variantes_ajoutees  = array();
		$i_groupe_courant =$pconnexionBD->sql_select1("select max(idf_groupe)+1 from variantes_patro");      
		if (empty($i_groupe_courant)) $i_groupe_courant=0;
		$pconnexionBD->initialise_params(array(':majeure'=>$pst_majeure));
		$st_variantes_a_ajouter = "values(:majeure,$i_groupe_courant,1)";
		$i=0;      
		foreach($a_variantes as $st_variante)
		{
			$st_variante=strtoupper(stripslashes($st_variante));
			if ($st_variante=="") continue;
			$a_params_precedents=$pconnexionBD->params();
			$pconnexionBD->initialise_params(array(':variante'=>$st_variante));
			list($i_nb_variantes,$st_majeure_variante) =$pconnexionBD->sql_select_liste("select count(*),vp2.patronyme from variantes_patro vp1 join variantes_patro vp2 on (vp1.idf_groupe=vp2.idf_groupe) where vp2.majeure=1 and vp1.patronyme = :variante collate latin1_german1_ci");
			$pconnexionBD->initialise_params($a_params_precedents);
			if ($i_nb_variantes>0) 
				$gst_erreurs.= "Variante $st_variante d&eacute;j&agrave; r&eacute;f&eacute;renc&eacute;e sous la majeure $st_majeure_variante. Elle ne sera pas ajout&eacute;e"; 
			else
			{
				$pconnexionBD->ajoute_params(array(":variante$i"=>$st_variante));
				$st_variantes_a_ajouter.= ",(:variante$i,$i_groupe_courant,0)";        
				$a_variantes_ajoutees[]=$st_variante;
				$i++; 
			}
		}
		$st_requete = "insert into variantes_patro(patronyme,idf_groupe,majeure) $st_variantes_a_ajouter";
		// print("Requete=$st_requete<br>");
		$pconnexionBD->execute_requete($st_requete);
      
		$st_variantes_ajoutees = join(',',$a_variantes_ajoutees);
		$gst_infos.= "Variantes ajout&eacute;es: $st_variantes_ajoutees";	  
	} 
}

/*
* Affiche les variantes à compléter
* @param object $pconnexionBD Connexion à la base
* @param integer $pi_idf_groupe identifiant du groupe
*/
function affiche_menu_completer($pconnexionBD,$pi_idf_groupe)
{
	  $a_patronymes = $pconnexionBD->sql_select("select distinct patronyme from `stats_patronyme` where patronyme REGEXP '^[A-Z \?\(\)]+$' and patronyme not in (select patronyme from `variantes_patro`)");
    $a_groupes_variantes = $connexionBD->liste_valeur_par_clef("select patronyme,majeure from `variantes_patro` where idf_groupe = $pi_idf_groupe");
    $oPhonex = new phonex;
    $a_phonex_variantes = array();
    $a_variantes_connues = array();
    $a_code_phonex = array();
    $st_majeure = '';
    $st_variantes_courantes = '';
    foreach ($a_groupes_variantes as $st_patronyme => $st_majeure_courante)
    {
       $oPhonex -> build ($st_patronyme);
       $sPhonex = $oPhonex -> sString;
       $a_code_phonex[] = $sPhonex;
       if ($st_majeure_courante==1) 
          $st_majeure=$st_patronyme;
       else
          $st_variantes_courantes .= "$st_patronyme\n";   
    }
    $st_liste_phonex = join(',',$a_code_phonex);
    $st_requete = "select patronyme from phonex_patro where patronyme not in (select patronyme from `variantes_patro`) and phonex in ($st_liste_phonex)";
    //print("Req=$st_requete<br>");
    $a_variantes_ajouter = $connexionBD->sql_select($st_requete);
    print("<form  id=\"menu_completer\" action=\"".$_SERVER['PHP_SELF']."\" method=post >");
    print("<input type=hidden name=mode value=COMPLETER>");
    print("<input type=hidden name=idf_groupe value=$pi_idf_groupe>");    
    print('<label for="majeure" class="col-form-label col-md-2">Majeure<label>');
	print('<div class="row col-md-10">');
	print("<input type=text name=\"majeure\" id=\"majeure\" value=\"$st_majeure\" class=\"form-control\" size=30 readonly>");
	print('</div>');
	print('<label for="variantes_courantes" class=\"col-form-label col-md-2\">Variantes actuelles:<label>');
	print('<div class="row col-md-10">'); 
    print("<textarea id=variantes_courantes disabled rows=8 cols=40 class=\"form-control\">$st_variantes_courantes</textarea>");
    print('</div>');
    if (count($a_variantes_ajouter)==0)
		print('<div class="alert alert-danger">Pas de variantes trouv&eacute;es qui ne sont pas d&eacute;j&agrave; connues</div>');
	else
    {
       print('<label for="nouvelles_variantes" class="col-form-label col-md-2">Nouvelles variantes propos&eacute;es: <label>');
       print('<div class="row col-md-10">');
	   print('<table class="table table-bordered table-striped">');
       foreach ($a_variantes_ajouter as $st_patronyme)
       {
         print("<tr><td>$st_patronyme</td><td> <input type=checkbox class=\"groupe_patros\" name=\"variantes[]\"  value=\"$st_patronyme\"></td></tr>");
       }
       print("</table>");
	   print("</div>");
	   print('<button type="submit" class="btn btn-primary cold-md-4 col-md-offset-4">Compl&eacute;ter</button>');
    }  
    print("</form>");
	
	print('<form id="variantes_prenom" method="post" action="'.$_SERVER['PHP_SELF'].'">');	
	print("<input type=\"hidden\" name=\"idf_groupe\" id=\"idf_groupe\" value=\"$pi_idf_groupe\">");
	print('<input type="hidden" name="mode" id="mode" value="AFFICHER">');
	print('<button type="submit" class="btn btn-primary cold-md-4 col-md-offset-4">Retourner au menu</button>');
	print('</form>');
}	

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<title>Base AGC: Gestion des variantes Patronymiques</title>');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>"); 
print('<link rel="shortcut icon" href="images/favicon.ico">');
?>
<script type='text/javascript'>
$.validator.addMethod('require-one', function(value) {
    if ($('#resp01-sim').is(':checked')) {
        return $('.require-one:checked').size() > 0;
    } else {
        return true;
    }
}, 'Sélectionner au moins une case');

$(document).ready(function() {
  
  function maj_variantes(term,idf_groupe,majeure,variantes,cmt_retour) {
     $.ajax({
        url:"../ajax/variantes_patro.php",
        type: "GET",
        data: 'term='+term,
			   dataType: 'json',
			   cache: false,
				timeout: 1000,
        //contentType: "application/x-www-form-urlencoded;charset=windows-1252",
        success:function(reponse) {
            var nb_reponses=reponse['nb_reponses'];   
            $(cmt_retour).html('');
            $(cmt_retour).append(nb_reponses+' groupes trouve(s)');
			$(cmt_retour).addClass( "has-error" ).removeClass( "has-success" );	
				
            if (nb_reponses==1)
            {  
                var liste_variantes = '';
                 $.each(reponse['variantes'], function( index, valeur ) {
                      liste_variantes = liste_variantes + valeur+ "\n";
                  });
                $(variantes).html('');
                $(variantes).append(liste_variantes);
                $(idf_groupe).val(reponse['idf_groupe']);
                $(majeure).val(reponse['majeure']);
                $(cmt_retour).removeClass( "has-error" ).addClass( "has-success" );				
            }
        }
    });
  }
   $('#variante_a_chercher').autocomplete({
		minLength: 3,
    source: function( request, response ) {
        $.ajax( {
          url: "../ajax/variantes_patro.php",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function( reponse ) {			
            response( reponse['variantes']);
            if (reponse['nb_reponses']==1)
            {
                var variantes = '';
                 $.each(reponse['variantes'], function( index, valeur ) {
                      variantes = variantes + valeur+ "\n";
                  });
                $('#variantes').html('');
                $('#variantes').append(variantes);
                $('#idf_groupe').val(reponse['idf_groupe']);
				$('#majeure').val(reponse['majeure']);
            }
          }
        })        
      },
      select: function (event, ui) {
            //$('#variante').val(ui.item.value);
            maj_variantes($('#variante_a_chercher').val(),'#idf_groupe','#majeure','#variantes','#cmt_retour');
            return false;
 
        }       
    }); 

  $("#variante_a_chercher").keyup( function() {
     maj_variantes($('#variante_a_chercher').val(),'#idf_groupe','#majeure','#variantes','#cmt_retour');   
  });
  
   $('#variante_a_fusionner').autocomplete({
        minLength: 3,
         source: function( request, response ) {
        $.ajax( {
          url: "../ajax/variantes_patro.php",
          dataType: "json",
          data: {
            term: request.term
          },
          success: function( reponse ) {
           console.log(reponse);				
            response( reponse['variantes']);
            if (reponse['nb_reponses']==1)
            {
                var variantes = '';
                 $.each(reponse['variantes'], function( index, valeur ) {
                      variantes = variantes + valeur+ "\n";
                  });
                $('#variantes_a_fusionner').html('');
                $('#variantes_a_fusionner').append(variantes);
                $('#idf_groupe_a_fusionner').val(reponse['idf_groupe']);
				$('#majeure_a_fusionner').val(reponse['majeure']);
            }
          }
        })        
      },
      select: function (event, ui) {
            $('#variante').val(ui.item.value);
            maj_variantes($('#variante_a_fusionner').val(),'#idf_groupe_a_fusionner','#majeure_a_fusionner','#variantes_a_fusionner','#cmt_retour_a_fusionner');
            return false;
 
        }
    }); 
    
   $("#variante_a_fusionner").keyup( function() {
     maj_variantes($('#variante_a_fusionner').val(),'#idf_groupe_a_fusionner','#majeure_a_fusionner','#variantes_a_fusionner','#cmt_retour_a_fusionner');     
  });
  
  $( "#modifier" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
	 $('#variante_a_chercher').parents(".col-md-10").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
	 error='Aucun groupe s&eacute;lectionn&eacute;';
	 error.addClass( "help-block" );
	 error.insertAfter($('#variante_a_chercher'));
    }
    else if ($("#variantes").val()=='')
    {
	  $('#variantes').parents(".col-md-12").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
	  var error='<div>Pas de variantes d&eacute;finies</div>';
	  error.addClass( "help-block" );
	  error.insertAfter($('#variante_a_chercher'));
    } 
    else
    {
      $("#mode").val('MODIFIER');
      $("#variantes_patro").submit();
    }
  });
  
  $( "#completer" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
      $('#variante_a_chercher').parents(".col-md-10").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
	  var error='<div>Aucun groupe s&eacute;lectionn&eacute;</div>';
	  error.addClass( "help-block" );
	  error.insertAfter($('#variante_a_chercher'));
    }
    else
    {
      $("#mode").val('MENU_COMPLETER');
      $("#variantes_patro").submit();
    }
  });
  
  $( "#creer" ).click(function() {
      if ($("#variantes").val()=='')
      {
        $('#variantes').parents(".col-md-12").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
	    var error='<div>Pas de variantes d&eacute;finies</div>';
	    error.addClass( "help-block" );
	    error.insertAfter($('#variante_a_chercher'));
      } 
      else
      {
        $("#mode").val('CREER');
        $("#variantes_patro").submit();
      }  
  });
  
  $( "#supprimer" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
     $('#variante_a_chercher').parents(".col-md-10").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
	 var error='<div>Aucun groupe s&eacute;lectionn&eacute;</div>';
	 error.addClass( "help-block" );
	 error.insertAfter($('#variante_a_chercher'));
    } 
    else
    {
      if (confirm('Voulez-vous supprimer ce groupe ?'))
      {
        $("#mode").val('SUPPRIMER');
        $("#variantes_patro").submit();
      }
    }
  });
  
  $( "#fusionner" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
		$('#variante_a_chercher').parents(".col-md-10").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
		var error='<div>Aucun groupe s&eacute;lectionn&eacute;</div>';
		error.addClass( "help-block" );
		error.insertAfter($('#variante_a_chercher'));
    }
    else if ($("#idf_groupe_a_fusionner").val()=='')
    {
		$('#variante_a_fusionner').parents(".col-md-10").addClass( "has-error" ).removeClass( "has-success" ).removeClass( "has-warning" );
		var error='<div>Aucun groupe s&eacute;lectionn&eacute;</div>';
		error.addClass( "help-block" );
		error.insertAfter($('#variante_a_fusionner'));
    } 
    else
    {
        if (confirm('Voulez-vous fusionner ces groupes ?'))
        {
          $("#mode").val('FUSIONNER');
          $("#variantes_prenom").submit();
        }  
    }
  });
  
  $( "#menu_completer" ).validate({
	  rules: {
	    "variantes[]": {
      	require_from_group: [1, ".groupe_patros"]
    	}
	  },
	  messages: {
			'variantes[]': {
				require_from_group: 'Choisir au moins un patronyme'
			}
		}		
 });

 $( "#exporter" ).click(function() {
	 $("#mode").val('EXPORT');
     $("#variantes_prenom").submit();
 });	 
  
});
</script>
<?php
print("</head>");
print("<body>");
print('<div class="container">');

require_once("../Commun/menu.php");

switch ($gst_mode) {
 case 'AFFICHER' :
  affiche_menu($connexionBD,$gi_idf_groupe);
 break;
 case 'CREER':
   $i_idf_groupe = $connexionBD->sql_select1("select max(idf_groupe) from variantes_patro");
   $i_idf_groupe++;
   $st_majeure = isset($_POST['majeure']) ? trim($_POST['majeure']) : '';
   $st_variantes = isset($_POST['variantes']) ? trim($_POST['variantes']) : '';
   $a_variantes = explode("\n",$st_variantes);    
   ajoute_variantes($connexionBD,$i_idf_groupe,$st_majeure,$a_variantes);
   affiche_menu($connexionBD,$i_idf_groupe);
 break;
 case 'MODIFIER':
   $i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
   $st_majeure = isset($_POST['majeure']) ? trim($_POST['majeure']) : '';
   $st_variantes = isset($_POST['variantes']) ? trim($_POST['variantes']) : '';
   $a_variantes = explode("\n",$st_variantes);
   
   if (!empty($i_idf_groupe))
   {
      $connexionBD->execute_requete("delete from variantes_patro where idf_groupe=$i_idf_groupe");
      ajoute_variantes($connexionBD,$i_idf_groupe,$st_majeure,$a_variantes);
      affiche_menu($connexionBD,$i_idf_groupe);
   }
 break;
 case 'MENU_COMPLETER':
	$i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
	if (!empty($i_idf_groupe))
		affiche_menu_completer($connexionBD,$i_idf_groupe);
 break;
 case 'COMPLETER':
	$i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
	$st_majeure = isset($_POST['majeure']) ? trim($_POST['majeure']) : '';
	$a_variantes = isset($_POST['variantes']) ? $_POST['variantes'] : '';
	if (!empty($i_idf_groupe) && count($a_variantes)>0)
	{	
		ajoute_variantes($connexionBD,$i_idf_groupe,$st_majeure,$a_variantes);
		affiche_menu($connexionBD,$i_idf_groupe);
	}
 break;
 case 'SUPPRIMER':
   $i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
   if (!empty($i_idf_groupe))
   {
      $connexionBD->execute_requete("delete from variantes_patro where idf_groupe=$i_idf_groupe");
      $gst_infos ="Variante supprim&eacute;e";
	  affiche_menu($connexionBD,$i_idf_groupe);
   }
 break;
 case 'FUSIONNER':
   $i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
   $i_idf_groupe_a_fusionner = isset($_POST['idf_groupe_a_fusionner']) ? (int) $_POST['idf_groupe_a_fusionner'] : '';
   $connexionBD->execute_requete("update variantes_patro set majeure=0 where idf_groupe=$i_idf_groupe_a_fusionner");
   $connexionBD->execute_requete("update variantes_patro set idf_groupe=$i_idf_groupe where idf_groupe=$i_idf_groupe_a_fusionner");
   $gst_infos ="Variante fusionn&eacute;e";
   affiche_menu($connexionBD,$i_idf_groupe); 
 break;
 default:
} 

print("</div>");
print("</body>");
print("</html>");

?>