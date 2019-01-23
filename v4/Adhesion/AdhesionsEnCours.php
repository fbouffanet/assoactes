<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_GESTION_ADHERENT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');
require_once('../Commun/GestionAdherents.php');
require_once("../Commun/Adherent.php"); 
// INITIALISATION
require_once("include.php");



print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print("<title>Adhesions en cours</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
function confirme_creation()
{
  return confirm("Voulez-vous réellement créer cet adhérent ?");
}
</script>
<?php
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
$gst_jeton = isset($_POST['jeton']) ? $_POST['jeton'] : null;
if (isset($_GET['jeton']))
{
    $gst_mode = 'STATUT';
    $gst_jeton = $_GET['jeton'];
}
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

/**
 * Affiche la liste des communes
 * @param object $pconnexionBD
 */ 
function menu_liste($pconnexionBD)
{
   global $gi_num_page_cour;
   $st_requete = "SELECT DISTINCT (left( nom, 1 )) AS init FROM `commune_acte` ORDER BY init";
   $a_initiales_communes = $pconnexionBD->sql_select($st_requete);
   print("<div class=TITRE>Adh&eacute;sions en ligne en cours<br></div>");
   print("<div align=center><br><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");

   
   $st_requete = "select idf,ins_nom,ins_prenom,ins_token from inscription_prov order by idf desc";
   $a_liste_adhesions = $pconnexionBD->sql_select_multiple_par_idf($st_requete);   
   if (count($a_liste_adhesions)!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_adhesions),NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Idf Adhesion','Nom','Pr&eacute;nom','Transaction'));
      $pagination->init_param_bd($pconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      $a_tableau_visualisation = array();
      
      foreach ($a_liste_adhesions as $i_idf => $a_tab)
      {
         list($st_nom,$st_prenom,$st_jeton) = $a_tab;
         $st_cmd = $st_jeton!=''? "<div align=center><input type=\"button\" value=\"Afficher\" onClick=\"document.location.href='".$_SERVER['PHP_SELF']."?jeton=$st_jeton'\"></div>" : "Attente paiement";
         $a_tableau_visualisation[]=array($i_idf,$st_nom,$st_prenom,$st_cmd);
      }
      /*print("<pre>");
      print_r($a_tableau_visualisation);
      print("</pre>");
      */
      $pagination->affiche_tableau_simple($a_tableau_visualisation);
     
   }
   else
     print("<div align=center>Pas d'adh&eacute;sions</div>\n"); 
  print("</form>");

}

/**
 * Affiche de le satut d'une transaction
 * @param string $pst_jeton jeton identifiant la transaction 
 */ 
function affiche_statut($pst_jeton)
{
   print("<div align=center>");
   print("<div class=TITRE>Statut de la transaction identifi&eacute;e par le jeton $pst_jeton<br></div>");
   $payline = new paylineSDK(); 
   $array = array();
   $array['version'] = '';      
   $a_reponse = $payline->get_webPaymentDetails($pst_jeton,$array);
   
   $st_msg_court=$a_reponse['result']['shortMessage'];
   $st_msg_long=$a_reponse['result']['longMessage'];
   $st_code=$a_reponse['result']['code'];
   print("<div><br><table border=1>");
   print("<tr><th>Message court</th><td>$st_msg_court</td></tr>");
   print("<tr><th>Message long</th><td>$st_msg_long</td></tr>");
   print("</table></div>");
   if ($st_code=='00000')
   {
      print("<div align=center><br><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return confirme_creation();\">");
      print("<input type=\"hidden\" name=\"mode\" value=\"CREATION\">");
      print("<input type=\"hidden\" name=\"jeton\" value=\"$pst_jeton\">");
      print("<input type=\"submit\" value=\"Créer cet adhérent\">");
      print("</form></div>");
   }
   print("<div align=center><br><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=\"submit\" value=\"Retour à la liste des adhésions en cours\">");
   print("</form>");
   /*
   print("<pre>");
   print_r($a_reponse);
   print("</pre>");
   */
   print("</div>");
}

/**
 * Crée le statut identifié par le jeton
 * @param string $pst_jeton jeton identifiant la transaction 
 * @global object $connexionBD connexion à la BD
 */ 
function cree_adherent($pst_jeton)
{
  global $connexionBD; 
  $st_requete = "select i_p.idf,i_p.ins_idf_agc,i_p.ins_type,adht.statut as ancien_statut from `inscription_prov` i_p left join `adherent` adht on (i_p.ins_idf_agc=adht.idf) where i_p.ins_token = '$pst_jeton'";
  list($i_idf_ins_prov,$i_idf_agc,$st_type_adhesion,$st_ancien_statut) = $connexionBD->sql_select_liste($st_requete);
  if (empty($st_ancien_statut))
  {
	   // l'adhérent doit forcément être créé
	   $adherent = new Adherent($connexionBD,null);
	   $adherent->initialise_inscription_en_ligne($pst_jeton);
	   $adherent->cree();
  }
  else
  {
	   // le compte génébank doit être recréé
	   $adherent = new Adherent($connexionBD,$i_idf_agc);
	   if ($st_ancien_statut==ADHESION_SUSPENDU)
	   {
		    $adherent->cree_utilisateur_gbk();
	   }
	   // c'est forcément une réadhésion
	   $adherent->initialise_readhesion_en_ligne($pst_jeton);
	   $adherent->modifie();
     $adherent->modifie_adhesion();
     $adherent->envoie_message_readhesion(); 
  }
  $st_requete = "delete from `inscription_prov` where ins_token='$pst_jeton'";
  $connexionBD->execute_requete($st_requete);
  print("<div class=IMPORTANT>Adh&eacuterent cr&eacute;&eacute</div>");
   
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");


switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD); 
  break;
  case 'STATUT': affiche_statut($gst_jeton);
  break;
  case 'CREATION' : cree_adherent($gst_jeton);
                    menu_liste($connexionBD); 
  break;
  default:
  
      
}  

print('</body></html>');

?>