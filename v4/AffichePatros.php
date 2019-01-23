<?php
session_start();

require_once('Commun/config.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');
require_once('Commun/commun.php');
require_once('RequeteRecherche.php');
require_once('Commun/PaginationTableau.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<Head>\n");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');

print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/menu.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/select2.min.js' type='text/javascript'></script>"); 
print("<script type='text/javascript'>");
?>
$(document).ready(function() {
  $(".js-select-avec-recherche").select2();
});
<?php
print("</script>");
print("<title>Base AGC: Recherche d'un patronyme</title>");
print('</Head>');
/**
 *  Affiche le menu de demande
 */ 
function affiche_menu($gi_idf_commune,$gi_rayon,$gi_idf_source,$pst_msg)
{
  global $connexionBD;
  print("<form name=\"Patros\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  $a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte order by nom");
  $a_sources = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM source order by nom collate latin1_german1_ci");
  print("<div align=center>");
  print("<input type=hidden name=mode value=\"LISTE\">");
  print("<input type=hidden name=idf_source value=0>");
  if (!empty($pst_msg)) print("<div align=center class=IMPORTANT>$pst_msg<div><br>\n");
  print("<div>Patronyme: <input type=text name=patronyme size=15 maxlength=30><br></div>");
  print('<div>Recherche par variantes connues:');
  print('<input type=checkbox name=variantes_pat value=oui checked><br></div>');
  print('<span style="text-align:center"><br>');
  print('Commune/Paroisse : <select name="idf_commune_patro" id="idf_commune_patro" class="js-select-avec-recherche">');
  $a_toutes_communes = array(''=>'Toutes')+$a_communes_acte;
  print(chaine_select_options($gi_idf_commune,$a_toutes_communes));
  print('</select>');
  print(" Rayon de recherche : <input type=text name=rayon_patro id='rayon_patro' size=2 MAXLENGTH=2 value=\"$gi_rayon\"> Km<br>");
  print('Source: <select name=idf_source id=idf_source>');
  $a_sources[0] = 'Toutes';
  print(chaine_select_options($gi_idf_source,$a_sources));
  print('</select>');
  print('<div><br><input type=submit name=Rechercher value="Rechercher le patronyme"><br></div>'); 
  print("</div>");
  print ("</form>");
  unset($_SESSION['variantes_pat']);
  unset($_SESSION['patronyme']);
  unset($_SESSION['mode']);
  unset($_SESSION['tri_pat']);
  unset($_SESSION['num_page_pat']);
  unset($_SESSION['idf_commune_patro']);
  unset($_SESSION['rayon_patro']); 
}

