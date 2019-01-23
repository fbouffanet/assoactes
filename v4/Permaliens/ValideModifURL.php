<?php
require_once('../Commun/config.php');
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VALIDATION_PERMALIEN);
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/commun.php');

require_once('../Administration/chargement/Acte.php');
require_once('../Administration/chargement/CompteurActe.php');
require_once('../Administration/chargement/Personne.php');
require_once('../Administration/chargement/Prenom.php');
require_once('../Administration/chargement/CompteurPersonne.php');
require_once('../Administration/chargement/TypeActe.php');
require_once('../Administration/chargement/CommunePersonne.php');
require_once('../Administration/chargement/Profession.php');  

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print('<meta http-equiv="content-language" content="fr"> ');
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>");

?>
<script type='text/javascript'>
$(document).ready(function() {
//validation rules

$("#refus_modif_url").validate({
  rules: {
      motif_refus: "required"  
  },
  messages: {
     motif_refus: {
        required : "Le motif du refus est obligatoire"
    }
 }
});
    

});
</script>
<style type="text/css">


.wrapper
{
    overflow: hidden;
}

</style>
<?php

/*
* Affiche le menu d'edition d'une modification
* @param object $pconnexionBD identifiant d'objet BD 
* @param integer $pi_idf_modif identifiant de la modification
*/ 
function affiche_edition($pconnexionBD,$pi_idf_modif)
{
    $st_requete = "select idf_acte,a.idf_type_acte,email_demandeur,cmt_modif,permalien
from modif_url mod_u join acte a on (mod_u.idf_acte=a.idf) where mod_u.idf_modif=$pi_idf_modif";

    list($i_idf_acte,$i_idf_type_acte,$st_email,$st_cmt_demandeur,$st_permalien) =$pconnexionBD->sql_select_liste($st_requete);
    $o_acte = new Acte($pconnexionBD, null, null, null, null, null, null);
    $o_acte -> charge($i_idf_acte);
    $st_description_acte = $o_acte -> versChaine();
    $i_nb_lignes = $o_acte ->getNbLignes();
    //$st_permalien=  $o_acte->getUrl();
    print("<fieldset>");
    print("<legend>Validation de la demande</legend>");
    print("<form id=\"validation_modif_url\" action=\"".$_SERVER['PHP_SELF']."\" method=post>");
    print("<input type=\"hidden\" name=\"idf_modif\" value=\"$pi_idf_modif\">");
    print("<input type=\"hidden\" name=\"idf_acte\" value=\"$i_idf_acte\">");  
    print("<input type=\"hidden\" name=\"mode\" value=\"MODIFICATION\">");
    print("<div align=center><textarea rows=14 cols=80>");
    print($st_description_acte);
    print("</textarea></div>");
    if (!empty($st_permalien))
    {
      $st_chaine =  '<div class="wrapper" align=center>';
      $st_chaine .= "<iframe name=\"permalien\" id=\"permalien\" scrolling=\"auto\" height=\"800px\" src=\"$st_permalien\" width=\"800px\"></iframe>";
      $st_chaine .= '</div>'; 
      print($st_chaine);
    }      
    print("<div class=\"IMPORTANT\">ATTENTION, LES MODIFICATIONS SONT PORTEES EN BASE !!! </div>");    
    print("<div align=center><br>Commentaires &eacute;ventuels du valideur:<br><textarea name=commentaires_valideur rows=10 cols=80></textarea></div>");
    print("<div align=\"center\"><br><input type=\"submit\" value=\"Valider la demande\"></div>");
   
    print("</form>");
    print("</fieldset>");
    print("<fieldset>");
    print("<legend>Refus de la demande</legend>");
    print("<form id=\"refus_modif_url\" action=\"".$_SERVER['PHP_SELF']."\" method=post>");
    print("<input type=\"hidden\" name=\"mode\" value=\"REFUS\">");
    print("<input type=\"hidden\" name=\"idf_modif\" value=\"$pi_idf_modif\">");
    print("<div align=center><br>Motif du refus:<br><textarea name=motif_refus rows=10 cols=80></textarea></div>");
    print("<div align=\"center\"><input type=\"submit\" value=\"Refuser la demande\"></div>");
    print("</form>");
    print("</fieldset>");
}

