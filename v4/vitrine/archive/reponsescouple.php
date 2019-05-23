<?php

require_once('Commun/Identification.php');
require_once('Commun/config.php');
require_once('Commun/ConnexionBD.php');
require_once('RequeteRecherche.php');
require_once('Commun/PaginationTableau.php');
require_once('Commun/Benchmark.inc');

print("<Head>\n");
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/menu.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
?>
function maj(Formulaire)
{
   
   if (document.forms[Formulaire].num_page)
      document.forms[Formulaire].num_page.value=1;
   document.forms[Formulaire].submit();
}
<?php
print("</script>");
print('</Head>');

$a_requetes           = array();
$a_clauses            = array();

$i_session_idf_source       =  empty($_SESSION['idf_source_recherche']) ? '0' : $_SESSION['idf_source_recherche'];
$i_session_idf_commune      =  empty($_SESSION['idf_commune_recherche']) ? '0' : $_SESSION['idf_commune_recherche'];
$i_session_rayon            =  empty($_SESSION['rayon']) ? '' : $_SESSION['rayon'];
$i_session_idf_type_acte    =  empty($_SESSION['idf_type_acte_recherche']) ? '0' : $_SESSION['idf_type_acte_recherche'];
$i_session_annee_min        =  empty($_SESSION['annee_min']) ? '' : $_SESSION['annee_min'];
$i_session_annee_max        =  empty($_SESSION['annee_max']) ? '' : $_SESSION['annee_max'];

$st_session_nom_epoux       = empty($_SESSION['nom_epx']) ? '' : $_SESSION['nom_epx'];
$st_session_prenom_epoux    = empty($_SESSION['prenom_epx']) ? '' : $_SESSION['prenom_epx'];
$st_session_variantes_epx   = empty($_SESSION['variantes_epx']) ? '' : $_SESSION['variantes_epx'];
$st_session_nom_epouse      = empty($_SESSION['nom_epse']) ? '' : $_SESSION['nom_epse'];
$st_session_prenom_epouse   = empty($_SESSION['prenom_epse']) ? '' : $_SESSION['prenom_epse'];
$st_session_variantes_epse  = empty($_SESSION['variantes_epse']) ? '' : $_SESSION['variantes_epse'];


 
$gi_idf_source              = empty($_POST['idf_source_recherche']) ? $i_session_idf_source : (int) $_POST['idf_source_recherche'];
$gi_idf_commune             = empty($_POST['idf_commune_recherche']) ? $i_session_idf_commune : (int) $_POST['idf_commune_recherche'];
$gi_rayon                   = empty($_POST['rayon']) ? $i_session_rayon : (int) trim($_POST['rayon']);
$gi_idf_type_acte           = empty($_POST['idf_type_acte_recherche']) ? $i_session_idf_type_acte: (int) $_POST['idf_type_acte_recherche'];
$gi_annee_min               = empty($_POST['annee_min']) ? $i_session_annee_min: (int) trim($_POST['annee_min']);
$gi_annee_max               = empty($_POST['annee_max']) ? $i_session_annee_max: (int) trim($_POST['annee_max']);

$gst_nom_epx                = empty($_POST['nom_epx']) ? $st_session_nom_epoux : mysql_escape_string(stripslashes(substr(trim($_POST['nom_epx']),0,30)));
$gst_prenom_epx             = empty($_POST['prenom_epx']) ? $st_session_prenom_epoux: mysql_escape_string(stripslashes(substr(trim($_POST['prenom_epx']),0,35)));
$gst_variantes_epx          = empty($_POST['variantes_epx']) ? $st_session_variantes_epx : $_POST['variantes_epx'];
$gst_nom_epse               = empty($_POST['nom_epse']) ? $st_session_nom_epouse: mysql_escape_string(stripslashes(substr(trim($_POST['nom_epse']),0,30)));
$gst_prenom_epse            = empty($_POST['prenom_epse']) ? $st_session_prenom_epouse: mysql_escape_string(stripslashes(substr(trim($_POST['prenom_epse']),0,35)));
$gst_variantes_epse         = empty($_POST['variantes_epse']) ? $st_session_variantes_epse: $_POST['variantes_epse'];
$st_variantes_epx_trouvees  = '';
$st_variantes_epse_trouvees = '';
$st_communes_voisines       = '';

