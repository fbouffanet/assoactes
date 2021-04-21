<?php

session_start();

require_once('../v4/Commun/constantes.php');
require_once('../v4/Commun/ConnexionBD.php');
require_once('../v4/Commun/config.php');
require_once('../v4/RequeteRecherche.php');
require_once('commun_gbk.php');
require_once('../v4/Commun/Benchmark.inc');

print('<!DOCTYPE html>');
print("<head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='StylesGbk.css' type='text/css' rel='stylesheet'>");
print("<title>Geneabank ".SIGLE_ASSO.": Recherches</title>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='js/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {	
	$("#ConfirmeDemandes").validate({
		rules: {
			"actes[]": { 
                required: true, 
                minlength: 1 
            } 
		},
		messages: {
			"actes[]": "Merci de choisir au moins un acte"
		},
		errorElement: "em",
		errorPlacement: function ( error, element ) {
			// Add the `help-block` class to the error element
			error.addClass( "help-block" );
			if ( element.prop( "type" ) === "checkbox" ) {
				error.insertAfter( element.parent( "label" ) );
			} else {
				error.insertAfter( element );
			}
		},
		highlight: function ( element, errorClass, validClass ) {
			$( element ).parents( ".lib_erreur" ).addClass( "has-error" ).removeClass( "has-success" );
		},
		unhighlight: function (element, errorClass, validClass) {
			$( element ).parents( ".lib_erreur" ).addClass( "has-success" ).removeClass( "has-error" );
		}
	});
	
	$("#tous_rien").click(function(){
		$(".case_a_cocher").prop('checked', $(this).prop("checked"));

	});
	
});	

</script>
<?php	
print('</head>');

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

print("<body>");
print('<div class="container">');
$gst_nom_epx  = preg_replace('/\*+/','*', $gst_nom_epx);
$gst_nom_epse  = preg_replace('/\*+/','*', $gst_nom_epse);
if ($gst_nom_epx=='*' || $gst_nom_epse=='*')
{
   print('<div class="form-row col-md-12">');
   print("<div class='alert alert-danger'>Au moins un des noms ne doit pas correspondre au caract&egrave;re joker \"*\"</div>\n");
   print('</div>');
   print('<div class="form-row col-md-12">');
   print('<a href="index.php?recherche=nouvelle" class="btn btn-primary col-md-4 col-md-offset-4">Nouvelle Recherche</a>');
   print('</div>');
   exit();
}
$st_erreur_nom = '';
if (($gst_nom_epx!= '*') && strlen(trim($gst_nom_epx))<3 )
$st_erreur_nom ="<div class='alert alert-danger'>Le nom de l'&eacute;poux doit comporter au moins trois caract&egrave;res</div>\n";
if (($gst_nom_epse!= '*') && strlen(trim($gst_nom_epse))<3 )
$st_erreur_nom .= "<div class='alert alert-danger'>Le nom de l'&eacute;pouse doit comporter au moins trois caract&egrave;res</div>\n";

