<?php
session_start();

require_once("Commun/config.php");
require_once("Commun/commun.php");
require_once("Commun/constantes.php");
require_once("Commun/ConnexionBD.php");
require_once("Commun/PaginationTableau.php");
require_once("RequeteRecherche.php");

$gi_seuil_connexions = 15;
$gst_fichier_log =  "requetes_td_vitrine.log";

//$ga_ips_interdites = array('82.238.83.72');

/**
 *  Affiche la page de recherche
 *  @param object $pconnexionBD Connexion BD
 *  @param string $pst_type_recherche Type de recherche 
 */ 
function affiche_page_recherche($pconnexionBD,$pst_type_recherche)
{
  if ($pst_type_recherche=='nouvelle')
  {
    $gi_idf_commune       = isset($_GET['idf_ca']) ? (int) $_GET['idf_ca']: '0';
    $gi_rayon             = '';
    $gi_annee_min         = isset($_GET['a_min']) ? (int) $_GET['a_min']:'';
    $gi_annee_max         = isset($_GET['a_max']) ? (int) $_GET['a_max']:'';
    $gst_nom_epx          = '';
    $gst_prenom_epx       = '';
    $gst_variantes_epx    = 'oui';
    $gst_nom_epse         = '';
    $gst_prenom_epse      = '';
    $gst_variantes_epse   = 'oui';
  }
  else
  {
    $gi_idf_commune       = isset($_SESSION['tdm_idf_commune_recherche']) ? $_SESSION['tdm_idf_commune_recherche']: '0'; 
    $gi_rayon             = isset($_SESSION['tdm_rayon']) ? $_SESSION['tdm_rayon']: '';
    $gi_annee_min         = isset($_SESSION['tdm_annee_min']) ? $_SESSION['tdm_annee_min']: '';
    $gi_annee_max         = isset($_SESSION['tdm_annee_max']) ? $_SESSION['tdm_annee_max']: '';
    $gst_nom_epx          = isset($_SESSION['tdm_nom_epx']) ? $_SESSION['tdm_nom_epx']: '';
    $gst_prenom_epx       = isset($_SESSION['tdm_prenom_epx']) ? $_SESSION['tdm_prenom_epx']: '';
    $gst_variantes_epx    = isset($_SESSION['tdm_variantes_epx']) ? $_SESSION['tdm_variantes_epx']: 'oui';
    $gst_nom_epse         = isset($_SESSION['tdm_nom_epse']) ? $_SESSION['tdm_nom_epse']: '';
    $gst_prenom_epse      = isset($_SESSION['tdm_prenom_epse']) ? $_SESSION['tdm_prenom_epse']: '';
    $gst_variantes_epse   = isset($_SESSION['tdm_variantes_epse']) ? $_SESSION['tdm_variantes_epse']: 'oui';
  }
  unset($_SESSION['tdm_idf_commune_recherche']);
  unset($_SESSION['tdm_rayon']);
  unset($_SESSION['tdm_annee_min']);
  unset($_SESSION['tdm_annee_max']);
  unset($_SESSION['tdm_nom_epx']);
  unset($_SESSION['tdm_prenom_epx']);
  unset($_SESSION['tdm_variantes_epx']);
  unset($_SESSION['tdm_nom_epse']);
  unset($_SESSION['tdm_prenom_epse']);
  unset($_SESSION['tdm_variantes_epse']);
  $st_requete = "SELECT ca.idf,ca.nom FROM commune_acte ca join `stats_commune` sc on (ca.idf = sc.idf_commune) where `idf_type_acte` =".IDF_MARIAGE." and `idf_source` =".IDF_SOURCE_TD. " order by nom";
  $a_communes_acte = $pconnexionBD->liste_valeur_par_clef($st_requete);
  print('<form id="recherche_tdm" method="post" action='.$_SERVER['PHP_SELF'].'>');
  print('<div style="text-align:center">');
  print("<input type=hidden name=recherche value=\"\">");
  print("<input type=hidden name=mode value=\"RESULTATS\">");
  print('<div style="text-align:center"><br>');
  print('Commune/Paroisse : <select name="idf_commune_recherche" class="js-select-avec-recherche">');
  $a_communes_acte[0] = 'Toutes';
  print(chaine_select_options($gi_idf_commune,$a_communes_acte));
  print('</select>');
  print(" Rayon de recherche : <input type=text name=rayon size=2 maxlength=2 value=\"$gi_rayon\"> Km");
  print('<br></div>');
  
  //print("<div style=\"text-align:center\"><br>Ann&eacute;es de <input type=text name=annee_min size =4 value=\"$gi_annee_min\"> &agrave; <input type=text name=annee_max size =4 value=\"$gi_annee_max\"><br><br></div>");
  
  print('<div class="form-row col-md-12">'); 
  print('<div class="input-group col-md-offset-4 col-md-4 ">');
  print("<span class=\"input-group-addon\">Ann&eacute;es de</span><div class=\"lib_erreur\"><input type=text name=annee_min id=\"annee_min\" size=4 value=\"$gi_annee_min\" class=\"form-control\"></div>");
  print("<span class=\"input-group-addon\">&agrave;</span><div class=\"lib_erreur\"><input type=text name=annee_max size=4 id=\"annee_max\" value=\"$gi_annee_max\" class=\"form-control \"></div>");
  print('</div>');
  
  print('<div class="form-row col-md-12">');
  print("<label for=\"nom_epx\" class=\"col-form-label col-md-2\">Nom Epoux</label>");
  print('<div class="col-md-2">');
  print("<input type=text id=nom_epx name=nom_epx size=15 maxlength=30 value=\"$gst_nom_epx\" class=\"form-control\">");
  print('</div>');

  print("<label for=\"prenom_epx\" class=\"col-form-label col-md-2\">Pr&eacute;nom Epoux</label>");
  print('<div class="col-md-2">');
  print("<input type=text name=prenom_epx id=prenom_epx size=15 maxlength=30 value=\"$gst_prenom_epx\" class=\"form-control\">");
  print('</div>');
  
  print('<div class="form-check col-md-4">');
  if ($gst_variantes_epx=='')
    print('<input type=checkbox name=variantes_epx id=variantes_epx value="oui" class="form-check-input">');
  else
    print('<input type=checkbox name=variantes_epx id=variantes_epx value="oui" checked class="form-check-input">');   
  print('<label for="variantes_epx" class="form-check-label">Recherche par variantes connues</label>');
  print('</div>');
   
  print('</div>');
  print('<div class="form-row col-md-12">');
  
  print("<label for=\"nom_epse\" class=\"col-form-label col-md-2\">Nom Epouse</label>");
  print('<div class="col-md-2">');
  print("<input type=text id=nom_epse name=nom_epse size=15 maxlength=30 value=\"$gst_nom_epse\" class=\"form-control\">");
  print('</div>');

  print("<label for=\"prenom_epse\" class=\"col-form-label col-md-2\">Pr&eacute;nom Epouse</label>");
  print('<div class="col-md-2">');
  print("<input type=text name=prenom_epse id=prenom_epse size=15 maxlength=30 value=\"$gst_prenom_epse\" class=\"form-control\">");
  print('</div>');

  print('<div class="col-md-4">');
  if ($gst_variantes_epse=='')
    print('<input type=checkbox name=variantes_epse id=variantes_epse value="oui class="form-check-input">');
  else
   print('<input type=checkbox name=variantes_epse id=variantes_epse value="oui"  checked class="form-check-input">'); 
  print('<label for="variantes_epse" class="form-check-label">Recherche par variantes connues</label>');
  print('</div>');
   
  print('</div>');
  print('<div class="form-row col-md-12">');
  print('<button class="btn btn-primary col-md-4 col-md-offset-4" type=submit name=Rechercher>Lancer la recherche</button>');
  print('</div>');
  print("</form>");  
}

