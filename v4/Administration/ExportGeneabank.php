<?php
require_once('../Commun/config.php');
require_once('../Commun/constantes.php');
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_GENEABANK);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/commun.php');
require_once('../Commun/Benchmark.inc');

/**
 * Affiche le menu de s�lection
 */
function AfficheMenu() {
   
   print("<div align=center>");
   print('<div class="panel panel-primary">');
   print('<div class="panel-heading">Listes des exports G&eacute;n&eacute;abank</div>');
   print('<div class="panel-body">');
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print('<input type="hidden" name="mode" value="EXPORT_UNIONS">');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Export des unions</button>');  
   print("</form>");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="EXPORT_INDEX_PATROS"><br>');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Export des index patronymiques</button>'); 
   print("</form>");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="EXPORT_INDEX_COMMUNES"><br>');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Export des index des communes</button>'); 
   print("</form>");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="EXPORT_COMPTEURS">');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Mise � jour des compteurs adh&eacute;rents</button>');
   print("</form></div></div>");
}

/**
 * Exporte la liste des couples pour G�n�abank dans le fichier
 * sp�cifi� par  $pst_nom_fichier et $pst_nom_fichier
 * @param object $pconnexionBD Connexion � la base de donn�e
 * @param string $pst_idf_geneabank Identifiant G�n�abank de l'association
 * @param string $pst_repertoire_export R�pertoire de l'export
 * @return string Nom du fichier temporaire cr��   
 * Exemple d'export :
 * ;CHARON;Ren�;MONDO ?;Suzanne;gbkagcharente;d�c�s ancien cjt
 * ;DELOR;Pierre;DUMAS DELAGE;Fran�oise;gbkagcharente;d�c�s  
 */ 
function  ExporteUnions($pconnexionBD,$pst_idf_geneabank,$pst_repertoire_export)
{
   $st_fichier = "$pst_repertoire_export/gbkcpl.txt";
   $st_requete = "select trim(u.patronyme_epoux),trim(prn_epx.libelle),trim(u.patronyme_epouse),trim(prn_epse.libelle), case u.idf_type_acte when 3 then concat(ta.nom,'parents') when 4 then (case epx.idf_type_presence when 1 then (case epse.idf_type_presence when 5 then ta.nom end) when 5 then (case epse.idf_type_presence when 1 then concat(ta.nom,'ancien cjt') end) when 6 then (case epse.idf_type_presence when 7 then concat(ta.nom,'parents') end) end) when 1 then (case epx.idf_type_presence when 1 then (case epse.idf_type_presence when 1 then ta.nom when 5 then concat(ta.nom,'ancien cjt epse') end) when 5 then (case epse.idf_type_presence when 1 then concat(ta.nom,'ancien cjt epx') end) when 6 then (case epse.idf_type_presence when 7 then concat(ta.nom,'parents') end) end) else (case epx.idf_type_presence when 1 then (case epse.idf_type_presence when 1 then ta.nom when 5 then concat(ta.nom,' ancien cjt epse') end) when 5 then (case epse.idf_type_presence when 1 then concat(ta.nom,' ancien cjt epx') end) when 6 then(case epse.idf_type_presence when 7 then concat(ta.nom,' parents') end) end) end from `union` u join personne epx on (u.idf_epoux=epx.idf) join prenom prn_epx on (epx.idf_prenom=prn_epx.idf) join personne epse on (u.idf_epouse=epse.idf)  join prenom prn_epse on (epse.idf_prenom=prn_epse.idf) join type_acte ta on (u.idf_type_acte=ta.idf) join source s on (u.idf_source=s.idf) where s.publication_geneabank=1 and u.patronyme_epoux REGEXP '^[A-Za-z ()]+$' and u.patronyme_epouse REGEXP '^[A-Za-z ()]+$'" ;
   $pconnexionBD->desactive_cache();
   $pconnexionBD->execute_requete($st_requete);
   $pf = fopen($st_fichier, "w") or die("<div class=IMPORTANT>Impossible d'&eacute;crire $st_fichier</div>");
   while (list($st_patro_epx,$st_prn_epx,$st_patro_epse,$st_prn_epse,$st_cmt)=$pconnexionBD->ligne_suivante_resultat())
   {
      $st_ligne = ";$st_patro_epx;$st_prn_epx;$st_patro_epse;$st_prn_epse;$pst_idf_geneabank;$st_cmt"; 
      fwrite($pf,"$st_ligne\r\n");      
   }
   fclose($pf);
   return($st_fichier);      
}

