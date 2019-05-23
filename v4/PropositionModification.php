<?php

require_once('Commun/config.php');
require_once('Commun/constantes.php');
require_once('Commun/commun.php');
require_once('Commun/ConnexionBD.php');
	
require_once 'Administration/chargement/CompteurActe.php';
require_once 'Administration/chargement/Acte.php';	
require_once 'Administration/chargement/CompteurPersonne.php';
require_once 'Administration/chargement/Personne.php';
require_once 'Administration/chargement/Prenom.php';
require_once 'Administration/chargement/CommunePersonne.php';
require_once 'Administration/chargement/Profession.php';
require_once 'Administration/chargement/TypeActe.php';
require_once 'Administration/chargement/ModificationActe.php';
require_once 'Administration/chargement/ModificationPersonne.php';

$cryptinstall="Commun/crypt/cryptographp.fct.php";
include $cryptinstall;		
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$gi_idf_demandeur = null;
$gst_email_demandeur = '';
if (!empty($_SESSION['ident']))
{
    $st_requete = "select idf,email_perso from adherent where ident='".$_SESSION['ident']."'";
    list($gi_idf_demandeur,$gst_email_demandeur)=$connexionBD->sql_select_liste($st_requete);
}

/*
* Construit la chaine permettant la validation des paramètres d'un formulaire
* @return string régles de validation
*/
function regles_validation()
{
  global $go_acte,$gst_email_demandeur;
	$a_filtres = $go_acte->getFiltresParametres();
  for ($i=1;$i<=ModificationActe::getNbPhotos();$i++)
  {
    $a_filtres["photo$i"]= array(array("extension",'"gif|png|jpg|jpeg"',"seulement, les extensions gif, png, jpg ou jpeg sont acceptées"));
  }
  if (empty($gst_email_demandeur))
      $a_filtres["code"]= array(array("required",'true',"Le code est requis"));
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
  $gi_idf_source = $connexionBD->sql_select1("select idf_source from acte where idf=$gi_idf_acte");
  // Vérification des droits d'accèq
  if ($gi_idf_source!=IDF_SOURCE_TD)
  {
    if (empty($gi_idf_demandeur))
    {
      die("<div class=\"IMPORTANT\">Cet acte n'est pas issu d'une table d&eacute;cennale</div>");
    }
    else
    {
      $gi_nb_demandes = $connexionBD->sql_select1("select count(*) from demandes_adherent where idf_adherent=$gi_idf_demandeur and idf_acte=$gi_idf_acte");
      if ($gi_nb_demandes==0)    
        die("<div class=\"IMPORTANT\">Vous n'avez pas encore consult&eacute; cet acte</div>");
      
    }  
  }  
	$go_acte = new Acte($connexionBD,null,null,null,null,null,null);
	$a_filtres_acte=array();
  $go_acte->setFiltresParametres($a_filtres_acte);  
  $go_acte->charge($gi_idf_acte);
  if ($gst_mode=="ERREUR")
  {
    $go_acte->charge_variables_sessions();
  }     
  if (empty($gst_mode) || $gst_mode=="ERREUR")
  {
    $gst_permalien = $go_acte->affichage_image_permalien(800,800); 
    $gst_formulaire = $go_acte->formulaire_haut_acte();
    $gst_formulaire .= $go_acte->formulaire_liste_personnes();
    $gst_formulaire .= $go_acte->formulaire_bas_acte();
  }
}
else
{
  die("<div class=\"IMPORTANT\">Pas d'identifiant d'acte speacute;cifi&eacute;</div>");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >
<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>
<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>
<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>
<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'>
<meta http-equiv="content-language" content="fr">
<script src='Commun/jquery-min.js' type='text/javascript'></script>
<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>
<script src='Commun/additional-methods.min.js' type='text/javascript'></script>
<script src='js/jquery-ui.min.js' type='text/javascript'></script>
<script src='js/CalRep.js' type='text/javascript'></script>
<script src='Commun/iviewer/jquery-ui.min.js' type='text/javascript'></script>
<script src='Commun/iviewer/jquery.mousewheel.min.js' type='text/javascript'></script>
<script src='Commun/iviewer/jquery.iviewer.js' type='text/javascript'></script>
<link href='Commun/iviewer/jquery.iviewer.css' type='text/css' rel='stylesheet'>
<script type='text/javascript'>
$(document).ready(function() {
<?php
print file_get_contents('js/dateITA.js');
?>
$("#edition_acte").validate({
<?php
print regles_validation();
?>
});
<?php
//print parametres_completion_auto();
print $go_acte->fonctions_jquery_completion();
print file_get_contents('js/EditionActe.js');
?>
 }); 
});  
</script>
<?php
print("<title>Proposition de modification d'un acte</title>");
print("</head>\n");
/******************************************************************************/
/*                     CORPS DE LA PAGE                                   	  */
/******************************************************************************/
print("<body>\n");
require_once("Commun/menu.php");
print("<div class=\"TITRE\">Modification d'un acte</div>");

