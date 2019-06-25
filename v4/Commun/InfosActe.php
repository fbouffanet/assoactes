<?php


require_once('Commun/Identification.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');
require_once('Commun/phonex.cls.php');
require_once('Administration/chargement/Acte.php');
require_once('Administration/chargement/CompteurActe.php');
require_once('Administration/chargement/Personne.php');
require_once('Administration/chargement/CompteurPersonne.php');
require_once('Administration/chargement/Prenom.php');
require_once('Administration/chargement/TypeActe.php');
require_once('Administration/chargement/CommunePersonne.php');
require_once('Administration/chargement/Profession.php');


function getRecapitulatifMessage($type, $max, $counter){
  switch ($type)
  {
    case IDF_NAISSANCE: $type = "naissance";
    break;
    case IDF_DECES:     $type = "d&eacute;c&eacute;s";
    break;
    default:            $type = "mariages et actes divers";
    break;
  }
  return sprintf("<div align='center'>Il vous reste %d demandes de $type dans ce mois<br></div>", $max-$counter);
}

function getContentBottom($type, $st_email_adht, $gi_idf_acte){
  switch ($type)
  {
    case IDF_NAISSANCE: $msg = "";
    break;
    case IDF_DECES:     $msg = "";
    break;
    default:            $msg = "Vous pouvez mettre vos commentaires dans la cellule ci-dessous qui paraitra sur le forum &agrave; la suite de la r&eacute;ponse de la base</div>\n
                                <div align='center'>Votre adresse <span class=\"IMPORTANT\">$st_email_adht</span> doit &ecirc;tre inscrite sur le forum Yahoogroupes de l'AGC<div>
                                <div class=\"alert alert-danger\">Sans cela, votre demande ne pourra &ecirc;tre prise en compte<div><br>
                                <form id=\"envoi_forum\" method=post action=".$_SERVER['PHP_SELF'].">
                                <input type=\"hidden\" name=\"mode\" value=\"ENVOI_FORUM\">
                                <input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">
                                <div align='center'><textarea cols=\"40\" rows=\"6\" name=\"commentaire\"></textarea></div><br>
                                <div align='center'><br><input type=\"submit\" value=\"Envoyer une remarque sur le forum\"></div>
                                </form>";
    break;
  }

  return $msg . '<div align=center><br><input type=button id="bouton_impression"  value="Imprimer"></div>';
}

/******************************************************************************/
/*                     CORPS DU PROGRAMME                                     */
/******************************************************************************/

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>\n");
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr"> ');
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='Commun/jQuery.print.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
//validation rules
$("#envoi_forum").validate({
   //debug: true,
   rules: {
      commentaire: "required"
   },
   messages: {
      commentaire: "Le commentaire est obligatoire"
   }
});
$("#bouton_fermeture").click(function(){
    window.close();
});

$("#bouton_impression").click(function(){
     $("#texte_acte").print({ iframe : false,append : "Relev&eacute; provenant de l'Association G&eacute;n&eacute;alogique de la Charente"});
});
});
</script>
<?php
print('<title>Infos acte</title>');
print('</head>');

print('<body>');

print("<div align=center><img src=\"./images/LogoAGC.jpg\"><br></div>");
if (isset($_REQUEST['idf_acte']))
{
  $gi_idf_acte = (int) $_REQUEST['idf_acte'];
}
else
 die("Erreur: L'identifiant de l'acte est manquant");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

list($i_idf_adherent,$i_max_nai,$i_max_dec,$i_max_mar_div,$st_prenom_adht,$st_nom_adht,$st_email_adht)=$connexionBD->sql_select_liste("select idf,max_nai,max_dec,max_mar_div,prenom,nom,email_forum from adherent where ident='".$_SESSION['ident']."'");
$i_idf_commune = $connexionBD->sql_select1("select idf_commune from acte where idf=$gi_idf_acte");

$a_profession=$connexionBD->liste_valeur_par_clef("select idf, nom from profession");
list($i_idf_type_acte,$i_idf_commune)=$connexionBD->sql_select_liste("select idf_type_acte,idf_commune from acte where idf=$gi_idf_acte");
$gst_adresse_ip = $_SERVER['REMOTE_ADDR'];

