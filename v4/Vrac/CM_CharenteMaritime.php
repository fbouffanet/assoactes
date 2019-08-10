<?php
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('<title>Actes en vrac AGC: CM de Charente Maritime</title>');
print("</head>");

print("<body>");
print('<div class="container">');
//print("Vous etes authentifi&eacute; :-)<br>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$connexionBD->ferme();
?>

<div class=Section1>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></i></b></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'>Les</span></u></i></b><b><i><u><span
style='font-size:8.0pt'> </span></u></i></b><b><i><u><span style='font-size:
14.0pt'>Charentais.</span></u></i></b><b><i><u><span style='font-size:8.0pt'><o:p></o:p></span></u></i></b></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'>Ils sont venus se
marier en Charente Inférieure.</span></u></i></b><span style='font-size:10.0pt'><o:p></o:p></span></p>

<p class=MsoNormal><u><span style='font-size:10.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></p>

<p class=MsoNormal><u><span style='font-size:10.0pt'>Contrats de mariages
relevés par les bénévoles de Charente Maritime dont Joëlle DESHOUX,
Viviane Bachelier et Jean Pierre CHAMBERY<o:p></o:p></span></u></p>

<p class=MsoNormal><u><span style='font-size:10.0pt'>Triés et saisis par René
MACAUD.<o:p></o:p></span></u></p>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>

<p class=MsoNormal>Dates des relevés&nbsp;: 13/02/2006, 11/05/2006, 08/06/2006,
29/09/2006, 31/12/2006,14/06/2007,11/10/2007, 30/12/2008, 04/01/2009,
01/02/2009, 04/02/2009.<span style='color:red'><o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SORLIN Pierre et
Etienne. Etude à St Jean de Liversay 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l3 level1 lfo13;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/14. CM 14/11/1706 Nuaillé d’Aunis 17. X
     10/12/1706 Nuaillé 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Pierre de Bertrand et
+ DAGNAR Anne<span style='color:red'>.Ý village de Daignes / Exideuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOLLAE Elisabeth de Mathurin
et + PETIT Marie. dt Suiré = St Jean de Liversay 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/9. CM 04/09/1746 St Sauveur de Nuaillé 17.
     X 26/09/1746 St Sauveur 17.<b><o:p></o:p></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CARTRON Pierre de + Denis et
RONDEAU Jeanne<b>. Ý </b><span style='color:red'>St Vincent de Puymoyen 16</span>.
dt St Sauveur d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETIT Anne ( veuve RECHUS
Jean ) . dt St Sauveur 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/12. CM 29/05/1756 St Sauveur d’Aunis 17. X
     14/06/1756 St Sauveur 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RIVIERE Jean dit VILLARD de Michel
et BROUSSE Louise.Ý <span style='color:red'>St Claud 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SIVADIER Marie Jeanne de
André et MERCIER Jeanne. dt St Sauveur 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHAURAY Pierre.
Etude à Benon 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/45. CM 08/09/1752. X 25/09/1752 Benon 17.<b><o:p></o:p></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VEAUTOUR Laurent ( veuf
RIBEYRES Isabeau ) . Ý <span style='color:red'>Roussine 16</span>. dt Benon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BABIN Elisabeth ( veuve PETIT
Jean ) dt Benon 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PETIT Jacques.
Etude à Benon 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/63. CM 28/03/1790. X 03/03/1790 le Gué
     d’Alleré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLETEAU Jean de + François
et + POIRIER Marie. Ý <span style='color:red'>Villejoubert 16</span>. dt Virson
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEJA Marie Catherine ( veuve
THIBAUD Jean et JOUBERT Pierre ) de + Pierre et VINCONNEAU Marie.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHALLOU XX. Etude
à Vouhé 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/75. Promesse 29/12/1756. CM 09/02/1757. X
     07/02/1757 Vouhé 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUQUINET Jean de Jean et
DEBORDE Marie. <span style='color:red'>Ý Mansle 16.</span> dt Ferrières 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINET Marie Magdeleine de +
Antoine et + MASSON Anne. Vouhé 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOUSSAUD Pierre.
Etude à Courçon 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/131. CM 07/08/1753. X 17/08/1753 Courçon
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BIROT Pascal de Joseph et
MATHIEU Marie.Ý <span style='color:red'>Gourville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Elisabeth de + Nicolas
et SERIS Magdeleine. Courçon 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire JULLIOT Jean.
Etude à Courçon 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/146. Promesse 03/04/1793.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUTERTRE François de François
et + COSTE Marie. Ý <span style='color:red'>St Pierre Rouillac 16</span>.dt
Mortagne la Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELMOND Catherine Elisabeth
de Pierre et BOURDEAU Marie. Ý Thairé d’Aunis 17. dt Courçon 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 17/145. Promesse 05/06/1791. X 26/01/1792 Le
     Gué d’Alleré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MAZEROLLE Jean de Pierre et
RIVET Marie. <span style='color:red'>Ý Manot 16</span>. dt Le Gué d’Alleré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LUNEAU Marie Anne de +
Jacques et PLANSON Jeanne. Ý et dt Le Gué d’Alleré 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GALLARD Charles.
Etude à Aulnay 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/218. CM 03/02/1766.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUDIN Jacques de + Jacques
et + BOURGUE Marie.Ý <span style='color:red'>Longré 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOUTEAU Marguerite de Daniel
et MARTIN Marie. Cherbonniéres 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 105/171. CM 21/02/1778.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNAUD François de Henry
Auguste et MERLAUT Jeanne.Ý <span style='color:red'>Pleuville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ARNAUD Catherine Clémence de
Jean et + BONNAUD Catherine. Aulnay 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 105/169. CM 16/11/1773.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PERDRIAU Pierre de Jean et +
SAUVAGE Catherine<span style='color:red'>. Ý Courbillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAFFERON Marie de Antoine et
PAPILLAUD Jeanne. Villemorin 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GRATIA Pierre.
Etude à Dompierre / Boutonne 17.</span></b><span style='font-size:10.0pt'><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/277. CM 23/05/1694 Dompierre / Boutonne .<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FABUREAU Antoine de + Jean et
BRUHERE Michelle.Ý <span style='color:red'>Isle d’Espagnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Marye de Jean et
ROUSSEAU Catherine. Dompierre / Boutonne 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/277. CM 05/06/1693 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FABUREAU Jacques ( veuf
ROBERT Jeanne ) <span style='color:red'>.Ý Isle d’Espagnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MUREAU Louise ( veuve
CHAUSSEPIED XX ) de Jacques et GERFEAU Marie. La Villedieux 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/278. CM 13/11/1695 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LOTTES Jacques ( veuf
NOURIGEON Jeanne ) de + Louis et ROUSSEAU Françoise. Ý <span style='color:red'>Ligné
79.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VESDEAU Claude ( veuve PINEAU
Michelle ) de François et DEVEZIN Louise. St Séverin / Boutonne 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/289. CM 16/11/1723 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARSAULT Vincent de +
François et + RUTIN Catherine. Dompierre / Boutonne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LHERILEAU Louise de François
et ROUHAULT Marguerite<span style='color:red'>.Ý Montignac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt left 390.75pt'><span
     style='font-size:10.0pt'>3 E 27/312. CM 06/11/1791 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='tab-stops:390.75pt'><span style='font-size:10.0pt'>RATIER
François ( veuf RAFFIN Anne )<span style='mso-spacerun:yes'>  </span>de + Jean
et FREMON Jeanne. Ý<span style='color:red'>Chassenon 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='tab-stops:390.75pt'><span style='font-size:10.0pt'>ALLIS
Marie de Jacques et BOUHIN Marie. St Georges de Longuepierre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/285. CM 01/12/1715 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RESMOND Jacques Louis de
Pierre et CHAUVEAU Jeanne<span style='color:red'>.Ý Ligné 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUIN Louise ( veuve DHE
Etienne ) de Michel et MURZEAU Antoinette. Blanzay / Boutonne 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BENOIST René.
Etude à Dompierre / Boutonne 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3<sup> </sup>E 27/307. CM 16/02/1767 Dompierre /
     Boutonne 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLE Pierre de + Gabriel et
+ MARTIN Marguerite. Ý <span style='color:red'>Rouillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VESDEAU Marie de Pierre et
NAZET Jeanne. St Georges de Longuepierre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt left 390.75pt'><span
     style='font-size:10.0pt'>3 E 27/308. CM 13/06/1772 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='tab-stops:390.75pt'><span style='font-size:10.0pt'>MOULINIER
Léonard de + Mathias et + LEMBERT Marguerite. Ý <span style='color:red'>Exideuil
16<o:p></o:p></span></span></p>

<p class=MsoNormal style='tab-stops:390.75pt'><span style='font-size:10.0pt'>COYNAUD
Jeanne de Jean et MOUNIER Marie. Dompierre / Boutonne 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt left 390.75pt'><span
     style='font-size:10.0pt'>3 E 27/312. CM 06/11/1791 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='tab-stops:390.75pt'><span style='font-size:10.0pt'>RATIER
François ( veuf RAFFIN Anne )<span style='mso-spacerun:yes'>  </span>de + Jean
et FREMON Jeanne.Ý <span style='color:red'>Chassenon 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='tab-stops:390.75pt'><span style='font-size:10.0pt'>ALLIS
Marie de Jacques et BOUHIN Marie. St Georges de Longuepierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire FROMY Pierre.
Etude à Dompierre / Boutonne 17<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/378. CM 03/05/1745 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBOUIN Morice de + François
et + GROUX Catherine.Ý <span style='color:red'>Bonneville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PARION Catherine de Jean et
MAYE Jeanne. St Martial 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/377. CM 27/01/1744 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHATAGNIER François de + René
et + CHEVALLEAU Catherine. Ý <span style='color:red'>Brettes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DE VERTEUIL Marie Angélique
de François et DE VERTEUIL Angélique. Coivert 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/373. CM 11/12/1735 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAILDRAT Pierre de Etienne et
BRUNETEAU Jeannette<span style='color:red'>.Ý St Bonnet 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSEAU Jeanne de Antoine et
+ BAILLIF Charlotte. Villeneuve la Comtesse 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/387. CM 15/08/1763 Dompierre / Boutonne
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MORICE Jean de + Jean et +
JANEAU Renée. Ý <span style='color:red'>St Laurent des Combes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOINE Marie de Pierre et
PARIS Marie. St Martial 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire FROMY Louis
Alexandre. Etude à Coivert 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l30 level1 lfo9;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 27/389. CM 23/02/1767.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ITHYER François de Nicolas et
+ LACLORIS Suzanne.Ý <span style='color:red'>Aigre 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAUVERGNAT Marie de Jacques
et JOULAIN Louize. Dampierre / Boutonne 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire RIVAUD Jean. Etude
à St Martin de la Coudre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l23 level1 lfo8;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/168. CM 07/06/1651.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHARRUYAU Pierre ( veuf
BONHOMME Marie ) <span style='color:red'>.Ý Verteuil / Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNIOT Perrine ( veuve
DUSSON Pierre ) . Le Tablier 85&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire ROUSSEAU Etienne. </span></b><b><span
lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>Etude à Bernay St
Martin 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l23 level1 lfo8;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 43/173. CM
     21/10/1670.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAAGE Pierre de + Jean et
VARACHE Jeanne. Ý <span style='color:red'>Montignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSIGNOL Anne de
Honoral<span style='mso-spacerun:yes'>  </span>et MOTHU Jeanne. Lozay 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l23 level1 lfo8;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/171. CM 19/11/1663.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PAILLE Pierre de + Pierre et
+ BOURGEOIS Catherine<span style='color:red'>.Ý St Bonnet 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERRIER Jeanne de Adam et +
BONNAUD Catherine. Migré 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GIRAUD Louis.
Etude à Courant 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l23 level1 lfo8;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/186. CM 15/01/1748.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BON Jean de + Pierre et +
VALLANTIN Françoise.Ý <span style='color:red'>Orgedeuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JONCHERE Marie de Joseph et +
GRAVOUIL Marie. Courant 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l23 level1 lfo8;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/179. CM 12/11/1722.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUYER François de + François
et + JUDE Suzanne.Ý <span style='color:red'>St Amant 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PUREAU Marie de Jacques et
PARIS Jeanne. Courant 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BERTIN Jean. Etude
à La Benate 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l14 level1 lfo4;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/266. CM 28/12/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NICOLLAS Jean de Heslie et
+<span style='mso-spacerun:yes'>  </span>DESVARENNES Suzanne<span
style='color:red'>.Ý St Claud 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSE Marguerite de Jean et
BAILLIF Catherine. La Croix Comtesse 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/265. CM 19/07/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VERDON Jean de + Jean et
BARREAU Jeanne<span style='color:red'>.Ý Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEREAUD Louise de Jean et
COMPTE Jeanne. St Loup 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BIGOT Jacques.
Etude à La Croix Comtesse 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E43/286. CM 17/05/1785.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ANDRE Joseph Arnaud de +
Gabriel et DUPUY Elizabeth. Ý<span style='color:red'>Fontenille 16 ou 79&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DE HAUTEFOYE Thérèse de Sébastien
et + PROVOST Anne. Villeneuve la Comtesse 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E43/286. CM 03/05/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SERVANT Mathias de + Louis et
BERNARD Jeanne<span style='color:red'>.Ý St Bonnet 16&nbsp;?.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COCHET Marie de Pierre et
MICHEAU Elizabeth. Vergne 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PALLARD Louis.
Etude à Villeneuve la Comtesse 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/294. CM 08/02/1685.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUCAULT Jean de + Anthoine
et BOURSIER Marguerite. Ý <span style='color:red'>St Fraigne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MURZEAU Jeanne ( veuve
LIADOUZE Simon ) de Phelippe et<span style='mso-spacerun:yes'> 
</span>ARCHAMBAUD Jeanne. Coivert 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BEGAUD François et
Michel. Etude à Aigrefeuille 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/3. CM 12/06/1712.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LELON Léonard de + Pierre et
MOREAU Léonarde. Ý Haute Marche, Limouzin. dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Jeanne ( veuve MOREAU
Pierre ) de Abraham et MARTEAU Catherine. Ý <span style='color:red'>Treuil
Robin en Angoumois 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/3. CM 08/09/1702. X 20/10/1702 Aigrefeuille
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PELLETIER Isaac ( veuf
BRIZARD Suzanne ) dt St Médard 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CISTY Marie de Jean et
BISLEAU Marie. <span style='color:red'>Ý Barbezieux 16</span>. dt Aigrefeuille
17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire FAURIE Pierre,
grand père, père et fils. Etude à Aigrefeuille 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/10. CM 27/04/1740. CM 30/05/1740 Landrais
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLARD François de Jean et
COURRAUX Magdeleine. Ý <span style='color:red'>Maine de Boixe 16</span>. dt
Landray 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NORMANDIN Jeanne de + Jean et
GIRAUD Marye. Landray 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/10. CM 31/07/1740. X 20/10/1740
     Aigrefeuille 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ANCELIN François de Jean et
SESAC Jeanne. Ý <span style='color:red'>Torsac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Jeanne de + Claude
et + DAVID Marie Anne. dt Aigrefeuille 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 114/4&nbsp;?. Promesse 15/05/1752. CM
     27/06/1752. X 27/06/1752 Landrais 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BENESTEAU Pierre de Pierre et
PETIT Marguerite. Ý <span style='color:red'>Moulidar 16</span>. dt Ardilliéres
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RABIET Marie Marguerite de +
François et + BAUDOUIN Marie. dt Landrais 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/21. CM 09/01/1755. X 03/02/1755
     Aigrefeuille 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BUSSEROLLE Jean de Jean et +
YRVOIX Magdeleine<span style='color:red'>.Ý Champniers 16.</span> dt
Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAPITRAUD Suzanne ( veuve
RONDARD Pierre ).<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/25. CM 28/10/1761. X 23/11/1761 Forges 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHERANSAC François de +
François et BRAUD Magdeleine.Ý <span style='color:red'>Luxé 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NAULLET Marie Anne Elisabeth
de + Jean et CAILLAUD Marie Anne. Forges 17. dt Aigrefeuille 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/40. CM 16/05/1780. X 10/05/1780
     Aigrefeuille 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIDET Jean de Jean et LUCAS
Marie<span style='color:red'>. Ý Villejésus 16</span>. dt Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marguerite ( veuve
BOUCHERIE Pierre ) . dt Aigrefeuille 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/23. CM 09/01/1758. X 09/01/1758 Thairé 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEDOUX Pierre de + Antoine et
+ THIBAUD Marie. Ý <span style='color:red'>Voulgezac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORIN Jeanne Marguerite de +
Pierre et + CHATEAU Marguerite. Le Thou 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/24. CM 15/07/1759.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PARIOT François de Léonard et
DUCQ Marie. Ý <span style='color:red'>Montignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GELLE Marguerite ( veuve
BENESTEAU Jean ) . dt Ballon 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/10. CM 25/06/1741. X 17/07/1741
     Aigrefeuille 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POIRIER Martin de + Pierre et
FAURE Marguerite.Ý <span style='color:red'>St Martin de Jauldes 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Suzanne ( veuve
GABORIT Philippe ) . Aigrefeuille 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 45/42. CM
     18/01/1785. X 18/01/1785 Thairé d’Aunis 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>THURON Jean ( veuf JANNEAU
Jeanne ) de + Jacques et XX<span style='mso-spacerun:yes'>  </span>Catherine. Ý
<span style='color:red'>Villognon 16.</span> dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Jeanne de + Jacques et
RICHAUME Marguerite. Ý Aigrefeuille 17. dt Thairé 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/44. CM 11/05/1789. X 13/07/1789 Chambon
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VINSONNEAU Jean de Pierre et
+ LAMBERT Catherine. Ý <span style='color:red'>Chaigné 16.</span> dt
Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Marie de François et
ROUSSEAU Jeanne. dt Chambon 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MUSSET René
Pierre. Etude à Aigrefeuille 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/57. CM 20/05/1803. X 24/05/1803 Forges 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Jean de Jean et BESSON
Anne. <span style='color:red'>Ý Moulidars 16.</span> dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBOINEAU Marie Céleste de +
Jacques Mathurin et THOMAS Marguerite Angèle. dt Forges 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/56. CM 03/06/1792. X 25/06/1792
     Aigrefeuille 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUDON Pierre de + Jacques
et CORNU Suzanne. Ý <span style='color:red'>Mouzon 16&nbsp;?.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUD Jeanne de + Jean et
COUTINOT Catherine. dt Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MESNIER Pierre.
Etude à Ballon 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/82. CM 01/02/1773. X 01/02/1773
     Ardillières 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESLAURIERS François de +
Jean et + ROUYER Elisabeth.Ý <span style='color:red'>Ruelle 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BURGAUD Suzanne de + André et
CORLIEU Marguerite. Ardillières 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/79. CM 25/05/1762. X 25/05/1762 Ballon 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAILLY Louis de + Guillaume
et DANY Marie. Ý <span style='color:red'>Genouillac 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SERVANT Marguerite de Antoine
et REGNAUD Marie. Ballon 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/79. CM<span style='mso-spacerun:yes'> 
     </span>27/04/1756. X 03/05/1756 Ballon 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEGRAND Pierre de Pierre et
ROUCHER Marie. <span style='color:red'>Ý Bret 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Marguerite de +
Pierre et + GAUDIN Marie. Ý Ballon 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/81. CM 09/11/1772. X 09/11/1772 Ballon 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MAQUET Pierre de + Pierre et
+ MICHEAU Florence. Ý <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RACAUD Jeanne. de + Estienne
et + RAYNETEAU Jeanne. Le Thou 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/80. CM 28/04/1772. X 28/04/1772
     Ardillières 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MATIGNON Jean de + Jean et
JANNEAU Marguerite. Ý<span style='color:red'>Ligniéres 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBREAUD Marie Thérèse de
Charles et + MAGNEN Marie. Ardillières 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/84. CM 22/07/1782. X 22/07/1782 Le Thou
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NICOLET Jean de + Jean et
TEXIER Roze. Ý <span style='color:red'>Torsac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPEAU Jeanne ( veuve RACAUD
Jean ). Le Thou 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/80. CM 07/04/1767.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RAYTEAU Jean de + Jean et
SAUVIGNON Marie. Ý <span style='color:red'>Brie / Chalais 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOYNET Elisabeth de + Jacques
et PLAINEAU Marie Anne. Ballon 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MILLET<span
style='mso-spacerun:yes'>  </span>XX. Etude à Aigrefeuille 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/80. CM 19/06/1763. X 01/08/1763 Forges 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUX Jean de + François et
PELOQUIN Marguerite. Ý <span style='color:red'>Villiers en Lairon 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Marie Jeanne de René
et BRANDAIS Suzanne. Ý et dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BONNIN Louis.
Etude à Surgères 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/104. CM 13/07/1789. X 13/07/1789 Surgères
     St Pierre 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AUGERON René de René et
MANIANT Anne. Ý <span style='color:red'>St Fraigne 16</span>. dt Surgères<span
style='mso-spacerun:yes'>  </span>St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BIRAUD Marie Marthe de +
Pierre et TAROT Madeleine. dt Surgères St Pierre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/105. CM 16/11/1801.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>REIGNIER Jean de + GUILLAUME
ET ROUHET XX. <span style='color:red'>Ý St Amant de Boixe 16</span>. dt
Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAYLE Marguerite ( veuve
AUDET Jean Thomas ) . dt Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHASTIN XX. Etude
à Laleu et Salles/Mer 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 45/113. CM 05/07/1773. X 05/07/1773 Angoulins
     17.<span style='mso-spacerun:yes'>    </span><o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUET Charles Louis de Louis
et JOYAUD Marie Thérèse. Ý <span style='color:red'>Villejésus 16. </span>dt
Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAYNAT Marie Elisabeth (
veuve COCHET Etienne ) . dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PICARD<span
style='mso-spacerun:yes'>  </span>XX. Etude à St Jean de Liversay 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 47/11. CM 28/06/1800.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PIERRE Jean de Jean dit Denis
et BOILETREAU Marie. Ý <span style='color:red'>Bouteville 16</span>. dt St Jean
de Liversay 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSONNET Françoise ( veuve
PETIT Jacques ) . dt Luché 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 47/12. CM 07/12/1803. X 24/11/1802 St Jean de
     Liversay 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VAURY Jacques de + Jean et +
JOUSSOUME Catherine<span style='color:red'>.Ý Taizé 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTRONNEAU Marie Anne de Guy
et + HILAIREAU Louise. Ý et dt Luché 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire YVONNET Jean père
et fils. Etude à La Rochelle et Marsilly 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/138. CM 17/01/1629.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ARNAULT Gabriel de Arnault et
GAILLICHER Marguerite. Ý Cros en Auvergne 63.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COCUAU Jehanne de + Michel et
CLEMANCEAU Marguerite. <span style='color:red'>Ý Etriac 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/136. CM Protestant 10/04/1621.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CAVIER ( QUAVIER ) Jacques de
Simon et SICARD Marie. Ý<span style='mso-spacerun:yes'>  </span><span
style='color:red'>Salles ( Lavalette&nbsp;? ) 16</span>. dt Nantilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHUSSEAU Marie de + Jehan
et + TAILLIFAIT Jeanne. Ý Nantilly 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/144. CM 30/06/1647.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CRESTIEN Jehan de + Jehan et
PONTIER&nbsp;? Marie. Ý <span style='color:red'>Longré 16</span>. dt Marsilly
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRISSEAU Barthélémie de
Jacques et OGRIL Michelle. Ý Marsilly 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/143. CM 21/04/1641.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DEMAZIERE Jehan de Jean et
JOYEUSE Marie. Ý <span style='color:red'>Paizay Naudoin 16</span>.dt Nantilly
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOLTAS Marie de + François et
+ BRUNET Jehanne. Ý La Sauzaye / St Xandre 17. dt Nantilly 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/138. CM 11/02/1629.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUBOIS Jehan de Sornin et
PASSEREAU Marie. Ý <span style='color:red'>Angoulême 16</span>.dt Esnandes 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIRTON Marie de Pierre et
MARSEAU Marie. Ý Esnandes 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/136. CM 28/05/1621.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GOYAUX Mathurin de + Jehan et
SEGUINAULT Françoise. <span style='color:red'>Ý Nonanville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Marie ( veuve
ARNOULT Jehan ). dt Longèves 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/146. CM 03/02/1656. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEJEULNE Antoine de Paul et
GAULTIER Estelle. Ý <span style='color:red'>Sonneville 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESCHIN Marie de + Pierre et
GERMAIN Marie. Ý Nieul / Mer 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/148. CM 26/05/1661.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Jehan de Jehan et +
CAFILLE&nbsp;? Jehanne. Ý <span style='color:red'>Londigny 16.</span> dt
Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Michelle ( veuve
BARBOT François ) . dt Marsilly 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/140. CM 23/11/1630.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PELLOQUIN Jacques de + André
et PETIT Marguerite. Ý L’Isle Bouchard 37. dt St Xandre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COCUAU Marguerite de + Michel
et + CLEMENCEAU Marguerite<span style='color:red'>. Ý Estiac 16</span>. dt
Nantilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DE SAINT
CHRISTOPHE Pierre. Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/150. CM 23/04/1623. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COMPAIN Jacques. Ý <span
style='color:red'>St Fragne en Saintonge 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLOT Tiffaine ( veuve
MOUSNIER Noël ) . St Médard 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/150. CM 22/05/1622.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUSY Jean. <span
style='color:red'>Ý St Estèphe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLON Marie ( veuve OGER
Michel ). La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/150. CM 21/04/1622.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GODEAU Mathurin.Ý <span
style='color:red'>St Luc en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSE Marguerite ( veuve
PELISSON Jean ) . Salles 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/150. CM 18/04/1622.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MALHERBE Mathurin .Ý <span
style='color:red'>St Sixte en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOILEAU<span
style='mso-spacerun:yes'>  </span>XX ( veuve VALLON Daniel ). La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/150. CM 25/06/1623.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RENIER Pierre de + Jehan et +
PORTAIS Anne<span style='color:red'>.Ý Prignacq 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUILLERON Mathurine de +
Marsillacq et + PINET Marguerite. St Christophe 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/150. CM 11/01/1623.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SAUVESTRE Joachim<span
style='color:red'>.Ý St Cybardeau 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORIT Marie ( veuve SIGNOT
Charles ). Breuil la Réorte 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOREAU Pierre.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/256. CM Protestant 21/01/1651. X
     22/01/1651 Le Temple à Villeneuve La Rochelle 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BEAUFRETON Hélie de + Jacques
et FOURNIER Jehanne. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PARIER / PARIS Catherine de +
Pierre et MARTIN Jehanne. Ý <span style='color:red'>Villiers paroisse de Ruffec
16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/244. CM 25/11/1640.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSON Jehan de + Mathurin et
+ GUILLON Julienne. Ý <span style='color:red'>Barret 16</span>. dt La Rochelle
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORET Giraude ( veuve BERNARD
Jacques ) de + Jean et GAYE Louise. Ý St Léon 33. dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/247. CM 21/12/1643. X 25/01/1644 La
     Rochelle St Bartélémie 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHARD Gabriel de + Michel
et + COYTEUX Marthe. Ý <span style='color:red'>Villefagnan 16. <o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COULTRET Ozanne ( veuve
RULLET Antoine et VREDON François ) dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/238. CM Protestant 18/09/1633. X
     01/10/1633 Le Temple La Rochelle 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHARTRON Jehan de + Robin et
+ BOUHIER Marie. Ý Montpellier.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIGOIZARD Jehanne ( veuve
FUMAT Pierre ) de + Ozéré et DUCANDAT Judith. Ý et dt <span style='color:red'>Jarnacq
16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/241. CM 24/08/1637.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUSSON Julien de + Denis et
+ MARTIN Catherine. Ý <span style='color:red'>Chille près d’Aigre 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROLLAND Suzanne ( veuve
GAIGNIER René )de + Abel et AUBOYNEAU Marguerite. Ý et dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/257. CM 09/08/1653 . X 19/08/1653 La
     Rochelle Ste Marguerite 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COUSTURIER Jehan<span
style='mso-spacerun:yes'>  </span>( veuf MILLASSEAU Marguerite ) de + Jehan et
ROY Guyonne. Ý <span style='color:red'>Natrice en</span> <span
style='color:red'>Angoumois 16.</span> dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRIMAUD Suzanne de Jacques et
GODEFROY Jacquette. Ý Lardilliére 85.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/248. CM 11/09/1644.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FRANCOIS Jehan de Pierre et +
JOLLY Catherine. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THERESE Léonarde de +
Berthoumé et MESLIER Catherine. Ý<span style='color:red'>Bournet&nbsp;? en
Angoumois 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/240. CM 29/05/1635.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FROUIN Jehan de + Fiacre et
ALLEBERT Marguerite. Ý <span style='color:red'>Vars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENTILZ Guillemette de
Nicolas et + MAYNARD Jehanne. Ý Tanzac 17. dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/258. CM 24/05/1654. X 02/06/1654 La
     Rochelle St Jean du Pérot 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAU Nicolas de + Jehan et +
ROBICHON Marie. Ý Daubredu&nbsp;? en Bretagne. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>QUANTIN Marguerite de + Jehan
et DEYSOMMEAUX Michelle. <span style='color:red'>Ý Cougnat 16.</span> dt La
Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/254. CM 18/04/1649. X 12/05/1649 La
     Rochelle / St Jean du Pérot 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HAY Jean de Alexandre&nbsp;?
et CARRE XXX. Ý <span style='color:red'>Angoulesme 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NORMANDIN Renée de Jacques et
DANIAU Marie. Ý Dompierre / Mer 17. dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/247. CM 03/05/1643.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HERISSON Nicolas de+ Nicolas
et + GRIER Perrette. Ý Rouen. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GINDRAT Jeanne de Pierre et
MARTYNEAU Jehanne.Ý <span style='color:red'>Cougnat 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/255. CM Protestant 08/05/1650. X
     15/05/1650 Le Temple à Villeneuve La Rochelle 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POURRAGEAU François de Pierre
et + MARTIN Françoise.Ý <span style='color:red'>Villefagnan 16</span>. dt La
Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHESNEAU Marie de + François
et BRUN Jehanne. Nalliers 85. dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/249. CM 10/03/1645.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Pierre de + François
et + PETIT Jehanne. Ý <span style='color:red'>Tusson 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESCHAMPS Pasques de +
François et BEAU Catherine. Echiré 79.dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOREAU Pierre.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/266. CM Protestant 17/06/1662. X
     18/06/1662 Le Temple Villeneuve La Rochelle 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COLLESSON Isaacq de Pierre et
RIVIERE Marthe. <span style='color:red'>Ý Tonnins&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BURETEL Ester de + Pierre et
RAFFOU Marie. Ý et dt La Rochelle 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/263. CM 10/11/1658.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESFORGES Louis de + Pierre
et ORGEREAU&nbsp;? Françoise Ý Rompsay. dt <span
style='mso-spacerun:yes'> </span>La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITTON Marie de + Charles et
BUREAU Andrée Ý <span style='color:red'>Chalais 16</span>. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DE SAINT
CHRISTOPHE Charles. Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/270. CM 15/06/1642.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MELLE Jacques de Jehan et
NEBAULD Perrine.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLON Perrine de Joseph et
BILLAUDEAU Perrine. Ý <span style='color:red'>Bernac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/270. CM 11/03/1641.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Daniel de Jehan et
PINET Jehanne. Ý <span style='color:red'>Villefagnan 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAGUERRE Marie de + Jean et
TOURLET Marie. St Médard 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHARDON<span
style='mso-spacerun:yes'>  </span>XXX .Etude à Vérines 17<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/285. CM 19/08/1646. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POUGNAN Charles de + Charles
et + DAVID Catherine. Ý <span style='color:red'>Verdille 16</span>. dt Croix
Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VEILLON Marthe de + Joachim
et AUVINET Marthe. dt La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DELAUNAY Jean.
Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/291. CM 27/08/1653.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SIRAUD Jean de Jean et +
BOSSELET Françoise. Ý <span style='color:red'>Montmoreau 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DECOURT Marguerite de Vincent
et PASCAUD Marie. St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GUIANNE Michel.
Etude à La Jarrie 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/326. CM 07/06/1668.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LOGAY François de Pierre et +
ALBERT Renée. Ý <span style='color:red'>St Amant 16 ou 79</span>. dt La Jarie
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PISQUET Jeanne de Etienne et
+ DAVIGNON Jeanne. dt La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/328. Promesse 08/09/1680.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUET Jean de + François et +
PIVEAU Marie. Ý <span style='color:red'>St Amant Boisse 16</span>. dt La Jarrie.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTHIER Marie de Etienne et
FAYE Catherine. La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/327. CM 25/08/1671. X 12/02/1672 La Jarrie
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>UZEREAU Louis de + Gabriel et
+ DUBOIS Perrine. Ý <span style='color:red'>Chalinne en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSARD Marie de + Pierre et
GUILLOT Marie. dt La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/306. CM 15/06/1656.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VOIX Jean ( veuf NEAU
Marguerite ).Ý <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNET Marie de + Martial et
+ VIOLLEAU Anne.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GUILLAUDEAU
Pierre. Etude à Fontpatour et St Coux 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/372. CM 20/01/1678 X 11/02/1678. Ste
     Soulle 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CRAIPEAU Jean ( veuf THIBAULT
Renée ). Ý <span style='color:red'>La Chaise en Poitou 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SURBAILLAU Catherine ( veuve
GOT Jean ). Ý St Médard 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BONNET Pierre.
Etude à Dompierre / Mer 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/393. CM 08/02/1674.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ARRENAUD François de +
François et PARET Anne. Ý <span style='color:red'>St Amant de Nouère 16</span>.
dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JACOB Anne de Simon et +
COLDEROY Jacquette. dt<span style='mso-spacerun:yes'>  </span>Dompierre / Mer
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/<span style='mso-spacerun:yes'>   
     </span>. CM 05/07/1688. X 09/08/1688 Dompierre / Mer 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLOCHON Jean de Jean et