if ($st_erreur_nom!='')
{
   print('<div class="form-row col-md-12">');
   print(nl2br($st_erreur_nom));
   print('</div>');
   print('<div class="form-row col-md-12">');
   print('<a href="index.php?recherche=nouvelle" class="btn btn-primary col-md-4 col-md-offset-4">Nouvelle Recherche</a>');
   print('</div>');
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

/*
* Renvoie la chaine représentant la partie "recherches communes"  de la recherche
* @param object $pconnexionBD Connexion à la BD
* @param string $pst_titre titre de la recherche
* @param integer $pi_idf_type_acte identifiant du type d'acte recherché
* @param integer $pi_annee_min année minimale de la recherche
* @param integer $pi_annee_max année maximale de la recherche
* @param integer $pi_idf_source source utilisée
* @param integer $pi_idf_commune identifiant de la commune recherchée
* @param integer $pi_rayon rayon de recherche
* @global object $requeteRecherche objet requête recherche
* @global string $st_criteres critères utilisés pour la recherche
*/

function rappel_recherches_communes($pconnexionBD,$pst_titre,$pi_idf_type_acte,$pi_annee_min,$pi_annee_max,$pi_idf_canton)
{
    global $requeteRecherche;
    global $st_criteres;
    $a_params_precedents=$pconnexionBD->params();
	print("<div class=\"panel panel-primary col-md-2\">");
	print("<div class=\"panel-heading\">Vos crit&egrave;res de recherche</div>");
	print("<div class=\"panel-body\">");
    $st_criteres ="$pst_titre\n";
    if (!empty($pi_idf_type_acte))
    {
      $st_type_acte = $pconnexionBD->sql_select1("select nom from type_acte where idf=$pi_idf_type_acte");
      $st_criteres .= "Type d'acte: ".cp1252_vers_utf8($st_type_acte)."\n";
    }
    if ($pi_annee_min!='' && $pi_annee_max!='')
      $st_criteres .= " de $pi_annee_min &agrave; $pi_annee_max";
    else if ($pi_annee_min!='')
      $st_criteres .=" &agrave; partir de $pi_annee_min";
    else if ($pi_annee_max!='')
      $st_criteres .=" jusqu'en $pi_annee_max";
    $st_criteres .= "\n";
    if (!empty($pi_idf_canton))
	{
		$st_nom_canton = $pconnexionBD->sql_select1("select nom from canton where idf=$pi_idf_canton");
		$st_criteres .= "Canton sélectionné: ".cp1252_vers_utf8($st_nom_canton)."\n";
	}	
    $st_bloc_rappel = nl2br($st_criteres);
    $st_bloc_rappel .="</div>";
    $st_bloc_rappel .="</div>";
	$pconnexionBD->initialise_params($a_params_precedents);
    return $st_bloc_rappel;
}
   
   


print('<div class="panel panel-primary">');
print('<div class="panel-body">');
print('<div class="form-row col-md-12">');
print("<div class=\"col-md-4 col-md-offset-1\"><a href=\"$gst_url_site\"><img src=\"$gst_logo_association\"></a></div>");
print("<div class=\"col-md-4 col-md-offset-1\"><a href=\"http://www.geneabank.org\"><img src=\"https://www.geneabank.org/pictures/logo4.jpg\"></a></div>");
print('</div>'); // fin ligne
print('</div>'); // fin panel body
print('</div>'); // fin panel primary

print('<div class="panel panel-primary">');
print('<div class="panel-heading">Registres de '.LIB_ASSO_AVEC.'</div>');
print('<div class="panel-body">');
print('<form id="ConfirmeDemandes" class="form-inline" action="ConfirmeDemandes.php" method="post">');

$a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte");
$a_types_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_acte");
$a_types_presence = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence");
$requeteRecherche = new RequeteRecherche($connexionBD);   

if ($gi_idf_type_acte ==IDF_UNION)
   $a_clauses[]="a.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.")";
else if ($gi_idf_type_acte !=0) $a_clauses[]="a.idf_type_acte=$gi_idf_type_acte" ;
if ($gi_annee_min != '') $a_clauses[]="a.annee>=$gi_annee_min" ;
if ($gi_annee_max != '') $a_clauses[]="a.annee<=$gi_annee_max" ;

if (!empty($gi_idf_canton))
   $a_clauses[]= "ca.idf_canton=$gi_idf_canton";

$gst_nom_epx  = str_replace('*','%', $gst_nom_epx);
$a_clauses[]="u.patronyme_epoux ".$requeteRecherche->clause_droite_patronyme(utf8_vers_cp1252($gst_nom_epx),$gst_variantes_epx,1);
$st_variantes_epx_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
$gst_nom_epse  = str_replace('*','%', $gst_nom_epse);
$a_clauses[]="u.patronyme_epouse ".$requeteRecherche->clause_droite_patronyme(utf8_vers_cp1252($gst_nom_epse),$gst_variantes_epse,2);
$st_variantes_epse_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
$st_tables_prenom_epx ='';
$i_nb_prenoms_epx= 1;
$st_variantes_prenoms_epx ='';
$st_tables_prenom_epse = '';
$st_variantes_prenoms_epse ='';
if (!empty($gst_prenom_epx))
{
    $gst_prenom_epx  = str_replace('*','%', $gst_prenom_epx);
    $a_prenoms_simples_epx = preg_split('/[,\s\/\=\&\-]+/',$gst_prenom_epx);       
    foreach ($a_prenoms_simples_epx as $st_prenom)
    {
        $a_clauses[] = "prn_simple_epx$i_nb_prenoms_epx.libelle ".$requeteRecherche->clause_droite_prenom($st_prenom,$gst_variantes_epx,$i_nb_prenoms_epx);
        $st_variantes_prenoms_epx.=join("\n",$requeteRecherche->variantes_prenoms());
           $st_tables_prenom_epx .= " join `groupe_prenoms` gp$i_nb_prenoms_epx on (prn_p1.idf=gp$i_nb_prenoms_epx.idf_prenom)  join `prenom_simple` prn_simple_epx$i_nb_prenoms_epx on (gp$i_nb_prenoms_epx.idf_prenom_simple =prn_simple_epx$i_nb_prenoms_epx.idf) ";
        $i_nb_prenoms_epx++; 
     }
}
$st_tables_prenom_epse = '';
$st_variantes_prenoms_epse ='';
if (!empty($gst_prenom_epse))
{
	$gst_prenom_epse  = str_replace('*','%', $gst_prenom_epse);
    $a_prenoms_simples_epse = preg_split('/[,\s\/\=\&\-]+/',$gst_prenom_epse);
    $i_nb_prenoms_epse= $i_nb_prenoms_epx;
    foreach ($a_prenoms_simples_epse as $st_prenom)
    {
        $a_clauses[] = "prn_simple_epse$i_nb_prenoms_epse.libelle ".$requeteRecherche->clause_droite_prenom($st_prenom,$gst_variantes_epse,$i_nb_prenoms_epse);
            $st_variantes_prenoms_epse.=join("\n",$requeteRecherche->variantes_prenoms());
        $st_tables_prenom_epse .= " join `groupe_prenoms` gp$i_nb_prenoms_epse on (prn_p2.idf=gp$i_nb_prenoms_epse.idf_prenom) join `prenom_simple` prn_simple_epse$i_nb_prenoms_epse on (gp$i_nb_prenoms_epse.idf_prenom_simple=prn_simple_epse$i_nb_prenoms_epse.idf) ";
        $i_nb_prenoms_epse++; 
    }
}
   
