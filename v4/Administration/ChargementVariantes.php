<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');
require_once('../Commun/VerificationDroits.php');

verifie_privilege(DROIT_CHARGEMENT);

require_once '../Commun/ConnexionBD.php';
require_once('../Commun/phonex.cls.php');

/*
* Renvoie la chaine ‚quivalente sans accents
* @param string $st_chaine chaine … convertir
*/
function sans_accents($pst_chaine)
{
    $st_chaine = htmlentities($pst_chaine, ENT_NOQUOTES, 'cp1252');
    
    $st_chaine = preg_replace('#&([A-za-z])(?:acute|cedil|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $st_chaine);
    $st_chaine = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $st_chaine); // pour les ligatures e.g. '&oelig;'
    $st_chaine = preg_replace('#&[^;]+;#', '', $st_chaine); // supprime les autres caractères    
    return $st_chaine;
}

/**
 * Renvoie la chaine entre quotes
 * @param string $pst_nom Chaine à convertir
 * @return string Chaine entre quotes
 */ 
function entre_quotes($pst_nom) {
      return "'".addslashes($pst_nom)."'";

}

/**
 * Complète les variantes connues et les renvoie dans le fichier en paramètre
 * @param object $pconnexionBD Connexion à la base
 * @param string $pst_fichier Chemin du fichier à exporter 
 */ 
function complete_variantes_connues($pconnexionBD,$pst_fichier) {
    
    
    $a_patronymes = $pconnexionBD->sql_select("select distinct patronyme from `stats_patronyme` where patronyme REGEXP '^[A-Z \?\(\)]+$' and patronyme not in (select patronyme from `variantes_patro`)");
    $a_groupes_variantes = $pconnexionBD->liste_valeur_par_clef("select patronyme,idf_groupe from `variantes_patro` order by idf_groupe, majeure desc");
    $oPhonex = new phonex;
    $a_phonex_variantes = array();
    $a_variantes_connues = array();
    foreach  ($a_groupes_variantes as $st_patronyme => $i_idf_grp)
    {
       $oPhonex -> build ($st_patronyme);
       $sPhonex = $oPhonex -> sString;
       // A améliorer
       $a_phonex_variantes[$sPhonex] = $st_patronyme;
       if (!array_key_exists($i_idf_grp,$a_variantes_connues))
          $a_variantes_connues[$i_idf_grp] = array();
       $a_variantes_connues[$i_idf_grp][] =$st_patronyme;
    }
      
    $a_nouvelles_variantes = array();
    foreach($a_patronymes as $st_patronyme)
    {
       if (empty($st_patronyme))
          continue;   
       $oPhonex -> build ($st_patronyme);
       $sPhonex = $oPhonex -> sString;
       if (array_key_exists($sPhonex,$a_phonex_variantes))
       {
          $i_idf_grp = $a_groupes_variantes[$a_phonex_variantes[$sPhonex]];
          if (!array_key_exists($i_idf_grp,$a_nouvelles_variantes))
              $a_nouvelles_variantes[$i_idf_grp] = array();          
          $a_nouvelles_variantes[$i_idf_grp][] = $st_patronyme; 
       } 
    }
    $pf = fopen($pst_fichier, "w");
    print ("<div align=center><textarea rows=25 cols=80>");
    foreach ($a_variantes_connues as $i_idf_grp => $a_variantes)
    {
       $st_majeure = array_shift($a_variantes);
       foreach ($a_variantes as $st_patro)
       {
             fwrite($pf,"NIMEGUEV3;H;$st_majeure;$st_patro;\r\n");
       }
       if (array_key_exists($i_idf_grp,$a_nouvelles_variantes))
       {
          $a_vars_nouv=$a_nouvelles_variantes[$i_idf_grp];
          print(sprintf("Ajout de %s à la majeure %s\n",implode('|',$a_vars_nouv),$st_majeure));
          foreach ($a_vars_nouv as $st_patro)
          {
             fwrite($pf,"NIMEGUEV3;H;$st_majeure;$st_patro;\r\n");
          }
       }
    }
    fclose($pf);
    print("</textarea></div>");
}

