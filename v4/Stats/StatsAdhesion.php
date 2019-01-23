<!DOCTYPE html> 
<html lang="fr">
<head>
  <title>Statistiques des adh�sions</title>
  <meta charset="iso-8859-15">       <!-- ou charset="utf-8" -->
  <link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta http-equiv="content-language" content="fr">
<script src='Commun/jquery-min.js' type='text/javascript'></script>
<script src='Commun/menu.js' type='text/javascript'></script>
    
</head>

<body>
<?php
//http://127.0.0.1:8888/Stats_Adhesion.php
/*
Programme d'affichage du nombre d'adh�rents d'une ann�e et du montant des adh�sions 
r�parti en paiement par internet et ch�que
PL 05/14
*/

$gst_chemin = "../";

require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/Identification.php");

// La page est reservee uniquement aux gens ayant les droits utilitaires
require_once("$gst_chemin/Commun/VerificationDroits.php");

verifie_privilege(DROIT_STATS);
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/PaginationTableau.php");
require_once("$gst_chemin/Commun/commun.php");

function Mois_Annee ()  // Function pour affichage du mois en fran�ais
{
   $mois = array('', 'Janvier', 'F�vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao�t', 'Septembre', 'Octobre', 'Novembre', 'D�cembre');
   $mois_numero = date("n");   
   $mois_complet = $mois[$mois_numero];
   $jour = date("d");
   $annee = date("Y");
   return $jour." ".$mois_complet." ".$annee;
}


/* --- Cumule et affiche les r�sultats --- */
function Affiche_Stats()
{
  global $connexionBD;
  $annee = (int) $_POST['annee'];
  $ga_nb_cartes = array();
  $ga_nb_cheques= array();
  $ga_tarifs = array(15,33,43);
  foreach ($ga_tarifs as $i_tarif)
  {
     $ga_nb_cartes[$i_tarif]=0;
     $ga_nb_cheques[$i_tarif]=0;
  }
  
  $st_requete = "select prix, jeton_paiement, concat(prenom,' ',nom,' (',idf,')') from adherent where annee_cotisation = $annee and prix != 0";
  $date_jour = Mois_Annee();
  print("<div CLASS=TITRE>Statistiques du nombre et montant des adh&eacute;sions pour l'ann&eacute;e $annee au $date_jour</div>");
  $a_adhesions=$connexionBD->sql_select_multiple($st_requete);
  foreach ( $a_adhesions as $a_adh)
  {
    list($i_prix,$st_jeton,$st_adherent) = $a_adh;
    if (in_array($i_prix,$ga_tarifs))
    {
      $st_jeton = trim($st_jeton);
      if (empty($st_jeton))
        $ga_nb_cheques[$i_prix]++;
     else
        $ga_nb_cartes[$i_prix]++;
    }
    else
       print("<div class=IMPORTANT>Tarif $i_prix inexistant pour l'adh&eacute;rent $st_adherent</div>");
   }
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	 print("<br><br><div align=center>");
	
   
   print("</div>");
	
	print("<div align=center>");
	print("<table border=1 cellpadding=5>");
	print("<tr><th>&nbsp;</th>");
  foreach ($ga_tarifs as $i_tarif)
  {
    print("<th>Adh&eacute;sion $i_tarif euros</th>");
  }	
	print("<th>&nbsp;</th></tr>");
	print("<tr>");
	print("<td> Paiement par ch�que </td>");
  $gi_nb_tot_cheques = 0;
  $gi_tot_cheques=0;
  foreach ($ga_nb_cheques as $i_tarif => $i_nb_cheques)
  {
     $i_montant = $i_nb_cheques *$i_tarif;
     print(sprintf("<td>%d adh&eacute;sions pour %d euros </td>",$i_nb_cheques,$i_montant));
     $gi_nb_tot_cheques+=$i_nb_cheques;
     $gi_tot_cheques+=$i_montant;  
  }
  print(sprintf("<td>Soit %d adh&eacute;sions pour %d euros </td>",$gi_nb_tot_cheques,$gi_tot_cheques));
	print("</tr>");
	print("<tr>");
	print("<td> Paiement par Internet </td>");
  $gi_nb_tot_cartes = 0;
  $gi_tot_cartes=0;
  foreach ($ga_nb_cartes as $i_tarif => $i_nb_cartes)
  {
     $i_montant = $i_nb_cartes*$i_tarif;
     print(sprintf("<td>%d adh&eacute;sions pour %d euros </td>",$i_nb_cartes,$i_montant));
     $gi_nb_tot_cartes+=$i_nb_cartes;
     $gi_tot_cartes+=$i_montant;  
  }
  print(sprintf("<td>Soit %d adh&eacute;sions pour %d euros </td>",$gi_nb_tot_cartes,$gi_tot_cartes));

	print("<tr>");
	print("<td> Soit au total </td>");
  $gi_nb_tot_adhesions = 0;
  $gi_tot_adhesions=0;
  foreach ($ga_tarifs as $i_tarif)
  {
     $i_montant=$ga_nb_cheques[$i_tarif]*$i_tarif+$ga_nb_cartes[$i_tarif]*$i_tarif;
     print(sprintf("<td>%d adh&eacute;sions pour %d euros </td>",$ga_nb_cheques[$i_tarif]+$ga_nb_cartes[$i_tarif],$i_montant));
     $gi_nb_tot_adhesions+=$ga_nb_cheques[$i_tarif]+$ga_nb_cartes[$i_tarif];
     $gi_tot_adhesions+=$i_montant;
  }
  print(sprintf("<td>Soit %d adh&eacute;sions pour %d euros </td>",$gi_nb_tot_adhesions,$gi_tot_adhesions)); 
	print("</tr>");
	print("</table><br>");
	
	print("<p><input type=submit value='Retour' name='retour_annee'></p>");  
  print("<input type=hidden name=mode value=\"DEPART\">");
  print("</div><br>");
  print("</form>");	
}

