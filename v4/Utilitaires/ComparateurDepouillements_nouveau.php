<?php

require_once '../Commun/config.php';
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_UTILITAIRES);
require_once '../Commun/commun.php';
require_once('../Commun/ConnexionBD.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<title>Comparaison des depouillements en Charente</title>");
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('</head>');



//$gi_nbpages_cggp  = 1;

$gst_url_cgcp     = "http://www.cgcp.asso.fr/./nos_donnees/manual_index.php?dept=16&page=";


$ga_mois          = array(1 => "Janvier",
                     2 => "F&eacute;vrier",
                     3 => "Mars",
                     4 => "Avril",
                     5 => "Mai",
                     6 => "Juin",
                     7 => "Juillet",
                     8 => "Ao&ucirc;t",
                     9 => "Septembre",
                     10 => "Octobre",
                     11 => "Novembre",
                     12 => "D&eacute;cembre"
);

$a_insee_vers_codeagc = array(
                         160680 => 160680,
                         16275 =>162752,
                         162750 =>162751, // A vérifier 
                         162751 =>162750, // A vérifier
                         160700 => 160703,
                         160701 => 160701,
                         160702 => 160702,
                         163370=>163372,
                         163371=>163370,
                         16322=>163221,
                         163220=>163220,
                         //163371=>163372,
                         //163372=>163370,
                         16096 => 160961,
                         16416 => 164161,
                         164160 => 164160, // A vérifier
                         164161 => 164162, // A vérifier
                         16242 => 162421,
                         162420 => 162422,                       
                         162421 => 162423,
                         162422 => 162424,
                         162423 => 162425,                                                 
                         16192 => 162881,
                         161920 => 162882,
                         161922 => 162884,
                         163080 => 163080,
                         16288 => 162885,
                         16150 => 161501,
                         16186 => 161861,
                         16359 => 163591,
                         16339 => 163391,
                         16193=>0,
                         161930 => 161932,
                         16097 => 160971,
                         16405=>164051,
                         164050=>164050,
                         16198=>161981,
                         161980=>161982,
                         16047=>160471,
                         160470=>160472,                        
                         162260=>162261,
                         16344=>163441,
                         16379=>163791,
                         163790=>163790,
                         16334=>163341,
                         163340=>163340,
                         16230=>162301,
                         162300=>162302,
                         16287=>162871,
                         16263=>0,
                         16115=>161151,
                         16319=>161152,
                         16046=>0,
                         160460=>160461,
                         160461=>0,
                         162630=>162630,
                         16284=>162841,
                         162840=>162840,
                         160150=>160154,
                         16301=>163010,
                         163012=>163010,
                         163011=>163011,
                         16102=>161020,
                         161020=>161022,
                         161021=>161021,
                         16119=>161191,
                         161190=>161190,
                         16253=>162531,
                         16116=>161160,
                         161160=>161162,
                         162530=>162532,
                         161500=>161502,
                         16265=>160462,
                         16278=>160972,
                         162970=>162970,
                         161931=>161931,
                         163012=>163010,
                         163013=>163011,
                         160730=>160733,
                         16313=>162872,
                         160280=>160285,
                         162841=>162842,
                         160090=>160091,
                         160091=>160091,
                         163390=>163392,
                         160930=>160931,
                         163440=>163442,
                         16333=>160732,
                         160250=>160253,
                         163590=>163592,
                         16367=>160731,
                         161860=>161862,
                         163790=>163792,
                         162860=>162861,
                         16211=>162111,
                         162424=>162426,
                         161570=>161570,
                         161923=>162885,
                         162870=>162872,
                         161150=>161152,
                         160731=>160732,
                         161062=>163221, # Négrat
                         161063=>163220, # St-Germain de Confolens
                         161061 => 161062, # Confolens (Saint-Pierre)
                         161060 => 161061, # Confolens (Saint-Maxime)
                         16182=>161820, # Lesterps
                         16337=>163371, # Chambon
                         161820=>161821, # Saint-Quentin-le-Brûlé
                         163370=>16337, #Chambon
                         163371=>163370, #St-Maurice des Lions
                         162423=>162424, #Nanteuil
                         162424=>162425, # Pougné
                         //161922=>162884, #Petit-Masdieu
                         161922=> 162885,#Roumazieres
                         16192=> 162881,#Chantrezac
                         161920=>162882, # La Plaud
                         162530=>162532, # Paizay-Naudouin
                         16253=> 162531, # Embourie
                         162700=> 162700, #Pressignac
                         16175 => 160210, # Aubeville
                         161750 => 162010, # Mainfonds
                         16226=>162260, # Montignac-Charente
                         16150 => 161502, # Pallue (La) (Gensac)
                         16286 => 162620, #  Plaizac
                         16263 => 162631, # Plassac
                         16046 => 160462, # Porcheresse
                         16097 => 160972, # Richemont
                         162860 => 162860, # Rouillac
                         161921 => 162883, # Loubert
                         160550 => 160650, # Brillac
                         162425 => 162426, #St-Gervais
                         163081 => 163080, # Négret
                         163081 => 163080, # St-Claud 
                         163370 => 163372, #Lézignac/Goire
                         162240 => 162240, # Montchaude
                         16224 => 161790, # Lamérac
                         160970 => 160972, # Richemont
                         16097 => 160971, # Cherves de Cognac
                         161480 => 161480, # Genac
                         16148 => 160430, # Bignac
                         162862 => 163710, # Sonneville
                         160820 => 160920, # Chavenat
                         160821 => 161720, # Juillaguet
                         161750 => 161750, # Jurignac
                         161751 => 162010, # Mainfonds
                         161752 => 162570,  # Péreuil
                         163850 => 163850 # Touvre
);

function recupere_page_cgcp($pst_url,&$pa_lignes_converties)
{
   $a_lignes = file($pst_url) or die ("Impossible de lire $pst_url");
   foreach ($a_lignes as $st_ligne)
   {
     $pa_lignes_converties[]=rtrim(str_replace(' style="text-align:right;"','',$st_ligne));    
   } 
}


function analyse_page_cgcp(&$pa_lignes_converties,&$resultat)
{
   $a_champs = array();
   $st_ligne = '';
   foreach ($pa_lignes_converties as $st_ligne_cour)
   {
      if (eregi('<tr><td>',$st_ligne_cour))
      {
        if ($st_ligne!='')
        {      
          $a_champs = preg_split('/\<td\>/',$st_ligne);
          if (count($a_champs)>=9)
          {
            $st_naissances ='';
            $st_mariages_f = '';
            $st_mariages_nf = '';
            $st_divers_f ='';
            $st_divers_nf='';
            $st_deces='';
            $i_nb_actes='';
            if (preg_match('/;(\d+)\<\/a\>/',$a_champs[1],$a_matches))
               $i_insee = $a_matches[1];            
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[2],$a_matches))
               $st_commune = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[3],$a_matches))
               $st_naissances = $a_matches[1];           
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[4],$a_matches))
               $st_mariages_f = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[5],$a_matches))
               $st_mariages_nf = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[6],$a_matches))
               $st_divers_f = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[7],$a_matches))
               $st_divers_nf = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[8],$a_matches))
               $st_deces = $a_matches[1];
            if (preg_match('/^\s*([\d\.]+)/',$a_champs[10],$a_matches))
            {
               $i_nb_actes = str_replace('.','',$a_matches[1]);
            }
            if (!array_key_exists($i_insee,$resultat))
            {   
               $resultat[$i_insee] = array($st_commune,$st_naissances,$st_mariages_f,$st_mariages_nf,$st_divers_f,$st_divers_nf,$st_deces,$i_nb_actes);
            }
            else
            {
               // le code insee existe deja => en crée un en utilisant ce code comme préfixe du nouveau
               $i=0;
               while ((array_key_exists("$i_insee$i",$resultat) && $i<10))
               {
                 $i++;
               }
               $resultat["$i_insee$i"] = array($st_commune,$st_naissances,$st_mariages_f,$st_mariages_nf,$st_divers_f,$st_divers_nf,$st_deces,$i_nb_actes);
            }
            }                                          
        }
        $st_ligne='';      
      }
      $st_ligne.= $st_ligne_cour;              
   }
   if ($st_ligne!='')
   {
      if (count($a_champs)>=9)
          {
           $a_champs = spliti('<td>',$st_ligne);
           if (preg_match('/;(\d+)\<\/a\>/',$a_champs[1],$a_matches))
               $i_insee = $a_matches[1];            
            if (preg_match('/(.+)\<\/td\><$/',$a_champs[2],$a_matches))
               $st_commune = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[3],$a_matches))
               $st_naissances = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[3],$a_matches))
               $st_naissances = $a_matches[1];            
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[4],$a_matches))
               $st_mariages_f = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[5],$a_matches))
               $st_mariages_nf = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[6],$a_matches))
               $st_divers_f = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[7],$a_matches))
               $st_divers_nf = $a_matches[1];
            if (preg_match('/(.+)\<\/td\>$/',$a_champs[8],$a_matches))
               $st_deces = $a_matches[1];
            if (preg_match('/^\s*([\d\.]+)/',$a_champs[10],$a_matches))
            {
               $i_nb_actes = str_replace('.','',$a_matches[1]);
            }
            if (!array_key_exists($i_insee,$resultat))
            {   
               $resultat[$i_insee] = array($st_commune,$st_naissances,$st_mariages_f,$st_mariages_nf,$st_divers_f,$st_divers_nf,$st_deces,$i_nb_actes);
            }
            else
            {
               // le code insee existe deja => en crée un en utilisant ce code comme préfixe du nouveau
               $i=0;
               while ((array_key_exists("$i_insee$i",$resultat) && $i<10))
               {
                 $i++;
               }
               $resultat["$i_insee$i"] = array($st_commune,$st_naissances,$st_mariages_f,$st_mariages_nf,$st_divers_f,$st_divers_nf,$st_deces,$i_nb_actes);
            } 
       }                                              
  }    
}