/**
 * Exporte les variantes au format Nimègue V2
 * @param object $pconnexionBD Connexion à la base
 * @param string $pst_fichier Chemin du fichier à exporter  
 */ 
function exporte_variantes_nimV2($pconnexionBD,$pst_fichier) {
    $a_variantes = $pconnexionBD->groupe_valeurs_par_clef("select idf_groupe, patronyme,majeure from variantes_patro order by idf_groupe,majeure desc");
    $pf = fopen($pst_fichier, "w");
    foreach ($a_variantes as $i_df_groupe => $a_patros)
    {
       // le champ majeur est a 1 pour une majeure
       // il se trouve donc en premier 
       $st_majeure = array_shift($a_patros);
       $a_patros_uniques = array_unique(array_map("sans_accents",$a_patros));
       foreach ($a_patros_uniques as $st_patro)
       {
          if ($st_patro!=$st_majeure)
             fwrite($pf,"$st_majeure;$st_patro\r\n");
       }
    }
    fclose($pf);
}

/**
 * Exporte les variantes au format Nimègue V3
 * @param object $pconnexionBD Connexion à la base
 * @param string $pst_fichier Chemin du fichier à exporter 
 */ 
function exporte_variantes_nimV3($pconnexionBD,$pst_fichier) {
    $a_variantes = $pconnexionBD->groupe_valeurs_par_clef("select idf_groupe, patronyme,majeure from variantes_patro order by idf_groupe,majeure desc");
    $pf = fopen($pst_fichier, "w");
    foreach ($a_variantes as $i_df_groupe => $a_patros)
    {
       // le champ majeur est a 1 pour une majeure
       // il se trouve donc en premier 
       $st_majeure = array_shift($a_patros);
       $a_patros_uniques = array_unique(array_map("sans_accents",$a_patros));
       foreach ($a_patros_uniques as $st_patro)
       {
          if ($st_patro!=$st_majeure)
             fwrite($pf,"NIMEGUEV3;H;$st_majeure;$st_patro;\r\n");
       }
    }
    fclose($pf);
}

/**
 * Affiche le menu de sélection
 * @global $gi_max_taille_upload Maximun de la taille  
 */
