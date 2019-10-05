<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CHARGEMENT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/commun.php');

print('<!DOCTYPE html>');
print("<Head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/jquery-te-1.4.0.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='../css/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='../css/select2-bootstrap.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/select2.min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-te-1.4.0.min.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
?>
$(document).ready(function() {

  $.fn.select2.defaults.set( "theme", "bootstrap" );
  
  $(".js-select-avec-recherche").select2();
  
  $('#notification').submit(function() {
    var source=$('#idf_source option:selected').text();
    var type_acte=$('#idf_type_acte option:selected').text();
    var commune=$('#idf_commune option:selected').text();
    var c = confirm("Etes-vous sûr de notifier le chargement des actes de "+type_acte+" de la commune "+commune+" (source "+source+") ?");
    return c; 
  });
  
  $("textarea.jqte_edit").jqte();

  
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('textarea.jqte_edit').jqte({"status" : jqteStatus})
	});  
});
<?php
print("</script>");
print("<title>Notification des chargements</title>");
print('</Head>');

print("<body>");
print('<div class="container">');

/**
 * Affiche le menu de selection de la commune a notifier
 * @param object $pconnexionBD object connexion BD
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune identifiant de la commune
 * @param integer $pi_idf_type_acte identifiant du type d'acte   
 */
 
function AfficheSelectionNotification($pconnexionBD,$pi_idf_source,$pi_idf_commune,$pi_idf_type_acte) {
  global $ga_types_nimegue;
  $a_sources = $pconnexionBD->liste_valeur_par_clef("SELECT idf,nom FROM source order by nom");
  $a_communes = $pconnexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte order by nom");
  print('<div class="panel panel-primary">');
  print('<div class="panel-heading">Notification du chargement des donn&eacute;es d\'une commune/paroisse</div>');
  print('<div class="panel-body">');
  print("<form action=\"".$_SERVER['PHP_SELF']."\" id=\"notification\" method=\"post\">");

  print("<input type=hidden name=mode value=EDITION_NOTIFICATION>");
  print('<div class="form-row col-md-12">');
  print('<label for="idf_source" class="col-form-label col-md-2 col-md-offset-3">Source:</label>');
  print('<div class="col-md-4">'); 
  print('<select name=idf_source id=idf_source class="js-select-avec-recherche form-control">');
  print(chaine_select_options($pi_idf_source,$a_sources));
  print('</select></div></div>');
  print('<div class="form-row col-md-12">');  
  print('<label for="idf_commune" class="col-form-label col-md-2 col-md-offset-3">Commune:</label>');
  print('<div class="col-md-4">');
  print('<select name=idf_commune id=idf_commune class="js-select-avec-recherche form-control">');
  print(chaine_select_options($pi_idf_commune,$a_communes));
  print('</select></div></div>');
  print('<div class="form-row col-md-12">');
  print('<label for="idf_type_acte" class="col-form-label col-md-2 col-md-offset-3">Type d\'acte:</label>');
  print('<div class="col-md-4">');
  print('<select name=idf_type_acte id=idf_type_acte class="js-select-avec-recherche form-control">');
  print(chaine_select_options($pi_idf_type_acte,$ga_types_nimegue));
  print('</select></div></div>');
  print('<div class="form-row">');   
  print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4"><span class="glyphicon glyphicon-envelope"></span> Notifier un chargement</button>');
  print('</div>');
  print("</form></div></div>"); 
}

/**
 * Affiche le menu de selection de la commune a notifier
 * @param object $pconnexionBD object connexion BD
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune identifiant de la commune 
 * @param integer $pi_idf_type_acte identifiant du type d'acte
 * @global string $gst_url_site adresse du site  
 */
 
