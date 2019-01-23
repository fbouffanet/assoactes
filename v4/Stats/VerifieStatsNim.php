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
   print('<div class=TITRE>V&eacute;rification des statistiques Nim&egrave;gue<br></div>');
   print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print("<div align=center><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$gi_max_taille_upload\">"); 
   print('<input type="hidden" name="mode" value="VERIFICATION" >');
   print('<br>Fichier <span class=IMPORTANT>CSV</span> des statistiques Nim&egrave;gue: <input name="StatsNim" type="file" /><br></div>');
   print('<div align=center><br><input type="submit" value="Compare les statistiques entre la base Nimegue et la base V4"/></div>');
   print('</form>');

}  

/**
 * Charge les statistiques Nimègue V3 et les compare avec celles de la base V4
 * @param object $pconnexionBD Connexion à la base 
 */ 
function Verifie_StatsNim($pconnexionBD,$pst_rep_tmp)
{
   $gi_seuil_alerte = 5;
   $st_fich_dest = tempnam($pst_rep_tmp,"statsnim_dest");
   print('<div class=TITRE>V&eacute;rification des statistiques Nim&egrave;gue</div><br>');
   $a_stats_acte_nai= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),count(*) from acte a join `commune_acte` ca on (a.idf_commune=ca.idf) where a.idf_type_acte=".IDF_NAISSANCE." and (a.idf_source=1 or a.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
   $a_stats_acte_mar= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),count(*) from acte a join `commune_acte` ca on (a.idf_commune=ca.idf) where a.idf_type_acte=".IDF_MARIAGE." and (a.idf_source=1 or a.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
   $a_stats_acte_dec= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),count(*) from acte a join `commune_acte` ca on (a.idf_commune=ca.idf) where a.idf_type_acte=".IDF_DECES." and (a.idf_source=1 or a.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
        
   $a_stats_nai= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),sum(sc.nb_actes) from `stats_commune` sc join `commune_acte` ca on (sc.idf_commune=ca.idf) where sc.idf_type_acte=".IDF_NAISSANCE." and (sc.idf_source=1 or sc.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
   /*
   print("Naissances:<br>");
   print_r($a_stats_nai);
   print("<hr><br>");
   */
   $a_stats_mar= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),sum(sc.nb_actes) from `stats_commune` sc join `commune_acte` ca on (sc.idf_commune=ca.idf) where sc.idf_type_acte=".IDF_MARIAGE." and (sc.idf_source=1 or sc.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
   /*
   print("Mariages:<br>");
   print_r($a_stats_mar);
   print("<hr><br>");
   */
   $a_stats_dec= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),sum(sc.nb_actes) from `stats_commune` sc join `commune_acte` ca on (sc.idf_commune=ca.idf) where sc.idf_type_acte=".IDF_DECES." and (sc.idf_source=1 or sc.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
   /*
   print("Deces:<br>");
   print_r($a_stats_dec);
   print("<hr><br>");
   */
   $a_stats_tot= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),sum(sc.nb_actes) from `stats_commune` sc join `commune_acte` ca on (sc.idf_commune=ca.idf) where (sc.idf_source=1 or sc.idf_source=4) group by ca.code_insee,ca.numero_paroisse");
   /*
   print("Total:<br>");
   print_r($a_stats_tot);
   print("<hr><br>");
   */
   if (!move_uploaded_file($_FILES['StatsNim']['tmp_name'],$st_fich_dest)) 
   {
      print("<div CLASS=IMPORTANT>Erreur de téléchargement :</div><br>");
      switch($_FILES['StatsNim']['error'])
      { 
           case 2 : print("Fichier trop gros par rapport à MAX_FILE_SIZE");break;
           default : print("Erreur inconnue");print_r($_FILES);
      }
      exit;
   }   
   $pf=fopen($st_fich_dest,"r") or die("Impossible de lire $st_fich_dest\n");
   $i_idf_groupe =0;
   $st_prev_majeure = '';
   $a_groupes_patros = array();
   /*
   print("<div align=center><table border=1>");
   print("<tr><th rowspan=2>Commune</th><th colspan=2>Naissances</th><th colspan=2>Mariages</th><th colspan=2>D&eacute;c&eacute:s</th><th colspan=2>Divers</th></tr>");
   print("<tr><th>Nimegue</th><th>V4</th><th>Nimegue</th><th>V4</th><th>Nimegue</th><th>V4</th><th>Nimegue</th><th>V4</th></tr>");
   */
   while (!feof($pf))
   {      
      $st_ligne           = fgets($pf);
      //"Code";"Commune";"D‚part.";"Nbr de N";"Dates N";"Nbr de M";"Dates M";"Nbr de D";"Dates D";"Nbr de V";"Dates V";"TOTAL";"Dpt";"Comment. libre";"N saisis le";"N saisis par";"N contr“l‚s par";"N valid‚s ?";"N valid‚ le";"M saisis le";"M saisis par";"M contr“l‚s par";"M valid‚s ?";"M valid‚s le";"D saisis le";"D saisis par";"D contr“l‚s par";"D valid‚s ?";"D valid‚s le";"V saisis le";"V saisis par";"V contr“l‚s par";"V valid‚s ?";"V valid‚s le"
      list($st_code,$st_commune,$st_dpt,$i_nb_nai,$st_dates_nai,$i_nb_mar,$st_dates_mar,$i_nb_dec,$st_dates_dec,$i_nb_div,$st_dates_div,$st_ajeter) = split(';',$st_ligne,12);
      $i_nb_nai = preg_replace('/\D+/','',$i_nb_nai);
      $i_nb_mar = preg_replace('/\D+/','',$i_nb_mar);
      $i_nb_dec = preg_replace('/\D+/','',$i_nb_dec);
      $i_nb_div = preg_replace('/\D+/','',$i_nb_div);
      /*
      print("<tr><td>$st_commune</td>");
      print("<td>$i_nb_nai</td>");
      */
      //print("$st_code=>$st_commune,$i_nb_nai,$i_nb_mar,$i_nb_dec,$i_nb_div<br>");
      $i_nb_nai_v4=0;
      if (array_key_exists($st_code,$a_stats_nai))
      {
         if ($a_stats_nai[$st_code]!=$i_nb_nai)
         {
            if (abs($a_stats_nai[$st_code]-$i_nb_nai)>$gi_seuil_alerte)
               print("***<span class=IMPORTANT>Naissances de $st_commune - $st_code: ($i_nb_nai Nim&egrave;gue,$a_stats_nai[$st_code] en base V4)</span><br>");
            else
              print("Naissances de $st_commune - $st_code: ($i_nb_nai Nim&egrave;gue,$a_stats_nai[$st_code] en base V4)<br>");
         
         }
         if ($a_stats_nai[$st_code]!=$a_stats_acte_nai[$st_code])
             print("+++<span style=\"color: orange;\">Naissances de $st_commune - $st_code: ($a_stats_acte_nai[$st_code] actes ,$a_stats_nai[$st_code] compt&eacute;s)</span><br>");
         $i_nb_nai_v4=$a_stats_nai[$st_code];
      }
      
      $i_nb_mar_v4=0;
      if (array_key_exists($st_code,$a_stats_mar))
      {
         if ($a_stats_mar[$st_code]!=$i_nb_mar)
         {
            if (abs($a_stats_mar[$st_code]-$i_nb_mar)>$gi_seuil_alerte)
               print("***<span class=IMPORTANT>Mariages de $st_commune - $st_code: ($i_nb_mar Nim&egrave;gue,$a_stats_mar[$st_code] en base V4)</span><br>");
            else
               print("Mariages de $st_commune - $st_code: ($i_nb_mar Nim&egrave;gue,$a_stats_mar[$st_code] en base V4)<br>");   
         }
         $i_nb_mar_v4=$a_stats_mar[$st_code];
         if ($a_stats_mar[$st_code]!=$a_stats_acte_mar[$st_code])
             print("+++<span style=\"color: orange;\">Mariages de $st_commune - $st_code: ($a_stats_acte_mar[$st_code] actes de mariages, $a_stats_mar[$st_code] compt&eacute;s)</span><br>");
      }
      $i_nb_dec_v4=0;
      if (array_key_exists($st_code,$a_stats_dec))
      {
         if ($a_stats_dec[$st_code]!=$i_nb_dec)
         {
            if (abs($a_stats_dec[$st_code]-$i_nb_dec)>$gi_seuil_alerte)
               print("***<span class=IMPORTANT>D&eacute;c&egrave;s de $st_commune - $st_code: ($i_nb_dec Nim&egrave;gue,$a_stats_dec[$st_code] en base V4)</span><br>");
            else
               print("D&eacute;c&egrave;s de $st_commune - $st_code: ($i_nb_dec Nim&egrave;gue,$a_stats_dec[$st_code] en base V4)<br>");
         }
         $i_nb_dec_v4=$a_stats_dec[$st_code];
         if ($a_stats_dec[$st_code]!=$a_stats_acte_dec[$st_code])
             print("+++<span style=\"color: orange;\">D&eacute;c&egrave;s de $st_commune - $st_code: ($a_stats_acte_dec[$st_code] actes,$a_stats_dec[$st_code] compt&eacute;s)</span><br>");
      }
      if (array_key_exists($st_code,$a_stats_tot))
      {
         $i_nb_div_v4 = $a_stats_tot[$st_code] - $i_nb_nai_v4 -$i_nb_mar_v4 - $i_nb_dec_v4;
         if ($i_nb_div_v4!=$i_nb_div)
         {
            if (abs($i_nb_div_v4-$i_nb_div)>$gi_seuil_alerte)
               print("***<span class=IMPORTANT>Divers de $st_commune - $st_code: ($i_nb_div Nim&egrave;gue, $i_nb_div_v4 en base V4)</span><br>");
            else
               print("Divers de $st_commune - $st_code: ($i_nb_div Nim&egrave;gue, $i_nb_div_v4 en base V4)<br>");   
         }   
      }
    
   }   
   fclose($pf);
   //print("</table></div>");   
   unlink($st_fich_dest); 
   //print('<div align=center></div><br>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="FORMULAIRE" />');
   print('<div align=center><input type="submit" value="RETOUR"/></div>');
   print('</form>'); 
 }   

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Verification des statistiques Nimegue</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
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
       Verifie_StatsNim($connexionBD,$gst_repertoire_chargement_actes);   
   break;
        
}

print('</body></html>');


?>