/**
 *  Affiche la page de résultats
 *  @param object $pconnexionBD Connexion BD
 *  @param integer $pi_idf_commune identifiant de la commune
 *  @param integer $pi_rayon rayon de recherche en km
 *  @param integer $pi_annee_min année minimale de recherche
 *  @param integer $pi_annee_max année maximale de recherche
 *  @param string $pst_nom_epx nom de l'époux
 *  @param string $pst_prenom_epx prénom de l'époux
 *  @param string $pst_variantes_epx recherche par variante de l'époux
 *  @param string $pst_nom_epse nom de l'épouse
 *  @param string $pst_prenom_epse prénom de l'épouse
 *  @param string $pst_variantes_epse recherche par variante de l'épouse
 *  @param integer $pi_num_page numéro de page          
 */ 
function affiche_page_resultats($pconnexionBD,$pi_idf_commune,$pi_rayon,$pi_annee_min,$pi_annee_max,$pst_nom_epx,$pst_prenom_epx,$pst_variantes_epx,$pst_nom_epse,$pst_prenom_epse,$pst_variantes_epse,$pi_num_page)
{
  global $gst_url_site;
  $a_requetes           = array();
  $a_clauses            = array();
  $requeteRecherche = new RequeteRecherche($pconnexionBD);
  $a_communes_acte = $pconnexionBD->liste_valeur_par_clef("SELECT idf,nom FROM commune_acte");
  $a_types_presence = $pconnexionBD->liste_valeur_par_clef("SELECT idf,nom FROM type_presence");
  $i_nb_prenoms_epx= 1;
  $st_variantes_prenoms_epx ='';
  $st_tables_prenom_epx ='';
  if (!empty($pst_prenom_epx))
  {
    $pst_prenom_epx  = str_replace('*','%', $pst_prenom_epx);
    $a_prenoms_simples_epx = preg_split('/[,\s\/\=\&\-]+/',$pst_prenom_epx);       
    foreach ($a_prenoms_simples_epx as $st_prenom)
    {
      $a_clauses[] = "prn_simple_epx$i_nb_prenoms_epx.libelle ".$requeteRecherche->clause_droite_prenom($st_prenom,$pst_variantes_epx,$i_nb_prenoms_epx);
      $st_variantes_prenoms_epx.=join("\n",$requeteRecherche->variantes_prenoms());
      $st_tables_prenom_epx .= " join `groupe_prenoms` gp$i_nb_prenoms_epx on (prn_p1.idf=gp$i_nb_prenoms_epx.idf_prenom)  join `prenom_simple` prn_simple_epx$i_nb_prenoms_epx on (gp$i_nb_prenoms_epx.idf_prenom_simple =prn_simple_epx$i_nb_prenoms_epx.idf) ";
      $i_nb_prenoms_epx++; 
    }
  }
  $st_tables_prenom_epse = '';
  $st_variantes_prenoms_epse ='';
  if (!empty($pst_prenom_epse))
  {
    $pst_prenom_epse  = str_replace('*','%', $pst_prenom_epse);
    $a_prenoms_simples_epse = preg_split('/[,\s\/\=\&\-]+/',$pst_prenom_epse);
    $i_nb_prenoms_epse= $i_nb_prenoms_epx;
    foreach ($a_prenoms_simples_epse as $st_prenom)
    {
      $a_clauses[] = "prn_simple_epse$i_nb_prenoms_epse.libelle ".$requeteRecherche->clause_droite_prenom($st_prenom,$pst_variantes_epse,$i_nb_prenoms_epse);
      $st_variantes_prenoms_epse.=join("\n",$requeteRecherche->variantes_prenoms());
      $st_tables_prenom_epse .= " join `groupe_prenoms` gp$i_nb_prenoms_epx on (prn_p2.idf=gp$i_nb_prenoms_epx.idf_prenom) join `prenom_simple` prn_simple_epse$i_nb_prenoms_epse on (gp$i_nb_prenoms_epx.idf_prenom_simple=prn_simple_epse$i_nb_prenoms_epse.idf) ";
      $i_nb_prenoms_epse++; 
    }
  }
  $gst_requete_nb_actes= "select distinct u.idf_acte,u.patronyme_epoux,prn_p1.libelle,p1.idf_type_presence,u.patronyme_epouse,prn_p2.libelle,p2.idf_type_presence,a.date,a.idf_commune,a.annee,a.mois,a.jour,u.idf_source,a.details_supplementaires from `union` u  join `acte` a on (u.idf_acte=a.idf) join `personne` p1 on (u.idf_epoux=p1.idf) join `prenom` prn_p1 on (p1.idf_prenom=prn_p1.idf) $st_tables_prenom_epx join `personne` p2 on (u.idf_epouse=p2.idf) join `prenom` prn_p2 on (p2.idf_prenom=prn_p2.idf) $st_tables_prenom_epse where";
  $a_clauses[]= "a.idf_source IN (".IDF_SOURCE_TD.','.IDF_SOURCE_RELEVES_AGC.')';
  $a_clauses[]= "a.idf_type_acte=".IDF_MARIAGE;
  $a_clauses[]=empty($pi_annee_min) ? "a.annee>=1793": "a.annee>=$pi_annee_min" ;
  if ($pi_annee_max != '') $a_clauses[]="a.annee<=$pi_annee_max" ;
  if ($pi_idf_commune!=0)
    $a_clauses[]="u.idf_commune ".$requeteRecherche->clause_droite_commune($pi_idf_commune,$pi_rayon,'');
  if (!empty($pst_nom_epx))
  {  
    $pst_nom_epx  = str_replace('*','%', $pst_nom_epx);    
    $a_clauses[]="u.patronyme_epoux ".$requeteRecherche->clause_droite_patronyme($pst_nom_epx ,$pst_variantes_epx,1);
  }
  if (!empty($pst_nom_epse)) 
  {
    $pst_nom_epse  = str_replace('*','%', $pst_nom_epse);
    $a_clauses[]="u.patronyme_epouse ".$requeteRecherche->clause_droite_patronyme($pst_nom_epse,$pst_variantes_epse,2);  
  }
  $st_clauses = implode(" and ",$a_clauses);
  $gst_requete_actes = "$gst_requete_nb_actes $st_clauses order by annee,mois,jour";
  $a_actes=$pconnexionBD->sql_select_multiple($gst_requete_actes);
  $i_nb_actes = count($a_actes);
  if ($i_nb_actes>0)
  {
    $_SESSION['mode'] = 'RESULTATS';
    print("<div class=\"text-center\"><div class=\"badge\">$i_nb_actes</div> occurrences trouv&eacute;es. ");
    print('<div id="curseur" class="infobulle"></div>');
    print('<div>');
    function premier_elem($a_tab) {
      return $a_tab[0];
    }
    $a_idf_acte=array_map("premier_elem",$a_actes);
    $gst_requete_intv = "select idf_acte,personne.idf,sexe,patronyme, prenom.libelle from personne join prenom on (personne.idf_prenom=prenom.idf) where idf_acte in (".join(',',$a_idf_acte).") and idf_type_presence=".IDF_PRESENCE_INTV. " order by idf_acte,personne.idf";
    $a_intervenants=$pconnexionBD->liste_valeur_par_doubles_clefs($gst_requete_intv);  
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
    foreach ($a_actes as $a_acte)
    {
      list($i_idf_acte,$st_patro_epoux,$st_prenom_epoux,$i_idf_type_presence_epoux,$st_patro_epouse,$st_prenom_epouse,$i_idf_type_presence_epouse,$st_date,$i_idf_commune,$i_annee,$i_mois,$i_jour,$i_idf_source,$i_detail)=$a_acte;
      if ($i_idf_source==IDF_SOURCE_TD)
      {
         switch ($i_detail)
         {
            case 1:
               $st_icone_td = 'tdv.png';
               $st_detail = "<a href=\"$gst_url_site/InfosTD.php?idf_acte=$i_idf_acte\" target=\"_blank\"><img src=\"./images/$st_icone_td\" border=0 alt=\"infos\"></a>";
            break;
            case 2:
               $st_icone_td = 'tdi.png';             
               $st_detail = "<a href=\"$gst_url_site/PropositionModification.php?idf_acte=$i_idf_acte\" target=\"_blank\"><img src=\"./images/$st_icone_td\" border=0 alt=\"infos\" ></a>";
            break;
            default:
               $st_icone_td = 'td.png';
               $st_detail = "<a href=\"$gst_url_site/PropositionModification.php?idf_acte=$i_idf_acte\" target=\"_blank\"><img src=\"./images/$st_icone_td\" border=0 alt=\"infos\"></a>";                      
         }
       }
       else
       {
          $st_icone = 'ninfos.png';
          $st_detail = "<img src=\"./images/$st_icone\" border=0 alt=\"infos\" class=\"popup\">";
       }      
      $a_tableau[] =  array($a_parties[$i_idf_acte],$a_communes_acte[$i_idf_commune],$st_date,"$st_prenom_epoux $st_patro_epoux ($a_types_presence[$i_idf_type_presence_epoux]) X $st_prenom_epouse $st_patro_epouse ($a_types_presence[$i_idf_type_presence_epouse])",$st_detail);
    }
    $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_tableau),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Parties','Commune','Date','Couple recherch&eacute;',''));
    $pagination->init_page_cour($pi_num_page);
    $pagination->affiche_entete_liens_navigation();
    $pagination->affiche_tableau_simple($a_tableau);
    $pagination->affiche_entete_liens_navigation();    
  }
  else
  {
     print("<div class=\"alert alert-danger\">Aucun r&eacute;sultat</div>");
  }
  print('<div align=center><br>');
  print('<div class="btn-group col-md-offset-3 col-md-6" role="group">');
  print("<a class=\"btn btn-info\" href=\"".$_SERVER['PHP_SELF']."?recherche=retour\" role=\"button\">Revenir &agrave; la page de recherche</a>");
  print("<a class=\"btn btn-warning\" href=\"".$_SERVER['PHP_SELF']."?recherche=nouvelle\" role=\"button\">Commencer une nouvelle recherche</a>");
  print("</div></div>");
}

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr"> ');
print("<title>TDM de l'AGC</title>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print("<link href='css/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='css/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='css/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='css/select2.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='js/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='js/select2.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
$(".popup").hover(function() {
        $(this).css('cursor','pointer').attr('title', "Ce mariage est d\u00e9j\u00e0 relev\u00e9 filiativement dans la base de l'AGC");
    }, function() {
        $(this).css('cursor','auto');
    });

$.fn.select2.defaults.set( "theme", "bootstrap" );	

$(".js-select-avec-recherche").select2(); 
});
</script>
<?php
print("</head>");
print("<body>");
print('<div class="container">');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$i_nb_tdms=$connexionBD->sql_select1("select sum( nb_actes ) from `stats_commune` where `idf_type_acte` =".IDF_MARIAGE." and `idf_source` =".IDF_SOURCE_TD);
//$i_nb_mar=$connexionBD->sql_select1("select count(*) from `acte` where annee>=1793 and idf_type_acte` =".IDF_MARIAGE."and  idf_source IN (".IDF_SOURCE_TD.','.IDF_SOURCE_RELEVES_AGC.')');

