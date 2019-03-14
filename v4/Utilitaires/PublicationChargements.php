<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_UTILITAIRES);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Publication d'un chargement</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
function VerifiePublication(Formulaire,IdfElement)
{
  var chaine="";
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)
      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }
      
  }
  if (chaine=="")
  {
     alert("Pas de chargement s�lectionn�");
     return false;
  }
  else
  {
     document.forms[Formulaire].submit();                                                           
  }
}
</script>
<?php
print('</head>');
print('<body>');
print('<div class="container">');
$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;


/**
 * Affiche la liste des communes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour,$ga_types_nimegue;
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Publication des chargements</div>');
   print('<div class="panel-body">');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   $st_requete = "select c.idf,date_format(c.date_chgt,'%d/%m/%Y %H:%i'),ca.nom,c.type_acte_nim,c.nb_actes,c.publication from `chargement` c join `commune_acte` ca on (c.idf_commune=ca.idf) order by c.date_chgt desc";
   $a_liste_chgt = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
   $a_liste_ids = array();
   if (count($a_liste_chgt)!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_chgt),NB_LIGNES_PAR_PAGE,1,array('Date','Commune','Type','Nbre actes','Publier'));
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $a_tableau_affichage=array();
      foreach ($a_liste_chgt as $i_idf_chgt => $a_chgt)
      {
         list($st_date,$st_commune,$i_type_nim,$i_nb_actes,$c_publication) = $a_chgt;
         
         $st_publication = $c_publication=='N' ? "<input type=checkbox name=\"publi[]\" id=\"$st_date $st_commune $ga_types_nimegue[$i_type_nim]\" value=$i_idf_chgt class=\"form-check-label col-form-label control-label\">" : "<input type=checkbox name=\"publi[]\" id=\"$st_date $st_commune $ga_types_nimegue[$i_type_nim]\" value=$i_idf_chgt checked class=\"form-check-label col-form-label control-label\">\n";
         $a_tableau_affichage[]=array($st_date,$st_commune,$ga_types_nimegue[$i_type_nim],$i_nb_actes,$st_publication);
         $a_liste_ids[]=$i_idf_chgt;
      }
      $pagination->affiche_tableau_simple($a_tableau_affichage);
   }
   else
     print("<div class=\"alert alert-danger\">Pas de chargements</div>\n");
   print("<input type=hidden name=mode value=\"PUBLIER\">");
   $a_liste_ids=array_slice($a_liste_ids,($gi_num_page_cour-1)*NB_LIGNES_PAR_PAGE,NB_LIGNES_PAR_PAGE);
   print("<input type=hidden name=chargements value=\"".implode(',',$a_liste_ids)."\">");
   print('<div class="form-group col-md-4 col-md-offset-4"><button type="submit" class="btn btn-primary">Publier/Cacher les chargements s�lectionn&eacute;s</button></div>'); 
   print("</form>");
   print("</div></div>");  
}


$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

require_once("../Commun/menu.php");

switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD); 
  break;
   case 'PUBLIER':
     $a_liste_publications = $_POST['publi'];
     $a_liste_chargements = $_POST['chargements'];
     $st_requete = "update chargement set publication='N' where idf in ($a_liste_chargements)";
     $connexionBD->execute_requete($st_requete);
     if (count($a_liste_publications)!=0)
     {
        $st_liste_publications=implode(',',$a_liste_publications);
        $st_requete = "update chargement set publication='O' where idf in ($st_liste_publications)";
        $connexionBD->execute_requete($st_requete);
     }
     menu_liste($connexionBD);
   break;  
      
}  


print('</div></body></html>');



?>