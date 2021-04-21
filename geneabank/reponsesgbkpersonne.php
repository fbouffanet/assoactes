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

function rappel_recherches_communes($pconnexionBD,$pst_titre,$pi_idf_type_acte,$pi_annee_min,$pi_annee_max,$pi_idf_canton)
{
    global $requeteRecherche;
    global $st_criteres;
    $a_params_precedents=$pconnexionBD->params();
	print("<div class=\"panel panel-primary col-md-4\">");
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
    $st_bloc_rappel .="</div>"; // fin panel body
    $st_bloc_rappel .="</div>"; // fin panel primary
	$pconnexionBD->initialise_params($a_params_precedents);
    return $st_bloc_rappel;
}

print("<body>");
print('<div class="container">');
$gst_nom  = preg_replace('/\*+/','*', $gst_nom);
if ($gst_nom=='*')
{
   print('<div class="form-row col-md-12">');	
   print(nl2br("<div class='alert alert-danger'>La recherche par joker * seul n'est pas autoris&eacute;e</div>\n"));
   print('</div>');
   print('<div class="form-row col-md-12">');
   print('<a href="index.php?recherche=nouvelle" class="btn btn-primary col-md-4 col-md-offset-4">Nouvelle Recherche</a>');
   print('</div>');
   exit();
}
if (($gst_nom!= '*') && strlen($gst_nom)<3 )
{
   print('<div class="form-row col-md-12">');
   print("<div class='alert alert-danger'>Le nom '$gst_nom' doit comporter au moins trois caract&egrave;res</div>\n");
   print('</div>');
   print('<div class="form-row col-md-12">');
   print('<a href="index.php?recherche=nouvelle" class="btn btn-primary col-md-4 col-md-offset-4">Nouvelle Recherche</a>');
   print('</div>');
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
print("<div class=\"panel-body\">");
print('<form id="ConfirmeDemandes" class="form-inline" action="ConfirmeDemandes.php" method="post">');
    
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$requeteRecherche = new RequeteRecherche($connexionBD);    

$a_communes_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte");
$a_types_acte = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_acte");
$a_types_presence = $connexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence");

if (!empty($gst_sexe)) $a_clauses[] = "p.sexe='$gst_sexe'";
if ($gi_idf_type_acte ==IDF_UNION)
   $a_clauses[]="a.idf_type_acte in (".IDF_MARIAGE.",".IDF_CM.")";
else if ($gi_idf_type_acte !=0) $a_clauses[]="a.idf_type_acte=$gi_idf_type_acte" ;
if ($gi_annee_min != '') $a_clauses[]="a.annee>=$gi_annee_min" ;
if ($gi_annee_max != '') $a_clauses[]="a.annee<=$gi_annee_max" ;
if ($gi_idf_canton!=0)
   $a_clauses[]= "ca.idf_canton=$gi_idf_canton";

$a_clauses[]="p.patronyme ".$requeteRecherche->clause_droite_patronyme(utf8_vers_cp1252($gst_nom),$gst_variantes,1);
$st_variantes_trouvees=join("\n",$requeteRecherche->variantes_trouvees());
$st_tables_prenom ='';
$i_nb_prenoms= 1;
$st_variantes_prenoms ='';
   
if (!empty($gst_prenom))
{
    $gst_prenom  = str_replace('*','%', $gst_prenom);
    $a_prenoms_simples = preg_split('/[,\s\/\=\&\-]+/',$gst_prenom);       
    foreach ($a_prenoms_simples as $st_prenom)
    {
        $a_clauses[] = "prn_simple$i_nb_prenoms.libelle ".$requeteRecherche->clause_droite_prenom($st_prenom,$gst_variantes,$i_nb_prenoms );
        $st_variantes_prenoms.=join("\n",$requeteRecherche->variantes_prenoms());
        $st_tables_prenom .= " join `groupe_prenoms` gp$i_nb_prenoms on (prenom.idf=gp$i_nb_prenoms.idf_prenom) join `prenom_simple` prn_simple$i_nb_prenoms on (gp$i_nb_prenoms.idf_prenom_simple =prn_simple$i_nb_prenoms.idf) ";
        $i_nb_prenoms++; 
     }
}


if (!empty($gi_idf_type_presence)) $a_clauses[]="p.idf_type_presence=$gi_idf_type_presence" ;

$gst_requete_nb_actes= "select a.idf,p.patronyme,ifnull(prenom.libelle,''),p.idf_type_presence,a.idf_type_acte,a.details_supplementaires,a.annee,a.mois,a.jour from `acte` a join `source` s on (a.idf_source=s.idf) left join `personne` p on (p.idf_acte=a.idf) left join prenom on (p.idf_prenom=prenom.idf) $st_tables_prenom join commune_acte ca on (a.idf_commune=ca.idf) where s.publication_geneabank=1 and ";
$st_clauses = implode(" and ",$a_clauses);

$gst_requete_actes = "$gst_requete_nb_actes $st_clauses order by annee,mois,jour";

if (!empty($gst_variantes) || !empty($st_variantes_prenoms))
{
	print("<div class=\"panel panel-primary col-md-8\">");
	print("<div class=\"panel-heading\">Variantes connues</div>");
    print("<div class=\"panel-body\">");
	print('<div class="form-row">');
	if ($st_variantes_trouvees!="")
		print("<div class=\"form-group col-md-4\"><label for=\"variantes_patros\">Patronyme:</label><textarea class=\"form-control\" rows=8 cols=20 id=\"variantes_patros\" name=\"variantes_patros\">".cp1252_vers_utf8($st_variantes_trouvees)."</textarea></div>");
    else
		print("<div class=\"col-md-4\">Pas de variantes patronymiques connues</div>");
	if ($st_variantes_prenoms!="")
		print("<div class=\"form-group col-md-4\"><label for=\"variantes_prenoms\">Pr&eacute;nom:</label><textarea class=\"form-control\" rows=8 cols=20 id=\"variantes_prenoms\" name=\"variantes_prenoms\">".cp1252_vers_utf8($st_variantes_prenoms)."</textarea></div>");
	else
        print("<div class=\"col-md-4\">Pas de variantes de pr&eacute;noms connues</div>");
    print("</div>"); // fin ligne   
    print("</div>"); // fin panel body	  
	print("</div>"); // fin panel primary
}
else
	print("<div class=\"row col-md-8\"></div>");
print(rappel_recherches_communes($connexionBD,"Recherche de la personne: $gst_prenom $gst_nom",$gi_idf_type_acte,$gi_annee_min,$gi_annee_max,$gi_idf_canton));

if (!($b_pers_def))
{
   print("<a href=\"index.php\" class=\"RetourReponses\">Nouvelle Recherche</a><br>");
   die("Une personne doit &ecirc;tre d&eacute;finie");      
}

$st_clauses = implode(" and ",$a_clauses);

$etape_prec = getmicrotime();
$a_actes=$connexionBD->sql_select_multiple($gst_requete_actes);
$i_nb_actes = count($a_actes);
print('<div class="text-center row col-md-12">'. benchmark("Temps de la recherche par personne:"). '</div>');
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
  $gst_requete_intv = "select idf_acte,personne.idf,sexe,patronyme, ifnull(prenom.libelle,''),idf_type_acte,idf_pere,idf_mere from personne left join prenom on (personne.idf_prenom=prenom.idf) join acte on (idf_acte=acte.idf) where idf_acte in (".join(',',$a_idf_acte).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,personne.idf";
  //print("Req=$gst_requete_intv<br>");
  $etape_prec = getmicrotime();
  $a_intervenants=$connexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv);  
  print('<div class="text-center row col-md-12">' . benchmark("Temps de la recherche par intervenants"). '</div>'); 
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
 
  print("<table class=\"table table-bordered table-striped\">");
  print("<thead><tr>");
  print("<th>Type d'acte</th><th>Parties</th><th>Ann&eacute;e</th><th>Couple recherch&eacute;</th><th>Commentaires</th><th><div class=\"checkbox\"><label><input type=checkbox id=\"tous_rien\" name=\"tous_rien\">Tous/Rien</label></div></th>"); 
  print("</tr></thead>");  
  print('<tbody>');
  foreach ($a_actes as $a_acte)
  {

    print("<tr>\n");
    list($i_idf_acte,$st_patro,$st_prenom,$i_idf_type_presence,$i_idf_type_acte,$i_details,$i_annee,$i_mois,$i_jour)=$a_acte;
    $st_detail = $i_details==1 ? $a_commentaires[$i_idf_acte] : "Seul le nom de la commune est disponible";
    $a_lignes = array_map('cellule_tableau',array(cp1252_vers_utf8($a_types_acte[$i_idf_type_acte]),cp1252_vers_utf8($a_parties[$i_idf_acte]),$i_annee,cp1252_vers_utf8("$st_prenom $st_patro ($a_types_presence[$i_idf_type_presence])"),$st_detail,"<div class=\"lib_erreur\"><div class=\"checkbox\"><label><input type=checkbox name=\"actes[]\" value=\"$i_idf_acte\"  class=\"form-check-input case_a_cocher\"></label></div>"));
    print(join('',$a_lignes));
    print("</tr>\n");
    $i++;
  }
  print('</tbody>');      
  print("</table>");
  print('<div class="form-row col-md-12">');
  print('<input class="btn btn-primary col-md-4 col-md-offset-4" type="submit" value="Consulter les relevés">');
  print('</div>'); // fin ligne 
}
else
{
   print('<div class="row col-md-12 alert alert-danger">');
   print("Aucun r&eacute;sultat<br>");
   print("V&eacute;rifiez que vous n'avez pas mis trop de contraintes (commune,type d'acte,...)<br>");
   print("</div>"); // fin ligne 
   print("<div class=\"row col-md-12 alert alert-info\">");
   print("Rappel de vos crit&egrave;res: <br>");
   print(nl2br($st_criteres));
   print("</div>"); // fin ligne 
}
print('<div class="form-row">');
print('<div class="btn-group col-md-6 col-md-offset-4" role="group">');
print('<a href="index.php" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span> Revenir &agrave; la page de recherche</a>');
print('<a href="index.php?recherche=nouvelle" class="btn btn-warning raz" role="button"><span class="glyphicon glyphicon-erase"></span>Commencer une nouvelle recherche</a>');
print('</div>'); // fin btn-group
print('</div>'); //fin ligne

print ("</form>");
print('</div>'); // fin panel body
print("<div class=\"panel-footer text-center\"><a href=\"$gst_url_site\">".LIB_ASSO."</a></div>");
print('</div>'); // fin panel primary

print('</div>'); // fin div container
print("</body></html>");  
?>