/**
 * Exporte l'index des noms pour G�n�abank dans le fichier
 * sp�cifi� par  $pst_nom_fichier et $pst_nom_fichier
 * Le fichier est au format Index G�n�anet 
 * @param object $pconnexionBD Connexion � la base de donn�e
 * @param string $pst_idf_geneabank Identifiant G�n�abank de l'association
 * @param string $pst_repertoire_export R�pertoire de l'export
 * @global $gst_code_dpt_geneabank Code d�partement g�n�abank (Ex: F16)
 * @global $gst_code_region_geneabank Code r�gion g�n�abank (Ex: PCH)
 * @global $gst_code_pays_geneabank Code pays g�n�abank (Ex: FRA)
 * @global $gst_code_type_geneabank Source g�n�abank (Ex: C pour acte original)      
 * Exemple d'export :
 * BATARD;d�c�s;1777;1777;1;CLAIX;F16;PCH;FRA;C
 * BATARDE;d�c�s;1791;1791;1;BECHERESSE;F16;PCH;FRA;C
 */ 
function  ExporteIndexPatros($pconnexionBD,$pst_idf_geneabank,$pst_repertoire_export)
{
   global $gst_code_dpt_geneabank;
   global $gst_code_region_geneabank;
   global $gst_code_pays_geneabank;
   global $gst_code_type_geneabank;
   $st_requete =  "select p.libelle,ta.nom,sp.annee_min,sp.annee_max,sp.nb_personnes,ca.nom from stats_patronyme sp join patronyme p on (sp.idf_patronyme=p.idf) join commune_acte ca on (sp.idf_commune=ca.idf) join type_acte ta on (sp.idf_type_acte=ta.idf) join source s on (sp.idf_source=s.idf) where s.publication_geneabank=1 and p.libelle REGEXP '^[A-Za-z ()]+$' ";
   $pconnexionBD->desactive_cache();
   $pconnexionBD->execute_requete($st_requete);
   $st_fichier = "$pst_repertoire_export/gbk.txt";
   $pf = fopen($st_fichier, "w") or die("<div class=\"alert alert-danger\">Impossible d'&eacute;crire $st_fichier</div>");
   while (list($st_patro,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_personnes,$st_commune)=$pconnexionBD->ligne_suivante_resultat())
   {
      $st_ligne = join(';',array($st_patro,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_personnes,$st_commune,$gst_code_dpt_geneabank,$gst_code_region_geneabank,$gst_code_pays_geneabank,$gst_code_type_geneabank));
      fwrite($pf,"$st_ligne\r\n");      
   }
   fclose($pf);
   return($st_fichier);
}

/**
 * Affiche le r�sultat du fichier
 * @param string $pst_url_export Url du r�pertoire de l'export 
 * @param string $pst_nom_fichier Nom du fichier 
 */ 
function AfficheResultatFichier($pst_url_export,$pst_nom_fichier){
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<label for=\"export_fichier\" class=\"col-form-label col-md-2\">Fichier cr&eacute;e:</label>");
   print('<div class="col-md-10">');
   print("<a id=export_fichier href=\"$pst_url_export/$pst_nom_fichier\">$pst_nom_fichier</a>");
   print('</div>');
   print('<input type="hidden" name="mode" value="MENU"/>');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Revenir au menu G&eacute;n&eacute;abank</button>');
   print("</form>");   
}