if (empty($gst_mode)||$gst_mode=='ERREUR')
{
  print("<form id=\"edition_acte\" method=\"POST\" enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"MODE\" value=\"EDITION\">");
  print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">");
  print($gst_permalien);
  print("<table border=1>");
  print($gst_formulaire);
  print("</table>");
  print("<div class=\"alignCenter\">Si les photos ne sont pas disponibles sur le site des AD, vous pouvez les joindre ci-dessous. Celles-ci doivent peser moins de 2 MO ");
  print("et ne sont pas publi&eacute;es pour &eacute;viter les probl&egrave;mes de licence<br></div>");
  print('<table border=1 align="center">');
  for ($i=1;$i<=ModificationActe::getNbPhotos();$i++)
  {
     print("<tr><th>Photo $i (JPEG, GIF ou PNG):</th><td><input type=\"file\" name=\"photo$i\"></td></tr>");
  }
  print('</table>');
  print("<fieldset><legend>Commentaires &eacute;ventuels &agrave destination du valideur:</legend>");
  print("<div class=\"alignCenter\">Commentaires:<textarea name=cmt_modif rows=4 cols=80></textarea></div>");
  
  if (empty($gi_idf_demandeur))
  {
     print("<div class=\"alignCenter\">Votre email: <input type=\"text\" name=\"email_demandeur\" value=\"$gst_email_demandeur\" size=\"30\"> (Non publi&eacute;. Il sert uniquement au valideur &agrave; vous contacter en cas de probl&egrave;me)</div><div align=\"center\">");
     dsp_crypt(0,1);
    print('Recopier tous les chiffres du code ci-dessus:<br><input type="text" name="code"></div>');
  }
  print("</fieldset>");
  print("<div class=\"alignCenter\"><br><input type=\"submit\" id=\"bouton_soum\" value=\"Soumettre votre demande\"></div>");
  print("</form>");
  print("</div>");
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
    if (empty($gi_idf_demandeur)) 
    {
      // Modification de TD => une vérification du captch doit être faite
      if (chk_crypt($_POST['code']))
      {
        $go_acte = new ModificationActe($connexionBD,$gi_idf_acte,null);
        $go_acte->initialise_depuis_formulaire($gi_idf_acte);            
        $go_acte->cree();
        $go_acte->detruit_variables_sessions();
        print("<div class=\"INFO\"><br>Modification demand&eacute;e</div><br>\n");
      }
      else
      {
        $go_acte = new ModificationActe($connexionBD,$gi_idf_acte,null);
        $go_acte->initialise_depuis_formulaire($gi_idf_acte);
        //print $go_acte->versTableauHTML();
        $go_acte->intialise_variables_sessions();
        print("<div align=center>Le code n'a pas &eacute;t&eacute; reconnu.");
        print("<form METHOD=POST NAME=RETOUR_ERREUR action=\"".$_SERVER['PHP_SELF']."\">");
        print("<input type=hidden name=idf_acte value=$gi_idf_acte>");
        print("<input type=hidden name=\"MODE\" value=\"ERREUR\">");
        print('<input type=submit value="Retour">');
        print('</form>');
        print('</div>');
      }
    }
    else
    {
      // La modification vient d'un adhérent => pas de captcha
      $go_acte = new ModificationActe($connexionBD,$gi_idf_acte,null);
      $go_acte->initialise_depuis_formulaire($gi_idf_acte); 
      $go_acte->setEmailDemandeur($gst_email_demandeur);            
      $go_acte->cree();
      print("<div class=\"INFO\"><br>Modification demand&eacute;e</div><br>\n");
      print("<div align=center><br><button <button type=\"button\" class=\"fermeture_fenetre\">Fermer la fen&ecirc;tre</button></div>");       
    }
  }
}  
// Ajout des photos et des commentaires destinés aux valideurs
print("</body></HTML>\n");
?>