/* --- Saisie de l'ann�e � afficher --- */

function Saisie_annee()
{
   global $connexionBD;
   $a_annees = $connexionBD->sql_select( $st_requete = "SELECT DISTINCT (`annee_cotisation`) FROM `adherent` ORDER BY `annee_cotisation`"); 
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	 print("<br><br><div align=center>");
   print("<p><h2>Statistiques du nombre et montant des adh�sions</h2></p><br>");
   print("</div><br>");
   print("<div align=center>");
   print("<select name=annee>");
	 print chaine_select_options_simple('',$a_annees);
	 print("</select>"); 
	 print("<p><input type=submit value='Valider' name='valide_annee'></p>");  
   print("<input type=hidden name=mode value=\"AFFICHE\">");
   print("</div><br>");
   print("</form>");
}

/* --- D�but du programme --- */
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

$gst_mode = empty($_POST['mode']) ? 'DEPART': $_POST['mode'] ;
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

switch ($gst_mode) 
{
   case 'DEPART' : 
      Saisie_annee(); 
   break;
   case 'AFFICHE' : 
		Affiche_Stats($connexionBD); 
   break;
}


//=====================================================================================
// requ�te SQL qui compte le nombre  d'adh�rent par ann�e

$st_requete = "SELECT a.annee_cotisation,count(*),sum(case when jeton_paiement !='' then 1 else 0 end)  FROM `adherent` a where a.statut in ('B','I') group by a.annee_cotisation order by a.annee_cotisation desc";
echo "<div class=TITRE>Nbrs Adh(B+I) ann�e de cotisation</div><br>"; 
$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'stats_adhesions',3,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Ann&eacute;e','Nbrs','Adh&eacute;sions<br> en ligne'));
$pagination->init_param_bd($connexionBD,$st_requete);
$pagination->init_page_cour($gi_num_page_cour);
$pagination->affiche_tableau_simple_requete_sql();

//=================================================================================== 
// d�but du tableau Adh�sion par mois
// requ�te SQL Comptage des demandes par mois
$st_requete = "SELECT YEAR(date_paiement)as annee, MONTH(date_paiement)as mois, COUNT(*)as nombre FROM adherent WHERE `statut`IN ('B','I') GROUP BY YEAR(date_paiement) desc,MONTH(date_paiement) desc ";
echo "<br><div class=TITRE>Adh&eacute;sion par mois </div><br>";
$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'stats_adhesions',3,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Ann&eacute;e','Mois','Nbrs'));
$pagination->init_param_bd($connexionBD,$st_requete);
$pagination->init_page_cour($gi_num_page_cour);
$pagination->affiche_tableau_simple_requete_sql();
 
//====================================================================================== 
// Nbrs Adh par statut et ann�e de cotisation
  
$st_requete = 'SELECT a.annee_cotisation,sa.nom,count(*) FROM `adherent` a  join `statut_adherent` sa on (sa.idf=a.statut) group by a.annee_cotisation,a.statut order by a.annee_cotisation desc,a.statut'; 
echo "<div class=TITRE>Nbrs Adh par statut et ann�e de cotisation</div><br>";
$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'stats_adhesions',3,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Ann&eacute;e','Statut','Nbrs'));
$pagination->init_param_bd($connexionBD,$st_requete);
$pagination->init_page_cour($gi_num_page_cour);
$pagination->affiche_tableau_simple_requete_sql();

//R�partition des Adh�rents  

// Combien en France
$st_requete = ("SELECT COUNT( * ) as Nbrs , left( cp, 2 ) as Departement FROM `adherent` WHERE `pays` LIKE 'france' AND `statut` IN ('B', 'I')GROUP BY left( cp, 2 )");
echo "<div class=TITRE>Adh&eacute;rents par d&eacute;partement</div><br>";
$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'stats_adhesions',3,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Nbrs','D&eacute;p'));
$pagination->init_param_bd($connexionBD,$st_requete);
$pagination->init_page_cour($gi_num_page_cour);
$pagination->affiche_tableau_simple_requete_sql();


// Combien hors de France
$st_requete=("SELECT COUNT( * ) as Nbrs ,pays FROM `adherent` WHERE `pays` NOT LIKE 'france' AND `statut` IN ('B', 'I') GROUP BY pays order by pays");	
echo "<div class=TITRE>Adh&eacute;rents hors de France</div><br>";
$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'stats_adhesions',3,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Nbrs','Pays'));
$pagination->init_param_bd($connexionBD,$st_requete);
$pagination->init_page_cour($gi_num_page_cour);
$pagination->affiche_tableau_simple_requete_sql();

?>
</body>
</html>