/**
 * Exporte l'index des noms pour G�n�abank dans le fichier
 * sp�cifi� par  $pst_nom_fichier et $pst_nom_fichier
 * Le fichier est au format Index G�n�anet 
 * @param object $pconnexionBD Connexion � la base de donn�e
 * @param string $pst_repertoire_export R�pertoire de l'export
 * @param string $pst_nom_fichier
 * @param string $pst_url_export Url du r�pertoire de l'export  
 * @param string $st_prefixe_adherent_gbk pr�fixe adh�rent G�n�abank
 * @param integer $pi_nb_demandes_gbk Nombre de demandes authoris�es pour un adh�rent par mois 
 */ 
function MajCompteurAdherents($pconnexionBD,$pst_repertoire_export,$pst_nom_fichier,$pst_url_export,$st_prefixe_adherent_gbk,$pi_nb_demandes_gbk) {
   $a_liste_idf=$pconnexionBD->sql_select("select idf , annee_cotisation, statut from adherent where statut = 'B' or statut = 'I'   and annee_cotisation >=  YEAR( NOW()) order by idf ");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   $pf = fopen("$pst_repertoire_export/$pst_nom_fichier", "w") or die("<div class=\"alert alert-danger\">Impossible d'&eacute;crire $pst_repertoire_export/$pst_nom_fichier</div>");
   print("<label for=\"cmds_gbk\" class=\"col-form-label col-md-2\">Mise &agrave; jour des compteurs adh&eacute;rents G&eacute;n&eacute;abank</label>"); 
   print('<div class="col-md-10">');
   print("<textarea rows=18 cols=15 id=\"cmds_gbk\" class=\"form-control\">");
   foreach ($a_liste_idf as $i_idf)
   {
      $st_ligne= "SET $st_prefixe_adherent_gbk$i_idf $pi_nb_demandes_gbk\r\n";
      fwrite($pf,$st_ligne);
      print($st_ligne);
   }
   fclose($pf);
   print("</textarea></div>");
   
   print('<label for="export_fichier" class="col-form-label col-md-2">Fichier cr&eacute;e:</label>');
   print('<div class="col-md-10">');
   print("<a id=export_fichier href=\"$pst_url_export/$pst_nom_fichier\">$pst_nom_fichier</a>");
   print('</div>');
   print('<input type="hidden" name="mode" value="MENU"><br>');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Revenir au menu G&eacute;n&eacute;abank</button>'); 
   print("</form>"); 
}

/**
 * Exporte l'index des communes pour G�n�abank dans le fichier
 * sp�cifi� par  $pst_nom_fichier et $pst_nom_fichier
 * @param object $pconnexionBD Connexion � la base de donn�e
 * @param string $pst_repertoire_export R�pertoire de l'export
 * @param string $pst_nom_fichier
 * @param string $pst_url_export Url du r�pertoire de l'export   
 */ 
function ExporteIndexCommunes($pconnexionBD,$pst_repertoire_export,$pst_nom_fichier,$pst_url_export) {
   global $gst_pays_geneabank,$gst_url_interrogation_geneabank;
   //IDF_ASSO_GBK
   $a_stats_commune=$pconnexionBD->sql_select_multiple("select left(ca.code_insee,2),ca.nom,ta.nom,sc.annee_min,sc.annee_max,sc.nb_actes from stats_commune sc join commune_acte ca on (sc.idf_commune=ca.idf) join type_acte ta on (sc.idf_type_acte=ta.idf) join source s on (sc.idf_source=s.idf) where s.publication_geneabank=1 order by ca.nom");
   print("<form action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   $pf = fopen("$pst_repertoire_export/$pst_nom_fichier", "w") or die("<div class=\"alert alert-danger\">Impossible d'&eacute;crire $pst_repertoire_export/$pst_nom_fichier</div>");
   print("<label for=\"index_commune\" class=\"col-form-label col-md-2\">Index des communes pour G&eacute;n&eacute;abank</label>"); 
   print('<div class="col-md-10">');
   print('<textarea id="index_commune" rows=18 cols=120 class="form-control">');
   foreach ($a_stats_commune as $a_stats)
   {
      list($i_dpt,$st_commune,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_actes) = $a_stats;
      $st_ligne = join(';',array(IDF_ASSO_GBK,$gst_url_interrogation_geneabank,$gst_pays_geneabank,$i_dpt,$st_commune,$st_type_acte,$i_annee_min,$i_annee_max,$i_nb_actes));
      fwrite($pf,"$st_ligne\n");
      print("$st_ligne\n");
   }
   fclose($pf);
   print("</textarea></div>");
   print('<label for="export_fichier" class="col-form-label col-md-2">Fichier cr&eacute;e:</label>');
   print('<div class="col-md-10">');
   print("<a id=export_fichier href=\"$pst_url_export/$pst_nom_fichier\">$pst_nom_fichier</a>");
   print('</div>');
   print('<input type="hidden" name="mode" value="MENU"/><br>');
   print('<button type=submit class="btn btn-primary col-md-4 col-md-offset-4">Revenir au menu G&eacute;n&eacute;abank</button>');    
   print("</form>"); 
}

