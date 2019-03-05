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
* Construit la chaine permettant la validation des param�tres d'un formulaire
* @return string r�gles de validation
*/
function regles_validation()
{
  global $go_acte,$gst_email_demandeur;
	$a_filtres = $go_acte->getFiltresParametres();
  for ($i=1;$i<=ModificationActe::getNbPhotos();$i++)
  {
    $a_filtres["photo$i"]= array(array("extension",'"gif|png|jpg|jpeg"',"seulement, les extensions gif, png, jpg ou jpeg sont accept�es"));
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
	//+ v�rification que l'acte a bien �t� demand� par l'adh�rent connect�
	$gi_idf_acte= (int) $_REQUEST['idf_acte'];
  $gi_idf_source = $connexionBD->sql_select1("select idf_source from acte where idf=$gi_idf_acte");
  // V�rification des droits d'acc�q
  if ($gi_idf_source!=IDF_SOURCE_TD)
  {
    if (empty($gi_idf_demandeur))
    {
      die("<div class=\"alert alert-danger\">Cet acte n'est pas issu d'une table d&eacute;cennale</div>");
    }
    else
    {
      $gi_nb_demandes = $connexionBD->sql_select1("select count(*) from demandes_adherent where idf_adherent=$gi_idf_demandeur and idf_acte=$gi_idf_acte");
      if ($gi_nb_demandes==0)    
        die("<div class=\"alert alert-danger\">Vous n'avez pas encore consult&eacute; cet acte</div>");
      
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
  die("<div class=\"alert alert-danger\">Pas d'identifiant d'acte speacute;cifi&eacute;</div>");
}
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='css/styles.css' type='text/css' rel='stylesheet'>
<link href='css/bootstrap.min.css' rel='stylesheet'>
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
<script src='js/bootstrap.min.js' type='text/javascript'></script>
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
print('<div class="container">');
require_once("Commun/menu.php");
print('<div class="panel panel-primary">');
print("<div class=\"panel-heading\">Modification d'un acte</div>");
print('<div class="panel-body">');

if (empty($gst_mode)||$gst_mode=='ERREUR')
{
  print("<form id=\"edition_acte\" method=\"POST\" enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\">");
  print("<input type=\"hidden\" name=\"MODE\" value=\"EDITION\">");
  print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">");
  print($gst_permalien);
  print("<table class=\"table table-bordered table-striped\">");
  print($gst_formulaire);
  print("</table>");
  print("<div class=\"text-center\">Si les photos ne sont pas disponibles sur le site des AD, vous pouvez les joindre ci-dessous. Celles-ci doivent peser moins de 2 MO ");
  print("et ne sont pas publi&eacute;es pour &eacute;viter les probl&egrave;mes de licence</div>");
  print('<table class="table table-bordered table-striped">');
  for ($i=1;$i<=ModificationActe::getNbPhotos();$i++)
  {
     print("<tr><th>Photo $i (JPEG, GIF ou PNG):</th><td><input type=\"file\" name=\"photo$i\"></td></tr>");
  }
  print('</table>');
  print("<fieldset><legend>Commentaires &eacute;ventuels &agrave destination du valideur:</legend>");
  print("<label for=\"cmt_modif\">Commentaires</label><textarea name=cmt_modif id=cmt_modif rows=4 cols=80 class=\"form-control\"></textarea>");
  
  if (empty($gi_idf_demandeur))
  {
     print("<label for=\"email_demandeur\">Votre email:</label><input type=\"text\" name=\"email_demandeur\" id=\"email_demandeur\" value=\"$gst_email_demandeur\" size=\"30\" aria-describedby=\"cmt_email_demandeur\"><small id=cmt_email_demandeur class=\"form-text text-muted\">Non publi&eacute;. Il sert uniquement au valideur &agrave; vous contacter en cas de probl&egrave;me</small>>");
	 print("<div class=\"text-center\"");
     dsp_crypt(0,1);
     print('Recopier tous les chiffres du code ci-dessus:<br><input type="text" name="code"></div>');
  }
  print("</fieldset>");
  print('<button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">Soumettre votre demande</button>');
  print("</form>");
}
else                             
{
  $gi_idf_acte= isset($_REQUEST['idf_acte']) ?(int) $_REQUEST['idf_acte'] :  null;
  if (empty($gi_idf_acte))
  {
     print("<div class=\"alert alert-danger\">Pas d'identifiant d'acte d&eacute;fini</div>");
  }
  else
  {
    if (empty($gi_idf_demandeur)) 
    {
      // Modification de TD => une v�rification du captch doit �tre faite
      if (chk_crypt($_POST['code']))
      {
        $go_acte = new ModificationActe($connexionBD,$gi_idf_acte,null);
        $go_acte->initialise_depuis_formulaire($gi_idf_acte);            
        $go_acte->cree();
        $go_acte->detruit_variables_sessions();
        print("<div class=\"alert alert-success\">Modification demand&eacute;e</div>\n");
      }
      else
      {
        $go_acte = new ModificationActe($connexionBD,$gi_idf_acte,null);
        $go_acte->initialise_depuis_formulaire($gi_idf_acte);
        //print $go_acte->versTableauHTML();
        $go_acte->intialise_variables_sessions();
        print("<div class=\"alert alert-danger\">Le code n'a pas &eacute;t&eacute; reconnu</div>");
        print("<form METHOD=POST NAME=RETOUR_ERREUR action=\"".$_SERVER['PHP_SELF']."\">");
        print("<input type=hidden name=idf_acte value=$gi_idf_acte>");
        print("<input type=hidden name=\"MODE\" value=\"ERREUR\">");
		print('<button type="submit" class="btn btn-primary col-md-4 col-md-offset-4">Retour</button>');
        print('</form>');
      }
    }
    else
    {
      // La modification vient d'un adh�rent => pas de captcha
      $go_acte = new ModificationActe($connexionBD,$gi_idf_acte,null);
      $go_acte->initialise_depuis_formulaire($gi_idf_acte); 
      $go_acte->setEmailDemandeur($gst_email_demandeur);            
      $go_acte->cree();
      print("<div class=\"alert alert-success\">Modification demand&eacute;e</div>\n");
	  print('<button type="button" class="btn btn-primary col-md-4 col-md-offset-4 fermeture_fenetre">Retour</button>');       
    }
  }
}  
print("</div></div>");
print("</div></body></HTML>\n");
?>