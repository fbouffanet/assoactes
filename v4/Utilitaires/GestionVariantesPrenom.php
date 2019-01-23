<?php

require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VARIANTES);
require_once('../Commun/ConnexionBD.php');

$gst_mode = empty($_POST['mode']) ? 'AFFICHER': $_POST['mode'] ;
$gi_idf_groupe = empty($_POST['idf_groupe']) ? '': $_POST['idf_groupe'] ;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

switch ($gst_mode) {
 case 'EXPORT' :
   header("Content-type: text/csv");
   header("Expires: 0");
   header("Pragma: public");
   header("Content-disposition: attachment; filename=\"groupe_prenoms.csv\"");
   $fh = @fopen('php://output', 'w' );
   $a_liste_prenoms = $connexionBD->sql_select_multiple("select idf_groupe, libelle from variantes_prenom order by idf_groupe");
   foreach  ($a_liste_prenoms as $i_idf_groupe => $a_variantes)
   {
      fputcsv($fh,$a_variantes,SEP_CSV); 
   }  
   fclose($fh);
   exit();
 break;
}

/**
 * Affiche le menu formulaire
* @param object $pconnexionBD  Connexion à la base
* @param string $pst_infos Infos à afficher
* @param integer $pi_idf_groupe Identifiant du groupe à ajouter 
 */ 