function AfficheEditionNotification($pconnexionBD,$pi_idf_source,$pi_idf_commune,$pi_idf_type_acte) {
  global $gst_url_site;
 
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  $st_texte = "Bonjour,<br /><br />";
  $st_texte .= "Nous vous informons que la base ".SIGLE_ASSO." a &eacute;t&eacute; mise &agrave; jour:\n";
  if ($pi_idf_type_acte==IDF_MARIAGE || $pi_idf_type_acte==IDF_NAISSANCE || $pi_idf_type_acte==IDF_DECES)
  {
    $st_requete ="select s.nom,ca.nom,c.nom,ta.nom, sc.annee_min,sc.annee_max,sc.nb_actes from stats_commune sc join commune_acte ca on (sc.idf_commune=ca.idf) join type_acte ta on (sc.idf_type_acte=ta.idf) join source s on (sc.idf_source=s.idf) left join canton c on (ca.idf_canton=c.idf) where sc.idf_source=$pi_idf_source and sc.idf_commune=$pi_idf_commune and sc.idf_type_acte=$pi_idf_type_acte";
  list ($st_source,$st_commune,$st_canton,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_actes)  = $pconnexionBD->sql_select_liste($st_requete);
    $st_libelle_canton = ($st_canton!='') ? "(canton de $st_canton)" : ''; 
    $st_texte .= "La source '$st_source' de la commune/paroisse <b>$st_commune</b> $st_libelle_canton a &eacute;t&eacute; mise &agrave; jour sur la p&eacute;riode: ";
    $st_texte .= "<u>$i_annee_min</u>-<u>$i_annee_max</u><br /><br />";
    $st_texte .= "La commune comporte d&eacute;sormais $i_nb_actes actes de type: $st_type_acte<br />";
    $st_texte .= "Le d&eacute;tail des ann&eacute;es disponibles est consultable &agrave; l'adresse $gst_url_site/AfficheStatsCommune.php?idf_source=$pi_idf_source&idf_commune=$pi_idf_commune&idf_type_acte=$pi_idf_type_acte <br /><br />";  
  }
  else
  {
      $st_requete ="select s.nom,ca.nom,c.nom,ta.nom, sc.annee_min,sc.annee_max,sc.nb_actes from stats_commune sc join commune_acte ca on (sc.idf_commune=ca.idf) join type_acte ta on (sc.idf_type_acte=ta.idf) join source s on (sc.idf_source=s.idf) left join canton c on (ca.idf_canton=c.idf) where sc.idf_source=$pi_idf_source and sc.idf_commune=$pi_idf_commune";
  //print("R=$st_requete<br>");
  list ($st_source,$st_commune,$st_canton,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_actes)  = $pconnexionBD->sql_select_liste($st_requete);
     $a_stats_type_acte = $pconnexionBD->sql_select_multiple("select ta.idf,ta.nom, sc.annee_min,sc.annee_max,sc.nb_actes from stats_commune sc join type_acte ta on (sc.idf_type_acte=ta.idf)  where sc.idf_source=$pi_idf_source and sc.idf_commune=$pi_idf_commune and sc.idf_type_acte not in (".IDF_MARIAGE.",".IDF_NAISSANCE.",".IDF_DECES.") order by ta.nom");
     $st_texte .= "Les actes divers de la commune/paroisse de <b>$st_commune</b> (Source: $st_source) sont maintenant disponibles: <br /><br />";
     $st_texte .= "<table border=1><tr><th>Type d'acte</th> <th>Ann&eacute;es</th> <th>Nombre d'actes</th> <th>D&eacute;tail des ann&eacute;es</th></tr>\n";
     foreach ($a_stats_type_acte as $a_ligne)
     {
        $st_texte .= "<tr>";
        list($i_idf_type_acte,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_actes) = $a_ligne;
        // les td sont séparés par des espaces pour qu'une séparation soit visible dans le message au format texte (suppression des balises HTML)
        if ($i_annee_min==$i_annee_max)
           $st_texte .="<td>$st_type_acte</td> <td>$i_annee_min</td> <td>$i_nb_actes actes</td> <td> $gst_url_site/AfficheStatsCommune.php?idf_source=$pi_idf_source&idf_commune=$pi_idf_commune&idf_type_acte=$i_idf_type_acte </td>";
        else     
           $st_texte .="<td>$st_type_acte</td> <td>$i_annee_min-$i_annee_max</td> <td>$i_nb_actes actes</td> <td> $gst_url_site/AfficheStatsCommune.php?idf_source=$pi_idf_source&idf_commune=$pi_idf_commune&idf_type_acte=$i_idf_type_acte </td>";
        $st_texte .= "</tr>\n";   
     }
     $st_texte .= "</table><br />\n";
  }
  $st_texte .= "Pour rappel, la liste compl&egrave;te des d&eacute;pouillements se trouve &agrave; l'adresse: $gst_url_site/AfficheStatsCommune.php <br /><br />";
  $st_texte .= "Cordialement<br /><br />";
  $st_texte .= "	Les responsables de la base ".SIGLE_ASSO;
  print('<textarea name="texte" id="texte" class="jqte_edit form-control" rows=20 cols=80>'.$st_texte.'</textarea>');
  print("<input type=hidden name=mode value=ENVOI_NOTIFICATION>");
  print('<div class="form-row">'); 
  print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4"><span class="glyphicon glyphicon-envelope"></span> Envoyer la notification</button>');
  print("</div>");
  print ("</form>");
  print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
  print("<input type=hidden name=mode value=\"SELECTION_NOTIFICATION\">");
  print('<div class="form-row">'); 
  print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Annuler</button>');
  print("</div>");  
  print('</form>'); 
}

