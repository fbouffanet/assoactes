<?php

//require_once('Commun/Identification.php');
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

/******************************************************************************/
/*                     CORPS DU PROGRAMME                                     */
/******************************************************************************/

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>\n");
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<title>Infos acte</title>');
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


print("<div>");
if ($i_idf_source==IDF_SOURCE_TD)
{
  if ($i_age_acte>100)
  {
    switch ($i_idf_type_acte)
    {
      case IDF_NAISSANCE:
        $st_ident = isset($_SESSION['ident']) ?  $_SESSION['ident']: '';
        enregistre_journal("$gst_rep_logs/requetes_td_naissances.log",$st_ident,$gst_adresse_ip,$i_idf_commune);       
      break;
      case IDF_DECES :
        $st_ident = isset($_SESSION['ident']) ?  $_SESSION['ident']: '';
        enregistre_journal("$gst_rep_logs/requetes_td_deces.log",$st_ident,$gst_adresse_ip,$i_idf_commune);        
      break;
      default:
        $st_ident = isset($_SESSION['ident']) ?  $_SESSION['ident']: '';
        enregistre_journal("$gst_rep_logs/requetes_td_mariages.log",$st_ident,$gst_adresse_ip,$i_idf_commune);     
    }
    $o_acte = new Acte($connexionBD, null, null, null, null, null, null);
    $o_acte -> charge($gi_idf_acte);
    $st_description_acte = $o_acte -> versChaine();
    $i_nb_lignes = $o_acte ->getNbLignes();
    $st_permalien=  $o_acte->getUrl();
    print("<div width='80%' align=center id='texte_acte'>");
    print("<textarea rows=$i_nb_lignes cols=80 class='center'>");
    print($st_description_acte);
    print("</textarea><br>");        
    if(!empty($st_permalien))
        print("<div><a href=\"$st_permalien\" target=\"_blank\">Lien vers les AD<a><br></div>");
    print("<form  action=\"PropositionModification.php\" id=\"PropositionModification\" method=\"post\" target=\"_blank\">\n");
    print("<input type=\"hidden\" name=\"idf_acte\" value=\"$gi_idf_acte\">");
    print("<div class\"alignCenter\"><br><input type=\"submit\" value=\"Proposer une modification\"></div>");
    print("</form>");
         
  }
  else
  {
     print("Cet acte de moins de 100 ans ne peut &ecirc;tre consult&eacute;");
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
