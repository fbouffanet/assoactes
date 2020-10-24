<?php

session_start();

require_once('../v4/Commun/constantes.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/config.php');
require_once('RequeteRecherche.php');
require_once('commun_gbk.php');
require_once('../v4/Commun/Benchmark.inc');

print('<!DOCTYPE html>');
print("<Head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'>");
print("<script src='GestionCheckBoxes.js' type='text/javascript'></script>");
print("<title>Geneabank AGC: Recherches</title>");
print('</Head>');

$a_requetes           = array();
$a_clauses            = array();

/**
 * Renvoie la chaine sous la forme d'une cellule d'un tableau html
 * @param string $st_valeur
 * @return string case d'un tableau HTML  
 */ 
function cellule_tableau($st_valeur) {
  return ($st_valeur=='') ? "<td>&nbsp;</td>" : "<td>$st_valeur</td>";
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);


$i_session_idf_canton       =  empty($_SESSION['gbk_idf_canton']) ? '0' : $_SESSION['gbk_idf_canton'];
$i_session_idf_type_acte    =  empty($_SESSION['gbk_idf_type_acte']) ? '0' : $_SESSION['gbk_idf_type_acte'];
$i_session_annee_min        =  empty($_SESSION['gbk_annee_min']) ? '' : $_SESSION['gbk_annee_min'];
$i_session_annee_max        =  empty($_SESSION['gbk_annee_max']) ? '' : $_SESSION['gbk_annee_max'];

$st_session_nom_epoux       = empty($_SESSION['gbk_nom_epx']) ? '' : $_SESSION['gbk_nom_epx'];
$st_session_prenom_epoux    = empty($_SESSION['gbk_prenom_epx']) ? '' : $_SESSION['gbk_prenom_epx'];
$st_session_variantes_epx   = empty($_SESSION['gbk_variantes_epx']) ? '' : $_SESSION['gbk_variantes_epx'];
$st_session_nom_epouse      = empty($_SESSION['gbk_nom_epse']) ? '' : $_SESSION['gbk_nom_epse'];
$st_session_prenom_epouse   = empty($_SESSION['gbk_prenom_epse']) ? '' : $_SESSION['gbk_prenom_epse'];
$st_session_variantes_epse  = empty($_SESSION['gbk_variantes_epse']) ? '' : $_SESSION['gbk_variantes_epse'];




$gi_idf_canton              = empty($_POST['idf_canton']) ? $i_session_idf_canton : (int) trim($_POST['idf_canton']);
$gi_idf_type_acte           = empty($_POST['idf_type_acte']) ? $i_session_idf_type_acte: (int) $_POST['idf_type_acte'];
$gi_annee_min               = empty($_POST['annee_min']) ? $i_session_annee_min: (int) trim($_POST['annee_min']);
$gi_annee_max               = empty($_POST['annee_max']) ? $i_session_annee_max: (int) trim($_POST['annee_max']);

$gst_nom_epx                = empty($_POST['nom_epx']) ? $st_session_nom_epoux : stripslashes(substr(trim($_POST['nom_epx']),0,30));
$gst_prenom_epx             = empty($_POST['prenom_epx']) ? $st_session_prenom_epoux : stripslashes(substr(trim($_POST['prenom_epx']),0,35));
$gst_variantes_epx          = empty($_POST['variantes_epx']) ? $st_session_variantes_epx : $_POST['variantes_epx'];
$gst_nom_epse               = empty($_POST['nom_epse']) ? $st_session_nom_epouse: stripslashes(substr(trim($_POST['nom_epse']),0,30));
$gst_prenom_epse            = empty($_POST['prenom_epse']) ? $st_session_prenom_epouse: stripslashes(substr(trim($_POST['prenom_epse']),0,35));
$gst_variantes_epse         = empty($_POST['variantes_epse']) ? $st_session_variantes_epse: $_POST['variantes_epse'];
$st_variantes_epx_trouvees  = '';
$st_variantes_epse_trouvees = '';
$st_communes_voisines       = '';

