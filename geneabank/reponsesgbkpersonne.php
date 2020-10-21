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


$a_clauses = array();

$i_session_idf_canton       =  empty($_SESSION['gbk_idf_canton']) ? '0' : $_SESSION['gbk_idf_canton'];

$i_session_idf_type_acte      =  empty($_SESSION['gbk_idf_type_acte']) ? '0' : $_SESSION['gbk_idf_type_acte'];
$i_session_annee_min          =  empty($_SESSION['gbk_annee_min']) ? '' : $_SESSION['gbk_annee_min'];
$i_session_annee_max          =  empty($_SESSION['gbk_annee_max']) ? '' : $_SESSION['gbk_annee_max'];

$i_session_idf_type_presence  =  empty($_SESSION['gbk_idf_type_presence']) ? '0' : $_SESSION['gbk_idf_type_presence'];
$st_session_sexe              =  empty($_SESSION['gbk_sexe']) ? '' : $_SESSION['gbk_sexe'];
$st_session_nom               =  empty($_SESSION['gbk_nom']) ? '' : $_SESSION['gbk_nom'];
$st_session_prenom            =  empty($_SESSION['gbk_prenom']) ? '' : $_SESSION['gbk_prenom'];
$st_session_variantes         =  empty($_SESSION['gbk_variantes']) ? '' : $_SESSION['gbk_variantes'];


$gi_idf_canton              = empty($_POST['idf_canton']) ? $i_session_idf_canton : (int) trim($_POST['idf_canton']);
$gi_idf_type_acte           = empty($_POST['idf_type_acte']) ? $i_session_idf_type_acte: (int) $_POST['idf_type_acte'];
$gi_annee_min               = empty($_POST['annee_min']) ? $i_session_annee_min: (int) trim($_POST['annee_min']);
$gi_annee_max               = empty($_POST['annee_max']) ? $i_session_annee_max: (int) trim($_POST['annee_max']);


$gi_idf_type_presence   = isset($_POST['idf_type_presence']) ? (int) $_POST['idf_type_presence'] : $i_session_idf_type_presence;
$gst_sexe               = isset($_POST['sexe'])? substr($_POST['sexe'],0,1) : $st_session_sexe;
$gst_nom                = empty($_POST['nom'])? $st_session_nom : stripslashes(substr(trim($_POST['nom']),0,30));
$gst_prenom             = empty($_POST['prenom'])? $st_session_prenom : stripslashes(substr(trim($_POST['prenom']),0,35));

