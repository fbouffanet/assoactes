<?php

require_once('../Commun/Identification.php');
require_once '../Commun/commun.php';
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/VerificationDroits.php');
require_once('../Commun/phonex.cls.php');

verifie_privilege(DROIT_CHARGEMENT);
	
require_once('../Commun/finediff.php');
require_once '../Administration/chargement/chargement.php';
require_once '../Administration/chargement/CompteurActe.php';
require_once '../Administration/chargement/Acte.php';	
require_once '../Administration/chargement/CompteurPersonne.php';
require_once '../Administration/chargement/Personne.php';
require_once '../Administration/chargement/CommunePersonne.php';
require_once '../Administration/chargement/Prenom.php';
require_once '../Administration/chargement/Profession.php';
require_once '../Administration/chargement/TypeActe.php';
require_once '../Administration/chargement/Union.php';
require_once '../Administration/chargement/StatsPatronyme.php';
require_once '../Administration/chargement/StatsCommune.php';
		
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

/*
* Construit la chaine permettant la validation des paramètres d'un formulaire
* @return string régles de validation
*/
function regles_validation()
{
  global $go_acte;
	$a_filtres = $go_acte->getFiltresParametres();
  $ga_liste_personnes = $go_acte->getListePersonnes();
	$a_messages ='';
	$st_chaine='';
	foreach ($ga_liste_personnes as $o_pers)
	{
    foreach ($o_pers->getFiltresParametres() as $st_param => $a_filtres_personne)
    {
      $a_filtres[$st_param]=$a_filtres_personne;
    }  
	}
	foreach ($a_filtres as $st_param => $a_liste_tests)
	{
		$st_test =	"\t$st_param: { ";
		$st_message= "\t$st_param: { ";
		$a_tests=array();
		$a_msgs=array();
		foreach($a_liste_tests as $a_test)
		{
			list($st_type_test,$st_valeur_test,$st_message_erreur) = $a_test;
			$a_tests[] = "\t\t$st_type_test: $st_valeur_test";
			$a_msgs[] = "\t\t$st_type_test: \"$st_message_erreur\"";
		}
		$st_test .= implode(",\n",$a_tests);
		$st_test .= "\n\t}";
		$st_message .= implode(",\n",$a_msgs);
		$st_message .= "\n\t}";
		$a_regles[]=$st_test;
		$a_messages[]=$st_message;
	}
	$st_chaine=	"rules: {\n".implode(",\n",$a_regles)."},\n";
	$st_chaine.= "messages: {\n".implode(",\n",$a_messages)."}\n";
	return  $st_chaine;
}

$gst_mode = isset($_REQUEST['MODE']) ? $_REQUEST['MODE'] : '';

if (isset($_REQUEST['idf_acte']))
{
	//+ vérification que l'acte a bien été demandé par l'adhérent connecté
	$gi_idf_acte= (int) $_REQUEST['idf_acte'];
	$go_acte = new Acte($connexionBD,null,null,null,null,null,null);
	$a_filtres_acte=array();
  $go_acte->setFiltresParametres($a_filtres_acte);  
  $go_acte->charge($gi_idf_acte);
  if (empty($gst_mode))
  {
    $gst_formulaire = $go_acte->affichage_image_permalien(800,800); 
    $gst_formulaire .= $go_acte->formulaire_haut_acte();
    $gst_formulaire .= $go_acte->formulaire_liste_personnes();
    $gst_formulaire .= $go_acte->formulaire_bas_acte();
  }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >
<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>
<link href='../Commun/jquery-ui.css' type='text/css' rel='stylesheet'>
<link href='../Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>
<link href='../Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>
<meta http-equiv="content-language" content="fr">
<script src='../Commun/jquery-min.js' type='text/javascript'></script>
<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>
<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>
<script src='../js/jquery-ui.min.js' type='text/javascript'></script>
<script src='../js/CalRep.js' type='text/javascript'></script>
<script src='../Commun/iviewer/jquery-ui.min.js' type='text/javascript'></script>
<script src='../Commun/iviewer/jquery.mousewheel.min.js' type='text/javascript'></script>
<script src='../Commun/iviewer/jquery.iviewer.js' type='text/javascript'></script>
<link href='../Commun/iviewer/jquery.iviewer.css' type='text/css' rel='stylesheet'>
<script type='text/javascript'>
$(document).ready(function() {
<?php
print file_get_contents('../js/dateITA.js');
?>
$("#edition_acte").validate({
<?php
print regles_validation();
?>
});
$(function() {
   $("#bouton_supprimer").click(function(){
      if (confirm("Confirmer la suppression?")){
         $('#suppression_acte').submit();
      }
   });
});
<?php
//print parametres_completion_auto();
print $go_acte->fonctions_jquery_completion();
print file_get_contents('../js/EditionActe.js');
?>
 }); 
});  
</script>
<?php
print("<title>Modification d'un acte</title>");
print("</head>\n");
/******************************************************************************/
/*                     CORPS DE LA PAGE                                   	  */
/******************************************************************************/
print("<body>\n");
require_once("../Commun/menu.php");
print("<div class=\"TITRE\">Modification d'un acte</div>");

