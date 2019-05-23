<?php
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');

require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_STATS);
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/PaginationTableau.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr"> ');
print('<title>Base AGC: Stats consulations adh�rent</title>');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");

print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
?>
function maj(Formulaire)
{
   
   if (document.forms[Formulaire].num_page_patcom)
      document.forms[Formulaire].num_page_patcom.value=1;
   document.forms[Formulaire].submit();
}
<?php
print("</script>");
print('<link rel="shortcut icon" href="images/favicon.ico">');

print("</head>");

 /**
 * Affiche le menu formulaire
 */ 
function affiche_formulaire() {
  ;
  print("<div align=center>");
  print("<form action=".$_SERVER['PHP_SELF']." method=post>");
  
	print("Selection du fichier pour la recherche  ");   
	print('<select name="idf_journal">');
	print('<option value=1>Requ�te recherche sur une personne </OPTION>');
	print('<option value=2>Requ�te recherche sur un couple </OPTION>');
	print('<option value=3>Requ�te recherche sur les d�pouillements </OPTION>');
	print('<option value=4>Requ�te recherche sur les liasses</OPTION>');
  print('<option value=5>Requ�te recherche sur les r&eacute;pertoires</OPTION>');
  print('<option value=6>Requ�te recherche sur les TD de mariage</OPTION>');
  print('<option value=7>Requ�te recherche sur les TD de naissance</OPTION>');
  print('<option value=8>Requ�te recherche sur les TD de d&eacute;c&eacute;s</OPTION>');
  print("</select>");
  print("<br/><br/>");
   
  print("<div>");
  print('<label>Recherche libre dans un des champs: </label>');
  print('<input type="text" name="libre" />');
		 
  print("</div>"); 
  print("<br/><br/>");
  print('<input type="hidden" value="AFFICHE_JOURNAL" name="mode"/>');
  print('<input type="submit" value="valider" name="valider"/>');
  print("</form>");
  print("</div>");
}

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$i_session_idf_adherent =  isset($_SESSION['idf_adherent']) ? $_SESSION['idf_adherent']: null;
$gi_idf_adherent =   isset($_GET['idf_adherent']) ? (int) $_GET['idf_adherent'] : $i_session_idf_adherent;
$_SESSION['idf_adherent']= $gi_idf_adherent;
                                                                  
$st_session_mode =  isset($_SESSION['mode']) ? $_SESSION['mode']: 'FORMULAIRE';
$gst_mode =  isset($_REQUEST['mode']) ? $_REQUEST['mode'] : $st_session_mode; 

if (!empty($gst_mode) && !in_array($gst_mode,array('FORMULAIRE','AFFICHE_JOURNAL')))
   $gst_mode='FORMULAIRE';

print("<body>");
require_once("../Commun/menu.php");

$ga_fichiers_logs = array(
    1=> array('requetes_personne.log',5,array('Date','Ident','IP','Nom','Prenom','Commune','Rayon','Ann�e Min','Ann�e Max','Commentaires')),
    2=> array('requetes_couple.log',7,array('Date','Ident','IP','Nom Epx','Prenom Epx','Nom Epse','Prenom Epse','Commune','Rayon','Ann�e Min','Ann�e Max')),
    3=> array('requetes_depouillements.log',null,array('Date','Ident','IP','Commune','Type d\'acte')),
    4=>array('requetes_liasse.log',8,array('Date','Ident','IP','Nom notaire','Prenom Notaire','Serie','Cote Debut','Cote Fin','Commune','Rayon','Ann�e Min','Ann�e Max')),
    5=>array('requetes_rep_not.log',3,array('Date','Ident','IP','Commune','Rayon','Idf Rep','Type acte','Ann�e Min','Ann�e Max','Nom 1','Prenom 1','Nom 2','Prenom 2','Paroisse')),
    6=>array('requetes_td_mariages.log',3,array('Date','Ident','IP','Commune')),
    7=>array('requetes_td_naissances.log',3,array('Date','Ident','IP','Commune')),
    8=>array('requetes_td_deces.log',3,array('Date','Ident','IP','Commune'))
  );

list($gst_adherent,$gst_ident)=$connexionBD->sql_select_liste("select concat(prenom,' ',nom,' (',idf,')'),ident from adherent where idf=$gi_idf_adherent");
$a_communes_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from commune_acte");