BERTAUD Marie. Ý <span style='color:red'>Aigre 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Anne de + Abel et
DURET Marie ( xx GILBERT François )<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/393. CM 13/06/1674. X 23/07/1674.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUHIER Jean de + Léonard et
GRIFFON Marie. dt Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAUDEAU Marie de +
François et + CHAUVET Marie. Ý <span style='color:red'>La Chaise 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/393. CM 08/01/1674.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Jacques de Gabriel
et + CAILLE Anne. Ý <span style='color:red'>Verteuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PALLET Renée de + Jullien et
+ NESSIN Paulette.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/393. CM 21/06/1674. X 03/07/1674 Dompierre
     / Mer 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Jacques de Gabriel
et + CAILLE Anne. Ý <span style='color:red'>Verteuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUDRIN XX de + Jean et +
DUPUY Jeanne. dt Dompierre / Mer 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/395. CM. 14/04/1689.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RULLIER Jean de + Jean et +
DELAROCHE Marie. Ý <span style='color:red'>Criteuil en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEGUIN Magdeleine de +
François et + MOLLEAU Elisabeth. dt St Laurent de la Prée 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BRISSON François.
Etude à St Xandre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/420. CM 25/06/1681 X 25/06/1681 St Xandre
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DALLINIER Jean de Jean et
DELAVAULT Michelle. Ý <span style='color:red'>en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOURESTIER Magdeleine de +
Hellie et + RIVAULT Marie. St Xandre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/420. CM 05/08/1685 X 17/09/1685 Dompierre
     / Mer 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSIOT Anthoine ( veuf
MOUGEON Marguerite ) de + Martin et MALVAUD Berthommée. Ý <span
style='color:red'>Salles en</span> <span style='color:red'>Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSON Marthe ( veuve HERAULT
Jean ) de + Jean et GABORIT Anne. Dompierre / Mer 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/420. CM 23/04/1684 X 15/05/1684 Dompierre
     / Mer 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RUPPIN Pierre de + Jean et +
CAILLE Jeanne<span style='color:red'>.Ý Salles en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COSSON Elisabeth de François
et + BALLANGER Perrine. ) Dompierre / Mer 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/420. CM 03/06/1685 X 25/06/1685 Dompierre
     / Mer 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RUPPIN Pierre ( veuf COSSON
Elisabeth ) . Ý <span style='mso-spacerun:yes'> </span><span style='color:red'>Salles
en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>OLLEREAU Gabrielle de Jean et
BRINCAISTE Catherine. Ý Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DELAUNAY Charles.
Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/423. CM
     07/03/1678. X 16/01/1679 St Médard 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CATHERINEAU Grégoire. Ý <span
style='color:red'>Genac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GODEAU Marguerite de + Pierre
et MOULLAIN Marguerite. St Christophe 17.<span style='mso-spacerun:yes'> 
</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/428. CM
     25/04/1683. X 25/10/1683 St Christophe 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MALNAUD Jean de + Léonard et
+ BOUQUINET Marguerite. Ý <span style='color:red'>St Amant de Boixe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARDIN Marie de + Jacques
et CROUE Catherine.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire COUTANT Louis.
Etude à St Xandre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/451. CM 19/10/1670. X 03/02/1671 St Xandre
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CLERTEAU Nicolas de + Jean et
REGUINDEAU Marguerite. Ý St Xandre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RALUIT Jeanne de + Mathurin
et MARIONNEAU Louise.Ý <span style='color:red'>La Chéze en Poitou 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/451. CM 19/04/1671.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RAGOT Henry de Pierre et +
BARBON Marie<span style='color:red'>. Ý Salle en Poitou 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAZIN Esther de + François et
+ BREAU Suzanne. Ý Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire TASSIN Pierre.
Etude à St Xandre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/472. CM 07/01/1691. X 26/02/1691 Marsilly
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MAROT Jacques de Pierre et
AURICHE Françoise. Ý <span style='color:red'>en Angoumois 16</span>. dt
Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAILLET Marie ( veuve
BELOTTEAU François ) . dt Marsilly 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/465. CM 25/06/1684. X 23/07/1684 St Xandre
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RALLE Guillaume de + Pierre
et BROUILLIN Marguerite. Ý <span style='color:red'>Garde en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TURGNIER&nbsp;? Jeanne<span
style='mso-spacerun:yes'>  </span>( veuve ROUSSEAU Pierre ) . dt St Xandre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/467. CM 24/03/1686.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUCHE Pierre de + Pierre et
NIGOT Jeanne. Ý <span style='color:red'>en Angoumois 16</span>. dt St Xandre
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ARRENAUD Perrine de +
Mathurin et MERCIER Jacquette. Ý La Réorte en Poitou . dt St Xandre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/461. Promesse 13/06/1680. CM 15/07/1680. X
     15/07/1680 St Xandre 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Jean de + Jacques et
DUPAS Marie. St Xandre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHERIE Marie de + Louis et
+ MESNARD Françoise.Ý <span style='color:red'>St Fraigne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DINET Salomon.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/483. CM Protestant 04/06/1679.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Pierre de + Pierre et
+ SAUTREAU Françoise.Ý <span style='color:red'>Villefagnan 16</span>. dt
Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FRAIGNEAU Anne de + François
et + GUILLOT Marie. Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SAUVESTRE
Mathurin. Etude à Vérines 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/497. CM 14/01/1698. X 09/02/1698 Vérines
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FLAUX Pierre de + Denis et +
LAVOISSIERE Françoise. Ý <span style='color:red'>Courcome 16</span>. dt Vérines
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORISSET Françoise ( veuve
JOUINEAU Jean ). dt Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BABIN Jean. Etude
à Croix Chapeau 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/525. CM 12/03/1689. X 03/02/1689 La Jarrie
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUAU Jacques de + Pierre et
NOMMION&nbsp;? Catherine.Ý <span style='color:red'>Faye en Angoumois 16</span>.
dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BODON Jeanne de Nicolas et +
PATRE Anne.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/525. CM 03/04/1689. X 16/08/1689 Croix
     Chapeau 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RANON Pierre de Jacques et
MEREAU Anne. Ý <span style='color:red'>St Amand 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUBAN Catherine de Jean et
AUVINET Marie. dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MERCIER Jean.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3<sup> </sup>E 59/547. Promesse 18/01/1690.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLAUD Jean de Pierre et +
Toinette&nbsp;? . Ý Chabosse en Dauphiné. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JARNYGOY Marie de Pierre et +
BOTIN&nbsp;? Catherine. Ý <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/576. CM 23/05/1686. X 10/06/1686 La
     Rochelle St Sauveur 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNET Estienne de + Jacques
et XXX Françoise. Ý <span style='color:red'>Rufecq en Poitou 16</span>. dt La
Rochelle St Sauveur 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DURAND Anne de + Louis et
COUCHE&nbsp;? Marguerite. Ý <span style='color:red'>Rufecq16</span>. dt La
Rochelle St Sauveur 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/552. CM 15/05/1695. X 07/07/1695 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAPPEAU André de François et
MACAUT Marie. Ý et dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAZEAU Jeanne de + Jean et
DUBOIS Ozanne.<span style='mso-spacerun:yes'>  </span>Ý <span style='color:
red'>en Angoumois 16</span>. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/551. CM 04/02/1694. X 22/02/1694 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESCHAIZE Jean veuf (
FAUNAREY Marie ) de + Louis et XX Marie. Ý <span style='color:red'>en Angoumois
16</span>. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTAYER Marie de + René et
PENIGAUD Thomasse. Ý Loizé 79. dt La Rochelle Notre Dame 17.<span
style='color:red'><o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/557. CM 04/05/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUBLAN Jean<span
style='mso-spacerun:yes'>  </span>( veuf RANGER Suzanne ). dt La Rochelle Notre
Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>REIGNER Marie de Jean et
FUMON Thoinette. Ý <span style='color:red'>du Roulet en Angoumois 16</span>. dt
La Rochelle St Jean 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/576. CM 03/06/1686. X 25/06/1686 . La
     Rochelle St Barthèlèmy 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ESTIER Michel de
Germain&nbsp;? et DUPOND Marguerite. Ý <span style='color:red'>en Angoumois 16</span>.
dt La Rochelle St Barthèlèmy 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOLLET Marie de Mathurin et
JEAN Toinette. Ý Migré 17. dt La Rochelle St Barthèlèmy 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3<sup> </sup>E 59/554. CM 27/10/1697. X
     04/11/1697 La Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span>FRAIGNEAU Jacques de + Jean et PRENUREAU
Renée. Ý <span style='color:red'>en Angoumois 16</span>. dt La Rochelle Notre
Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FANEAU Marguerite (veuve
BARTHELEMY Jacques et THINNEAU Nicolas). dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/551. CM 14/08/1694. X 13/09/1694 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HUBERT Jean de + François et
RIGAUD Marie. Ý <span style='color:red'>Paizay Naudouin 16</span>. dt La
Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUILLAUD Catherine de + Jean
et MONJAULT Judith. Ý Loiré en Aunix 17. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/576. CM 06/01/1688.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGNEN François de Barthèlèmy
et JOUBERT Toinette. Ý <span style='color:red'>Luce en Angoumois 16</span>. dt
St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VINECEAU Marie ( veuve XXX
Mathieu<span style='mso-spacerun:yes'>  </span>et DOUMEAU Jean ). dt St Vivien
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/577. CM 06/01/1692. X 11/02/1692 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Jean de + Jean et
BOUHIER Françoise. Ý et dt Lagord 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELABROUSSE Suzanne de + Jacques
et CLAIREFEUILLE Laurence.Ý <span style='color:red'>en Angoumois 16</span>. dt La
Rochelle Notre Dame 17. <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/551. CM 26/06/1694. X 06/07/1694 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PENIGAUD Pierre de Izacq et +
JUSMOND Elisabeth. Ý <span style='color:red'>Londigny 16</span>. dt La Rochelle
Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRELLET Françoise de + Pierre
et BOURCIQUIN Cathrine. Ý St Jean en l’Isle d’Oléron 17. dt La Rochelle Notre
Dame 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/557. CM 07/12/1700. X 12/01/1701 La
     Rochelle St Sauveur 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SEILLIER Jean de + Bernard et
VIDAL Toinette. Ý <span style='color:red'>St Martin en Angoumois 16</span>. dt
La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLIER Elisabeth de + Moïse
et JAQUE Elisabeth. Ý et dt La Rochelle St Sauveur 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/577. CM 01/05/1691. X 28/05/1691 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Jean de + Marcq et
DAVID Marie. Ý <span style='color:red'>en Angoumois 16</span>. dt La Rochelle
Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITTON Michelle de François
et + BAJETEAU Renée. Ý La Réorte en Bas Poitou 17. dt La Rochelle Notre Dame
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/547. Promesse 04/03/1691. x 18/06/1691 La
     Rochelle Notre Dame 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>THEROUDE Pierre de Gédéon et
+ ROYER Marie. Ý Coivert 17. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SALAIZE Catherine de + Annet
et JOUHOT Geneviève. Ý <span style='color:red'>en Angoumois 16</span>. dt La
Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DEBEDIANT Salomon.
Etude à Andilly 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/658. CM
     17/06/1694. X 27/11/1694 St Médard 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COCQ Jean de + Antoine et +
GOURY Marie. Ý <span style='color:red'>Chasseneuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPEAU Jeanne de + Jean et +
GUYON Mathurine. dt St Médard 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/680. CM 26/01/1696. X 22/02/1696 Andilly
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GORRY Jean<span
style='mso-spacerun:yes'>  </span>( veuf GASDREAU Marie ).Ý <span
style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PROUET Marie ( veuve
DEBOUDHIER Pierre ).<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DESAYVRE Izaac. Etude
à St Xandre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/704. CM 02/03/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAROT René de Jean et +
SAITPON Jeanne.Ý <span style='color:red'>Paizay Naudouin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOIREAU Marguerite ( veuve
LEVECQUE Daniel ). St Xandre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/704. CM 08/04/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TILLARD Jean de + Pierre et +
MENENTEAU Mathurine. Ý <span style='color:red'>St Marseau de Challais 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>METEREAU Marie ( veuve
RENLEAU Jullien ). Lusson 85.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LANGE Maixent.
Etude à Andilly, La Rochelle, Dompierre / Mer 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/780. CM 25/05/1721. X 18/06/1721 Nieul /
     Mer 17..<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DIET Mathurin de + François
et + RIPEAU Marie. Ý <span style='color:red'>Ligniére 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VRIGNEAU Françoise ( veuve
ANCELIN Jean ). dt Nieul / Mer 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/780. CM 07/12/1721.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TRANCHET Louis de + Jean et +
ASSISE Renée. Ý <span style='color:red'>St Fraigne 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ACAUD Catherine de + René et
DESCHAMPS Louise. Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DELAUNAY Jean
Charles. Etude à Montroy et St Médard 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/829. CM
     17/06/1733. X 15/06/1733 St Christophe 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS Jean de + Cybard et +
GRANGER Elisabeth. Ý <span style='color:red'>Biracq 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GROS Marie de + Isaac et
GILBERT Anne. dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire TAYAU André. Etude
à Clavette 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/844. CM 04/02/1727. X 25/02/1727 Clavette
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BECHADE Jean de Jean et PANIER&nbsp;?
Marguerite. Ý <span style='color:red'>Angoulême St Maurice 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POUNIANT Françoise de Alexis
et + ROY Marie. Fontenay le Comte Notre Dame 85.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/857. CM 26/11/1753. X 01/02/1754 Clavette
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTEAU Jean Baptiste ( veuf
MORIN Catherine ) . dt Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMENSEAU XX de + Jean et +
GAILLANT Marie. Ý <span style='color:red'>en Angoumois 16</span>. dt Clavette
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/ 842.CM 02/05/1725. X 14/05/1725 Clavette
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUHYER Jacquesde + Jacques
et FAY Jeanne. Ý <span style='color:red'>Teil Rabier 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Catherine ( veuve
PASQUIER Estienne ) . dt Clavette 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/856. CM 24/12/1752. X 05/03/1753 Montroy
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MONDION Jean de + Jean et +
MONDION Marie. Ý <span style='color:red'>La Faye en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPPEAU Marianne de + Pierre
et + PICARD Suzanne. dt Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DESAYVRE Pierre
Jacques. Etude à St Xandre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/861. CM 01/01/1725. X 12/02/1725 Marsilly
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHET Pierre de + Jean et
GABORIT XX . Ý en Poitou. dt Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BECHOIS Jeanne de + Jullien
et GENDRON Marie.Ý <span style='color:red'>Fay en Poitou 16</span>. dt Marsilly
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/876. CM 17/09/1740. X 11/10/1740 St Xandre
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHERBONNEAU Jean de +
Toussaint et + CORBIERRE Jeanne. <span style='color:red'>Ý Marsaq 16</span>. dt
Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRARD Marie Marguerite
Charlotte ( veuve ETIEN Antoine ) . dt St Xandre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/866. CM 07/08/1730. X 21/05/1731 Marsilly
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINAUD Charles de Jean et +
GARNIER Catherine. <span style='color:red'>Ý St Sulpice en Angoumois 16</span>.
dt Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBAIN Marie de + Jean et
CHAGNEAU Marie. Ý Vix 85.dt Marsilly 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/863. CM 08/06/1727.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Jean de + Jacques et
LASUR Marie.Ý <span style='color:red'>Jarnacq 16</span>. dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CONTANT Marie de + Jacques et
BRUN Marie. Ý Le Boupère 85. dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DINET Charles.
Etude à Bourgneuf 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=DE style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:DE'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=DE style='font-size:10.0pt;
mso-ansi-language:DE'>3 E 59/902. CM 20/11/1732. X 16/02/1733 Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TASTEBOIS Pierre de Jacques
et + BIGOT Marguerite. Ý <span style='color:red'>Juillac 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOTHET Catherine de + Louis
et CHERBONNEAU Marie. Ý et dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PELLIGNEAU XX.
Etude à Bourgneuf 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/945. CM
30/11/1750. X 16/02/1751 Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEZEAU Jean Clément de +
Pierre et + PEREAU Magdeleine. Ý <span style='color:red'>en Angoumois 16</span>.
dt Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETIT Marie de + Pierre et +
BERNIER Marianne. dt Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHAUVET Léon Louis.
Etude à St Christophe 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/989. CM
29/04/1771.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANGIBEAU Pierre de + Jean et
RASSET Françoise<span style='color:red'>. Ý Herpes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUET Elisabeth de Gabriel et
CHAIGNEAU Jeanne. La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/952. CM 13/06/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Pierre de + Charles
et + GREAUD Marie.Ý <span style='color:red'>Bayers 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARDEAU Jeanne de Gabriel
et + THEULLE Marie. Thairé d’Aunis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/968. CM 29/04/1750.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span>CHAPRON Jacques de Pierre et RULLIER Jeanne<span
style='color:red'>.Ý Mainxe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUHAUD Marie Jeanne de
Pierre et BRILLOUET Jeanne . Anais 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/973. CM 02/12/1755. X 09/02/1756.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHERBONNIER Pierre de Jacques
et BODY Catherine. Ý <span style='color:red'>Châteauneuf / Charente 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHARRAUD Louise de Louis
François et + GIRARD Marie. Virson 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/963. CM 31/01/1745.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FROMENTIN Pierre de +
François et + LABARDE Antoinette.Ý <span style='color:red'>St Gourson 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUGEON Marianne de François
et + BOUTIER Anne. St Médars d’Aunis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/964. CM 13/01/1746.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUIN Pierre de + Pierre et
ARNAUD Marie.Ý <span style='color:red'>Gensac la Pallue 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PENEAU Marianne de Gabriel et
+ ANCELAIN Louise. St Médard d’Aunis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/968. CM 03/02/1750.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTINEAU Antoine de Jean et
SORILLET Jeanne<span style='color:red'>.Ý Moulidars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTINEAU Anne de Charles et
PIGEONNIER Anne. La Jarrie 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/981. CM 07/05/1764.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOURRIER Philippe de +
Philippe et MARCHAND Marie.Ý <span style='color:red'>La Chapelle 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPEAU Marie Jeanne ( veuve
MAZEL Jacques ) . St Médard d’Aunis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/954. CM 29/01/1736.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NEVEUR Jean de + Jean et +
PINETEAU Jeanne.Ý <span style='color:red'>St Estèphe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GEFFARD Marie de Jean et +
OLLEREAU Elisabeth. Voutron / Yves 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/955. CM 14/07/1737.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NEVEUR Jean ( veuf GEFFARD
Marie ) .Ý <span style='color:red'>St Estèphe 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAUPETIT Louise de Jean et
DURANDET Françoise. Mortagne la Vieille 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/962. CM 23/01/1744.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINEAU François de + Pierre
et + ROUGIER Jeanne. Ý <span style='color:red'>Barro 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>REGNOU Suzanne de Pierre et
PENAUD Marie. St Christophe 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/971. CM 01/07/1753.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SABIRON Jean de Antoine et
GASTIGNOLLE Marie. Le Gué d’Alleré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TERRA Jeanne de Jean et +
NORRIGEON Jeanne.Ý <span style='color:red'>Villejésus 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/955. CM 13/01/1737.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SICARD Jean de + Jean et
MIAUD Marie.Ý <span style='color:red'>La Magdeleine 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GEFFARD Catherine de Jean et
+ OLLEREAU Elisabeth. Voutron / Yves 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/957. CM 25/10/1739.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span lang=EN-GB style='font-size:10.0pt;mso-ansi-language:
EN-GB'>SICARD Jean ( veuf GEFFARD Catherine ). </span><span style='font-size:
10.0pt'>Ý <st1:PersonName ProductID="La Magdeleine" w:st="on"><span
 style='color:red'>La Magdeleine</span></st1:PersonName><span style='color:
red'> 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUGAUD Marie de Jean et + BE
Jeanne. Thairé d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DINET Jean
François. Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/1003. Promesse 13/03/1746.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RAJONON&nbsp;? Pierre ( veuf
PERAUD Elisabeth ) Ý <span style='color:red'>Piasse<span
style='mso-spacerun:yes'>  </span>en Angoumois 16</span>. dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DORNAS&nbsp;? Marguerite. (
veuve DESCHAMPS Pierre ). dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire RULLIER Jean le
jeune. Etude à Thairé d’Aunis 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/1021. CM 20/01/1752.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLITON François de François
et PERROT Françoise<span style='color:red'>.Ý Manot 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUDET Anne ( veuve
MAUPETIT Daniel ) . Voutron / Yves 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1007. CM
05/05/1737.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLARD Jean de + Pierre et
COLLIN Marie.Ý <span style='color:red'>Balzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAINE Suzanne de Jean et
FAUREAU Marie. Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1026. CM
19/02/1756.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNET Jean de + Jean et +
SICARD Renée.Ý <span style='color:red'>Embourie 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIST Marie de Jacques et +
CAILLAUD Jeanne. Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1009. CM
13/09/1739.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUDOIGNON Pierre de Jacob et
DURAND Jeanne.Ý <span style='color:red'>Bassac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUDOIGNON Henriette de Jean
et AUBINAUD Marguerite. Ciré d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1026. CM
27/06/1756.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FORNOU Etienne de + Jean et
THOMAS Marie.Ý <span style='color:red'>Mouthier / Boëme 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGNANT Marie de Pierre et +
BLAIS Marie. Ardilleux 79.<span style='color:red'><o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1024. CM
29/12/1754. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GALMON Jean de + Charles et
BIDET Françoise.Ý <span style='color:red'>St Médard Barbezieux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BELLINEAU Marie Marguerite de
Antoine et MICHO Marguerite. Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1026. CM
14/11/1756.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GODINEAU Pierre de Pierre et
GILLOT Jeanne.Ý <span style='color:red'>Mallaville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Marianne ( veuve
GIRAUD Jean )de Antoine et BOURDIN Anne. Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1026. CM
25/01/1756.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LOT Pierre de + Pierre et
SAUVETERRE Marie.Ý <span style='color:red'>Bessac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANGEVIN Marie ( veuve GOUJAUD
Pierre ) de Jacques et + PICOT Hélène. Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1022. CM
10/09/1752.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MONTEXIER Jacques de +
Jacques et LEUREAU Marie<span style='color:red'>.Ý Gondeville 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JARRY Marie de Henry et +
BOURDIN Marie. Ciré d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1024. CM
04/05/1754.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLAIN Pierre de + Nicolas
et + BONVALET Marguerite. Ý <span style='color:red'>Balzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUGE Jeanne ( veuve MAUPETIT
Daniel ) Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire RULLIER Jean.
Etude à Bourgneuf 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1057. CM 08/06/1768.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BUROLLEAU Jean de + Jean et +
BERGER Marie. Ý <span style='color:red'>Villefagnan 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AVRARD Marie de Jean et +
BRUN Jacquette. St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1049. CM
19/10/1760.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUCAS Jacques de + François
et + CHAIGNE Marie.Ý <span style='color:red'>St Amant de Boixe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JANVRET Marie Anne de
François et GILLEBERT Marie. Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1055. CM
11/02/1766.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUMIER Pierre de Jean et +
GONTIER Marie.Ý <span style='color:red'>Echalat 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITTON Catherine de Pierre
et + ANCELLAIN Elisabeth. Bourgneuf 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1051. CM
07/01/1762.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETIT de la CONFRETT…….de +
Jacques et + DAVESON Marie Magdeleine.Ý <span style='color:red'>Gourville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FROMENT Henriette ( veuve
LEYMARIE XX ). Bourgneuf 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PLESSIS Jullien.
Etude à Dompierre / Mer 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1085. CM
25/08/1769. X 10/10/1769 Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BIAIS Jacques de Pierre et +
BOINARD Elisabeth. <span style='color:red'>Ý St Cibardeau 16</span>. dt Ste
Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETIT Louise de + Jean et
ANDRE Anne. Ý et dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1084. CM
31/05/1768. X 31/05/1768 La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLON Jean de André et
CREMON Marie. <span style='color:red'>Ý St Front 16</span>. dt La Rochelle
Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Magdeleine de +
Jacques et BONNEST Magdeleine. Ý Aytré 17. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1090. CM
07/01/1770. X 29/01/1770 Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSONNET Jean de + Louis et
ROBIN Catherine. <span style='color:red'>Ý Ste Mary en Angoumois 16</span>. dt
Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHARIAUD Elisabeth de + Louis
et FOUBERT Marguerite. Ý et dt Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1066. CM
16/08/1750.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MENU François de + François
et + BARREAU Catherine. Ý <span style='color:red'>Derausau&nbsp;? en Angoumois
16</span>. dt Dompierre / Mer 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUSNIER Magdeleine ( veuve
RATEAU Jean ) dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>3 E 59/1090. CM 26/09/1770. X
02/10/1770 La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PALLAT Estienne de Paul et +
MALIN Marie. Ý <span style='color:red'>Gourville 16</span>. dt Dompierre / Mer
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MERCIER Olive de Estienne et
BORIT Jeanne. Ý St Etienne d’Ars , île de Ré 17. dt La Rochelle Notre Dame 17<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PIRAULT François.
Etude à St Christophe 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E 59/1106. CM 09/02/1754. X 26/02/1754 St Christophe
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BECHADE Léonard de + Louis et
+ VIPPE&nbsp;? Marie. <span style='color:red'>Ý Marillac 16.</span> dt St
Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LIGNERON Anne de + Jean et
BEGAUD Jeanne. Ý et dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E 59/1123. CM 30/04/1771. X 27/05/1771 St Christophe
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRIMAUD Pierre de + Jean et
BENET Jeanne. <span style='color:red'>Ý St Romain d’Aubeterre 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARLANGEON Marie Anne de +
Jean et MOREAU&nbsp;? Magdeleine. Ý et dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1125. CM
28/06/1773. X 12/07/1773 Bourgneuf 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAYNARD Jean de + Jacques et
MICHELLE Catherine. Ý <span style='color:red'>Tissé la Forêt 16</span>.dt
Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JUTTEAU Marie de + Louis et
BENETEAU Elisabeth. Ý Clavette 17. dt Bourgneuf 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DESAYVRE Jean
Isaac. Etude à St Xandre et La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1143. CM
31/03/1761. X 31/03/1761 Marsilly 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Lambert ( veuf
RICHARD Marguerite ) . dt Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRETON Jeanne de Jean et
BOUHIER Marie. Ý <span style='mso-spacerun:yes'> </span><span style='color:
red'>St Sulpice près Cognac 16</span>. dt Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1144. CM
21/06/1762. X 21/06/1762 Marsilly 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Pierre de + Pierre et
NAUDIN Anne<span style='color:red'>.Ý Rouillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NAUDON Jeanne de + François
et GAGNET Françoise. Ý et dt Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1145. CM
02/01/1763. X 01/02/1763 Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PRIOLEAU Pierre de + Pierre
et MORIN Jeanne. <span style='color:red'>Ý St Cybardeaux 16</span>. dt St
Xandre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARANGER Jeanne ( veuve
BRUMEAU Laurent ). dt Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHASTEAU Marc
André. Etude à Bourgneuf et Vérines 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1211. CM 06/01/1801.
X 29/01/1801 Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUTILLIER Jean de François
et + MELLANGE Françoise. Ý <span style='color:red'>Brie 16.</span> dt La
Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIST Louise de + Jean et +
Gaborit marie. Ý et dt Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LAMBERT Jean
Jacques. Etude à La Jarrie et Clavette 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1245. CM 19/01/1796.
X 19/01/1796 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERRIN Jean de Jacques et
RIFFAUD Jeanne. Ý Taugon / La Ronde 17. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSICOT Marie de + Jean et
FERJOT Marie. Ý <span style='color:red'>Foussignac 16</span>.dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1222. CM
05/09/1773. X 06/09/1773 Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SORLIN Jean de Pierre
François et BOUSSIRON Marie Anne. Ý <span style='color:red'>Ste Radégonde en le
Petit Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SAUDILLAUD de la COURT Marie
Victoire de + Daniel et BEGAUD Louise.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOREAU François.
Etude à Salles / Mer 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1255. CM
14/01/1777.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSELIER François de +
Charles et +<span style='mso-spacerun:yes'>  </span>COURIVEAU Marie<span
style='color:red'>.Ý Oradour Fanais 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MACHETEAU Félicité de Jean et
BOISFREAU Marguerite. Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1262. CM
24/11/1784.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HOSPITET Jacques de Jean et
MENAINGE Catherine<span style='color:red'>.Ý St Fort / Né 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FERCHAUD Suzanne de Jean
Nicolas et POTONNIER Marie Jeanne. Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1262. CM
23/02/1784.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERROQUIN Cosme de Rocq et
PILLORGE Marie.Ý <span style='color:red'>Ste Colombe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRASSET Catherine de Jacques
et FEUILLET Jeanne. Mortagne la Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1263. CM
15/06/1785.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Jacques de + Charles et
BERTON Marie .Ý <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHARAUD Marianne Louise (
veuve CAILLAUD André ) St Médard d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SORLIN Jean. Etude
à Bourgneuf 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1264. CM
17/05/1772.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FENIOU Jean dit DUJARDIN de +
Rémond et FROMANTIN Anne. Ý <span style='color:red'>en Angoumois 16</span>. dt
Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAUFITE Suzanne ( veuve
GOULARD Félix )de + Louis et BOUTET Suzanne. dt Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1267. CM
27/04/1775. X 31/05/1775 Rochefort St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GORICHON Jean de Jean et
DEVIGNE Marie. <span style='color:red'>Ý St Estève 16</span>. dt Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLAUD Marie Anne de Louis
et LEGROS Jeanne. dt Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 59/1265. CM
30/04/1773.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HOSPITEL Jean de Jean et +
HOSPITEL Jeanne. Ý <span style='color:red'>St Fort 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUX Henriette Magdeleine de
François et BLANCHARD Catherine.Ý Cougnes / La Rochelle 17.dt Bourgneuf 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CHAUVET Louis
Magdeleine. Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/1300.
     CM 01/07/1782. X 02/09/1782 St Christophe 17.<b><i><u><o:p></o:p></u></i></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MALTERRE Louis ( veuf BENOIT
Anne Thérèse ) . dt Dompierre / Boutonne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIRAUD Léonarde de + Jean et
LAMBERT Marie. Ý <span style='color:red'>Montmoreau 16.</span> dt St Christophe
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/1332. CM 22/06/1787. X 19/11/1787 Ste
     Soulle 17.<b><i><u><o:p></o:p></u></i></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VIVIEN Pierre Philippe de +
Philippe et TESSEREAU Marie.Ý <span style='color:red'>Pesay Audouin 16</span>.
dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GASTEAU Marie de François et
GUYENNET Anne. dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LANDRIAU Nicolas.
Etude à Ste Soulle 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/1332. CM 29/06/1787.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VIVIEN Pierre Philippe de +
Philippe et TESSEREAU Marie. Ý <span style='color:red'>Paizay Naudouin 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GASTEAU Marie de François et
GUYENNET Anne. dt Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BARBOTIN Jacques
François. Etude à St Xandre 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/1355. CM 19/08/1787. X 17/09/1787 Nieul /
     Mer 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSEAU Daniel de Jean et
BOURDEAU Catherine. Ý <span style='color:red'>St Laurent des Combes 16</span>.
dt Nieul 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUINEAU Magdeleine de
Jacques et + BUSSEAU Marie Anne. Ý et d Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BECHAUD Jean.
Etude à St Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/1375.
     Promesse 21/01/1804. CM 09/02/1804 St Christophe 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CRETE Jean de Jacques et
THOURIN&nbsp;? </span><span lang=EN-GB style='font-size:10.0pt;mso-ansi-language:
EN-GB'>Marguerite. Ý <span style='color:red'>Echallat 16.</span> dt St
Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIT Marie de + Pierre et +
GARRAUD Jeanne. Ý et dt St Christophe 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/1371.
     Promesse 27/06/1800. X 20/09/1800<span style='mso-spacerun:yes'> 
     </span>St Christophe 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MENOCHEAU Jean de + Pierre et
ROUSSEAU Marie. Ý <span style='color:red'>Sambre / Charente&nbsp;? 16</span>.
dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURNEAU Marie de + Jean et
CAILLETEAU Jeanne. Ý Le Langon 85. dt St Christophe 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 59/1368.
     CM 21/11/1796. X 21/11/1796 St Christophe 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Simon de + René dit