print("<div>");
if (empty($_POST['mode']))
{
  $result = $connexionBD->sql_select_stats_actes($i_idf_adherent, $gi_idf_acte, $i_idf_type_acte);
  $i_nb_ddes = $result['counter_type'];
  $i_nb_ddes_acte = $result['counter_acte'];

  switch ($i_idf_type_acte)
  {
    case IDF_NAISSANCE: $i_max = $i_max_nai;
    break;
    case IDF_DECES:     $i_max = $i_max_dec;
    break;
    default:            $i_max = $i_max_mar_div;
    break;

  }
  if ($i_max-$i_nb_ddes>0)
  {
    $o_acte = new Acte($connexionBD, null, null, null, null, null, null);
    $o_acte -> charge($gi_idf_acte);
    $st_description_acte = $o_acte -> versChaine();
    $i_nb_lignes = $o_acte ->getNbLignes();
    $st_permalien=  $o_acte->getUrl();
    print("<div id='texte_acte' align='center'>");
    print("<textarea rows=$i_nb_lignes cols=80 class='center'>");
    print($st_description_acte);
    print("</textarea>");
    if(!empty($st_permalien))
      print("<div><a href=\"$st_permalien\" target=\"_blank\">Lien vers les AD<a><br></div>");
    print("</div>");

    if($i_nb_ddes_acte == 0){
      $i_nb_ddes++;
      $st_requete = "insert into demandes_adherent(idf_adherent,adresse_ip,idf_commune,idf_acte,idf_type_acte,date_demande) values($i_idf_adherent,'$gst_adresse_ip',$i_idf_commune,$gi_idf_acte,$i_idf_type_acte,now())";
      $connexionBD->execute_requete($st_requete);
    }
    print(getRecapitulatifMessage($i_idf_type_acte, $i_max, $i_nb_ddes));
    print(getContentBottom($i_idf_type_acte, $st_email_adht, $gi_idf_acte));
  }
  else
  {
    print('<div class="IMPORTANT">Vous avez atteint votre quota. Merci d\'attendre le prochain mois<br></div>');
  }


}
else
{
  $st_requete = "select a.date,ta.nom,ca.nom,GROUP_CONCAT(concat(prn.libelle,' ',p.patronyme) order by p.idf separator ' X ') from acte a join commune_acte ca on (a.idf_commune=ca.idf) join type_acte ta on (a.idf_type_acte=ta.idf) join personne p on (p.idf_acte=a.idf) join prenom prn on (p.idf_prenom=prn.idf)  where a.idf=$gi_idf_acte and p.idf_type_presence=".IDF_PRESENCE_INTV." group by a.idf";
  list($st_date,$st_type_acte,$st_commune,$st_personnes)=$connexionBD->sql_select_liste($st_requete);
  $st_titre = "$st_personnes le $st_date a $st_commune";
  $a_commune_personne=$connexionBD->liste_valeur_par_clef("select idf, nom from commune_personne");
  $a_type_acte=$connexionBD->liste_valeur_par_clef("select idf, nom from type_acte");
  $o_acte = new Acte($connexionBD, null, null, null, null, null, null);
  $o_acte -> charge($gi_idf_acte);
  $st_description_acte = $o_acte -> versChaine();
  $i_nb_lignes = $o_acte ->getNbLignes();
  $st_permalien=  $o_acte->getUrl();
  $st_releve_html = str_replace(array("\r","\n"),'',nl2br(htmlentities($st_description_acte,ENT_COMPAT,'cp1252')));

  $st_frontiere = '-----=' . md5(uniqid(mt_rand()));
  $st_commentaire = $_POST['commentaire'];
  setlocale(LC_CTYPE, 'fr_FR.UTF8');
  $st_prenom_adht = strip_tags(iconv("cp1252", "ASCII//TRANSLIT", $st_prenom_adht));
  $st_nom_adht = strip_tags(iconv("cp1252", "ASCII//TRANSLIT", $st_nom_adht));
  $st_titre = strip_tags(iconv("cp1252", "ASCII//TRANSLIT", $st_titre));

  $st_debut_msg_html  = "Bonjour<br /><br />";
  $st_debut_msg_html .= "Demande d'information ";
  $st_debut_msg_html .= "ci-dessous trouv&eacute;e dans les tables du site<br /><br />";

  $st_fin_msg_html = "<br />\n<div>Commentaire: <br />".html_entity_decode(stripslashes($st_commentaire),ENT_COMPAT,'cp1252')."</div><br />";
  $st_fin_msg_html .= "<br />\nMerci<br />";
  $st_message_html =   $st_debut_msg_html.$st_releve_html.$st_fin_msg_html;
  $st_message_texte = html_entity_decode(str_ireplace(array("<br>","<br />"),"\r\n",$st_message_html),ENT_COMPAT,'cp1252');
  $st_message_texte = strip_tags(iconv("cp1252", "ASCII//TRANSLIT", $st_message_texte));
  $st_entete = "From: $st_prenom_adht $st_nom_adht <$st_email_adht>\n";
  $st_entete .= "Reply-to: $st_prenom_adht $st_nom_adht <$st_email_adht>\n";
  $st_entete .= 'MIME-Version: 1.0' . "\n";
  $st_entete .= 'Content-Type: multipart/alternative; boundary="'.$st_frontiere.'"';
  $st_message = 'Votre messagerie doit etre compatible MIME.'."\n\n";
  $st_message .= '--'.$st_frontiere."\n";
  $st_message .= 'Content-Type: text/plain; charset="us-ascii"'."\n";
  $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
  $st_message .= $st_message_texte."\n\n";
  $st_message .= '--'.$st_frontiere."\n";
  $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
  $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
  $st_message .= $st_message_html."\n\n";
  $st_message .= '--'.$st_frontiere."--\n";
  if (mail(EMAIL_FORUM,"DI: $st_titre", $st_message, $st_entete))
      print("<div align=center>La demande d'information a &eacute;t&eacute; envoy&eacute;e</div>");
  else
  {
    print("<div align=center class=\"IMPORTANT\">La demande d'information n'a pas &eacute;t&eacute; envoy&eacute;e</div>");
    $pf=@fopen("$gst_rep_logs/di_non_envoyees.log",'a');
    date_default_timezone_set($gst_time_zone);
    list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
    $i_mois++;
    $i_annee+=1900;
    $st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
    $st_chaine_log = join(';',array($st_date_log,$_SESSION['ident'],$gst_adresse_ip,$st_prenom_adht,$st_nom_adht,$st_email_adht));
    @fwrite($pf,"$st_chaine_log\n");
    @fclose($pf);
  }
}
;
print("<div align=center><br><Input type=button id=\"bouton_fermeture\" value=\"Fermer la fen&ecirc;tre\"></div>");
print("<br></div>");
print('</body></HTML>');

?>
