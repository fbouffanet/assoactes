<!DOCTYPE html> 
<html lang="fr">
<head>
  <title>Saisie du sommaire des bulletins</title>
  <meta charset="iso-8859-15" />       <!-- ou charset="utf-8" -->
  <link rel="stylesheet" href="SaisieSommaire.css" />  
</head>

<body>
<?php
//http://127.0.0.1:8888/Saisie_Sommaire.php
/*
Programme de saisie des éléments du sommaire des bulletins AGC
PL 06/17
*/

//$gst_chemin = "../";
$gst_chemin = ".";

print("<script src='$gst_chemin/Commun/menu.js' type='text/javascript'></script>");

require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/Identification.php");

// La page est reservee uniquement aux gens ayant les droits utilitaires

require_once("$gst_chemin/Commun/VerificationDroits.php");
verifie_privilege(DROIT_UTILITAIRES);
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/commun.php");
require_once("$gst_chemin/Commun/PaginationTableau.php");
/*
   $gst_serveur_bd  = 'localhost';
	$gst_serveur_bd  = '127.0.0.1';
   $gst_utilisateur_bd = 'root';
   $gst_mdp_utilisateur_bd = '';
   $gst_nom_bd = 'baseagc';


/*
CREATE TABLE IF NOT EXISTS `sommaire`
( 
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `numero` smallint(3),        numéro du bulletin
  `moisannee` varchar(30),     mois et année du bulletin
  `rubrique` text,             rubrique du sommaire
  `auteur` varchar(50),        auteur de la rubrique correspondante
  `type` varchar(5),           art pour article, asc pour ascendance, fam pour famille, cou pour cousins, des pour descendance
  `flag` enum ('O', 'N'),      pour utilisation ultèrieure
   PRIMARY KEY (`idf`)
);
*/

//print_r($_POST); 


$gst_mode = isset($_POST['mode']) ?   $_POST['mode'] : "DEPART";
if (empty($_POST)) 
{
   $gst_mode = "DEPART";   
}
else
{

	if (isset($_POST['valide_rub'])) {                  
		$gst_mode = "NUMERO";
   } 
	elseif (isset($_POST['valid'])) {                  
		$gst_mode = "ENREGISTRE";
   } 
	elseif (isset($_POST['valid_sup'])) {                  
		$gst_mode = "SUPPRESSION";
   } 
	elseif (isset($_POST['retour'])) {                  
		$gst_mode = "DEPART";
   } 
}
if (isset($_GET['idrub']))
{
   $gst_mode='LIGNE';
   $idrub = (int) $_GET['idrub'];
	if (isset($_GET['sup']))
	{
//echo "sup ? ".	$_GET['idrub']." - ".$_GET['sup'];
//      $gst_mode = 'SUPPRESSION';
      $gst_mode = 'CONFIRM';
	}
}

/* --- Remplit un select des rubriques --- */
function Select_rubrique()
{
   global $connexionBD;
	$chaine_options = "";
  $a_numeros=$connexionBD->sql_select("select distinct numero FROM sommaire order by numero");
	foreach ($a_numeros as $i_numero)
  {
	   $chaine_options .= "<option >$i_numero</option>\n";
  }
  return $chaine_options;
}

/* --- Affiche le titre --- */
function Affiche_titre()
{
   print("<div class='cadre_titre'>");	
	print("<h2><b>Mise à jour du sommaire des bulletins </b></h2>");  
	print("</div>");
}

/* --- Affiche les boutons du départ --- */
function Affiche_depart()
{   
   Affiche_titre();
   print("<div class='cadre_depart'>");	
	 print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
   print("<p><input type='submit' class='creat' value='Création du bulletin' name='creat' /></p>");
   print("<input type=\"hidden\" name=\"mode\" value=\"CREATION\"> ");
   print('</form>');
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	 print("<p><input type='submit' class='maj' value='Mise à jour du bulletin' name='maj' /></p>");
   print("<input type=\"hidden\" name=\"mode\" value=\"RUBRIQUE\"> "); 
   print('</form>'); 
	 print("</div>");	
}

/* --- Affiche le bulletin à modifier --- */
function Affiche_bulletin()
{
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   Affiche_titre();
   print("<div class='cadre_depart'>");	
   print("<p><label for='rub'>&nbsp;Choisir un numéro de bulletin à mettre à jour &nbsp;&nbsp;&nbsp;</label>");
   print("<select id='rub' name=rubrique>".Select_rubrique()."</select></p><br><br>");
	print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
	print("<input type=\"hidden\" name=\"mode\" value=\"NUMERO\"> ");
  print("<input type=submit value='Validation numéro' name='valide_rub'>");  
	print("</div>");
	print('</form>');
}