DANJOU et + NICOLAS Marie. Ý <span style='color:red'>Beaulieu canton<span
style='mso-spacerun:yes'>  </span>St Claud 16</span>.dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DURAND Marie de David
François Bruno et MAILLOCHEAU Jeanne. dt St Christophe 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire COLLONIER François
Joseph. Etude à La Jarrie 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/1398. CM 06/06/1803. X 23/06/1803 Mortagne
     la Vieille 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHARTIER Pierre ( veuf COLLIN
Marie ) de Jacques et SERVANT Françoise. <span style='color:red'>Ý Sur……16.</span>
dt Mortagne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BELIN Marie Magdeleine. (
veuve CHAURAY Pierre ) de Mathurin et BONNIN Marie. Ý Aigrefeuille d’Aunis 17.
dt Mortagne 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PUGEAU Jean. Etude
à La Jarrie 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/34. CM
10/09/1714. X 20/11/1714 Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIJONNIER Izaac ( veuf ROUX
Françoise ) . Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PARIS Marguerite de + Jean et
XX .Ý <span style='color:red'>Villaigneau en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire COLLONIER
Toussaint. Etude à Croix Chapeau 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/113 – 115.
CM 19/06/1746. X 06/02/1747 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDOYER Louis de + Pierre et
+ JOUSSEAULME Marie. Ý <span style='color:red'>en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTET Marie de Charles et
MARTIN Anne. Chambon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/98 – 99.
CM 11/06/1730. X 03/07/1730 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLAUD Simon de + Simon et
POINTHIER Anne. Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUICHARD Catherine de + Jean
et + BERTON Magdeleine <span style='color:red'>.Ý Jensac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/126 – 127.
CM 21/09/1758. X 30/10/1758 Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BLOUIN Jean de + François et
+ RAYMOND Antoinette. Ý <span style='color:red'>Jaulde 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAULT Marie Anne ( veuve
JEAN Pierre ).<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/ 110 –
112. Promesse 26/05/1744. CM 10/11/1744. X 10/11/1744 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAIGNEAU Pierre de + Pierre
et BOUCHE Marie. <span style='color:red'>Ý Challignac 16</span>. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHASTAGNER Catherine de +
Antoine et + DOUSSET Marguerite. Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/ 110 –
112. CM 04/07/1743. X 29/07/1743 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GARNAUD Jacques de + François
et + LABORDE Marie. <span style='color:red'>Ý St Groux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUSSE Marie de + Pierre t
GARRAUD Marie. La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/105 – 106.
CM 27/011738. X 27/01/1738 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JEANNET Jeande Jean et +
DAVID Catherine.Ý <span style='color:red'>Chavenat 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNEAU Louise ( veuve XXX
Michel ) <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/122. CM
24/011754. X 21/01/1754 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAROT Jean de Charles et
BRUNEAU Elisabeth. Ý <span style='color:red'>Selette 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRIGOU Marie de Pierre et
BARILLON Marie. Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/102 – 104.
CM 06/05/1736. X 07/05/1736 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NADEAU Etienne de + François
et PALLUT Mrie Anne.Ý <span style='color:red'>Faille en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FIZEUNE Françoise de + Denis
et GIGET Catherine. <o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/ 113 –
115. CM 23/10/1747. X 20/11/1747 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEROT Pierre de Antoine et
BOUFINIER Marie.Ý <span style='color:red'>Chadurie 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSARD Marie ( veuve
POIRAUD Louis ). Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/ 116.
Promesse 25/02/1748.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROCHE Antoine de + Pierre et
+ CORNEAU Jeanne.Ý <span style='color:red'>Vindelle 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUFFARD Françoise ( veuve
SEGUIN François ) . Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/107 – 109.
CM 06/12/1741. X 6/12/1741 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEGUIN François de + Pierre
et BOISMIER Marguerite.Ý <span style='color:red'>Rouillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUFFARD Françoise de +
Estienne et BILLEAU Françoise. Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/120. CM
26/11/1752. X 00/03/1753 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TRIBOT Antoine de + François
et + TESSEREAU Nicole.Ý <span style='color:red'>Exideuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAURAIS Anne ( veuve BOUCARD
Michel ) Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/117. CM
07/04/1749. X 06/05/1749 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VIAUD Simon de Jean et
COUPRIE Suzanne. <span style='color:red'>Ý Mainfonds 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURGET Marie de Charles et
FOUCHER Louise. Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/107 – 109.
CM 15/11/1741.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VIOLLET Pierre de Pierre et
ROUGIER Antoinette. <span style='color:red'>Ý St Groux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARDON Magdeleine ( veuve
MARTINEAU Michel ).<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/ 110 –
112. CM 26/03/1742. X 28/04/1742 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>YVON Pierre de Jean et +
JOUBERT Marie.Ý <span style='color:red'>St Laurent des Combes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTIER Marie ( veuve
BOUFFARD Michel ) . Croix Chapeau 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire COLLONNIER
Toussaint. Etude à La Jarrie 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/182. CM
09/11/1794. X 17/11/1794 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBINNEAU Jean de + François
et SIMON Anne. <span style='color:red'>Ý Marsac 16.</span> dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TETRON Catherine de + Jean et
DURAND Marie. Ý et dt Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/190. CM
26/12/1802.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Laurand de Laurant et
TINGAUD Marguerite. Ý <span style='color:red'>St Marc 16</span>. dt Croix
Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUFFARD Marieanne de Louiqs
et RAVON Marie. Ý et dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/177. CM
08/01/1790. X 09/02/1790 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BESSON Jean ( veuf CHAILLOU
Marie ) de Pierre et LEVEQUE Marie. Ý <span style='color:red'>Ligniéres 16</span>.
dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOLLIT Elisabeth de Jean et SAVIN
Catherine. dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/184.
Promesse 31/01/1797. X 12/02/1797 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BINNET Pierre de Jean et
BERNARD Marie. Ý et dt <span style='color:red'>Lachaise 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SIMON Magdeleine de + Léonard
et GIGAULT Marie. Ý et dt La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/177.
Promesse 02/02/1790.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLAUD Jean de + Jean et
LATREUILLE Marie. Ý <span style='color:red'>Villejésus 16.</span> dt Croix
Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Marie de + Jean e
PINET Marianne. Ý Bouet 17. dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/186. CM
10/01/1799. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESMOTTES Barthélémy ( veuf
BILLAUD Jeanne ) de<span style='mso-spacerun:yes'>  </span>Jacques et +<span
style='mso-spacerun:yes'>  </span>DANIAU Marie.Ý <span style='color:red'>Ste
Sévére 16</span>. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GARNIER Thérése ( veuve
ROUSSET Louis ) de + Pierre et BRAUD Marieanne. Ý La Jarrie 17. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/179. CM
26/07/1792. X 24/09/1792 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRENET Anthoine ( veuf
FAVREAU Marie ) de + Pierre et CHALET Marguerite. Ý <span style='color:red'>Pézé
Naudouin 16</span>.dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARGAT Marie ( veuve
LAMOUREUX Pierre ) . dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/187. CM
18/04/1800. X 20/05/1800 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MENADEAU François de +
François et GRATEAU Marie. Ý <span style='color:red'>Moullidars 16.</span> dt
Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGOT Eugénie de + Pierre et
ROYAUD Elisabeth. Ý CroiX Chapeau 17. dt La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/188. CM 27/12/1800.
X 29/12/1800 Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOTARD Félix de Michel et
PINEAU Marie. Ý <span style='color:red'>Rouillac 16</span>. dt Croix Chapeau
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHANSON Thérése de Pierre et
JANVRET Françoise. Ý Clavette 17. dt Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/190. CM
23/11/1802.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NORMAND Armand de + Anthoine
et BERGERON Jeanne. <span style='color:red'>Ý Moulidar 16</span>. dt La Jarrie
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CREUGNET Marguerite de +
Gabriel et RAVRON Marie Anne. Ý Salles / Mer 17. dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/176. CM
11/05/1789. X 06/06/1789 Croix Chapeau 17. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PENEAU Félix ( veuf JOLLIT
Catherine ) de Pierre et ROBERT Anne. Ý <span style='color:red'>Rouillac 16</span>.
dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROYAUD Marie de Michel et +
ROY Anne.dt Croix Chapeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 64/174. CM
19/05/1787. X 23/05/1787 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEVELIT Jean ( veuf VERT
Thérése Marie )de + Jacques et BERGE FrançoiseÝ <span style='color:red'>Aigre
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIST Magdeleine ( veuve
MARGAT Charles ) de Pierre David et GADRAT Olive. dt La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOREAU XX. Etude à
Ciré 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/2. CM
01/06/1782. X 10/08/1782 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Jacques de +
François et SUIRE Suzanne. <span style='color:red'>Ý Aigre 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROYAUX Marie ( veuve
PELLETIER Antoine ). dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PUGEAU Philippe .
Etude à Ciré 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/6. CM
16/06/1783. X 15/06/1783 Ballon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNAUD François de François
et + VIRE d’Ary XX. Ý <span style='color:red'>Etaignen en Angoumois 16</span>.
dt Ballon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Jeanne de + Etienne et
TREZORIER Elisabeth. Ý St Crepin 17. dt Ballon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/12.
Promesse 07/02/1801. CM 16/02/1801. X 16/02/1801 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MONDION Charles de Louis et +
AUBINEAU Marie. Ý <span style='color:red'>Ligné les Bois 16</span>. dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLE Thérèse ( veuve
MALNOIRE Pierre ) . dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/12.
Promesse 26/12/1800. CM 16/02/1801. X 16/02/1801 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PRIOU Louis de Jean et GUERIN
Marie. <span style='color:red'>Ý St Coutant 16.</span> dt Ballon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIMBERTEAU Marie Anne (
veuve GOURDON Jacques ). dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/11.
Promesse 16/07/1799. CM 24/09/1799. X 24/09/1799 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VIELLEFOND Philippe de
François et GANOT Catherine<span style='color:red'>.Ý Moulidar 16</span>. dt
Ardilliéres 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROIFFIN Magdeleine de +
Pierre et BOUJU Marguerite. Ý et dt Breuil Marais 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PINAUD Jacques.
Etude à Ciré 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/16. CM
22/06/1789. X 22/06/1789 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUSSOT Philippe de Philippe
et PETIT Françoise. Ý <span style='color:red'>Fouqueure 16.</span> dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIGNEBERT Renée de + Jacques
et + CUIT Françoise. La Roche Enard 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/19. CM 17/01/1792.
X 17/01/1792 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LANDREAU Pierre de Jean et
LANDREAU Françoise. Ý <span style='color:red'>Roufiac 16.</span> dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAURRAY Marie de + Nicolas
et + GUERIN Jeanne. Ý Ardilliéres 17. dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/24.
Promesse 17/06/1798. CM 26/06/1798. X 26/06/1798 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAURIN Etienne de + Jean et
REVEILLAUD Marie. Ý <span style='color:red'>Anville 16</span>. dt Rochefort /
Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POINTIER Marie Catherine. de
+ Pierre et AUDRY Marie. Ý Le Thou 17. dt Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/18. CM
06/06/1791. X 06/06/1791 Ardilliéres 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSELOT Pierre de + Jean et
+ GARRAUD Marie. Ý <span style='color:red'>Villefagnan 16.</span> dt
Ardilliéres 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOINET Suzanne de Jean et
MESNARD Marie. Ý et dt Ardilliéres 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/16.
Promesse 23/03/1789.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Jean Alexandre de Jean
Alexandre et DELABROUSSE Marie. Ý <span style='color:red'>Rouillac 16.</span>
dt Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BABONNEAU Suzanne de + Pierre
et DANIAUD Marie Anne. Ý Yves 17. dt Ballon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 77/18.
Promesse 30/05/1791.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VIDEAU Elie de + Léonard et +
CLEMENT Elisabeth. Ý <span style='color:red'>St Sornin 16</span>. dt Rochefort
/ Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VINET Françoise de Jean et
FOIREAU Marie Anne. Ý Le Thou 17. dt Rochefort Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire POCHON<span
style='mso-spacerun:yes'>  </span>X X. Etude à Salles / Mer 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 445. CM
30/11/1721.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUCHAREAU&nbsp;? François de
+ François et MESMIN Marie. Ý <span style='color:red'>Coude en Angoulois 16</span>.
dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TAVAU&nbsp;? Suzanne de +
René et DANZACQ Marie. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BOUCHERON Pierre.
Etude à Châtelaillon 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 876. CM
12/04/1761.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUSSARD Jean de + Jean et
DECOUET Catherine. Ý <span style='color:red'>Champniers 16.</span> dt Salles /
Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BACHELIER Thérèse de Pierre
et + LEQUIN Anne Ý et dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 892. CM
30/06/1777. X 30/06/1777 Salles / mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DORT François de + Pierre et
PAIGAUD Louise. Ý <span style='color:red'>Charme 16. </span>dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BURGAUD Marthe de + François
et MIGAUD Catherine. Ý Beauvoir / Niort 79. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 900. CM
11/01/1785. X 11/01/1785 Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMONT Jean de + Pierre et
FERRANT Marie. Ý <span style='color:red'>Segonzac 16</span>. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOLLET Marie de + Louis et
VIGIER Marie. dt St Médard 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 890. CM
06/06/1675. X 06/06/1675 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FERJOT Pierre de + Pierre et
DUMIN Marie. <span style='color:red'>Ý Preuil 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOBET Marie Marthe de Pierre
et + GADRAUD Marie. Ý et dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 908. CM
31/08/1793. X 02/09/1793 Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GERMONNEAU Jean ( veuf
POITEVIN Catherine ) de + Jean et NERILLAC Anne. Ý <span style='color:red'>Brillac
16</span>. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEROT Louise de Jean et NEAU
Marie. Ý et dt Salles17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 900. CM
30/01/1785. X 04/02/1785 Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GREFFIER Pierre ( veuf
MARSAULT Marie Françoise ) Ý <span style='color:red'>Fouquebrune 16</span>. dt
Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIBERT Elisabeth. de +
François et + POITU Marianne. Ý La Rochelle Notre Dame 17. dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 903. CM
21/01/1788. X 21/01/1788 La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUSTIN Jean de Charles et
SIRET Catherine. Ý <span style='color:red'>St Séverain 16</span>. dt La Jarrie
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MALBOEUF Geneviève de Pierre
et + DURET Jeanne. Ý Salles 17. dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 874. CM
04/051759. X 28/06/1760 Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HERAUD Jean de + Jean et
VILLENEUVE Marie Ý <span style='color:red'>Roudray , en Angoumois 16</span>.dt
Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIGEONNIER Catherine ( veuve
MUIN Pierre et <span style='mso-spacerun:yes'> </span>MOYNET Léon ) de Claude
et LABARCHE Jeanne. dt Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 882. CM
24/05/1767. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAIRE Pierre de + Jacques et
AUDOUIN Marguerite. Ý La Benate 17. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUQUERROIS Jeanne de Jacques
et + DUQUERROIS Anne. Ý <span style='color:red'>Bessé 16</span>. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 907. CM
05/02/1792. X 13/02/1792 Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORISSET Jean de François et
+ PETIT Marie. Ý <span style='color:red'>Villefagnan 16</span>. dt Angoulins
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Marie de René et
MAROT Elisabeth. Ý et dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 886. CM
21/10/1771. X 21/10/1771 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINEAU Pierre de + Marc et +
PASQUIER Marie. Ý <span style='color:red'>Montignac 16</span>. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOBLET Catherine de +
François et LEVEQUE Andrée. Ý et dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 899. CM
05/07/1784. X 05/07/1784 Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RANGER Pierre de + Louis et
DAVID Jeanne. Ý <span style='color:red'>Verdille 16.</span> dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DANIAUD Marie Anne ( veuve
POIVRE François ) . dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 895. CM
19/06/1780. X 19/06/1780 Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VEAU Louis de + Michel et
BERGER Françoise. Ý <span style='color:red'>Gourville 16</span>. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VEQUES Elisabeth de Antoine
et + RAFFIN Jeanne. Ý et dt Salles 17.<span style='color:red'><o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire AUNEVEUX Jean.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1089. CM
17/09/1806. X 25/11/1806 La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAPOPILIERE Pierre enfant
naturel ni père ni mère ( veuf THARNAUD Marie )Ý <span style='color:red'>au
Cheurge 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRENOT Marie ( veuve BOUQUARD
Simon ) de Jean et COUTANT Marie.Ý La Rochelle Notre Dame 17. dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1131. CM
27/04/1801. X 28/04/1801 La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROLLIN Jean Vincent de +
François et VEZIN Marie. Ý <span style='color:red'>Boissac 16.</span> dt La
Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLAUDOT Marie Madeleine de +
Joseph et + BADIOU Marguerite. Ý et dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1085. CM
10/12/1797. X 19/12/1797 Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOUBILLEAU Pierre de +
Jacques et + GADINET Marguerite. Ý et dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MENARD Héléne de Pierre et
LEPOIRIER Renée. Ý <span style='color:red'>Embourie 16</span>. dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GUIMBAIL François
Philippe. Etude à Esnandes 17 et Andilly 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1751. CM
01/01/1790. X 27/01/1790 Andilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVEAU François de +
François et BORDAGE Marie. Ý <span style='color:red'>St Fraigne 16</span>. dt
Andilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HERVE Marie Anne ( veuve
BOURREAU Jean ) . dt Andilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CELLIER André.
Etude à Châtelaillon 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1832. CM
16/06/1697.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHABANE Michel de + Léonard
et COURIVEAU Françoise. Ý <span style='color:red'>Oradour Fanais 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HUBERT Marie de Hélie et
ROBINET Marie. Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1834. CM
10/02/1720.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAILLARD Jacques de Pierre et
PERRIN Roze.Ý <span style='color:red'>Cognac 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEVALIER Marie Anne de Elie
et DIORE Rachel. Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SAVARIT André.
Etude à Châtelaillon 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1912. CM
01/07/1753. X 12/11/1753 La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Jean de + François et
LESBON Marguerite . <span style='color:red'>Ý Monbron 16</span>. dt La Jarne
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGOT Jeanne de Jean et
GUILIER Anne. dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1913. CM
06/02/1758. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTRAND Jacques de + Jacques
et COUPRIE Marguerite.Ý <span style='color:red'>Champniers 16.</span> dt Salles
/ Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERGERAT Marie Anne de +
Pierre et + MALLET Catherine. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1914.
Promesse 06/01/1760. CM 21/04/1760. X 21/04/1760 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSEAU Jean de + Jean et
DAVID Michelle. Ý <span style='color:red'>Courbillac 16</span>. dt St Vivien
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITREAU Elisabeth de + Jean
et FOUCHE Jeanne. Ý et dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="1914. CM" w:st="on">1914.
 CM</st1:metricconverter> 06/12/1763. X 06/02/1764 St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRISSONNEAU Pierre de Jacques
et LAURENT Jeanne. Ý <span style='color:red'>Villiers en Angoumois 16</span>.
dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPPAUD Marie ( veuve
CHEVRIER André ) dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1914. CM
21/04/1761. X 19/05/1761 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROSSARD Jacques de + Jean et
DELAY&nbsp;? Catherine. Ý <span style='color:red'>Chagné en Angoumois 16</span>.
dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BEUF Catherine de + Jean et
SCILLET&nbsp;? Jeanne. Ý Ste Soulle 17. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1913. CM
30/08/1756. X 30/08/1756 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUSSARD Jean<span
style='mso-spacerun:yes'>  </span>Baptiste de + Jean et + DUCOU Catherine. Ý <span
style='color:red'>Champniers 16.</span> dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NEAU Magdeleine de Daniel et GEZEUX&nbsp;?
Renée. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1912. CM
30/09/1752. X 03/10/1752 Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLE Martial de + Antoine
et PERRY Françoise. Ý <span style='color:red'>Confollan 16</span>. dt Périgny
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESFARGE Louise de + Jean et
MATHIEU Marie. Ý et dt Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1912. CM
27/06/1751. X 05/07/1751 La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAGNAUD Jean de + Jean et
COINTRE&nbsp;? Jeanne<span style='color:red'>.Ý Paizay Naudouin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLOCHARD Anne de + Pierre et
+ CHEBINEAU Marie. dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1909. CM
28/07/1737. X 17/02/1737 La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOLLET Pierre de + Pierre et
LAURENT Jeanne. Ý et dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENESTE Louise de + Pierre et
GROLLEAU Anne. <span style='color:red'>Ý St Fragne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1911.
Promesse 13/08/1747. CM 07/01/1748. X 08/01/1748 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLAVAUD Jean de + François et
+ BOUFFENIE Marie. Ý <span style='color:red'>Chadurie16</span>. dt Salles 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUD Magdeleine de + David
et MALBEUF Magdeleine. Ý et dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1915. CM
02/01/1765. X 21/01/1765 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEROUIN Philippe de + Pierre
et LAVERGNE Catherine. Ý <span style='color:red'>Brie 16</span>. dt Salles /
Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BACHELIER Thérèse de + Pierre
et LEQUIN Anne. Ý et dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:36.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1907. CM
30/04/1727. X 26/05/1727. Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CONTRE Louis de + Pierre et
JOYEUSE Marguerite. Ý Luché 79. dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHERBONNEAU Françoise de +
Jean et MAIGRET Françoise. Ý <span style='color:red'>Chagne en Angoumois 16</span>.dt
La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1914. CM
05/09/1762. X 06/09/1762 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEMOINNAZE Jean de + Jacques
et DAVID Jeanne.Ý <span style='color:red'>Marillac 16</span>. dt Salles / Mer
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUDIN Marieanne de Estienne
et ROUSSAU Marguerite. Ý La Jarne 17. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1911. CM
07/07/1749. X 22/09/1749 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DENIS Léonard de + Jean et +
LESPINNE Marie. <span style='color:red'>Ý Cherve 16</span>. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOTTARD Louise Henriette de
+ Pierre et + POCHON Marie. Ý et dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1909.
Promesse 05/08/1736.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMONT Pierre de + Pierre et
ANDRE Marguerite. <span style='color:red'>Ý Sigogne 16.</span> dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BLANCHET Catherine de Daniel
et JAUFFRIAU Marye. dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1907. CM
30/03/1726. X 02/07/1726. Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FRAIGNE Jacques de + Jacques
et BRIDEAU Marguerite. <span style='color:red'>Ý Longré 16..</span> dt
Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BESSON Anne de Pierre et AUGE
Marye. Ý et dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="1908. CM" w:st="on">1908.
 CM</st1:metricconverter> 22/01/1730. X 20/02/1730 St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GARINEAU Jean de + Jean et
JAMOT Fleurance. Ý Clussay 79. dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGNAN Jeanne de + Pierre et
DEFAYE Marie. Ý <span style='color:red'>Lusse Laterne en Angoumois 16</span>.
dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1914. CM
22/11/1763. X 22/11/1763 Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUDIN Pierre de Jacques et
MARQUAIS Anne. <span style='color:red'>Ý Eschallat 16</span>. dt Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TAYAU Jeanne ( veuve DRAPRON
Pierre André ) . dt Clavette 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1911. CM
31/01/1749.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GINNE Jean de + François et
LURAT Anne. Ý <span style='color:red'>Verteuil 16</span>.dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRAYE du PAVILLON Gabrielle (
veuve XX Jean ). dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1915. CM
06/01/1765. X 07/01/1765 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRARD Pierre de + Louis et
RAVAUD Jeanne. <span style='color:red'>Ý Gondeville 16</span>. dt Salles / Mer
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Andrée ( veuve MALLET
Pierre ). dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1916. CM
18/01/1768. X 01/02/1768 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GOIZET Jean de + Louis et
BLOUIN Michelle.Ý <span style='color:red'>Jeriat en Angoumois 16</span>. dt
Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOLLET Louise ( veuve CHERBONNEAU
Louis ) . dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1913. CM
29/05/1755. X 23/06/1755 Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAGOTTRIE François de + Jean
et + VERGNAUD Magdeleine. Ý <span style='color:red'>Aussac 16</span>. dt
Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COFFINAUD Marie de + Pierre
et + ARTAU Marie. Ý et dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1912. CM
24/06/1754. X 14/11/1754 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEVESQUE Jean de Jean et
MESNIER Marie. Ý <span style='color:red'>Cherves 16</span>. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CALLAUD Magdeleine de Pierre
et + GROUSSEAU Marie. Ý et dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1909. CM
07/03/1737. X 05/03/1737 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTINET Louis de + Jean et
LANGLARD Anne. Ý <span style='color:red'>en Angoumois 16</span>. dt Salles /
Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUD Marye de + Jean et
RENAUD Magdeleine. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="1914. CM" w:st="on">1914.
 CM</st1:metricconverter> 19/09/1762. X 28/09/1762 St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PAILLAT François de + Louis
