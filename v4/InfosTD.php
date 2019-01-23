<?php

session_start();

require_once('Commun/config.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');
require_once('Administration/chargement/Acte.php');
require_once('Administration/chargement/CompteurActe.php');
require_once('Administration/chargement/Personne.php');
require_once('Administration/chargement/Prenom.php');
require_once('Administration/chargement/CompteurPersonne.php');
require_once('Administration/chargement/TypeActe.php');
require_once('Administration/chargement/CommunePersonne.php');
require_once('Administration/chargement/Profession.php');   

/*
* Enregistre des informations de statistiques naissances et décès dans un fichier journal
* @param string $pst_nom_fichier nom du fichier journal
* @param string $pst_ident identifiant de l'adhérent
* @param string $pst_adresse_ip adresse ip de l'adhérent
* @param string $pi_idf_commune identifiant de la commune demandée
*/
function enregistre_journal($pst_nom_fichier,$pst_ident,$pst_adresse_ip,$pi_idf_commune)
{
  global $gst_time_zone;
  $pf=@fopen($pst_nom_fichier,'a');
  date_default_timezone_set('Europe/Paris'); 
  list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
  $i_mois++;
  $i_annee+=1900;
  $st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
  $st_chaine_log = join(';',array($st_date_log,trim($pst_ident),$pst_adresse_ip,$pi_idf_commune));
  @fwrite($pf,"$st_chaine_log\n"); 
  @fclose($pf);
}

/**
 * Enregistre la modification
 *  @param object $pconnexionBD Connexion à la base de données  
 */
function enregistre_modification($pconnexionBD,$pi_idf_acte,$pst_cmt_valideur,$pst_permalien) 
{  
  $pconnexionBD->initialise_params(array(':cmt_valideur'=>$pst_cmt_valideur));
  $st_email = isset($_POST['email_correcteur'])?substr($_POST['email_correcteur'],0,60):'';
  $st_adresse_ip = $_SERVER['REMOTE_ADDR'];  
  $st_requete ="insert into modif_url(idf_acte,date_modif,email_demandeur,ip_demandeur,cmt_modif,permalien) values($pi_idf_acte,now(),'$st_email','$st_adresse_ip',:cmt_valideur,'$pst_permalien')";
  $pconnexionBD->execute_requete($st_requete); 
}

/******************************************************************************/
/*                     CORPS DU PROGRAMME                                     */
/******************************************************************************/

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>\n");
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print('<meta http-equiv="content-language" content="fr"> ');
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<title>Infos acte</title>');
?>
<script type='text/javascript'>
$(document).ready(function() {

//validation rules
$("#edition_permalien").validate({
  rules: {
      email_correcteur: {
        required: true,
        email: true
      }, 
      permalien: {
        required : true, 
        pattern: /^http\:\/\/[\w\.]+\/ark\:\/[\d]+\/[\w]+\/[\w]+$/
      } 
  },
  messages: {
    email_correcteur: {
      required: "L'email du correcteur est obligatoire",
      email: "L'adresse n'est pas un email"
    },
   permalien: {
        required: "Le permalien est requis",
        pattern: "Ce n'est pas un permalien. Merci de lire l'aide en cliquant sur le point d'interrogation"
   }   
  }
});
});

</script>
<?php
print('</head>');

print('<body>');

print("<div align=center><a href=\"$gst_url_sortie\" target=\"_blank\"><img src=\"./images/LogoAGC.jpg\" style=\"border: 0;\"></a><br></div>");
print("<div class=\"TITRE\">Ce relev&eacute; est issu d'une table d&eacute;cennale</div>");
if (isset($_GET['idf_acte']))
{
  $gi_idf_acte = (int) $_GET['idf_acte'];
  $_SESSION['idf_acte'] = $gi_idf_acte;
}
else if (isset($_SESSION['idf_acte']))
  $gi_idf_acte = (int) $_SESSION['idf_acte'];
else
 die("Erreur: L'identifiant de l'acte est manquant");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$i_idf_commune = $connexionBD->sql_select1("select idf_commune from acte where idf=$gi_idf_acte");
$a_profession=$connexionBD->liste_valeur_par_clef("select idf, nom from profession");
list($i_idf_type_acte,$i_idf_commune,$i_idf_source,$i_age_acte)=$connexionBD->sql_select_liste("select idf_type_acte,idf_commune,idf_source,year(now())-annee from acte where idf=$gi_idf_acte");
$gst_adresse_ip = $_SERVER['REMOTE_ADDR'];
$gst_mode = isset($_POST['mode']) ? $_POST['mode']: 'EDITION';

