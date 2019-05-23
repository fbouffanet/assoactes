<?php

require_once('Commun/Identification.php');
require_once('Commun/commun.php');
require_once('Commun/constantes.php');
require_once('Commun/config.php');
require_once('Commun/ConnexionBD.php');
require_once('RequeteRecherche.php');
require_once('Commun/VerificationDroits.php');

$gst_cote_liasse = isset($_REQUEST['cote_liasse']) ? $_REQUEST['cote_liasse'] : '' ;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
list($st_cote, $i_depose_ad, $st_idf_dept_depose_ad, $i_liasse_consult, $st_info_compl)
= $connexionBD->sql_select_liste("select cote_liasse, in_liasse_depose_ad, idf_dept_depose_ad, ".
                                 "       in_liasse_consultable, info_complementaires ".
								 "from liasse ".
								 "where cote_liasse='".$gst_cote_liasse."'");
$a_depts_depose_ad = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM departement order by nom");
if($i_depose_ad == 1) {
	$st_depose_ad = "Oui";
	$st_dept_depose_ad = $a_depts_depose_ad[$st_idf_dept_depose_ad];
	}
else {
	$st_depose_ad = "Non";
	$st_dept_depose_ad = '';
	}
if($i_liasse_consult == 1)
	$st_liasse_consult = "Oui";
else
	$st_liasse_consult = "Non";

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<Head>\n");
print('<meta http-equiv="content-language" content="fr">');
print('<link rel="shortcut icon" href="images/favicon.ico">');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script language=\"JavaScript\">");
print("function Sortie()");
print("{ window.close(); }");
print("</script>");
print('<title>Base AGC: Reponses a une recherche de liasse - Infos sur la liasse</title>');
print('</Head>');
print("<body>");
print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return Sortie()\">");
print('<div align=center>');
print("<img src= '$gst_url_site/images/LogoAGC.jpg' alt='Logo AGC'/><br><br>"); 
print("</div><br><br>");
print('<div align=center>');
print("Informations sur la liasse $st_cote<br><br>");
print("<table border=1>");
print("<tr><th>Liasse déposée aux AD</th><td>".$st_depose_ad."</td></tr>");
print("<tr><th>Département AD</th><td>".$st_dept_depose_ad."</td></tr>");
print("<tr><th>Liasse consultable</th><td>".$st_liasse_consult."</td></tr>");
print("<tr><th>Informations complémentaires</th><td>".$st_info_compl."</td></tr>");
print("</table>");
print("<br><input type=submit value='Fermer'></div>");
print('</form>');