?>
<div>L'Association G&eacute;n&eacute;alogique de la Charente laisse en acc&egrave;s libre la consultation de ses <?php print ($i_nb_tdms); ?> relev&eacute;s de mariage issus des tables d&eacute;cennales.</div>
<div>Ces relev&eacute;s non filiatifs vous permettront de localiser au XIX&egrave;me si&egrave;cle les mariages en Charente.</div>
<div><br>Si par cet interm&eacute;diaire, vous avez r&eacute;ussi &agrave; obtenir des renseignements compl&eacute;mentaires sur un mariage qui vous int&eacute;resse, vous pouvez le compl&eacute;ter gr&acirc;ce &agrave; notre interface de saisie.</div>
<div>L'acte compl&eacute;t&eacute; sera consultable librement par tout un chacun et vous faciliterez ainsi la recherche d'autres g&eacute;n&eacute;alogistes.</div>
<div><br>Merci de respecter cet esprit d'entraide et de participer &agrave; votre tour.</div>
<?php

$st_session_mode = empty($_SESSION['mode']) ? 'DEMANDE' : $_SESSION['mode'];   
$gst_mode = empty($_POST['mode']) ? $st_session_mode: $_POST['mode'] ;
$gst_type_recherche         = isset($_GET['recherche']) ? $_GET['recherche'] : '';
if ($gst_type_recherche=='nouvelle' || $gst_type_recherche=='retour')
  $gst_mode = 'DEMANDE';
  