print("\n<body>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("Commun/menu.php");

$i_session_idf_source = empty($_SESSION['idf_source']) ? 0 : $_SESSION['idf_source'];
$gi_idf_source=isset($_POST['idf_source']) ? (int) $_POST['idf_source']:$i_session_idf_source;
$i_session_num_page = isset($_SESSION['num_page_pat']) ? $_SESSION['num_page_pat'] : 1;
$gi_num_page = empty($_POST['num_page_pat']) ? $i_session_num_page : (int) $_POST['num_page_pat'];
$st_session_tri = empty($_SESSION['tri_pat']) ? 'patronyme' : $_SESSION['tri_pat'];
$gst_tri = empty($_GET['tri_pat']) ? $st_session_tri : $_GET['tri_pat'];

$i_session_idf_commune = empty($_SESSION['idf_commune_patro']) ? 0 : $_SESSION['idf_commune_patro'];
$gi_idf_commune=isset($_POST['idf_commune_patro']) ? (int) $_POST['idf_commune_patro']:$i_session_idf_commune;
$i_session_rayon = empty($_SESSION['rayon_patro']) ? 0 : $_SESSION['rayon_patro'];
$gi_rayon=isset($_POST['rayon_patro']) ? (int) $_POST['rayon_patro']:$i_session_rayon;

if (isset ($_GET['tri_pat']))
   $gi_num_page=1;

$st_session_mode = empty($_SESSION['mode']) ? 'DEMANDE' : $_SESSION['mode'];   
$gst_mode = empty($_POST['mode']) ? $st_session_mode: $_POST['mode'] ;

$st_session_patronyme = empty($_SESSION['patronyme']) ?  '' :$_SESSION['patronyme'];
$st_session_variantes = empty($_SESSION['variantes_pat']) ?  '' :$_SESSION['variantes_pat'];

if (get_magic_quotes_gpc())
{
	if (ini_get('magic_quotes_sybase'))
		$gst_patronyme        = empty($_POST['patronyme'])? $st_session_patronyme :str_replace("''", "'", substr(trim($_POST['patronyme']),0,30)); 
	else
		$gst_patronyme        = empty($_POST['patronyme'])? $st_session_patronyme : stripslashes(substr(trim($_POST['patronyme']),0,30));
}
else 
	$gst_patronyme        = empty($_POST['patronyme'])? $st_session_patronyme :substr(trim($_POST['patronyme']),0,30);

$st_variantes = empty($_POST['variantes_pat']) ?  $st_session_variantes :$_POST['variantes_pat'] ;

$_SESSION['patronyme'] = $gst_patronyme;
$_SESSION['variantes_pat'] = $st_variantes;
$_SESSION['idf_source'] = $gi_idf_source;
$_SESSION['num_page_pat'] = $gi_num_page;
$_SESSION['idf_commune_patro'] = $gi_idf_commune;
$_SESSION['rayon_patro'] = $gi_rayon;
   
switch ($gst_mode)
{
	case 'DEMANDE':	  
      affiche_menu($gi_idf_commune,$gi_rayon,$gi_idf_source,'');
   break;
	case 'LISTE':
		$_SESSION['mode']=$gst_mode; 
		$_SESSION['tri_pat']=$gst_tri;
		$gst_patronyme  = preg_replace('/\*+/','%', $gst_patronyme);
		if (($gst_patronyme== '*') || (empty($gst_patronyme)) || (strlen($gst_patronyme)<2))
			affiche_menu($gi_idf_commune,$gi_rayon,$gi_idf_source,"Le patronyme doit comporter au moins deux caract&egrave;res");
		else
		{
			print("<div class=alignCenter><input type=hidden name=mode value=LISTE>");   
			$requeteRecherche = new RequeteRecherche($connexionBD);
			switch ($gst_tri) {
				case 'patronyme': $st_tri_sql = ' order by sp.patronyme,ca.nom,ta.nom';break;
				case 'commune': $st_tri_sql = ' order by ca.nom,sp.patronyme,ta.nom';break;
				case 'type_acte': $st_tri_sql = ' order by ta.nom,sp.patronyme,ca.nom';break;
				case 'nb_actes': $st_tri_sql = ' order by sp.nb_personnes desc,ca.nom,sp.patronyme';
			break;
		} 
		if (!empty($gi_idf_source))
			$st_requete = "select sp.patronyme,sp.idf_commune,ca.nom,sp.idf_type_acte,ta.nom,sp.annee_min,sp.annee_max,sp.nb_personnes from stats_patronyme sp join commune_acte ca on (sp.idf_commune=ca.idf) join type_acte ta on (sp.idf_type_acte=ta.idf) where idf_source=$gi_idf_source and sp.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.",".IDF_NAISSANCE.",".IDF_DECES.") and sp.patronyme ".$requeteRecherche->clause_droite_patronyme($gst_patronyme,$st_variantes,1);
		else
			$st_requete = "select sp.patronyme,sp.idf_commune,ca.nom,sp.idf_type_acte,ta.nom,sp.annee_min,sp.annee_max,sp.nb_personnes from stats_patronyme sp join commune_acte ca on (sp.idf_commune=ca.idf) join type_acte ta on (sp.idf_type_acte=ta.idf) where sp.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.",".IDF_NAISSANCE.",".IDF_DECES.") and sp.patronyme ".$requeteRecherche->clause_droite_patronyme($gst_patronyme,$st_variantes,1);
		if (!empty($gi_idf_commune)) 
			$st_requete .=  " and sp.idf_commune ".$requeteRecherche->clause_droite_commune($gi_idf_commune,$gi_rayon,'oui');
		$st_requete.=$st_tri_sql; 
		//print("Req=$st_requete<br>");
		$a_liste_stats = $connexionBD->sql_select_multiple($st_requete);
		$i_nb_stats =count($a_liste_stats); 
		if ($i_nb_stats!=0)
		{ 
			$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page_pat',$i_nb_stats,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array("<a href=\"".$_SERVER['PHP_SELF']."?tri_pat=patronyme\">Patronyme</a>","<a href=\"".$_SERVER['PHP_SELF']."?tri_pat=commune\">Commune</a>","<a href=\"".$_SERVER['PHP_SELF']."?tri_pat=type_acte\">Type d'acte</a>",'Ann&eacute;e minimale','Ann&eacute;e maximale',"<a href=\"".$_SERVER['PHP_SELF']."?tri_pat=nb_actes\">Nombre de personnes</a>"));
			$a_tableau_affichage = array();
			foreach ($a_liste_stats as $a_stat_patro)
			{
				list($st_patronyme,$i_idf_commune,$st_commune,$i_idf_type_acte,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_pers) = $a_stat_patro;
				if ($gi_idf_source!=0)
					$st_lien_patronyme = "<a href=\"Recherches.php?recherche=nouvelle&amp;idf_src=$gi_idf_source&amp;idf_ca=$i_idf_commune&amp;idf_ta=$i_idf_type_acte&amp;var=N&amp;nom=$st_patronyme\">$st_patronyme</a>";
				else
					$st_lien_patronyme ="<a href=\"Recherches.php?recherche=nouvelle&amp;idf_ca=$i_idf_commune&amp;idf_ta=$i_idf_type_acte&amp;a_min=$i_annee_min&amp;a_max=$i_annee_max&amp;var=N&amp;nom=$st_patronyme\">$st_patronyme</a>" ;    
				$a_tableau_affichage[] = array($st_lien_patronyme,$st_commune,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_pers);
			}
			$pagination->init_page_cour($gi_num_page);
			$pagination->affiche_entete_liste_select('Patros');
			$pagination->affiche_tableau_simple($a_tableau_affichage);
			$pagination->affiche_entete_liste_select('Patros');        
		}
		else
			print("<div align=center><br>Pas de donn&eacute;es</div>\n");
		
		print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
		print("<div align=center><br><input type=hidden name=mode value=\"DEMANDE\">");     
		print('<input type=submit name=Rechercher value="Rechercher un autre patronyme"></div>');
		print ("</form>");
	}
	break;
   default:
     affiche_menu($gi_idf_commune,$gi_rayon,'');  
}
print("</body></html>");


?>