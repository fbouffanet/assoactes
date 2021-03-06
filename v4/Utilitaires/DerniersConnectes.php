<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_UTILITAIRES);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/PaginationTableau.php');

print('<!DOCTYPE html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print('<title>Base '.SIGLE_ASSO.': Dernières connexions</title>');
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('</head>');

/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/


print("<body>");
print('<div class="container">');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gi_num_page_cour = empty($_POST['num_page']) ? 1 : $_POST['num_page'];
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);


if (isset($_GET['tri_adh_cnx']))
{
  if ($_GET['tri_adh_cnx']=='DateCnx')
  {
      $gst_mode_tri = 'DateCnx';
      $_SESSION['tri_adh_cnx'] = 'DateCnx';
  }
  if ($_GET['tri_adh_cnx']=='NomAdh')
  {
      $gst_mode_tri = 'NomAdh';
      $_SESSION['tri_adh_cnx'] = 'NomAdh';
  } 
}

$gst_mode_tri = isset($_SESSION['tri_adh_cnx']) ? $_SESSION['tri_adh_cnx']: 'DateCnx';

$st_requete = "SELECT count(*) 
FROM `adherent`
WHERE `derniere_connexion` IS NOT NULL";
$i_nbadh_connectes=$connexionBD->sql_select1($st_requete);

$st_requete = "SELECT count(*) 
FROM `adherent`
WHERE date(`derniere_connexion`) = date(now())";
$i_nbadh_connectes_aujourdhui=$connexionBD->sql_select1($st_requete);
print('<div class="panel panel-primary">');
print("<div class=\"panel-heading\">$i_nbadh_connectes adh&eacute;rents se sont connect&eacute;s depuis le d&eacute;but de V4</div>");
print('<div class="panel-body">');
print("<div class=\"alert alert-info\">$i_nbadh_connectes_aujourdhui adh&eacute;rents se sont connect&eacute;s aujourd'hui</div>");


$st_requete = "SELECT date_format(date,'%d/%m'),nbre from `stats_cnx` order by date desc limit 7";
$a_nb_dernieres_cnx = $connexionBD->liste_valeur_par_clef($st_requete);
if (count($a_nb_dernieres_cnx)>0)
{
   print("<table class=\"table table-bordered table-striped\">");
   print("<tr>");
   print("<th>Date</th>");
   foreach (array_keys($a_nb_dernieres_cnx) as $st_date)
   {
      print("<td>$st_date</td>");
   }
   print("</tr>");
   print("<tr>");
   print("<th>Visiteurs uniques</th>");
    foreach (array_values($a_nb_dernieres_cnx) as $i_nbre)
   {
      print("<td>$i_nbre</td>");
   }
   print("</tr>");
   print("</table>");
}

switch($gst_mode_tri)
{   
   case 'NomAdh' :
     $gst_tri_requete = "ORDER BY `nom` ASC";
     $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nbadh_connectes,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Nom','Prénom','Numéro','Email','Code<br>Postal','Ville','Statut','Ann&eacute;e de<br> cotisation',"<a href=\"".$_SERVER['PHP_SELF']."?tri_adh_cnx=DateCnx\">Date de la<br>derni&egrave;re connexion</a>"));
   break;
   default:
   case 'DateCnx':
      $gst_tri_requete = "ORDER BY `derniere_connexion` DESC";
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nbadh_connectes,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array("<a href=\"".$_SERVER['PHP_SELF']."?tri_adh_cnx=NomAdh\">Nom</a>",'Prénom','Numéro','Email','Code<br>Postal','Ville','Statut','Ann&eacute;e de<br> cotisation','Date de la<br> derni&egrave;re connexion'));
}

$st_requete = "SELECT nom, prenom,idf,email_perso,cp,ville,statut,annee_cotisation,DATE_FORMAT(derniere_connexion,'%d/%m/%Y %k:%i') 
FROM `adherent`
WHERE `derniere_connexion` IS NOT NULL
$gst_tri_requete
";

$ga_cnx = $connexionBD->sql_select_multiple($st_requete);
$ga_tableau = array();
foreach ($ga_cnx as $a_ligne)
{
   list($st_nom,$st_prenom,$i_idf,$st_email_perso,$st_cp,$st_ville,$st_statut,$i_annee_cotisation,$st_der_cnx) = $a_ligne;
   $ga_tableau[] = array($st_nom,$st_prenom,"<a href=\"../ListeAdherents.php?mod=$i_idf\">$i_idf</a>",$st_email_perso,$st_cp,$st_ville,$st_statut,$i_annee_cotisation,$st_der_cnx);
}

print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" name=\"DerniersConnectes\">");
$pagination->init_page_cour($gi_num_page_cour);
$pagination->affiche_entete_liste_select("DerniersConnectes");
$pagination->affiche_tableau_simple($ga_tableau);
print("</form></div></div>");
print("</div></body></html>");
?>
