<?php

require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_VARIANTES);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/phonex.cls.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Ajout/modification des variantes</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
?>
function VerifieAjouter(Formulaire)
{
   var ListeErreurs	= "";
   var majeure	= document.forms[Formulaire].majeure.value;
   var variantes	= document.forms[Formulaire].variantes.value;

   if (majeure=="")
   {
      ListeErreurs+="Une majeure doit etre obligatoirement saisie\n";
   }
   if (variantes=="")
   {
      ListeErreurs+="Les variantes sont vides\n";
   }
   if (ListeErreurs!= "")
   {
      alert(ListeErreurs);
      return false;
   }
}

function VerifieModifier(Formulaire)
{
   var variantes	= document.forms[Formulaire].variantes.value;
   if (variantes=="")
   {
      alert("Les variantes sont vides\n");
      return false;
   }
}
function VerifieCheckboxes(Formulaire,IdfElement)
{
  var chaine="";
  if (document.forms[Formulaire].elements[IdfElement].checked)
	{
		  chaine+=ocument.forms[Formulaire].elements[IdfElement].value;
	}
	else
	{
    for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
    {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)
      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }
      
    }
  }
  if (chaine=="")
  {
     alert("Pas de patronyme selectionne");
     return false;
  }
  else
  {                                                                                                                                   
     return true;                                                           
  }
}

function EnvoieCompleter(Formulaire)
{
   document.forms[Formulaire].mode.value='selection_completer';
   document.forms[Formulaire].submit();
}

function EnvoieModifier(Formulaire)
{
   document.forms[Formulaire].mode.value='modifier_variante';
   document.forms[Formulaire].submit();
}

function RafraichitFusion(Formulaire)
{
   document.forms[Formulaire].mode.value = "menu_fusionner";
   document.forms[Formulaire].submit();
}

function ConfirmeFusionner(Formulaire)
{
   var idf_majeure_src = document.forms[Formulaire].majeure_src.selectedIndex;
   var majeure_src = document.forms[Formulaire].majeure_src.options[idf_majeure_src].text; 
   var idf_majeure_dst = document.forms[Formulaire].majeure_dst.selectedIndex;
   var majeure_dst = document.forms[Formulaire].majeure_dst.options[idf_majeure_dst].text; 
   if (window.confirm("Souhaitez-vous FUSIONNER la majeure "+majeure_src+" avec la majeure "+majeure_dst+" ?\n" ))
   {
      document.forms[Formulaire].mode.value='fusionner';
       document.forms[Formulaire].submit();
   }
}

<?php
print("</script>");
print('</head>');

/**
 * Calcule les variantes restantes et les renvoie dans le fichier
 * @param object $pconnexionBD Connexion à la base
 * @param string $pst_fichier Chemin du fichier à exporter 
 */ 
function calcule_variantes_restantes($pconnexionBD,$pst_fichier) {
    //$ga_patronymes = $pconnexionBD->sql_select("select distinct patronyme from `stats_patronyme` where patronyme REGEXP '^[A-Z ]+$' and patronyme not in (select patronyme from `variantes_patro`)");
    $ga_patronymes = $pconnexionBD->sql_select("select distinct patronyme from `stats_patronyme` where patronyme REGEXP '^[A-Z \?\(\)]+$' and patronyme not in (select patronyme from `variantes_patro`)");
    
    $gh_variantes = array();
    //$soundex2 = new soundex2;
    $oPhonex = new phonex;
    foreach($ga_patronymes as $st_patronyme)
    {
       if (empty($st_patronyme))
          continue;   
       /*
       $soundex2 -> build ($st_patronyme);
       $st_soundex = $soundex2 -> sString;
       */
       $oPhonex -> build ($st_patronyme);
       $sPhonex = $oPhonex -> sString;
       if (array_key_exists($sPhonex,$gh_variantes))
       {
          $a_variantes = $gh_variantes{$sPhonex};
          $a_variantes[] = $st_patronyme;
          $gh_variantes{$sPhonex} = $a_variantes;
       }
       else
          $gh_variantes{$sPhonex} = array($st_patronyme);   
    }
    $pf = fopen($pst_fichier, "w");
    if ($pf===false)
    {
      die("Impossible d'écrire le fichier: $pst_fichier\n");
    }
    foreach ($gh_variantes as $st_soundex => $a_variantes)
    {
       if (count($a_variantes)>1)
       {
          $st_majeure = array_shift($a_variantes);
          foreach ($a_variantes as $st_patro)
          {
             fwrite($pf,"NIMEGUEV3;H;$st_majeure;$st_patro;\r\n");
          }
       }
    }
    fclose($pf);
}

