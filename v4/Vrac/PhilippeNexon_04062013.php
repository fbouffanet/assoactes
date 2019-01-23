<?
require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print('<title>Actes en vrac AGC: Philippe Nexon</title>');
print("</head>");

print("<body>");
//print("Vous etes authentifi&eacute; :-)<br>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$connexionBD->ferme();
?>
<h1>Actes notari&eacute;s de <a href="mailto:pnexon@free.fr">M Philippe NEXON</a></h1>
<h1>Contrats de Mariages.</h1>
<h4><big><b><u><a name="MÝDEREIX et MENUT">MÝDEREIX et MENUT</a></u></b></big></h4>
<h4><ul type="disc">

<li>le 21/12/1757 à Rougnac , MÝDEREIX et MENUT , 2E4796</li>

<li>Jean et jacques NEXON , fils de françois (charpentier) et marie MESTAYER , demeurants à la faye paroisse de Gardes avec Marie et catherine DAYRE , filles de jean (maréchal) et marie PERROT , demeurants au village de cussac paroisse de Rougnac .</li>
<li>le 15/01/1761 à Rougnac , MÝDEREIX et DUMONT , 2E4797</li>
<li>Estienne NEXON , fils de françois et marie MESTAYER ,demeurants à la faye avec marguerite FAURE , fille de jacques (dcd) et gabrielle GUILHON , demeurants au village de cussac .</li>
<li>le 17/01/1790 à Rougnac , MÝDEREIX à lavalette , 2E19524</li>
<li>Jean NEXON , fils de étienne (dcd) et marguerite FAURE , demeurant à cussac avec marguerite FORESTIER , fille de léonard (dcd) et catherine BAZELY (dcd) , demeurants à lémerie paroisse de Rougnac ( avec son curateur guillaume FORESTIER ) .</li>
<li>le 05/03/1696 , MÝ DUMONTET à Dignac 2E2741</li>
<li>entre françois VALLADON et Marguerite NEXON , fille jean (dcd) et anne DESBOUCHAUD présents : jean et françois ses fréres , léonarde DUPON belle-soeur</li>
<li>le 03/05/1696 , MÝDEREIX à gardes , 2E2963</li>
<li>entre henri VIDAUD et toinette NEXON , fille de Pierre et marie CHAIGNEAU</li>

<li>le 02/02/1699 , MÝ DEREIX à gardes , 2E2964</li>
<li>entre jean  NEXON (voiturier) , fils de Pierre (dcd) et françoise ROUDY(?) et antoinette DUMAS</li>
<li>le 04/04/1699 , MÝ DEREIX à gardes , 2E2964</li>
<li>entre etienne BARDY et françoise NEXON , fille de pierre et marie CHAIGNEAUX .</li>
<li>le 15/011777 , MÝ DEREIX  , 2E?</li>
<li>entre jean JULIEN , fils de Pierre et jeanne MENUT et marie NEXON fille de jean et antoinette ROY</li>
<li>le 17/05/1779 , MÝ DEREIX à Rougnac 2E4804</li>
<li>entre françois NEXON , fils de Léonard et marie ARTAUD (dcd) et antoinette DELAGE , fille de jean et catherine DAVID</li>
<li>le 08/02/1781 , MÝ LANAUVE à Lavalette 2E19588</li>

<li>entre jean NEXON , fils de jean (dcd) et marie DAYRE et françoise BOUYER , fille de antoine et jeanne LAVAUD</li>
<li>le 06/07/1792 , MÝ DEREIX à Lavalette 2E19524</li>
<li>entre françois NEXON , fils de jacques et catherine DAYRES et marie CAMPOT , fille de jean et jeanne CHARLES .</li>
<h1>Testament</h1>
<li>le 30/01/1694 , MÝ DEREIX à gardes , 2E2963</li>
<li>de jean NEXON à jeanne RUDEIX ?</li>
<h1>Partage</h1>
<li>1703 , MÝ DEREIX à gardes , 2E2965</li>
<li>partage entre les NEXON/CHAIGNEAU/BARDY/VIDAUD</li>



<h4><big><b><u><a name="Liste des Notaires Sud Charente">
<p class="Style1">Liste des Notaires canton de Villebois</p>
</a></u></b></big></h4>

