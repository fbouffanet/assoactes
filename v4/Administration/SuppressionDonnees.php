<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CHARGEMENT);

require_once '../Commun/ConnexionBD.php';
require_once '../Commun/commun.php';


/** Renvoie le nombre d'actes comportant des permaliens non remplis
 * param integer $pi_idf_commune_acte identifiant de la commune 
 * param integer $pc_idf_type_acte identifiant du type d'acte
 **/
function nombre_permaliens($pi_idf_commune_acte,$pc_idf_type_acte)
{
   global $connexionBD,$gst_types_acte;
   if ($pc_idf_type_acte=='DIV')
     $st_requete = "select count(idf) from acte where idf_commune=$pi_idf_commune_acte and idf_type_acte not in $gst_types_acte and url !=''"; 
      
   else
     $st_requete = "select count(idf) from acte where idf_commune=$pi_idf_commune_acte and idf_type_acte=$pc_idf_type_acte and url !=''";
   return $connexionBD->sql_select1($st_requete); 
}

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='../css/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='../js/select2.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
?>
$(document).ready(function() {
  $(".js-select-avec-recherche").select2();
  
  $.validator.addMethod('plusGrand', function(value, element, param) {
    if (this.optional(element)) return true;
    var annee_max=$(param).val();
    if(jQuery.trim(annee_max).length== 0) return true;
    var i = parseInt(value);
    var j = parseInt(annee_max);
    return i >= j;
}, "l'ann�e maximale doit �tre plus grande que l'ann�e minimale");
  
  $("#formulaire_suppression").validate({
	 rules: {
     idf_source: "required",
     idf_commune_acte: "required",
     idf_type_acte: "required",
     annee_min: "integer",
     annee_max: { 
      integer: true,
      plusGrand: '#annee_min'	
     }
    },  
	 messages: {
	  idf_source: {
			required: "Une source doit �tre choisie"
		},
    idf_commune_acte: {
			required: "Une commune doit �tre choisie"
		},
    idf_type_acte: {
			required: "Un type d'acte doit �tre choisi"
		},
    annee_min: {
      integer: "l'ann�e minimale doit �tre un entier"
    },
    annee_max: {
      integer: "l'ann�e maximale doit �tre un entier"
    }
	},
  submitHandler: function(form) {
    var source=$('#idf_source option:selected').text();
    var type_acte=$('#idf_type_acte option:selected').text();
    var commune=$('#idf_commune_acte option:selected').text();
    var annee_min=$('#annee_min').val();
    var annee_max=$('#annee_max').val();
    var intervalle= '';
    if (annee_min!='' && annee_max!='')
    {
       intervalle = 'de '+annee_min+' � '+annee_max;
    }
    else if (annee_min!='')
    {
       intervalle =  '� partir de '+annee_min;
    }
    else if (annee_max!='')
    {
      intervalle =  "jusqu'en "+annee_max;
    }
    var question = 'Etes-vous s�r de supprimer les actes ('+type_acte+')'+' de la commune '+commune+'  de la source '+source;
    if (intervalle!='')
    {
       question= question + ' ('+intervalle+')'; 
    }
    question=question+ ' ?';
    if (confirm(question))
    {
			 form.submit();
    }
    }       
  });
  

});
<?php
print("</script>");
print("<title>Suppression des donnees</title>");
print("</head>");
print("<body>");
print('<div class="container">');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;
$gi_idf_source = empty($_POST['idf_source']) ? 1: $_POST['idf_source'];
$i_session_idf_commune_acte = isset($_SESSION['idf_commune_acte']) ? $_SESSION['idf_commune_acte'] : 0;
$gi_idf_commune_acte = empty($_POST['idf_commune_acte']) ? $i_session_idf_commune_acte : $_POST['idf_commune_acte'];
$gc_idf_type_acte = empty($_POST['idf_type_acte']) ? 0: $_POST['idf_type_acte'];

$gst_types_acte = '('.IDF_MARIAGE.','.IDF_NAISSANCE.','.IDF_DECES.')';

$gi_annee_min = empty($_POST['annee_min']) ? '' : (int) $_POST['annee_min'];
$gi_annee_max = empty($_POST['annee_max']) ? '' : (int) $_POST['annee_max'];