$st_clauses = implode(" and ",$a_clauses);
$gst_requete_nb_actes= "select u.idf_acte,u.patronyme_epoux,IFNULL(prn_p1.libelle,''),p1.idf_type_presence,u.patronyme_epouse,ifnull(prn_p2.libelle,''),p2.idf_type_presence,a.idf_type_acte,a.details_supplementaires,a.annee,a.mois,a.jour from `union` u  join `acte` a on (u.idf_acte=a.idf) join `source` s on (a.idf_source=s.idf) join `personne` p1 on (u.idf_epoux=p1.idf) left join prenom prn_p1 on (p1.idf_prenom=prn_p1.idf) $st_tables_prenom_epx join `personne` p2 on (u.idf_epouse=p2.idf) left join prenom prn_p2 on (p2.idf_prenom=prn_p2.idf) $st_tables_prenom_epse join commune_acte ca on (a.idf_commune=ca.idf) where s.publication_geneabank=1 and ";
$gst_requete_actes = "$gst_requete_nb_actes $st_clauses order by annee,mois,jour";

if (!empty($gst_variantes_epx) || !empty($st_variantes_prenoms_epx))
{
	print("<div class=\"panel panel-primary col-md-5\">");
	print("<div class=\"panel-heading\">Variantes connues pour l'&eacute;poux</div>");
    print("<div class=\"panel-body\">");
	print('<div class="form-row">');
	if ($st_variantes_epx_trouvees!="")
		print("<div class=\"form-group col-md-6\"><label for=\"variantes_patros_epx\">Patronyme:</label><textarea class=\"form-control\" rows=8 cols=20 id=\"variantes_patros_epx\" name=\"variantes_patros_epx\">".cp1252_vers_utf8($st_variantes_epx_trouvees)."</textarea></div>");
    else
		print("<div class=\"col-md-6\">Pas de variantes patronymiques connues</div>");
	if ($st_variantes_prenoms_epx!="")
		print("<div class=\"form-group col-md-6\"><label for=\"variantes_prenoms_epx\">Pr&eacute;nom:</label><textarea class=\"form-control\" rows=8 cols=20 id=\"variantes_prenoms_epx\" name=\"variantes_prenoms_epx\">".cp1252_vers_utf8($st_variantes_prenoms_epx)."</textarea></div>");
	else
        print("<div class=\"col-md-6\">Pas de variantes de pr&eacute;noms connues</div>");
    print("</div>"); // fin ligne   
    print("</div>"); // fin panel body	 	  
	print("</div>"); // fin panel primary	 
}
else
	print("<div class=\"row col-md-5\"></div>");
print(rappel_recherches_communes($connexionBD,"Recherche du couple: $gst_prenom_epx $gst_nom_epx X $gst_prenom_epse $gst_nom_epse",$gi_idf_type_acte,$gi_annee_min,$gi_annee_max,$gi_idf_canton));
if (!empty($gst_variantes_epse) ||  !empty($st_variantes_prenoms_epse))
{ 
	print("<div class=\"panel panel-primary col-md-5\">");
	print("<div class=\"panel-heading\">Variantes connues pour l'&eacute;pouse</div>");
	print("<div class=\"panel-body\">");
	print('<div class="form-row">');
    if ($st_variantes_epse_trouvees!="")
		print("<div class=\"form-group col-md-6\"><label for=\"variantes_patros_epse\">Patronyme:</label><textarea class=\"form-control\" id=\"variantes_patros_epse\" name=\"variantes_patros_epse\" rows=8 cols=20>".cp1252_vers_utf8($st_variantes_epse_trouvees)."</textarea></div>");
	else
		print("<div class=\"col-md-6\">Pas de variantes patronymiques connues</div>");
    if ($st_variantes_prenoms_epse!="")
		print("<div class=\"form-group col-md-6\"><label for=\"variantes_prenoms_epse\">Pr&eacute;nom:</label><textarea class=\"form-control\" rows=8 cols=20 id=\"variantes_prenoms_epse\" name=\"variantes_prenoms_epse\">".cp1252_vers_utf8($st_variantes_prenoms_epse)."</textarea></div>");
    else
        print("<div class=\"col-md-6\">Pas de variantes de pr&eacute;noms connues</div>");
	print("</div>"); // fin ligne
    print("</div>"); // fin panel body	  
    print("</div>"); // fin panel primary	 
}
else
	print("<div class=\"row col-md-4\"></div>");