$gst_nom_epx  = preg_replace('/\*+/','*', $gst_nom_epx);
$gst_nom_epse  = preg_replace('/\*+/','*', $gst_nom_epse);
if ($gst_nom_epx=='*' || $gst_nom_epse=='*')
{
   print(nl2br("La recherche par joker * seul n'est pas autoris&eacute;e <br>"));
   print("<a href=index.php class=\"RetourReponses\">Retour vers la page de recherche</a><br>");
   exit();
}
$st_erreur_nom = '';
if (($gst_nom_epx!= '*') && strlen(trim($gst_nom_epx))<3 )
$st_erreur_nom ="<div>Le nom de l'&eacute;poux '$gst_nom_epx' doit comporter au moins trois caract&egrave;res</div>\n"; 
if (($gst_nom_epse!= '*') && strlen(trim($gst_nom_epse))<3 )
$st_erreur_nom .= "<div>Le nom de l'&eacute;pouse '$gst_nom_epse' doit comporter au moins trois caract&egrave;res</div>\n"; 

if ($st_erreur_nom!='')
{
   print(nl2br($st_erreur_nom));
   print("<a href=index.php class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   exit();
}


$_SESSION['gbk_idf_canton']     = $gi_idf_canton;
$_SESSION['gbk_idf_type_acte']  = $gi_idf_type_acte;
$_SESSION['gbk_annee_min']      = $gi_annee_min;
$_SESSION['gbk_annee_max']      = $gi_annee_max;

$_SESSION['gbk_nom_epx']        = $gst_nom_epx;
$_SESSION['gbk_prenom_epx']     = $gst_prenom_epx;
$_SESSION['gbk_variantes_epx']  = $gst_variantes_epx;
$_SESSION['gbk_nom_epse']       = $gst_nom_epse;
$_SESSION['gbk_prenom_epse']    = $gst_prenom_epse;
$_SESSION['gbk_variantes_epse'] = $gst_variantes_epse;

$b_pers1_def = false;
$b_pers2_def = false;
if ($gst_nom_epx!= '')
   $b_pers1_def = true;
if ($gst_nom_epse!= '')
   $b_pers2_def = true;
   
   
print("<body>");
print('<div class=alignCenter>');
print('<a href="http://www.genea16.net"><img src="images/logo_AGC250.jpg" border="0" width="100" height="100"></a><img src="http://www.geneabank.org/pictures/logo4.jpg" width="233" height="104">');
print('</div><br>');
print('<div class="PAVE">Registres de l\'Association G&eacute;n&eacute;alogique de la Charente</div><br>');
print("<form action=\"ConfirmeDemandes.php\" method=\"post\" onSubmit=\"return ValideFormulaire(0,'actes[]')\">");   


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
   print("<a href=\"index.php\" class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   exit();
}
$ga_types_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from `type_acte`"); 
   
if (!($b_pers1_def && $b_pers2_def))
{
   print("Deux personnes doivent &ecirc;tre definies"); 
   print("<a href=\"index.php\" class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   exit();     
}

$gst_requete_nb_actes= "select u.idf_acte,u.patronyme_epoux,ifnull(prenom_p1.libelle,''),p1.idf_type_presence,u.patronyme_epouse,ifnull(prenom_p2.libelle,''),p2.idf_type_presence,a.idf_type_acte,a.details_supplementaires,a.annee,a.mois,a.jour from `union` u  join `acte` a on (u.idf_acte=a.idf) join `source` s on (a.idf_source=s.idf) join `personne` p1 on (u.idf_epoux=p1.idf) left join prenom prenom_p1 on (p1.idf_prenom=prenom_p1.idf) join `personne` p2 on (u.idf_epouse=p2.idf) left join prenom prenom_p2 on (p2.idf_prenom=prenom_p2.idf) join commune_acte ca on (a.idf_commune=ca.idf) where s.publication_geneabank=1 and ";

if ($gi_idf_type_acte ==IDF_UNION)
   $a_clauses[]="a.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.")";
else if ($gi_idf_type_acte !=0) $a_clauses[]="a.idf_type_acte=$gi_idf_type_acte" ;
if ($gi_annee_min != '') $a_clauses[]="a.annee>=$gi_annee_min" ;
if ($gi_annee_max != '') $a_clauses[]="a.annee<=$gi_annee_max" ;

if ($gi_idf_canton!=0)
   $a_clauses[]= "ca.idf_canton=$gi_idf_canton";


$a_clauses[]="u.patronyme_epoux ".$requeteRecherche->clause_droite_patronyme(utf8_vers_cp1252($gst_nom_epx),$gst_variantes_epx);
$st_variantes_epx_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
$a_clauses[]="u.patronyme_epouse ".$requeteRecherche->clause_droite_patronyme(utf8_vers_cp1252($gst_nom_epse),$gst_variantes_epse);
$st_variantes_epse_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
if ($gst_prenom_epx!='')
   $a_clauses[]="prenom_p1.libelle ".$requeteRecherche->clause_droite_prenom(utf8_vers_cp1252($gst_prenom_epx),1);
if ($gst_prenom_epse!='')
   $a_clauses[]="prenom_p2.libelle ".$requeteRecherche->clause_droite_prenom(utf8_vers_cp1252($gst_prenom_epse),2);
   
$st_clauses = implode(" and ",$a_clauses);

$gst_requete_actes = "$gst_requete_nb_actes $st_clauses order by annee,mois,jour";
if ($gst_variantes_epx !='')
{
    print("<div id=col_variantes_epoux class=\"gauche\">");
    if ($st_variantes_epx_trouvees!="")
print("<div>Variantes connues pour le patronyme de l'&eacute;poux</div><br><textarea rows=8 cols=30>".cp1252_vers_utf8($st_variantes_epx_trouvees)."</textarea>");
else
   print("Pas de variantes connues pour le nom de l'&eacute;poux");
   print("</div>"); 
}
if ($gst_variantes_epse !='' )
{
    print("<div id=col_variantes_epouse class=\"droite\">");
    if ($st_variantes_epse_trouvees!="")
       print("<div>Variantes connues pour le patronyme de l'&eacute;pouse</div><br><textarea rows=8 cols=30>".cp1252_vers_utf8($st_variantes_epse_trouvees)."</textarea>"
);
    else
       print("Pas de variantes connues pour le nom de l'&eacute;pouse");
    print("</div>");   
}
print("<div id=col_paroisses class=\"centre\">");
$st_criteres ="Recherche du couple  :$gst_prenom_epx $gst_nom_epx X $gst_prenom_epse $gst_nom_epse";
$st_criteres .= "\n";
if ($gi_idf_type_acte!=0)
{
  $st_type_acte = ($gi_idf_type_acte==IDF_UNION) ? 'Mariage/CM':$ga_types_acte[$gi_idf_type_acte];
  $st_criteres .= "Type d'acte: ".cp1252_vers_utf8($st_type_acte);
}
if ($gi_annee_min!='' && $gi_annee_max!='')
   $st_criteres .= " de $gi_annee_min &agrave; $gi_annee_max";
else if ($gi_annee_min!='')
  $st_criteres .=" &agrave; partir de $gi_annee_min";
else if ($gi_annee_max!='')
  $st_criteres .=" jusqu'en $gi_annee_max";
$st_criteres .= "\n";      
if ($gi_idf_canton!=0)
{
   $st_nom_canton = $connexionBD->sql_select1("select nom from canton where idf=$gi_idf_canton");
}
else
  $st_nom_canton = 'Pas de canton selectionn&eacute;';   
$st_criteres .= "Canton :".cp1252_vers_utf8($st_nom_canton)."\n";
print(nl2br($st_criteres));
print("</div>");

$etape_prec = getmicrotime();
//print("Req=$gst_requete_actes");
$a_actes=$connexionBD->sql_select_multiple($gst_requete_actes);
print benchmark("Recherche couple");

$i_nb_actes = count($a_actes);
print("$i_nb_actes occurrences trouv&eacute;es. ");
if ($i_nb_actes>$gi_nb_max_reponses)
{
  print("Seules les $gi_nb_max_reponses premi&egrave;res sont affich&eacute;es");
   $a_actes = array_slice($a_actes,0,$gi_nb_max_reponses);
}
if ($i_nb_actes>0)
{
  function premier_elem($a_tab) {
      return $a_tab[0];
  }
  $a_idf_acte=array_map("premier_elem",$a_actes);
  $gst_requete_intv = "select idf_acte,personne.idf,sexe,patronyme, ifnull(prenom.libelle,''),idf_type_acte,idf_pere,idf_mere from personne left join prenom  on (idf_prenom=prenom.idf) join acte on (idf_acte=acte.idf) where idf_acte in (".join(',',$a_idf_acte).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,personne.idf";
  $etape_prec = getmicrotime();
  //print("Req2=$gst_requete_intv<br>");
  $a_intervenants=$connexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv);  
  print benchmark("Recherche intervenants");
  $a_parties= array();
  $a_commentaires = array();
  foreach ($a_intervenants as $i_idf_acte => $a_intervenant)
  {
    $a_intv = array();
    $a_commentaires[$i_idf_acte] = '';
    $i=0;
    foreach ($a_intervenant as $i_idf_personne => $a_personne)
    {
       list($c_sexe,$st_patronyme,$st_prenom,$i_idf_type_acte,$i_idf_pere,$i_idf_mere) = $a_personne;
       $st_personne ='';
       switch ($i_idf_type_acte) {
          case IDF_NAISSANCE:
          case IDF_DECES:break;
          case IDF_MARIAGE: 
          case IDF_CM:
          $st_personne = ($i==0) ? "de l'&eacute;poux" : "de l'&eacute;pouse";
       }
       $a_intv[]= "$st_prenom $st_patronyme";
       if (empty($i_idf_pere)) $a_commentaires[$i_idf_acte] .= "Pas d'informations sur le p&egrave;re $st_personne<br>";
       if (empty($i_idf_mere)) $a_commentaires[$i_idf_acte] .= "Pas d'informations sur la m&egrave;re $st_personne<br>";
       $i++;
    }
    $a_parties[$i_idf_acte] = implode(" X ",$a_intv);
  }
  print("<div align=center><table border=1>");
  $st_cellule_selection = "<div align=center><input type=button value=\"Tous\" onClick=\"SelectionneTousActes(0,'actes[]')\"> <input type=button value=\"Rien\" onClick=\"DeselectionneTousActes(0,'actes[]')\"></div>"; 
  print("<tr><th>Type d'acte</th><th>Parties</th><th>Ann&eacute;e</th><th>Couple recherch&eacute;</th><th>Commentaires</th><th>$st_cellule_selection </th></tr>");  
  $i=0;
  foreach ($a_actes as $a_acte)
  {
    list($i_idf_acte,$st_patro_epoux,$st_prenom_epoux,$i_idf_type_presence_epoux,$st_patro_epouse,$st_prenom_epouse,$i_idf_type_presence_epouse,$i_idf_type_acte,$i_details,$i_annee,$i_mois,$i_jour)=$a_acte;
    $st_checkbox = "<input type=checkbox name=\"actes[]\" value=\"$i_idf_acte\">";
    $st_detail = $i_details==1 ? $a_commentaires[$i_idf_acte] : "Seul le nom de la commune est disponible";   
    $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
    print("<tr class=$st_class>\n");
    $a_lignes = array_map('cellule_tableau',array(cp1252_vers_utf8($a_types_acte[$i_idf_type_acte]),cp1252_vers_utf8($a_parties[$i_idf_acte]),$i_annee,cp1252_vers_utf8("$st_prenom_epoux $st_patro_epoux ($a_types_presence[$i_idf_type_presence_epoux]) X $st_prenom_epouse $st_patro_epouse ($a_types_presence[$i_idf_type_presence_epouse])"),$st_detail,"<div align=center><input type=checkbox name=\"actes[]\" value=\"$i_idf_acte\"></div>"));
    print(join('',$a_lignes));
    print("</tr>\n");
    $i++;
  }
  print("</table></div><br>");
  print("<div class=alignCenter><input type=submit value=\"Envoyer\"></div>");       
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
print("<a href=\"index.php\" class=\"RetourReponses\">Revenir &agrave; la page de recherche</a>");
print("<a href=\"index.php?recherche=nouvelle\" class=\"RetourReponses\">Commencer une nouvelle recherche</a><br>");
print("</div>");
print ("</form>");
print('<br><div class=alignCenter><a href="http://www.genea16.net" class=LienAGC>Association G&eacute;n&eacute;alogique de la Charente</a></div>');
print("</body></html>"); 

?>