$_SESSION['idf_source_recherche']     = $gi_idf_source;
$_SESSION['idf_commune_recherche']    = $gi_idf_commune;
$_SESSION['rayon']                    = $gi_rayon;
$_SESSION['idf_type_acte_recherche']  = $gi_idf_type_acte;
$_SESSION['annee_min']                = $gi_annee_min;
$_SESSION['annee_max']                = $gi_annee_max;

$_SESSION['nom_epx']                  = $gst_nom_epx;
$_SESSION['prenom_epx']               = $gst_prenom_epx;
$_SESSION['variantes_epx']            = $gst_variantes_epx;
$_SESSION['nom_epse']                 = $gst_nom_epse;
$_SESSION['prenom_epse']              = $gst_prenom_epse;
$_SESSION['variantes_epse']           = $gst_variantes_epse;

$gi_get_num_page = empty($_GET['num_page']) ? 1 : (int) $_GET['num_page'];
$gi_num_page = empty($_POST['num_page']) ? $gi_get_num_page :(int) $_POST['num_page'];

$b_pers1_def = false;
$b_pers2_def = false;
if ($gst_nom_epx!= '')
   $b_pers1_def = true;
if ($gst_nom_epse!= '')
   $b_pers2_def = true;
   
   
print("<body>");
print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");   
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("Commun/menu.php");

$a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte");
$a_types_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_acte");
$a_types_presence = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence");

$requeteRecherche = new RequeteRecherche($connexionBD);   

$st_erreur_nom = '';
if ((trim($gst_nom_epx)== '*') || strlen(trim($gst_nom_epx))<3 )
$st_erreur_nom ="<div>Le nom de l'&eacute;poux doit comporter au moins trois caract&egrave;res</div>\n"; 
if ((trim($gst_nom_epse)== '*') || strlen(trim($gst_nom_epse))<3 )
$st_erreur_nom .= "<div>Le nom de l'&eacute;pouse doit comporter au moins trois caract&egrave;res</div>\n"; 

