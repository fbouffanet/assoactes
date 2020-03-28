<?php

session_start();

require_once('../v4/Commun/commun.php');
require_once('../v4/Commun/constantes.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/config.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<Head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'>");
print("<script src='VerifieChampsRecherche.js' type='text/javascript'></script>\n");

//script Google Analytics -- debut
print('<script type="text/javascript">');
  print("var _gaq = _gaq || [];");
  print("_gaq.push(['_setAccount', 'UA-9306738-6']);");
  print("_gaq.push(['_trackPageview']);");
  print("(function() {");
    print("var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;");
    print("ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';");
    print("var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);");
  print("})();");
print('</script>');
//script Google Analytics -- fin
print("<title>Geneabank AGC: Recherches</title>");
print("</head>");

print('<body>');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$gst_type_recherche         = isset($_GET['recherche']) ? $_GET['recherche'] : '';

if ($gst_type_recherche=='nouvelle')
{
  $gi_idf_source        = '0';
  $gi_idf_canton        = '0';
  $gi_idf_type_acte     = '0';
  $gi_annee_min         = '';
  $gi_annee_max         = '';

  $gst_nom_epx          = '';
  $gst_prenom_epx       = '';
  $gst_variantes_epx    = 'oui';
  $gst_nom_epse         = '';
  $gst_prenom_epse      = '';
  $gst_variantes_epse   = 'oui';
  $gi_idf_type_presence = '0';
  $gst_sexe             = '0';
  $gst_nom              = '';
  $gst_prenom           = '';
  $gst_variantes        = 'oui';

}
else
{
  $gi_idf_source      = isset($_SESSION['gbk_idf_source']) ? $_SESSION['gbk_idf_source']: '0';
  $gi_idf_canton      = isset($_SESSION['gbk_idf_canton']) ? $_SESSION['gbk_idf_canton']: '0';
  $gi_idf_type_acte     = isset($_SESSION['gbk_idf_type_acte']) ? $_SESSION['gbk_idf_type_acte']: '0';
  $gi_annee_min         = isset($_SESSION['gbk_annee_min']) ? $_SESSION['gbk_annee_min']: '';
  $gi_annee_max         = isset($_SESSION['gbk_annee_max']) ? $_SESSION['gbk_annee_max']: '';

  $gst_nom_epx          = isset($_SESSION['gbk_nom_epx']) ? $_SESSION['gbk_nom_epx']: '';
  $gst_prenom_epx       = isset($_SESSION['gbk_prenom_epx']) ? $_SESSION['gbk_prenom_epx']: '';
  $gst_variantes_epx    = isset($_SESSION['gbk_variantes_epx']) ? $_SESSION['gbk_variantes_epx']: 'oui';
  $gst_nom_epse         = isset($_SESSION['gbk_nom_epse']) ? $_SESSION['gbk_nom_epse']: '';
  $gst_prenom_epse      = isset($_SESSION['gbk_prenom_epse']) ? $_SESSION['gbk_prenom_epse']: '';
  $gst_variantes_epse   = isset($_SESSION['gbk_variantes_epse']) ? $_SESSION['gbk_variantes_epse']: 'oui';
  $gst_sexe             = isset($_SESSION['gbk_sexe']) ? $_SESSION['gbk_sexe']: '0';
  $gi_idf_type_presence = isset($_SESSION['gbk_idf_type_presence']) ? $_SESSION['gbk_idf_type_presence']: '0';
  $gst_nom              = isset($_SESSION['gbk_nom']) ? $_SESSION['gbk_nom']: '';
  $gst_prenom           = isset($_SESSION['gbk_prenom']) ? $_SESSION['gbk_prenom']: '';
  $gst_variantes        = isset($_SESSION['gbk_variantes']) ? $_SESSION['gbk_variantes']: 'oui';
}

unset($_SESSION['gbk_idf_source']);
unset($_SESSION['gbk_idf_canton']);
unset($_SESSION['gbk_idf_type_acte']);
unset($_SESSION['gbk_annee_min']);
unset($_SESSION['gbk_annee_max']);
unset($_SESSION['gbk_nom_epx']);
unset($_SESSION['gbk_prenom_epx']);
unset($_SESSION['gbk_variantes_epx']);
unset($_SESSION['gbk_nom_epse']);
unset($_SESSION['gbk_prenom_epse']);
unset($_SESSION['gbk_variantes_epse']);

unset($_SESSION['gbk_sexe']);
unset($_SESSION['gbk_nom']);
unset($_SESSION['gbk_prenom']);
unset($_SESSION['gbk_variantes']);

$a_cantons = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM canton order by nom");
$a_types_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_acte order by nom");
$a_types_presence = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence order by nom");
$a_types_presence[0] = 'Toutes';

print("<form name=recherche method=post action=\"\">");
print('<div align=center>');
print("<input type=hidden name=recherche value=\"\">");
print('<div class=alignCenter>');
print('<a href="https://www.genea16.net"><img src="images/logo_AGC250.jpg" border="0" width="100" height="100" alt="LogoAGC"></a><img src="https://www.geneabank.org/pictures/logo4.jpg" width="233" height="104" alt="LogoGbk">');
print('</div><br>');

print('<div class=alignCenter>Ces registres concernent la Charente et sont accessibles via le syst&egrave;me <a href="https://www.geneabank.org/">G&eacute;n&eacute;aBank</a> et le <a href="https://www.genea16.net">site</a> de l\'AGC.</div>');
print('<div class=alignCenter>Par ailleurs, vous pouvez consulter librement et compl&eacute;ter les <a href="https://www.genea16.net/?q=articles/tables-decennales-des-mariages-de-la-charente" target=\"blank\">tables d&eacute;cennales de mariages du 19&egrave;me si&egrave;cle</a> sur le site de l\'AGC</div>');
print('<br><div class="PAVE">Registres de l\'Association G&eacute;n&eacute;alogique de la Charente</div><br>');

print('<div align=center> Type d\'acte: <select name="idf_type_acte" >');
$a_types_acte[0] = 'Tous';
print(chaine_select_options($gi_idf_type_acte,$a_types_acte));
print('</select>');
print(" Ann&eacute;es de <input type=text name=annee_min size =4 value=\"$gi_annee_min\"> &agrave; <input type=text name=annee_max size=4 value=\"$gi_annee_max\">");
print('</div><br>');

print('<div align=center>');
print('Canton: <select name="idf_canton" >');
$a_cantons[0] = 'Tous';
print(chaine_select_options($gi_idf_canton,$a_cantons));
print('</select><br></div><br></div>');

print('<div CLASS=PAVE>');
print('Recherche par couple');
print('</div>');

print('<div align=center><br>');

print("Nom Epoux: <input type=text name=nom_epx size=15 maxlength=30 value=\"$gst_nom_epx\" onKeyPress=\"SoumissionCouple(0,event)\"> Pr&eacute;nom Epoux: <input type=text name=prenom_epx size=15 maxlength=35 value=\"$gst_prenom_epx\" onKeyPress=\"SoumissionCouple(0,event)\"> ");
print(' Recherche par variantes connues:');
if ($gst_variantes_epx=='')
   print('<input type=checkbox name=variantes_epx value=oui >');
else
   print('<input type=checkbox name=variantes_epx value=oui checked>');   

print('<br></div>');

print('<div align=center><br>');

print("Nom Epouse: <input type=text name=nom_epse size=15 maxlength=30 value=\"$gst_nom_epse\" onKeyPress=\"SoumissionCouple(0,event)\"> Pr&eacute;nom Epouse: <input type=text name=prenom_epse size=15 maxlength=35 value=\"$gst_prenom_epse\" onKeyPress=\"SoumissionCouple(0,event)\"> ");

print(' Recherche par variantes connues:');
if ($gst_variantes_epse=='')
   print('<input type=checkbox name=variantes_epse value=oui >');
else
   print('<input type=checkbox name=variantes_epse value=oui checked>'); 
print('<br></div>');

print('<div align=center><br><input type=button name=Rechercher value="Rechercher le couple" onClick="VerifieChampsRecherche(0,\'RechercheCouple\')"> <input type=button value="Effacer tous les Champs"  onClick="RazChamps(0)"> <br><br></div>');

print('<div CLASS=PAVE>');
print('Recherche par personne');
print('</div>');

print('<div align=center><br>');
$ga_sexe[0] = 'Tous';
print('Sexe: <select name="sexe" > ');
print(chaine_select_options($gst_sexe,$ga_sexe));
print('</select> ');

print("Nom: <input type=text name=nom size=15 maxlength=30 value=\"$gst_nom\" onKeyPress=\"SoumissionPersonne(0,event)\" > Pr&eacute;nom: <input type=text name=prenom size=15 maxlength=30 value=\"$gst_prenom\" onKeyPress=\"SoumissionPersonne(0,event)\">" );
print(' Type de pr&eacute;sence<sup>*</sup>: <select name="idf_type_presence" >');
print(chaine_select_options($gi_idf_type_presence,$a_types_presence));
print('</select>');
print(' Recherche par variantes connues:');
if ($gst_variantes=='')
   print('<input type=checkbox name=variantes value=oui >');
else
   print('<input type=checkbox name=variantes value=oui checked>'); 

print('<br></div>');
print('<div class=alignCenter>(*) Nim&egrave;gue ne renseignant pas le sexe d\'un parrain, t&eacute;moin ou marraine, ne pas le sp&eacute;cifier dans une recherche de ce type<br></div>');
print('<div align=center><input type=button name=Rechercher value="Rechercher la personne" onClick="VerifieChampsRecherche(0,\'RecherchePersonne\')"> <input type=button value="Effacer tous les Champs"  onClick="RazChamps(0)"></div> ');
print("</form>");
print('<div class=alignCenter><br><a href="https://www.genea16.net" class=LienAGC>Association G&eacute;n&eacute;alogique de la Charente</a></div>');
print("</body></html>");
$connexionBD->ferme();
?>