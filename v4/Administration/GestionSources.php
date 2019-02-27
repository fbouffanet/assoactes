<?php

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
print("<title>Gestion des sources</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print("<link href='../Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>"); 
?>
<script type='text/javascript'>

$(document).ready(function() {
  $("#edition_source").validate({
  rules: {
		nom_source: "required"
    },
    messages: {
		nom_source: {
			required: "Le nom de la source est obligatoire"
		}
    }
  });
    
  $("#suppression_sources").validate({
  rules: {
    "supp[]": { 
                    required: true, 
                    minlength: 1 
            } 
  },
  messages: {
     "supp[]": "Merci de choisir au moins une source à supprimer"
  },
  submitHandler: function(form) {
    var sources='';
    $("input:checkbox").each(function(){
      var $this = $(this);
      if($this.is(":checked")){
        sources=sources+' '+$this.attr("id");
      }   
    });
    if (confirm('Etes-vous sûr de supprimer les sources '+sources+' ?')) {
            form.submit();
        }
    }
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
   $gi_idf_source = (int) $_GET['mod'];
}
else
  $gi_idf_source = isset($_POST['idf_source']) ? (int) $_POST['idf_source']:null;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];


/**
 * Affiche la liste des communes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour;
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Gestion des sources</div>');
   print('<div class="panel-body">');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"suppression_sources\" >");
   $st_requete = "select idf,nom from source order by nom";
   $a_liste_sources = $pconnexionBD->liste_valeur_par_clef($st_requete);
   $i_nb_sources = count($a_liste_sources);
   if ($i_nb_sources!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_sources,NB_LIGNES_PAR_PAGE,1,array('Source','Modifier','Supprimer'));
      $pagination->init_param_bd($pconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $pagination->affiche_tableau_edition();
   }
   else
     print('<div class="alert alert-danger">Pas de sources</div>');
   print("<input type=hidden name=mode value=\"SUPPRIMER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Supprimer les sources s&eacute;lectionn&eacute;es</button>'); 
   print("</form>");  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=\"MENU_AJOUTER\">");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Ajouter une source</button>');   
   print('</form></div></div>');  

}

/**
 * Affiche de la table d'édition
 * @param string $pst_nom_source Nom de la source
 * @param integer $pi_publication_gbk La source doit-elle Ûtre publiÚes sous GÚnÚabank (0|1) 
 * @param string $pst_script_demande Script qui fait la demande de l'acte
 * @param boolean $pi_utilise_details Doit-on utiliser le champ "details_supplementaires" 
 * @param string $pst_icone_info icone à afficher si l'acte a des informations 
 * @param string $pst_icone_ninfo icone à afficher si l'acte n'a pas d'information supplémentaires
 * @param string $pst_icone_index icone à afficher si l'acte correspond à une indexation 
 */ 
function menu_edition($pst_nom_source,$pi_publication_gbk,$pst_script_demande,$pi_utilise_details,$pst_icone_info,$pst_icone_ninfo,$pst_icone_index)
{
   global $ga_scripts_demande,$ga_booleen_oui_non,$ga_icones_source;
   print("<table class=\"table table-bordered table-striped\">");
   print("<tr><th>Nom</th><td><input type=\"text\" maxlength=50 size=30 name=nom_source value=\"$pst_nom_source\"></td></tr>");
   $st_checked = $pi_publication_gbk==1? 'checked': '';
   print("<tr><th>Publication G&eacute;n&eacute;abank</th><td><input type=\"checkbox\" name=publication_geneabank value=1 $st_checked></td></tr>");
   print("<tr><th>Script de demande</th><td><select name=script_demande>".chaine_select_options_simple($pst_script_demande,$ga_scripts_demande)."</select></td></tr>");
   $st_checked = $pi_utilise_details==1? 'checked': '';
   print("<tr><th>Utilisation des details supplementaires</th><td><input type=\"checkbox\" name=utilise_details value=1 $st_checked></td></tr>");
   print("<tr><th>Ic&ocirc;ne si information</th><td><select name=icone_info>".chaine_select_options_simple($pst_icone_info,$ga_icones_source)."</select></td></tr>");
   print("<tr><th>Ic&ocirc;ne si pas d'information</th><td><select name=icone_ninfo>".chaine_select_options_simple($pst_icone_ninfo,$ga_icones_source)."</select></td></tr>");
    print("<tr><th>Ic&ocirc;ne si indexation</th><td><select name=icone_index>".chaine_select_options_simple($pst_icone_index,$ga_icones_source)."</select></td></tr>");
   print("</table>");
}

/** Affiche le menu de modification d'une source
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_source Identifiant de la source Ó modifier 
 * @param array $pa_cantons liste des cantons 
 */ 
function menu_modifier($pconnexionBD,$pi_idf_source)
{
   list($st_nom_source,$i_publication_gbk,$st_script_demande,$i_utilise_details,$st_icone_info,$st_icone_ninfo,$st_icone_index)=$pconnexionBD->sql_select_liste("select nom,publication_geneabank,script_demande,utilise_ds,icone_info,icone_ninfo,icone_index from source where idf=$pi_idf_source");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_source\">");
   print("<input type=hidden name=mode value=MODIFIER>");
   print("<input type=hidden name=idf_source value=$pi_idf_source>");
   menu_edition($st_nom_source,$i_publication_gbk,$st_script_demande,$i_utilise_details,$st_icone_info,$st_icone_ninfo,$st_icone_index);
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Modifier</button>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<div align=center><input type=hidden name=mode value=LISTE>");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
   print('</form>');
}

/** Affiche le menu d'ajout d'une source 
 */ 
function menu_ajouter()
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_source\">");
   print("<input type=hidden name=mode value=\"AJOUTER\">");
   menu_edition('',0,'',0,'','','');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Ajouter</button>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Annuler</button>');
   print('</form>');
}


