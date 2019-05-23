<?php
// http://127.0.0.1:8888/Index_sondages.php
/*
CREATE TABLE IF NOT EXISTS `questions`
(
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `date_qst` date,
  `question` text,
  `qst_ou_chx`  enum ('Q', 'C'),
   PRIMARY KEY (`idf`)
);

CREATE TABLE IF NOT EXISTS `rep_questions`
(
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `idf_qst` smallint(5),
  `idf_adh` smallint(5),
  `date_rep` date,
  `reponse` text,
   PRIMARY KEY (`idf`)
);

CREATE TABLE IF NOT EXISTS `rep_choix`
(
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `idf_chx` smallint(5),
  `idf_adh` smallint(5),
  `date_rep` date,
  `choix` enum ('O', 'N', 'S'),
   PRIMARY KEY (`idf`)
);

CREATE TABLE IF NOT EXISTS `suggestions`
(
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `idf_adh` smallint(5),
  `date_sug` date,
  `texte_sug` text,
   PRIMARY KEY (`idf`)
);
*/

$gst_chemin = "../";
//$gst_chemin = "";
require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/Identification.php");

// La page est reservee uniquement aux gens ayant les droits utilitaires
//require_once("$gst_chemin/Commun/VerificationDroits.php");
//verifie_privilege(DROIT_UTILITAIRES);
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/PaginationTableau.php");
require_once("$gst_chemin/Commun/commun.php");

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='$gst_chemin/Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='$gst_chemin/Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_chemin/Commun/menu.js' type='text/javascript'></script>");

?>
<style type="text/css">

body { background-color:#ecf7f9}

.cadre_index {
   position: absolute;
	top: 250px;
	left: 500px;
   width: 600px;
	height: 300px;
	text-align: left;
	border-top: 1px solid #333333;
	border-left: 1px solid #333333;
	border-right: 1px solid #333333;
	border-bottom: 1px solid #333333;
}

.cadre_reponse {
   position: absolute;
	top: 200px;
	left: 500px;
   width: 600px;
	height: 250px;
	text-align: left;
	border-top: 1px solid #333333;
	border-left: 1px solid #333333;
	border-right: 1px solid #333333;
	border-bottom: 1px solid #333333;
}
</style>

<?php
print('<title>Enquêtes et Sondages</title>');
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'DEPART': $_POST['mode'];
if (isset($_GET['mod']))
{
   $gst_mode = ($_GET['type'] == 'Q') ? 'REPONSE_QUESTION' : 'REPONSE_CHOIX';
   $gi_idf_question = (int) $_GET['mod'];
}
else
   $gi_idf_question = isset ( $_POST['idf_question']) ? (int) $_POST['idf_question'] : 0;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];


// le code adhérent vient de l'appel de ce script ou d'une variable de session ???????????????????????????????
$code_adh = 1363;
$date_jour = date("Y-m-d"); 

// Affiche la liste des questions

