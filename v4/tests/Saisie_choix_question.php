<?php
//http://127.0.0.1:8888/Saisie_choix_question.php

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

print('<title>Saisie des Choix et questions</title>');
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_question = (int) $_GET['mod'];
}
else
   $gi_idf_question = isset ( $_POST['idf_question']) ? (int) $_POST['idf_question'] : 0;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

/**
 * Affiche la liste des questions
 * @param object $rconnexionBD
 */ 
function menu_liste($rconnexionBD)
{
   global $gi_num_page_cour;

   $st_requete = "select idf, replace(question,'\n','<br>'), concat(substring(date_qst,9,2),'/',substring(date_qst,6,2),'/',substring(date_qst,1,4)), case qst_ou_chx when 'Q' then 'Question' else 'Choix' end from `questions` order by date_qst";
   $a_liste_questions = $rconnexionBD->liste_valeur_par_clef($st_requete);
   if (count($a_liste_questions)!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$rconnexionBD->nb_lignes(),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Libellé de la question ou du choix','Date','Genre','Modifier'));
      $pagination->init_param_bd($rconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      $pagination->affiche_tableau_edition();
      print("<br>");
      $pagination->affiche_entete_liens_navigation();      
   }
   else
      print("<div align=center>Pas de question</div><BR>");

   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=MENU_AJOUTER>");  
   print("<div align=center><input type=submit value=\"Ajouter une question\"></div>");  
   print('</form>');  
}

/**
 * Affiche de la table d'édition
 * @param string $pst_question libellé question
 * @param string $pst_chx      question ou choix
 */ 
function menu_edition($pst_question,$pst_chx)
{
   print("Saisir une question <br><br><br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name=question  cols=40 rows=12>".$pst_question."</textarea>");
	if ($pst_chx == "Q")
	   print("<br><br>Est ce <input type=radio name=chx value=\"Q\" checked=\"checked\"> une question ou <input type=radio name=chx value=\"C\"> un choix<br>");
   else		
	   print("<br><br>Est ce <input type=radio name=chx value=\"Q\"> une question ou <input type=radio name=chx value=\"C\" checked=\"checked\"> un choix<br>");
}

/** Affiche le menu de modification des questions
 * @param object $rconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_question Identifiant de la question
*/ 
function menu_modifier($pconnexionBD, $pi_idf_question)
{
   $st_requete = "select date_qst, question, qst_ou_chx from `questions` where idf=$pi_idf_question";
   list($pst_date_qst, $pst_question,$pst_chx)=$pconnexionBD->sql_select_liste($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=MODIFIER>");
	print("<input type=hidden name=idf_question value=$pi_idf_question>");
   print("<div align=center>");
   menu_edition($pst_question,$pst_chx);   
   print("</div><br>");
   print("<div align=center><input type=submit value=\"Modifier\"></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

/** Affiche le menu d'ajout d'une question
 */ 
function menu_ajouter()
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=AJOUTER>");
   print("<div align=center>");
   menu_edition('','Q');
   print("</div><br>");
   print("<div align=center><input type=submit value=\"Ajouter\"></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

/*---------------------------------------------------------------------------
  Démarrage du programme
  ---------------------------------------------------------------------------*/

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

$date_jour = date("Y-m-d"); 

switch ($gst_mode) {
  case 'LISTE' : 
     menu_liste($connexionBD); 
  break;
  case 'MENU_MODIFIER' :
     menu_modifier($connexionBD,$gi_idf_question);
  break;
  
  case 'MODIFIER' :
     $st_question = trim($_POST['question']);
	  $st_choix = $_POST['chx'];
     $st_requete= "update questions set date_qst='$date_jour', question='$st_question', qst_ou_chx='$st_choix' where idf=$gi_idf_question";
     $connexionBD->execute_requete($st_requete);
	  if ($st_choix == "Q") 	  echo "<script>alert(\"Question modifiée\")</script>";      
	  else                       echo "<script>alert(\"Choix modifié\")</script>";     
     menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' : 
     menu_ajouter();
  break;
  case 'AJOUTER': 
     $st_question = trim($_POST['question']);
	  $st_choix = $_POST['chx'];
     $connexionBD->execute_requete("insert into questions (date_qst, question, qst_ou_chx) values ('$date_jour', '$st_question', '$st_choix')");
	  if ($st_choix == "Q") 	  echo "<script>alert(\"Question créée\")</script>";      
	  else                       echo "<script>alert(\"Choix créé\")</script>";     
     menu_liste($connexionBD);
   break;
   case 'EXPORT' : 
      Lecture_table();
	   menu_liste($connexionBD); 
   break;
}  
print('</body>');
?>