/**
 * Envoie la notification sur le forum
 * @param object $pconnexionBD object connexion BD
 * @param integer $pi_idf_commune identifiant de la commune 
 * @param integer $pi_idf_type_acte identifiant du type d'acte
 * @param string $pst_msg_html message html à envoyer 
 * @global string $gst_url_site adresse du site  
 */
function EnvoieNotification($pconnexionBD,$pi_idf_commune,$pi_idf_type_acte,$pst_msg_html) {
   $st_commune = $pconnexionBD->sql_select1("select nom from commune_acte where idf=$pi_idf_commune");
   $st_type_acte = $pconnexionBD->sql_select1("select nom from type_acte where idf=$pi_idf_type_acte");
   switch($pi_idf_type_acte)
   {
     // meme sujet pour les naissances, mariages et deces
     case IDF_MARIAGE:
     case IDF_NAISSANCE:
     case IDF_DECES: $st_sujet = "MAJ Base ".SIGLE_ASSO.": $st_type_acte de la commune de $st_commune"; break;
     default: $st_sujet = "MAJ Base ".SIGLE_ASSO.": Actes divers de la commune de $st_commune";
   }        
   
   list($gst_nom,$gst_prenom,$gst_email) =$pconnexionBD->sql_select_liste("select nom,prenom,email_forum from adherent where ident='".$_SESSION['ident']."'");
   $st_frontiere = '-----=' . md5(uniqid(mt_rand())); 
   $st_entete = "From: $gst_prenom $gst_nom <$gst_email>\n";
   $st_entete .= 'MIME-Version: 1.0' . "\n"; 
   $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
   // Remplacement des adresses HTTP par un lien HTML
   $pst_msg_html = preg_replace('/(http\:\/\/\S+)\ /','<a href="$1">$1</a>',nl2br($pst_msg_html));
   $st_message_texte = html_entity_decode(str_ireplace(array("<br>","<br />","<hr />","<hr>"),"\r\n",$pst_msg_html),ENT_COMPAT,'cp1252');
   setlocale(LC_CTYPE, 'fr_FR.UTF8');
   $st_message_texte = strip_tags(iconv("cp1252", "ASCII//TRANSLIT", $st_message_texte));
   $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n"; 
   $st_message .= '--'.$st_frontiere."\n";
   $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
   $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
   $st_message .= $st_message_texte."\n\n";
   $st_message .= '--'.$st_frontiere."\n";
   $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
   $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
   $st_message .= $pst_msg_html."\n\n";
   $st_message .= '--'.$st_frontiere."--\n"; 
   if (mail(EMAIL_FORUM, $st_sujet, $st_message, $st_entete))    	
	    print('<div class="alert alert-success">R&eacute;ponse envoy&eacute;e avec succ&egrave;s sur le forum</div>');
   else
	    print('<div class="alert alert-danger">La r&eacute;ponse n\'a pu &ecirc;tre envoy&eacute;e sur le forum</div>');
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$i_session_idf_source = isset($_SESSION['idf_source']) ? $_SESSION['idf_source'] : '1';
$gi_idf_source=empty($_POST['idf_source']) ? $i_session_idf_source: $_POST['idf_source'];


$i_session_idf_commune = isset($_SESSION['idf_commune']) ? $_SESSION['idf_commune'] : '1';
$gi_idf_commune=empty($_POST['idf_commune']) ? $i_session_idf_commune: $_POST['idf_commune'];

$i_session_idf_type_acte = isset($_SESSION['idf_type_acte']) ? $_SESSION['idf_type_acte'] : '';
$gi_idf_type_acte=empty($_POST['idf_type_acte']) ? $i_session_idf_type_acte: $_POST['idf_type_acte'];

$i_session_idf_type_acte_nimegue = isset($_SESSION['idf_type_acte_nimegue']) ? $_SESSION['idf_type_acte_nimegue'] : 0;
$gi_idf_type_acte_nimegue=empty($_POST['idf_type_acte_nimegue']) ? $i_session_idf_type_acte_nimegue : $_POST['idf_type_acte_nimegue'];


$gst_mode = empty($_POST['mode']) ? 'SELECTION_NOTIFICATION': $_POST['mode'] ;

switch ($gst_mode) {
   case 'SELECTION_NOTIFICATION' : AfficheSelectionNotification($connexionBD,$gi_idf_source,$gi_idf_commune,$gi_idf_type_acte);break;
   case 'EDITION_NOTIFICATION' :
   
       
   $_SESSION['idf_source'] = $gi_idf_source;
   $_SESSION['idf_commune'] = $gi_idf_commune;
   $_SESSION['idf_type_acte'] = $gi_idf_type_acte;
   $_SESSION['idf_type_acte_nimegue'] = $gi_idf_type_acte_nimegue;
   if ($gi_idf_type_acte_nimegue==0)
      AfficheEditionNotification($connexionBD,$gi_idf_source,$gi_idf_commune,$gi_idf_type_acte);
   else
   {
      // le type d'acte Nimegue Divers etant assimile a celui de CM, aucun besoin
      // de correspondance => je sais, c'est de la bidouille honteuse
      AfficheEditionNotification($connexionBD,$gi_idf_source,$gi_idf_commune,$gi_idf_type_acte_nimegue);   
   }
   break;
   case 'ENVOI_NOTIFICATION': 
   $gst_texte=$_POST['texte'];
  
   
   if ($gi_idf_type_acte_nimegue==0)
   {
       // Retour a la page de gestion de donnees
       print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
       print("<input type=hidden name=mode value=SELECTION_NOTIFICATION>");       	       
       EnvoieNotification($connexionBD,$gi_idf_commune,$gi_idf_type_acte,$gst_texte);  
       print('<div class="form-row">'); 
       print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Retour au menu de notification</button>');
       print("</div>"); 
	   print("</form>");       
   }
   else
   {
       
       print("<form action=\"GestionDonnees.php\" method=\"post\">");
       print("<input type=hidden name=mode value=FORMULAIRE>"); 	   
       EnvoieNotification($connexionBD,$gi_idf_commune,$gi_idf_type_acte_nimegue,$gst_texte);  
       print('<div class="form-row">'); 
       print('<button type=submit class="btn btn-primary col-md-offset-4 col-md-4">Retour au menu chargement/export</button>');
       print("</div>");
	   print("</form>");
   }
   unset($_SESSION['idf_type_acte_nimegue']);
   break;
   default : print("Mode $gst_mode non reconnu");
}

print("</div></body></html>");


?>
