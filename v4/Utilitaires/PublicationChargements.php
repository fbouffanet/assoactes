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

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Publication d'un chargement</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
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
     alert("Pas de chargement s‚lectionn‚");
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

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;


/**
 * Affiche la liste des communes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour,$ga_types_nimegue;
   print("<div class=TITRE>Publication des chargements</div>");
   //print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifiePublication(0,'publi[]')\">");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<div>");
   $st_requete = "select c.idf,date_format(c.date_chgt,'%d/%m/%Y %H:%i'),ca.nom,c.type_acte_nim,c.nb_actes,c.publication from `chargement` c join `commune_acte` ca on (c.idf_commune=ca.idf) order by c.date_chgt desc";
   //print("Req=$st_requete<br>");
   $a_liste_chgt = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
   $a_liste_ids = array();
   if (count($a_liste_chgt)!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_chgt),NB_LIGNES_PAR_PAGE,1,array('Date','Commune','Type','Nbre actes','Publier'));
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      $a_tableau_affichage=array();
      foreach ($a_liste_chgt as $i_idf_chgt => $a_chgt)
      {
         list($st_date,$st_commune,$i_type_nim,$i_nb_actes,$c_publication) = $a_chgt;
         
         $st_publication = $c_publication=='N' ? "<input type=checkbox name=\"publi[]\" id=\"$st_date $st_commune $ga_types_nimegue[$i_type_nim]\" value=$i_idf_chgt>" : "<input type=checkbox name=\"publi[]\" id=\"$st_date $st_commune $ga_types_nimegue[$i_type_nim]\" value=$i_idf_chgt checked>\n";
         $a_tableau_affichage[]=array($st_date,$st_commune,$ga_types_nimegue[$i_type_nim],$i_nb_actes,$st_publication);
         $a_liste_ids[]=$i_idf_chgt;
      }
      $pagination->affiche_tableau_simple($a_tableau_affichage);
   }
   else
     print("<div align=center>Pas de chargements</div>\n");
   print("<input type=hidden name=mode value=\"PUBLIER\">");
   $a_liste_ids=array_slice($a_liste_ids,($gi_num_page_cour-1)*NB_LIGNES_PAR_PAGE,NB_LIGNES_PAR_PAGE);
   print("<input type=hidden name=chargements value=\"".implode(',',$a_liste_ids)."\">");
   print("<br><div align=center><input type=submit value=\"Publier/Cacher les chargements sélectionnés\"></div>");   
   //ONCLICK=VerifiePublication(0,\"publi[]\"
   print("</div></form>");   
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


print('</body></html>');



?>