et + DUPUY Françoise. Ý <span style='color:red'>Poussac Près Vertheuil 16</span>.
dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HILLEREAU Elisabeth ( veuve
CADY Barthélémy ) dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1911. CM
20/10/1746. X 03/07/1747 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERROT Jean de Jean et +
COUPRIE Antoinette. Ý <span style='color:red'>Prussiau&nbsp;? en Angoumois 16</span>.dt
La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MALBEUF Marie Anne de +
Pierre et MAYNOT Elisabeth. Ý Salles / Mer 17. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1913. CM
30/11/1755. X 12/01/1756 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERROT Jean de Jean et
SARRAZIN Françoise. Ý <span style='color:red'>Puyréaux 16</span>. dt Salles /
Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAMBERT Elisabeth de + Michel
et AVRARD Françoise. Ý La Jarrie 17. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1915. CM
12/06/1764. X 12/06/1764 Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETIOT Jean dit Michel de Jean
et GIRARD Elisabeth. <span style='color:red'>Ý Mallaville 16.</span> dt
Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNET Jeanne de + Louis et
GABORIT Jeanne. dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1915. CM
25/08/1764. X 06/11/1764 La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POUSSARD Jean de Georges et +
RAFFIGNET Marie. Ý <span style='color:red'>Fouquebrune 16</span>. dt La Jarrie
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FRESCHET Jeanne ( veuve
CAILLAUD Estienne ) . dt La jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1912. CM
03/09/1754. X 01/10/1754 Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PUZILLON X de Léonard et +
BARDAU Jeanne. Ý St André d’Objat en Périgord. dt Vérines 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LESTOILJE Marie de + Pierre
et FOUILLOU Marguerite. <span style='color:red'>Ý Angoulême 16</span>. dt Aytré
17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1914. CM
10/05/1762. X 02/05/1762 Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS François de Félix et +
MOREAU Jeanne. Ý <span style='color:red'>Au breuille&nbsp;? en Angoumois 16</span>.
dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIGALLAUD Marie de + Jean et
DELAUNAY Jeanne. dt Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 1910. CM
28/03/1741. X 03/07/1741 La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLAIN Jacques de René et +
DESCHAMPS Jeanne. Ý <span style='color:red'>Gourville 16.</span> dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINSONNEAU Marguerite. de +
Jean et + BONNIN Jeanne. Bernay 17. dt La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GUIANE René. Etude
à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2070. CM
05/10/1683.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAN Jacques de + Isaac et
RIPAUD Jeanne. Ý <span style='color:red'>Salles en Poitou 16&nbsp;?.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NAULEAU Renée de Nicolas et
BOULETREAU Catherine. Niort 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2071. CM
31/03/1686.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LIMOUZIN Mathieu de + André
et POIGNEAU Marie. Ý <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORIT Marie de Michel et
PERTUIS Marie. Cherbonnières 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2070. CM
13/06/1683.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PENOT Gabriel de Nicolas et
DEUXOL Jacquette. Ý <span style='color:red'>Tusson 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LECLAIR Marie de André et
ROFFINAULT Madeleine. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2070. CM
26/10/1681. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Daniel de + Jacques
et + PREVOST Marie. Ý <span style='color:red'>Villefagnant 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIBOT Anne de François et
ARDY Anne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2071. CM
04/05/1687.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SILLON Pierre de + Isaac et
PASQUIER Catherine. Ý <span style='color:red'>Souvigné16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LASNIER Suzanne de Jean et
LIGNOT&nbsp;? Elisabeth. Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GARITEAU Jean.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2085. CM
04/04/1693.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Jacques de + Jean et
BONNEMAIN Françoise. Ý <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIBERT Jeanne de Mathurin et
BOITREAU Mathurine . La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
26/06/1701.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNET Guillaume de + Charles
et SURAULT Catherine.Ý <span style='color:red'>Jeuillez 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBRY Suzanne. de Antoine et
JAMAIN Perrine. La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2085. CM
12/07/1691.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CORNU Louis de Paul et
GRIGNON Anne. Ý <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PLASTREAU Françoise de
François et RICHARD Henriette. La Bataille 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
30/10/1702.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEDINEAU Etienne de + Jean et
DELEZEAU Marie. Ý <span style='color:red'>Lonnes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUSSET Catherine de André
et + TETRON Marguerite. Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
26/01/1700.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEGORCE<span
style='mso-spacerun:yes'>  </span>Jean de + Louis et DELAFARGE Jeanne .Ý <span
style='color:red'>Chadurie 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Madeleine de Pierre et
SALMON Elisabeth. Ile d’Aix 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
10/01/1700.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELESMERIE Noël de + Jean et
DEROULEDE Madeleine. Ý <span style='color:red'>Liver en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENTY Suzanne de Etienne et BRUMEREAU
Marie. Beauvais / Matha 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2082.
Promesse 25/07/1722 -----3 E 2089. CM 14/07/1722.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Jean de Arnaud et
BRUN Marie. Ý <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEMOUTIER Jeanne Madeleine de
Pierre et COUBRAIS Marguerite. La Rochelle St Barthélémy 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM 11/11/1699.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEGRAND Guillaume de +
Jacques et COINDE Lucasse. Frossay 44.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOCHERAT Marie de François et
DUMOULLIN Louise.Ý <span style='color:red'>Ruffec 16.</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2088. CM
23/09/1714.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NEVEU Jean de + Jean et
VINCENT Anne.Ý <span style='color:red'>St André de Ruffec 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FUNET Jeanne de Jean et
GENINE&nbsp;? Ester. Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
02/05/1700.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NO-L Jean ( veuf MOREAU Anne
) . La Rochelle St Jean 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CORNU Anne de Paul et GRIGNON
Anne.Ý <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2089. CM
03/06/1725.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERSIGAUD Antoine de +
Léonard et MOUTON Anne. Ý <span style='color:red'>Agry 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Jeanne de Pierre et
BON Judith. Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2087. CM
18/09/1707.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>REBEYRAT Léonard de + Pierre
et FAYAU Catherine<span style='color:red'>.Ý Maziéres 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILLET Jeanne ( veuve
PAPINEAU Gabriel ) . La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
03/05/1704.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>REGNAUD François de + Jean et
DELAAGE Marguerite.Ý <span style='color:red'>Chabanais 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNIN Madeleine de Guillaume
et ROY Jeanne. La Rochelle St Sauveur 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2085. CM
29/01/1696.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Jacques de + Jean et
COUTURIER Gabrielle. Chasteaunay en Poitou .<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHABREAU Marie de Jean et
DAMIEN Louise. Ý <span style='color:red'>Bonneuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2087. CM
30/01/1706.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Michel de Jean et +
PREVOST Françoise . Ý <span style='color:red'>Douzat 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUSSE Louise ( veuve RAIX
Pierre ) . La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2085. CM
27/01/1697.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Pierre de + Jean et
TEXIER Léonarde. Ý <span style='color:red'>Maziéres en Basse ……16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PENARD Renée. St Georges <span
style='mso-spacerun:yes'> </span>du Bois 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2086. CM
05/06/1701.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TOUZAC Ambroise de Jean et +
MAGNEROLLE Marthe. La Rochelle St Barthélémy 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COITEUX Anne de Pierre et
BALLAN Marguerite. Ý <span style='color:red'>Verteuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire JAROSSON X X .
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2120. CM
08/01/1730.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MONTEROUX Jean de + Simon et
GANTREAU Marie.Ý <span style='color:red'>Près de Cognac 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCOU Madeleine ( veuve
DAUBIGEON Pierre ). Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2120. CM
12/06/1717.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Jean de + Pierre et
BOYER Marie .Ý <span style='color:red'>Dirac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Elisabeth de Pierre
et GOT Marguerite. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2118. CM
15/12/1737.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU René de + Pierre et
QUEROY&nbsp;? Françoise. Ý <span style='color:red'>La Foray en Poitou 16&nbsp;?</span>
.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSE Jeanne de Jacques et
GUITON Jeanne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2115. CM
27/06/1723.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOULLAT Jean de + Jean et +
TRILLAUD Jeanne. Ý <span style='color:red'>Oradour 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHABOT Françoise ( veuve
MILLET Jacques ) Laleu = La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire NAUDIN Vincent.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2155. CM
26/11/1584. Protestant.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BIGOT Jean . Ý <span
style='color:red'>Barbezieux 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAULT Guillemette ( veuve
GUYON Simon ).<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
07/03/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BLONDEAU Jean. Près Matha 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIFON Jacquette de Louis et
VERTIT Louise. Ý <span style='color:red'>Montigny 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
12/08/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOYVASLOT Jacques<span
style='color:red'>. Ý La Rochefoucault 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BLANDIN Gratienne de +
Etienne et CHAPPRON Anne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2154. CM
25/11/1583.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BYRON Louis ( veuf VALLIN
Nicolle ) .Ý <span style='color:red'>Tusson 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAGAY Mathurine ( veuve
POUPIN Jean ) Fontenay le Comte 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2154.
Promesse<span style='mso-spacerun:yes'>  </span>02/05/1783.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHATILLOT Louis .Ý <span
style='color:red'>Juille en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VINARD Louise . Bouin 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2151. CM
19/04/1572.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHIRON Jean. Ý <span
style='color:red'>Ventouze 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SUAUD Françoise de Jean et
GUILLET Françoise. Lhoumeau 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
13/05/1582 Protestant.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUDIN Micheau de + Louis et
VRENT&nbsp;? Marguerite<span style='color:red'>.Ý St Lorent près Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABORIE Vincende ( veuve
POMPONNET Pierre) Flay&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
17/04/1582.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAGARDE Micheau de + Pierre
et VALLET Jeanne. Ý <span style='color:red'>Chatel de Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUSSET Jeanne de Lucas et
BRODU Perrine. St Denis de la Chevasse 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
31/07/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOUSSET Simon de + Marsault
et FINEREAU Louise<span style='color:red'>.Ý Près de La Rochefoucault 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAVEAU Catherine de Denis
et GARNIER Renée. La Chaulme .<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
22/04/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAVART Etienne de + Jean et
MOREAU Barbe. Le Château d’Oléron 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PRIOLLEAU Marguerite de
Pierre et METORLE&nbsp;? Catherine.Ý <span style='color:red'>St Cibardeau 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
05/06/1582.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUCQUET Jacques de
Foruh&nbsp;? et + TABUSTEAU Perette.Ý <span style='color:red'>Mosnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUCHAZEAU Jeanne de Léonard
et PAPILLET Catherine. Ý <span style='color:red'>Garat 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2154. CM
04/10/1853.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIBAULT Jean.Ý <span
style='color:red'>La Madeleine 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ACHARD Mathurine ( veuve
DESMOLLINS X ) . Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
23/04/1582.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAULT Pierre de + Louis et
MAZOT Louise. Ý Loubillé 79.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAUD Hillaire de Martin et
MOUSSOT Marguerite. Ý <span style='color:red'>Aigre 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2151. CM
01/05/1572.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUERY Jean de + François et
CANTINEAU Isabeau. La Jarne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MALHERBE Marguerite ( veuve
SEMUR Pierre ) . Ý <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2155. CM
08/06/1584.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEBOT Julien de Jean et
BYARD Marie.Ý <span style='color:red'>Massillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIVIERE&nbsp;? Marie de Lucas
et REGNETEAU Jeanne. Laleu = La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
17/10/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HAMONNET Robert de + Jean et
TREMOT Perrine. Nantes 44.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COYTON&nbsp;? Jeanne ( veuve
COUTINEAU Louis ). Ý <span style='color:red'>Brettes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2157. CM
01/06/1589.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURENCIN&nbsp;? Pierre de +
Mathurin et GENYNEAU Catherine.Ý <span style='color:red'>Marsac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DURAN Marie de Jacques et
GUIRAN Catherine. St Genuzeau&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2155. CM
08/05/1584.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEPERNITE&nbsp;? Julien de +
Jean et + RABIN Jeanne. Angers 49.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ARNAULT Marie ( veuve REGNIER
Jean ). Ý <span style='color:red'>Alignac en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
30/04/1582.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAINAULT Antoine de + Romain
et ARNAULT Catherine. Ý <span style='color:red'>Bignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PICHON Thoinette de Micheau
et GROMAIN Bastienne.Ý <span style='color:red'>Près l’Aubertiére 16.&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2154. CM
19/10/1583 Protestant.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORIN Blaise. Ý <span
style='color:red'>Rouillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMONT Renée ( veuve POTHIER
Etienne ) . La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2154. CM
22/06/1583 Protestant.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOSNIER Guillaume. Ý <span
style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SAUVESTRE Mathurine ( veuve
LAUDEY Jean ). La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
26/12/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NADAULT X X de + Simon et VYNELLE
Catherine. Ý <span style='color:red'>Près Montignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBOURG Perrette de Jacques
et LIBEAU Huguette. Ste Soulle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
10/01/1582.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PANETIER Gabriel de +
Hillaire et FROMENTIN Thomasée. Ý <span style='color:red'>Près de Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Gabrielle de Colas
et VYREMEND&nbsp;? Jeanne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
06/01/1582.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PELLOQUIN Adrien de Micheau
et PETIT Héléne<span style='color:red'>.Ý Salles 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAFOND Suzanne de
Etienne&nbsp;? et VERGIER Marguerite. Laleu = La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
05/05/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PICARD Romain de + Jean et
TOURNAUD Jeanne.Ý <span style='color:red'>Villeognon 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDUREAU Mathurine ( veuve
NORMANDIN Jean ) . Lagord 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2157. CM
27/01/1589. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROMAN<span
style='mso-spacerun:yes'>  </span>de Nicolas de Jean et BERNARD Armande. Ý <span
style='color:red'>Cognac 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEGARDIN Marie de Guillaume
et BERTAUD Marie. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2157. CM
03/03/1589.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSIGNOL François de + Elie
et GUILLAUD Jeanne. Ý <span style='color:red'>Près Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PYNETEAU Marie ( veuve
CHASSELOUP X ) . en Poitou.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2154. CM
15/08/1583.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Jean de + Jean et BISET
Marie. Ý <span style='color:red'>Cyroil&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUVERGER Marie de X X ET
RILLOT Guillemette. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2152. CM 26/01/1580.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SCAVIN&nbsp;? Mandé de + Jean
et BOUTHIER Perette. Ý <span style='color:red'>La Fay en Poitou 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NANTOIS&nbsp;? Catherine de
Jean et SYMOT Marguerite. Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2153. CM
13/01/1582.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SIBILLE Jean de Jacques et
BERNIER Claire. Ý <span style='color:red'>Champaigne en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIANT Perrine de Vincent et
COULDRET Marie. Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2151. CM
03/02/1572.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOUCHET Jean. Ý <span
style='color:red'>Purignac&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUHIER Thifaine de Jullien
et BONPAIN&nbsp;? Marguerite. Buray en Saintonge 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2150. CM
15/09/1570.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TRANCHEREAU Jacques. La
Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTIER Laurence ( veuve
DANYAU Michel ) . Ý <span style='color:red'>Enveau Près Jarnac 16&nbsp;? .</span><o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MASSET Jean .
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2161<b>. </b>CM
23/11/1614.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARREAU Gabriel de Jean et
VITET Marguerite. Ý <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VAUGONE Marie de Mathurin et
NEPVEU Catherine. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2158. CM
21/05/1605.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLOCHON Mathieu de +
Jacques et MAYNIN Colette. Ý <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAULT Marie ( veuve BART
Guillaume ) de Jacques et DEVERAT Marguerite. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2159. CM
29/10/1609.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COYCHAN Pierre de + Denis et
BRYAULT Jeanne. Boullogne en Poitou.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUSSEAU Françoise de Pierre
et THEBAULT Lyonne. Ý <span style='color:red'>en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2162. CM
29/05/1617.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FILLON François de Jean et
RASCAUD Marguerite. Thoulac.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DETAMPVILLE Jeanne ( veuve
ORGERON Jean ) . Ý <span style='color:red'>Rampville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2159. CM
26/04/1609.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MICHEL Christophe de Robert
et FOURNIER Perine.Ý <span style='color:red'>Jarnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LANGLOIS Suzanne de Germain
et CARTAULT Gilette. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2161. CM
04/05/1613.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NOYRAULD André de + Martin et
PEPIN Perette. Ý <span style='color:red'>Barbezieux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BIDAULT Jeanne ( veuve
POTTARD Antoine ). La Rochelle17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LEFEBURE
Vespasien. Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2165. CM
07/07/1647.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUDRAN Jean. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLOU Anne de Antoine et
TAPON Marie.Ý <span style='color:red'>St Amand en Poitou 16/79.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2165. CM
19/10/1642.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUDARD Jean de François et +
JOUQUET Catherine.Ý <span style='color:red'>Ruelle 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MERCIER Catherine de Jean et
BOUSSAUD Mathurine. St Denis la Chevasse 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2165. CM
24/06/1643.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRIANCEAU/BRIANERE<span
style='mso-spacerun:yes'>  </span>X. de + Etienne et ROUSSEAU Catherine. St
Etienne de Bassern…<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTRAND Marie de Jean et
TASTAUD Simonne.Ý <span style='color:red'>Vars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span>3 E 2166. CM 10/05/1648.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEBAUD François ( veuf PIGNON
Marie ) . La Jarrie 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERSIAULT Marguerite ( veuve
CHASTAGNIER X Ý <span style='color:red'>Gourville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2167. CM
20/04/1653.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HORSON Jean de François et
ROUSSEAU Anne. Ý <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MEURGUIER Françoise de
Benjamin et DABILLON Marie. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2165. CM
06/06/1645.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOLLET Pierre de Vincent et +
PETIT Perette. St Sauveur d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SALOMON Catherine de Antoine
et VINET Catherine.Ý <span style='mso-spacerun:yes'> </span><span
style='color:red'>Salles Près Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2165. CM
18/10/1645.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERAUDEAU Jean ( veuf
COUILLERON X ).Ý <span style='color:red'>Rouillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DURET Laurence ( veuve
COUPRIE Jean ) . Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2165. CM
02/09/1646.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PICARD Jean. Ý <span
style='color:red'>Veret en Angoumois 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BASSOT Françoise de Jean et
BIZET Marguerite. La Chastaigneraie 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2166. CM
13/02/1650.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUHAULT Jamet ( veuf DURVILLE
Marie ) .Ý <span style='color:red'>Aigre 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POIRIER Catherine de Jean et
JOLIVET Anne. Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DOUGNET Samuel .
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2169. CM
26/12/1646.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDOY Jean de + Daniel et
RAUFY&nbsp;? Anne. Ý <span style='color:red'>Villefagnan 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ABELARD Louise de Mathurin et
MAILLET Perrine.Ý <span style='color:red'>Rouillard 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2171. CM
27/06/1655.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOULEAU René de + Charles et
GOUIN Jacquette. Ý <span style='color:red'>Coussay en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENESTEAU Marie ( veuve
LAVERGNE Abel ) de Pierre et CORNU Marie. St Dizand de Conac 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2171. CM
14/04/1653.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LACHASSE Gabriel de Pierre et
+ SEGUIN&nbsp;? Jeanne&nbsp;?. Ý <span style='color:red'>en Angoumois 16<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FROCADE Marie de X X<span
style='mso-spacerun:yes'>  </span>et ROCOT XX. St Augustin 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2171. CM
08/08/1654.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LACHAUSSEE Gabriel de Pierre
et SEGUIN Jeanne. Ý <span style='color:red'>en Angoumois 16<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PHELIPEAU Jacquette de
Jacques et MERCASSIN&nbsp;? Anne. Luçon 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2170. CM
02/03/1650.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MICHEL Mathias de + GUIOT ET
VILLENAUD Marie.Ý <span style='color:red'>Coudat en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANNEREAU Jeanne de Pierre et
+ FOUCAUD Marguerite. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2169. CM
06/12/1646.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SARRAULT Jean de Aman , et
BUZAC Jacquette.Ý <span style='color:red'>Coulonge 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAPON Jeanne de X X et BRODU
Renée. Chaillère enPoitou.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BOUROT Mathieu .
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-size:10.0pt'>3 E 2177<sup>E</sup>. CM
20/04/1678.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIGOISARD Paul de + François
Auguste et DELUSSAC Marie .Ý <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLOT Marie Anne de Jean et
COURSON&nbsp;? Marie. La Rochelle17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire RAFFET Baltazar.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2179. CM
08/12/1658.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BUJAU Bernard de + Pierre et
DUPRIN Marie. Bordeaux 33.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENDRUT Jeanne ( veuve
HERISSON Nicolas ) de Pierre et MARTINEAU Jeanne.Ý <span style='color:red'>Cognac
16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2180. CM
25/04/1661.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUILLARD Jean de + Etienne
et ALBERT Renée.Ý <span style='color:red'>Marignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BLANCHARD Marie ( veuve
AUTAIN Jacques ) de Louis et BARRE Ester . La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2180. CM
03/07/1661 Protestant.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUERIN Andr&nbsp;é de + Jean
et FELIX Marguerite.Ý <span style='color:red'>en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERRINET Ester ( veuve DUMOND
Jean ) de Luc et FRADIN Gabrielle. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BERTHELOT Jean.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2185. CM
16/09/1683.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUD Jean de + Arnaud et
GAUTREL Elisabeth.Ý <span style='color:red'>Montigné 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SIMON Fleurance ( veuve
BRAGUEROU<span style='mso-spacerun:yes'>  </span>X ) La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2185. CM 24/02/1683.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNEAU André de + Jean et
BOISSEAU Catherine.Ý <span style='color:red'>Challais 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PELLETIER Jeanne de Samuel et
RULLEAU Jacquette. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2181.
Promesse 2/10/1680. CM 26/01/1681.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORICE Jean (veuf BODIN Marie
).Ý <span style='color:red'>La Jarne en Angoumois 16&nbsp;?</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU Françoise de André
et GUERIN Marie. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2184. CM
01/05/1689.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAVAUD Jacques de + Jacques
et LEPINNE Perrine.Ý <span style='color:red'>St Martin du Clocher 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MILLION Françoise de Jean et
RAOULT Marie. Nieul / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire POURAJAUD Pierre.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2190. CM
04/01/1775.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AVRIL Jean de + François et
DESMIER Elisabeth.Ý <span style='color:red'>Bernac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEPONT DE GAULT Marie
Elisabeth de Pierre Henry et + BARBOT Marie. Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2194. CM
12/01/1783.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOULIN Pierre de + Pierre et
BRUNET Marie. Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MEMAIN Françoise de Jean et
ALBERT Marie.Ý <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2186. CM
13/11/1761.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DENOUX Eloy ( veuf BENOIT
Elisabeth ) La Rochelle St Jean 17.<o:p></o:p></span></p>

<p class=MsoNormal><span lang=EN-GB style='font-size:10.0pt;mso-ansi-language:
EN-GB'>GERGAUD Catherine de Simon et GIRAUD Catherine.Ý <st1:place w:st="on"><st1:City
 w:st="on"><span style='color:red'>Cognac</span></st1:City></st1:place><span
style='color:red'> 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2191. CM
05/06/1776.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOURNIER Michel de + Pierre
et DAVID Jeanne.Ý <span style='color:red'>Rivière 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEBASSIER Marie Jeanne de
Charles et LANDREAU Marie. St Maixent 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2192. CM
21/05/1779.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GARNIER Jean Charles de Jean
Louis et CHAUVIN Marie Madeleine.Ý <span style='color:red'>Chasson en Angoumois
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOULLANGER Marie Suzanne de Josne
et OUALLE Marie jeanne. La Rochelle17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2186. CM
30/06/1760.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLAUD Pierre de + André et
MAUMON Marie.Ý <span style='color:red'>Villegars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAQUINEAU Louise de Jacques
et COLLE Anne. LaRochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span>3 E 2188. CM 20/07/1766.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PHILIPPE André Joseph de +
Jean et JACQUIN Paule. Montargis.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span>MATIGNON Marguerite de François et BERTIN
Marguerite.Ý <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2196. CM
29/01/1785.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SCARLAZEN Rodolfe de Rodolfe
et BRIGALLEA Bondo Vall. Bondo Suisse.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SAUVAGET Elisabeth de Jean et
FERRAUD Marie.Ý <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2186. CM
22/06/1762.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VALLEE Jean de René et
JOUAMIEN Catherine. Basse Goulenne.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUE Jeanne de Jean et NEAU
Jeanne.Ý <span style='color:red'>Bourg / Charente 16<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2186. CM
27/05/1759.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLENEUVE Jean de + Jacques
et + TOUART Marie. Ý<span style='color:red'>Villegas 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEBEAU Suzanne de Charles et
GUITEAU Madeleine. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire POIREL Jean
Nicolas. Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2208. CM
02/02/1774.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AMIOT Jacques ( veuf FORT
Louise ) de Guillaume et ROULLET Jeanne. St Etienne de Manacq.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARGORIE Clémence ( veuve
BLANCHET Jean ) de Allexis et BUREAU Jeanne. <span
style='mso-spacerun:yes'> </span>Ý <span style='color:red'>St Séverin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2207. CM
10/10/1773.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDRIN Joseph ( veuf RAUX
Marie ) de + Mathurin et LEBAIN Marguerite. Auverne&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAOULT Jeanne de X X et
TORIGNE Marie.Ý <span style='color:red'>St Séverin 16.</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2200. CM
05/03/1758.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUTHIER Jacques de + Charles
et TESSEREAU Anne.Ý <span style='color:red'>Torsacq 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PENIER Marie Marguerite de
Antoine et JOUSSEAUME Marie. Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2213. CM
31/05/1781.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUTHIER Jacques ( veuf PEIGNE
Marie Madeleine ) de + Jacques et TESSEREAU Anne.Ý <span style='color:red'>Torsacq
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOUSSIN Renée de Charles et
CHEVALIER Marguerite. St Pierre d’Oléron 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2218.
Promesse 11/06/1787. CM 04/07/1787.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARREAU Michel ( veuf
COUTURIER André ) de Léonard et MATIGNON Catherine.Ý <span style='color:red'>Angoulême
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VERRON Marguerite de Jean
David et + BERNARDEAU Thérèse. La Rochelle St Barthélémy 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2218. CM
07/01/1787.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERGE Roch de Gilbert et
ROUDAUT Françoise.Ý <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SERRE Madeleine ( veuve
RAFFIE Mathurin ) de Pierre et TOURNY Suzanne. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2199. CM
24/01/1755.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNET René ( veuf THOMAS
Françoise ) de + Simon et GARNIER Jeanne.Ý <span style='color:red'>Beaulieu en
Poitou 16/79.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURGEOIS Marie de Mathurin
et GILBERT Marguerite. Moutier / Le Lay 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2219. CM
08/09/1789.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURIAUD Pierre de +
François<span style='mso-spacerun:yes'>  </span>et BEAU Jeanne.Ý <span
style='color:red'>Marcillacq Oradour 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Louise Marie de
François et PAPONNEAU Marie Louise. Périgny 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2199. CM 09/07/1754.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CATHERINAUD Gabriel de +
François et MINIERE Jeanne.Ý <span style='color:red'>Nonnacq&nbsp; en Angoumois
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHENU Catherine de Jean et
BOUQUE&nbsp;? Jeanne. Niort 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2208. CM
01/05/1774.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GORAUD Jean Baptiste ( veuf
MILLIEN Madeleine ) de + Guillaume et CHARLES Anne.Ý <span style='color:red'>Angoulême
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERNEL Marie Anne. de Nicolas
et BROSSET Jeanne. La Rochelle St Sauveur 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2220. CM
13/06/1790.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRASILLIER Jacques de Pierre
et AUBINAUD Jeanne.Ý <span style='color:red'>Mérignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURGEVIN Elisabeth de Jean
et MARGOTON Anne. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2202/2. CM
19/03/1765.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOLLAYS Pierre de + Jean et
GAULTIER Elisabeth.Ý <span style='color:red'>St Preuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEGRAND Françoise de François
et PILLOT Elisabeth. Mauzé / Mignon 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2229. CM
27/10/1803.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABARRE Pierre ( veuf
COUTURIER Marie ) de Pierre et BOBRY Marie. St Coutant 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DENIS Marie ( veuve BORDAIX
Pierre ) de Jean et BRUNOT Thérèse.Ý <span style='color:red'>Celette 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2216. CM
05/11/1785.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LOTTE Antoine de Jean et
GAUDY Marguerite.Ý <span style='color:red'>Salles 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUSNIER Jeanne de Jean et
MOYNIER Marie. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2209. CM
04/01/1776.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARAUD Raymond de Jean et
ALLAISE Marie Anne. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAUX Jeanne de Louis et
TORNIE Marie.Ý <span style='color:red'>St Séverin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2214. CM
19/01/1782.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MATHAS Vincent de + Jean et
PERRONNAUD Madeleine.Ý <span style='color:red'>Champniers 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINET Marguerite de Pierre et
MESNARD Françoise. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2210. CM
19/11/1777. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTAYER Pierre Paul de +
Paul et PROU Jeanne.Ý <span style='color:red'>St Séverin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUYON Marguerite ( veuve
SAINTON Denis ) de Pierre et PERDRIAU Marie. La Flotte en Ré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2201. CM
05/09/1762.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORISSET Jean de + Louis et
GIRAUD Françoise.Ý <span style='color:red'>Salles 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PORCHERON Louise. de Nicolas
et CHAUVEAU Louise. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2202/2. CM
29/03/1765.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETITON Jean de + Jean et
REGNIER Marguerite.Ý <span style='color:red'>Periaud en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FILLONNEAU Marie ( veuve
ROCHET Jacques ) de Pierre et SAGOT Marie. Auzay 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2219. CM
26/04/1789.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PHELIPON François de + Pierre
et Rivière Marguerite.Ý <span style='color:red'>Jarnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABOEUF Marie ( veuve
REIGNIER Pierre ) de X X et BARBUREAU Françoise. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MARTIN Simon.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2235. CM
03/11/1714.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOUX Jean de Louis et + PIET
Jeanne.Ý <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERJONNEAU Catherine de
Nicolas et JAY Catherine. Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt left 333.0pt'><![if !supportLists]><span
style='font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2238. CM
29/12/1699.<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:333.0pt'><span style='font-size:10.0pt'>ROUSCHIE
Daniel de Pierre et PELLOQUIN Antoinette.Ý <span style='color:red'>Empuré 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='tab-stops:333.0pt'><span style='font-size:10.0pt'>BARREAU
Louise de Vincent et BONNET Jacquette. La Laigne 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt left 333.0pt'><![if !supportLists]><span
style='font-size:10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;
mso-bidi-font-family:Symbol'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2238. CM
12/09/1705.<o:p></o:p></span></p>

<p class=MsoNormal style='tab-stops:333.0pt'><span style='font-size:10.0pt'>SIBILLET
Pierre de + Pierre et THOMMEAU Marie.Ý <span style='color:red'>La Rochefoucauld
16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='tab-stops:333.0pt'><span style='font-size:10.0pt'>PARE
Jeanne de David et BOUDET Anne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BEAUCHAMPS X<span
style='mso-spacerun:yes'>  </span>.Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2241. CM 19/05/1698.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MANDAY Pierre de Jean et
CHAIGNEAU Jeanne.Ý <span style='color:red'>Dignac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHANAUDRAY Marguerite ( veuve
BERTHET Pierre ) La Rochelle St Bathélémy 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire DAVID Jacques.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2252. CM
23/05/1735.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AYMARD Henry de + François et
TEXIER Marie.Ý <span style='color:red'>Villefayant 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MACHETEAU Jeanne de Morice et
NOREMENT Françoise. Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2246. CM
04/07/1729.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARON François de Jean et +
MARTIN Jeanne.Ý <span style='color:red'>St André 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAILLE Françoise ( veuve
BRISSEAU Jean ) La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2268. CM
10/10/1723.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERGER Jean de Raymond et +
AUDOUIN Anne<span style='color:red'>.Ý Pillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:36.0pt'><span style='font-size:10.0pt'>PORCHER
Jeanne de Pierre et BOUAUT Catherine . Venanceau 85<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2258.
Promesse 16/12/1741. CM 16/12/1741.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHET Jean ( veuf ROBIN
Françoise ) La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BUSSAT Marie de Léonard et
CHERBONNIER Françoise.Ý <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2252. CM
11/05/1735.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURDREAU Jean de + Antoine
et BALIATRE&nbsp;? Catherine.Ý <span style='color:red'>St Cybardeau 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marie Elisabeth de
Jacob et + COUSSEAU Marie. La Rochelle St Nicolas 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2269. CM
17/02/1726.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHABARNEAU Jean de Sébastien
et DELACAUD Grace.Ý <span style='color:red'>Leschi……..en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PORCQ Anne ( veuve NANGE Jean
) . La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2265. CM
28/09/1750.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHATAIN François de Jacques
et ILHIER&nbsp;? Anne.Ý <span style='color:red'>Tusson 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DERAIN Suzanne de Louis et
CONNIL Marguerite. La Rochelle St Nicolas 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2247. CM
23/04/1730.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUSTARD François de Jean et
LEVEQUE Françoise.Ý <span style='color:red'>Sonneville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DIEUMEGARD Louise de XX et
AUDINEAU Marie Anne. Le Gué de Velluire 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2255. CM
06/03/1738.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DAVIAUD Paul de + Paul et
DELABARDE Anne.Ý <span style='color:red'>Monchaude 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marie de Antoine et
AURIAUD Jeanne. La Rochelle St Sauveur 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2251. CM
11/07/1734.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESFIEUX Benoist de + Antoine
et SOUBIRAN Françoise.Ý <span style='color:red'>St Aman 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUNIER Céleste de Baltazar
et LAROUCHE Françoise. Beaulieu / Mareuil 85.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2252. CM
28/05/1735.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAMBAULT Jean de + Jean et FROUIN
Marguerite. Cram en Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THILLOU Marie de Mathurin et
RESTEAU Jeanne.Ý <span style='color:red'>St Germain en Poitou<span
style='mso-spacerun:yes'>  </span>16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2270. CM
08/01/1731.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAZIN Jean de + Jean et
TEXIER Jeanne. en Aunis.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRIE Marie de René et GUILLON
Marie.Ý <span style='color:red'>Ligue en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2270. CM
17/05/1728.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GEORGET Pierre de Pierre et +
PAIN Anne.Ý <span style='color:red'>Roullet 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHADIER Françoise de Jean
et RAOULT&nbsp;? Madeleine. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2251. CM
07/10/1734.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIET Louis de Antoine et +
BOISNARD Suzanne. Coze 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Marguerite de Jean
et DEGORSE Jeanne<span style='color:red'>. Ý Chadurie 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2251. CM
21/05/1734.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUMARD Jean de Jean et
BERNARD Suzanne. Allevert en Saintonge 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROULLET Suzanne de Jean et
BOUQUINET Charlotte.Ý <span style='color:red'>Cellete 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2265. CM
03/10/1750.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURANS Pierre de + Jean et
TRUSANDIER Jeanne.Ý <span style='color:red'>St Germain 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CANTINEAU Jeanne de Pierre et
HILLAIREAU Marie Anne. Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2244. CM
20/06/1726.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NEAU Jean de Jacques et +
IZAMBARD Jeanne.Ý <span style='color:red'>St Séverin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GERBIER Françoise de François
et SIMONNET Marie. Niort Notre Dame 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2244. CM 14/10/1725.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>REGNAUD Hillaire de + Jacques
et RAYNAU Suzanne. Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAULTIER Marguerite de Jean
et DIGOTE Jeanne<span style='color:red'>. Ý Barbezieux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2270. CM
19/12/1731.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENE Jean de + Jean et +
JANNE Marie. Chaux en Ardennes.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MONBERGER Louise de Nicolas
et DESCHAMPS Marie.Ý <span style='color:red'>Champagné en Poitou 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2266. CM
11/02/1753.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIFFAULT Jean de + Antoine et
CLEMENT Françoise.Ý <span style='color:red'>Mornac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTRAND Henriette de René et
BERNARD Marie Anne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2255. CM
26/05/1738.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RONDRAILH Charles de +
François et FOUCHE Jeanne.Ý <span style='color:red'>Cristeuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNEAU Marie de Etienne et
JUTEAU Marie. La Rochelle St Barthélémy. 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2264. CM
15/07/1749.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SIBILLEAU Michel de Louis et
FRAGNAUD Anne.Ý <span style='color:red'>Ligne 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLIE Suzanne de Mathurin et
ORSEAULT Marie. St Martin de Ré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2249. CM 20/07/1732.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VERGUIN Antoine de + Elie et
BOUILLAU Marie. Ý <span style='color:red'>Angoulême St Paul 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAGARDE Marie de Barthélémy
et MATHE Marie. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire PINTAULT Jacques .
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2273. CM
06/04/1682.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOURISSEAU Michel de + Jean
et GAZEAU Suzanne. La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FORT Marguerite de P ierre et
FOUSGERE Catherine.Ý <span style='color:red'>St Laurent en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BONNEAU Pierre
françois. Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2326. CM
29/06/1794.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUGER Louis ( veuf RIVALON
Pa……….) de + Jean et BLANCHARD Françoise. Marsilly 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRENIER Marie de XX et RAUD
Angélique. Ý <span style='color:red'>Paizay en Audouin 16.</span><o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2322. CM
30/04/1788.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARGE André ( veuf BORDAS
Anne ) de + Gilbert et RONDEAU Françoise. Ý <span style='color:red'>Angoulême
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEBECIER Marie Anne de
Charles et LANDREAU Marie. St Maixent 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2335. CM
20/05/1806.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUSSE Martial de + Pierre
et FERRAND Marguerite. Corniac. ( Dordogne )<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VRILLAC Marie de Jacques
François et ALBARET Thérèse. Ý<span style='color:red'>Aloux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2335. CM
09/06/1806.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BURNEL Pierre de Jean et
DUPRE Anne.Ý <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MINOCHET Marie Anne de Pierre
et RIVIERE Marie. St Cir . ( Manche )<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2323. CM
16/08/1789.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DORIN Pierre ( veuf ROCHEFORT
G………..) Dompierre / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marie de Pierre et
LAURENT Jeanne.Ý <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2335. CM
22/12/1806.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENRY Hillaire ( veuf COUTARD
Elisabeth ) Saintes St Palais 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUGER Marie de Jean et
RIVIERE Marguerite.Ý <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2333. CM
05/02/1804.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT René ( veuf MAROT
Elisabeth ) Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FORGET Anne de François et
COINDREAU Françoise.Ý <span style='color:red'>Charme 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2335. CM
25/11/1805.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOURDAIN Pierre ( veuf CHEMINET
Marie ) de + François et MORAN Catherine.Ý <span style='color:red'>Confolens
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PETIT Marie H&nbsp;éléne de
Louis et GOUSSAUD Renée. Charron 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2343. CM
20/08/1814.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>QUILLARD Louis de + Louis et
ALINEAU Louise. Ý <span style='color:red'>Aussac Vadalle 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUVERGER Jeanne de Jean et
FOURCADE Marie. Libourne 33.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2321. CM
22/04/1786.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TEUNEZEN François de + André
et CHASTIER Marie. Ý <span style='color:red'>Champagné en Poitou 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RICHER Madeleine Françoise de
Jacques et DUBEIGNON Elisabeth. La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire POUSSARD Jean
Claude. Etude à Esnandes 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2347. CM
25/12/1762.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRISSET Jean de Pierre et
CAILLAU Marie<span style='color:red'>.Ý La Sigogne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEGEAU Marie Anne de Etienne
et CHAILLE Jeanne. Esnandes 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GUYONNET<span
style='mso-spacerun:yes'>  </span>XX. Etude à Esnandes 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 2352.
Promesse 15/08/1756. CM 13/09/1756.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LOMMIERE Pierre de + Pierre
et CHAPPELET Jeanne<span style='color:red'>.Ý Don&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLAUD Marie ( veuve
GAILLARD Jean ) Esnandes 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOREAU Jean
Frédéric. Etude à Forges 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4231. CM
21/04/1771. X 21/05/1771 Le Thou 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERGIER Arnault de + Michel
et DELAFONT Marie<span style='color:red'>.Ý Magnac / Touvre 16</span>.dt Le
Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DAUBY Françoise ( veuve
POINTIER Jean ) de Pierre et + BARON Jeanne. Ý Ardilliéres 17. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4236. CM
22/11/1790. X 22/11/1790 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSEAU Pierre de + Jean et
PELLERIN Marie. Ý <span style='color:red'>Herpes en Angoumois 16</span>. dt Le Thou
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROCHE Marie de + François et
LOUIS Marie. Ý et dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4233. CM
09/05/1780. X 09/05/1780 Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNEAU Mathurin de Jean et
CHARRON Jeanne Gabrielle. Ý et dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIVAUD Marie de Louis et +
TRILLEAU Marie. <span style='color:red'>Ý Anville 16</span>. dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4235. CM
29/02/1788. X 05/05/1788 Mauzé / Mignon 79.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUDERT François de Jacques
et + RODIER Anne Suzanne. juge Royal de <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CONTANCIN Françoise Julie de
Jean et DELACROIX Rose. Ý et dt Mauzé / Mignon 79.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4238. CM
06/06/1802. X 15/06/1802 Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAGE François ( veuf
GABORIT Anne ) de + Jean et + PETIT Anne. Ý <span style='color:red'>St Martin
de Marthon 16</span>. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marguerite de + Jean
et + GUERIN Magdeleine. Ý et dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4233.
CM31/01/1780. X 31/01/1780 Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIDET François de Jean et
LUCAS Marie. Ý <span style='color:red'>Villejésus 16</span>. dt Aigrefeuille
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAMPILLON Marie de Jean et +
JOLLY Marie. Ý et dt Aigrefeuille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4238. CM
22/09/1800.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Joseph Philippe. Ý <span
style='color:red'>Aigre 16.</span>dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURDIN Magdeleine Emelie (
veuve BOURDON Gabriel ) de Henry et MONET Renée. dt La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4232. CM
21/08/1777. X 27/08/1777 Puyravault 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>OSMONT Estienne ( veuf
AUBOYNEAU Marie Anne de + Mathurin et CRAMENEILLE Marie Catherine. dt Forges
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MONTAUBANT Jeanne de Pierre
et+ GROLLIER Michelle . Ý <span style='color:red'>Chateauneuf / Charente 16</span>.
dt Vouhé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4236. CM
12/02/1792. X 13/02/1792 Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POINFERRE François de +
Gabriel et + BOUTELAUT Jeanne. Ý <span style='color:red'>Le Bouchage 16</span>.
dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VACHE Geneviéve de Pierre et
BONNIN Marie. Ý et dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4230. CM
26/03/1766. X 09/04/1766 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUX Jean de + Jean et
CORNUAUD Jeanne. Ý <span style='color:red'>Flaye en Angoumois 16</span>. dt Le
Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>OZAINNEAU Marie Marguerite
Geneviéve de + Jean et THIBAULT Marguerite. Ý St Loup de Montreau diocèse de Sens.
dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4231. CM
22/11/1773. X 10/01/1774 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUX Jean ( veuf AUZAINNEAU
Marie Marguerite ) de + Jean et CORNEAU Jeanne. Ý <span style='color:red'>Flat
en Angoumois</span> <span style='color:red'>16</span>. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VERNEUIL Jeanne de + Jacques
et THAUNAY Marguerite. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BUARD François. Etude
à Surgères 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4299.
Promesse 27/10/1749. CM 29/11/1749.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BECQUET Jean de + NICOLAS et
+ CHEMINADE Françoise. Ý <span style='color:red'>Cellefrouin 16</span>. dt
Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRIMAUD Marguerite ( veuve
MICHEL Elie ) de Michel et + MONTAGNE Marie Jeanne. Puyravault 17. dt Surgères
17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4298. CM
30/09/1747. X 06/11/1747 Breuil la Réorte 17. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEDAUTEAU Pierre de + Pierre
et + JOUBERT Anne.Ý <span style='color:red'>St Laurent de Céris 16</span>. dt
Charentenay 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENOU Marie de + Jacques et
ROBION Marie. dt Breuil la Réorte 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4299. CM
02/08/1751. X 02/08/1751 Surgères Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MATIGNON Pierre de Pierre et
DELAVERGNE Marie.Ý <span style='color:red'>Ligniéres 16</span>. dt Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEGUIN Marthe Françoise de
Jean et + HERAULT Elisabeth. Ý La Rochelle 17. dt Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BUARD François.
Etude à Surgères 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4301. CM
08/12/1756.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUN Jacques de + Pierre et +
DE BEAULIEU Catherine. Ý <span style='color:red'>St Michel de Confolant 16</span>.
dt Rochefort / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBAT Jeanne de + Jean et
ROSSIGNOL Marguerite. dt Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4301. CM
01/06/1755. X 30/06/1755 St Germain de Marencennes 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAMUS Pierre de René et PEULTIN
Marguerite. Ý <span style='color:red'><span
style='mso-spacerun:yes'> </span>Sigogne 16</span>. dt St Germain de
Marencennes 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTEAU Suzanne de + Jean et
+ BOURDIN Suzanne. dt Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4303. CM
17/01/1769. X 17/01/1769 St Saturnin du Bois 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GADIOUX Pierre de François et
DUBOUX&nbsp;? Madeleine. Ý <span style='color:red'>Villefanan 16</span>. dt St
Saturnin du Bois 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GROUSSEAU Jeanne Françoise
Angélique de Philippe et + BENOIST Françoise. dt St Saturnin du Bois 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4304. CM
27/09/1766. X 27/11/1766 Surgères Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRARDIN Jean de + François
et MESNARD Madeleine. <span style='color:red'>Ý Paizay Naudouin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOUVRY Marie Pélagie de +
Charles François et BORGARD Ester . dt Surgères Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="4304. CM" w:st="on">4304.
 CM</st1:metricconverter> 11/11/1766. X 24/11/1766 St Mard 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEBOT Jean de + Guillaume
et + GEOFFROY Marie<span style='color:red'>.Ý Champmillon 16</span>. dt Surgères
St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRILLAUD Marie de + Jean et
MARCHAND Marie. dt St Mard 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4307. CM
25/04/1784. X 05/07/1784 Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABROUSSE François de + Louis
et BRILLIAC Catherine. Ý <span style='color:red'>Manot 16.</span> dt St Mard
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINSONNEAU Catherine de +
Michel et + MINGUET Jeanne. Muron 17. dt Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4304. CM
09/05/1764. X 21/05/1764 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEAUD Jacques de + Jean et
ARRONDEAU Marguerite.Ý <span style='color:red'>Bayers 16.</span> dt Forges 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEPINE Catherine de + Pierre
et BOULERNE Marguerite. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4302. CM 22/08/1760.
X 10/09/1760 Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PLANTEVIGNE Jean de Pierre et
BAUD Marie. <span style='color:red'>Ý Villejésus 16</span>. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDRY Madeleine de + François
et LEPINE Catherine. dt Le Thou 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4308. CM
30/05/1779. X 30/06/1779 Surgères Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RABANIER Jacques ( veuf DORAY
Marie ) de + Charles et + DAVID Jeanne. Ý <span style='color:red'>Ranville 16.</span>
dt Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEBON Marguerite de +
Jacques et + BUFFETEAU Marguerite. Ý Migré 17. dt Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GIURAUD Louis.
Etude à Péré 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4341. CM
21/02/1803. X 22/01/1803&nbsp;? St Germain de Marencennes 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAURIN François de Jacques et
+ JOUSSAUME Jeanne.Ý <span style='color:red'>St Hamand de Boixe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Marie de + Louis et +
BILLAUD Marie. dt St Germain de Marencennes 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GUIGNARD Pierre.
Etude à Surgères 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4377. CM
10/02/1783.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAGE Louis de Jean et PETIT
Anne. Ý <span style='color:red'>Marthon 16</span>. dt Ferrière d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PARY Marguerite de Marc Henry
et GIRODEAU Marianne. dt Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4383.
Promesse 06/06/1793.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Jean de + Jacques et
VEDEAU Jeanne. Ý <span style='color:red'>St Maurice de Moinxe 16</span>. dt La
Rochelle St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLOT Catherine de Pierre
et LARELLE Louise. Ý St Médard 17. dt Rochefort / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4364. CM
08/01/1760.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GINDREAU François de Jean et
GANDELIN Anne.Ý <span style='color:red'>Les Trois Pally 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JAY Jacquette de + Pierre et
ARCHAMBAUD Marie Anne. Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4364. CM
13/11/1761. X 17/11/1761 Vandré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HUMIER Philippe de Jacques et
NIMIER Marguerite.Ý <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAPPANE Geneviève de +
Pierre et SENOLLET Marie Henriette. Vandré 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4383. CM
05/08/1794.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIORT Jean de + Jean et
ROULLAND Marie. Ý <span style='color:red'>St André des Combes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBAUD Marianne de Simon et
+ XXX Catherine. Breuillé 17<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LEVALLOIS<span
style='mso-spacerun:yes'>  </span>XX. Etude à Surgères 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4505. CM
18/11/1795.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HIVON Jean Pierre ( divorcé
de FOURNIER Marguerite à <span style='color:red'>Cognac 16</span> )de + Pierre
et VIELLE<span style='mso-spacerun:yes'>  </span>Marguerite. <span
style='color:red'><o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;color:red'>Ý Cognac 16</span><span
style='font-size:10.0pt'>. dt Puyravault 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS Elisabeth de Charles
et + BENET Charlotte. dt Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4500. CM
13/06/1791. X 27/06/1791 Vouhé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAIDET Joseph de Louis et
NEAU Jeanne.Ý <span style='color:red'>Bréville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DAMOUR Catherine de François
et PAILLE Marie.Ý St Cymphorien 79. dt Vouhé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4501. CM
09/07/1792. X 09/07/1792 Curé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORIN Pierre de + Jean et
(<span style='mso-spacerun:yes'>  </span>LENE Marie + <span style='color:red'>à
Rouillac</span> ). dt Curé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POUSIN Elisabeth de Jacques
et BONNIN Françoise. dt Curé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4498. CM
06/12/1788. X 16/02/1789 Landrais 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VALLEE Jacques de Louis et +
PRAT Marie. <span style='color:red'>Ý Londigny 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BIROT Marie de Jacques et
VRET Anne. Ý Landrais 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire POMMIER François.
Etude à surgères 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4525. CM
16/08/1733. X 17/08/1733 Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FANIER Antoine de François et
+ GABORIT Héléne.Ý <span style='color:red'>Paizay Naudouin 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEVRIER Marianne de
Guillaume et + BONNET Jeanne. Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SIMONOT Henry.
Etude à Surgères 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4572. CM
29/11/1762. X 11/01/1762 Muron 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDOUIN Pierre de Pierre et
BOURGNET Gabrielle. <span style='color:red'>Ý Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOLLIVET Marguerite ( veuve
JULLIOT Augustin ). Muron 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4585. CM
14/02/1779.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SAUVIGNON François de +
Jacques et TOUCHET Jeanne. Ý <span style='color:red'>Les Gours en Poitou 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GARNAULT Suzanne ( veuve
JOUBERT Charles ) . Surgères St Pierre 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4573. CM
27/11/1763.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOURISSEAU Jean ( veuf
RIBREAU Anne ).Ý <span style='color:red'>Bréville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITEAU Louise de Louis et
GIRAUDEAU Marguerite.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="4579. CM" w:st="on">4579.
 CM</st1:metricconverter> 19/01/1769. X 18/04/1769 St Mard 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VRIGNEAUD Charles de +
François et <span style='mso-spacerun:yes'> </span>BOUCHETEAU Catherine. Ý <span
style='color:red'>St Laurent de Lochau en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TETRON Jeanne de Jacques et +
CHEVALIER Marie. St Mard 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire TIFFOINEAU Louis.
Etude à St Georges du Bois 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4602. CM
02/05/1735.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DAUNIX Jacques de + François
et BLANCHET Marie.Ý <span style='color:red'>Orgedeuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DROUNEAU Marie de P ierre et
+ CHENAUD Jeanne. Bouhet 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire TESSIER Augustin.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4606. CM
25/08/1768 X 26/10/1768 La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAMY Jacques de Jacques et
POITEVIN Jeanne. Ý <span style='color:red'>St Coutant 16&nbsp;?.</span> dt La Rochelle
Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIVAUD Jeanne de Jacques et
MERLET Marie. Ý Chail 79. dt La Rochelle Notre Dame 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire CUDORGE René.
Etude à Thairé d’Aunis 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4891. CM
09/04/1764 . X 15/07/1764 Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MALARD Jean de + Jean et +
FUREAU&nbsp;? Marie. Ý <span style='color:red'>Chagnais en Angoumois 16.</span>
dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAGNON Marie de + Pierre et +
RICHARD Françoise. dt Châtelaillon 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4892. CM
13/04/1766. X 03/06/1766 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAIMOND Jean Baptiste de
Emery et + LABBEE Marguerite. <span style='color:red'>Ý en Angoumois 16.</span>
dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Marie de Jean et +
GLENEAU Marguerite. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LEDOUX<span
style='mso-spacerun:yes'>  </span>Antoine. Etude à Thairé 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4953. CM
10/07/1777. X 10/07/1777 Mortagne la Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BETO_IL Pierre de + Etienne
et + CHARON Jeanne. Ý <span style='color:red'>Rouvre 16.</span> dt Mortagne la
Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPPEAU Françoise ( veuve
AUBERT Jean ) . dt Mortagne la Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4955. CM
25/02/1778. X 25/02/1778 Mortagne la Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSEAU Pierre de + Jean et
+ DAVID Michelle. Ý <span style='color:red'>Courbillac 16.</span> dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUDIN Marie ( veuve NAUD
Pierre ) . dt Mortagne la Vieille 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4897.
Promesse 19/09/1759. CM 07/01/1760. X 05/01/1760 Thairé 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FLEURIEAUD Jacques ( veuf
PENO&nbsp;? Magdeleine) . Ý <span style='color:red'>Charmant 16.</span> dt
Salles / Mer 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLEAU Marguerite de Jean et
PEPIN Michelle. Ý St Pierre Lauzay en Saintonge . dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4961. CM
03/01/1784. X 26/01/1784 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIGNARD Pierre de + Jean
Pierre et THONARD Jeanne. <span style='color:red'>Ý Segonzac 16</span>. dt La
Rochelle St Jean 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GASCHET Anne de Pierre et +
GAUTIER&nbsp;? Marguerite. Sauzé 79. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4946.
Promesse 15/01/1769. CM 07/02/1769. X 07/02/1769 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABATTU Jean de + Jean et
NADEAU Catherine.Ý <span style='color:red'>Chavenat 16.</span> dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUBERT Françoise de Jean et
+ ROUSSEAU Marie. Ý St Félix 17. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4950.
Promesse 08/08/1773. CM 20/09/1773. X 22/09/1773 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LANDAIS Jean de + Jean et
TRIGEAU Marthe. Ý <span style='color:red'>Tornac 16.</span> dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNET Marie Marguerite (
veuve GARNIER Jean et VILLAIN Jean )de + Pierre et TROU Marie.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4953. CM
27/01/177. X 27/01/1777 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LURAND Jean de + Jacques et
LEGERON Catherine. Ý <span style='color:red'>Villognon 16</span>. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JANNEAU Jeanne de Mathurin et
+ DUGUE Marie. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="4897. CM" w:st="on">4897.
 CM</st1:metricconverter> 28/10/1762. X 10/01/1763 St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUSSET François de Jacques
et + MARTINAUD Catherine. Ý <span style='color:red'>St Etienne en Angoumois 16.</span>
dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENESTEAU Marie de Jacques et
DAVY&nbsp;? Jeanne. dt St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4897. CM
25/02/1761. X 20/04/1761 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SUIRE Louis de + Pierre et +
LAMARCHE Magdeleine. Ý <span style='color:red'>St Germain en Poitou 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEROUIN Marie de + Simon et
+ GUILLORIT Marie .dt Marsay 17. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire LEDOUX Antoine.
Etude à Thairé 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4901. CM
08/02/1802. X 09/02/1802 Thairé 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GALLOIS Jean de + Jean et
PERROTIN Marie. Ý <span style='color:red'>Ste Colombe 16</span>. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RABANNIER Elizabeth ( veuve
GABORIT Mathurin ). dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire COURSOLLE Pierre.
Etude à Thairé 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4921.
Promesse 05/07/1801. CM 27/07/1801. X 27/07/1801 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUTET Jean de Jean et MERMIN
Jeanne.Ý </span><span lang=EN-GB style='font-size:10.0pt;color:red;mso-ansi-language:
EN-GB'>St Sulpice de Cognac 16</span><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIGEONNIER Marie Catherine de
Jacques et RIBIERE Marie Anne. </span><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>Ý Clavette 17. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol;
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4914.
Promesse 24/12/1788. X 08/06/1789 Thairé 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEMEAU Louis de + Pierre
dit La GROYE et + BALLOTEAU Anne. <span style='color:red'>Ý Mansle 16.</span>
dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VRILLAUD Catherine ( veuve
RENAUD Louis ) de + François et + ROBINETTE Marie. Ý et dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4920. CM
13/02/1797. X 11/02/1797 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUHAUD Louis de Louis et +
BOISSEAU Marguerite. <span style='color:red'>Ý Villejésus 16</span>. dt Thairé
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMET Marie Anne ( veuve
FESTY Michelle ). Ý Croix Chapeau 17. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4916.
Promesse 09/12/1791. CM 08/01/1792.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEIGNEUR François de +
François et BERTRAND Marguerite. Ý <span style='color:red'>St Etienne de Barre
16</span>. dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAVEREAU Louise de + Louis et
+ DIEU Magdeleine. Ý et dt Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4920. CM
07/02/1799. X 08/02/1799 Ciré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAUD Guillaume de Jacques
et + COUTINE Elisabeth. Ý <span style='color:red'>St Cloud 16</span>. dt
Voutron 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FROUIN Elisabeth ( veuve
BOUYER Pierre ). dt Voutron 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MOREAU Jean
François. Etude à Thairé 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4940. CM
27/05/1753. X 12/06/1753 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNET Pierre de + Jean et
CICARD Renée. <span style='color:red'>Ý Ambourie 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TROU Marie ( veuve GARNIER
Jean ) de + Gabriel et REBIERRE Marie. Ý Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span lang=EN-GB style='font-size:
10.0pt;font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:
Symbol;mso-ansi-language:EN-GB'><span style='mso-list:Ignore'>·<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=EN-GB style='font-size:10.0pt;
mso-ansi-language:EN-GB'>3 E <st1:metricconverter ProductID="4944. CM" w:st="on">4944.
 CM</st1:metricconverter> 29/01/1776. X 29/01/1776 St Vivien 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JONQUET Jacques de + François
et + CAILLAUD Suzanne. Ý <span style='color:red'>Champniers 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAMBAUD Anne de + Pierre et +
CARPENET Marie. Ý Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4944.
Promesse 14/10/1777. CM 17/11/1777. X 17/11/1777 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VALLET Louis de Pierre et +
CHEVALIER Suzanne. Ý <span style='color:red'>Cherves 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUVE Marie Catherine de +
Etienne et + DERAIN Marie Anne. Ý Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>3 E 4942. CM
27/11/1769. X 27/11/1769 Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLAIN François de + Nicolas
et BONVALLET Marguerite. Ý <span style='color:red'>Balzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAMBAUD Anne Magdeleine de +
Antoine et SABOURAUD Françoise. Ý Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire OCLER Toussaint.
Etude à Angoulins 17.<o:p></o:p></span></b></p>

<p class=MsoNormal style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l13 level1 lfo2;
tab-stops:list 54.0pt'><![if !supportLists]><span style='font-size:10.0pt;
font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:Symbol'><span
style='mso-list:Ignore'>·<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:10.0pt'>E 571. CM
29/07/1629.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTAYER Denis de +
Christophe et + CARDINEAU Marye. Ý <span style='color:red'>St Germin en
Angoumois 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FARINEAU Marye de + François
et + GUIRAULT Marye. Ý La Rochelle 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire HUTEAU XX . Etude
à Brizambourg 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 783. CM 10/10/1631.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DEJUIGNON&nbsp;? Simon de
Jehan et ROUX&nbsp;? Marie.Ý <span style='color:red'>Nonac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLAIN Mathurine de François
et PINAUD Michelle. Nantillé 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 784. CM 04/06/1638.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUDGUERRE&nbsp;? Louis +
Pierre et GIRAUD Louise<span style='color:red'>.Ý St Laurent des Combes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIST Françoise de Jean et
CHARRON&nbsp;? Jeanne. Brizambourg 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 787. CM 26/08/1651.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Anthoine de Louis et
PAYAN Vincende.Ý <span style='color:red'>St Sulpice de Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VITET&nbsp;? Perrine de
Guillaume et TABAUD Andrée. Brizambourg 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 788. CM 20/02/1662.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAROBERTIERE<span
style='mso-spacerun:yes'>  </span>Jean de Etienne et MAIRE Pentecôte.Ý <span
style='color:red'>St Sulpice de Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHEGAY Jeanne de Issac et
+ FOUCAUD Suzanne. Ecoyeux 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BRAULT Jean. Etude
à Brizambourg 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 879. CM 15/03/1686.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSON Cléman de + Jean et
PAUTRE&nbsp;? Catherine.Ý <span style='color:red'>Bouteville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS Marguerite de Pierre
et + PARANTEAU Jeanne.Ý <span style='color:red'>en Angoumois 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 885. CM 05/01/1713.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HELI&nbsp;? Jean de Jean et
JACQUES Marie.Ý <span style='color:red'>St Sulpice de Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOUSSAIN&nbsp;? Mathurine de
Jacques et XX Marguerite. Bercloux 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GAILLEDREAU Jehan.
Etude à Nantillé et Taillebourg 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 964. CM 14/01/1619.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DECOURSELLE Pierre de
Guillaume et BOUT Clémance.Ý <span style='color:red'>Sonneville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BASTEAU Jacquette de François
et + JACQUES Mathurine . Authon / Ebéon 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l8 level1 lfo3;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>E 964. CM 14/01/1619.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JACQUES Pierre de Pierre et
BASTEAU Jacquette. Nantillé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DECOURSELLE Gabrielle de
Guillaume et BOUT Clémance.Ý <span style='color:red'>Sonneville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BOURDIN Jacques.
Etude à Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l2 level1 lfo27;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E 31/23. CM
     03/12/1628 passé au château.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>MÝ
BEAUMENOIR Jehan greffier de la châtellenie de Charron dt à l’+le d’Elle. de +
Clément et ROUSSEAU Magdeleine.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>AYRAULT
Marie de + Simon et + BRANCHIER Marie. Ý <span style='color:red'>Giret&nbsp;?
en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SEILLE Pierre.
Etude à Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l10 level1 lfo24;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 31/27. CM 20/01/1624.<b><o:p></o:p></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PREVOT Louis Ý <span
style='color:red'>Ronsenat en Angoumois 16</span>. dt à Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOUNIER Marthe veuve VEILLET
Pierre. dt à Marans 17.<b><o:p></o:p></b></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire ROY André. Etude à
Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l10 level1 lfo24;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 31/51. CM Catholique 03/06/1653.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BESSAU Jehan Ý <span
style='color:red'>St Cybard en Angoulême 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TASTE Jehanne Ý <span
style='color:red'>Echiré en Saintonge 79</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l10 level1 lfo24;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 31/50. CM Catholique 24/08/1628.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMAS Pierre de + Pierre et +
AUDRAUL Marguerite dt <span style='color:red'>Cussac paroisse de<span
style='mso-spacerun:yes'>  </span>Rougnac 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TOUZEAU Anne de + Bertrand et
GABOIS Michelle. dt Marans 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l10 level1 lfo24;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 31/50. CM Catholique 08/09/1628.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFON Antoine de Jehan et
THOMAS Marguerite de Valady 12. dt Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELACOUR Marie veuve LARMADE
Bernard. dt. <span style='color:red'>Cougnat 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l10 level1 lfo24;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 31/50. CM Catholique 03/12/1623.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARILLET Maingot <span
style='color:red'>d’Angoulême 16</span>. de Jehan et GUILLON Colette.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRIER Marie de Mathurin et +
GAULTEAU Marie. dt Marans 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l10 level1 lfo24;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 31/46. CM Catholique 27/05/1647. X 03/07/1647
     Marans 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOTTE Pierre Ý <span
style='color:red'>en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNET Marguerite de +
Jacques et ………..dt Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire FERRAND André.
Etude à La Rochelle 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/2. CM catholique 28/09/1539.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUSSE Pierre dt .Clavetes en
Aulnis 17 de Jehan et NERAULT Jehanne dts. <span style='color:red'>Moussans en
diocèze</span> <span style='color:red'>d’Angoulmoys16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOULCET Phelippes de + Jehan
et + MARLAUD Anne dt. Clavettes 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/2. Ratification passé le 17/04/1542 à St
     Médard 17, suivant dispositions prises suite au contrat de mariage passé
     le 27/10/1536.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTINEAU Pierre dt.
L’Aubertiére 17. de + Jehan et DELICQUET Jehanne dt. St Pierre de <span
style='color:red'>Breillac 16</span>.<span style='mso-spacerun:yes'>  </span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FEUILLARD Marguerite veuve
BREIGNAULT dt. l’Aubertiére, paroisse de St Médard 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>de + Benoist et VIGNET
Guillete dt. <span style='color:red'>Dussac diocèze</span> <span
style='color:red'>d’Angoumois 16</span>. <o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire ROY Charles. Etude
à Saint Christophe 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/8. CM 30/11/1610.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURREAU Benest, dt La Jarrye
17.de Guillaume et BAUDUC Catherine dt. <span style='color:red'>Gourville en
Angoulmois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SOUCHARD Jehanne de Jehan et
GAULTHIER Catherine. dt St Christophe 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 59/8. CM 13/03/1611.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELATOUCHE Micheau d’Anthoyne
et AFFESTE Raimonde. dt <span style='color:red'>Aigre 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GASTINEAU Marye de + Yzaac et
HIRVOIS Isabeau. dt Allenet en Saintonge 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire POULLIN Michel.
Etude à Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/65. CM 04/11/1731. X 23/01/1732 <st1:PersonName
     ProductID="La Rochelle St Jean" w:st="on">La Rochelle St Jean</st1:PersonName>
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURGOUIN Gabriel Erasme de +
Pierre et PLANSON Marie. Ý et dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on">La Rochelle St Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BESSON Jeanne de + François
et<span style='mso-spacerun:yes'>  </span>NICOLAS Jeanne. Ý <span
style='color:red'>La Rochefoucaud 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on">La Rochelle St Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 E 66/84.
     Pro. 05/06/1750. CM 29/06/1750. X 30/06/1750 Marans 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GARNIER Pierre de + Pierre et
POINSET Renée. <span style='color:red'>Ý Paizay Naudouin 16</span>. dt Marans
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAISSAY Marie de Nicolas et
+ GAUDEFFROY Marie. Ý Fontenay le Comte St Nicolas 85. dt Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire PINEAU Jean Julien. Etude à Aulnay 79.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 105/79. CM 06/10/1844.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AIMARD Pierre de Jacques et
MORIN Marie. <span style='color:red'>Villefagnan 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MICHEAU Françoise de Jean et
MEDEAU Jeanne. St Pierre de l’+le 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E<span style='mso-spacerun:yes'> 
     </span>105/60. CM 30/01/1831.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BESLI Jean de + Pierre et
TORRIN Jeanne<span style='color:red'>. Chassiecq 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RATEAU Marie de Jean et +
GUIONNET Marie. Villemorin 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 105/66. CM 01/09/1836.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRISSONNEAU Pierre veuf<span
style='mso-spacerun:yes'>  </span>HIDREAU Louise de + Charles et LAIDET Jeanne.
Dampierre sur Boutonne 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ARRAMY Marie de Jean et
PERONNET Jeanne. <span style='color:red'>Barbeziéres 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E 105/89. CM
     14/10/1850.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>DUVERGIER
Pierre de Jean et BREAU Marie. <span style='color:red'>Mareuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>POMMIER
Justine de Pierre et MIRANDE Françoise. <st1:PersonName ProductID="La Villedieu"
w:st="on">La Villedieu</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E 105/71. CM
     01/03/1840. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>GODET
Louis de Louis et BRISSON Marie. Contré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>TOUCHARD
Marie de François et VILLENEUVE Marie. <span style='color:red'>Charme 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E 105/81. CM
     25/11/1845.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>GUERRIN
Etienne Joseph d’ Etienne et QUERON Marie. Villemorin 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>CAILLAUD
Marie Ý 1822 de François et CHEVALIER Madeleine. <span style='color:red'>Les
Gours 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E 105/66. CM
     28/06/1836.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>RANGEARD
Louis Ý1813 de Jean et DEVEZAUD Marie. <span style='color:red'>Lonnes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>MERCIER
Françoise de René et GUERIN Louise. Saleignes 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E 105/67. CM
     07/01/1837.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>TALLON
Pierre de Jean et VEILLON Marie. <span style='color:red'>Naux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>GOUINEAU
Marie Elisabeth de Elie et LANDRY Marie. Nuaillé sur Boutonne 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MATHE Simon. Etude
à Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/141. CM 07/01/1768. X 07/01/1768 Marans
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BAILLARGE Marthial de Jean
et<span style='mso-spacerun:yes'>  </span>DEMOND Magdeleine. Ý <span
style='color:red'>Negrat en Angoumois 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLARTON Marie Annede Mathurin
et POUPART Marie Anne. Ý Charron 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire GYOT Jean. Etude à
Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/274. CM 04/05/1744. X 05/05/1744 Marans
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GIBAUD Michel de Michel et
MONTEAUBAN Antoinette. Ý <span style='color:red'>Chateauneuf 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LUCAS Jeanne veuve BOUCHET
Alexandre. dt Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BICHON Estienne.
Etude au Comté de Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/327. CM 10/04/1768. X 08/06/1768 Le Gué de
     Velluire 85.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHATEFAU Jean de + Louis et +
LAROZE Jeanne. Ý <span style='color:red'>Dange Duc en Angoumois 16</span>. dt
Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BINNEAU Marie Jeanne de +
Mathurin et MOUNIER Marie.Ý Le Gué de Velluire 85. dt Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire JONON Anthoine
Victor. Etude à Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/348. CM 06/04/1782. X 30/04/1782 Marans
     17.<b><o:p></o:p></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BELLE Jean de Jacques et
LIMOUZIN Françoise. <span style='color:red'>Vivier Jussaud en Angoumois 16</span>.
dt <st1:PersonName ProductID="La Rochelle N. D." w:st="on">La Rochelle N. D.</st1:PersonName>
17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAUD Marie Roze veuve
GIBAUD André. dt Aligre 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/349. CM 28/06/1783. X 30/06/1783 Marans
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COCULETTE Marc de + Charles
et BRUNEAU Marie. <span style='color:red'>Seillette 16</span>. dt Aligre
(Marans) 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NERAUD Françoise de + Pierre
et SUIRE Magdeleine. Ý et dt Aligre 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire BAUGA Jean Pierre.
Etude à Andilly et Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/392. CM 15/06/1795. X 18/07/1795 Marans
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><st1:PersonName ProductID="GIRAUDEAU Pierre" w:st="on"><span
 style='font-size:10.0pt'>GIRAUDEAU Pierre</span></st1:PersonName><span
style='font-size:10.0pt'> de Marc et BRIGNOUX&nbsp;? Marguerite. Ý <span
style='color:red'>Vars 16.</span> dt Marans 17. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIST Marie Roze, veuve
DORIDON André. Ý et dt Marans 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/378. Promesse 08/06/1781. CM 17/06/1781. X
     18/06/1781 Marans 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURANT Jean de Martial et +
ROY Marie. Ý <span style='color:red'>St Laurant de la Chaux diocéze d’Angoulême
16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRANGE Marie, veuve DENIS
Jacques. dt Aligre 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire SAGOT Jacques.
Etude à Marans 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/521. CM 23/01/1797. X 15/02/1797 Marans
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDOUIT Pierre de + Jacques
et BAUDRY Jeanne. Ý Benet 85. dt Fontenay le Peuple 85.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MENUET Jeanne de + Pierre et
JOBET Marie. <span style='color:red'>Bourg sur Charente 16</span>. dt Marans
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 66/503. CM 10/05/1778. X 12/05/1778 Marans
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUTIER Charles de + Jacques
et RAVIN Marie. Ý <span style='color:red'>Oradour 16</span>. dt Aligre 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NERON Hélenne de + Pierre et
+ FAVREAU Jeanne. dt Aligre 17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MERCIER Louis.
Etude à <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E/ 356.<span
     style='mso-spacerun:yes'>  </span>CM 16/02/1681. X 03/11/1681 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>FLEAU
Isaac marchand de + Allain marchand et + PINET Toinette. Ý <span
style='color:red'>St Faigne en Saintonge 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>PELLOQIN
Catherine veuve de BRISSON Charles tailleur d’habits. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E/ <st1:metricconverter
     ProductID="356. CM" w:st="on">356. CM</st1:metricconverter> 11/09/1681. X
     29/09/1681 <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>GUYARD
René maitre couvreur et plombeur veuf de GIRARD Catherine. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>PELLUCHON
Jeanne de Jean laboureur et + GANAUD&nbsp;? Marie. Ý <span style='color:red'>en
Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle St Sauveur"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Sauveur</st1:PersonName> <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E/356. CM 16/11/1681.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>VIOLLET
François laboureur de + Louis et + DUBOIS Catherine. Ý <span style='color:red'>Pougné
en Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>VASLIN
Jeanne de + François et COUTRET Jeanne. Ý Dompierre 17. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> hors les murs
17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire MABILE. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<p class=MsoNormal><span style='font-size:10.0pt'>3 E/473. CM 18/07/1694. X
09/08/1694 <st1:PersonName ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLARD François jardinier de
François laboureur et LESCHALLE Françoize. Ý <span style='color:red'>St Amand
de B…en</span> <span style='color:red'>Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNET Françoise de + André
farinier et COUHET Françoise. Ý Villefollet en Poitou 79. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/471. CM 03/07/1689. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>AUDOUIN
Jean soldat en garnison de + Jean meusnier et VILLAIN Perrinne. Ý du faubourg
des dames près Xaintes 17. </span><span style='font-size:10.0pt'>dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt;mso-bidi-font-weight:bold'>MICHAUD
Françoise de Jullien portefaix et DEBAU Renée. Ý <span style='color:red'>Ruffec
en Poitou 16</span>. </span><span style='font-size:10.0pt'>dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E /470. CM 12/05/1686. X 26/08/1686 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOULLOUGNE François
cordonnier Ý Varaize en Xaintonge. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOLLY Jeanne de Jean maitre
tailleur d’habits et PINEAU Françoise. Ý <span style='color:red'>Cougnat en
Xaintonge 16</span>. dt <st1:PersonName ProductID="La Rochelle St Barthélémy"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/487. CM 12/08/1685. CM cassé le 05/11/1685.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CONSTANTIN Anthoine laboureur
de + Anthoine laboureur et + BERTHOMMEE Marie. Ý <span style='color:red'>St
Esteffe en</span> <span style='color:red'>Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SEGUIN Marie veuve de SAMSON
Martin marinier. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La
 Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/471. CM 20/07/1687. X 18/08/1687 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CONSTANTIN Anthoine laboureur
de + Anthoine laboureur et BERTHOMME Marie. Ý <span style='color:red'>St
Esteffe en Angoumois</span> <span style='color:red'>16</span>. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DOUCET Marie de Louis et
FONTENEAU Marguerite. Ý <st1:PersonName ProductID="La Jarrie Audouin" w:st="on"><st1:PersonName
 ProductID="La Jarrie" w:st="on">La Jarrie</st1:PersonName> Audouin</st1:PersonName>
17. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/487. CM 09/11/1687. X 24/11/1687 Aytré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUBAN <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/473. CM<span style='mso-spacerun:yes'> 
     </span>fin 1696. x 07/01/1697 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JAUBRUT Pierre de + Daniel
laboureur à bœufs et AYMARD Marie. Ý <span style='color:red'>Villiers le……..en
Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MIMET Marie de Hélie
cherpentier et FOUCHER Mathurine. Ý N&nbsp;?/Chisé en Poitou 79. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/472. CM 05/11/1691. X 21/11/1691 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LARDEAU Isaacq marchand
voiturier de + Isaacq marchand + MAROT Françoise. Ý <span style='color:red'>Villefagnan
en Angoumois</span> <span style='color:red'>16</span>. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRARD Françoise de +
François maitre menuisier et + LEFOR Renée. Ý <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>17. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt;mso-bidi-font-weight:bold'>3 E /470. CM
     22/01/1685. X 22/01/1685 <st1:PersonName ProductID="La Rochelle Notre Dame"
     w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MILAN Jacques, buhandier de +
Jacques marchand et + BEGOUIN Marthe. Ý <span style='color:red'>Villejésus en
Poitou 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> Notre</st1:PersonName> Dame</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANDRE Suzanne veuve de
COUGNON Pierre buhandier. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/472. CM 10/05/1693. X 03/02/1694 Nieul sur
     Mer 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLEGE Léonard laboureur de
Pierre marchand et + BARBAIGNACQ Ester. Ý <span style='color:red'>Confollan en
Poitou 16</span>. dt Nieul 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLE Marie de + Hellie
thonnelier et + BIZIERE Judith. Ý et dt à Nieul 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire THIRE Michel. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/487. CM 09/10/1687.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOILEVIN Jean sargier de +
Jean<span style='mso-spacerun:yes'>  </span>charpentier de gros œuvres et +
TRUAU Perrine. Ý <span style='color:red'>Fryat en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAPEAU Renée de + Michel
mareschal et L….Marie. Ý Longeville en Poitou 85. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/ 487. 13/05/1685.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COUSSOT Jean de + Jacques
laboureur et GIRAUD Jeanne. Ý <span style='color:red'>Tusson en Poitou 16</span>.
dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUYBERT………de + Louis et +
GEORGET Jeanne. Ý <st1:PersonName ProductID="La Gotterie Isle" w:st="on"><st1:PersonName
 ProductID="La Gotterie" w:st="on">La Gotterie</st1:PersonName> Isle</st1:PersonName>
d’Olléron 17. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/487. CM 04/04/1687.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GRELLET Louis de + Jullien
laboureur et + OCLERQ Magdeleine. Ý <span style='color:red'>St Fronq en
Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La
 Rochelle</st1:PersonName> <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DANDEAU Françoise veuve de
BOUHIER Phelipe farinier. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La
 Rochelle</st1:PersonName>17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire PAUL Gille. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/554. CM 10/06/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRIMET Pierre garson
raffineur d’André marchand et ROBAIN Marguerite. Ý <span style='color:red'>Aubeterre
en Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTIVIER Jeanne de + Pierre
portefay et + GARLOPPEAU Marie. . dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/553. CM 27/06/1700. X 14/07/1701 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LESCHELLE François journalier
de Philippe charpentier de gros œuvres et COLLET Marie. Ý <st1:PersonName
ProductID="La Faye" w:st="on"><span style='color:red'>La Faye</span></st1:PersonName><span
style='color:red'> en</span> <span style='color:red'>Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELALANDE Marie de Jean
laboureur et PERAUDEAU Jeanne. Ý Sansay en Poitou 79. <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/554. CM 18/06/1702. X 04/07/1702 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PERAUD Michel laboureur de
Jean laboureur et BRIOT Léonarde. Ý <span style='color:red'>N D d’Aloue en
Poitou 16</span>. dt St Maurice 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARAY Marie veuve de GRENOT
Jean laboureur. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/553. CM 18/07/1700. X 09/08/1701 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RANGE Pierre laboureur de +
François laboureur et COMPAGNON Louize. Ý <span style='color:red'>Verdille en
Saintonge 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURENT Marie veuve de DAVID
François laboureur. Ý Souché en Poitou 79.dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/554. CM 12/04/1703. X 28/04/1703 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RANGE Jean garson thonnellier
de + Jean charpentier de gros œuvres et GAUDAUBERT Michelle. Ý <span
style='color:red'>Verdille en Xaintonge 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUPRAT Magdelainne de +
Philippe charpentier de navire et ROCQ Henriette. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/553. CM 09/01/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TAIZARD René mercier de +
René et&nbsp;<span style='mso-spacerun:yes'>   </span>?<span
style='mso-spacerun:yes'>   </span>sa 1Ý femme. Ý <span style='color:red'>Paizé
Audouin en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURGEOIS Louise de + Jacques
et TEXIER Jeanne. Ý Lermenaud en Poitou 85. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire GUESNIER. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>.3 E/825. PM 14/03/1745. CM 08/06/1745. X
     08/06/1745 Nieul 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESPREVANT François marchand
de + Urbin marchand et PAGE&nbsp;? Charlotte. dt <span style='color:red'>N D
Niort 79.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUREAU Magdeleine Henriette
de Jacques marchand et JACAUD Marie Elisabeth. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/825. PM 23/08/1745. CM 17/11/1745. X
     17/11/1745 <st1:PersonName ProductID="La Jarrie" w:st="on">La Jarrie</st1:PersonName>
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITTAUD Jean laboureur de +
Jean laboureur et PINGANAUD Françoise. dt <st1:PersonName ProductID="La Faye"
w:st="on"><span style='color:red'>La Faye</span></st1:PersonName><span
style='color:red'>&nbsp;? en Angoumois 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAUREAU Marie de + Jacques
sargettier et PELLETIER Jeanne. Ý et dt <st1:PersonName ProductID="La Jarrie"
w:st="on">La Jarrie</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/825. CM 08/05/1745. X 10/05/1745 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LECLERC Pierre marchand
droguiste de Gabriel marchand et GALLAIS Antoinette. Ý <span style='color:red'>Angoulême
16</span>. dt <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORANCY Marie Magdeleinne de
+ George entrepreneur travaux du Roy et DAVIET Jeanne. Ý et dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/826. CM 27/10/1746.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RENOLLEAU Jean jardinier de
Jean jardinier et COMBAUD Anne. Ý <span style='color:red'>FOU……en Angoumois 16</span>.dT
Montroy 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROGE Jeanne de + Jean et
BOITTAU Marie. Ý Ste Hermine en Bas Poitou 85. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/826. CM 17/07/1746.08/08/1746 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Jean journalier veuf de
GUESNIER Catherine. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BUSSAC Marie de + Léonard
charpentier et CHERBONNIER Françoise. Ý <span style='color:red'>St André
Angoulême 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/824. CM 06/12/1744. X 03/12/1744 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SURAUD LAMORANDE François
garçon orfèvre de + Jacques marchand et + LIEGE Elisabeth. Ý <span
style='color:red'>Ruffecq en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROSSAT Jeanne Thérése de +
Joseph et + RAUX Marie Magdeleine. Ý et dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><b><span style='font-size:10.0pt'>Notaire VITEL Jacques.
Etude à <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/839. CM 21/02/1746. X 22/02/1746 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BACHELIER Hélie journalier de
+ Léonard et + FILLASTREAU Suzanne. <span style='color:red'>Ý St Séverin en
Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle St Barthélémy"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Marie Jeanne de +
Simon et + GABORIT Anne. Ý Esnandes 17. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/836. CM 14/05/1743. X 20/05/1743 . <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAPELLE Léonard journalier
d’Etienne laboureur et DURAND Catherine. Ý <span style='color:red'>Ecuras en
Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAGAUDY Marie Anne de Simon
laboureur et RECOQUILLON Marie. Ý St Denis Isle d’Olléron 17. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E /835. CM 10/12/1742. X21/01/1743 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FORESTIER Jean garçon
tonnelier de + Mathieu et + HUBERT Marie. Ý <span style='color:red'>Sonneville
et Montignac 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SICARD Marguerite servante
domestique de + Pierre laboureur à bœufs et CHAPT Marie. Ý St Hilaire de
Nantillé. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire MASSEAU Pierre. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E <st1:metricconverter ProductID="1845. CM"
     w:st="on">1845. CM</st1:metricconverter> 19/05/1689. X 16/07/1689 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMENT Louis marchand de +
Davinien&nbsp;? marchand et + CHAUVET Louise.Ý <span style='color:red'>Longré
en</span> <span style='color:red'>Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELULAY Marie Anne de +
Nicolas maitre paticier et CLOCHARD Anne. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1845. CM 26/01/1693. X 26/01/1693 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COURTABLEAU Jean tonnelier de
+ Pierre tonnelier et LABROUSSE Jeanne. Ý <span style='color:red'>St Jacques
Cougnac 16</span>. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La
 Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHALOPPEAU Jeanne de + Jean
maitre charpentier de navires et BAUDRY Jeanne. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1845. CM 09/09/1691. X 27/10/1691 Aytré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUDEAU François serviteur
domestique de + Jean<span style='mso-spacerun:yes'>  </span>et + BOUCHET Anne.
Ý et dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TARAUDEAU Louise servante
domestique de Jean et + PAILLAUD Renée. Ý <span style='color:red'>Villejésus
16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1845. CM 28/12/1692.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LERIDEAU Pierre laboureur de
Jean laboureur et GARNIER Madelaine<span style='color:red'>. Ý Brotté en
Angoumois 16. </span>dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PRINSAULT Madelaine de +
Jacques et BERGERE Elizabeth.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1845. CM 16/04/1691. X 04/06/1691 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LHERMITTET Lucas laboureur de
+ Jean et LANDAIN Thomasse. Ý du <span style='color:red'>Plassat en Angoumois
16</span>. dt Tasdon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PELETIER Marie de + Nicolas
et NICOLAS Magdeleinne. Ý <st1:PersonName ProductID="La Couarde" w:st="on">La
 Couarde</st1:PersonName> en l’Ile de Ré 17.<span style='color:red'><o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1845. CM 05/06/1689. X 27/06/1689 Aytré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARESCHAL Charles laboureur
de + Charles laboureur et GENDRON Catherine. dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHASSEAU Marie servante de
+ Jacques laboureur et + COCHET Catherine. Ý <span style='color:red'>Cognac en
Saintonge&nbsp;16 ? <o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1845. CM 29/05/1695. X 20/06/1695 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSELOT Germain laboureur
veuf de<span style='mso-spacerun:yes'>  </span>AUCHER Marie. dt Angoulin 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GODART Marie servante
domestique de + Louis et ROUHAULT Marie. Ý <span style='color:red'>Verdille en
Xaintonge 16</span>. dt <st1:PersonName ProductID="La Rochelle St Nicolas"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Nicolas</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire GOIZON. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1924. CM 14/08/1759. X 27/08/1759 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPRIE Pierre laboureur à
bras de + Jean et + BRUN Catherine. Ý <span style='color:red'>St Pierre Garat
diocèse d’Angoulême 16</span>. dt Aitré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAGNEAU Suzanne de + Pierre
laboureur et + TURPEAU Catherine. Ý Aitré 17. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/ <st1:metricconverter ProductID="1920. CM"
     w:st="on">1920. CM</st1:metricconverter> 23/05/1751. X 07/07/1751 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAILLARD Jacques journalier
de + Jacques tisserant et + FETU&nbsp;? Françoise. Ý Coullonge les Royaux en Poitou
79. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAILLARGE Marie de + François
laboureur et SIMON Françoise. Ý <span style='color:red'>en Angoumois 16</span>.
. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1921. CM 28/09/1752. X 17/10/1752 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GALLOCHEAU Jean matellot de
Jean laboureur et + GARENE Marguerite. Ý <span style='color:red'>Agnes&nbsp;?
en Angoumois</span> <span style='color:red'>16</span>. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRON Marie de Charles
journalier et MARCHAY Catherine. Ý Egrefeuille 17. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1921. CM 12/06/1752. X 27/06/1752 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GIBAUD Jean garçon
charpentier de navires de Jean laboureur à bras et RUORD Jeanne. Ý <span
style='color:red'>Balzat en</span> <span style='color:red'>Angoumois 16</span>.
dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVIN Magdeleine de + Jean
marinier et + COUTURIER&nbsp;? Jeanne. Ý Royan en Saintonge 17. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1921. CM 30/09/1753.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Jacques matelot de +
Jacques farinier et MENU Marie. Ý <span style='color:red'>Aigre en Saintonge 16</span>.<span
style='mso-spacerun:yes'>  </span>dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMAS Marie de + Jean et +
POISPARANT Anne. Ý Villefagnan 16. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1921. CM 03/11/1753. X 12/11/1753 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MEUNIER Jacques matellot de +
Jean farinier et MENU Marie. Ý Saint Sibard de Laplaud diocèse de Poitiers . dt
<st1:PersonName ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMAS Marie de + Jean et +
POIPARANT Anne. Ý <span style='color:red'>Vilefagnan 16.</span> dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1925. PM 10/01/1761. X 26/01/1761 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MIGAUD Jacques cocher veuf de
PELLETIER Thomasse. <span style='color:red'>Ý St Romand de N….en Poitou</span>.
dt <st1:PersonName ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COMBELAT&nbsp;? Geneviève
veuve de ROY Pierre. dt <st1:PersonName ProductID="La Rochelle St Barthélémy"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1918. CM 15/09/1743. X 11/01/1744 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NADEAU Jean jardinier de +
Jean sergier et + JOUBERT Marie. Ý <span style='color:red'>Ambérac en Angoumois
16.</span> dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RANGER Catherine de Philippe
laboureur et MOUSSEAU Marie. Ý Marsilly 17. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1925. CM 18/02/1760. X 18/02/1760 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROQUET Louis Siprien Marie
étudiant de Louis tailleur de Pierre et SOUCHET Louise. <span style='color:
red'>St Amant en Poitou 16</span>. dt <st1:PersonName ProductID="La Rochelle"
w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MATHE Anne de + Michel maitre
cordier et TROUVE Louise Françoise. Ý et dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire GIRAUD Michel. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1991. CM 04/10/1785. X 05/10/1785 Dompierre
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BESSON Antoine garçon
orphévre de + Marc et GARDRAT Marguerite. Ý <span style='color:red'>Angoulême
16</span>. dt <st1:PersonName ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Victoire de Pierre mÝ
en fait d’armes et BAZIL Marie. Ý et dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1991. CM 30/04/1786. X 08/05/1786 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNAUD Pierre François
notaire de François bourgeois et POURAJAUD Jeanne. Ý <span style='color:red'>Villiers
en Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HUGONIS Marguerite Magdeleine
de Jacques bourgeois et FOUCHE Marie. Ý et dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1991. CM 12/09/1790. X 22/09/1790 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMAINE Jean Jacques Martin
facteur de la poste aux lettres veuf de PELLETIER Marie Anne. Ý <span
style='color:red'>Aigre en</span> <span style='color:red'>Saintonge 16</span>.
dt <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUDET Angélique de + Jean
Paul serrurier et LEZEAU Jeanne. Ý et dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1988. CM 14/06/1767. X 30/06/1767 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORIAU Antoine jardinier de
Jacques et +TRANCHET Marie. Ý <span style='color:red'>St Fraigne diocèse de
Poitiers 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><st1:PersonName w:st="on"><span style='font-size:10.0pt'>PETIT</span></st1:PersonName><span
style='font-size:10.0pt'> Marie Catherine 44 ans de + Nicolas laboureur et +
CAILLAUD Marie. Ý St Médard 17. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1988. CM 22/02/1767.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Jacques marchand de
Pierre et MASTEAU Marie Anne. Ý <span style='color:red'>Aigre diocèse
d’Angoulême 16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame"
w:st="on"><st1:PersonName ProductID="La Rochelle Notre" w:st="on">La Rochelle
  Notre</st1:PersonName> Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PELLETIER Marie Anne de +
François et + DAUCHER Magdeleine. Ý et<span style='mso-spacerun:yes'> 
</span>dt <st1:PersonName ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1991. CM 06/07/1779. X 07/07/1779 <st1:PersonName
     ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POITEVIN François vapitaine
des quais à <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
veuf de GODET Jeanne. de Pierre et + DUPRADEAU Michelle. Ý <span
style='color:red'>Genouillac en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDRAN Françoise de + Paul
marchand et + DUSSAUD Marie. Ý et<span style='mso-spacerun:yes'>  </span>dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1991. CM 13/04/1790. X 14/04/1790 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SAVARY Jean receveur ferme du
Roy à Angoulins de + Jean bourgeois et DELANOTTE Marie. Ý <span
style='color:red'>St Hillaire près de Barbezieux en Saintonge 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRAUD Victoire Adélaïde de +
Denis corrégidor et + LEMELLE Jeanne. Ý <st1:PersonName
ProductID="La Nouvelle Orl&#65513;ans" w:st="on"><st1:PersonName
 ProductID="La Nouvelle" w:st="on">La Nouvelle</st1:PersonName> Orléans</st1:PersonName>
en Louisiane. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire GENDRON Louis André. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1996. CM 29/01/1775. X 30/01/1775 Angoulins
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ALBERT Pierre laboureur à bras
de + François laboureur à bras et + MOSSIN Jeanne. Ý <span style='color:red'>Marsillac
en Saintonge</span> <span style='color:red'>16.</span> dt Angoulins 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABRIAU Marie de + Pierre
journalier et GERBIER Marie. Ý Vallans en Saintonge 79. dt Angoulins 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1999. CM 31/03/1788. X 26/05/1788 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURABIER François domestique
de François laboureur et + VARACHE Marguerite. Ý <span style='color:red'>Puymoyen
en</span> <span style='color:red'>Angoumois 16.</span> dt<span
style='mso-spacerun:yes'>  </span>ND hors les murs <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRAVAT Elisabeth 25 ans
passés d’André Jardinier et COUTANT Marguerite. Ý et dt ND hors les murs <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1995. CM 02/01/1774. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FORESTIER Jacques Etienne
garçon cordonnier veuf de BOUGEOIS Marie de + Jacques et + MAILLET Agnès. Ý
Paris St Sauveur. dt <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName><span
style='mso-spacerun:yes'>  </span>17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUQUEROIS Jeanne 37 ans de +
Jacques laboureur à bras et LACROIX Anne sa seconde femme. Ý <span
style='color:red'>Bessé en</span> <span style='color:red'>Angoumois 16</span>.
dt <st1:PersonName ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1998. CM 29/11/1780. X 12/12/1780 <st1:PersonName
     ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HUGUET Louis garçon
cordonnier de + Mathurin cordonnier et GUINEBERT Suzanne. Ý <span
style='color:red'>St Léger Cognac 16</span>. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PLANCHET Gabrielle veuve de
ABELIN Pierre de Pierre laboureur à bœuf dt <st1:PersonName
ProductID="La Chapelle Themer" w:st="on"><st1:PersonName ProductID="La Chapelle"
 w:st="on">La Chapelle</st1:PersonName> Themer</st1:PersonName> 85 et BOUTET
Michelle. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/2004. CM 17 Messidor An X. X 17 Messidor An X
     <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MASSONNEAU Louis garçon
serrurier de Louis huissier et TOUZINEAU Catherine. Ý <span style='color:red'>Cognac
16</span>. dt <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUQUET Marie Anne veuve de
MERLAN André serrurier.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1999. CM 15/12/1788. X 26/01/1789 Périgny 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Jean 38ans tonnelier
de + Jean laboureur à bras et GENTY Catherine. Ý <span style='color:red'>Mérignac
en Angoumois 16</span>. dt Périgny 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABRUSSE Marie Anne 22 ans de
Louis tonnelier et CHAUVEAU Catherine. Ý Périgni 17. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> hors les murs
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1995. CM 10/01/1773. X 11/01/1773 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MATHE Léonard jardinier à
l’hôpital de <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
de MÝ Guillaume notaire et procureur et AUGEREAU Anne. Ý <span
style='color:red'>Marthon en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRETON Marie veuve de GAZEAU
Nicolas maçon et tailleur de pierre de + Jean chaudronnier et BONNIN Marie. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E/1998. CM 03/06/1782. X 02/07/1782 <st1:PersonName
     ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
      ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
      Dame</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PERRIN Charles René 30 ans
garçon raffineur de Jean et + TIZON Elisabeth. Ý <span style='color:red'>Javrezac
16</span>. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BEAU Marguerite Rose de +
François marchand et FELIN Jeanne. Ý <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
17. dt <st1:PersonName ProductID="La Rochelle Notre Dame" w:st="on"><st1:PersonName
 ProductID="La Rochelle Notre" w:st="on">La Rochelle Notre</st1:PersonName>
 Dame</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 <span
     style='mso-spacerun:yes'> </span>E/2005. CM 16 Prairial An XI. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PHELIPPON François tonnelier
veuf de LEBEUF Marie. Ý <span style='color:red'>Jarnac 16.</span> dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHESSE Louise 36 ans de +
François et + THIBAUDEAU Marie. Ý Lié près de Maillezais 85. dt <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     lang=EN-GB style='font-size:10.0pt;mso-ansi-language:EN-GB'>3 <span
     style='mso-spacerun:yes'> </span>E/2004. CM 12 Prairial An IX. X 11
     Messidor An IX Aytré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RADOU Pierre cultivateur veuf
de MOUSSET Marie Jeanne. dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SUREAU Marie de + François et
+ FAUX Marie. Ý le 22/10/1776 à <span style='color:red'>Chalais 16</span>. dt
Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>3 E/2003. CM 7 Frimaire An
VI. X 14 Frimaire An VI Nieul 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUSSEAU François 32 ans
garçon cordonnier de + Jean cordonnier et MOREAU Marguerite. Ý <span
style='color:red'>Châteauneuf en Angoumois 16</span>. dt Nieul 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span>BOBIN Louise 23 ans de + André boucher et
BRUNET Marie. Ý et dt Nieul 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire PALLARD Louis. Etude à Villeneuve <st1:PersonName
ProductID="la Comtesse" w:st="on">la Comtesse</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 43/294. CM 08/02/1685. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUCAULT Jean sergent royal
de + Anthoine notaire et BOURSIER Marguerite. <span style='color:red'>St
Fraigne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MURZEAU Jeanne veuve de
LIADOUZE Simon chirurgien de Phelippe marchand et + ARCHAMBAUD Jeanne. Coivert 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire BESSAT Charles. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/114. CM 23/05/1768.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COCHET Etienne de + ISAAC ET
+ TEXIER Marie<span style='color:red'>. Angeduc 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOULIN Marie Magdeleine de
Nicolas et GUERTAIN Marie Magdeleine. Les Trois Moutiers <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/112. CM 05/10/1766.<b style='mso-bidi-font-weight:
     normal'><o:p></o:p></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAUZET Louis de + Jean et
ARNAUD Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NAUX Marie Anne de Charles et
+ BON Gabrielle. St Savinien 17.<b style='mso-bidi-font-weight:normal'><o:p></o:p></b></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/112. CM 05/05/1766.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAFOND Etienne de + Louis et
+ CHOLLET Marie. Tonnay Charente 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELOUCHE Jeanne de Pierre et
+ BOINOT&nbsp;? Marie. <span style='color:red'>Fouqueure&nbsp;? 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/116. CM 02/07/1770.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGAVELLE&nbsp;? Michel de +
jean et HERON&nbsp;? Jeanne. diocèse de Tours.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESBRANDES Catherine
d’Antoine et GAUTIER Marguerite. <span style='color:red'>St Yriex sur Charente
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire BOUGEAUD René. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/5. CM 05/02/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BEAU Jean de Jean et LACHAISE
Jeanne. Rochefort , 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MENARD Catherine de Morice et
…………….<span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/1. CM 06/12/1703.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUPUY Pierre de + Léonard et
+ ROUX Marthe. St Laurent de <span style='color:red'>Belzagot 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Jeanne de Dauphin et
DEVERGNE Jeanne. <span style='color:red'>Juignac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/4. CM 10/10/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POUPEAU Charles charpentier
veuf de LONGUEPEE Jeanne. Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAILLOT Elisabeth de Simon
et + DESIRE Marguerite. <span style='color:red'>Baignes Ste Radégonde 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'><span
style='mso-spacerun:yes'> </span><b style='mso-bidi-font-weight:normal'>Notaire
DEMONTREAU Alexandre. Etude à Rochefort 17.</b><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E <st1:metricconverter ProductID="329. CM"
     w:st="on">329. CM</st1:metricconverter> 27/03/1672.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FERRAND René de + Jacques et
BURGAUD Jeanne. <span style='color:red'>Sigogne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHESNET Suzanne de
René&nbsp;? et CLERC Jeanne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E <st1:metricconverter ProductID="329. CM"
     w:st="on">329. CM</st1:metricconverter> 01/05/1672.<b style='mso-bidi-font-weight:
     normal'><o:p></o:p></b></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUIDET Jean de François et +
BLANCHARD Gabrielle. Montalembert 79.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BIRON Hélène de Vincent et
NADAUT Michelle<span style='color:red'>. Aunac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire JEUDY Toussaint. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/69. CM 15/07/1747.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BELOUIN Jean de + Jean et
PINASSEAU Marie. <span style='color:red'>Asniéres sur Noue 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRETON Jeanne de François et
+ ALBERT Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/74. CM 25/05/1754.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><st1:PersonName ProductID="BONNIN Pierre" w:st="on"><span
 style='font-size:10.0pt'>BONNIN Pierre</span></st1:PersonName><span
style='font-size:10.0pt'> de Jacques et RULLIN…….<span style='color:red'>Chalais
16.&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNIER Jeanne de Jacques et
RAYER Marie. Bignay 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/72. CM 07/01/1750.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUSSEPIED Jean de + Jean et
GEOFFROY Françoise.&nbsp;<span style='color:red'>? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS Marie veuve de MIOT
Jacques. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/74. CM 10/041752.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DEBRANDE François de Jean et
LACROIX Olive. <span style='color:red'>St Yriex sur Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Catherine de Pierre et
TOURNAT Renée. Tonnay Charente 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/75. CM 27/08/1753.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLOU&nbsp;? Pierre
journalier veuf de PICONNET Ge….Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>QUILLET Jeanne de Charles et
DEJARNAC Marie. <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/70. CM 27/09/1748.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JOLLY Jean de + Jean et
GANDOBERT Anne. <span style='color:red'>Chateauneuf sur Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROSSIGNOL Catherine Veuve de
DUSSEAU J……………..Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/71. CM 07/08/1749.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARZEAU Jacques cordonnier
veuf AUTAN Jeanne et de HITIER Marguerite. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFFETE Marguerite de Pierre
et COUPRIE Marie. <span style='color:red'>Roulet St Estephe 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/74. CM 24/04/1752.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Jacques de + Jean er
GARGAUD Marie. <span style='color:red'>Ars 16&nbsp;?</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COINDREAU Jeanne de Pierre et
MORGAT&nbsp;? Marie. Breuillet 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 33/74. CM 28/09/1752.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROULLET Nicolas de + Jean et
DUCHAINE&nbsp;? Françoise. <span style='color:red'>Nersac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TURPEAUX Marie de Jean
Baptiste et GAUTIER Jeanne. Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire HEURTEMATE Mathieu. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/29 B. CM 14/01/1681.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBOTIN Jacques<span
style='mso-spacerun:yes'>  </span>charpentier de navire de + François et LHOUMMEAU&nbsp;?
Catherine<span style='color:red'>. St Brie sur Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GRISSOT Marie veuve de VALLAT
Antoine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/27. CM 13/05/1679.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BASQUET François cuisinier de
Philippe et CLERJAUD Jeanne. <span style='color:red'>Cognac 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LENORMAND Marie de Ermel et
DE GUIET ivonne. Rennes 35.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/29 B. CM 17/06/1681.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOYNIER Michel maréchal veuf
de ROUHE Jeanne. <span style='color:red'>Mareuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GALLIOT Henriette de Daniel
et DARTON Jeanne. Grezac 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/28. CM 03/01/1680.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DURET Guillaume marchand de +
Jean notaire Royal et HUET Guillemine. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PROU Françoise de ……………et +
RICHE Marguerite. Orléans 45.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/24. CM 22/04/1676.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JEAN Arnaud de + Jean et +
ROY Jeanne. <span style='color:red'>St Fort sur le Né 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BUROLLEAU Catherine de
François et + BERNARDIN Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/25. CM 31/07/1677.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Pierre menuisier de
+ Pierre et FAURE&nbsp;? Marguerite. <span style='color:red'>Gensac <st1:PersonName
ProductID="la Pallue" w:st="on">la Pallue</st1:PersonName> 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUYER Elisabeth de Jean t
GASCHET Marie. St Denis d’Oléron 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/29. CM 15/05/1681.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PREVOST Charles écrivain veuf
de LEBOGUE Catherine. Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TARDY Jeanne de Jean et
LANDRON Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire TAYEAU Pierre. Etude à Rochefort St Louis 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/30. CM 30/07/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ARCHANDEAU&nbsp;? Henri de +
Pierre et + DROUHET Thoinette. <span style='color:red'>Charme 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><st1:PersonName w:st="on"><span style='font-size:10.0pt'>PETIT</span></st1:PersonName><span
style='font-size:10.0pt'> Elisabeth de Jean et BROUESCHIN&nbsp;? Adrienne.
Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/56. CM 23/08/1722.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ASSAIN Vincent de + Joseph et
GRISPOIL Magdelaine. <span style='color:red'>Valence 16&nbsp;?</span> <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>YVON Marie veuve de
GENOU&nbsp;? Joseph. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/70. CM 06/05/1738.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BEILLOT Jacques de Louis et +
LEBLANC Anne. Le Dorat en Basse 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VIGEAN Marie de Clément et
BOUCHE Marie. <span style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/33. CM 03/06/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BELOT Pierre de + Ambroise et
CHAUVIN Jacquette. <span style='color:red'>Cognac 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FABRE Anne de Charles et
RATIER Jeanne. Causne&nbsp;? en Bourgogne.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/70. CM 09/04/1738.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Elie de Guillaume et
PERRAUD Anne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BROUSSET Marie veuve de
BOUYER Jean. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/38. CM 21/11/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BLOIS Paul de Gérémie et
GIRAUD Marguerite. <span style='color:red'>Juillac le Coq 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUD Marie de Jacques et +
MAGE Marie. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/32. CM 16/05/1699. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSON Jeane de + Jean et +
ROY Catherine. <st1:PersonName ProductID="La Rochefoucauld" w:st="on"><span
 style='color:red'>La Rochefoucauld</span></st1:PersonName><span
style='color:red'> 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHABOT Jeanne<span
style='mso-spacerun:yes'>  </span>veuve de TOULUIRE A……….Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/66. CM 12/08/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHERIE Jacques de + Marc
et DEXMIER Marie. <span style='color:red'>Vibrac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SUIRE Marianne de Jean et
MARTIN Elisabeth. Tonnay Charente 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/49. CM 09/02/1717.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHERON Joseph de +jean et
CAILLAUD………<span style='color:red'>Jeuniat&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BABINOT Marie Magdeleine de
Joachim et CHEVALLIER Françoise. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 29/05/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRANDY&nbsp;? Jean de + Jean
et + DAVID Michelle. <span style='color:red'>Mosnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUERRY Jeanne veuve
GIRON&nbsp;?<span style='mso-spacerun:yes'>  </span>Moëze 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/45. CM 14/04/1712.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRANDY&nbsp;? Pierre de Jean
et + LAVERGNE Françoise. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HERAUD Jeanne de Martial et
DUTET Anne. St Amand en Bourbou….<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/51. CM 15/10/1719. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRILLOUIN Claude de +
François et + BRIANT Catherine. Surgères 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FESTY Catherine de Pierre et
DEZIRE Jeanne<span style='color:red'>. Baignes Ste Radégonde 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/31. CM 05/01/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRIOU Pierre veuf de BABINEAU
Marie de + Paul et BERTRAND Catherine. <span style='color:red'>Lignieres
Sonneville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THIBAUD Anne veuve de
MONNEREAU A……de ……et DAUDONNET Françoise. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 17/03/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRISSEAU Pierre de +
Toussaint et IMBERT Marie. <span style='color:red'>Angoulême 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELGERARD&nbsp;? Magdelaine
de Pierre et PIGOLLEAU Etiennette. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/55. CM 05/10/1721. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CARRAUX Jean de + Jean et
POITEVIN Marie. <span style='color:red'>Fouquebrune 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUCERAND Geneviève veuve de
CONVERD Louise. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/60. CM 01/07/1727.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEVALLIER Louis de Joël et
PASCAUD Elisabeth. Soubise 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUITON Ustelle de Jean et
ROLLAND Françoise. <span style='color:red'>Sireuil 16&nbsp;?</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 13/02/1707. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COMBE Guillaume de + Jean
et<span style='mso-spacerun:yes'>  </span>CELLIER Louise. Tulle 19.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURANT Magdelaine de Renaud
et BERNARD Liette. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/42. CM 11/01/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CONQUET Guillaume de Jean et
LACOMBE Louise. Tulle 19.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURAND Magdelaine d’Arnaud
et BERNARD Liette. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/59. CM 04/02/1726.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DECUBE Laurent de Pierre et
GARNIE Elisabeth. <span style='color:red'>Grassac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIRATON Angèlique veuve de
BODIN Pierre. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/43. CM 30/09/1710.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELESPULLE&nbsp;? André de +
Antoine et + MARTIN Marie. <span style='color:red'>Montchaude 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PAPIN Marie de Pierre et +
ROCHETEAU Catherine. Guire&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/38. CM 22/11/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELION Jean journalier veuf
de ROUX Marie. Rochefort St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHERIE Marie d’Etienne et
+ RAZE Marie. <span style='color:red'>Ste Souline 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/62. CM 10/12/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELOMBRE Pierre de + Berthomé
et + BESSON Catherine. <span style='color:red'>Pérignac 16&nbsp;?</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOLLET Catherine de
Sébastien et + VOYER Marie. Muron 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/63. CM 03/03/1731.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DROUYNEAU François de +
François et + BAUDOUIN Hélène. Rochefort St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABOSSAY Anne de Charles et
FOUCHER Marie. <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/72. CM 05/04/1739.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUBUTEL Jean d’Augustin et +
VERGNAUD Marie. <span style='color:red'>Angoulême 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PARIONNEAU François de
DESMOULIN Elisabeth. Tonnay Charente 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/32. CM 24/12/1699. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DULACQ Pierre de François et
MAINGAULD Martine. St Maquere&nbsp;? en Bo…….<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABELOTEAU Jeanne de Piere et
DELAVIE Anne. <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/38. CM 08/12/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUSOUCHET Aymand de Jacques
et GEAY Louise. <span style='color:red'>Vars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BASTARD Anne de Pierre et +
CHALMOT Catherine. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 08/06/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAUCONNIER Charles de +
Léonard et DUVIGNEAU Louise. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINARD Jeanne de Nicolas et +
GABRIEL Marie. <span style='color:red'>Mareuil 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/43. CM 05/05/1710.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAURES Antoine écrivain veuf
de LELONG Mart……… Rochefort St Louis 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUN Marie de Claude et
DELAGARDE Perrine. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/39. CM 31/07/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FERDONNET Vincent bombardier
veuf de BRAIGNEAU Marie. Rochefort St Louis 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DE BOUCON Charlotte de Jean
et BLOIS Marie. <span style='color:red'>Angoulême 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/62. CM 03/05/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FLATRON Vincent de + Vincent
et LAURENTIN Marie. Rochefort St Louis 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Jeanne de Jean et +
VERDIER Toinette. <span style='color:red'>Marsac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/35. CM 23/08/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FORGET Pierre de + François
et GRASSIN Marie. <span style='color:red'>St Claud 16.&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEBAUD Marie veuve
RENUSSEAU&nbsp;?. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/36. CM 28/01/1703.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FROUIN François de Jean et
FREMONT Anne. Gasteneau ,<span style='color:red'> <o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LACOUR Anne de Guillaume et
MOYNE Jeanne. <st1:PersonName ProductID="La Roche Foucauld" w:st="on"><st1:PersonName
 ProductID="La Roche" w:st="on"><span style='color:red'>La Roche</span></st1:PersonName><span
 style='color:red'> Foucauld</span></st1:PersonName><span style='color:red'>
16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/44. CM 08/02/1711.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GANDOBERT Jean de + Philippe
et PITARD Elisabeth. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NICOLAS Louise de Jean et
BARBEREAU Louise. <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/65. CM 14/05/1733.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUDOUIN Mathurin journalier
veuf de DORNAT Françoise. Rochefort St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUDAIN Marie Magdelaine de
François et NAU Catherine. <span style='color:red'>Chaslat&nbsp;? sur<span
style='mso-spacerun:yes'>  </span>Angoulëme 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/89. CM 07/11/1741.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GERBAUD Alexis de + Jean et +
GODINEAU Radégonde. Poitiers 86.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTONNEAU Anne de Daniel et
GASCHET Jeanne. <span style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/38. CM 13/08/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRARD Guillaume de +
Berthomé et FOUCAUD Marie. Authon Ebéon 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAVERGNE Françoise d’Antoine
et GINEL Toinette. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/34. CM 21/06/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GODARD Jean de + François et
+ RATEAU Magdeleine. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORIN Marie veuve de
REGNAUD Jean. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/60. CM 06/04/1727.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GODINEAU Jean de + Hélie et
NORMAND Jeanne. <span style='color:red'>Chalais 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRODEAU Marguerite de Jacques
et NEAU Marguerite. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/46. CM 27/08/1713.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GODY Jean de + Renaud et +
FURION&nbsp;? André. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SAUVAGET Marie de Daniel et
LIREUIL Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/39. CM 22/12/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GOMBAULT Jacques de + Jean et
SAOULT Marie. <span style='color:red'>Bayers 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORIT Peronne de Mathurin
et PELLUCHON Marie. Saintes 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/73. CM 07/02/1740.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GROSSARD Jean de + Marain et
+ MARTINEAU Marie. <span style='color:red'>Jullier&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MEGE Louise de René et +
PERNIN Marguerite. Bords 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/41. CM 10/06/1708.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUEYNAND Jean de + Jean et +
MILLIE Louise. Bussiere Poitevine.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARQUANDIER Romaine de
Charles et + CHAUVIN Louise. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/51. CM 26/12/1718.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HEBRE François de Jean et +
GACHET&nbsp;? Magdelaine. <span style='color:red'>Angoulême 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEVRIER Elisabeth de Jean et
+ MONTUS Françoise. Ecoyeux 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/49. CM 07/04/1716.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HIVERT Hélie de Pierre et
RANGEARD Marie. <span style='color:red'>Chassors 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLAUD Marguerite de Paul et
+ CHABANT Jeanne. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/35. CM 08/10/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>IMBERT Nicolas de + Jacques
et + GARDAY Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENDRON Marie de Antoine et +
ACHLIN&nbsp;? Sara. . Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 16/02/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JUCHEREAU Jean de + Jean et
BRANDY Magdelaine. Ciré d’Aunis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAYMOND Jeanne de François et
LORAND Marthe. <span style='color:red'>St Laurent des Combes 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/38. CM 17/02/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFAYE RIZARD Pierre de +
Pierre et MONTARGIS Magdelaine. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CERTE&nbsp;? Marie veuve de
MOREAU Etienne. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/63. CM 10/08/1732.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFETE Philippe de + Jean et
NAUDIN Jeanne. <span style='color:red'>Mosnac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VERONEAU Marguerite de
Charles et + THOMAS Marianne. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3<sup> </sup>E 21/63. CM 07/12/1731.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAUANY Jean de + Jean et<span
style='mso-spacerun:yes'>  </span>PRINCE Marie. <span style='color:red'>Baignes
Ste Radégonde 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIROUD Françoise de François
et DE MASSOGNE Louise. Coivert 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/30. CM 20/01/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAVAUD Jean de Jean et PACAUD
Marguerite. <span style='color:red'>Angoulême 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCOUILLIER Jeanne DE Jean
et JOCOD&nbsp;? Jeanne. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/16. CM 14/01/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEVEQUE Gabriel de Claude et
GAULTIER Marie. <span style='color:red'>Tusson 16.&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRETE Marie de Charles et +
DENIEAU Catherine. Ile de Ré 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/30. CM22/06/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGNAN Jean de + Jean et +
TINAUD Françoise. <span style='color:red'>Montjean 16.&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JALLAIS Françoise veuve de
AGEON Mathurin. St Martin en Poitou.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/39. CM 24/05/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MALLET Honoré de + Pierre et
GABET Marie Anne. Rochefort St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUN Marthe de Claude et
DELAGARDE Perrine. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/30. CM 22/07/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARY François de François et
+ ROCHON Louise. Pontarie&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VALLETEAU Marie de Charles et
+ PERONNE Françoise. <span style='color:red'>Ambleville 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/31. CM 16/11/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESLIER Jean de Jean et BOY
Magdelaine. <span style='color:red'>Courbillac 16<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARRE Marie veuve de CHARRON
François. <span style='color:red'>St Cybardeaux 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/59. CM 03/01/1726.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Isaac marchand veuf
de MESNARD Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANDRIEU&nbsp;? Marie veuve de
GRIPON Daniel. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/73. CM 07/07/1740.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Louis de +Jacques et
+ RAVARD Julienne. St Donatien&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BATON Magdelaine de Pierre et
+ DURESTIN Marguerite. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 29/06/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Michel de + Mathurin
et GATREL&nbsp;? Françoise. <span style='color:red'>Montignac Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINEAU Charlotte de René et
GLAUD Catherine. Fontenay le Comte 85.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/58. CM 14/08/1725.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTREAU Claude de + Pierre
et ORNASI&nbsp;? Marguerite. <span style='color:red'>Bécheresse 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAULT Marie veuve de VIC
Antoine. Rochefort N D 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/41. CM 30/04/1708.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOREAU Jean de + Pierre et
BERNARD Jeanne. <span style='color:red'>Confolens 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DAVID Marguerite veuve de
GUYONNET Ju…….. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/38. CM 23/11/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MORIN Jean de Jean et VIVIEN
Jeanne. <span style='color:red'>Fouqueure 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEZERON Jeanne veuve de
RAGUENEAU J……….. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/42. CM 29/01/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MORON Pierre graveur veuf de
LABARDE Marie de + Pierre et GUINBERT Catherine. Rochefort St Louis 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUET Jeanne de Philippe et
AUBINEAU Catherine. <span style='color:red'>Aigre 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/57. CM 09/09/1724.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NAVARRE Claude marchand veuf
de GILLET Françoise. <span style='color:red'>Mérignac&nbsp;16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PAPINEAU Magdelaine veuve de
GREZIL&nbsp;? André. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/73. CM 28/12/1740.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PASLON Jean Baptiste de +
Jean et + MARTIN Jeanne<span style='color:red'>. St Fort sur le Né 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NUGUET Elisabeth veuve de
CRAMPE Pierre. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/42. CM 02/11/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PITAUD Jean de Jean et
BOISSEAU Jeanne. <span style='color:red'>Cognac 1</span>6.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FILLASTRON Marie veuve de
MERCIER Jean de Paul et DELAAGE Jeanne. Rochefort St Louis 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/47. CM 28/05/1714.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POINOT Louis maitre menuisier
veuf de POTTEREAUX&nbsp;? Rochefort St Louis 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COCQ Marie Judith veuve de
RABIS Jacques. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/39. CM 11/04/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POUVREAU Pierre de + Jean et
+ BERNARD Elisabeth. <span style='color:red'>Gensac <st1:PersonName
ProductID="la Pallue" w:st="on">la Pallue</st1:PersonName> 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Elisabeth de Simon
et BECAUD Marguerite. Landrais 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/62. CM 30/07/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RAGODY Pierre gardien du
port<span style='mso-spacerun:yes'>  </span>veuf de LAFRAIGNEE. Rochefort St
Louis 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Marianne de Clément
et + ROY Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/44. CM 12/04/1711.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>REVEILLAC Jacques de +
Antoine et LABESSIERE Marguerite. St Cirque en Jour. 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>IMBERT Elisabeth de Pierre et
+ DELIVENNE Jeanne<span style='color:red'>. Verdille 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/43. CM 10/02/1710.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RIFFAUD Jean de Léonard et +
RUEL Marie. <span style='color:red'>Verteuil sur Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>IMBERT Elisabeth de Pierre et
DELIVENNE Jeanne. <span style='color:red'>Verdille 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/65. CM 11/10/1733.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUX Pierre de + Jean et +
VINCENT Marguerite. Ardon&nbsp;? en Angoumois 16.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROSTAND Anne de Baltazard et
ROPART Anne. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/37. CM 11/11/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SESTAIRE&nbsp;? Pierre de +
Antoine et + HUIT Catherine. Carsac en Périgord.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LASNIER Catherine de Léonard
et + DEPLANCHE Claude. <st1:PersonName ProductID="La Roche Foucauld" w:st="on"><st1:PersonName
 ProductID="La Roche" w:st="on"><span style='color:red'>La Roche</span></st1:PersonName><span
 style='color:red'> Foucauld</span></st1:PersonName><span style='color:red'>
16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/40. CM 10/05/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER François de + Pierre
et + GOUZAGE Françoise. <span style='color:red'>Confolens 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVIN Marie veuve de GUERRY
Jean. Rochefort St Louis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/73. CM 10/01/1740.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TIBONNET&nbsp;? Charles
instructeur de jeunesse veuf de BRULON Françoise.<span
style='mso-spacerun:yes'>  </span>Rochefort St Louis 17<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FLEURANT Jeanne veuve de
MIGNON Jean<span style='color:red'>. Cognac 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/51. 09/04/1719.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VIARGEAU Jean de+ André et +
BARAILLOU Jeanne. <span style='color:red'>Saveilles 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PAUVERT Marie AYM2E DE Pierre
et COURCHEMOTTE Aymée. Chartres 28.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire TAYEAU André. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/59. CM 05/02/1726.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AGET Jean de + Jean et
DEPERONNEAU Marguerite. <span style='color:red'>St Laurent des Combes 16<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUSCHIER Elisabeth de
Jacques et + GRIGAULT Jeanne. St Coutant le Grand 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/64. CM 06/07/1732.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ALEXIS François de + Michel
et VACHER Rose. <span style='color:red'>Agris 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DEGENNES Lucie de François et
+ GIRON Lucie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/57. CM 19/11/1724.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLIE François laboureur veuf
de VIGNAULT Jeanne. St Hippolyte 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RONDEAU Marie de Jean et
BERTAUDEAU Françoise. <span style='color:red'>Cognac 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/76. CM 18/07/1745.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBAUD Jacques de + François
et <st1:PersonName w:st="on">PETIT</st1:PersonName> Marie. <span
style='color:red'>Beurye&nbsp;? en Angoumois 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PLUCHON Anne de Jean et + SAINT
CHARTRE Angélique. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/88. CM 04/01/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURDEILLE Pierre de +
Guillaume et COURET Marie. <span style='color:red'>Criteuil <st1:PersonName
ProductID="la Madeleine" w:st="on">la Madeleine</st1:PersonName> 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SALMON Jeanne veuve IMBERT
François. Rochefort N D 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/88. CM 01/06/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRANGER Jacques veuf de
PERAULT Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRANGER Jeanne de Jacques et
METERAULT Catherine. <span style='color:red'>Cognac 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/79. CM 28/12/1749.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRE Antoine Baptiste de +
Etienne et + MERCIER Catherine. <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RHEDOU&nbsp;? Françoise de
Jérosme et + PETIOT Jeanne. <span style='color:red'>Charmant 16&nbsp;?</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/76. CM 11/02/1745. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUELLE Jean de Pierre et
THOMAS Marie. St Médard&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MEREAN Henriette d’André et
SEIGNE Anne. <span style='color:red'>Montchaude 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/81. CM 10/04/1752.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUN Jean de + Pierre et
ANDRE Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JAMET Elisabeth de Pierre et
PICHE Jeanne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/83. CM 03/08/1755.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLAUD Théodore de François
et HERAUD Charlotte. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GACHINARD Marguerite de Jean
et CENDRET Elisabeth. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/64. CM 04/07/1732.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CENIGON François de +jean et
BICHEZE&nbsp;? Renée. Poitiers 86.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESMAISON Marguerite de
Charles et + BOULETAIN Jeanne. <span style='color:red'>Marillac le Franc 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/79. CM 03/08/1749.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUSSEPIED Jean Pierre de +
Jean et + GEOFFROY Françoise. <span style='color:red'>Ruffec 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUCAUD Marie Jeanne veuve de
RANCE Jean. <st1:PersonName ProductID="La Rochelle N D" w:st="on"><st1:PersonName
 ProductID="La Rochelle N" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName> D</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/59. CM 21/07/1726.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal style='tab-stops:311.25pt'><span style='font-size:10.0pt'>CHRESTIEN
Joseph marchand veuf de BUJARD Françoise. <span style='color:red'>Cognac 16.<span
style='mso-tab-count:1'>        </span></span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS Marie Anne veuve de
CHEMINEAU A. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/81. CM 10/10/1751.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CONSTANTIN Martin Georges de
+ Joseph et DUSSE Rose. <span style='color:red'>Pereuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GENDRE Jeanne de Charles et
DEMONSAY Marguerite. Rochefort 17&nbsp;<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/88. CM 12/02/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DARMAS Jean de + Mathieu et
MASSON Marguerite<span style='color:red'>. Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>THOMAS Marie de Jean et +
DEZARIE Jacquette .<span style='color:red'>Chateauneuf sur Charente 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/84. CM 19/09/1758.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DEDE Jean de + Jacques et +
ROBERT ………..<span style='color:red'>Cognac 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORIT Jeanne veuve de
POUPIN Louis de ………….et BOURDIN Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/67. CM 07/08/1735.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DEJOYE&nbsp;? Louis
journalier veuf de BOUIN Marie. Rochefort N D 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERONNET Françoise de
Guillaume et MARCHAND Jeanne. <st1:PersonName ProductID="La Rochefoucauld"
w:st="on"><span style='color:red'>La Rochefoucauld</span></st1:PersonName><span
style='color:red'> 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/88. CM 29/06/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAFOND Noël d’Antoine et +
GERBAUD Anne. <span style='color:red'>Montmoreau St Cybard 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SECHAR DE <st1:PersonName
ProductID="LA ROQUE" w:st="on">LA ROQUE</st1:PersonName>&nbsp;? de Jean et
MESMA Marie. Rochefort&nbsp; 17 ?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/82. CM 08/08/1754.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAFONT François de + Jean
et + GANDOBERT Lucrèce. <span style='color:red'>Chavenat 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TOUZAIN Catherine veuve d’ANCELLAIN
J. Rochefort&nbsp; 17 ?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/59. CM 10/09/1726.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAUREAU Pierre de François et
SANSON Catherine. <span style='color:red'>Anville 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLEAU Marie Marguerite de
Jean et DRAONNET Marie. St Jean d’Angély 17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/60. CM 11/01/1728.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUSCHER Jean de + Jean et +
FOUCHERAT Marie. <span style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NICOLLEAU Louise veuve de
GANDAUBERT. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/83. CM 03/10/1756.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GADRAS Pierre de + Jean et
BOUCHERIE Jeanne. <span style='color:red'>Malaville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HITIER Catherine veuve de
TEXIER Thomas. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3<sup> </sup>E 21/47. CM 27/01/174.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAILLARD Pierre de + Pierre
et MERCIER Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DE VERY Suzanne de Charles et
+ LAURE Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/67. CM 22/10/1736.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTIER Jean de+ Jacques et +
NORMANDIN Marie. <span style='color:red'>Houlette 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FENOUILLET Marianne de Pierre
et BAUDEAU Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/69. CM 20/06/1737.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GENTIL Pierre de + Pierre et
+ MICHEAU Jeanne. <span style='color:red'>Turgon 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTIVIER Marie de Pierre et
+ HERAUD Anne. Chev….&nbsp;? en Poitou.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/81. CM 29/12/1751.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Jean de + François et
+ <st1:PersonName w:st="on">PETIT</st1:PersonName> Jeanne. <span
style='color:red'>Vibrac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>EFFNER Marie Françoise de
Joseph et + LAFAURRY Marianne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/67. CM 02/09/1735.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GILBERT Martin de François et
+ DUFOUR Suzanne. <span style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTRAND Marianne de Pierre
et DELANSON&nbsp;? Marianne. Chaillevette 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/83. CM 09/08/1756.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILBAUD Jean de + Jean et
NAUSSEAU Marguerite. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUTRET Marie de Louis et
CHARBONNEAU François. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/85. CM 03/03/1761.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HERAUD Pierre journalier veuf
de MENIER Marie. <span style='color:red'>Jarnac 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUINNEBERT Jeanne veuve de
VIALARD Jean. <span style='color:red'>Jarnac 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/64. CM 26/11/1732.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HERAULT Louis + Jean et
DUVERGIER Marguerite. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marie de Martial et
LEMAYNE Michelle. <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/82. CM 12/05/1754.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>IMBAUD Gabriel de + François
et ROY Marie. <span style='color:red'>Vars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAMBERT Marie de Cantin et NOUREAU
Jeanne. Les Essards 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/63. CM 15/01/1731.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JAHAN Gabriel de Louis et +
VILNEUVE Louise. Poitiers 86.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RONDEAU Julienne de Jean et +
BRETAUDEAU Françoise. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/61. CM 05/06/1729. résilié le 28/12/1729.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JARSELON&nbsp;? Michel de
Jean et AUTRAITTE Jeanne. <st1:PersonName ProductID="La Rochelle St Sauveur"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Sauveur</st1:PersonName> 17. <o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Marianne de Simon et
+ SECONZAC Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E<span style='mso-spacerun:yes'>  </span>21/62.
     CM 16/07/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LACUVE Louis de Pierre et
GOUSSET Magdelaine. <st1:PersonName ProductID="La Couronne" w:st="on"><span
 style='color:red'>La Couronne</span></st1:PersonName><span style='color:red'>
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVEAU Marie veuve de
BERNARD Théodore. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/63. CM 21/10/1731.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAMIGEON Jean de Pierre et +
FOUCHIER Philipe. <span style='color:red'>Montignac le Coq 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COULLAY Anne de Jacques et
MARTIN Louise. <st1:PersonName ProductID="La Rochenard" w:st="on">La Rochenard</st1:PersonName>
79.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E<span style='mso-spacerun:yes'>  </span>21/62.
     CM 04/01/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LECLERC Pierre de + Pierre et
ROUSSELOT Jeanne<span style='color:red'>. Brie 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABATU Marianne Veuve de
BOURGEOIS J. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E<span style='mso-spacerun:yes'>  </span>21/62.
     CM 06/02/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MANSION François de + Pierre
et MARTINEAU Jeanne. <span style='color:red'>Exideuil 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Marie veuve de
BARILLET Jacques. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/81. CM 06/11/1752.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Pierre de + Pierre et
BIENASSIS Elisabeth. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DENIS Catherine de Jean et
PARTONNEAU Anne. <span style='color:red'>Merpins 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/61. CM 24/04/1729.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NAVARRE Mathurin journalier
veuf de ROZIER Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SURREAU Jeanne d’Etienne er
TOUZELET Suzanne. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/75. CM 07/05/1742.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NEREAU <span
style='mso-bidi-font-weight:bold'>Léonard de Michel et +DAIMAN Jeanne. <span
style='color:red'>St Laurens des Combes 16.<o:p></o:p></span></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOINET Jeanne de Denis et
PELUCHON Catherine. Breuil Magné 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/82. CM 10/06/1753.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NEUVILLE Pierre de Guillaume
et<span style='mso-spacerun:yes'>  </span>TESSE Jeanne. <span style='color:
red'>Ars 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUD Catherine de Jacques
et + MERCERON Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/54. CM 29/09/1720.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PERAUD Pierre de + Pierre et
HILAIRE Thérèse. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRIAND Catherine Jeanne de
Pierre et BRISSON Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/60. CM 17/05/1728.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>REVEILLAUD Antoine de + Jean
et + GABORIAUD Perine. <span style='color:red'>Fouquebrune 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRILLOUET Marie veuve de
CLAIGNAT&nbsp;? François. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/60. CM 16/01/1727.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBINAUD Elie de + Pierre et
ROUSSEAU Anne. <span style='color:red'>Pereuil 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TRAIZET Marianne veuve de
CHAMPEROIS. Rochefort 17.&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/64. CM 18/05/1732.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUMELAR Etienne de + Etienne
et + GRESLAUD Jeanne. Marans 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BACHELIER René de Mathurin et
+ BABIN Marie. <span style='color:red'>Cherves 16&nbsp;?</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/71. CM 18/01/1738.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUYER Jacques de + Pierre et
FOUGERAUD&nbsp;? Marie. <span style='color:red'>Balzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SALMON Catherine de Jean et
DURAND Jeanne. <span style='color:red'>Balzac 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/82. CM 19/08/1753.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SACRISTIE Pierre de + Thomas
et MARIBEAU Marie. <st1:PersonName ProductID="La Fot&#65514;t" w:st="on"><span
 style='color:red'>La Fotêt</span></st1:PersonName><span style='color:red'> de
Tessé 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PARIS Marguerite de François
et + GUERIN Jeanne. Saturnin / Sechaud 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/69. CM 23/06/1737.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SAGOT François Joseph de +
Gabriel et + LESPA Anne Marie. Mons en Hainaut&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AURY Jeanne de Jean et BARAUD
Marguerite. <span style='color:red'>Jarnac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/54. CM 11/11/1720.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SARRASIN Jean charpentier
veuf de ROBELIN Anne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HIBLE Marie d’André et +
GIRARD Marguerite. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/62. CM 27/12/1730.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SAULNIER Laurent de + Alexis
et + PEROUNIN Jeanne. <span style='color:red'>Gente 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUDEAU Marie de Pierre et
LORTIE Marie. <st1:PersonName ProductID="La Tremblade" w:st="on">La Tremblade</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/76. CM 07/04/1745.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SIMARD François de Louis et
GAUDIN Jeanne. <span style='color:red'>St Cibard en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Marie d’André et
BOUTIN Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/79. CM 23/01/1749.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER<span
style='mso-spacerun:yes'>  </span>Jean de + Pierre et DEVERS Charlotte .<span
style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DURET Marguerite de Jean et
PAYAN&nbsp;? Jeanne. <span style='color:red'>Angoulême 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/46. CM 27/09/1713.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>THENAULT Honoré de Honoré et
+ DUBOIS Marie. <span style='color:red'>Angoulême 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JACQUARD Marie Marguerite de
Charles et + PERE Marguerite. Rochefort 17. <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/88. CM 17/10/1734.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TOUR&nbsp;NEUR Pierre
journalier veuf de NOURRY Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SURRAUD Jeanne d’Etienne et
TOU……….Suzanne. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E21/47. CM 21/07/1714.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TOUSCHARD François de +
Guillaume et + SOULLARD Marie. <span style='color:red'>Verteuil en Poitou 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ESLOUARD Jeanne de Charles et
GOULARD Jeanne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/80. CM 04/04/1750.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VACQUIER Pierre marchand veuf
de <st1:PersonName w:st="on">PETIT</st1:PersonName> Marie. <span
style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Jeanne de Louis et
AUGER&nbsp;? Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 21/81. CM 31/01/1751. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLECHAISE Léonard de + Jean
et +LECLERC Françoise. <span style='color:red'>Brie&nbsp;16 ?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLENET Jeanne de Pierre et
COUDRET Jeanne. Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire TESSON Jacques. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/8. CM 28/08/1690.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ARAINE&nbsp;? Louis tailleur
d’habits veuf de GARNIER Gabrielle .Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BLANCHARD Ester de Pierre et
DUBOIS Marthe. <span style='color:red'>Chassors 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/10. CM 13/01/1692.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARRAUD Jean de + François et
BIDET Eslène. <span style='color:red'>St Preuil 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BORDE Anne de Bernard et +
GALLAUD&nbsp;? Anne. <span style='color:red'>Cherves 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/11. CM 16/03/1693.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BIROLLEAU Jean de + Jean et
DEBUSSAT Marie. <span style='color:red'>Aigre 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUET Elisabeth veuve
BLESSEBOIS. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/9. CM 21/10/1691.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNET André de + Nicolas et
MARGUINAUD&nbsp;? Marie. <span style='color:red'>Oradour Fanais 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TAMPLEREAU Jeanne d’Etienne
et PREVE&nbsp;? Jeanne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/3. CM 30/12/1685.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHET Pierre de + René et +
BRISSET Marie. <span style='color:red'>Maziéres 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JANDRE&nbsp;? Catherine veuve
de MOQUET Jean. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/5. CM 04/08/1687.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DANYAU Antoine boucher de
Jean et VILLARS Marie. <span style='color:red'>Corlaq&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DE BAUFRETON Marguerite veuve
de GUICHARD Pierre. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/11. CM 17/01/1693.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESBRANDES Louis de Pierre et
DELAHAYE Jeanne. <span style='color:red'>St Claud 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BICHON Marguerite de Pierre
et CHABINEAU Jeanne. Aujac 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/2. CM 06/01/1684.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAVRY Pierre marchand de
Guillaume et AUBINEAU Jeanne. <span style='color:red'>Villeneuve de Mon……..16<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTHELLOT Marie d’Antoine et
+ DURAN Marguerite. Genouillé 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/11. CM 29/06/1693.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GRELLEAU Charles veuf de
LEGRAND Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ELLIE Marie de Léonard et +
CASCAUD Elisabeth. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/4. CM 26/06/1686.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GRESSY Pierre de + Pierre et
BRIGOT Catherine. <span style='color:red'>Her…..&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RETORE Elisabeth de Jean et +
RAZE&nbsp;? Marguerite. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/9. CM 02/09/1691.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GIGAUD Jean de Michel et +
ESPOULLAY Marie. Néré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAVET/ROUET Jeanne de Jean et
AUDURAUD Anne. <span style='color:red'>Ligné 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/2. CM 01/06/1684.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUD Sylvain praticien de
Jean et + LHERITIER Catherine. Thairé 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BASVILLE Catherine de
François et + LORIERE Matine&nbsp;? <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/5. CM 17/08/1687.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Antoine journalier de
+ François et + DAIN Françoise. <span style='color:red'>Ruffec 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MICHAUD Marie de Pierre et +
RICHARD Marguerite. St Savinien 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/2. CM 19/11/1684.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Nicolas de + André et
+ <st1:PersonName w:st="on">PETIT</st1:PersonName> Françoise. <span
style='color:red'>Blesac&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUISCHARD Françoise veuve de
SUIRE Pierre. Chef Boutonne 79.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/9. CM 24/09/1691.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Pierre de Jean et
MORREAU Catherine. <span style='color:red'>Guimps 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PHELLIPON Marie d’Isaac et
MELLAUD&nbsp;? Ester. Surgères 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/4. CM 03/02/1686.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTINEAU Mathurin veuf de
DUCHONNET&nbsp;?<span style='mso-spacerun:yes'>  </span><span style='color:
red'>St Fraigne 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HIMBERT Anne veuve de
SAU………Ilaire. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/11. CM 12/05/1693.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MATHELINEAU Jacques de
Joachim et CHERBONNIER Jeanne. <span style='color:red'>Blanzac Porcheresse 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JALLET Marie veuve de JOUBERT
Luc. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/16. CM 20/12/1689.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MOIZAU Jean de + Jean et
DURAN Anne. <span style='color:red'>Chenommet&nbsp; 16&nbsp;?</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JANDRON&nbsp;? Angélique de
François et GUILLOT Jeanne. St Hippolyte 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/5. CM 28/12/1687.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NAIMONT Jean tisserand de
Pierre et RI…….AUD Gabrielle. <span style='color:red'>Juillac le COQ 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAQUIN Anne d’Antoine et
PREAU Anne. St Martin de Ré 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/2. CM 30/01/1684.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PARANTEAU Jean veuf de
TESTEAU Suzanne. <span style='color:red'>Verdille 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNELACT Marie de Pierre et
+ DUPONS Renée. Usseau en Saintonge 79.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/2. CM 08/01/1684.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINASSEAU Jean Ý 1654
jardinier de Pierre et BLANCHETEAU Marguerite. <span style='color:red'>Champniers
16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUMARRAN Jeanne Ý 1644 DE
Pierre et GOUZELLE Rose. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/10. CM 25/06/1692. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINAUD Jean de + Isaac
notaire Royal et PASSIER Jeanne. <span style='color:red'>St Même les Carrières
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JARRIER Marie de Robert et +
BOULLAUD Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/10. CM 28/12/1692.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RAUGE&nbsp;? François de +
François et SOULLA&nbsp;? Anne. <span style='color:red'>Verteuil sur Charente
16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHALMOT Catherine veuve de
BATARD Pierre. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/10. CM 21/12/1692.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUAULD Pierre de + Pierre et
RICHARD Elisabeth. <span style='color:red'>Verdille 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBARIN Marie de Charles et
BAUDRY Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/3. CM 11/06/1685.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROULET François de + Jean et
BERAUD Marguerite. <span style='color:red'>Roulet St Estephe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RUAULT Thoinette veuve de
NUGUE&nbsp;? Michel. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/8. CM 08/01/1690.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Pierre de Gabriel et +
PARANT Catherine. Tonnay Charente 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAUGER Anne d’Antoine et
BOUCHIER&nbsp;? Jeanne. <span style='color:red'>Baille&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E<span style='mso-spacerun:yes'>  </span>34/4.
     CM 04/06/1686.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RUTEAU Pierre soldat de +
Jacques notaire Royal et + LAFON Catherine. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLAU Anne DE Jean et +
DARABON&nbsp;? Sarah. Hiers Brouage 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/5. CM 04/12/1687.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SARRAUD&nbsp;? Pierre caporal
veuf de MAMBAU&nbsp;? Gui…….Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TAIZAUD Jacquette de Jacques
et MAUROUX Espérance. <span style='color:red'>Cherves en Angoumois 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/9. CM 31/10/1691.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TARDY Pierre de + Jean et
FRANCOIS Marie. St Martin de Ré 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>BODIN Marie de Jean et + PICORAY Jeanne. <span
     style='color:red'>Cognac 16.</span><o:p></o:p></span></li>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/9. CM 03/02/1691.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TOUNTENAIN&nbsp;? Jean de +
Louis et + LOREAU Toinette. <span style='color:red'>Couture 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUPRY Marie veuve de PIERRE
Cosm………de Raymond et …………..Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/10. CM 23/01/1692.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TRILLAUD Louis de Jean et
FROMENTIN Jeanne. <span style='color:red'>Villegats 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ALLEBERT Marie de Mathurin et
+ POISNAUD Elisabeth. Soubise 17.<o:p></o:p></span></p>

<p class=MsoNormal><b style='mso-bidi-font-weight:normal'><span
style='font-size:10.0pt'>Notaire FERRAND Pierre. Etude à Rochefort 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 01/03/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ARLIN Louis de François et +
BOUILLON&nbsp;? Françoise. <span style='color:red'>Les Arluis&nbsp;? en
Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVIN Suzanne veuve de
RIBOTTEAU J. Rochefort N D 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 24/01/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBOUIN Abraham de + Pierre
et GIRARD Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNARD Jeanne veuve de
BAUDOUIN Elie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 05/11/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>AUGEREAU François de + Jean
et GUIGNARD Marie. <span style='color:red'>Chateauneuf sur Charente. 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERAUD Marie de Michel et
ARRIVE Françoise. Clavette 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/39. CM 20/02/1711. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARAT&nbsp;? Philippe de
Pierre et DELESCHELLE Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Marie Henriette de
Jean et + RECOQUILLE Anne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 06/07/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARIL Antoine de + Jean et
CHAUSSEROUGE Marie. <span style='color:red'>St Laurent des Combes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LORRAIN Marie d’Etienne et
SERRE Marguerite. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. CM 21/04/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARIL Jean de + Jean et
CHAUSSEROUGE Marie. <span style='color:red'>St Laurent des Combes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEIRRON Jeanne de François et
PATREAU Jeanne. Champagne 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 23/09/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BARRAUD René de Jean et
LAMOUREAU Catherine. <span style='color:red'>St Ciers sur Bonnieure 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLAUD Marie veuve de
BOUCHET Jean. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/35. CM 19/10/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BAZILLE Pierre de Guillaume
et + JOBET Suzanne. <span style='color:red'>St Sulpice en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COMBAUD Marie de Jean et
DELAVERGNE Silvie. Pons St Martin 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/31. CM 16/03/1703.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERNIER Jacques de + Louis et
CANTAIN Lidie. St Jean d’Angély 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVERGNE Marie de François
et + ROLLANDEAU Marie. <span style='color:red'>Cognac 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 12/12/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTAULT Charles de François
et COUTAULT Anne. Allonne 79.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JACQUEMIN Marie de Jean et +
LAMY Jacquette. <span style='color:red'>Cognac 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 16/01/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTRAND Etienne de Jean et +
LOGE Marie. <span style='color:red'>St Front 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAUVRY&nbsp;? Marie de Jean
et BŒUF Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/40. CM 27/04/1712.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BILLAUD Pierre caporal veuf
de GIRARD Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNNET Marie de Gille et
VIOLLET Françoise. Luan&nbsp;? en Berry<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/16. CM 01/06/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BITHONNEAU Julien laboureur à
bras veuf de CHASSERIAU. Breuil <st1:PersonName ProductID="la R&#65513;orte"
w:st="on">la Réorte</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUBOIS Marguerite de Jean et
GIRAUD Marguerite<span style='color:red'>. Cherves 16.&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 00/02/1694. acte nÝ 83.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BLANCHARD Michel de Martial
et + GAUDY Marie. <span style='color:red'>Confolens 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEGRAND Anne veuve de DEPARIS
Charles. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/15. CM 06/02/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BONNEAU Jean Louis de + Jean
et BORET Marie. <span style='color:red'>Bassac 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIAUD Marianne veuve de
GUERIN André. <st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/30. CM 06/08/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHAUD Jean de + Utrope et
+ GUILLON Jeanne. <span style='color:red'>St Christophe 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>POLLET Marthe de Gilbert et +
GROUSSET Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/27. CM 27/12/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCHET François charpentier
veuf de MAUROUX Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GOUSSET Jeanne de Jean et +
VIAUD Jeanne. <st1:PersonName ProductID="La Couronne" w:st="on"><span
 style='color:red'>La Couronne</span></st1:PersonName><span style='color:red'>
16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. CM 15/04/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOULESTREAU Laurent de +
Salomon et BONENFAN Antoinette<span style='color:red'>. Reignac 16&nbsp;?</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SERRE Catherine de Sébastien
et<span style='mso-spacerun:yes'>  </span>BŒUF Jeanne. St Simon&nbsp;? en
Saintonge 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/38. CM 28/01/1710. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BOULINEAU Pierre de Pierre et
FOUGERE Jeanne. Le Vergeroux 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLON Marie de Pierre et
MATHURINE Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 01/03/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRA Etienne de + François et
+ BOUTET Jeanne. Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>IMBERT Anne de Pierre et DELIVENNE
Jeanne. <span style='color:red'>Verdille 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 06/05/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRANCHUT Jacques de Jacques
et REGNAUD Marie. <span style='color:red'>Gente 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUDRY Marie veuve de BRAUD
Pierre. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 26/01/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRANGE Jean de + Jean et +
FROUIN Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COURRAUD Françoise veuve de
VEILLON Louis. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 09/06/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRETON Louis de François et
THIBAUD Françoise<span style='color:red'>. Pereuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMAND Jeanne de Jean et +
BAZIN Marguerite. <span style='color:red'>Chagniay&nbsp;? en Angoumois 16<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 06/12/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BRUNET Jean sargetier veuf de
GIROSME Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY Jeanne de Jean et +
TOURISSEAU&nbsp;? Jeanne. <span style='color:red'>Touvre 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 19/07/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLAUD Jean journalier veuf
de RAOULT Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUCQUET Marie veuve de
TALLONEAU Pierre. <span style='color:red'>Villefagnan 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/20. CM 01/12/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CAILLET Jacques de Pierre et
ARNOU Jeanne. Mauzé sur le Mignon 79.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BELLOT Françoise de Denis et
MALLEVAUD Marie. <span style='color:red'>Villars 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/16. CM 05/11/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHABANE Jean de + Léonard et
COURIVAUD Françoise. <span style='color:red'>Oradour Fanais 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COUNAUD Marie de Louis et +
BAGARD Jeanne. St Nazaire sur Charente 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 06/01/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHADOUTEAU Louis de + Jean et
GROU Marguerite. <span style='color:red'>Bayers 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELAFON Marie de Jacques et
MOREAU Thérèse. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 06/12/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHASSEREAU Jean de Jean et +
LACROIX Simone. <span style='color:red'>Chateauneuf sur Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOULLINET Catherine de Pierre
et + LION Andrée. Marennes 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 03/05/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVIN Michel de + Jacques
et BUTEAU Périne. <span style='color:red'>Ambleville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JEAN Jeanne veuve de DESBORDE
Nicolas. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 09/03/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHERBONNIER Pierre de +
Pierre et MILLASSEAU Catherine. <span style='color:red'>Angeac Charente 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAYE Marie veuve de DROYNET
Jacques. Rochefort N D 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 19/08/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHESNEL D’ECOYEUX Pierre de
Louis et DEJOIGNY Marie Elisa. <span style='color:red'>Cherves en Angoumois 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAILLARD Aline de Mathieu et
MARTIN Anne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 02/05/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEVALLIER Thomas de + Jean
et SAUVAGET Jeanne. <span style='color:red'>Segonzac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFITTE Marie de Pierre et +
ROUSSEAU Marie. Moëze 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 17/01/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHOTARD Elie d’Antoine et
DURANDEAU Antoinette. <span style='color:red'>Cognac 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTAY Françoise de Thomas et
+ ESGRON Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/25. CM 19/01/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMANSEAU Elie de + Jacques
et + CHIRON Marguerite<span style='color:red'>. Péreuil 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GROLLIER Marie de René et +
BOUCHET Jeanne. Les Nouillers 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/37. CM 26/01/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMENT Antoine de + Pierre
et GAUTIER Jeanne. Chalon sur Saône.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARRET Elisabeth de Pierre et
ROBIN Elisabeth. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/27. CM 21/12/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COCU Pierre de + Pierre et +
VINET Marie. <span style='color:red'>Lagarde sur le Né 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAIGAUD Jeanne de Isaac et
AUGE Jeanne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/25. CM 01/03/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DANUTON Jean de + Jean et
GARACHE Sécile. Cadillac 33.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GESTEREAU Louise de Jean et
AMONNEAU&nbsp;? Marie. <span style='color:red'>Mallaville 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 14/06/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DECAULT René de Jacques et +
GRANIER Jeanne<span style='color:red'>. Hunet&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LONG Marthe veuve de PROU
Nicolas. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/22. CM 15/11/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DELACOSTE Daniel de + Léon et
VASLET Jeanne. <span style='color:red'>Criteuil <st1:PersonName
ProductID="la Madeleine" w:st="on">la Madeleine</st1:PersonName> 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUTET Anne veuve de AYRAULT
Mar…….Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. CM 18/01/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESCHEMAIN Elie de + David et
+ JOYEUX Jeanne. <span style='color:red'>Montboyer 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FORT Marguerite de Jean et +
GRELIER Marie. <span style='color:red'>Chateauneuf sur Charente 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 08/03/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESPLANCHE Louis de Jean et
NOUBLET Marguerite. <span style='color:red'>Marcillac le Franc 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LAURANT Mathurine de Mathurin
et FRAIGNEAU Marguerite. Ciré d’Aunis 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. CM 17/05/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DINDILLEAU Charles de + Annet
et MORIE&nbsp;? Jeanne. <span style='color:red'>Lonnes 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COLLAS Marie veuve de GRIBON
François. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 20/04/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DIRIGOYEN Jean d’Etienne et
DENCIBURU&nbsp;? Jeanne. Bayonne 64.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MALLAT Marguerite de Jean et
+ HERVOIRE Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/14. CM 09/09/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DOITEAU Jean canonier veuf de
ROBERT Jeanne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMAN Suzanne de François et
TOURNEVIE Suzanne. <st1:PersonName ProductID="La Roche" w:st="on"><span
 style='color:red'>La Roche</span></st1:PersonName><span style='color:red'>&nbsp;?
en Angoumois 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/37. CM 28/12/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DRUGEON Pierre vitrier veuf
de DURAND Catherine. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BENOIST Marie de François et
+ CLERC Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/31. CM 05/08/1703. résilié le 07/02/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUBOIS Joseph d’Etienne et +
MASQUET Perrine. <span style='color:red'>Sigogne 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MALLERIT Marie de Jean et
LARUE Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 10/02/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DUBOIS Joseph de + Etienne et
+ MACQUET Perrine. <span style='color:red'>Jarnac 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GARNIER Antoinette veuve de
PERRE Bertrand. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/15. CM 09/04/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>EPINON Gabriel de + Jacques
et BOURNELLE Jacquette. <span style='color:red'>Villefagnan 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GIRAUDEAU Mathurine veuve de
BROSSET Gabriel. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/35. CM 04/01/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FLAUD Pierre de + Charles et
+ GENEUVRE Hyvonne. <span style='color:red'>Courcome 16&nbsp;?</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NEIRAUD Judith veuve de
GEOFFROY Ma………Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/18. CM 15/01/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FOUGNET François de + Jean et
BLINE&nbsp;? Françoise. G……..&nbsp;? en Poitou<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHEVALLIER Gabrielle de
Pierre et + GORROS Jeanne. <span style='color:red'>Chateauneuf sur Charente 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/20. CM 22/09/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FROUIN Pierre de Pierre et
BOUDEAU Jeanne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUDEAU Marie de François
et + AUFRAY Jeanne. <span style='color:red'>St Laurent des Combes 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 08/04/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GADREAU Etienne de Louis et +
BORET Marie. <span style='color:red'>Mareuil 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HAURAIN Françoise d’Etienne
et SENNE Marguerite. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/16. CM 04/06/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GARSON Jacques de Jacques et
BENASSIS Jacquette. <span style='color:red'>Juillac le COQ 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RICHARD Marie veuve BARREAU
Louis. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/27. CM 29/08/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUVIN David calfat veuf de
DOUSSET Marie. Rochefort N D 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BELLOT Jeanne de Denis et
ME……AUD&nbsp;? Marie. <span style='color:red'>Villars 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/20. CM 21/07/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTIER André de + Jean et
TAUNAY Françoise. Brouage 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUERIN Catherine d’Arnaud et
BAUDRY Marie<span style='color:red'>. Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/20. CM 22/081697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GILLOT François sergent veuf
de VERONNEAU Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PELLETAN Magdelaine de Jean
et + PINEAU Elisabeth. <span style='color:red'>St Même les Carrières 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 20/01/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GORRET François de + Pierre
et + GAUDIN Elisabeth. <st1:PersonName ProductID="La Flotte" w:st="on">La
 Flotte</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROUAUD Marie de François et +
RADON Marie. <span style='color:red'>Bonneville 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/16. CM 31/10/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GREZIL François laboureur à
bras veuf de COURET Marguerite. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUILLEMOT Jeanne de
Berton&nbsp;? et JOLLIVET&nbsp;? Catherine. <span style='color:red'>Chateauneuf
sur Charente 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 29/04/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GUESPAIN Jacques journalier
veuf de BODIN Marie. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAGNAN Jeanne de Jean et …………<span
style='color:red'>Ligné 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/37. CM 08/05/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HELYNE André d’André et
MESTAY Louise. <span style='color:red'>Cherves 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PEROUNEAU Jeanne veuve de
ROGE&nbsp;? François. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/28. CM 08/06/1701.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HERPIN Isaac de + Paul et
DURAND Jeanne. <span style='color:red'>Bouteville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARBIN Marie de Paul et
PINEAU Marie. Les Nouillers 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/24. CM 22/11/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HILLERET Jean de + Jean et +
GALARD Perine&nbsp;?. <span style='color:red'>BOU………..&nbsp;? en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABAUD Catherine de Jacques
et LERITTEAU Elisabeth. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/14. CM 01/09/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HUET Robert de + Denis et +
FRANQUET Perine. Rochefort 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUSOUCHET Charlotte de
Joachim et DE FERRIERE Thérèse. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 02/02/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JARRETEAU Jean de + Jean et
GONDARIERE Marguerite. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MATHE Catherine de René et +
SORIGNET Catherine. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/20. CM 29/09/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JEAN Pierre de + Jean et
CHEMIN Elisabeth. <span style='color:red'>St Bonnet 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLAIN Renée de Pierre et +
JOGUET Jeanne. Dampierre sur Boutonne 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/24. CM 13/08/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JOSSE MESANGERS Nicolas de +
Charles et BLANC Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAUDOUIN Marguerite de
François et + BOURGLAUD&nbsp;? Magdelaine. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 04/01/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JULLIARD Jean de + Pierre et
+ LEPE Magdelaine. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BAZINET Jeanne de Jean et
MAUROUX Marguerite. Rochefort 17.&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 28/12/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFARGE Jean de +Jean et
MALLET Marguerite. Bordeaux 33&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUFOURT Marie Anne de Pierre
et + LAFON Jeanne. <span style='color:red'>Juillac le Coq 16.&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/16. CM 15/12/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAFOND François de François
et +………Marie. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUGREAU Magdelaine d’Etienne
et + FRADIN Marie. Rochefort17<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/26. CM 26/12/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LALIEU&nbsp;? Claude de
Martial et + FERME Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CLEMANCEAU Toinettede Pierre
et PRAT Marguerite. <span style='color:red'>Mornac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 21/06/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAMARCHE François de + René
et SIRON Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NO-L Marie de Jean et
PHILIBERT Marthe. Nieul en Saintonge 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/29. CM 26/03/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LAUMONE Louis de Gabriel et
BARRABAUD Marie. <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CREUX Renée de Pierre et
SOLLAUD Marguerite. Loiré les Marais 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 01/10/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEFEBURE Toussaint de + Noël
et SAIN Jacotte. Dourlan&nbsp;? en Picardie.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JACQUEMIN Marie de Jean et +
LAMY Jacquette. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. cm 09/02/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEGER Jean de + Louis et +
CHARANSAT Marguerite. <span style='color:red'>Lussé en Angoumois 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUMOUSSAUD Magdelaine veuve
de TRILLAUD Jean. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/40. CM 28/09/1712.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEUREAUD Moïse de Daniel et
HERAUDEAU Elisabeth. <span style='color:red'>Jarnac 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Marie veuve de
SECHEREAU J. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/30. CM 08/10/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>LEVECOT François de Clmaude
et GAUTIER Marie. <span style='color:red'>Tusson 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Louise veuve de
BOULLA&nbsp;? Philippe. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/25. CM 13/06/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTIN Daniel dit Pinsault de
+ Pierre et LEBAUT Marie. <st1:PersonName ProductID="La Rochefoucauld" w:st="on"><span
 style='color:red'>La Rochefoucauld</span></st1:PersonName><span
style='color:red'> 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUDON Marie de Jacques et +
BLANCHE Jeanne. Biron 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/37. CM 05/07/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MARTINAUD Jean d’Antoine et
RAUD Marie. St Jean d’Angély 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>JOUANE Marie de François et +
COUSTEAU Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/39. CM 11/04/1711.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESLIER Jean de + Jacques et
AUGEREAU Marie. <span style='color:red'>Fléac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBINET Marie de Jean et
GUERRY Marguerite. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 27/05/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Jacques de + Pierre
et MAUDINEAU Andrée. <span style='color:red'>Champagne Mouton 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOISSEAU Catherine de Pierre
et SILLON Anne. Breuil Magné 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/32. CM 09/08/1704.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESNARD Pierre de Mathurin et
+ ROBERT Françoise. <span style='color:red'>Montignac Charente 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHALLAT Marie de Daniel et +
BAUZAY Léonarde. Rochefort ND 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/40. CM 28/04/1712.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MESTREAU Antoine de Michel et
LASSERRE Marguerite. <span style='color:red'>Aubeterre sur Dronne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESCOCHEAU Ane de Jacques et
GAILLARDE Jeanne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/37. CM 24/01/1709.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MICHEL Augustin bonnetier
veuf de MOYNAU&nbsp;? Françoise. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTIER Elisabeth de Jean et
+ CHABINEAU Marie<span style='color:red'>. Perignac 16.</span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/25. CM 03/01/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>MILLIER Jean de Jean et BOIS Magdelaine.
<span style='color:red'>Courbillac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>HURTAIN Louise veuve de ROY
Daniel. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 03/11/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NADAUD Martial de + Daniel et
MARTIN Suzanne. <span style='color:red'>Nonaville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>NEAU Jeanne veuve de
BRILLOUET J. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 24/02/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NAU André de + Grégoire et
PIGET Jeanne. <span style='color:red'>Ligné 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FOURNIER Jeanne de Pierre et
HAURU&nbsp;? Marie. Les Touches de Périgny 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 30/06/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NAVAROT Jean de + Nicolas et
+ COUTINEAU Françoise<span style='color:red'>. St Claud 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PINET Anne de Jean et +
SALNEUVE Jeanne. Château d’Oléron 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 09/05/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NEAU Louis journalier veuf de
LACOMBE Catherine. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAGNEAU Marguerite veuve de
GUERIN Jacques. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/29. CM 03/04/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NEBOUT Jean de + Pierre et +
DESAFY Jeanne. <span style='color:red'>Montmoreau St Cybard 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>AUBRIAU&nbsp;? Françoise de
Pierre et + MAUROUX Anne. Saujon 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 26/12/1693.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PASQUIER Louis de + Louis et
+ LEVAIN Louise. <span style='color:red'>Verdille 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PERIER Jeanne de René et
PAGOT&nbsp;? Jeanne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/34. CM 22/01/1706.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINASSEAU Pierre de Jean et
SERINGUET Catherine. <span style='color:red'>Nieul en Angoumois 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MARCHAND Marie Marthe
d’Etienne et CAILLE Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 25/06/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINEAU Jean de + René et
BONNET Louise. <span style='color:red'>Cherves en Poitou 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SIMON Louise de Jean et +
HEURTAUD Marie. <span style='color:red'>Montchaude 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/15. CM 18/03/1695.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PINEL Jean de + Pierre et
LECOMPTE Jeanne. St Romphaire 50.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUVEAU Marguerite de Jean
et + POUGNARD Catherine. <span style='color:red'>Villejésus 16</span>.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 14/06/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PIQUARD Antoine journalier
veuf de CHAIN Elisabeth. Mervant 85&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CHATIFEAUD Marguerite d’Etienne
et + GOT Julienne. <span style='color:red'>Barbezieres 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/39. CM 13/02/1711.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POINSET Pierre de Pierre et
PARPAILLON Marie. <span style='color:red'>Villefagnan 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Marianne de Charles et
JOUSSEAUME Anne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 02/06/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POISNEAU Jean veuf de BRUIN
Anne de + Jean et CHIRON&nbsp;? Berthomée. <span style='color:red'>Mainfonds
16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOURDIN Marie veuve de
JEANNEAU François de Baltazar et JUIN Elisabeth. Rochefort ND 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 07/02/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>POITIER François de François
et HUET Charlotte. St Gilles sur Nie.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LOTTE Anne de Pierre et
COURONNAUD Jeanne. <span style='color:red'>Villejésus 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 06/01/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PROUREAU Nicolas de + Jean et
+ SIBITAUD&nbsp;? Jeanne. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TRIAU Marie veuve de DAVID
Mathurin. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 04/10/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RAFFET Pierre de Pierre et
CHATON Léonarde. <span style='color:red'>St Cybardeaux 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOUHET Marie de Jean et +
GARRAUD Elisabeth. Cande=Cabariot 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 15/04/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RANCON Guillaume veuf de
MATHIEU Jeanne. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BALLAY Catherine veuve de
HERARD Louis. Rochefort 17&nbsp;?<span style='mso-tab-count:1'>             </span><o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. CM 19/01/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RELET&nbsp;? Etienne de +
Jean et VILLIER Louise. Ars en Ré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RIVIERE Jeanne d’Etienne et +
CATIGNON Fleurie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/21. CM 31/03/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RENAUD Jean de + Antoine et
CHAUVIN Jacquette. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GABORY&nbsp;? Marie de
Gaspard et BOUTECOR Marie. Marennes 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 29/03/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RENIER Louis texier en toile
veuf de ALLARD Jeanne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MOINET Françoise de Zacarie
et NAVOIT Elisabeth. <span style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/36. CM 20/01/1708.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RIVIERE Antoine de + Clément
et BURIN&nbsp;? Elisabeth. Magné 79.&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAVEREAU&nbsp;? Marie de Jean
et + TEXIER&nbsp;? Marie. <span style='color:red'>Jarnac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/35. CM 02/05/1707.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Jacques de + Pierre et
+ REGNIER Jacquette<span style='color:red'>. Javrezac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BEGUIER Catherine de Louis et
+ COUPRIE Marie. Antezant <st1:PersonName ProductID="La Chapelle" w:st="on">la
 Chapelle</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/39. CM 20/01/1711.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROBERT Jacques de + Pierre et
+ REIGNIER Jacquette. <span style='color:red'>Javrezac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BODIN Marie de Jean et +
THONNELIER Perrine. Bresigny&nbsp;? <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/29. CM 26/03/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>ROY François de + François et
BARRE Jeanne. <span style='color:red'>Bouteville 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VINET Marie de Jean et
MORISSET Marie. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/17. CM 26/06/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RUYS Charles enseigne de +
Jacques et DE FEROU Jacqueline. <span style='color:red'>Ligné&nbsp;? 16 diocèse
de Poitiers.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MORISSEAU Catherine de Louis
et LAURE Jeanne. Rochefort 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/22. CM 23/12/1698.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SALLAT Pierre de Pierre et +
LIZEE Marie. <span style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTHOMME Jacquette veuve de
ROBERT Michel. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/36. CM 19/08/1708.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SUREAU Geoffroy de + Hélie et
JOBET Françoise. <span style='color:red'>Aubeterre sur Dronne 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>TENAGUE&nbsp;? Georgette
veuve de REGNAUD Louis. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 21/04/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TARDAT Jean de + Pierre et
DAVID Guionne. St Amant de <span style='color:red'>Bonnieure 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANDRE Renée de Pierre et +
LAMBERT Jeanne. St Martin d’Entraigues 79.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/19. CM 28/05/1697.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TESTU Jacques boucher veuf de
DEMIEL&nbsp;? Magdelaine. <span style='color:red'>Barbezieux St Hilaire 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARGEAUD Jeanne d’Etienne et
+ POIREAU Louise. Pressigny 79&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/23. CM 08/01/1699.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER André de + Morice et
CHASSELOUP Marie. Ste Marie de Ré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BOYER Françoise de Pierre et
+ MILLAUD Marguerite. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/33. CM 01/02/1705.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER François de + Pierre
et + MET&nbsp;? Marie. Ile de Ré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MONTOZIER Catherine de
Jacques et + BERNARD Marie. <span style='color:red'>Brossac 16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/38. CM 08/01/1710.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TEXIER Philippe marinier veuf
de GILLET Anne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BREBION&nbsp;? Marie de
François et + MARQUET&nbsp;? Marguerite. <span style='color:red'>Cognac
16&nbsp;?<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/30. CM 17/12/1702.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TOBY Jean de + Jean et CHAOUIN
Elisabeth. <span style='color:red'>Javrezac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LUET Marie veuve de RADON
Jean. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. CM 25/04/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TOMBERAUD Barthélémy<span
style='mso-spacerun:yes'>  </span>Ý1646 cordonnier. Aix en Provence 13.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VALTEAU Marie de Charles et +
PAIRON Françoise. <span style='color:red'>Ambleville 16.<o:p></o:p></span></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/26. CM 28/09/1700.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TOREAU Jean de Jean et +
DUFOUR Gabrielle. <span style='color:red'>Gente 16&nbsp;?<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PIRON Marie de Guillaume et
BODIN Suzanne. Rochefort 17&nbsp;?<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/31. CM 07/06/1703.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VAIRET Nicolas de +
Louis<span style='mso-spacerun:yes'>  </span>et + DUTEUIL Marie. <st1:PersonName
ProductID="La Rochefoucauld" w:st="on"><span style='color:red'>La Rochefoucauld</span></st1:PersonName><span
style='color:red'> 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>PLANTY Catherine de François
et + LASNIER Françoise. Gensay , en Poitou .<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/13. cm 28/03/1694.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VERGNE Jean de + Nicolas et
DELAJON Marie. <span style='color:red'>Ambérac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>ANDRE Anne de Pierre et +
LAMBERT Jeanne. Rochefort 17 <o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 34/18. CM 15/07/1696.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VILLECROZE Joseph de +
Barthélémy et MORIN Anne. Roquevaire 13.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>COQUILLAUD Marie de Guillaume
et MULLON Antoinette. <span style='color:red'>Cognac 16.<o:p></o:p></span></span></p>

<p class=MsoNormal style='margin-left:18.0pt'><b style='mso-bidi-font-weight:
normal'><span style='font-size:10.0pt'>Notaire NOUVEAU Jean. Etude à <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> 17.<o:p></o:p></span></b></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/18. CM 19/07/1762. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BERTAUD Pierre marchand en
détail de Jacques marchand et VIVIEN Anne. Ý <span style='color:red'>Villefagnan
16.</span> dt <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SERRE Marie Charlotte de +
Jean Pierre marchand et MARIOCHAUD Marie Anne. Ý <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/35. CM 11/11/1745. X 12/11/1745 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>BO_ET Michel huissier et
procureur de Pierre bourgeois et THEVENIN Marie. Ý <span style='color:red'>Bellejoye
paroisse de Chassin</span> <span style='color:red'>en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DORE Françoise veuve de
LEMBERT Charles marchand de + Etienne et MASSE Françoise. Ý Rennes capitale de <st1:PersonName
ProductID="la Bretagne." w:st="on">la Bretagne.</st1:PersonName> dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Barthélémy</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/35. CM 27/02/1746. X 18/04/1746 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CHAUMET Louis garçon tailleur
d’habits de + Jean maitre tailleur d’habits et PORCHERAT&nbsp;? Marie. Ý <span
style='color:red'>Aubeterre en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DELORME Anne veuve de
LUDUVICY Guillaume. dt <st1:PersonName ProductID="La Rochelle St Barthélémy"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/9. CM 25/10/1755. X 07/10/1755 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COURTEAU Michel garçon
coutellier de + Jean bouché et FOUCAUD Marguerite. Ý <span style='color:red'>Angoulême
16</span>. dt <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RENETEAU Louise de + Louis
maitre maréchal et BABOU Marie. Ý <st1:PersonName ProductID="La Rochelle"
w:st="on">La Rochelle</st1:PersonName> dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/28. PM 28/07/1737. CM 12/08/1737. X
     12/08/1737 <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>COUTIN François loueur de
chevaux de + François journalier et MORIE&nbsp;? Catherine. Ý <span
style='color:red'>Paizay en Angoumois</span> <span style='color:red'>16</span>.
dt <st1:PersonName ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>RAUX Catherine de + Jean
laboureur à bœufs et + <st1:PersonName w:st="on">PETIT</st1:PersonName> Louise.
Ý St Georges du Bois 17. dt <st1:PersonName ProductID="La Rochelle St Sauveur"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Sauveur</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/7. CM 19/08/1753. X 20/08/1753 <st1:PersonName
     ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Barthélémy</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>CROIZET François avocat au
parlement de Bordeaux de François et PERROT Marguerite. Ý <span
style='color:red'>Pérignac en</span> <span style='color:red'>Angoumois 16</span>.
dt <st1:PersonName ProductID="La Rochelle ND" w:st="on"><st1:PersonName
 ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> ND</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEBEUF Jeanne Catherine de
Joseph négociant et POITOU Catherine. Ý <st1:PersonName ProductID="La Rochelle"
w:st="on">La Rochelle</st1:PersonName> dt <st1:PersonName
ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/28. CM 15/07/1742. X 18/07/1742 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Sauveur</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DE BUSSAC Jean licencié en
loix de MÝ Daniel conseiller du Roy et FOURRAUD de LACOSTE Marthe. Ý et dt <span
style='color:red'>Angoulême 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MICHELET Marie d’Urbain
marchand et DELPRAT Louise. Ý <st1:PersonName ProductID="La Rochelle" w:st="on">La
 Rochelle</st1:PersonName> dt <st1:PersonName ProductID="La Rochelle St Sauveur"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Sauveur</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E <st1:metricconverter ProductID="134. CM"
     w:st="on">134. CM</st1:metricconverter> 23/12/1758. X 27/12/1758 <st1:PersonName
     ProductID="La Rochelle N D" w:st="on"><st1:PersonName
      ProductID="La Rochelle N" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName>
      D</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DE JOUSSERANT Pierre
capitaine d’infanterie d’Etienne écuyer et COYTEU Anne. <span style='color:
red'>Bouchage en Poitou 16</span>. dt <st1:PersonName
ProductID="La Rochelle N D" w:st="on"><st1:PersonName ProductID="La Rochelle N"
 w:st="on"><st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
  N</st1:PersonName> D</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>GUENOT Marie Catherine veuve
de BULTEL Jean capitaine de navire.de + Joseph marchand et ROZE Françoise. Ý
des Iles Françaises d’Amérique. dt <st1:PersonName ProductID="La Rochelle N D"
w:st="on"><st1:PersonName ProductID="La Rochelle N" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName>
 D</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/18. CM 27/01/1762. X 11/02/1762
     Protestant.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>DESBORDES Jean Adam marchand
en détail de Jean Adam marchand et + HERODEAU Jeanne. Ý <span style='color:
red'>Jarnac en</span> <span style='color:red'>Charente 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>MAYNARD Marie Elizabethde +
Antoine marchand et MARIOCHAUD Suzanne. Ý <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/20. CM 14/05/1767. <o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAURE Jean François marchand
veuf de FAURE Marie de François bourgeois et + LIARD Jeanne. Ý et dt à <span
style='color:red'>Jarnac 16.</span><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARGEAUD Marie Jeanne de
Jacques marchand voillier et RENAUDIN Marguerite Henriette. Ý <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Jean</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/7. CM 20/05/1753. X 18/06/1753 Aytré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>FAYE Jacques journalier de
François laboureur et + PIET Catherine. Ý <st1:PersonName
ProductID="La Couronne" w:st="on"><span style='color:red'>La Couronne</span></st1:PersonName><span
style='color:red'> 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><st1:PersonName w:st="on"><span style='font-size:10.0pt'>PETIT</span></st1:PersonName><span
style='font-size:10.0pt'> Françoise de + Jean charpentier de navire et +
RULLIER Marie. dt <st1:PersonName ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/4. CM 11/10/1750. X12/02/1752 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>GAUTIER Charles matelot de +
Michel journalier et + DUDOGNIN Catherine. <span style='color:red'>Ý Enjac
Charente<span style='mso-spacerun:yes'>  </span>en</span> <span
style='color:red'>Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>IMBERT Madelaigne de +
Guillaume journalier et BAUDRIER Louise. Ý et<span style='mso-spacerun:yes'> 
</span>dt <st1:PersonName ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/14. CM 07/09/1760. X 20/11/1760 Aytré 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>HERAUD Pierre garçon farinier
de + Jean et COMBAUD Olive. Ý Vue diocèse de Montoir. dt Aytré 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DUQUERROY Marie de Jacques
laboureur à bras et + DUQUERROY Jeanne. Ý <span style='color:red'>Bassé en
Angoumois 16</span>. dt Aytré 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/8. CM 14/01/1754. X 11/02/1754 <st1:PersonName
     ProductID="La Rochelle N D" w:st="on"><st1:PersonName
      ProductID="La Rochelle N" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName>
      D</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>JAUD Jean paveur&nbsp; de
……………laboureur à bras et + BUHARNE Marie. Ý <span style='color:red'>Marsillac
diocèse d’Angoulême</span> <span style='color:red'>16</span>. dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LABBE Marie de + Jean
cordonnier et + RIPPE Jeanne. Ý St Romain diocèse de Saintes 17. dt <st1:PersonName
ProductID="La Rochelle N D" w:st="on"><st1:PersonName ProductID="La Rochelle N"
 w:st="on"><st1:PersonName ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName>
  N</st1:PersonName> D</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/7. CM 19/02/1753. X 20/02/1753 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NO-L André garçon perruquier
de + Etienne maitre graveur en armoiries et MASSIAS Thérèse. Ý <span
style='color:red'>Chateauneuf en Angoumois 16</span>. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>SALLENEUVE Jeanne d’Elie et +
ROY Marie. Ý Niort ND 79. dt <st1:PersonName ProductID="La Rochelle St Nicolas"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on"><st1:PersonName
  ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
 Nicolas</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/18. CM 02/10/1763. X 03/10/1763 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NO-L André perruquier sous
privilége veuf de SALLENEUVE Jeanne de + Etienne maitre graveur et armurier et
MASSIAS Thérèse. Ý <span style='color:red'>Chateauneuf en Angoumois 16</span>.
dt <st1:PersonName ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>REMY Louise de François
maitre d’équipage et GUILLON Marie. Ý <st1:PersonName ProductID="La Rochelle"
w:st="on">La Rochelle</st1:PersonName> et dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/28. CM 13/08/1742. X 27/08/1742 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>NORMAND Jacques garçon
thonnellier de + Jean et BIRAUD Aline. Ý <st1:PersonName
ProductID="La Faye St Vincent" w:st="on"><st1:PersonName ProductID="La Faye St"
 w:st="on"><st1:PersonName ProductID="La Faye" w:st="on"><span
   style='color:red'>La Faye</span></st1:PersonName><span style='color:red'> St</span></st1:PersonName><span
 style='color:red'> Vincent</span></st1:PersonName><span style='color:red'>
près Ruffec 16</span>. dt <st1:PersonName ProductID="La Rochelle St Nicolas"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Nicolas</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>FAILLOFAIS Catherine veuve de
COUPRIE Antoine boucher.<span style='mso-spacerun:yes'>  </span>dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/29. CM 22/01/1739. X 28/01/1739 <st1:PersonName
     ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
      Nicolas</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PITTRE Pierre praticien de MÝ
Clément notaire Royal et + BUSSAC Catherine. Ý <span style='color:red'>Angoulême
16</span>. dt <st1:PersonName ProductID="La Rochelle St Barthélémy" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Barthélémy</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>BARRE Louise de + MÝ Jean
huissier et DAGUERRE Louise. Ý et dt <st1:PersonName
ProductID="La Rochelle St Nicolas" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Nicolas</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/25. CM 21/01/1771. X22/01/1771 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>PRAUD Jean de + Pierre et +
MERCERON Claude. Ý <span style='color:red'>Puymoyen Angoullesme 16</span>.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>CARTEAU Jeanne de Louis
laboureur et PEROTIN Jeanne. Ý Dompierre 17. dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/18. CM 31/05/1762. X 02/06/1762 <st1:PersonName
     ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName>
      Sauveur</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>RULLIER Pierre notaire à
Mornac de François conseiller du Roy et PIGORNET Marie. Ý <span
style='color:red'>Angoulême St André 16.<o:p></o:p></span></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VALLARDON Marguerite de René
marchand et BRUNEAU Marie. Ý et dt <st1:PersonName
ProductID="La Rochelle St Sauveur" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Sauveur</st1:PersonName>
17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/28. CM 16/05/1743. X 30/05/1743 <st1:PersonName
     ProductID="La Rochelle N D" w:st="on"><st1:PersonName
      ProductID="La Rochelle N" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName>
      D</st1:PersonName> 17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>SIMON Jean garçon chirurgien
de + MÝ Jean procureur et TIBERGE Marie Anne. Ý <span style='color:red'>Verteuil
en Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle N D" w:st="on"><st1:PersonName
 ProductID="La Rochelle N" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName> D</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>LEZEAU Marie Anne de + Marc
maitre cordonnier et (FABRY Marie Anne remariée avec PHOCTU Jean) Ý <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> et dt <st1:PersonName
ProductID="La Rochelle N D" w:st="on"><st1:PersonName ProductID="La Rochelle N"
 w:st="on">La Rochelle N</st1:PersonName> D</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/33. CM 20/01/1743. X19/02/1743 <st1:PersonName
     ProductID="La Rochelle N D" w:st="on"><st1:PersonName
      ProductID="La Rochelle N" w:st="on"><st1:PersonName
       ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> N</st1:PersonName>
      D</st1:PersonName> 17<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>TACHET Jean garçon thonnelier
de + Jean et + CAROT Marguerite. Ý <span style='color:red'>St Sulpice en
Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle N D" w:st="on"><st1:PersonName
 ProductID="La Rochelle N" w:st="on">La Rochelle N</st1:PersonName> D</st1:PersonName>
17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>VERON Louise de + Pierre et +
LAVERGNE Anne. Ý St Martin Ile de Ré 17. dt <st1:PersonName
ProductID="La Rochelle N D" w:st="on"><st1:PersonName ProductID="La Rochelle N"
 w:st="on">La Rochelle N</st1:PersonName> D</st1:PersonName> 17.<o:p></o:p></span></p>

<ul style='margin-top:0cm' type=disc>
 <li class=MsoNormal style='mso-list:l11 level1 lfo5;tab-stops:list 36.0pt'><span
     style='font-size:10.0pt'>3 E 134/33. CM 06/01/1744. X 13/01/1744 <st1:PersonName
     ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
      ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName> Jean</st1:PersonName>
     17.<o:p></o:p></span></li>
</ul>

<p class=MsoNormal><span style='font-size:10.0pt'>VOYS Jacques chirurgien sur
les vaisseaux marchands de Jean et + BOUET Anne. Ý <span style='color:red'>Cognac
en Angoumois 16</span>. dt <st1:PersonName ProductID="La Rochelle St Jean"
w:st="on"><st1:PersonName ProductID="La Rochelle St" w:st="on">La Rochelle St</st1:PersonName>
 Jean</st1:PersonName> 17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'>DESJAN Marie Anne de + Jean
maitre thailleur d’habits et VIBERT Marguerite. Ý et <st1:PersonName
ProductID="La Rochelle" w:st="on">La Rochelle</st1:PersonName> et dt <st1:PersonName
ProductID="La Rochelle St Jean" w:st="on"><st1:PersonName
 ProductID="La Rochelle St" w:st="on"><st1:PersonName ProductID="La Rochelle"
  w:st="on">La Rochelle</st1:PersonName> St</st1:PersonName> Jean</st1:PersonName><span
style='mso-spacerun:yes'>  </span>17.<o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></i></b></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></i></b></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></i></b></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></i></b></p>

<p class=MsoNormal><b><i><u><span style='font-size:14.0pt'><o:p><span
 style='text-decoration:none'>&nbsp;</span></o:p></span></u></i></b></p>

<p class=MsoNormal><span style='font-size:10.0pt'><o:p>&nbsp;</o:p></span></p>

</div>
</div>
</body>

</html>