<table cellspacing="0" cellpadding="0">
  <col width="175">
  <col width="154">
  <col width="207">
  <col width="86">
  <tr height="17">
    <td height="17" width="175">BLANZAGUET</td>
    <td width="154">M&deg; NEXON</td>
    <td width="207"><div align="left">1602;1p</div></td>
    <td width="86"></td>
  </tr>
  <tr height="17">
    <td height="17">CHARMANT</td>
    <td>M&deg; DUBOIS</td>
    <td><div align="left">1663 - 1686</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">CHARMANT</td>
    <td>M&deg; DUBOIS</td>
    <td><div align="left">1716 - 1717</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; ARTAUD</td>
    <td><div align="left"></div></td>
    <td>r&eacute;p1749-1765</td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; CHARLES</td>
    <td><div align="left">1727 - 1774</div></td>
    <td>r&eacute;p1727-1774</td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; DELAVERGNE</td>
    <td><div align="left">1728 - 1749</div></td>
    <td>r&eacute;p1729-1740</td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; DEVENTHENAT</td>
    <td><div align="left">1642 - 1686</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; DUCOUX</td>
    <td><div align="left">1701 - 1737</div></td>
    <td>r&eacute;p1701-1737</td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; DUMONTET</td>
    <td><div align="left">1662 - 1727</div></td>
    <td>r&eacute;p1661-1727</td>
  </tr>
  <tr height="17">
    <td height="17">DIGNAC</td>
    <td>M&deg; DUMONTET(J)</td>
    <td><div align="left">1727 - 1750</div></td>
    <td>r&eacute;p1727-1750</td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; CHAUVIGNON</td>
    <td><div align="left">1760 - 1788</div></td>
    <td>r&eacute;p1760-1785</td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; CHOME</td>
    <td><div align="left">1651 - 1654</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; GODICHEAU</td>
    <td><div align="left">1683 - 1741</div></td>
    <td>r&eacute;p1683-1741</td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; JOLAIN</td>
    <td><div align="left">1741 - 1772</div></td>
    <td>r&eacute;p1741-1772</td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; JOLAIN</td>
    <td><div align="left">1773 - 1779</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; PETIOT</td>
    <td><div align="left">1583 - 1619</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; PETIOT(jeune)</td>
    <td><div align="left">1620 - 1637</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; PETIOT</td>
    <td><div align="left">1640 - 1642</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">FOUQUEBRUNE</td>
    <td>M&deg; PIERRE</td>
    <td><div align="left">1656 - 1668</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">GARDES</td>
    <td>M&deg; CONSTANTIN</td>
    <td><div align="left">1772 - 1779</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">GARDES</td>
    <td>M&deg; DAVID</td>
    <td><div align="left">1703 - 1748</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">GARDES</td>
    <td>M&deg; DEREIX</td>
    <td><div align="left">1679 - 1735</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">MAGNAC-LA-VALETTE</td>
    <td>M&deg; DEBECT</td>
    <td><div align="left">1683 - 1737</div></td>
    <td>r&eacute;p1683-1737</td>
  </tr>
  <tr height="17">
    <td height="17">MAGNAC-LA-VALETTE</td>
    <td>M&deg; DEVIGE</td>
    <td><div align="left">1717 - 1744</div></td>
    <td>r&eacute;p1717-1744</td>
  </tr>
  <tr height="17">
    <td height="17">MAGNAC-LA-VALETTE</td>
    <td>M&deg; DELOMBRE</td>
    <td><div align="left">1708 - 1713</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">MAGNAC-LA-VALETTE</td>
    <td>M&deg; DUBOIS</td>
    <td><div align="left">1714 - 1765</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">MARSAC</td>
    <td>M&deg; DUBOIS</td>
    <td><div align="left">1687 - 1717</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">MARSAC</td>
    <td>M&deg; ROUHIER</td>
    <td><div align="left">1765 - 1784</div></td>
    <td>r&eacute;p1766-1784</td>
  </tr>
  <tr height="17">
    <td height="17">RONSENAC</td>
    <td>M&deg; DELAMAREVILLE</td>
    <td><div align="left">1662 - 1712</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">RONSENAC</td>
    <td>M&deg; DUMAYNE</td>
    <td><div align="left">1631 - 1716</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">RONSENAC</td>
    <td>M&deg; DUMAYNE(A)</td>
    <td><div align="left">1717 - 1730</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">RONSENAC</td>
    <td>M&deg; DUMAYNE</td>
    <td><div align="left">1731 - 1748</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">RONSENAC</td>
    <td>M&deg; GELLIBERT(P)</td>
    <td><div align="left">1735 - 1766 / 1771 - 1784</div></td>
    <td>r&eacute;p1735-1784</td>
  </tr>
  <tr height="17">
    <td height="17">RONSENAC</td>
    <td>M&deg; NEBOUT</td>
    <td><div align="left">1652 - 1661</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">ROUGNAC</td>
    <td>M&deg; DEREIX</td>
    <td><div align="left">1708 - 1718</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">ROUGNAC</td>
    <td>M&deg; DEREIX(J)</td>
    <td><div align="left">1738 - 1765 / 1769 - 1776</div></td>
    <td>r&eacute;p1738-1776</td>
  </tr>
  <tr height="17">
    <td height="17">ROUGNAC</td>
    <td>M&deg; DEREIX(P)</td>
    <td><div align="left">1776 - 1785 / 1787 - 1790</div></td>
    <td>r&eacute;p1765-1790</td>
  </tr>
  <tr height="17">
    <td height="17">ROUGNAC</td>
    <td>M&deg; JACQUES(J)</td>
    <td><div align="left">1700 - 1702</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">ROUGNAC</td>
    <td>M&deg; LACATON</td>
    <td><div align="left">1624 - 1683</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">ROUGNAC</td>
    <td>M&deg; MENUT</td>
    <td><div align="left">1656 - 1696</div></td>
    <td>r&eacute;p1656-1696</td>
  </tr>
  <tr height="17">
    <td height="17">TORSAC</td>
    <td>M&deg; CHAIGNEAU</td>
    <td><div align="left">1618 - 1651</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">TORSAC</td>
    <td>M&deg; CHAIGNEAU</td>
    <td><div align="left">1652 - 1686</div></td>
    <td>r&eacute;p1652-1686</td>
  </tr>
  <tr height="17">
    <td height="17">TORSAC</td>
    <td>M&deg; DECESCAUD</td>
    <td align="right"><div align="left">1692</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">TORSAC</td>
    <td>M&deg; GARNAUD</td>
    <td><div align="left">1658 - 1664</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">TORSAC</td>
    <td>M&deg; LEDEUIL</td>
    <td><div align="left">1719 - 1738</div></td>
    <td>r&eacute;p1719-1731</td>
  </tr>
  <tr height="17">
    <td height="17">TORSAC</td>
    <td>M&deg; RENON</td>
    <td><div align="left">1661 - 1703</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; BOUCHERON</td>
    <td align="right"><div align="left">1673</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; BOURRUT</td>
    <td><div align="left">1724 - 1756</div></td>
    <td>r&eacute;p1724-1756</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; CHAIGNEAU(J)</td>
    <td align="right"><div align="left">1705</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; CONSTANTIN</td>
    <td><div align="left">1740 - 1749</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DELONLAIGUE</td>
    <td><div align="left">1693 - 1717</div></td>
    <td>r&eacute;p1693-1717</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DEROULLEDE</td>
    <td><div align="left">1722 - 1735</div></td>
    <td>r&eacute;p1722-1735</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DUBOYS(H)</td>
    <td align="right"><div align="left">1672</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DUCOUX</td>
    <td><div align="left">1636 - 1682</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DUTAIX</td>
    <td><div align="left">1651 - 1668</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DUTAIX(F)</td>
    <td><div align="left">1669 - 1688</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; DUTAIX</td>
    <td><div align="left">1700 - 1724</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; ESTANCHAUD(L)</td>
    <td><div align="left">1663 - 1671</div></td>
    <td>r&eacute;p1663-1671</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; EXANDON</td>
    <td><div align="left">1637 - 1648</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; FAURE</td>
    <td align="right"><div align="left">1652</div></td>
    <td>12/01/1655</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; GIBOIN(J)</td>
    <td><div align="left">1649 - 1677</div></td>
    <td>r&eacute;p1649-1676</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; GIBOIN(A)</td>
    <td><div align="left">1679 - 1700</div></td>
    <td>r&eacute;p1697-1700</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; GIBOIN(P)</td>
    <td align="right"><div align="left">1702</div></td>
    <td>31/12/1702</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; GIBOIN(A)</td>
    <td align="right"><div align="left">1742</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; VALLIER</td>
    <td align="right"><div align="left">1671</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; VIGNAUD</td>
    <td><div align="left">1734 - 1774</div></td>
    <td>r&eacute;p1734-1774</td>
  </tr>
  <tr height="17">
    <td height="17">VALETTE (LA)</td>
    <td>M&deg; VIGNAUD</td>
    <td align="right"><div align="left">1776</div></td>
    <td></td>
  </tr>
  <tr height="17">
    <td height="17">VAUX-LA-VALETTE</td>
    <td>M&deg; BOURRUT-DESRUES</td>
    <td><div align="left">1756 - 1777</div></td>
    <td></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>