function td_comparaison($pst_val_agc,$pst_val_cgcp)
{
   $pst_val_cgcp = str_replace('|','<br>',$pst_val_cgcp);
   if ($pst_val_agc == "" && $pst_val_cgcp != "" && $pst_val_cgcp != "N/A")
      return sprintf("<td >&nbsp;</td><td bgcolor=\"#C2CF68\">%s</td>",$pst_val_cgcp);
   if ( $pst_val_agc != "" && $pst_val_cgcp == "")
      return sprintf("<td bgcolor=\"#9999FF\">%s</td><td>&nbsp;</td>",$pst_val_agc);
   if ($pst_val_cgcp== "") $pst_val_cgcp ="&nbsp;";
   if ($pst_val_agc== "") $pst_val_agc ="&nbsp;";
   return sprintf("<td>%s</td><td>%s</td>",$pst_val_agc,$pst_val_cgcp);  
}

function affiche_tableau($pa_insee)
{
    global $a_insee_vers_codeagc,$ga_stats_nai_agc,$ga_stats_mar_agc,$ga_stats_dec_agc,$ga_stats_div_agc,$a_resultat_cgcp,$ga_nb_actes_agc,$ga_stats_cm_agc;
    print('<div align=center><table border=1>');
   print('<tr bgcolor="lightcyan">');
   print('<th rowspan=2>Code Insee</th><th rowspan=2>Commune</th><th colspan=2>Naissances</th><th colspan=2>Mariages filiatifs</th><th colspan=2>Divers filiatifs</th><th colspan=2>Décès</th><th rowspan=2>Nb CM AGC</th><th colspan=2>Nb total<br>d\'actes</th>');
   print('</tr><tr>');
   print('<th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th>');
   print('</tr>');
   print("\n");
   $i_tot_canton_agc = 0;
   $i_tot_canton_cgcp = 0;
   $a_paroisses = array();
   foreach ($pa_insee as $st_insee)
   {    
     $st_commune_cgcp = array_key_exists($st_insee,$a_resultat_cgcp) ? $a_resultat_cgcp[$st_insee][0]: '';
     $a_paroisses[$st_insee] =  $st_commune_cgcp;
   }
   asort($a_paroisses);
   foreach ($a_paroisses as $st_insee => $st_commune_cgcp)
   { 
    if (array_key_exists($st_insee,$a_insee_vers_codeagc))
     {
       $st_code_agc = $a_insee_vers_codeagc[$st_insee];
     }
     else
     {
       $st_code_agc = sprintf("%s0",$st_insee);
     }  
     $st_commune_agc = array_key_exists($st_code_agc,$ga_stats_nai_agc) ? $ga_stats_nai_agc[$st_code_agc][0]: '';
     if ($st_commune_agc!='' && $st_commune_cgcp!='')
     {
        print ('<tr>');
        //FBO Debogage:
        print(sprintf("<td>%5.5s</td>",$st_insee));
        //print(sprintf("<td>%s</td>",$st_insee));
        if ($st_commune_agc!=$st_commune_cgcp)
          print(sprintf("<td>%s<br>ou  %s</td>",$st_commune_agc,$st_commune_cgcp));
          //print(sprintf("<td>%s (%d)<br>ou %s(%d)</td>",$st_commune_agc,$a_insee_vers_codeagc[$st_insee],$st_commune_cgcp,$st_insee));
        else
          print(sprintf("<td>%s</td>",$st_commune_cgcp));   
        $i_nai_agc = array_key_exists($st_code_agc,$ga_stats_nai_agc) ? $ga_stats_nai_agc[$st_code_agc][1] : '';
        $i_mar_agc = array_key_exists($st_code_agc,$ga_stats_mar_agc) ? $ga_stats_mar_agc[$st_code_agc][1] : '';
        $i_dec_agc = array_key_exists($st_code_agc,$ga_stats_dec_agc) ? $ga_stats_dec_agc[$st_code_agc][1] : '';
        $i_div_agc= array_key_exists($st_code_agc,$ga_stats_div_agc) ? $ga_stats_div_agc[$st_code_agc][1] : '';
        $i_nb_actes_agc= array_key_exists($st_code_agc,$ga_nb_actes_agc) ? $ga_nb_actes_agc[$st_code_agc][1] : '';
        $i_tot_canton_agc+=$i_nb_actes_agc;
        $i_nb_cm_agc= array_key_exists($st_code_agc,$ga_stats_cm_agc) ? $ga_stats_cm_agc[$st_code_agc][1] : '';
        
        if (array_key_exists($st_insee,$a_resultat_cgcp))
        {
          $i_nai_cgcp = $a_resultat_cgcp[$st_insee][1];
          $i_mar_cgcp = $a_resultat_cgcp[$st_insee][2];
          $i_div_cgcp = $a_resultat_cgcp[$st_insee][4];
          $i_dec_cgcp = $a_resultat_cgcp[$st_insee][6];
          $i_nb_actes_cgcp = $a_resultat_cgcp[$st_insee][7];
          $i_tot_canton_cgcp+=$i_nb_actes_cgcp ; 
        }
        else
        {
          $i_nai_cgcp='';
          $i_mar_cgcp='';
          $i_div_cgcp ='';
          $i_dec_cgcp='';
          $i_nb_actes_cgcp = '';
        }
        print td_comparaison($i_nai_agc,$i_nai_cgcp);
        print td_comparaison($i_mar_agc,$i_mar_cgcp);
        print td_comparaison($i_div_agc,$i_div_cgcp);
        print td_comparaison($i_dec_agc,$i_dec_cgcp);
        print("<td>$i_nb_cm_agc</td>");
        print("<td>$i_nb_actes_agc</td>");
        print("<td>$i_nb_actes_cgcp</td>");
        print("</tr>\n");
     }   
  }
  print("<tr><th>Total</th><td colspan=10>&nbsp;</td><td>$i_tot_canton_agc</td><td>$i_tot_canton_cgcp</td></tr>");
  print('</table></div><br>');
}