/**
 * Affiche le menu formulaire
 */ 
function affiche_menu() {
  global $connexionBD;
  $st_requete = "SELECT count( DISTINCT patronyme )
FROM `stats_patronyme`";
  $i_nb_patros = $connexionBD->sql_select1($st_requete);
  $st_requete = "SELECT count( * )
FROM `variantes_patro`";
  $i_nb_variantes = $connexionBD->sql_select1($st_requete);
  print("<div align=center>");
  print(sprintf("<div class=TITRE> %d variantes pour %d patronymes (%.2f %%)</div><br>",$i_nb_variantes,$i_nb_patros,$i_nb_variantes/$i_nb_patros*100));
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
  print("<div align=center><input type=hidden name=mode value=\"verifier\">");
  print("<br><input type=submit value=\"Verifier l'existence de la variante suivante:\"> <input type=text name=variante value=\"\" maxlength=30><br></div>");
  print("</form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
  print("<div align=center><input type=hidden name=mode value=\"menu_ajouter\">");
  print("<br><input type=submit value=\"Ajouter une nouvelle variante\"><br></div>");
  print("</form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
  print("<div align=center><input type=hidden name=mode value=\"menu_modifier\">");
  print("<br><input type=submit value=\"Completer/modifier une majeure existante\"><br></div>");
  print("</form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
  print("<div align=center><input type=hidden name=mode value=\"menu_fusionner\">");
  print("<br><input type=submit value=\"Fusionner deux majeures\"><br></div>");
  print("</form>");
  print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  print('<div align=center><br><input type="hidden" name="mode" value="variantes_restantes" >');
  print('<input type="submit" value="Calculer les variantes restantes"></div>');
  print('</form>');

  print("</div>");
  
}

/**
 * Affiche le menu d'ajout d'une nouvelle variante
 */ 
function affiche_menu_ajouter() {
  print("<div align=center>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post onSubmit=\"return VerifieAjouter(0)\">");
  print("<div><input type=hidden name=mode value=ajouter>");
  print("Majeure:<input type=text name=majeure value=\"\" size=30></div>");
  print("<div><br>Variantes (une par ligne): <br><textarea name=variantes rows=15 cols=31></textarea><br>");
  print("<br><input type=submit value=Ajouter></div>");
  print("</form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\">");
  print("<div align=center><input type=hidden name=mode value=menu>");
  print("<br><input type=submit value=\"Retour au menu variantes\"></div>");
  print("</form>");
  print("</div>");
}

/**
 * Affiche le menu pour completer d'une variante existente
 * @param string $pc_init_cour initiale choisie 
 * @param integer  $pi_idf_groupe identifiant du groupe
 * @global $connexionBD Identifiant de la connexion à la BD 
 */ 
function affiche_menu_modifier($pc_init_cour,$pi_idf_groupe) {
  global $connexionBD;
  $st_requete = "SELECT DISTINCT (left( patronyme, 1 )) AS init FROM `variantes_patro` having init in ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z') ORDER BY init";
  $a_initiales_patronymes = $connexionBD->sql_select($st_requete);
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
  print("<div align=center><input type=hidden name=mode value=\"selection_completer\">");
  foreach ($a_initiales_patronymes as $c_initiale)
  {
     print("<a href=\"".$_SERVER['PHP_SELF']."?mode=menu_modifier&amp;init=$c_initiale\">$c_initiale</a> ");     
  }
  print("<br>");
  if (is_null($pc_init_cour)) $pc_init_cour=$a_initiales_patronymes[0];
  $st_requete = "SELECT idf_groupe,patronyme FROM `variantes_patro` where majeure=1 and patronyme like '$pc_init_cour%' ORDER BY patronyme";
  $a_majeures = $connexionBD->liste_valeur_par_clef($st_requete);
  print("<br><select name=idf_groupe>");
  foreach ($a_majeures as $i_idf_groupe => $st_majeure)
  {
     if (!empty($pi_idf_groupe) && ($pi_idf_groupe==$i_idf_groupe))
        print("<option value=\"$i_idf_groupe\" selected=\"selected\">$st_majeure</option>");
     else
        print("<option value=\"$i_idf_groupe\">$st_majeure</option>");
  }
  print("</select><br>");
  print("<div><br><input type=button value=\"Completer phonetiquement le groupe choisi\" onClick=\"EnvoieCompleter(0)\"></div>");
  print("<div><br><input type=button value=\"Modifier le groupe choisi\" onClick=\"EnvoieModifier(0)\"></div>");
  print("<br></div></form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\">");
  print("<div align=center><input type=hidden name=mode value=menu>");
  print("<br><input type=submit value=\"Retour au menu variantes\"></div>");
  print("</form>");
}

/*
 * Affiche le menu de s‚lection des variantes commpl‚t‚es possibles
 * @param integer $pi_idf_groupe identifiant du groupe … completer
 * @global $connexionBD Identifiant de la connexion à la BD  
*/
function affiche_selection_completer($pi_idf_groupe)
{
    global $connexionBD;
    $a_patronymes = $connexionBD->sql_select("select distinct patronyme from `stats_patronyme` where patronyme REGEXP '^[A-Z \?\(\)]+$' and patronyme not in (select patronyme from `variantes_patro`)");
    $a_groupes_variantes = $connexionBD->liste_valeur_par_clef("select patronyme,majeure from `variantes_patro` where idf_groupe = $pi_idf_groupe");
    $oPhonex = new phonex;
    $a_phonex_variantes = array();
    $a_variantes_connues = array();
    $a_code_phonex = array();
    $st_majeure = '';
    $st_variantes_courantes = '';
    foreach ($a_groupes_variantes as $st_patronyme => $st_majeure_courante)
    {
       $oPhonex -> build ($st_patronyme);
       $sPhonex = $oPhonex -> sString;
       $a_code_phonex[] = $sPhonex;
       if ($st_majeure_courante==1) 
          $st_majeure=$st_patronyme;
       else
          $st_variantes_courantes .= "$st_patronyme\n";   
    }
    $st_liste_phonex = join(',',$a_code_phonex);
    $st_requete = "select patronyme from phonex_patro where patronyme not in (select patronyme from `variantes_patro`) and phonex in ($st_liste_phonex)";
    //print("Req=$st_requete<br>");
    $a_variantes_ajouter = $connexionBD->sql_select($st_requete);
    print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post onSubmit=\"return VerifieCheckboxes(0,'variantes[]')\">");
    print("<div align=center>");
    
    print("Majeure: $st_majeure<div><br>Variantes actuelles: <br>");
    print("<textarea disabled rows=8 cols=40>$st_variantes_courantes</textarea><br>");
    print("<input type=hidden name=mode value=completer>");
    print("<input type=hidden name=idf_groupe value=$pi_idf_groupe></div>");
    if (count($a_variantes_ajouter)>0)
    {
       print("<br>Nouvelles variantes propos&eacute;es: <br>");
       print("<table border=1>");
       foreach ($a_variantes_ajouter as $st_patronyme)
       {
         print("<tr><td>$st_patronyme</td><td> <input type=checkbox name=\"variantes[]\"  value=\"$st_patronyme\"></td></tr>");
       }
       print("</table>");
       print("<br><input type=submit value=\"Completer\">");
    }
    else
    {
       print("Pas de variantes trouv&eacute;es qui ne sont pas d&eacute;j&agrave; connues");
    }    
    print("<br></div></form>");
    print("<form action=\"".$_SERVER['PHP_SELF']."\">");
    print("<div align=center><br>");
    print("<input type=hidden name=mode value=\"menu_modifier\">");
    $c_init=substr($st_majeure,0,1);
    print("<input type=hidden name=init value=$c_init>");
    print("<input type=submit value=\"Retour au menu Modifier variantes\">");
    print("</div>");
    print("</form>");
}

/*
* Traite l'ajout d'une variante
* @param string $pst_majeure Majeure … cr‚er
* @param string $pst_variantes Liste des variantes associées à la majeure (séparée par des retours chariots)
* @global $connexionBD Identifiant de la connexion à la BD
*/
function ajouter($pst_majeure,$pst_variantes)
{
   global $connexionBD;
   $st_majeure = strtoupper
(stripslashes(trim($pst_majeure)));
   $a_variantes = array_unique(array_map('trim',explode("\n",$pst_variantes)));
   print("<div align=center>");
   
   $connexionBD->initialise_params(array(':majeure'=>$pst_majeure));
   $i_nb_majeures =$connexionBD->sql_select1("select count(*) from variantes_patro where patronyme = :majeure collate latin1_general_ci");   
   if ($i_nb_majeures>0)
   {
      print("<div class=ERREUR>La majeure $st_majeure est d&eacute;j&agrave; pr&eacute;sente dans les variantes</div><br>");
   }
   else
   {
      $a_variantes_a_ajouter =array();
      $a_variantes_ajoutees  = array();
      $i_groupe_courant =$connexionBD->sql_select1("select max(idf_groupe)+1 from variantes_patro");      
      if (empty($i_groupe_courant)) $i_groupe_courant=0;
      $connexionBD->initialise_params(array(':majeure'=>$pst_majeure));
      $st_variantes_a_ajouter = "values(:majeure,$i_groupe_courant,1)";
      $i=0;      
      foreach($a_variantes as $st_variante)
      {
        $st_variante=strtoupper(stripslashes($st_variante));
        if ($st_variante=="") continue;
        $a_params_precedents=$connexionBD->params();
         $connexionBD->initialise_params(array(':variante'=>$st_variante));
        list($i_nb_variantes,$st_majeure_variante) =$connexionBD->sql_select_liste("select count(*),vp2.patronyme from variantes_patro vp1 join variantes_patro vp2 on (vp1.idf_groupe=vp2.idf_groupe) where vp2.majeure=1 and vp1.patronyme = :variante collate latin1_german1_ci");
        $connexionBD->initialise_params($a_params_precedents);
        if ($i_nb_variantes>0) 
          print("Variante $st_variante d&eacute;j&agrave; r&eacute;f&eacute;renc&eacute;e sous la majeure $st_majeure_variante. Elle ne sera pas ajout&eacute;e<br>"); 
        else
        {
          $connexionBD->ajoute_params(array(":variante$i"=>$st_variante));
          $st_variantes_a_ajouter.= ",(:variante$i,$i_groupe_courant,0)";        
          $a_variantes_ajoutees[]=$st_variante;
          $i++; 
        }
      }
      $st_requete = "insert into variantes_patro(patronyme,idf_groupe,majeure) $st_variantes_a_ajouter";
      //
      print("Requete=$st_requete<br>");
      $connexionBD->execute_requete($st_requete);
      
      $st_variantes_ajoutees = join(',',$a_variantes_ajoutees);
      print("<div align=\"center\" class=\"IMPORTANT\">Variantes ajout&eacute;es: $st_variantes_ajoutees</div><br>");
      affiche_selection_completer($i_groupe_courant);
      
   }    
   print("<form action=\"".$_SERVER['PHP_SELF']."\">");
   print("<input type=hidden name=mode value=menu>");
   print("<input type=submit value=\"Retour au menu variantes\">");
   print("</form>");
   print("</div>");
   print("</div>");
}

/*
* Traite la modification d'une variante
* @param string $pst_majeure Majeure à créer
* @param string $pst_variantes Liste des variantes associées à la majeure (séparée par des retours chariots)
* @global $connexionBD Identifiant de la connexion à la BD
*/
function modifier($pi_idf_groupe,$pst_variantes)
{
   global $connexionBD;
   $st_requete = "delete from  variantes_patro where idf_groupe=$pi_idf_groupe and majeure=0";
   $connexionBD->execute_requete($st_requete);
   $a_variantes = array_unique(array_map('trim',explode("\n",$pst_variantes)));
   print("<div align=center>");
   $a_variantes_a_ajouter =array();
   $a_variantes_ajoutees = array();
   $i=0;
   foreach($a_variantes as $st_variante)
   {
     $st_variante=strtoupper($st_variante);
     if ($st_variante=="") continue;
     $a_params_precedents=$connexionBD->params();
     $connexionBD->initialise_params(array(':variante'=>$st_variante));
     list($i_nb_variantes,$st_majeure_variante) =$connexionBD->sql_select_liste("select count(*),vp2.patronyme from variantes_patro vp1 join variantes_patro vp2 on (vp1.idf_groupe=vp2.idf_groupe) where vp2.majeure=1 and vp1.patronyme = :variante collate latin1_general_ci");
     $connexionBD->initialise_params($a_params_precedents);
     if ($i_nb_variantes>0) 
        print("Variante $st_variante d&eacute;j&agrave; r&eacute;f&eacute;renc&eacute;e sous la majeure $st_majeure_variante. Elle ne sera pas ajout&eacute;e<br>"); 
     else
     {
       $connexionBD->ajoute_params(array(":variante$i"=>$st_variante));
       $a_variantes_a_ajouter[] = "(:variante$i,$pi_idf_groupe,0)";        
       $a_variantes_ajoutees[]=$st_variante;
       $i++;
     }
   }
   if (count($a_variantes_a_ajouter)>0)
   {
      $st_variantes_a_ajouter=join(',',$a_variantes_a_ajouter);
      $st_requete = "insert into variantes_patro(patronyme,idf_groupe,majeure) values $st_variantes_a_ajouter";
      //print("Requete=$st_requete<br>");
      $connexionBD->execute_requete($st_requete);      
      print("<div align=\"center\" class=\"IMPORTANT\">Variantes ajout&eacute;es: ".join(',',$a_variantes_ajoutees)."</div><br>");            
   }
   else
      print("<div>Rien n'a &eacute;t&eacute; ajout&eacute;</div>");
   print("</div>");
}


/*
* Traite l'ajout d'une variante
* @param integer $pi_idf_groupe identifiant du groupe
* @param array $pa_variantes liste des variantes … ajouter
* @global $connexionBD Identifiant de la connexion … la BD
*/
function completer($pi_idf_groupe,$pa_variantes)
{
   global $connexionBD;
   $a_variantes_a_ajouter = array();
   $i=0;
   foreach ($pa_variantes as $st_variante)
   {
      $st_variante=strtoupper(stripslashes($st_variante));
      $connexionBD->ajoute_params(array(":variante$i"=>$st_variante));
      $a_variantes_a_ajouter[] = "(:variante$i,$pi_idf_groupe,0)";
      $i++;      
   }
   $st_variantes_a_ajouter = join(',',$a_variantes_a_ajouter);   
   $st_requete = "insert into variantes_patro(patronyme,idf_groupe,majeure) values$st_variantes_a_ajouter";
   //print("Req=$st_requete<br>");
   $connexionBD->execute_requete($st_requete);
   print("<div align=\"center\" class=\"IMPORTANT\">Variantes ajout&eacute;es: ".join(',',$pa_variantes)."</div><br>");
}


/**
 * Affiche le menu de modification d'une variante existente
* @param integer $pi_idf_groupe identifiant du groupe
* @global $connexionBD Identifiant de la connexion à la BD
*/ 
function affiche_modifier_variante($pi_idf_groupe) {
  global $connexionBD;
  $a_variantes= $connexionBD->liste_valeur_par_clef("select patronyme,majeure from variantes_patro where idf_groupe=$pi_idf_groupe order by patronyme");
  $st_majeure = '';
  $st_variantes = '';
  foreach($a_variantes as $st_variante => $st_est_majeure) 
  {
     if ($st_est_majeure==1)
     {
        $st_majeure=$st_variante;
        $c_init=substr($st_majeure,0,1);
     }
     else
     {
         $st_variantes .= "$st_variante\n";
     }    
  }
  
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post onSubmit=\"return VerifieModifier(0)\">");
  print("<div align=center><input type=hidden name=mode value=modifier>");
  print("<input type=hidden name=idf_groupe value=$pi_idf_groupe>");
  print("Majeure: $st_majeure <br>");
  print("<br>Variantes (une par ligne): <br><textarea name=variantes rows=15 cols=40>$st_variantes</textarea><br>");
  print("<br><input type=submit value=Modifier>");
  print("</div></form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\">");
  print("<div align=center><br><input type=hidden name=mode value=menu_modifier>");
  
  print("<input type=hidden name=init value=$c_init>");
  print("<input type=submit value=\"Retour au menu Modifier variantes\"></div>");
  print("</form>");
}

/**
 * Affiche le menu pour fusionner deux variantes
 * @param string $pc_init_src initiale source de la majeure à fusionner
 * @param string $pc_init_dst initiale destination de la majeure à fusionner 
 * @param integer $pi_majeure_src identifiant de la majeure source 
 * @param integer $pi_majeure_dst identifiant de la majeure destination 
 * @global $connexionBD Identifiant de la connexion à la BD 
 */ 
function affiche_menu_fusionner($pc_init_src,$pc_init_dst,$pi_majeure_src,$pi_majeure_dst) {
  global $connexionBD;
  
  $st_requete = "SELECT DISTINCT (left( patronyme, 1 )) AS init FROM `variantes_patro` having init in ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z') ORDER BY init";
  $a_initiales_patronymes = $connexionBD->sql_select($st_requete);
  $pc_init_src = empty($pc_init_src) ? $a_initiales_patronymes[0]: $pc_init_src ;
  $pc_init_ = empty($pc_init_dst) ? $a_initiales_patronymes[0]: $pc_init_dst ;  
  $i_majeure_src = empty($pi_majeure_src) ? '' : $pi_majeure_src;
  $i_majeure_dst = empty($pi_majeure_dst) ? '' : $pi_majeure_dst;
  print("<form action=\"".$_SERVER['PHP_SELF']."\" method=post>");
  print("<div class=\"gauche\"><input type=hidden name=mode value=fusionner>");
  
  print("Majeure source:<br>");
  print("<div><select name=\"init_src\" onChange=\"javascript:RafraichitFusion(0)\">");
  print(chaine_select_options_simple($pc_init_src,$a_initiales_patronymes));
  print("</select><br></div>");
  $a_majeures_src = $connexionBD->liste_valeur_par_clef("select idf_groupe,patronyme from `variantes_patro` where majeure=1 and patronyme like '$pc_init_src%' order by patronyme");
  print("<div><select name=\"majeure_src\">");
  print(chaine_select_options($i_majeure_src,$a_majeures_src)); 
  print("</select></div>"); 
  print("</div>");
  print("<div class=\"droite\">");
  print("Majeure destination:<br>");
  print("<div><select name=\"init_dst\" onChange=\"javascript:RafraichitFusion(0)\">");
  print(chaine_select_options_simple($pc_init_dst,$a_initiales_patronymes));
  print("</select><br></div>");
  $a_majeures_dst = $connexionBD->liste_valeur_par_clef("select idf_groupe,patronyme from `variantes_patro` where majeure=1 and patronyme like '$pc_init_dst%' order by patronyme");
  print("<div><select name=\"majeure_dst\">");
  print(chaine_select_options($i_majeure_dst,$a_majeures_dst)); 
  print("</select></div>"); 
  print("</div>");
  
  print("<div align=center>");
  print("<input type=button value=\"Fusionner les deux variantes\" onClick=\"ConfirmeFusionner(0)\">");
  print("</form>");
  print("<form action=\"".$_SERVER['PHP_SELF']."\">");
  print("<div align=center><input type=hidden name=mode value=\"menu\">");
  print("<br><input type=submit value=\"Retour au menu variantes\"></div>");
  print("</form></div>");
}

/*
* Fusionne deux majeures. La majeure source disparait au profit de la majeure destination
* @param integer $pi_idf_majeure_src identifiant de la majeure source
* @param integer $pi_idf_majeure_dst identifiant de la majeure destination
* @global $connexionBD Identifiant de la connexion à la BD
*/
function fusionner($pi_idf_majeure_src,$pi_idf_majeure_dst)
{
   global $connexionBD;
   $st_requete = "update `variantes_patro` set idf_groupe=$pi_idf_majeure_dst,majeure=0 where idf_groupe=$pi_idf_majeure_src";
   //print("Req=$st_requete<br>");
   $connexionBD->execute_requete($st_requete);
}   

/*
* Fusionne deux majeures. La majeure source disparait au profit de la majeure destination
* @param integer $pi_idf_majeure_src identifiant de la majeure source
* @param integer $pi_idf_majeure_dst identifiant de la majeure destination
* @global $connexionBD Identifiant de la connexion à la BD
*/
function verifier($pst_variante)
{
   global $connexionBD;
   if ($pst_variante!='')
   {
      $connexionBD->ajoute_params(array(":variante"=>$pst_variante));
      $st_requete = "SELECT count(*),vp2.patronyme as majeure,vp2.idf_groupe FROM `variantes_patro` vp1 join `variantes_patro` vp2 on (vp2.idf_groupe=vp1.idf_groupe) where vp1.patronyme =:variante and vp2.majeure=1";
      list($i_nb_reponses,$st_majeure,$i_idf_groupe) = $connexionBD->sql_select_liste($st_requete);
      if ($i_nb_reponses==0)
      {
          print("<div align=center>La variante $pst_variante n'est pas r&eacute;f&eacute;renc&eacute;e </div>");
      }
      else
      {
          print("<div align=center>La variante $pst_variante est r&eacute;f&eacute;renc&eacute;e sous la majeure : <a href=\"".$_SERVER['PHP_SELF']."?mode=modifier_variante&amp;idf_groupe=$i_idf_groupe\">$st_majeure</a><br></div>");
      }
      
   }
   else
   {
      print("<div align=center class=IMPORTANT>La variante est vide</div>");
   }

}   

/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

print("<body>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gst_get_mode = empty($_GET['mode']) ? 'menu' : $_GET['mode'];
$gst_mode = empty($_POST['mode']) ? $gst_get_mode : $_POST['mode'];

$gc_get_init_cour = empty($_GET['init']) ? null : $_GET['init'];;
$gc_init_cour = empty($_POST['init']) ? $gc_get_init_cour : $_POST['init'];

$gi_get_idf_groupe = isset($_GET['idf_groupe']) ?  $_GET['idf_groupe'] : '' ;
$gi_idf_groupe = isset($_POST['idf_groupe']) ? $_POST['idf_groupe'] : $gi_get_idf_groupe;

switch($gst_mode) {
  case 'menu': affiche_menu();break;
  case 'menu_ajouter': affiche_menu_ajouter();break;
  case 'menu_modifier': affiche_menu_modifier($gc_init_cour,null);break;
  case 'ajouter':  ajouter($_POST['majeure'],$_POST['variantes']); break;
  case 'selection_completer':affiche_selection_completer($gi_idf_groupe); break;
  case 'completer': completer($gi_idf_groupe,$_POST['variantes']);
                    $st_majeure=$connexionBD->sql_select1("select patronyme from variantes_patro where idf_groupe=".$_POST['idf_groupe']." and majeure=1");
                    $c_init=empty($st_majeure) ? 'A' :substr($st_majeure,0,1); 
                    affiche_menu_modifier($c_init,$gi_idf_groupe);break;
  case 'modifier_variante': affiche_modifier_variante($gi_idf_groupe);break;
  case 'modifier': modifier($gi_idf_groupe,$_POST['variantes']);
                   $st_majeure=$connexionBD->sql_select1("select patronyme from variantes_patro where idf_groupe=".$_POST['idf_groupe']." and majeure=1");
                   $c_init=empty($st_majeure) ? 'A' :substr($st_majeure,0,1); 
                   affiche_menu_modifier($c_init,$gi_idf_groupe);break;
  break;
  case 'menu_fusionner': 
    $st_init_src = isset($_POST['init_src']) ? $_POST['init_src']: '';
    $st_init_dst = isset($_POST['init_dst']) ? $_POST['init_dst']: '';
    $st_majeure_src = isset($_POST['majeure_src']) ? $_POST['majeure_src']: '';
    $st_majeure_dst = isset($_POST['majeure_dst']) ? $_POST['majeure_dst']: ''; 
    affiche_menu_fusionner($st_init_src,$st_init_dst,$st_majeure_src,$st_majeure_dst);
  break;
  case 'fusionner':
  fusionner($_POST['majeure_src'],$_POST['majeure_dst']);
  print("<div align=\"center\" class=\"IMPORTANT\">Majeures fusionn&eacute;es</div><br>");
  affiche_menu();
  break;
  case 'verifier':
  verifier($_POST['variante']);
  affiche_menu();
  break; 
  case 'variantes_restantes';
     $gst_chemin_courant =dirname(__FILE__)."/telechargements";
     //$gst_chemin_courant =dirname(__FILE__);
     $st_variantes_nimv3 = "$gst_chemin_courant/VariantesRestantesNimV3.csv";
     $i_temps_courant = time();
     calcule_variantes_restantes($connexionBD,$st_variantes_nimv3);
     $zip = new ZipArchive();
     
     $st_chemin_zip="$gst_chemin_courant/VariantesRestantesNimV3.zip";
     if (file_exists($st_chemin_zip)) unlink($st_chemin_zip);
     if ($zip->open($st_chemin_zip, ZIPARCHIVE::CREATE)!==TRUE) {
        exit("Impossible d'&eacute;crire <$st_chemin_zip>\n");
     }
     $zip->addFile($st_variantes_nimv3,"VariantesNimegue.txt");
     $zip->close();
       
       print("<div align=center>Dur&eacute;e: ".(time()-$i_temps_courant)." s</div><br>");
       print("<div align=center>Export créé: <a href=\"./telechargements/VariantesRestantesNimV3.zip\">Variantes Nimègue restantes V3</a></div><br>");
       print('</form>');
       print('<div align=center></div><br>');
       print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
       print('<input type="hidden" name="mode" value="menu" />');
       print('<div align=center><input type="submit" value="RETOUR"/></div>');
  break;                      
  default: print("Mode $gst_mode inconnu");
}

print("</body></html>");

?>
