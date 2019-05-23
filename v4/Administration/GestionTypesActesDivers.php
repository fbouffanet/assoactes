<?php
//echo '<script type="text/javascript">window.alert("'.$message.'");</script>';
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CHARGEMENT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print("<title>Gestion des Types d'actes</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print("<link href='../Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
  $("#edition_type_acte").validate({
  rules: {
		nom_type_acte: "required"
    },
    messages: {
		nom_type_acte: {
			required: "Le nom du type est obligatoire"
		}
    }
  });  
});

</script>
<?php
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_type_acte = (int) $_GET['mod'];
}
else
{
	if (isset($_GET['remp']))
	{
	   $gst_mode='MENU_REMPLACER';
	   $gi_idf_type_acte = (int) $_GET['remp'];
	}
	else
	   $gi_idf_type_acte = isset($_POST['idf_type_acte']) ? (int) $_POST['idf_type_acte']:null;
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];


/**
 * Affiche la liste des types d'actes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour;
   $NB_LIGNES_PAR_PAGE = 50;
   print("<div class=TITRE>Gestion des types d'actes Divers</div>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");

   $st_requete = "SELECT TA.idf, CONCAT('[NULL]-',TA.idf), TA.nom, TA.sigle_nimegue, 0 FROM type_acte TA LEFT OUTER JOIN acte A ON A.idf_type_acte = TA.idf WHERE A.idf_type_acte IS NULL UNION SELECT A.idf_type_acte, CONCAT('[',A.idf_type_acte,']-',CASE WHEN TA.idf IS NULL THEN 'NULL' ELSE TA.idf END), TA.nom, TA.sigle_nimegue, count(A.idf_type_acte) FROM acte A LEFT OUTER JOIN type_acte TA ON A.idf_type_acte = TA.idf GROUP BY 3 , 1, 4 ORDER BY 3";
   $a_liste_type_acte = $pconnexionBD->sql_select_liste1($st_requete);
   $i_nb_types_acte=count($a_liste_type_acte);
   $i_nb_totalpages=ceil($i_nb_types_acte/$NB_LIGNES_PAR_PAGE);
   if ($i_nb_types_acte!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page', $i_nb_types_acte, $NB_LIGNES_PAR_PAGE, $i_nb_totalpages, array('ID[A]-TA', 'Type_Acte','Sigle','Nb actes', 'Modifier','Convertir'));
      $pagination->init_param_bd($pconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $pagination->affiche_tableau_edition_remplacer();
   }
   else
     print("<div align=center>Pas de type d'acte</div>\n");
   print("</form>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<div align=center><br><input type=hidden name=mode value=\"MENU_AJOUTER\">");  
   print("<input type=submit value=\"Nouveau type\"></div>");  
   print('</form>');
   print("<form id=nettoyage  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<input type="hidden" name="mode" value="NETTOYAGE_TYPE_ACTE">');  
   print('<div align=center><br><input type="submit" value="Supprimer les types d\'actes inutilisés"/><br></div>');   
   print("</form>");
}

/**
 * Affichage de la table d'édition des types d'actes
 * @param string $pst_type_acte Nom du type d'acte
 * @param string $pst_sigle Sigle du type d'acte
 * @param integer $pi_idf_type_acte clé idf du type d'acte
 */ 
function menu_edition($pst_type_acte,$pst_sigle,$pi_idf_type_acte)
{
   print("<table border=1>");
   print("<div class=TITRE>Ajout/Modification d'un type d'acte<br></div><br><br>"); 
   print("<tr><th>Type d'acte</th><td><input type=\"text\" maxlength=50 size=30 name=nom_type_acte value=\"$pst_type_acte\"></td></tr>");
   print("<tr><th>Sigle</th><td><input type=\"text\" maxlength=5 size=5 name=sigle_type_acte value=\"$pst_sigle\"></td></tr>");
   print("<input type=hidden name=idf_type_acte value=$pi_idf_type_acte>");
   print("<tr><th>IDF</th><td>$pi_idf_type_acte</td></tr>");
   print("</table>");
}

/** Affiche le formulaire de modification d'un type d'acte
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_type_acte Identifiant du type d'acte Ó modifier 
 */ 
