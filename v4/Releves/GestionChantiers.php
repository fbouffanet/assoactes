<?php
//http://127.0.0.1:8888/Gestion_Chantiers.php
$gst_chemin = "../";
//$gst_chemin = "";
require_once("$gst_chemin/Commun/Identification.php");
require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
// La page est reservee uniquement aux gens ayant les droits utilitaires
require_once("$gst_chemin/Commun/VerificationDroits.php");
verifie_privilege(DROIT_RELEVES);
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/PaginationTableau.php");
require_once("$gst_chemin/Commun/commun.php");
$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
switch ($gst_mode) {
 case 'EXPORT' :
   header("Content-type: text/csv");
   header("Expires: 0");
   header("Pragma: public");
   header('Content-disposition: attachment; filename="RelevesAGC.csv"');
   $i_idf_statut_export =  isset($_POST['idf_statut_export']) ? $_POST['idf_statut_export']: 0; 
   exporte_liste_releves($connexionBD,$i_idf_statut_export);
   exit();
 break;  
}
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='$gst_chemin/Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='$gst_chemin/Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_chemin/Commun/menu.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
function maj(Formulaire)
{   
   document.forms[Formulaire].mode.value='LISTE';
   document.forms[Formulaire].submit();
}
function retour_aujourdhui(Formulaire)
{
  var d= new Date();
  var jour = d.getDate();
  var mois = d.getMonth()+1;
  var annee = d.getFullYear();
  if (jour<10)
     jour = '0' + jour;
  if (mois<10)
     mois = '0' + mois;   
  document.forms[Formulaire].date_retour.value = jour + '/' + mois + '/' +  annee;
}
function VerifieSuppression(Formulaire,IdfElement)
{
  var chaine="";
  if (document.forms[Formulaire].elements[IdfElement].checked)
	{
		  chaine=document.forms[Formulaire].elements[IdfElement].id+"\n";
	}
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)
      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }     
  }
  if (chaine == "")
  {
     alert("Pas de chantier sélectionné");
  }
  else
  {
   	 Message="Etes-vous sûr de supprimer ces chantiers :\n"+chaine+"?";
   	 if (confirm (Message))                        
   	 {  
        document.forms[Formulaire].mode.value= 'SUPPRIMER';                                                                                                                                     
        document.forms[Formulaire].submit();                                                           
     }
  }
}
function isBisextile(date_a_verifier) {
   
    // On sépare la date en 3 variables pour vérification, parseInt() converti du texte en entier
    j = parseInt(date_a_verifier.split("/")[0], 10); // jour
    m = parseInt(date_a_verifier.split("/")[1], 10); // mois
    a = parseInt(date_a_verifier.split("/")[2], 10); // année
     
    // Définition du dernier jour de février
    // Année bissextile si annnée divisible par 4 et que ce n'est pas un siècle, ou bien si divisible par 400
    if (a%4 == 0 && a%100 !=0 || a%400 == 0) fev = 29;
    else fev = 28;
   
    // Nombre de jours pour chaque mois
    nbJours = new Array(31,fev,31,30,31,30,31,31,30,31,30,31);
   
    // Enfin, retourne vrai si le jour est bien entre 1 et le bon nombre de jours, idem pour les mois, sinon retourn faux
    return ( m >= 1 && m <=12 && j >= 1 && j <= nbJours[m-1] );
}
function VerifieChamps(Formulaire)
{
   var date_ptn = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
   var convention = document.forms[Formulaire].date_convention.value;
   var envoi = document.forms[Formulaire].date_envoi.value;
   var retour = document.forms[Formulaire].date_retour.value;
   var fin = document.forms[Formulaire].date_fin.value;
   var ListeErreurs	= "";
   if (convention == "")
   {
      ListeErreurs += "La date de la convention est obligatoire\n";
   }
   if (!date_ptn.test (convention))
   {
      ListeErreurs += "La date de la convention doit être de la forme : JJ/MM/AAAA\n";
   }
	if (!isBisextile (convention))
   {
      ListeErreurs += "La date de la convention n'est pas correcte\n";
   }
   if (envoi == "")
   {
      ListeErreurs += "La date d'envoi est obligatoire\n";
   }
   if (!date_ptn.test (envoi))
   {
      ListeErreurs += "La date d'envoi doit être de la forme : JJ/MM/AAAA\n";
   }
	if (!isBisextile (envoi))
   {
      ListeErreurs += "La date d'envoi n'est pas correcte\n";
   }
   if (retour != "")
   {
      if (!date_ptn.test (retour))
      {
         ListeErreurs += "La date de retour doit être de la forme : JJ/MM/AAAA\n";
      }
	   if (!isBisextile (retour))
      {
         ListeErreurs += "La date de retour n'est pas correcte\n";
      }
   }
    if (fin != "")
   {
      if (!date_ptn.test (fin))
      {
         ListeErreurs += "La date de fin doit être de la forme : JJ/MM/AAAA\n";
      }
	   if (!isBisextile (fin))
      {
         ListeErreurs += "La date de fin n'est pas correcte\n";
      }
   }
   if (ListeErreurs != "")
   {
      alert (ListeErreurs);
   }
   else
   {
      document.forms[Formulaire].submit();
   }   
}
</script>
<?php
print('</head>');
print('<body>');
if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_chantier = (int) $_GET['mod'];
}
else
   $gi_idf_chantier = isset ( $_POST['idf_chantier']) ? (int) $_POST['idf_chantier'] : 0;