function affiche_tableau_canton($pst_canton,$pa_insee)
{
   print("<h3 align=center><font color=blue>Canton de <a name=\"$pst_canton\">$pst_canton</a></font></h3>");
   affiche_tableau($pa_insee);
   
}

/**
 * Affiche le menu de selection
 * @global $gi_max_taille_upload Maximun de la taille  
 */
function affiche_menu() {
   global $gi_max_taille_upload;
   print('<div class=TITRE>Chargement de l\'inventaire du CGCP</div>');
   print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print("<div align=center><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"$gi_max_taille_upload\">"); 
   print('<input type="hidden" name="mode" value="COMPARAISON" >');
   print('<br>Fichier <span class=IMPORTANT>HTML</span> des relev&eacute;s CGCP: <input name="IndexCGCP" type="file" /><br></div>');
   print('<div align=center><br><input type="submit" value="Compare les depouillements"/></div>');
   print('</form>');

} 

/******************************************************************************/
/*                         Corps du programme                                 */
/******************************************************************************/
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$a_arrdt_cognac =array( 'Baignes-Sainte-Radegonde'=>
array(16025,16053,16079,16105,16179,16224,16276,160250,16380,16384),
'Barbezieux-Saint-Hilaire' =>
array(16014,16028,16030,16040,16062,163010,16074,163011,16160,16176,16177,16178,162240,16301,16303,160280,16338,16342,16405,16360,164050),
'Brossac' =>
array(16048,16066,16091,16099,16161,16251,16256,16315,16331,16357,16354,16365),
'Châteauneuf-sur-Charente'=>
array(16013,16045,16050,16057,16090,16129,16297,16204,16233,16247,16351,16352,16386,16402,16417),
'Cognac-Nord'=>array(16058,16060,16102,16097,16218,16278,160970,16304,16355),
'Cognac-Sud'=>array(16018,16089,16102,16152,16169,161930,16217,161931,16330),
'Jarnac'=>array(16088,16139,16145,16165,16167,16174,16216,16220,16243,16277,16349,16369,16032,16387),
'Rouillac'=>array(16017,16339,163390,16043,16051,16109,16148,161480,16156,16207,16208,16221,16228,16262,16286,16312,16371,162860,16395,162862),
'Segonzac' =>
array(16010,16012,16359,16056,16116,16150,16151,16153,16171,16186,161160,16202,161500,16316,16340,16343,163590,16366,161860,16399)
);