$gst_nom  = preg_replace('/\*+/','*', $gst_nom);
if ($gst_nom=='*')
{
   print(nl2br("La recherche par joker * seul n'est pas autoris&eacute;e<br>"));
   print("<a href=index.php?recherche=nouvelle class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   exit();
}
if (($gst_nom!= '*') && strlen($gst_nom)<3 )
{
   print("<div>Le nom '$gst_nom' doit comporter au moins trois caract&egrave;res</div>\n");
   print("<div><a href=index.php class=\"RetourReponses\">Retour vers la page de recherche</a><br></div>");
   exit();
}
  
$gst_variantes          = empty($_POST['variantes'])? $st_session_variantes : $_POST['variantes'];

$st_variantes_trouvees  = '';
$st_communes_voisines   = '';

/*
 * Renvoie la chaine sous la forme d'une cellule d'un tableau html
 * @param string $st_valeur
 * @return string case d'un tableau HTML  
 */ 
function cellule_tableau($st_valeur) {
  return ($st_valeur=='') ? "<td>&nbsp;</td>" : "<td>$st_valeur</td>";
}


$_SESSION['gbk_idf_canton']     = $gi_idf_canton;
$_SESSION['gbk_idf_type_acte']  = $gi_idf_type_acte;
$_SESSION['gbk_annee_min']      = $gi_annee_min;
$_SESSION['gbk_annee_max']      = $gi_annee_max;

$_SESSION['gbk_nom']                = $gst_nom;
$_SESSION['gbk_prenom']             = $gst_prenom;
$_SESSION['gbk_variantes']          = $gst_variantes;
$_SESSION['gbk_idf_type_presence']  = $gi_idf_type_presence;
$_SESSION['gbk_sexe']               = $gst_sexe;

$b_pers_def = false;

if ($gst_nom!= '')
   $b_pers_def = true;

print("<body>");
print('<div class=alignCenter>');
print('<a href="http://www.genea16.net"><img src="images/logo_AGC250.jpg" border="0" width="100" height="100" alt="LogoAGC"></a><img src="http://www.geneabank.org/pictures/logo4.jpg" width="233" height="104" alt="LogoGbk">');
print('</div><br>');

print('<div class=alignCenter>Ces registres concernent la Charente uniquement accessibles via le systeme <a href="http://www.geneabank.org/">GeneaBank</a>.</div><br>');
print('<div class="PAVE">Registres de l\'Association G&eacute;n&eacute;alogique de la Charente</div><br>');

print("<form action=\"ConfirmeDemandes.php\" method=\"post\" onSubmit=\"return ValideFormulaire(0,'actes[]')\">");     
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$requeteRecherche = new RequeteRecherche($connexionBD);    

$a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte");
$a_types_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_acte");
$a_types_presence = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence");


$ga_types_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from `type_acte`"); 

if ($gi_idf_canton!=0)
{
   $st_nom_canton = $connexionBD->sql_select1("select nom from canton where idf=$gi_idf_canton");
}
else
  $st_nom_canton = 'Pas de canton selectionn&eacute;'; 

$gst_requete_nb_actes= "select a.idf,p.patronyme,ifnull(prenom.libelle,''),p.idf_type_presence,a.idf_type_acte,a.details_supplementaires,a.annee,a.mois,a.jour from `acte` a join `source` s on (a.idf_source=s.idf) left join `personne` p on (p.idf_acte=a.idf) left join prenom on (p.idf_prenom=prenom.idf) join commune_acte ca on (a.idf_commune=ca.idf) where s.publication_geneabank=1 and ";

if (!empty($gst_sexe)) $a_clauses[] = "p.sexe='$gst_sexe'";
if ($gi_idf_type_acte ==IDF_UNION)
   $a_clauses[]="a.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.")";
else if ($gi_idf_type_acte !=0) $a_clauses[]="a.idf_type_acte=$gi_idf_type_acte" ;
if ($gi_annee_min != '') $a_clauses[]="a.annee>=$gi_annee_min" ;
if ($gi_annee_max != '') $a_clauses[]="a.annee<=$gi_annee_max" ;
if ($gi_idf_canton!=0)
   $a_clauses[]= "ca.idf_canton=$gi_idf_canton";

$a_clauses[]="p.patronyme ".$requeteRecherche->clause_droite_patronyme(utf8_vers_cp1252($gst_nom),$gst_variantes);
$st_variantes_trouvees=join("\n",$requeteRecherche->variantes_trouvees());   
if ($gst_prenom!='')
   $a_clauses[]="prenom.libelle ".$requeteRecherche->clause_droite_prenom(utf8_vers_cp1252($gst_prenom),1);
if (!empty($gi_idf_type_presence)) $a_clauses[]="p.idf_type_presence=$gi_idf_type_presence" ;

$st_clauses = implode(" and ",$a_clauses);

$gst_requete_actes = "$gst_requete_nb_actes $st_clauses order by annee,mois,jour";

if ($gst_variantes !='')
{
    print("<div id=col_variantes class=\"gauche\">");
    if ($st_variantes_trouvees!="")
print("<div>Variantes trouv&eacute;es pour le patronyme</div><br><textarea rows=8 cols=30> ".cp1252_vers_utf8($st_variantes_trouvees)."</textarea>");
else
   print("Pas de variantes connues");
   print("</div>"); 
}
print("<div id=col_paroisses class=\"centre\">");
$st_criteres = "Recherche de la personne: $gst_prenom $gst_nom";
if (!empty($gi_idf_type_presence))
   $st_criteres .= " ($a_types_presence[$gi_idf_type_presence])";
