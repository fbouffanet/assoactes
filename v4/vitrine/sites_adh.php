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
</head>
<body  text="black" link="blue" vlink="purple" alink="red">
<table width="990" background="images/fond/fond.jpg" cellpadding="0" cellspacing="0">
    <tr>

        <td height="616">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
                        <table cellpadding="0" cellspacing="0" width="767" align="left">
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">

                    <td width="129">
                        <p align="center"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        </td>
                    <td width="638">

                        <p>&nbsp;</p>
                        <h2>Sites perso des adhérents</h2>
                        <p>Pour ajouter votre site, il suffit de le spécifier depuis votre Espace "Compte personnel". Cette liste est automatiquement mise à jour.</p>

                        <table width="633" cellpadding="0" cellspacing="0">
<?php

require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../Commun/config.php');
require_once('../Commun/PaginationTableau.php');

$st_requete = "select nom,prenom,site from adherent where site like 'http://%' and site not regexp 'http://gw[0-9]*.geneanet.org' and annee_cotisation=YEAR(NOW()) order by nom, prenom";
//print("Req=$st_requete<br>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$a_adherents=$connexionBD->sql_select_multiple($st_requete);
foreach ($a_adherents as $a_adherent)
{
   list($st_nom,$st_prenom,$st_site) = $a_adherent;
   print("<tr>");
   print("<td width=\"223\"><p>$st_nom $st_prenom</p></td>");
   print("<td height=\"24\" width=\"410\"><p><a href=\"$st_site\" target=\"_blank\">$st_site</a></p></td>");
   print("</tr>\n");
}

?>

                        </table>
                        <p>&nbsp;</p>

                    </td>                </tr>
                </table>
<p>&nbsp;</p>
                <p align="center">           <span style="font-size:8pt;"><font face="Verdana" color="red">&nbsp;</font></span><font color="red"><br>            
</font><span style="font-size:8pt;"><font face="Verdana" color="red">&nbsp;</font></span>
</p>
                <p align="right">&nbsp;</p>
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

