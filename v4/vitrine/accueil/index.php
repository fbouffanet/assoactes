<html>

<head>
<title>Vitrine de l'AGC</title>
  <meta name="description" content="Site de l'Association G&eacute;n&eacu/Applications/MAMP/htdocs/AGC 3/index.phpte;alogique de la Charente, 24 avenue Gambettta &agrave; Angoul&ecirc;me 16000.">
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
* Different CSS depending on OS (mac/pc)- © Dynamic Drive (www.dynamicdrive.com)
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
<SCRIPT LANGUAGE="Javascript"> 
/*
DETECTION FLASH
SCRIPT EDITE SUR L'EDITEUR JAVASCRIPT
http://www.editeurjavascript.com
*/

var flashinstalled = 0; 
MSDetect = "false";
if (navigator.mimeTypes && navigator.mimeTypes.length) 
{
x = navigator.mimeTypes['application/x-shockwave-flash'];
if (x && x.enabledPlugin) flashinstalled = 2;
else flashinstalled = 1; 
}
else
{
MSDetect = "true";
}
</SCRIPT>
<SCRIPT LANGUAGE="VBScript">
on error resume next
If MSDetect = "true" Then
If Not(IsObject(CreateObject("ShockwaveFlash.ShockwaveFlash"))) Then 
flashinstalled = 1
Else
flashinstalled = 2
End If
End If
</SCRIPT>
<SCRIPT LANGUAGE="Javascript"> 
// CHANGEZ ICI L'URL A AFFICHER SI LE NAVIGATEUR N'A PAS FLASH
if (flashinstalled == 1) document.location.replace("plan.php");
</SCRIPT> 
<script type="text/javascript">

/***********************************************
* Bookmark site script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

/* Modified to support Opera */
function bookmarksite(title,url){
if (window.sidebar) // firefox
	window.sidebar.addPanel(title, url, "");
else if(window.opera && window.print){ // opera
	var elem = document.createElement('a');
	elem.setAttribute('href',url);
	elem.setAttribute('title',title);
	elem.setAttribute('rel','sidebar');
	elem.click();
} 
else if(document.all)// ie
	window.external.AddFavorite(url, title);
}
</script>


</head>
<body bgcolor="white" text="black" link="blue" vlink="purple" alink="red">
<table width="990" background="images/fond/fond.jpg" cellpadding="0" cellspacing="0">
    <tr>
        <td height="616">
            <table align="center" cellpadding="0" cellspacing="0" width="990">
                <tr>
                    <td width="7" height="27">&nbsp;</td>
                    
                    <td width="372" height="27">&nbsp;</td>
                </tr>
            </table>

<p>&nbsp;</p>
            <p>&nbsp;</p>
			<p>&nbsp;</p>
            <p align="right"><a href="javascript:bookmarksite('Vitrine de l\AGC', 'http://www.genea16.net/')"><span style="font-size:8pt;"><font face="Verdana" color="white">Ajouter aux favoris</font></span></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        
			<p>&nbsp;</p>
            <table cellpadding="0" cellspacing="0" width="754" align="left">
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">
                    <td width="210">
                    <p>&nbsp;</p>
                    <p><font color=blue><b>&nbsp;&nbsp;<u>Visiteurs :</u></b></p></font>
                        <p align="left">
						<?php
require_once('../../Commun/constantes.php');
require_once('../../Commun/ConnexionBD.php');
require_once('../../Commun/config.php');					
require_once("/home/genea/public_html/vitrine1/compteur/counter.php");//include

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

echo "<b>&nbsp;&nbsp;Total :</b> $c_alltime <br />";
echo "<b>&nbsp;&nbsp;Ce jour :</b> $c_today <br />";
echo "<b>&nbsp;&nbsp;En ligne :</b> $c_online";

