<?php
require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VALIDATION_TDM);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/PaginationTableau.php');
require_once('../Administration/chargement/Acte.php');
require_once('../Administration/chargement/Personne.php');
require_once('../Administration/chargement/ModificationPersonne.php');
require_once('../Administration/chargement/ModificationActe.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Liste des demandes de modification de TD validées ou refusées</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
$('#statut').change(function() {
   $('#liste_td').submit();
});

$('#type_acte').change(function() {
   $('#liste_td').submit();
});

});
</script>
<?php
print('</head>');
print('<body>');

$ga_statuts = array ('A'=> 'Accepte','R' => 'Refuse');
$ga_types=array(0=>"Tous")+$ga_types_nimegue;

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];
$st_sess_statut = isset($_SESSION['statut']) && array_key_exists($_SESSION['statut'],$ga_statuts)? $_SESSION['statut'] : 'A';
$gst_statut = isset($_POST['statut']) ? $_POST['statut'] : $st_sess_statut;
$i_sess_type_acte = isset($_SESSION['type_acte']) && array_key_exists($_SESSION['type_acte'],$ga_types)? $_SESSION['type_acte'] : 0;
$gi_type_acte = isset($_POST['type_acte']) ? (int) $_POST['type_acte'] : $i_sess_type_acte;
$st_session_mode = isset($_SESSION['mode']) ? $_SESSION['mode'] : 'LISTE';
$gst_mode=empty($_POST['mode']) ? $st_session_mode : $_POST['mode']; 
$_SESSION['statut'] = $gst_statut;
$_SESSION['type_acte']= $gi_type_acte;
if (!isset ($_POST['idf_modif']))
{
  $gst_mode='LISTE';
}
$_SESSION['mode'] = $gst_mode;