/*
* Procéde à la validation d'une modification - L'acte est modifié en base
* @param object $pconnexionBD identifiant d'objet BD 
* @param integer $pi_idf_modif identifiant de la modification
*/ 
function valide_modification($pconnexionBD,$pi_idf_modif)
{
    global $gst_repertoire_chargement_actes,$gst_url_site,$gst_parametres_load_data;
    list($i_idf_acte,$st_email_demandeur,$st_permalien)=$pconnexionBD->sql_select_liste("select idf_acte,email_demandeur,permalien from modif_url where  idf_modif=$pi_idf_modif");
    list($st_date,$st_type,$st_commune,$st_parties)=$pconnexionBD->sql_select_liste("select a.date,ta.nom,ca.nom,group_concat(concat(p.patronyme,' ',prn.libelle) SEPARATOR ' X ') from modif_url mod_url join acte a on (mod_url.idf_acte=a.idf) join commune_acte ca on (a.idf_commune=ca.idf) join type_acte ta on (a.idf_type_acte=ta.idf) join personne p on (a.idf=p.idf_acte) join prenom prn on (p.idf_prenom=prn.idf) where p.idf_type_presence=".IDF_PRESENCE_INTV." and idf_modif=$pi_idf_modif group by mod_url.idf_modif,a.date,ta.nom,ca.nom");
    list($i_idf_validateur,$st_nom_valideur,$st_prenom_valideur,$st_email_valideur) =$pconnexionBD->sql_select_liste("select idf,nom, prenom, email_perso from adherent where ident='".$_SESSION['ident']."'");
    $st_requete = "update acte set url='$st_permalien',details_supplementaires=2 where idf=$i_idf_acte";
    $pconnexionBD->execute_requete($st_requete);
    $st_requete = "update modif_url set idf_validateur=$i_idf_validateur,date_validation=now(),statut='A' where idf_modif=$pi_idf_modif";
    $pconnexionBD->execute_requete($st_requete);
    $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
    $st_entete .= 'Content-type: text/html; charset=cp1252' . "\r\n";
    $st_entete .= "From: $st_prenom_valideur $st_nom_valideur <$st_email_valideur>\n";
    $st_entete .= "Bcc: $st_prenom_valideur $st_nom_valideur <$st_email_valideur>\n";
    $st_message = 'Bonjour,<br><br>';
    $st_message .= "Votre proposition d'ajout/modification d'un permalien vient d'&ecirc;tre accept&eacute;e<br>";
    $st_message .= '<table border=1>';
    $st_message .= "<tr><th>Date</th><th>Type d'Acte</th><th>Commune</th><th>Parties</th><tr>\n";
    $st_message .= "<tr><td>$st_date</td><td>$st_type</td><td>$st_commune</td><td>$st_parties</td></tr>\n";
    $st_message .= '</table>';
    $st_commentaires_valideur = isset($_POST['commentaires_valideur']) ? $_POST['commentaires_valideur']: '';
    if (! empty($st_commentaires_valideur))
    {
        $st_message .="<br>Commentaires du valideur: $st_commentaires_valideur<br>";
    }
    $st_message .= "<br>Merci de votre contribution<br>";
    $st_message .= "<br>Cordialement<br>";
    $st_message .= "$st_prenom_valideur $st_nom_valideur";  
    if (mail($st_email_demandeur, "Base AGC: Demande d'ajout/modification de permalien", $st_message, $st_entete))
    {      
      print("<div align=center class=\"INFO\"><br>La modification a &eacute;t&eacute; accept&eacute;e</div>");
    }
    else
    {
      print("<div align=center class=\"ERREUR\"><br>La modification a &eacute;chou&eacute;e</div>");
    }
}