$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD); 
  break;
  case 'MENU_MODIFIER' :
  menu_modifier($connexionBD,$gi_idf_source);
  break;
  case 'MODIFIER' :
     $st_nom_source = trim($_POST['nom_source']);
     $i_publication_geneabank = isset($_POST['publication_geneabank']) ? $_POST['publication_geneabank']: 0;
     $st_script_demande = trim($_POST['script_demande']);
     $i_utilise_details = isset($_POST['utilise_details']) ? $_POST['utilise_details']: 0;
     $st_icone_info = trim($_POST['icone_info']);
     $st_icone_ninfo = trim($_POST['icone_ninfo']);
     $st_icone_index = trim($_POST['icone_index']);
     $connexionBD->execute_requete("update source set nom='$st_nom_source', publication_geneabank=$i_publication_geneabank,script_demande='$st_script_demande',utilise_ds=$i_utilise_details,icone_info='$st_icone_info',icone_ninfo='$st_icone_ninfo',icone_index='$st_icone_index' where idf=$gi_idf_source");
     menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' : 
  menu_ajouter();
  break;
  case 'AJOUTER':
     $st_nom_source = trim($_POST['nom_source']);
     $i_publication_geneabank = isset($_POST['publication_geneabank']) ? $_POST['publication_geneabank']: 0;
     $st_script_demande = trim($_POST['script_demande']);
     $i_utilise_details = isset($_POST['utilise_details']) ? $_POST['utilise_details']: 0;
     $st_icone_info = trim($_POST['icone_info']);
     $st_icone_ninfo = trim($_POST['icone_ninfo']);
     $st_icone_index = trim($_POST['icone_index']);
     $connexionBD->execute_requete("insert into source(nom,publication_geneabank,script_demande,utilise_ds,icone_info,icone_ninfo,icone_index) values('$st_nom_source',$i_publication_geneabank,'$st_script_demande',$i_utilise_details,'$st_icone_info','$st_icone_ninfo','$st_icone_index')");
     menu_liste($connexionBD);
   break;
   case 'SUPPRIMER':
     $a_liste_sources = $_POST['supp'];
     foreach ($a_liste_sources as $i_idf_source)
     {
        $a_actes = $connexionBD->sql_select_multiple("select ca.nom,type_acte.nom from stats_commune join type_acte on (type_acte.idf=stats_commune.idf_type_acte) join commune_acte ca on (idf_commune=ca.idf) where idf_source=$i_idf_source order by ca.nom,type_acte.nom");
        if (count($a_actes)==0)
        {
          $connexionBD->execute_requete("delete from source where idf=$i_idf_source");
        }
        else
        {
          print('<div class="alert alert-danger">Les actes suivants doivent &ecirc;tre supprim&egrave;s auparavant:</div>');
          $st_nom_source = $connexionBD->sql_select1("select nom from source where idf=$i_idf_source");
          print("<div class=\"align-center\">Source: $st_nom_source</div>");
          print("<table class=\"table table-bordered table-striped\">");
          print("<tr><th>Commune</th><th>Type d'acte</th></tr>\n");
          foreach ($a_actes as $a_acte)
          {
             list($st_commune,$st_type) = $a_acte;
             print("<tr><td>$st_commune</td><td>$st_type</td></tr>\n");
          }
          print("</table>");          
        } 
     }
     menu_liste($connexionBD);
   break;  
      
}  
print('</div></body></html>');
?>