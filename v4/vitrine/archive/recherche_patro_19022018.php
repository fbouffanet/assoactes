<html>

<head>
<title>Vitrine de l'AGC</title>
  <meta name="description" content="Site de l'Association G&eacute;n&eacute;alogique de la Charente, 24 avenue Gambettta &agrave; Angoul&ecirc;me 16000.">
  <meta name="keywords" content="agc,g&eacute;n&eacute;alogie,minitel,tables,anc&ecirc;tres,charente,naissance,bapt&ecirc;me,contrat,mariage,d&eacute;c&egrave;s,s&eacute;pultures,entraide,bms">
  <meta name="ROBOTS" content="index,follow">
  <meta name="REVISIT-AFTER" content="7days">
  <meta http-equiv="CONTENT-LANGUAGE" content="fr">
  <meta name="OWNER" content="A.G.C.">

  <meta name="AUTHOR" content="J-C Dindinaud">
  <meta http-equiv="EXPIRES" content="">
  <meta name="RATING" content="General">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="generator" content="Namo WebEditor v6.0">
<LINK REL="SHORTCUT ICON" href="favicon.ico">

<script type="text/javascript">

/***********************************************
* Different CSS depending on OS (mac/pc)- Œ Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var csstype="external" //Specify type of CSS to use. "Inline" or "external"

var mac_externalcss="macstyle.css?fin11" //if "external", specify Mac css file here
var pc_externalcss="pcstyle.css?fin11" //if "external", specify PC/default css file here

///////No need to edit beyond here////////////

var mactest=navigator.userAgent.indexOf("Mac")!=-1
if (csstype=="inline"){
document.write('<style type="text/css">')
if (mactest)
document.write(mac_css)
else
document.write(pc_css)
document.write('</style>')
}
else if (csstype=="external")
document.write('<link rel="stylesheet" type="text/css" href="'+ (mactest? mac_externalcss : pc_externalcss) +'">')
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-15252507-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body  text="black" link="blue" vlink="purple" alink="red">
<table width="990" background="images/fond/bas.jpg" cellpadding="0" cellspacing="0">
    <tr background="images/fond/haut.jpg"><td height="197">&nbsp;</td></tr>
    <tr background="images/fond/bas.jpg">

        <td height="616">

                        <table cellpadding="0" cellspacing="0" width="760" align="left" >
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">

                    <td width="131" >
                        <p align="center"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        </td>
                    <td width="629">

                        <h2 align=center>Recherche d'un patronyme dans la base</h2>
                        <p>&nbsp;</p>

<div align="right">

                        
<?php

function vers_td($pst_chaine)
{  
  if (empty($pst_chaine) || $pst_chaine=="0-0")
    return("<td>&nbsp;</td>");
  else
    return("<td style=\"font-size:8pt;\" align=\"center\">$pst_chaine</td>");
}

function vers_th($pst_chaine)
{
   return("<th style=\"font-size:8pt;\">$pst_chaine</th>");
}

function vers_nom($pst_chaine)
{
   return "'$pst_chaine'";
}
function vers_annees($pi_annee_min,$pi_annee_max,$pi_nb_actes) {
   
   if ($pi_annee_min==0 && $pi_annee_max==0)
     return("&nbsp;");
   else if ($pi_annee_min!=$pi_annee_max)
     return ("$pi_annee_min-$pi_annee_max<br>$pi_nb_actes actes"); 
   else
     return("$pi_annee_min<br>$pi_nb_actes actes");
}

require_once('../../v4/Commun/commun.php');
require_once('../../v4/Commun/constantes.php');
require_once('../../v4/Commun/ConnexionBD.php');
require_once('../../v4/Commun/config.php');
require_once('../../v4/Commun/PaginationTableau.php');

$gst_nom = empty($_POST['nom'])? '' : stripslashes(substr(trim($_POST['nom']),0,30));
$gst_variantes = empty($_POST['variantes'])? '' : trim($_POST['variantes']);
$gst_mode = empty($_POST['mode'])? 'FORMULAIRE' : $_POST['mode'];

switch($gst_mode) {
case 'FORMULAIRE':
   print("<div align=center>");
   print("<form action=".$_SERVER['PHP_SELF']." method=post>");

   print("<p style=\"font-size:8pt;\">Patronyme: ");
   print("<input type=text name=nom size=20 maxlength=50>");
   print(' variantes <input type=checkbox name=variantes value=oui checked>');
   print("</p>");
   print("<input type=hidden name=mode value=REPONSE>");
   print("<p style=\"font-size:8pt;\"><input type=submit value=\"Chercher\"></p>");   
   print("</form>");
   print("<p style=\"font-size:8pt;\">Le caract&egrave;re * peut remplacer un ou plusieurs caract&egrave;res dans la recherche</p>");
   print("<p style=\"font-size:8pt;\">Le nom doit comporter au moins 3 caractères</p>"); 
   print("</div>"); 
   break;  
case 'REPONSE':
   
   if ($gst_nom!='' && strlen($gst_nom) <3)
      die("Le patronyme doit faire au moins 3 caract&egrave;res");
   $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   $gst_nom =addslashes($gst_nom);
   if (ereg('\*',$gst_nom))
      $st_requete = "select distinct sp.idf_commune,sp.idf_type_acte,sp.patronyme,ca.nom,sp.annee_min,sp.annee_max,sp.nb_personnes from `stats_patronyme` sp join `commune_acte` ca on (sp.idf_commune=ca.idf) where sp.patronyme like '".str_replace('*','%',$gst_nom)."' order by ca.nom,sp.patronyme";   
   else if ($gst_variantes!='oui')
      $st_requete = "select distinct sp.idf_commune,sp.idf_type_acte,sp.patronyme,ca.nom,sp.annee_min,sp.annee_max,sp.nb_personnes from `stats_patronyme` sp join `commune_acte` ca on (sp.idf_commune=ca.idf) where sp.patronyme='$gst_nom' order by ca.nom,sp.patronyme";
   else
   {
      $a_variantes=$connexionBD->sql_select("select vp1.patronyme from variantes_patro vp1, variantes_patro vp2 where vp2.patronyme = '$gst_nom'  and vp1.idf_groupe=vp2.idf_groupe");
      if (count($a_variantes)==0) 
         $st_requete = "select distinct sp.idf_commune,sp.idf_type_acte,sp.patronyme,ca.nom,sp.annee_min,sp.annee_max,sp.nb_personnes from `stats_patronyme` sp join `commune_acte` ca on (sp.idf_commune=ca.idf) where sp.patronyme='$gst_nom' order by ca.nom,sp.patronyme";
      else
      {
        $a_variantes = array_map('addslashes',$a_variantes);
        $st_variantes = join(',',array_map('vers_nom',$a_variantes));
        $st_requete = "select distinct sp.idf_commune,sp.idf_type_acte,sp.patronyme,ca.nom,sp.annee_min,sp.annee_max,sp.nb_personnes from `stats_patronyme` sp join `commune_acte` ca on (sp.idf_commune=ca.idf) where sp.patronyme in ($st_variantes) order by ca.nom,sp.patronyme";
      }         
   }
   
   //print("Req=$st_requete");
   
   $connexionBD->execute_requete($st_requete);
   if ($connexionBD->nb_lignes()==0)
   {
      print ("<div align=center>Pas de patronyme correspondant dans la base</div>");
   }
   else
   {
      print('<table width="599" cellpadding="0" cellspacing="0" border=\"1\">');
      print('<tr style=\"font-size:8pt;\">');
      print(join('',array('<th >Nom</th>','<th>Commune</th>','<th>Naissances</th>','<th >Mariages</th>','<th >D&eacute;c&egrave;s</th>','<th >CM</th>')));
      print('</tr>');
      
      while ($a_acte=$connexionBD->ligne_suivante_resultat())
      {      
        list($i_idf_commune,$i_idf_type_acte,$st_patronyme,$st_commune,$i_annnee_min,$i_annee_max,$i_nb_actes) = $a_acte;
        $a_actes[$i_idf_commune][$st_patronyme][$i_idf_type_acte] = array($st_commune,$i_annnee_min,$i_annee_max,$i_nb_actes);
      }
      
      foreach ($a_actes as $i_idf_commune => $a_tmp)
      {
         foreach ($a_tmp as $st_patronyme => $a_tmp2)
         {
            $st_annees_mar ='';
            $st_annees_cm='';
            $st_annees_nai='';
            $st_annees_dec='';
            foreach($a_tmp2 as $i_idf_type_acte => $a_infos)
            {
               list($st_commune,$i_annee_min,$i_annee_max,$i_nb_actes) = $a_infos;
         
               switch ($i_idf_type_acte)
               {
                  case IDF_NAISSANCE : $st_annees_nai=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
                  case IDF_DECES : $st_annees_dec=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
                  case IDF_MARIAGE : $st_annees_mar=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
                  case IDF_CM : $st_annees_cm=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
               }
             }
             print('<tr style=\"font-size:8pt;\">');
             print(join('',array_map("vers_td",array($st_patronyme,$st_commune,$st_annees_nai,$st_annees_mar,$st_annees_dec,$st_annees_cm))));
             print('</tr>');
          }        
       }

      print('</table>');
   }
   
   
   print("<form action=".$_SERVER['PHP_SELF']." method=post>");
   print("<input type=hidden name=mode value=FORMULAIRE>");
   print("<p style=\"font-size:8pt;\"><div align=center><input type=submit value=\"Retour\"></div></p>");   
   print("</form>");
   break;
}


?>                
                            </div>
    </td>
</tr>
                </table>
                
                
                <p align="right">
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0"
 WIDTH=216 HEIGHT=450> <PARAM NAME="movie" VALUE="index2.swf"> <PARAM NAME=menu VALUE=false> <PARAM NAME=quality VALUE=high> <PARAM NAME=wmode VALUE=opaque> <PARAM NAME=bgcolor VALUE=#FFFFFF> <EMBED src="index2.swf" menu="false" quality="high" wmode="opaque" bgcolor="#FFFFFF"  WIDTH="216" HEIGHT="450" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
</OBJECT></p>
            <p align="center">&nbsp;</p>

                <p align="center">
  </p>
           <div align="left">
           </div>
            </td>
        </tr>
</table>
                <hr><p align="center" style="line-height:100%; margin-top:0; margin-bottom:0;"><b><font color="blue">Association Généalogique de la Charente</font></b><font color="blue"> &nbsp;&nbsp;24, avenue Gambetta 16000 Angoulême</font></p>

<p align="center" style="line-height:100%; margin-top:0; margin-bottom:0;"><font color="blue">Association loi de 1901 déclarée à la CNIL sous le NÝ 1126454</font></p>
<p align="center"><span style="font-size:7pt;">Pour consulter ce site dans les meilleurs conditions, nous vous recommandons Firefox ou Safari et une résolution d'écran de 1024 X 768 pixels</span></p>
</body>

</html>