/*
* Procède au refus de la modification
* @param object $pconnexionBD identifiant d'objet BD 
* @param integer $pi_idf_modif identifiant de la modification
*/ 
function affiche_refus($pconnexionBD,$pi_idf_modif)
{
  global $gst_url_site;
  list($i_idf_validateur,$st_nom_valideur,$st_prenom_valideur,$st_email_valideur) =$pconnexionBD->sql_select_liste("select idf,nom,prenom,email_perso from adherent where ident='".$_SESSION['ident']."'");
  list($st_mail_demandeur) =$pconnexionBD->sql_select_liste("select email_demandeur from modif_url where idf_modif=$pi_idf_modif");
  list($st_date,$st_type,$st_commune,$st_parties)=$pconnexionBD->sql_select_liste("select a.date,ta.nom,ca.nom,group_concat(concat(p.patronyme,' ',prn.libelle) SEPARATOR ' X ') from modif_url mod_url join acte a on (mod_url.idf_acte=a.idf) join commune_acte ca on (a.idf_commune=ca.idf) join type_acte ta on (a.idf_type_acte=ta.idf) join personne p on (a.idf=p.idf_acte) join prenom prn on (p.idf_prenom=prn.idf) where p.idf_type_presence=".IDF_PRESENCE_INTV." and idf_modif=$pi_idf_modif group by mod_url.idf_modif,a.date,ta.nom,ca.nom");
  if (get_magic_quotes_gpc())
  {
    if (ini_get('magic_quotes_sybase'))
      $st_motif_refus = isset($_POST['motif_refus']) ? $_POST['motif_refus']: 'ERREUR'; 
    else
      $st_motif_refus = isset($_POST['motif_refus']) ? stripslashes($_POST['motif_refus']): 'ERREUR';  
  }   
  else
    $st_motif_refus = isset($_POST['motif_refus']) ? $_POST['motif_refus']: 'ERREUR';
  $pconnexionBD->initialise_params(array(':motif_refus'=>$st_motif_refus));
  $st_requete = "update modif_url set idf_validateur=$i_idf_validateur,date_validation=now(),statut='R',motif_refus=:motif_refus where idf_modif=$pi_idf_modif";
  $pconnexionBD->execute_requete($st_requete);
  $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
  $st_entete .= 'Content-type: text/html; charset=cp1252' . "\r\n";
  $st_entete .= "From: $st_prenom_valideur $st_nom_valideur <$st_email_valideur>\n";
  $st_entete .= "Bcc: $st_prenom_valideur $st_nom_valideur <$st_email_valideur>\n";
  $st_message = 'Bonjour,<br><br>';
  $st_message .= 'Merci de votre proposition de modification:<br><br>';
  $st_message .= '<table border=1>';
  $st_message .= "<tr><th>Date</th><th>Type d'Acte</th><th>Commune</th><th>Parties</th><tr>\n";
  $st_message .= "<tr><td>$st_date</td><td>$st_type</td><td>$st_commune</td><td>$st_parties</td></tr>\n";
  $st_message .= '</table>';
  $st_message .= "Celle-ci n'a malheureusement pas &eacute;t&eacute; accept&eacute;e pour la raison suivante:<br><br>";
  $st_message .= "<font color=red>$st_motif_refus</font>";
  $st_message .= "<br><br>Nous vous invitons &agrave; renouveler votre demande en respectant les remarques qui vous sont indiqu&eacute;es<br><br>";
  $st_message .= "Merci encore pour votre d&eacute;marche<br>";
  $st_message .= "<br>Cordialement<br>";
  $st_message .= "$st_prenom_valideur $st_nom_valideur"; 
  //print("<pre>$st_message_texte</pre>");
  if (mail($st_mail_demandeur, "Base AGC: Demande d'ajout/modification de permalien", $st_message, $st_entete))
  {      
    print("<div align=center class=\"INFO\"><br>La modification a &eacute;t&eacute; refus&eacute;e</div>");
  }
  else
  {
    print("<div align=center class=\"ERREUR\"><br>La modification a &eacute;chou&eacute;e</div>");
  }
}

/******************************************************************************/
/*                     CORPS DU PROGRAMME                                     */
/******************************************************************************/

print("<title>Validation d'une modification d'une TDM</title>");
print('</head>');
print('<body>');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
print("<div class=\"TITRE\">Validation d'une modification d'un permalien</div>");
if (isset($_GET['idf_modif']) || isset($_POST['idf_modif']))
{
  $gi_idf_modif = isset($_GET['idf_modif']) ? (int) $_GET['idf_modif'] : (int) $_POST['idf_modif'];
  $gst_mode = isset($_POST['mode']) ? $_POST['mode']: 'EDITION'; 
  switch ($gst_mode)
  {
    case 'EDITION':
        affiche_edition($connexionBD,$gi_idf_modif);
    break;
    case 'MODIFICATION':
        valide_modification($connexionBD,$gi_idf_modif);
    break;
    case 'REFUS':
        affiche_refus($connexionBD,$gi_idf_modif); 
    break;
    default: die("Mode $gst_mode inconnu");
  }
}
else
  die("Erreur: L'identifiant de le modification est manquant");
print("<form action=\"ListeModifsURL.php\" method=\"POST\">");  
print("<div align=center><br><Input type=submit value=\"Liste des demandes en attente\"></div>");
print("</form>");
print('</body></html');