$i_session_num_page = isset($_SESSION['num_page_chantiers']) ? $_SESSION['num_page_chantiers'] : 1;
$gi_num_page_cour = empty($_GET['num_page']) ? $i_session_num_page : $_GET['num_page'];
$i_session_idf_statut = isset($_SESSION['idf_statut_session']) ? $_SESSION['idf_statut_session'] : 1;
$i_get_idf_statut=isset($_GET['idf_statut_visu']) ? (integer) $_GET['idf_statut_visu']: $i_session_idf_statut; 
$gi_idf_statut=isset($_POST['idf_statut_visu']) ?  (integer) $_POST['idf_statut_visu'] : $i_get_idf_statut;
$_SESSION['idf_statut_session'] = $gi_idf_statut;
/**
 * Affiche la liste des communes
 * @param object $rconnexionBD
 * @param integer $pi_idf_statut identifiant du statut à visualiser 
 */ 
function menu_liste($rconnexionBD,$pi_idf_statut_visu)
{
   global $gi_num_page_cour, $ga_tbl_statut;
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print('<div class=alignCenter>Statut : <select name=idf_statut_visu onChange=javascript:maj(0);>');
   $_SESSION['num_page_chantiers'] = $gi_num_page_cour;
   foreach($ga_tbl_statut as $i_index => $st_valeur)
   {
      if ($i_index==$pi_idf_statut_visu)
        print("<option value=\"$i_index\" selected>$st_valeur</option>");
      else  
        print("<option value=\"$i_index\">$st_valeur</option>");             
   }
   print('</select>');
   $st_requete = empty($pi_idf_statut_visu) ? "select count(distinct id_releveur ) from `chantiers`": "select count(distinct id_releveur ) from `chantiers` where statut=$pi_idf_statut_visu";
  $i_nb_reveleurs = $rconnexionBD->sql_select1($st_requete);
   print(" $i_nb_reveleurs Releveurs distincts");
   print('</div><br>');
   // Affichage des initiales
   $st_requete = empty($pi_idf_statut_visu ) ? "SELECT DISTINCT (left( ca.nom, 1 )) AS init from `chantiers` ch join `documents` r on (ch.id_document = r.idf) join `commune_acte` ca  on (r.id_commune = ca.idf ) ORDER BY init":"SELECT DISTINCT (left( ca.nom, 1 )) AS init from `chantiers` ch join `documents` r on (ch.id_document = r.idf) join `commune_acte` ca  on (r.id_commune = ca.idf ) where ch.statut=$pi_idf_statut_visu ORDER BY init";
   $a_initiales_communes = $rconnexionBD->sql_select($st_requete);
   print("<div align=center>");
   $i_session_initiale = isset($_SESSION['initiale_statcom']) ? $_SESSION['initiale_statcom'] : $a_initiales_communes[0];
   $gc_initiale = empty($_GET['initiale_statcom']) ? $i_session_initiale : $_GET['initiale_statcom'];   
   if (!in_array($gc_initiale,$a_initiales_communes))
      $gc_initiale=$a_initiales_communes[0];
   $_SESSION['initiale_statcom'] = $gc_initiale;
   foreach ($a_initiales_communes as $c_initiale)
   {
      if ($c_initiale==$gc_initiale)
         print("<span style=\"font-weight: bold;\"
>$c_initiale </span>");
      else
         print("<a href=\"".$_SERVER['PHP_SELF']."?initiale_statcom=$c_initiale&idf_statut_visu=$pi_idf_statut_visu\">$c_initiale</a> ");
   }
   print("<br></div>");
  
   if (empty($pi_idf_statut_visu))
      $st_requete = "select ch.idf, ca.nom, r.fourchette, (select case r.support when 1 then 'Acte authentique' when 2 then 'Photo' when 3 then 'Relevé papier' end), concat(ad.nom,'  ',ad.prenom,' (',ad.idf,')') from `chantiers` ch join `documents` r on (ch.id_document = r.idf) join `commune_acte` ca  on (r.id_commune = ca.idf ) join `adherent` ad on (ch.id_releveur = ad.idf) where ca.nom like '$gc_initiale%' order by ca.nom, ad.nom";
   else
      $st_requete = "select ch.idf, ca.nom, r.fourchette, (select case r.support when 1 then 'Acte authentique' when 2 then 'Photo' when 3 then 'Relevé papier' end), concat(ad.nom,'  ',ad.prenom,' (',ad.idf,')') from `chantiers` ch join `documents` r on (ch.id_document = r.idf) join `commune_acte` ca  on (r.id_commune = ca.idf ) join `adherent` ad on (ch.id_releveur = ad.idf) where ch.statut=$pi_idf_statut_visu and ca.nom like '$gc_initiale%' order by ca.nom, ad.nom";
   
   $a_liste_chantiers = $rconnexionBD->liste_valeur_par_clef($st_requete);
   $i_nb_chantiers = count($a_liste_chantiers);
   if ($i_nb_chantiers!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_chantiers,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Commune','Fourchette','Support','Releveur','Modifier','Supprimer'));
      $pagination->init_param_bd($rconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      $pagination->affiche_tableau_edition();
      print("<br>");
      $pagination->affiche_entete_liens_navigation();      
   }
   else
      print("<div align=center>Pas de chantiers</div>\n");
   print("<input type=hidden name=mode value=SUPPRIMER>");
   print("<br><div align=center><input type=button value=\"Supprimer les chantiers sélectionnés\" ONCLICK=VerifieSuppression(0,\"supp[]\")></div>");   
   print("</form>");  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=MENU_AJOUTER>");  
   print("<div align=center><input type=submit value=\"Ajouter un chantier\"></div>");  
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<div class=alignCenter>");
   print("<input type=hidden name=mode value=EXPORT>");
   print("<input type=submit value=\"Exporter la liste des releves\"> "); 
   print('avec le statut: <select name=idf_statut_export>');
   foreach($ga_tbl_statut as $i_index => $st_valeur)
   {
      print("<option value=\"$i_index\">$st_valeur</option>");             
   }
   print("</select>");             
   print("</div>");
   print("</form>");  
}
/*
   Fonction de composition du document de chantier pour la liste déroulante
*/
function chaine_select_options_chantier($pst_idf_choisi,$pa_tableau)
{
   $st_chaine_options = '';
   foreach ($pa_tableau as $st_idf => $st_val)
   {
      list($st_nom,$st_fourchette,$st_support) = $st_val;
      //$st_val = 'Commune : '.$st_nom.', Fourchette : '.$st_fourchette.',  '.$st_support;
      $st_val = $st_nom.', Fourchette : '.$st_fourchette.',  '.$st_support;
      $st_chaine_options .= ("$pst_idf_choisi" !='' && "$st_idf"=="$pst_idf_choisi") ? "<option value=\"$st_idf\" selected=\"selected\">$st_val</option>\n": "<option value=\"$st_idf\">$st_val</option>\n";
   }
   return $st_chaine_options;
}
/**
 * Affiche de la table d'édition
 * @param integer $pi_id_document identifiant du registre
 * @param integer $pi_id_releveur identifiant de l'adherent
 * @param integer $pi_type_acte identifiant des types d'acte
 * @param string $pst_convention date de la convention
 * @param string $pst_envoi date d'envoi du chantier
 * @param string $pst_retour date de retour du chantier
 * @param string $pst_fin date de fin 
 * @param string $pst_comment_envoi commentaires envoi
 * @param string $pst_comment_retour commentaires retour
 * @param integer $pi_statut statut du chantier
 * @param array $pa_documents liste des documents
 * @param array $pa_adherents liste des releveurs (adhérents) 
 */ 
function menu_edition($pi_id_document,$pi_id_releveur,$pi_type_acte,$pst_convention,$pst_envoi,$pst_retour,$pst_fin,$pst_comment_envoi,$pst_comment_retour,$pi_statut,$pa_documents,$pa_adherents)
{
   global $ga_tbl_statut;
   print("<table border=1>");
   print("<tr><th>Document</th><td><select name=id_document>".chaine_select_options_chantier($pi_id_document,$pa_documents)."</select></td></tr>");
   print("<tr><th>Releveur</th><td><select name=id_releveur>".chaine_select_options($pi_id_releveur,$pa_adherents)."</select></td></tr>");
   $st_checked = $pi_type_acte & 1 ? 'checked' : '';
   print("<tr><th>Type d'acte</th><td><input type=checkbox name=type_acte[] value=\"B\" $st_checked >Bapteme<br>");
   $st_checked = $pi_type_acte & 2 ? 'checked' : '';
   print("<input type=checkbox name=type_acte[] value=\"M\" $st_checked>Mariage<br>");
   $st_checked = $pi_type_acte & 4 ? 'checked' : '';
   print("<input type=checkbox name=type_acte[] value=\"S\" $st_checked>Sepulture<br>");
   $st_checked = $pi_type_acte & 8 ? 'checked' : '';
   print("<input type=checkbox name=type_acte[] value=\"V\" $st_checked>Divers<br></td></tr>");
	 $pst_convention = ($pst_convention != '00/00/0000') ? $pst_convention : '';
   print("<tr><th>Date convention (jj/mm/aaaa)</th><td><input type=\"text\" name=date_convention value=\"$pst_convention\" size=10 maxsize=10></td></tr>");
   $pst_envoi = ($pst_envoi != '00/00/0000') ? $pst_envoi : '';	
   print("<tr><th>Date envoi du chantier (jj/mm/aaaa)</th><td><input type=\"text\" name=date_envoi value=\"$pst_envoi\" size=10 maxsize=10></td></tr>");
   
   /*list($i_sec,$i_min,$i_heures,$i_jourm,$i_mois,$i_annee,$i_jours,$i_joura,$i_hiver)=localtime();
   $i_mois++;
   $i_annee+=1900;
   $st_aujourdhui=sprintf("%02d/%02d/%04d",$i_jourm,$i_mois,$i_annee);*/
   $pst_retour = ($pst_retour != '00/00/0000') ? $pst_retour : '';	
   print("<tr><th>Date retour du chantier (jj/mm/aaaa)</th><td><input type=\"text\" name=date_retour value=\"$pst_retour\" size=10 maxsize=10> <input type=\"button\" value=\"Aujourd'hui\" onClick=\"retour_aujourdhui(0)\"</td></tr>");
	 $pst_fin = ($pst_fin != '00/00/0000') ? $pst_fin : ''; 
   print("<tr><th>Date fin du chantier (jj/mm/aaaa)</th><td><input type=\"text\" name=date_fin value=\"$pst_fin\" size=10 maxsize=10></td></tr>");
   print("<tr><th>Commentaires envoi</th><td><textarea name=comment_envoi cols=40 rows=10>".$pst_comment_envoi."</textarea></td></tr>");
   print("<tr><th>Commentaires retour</th><td><textarea name=comment_retour cols=40 rows=10>".$pst_comment_retour."</textarea></td></tr>");
   print("<tr><th>Statut du Chantier</th><td><select name=statut>");
   foreach($ga_tbl_statut as $i_index => $st_valeur)
   {
      if ($pi_statut==$i_index)
         print("<option value=\"$i_index\" selected=\"selected\">$st_valeur</option>");
      else
         print("<option value=\"$i_index\">$st_valeur</option>");             
   }
   print("</select></td></tr>");
   print("</table>");
}
/** Affiche le menu de modification des chantiers
 * @param object $rconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_chantier Identifiant du chantier
 * @param array $pa_documents Liste des documents
 * @param array $pa_adherents Liste des adhérents (releveur)
 */ 
function menu_modifier($rconnexionBD,$pi_idf_chantier,$pa_documents,$pa_adherents)
{
   $st_requete = "select `id_document`,`id_releveur`,`type_acte`,DATE_FORMAT(`date_convention`,'%d/%m/%Y'),DATE_FORMAT(`date_envoi`,'%d/%m/%Y'),DATE_FORMAT(`date_retour`,'%d/%m/%Y'),DATE_FORMAT(`date_fin`,'%d/%m/%Y'), `comment_envoi`, `comment_retour`, `statut` from `chantiers` where idf=$pi_idf_chantier";
   list($i_id_document,$i_id_releveur,$i_type_acte,$st_convention,$st_envoi,$st_retour,$st_fin,$st_comment_envoi,$st_comment_retour,$i_statut)=$rconnexionBD->sql_select_liste($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=MODIFIER>");
   print("<input type=hidden name=idf_chantier value=$pi_idf_chantier>");
   print("<div align=center>");
   menu_edition($i_id_document,$i_id_releveur,$i_type_acte,$st_convention,$st_envoi,$st_retour,$st_fin,$st_comment_envoi,$st_comment_retour,$i_statut,$pa_documents,$pa_adherents);   
   print("</div><br>");
   print("<div align=center><input type=button value=\"Modifier\" ONCLICK='VerifieChamps(0)'></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\"></div>");
   print('</form>');
}
/** Affiche le menu d'ajout d'un chantier
 * @param array $pa_documents Liste des documents
 * @param array $pa_adherents Liste des adhérents (releveur)
 */ 
function menu_ajouter($pa_documents,$pa_adherents)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=AJOUTER>");
   print("<div align=center>");
   menu_edition(0,0,0,'','','','','','',1,$pa_documents,$pa_adherents);
   print("</div><br>");
   print("<div align=center><input type=button value=\"Ajouter\" ONCLICK='VerifieChamps(0)'></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}
/** Export la liste des relevés au format donnée
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_stat_export identifiant du statut de l'export 
 */ 
function exporte_liste_releves($pconnexionBD,$pi_idf_stat_export)
{
  global $ga_tbl_statut;
   $ga_tbl_nature = array( 0=>'', 1=>'RPX catholiques', 2=>'RPX protestants', 3=>'Etat civil', 4=>'Actes Notari&eacute; ');
   $st_requete = empty($pi_idf_stat_export) ? "select ca.nom,d.fourchette,d.nature_acte,concat(r.nom, ' ',r.prenom),DATE_FORMAT(c.date_retour,'%d/%m/%Y'),c.statut from chantiers c join documents d on (c.id_document=d.idf) join commune_acte ca on (d.id_commune=ca.idf) join releveur r on (c.id_releveur=r.idf_adherent) order by ca.nom" :"select ca.nom,d.fourchette,d.nature_acte,concat(r.nom, ' ',r.prenom),DATE_FORMAT(c.date_retour,'%d/%m/%Y') from chantiers c join documents d on (c.id_document=d.idf) join commune_acte ca on (d.id_commune=ca.idf)join releveur r on (c.id_releveur=r.idf_adherent) where c.statut=$pi_idf_stat_export order by c.date_retour desc";
   //die($st_requete);
   $a_liste_releves=$pconnexionBD->sql_select_multiple($st_requete);
   $fh = @fopen('php://output', 'w' );       
   if (count($a_liste_releves)>0)
   {
     fputcsv($fh, array("Commune","Fourchette","Nature","Releveur","Dernière MAJ")); 
     foreach ($a_liste_releves as $a_ligne)
     {
        if (empty($pi_idf_stat_export))
        {
           list($st_com,$st_fourchette,$i_nature,$st_releveur,$st_date_retour,$i_statut) = $a_ligne;
           // Put the data into the stream
           fputcsv($fh, array($st_com,$st_fourchette,$ga_tbl_nature[$i_nature],$st_releveur,$st_date_retour,$ga_tbl_statut[$i_statut]));           
        }
        else
        {
          list($st_com,$st_fourchette,$i_nature,$st_releveur,$st_date_retour) = $a_ligne;
          fputcsv($fh, array($st_com,$st_fourchette,$ga_tbl_nature[$i_nature],$st_releveur,$st_date_retour)); 
        }
 
     }
     fclose($fh);
   }
}
/*---------------------------------------------------------------------------
  Démarrage du programme
  ---------------------------------------------------------------------------*/
$ga_tbl_statut = array( 0=>'Tous', 1=>'En cours', 2=>'Terminé',3=>'Abandonné');
require_once("$gst_chemin/Commun/menu.php");
$ga_documents = $connexionBD->sql_select_multiple_par_idf("select r.idf, ca.nom, r.fourchette, (select case r.support when 1 then 'Acte authentique' when 2 then 'Photo' when 3 then 'Relevé papier' end) from `documents` r  join `commune_acte` ca  on (r.id_commune = ca.idf ) order by ca.nom");
$ga_communes  = $connexionBD->liste_valeur_par_clef("select idf,nom from `commune_acte` order by nom");
$ga_adherent  = $connexionBD->liste_valeur_par_clef("select idf,concat(nom,'  ',prenom,' (',idf,')') from adherent where statut in ('".ADHESION_INTERNET."','".ADHESION_BULLETIN."','".ADHESION_SUSPENDU."') order by nom,prenom");
switch ($gst_mode) {
  case 'LISTE' : 
  menu_liste($connexionBD,$gi_idf_statut); 
  break;
  case 'MENU_MODIFIER' :
     menu_modifier($connexionBD,$gi_idf_chantier,$ga_documents,$ga_adherent);
  break;
  
  case 'MODIFIER' :
     $i_id_document = (int) $_POST['id_document'];
     $i_id_releveur = (int) $_POST['id_releveur'];
	 $a_types_actes = $_POST['type_acte'];
	 $i_type_acte = 0;
     if (in_array('B',$a_types_actes)) $i_type_acte = $i_type_acte|1;
     if (in_array('M',$a_types_actes)) $i_type_acte = $i_type_acte|2;
     if (in_array('S',$a_types_actes)) $i_type_acte = $i_type_acte|4;
     if (in_array('V',$a_types_actes)) $i_type_acte = $i_type_acte|8; 
     list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_convention'],3);
     $c_date_convention = join('-',array($i_annee,$i_mois,$i_jour));
     list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_envoi'],3);
     $c_date_envoi = join('-',array($i_annee,$i_mois,$i_jour));
	   $c_date_retour = '';
	   if ($_POST['date_retour'] != '')
	   {
        list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_retour'],3);
        $c_date_retour = join('-',array($i_annee,$i_mois,$i_jour));
	   }
     $c_date_fin=null;
	   if ($_POST['date_fin'] != '')
	   {
        list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_fin'],3);
        $c_date_fin = join('-',array($i_annee,$i_mois,$i_jour));
	   }
    if (get_magic_quotes_gpc())
    {
      if (ini_get('magic_quotes_sybase'))
      {
         $st_comment_envoi = trim($_POST['comment_envoi']);
         $st_comment_retour = trim($_POST['comment_retour']);
      }
      else
      {
         $st_comment_envoi = stripslashes(trim($_POST['comment_envoi']));
         $st_comment_retour = stripslashes(trim($_POST['comment_retour']));
      }
    }
    else
    { 
     $st_comment_envoi = trim($_POST['comment_envoi']);
     $st_comment_retour = trim($_POST['comment_retour']);
	   }
    $i_statut = (int) $_POST['statut'];
    $connexionBD->initialise_params(array(':comment_envoi'=>$st_comment_envoi,':comment_retour'=>$st_comment_retour));
    $connexionBD->execute_requete("update `chantiers` set id_document=$i_id_document, id_releveur=$i_id_releveur, type_acte=$i_type_acte, date_convention='$c_date_convention', date_envoi='$c_date_envoi', date_retour='$c_date_retour',date_fin='$c_date_fin', comment_envoi=:comment_envoi, comment_retour=:comment_retour, statut=$i_statut where idf=$gi_idf_chantier"); 
     menu_liste($connexionBD,$gi_idf_statut);  
  break;
  case 'MENU_AJOUTER' : 
     menu_ajouter($ga_documents,$ga_adherent);
  break;
  case 'AJOUTER':
     $i_id_document = (int) $_POST['id_document'];
     $i_id_releveur = (int) $_POST['id_releveur'];
	 $a_types_actes = $_POST['type_acte'];
	 $i_type_acte = 0;
     $c_date_fin = '';
     if (in_array('B',$a_types_actes)) $i_type_acte = $i_type_acte|1;
     if (in_array('M',$a_types_actes)) $i_type_acte = $i_type_acte|2;
     if (in_array('S',$a_types_actes)) $i_type_acte = $i_type_acte|4;
     if (in_array('V',$a_types_actes)) $i_type_acte = $i_type_acte|8; 
     list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_convention'],3);
     $c_date_convention = join('-',array($i_annee,$i_mois,$i_jour));
     list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_envoi'],3);
     $c_date_envoi = join('-',array($i_annee,$i_mois,$i_jour));
	 $c_date_retour = '';
	 if ($_POST['date_retour'] != '')
	 {
        list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_retour'],3);
        $c_date_retour = join('-',array($i_annee,$i_mois,$i_jour));
	 }
	 if ($_POST['date_fin'] != '')
	 {
        list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['date_fin'],3);
        $c_date_fin = join('-',array($i_annee,$i_mois,$i_jour));
	 }
 	 if (get_magic_quotes_gpc())
   {
      if (ini_get('magic_quotes_sybase'))
      {
         $st_comment_envoi = trim($_POST['comment_envoi']);
         $st_comment_retour = trim($_POST['comment_retour']);
      }
      else
      {
         $st_comment_envoi = stripslashes(trim($_POST['comment_envoi']));
         $st_comment_retour = stripslashes(trim($_POST['comment_retour']));
      }
   }
   else
   { 
     $st_comment_envoi = trim($_POST['comment_envoi']);
     $st_comment_retour = trim($_POST['comment_retour']);
	 }
   $i_statut = (int) $_POST['statut'];
   $connexionBD->initialise_params(array(':comment_envoi'=>$st_comment_envoi,':comment_retour'=>$st_comment_retour));
   $st_requete = "insert into chantiers (id_document, id_releveur, type_acte, date_convention, date_envoi, date_retour, date_fin,comment_envoi, comment_retour, statut) values ($i_id_document, $i_id_releveur, $i_type_acte, '$c_date_convention', '$c_date_envoi', '$c_date_retour','$c_date_fin',:comment_envoi , :comment_retour, $i_statut)";   
   $connexionBD->execute_requete($st_requete);
   menu_liste($connexionBD,$gi_idf_statut);
   break;
   case 'SUPPRIMER':
      $a_liste_supprime = $_POST['supp'];
     foreach ($a_liste_supprime as $i_idf_chantier)
     {	 
          $connexionBD->execute_requete("delete from `chantiers` where idf = $i_idf_chantier");
     }
     menu_liste($connexionBD,$$gi_idf_statut);
   break;        
}  
print('</body>');
?>