/* --- Récupération de l'enregistrement choisi --- */
function Recupere_sommaire()
{
   global $connexionBD,$gi_num_page_cour;
   $numero = (int) $_POST['rubrique'];
//echo "Numéro choisi : ".$numero;
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   Affiche_titre();
   $st_requete = "select idf,numero,moisannee,rubrique,auteur,type from sommaire where numero = $numero";
   $a_liste_sommaires = $connexionBD->liste_valeur_par_clef($st_requete);
   $i_nb_sommaires = count($a_liste_sommaires);
   if ($i_nb_sommaires!=0)
   {  
      print("<div class='cadre_table'>");      
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_sommaires,NB_LIGNES_PAR_PAGE,1,array('Bulletin','Mois Année','Désignation de la rubrique','Auteur du texte','Type','Modifier','Supprimer'));
      $pagination->init_param_bd($connexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $pagination->affiche_tableau_edition();
      print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER\">");
      print("</div>");
   }
   else
     print("<div align=center>Pas de sommaires</div>\n");	
	print('</form>');
}

/* --- Recherche l'enregistrement choisi et appelle la saisie --- */
function Recherche_enreg($idrub)
{
   global $connexionBD;

   $st_requete = "select numero,moisannee,rubrique,auteur,type from sommaire where idf = $idrub";
   list($num,$moisaa,$rubrique,$auteur,$typrub)=$connexionBD->sql_select_liste($st_requete);
 	 Affiche_saisie($num, $moisaa, $rubrique, $auteur, $typrub, $idrub);
}

/* --- Affiche les éléments à saisir --- */
function Affiche_saisie($num, $moisaa, $rubrique, $auteur, $typrub, $idrub)
{
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   Affiche_titre();
   print("<div class='cadre_saisie'>");	
	print("<table>");
	print("<tr><td width='300'>Numéro du bulletin</td>");
	print("<td width='210'><input type=text value=$num name=num></td></tr>");
	
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'>Mois et Année</td>");
	print("<td width='210'><input type=text value='$moisaa' name=moisaa></td></tr>");
	
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'>Type rubrique (Article, Famille, Ascendance, Descendance)</td>");
	print("<td width='210'><select name=typrub>");
	if (($idrub != 0) and ($typrub == "ART"))
	   print("<option value=ART selected>Article</option>");
	else
	   print("<option value=ART>Article</option>");
	if (($idrub != 0) and ($typrub == "FAM"))
   	print("<option value=FAM selected>Famille</option>");
   else		
   	print("<option value=FAM>Famille</option>");
	if (($idrub != 0) and ($typrub == "COU"))
   	print("<option value=COU selected>Cousinage</option>");
   else		
   	print("<option value=COU>Cousinage</option>");
	if (($idrub != 0) and ($typrub == "ASC"))
	   print("<option value=ASC selected>Ascendance</option>");
   else		
	   print("<option value=ASC>Ascendance</option>");
	if (($idrub != 0) and ($typrub == "DES"))
	   print("<option value=DES selected>Descendance</option>");
	else
		print("<option value=DES>Descendance</option>");
	print("</select></td></tr>");

	
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'>Prénom et nom de l'auteur</td>");
	$nompre = "";
	if ($idrub != 0) // Mise à jour
	{
	   if (strstr($rubrique, "-"))   // si on trouve prénom nom - texte, on mets le prénom et le nom
		{
         $part = explode("-", $rubrique);
		   $nompre = $part[0];
		   $nompre = substr($nompre, 0, -1);
		}
		else                          // si pas de nom et prénom  et AGC on mets AGC dans le prénom et nom
		{
		   if ($auteur == "AGC")
			{
		      $nompre = $auteur;
			}
		}	
	}
	print("<td width='210'><input type=text value='$nompre' name=nompre></td></tr>");
	
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'>Code Auteur</td>");
	print("<td width='210'><input type=text value='$auteur' name=auteur></td></tr>");
	
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'>Texte de la rubrique</td>");
	$txtrub = "";
	if ($idrub != 0) // Mise à jour
	{
	   if (strstr($rubrique, "-"))   // si on trouve prénom nom - texte, on mets le texte de la rubrique
		{
         $part = explode("-", $rubrique);
		   $txtrub = $part[1];
		   $txtrub = substr($txtrub, 1);
		}
		else                          // si pas de nom et prénom, on mets le texte de la rubrique
		{
		   $txtrub = $rubrique;
		}
	}
	print("<td width='210'><input type=text size=70 value='$txtrub' name=txtrub></td></tr>");

	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<tr><td width='300'></td><td width='210'></td></tr>");
	print("<input type=hidden name=idrub value=$idrub>");
	print("<tr><td width='300'></td>");
	print("<td width='210'><input type=submit value=Validation de l'entregistrement name=valid>");
	print("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=Annuler name=retour></td></tr>");
		
	print("</table>");
	print('</div>');
  print("<input type=\"hidden\" name=\"mode\" value=\"ENREGISTRE\"> ");
	print('</form>');
}

