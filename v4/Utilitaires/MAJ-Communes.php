<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');
require_once('../Commun/VerificationDroits.php');

verifie_privilege(DROIT_UTILITAIRES);

require_once '../Commun/ConnexionBD.php';

/**
 * Affiche le menu de sélection
 * @global $gi_max_taille_upload Maximun de la taille  
 */
function affiche_menu() {
   global $gi_max_taille_upload;
   print('<div class=TITRE>MAJ des noms de commune</div><br>');
   print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<input type="hidden" name="MAX_FILE_SIZE" value="$gi_max_taille_upload" />'); 
   print('<input type="hidden" name="mode" value="VERIFICATION" />');
   print('<div align=center>Fichier <span class=IMPORTANT>CSV</span> des communes Nim&egrave;gue: <input name="ComNim" type="file" /></div><br>');
   print('<div align=center><input type="submit" value="Met … jour les noms de communes avec le fichier ci-dessous"/></div>');
   print('</form>');

}  

/**
 * Met … jour les noms de commune avec le fichier ci-joint
 * @param object $pconnexionBD Connexion à la base 
 */ 
function maj_commune($pconnexionBD)
{
   $gi_seuil_alerte = 5;
   $st_fich_dest = tempnam("/genea16","majcommunes");
   print('<div class=TITRE>Maj a jour des noms de communes</div><br>');
   if (!move_uploaded_file($_FILES['ComNim']['tmp_name'],$st_fich_dest)) 
   {
      print("<div CLASS=IMPORTANT>Erreur de telechargement :</div><br>");
      switch($_FILES['StatsNim']['error'])
      { 
           case 2 : print("Fichier trop gros par rapport à MAX_FILE_SIZE");break;
           default : print("Erreur inconnue");print_r($_FILES);
      }
      exit;
   }   
   $pf=fopen($st_fich_dest,"r") or die("Impossible de lire $st_fich_dest\n");
   while ((list($st_entete_nim,$st_type_fichier,$st_code_insee,$st_nom_commune,$st_vide,$st_numdpt,$st_dpt) = fgetcsv($pf, 2000, ";")) !== FALSE) 
    {     
      list($i_code_insee,$i_num_paroisse)=preg_split("/\-/",$st_code_insee); 
      //print("$i_code_insee,$i_num_paroisse=>$st_nom_commune<br>");
      if (preg_match("/\-87$/", $st_nom_commune))
        continue;
      $st_requete = "update commune_acte set nom='".addslashes($st_nom_commune)."' where code_insee=$i_code_insee and numero_paroisse=$i_num_paroisse";
      print("Req=$st_requete<br>");
      $pconnexionBD ->execute_requete($st_requete);
    }
  
   fclose($pf);   
   unlink($st_fich_dest); 
   print('<div align=center></div><br>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="FORMULAIRE" />');
   print('<div align=center><input type="submit" value="RETOUR"/></div>');
   print('</form>'); 
 }   

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');
print('<body>');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;

switch($gst_mode)
{
   case 'FORMULAIRE' : 
       affiche_menu();
   break;
   
   case 'VERIFICATION' :      
       maj_commune($connexionBD);   
   break;
        
}

print('</form>');
print('</body>');


?>