function affiche_menu($pconnexionBD,$pst_infos,$pi_idf_groupe) {
  print('<form id="variantes_prenom" method="post" action="'.$_SERVER['PHP_SELF'].'">');
  print("<div class=gauche_gestion_prenoms>");
  print("Variante &agrave; chercher: <input type=text name=\"variante\" id=\"variante\" value=\"\" size=30>");
  print('<input type="hidden" name="mode" id="mode" value="EXPORT">');
  print("<input type=\"hidden\" name=\"idf_groupe\" id=\"idf_groupe\" value=\"$pi_idf_groupe\">");
  print("<div id=\"cmt_retour\" ></div>");
  print("<div id=\"erreur_groupe\" class=\"IMPORTANT\"></div>");
  print("<div id=\"infos\" class=\"INFO\">$pst_infos</div>");  
  print("<textarea rows=20 cols=40 id=\"variantes\" name=\"variantes\">");
  //print("<div id=\"variantes\" >");
  if (!empty($pi_idf_groupe))
  {
    $a_variantes = $pconnexionBD->sql_select("select libelle from variantes_prenom where idf_groupe=$pi_idf_groupe order by libelle");
    foreach ($a_variantes as $st_variante)
    {
      print("$st_variante\n");
    }
  }
  //print("</div>");
  print("</textarea>");
  print("<div id=\"erreur_variantes\" class=\"IMPORTANT\"></div>");
  print("<div><button type=\"button\" id=\"creer\" class=\"bouton_ombre\">Creer</button></div>");
  print("<div><button type=\"button\" id=\"modifier\" class=\"bouton_ombre\">Modifier</button></div>");
  print("<div><button type=\"button\" id=\"completer\" class=\"bouton_ombre\">Compl&eacute;ter</button></div>");
  print("<div><button type=\"button\" id=\"supprimer\" class=\"bouton_ombre\">Supprimer</button></div>");
  print("<div><button type=\"button\" id=\"fusionner\" class=\"bouton_ombre\">Fusionner</button></div>");
  print("</div>");
  print("<div class=droite_gestion_prenoms>");
  print("Variante &agrave; chercher: <input type=text name=\"variante_a_fusionner\" id=\"variante_a_fusionner\" value=\"\" size=30>");
  print("<div id=\"cmt_retour_a_fusionner\" ></div>");
  print("<div id=\"erreur_groupe_a_fusionner\" class=\"IMPORTANT\"></div>");  
  print("<input type=\"hidden\" name=\"idf_groupe_a_fusionner\" id=\"idf_groupe_a_fusionner\" value=\"\">");
  print("<div id=\"cmt_retour_a_fusionner\" ></div>");
  print("<textarea rows=20 cols=40 id=\"variantes_a_fusionner\" name=\"variantes_a_fusionner\"></textarea>");
  
  print("</div>");
  print('</form>');
  print("<div class=\"body\"><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
  print('<div align=center><br><input type="hidden" name="mode" value="EXPORT" >');
  print('<input type="submit" value="Exporter les variantes" class="bouton_ombre">');
  print('</form>');
  $a_prenoms = $pconnexionBD->sql_select("select libelle from prenom order by idf desc limit 20");
  if (count($a_prenoms)>0)
  {     
     print("<div><table border=1>");
     print("<tr><th> 20 derniers<br>nouveaux pr&eacute;noms</th></tr>");
     foreach ($a_prenoms as $st_prenom)
     {
       print("<tr><td>$st_prenom</td></tr>");
     }
     print("</table></div>");
  }
  print("</div>");
}

/*
* Ajoute les variantes au groupe sélectionnées
* @param object $pconnexionBD  Connexion à la base
* @param integer $pi_idf_groupe identifiant du groupe
* @param array $pa_variantes liste des variantes à ajouter 
*/
function ajoute_variantes($pconnexionBD,$pi_idf_groupe,$pa_variantes)
{
   $a_valeurs = array();
   $a_params = array();
   $i=0;
   $st_requete = "insert variantes_prenom(idf_groupe,libelle) values ";
   foreach($pa_variantes as $st_variante)
   {
      $a_params[":prenom$i"] = $st_variante;
      $a_valeurs[]=sprintf("(%d,:prenom%d)",$pi_idf_groupe,$i);
      $i++;
   }
   $st_valeurs=join(',',$a_valeurs);
   $st_requete .= $st_valeurs;
   $pconnexionBD->ajoute_params($a_params);
   $pconnexionBD->execute_requete($st_requete);
}

/*
* Affiche les variantes à compléter
* @param object $pconnexionBD Connexion à la base
* @param integer $pi_idf_groupe identifiant du groupe
*/
function affiche_menu_completer($pconnexionBD,$pi_idf_groupe)
{
	$i_precision=5;
  $st_requete = "select ps1.libelle from prenom_simple ps1 left join variantes_prenom vp2 on (ps1.libelle=vp2.libelle collate latin1_general_cs) where round(phonex*pow(10,$i_precision)) in (select distinct round (phonex*pow(10,$i_precision)) from variantes_prenom vp join prenom_simple ps2 on (vp.libelle=ps2.libelle collate latin1_general_cs) where vp.idf_groupe=$pi_idf_groupe) and vp2.idf_groupe is null ";
	$a_prenoms = $pconnexionBD->sql_select($st_requete);
	if(count($a_prenoms)==0)
  {
    print('<div id=\"erreur_variantes\" class=\"IMPORTANT\">Pas de variantes trouv&eacute;es</div>');
  }
  else
	{
		print('<form id="menu_completer" method="post" action="'.$_SERVER['PHP_SELF'].'">');
		print('<input type="hidden" name="mode" id="mode" value="COMPLETER">');
		print("<input type=\"hidden\" name=\"idf_groupe\" id=\"idf_groupe\" value=\"$pi_idf_groupe\">");
		print("<label for=\"ERREUR\" id=\"ERREUR\" class=\"IMPORTANT\"></label>");
		print('<table border=1>');
		foreach ($a_prenoms as $st_prenom)
		{
			print("<tr><td>$st_prenom</td><td><input type=checkbox name=\"variantes[]\" class=\"groupe_prenoms\" value=\"$st_prenom\"></td></tr>\n");
		}
		print('</table>');
		print('<input type="submit" value="Completer"></div>');
		print('</form>');
	}
	print('<form id="variantes_prenom" method="post" action="'.$_SERVER['PHP_SELF'].'">');	
	print("<input type=\"hidden\" name=\"idf_groupe\" id=\"idf_groupe\" value=\"$pi_idf_groupe\">");
	print('<input type="hidden" name="mode" id="mode" value="AFFICHER">');
	print('<input type="submit" value="Retourner au menu"></div>');
	print('</form>');
}	

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<title>Base AGC: Gestion des variantes Prenom</title>');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
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
  
  function maj_variantes(term,variantes,idf_groupe,cmt_retour) {
     $.ajax({
        url:"../ajax/variantes_prenom.php",
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
            if (nb_reponses==1)
            {  
                var liste_variantes = '';
                 $.each(reponse['variantes'], function( index, valeur ) {
                      liste_variantes = liste_variantes + valeur+ "\n";
                  });
                $(variantes).html('');
                $(variantes).append(liste_variantes);
                $(idf_groupe).val(reponse['idf_groupe']);            
            }
        }
    });
  }
   $('#variante').autocomplete({
		minLength: 3,
    source: function( request, response ) {
        $.ajax( {
          url: "../ajax/variantes_prenom.php",
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
            }
          }
        })        
      },
      select: function (event, ui) {
            $('#variante').val(ui.item.value);
            maj_variantes($('#variante').val(),'#variantes','#idf_groupe','#cmt_retour');
            return false;
 
        }       
    }); 

  $("#variante").keyup( function() {
     maj_variantes($('#variante').val(),'#variantes','#idf_groupe','#cmt_retour');   
  });
  
   $('#variante_a_fusionner').autocomplete({
        minLength: 3,
         source: function( request, response ) {
        $.ajax( {
          url: "../ajax/variantes_prenom.php",
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
            }
          }
        })        
      },
      select: function (event, ui) {
            $('#variante').val(ui.item.value);
            maj_variantes($('#variante_a_fusionner').val(),'#variantes_a_fusionner','#idf_groupe_a_fusionner','#cmt_retour_a_fusionner');
            return false;
 
        }
    }); 
    
   $("#variante_a_fusionner").keyup( function() {
     maj_variantes($('#variante_a_fusionner').val(),'#variantes_a_fusionner','#idf_groupe_a_fusionner','#cmt_retour_a_fusionner');     
  });
  
  $( "#modifier" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
     $("#erreur_groupe").html('');
     $("#erreur_groupe").append('Aucun groupe s&eacute;lectionn&eacute;');
    }
    else if ($("#variantes").val()=='')
    {
     $("#erreur_variantes").html('');
     $("#erreur_variantes").append('Pas de variantes d&eacute;finies');
    } 
    else
    {
      $("#mode").val('MODIFIER');
      $("#variantes_prenom").submit();
    }
  });
  
  $( "#completer" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
     $("#erreur_groupe").html('');
     $("#erreur_groupe").append('Aucun groupe s&eacute;lectionn&eacute;');
    }
    else
    {
      $("#mode").val('MENU_COMPLETER');
      $("#variantes_prenom").submit();
    }
  });
  
  $( "#creer" ).click(function() {
      if ($("#variantes").val()=='')
      {
        $("#erreur_variantes").html('');                                        
        $("#erreur_variantes").append('Pas de variantes d&eacute;finies');
      } 
      else
      {
        $("#mode").val('CREER');
        $("#variantes_prenom").submit();
      }  
  });
  
  $( "#supprimer" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
     $("#erreur_groupe").html('');
     $("#erreur_groupe").append('Aucun groupe s&eacute;lectionn&eacute;');
    } 
    else
    {
      if (confirm('Voulez-vous supprimer ce groupe ?'))
      {
        $("#mode").val('SUPPRIMER');
        $("#variantes_prenom").submit();
      }
    }
  });
  
  $( "#fusionner" ).click(function() {
    if ($("#idf_groupe").val()=='')
    {
     $("#erreur_groupe").html('');
     $("#erreur_groupe").append('Aucun groupe s&eacute;lectionn&eacute;');
    }
    else if ($("#idf_groupe_a_fusionner").val()=='')
    {
     $("#erreur_groupe_a_fusionner").html('');
     $("#erreur_groupe_a_fusionner").append('Aucun groupe s&eacute;lectionn&eacute;');
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
      	require_from_group: [1, ".groupe_prenoms"]
    	}
	  },
	  messages: {
			'variantes[]': {
				require_from_group: 'Choisir au moins un prénom'
			}
		}		
 }); 
  
});
</script>
<?php
print("</head>");
print("<body>");

