<?php

session_start();

//http://127.0.0.1:8888/Recherche_Sommaire.php
/*
Programme de recherche des �l�ments du sommaire des bulletins AGC
PL 06/13
*/


require_once 'Commun/config.php';
require_once('Commun/constantes.php');
require_once 'Commun/commun.php';
require_once('Commun/ConnexionBD.php');
require_once('Commun/PaginationTableau.php');

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='js/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
print("</script>");
print('<title>Recherche du sommaire des bulletins</title>');
print('</head>');

print("\n<body>");
//print('<div class="container">');

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

/*
CREATE TABLE IF NOT EXISTS `sommaire`
( 
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `numero` smallint(3),        num�ro du bulletin
  `moisannee` varchar(30),     mois et ann�e du bulletin
  `rubrique` text,             rubrique du sommaire
  `auteur` varchar(50),        auteur de la rubrique correspondante
  `type` varchar(5),           art pour article, asc pour ascendance, fam pour famille, cou pour cousins, des pour descendance
  `flag` enum ('O', 'N'),      pour utilisation ult�rieure
   PRIMARY KEY (`idf`)
);
*/

/* --- Affiche la liste des rubriques, noms articles, familles, ascendances, descendances et cousinage --- */
function Affiche_noms($type, $sconnexionBD)
{
   global $gi_num_page_cour,$gst_mode;
	
   switch ($type) 
   {
      case 'RUB' :
         $session_numero = isset($_SESSION['rubrique']) ? $_SESSION['rubrique'] : '';
         $numero = isset($_POST['rubrique']) ? $_POST['rubrique'] : $session_numero;
         $_SESSION['rubrique']= $numero;
			$titre = "Sommaire du num�ro ".$numero;
      break;
      case 'ART' :
         $session_article = isset($_SESSION['article'])? $_SESSION['article'] : '';
         $auteur = isset($_POST['article']) ? $_POST['article'] : $session_article ;
         $_SESSION['article']= $auteur;
			$titre = "Articles de ".$auteur;
      break;
      case 'FAM' :
         $session_famille = isset($_SESSION['famille'])? $_SESSION['famille'] : ''; 
         $auteur = isset($_POST['famille']) ?  $_POST['famille'] : $session_famille;
         $_SESSION['famille']= $auteur;
			$titre = "Famille �tudi�e de ".$auteur;
      break;
      case 'ASC' :
         $session_ascendance = isset($_SESSION['ascendance'])? $_SESSION['ascendance'] : ''; 
         $auteur = isset($_POST['ascendance']) ? $_POST['ascendance'] : $session_ascendance;
         $_SESSION['ascendance']= $auteur;
			$titre = "Ascendance de ".$auteur;
      break;
      case 'DES' :
         $session_descendance = isset($_SESSION['descendance'])? $_SESSION['descendance'] : '';  
         $auteur = isset($_POST['descendance']) ? $_POST['descendance'] : $session_descendance;
         $_SESSION['descendance']= $auteur;
			$titre = "Descendance de ".$auteur;
      break;
      case 'COU' :
         $session_cousinage = isset($_SESSION['cousinage'])? $_SESSION['cousinage'] : '';
         $auteur = isset($_POST['cousinage']) ? $_POST['cousinage'] : $session_cousinage;
         $_SESSION['cousinage']= $auteur;
			$titre = "Cousinage de ".$auteur;
      break;
   }
   if ($type == "RUB")
	   $st_requete = "select numero, moisannee, rubrique from `sommaire` where numero = $numero";
	else
//      $st_requete = "select numero, moisannee, rubrique from `sommaire` where auteur = '$auteur' and type = '$type'";
      $st_requete = "select numero, moisannee, rubrique from `sommaire` where auteur like '%$auteur%' and type = '$type'";

   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   $a_liste_sommaire = $sconnexionBD->liste_valeur_par_clef($st_requete);
	print("<div align=center><p><h2>$titre</h2></p></div>");
   if (count($a_liste_sommaire)!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$sconnexionBD->nb_lignes(),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Bulletin','Paru en','Sommaire'));
      $pagination->init_param_bd($sconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      print("<div align=center>");
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      print("</div>");
		$pagination->affiche_tableau_simple_requete_sql();
      print("<br>");
      print("<div align=center>");
      $pagination->affiche_entete_liens_navigation();
      print("</div>");     
   }
   print('</form>');  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<br><div align=center><input type=submit value='Retour � la recherche' name='retour'></div>");
   print("<input type=hidden name=mode value=\"DEPART\">"); 
   print('</form>');
}

/* --- Remplit un select des rubriques --- */
function Select_rubrique()
{
   $chaine_options = "";
	$result = mysql_query("select distinct numero FROM sommaire order by numero");
   while (list($numero) = mysql_fetch_row($result))
   {
	   $chaine_options .= "<option >$numero</option>\n";
   }
   return $chaine_options;
}

/* --- Remplit un select des noms --- */
function Select_nom($type)
{
   $chaine_options = "";
//	$result = mysql_query("   select distinct auteur FROM sommaire where type = '$type' order by upper(trim(auteur))");
	if ($type == "ART")
	   $result = mysql_query("select distinct auteur FROM sommaire where type = '$type' order by upper(trim(auteur))");
   else		// FAM, ASC, DES, COU
	   $result = mysql_query("select distinct det_auteur FROM detail_nom where det_type = '$type' order by det_auteur");		

   while (list($auteur) = mysql_fetch_row($result))
   {
	   $chaine_options .= "<option >$auteur</option>\n";
   }
   return $chaine_options;
}

/* --- Saisie des crit�res de recherche --- */
/*
+------------------------------------------------------+
|   Les rubriques d'un num�ro    =========    valider  |
+------------------------------------------------------+
|   Chaque article d'un auteur   =========    valider  |
+------------------------------------------------------+
|   Familles �tudi�es            =========    valider  |
+------------------------------------------------------+
|   Ascendance d'un adh�rent     =========    valider  |
+------------------------------------------------------+
|   Descendance d'un adh�rent    =========    valider  |
+------------------------------------------------------+
|   Cousinage des adh�rents      =========    valider  |
+------------------------------------------------------+
*/
function Saisie_recherche()
{
   
   print("<br><br><div id='sommaire'>");
	   print("<div class='cadre_rech'>");
         print("<p><h2>Recherche sur le sommaire des bulletins</h2></p>");
      print("</div>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
		print("<div class='cadre_rech'>");
			print("<p><input class='droite' type=submit value='Recherche' name='valide_rub'></p>");  
         print("<p><label for='rub'>Les rubriques d'un num�ro</label>");
         print("<select id='rub' name=rubrique>".Select_rubrique()."</select></p>");
         print("<input type=hidden name=mode value=\"RUBRIQUE\">");
      print("</div>");
      print("</form>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
		print("<div class='cadre_rech'>");
			print("<p><input class='droite' type=submit value='Recherche' name='valide_art'></p>");  
         print("<p><label for='art'>Chaque article d'un auteur</label>");
         print("<select id='art' name=article>".Select_nom('ART')."</select></p>");
         print("<input type=hidden name=mode value=\"ARTICLE\">");
      print("</div>");
      print("</form>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
		print("<div class='cadre_rech'>");
			print("<p><input class='droite' type=submit value='Recherche' name='valide_fam'></p>");  
         print("<p><label for='fam'>Familles �tudi�es</label>");
         print("<select id='fam' name=famille>".Select_nom('FAM')."</select></p>");
         print("<input type=hidden name=mode value=\"FAMILLE\">");
      print("</div>");
      print("</form>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
		print("<div class='cadre_rech'>");
			print("<p><input class='droite' type=submit value='Recherche' name='valide_asc'></p>");  
         print("<p><label for='asc'>Ascendance d'un adh�rent</label>");
         print("<select id='asc' name=ascendance>".Select_nom('ASC')."</select></p>");
         print("<input type=hidden name=mode value=\"ASCEND\">");
      print("</div>");
      print("</form>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
		print("<div class='cadre_rech'>");
			print("<p><input class='droite' type=submit value='Recherche' name='valide_des'></p>");  
         print("<p><label for='des'>Descendance d'un adh�rent</label>");
         print("<select id='des' name=descendance>".Select_nom('DES')."</select></p>");
         print("<input type=hidden name=mode value=\"DESCEND\">");
      print("</div>");
      print("</form>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
		print("<div class='cadre_rech'>");
			print("<p><input class='droite' type=submit value='Recherche' name='valide_cou'></p>");  
         print("<p><label for='cou'>Cousinage des adh�rents</label>");
         print("<select id='cou' name=cousinage>".Select_nom('COU')."</select></p>");
         print("<input type=hidden name=mode value=\"COUSIN\">");
      print("</div>");
   print("</div>");
	print('</form>');
}

/* --- D�but du programme --- */

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

$st_session_mode = empty($_SESSION['mode']) ? 'DEPART' : $_SESSION['mode']; 
$gst_mode = isset($_POST['mode']) ? $_POST['mode'] : $st_session_mode;
$_SESSION['mode']=$gst_mode; 

switch ($gst_mode) 
{
   case 'DEPART' : 
      Saisie_recherche(); 
   break;
   case 'RUBRIQUE' : 
		Affiche_noms('RUB', $connexionBD); 
   break;
   case 'ARTICLE' : 
      Affiche_noms('ART', $connexionBD); 
   break;
   case 'FAMILLE' : 
      Affiche_noms('FAM', $connexionBD); 
   break;
   case 'ASCEND' : 
      Affiche_noms('ASC', $connexionBD); 
   break;
   case 'DESCEND' : 
      Affiche_noms('DES', $connexionBD); 
   break;
   case 'COUSIN' : 
      Affiche_noms('COU', $connexionBD); 
   break;
}
?>	

</body>
</html>