$a_arrdt_angouleme =array(
'Angoulême'=> array(16015),
'Aubeterre-sur-Dronne'=>array(16020,16037,16049,16130,16180,16284,16227,16240,16260,162840,162841,16347,16350),
'Blanzac-Porcheresse'=>array(16021,16036,16041,16046,160460,160461,16072,16075,16101,16115,16133,16175,16201,16236,16257,16258,16263,162630,16265,16319,16332,16420,161750,161751,161752),
'Chalais'=>
array(16029,16034,16063,16073,16112,16117,16215,16222,16252,16279,16302,160730,16346,16333,16367,16424),
'La-Couronne'=>
array(16113,16138,16244,16271,16287,162870,16313,16341,16418),
'Gond-Pontouvre'=>
array(16026,16078,16154,16358),
'Hiersac'=>
array(16019,16077,16121,16123,16163,16187,16234,16298,16320,16348,16370,16388,16415),
'Montbron'=>array(16084,16124,16135,16137,16158,16203,16211,16223,16250,16290,	16323,16353,16372,16421),
'Montmoreau-Saint-Cybard'=>array(16004,16052,16111,16118,16170,16230,16246,16254,16334,16267,16294,162300,16314,16328,163340,16362),
'La Rochefoucauld' => array(16003,16061,16067,16093,16107,16379,16168,16209,16269,16274,16280,16281,16282,16344,160930,163440,163790,16406,16425),
'Ruelle-sur-Touvre' =>array(16166,16199,16232,16291,163850),
'St-Amant-de-Boixe' => array(16008,16011,16024,16081,16226,16108,16200,16210,16226,16241,16295,16383,16393,16401,16412,16419,16423),
'Soyaux' => array(16055,16120,16146,16374,16422),
'Villebois-Lavalette'=> array(16119,16047,16082,16092,16103,161190,16125,16143,16147,16162,16172,16198,16283,16285,160470,16368,16382,16394,16408,160820,160821)
);