//Info Base


	// Combien d'adhérents ?				
				$gi_nb_adherents = $connexionBD->sql_select1("select count(*) from adherent where statut IN ('".ADHESION_BULLETIN."','".ADHESION_INTERNET."')");
	// Heure & Date
				$date = date("d-m-Y");
				$heure = date("H:i");
	// Combien de X ?
	      $gi_nb_mar = $connexionBD->sql_select1("select count(*) from acte where idf_type_acte=".IDF_MARIAGE);
	// Combien de DIV ?
				$gi_nb_cm = $connexionBD->sql_select1("select count(*) from acte where idf_type_acte=".IDF_CM);		
	// Combien de Ý ?
	      $gi_nb_nai = $connexionBD->sql_select1("select count(*) from acte where idf_type_acte=".IDF_NAISSANCE);

	// Combien de + ?
	     $gi_nb_dec = $connexionBD->sql_select1("select count(*) from acte where idf_type_acte=".IDF_DECES);
	
  // combien au total		
			$gi_nb_actes_total = $connexionBD->sql_select1("select count(*) from acte");	
				
				
	?>
	
	<table width="100%">

    <tr>
      <td align="left"><div align="left">
      <p>&nbsp;</p> 
      <p>&nbsp;<strong><font color=blue><u> A ce jour :</u></font></strong></p>       
          <p><font size="2" align="center">
          &nbsp;<strong><?  Print ($gi_nb_adherents); 	                       ?></strong> 
        </font><font size="3"> </font><font size="2" align="center">adh&eacute;rents.</font></p>
		<p>&nbsp;</p>
        </div></td>
    </tr>
    </table>
	
	
 <table align="center" width="100%">
  <tr>
    <td width="100%" align="left">
    <p>&nbsp;<strong><font color=blue><u>Infos sur la base :</u></font></strong></p>
            <p>&nbsp;Actes <strong>O</strong> : <br> <?  print number_format ($gi_nb_nai,0,',', ' ');?></p>
			<p>&nbsp;Actes <strong>X</strong> : <br> <?  print number_format ($gi_nb_mar,0,',', ' ');?> </p> 
			<p>&nbsp;Actes <strong>&dagger;</strong> : <br> <?  print number_format ($gi_nb_dec,0,',', ' ');?> </p>
			<p>&nbsp;Actes <strong>CM</strong> :<br> <?  print number_format ($gi_nb_cm,0,',', ' ');?>  </p>
			<p>&nbsp;Total <strong> :<br> <?  print number_format ($gi_nb_actes_total,0,',', ' ');?> </strong> </p>
	</td>
  </tr>
  
  </table>





</p>
                        <p>&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        <p align="center">&nbsp;</p>                      
                    </td>
                    <td width="610">
                        
                        <h1 align="center">Bienvenue&nbsp;sur&nbsp;la&nbsp;vitrine&nbsp;de&nbsp;l'AGC</h1>
                        <h3 align="center">&nbsp;&nbsp;</h3>
                        <p align="center">                                                                                                     
                        <p align="left">Notre association est très heureuse de vous accueillir sur son site et vous souhaite la bienvenue. </p>
                        <p align="left">Nous avons tenu à ce que cet endroit soit un outil simple et facile pour vous permettre d’effectuer de fructueuses démarches&nbsp;à la recherche de vos ancêtres.</p>
                        <p align="left">Depuis plus de vingt cinq ans, les membres de l’Association Généalogique de la Charente sous l’égide de son Conseil d’Administration ont conjugué ensemble &nbsp;avec passion leurs efforts dans le but de construire cet espace de partage. </p>
                        <p align="left">La ténacité et le travail en équipe nous permettent de mettre à la disposition des adhérents de l'AGC des outils relativement performants :&nbsp;des relevés systématiques permettent&nbsp;maintenant de constituer une très large base de données. Cette tâche a été menée avec méthode en gardant toujours &nbsp;présent à l’esprit que nos explorations des vieux documents favorisent toujours des échanges dans le plus profond et réel sens du bénévolat. </p>
                        <p align="left">Elle n'est pas terminée, et il reste à la fois du travail à faire et de la place pour des volontaires acceptant de mettre leurs compétences au service de la communauté, dans le respect des autres, la convivialité, et pourquoi pas, l'amitié...</p>
                        <p align="right"><i><b>L'équipe AGC.</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></p>
                        <p align="left">&nbsp;</p>
                        <p align="center"><img src="images/logos/logo_AGC250.jpg" width="200" height="162" border="0"></p>

                    </td>
                </tr>
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">
                    <td width="144">&nbsp;</td>
                    <td width="610">&nbsp;</td>
                </tr>
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">
                    <td width="144" height="6">&nbsp;</td>
                    <td width="610" height="20" style="border-width:1pt; border-color:rgb(204,153,51); border-style:solid;">
                        <p align="center">&nbsp;</p>
                        <p align="center">Hommage à</p>
                        <p align="center"><a href="g.delage.php"><b><font size="4">Gabriel DEL-GE</font></b></a></p>
                        <p align="center">par Bernard BORDIER.</p>
                        <p align="center">&nbsp;</p>
                    </td>
                </tr>
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">
                    <td width="144" height="6">&nbsp;</td>
                    <td width="610" height="20">&nbsp;</td>
                </tr>
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">
                    <td width="144">
                        <p align="center"></p>
                    </td>
                    <td width="608" style="background-color:white; border-width:1; border-color:rgb(204,153,51); border-style:solid;">
                        <p style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;" align="center">&nbsp;</p>
                        <p style="line-height: 100%; margin-top: 0pt; margin-bottom: 0pt;" align="center">L'<b>AGC</b> est affiliée à&nbsp;la&nbsp;<b><a href="http://www.genefede.org/" target="_blank">FFG</a></b>&nbsp; <a href="http://www.genefede.org/" target="_blank"><img src="images/logos/ffg.jpg" width="56" height="89" border="0"></a> &nbsp;&nbsp;&nbsp;&nbsp;Voir&nbsp;aussi <a href="http://www.geneabank.com/" target="_blank"><img src="images/logos/geneabank.jpg" width="100" height="45" border="0"></a> </p>
                        <p align="center" style="line-height:100%; margin-top:0; margin-bottom:0;">&nbsp;</p>
                        <p align="center" style="line-height:100%; margin-top:0; margin-bottom:0;"><font face="Verdana"><span style="font-size:8pt;">(cliquez sur les logos...)</span></font></p>
                        <p align="center" style="line-height:100%; margin-top:0; margin-bottom:0;">&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </td>
                </tr>
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">
                    <td width="144">&nbsp;</td>
                    <td width="610">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </table>