require_once("../Commun/menu.php");


switch ($gst_mode) {
 case 'AFFICHER' :
  affiche_menu($connexionBD,'',$gi_idf_groupe);
 break;
 case 'CREER':
   $st_variantes = isset($_POST['variantes']) ? trim($_POST['variantes']) : '';
   $a_variantes = explode("\n",$st_variantes);
   $i_idf_groupe = $connexionBD->sql_select1("select max(idf_groupe) from variantes_prenom");
   $i_idf_groupe++;  
   ajoute_variantes($connexionBD,$i_idf_groupe,$a_variantes);
   affiche_menu($connexionBD,"Variante cr&eacute;e",$i_idf_groupe);
 break;
 case 'MODIFIER':
   $st_variantes = isset($_POST['variantes']) ? trim($_POST['variantes']) : '';
   $a_variantes = explode("\n",$st_variantes);
   $i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
   if (!empty($i_idf_groupe))
   {
      $connexionBD->execute_requete("delete from variantes_prenom where idf_groupe=$i_idf_groupe");
      ajoute_variantes($connexionBD,$i_idf_groupe,$a_variantes);
      affiche_menu($connexionBD,"Variante modifi&eacute;e",$i_idf_groupe);
   }
 break;
 case 'MENU_COMPLETER':
	$i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
	if (!empty($i_idf_groupe))
		affiche_menu_completer($connexionBD,$i_idf_groupe);
 break;
 case 'COMPLETER':
	$i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
	$a_variantes = isset($_POST['variantes']) ? $_POST['variantes'] : '';
  //print("idf grp=$i_idf_groupe<br>\n");
  //print_r($a_variantes); 
	if (!empty($i_idf_groupe) && count($a_variantes)>0)
	{	
		ajoute_variantes($connexionBD,$i_idf_groupe,$a_variantes);
		affiche_menu($connexionBD,"Variante compl&eacute;t&eacute;e",$i_idf_groupe);
	}
 break;
 case 'SUPPRIMER':
   $i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
   if (!empty($i_idf_groupe))
   {
      $connexionBD->execute_requete("delete from variantes_prenom where idf_groupe=$i_idf_groupe");
      affiche_menu($connexionBD,"Variante supprim&eacute;e",$i_idf_groupe);
   }
 break;
 case 'FUSIONNER':
   $i_idf_groupe = isset($_POST['idf_groupe']) ? (int) $_POST['idf_groupe'] : '';
   $i_idf_groupe_a_fusionner = isset($_POST['idf_groupe_a_fusionner']) ? (int) $_POST['idf_groupe_a_fusionner'] : '';
   $connexionBD->execute_requete("update variantes_prenom set idf_groupe=$i_idf_groupe where idf_groupe=$i_idf_groupe_a_fusionner");
   affiche_menu($connexionBD,"Variante fusionn&eacute;e",$i_idf_groupe); 
 break;
 default:
} 

print("</body>");
print("</html>");

?>