$a_arrdt_confolens =array(
'Aigre' =>array(16005,16027,16042,16083,16122,16144,16155,16185,16194,16248,16275,16317,16390,16397,16411),
'Chabanais' => array(16070,160701,160702,16071,16086,16100,16132,16134,16259,162700,16345,16363,16376),
'Champagne-Mouton'=>array(16007,16038,16054,16076,16087,16310,16389,16403),
'Confolens-Nord'=>array(16009,16016,161061,161062,161060,161063,16128,16164,16181,16205,161062,16264,160090,160091),
'Confolens-Sud'=>array(16001,160550,16064,16131,161820,163370,163371,16231,16322,16249,16306,16337,16322,163372,161820,16182),
'Mansle' => array(16023,16033,160680,16069,16094,16095,16140,16141,16173,16184,16191,16196,16206,16237,16238,16272,16296,16300,16307,16309,16318,16326,16377,16392,16396,16414),
'Montemboeuf' => array(16096,16183,16188,16212,16213,16225,16239,16289,16293,16364,16398,16416,164160,164161),
'Ruffec' => array(16002,16242,16031,16044,16104,16114,162420,16235,162421,162422,162423,162424,16268,16292,16321,162425,16325,16356,16378,16400,16404,16410),
'St-Claud' => array(16035,161922,16085,162881,16149,161570,161924,161923,16195,16214,16308,16245,16192,161921,16255,16261,16288,161920,163081,16329,16336,16375),
'Villefagnan' => array(16039,16059,16098,16110,16253,16127,16136,16142,16189,16190,16197,16229,162530,162531,16273,16335,16361,16373,16381,16391,16409,16413
)
);

$a_lignes_cgcp = array();
$a_resultat_cgcp = array();

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;