/*------------------------------------------------------------------------------
                            Corps du programme
 -----------------------------------------------------------------------------*/
print('<!DOCTYPE html>');
print("<Head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Gestion des export Geneabank</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('</Head>');

print("<body>");
print('<div class="container">');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gst_mode = empty($_POST['mode']) ? 'MENU': $_POST['mode'] ;

switch ($gst_mode) {
   case 'MENU' :
     AfficheMenu();
   break;
   case 'EXPORT_UNIONS' :
     $etape_prec = getmicrotime();
     $st_fichier_unions = ExporteUnions($connexionBD,IDF_ASSO_GBK,$gst_repertoire_indexes_geneabank);
     print('<div class="text-center">');
     print benchmark("Export Union : $st_fichier_unions");
     $zip = new ZipArchive();
     $st_chemin_zip="$gst_repertoire_indexes_geneabank/$gst_index_couple_geneabank";
     if (file_exists($st_chemin_zip)) unlink($st_chemin_zip);
     if ($zip->open($st_chemin_zip, ZIPARCHIVE::CREATE)!==TRUE) {
        exit("<div class=\"alert alert-danger\">Impossible d'�crire <$st_chemin_zip></div\n");
     }
     $zip->addFile($st_fichier_unions,"cpl_".IDF_ASSO_GBK);
     $zip->close(); 
     print benchmark("ZIP Union");
     
     unlink($st_fichier_unions);
     AfficheResultatFichier($gst_url_indexes_geneabank,$gst_index_couple_geneabank);
     print("</div>");
   break;
   case 'EXPORT_INDEX_PATROS' :
     $etape_prec = getmicrotime();
     $st_fichier_indexes = ExporteIndexesPatros($connexionBD,IDF_ASSO_GBK,$gst_repertoire_indexes_geneabank);
     print('<div class="text-center">');
     print benchmark("Export Index : $st_fichier_indexes");
     $zip = new ZipArchive();
     $st_chemin_zip="$gst_repertoire_index_geneabank/$gst_index_patros_geneabank";
     if (file_exists($st_chemin_zip)) unlink($st_chemin_zip);
     if ($zip->open($st_chemin_zip, ZIPARCHIVE::CREATE)!==TRUE) {
        exit("<div class=\"alert alert-danger\">Impossible d'�crire <$st_chemin_zip></div\n");
     }
     $zip->addFile($st_fichier_indexes,IDF_ASSO_GBK);
     $zip->close(); 
     print benchmark("ZIP Index");
     
     unlink($st_fichier_indexes);
     AfficheResultatFichier($gst_url_indexes_geneabank,$gst_index_patros_geneabank);
     print("</div>");
   break;
   case 'EXPORT_INDEX_COMMUNES' :
     ExporteIndexCommunes($connexionBD,$gst_repertoire_indexes_geneabank,$gst_compteurs_communes_geneabank,$gst_url_indexes_geneabank);
   break;
   case 'EXPORT_COMPTEURS':
   MajCompteurAdherents($connexionBD,$gst_repertoire_indexes_geneabank,$gst_compteurs_adherents_geneabank,$gst_url_indexes_geneabank,PREFIXE_ADH_GBK,$gi_nb_demandes_gbk);
   break;
   default : print("<div class=\"alert alert-danger\">Mode $gst_mode non reconnu</div");
}

print("</div></body></html>");

?>