function Liste_question($rconnexionBD,$type)
{
   global $gi_num_page_cour;

	$libelle = ($type == 'Q') ? 'Liste des questions' : 'Liste des choix';
	print("<div align=center><font size=+1>$libelle</font></div><BR>");

	$st_requete = "select idf, replace(question,'\n','<br>') from questions where qst_ou_chx = '".$type."' order by date_qst";

   $a_liste_questions = $rconnexionBD->liste_valeur_par_clef($st_requete);
   if (count($a_liste_questions)!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$rconnexionBD->nb_lignes(),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Libellé','Répondre'));
      $pagination->init_param_bd($rconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      $pagination->affiche_tableau_edition_sondage($type);  // Nouvelle fonction dans la class pagination
      print("<br>");
      $pagination->affiche_entete_liens_navigation();      
   }
   else
      print("<div align=center>Pas de question</div><BR>");
}

// Saisie de la réponse à une question

function Saisie_reponse($pconnexionBD, $pi_idf_question)
{
   $st_requete = "select question from questions where idf=$pi_idf_question";
   list($pst_question)=$pconnexionBD->sql_select_liste($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=AJOUTER_REPONSE_QUESTION>");
	print("<input type=hidden name=idf_question value=$pi_idf_question>");
	print("<BR><BR><div align=center><font size=+3>Enquêtes  et  Sondages</font></div><BR>");
   print("<div class=\"cadre_reponse\" cellpadding=3>");
   print("<p><font size=+1>&nbsp;&nbsp;Réponse à la question :</p><br>");
	$pst_question = preg_replace("/\n/","<br>", $pst_question);
   print("&nbsp;&nbsp;&nbsp;&nbsp;$pst_question<br><br><br>");
	print("<br><br><br><br><div align=center>");
   print("Votre réponse <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name=reponse_qst  cols=40 rows=12></textarea>");
   print("</div><br>");
   print("<div align=center><input type=submit value=\"Valider la réponse\"</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=DEPART><br>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');

}

// Saisie du choix demandé à une question

function Saisie_choix($pconnexionBD, $pi_idf_question)
{
   $st_requete = "select question from questions where idf=$pi_idf_question";
   list($pst_question)=$pconnexionBD->sql_select_liste($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=AJOUTER_REPONSE_CHOIX>");
	print("<input type=hidden name=idf_question value=$pi_idf_question>");
	print("<BR><BR><div align=center><font size=+3>Enquêtes  et  Sondages</font></div><BR>");
   print("<div class=\"cadre_reponse\" cellpadding=3>");
   print("<p><font size=+1>&nbsp;&nbsp;Faîtes votre choix pour la question :</p><br>");
	$pst_question = preg_replace("/\n/","<br>", $pst_question);
   print("&nbsp;&nbsp;&nbsp;&nbsp;$pst_question<br><br><br>");
	print("<br><br><div align=center><br><br>");
   print("<br><br>Votre choix <br><br>");
	print("<input type=radio name=chx value=\"O\" checked=\"checked\">Je suis d'accord");
	print("<br><input type=radio name=chx value=\"N\">Je ne suis pas d'accord");
	print("<br><input type=radio name=chx value=\"S\">Je suis sans opinion");
   print("</div><br>");
   print("<div align=center><input type=submit value=\"Valider votre choix\"</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=DEPART><br>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

// Ecran de saisie des suggestions

function Saisie_suggestion()
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=AJOUTER_SUGGESTION>");
   print("<br><br><br><br><div align=center>");
   print("Vos suggestions <br><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name=suggestion_adh  cols=40 rows=12></textarea>");
   print("</div><br>");
   print("<div align=center><input type=submit value=\"Ajouter\"</div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=DEPART>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

// Ecran d'arrivée

function Type_Sondage()
{
	print("<BR><BR><div align=center><font size=+3>Enquêtes  et  Sondages</font></div><BR>");
   print("<div class=\"cadre_index\" cellpadding=3>");
   print("<p><font size=+1>&nbsp;&nbsp;Que pensez vous de nous et de ce que nous faisons pour vous ?<br><br><br>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=REPONDRE>");  
   print("<p>&nbsp;&nbsp;&nbsp;Répondez à nos questions&nbsp;&nbsp;<input type=submit value=\"Vos réponses\"></p>");  
   print('</form>');  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=CHOIX>");  
   print("<p>&nbsp;&nbsp;&nbsp;Faîtes votre choix&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=\"Votre choix\"></p>");  
   print('</form>');  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=SUGGESTION>");  
   print("<p>&nbsp;&nbsp;&nbsp;Laissez vos suggestions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=submit value=\"Vos suggestions\"></p>");  
   print('</form>');  
	print("<br><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Merci de votre participation</p>");
   print("</div>");
}

// --------------------------------------------------------------

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

switch ($gst_mode) 
{
  case 'DEPART' : 
     Type_Sondage(); 
  break;
  
  case 'REPONDRE' : 
	  Liste_question($connexionBD, 'Q');  
  break;
  case 'REPONSE_QUESTION' :
     Saisie_reponse($connexionBD,$gi_idf_question);  
  break;
  case 'AJOUTER_REPONSE_QUESTION' :
     $st_reponse = trim($_POST['reponse_qst']);
     $connexionBD->execute_requete("insert into rep_questions (idf_qst, idf_adh, date_rep, reponse) values ($gi_idf_question, $code_adh, '$date_jour', '$st_reponse')");
	  echo "<script>alert(\"Votre réponse est enregistrée\")</script>"; 
     Type_Sondage();
  break;
  
  case 'CHOIX' : 
     Liste_question($connexionBD, 'C');  
  break;
  case 'REPONSE_CHOIX' :
     Saisie_choix($connexionBD,$gi_idf_question);  
  break;
  case 'AJOUTER_REPONSE_CHOIX' :
     $st_choix = $_POST['chx'];
     $connexionBD->execute_requete("insert into rep_choix (idf_chx, idf_adh, date_rep, choix) values ($gi_idf_question, $code_adh, '$date_jour', '$st_choix')");
	  echo "<script>alert(\"Votre choix est enregistré\")</script>"; 
     Type_Sondage();
  break;

  case 'SUGGESTION' : 
     Saisie_suggestion();  
  break;
  case 'AJOUTER_SUGGESTION' :
     $st_suggestion = trim($_POST['suggestion_adh']);
     $connexionBD->execute_requete("insert into suggestions (idf_adh, date_sug, texte_sug) values ($code_adh, '$date_jour', '$st_suggestion')");
	  echo "<script>alert(\"Suggestion enregistrée\")</script>"; 
     Type_Sondage();
  break;

}
print('</body>');
?>