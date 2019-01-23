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

                        <table cellpadding="0" cellspacing="0" width="760" align="left">
                <tr style="margin-right:8; margin-left:5; padding:10pt; border-width:1; border-style:none;">

                    <td width="131">
                        <p align="center"><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p>&nbsp;</p>
                        <p align="center">&nbsp;</p>
                        </td>
                    <td width="629">

                        <h2 align=center>Recherche d'un mariage ou contrat de mariage(CM) dans la base</h2>
                        <p>&nbsp;</p>
                        <p><font color="red"><i>Les consultations dans cette page ne donneront des indications qu'à titre indicatif.</i></font></p>
                        <p><font color="red"><i>Pour nos adhérents, merci de vous rendre sur l'espace adhérents où vous pourrez faire des recherches plus approfondies.</i></font></p>
						<p>&nbsp;</p>
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

$gst_nom_epx = empty($_POST['nom_epx'])? '' : substr(trim($_POST['nom_epx']),0,30);
$gst_nom_epse = empty($_POST['nom_epse'])? '' : substr(trim($_POST['nom_epse']),0,30);
$gi_annee_debut = empty($_POST['annee_debut'])? '' : $_POST['annee_debut'];
$gi_annee_fin = empty($_POST['annee_fin'])? '' : $_POST['annee_fin'];
$gst_mode = empty($_POST['mode'])? 'FORMULAIRE' : $_POST['mode'];

switch($gst_mode) {
case 'FORMULAIRE':
   print("<div align=center>");
   print("<form action=".$_SERVER['PHP_SELF']." method=post>");

   print("<p style=\"font-size:8pt;\">Nom de l'&eacute;poux: ");
   print("<input type=text name=nom_epx size=20 maxlength=50");
   print("</p>");
   
   print("<p style=\"font-size:8pt;\">Nom de l'&eacute;pouse: ");
   print("<input type=text name=nom_epse size=20 maxlength=50");
   print("</p>");
   
   print("<p style=\"font-size:8pt;\">Ann&eacute;e de d&eacute;but: ");
   print("<input type=text name=annee_debut size=4");
   print("</p>");
   
   print("<p style=\"font-size:8pt;\">Ann&eacute;e de fin: ");
   print("<input type=text name=annee_fin size=4");
   print("</p>");
   print("<input type=hidden name=mode value=REPONSE>");
   print("<p style=\"font-size:8pt;\"><input type=submit value=\"Chercher\"></p>");   
   print("</form>");
   print("<p style=\"font-size:8pt;\">Le caract&egrave;re * peut remplacer un ou plusieurs caract&egrave;res dans la recherche</p>");
   print("<p style=\"font-size:8pt;\">Le nom doit comporter au moins 3 caractères</p>"); 
   print("</div>");   
   break;
case 'REPONSE':
{
   if ($gst_nom_epx!='' && strlen($gst_nom_epx) <3)
      die("Le nom de l'&eacute;poux doit faire au moins 3 caract&egrave;res");
   if ($gst_nom_epse!='' && strlen($gst_nom_epse) <3)
      die("Le nom de l'&eacute; doit faire au moins 3 caract&egrave;res");   
   $gst_requete= "select u.patronyme_epoux,p1.prenom,u.patronyme_epouse,p2.prenom,a.annee,ta.nom,a.details_supplementaires from `union` u  join `acte` a on (u.idf_acte=a.idf) join `personne` p1 on (u.idf_epoux=p1.idf) join `personne` p2 on (u.idf_epouse=p2.idf) join `type_acte` ta on (a.idf_type_acte=ta.idf) where u.idf_type_acte in (".IDF_CM.",".IDF_MARIAGE.") and p1.idf_type_presence=".IDF_PRESENCE_INTV." and p2.idf_type_presence=".IDF_PRESENCE_INTV." and ";
   $a_clauses = array();
   if ($gst_nom_epx !='') 
   {
      if (!ereg("\*",$gst_nom_epx))
         $a_clauses[] = "u.patronyme_epoux='$gst_nom_epx'";
      else
         $a_clauses[] = "u.patronyme_epoux like '".str_replace('*','%',$gst_nom_epx)."'";  
   }
   if ($gst_nom_epse !='') 
   {
      if (!ereg("\*",$gst_nom_epse))
         $a_clauses[] = "u.patronyme_epouse='$gst_nom_epse'";
      else
         $a_clauses[] = "u.patronyme_epouse like '".str_replace('*','%',$gst_nom_epse)."'";  
   }
   if ($gi_annee_debut !='' && ereg("^[0-9]{4}$",$gi_annee_debut)) 
       $a_clauses[] = "a.annee>= $gi_annee_debut";
   if ($gi_annee_fin !='' && ereg("^[0-9]{4}$",$gi_annee_fin)) 
       $a_clauses[] = "a.annee<= $gi_annee_fin";    
   $st_clauses = join(" and ",$a_clauses);
   $st_requete ="$gst_requete $st_clauses order by a.annee";
   $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
   //print_r("Req=$st_requete\n");
   $a_actes=$connexionBD->sql_select_multiple($st_requete); 

   $res_resultat=mysql_query ($st_requete) or die ("La requête a échoué : $st_requete");
   if ($connexionBD->nb_lignes()==0)
   {
      print ("<div align=center>Aucun mariage ni contrat de mariage ne correspond</div>");
   }
   else
   {
      print('<table width="599" cellpadding="0" cellspacing="0" border=\"1\">');
      print('<tr style=\"font-size:8pt;\">');
      print(join('',array('<th >Epoux</th>','<th>Epouse</th>','<th>Ann&eacute;</th>','<th >Type d\'acte</th>','<th >Informations suppl&eacute;mentaires</th>')));
      print('</tr>');
      foreach ($a_actes as $a_acte)
      {
         list($st_patro_epx,$st_prn_epx,$st_patro_epse,$st_prn_epse,$i_annee,$st_type_acte,$i_details_supplementaires)=$a_acte;
         print('<tr style=\"font-size:8pt;\">');
         $st_details = $i_details_supplementaires==0? "Pas de d&eacute;tails suppl&eacute;mentaires" : "Informations suppl&eacute;mentaires disponibles (<a href=\"../doc/Adhesion.pdf\">Adh&eacute;rer</a>)";
         print(join('',array_map("vers_td",array("$st_prn_epx $st_patro_epx","$st_prn_epse $st_patro_epse",$i_annee,$st_type_acte,$st_details))));
         print('</tr>');
      }
      print('</table>');
   }
   
   print("<form action=".$_SERVER['PHP_SELF']." method=post>");
   print("<input type=hidden name=mode value=FORMULAIRE>");
   print("<p style=\"font-size:8pt;\"><div align=center><input type=submit value=\"Retour\"></div></p>");   
   print("</form>");

}
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
