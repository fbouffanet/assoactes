<?php

require_once('../Commun/config.php');
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/commun.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VALIDATION_TD);
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/finediff.php');
require_once('../Commun/phonex.cls.php');
	
require_once('chargement/CompteurActe.php');
require_once('chargement/Acte.php');	
require_once('chargement/CompteurPersonne.php');
require_once('chargement/Personne.php');
require_once('chargement/Prenom.php');
require_once('chargement/CommunePersonne.php');
require_once('chargement/Profession.php');
require_once('chargement/TypeActe.php');
require_once('chargement/Union.php');
require_once('chargement/StatsPatronyme.php');
require_once('chargement/StatsCommune.php');
require_once('chargement/ModificationActe.php');
require_once('chargement/ModificationPersonne.php');
	
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$gi_idf_demandeur = null;
$gst_email_demandeur = '';
$gst_formulaire= '';
if (!empty($_SESSION['ident']))
{
    $st_requete = "select idf,email_perso from adherent where ident='".$_SESSION['ident']."'";
    list($gi_idf_demandeur,$gst_email_demandeur)=$connexionBD->sql_select_liste($st_requete);
}


/*
* Construit la chaine permettant la validation des paramÞtres d'un formulaire
* @return string rÚgles de validation
*/
function regles_validation()
{
  global $go_acte,$gst_email_demandeur;
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
$gst_adresse_retour = isset($_REQUEST['adresse_retour']) ?  $_REQUEST['adresse_retour'] : null;


if (isset($_REQUEST['idf_modification']) )
{
  $gi_idf_modification= (int) $_REQUEST['idf_modification'];
  $go_acte = new ModificationActe($connexionBD,null,$gi_idf_modification);
  $go_acte->charge($gi_idf_modification);
  if (empty($gst_mode))
  {  
    $a_filtres_acte=array();
    $go_acte->setFiltresParametres($a_filtres_acte);
    $a_params_completion_auto=array(); 
    $go_acte->setParamsCompletionAuto($a_params_completion_auto);     
    if (empty($gst_mode))
    {
      $gst_formulaire = $go_acte->affichage_image_permalien(800,800); 
      $gst_formulaire .= $go_acte->formulaire_haut_acte();
      $gst_formulaire .= $go_acte->formulaire_liste_personnes();
      $gst_formulaire .= $go_acte->formulaire_bas_acte();
    }
  }  
}
else
{
  die("<div class=\"IMPORTANT\">Pas d'identifiant d'acte sp&eacute;cifi&eacute;</div>");
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
<style type="text/css">.diffDeleted span{  border:1px solid rgb(255,192,192);  background:rgb(255,224,224);}.diffInserted span{  border:1px solid rgb(192,255,192);  background:rgb(224,255,224);}del{  border:1px solid rgb(255,192,192);  background:rgb(255,224,224);}ins{  border:1px solid rgb(192,255,192);  background:rgb(224,255,224);}

.viewer
{
    width: 50%;
    height: 500px;
    border: 1px solid black;
    position: relative;
}
.wrapper
{
    overflow: hidden;
}

</style>
<script type='text/javascript'>
$(document).ready(function() {
<?php
print file_get_contents('../js/dateITA.js');
?>
$("#modification_acceptee").validate({
<?php
if (empty($gst_mode))
  print regles_validation();
?>
});
<?php
if (empty($gst_mode))
  print $go_acte->validation_formulaire_refus();
?>
<?php
if (empty($gst_mode))
{
  print $go_acte->fonctions_jquery_completion();
  print file_get_contents('../js/EditionActe.js');               
}
?>
 }); 
});  
</script>
<?php
print("<title>Validation de modification d'un acte</title>");
print("</head>\n");
/******************************************************************************/
/*                     CORPS DE LA PAGE                                   	  */
/******************************************************************************/
print("<body>\n");
require_once("../Commun/menu.php");
print("<div class=\"TITRE\">Validation de modification d'un acte</div>");

if (empty($gst_mode))
{
  print("<form id=\"modification_acceptee\" method=\"POST\" enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"MODE\" value=\"VALIDATION\">");
  print("<input type=\"hidden\" name=\"idf_modification\" value=\"$gi_idf_modification\">");
  print($go_acte->infos_demandeur());
  print($go_acte->differences());
  print("<table border=1>");
  print($gst_formulaire);
  print("</table>");
  print $go_acte->visualisation_photos();
  print $go_acte->commentaires_demandeur();
  print("<div class=\"alignCenter\"><br><input type=\"submit\" id=\"bouton_soum\" value=\"Approuver la demande\"></div>");
  print("</form>");
  print($go_acte->formulaire_refus());
  $_SESSION['adresse_retour']=$gst_adresse_retour; 
}
else                             
{
 
   $gi_idf_modification= isset($_REQUEST['idf_modification']) ?(int) $_REQUEST['idf_modification'] :  null;
   $gst_adresse_retour = isset($_SESSION['adresse_retour']) ? $_SESSION['adresse_retour'] : '';
   unset($_SESSION['adresse_retour']);
   list($i_idf_valideur,$st_nom_valideur,$st_prenom_valideur,$st_email_valideur) =$connexionBD->sql_select_liste("select idf,nom,prenom,email_perso from adherent where ident='".$_SESSION['ident']."'");
   switch ($gst_mode)
   {
      case 'VALIDATION':
        if (get_magic_quotes_gpc())
        {
          if (ini_get('magic_quotes_sybase'))
            $st_cmt_valideur = isset($_POST['cmt_valideur']) ? $_POST['cmt_valideur']: 'ERREUR'; 
          else
            $st_cmt_valideur = isset($_POST['cmt_valideur']) ? stripslashes($_POST['cmt_valideur']): 'ERREUR';  
        }   
        else
          $st_cmt_valideur = isset($_POST['cmt_valideur']) ? $_POST['cmt_valideur']: 'ERREUR';
        $go_acte->accepte($i_idf_valideur,$st_nom_valideur,$st_prenom_valideur,$st_email_valideur,$st_cmt_valideur);  
      break;
      case 'REFUS':
        if (get_magic_quotes_gpc())
        {
          if (ini_get('magic_quotes_sybase'))
            $st_motif_refus = isset($_POST['motif_refus']) ? $_POST['motif_refus']: 'ERREUR'; 
          else
            $st_motif_refus = isset($_POST['motif_refus']) ? stripslashes($_POST['motif_refus']): 'ERREUR';  
        }   
        else
          $st_motif_refus = isset($_POST['motif_refus']) ? $_POST['motif_refus']: 'ERREUR';
        $go_acte->refuse($i_idf_valideur,$st_nom_valideur,$st_prenom_valideur,$st_email_valideur,$st_motif_refus);
      break;
      default:
        die("Mode $gst_mode inconnu");
   }
}
print("<form action=\"$gst_url_site/$gst_adresse_retour\" method=\"POST\">");  
print("<div align=center><br><Input type=submit value=\"Liste des demandes en attente\"></div>");
print("</form>");  
print("</body></HTML>\n");
?>