$etape_prec = getmicrotime();
$a_actes=$connexionBD->sql_select_multiple($gst_requete_actes);
$i_nb_actes = count($a_actes);

print('<div class="text-center row col-md-12">'. benchmark("Temps de la recherche par couple:"). '</div>');
print("<div class=\"row col-md-12 text-center\"><span class=\"badge\">$i_nb_actes</span> occurrences trouv&eacute;es. </div>");

if ($i_nb_actes>$gi_nb_max_reponses)
{
	print('<div class="form-row col-md-12">');
	print("<div class='alert alert-warning'>Seules les $gi_nb_max_reponses premi&egrave;res sont affich&eacute;es</div>");
	print('</div>');
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
  $a_intervenants=$connexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv); 
  print('<div class="text-center row col-md-12">' . benchmark("Temps de la recherche par intervenants"). '</div>');  
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
  print("<table class=\"table table-bordered table-striped\">");
  print("<thead><tr>");
  print("<th>Type d'acte</th><th>Parties</th><th>Ann&eacute;e</th><th>Couple recherch&eacute;</th><th>Commentaires</th><th><div class=\"checkbox\"><label><input type=checkbox id=\"tous_rien\" name=\"tous_rien\">Tous/Rien</label></div></th>"); 
  print("</tr></thead>");  
  print('<tbody>');
  $i=0;
  foreach ($a_actes as $a_acte)
  {
    list($i_idf_acte,$st_patro_epoux,$st_prenom_epoux,$i_idf_type_presence_epoux,$st_patro_epouse,$st_prenom_epouse,$i_idf_type_presence_epouse,$i_idf_type_acte,$i_details,$i_annee,$i_mois,$i_jour)=$a_acte;
    $st_detail = $i_details==1 ? $a_commentaires[$i_idf_acte] : "Seul le nom de la commune est disponible";   
    print("<tr>\n");
    $a_lignes = array_map('cellule_tableau',array(cp1252_vers_utf8($a_types_acte[$i_idf_type_acte]),cp1252_vers_utf8($a_parties[$i_idf_acte]),$i_annee,cp1252_vers_utf8("$st_prenom_epoux $st_patro_epoux ($a_types_presence[$i_idf_type_presence_epoux]) X $st_prenom_epouse $st_patro_epouse ($a_types_presence[$i_idf_type_presence_epouse])"),$st_detail,"<div class=\"lib_erreur\"><div class=\"checkbox\"><label><input type=checkbox name=\"actes[]\" value=\"$i_idf_acte\"  class=\"form-check-input case_a_cocher\"></label></div></div>"));
    print(join('',$a_lignes));
    print("</tr>\n");
    $i++;
  }
  print('</tbody>');      
  print("</table>");
  print('<div class="form-row col-md-12">');
  print('<input class="btn btn-primary col-md-4 col-md-offset-4" type="submit" value="Consulter les relevés">');
  print('</div>');  
}
else
{
   print('<div class="row col-md-12 alert alert-danger">');
   print("Aucun r&eacute;sultat<br>");
   print("V&eacute;rifiez que vous n'avez pas mis trop de contraintes (commune,type d'acte,...)<br>");
   print("</div>");
   print("<div class=\"row col-md-12 alert alert-info\">");
   print("Rappel de vos crit&egrave;res: <br>");
   print(nl2br($st_criteres));
   print("</div>");
}


print('<div class="form-row">');
print('<div class="btn-group col-md-6 col-md-offset-4" role="group">');
print('<a href="index.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span> Revenir &agrave; la page de recherche</a>');
print('<a href="index.php?recherche=nouvelle" class="btn btn-warning raz" role="button"><span class="glyphicon glyphicon-erase"></span>Commencer une nouvelle recherche</a>');
print('</div>'); // fin btn-group
print('</div>'); //fin ligne

print ("</form>");
print('</div>'); // fin panel  body
print("<div class=\"panel-footer text-center\"><a href=\"$gst_url_site\">".LIB_ASSO."</a></div>");
print('</div>'); // fin panel primary

print('</div>'); // fin div container
print("</body></html>"); 

?>