if (empty($gst_mode))
{
  print("<form id=\"edition_acte\" method=\"POST\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"MODE\" value=\"EDITION\">");
  print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">");
  print("<table border=1>");
  print($gst_formulaire);
  print("</table>");
  print("<div align=center><br><input type=\"submit\" id=\"bouton_soum\" value=\"Soumettre votre demande\"></div>");
  print("</form>");
  print("<form id=\"suppression_acte\" name=\"suppression_acte\" method=\"POST\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">\n");
  print("<input type=\"hidden\" name=\"MODE\" value=\"SUPPRESSION\">");
  print("<div align=center><input type=\"button\" id=\"bouton_supprimer\" value=\"Supprimer l'acte\" /></div>\n");
  print("</form>");
}
else                             
{
  $gi_idf_acte= isset($_REQUEST['idf_acte']) ?(int) $_REQUEST['idf_acte'] :  null;
  if (empty($gi_idf_acte))
  {
     print("<div class=\"ERREUR\">Pas d'identifiant d'acte d&eacute;fini</div>");
  }
  else
  {
    $stats_patronyme = new StatsPatronyme($connexionBD,$go_acte->getIdfCommune(),$go_acte->getIdfSource());
    $stats_commune = new StatsCommune($connexionBD,$go_acte->getIdfCommune(),$go_acte->getIdfSource());
    $unions = Union::singleton($connexionBD);
    switch($gst_mode)
    {
      case 'EDITION':        
        $go_acte->initialise_depuis_formulaire($gi_idf_acte);
        $st_requete = "LOCK TABLES `personne` write, `prenom` write  ,`acte` write, `profession` write, `commune_personne` write, `union` write, `stats_patronyme` write,`stats_commune` write,`acte` as a read,`personne` as p read, `type_acte` read, `type_acte` as ta read,`prenom_simple` write, `groupe_prenoms` write";
        $connexionBD->execute_requete($st_requete);
        $go_acte->maj_liste_personnes($go_acte->getIdfSource(),$go_acte->getIdfCommune(),$unions);
        $go_acte->sauve();
        $stats_patronyme->maj_stats($go_acte->getIdfTypeActe());
        $stats_commune->maj_stats($go_acte->getIdfTypeActe());
        $connexionBD->execute_requete("UNLOCK TABLES");
        print("<div align=center><textarea rows=40 cols=80>\n");
        print($go_acte->versChaine());
        print("</textarea></div>\n");  
        print("<div class=\"INFO\"><br>Modification effectu&eacute;e</div><br>\n");
        print("<form id=\"export_nimv3\" method=\"POST\" action=\"ExportNimV3.php\">");
        print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">\n");
        print("<div align=center><input type=\"submit\" value=\"Export Nimegue V3\"></div>\n");
        print("</form>");
        
      break;
      case 'SUPPRESSION':
        $st_requete = "LOCK TABLES `personne` write ,`acte` write, `profession` write, `commune_personne` write, `union` write, `stats_patronyme` write,`stats_commune` write,`acte` as a read,`personne` as p read, `type_acte` read, `type_acte` as ta read";
        $connexionBD->execute_requete($st_requete); 
        $connexionBD->execute_requete("DELETE FROM `personne` where idf_acte=$gi_idf_acte");
        $connexionBD->execute_requete("DELETE FROM `union` where idf_acte=$gi_idf_acte");
        $connexionBD->execute_requete("DELETE FROM `acte` where idf=$gi_idf_acte");
        $stats_patronyme->maj_stats($go_acte->getIdfTypeActe());
        $stats_commune->maj_stats($go_acte->getIdfTypeActe());        
        $connexionBD->execute_requete("UNLOCK TABLES");
        print("<div class=\"INFO\"><br>Acte supprim&eacute;</div><br>");
      break;
    }  
  }
}  
print("<div align=center><br><a href=\"../Recherches.php\">Retour au menu recherche</a></div>");
print("</body></HTML>\n");
?>