/* --- Enregistrement --- */
function Enregistrement()
{
   global $connexionBD;
	
   $idrub = $_POST['idrub'];
   $numero = $_POST['num'];
   $moisannee = $_POST['moisaa'];
   $type = $_POST['typrub'];
	if (($type == "ASC") or ($type == "DES"))
      $rubrique = $_POST['nompre'];
   else		
      $rubrique = $_POST['nompre']." - ".$_POST['txtrub'];
   $rubrique = strtr ($rubrique, "'", " ");
   $auteur = $_POST['auteur'];
   $flag = "N";
   if ($idrub == 0)               // création d'un enregistrement
	{

     $connexionBD->initialise_params(array(':numero'=>$numero,':moisannee'=>$moisannee,":rubrique"=>$rubrique,":auteur"=>$auteur,":type"=>$type,":flag"=>$flag));
	   $sqlins = "insert into sommaire (numero, moisannee, rubrique, auteur, type, flag)
                 values (:numero, :moisannee, :rubrique, :auteur, :type, :flag)";
     $connexionBD->execute_requete($sqlins);	
		if (($type == "ASC") or ($type == "DES"))   // Ascendance ou descendance, création d'un enregistrement
		{
       $connexionBD->initialise_params(array(':numero'=>$numero,":auteur"=>$auteur,":type"=>$type));
		   $sqlins = "insert into detail_nom (det_numero, det_type, det_auteur, id_bulletin)
                                    values (:numero, :type, :auteur, 0)";
         $connexionBD->execute_requete($sqlins);	
		}
		echo "<script>alert(\"Création rubrique enregistrée\")</script>"; 
	}
	else                           // modification d'un enregistrement
	{
      $connexionBD->initialise_params(array(':numero'=>$numero,':moisannee'=>$moisannee,":rubrique"=>$rubrique,":auteur"=>$auteur));
      $sqlmaj = "update sommaire set numero = :numero, moisannee = :moisannee, rubrique = :rubrique, 
		                               auteur = :auteur where idf = $idrub";  
	    $connexionBD->execute_requete($sqlmaj);
	   echo "<script>alert(\"Modification rubrique effectuée\")</script>"; 
	}
}

/* --- Confirmation suppression --- */
function Confirmation()
{
   global $connexionBD;
		
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
   Affiche_titre();
	$idrub = $_GET['idrub']; 
	$st_requete = "select * from sommaire where idf = $idrub";
  $st_requete = "select numero,moisannee,rubrique from sommaire where idf = $idrub";
  list($num,$moisaa,$rubrique)=$connexionBD->sql_select_liste($st_requete);
  print("<div class='cadre_table'>");	
	print("Confirmation suppression de la rubrique $rubrique, du bulletin $num<br><br><br>");
	print("<p><input type='submit' value='Validation' name=valid_sup /></p>"); 
	print("<p><input type='submit' value='Annuler' name=retour /></p>"); 
	print("<input type=hidden name=idrub value=$idrub>");
	print("</div>");
	print('</form>');
}

/* --- Début du programme --- */

//   echo 'Connection à la base'.'<BR>';
//$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
//require_once("$gst_chemin/Commun/menu.php");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$gst_mode = empty($_POST['mode']) ? 'DEPART': $_POST['mode'] ;
if (isset($_GET['mod']))
{
   $gst_mode='LIGNE';
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];
	
switch ($gst_mode) 
{
   case 'DEPART' : 
      Affiche_depart(); 
   break;
   case 'RUBRIQUE' : 
		Affiche_bulletin(); 
   break;
  case 'NUMERO' : 
		Recupere_sommaire(); 
   break;
  case 'LIGNE' : 
//		echo "idf de la ligne : ".$_GET['idrub']; 
      //$idrub = $_GET['idrub']; 
      $idrub = $_GET['mod'];
      Recherche_enreg($idrub);
   break;
  case 'CONFIRM' : 
     Confirmation();
   break;
  case 'SUPPRESSION' : 
//		echo "idf de la ligne à supprimer : ".$_GET['idrub']; 
      $idrub = $_POST['idrub']; 
      $sqlmaj = "delete from sommaire where idf = $idrub";
      $connexionBD->execute_requete($sqlmaj); 
	   echo "<script>alert(\"Suppression rubrique effectuée\")</script>"; 
	   Affiche_depart(); 
   break;
  case 'ENREGISTRE' : 
		Enregistrement(); 
   	Affiche_depart(); 
   break;
  case 'CREATION' : 
		Affiche_saisie(0, "", "", "", "", 0); 
   break;
   default: print("Mode inconnu $gst_mode<br>");
}
?>	

</body>
</html>
