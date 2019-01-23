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

                        <h2 align=center>Relev&eacute;s disponibles sur une zone g&eacute;ographique donn&eacute;e</h2>
                        <p>&nbsp;</p>

<div align="right">

                        
<?php

require_once('../../v4/Commun/commun.php');
require_once('../../v4/Commun/constantes.php');
require_once('../../v4/Commun/ConnexionBD.php');
require_once('../../v4/Commun/config.php');

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

function vers_annees($pi_annee_min,$pi_annee_max,$pi_nb_actes) {
   
   if ($pi_annee_min==0 && $pi_annee_max==0)
     return("&nbsp;");
   else if ($pi_annee_min!=$pi_annee_max)
     return ("$pi_annee_min-$pi_annee_max<br>$pi_nb_actes actes"); 
   else
     return("$pi_annee_min<br>$pi_nb_actes actes");
}

$gi_idf_commune = empty($_POST['idf_commune'])? 0 : $_POST['idf_commune'];
$gi_rayon = empty($_POST['rayon'])? 0 : $_POST['rayon'];
$gst_mode = empty($_POST['mode'])? 'FORMULAIRE' : $_POST['mode'];
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

switch($gst_mode) {
case 'FORMULAIRE':
   print("<div align=center>");
   $ga_communes = $connexionBD->liste_valeur_par_clef("select idf,nom from commune_acte order by nom");
   print("<form action=".$_SERVER['PHP_SELF']." method=post>");
   print("<p style=\"font-size:8pt;\">Commune : <select name=idf_commune>");
   foreach  ($ga_communes as $i_idf_commune => $st_nom_commune )
   {
      print("<option value=\"$i_idf_commune\">$st_nom_commune</option>");
   }
   print("</select></p>");
   print("<p style=\"font-size:8pt;\">Rayon de Recherche (en km): ");
   print("<input type=hidden name=mode value=REPONSE>");
   print("<input type=text name=rayon size =2");
   print("</p>");
   print("<p style=\"font-size:8pt;\"><input type=submit name=\"Chercher\"></p>");   
   print("</form>");
   print("</div>");   
break;
case 'REPONSE':
   //if ($gi_rayon==0) die ("Rayon vide");
   $st_requete = "select ca.idf,sc.idf_type_acte,ca.nom,c.nom,sc.annee_min,sc.annee_max,sc.nb_actes from `commune_acte` ca left join  `stats_commune` sc on (ca.idf=sc.idf_commune) join canton c on (ca.idf_canton=c.idf) where ca.idf in (select distinct tk.idf_commune2 from tableau_kilometrique tk where tk.idf_commune1=$gi_idf_commune and tk.distance<=$gi_rayon) or ca.idf=$gi_idf_commune order by ca.nom";
   //print("Req=$st_requete");
   $a_actes=$connexionBD->liste_valeur_par_doubles_clefs($st_requete);

   print('<table width="599" cellpadding="0" cellspacing="0" border=\"1\">');
   print('<tr style=\"font-size:8pt;\">');
   print(join('',array('<th>Commune</th>','<th>Canton</th>','<th >Naissances</th>','<th >Mariages</th>','<th >D&eacute;c&egrave;s</th>','<th>CM</th>')));
   print('</tr>');
   foreach ($a_actes as $i_idf_commune => $a_tmp)
   {
      $st_annees_mar ='';
      $st_annees_cm='';
      $st_annees_nai='';
      $st_annees_dec='';
      foreach($a_tmp as $i_idf_type_acte => $a_infos)
      {
         list($st_commune,$st_canton,$i_annee_min,$i_annee_max,$i_nb_actes) = $a_infos;
         
         switch ($i_idf_type_acte) {
            case IDF_NAISSANCE : $st_annees_nai=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
            case IDF_DECES : $st_annees_dec=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
            case IDF_MARIAGE : $st_annees_mar=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
            case IDF_CM : $st_annees_cm=vers_annees($i_annee_min,$i_annee_max,$i_nb_actes);break;
         }
      }
      print('<tr style=\"font-size:8pt;\">');
      print(join('',array_map("vers_td",array($st_commune,$st_canton,$st_annees_nai,$st_annees_mar,$st_annees_dec,$st_annees_cm))));
      print('</tr>');
   }
   print('</table>');
   print("<form action=".$_SERVER['PHP_SELF']." method=post>");
   print("<input type=hidden name=mode value=FORMULAIRE>");
   print("<p style=\"font-size:8pt;\"><div align=center><input type=submit value=\"Retour\"></div></p>");   
   print("</form>");
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