if (!empty($gst_sexe))
   $st_criteres .= " - Sexe: $gst_sexe";
$st_criteres .= "\n";

if ($gi_idf_type_acte!=0)
{
  $st_type_acte = ($gi_idf_type_acte==IDF_UNION) ? 'Mariage/CM': $ga_types_acte[$gi_idf_type_acte]; 
  $st_criteres .= "Type d'acte: ".cp1252_vers_utf8($st_type_acte);
}
if ($gi_annee_min!='' && $gi_annee_max!='')
  $st_criteres .= " de $gi_annee_min &agrave; $gi_annee_max";
else if ($gi_annee_min!='')
  $st_criteres .= " &agrave; partir de $gi_annee_min";
else if ($gi_annee_max!='')
  $st_criteres .= " jusqu'en $gi_annee_max";
$st_criteres .= "\n"; 

  
$st_criteres .= "Canton : ".cp1252_vers_utf8($st_nom_canton)."\n";
print(nl2br($st_criteres));

print("</div>");  
if (!($b_pers_def))
{
   print("<a href=\"index.php\" class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   die("Une personne doit &ecirc;tre d&eacute;finie");      
}

$st_clauses = implode(" and ",$a_clauses);

$etape_prec = getmicrotime();
$a_actes=$connexionBD->sql_select_multiple($gst_requete_actes);
print benchmark("Recherche personne");

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
  $gst_requete_intv = "select idf_acte,personne.idf,sexe,patronyme, ifnull(prenom.libelle,''),idf_type_acte,idf_pere,idf_mere from personne left join prenom on (personne.idf_prenom=prenom.idf) join acte on (idf_acte=acte.idf) where idf_acte in (".join(',',$a_idf_acte).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,personne.idf";
  //print("Req=$gst_requete_intv<br>");
  $etape_prec = getmicrotime();
  $a_intervenants=$connexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv);  
  print benchmark("Recherche intervenants");
  $a_parties= array();
  $a_commentaires = array();
  foreach ($a_intervenants as $i_idf_acte => $a_intervenant)
  {
    $a_intv = array();
    $i=0;
    $a_commentaires[$i_idf_acte] = '';
    foreach ($a_intervenant as $i_idf_personne => $a_personne)
    {
       $st_personne = '';
       list($c_sexe,$st_patronyme,$st_prenom,$i_idf_type_acte,$i_idf_pere,$i_idf_mere) = $a_personne;
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
 
  $a_tableau = array();
  $st_cellule_selection = "<div align=center><input type=button value=\"Tous\" onClick=\"SelectionneTousActes(0,'actes[]')\"> <input type=button value=\"Rien\" onClick=\"DeselectionneTousActes(0,'actes[]')\"></div>";
  print("<div align=center><table border=1 align=center>"); 
  print("<tr><th>Type d'acte</th><th>Parties</th><th>Ann&eacute;e</th><th>Personne recherch&eacute;e</th><th>Commentaires</th><th>$st_cellule_selection</th></tr>"); 
  $i=0;
  foreach ($a_actes as $a_acte)
  {
    $st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
    print("<tr class=$st_class>\n");
    list($i_idf_acte,$st_patro,$st_prenom,$i_idf_type_presence,$i_idf_type_acte,$i_details,$i_annee,$i_mois,$i_jour)=$a_acte;
    $st_detail = $i_details==1 ? $a_commentaires[$i_idf_acte] : "Seul le nom de la commune est disponible";
    $a_lignes = array_map('cellule_tableau',array(cp1252_vers_utf8($a_types_acte[$i_idf_type_acte]),cp1252_vers_utf8($a_parties[$i_idf_acte]),$i_annee,cp1252_vers_utf8("$st_prenom $st_patro ($a_types_presence[$i_idf_type_presence])"),$st_detail,"<div align=center><input type=checkbox name=\"actes[]\" value=\"$i_idf_acte\"></div>"));
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
   print("Aucun r&eacute;sultat");
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