print("<div>");
if ($i_idf_source==IDF_SOURCE_TD)
{
  if ($gst_mode=='MODIFICATION')
  { 
     if (get_magic_quotes_gpc())
        {
          if (ini_get('magic_quotes_sybase'))
          {
            $st_cmt_valideur = isset($_POST['cmt_valideur'])?trim($_POST['cmt_valideur']):'';
            $st_permalien = isset($_POST['permalien'])?substr(trim($_POST['permalien']),0,100):''; 
          }
          else
          {
            $st_cmt_valideur = isset($_POST['cmt_valideur'])?strisplashes(trim($_POST['cmt_valideur'])):'';
            $st_permalien = isset($_POST['permalien'])?stripslashes(substr(trim($_POST['permalien']),0,100)):'';
          }
      }   
      else
      {   
          $st_cmt_valideur = isset($_POST['cmt_valideur'])?trim($_POST['cmt_valideur']):'';
          $st_permalien = isset($_POST['permalien'])?substr(trim($_POST['permalien']),0,100):'';
      }
      enregistre_modification($connexionBD,$gi_idf_acte,$st_cmt_valideur,$st_permalien);
  }
  else
  {
    if ($i_age_acte>100)
    {
      $st_ident = isset($_SESSION['ident']) ?  $_SESSION['ident']: '';
      switch ($i_idf_type_acte)
      {
        case IDF_NAISSANCE:
          enregistre_journal("$gst_rep_logs/requetes_td_naissances.log",$st_ident,$gst_adresse_ip,$i_idf_commune);       
        break;
        case IDF_DECES :
          enregistre_journal("$gst_rep_logs/requetes_td_deces.log",$st_ident,$gst_adresse_ip,$i_idf_commune);        
        break;
        default:
          enregistre_journal("$gst_rep_logs/requetes_td_mariages.log",$st_ident,$gst_adresse_ip,$i_idf_commune);     
      }
      $o_acte = new Acte($connexionBD, null, null, null, null, null, null);
      $o_acte -> charge($gi_idf_acte);
      $i_details_supp=$o_acte->getDetailsSupplementaires();
    
      if ($i_details_supp==0)
      {
        $st_reponse = '';
        $st_description_acte = $o_acte -> versChaine();
        print("<div align=center><textarea rows=2 cols=80 class='center'>");
        print($st_description_acte);
        print("</textarea></div>");
        print("<form id=\"edition_permalien\" name=\"edition_permalien\" action=\"".$_SERVER['PHP_SELF']."\" method=post>");
        $st_reponse .= "<fieldset><legend>Permalien</legend>";
        print("<div align=center><input type=hidden name=idf_acte value=\"$gi_idf_acte\">");
        print("<input type=hidden name=mode value=\"MODIFICATION\">");
        $st_reponse .= "<div align=center>Merci d'indiquer le permalien des AD obtenu en cliquant sur l'ic&ocirc;ne  <img src=\"$gst_url_images/logo_permalien.png\" alt=\"permalien\"> <a target=\"_blank\" href=\"Permalien_AD16.html\"> <img src=\"$gst_url_images/point_interrogation.png\" height=24 width=24 alt=\"aide permalien\"></a></div>";
        $st_reponse .= "<div align=center><input type=\"text\" name=\"permalien\" maxlength=100 size=100 value=\"\"> </div>";
        $st_reponse .= "<div align=\"center\"></fieldset>";
        $st_email ="";
        if (!empty($st_ident))
        {
          $st_requete = "select email_perso from adherent where ident='$st_ident'";
          $st_email=$connexionBD->sql_select1($st_requete);
        }
        $st_reponse .= "<div align=\"center\">";
        $st_reponse .= "<fieldset><legend>Commentaires &eacute;ventuels &agrave destination du valideur:</legend><div>Votre email: <input type=\"text\" name=\"email_correcteur\" value=\"$st_email\" size=\"30\"> (Non publi&eacute;. Il sert uniquement au valideur &agrave; vous contacter en cas de probl&egrave;me)</div>";
        $st_reponse.= "<div><br>Commentaires:<textarea name=cmt_valideur rows=4 cols=80></textarea></div></fieldset>";
        $st_reponse.= "<div align=center><br><input type=\"submit\" id=\"bouton_soum\" value=\"Ajouter uniquement le permalien\"></div>";
        $st_reponse.=  "</div>";
        $st_reponse.="</form>";
        print($st_reponse);
      }
      else
      {
        $st_description_acte = $o_acte -> versChaine();
        $i_nb_lignes = $o_acte ->getNbLignes();
        $st_permalien=  $o_acte->getUrl();
        print("<div width='80%' align=center id='texte_acte'>");
        print("<textarea rows=$i_nb_lignes cols=80 class='center'>");
        print($st_description_acte);
        print("</textarea><br>");        
        if(!empty($st_permalien))
        print("<div><a href=\"$st_permalien\" target=\"_blank\">Lien vers les AD<a><br></div>");
      }
      print("<form  action=\"PropositionModification.php\" id=\"PropositionModification\" method=\"post\" target=\"_blank\">\n");
      print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">");
      print("<div class\"alignCenter\"><br><input type=\"submit\" value=\"Completer en d&eacute;tail le relev&eacute;\"></div>");
      print("</form>");        
    }
    else
    {
      print("Cet acte de moins de 100 ans ne peut &ecirc;tre consult&eacute;");
    }
  }
}
else
{
  print("Cet acte ne provient pas d'une table d&eacute;cennale");
}
print("<div align=center><br><Input type=button value=\"Fermer la fenêtre\" OnClick=\"javascript:window.close()\"></div>");
print("<br></div>");
print('</body></HTML>');

?>