if (isset($_SESSION['ident']))
{
  switch ($gst_mode) 
  {
    case 'LISTE':
      print("<div class=\"TITRE\">Liste des demandes de modification de TD trait&eacute;es</div>");
      print("<form id=\"liste_td\" name=\"liste_td\" action=\"".$_SERVER['PHP_SELF']."\" method=post>");
      print("<input type=\"hidden\" name=\"mode\" value=\"LISTE\">");
      print ("<div align=center><br>Statut: <select name=statut id=statut>");
      foreach ($ga_statuts as $st_statut => $st_lib_statut)
      {
        if ($st_statut==$gst_statut)
          print("<option value=\"$st_statut\" selected=\"selected\">$st_lib_statut</option>");
        else
          print("<option value=\"$st_statut\">$st_lib_statut</option>");
        
      }
      print("</select></div>");
      print ("<div align=center><br>Type: <select name=type_acte id=type_acte>");      
      foreach ($ga_types as $i_type => $st_lib_type)
      {
         if ($i_type==$gi_type_acte)
          print("<option value=\"$i_type\" selected=\"selected\">$st_lib_type</option>");
        else
          print("<option value=\"$i_type\">$st_lib_type</option>");
      }
      print("</select></div>");    
      print("</form>");
           
      switch ($gi_type_acte)
      {
        case 0:
          $st_requete =($gst_statut == 'A') ? "select distinct ma.idf,ma.idf_acte,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur,ma.date_validation,concat(adht.nom,' ',adht.prenom) as valideur from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) join adherent adht on (ma.idf_valideur=adht.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut='A' group by ma.idf order by ma.date_modif desc" : "select distinct ma.idf,ma.idf_acte,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur,ma.date_validation,concat(adht.nom,' ',adht.prenom) as valideur,ma.motif_refus from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) join adherent adht on (ma.idf_valideur=adht.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut='R' group by ma.idf order by ma.date_modif desc";
        break;
        case IDF_NAISSANCE:
        case IDF_MARIAGE:
        case IDF_DECES:
          $st_requete = ($gst_statut == 'A') ? "select distinct ma.idf,ma.idf_acte,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur,ma.date_validation,concat(adht.nom,' ',adht.prenom) as valideur from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) join adherent adht on (ma.idf_valideur=adht.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut='A' and a.idf_type_acte=$gi_type_acte group by ma.idf order by ma.date_modif desc" : "select distinct ma.idf,ma.idf_acte,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur,ma.date_validation,concat(adht.nom,' ',adht.prenom) as valideur,ma.motif_refus from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) join adherent adht on (ma.idf_valideur=adht.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut='R' and a.idf_type_acte=$gi_type_acte group by ma.idf order by ma.date_modif desc";
        break;
        case IDF_DIVERS:
          $st_requete = ($gst_statut == 'A') ? "select distinct ma.idf,ma.idf_acte,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur,ma.date_validation,concat(adht.nom,' ',adht.prenom) as valideur from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) join adherent adht on (ma.idf_valideur=adht.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut='A' and a.idf_type_acte not in (".IDF_NAISSANCE.','.IDF_MARIAGE.','.IDF_DECES.") group by ma.idf order by ma.date_modif desc" : "select distinct ma.idf,ma.idf_acte,a.date,ta.nom,ca.nom,GROUP_CONCAT(distinct concat(prties.prenom,' ',prties.patronyme) order by prties.idf separator ' X ') as parties,ma.date_modif,ma.email_demandeur,ma.date_validation,concat(adht.nom,' ',adht.prenom) as valideur,ma.motif_refus from `modification_acte` ma join acte a on (ma.idf_acte=a.idf) join `modification_personne` prties on (ma.idf=prties.idf_modification_acte and prties.idf_type_presence=".IDF_PRESENCE_INTV.") join type_acte ta on (a.idf_type_acte=ta.idf) join commune_acte ca on (a.idf_commune=ca.idf) join adherent adht on (ma.idf_valideur=adht.idf) where a.idf_source=".IDF_SOURCE_TD." and ma.statut='R' and a.idf_type_acte not in (".IDF_NAISSANCE.','.IDF_MARIAGE.','.IDF_DECES.") group by ma.idf order by ma.date_modif desc";
        break;          
      }
      //FBOprint("$gst_statut $st_requete<br>");
      $a_liste_modifs=$connexionBD->sql_select_multiple_par_idf($st_requete);
      if (count($a_liste_modifs)>0)
      {   
        $pagination = ($gst_statut == 'A')  ? new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_modifs),NB_LIGNES_PAR_PAGE,1,array("Date de l'acte",'Type','Commune','Parties','Date de la demande','Demandeur','Date de la validation','Valideur','&nbsp;','&nbsp;')) : new PaginationTableau($_SERVER['PHP_SELF'],'num_page',count($a_liste_modifs),NB_LIGNES_PAR_PAGE,1,array("Date de l'acte",'Type','Commune','Parties','Date de la demande','Demandeur','Date de la validation','Valideur','Motif Refus','&nbsp;','&nbsp;'));    
        $a_tableau_a_afficher = array();
        foreach ($a_liste_modifs as $i_idf_modif  => $a_groupe)
        {
          if ($gst_statut == 'A')
            list($i_idf_acte,$st_date,$st_type,$st_commune,$st_parties,$st_date_demande,$st_demandeur,$st_date_validation,$st_valideur) = $a_groupe;
          else
             list($i_idf_acte,$st_date,$st_type,$st_commune,$st_parties,$st_date_demande,$st_demandeur,$st_date_validation,$st_valideur,$st_commentaires) = $a_groupe;
          $st_action = "<form action=\"".$_SERVER['PHP_SELF']."\" method=post>";
          $st_action .="<input type=\"hidden\" name=\"idf_modif\" value=\"$i_idf_modif\">";
          $st_action .="<input type=\"hidden\" name=\"mode\" value=\"VISU_MODIF\">";
          $st_action .= "<input type=submit value=\"Voir la demande\">";
          $st_action .= "</form>";
          if ($gst_statut == 'A')
            $a_tableau_a_afficher[] = array($st_date,$st_type,$st_commune,$st_parties,$st_date_demande,$st_demandeur,$st_date_validation,$st_valideur,$st_action,"<a href=\"../InfosTD.php?idf_acte=$i_idf_acte\" target=\"_blank\" class=\"lien_bouton\">Voir la modification</a>");
          else
            $a_tableau_a_afficher[] = array($st_date,$st_type,$st_commune,$st_parties,$st_date_demande,$st_demandeur,$st_date_validation,$st_valideur,$st_commentaires,$st_action,"<a href=\"../InfosTD.php?idf_acte=$i_idf_acte\" target=\"_blank\" class=\"lien_bouton\">Voir la modification</a>");
        }
        $pagination->init_page_cour($gi_num_page_cour);
        $pagination->affiche_entete_liens_navigation();
        $pagination->affiche_tableau_simple($a_tableau_a_afficher);
      }       
      else
      {
        print("<div align=center><br>Pas de demandes enregistr&eacute;es</div>");
      }
      print("<br>");
   break;
   case 'VISU_MODIF':
   print("<div class=\"TITRE\">Visualisation d'une modification de relev&eacute; de TDM</div>");
    if (isset ($_POST['idf_modif']))
    {
      $i_idf_modification = (int) $_POST['idf_modif'];
      $go_acte = new ModificationActe($connexionBD,null,$i_idf_modification);
      $go_acte->charge($i_idf_modification);
      print("<div align=center><br><textarea rows=15 cols=80>");
      print($go_acte->versChaine());
      print("</textarea></div>");
      print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
      print("<input type=\"hidden\" name=\"mode\" value=\"LISTE\">");
      print("<div align=center><br><input type=submit value=\"Liste des demandes\"></div>");
      print("</form>");
    }
    else
    {
      print("L'identifiant de modification est manquant !");
      $_SESSION['mode']='LISTE';  
   }
   break; 
  }  
}
print("</body></html>");
?>