switch ($gst_mode)
{
  case 'DEMANDE':
    affiche_page_recherche($connexionBD,$gst_type_recherche);    
  break;
  case 'RESULTATS':
    $i_session_idf_commune      = empty($_SESSION['tdm_idf_commune_recherche']) ? '0' : $_SESSION['tdm_idf_commune_recherche'];
    $i_session_rayon            = empty($_SESSION['tdm_rayon']) ? '' : $_SESSION['tdm_rayon'];
    $i_session_annee_min        = empty($_SESSION['tdm_annee_min']) ? '' : $_SESSION['tdm_annee_min'];
    $i_session_annee_max        = empty($_SESSION['tdm_annee_max']) ? '' : $_SESSION['tdm_annee_max'];
    $st_session_nom_epoux       = empty($_SESSION['tdm_nom_epx']) ? '' : $_SESSION['tdm_nom_epx'];
    $st_session_prenom_epoux    = empty($_SESSION['tdm_prenom_epx']) ? '' : $_SESSION['tdm_prenom_epx'];
    $st_session_variantes_epx   = empty($_SESSION['tdm_variantes_epx']) ? '' : $_SESSION['tdm_variantes_epx'];
    $st_session_nom_epouse      = empty($_SESSION['tdm_nom_epse']) ? '' : $_SESSION['tdm_nom_epse'];
    $st_session_prenom_epouse   = empty($_SESSION['tdm_prenom_epse']) ? '' : $_SESSION['tdm_prenom_epse'];
    $st_session_variantes_epse  = empty($_SESSION['tdm_variantes_epse']) ? '' : $_SESSION['tdm_variantes_epse'];
    $gi_idf_commune             = empty($_POST['idf_commune_recherche']) ? $i_session_idf_commune : (int) $_POST['idf_commune_recherche'];
    $gi_rayon                   = empty($_POST['rayon']) ? $i_session_rayon : (int) trim($_POST['rayon']);
    $gi_annee_min               = empty($_POST['annee_min']) ? $i_session_annee_min: (int) trim($_POST['annee_min']);
    $gi_annee_max               = empty($_POST['annee_max']) ? $i_session_annee_max: (int) trim($_POST['annee_max']);
    
    if (get_magic_quotes_gpc())
    {
      if (ini_get('magic_quotes_sybase'))
      {
        $gst_nom_epx        = empty($_POST['nom_epx'])? $st_session_nom_epoux :str_replace("''", "'", substr(trim($_POST['nom_epx']),0,30));
        $gst_prenom_epx     = empty($_POST['prenom_epx'])? $st_session_prenom_epoux :str_replace("''", "'", substr(trim($_POST['prenom_epx']),0,35));
        $gst_nom_epse        = empty($_POST['nom_epse'])? $st_session_nom_epouse :str_replace("''", "'", substr(trim($_POST['nom_epse']),0,30));
        $gst_prenom_epse     = empty($_POST['prenom_epse'])? $st_session_prenom_epouse :str_replace("''", "'", substr(trim($_POST['prenom_epse']),0,35));
      } 
      else
      {
        $gst_nom_epx        = empty($_POST['nom_epx'])? $st_session_nom_epoux : stripslashes(substr(trim($_POST['nom_epx']),0,30));
        $gst_prenom_epx     = empty($_POST['prenom_epx'])? $st_session_prenom_epoux :stripslashes(substr(trim($_POST['prenom_epx']),0,35));
        $gst_nom_epse        = empty($_POST['nom_epse'])? $st_session_nom_epouse : stripslashes(substr(trim($_POST['nom_epse']),0,30));
        $gst_prenom_epse     = empty($_POST['prenom_epse'])? $st_session_prenom_epouse :stripslashes(substr(trim($_POST['prenom_epse']),0,35));
      }
    }
    else 
    {
      $gst_nom_epx        = empty($_POST['nom_epx'])? $st_session_nom_epoux :substr(trim($_POST['nom_epx']),0,30);
      $gst_prenom_epx     = empty($_POST['prenom_epx'])? $st_session_prenom_epoux :substr(trim($_POST['prenom_epx']),0,35);
      $gst_nom_epse        = empty($_POST['nom_epse'])? $st_session_nom_epouse :substr(trim($_POST['nom_epse']),0,30);
      $gst_prenom_epse     = empty($_POST['prenom_epse'])? $st_session_prenom_epouse :substr(trim($_POST['prenom_epse']),0,35);  
    }
    $gst_variantes_epx          = empty($_POST['variantes_epx']) ? $st_session_variantes_epx : $_POST['variantes_epx'];
    $gst_variantes_epse         = empty($_POST['variantes_epse']) ? $st_session_variantes_epse: $_POST['variantes_epse'];
    $gst_nom_epx  = preg_replace('/\*+/','*', $gst_nom_epx);
    $gst_prenom_epx  = preg_replace('/\*+/','*', $gst_prenom_epx);
    $gst_nom_epse  = preg_replace('/\*+/','*', $gst_nom_epse);
    $gst_prenom_epse  = preg_replace('/\*+/','*', $gst_prenom_epse); 
    $pf=@fopen("$gst_rep_logs/$gst_fichier_log",'a');
    date_default_timezone_set($gst_time_zone);
    list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
    $i_mois++;
    $i_annee+=1900;
    $gst_adresse_ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
    $st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
    $st_chaine_log = join(';',array($st_date_log,$gst_adresse_ip,$gst_nom_epx,$gst_prenom_epx,$gst_nom_epse,$gst_prenom_epse,$gi_idf_commune,$gi_rayon,$gi_annee_min,$gi_annee_max));
    @fwrite($pf,"$st_chaine_log\n"); 
    @fclose($pf);
    $_SESSION['tdm_idf_commune_recherche']    = $gi_idf_commune;
    $_SESSION['tdm_rayon']                    = $gi_rayon;
    $_SESSION['tdm_annee_min']                = $gi_annee_min;
    $_SESSION['tdm_annee_max']                = $gi_annee_max;
    $_SESSION['tdm_nom_epx']                  = $gst_nom_epx;
    $_SESSION['tdm_prenom_epx']               = $gst_prenom_epx;
    $_SESSION['tdm_variantes_epx']            = $gst_variantes_epx;
    $_SESSION['tdm_nom_epse']                 = $gst_nom_epse;
    $_SESSION['tdm_prenom_epse']              = $gst_prenom_epse;
    $_SESSION['tdm_variantes_epse']           = $gst_variantes_epse;
    $gi_get_num_page = empty($_GET['num_page']) ? 1 : (int) $_GET['num_page'];
    $gi_num_page = empty($_POST['num_page']) ? $gi_get_num_page :(int) $_POST['num_page'];
    $st_erreur_nom = '';
    $b_pers1_def = false;
    $b_pers2_def = false;
    if ($gst_nom_epx!= '' && $gst_nom_epx !='*')
      $b_pers1_def = true;
    if ($gst_nom_epse!= '' && $gst_nom_epse !='*')
      $b_pers2_def = true;
    if (!($b_pers1_def || $b_pers2_def))
    {
        print("<div>Au moins un patronyme doit &ecirc;tre d&eacute;fini</div>"); 
        print("<a href=\"".$_SERVER['PHP_SELF']."?recherche=nouvelle\">Nouvelle Recherche</a><br>");
        exit();     
    }
  
    if ($b_pers1_def && (($gst_nom_epx== '*') || strlen($gst_nom_epx)<3))
      $st_erreur_nom ="<div>Le nom de l'&eacute;poux doit comporter au moins trois caract&egrave;res</div>\n"; 
    if ($b_pers2_def && ($gst_nom_epse== '*' || strlen($gst_nom_epse)<3))
      $st_erreur_nom .= "<div>Le nom de l'&eacute;pouse doit comporter au moins trois caract&egrave;res</div>\n";
    if ($st_erreur_nom!='')
    {
        print(nl2br($st_erreur_nom));
        print("<a href=\"".$_SERVER['PHP_SELF']."?recherche=nouvelle\"><class=\"RetourReponses\">Nouvelle Recherche</a><br>");
        exit();
    }
    $i_nb_cnx=$connexionBD->sql_select1("select count(*) from `connexions_tdm` where adresse_ip='$gst_adresse_ip' and `date`>=date_sub(now(),INTERVAL 5 MINUTE)");
    if ($i_nb_cnx>$gi_seuil_connexions)
    {
       $st_sujet = "Vitrine TDM - Trop de connexions depuis $gst_adresse_ip";
       $st_entete  = 'MIME-Version: 1.0' . "\r\n";    
       $st_entete .= 'Content-type: text/html; charset=cp1252' . "\r\n";
       $st_entete .= "From: BASE AGC <$gst_email_agcinfo>\r\n";
       $st_texte = "L'adresse ip $gst_adresse_ip a fait $i_nb_cnx demandes en 5 minutes et a été temporairement bloquée<br>";
       $st_texte = "Voir les logs dans <a href=\"$gst_url_site/logs/$gst_fichier_log\">$gst_url_site/logs/$gst_fichier_log</a><br>";
       mail($gst_emails_gestbase, $st_sujet, $st_texte, $st_entete);
       die("Trop de connexions");
    }
    $connexionBD->execute_requete("insert into connexions_tdm(date,adresse_ip) values(now(),'$gst_adresse_ip')");   
    affiche_page_resultats($connexionBD,$gi_idf_commune,$gi_rayon,$gi_annee_min,$gi_annee_max,$gst_nom_epx,$gst_prenom_epx,$gst_variantes_epx,$gst_nom_epse,$gst_prenom_epse,$gst_variantes_epse,$gi_num_page);     
  break;
  default:
    unset($_SESSION['mode']);
}
print("</div></body>");
print("</html>");
$connexionBD->ferme();
?>