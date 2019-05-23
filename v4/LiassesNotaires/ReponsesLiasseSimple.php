<?php

require_once('Commun/Identification.php');
require_once('Commun/commun.php');
require_once('Commun/constantes.php');
require_once('Commun/config.php');
require_once('Commun/ConnexionBD.php');
require_once('RequeteRecherche.php');
require_once('Commun/PaginationTableau.php');
require_once('Commun/Benchmark.inc');
require_once('Commun/VerificationDroits.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<Head>\n");
print('<meta http-equiv="content-language" content="fr">');
print('<link rel="shortcut icon" href="images/favicon.ico">');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/menu.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");

print("</script>");
print('<title>Base AGC: Reponses a une recherche de liasse</title>');
print('</Head>');

$a_clauses = array();
//**pc**// ajout v2
//**pc**// à remplacer par une image du site
$st_icone_info = 'images/infos.png';
//**pc**// fin ajout v2

/* ------------------------------------------------------
   récupération des critères de recherche 
*/
$i_session_idf_commune				= empty($_SESSION['idf_commune_recherche_rls']) ? '0' : $_SESSION['idf_commune_recherche_rls'];
$i_session_rayon					= empty($_SESSION['rayon_rls']) ? '' : $_SESSION['rayon_rls'];
$st_session_paroisses_rattachees	= empty($_SESSION['paroisses_rattachees_rls']) ? '' : $_SESSION['paroisses_rattachees_rls'];
$i_session_annee_min				= empty($_SESSION['annee_min_rls']) ? '' : $_SESSION['annee_min_rls'];
$i_session_annee_max				= empty($_SESSION['annee_max_rls']) ? '' : $_SESSION['annee_max_rls'];
$st_session_nom_notaire				= empty($_SESSION['nom_notaire_rls']) ? '' : $_SESSION['nom_notaire_rls'];
$st_session_prenom_notaire			= empty($_SESSION['prenom_notaire_rls']) ? '' : $_SESSION['prenom_notaire_rls'];
$st_session_idf_serie_liasse		= empty($_SESSION['idf_serie_liasse_rls']) ? '' : $_SESSION['idf_serie_liasse_rls'];
$st_session_cote_debut				= empty($_SESSION['cote_debut_rls']) ? '' : $_SESSION['cote_debut_rls'];
$st_session_cote_fin				= empty($_SESSION['cote_fin_rls']) ? '' : $_SESSION['cote_fin_rls'];
$i_session_idf_forme_liasse			= empty($_SESSION['idf_forme_liasse_rls']) ? '0' : $_SESSION['idf_forme_liasse_rls'];
$st_session_repertoire				= empty($_SESSION['repertoire_rls']) ? 'non' : $_SESSION['repertoire_rls'];
$st_session_sans_notaire			= empty($_SESSION['sans_notaire_rls']) ? 'non' : $_SESSION['sans_notaire_rls'];
$st_session_sans_periode			= empty($_SESSION['sans_periode_rls']) ? 'non' : $_SESSION['sans_periode_rls'];

$gi_idf_commune						= empty($_POST['idf_commune_recherche']) ? $i_session_idf_commune : (int) $_POST['idf_commune_recherche'];
$gi_rayon							= empty($_POST['rayon']) ? $i_session_rayon : (int) trim($_POST['rayon']);
$gst_paroisses_rattachees			= empty($_POST['paroisses_rattachees']) ? $st_session_paroisses_rattachees : trim($_POST['paroisses_rattachees']);
$gi_annee_min						= empty($_POST['annee_min']) ? $i_session_annee_min: (int) trim($_POST['annee_min']);
$gi_annee_max						= empty($_POST['annee_max']) ? $i_session_annee_max: (int) trim($_POST['annee_max']);
$gst_nom_notaire					= empty($_POST['nom_notaire']) ? $st_session_nom_notaire : trim($_POST['nom_notaire']);
$gst_prenom_notaire					= empty($_POST['prenom_notaire']) ? $st_session_prenom_notaire : trim($_POST['prenom_notaire']);
$gst_idf_serie_liasse				= empty($_POST['idf_serie_liasse']) ? $st_session_idf_serie_liasse : $_POST['idf_serie_liasse'];
$gst_cote_debut						= empty($_POST['cote_debut']) ? $st_session_cote_debut : trim($_POST['cote_debut']);
$gst_cote_fin						= empty($_POST['cote_fin']) ? $st_session_cote_fin : trim($_POST['cote_fin']);
$gi_idf_forme_liasse				= empty($_POST['idf_forme_liasse']) ? $i_session_idf_forme_liasse: (int) trim($_POST['idf_forme_liasse']);
$gst_repertoire						= empty($_POST['repertoire']) ? $st_session_repertoire : trim($_POST['repertoire']);
$gst_sans_notaire					= empty($_POST['sans_notaire']) ? $st_session_sans_notaire : trim($_POST['sans_notaire']);
$gst_sans_periode					= empty($_POST['sans_periode']) ? $st_session_sans_periode : trim($_POST['sans_periode']);

if (get_magic_quotes_gpc())
{
  if (ini_get('magic_quotes_sybase'))
  {
    $gst_nom        = empty($_POST['nom_notaire'])? $st_session_nom_notaire :str_replace("''", "'", substr(trim($_POST['nom_notaire']),0,30));
    $gst_prenom     = empty($_POST['prenom_notaire'])? $st_session_prenom_notaire :str_replace("''", "'", substr(trim($_POST['prenom_notaire']),0,20));
  } 
  else
  {
     $gst_nom        = empty($_POST['nom_notaire'])? $st_session_nom_notaire : stripslashes(substr(trim($_POST['nom_notaire']),0,30));
     $gst_prenom     = empty($_POST['prenom_notaire'])? $st_session_prenom_notaire :stripslashes(substr(trim($_POST['prenom_notaire']),0,20));
  }
}
else 
{
     $gst_nom        = empty($_POST['nom_notaire'])? $st_session_nom_notaire :substr(trim($_POST['nom_notaire']),0,30);
     $gst_prenom     = empty($_POST['prenom_notaire'])? $st_session_prenom_notaire :substr(trim($_POST['prenom_notaire']),0,20);
}

$gi_get_num_page = empty($_GET['num_page']) ? 1 : (int) $_GET['num_page'];
$gi_num_page = empty($_POST['num_page']) ? $gi_get_num_page : (int) $_POST['num_page'];

$st_communes_voisines   = '';

$_SESSION['idf_commune_recherche_rls']		= $gi_idf_commune;
$_SESSION['rayon_rls']						= $gi_rayon;
$_SESSION['paroisses_rattachees_rls']		= $gst_paroisses_rattachees;
$_SESSION['annee_min_rls']					= $gi_annee_min;
$_SESSION['annee_max_rls']					= $gi_annee_max;

$_SESSION['nom_notaire_rls']				= $gst_nom_notaire;
$_SESSION['prenom_notaire_rls']				= $gst_prenom_notaire;
$_SESSION['idf_serie_liasse_rls']			= $gst_idf_serie_liasse;
$_SESSION['cote_debut_rls']					= $gst_cote_debut;
$_SESSION['cote_fin_rls']					= $gst_cote_fin;
$_SESSION['repertoire_rls']					= $gst_repertoire;
$_SESSION['sans_notaire_rls']				= $gst_sans_notaire;
$_SESSION['sans_periode_rls']				= $gst_sans_periode;

$b_pers_def = false;

if ($gst_nom_notaire!= '')
   $b_pers_def = true;

/* ------------------------------------------------------
   constitution de la log 
*/   
$gst_adresse_ip = $_SERVER['REMOTE_ADDR'];
$pf=@fopen("$gst_rep_logs/requetes_liasse.log",'a');
list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
$i_mois++;
$i_annee+=1900;
$st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
$st_chaine_log = join(';',array($st_date_log,$_SESSION['ident'],$gst_adresse_ip,$gst_nom_notaire,$gst_prenom_notaire,
                                $gst_idf_serie_liasse,$gst_cote_debut,$gst_cote_fin,$gi_idf_commune,$gi_rayon,
								$gi_annee_min,$gi_annee_max));
@fwrite($pf,"$st_chaine_log\n"); 
@fclose($pf);

print("<body>");
print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");     
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
//**pc** 
require_once("Commun/menu.php");
$requeteRecherche = new RequeteRecherche($connexionBD);    

/* ------------------------------------------------------
   constitution de la requête
*/   
$a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte");

$gst_requete_nb_liasses= "SELECT l.cote_liasse, n.nom_notaire, n.prenom_notaire, ".
                         "       min(d.date_debut_periode) as date_tri, l.libelle_annees, ".
						 "       f.nom as forme, n.idf_commune_etude ".
						 "FROM liasse l join forme_liasse f on l.idf_forme_liasse = f.idf ".
						 "     left outer join liasse_dates d on d.cote_liasse=l.cote_liasse ".
						 "     left outer join liasse_notaire n on n.cote_liasse=l.cote_liasse ";

if ($gi_idf_commune == -9)
	$a_clauses[]="n.idf_commune_etude is null or n.idf_commune_etude=0";
elseif ($gi_idf_commune!=0)
   $a_clauses[]="n.idf_commune_etude ".$requeteRecherche->clause_droite_commune($gi_idf_commune,$gi_rayon,$gst_paroisses_rattachees);

if ($gi_annee_min != '')
	$gi_date_min = "str_to_date(concat('$gi_annee_min' , '-01-01'),'%Y-%m-%d')";
if ($gi_annee_max != '')
	$gi_date_max = "str_to_date(concat('$gi_annee_max' , '-12-31'),'%Y-%m-%d')";
if ($gi_annee_min != '' && $gi_annee_max != '')
	$a_clauses[]="(( d.date_debut_periode<=$gi_date_min and d.date_fin_periode>=$gi_date_min ) or ( d.date_debut_periode<=$gi_date_max and d.date_fin_periode>=$gi_date_max) or (d.date_debut_periode>=$gi_date_min and d.date_fin_periode<=$gi_date_max ))" ;
elseif ($gi_annee_min != '')
	$a_clauses[]="d.date_fin_periode>=$gi_date_min";
elseif ($gi_annee_max != '')
	$a_clauses[]="d.date_debut_periode<=$gi_date_max";

if ($gst_repertoire=='oui')
   $a_clauses[]="l.idf_forme_liasse=9";

if ($gst_sans_notaire=='oui')
   $a_clauses[]="n.cote_liasse is null";
   
if ($gst_sans_periode=='oui')
   $a_clauses[]="D.cote_liasse is null";

if ($gst_nom_notaire!='' && $gst_nom_notaire!='*')
{
	$gst_nom_notaire = strtoupper($gst_nom_notaire);
	$a_clauses[]="n.nom_notaire ".$requeteRecherche->clause_droite_patronyme($gst_nom_notaire, '');
	if ($gst_prenom_notaire!='')
		$a_clauses[]="n.prenom_notaire ".$requeteRecherche->clause_droite_prenom($gst_prenom_notaire);
	}

if ($gst_idf_serie_liasse != '')
{
	if ($gst_cote_debut != '' && $gst_cote_fin != '')
	{
		$gst_cote_debut = $gst_idf_serie_liasse.'-'.str_pad($gst_cote_debut,5,'0',STR_PAD_LEFT);
		$gst_cote_fin = $gst_idf_serie_liasse.'-'.str_pad($gst_cote_fin,5,'0',STR_PAD_LEFT);
		$a_clauses[]="l.cote_liasse>='".$gst_cote_debut."' and l.cote_liasse<='".$gst_cote_fin."'" ;
	}
	elseif ($gst_cote_debut != '')
	{
		$gst_cote_debut = $gst_idf_serie_liasse.'-'.str_pad($gst_cote_debut,5,'0',STR_PAD_LEFT);
		$a_clauses[]="l.cote_liasse>='".$gst_cote_debut."'";
	}
	elseif ($gst_cote_fin != '')
	{
		$gst_cote_fin = $gst_idf_serie_liasse.'-'.str_pad($gst_cote_fin,5,'0',STR_PAD_LEFT);
		$a_clauses[]="l.cote_liasse<='".$gst_cote_fin."'";
	}
}
	
if ($gst_repertoire=='oui')
	$st_tri = " order by 1";
elseif ($gst_nom_notaire!='' && $gst_nom_notaire!='*')
	$st_tri = " order by 2,3,1";
else
	$st_tri = "order by 4,1";

$st_clauses = implode(" and ",$a_clauses);
if ($st_clauses != '')
	$st_where = ' where ';
else
	$st_where = '';
	
$st_groupe = "group by l.cote_liasse,l.libelle_annees,f.nom,n.nom_notaire,n.prenom_notaire,n.idf_commune_etude";

$gst_requete_liasses = "$gst_requete_nb_liasses $st_where $st_clauses $st_groupe $st_tri";
//print($gst_requete_liasses);
/* ------------------------------------------------------
   affichage des critères de recherche 
*/   
print("<div id=col_paroisses class=\"centre\">");
$st_criteres = "Recherche des liasses: ";
if ($gst_nom_notaire != '')
	$st_criteres .= "Notaire s&eacute;lectionn&eacute;: $gst_prenom_notaire $gst_nom_notaire";
else
	$st_criteres .= "Pas de notaire s&eacute;lectionn&eacute;";
$st_criteres .= "\n";

if ($gst_cote_debut!='' && $gst_cote_fin!='')
  $st_criteres .= "Cotes:  de $gst_cote_debut &agrave; $gst_cote_fin";
else if ($gst_cote_debut!='')
  $st_criteres .= "Cotes:  &agrave; partir de $gst_cote_debut";
else if ($gi_annee_max!='')
  $st_criteres .= "Cotes:  jusqu'&agrave; $gst_cote_fin";
else
	$st_criteres .= "Pas de cote s&eacute;lectionn&eacutee;";
$st_criteres .= "\n";     

if ($gi_annee_min!='' && $gi_annee_max!='')
  $st_criteres .= "P&eacute;riode:  de $gi_annee_min &agrave; $gi_annee_max";
else if ($gi_annee_min!='')
  $st_criteres .= "P&eacute;riode:  &agrave; partir de $gi_annee_min";
else if ($gi_annee_max!='')
  $st_criteres .= "P&eacute;riode:  jusqu'en $gi_annee_max";
else
  $st_criteres .= 'Pas de p&eacute;riode selectionn&eacute;e';   
$st_criteres .= "\n";     

if ($gi_idf_commune!=0)
{
   $st_nom_commune = $connexionBD->sql_select1("select nom from commune_acte where idf=$gi_idf_commune");
   $st_criteres .= "Commune s&eacute;lectionn&eacute;e: ".$st_nom_commune;
}
else
   $st_criteres .=  'Pas de commune selectionn&eacute;e';   
$st_criteres .= "\n";
print(nl2br($st_criteres));


if (count(array_values($requeteRecherche->communes_voisines()))>1)
{
   $st_communes_voisines=join("\n",array_values($requeteRecherche->communes_voisines()));   
   print("Paroisses voisines ou rattach&eacute;es ");
   if ($gi_rayon!='')
   {
      print("(avec recherches dans un rayon de $gi_rayon km)\n");
      $st_criteres .= " (avec recherches dans un rayon de $gi_rayon km)\n";
   }
   print("<div class=alignLeft><textarea rows=6 cols=40>$st_communes_voisines</textarea></div>");  
}
print("</div>");  
/*if ((trim($gst_nom_notaire)== '*') || strlen(trim($gst_nom_notaire))<3 )
{
   print("<div>Le nom doit comporter au moins trois caract&egrave;res</div>\n");
   print("<div><a href=RecherchesLiasses.php?recherche=nouvelle class=\"RetourReponses\">Commencer une nouvelle recherche</a><br></div>");
   exit();
}
*/

$st_clauses = implode(" and ",$a_clauses);

$etape_prec = getmicrotime();
$a_liasses=$connexionBD->sql_select_multiple($gst_requete_liasses);
print benchmark("Recherche ");

$i_nb_liasses = count($a_liasses);
print("<div class=alignCenter>$i_nb_liasses occurrences trouv&eacute;es. ");
print('<div id="curseur" class="infobulle"></div>');
if ($i_nb_liasses>$gi_nb_max_reponses)
{
  print("Seules les $gi_nb_max_reponses premi&egrave;res sont affich&eacute;es");
   $a_liasses = array_slice($a_liasses,0,$gi_nb_max_reponses);
}
print("<br></div>");
if ($i_nb_liasses>0)
{
  function premier_elem($a_tab) {
      return $a_tab[0];
  }
  $a_idf_acte=array_map("premier_elem",$a_liasses);
  $gst_requete_intv = "select idf_acte,idf,sexe,patronyme, prenom from personne where idf_acte in (".join(',',$a_idf_acte).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,idf";
  $etape_prec = getmicrotime();

  $a_tableau = array();
  foreach ($a_liasses as $a_liasse)
  {

    list($st_cote_liasse, $st_nom_notaire, $st_prenom_notaire, $st_date_tri, $st_libelle_annees, 
	     $i_idf_forme_liasse, $i_idf_commune_etude) = $a_liasse;
    $st_detail = "<a href=\"InfosLiasse.php?cote_liasse=$st_cote_liasse\" ".
	             "        onClick=\"open(this.href,'InfosLiasse','width=600,height=500,resizable=yes,scrollbars=yes');return false;\"><img src=\"./$st_icone_info\" alt=\"info\" ></a>";

	if( $i_idf_commune_etude=='' || $i_idf_commune_etude==0)
		$a_tableau[] = array($st_cote_liasse,$st_nom_notaire,$st_prenom_notaire,'', $st_libelle_annees,$i_idf_forme_liasse, $st_detail); 
	else
		$a_tableau[] = array($st_cote_liasse,$st_nom_notaire,$st_prenom_notaire,$a_communes_acte[$i_idf_commune_etude], $st_libelle_annees, $i_idf_forme_liasse, $st_detail); 	
  }
  $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_tableau),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,
                                      array('Cote','Nom notaire','Pr&eacute;nom notaire','Commune &eacute;tude','Dates',
									        'Forme de liasse',''));
  $pagination->init_page_cour($gi_num_page);
  $pagination->affiche_entete_liens_navigation();
  $pagination->affiche_tableau_simple($a_tableau);  
  $pagination->affiche_entete_liens_navigation();

}
else
{
   print('<div style="text-align:center">');
   print("Aucun r&eacute;sultat<br>");
   print("V&eacute;rifiez que vous n'avez pas mis trop de contraintes (commune,type d'acte,...)<br>");
   print("<div class=IMPORTANT><br>");
   print("Rappel de vos crit&egrave;res: <br>");
   print(nl2br($st_criteres));
   print("</div>");
   print("</div>");
}
print("<div align=center><br>");
print("<a href=\"RecherchesLiasses.php\" class=\"RetourReponses\">Revenir &agrave; la page de recherche</a>");
print("<a href=\"RecherchesLiasses.php?recherche=nouvelle\" class=\"RetourReponses\">Commencer une nouvelle recherche</a>");
print("</div>");
print ("</form>");
print("</body></html>");
//$connexionBD->ferme(); 
?>