function menu_modifier($pconnexionBD,$pi_idf_type_acte)
{
	list($st_nom_type_acte)=$pconnexionBD->sql_select("select nom from type_acte where idf=".$pi_idf_type_acte);
	list($st_sigle)=$pconnexionBD->sql_select("select sigle_nimegue from type_acte where idf=".$pi_idf_type_acte);
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_type_acte\">");
	print("<div align=center><input type=hidden name=mode value=MODIFIER>");
	print("<input type=hidden name=idf_type_acte value=$pi_idf_type_acte>");
	menu_edition($st_nom_type_acte,$st_sigle,$pi_idf_type_acte);
	print("</div>");
	print("<div align=center><br><input type=submit value=\"Modifier\"></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><input type=hidden name=mode value=LISTE>");
	print("<br><input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

/** Affiche liste des types d'actes pour sélectionner celui qui remplacera le type sélectionné
 */
function menu_remplacer($pconnexionBD,$pi_idf_type_acte)
{
	print("\r\n<form name='remplacertype' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return 1\">");
	print("<input type=hidden name=idf_type_acte value=$pi_idf_type_acte>");
	print("\r\n<div align=center><input type=hidden name=mode value=\"REMPLACER\">");

	list($st_nom_type_acte,$st_sigle)=$pconnexionBD->sql_select_liste("select nom, sigle_nimegue from type_acte where idf=$pi_idf_type_acte");
	print("\r\n<table border=1>\r\n");
	print("<div class=TITRE>Remplacement d'un type d'acte<br></div><br><br>"); 
	print("<tr><th>IDF</th><td>$pi_idf_type_acte</td></tr>");
	print("<tr><th>Sigle</th><td>$st_sigle</td></tr>");
	print("<tr><th>Type d'acte</th><td>$st_nom_type_acte</td></tr>");
	print("<tr><th>Remplacer par</th><td>\r\n<select name=\"NouveauTypeActe\">\r\n");
	$listetypes=$pconnexionBD->liste_valeur_par_clef("select idf, nom from type_acte order by nom");
	foreach ($listetypes as $idf=>$nom)
	{
     if($nom == $st_nom_type_acte)
     {
	  PRINT("<option value='".$idf."' selected=\"selected\">".$nom."</option>");
	 }
     else
	  PRINT("<option value='".$idf."'>".$nom."</option>\r\n");
	} 
	print("</select></td></tr>\r\n");
	print("</table>\r\n");
	print("</div>\r\n");
	print("<div align=center><br><input type=submit value=\"Remplacer\" ></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><br><input type=hidden name=mode value=LISTE>");
	print("<input type=submit value=\"Annuler\"></div>");
	print('</form>');
}
/** Affiche le formulaire d'ajout d'un type d'acte
 */ 
function menu_ajouter($pi_idf_type_acte)
{
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"edition_type_acte\" >");
	print("<div align=center><input type=hidden name=mode value=\"AJOUTER\">");
	menu_edition('','',$pi_idf_type_acte);
	print("</div>");
	print("<div align=center><br><input type=submit value=\"Ajouter\" ></div>");
	print('</form>');
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
	print("<div align=center><br><input type=hidden name=mode value=LISTE>");
	print("<input type=submit value=\"Annuler\"></div>");
	print('</form>');
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

switch ($gst_mode) 
{
  case 'LISTE' : 
	menu_liste($connexionBD); 
  break;
  case 'MENU_MODIFIER' :
	menu_modifier($connexionBD,$gi_idf_type_acte);
  break;
  case 'MODIFIER' :
     $st_nom_type_acte = trim($_POST['nom_type_acte']);
     $st_sigle_type_acte = trim($_POST['sigle_type_acte']);
     $connexionBD->execute_requete("update type_acte set nom='$st_nom_type_acte', sigle_nimegue='$st_sigle_type_acte' where idf=$gi_idf_type_acte");
     menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' : 
	 $idf_type_acte = 0; 
	 $sql_req="select idf from type_acte order by idf";
	 $li_idf_type_acte=$connexionBD->sql_select($sql_req);
	 foreach ($li_idf_type_acte as $i_idf_type_acte)
		{
			$idf_type_acte++;
			if ($i_idf_type_acte>$idf_type_acte) 
			{
				$gi_idf_type_acte=$idf_type_acte;
				$idf_type_acte=$idf_type_acte+999;
			}
		}
 	 menu_ajouter($gi_idf_type_acte);
  break;
  case 'AJOUTER':
     $st_nom_type_acte = trim($_POST['nom_type_acte']);
     $st_sigle_type_acte = trim($_POST['sigle_type_acte']);
	 $gi_idf_type_acte = $_POST['idf_type_acte'];
	 $sql_req="insert into type_acte (idf, nom, sigle_nimegue) values ($gi_idf_type_acte, '$st_nom_type_acte', '$st_sigle_type_acte')";
     $connexionBD->sql_select1($sql_req);
     menu_liste($connexionBD);
  break;
  case 'MENU_REMPLACER' :
	menu_remplacer($connexionBD,$gi_idf_type_acte);
  break;
  case 'REMPLACER':
     $idf_type_acte = trim($_POST['idf_type_acte']);
     $connexionBD->execute_requete("update acte set idf_type_acte=".$_POST['NouveauTypeActe']." where idf_type_acte=$idf_type_acte");
	 //echo "update acte set idf_type_acte=".$_POST['NouveauTypeActe']." where idf_type_acte=$idf_type_acte";
     menu_liste($connexionBD);  
  break;
  case 'NETTOYAGE_TYPE_ACTE':
      $st_requete = "delete from type_acte where idf not in (select distinct idf_type_acte from acte) and idf!=".IDF_UNION;
      //print("Req=$st_requete");
      print("<div align=center> Nettoyage effectu&eacute;</div>");
      $connexionBD->execute_requete($st_requete);
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">"); 
      print('<input type="hidden" name="mode" value="LISTE"/><br>');   
      print("<div align=center><input type=submit value=\"Retour vers la gestion des types d'acte\"></div>");
      print("</form>"); 
   break;  
}  

print('</body></html>');

?>