if ($st_erreur_nom!='')
{
   print(nl2br($st_erreur_nom));
   print("<a href=Recherches.php class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   exit();
}
$ga_types_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from `type_acte`"); 
   
if (!($b_pers1_def && $b_pers2_def))
{
   print("Deux personnes doivent &ecirc;tre definies"); 
   print("<a href=Recherches.php class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   exit();     
}

$gst_requete_nb_actes= "select u.idf_acte,u.patronyme_epoux,p1.prenom,p1.idf_type_presence,u.patronyme_epouse,p2.prenom,p2.idf_type_presence,a.date,a.idf_type_acte,a.idf_commune,u.idf_source,a.details_supplementaires,a.annee,a.mois,a.jour from `union` u  join `acte` a on (u.idf_acte=a.idf) join `personne` p1 on (u.idf_epoux=p1.idf) join `personne` p2 on (u.idf_epouse=p2.idf) where ";


if ($gi_idf_source !=0) $a_clauses[]="a.idf_source=$gi_idf_source" ;

if ($gi_idf_type_acte ==IDF_UNION)
   $a_clauses[]="a.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.")";
else if ($gi_idf_type_acte !=0) $a_clauses[]="a.idf_type_acte=$gi_idf_type_acte" ;
if ($gi_annee_min != '') $a_clauses[]="a.annee>=$gi_annee_min" ;
if ($gi_annee_max != '') $a_clauses[]="a.annee<=$gi_annee_max" ;
if ($gi_idf_commune!=0)
   $a_clauses[]="u.idf_commune ".$requeteRecherche->clause_droite_commune($gi_idf_commune,$gi_rayon);
$a_clauses[]="u.patronyme_epoux ".$requeteRecherche->clause_droite_patronyme($gst_nom_epx ,$gst_variantes_epx);
$st_variantes_epx_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
$a_clauses[]="u.patronyme_epouse ".$requeteRecherche->clause_droite_patronyme($gst_nom_epse,$gst_variantes_epse);
$st_variantes_epse_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
if ($gst_prenom_epx!='')
   $a_clauses[]="p1.prenom ".$requeteRecherche->clause_droite_prenom($gst_prenom_epx);
if ($gst_prenom_epse!='')
   $a_clauses[]="p2.prenom ".$requeteRecherche->clause_droite_prenom($gst_prenom_epse);
   
$st_clauses = implode(" and ",$a_clauses);

$gst_requete_actes = "$gst_requete_nb_actes $st_clauses order by annee,mois,jour";

if ($gst_variantes_epx !='')
{
    print("<div id=col_variantes_epoux class=\"gauche\">");
    if ($st_variantes_epx_trouvees!="")
print("<div>Variantes connues pour le patronyme de l'&eacute;poux</div><br><textarea rows=8>$st_variantes_epx_trouvees</textarea>");
else
   print("Pas de variantes connues pour le nom de l'&eacute;poux");
   print("</div>"); 
}
if ($gst_variantes_epse !='' )
{
    print("<div id=col_variantes_epouse class=\"droite\">");
    if ($st_variantes_epse_trouvees!="")
       print("<div>Variantes connues pour le patronyme de l'&eacute;pouse</div><br><textarea rows=8>$st_variantes_epse_trouvees</textarea>"
);
    else
       print("Pas de variantes connues pour le nom de l'&eacute;pouse");
    print("</div>");   
}
print("<div id=col_paroisses class=\"centre\">");
$st_criteres ="Recherche du couple  :$gst_prenom_epx $gst_nom_epx X $gst_prenom_epse $gst_nom_epse";
$st_criteres .= "\n";
$st_type_acte = ($gi_idf_type_acte==IDF_UNION) ? 'Mariage/CM':$ga_types_acte[$gi_idf_type_acte];
if ($gi_idf_type_acte!=0)
  $st_criteres .= "Type d'acte: $st_type_acte";
if ($gi_annee_min!='' && $gi_annee_max!='')
   $st_criteres .= " de $gi_annee_min &agrave; $gi_annee_max";
else if ($gi_annee_min!='')
  $st_criteres .=" &agrave; partir de $gi_annee_min";
else if ($gi_annee_max!='')
  $st_criteres .=" jusqu'en $gi_annee_max";
$st_criteres .= "\n";       
if ($gi_idf_commune!=0)
{
   $st_nom_commune = $connexionBD->sql_select1("select nom from commune_acte where idf=$gi_idf_commune");
}
else
  $st_nom_commune = 'Pas de commune selectionn&eacute;e';   
$st_criteres .= "Commune : $st_nom_commune\n";
print(nl2br($st_criteres));

  $st_communes_voisines=join("\n",array_values($requeteRecherche->communes_voisines()));
if ($gi_idf_commune && $gi_rayon != '')
{
   
   print("Paroisses voisines ($gi_rayon km autour de $st_nom_commune)<br>");
   $st_criteres .= " (avec recherches dans un rayon de $gi_rayon km)\n";
   print("<div class=alignLeft><textarea rows=6 cols=30>$st_communes_voisines</textarea></div>");  
}
print("</div>");

$etape_prec = getmicrotime();
//$connexionBD->execute_requete("SET SESSION query_cache_type = OFF");
//print("Req=$gst_requete_actes");
$ga_sources=$connexionBD->sql_select_multiple_par_idf("select idf,script_demande,utilise_ds,icone_info,icone_ninfo from source");
$a_actes=$connexionBD->sql_select_multiple($gst_requete_actes);
print benchmark("Recherche couple");

$i_nb_actes = count($a_actes);
print("<div class=alignCenter>$i_nb_actes occurrences trouv&eacute;es. ");
if ($i_nb_actes>$gi_nb_max_reponses)
{
  print("Seules les $gi_nb_max_reponses premi&egrave;res  sont affich&eacute;es");

   $a_actes = array_slice($a_actes,0,$gi_nb_max_reponses);
}
print("</div><br>");
if ($i_nb_actes>0)
{
  function premier_elem($a_tab) {
      return $a_tab[0];
  }
  $a_idf_acte=array_map("premier_elem",$a_actes);
  $gst_requete_intv = "select idf_acte,idf,sexe,patronyme, prenom from personne where idf_acte in (".join(',',$a_idf_acte).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,idf";
  //print("REQ_INTV=$gst_requete_intv<br>");
  $etape_prec = getmicrotime();
  $a_intervenants=$connexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv);  
  print benchmark("Recherche intervenants");
  $a_parties= array();
  foreach ($a_intervenants as $i_idf_acte => $a_intervenant)
  {
    $a_intv = array();
    foreach ($a_intervenant as $i_idf_personne => $a_personne)
    {
       list($c_sexe,$st_patronyme,$st_prenom) = $a_personne;
       $a_intv[]= "$st_prenom $st_patronyme";
    }
    $a_parties[$i_idf_acte] = implode(" X ",$a_intv);
  }
  //print_r($a_parties);

   
  foreach ($a_actes as $a_acte)
  {
    list($i_idf_acte,$st_patro_epoux,$st_prenom_epoux,$i_idf_type_presence_epoux,$st_patro_epouse,$st_prenom_epouse,$i_idf_type_presence_epouse,$st_date,$i_idf_type_acte,$i_idf_commune,$i_idf_source,$i_details,$i_annee,$i_mois,$i_jour)=$a_acte;
    list($st_script_demande,$i_utilise_detail,$st_icone_info,$st_icone_ninfo)=$ga_sources[$i_idf_source];
    if ($i_utilise_detail==1)
       $st_detail = $i_details==1 ? "<a href=\"$st_script_demande?idf_acte=$i_idf_acte\" onClick=\"open(this.href,'InfosActe','width=600,height=600,resizable=yes,scrollbars=yes');return false;\"><img src=\"./images/$st_icone_info\" border=0></a>" : "<img src=\"./images/$st_icone_ninfo\">";
    else
       $st_detail = "<a href=\"$st_script_demande?idf_acte=$i_idf_acte\" onClick=\"open(this.href,'InfosActe','width=600,height=600,resizable=yes,scrollbars=yes');return false;\"><img src=\"./images/$st_icone_info\" border=0></a>";
    $a_tableau[] =  array($a_types_acte[$i_idf_type_acte],$a_parties[$i_idf_acte],$a_communes_acte[$i_idf_commune],$st_date,"$st_prenom_epoux $st_patro_epoux ($a_types_presence[$i_idf_type_presence_epoux]) X $st_prenom_epouse $st_patro_epouse ($a_types_presence[$i_idf_type_presence_epouse])",$st_detail);

  }
  $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_tableau),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Type d\'acte','Parties','Commune','Date','Couple recherch&eacute;',''));
  $pagination->init_page_cour($gi_num_page);
  $pagination->affiche_entete_liens_navigation();
  print("<br>");
  $pagination->affiche_tableau_simple($a_tableau);
  print("<br>");
  $pagination->affiche_entete_liens_navigation();       
}
else
{
   print("<div align=center>");
   print("Aucun r&eacute;sultat<br>");
   print("V&eacute;rifiez que vous n'avez pas mis trop de contraintes (commune,type d'acte,...)<br>");
   print("<br><div class=IMPORTANT>");
   print("Rappel de vos crit&egrave;res: <br>");
   print(nl2br($st_criteres));
   print("</div>");
   print("</div>");
}
print("<br><div align=center>");
print("<a href=\"Recherches.php\" class=\"RetourReponses\">Revenir &agrave; la page de recherche</a>");
print("<a href=\"Recherches.php?recherche=nouvelle\" class=\"RetourReponses\">Commencer une nouvelle recherche</a>");
print("</div>");
print ("</form>");
print("</body>");
$connexionBD->ferme(); 

?>