<p>&nbsp;</p>
            <p align="center"><span style="font-size:8pt;"><font face="Verdana" color="red">&nbsp;</font></span><font color="red"><br></font><span style="font-size:8pt;"><font face="Verdana" color="red">&nbsp;</font></span></p>
            <p align="right">&nbsp;</p>
            <p align="right"><OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
 codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0"
 WIDTH=216 HEIGHT=450>
            <PARAM NAME="movie" VALUE="index2.swf">
            <PARAM NAME=menu VALUE=false>
            <PARAM NAME=quality VALUE=high>
            <PARAM NAME=wmode VALUE=opaque>
            <PARAM NAME=bgcolor VALUE=#FFFFFF>
<EMBED src="index2.swf" menu="false" quality="high" wmode="opaque" bgcolor="#FFFFFF"  WIDTH="216" HEIGHT="450" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></EMBED>
</OBJECT></p>
            <p align="right"></p>
            <p align="center"></p>
            <div align="right">
                <p align="center"><a href="plan.php"><b>Plan du site</b></a></p>
</div>

<p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <p align="center">&nbsp;</p>
            <table style="padding:7pt;" width="150" cellpadding="0" cellspacing="0" align="center">
                <tr>
                    <td width="198">

                        <p align="center"><marquee><span style="font-size:8pt;"><font face="Verdana" color="red">Dernière modification de la vitrine le <a href="maj.php">06/07/2010</a></font></span><font color="red"></marquee></font></p>
                    </td>
                </tr>
            </table>


<p align="center">&nbsp;</p>
            <div align="left">
            </div>
        </td>
    </tr>
</table>
<hr>
<p style="line-height:100%; margin-top:0; margin-bottom:0;" align="center"><b><font color="blue">Association Généalogique de la Charente</font></b><font color="blue"> &nbsp;&nbsp;24, avenue Gambetta 16000 Angoulême</font></p>
<p style="line-height:100%; margin-top:0; margin-bottom:0;" align="center"><font color="blue">Association loi de 1901 déclarée à la <b><a href="http://cnil.fr/" target="_blank">CNIL</a></b> sous le NÝ 1126454</font></p>
<p align="center"><span style="font-size:7pt;">Pour consulter ce site dans les meilleurs conditions, nous vous recommandons Firefox ou Safari et une résolution d'écran de 1024 X 768 pixels</span></p>
<p>&nbsp;</p>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15252507-1");
pageTracker._trackPageview();
} catch(err) {}</script>


</body>

</html>