print("<div class=TITRE>Affichage des recherches de l'adh&eacute;rent $gst_adherent</div><br>");


if (isset($gi_idf_adherent ))
{
  switch ($gst_mode)
  {
     case 'FORMULAIRE':
        affiche_formulaire(); 
     break;
     case 'AFFICHE_JOURNAL':
        $i_session_idf_journal =  isset($_SESSION['idf_journal']) ? $_SESSION['idf_journal']: null;
        $gi_idf_journal =   isset($_POST['idf_journal']) ? (int) $_POST['idf_journal'] : $i_session_idf_journal;
        $i_session_num_page = isset($_SESSION['num_page_recherches_adht']) ? $_SESSION['num_page_recherches_adht'] : 1;
        $gi_num_page = empty($_POST['num_page_recherches_adht']) ?  $i_session_num_page: (integer) $_POST['num_page_recherches_adht'];
        $st_session_libre = isset($_SESSION['libre']) ? $_SESSION['libre']: '';
        $gst_libre =   isset($_POST['libre']) ? $_POST['libre'] : $st_session_libre;
        $_SESSION['idf_journal']=$gi_idf_journal;
        $_SESSION['num_page_recherches_adht']=$gi_num_page;
        $_SESSION['libre']=$gst_libre;
        if (array_key_exists ($gi_idf_journal,$ga_fichiers_logs))
        {
           $st_fichier_journal= sprintf("%s/%s",$gst_rep_logs,$ga_fichiers_logs[$gi_idf_journal][0]);
           $i_col_paroisse = $ga_fichiers_logs[$gi_idf_journal][1];
           $a_entete = $ga_fichiers_logs[$gi_idf_journal][2];        
	         $a_resultats =array();
           $fp = @fopen($st_fichier_journal, 'r') or die("Ouverture en lecture de \"$st_fichier_journal\" impossible !");
           while (!feof($fp))
            {
              $st_ligne = fgets($fp, 4096);
              if (empty($st_ligne))
                continue;
              $a_ligne = explode(SEP_CSV,$st_ligne);
              if ($a_ligne[1]!=$gst_ident)
                continue;
              
              if (!is_null($i_col_paroisse))
              {
                 if (array_key_exists($a_ligne[$i_col_paroisse],$a_communes_acte))
                    $a_ligne[$i_col_paroisse]= $a_communes_acte[$a_ligne[$i_col_paroisse]];
                 else
                    $a_ligne[$i_col_paroisse]= '';      
              }
              if (empty($gst_libre))
              {	                
                 $a_resultats[] = $a_ligne;                          
              }
              else
              {
                  if (preg_grep ("/$gst_libre/i",$a_ligne)) 
                  {
                    $a_resultats[] = $a_ligne;			      
                  }
              }
           }
           fclose($fp);
           $nb = count($a_resultats);
           if ($nb > 0)
           {  
              if (!empty ($gst_libre))    
                print("<div class='SOUSTITRE'>Recherche filtr&eacute;e sur le champ '$gst_libre'</div>");     
              print("<form name=\"RecherchesAdherents\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
              
              $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page_recherches_adht',$nb,100,DELTA_NAVIGATION,$ga_fichiers_logs[$gi_idf_journal][2]);          
              $pagination->init_page_cour($gi_num_page);
              $pagination->affiche_entete_liste_select('RecherchesAdherents');
              $pagination->affiche_tableau_simple($a_resultats);
              $pagination->affiche_entete_liste_select('RecherchesAdherents');
              print("<input type=hidden name=mode value='AFFICHE_JOURNAL'>");
              print("</form>");  
            }
            else
            {
              if (empty ($st_libre))
		            print("<div align=center>L'adh&eacute;rent n'a pas fait de recherche !</div>");
              else
                print("<div align=center>Pas de r&eacute;sultat</div>");
            }   
        }
        else
        {
           print("<div CLASS=IMPORTANT>Erreur: Ce fichier journal n'est pas configur&eacute;</div>\n");
        }
        print("<form action=".$_SERVER['PHP_SELF']." method=post>");
	      print("<input type=hidden name=mode value=FORMULAIRE>");
	      print("<div align=center><br><input type=submit value=\"Retour\"></div>");   
	      print("</form>");
     break;
  }
}
else
{
   print("<div class=important>idf_adherent n'est pas d&eacute;fini</div>");
}
print("</body>");
print("</html>");  

?>