switch($gst_mode)
{
   case 'FORMULAIRE' : 
       affiche_menu();
   break;
   
   case 'COMPARAISON' :      
       $st_fich_dest = tempnam($gst_repertoire_chargement_actes,"index_CGCP");
       if (!move_uploaded_file($_FILES['IndexCGCP']['tmp_name'],$st_fich_dest)) 
       {
          print("<div CLASS=IMPORTANT>Erreur de t&eacute;l&eacute;chargement :</div><br>");
          switch($_FILES['AdhYahoo']['error'])
          { 
              case 2 : print("Fichier trop gros par rapport &agrave; MAX_FILE_SIZE");break;
              default : print("Erreur inconnue");print_r($_FILES);
          }
          exit;
       }
       recupere_page_cgcp($st_fich_dest,$a_lignes_cgcp);
       analyse_page_cgcp($a_lignes_cgcp,$a_resultat_cgcp);

       $st_requete = "select concat(ca.code_insee,ca.numero_paroisse),ca.nom,CONCAT(sc.annee_min,'-',sc.annee_max) from  `commune_acte` ca left join `stats_commune` sc on (sc.idf_commune=ca.idf and sc.idf_source=1 and sc.idf_type_acte=1)";
       $ga_stats_mar_agc=$connexionBD->sql_select_multiple_par_idf($st_requete);
       $st_requete = "select concat(ca.code_insee,ca.numero_paroisse),ca.nom,CONCAT(sc.annee_min,'-',sc.annee_max) from  `commune_acte` ca left join `stats_commune` sc on (sc.idf_commune=ca.idf and sc.idf_source=1 and sc.idf_type_acte=3)";
       $ga_stats_nai_agc=$connexionBD->sql_select_multiple_par_idf($st_requete);
       $st_requete = "select concat(ca.code_insee,ca.numero_paroisse),ca.nom,CONCAT(sc.annee_min,'-',sc.annee_max) from  `commune_acte` ca left join `stats_commune` sc on (sc.idf_commune=ca.idf and sc.idf_source=1 and sc.idf_type_acte not in (1,3,4))";
       $ga_stats_div_agc=$connexionBD->sql_select_multiple_par_idf($st_requete);
       
//print("NAI=$st_requete<br>");
      $st_requete = "select concat(ca.code_insee,ca.numero_paroisse),ca.nom,CONCAT(sc.annee_min,'-',sc.annee_max) from  `commune_acte` ca left join `stats_commune` sc   on (sc.idf_commune=ca.idf and sc.idf_source=1 and sc.idf_type_acte=4)";
      $ga_stats_dec_agc=$connexionBD->sql_select_multiple_par_idf($st_requete);
      $st_requete = "select concat(ca.code_insee,ca.numero_paroisse),ca.nom, sum(sc.nb_actes) from  `commune_acte` ca left join `stats_commune` sc   on (sc.idf_commune=ca.idf) group by ca.code_insee,ca.numero_paroisse";
      $ga_nb_actes_agc=$connexionBD->sql_select_multiple_par_idf($st_requete);
      $st_requete = "select concat(ca.code_insee,ca.numero_paroisse),ca.nom, sc.nb_actes from  `commune_acte` ca left join `stats_commune` sc   on (sc.idf_commune=ca.idf and sc.idf_source=1 and idf_type_acte=2)";
      $ga_stats_cm_agc=$connexionBD->sql_select_multiple_par_idf($st_requete);
      print('<body bgcolor="gainsboro">');
      require_once("../Commun/menu.php");
      
?>
<?php if ($gst_mode=='COMPARAISON'):?>
<div align=center>      <h1>        
        <font color="#0066FF">Comparatif des d&eacute;pouillements filiatifs entre l'AGC et le CGCP           
          <br>    pour le d&eacute;partement de la Charente         
        </font></h1>  <h2>        
        <font color="#009999">
<?php
$a_date = localtime(time());        
print(sprintf("%d %s %4.4d",$a_date[3],$ga_mois[$a_date[4]+1],$a_date[5]+1900));

?>        
        </font></h2>         
      <p>&nbsp;       
      </p>
<h3 align="left">        
        <font color="#993333">Quelques pr&eacute;cisions :         
        </font></h3>         
      <p align="left">Ces donn&eacute;es sont issues des listes publiques des d&eacute;pouillements      effectu&eacute;s par les deux associations et ne portent que sur les donn&eacute;es      filiatives:       
      </p>         
      <p align="left"><a href="http://adherents.genea16.net/AfficheStatsCommune.php">http://adherents.genea16.net/AfficheStatsCommune.php</a>         
        <br>    <a href="http://www.cgcp.asso.fr/nos_donnees/manual_index.php">http://www.cgcp.asso.fr/nos_donnees/manual_index.php</a>       
      </p>         
      <p align="left">Le CGCP int&eacute;gre quelques CM dans ses divers filiatifs alors que l'AGC pr&eacute;sente les CM dans une cat&eacute;gorie &agrave; part enti&egrave;re.               
      </p>
      <p align="left">Les table d&eacute;c&eacute;nnales de mariage de l'AGC sont consultables librement sur son site. Celles du CGCP sont r&eacute;serv&eacute;es aux adhérents (relev&eacute;s non filiatifs)              
      </p>          
      <p align="left">La liste des communes de référence est la liste du CGCP pour la Charente.       
        <br>Pour chaque commune du CGCP, une tentative de correspondance avec une commune de l'AGC est faite.       
        <br>Par contre, si l'AGC a effectué le dépouillement d'une commune qui n'est pas connue du CGCP, celle-ci ne figure pas dans le comparatif (Exemple: ANGOULEME (St Martial))        
        <br>Les fourchettes affich&eacute;es correspondent aux ann&eacutees de début et de fin. Consulter les d&eacute;pouillements de chaque site pour voir les &eacute;ventuels trous
      </p>
      <p align="left">
      Une liste des dépouillements par canton est également disponible aux liens ci-dessous :
      </p>
<?php endif;?>      
<?
    //Angouleme
    print("<div align=\"left\">");
    $i=0;
    print("<h2 align=center><font color=coral>Arrondissement d'Angoulême</font></h2>");
    print("<ul>");
    foreach ($a_arrdt_angouleme as $st_nom => $a_insee)
    {
      print("<li><a href=\"#angouleme_$i\">Canton de $st_nom</a></li>");
      $i++;
    }
    print("</ul></div>");
    print("<hr>");

   print("<h2 align=center><font color=coral>Arrondissement de Cognac</font></h2>");
   //Cognac
   print("<div align=\"left\">");
   $i=0;
   print("<ul>");
   foreach ($a_arrdt_cognac as $st_nom => $a_insee)
   {
     print("<li><a href=\"#cognac_$i\">Canton de $st_nom</a></li>");
     $i++;
   }
   print("</ul></div>");
   print("<hr>");

   print('<h2 align=center><font color=coral>Arrondissement de Confolens (zone de "prédilection" du CGCP)</font></h2>');
   //Confolens
   print("<div align=\"left\">");
   $i=0;
   print("<ul>");
   foreach ($a_arrdt_confolens as $st_nom => $a_insee)
   {
      print("<li><a href=\"#confolens_$i\">Canton de $st_nom </a></li>");
      $i++;
   }
   print("<hr>");



?>
<?php if ($gst_mode=='COMPARAISON'):?>            
      <table width="100%" border="1">             
        <tr>                 
          <td bgcolor="#C2CF68" width="5%">&nbsp;</td>                 
          <td width="95%">Signifie qu'aucun relev&eacute; n'est disponible dans la cat&eacute;gorie &eacute;tudi&eacute;e (Naissances, Mariages, D&eacute;c&egrave;s)          pour l'AGC alors que le CGCP dispose de d&eacute;pouillement sur la commune          dans la m&ecirc;me cat&eacute;gorie</td>             
        </tr>             
        <tr>                 
          <td bgcolor="#9999FF" width="5%">&nbsp;</td>                 
          <td width="95%">Signifie qu'aucun relev&eacute; n'est disponible dans la cat&eacute;gorie &eacute;tudi&eacute;e (Naissances, Mariages, D&eacute;c&egrave;s)          pour le CGCP alors que l'AGC dispose de d&eacute;pouillement sur la commune          dans la m&ecirc;me cat&eacute;gorie </td>             
        </tr>         
      </table>
      <br>      
      <br> 
<?php endif; ?>             
<?php
   print('<div align=center><table border=1>');
   print('<tr bgcolor="cyan">');
   print('<th rowspan=2>Code Insee</th><th rowspan=2>Commune</th><th colspan=2>Naissances</th><th colspan=2>Mariages filiatifs</th><th colspan=2>Divers filiatifs</th><th colspan=2>Décès</th><th rowspan=2>Nb CM AGC</th><th colspan=2>Nb total<br>d\'actes</th>');
   print('</tr><tr>');
   print('<th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th><th bgcolor="#9999FF">AGC</th><th bgcolor="#C2CF68">CGCP</th>');
   print('</tr>');
   print("\n");
   foreach ($a_resultat_cgcp as $st_insee => $a_val)
   {
      print ('<tr>');
      //print(sprintf("<td>%5d</td>",$st_insee));
      print(sprintf("<td>%d</td>",$st_insee));
      if (array_key_exists($st_insee,$a_insee_vers_codeagc))
      {
        $st_code_agc = $a_insee_vers_codeagc[$st_insee];
      }
      else
      {
         $st_code_agc = sprintf("%s0",$st_insee);
      }      
      $st_commune_agc = array_key_exists($st_code_agc,$ga_stats_nai_agc) ? $ga_stats_nai_agc[$st_code_agc][0]: '';
      $st_commune_cgcp = array_key_exists($st_insee,$a_resultat_cgcp) ? $a_resultat_cgcp[$st_insee][0]: '';
      if (strtoupper($st_commune_agc)!=strtoupper($st_commune_cgcp))
        print(sprintf("<td>%s <br>ou %s</td>",$st_commune_agc,$st_commune_cgcp));
        //print(sprintf("<td>%s (%d)<br>ou %s(%d)</td>",$st_commune_agc,$a_insee_vers_codeagc[$st_insee],$st_commune_cgcp,$st_insee));
      else
        print(sprintf("<td>%s</td>",$st_commune_cgcp));
      $i_nai_agc = array_key_exists($st_code_agc,$ga_stats_nai_agc) ? $ga_stats_nai_agc[$st_code_agc][1] : '';
      $i_mar_agc = array_key_exists($st_code_agc,$ga_stats_mar_agc) ? $ga_stats_mar_agc[$st_code_agc][1] : '';
      $i_dec_agc = array_key_exists($st_code_agc,$ga_stats_dec_agc) ? $ga_stats_dec_agc[$st_code_agc][1] : '';
      $i_div_agc= array_key_exists($st_code_agc,$ga_stats_div_agc) ? $ga_stats_div_agc[$st_code_agc][1] : '';
      $i_nb_cm_agc= array_key_exists($st_code_agc,$ga_stats_cm_agc) ? $ga_stats_cm_agc[$st_code_agc][1] : '';
      $i_nb_actes_agc= array_key_exists($st_code_agc,$ga_nb_actes_agc) ? $ga_nb_actes_agc[$st_code_agc][1] : '';
      if (array_key_exists($st_insee,$a_resultat_cgcp))
      {
          $i_nai_cgcp = $a_resultat_cgcp[$st_insee][1];
          $i_mar_cgcp = $a_resultat_cgcp[$st_insee][2];
          $i_div_cgcp = $a_resultat_cgcp[$st_insee][4];
          $i_dec_cgcp = $a_resultat_cgcp[$st_insee][6];
          $i_nb_actes_cgcp = $a_resultat_cgcp[$st_insee][7];;
      }
      else
      {
        $i_nai_cgcp='';
        $i_mar_cgcp='';
        $i_div_cgcp ='';
        $i_dec_cgcp='';
        $i_nb_actes_cgcp='';
      }
      print td_comparaison($i_nai_agc,$i_nai_cgcp);
      print td_comparaison($i_mar_agc,$i_mar_cgcp);
      print td_comparaison($i_div_agc,$i_div_cgcp);
      print td_comparaison($i_dec_agc,$i_dec_cgcp);    
      print("<td>$i_nb_cm_agc</td>");
      print("<td>$i_nb_actes_agc</td>");
      print("<td>$i_nb_actes_cgcp</td>");
      print("</tr>\n");   
   }
   print('</table></div>');

   print("<h2 align=center><font color=coral>Arrondissement d'Angoulême </font></h3>");
   $i=0;
   foreach ($a_arrdt_angouleme as $st_canton => $a_insee)
   {
      print("<h3 align=center><font color=blue>Canton de <a name=\"angouleme_$i\">$st_canton</a></font></h3>");
      affiche_tableau($a_insee);
      $i++;
   }
   print('<hr>');

   print("<h2 align=center><font color=coral>Arrondissement de Cognac </font></h3>");
   $i=0;
   foreach ($a_arrdt_cognac as $st_canton => $a_insee)
   {
      print("<h3 align=center><font color=blue>Canton de <a name=\"cognac_$i\">$st_canton</a></font></h3>");
      affiche_tableau($a_insee);
      $i++;
   }
   print('<hr>');

   print('<h2 align=center><font color=coral>Arrondissement de Confolens (Zone de "prédilection" du CGCP)</font></h3>');
   $i=0;
   foreach ($a_arrdt_confolens as $st_canton => $a_insee)
   {
      print("<h3 align=center><font color=blue>Canton de <a name=\"confolens_$i\">$st_canton</a></font></h3>");
      affiche_tableau($a_insee);
      $i++;
   }
   break;
        
}

print('</body>');
print('</html>');
?>