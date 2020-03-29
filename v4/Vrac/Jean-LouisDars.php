<?php
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print('<title>Actes en vrac AGC: Jean-Louis Dars</title>');
print("</head>");

print("<body>");
print('<div class="container">');
//print("Vous etes authentifi&eacute; :-)<br>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$connexionBD->ferme();
?>
<h1 align =center>Actes notari&eacute; relev&eacute;s par M Jean-Louis DARS</h1>
<div align=center>
   
   La colonne "Classement" comporte la cote de la liasse du notaire aux AD &agrave; laquelle s'ajoute un num&eacute;ro d'acte personnel (par exemple: 2E1112-130 signifie cote 2E1112, num&eacutero d'acte personnel 130...).
</div>   
  <ul>
  <li><a href=#ancetres>Actes concernant les anc&ecirctres directs</a></li>
  <li><a href=#cousins>Actes concernant les cousins</a></li>
  </ul> 
<div align=center>  
  <h2 align=center>Anc&ecirc;tres directs</h2> 
  <a name="ancetres"> 
  
  <table  border=1 cellpadding=0 cellspacing=0 width=1032>
    <tr class=xl2715333 height=17> 
      <th height=17 class=xl2515333>Ann&eacutee</th>
      <th class=xl2615333>Date</th>
      <th class=xl2515333>Notaire</th>
      <th class=xl2515333>Classement</th>
      <th class=xl2515333>Paroisse</th>
      <th class=xl2515333>Type</th>
      <th class=xl2515333>Personnes</th>
      <th class=xl2515333>Page</th>
      <th class=xl2515333>Observations</th>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1707</td>
      <td  align=right
  x:num="38244">14-sept</td>
      <td >Porcheron</td>
      <td >2E1088-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >ARONDEAU Marie</td>
      <td  align=right x:num>748</td>
      <td >Veuve Jacques BONNORONT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38475">3-mai</td>
      <td >Lalande</td>
      <td >2E4962-20</td>
      <td >Ruelle</td>
      <td >Titre</td>
      <td >ARONDEAU Marie</td>
      <td  align=right x:num>758</td>
      <td >Pierre BELON, Jean LAQUAIRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39691">31-ao&ucirct</td>
      <td >Micheau</td>
      <td >2E1023-40</td>
      <td >Angoul&ecircme</td>
      <td >Plainte</td>
      <td >AUBIN L&eacuteonard</td>
      <td  align=right x:num>1136</td>
      <td >et Catherine GALLOIS (coups et blessures sur Ant. ROY)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38858">21-mai</td>
      <td >Clochard</td>
      <td >2E411-20</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >AUBIN L&eacuteonard</td>
      <td  align=right x:num>955</td>
      <td class=xl3115333>et ses enfants. A prendre la suite des photos</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38352">31-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E944-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >AUBIN Marguerite</td>
      <td  align=right x:num>733</td>
      <td >(Vve J. JOUANNET) &agrave Mic. JOUANNET, Menaud ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38424">13-mars</td>
      <td >Micheau</td>
      <td >2E1034-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >AUBOIN Catherine</td>
      <td  align=right x:num>823</td>
      <td >Jean DOMMET, L&eacuteonard AUBOIN et Frse DOMMET. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38635">10-oct</td>
      <td >Micheau</td>
      <td >2E1034-20</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >AUBOIN Catherine</td>
      <td  align=right x:num>823</td>
      <td >de Martial CLOCHARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38602">7-sept</td>
      <td >J&eacuteheu</td>
      <td >2E808-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >AUBOIN Jean</td>
      <td  align=right x:num>869</td>
      <td >(fils de L&eacuteonard et Fr&ccedile. DOMMET) &agrave Jean GUERIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38750">2-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-130</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >AUBOIN Jean</td>
      <td  align=right x:num>965</td>
      <td >et Jeanne MOQUET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39032">11-nov</td>
      <td >Robin</td>
      <td >2E1112-220</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >AUBOIN Jean</td>
      <td  align=right x:num>966</td>
      <td >et Jeanne MOQUET &agrave Pierre DULAC le jeune</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38631">6-oct</td>
      <td >Manci&eacute</td>
      <td >2E936-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >AUBOIN Jean</td>
      <td  align=right x:num>779</td>
      <td >Jeanne MOQUET - Mathurin PREVOST</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1651</td>
      <td class=xl3315333 align=right x:num="40370">11-juil</td>
      <td >Delacheze</td>
      <td >2E440-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>1485</td>
      <td >et Fran&ccediloise DOUMET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right x:num="39588">20-mai</td>
      <td >Guyot</td>
      <td >2E781-50</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>1174</td>
      <td 
  x:str="d'une maison (et un jeune goret) &agrave Antoine CHARRON ">d'une maison (et 
        un jeune goret) &agrave Antoine CHARRON </td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39706">15-sept</td>
      <td >Guyot</td>
      <td >2E781-60</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>1174</td>
      <td >d'une maison &agrave Louis BOURGET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td class=xl3315333 align=right x:num="40366">7-juil</td>
      <td >Delacheze</td>
      <td >2E441-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>1485</td>
      <td >et Jeanne GABORIAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right x:num="39608">9-juin</td>
      <td >Mamain</td>
      <td >2E925-20</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>1141</td>
      <td >contre Pierre IRVOIX (histoire de b&oelig;ufs. . .)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38482">10-mai</td>
      <td >Peuple</td>
      <td >2E1065-20</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>839</td>
      <td >avec Denis PAILHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38417">6-mars</td>
      <td >Chauvin</td>
      <td >2E308-20</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>822</td>
      <td >de Marie MAZURIER veuve de Jean BALANGE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38555">22-juil</td>
      <td >Manci&eacute</td>
      <td >2E934-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >AUBOIN L&eacuteonard</td>
      <td class=xl3415333 x:num>858</td>
      <td >de regain et pacage de Etienne BOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39052">1-d&eacutec</td>
      <td >Robin</td>
      <td >2E1111-290</td>
      <td >Angoul&ecircme</td>
      <td >Contrat</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>962</td>
      <td >et H&eacutelie THOUARD avec Jehan MAIGNAN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38631">6-oct</td>
      <td >Peuple</td>
      <td >2E1067-70</td>
      <td >Angoul&ecircme</td>
      <td >Sous-arrentement</td>
      <td >AUBOIN L&eacuteonard</td>
      <td  align=right x:num>840</td>
      <td >et Jeanne GABORIT &agrave Jean AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right
  x:num="38563">30-juil</td>
      <td >Manci&eacute</td>
      <td >2E960-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >AUBOIN Marie</td>
      <td  align=right x:num>786</td>
      <td >Jeanne ROUHIER sa fille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38494">22-mai</td>
      <td >Manci&eacute</td>
      <td >2E962-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >AUBOIN Marie</td>
      <td  align=right x:num>791</td>
      <td >J. BOUHIER et M. ROUHIER - Guill. LESPINEUIL</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38156">18-juin</td>
      <td >Manci&eacute</td>
      <td >2E964-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >AUBOIN Marie</td>
      <td  align=right x:num>744</td>
      <td >&agrave Pierre ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1744</td>
      <td  align=right
  x:num="38475">3-mai</td>
      <td >Manci&eacute</td>
      <td >2E963-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >AUBOIN Marie</td>
      <td  align=right x:num>801</td>
      <td >&agrave Pierre COUPILLAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td class=xl3315333 align=right x:num="40194">16-janv</td>
      <td >Micheau</td>
      <td >2E1012-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >AUDOUIN Jean</td>
      <td  align=right x:num>1483</td>
      <td >et Fran&ccediloise BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td class=xl3315333 align=right
  x:num="39879">7-mars</td>
      <td >Sicard</td>
      <td >2E1188-10</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >AUDOUIN Jean</td>
      <td  align=right x:num>1377</td>
      <td >et Fran&ccediloise BOILEVIN: du moulin de la Tour Garnier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right x:num="38535">2-juil</td>
      <td >Peuple</td>
      <td >2E1064-200</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >AUDOUIN Jean</td>
      <td  align=right x:num>859</td>
      <td 
  x:str="d'une pi&egravece de pr&eacute de Denis BERTHON ">d'une pi&egravece de pr&eacute de Denis BERTHON 
      </td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38532">29-juin</td>
      <td >Peuple</td>
      <td >2E1066-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >AUDOUIN Jean</td>
      <td  align=right x:num>839</td>
      <td >et Fr&ccedile. BOILEVIN de Andr&eacute MOREAU (d'un moulin)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1632</td>
      <td class=xl3315333 align=right x:num="40349">20-juin</td>
      <td >Couste</td>
      <td >2E3492-30</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >BALOTEAU Helie</td>
      <td  align=right x:num>1493</td>
      <td >et Jeanne NEGRIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td class=xl3315333 align=right
  x:num="40184">6-janv</td>
      <td >Mallet</td>
      <td >2E6045-10</td>
      <td >Xambes</td>
      <td >Partage</td>
      <td >BALOTEAU Philippe</td>
      <td >&nbsp;</td>
      <td >Donn&eacute par Fabrice Bouffanet</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right x:num="38972">12-sept</td>
      <td >Robin</td>
      <td >2E1111-350</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >BARREAU Marie</td>
      <td  align=right x:num>962</td>
      <td >apr&egraves d&eacutec&egraves de Guillaume BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39711">20-sept</td>
      <td >Cladier</td>
      <td >2E360-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >BARREAU Marie</td>
      <td  align=right x:num>1155</td>
      <td >et Jacques BASSET son beau-fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39456">9-janv</td>
      <td >Cladier</td>
      <td >2E361-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BARREAU Marie</td>
      <td  align=right x:num>1157</td>
      <td >Jean GUYOT et Fran&ccedilois BASSET et Jeanne GUYOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39472">25-janv</td>
      <td >Cladier</td>
      <td >2E361-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >BARREAU Marie</td>
      <td  align=right x:num>1157</td>
      <td >apr&egraves contrat du 2e mariage avec Jean GUYOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39013">23-oct</td>
      <td >Peuple</td>
      <td >2E1069-40</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >BARREAU Marie</td>
      <td  align=right x:num>749</td>
      <td >Jean ROUFFIGNAC et Suzanne BASSET. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38454">12-avr</td>
      <td >Peynaud</td>
      <td >2E1072-20</td>
      <td >Angoul&ecircme</td>
      <td >Abandon</td>
      <td >BARREAU Marie</td>
      <td  align=right x:num>785</td>
      <td >Suzanne BASSET et Jean ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1650</td>
      <td  align=right
  x:num="39448">1-janv</td>
      <td >Guyot</td>
      <td >2E778-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BASSET Guillaume</td>
      <td  align=right x:num>1157</td>
      <td >Marie BARREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39871">27-f&eacutevr</td>
      <td >Gaignier</td>
      <td >2E583-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >BASSET Guillaume</td>
      <td  align=right x:num>1205</td>
      <td >et Leonard SERIT &agrave Jean BECHADE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38789">13-mars</td>
      <td >Robin</td>
      <td >2E1111-210</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >BASSET Guillaume</td>
      <td  align=right x:num>962</td>
      <td >et Marie BARREAU de Etienne DEBELLEPRIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38694">8-d&eacutec</td>
      <td >Peynaud</td>
      <td >2E1071-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BASSET Guillaume</td>
      <td  align=right x:num>782</td>
      <td >Ja., Fr., Suzanne BASSET et J. ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38639">14-oct</td>
      <td >Peynaud</td>
      <td >2E1071-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BASSET Guillaume</td>
      <td  align=right x:num>782</td>
      <td >Ja., Fr., Suzanne BASSET et J. ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38353">1-janv</td>
      <td >Chauvin</td>
      <td >2E323-30</td>
      <td >Lhoumeau</td>
      <td >D&eacuteclaration</td>
      <td >BENESTEAU Catherine</td>
      <td  align=right x:num>843</td>
      <td >et Vincent MESNARD son fils (et Fran&ccediloise sa fille)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td class=xl3515333 align=right
  x:num="39790">08-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5924-10</td>
      <td >Vaux-Rouillac</td>
      <td >Renonciation</td>
      <td >BENESTEAU Etienne</td>
      <td  align=right x:num>1170</td>
      <td >de Berthom&eacutee GENTIS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td class=xl3515333 align=right
  x:num="39803">21-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5926-80</td>
      <td >Vaux-Rouillac</td>
      <td >Sommation</td>
      <td >BENESTEAU Etienne</td>
      <td  align=right x:num>1168</td>
      <td >et Marie FOURNIER sa femme de Michel GENTIS: portillon</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td class=xl3515333 align=right
  x:num="39470">23-janv</td>
      <td >Daniaud</td>
      <td >2E5933-110</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >BENESTEAU Etienne</td>
      <td  align=right x:num>1164</td>
      <td >de pi&egraveces de terre avec Michel GENTIS, de M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td class=xl3315333 align=right x:num="39836">23-janv</td>
      <td >Daniaud</td>
      <td >2E5937-10</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >BENESTEAU Michel</td>
      <td  align=right x:num>1435</td>
      <td >et Catherine MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td class=xl3515333 align=right x:num="39463">16-janv</td>
      <td >Daniaud</td>
      <td >2E5926-10</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >BENESTEAU Pierre</td>
      <td  align=right x:num>1168</td>
      <td >et Estienne son fils, de M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39476">29-janv</td>
      <td >Daniaud</td>
      <td >2E5923-100</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >BERNARD Marie</td>
      <td  align=right x:num>1169</td>
      <td class=xl3115333>comme h&eacuteriti&egravere de Marie JOUBERT fille de Fran&ccedilois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39456">9-janv</td>
      <td >Daniaud</td>
      <td >2E5930-110</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >BERNARD Marie</td>
      <td  align=right x:num>1164</td>
      <td >Prise et terre des Giraud, pr&egraves Ste Catherine, Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39475">28-janv</td>
      <td >Daniaud</td>
      <td >2E5930-120</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1164</td>
      <td >Prise et terre du Bois de la Pie, pr&egraves Ste Catherine</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39547">9-avr</td>
      <td >Daniaud</td>
      <td >2E5931-120</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1163</td>
      <td >veuve de Fran&ccedilois BOISDON et ses enfants</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39569">1-mai</td>
      <td >Daniaud</td>
      <td >2E5932-140</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1164</td>
      <td >et Jean BOISDON son fils avec Isa&iumle DANJOU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39670">10-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5932-200</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1164</td>
      <td >et les BOISDON ses enfants</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39558">20-avr</td>
      <td >Daniaud</td>
      <td >2E5933-140</td>
      <td >Vaux-Rouillac</td>
      <td >M&eacutetairie</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1165</td>
      <td >et Michel DELABROUSSE et Jean BOISDON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td class=xl3515333 align=right
  x:num="39789">07-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5933-170</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1165</td>
      <td >3 brebis lors partage Jean et Marguerite BOISDON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td class=xl3515333 align=right
  x:num="39473">26-janv</td>
      <td >Daniaud</td>
      <td >2E5934-200</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1165</td>
      <td >de dettes avec Jean BOISDON le jeune son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39756">4-nov</td>
      <td >Daniaud</td>
      <td >2E5934-240</td>
      <td >Vaux-Rouillac</td>
      <td >Rappel</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1165</td>
      <td >&agrave Jacques BOISDON son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39649">20-juil</td>
      <td >Daniaud</td>
      <td >2E5935-220</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacutelaissement</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1167</td>
      <td >de pi&egraveces de terre &agrave Jean BOISDON le jeune son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="39853">9-f&eacutevr</td>
      <td >Petit</td>
      <td >2E5182-10</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Assignation</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1220</td>
      <td >Jean BOISDON son fils et Marie SAUVESTRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td class=xl3315333 align=right x:num="40016">22-juil</td>
      <td >Audouin</td>
      <td >2E120-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1341</td>
      <td >et Jean et Mathieu BOISDON ses fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td class=xl3315333 align=right
  x:num="40016">22-juil</td>
      <td >Audouin</td>
      <td >2E120-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >BERNARD Perrine</td>
      <td  align=right x:num>1341</td>
      <td >et Jean BOISDON son fils avec Mathieu BOISDON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right x:num="38841">4-mai</td>
      <td >Renon</td>
      <td >2E2941-20</td>
      <td >Garat</td>
      <td >Partage</td>
      <td >BIARD Jean</td>
      <td  align=right x:num>971</td>
      <td >avec ses fr&egravere et soeurs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38802">26-mars</td>
      <td >Renon</td>
      <td >2E2941-10</td>
      <td >Garat</td>
      <td >Inventaire</td>
      <td >BIARD Jean</td>
      <td  align=right x:num>971</td>
      <td >apr&egraves d&eacutec&egraves de Fran&ccediloise GRELLET sa m&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38966">6-sept</td>
      <td >Renon</td>
      <td >2E2941-40</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >BIARD Jean</td>
      <td  align=right x:num>971</td>
      <td >et Catherine COUPRIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38528">25-juin</td>
      <td >Porcheron</td>
      <td >2E1089-200</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >BIARD Jean</td>
      <td  align=right x:num>837</td>
      <td >Et Cath. COUPRIE, J. RIFFAUD et Jacquette BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1650</td>
      <td  align=right
  x:num="39514">7-mars</td>
      <td >Baudet</td>
      <td >2E2788-10</td>
      <td >Echallat</td>
      <td >Vente</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1156</td>
      <td >d'un pr&eacute par Pierre FAURE (Guion GRELLET beau-p&egravere ?)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1651</td>
      <td  align=right
  x:num="39864">20-f&eacutevr</td>
      <td >Rouyer</td>
      <td >2E4965-60</td>
      <td >Ruelle</td>
      <td >Ferme</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1226</td>
      <td >de Georges SALLATON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1651</td>
      <td  align=right
  x:num="39849">5-f&eacutevr</td>
      <td >Rouyer</td>
      <td >2E4965-50</td>
      <td >Ruelle</td>
      <td >Echange</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1226</td>
      <td >de terres avec Georges SALLATON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39590">22-mai</td>
      <td >Guyot</td>
      <td >2E779-20</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1158</td>
      <td >et Gr&eacutegoire SALLATON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39453">6-janv</td>
      <td >Guyot</td>
      <td >2E781-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1174</td>
      <td >&agrave Jehan BIBAUD: du droit de chauffage et pacage dans 
        les bois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39453">6-janv</td>
      <td >Guyot</td>
      <td >2E781-10</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1174</td>
      <td 
  x:str="de Fran&ccedilois NORMAND:  droit de chauffage et pacage ds les bois ">de Fran&ccedilois 
        NORMAND:  droit de chauffage et pacage ds les boi<span style='display:none'>s 
        </span></td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39768">16-nov</td>
      <td >Juilhard</td>
      <td >2E862-50</td>
      <td >Angoul&ecircme</td>
      <td >Rôle</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>1136</td>
      <td >Rôle de Garat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39013">23-oct</td>
      <td >Renon</td>
      <td >2E2938-100</td>
      <td >Garat</td>
      <td >Association</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>974</td>
      <td >et M&eacutery BIARD et Fr&ccedile. et Marie GRELET lrs femmes</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="38897">29-juin</td>
      <td >Renon</td>
      <td >2E2938-120</td>
      <td >Garat</td>
      <td >Arrentement</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>974</td>
      <td >&agrave Antoine COUPRIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="38739">22-janv</td>
      <td >Renon</td>
      <td >2E2938-110</td>
      <td >Garat</td>
      <td >Bail</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>974</td>
      <td >Pour amasser la taille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38962">2-sept</td>
      <td >Renon</td>
      <td >2E2938-150</td>
      <td >Garat</td>
      <td >Bail</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>974</td>
      <td >et M&eacutery BIARD de Fran&ccedilois et Guillaume DARY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38967">7-sept</td>
      <td >Renon</td>
      <td >2E2938-180</td>
      <td >Garat</td>
      <td >Vente</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>974</td>
      <td >de Louis POITEVIN et Jeanne FAURE sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38993">3-oct</td>
      <td >Renon</td>
      <td >2E2938-190</td>
      <td >Garat</td>
      <td >Transaction</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>974</td>
      <td >et Marie GRELET femme de M&eacutery BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38824">17-avr</td>
      <td >Renon</td>
      <td >2E2939-20</td>
      <td >Garat</td>
      <td >Vente</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>972</td>
      <td >de Pierre PERONNET et Philippe FAURE sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38922">24-juil</td>
      <td >Renon</td>
      <td >2E2939-40</td>
      <td >Garat</td>
      <td >Vente</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>972</td>
      <td >de Martial CLERC et Pierre et Pierre CLERC ses fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38778">2-mars</td>
      <td >Renon</td>
      <td >2E2939-60</td>
      <td >Garat</td>
      <td >Echange</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>972</td>
      <td >et Nicolas VERGNAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38785">9-mars</td>
      <td >Renon</td>
      <td >2E2939-90</td>
      <td >Garat</td>
      <td >Proc&egraves verbal</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>972</td>
      <td >et M&eacutery BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38841">4-mai</td>
      <td >Renon</td>
      <td >2E2940-20</td>
      <td >Garat</td>
      <td >Possession</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>972</td>
      <td >et M&eacutery BIARD et Fr&ccedile. et Marie GRELET lrs femmes</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38721">4-janv</td>
      <td >Renon</td>
      <td >2E2940-10</td>
      <td >Garat</td>
      <td >Partage</td>
      <td >BIARD Paul</td>
      <td  align=right x:num>972</td>
      <td >et M&eacutery BIARD et Fr&ccedile. et Marie GRELET lrs femmes</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39458">11-janv</td>
      <td >Daniaud</td>
      <td >2E5934-170</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1165</td>
      <td >et Jean BOISDON son fr&egravere, fils de Perrine BERNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39473">26-janv</td>
      <td >Daniaud</td>
      <td >2E5934-190</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1165</td>
      <td >et Marie GONTIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39460">13-janv</td>
      <td >Daniaud</td>
      <td >2E5934-180</td>
      <td >Vaux-Rouillac</td>
      <td >March&eacute</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1165</td>
      <td >et Claude GUILLAUMEAU. Apprentissage de charpentier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39793">11-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5935-180</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1167</td>
      <td >de Jean ROY marchand: une pi&egravece de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39904">1-avr</td>
      <td >Petit</td>
      <td >2E5182-30</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Achat</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1220</td>
      <td >d'une maison et terres de Pierre CHEVALLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="39897">25-mars</td>
      <td >Petit</td>
      <td >2E5182-40</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Accord</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1220</td>
      <td >et Mathieu et Jean ses fr&egraveres &agrave propos partage</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td class=xl3315333 align=right x:num="40312">14-mai</td>
      <td >Baudet</td>
      <td >2E4306-10</td>
      <td >Moulidars</td>
      <td >Mariage</td>
      <td >BOISDON Jacques</td>
      <td  align=right x:num>1491</td>
      <td >et Jeanne BENESTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right x:num="38904">6-juil</td>
      <td >Gibaud</td>
      <td >2E661-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BOISTEAU Fran&ccedilois</td>
      <td  align=right x:num>969</td>
      <td >et Ysabeau BOILEVIN &agrave Guillaume BOISTEAU fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39061">10-d&eacutec</td>
      <td >Robin</td>
      <td >2E1110-150</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >BOISTEAU Fran&ccedilois</td>
      <td  align=right x:num>956</td>
      <td >de Michel BOISTEAU son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39004">14-oct</td>
      <td >Robin</td>
      <td >2E1111-170</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BOISTEAU Fran&ccedilois</td>
      <td  align=right x:num>962</td>
      <td >et Louise DELAGE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38905">7-juil</td>
      <td >Robin</td>
      <td >2E1111-150</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >BOISTEAU Fran&ccedilois</td>
      <td  align=right x:num>962</td>
      <td >Michel, Berthom&eacute, Pierre, Marguerite et Philippe</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Robin</td>
      <td >2E1111-300</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >BOISTEAU Fran&ccedilois</td>
      <td  align=right x:num>962</td>
      <td >et Gervais BRANGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38954">25-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1111-320</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >BOISTEAU Fran&ccedilois</td>
      <td  align=right x:num>962</td>
      <td >apr&egraves son d&eacutec&egraves</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="38912">14-juil</td>
      <td >Vachier</td>
      <td >2E1288-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BOISTEAU Jean</td>
      <td  align=right x:num>1000</td>
      <td >&agrave Jehan BONNEMAIN son beau-fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38781">5-mars</td>
      <td >Vachier</td>
      <td >2E1290-100</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >BOISTEAU Jean</td>
      <td  align=right x:num>976</td>
      <td >et Den. BONNEMAIN et Gasp. BONNEMAIN beau-p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39065">14-d&eacutec</td>
      <td >Robin</td>
      <td >2E1109-200</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >BOISTEAU Jean</td>
      <td  align=right x:num>954</td>
      <td >et Denise BONNEMAIN &agrave Thomas ANTOINE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td class=xl2415333 align=right x:num="39833">20-janv</td>
      <td >Huguet Jean</td>
      <td >2E792-10</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >BOISTEAU Jean</td>
      <td  align=right x:num>1200</td>
      <td >et sa belle-soeur Marie BONNEMAIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right x:num="38948">19-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1112-120</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >BOISTEAU Philippe</td>
      <td  align=right x:num>965</td>
      <td >Sous la curatelle de Pierre BOITEAUD son oncle</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38537">4-juil</td>
      <td >Manci&eacute</td>
      <td >2E938-190</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >BOISTEAU Philippe</td>
      <td  align=right x:num>777</td>
      <td >Marie MESNARD -  Pierre GUIONNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38776">28-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E938-170</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BOISTEAU Philippe</td>
      <td  align=right x:num>777</td>
      <td >Marie MESNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38783">7-mars</td>
      <td >Vachier</td>
      <td >2E1290-110</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >BONNEMAIN Gaspard</td>
      <td  align=right x:num>976</td>
      <td >des meubles dans sa maison</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38781">5-mars</td>
      <td >Vachier</td>
      <td >2E1290-100</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >BONNEMAIN Gaspard</td>
      <td  align=right x:num>976</td>
      <td >et Cath. GENERET et J. BOITAUD leur gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39843">30-janv</td>
      <td >Gaignier</td>
      <td >2E583-50</td>
      <td >Angoul&ecircme</td>
      <td >Convention</td>
      <td >BONNEMAIN Gaspard</td>
      <td  align=right x:num>1205</td>
      <td class=xl3115333>et Jean BOISTEAU son gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right
  x:num="38587">23-ao&ucirct</td>
      <td >Lalande</td>
      <td >2E4962-30</td>
      <td >Ruelle</td>
      <td >Ferme</td>
      <td >BONNORONT Andr&eacute</td>
      <td  align=right x:num>758</td>
      <td >Jean BONNORONT - Jean FAURE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38473">1-mai</td>
      <td >Lalande</td>
      <td >2E4963-10</td>
      <td >Ruelle</td>
      <td >Vente</td>
      <td >BONNORONT Andr&eacute</td>
      <td  align=right x:num>759</td>
      <td >Jean BONNORONT - Jean LARRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38597">2-sept</td>
      <td >Lalande</td>
      <td >2E4963-40</td>
      <td >Ruelle</td>
      <td >Tableau</td>
      <td >BONNORONT Andr&eacute</td>
      <td  align=right x:num>759</td>
      <td >Tableau des habitants de Magnac - Recollement</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38114">7-mai</td>
      <td >Texier</td>
      <td >2E3419-40</td>
      <td >Magnac</td>
      <td >Quittance</td>
      <td >BONNORONT Jacques</td>
      <td  align=right x:num>750</td>
      <td >Andr&eacute BONNORONT - Jean BIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="39766">14-nov</td>
      <td >Aigre</td>
      <td >2E109-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >BONNORONT Jacques</td>
      <td  align=right x:num>1120</td>
      <td >et Andr&eacute BONNORONT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="39503">25-f&eacutevr</td>
      <td >Aigre</td>
      <td >2E109-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >BONNORONT Jacques</td>
      <td  align=right x:num>1120</td>
      <td >et Andr&eacute son fr&egravere &agrave Pierre RINGUET</td>
    </tr>
    <tr height=17> 
      <td height=17 >&nbsp;</td>
      <td >&nbsp;</td>
      <td >Aigre</td>
      <td >2E110-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >BONNORONT Jacques</td>
      <td  align=right x:num>1120</td>
      <td >&agrave Pierre SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38374">22-janv</td>
      <td >Robin</td>
      <td >2E1110-100</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>768</td>
      <td >Antoinette SIMARD (et page 956)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38445">3-avr</td>
      <td >Peuple</td>
      <td >2E1064-180</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>859</td>
      <td >de Geoffroy, Guillaume, etc. TEXIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38667">11-nov</td>
      <td >Peuple</td>
      <td >2E1065-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>839</td>
      <td >de Fran&ccedilois SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38353">1-janv</td>
      <td >Peuple</td>
      <td >2E1065-10</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>839</td>
      <td >de L&eacuteonard FELLIT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38741">24-janv</td>
      <td >Mamain</td>
      <td >2E930-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>978</td>
      <td >et P. CHERDON et Andr&eacute LEURAUD ses beaux-fr&egraveres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38515">12-juin</td>
      <td >Peuple</td>
      <td >2E1066-70</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>839</td>
      <td >de Guillaume AUDOUIN fils de Jean (anc&ecirctre)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38907">9-juil</td>
      <td >Peynaud</td>
      <td >2E2767-50</td>
      <td >Dirac</td>
      <td >Reconnaissance</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>873</td>
      <td >et Jacques COUPRIE &agrave M. de PRANSAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38475">3-mai</td>
      <td >Peuple</td>
      <td >2E1067-40</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >BONNORONT Jean</td>
      <td  align=right x:num>841</td>
      <td >et Fran&ccediloise et Marie ses s&oeligurs &agrave Fran&ccedilois DUPORT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1744</td>
      <td  align=right
  x:num="38237">7-sept</td>
      <td >Th&eacutenevot</td>
      <td >2E4967-10</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>746</td>
      <td >Jeanne RIFFAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38480">8-mai</td>
      <td >Caillaud</td>
      <td >2E249-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>776</td>
      <td >Jeanne RIFFAUD - Fran&ccedilois PREVOST Anne LEBON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38514">11-juin</td>
      <td >Lalande</td>
      <td >2E4963-80</td>
      <td >Ruelle</td>
      <td >Quittance</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>759</td>
      <td >Jean BONNAURON (Marie ARONDEAU)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38094">17-avr</td>
      <td >Th&eacutenevot</td>
      <td >2E4968-10</td>
      <td >Ruelle</td>
      <td >Transaction</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>749</td>
      <td >Pran&ccedilois PREVAUT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38096">19-avr</td>
      <td >Th&eacutenevot</td>
      <td >2E4968-20</td>
      <td >Ruelle</td>
      <td >Vente</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>749</td>
      <td >Denis PLANTINET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38193">25-juil</td>
      <td >Th&eacutenevot</td>
      <td >2E4968-40</td>
      <td >Ruelle</td>
      <td >Quittance</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>749</td>
      <td >Jean BONNORONT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38193">25-juil</td>
      <td >Th&eacutenevot</td>
      <td >2E4968-30</td>
      <td >Ruelle</td>
      <td >Reconnaissance</td>
      <td >BONNORONT Pierre</td>
      <td  align=right x:num>749</td>
      <td >Jeanne RIFFAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td  align=right
  x:num="38162">24-juin</td>
      <td >Porcheron</td>
      <td >2E1088-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BOUCHAUD Pierre</td>
      <td  align=right x:num>748</td>
      <td >Marie MESNADEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1723</td>
      <td  align=right
  x:num="38481">9-mai</td>
      <td >Chauvin</td>
      <td >2E323-50</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >BOUCHAUD Pierre</td>
      <td  align=right x:num>843</td>
      <td >de Etienne TROUCHERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td class=xl3315333 align=right x:num="40064">8-sept</td>
      <td >Chauvin</td>
      <td >2E324-50</td>
      <td >L'houmeau</td>
      <td >Quittance</td>
      <td >BOUCHAUD Pierre</td>
      <td  align=right x:num>1328</td>
      <td >donn&eacutee par Antoine CLOCHARD mari de Marie BOUCHAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right x:num="39079">28-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1119-60</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >BRISSAUD Antoine</td>
      <td  align=right x:num>946</td>
      <td >de tonnelier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38871">3-juin</td>
      <td >Clochard</td>
      <td >2E409-180</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >BRISSAUD Antoine</td>
      <td  align=right x:num>963</td>
      <td >et Jeanne MARTIN de Jean MAFFRANT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38817">10-avr</td>
      <td >Clochard</td>
      <td >2E409-150</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >BRISSAUD Antoine</td>
      <td  align=right x:num>963</td>
      <td >et Jeanne MARTIN de Jean MAFFRANT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38501">29-mai</td>
      <td >J&eacuteheu</td>
      <td >2E807-50</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >BRISSAUD Antoine</td>
      <td  align=right x:num>870</td>
      <td >et Jeanne MARTIN de P. DUBOIS (agriers, terrages. . .)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38362">10-janv</td>
      <td >J&eacuteheu</td>
      <td >2E809-180</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >BRISSAUD Antoine</td>
      <td  align=right x:num>867</td>
      <td >&agrave Jean MARFRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39480">2-f&eacutevr</td>
      <td >Cladier</td>
      <td >2E365-10</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >BRISSAUD Antoine</td>
      <td  align=right x:num>1159</td>
      <td >et Jeanne MARTIN sa femme avec Pierre DUBOIS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right
  x:num="37994">8-janv</td>
      <td >Caillaud</td>
      <td >2E230-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >BRISSAUD Marguerite</td>
      <td  align=right x:num>591</td>
      <td >Pierre IMBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38931">2-ao&ucirct</td>
      <td >Boutillier</td>
      <td >2E227-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>957</td>
      <td >et Marie IMBERT (cf aussi p.974)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38575">11-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E315-190</td>
      <td >L'houmeau</td>
      <td >Transaction</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>787</td>
      <td >Jacques BARBARY et Anne BRISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38539">6-juil</td>
      <td >Chauvin</td>
      <td >2E316-110</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>811</td>
      <td >de Fran&ccedilois RAVON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39062">11-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1124-30</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>941</td>
      <td >et Fran&ccedilois IMBERT de Pierre CHAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38424">13-mars</td>
      <td >Chauvin</td>
      <td >2E316-180</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>811</td>
      <td >&agrave Jean MESLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td class=xl3515333 align=right
  x:num="38556">23-juil</td>
      <td >Chauvin</td>
      <td >2E316-210</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>811</td>
      <td >et Louis VALLIN &agrave P. COMBRET (et Marie IMBERT)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38375">23-janv</td>
      <td >Chauvin</td>
      <td >2E316-160</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves verbal</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>811</td>
      <td >B&acirctiments acquis de Catherine DEDIEU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38886">18-juin</td>
      <td >Rouhier</td>
      <td >2E1125-10</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves verbal</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>937</td>
      <td >et Fran&ccedilois IMBERT et Pierre CHAUVAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38615">20-sept</td>
      <td >Chauvin</td>
      <td >2E316-230</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>811</td>
      <td >et Louis VALLIN de Pierre COMBRET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38437">26-mars</td>
      <td >Chauvin</td>
      <td >2E317-110</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>812</td>
      <td >&agrave Pierre COMBRET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38159">21-juin</td>
      <td >Peynaud</td>
      <td >2E1070-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>750</td>
      <td >Etienne FOUGERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td class=xl2415333 align=right x:num="39829">16-janv</td>
      <td >Audouin</td>
      <td >2E123-50</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>1356</td>
      <td >et Pierre COMBRET me de gabarre (600 livres et tonneaux)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right x:num="38485">13-mai</td>
      <td >Chauvin</td>
      <td >2E318-170</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>812</td>
      <td >par Mathieu BOUTILLIER (et Marie IMBERT)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38496">24-mai</td>
      <td >Chauvin</td>
      <td >2E318-180</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>812</td>
      <td >de bois par Raymond FOUGERAT et Pierre DUVAL</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38643">18-oct</td>
      <td >Chauvin</td>
      <td >2E320-80</td>
      <td >Lhoumeau</td>
      <td >March&eacute</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>815</td>
      <td >Jean SIRAUD et Marin VERNADAS: coupe de bois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right
  x:num="38431">20-mars</td>
      <td >Chauvin</td>
      <td >2E321-100</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>801</td>
      <td >L&eacutegier GIRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right
  x:num="39480">2-f&eacutevr</td>
      <td >Aigre</td>
      <td >2E108-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>1120</td>
      <td >et Marie IMBERT avec Jean PALICIERE (mille livres)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38382">30-janv</td>
      <td >Chauvin</td>
      <td >2E321-150</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>801</td>
      <td >Cybard GOUGNET (march&eacute de lattes)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38205">6-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1086-50</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >BRISSAUD Toussaint</td>
      <td  align=right x:num>746</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1618</td>
      <td class=xl3315333 align=right x:num="39866">22-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1115-60</td>
      <td >L'houmeau</td>
      <td >Acte</td>
      <td >BRISSON Etienne</td>
      <td  align=right x:num>1291</td>
      <td >et Girarde RAMBAUD sa femme et Jehan RAMBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right x:num="39049">28-nov</td>
      <td >Clochard</td>
      <td >2E412-140</td>
      <td >Lhoumeau</td>
      <td >D&eacuteclaration</td>
      <td >CARRE Jean</td>
      <td  align=right x:num>953</td>
      <td >et Marie DELACROIX, pour Jean leur fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38519">16-juin</td>
      <td >Peuple</td>
      <td >2E1061-110</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>860</td>
      <td >et Charlotte CHARREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38374">22-janv</td>
      <td >Peuple</td>
      <td >2E1062-10</td>
      <td >Angoul&ecircme</td>
      <td >Acquisition</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>859</td>
      <td >et Charlotte CHARREAU de Pierre FORGEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38766">18-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1122-10</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>944</td>
      <td >Pour un pavage chez Fran&ccedilois RENAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td class=xl3315333 align=right x:num="40023">29-juil</td>
      <td >Audouin</td>
      <td >2E121-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>1349</td>
      <td >&agrave Pasquet FORGEAU (pour une petite maison)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td class=xl3315333 align=right
  x:num="39957">24-mai</td>
      <td >Audouin</td>
      <td >2E123-60</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>1356</td>
      <td >&agrave Pierre SEGUIN (sous-location d'une maison)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right x:num="38624">29-sept</td>
      <td >Manci&eacute</td>
      <td >2E938-150</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>777</td>
      <td >Louis ROSSIGNOL (Fran&ccedilois CHAUVET anc&ecirctre?)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right
  x:num="39667">7-ao&ucirct</td>
      <td >Aigre</td>
      <td >2E108-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >CHAUVET Fran&ccedilois</td>
      <td  align=right x:num>1120</td>
      <td >et Jean BRUN avec Jean FENIOU (haie et foss&eacute)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38678">22-nov</td>
      <td >Porcheron</td>
      <td >2E1091-70</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >CHAUVET Louis</td>
      <td  align=right x:num>841</td>
      <td >et Louise BRETON (1er mariage de Louis)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38563">30-juil</td>
      <td >Manci&eacute</td>
      <td >2E962-30</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >CHAUVET Louis</td>
      <td  align=right x:num>791</td>
      <td >et Madeleine ROUFFIGNAC de J. JAMAIN (arbres)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38423">12-mars</td>
      <td >Marchadier</td>
      <td >2E969-50</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >CHAUVET Louis</td>
      <td  align=right x:num>802</td>
      <td >Et autres &agrave  Marie THEVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1743</td>
      <td  align=right
  x:num="38596">1-sept</td>
      <td >Manci&eacute</td>
      <td >2E962-70</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >CHAUVET Louis</td>
      <td  align=right x:num>791</td>
      <td >et autres &agrave Sgr. du Maine Gagnaud</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1745</td>
      <td  align=right
  x:num="38260">30-sept</td>
      <td >Caillaud</td>
      <td >2E944-30</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >CHAUVET Louis</td>
      <td  align=right x:num>713</td>
      <td >TAPONNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right
  x:num="39940">7-mai</td>
      <td >Huguet</td>
      <td >2E784-10</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1191</td>
      <td >veuve Antoine JOUANNET &agrave propos CM de Arnaud son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1650</td>
      <td  align=right
  x:num="39971">7-juin</td>
      <td >Huguet</td>
      <td >2E785-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1191</td>
      <td >veuve Antoine JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1650</td>
      <td  align=right
  x:num="39973">9-juin</td>
      <td >Huguet</td>
      <td >2E785-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1191</td>
      <td >et partage d'une maison avec Georges SEGUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39599">31-mai</td>
      <td >Huguet Jean</td>
      <td >2E786-10</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1194</td>
      <td >d'une pi&egravece de pr&eacute de Fran&ccedilois MAURICE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="39570">2-mai</td>
      <td >Huguet Jean</td>
      <td >2E787-20</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1194</td>
      <td >d'une maison &agrave Jacques CALVAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39947">14-mai</td>
      <td >Huguet Jean</td>
      <td >2E789-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1195</td>
      <td >&agrave Jean LIZEE de terres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="40024">30-juil</td>
      <td >Huguet Jean</td>
      <td >2E789-50</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>1195</td>
      <td >&agrave Bertrand DEPOITIERS d'un chambre dans sa maison</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38507">4-juin</td>
      <td >Robin</td>
      <td >2E1110-130</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >CHAUVET Marie</td>
      <td  align=right x:num>956</td>
      <td >JOUANNET - Jean ROUFFIGNAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1765</td>
      <td  align=right
  x:num="38210">11-ao&ucirct</td>
      <td >Caillaud</td>
      <td >2E282-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >CHAUVET Michel</td>
      <td  align=right x:num>755</td>
      <td >Marie PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1768</td>
      <td  align=right
  x:num="38042">25-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E287-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >CHAUVET Michel</td>
      <td  align=right x:num>751</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38825">18-avr</td>
      <td >Rouhier</td>
      <td >2E1136-50</td>
      <td >Lhoumeau</td>
      <td >Titre</td>
      <td >CHAUVET Nicolas</td>
      <td  align=right x:num>911</td>
      <td >&agrave Antoine DEBUSSAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38362">10-janv</td>
      <td >Porcheron</td>
      <td >2E1087-150</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >CHAUVET Nicolas</td>
      <td  align=right x:num>840</td>
      <td >de Pierre BRUN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="38455">13-avr</td>
      <td >Deroullede</td>
      <td >2E453-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >CHAUVET Nicolas</td>
      <td  align=right x:num>769</td>
      <td >(J. BERNARD) M. DECLIDE - P. CHAUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1727</td>
      <td  align=right
  x:num="38506">3-juin</td>
      <td >J&eacuteheu</td>
      <td >2E836-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >CHAUVET Nicolas</td>
      <td  align=right x:num>714</td>
      <td >et Jeanne BERNARD de L&eacuteonard ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38773">25-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-190</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >CLERC Anne</td>
      <td  align=right x:num>966</td>
      <td >et Etienne TROUCHIERE (logement de militaires)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38893">25-juin</td>
      <td >Peuple</td>
      <td >2E1069-30</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >CLERC Anne</td>
      <td  align=right x:num>749</td>
      <td >Entre Jean et Michel PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39045">24-nov</td>
      <td >Clochard</td>
      <td >2E409-100</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >CONSTANTIN Jacquette</td>
      <td  align=right x:num>963</td>
      <td >Vve de Martin ROY pr maisons pr&egraves &eacutegl. de l'Houm.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39018">28-oct</td>
      <td >Robin</td>
      <td >2E1109-160</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >COUPEAU Gillibert</td>
      <td  align=right x:num>954</td>
      <td >et Marie LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38510">7-juin</td>
      <td >Peuple</td>
      <td >2E1065-30</td>
      <td >Angoul&ecircme</td>
      <td >Sous-ferme</td>
      <td >COUPEAU Gillibert</td>
      <td  align=right x:num>839</td>
      <td >de Antoinette GADORAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38814">7-avr</td>
      <td >Robin</td>
      <td >2E1111-220</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >COUPEAU Gillibert</td>
      <td  align=right x:num>962</td>
      <td >de Antoinette DADORAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38612">17-sept</td>
      <td >Peuple</td>
      <td >2E1067-10</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >COUPEAU Gillibert</td>
      <td  align=right x:num>840</td>
      <td >et Marie LIZEE de Guillaume BERTHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38926">28-juil</td>
      <td >Rouhier</td>
      <td >2E1125-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>937</td>
      <td >et Marguerite JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38950">21-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E937-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>778</td>
      <td >et Marg. JAYET, Suzanne et Fran&ccediloise JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38598">3-sept</td>
      <td >Manci&eacute</td>
      <td >2E938-200</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>777</td>
      <td >Marguerite JAYET - Daniel M. JEAN et M. CROIZET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38595">31-ao&ucirct</td>
      <td >Aigre</td>
      <td >2E107-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>842</td>
      <td >Fr. LIZEE, Simon COUPEAU,  Julienne COUPEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td  align=right
  x:num="38209">10-ao&ucirct</td>
      <td >J&eacuteheu</td>
      <td >2E819-10</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>708</td>
      <td >et Marguerite JAYET - Pierre CHAIGNEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38035">18-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E 820-10</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>746</td>
      <td 
  x:str="et Marg. JAYET - David de Boismourant ">et Marg. JAYET - David de Boismourant 
      </td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1724</td>
      <td  align=right
  x:num="37988">2-janv</td>
      <td >Manci&eacute</td>
      <td >2E954-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>590</td>
      <td >L&eacuteonard ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1727</td>
      <td  align=right
  x:num="38409">26-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E836-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >COUPEAU Jacques</td>
      <td  align=right x:num>714</td>
      <td >et Marg. JAYET &agrave Berthom&eacute DAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1764</td>
      <td  align=right
  x:num="38127">20-mai</td>
      <td >Caillaud</td>
      <td >2E280-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >DARS Barth&eacutel&eacutemy</td>
      <td  align=right x:num>755</td>
      <td >Suzanne ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1735</td>
      <td  align=right
  x:num="38390">7-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E960-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >DARS Jean</td>
      <td  align=right x:num>786</td>
      <td >Anne LIET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right
  x:num="38075">29-mars</td>
      <td >Caillaud</td>
      <td >2E236-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DARS Jean</td>
      <td  align=right x:num>566</td>
      <td >Cure St Paul</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38713">27-d&eacutec</td>
      <td >Marchadier</td>
      <td >2E969-20</td>
      <td >Angoul&ecircme</td>
      <td >Licitation</td>
      <td >DARS Jean</td>
      <td  align=right x:num>802</td>
      <td >Anne LIET/DECLIDE et Mag. DARS (+ don de Joseph)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td class=xl3515333 align=right
  x:num="38483">11-mai</td>
      <td >Manci&eacute</td>
      <td >2E961-70</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Jean</td>
      <td  align=right x:num>789</td>
      <td >et Anne LIET de Jean GIBERT et Marg. BRETON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38618">23-sept</td>
      <td >Manci&eacute</td>
      <td >2E962-40</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DARS Jean</td>
      <td  align=right x:num>791</td>
      <td >et Jean DECLIDE &agrave Mr. CHAUSSE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38584">20-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E962-60</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >DARS Jean</td>
      <td  align=right x:num>791</td>
      <td >de Jean DECLIDE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1745</td>
      <td  align=right x:num="38629">4-oct</td>
      <td >Manci&eacute</td>
      <td >2E963-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >DARS Jean</td>
      <td  align=right x:num>802</td>
      <td >et Anne LIET de Jean GIBERT et Marg. BRETON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38654">29-oct</td>
      <td >Caillaud</td>
      <td >2E261-40</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DARS Jean</td>
      <td  align=right x:num>865</td>
      <td >et Anne LIET et Jean GRELIER et Jeanne LIET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38922">24-juil</td>
      <td >Caillaud</td>
      <td >2E263-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >DARS Jean</td>
      <td  align=right x:num>873</td>
      <td >et Anne LIET de Joseph DUMONTET (rente)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1759</td>
      <td  align=right
  x:num="38674">18-nov</td>
      <td >Bernard</td>
      <td >2E174-50</td>
      <td >Angoul&ecircme</td>
      <td >D&eacuteclaration</td>
      <td >DARS Jean</td>
      <td  align=right x:num>788</td>
      <td >Pierre DARS, etc. (Jean GABORIT)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39520">13-mars</td>
      <td >Cladier</td>
      <td >2E362-10</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >DARS Jean l'ancien</td>
      <td  align=right x:num>1158</td>
      <td >(et Je. CHERBONNIER). Dem. Bourrabiers, Champniers</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39016">26-oct</td>
      <td >Clochard</td>
      <td >2E411-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >DARS Jean l'ancien</td>
      <td  align=right x:num>955</td>
      <td >et Louise GAILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td class=xl3515333 align=right
  x:num="38835">28-avr</td>
      <td >Clochard</td>
      <td >2E412-170</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >DARS Jean l'ancien</td>
      <td  align=right x:num>953</td>
      <td >de Jacq. GUYONNET. Maison aux Bouraliers, Champniers</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td class=xl3615333 align=right x:num="39024">3-nov</td>
      <td class=xl3715333>Desport</td>
      <td class=xl3815333>2E2128-50</td>
      <td class=xl3715333>Champniers</td>
      <td class=xl3715333>Vente</td>
      <td class=xl3715333>DARS Jean l'ancien</td>
      <td class=xl3715333 align=right x:num>1014</td>
      <td class=xl3715333>et Joseph DARS et E. CLEMENT &agrave L&eacuteonard GIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right x:num="38305">14-nov</td>
      <td >Boilevin</td>
      <td >2E203-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>755</td>
      <td >Marguerite ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38673">17-nov</td>
      <td >Chauvin</td>
      <td >2E321-210</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>801</td>
      <td >Marg. ROUFFIGNAC de Jean Jacques CHAUSSE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38691">5-d&eacutec</td>
      <td >Porcheron</td>
      <td >2E1089-170</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>837</td>
      <td >et Fran&ccedilois PRADEAU de Etienne HERBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38435">24-mars</td>
      <td >Porcheron</td>
      <td >2E1092-60</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>842</td>
      <td >et Marg. ROUFFIGNAC de Louise et Cath. BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38447">5-avr</td>
      <td >Porcheron</td>
      <td >2E1092-70</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>842</td>
      <td >et Marguerite ROUFFIGNAC de Louise BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38245">15-sept</td>
      <td >Boilevin</td>
      <td >2E206-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>576</td>
      <td >MESLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38137">30-mai</td>
      <td >Deroullede</td>
      <td >2E455-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>708</td>
      <td >Etienne RICHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38228">29-ao&ucirct</td>
      <td >Deroullede</td>
      <td >2E455-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>709</td>
      <td >Robert RICHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1724</td>
      <td  align=right
  x:num="38321">30-nov</td>
      <td >Manci&eacute</td>
      <td >2E954-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>590</td>
      <td >Jean AUDIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38555">22-juil</td>
      <td >J&eacuteheu</td>
      <td >2E834-60</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>788</td>
      <td >MALLAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1726</td>
      <td  align=right
  x:num="38261">1-oct</td>
      <td >J&eacuteheu</td>
      <td >2E835-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>572</td>
      <td >COLLAIN, ROUFFIGNAC, ...</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="38060">14-mars</td>
      <td >Manci&eacute</td>
      <td >2E956-40</td>
      <td >Angoul&ecircme</td>
      <td >Constitution</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>576</td>
      <td >Jean ROUFFIGNAC son beau-fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38080">3-avr</td>
      <td >J&eacuteheu</td>
      <td >2E838-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>573</td>
      <td >AUDIER, CHAUVET, ROUFF.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38060">14-mars</td>
      <td >Caillaud</td>
      <td >2E229-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>576</td>
      <td >ROUFFIGNAC, CHAUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38343">22-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E838-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>573</td>
      <td >ROUFFIGNAC, CHAUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right
  x:num="38259">29-sept</td>
      <td >Caillaud</td>
      <td >2E230-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>591</td>
      <td >Seigneur de Meumont</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1731</td>
      <td  align=right
  x:num="38057">11-mars</td>
      <td >Caillaud</td>
      <td >2E231-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>591</td>
      <td >Antoine AUDIER, MASSON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1732</td>
      <td  align=right
  x:num="38302">11-nov</td>
      <td >Caillaud</td>
      <td >2E232-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>709</td>
      <td >Pierre CHAUVET, ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38384">1-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E842-10</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelib&eacuteration</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>776</td>
      <td >Paroissiens de Saint Martial (si&egraveges de l'&eacuteglise)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38028">11-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E234-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>554</td>
      <td >Seigneur du Maine Gagnaud</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td class=xl2415333 align=right x:num="38316">25-nov</td>
      <td >Caillaud</td>
      <td >2E236-50</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>566</td>
      <td >NALBERT, ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right x:num="38274">14-oct</td>
      <td >Caillaud</td>
      <td >2E236-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>566</td>
      <td >Magdelaine ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right
  x:num="38080">3-avr</td>
      <td >Caillaud</td>
      <td >2E236-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>566</td>
      <td >ROUFFIGNAC, ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38302">11-nov</td>
      <td >Caillaud</td>
      <td >2E237-40</td>
      <td >Angoul&ecircme</td>
      <td >Rente, Quittance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>730</td>
      <td >Magdelaine ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38372">20-janv</td>
      <td >Manci&eacute</td>
      <td >2E961-10</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>789</td>
      <td >Marg. ROUFFIGNAC &agrave Cyb. CAILLAUD et J. DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right
  x:num="38353">1-janv</td>
      <td >Caillaud</td>
      <td >2E238-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>763</td>
      <td >Damien DURET et Marie TEXIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right
  x:num="38442">31-mars</td>
      <td >Caillaud</td>
      <td >2E238-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>763</td>
      <td >Jean GIBERT et Marguerite BRETON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right
  x:num="38714">28-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E238-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>763</td>
      <td >ROUFFIGNAC - NALBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38516">13-juin</td>
      <td >Marchadier</td>
      <td >2E970-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>762</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38451">9-avr</td>
      <td >Marchadier</td>
      <td >2E970-10</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >DARS Joseph</td>
      <td  align=right x:num>762</td>
      <td >Jean ROUFFIGNAC charpentier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38735">18-janv</td>
      <td >Pillorget</td>
      <td >2E2162-10</td>
      <td >Champniers</td>
      <td >Echange</td>
      <td >DARS Nicolas</td>
      <td  align=right x:num>1021</td>
      <td >et Jean PREURRAUD et Marguerite DAUGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38820">13-avr</td>
      <td >Pillorget</td>
      <td >2E2164-10</td>
      <td >Champniers</td>
      <td >Association</td>
      <td >DARS Nicolas</td>
      <td  align=right x:num>1023</td>
      <td >et Antoine DARS son fils avec Pierre DUMOUSSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38920">22-juil</td>
      <td >Pillorget</td>
      <td >2E2165-20</td>
      <td >Champniers</td>
      <td >Partage</td>
      <td >DARS Nicolas</td>
      <td  align=right x:num>1024</td>
      <td >et Antoine, Joseph, Jean et Marie ses enfants</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td class=xl3315333 align=right x:num="39972">8-juin</td>
      <td >Audouin</td>
      <td >2E118-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >DAVID Jean</td>
      <td  align=right x:num>1334</td>
      <td >et Antoinette PEYRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right x:num="38968">8-sept</td>
      <td >Rouhier</td>
      <td >2E1129-40</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >DAVID Jean</td>
      <td  align=right x:num>921</td>
      <td >et Antoinette PERAUD, et Jean GUIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38119">12-mai</td>
      <td >Porcheron</td>
      <td >2E1086-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >DAVID Jean</td>
      <td  align=right x:num>746</td>
      <td >Antoinette PEYRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right
  x:num="38603">8-sept</td>
      <td >Caillaud</td>
      <td >2E238-30</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >DAVID Jeanne</td>
      <td  align=right x:num>763</td>
      <td >Veuve Jean PAPIN - BERTRAND et RINGUET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38508">5-juin</td>
      <td >Caillaud</td>
      <td >2E240-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >DAVID Jeanne</td>
      <td  align=right x:num>768</td>
      <td >Claude BOUCHAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38660">4-nov</td>
      <td >Caillaud</td>
      <td >2E241-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DAVID Jeanne</td>
      <td  align=right x:num>760</td>
      <td >Jean PAPIN, BOUCHAUD &agrave GILBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38535">2-juil</td>
      <td >Caillaud</td>
      <td >2E246-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >DAVID Jeanne</td>
      <td  align=right x:num>770</td>
      <td >Veuve de Jean PAPIN - Pierre BERTRAND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38641">16-oct</td>
      <td >Caillaud</td>
      <td >2E246-40</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >DAVID Jeanne</td>
      <td  align=right x:num>770</td>
      <td >Veuve de Jean PAPIN (pr&eacutesence de Jean DARS)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="39277">14-juil</td>
      <td >Pillorget</td>
      <td >2E2171-10</td>
      <td >Champniers</td>
      <td >Cession</td>
      <td >DELAURIERE Jacques</td>
      <td  align=right x:num>1038</td>
      <td >de Jacques DELAURIERE l'a&icircn&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right
  x:num="38489">17-mai</td>
      <td >Porcheron</td>
      <td >2E1085-40</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >DELAURIERE Jacques</td>
      <td  align=right x:num>778</td>
      <td >Catherine  MARTIN - Jean ROUSSELOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1723</td>
      <td  align=right
  x:num="38228">29-ao&ucirct</td>
      <td >Lalande</td>
      <td >2E4959-20</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >DELAURIERE Jean</td>
      <td  align=right x:num>746</td>
      <td >Elizabeth ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1752</td>
      <td  align=right
  x:num="38838">1-mai</td>
      <td >Caillaud</td>
      <td >2E256-30</td>
      <td >Angoul&ecircme</td>
      <td >Titre cl&eacuterical</td>
      <td >DELAURIERE Jean</td>
      <td  align=right x:num>789</td>
      <td >Et Elisabeth ROUHIER pour L&eacuteonard DELAURIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39477">30-janv</td>
      <td >Juilhard</td>
      <td >2E861-10</td>
      <td >Angoul&ecircme</td>
      <td >Rôle</td>
      <td >DENEUVILLE Fran&ccediloise</td>
      <td  align=right x:num>1138</td>
      <td >Rôle de Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39775">23-nov</td>
      <td >Juilhard</td>
      <td >2E861-50</td>
      <td >Angoul&ecircme</td>
      <td >Rôle</td>
      <td >DENEUVILLE Fran&ccediloise</td>
      <td  align=right x:num>1138</td>
      <td >Rôle de Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td class=xl3315333 align=right x:num="39835">22-janv</td>
      <td >Audouin</td>
      <td >2E118-20</td>
      <td >Angoul&ecircme</td>
      <td >R&eacutevision</td>
      <td >DUPONT Jeanne</td>
      <td  align=right x:num>1334</td>
      <td >et Ant. BRISSEAU et Jeanne MARTIN (fille de Jeanne DUPONT)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right x:num="38585">21-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E937-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >DUPUY Helie</td>
      <td  align=right x:num>778</td>
      <td >Jacques COUPEAU et Marguerite JAYET . . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38300">9-nov</td>
      <td >Manci&eacute</td>
      <td >2E942-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>713</td>
      <td >Madeleine TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38086">9-avr</td>
      <td >Manci&eacute</td>
      <td >2E942-60</td>
      <td >Angoul&ecircme</td>
      <td >Association</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>714</td>
      <td >Etien. PINASSEAU (maison a cost&eacute sous un rocher...)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38266">6-oct</td>
      <td >J&eacuteheu</td>
      <td >2E819-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>708</td>
      <td >Irvoix</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38067">21-mars</td>
      <td >J&eacuteheu</td>
      <td >2E 820-20</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>746</td>
      <td >et Magdelaine TOURNIER - David de Boismourant</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1713</td>
      <td  align=right
  x:num="38017">31-janv</td>
      <td >J&eacuteheu</td>
      <td >2E822-10</td>
      <td >Angoul&ecircme</td>
      <td >Bail et Vente</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>746</td>
      <td >Madeleine TOURNIER, IRVOIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38119">12-mai</td>
      <td >Manci&eacute</td>
      <td >2E945-20</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>733</td>
      <td >BLANCHET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38164">26-juin</td>
      <td >Manci&eacute</td>
      <td >2E946-50</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>739</td>
      <td >Et Magdelaine TOURNIER - Robert RICHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1723</td>
      <td  align=right
  x:num="38185">17-juil</td>
      <td >Manci&eacute</td>
      <td >2E953-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>745</td>
      <td >Et Barth. DAUVEAU - Marguerite CROIZET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="37999">13-janv</td>
      <td >Manci&eacute</td>
      <td >2E956-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>576</td>
      <td >Et Magdelaine TOURNIER - ALLARY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right
  x:num="39749">28-oct</td>
      <td >Porcheron</td>
      <td >2E1094-20</td>
      <td >Angoul&ecircme</td>
      <td >Cheptel</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>1115</td>
      <td >et Mad. TOURNIER de Jean JANDRON de Beaupuy</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38099">22-avr</td>
      <td >Caillaud</td>
      <td >2E233-20</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>709</td>
      <td >RONDAILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38350">29-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E237-60</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>730</td>
      <td >VIGIER de LA PILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38350">29-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E237-70</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>730</td>
      <td >CHERADE, GABORIT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38696">10-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E961-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>789</td>
      <td >Mad. TOURNIER de Fran. CHERADE et M. GABORIT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38510">7-juin</td>
      <td >Caillaud</td>
      <td >2E240-20</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>768</td>
      <td >Jean GUYONNET et Marie TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38663">7-nov</td>
      <td >Caillaud</td>
      <td >2E241-30</td>
      <td >Angoul&ecircme</td>
      <td >Consentement</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>760</td>
      <td >Mad. TOURNIER, Jean BOISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38664">8-nov</td>
      <td >Caillaud</td>
      <td >2E241-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>760</td>
      <td >Mad. TOURNIER, Pierre FAUCONNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38504">1-juin</td>
      <td >Caillaud</td>
      <td >2E245-30</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>760</td>
      <td >Magd. TOURNIER - MESNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1747</td>
      <td  align=right
  x:num="38376">24-janv</td>
      <td >Caillaud</td>
      <td >2E247-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>776</td>
      <td >Jean GUIONNET et Marie TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38575">11-ao&ucirct</td>
      <td >Caillaud</td>
      <td >2E249-40</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>776</td>
      <td >RONDAILH</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38518">15-juin</td>
      <td >Caillaud</td>
      <td >2E249-30</td>
      <td >Angoul&ecircme</td>
      <td >Acte obligatoire</td>
      <td >GABORIT Jean</td>
      <td  align=right x:num>776</td>
      <td >Marie GABORIT et Jean TROUFFIER - MESNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38762">14-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1137-20</td>
      <td >Lhoumeau</td>
      <td >Accord</td>
      <td >GABORIT Jeanne</td>
      <td  align=right x:num>911</td>
      <td >Vve de L&eacuteonard AUBOIN, Cl. TULLIER et C. AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39456">9-janv</td>
      <td >Guyot</td>
      <td >2E781-30</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >GAILLARD Jean</td>
      <td  align=right x:num>1174</td>
      <td >et Jeanne DURANDEAU &agrave Jacq. DESFORGES vve Denis LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38863">26-mai</td>
      <td >Clochard</td>
      <td >2E413-100</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >GAILLARD Louise</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38892">24-juin</td>
      <td >Clochard</td>
      <td >2E413-110</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >GAILLARD Louise</td>
      <td  align=right x:num>953</td>
      <td >avec Jean CHERBONNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td class=xl3315333 align=right x:num="39859">15-f&eacutevr</td>
      <td >Desport</td>
      <td >2E2130-20</td>
      <td >Champniers</td>
      <td >Transport</td>
      <td >GAILLARD Louise</td>
      <td  align=right x:num>1430</td>
      <td >au sr. de Puyrobert (terres)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1768</td>
      <td  align=right x:num="38161">23-juin</td>
      <td >Caillaud</td>
      <td >2E287-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >GENAUD Jean</td>
      <td  align=right x:num>751</td>
      <td >Catherine TUILLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td class=xl3315333 align=right x:num="40315">17-mai</td>
      <td >Mallet</td>
      <td >2E6050-30</td>
      <td >Xambes</td>
      <td >Mariage</td>
      <td >GOBELET Joseph</td>
      <td  align=right x:num>1490</td>
      <td >et Anne BALLOTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right x:num="39597">29-mai</td>
      <td >Daniaud</td>
      <td >2E5922-20</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >GONTIER Fran&ccedilois</td>
      <td  align=right x:num>1170</td>
      <td >et Fran&ccedilois BOUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39611">12-juin</td>
      <td >Daniaud</td>
      <td >2E5923-170</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >GONTIER Fran&ccedilois</td>
      <td  align=right x:num>1170</td>
      <td >et Marie BERNARD avec les fr&egraveres GESTREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39603">4-juin</td>
      <td >Daniaud</td>
      <td >2E5923-160</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >GONTIER Fran&ccedilois</td>
      <td  align=right x:num>1170</td>
      <td >et Marie BERNARD avec Fran&ccedilois BOUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39487">9-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5923-140</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >GONTIER Fran&ccedilois</td>
      <td  align=right x:num>1170</td>
      <td >et Jean BECHET: pi&egraveces de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39493">15-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5926-20</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >GONTIER Fran&ccedilois</td>
      <td  align=right x:num>1168</td>
      <td >une pi&egravece de terre de Fran&ccedilois MARTINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39616">17-juin</td>
      <td >Daniaud</td>
      <td >2E5927-160</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >GONTIER Fran&ccedilois</td>
      <td  align=right x:num>1169</td>
      <td >une pi&egravece de terre &agrave Mathieu BAILLIF</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38873">5-juin</td>
      <td >Renon</td>
      <td >2E2940-50</td>
      <td >Garat</td>
      <td >Vente</td>
      <td >GRELET Fran&ccediloise</td>
      <td  align=right x:num>972</td>
      <td >Veuve de Paul BIARD de Georges FAURE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1749</td>
      <td  align=right
  x:num="39660">31-juil</td>
      <td >&nbsp;</td>
      <td >NÝ71</td>
      <td >Saint-Omer</td>
      <td >Mariage</td>
      <td >HOUCHART Jacques Et.</td>
      <td >&nbsp;</td>
      <td >et Ang&eacutelique Aldegonde POCHEZ</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38511">8-juin</td>
      <td >Chauvin</td>
      <td >2E321-190</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >IMBERT Marie</td>
      <td  align=right x:num>801</td>
      <td >Jean SIRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38441">30-mars</td>
      <td >Rouhier</td>
      <td >2E1142-10</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >IMBERT Marie</td>
      <td  align=right x:num>763</td>
      <td >Fran&ccedilois, Pierre, Louise IMBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38585">21-ao&ucirct</td>
      <td >J&eacuteheu</td>
      <td >2E826-10</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >IMBERT Marie</td>
      <td  align=right x:num>783</td>
      <td >Pierre IMBERT et L&eacuteonard JULLIEN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="39040">19-nov</td>
      <td >J&eacuteheu</td>
      <td >2E828-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >IMBERT Marie</td>
      <td  align=right x:num>885</td>
      <td >et Pierre IMBERT et JULLIEN &agrave ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1732</td>
      <td  align=right
  x:num="38273">13-oct</td>
      <td >Caillaud</td>
      <td >2E232-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >IMBERT Marie</td>
      <td  align=right x:num>709</td>
      <td >Michel JOUANNET, Marguerite BRISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1646</td>
      <td  align=right
  x:num="38882">14-juin</td>
      <td >Rouhier</td>
      <td >2E1119-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >IMBERT Pierre</td>
      <td  align=right x:num>946</td>
      <td >et Jeanne ROUSSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td class=xl3515333 align=right
  x:num="38817">10-avr</td>
      <td >Couppeau</td>
      <td >2E424-10</td>
      <td >St Cybard</td>
      <td >Acquisition</td>
      <td >IMBERT Pierre</td>
      <td  align=right x:num>942</td>
      <td >et Jeanne ROUSSEAU de Fran&ccedilois IMBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38706">20-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E938-220</td>
      <td >Angoul&ecircme</td>
      <td >Promesse</td>
      <td >IMBERT Pierre</td>
      <td  align=right x:num>777</td>
      <td >J. ROUSSAUD - Tous. BRISSEAU et Marie IMBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39459">12-janv</td>
      <td >Daniaud</td>
      <td >2E5928-110</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1168</td>
      <td >de Pierre BOUNY notaire (annul&eacute)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39695">4-sept</td>
      <td >Daniaud</td>
      <td >2E5935-230</td>
      <td >Vaux-Rouillac</td>
      <td >Proc&egraves verbal</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1167</td>
      <td >et Marie GUILLOT sa m&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38849">12-mai</td>
      <td >Izambard</td>
      <td >2E2802-140</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1020</td>
      <td >et Jeanne PELEGAY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38738">21-janv</td>
      <td >Izambard</td>
      <td >2E2802-150</td>
      <td >Echallat</td>
      <td >Inventaire</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1020</td>
      <td >et Jeanne PELEGAY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="39018">28-oct</td>
      <td >Izambard</td>
      <td >2E2802-240</td>
      <td >Echallat</td>
      <td >Transaction</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1020</td>
      <td >et Berthom&eacute son fr&egravere avec Jean MESNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1695</td>
      <td class=xl3515333 align=right x:num="39904">01-avr</td>
      <td >Daniaud</td>
      <td >2E5940-30</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1441</td>
      <td >et Jean DUBOIS (avec jument pleine de baudet)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td class=xl3515333 align=right x:num="39846">02-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5941-10</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1441</td>
      <td >de Guillaume IZAMBARD (pi&egravece de vigne)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td class=xl3515333 align=right x:num="40099">13-oct</td>
      <td >Daniaud</td>
      <td >2E5941-20</td>
      <td >Vaux-Rouillac</td>
      <td >Election</td>
      <td >IZAMBARD Louis</td>
      <td  align=right x:num>1441</td>
      <td >Collecteur d'Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38940">11-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E946-60</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >JAYET Antoine</td>
      <td  align=right x:num>739</td>
      <td >Et M. TOURNIER (Fcs TOURNIER et M. CHESNAUD)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="37994">8-janv</td>
      <td >Manci&eacute</td>
      <td >2E955-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >JAYET Antoine</td>
      <td  align=right x:num>591</td>
      <td >et Marie TOURNIER &agrave GOUGNET-TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38039">22-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E955-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >JAYET Antoine</td>
      <td  align=right x:num>591</td>
      <td >de GOUGNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="38339">18-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E956-50</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >JAYET Antoine</td>
      <td  align=right x:num>576</td>
      <td >et Marie TOURNIER &agrave TOURNIER-COQUIAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38550">17-juil</td>
      <td >Caillaud</td>
      <td >2E255-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >JAYET Antoine</td>
      <td  align=right x:num>787</td>
      <td >et Marguerite JOUANNET, &agrave Jean JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38658">2-nov</td>
      <td >Peuple</td>
      <td >2E1061-120</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >JAYET Berthom&eacute A&icircn&eacute</td>
      <td  align=right x:num>860</td>
      <td >et H&eacutelie DUPUY de Jean BIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38863">26-mai</td>
      <td >Peynaud</td>
      <td >2E2766-20</td>
      <td >Dirac</td>
      <td >M&eacutetairie</td>
      <td >JAYET Berthom&eacute A&icircn&eacute</td>
      <td  align=right x:num>874</td>
      <td >et H&eacutelie DUPUY de Jehan MOURIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38900">2-juil</td>
      <td >Boutillier</td>
      <td >2E226-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >JAYET Berthom&eacute A&icircn&eacute</td>
      <td  align=right x:num>966</td>
      <td >et Magdelaine GUILLAUME</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39007">17-oct</td>
      <td >Micheau</td>
      <td >2E1028-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >JAYET Berthom&eacute A&icircn&eacute</td>
      <td  align=right x:num>1028</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39795">13-d&eacutec</td>
      <td >Cladier Jos.</td>
      <td >2E355-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>1124</td>
      <td >quittance &agrave Pierre RIFFAUD et Jeanne JAYET (tx maison)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38596">1-sept</td>
      <td >Chauvin</td>
      <td >2E309-80</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves verbal</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>822</td>
      <td >et ses s&oeligurs et P. RIFFAUD (Berthom&eacute au couvent)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38826">19-avr</td>
      <td >Clochard</td>
      <td >2E412-120</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>953</td>
      <td >avec ses s&oeligurs &agrave Michel SALESSE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td class=xl3515333 align=right
  x:num="38469">27-avr</td>
      <td >Chauvin</td>
      <td >2E312-10</td>
      <td >Lhoumeau</td>
      <td >Location</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>783</td>
      <td >d'Antoine ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38883">15-juin</td>
      <td >Clochard</td>
      <td >2E412-160</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>954</td>
      <td >et ses s&oeligurs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39619">20-juin</td>
      <td >Cladier</td>
      <td >2E368-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>1162</td>
      <td >et Magdelaine GUILLAUME</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td class=xl3515333 align=right
  x:num="38362">10-janv</td>
      <td >Chauvin</td>
      <td >2E314-120</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>785</td>
      <td >L&eacuteonard PIGERAUD et Pierre LIGNARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td class=xl3515333 align=right
  x:num="38620">25-sept</td>
      <td >Chauvin</td>
      <td >2E315-200</td>
      <td >L'houmeau</td>
      <td >D&eacuteguerpissement</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>787</td>
      <td >de Jean THOMAS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td class=xl3515333 align=right
  x:num="38603">08-sept</td>
      <td >Chauvin</td>
      <td >2E321-200</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>801</td>
      <td >&agrave Antoine SEBILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38574">10-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1090-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >JAYET Berthom&eacute Jeune</td>
      <td  align=right x:num>838</td>
      <td >et Magd. GUILLAUME &agrave Anne BOUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="39942">9-mai</td>
      <td >Rouhier</td>
      <td >2E1117-30</td>
      <td >L'houmeau</td>
      <td >March&eacute</td>
      <td >JAYET Jean</td>
      <td  align=right x:num>1281</td>
      <td >et Marguerite MAUBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39616">17-juin</td>
      <td >Cladier Jos.</td>
      <td >2E355-20</td>
      <td >Angoul&ecircme</td>
      <td >PV et inventaire</td>
      <td >JAYET Jean</td>
      <td  align=right x:num>1124</td>
      <td >et Margte MAUBERT suite d&eacutec&egraves. Fait par RIFFAUD gend.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="38747">30-janv</td>
      <td >Rouhier</td>
      <td >2E1119-30</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>946</td>
      <td >de J. FESTIS (et la m&egravere d'Arnaud: Marie CHAUVET)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="38532">29-juin</td>
      <td >Vachier</td>
      <td >2E1280-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>785</td>
      <td >Catherine ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39040">19-nov</td>
      <td >Boutillier</td>
      <td >2E225-30</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>969</td>
      <td >de Fran&ccediloise RAMBAUD (d'une maison)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38796">20-mars</td>
      <td >Clochard</td>
      <td >2E408-10</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>965</td>
      <td >et Pasquette JOUANNET (et Marie CHAUVET)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39034">13-nov</td>
      <td >Clochard</td>
      <td >2E408-60</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>968</td>
      <td >et Pasquette JOUANNET sa s&oeligur &agrave Fr&ccedils. BECHET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38520">17-juin</td>
      <td >Chauvin</td>
      <td >2E307-30</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>802</td>
      <td >Andr&eacute BRISSON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38560">27-juil</td>
      <td >Chauvin</td>
      <td >2E307-40</td>
      <td >Lhoumeau</td>
      <td >Accord</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>802</td>
      <td >Anthoine ROY (t&eacutemoin Jean JOUANNET fils d'Arnaud)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38948">19-ao&ucirct</td>
      <td >Clochard</td>
      <td >2E409-190</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>963</td>
      <td >du m&eacutetier de cordonnier pour son fils Martin</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38467">25-avr</td>
      <td >Manci&eacute</td>
      <td >2E933-150</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>861</td>
      <td >et Jean ROULLET &agrave Georges BOYTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38978">18-sept</td>
      <td >Chauvin</td>
      <td >2E307-50</td>
      <td >Lhoumeau</td>
      <td >Acte</td>
      <td >JOUANNET Arnaud</td>
      <td  align=right x:num>802</td>
      <td >Mery CHABOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38713">27-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E310-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >JOUANNET Jean</td>
      <td  align=right x:num>815</td>
      <td >et Marguerite AUBIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38503">31-mai</td>
      <td >Chauvin</td>
      <td >2E316-190</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >JOUANNET Jean</td>
      <td  align=right x:num>811</td>
      <td >et autres JOUANNET &agrave Jean ROUSSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38549">16-juil</td>
      <td >Chauvin</td>
      <td >2E317-130</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >JOUANNET Jean</td>
      <td  align=right x:num>812</td>
      <td >aux dames MONIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38412">1-mars</td>
      <td >Chauvin</td>
      <td >2E318-140</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves verbal</td>
      <td >JOUANNET Jean</td>
      <td  align=right x:num>812</td>
      <td >Fromages en mauvais &eacutetat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38588">24-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E318-190</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >JOUANNET Jean</td>
      <td  align=right x:num>812</td>
      <td >Menaud ROY et autres JOUANNET &agrave Jean FESTIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38472">30-avr</td>
      <td >Rouhier</td>
      <td >2E1138-10</td>
      <td >L'houmeau</td>
      <td >Acquisition</td>
      <td >JOUANNET Jean</td>
      <td  align=right x:num>787</td>
      <td >et Marguerite AUBIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38626">1-oct</td>
      <td >J&eacuteheu</td>
      <td >2E823-50</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>780</td>
      <td >Suite d&eacutec&egraves de Catherine ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38180">12-juil</td>
      <td >J&eacuteheu</td>
      <td >2E825-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>710</td>
      <td >Marguerite BRISSAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="39065">14-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E829-60</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>885</td>
      <td >et Michel JOUANNET et les  COMBRET, Menaud ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td class=xl3515333 align=right
  x:num="38498">26-mai</td>
      <td >J&eacuteheu</td>
      <td >2E834-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>788</td>
      <td >Louis JOUANNET (son fr&egravere) et Catherine ROBINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38001">15-janv</td>
      <td >Caillaud</td>
      <td >2E237-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>730</td>
      <td >TARDAT-LAMOUREUX-ROBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1744</td>
      <td  align=right
  x:num="38328">7-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E243-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>560</td>
      <td >Pierre JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1745</td>
      <td  align=right
  x:num="38118">11-mai</td>
      <td >Caillaud</td>
      <td >2E244-10</td>
      <td >Angoul&ecircme</td>
      <td >Ratification</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>713</td>
      <td >Pierre JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38550">17-juil</td>
      <td >Caillaud</td>
      <td >2E255-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>787</td>
      <td >apr&egraves d&eacutec&egraves Marguerite BRISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1753</td>
      <td  align=right
  x:num="38437">26-mars</td>
      <td >Caillaud</td>
      <td >2E258-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>816</td>
      <td >&agrave Antoine JAYET et Marguerite JOUANNET (sa fille)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38504">1-juin</td>
      <td >Caillaud</td>
      <td >2E262-50</td>
      <td >Angoul&ecircme</td>
      <td >Abandon</td>
      <td >JOUANNET Michel</td>
      <td  align=right x:num>868</td>
      <td >&agrave ses enfants (Ant. JAYET et Marguerite JOUANNET)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38403">20-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E937-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>778</td>
      <td >Etienne JEAN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38439">28-mars</td>
      <td >Peynaud fils</td>
      <td >2E2770-30</td>
      <td >Dirac</td>
      <td >Proc&egraves verbal</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>869</td>
      <td >et Etien. JEAN et Perrine LAMOUR et J. BRUNELIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38078">1-avr</td>
      <td >Manci&eacute</td>
      <td >2E943-10</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>721</td>
      <td >J. GABORIT et M.TOURNIER (s&eacutepar. Anne et E. JEAN)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38534">1-juil</td>
      <td >Rouhier</td>
      <td >2E1144-30</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>775</td>
      <td >Etienne JEAN - Jean THOUARD et Marie LISEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38165">27-juin</td>
      <td >Manci&eacute</td>
      <td >2E945-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>733</td>
      <td >ET Etienne JEAN &agrave Robert RICHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38617">22-sept</td>
      <td >Porcheron</td>
      <td >2E1091-60</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>841</td>
      <td >et Etienne JEAN &agrave Robert RICHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1726</td>
      <td  align=right
  x:num="38170">2-juil</td>
      <td >J&eacuteheu</td>
      <td >2E835-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >LAMOUR Anne</td>
      <td  align=right x:num>573</td>
      <td >De Jean GABORIT et Magdelaine TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl3915333 align=right x:num>1661</td>
      <td class=xl2415333 align=right x:num="39818">5-janv</td>
      <td >Huguet Jean</td>
      <td >2E793-300</td>
      <td >Angoul&ecircme</td>
      <td >Rôle</td>
      <td >LAMOUR M&eacutery</td>
      <td  align=right x:num>1203</td>
      <td class=xl4015333>Rôle de Sers</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right x:num="39672">12-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E306-30</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >LAMOUR M&eacutery</td>
      <td  align=right x:num>1124</td>
      <td >de bois &agrave Robert Richon ma&icirctre tonnelier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Clochard</td>
      <td >2E412-150</td>
      <td >Lhoumeau</td>
      <td >D&eacuteclaration</td>
      <td >LASLIER Colette</td>
      <td  align=right x:num>954</td>
      <td >et Berthom&eacute JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38700">14-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E959-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >LIET Anne</td>
      <td  align=right x:num>785</td>
      <td >Jean DOYEN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td class=xl3315333 align=right x:num="40307">9-mai</td>
      <td >Pechillon</td>
      <td >2E2621-50</td>
      <td >La Couronne</td>
      <td >Accord</td>
      <td >LIET Fran&ccedilois</td>
      <td  align=right x:num>1501</td>
      <td >et Hilaire LIET son fr&egravere (m&eacutetairie par moiti&eacute)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right x:num="38202">3-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1086-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >LIET Jean</td>
      <td  align=right x:num>746</td>
      <td >Catherine TATAINE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td  align=right
  x:num="38274">14-oct</td>
      <td >Manci&eacute</td>
      <td >2E942-40</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >LIET Jean</td>
      <td  align=right x:num>713</td>
      <td >et Catherine TATAINE, Jacques PORCHERON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td class=xl3515333 align=right
  x:num="38436">25-mars</td>
      <td >Meslier</td>
      <td >2E2587-50</td>
      <td >La Couronne</td>
      <td >R&eacutetrocession</td>
      <td >LIET Jean</td>
      <td  align=right x:num>825</td>
      <td >de Jacques BARRE &agrave Fran&ccedilois FALIGON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38436">25-mars</td>
      <td >Rouhier</td>
      <td >2E1144-10</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >LIET Jean</td>
      <td  align=right x:num>775</td>
      <td >Fran&ccedilois FALIGON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="38136">29-mai</td>
      <td >Manci&eacute</td>
      <td >2E948-10</td>
      <td >Angoul&ecircme</td>
      <td >&nbsp;</td>
      <td >LIET Jean</td>
      <td  align=right x:num>741</td>
      <td >Nicolas ANDREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="38501">29-mai</td>
      <td >Manci&eacute</td>
      <td >2E948-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >LIET Jean</td>
      <td  align=right x:num>741</td>
      <td >Cath. TATAINE-Nic. ANDREAU et M. SEGUINAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38892">24-juin</td>
      <td >J&eacuteheu</td>
      <td >2E828-10</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >LIET Jean</td>
      <td  align=right x:num>885</td>
      <td >et Cat TATAINE &agrave P. MOUCHIERE et Eliz. GRELLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38047">1-mars</td>
      <td >J&eacuteheu</td>
      <td >2E831-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >LIET Jean</td>
      <td  align=right x:num>731</td>
      <td >COMBEAU, DOUILLON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38288">28-oct</td>
      <td >J&eacuteheu</td>
      <td >2E831-50</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >LIET Jean</td>
      <td  align=right x:num>731</td>
      <td >RP COMBEAU, Cure St Paul</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1745</td>
      <td  align=right
  x:num="38179">11-juil</td>
      <td >Caillaud</td>
      <td >2E244-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >LIET Jean</td>
      <td  align=right x:num>713</td>
      <td >Catherine TATAINE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38645">20-oct</td>
      <td >Caillaud</td>
      <td >2E246-60</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >LIET Jean</td>
      <td  align=right x:num>770</td>
      <td >Cath. TATESNE - Pierre PIMONT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="40019">25-juil</td>
      <td >Lacaton</td>
      <td >2E880-30</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>1208</td>
      <td >et Colette SURREAU de la bourderie de Simon PRENERAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39808">26-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1018-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>1124</td>
      <td >et Colette SURREAU &agrave leur fils Cl&eacutement</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38995">5-oct</td>
      <td >Gibaud</td>
      <td >2E669-10</td>
      <td >Angoul&ecircme</td>
      <td >Donnation</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>941</td>
      <td >et Collette SURREAU de Jean LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38932">3-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1109-150</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>954</td>
      <td >d'une pi&egravece de vigne &agrave Jean LIZEE l'a&icircn&eacute son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39474">27-janv</td>
      <td >Juilhard</td>
      <td >2E862-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>1136</td>
      <td >&agrave Cl&eacutement LIZEE son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38772">24-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1110-110</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>956</td>
      <td >et Col. SURREAU avec J. LIZEE et Marg. JOUBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38631">6-oct</td>
      <td >Manci&eacute</td>
      <td >2E933-100</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>861</td>
      <td >et Col. SURREAU et Ren&eacute CLERC et Phil. MOREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38502">30-mai</td>
      <td >Peuple</td>
      <td >2E1064-120</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>859</td>
      <td >et Colette SURREAU &agrave Jean LIZEE leur fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38480">8-mai</td>
      <td >Peuple</td>
      <td >2E1064-190</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>859</td>
      <td >et C. SURREAU &agrave L. ROUHIER et Jeanne LIZEE lr. fille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38355">3-janv</td>
      <td >Peuple</td>
      <td >2E1065-50</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >LIZEE Jean</td>
      <td  align=right x:num>839</td>
      <td >et Colette SURREAU &agrave Jean LIZEE leur fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td class=xl3515333 align=right
  x:num="39703">12-sept</td>
      <td >Guyot</td>
      <td >2E777-60</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >LIZEE Jehan</td>
      <td  align=right x:num>1156</td>
      <td >gabarier. De Ant. AUDOUIN et Cath. BOURDAGE sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38944">15-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1125-40</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >LIZEE Marie</td>
      <td  align=right x:num>938</td>
      <td >et Jean ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38956">27-ao&ucirct</td>
      <td >J&eacuteheu</td>
      <td >2E828-30</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >LURAT Catherine</td>
      <td  align=right x:num>885</td>
      <td >et JAUTEREAU et Damien DURET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38640">15-oct</td>
      <td >Caillaud</td>
      <td >2E241-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >LURAT Catherine</td>
      <td  align=right x:num>760</td>
      <td >ROUHIER, GRATEREAU, JOLLY, etc.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1747</td>
      <td  align=right
  x:num="38382">30-janv</td>
      <td >Caillaud</td>
      <td >2E247-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >LURAT Catherine</td>
      <td  align=right x:num>776</td>
      <td >Nicolas GRATEREAU et Marie SURRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38932">3-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1109-140</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>954</td>
      <td >et Fran&ccediloise CARRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38760">12-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-240</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>966</td>
      <td >avant mariage avec Catherine DEMARSAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38756">8-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-230</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>966</td>
      <td >et Catherine DEMARSAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38859">22-mai</td>
      <td >Clochard</td>
      <td >2E412-220</td>
      <td >Lhoumeau</td>
      <td >Acte</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>953</td>
      <td >et Cat DEMARSAT et P. CLEMENT et Cat DUPEUX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38751">3-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-250</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>966</td>
      <td >avec Pierre CLEMENT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38527">24-juin</td>
      <td >Manci&eacute</td>
      <td >2E935-20</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>779</td>
      <td >Jean CARRE et Marie DELACROIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38812">5-avr</td>
      <td >Clochard</td>
      <td >2E413-120</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >LURAT Jean</td>
      <td  align=right x:num>953</td>
      <td >et Jean LURAT son fils et Jean CARRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38188">20-juil</td>
      <td >Lalande</td>
      <td >2E4960-10</td>
      <td >Ruelle</td>
      <td >Transaction</td>
      <td >MARTIN Catherine</td>
      <td  align=right x:num>750</td>
      <td >Jean DELAURIERE son fils - Jacques GIBEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1726</td>
      <td  align=right
  x:num="38152">14-juin</td>
      <td >Lalande</td>
      <td >2E4960-30</td>
      <td >Ruelle</td>
      <td >Reconnaissance</td>
      <td >MARTIN Catherine</td>
      <td  align=right x:num>750</td>
      <td >Jean DELAURIERE son fils - Elisabeth ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td class=xl3315333 align=right x:num="40174">27-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5938-10</td>
      <td >Vaux-Rouillac</td>
      <td >Accord</td>
      <td >MARTIN Jean</td>
      <td  align=right x:num>1435</td>
      <td >et Michel BENESTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1695</td>
      <td class=xl3515333 align=right x:num="39878">06-mars</td>
      <td >Daniaud</td>
      <td >2E5940-20</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >MARTIN Jean</td>
      <td  align=right x:num>1441</td>
      <td >et Jean BENESTEAU fr&egravere de feu Michel</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td >&nbsp;</td>
      <td >Thuet</td>
      <td >2E2186-10</td>
      <td >Champniers</td>
      <td >Inventaire</td>
      <td >MARTIN Jeanne</td>
      <td  align=right x:num>1026</td>
      <td >veuve d'Antoine BRISSAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38832">25-avr</td>
      <td >Thuet</td>
      <td >2E2186-20</td>
      <td >Champniers</td>
      <td >Transaction</td>
      <td >MARTIN Jeanne</td>
      <td  align=right x:num>1026</td>
      <td >veuve d'Antoine BRISSAUD, et Michel DEMARSAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1750</td>
      <td  align=right
  x:num="38285">25-oct</td>
      <td >Caillaud</td>
      <td >2E253-10</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutemission</td>
      <td >MESNADEAU Marie</td>
      <td  align=right x:num>756</td>
      <td >BOUCHAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38712">26-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E933-200</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >MESNARD Jean</td>
      <td  align=right x:num>861</td>
      <td >et L&eacuteg&egravere FOUGEREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39023">2-nov</td>
      <td >Mamain</td>
      <td >2E931-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >MESNARD Jean</td>
      <td  align=right x:num>970</td>
      <td >et L&eacuteg&egravere FOUGEREAU &agrave Antoine BAUDOUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39909">6-avr</td>
      <td >Huguet Jean</td>
      <td >2E789-60</td>
      <td >Angoul&ecircme</td>
      <td >Acquisition</td>
      <td >MOQUET Jean</td>
      <td  align=right x:num>1195</td>
      <td >pour L&eacuteonard ROBIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39930">27-avr</td>
      <td >Huguet Jean</td>
      <td >2E789-70</td>
      <td >Angoul&ecircme</td>
      <td >Acquisition</td>
      <td >MOQUET Jean</td>
      <td  align=right x:num>1195</td>
      <td >pour Etienne BERNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38293">2-nov</td>
      <td >Manci&eacute</td>
      <td >2E940-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >MOQUET Jeanne</td>
      <td  align=right x:num>738</td>
      <td >Pierre ROUHIER, Marie AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td class=xl3515333 align=right
  x:num="38734">17-janv</td>
      <td >Rouhier</td>
      <td >2E1119-70</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >MOUCHIERE Lucresse</td>
      <td  align=right x:num>946</td>
      <td >et Pierre IMBERT et Jeanne ROUSSEAU et autres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1616</td>
      <td  align=right
  x:num="39841">28-janv</td>
      <td >Rouhier</td>
      <td >2E1115-40</td>
      <td >L'houmeau</td>
      <td >Quittance</td>
      <td >NESRAUD Catherine</td>
      <td  align=right x:num>1291</td>
      <td >&agrave Etienne BRISSON son gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39632">3-juil</td>
      <td >Huguet Jean</td>
      <td >2E786-20</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >NOBLESSE Marguerite</td>
      <td  align=right x:num>1194</td>
      <td >d'une pi&egravece de pr&eacute de Geoffroy ROUGIER (12 charrettes 
        de foin)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39450">3-janv</td>
      <td >Guyot</td>
      <td >2E779-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >NOBLESSE Marguerite</td>
      <td  align=right x:num>1158</td>
      <td >et Jean DE CONDE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38583">19-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1064-220</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >PANISSEAU Jeanne</td>
      <td  align=right x:num>859</td>
      <td >et Jean BONNORON T et Antoinette SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38340">19-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E942-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>713</td>
      <td >Jeanne DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38320">29-nov</td>
      <td >Porcheron</td>
      <td >2E1088-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>748</td>
      <td >Par Suzanne JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38012">26-janv</td>
      <td >Manci&eacute</td>
      <td >2E951-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>744</td>
      <td >Jean DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38285">25-oct</td>
      <td >Manci&eacute</td>
      <td >2E951-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>744</td>
      <td >et Jeanne DAVID - Jean COCUAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38294">3-nov</td>
      <td >Manci&eacute</td>
      <td >2E951-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>744</td>
      <td >Jean CLOCHARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1723</td>
      <td  align=right
  x:num="38290">30-oct</td>
      <td >Manci&eacute</td>
      <td >2E953-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>745</td>
      <td >et Jeanne DAVID, Pierre LIZEE et Marie DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1723</td>
      <td  align=right
  x:num="38326">5-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E953-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>745</td>
      <td >par Jean BERNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1723</td>
      <td  align=right
  x:num="38327">6-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E953-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>745</td>
      <td >Jeanne THENET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right
  x:num="39739">18-oct</td>
      <td >Porcheron</td>
      <td >2E1094-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>1115</td>
      <td 
  x:str="et Jeanne DAVID de BRETONs  (dot Louise PAPIN) ">et Jeanne DAVID de BRETONs  
        (dot Louise PAPIN) </td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1731</td>
      <td  align=right
  x:num="38125">18-mai</td>
      <td >Caillaud</td>
      <td >2E231-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>591</td>
      <td >Jeanne DAVID,  Bertrand MORILLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38390">7-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E959-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>785</td>
      <td >Jeanne DAVID - Aubin DURAND et Marie DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38693">7-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E249-60</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>776</td>
      <td >Marie BOUCHAUD - Claude SEGUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1749</td>
      <td  align=right
  x:num="38354">2-janv</td>
      <td >Caillaud</td>
      <td >2E249-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>778</td>
      <td >BOUCHAUD, BRETON, Guillaume PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td class=xl3515333 align=right
  x:num="38407">24-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E260-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>863</td>
      <td >et Marie BOUCHAUD, et autres BOUCHAUD. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38163">25-juin</td>
      <td >Peuple</td>
      <td >2E1069-30</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>749</td>
      <td >Anne CLAIR, Jean PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38411">28-f&eacutevr</td>
      <td >Peynaud</td>
      <td >2E1071-50</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>782</td>
      <td >Antoine DURAND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38474">2-mai</td>
      <td >Peynaud</td>
      <td >2E1072-10</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>789</td>
      <td >et Jean PAPIN (apr&egraves d&eacutec&egraves Anne CLERC leur m&egravere)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38255">25-sept</td>
      <td >Porcheron</td>
      <td >2E1084-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>748</td>
      <td >Jean BERNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38149">11-juin</td>
      <td >Manci&eacute</td>
      <td >2E939-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>738</td>
      <td >et Marguerite AUDOIN - Guillaume AUDOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="39774">22-nov</td>
      <td >Aigre</td>
      <td >2E109-30</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>1120</td>
      <td >et Jean son fils (terre de raves et coups. . .)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38168">30-juin</td>
      <td >Porcheron</td>
      <td >2E1086-10</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>746</td>
      <td >Jean BERNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1707</td>
      <td  align=right
  x:num="38198">30-juil</td>
      <td >Porcheron</td>
      <td >2E1088-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >PAPIN Michel</td>
      <td  align=right x:num>748</td>
      <td >avec Jean PAPIN &agrave Antoine AUDIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td class=xl3515333 align=right
  x:num="38871">03-juin</td>
      <td >Izambard</td>
      <td >2E2802-190</td>
      <td >Echallat</td>
      <td >Acquisition</td>
      <td >PELEGAY Guillaume</td>
      <td  align=right x:num>1020</td>
      <td >de Jean NAVARRE Sieur du bois deret</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td class=xl3515333 align=right x:num="39814">01-janv</td>
      <td >Daniaud</td>
      <td >2E5943-10</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >PELEGEAY Jeanne</td>
      <td  align=right x:num>1448</td>
      <td >et ses fr&egravere et soeur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="39494">16-f&eacutevr</td>
      <td >&nbsp;</td>
      <td >NÝ18</td>
      <td >Saint-Omer</td>
      <td >Mariage</td>
      <td >POCHET Jacques Fr.</td>
      <td >&nbsp;</td>
      <td >et Marie Th&eacuter&egravese Dominique LEBON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="39460">13-janv</td>
      <td >&nbsp;</td>
      <td >NÝ50</td>
      <td >Saint-Omer</td>
      <td >Mariage</td>
      <td >POCHET Jacques Fr.</td>
      <td >&nbsp;</td>
      <td >et Adrienne Ang&eacutelique LEMAIRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38793">17-mars</td>
      <td >Micheau</td>
      <td >2E1031-10</td>
      <td >Angoul&ecircme</td>
      <td >M&eacutetairie</td>
      <td >POIRIER Guillaume</td>
      <td  align=right x:num>977</td>
      <td >et Marg. ROUHIER et Jean POIRIER son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38042">25-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E945-10</td>
      <td >Angoul&ecircme</td>
      <td >PV</td>
      <td >RAVAUD Marie</td>
      <td  align=right x:num>733</td>
      <td >Veuve Jean TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38037">20-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E946-20</td>
      <td >Angoul&ecircme</td>
      <td >D&eacuteclaration</td>
      <td >RAVAUD Marie</td>
      <td  align=right x:num>739</td>
      <td >Jean DUCOUX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38825">18-avr</td>
      <td >Vachier</td>
      <td >2E1290-150</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutemission</td>
      <td >RIFFAUD Etienne</td>
      <td  align=right x:num>976</td>
      <td >de Fran&ccedilois RIFFAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38615">20-sept</td>
      <td >Peynaud fils</td>
      <td >2E2772-10</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >RIFFAUD Jean</td>
      <td  align=right x:num>865</td>
      <td >et Jacquette BIARD et J. BIARD et Margte. RIFFAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38736">19-janv</td>
      <td >Gauvry</td>
      <td >2E4296-10</td>
      <td >Mornac</td>
      <td >Mariage</td>
      <td >RIFFAUD Pierre</td>
      <td  align=right x:num>881</td>
      <td >et Jehanne TRAPPOND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39031">10-nov</td>
      <td >Robin</td>
      <td >2E1112-180</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>965</td>
      <td >et Suzanne BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38643">18-oct</td>
      <td >Manci&eacute</td>
      <td >2E935-10</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>779</td>
      <td >Berth. MAIGNAN, Mery AUDIER - Dame ROBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38459">17-avr</td>
      <td >Manci&eacute</td>
      <td >2E936-40</td>
      <td >Angoul&ecircme</td>
      <td >Opposition</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>779</td>
      <td >Fran&ccedilois AUDIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38354">2-janv</td>
      <td >Manci&eacute</td>
      <td >2E936-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>779</td>
      <td >Fran&ccedilois AUDIER - Philippe BOYTAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38926">28-juil</td>
      <td >Rouhier</td>
      <td >2E1125-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>937</td>
      <td >et Marie LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38944">15-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1125-50</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>938</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38283">23-oct</td>
      <td >Peuple</td>
      <td >2E1069-40</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>749</td>
      <td >BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="39637">8-juil</td>
      <td >Boilevin</td>
      <td >2E199-10</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>1122</td>
      <td >et Fran&ccedilois AUDIER pour pavage pont de Ruelle</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td class=xl3515333 align=right
  x:num="38445">03-avr</td>
      <td >Chauvin</td>
      <td >2E317-160</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>812</td>
      <td >et Fran&ccedilois AUDIER &agrave Guillaume BOISDON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="39078">27-d&eacutec</td>
      <td >Clochard</td>
      <td >2E413-160</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>953</td>
      <td >et Jean ROUFFIGNAC son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38641">16-oct</td>
      <td >Peynaud</td>
      <td >2E1071-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>782</td>
      <td >J. ROUFFIGNAC fils et Ber. MAIGNAN et Mery AUDIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38865">28-mai</td>
      <td >Rouhier</td>
      <td >2E1128-130</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>921</td>
      <td >&agrave Jean COUGNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38500">28-mai</td>
      <td >J&eacuteheu</td>
      <td >2E816-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>779</td>
      <td >Suzanne, Ja et Fr BASSET - BELLEPIERE/LAROQUIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38496">24-mai</td>
      <td >Peynaud</td>
      <td >2E1072-50</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>785</td>
      <td >Suzanne BASSET, Fran&ccedilois BASSET - Jean GUYOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38733">16-janv</td>
      <td >Rouhier</td>
      <td >2E1137-10</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>911</td>
      <td class=xl3115333>et M. LIZEE 2e femme de J. ROUFFIGNAC son p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38294">3-nov</td>
      <td >Porcheron</td>
      <td >2E1086-20</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>746</td>
      <td >Marc BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38292">1-nov</td>
      <td >Porcheron</td>
      <td >2E1086-70</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>746</td>
      <td >Marc BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1707</td>
      <td  align=right
  x:num="38075">29-mars</td>
      <td >Boilevin</td>
      <td >2E203-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>755</td>
      <td >et Suzanne BASSET - Cesbaud</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38651">26-oct</td>
      <td >Rouhier</td>
      <td >2E1142-20</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>763</td>
      <td >JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1713</td>
      <td  align=right
  x:num="38233">3-sept</td>
      <td >Manci&eacute</td>
      <td >2E943-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>721</td>
      <td >et Jean AUDIER &agrave Louise PREVOST</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38616">21-sept</td>
      <td >J&eacuteheu</td>
      <td >2E823-40</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>780</td>
      <td >Jean AUDIER - Jacques COUPEAU et Marg. JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38582">18-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1091-80</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>841</td>
      <td >de Jac. BOITEAU et M. Rose BASSET et M. BOITEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="38662">6-nov</td>
      <td >Rouhier</td>
      <td >2E1145-20</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>790</td>
      <td >&agrave Jean MAIGNAN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38919">21-juil</td>
      <td >J&eacuteheu</td>
      <td >2E829-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>885</td>
      <td >&agrave Charles CAILLOT (On parle de Jacques COUPAUD)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1727</td>
      <td  align=right
  x:num="38026">9-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E956-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUFFIGNAC Jean</td>
      <td  align=right x:num>576</td>
      <td >Jean ROUFFIGNAC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39018">28-oct</td>
      <td >Robin</td>
      <td >2E1109-250</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>955</td>
      <td >et Fran&ccediloise RATINEAU de Guillaume BOILEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39575">7-mai</td>
      <td >Mamain</td>
      <td >2E924-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>1140</td>
      <td >et F. RATINEAU d'Arnaud BENOIST (pour la vente de vin)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38580">16-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1066-30</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>839</td>
      <td >et Fran&ccedilois AUDIER et Mathurin CAZIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38944">15-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1112-110</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>965</td>
      <td >et Fran&ccedilois AUDIER de Jacques CAILLET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39027">6-nov</td>
      <td >Robin</td>
      <td >2E1112-170</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>966</td>
      <td >et Fran&ccedilois AUDIER de DESCARSELLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38939">10-ao&ucirct</td>
      <td >Pillorget</td>
      <td >2E2167-10</td>
      <td >Champniers</td>
      <td >Vente</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>1028</td>
      <td >&agrave Nicolas ROCHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39621">22-juin</td>
      <td >Cladier</td>
      <td >2E368-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrantement</td>
      <td >ROUFFIGNAC Jean A&icircn&eacute</td>
      <td  align=right x:num>1162</td>
      <td class=xl3115333>et Fran&ccediloise RATINEAU de Barth&eacutel&eacutemy JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38448">6-avr</td>
      <td >Caillaud</td>
      <td >2E245-20</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >ROUFFIGNAC Marg.</td>
      <td  align=right x:num>760</td>
      <td >Jean ROUFFIGNAC - BERNARD. (DARS)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38223">24-ao&ucirct</td>
      <td >J&eacuteheu</td>
      <td >2E818-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>710</td>
      <td >et Marie AUBOIN - De la Quintinie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38324">3-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E942-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>713</td>
      <td >et Marie AUBOIN - Jean AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td  align=right
  x:num="38336">15-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E942-50</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>713</td>
      <td >et Marie AUBOIN - Jean AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38284">24-oct</td>
      <td >Manci&eacute</td>
      <td >2E942-100</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>714</td>
      <td >Marie AUBOIN - Martial CLOCHARD - Cath. AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38178">10-juil</td>
      <td >Manci&eacute</td>
      <td >2E943-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>721</td>
      <td >et Marie AUBOIN - Pierre DUMERGUE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="38342">21-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E956-60</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>576</td>
      <td >et Marie AUBOIN et SAUTEREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38674">18-nov</td>
      <td >Manci&eacute</td>
      <td >2E957-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>781</td>
      <td >Marie AUBOIN - Jean THOUARD et Jeanne ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38620">25-sept</td>
      <td >Manci&eacute</td>
      <td >2E957-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>781</td>
      <td >Marie AUBOIN - Denis SAUTRAULT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38040">23-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E234-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>554</td>
      <td >Fran&ccediloise SURRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38511">8-juin</td>
      <td >Caillaud</td>
      <td >2E240-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>768</td>
      <td >Fce SURREAU - JOLLY et Phil. SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38421">10-mars</td>
      <td >Caillaud</td>
      <td >2E249-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>776</td>
      <td >Frse. SURRAUD - Jacques ROUHIER, Jean LAMEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="38637">12-oct</td>
      <td >Caillaud</td>
      <td >2E249-50</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>776</td>
      <td >Fran&ccediloise SURRAUD - Jacques ROUHIER,  JOLLY. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1750</td>
      <td  align=right
  x:num="38394">11-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E252-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>781</td>
      <td >Fran&ccediloise SURRAUD - Jacques ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38452">10-avr</td>
      <td >Caillaud</td>
      <td >2E262-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUHIER Pierre</td>
      <td  align=right x:num>868</td>
      <td >et Fran&ccedilse SURRAUD et autres &agrave Ant. CIVADIER Cur&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1759</td>
      <td  align=right
  x:num="38625">30-sept</td>
      <td >Bernard</td>
      <td >2E147-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >ROUHIER Suzanne</td>
      <td  align=right x:num>788</td>
      <td >Jean CHERADE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38266">6-oct</td>
      <td >Manci&eacute</td>
      <td >2E964-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >ROUSSEAU Antoinette</td>
      <td  align=right x:num>744</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38997">7-oct</td>
      <td >Clochard</td>
      <td >2E408-50</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves verbal</td>
      <td >ROUSSEAU Jeanne</td>
      <td  align=right x:num>968</td>
      <td >(Femme de P. IMBERT)  d&eacuteg&acirct fait par &acircnes ds safran</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38773">25-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1131-30</td>
      <td >Lhoumeau</td>
      <td >D&eacuteclaration</td>
      <td >ROUSSEAU Jeanne</td>
      <td  align=right x:num>917</td>
      <td >veuve de Pierre IMBERT, contre Toussaint BRISSAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38462">20-avr</td>
      <td >J&eacuteheu</td>
      <td >2E823-10</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >ROUYER Jean</td>
      <td  align=right x:num>780</td>
      <td >Marie POIRIER - Pierre DELABAURIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td class=xl3515333 align=right
  x:num="38529">26-juin</td>
      <td >J&eacuteheu</td>
      <td >2E827-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUYER Jean</td>
      <td  align=right x:num>787</td>
      <td >et Marie POIRIER, de Jean MESTADRIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1747</td>
      <td  align=right
  x:num="38694">8-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E248-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >ROUYER Leonard</td>
      <td  align=right x:num>776</td>
      <td >Marg. COUPEAU - Rose JEAN vve Berth. DAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="38501">29-mai</td>
      <td >J&eacuteheu</td>
      <td >2E827-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >ROUYER L&eacuteonard</td>
      <td  align=right x:num>787</td>
      <td >Marie PAPONNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38117">10-mai</td>
      <td >J&eacuteheu</td>
      <td >2E831-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >ROUYER L&eacuteonard</td>
      <td  align=right x:num>731</td>
      <td >Marguerite COUPEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1744</td>
      <td  align=right
  x:num="38048">2-mars</td>
      <td >Caillaud</td>
      <td >2E243-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUYER L&eacuteonard</td>
      <td  align=right x:num>560</td>
      <td >de MOISMORAND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38898">30-juin</td>
      <td >Caillaud</td>
      <td >2E264-60</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >ROUYER L&eacuteonard</td>
      <td  align=right x:num>1017</td>
      <td >et Marguerite COUPEAU au Docteur CHAIGNAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39575">7-mai</td>
      <td >Micheau</td>
      <td >2E1021-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >ROUYER Louis</td>
      <td  align=right x:num>1136</td>
      <td >et Jean et Cl&eacutement LIZEE de Jean MOREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td class=xl2415333 align=right x:num="39909">6-avr</td>
      <td >Huguet Jean</td>
      <td >2E795-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >ROUYER Louis</td>
      <td  align=right x:num>1203</td>
      <td >et Jehanne LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1765</td>
      <td  align=right x:num="38375">23-janv</td>
      <td >Caillaud</td>
      <td >2E281-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >ROUYER Pierre</td>
      <td  align=right x:num>758</td>
      <td >Denise ROUYER, etc.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38467">25-avr</td>
      <td >Chauvin</td>
      <td >2E311-10</td>
      <td >Lhoumeau</td>
      <td >Location</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>804</td>
      <td >et Pasquette JOUANNET &agrave Louise DUBOIS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38548">15-juil</td>
      <td >Rouhier</td>
      <td >2E1120-10</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>762</td>
      <td >&agrave Jean JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38358">6-janv</td>
      <td >Chauvin</td>
      <td >2E316-100</td>
      <td >Lhoumeau</td>
      <td >Location</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>811</td>
      <td >A. ROY, Cath. COUPEAU, Eliz. ROY &agrave M. JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38960">31-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1124-20</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>941</td>
      <td >(vve de Arnaud JOUANNET) &agrave J. JOUANNET son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38793">17-mars</td>
      <td >J&eacuteheu</td>
      <td >2E815-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38988">28-sept</td>
      <td >Rouhier</td>
      <td >2E1128-180</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>921</td>
      <td >&agrave Jean JOUANNET son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38922">24-juil</td>
      <td >Rouhier</td>
      <td >2E1136-40</td>
      <td >Lhoumeau</td>
      <td >Testament</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>912</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="39096">14-janv</td>
      <td >Rouhier</td>
      <td >2E1139-20</td>
      <td >Lhoumeau</td>
      <td >Accord</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>759</td>
      <td >Jean JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38403">20-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E321-220</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>801</td>
      <td >Marg. AUBIN, Michel JOUANNET, etc.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38549">16-juil</td>
      <td >J&eacuteheu</td>
      <td >2E823-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >ROY Catherine</td>
      <td  align=right x:num>780</td>
      <td >Suite &agrave son d&eacutec&egraves</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td class=xl3315333 align=right x:num="40203">25-janv</td>
      <td >Bire</td>
      <td >2E3474-10</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >SAUNIER Jean</td>
      <td  align=right x:num>1490</td>
      <td >et Fran&ccediloise GOBELET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td class=xl3315333 align=right
  x:num="40214">5-f&eacutevr</td>
      <td >Bire</td>
      <td >2E3476-20</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >SAUNIER Jean</td>
      <td  align=right x:num>1492</td>
      <td >et Marie RESNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right x:num="39846">2-f&eacutevr</td>
      <td >Gaignier</td>
      <td >2E583-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>1205</td>
      <td >de Pastry DENEUVILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="20">20-janv</td>
      <td >Juilhard</td>
      <td >2E862-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>1136</td>
      <td >de Germaine ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39780">28-nov</td>
      <td >Micheau</td>
      <td >2E1018-10</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>1124</td>
      <td >des biens laiss&eacutes par Germaine ROY (Vincent SIMARD)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39890">18-mars</td>
      <td >Lacaton</td>
      <td >2E891-20</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>1174</td>
      <td >et Thomas DENEUVILLE (de terres)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td class=xl2415333 align=right x:num="39895">23-mars</td>
      <td >Huguet Jean</td>
      <td >2E791-30</td>
      <td >Angoul&ecircme</td>
      <td >M&eacutetairie</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>1200</td>
      <td >M&eacutetairie au village du Lion &agrave Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right x:num="39768">16-nov</td>
      <td >Juilhard</td>
      <td >2E862-40</td>
      <td >Angoul&ecircme</td>
      <td >Rôle</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>1136</td>
      <td >Rôle de Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39042">21-nov</td>
      <td >Gibaud</td>
      <td >2E664-40</td>
      <td >Angoul&ecircme</td>
      <td >Rôle</td>
      <td >SIMARD Antoine</td>
      <td  align=right x:num>911</td>
      <td >Rôle de la paroisse de Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38541">8-juil</td>
      <td >Manci&eacute</td>
      <td >2E936-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >SIMARD Antoinette</td>
      <td  align=right x:num>779</td>
      <td >Mathurin PREVOST - Michel PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38448">6-avr</td>
      <td >Gillibert</td>
      <td >2E710-40</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >SIMARD Antoinette</td>
      <td  align=right x:num>823</td>
      <td >&agrave Jean BIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38366">14-janv</td>
      <td >Gillibert</td>
      <td >2E710-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >SIMARD Antoinette</td>
      <td  align=right x:num>823</td>
      <td >et Jean BIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38399">16-f&eacutevr</td>
      <td >Gillibert</td>
      <td >2E710-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >SIMARD Antoinette</td>
      <td  align=right x:num>823</td>
      <td >et Jean BIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38370">18-janv</td>
      <td >Manci&eacute</td>
      <td >2E937-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >SIMARD Antoinette</td>
      <td  align=right x:num>778</td>
      <td >Jean BIBAUD &agrave Michel PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38108">1-mai</td>
      <td >Texier</td>
      <td >2E3419-20</td>
      <td >Magnac</td>
      <td >Mariage</td>
      <td >SIMARD Antoinette</td>
      <td  align=right x:num>750</td>
      <td >Andr&eacute BONNORON et Marie GIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38838">1-mai</td>
      <td >Rouhier</td>
      <td >2E1131-40</td>
      <td >Lhoumeau</td>
      <td >Ma&icirctrise</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>917</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38460">18-avr</td>
      <td >Manci&eacute</td>
      <td >2E938-180</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>777</td>
      <td >Catherine LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38461">19-avr</td>
      <td >Porcheron</td>
      <td >2E1085-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>778</td>
      <td >Cath. LURAT - Jean et Michel LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right
  x:num="38583">19-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1805-50</td>
      <td >Angoul&ecircme</td>
      <td >Sous-ferme</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>778</td>
      <td >Genevi&egraveve LURAT - Jean LABOIESNE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="39813">31-d&eacutec</td>
      <td >Aigre</td>
      <td >2E109-40</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>1120</td>
      <td >et Fran&ccedilois SURREAU son fr&egravere (Marie COSTE m&egravere)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38358">6-janv</td>
      <td >Rouhier</td>
      <td >2E1139-10</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>759</td>
      <td >Catherine LURAT - Michelle ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="39561">23-avr</td>
      <td >Aigre</td>
      <td >2E113-10</td>
      <td >Angoul&ecircme</td>
      <td >Donnation</td>
      <td >SURREAU Louis</td>
      <td  align=right x:num>1122</td>
      <td >et Cath. LURAT, de Louis SURREAU et Genevi&egraveve GODIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38976">16-sept</td>
      <td >Robin</td>
      <td >2E1110-140</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >SURREAU Nicolas</td>
      <td  align=right x:num>956</td>
      <td >et Marie COSTE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38642">17-oct</td>
      <td >Peuple</td>
      <td >2E1064-140</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >SURREAU Nicolas</td>
      <td  align=right x:num>858</td>
      <td >avec Louis SURREAU son fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38737">20-janv</td>
      <td >Robin</td>
      <td >2E1111-110</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >SURREAU Nicolas</td>
      <td  align=right x:num>962</td>
      <td >et Marie COSTE et DENEUVILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38642">17-oct</td>
      <td >Peuple</td>
      <td >2E1064-130</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >SURREAU Nicolas</td>
      <td  align=right x:num>858</td>
      <td >avec Louis, Anne et Catherine ses fr&egravere et s&oeligurs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38357">5-janv</td>
      <td >Peuple</td>
      <td >2E1061-130</td>
      <td >Angoul&ecircme</td>
      <td >Location</td>
      <td >SURREAU Pierre</td>
      <td  align=right x:num>860</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38588">24-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1062-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >SURREAU Pierre</td>
      <td  align=right x:num>859</td>
      <td >et Catherine, Nicolas, Louis et Anne ses enfants</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38193">25-juil</td>
      <td >Porcheron</td>
      <td >2E1084-30</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >TATAINE Pierre</td>
      <td  align=right x:num>748</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38189">21-juil</td>
      <td >Porcheron</td>
      <td >2E1084-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TATAINE Pierre</td>
      <td  align=right x:num>748</td>
      <td >Suzanne JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38301">10-nov</td>
      <td >Porcheron</td>
      <td >2E1084-40</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >TATAINE Pierre</td>
      <td  align=right x:num>748</td>
      <td >Fran&ccedilois PORCHERON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="38637">12-oct</td>
      <td >Peynaud fils</td>
      <td >2E2771-30</td>
      <td >Dirac</td>
      <td >Arrentement</td>
      <td >TATAINE Pierre</td>
      <td  align=right x:num>867</td>
      <td >et Suzanne JAYET et autres &agrave Jean BARREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="39659">30-juil</td>
      <td >Aigre</td>
      <td >2E108-50</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >TATAINE Pierre</td>
      <td  align=right x:num>1120</td>
      <td >et Pierre DANIAS de Michel DEBORDES</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td class=xl3315333 align=right x:num="40028">3-ao&ucirct</td>
      <td >Audouin</td>
      <td >2E126-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >TOURNIER Fran&ccedilois</td>
      <td  align=right x:num>1365</td>
      <td >et ses fr&egravere et soeur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1621</td>
      <td class=xl3315333 align=right
  x:num="40035">10-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1115-70</td>
      <td >L'houmeau</td>
      <td >Ferme</td>
      <td >TOURNIER Helie</td>
      <td  align=right x:num>1291</td>
      <td >de Audier ARNAUD (d'une maison &agrave La Sabli&egravere de L'Houmeau)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right x:num="38456">14-avr</td>
      <td >Chauvin</td>
      <td >2E309-60</td>
      <td >Lhoumeau</td>
      <td >Location</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>822</td>
      <td >&agrave Mathieu MILLASSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38637">12-oct</td>
      <td >Chauvin</td>
      <td >2E315-140</td>
      <td >L'houmeau</td>
      <td >Sommation</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>786</td>
      <td >Pierre AUDOUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38411">28-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E315-110</td>
      <td >L'houmeau</td>
      <td >Sommation</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>787</td>
      <td >Philippe AUDOUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38411">28-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E315-100</td>
      <td >L'houmeau</td>
      <td >Sommation</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>787</td>
      <td >Pierre AUDOUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38567">3-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E315-180</td>
      <td >L'houmeau</td>
      <td >Transaction</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>787</td>
      <td >Pierre IMBERT (Exc&egraves commis par Jean TOURNIER fils)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38559">26-juil</td>
      <td >Chauvin</td>
      <td >2E316-220</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>811</td>
      <td >&agrave Claude ANDRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38423">12-mars</td>
      <td >Chauvin</td>
      <td >2E316-170</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>811</td>
      <td >de son fils Jean chez Daniel ESBRARD Me tonnelier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38122">15-mai</td>
      <td >Peynaud</td>
      <td >2E1070-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >TOURNIER Jean</td>
      <td  align=right x:num>757</td>
      <td >Droit de p&eacuteage (peut-&ecirctre pas anc&ecirctre ?)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39477">30-janv</td>
      <td >Gaignier</td>
      <td >2E858-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TOURNIER Jean l'a&icircn&eacute</td>
      <td  align=right x:num>1152</td>
      <td >Jehanne BOUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38794">18-mars</td>
      <td >Boutillier</td>
      <td >2E225-70</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >TOURNIER Jean l'a&icircn&eacute</td>
      <td  align=right x:num>969</td>
      <td >et J. TOURNIER le jeune son fr&egravere &agrave L&eacuteonard COUSTIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38484">12-mai</td>
      <td >Chauvin</td>
      <td >2E307-10</td>
      <td >Lhoumeau</td>
      <td >Acte</td>
      <td >TOURNIER Jean l'a&icircn&eacute</td>
      <td  align=right x:num>802</td>
      <td >Et Jean DEDIEU (et autre Jean TOURNIER fr&egravere)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38436">25-mars</td>
      <td >Chauvin</td>
      <td >2E307-20</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >TOURNIER Jean l'a&icircn&eacute</td>
      <td  align=right x:num>802</td>
      <td >de Pierre et Guillaume BOUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38681">25-nov</td>
      <td >Chauvin</td>
      <td >2E319-80</td>
      <td >Lhoumeau</td>
      <td >D&eacutemission</td>
      <td >TOURNIER Jean l'a&icircn&eacute</td>
      <td  align=right x:num>814</td>
      <td >Don d'une gabarre &agrave Jean son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39069">18-d&eacutec</td>
      <td >Boutillier</td>
      <td >2E225-80</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >TOURNIER Jean le jeune</td>
      <td  align=right x:num>969</td>
      <td >avec Jean TOURNIER l'a&icircn&eacute son fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38705">19-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E307-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >TOURNIER Jean le jeune</td>
      <td  align=right x:num>802</td>
      <td >Marie RAVAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td class=xl3515333 align=right
  x:num="38868">31-mai</td>
      <td >Clochard</td>
      <td >2E413-200</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >TOURNIER Jean le jeune</td>
      <td  align=right x:num>953</td>
      <td >et Marie RAVEAU &agrave Fran&ccedilois DOYEN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38772">24-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1131-20</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >TOURNIER Jean le jeune</td>
      <td  align=right x:num>917</td>
      <td >et Marie RAVEAU, Jean RIVAUD, NOBLESSE. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="39822">9-janv</td>
      <td >Rouhier</td>
      <td >2E1117-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >TOURNIER Jean le p&egravere</td>
      <td  align=right x:num>1281</td>
      <td >et Antoinette BRISSON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38643">18-oct</td>
      <td >Caillaud</td>
      <td >2E246-50</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >TOURNIER Magdelaine</td>
      <td  align=right x:num>770</td>
      <td >Femme de Jean GABORIT dit Prevost</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right
  x:num="38352">31-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E230-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >TOURNIER Marie</td>
      <td  align=right x:num>591</td>
      <td >Vve d'A. JAYET de Chris. PUYMOYEN et Marg. JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1732</td>
      <td  align=right
  x:num="38146">8-juin</td>
      <td >Caillaud</td>
      <td >2E232-10</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >TROUFFIER Jean</td>
      <td  align=right x:num>709</td>
      <td >Jeanne TARNAUD, TEXIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1747</td>
      <td  align=right
  x:num="38556">23-juil</td>
      <td >Caillaud</td>
      <td >2E248-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TROUFFIER Jean</td>
      <td  align=right x:num>776</td>
      <td >Marie GABORIT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38632">7-oct</td>
      <td >Manci&eacute</td>
      <td >2E938-110</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TUILLIER Claude</td>
      <td  align=right x:num>777</td>
      <td >Catherine AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38376">24-janv</td>
      <td >Caillaud</td>
      <td >2E239-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >TUILLIER Pierre</td>
      <td  align=right x:num>763</td>
      <td >Jean BINCHE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38492">20-mai</td>
      <td >Caillaud</td>
      <td >2E241-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TUILLIER Pierre</td>
      <td  align=right x:num>760</td>
      <td >Marie BOYTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="40065">9-sept</td>
      <td >Gaignier</td>
      <td >2E584-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TULLIER Charles</td>
      <td  align=right x:num>1205</td>
      <td >et Antoinette ROUSSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1727</td>
      <td  align=right
  x:num="38141">3-juin</td>
      <td >Manci&eacute</td>
      <td >2E956-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TULLIER Pierre</td>
      <td  align=right x:num>576</td>
      <td >Catherine DUMERGUE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td class=xl3315333 align=right x:num="39506">28-f&eacutevr</td>
      <td >Huguet Jean</td>
      <td class=xl4115333>2E787-10</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >&nbsp;</td>
      <td  align=right x:num>1194</td>
      <td >du moulin de Villement</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right x:num="39812">30-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5926-90</td>
      <td >Vaux-Rouillac</td>
      <td >Rôle</td>
      <td >&nbsp;</td>
      <td >&nbsp;</td>
      <td >Rôle d'Echallat</td>
    </tr>
  </table>
</div>
<div align=center>

  <h2 align=center>Cousins</h2>
  <a name="cousins">
  <table  border=1 cellpadding=0 cellspacing=0 width=1014>
    <tr class=xl2720222 height=17> 
      <th height=17 >Ann&eacutee</th>
      <th class=xl2620222>Date</th>
      <th >Notaire</th>
      <th >Classement</th>
      <th >Paroisse</th>
      <th >Type</th>
      <th >Personnes</th>
      <th >Page</th>
      <th >Observations</th>
    </tr>

    <tr height=17> 
      <td height=17  align=right x:num>1610</td>
      <td  align=right x:num="40170">23-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1114-10</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BRISSON et Marie MATHE</td>
      <td  align=right x:num>1291</td>
      <td class=xl3520222>fr&egravere de Etienne BRISSON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1614</td>
      <td  align=right
  x:num="39928">25-avr</td>
      <td >Cherade</td>
      <td >2E332-10</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >Vincent et Simon SIMARD et Pierre FAURANT</td>
      <td  align=right x:num>1217</td>
      <td >m&eacutetairie St Martial d'A&ecirc et Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1614</td>
      <td  align=right
  x:num="40095">9-oct</td>
      <td >Boutillier</td>
      <td >2E221-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Martial TRAPPON et Mathurine BOURDEIX</td>
      <td  align=right x:num>1316</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1614</td>
      <td  align=right
  x:num="40120">3-nov</td>
      <td >Rouhier</td>
      <td >2E1115-10</td>
      <td >L'Houmeau</td>
      <td >Vente</td>
      <td >Robert RAMBAULD et Perrine THULLIER</td>
      <td  align=right x:num>1291</td>
      <td >&agrave Jacques THULLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1614</td>
      <td  align=right
  x:num="40122">5-nov</td>
      <td >Rouhier</td>
      <td >2E1115-20</td>
      <td >L'Houmeau</td>
      <td >Vente</td>
      <td >Jean TOURNIER &agrave Jean LAMBERT</td>
      <td  align=right x:num>1291</td>
      <td class=xl3520222>Charpentier fr&egravere d'Helie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1614</td>
      <td  align=right
  x:num="40122">5-nov</td>
      <td >Rouhier</td>
      <td >2E1115-30</td>
      <td >L'Houmeau</td>
      <td >Vente</td>
      <td >Jean TOURNIER &agrave Jean LAMBERT</td>
      <td  align=right x:num>1291</td>
      <td class=xl3520222>Gabarrier fr&egravere d'H&eacutelie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1615</td>
      <td  align=right
  x:num="40024">30-juil</td>
      <td >Cherade</td>
      <td >2E335-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan RIFFAUD et Marie DUNOUHIER</td>
      <td  align=right x:num>1218</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1616</td>
      <td  align=right
  x:num="40044">19-ao&ucirct</td>
      <td >Cherade</td>
      <td >2E332-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre DELAURIERE et Anne COMTE</td>
      <td  align=right x:num>1217</td>
      <td >Veuve de Fran&ccedilois GREGOIRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1616</td>
      <td  align=right
  x:num="39964">31-mai</td>
      <td >Cherade</td>
      <td >2E332-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Gilles POIRIER et Marguerite PETIT</td>
      <td  align=right x:num>1217</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1616</td>
      <td  align=right
  x:num="40044">19-ao&ucirct</td>
      <td >Cherade</td>
      <td >2E332-40</td>
      <td >Angoul&ecircme</td>
      <td >Location</td>
      <td >Mathelin LIET &agrave Gilles POIRIER</td>
      <td  align=right x:num>1217</td>
      <td >d'une boutique</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1616</td>
      <td  align=right x:num="39684">24-ao&ucirct</td>
      <td >Guyot</td>
      <td >2E771-10</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td 
  x:str="&agrave Antoine SIMARD le jeune ">&agrave Antoine SIMARD le jeune </td>
      <td  align=right x:num>1162</td>
      <td >de Philippe DEXMIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1617</td>
      <td  align=right x:num="39928">25-avr</td>
      <td >Cherade</td>
      <td >2E333-10</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Simon SIMARD et Pierre FAURANT</td>
      <td  align=right x:num>1217</td>
      <td >avec Fran&ccedilois TERRASSON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1617</td>
      <td  align=right
  x:num="40037">12-ao&ucirct</td>
      <td >Cherade</td>
      <td >2E333-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Helix LIMOUSIN, Ant. LIZEE et F. LIZEE leur fils</td>
      <td  align=right x:num>1217</td>
      <td >avec Guil. BARRAUD (battu)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1618</td>
      <td  align=right
  x:num="39890">18-mars</td>
      <td >Cherade</td>
      <td >2E333-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine PREVOST et Fran&ccediloise DENEUFVILLE</td>
      <td  align=right x:num>1217</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1618</td>
      <td  align=right
  x:num="39844">31-janv</td>
      <td >Rouhier</td>
      <td >2E1115-50</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Damien PICONNIER et Fran&ccediloise RAMBAULD</td>
      <td  align=right x:num>1291</td>
      <td >fille de Robert RAMBAULD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1621</td>
      <td  align=right
  x:num="39901">29-mars</td>
      <td >Cherade</td>
      <td >2E336-10</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >Simon SIMARD et Pierre FAURANT</td>
      <td  align=right x:num>1218</td>
      <td >avec Pierre BIRON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1621</td>
      <td  align=right
  x:num="39965">1-juin</td>
      <td >Cherade</td>
      <td >2E336-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Simon SIMARD &agrave Fran&ccedilois BERNARD</td>
      <td  align=right x:num>1218</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1628</td>
      <td  align=right
  x:num="40333">4-juin</td>
      <td >Couste</td>
      <td >2E3492-10</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Pierre CHAILLON et Anthoinette FOUILLADE</td>
      <td  align=right x:num>1493</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1630</td>
      <td  align=right
  x:num="40101">15-oct</td>
      <td >Boutillier</td>
      <td >2E222-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan VARACHE et Letice DECHAUNIER</td>
      <td  align=right x:num>1306</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1630</td>
      <td  align=right
  x:num="40531">19-d&eacutec</td>
      <td >Couste</td>
      <td >2E3492-20</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Pierre et Antoinette AUDIGIER</td>
      <td  align=right x:num>1493</td>
      <td >et Marguerite et Jean FOUILLADE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1631</td>
      <td  align=right x:num="39909">6-avr</td>
      <td >Thallut</td>
      <td >2E3416-10</td>
      <td >Magnac</td>
      <td >Ferme</td>
      <td >Pierre DELAFALLAYNE &agrave Micheau DELAURIERE</td>
      <td  align=right x:num>1224</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1631</td>
      <td  align=right x:num="40092">6-oct</td>
      <td >Thallut</td>
      <td >2E3416-20</td>
      <td >Magnac</td>
      <td >Mariage</td>
      <td >Guillaume BIARD et L&eacuteonarde FOUCHY</td>
      <td  align=right x:num>1224</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1631</td>
      <td  align=right x:num="39467">20-janv</td>
      <td >Desaunieres</td>
      <td >2E4583-10</td>
      <td >La Rochef.</td>
      <td >Accord</td>
      <td >Guillaume DARS et Fran&ccedilois GESMOND</td>
      <td  align=right x:num>1071</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1632</td>
      <td  align=right
  x:num="39136">23-f&eacutevr</td>
      <td >Desaunieres</td>
      <td >2E4583-20</td>
      <td >La Rochef.</td>
      <td >Inventaire</td>
      <td >Guillaume DARS et Fran&ccedilois VACHOT</td>
      <td  align=right x:num>1071</td>
      <td >Apr&egraves d&eacutec&egraves Berth. DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1633</td>
      <td  align=right x:num="40349">20-juin</td>
      <td >Couste</td>
      <td >2E3492-50</td>
      <td >Mansle</td>
      <td >Partage</td>
      <td >Simon et Elisabeth VEAU et FOUILLADE</td>
      <td  align=right x:num>1493</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1634</td>
      <td  align=right x:num="40173">26-d&eacutec</td>
      <td >Lacaton</td>
      <td >2E880-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >DURANDEAUx et GIBOUINs</td>
      <td  align=right x:num>1208</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1634</td>
      <td  align=right
  x:num="39988">24-juin</td>
      <td >Lacaton</td>
      <td >2E880-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Catherine BONNORON &agrave Fran&ccedilois GRAZILLIER</td>
      <td  align=right x:num>1208</td>
      <td >(veuve Micheau MESNARD)  maison</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1635</td>
      <td  align=right
  x:num="38576">12-ao&ucirct</td>
      <td >Gibaud</td>
      <td >2E655-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan BIARD et Marguerite CHAIGNEAU</td>
      <td  align=right x:num>871</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1635</td>
      <td  align=right
  x:num="38707">21-d&eacutec</td>
      <td >Gibaud</td>
      <td >2E655-30</td>
      <td >Angoul&ecircme</td>
      <td >Location</td>
      <td >Pierre CYMARD de DELAVERGNE</td>
      <td  align=right x:num>871</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1635</td>
      <td  align=right
  x:num="38707">21-d&eacutec</td>
      <td >Gibaud</td>
      <td >2E655-20</td>
      <td >Angoul&ecircme</td>
      <td >Location</td>
      <td >Pierre CYMARD &agrave SIRET</td>
      <td  align=right x:num>871</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1635</td>
      <td  align=right
  x:num="38688">2-d&eacutec</td>
      <td >Gibaud</td>
      <td >2E655-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre CYMARD et Suzanne DURAND</td>
      <td  align=right x:num>871</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="38396">13-f&eacutevr</td>
      <td >Gibaud</td>
      <td >2E655-50</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre CYMARD, Etien. TEXIER, Nic. ROUZIER</td>
      <td  align=right x:num>871</td>
      <td >et S&eacutebastien DELAVERGNE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="38435">24-mars</td>
      <td >Gibaud</td>
      <td >2E655-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >S&eacutebastien AUDIER et Anne BIARD</td>
      <td  align=right x:num>871</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="38669">13-nov</td>
      <td >Gibaud</td>
      <td >2E655-70</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jacques GODIN et Fran&ccediloise SURREAU</td>
      <td  align=right x:num>871</td>
      <td >&agrave Denis SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="38670">14-nov</td>
      <td >Gibaud</td>
      <td >2E655-80</td>
      <td >Angoul&ecircme</td>
      <td >Possession</td>
      <td >Pierre DARS &agrave Saint Pierre d'Angoul&ecircme</td>
      <td  align=right x:num>871</td>
      <td >Pr&ecirctre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="39833">20-janv</td>
      <td >Thallut</td>
      <td >2E3417-10</td>
      <td >Magnac</td>
      <td >Afferme</td>
      <td >CAMBOYS &agrave BREBINAUD, RIFFAUDs et autres</td>
      <td  align=right x:num>1219</td>
      <td >d'une m&eacutetairie aux Riffaud, Ruelle</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right x:num="40105">19-oct</td>
      <td >Rouhier</td>
      <td >2E1117-40</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Noël ROY et Michelle VERGNAULD</td>
      <td  align=right x:num>1281</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1636</td>
      <td  align=right
  x:num="39833">20-janv</td>
      <td >Rouhier</td>
      <td >2E1117-20</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Olivier RIFFAUD et Jehanne DAUVAU</td>
      <td  align=right x:num>1281</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right x:num="40145">28-nov</td>
      <td >Lacaton</td>
      <td >2E881-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >&agrave Louis GAILLARD de Cl&eacutement MOUSSIER</td>
      <td  align=right x:num>1208</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right
  x:num="39844">31-janv</td>
      <td >Lacaton</td>
      <td >2E881-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Simon BARRAUD et Catherine POYRIER</td>
      <td  align=right x:num>1208</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right
  x:num="39626">27-juin</td>
      <td >Guyot</td>
      <td >2E771-20</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >Jean BENESTEAU et Marguerite MERLIN</td>
      <td  align=right x:num>1162</td>
      <td >de Marie de PARIS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right
  x:num="39841">28-janv</td>
      <td >Thallut</td>
      <td >2E3417-20</td>
      <td >Magnac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois DELAURIERE et Fran&ccediloise BRUN</td>
      <td  align=right x:num>1219</td>
      <td >fils Micheau</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right
  x:num="39472">25-janv</td>
      <td >Boutillier</td>
      <td >2E223-10</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Estienne GUICHARD et Nollette RIFFAUD</td>
      <td  align=right x:num>1172</td>
      <td >de Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right
  x:num="40111">25-oct</td>
      <td >Thallut</td>
      <td >2E3417-30</td>
      <td >Magnac</td>
      <td >Mariage</td>
      <td >Pierre et Helye DELAURIERE enfants de Micheau</td>
      <td  align=right x:num>1219</td>
      <td >avec Jehan et Marie GIBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1638</td>
      <td  align=right
  x:num="40054">29-ao&ucirct</td>
      <td >Lacaton</td>
      <td >2E881-20</td>
      <td >Angoul&ecircme</td>
      <td >Sous-ferme</td>
      <td >&agrave Nicolas SURREAU et L&eacuteonarde AUGELLIER</td>
      <td  align=right x:num>1208</td>
      <td >de Fran&ccediloisPERTAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1639</td>
      <td  align=right
  x:num="39280">17-juil</td>
      <td >Imbert</td>
      <td >2E4682-10</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Pierre GAILLARD et Jeanne MAYOU</td>
      <td  align=right x:num>1067</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1639</td>
      <td  align=right
  x:num="39972">08-juin</td>
      <td >Lacaton</td>
      <td >2E881-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre ROUSSEAU et Jeanne DELAGE</td>
      <td  align=right x:num>1208</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1639</td>
      <td  align=right
  x:num="39786">04-d&eacutec</td>
      <td >Guyot</td>
      <td >2E771-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BOILEVIN et Marguerite PINEAU</td>
      <td  align=right x:num>1162</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="39981">17-juin</td>
      <td >Lacaton</td>
      <td >2E882-30</td>
      <td >Angoul&ecircme</td>
      <td >Acquisition</td>
      <td >Jean ROUFFIGNAC de Laurent ROUHIER</td>
      <td  align=right x:num>1209</td>
      <td >maison &agrave Bourdeix, Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="40080">24-sept</td>
      <td >Lacaton</td>
      <td >2E882-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Fran&ccedilois TULLIER pour voyage &agrave Paris</td>
      <td  align=right x:num>1209</td>
      <td >(Gaspard BONNEMAIN Me. tailleur)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="39899">27-mars</td>
      <td >Lacaton</td>
      <td >2E882-20</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Jean BOISTAUD chez Simon MOUSNIER</td>
      <td  align=right x:num>1209</td>
      <td >Ma&icirctre sergetier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="39843">30-janv</td>
      <td >Lacaton</td>
      <td >2E882-10</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >MARTIAL &agrave Jean BOILEVIN fils d'Antoine</td>
      <td  align=right x:num>1209</td>
      <td >de Fl&nbsp;&eacuteac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="39757">05-nov</td>
      <td >Guyot</td>
      <td >2E772-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine RIFFAULT et Charlotte ALLEBERT</td>
      <td  align=right x:num>1163</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="39515">08-mars</td>
      <td >Guyot</td>
      <td >2E772-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jehan BOYTEAU &agrave Jehan DELAGRAZELLE</td>
      <td  align=right x:num>1163</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1640</td>
      <td  align=right
  x:num="39560">22-avr</td>
      <td >Guyot</td>
      <td >2E772-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan LIMOUZIN et Marguerite RIFFAULT</td>
      <td  align=right x:num>1163</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="39889">17-mars</td>
      <td >Lacaton</td>
      <td >2E882-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Henry DECHERFALLOT et Magdelaine  BERNAR<span
  style='display:none'>D</span></td>
      <td  align=right x:num>1209</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="39615">16-juin</td>
      <td >Guyot</td>
      <td >2E772-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jehannet et Pierre BIARD</td>
      <td  align=right x:num>1163</td>
      <td >(et Marie BIARD) de Sers</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="40119">02-nov</td>
      <td >Thallut</td>
      <td >2E3417-40</td>
      <td >Magnac</td>
      <td >Donnation</td>
      <td >Yzabel PINASSEAU &agrave Jean BIARD son gendre</td>
      <td  align=right x:num>1219</td>
      <td >et Margte CHAGNAUD sa fille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="39713">22-sept</td>
      <td >Guyot</td>
      <td >2E772-70</td>
      <td >Angoul&ecircme</td>
      <td >Sous-ferme</td>
      <td >&agrave Olivier BENESTEAU de Jean BOILEAU</td>
      <td  align=right x:num>1163</td>
      <td >une chambre basse</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="39706">15-sept</td>
      <td >Guyot</td>
      <td >2E772-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Mery MESNIER et Marie NOBLESSE</td>
      <td  align=right x:num>1163</td>
      <td >Fille Arnault &amp; Jeanne BOUYER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="39662">02-ao&ucirct</td>
      <td >Guyot</td>
      <td >2E772-50</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre BOISTEAU et Marie NALBERT</td>
      <td  align=right x:num>1163</td>
      <td >et BOURDIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right x:num="40094">8-oct</td>
      <td >Prevost</td>
      <td >2E2775-40</td>
      <td >Douzat</td>
      <td >Vente</td>
      <td >Berthom&eacute IZAMBARD &agrave Mr de Vilhonneur</td>
      <td  align=right x:num>1218</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1641</td>
      <td  align=right
  x:num="40429">8-sept</td>
      <td >Couste</td>
      <td >2E3494-10</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Guillaume BALOTEAU et Margte RICHETEAU</td>
      <td  align=right x:num>1495</td>
      <td class=xl3520222>fils de Jean et Jeanne LHOMME</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1642</td>
      <td  align=right x:num="39741">20-oct</td>
      <td >Guyot</td>
      <td >2E773-30</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >Denis LURAT l'a&icircn&eacute &agrave Jehan BASSOULET</td>
      <td  align=right x:num>1172</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1642</td>
      <td  align=right
  x:num="40046">21-ao&ucirct</td>
      <td >Lacaton</td>
      <td >2E883-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >d'une gabarre &agrave Pierre LURAT l'a&icircn&eacute</td>
      <td  align=right x:num>1210</td>
      <td >et Jean LIZEE et Marie MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1642</td>
      <td  align=right
  x:num="39740">19-oct</td>
      <td >Guyot</td>
      <td >2E773-20</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >Andr&eacute PREVOST &agrave Jean NOBLESSE cordonnier</td>
      <td  align=right x:num>1172</td>
      <td >Fils d'Andr&eacute NOBLESSE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1642</td>
      <td  align=right
  x:num="39649">20-juil</td>
      <td >Guyot</td>
      <td >2E773-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Aimery ROY &agrave Pierre et Elizee LURAT</td>
      <td  align=right x:num>1172</td>
      <td >p&egravere et fils. Vente de bois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right x:num="40022">28-juil</td>
      <td >Duru</td>
      <td >2E497-10</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Jean LIZEE et Pierre GALOIS, gabariers</td>
      <td  align=right x:num>1216</td>
      <td class=xl3520222>fils de J. LIZEE et J. BOURDAGE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right x:num="39642">13-juil</td>
      <td >Guyot</td>
      <td >2E773-50</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Arnaud DELACROIX et Pierre SIMARD ma&ccedilons</td>
      <td  align=right x:num>1172</td>
      <td >et Guerin BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="39458">11-janv</td>
      <td >Guyot</td>
      <td >2E773-40</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Arnaud DELACROIX et Pierre SIMARD ma&ccedilons</td>
      <td  align=right x:num>1172</td>
      <td >et Guerin BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="39437">21-d&eacutec</td>
      <td >Desaunieres</td>
      <td >2E4587-10</td>
      <td >La Rochef.</td>
      <td >Retrait lignage</td>
      <td >Guillaume DARS et Fran&ccedilois DELAVIE</td>
      <td  align=right x:num>1081</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="40037">12-ao&ucirct</td>
      <td >Lacaton</td>
      <td >2E883-20</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Pierre SIMARD et Renaud DELACROIX ma&ccedilons</td>
      <td  align=right x:num>1210</td>
      <td >(Lombrette ?) construction maison</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="39784">02-d&eacutec</td>
      <td >Prevost</td>
      <td >2E2775-10</td>
      <td >Douzat</td>
      <td >Mariage</td>
      <td >Guillaume TALLON et Marguerite BOISDON</td>
      <td  align=right x:num>1151</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="39839">26-janv</td>
      <td >Huguet</td>
      <td >2E782-10</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Helie et Jean YRVOIX et Marg. JABOUIN</td>
      <td  align=right x:num>1174</td>
      <td >(Bernard et Genis YRVOIX) Foss&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="38742">25-janv</td>
      <td >Rouhier</td>
      <td >2E1119-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre BOISTAUD et Louise POTARD</td>
      <td  align=right x:num>946</td>
      <td >ou BENESTEAU ?</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1643</td>
      <td  align=right
  x:num="38929">31-juil</td>
      <td >Rouhier</td>
      <td >2E1119-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Mathurin COUSSEAU et Marguerite IMBERT</td>
      <td  align=right x:num>946</td>
      <td >Fille de J. et Louise COMBEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1644</td>
      <td  align=right x:num="40109">23-oct</td>
      <td >Duru</td>
      <td >2E497-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre PREVOST et Lucresse GIRAUD</td>
      <td  align=right x:num>1216</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1644</td>
      <td  align=right x:num="39589">21-mai</td>
      <td >Guyot</td>
      <td >2E774-10</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >Jean MOUCHIERE gab. et Jeanne ROUSSEAU</td>
      <td  align=right x:num>1172</td>
      <td >et Robert ROY lab. de St Jacques</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="38747">30-janv</td>
      <td >Boutillier</td>
      <td >2E224-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Marcelin MESNARD et Aignette MESNARD</td>
      <td  align=right x:num>976</td>
      <td >avec B. PAPIN et Mrg. PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="39637">08-juil</td>
      <td >Guyot</td>
      <td >2E774-20</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >Guerin BOILEVIN &agrave Jean NOBLESSE cordonnier</td>
      <td  align=right x:num>1172</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="39817">4-janv</td>
      <td >Huguet</td>
      <td >2E782-20</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >&agrave Jehan GABORY de Claude MOULIN</td>
      <td  align=right x:num>1174</td>
      <td >d'une boutique</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="39939">6-mai</td>
      <td >Huguet</td>
      <td >2E782-30</td>
      <td >Angoul&ecircme</td>
      <td >Acquisition</td>
      <td >pour Pierre LAMET de Louis DESCARSELLE</td>
      <td  align=right x:num>1174</td>
      <td >d'une pi&egravece de vigne</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="39743">22-oct</td>
      <td >Guyot</td>
      <td >2E774-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre BASSET et Perrette MARANDAT</td>
      <td  align=right x:num>1172</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right x:num="39856">12-f&eacutevr</td>
      <td >Sicard</td>
      <td >2E1187-10</td>
      <td >Angoul&ecircme</td>
      <td >Donnation</td>
      <td >Jean CHAUVET et Jeanne AUBIN sa femme</td>
      <td  align=right x:num>1365</td>
      <td >de St Martin</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1645</td>
      <td  align=right
  x:num="40473">22-oct</td>
      <td >Couste</td>
      <td >2E3494-30</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Henry BUHERNE et Charlotte LOTTE</td>
      <td  align=right x:num>1495</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1646</td>
      <td  align=right x:num="40037">12-ao&ucirct</td>
      <td >Huguet</td>
      <td >2E783-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Ren&eacute DUPUY et Marie COCUT</td>
      <td  align=right x:num>1191</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right
  x:num="38859">22-mai</td>
      <td >Gibaud</td>
      <td >2E661-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Marie ROY &agrave Pierre PAICHOU</td>
      <td  align=right x:num>969</td>
      <td >Femme de Antoine MICHEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right
  x:num="39612">13-juin</td>
      <td >Guyot</td>
      <td >2E775-10</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Jean BENET et Jehan NOBLESSE</td>
      <td  align=right x:num>1173</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right
  x:num="40050">25-ao&ucirct</td>
      <td >Huguet</td>
      <td >2E783-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre VARACHE et Catherine FAURE</td>
      <td  align=right x:num>1191</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right
  x:num="38879">11-juin</td>
      <td >Gibaud</td>
      <td >2E661-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean YRVOIX et Gabrielle MARCHAIX</td>
      <td  align=right x:num>969</td>
      <td >&agrave Damlle. du Chilloux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right
  x:num="38858">21-mai</td>
      <td >Gibaud</td>
      <td >2E661-10</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Jehan LIMOUSIN et Marguerite RIFFAUD</td>
      <td  align=right x:num>969</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1647</td>
      <td  align=right
  x:num="39035">14-nov</td>
      <td >Gibaud</td>
      <td >2E661-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Mery DAVID &agrave Colette FERRAUD</td>
      <td  align=right x:num>969</td>
      <td >Femme de Nicolas DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right
  x:num="38728">11-janv</td>
      <td >Gibaud</td>
      <td >2E661-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan MOREAU et Mathurine VARACHE</td>
      <td  align=right x:num>969</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right x:num="39950">17-mai</td>
      <td >Vivien</td>
      <td >2E1828-10</td>
      <td >Brie</td>
      <td >Mariage</td>
      <td >Jehan DESSECARDS et Philippe RIFFAUD</td>
      <td  align=right x:num>1231</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right x:num="39620">21-juin</td>
      <td >Guyot</td>
      <td >2E776-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Robert ROY et Perrette DELAGE</td>
      <td  align=right x:num>1159</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right
  x:num="39809">27-d&eacutec</td>
      <td >Guyot</td>
      <td >2E776-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume SURREAU et MarguerITE GUILHON</td>
      <td  align=right x:num>1159</td>
      <td >Fils L&eacuteonard et Ren&eacutee MAIGNAN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right x:num="40056">31-ao&ucirct</td>
      <td >Rouyer</td>
      <td >2E4965-10</td>
      <td >Ruelle</td>
      <td >Testament</td>
      <td >Fran&ccediloise RIFFAUD femme Jehan GIBAUD</td>
      <td  align=right x:num>1226</td>
      <td >&agrave Fran&ccediloise GIBAUD sa filleule</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right x:num="40143">26-nov</td>
      <td >Rouyer</td>
      <td >2E4965-20</td>
      <td >Ruelle</td>
      <td >Partage</td>
      <td >Michel DELAURIERE et Georges CHEVALLIER</td>
      <td  align=right x:num>1226</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1648</td>
      <td  align=right x:num="39686">26-ao&ucirct</td>
      <td >Guyot</td>
      <td >2E776-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BENESTEAU et Jehanne VERGNAULT</td>
      <td  align=right x:num>1159</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right x:num="40119">2-nov</td>
      <td >Rouyer</td>
      <td >2E4965-30</td>
      <td >Ruelle</td>
      <td >Mariages</td>
      <td >Michel DELAURIERE et Jehan et Helie ses fils</td>
      <td  align=right x:num>1226</td>
      <td >M. BARUTEAU et filles DELESGAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right x:num="39572">04-mai</td>
      <td >Guyot</td>
      <td >2E777-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jacques CYMARD &agrave Antoine BORDIER</td>
      <td  align=right x:num>1156</td>
      <td >d'une maison &agrave Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right x:num="40138">21-nov</td>
      <td >Rouyer</td>
      <td >2E4965-40</td>
      <td >Ruelle</td>
      <td >Inventaire</td>
      <td >Michel DELAURIERE et ses enfants mineurs</td>
      <td  align=right x:num>1226</td>
      <td >apr&egraves d&eacutec&egraves de Fran&ccediloise BOUDARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right x:num="39503">25-f&eacutevr</td>
      <td >Guyot</td>
      <td >2E777-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td 
  x:str="&agrave Antoine SIMARD de Geoffroy BOUILHON ">&agrave Antoine SIMARD de Geoffroy 
        BOUILHON </td>
      <td  align=right x:num>1157</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right
  x:num="39592">24-mai</td>
      <td >Guyot</td>
      <td >2E777-50</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jacques CYMARD &agrave Pierre GUYOT</td>
      <td  align=right x:num>1156</td>
      <td >(V. SIMARD et M. PETITBOIS)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right
  x:num="39535">28-mars</td>
      <td >Guyot</td>
      <td >2E777-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillme BARUTEAU et Magdelaine SIMARD</td>
      <td  align=right x:num>1156</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right x:num="39979">15-juin</td>
      <td >Lacaton</td>
      <td >2E866-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean YRVOIX et Catherine DELAFONT</td>
      <td  align=right x:num>1213</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right
  x:num="39958">25-mai</td>
      <td >Lacaton</td>
      <td >2E866-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >&agrave Jehan LIZEE et Anne CONSTANTIN</td>
      <td  align=right x:num>1213</td>
      <td >d'une maison &agrave St Andr&eacute d'A&ecirc</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1649</td>
      <td  align=right x:num="39474">27-janv</td>
      <td >Guyot</td>
      <td >2E777-10</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Jehan NOBLESSE et Germain BOILEVIN</td>
      <td  align=right x:num>1157</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1650</td>
      <td  align=right
  x:num="39884">12-mars</td>
      <td >Huguet</td>
      <td >2E785-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Pierre FOURNON (mari de Catherine CARRE)</td>
      <td  align=right x:num>1191</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1650</td>
      <td  align=right
  x:num="39976">12-juin</td>
      <td >Huguet</td>
      <td >2E785-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >des CARRE &agrave Jehan CARRE leur fr&egravere</td>
      <td  align=right x:num>1191</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1651</td>
      <td  align=right x:num="39877">5-mars</td>
      <td >Lacaton</td>
      <td >2E888-10</td>
      <td >Angoul&ecircme</td>
      <td >Afferme</td>
      <td >&agrave Fran&ccedilois COSTE et Marie CHARUAUD</td>
      <td  align=right x:num>1213</td>
      <td >m&eacutetairie &agrave St Martial d'A&ecirc</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1651</td>
      <td  align=right x:num="39078">27-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1119-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Robert RICHON et Marie CAILLAUD</td>
      <td  align=right x:num>946</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right x:num="39922">19-avr</td>
      <td >Rouyer</td>
      <td >2E4965-70</td>
      <td >Ruelle</td>
      <td >Testament</td>
      <td >Helie BERHOME (mari de Fran&ccediloise SEGAIN)</td>
      <td  align=right x:num>1226</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right x:num="39080">29-d&eacutec</td>
      <td >Vachier</td>
      <td >2E1287-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel ROY et Catherine ESCOUPEAU</td>
      <td  align=right x:num>1013</td>
      <td >Fils Martin et J. CONSTANTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39059">08-d&eacutec</td>
      <td >Pillorget</td>
      <td >2E2160-10</td>
      <td >Champniers</td>
      <td >Acquisition</td>
      <td >Gabriel et Helie MESGRET de F. COUPRIE</td>
      <td  align=right x:num>1016</td>
      <td >et Fran&ccediloise POITEVIN sa fe.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39588">20-mai</td>
      <td >Baudet</td>
      <td >2E2788-20</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Guillme MARQUAIS et F&ccediloise GRATEREAU</td>
      <td  align=right x:num>1156</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1652</td>
      <td  align=right
  x:num="39961">28-mai</td>
      <td >Gaignier</td>
      <td >2E583-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Perrine TUILLIER veuve Pierre ARNAUD</td>
      <td  align=right x:num>1205</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39514">07-mars</td>
      <td >Juilhard</td>
      <td >2E861-30</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Jean, Gilles, Marie et Marie MARTIN</td>
      <td  align=right x:num>1138</td>
      <td >Jean LIZEE et Jean GIRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39872">28-f&eacutevr</td>
      <td >Lacaton</td>
      <td >2E889-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean et Jean MARTIN &agrave Arnaud LURAT</td>
      <td  align=right x:num>1205</td>
      <td >Vente de bois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39450">03-janv</td>
      <td >Guyot</td>
      <td >2E780-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Nicolas SURREAU et Marguerite RUET</td>
      <td  align=right x:num>1158</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39009">19-oct</td>
      <td >Vachier</td>
      <td >2E1288-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques MESNARD et Marie RULLIER</td>
      <td  align=right x:num>1000</td>
      <td >de L'Houmeau</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="38935">06-ao&ucirct</td>
      <td >Vachier</td>
      <td >2E1288-20</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Pierre et Jean DURANDEAU son fils</td>
      <td  align=right x:num>1000</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="38724">07-janv</td>
      <td >Pillorget</td>
      <td >2E2160-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Guillaume BAUDRY et Andr&eacutee DELAURIERE</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="38870">02-juin</td>
      <td >Lacoste</td>
      <td >2E2765-10</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Jehan PERROT et Marguerite VIOLLET</td>
      <td  align=right x:num>877</td>
      <td >Acte tronqu&eacute ab&icircm&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39016">26-oct</td>
      <td >Pillorget</td>
      <td >2E2160-30</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jacques DURANDEAU et Anne SURREAU</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39645">16-juil</td>
      <td >Juilhard</td>
      <td >2E861-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Thomas COUPRIE et Marie YRVOIX</td>
      <td  align=right x:num>1138</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39023">02-nov</td>
      <td >Vachier</td>
      <td >2E1288-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois CAILLAUD et Marie ROCHEBON</td>
      <td  align=right x:num>1000</td>
      <td >de L'Houmeau</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="38757">09-f&eacutevr</td>
      <td >Boutillier</td>
      <td >2E224-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean BOUCHERIT et Jehanne MESNARD</td>
      <td  align=right x:num>976</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39866">22-f&eacutevr</td>
      <td >Lacaton</td>
      <td >2E889-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Andr&eacute BRISSON et Marguerite GRATEREAU</td>
      <td  align=right x:num>1205</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="38848">11-mai</td>
      <td >Boutillier</td>
      <td >2E224-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BRISSAUD et Fran&ccediloise ROUGIER</td>
      <td  align=right x:num>976</td>
      <td >Fils de Micheu et M. DAVAILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="40163">16-d&eacutec</td>
      <td >Lacaton</td>
      <td >2E889-40</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Michel BOITEAU chez Me sergier</td>
      <td  align=right x:num>1205</td>
      <td >Fils de Fran&ccedilois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right
  x:num="39920">17-avr</td>
      <td >Lacaton</td>
      <td >2E889-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean ROUHIER et Catherine. TESTEREAU</td>
      <td  align=right x:num>1205</td>
      <td >&agrave Pierre MOUCHIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1653</td>
      <td  align=right x:num="39846">2-f&eacutevr</td>
      <td >Sicard</td>
      <td >2E1189-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Michel, Guillaume, Fran&ccediloise BOILEVIN</td>
      <td  align=right x:num>1377</td>
      <td >de Saint-MIchel</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right x:num="39606">07-juin</td>
      <td >Baudet</td>
      <td >2E2789-20</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Pierre HERAUDEAU et Mathurine NAVARRE</td>
      <td  align=right x:num>1158</td>
      <td >de Bassac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="40004">10-juil</td>
      <td >Lacaton</td>
      <td >2E890-10</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Cl&eacutement BERTHOME gabarrier</td>
      <td  align=right x:num>1175</td>
      <td >&agrave Antoine GUICHARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38875">07-juin</td>
      <td >Pillorget</td>
      <td >2E2161-10</td>
      <td >Champniers</td>
      <td >Renonciation</td>
      <td >Marie COUPRIE</td>
      <td  align=right x:num>1019</td>
      <td >h&eacuter.  Martin et F. CHAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38801">25-mars</td>
      <td >Vachier</td>
      <td >2E1290-120</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean REFRANCHE et Denise NADAUD</td>
      <td  align=right x:num>976</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38968">08-sept</td>
      <td >Gibaud</td>
      <td >2E664-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan LIZEE et Jehanne BARREAU</td>
      <td  align=right x:num>915</td>
      <td >Fils de J. et Col. SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="40005">11-juil</td>
      <td >Lacaton</td>
      <td >2E890-20</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Cl&eacutement BERTHOME gabarrier</td>
      <td  align=right x:num>1175</td>
      <td >&agrave Antoine GUICHARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38931">02-ao&ucirct</td>
      <td >Vachier</td>
      <td >2E1290-180</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre DELABAURIE et Guillemette PAPIN</td>
      <td  align=right x:num>977</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38801">25-mars</td>
      <td >Gibaud</td>
      <td >2E664-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Philippe BOYTAUD &agrave Jacques CASTAIGNE</td>
      <td  align=right x:num>915</td>
      <td >Vente de cire</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38814">07-avr</td>
      <td >Vachier</td>
      <td >2E1290-130</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Pierre RIFFAUD chez Jehan LIMOUSIN</td>
      <td  align=right x:num>976</td>
      <td >Fils de Olivier et J. DOVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="40152">5-d&eacutec</td>
      <td >Lacaton</td>
      <td >2E890-40</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Jean IRVOIX fils de Philippe</td>
      <td  align=right x:num>1175</td>
      <td >&agrave Jean IRVOIX fils de Pierre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="39029">08-nov</td>
      <td >Vachier</td>
      <td >2E1290-190</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois DAVID et Catherine ALBERT</td>
      <td  align=right x:num>977</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="39359">04-oct</td>
      <td >Grassin</td>
      <td >2E4620-10</td>
      <td >La Rochef.</td>
      <td >Transaction</td>
      <td >Pierre DARS et L&eacuteonard VILLEMANDY</td>
      <td  align=right x:num>1048</td>
      <td >Marchand de La Rochefoucauld</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="39429">13-d&eacutec</td>
      <td >Grassin</td>
      <td >2E4620-20</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Pierre DARS &agrave Jean Jacques GOBELET</td>
      <td  align=right x:num>1048</td>
      <td >Marchand de La Rochefoucauld</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="39504">26-f&eacutevr</td>
      <td >Baudet</td>
      <td >2E2789-10</td>
      <td >Echallat</td>
      <td >Vente</td>
      <td >Guillaume MARQUAIS &agrave Pierre GRATEREAU</td>
      <td  align=right x:num>1158</td>
      <td >et Fr. GRATEREAU fem. de Gui.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38819">12-avr</td>
      <td >Vachier</td>
      <td >2E1290-140</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Thomas CAILLAUD et Isabelle ROY</td>
      <td  align=right x:num>976</td>
      <td >Fille  Martin et J. CONSTANTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38006">20-janv</td>
      <td >Ferraud</td>
      <td >2E30-10</td>
      <td >Agris</td>
      <td >Mariage</td>
      <td >Jean DELABROSSE et Marie FOUCAUD</td>
      <td  align=right x:num>566</td>
      <td >Pierre, Elie, Catherine DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="40110">24-oct</td>
      <td >Lacaton</td>
      <td >2E890-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel PETIT et Marie TARDAT</td>
      <td  align=right x:num>1175</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38826">19-avr</td>
      <td >Gibaud</td>
      <td >2E664-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois AUDIER et Antoinette BOILEAU</td>
      <td  align=right x:num>915</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="39975">11-juin</td>
      <td >Gaignier</td>
      <td >2E583-40</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Jean TOURNIER fils de Pierre</td>
      <td  align=right x:num>1205</td>
      <td >chez Pierre LIMOUSIN Me. cordonnier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38859">22-mai</td>
      <td >Vachier</td>
      <td >2E1290-170</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Fran&ccedilois LAUDAIS et Louise BONNORON</td>
      <td  align=right x:num>977</td>
      <td >&agrave L&eacuteonard AUGEREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="38833">26-avr</td>
      <td >Vachier</td>
      <td >2E1290-160</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan BOYTAUD et Marie DOVEAU</td>
      <td  align=right x:num>977</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right x:num="40189">11-janv</td>
      <td >Pechillon</td>
      <td >2E2621-10</td>
      <td >La Couronne</td>
      <td >Quittance</td>
      <td >Pierre MESLIER aux GENETEAUx</td>
      <td  align=right x:num>1501</td>
      <td >Pierre, Jacques et Michel (et Helie ?)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1654</td>
      <td  align=right
  x:num="40229">20-f&eacutevr</td>
      <td >Pechillon</td>
      <td >2E2621-20</td>
      <td >La Couronne</td>
      <td >Vente</td>
      <td >Pierre GENETEAU &agrave Jacques son fr&egravere</td>
      <td  align=right x:num>1501</td>
      <td >fils de Jean et Jeanne BOISDENET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right x:num="40031">6-ao&ucirct</td>
      <td >Huguet Jean</td>
      <td >2E788-10</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >Jean AUDOUIN &agrave Dame Fran&ccediloise LURAT</td>
      <td  align=right x:num>1195</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39922">19-avr</td>
      <td >Lacaton</td>
      <td >2E891-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Helie BERTHOMME</td>
      <td  align=right x:num>1174</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39120">07-f&eacutevr</td>
      <td >Grassin</td>
      <td >2E4621-10</td>
      <td >La Rochef.</td>
      <td >Quittance</td>
      <td >Pierre DARS &agrave Guillaume PETIT</td>
      <td  align=right x:num>1048</td>
      <td >Marchand de La Rochefoucauld</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="38658">2-nov</td>
      <td >Vachier</td>
      <td >2E1292-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Jehan BALLANGE &agrave Jehan LIZEE et Bert. ROUX</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="38408">25-f&eacutevr</td>
      <td >Vachier</td>
      <td >2E1292-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Michelle ROY</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="38776">28-f&eacutevr</td>
      <td >Lacoste</td>
      <td >2E2765-20</td>
      <td >Dirac</td>
      <td >Paiement</td>
      <td >Nicolas, Jean et fr&egraveres &agrave Germaine SIMARD</td>
      <td  align=right x:num>877</td>
      <td >et Nicolas VERGNAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="38604">9-sept</td>
      <td >Vachier</td>
      <td >2E1292-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel BOYTAUD et Jehanne ROUSSY</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="38878">10-juin</td>
      <td >Boutillier</td>
      <td >2E224-40</td>
      <td >Lhoumeau</td>
      <td >Testament</td>
      <td >Marguerite RIFFAUD</td>
      <td  align=right x:num>976</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39088">06-janv</td>
      <td >Desaunieres</td>
      <td >2E4591-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Pierre DARS &agrave Marie PASQUET</td>
      <td  align=right x:num>1091</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39033">12-nov</td>
      <td >Gibaud</td>
      <td >2E665-20</td>
      <td >Angoul&ecircme</td>
      <td >Syndicat</td>
      <td >Des Ma&icirctres sergiers d'Angoul&ecircme</td>
      <td  align=right x:num>911</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="39037">16-nov</td>
      <td >Gibaud</td>
      <td >2E665-10</td>
      <td >Angoul&ecircme</td>
      <td >R&eacuteception</td>
      <td >Michel BOITEAU comme ma&icirctre sergier</td>
      <td  align=right x:num>911</td>
      <td >Fils de Fran&ccedilois BOISTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right x:num="40188">10-janv</td>
      <td >Pechillon</td>
      <td >2E2621-30</td>
      <td >La Couronne</td>
      <td >Mariage</td>
      <td >Hilaire LIET et Marquise GRAZILLIER</td>
      <td  align=right x:num>1501</td>
      <td class=xl3520222>fils Guillme. et Gabrielle BOISTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1655</td>
      <td  align=right
  x:num="40193">15-janv</td>
      <td >Pechillon</td>
      <td >2E2621-40</td>
      <td >La Couronne</td>
      <td >Transaction</td>
      <td >Helie GENETEAU et Pierre et Jacques ses fr&egraveres</td>
      <td  align=right x:num>1501</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right x:num="39824">11-janv</td>
      <td >Huguet Jean</td>
      <td >2E789-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine GOUJON et Marie TOURNIER</td>
      <td  align=right x:num>1195</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39869">25-f&eacutevr</td>
      <td >Huguet Jean</td>
      <td >2E789-20</td>
      <td >Angoul&ecircme</td>
      <td >Acquisition</td>
      <td >pour Jacq. DESMAISONS de Pierre ARONDEAU</td>
      <td  align=right x:num>1195</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39028">07-nov</td>
      <td >Lacoste</td>
      <td >2E2765-30</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Robert BERTRAND et Louise ROUHIER</td>
      <td  align=right x:num>877</td>
      <td >Paul et M&eacutery BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="38893">25-juin</td>
      <td >Boutillier</td>
      <td >2E224-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean ARNAUD et Jeanne ROY</td>
      <td  align=right x:num>976</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="40003">9-juil</td>
      <td >Huguet Jean</td>
      <td >2E789-40</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jean LIZEE gabarrier et BASSOULET et RIGAUD</td>
      <td  align=right x:num>1195</td>
      <td >pour coups de baston</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39208">06-mai</td>
      <td >Desaunieres</td>
      <td >2E4591-20</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >Pierre DODET &agrave Guillaume DARS</td>
      <td  align=right x:num>1091</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39168">27-mars</td>
      <td >Grassin</td>
      <td >2E4622-20</td>
      <td >La Rochef.</td>
      <td >Convention</td>
      <td >Guillaume DARS et Geremie MARANTIN</td>
      <td  align=right x:num>1048</td>
      <td >Lab &agrave boeufs de La Rochefouc.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39604">05-juin</td>
      <td >Micheau</td>
      <td >2E1018-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean SIMARD et Antoinette GILLIBERT</td>
      <td  align=right x:num>1124</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="38920">22-juil</td>
      <td >Col</td>
      <td >2E4535-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Guillaume DARS et Geremie MARANTIN</td>
      <td  align=right x:num>1030</td>
      <td >aux BARRIEREs (de noix. . .)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39165">24-mars</td>
      <td >Grassin</td>
      <td >2E4622-10</td>
      <td >La Rochef.</td>
      <td >Convention</td>
      <td >Guillaume DARS et Geremie MARANTIN</td>
      <td  align=right x:num>1048</td>
      <td >Lab &agrave boeufs de La Rochefouc.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="40049">24-ao&ucirct</td>
      <td >Lacaton</td>
      <td >2E892-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean DIEUAIDE &agrave Paul VANDEVELDE</td>
      <td  align=right x:num>1205</td>
      <td >de papier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="39997">03-juil</td>
      <td >Lacaton</td>
      <td >2E892-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Guillaume GRATEREAU &agrave Michel son p&egravere</td>
      <td  align=right x:num>1205</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right x:num="40469">18-oct</td>
      <td >Pechillon</td>
      <td >2E2622-10</td>
      <td >La Couronne</td>
      <td >Reconnaissance</td>
      <td >Marie FOUCHER veuve Abraham MICHEAU</td>
      <td  align=right x:num>1501</td>
      <td >&agrave Michel GENETEAU son gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1656</td>
      <td  align=right
  x:num="40519">7-d&eacutec</td>
      <td >Couste</td>
      <td >2E3496-10</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Jacques BALLUTEAU et Marie GOBEAU</td>
      <td  align=right x:num>1495</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right x:num="39590">22-mai</td>
      <td >Baudet</td>
      <td >2E2790-10</td>
      <td >Echallat</td>
      <td >Partage</td>
      <td >Jean BOISDON et Yolande DE ROUFFIGNAC</td>
      <td  align=right x:num>1159</td>
      <td >et Ant. TALLON femme de Jean</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39644">15-juil</td>
      <td >Guyot</td>
      <td >2E781-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Etienne BIARD et Jehanne MORISSET</td>
      <td  align=right x:num>1174</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39105">23-janv</td>
      <td >Grassin</td>
      <td >2E4624-10</td>
      <td >La Rochef.</td>
      <td >Bail</td>
      <td >Guillaume DARS &agrave Pierre FORT</td>
      <td  align=right x:num>1049</td>
      <td >Lab &agrave boeufs de Saint-Projet</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="38751">03-f&eacutevr</td>
      <td >Lacoste</td>
      <td >2E2765-40</td>
      <td >Dirac</td>
      <td >Accord</td>
      <td >Fran&ccedilois GAUVRY et Jean SIMARD</td>
      <td  align=right x:num>877</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39333">08-sept</td>
      <td >Grassin</td>
      <td >2E4625-10</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >L&eacuteonard LABEILLE de Guillaume DARS</td>
      <td  align=right x:num>1049</td>
      <td >Lab &agrave boeufs de Saint-Projet</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39355">30-sept</td>
      <td >Desaunieres</td>
      <td >2E4591-30</td>
      <td >La Rochef.</td>
      <td >Acte</td>
      <td >Entre Guillaume DARS et sa fille Marie</td>
      <td  align=right x:num>1091</td>
      <td >fuite d'Etienne MAYOU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="38958">29-ao&ucirct</td>
      <td >Boutillier</td>
      <td >2E224-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre COUPEAU et Jeanne ASSALY</td>
      <td  align=right x:num>976</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="39339">14-sept</td>
      <td >Grassin</td>
      <td >2E4625-20</td>
      <td >La Rochef.</td>
      <td >R&eacutesignation</td>
      <td >Pierre DARS et H&eacutelie DARS</td>
      <td  align=right x:num>1049</td>
      <td >Cur&eacute de Fleurignac et clerc</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1657</td>
      <td  align=right
  x:num="38591">27-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1061-100</td>
      <td >Angoul&ecircme</td>
      <td >Location</td>
      <td >Andr&eacute BRISSON et Marguerite GRATEREAU</td>
      <td  align=right x:num>860</td>
      <td >&agrave Martial PESNEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39805">23-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1018-30</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jean ROUHIER et Fran&ccediloise CONSTANTIN</td>
      <td  align=right x:num>1124</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39245">12-juin</td>
      <td >Grassin</td>
      <td >2E4626-30</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >Guillaume DARS &agrave L&eacuteonard LABEILLE</td>
      <td  align=right x:num>1051</td>
      <td >Lab &agrave boeufs de Saint-Projet</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38886">18-juin</td>
      <td >Gibaud</td>
      <td >2E668-20</td>
      <td >Angoul&ecircme</td>
      <td >R&eacuteception</td>
      <td >Thomas DAVID</td>
      <td  align=right x:num>938</td>
      <td >Comme ma&icirctre sergier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39340">15-sept</td>
      <td >Grassin</td>
      <td >2E4627-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Catherine CHEROT &agrave Abraham BARBET</td>
      <td  align=right x:num>1051</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl3620222 align=right x:num>1658</td>
      <td class=xl3720222 align=right
  x:num="40171">24-d&eacutec</td>
      <td class=xl3620222>Huguet Jean</td>
      <td class=xl3620222>2E790-30</td>
      <td class=xl3620222>Angoul&ecircme</td>
      <td class=xl3620222>Rôle</td>
      <td class=xl3620222>Charras</td>
      <td class=xl3620222 align=right x:num>1200</td>
      <td class=xl3620222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39149">08-mars</td>
      <td >Grassin</td>
      <td >2E4626-20</td>
      <td >La Rochef.</td>
      <td >Partage</td>
      <td >Guillaume DARS, Marie BARBET</td>
      <td  align=right x:num>1051</td>
      <td >Micheau DESIGNAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39112">30-janv</td>
      <td >Desaunieres</td>
      <td >2E4592-10</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >Pierre MAYOU &agrave Guillaume DARS</td>
      <td  align=right x:num>1092</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39566">28-avr</td>
      <td >Juilhard</td>
      <td >2E862-10</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >Helie DARS</td>
      <td  align=right x:num>1136</td>
      <td > neveu de Pierre DARS cur&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39127">14-f&eacutevr</td>
      <td >Desaunieres</td>
      <td >2E4592-20</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Ambroise TASCHIER et Catherine DARS</td>
      <td  align=right x:num>1092</td>
      <td >Fille de Guillaume</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38897">29-juin</td>
      <td >Gibaud</td>
      <td >2E668-40</td>
      <td >Angoul&ecircme</td>
      <td >R&eacuteception</td>
      <td >Jehanne SIMARD</td>
      <td  align=right x:num>938</td>
      <td >Au Carmel</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="39098">16-janv</td>
      <td >Grassin</td>
      <td >2E4626-10</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >Catherine CHEROT veuve de Pierre DARS</td>
      <td  align=right x:num>1051</td>
      <td >de Micheau DESIGNAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38761">13-f&eacutevr</td>
      <td >Gibaud</td>
      <td >2E668-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan BOYTEAU et Perrine PREVOST</td>
      <td  align=right x:num>938</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38835">28-avr</td>
      <td >Robin</td>
      <td >2E1109-110</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jacques COUPRIE et Denise COUSTURIER</td>
      <td  align=right x:num>954</td>
      <td >&agrave Pierre SEGUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38968">08-sept</td>
      <td >Robin</td>
      <td >2E1109-120</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois DAVID et Catherine DELACROIX</td>
      <td  align=right x:num>954</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38792">16-mars</td>
      <td >Ferrand</td>
      <td >2E32-10</td>
      <td >Agris</td>
      <td >Echange</td>
      <td >Blais GOUYON et Marie ALLANORE</td>
      <td  align=right x:num>1031</td>
      <td >et Louis et Jehan RAVIONs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38903">05-juil</td>
      <td >Gibaud</td>
      <td >2E668-50</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Denis DELAHAY &agrave Fran&ccedilois IRVOIX</td>
      <td  align=right x:num>938</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="40100">14-oct</td>
      <td >Huguet Jean</td>
      <td >2E790-10</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >&agrave Philippe BOISTEAU et Fran&ccedilois DECARSELES</td>
      <td  align=right x:num>1200</td>
      <td >pi&egravece de pr&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="38835">28-avr</td>
      <td >Robin</td>
      <td >2E1109-120</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean DAVID et Marie DELACROIX</td>
      <td  align=right x:num>954</td>
      <td >&agrave Marie VERGNAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="40104">18-oct</td>
      <td >Huguet Jean</td>
      <td >2E790-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >entre Ph. BOISTEAU et Fr. DECARSELES</td>
      <td  align=right x:num>1200</td>
      <td >pi&egravece de pr&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right x:num="40282">14-avr</td>
      <td >Pechillon</td>
      <td >2E2622-10</td>
      <td >La Couronne</td>
      <td >Mariage</td>
      <td >Charles CONSTANTIN et Marie BERNARD</td>
      <td  align=right x:num>1501</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1658</td>
      <td  align=right
  x:num="40282">14-avr</td>
      <td >Pechillon</td>
      <td >2E2622-20</td>
      <td >La Couronne</td>
      <td >Mariage</td>
      <td >Charles CONSTANTIN et Marie BERNARD</td>
      <td  align=right x:num>1501</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right x:num="39588">20-mai</td>
      <td >Huguet</td>
      <td >2E798-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Pierre MESNARD</td>
      <td  align=right x:num>1155</td>
      <td >&agrave Jeanne CONSTANTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38779">03-mars</td>
      <td >Robin</td>
      <td >2E1109-130</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean LURAT &agrave Denis LURAT son p&egravere</td>
      <td  align=right x:num>954</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39080">29-d&eacutec</td>
      <td >Gibaud</td>
      <td >2E669-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Jean ROY et Marguerite ROUX</td>
      <td  align=right x:num>941</td>
      <td >&agrave Paul MESNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39116">03-f&eacutevr</td>
      <td >Grassin</td>
      <td >2E4628-10</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Jean DODET et Catherine DARS</td>
      <td  align=right x:num>1054</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39080">29-d&eacutec</td>
      <td >Gibaud</td>
      <td >2E669-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Jean ROY et Marguerite ROUX</td>
      <td  align=right x:num>941</td>
      <td >&agrave Mathurin LANDRY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38733">16-janv</td>
      <td >Pillorget</td>
      <td >2E2162-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Pierre COUPRIE et Anne DELONGEVILLE</td>
      <td  align=right x:num>1021</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="40162">15-d&eacutec</td>
      <td >Huguet Jean</td>
      <td >2E791-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Hjacques SURREAU et Marie CHARRUAUD</td>
      <td  align=right x:num>1200</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39385">30-oct</td>
      <td >Desaunieres</td>
      <td >2E4592-30</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Aymard SEGUIN et Simone DARS</td>
      <td  align=right x:num>1092</td>
      <td >Fille de Guillaume</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38995">05-oct</td>
      <td >Gibaud</td>
      <td >2E669-20</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Jean BIARD recouvreur et RP Cordeliers</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38441">30-mars</td>
      <td >Peuple</td>
      <td >2E1061-140</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Louis DESCARCELLE &agrave L&eacuteonard CERIT</td>
      <td  align=right x:num>860</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="38733">16-janv</td>
      <td >Pillorget</td>
      <td >2E2162-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Marc DELONGEVILLE et Jeanne COUPRIE</td>
      <td  align=right x:num>1021</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39266">03-juil</td>
      <td >Grassin</td>
      <td >2E4629-10</td>
      <td >La Rochef.</td>
      <td >Echange</td>
      <td >Marie DARS et Marie BARBET</td>
      <td  align=right x:num>1054</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="39584">16-mai</td>
      <td >Huguet</td>
      <td >2E798-10</td>
      <td >Angoul&ecircme</td>
      <td >Donnation</td>
      <td >Pierre MESNARD et Jeanne CONSTANTIN</td>
      <td  align=right x:num>1155</td>
      <td >Donnation mutuelle</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1659</td>
      <td  align=right
  x:num="40159">12-d&eacutec</td>
      <td >Huguet Jean</td>
      <td >2E791-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean MAYOU &agrave Philippe BOISTEAU</td>
      <td  align=right x:num>1200</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38494">22-mai</td>
      <td >Peuple</td>
      <td >2E1061-170</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jean LIMOUSIN et Catherine TEXIER</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38452">10-avr</td>
      <td >Peuple</td>
      <td >2E1061-150</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Fran&ccedilois YRVOIX et Antoinette ROY</td>
      <td  align=right x:num>861</td>
      <td >de Fran&ccedilois NORMAND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39275">12-juil</td>
      <td >Grassin</td>
      <td >2E4631-10</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >Marie DARS et Catherine CHEROT</td>
      <td  align=right x:num>1042</td>
      <td >&agrave Marie BARBET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38874">06-juin</td>
      <td >Boutillier</td>
      <td >2E225-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Alexandre BARRATE et Penote ROY</td>
      <td  align=right x:num>969</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39134">21-f&eacutevr</td>
      <td >Grassin</td>
      <td >2E4630-10</td>
      <td >La Rochef.</td>
      <td >Echange</td>
      <td >Guillaume DARS et Marie BARBET</td>
      <td  align=right x:num>1067</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39942">9-mai</td>
      <td >Huguet Jean</td>
      <td >2E792-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Mac&eacute ROY et Marie MARTIN</td>
      <td  align=right x:num>1200</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38538">5-juil</td>
      <td >Peuple</td>
      <td >2E1061-180</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois ROUSSEAU et Marguerite AUDOUIN</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39772">20-nov</td>
      <td >Huguet</td>
      <td >2E798-30</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >pour Jean BIARD de Marie BIARD sa s&oeligur</td>
      <td  align=right x:num>1155</td>
      <td >Me recouvreur de L'Houmeau</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39029">08-nov</td>
      <td >Robin</td>
      <td >2E1109-180</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Colette SIMARD &agrave Pierre FEBURE</td>
      <td  align=right x:num>954</td>
      <td >Tous ses biens</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39170">29-mars</td>
      <td >Grassin</td>
      <td >2E4630-20</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >Guillaume DARS de Fran&ccedilois LABEILLE</td>
      <td  align=right x:num>1067</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38681">25-nov</td>
      <td >Peuple</td>
      <td >2E1061-190</td>
      <td >Angoul&ecircme</td>
      <td >Droit c&eacuted&eacute</td>
      <td >Catherine FAURE et Andr&eacute GUYOT</td>
      <td  align=right x:num>860</td>
      <td >&agrave Nicolas COUPRIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39908">05-avr</td>
      <td >Gaignier</td>
      <td >2E586-10</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Philippe et Marc BOISTEAU fr&egraveres</td>
      <td  align=right x:num>1205</td>
      <td >D&eacutemolition d'un colombier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38832">25-avr</td>
      <td >Boutillier</td>
      <td >2E225-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre RIFFAUD et Jeanne JAYET</td>
      <td  align=right x:num>969</td>
      <td >Fille de J. et Marg. MAUBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38838">01-mai</td>
      <td >Robin</td>
      <td >2E1109-170</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Pierre GUYOT et Antoinette ROY</td>
      <td  align=right x:num>954</td>
      <td >Femme de Fran&ccedilois YRVOIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38939">10-ao&ucirct</td>
      <td >Gibaud</td>
      <td >2E669-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Etienne ROY et Louise PESNEAU</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39060">09-d&eacutec</td>
      <td >Gibaud</td>
      <td >2E669-70</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Marie BIARD &agrave Jean BIARD</td>
      <td  align=right x:num>941</td>
      <td >Pas enregistr&eacute les personnes</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39063">12-d&eacutec</td>
      <td >Robin</td>
      <td >2E1109-190</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre BOISTEAU et Marie MESLIER</td>
      <td  align=right x:num>954</td>
      <td >Fils de Fran&ccedilois et Y. BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38475">3-mai</td>
      <td >Peuple</td>
      <td >2E1061-160</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean LIMOUSIN et Catherine TEXIER</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="38790">14-mars</td>
      <td >Gibaud</td>
      <td >2E669-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques IMBERT et Anne VARACHE</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39070">19-d&eacutec</td>
      <td >Col</td>
      <td >2E4536-10</td>
      <td >La Rochef.</td>
      <td >D&eacutelib&eacuteration</td>
      <td >Etienne et Fran&ccedilois DOR</td>
      <td  align=right x:num>1028</td>
      <td >Habitants de Chasseneuil</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1660</td>
      <td  align=right
  x:num="39810">28-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1019-100</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Daniel TULLIER et Genevi&egraveve AUDOUIN</td>
      <td  align=right x:num>1133</td>
      <td >procureur au si&egravege pr&eacutesidial</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39696">05-sept</td>
      <td >Daniaud</td>
      <td >2E5922-30</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Mathieu MARQUAIS &agrave Jeanne GONTIER</td>
      <td  align=right x:num>1170</td>
      <td >de Fleurac, Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39685">25-ao&ucirct</td>
      <td >Juilhard</td>
      <td >2E863-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Jean BIARD et Jean BOUILHAUD son gendre</td>
      <td  align=right x:num>1137</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39547">09-avr</td>
      <td >Baudet</td>
      <td >2E2791-10</td>
      <td >Echallat</td>
      <td >Ferme</td>
      <td >&agrave Cath. GRATREAU et Pierre BENESTEAU</td>
      <td  align=right x:num>1159</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td >1 f&eacutevrier</td>
      <td >Huguet Jean</td>
      <td >2E793-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Auzanet et Berthom&eacutee BREBINEAU sa fille</td>
      <td  align=right x:num>1203</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39569">01-mai</td>
      <td >Chauvin</td>
      <td >2E306-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean BOUILLAUD et Marie BIARD</td>
      <td  align=right x:num>1124</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39427">11-d&eacutec</td>
      <td >Desaunieres</td>
      <td >2E4592-40</td>
      <td >La Rochef.</td>
      <td >Cession</td>
      <td >Blaise GOYON &agrave Jehan et Charles DARS</td>
      <td  align=right x:num>1092</td>
      <td >ses gendres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td >1 f&eacutevrier</td>
      <td >Huguet Jean</td>
      <td >2E793-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jehan BREBINEAU et Jehan GEOFFROY</td>
      <td  align=right x:num>1203</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39039">18-nov</td>
      <td >Robin</td>
      <td >2E1109-220</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jean BASSET et Fran&ccedilois BOILEVIN</td>
      <td  align=right x:num>954</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="38898">30-juin</td>
      <td >Robin</td>
      <td >2E1109-210</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Gervais BRANGIER et Marguerite BOITEAU</td>
      <td  align=right x:num>955</td>
      <td >Fille de Fran&ccedils. et Y. BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1661</td>
      <td  align=right
  x:num="39590">22-mai</td>
      <td >Daniaud</td>
      <td >2E5922-10</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Mathieu MARQUAIS et Jeanne GONTIER</td>
      <td  align=right x:num>1170</td>
      <td >de Fleurac, Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39063">12-d&eacutec</td>
      <td >Peynaud</td>
      <td >2E2766-10</td>
      <td >Dirac</td>
      <td >Vente</td>
      <td >Antoine et Fran&ccedilois COUPRIE son fils</td>
      <td  align=right x:num>874</td>
      <td >&agrave Charles COUPILLAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39540">02-avr</td>
      <td >Daniaud</td>
      <td >2E5923-110</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois GAUDON et Catherine GONTIER</td>
      <td  align=right x:num>1169</td>
      <td >fr&egravere d'Antoine et s&oeligur de Perrine</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39787">05-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1020-30</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Philippe et Pierre BOISTEAU</td>
      <td  align=right x:num>1133</td>
      <td >fils de Gervais et Lisette SALLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39012">22-oct</td>
      <td >Boutillier</td>
      <td >2E225-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Robert ROY et Catherine RAVANEAUX</td>
      <td  align=right x:num>969</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="38834">27-avr</td>
      <td >Robin</td>
      <td >2E1109-240</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jean LIZEE</td>
      <td  align=right x:num>955</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39540">02-avr</td>
      <td >Daniaud</td>
      <td >2E5923-110</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Antoine GAUDON et Perrine GONTIER</td>
      <td  align=right x:num>1169</td>
      <td >fr&egravere de Fran&ccedilois et s&oeligur de Cath.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39772">20-nov</td>
      <td >Dumontet</td>
      <td >2E2734-100</td>
      <td >Dignac</td>
      <td >Cession</td>
      <td >Fran&ccedilois BIARD et Pierre RENON</td>
      <td  align=right x:num>1153</td>
      <td >&agrave Mathurin PIERRE notaire</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39475">28-janv</td>
      <td >Chauvin</td>
      <td >2E306-20</td>
      <td >Lhoumeau</td>
      <td >Acte</td>
      <td >Antoine ROY ma&icirctre de gabarre</td>
      <td  align=right x:num>1124</td>
      <td >et Pierre COUVRINAUD marchd.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="38529">26-juin</td>
      <td >Peuple</td>
      <td >2E1062-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Philippe et Antoine BOILEVIN</td>
      <td  align=right x:num>859</td>
      <td >P. BOISTEAU, G. BRANGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="38832">25-avr</td>
      <td >Robin</td>
      <td >2E1109-230</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean LIZEE et Marguerite JOUBERT</td>
      <td  align=right x:num>955</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39118">05-f&eacutevr</td>
      <td >Grassin</td>
      <td >2E4632-20</td>
      <td >La Rochef.</td>
      <td >Convention</td>
      <td >Jean et Charles DARS</td>
      <td  align=right x:num>1067</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39318">24-ao&ucirct</td>
      <td >Denis</td>
      <td >2E4578-10</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >Guillaume DARS de Jean DELAVILLE</td>
      <td  align=right x:num>1094</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39669">09-ao&ucirct</td>
      <td >Micheau</td>
      <td >2E1020-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Jacques SUREAU</td>
      <td  align=right x:num>1133</td>
      <td >&agrave Marie CHARRUAULD sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39562">24-avr</td>
      <td >Daniaud</td>
      <td >2E5923-120</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jean MARTIN et Marie GONTIER</td>
      <td  align=right x:num>1169</td>
      <td >3e mariage de Marie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="38916">18-juil</td>
      <td >Boutillier</td>
      <td >2E225-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean COUPEAU et Philippe ARDOIN</td>
      <td  align=right x:num>969</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39565">27-avr</td>
      <td >Baudet</td>
      <td >2E2791-20</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Pierre LAMBERT et Jeanne BENESTEAU</td>
      <td  align=right x:num>1159</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39088">06-janv</td>
      <td >Grassin</td>
      <td >2E4632-10</td>
      <td >La Rochef.</td>
      <td >Bail</td>
      <td >Guillaume DARS et Fran&ccediloise CAILHETRAU</td>
      <td  align=right x:num>1067</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39735">14-oct</td>
      <td >Micheau</td>
      <td >2E1020-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jacques et Jeanne LIZEE</td>
      <td  align=right x:num>1133</td>
      <td >enfants de Jean et Marie MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1662</td>
      <td  align=right
  x:num="39197">25-avr</td>
      <td >Grassin</td>
      <td >2E4632-30</td>
      <td >La Rochef.</td>
      <td >Echange</td>
      <td >Guillaume DARS et Raymond FOUCAUD</td>
      <td  align=right x:num>1067</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39786">04-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5923-200</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Etienne GONTIER et Jeanne GIRAUDEAU sa fe.</td>
      <td  align=right x:num>1169</td>
      <td >&agrave Fr. et Et. TALLON p&egravere et fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39753">01-nov</td>
      <td >Chauvin</td>
      <td >2E306-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >L&eacuteonard BARRAUD et Catherine BENESTEAU</td>
      <td  align=right x:num>1124</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39901">29-mars</td>
      <td >Gaignier</td>
      <td >2E586-20</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Helie SURREAU fils de Denis</td>
      <td  align=right x:num>1205</td>
      <td >chez Simon DUMERGUE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39590">22-mai</td>
      <td >Micheau</td>
      <td >2E1021-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean AUDOUIN et Catherine BOILEVIN</td>
      <td  align=right x:num>1136</td>
      <td >de Saint Martin d'Angoul&ecircme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38962">02-sept</td>
      <td >Clochard</td>
      <td >2E408-40</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >Pierre RIFFAUD et Jeanne JAYET</td>
      <td  align=right x:num>968</td>
      <td >&agrave Jean COUSTURIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39553">15-avr</td>
      <td >Daniaud</td>
      <td >2E5923-150</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Pierre HERAUDEAU et Jehanne CARRE</td>
      <td  align=right x:num>1170</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39704">13-sept</td>
      <td >Daniaud</td>
      <td >2E5923-180</td>
      <td >Vaux-Rouillac</td>
      <td >Acte</td>
      <td >Jean et Jacques BOISDON fils de Fiacre</td>
      <td  align=right x:num>1169</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39648">19-juil</td>
      <td >Dumontet</td>
      <td >2E2734-110</td>
      <td >Dignac</td>
      <td >Mariage</td>
      <td >Jean BIARD et Berthom&eacutee GALLANT</td>
      <td  align=right x:num>1153</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39490">12-f&eacutevr</td>
      <td >Huguet</td>
      <td >2E800-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Jehan et Jacques LIZEE p&egravere et fils</td>
      <td  align=right x:num>1151</td>
      <td >et Jehanne LIZEE sa soeur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39708">17-sept</td>
      <td >Daniaud</td>
      <td >2E5923-190</td>
      <td >Vaux-Rouillac</td>
      <td >Quittance</td>
      <td >Pierre HERAUDEAU &agrave Pierre MARTIN</td>
      <td  align=right x:num>1169</td>
      <td >de Fleurac, Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38837">30-avr</td>
      <td >Renon</td>
      <td >2E2938-140</td>
      <td >Garat</td>
      <td >Testament</td>
      <td >M&eacuteonard COUPRIE pour Antoine COUPRIE</td>
      <td  align=right x:num>974</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38723">06-janv</td>
      <td >Boutillier</td>
      <td >2E225-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre BARRAUD et Marie RUSLIER</td>
      <td  align=right x:num>969</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39628">29-juin</td>
      <td >Daniaud</td>
      <td >2E5925-20</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacutelaissement</td>
      <td >Philippe GONTIER &agrave Jeanne sa fille</td>
      <td  align=right x:num>1170</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38933">04-ao&ucirct</td>
      <td >Clochard</td>
      <td >2E408-20</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >&agrave Fran&ccedilois TOURNIER et Marguerite GODIN</td>
      <td  align=right x:num>965</td>
      <td >Vente de vin</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39078">27-d&eacutec</td>
      <td >Renon</td>
      <td >2E2938-160</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Fran&ccedilois COUPRIE et Jehanne ANGELIER</td>
      <td  align=right x:num>974</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39475">28-janv</td>
      <td >Daniaud</td>
      <td >2E5923-130</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >Jeanne GONTIER veuve Mathieu MARQUAIS</td>
      <td  align=right x:num>1170</td>
      <td >des meubles de son mari</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39081">30-d&eacutec</td>
      <td >Renon</td>
      <td >2E2938-170</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Fran&ccedilois CHAIGNON et Marie SIMARD</td>
      <td  align=right x:num>974</td>
      <td >et F. CHAIGNON et ANGELIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38772">24-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1110-120</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Denis MESNARD</td>
      <td  align=right x:num>956</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="38804">28-mars</td>
      <td >Renon</td>
      <td >2E2938-130</td>
      <td >Garat</td>
      <td >Transaction</td>
      <td >Jean BERTRAND et Antoinette GILLIBERT</td>
      <td  align=right x:num>974</td>
      <td >et Jean SIMARD beau-p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39598">30-mai</td>
      <td >Daniaud</td>
      <td >2E5925-10</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >Guillaume BONJOUR et Mauricette GUIONNET</td>
      <td  align=right x:num>1170</td>
      <td >et Marie BONJOUR s&oeligur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39461">14-janv</td>
      <td >Mamain</td>
      <td >2E924-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques LIZEE et Mathurine RODEAU</td>
      <td  align=right x:num>1140</td>
      <td class=xl3820222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1663</td>
      <td  align=right
  x:num="39659">30-juil</td>
      <td >Couppeau J.</td>
      <td >2E417-10</td>
      <td >St-Cybard</td>
      <td >Mariage</td>
      <td >Fran&ccedilois CHASSAIGNE et Jacquette BIARD</td>
      <td  align=right x:num>1143</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38751">03-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1110-160</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Guillaume BOILEAU &agrave Phil. BOISTEAU</td>
      <td  align=right x:num>957</td>
      <td >J.ROUFFIGNAC et RATINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Renon</td>
      <td >2E2938-200</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Louis TOURNIER et Marguerite SIMONNOT</td>
      <td  align=right x:num>974</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38848">11-mai</td>
      <td >Robin</td>
      <td >2E1110-200</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Louis SURREAU et Genevi&egraveve GODIN</td>
      <td  align=right x:num>956</td>
      <td >Fils de Pierre et Mad. ROUGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38842">05-mai</td>
      <td >Robin</td>
      <td >2E1110-180</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Louis DESCARSELLE</td>
      <td  align=right x:num>956</td>
      <td >des meub. de  Marc BOITAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38834">27-avr</td>
      <td >Robin</td>
      <td >2E1110-170</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Cl&eacutement LIZEE et Marie DELAGE</td>
      <td  align=right x:num>957</td>
      <td >Fils de J. et J. BOURDAGE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39634">05-juil</td>
      <td >Huguet</td>
      <td >2E800-30</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Fran&ccedilois SALLEE et Louis DECARSELLE</td>
      <td  align=right x:num>1151</td>
      <td >bats de chevaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39471">24-janv</td>
      <td >Huguet</td>
      <td >2E800-20</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Jehan LIZEE pour Jehanne sa fille</td>
      <td  align=right x:num>1151</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39775">23-nov</td>
      <td >Dumontet</td>
      <td >2E2734-130</td>
      <td >Dignac</td>
      <td >Mariage</td>
      <td >Nicolas BIARD et Jeanne VERGERON</td>
      <td  align=right x:num>1153</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39006">16-oct</td>
      <td >Robin</td>
      <td >2E1110-220</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel BOITEAUD et Michelle LECLERQ</td>
      <td  align=right x:num>956</td>
      <td >Fils de Fr. et Isabelle BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38834">27-avr</td>
      <td >Robin</td>
      <td >2E1110-170</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume BERNAZEAU et Marie LIZEE</td>
      <td  align=right x:num>957</td>
      <td >Fille de Cl&eacutement LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39489">11-f&eacutevr</td>
      <td >Dumontet</td>
      <td >2E2734-120</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >Jean BIARD et Berthom&eacutee GALLANT</td>
      <td  align=right x:num>1153</td>
      <td >de Guillazume FOUGERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39688">28-ao&ucirct</td>
      <td >Huguet</td>
      <td >2E800-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan COCUAUD et Jehanne LIZEE</td>
      <td  align=right x:num>1151</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38844">07-mai</td>
      <td >Robin</td>
      <td >2E1110-190</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jehan CHARREAU &agrave Michel ROY</td>
      <td  align=right x:num>957</td>
      <td >et Marie CHARREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38752">04-f&eacutevr</td>
      <td >Clochard</td>
      <td >2E408-30</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >Fran&ccedilois BOISDON et Antoinette BERNARD</td>
      <td  align=right x:num>968</td>
      <td >du Sr. de Maigne Gagnaud</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39065">14-d&eacutec</td>
      <td >Robin</td>
      <td >2E1110-230</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan RIFFAUD et Guillemine DELAHAYE</td>
      <td  align=right x:num>956</td>
      <td >Fils de Eti. et Jehanne RUHET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="40028">3-ao&ucirct</td>
      <td >Huguet Jean</td>
      <td >2E795-20</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Robert &agrave Mass&eacute ROY son fils</td>
      <td  align=right x:num>1203</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39768">16-nov</td>
      <td >Mamain</td>
      <td >2E924-30</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Jean LIZEE et Jean PAPIN avec P. MOREAU</td>
      <td  align=right x:num>1140</td>
      <td >(tireurs de pierres et sable)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="38398">15-f&eacutevr</td>
      <td >Peuple</td>
      <td >2E1063-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jeanne LORMAND veuve Antoine YRVOIX</td>
      <td  align=right x:num>859</td>
      <td >J. MATHIEU et Je YRVOIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1664</td>
      <td  align=right
  x:num="39562">24-avr</td>
      <td >Baudet</td>
      <td >2E2792-10</td>
      <td >Echallat</td>
      <td >Transaction</td>
      <td >Antoine QUILLET et Pierre BENESTEAU</td>
      <td  align=right x:num>1171</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38921">23-juil</td>
      <td >Clochard</td>
      <td >2E408-90</td>
      <td >Lhoumeau</td>
      <td >D&eacuteclaration</td>
      <td >Philippe ROY</td>
      <td  align=right x:num>968</td>
      <td >(et Marguerite ROY sa s&oeligur)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38746">29-janv</td>
      <td >Robin</td>
      <td >2E1110-240</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan NOBLESSE et Marie LAMOUREUX</td>
      <td  align=right x:num>957</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38745">28-janv</td>
      <td >Col</td>
      <td >2E4539-10</td>
      <td >La Rochef.</td>
      <td >Transaction</td>
      <td >Jean et Charles DARS et Martial BIAIS</td>
      <td  align=right x:num>1026</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38768">20-f&eacutevr</td>
      <td >Peynaud</td>
      <td >2E2766-30</td>
      <td >Dirac</td>
      <td >Ferme</td>
      <td >Philippe et Jehan BIARD</td>
      <td  align=right x:num>874</td>
      <td >de Fran&ccedilois de LA GARDE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38820">13-avr</td>
      <td >Clochard</td>
      <td >2E408-70</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Jacquette FETIS et Jean et Chris. DURANDEAU</td>
      <td  align=right x:num>968</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38635">10-oct</td>
      <td >Manci&eacute</td>
      <td >2E933-110</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >Pierre RIFFAUD</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39613">14-juin</td>
      <td >Micheau</td>
      <td >2E1022-20</td>
      <td >Angoul&ecircme</td>
      <td >Sous-ferme</td>
      <td >Mathiene CIMARD &agrave Pierre BODET</td>
      <td  align=right x:num>1135</td>
      <td >&eacutepouse de Pastry DENEUFVILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td class=xl3920222 align=right x:num="39985">21/06/09</td>
      <td >Condan</td>
      <td >2E4313-10</td>
      <td >Moulidars</td>
      <td >Vente</td>
      <td >Jean BONJOUR et Cath. GARNIER sa femme</td>
      <td  align=right x:num>1237</td>
      <td >&agrave Fran&ccedilois DURANDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right x:num="38994">04-oct</td>
      <td >Robin</td>
      <td >2E1110-250</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Guillaume MESLIER et Pierre BOITEAUD</td>
      <td  align=right x:num>957</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39480">02-f&eacutevr</td>
      <td >Juilhard</td>
      <td >2E863-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Elie BOUTINON et Catherine SURREAU</td>
      <td  align=right x:num>1137</td>
      <td >fille Pierre et Magd. ROUGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39179">07-avr</td>
      <td >Grassin</td>
      <td >2E4638-10</td>
      <td >La Rochef.</td>
      <td >Echange</td>
      <td >Guillaume DARS et Fran&ccedilois MAYOU</td>
      <td  align=right x:num>1076</td>
      <td >Chez Dars</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38875">7-juin</td>
      <td >Peynaud</td>
      <td >2E2766-40</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois SIMARD et Marie Lamoureux</td>
      <td  align=right x:num>874</td>
      <td >Fr&egravere d'Antoinette SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38678">22-nov</td>
      <td >Peuple</td>
      <td >2E1063-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois YRVOIX et Fran&ccediloise BOVAUD</td>
      <td  align=right x:num>859</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39613">14-juin</td>
      <td >Huguet</td>
      <td >2E801-10</td>
      <td >Angoul&ecircme</td>
      <td >Sous-ferme</td>
      <td >Mathieve SIMARD veuve Patry DENEUVILLE</td>
      <td  align=right x:num>1153</td>
      <td >d'un pr&eacute &agrave Louis MORINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39257">24-juin</td>
      <td >Grassin</td>
      <td >2E4638-20</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Pierre DARS de Jean MESNARD</td>
      <td  align=right x:num>1076</td>
      <td >d'Agris</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38587">23-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1063-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre PINASSEAU et Marguerite AYGRON</td>
      <td  align=right x:num>859</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39466">19-janv</td>
      <td >Daniaud</td>
      <td >2E2954-20</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >Antoine GONTIER drapier &agrave Pierre GONTIER sergi<span style='display:none'>er</span></td>
      <td  align=right x:num>1170</td>
      <td >fr&egraveres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39491">13-f&eacutevr</td>
      <td >Micheau</td>
      <td >2E1022-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean VIAUD &agrave Jean LIZEE</td>
      <td  align=right x:num>1135</td>
      <td >de Vindelle</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39734">13-oct</td>
      <td >Dumontet</td>
      <td >2E2734-140</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >Fran&ccedilois et Jean BIARD p&egravere et fils</td>
      <td  align=right x:num>1153</td>
      <td >de Jean BAYARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39346">21-sept</td>
      <td >Grassin</td>
      <td >2E4639-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Fran&ccedilois DOR de Abraham COL</td>
      <td  align=right x:num>1078</td>
      <td >et Fran&ccedilois et Pierre GUYON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="38841">04-mai</td>
      <td >Clochard</td>
      <td >2E408-80</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Jean et Christophe DURANDEAU</td>
      <td  align=right x:num>968</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right x:num="39881">9-mars</td>
      <td >Baruteau</td>
      <td >2E3060-10</td>
      <td >Hiersac</td>
      <td >Partage</td>
      <td >Marquise, Jean et Anne IZAMBARD</td>
      <td  align=right x:num>1463</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1665</td>
      <td  align=right
  x:num="39988">24-juin</td>
      <td >Baruteau</td>
      <td >2E3060-20</td>
      <td >Hiersac</td>
      <td >Quittance</td>
      <td >Fran&ccedilois PELLEGEAY &agrave Margte PELLEGEAY</td>
      <td  align=right x:num>1463</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right x:num="39333">08-sept</td>
      <td >Grassin</td>
      <td >2E4641-20</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td 
  x:str="Guillaume DARS de Jacques DELAGE ">Guillaume DARS de Jacques DELAGE </td>
      <td  align=right x:num>1081</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38968">08-sept</td>
      <td >Renon</td>
      <td >2E2939-10</td>
      <td >Garat</td>
      <td >Ferme</td>
      <td >Nicolas VERGNAUD &agrave Nicolas SIMARD</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38910">12-juil</td>
      <td >Robin</td>
      <td >2E1111-160</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Fran&ccedilois YRVOIX</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39018">28-oct</td>
      <td >Col</td>
      <td >2E4539-20</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Jean MAYOU et Marguerite DEVILLARS</td>
      <td  align=right x:num>1026</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38743">26-janv</td>
      <td >Peynaud</td>
      <td >2E2766-50</td>
      <td >Dirac</td>
      <td >Arrentement</td>
      <td >FAURE, COUPRIE, PEYRONNET</td>
      <td  align=right x:num>874</td>
      <td class=xl4020222>cf les FAURE-PEYRONNET. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38473">1-mai</td>
      <td >Peuple</td>
      <td >2E1064-110</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Thomas DAVID et Louise LIMOUSIN sa femme</td>
      <td  align=right x:num>858</td>
      <td >&agrave Fran&ccedilois JAUMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39496">18-f&eacutevr</td>
      <td >Micheau</td>
      <td >2E1022-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean ROUHIER et Jeanne BASSET</td>
      <td  align=right x:num>1135</td>
      <td >du faubourg St Pierre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39535">28-mars</td>
      <td >Dumontet</td>
      <td >2E2734-150</td>
      <td >Dignac</td>
      <td >Quittance</td>
      <td >&agrave Jean BIARD et Jean et Jean CHASSEREAU</td>
      <td  align=right x:num>1153</td>
      <td >de Pierre CHAMBON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39313">19-ao&ucirct</td>
      <td >Grassin</td>
      <td >2E4641-10</td>
      <td >La Rochef.</td>
      <td >Bail</td>
      <td >Charles DARS et Pierre LESCHANCEAU</td>
      <td  align=right x:num>1081</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38362">10-janv</td>
      <td >Manci&eacute</td>
      <td >2E933-120</td>
      <td >Angoul&ecircme</td>
      <td >Procuration</td>
      <td >Jean DAVID &agrave Denis BROSSARD</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38739">22-janv</td>
      <td >Robin</td>
      <td >2E1111-120</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Charles GUILLAUME &agrave Jehan GUILLAUME</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38707">21-d&eacutec</td>
      <td >Peuple</td>
      <td >2E1064-150</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre DURRAY et Anne SURREAU</td>
      <td  align=right x:num>859</td>
      <td >Fille de P. et Mag. ROUGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38888">20-juin</td>
      <td >Peynaud</td>
      <td >2E2766-60</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Mathurin PREVOST et L&eacuteonarde SIMONNOT</td>
      <td  align=right x:num>874</td>
      <td >2e mari  Antoinette SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39653">24-juil</td>
      <td >Micheau</td>
      <td >2E1022-40</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Louis DESCARSELLE et David CLERGEAU</td>
      <td  align=right x:num>1135</td>
      <td >cheaux de bas. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38500">28-mai</td>
      <td >Manci&eacute</td>
      <td >2E933-140</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Antoine SIMARD &agrave Pierre SIMARD son fils</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38850">13-mai</td>
      <td >Robin</td>
      <td >2E1111-140</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean LAMOUREUX et Elizabel DAVID</td>
      <td  align=right x:num>962</td>
      <td >&agrave Charles LAMOUREUX p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38771">23-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E804-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre BILLARD et Marguerite CHADENNE</td>
      <td  align=right x:num>875</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38734">17-janv</td>
      <td >Robin</td>
      <td >2E1111-100</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan DENEUVILLE et Antoinet. DELACOUR</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38363">11-janv</td>
      <td >Manci&eacute</td>
      <td >2E933-130</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean DAVID et Jeanne DUPUY</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39612">13-juin</td>
      <td >Cladier Jos.</td>
      <td >2E355-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois JAYET et Marie FOUCHIER</td>
      <td  align=right x:num>1124</td>
      <td >fils Berthom&eacute et Helie DUPUY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39486">08-f&eacutevr</td>
      <td >Mamain</td>
      <td >2E925-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >&agrave Martial SIMARD des h&eacuter. de Pierre SIMARD</td>
      <td  align=right x:num>1141</td>
      <td >Coupillauds, Bigets, Girauds. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="39617">18-juin</td>
      <td >Cladier Jos.</td>
      <td >2E355-30</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Pierre RIFFAUD et Ant. BOURGEAUD ma&ccedilon</td>
      <td  align=right x:num>1124</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38740">23-janv</td>
      <td >Robin</td>
      <td >2E1111-130</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Charles GUILLAUME &agrave Jehan GUILLAUME</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right
  x:num="38448">6-avr</td>
      <td >Peuple</td>
      <td >2E1064-100</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Fran&ccedilois THUILLIER et Gilles son fils (pr&ecirctre)</td>
      <td  align=right x:num>859</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1666</td>
      <td  align=right x:num="39814">1-janv</td>
      <td >Chifflet</td>
      <td >2E4529-10</td>
      <td >La Rochef.</td>
      <td >Rôle</td>
      <td >St Projet St Constant</td>
      <td  align=right x:num>1251</td>
      <td >Guillaume et Jean DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right x:num="38369">17-janv</td>
      <td >Peuple</td>
      <td >2E1064-160</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard BERNARD et Marie CATTIN</td>
      <td  align=right x:num>859</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38915">17-juil</td>
      <td >Peynaud</td>
      <td >2E2766-70</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Jean et Sim. GIRARD et Jeanne et Anne RENON</td>
      <td  align=right x:num>874</td>
      <td >Annul&eacute Sim. et Anne (1673)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39521">14-mars</td>
      <td >Daniaud</td>
      <td >2E5926-30</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Jacques BONJOUR d'Anne GONTIER</td>
      <td  align=right x:num>1168</td>
      <td >veuve de Pierre MAURIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Clochard</td>
      <td >2E409-140</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean COMBRET et Marie JOUANNET</td>
      <td  align=right x:num>963</td>
      <td >Fille de Arnaud et Cath. ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39774">22-nov</td>
      <td >Daniaud</td>
      <td >2E5926-70</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >P. ABELARD et Mathurin GONTIER gendre</td>
      <td  align=right x:num>1168</td>
      <td >et Pierre MARCHAND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38999">09-oct</td>
      <td >Clochard</td>
      <td >2E409-130</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >SURREAU(x) &agrave Jean DUTAIX et Je. GACHE</td>
      <td  align=right x:num>963</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38406">23-f&eacutevr</td>
      <td >Peuple</td>
      <td >2E1064-170</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Antoine SIMARD et Marie PERTUS</td>
      <td  align=right x:num>859</td>
      <td >P. FOUGIERE, Marg. SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39583">15-mai</td>
      <td >Daniaud</td>
      <td >2E5926-50</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Jean GAUDICHEAU et Helie MORIN</td>
      <td  align=right x:num>1168</td>
      <td >&agrave Pierre DANYAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39000">10-oct</td>
      <td >Peynaud</td>
      <td >2E2766-80</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Jean SIMARD et Marie GIRARD</td>
      <td  align=right x:num>874</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38733">16-janv</td>
      <td >Clochard</td>
      <td >2E409-110</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >VARACHE(s) et CARRE(s)</td>
      <td  align=right x:num>963</td>
      <td >Enf. de CARRE et DELACROIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39098">16-janv</td>
      <td >Grassin</td>
      <td >2E4642-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Pierre DOR &agrave Heslie LESCHANCEAU</td>
      <td  align=right x:num>1081</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38955">26-ao&ucirct</td>
      <td >Renon</td>
      <td >2E2939-10b</td>
      <td >Garat</td>
      <td >Ferme</td>
      <td >Nicolas SIMARD &agrave Georges FAURE</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39716">25-sept</td>
      <td >Dumontet</td>
      <td >2E2734-160</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >&agrave Fran&ccedilois BIARD</td>
      <td  align=right x:num>1153</td>
      <td >de Pierre DEVANTHENOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39541">03-avr</td>
      <td >Daniaud</td>
      <td >2E5926-40</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Philippe GONTIER de Helie TRICOIRE</td>
      <td  align=right x:num>1168</td>
      <td >de Fleurac, Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39477">30-janv</td>
      <td >Micheau</td>
      <td >2E1023-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine BOILEVIN et Jeanne BARATTE</td>
      <td  align=right x:num>1136</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38824">17-avr</td>
      <td >Renon</td>
      <td >2E2939-20</td>
      <td >Garat</td>
      <td >M&eacutetairie</td>
      <td >Nicolas et Jean SIMARD &agrave F. DUSSAIGNE</td>
      <td  align=right x:num>972</td>
      <td >et Simonne NEBOUT sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39812">30-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5926-90</td>
      <td >Vaux-Rouillac</td>
      <td >Rôle</td>
      <td >d'Echallat: Guil. PELEGAY, Berth. IZAMBARD</td>
      <td  align=right x:num>1168</td>
      <td >et Jean DARS conseiller du roi</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39670">10-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5926-60</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Helie LIMOUZIN et Pierre HERAUDEAU</td>
      <td  align=right x:num>1168</td>
      <td >fils de Fran&ccedilois LIMOUZIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38536">3-juil</td>
      <td >Peuple</td>
      <td >2E1064-210</td>
      <td >Angoul&ecircme</td>
      <td >D&eacuteclaration</td>
      <td >Fran&ccedilois BOISTEAU et Fran&ccedilois BOILEVIN</td>
      <td  align=right x:num>859</td>
      <td >Meuniers &agrave La Pallut</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39661">01-ao&ucirct</td>
      <td >Micheau</td>
      <td >2E1023-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean TOURNIER et Louise JOYEUX</td>
      <td  align=right x:num>1136</td>
      <td >Ma&icirctre cordonnier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38892">24-juin</td>
      <td >Robin</td>
      <td >2E1111-180</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Simon JAMAIN et Mathiere SIMARD</td>
      <td  align=right x:num>962</td>
      <td >et L&eacuteonard DENEUVILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38740">23-janv</td>
      <td >Clochard</td>
      <td >2E409-120</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean ROUSSEAU et Fran&ccediloise HOUEILH</td>
      <td  align=right x:num>963</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="38704">18-d&eacutec</td>
      <td >Peuple</td>
      <td >2E1064-230</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BIARD et Catherine CHAIGNAUD</td>
      <td  align=right x:num>859</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right
  x:num="39184">12-avr</td>
      <td >Grassin</td>
      <td >2E4642-20</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Catherine CHEROT &agrave Pierre GALINEAU</td>
      <td  align=right x:num>1081</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1667</td>
      <td  align=right x:num="40293">25-avr</td>
      <td >Couste</td>
      <td >2E3497-10</td>
      <td >Mansle</td>
      <td >Partage</td>
      <td >entre les FOUILLADE</td>
      <td  align=right x:num>1501</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right x:num="39473">26-janv</td>
      <td >Cladier</td>
      <td >2E357-10</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Antoine ROY gabarrier &agrave Pierre DURAND</td>
      <td  align=right x:num>1153</td>
      <td >Litige de Saint-Savinien</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39732">11-oct</td>
      <td >Daniaud</td>
      <td >2E5927-170</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Martin RICHARD et Jeanne GONTIER</td>
      <td  align=right x:num>1169</td>
      <td >veuve de Isa&iumle TALLON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38532">29-juin</td>
      <td >Manci&eacute</td>
      <td >2E933-180</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >Fran&ccedilois AUDIER et Jean ROUFFIGNAC</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39548">10-avr</td>
      <td >Daniaud</td>
      <td >2E5927-130</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Mathieu BOISDON de Etienne COMPTE</td>
      <td  align=right x:num>1169</td>
      <td >pi&egraveces de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39809">27-d&eacutec</td>
      <td >Dumontet</td>
      <td >2E2734-220</td>
      <td >Dignac</td>
      <td >Mariage</td>
      <td >Pierre BRISSAUD et Marie JARTON</td>
      <td  align=right x:num>1154</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39809">27-d&eacutec</td>
      <td >Dumontet</td>
      <td >2E2734-230</td>
      <td >Dignac</td>
      <td >Accord</td>
      <td >Jean BIARD et Dominique LEGIER</td>
      <td  align=right x:num>1154</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38598">3-sept</td>
      <td >Manci&eacute</td>
      <td >2E933-190</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Fran&ccedilois DELAPLACE &agrave Guillaume SURREAU</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38520">17-juin</td>
      <td >Manci&eacute</td>
      <td >2E933-160</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Fabre HERAUDEAU &agrave Daniel TULLIER</td>
      <td  align=right x:num>861</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39476">29-janv</td>
      <td >Daniaud</td>
      <td >2E5927-120</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jean BOISDON et Naulette GABY</td>
      <td  align=right x:num>1169</td>
      <td >fils de Fr. et Perrine BERNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39758">06-nov</td>
      <td >Mamain</td>
      <td >2E927-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BENESTEAU et Jeanne VINSONNEAU</td>
      <td  align=right x:num>1143</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39721">30-sept</td>
      <td >Dumontet</td>
      <td >2E2734-200</td>
      <td >Dignac</td>
      <td >Mariage</td>
      <td >Jean BOISSAUD et Charlotte BIARD</td>
      <td  align=right x:num>1153</td>
      <td >Fille de Fr. et J. DELAURIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39465">18-janv</td>
      <td >Daniaud</td>
      <td >2E5927-100</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >R&eacutemy GOUILLARD et Elisabeth HERVE</td>
      <td  align=right x:num>1169</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39455">08-janv</td>
      <td >Dumontet</td>
      <td >2E2734-170</td>
      <td >Dignac</td>
      <td >Mariage</td>
      <td >Jean LACATON et Jeanne BIARD</td>
      <td  align=right x:num>1153</td>
      <td >Fille de Fr. et J. DELAURIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38597">2-sept</td>
      <td >Chauvin</td>
      <td >2E308-10</td>
      <td >Lhoumeau</td>
      <td >Echange</td>
      <td >P. LIMOUSIN et Perrine ROY</td>
      <td  align=right x:num>822</td>
      <td >et A. BARATE, Penotte ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39668">08-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E357-30</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Louis GOBEAU &agrave Antoine ROY gabarrier</td>
      <td  align=right x:num>1153</td>
      <td >Trois saumons de plomb</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39590">22-mai</td>
      <td >Daniaud</td>
      <td >2E5927-140</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >Jean BENESTEAU et Pierre ROGIER</td>
      <td  align=right x:num>1169</td>
      <td >apr&egraves CM avec Anne ROGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38753">5-f&eacutevr</td>
      <td >Peynaud</td>
      <td >2E2767-10</td>
      <td >Dirac</td>
      <td >Echange</td>
      <td >Entre BOISSEAU</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38818">11-avr</td>
      <td >Clochard</td>
      <td >2E409-160</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Jean DURANDEAU &agrave Christ. DURANDEAU</td>
      <td  align=right x:num>963</td>
      <td >et Marie CARRE fem. de Chris.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39045">24-nov</td>
      <td >Col</td>
      <td >2E4540-10</td>
      <td >La Rochef.</td>
      <td >Reconnaissance</td>
      <td >Guillaume DARS &agrave Jean DELABROSSE</td>
      <td  align=right x:num>1025</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39665">05-ao&ucirct</td>
      <td >Dumontet</td>
      <td >2E2734-190</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >&agrave Fran&ccedilois BIARD et Pierre RENON</td>
      <td  align=right x:num>1153</td>
      <td >de Fran&ccedilois DELAMARCHE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39520">13-mars</td>
      <td >Dumontet</td>
      <td >2E2734-180</td>
      <td >Dignac</td>
      <td >Accord</td>
      <td >Jean BIARD et Nicolas LEGIER</td>
      <td  align=right x:num>1153</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39475">28-janv</td>
      <td >Cladier</td>
      <td >2E357-20</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Pierre DURAND &agrave Jean COUPEAU gabarrier</td>
      <td  align=right x:num>1153</td>
      <td >Litige de Saint-Savinien</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39650">21-juil</td>
      <td >Micheau</td>
      <td >2E1023-30</td>
      <td >Angoul&ecircme</td>
      <td >March&eacute</td>
      <td >Fran&ccedilois DECARSELLE et Pierre CLAUZURE</td>
      <td  align=right x:num>1136</td>
      <td >cheaux de bas. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38775">27-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1111-190</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel AUDOUIN et Anne ROY</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38865">28-mai</td>
      <td >Clochard</td>
      <td >2E409-170</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Fran&ccediloise POITEVIN et Fran&ccediloise COUPRIE</td>
      <td  align=right x:num>963</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38913">15-juil</td>
      <td >Peynaud</td>
      <td >2E2767-20</td>
      <td >Dirac</td>
      <td >Ferme</td>
      <td >Ferme de Jean SIMARD &agrave Jean VEILLON</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39471">24-janv</td>
      <td >Daniaud</td>
      <td >2E5927-110</td>
      <td >Vaux-Rouillac</td>
      <td >Inventaire</td>
      <td >Elisabeth HERVE veuve de Pierre GONTIER</td>
      <td  align=right x:num>1169</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39591">23-mai</td>
      <td >Daniaud</td>
      <td >2E5927-150</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >Jean GAUDICHEAU (et Pierre son fils)</td>
      <td  align=right x:num>1169</td>
      <td >pi&egravece de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39764">12-nov</td>
      <td >Dumontet</td>
      <td >2E2734-210</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >Fran&ccedilois CYMARD de Fran&ccediloise BOURGEOIS</td>
      <td  align=right x:num>1154</td>
      <td >Fils Antoine et J. PANISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39788">06-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5927-180</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jean GONTIER et Andr&eacutee TALLON</td>
      <td  align=right x:num>1169</td>
      <td >Jean GONTIER de Sigogne</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="39813">31-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5927-190</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Paul HERAUDEAU et Elisab. CHERPANTIER</td>
      <td  align=right x:num>1169</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38527">24-juin</td>
      <td >Manci&eacute</td>
      <td >2E933-170</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean BASSET et Laurence GARNIER</td>
      <td  align=right x:num>861</td>
      <td >&agrave P. TARDAT et T. DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right
  x:num="38741">24-janv</td>
      <td >Renon</td>
      <td >2E2939-50</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Jean PASTOUREAU et Marg. DELAURIERE</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1668</td>
      <td  align=right x:num="39843">30-janv</td>
      <td >Merilhon</td>
      <td >2E3073-10</td>
      <td >Hiersac</td>
      <td >Proc&egraves verbal</td>
      <td >Marie HASTIER et Jean BERTHOUMME son fils</td>
      <td  align=right x:num>1469</td>
      <td >chez Louis GONTIER et Ph. BERTH.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right x:num="39466">19-janv</td>
      <td >Mamain</td>
      <td >2E927-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jean BIARD et Jean MALABRE</td>
      <td  align=right x:num>1143</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="39805">23-d&eacutec</td>
      <td >Dumontet</td>
      <td >2E2734-250</td>
      <td >Dignac</td>
      <td >Inventaire</td>
      <td >Jeanne DELAURIERE et Jean BIARD</td>
      <td  align=right x:num>1154</td>
      <td >apr&egraves d&eacutec&egraves de Fran&ccedilois BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="39770">18-nov</td>
      <td >Mamain</td>
      <td >2E927-30</td>
      <td >Angoul&ecircme</td>
      <td >Donnation</td>
      <td >L&eacuteonard BARRAUD et Cath. BENESTEAU</td>
      <td  align=right x:num>1143</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="39771">19-nov</td>
      <td >Dumontet</td>
      <td >2E2734-240</td>
      <td >Dignac</td>
      <td >Cession</td>
      <td >Charlotte et Jeanne BIARD &agrave Jean BIARD</td>
      <td  align=right x:num>1154</td>
      <td >leur fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="40096">10-oct</td>
      <td >Huguet Jean</td>
      <td >2E796-10</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Michel et Jean DELAURIERE son fils</td>
      <td  align=right x:num>1204</td>
      <td >treille coup&eacutee, &eacutep&eacutees et armes &agrave feu</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38995">5-oct</td>
      <td >Peynaud</td>
      <td >2E2767-30</td>
      <td >Dirac</td>
      <td >Testament</td>
      <td >Etienne SIMARD &agrave Marie GIRARD</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38523">20-juin</td>
      <td >Manci&eacute</td>
      <td >2E934-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jacques ROUHIER et Marie AUBOIN</td>
      <td  align=right x:num>858</td>
      <td >&agrave Jean MIOT leur gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38779">03-mars</td>
      <td >Robin</td>
      <td >2E1111-200</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Ren&eacute LECLERCQ et Christophe VIOLET</td>
      <td  align=right x:num>962</td>
      <td >&agrave Fran&ccedilois DELAPLACE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38744">27-janv</td>
      <td >J&eacuteheu</td>
      <td >2E805-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Etienne CLERC et Arnaude AUBOIN</td>
      <td  align=right x:num>872</td>
      <td >Fille de F. et M. BARANGIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="39502">24-f&eacutevr</td>
      <td >Cladier</td>
      <td >2E358-10</td>
      <td >Angoul&ecircme</td>
      <td >M&eacutetairie</td>
      <td >&agrave Nicolas et Jean SIMARD fr&egraveres</td>
      <td  align=right x:num>1153</td>
      <td >de Madame Salmon</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38477">5-mai</td>
      <td >Manci&eacute</td>
      <td >2E934-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Louis SEURRAUD &agrave Jean BENET</td>
      <td  align=right x:num>858</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38523">20-juin</td>
      <td >Manci&eacute</td>
      <td >2E934-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jacques ROUHIER &agrave Cath. ROUHIER sa soeur</td>
      <td  align=right x:num>858</td>
      <td >d'une maison &agrave Genac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="38688">2-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E308-30</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Antoine ROY &agrave Penotte NICOLAS</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right x:num="40106">20-oct</td>
      <td >Merilhon</td>
      <td >2E3073-40</td>
      <td >Hiersac</td>
      <td >Vente</td>
      <td >Jean DEBUSSAC &agrave JEAN BOISDON le jeune</td>
      <td  align=right x:num>1469</td>
      <td >de Ste Catherine, St Cybardeaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="39844">31-janv</td>
      <td >Merilhon</td>
      <td >2E3073-20</td>
      <td >Hiersac</td>
      <td >Echange</td>
      <td >Catherine IZAMBARD &agrave Pierre DUCLOU</td>
      <td  align=right x:num>1469</td>
      <td >de terres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1669</td>
      <td  align=right
  x:num="39844">31-janv</td>
      <td >Merilhon</td>
      <td >2E3073-30</td>
      <td >Hiersac</td>
      <td >Vente</td>
      <td >Catherine IZAMBARD et Jean NAUD son fils</td>
      <td  align=right x:num>1469</td>
      <td >de terres &agrave Andr&eacute VALLETEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right x:num="38592">28-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E934-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Martial LIZEE et Anne MARIETTE</td>
      <td  align=right x:num>858</td>
      <td >Fils de Jean et Col. SURRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39008">18-oct</td>
      <td >Robin</td>
      <td >2E1111-260</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jean ROCHIER de Louise AUGIBAUD</td>
      <td  align=right x:num>962</td>
      <td >Chez Michel BOITAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39600">01-juin</td>
      <td >Daniaud</td>
      <td >2E5928-160</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Fran&ccedilois HERAUDEAU &agrave Pierre LAMBERT</td>
      <td  align=right x:num>1168</td>
      <td >Marie HERAUDEAU fe. Fran&ccedilois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39691">31-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E358-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >&agrave Fran&ccedilois SIMARD de Pierre SOULLE</td>
      <td  align=right x:num>1153</td>
      <td >Maison &agrave Puymoyen</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38736">19-janv</td>
      <td >Renon</td>
      <td >2E2939-70</td>
      <td >Garat</td>
      <td >March&eacute</td>
      <td >Jean MANDAT et Jean LIMOUSIN</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39523">16-mars</td>
      <td >Daniaud</td>
      <td >2E5928-140</td>
      <td >Vaux-Rouillac</td>
      <td >Promesse</td>
      <td >Fran&ccedilois GONTIER et autres</td>
      <td  align=right x:num>1168</td>
      <td >laboureur de Beauvoix, Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38423">12-mars</td>
      <td >Peuple</td>
      <td >2E1065-70</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >Antoine SIMARD et Denis CARTERON</td>
      <td  align=right x:num>839</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39450">03-janv</td>
      <td >Daniaud</td>
      <td >2E5928-120</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Berthom&eacute &agrave Jacques COSTE son fils</td>
      <td  align=right x:num>1168</td>
      <td >Le Bourg, Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38753">05-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1111-230</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Jean LIZEE &agrave Jacques LIZEE, COQUIAUD. . .</td>
      <td  align=right x:num>962</td>
      <td >et Jeanne LIZEE sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38945">16-ao&ucirct</td>
      <td >Mamain</td>
      <td >2E928-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Mathieu BASSET &agrave Antoine PECHILLON</td>
      <td  align=right x:num>1014</td>
      <td >et A. et J. BASSET s&oeligur et fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39572">04-mai</td>
      <td >Daniaud</td>
      <td >2E5928-150</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Cibard et Cath. GONTIER enfants d'Andr&eacute</td>
      <td  align=right x:num>1168</td>
      <td >&agrave Guillaume MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39450">03-janv</td>
      <td >Daniaud</td>
      <td >2E5928-100</td>
      <td >Vaux-Rouillac</td>
      <td >Inventaire</td>
      <td >Berthom&eacute et Jacques COSTE son fils</td>
      <td  align=right x:num>1168</td>
      <td >Le Bourg, Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38364">12-janv</td>
      <td >Chauvin</td>
      <td >2E308-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Antoine GAUTIER et Michelle ROY</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39788">06-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5928-170</td>
      <td >Vaux-Rouillac</td>
      <td >Constitution</td>
      <td >de rente de Jacques BOISDON fils de Fiacre</td>
      <td  align=right x:num>1168</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38371">19-janv</td>
      <td >Peuple</td>
      <td >2E1065-60</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Jean COUILLEBAUD et Etienne ROY</td>
      <td  align=right x:num>839</td>
      <td >&agrave Cl&eacutement LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38968">08-sept</td>
      <td >Robin</td>
      <td >2E1111-250</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Andr&eacute LEVRAUD et Marie BONNORON</td>
      <td  align=right x:num>962</td>
      <td >Fille de J. et Marie BABEL</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right x:num="39871">27-f&eacutevr</td>
      <td >Prevost</td>
      <td >2E2775-50</td>
      <td >Douzat</td>
      <td >Transaction</td>
      <td >Berthom&eacute IZAMBARD et Jean PLAINEAU gendre</td>
      <td  align=right x:num>1218</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right x:num="38779">03-mars</td>
      <td >Robin</td>
      <td >2E1111-240</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Yzab. CHERBONNAUD et Michel BOITAUD</td>
      <td  align=right x:num>962</td>
      <td >&agrave AUGEREAU et MICHEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39483">05-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5928-130</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >Ren&eacute, Jean, Jacques fils de Nicolas GONTIER</td>
      <td  align=right x:num>1168</td>
      <td >et de Antoinette BRISSON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38787">11-mars</td>
      <td >Pillorget</td>
      <td >2E2165-10</td>
      <td >Champniers</td>
      <td >Echange</td>
      <td >Antoine DARS et Pierre DUMOUSSEAU</td>
      <td  align=right x:num>1024</td>
      <td >Fils de Nicolas DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39319">25-ao&ucirct</td>
      <td >Grassin</td>
      <td >2E4649-10</td>
      <td >La Rochef.</td>
      <td >M&eacutetairie</td>
      <td >Jean DOR de Marie BARBET</td>
      <td  align=right x:num>1091</td>
      <td >Chez Dars</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38963">03-sept</td>
      <td >Mamain</td>
      <td >2E928-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre AUDOUIN et SORILLETs</td>
      <td  align=right x:num>1014</td>
      <td >(M. BOURDAGE m&egravere  Pierre)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39789">07-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5928-180</td>
      <td >Vaux-Rouillac</td>
      <td >Cession</td>
      <td >Pierre GAUDICHEAU (et Jean son p&egravere ?)</td>
      <td  align=right x:num>1168</td>
      <td >service de R&eacutemy GOUILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39073">22-d&eacutec</td>
      <td >Pillorget</td>
      <td >2E2165-30</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Antoine ECOUPEAU et Catherine ROUHIER</td>
      <td  align=right x:num>1024</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="38989">29-sept</td>
      <td >Col</td>
      <td >2E4540-20</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Catherine CHEROT veuve de Pierre DARS</td>
      <td  align=right x:num>1025</td>
      <td >&agrave Pierre DUMONTET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right
  x:num="39808">26-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5928-190</td>
      <td >Vaux-Rouillac</td>
      <td >Afferme</td>
      <td >Jacques GONTIER &agrave Jean son fr&egravere</td>
      <td  align=right x:num>1168</td>
      <td >fils de Nicolas</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1670</td>
      <td  align=right x:num="40058">2-sept</td>
      <td >Merilhon</td>
      <td >2E3073-50</td>
      <td >Hiersac</td>
      <td >Echange</td>
      <td >Pierre BONJOUR et Jehanne CADY sa femme</td>
      <td  align=right x:num>1469</td>
      <td >de terres avec Andr&eacute VALLETEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right x:num="39494">16-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5929-120</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >Fiacre BOISDON, Jean BERNARD, etc.</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39124">11-f&eacutevr</td>
      <td >Imbert</td>
      <td >2E4684-10</td>
      <td >La Rochef.</td>
      <td >Testament</td>
      <td >Guillaume DARS et Jeanne VACHOT</td>
      <td  align=right x:num>1081</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38911">13-juil</td>
      <td >Boutillier</td>
      <td >2E226-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre BERTHOMME et Catherine ROY</td>
      <td  align=right x:num>966</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38814">07-avr</td>
      <td >Clochard</td>
      <td >2E410-10</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Barth&eacutel&eacutemy BAJOT et Marie CARRE</td>
      <td  align=right x:num>957</td>
      <td >Vve  Christoph. DURANDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38685">29-nov</td>
      <td >Peuple</td>
      <td >2E1066-40</td>
      <td >Angoul&ecircme</td>
      <td >Gurpine</td>
      <td >Jean &agrave Cl&eacutement LIZEE</td>
      <td  align=right x:num>839</td>
      <td >fils de J. et Colette SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38888">20-juin</td>
      <td >Mamain</td>
      <td >2E929-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Fr&egravere et s&oeligurs COMPTE</td>
      <td  align=right x:num>1000</td>
      <td >TALLON, BOIDON, GAILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39769">17-nov</td>
      <td >Daniaud</td>
      <td >2E5929-180</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >Marie COURJAUD et Pierre COSTE son gendre</td>
      <td  align=right x:num>1168</td>
      <td >de Nigronde: anc&ecirctre ?</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39454">07-janv</td>
      <td >Daniaud</td>
      <td >2E2529-100</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Pierre LEMOYNE et Marquise IZAMBARD</td>
      <td  align=right x:num>1167</td>
      <td >et Antoinette IZAMBARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38856">19-mai</td>
      <td >J&eacuteheu</td>
      <td >2E805-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >L&eacuteonard BARRAUD et Catherine BENESTEAU</td>
      <td  align=right x:num>872</td>
      <td >&agrave Fran&ccedilois YRVOIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39624">25-juin</td>
      <td >Daniaud</td>
      <td >2E5929-160</td>
      <td >Vaux-Rouillac</td>
      <td >Afferme</td>
      <td >Remy GOUILLARD et jean GONTIER saunier</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39553">15-avr</td>
      <td >Prevost</td>
      <td >2E2775-20</td>
      <td >Douzat</td>
      <td >Vente</td>
      <td >Pierre MOQUET et Pierre IZAMBARD</td>
      <td  align=right x:num>1151</td>
      <td >&agrave Jean PLAINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38939">10-ao&ucirct</td>
      <td >Boutillier</td>
      <td >2E226-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean COUPRIE et Marguerite DUPUY</td>
      <td  align=right x:num>966</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38527">24-juin</td>
      <td >Peuple</td>
      <td >2E1066-10</td>
      <td >Angoul&ecircme</td>
      <td >Vendition</td>
      <td >Fran&ccedilois YRVOIX et Antoinette ROY</td>
      <td  align=right x:num>839</td>
      <td >&agrave Jacques BRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td >sept</td>
      <td >Mamain</td>
      <td >2E929-50</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >DESCARSELLE apr&egraves d&eacutec&egraves de Louis</td>
      <td  align=right x:num>1000</td>
      <td >Lettre de demande seulement</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38923">25-juil</td>
      <td >Mamain</td>
      <td >2E929-40</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td 
  x:str="Pierre AUDOIN et Antoine ANDRE ">Pierre AUDOIN et Antoine ANDRE </td>
      <td  align=right x:num>1000</td>
      <td >et Louis DESLASCROUX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39620">21-juin</td>
      <td >Daniaud</td>
      <td >2E5929-150</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Michel ROY et Guillaume BONJOUR</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39599">31-mai</td>
      <td >Dumontet</td>
      <td >2E2735-10</td>
      <td >Dignac</td>
      <td >Proc&egraves-verbal</td>
      <td >Jean BIARD et Pierre DEVANTHENAT</td>
      <td  align=right x:num>1155</td>
      <td >Texier en toile</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39040">19-nov</td>
      <td >Robin</td>
      <td >2E1111-280</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume TEXIER et Mathurine TEXIER</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38856">19-mai</td>
      <td >Mamain</td>
      <td >2E929-20</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutemission</td>
      <td >Jacques SURREAU et Marie CHARRAUD</td>
      <td  align=right x:num>1000</td>
      <td >&agrave J DELAROCHE Me de danse</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39480">02-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5929-110</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >&agrave Denis GONTIER de Theophile DELAFOND</td>
      <td  align=right x:num>1167</td>
      <td >de Foussignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38784">08-mars</td>
      <td >Robin</td>
      <td >2E1111-270</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois FOUGIERE et Jehanne ROY</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39492">14-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5929-130</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Anne GONTIER et Jean MAURIN son fils</td>
      <td  align=right x:num>1167</td>
      <td >avec Christophe PERSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38862">25-mai</td>
      <td >Col</td>
      <td >2E4541-10</td>
      <td >La Rochef.</td>
      <td >Echange</td>
      <td >Charles DARS et Fran&ccedilois BENOIST</td>
      <td  align=right x:num>1024</td>
      <td >de terres avec L. BROUSSARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39680">20-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E359-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >&agrave Pierre SIMARD de Mathurin BOUHIER</td>
      <td  align=right x:num>1155</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38966">6-sept</td>
      <td >Peynaud</td>
      <td >2E2767-40</td>
      <td >Dirac</td>
      <td >Ferme</td>
      <td >Collas SIMARD &agrave Fran&ccedilois DUSSAIGNE</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39680">20-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5929-170</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Marie CHERPANTIER vve Louis HERAUDEAU</td>
      <td  align=right x:num>1167</td>
      <td >de Triac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="39579">11-mai</td>
      <td >Daniaud</td>
      <td >2E5929-140</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >Jacques BOISDON collecteur d'Echallat</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38742">25-janv</td>
      <td >Renon</td>
      <td >2E2939-80</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Mathieu DELEPAUD et Anne SIMARD</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1671</td>
      <td  align=right
  x:num="38746">29-janv</td>
      <td >Mamain</td>
      <td >2E929-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Mathieu BERNARD et Marguerite CLEMENT</td>
      <td  align=right x:num>1000</td>
      <td >de St Martial, A&ecirc</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39492">14-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5930-130</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >Fiacre BOISDON</td>
      <td  align=right x:num>1164</td>
      <td >demeurant au bourg d'Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39532">25-mars</td>
      <td >Daniaud</td>
      <td >2E5930-160</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >Mathieu et Mac&eacute GONTIER fr&egraveres</td>
      <td  align=right x:num>1164</td>
      <td >fils d'Antoine, demt Bois Renard</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38894">26-juin</td>
      <td >Robin</td>
      <td >2E1111-310</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan COMPERE et Jehanne SIMARD</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38714">28-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E309-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois DAVAILLE et Jeanne ROY</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38771">23-f&eacutevr</td>
      <td >Mamain</td>
      <td >2E930-20</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >DESCARSELLE</td>
      <td  align=right x:num>978</td>
      <td >apr&egraves mort de Louis leur p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38466">24-avr</td>
      <td >Chauvin</td>
      <td >2E309-20</td>
      <td >Lhoumeau</td>
      <td >Sous-arrentemt</td>
      <td >Andr&eacute ROY &agrave Robert ROY</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39492">14-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5930-140</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >Fiacre BOISDON et Jean BERNARD</td>
      <td  align=right x:num>1164</td>
      <td >demeurant au bourg d'Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39532">25-mars</td>
      <td >Daniaud</td>
      <td >2E5930-150</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Pierre GONTIER et Elisabeth HERVE</td>
      <td  align=right x:num>1164</td>
      <td >sa belle-fille, demt. M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38668">12-nov</td>
      <td >Chauvin</td>
      <td >2E309-30</td>
      <td >Lhoumeau</td>
      <td >Accord</td>
      <td >Antoine ROY et damien CHARLES</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39533">26-mars</td>
      <td >Daniaud</td>
      <td >2E5930-180</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >P., F, Ja. TALLON et Math et Mac&eacute GONTIER</td>
      <td  align=right x:num>1164</td>
      <td >&agrave R&eacutemy GOUILLARD. M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38823">16-avr</td>
      <td >Mamain</td>
      <td >2E930-40</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Louis DESCARSELLE</td>
      <td  align=right x:num>978</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38430">19-mars</td>
      <td >Peuple</td>
      <td >2E1066-50</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Jean LIZEE de Fran&ccedilois GONTIER</td>
      <td  align=right x:num>839</td>
      <td >F. GONTIER anc&ecirctre ?</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39169">28-mars</td>
      <td >Baudet</td>
      <td >2E2793-10</td>
      <td >Echallat</td>
      <td >Partage</td>
      <td >Pierre BOISDON et DURANDEAUs</td>
      <td  align=right x:num>1048</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38760">12-f&eacutevr</td>
      <td >Pillorget</td>
      <td >2E2165-40</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Antoine DARS et Magdelaine PILLORGET</td>
      <td  align=right x:num>1024</td>
      <td >Fils de Nicolas DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39448">01-janv</td>
      <td >Daniaud</td>
      <td >2E5930-100</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacutelaissement</td>
      <td >Catherine &agrave Antoine GONTIER son fr&egravere</td>
      <td  align=right x:num>1163</td>
      <td >demeurant &agrave Foussignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38989">29-sept</td>
      <td >Mamain</td>
      <td >2E930-50</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >Michel DELACROIX et Marie BOILEVIN</td>
      <td  align=right x:num>978</td>
      <td >&agrave Etienne TRONCHIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38956">27-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1111-340</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Regn&eacute TAVERNAUD et Marie ROUGIER</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39805">23-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5930-200</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Antoine et Marie GONTIER et Mathieu MARTIN</td>
      <td  align=right x:num>1164</td>
      <td class=xl4120222>&agrave &quot;restauratr. de corps humains&quot;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38814">07-avr</td>
      <td >Mamain</td>
      <td >2E930-30</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Jean COUPEAU dit Chazelle par H. GAULTIER</td>
      <td  align=right x:num>978</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39577">09-mai</td>
      <td >Daniaud</td>
      <td >2E5930-190</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Mathieu BOISDON (de Jean DEBUSSAC)</td>
      <td  align=right x:num>1164</td>
      <td >Fils Fran&ccedil. et Perrine BERNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38493">21-mai</td>
      <td >Peuple</td>
      <td >2E1066-60</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >Fran&ccedilois ROY et Catherine MARTIN</td>
      <td  align=right x:num>839</td>
      <td >Au profit de Aette. GADORAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39189">17-avr</td>
      <td >Baudet</td>
      <td >2E2793-30</td>
      <td >Echallat</td>
      <td >Procuration</td>
      <td >Pierre BOISDON &agrave Marie ANDRE sa femme</td>
      <td  align=right x:num>1048</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38522">19-juin</td>
      <td >Peuple</td>
      <td >2E1066-80</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean PAPIN ET Jeanne ROUHIER</td>
      <td  align=right x:num>839</td>
      <td >Fils de A. CLERC et S. PAPIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39183">11-avr</td>
      <td >Baudet</td>
      <td >2E2793-20</td>
      <td >Echallat</td>
      <td >Inventaire</td>
      <td >Jehanne ANDRE</td>
      <td  align=right x:num>1048</td>
      <td >Pierre BOISDON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38466">24-avr</td>
      <td >Chauvin</td>
      <td >2E309-10</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Andr&eacute ROY &agrave Robert ROY</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="38585">21-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1066-90</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Louis SURREAU et Genevi&egraveve GODIN</td>
      <td  align=right x:num>839</td>
      <td >de Jacques BOVAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39532">25-mars</td>
      <td >Daniaud</td>
      <td >2E5930-170</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Pierre GONTIER &agrave R&eacutemy GOUILLARD</td>
      <td  align=right x:num>1164</td>
      <td >demt. M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39257">24-juin</td>
      <td >Peuple</td>
      <td >2E1066-10</td>
      <td >Angoul&ecircme</td>
      <td >Vendition</td>
      <td >Fran&ccedilois YRVOIX et Antoinette ROY</td>
      <td  align=right x:num>839</td>
      <td >&agrave Jacques BRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39534">27-mars</td>
      <td >Cladier</td>
      <td >2E360-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >&agrave Jean BIARD de Louis SURREAU</td>
      <td  align=right x:num>1155</td>
      <td >et Denis POITEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1672</td>
      <td  align=right
  x:num="39034">13-nov</td>
      <td >Boutillier</td>
      <td >2E226-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Arnaud DELACOSTE et Cath. MARQUAIS</td>
      <td  align=right x:num>966</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38495">23-mai</td>
      <td >Chauvin</td>
      <td >2E309-70</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >Robert ROY de Fran&ccedilois GALLOPIN</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39075">24-d&eacutec</td>
      <td >Boutillier</td>
      <td >2E226-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois IMBERT et Marie LIMOUSIN</td>
      <td  align=right x:num>966</td>
      <td >Fils de P. et Jeanne ROUSSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38886">18-juin</td>
      <td >Boutillier</td>
      <td >2E226-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean ROY et Marie BARBARY</td>
      <td  align=right x:num>966</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39521">14-mars</td>
      <td >Daniaud</td>
      <td >2E5931-110</td>
      <td >Vaux-Rouillac</td>
      <td >Bail</td>
      <td >Jacques et Antoine MARQUAIS</td>
      <td  align=right x:num>1163</td>
      <td >m&eacutetairie de Nigronde</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38760">12-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E806-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre COUTURIER et Suzanne ROUHIER</td>
      <td  align=right x:num>872</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39473">26-janv</td>
      <td >Daniaud</td>
      <td >2E5931-100</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jean CARRE et Marie SALLE</td>
      <td  align=right x:num>1163</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39779">27-nov</td>
      <td >Daniaud</td>
      <td >2E5931-170</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jean ANDRE et Antoinette MARTIN</td>
      <td  align=right x:num>1163</td>
      <td >de Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39776">24-nov</td>
      <td >Daniaud</td>
      <td >2E5931-160</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >Jean GONTIER, M. MARTIN et M. NAVARRE</td>
      <td  align=right x:num>1163</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="40122">05-nov</td>
      <td >Petit</td>
      <td >2E5180-20</td>
      <td >St-Cybardeaux</td>
      <td >Mariage</td>
      <td >Mathieu et Marquize CRESTE</td>
      <td  align=right x:num>1210</td>
      <td >et Jean et Marguerite GRATTREAUX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39764">12-nov</td>
      <td >Daniaud</td>
      <td >2E5931-180</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >Nicolas BOISDON et Jean LAMBERT</td>
      <td  align=right x:num>1163</td>
      <td >de Ste Catherine, Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39659">30-juil</td>
      <td >Daniaud</td>
      <td >2E5931-150</td>
      <td >Vaux-Rouillac</td>
      <td >Inventaire</td>
      <td >requ&ecircte P. FOURNIER et F. CARRE gendres</td>
      <td  align=right x:num>1163</td>
      <td >apr&egraves d&eacutec&egraves Pierre TALLON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39955">22-mai</td>
      <td >Petit</td>
      <td >2E5180-10</td>
      <td >St-Cybardeaux</td>
      <td >Vente</td>
      <td >&agrave S&eacutebastien BOISDON fils de Nicolas</td>
      <td  align=right x:num>1210</td>
      <td >de P. MASSIOT et Jeanne MOREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38868">31-mai</td>
      <td >J&eacuteheu</td>
      <td >2E806-300</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Denis BASSET et enfants DELAPLACE</td>
      <td  align=right x:num>872</td>
      <td >de Frce DUFOUR leur m&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39589">21-mai</td>
      <td >Daniaud</td>
      <td >2E5931-130</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Jean GONTIER &agrave Pierre HERAUDEAU</td>
      <td  align=right x:num>1163</td>
      <td >pi&egraveces de vigne &agrave Foussignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39465">18-janv</td>
      <td >Cladier</td>
      <td >2E360-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre NAVARRE et Jeanne CARRE</td>
      <td  align=right x:num>1155</td>
      <td >fille de Jean et M. DELACROIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39804">22-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5931-200</td>
      <td >Vaux-Rouillac</td>
      <td >Baillette</td>
      <td >&agrave Jacques et Jean BOISDON fr&egraveres du Fessou</td>
      <td  align=right x:num>1163</td>
      <td >d'une pi&egravece de terre &agrave Douzat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38647">22-oct</td>
      <td >Chauvin</td>
      <td >2E309-90</td>
      <td >Lhoumeau</td>
      <td >Location</td>
      <td >Elisabeth ROY &agrave Anne AUDIGIER</td>
      <td  align=right x:num>822</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38403">20-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E309-50</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves-verbal</td>
      <td >Robert ROY</td>
      <td  align=right x:num>822</td>
      <td >D'un lopin de vigne</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38667">11-nov</td>
      <td >J&eacuteheu</td>
      <td >2E807-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DAVID, LELIS, MOUSSEAU, maris de RIFFAUD</td>
      <td  align=right x:num>870</td>
      <td >&agrave Pierre de La QUINTINYE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38874">06-juin</td>
      <td >Mamain</td>
      <td >2E931-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Guillaume BOISDON et Margte. DUPUY</td>
      <td  align=right x:num>970</td>
      <td >de Saint Antonin</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39812">30-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5931-210</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Helie GONTIER</td>
      <td  align=right x:num>1163</td>
      <td >Fils Fran&ccedilois et Marie CAILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39628">29-juin</td>
      <td >Daniaud</td>
      <td >2E5931-140</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >Antoine et Marie GONTIER et Mathieu MARTIN</td>
      <td  align=right x:num>1163</td>
      <td >demeurant &agrave M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38804">28-mars</td>
      <td >Mamain</td>
      <td >2E931-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Martin JOUANNET</td>
      <td  align=right x:num>970</td>
      <td >Fils de Arnaud et Cath. ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38774">26-f&eacutevr</td>
      <td >Mamain</td>
      <td >2E931-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard PETIT et Isabelle BENESTEAU</td>
      <td  align=right x:num>970</td>
      <td >Promesse</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38851">14-mai</td>
      <td >J&eacuteheu</td>
      <td >2E806-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques BASSET et Marie MAMAIN</td>
      <td  align=right x:num>872</td>
      <td >Fils de Guillaume</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38893">25-juin</td>
      <td >Renon</td>
      <td >2E2940-30</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >L&eacuteonard ROY et Anne COUPRIE</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38851">14-mai</td>
      <td >Robin</td>
      <td >2E1111-360</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jehan RUHET et Marguerite NOBLESSE</td>
      <td  align=right x:num>962</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38952">23-ao&ucirct</td>
      <td >Col</td>
      <td >2E4541-20</td>
      <td >La Rochef.</td>
      <td >Bail</td>
      <td >Charles DARS &agrave L&eacuteonard BRUNET</td>
      <td  align=right x:num>1024</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="38536">3-juil</td>
      <td >J&eacuteheu</td>
      <td >2E807-10</td>
      <td >Angoul&ecircme</td>
      <td >Location</td>
      <td >Marguerite SEGUIN &agrave Denis BASSET</td>
      <td  align=right x:num>870</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right
  x:num="39805">23-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5931-190</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Anne GONTIER et Jean MAURIN son fils</td>
      <td  align=right x:num>1163</td>
      <td >demt. Les  Naulais &agrave M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1673</td>
      <td  align=right x:num="40080">24-sept</td>
      <td >Merilhon</td>
      <td >2E3073-60</td>
      <td >Hiersac</td>
      <td >Mariage</td>
      <td >Antoine BONJOUR et Guillemette PELLON</td>
      <td  align=right x:num>1469</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right x:num="38942">13-ao&ucirct</td>
      <td >Mamain</td>
      <td >2E932-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jeanne MOQUET et Andr&eacute ARNAUD</td>
      <td  align=right x:num>968</td>
      <td >Pour des pansements et m&eacutedic.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38746">29-janv</td>
      <td >Grassin</td>
      <td >2E4656</td>
      <td >La Rochef.</td>
      <td >L&eacutegat</td>
      <td >Charles DARS au cur&eacute et fabriqueurs</td>
      <td  align=right x:num>1030</td>
      <td >de Rivi&egraveres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39461">14-janv</td>
      <td >Daniaud</td>
      <td >2E5932-100</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Pierre HERAUDEAU et Jeanne TALLON</td>
      <td  align=right x:num>1164</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39531">24-mars</td>
      <td >Pechillon</td>
      <td >2E2629-10</td>
      <td >La Couronne</td>
      <td >Ferme</td>
      <td >Philippe LIET &agrave Pierre RIPPE</td>
      <td  align=right x:num>1154</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38983">23-sept</td>
      <td >Grassin</td>
      <td >2E4657-10</td>
      <td >La Rochef.</td>
      <td >M&eacutetairie</td>
      <td >Suzanne LEFEBVRE &agrave Jean DOR</td>
      <td  align=right x:num>1026</td>
      <td >et Fran&ccediloise LAROCHE sa fe.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38398">15-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E807-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Gervais BRANGIER et Marguerite BOYTAUD</td>
      <td  align=right x:num>870</td>
      <td >&agrave Antoine DESCARSELLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39048">27-nov</td>
      <td >Gauvry</td>
      <td >2E4295-10</td>
      <td >Mornac</td>
      <td >Acquisition</td>
      <td >d'Etienne par Arnaud et Fran&ccedilois COUPRIE</td>
      <td  align=right x:num>877</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38750">02-f&eacutevr</td>
      <td >Renon</td>
      <td >2E2940-40</td>
      <td >Garat</td>
      <td >Trait&eacute</td>
      <td >Jean BIARD et Cybard DUBOUCHAUD</td>
      <td  align=right x:num>972</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38954">25-ao&ucirct</td>
      <td >Mamain</td>
      <td >2E932-30</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td 
  x:str="Pierre et Catherine BARBARY ">Pierre et Catherine BARBARY </td>
      <td  align=right x:num>968</td>
      <td >Et Jean MESNARD son mari</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38763">15-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-100</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Charles GRELLIER et Jacquette PLASSEREAU</td>
      <td  align=right x:num>965</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39730">09-oct</td>
      <td >Daniaud</td>
      <td >2E5932-150</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Fran&ccedilois HERAUDEAU</td>
      <td  align=right x:num>1164</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39553">15-avr</td>
      <td >Daniaud</td>
      <td >2E5932-130</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacutelaissement</td>
      <td >Fran&ccedilois CARRE</td>
      <td  align=right x:num>1164</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38555">22-juil</td>
      <td >J&eacuteheu</td>
      <td >2E807-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard COTIT et Elisabeth RAYMOND</td>
      <td  align=right x:num>870</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38766">18-f&eacutevr</td>
      <td >Pillorget</td>
      <td >2E2166-10</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Louis SURREAU et Magdelaine POITEVIN</td>
      <td  align=right x:num>1026</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38457">15-avr</td>
      <td >Chauvin</td>
      <td >2E310-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Gilles MESTADRIE et Catherine RIFFAUD</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39560">22-avr</td>
      <td >Baudet</td>
      <td >2E2793-40</td>
      <td >Echallat</td>
      <td >Vente</td>
      <td >Cath TALLON, Nic GABORY et Jeanne MARTIN</td>
      <td  align=right x:num>1051</td>
      <td >&agrave Antoine VINSANT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38884">16-juin</td>
      <td >Robin</td>
      <td >2E1110-210</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Marie NOBLESSE veuve de Mery MESNIER</td>
      <td  align=right x:num>956</td>
      <td >S&oeligur de Margte. NOBLESSE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38473">1-mai</td>
      <td >J&eacuteheu</td>
      <td >2E807-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >N. CIVADIER &agrave Mic. MARCHAND et N. BASSET</td>
      <td  align=right x:num>870</td>
      <td >Vente de peaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="38746">29-janv</td>
      <td >Mamain</td>
      <td >2E932-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine DESCARSELLE et Louise PREVOST</td>
      <td  align=right x:num>968</td>
      <td >Fils de Louis</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39490">12-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5932-120</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Louis IZAMBARD &agrave Jean MATIGNON</td>
      <td  align=right x:num>1164</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39483">05-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5932-110</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >Jean BOISDON le jeune et Jean DEBUSSAT</td>
      <td  align=right x:num>1164</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1674</td>
      <td  align=right
  x:num="39032">11-nov</td>
      <td >Grassin</td>
      <td >2E4657-20</td>
      <td >La Rochef.</td>
      <td >Bail</td>
      <td >Berthomm&eacute BIZARD &agrave Jean DOR</td>
      <td  align=right x:num>1026</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38382">30-janv</td>
      <td >J&eacuteheu</td>
      <td >2E808-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Claude PINAUD et Jeanne ROUHIER</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39706">15-sept</td>
      <td >Pechillon</td>
      <td >2E2629-40</td>
      <td >La Couronne</td>
      <td >Ferme</td>
      <td >Philippe LIET &agrave Jean RENETAU</td>
      <td  align=right x:num>1154</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39531">24-mars</td>
      <td >Pechillon</td>
      <td >2E2629-30</td>
      <td >La Couronne</td>
      <td >Ferme</td>
      <td >Philippe LIET du R.P. Jean HAULTEFORT</td>
      <td  align=right x:num>1154</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39480">02-f&eacutevr</td>
      <td >Dumontet</td>
      <td >2E2736-10</td>
      <td >Dignac</td>
      <td >Quittance</td>
      <td >&agrave Jean BIARD de Jean BOISSEAU et C. BIARD</td>
      <td  align=right x:num>1156</td>
      <td >Marchand</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38989">29-sept</td>
      <td >Col</td>
      <td >2E4542-40</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >Charles DARS &agrave Philippe FAUGIERE</td>
      <td  align=right x:num>1024</td>
      <td >du pr&eacute &eacutechang&eacute la veille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38582">18-ao&ucirct</td>
      <td >Peuple</td>
      <td >2E1067-50</td>
      <td >Angoul&ecircme</td>
      <td >Vendition</td>
      <td >Antoine SIMARD &agrave L&eacuteonard BERNARD</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39672">12-ao&ucirct</td>
      <td >Dumontet</td>
      <td >2E2736-30</td>
      <td >Dignac</td>
      <td >Arrentement</td>
      <td >&agrave Jean BIARD marchand de Pierre CHENARD</td>
      <td  align=right x:num>1156</td>
      <td >d'une grange</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39679">19-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E362-50</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Nicolas BASSET de Nicolas CINADIER</td>
      <td  align=right x:num>1158</td>
      <td >de peaux, 13 &agrave la douzaine</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39584">16-mai</td>
      <td >Daniaud</td>
      <td >2E5932-170</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Louis HERAUDEAU et Marie MARTINEAU</td>
      <td  align=right x:num>1164</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38491">19-mai</td>
      <td >Peuple</td>
      <td >2E1067-30</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutepartie</td>
      <td >Fran&ccedilois YRVOIX et Antoinette ROY</td>
      <td  align=right x:num>841</td>
      <td >&agrave Jacques BOVAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38397">14-f&eacutevr</td>
      <td >Peuple</td>
      <td >2E1067-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Denis BASSET et Louise CHARRON</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39678">18-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E362-40</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >Marie BARREAU Jean SEGUIN fils</td>
      <td  align=right x:num>1158</td>
      <td >et Jean BARREAU neveu</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39064">13-d&eacutec</td>
      <td >Boutillier</td>
      <td >2E226-80</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Fran&ccedilois et Jean CHASSAIGNE</td>
      <td  align=right x:num>966</td>
      <td >Procuration J. CHASSAIGNE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38458">16-avr</td>
      <td >J&eacuteheu</td>
      <td >2E808-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Georges BOYTAUD et Michelle YRVOIX</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39602">03-juin</td>
      <td >Daniaud</td>
      <td >2E5932-190</td>
      <td >Vaux-Rouillac</td>
      <td >R&eacutesiliation</td>
      <td >Jean IZAMBARD dit &quot;La Gallerie&quot;</td>
      <td  align=right x:num>1164</td>
      <td >pi&egravece de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39064">13-d&eacutec</td>
      <td >Boutillier</td>
      <td >2E226-70</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Fran&ccedilois CHASSAIGNE et Jacquette BIARD</td>
      <td  align=right x:num>966</td>
      <td >de Jacquette CALLEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39081">30-d&eacutec</td>
      <td >Grassin</td>
      <td >2E4658-10</td>
      <td >La Rochef.</td>
      <td >Bail</td>
      <td >Jean DARS de Jean ODON</td>
      <td  align=right x:num>1019</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39080">29-d&eacutec</td>
      <td >Renon</td>
      <td >2E2940-60</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Arnaud GAILLARD et Antoinette RIPPE</td>
      <td  align=right x:num>972</td>
      <td >Fils de J. et J. DURANDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38988">28-sept</td>
      <td >Col</td>
      <td >2E4542-30</td>
      <td >La Rochef.</td>
      <td >Echange</td>
      <td >Charles DARS et Antoine AUGIER</td>
      <td  align=right x:num>1024</td>
      <td >de pr&eacutes</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39479">01-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5932-160</td>
      <td >Vaux-Rouillac</td>
      <td >March&eacute</td>
      <td >Jean BOISDON le jeune et Helie CHOLLET</td>
      <td  align=right x:num>1164</td>
      <td >arrachage de bois</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38603">8-sept</td>
      <td >J&eacuteheu</td>
      <td >2E808-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre LIZEE et Marie ROUYER</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38385">2-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E310-30</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Andr&eacute ROY et Je. AUGEREAU &agrave Andr&eacute GIBOIN</td>
      <td  align=right x:num>815</td>
      <td >par Robert ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39622">23-juin</td>
      <td >Cladier</td>
      <td >2E362-20</td>
      <td >Angoul&ecircme</td>
      <td >Aquisition</td>
      <td >Robert GODIN et Fran&ccedilois TOURNIER gendre</td>
      <td  align=right x:num>1158</td>
      <td >pour Antoine GUYOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39602">03-juin</td>
      <td >Daniaud</td>
      <td >2E5932-180</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Jean IZAMBARD dit &quot;La Gallerie&quot;</td>
      <td  align=right x:num>1164</td>
      <td >pi&egravece de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38715">29-d&eacutec</td>
      <td >Peuple</td>
      <td >2E1067-80</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Louise DELAGE veuve de Fran&ccedilois BOYTEAU</td>
      <td  align=right x:num>840</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38871">03-juin</td>
      <td >Col</td>
      <td >2E4542-20</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >Fran&ccedilois FOUCAUD &agrave Charles DARS</td>
      <td  align=right x:num>1024</td>
      <td >de terres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38896">28-juin</td>
      <td >Clochard</td>
      <td >2E411-10</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Fran&ccedilois IMBERT et Marie LIMOUSIN</td>
      <td  align=right x:num>955</td>
      <td >&agrave Pierre LIMOUSIN p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38842">05-mai</td>
      <td >Col</td>
      <td >2E4542-10</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >Jean ODON &agrave Charles DARS</td>
      <td  align=right x:num>1024</td>
      <td >de terres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39570">02-mai</td>
      <td >Dumontet</td>
      <td >2E2736-20</td>
      <td >Dignac</td>
      <td >Vente</td>
      <td >&agrave Jean BIARD marchand de Noël GOUGNET</td>
      <td  align=right x:num>1156</td>
      <td 
  x:str="de cercles en ch&acirctaigner ">de cercles en ch&acirctaigner </td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="38617">22-sept</td>
      <td >Peuple</td>
      <td >2E1067-60</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Christophe VIOLLET &agrave Jean PAPIN</td>
      <td  align=right x:num>840</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39510">03-mars</td>
      <td >Pechillon</td>
      <td >2E2629-20</td>
      <td >La Couronne</td>
      <td >Ferme</td>
      <td >Philippe LIET de Jean DUMERGUE</td>
      <td  align=right x:num>1154</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="39666">06-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E362-30</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Denis BASSET de Claude TEXIER</td>
      <td  align=right x:num>1158</td>
      <td >d'une petite maison</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right x:num="39881">9-mars</td>
      <td >Merilhon</td>
      <td >2E3073-70</td>
      <td >Hiersac</td>
      <td >Inventaire</td>
      <td >Jejan BONJOUR et Fran&ccediloise BERTHOUME</td>
      <td  align=right x:num>1469</td>
      <td >et Antoine et Jean leurs fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1675</td>
      <td  align=right
  x:num="40062">6-sept</td>
      <td >Merilhon</td>
      <td >2E3073-80</td>
      <td >Hiersac</td>
      <td >Vente</td>
      <td >Antoine et Jean BONJOUR</td>
      <td  align=right x:num>1469</td>
      <td >&agrave Guillaume et Jean COCHET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right x:num="39450">03-janv</td>
      <td >Daniaud</td>
      <td >2E5933-100</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Pierre GONTIER dit Cadet</td>
      <td  align=right x:num>1164</td>
      <td >et Garbiel GRATEREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38376">24-janv</td>
      <td >J&eacuteheu</td>
      <td >2E809-120</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Lunesse ROY et Guillaume COUGNASSE</td>
      <td  align=right x:num>866</td>
      <td >R&eacutehaussement d'un mur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38673">17-nov</td>
      <td >J&eacuteheu</td>
      <td >2E809-160</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Hugues CHARLES &agrave Louis SURREAU</td>
      <td  align=right x:num>867</td>
      <td >Une pi&egravece de terre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38826">19-avr</td>
      <td >Pillorget</td>
      <td >2E2166-20</td>
      <td >Champniers</td>
      <td >Partage</td>
      <td >Louis SURREAU, Jean POICTEVIN</td>
      <td  align=right x:num>1026</td>
      <td >et Louis BREBINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38677">21-nov</td>
      <td >J&eacuteheu</td>
      <td >2E809-170</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Pierre BOILEVIN et Catherine ORDONNEAU</td>
      <td  align=right x:num>867</td>
      <td >&agrave Lucas et Jean PIVETEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39457">10-janv</td>
      <td >Dumontet</td>
      <td >2E2736-10</td>
      <td >Dignac</td>
      <td >Quittance</td>
      <td >&agrave Jean BIARD de Jean LACATON et J. BIARD</td>
      <td  align=right x:num>1156</td>
      <td >Marchand</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38374">22-janv</td>
      <td >J&eacuteheu</td>
      <td >2E809-110</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Berthomm&eacute et Pierre BOITAUD</td>
      <td  align=right x:num>866</td>
      <td >&agrave DUSOUCHET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38841">04-mai</td>
      <td >Col</td>
      <td >2E4542-50</td>
      <td >La Rochef.</td>
      <td >Transaction</td>
      <td >Charles DARS et les ALANOREs</td>
      <td  align=right x:num>1024</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38372">20-janv</td>
      <td >Chauvin</td>
      <td >2E310-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Menaud ROY et Catherine JOUANNET</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39771">19-nov</td>
      <td >Cladier</td>
      <td >2E363-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre DE LAVARRE et Marie CARRE</td>
      <td  align=right x:num>1158</td>
      <td >Veuve de Christ. DURANDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39539">01-avr</td>
      <td >Daniaud</td>
      <td >2E5933-150</td>
      <td >Vaux-Rouillac</td>
      <td >Proc&egraves-verbal</td>
      <td >&agrave Fran&ccedilois GONTIER et Marie COMPTE</td>
      <td  align=right x:num>1165</td>
      <td >moulin &agrave eau et &agrave vent de Fleurac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38899">01-juil</td>
      <td >Col</td>
      <td >2E4542-60</td>
      <td >La Rochef.</td>
      <td >Accord</td>
      <td >Charles DARS et Raymond FOUCAUD</td>
      <td  align=right x:num>1024</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39501">23-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5933-130</td>
      <td >Vaux-Rouillac</td>
      <td >Ferme</td>
      <td >&agrave Fran&ccedilois GONTIER et Marie COMPTE</td>
      <td  align=right x:num>1164</td>
      <td >moulin &agrave eau et &agrave vent de Fleurac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39541">03-avr</td>
      <td >Cladier</td>
      <td >2E363-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Louis DESCARCELLE gar&ccedilon cellier</td>
      <td  align=right x:num>1158</td>
      <td > &agrave Antoine DESCARCELLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38461">19-avr</td>
      <td >Chauvin</td>
      <td >2E310-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre ROY et Anne CAILLAUD</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39565">27-avr</td>
      <td >Dumontet</td>
      <td >2E2736-40</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >&agrave Jean BIARD marchand de Jean BAYARD</td>
      <td  align=right x:num>1156</td>
      <td >de b&acirctiments</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38805">29-mars</td>
      <td >Renon</td>
      <td >2E2940-70</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Pierre GAILLARD et Fran&ccediloise GIBAUD</td>
      <td  align=right x:num>972</td>
      <td >Fils de J. et J. DURANDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38927">29-juil</td>
      <td >Renon</td>
      <td >2E2940-80</td>
      <td >Garat</td>
      <td >Inventaire</td>
      <td >M&eacutery BIARD et ses enfants</td>
      <td  align=right x:num>972</td>
      <td >Apr&egraves d&eacutec&egraves de Marie GRELET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39627">28-juin</td>
      <td >Cladier</td>
      <td >2E363-30</td>
      <td >Angoul&ecircme</td>
      <td >Accord</td>
      <td >Jean ROUHIER et Philippe DELAURIERE</td>
      <td  align=right x:num>1158</td>
      <td >et Fcse DELAURIERE sa s&oeligur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39015">25-oct</td>
      <td >Robin</td>
      <td >2E1112-140</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois RIFFAUD et Jeanne NOBLET</td>
      <td  align=right x:num>965</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39762">10-nov</td>
      <td >Cladier</td>
      <td >2E363-40</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Pierre LIMOUSIN et Jean GUYONNET</td>
      <td  align=right x:num>1158</td>
      <td >et M. LIMOUSIN femme de Jean</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39481">03-f&eacutevr</td>
      <td >Dumontet</td>
      <td >2E2736-50</td>
      <td >Dignac</td>
      <td >Cession</td>
      <td >&agrave Jean BIARD de J. et C. BIARD ses soeurs</td>
      <td  align=right x:num>1156</td>
      <td >suite d&eacutec&egraves Guillaume BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38918">20-juil</td>
      <td >Gauvry</td>
      <td >2E4295-40</td>
      <td >Mornac</td>
      <td >Inventaire</td>
      <td >M&eacutery BIARD et Jehanne LAMOUREUX</td>
      <td  align=right x:num>877</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38365">13-janv</td>
      <td >J&eacuteheu</td>
      <td >2E809-100</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Robert pour Fran&ccediloise DELAURIERE</td>
      <td  align=right x:num>866</td>
      <td >&agrave ITHIERS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39051">30-nov</td>
      <td >Desport</td>
      <td >2E2128-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean COUPRIE et Charlotte FETIX</td>
      <td  align=right x:num>1014</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38628">3-oct</td>
      <td >Chauvin</td>
      <td >2E310-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Claude ROY et Anne ROUHIER</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38451">9-avr</td>
      <td >J&eacuteheu</td>
      <td >2E809-130</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Pierre ROY chez Pierre MICHEAU</td>
      <td  align=right x:num>866</td>
      <td >Ma&icirctre cordonnier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38840">03-mai</td>
      <td >Desport</td>
      <td >2E2128-10</td>
      <td >Champniers</td>
      <td >Transaction</td>
      <td >Jacques BOYTEAU et Jean MESNARD</td>
      <td  align=right x:num>1014</td>
      <td >Marie BOYTEAU fe de Jean</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39782">30-nov</td>
      <td >Dumontet</td>
      <td >2E2736-60</td>
      <td >Dignac</td>
      <td >Quittance</td>
      <td >Jean BIARD laboureur et Fran&ccediloise DUPRE</td>
      <td  align=right x:num>1156</td>
      <td >&agrave Fran&ccedilois DUPRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39008">18-oct</td>
      <td >Boutillier</td>
      <td >2E227-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Louis LOUETTE et Marguerite JAYET</td>
      <td  align=right x:num>957</td>
      <td >Fille de J. et Marg. MAUBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38863">26-mai</td>
      <td >Gauvry</td>
      <td >2E4295-20</td>
      <td >Mornac</td>
      <td >Transport</td>
      <td >De Antoine &agrave Jehan ESCOUPEAU son fr&egravere</td>
      <td  align=right x:num>877</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39489">11-f&eacutevr</td>
      <td >Cladier</td>
      <td >2E363-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jean GRATEREAU et Jean NAUZAIS</td>
      <td  align=right x:num>1158</td>
      <td >et Perrine GRATEREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38530">27-juin</td>
      <td >J&eacuteheu</td>
      <td >2E809-150</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Charlotte TERRADE et Antoinette ROUGIER</td>
      <td  align=right x:num>867</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39726">05-oct</td>
      <td >Daniaud</td>
      <td >2E5933-160</td>
      <td >Vaux-Rouillac</td>
      <td >Sommation</td>
      <td >S&eacutebastien &agrave Jean et Guillaume BOISDON</td>
      <td  align=right x:num>1165</td>
      <td >apr&egraves d&eacutec&egraves de Nicolas leur p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38514">11-juin</td>
      <td >J&eacuteheu</td>
      <td >2E809-140</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Philippe TULLIER et Fran&ccedilois GAUVRY</td>
      <td  align=right x:num>867</td>
      <td >Main lev&eacutee</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="38896">28-juin</td>
      <td >Gauvry</td>
      <td >2E4295-30</td>
      <td >Mornac</td>
      <td >Mariage</td>
      <td >Mery et Fran&ccediloise BIARD et Je. LAMOUREUX</td>
      <td  align=right x:num>877</td>
      <td >et Antoine VARACHE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1676</td>
      <td  align=right
  x:num="39493">15-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5933-120</td>
      <td >Vaux-Rouillac</td>
      <td >Baillette</td>
      <td >&agrave Mathieu et Mac&eacute GONTIER</td>
      <td  align=right x:num>1164</td>
      <td >de terres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38372">20-janv</td>
      <td >J&eacuteheu</td>
      <td >2E809-200</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean GUYONNET et Fran&ccediloise DELAURIERE</td>
      <td  align=right x:num>867</td>
      <td >Fille de Hugues</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39539">01-avr</td>
      <td >Daniaud</td>
      <td >2E5933-200</td>
      <td >Vaux-Rouillac</td>
      <td >Sommation</td>
      <td >Pierre HERAUDEAU &agrave Jacques MESNARD</td>
      <td  align=right x:num>1165</td>
      <td >barriques d'eau de vie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38750">02-f&eacutevr</td>
      <td >Desport</td>
      <td >2E2128-30</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean SURREAU et Marie ARONDEAU</td>
      <td  align=right x:num>1014</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38973">13-sept</td>
      <td >Clochard</td>
      <td >2E412-100</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois RIFFAUD et Catherine HAY</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39448">01-janv</td>
      <td >Dumontet</td>
      <td >2E2736-70</td>
      <td >Dignac</td>
      <td >Quittance</td>
      <td >&agrave Jean BIARD laboureur et Fran&ccediloise DUPON</td>
      <td  align=right x:num>1156</td>
      <td >de Estienne PANYOT(?)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38846">09-mai</td>
      <td >Pillorget</td>
      <td >2E2166-30</td>
      <td >Champniers</td>
      <td >Ferme</td>
      <td >Joseph TARDIEU &agrave Pierre DUMOUSSEAU</td>
      <td  align=right x:num>1026</td>
      <td >des moulins de Villement</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39668">08-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5933-220</td>
      <td >Vaux-Rouillac</td>
      <td >Sommation</td>
      <td >&agrave Mathieu et Mac&eacute GONTIER</td>
      <td  align=right x:num>1165</td>
      <td >de Bois Renard, M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1677</td>
      <td class=xl4320222 align=right
  x:num="38529">26-juin</td>
      <td class=xl4220222>J&eacuteheu</td>
      <td class=xl4420222>2E809-220</td>
      <td class=xl4220222>Angoul&ecircme</td>
      <td class=xl4220222>Consignation</td>
      <td class=xl4220222>Antoine LAMBERT Prieur de Charras</td>
      <td class=xl4220222 align=right x:num>867</td>
      <td class=xl4220222>&agrave Pierre THUET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38530">27-juin</td>
      <td >Chauvin</td>
      <td >2E311-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean MESNADEAU et Anne ANDRE</td>
      <td  align=right x:num>804</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39057">06-d&eacutec</td>
      <td >Clochard</td>
      <td >2E412-110</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >Fran&ccediloise BUTET et DUPUY ses enfants</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39520">13-mars</td>
      <td >Daniaud</td>
      <td >2E5933-190</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Fran&ccedilois HERAUDEAU dit l'avocat</td>
      <td  align=right x:num>1165</td>
      <td >&agrave Guillaume et Pierre MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38878">10-juin</td>
      <td >Pillorget</td>
      <td >2E2166-40</td>
      <td >Champniers</td>
      <td >Proc&egraves-verbal</td>
      <td >Joseph TARDIEU et Pierre DUMOUSSEAU</td>
      <td  align=right x:num>1026</td>
      <td >des moulins de Villement</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39654">25-juil</td>
      <td >Daniaud</td>
      <td >2E5933-210</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Pierre HERAUDEAU &agrave Jean COMPTE</td>
      <td  align=right x:num>1165</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38425">14-mars</td>
      <td >J&eacuteheu</td>
      <td >2E809-210</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Berthomm&eacute BOITAUD &agrave Robert COLLIN</td>
      <td  align=right x:num>867</td>
      <td >Voir <font
  class=font520222>Jean BOISTEAU</font></td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39485">07-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5933-180</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >&agrave Jean GONTIER</td>
      <td  align=right x:num>1165</td>
      <td >de Bois Renard, M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="39612">13-juin</td>
      <td >Prevost</td>
      <td >2E2775-30</td>
      <td >Douzat</td>
      <td >Mariage</td>
      <td >Pierre MARQUAIS et Marguerite BOISDON</td>
      <td  align=right x:num>1151</td>
      <td >Fille Fr.  et Perrine BERNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1677</td>
      <td  align=right
  x:num="38371">19-janv</td>
      <td >J&eacuteheu</td>
      <td >2E809-190</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jeanne MONTAND et GODIN</td>
      <td  align=right x:num>867</td>
      <td >et Louis SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39751">30-oct</td>
      <td >Dumontet</td>
      <td >2E2736-80</td>
      <td >Dignac</td>
      <td >Vente</td>
      <td >&agrave Jean BIARD md. de Jean DEROULLEDE</td>
      <td  align=right x:num>1156</td>
      <td >de bois de ch&acirctaigner</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38733">16-janv</td>
      <td >Desport</td>
      <td >2E2128-40</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Antoine et Catherine CHERBONNIERs</td>
      <td  align=right x:num>1014</td>
      <td >et Pierre et Fran&ccedilse SEGAINs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38595">31-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E934-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel GAUTRAUD et Marguerite BOISTEAU</td>
      <td  align=right x:num>858</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39675">15-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5934-120</td>
      <td >Vaux-Rouillac</td>
      <td >Echange</td>
      <td >Jean BOISDON et Jean MOUNIER</td>
      <td  align=right x:num>1165</td>
      <td >et Fran&ccedilois BARRY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38754">06-f&eacutevr</td>
      <td >Col</td>
      <td >2E4543-20</td>
      <td >La Rochef.</td>
      <td >Transaction</td>
      <td >Charles DARS et Fran&ccedilois GESMOND</td>
      <td  align=right x:num>1022</td>
      <td >avec les FOUCAUDs p&egravere et fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38938">09-ao&ucirct</td>
      <td >Robin</td>
      <td >2E1112-150</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre PAPIN et Elizabeth SIMONNOT</td>
      <td  align=right x:num>965</td>
      <td >L'Isle-d'Espagnac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39709">18-sept</td>
      <td >Daniaud</td>
      <td >2E5934-140</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Fran&ccedilois GONTIER</td>
      <td  align=right x:num>1165</td>
      <td >de Vaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38501">29-mai</td>
      <td >Chauvin</td>
      <td >2E311-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean JOUANNET et Jeanne COUPEAU</td>
      <td  align=right x:num>804</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39675">15-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5934-130</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Jean BOISDON &agrave Jean MOUNIER</td>
      <td  align=right x:num>1165</td>
      <td >et Fran&ccedilois BARRY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39712">21-sept</td>
      <td >Daniaud</td>
      <td >2E5934-150</td>
      <td >Vaux-Rouillac</td>
      <td >Sommation</td>
      <td >Pierre GONTIER &agrave Pierre HERAUDEAU</td>
      <td  align=right x:num>1165</td>
      <td >d&icircme de vigne. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39792">10-d&eacutec</td>
      <td >Dumontet</td>
      <td >2E2736-90</td>
      <td >Dignac</td>
      <td >Accord</td>
      <td >Jean BIARD md. et Jean LACATON</td>
      <td  align=right x:num>1156</td>
      <td >et Jean GUITARD (ch&acirctaigner)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="38754">06-f&eacutevr</td>
      <td >Col</td>
      <td >2E4543-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >De Pierre SAUTEREAU &agrave Charles DARS</td>
      <td  align=right x:num>1022</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39675">15-ao&ucirct</td>
      <td >Daniaud</td>
      <td >2E5934-110</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Jean BOISDON et Marie SAUVESTRE</td>
      <td  align=right x:num>1165</td>
      <td >&agrave Jean SAUVESTRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39805">23-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5934-160</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Guillaume BONJOUR</td>
      <td  align=right x:num>1165</td>
      <td >&agrave Mauricette GUIONNET sa fe.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td  align=right
  x:num="39585">17-mai</td>
      <td >Daniaud</td>
      <td >2E5934-100</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Louis HERAUDEAU &agrave Jacques HERAUDEAU</td>
      <td  align=right x:num>1165</td>
      <td >son fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1678</td>
      <td class=xl2420222 align=right x:num="39857">13-f&eacutevr</td>
      <td >Grassin</td>
      <td >2E4661-10</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >Charles DARS de Jacques MUYS</td>
      <td  align=right x:num>1267</td>
      <td >Terres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right x:num="39594">26-mai</td>
      <td >Daniaud</td>
      <td >2E5934-230</td>
      <td >Vaux-Rouillac</td>
      <td >Partage</td>
      <td >Marie ROBERT, Jean et S&eacutebastien BOISDON</td>
      <td  align=right x:num>1165</td>
      <td >apr&egraves d&eacutec&egraves Nicolas BOISDON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39547">09-avr</td>
      <td >Gillibert</td>
      <td >2E706-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Guillaume &agrave S&eacutebastien (et Jean) BOISDON</td>
      <td  align=right x:num>1139</td>
      <td >d'Angoul&ecircme et Echallat</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38907">09-juil</td>
      <td >Dumontet</td>
      <td >2E2737-20</td>
      <td >Dignac</td>
      <td >Vente</td>
      <td >Jean BIARD de Pierre CLERC</td>
      <td  align=right x:num>970</td>
      <td >de bois &agrave livrer &agrave S&eacuteguignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Col</td>
      <td >2E4543-40</td>
      <td >La Rochef.</td>
      <td >March&eacute</td>
      <td >Catherine DARS veuve de Fran&ccedil. DARGEAT</td>
      <td  align=right x:num>1022</td>
      <td >Jacques BOUDAUD charpent.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39778">26-nov</td>
      <td >Cladier</td>
      <td >2E366-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Cl&eacutement et Jean LIZEE &agrave Martial LIZEE fr&egravere</td>
      <td  align=right x:num>1160</td>
      <td >Fils Jean et Colette SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38827">20-avr</td>
      <td >Dumontet</td>
      <td >2E2737-10</td>
      <td >Dignac</td>
      <td >Ferme</td>
      <td >Nicolas BIARD de Guillaume BARDAIN</td>
      <td  align=right x:num>970</td>
      <td >Mar&eacutechal de Sers</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39768">16-nov</td>
      <td >Cladier</td>
      <td >2E366-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >&agrave Jean GAILHARD et Cath. RIVAUD</td>
      <td  align=right x:num>1160</td>
      <td >du petit moulin de Momont</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38953">24-ao&ucirct</td>
      <td >Clochard</td>
      <td >2E412-170</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jacques LAURAND et Marie GAILLARD</td>
      <td  align=right x:num>954</td>
      <td >Fille de Jean GAILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39547">09-avr</td>
      <td >Cladier</td>
      <td >2E366-10</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >Fran&ccedilois CHASSAIGNE et Fran&ccediloise BRISSON</td>
      <td  align=right x:num>1160</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39550">12-avr</td>
      <td >Daniaud</td>
      <td >2E5934-210</td>
      <td >Vaux-Rouillac</td>
      <td >Arrentement</td>
      <td >S&eacutebastien SAUVESTRE &agrave Jean BOISDON</td>
      <td  align=right x:num>1165</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39797">15-d&eacutec</td>
      <td >Cladier</td>
      <td >2E366-40</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >Martial LIZEE et le cur&eacute de Pougn&eacute</td>
      <td  align=right x:num>1160</td>
      <td >Fils Jean et Colette SURREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39558">20-avr</td>
      <td >Daniaud</td>
      <td >2E5934-220</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jacques GONTIER et Marie DEVRIER</td>
      <td  align=right x:num>1165</td>
      <td >Fils Fran&ccedilois et Marie BERNARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38984">24-sept</td>
      <td >Robin</td>
      <td >2E1112-180</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean NOBLESSE et Marie VERGNAUD</td>
      <td  align=right x:num>966</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39760">08-nov</td>
      <td >Daniaud</td>
      <td >2E5934-250</td>
      <td >Vaux-Rouillac</td>
      <td >Transaction</td>
      <td >Pierre BONJOUR dit &quot;La Plante&quot;</td>
      <td  align=right x:num>1165</td>
      <td >et autres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="38845">08-mai</td>
      <td >Col</td>
      <td >2E4543-30</td>
      <td >La Rochef.</td>
      <td >Partage</td>
      <td >et inventaire Charles DARS et Mich. GOYON</td>
      <td  align=right x:num>1022</td>
      <td >veuve de Jean DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39806">24-d&eacutec</td>
      <td >Cladier</td>
      <td >2E366-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Guillaume LIZEE et FOUGIERE</td>
      <td  align=right x:num>1160</td>
      <td >de ROSSIGNOL et  MAUFRAS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right x:num="39877">5-mars</td>
      <td >Grassin</td>
      <td >2E4662-10</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >par Charles DARS de Fran&ccedilois MARBILLE</td>
      <td  align=right x:num>1281</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="39923">20-avr</td>
      <td >Grassin</td>
      <td >2E4662-20</td>
      <td >La Rochef.</td>
      <td >Acquisition</td>
      <td >par Charles DARS de Antoinette DELALUE</td>
      <td  align=right x:num>1281</td>
      <td >veuve Imbert JONCQUET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1679</td>
      <td  align=right
  x:num="40010">16-juil</td>
      <td >Grassin</td>
      <td >2E4662-30</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >&agrave Charles DARS de Fran&ccedilois DEPRESIGOU</td>
      <td  align=right x:num>1281</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right x:num="39463">16-janv</td>
      <td >Daniaud</td>
      <td >2E5935-110</td>
      <td >Vaux-Rouillac</td>
      <td >D&eacuteclaration</td>
      <td >Jean IZAMBARD, Pierre BONJOUR, etc.</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38405">22-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E312-20</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Jean ROY et Marie BARBARY</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39463">16-janv</td>
      <td >Daniaud</td>
      <td >2E5935-100</td>
      <td >Vaux-Rouillac</td>
      <td >Testament</td>
      <td >Marie IZAMBARD femme Antoine VINCENT</td>
      <td  align=right x:num>1167</td>
      <td >et Pierre VINCENT son oncle</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38520">17-juin</td>
      <td >Chauvin</td>
      <td >2E312-60</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves-verbal</td>
      <td >Jean COUPEAU - Jean JOUANNET</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39014">24-oct</td>
      <td >Robin</td>
      <td >2E1112-200</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >LAMOUREUX &agrave Louis COURRIVAUD</td>
      <td  align=right x:num>966</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39014">24-oct</td>
      <td >Robin</td>
      <td >2E1112-210</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >LAMOUREUX</td>
      <td  align=right x:num>966</td>
      <td >du four de leur p&egravere et m&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39481">03-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5935-140</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Etienne GONTIER et Catherine RIGAUD</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39474">27-janv</td>
      <td >Daniaud</td>
      <td >2E5935-120</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Marquise IZAMBARD vve Pierre LEMOYNE</td>
      <td  align=right x:num>1167</td>
      <td >&agrave de la CHALONIE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38955">26-ao&ucirct</td>
      <td >Clochard</td>
      <td >2E412-180</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre ALABONNE et Antoinette ROUSSEAU</td>
      <td  align=right x:num>954</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39513">06-mars</td>
      <td >Daniaud</td>
      <td >2E5935-170</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Jean BONJOUR de Helie MATIGNON et A. BOUT<span style='display:none'>TIN</span></td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39493">15-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E2935-160</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Guillaume NAVARRE et Guillemette GONTIER</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38523">20-juin</td>
      <td >J&eacuteheu</td>
      <td >2E810-20</td>
      <td >Angoul&ecircme</td>
      <td >Ratification</td>
      <td >Pierre, Et. , Ant. , Louis et Guillemtte. MESNARD</td>
      <td  align=right x:num>864</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38480">8-mai</td>
      <td >Chauvin</td>
      <td >2E312-50</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves-verbal</td>
      <td >Jean COUPEAU</td>
      <td  align=right x:num>783</td>
      <td >Naufrage de gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38393">10-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E810-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BOYLEVIN et Marie FRETILLIER</td>
      <td  align=right x:num>864</td>
      <td >R&eacutesili&eacute par Mie FRETILLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38478">6-mai</td>
      <td >Chauvin</td>
      <td >2E312-40</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Jean COUPEAU &agrave Bernard GAY</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39483">05-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5935-150</td>
      <td >Vaux-Rouillac</td>
      <td >Sommation</td>
      <td >Jeanne MESNARD veuve Helie IZAMBARD</td>
      <td  align=right x:num>1167</td>
      <td >&agrave Pierre IZAMBARD son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39475">28-janv</td>
      <td >Daniaud</td>
      <td >2E5935-130</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Cybard GONTIER et Marie DANYAUD</td>
      <td  align=right x:num>1167</td>
      <td >&agrave Guillaume MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="38478">6-mai</td>
      <td >Chauvin</td>
      <td >2E312-30</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Jean COUPEAU, Jean JOUANNET</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=center x:num="-80305">#######</td>
      <td >Audouin</td>
      <td >2E118-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Fran&ccedilois BIARD et Philippe BONNIN sa femme</td>
      <td  align=right x:num>1334</td>
      <td >&agrave Pierre RESPINGEAY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39872">28-f&eacutevr</td>
      <td >Audouin</td>
      <td >2E118-40</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Meubles de + Marie MESNARD fe Pierre IRVOIX</td>
      <td  align=right x:num>1334</td>
      <td >Marie, Anne et Denis IRVOIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="39972">8-juin</td>
      <td >Audouin</td>
      <td >2E118-50</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Louis DESCARSELLE</td>
      <td  align=right x:num>1334</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1680</td>
      <td  align=right
  x:num="40029">4-ao&ucirct</td>
      <td >Audouin</td>
      <td >2E118-60</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Antoine ROUHIER &agrave Pierre(?) ROUHIER son fils</td>
      <td  align=right x:num>1334</td>
      <td >de Champniers et St Yriers</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right x:num="38474">2-mai</td>
      <td >J&eacuteheu</td>
      <td >2E811-40</td>
      <td >Angoul&ecircme</td>
      <td >Compromis</td>
      <td >GIRARD - BIARD</td>
      <td  align=right x:num>863</td>
      <td >Jacquette BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38375">23-janv</td>
      <td >Chauvin</td>
      <td >2E312-70</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Jean ROY contre Louis DURET</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39502">24-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5935-210</td>
      <td >Vaux-Rouillac</td>
      <td >Inventaire</td>
      <td >Agn&eacute GONTIER veuve Fran&ccedilois VINET</td>
      <td  align=right x:num>1167</td>
      <td >Orlut, M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38815">08-avr</td>
      <td >Clochard</td>
      <td >2E412-190</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Arnaud ROY et Fran&ccediloise COLLAIN</td>
      <td  align=right x:num>954</td>
      <td >Eliette ? COLLAIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39590">22-mai</td>
      <td >Cladier</td>
      <td >2E368-10</td>
      <td >Angoul&ecircme</td>
      <td >R&eacutesiliation</td>
      <td >Jean CARRE contrat de m&eacutetairie &agrave Chaumontet</td>
      <td  align=right x:num>1162</td>
      <td >Fils de Jean</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38852">15-mai</td>
      <td >Clochard</td>
      <td >2E412-200</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Vincent BENESTEAU et Frse CHAUVEAU</td>
      <td  align=right x:num>954</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38557">24-juil</td>
      <td >J&eacuteheu</td>
      <td >2E811-60</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Fran&ccedilois ROUSSEAU et Marguerite AUBOUIN</td>
      <td  align=right x:num>863</td>
      <td >&agrave CHOPPIN et AUBINEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38640">15-oct</td>
      <td >Chauvin</td>
      <td >2E312-80</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean FAURAN et Marie JAYET</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39038">17-nov</td>
      <td >Izambard</td>
      <td >2E2802-110</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Jean GONTIER et Denise BOILEVIN</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39670">10-ao&ucirct</td>
      <td >Cladier</td>
      <td >2E368-40</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >Antoine BOILEVIN et Jeanne BARATTE</td>
      <td  align=right x:num>1162</td>
      <td >et Fran&ccedilois BARATTE fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39040">19-nov</td>
      <td >Izambard</td>
      <td >2E2802-120</td>
      <td >Echallat</td>
      <td >Ratification</td>
      <td >du contrat des mariages GONTIERxBOILEVIN</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39452">05-janv</td>
      <td >Daniaud</td>
      <td >2E5935-190</td>
      <td >Vaux-Rouillac</td>
      <td >Inventaire</td>
      <td >Catherine GONTIER veuve Fran&ccedilois GAUDON</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39583">15-mai</td>
      <td >Gillibert</td>
      <td >2E707-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume BOISDON et Elisabeth BENOIST</td>
      <td  align=right x:num>1140</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39464">17-janv</td>
      <td >Daniaud</td>
      <td >2E5935-200</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Jean GONTIER et Jeanne MARTIN</td>
      <td  align=right x:num>1167</td>
      <td >Les Lich&egraveres, M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38760">12-f&eacutevr</td>
      <td >Robin</td>
      <td >2E1112-240</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Catherine DE MARSAT</td>
      <td  align=right x:num>966</td>
      <td >future femme de Jean LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39769">17-nov</td>
      <td >Daniaud</td>
      <td >2E5935-250</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Pierre GONTIER sergier dit Bois Renard</td>
      <td  align=right x:num>1167</td>
      <td >Bois Renard, M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38390">7-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E811-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre IMBERT et Marie CATIN</td>
      <td  align=right x:num>863</td>
      <td >Fils de P. et J. ROUSSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39733">12-oct</td>
      <td >Daniaud</td>
      <td >2E5935-240</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Marguerite GONTIER veuve Louis ROY</td>
      <td  align=right x:num>1167</td>
      <td >Bois Renard, M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39038">17-nov</td>
      <td >Izambard</td>
      <td >2E2802-110</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Antoine BOILEVIN et Marguerite GONTIER</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38361">9-janv</td>
      <td >J&eacuteheu</td>
      <td >2E811-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Catherine DESMAISON et L&eacuteonard YRVOIX</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38535">2-juil</td>
      <td >J&eacuteheu</td>
      <td >2E811-50</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jean BOYTAUD et MORANT</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39775">23-nov</td>
      <td >Daniaud</td>
      <td >2E5935-260</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Guillaume RICHARD et Heliette GONTIER</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38988">28-sept</td>
      <td >Clochard</td>
      <td >2E412-210</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Philippe BOISTEAU et Marg. BARRATTE</td>
      <td  align=right x:num>954</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39813">31-d&eacutec</td>
      <td >Daniaud</td>
      <td >2E5935-270</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois GRATEREAU et Perrine POUPARD</td>
      <td  align=right x:num>1167</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39587">19-mai</td>
      <td >Gillibert</td>
      <td >2E707-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Guillaume BOISDON</td>
      <td  align=right x:num>1140</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38779">03-mars</td>
      <td >Izambard</td>
      <td >2E2802-100</td>
      <td >Echallat</td>
      <td >Vente</td>
      <td >Jean IZAMBARD et Jeanne LIMOUSIN</td>
      <td  align=right x:num>1020</td>
      <td > &agrave Jean ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38384">1-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E811-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Pierre ANDRE et Jean MESNADEAU</td>
      <td  align=right x:num>863</td>
      <td >&agrave Jean AYMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="38541">8-juil</td>
      <td >Barbotteau</td>
      <td >&nbsp;</td>
      <td >Bassac</td>
      <td >Mariage</td>
      <td >Jean ROY et Marguerite CASTAIGNE</td>
      <td >&nbsp;</td>
      <td >Transcrip. de Bruno Veillon</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="39656">27-juil</td>
      <td >Gibaud</td>
      <td >2E690-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean SIMARD et Marie CHOLLET</td>
      <td  align=right x:num>1139</td>
      <td >d'Angoul&ecircme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right x:num="40078">22-sept</td>
      <td >Audouin</td>
      <td >2E119-20</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Philippe BOISTEAU &agrave Pierre RESPINGEAY</td>
      <td  align=right x:num>1335</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1681</td>
      <td  align=right
  x:num="40050">25-ao&ucirct</td>
      <td >Audouin</td>
      <td >2E119-10</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Antoine DESCARSELLE</td>
      <td  align=right x:num>1334</td>
      <td >&eacutepoux de Louise PREVOST</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right x:num="38652">27-oct</td>
      <td >Chauvin</td>
      <td >2E314-110</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Jean ROY &agrave L&eacuteonard DESMAISON</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="39060">09-d&eacutec</td>
      <td >Desport</td>
      <td >2E2128-60</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Helie et Jeanne MESNARDs</td>
      <td  align=right x:num>1014</td>
      <td >Jean et Margte MAUBERTs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38497">25-mai</td>
      <td >Chauvin</td>
      <td >2E314-100</td>
      <td >L'houmeau</td>
      <td >Ferme</td>
      <td >Fran&ccedilois MOURIER &agrave Jean ROY</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="39077">26-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1028-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine BERGIER et Marguerite AUDOUIN</td>
      <td  align=right x:num>1028</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38746">29-janv</td>
      <td >Boutillier</td>
      <td >2E227-20</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Jean ROY &agrave Michel ROY et Cath. COUPEAU</td>
      <td  align=right x:num>957</td>
      <td >Mari de Marg. CASTAIGNE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38935">06-ao&ucirct</td>
      <td >Renon</td>
      <td >2E2941-30</td>
      <td >Garat</td>
      <td >Mariage</td>
      <td >Antoine MESNARD et Marie BIARD</td>
      <td  align=right x:num>971</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38806">30-mars</td>
      <td >Micheau</td>
      <td >2E1028-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guy DUCOUST et Marthe LIZEE</td>
      <td  align=right x:num>1028</td>
      <td >Ni&egravece de Marie LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38372">20-janv</td>
      <td >Dumontet</td>
      <td >2E2738-10</td>
      <td >Dignac</td>
      <td >Transaction</td>
      <td >Fran&ccedilois SIMARD et Gabriel DURAND</td>
      <td  align=right x:num>865</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38360">8-janv</td>
      <td >J&eacuteheu</td>
      <td >2E811-70</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Genis et Jaqtte ROUX et J. et Marg. JOUBERT</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="38853">16-mai</td>
      <td >Pillorget</td>
      <td >2E2167-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Olivier SURREAU et Marie BRISSEAU</td>
      <td  align=right x:num>1028</td>
      <td >P-fille de Mich. et M. DAVAILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right x:num="40083">27-sept</td>
      <td >Audouin</td>
      <td >2E119-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Berthoum&eacute BOISTEAU &agrave Pierre RESPINGEAY</td>
      <td  align=right x:num>1335</td>
      <td class=xl3520222>fils Fran&ccedilois et Ysabeau BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="40083">27-sept</td>
      <td >Audouin</td>
      <td >2E119-40</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Berthoum&eacute BOISTEAU &agrave Pierre RESPINGEAY</td>
      <td  align=right x:num>1335</td>
      <td class=xl3520222>fils Fran&ccedilois et Ysabeau BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1682</td>
      <td  align=right
  x:num="40469">18-oct</td>
      <td >Couste</td>
      <td >2E3498-10</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Jacques BALLOTTEAU et Ant. COURONNEAU</td>
      <td  align=right x:num>1491</td>
      <td class=xl3520222>fils Helie et Jeanne NEGRIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right x:num="38955">26-ao&ucirct</td>
      <td >Boutillier</td>
      <td >2E227-40</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Jean COUPEAU &agrave Philippe ARDOUIN sa femme</td>
      <td  align=right x:num>974</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="39452">05-janv</td>
      <td >Baudet</td>
      <td >2E2793-50</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Fran&ccedilois MAUBERT et Lorance MESNADEAU</td>
      <td  align=right x:num>1051</td>
      <td >de Moulidars</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38447">5-avr</td>
      <td >Chauvin</td>
      <td >2E314-140</td>
      <td >L'houmeau</td>
      <td >Sommation</td>
      <td >Jean JOUANNET contre le sieur JOFFROY</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38752">04-f&eacutevr</td>
      <td >Izambard</td>
      <td >2E2802-130</td>
      <td >Echallat</td>
      <td >Reconnaissance</td>
      <td >Marie BOISDON &agrave Jean BOISDON</td>
      <td  align=right x:num>1020</td>
      <td >et Ant. TALLON ses p&egravere &amp; m&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="39839">26-janv</td>
      <td >Petit</td>
      <td >2E5181-10</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Mariage</td>
      <td >S&eacutebastien BOISDON et S&eacutebastienne DANIAUD</td>
      <td  align=right x:num>1213</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38594">30-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E314-150</td>
      <td >L'houmeau</td>
      <td >Arrentement</td>
      <td >Jean COUPEAU &agrave son fr&egravere Pierre COUPEAU</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38607">12-sept</td>
      <td >Chauvin</td>
      <td >2E314-170</td>
      <td >L'houmeau</td>
      <td >Quittance</td>
      <td >Genis SEGUIN &agrave Philippe DELAURIERE</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38404">21-f&eacutevr</td>
      <td >Bouillaud</td>
      <td >2E211-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre et Fran&ccedilois SIMARD et Gabriel DURAND</td>
      <td  align=right x:num>841</td>
      <td >Et  Fran&ccedilois et Jean BRUNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38367">15-janv</td>
      <td >Chauvin</td>
      <td >2E314-130</td>
      <td >L'houmeau</td>
      <td >Cession</td>
      <td >Jean COUPEAU &agrave  Pierre COUPEAU gabarrier</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38613">18-sept</td>
      <td >Chauvin</td>
      <td >2E314-180</td>
      <td >L'houmeau</td>
      <td >D&eacuteclaration</td>
      <td >Jean JOUANNET le jeune &agrave Christophe GALLIER</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38594">30-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E314-160</td>
      <td >L'houmeau</td>
      <td >Vente</td>
      <td >gabarre de Jean COUPEAU &agrave Jean JOUANNET</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td >&nbsp;</td>
      <td >Robin</td>
      <td >2E1112-270</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Nicolas AUBIN et Jeanne GABORIT</td>
      <td  align=right x:num>966</td>
      <td >de Jean PRUNEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="39229">27-mai</td>
      <td >Imbert</td>
      <td >2E4684-20</td>
      <td >La Rochef.</td>
      <td >Mariages</td>
      <td >Masry et Marie DARS et Fr. et Ant. BREILLAT</td>
      <td  align=right x:num>1081</td>
      <td >Enfants de Charles DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="38706">20-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E314-190</td>
      <td >L'houmeau</td>
      <td >Visite</td>
      <td >Christophe GALLIER contre Arnaud ROY</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right x:num="39942">9-mai</td>
      <td >Audouin</td>
      <td >2E120-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Daniel et Michel TULLIER et Jean DEBUSSAT</td>
      <td  align=right x:num>1341</td>
      <td >et Marthe TULLIER sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1683</td>
      <td  align=right
  x:num="40114">28-oct</td>
      <td >Audouin</td>
      <td >2E120-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine DESCARSELLE et Catherine FETIX</td>
      <td  align=right x:num>1341</td>
      <td >de L'Houmeau</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right x:num="38592">28-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E314-220</td>
      <td >L'houmeau</td>
      <td >Sommation</td>
      <td >Louis DURET &agrave Arnaud ROY gabarrier</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="39082">31-d&eacutec</td>
      <td >Gauvry</td>
      <td >2E4296-20</td>
      <td >Mornac</td>
      <td >Mariage</td>
      <td >Jehan et Fran&ccediloise ESCOUPEAU et. . .</td>
      <td  align=right x:num>881</td>
      <td >Jehanne et Pierre SEGUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38688">2-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E812-30</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Jean VIGIER &agrave Nicolas BASSET</td>
      <td  align=right x:num>801</td>
      <td >Achat d'un pourceau</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38521">18-juin</td>
      <td >J&eacuteheu</td>
      <td >2E812-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques BARBARIT et Anne BRISSEAU</td>
      <td  align=right x:num>801</td>
      <td >fille Antoine et Jeanne MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38749">01-f&eacutevr</td>
      <td >Boutillier</td>
      <td >2E227-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Philippe DELAURIERE et Louise RULLIER</td>
      <td  align=right x:num>974</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38789">13-mars</td>
      <td >Gillibert</td>
      <td >2E708-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jeanne GENET et Mathurin AUTIN</td>
      <td  align=right x:num>1017</td>
      <td >&agrave Nicolas BASSET (peaux)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38789">13-mars</td>
      <td >Gillibert</td>
      <td >2E708-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Guillaume MALLAT</td>
      <td  align=right x:num>1017</td>
      <td >&agrave Nicolas BASSET (peaux)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38669">13-nov</td>
      <td >Chauvin</td>
      <td >2E314-230</td>
      <td >L'houmeau</td>
      <td >Mariage</td>
      <td >Michel JOUANNET et Marguerite GILIBERT</td>
      <td  align=right x:num>785</td>
      <td >fils Arnaud J. et Catherine ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38500">28-mai</td>
      <td >Chauvin</td>
      <td >2E314-210</td>
      <td >L'houmeau</td>
      <td >Ferme</td>
      <td >Fran&ccedilois PITEAU &agrave Jeanne JAYET et autres</td>
      <td  align=right x:num>785</td>
      <td >Droit de sable</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38492">20-mai</td>
      <td >Chauvin</td>
      <td >2E314-200</td>
      <td >L'houmeau</td>
      <td >Testament</td>
      <td >Philippe ARDOIN veuve de Jean COUPEAU</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1684</td>
      <td  align=right
  x:num="38547">14-juil</td>
      <td >J&eacuteheu</td>
      <td >2E812-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean BRISSAUD &agrave Pierre DUBOIS cur&eacute de St Mar<span style='display:none'>tial</span></td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38712">26-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E813-10</td>
      <td >Angoul&ecircme</td>
      <td >Compromis</td>
      <td >Jean et Michelle ROY avec Charlotte ROY</td>
      <td  align=right x:num>825</td>
      <td >Ant. ROY et Jeanne GODET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38920">22-juil</td>
      <td >Peynaud</td>
      <td >2E2768-10</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Jean RENON et Jacquette BIARD</td>
      <td  align=right x:num>871</td>
      <td >Fille de Paul et F. GRELLET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38679">23-nov</td>
      <td >Chauvin</td>
      <td >2E315-150</td>
      <td >L'houmeau</td>
      <td >Quittance</td>
      <td >Michel ROY et Cath. COUPEAU &agrave CASTAIGNE</td>
      <td  align=right x:num>786</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="39004">14-oct</td>
      <td >Fromentin</td>
      <td >2E2137-10</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Joseph CLEMENT et Fran&ccediloise VERY</td>
      <td  align=right x:num>1025</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38756">08-f&eacutevr</td>
      <td >Baudet</td>
      <td >2E2794-10</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Pierre ORDONNEAU et Marie PINEAU</td>
      <td  align=right x:num>972</td>
      <td >de Moulidars</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38781">05-mars</td>
      <td >Rouhier</td>
      <td >2E1122-20</td>
      <td >Lhoumeau</td>
      <td >Ma&icirctrise</td>
      <td >Guy ROUHIER</td>
      <td  align=right x:num>944</td>
      <td >de cordonnier</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38499">27-mai</td>
      <td >Chauvin</td>
      <td >2E315-130</td>
      <td >L'houmeau</td>
      <td >Mariage</td>
      <td >Jean ROY et Anne DURANDEAU</td>
      <td  align=right x:num>787</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38732">15-janv</td>
      <td >Pillorget</td>
      <td >2E2168-10</td>
      <td >Champniers</td>
      <td >Mariages</td>
      <td >Philippe et Antoinette CLEMENT et Pierre et</td>
      <td  align=right x:num>1030</td>
      <td >et Cath. DELONGEVILLE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38680">24-nov</td>
      <td >Chauvin</td>
      <td >2E315-160</td>
      <td >L'houmeau</td>
      <td >Quittance</td>
      <td >Antoine ROY &agrave Jean CHASTEAU</td>
      <td  align=right x:num>786</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="39022">01-nov</td>
      <td >Baudet</td>
      <td >2E2794-20</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Alexandre COUILLEBAUD et Marie MAZURE</td>
      <td  align=right x:num>972</td>
      <td >de Moulidars</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38700">14-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E315-170</td>
      <td >L'houmeau</td>
      <td >Reconnaissance</td>
      <td >COMBRET, ROY, JOUANNET &agrave DAVID</td>
      <td  align=right x:num>786</td>
      <td >Success. Arnaud JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="40114">28-oct</td>
      <td >Petit</td>
      <td >2E5182-40</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Inventaire</td>
      <td >Fran&ccedil. FENIOU curateur de Gabrielle IZAMBARD</td>
      <td  align=right x:num>1220</td>
      <td >fille Guillaume et Jacquette FENIOU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38961">01-sept</td>
      <td >Rouhier</td>
      <td >2E1122-30</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >Pierre RIFFAUD, Pierre LAURENTson gendre</td>
      <td  align=right x:num>944</td>
      <td >et Fran&ccediloise RIFFAUD sa fille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="39023">02-nov</td>
      <td >Desport</td>
      <td >2E2129-10</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean SURREAU et Michelle VARACHE</td>
      <td  align=right x:num>1016</td>
      <td >2e mariages</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38460">18-avr</td>
      <td >Gibaud</td>
      <td >2E692-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre DAVID et Marie YVER</td>
      <td  align=right x:num>864</td>
      <td >Mariage de protestants</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="38431">20-mars</td>
      <td >Chauvin</td>
      <td >2E315-120</td>
      <td >L'houmeau</td>
      <td >Quittance</td>
      <td >Michel JOUANNET &agrave L&eacuteonard FUSIGNAT</td>
      <td  align=right x:num>787</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right x:num="39870">26-f&eacutevr</td>
      <td >Audouin</td>
      <td >2E121-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Jacques BOISTEAU et Jean MESNARD</td>
      <td  align=right x:num>1349</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="40174">27-d&eacutec</td>
      <td >Audouin</td>
      <td >2E121-30</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jacquette BIARD apr&egraves d&eacutec&egraves Fr. CHASSAIGNE</td>
      <td  align=right x:num>1349</td>
      <td >Ma&icirctre gabarrier d&eacutec&eacuted&eacute &agrave Rochefort</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="40297">29-avr</td>
      <td >Couste</td>
      <td >2E3498-20</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Nicolas LOTTE et Marguerite BERNARD</td>
      <td  align=right x:num>1491</td>
      <td class=xl3520222>fils Robert et Fran&ccediloise BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1685</td>
      <td  align=right
  x:num="40488">6-nov</td>
      <td >Couste</td>
      <td >2E3498-30</td>
      <td >Mansle</td>
      <td >Vente</td>
      <td >Nicolas LOTTE &agrave Antoine LOTTE son fr&egravere</td>
      <td  align=right x:num>1491</td>
      <td class=xl3520222>fils Robert et Fran&ccediloise BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right x:num="39029">08-nov</td>
      <td >Gauvry</td>
      <td >2E4297-30</td>
      <td >Mornac</td>
      <td >Testament</td>
      <td >Etienne RIFFAUD &agrave Aymard RIFFAUD</td>
      <td  align=right x:num>885</td>
      <td >et Jacquette CLEMENT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38939">10-ao&ucirct</td>
      <td >Izambard</td>
      <td >2E2802-200</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Fran&ccedilois HERODEAU et Antoinette MARTIN</td>
      <td  align=right x:num>1020</td>
      <td >de Triac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38897">29-juin</td>
      <td >Gauvry</td>
      <td >2E4297-20</td>
      <td >Mornac</td>
      <td >Partage</td>
      <td >Entre Jean et Jean BRISSAUD</td>
      <td  align=right x:num>885</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1686</td>
      <td class=xl4520222 align=right
  x:num="38930">01-ao&ucirct</td>
      <td class=xl4220222>Rouhier</td>
      <td class=xl4420222>2E1123-10</td>
      <td class=xl4220222>Lhoumeau</td>
      <td class=xl4220222>Concordat</td>
      <td class=xl4220222>Abb&eacute de Grosbot aux religieux</td>
      <td class=xl4220222 align=right x:num>941</td>
      <td class=xl4220222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38851">14-mai</td>
      <td >Desport</td>
      <td >2E2129-40</td>
      <td >Champniers</td>
      <td >Acquisition</td>
      <td >Jean ROUFFIGNAC des RAYMONDs</td>
      <td  align=right x:num>1016</td>
      <td >de Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="39003">13-oct</td>
      <td >Rouhier</td>
      <td >2E1123-20</td>
      <td >Lhoumeau</td>
      <td >Charge</td>
      <td >Denis BASSET et Jean LAMOUREUX</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38968">08-sept</td>
      <td >Desport</td>
      <td >2E2129-50</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Denis TOUCHET et Marie LIET</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38851">14-mai</td>
      <td >Desport</td>
      <td >2E2129-30</td>
      <td >Champniers</td>
      <td >Echange</td>
      <td >Jean ROUFFIGNAC et DECOUETxVIVIER</td>
      <td  align=right x:num>1016</td>
      <td >de Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38793">17-mars</td>
      <td >Izambard</td>
      <td >2E2802-180</td>
      <td >Echallat</td>
      <td >Transaction</td>
      <td >Jean IZAMBARD pour Michel NAUD</td>
      <td  align=right x:num>1020</td>
      <td >son neveu</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38824">17-avr</td>
      <td >Desport</td>
      <td >2E2129-20</td>
      <td >Champniers</td>
      <td >Acquisition</td>
      <td >Jean ROUFFIGNAC et DECOUETxVIVIER</td>
      <td  align=right x:num>1016</td>
      <td >de Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38860">23-mai</td>
      <td >Gauvry</td>
      <td >2E4297-10</td>
      <td >Mornac</td>
      <td >Partage</td>
      <td >Entre Jeanne COUPRIE et autres COUPRIE</td>
      <td  align=right x:num>885</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="39699">08-sept</td>
      <td >Serpaud</td>
      <td >2E1171-160</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Fran&ccedilois IRVOIX et ses enfants Pierre et Jean</td>
      <td  align=right x:num>1173</td>
      <td >&agrave Perrine BOUILLON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1030-20</td>
      <td >Angoul&ecircme</td>
      <td >M&eacutetairie</td>
      <td >Arnaud GAILLARD et Antoinette RIPE</td>
      <td  align=right x:num>1020</td>
      <td >de dame Marie GUINDET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="39706">15-sept</td>
      <td >Serpaud</td>
      <td >2E1171-170</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Fran&ccedilois IRVOIX et ses enfants Pierre et Jean</td>
      <td  align=right x:num>1173</td>
      <td >de Perrine BOUILLON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38761">13-f&eacutevr</td>
      <td >Izambard</td>
      <td >2E2802-170</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Pierre GENDRON et Anne IZAMBARD</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right
  x:num="38892">24-juin</td>
      <td >Micheau</td>
      <td >2E1030-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Martin BOYTEAU et Marie ROY</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1686</td>
      <td  align=right x:num="40059">3-sept</td>
      <td >Audouin</td>
      <td >2E121-40</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Catherine DARS veuve DARJAT</td>
      <td  align=right x:num>1349</td>
      <td >&agrave Jean DULIGNON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right x:num="38419">8-mars</td>
      <td >Gillibert</td>
      <td >2E710-30</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jean BIBAUD</td>
      <td  align=right x:num>823</td>
      <td >Rapp  Antoinette SIMARD ?</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38788">12-mars</td>
      <td >Rouhier</td>
      <td >2E1124-10</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves-verbal</td>
      <td >ANDRE, GRENON, CARRE et Arnaud ROY</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39059">08-d&eacutec</td>
      <td >Clochard</td>
      <td >2E413-130</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois DOYEN et Anne TOURNIER</td>
      <td  align=right x:num>953</td>
      <td >Fille de J. et Jeanne BOUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1124-40</td>
      <td >Lhoumeau</td>
      <td >Donnation</td>
      <td >Pierre, Nicolas et Fran&ccediloise RIFFAUD</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1124-50</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Nicolas et Fran&ccediloise RIFFAUD</td>
      <td  align=right x:num>941</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1124-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre VIDAUD et Anne AUBOUIN</td>
      <td  align=right x:num>941</td>
      <td >Fille de L&eacuteo et J. GABORIT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39546">08-avr</td>
      <td >Serpaud</td>
      <td >2E1171-180</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Mathurine BERTOUME femme de Helie COSTE</td>
      <td  align=right x:num>1173</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38541">8-juil</td>
      <td >Chauvin</td>
      <td >2E316-120</td>
      <td >Lhoumeau</td>
      <td >Accord</td>
      <td >Jean JOUANNET &quot;Le Jeune&quot;et Fran&ccedil. PISSEAU</td>
      <td  align=right x:num>811</td>
      <td >&agrave propos d'une muraille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38769">21-f&eacutevr</td>
      <td >Micheau</td>
      <td >2E1030-30</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Marie CONSTANTIN veuve de Guil. TEXIER</td>
      <td  align=right x:num>1020</td>
      <td >de Voeuil-et-Giget</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38547">14-juil</td>
      <td >Chauvin</td>
      <td >2E316-130</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Jean ARDOUIN &agrave Jean JOUANNET &quot;Le Jeune&quot;</td>
      <td  align=right x:num>811</td>
      <td >Les DELACOUR</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38203">4-ao&ucirct</td>
      <td >Clochard</td>
      <td >2E413-10</td>
      <td >L'Houmeau</td>
      <td >Arrentement</td>
      <td >DAUVEAU L&eacuteonard</td>
      <td  align=right x:num>750</td>
      <td >Fse MONBOEUF - P. DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38903">05-juil</td>
      <td >Serpaud</td>
      <td >2E1171-100</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Fran&ccedilois BRISSAUD et Marg. RIFFAUD</td>
      <td  align=right x:num>978</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38500">28-mai</td>
      <td >Manci&eacute</td>
      <td >2E936-500</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Fran&ccediloise BONNORONT - Pierre CHEZADANT</td>
      <td  align=right x:num>779</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="38665">9-nov</td>
      <td >Chauvin</td>
      <td >2E316-150</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Louis SURREAU &agrave Pierre GAUTIER</td>
      <td  align=right x:num>811</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right x:num="39831">18-janv</td>
      <td >Audouin</td>
      <td >2E122-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard BARRAUD et Louise MOISSAN</td>
      <td  align=right x:num>1349</td>
      <td >2e mariage de L&eacuteonard</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39833">20-janv</td>
      <td >Audouin</td>
      <td >2E122-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BENESTAUD et Jacquette THINON</td>
      <td  align=right x:num>1349</td>
      <td >Jacquette de M&eacuterignac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="39952">19-mai</td>
      <td >Audouin</td>
      <td >2E122-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre SURREAU et Marguerite RIPE</td>
      <td  align=right x:num>1349</td>
      <td >de St Martin d'Angoul&ecircme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1687</td>
      <td  align=right
  x:num="40104">18-oct</td>
      <td >Audouin</td>
      <td >2E122-40</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >apr&egraves d&eacutec&egraves Philippe BOISTEAU</td>
      <td  align=right x:num>1349</td>
      <td >&eacutepx Anne DURAND</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right x:num="38532">29-juin</td>
      <td >Chauvin</td>
      <td >2E316-200</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Pierre ROY cur&eacute de Brie &agrave Catherine COUPEAU</td>
      <td  align=right x:num>811</td>
      <td >et Jean ROY, Jean SIRAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38958">29-ao&ucirct</td>
      <td >Micheau</td>
      <td >2E1030-70</td>
      <td >Angoul&ecircme</td>
      <td >M&eacutetairie</td>
      <td >Jean CARRE et Marie VARACHE</td>
      <td  align=right x:num>1020</td>
      <td >Fils de Jean et M. DELACROIX</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38790">14-mars</td>
      <td >Pillorget</td>
      <td >2E2169-30</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Etienne CLEMENT et Jeanne ROUSSEAU</td>
      <td  align=right x:num>1034</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="39051">30-nov</td>
      <td >Gauvry</td>
      <td >2E4297-50</td>
      <td >Mornac</td>
      <td >Mariage</td>
      <td >Etienne RIFFAUD et Anne MAZAT</td>
      <td  align=right x:num>885</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38846">9-mai</td>
      <td >J&eacuteheu</td>
      <td >2E814-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre JOUBERT et Anne CAILLIER</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38790">14-mars</td>
      <td >Pillorget</td>
      <td >2E2169-30</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >L&eacuteonard ROUSSEAU et Catherine CLEMENT</td>
      <td  align=right x:num>1034</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="39000">10-oct</td>
      <td >Gauvry</td>
      <td >2E4297-40</td>
      <td >Mornac</td>
      <td >Ferme</td>
      <td >Entre Pierre COUPRIE et Nicolas BIARD</td>
      <td  align=right x:num>885</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="39080">29-d&eacutec</td>
      <td >Col</td>
      <td >2E4544-10</td>
      <td >La Rochef.</td>
      <td >Testament</td>
      <td >Jean DARS</td>
      <td  align=right x:num>1021</td>
      <td >Fils  Charles et Jeanne GOYON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38923">25-juil</td>
      <td >Serpaud</td>
      <td >2E1171-110</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >L. AUBINEAU, P. COUSSEAU et M. LURAT</td>
      <td  align=right x:num>978</td>
      <td >et G. et P. RIFFAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38655">30-oct</td>
      <td >Bouillaud</td>
      <td >2E211-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Marie PERROT &agrave Marg. GUITARD et J. SIMARD</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38961">1-sept</td>
      <td >J&eacuteheu</td>
      <td >2E814-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Abraham ROY et Ren&eacutee RAYMOND</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38655">30-oct</td>
      <td >Bouillaud</td>
      <td >2E211-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Fran&ccedilois SIMARD &agrave Michelle BARDET sa femme</td>
      <td  align=right x:num>841</td>
      <td >Et testament de Fr. SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38771">23-f&eacutevr</td>
      <td >Clochard</td>
      <td >2E413-150</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >Jean CARRE et Marie VARACHE</td>
      <td  align=right x:num>953</td>
      <td >et Jean POIRIER gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38784">08-mars</td>
      <td >Pillorget</td>
      <td >2E2169-30</td>
      <td >Champniers</td>
      <td >Transaction</td>
      <td >Philippe BLANCHON et Antoine ARONDEAU</td>
      <td  align=right x:num>1034</td>
      <td >et Marg. MESTADRIE sa fe.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38866">29-mai</td>
      <td >Izambard</td>
      <td >2E2802-210</td>
      <td >Echallat</td>
      <td >Proc&egraves-verbal</td>
      <td >Berthom&eacute IZAMBARD</td>
      <td  align=right x:num>1020</td>
      <td >Fils de Berth. et M. GUILLOT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38721">04-janv</td>
      <td >Micheau</td>
      <td >2E1030-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard et Marie MESNARDs</td>
      <td  align=right x:num>1020</td>
      <td >et Pierre et Louise GRELIERs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38777">01-mars</td>
      <td >Micheau</td>
      <td >2E1030-60</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean MESNARD et Marie PINASSEAU</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38661">5-nov</td>
      <td >Bouillaud</td>
      <td >2E211-40</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Fran&ccedilois SIMARD et Marguerite GUYTARD</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38942">13-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1125-60</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Jacquette BIARD veuve  Fran&ccedils CHASSAIGNE</td>
      <td  align=right x:num>938</td>
      <td >&agrave Fran&ccedilois COUILLEBAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38763">15-f&eacutevr</td>
      <td >Pillorget</td>
      <td >2E2169-10</td>
      <td >Champniers</td>
      <td >Quittance</td>
      <td >Margte PERROT &agrave Fran&ccedilois BIARD</td>
      <td  align=right x:num>1034</td>
      <td >Paul BIARD et Fce GRELET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38752">04-f&eacutevr</td>
      <td >Clochard</td>
      <td >2E413-140</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >Guillaume POIRIER &agrave Jean DELAJALOFFAYE</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right
  x:num="38738">21-janv</td>
      <td >Micheau</td>
      <td >2E1030-40</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Marie CHARRAULD et Jeanne VIOLET</td>
      <td  align=right x:num>1020</td>
      <td >veuve de Jean CHARRAULD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1688</td>
      <td  align=right x:num="39839">26-janv</td>
      <td >Desport</td>
      <td >2E2130-10</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jacques ROFFIGNAC et Anne ROCHIER</td>
      <td  align=right x:num>1430</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right x:num="38428">17-mars</td>
      <td >Chauvin</td>
      <td >2E317-100</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Arnaud ROY aux fr&egraveres SEGUIN</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="39022">01-nov</td>
      <td >Rouhier</td>
      <td >2E1126-10</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Fran&ccedilois BARREAU &agrave Pierre BARREAU</td>
      <td  align=right x:num>937</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38978">18-sept</td>
      <td >Serpaud</td>
      <td >2E1171-120</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jean SIMARD &agrave Fran&ccedilois IRVOIX</td>
      <td  align=right x:num>978</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38344">23-d&eacutec</td>
      <td >Peynaud</td>
      <td >2E1070-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Louis Mesnadeau</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="39027">06-nov</td>
      <td >Rouhier</td>
      <td >2E1126-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BARREAU et Marie GUIOT</td>
      <td  align=right x:num>937</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38669">13-nov</td>
      <td >Chauvin</td>
      <td >2E317-150</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >Michel ROY chez Louis VASLIN me tonnelier</td>
      <td  align=right x:num>812</td>
      <td >Fils de Robert ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38722">05-janv</td>
      <td >Micheau</td>
      <td >2E1030-80</td>
      <td >Angoul&ecircme</td>
      <td >Vidimation</td>
      <td >d'un contrat de vente de Pierre LIET</td>
      <td  align=right x:num>1020</td>
      <td >&agrave Guil. ARONDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="39078">27-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1126-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Etienne RICHON et Philippe MAGNAN</td>
      <td  align=right x:num>937</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38842">05-mai</td>
      <td >Izambard</td>
      <td >2E2802-220</td>
      <td >Echallat</td>
      <td >Transaction</td>
      <td >Jean et Pierre PELEGAY</td>
      <td  align=right x:num>1020</td>
      <td >Fils de Guil. et Berth. BONJOUR</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38480">8-mai</td>
      <td >Chauvin</td>
      <td >2E317-120</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean BOUHIER et Jeanne ROY</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38749">01-f&eacutevr</td>
      <td >Izambard</td>
      <td >2E2802-250</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Jean MARQUAIS et Jacquette IZAMBARD</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38624">29-sept</td>
      <td >Manci&eacute</td>
      <td >2E937-30</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jean SIMARD &agrave L&eacuteonard BERNARD</td>
      <td  align=right x:num>778</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38614">19-sept</td>
      <td >Chauvin</td>
      <td >2E317-140</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Jean JOUANNET &quot;Le Jeune&quot; &agrave J. DURANDEAU</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="38908">10-juil</td>
      <td >Izambard</td>
      <td >2E2802-230</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Pierre DEXMIER et Marie MARTIN</td>
      <td  align=right x:num>1020</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right x:num="40127">10-nov</td>
      <td >Daniaud</td>
      <td >2E5938-20</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Etienne BENESTEAU et Jeanne FOURNIER</td>
      <td  align=right x:num>1435</td>
      <td class=xl3520222>fr&egravere de Michel BENESTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="39843">30-janv</td>
      <td >Audouin</td>
      <td >2E123-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre ROUHIER et Fran&ccediloise ANDRE</td>
      <td  align=right x:num>1356</td>
      <td >fr&egravere de Jean le notaire</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="40136">19-nov</td>
      <td >Audouin</td>
      <td >2E123-20</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Jean CHASSAIGNE et Pierre BIARD</td>
      <td  align=right x:num>1356</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1689</td>
      <td  align=right
  x:num="40144">27-nov</td>
      <td >Audouin</td>
      <td >2E123-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jacques ROUFFIGNAC &agrave Anne ROCHIER sa fe.</td>
      <td  align=right x:num>1356</td>
      <td >de Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right x:num="38769">21-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E815-60</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >LIZEE &agrave Daniel TULLIER</td>
      <td  align=right x:num>873</td>
      <td >Ant. et Catherine AUDOUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38546">13-juil</td>
      <td >Chauvin</td>
      <td >2E317-170</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >Fran&ccedilois BONVALEST &agrave Antoine JOUANNET</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38080">3-avr</td>
      <td >Peuple</td>
      <td >2E1069-20</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Fran&ccedilois CHAUVET &agrave Pierre SEGUIN</td>
      <td  align=right x:num>749</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38960">31-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1127-20</td>
      <td >Lhoumeau</td>
      <td >Ma&icirctrise</td>
      <td >de Jean BOITEAU comme ma&icirctre sergier</td>
      <td  align=right x:num>922</td>
      <td >Fils de Michel</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38563">30-juil</td>
      <td >Chauvin</td>
      <td >2E317-180</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Jean DELAURIERE aux habitants de Ruelle</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38016">30-janv</td>
      <td >Peuple</td>
      <td >2E1069-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DAUVEAU L&eacuteonard</td>
      <td  align=right x:num>749</td>
      <td >Fran&ccediloise MONBOEUF</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38769">21-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1127-10</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >de Aymard RIFFAUD et Jacquette CLEMENT</td>
      <td  align=right x:num>922</td>
      <td >&agrave Thomas DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right
  x:num="38637">12-oct</td>
      <td >Chauvin</td>
      <td >2E317-200</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Pierre DAVID &agrave Jacques BASSET</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1690</td>
      <td  align=right x:num="39821">8-janv</td>
      <td >Audouin</td>
      <td >2E123-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois ALBERT et Marguerite BOISTAUD</td>
      <td  align=right x:num>1356</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right x:num="38480">8-mai</td>
      <td >Chauvin</td>
      <td >2E318-120</td>
      <td >Lhoumeau</td>
      <td >Procuration</td>
      <td >Ant. JOUANNET &agrave Marie CHARITE sa femme</td>
      <td  align=right x:num>812</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="40163">16-d&eacutec</td>
      <td >Petit</td>
      <td >2E5182-60</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Accord</td>
      <td >Gabriel et Jacques BIARD et leurs femmes</td>
      <td  align=right x:num>1220</td>
      <td >Jeanne DELAPORTE et M. HASTIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38865">28-mai</td>
      <td >Rouhier</td>
      <td >2E1128-120</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Fran&ccedilois AUDIER &agrave Jean COUGNET</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39785">03-d&eacutec</td>
      <td >Serpaud</td>
      <td >2E1171-220</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves verbal</td>
      <td >apr&egraves d&eacutec&egraves Fr. GAILLARD et Marie RABOTEAU</td>
      <td  align=right x:num>1173</td>
      <td >de la maison et domaines</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39694">03-sept</td>
      <td >Boilevin</td>
      <td >2E199-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Nicolas BOISTEAU et Jeanne LACROIX</td>
      <td  align=right x:num>1122</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39067">16-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1128-200</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >de Jeanne BENOIST de Fran&ccedilois IMBERT</td>
      <td  align=right x:num>921</td>
      <td >Dans les prisons royales</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39632">03-juil</td>
      <td >Serpaud</td>
      <td >2E1171-200</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >apr&egraves d&eacutec&egraves Fr. GAILLARD et Marie RABOTEAU</td>
      <td  align=right x:num>1173</td>
      <td >demande de Pierre RABOTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38435">24-mars</td>
      <td >Chauvin</td>
      <td >2E318-100</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Antoine JOUANNET &agrave Jean PARANTEAU</td>
      <td  align=right x:num>812</td>
      <td >et cession</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39577">09-mai</td>
      <td >Gillibert</td>
      <td >2E712-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Pierre CHENEVIERE &agrave Louis CHENEVIERE</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39032">11-nov</td>
      <td >J&eacuteheu</td>
      <td >2E815-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean CAILLAUD et Marguerite COCUAUD</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39596">28-mai</td>
      <td >Serpaud</td>
      <td >2E1171-190</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Mathieu BASSET sergent du duch&eacute de La Roch.</td>
      <td  align=right x:num>1173</td>
      <td >&agrave Pierre BARREAU seigneur de Girac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38896">28-juin</td>
      <td >Rouhier</td>
      <td >2E1128-140</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >Louis JOUANNET chez Michel JOUANNET</td>
      <td  align=right x:num>921</td>
      <td >Louis fils de Jean JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39557">19-avr</td>
      <td >Boilevin</td>
      <td >2E199-20</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >entre Michel PAPIN et Jeanne FERRET</td>
      <td  align=right x:num>1122</td>
      <td >et DELPEUX (&agrave Veuil)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38897">29-juin</td>
      <td >Rouhier</td>
      <td >2E1128-160</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves verbal</td>
      <td >Denis BASSET et CHARRON</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38969">09-sept</td>
      <td >Micheau</td>
      <td >2E1031-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Charles GABORIT et Magdelaine BECHET</td>
      <td  align=right x:num>977</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38653">28-oct</td>
      <td >Chauvin</td>
      <td >2E318-130</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Jean JOUANNET &quot;Le Jeune&quot;</td>
      <td  align=right x:num>812</td>
      <td >compagnons (violence)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38758">10-f&eacutevr</td>
      <td >Clochard</td>
      <td >2E413-170</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre RIFFAUD et Marie MESNIER</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39726">05-oct</td>
      <td >Serpaud</td>
      <td >2E1171-210</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >apr&egraves d&eacutec&egraves Fr. GAILLARD et Marie RABOTEAU</td>
      <td  align=right x:num>1173</td>
      <td >des meubles</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38927">29-juil</td>
      <td >J&eacuteheu</td>
      <td >2E815-20</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Louis SURREAU, fils de Antoine, chez F. PAYET</td>
      <td  align=right x:num>873</td>
      <td >Sans int&eacuter&ecirct ?</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38975">15-sept</td>
      <td >Rouhier</td>
      <td >2E1128-170</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Gilles LURAT et Anne JUTEAU</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39053">2-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E815-40</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Jean BERNIER &agrave Michel BOISTEAU</td>
      <td  align=right x:num>873</td>
      <td >et Michelle LECLERC</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38734">17-janv</td>
      <td >Serpaud</td>
      <td >2E1171-130</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >B. et P. BOITAUD &agrave A. PENOT (DUSOUCHET)</td>
      <td  align=right x:num>978</td>
      <td >Fils de Fran&ccedilois BOISTAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39011">21-oct</td>
      <td >Rouhier</td>
      <td >2E1128-190</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Jacques MOUSNIER &agrave Philippe BOISTEAU</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38668">12-nov</td>
      <td >Manci&eacute</td>
      <td >2E938-120</td>
      <td >Angoul&ecircme</td>
      <td >Demission</td>
      <td >Berthom&eacute et Michel BOITEAU</td>
      <td  align=right x:num>777</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38897">29-juin</td>
      <td >Rouhier</td>
      <td >2E1128-150</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Denis BASSET et CHARRON</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38763">15-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1128-100</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >BOITEAU, GOTREAU, COUGNET</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38763">15-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1128-110</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >DURAND, BOITEAU, GOTREAU, COUGNET</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38787">11-mars</td>
      <td >Clochard</td>
      <td >2E413-180</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Entre ROY et BARATTE</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="39067">16-d&eacutec</td>
      <td >Col</td>
      <td >2E4545-10</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >&agrave Marie DARS veuve d'Etienne MAYOU</td>
      <td  align=right x:num>1022</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38821">14-avr</td>
      <td >Serpaud</td>
      <td >2E1171-140</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean YRVOIX et Anne CLERGERIE</td>
      <td  align=right x:num>978</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38632">7-oct</td>
      <td >Manci&eacute</td>
      <td >2E938-100</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre CHAUVET et Perrine TEXIER</td>
      <td  align=right x:num>777</td>
      <td >Fils Fr et Charlotte CHARREAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38460">18-avr</td>
      <td >Chauvin</td>
      <td >2E318-110</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Mathurin BLANCHIER &agrave Cath. RAVAMEAU</td>
      <td  align=right x:num>812</td>
      <td >Veuve de Robert ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="38411">28-f&eacutevr</td>
      <td >Peynaud</td>
      <td >1E1071-10</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Jean SIMARD - Mery ESTEVE - Fra. YRVOIX</td>
      <td  align=right x:num>782</td>
      <td >Quel Jean SIMARD ?</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right x:num="39879">7-mars</td>
      <td >Audouin</td>
      <td >2E124-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Christophe LAMY &agrave Nicolas BASSET marchand</td>
      <td  align=right x:num>1356</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1691</td>
      <td  align=right
  x:num="40150">3-d&eacutec</td>
      <td >Audouin</td>
      <td >2E124-20</td>
      <td >Angoul&ecircme</td>
      <td >Acte</td>
      <td >Entre Louis et Marguerite YRVOIX</td>
      <td  align=right x:num>1356</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right x:num="38495">23-mai</td>
      <td >Peynaud</td>
      <td >2E1071-60</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Ant. MESNARD et Aignette SIMARD</td>
      <td  align=right x:num>782</td>
      <td >&agrave Jean SIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38897">29-juin</td>
      <td >Rouhier</td>
      <td >2E1129-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean BOILEVIN et Jeanne ARAONDEAU</td>
      <td  align=right x:num>921</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="39726">05-oct</td>
      <td >Serpaud</td>
      <td >2E1172-100</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >des meubles de Fran&ccedilois IRVOIX</td>
      <td  align=right x:num>1172</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38458">16-avr</td>
      <td >Chauvin</td>
      <td >2E318-160</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Pierre RIFFAUD et autres RIFFAUD</td>
      <td  align=right x:num>812</td>
      <td >ap. d&eacutec&egraves de Jeanne JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="39507">29-f&eacutevr</td>
      <td >Prevost</td>
      <td >2E2777-10</td>
      <td >Douzat</td>
      <td >Partage</td>
      <td >Jacques, Jean et Jean BOISDON</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38457">15-avr</td>
      <td >Chauvin</td>
      <td >2E318-150</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >Pierre RIFFAUD et autres RIFFAUD</td>
      <td  align=right x:num>812</td>
      <td >ap. d&eacutec&egraves de Jeanne JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="39474">27-janv</td>
      <td >Gillibert</td>
      <td >2E712-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine SORIGNET et Fran&ccediloise BOISDON</td>
      <td  align=right x:num>1148</td>
      <td >fille de Guillaume</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38597">2-sept</td>
      <td >Peynaud</td>
      <td >2E1071-80</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Philippe BOISTEAU  - Mathieu BOUTILLIER</td>
      <td  align=right x:num>782</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38658">2-nov</td>
      <td >Bouillaud</td>
      <td >2E212-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Marie BONNORON &agrave Barthelemie TEXIER</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38863">26-mai</td>
      <td >Clochard</td>
      <td >2E413-190</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Pierre DELABORIE &agrave Jacques BASSET</td>
      <td  align=right x:num>953</td>
      <td >et Marie MAMAIN fe. de Jacq.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38675">19-nov</td>
      <td >Chauvin</td>
      <td >2E318-200</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >Elizabeth ROY &agrave Berthom&eacute RANOUX</td>
      <td  align=right x:num>812</td>
      <td >Locaon. d'un soufflet et estoc</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="39509">02-mars</td>
      <td >Prevost</td>
      <td >2E2777-20</td>
      <td >Douzat</td>
      <td >Paiement</td>
      <td >&agrave Jean BOISDON</td>
      <td  align=right x:num>1148</td>
      <td >Jean NAUD et Paul COUSSAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38756">8-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E815-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Andr&eacute AVRIL et Marie YRVOIX</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38841">04-mai</td>
      <td >Rouhier</td>
      <td >2E1129-20</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >Fran&ccediloise LARMAT et Fran&ccedilois IMBERT</td>
      <td  align=right x:num>921</td>
      <td >Hommicide. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="39644">15-juil</td>
      <td >Gillibert</td>
      <td >2E712-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre ROY et Catherine MESTADRIE</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38827">20-avr</td>
      <td >Rouhier</td>
      <td >2E1129-10</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >Pierre COMBRET &agrave Catherine COUPEAU</td>
      <td  align=right x:num>921</td>
      <td >vente d'une gabarre neuve</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="39511">04-mars</td>
      <td >Prevost</td>
      <td >2E2777-30</td>
      <td >Douzat</td>
      <td >Accord</td>
      <td >Jean BOISDON et Claude GUILHAUMEAU</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38927">29-juil</td>
      <td >Clochard</td>
      <td >2E413-210</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Louis FAURE et Jacquette RIFFAUD</td>
      <td  align=right x:num>953</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38589">25-ao&ucirct</td>
      <td >Peynaud</td>
      <td >2E1071-70</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Louis IMBERT et Marguerite JARRY</td>
      <td  align=right x:num>782</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right
  x:num="38597">2-sept</td>
      <td >Manci&eacute</td>
      <td >2E938-140</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Marie LIZEE &agrave Germain BRANGIER</td>
      <td  align=right x:num>777</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1692</td>
      <td  align=right x:num="40154">7-d&eacutec</td>
      <td >Audouin</td>
      <td >2E124-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >&agrave M&eacutery AUDIER par Catherine MAURIN</td>
      <td  align=right x:num>1356</td>
      <td >d'une maison</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td >&nbsp;</td>
      <td >Rouhier</td>
      <td >2E1130-30</td>
      <td >Lhoumeau</td>
      <td >Inventaire</td>
      <td >Anne ROUHIER veuve de Claude ROY</td>
      <td  align=right x:num>918</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="39631">02-juil</td>
      <td >Serpaud</td>
      <td >2E1172-200</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BOYLEVIN et Marie FEBURE</td>
      <td  align=right x:num>1172</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38802">26-mars</td>
      <td >Col</td>
      <td >2E4545-20</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >de Marie DARS et Jean GASCON</td>
      <td  align=right x:num>1022</td>
      <td >et BREILLATs</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38882">14-juin</td>
      <td >Pillorget</td>
      <td >2E2170-30</td>
      <td >Champniers</td>
      <td >Vente</td>
      <td >Antoine ARONDEAU et Marg. MESTADRIE</td>
      <td  align=right x:num>1035</td>
      <td >&agrave Antoine BLANCHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38591">27-ao&ucirct</td>
      <td >Bouillaud</td>
      <td >2E212-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume AUDOUIN et Anne JUBERT</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38507">4-juin</td>
      <td >Bouillaud</td>
      <td >2E212-20</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Michelle BARDET (feu Fran&ccedilois SIMARD)</td>
      <td  align=right x:num>784</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38749">01-f&eacutevr</td>
      <td >Couppeau</td>
      <td >2E424-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean CHERADE et Margte. CHASTAIGNER</td>
      <td  align=right x:num>971</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38981">21-sept</td>
      <td >Rouhier</td>
      <td >2E1130-20</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Jean ROUHIER fils de Jean et F. DELAURIERE</td>
      <td  align=right x:num>918</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38732">15-janv</td>
      <td >Gauvry</td>
      <td >2E4297-60</td>
      <td >Mornac</td>
      <td >Vente</td>
      <td >Par Marguerite RIFFAUD &agrave Guillaume SURRAUD</td>
      <td  align=right x:num>885</td>
      <td >de Touvre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="38926">28-juil</td>
      <td >Rouhier</td>
      <td >2E1130-10</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >DESCARSELLE, BOITEAU</td>
      <td  align=right x:num>918</td>
      <td >MARCHAT, GOUGNET. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="39060">09-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1031-30</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Fran&ccedilois NOBLESSE</td>
      <td  align=right x:num>977</td>
      <td >ap. d&eacutec&egraves de son p&egravere Jean</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1693</td>
      <td  align=right
  x:num="39345">20-sept</td>
      <td >Peynaud</td>
      <td >2E1072-70</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Marie THUET &agrave Jean ROY fils</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38578">14-ao&ucirct</td>
      <td >Peynaud</td>
      <td >2E1072-90</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Cath. ORDONNEAU, Michel et Jean BOYTEAU</td>
      <td  align=right x:num>789</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38853">16-mai</td>
      <td >Rouhier</td>
      <td >2E1131-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois SURREAU et Marguerite GAULTIER</td>
      <td  align=right x:num>917</td>
      <td >Fils de Nic et Marie COSTE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38564">31-juil</td>
      <td >Chauvin</td>
      <td >2E319-30</td>
      <td >Lhoumeau</td>
      <td >Compte</td>
      <td >Antoine MESNARD et Jean JOUBERT</td>
      <td  align=right x:num>814</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38727">10-janv</td>
      <td >Pillorget</td>
      <td >2E2170-10</td>
      <td >Champniers</td>
      <td >Echange</td>
      <td >Etienne POITEVIN et Fce. ROUGIER</td>
      <td  align=right x:num>1035</td>
      <td >femme de Fran&ccedilois BRISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38715">29-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E319-50</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Arnaud ROY &agrave Christophe GALLIOT</td>
      <td  align=right x:num>814</td>
      <td >et Frcs et Elie SEGUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38486">14-mai</td>
      <td >Chauvin</td>
      <td >2E319-10</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Jean CAILLAUD &agrave Elisabeth ROY sa m&egravere</td>
      <td  align=right x:num>814</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="39030">09-nov</td>
      <td >Rouhier</td>
      <td >2E1131-80</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Mathurin ROCHE et Marie ROY</td>
      <td  align=right x:num>917</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38531">28-juin</td>
      <td >Chauvin</td>
      <td >2E319-20</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Pierre RIFFAUD &agrave Jean COMBRET</td>
      <td  align=right x:num>814</td>
      <td >Mari de Marie MESNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38741">24-janv</td>
      <td >Rouhier</td>
      <td >2E1131-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean AUDIER et Jeanne GAILLARD</td>
      <td  align=right x:num>917</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="39760">08-nov</td>
      <td >Serpaud</td>
      <td >2E1172-300</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Joseph GUIOT et Marie MARTIN</td>
      <td  align=right x:num>1172</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38658">2-nov</td>
      <td >Manci&eacute</td>
      <td >2E938-210</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Jean et Pierre RIFFAUD - Marguerite GIRAUD</td>
      <td  align=right x:num>777</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38370">18-janv</td>
      <td >Manci&eacute</td>
      <td >2E938-160</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean ROUHIER et Marguerite BARBARY</td>
      <td  align=right x:num>777</td>
      <td >Fils Louis et Jeanne LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38712">26-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E319-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Daniel MESNIER et Philippe ROY</td>
      <td  align=right x:num>814</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38952">23-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1131-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean ROY et Elisabeth GAULTIER</td>
      <td  align=right x:num>917</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38873">05-juin</td>
      <td >Micheau</td>
      <td >2E1032-10</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >Pierre CHAIGNEAU et Cath. ORDONNEAU</td>
      <td  align=right x:num>975</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38769">21-f&eacutevr</td>
      <td >Pillorget</td>
      <td >2E2170-20</td>
      <td >Champniers</td>
      <td >Vente</td>
      <td >Lucresse ARONDEAU</td>
      <td  align=right x:num>1035</td>
      <td >&agrave Antoine BLANCHON</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right
  x:num="38956">27-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1131-70</td>
      <td >Lhoumeau</td>
      <td >Testament</td>
      <td >Jacques BASSET et Marguerite BASSET fille</td>
      <td  align=right x:num>917</td>
      <td >M. MAMAIN, P. CLOCHARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1694</td>
      <td  align=right x:num="39969">5-juin</td>
      <td >Daniaud</td>
      <td >2E5940-10</td>
      <td >Vaux-Rouillac</td>
      <td >Vente</td>
      <td >Etienne BENESTEAU</td>
      <td  align=right x:num>1441</td>
      <td >Elis. HERVE vve R&eacutemy GOUILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1695</td>
      <td  align=right x:num="38645">20-oct</td>
      <td >Chauvin</td>
      <td >2E319-60</td>
      <td >Lhoumeau</td>
      <td >Apprentissage</td>
      <td >Jean JAYET chez Thomas TETREL me po&ecirclier</td>
      <td  align=right x:num>814</td>
      <td >fils de Berthom&eacute JAYET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1695</td>
      <td  align=right
  x:num="38760">12-f&eacutevr</td>
      <td >Micheau</td>
      <td >2E1032-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Denis TOUCHES et Marie LIET sa femme</td>
      <td  align=right x:num>975</td>
      <td >&agrave Philippe LIET p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1695</td>
      <td  align=right
  x:num="38378">26-janv</td>
      <td >Peynaud fils</td>
      <td >2E2770-10</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BIARD et Anne CARTIER</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1695</td>
      <td  align=right
  x:num="38293">2-nov</td>
      <td >Manci&eacute</td>
      <td >2E939-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre CHAUVET Jean TEXIER</td>
      <td  align=right x:num>738</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="39053">02-d&eacutec</td>
      <td >Clochard</td>
      <td >2E414-10</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Pierre, Berthom&eacutee, Colette, Jacqtte RIFFAUD</td>
      <td  align=right x:num>952</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38643">18-oct</td>
      <td >Peynaud fils</td>
      <td >2E2770-50</td>
      <td >Dirac</td>
      <td >Vente</td>
      <td >Philippe BIARD &agrave Jean SIMMONOT</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38780">04-mars</td>
      <td >Micheau</td>
      <td >2E1032-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Marie PAPIN &agrave Jean ROUFFIGNAC</td>
      <td  align=right x:num>975</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="39045">24-nov</td>
      <td >Rouhier</td>
      <td >2E1133-20</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Jacques BIARD &agrave Fran&ccedilois BOUCHET</td>
      <td  align=right x:num>914</td>
      <td >Fils de Gabriel BIARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38523">20-juin</td>
      <td >Peynaud fils</td>
      <td >2E2770-40</td>
      <td >Dirac</td>
      <td >D&eacuteclaration</td>
      <td >Jeanne BARREAU et Fran&ccedilois LIZEE son fils</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38394">11-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E319-70</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Jean JOUANNET &agrave Jeanne COUPEAU sa femme</td>
      <td  align=right x:num>815</td>
      <td >Jean JOUANNET &quot;Le Jeune&quot;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38355">3-janv</td>
      <td >Peynaud fils</td>
      <td >2E2770-20</td>
      <td >Dirac</td>
      <td >Cession</td>
      <td >Louis SURREAU &agrave Jean THINON</td>
      <td  align=right x:num>869</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1696</td>
      <td  align=right
  x:num="38839">02-mai</td>
      <td >Rouhier</td>
      <td >2E1133-10</td>
      <td >Lhoumeau</td>
      <td >Ferme</td>
      <td >Jeanne COUPEAU &agrave Jean VOUHIER</td>
      <td  align=right x:num>914</td>
      <td >Veuve de Jean JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38540">7-juil</td>
      <td >Chauvin</td>
      <td >2E320-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean TOURNIER et Anne MONTAIGNE</td>
      <td  align=right x:num>815</td>
      <td >Fils de J. et Jeanne BOUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="39484">06-f&eacutevr</td>
      <td >Prevost</td>
      <td >2E2777-50</td>
      <td >Douzat</td>
      <td >Mariage</td>
      <td >Antoine ROY et Louise AUBRIAUD</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38681">25-nov</td>
      <td >Chauvin</td>
      <td >2E320-30</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Jean TOURNIER &agrave PETIT et Jacques CHAUVET</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38428">17-mars</td>
      <td >Chauvin</td>
      <td >2E320-10</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Anne DURANDEAU veuve de Jean ROY</td>
      <td  align=right x:num>815</td>
      <td >&agrave Jean DURANDEAU  fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="39467">20-janv</td>
      <td >Prevost</td>
      <td >2E2777-40</td>
      <td >Douzat</td>
      <td >Mariage</td>
      <td >Antoine AUBINEAU et Jeanne PAPIN</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38820">13-avr</td>
      <td >Rouhier</td>
      <td >2E1134-30</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >Damoiselles MANES de Jacquette BIARD</td>
      <td  align=right x:num>914</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38877">09-juin</td>
      <td >Rouhier</td>
      <td >2E1134-50</td>
      <td >Lhoumeau</td>
      <td 
  x:str="Acquisition ">Acquisition </td>
      <td >Fran&ccedilois BOURGUET de Anne DURANDEAU</td>
      <td  align=right x:num>914</td>
      <td >Veuve de Jean ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38933">04-ao&ucirct</td>
      <td >Micheau</td>
      <td >2E1032-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean MONBOEUF et Jeanne BARBARY</td>
      <td  align=right x:num>975</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38876">08-juin</td>
      <td >Rouhier</td>
      <td >2E1134-40</td>
      <td >Lhoumeau</td>
      <td >Proc&egraves-verbal</td>
      <td >Jacques BASSET et Pierre CLOCHARD</td>
      <td  align=right x:num>914</td>
      <td >Son gendre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38464">22-avr</td>
      <td >Peynaud fils</td>
      <td >2E2770-60</td>
      <td >Dirac</td>
      <td >Vente</td>
      <td >Marie BARBARY &agrave Jean ROY</td>
      <td  align=right x:num>869</td>
      <td >D'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38819">12-avr</td>
      <td >Rouhier</td>
      <td >2E1134-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre ROY et Catherine BOUILLAUD</td>
      <td  align=right x:num>914</td>
      <td >Second mariage</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="39055">04-d&eacutec</td>
      <td >Couppeau</td>
      <td >2E424-30</td>
      <td >St Cybard</td>
      <td >Mariage</td>
      <td >Helie COSTE et Marie MESLIER</td>
      <td  align=right x:num>942</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38200">1-ao&ucirct</td>
      <td >Boilevin</td>
      <td >2E201-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean Bernard et Marie Bernier</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38134">27-mai</td>
      <td >Manci&eacute</td>
      <td >2E939-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre Surraud - Marguerite Brissaud</td>
      <td  align=right x:num>738</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="39052">01-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1134-70</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Pierre ROY et Catherine AVRIL</td>
      <td  align=right x:num>914</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38969">09-sept</td>
      <td >Rouhier</td>
      <td >2E1134-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Simon COUPEAU et Marie LIZEE</td>
      <td  align=right x:num>914</td>
      <td >Fils de Gillibert et Marie LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38266">6-oct</td>
      <td >Manci&eacute</td>
      <td >2E939-40</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >COUPEAU Simon</td>
      <td  align=right x:num>738</td>
      <td >Fran&ccedilois BONVASLET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1697</td>
      <td  align=right
  x:num="38809">02-avr</td>
      <td >Rouhier</td>
      <td >2E1134-10</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Jacquette BIARD &agrave Jean CHASAIGNE</td>
      <td  align=right x:num>914</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39038">17-nov</td>
      <td >Rouhier</td>
      <td >2E1135-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean TOURNIER et Genevi&egraveve BOUILLAUD</td>
      <td  align=right x:num>912</td>
      <td >Fils de Marie RAVAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="38370">18-janv</td>
      <td >Chauvin</td>
      <td >2E320-50</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >Pierre ROY Cur&eacute &agrave Louis SURREAU</td>
      <td  align=right x:num>815</td>
      <td >et Jacq. et L&eacuteo BOURGUET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39002">12-oct</td>
      <td >Rouhier</td>
      <td >2E1135-20</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Michelle ROY &agrave Fran&ccedilois SURREAU</td>
      <td  align=right x:num>912</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39342">17-sept</td>
      <td >Pillorget</td>
      <td >2E2171-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean ARONDEAU et Antoinette BAUDRY</td>
      <td  align=right x:num>1038</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="38603">8-sept</td>
      <td >Chauvin</td>
      <td >2E320-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois VALLETEAU et Berthom&eacutee RIFFAUD</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="38427">16-mars</td>
      <td >Peynaud fils</td>
      <td >2E2771-10</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois ROUSSEAU et Genevi&egraveve SURRAUD</td>
      <td  align=right x:num>867</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39079">28-d&eacutec</td>
      <td >Rouhier</td>
      <td >2E1135-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Mathieu DENEUVILLE et Fran&ccediloise ROUHIER</td>
      <td  align=right x:num>912</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="38624">29-sept</td>
      <td >Peynaud fils</td>
      <td >2E2771-20</td>
      <td >Dirac</td>
      <td >Vente</td>
      <td >Fran&ccedilois LIZEE et Anne RONDINAUD</td>
      <td  align=right x:num>867</td>
      <td >&agrave Denis REIGNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right x:num="39833">20-janv</td>
      <td >Daniaud</td>
      <td >2E5942-10</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Louis GENDRON et Anne BONJOUR</td>
      <td  align=right x:num>1447</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39833">20-janv</td>
      <td >Daniaud</td>
      <td >2E5942-20</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jean EMERY et Gabrielle BONJOUR</td>
      <td  align=right x:num>1448</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39881">9-mars</td>
      <td >Daniaud</td>
      <td >2E5942-30</td>
      <td >Vaux-Rouillac</td>
      <td >Quittance</td>
      <td 
  x:str="Jean BENESTEAU aux Michel MARTIN ">Jean BENESTEAU aux Michel MARTIN </td>
      <td  align=right x:num>1448</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1698</td>
      <td  align=right
  x:num="39934">1-mai</td>
      <td >Gillibert</td>
      <td >2E714-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume BOISDON et Denise BANLIN</td>
      <td  align=right x:num>1328</td>
      <td >3e mariage de Guillaume</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right x:num="38691">5-d&eacutec</td>
      <td >Peynaud fils</td>
      <td >2E2771-60</td>
      <td >Dirac</td>
      <td >Transaction</td>
      <td >Philippe CAMBOIS et Marie DAVID</td>
      <td  align=right x:num>867</td>
      <td >et Th. DAVID (et DUMERGUE)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38766">18-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1136-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BARBARY et Jeanne JOUANNET</td>
      <td  align=right x:num>912</td>
      <td >Fille de Jean et Marg. AUBIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="39080">29-d&eacutec</td>
      <td >Micheau</td>
      <td >2E1033-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois SURREAU et Marie MOUCHIERE</td>
      <td  align=right x:num>975</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38798">22-mars</td>
      <td >Rouhier</td>
      <td >2E1136-20</td>
      <td >Lhoumeau</td>
      <td >Testament</td>
      <td >Pierre IMBERT et Marie CATIN</td>
      <td  align=right x:num>912</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38180">12-juil</td>
      <td >Manci&eacute</td>
      <td >2E940-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DAUVEAU L&eacuteonard</td>
      <td  align=right x:num>738</td>
      <td >Fran&ccediloise MONBOEUF</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38959">30-ao&ucirct</td>
      <td >Micheau</td>
      <td >2E1033-20</td>
      <td >Angoul&ecircme</td>
      <td >Cheptel</td>
      <td >Guill. MESNARD et J. RESNIER sa femme</td>
      <td  align=right x:num>975</td>
      <td >de Charles GUILLAUME</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38211">12-ao&ucirct</td>
      <td >Boilevin</td>
      <td >2E201-20</td>
      <td >Angoul&ecircme</td>
      <td >&nbsp;</td>
      <td >H&eacutelie Poirier</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38798">22-mars</td>
      <td >Micheau</td>
      <td >2E1033-10</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Fran&ccedilois ROY &agrave Etienne et Pierre ses enfants</td>
      <td  align=right x:num>975</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38901">03-juil</td>
      <td >Rouhier</td>
      <td >2E1136-30</td>
      <td >Lhoumeau</td>
      <td >Sommation</td>
      <td >Pierre ROY &agrave Marguerite LECLERC</td>
      <td  align=right x:num>912</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38309">18-nov</td>
      <td >Porcheron</td>
      <td >2E1084-60</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Jean DARS et Jeanne PAPONNET</td>
      <td  align=right x:num>748</td>
      <td >Catherine FUMEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="39804">22-d&eacutec</td>
      <td >Prevost</td>
      <td >2E2777-60</td>
      <td >Douzat</td>
      <td >Mariage</td>
      <td >Jean CONTE et Jacquette TALLON</td>
      <td  align=right x:num>1148</td>
      <td >(Claude GUILHAUMEAU. . .)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38294">3-nov</td>
      <td >Porcheron</td>
      <td >2E1084-50</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >PAPIN Jean</td>
      <td  align=right x:num>748</td>
      <td >Berthom&eacute MAIGNAN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38690">4-d&eacutec</td>
      <td >Chauvin</td>
      <td >2E320-70</td>
      <td >Lhoumeau</td>
      <td >Cession</td>
      <td >Jean ROY &agrave Marie BARBARY</td>
      <td  align=right x:num>815</td>
      <td >Veuve de Jean ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38660">4-nov</td>
      <td >Peynaud fils</td>
      <td >2E2771-50</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Jean TRICOIRE et Marie LIZEE</td>
      <td  align=right x:num>867</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38468">26-avr</td>
      <td >Peynaud fils</td>
      <td >2E2771-40</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Mesry ROCHE et Anne TOURNIER</td>
      <td  align=right x:num>867</td>
      <td >file de Jean et Marie RAVAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="38436">25-mars</td>
      <td >Chauvin</td>
      <td >2E320-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >L&eacuteonard JOUBERT et Elisabeth ROY</td>
      <td  align=right x:num>815</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right x:num="39851">7-f&eacutevr</td>
      <td >Daniaud</td>
      <td >2E5942-40</td>
      <td >Vaux-Rouillac</td>
      <td >Acquisition</td>
      <td >Jacques IZAMBARD de Pierre PELLEGEAY</td>
      <td  align=right x:num>1448</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="40070">14-sept</td>
      <td >Daniaud</td>
      <td >2E5942-50</td>
      <td >Vaux-Rouillac</td>
      <td >Arrangement</td>
      <td >Jean IZAMBARD et Jean GENDRON</td>
      <td  align=right x:num>1448</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1699</td>
      <td  align=right
  x:num="40119">2-nov</td>
      <td >Daniaud</td>
      <td >2E5942-60</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Jacques BOISDON et Marguerite BRIS</td>
      <td  align=right x:num>1448</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right x:num="38786">10-mars</td>
      <td >Rouhier</td>
      <td >2E1137-40</td>
      <td >Lhoumeau</td>
      <td >Reconnaissance</td>
      <td >Antoine, Marg., Jean, Suzanne AUDIER</td>
      <td  align=right x:num>911</td>
      <td >&agrave Antoine GRASLEN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38221">22-ao&ucirct</td>
      <td >Boilevin</td>
      <td >2E201-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard Yrvoix et Andr&eacutee Corly</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38766">18-f&eacutevr</td>
      <td >Rouhier</td>
      <td >2E1137-30</td>
      <td >Lhoumeau</td>
      <td >D&eacutelaissement</td>
      <td >Michel, Jean, Pierre BOISTEAU</td>
      <td  align=right x:num>911</td>
      <td >&agrave Pierre GALLOCHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38109">2-mai</td>
      <td >Boilevin</td>
      <td >2E201-30</td>
      <td >Angoul&ecircme</td>
      <td >&nbsp;</td>
      <td >Ren&eacutee Joubert, veuve de Fran&ccedilois Bernard</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38144">6-juin</td>
      <td >Manci&eacute</td>
      <td >2E940-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >TUILLIER Jacques</td>
      <td  align=right x:num>738</td>
      <td >Elizabeth DAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38386">3-f&eacutevr</td>
      <td >Peynaud fils</td>
      <td >2E2771-70</td>
      <td >Dirac</td>
      <td >Partage</td>
      <td >Antoinette LAURAND et Marc BASSET</td>
      <td  align=right x:num>867</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38912">14-juil</td>
      <td >Clochard</td>
      <td >2E414-20</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean PILLORGET et Marie DARS</td>
      <td  align=right x:num>952</td>
      <td >Fille de J. et Louise GAILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="39467">20-janv</td>
      <td >Prevost</td>
      <td >2E2777-70</td>
      <td >Douzat</td>
      <td >Mariage</td>
      <td >Jean ISEMBERT et Marguerite PANETIER</td>
      <td  align=right x:num>1148</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38968">08-sept</td>
      <td >Micheau</td>
      <td >2E1033-40</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Pierre IMBERT et Marie CATIN</td>
      <td  align=right x:num>975</td>
      <td >&agrave A. GEFFRENAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38887">19-juin</td>
      <td >Rouhier</td>
      <td >2E1137-70</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >Fran&ccedilois et Antoine COUPRIE (de Garat)</td>
      <td  align=right x:num>911</td>
      <td >de Louis COUSIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38895">27-juin</td>
      <td >Rouhier</td>
      <td >2E1137-60</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Antoine BOUJEAU et Jean DUPUY</td>
      <td  align=right x:num>911</td>
      <td >&agrave Pierre ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38492">20-mai</td>
      <td >Porcheron</td>
      <td >2E1085-30</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Michel et Jean BOISTEAU - Hugues BIBAUD</td>
      <td  align=right x:num>778</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38892">24-juin</td>
      <td >Rouhier</td>
      <td >2E1137-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Marc BASSET et Anne FOURNIER</td>
      <td  align=right x:num>911</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38488">16-mai</td>
      <td >Porcheron</td>
      <td >2E1085-20</td>
      <td >Angoul&ecircme</td>
      <td >Affermement</td>
      <td >Jean et Claude DUTRIEUX - Michel BOITEAU</td>
      <td  align=right x:num>778</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38011">25-janv</td>
      <td >D&eacutecoux</td>
      <td >2E2086-10</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean Rouffignac - Marie Rochier</td>
      <td  align=right x:num>730</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1700</td>
      <td  align=right
  x:num="38888">20-juin</td>
      <td >Rouhier</td>
      <td >2E1137-80</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Antoine AUDIER et Marguerite JOUBERT</td>
      <td  align=right x:num>911</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right
  x:num="38866">29-mai</td>
      <td >Clochard</td>
      <td >2E414-30</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Louis,Jeanne CARRE et Marg, Guil. POIRIER</td>
      <td  align=right x:num>952</td>
      <td >Efs G. POIRIER &amp; M. ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right x:num="40129">12-nov</td>
      <td >Petit</td>
      <td >2E5183-10</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Mariage</td>
      <td >Fran&ccedilois BIARD et Anne BRESSIAUD</td>
      <td  align=right x:num>1223</td>
      <td >de Lanville er Rouillac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right x:num="38528">25-juin</td>
      <td >Chauvin</td>
      <td >2E321-110</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jacques CALLAUD et Marg. COMBRET</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1701</td>
      <td  align=right x:num="39823">10-janv</td>
      <td >Daniaud</td>
      <td >2E5943-20</td>
      <td >Vaux-Rouillac</td>
      <td >Mariage</td>
      <td >Fran&ccedilois BENESTEAU et Antoinette ROY</td>
      <td  align=right x:num>1448</td>
      <td class=xl3520222>fr&egravere de Michel BENESTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right x:num="39531">24-mars</td>
      <td >Aigre</td>
      <td >2E108-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jeanne COUPEAU veuve Jean JOUANNET</td>
      <td  align=right x:num>1120</td>
      <td >d'une gabarre &agrave Jean ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="39012">22-oct</td>
      <td >D&eacutecoux</td>
      <td >2E2087-20</td>
      <td >Champniers</td>
      <td >D&eacuteclaration</td>
      <td >Fran&ccediloise ROUGIER et Jean BRISSAUD</td>
      <td  align=right x:num>1016</td>
      <td >son fils</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38643">18-oct</td>
      <td >Chauvin</td>
      <td >2E321-140</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >COMBRET &agrave Jeanne COUPEAU</td>
      <td  align=right x:num>801</td>
      <td >Vente d'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38920">22-juil</td>
      <td >Clochard</td>
      <td >2E414-40</td>
      <td >Lhoumeau</td>
      <td >Vente</td>
      <td >Arnaud ROY &agrave Guillaume BONVASLET</td>
      <td  align=right x:num>952</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38160">22-juin</td>
      <td >J&eacuteheu</td>
      <td >2E818-10</td>
      <td >Angoul&ecircme</td>
      <td >Association</td>
      <td >Louise SAUNIER et Louis SAUNIER</td>
      <td  align=right x:num>710</td>
      <td >son neveu</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38350">29-d&eacutec</td>
      <td >Boilevin</td>
      <td >&nbsp;</td>
      <td >Angoul&ecircme</td>
      <td >&nbsp;</td>
      <td >Jean Yrvoix et son fils Jean</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38631">6-oct</td>
      <td >Porcheron</td>
      <td >2E1085-70</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Louis SURREAU &agrave Genevi&egraveve GODIN</td>
      <td  align=right x:num>778</td>
      <td >sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="39162">21-mars</td>
      <td >Porcheron</td>
      <td >2E1085-60</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Jeanne COUPEAU vve Jean JOUANNET</td>
      <td  align=right x:num>778</td>
      <td >le Jeune</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38500">28-mai</td>
      <td >Chauvin</td>
      <td >2E321-130</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Guillaume GEMONT et Jeanne COMBRET</td>
      <td  align=right x:num>801</td>
      <td >Cath. ROY voir Arnaud ROY. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38019">2-f&eacutevr</td>
      <td >Texier</td>
      <td >2E3419-10</td>
      <td >Magnac</td>
      <td >Mariage</td>
      <td >Jean RICARD et Jeanne DELEGAUD</td>
      <td  align=right x:num>750</td>
      <td >A transcrire</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="39078">27-d&eacutec</td>
      <td >D&eacutecoux</td>
      <td >2E2087-30</td>
      <td >Champniers</td>
      <td >Vente</td>
      <td >Jean DARS et Jeanne PAPONNET</td>
      <td  align=right x:num>1016</td>
      <td >(Joseph DARS oncle. . .)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right x:num="39861">17-f&eacutevr</td>
      <td >Petit</td>
      <td >2E5183-20</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Mariage</td>
      <td >Jean BOISDON et Marie BISSEAU</td>
      <td  align=right x:num>1223</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right x:num="38353">1-janv</td>
      <td >Chauvin</td>
      <td >2E321-120</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean ROUYER et Marie DOUSSET</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38767">19-f&eacutevr</td>
      <td >D&eacutecoux</td>
      <td >2E2087-10</td>
      <td >Champniers</td>
      <td >Vente</td>
      <td >Pierre SURRAUD et Marguerite BRISSAUD</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="39545">07-avr</td>
      <td >Aigre</td>
      <td >2E108-40</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Jeanne COUPEAU veuve Jean JOUANNET</td>
      <td  align=right x:num>1120</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right
  x:num="38895">27-juin</td>
      <td >Micheau</td>
      <td >2E1033-50</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Marie BARBARY</td>
      <td  align=right x:num>975</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1702</td>
      <td  align=right x:num="39845">1-f&eacutevr</td>
      <td >Gillibert</td>
      <td >2E714-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Elie et Marie ROY avec Jeanne et ? RULLIER</td>
      <td  align=right x:num>1328</td>
      <td >enfants de Mass&eacute ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right x:num="38990">30-sept</td>
      <td >D&eacutecoux</td>
      <td >2E2087-70</td>
      <td >Champniers</td>
      <td >Quittance</td>
      <td >Arnaud ROY des DUBOIS</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td >mai</td>
      <td >Chauvin</td>
      <td >2E321-170</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >CALLAUD et COMBRET &agrave Marie JOUANNET</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="39025">04-nov</td>
      <td >D&eacutecoux</td>
      <td >2E2087-80</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Robert ROUYER et Marie SURRAUD</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="37992">6-janv</td>
      <td >Texier</td>
      <td >2E3419-30</td>
      <td >Magnac</td>
      <td >Mariage</td>
      <td >MOQUET Jeanne</td>
      <td  align=right x:num>750</td>
      <td >J. AUBOIN et F&ccedilse METAYER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38734">17-janv</td>
      <td >D&eacutecoux</td>
      <td >2E2087-40</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean BINCHE et Anne SURRAUD</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="39060">09-d&eacutec</td>
      <td >D&eacutecoux</td>
      <td >2E2087-90</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jacques ROUYER et Fran&ccediloise BERBINAUD</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38838">01-mai</td>
      <td >D&eacutecoux</td>
      <td >2E2087-50</td>
      <td >Champniers</td>
      <td >Quittance</td>
      <td >Fran&ccedilois ROUYER et Fran&ccediloise MIOT</td>
      <td  align=right x:num>1016</td>
      <td >&agrave Jean MIOT son fr&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="39755">03-nov</td>
      <td >Aigre</td>
      <td >2E109-10</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Phillipe LIET (de la Couronne)</td>
      <td  align=right x:num>1120</td>
      <td >de Fran&ccedilois RENARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38970">10-sept</td>
      <td >D&eacutecoux</td>
      <td >2E2087-60</td>
      <td >Champniers</td>
      <td >Proc&egraves-verbal</td>
      <td >Etienne MAYOU</td>
      <td  align=right x:num>1016</td>
      <td >et SURRAUDs. . .</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1703</td>
      <td  align=right
  x:num="38419">8-mars</td>
      <td >Chauvin</td>
      <td >2E321-160</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean ROUYER et Catherine DEMARSAT</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38727">10-janv</td>
      <td >D&eacutecoux</td>
      <td >2E2088-10</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Mathieu GUIONNET et Louise GAILLARD</td>
      <td  align=right x:num>1018</td>
      <td >fille de Nicolas</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38666">10-nov</td>
      <td >Chauvin</td>
      <td >2E321-180</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean VIGIER et Fran&ccediloise JOUANNET</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38739">22-janv</td>
      <td >D&eacutecoux</td>
      <td >2E2088-20</td>
      <td >Champniers</td>
      <td >Mariage</td>
      <td >Jean SURRAUD et Marguerite ROUYER</td>
      <td  align=right x:num>1018</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38850">13-mai</td>
      <td >D&eacutecoux</td>
      <td >2E2088-30</td>
      <td >Champniers</td>
      <td >Quittance</td>
      <td >Louis ROUYER &agrave Jean COUSSAUD</td>
      <td  align=right x:num>1018</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38736">19-janv</td>
      <td >Clochard</td>
      <td >2E414-50</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Mathu. et Cath. CARRE et J et Je. SURREAU</td>
      <td  align=right x:num>952</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38239">9-sept</td>
      <td >Boilevin</td>
      <td >&nbsp;</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre Yrvoix et Marie Bechade</td>
      <td  align=right x:num>757</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right
  x:num="38009">23-janv</td>
      <td >Porcheron</td>
      <td >2E1086-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques DAVIDxFran&ccediloise BIBAUD</td>
      <td  align=right x:num>746</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1704</td>
      <td  align=right x:num="40226">17-f&eacutevr</td>
      <td >Bire</td>
      <td >2E3169-20</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Jacques GUIMARD et Jeanne BALOTAUD</td>
      <td  align=right x:num>1493</td>
      <td class=xl3520222>fils  Pierre et Margte FOUILLADE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="39853">9-f&eacutevr</td>
      <td >Petit</td>
      <td >2E5184-10</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Mariage</td>
      <td >Fran&ccedilois MARTIN et Marie BOISDON</td>
      <td  align=right x:num>1223</td>
      <td class=xl3520222>Fr&egravere de Cath. et soeur de Jacques</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right x:num="39387">1-nov</td>
      <td >Porcheron</td>
      <td >2E1087-140</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois COTTIT et Genevi&egraveve ROY</td>
      <td  align=right x:num>840</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38579">15-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1087-110</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean DELAURIERE et Cath. CHABARIBERE</td>
      <td  align=right x:num>840</td>
      <td >Fils de Robert</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38583">19-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1087-120</td>
      <td >Angoul&ecircme</td>
      <td >R&eacuteception</td>
      <td >Isaac BOITEAU  comme ma&icirctre sergier</td>
      <td  align=right x:num>840</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38552">19-juil</td>
      <td >Porcheron</td>
      <td >2E1087-100</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Philippe, Daniel et Jean DELAURIERE</td>
      <td  align=right x:num>840</td>
      <td >Fils de Robert</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="39415">29-nov</td>
      <td >Porcheron</td>
      <td >2E1087-130</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BRISSON et Marie MARTIN</td>
      <td  align=right x:num>840</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="38116">9-mai</td>
      <td >Boilevin</td>
      <td >2E203-10</td>
      <td >Angoul&ecircme</td>
      <td >&nbsp;</td>
      <td >Vautour - Rouffignac</td>
      <td  align=right x:num>755</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1705</td>
      <td class=xl4320222 align=right
  x:num="40117">31-oct</td>
      <td class=xl4220222>Audouin</td>
      <td class=xl4220222>2E126-20</td>
      <td class=xl4220222>Angoul&ecircme</td>
      <td class=xl4220222>Vente</td>
      <td class=xl4220222>Marquis de Charras</td>
      <td class=xl4220222 align=right x:num>1365</td>
      <td class=xl3620222>de m&eacutetairie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right x:num="40185">7-janv</td>
      <td >Mallet</td>
      <td >2E6050-10</td>
      <td >Xambes</td>
      <td >Cession</td>
      <td >Michel et Jeanne BALOTEAU aux GUIMARD</td>
      <td  align=right x:num>1490</td>
      <td class=xl3520222>enfants de Philippe BALOTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1705</td>
      <td  align=right
  x:num="40186">8-janv</td>
      <td >Mallet</td>
      <td >2E6050-20</td>
      <td >Xambes</td>
      <td >Reconnaissance</td>
      <td >GUIMARD aux BALOTEAU</td>
      <td  align=right x:num>1490</td>
      <td class=xl3520222>enfants de Philippe BALOTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right x:num="38624">29-sept</td>
      <td >Porcheron</td>
      <td >2E1087-200</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jean PINASSEAU &agrave Michel et Jean BOITEAU</td>
      <td  align=right x:num>840</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38567">3-ao&ucirct</td>
      <td >Gauvry</td>
      <td >2E4299-10</td>
      <td >Mornac</td>
      <td >Mariage</td>
      <td >L&eacuteonard ROY et Marguerite BRISSAUD</td>
      <td  align=right x:num>865</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38531">28-juin</td>
      <td >Porcheron</td>
      <td >2E1087-180</td>
      <td >Angoul&ecircme</td>
      <td >Nomination</td>
      <td >Des syndics des ma&icirctres sergiers d'Angoul&ecircme</td>
      <td  align=right x:num>840</td>
      <td >Jean BOITEAU et autres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38656">31-oct</td>
      <td >Gauvry</td>
      <td >2E4299-20</td>
      <td >Mornac</td>
      <td >Mariage</td>
      <td >Thomas BRISSAUD et Catherine MARTIN</td>
      <td  align=right x:num>865</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38621">26-sept</td>
      <td >Porcheron</td>
      <td >2E1087-190</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre LIZEE et les femmes BARBARY</td>
      <td  align=right x:num>840</td>
      <td >Guill. JOUANNET et autres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38428">17-mars</td>
      <td >Porcheron</td>
      <td >2E1087-170</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jean BOITEAU et Marie BOILEVIN et autres</td>
      <td  align=right x:num>840</td>
      <td >&agrave Pierre GILLIBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="38384">1-f&eacutevr</td>
      <td >Porcheron</td>
      <td >2E1087-160</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jacques BASSET &agrave Pierre CLOCHARD</td>
      <td  align=right x:num>840</td>
      <td >Fils de Guillaume BASSET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="39678">18-ao&ucirct</td>
      <td >Aigre</td>
      <td >2E110-30</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Fran&ccedilois SIMARD et Louis ROY</td>
      <td  align=right x:num>1120</td>
      <td >chez Fran&ccedilois ROY p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1706</td>
      <td  align=right
  x:num="39512">05-mars</td>
      <td >Aigre</td>
      <td >2E110-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Charles COSTE Me tailleur d'habits</td>
      <td  align=right x:num>1120</td>
      <td >mari de Jeanne DUPUY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1707</td>
      <td  align=right
  x:num="39713">22-sept</td>
      <td >Aigre</td>
      <td >2E111-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Mathieu SIMARD et Louise FLEURANCEAU</td>
      <td  align=right x:num>1120</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1707</td>
      <td  align=right
  x:num="38280">20-oct</td>
      <td >Boilevin</td>
      <td >&nbsp;</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean YRVOIX</td>
      <td  align=right x:num>755</td>
      <td >Pas de photo</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1707</td>
      <td  align=right
  x:num="38292">1-nov</td>
      <td >Boilevin</td>
      <td >2E203-40</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Nicolas Basset</td>
      <td  align=right x:num>755</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td  align=right
  x:num="38517">14-juin</td>
      <td >Rouhier</td>
      <td >2E1141-10</td>
      <td >Lhoumeau</td>
      <td >Testament</td>
      <td >Jean JOUANNET et Anne THOMAS</td>
      <td  align=right x:num>768</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1708</td>
      <td  align=right
  x:num="38478">6-mai</td>
      <td >Peynaud fils</td>
      <td >2E2772-20</td>
      <td >Dirac</td>
      <td >Mariage</td>
      <td >Jean DUPUY et Anne BOUHIER</td>
      <td  align=right x:num>864</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1709</td>
      <td class=xl4320222 align=right
  x:num="38106">29-avr</td>
      <td class=xl4220222>J&eacuteheu</td>
      <td class=xl4420222>2E819-20</td>
      <td class=xl4220222>Angoul&ecircme</td>
      <td class=xl4220222>Proc&egraves verbal</td>
      <td class=xl4220222>M&eacutetairie de la plaigne</td>
      <td class=xl4220222 align=right x:num>710</td>
      <td class=xl3620222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38144">6-juin</td>
      <td >Manci&eacute</td>
      <td >2E942-70</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Jean et Berthom&eacute DAUVEAU</td>
      <td  align=right x:num>714</td>
      <td >Fr&egraveres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="38224">25-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E942-80</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >MONBOEUF Fran&ccediloise</td>
      <td  align=right x:num>713</td>
      <td >Jacques TULLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1709</td>
      <td  align=right
  x:num="39471">24-janv</td>
      <td >Aigre</td>
      <td >2E111-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td 
  x:str="Mathurin ROUHIER et Antoinette CHERBONNEAU ">Mathurin ROUHIER et Antoinette 
        CHERBONNEA<span style='display:none'>U </span></td>
      <td  align=right x:num>1120</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38378">26-janv</td>
      <td >Porcheron</td>
      <td >2E1089-100</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre ESCOUPEAU et Jeanne NOBLET</td>
      <td  align=right x:num>837</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38395">12-f&eacutevr</td>
      <td >Porcheron</td>
      <td >2E1089-110</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois PORCHERON et Magdelaine ROY</td>
      <td  align=right x:num>837</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38335">14-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E942-120</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >MONBOEUF Fran&ccediloise</td>
      <td  align=right x:num>714</td>
      <td >Marie DAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38917">19-juil</td>
      <td >Clochard</td>
      <td >2E414-60</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean DEMARSAT et Marie DARS</td>
      <td  align=right x:num>952</td>
      <td >Fille de J. et Louise GAILLARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38467">25-avr</td>
      <td >Porcheron</td>
      <td >2E1089-130</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Jean BOISTEAU et Jean BOILEVIN</td>
      <td  align=right x:num>837</td>
      <td >et Marie BOILEVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38309">18-nov</td>
      <td >Manci&eacute</td>
      <td >2E942-110</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >TUILLIER Jacques</td>
      <td  align=right x:num>714</td>
      <td >Elizabeth DAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38653">28-oct</td>
      <td >Porcheron</td>
      <td >2E1089-140</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Pierre JALLET &agrave Antoine ROUFFIGNAC</td>
      <td  align=right x:num>837</td>
      <td >de Balzac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1710</td>
      <td  align=right
  x:num="38435">24-mars</td>
      <td >Porcheron</td>
      <td >2E1089-120</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jacques JANDRON &agrave Michel JOUANNET</td>
      <td  align=right x:num>837</td>
      <td >et Marg. GILLIBERT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38524">21-juin</td>
      <td >Meslier</td>
      <td >2E2587-10</td>
      <td >La Couronne</td>
      <td >Mariage</td>
      <td >Antoine JOUANNET et Marguerite GUICHARD</td>
      <td  align=right x:num>825</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right x:num="40069">13-sept</td>
      <td >Petit</td>
      <td >2E5184-20</td>
      <td >Saint-Cybarde<span
  style='display:none'>aux</span></td>
      <td >Mariage</td>
      <td >Jean BIARD et Anne VERET</td>
      <td  align=right x:num>1223</td>
      <td >de Lanville er Rouillac</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right x:num="38449">7-avr</td>
      <td >Porcheron</td>
      <td >2E1089-150</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Damien DURET et Marie SURREAU</td>
      <td  align=right x:num>837</td>
      <td >fille de Louis et Cath. LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38461">19-avr</td>
      <td >Rouhier</td>
      <td >2E1142-30</td>
      <td >Lhoumeau</td>
      <td >Transaction</td>
      <td >Simon COUPEAU - Jean JANDRON</td>
      <td  align=right x:num>763</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38653">28-oct</td>
      <td >Chauvin</td>
      <td >2E321-240</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Barth&eacutel&eacutemy OLLIVIER et Catherine ROY</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38589">25-ao&ucirct</td>
      <td >Porcheron</td>
      <td >2E1089-160</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean ROUFFIGNAC et Marguerite PETITBOIS</td>
      <td  align=right x:num>837</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1711</td>
      <td  align=right
  x:num="38373">21-janv</td>
      <td >Chauvin</td>
      <td >2E321-230</td>
      <td >Lhoumeau</td>
      <td >Procuration</td>
      <td >(Ratification) de Pierre &agrave Jean JOUANNET</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38708">22-d&eacutec</td>
      <td >Porcheron</td>
      <td >2E1089-220</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois DURANDEAU et Marg. BOISSEAU</td>
      <td  align=right x:num>837</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38491">19-mai</td>
      <td >Porcheron</td>
      <td >2E1089-190</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Pierre ROY et Jeanne PERROT &agrave fr&egraveres PERROT</td>
      <td  align=right x:num>837</td>
      <td >Jean SIMARD et Louise ROY</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38426">15-mars</td>
      <td >Meslier</td>
      <td >2E2587-30</td>
      <td >La Couronne</td>
      <td >Mariage</td>
      <td >Fran&ccedilois GORICHON et Anne LIET</td>
      <td  align=right x:num>825</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4620222 align=right x:num>1712</td>
      <td class=xl4720222 align=right
  x:num="38577">13-ao&ucirct</td>
      <td class=xl4620222>Meslier</td>
      <td class=xl4820222>2E2587-40</td>
      <td class=xl4620222>La Couronne</td>
      <td class=xl4620222>Procuration</td>
      <td class=xl4620222>Marie MASQUET &agrave Denis DEBUSSAC</td>
      <td class=xl4620222 align=right x:num>825</td>
      <td class=xl4620222>Pour plainte suite &agrave un viol</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38550">17-juil</td>
      <td >Porcheron</td>
      <td >2E1089-210</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Jean ROUFFIGNAC &agrave Fran&ccedilois PETITBOIS</td>
      <td  align=right x:num>837</td>
      <td >et Marguerite PETITBOIS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38363">11-janv</td>
      <td >Porcheron</td>
      <td >2E1089-180</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean LURAT et Catherine GILLIBERT</td>
      <td  align=right x:num>837</td>
      <td >Fils de Jean et Fr&ccedilse CARRE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38670">14-nov</td>
      <td >Chauvin</td>
      <td >2E322-10</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Jean JOUANNET &agrave Marguerite CASTAIGNE</td>
      <td  align=right x:num>825</td>
      <td >Vente d'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38411">28-f&eacutevr</td>
      <td >Meslier</td>
      <td >2E2587-20</td>
      <td >La Couronne</td>
      <td >Mariage</td>
      <td >Cl&eacutement LIZEE et Marie PRAUD</td>
      <td  align=right x:num>825</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1712</td>
      <td  align=right
  x:num="38653">28-oct</td>
      <td >J&eacuteheu</td>
      <td >2E825-20</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Ant. et Jacques ROUFFIGNAC &agrave Pierre DAVID</td>
      <td  align=right x:num>710</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1713</td>
      <td  align=right
  x:num="38492">20-mai</td>
      <td >Porcheron</td>
      <td >2E1090-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean LAVAL et Marie PERROT</td>
      <td  align=right x:num>838</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1713</td>
      <td  align=right
  x:num="38513">10-juin</td>
      <td >Porcheron</td>
      <td >2E1090-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Fran&ccedilois ROY  et Jean SIMARD et Louise ROY</td>
      <td  align=right x:num>838</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38376">24-janv</td>
      <td >Porcheron</td>
      <td >2E1090-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean COQUAUD et Genevi&egraveve CHAUVET</td>
      <td  align=right x:num>838</td>
      <td >Fille de Nicolas CHAUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38667">11-nov</td>
      <td >Porcheron</td>
      <td >2E1090-50</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >Jean SIMARD ET Louise ROY</td>
      <td  align=right x:num>838</td>
      <td >de Fran&ccedilois HERAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38551">18-juil</td>
      <td >J&eacuteheu</td>
      <td >2E823-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Catherine MARTIN - BRISSAUD - SURRAUD</td>
      <td  align=right x:num>780</td>
      <td >Thomas BRISSAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1714</td>
      <td  align=right
  x:num="38206">7-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E944-10</td>
      <td >Angoul&ecircme</td>
      <td >PV</td>
      <td >TUILLIER Jacques</td>
      <td  align=right x:num>733</td>
      <td >Elizabeth DAUVEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="39778">26-nov</td>
      <td >Bessac</td>
      <td >2E3893-10</td>
      <td >Mazi&egraveres</td>
      <td >Mariage</td>
      <td >Jean DORT et Marguerite ROUX</td>
      <td  align=right x:num>1115</td>
      <td >les DOR de Suaux</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38687">1-d&eacutec</td>
      <td >Porcheron</td>
      <td >2E1091-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Michel BOITEAU et Marie BASSET</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38691">5-d&eacutec</td>
      <td >Porcheron</td>
      <td >2E1091-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean BOITEAU et Marie BOILEVIN</td>
      <td  align=right x:num>841</td>
      <td >&agrave J. AUDOUIN et L. RESNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38146">8-juin</td>
      <td >Manci&eacute</td>
      <td >2E945-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Pierre Papin - Raymond Delegaud</td>
      <td  align=right x:num>733</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38251">21-sept</td>
      <td >Manci&eacute</td>
      <td >2E945-50</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Pierre CHAUVET et Marie THINON</td>
      <td  align=right x:num>733</td>
      <td >et Marguerite DESPLANCHES</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="38682">26-nov</td>
      <td >Deroullede</td>
      <td >2E453-10</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >LHUILLIER - Pierre CHAUVET</td>
      <td  align=right x:num>769</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right x:num="39826">13-janv</td>
      <td >Baudet</td>
      <td >2E2795-10</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Jean HERAUX et Fran&ccediloise BOISDON</td>
      <td  align=right x:num>1423</td>
      <td class=xl3520222>fille de Jacques et Marie GONTIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1715</td>
      <td  align=right
  x:num="40534">22-d&eacutec</td>
      <td >Bire</td>
      <td class=xl4920222>2E3471-20</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Ja. et Je. SAULNIER et M. et J. GREZILLEIR</td>
      <td  align=right x:num>1492</td>
      <td class=xl3520222>enf. de Ja. SAUNIER et J. GUIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right x:num="38019">2-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E946-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre Delaglaye et Catherine Roche</td>
      <td  align=right x:num>739</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38484">12-mai</td>
      <td >Porcheron</td>
      <td >2E1091-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre FROMENTIN et Jeanne ROY</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="39198">26-avr</td>
      <td >Rouhier</td>
      <td >2E1144-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean MAIGNAN et Fran&ccediloise DAUVEAU</td>
      <td  align=right x:num>775</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38466">24-avr</td>
      <td >Porcheron</td>
      <td >2E1091-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois PRADEAU et Jeanne NOBLET</td>
      <td  align=right x:num>841</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="39757">05-nov</td>
      <td >Aigre</td>
      <td >2E113-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean ROY et Fran&ccediloise LECLERC</td>
      <td  align=right x:num>1122</td>
      <td >fils de Marguerite CASTAIGNE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38138">31-mai</td>
      <td >J&eacuteheu</td>
      <td >2E825-10</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Julien Imbert - Jonction</td>
      <td  align=right x:num>710</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38288">28-oct</td>
      <td >J&eacuteheu</td>
      <td >2E825-30</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >David - Rouffignac</td>
      <td  align=right x:num>710</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38653">28-oct</td>
      <td >J&eacuteheu</td>
      <td >2E825-20</td>
      <td >Angoul&ecircme</td>
      <td >Sommation</td>
      <td >Pierre DAVID &agrave Antoine et Jacq. ROUFFIGNAC</td>
      <td  align=right x:num>710</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38210">11-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E946-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Jean Chesnaud - Jean Boisteau</td>
      <td  align=right x:num>739</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38461">19-avr</td>
      <td >Porcheron</td>
      <td >2E1091-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean DURANT et Catherine LURAT</td>
      <td  align=right x:num>841</td>
      <td >&agrave Jean LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38045">28-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E946-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Andr&eacute BONNORONT et Marie GIBAUD</td>
      <td  align=right x:num>739</td>
      <td >Antoine DAUDET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1716</td>
      <td  align=right
  x:num="38162">24-juin</td>
      <td >Manci&eacute</td>
      <td >2E946-40</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >TUILLIER Jacques</td>
      <td  align=right x:num>739</td>
      <td >Pierre BOUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38799">23-mars</td>
      <td >Rouhier</td>
      <td >2E1145-30</td>
      <td >Lhoumeau</td>
      <td >Arrentement</td>
      <td >Jean BOISTEAU &agrave E. RICHON et M. DECLIDE</td>
      <td  align=right x:num>790</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38582">18-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E322-20</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Marie BARBARY &agrave Jean ROY</td>
      <td  align=right x:num>825</td>
      <td >Vente d'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="39550">12-avr</td>
      <td >Aigre</td>
      <td >2E113-30</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >entre BENESTEAU (et COUPEAU)</td>
      <td  align=right x:num>1122</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38572">8-ao&ucirct</td>
      <td >Rouhier</td>
      <td >2E1145-10</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Bernard THOUARD et Jeanne ROUHIER</td>
      <td  align=right x:num>790</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38200">1-ao&ucirct</td>
      <td >Manci&eacute</td>
      <td >2E947-10</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >L&eacuteonard RIFFAUD et Louise LIZEE</td>
      <td  align=right x:num>741</td>
      <td >et J. TRICOINE et Marie LIZEE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right
  x:num="38692">6-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E826-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Maurice DESCARSELLE - BOISTEAU</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1717</td>
      <td  align=right x:num="39958">25-mai</td>
      <td >Baudet</td>
      <td >2E2795-20</td>
      <td >Echallat</td>
      <td >Mariage</td>
      <td >Jean PELLEGEAY et Catherine MAUFRAS</td>
      <td  align=right x:num>1423</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1718</td>
      <td class=xl4320222 align=right x:num="38336">15-d&eacutec</td>
      <td class=xl4220222>Lalande</td>
      <td class=xl4420222>2E4959-10</td>
      <td class=xl4220222>Ruelle</td>
      <td class=xl4220222>Possession</td>
      <td class=xl4220222>Abbaye de Grosbot</td>
      <td class=xl4220222 align=right x:num>746</td>
      <td class=xl3620222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right
  x:num="38666">10-nov</td>
      <td >Porcheron</td>
      <td >2E1092-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Denis BASSET et Louise CHABOT</td>
      <td  align=right x:num>842</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1718</td>
      <td  align=right x:num="40014">20-juil</td>
      <td >Baudet</td>
      <td >2E2795-30</td>
      <td >Echallat</td>
      <td >Proc&egraves verbal</td>
      <td >Jacques BOISDON, Pierre CAUTE</td>
      <td  align=right x:num>1423</td>
      <td >re&ccedilus avec des pierres...</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right x:num="39051">30-nov</td>
      <td >J&eacuteheu</td>
      <td >2E828-50</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td 
  x:str="Jean BOISTEAU et Marie BOILEVIN ">Jean BOISTEAU et Marie BOILEVIN </td>
      <td  align=right x:num>885</td>
      <td >&agrave Jean COUTURIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38369">17-janv</td>
      <td >Porcheron</td>
      <td >2E1092-20</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Michel ROY et autres</td>
      <td  align=right x:num>842</td>
      <td >Vente d'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38482">10-mai</td>
      <td >Porcheron</td>
      <td >2E1092-50</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Marguerite CASTAGNE veuve de Jean ROY</td>
      <td  align=right x:num>842</td>
      <td >Vente d'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38892">24-juin</td>
      <td >J&eacuteheu</td>
      <td >2E828-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean BENESTEAU et Jeanne BOILEVIN de Fl&eacuteac</td>
      <td  align=right x:num>885</td>
      <td 
  x:str="&agrave Antoine DAUDET ">&agrave Antoine DAUDET </td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38424">13-mars</td>
      <td >Porcheron</td>
      <td >2E1092-40</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Michel ROY et autres</td>
      <td  align=right x:num>842</td>
      <td >Vente d'une gabarre</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1719</td>
      <td  align=right
  x:num="38381">29-janv</td>
      <td >Porcheron</td>
      <td >2E1092-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois GALOCHIER et Marie ROUHIER</td>
      <td  align=right x:num>842</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38943">14-ao&ucirct</td>
      <td >J&eacuteheu</td>
      <td >2E829-20</td>
      <td >Angoul&ecircme</td>
      <td >Offre</td>
      <td >Pierre ROUHIER et Marie FOUGERAT (Balzac)</td>
      <td  align=right x:num>885</td>
      <td >&agrave Dlle. DUMERGUE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38990">30-sept</td>
      <td >J&eacuteheu</td>
      <td >2E829-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jeanne JOUANNET et Jean DESMAISONS</td>
      <td  align=right x:num>885</td>
      <td >2000 livres de dot</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="39011">21-oct</td>
      <td >J&eacuteheu</td>
      <td >2E829-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean AUDOUIN aux LIZEE</td>
      <td  align=right x:num>885</td>
      <td class=xl5020222>Personnes  &agrave enregistrer</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38868">31-mai</td>
      <td >Chauvin</td>
      <td >2E322-30</td>
      <td >Lhoumeau</td>
      <td >Partage</td>
      <td >Entre filles COMBRET et Menaud ROY</td>
      <td  align=right x:num>825</td>
      <td >(Arnd JOUANNET et C. ROY)</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right
  x:num="38943">14-ao&ucirct</td>
      <td >J&eacuteheu</td>
      <td >2E829-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Marie Anne DUMERGUE &agrave ROUHIER (Balzac)</td>
      <td  align=right x:num>885</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1720</td>
      <td  align=right x:num="39917">14-avr</td>
      <td >Audouin</td>
      <td >2E126-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre RIFFAUD et Catherine ROSSIGNOL</td>
      <td  align=right x:num>1365</td>
      <td >de St Martin</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right x:num="39589">21-mai</td>
      <td >Rouhier</td>
      <td >2E1146-10</td>
      <td >Lhoumeau</td>
      <td >Acquisition</td>
      <td >Simon COUPEAU et Marie LIZEE</td>
      <td  align=right x:num>1117</td>
      <td >du Sr Jean DUTILLET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38397">14-f&eacutevr</td>
      <td >J&eacuteheu</td>
      <td >2E843-10</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Pierre LIZEE et Marie DAVID</td>
      <td  align=right x:num>768</td>
      <td >Fille de Jean et Ant. PERAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38410">27-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E323-10</td>
      <td >Lhoumeau</td>
      <td >Quittance</td>
      <td >Menaud ROY &agrave Michel JOUANNET</td>
      <td  align=right x:num>842</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right
  x:num="38637">12-oct</td>
      <td >Porcheron</td>
      <td >2E1092-80</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume MATHIEU et Louise BASSET</td>
      <td  align=right x:num>842</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1721</td>
      <td  align=right x:num="40198">20-janv</td>
      <td >Bire</td>
      <td >2E3472-30</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Jacques GUIMARD et Fran&ccediloise AUDOIN</td>
      <td  align=right x:num>1491</td>
      <td class=xl3520222>fils Pierre et Marguerite FOUILLADE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right x:num="38436">25-mars</td>
      <td >Porcheron</td>
      <td >2E1092-90</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jean BOITEAU &agrave Jean BERNIER</td>
      <td  align=right x:num>842</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38379">27-janv</td>
      <td >Chauvin</td>
      <td >2E323-40</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Jean DUMERGUE et Catherine BOISTEAU</td>
      <td  align=right x:num>842</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38133">26-mai</td>
      <td >J&eacuteheu</td>
      <td >2E831-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Vincent MESNARD et Marie BOUHIER</td>
      <td  align=right x:num>731</td>
      <td >Fille Guil. et Cath. BENESTEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38105">28-avr</td>
      <td >J&eacuteheu</td>
      <td >2E831-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Barreau - Croizet - Croizet - Barreau</td>
      <td  align=right x:num>730</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38664">8-nov</td>
      <td >J&eacuteheu</td>
      <td >2E831-60</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean ROUYER  (St Yrieix) &agrave Jean ROY (Lhoumea<span
  style='display:none'>u)</span></td>
      <td  align=right x:num>731</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38299">8-nov</td>
      <td >J&eacuteheu</td>
      <td >2E831-60</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Rouyer de Marsat - Roy Guillard</td>
      <td  align=right x:num>731</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38470">28-avr</td>
      <td >J&eacuteheu</td>
      <td >2E831-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >BAREAU - CROIZET et CROIZET - BAREAU</td>
      <td  align=right x:num>730</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1722</td>
      <td  align=right
  x:num="38565">1-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E323-20</td>
      <td >Lhoumeau</td>
      <td >Testament</td>
      <td >Pierre IMBERT</td>
      <td  align=right x:num>843</td>
      <td >M. JOUANNET, M. BRISSEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1724</td>
      <td  align=right
  x:num="38382">30-janv</td>
      <td >Chauvin</td>
      <td >2E323-70</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Antoine BINET et Agnes BOISTEAU</td>
      <td  align=right x:num>843</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1724</td>
      <td  align=right
  x:num="38382">30-janv</td>
      <td >Chauvin</td>
      <td >2E323-80</td>
      <td >Lhoumeau</td>
      <td >Mariage</td>
      <td >Guillaume (Jullien?) BAUD et Marie BOISTEAU</td>
      <td  align=right x:num>843</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1724</td>
      <td  align=right
  x:num="38359">7-janv</td>
      <td >Manci&eacute</td>
      <td >2E954-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jean FRELANT &agrave Laurent DAVID</td>
      <td  align=right x:num>590</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1724</td>
      <td  align=right
  x:num="38359">7-janv</td>
      <td >Manci&eacute</td>
      <td >2E954-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jean FROLANT &agrave Laurent DAVID</td>
      <td  align=right x:num>590</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38530">27-juin</td>
      <td >J&eacuteheu</td>
      <td >2E834-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Laurent DAVID et Marie CHENEVIERE</td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38608">13-sept</td>
      <td >J&eacuteheu</td>
      <td >2E834-70</td>
      <td >Angoul&ecircme</td>
      <td >Ratification</td>
      <td >Pierre JOUANNET et Michel JOUANNET</td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38490">18-mai</td>
      <td >J&eacuteheu</td>
      <td >2E834-30</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Jean BOYTEAU, Jean MALLAGOU et Cath. BOY<span style='display:none'>TEAU</span></td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38428">17-mars</td>
      <td >J&eacuteheu</td>
      <td >2E834-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >BOURDEIX et CHARRAUD &agrave Jean ROUFFIGNAT</td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1725</td>
      <td  align=right
  x:num="38428">17-mars</td>
      <td >J&eacuteheu</td>
      <td >2E834-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean  &agrave Antoine et Jacques ROUFFIGNAC (Balza<span
  style='display:none'>c)</span></td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1726</td>
      <td  align=right
  x:num="38305">14-nov</td>
      <td >J&eacuteheu</td>
      <td >2E835-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Pierre CHAUVET Marg. DESPLANCHES</td>
      <td  align=right x:num>572</td>
      <td >et GRELLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1726</td>
      <td  align=right
  x:num="38157">19-juin</td>
      <td >Manci&eacute</td>
      <td >2E955-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois CHERADE et Marie GABORIT</td>
      <td  align=right x:num>590</td>
      <td >Fille Jean et Magd. TOURNIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1726</td>
      <td  align=right
  x:num="38140">2-juin</td>
      <td >Lalande</td>
      <td >2E4960-20</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Marc ROUFFIGNAC et Marie SEGUIN</td>
      <td  align=right x:num>750</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1727</td>
      <td  align=right
  x:num="38220">21-ao&ucirct</td>
      <td >Caillaud</td>
      <td >&nbsp;</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Barth&eacutel&eacutemy Dauveau-Rose Jean</td>
      <td  align=right x:num>576</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="37997">11-janv</td>
      <td >Manci&eacute</td>
      <td >&nbsp;</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques Boyteau-Antoinette Blandeau</td>
      <td  align=right x:num>576</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="38152">14-juin</td>
      <td >Caillaud</td>
      <td > </td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Gillibert Vve Jouannet</td>
      <td  align=right x:num>576</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="37997">11-janv</td>
      <td >Manci&eacute</td>
      <td >&nbsp;</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois Boyteau-Marie Blandeau</td>
      <td  align=right x:num>576</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right x:num="40054">29-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E324-20</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Jacques ROY et Elisabeth CONTE</td>
      <td  align=right x:num>1328</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1728</td>
      <td  align=right
  x:num="40029">4-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E324-10</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Jean ROY et Jeanne ARDENT</td>
      <td  align=right x:num>1328</td>
      <td >2e mariage de Jean</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right x:num="38213">14-ao&ucirct</td>
      <td >Lalande</td>
      <td >2E4960-50</td>
      <td >Ruelle</td>
      <td >Arrentement</td>
      <td >Jean et Philippe DELAURIERE</td>
      <td  align=right x:num>750</td>
      <td >&agrave Philippe SEGUIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38701">15-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E957-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean VIAUD et Marie JOLLY</td>
      <td  align=right x:num>781</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38447">5-avr</td>
      <td >Manci&eacute</td>
      <td >2E957-10</td>
      <td >Angoul&ecircme</td>
      <td >Inventaire</td>
      <td >Catherine FESTIS - DESCARSELLE</td>
      <td  align=right x:num>781</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38176">8-juil</td>
      <td >Lalande</td>
      <td >2E4960-40</td>
      <td >Ruelle</td>
      <td >Quittance</td>
      <td >Jean GIBEAU  et  Marie DELAURIERE</td>
      <td  align=right x:num>750</td>
      <td >&agrave Jean et Jean DELAURIERE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right
  x:num="38347">26-d&eacutec</td>
      <td >J&eacuteheu</td>
      <td >2E838-30</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Rouffignac Rouhier</td>
      <td  align=right x:num>573</td>
      <td >Jean et Marie</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1729</td>
      <td  align=right x:num="39853">9-f&eacutevr</td>
      <td >Chauvin</td>
      <td >2E324-30</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Jean RIFFAUD et Fran&ccediloise COLLAIN</td>
      <td  align=right x:num>1328</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right x:num="38278">18-oct</td>
      <td >Caillaud</td>
      <td >2E230-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jacques Rouffignac - Jean Rouffignac</td>
      <td  align=right x:num>591</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right
  x:num="38563">30-juil</td>
      <td >Manci&eacute</td>
      <td >2E957-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques ROUHIER et Jeanne SURREAU</td>
      <td  align=right x:num>781</td>
      <td >Fils de Pierre et fille de Louis</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1730</td>
      <td  align=right x:num="40040">15-ao&ucirct</td>
      <td >Chauvin</td>
      <td >2E324-40</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Antoine CLOCHARD et Marie BOUCHEAU</td>
      <td  align=right x:num>1328</td>
      <td class=xl3520222>fille de Pierre BOUCHEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1731</td>
      <td  align=right x:num="38686">30-nov</td>
      <td >Manci&eacute</td>
      <td >2E958-30</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Jeanne ALLEMAND &agrave Jean COLLIN</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1731</td>
      <td  align=right
  x:num="38654">29-oct</td>
      <td >Manci&eacute</td>
      <td >2E958-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Mathieu ROUHIER et Jeanne LURAT</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1732</td>
      <td  align=right
  x:num="38286">26-oct</td>
      <td >Caillaud</td>
      <td >2E232-30</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >Pierre Chauvet - Besmier</td>
      <td  align=right x:num>709</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1732</td>
      <td  align=right
  x:num="38421">10-mars</td>
      <td >Manci&eacute</td>
      <td >2E958-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Pierre GIBERT - Simon COUPEAU</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38489">17-mai</td>
      <td >J&eacuteheu</td>
      <td >2E842-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre TUILLIER et Elizabeth DURAND</td>
      <td  align=right x:num>776</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38393">10-f&eacutevr</td>
      <td >Lalande</td>
      <td >2E4961-10</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Pierre DAVID et Marie TEXIER</td>
      <td  align=right x:num>758</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38089">12-avr</td>
      <td >Caillaud</td>
      <td >2E233-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Cybard Caillaud - Jeanne Dars</td>
      <td  align=right x:num>709</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38364">12-janv</td>
      <td >Manci&eacute</td>
      <td >2E959-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Cath. ARONDEAU &agrave Sim COUPEAU et M. LIZEE</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right
  x:num="38180">12-juil</td>
      <td >Caillaud</td>
      <td >2E233-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Nicolas Grattereau - Marie Surraud</td>
      <td  align=right x:num>709</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1733</td>
      <td  align=right x:num="40131">14-nov</td>
      <td >Chauvin</td>
      <td >2E324-60</td>
      <td >L'Houmeau</td>
      <td >Mariage</td>
      <td >Joseph DE LA BRUGIERE DU VIGNAUD</td>
      <td  align=right x:num>1328</td>
      <td >et Fran&ccediloise RIFFAUD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right x:num="38636">11-oct</td>
      <td >Manci&eacute</td>
      <td >2E959-40</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >Jacques BOYTEAU et Marie Rose BASSET</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38415">4-mars</td>
      <td >Manci&eacute</td>
      <td >2E959-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Hugues DELAURIERE et Marie AURY</td>
      <td  align=right x:num>785</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38277">17-oct</td>
      <td >Caillaud</td>
      <td >2E234-60</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Rouhier Gautereau</td>
      <td  align=right x:num>554</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38153">15-juin</td>
      <td >Caillaud</td>
      <td >2E234-40</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >Combois Saunier Combois</td>
      <td  align=right x:num>554</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38362">10-janv</td>
      <td >Caillaud</td>
      <td >2E234-70</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Guillaume DAVID &agrave Jean DAVID</td>
      <td  align=right x:num>710</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38153">15-juin</td>
      <td >Caillaud</td>
      <td >2E234-50</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Combois Saunier Combois</td>
      <td  align=right x:num>554</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="37996">10-janv</td>
      <td >Caillaud</td>
      <td >2E234-70</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >David - David Degorces</td>
      <td  align=right x:num>710</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38663">7-nov</td>
      <td >Caillaud</td>
      <td >2E234-80</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >Mrs du S&eacuteminaire et Laurent et L&eacuteonard DAVID</td>
      <td  align=right x:num>711</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38267">7-oct</td>
      <td >Caillaud</td>
      <td >2E234-80</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >S&eacuteminaire - Laurent et L&eacuteonard David</td>
      <td  align=right x:num>711</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38024">7-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E234-10</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Girard Bibaud - Cybard Caillaud Jeanne Dars</td>
      <td  align=right x:num>554</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38643">18-oct</td>
      <td >Caillaud</td>
      <td >2E234-90</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Etienne RICHON &agrave Pierre TEXIER</td>
      <td  align=right x:num>711</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="38278">18-oct</td>
      <td >Caillaud</td>
      <td >2E234-90</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Richon - Pierre Texier</td>
      <td  align=right x:num>711</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right x:num="40211">2-f&eacutevr</td>
      <td >Bire</td>
      <td >2E3476-10</td>
      <td >Mansle</td>
      <td >Mariage</td>
      <td >Jacques SAULNIER et Jeanne BILLOCHON et enf<span style='display:none'>ants</span></td>
      <td  align=right x:num>1492</td>
      <td class=xl3520222>fils Jacques et Jeanne GUIMARD</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1734</td>
      <td  align=right
  x:num="40212">3-f&eacutevr</td>
      <td >Cousseaud</td>
      <td >2E1635-10</td>
      <td >Bunzac</td>
      <td >Mariage</td>
      <td >Jean et Elisabeth GAUTIER</td>
      <td  align=right x:num>1491</td>
      <td >et Marie et Antoine DEPLANCHE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1735</td>
      <td  align=right x:num="38522">19-juin</td>
      <td >Manci&eacute</td>
      <td >2E960-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques MARTEAU et Madeleine DAVID</td>
      <td  align=right x:num>786</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1735</td>
      <td  align=right
  x:num="38480">8-mai</td>
      <td >Manci&eacute</td>
      <td >2E960-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Philippe BERGER - Laurent DAVID</td>
      <td  align=right x:num>786</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1735</td>
      <td  align=right
  x:num="38322">1-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E235-10</td>
      <td >Angoul&ecircme</td>
      <td >D&eacutelaissement</td>
      <td >DAUVEAU Elizabeth</td>
      <td  align=right x:num>566</td>
      <td >TULLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right
  x:num="38506">3-juin</td>
      <td >Marchadier</td>
      <td >2E969-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean DECLIDE et Marguerite DARS</td>
      <td  align=right x:num>802</td>
      <td >Fille de Joseph</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right
  x:num="38022">5-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E236-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean Lameau Denise Rouhier</td>
      <td  align=right x:num>566</td>
      <td >Fille de Pierre et Marie AUBOIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1736</td>
      <td  align=right
  x:num="38398">15-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E960-40</td>
      <td >Angoul&ecircme</td>
      <td >Apprentissage</td>
      <td >Fran&ccedilois COUPEAU chez Fran&ccedilois LIZEE</td>
      <td  align=right x:num>786</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38041">24-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E237-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Guy Saunier</td>
      <td  align=right x:num>730</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38716">30-d&eacutec</td>
      <td >Marchadier</td>
      <td >2E969-30</td>
      <td >Angoul&ecircme</td>
      <td >Transport</td>
      <td >Michel DECLIDE &agrave Jean DECLIDE et Marg. DARS</td>
      <td  align=right x:num>802</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38197">29-juil</td>
      <td >Caillaud</td>
      <td >2E237-30</td>
      <td >Angoul&ecircme</td>
      <td >Fermage</td>
      <td >Madeleine Rouffignac - Billac</td>
      <td  align=right x:num>730</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1737</td>
      <td  align=right
  x:num="38355">3-janv</td>
      <td >Lalande</td>
      <td >2E4962-10</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Jacques DELAURIERE et Marg. MIRANDE</td>
      <td  align=right x:num>758</td>
      <td >Fils Jacques et Cath. MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38449">7-avr</td>
      <td >Manci&eacute</td>
      <td >2E961-30</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Mad. FONTENAILLE &agrave Jacques BONNAURON</td>
      <td  align=right x:num>789</td>
      <td >et Fran&ccediloise DEGUDE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38122">15-mai</td>
      <td >Caillaud</td>
      <td >2E237-50</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >DAUVEAU Elizabeth</td>
      <td  align=right x:num>730</td>
      <td >TULLIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38716">30-d&eacutec</td>
      <td >Manci&eacute</td>
      <td >2E961-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Pier. PAPIN et L. CHERADE &agrave Fran. CHERADE</td>
      <td  align=right x:num>789</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1738</td>
      <td  align=right
  x:num="38456">14-avr</td>
      <td >Manci&eacute</td>
      <td >2E961-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Hugues DELAURIERE et Jeanne BACHELLIER</td>
      <td  align=right x:num>789</td>
      <td >Fils Jacques et Cath. MARTIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right
  x:num="38397">14-f&eacutevr</td>
      <td >Manci&eacute</td>
      <td >2E961-60</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Jean LAGLAYE et Catherine ROCHE</td>
      <td  align=right x:num>789</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1739</td>
      <td  align=right x:num="40125">8-nov</td>
      <td >Fuzaud</td>
      <td >2E4695-10</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Jean SAUVAGE et Antoinette DARS</td>
      <td  align=right x:num>1406</td>
      <td >DARS de Rivi&egraveres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right x:num="38533">30-juin</td>
      <td >Manci&eacute</td>
      <td >2E962-20</td>
      <td >Angoul&ecircme</td>
      <td >Licitation</td>
      <td >Laurent et L&eacuteon. DAVID et DUHAMEL-LAUZET</td>
      <td  align=right x:num>791</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38715">29-d&eacutec</td>
      <td >Lalande</td>
      <td >2E4963-20</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Jacques RIFFAUD - Jeanne DUMOUSSAUD</td>
      <td  align=right x:num>759</td>
      <td 
  x:str="Fils Jean et Jacquette BIARD ">Fils Jean et Jacquette BIARD </td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1740</td>
      <td class=xl4320222 align=right
  x:num="38537">4-juil</td>
      <td class=xl4220222>Caillaud</td>
      <td class=xl4220222>2E239-20</td>
      <td class=xl4220222>Angoul&ecircme</td>
      <td class=xl4220222>Acte obligatoire</td>
      <td class=xl4220222>Au profit du Marquis de Charras</td>
      <td class=xl4220222 align=right x:num>763</td>
      <td class=xl3620222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38362">10-janv</td>
      <td >Marchadier</td>
      <td >2E969-40</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Fran&ccedilois AUGEAUD &agrave Pierre AUBOUIN</td>
      <td  align=right x:num>802</td>
      <td >et Fran&ccedil. MOSQUET sa femme</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38669">13-nov</td>
      <td >Caillaud</td>
      <td >2E239-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean JOLLY et Philippe SURRAUD</td>
      <td  align=right x:num>763</td>
      <td >Fille Louis et Cath. LURAT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38630">5-oct</td>
      <td >Manci&eacute</td>
      <td >2E962-50</td>
      <td >Angoul&ecircme</td>
      <td >Titre</td>
      <td >Jean BRETON et Laurent DAVID</td>
      <td  align=right x:num>791</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1740</td>
      <td  align=right
  x:num="38678">22-nov</td>
      <td >Caillaud</td>
      <td >2E239-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Nicolas CHAUVET - Antoine DURANDEAU</td>
      <td  align=right x:num>763</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38699">13-d&eacutec</td>
      <td >Marchadier</td>
      <td >2E969-60</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >CORLIEU et Jacques DELAURIERE &agrave COLLAIN</td>
      <td  align=right x:num>802</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1741</td>
      <td  align=right
  x:num="38676">20-nov</td>
      <td >Caillaud</td>
      <td >2E240-40</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >Jean ROUHIER - Nic. CHAUVET et Cath R.</td>
      <td  align=right x:num>768</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38717">31-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E241-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre JOUANNET et Catherine CHASSAIN</td>
      <td  align=right x:num>760</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38388">5-f&eacutevr</td>
      <td >Lalande</td>
      <td >2E4963-30</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Jean BONNORONT et Jeanne BREBINAUD</td>
      <td  align=right x:num>759</td>
      <td >Fils Jacq. et Marie ARONDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1742</td>
      <td  align=right
  x:num="38675">19-nov</td>
      <td >Lalande</td>
      <td >2E4963-50</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Gabriel DELESPORT et Cath. DELAURIERE</td>
      <td  align=right x:num>759</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1743</td>
      <td  align=right
  x:num="38358">6-janv</td>
      <td >Caillaud</td>
      <td >2E242-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean DE NEUVILLE et Marie ROUFFIGNAC</td>
      <td  align=right x:num>760</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1743</td>
      <td  align=right
  x:num="38715">29-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E242-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Etienne DURANDEAU et Louise DAUVEAU</td>
      <td  align=right x:num>760</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1744</td>
      <td  align=right
  x:num="38555">22-juil</td>
      <td >Manci&eacute</td>
      <td >2E963-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Michel BOITEAU &agrave Antoinette GIBAUD sa femme</td>
      <td  align=right x:num>801</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1745</td>
      <td  align=right
  x:num="38395">12-f&eacutevr</td>
      <td >Lalande</td>
      <td >2E4963-60</td>
      <td >Ruelle</td>
      <td >Vente</td>
      <td >Andr&eacute IRRONDEAU - Jean BONNAURON</td>
      <td  align=right x:num>759</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38538">5-juil</td>
      <td >Lalande</td>
      <td >2E4963-70</td>
      <td >Ruelle</td>
      <td >Quittance</td>
      <td >Andr&eacute IRRONDEAU - Jean BONNAURON</td>
      <td  align=right x:num>759</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38578">14-ao&ucirct</td>
      <td >Caillaud</td>
      <td >2E246-30</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Jeanne TEXIER  femme de Jean GABORIT</td>
      <td  align=right x:num>770</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38557">24-juil</td>
      <td >Caillaud</td>
      <td >2E246-20</td>
      <td >Angoul&ecircme</td>
      <td >Rente</td>
      <td >J&eacuterôme JOUANNET</td>
      <td  align=right x:num>770</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38673">17-nov</td>
      <td >Caillaud</td>
      <td >2E246-70</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >L&eacuteonard ROUYER et Jeanne AUDIER</td>
      <td  align=right x:num>770</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38707">21-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E246-80</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >MALAGOUX - GRELIER et LIET</td>
      <td  align=right x:num>770</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1746</td>
      <td  align=right
  x:num="38358">6-janv</td>
      <td >Caillaud</td>
      <td >2E245-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois MICHEAU et Marg. ROUHIER</td>
      <td  align=right x:num>760</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1747</td>
      <td  align=right
  x:num="38353">1-janv</td>
      <td >Caillaud</td>
      <td >2E247-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre DARS et Fran&ccediloise AUDIER</td>
      <td  align=right x:num>776</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1748</td>
      <td  align=right
  x:num="37990">4-janv</td>
      <td >Th&eacutenevot</td>
      <td >2E4967-20</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Jean DELAURIERE x Mathurine DELAGE</td>
      <td  align=right x:num>746</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1749</td>
      <td  align=right
  x:num="38686">30-nov</td>
      <td >Caillaud</td>
      <td >2E251-100</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td > TEXIER - Jean GABORIT et Jeanne TEXIER . . .</td>
      <td  align=right x:num>779</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1749</td>
      <td  align=right
  x:num="38337">16-d&eacutec</td>
      <td >Th&eacutenevot</td>
      <td >2E4967-30</td>
      <td >Ruelle</td>
      <td >Inventaire</td>
      <td >Fran&ccediloise DARS, Jacques DELAGE</td>
      <td  align=right x:num>746</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1750</td>
      <td  align=right
  x:num="39397">11-nov</td>
      <td >Caillaud</td>
      <td >2E253-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Guillaume PAPIN et Marie CLOCHARD</td>
      <td  align=right x:num>756</td>
      <td >Fils Jean et Jeanne DAVID</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1750</td>
      <td  align=right
  x:num="38384">1-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E252-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre LABOUREUR et Catherine ROUFFIGNAT</td>
      <td  align=right x:num>781</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38527">24-juin</td>
      <td >Caillaud</td>
      <td >2E254-40</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >GABORIT - MARANDAT</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="39244">11-juin</td>
      <td >Caillaud</td>
      <td >2E254-50</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Marie BARREAU veuve Andr&eacute JAYET</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38446">4-avr</td>
      <td >Caillaud</td>
      <td >2E254-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean MESNARD et Catherine BARREAU</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="38497">25-mai</td>
      <td >Caillaud</td>
      <td >2E254-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean et Jacques DELAURIERE - BORDAGE</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1751</td>
      <td  align=right
  x:num="39137">24-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E254-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >entre COUPEAU</td>
      <td  align=right x:num>783</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1752</td>
      <td  align=right
  x:num="38661">5-nov</td>
      <td >Caillaud</td>
      <td >2E257-10</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Guillaume PAPIN &agrave Claude BOUCHAUD</td>
      <td  align=right x:num>813</td>
      <td >et Mg. PAPIN fe. de Claude B.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1752</td>
      <td  align=right
  x:num="38683">27-nov</td>
      <td >Caillaud</td>
      <td >2E257-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Jean FLEURANCEAU &agrave Jean DECLIDE</td>
      <td  align=right x:num>813</td>
      <td >Mari de Marguerite DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1752</td>
      <td  align=right
  x:num="38377">25-janv</td>
      <td >Caillaud</td>
      <td >2E256-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre MEUSNIER et Fran&ccediloise TULLIER</td>
      <td  align=right x:num>789</td>
      <td >Fille Pierre et Fce DUMERGUE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1752</td>
      <td  align=right
  x:num="38378">26-janv</td>
      <td >Caillaud</td>
      <td >2E256-20</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >L&eacuteonard ROUHIER</td>
      <td  align=right x:num>789</td>
      <td >des MESNARD et CHAUVIN</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38430">19-mars</td>
      <td >Caillaud</td>
      <td >2E260-30</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Antoine LIZEE et Jeanne SURRAUD</td>
      <td  align=right x:num>863</td>
      <td >&agrave Mr. DELAPLACE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38380">28-janv</td>
      <td >Caillaud</td>
      <td >2E260-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Marc ROUHIER et Luce SEIGNEURET</td>
      <td  align=right x:num>863</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38673">17-nov</td>
      <td >Caillaud</td>
      <td >2E261-50</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine DURANDEAU et M. Philippe CHAUVET</td>
      <td  align=right x:num>865</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38554">21-juil</td>
      <td >Caillaud</td>
      <td >2E261-20</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean MESNARD &agrave P. et F. BARREAU fr&egraveres</td>
      <td  align=right x:num>865</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38580">16-ao&ucirct</td>
      <td >Caillaud</td>
      <td >2E261-30</td>
      <td >Angoul&ecircme</td>
      <td >Echange</td>
      <td >Pierre RULLIER et Jean ROUFFIGNAC</td>
      <td  align=right x:num>865</td>
      <td >et pour Jacq.  ROUFF. son p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1754</td>
      <td  align=right
  x:num="38535">2-juil</td>
      <td >Caillaud</td>
      <td >2E261-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jacques MIGNOT et Antoinette DELAURIERE</td>
      <td  align=right x:num>865</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38443">1-avr</td>
      <td >Caillaud</td>
      <td >2E262-20</td>
      <td >Angoul&ecircme</td>
      <td >Vente</td>
      <td >Pierre COUPEAU &agrave Antoine AUDOIN</td>
      <td  align=right x:num>868</td>
      <td >et Fran&ccediloise COUPEAU sa fille</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="39059">8-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E263-50</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >Fran&ccedilois TULLIER &agrave Jean TULLIER son fr&egravere</td>
      <td  align=right x:num>873</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38455">13-avr</td>
      <td >Caillaud</td>
      <td >2E262-40</td>
      <td >Angoul&ecircme</td>
      <td >D&eacuteclaration</td>
      <td >Charles TEXIER et Marguerite ROUHIER</td>
      <td  align=right x:num>868</td>
      <td >&agrave Antoine CIVADIER Cur&eacute</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38426">15-mars</td>
      <td >Caillaud</td>
      <td >2E262-10</td>
      <td >Angoul&ecircme</td>
      <td >Proc&egraves-verbal</td>
      <td >L&eacuteonard ROUYER et Jeanne AUDIER</td>
      <td  align=right x:num>868</td>
      <td >Charles TEXIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38971">11-sept</td>
      <td >Caillaud</td>
      <td >2E263-20</td>
      <td >Angoul&ecircme</td>
      <td >Bail</td>
      <td >Jean GABORIT fils &agrave Jean TULLIER</td>
      <td  align=right x:num>873</td>
      <td >Jean  et Marie GABORIT</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38988">28-sept</td>
      <td >Caillaud</td>
      <td >2E263-30</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Jean AUDIER et Margurtite BIBAUD</td>
      <td  align=right x:num>873</td>
      <td >&agrave F. IMBERT, M.  RABLETTE</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1755</td>
      <td  align=right
  x:num="38996">6-oct</td>
      <td >Caillaud</td>
      <td >2E263-40</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Marg. BRETON Vve AUDOUIN et BAZIN</td>
      <td  align=right x:num>873</td>
      <td >&agrave Jean FAURE, M. BERTHO.</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38737">20-janv</td>
      <td >Caillaud</td>
      <td >2E264-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois CLOCHARD et Margte BERNARD</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38954">25-ao&ucirct</td>
      <td >Caillaud</td>
      <td >2E 265-20</td>
      <td >Angoul&ecircme</td>
      <td >Arrentement</td>
      <td >Rose JEAN &agrave Pierre TULLIER</td>
      <td  align=right x:num>1020</td>
      <td >et Marie ROUYER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38749">01-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E264-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean BORDEREAU et Magdelaine TULLIER</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38841">04-mai</td>
      <td >Caillaud</td>
      <td >2E264-50</td>
      <td >Angoul&ecircme</td>
      <td >Quittance</td>
      <td >Guillaume PAPIN et Marie CLOCHARD</td>
      <td  align=right x:num>1016</td>
      <td >&agrave Fran&ccedilois CLOCHARD p&egravere</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38746">29-janv</td>
      <td >Caillaud</td>
      <td >2E264-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre TULLIER et Marie ROUYER</td>
      <td  align=right x:num>1016</td>
      <td >Fille  L&eacuteonard et M. COUPEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38777">01-mars</td>
      <td >Caillaud</td>
      <td >2E264-40</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean CHAIGNEAU et Catherine AUBOUIN</td>
      <td  align=right x:num>1016</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1756</td>
      <td  align=right
  x:num="38954">25-ao&ucirct</td>
      <td >Caillaud</td>
      <td >2E 265-10</td>
      <td >Angoul&ecircme</td>
      <td >Ferme</td>
      <td >Louise DAUVEAU &agrave Pierre TULLIER</td>
      <td  align=right x:num>1020</td>
      <td >et Marie ROUYER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1757</td>
      <td  align=right
  x:num="38924">26-juil</td>
      <td >Caillaud</td>
      <td >2E266-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean CLOCHARD et Fran&ccedile GRATTEREAU</td>
      <td  align=right x:num>1022</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1757</td>
      <td  align=right
  x:num="39078">27-d&eacutec</td>
      <td >Caillaud</td>
      <td >2E266-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Fran&ccedilois CAILLAUD et Jeanne GAUTHIER</td>
      <td  align=right x:num>1022</td>
      <td >Fils de Jeanne DARS</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1757</td>
      <td  align=right
  x:num="38526">23-juin</td>
      <td >Th&eacutenevot</td>
      <td >2E4969-20</td>
      <td >Ruelle</td>
      <td >Cession</td>
      <td >Jeanne DOR &agrave Pierre BRISSON</td>
      <td  align=right x:num>781</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1757</td>
      <td  align=right
  x:num="38386">3-f&eacutevr</td>
      <td >Th&eacutenevot</td>
      <td >2E4969-10</td>
      <td >Ruelle</td>
      <td >Mariage</td>
      <td >Christophe BONNORON et Anne BROUILLET</td>
      <td  align=right x:num>781</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1757</td>
      <td  align=right
  x:num="39015">25-oct</td>
      <td >Caillaud</td>
      <td >2E266-20</td>
      <td >Angoul&ecircme</td>
      <td >Testament</td>
      <td >Marie Philippe CHAUVET</td>
      <td  align=right x:num>1022</td>
      <td >Fe d'Antoine DURANDEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1759</td>
      <td  align=right
  x:num="38699">13-d&eacutec</td>
      <td >Th&eacutenevot</td>
      <td >2E4969-30</td>
      <td >Ruelle</td>
      <td >Transaction</td>
      <td >Jean et Pierre BONNORON - LAQUAIRE</td>
      <td  align=right x:num>781</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1759</td>
      <td  align=right
  x:num="38569">5-ao&ucirct</td>
      <td >Bernard</td>
      <td >2E147-20</td>
      <td >Angoul&ecircme</td>
      <td >Transaction</td>
      <td >PLANTINET - Jean BONNORON - LAQUAIRE</td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1759</td>
      <td  align=right
  x:num="38569">5-ao&ucirct</td>
      <td >Bernard</td>
      <td >2E147-30</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Mathurin BIGET et Louise PAPIN</td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1759</td>
      <td  align=right
  x:num="38373">21-janv</td>
      <td >Bernard</td>
      <td >2E147-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean PAULET et Marie DELAURIERE</td>
      <td  align=right x:num>788</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1763</td>
      <td  align=right x:num="39822">9-janv</td>
      <td >Juzaud</td>
      <td class=xl4920222>2E4703</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Charles DARS et Jeanne JOURDE</td>
      <td  align=right x:num>1468</td>
      <td >DARS de Rivi&egraveres</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1765</td>
      <td  align=right x:num="39105">23-janv</td>
      <td >Caillaud</td>
      <td >2E281-10</td>
      <td >Angoul&ecircme</td>
      <td >Cession</td>
      <td >GADOFFRE, BARETTE, ROCHIER</td>
      <td  align=right x:num>758</td>
      <td >&agrave Denise ROUHIER</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1765</td>
      <td  align=right
  x:num="38390">7-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E281-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Antoine CAILLAUD et Louis RICHON</td>
      <td  align=right x:num>758</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17 class=xl4220222 align=right x:num>1766</td>
      <td class=xl4320222 align=right
  x:num="38583">19-ao&ucirct</td>
      <td class=xl4220222>Caillaud</td>
      <td class=xl4220222>2E284-10</td>
      <td class=xl4220222>Angoul&ecircme</td>
      <td class=xl4220222>D&eacutemission</td>
      <td class=xl4220222>Pierre GOYAUD cur&eacute de Charras</td>
      <td class=xl4220222 align=right x:num>758</td>
      <td class=xl3620222>&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1767</td>
      <td  align=right
  x:num="38678">22-nov</td>
      <td >Caillaud</td>
      <td >2E286-20</td>
      <td >Angoul&ecircme</td>
      <td >Reconnaissance</td>
      <td >Fran&ccedilois DELAURIERE - Pierre DARS</td>
      <td  align=right x:num>759</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1767</td>
      <td  align=right
  x:num="38650">25-oct</td>
      <td >Caillaud</td>
      <td >2E286-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Pierre TEXIER et Catherine VEILLON</td>
      <td  align=right x:num>759</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1767</td>
      <td  align=right
  x:num="38013">27-janv</td>
      <td >Caillaud</td>
      <td >2E285-10</td>
      <td >Angoul&ecircme</td>
      <td >Partage</td>
      <td >Audier - Pierre Dars</td>
      <td  align=right x:num>752</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1768</td>
      <td  align=right
  x:num="38019">2-f&eacutevr</td>
      <td >Caillaud</td>
      <td >2E287-10</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Etienne Rouyer x Jeanne Cudel&eacute</td>
      <td  align=right x:num>751</td>
      <td >Fils L&eacuteona. et Marg. COUPEAU</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1771</td>
      <td  align=right x:num="40311">13-mai</td>
      <td >Albert</td>
      <td >2E15971-10</td>
      <td >La Rochef.</td>
      <td >Ferme</td>
      <td >Jean DARS &agrave Fran&ccedilois BRUN</td>
      <td  align=right x:num>1490</td>
      <td >mineur</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1772</td>
      <td  align=right
  x:num="40325">27-mai</td>
      <td >Doche</td>
      <td >2E4599-10</td>
      <td >La Rochef.</td>
      <td >Vente</td>
      <td >MATHIEU et autres &agrave Jean MATHIEU</td>
      <td  align=right x:num>1489</td>
      <td >&nbsp;</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1773</td>
      <td  align=right x:num="38552">19-juil</td>
      <td >Caillaud</td>
      <td >2E298-10</td>
      <td >Angoul&ecircme</td>
      <td >Compte</td>
      <td >Nicolas CHAUVET et Marie BOURINET sa fe.</td>
      <td  align=right x:num>816</td>
      <td >L. TUILLIER et Mag. CHAUVET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1774</td>
      <td  align=right
  x:num="38438">27-mars</td>
      <td >Caillaud</td>
      <td >2E298-20</td>
      <td >Angoul&ecircme</td>
      <td >Mariage</td>
      <td >Jean JAYET et Marie LAFAURIE</td>
      <td  align=right x:num>816</td>
      <td >Fils Ant. et Marg. JOUANNET</td>
    </tr>
    <tr height=17> 
      <td height=17  align=right x:num>1774</td>
      <td  align=right x:num="39917">14-avr</td>
      <td >Juzaud</td>
      <td class=xl4920222>2E4710</td>
      <td >La Rochef.</td>
      <td >Mariage</td>
      <td >Jean DARS et Jeanne DAUDET</td>
      <td  align=right x:num>1468</td>
      <td >DARS de Rivi&egraveres</td>
    </tr>    
  </table>
</div>
</div>
</body>
</html>