function affiche_menu() {
   global $gi_max_taille_upload;
   print('<div class=TITRE>Gestion des variantes</div>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<div align=center><br><input type="hidden" name="mode" value="EXTRAIT_ACCENTS" />');
   print('<input type="submit" value="Calculer les patronymes avec accents"/></div>');
   print('</form>');
   print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id='chargement_variantes'>");
   print('<div align=center><br><input type="hidden" name="MAX_FILE_SIZE" value="$gi_max_taille_upload" >'); 
   print('<input type="hidden" name="mode" value="CHARGEMENT" >');
   print('Fichier: <input name="Variantes" type="file" ><br></div>');
   print('<div align=center><br><input type="submit" value="Charger le fichier Nimegue V3"/></div>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<div align=center><br><input type="hidden" name="mode" value="EXPORT_NIMV3" >');
   print('<input type="submit" value="Exporter au format Nimegue V3"></div>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<div align=center><br><input type="hidden" name="mode" value="EXPORT_NIMV2" >');
   print('<input type="submit" value="Exporter au format Nimegue V2"></div>');
   print('</form>');
   print("<form  id='suppression_variantes' action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<div align=center><br><input type="hidden" name="mode" value="SUPPRESSION" />');
   print('<input type="submit" value="Supprimer les variantes"/></div>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<div align=center><br><input type="hidden" name="mode" value="COMPLETE_VARIANTES" />');
   print('<input type="submit" value="Completer les variantes connues"/></div>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<div align=center><br><input type="hidden" name="mode" value="CALCUL_PHONEX" />');
   print('<input type="submit" value="(Re)Calculer les Phonex"/></div>');
   print('</form>');
}  

/**
 * Charge les variantes de Nimègue V3 issues du fichier téléchargé
 * @param object $pconnexionBD Connexion à la base 
 */ 
function extrait_patro_accents($pconnexionBD)
{
   $pconnexionBD->execute_requete("truncate table patro_accent");
   $pconnexionBD->execute_requete("insert into `patro_accent` SELECT DISTINCT patronyme FROM `stats_patronyme` WHERE patronyme NOT REGEXP '^[A-Z ]+$' AND left( patronyme, 1 ) IN (
'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P','Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z') and  patronyme not like '%\.%'and patronyme not like '%?%'");
}

/**
 * Charge les variantes de Nimègue V3 issues du fichier téléchargé
 * @param object $pconnexionBD Connexion à la base 
 * @param string $pst_rep_tmp répertoire temporaire où est stocké le fichier avant chargement en base
 * @param string $pst_parametre_load_data Paramètres du Load Data 
 */ 
function charge_variantes_NimV3($pconnexionBD,$pst_rep_tmp,$pst_parametre_load_data)
{
   $st_fich_dest = tempnam($pst_rep_tmp,"var_dest");
   if (!move_uploaded_file($_FILES['Variantes']['tmp_name'],$st_fich_dest)) 
   {
      print("<div CLASS=IMPORTANT>Erreur de t&eacute;l&eacute;chargement :</div><br>");
      switch($_FILES['Variantes']['error'])
      { 
           case 2 : print("Fichier trop gros par rapport à MAX_FILE_SIZE");break;
           default : print("Erreur inconnue");print_r($_FILES);
      }
      exit;
   }
   
   $i_temps_courant = time();   
   $pf=fopen($st_fich_dest,"r") or die("Impossible de lire $st_fich_dest\n");
   // initialisation de la première variable
   $i_idf_groupe =0;
   $st_prev_majeure = '';
   $a_groupes_patros = array();
   $a_patros_courants = array();
   if (!feof($pf))
   {
      $st_ligne           = fgets($pf);
      list($st_nimv3,$st_homon,$st_majeure,$st_variante,$st_ajeter) = split(';',$st_ligne);
      $st_prev_majeure=$st_majeure;
      $a_groupes_patros[$st_majeure]=array($i_idf_groupe,1);
      $a_groupes_patros[$st_variante]=array($i_idf_groupe,0);
      $a_patros_courants[] = $st_variante;
   }
   while (!feof($pf))
   {      
      $st_ligne           = fgets($pf);
      if (preg_match("/^[ ]*$/",$st_ligne)) continue;
      list($st_nimv3,$st_homon,$st_majeure,$st_variante,$st_ajeter) = split(';',$st_ligne);
      if ($st_prev_majeure!=$st_majeure)
      {
         if (count($a_patros_courants)>0)
         {
            // on change de majeure => on cherche les patronymes avec accents correspondant … toutes les variantes de la majeure en cours
            $st_variantes=join(',',array_map("entre_quotes",$a_patros_courants)); 
            $st_requete = "select nom from `patro_accent` where nom  COLLATE latin1_swedish_ci in ($st_variantes) ";
            //print("Req=$st_requete<br>");
            $a_patros_accent = $pconnexionBD->sql_select($st_requete);         
            foreach ($a_patros_accent as $st_patro_accent)
            {
              $a_groupes_patros[$st_patro_accent]=array($i_idf_groupe,0);                  
            }
            $a_patros_courants=array();
         }          
         $i_idf_groupe++;
         $st_prev_majeure=$st_majeure;
         $a_groupes_patros[$st_majeure]=array($i_idf_groupe,1);
         $a_patros_courants[] = $st_majeure;          
      }
      $a_groupes_patros[$st_variante]=array($i_idf_groupe,0);
      $a_patros_courants[] = $st_variante;        
   }   
   fclose($pf);
   // calcul des variantes pour les patronymes en cours
   if (count($a_patros_courants)>0)
   {
      $st_variantes=join(',',array_map("entre_quotes",$a_patros_courants)); 
      $st_requete = "select nom from `patro_accent` where nom COLLATE latin1_swedish_ci in ($st_variantes)";
      $a_patros_accent = $pconnexionBD->sql_select($st_requete);         
      foreach ($a_patros_accent as $st_patro_accent)
      {
         $a_groupes_patros[$st_patro_accent]=array($i_idf_groupe,0);                  
      }
      $a_patros_courants=array();
   }
   $st_fich_chargement = tempnam($pst_rep_tmp,"var_chgt");
   $pf=fopen($st_fich_chargement,"w") or die("Impossible d'ecrire $st_fich_chargement\n");
   foreach ($a_groupes_patros as $st_patronyme  => $a_valeurs)
   {
      list($i_idf_groupe,$b_majeure) = $a_valeurs;
      fwrite($pf,"$i_idf_groupe;$st_patronyme;$b_majeure\n");
   }
   fclose($pf);
   /*
   print("<pre>");
   readfile($st_fich_chargement);
   print("</pre>");
   */
   $st_fich_chargement=addslashes($st_fich_chargement);
   usleep(500000);
   chmod($st_fich_chargement,0444);
   usleep(500000);
   $st_requete = "load data $pst_parametre_load_data infile '$st_fich_chargement' into table variantes_patro fields terminated by ';' lines terminated by '\n' (idf_groupe,patronyme,majeure)";
   print("Req=$st_requete<br>");
   $pconnexionBD->execute_requete($st_requete);
   print("<div align=center>Dur&eacute;e: ".(time()-$i_temps_courant)." s</div><br>");
   unlink($st_fich_chargement); 
   unlink($st_fich_dest); 
   print('<div align=center>Chargement effectu&eacute;</div><br>');
   print('<div align=center></div><br>');
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="FORMULAIRE" />');
   print('<div align=center><input type="submit" value="RETOUR"/></div>');    
 }
 
/**
 * Calcule les phonex de tous les patronymes commençant par une lettre ou une parenthese
 * @param object $pconnexionBD Connexion à la base 
 * @param string $pst_rep_tmp répertoire temporaire où est stocké le fichier avant chargement en base
  * @global string $gst_jeu_de_caracteres_par_defaut jeu de caractères par défaut
 */
function calcule_phonex($pconnexionBD,$pst_rep_tmp,$pst_parametres_load_data) {
    global $gst_jeu_de_caracteres_par_defaut;
    $ga_patronymes = $pconnexionBD->sql_select("select distinct patronyme from `stats_patronyme` where patronyme not in (select patronyme from `variantes_patro`)");    
    $st_fich_temp = tempnam ($pst_rep_tmp, "phonex.csv");
    $pf=@fopen($st_fich_temp,"w");
    if ($pf===FALSE)
       die("Ecriture fichier phonex.csv impossible");
    $oPhonex = new phonex;
    foreach($ga_patronymes as $st_patronyme)
    {
       if (empty($st_patronyme))
          continue;   
       $oPhonex -> build ($st_patronyme);
       $sPhonex = trim($oPhonex -> sString);
       fwrite($pf,"$st_patronyme;$sPhonex\n");
    }
    fclose($pf);
    usleep(500000);
    chmod($st_fich_temp,0444);
    $st_requete="truncate table `phonex_patro`";
    try
    {
      $pconnexionBD->execute_requete($st_requete);
    }
    catch (Exception $e) {
       unlink($st_fich_temp);
       die('Suppression phonex impossible: ' . $e->getMessage());
    }   
    $st_fich_temp=addslashes($st_fich_temp);
    $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `phonex_patro` CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY ';' LINES TERMINATED BY '\n' (patronyme,phonex)";
     try
     {
       $pconnexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Calcul phonex impossible: ' . $e->getMessage());
     }   
     unlink($st_fich_temp);    
}    

//------------------------------------------------------------------------------
// Corps du programme
//------------------------------------------------------------------------------

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
?>
<script type="text/javascript">

$(document).ready(function() {  
  $("#chargement_variantes").validate({
	 rules: {
     Variantes: {
        required: true,
        extension: "csv|txt"
      }
    },  
	 messages: {
	  Variantes: {
			required: "Un fichier doit être choisi",
			extension: "Le fichier doit être du type csv ou txt"
		}
	},
  submitHandler: function(form) {
    if (confirm('Etes-vous sûr de recharger les variantes ?'))
    {
			 form.submit();
    }
    }       
  });
  
  $('#suppression_variantes').submit(function() {
    var c = confirm("Etes-vous sur de supprimer les variantes ?");
    return c; 
  });
   
});
</script>
<?php
print("<title>Gestion des variantes</title>");
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
   
   case 'EXTRAIT_ACCENTS' :
       $i_temps_courant = time();
       extrait_patro_accents($connexionBD);
       print("<div align=center><br>Dur&eacute;e: ".(time()-$i_temps_courant)." s<br></div>");
       print("<div align=center><br>Calcul termin&eacute;<br></div>");
       affiche_menu();       
   break;
   
   case 'CHARGEMENT' :
       charge_variantes_NimV3($connexionBD,$gst_repertoire_chargement_actes,$gst_parametres_load_data);
  
   break;
   
   case 'EXPORT_NIMV3':
       $st_export_nimv3 = "$gst_repertoire_telechargement/ExportNimV3.csv";
       exporte_variantes_nimV3($connexionBD,$st_export_nimv3);
       print("<div align=center><br>Export cr&eacute;e: <a href=\"./telechargements/ExportNimV3.csv\">Variantes Nimègue V3</a><br></div>");
       affiche_menu();       
   break;
   
   case 'EXPORT_NIMV2':
       $st_export_nimv2 = "$gst_repertoire_telechargement/ExportNimV2.csv";
       exporte_variantes_nimV2($connexionBD,$st_export_nimv2);
       print("<div align=center><br>Export cr&eacute;e: <a href=\"./telechargements/ExportNimV2.csv\">Variantes Nimègue V2</a><br></div>");
       affiche_menu();       
   break;
   
   case 'SUPPRESSION':
       $connexionBD->execute_requete("truncate variantes_patro");
       print("<div class=IMPORTANT>Variantes supprim&eacute;es</div>");
       affiche_menu();
   break;
      
   case 'COMPLETE_VARIANTES';
       $st_variantes_nimv3 = "$gst_repertoire_telechargement/VariantesCompleteesNimV3.csv";
       $i_temps_courant = time();
       complete_variantes_connues($connexionBD,$st_variantes_nimv3);
       $zip = new ZipArchive();
     $st_chemin_zip="$gst_repertoire_telechargement/VariantesCompleteesNimV3.zip";
     if (file_exists($st_chemin_zip)) unlink($st_chemin_zip);
     if ($zip->open($st_chemin_zip, ZIPARCHIVE::CREATE)!==TRUE) {
        exit("Impossible d'ecrire <$st_chemin_zip>\n");
     }
     $zip->addFile($st_variantes_nimv3,"VariantesNimegue.txt");
     $zip->close();
       
       print("<div align=center>Dur&eacute;e: ".(time()-$i_temps_courant)." s</div><br>");
       print("<div align=center>Export cr&eacute;e: <a href=\"./telechargements/VariantesCompleteesNimV3.zip\">Variantes Nimègue Complétées V3</a></div><br>");
              print('<div align=center></div><br>');
       print('</form>');
       print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
       print('<input type="hidden" name="mode" value="FORMULAIRE" />');
       print('<div align=center><input type="submit" value="RETOUR"/></div>');
       
   break;
   
   case 'CALCUL_PHONEX':
       calcule_phonex($connexionBD,$gst_repertoire_chargement_actes,$gst_parametres_load_data);
       print("<div class=IMPORTANT>Phonex calcul&eacute;s</div>");
       affiche_menu();
   break;
        
}


print('</body></html>');


?>
