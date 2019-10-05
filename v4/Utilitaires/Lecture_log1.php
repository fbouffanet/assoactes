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
require_once('../Commun/AffichageActe.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');
  
  /**
 * Affiche le menu formulaire
 * @param object $pconnexionBD Connexion … la BD 
 */ 
function affiche_formulaire($pconnexionBD) {
  $a_adherents=$pconnexionBD->liste_valeur_par_clef("select idf,concat(nom,'  ',prenom,' (',idf,')') from adherent order by nom,prenom");
  print("<div align=center>");
  print("<form action=".$_SERVER['PHP_SELF']." method=post>");
  print("<div class=TITRE>Affichage des recherches d'un adhérent </div><br>");
  print(' Adh&eacute;rent: <select name="idf_adherent" >');
  print(chaine_select_options('',$a_adherents));
  print('</select>');
	print("<br/><br/>");
	print("Selection du fichier pour la recherche  ");   
	print('<SELECT name="fichier_log">');
	print('<OPTION VALUE="../logs/requetes_personne.log">Requête recherche sur une personne </OPTION>');
	print('<OPTION VALUE="../logs/requetes_couple.log">Requête recherche sur couple </OPTION>');
	print('<OPTION VALUE="../logs/requetes_deces.log">Requête recherche sur les décès </OPTION>');
	print('<OPTION VALUE="../logs/requetes_naissances.log">Requête recherche sur les naissances </OPTION>');
	print('<OPTION VALUE="../logs/requetes_depouillements.log">Requête recherche sur les dépouillements </OPTION>');
	print('<OPTION VALUE="../logs/requetes_liasse.log">Requête recherche sur les liasses</OPTION>');
  print("</SELECT>");
  print("<br/><br/>");
  print('<input type="submit" value="valider" name="valider"/>');
  print("</form>");
  print("</div>");
}
  
  
/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'/>");

print("<body>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

if (!isset($_POST['valider'])) {

	affiche_formulaire($connexionBD);

} else {
   	$fichier_log = $_POST['fichier_log'];
	define('FICHIER', $fichier_log); 
	$resultats =array();
    @ $fp = fopen(FICHIER, 'r') or die('Ouverture en lecture de "' . FICHIER . '" impossible !');
    while (!feof($fp)) {
        $ligne = fgets($fp, 1024);
		
        if (preg_match('|\b'. ';'.$_POST['idf_adherent'].';'.'[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}'.'\b|i', $ligne)) {
            $resultats[] = $ligne;
			$nom = $_POST['idf_adherent'];
        }
    }
    fclose($fp);
    $nb = count($resultats);
    if ($nb > 0) {
        
		echo " $nom a fait $nb recherche(s) :";
        echo '<ul>';
        foreach ($resultats as $v) {
            echo "<li>$v</li>";
        }
        echo '</ul>';
		
		print("</form>");
		print("<form action=".$_SERVER['PHP_SELF']." method=post>");
		print("<input type=hidden name=mode value=FORMULAIRE>");
		print("<p style=\"font-size:8pt;\"><div align=center><input type=submit value=\"retour\"></div></p>");   
		print("</form>");
    } else {
        print("</form>");
		print("<p style=\"font-size:8pt;\"><div align=center>l'adhérents n'a pas fait de recherche !</div></p>");
		print("<form action=".$_SERVER['PHP_SELF']." method=post>");
		print("<input type=hidden name=mode value=FORMULAIRE>");
		print("<p style=\"font-size:8pt;\"><div align=center><input type=submit value=\"retour\"></div></p>");   
		print("</form>");
    }
}
?>