switch($gst_mode)
{
   case 'FORMULAIRE' :
     $a_sources = $connexionBD->liste_valeur_par_clef("select idf,nom from source order by nom");
     $a_communes_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from commune_acte order by nom");
     $a_types_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from type_acte order by nom");
     unset($a_types_acte[IDF_UNION]);
     $a_types_acte['DIV']="Tous divers Nimegue";
	 print('<div class="panel panel-primary">');
     print('<div class="panel-heading">Suppression des donn&eacute;es d\'une commune/paroisse</div>');
     print('<div class="panel-body">');
     print("<form enctype=\"multipart/form-data\" id=\"formulaire_suppression\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
     print('<input type="hidden" name="mode" value="SUPPRESSION">');
     print('<div class="form-row col-md-12">');
     print('<div class="input-group col-md-offset-4 col-md-4">');
	 print('<label for="idf_source">Source:</label><select name=idf_source id=idf_source class="js-select-avec-recherche form-control">');
     print(chaine_select_options($gi_idf_source,$a_sources));
     print('</select></div></div>');
	 print('<div class="form-row col-md-12">');
     print('<div class="input-group col-md-offset-4 col-md-4">');
     print('<label for="idf_commune_acte">Commune: <select name=idf_commune_acte id=idf_commune_acte class="js-select-avec-recherche form-control">');
     print(chaine_select_options($gi_idf_commune_acte,$a_communes_acte));
     print('</select></div></div>');
	 print('<div class="form-row col-md-12">');
     print('<div class="input-group col-md-offset-4 col-md-4">');
     print('<label for="idf_type_acte">Type d\'acte:</label><select name=idf_type_acte id=idf_type_acte class="js-select-avec-recherche form-control">');
     print(chaine_select_options($gc_idf_type_acte,$a_types_acte));
     print('</select></div></div>');
	 print('<div class="form-row col-md-12">');
     print('<div class="input-group col-md-offset-4 col-md-4">');
     print('<label for="annee_min">Annee minimale:</label><input type=text name=annee_min id=annee_min size=4 maxlength=4 class="form-control"></div></div>');
     print('<div class="form-row col-md-12">');
     print('<div class="input-group col-md-offset-4 col-md-4">');
	 print('<label for="annee_max">Annee maximale:</label><input type=text name=annee_max id=annee_max size=4 maxlength=4 class="form-control"></div></div>');
    print('<div class="form-row">');   
     print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Supprimer les actes</button>');
     print('</div>');   
     print('</form></div></div>');
   break;
   case 'SUPPRESSION' : 
                        $_SESSION['idf_commune_acte'] = $gi_idf_commune_acte;                                                            $i_nb_permaliens = nombre_permaliens($gi_idf_commune_acte,$gc_idf_type_acte);
                        if ($i_nb_permaliens!=0)
                        {
                            print("<div class=\"alert alert-danger\">");
                            print("Confirmation des suppressions:<br>");
                            print("$i_nb_permaliens permalien(s) r&eacute;f&eacute;renc&eacute;(s)</div>");
                            print("<form id=\"suppression\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");           
                            print('<input type="hidden" name="mode" value="SUPPRESSION_CONFIRMEE" >');
                            print("<input type=\"hidden\" name=\"idf_source\" value=$gi_idf_source >");
                            print("<input type=\"hidden\" name=\"idf_commune_acte\" value=$gi_idf_commune_acte >");
                            print("<input type=\"hidden\" name=\"idf_type_acte\" value=$gc_idf_type_acte >");
                            print("<input type=\"hidden\" name=\"annee_min\" value=$gi_annee_min >");
                            print("<input type=\"hidden\" name=\"annee_max\" value=$gi_annee_max >");
							print('<div class="form-row">');   
                            print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Confirmer la suppression</button>');
                            print('</div>');
                            print('</form>');
                            print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
                            print('<input type="hidden" name="mode" value="FORMULAIRE" />');
							print('<div class="form-row">');   
                            print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Annuler</button>');
                            print('</div>');
                            break;
                        }            
                        
      case 'SUPPRESSION_CONFIRMEE' :
                        print("<form id=\"suppression_confirmee\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
                        print('<input type="hidden" name="mode" value="FORMULAIRE" />');
                        print("<div class=\"align-center\">");
                        print("Suppression des statistiques<br>");
                        $i_temps_courant = time();
                        if ($gc_idf_type_acte != 'DIV')
                        {
                           $connexionBD->execute_requete("delete from stats_commune where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte=$gc_idf_type_acte");
                           $connexionBD->execute_requete("delete from stats_patronyme where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte=$gc_idf_type_acte");
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           $i_temps_courant = time();

                           print("Suppression des personnes<br>");
                                                     
                           $st_requete="delete personne from personne,acte  where personne.idf_acte=acte.idf and idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte=$gc_idf_type_acte" ;
                           if ($gi_annee_min!='')
                              $st_requete.=" and annee>=$gi_annee_min";
                           if ($gi_annee_max!='')
                              $st_requete.=" and annee<=$gi_annee_max";   
                           $connexionBD->execute_requete($st_requete);
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           $i_temps_courant = time();

                           print("Suppression des unions<br>");
                           $st_requete = "delete u from `union` u,  acte a  where u.idf_acte=a.idf and u.idf_source=$gi_idf_source and u.idf_commune=$gi_idf_commune_acte and u.idf_type_acte=$gc_idf_type_acte";
                           if ($gi_annee_min!='')
                              $st_requete.=" and a.annee>=$gi_annee_min";
                           if ($gi_annee_max!='')
                              $st_requete.=" and a.annee<=$gi_annee_max";
                           $connexionBD->execute_requete($st_requete);
                           
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           $i_temps_courant = time();
                           print("Suppression des actes<br>");
                           $st_requete="delete from acte where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte=$gc_idf_type_acte";
                           if ($gi_annee_min!='')
                              $st_requete.=" and annee>=$gi_annee_min";
                           if ($gi_annee_max!='')
                              $st_requete.=" and annee<=$gi_annee_max";
                            
                           $connexionBD->execute_requete($st_requete);
                     
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           print("Nombre d'actes d&eacute;truits: ".$connexionBD->nb_lignes_affectees()."<br><br>");
                           $i_temps_courant = time();
                           if ($gi_annee_min!='' || $gi_annee_max!='')
                           {
                              print("Recalcul des statistiques<br>");
                              $st_requete = "insert into `stats_patronyme` (patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) select p.patronyme,$gi_idf_commune_acte,$gc_idf_type_acte,$gi_idf_source,min(a.annee),max(a.annee),count(p.patronyme) from personne p join acte a on (p.idf_acte=a.idf) where a.idf_commune=$gi_idf_commune_acte and a.idf_type_acte=$gc_idf_type_acte and a.idf_source=$gi_idf_source and a.annee!=0 and a.annee!=9999 group by p.patronyme,a.idf_commune,a.idf_type_acte,a.idf_source ";
                              $connexionBD->execute_requete($st_requete);
                              $st_requete = "insert into `stats_commune` (idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_actes) select $gi_idf_commune_acte,$gc_idf_type_acte,$gi_idf_source,min(a.annee),max(a.annee),count(a.idf) from acte a where a.idf_commune=$gi_idf_commune_acte and a.idf_type_acte=$gc_idf_type_acte and a.idf_source=$gi_idf_source and a.annee!=0 and a.annee!=9999 group by a.idf_commune";
                              $connexionBD->execute_requete($st_requete);
                              print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           }
                        }
                        else
                        {
                           $connexionBD->execute_requete("delete from stats_commune where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte not in $gst_types_acte");
                           $connexionBD->execute_requete("delete from stats_patronyme where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte not in $gst_types_acte");
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           $i_temps_courant = time();

                           print("Suppression des personnes<br>");
                           $st_requete = "delete personne from personne, acte where personne.idf_acte=acte.idf and idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte not in $gst_types_acte";
                           if ($gi_annee_min!='')
                              $st_requete.=" and annee>=$gi_annee_min";
                           if ($gi_annee_max!='')
                              $st_requete.=" and annee<=$gi_annee_max";
                           $connexionBD->execute_requete($st_requete);
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           $i_temps_courant = time();

                           print("Suppression des unions<br>");
                           $st_requete = "delete u from `union` u, acte a where u.idf_acte=a.idf and u.idf_source=$gi_idf_source and u.idf_commune=$gi_idf_commune_acte and u.idf_type_acte not in $gst_types_acte";           
                           if ($gi_annee_min!='')
                              $st_requete.=" and a.annee>=$gi_annee_min";
                           if ($gi_annee_max!='')
                              $st_requete.=" and a.annee<=$gi_annee_max"; 
                           $connexionBD->execute_requete($st_requete);
                           
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           $i_temps_courant = time();
                           print("Suppression des actes<br>");
                           $st_requete ="delete from acte where idf_source=$gi_idf_source and idf_commune=$gi_idf_commune_acte and idf_type_acte not in $gst_types_acte";
                           if ($gi_annee_min!='')
                              $st_requete.=" and annee>=$gi_annee_min";
                           if ($gi_annee_max!='')
                              $st_requete.=" and annee<=$gi_annee_max";  
                           $connexionBD->execute_requete($st_requete);
                     
                           print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           print("Nombre d'actes d&eacute;truits: ".$connexionBD->nb_lignes_affectees()."<br><br>");
                           $i_temps_courant = time();
                           if ($gi_annee_min!='' || $gi_annee_max!='')
                           {
                              print("Recalcul des statistiques<br>");
                              $st_requete = "insert into `stats_patronyme` (patronyme,idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_personnes) select p.patronyme,$gi_idf_commune_acte,a.idf_type_acte,$gi_idf_source,min(a.annee),max(a.annee),count(p.patronyme) from personne p join acte a on (p.idf_acte=a.idf) where a.idf_commune=$gi_idf_commune_acte and a.idf_type_acte not in $gst_types_acte and a.idf_source=$gi_idf_source and a.annee!=0 and a.annee!=9999 group by p.patronyme,a.idf_commune,a.idf_type_acte,a.idf_source ";
                              $connexionBD->execute_requete($st_requete);
                              $st_requete = "insert into `stats_commune` (idf_commune,idf_type_acte,idf_source,annee_min,annee_max,nb_actes) select $gi_idf_commune_acte,a.idf_type_acte,$gi_idf_source,min(a.annee),max(a.annee),count(a.idf) from acte a where a.idf_commune=$gi_idf_commune_acte and a.idf_type_acte not in $gst_types_acte and a.idf_source=$gi_idf_source and a.annee!=0 and a.annee!=9999 group by a.idf_commune";
                              $connexionBD->execute_requete($st_requete);
                              print("Dur&eacute;e: ".(time()-$i_temps_courant)." s<br>");
                           }
                        }
						print('<div class="form-row">');   
                        print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Menu Suppression</button>');
                        print('</div>');
                        print("</form>");                  
   
   break;
   default : print("mode $gst_mode inconnu");   
}

print("</div></body></html>");
?>
