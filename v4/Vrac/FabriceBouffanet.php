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
print('<title>Actes en vrac AGC: Fabrice Bouffanet</title>');
print("</head>");
print("<body>");
print('<div class="container">');
//print("Vous etes authentifi&eacute; :-)<br>");
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");
$connexionBD->ferme();
?><h1>Actes notari&eacute;s de 
  <a href="mailto:fbouffanet@yahoo.fr">Fabrice Bouffanet</a></h1><h4>Fabrice Bouffanet a fait un inventaire des photos en sa possession d'actes notari&eacute;s du XVII<sup>&egrave;me</sup> si&egrave;cle ou du d&eacute;but du XVIII<sup>&egrave;me</sup> en voici la liste:
  <dir><li>Coulgens: 
    <a href="#gounin">Gounin</a></li>
    <li>Mansle: <ul>
    <li><a href="Notaire_BAUDOIN.pdf">Actes divers du notaire BAUDOIN (1700-1745)</a> </li>
    <li><a href="Notaire_BIRE.pdf">Transaction, proc&egrave;s-verbaux, inventaires et partages du notaire BIRE (1692-1737)</a></li>
    <li><a href="Notaire_Isaac_COUSTE.pdf">Transaction, proc&egrave;s-verbaux, inventaires et partages du notaire Isaac COUSTE (1635-1671)</a></li>
    <li><a href="Notaire_P_COUSTE_2E3492.pdf">Tous les actes sauf CM et testaments du notaire COUSTE P  (1628-1634)</a></li>
    <li><a href="Notaire_P_COUSTE_2E3498.pdf">Tous les actes sauf CM et testaments du notaire COUSTE P  (1682-1687)</a></li>
    </ul>
    </li>
<li>Montignac-Charente: 
    <a href="#amiaud">Amiaud </a>, 
    <a href="#amiaud_2E4095_2E4096">Amiaud J (1701-1739) </a>,
    <a href="#bauny">Bauny</a>,
    <a href="#bergeron">Bergeron</a>,
    <a href="#bouniceau">Bouniceau</a>,
    <a href="#boylevin">Boylevin (1696-1726)</a>,
    <a href="#delaunay">Delaunay (1697-1744) </a> 
    <a href="#fumeau">Fumeau</a>,
    <a href="#gorrain">Gorrain</a>,
    <a href="#malletf">Mallet F (1704-1718) </a>,    
    <a href="#malletj">Mallet J</a>,
    <a href="#Pappot">Pappot</a>,
    <a href="#thinon">Thinon</a></li><li>Xambes 
    <a href="#mallet_xambes">Mallet</a>
    <a href="#petits_notaires">Petits notaires du canton de St-Amant de Boixe (tous les actes de ceux-ci ont �t� inventori�s)</a></li>
    <br>Les personnes int&eacute;ress&eacute;es peuvent demander les photos des actes dans la limite de deux photos par mois et par demandeur. 
    <br>Si un acte a de l'int&eacute;r&ecirc;t pour vous, il peut en avoir pour d'autres personnes : Lui communiquer une transcription serait loin d'&ecirc;tre superflu. Merci 
    <span class="moz-smiley-s1">
      <span> :-) 
      </span>
    </span>
    <br>
    <h4 align="left">Le site de Fabrice BOUFFANET : 
      <a href="http://fabrice.bouffanet.free.fr/" target="_blank">Actes notari�s du Sud Ruffecois</a></h4>
    <br>
  </dir><h1>Notaires  de Montignac-Charente</h1><h4><big><b><u>
          <a name="thinon">Thinon</a></u></b></big></h4><h4>
    <ul type=disc><li>Accord le 11 juin 1661 entre Jean Dessalis, marchand, de Montignac, au nom de Marguerite Lamy, sa belle-m�re, veuve de Josu� Thinon, juge s�n�chal d'Alloue, Alain Thinon, son beau-fr�re, Denise Thinon, sa femme et Pierre et Marguerite Thinon Thinon, enfants de Jean Thinon, sieur de Chantecaille, de Vouharte, tous h�ritiers de  d�funts Pierre Thinon, sieur de Chantemerle et Denise Piat, leurs a�eux </li><li>Accord le 6 juillet 1661 entre Michel Gratreau, fils de Simon, marchand, et Simon Nadaud, curateur de Michel et Catherine Chevrier, Martial Bineau, mari de Jeanne Chevrier, tous les dits Chevrier, enfants de d�funts Etienne Chevrier et Jeanne Gratreau, tous de St-Amant de Boixe (2 exemplaires de 4 pages chacun)</li><li>Accord le 22 janvier 1663 entre Marie Pappot, veuve de Louis Planson, cordonnier, Marguerite Pappot, sa soeur, de Montignac et Jean Charruaud, fils de Gilles, de Montignac</li><li>Accord le 11 octobre 1664 entre Mery Mallet et Marie Mangon, femme de Pierre Rouhet, Jean Rouhet, son fils, tous de St-Amant de Boixe suite aux blessures inflig�es au dit Mallet par les dits Mangon et Rouhet</li><li>Accord le 16 d�cembre 1664 entre Michel Gratreau, marchand et Pierre Trutaud, laboureur � bras, tous de St-Amant de Boixe</li><li>Arentement le 14 septembre 1661 par Michel Quentin, laboureur de Vervant � Louis Bouquinet le Jeune de St-Amant de Boixe</li><li>Arentement le 6 janvier 1662 par Antoine Robert, marchand, veuf de Jeanne Boutaud, veuve de Jean Chappron marchand � Pierre Chastenet, mari de Louise Chappron, fille des dits Chapron et Boutaud, tous de Montignac </li><li>Arentement le 9 janvier 1662 par Antoine Robert, marchand, de Montignac � Jean Clement dit Redon, de St-Amant de Boixe</li><li>Arentement le 8 juin 1662 par Jacques Guy, sieur de la Rouze, de Montignac � Jacques Viaud dit Levemerie?, laboureur � bras, de St-Amant de Boixe </li><li>Arentement le 9  d�cembre 1663 par Martial Plantivet, laboureur � bras de St-Amant de Boixe � Jean De La Maschi�re, laboureur � bras, de Montignac</li><li>Arentement le 16 mars 1664 par Pierre Chastenet, marchand � Marie Matthe, veuve de Jean Thinon, fille de Michel, tous de Montignac</li><li>Arentement le 9 novembre 1665 par Jacques Gaschet, marchand de St-Amant de Boixe � Jean Charruaud, marchand, de St-Amant de Boixe</li><li>D�claration le 11 f�vrier 1664 par les habitants de St-Amant de Boixe afin que Gilles Charruaud et Louis Chevroux soient impos�s sur les tailles</li><li>Donation le 8 octobre 1668 par Jean Auraing, tailleur d'habits, fils de feu Samuel Auraing � Elisabeth Guy, sa m�re, veuve du dit Samuel</li><li>Echange le 4  f�vrier 1647 entre Pierre Thinon, fils de feu Pierre et Manse Plantivet, de Montignac � Jean Cl�ment, laboureur � bras, Anne Nadault, sa femme, de St-Amant de Boixe</li><li>Echange le 5 novembre 1662 entre Jacques Gaschet, sieur de la Plante, fils de feu Jean, de St-Amant de Boixe � Louis Cl�ment, laboureur � bras, de St-Amant de Boixe</li><li>Echange le 31 ao�t 1664 entre Pierre Thinon, sieur des Voutes, de Vervant et Jean Paziot, Catherine Martinier, sa femme, aussi de Vervant</li><li>Echange le 26 d�cembre 1665 entre Jacques De Cazemajour, sieur de Maine Bertaud, de St-Groux et </li><li>Ferme le 18 juin 1662 par Marie Pappot, veuve de Fran�ois Maslo, Mathurine Delarorche, praticien, son gendre, de Montignac � Jean Dulong l'a�n�, laboureur � boeufs, de Montignac</li><li>Ferme le 21 mars 1664 par Pierre Chastenet, marchand � Pierre Pinaud, vitrier, tous de Montignac</li><li>Ferme le 17 avril 1664 par Pierre Tourre, sieur de Lavequot?, receveur des aides, de Mazerolles � Michel Charruaud de Montignac</li><li>Ferme le 3 mai 1665 par Pierre Chastenet, marchand � Jean Vodichon, praticien, tous de Montignac</li><li>Ferme le 6 f�vrier 1668 du vin au d�tail par Isaac Pingaud, marchand, h�telier et cabaretier, de Vadalle � Guillaume Raimond et Bertrand Nougier, laboureurs, h�teliers et cabaretiers d'Aussac </li><li>Nomination le 22 janvier 1662 des collecteurs de taille de Vouharte</li><li>Nomination le 20 janvier 1665 des collecteurs de taille de Xambes</li><li>Nomination le 25 janvier 1665 des collecteurs de taille de St-Amant de Boixe</li><li>Nomination le 1er f�vrier 1665 des collecteurs de taille de Vervant</li><li>Partage le 1er novembre 1666 des biens de d�funts Daniel Fougerat et Antoinette Buherne entre leurs fils Simon Fogerat, de St-Amant de Boixe , Jean Fougerat, de Montignac et Jean Viaud, laboureur � bras et Catherine Fougerat sa femme, de St-Amant de Boixe (6 pages : premi�re tr�s floue)</li><li>Plainte le 27 septembre 1663 par Fran�ois et Michel Tiffon, fr�res, Fran�ois Charron, Jeanne Tiffon, sa femme contre Jean Tiffon dit Demailloux, veuf de Marie Marie leur p�re et m�re</li><li>Proc�s verbal le 20 ao�t 1661 pour Pierre Birot sieur de la Brouhe, de Montignac des biens de feu Daniel Birot, sieur de la Grange (seconde page tr�s floue/4)</li><li>Proc�s verbal le 17 avril 1663 pour Huriel Mathieu, laboureur � bras, de Xambes des biens arent�s par Guillaume Jaboin, pr�tre de Chebrac</li> <li>Proc�s verbal le 29 juillet 1664 pour Pierre Mignot, lieutenant et concierge des prisons de Montignac, de Robert Guerin, farinier, injustement emprisonn� d'apr�s ses dires</li><li>Quittance le 16 avril 1663 par Jean Millon l'a�n�, dit la Chaume, de Marsac � Jean Cl�ment dit Redon, de St-Amant de Boixe</li><li>Retrait le 9 juillet 1663 par Jean Cl�ment dit Redon de St-Amant de Boixe au proffit d'Antoine Lacquer, marchand, mari de Elisabeth Potteau</li><li>Retrocession le 30 ao�t 1649 par Jean Pichon, marchand � Antoine Martinier, Jean Paziot, Catherine Martinier, sa femme, s�ur germaine du pr�c�dent</li><li>Vente le 1er novembre 1662 par Jean Dulong le Jeune, laboureur � boeufs, de Montignac � Pierre Coupprie, chirurgien, de Montignac</li><li>Vente le 8 septembre 1663 par Romain Goumard, laboureur � bras, de Vouharte � Jean Dulong, laboureur � boeufs, de Montignac</li><li>Vente le 11  avril 1664 par Jean Mousset dit Lagrange, laboureur, Jeanne Pappounet, sa femme, de Chebrac � Fran�ois De La Maschi�re, laboureur, de St-Amant de Boixe</li><li>Vente le 22 juillet 1664 par L�onard Giraud, laboureur � bras, de St-Amant de Boixe � Fran�ois De La Maschi�re</li><li>Vente le 6 ao�t 1664 par Jean Viaud, laboureur � bras, Catherine Fougerat, sa femme de St-Amant de Boixe � Jean Guy, procureur, de Montignac</li><li>Vente le 5 janvier 1665 par Michel Charruaud, laboureur, de Montignac, Denis Gaschet sa femme � Isaac Fruchet, tailleur d'habits, Marie Guynard, sa femme, de Montignac? </li><li>Vente le 5 mars 1668 par Jean Morand dit Cagnon, le jeune, laboureur � bras, Madeleine Boitteau sa femme, � Marie Mignot, veuve de Martin Heriard, tous de St-Amant de Boixe</li>
    </ul></h4><h4><big><b><u>
          <a name="malletj">Mallet J</a></u></b></big></h4><h4>
    <ul type=disc><li>Accord le 12 f�vrier 1719 entre Louis Thorin, laboureur � bras, veuf de Marguerite Aigron, de Villognon et  Nicolas Journaud, laboureur, fils de d�funts Louis Journaud et Jeanne Micheau, natif de Villognon, du bourg de Juill�?</li><li>Inventaire le 1er mars 1720 pour Pierre Guillen, marchand, d'Aussac, Marguerite Crollant, sa femme, veuve de Jean De La Bracherie des biens de celui-ci</li><li>Inventaire le 30 mai 1719 des biens de Philippe? Lerme, pour Jeanne Pesraud, sa veuve, de Cellettes</li><li>Partage le 19 mai 1716 des biens de feu Louis Bouyer, �poux en secondes noces de Simone Delalut, entre Pierre Bouyer, laboureur � bras, de Xambes, Fran�oise Amiaud, sa femme, Jean Foucaud dit Mass�, Catherine Bouyer, sa femme, de Xambes, leurs enfants et Pierre, Fran�ois, Jacques, Louis et Hilaire Bouyer leurs fr�res ut�rins (4 premi�res pages uniquement)</li><li>Partage le 5 f�vrier 1720 entre Marguerite Ebrard, veuve de Jacques Guillin, marchand, d'Aussac et Marie Guillin, veuve, soeur du pr�c�dent, de Vadalle</li><li>Proc�s verbal le 12 janvier 1719 pour Fran�ois Louis Gautier, chirurgien, de Vervant, mari de Marie Audoin, de l'�tat d'une pi�ce de terre</li><li>Proc�s verbal le 19 juin 1716 pour Olivier Gratereau, sieur du dit nom, et Pierre Gratereau, sieur de Villesduin?, de Vervant d'un b�tisse construite par Vincent Paziot, aussi de Vervant</li><li>Reconnaissance le 13 juillet 1720 par Pierre Guillen, laboureur, Catherine Salaumon, sa femme � Raymond Gounin, Madeleine Vauvieille, sa femme, tous d'Aussac</li><li>Vente le 5 ao�t 1717 par Marie Boislevin � Pierre Mangon, charpentier, Simon Dusays, Louis Bouffanet, fils de feu Jacques, laboureurs,tous de St-Amant de Boixe (8 pages)</li><li>Vente le 30 septembre 1717 par Jean Penot l'a�n�, Catherine Vergnaud, sa femme, � Elisabeth Bruneau, veuve, Henri Peraud, son fils, tous de Cellettes</li><li>Vente le 22 avril 1720 par Cl�ment Gratreau, praticien de Coulonges � Pierre Bonnet, marchand, de Villognon</li><li>Vente le 10 juillet 1720 par Pierre Guillen, laboureur, Catherine Salaumon, sa femme � Raymond Gounin, laboureur, Madeleine Vauvieille, sa femme, tous d'Aussac</li>
    </ul></h4><h4><big><b><u>
          <a name="bergeron">Bergeron</a></u></b></big></h4><h4>
    <ul type=disc><li>Accord le 12 f�vrier 1719 entre Louis Thorin, laboureur � bras, veuf de Marguerite Aigron, de Villognon et  Nicolas Journaud, laboureur, fils de d�funts Louis Journaud et Jeanne Micheau, natif de Villognon, du bourg de Juill�?</li><li>Inventaire le 1er mars 1720 pour Pierre Guillen, marchand, d'Aussac, Marguerite Crollant, sa femme, veuve de Jean De La Bracherie des biens de celui-ci</li><li>Inventaire le 30 mai 1719 des biens de Philippe? Lerme, pour Jeanne Pesraud, sa veuve, de Cellettes</li><li>Partage le 19 mai 1716 des biens de feu Louis Bouyer, �poux en secondes noces de Simone Delalut, entre Pierre Bouyer, laboureur � bras, de Xambes, Fran�oise Amiaud, sa femme, Jean Foucaud dit Mass�, Catherine Bouyer, sa femme, de Xambes, leurs enfants et Pierre, Fran�ois, Jacques, Louis et Hilaire Bouyer leurs fr�res ut�rins (4 premi�res pages uniquement)</li><li>Partage le 5 f�vrier 1720 entre Marguerite Ebrard, veuve de Jacques Guillin, marchand, d'Aussac et Marie Guillin, veuve, soeur du pr�c�dent, de Vadalle</li><li>Proc�s verbal le 12 janvier 1719 pour Fran�ois Louis Gautier, chirurgien, de Vervant, mari de Marie Audoin, de l'�tat d'une pi�ce de terre</li><li>Proc�s verbal le 19 juin 1716 pour Olivier Gratereau, sieur du dit nom, et Pierre Gratereau, sieur de Villesduin?, de Vervant d'un b�tisse construite par Vincent Paziot, aussi de Vervant</li><li>Reconnaissance le 13 juillet 1720 par Pierre Guillen, laboureur, Catherine Salaumon, sa femme � Raymond Gounin, Madeleine Vauvieille, sa femme, tous d'Aussac</li><li>Vente le 5 ao�t 1717 par Marie Boislevin � Pierre Mangon, charpentier, Simon Dusays, Louis Bouffanet, fils de feu Jacques, laboureurs,tous de St-Amant de Boixe (8 pages)</li><li>Vente le 30 septembre 1717 par Jean Penot l'a�n�, Catherine Vergnaud, sa femme, � Elisabeth Bruneau, veuve, Henri Peraud, son fils, tous de Cellettes</li><li>Vente le 22 avril 1720 par Cl�ment Gratreau, praticien de Coulonges � Pierre Bonnet, marchand, de Villognon</li><li>Vente le 10 juillet 1720 par Pierre Guillen, laboureur, Catherine Salaumon, sa femme � Raymond Gounin, laboureur, Madeleine Vauvieille, sa femme, tous d'Aussac</li>
    </ul></h4><h4><big><b><u>
          <a name="amiaud">Amiaud</a></u></b></big></h4><h4>
    <ul type=disc><li>Accord entre Jean Morand, fils de Denis et Jean Morand, son fils Denis, tous de St-Amant de Boixe le 8 avril 1681</li><li>Partage des biens de d�funts Pierre Maudet et Marie Birault pour Pierre Hubert sergent royal de Genac et Charles Gratereau, sieur des ouches, curateurs des enfants des d�funts, de Xambes le 23 juillet 1688 </li><li>Inventaire des biens de Simon Lurat de Chebrac pour sa veuve Jeanne Sabourdin le 4 septembre 1694</li><li>Vente par Christophe Breuil, laboureur � bras de Vars et Fran�oise Noblet sa femme � Vincent Nougier, laboureur � b�ufs de Tourriers le 2 mars 1695</li><li>Transaction entre Nicolas Lelong, cur� de Tourriers et Marc Gourdin, chanoine de l'�glise St-Pierre d'Angoul�me, fils de Jean Gourdin, sieur de la Faye, de Tourriers le 10 avril 1699</li><li>Proc�s verbal de l'�tat de deux pi�ces de pr� pour Vincent Nougier, laboureur � b�ufs de Villejoubert et Jean Rouhet dit La Garde de St-Amant de Boixe le 22 juin 1701</li><li>Ferme par Pierre Guy, sieur de Lugerat, de Montignac � Guillaume Esbrard, marchand de Nanclars le 13 ao�t 1702 (Floue)</li><li>Accord entre Fran�ois Nadaud, laboureur, fils de d�funt Fran�ois, mar�chal et Antoine Esberard, laboureur � bras, veuf de Suzanne Nadaud, tous de St-Amant de Boixe le 6 janvier 1704</li>
    </ul></h4><h4><big><b><u>
          <a name="amiaud">Amiaud (mais premi�re page uniquement)</a></u></b></big></h4><h4>
    <ul type=disc><li>Testament de Pierre Bauny, notaire de Montignac, 58 ans le 2 ao�t 1685</li><li>Arrentement par Jean Baradeau charpentier � Denis Morand, laboureur � bras, tous deux de St-Amant de Boixe le 25 janvier 1686</li>
    </ul></h4>
    <h4><big><b><u>
          <a name="amiaud_2E4095_2E4096">Amiaud 1701-1739</a></u></b></big></h4><h4>
    <p>2E4095:</p>
<ul>
  <li> Accord le 20 avril 1701 entre Andr&eacute; RICHARD, mari de Marguerite 
    DURIT et Claude RICHARD, fr&egrave;res, marchands du village de Ranversin, 
    en la paroisse d'Oz en Dauphin&eacute;, enfants de d&eacute;funt Andr&eacute; 
    RICHARD et dame Feriolle PERRAIN</li>
  <li> D&eacute;claration le 26 juillet 1703 par H&eacute;lie SAUTEREAU, sieur 
    de Lesriget, mari de Marie DUBOIS, demeurant &agrave; La Rochefoucauld, Pierre 
    BRIAND, sieur des Fontenelles, mari de Marie DUBOIS, de Marcillac, Fran&ccedil;ois 
    DUBOIS, sieur du Breuil, et Catherine DUBOIS, tous deux fils et fille d'H&eacute;lie 
    Dubois, sieur de la Bernarde et Jacquette HUET et proc&eacute;dant sous l'autorit&eacute; 
    de Jean AMIAUD, leur curateur aux causes &agrave; Pierre LEBESGUE, procureur 
    de la juridiction de Vouharte</li>
  <li> D&eacute;lib&eacute;ration le 27 d&eacute;cembre 1703 entre Jean et Pierre 
    CHOLLET, laboureurs, demeurant au village de la Croix, paroisse de St-Amant 
    de Boixe et les habitants de cette paroisse sur la diminution des tailles 
    des dits CHOLLET suite &agrave; leur translation de domicile</li>
  <li> Inventaire le 26 septembre 1703 pour Pierre GASCHET, laboureur &agrave; 
    bras, de St-Amant de Boixe, des biens de sa d&eacute;funte &eacute;pouse, 
    Madeleine VACHIER, en vue de son mariage avec Marie THOUREAU </li>
  <li> Accord le 5 janvier 1704 entre Georges GODINEAU, laboureur &agrave; bras 
    et Jean MARTAIN, laboureur &agrave; bras, agissant au nom de Pierre MARTAIN, 
    son fr&egrave;re, demeurant au village de Grobot, paroisse de St-Genis suite 
    &agrave; une blessure inflig&eacute;e &agrave; Fran&thorn;ois GODINEAU, fils 
    du dit Georges, &acirc;g&eacute; de huit ans : Pierre MARTAIN aurait cass&eacute; 
    son bras</li>
  <li> Renonciation de communaut&eacute; le 15 janvier 1704 par Jean PINAUD, pauvre 
    laboureur &agrave; celle d'Antoine PINAUD, laboureur &agrave; bras, son fils, 
    du village de Courradeau, de St-Amant de Boixe </li>
  <li> Accord le 16 janvier 1704 entre Emmanuel BARRAUD, procureur au si&egrave;ge 
    pr&eacute;sidial d'Angoumois, mari de Marie GUY, d'Angoul&ecirc;me, Pierre 
    GUY, sieur de Bugerot, Anne GUY, sa femme, de Montignac-Charente et Pierre 
    SEGUIN, gallochier, du village de Menadaud, de Chebrac</li>
  <li> Accord le 27 janvier 1704 entre Joseph PREIGNAUD, charpentier, du lieu 
    de St-Etienne les Montignac et Claude SIMEON, natif du village de Cassian? 
    dans le dioc&egrave;se de Bordeaux, r&eacute;sidant aussi &agrave; St-Etienne 
    : le dit PREIGNAUD devra enseigner le m&ecirc;tier de charpentier au dit SIMEON</li>
  <li> Accord le 27 janvier 1704 entre H&eacute;lie GUILLEMOT, marchand, Jeanne 
    PREVOST, sa femme, veuve d'Abraham BIROT, du bourg de Bignac et Jacques MARCHAIS, 
    du village de la Fich&egrave;re, de St-Amant de Boixe suite &agrave; un proc&egrave;s</li>
  <li> Sommation le 28 janvier 1704 par Jacques GRILLAUD,laboureur du village 
    de Bourserois, de St-Genis, &agrave; Louis BINAUD, du bourg de Bignac</li>
  <li> Partage le 21 f&eacute;vrier 1704 des biens de Catherine VIVIER, veuve 
    de Jean DULONG l'a&icirc;n&eacute;, entre Charles DE MARCHOU, laboureur &agrave; 
    boeufs, Marie DULONG, sa femme, Jean DE MARCHOU, laboureur &agrave; boeufs, 
    veuf de Jeanne DULONG, et Pierre COUSSOT, laboureur, Jeanne DULONG, sa femme, 
    Isabelle DULONG, les dittes DULONG filles de la ditte VIVIER, demeurant tous 
    au village du Tapis, paroisse de Montignac</li>
  <li> Partage le 2 mars 1704 des successions de d&eacute;funts Mathias GALLOUX 
    et Julienne BLANCHARD entre Jean GALOUX l'a&icirc;n&eacute;, mari de Marie 
    DE ROUIGNAT, du village de Chez Renard, de Jauldes, Jean GALLOUX dit Saint 
    Jean du village du Treillis, de Jauldes et autre Jean GALLOUX le Jeune, du 
    village de Chez Renard, leurs enfants</li>
  <li> Accord le 6 mars 1704 entre Pierre PAPOT, laboureur &agrave; boeufs, Denise 
    CORLIEU, sa femme, veuve en premi&egrave;res noces de Jean ROUYER, de Vars 
    et Jean ROUYER, dit BAUQUET, fils de d&eacute;funt Simon ROUYER, lui-m&ecirc;me 
    h&eacute;ritier du dit Jean ROUYER, fond&eacute; de procurateur de Jean ROUYER, 
    son oncle de la Rochelle</li>
  <li> Partage le 30 mai 1704 des biens de la communaut&eacute; de Martial PRAIGNAUD, 
    ma&ccedil;on veuf en troisi&egrave;mes noces de d&eacute;funte Fran&ccedil;oise 
    MEMAIN, femme en premi&egrave;res noces de Louis PAPONNET, de Pierre DUFAIN, 
    ma&ccedil;on, mari de Fran&ccedil;oise PAPONNET et Fran&ccedil;ois PAPONNET 
    dit Rousseau, fr&egrave;re de Charles PAPONNET, tous enfants dues Louis PAPONNET 
    et Fran&ccedil;oise MEMAIN</li>
  <li> Inventaire le 2 d&eacute;cembre 1704 pour Sim&eacute;on et Henri MOUSSET, 
    fr&egrave;res, enfants de d&eacute;funts Masset et Marie THINON, du village 
    de Menadaud, de la paroisse de Chebrac, des biens d&eacute;laiss&eacute;s 
    par ceux-ci contre Anne DESBAINS, veuve du dit Masset</li>
  <li> Accord le 24 septembre 1705 entre Isaac Fran&ccedil;ois CORGNOL, sieur 
    de la Touche,<br>
    demeurant &agrave; Anais et Marie de MONTAGUT, marchande, femme de Jean RAFOR, 
    de Bellac (Paroisse Notre Dame)</li>
  <li> Inventaire le 2 janvier 1706 pour Jean PEROT, laboureur &agrave; boeufs, 
    de Montignac, veuf de Marie DAMY, sa premi&egrave;re femme, des biens de cette 
    derni&egrave;re et de leur d&eacute;funte fille, Marie PEROT</li>
  <li> Partage le 20 juillet 1706 de biens de Suzanne TIBAUD, avanc&eacute;e en 
    &acirc;ge, veuve de d&eacute;funt Marc GODINEAU, entre Pierre GODINEAU, l'a&icirc;n&eacute;, 
    Marie FOUCHIER, sa femme, Pierre GODINEAU le jeune, ses fils, tous du village 
    des Godinaud, de Bignac</li>
  <li> Sommation le 13 f&eacute;vrier 1707 par Denis LURAT et Pierre SEGUIN, collecteurs 
    des deniers royaux de Chebrac aux habitants de cette paroisse </li>
  <li> Accord le 9 mai 1707 entre Antoine GUERAIN, Adrienne BILLOCHON, sa femme 
    et Antoine AUDEBERT, fils de d&eacute;funts Jean AUDEBERT et Marguerite POUTHIER, 
    tous du bourg de Coulonges (L'acte comporte de gros trous dus &agrave; des 
    d&eacute;chirures) </li>
  <li> Accord le 28 d&eacute;cembre 1707 entre Antoine PLEXAIS, laboureur &agrave; 
    boeufs, et Jean TASTON, laboureur &agrave; bras, tous les deux du village 
    du Tapis de Montignac qui se serait empar&eacute; d'une pi&egrave;ce appartenant 
    au dit Antoine</li>
  <li> Accord VACHIER THOUREAU du 2 janvier 1711 (compl&egrave;tement illisible)</li>
  <li> Sommation le 21 d&eacute;cembre 1709 par Charles DELAUNAY, sieur des Ouches, 
    Roch GRATREAU, Pierre MALLET, fils d'Etienne, Pierre THOUREAU dit Chapellier, 
    Fran&ccedil;ois MORAND et Louis AUDIGIER, collecteurs de tailles au habitans 
    de St-Amant de Boixe</li>
  <li> Inventaire le 5 janvier 1711 des biens d'Anne BRUN suite &agrave; son mariage 
    avec Antoine GALLOUX, tailleur d'habits Accord le 9 mai 1712 entre Jean AUGIER, 
    charpentier, fils de d&eacute;funt Fran&ccedil;ois AUGIER et Perrine BOURRIER 
    et Etienne et Jean AUGIER, fr&egrave;res, fills de d&eacute;funt Jean AUGIER, 
    fils des d&eacute;funts AUGIER et BOURRIER, demeurant tous &agrave; Tourriers 
  </li>
</ul>
<p>2E4096:</p>
<ul>
  <li>Accord le 20 d&eacute;cembre 1714 entre Pierre CLAVEAU, laboureur et Jean 
    GUILLOTEAU, mar&eacute;chal, tous de Montignac suite au dessus de la main 
    droite du dit CLAVEAU &quot;coup&eacute;&quot; par le dit GUILLOTEAU</li>
  <li>Inventaire le 20 d&eacute;cembre 1714 des biens de Fran&ccedil;oise VOUILLAT, 
    veuve de Denis VEAU, du village du Tapis de Montignac suite &agrave; son mariage 
    avec Fran&ccedil;ois MARIDAT, fils de Fran&ccedil;ois, du village du Breuil, 
    de Vouharte. Sont mentionn&eacute;es : Jeanne et Fran&ccedil;oise VEAU, fille 
    de la ditte VOUILLAT et du dit VEAU</li>
  <li>Inventaire le 14 f&eacute;vrier 1715 des biens de d&eacute;funt Pierre MASSICOT, 
    de Bignac, pour Jeanne MASSICOT, veuve de Joachim GUICHAUD, de Bignaud, faisant 
    pour elle et Jean VERGNAUD, Louise MASSICOT, sa femme, les dittes MASSICOT, 
    fille de Pierre. Est pr&eacute;sente Marie FOUCHIER, veuve du dit MASSICOT</li>
  <li>Proc&egrave;s verbal le 17 juillet 1715 d'une maison pour Jean MILLON, marchand, 
    de Vars, curateur aux successions de Marie GUIGNARD et Anne FRUCHET, fille 
    de d&eacute;funt Isaac et de la dite GUIGNARD</li>
  <li>Accord le 15 juillet 1716 entre Jean CHAUSSAT, marchand sargier, Pierre 
    QUANTAIN, laboureur, Marie CHAUSSAT, sa femme, tous de Montignac, Jean BAUDAU, 
    Martine CHAUSSAT, de la ville de Jarnac, les dits CHAUSSAT, enfants de d&eacute;funts 
    Pierre CHAUSSAT et Jeanne TIFFON et Sim&eacute;on MOUSSET, marchand sargier, 
    du village de Menadaud, de Chebrac, veuf de la ditte TIFFON</li>
  <li>Accord le 15 juillet 1716 entre Pierre THINON, laboureur, du village du 
    Breuil, de Vouharte et Pierre GUERAIN, tailleurs d'habits de Xambes</li>
  <li>Reconnaissance le 20 janvier 1717 &agrave; Pierre PETITEAU, Jeanne RENON, 
    sa femme, veuve de Louis MARVAUD, Jean MARVAUD, laboureur du village de la 
    Fich&egrave;re, de St-Amant de Boixe par Louis SAUTON, laboureur et Georgette 
    MARVAUD, sa femme, du village de Breuil de Vouharte, les dits MARVAUD, enfants 
    du dit MARVAUD et de la ditte RENON </li>
  <li>Accord le 12 avril 1717 entre Charles PREVERAUD, sieur de la Boissi&egrave;re, 
    procureur fiscal de Montignac, et Jean VACHIER, laboureur &agrave; boeufs, 
    du village de la Fich&egrave;re, de St-Amant de Boixe</li>
  <li> Inventaire le 26 novembre 1717 des biens de d&eacute;funte Fran&ccedil;oise 
    VOUILLAT, veuve de Denis VEAU, pour Fran&ccedil;ois MARIDAT, veuf de la ditte 
    VOUILLAT</li>
  <li>Accord le 11 janvier 1718 entre Jean LAMOUREUX, du village de Lagroux, paroisse 
    de Marsac, tuteur des filles mineures de d&eacute;funts Denis VEAU et Fran&ccedil;oise 
    VOUILLAT, et Fran&ccedil;ois MARIDAT, laboureur, du village du Tapis, de Montignac, 
    l&eacute;gal administrateur de sa fille et de la dite VOUILLAT, Pierre VOUILLAT, 
    laboureur, du Breuil, de Vouharte, a&iuml;eul maternel des trois filles, Etienne 
    MORAND, laboureur, du village de la Fich&egrave;re, de St-Amant de Boixe, 
    cousin second paternel des deux premi&egrave;res mineures et Etienne VOUILLAT, 
    leur oncle maternel</li>
  <li>Accord le 19 ao&ucirc;t 1718 entre Jean PLEXAIS, laboueur &agrave; boeufs, 
    fils de d&eacute;funt Antoine et Elisabeth DULONG, fille de d&eacute;funts 
    Jean DULONG et Hilaire BOISSOT, tous du village du Tapis, de la paroisse de 
    Montignac</li>
  <li>Inventaire le 22 mars 1719 des biens de d&eacute;funt Fran&ccedil;ois ROBERT, 
    pour sa veuve, Marie THOUREAU, du lieu de St-Etienne les Montignac</li>
  <li>Accord le 15 mai 1722 entre Pierre COUPRIE, fils de feu Pierre, chirurgien 
    du village de Boisviaut, paroisse de St-Amant de Boixe et Fran&ccedil;ois 
    ROBAIN, laboureur, Marie MESNARD, fille de d&eacute;funt Mathurin, sa femme, 
    de Montignac et cession par le dit COUPRIE &agrave; Michel LESCALLIER, chirurgien 
    et Anne BALLET, sa femme</li>
  <li>Licitation le 16 septembre 1722 par Jean PAPOUNET, laboureur &agrave; bras, 
    du village de la Fich&egrave;re, de St-Amant de Boixe et Etienne FUREAU, marchand, 
    Marie PAPOUNET, sa femme, du bourg de la Chapelle, les dits PAPOUNET, enfants 
    de d&eacute;funts Jean PAPOUNET et Marie DURANDEAU</li>
  <li>Accord le 11 d&eacute;cembre 1723 entre Pierre MAUDET, laboureur, Fran&ccedil;oise 
    MOUSSET, sa femme et fille de d&eacute;funt Jean MOUSSET, cousin germain de 
    d&eacute;funt Pierre BIRAUD, du village du Tapis, de Montignac et Pierre MARIDAT, 
    laboureur, Marie QUANTAIN, sa femme et fille de d&eacute;funts Fran&ccedil;ois 
    QUANTAIN et Jeanne VIVIER, du village du Breuil, de Vouharte. La ditte VIVIER 
    a &eacute;t&eacute; mari&eacute;e avec le dit BIRAUD</li>
  <li>Proc&egrave;s verbal le 8 mai 1724 pour Pierre THINON, sieur des Voutes 
    de l'&eacute;tat d'un pourceau tu&eacute; d'un coup de fusil par Jean BOUNICEAU 
    le jeune</li>
  <li>Partage le 7 mars 1725 des biens de d&eacute;funts Antoine CHESNE dit Vallier 
    et Marie RAVEAUD, sa femme entre Jean et Charles CHAIGNE, leurs enfants, de 
    Vouharte</li>
  <li>Sommation le 26 juin 1725 pour Louis PARTEAU, marchand, de Villognon contre 
    Jacques CAILLAUD, l'a&icirc;n&eacute;, laboureur &agrave; bras occupant une 
    maison afferm&eacute;e au dit PARTEAU</li>
  <li>Proc&egrave;s verbal le 10 novembre 1725 pour Louis PAPOUNET, laboureur 
    &agrave; boeufs, et Jeanne GASCHET, sa femme, du village de la Fich&egrave;re, 
    de St-Amant de Boixe contre Jean VACHIER, laboureur &agrave; boeufs, du dit 
    village</li>
  <li>Accord le 30 novembre 1725 entre Fran&ccedil;ois FROGIER, bastier, Charlotte 
    DELAROCHE, sa femme et Charles FROGIER, bastier, Anne TIFFON, sa femme, leurs 
    fils et nore, demeurant tous &agrave; Montignac</li>
  <li>Accord le 20 avril 1726 entre Fran&ccedil;ois BOITEAU, laboureur &agrave; 
    bras, veuf de Louise GASCHET, Charles et Jean BOITEAU, ses enfants de la dite 
    d&eacute;funte, Jeanne GIRAUDEAU, femme du dit Charles, Marguerite PAPOT, 
    femme du dit Jean, tous du village de la Fich&egrave;re, de St-Amant de Boixe</li>
  <li>Proc&egrave;s verbal le 30 avril 1726 pour Fran&ccedil;oise BOYLEVIN, veuve 
    de Charles DELAUNAY, sieur des Ouches, du village de la Fich&egrave;re, de 
    St-Amant de Boixe d'une pi&egrave;ce de terre au lieu appel&eacute; la Cassotte 
    dont le bl&eacute; a &eacute;t&eacute; endommag&eacute; par Louis VIAUD et 
    Jean MALVAUD</li>
  <li>Vente le premier juillet 1726 par Jeanne MORAND, veuve de Charles MOREAU, 
    laboureur, du village du Tapis de Montignac et Jean MORAND, laboureur de Montignac, 
    tous deux enfants de d&eacute;funts Jean MORAND et Jeanne CAMUZET de leurs 
    successions situ&eacute;es au village de la Fich&egrave;re &agrave; Michel 
    MORAND, laboureur, du village de la Fich&egrave;re, de St-Amant de Boixe</li>
  <li>Proc&egrave;s verbal le 11 mars 1727 Ppur Jean et Pierre BLANCHARD, laboureurs 
    &agrave; bras, p&egrave;re et fils, du village de Bouffanais, de Tourriers 
    contre Jean PIFFRE, de Tourriers qui les a troubl&eacute; dans la possession 
    d'une pi&egrave;ce de vigne en d&eacute;versant des pierres dans la dite pi&egrave;ce</li>
  <li>Retrait lignagier le 12 f&eacute;vrier 1729 pour H&eacute;lie MICHAUD, fils 
    &eacute;mancip&eacute; de Jean MICHAUD d'une pi&egrave;ce de terre arent&eacute;e 
    &agrave; Jean PINAUD, tonnelier et Jeanne GUILLOT, sa femme</li>
  <li>Partage le 23 novembre 1731 des biens de d&eacute;funte Jeanne BOUQUINET, 
    entre Louis VIAUD, laboureur &agrave; bras, son fils, Fran&ccedil;ois CORAL, 
    laboureur &agrave; bras, Jeanne VIAUD, sa femme et petite fille de la ditte 
    BOUQUINET, tous du village de la Fich&egrave;re, de St-Amant de Boixe</li>
  <li>Accord le 21 novembre 1734 entre Jacques GEAUFROY, laboureur &agrave; boeufs, 
    du village de Ste-Colombe et Pierre GOBEAU, fils de d&eacute;funts Philippe 
    GOBEAU et Catherine GEAUFFROY, du village de Villars, de St-Ciers</li>
  <li>Accord le 23 novembre 1735 entre Anne BRUN, veuve d'Antoine GALLOUX et Antoine 
    GALLOUX, son fils, mari de Marguerite VACHIER, tous de Montignac</li>
  <li>Inventaire le 28 janvier 1736 des meubles delaiss&eacute;s par d&eacute;funts 
    Charles CHESNE, laboureur et Fran&ccedil;oise DUBOIS, sa femme, de Vouharte 
    pour Jean CHESNE, laboureur, de Vouharte, tuteur et curatteur des enfants 
    du couple </li>
  <li>Accord le 10 f&eacute;vrier 1736 entre Pierre ABRAS, laboureur &agrave; 
    boeufs, Marguerite MATHIEU, sa femme et Louis DELABORDE le Jeune, laboureur 
    &agrave; bras, veuf d'Anne ABRAS, leur fille, tous de Xambes</li>
  <li>Ratification le 12 janvier 1737 par Jeanne CHOLLET, femme d'Etienne DELACROIX, 
    du village du Breuil, de la paroisse d'Anais d'une donation par Fran&ccedil;oise 
    CHOLLET, sa tante</li>
  <li>Partage le 25 f&eacute;vrier 1737 des biens de d&eacute;funt Jean SEUDRE 
    entre Catherine BOITEAU, sa veuve, Marc PINEAU, laboureur, veuf de Marguerite 
    SEUDRE, leur fille, du village du Breuil de Vouharte et Jean SEUDRE, leur 
    fils, du village d'Argence, de Champniers</li>
  <li>Ferme le 1er d&eacute;cembre 1737 par Jean PEROT, marchand, de Puyr&eacute;aux 
    &agrave; Jean ROZIER, du village de Breuil, de Vouharte</li>
</ul>
<h4><big><b><u>
          <a name="boylevin">Boylevin 1696-1726</a></u></b></big></h4><h4>
    <p>2E4125:
    </p>      
    <ul>  
      <li>Inventaire le premier septembre 1696 des biens de d&eacute;funts Samuel      DE ROCHE, &eacute;cuyer sieur de Villesion et Marie AMBLARD sa femme, de Nanclars      pour Louis DE ROCHE, &eacute;cuyer sieur de Villesion et Madeleine DE ROCHE,      leurs enfants
      </li>  
      <li>Nomination le 6 septembre 1696 des syndics de Montignac, &agrave; savoir      Genis GUY, sergent et Joachim CROUSAUD, sieur du Perat
      </li>  
      <li>PV le 17 septembre 1696 du logis de Villesion pour Louis DE ROCHE, &eacute;cuyer      sieur de Villesion, tuteur et curateur aux personnes et aux biens de Louis      et Charles DE ROCHE, ses fr&egrave;res, tous enfants de d&eacute;funts Samuel      DE ROCHE, &eacute;cuyer sieur de Villesion et Marie AMBLARD sa femme, de Nanclars
      </li>  
      <li>Nomination le 29 septembre 1696 des collecteurs de Montignac, &agrave; savoir      Pierre COUPRIE, chirurgien, Charles DANNEDE, tanneur, Jean CHAPRON cordonnier      et Jean FRUCHET, marchand cabaretier
      </li>  
      <li>Nomination le 7 octobre 1696 du syndic de Villejoubert, Jean DENIS, laboureur      &agrave; bras
      </li>  
      <li>PV le 28 octobre 1696 pour Pierre MOUSSET, laboureur &agrave; bras, de St-Amant      de Boixe du refus de Pierre COUPRIE, chirurgien de suivre un arret destin&eacute;      aux collecteurs de taille
      </li>  
      <li>D&eacute;lib&eacute;ration le 18 novembre 1696 des habitants de Tourriers      &agrave; propos des tailles de celles-ci
      </li>  
      <li>PV le 17 janvier 1697 de la porte fractur&eacute;e par le nomm&eacute; Desmelles      de Civray de la maison de Charles DANNEDE, tanneur, de St-Etienne (Les Montignac)      pour celui-ci
      </li>  
      <li>PV le 22 mars 1697 pour Pierre MANGON, menuisier de St-Amant de Boixe des      toubles commis dans une haie par Etienne AUDOIN, charpentier du dit St-Amant
      </li>  
      <li>PV le 26 mars 1697 pour Fran&ccedil;ois NADAUD, laboureur &agrave; bras      et Jean MIGNOT, texier en linge et Jean MIGNOT, texier en linge d'une grange      acquise de Jean VINSONNEAU, sieur de la Tousche, prieur de Bourg Charente      en son nom et celui de Jean POUTET, marchand, Louise VINSONNEAU, sa femme      et Fran&ccedil;oise VINSONNEAU, veuve de Michel MARTAIN, sieur de la Forest
      </li>  
      <li>PV le 20 juillet 1697 d'une pi&egrave;ce de terre pour Jean VINCENT, pr&ecirc;tre      cur&eacute; de Notre Dame de Montignac contre Pierre PREVERAUD, sieur des      Palluts
      </li>  
      <li>Nomination le 29 septembre 1697 des collecteurs de Xambes, Frady? FRAGNAUD,      Daniel FRADONNET, Marc VAUX et Antoine BERGERAT
      </li>  
      <li>Nomination le 6 octobre 1697 des syndics de Montignac, Pierre MARCHAIS,      marchand tanneur et Pierre DE GAILLE le jeune, laboureur &agrave; bras
      </li>  
      <li>Nomination le 13 octobre 1697 des collecteurs de Montignac, &agrave; savoir      Jacques MARQUET, chirurgien, Fran&ccedil;ois GORRAIN, boucher, Jean CYVADIER,      marchand et Jean RAVION
      </li>  
      <li>PV le 21 octobre 1697 de l'&eacute;tat des biens de Louis PINTAUD, de St-Amant      de Boixe pour Fran&ccedil;oise CLEMANT sa femme. La ditte CLEMANT demande      sa s&eacute;paration quant aux biens du dit PINTAUD car il est &quot;d'une      si mauvaise conduite et menagement&quot;
      </li>  
      <li>PV le 25 d&eacute;cembre 1697 pour Jean GASCHET, laboureur &agrave; bras      de St-Amant de Boixe, d'une maison acquise de Pierre et Charles LOISEL, sieur      de la Motte et de la Douhe, Pierre THINON, greffier de Montignac, Jean VINSONNAUD,      sieur de la Touche et Fran&ccedil;oise VINSONNAUD, sa soeur, tous h&eacute;ritiers      de Marguerite DE ST-AMANT
      </li>  
      <li>Sommation le 5 janvier 1698 par Jacques MARQUET, chirurgien, Fran&ccedil;ois      GORRAIN, boucher, Jean CYVADIER et Jean RAVION, collecteurs de Montignac aux      habitants de Montignac &agrave; propos des desrollement de Fran&ccedil;ois      THOUREAU, Fran&ccedil;ois PLANSON, tailleur d'habits, tous deux de Vars et      Guillaume CHATENET, marchand de Marcillac
      </li>  
      <li>Arentement le 6 janvier 1698 par Fran&thorn;ois AUBINAUD, mar&eacute;chal      &agrave; H&eacute;lie CLEMENT, laboureur &agrave; bras, tous de St-Amant de      Boixe
      </li>  
      <li>Reconnaissance le 12 janvier 1698 par Michel MENACHAUD, laboureur &agrave;      bras, de Coulonges &agrave; H&eacute;lie DUBOIS, sieur de la Bernarde, cessionnaire      de Jean PREVERAUD, ecuyer sieur de Nitrat
      </li>  
      <li>Reconnaissance le 16 f&eacute;vrier 1698 par Michel CLEMENT, laboureur &agrave;      bras, fils de d&eacute;funt Louis CLEMENT &agrave; Catherine BOUNICEAU, fille      et h&eacute;riti&egrave;re de Pierre BOUNICEAU, lui-m&ecirc;me cessionnaire      de d&eacute;funt Pierre COUPRIE, chirurgien
      </li>  
      <li>Inventaire le 23 avril 1698 de Louise MOIXANT, veuve en premi&egrave;res      noces de Blais PISTRE, femme de Louis DELACROIX, du village de Torsac pour      Jean LAIR, mari d'Anne PISTRE et Antoinette PISTRE, filles de la ditte MOIXANT
      </li>  
      <li>Sommation le 12 mai 1698 par Pierre MIGNOT dit Lestang, Jeanne HUBERT, veuve      faisant pour Fran&ccedil;ois et Marguerite BOUQUINET, ses enfants, du village      de la Fich&egrave;re, de St-Amant de Boixe &agrave; Marguerite BOUHIER, veuve      d'accepter les sommes de 7 livres et huit sols pour lever un jugement
      </li>  
      <li>Transaction le 6 juin 1698 entre Jacques BOISSOT et Gabriel GILLET, du village      de Fen&ecirc;tre, de Tourriers &agrave; propos d'une muraille
      </li>  
      <li>Nomination le 21 septembre 1698 des collecteurs de Xambes, Fran&ccedil;ois      BOUHIER, Samuel PINTAUD, Denis AUBERT et Jean DELABORDE
      </li>  
      <li>Sommation le 2 octobre 1698 par Nicolas GALLOPIN, marchand du pont de vocuire?,      de St-Jacques de L'Houmeau &agrave; Pierre NADAUD, sergent royal, collecteur
      </li>  
      <li>Nomination le 12 octobre 1698 du syndic de Villejoubert Fran&ccedil;ois      BOUHIER, laboureur &agrave; bras et des collecteurs de Villejoubert, Jacques      HUET, Jean BUHERNE le jeune et Fran&ccedil;ois COUSSEAU, laboureurs
      </li>  
      <li>Partage le 29 octobre 1698 entre Pierre THINON, sieur des Vouthes, de Marillac      le Franc, acqu&eacute;reur d'une quarte partie des biens de d&eacute;funts      Baptiste BERNARD et Marie AUBINEAU, sa femme appartenant &agrave; Fran&ccedil;ois      BERNARD et Marie GEOFFROY, sa femme, du village de Germeville, de Lanville      et Fran&ccedil;ois MARTINIER, laboureur &agrave; bras, Jeanne QUANTIN, sa      femme, Jean et Antoine QUANTIN, les dits QUANTIN enfants de Jacques QUANTIN      et Marie BERNARD, celle-ci fille des dits BERNARD et GEOFFROY
      </li>  
      <li>D&eacute;lib&eacute;ration le 30 octobre 1698 par les habitants de Montignac      &agrave; propos de la taille de Fran&ccedil;ois PIGORNET
      </li>  
      <li>Nomination le 19 octobre 1698 des collecteurs de Tourriers, &agrave; savoir      Jean PICONNIER, Jean POUTHIER et Fran&ccedil;ois MASSONNET, fils d'Antoine
      </li>  
      <li>Vente le 17 d&eacute;cembre 1698 d'un petit b&acirc;timent par Jean PESRAUD,      fils de feu Pierre, laboureur &agrave; bras &agrave; Jean AMIAUD, notaire      et procureur au si&egrave;ge de Montignac, faisant pour Jacques AMIAUD, sieur      de Sauvignon, tous de St-Amant de Boixe
      </li>  
      <li>Vente le 4 janvier 1699 par Pierre AMELINE, menuisier et Marie BOUNICEAU,      sa femme, de St-Amant de Boixe &agrave; Charles GRATTRAU, sieur des Oulches,      de Xambes des biens acquis de Pierre MOUSSET et Louise BERTHOUME sa femme
      </li>  
      <li>Cession le 6 f&eacute;vrier 1699 par Michel CLEMENT, laboureur &agrave;      bras &agrave; Jean PINEAU dit Portal, charpentier, tous de St-Amant de Boixe      d'une pi&egrave;ce de terre
      </li>  
      <li>PV le 4 avril 1699 pour Pierre THINON, greffier de la baronnie et chastellenie      de Montignac, faisant pour Jean THINON, avocat au si&egrave;ge pr&eacute;sidial      d'Angoumois, son neveu d'une maison et grange acquises de Jean DE LA GRESILLE,      aussi avocat au si&egrave;ge pr&eacute;sidial d'Angoumois
      </li>  
      <li>Transaction le 6 avril 1699 entre Pierre GAUTTREAU, sergent du duch&eacute;      de la Rochefoucauld, Marie GRATREAU, sa femme, fille de d&eacute;funt Pierre      GRATREAU, Antoinette DROUET, veuve de Pierre DE MARCHOU, fils de d&eacute;funts      Louis DE MARCHOU et Suzanne GRATREAU, Roch GRATREAU, laboureur &agrave; bras,      curateur pourvu en justice de la succession vacante de Fran&ccedil;ois ROUET      et Jean AMIAUD l'a&icirc;n&eacute;, notaire et procureur du si&egrave;ge de      la baronnie de Montignac, tous de St-Amant de Boixe. Marie GRATREAU et Pierre      DE MARCHOU auraient recuilli la succession de Marie ROUET, fille de feu Fran&ccedil;ois      ROUHET et Marie GRATREAU, leur cousine germaine 
      </li>  
      <li>Reconnaissance le 4 mai 1699 par Pierre THINON, sieur de Seruolle, greffier      de la baronnie et chastellenie de Montignac, du village de la Fich&egrave;re,      de St-Amant de Boixe aux religieux de l'abbaye de St-Amant de Boixe
      </li>  
      <li>PV le 21 juin 1699 pour Fran&ccedil;ois Thournier, marchand voiturier, de      Villejoubert des biens de d&eacute;funte Fran&ccedil;oise DESHERCE acquis      de Pierre, Charlotte et Marie Papounet, ses enfants
      </li>  
      <li>Cession le 12 juillet 1699 par Louis ALLARD, voiturier, Marie GUILLEN, sa      femme, de Tourriers des biens de d&eacute;funts Jean GUILLEN et Madeleine      NOUVEAU, p&eacute;re et m&egrave;re de la dite GUILLEN &agrave; Jean GUILLEN,      sargier, du village de Vadalle, d'Aussac
      </li>  
      <li>PV le 21 juillet 1699 pour Jean MESNARD l'a&icirc;n&eacute; marchand du      vilage du Chatelars, de St-Ciers et Raymond SERIER, de Chez Baige de St-Angeau,      commissaires des biens appartenant &agrave; Anne ROBIN &agrave; la requ&ecirc;te      de Fran&ccedil;ois HUGON, marchand d'Angoul&ecirc;me de bl&eacute;s emport&eacute;s      dans une pi&egrave;ce de terre appartenant &agrave; la dite ROBIN
      </li>  
      <li>PV le 2 octobre 1699 pour Mathieu GIRAUD et Jean BOUJAUD, laboureur &agrave;      bras de St-Amant de Boixe des choses saisies sur Michel CLEMANT &agrave; la      requ&ecirc;te de Colas GALLOPIN
      </li>  
      <li>Accord le 22 novembre 1699 entre les habitants d'Anais &agrave; propos des      tailles pay&eacute;es par Fran&thorn;ois GOUMARD et Jean SEBILLAUD, habitants      de la dite paroisse
      </li>  
      <li>D&eacute;claration le 20 janvier 1700 par H&eacute;lie DUBOYS, sieur de      la Bernarde, de St-Amant de Boixe du prieur&eacute; de Montignac
      </li>  
      <li>Sommation le 24 janvier 1700 par Jacques GUY, sieur de la Rouze, Jacques      MARCHAIS, Fran&ccedil;ois TEXIER, marchand et Julien GORRAIN, collecteurs      de la paroisse aux habitants de Montignac. Les sommations sont en fait des      d&eacute;clarations &agrave; propos des tailles
      </li>  
      <li>Cession le 18 mars 1700 par Amant CHEVRIER, laboureur &agrave; bras de Vindelle,      mari de Jeanne GAUTTRAU &agrave; Jacques, Jean et Catherine CHEVRIER, de St-Amant      de Boixe, ses fr&egrave;res et soeur, de ses droits dans la succession de      d&eacute;funt Jean CHEVRIER et Catherine BOUFFANAIS, leurs p&egrave;re et      m&egrave;re
      </li>  
      <li>Partage le 14 mars 1700 des biens de d&eacute;funts Jean GALLOPIN et Marie      PERAUD entre Jean GALLOPIN dit Boisrousseau, charpentier?, Fran&ccedil;ois      CLEMANT, laboureur &agrave; bras, Jeanne GALLOPIN, sa femme, Pierre BARRADEAU,      laboureur &agrave; bras, Marie GALLOPIN, sa femme, tous de St-Amant de Boixe,      leurs enfants
      </li>  
      <li>PV le 16 mars 1700 pour Jacques MARQUET, chirurgien, de Montignac, d'une      pi&egrave;ce de terre
      </li>  
      <li>Inventaire le 10 avril 1700 de la communaut&eacute; de Jacques MARCHAIS,      marchand h&ocirc;telier, de Montignac et d&eacute;funte Jacques Aurin, sa      femme
      </li>  
      <li>PV le 2 juillet 1700 de lieux situ&eacute;s dans l'enclave du Tapis pour      Jean DE LA MACHIERE, serrurier et Jean BARADEAU, charpentier, de St-Amant      de Boixe, commissaires &agrave; la requ&ecirc;te de Jean DELAGRESILLE, Charles      PREVERAUD et Daniel SEGUIN
      </li>  
      <li>Sommation le 21 octobre 1700 pour Jean DULAUX, chevalier seigneur de Cellettes,      r&eacute;sident &agrave; la maison noble de l'Age Baston, en la paroisse de      Saint Projet &agrave; Jacques FUMEAU, notaire et procureur au dit Montignac,      Fran&ccedil;ois BENOIT, notaire royal et Pierre COUPRIE d'accepter son offre      concernant le droit d'agrier du plantier de la Faye de Tourriers
      </li>  
      <li>Sommation le 21 octobre 1700 pour Jean DULAUX, chevalier seigneur de Cellettes,      r&eacute;sident &agrave; la maison noble de l'Age Baston, en la paroisse de      Saint Projet &agrave; Nicolas LELONG, pr&ecirc;tre cur&eacute; de Tourriers.      Le dit DULAUX va faire vendanger certaines vignes de la Faye de Tourriers      dans lesquelles le dit LELONG prend la d&icirc;me
      </li>  
      <li>Inventaire le 25 octobre 1700 des biens de Jean AUDIER, meunier du moulin      de Toussaugne de Vouharte et d'Anne BONNET, veuve de Pierre PLANTIVET, fianc&eacute;e      du dit dit AUDIER, tous de St-Amant de Boixe
      </li>  
      <li>Inventaire le 2 avril 1701 des biens d'Anne BOUYER, fille de d&eacute;funts      Jean BOUYER et Jeanne GROS, de Xambes
      </li>  
      <li>Inventaire le 7 avril 1701 des maisons et b&acirc;timents d'Anne BOUYER,      fille de d&eacute;funts Jean BOUYER et Jeanne GROS, de Xambes
      </li>  
      <li>Accord le 20 avril 1701 entre Etienne MALLET, laboureur, Fran&ccedil;oise      ROUHET, sa femme et Jean ROUHET dit La Garde, tous de St-Amant de Boixe &agrave;      propos de la succession de Jean ROUHET, fils de Daniel
      </li>  
      <li>Offre de retrait lignagier le 23 avril 1701 par Fran&ccedil;oise CHERANSAT,      notaire de la chastellenie de Tusson &agrave; Charles PREVERAUD, sieur de      la Boissi&egrave;re, procureur fiscal de Montignac
      </li>  
      <li>Partage le 8 juillet 1701 des biens de la communaut&eacute; de Pierre THOUREAU      dit Le Treil, laboureur &agrave; bras et d&eacute;funte Fran&ccedil;oise ALBERT,      sa femme entre le dit Pierre, Jean THOUREAU dit Cherubin, Pierre THOUREAU      dit Patry, Marguerite THOUREAU, fr&egrave;res et soeur faisant pour Jean THOUREAU      dit Gros Bonnet, au service de sa majest&eacute;, tous de St-Amant de Boixe
      </li>  
      <li>PV le 20 juillet 1701 de murailles pour Jean MARTIN, laboureur &agrave;      bras, du village de la Chize, de St-Amant de Nou&egrave;re contre Isaye DESMOULINS
      </li>  
      <li>Accord le 30 octobre 1701 entre Jean VACHIER, cuisinier de Varaine en Saintonges      et Jean BOUJAUD, laboureur &agrave; bras, de St-Amant de Boixe, veuve de Marie      PETIT, tante du dit VACHIER &agrave; propos de la succession de celle-ci.      Le CM BOUJAUD-PETIT a &eacute;t&eacute; enregistr&eacute; le 8 septembre 1680
      </li>  
      <li>Inventaire le 12 janvier 1701 de la communaut&eacute; de Jacques NOUGIER      et Madeleine TAMPLARD, sa d&eacute;funte femme suite au CM du dit NOUGIER      avec Antoinette BAUDRY. Celui-ci a &eacute;t&eacute; enregistr&eacute; le      23 d&eacute;cembre dernier devant le m&ecirc;me notaire que ses pr&eacute;sentes
      </li>  
      <li>Reconnaissance le 18 janvier 1701 par Jacques AMELINE, menuisier de St-Amant      de Boixe &agrave; Charle DE MAYOL, abb&eacute; commandataire de l'abbaye royal      de St-Amant de Boixe
      </li>  
      <li>Vente le 21 janvier 1701 d'une pi&egrave;ce de chenevaud par Fran&ccedil;ois      NADAUD, laboureur &agrave; bras, de St-Amant de Boixe &agrave; Vincent NOUGIER,      laboureur &agrave; boeufs, de Tourriers
      </li>  
      <li>Vente le 31 janvier 1701 d'une pi&egrave;ce de chenevaud par Vincent NOUGIER,      laboureur &agrave; boeufs, de Tourriers &agrave; Fran&ccedil;ois NADAUD, laboureur      &agrave; bras, de St-Amant de Boixe
      </li>  
      <li>PV le 8 mars 1701 pour Jean et autre Jean ROUHET, fr&egrave;res, laboureurs      &agrave; boeufs, h&eacute;ritiers pr&eacute;somptifs de Jean ROUHET, leur      neveu de l'&eacute;tat des biens de celui-ci contre Marie BOUNIN, sa m&egrave;re
      </li>  
      <li>PV le 18 juillet 1701 pour Paul GRASSAUD, maitre bonnetier, d'Angoul&ecirc;me,      mari de Marie BOUYER des biens de celles-ci &agrave; Villejoubert recuillis      de la succession de d&eacute;funte Marguerite BUHERNE
      </li>  
      <li>Sommation le 8 d&eacute;cembre 1701 par Pierre MARCHAIS et Pierre DEGORSES,      laboureurs &agrave; bras, syndics de Montignac aux habitants de celui-ci afin      qu'ils nomment des collecteurs. Pierre BALLET, sieur de la Motte, Pierre ROBERT,      notaire royal, Michel GORRAIN, sieur des Hourniers? et Pierre FROUGIER, bastier      ont &eacute;t&eacute; nomm&eacute;s
      </li>  
      <li>Transaction le 1er janvier 1702 entre Antoine DE COIGNET DE MARCLOPTS, conseilleur      aumonier du roi, seigneur abb&eacute; commandataire de l'abbaye royale de      St-Amant de Boixe, demeurant &agrave; Lyon et Jean AMIAUD l'a&icirc;n&eacute;,      notaire et procureur de la baronnie de Montignac et Pierre AMIAUD, son fils,      de St-Amant de Boixe &agrave; propos des revenus de la ditte abbaye
      </li>  
      <li>PV le 10 f&eacute;vrier 1702 pour Fran&ccedil;ois NAVARRE, laboureur du      village de Nitrat, de St-Amant de Boixe des broches arrach&eacute;es dans      une terre contre Jacques AULDHOUIN
      </li>  
      <li>Inventaire le 23 f&eacute;vrier 1702 de la communaut&eacute; d'Antoine QUANTIN,      laboureur &agrave; bras, de Xambes, veuf de Catherine CROISAT et de sa fille      Anne QUANTIN suite au CM du dit Antoine avec Jeanne MENACHEAU
      </li>  
      <li>Renonciation le 23 f&eacute;vrier 1702 par Fran&ccedil;ois, Jacques et Louis      BOUHYER, fr&egrave;res et Charles GUERIN, Hilaire BOUYER, sa femme, tous de      Xambes aux successions de Pierre BOUNIN,leur oncle maternel fils de feu Fran&ccedil;ois      BOUNIN et Anne GALLAND. Cette renonciation fait suite aux poursuites intent&eacute;es      par Pierre THINON, sieur des Voultes
      </li>  
      <li>PV le 8 avril 1702 de plusieurs arbres pour Fran&ccedil;ois TIFFON, sieur      des Noyers, de Vouharte
      </li>  
      <li>Inventaire le 19 avril 1702 de la communaut&eacute; de Pierre GROS et d&eacute;funte      Marguerite DE LOUSCHE, de Coulonges pour Fran&ccedil;oise DE LOUSCHE, laboureur,      fils de Fran&ccedil;ois, neveu de la dite DE LOUSCHE
      </li>  
      <li>D&eacute;lib&eacute;ration le 14 mai 1702 des habitants de Montignac &agrave;      propos de leur cur&eacute; VINCENT qui tend &quot;plus &agrave; son propre      int&eacute;r&ecirc;t qu'aux r&eacute;parations de l'&eacute;glise&quot;
      </li>  
      <li>Transaction le 28 mai 1702 entre Jean PETIS, marchand faisant pour Jacques      GUILLEN, fils de Fran&ccedil;ois, cr&eacute;antiers de la succession de Jean      PETIS dit Jamet et Fran&ccedil;ois THOURNIER, marchand, tous de Villejoubert      suite &agrave; une instance intent&eacute;e par les dits PETIS et GUILLEN      contre le dit THOURNIER
      </li>  
      <li>Partage le 5 juillet 1702 entre Marguerite QUANTIN, veuve de Pierre DENIS,      Antoine DENIS, Jeanne CHASTEAU, sa femme, Fran&ccedil;oise et Marie DENIS,      ses enfants du dit feu Pierre, tous du village des Granges, d'Amb&eacute;rac      et Jean BONNET, sieur de la Moulinatte, de Villognon, fermier de Marc GOURDIN,      ecuyer sieur Dupuy. Les dits QUANTIN et DENIS habitent la m&eacute;tairie      du sieur Dupuy
      </li>  
      <li>PV le 14 juillet 1702 pour Pierre LOISEL, sieur de la Motte et Jean AMIAUD,      notaire et procureur de la baronnie de Montignac, de St-Amant de Boixe d'une      grange afferm&eacute;e par l'abb&eacute; de St-Amant. Jean AMIAUD est le nouveau      fermier et Pierre LOISEL le pr&eacute;c&eacute;dent
      </li>  
      <li>Reconnaissance le 14 juillet 1702 par les habitants de Montignac &agrave;      Pierre MARCHAIS, syndic de la paroisse. Il y est question de neuf compagnies      d'infanterie du r&eacute;giment de Brie qui auraient pass&eacute; le 12 mai      &agrave; Montignac
      </li>  
      <li>D&eacute;lib&eacute;ration le 16 juillet 1702 des habitants de Montignac      afin que Pierre MARCHAIS soit desaissi de sa charge de collecteur
      </li>  
      <li>Transaction le 23 novembre 1702 entre Collas GALLOPIN, marchand du lieu      du pont du Thouvre, de St Jacques de Lhoumeau, d'Angoul&ecirc;me et Michel      CLEMENT, laboureur &agrave; bras, Emerie PINAUD, sa femme, de St-Amant de      Boixe suite &agrave; une saisie des biens des dits CLEMENT et PINAUD par le      dit GALLOPIN
      </li>  
      <li>Transaction le 24 novembre 1702 entre Louis DEROCHE, ecuyer sieur de Douzat      et Villesion, de Nanclars et Jean et autre Jean PIQUARD, p&egrave;re et fils,      laboureurs &agrave; boeufs, Anne COIRARD, femme du dit Jean PIQUARD fils.      Le dit DEROCHE a afferm&eacute; la m&eacute;tairie de Villesion aux dits PIQUARD
      </li>  
      <li>Partage le 27 novembre 1702 des biens de d&eacute;funts Nicolas LESIEUR      et Suzanne NADAUD entre Fran&ccedil;ois et Gabriel LESIEUR, de St-Amant de      Boixe, leurs fils
      </li>
    </ul>
    <p>2E4126:
    </p>
    <ul>  
      <li>Inventaire le 13 janvier 1703 des biens de Fran&ccedil;ois BRIAND pour Marie      GALLOPIN, sa veuve, de St-Amant de Boixe
      </li>  
      <li>PV le 7 f&eacute;vrier 1703 pour Jean TRUTTAUD, fils de feu autre Jean,      dit Caput demeurant en la ville de Besan&ccedil;on en Franche Comt&eacute;      et Abraham TRUTTAUD, sergent royal, son fr&egrave;re d'une maison et ses meubles
      </li>  
      <li>Transaction le 23 f&eacute;vrier 1703 entre Fran&ccedil;ois DOGNON, marchand      voiturier de Ruffec, mari d'Anne THINON, fille de Jeanne ROBERT et Simon THOUREAU,      laboureur &agrave; bras et Jacquette PLANTIVET, sa femme, fille de d&eacute;funt      Martial PLANTIVET &agrave; propos d'arr&eacute;rages non pay&eacute;es par      le dit Martial PLANTIVET. Claude JACOB, sieur des Ouches, a &eacute;pous&eacute;      en secondes noces la ditte ROBERT
      </li>  
      <li>PV le 27 mars 1703 pour Daniel SEGUIN, sieur de la Vervante, de Montignac-Charente      de d&eacute;gats dans une pi&egrave;ce de bl&eacute; que Louis FOUCAUD, laboureur,      du village du tapis, aurait occasionn&eacute;
      </li>  
      <li>PV le 12 avril 1703 pour Louis PERROT, gallochier, de Nanclars, faisant      tant pour lui que Marie REGNAUD, sa belle-m&egrave;re des d&eacute;gats commis      dans une pi&egrave;ce de terre par les boeufs de Jean POUILLAT dit Bidet
      </li>  
      <li>PV le 4 mai 1703 de deux pi&egrave;ces de terre pour H&eacute;lie COUSTE      et Antoine BESSON, du village de Negrier, d'Echallat contre Jean BLANCHON
      </li>  
      <li>PV le 25 juin 1703 d'une muraille pour Louis BONNET, marchand du village      de Vadalle, paroisse d'Aussac contre Jean BEAUDEL, sieur des Essards
      </li>  
      <li>PV le 26 juin 1703 pour Jean PENOT, laboureur de Cellettes d'une pi&egrave;ce      de jardin dont les f&egrave;ves ont &eacute;t&eacute; mang&eacute;es par les      pourceaux du sieur DULAUX du Chambon
      </li>  
      <li>PV le 8 juillet 1703 pour Fran&ccedil;ois THOURNIER, marchand voiturier,      de Villejoubert, d'une maison h&eacute;rit&eacute;e de d&eacute;funt Pierre      THOURNIER, son p&egrave;re
      </li>  
      <li>Transaction le 5 ao&ucirc;t 1703 entre Jean DE CASEMAJOUR, sieur d'Ambelle,      h&eacute;ritier de d&eacute;funt Antoine DUCHASTEL, ecuyer sieur des Boyteaux,      son neveu, du village de Villorioux, de St-Groux et Jean AMIAUD l'a&icirc;n&eacute;,      notaire et procureur au si&egrave;ge de Montignac, de St-Amant de Boixe suite      &agrave; un contrat d'arentement entre le dit DUCHASTEL et le dit AMIAUD.      Le Dit DE CAZEMAJOUR a recu des lettres de recision de la chancelerie du parlement      de Paris du 6 mai dernier
      </li>  
      <li>PV le 7 ao&ucirc;t 1703 pour Fran&ccedil;ois PENOT, laboureur de Cellettes      de gerbes prises par Henri DULAUX, ecuyer sieur du Chambon et ses m&eacute;tayers,      de Cellettes
      </li>  
      <li>Nomination le 16 septembre 1703 des collecteurs de Montignac, &agrave; savoir      Jean AMIAUD, notaire, Pierre DELAUNAY, notaire, Fran&ccedil;oise GARDERE,      sellier et Jean THOUREAU dit Chesnevert
      </li>  
      <li>Prise de possession le 22 septembre 1703 par Abraham TRUTAUD, sergent royal,      curateur &agrave; la succession vacante d'Antoine BERTRAND, sieur des Avenaux,      mort civilement au monde, de St-Amant de Boixe des biens du dit Antoine BERTRAND
      </li>  
      <li>Partage le 31 septembre 1703 des biens de d&eacute;funte Marie BOUYER entre      Samuel PINTAUD, tisserand pour Marguerite GROS sa femme et Antoine GROS, fils      de Pierre, dit Chapellier, en son nom et celui de Jacques THOUILLON et Marie      GROS, de Coulonges. Les dits GROS sont les enfants de la d&eacute;funte
      </li>  
      <li>Reconnaissance le 26 octobre 1703 par Etienne GAUTTRAUD, laboureur &agrave;      bras et Louise BOUJAUD, sa femme et Emerie BOUJAUD, leur soeur et belle-soeur,      les dites BOUJAUD filles de d&eacute;funts Abraham BOUJAUD et Jeanne VERDIER      &agrave; Jean AMIAUD, l'a&icirc;n&eacute;, notaire et procureur au si&egrave;ge      de la baronnie de Montignac, aux droits des h&eacute;ritiers de d&eacute;funt      Fran&ccedil;ois GRATTRAUD, sieur de Grand Champ, fils de Daniel GRATTRAUD,      sieur des Marais, lui-m&ecirc;me cessionnaire de Jacob CLEMENT
      </li>  
      <li>Contrat d'apprentissage le 4 novembre 1703 du m&eacute;tier de mar&eacute;chal      par Jean GUILLOTEAU, mar&eacute;chal de Montignac &agrave; L&eacute;onard      CHESNE, fils de d&eacute;funt Pierre CHESNE et Marie DEPRESMONT, &agrave;      pr&eacute;sent femme de Jean ROUHET dit Lagarde
      </li>  
      <li>PV le 29 d&eacute;cembre 1703 pour Jacques GAUTRAUD, laboureur &agrave;      bras, de St-Amant de Boixe d'un maison acquise de Marie MALLET, h&eacute;riti&egrave;re      de Catherine BRUNAUD
      </li>  
      <li>Sommation le 1er janvier 1704 par Jean DE POUTIGNAC, sieur d'Amblecourt      et Marie BIROT, sa femme, Madeleine BIROT, leur soeur et belle-soeur de St-Etienne      les Montignac, les dittes BIROT, filles de d&eacute;funt Jean BIROT, sieur      du Beller aux habitants de Montignac &agrave; propos des tailles qu'ils doivent      payer
      </li>  
      <li>Transaction le 16 f&eacute;vrier 1704 entre Pierre GIRAUD, laboureur, Michel      CLEMENT et Jean PERAUD, laboureur &agrave; bras, tous de St-amant de Boixe      suite &agrave; une pi&egrave;ce de terre que le dit GIRAUD aurait acquis verballement      du dit CLEMENT 
      </li>  
      <li>Licitation et transport de fonds le 18 f&eacute;vrier 1704 entre Jean ROUHET      dit Lagarde, laboureur &agrave; boeufs et Daniel ROUHET , fils de feu Jean,      laboureur &agrave; boeufs, tous deux de St-Amant de Boixe
      </li>  
      <li>Sommation le 21 f&eacute;vrier 1704 par Pierre GASCHET, cessionnaire de      Jean VACHIER, cuisinier du bourg de Marennes, &agrave; Martial NADAUD, tous      deux de St-Amant de Boixe d'accepter la somme de 64 livres 15 sols
      </li>  
      <li>Cession le 25 mars 1704 par Jacques NOUGIER, laboureur du village de Saint-Maissent,      d'Aigre &agrave; Fran&ccedil;ois THOURNIER, marchand voiturier, de Villejoubert      des biens de d&eacute;funte Catherine BERNARD, a&iuml;eule du dit NOUGIER      et m&egrave;re du dit THOURNIER
      </li>  
      <li>Transaction le 29 mars 1704 entre Julien CHEVROUX, laboureur &agrave; bras,      mari d'Anne PAPOUNNET, Fran&ccedil;oise PAPOUNNET, sa belle-soeur et Jacques      PELLETAN, laboureur, tous de St-Amant de Boixe suite &agrave; une instance      pendante au si&egrave;ge pr&eacute;sidial de la baronnie de Montignac
      </li>  
      <li>Partage le 2 avril 1704 des biens de d&eacute;funts Jean GUILLEN dit LaPointe      et Marguerite TEXIER entre Fran&ccedil;ois GUILLEN, marchand voiturier, mari      de Fran&ccedil;oise LOIZEAU, Pierre GUILLEN, marchand voiturier, son fr&egrave;re,      tous du village de Vadalle, d'Aussac, fils des dits GUILLEN et TEXIER
      </li>  
      <li>Transaction le 24 mai 1704 entre Jean Baptiste BERNOU, cur&eacute; de Xambes      et les habitants de cette paroisse &agrave; propos des loyers du presbyt&egrave;re
      </li>  
      <li>Transaction le 27 mai entre Jean PLANTIVET, laboureur &agrave; bras, Robert      FOUCAUD, son protuteur, de Xambes et Pierre BONNET, marchand, de Villognon      suite &agrave; une instance criminelle intent&eacute;e par le dit PLANTIVET      contre le dit BONNET
      </li>  
      <li>PV le 20 ao&ucirc;t 1704 pour Antoine DEGAIL, praticien, de Coulonges de      lieux usurp&eacute;s par d&eacute;funt Pierre GROS et Antoine GROS, son fils
      </li>  
      <li>Transaction le 7 septembre 1704 entre Marc GOURDIN, ecuyer chanoine en la      cath&eacute;drale d'Angoul&ecirc;me, faisant pour Jean GOURDIN, ecuyer sieur      de la Fuye, son p&egrave;re, du logis noble de Tourriers et Jean MIGNOT dit      Petas, tisserand de St-Amant de Boixe suite &agrave; une rente seconde accord&eacute;e      au dit MIGNOT sur pi&egrave;ce de terre de la Font &agrave; Mouroux d&eacute;pendant      du seigneur de la Fuye
      </li>  
      <li>Transaction le 7 septembre 1704 entre Daniel ROUHET, laboureur &agrave;      boeufs, fils de d&eacute;funt Jean ROUHET l'a&icirc;n&eacute;, son p&egrave;re      et Jean MAROT, escardeur, mari de Marie DE LA MACHIERE, tous de St-Amant de      Boixe. Le dit MAROT n'a joui d'une pi&egrave;ce de vigne arrent&eacute;e par      le dit d&eacute;funt Jean ROUHET que pendant un an
      </li>  
      <li>Nomination le 5 octobre 1704 des collecteurs de Montignac, &agrave; savoir      Pierre COMPTE, tonnelier, Jean FRUCHET, marchand, Jacques MARCHAIS, marchand      et Piere MAULDET, tisserand
      </li>  
      <li>Quittance le 26 d&eacute;cembre 1704 par Pierre GUILLEN &agrave; Fran&ccedil;ois      GUILLEN, son fr&egrave;re, mari de Catherine LOISEAU, tous deux du village      de Vadalle, d'Aussac
      </li>  
      <li>Vente le 19 mars 1705 d'une pi&egrave;ce de terre par Pierre et Antoine      THINON, p&egrave;re et fils, du bourg de Montignac Charente &agrave; Jacques      RAVON, laboureur, de St-Amant de Boixe
      </li>  
      <li>Cession le 31 mars 1705 par Nicolas DUZAIS, laboureur &agrave; bras et Catherine      DELAMACHIERE, sa femme, du village des Ecures, de La Rochette &agrave; Jean,      Autre Jean et Pierre DELAMACHIERE, des biens issus de d&eacute;funts Pierre      DELAMACHIERE et Catherine GALLOPIN, p&egrave;re et m&egrave;re des dits DELAMACHIERE
      </li>  
      <li>Abandon de biens le 15 avril 1705 par Jean VERIT du village de Peusset de      Vars &agrave; Fran&ccedil;ois VERIT, ma&icirc;tre sargier, son fils, du logis      noble de Lugerat, de Montignac-Charente
      </li>  
      <li>PV le 17 juin 1705 pour Jacques NOUGIER, laboureur &agrave; bras, de Villejoubert      d'une maison acquise de Jean et Antoinette DENIS, fr&egrave;re et soeur
      </li>  
      <li>PV le 29 juin 1705 pour Jacques AMELINE, menuisier, de St-Amant de Boixe      d'une maison acquise de Jacques BINAUD et Fran&ccedil;oise FROGARD
      </li>  
      <li>PV le 4 juillet 1705 pour Fran&ccedil;ois GORRAIN, boucher, de Montignac      de l'&eacute;tat d'un mur et des aisances contre Pierre COUPRIE, chirurgien      dont &quot;il se sert lui et sa famille pour faire leurs ordures et immondices&quot;
      </li>  
      <li>Partage le 17 juillet 1705 des successions de d&eacute;funts Fran&ccedil;ois      BOUNIN et Anne GALLANT entre Pierre THINON, sieur des Vhoutes, cessionnaire      de Pierre, Fran&ccedil;ois, Jacques et Louis BOUHIER, Pierre GUERIN, (BLANC)      BOUHIER, sa femme, Etienne, Pierre et Madeleine BOUHIER, tous enfants et h&eacute;ritiers      de Louis BOUHIER, lui-m&ecirc;me h&eacute;ritier de Jean BOUHIER, son fr&egrave;re,      tous de Vervant, Jean AMIAUD, notaire et procureur de la baronnie de Montignac,      de St-Amant de Boixe. Louis BOUHIER p&egrave;re &eacute;tait mari&eacute;      avec Antoinette BOUNIN, fille des dits BOUNIN et GALLANT
      </li>  
      <li>PV le 4 ao&ucirc;t 1705 pour Jean POUILLAT l'a&icirc;n&eacute;, tailleur      d'habits, du village de Villars, de St-Ciers de l'&eacute;tat d'un arbre et      de sa souche contre Fran&ccedil;ois TOUCHARD et L&eacute;onard CHAMBAUD
      </li>  
      <li>Partage le 7 novembre 1705 des biens de d&eacute;funte Catherine LOISEL,      femme de Pierre THINON, sieur de Seruolle, du village de la Fich&egrave;re,      de St-Amant de Boixe entre le dit THINON, Toussaint GIRAUD, sieur des Pressais,      Marie THINON, sa femme, tous deux du bourg de Mansle, Jean THINON, procureur      au si&egrave;ge pr&eacute;sidial d'Angoul&ecirc;me, d'Angoul&ecirc;me, Henriette      THINON, fille majeure, Pierre THINON, sieur de Seruolle, du village de la      Fich&egrave;re, tous enfants du dit Pierre et de la d&eacute;funte
      </li>  
      <li>Sommation le 29 novembre 1705 par Jean AUGIER, Jean BOURIER et Pierre VIARD,      collecteurs de Tourriers aux habitants de celui-ci &agrave; propos de Fran&ccedil;ois      FOUGIERE habitant du village de Nitrat, de St-Amant, ancien habitant de la      Tourriers: Les habitants d&eacute;cident de biffer Fran&ccedil;ois FOUGIERE      du roolle de la paroisse
      </li>  
      <li>Sommation le 20 janvier 1706 par Pierre GUY, sieur de Bergerat?, de Chebrac,Fran&ccedil;ois      GORRAIN, boucher, Jean CYVADIER et Jean GUILLOTTEAU, collecteurs de Montignac      aux habitants de Montignac &agrave; propos d'Anne CHAPITEAU, veuve de Jacques      FUMEAU,notaire de Montignac
      </li>  
      <li>Nomination le 31 janvier 1706 des collecteurs de Villejoubert, &agrave;      savoir Pierre MALVAUD, Charles BUHERNE et Daniel BINAUD
      </li>  
      <li>Sommation le 2 f&eacute;vrier 1706 par Jean BONVALLET, Jean DUMOUSSEAU le      Jeune, Pierre BOUNNAMY et Pierre DE COULGEANT, collecteurs de la paroisse      de Jauldes aux habitants de celui-ci &agrave; propos d'une diminution d'imp&ocirc;ts
      </li>  
      <li>Transaction le 13 mars 1706 entre Jean CHAMBAUD, marchand, du village de      Chez Pouillat, de St-Angeau et Charles DANEDE, tanneur, de St-Etienne les      Montignac suite au testament de Genis GUY, marchand tanneur de Montignac en      faveur de Jeanne VODICHON, femme du dit CHAMBAUD
      </li>  
      <li>Inventaire le 8 avril 1706 de la communaut&eacute; de Catherine CANTIN,      veuve de Jacques BOUHIER suite &agrave; son CM avec Jean LURANT, laboureur,      tous de Vervant
      </li>  
      <li>Inventaire le 11 mai 1706 de la communaut&eacute; de Marie TRUTTAUD, veuve      de Jacques BOISSOT, du village de Fen&ecirc;tre de Tourriers suite &agrave;      son CM avec Pierre BOIS, sergent du duch&eacute; de la Rochefoucauld, du village      de Charves, de Jauldes, veuf d'Anne DUMOUSSEAU
      </li>  
      <li>Inventaire le 17 mai 1706 de la communaut&eacute; de Pierre BOIS, sergent      du duch&eacute; de la Rochefoucauld du village de Charves, de Jauldes, veuf      d'Anne DUMOUSSEAU et de Jean, Gabriel, Marie, Elisabeth, Jeanne et autre Marie      BOIS, ses enfants et de la dite DUMOUSSEAU suite &agrave; son CM pass&eacute;      avec Marie TRUTTAUD, veuve de Jacques BOISSOT, du village de Fen&ecirc;tre      de Tourriers
      </li>  
      <li>PV le 12 juillet 1706 pour Daniel SEGUIN, sieur de la Vervante d'une pi&egrave;ce      de terre sans servitude dans laquelle Charles DE MARCHOU, laboureur &agrave;      boeufs, du village du Tapis, aurait fait un chemin
      </li>  
      <li>Nomination le 19 septembre 1706 des collecteurs de Villejoubert, Jean DE      POUTIGNAT, sieur d'Amblecourt, Jean BOUREJOIS et Fran&ccedil;ois BOUYER, voiturier
      </li>  
      <li>Vente le 6 f&eacute;vrier 1707 d'une pi&egrave;ce de pr&eacute; par Jean      DEGAIL, laboureur &agrave; boeufs, de Coulonges &agrave; Jacques LAYDET, marchand,      du village du Marais, d'Amb&eacute;rac
      </li>  
      <li>Ferme le 5 mars 1707 du prieur&eacute; de Cellettes par Antoine DE COIGNET      DE MARCLOPT, conseiller et aumonier du roi, abb&eacute; commandataire de l'abbaye      de St-Amant de Boixe &agrave; Pierre OVY, sieur de Beaupr&eacute; et Toussaint      GIRAUD, sieur des Prasses?, marchand, demeurant au pont de Mansle, paroisse      de Fontclaireau
      </li>  
      <li>PV le 3 juin 1707 des batiments du prieur&eacute; de Vervant pour Jacques      DURAND, pr&ecirc;tre prieur et cur&eacute; de Lesignac, au nom de Ren&eacute;      LEMUSNIERE, doyen des conseillers du parlement de Paris et Jean AMIAUD, notaire      et procureur de Montignac, de St-Amant de Boixe
      </li>  
      <li>D&eacute;laissement le 7 juin 1707 par Jacques MARCHAIS, sieur de Champaigne,      veuf de Jacquette AURAIN &agrave; Jean MARCHAIS, sieur de la Jaquerie, son      fils et de la dite AURAIN, tous deux du village de la Fich&egrave;re, de St-Amant      de Boixe des biens issus de la succession de la dite AURAIN
      </li>  
      <li>PV le 11 juillet 1707 pour Pierre BARITTAUD, tonnelier de St-Amant de Nou&egrave;re      d'une maison acquise de Marie BOUNIN, Jean MARTIN, son fils et Marie BARITTAUD,      femme du dit Martin
      </li>  
      <li>PV le 13 juillet 1707 pour Pierre ROLLET, laboureur &agrave; bras d'une      maison &agrave; Villejoubert aquise de Jean PESTIS, marchand
      </li>  
      <li>Transaction le 21 juin 1707 entre Jean CATHALANY, Fran&ccedil;ois HERIARD,      prestre religieux proffaits de l'abbaye de St-Amant de Boixe, ordre de St-Benoit      et Baptiste BERNOU, pr&ecirc;tre cur&eacute; de Xambes suite &agrave; des      cierges prises par le dit BERNOU dans la sacristie de l'abbaye
      </li>  
      <li>R&eacute;siliation de testament le 25 juillet 1707 par Pierre MIGNOT dit      La Prime, laboureur &agrave; bras, de St-Amant de Boixe, veuf de Catherine      CHEVRIER. Son ancien testament indiquait que son fils Jean MIGNOT. Le testateur      d&eacute;sire donner une partie &agrave; Marie MIGNOT, femme de Pierre RESNAUD,      sa fille
      </li>  
      <li>Inventaire le 26 ao&ucirc;t 1707 de la communaut&eacute; de Claude MENACHAU,      tailleur d'habits, du village du Tapis de Montignac, veuf de Jeanne GASCHET,      Jean et Marie MENACHAU, ses enfants et de la dite GASCHET suite au CM dit      Claude avec Fran&ccedil;oise REDONT
      </li>  
      <li>Contrat d'apprentissage le 28 ao&ucirc;t 1707 du m&eacute;tier de cordonnier      par Jean GENAT, cordonnier &agrave; Jean TRUTTAUD, fils de Jean TRUTTAUD dit      Caput, marchand et Marguerite DUNEAU, tous de St-Amant de Boixe
      </li>  
      <li>Inventaire le 31 ao&ucirc;t 1707 de la communaut&eacute; avec de Pierre      GUERIN, tailleur d'habits de Xambes et de d&eacute;funte Jeanne? P(L)ANSON,      sa premi&egrave;re femme suite au CM du dit GUERIN avec Catherine BILLOCHON
      </li>  
      <li>Inventaire le 26 septembre 1707 de la communaut&eacute; de Jean CAROT, tournier      en bois, veuf d'Hilaire DULONG, du village du Tapis, de Montignac et Marguerite      et Marie CAROT, ses filles et de la veuve du dit DULONG suite au CM du dit      CAROT avec Anne GROS
      </li>  
      <li>Nomination le 20 novembre 1707 des collecteurs de l'enclave du Tapis, &agrave;      savoir Claude MENACHAUD et Fran&ccedil;ois BOISSOT
      </li>  
      <li>Vente le 22 novembre 1707 d'une pi&egrave;ce de terre par Louis REAUD &agrave;      Jean SALLAUMON, tous deux laboureurs &agrave; bras de Nanclars
      </li>  
      <li>Partage le 17 d&eacute;cembre 1707 des biens de d&eacute;funts Jean FOUCAUD      et Marie TIFFON entre Pierre FOUCAUD dit Merlet, Fran&ccedil;oise FOUCAUD,      veuve d'Etienne BALLUTAU, du village du Tapis, de Montignac, Louis FOUCAUD,      Marie FOUCAUD, sa femme, du village des Coussauds, de Champniers, Fran&ccedil;ois      CANTIN, Jacquette FOUCAUD, du village du Tapis, leurs enfants et gendres
      </li>  
      <li>Transaction le 23 d&eacute;cembre 1707 entre H&eacute;lie DUBOIS, sieur      de la Bernarde, du lieu de la Bernarde, de St-Amant de Boixe, Jean TRUTTAUD,      marchand, Marguerite DUNEAU, sa femme, de St-Amant de Boixe et Jean PESTIS,      marchand, de Villejoubert suite &agrave; une instance &agrave; propos d'une      pi&egrave;ce de terre
      </li>  
      <li>D&eacute;lib&eacute;ration le 28 d&eacute;cembre 1707 des habitants de la      paroisse de Tourriers &agrave; propos de la taille de Marie TRUTAUD, femme      de Pierre BOIS, veuve de Jacques BOISSOT
      </li>  
      <li>PV le 3 f&eacute;vrier 1708 d'une m&eacute;tairie au lieu de la Bernarde      pour Fran&ccedil;ois DUBOIS, sieur du Breuil, du village de la Bernarde, de      St-Amant de Boixe re&ccedil;ue de H&eacute;lie DUBOIS, sieur de la Bernarde,      son p&egrave;re
      </li>  
      <li>Reconnaissance le 1er mars 1708 par Michel TURLAYS, marchand et Catherine      AIGRON sa femme, h&eacute;riti&egrave;re de Pierre AIGRON, son p&egrave;re,      de Vouharte &agrave; Jean THINON, procureur au si&egrave;ge pr&eacute;sidial      d'Angoumois, d'Angoul&ecirc;me, aux droits de Pierre LOISEL, sieur de la Motte,      son oncle
      </li>  
      <li>Partage le 4 mars 1708 entre Pierre MIGNOT dit Laprime, laboureur, veuf      de Catherine CHEVRIER, Jean MIGNOT, laboureur, son fils, Pierre RENAUD, gallochier,      Marie MIGNOT, sa femme, fille et gendre du Pierre, tous de St-Amant de Boixe.      Le CM de Pierre RENAUD et Marie MIGNOT a &eacute;t&eacute; enregistr&eacute;      le 24 juin 1694 devant Amiaud l'a&icirc;n&eacute;
      </li>  
      <li>Partage le 29 mars 1708 des biens de vivante Jeanne BOUYER, veuve d'Antoine      QUANTIN dit Cadet avec Antoine QUANTIN, laboureur &agrave; bras, tous deux      de Xambes et Fran&ccedil;ois QUANTIN, laboureur &agrave; bras, du village      du Tapis, de Montignac, ses enfants et du dit feu Antoine
      </li>  
      <li>PV le 31 mars 1708 d'une maison pour Etienne AUDOIN, marchand, de St-Amant      de Boixe contre Marguerite DEGAIL, Fran&ccedil;ois Louis GAUTHIER et Marie      AUDOIN, sa femme
      </li>  
      <li>PV le 14 ao&ucirc;t 1708 pour Jacques BIARD, laboureur &agrave; boeufs,      du village de Chez Florant, de Rouillac du d&eacute;gat commis par les vaches      et boeufs du dit BIARD dans un bois appartenant &agrave; Cybard PELLETAN
      </li>  
      <li>Sommation le 16 d&eacute;cembre 1708 par Colas GASTINAUD, Daniel FRADONNET,      Antoine BERGERAT et Louis QUANTIN, collecteurs de Xambes aux habitants de      celui-ci &agrave; propos de Jean BOISSEAU, soi-disant archer en la mar&eacute;chauss&eacute;e      d'Angoumois
      </li>  
      <li>D&eacute;lib&eacute;ration le 21 d&eacute;cembre 1708 des habitants de l'enclave      du Tapis &agrave; propos du &quot;r&eacute;rollement&quot; dut dit LAVAUD
      </li>  
      <li>Partage le 31 d&eacute;cembre 1708 des biens de d&eacute;funt Fran&ccedil;ois      AUBIN et Denise AUDIGIER entre Fran&ccedil;ois FOUGIERE, laboureur &agrave;      bras, Marguerite AUBIN, sa femme, Jacques BOUQUINET, Anne AUBIN, sa femme,      les dites AUBIN, filles des dits AUBIN et AUDIGIER, tous du village de Nitrat,      de St-Amant de Boixe
      </li>
    </ul>
    <p>2E4127:
    </p>
    <ul>  
      <li>Accord le 2 janvier 1709 entre Louis FOUCAUD, Marie FOUCAUD, sa femme, Pierre      FOUCAUD dit Merlit?, p&ecirc;cheur, Fran&thorn;oise FOUCAUD, veuve d'Etienne      BALLUTEAU, Fran&thorn;ois QUENTIN, faisant pour Jacquette FOUCAUD, sa femme,      Fran&ccedil;ois BOUFFANAIS, mari de Marie FOUCAUD, tous du village du Tapis,      de Montignac-Charente &agrave; propos du partage des biens de d&eacute;funts      Jean FOUCAUD et Marie TIFFON, leurs p&egrave;re et m&egrave;re, beau-p&egrave;re      et belle-m&egrave;re
      </li>  
      <li>Partage le 20 janvier 1709 des biens de Jeanne BOUYER, veuve d'Antoine QUANTIN      dit Cadet, de Xambes entre Antoine QUANTIN, de Xambes et Fran&ccedil;ois QUANTIN,      laboureur &agrave; bras, du village du Tapis, de Montignac, ses enfants et      du dit feu Antoine
      </li>  
      <li>Transaction le 4 mars 1709 entre Pierre VEILLON, farinier des moulins banaux      de Montignac et Marie VIVIER, du village du Tapis, de Montignac. La ditte      VIVIER est grosse et enceinte des oeuvres du dit VEILLON
      </li>  
      <li>Cession le 1er avril 1709 de seize sols de rente seconde par Jean ROUHET      dit La Garde, laboureur &agrave; Pierre NADAUD, sergent royal, tous deux de      St-Amant de Boixe
      </li>  
      <li>PV le 29 ao&ucirc;t 1709 de l'&eacute;tat du chambre pour Fran&ccedil;ois      DUBOIS, sieur du Breuil et H&eacute;lie DUBOIS, sieur de la Bernarde, son      p&egrave;re
      </li>  
      <li>Vidimus de procuration le 17 septembre 1709 par Fran&ccedil;ois Duc DE LA      ROCHEFOUCAULD, prince de Marcillac, pair et grand veneur de France, chevalier      des ordres du roi, grand ma&icirc;tre de la garde robe de sa majest&eacute;,      demeurant en son h&ocirc;tel &agrave; Paris &agrave; Fran&ccedil;ois FAUR&Eacute;,      sieur de Grand Maison, d'Aigre. La procuration porte sur les droits des terres      de la principaut&eacute; de Marcillac 
      </li>  
      <li>PV le 2 d&eacute;cembre 1709 de certains arbres et noyers morts par la rigueur      de l'hiver pour Fran&ccedil;ois DUBOIS, sieur du Breuil, du village de la      Bernarde, de St-Amant de Boixe
      </li>  
      <li>Transaction le 11 d&eacute;cembre 1709 entre Pierre BRISSON, laboureur &agrave;      bras et Antoinette GODICHON, sa femme et Jean GODICHON, laboureur &agrave;      bras, tous de Xambes &agrave; propos de la succession de Marie FOUCAUD, m&egrave;re      d'Antoinette GODICHON. D&eacute;funt Jacques GODICHON est p&egrave;re des      dits GODICHON
      </li>  
      <li>Transaction le 16 janvier 1710 entre Daniel ROUHET, laboureur, Anne BOUFFANAIS,      sa femme, de St-Amant de Boixe et Fran&ccedil;ois TOURNIER, voiturier de Villejoubert      suite &agrave; une paire de boeufs non pay&eacute;e par le dit ROUHET au dit      TOURNIER
      </li>  
      <li>D&eacute;lib&eacute;ration le 20 janvier 1710 entre les habitants de Vervant      &agrave; propos de la taille
      </li>  
      <li>Vente le 29 janvier 1710 par Pierre et Jean MALLOUERE, fr&egrave;res, &agrave;      Jean ALLINAUD, charpentier, tous du village du Ravaud, d'Aussac des biens      d'H&eacute;lie MALLOIRE et Philippe ALLINAUD, p&egrave;re et m&egrave;re des      dits MALLOUERE 
      </li>  
      <li>Vente le premier mars 1710 d'une pi&egrave;ce de chenevaud par Jean DE LAMASCHIERE      le jeune, laboureur &agrave; bras de St-Amant de Boixe &agrave; Jean HESRIARD,      sieur de Chenescot, juge s&eacute;n&eacute;chal et assesseur de la baronnie      de Montignac, d'Aussac
      </li>  
      <li>PV le 15 avril 1710 pour Charles GASCHET, laboureur &agrave; boeufs, du      village de la Fich&egrave;re, de St-Amant de Boixe de l'&eacute;tat d'une      maison acquise de Jeanne LESERF, veuve de Mathurin MESNARD
      </li>  
      <li>Transaction le 4 juin 1710 entre Antoine BOISRAME, charpentier, du village      de Grosville, de St-Cybardeaux et Henri ROUSSEAU, marchand de St-Cybardeaux
      </li>  
      <li>PV le 7 juillet 1710 pour Charles FAULE, laboureur, d'Aussac, fermier judiciaire      des biens de d&eacute;funt Charles DE LA GREZE, &eacute;cuyer sieur de Vezeau      des biens de celui-ci
      </li>  
      <li>Accord le 8 septembre 1710 entre Pierre BERTHON, laboureur &agrave; boeufs,      du village de Terrebourg, de St-Angeau et Jean BERTHON, son fils, du village      de Terrebourg, Fran&ccedil;ois DOTTEAU, du village de Chez Baige, Pierre ROBIN,      du village de Chez Pouillat, Fran&ccedil;ois DE CLERFEUILLE, du village du      Chesnet, de St-Ciers &agrave; propos de la succession de Pierre BERTHON, fils      du dit Pierre mari&eacute; avec Antoinette DE LA SOTTIERE, belle-soeur du      dit DOTTEAU
      </li>  
      <li>D&eacute;laissement de meubles le 20 septembre 1710 par Jean GUILHOT, perruquier,      l&eacute;gal administrateur de Jacques GUILHOT, son fils et Anne GUILHOT,      veuve d'Olivier MAIGNEN, fille du dit Jean, les dits Jacques et Anne, h&eacute;ritiers      de d&eacute;funt Jean DESBLAT, leur grand oncle, de Tusson &agrave; Jean BRUMEAU,      marchand et Marie PERSEAU, sa femme, de St-Etienne les Montignac
      </li>  
      <li>Transaction le 27 septembre 1710 entre Jean GUILHOT, perruquier, l&eacute;gal      administrateur de Jacques GUILHOT, son fils, Anne GULHOT, veuve d'Olivier      MAIGNEN, fille du dit Jean, les dits Jacques et Anne, h&eacute;ritiers de      d&eacute;funt Jean DESBLAT, leur grand oncle, de Montignac et Jean BRUMAUD,      marchand, Marie PERSAUD, sa femme, de St-Etienne les Montignac, l&eacute;gataire      des meubles du dit DESBLAT
      </li>  
      <li>Transport le 15 octobre 1710 d'une maison par Pierre DE LAMASCHIERE, laboureur      &agrave; bras et Marie MORAND &agrave; Pierre GUILLOTEAU, sieur de la Trouve,      tous de St-Amant de Boixe
      </li>  
      <li>Vente le 22 octobre 1710 d'une pi&egrave;ce de terre par Fran&ccedil;ois      SUDRE et Nicolas QUANTIN, laboureurs &agrave; bras, Jean QUENTIN et Marie      BRUNAUD, sa femme, Fran&ccedil;ois MARTINIER et Jeanne QUENTIN, sa femme,      tous de Vervant &agrave; Pierre THINON, sieur des Vouthes, de Vervant 
      </li>  
      <li>Vente le 29 novembre 1710 par Pascal BALLOTTEAU,laboureur &agrave; bras      et Madeleine CORBRAS, sa femme, du Maine de Boixe &agrave; Jean MALLOIRE,      laboureur &agrave; bras et Jeanne CORBRAS, sa femme, du village du Ravaud,      d'Aussac des biens &eacute;chus de d&eacute;funts Baptiste CORBRAS et Cl&eacute;mence      FOUILLADE, p&egrave;re et m&egrave;re des dites CORBRAS 
      </li>  
      <li>Sommation le 12 juin 1711 par Pierre PRIOLLAUD, marchand saulnier, du village      de Bois Raymond, de St-Cybardeaux &agrave; Marguerite BAILLIF, veuve, du village      de la Chevallerie, de St-Amant de Nou&egrave;re d'accepter son offre
      </li>  
      <li>Sommation le 16 juillet 1711 par Pierre PRIOLLAUD, marchand voiturier, du      village de Bois Raymond, de St-Cybardeaux &agrave; Marguerite BAILLIF, veuve,      du village de la Chevallerie, de St-Amant de Nou&egrave;re d'accepter son      offre
      </li>  
      <li>Echange le 28 octobre 1711 d'une bassecourt contre un bout de terre entre      Daniel ROUHET, laboureur, Anne BOUFFANAIS, sa femme et Jacques PELLETTAN,      laboureur &agrave; boeufs, tous de St-amant de Boixe
      </li>  
      <li>Contrat d'apprentissage le 9 janvier 1712 du m&eacute;tier de mar&eacute;chal      par Jean GUILLOTAU, mar&eacute;chal &agrave; Jean THOUREAU, fils de Jean,      marchand, tous de Montignac-Charente
      </li>  
      <li>Inventaire le 16 janvier 1712 de la communaut&eacute; de Jean CHESNE, laboureur,      de Vouharte, veuf de Marie BANLIN et de Catherine CHESNE, sa fille et de la      ditte BANLIN suite au CM du dit CHESNE avec Marie BERTRAND
      </li>  
      <li>Sommation le 9 mars 1712 par Fran&ccedil;ois DUBOIS, sieur du dit nom, de      la Bernarde, de St-Amant &agrave; Pierre GERVAIS, marchand de Champagne Le      Sec d'aller go&ucirc;ter et payer le vin qu'il avait promis acheter
      </li>  
      <li>Transaction le 20 juillet 1712 entre Etienne MESLIER, laboureur &agrave;      bras et Louis MORAND, tailleur d'habits, Catherine MANGON, sa femme, Jean      MORAND, leur fils, Pierre THOUREAU, Catherine MORAND, sa femme, tous de St-Amant      de Boixe suite &agrave; l'instance criminelle intent&eacute;e par le dit MESLIER      contre les dits MORAND pour raison des exc&egrave;s commis en sa personne      (2 exemplaires)
      </li>  
      <li>PV le 27 octobre 1712 des d&eacute;gats dans une pi&egrave;ce de terre pour      Fran&ccedil;ois HERIARD, sieur de Prefontaine, avocat au parlement faisant      pour Jean HERIARD, juge s&eacute;n&eacute;chal et assesseur du dit Montignac,      son p&egrave;re contre certains habitants de St-Amant
      </li>  
      <li>Transaction le 31 septembre 1712 entre Daniel THOUREAU, laboureur &agrave;      bras, Marie GALLOPIN, sa femme et Pierre THOUREAU, laboureur &agrave; bras,      mari de Catherine MORAND, leur fils, tous de St-Amant de Boixe suite &agrave;      un probl&egrave;me &quot;financier&quot;
      </li>  
      <li>D&eacute;claration de lieux le 29 novembre 1712 par Pierre GUILLOTEAU, sieur      de la Trouve &agrave; Antoine COUGNET, conseiller et aumonier du roi, abb&eacute;      commandataire de l'abbaye de St-Amant de Boixe
      </li>  
      <li>Transaction le 30 novembre 1712 entre Jean BOURGEAUD, mari de Jeanne BALLUTAUD,      fille de d&eacute;funt Guillaume BALLUTAUD, Fran&ccedil;ois BOUFFANAIS, les      dits BALLUTAUD et BOUFFANAIS, collecteurs et assoyeurs de l'enclave du Tapis      et les habitants de la dite enclave suite aux abus commis dans la faction      de leur roolle par les dits BALLUTAUD et BOUFFANAIS
      </li>  
      <li>Accord le 5 f&eacute;vrier 1713 entre Jean AMIAUD l'a&icirc;n&eacute;, notaire      et procureur au si&egrave;ge de la baronnie de Montignac et Daniel ROUHET,      laboureur, tous deux de St-Amant de Boixe suite &agrave; une palisse arrach&eacute;e
      </li>  
      <li>Transaction le 15 f&eacute;vrier 1713 entre Claude MENACHAUD, tailleur d'habits,      veuf de Jeanne GASCHET et Mathieu TASTON, laboureur &agrave; boeufs, mari      de Charlotte GASCHET, tous du village des Boyteaux, de Montignac suite au      partage des biens de d&eacute;funt Jean GASCHET, p&egrave;re de dites GASCHET      et de Marie VINATIER, m&egrave;re de la ditte Jeanne
      </li>  
      <li>Vente le 19 mai 1713 d'une petite pi&egrave;ce de terre et d'un chetel de      vaches par Nicolas QUENTIN, laboureur, fils de d&eacute;funt Fran&ccedil;ois      QUENTIN dit Longesme et de Catherine QUENTIN, veuve de Pierre BERNICHOT, sa      soeur, de Vervant &agrave; Jean AMIAUD l'a&icirc;n&eacute;, notaire et procureur      au si&egrave;ge de la baronnie de Montignac, de St-Amant de Boixe. Il est      question de biens de d&eacute;funte Andr&eacute;e BOUFFANAIS
      </li>  
      <li>PV le 20 mai 1713 pour Pierre GUY, sieur de Bergerat?, de Chebrac de deux      journaux de vigne contre Gabriel MORAND, laboureur, de St-Amant qui n'aurait      pas labour&eacute; les terres
      </li>  
      <li>Sommation le 20 mai 1713 par Pierre GUILLOTEAU, sieur de la Trouve &agrave;      Jean MIGNOT dit Petas, tisserand, de St-Amant de Boixe, afin que le dit MIGNOT      fasse r&eacute;parer une muraille
      </li>  
      <li>Partage le 23 juillet 1713 entre Uriel MENACHAUD, veuf de Marguerite GEOFFRION,      faisant pour Pierre, son fils et de la dite feu, Jean MENACHAUD, Fran&ccedil;ois      MENACHAUD, mari de Jeanne BOISSOT, tous de Xambes. Les CM d'Uriel et Marguerite      GEOFFRION, de Jean MENACHAUD et Catherine GEOFFRION ont &eacute;t&eacute;      enregistr&eacute;s le 26 mai 1689 devant Chardon, notaire &agrave; Marcillas.      Les parents des dits Uriel, Jean, Hilaire sont d&eacute;funts Bernard MENACHAUD      et Michelle CONDAT 
      </li>  
      <li>Transaction le 31 juillet 1713 entre Jean CHAMBAUD, marchand du village      des Combes, de Coulgens et Pierre MAUDET, tisserand, de Montignac suite &agrave;      un probl&egrave;me d'hypot&egrave;ques
      </li>  
      <li>Sommation le 11 ao&ucirc;t 1713 par Marc GOURDIN, ecuyer chanoine de l'&eacute;glise      cath&eacute;drale d'Angoul&ecirc;me, du logis noble du lieu de la Barre, de      Villejoubert &agrave; Pierre MAUDET, tisserand, de St-Amant de Boixe d'accepter      son offre de retrait f&eacute;odal
      </li>  
      <li>Retrocession le 22 octobre 1713 par Pierre RESNAUD, laboureur &agrave; bras      &agrave; Jean MIGNOT dit Capory, laboureur &agrave; bras, tous deux de St-Amant      de Boixe de 58 livres dues &agrave; Marie MIGNOT, femme du dit RESNAUD par      Pierre MIGNOT et Agnette BARADAUD, sa femme
      </li>  
      <li>Partage le 12 janvier 1714 de la succession de Louise BOUYER entre Fran&ccedil;ois      BOUHIER dit le Fourbisseur, de Villejoubert et Paul GRASSEAU, marchand, veuf      de Marie BOUYER, d'Angoul&ecirc;me
      </li>  
      <li>Sommation le 28 janvier 1714 par Pierre BOIS, Cl&eacute;ment BOIS, Charles      CORBRAS et Jean RAYMOND, collecteurs de Jauldes aux habitants de celui-ci      &agrave; propos de l'imposition de Samuel BRAUT, sieur de Monpl&eacute;sir
      </li>  
      <li>Reconnaissance de dette le 10 mars 1714 par Pierre DELAMACHIERE, laboureur      et Marie MORAND, sa femme &agrave; Pierre GUILLOTEAU, sieur de la Trouve
      </li>  
      <li>Transaction le 10 mars 1714 entre Pierre PRUDHOMME, marchand, faisant pour      Pierre PRUDHOMME, marchand, son p&egrave;re, du village de Villorioux, de      St-Groux et Jean DESCLIES, laboureur &agrave; bras, faisant pour Vincent MOTTAIX,      son beau-p&egrave;re, Henri PERAUD, faisant pour Jean PERAUD dit Vallon, son      p&egrave;re, Arnaud et Louis DENIS, fr&egrave;res, Jean THOURBOURAUD, faisant      pour Jeanne ROUHET, sa m&egrave;re, Pierre PENOT, laboureur &agrave; boeufs      tous de Cellettes suite &agrave; un proc&egrave;s &agrave; propos de la succession      de Jean DUZAYS
      </li>  
      <li>Cession le 18 avril 1714 de 20 livres 10 sols par Jean TRUTAUD dit Caput      &agrave; Pierre NADAUD, sergent royal et Martial NADAUD, mar&eacute;chal,      son fr&egrave;re, collecteurs de St-Amant, tous de St-Amant de Boixe
      </li>  
      <li>PV le 26 avril 1714 d'une maison pour Jacques AMIAUD, notaire royal de Montignac      contre Jean TOURAUD dit Chesnevert
      </li>  
      <li>Cession le 3 mai 1714 par Jean HERIARD, sieur du Chesnescot?, juge s&eacute;n&eacute;chal      de la baronnie et chatellanie de Montignac, veuf de Marie PIGORNET et Fran&ccedil;ois      HERIARD, sieur de Pr&eacute;fontaine, avocat en la cour, son fils &agrave;      Fran&ccedil;ois DUBOIS, sieur du dit nom et Jeanne HERIARD, sa femme, du village      de la Bernarde, de St-Amant de Boixe en r&eacute;glement de la dot de la dite      HERIAD, fille du dit HERIARD et de la dite PIGORNET
      </li>  
      <li>Inventaire le 10 juillet 1714 des biens de d&eacute;funt Jean GOUNAIN, pour      sa veuve Fran&ccedil;oise CHAMBLAND, du village de Chez Quillet, de Jauldes,      Pierre, du villages des Combes, de Coulgens et Guillaume GOUNAIN, du village      de Chez Quillet, ses enfants, Raymond et Jean GOUNAIN, ses autres enfants
      </li>  
      <li>Ratification le 15 juillet 1714 par Charlotte GASCHET d'un transport par      Mathieu TASTON son mari &agrave; Claude MENACHAUD, tailleur d'habits, tous      du village de Tapis, de Montignac
      </li>  
      <li>PV le 14 ao&ucirc;t 1714 pour Jean PESTIS, marchand de Villejoubert, d'une      pi&egrave;ce de terre que Pierre DUMOUSSEAU, Jean et Antoine DUMOUSSEAU, ses      enfants, Anne DAVID, femme du dit Jean ont &quot;anticip&eacute; par la prise      de la largeur d'un seillon sur sa terre&quot;
      </li>  
      <li>Sommation le 22 ao&ucirc;t 1714 par Jean et Philippe FOUCHIER, fr&egrave;res,      faisant tant pour eux que pour Elizabeth FOUCHIER, sa soeur, du village de      Chez Pouillat, de St-Angeau &agrave; Marie ROUGIER, veuve de Jean POUILLAT      l'a&icirc;n&eacute;, du village de Villars, de St-Ciers &agrave; propos de      gerbes de bl&eacute;
      </li>  
      <li>Sommation le 9 septembre 1714 par Louis TEXIER, syndic et greffier de Tourriers      aux habitants de celui-ci afin qu'ils nomment les collecteurs de l'ann&eacute;e      1715. David LHERIAUD, Pierre GILLET et Jean PIFFRE ont &eacute;t&eacute; nomm&eacute;s
      </li>  
      <li>Partage le 11 novembre 1714 de la succession de d&eacute;funts Antoine BERTRAND      et Fran&ccedil;oise BLANCHON entre Pierre BERTRAND, laboureur de Villognon,      Pierre BOUYER, laboureur, Catherine BERTRAND, sa femme, de Vervant, leurs      enfants
      </li>  
      <li>Reconnaissance le 3 novembre 1715 par Jacques et Jean NOUGIER, laboureur      &agrave; bras p&egrave;re et fils, de Villejoubert &agrave; Simone DUPERRAT,      veuve de Fran&ccedil;ois THOURNIER, belle-m&egrave;re du dit Jean. Simone      DUPERRAT r&egrave;gle 242 livres restante de dot de Marie THOURNIER, femme      du dit Jean
      </li>
    </ul>    
    <p>2E4128:</p> 
<ul>
  <li>Transaction le 9 avril 1715 entre Pierre GUERIN, tailleur d'habits, Marguerite 
    BILLOCHON sa femme, veuve de Jean BOUQUET, Pierre QUILLET, p&ecirc;cheur, 
    Adrienne BOUQUET, sa femme, Louis, Marie et Marguerite BOUQUET, enfants de 
    d&eacute;funt Jean BOUQUET et de la ditte BILLOCHON, tous de Xambes &agrave; 
    propos de la succession du dit Jean BOUQUET</li>
  <li>Transaction le 2 juin 1715 entre Pierre et autre Pierre GIRAUD, p&egrave;re 
    et fils, laboureur &agrave; bras, de St-Amant de Boixe et Jean PLEXAIS, laboureur 
    &agrave; boeufs, Jacquette DELAMASCHIERE, sa femme, fille de d&eacute;funts 
    Pierre DE LA MASCHIERE et Suzanne PESRAUD, du village du Tapis, de Montignac 
    &agrave; propos d'arentements faits par les dits DE LA MASCHIERE et PESRAUD. 
    La dite PESRAUD a &eacute;t&eacute; mari&eacute;e en secondes noces avec le 
    dit Pierre GIRAUD p&egrave;re</li>
  <li>Inventaire le 6 juin 1715 des biens de Jean HERIARD, sieur de Chenescot, 
    juge s&eacute;n&eacute;chal et assesseur de la baronnie de Montignac et Fran&ccedil;ois 
    HERIARD, sieur de Pr&eacute;fontaine, licenci&eacute; en lois, avocat au parlement, 
    d'Aussac suite contrat de mariage du Sieur de Pr&eacute;fontaine avec Anne 
    FAURE du 27 mai 1715 re&ccedil;u Amiaud</li>
  <li>Transaction le 10 juillet 1715 entre Jean NADAUD, laboureur &agrave; bras, 
    mari de Marguerite GIBERTAUD et Jean BOUYER, laboureur, fils d'autre Jean 
    BOUYER, mar&eacute;chal, mari de Ren&eacute;e PARTEAU, tous de Villognon suite 
    au proc&egrave;s &agrave; propos d'arbres appartenant au dit NADAUD coup&eacute;s 
    par le dit BOUYER</li>
  <li>Transaction le 14 juillet 1715 entre Pierre AMIAUD, sieur de Grand Champ, 
    veuf de Marie GONIN, de St-Amant de Boixe et Simone DUPERAT, veuve de Fran&ccedil;ois 
    THOURNIER, de Villejoubert suite &agrave; un jugement rendu le 25 janvier 
    1710 &agrave; Montignac &agrave; propos d'une d&eacute;nontiation d'hypot&egrave;que 
    du dit AMIAUD contre le dit THOURNIER</li>
  <li>Accord le 31 juillet 1715 entre Jean BINAUD dit Vert?, laboureur &agrave; 
    bras, veuf de Marie SEGUIN, remari&eacute; avec Marguerite GALLOPIN et Fran&ccedil;ois 
    BINAUD, laboureur &agrave; bras, son fils, tous deux de St-Amant de Boixe 
    &agrave; propos du partage des biens des la dite SEGUIN</li>
  <li>D&eacute;lib&eacute;ration le 10 novembre 1715 des habitants de Montignac 
    et procuration &agrave; Philippe BALLET pour traiter &quot;du mauvais &eacute;tat 
    des affaires et des abus qui s'y commettent&quot;</li>
  <li>Transaction le 10 novembre 1715 entre Jacques POUPARD, laboureur &agrave; 
    boeufs, du village des Courauds, du Maine de Boixe et Jacques MALLET, tailleur 
    d'habits, Marie POUPARD, sa femme et fille du dit POUPARD et de d&eacute;funte 
    Ren&eacute;e ROBERT, de Nanclars &agrave; propos de la succession de la ditte 
    ROBERT</li>
  <li>Inventaire le 28 novembre 1715 des biens de Louis TEXIER, de Tourriers pour 
    Louise BARRAUD, sa veuve (31 pages)</li>
  <li>Inventaire le 11 f&eacute;vrier 1716 de la communaut&eacute; de Fr&eacute;d&eacute;ry 
    FRAIGNAUD, laboureur de Xambes et Jeanne GAUTHIER, sa femme suite au CM de 
    Philippe MAURAS avec Catherine DELABORDE, sa ni&egrave;ve du 28 janvier re&ccedil;u 
    m&ecirc;me notaire que ces pr&eacute;sentes</li>
  <li>Sommation le 8 mars 1716 par Michel GORRAIN, sieur de l'Isle, Pierre THINON, 
    Mathieu ANDRE et Etienne BOUYER, assoyeurs et collecteurs de Vouharte aux 
    habitants de celui-ci &agrave; propos de divers contribuables de la ditte 
    paroisse</li>
  <li>Accord le 9 mai 1716 entre Antoine CONSTANTIN, marchand, Jeanne CONSTANTIN, 
    sa soeur et Louis CHAMBAUD, laboureur &agrave; boeufs, Jean et Jacques CHAMBAUD, 
    laboureurs, ses enfants, tous du village du Caput de Sigogne, de Coulgens. 
    Les dits CHAMBAUD auraient commis des violences et des voies de fait sur les 
    dits CONSTANTIN qui aurait donn&eacute; lieu &agrave; instance criminelle 
    devant le juge de Montignac</li>
  <li>Transaction le 28 juin 1716 entre Nicolas GASTINAUD, laboureur &agrave; 
    boeufs, Marie GROS, sa femme, Marie, Catherine et Anne GASTINAUD, leurs enfants 
    et Jean DELABORDE, laboureur &agrave; bras, fils de Jean, tous de Xambes suite 
    aux injures de &quot;puttins&quot; dites par le dit DELABORDE, contres les 
    dittes GROS et GASTINAUD</li>
  <li>Transaction le 20 septembre 1716 entre Pierre MASSOUNET le jeune, laboureur 
    &agrave; bras, Marie BERTHOUNAU, sa femme et fille d'Antoine BERTHOUNAU et 
    Fran&ccedil;oise BUHERNE et Pierre et Fran&ccedil;ois MALVAUD, fr&egrave;res, 
    laboureurs &agrave; bras, tous de Villejoubert &agrave; propos du desistement 
    de la moiti&eacute; d'une grange. Fran&ccedil;oise BUHERNE a &eacute;t&eacute; 
    mari&eacute;e avec Louis TEXIER</li>
  <li>Transaction le 21 f&eacute;vrier 1717 entre Pierre AMIAUD, notaire, Fran&ccedil;ois 
    MALLET, notaire et procureur de Montignac Charente, Pierre BOUNIN, fermier 
    des revenus du corps principal de l'abbaye de St-Amant et Jean BOUJAUD, Jean 
    MIGNOT dit La Grand Font, Etienne GAUTRAUD, laboureur &agrave; bras, Marguerite 
    CHEVRIER, tous de St-Amant de Boixe &agrave; propos du payement de droit de 
    disme sur une vendange</li>
  <li>D&eacute;lib&eacute;ration le 24 f&eacute;vrier 1717 des habitants de Vervant 
    &agrave; propos du &quot;derosllement&quot; (taille) de Pierre THINON, sieur 
    des Vouthes</li>
  <li>Inventaire le 2 mars 1717 des biens de d&eacute;funts Fran&ccedil;ois BONNET 
    et Jeanne COMPAIN, du village de Vadalle, d'Aussac pour Louis BONNET, marchand, 
    tuteur et curateur aux personnes et aux biens de leurs enfants</li>
  <li>Vente le 24 f&eacute;vrier 1718 de deux pi&egrave;ces de pr&eacute; par 
    Jean BESNAUD, du Pont d'Agris, Jaimaud et Etienne BESNAUD, de Villejoubert, 
    Pierre MIGNOT, charpentier, mari de Marie BESNAUD, de St-Amant de Boixe, h&eacute;ritiers 
    de Paul BESNAUD leur p&egrave;re et beau-p&egrave;re &agrave; Jean PESTIS, 
    marchand de Villejoubert, h&eacute;ritier de Fran&ccedil;ois PESTIS, son oncle</li>
  <li>Transaction le 12 juin 1718 entre Louis BONNET, tuteur et curateur aux personnes 
    et aux biens des enfants mineurs de d&eacute;funts Fran&ccedil;ois BONNET 
    et Jeanne COMPIN et Jean NADAUD, marchand faisant pour lui et son fils et 
    d&eacute;funte Marguerite COMPIN, tous du village de Vadalle, d'Aussac. Jeanne 
    SAUVAGE, bisa&iuml;eulle des mineurs est mentionn&eacute;e (23 pages)</li>
  <li>Transaction le 13 septembre 1718 entre Jacques AMIAUD, sieur des Ranthes, 
    notaire royal du lieu noble de la Barre, de Villejoubert et Jean BAUD dit 
    la Routhe, laboureur &agrave; bras, Jacques DUBOIS, p&ecirc;cheur, Jean RAVEAU, 
    laboureur &agrave; boeufs, de Vouharte suite &agrave; une cr&eacute;ance du 
    dit AMIAUD sur le dit BAUD. Les dits DUBOIS et RAVEAU sont commissaires des 
    biens du dit BAUD</li>
  <li>Transaction sur proc&egrave;s le 23 septembre 1718 entre No&euml;l SIMON, 
    farinier, du moulin des petits champs, de Rouillac et Fran&ccedil;ois IMBERT, 
    tisserand de St-Cybardeaux &agrave; propos de la pension de Marie COLLAS, 
    petite fille du dit IMBERT nourrie par le dit SIMON</li>
  <li>Partage le 21 juin 1719 des biens de d&eacute;funts Fran&ccedil;ois AMIAUD 
    et Fran&ccedil;oise GODICHON, entre Louis AMIAUD, laboureur &agrave; boeufs, 
    Madeleine BOUHIER, sa femme, subrog&eacute;e aux droits de Fran&ccedil;oise 
    AMIAUD, veuve de Pierre BOUYER, sa belle-soeur, Pierre HURAND et Hilaire AMIAUD, 
    tous de Xambes, leurs enfants</li>
  <li>Transaction sur proc&egrave;s le premier juillet 1719 entre Michel BRIAND, 
    du village de la Gaschi&egrave;re et Jean JAY, du village de Lign&egrave;re, 
    marchands de Rouillac, cessionnaires et d&eacute;missionnaires de Fran&ccedil;ois 
    ROY, veuf de Louise POINTEAU, marchand, leur beau-p&egrave;re, cessionnaires 
    aussi de Pierre CONTE, Antoinette FOURNIER, sa femme et de Marie FOURNIER, 
    veuve de Jean NAVARRE et Jacques DE LAPLANCHE, chirurgien et Jean DHIERSAT, 
    marchands de Rouillac, cessionnaires de Pierre DE ROUSSINNE et Antoinette 
    POINTEAU, sa femme</li>
  <li>Transaction le 12 juillet 1719 entre Jean RAYMOND, cabaretier, d'Aussac, 
    adjudicataire de la d&icirc;me royale et Fran&ccedil;ois HERIARD, sieur de 
    Pr&eacute;fontaine, d'Aussac &agrave; propos du bail judiciaire d'Aussac</li>
  <li>Compte le 10 ao&ucirc;t 1719 entre Jean GALLOPIN, sieur de Boisrousseau 
    et Pierre BARRADAUD, laboureur &agrave; bras, Marie GALLOPIN, sa femme, Louis 
    RAVON, laboureur &agrave; bras, Marie CLEMANT, sa femme, fille de d&eacute;funts 
    Fran&ccedil;ois CLEMANT et Jeanne GALLOPIN, tous de St-Amant de Boixe &agrave; 
    propos des biens de d&eacute;funts Jean GALLOPIN et Marie PERAUD, leurs p&egrave;re 
    et m&egrave;re</li>
  <li>Inventaire le 23 janvier 1720 de la communaut&eacute; Marguerite VAUVIELLE, 
    veuve de Pierre BOURGON, du village de la Grange, d'Aussac et Marguerite BOURGON 
    suite au CM pass&eacute; le 14 janvier chez ce m&ecirc;me notaire entre la 
    ditte VAUVIELLE et Raymond GOUNIN, laboureur du bourg d'Aussac</li>
  <li>Cession le 21 avril 1720 par Guillaume IRVOIX, sieur de Landorle?, faisant 
    pour lui et Antoine IRVOIX, sieur de Fonrenou, son fr&egrave;re, du faubourg 
    St-Martin, d'Angoul&ecirc;me &agrave; Jean DUTILLET, sieur des Rousseli&egrave;res, 
    lieutenant d'une compagnie de milice bourgeoise d'Angoul&ecirc;me des biens 
    issus de d&eacute;funt Jacques IRVOIX, sieur de Landorle? et Marguerite MAURIN, 
    leurs p&egrave;re et m&egrave;re (20 pages)</li>
  <li>Compte le 24 juin 1720 entre Fran&ccedil;ois TEXIER, marchand, fils de d&eacute;funt 
    Louis TEXIER, de Tourriers, Jacques GUERAUD?, laboureur, faisant pour Marie 
    ALLARD, sa femme, fille de d&eacute;funt Jean ALLARD, du village de Bouffanais, 
    de Tourriers, Louis PERROYS, laboureur, faisant pour Marie BLANCHARD, sa femme, 
    Nicolas BERTRAND, aussi laboureur, Marie PERROYS, sa femme, du village de 
    Bouffanais et Marie PERROYS, du village de la Pigeardi&egrave;re, d'Anais, 
    les dits PERROYS, enfants de d&eacute;funt Jacques PERROYS</li>
</ul>
<p>2E4129:</p>
<ul>
  <li>Transaction le 12 mars 1721 entre Pierre DE MARCHOU dit Drouhet, laboureur 
    &agrave; bras, fils de d&eacute;funts Pierre DE MARCHOU et Antoinette DROUHET, 
    et Marie BOUNICEAU, veuve de feu Pierre AMELLINE, tous de St-Amant de Boixe 
    &agrave; propos d'une instance pendante par le dit DE MARCHOU contre Anne 
    ARCHAT, veuve de Pierre NADAUD . Le dit DE MARCHOU est n&eacute; le 18 mars 
    1689</li>
  <li>Transaction le 11 avril 1721 entre Guillaume COURTIN, charpentier et Pierre 
    GENAT, aussi charpentier, tous de Vouharte suite une instance pendante du 
    si&egrave;ge de Vouharte par le dit COURTIN contre le dit GENAT</li>
  <li>Transaction le 17 mai 1721 entre Jean AMIAUD, notaire et procureur au si&egrave;ge 
    de la baronnie et chatellenie de Montignac-Charente et Jean MALVAUD, laboureur 
    &agrave; bras, Marie BRIANT, sa femme, tous du village de la Fich&egrave;re, 
    de St-Amant de Boixe suite &agrave; une condamnation contre le dit AMIAUD 
    l'obligeant &agrave; retroc&eacute;der une maison aux dits MALVAUD et BRIANT</li>
  <li>Sommation le 24 ao&ucirc;t 1721 par Laurent PAIRE, ma&ccedil;con, &agrave; 
    Samuel DELABROUSSE, sieur du dit nom et Florance DE VERDILLAT, tous du village 
    de Vadalle, d'Aussac &agrave; propos d'une pi&egrave;ce de terre que le dit 
    PAIRE aurait plant&eacute;e en vigne et que les dits DELABROUSSE auraient 
    donn&eacute;e &agrave; Jean GUILLEN dit La Bont&eacute;</li>
  <li>Licitation le 31 ao&ucirc;t 1721 de la succession de Jacques MIGNOT entre 
    Marie CHAPRON, veuve de Pierre MIGNOT, Jean MOUSSET, son gendre, tous deux 
    de St-Amant de Boixe, Etienne GUILLIEN, laboureur &agrave; bras et Marie MIGNOT 
    sa femme, fr&egrave;re du dit Jacques, d'Aussac (2 exemplaires)</li>
  <li>D&eacute;lib&eacute;ration le 7 septembre 1721 des habitants de Montignac 
    et nomination de Michel LESCALLIER, chirurgien comme leur syndic</li>
  <li>Enterinement du testament de Jean NADAUD le 20 septembre 1721 pour Marguerite 
    GIBERTAUD, sa veuve et Jean NADAUD, laboureur, son fils, tous de Villognon</li>
  <li>Transaction le 4 d&eacute;cembre 1721 entre Jean BOISSOT, laboureur, du 
    village de Fen&ecirc;tre, de Tourriers et Jean FOUGIERE, laboureur &agrave; 
    bras, du village de Nitrat, de St-Amant de Boixe et son fils Pierre suite 
    &agrave; un probl&egrave;me de terre et aux mauvais traitements subis par 
    le dit BOISSOT de la part des dits FOUGIERE</li>
  <li>Partage le 24 avril 1722 des biens de d&eacute;funte Jacquette PAPOT entre 
    Guillaume PINTAUD, laboureur &agrave; bras, Jacques LHERIAUD, laboureur &agrave; 
    bras et Marie PINTAUD, sa femme, ses enfants, tous de St-Amant de Boixe </li>
  <li>Transaction le 22 avril 1722 entre Jean MAUDET l'a&icirc;n&eacute;, Fran&ccedil;ois 
    BONNEMIN, mari de Marie MAUDET, les dits MAUDET, h&eacute;ritiers de Catherine 
    CATHELLINAUD, leur ni&egrave;ce et Pierre CATHELLINAUD, p&egrave;re de la 
    dite Catherine, Jean MAUDET dit Le Fr&egrave;re, h&eacute;ritier donataire 
    de la dite CATHELLINAUD, tous de Bignac suite &agrave; une instance pendante 
    par le dits MAUDET l'a&icirc;n&eacute; et BONNEMIN contre les dits CATHELLINAUD 
    et MAUDET dit le Fr&egrave;re</li>
  <li>Transaction sur proc&egrave;s le 20 mai 1722 entre Jean PINEAU, laboureur 
    &agrave; bras, fils de Pierre PINEAU et Elisabeth FOUGIERE et Jean et Pierre 
    PINEAU, enfants de feu autre Jean, laboureurs &agrave; bras, tous de St-Amant 
    de Boixe suite &agrave; une instance pendante au si&egrave;ge de Montignac 
    par les dits PINEAU et FOUGIERE contre les dits Jean et Pierre PINEAU</li>
  <li>Transaction le 7 juillet 1722 entre Jean VAUVIELLE, marchand et Raymond 
    GOUNIN, veuf de Madeleine VAUVIELLE, elle-m&ecirc;me veuve de Pierre BOURGON, 
    soeur dit Jean, laboureur, tous deux du village de la Grange, d'Aussac &agrave; 
    propos de la succession de la dite VAUVIELLE</li>
  <li>Partage le 11 novembre 1722 des biens de Charles LHERIAUD veuf de Marguerite 
    SEGUIN avec Jacques LHERIAUD, Marie PINTAUD, sa femme, Antoine et Jean LHERIAUD, 
    tous de St-Amant de Boixe et Pierre LHERIAUD, du village de la Prade, de Vars, 
    les dits Jacques, Pierre, Antoine et Jean, enfants du dit Charles et de la 
    dite Marguerite </li>
  <li>Transaction le 2 mai 1723 entre Jean BOUJAUD, laboureur &agrave; bras, h&eacute;ritier 
    paternel de d&eacute;funt Jean MIGNOT dit La Grand Font et Anne PAPOUNET, 
    veuve de Julien CHEVROU, m&egrave;re et tutrice de Antoine, Jacques, autre 
    Antoine et Marie CHEVROU, ses enfants et h&eacute;ritiers maternels du dit 
    MIGNOT tous de St-Amant de Boixe &agrave; propos de la succession du dit MIGNOT</li>
  <li>Transaction le 3 mai 1723 entre Margueritte GALLOPIN, veuve de Jean BINAUD, 
    m&egrave;re et tutrice de Marie BINAUD, Pierre FOUGIERE, laboureur &agrave; 
    bras, mari de Marie BINAUD, les dites Marie et autre Marie BINAUD, h&eacute;riti&egrave;res 
    de Fran&ccedil;oise BINAUD leur ni&egrave;ce, fille de Fran&ccedil;ois et 
    de Jeanne TRUTAUD, le dit Fran&ccedil;ois fils de Jean BINAUD et Marie SEGUIN 
    et H&eacute;lie CLEMANT, cessionnaire aux droits de Jean ROUHET dit La Garde 
    et Jeanne ROUHET, h&eacute;ritiers du cot&eacute; SEGUIN de la ditte BINAUD, 
    tous de St-Amant de Boixe</li>
  <li>Transaction le 3 mai 1723 entre Nicolas MARTAGUET, laboureur &agrave; bras, 
    Marguerite GIBERTAUD, sa femme et Louis VODICHON, Louis JOURNAUD, en leurs 
    noms et celui de leurs enfants Louis VODICHON, Pierre et Louis JOURNAUD tous 
    de Villognon suite &agrave; une sentence pour les dits MARTAGUET et GIBERTAUD 
    demandant la restitution d'un bourriquet et deux pots de fer en cinquante 
    livres de dommages aux dits VODICHON et JOURNAUD</li>
  <li>PV le 27 novembre 1723 de l'&eacute;tat d'un b&acirc;timent servant de grange 
    pour Antoine LHERIAUD, marchand, de St-Amant de Boixe suite &agrave; son CM 
    avec Marie GUILLOTEAU</li>
  <li>Partage le 28 novembre 1723 des biens de d&eacute;funt Charles LHERIAUD 
    entre Jacques, Pierre, Antoine et Jean LHERIAUD, ses enfants, laboureurs &agrave; 
    bras tous de St-Amant de Boixe. Les dits Jacques, Antoine et Jean sont cessionnaires 
    de Simon LHERIAUD leurs fr&egrave;res</li>
  <li>Inventaire le 31 d&eacute;cembre 1723 des biens de d&eacute;funt Jean MAUDET 
    l'a&icirc;n&eacute;, de Bignac pour Jean MAUDET dit Le Fraire, laboureur, 
    de Bignac, mari de Marie MAUDET, son gendre et Jean MAUDET, fils mineur du 
    d&eacute;funt</li>
  <li>Partage le 20 janvier 1724 des biens de d&eacute;funts Augustin BOUQUINET 
    et Marie GOUMARD entre Fran&ccedil;ois BOUQUINET, laboureur &agrave; bras 
    et Charles BOUQUINET, laboureur &agrave; bras, tous du village de la Fich&egrave;re, 
    de St-Amant de Boixe, leurs enfants</li>
  <li>Sommation le 30 janvier 1724 par Jacques REGNIER et Mathieu GIRAUD, laboureurs, 
    faisant pour eux et Jean ROLLET, collecteurs de la paroisse Villejoubert aux 
    habitants de celle-ci &agrave; propose de Jean HUET, qui a d&eacute;m&eacute;nag&eacute; 
    &agrave; Tourriers</li>
  <li>Transaction sur proc&egrave;s le 30 janvier 1724 entre Jean THOUREAU dit 
    Chapelier, Gabriel BLANCHETTEAU, Jean MORAND dit Bernachou et Etienne MALLET 
    dit le Bronsour?, laboureur &agrave; bras, tous de St-Amant de Boixe &agrave; 
    propos d'un mur construit par le dit MALLET dans un chemin que l'on va de 
    la rue haute aux batiments des dits THOUREAU, BLANCHETTEAU et MORAND</li>
  <li>Augmentation de dot le 8 f&eacute;vrier 1724 par Marie SEGUIN, veuve de 
    Jacques BLANCHETEAU et Gabriel BLANCHETEAU, laboureur &agrave; bras, son fils 
    &agrave; Pierre BLANCHETEAU, fils de la dite SEGUIN et fr&egrave;re du dit 
    Gabriel, tous du village de Fossejoint, de St-Amant de Boixe. Gabriel et Marguerite 
    BLANCHETEAU, sa soeur ont &eacute;t&eacute; mari&eacute;s par &eacute;change 
    avec Fran&ccedil;ois et Louise LESIEUR. Pierre a &eacute;t&eacute; mari&eacute; 
    avec d&eacute;funte avec Fran&ccedil;oise AUDIGIER par du CM du 10 janvier 
    1720 devant Robert</li>
  <li>Transaction sur proc&egrave;s le 18 mars 1724 entre Jean ROLLET, marchand 
    et Jacques ROLLET, laboureur &agrave; bras, fr&egrave;res, tous deux de Villejoubert</li>
  <li>Transaction le 23 mars 1724 entre Claude MENACHAUD, tailleur d'habits et 
    Guillaume MORISSON, laboureur &agrave; boeufs, Jean POYNAUD et Louis QUESSARD, 
    laboureurs &agrave; bras, tous du village du Tapis, de Montignac suite &agrave; 
    un proc&egrave;s form&eacute; par le dit MENACHAUD contre le dit MORISSON, 
    POYNAUD et QUESSARD</li>
  <li>Sommation le 28 mai 1724 par Charles PREVERAUD, sieur de la Boissi&egrave;re, 
    syndic perp&eacute;tuel de Montignac et Pierre ROBERT, notaire royal collecteur 
    de la dite paroisse aux habittants de celle-ci afin qu'ils nomment les collecteurs 
    de l'ann&eacute;e prochaine. Ont et&eacute; nomm&eacute;s Jacques AMIAUD, 
    notaire royal, Pierre MARCHAIS et Antoine GROS</li>
  <li>Transaction le 18 ao&ucirc;t 1724 entre Nicolas MARTAGUET, laboureur &agrave; 
    bras, Jean BOUYER, mar&eacute;chal, Nicolas CONDAT, laboureur &agrave; bras, 
    tous de Villognon suite &agrave; un jugement &agrave; propos d'une terre</li>
  <li>Transaction le 31 janvier 1725 entre Jean TRUTTEAU dit Guiochou, laboureur 
    &agrave; bras et Ren&eacute;e LHERIAUD, veuve de Jacques TRUTTEAU, Jean et 
    Pierre TRUTTEAU, laboureurs &agrave; boeufs, ses enfants, tous de St-Amant 
    de Boixe &agrave; propos de pierres d&eacute;pos&eacute;es sur le heraud du 
    dit Guiochou par la ditte LHERIAUD et ses enfants</li>
  <li>Echange le 31 janvier 1725 de pi&egrave;ces de terre entre Ren&eacute;e 
    LHERIAUD, veuve de Jacques TRUTTEAU, Jean et Pierre TRUTTEAU, laboureurs &agrave; 
    boeufs, ses enfants avec Jean, Antoine et Jean LHERIAUD, fr&egrave;res, laboureur 
    &agrave; bras tous de St-Amant de Boixe </li>
  <li>Transaction le 11 mars 1725 entre Fran&ccedil;ois PESTIS, machand, cessionnaire 
    de Jean NOUGIER, tailleur d'habits et Jacques NOUGIER, laboureur &agrave; 
    boeufs, pour lui et Jean NOUGIER, laboureur, son fils, tous de Villejoubert 
    suite &agrave; un proc&egrave;s au si&egrave;ge de Montignac sur la demande 
    en desistement de lieux, d&eacute;gradations par le dit PESTIS contre les 
    dits NOUGIER</li>
  <li>Echange le premier juin 1725 entre Louis et Pierre BONNET, fr&egrave;res, 
    Jean ANDRE, Fran&ccedil;oise BONNET, sa femme, les dits BONNET, tous enfants 
    d&eacute; d&eacute;funts Fran&ccedil;ois BONNET et Jeanne COMPAIN, tous du 
    village de Vadalle, d'Aussac sous l'autorit&eacute; de Fran&ccedil;ois GALLOUX, 
    leur curateur, du village du Treillis, de Jauldes et Louis BONNET dit le Grand 
    Louis, marchand, tuteur et curateur aux personnes et aux biens des dits Pierre, 
    Louis et Fran&ccedil;oise BONNET</li>
  <li>Sommation le 28 d&eacute;cembre 1725 par Jean DE ROUFFIGNAT, laboureur &agrave; 
    boeufs et Antoine PASIOT, laboureur &agrave; bras &agrave; Nicolas PASIOT, 
    laboureurs, tous de Vervant afin que le dit Nicolas PASIOT proc&egrave;de 
    &agrave; la faction des rolles de la dite paroisse aux eux</li>
  <li>Donation le 26 mars 1726 par L&eacute;onard FOUCHIER, laboureur &agrave; 
    boeufs et Jeanne BOURGNET?, du village de la Morgni&egrave;re, de Jauldes 
    &agrave; No&euml;l FOUCHIER, son fils</li>
  <li>Succession le 5 juillet 1726 de Julienne PIGIER entre Fran&ccedil;ois TEXIER, 
    laboureur &agrave; boeufs, de Tourriers, son fils, de son chef et de celui 
    de Pierre TEXIER, son fr&egrave;re consanguin, fils de d&eacute;funts Louis 
    TEXIER et Louise BARRAUD, curateur de Anne TEXIER, aussi fille de d&eacute;funts 
    Louis TEXIER et de Louise BARRAUD, et Catherine TEXIER, fille de d&eacute;funts 
    Louis et Julienne PIGIER, ses soeurs, Jean et Marc LHERIDAUD, Marie et Jeanne 
    TEXIER, leurs femmes et filles des dits TEXIER et BARRAUD, du village du Marais, 
    d'Amb&eacute;rac, Jean et autre Jean BERNARD, Madeleine et Michelle TEXIER, 
    leurs femmes, filles des dits TEXIER et BARRAUD, du village de Bouffanais, 
    de Tourriers. Julienne PIGIER a eu quatre enfants de son premier mariage avec 
    Jean SAUVAGE, &agrave; savoir Etienne, Pierre, Jean et Fran&ccedil;oise. Le 
    CM de Jean SAUVAGE et Louise PIGIER a &eacute;t&eacute; enregistr&eacute; 
    le denier juillet 1672 (54 pages). Le CM de Louis TEXIER et Louise PIGIER 
    a &eacute;t&eacute; enregistr&eacute; le 25 ao&ucirc;t 1687 devant Amiaud 
    l'a&icirc;n&eacute;.</li>
  <li>Vente le 28 juillet 1726 de la moiti&eacute; d'une pi&egrave;ce de terre 
    par Jean QUANTIN, laboureur &agrave; bras et L&eacute;onarde RAMBAUD, sa femme, 
    de Vervant &agrave; Pierre BERTRAND, farinier d'Amb&eacute;rac</li>
</ul>
    
    
<h4><big><b><u>
          <a name="delaunay">Delaunay 1697-1744</a></u></b></big></h4><h4>
<ul>
  <li>Accord le 26 juin 1697 entre Fran&ccedil;ois GORRAIN, marchand boucher et 
    Jean VIVIER, Marie GORRAIN sa femme, h&eacute;ritiers de Jeanne BALLET, leur 
    m&egrave;re et belle-m&egrave;re, tous de Montignac &agrave; propos de la 
    succession de Jeanne BIDET et Isaac GORRAIN, mari de la ditte BALLET</li>
  <li>PV le 8 juillet 1697 pour Jean RAVION, marchand, h&eacute;ritier de Marguerite 
    FRUCHET, sa m&egrave;re, d'une maison contre Marie GUYNARD, veuve de Isaac 
    FRUCHET, m&egrave;re d'Anne FRUCHET</li>
  <li>PV le 23 octobre 1697 pour Pierre THINON, sieur de Seruolle, greffier de 
    Montignac, du village de la Fich&egrave;re, de St-Amant de Boixe de l'&eacute;tat 
    d'une palisse ou haie vive contre Jean BILLIER, curateur des enfants mineurs 
    de Jean SAUVET, sieur de la Coste </li>
  <li>Accord le 23 d&eacute;cembre 1697 entre Cl&eacute;ment DECERCE, ecuyer sieur 
    de Parfoucaud, du Lugerat, de Montignac et Fran&ccedil;ois PAPOUNET, Marguerite 
    PELLETAN, sa femme, Pierre Chanbouraud, Jeanne PAPOUNET, sa femme, Charles 
    BRUNET, Marguerite PAPOUNET?, sa femme, tous du village du Tapis, de Montignac 
    suite &agrave; un proc&egrave;s</li>
  <li>Partage le 10 janvier 1698 des biens de d&eacute;funte Fran&ccedil;oise 
    MORAND et vivant Louis REGNIER, son mari entre Jean et autre Jean REGNIER, 
    laboureur &agrave; bras, du village de la Fich&egrave;re, de St-Amant de Boixe, 
    ses enfants</li>
  <li>PV le 4 mars 1698 pour Jacques CANTIN, laboureur &agrave; boeufs, du village 
    de la Fich&egrave;re, de St-Amant de Boixe des d&eacute;gats commis par Pierre 
    VODICHON dit Canton dans une pi&egrave;ce de jardin</li>
  <li>PV le 10 mars 1698 pour Charles PREVERAUD, sieur de la Boissi&egrave;re, 
    procureur fiscal de la baronnie et Fran&ccedil;ois PREVERAUD, sieur de Mailloux 
    des pi&egrave;ces d'un acte contre Cl&eacute;ment FORGERIT, procureur au si&egrave;ge 
    pr&eacute;sidial d'Angoumois. Est mentionn&eacute; Jacques PREVERAUD, avocat, 
    fr&egrave;re a&icirc;n&eacute; des PREVERAUD, de la ville de Chateauneuf, 
    &eacute;tant de pr&eacute;sent &agrave; Paris</li>
  <li>Sommation le 5 mai 1698 pour No&euml;l GEAUFFROY, marchand, de Vars &agrave; 
    Pierre PENOT, laboureur &agrave; boeufs, de Cellettes de faire go&ucirc;ter 
    et d&eacute;livrer du vin</li>
  <li>Sommation le 21 juillet 1698 pour Jean BOUNICEAU, marchand, du bourg de 
    Limalonges?, &eacute;tant &agrave; Montignac &agrave; Jean ANDR&Eacute;, sieur 
    du Mesniou et Pierre ANDR&Eacute;, son fils, de Montignac de lui d&eacute;livrer 
    des barriques de vin</li>
  <li>Apprentissage le 23 juillet 1698 d'Antoine DUCHASTEL, ecuyer sieur des Boyteau, 
    du village du Tapis de Montignac par Jacques MARCHAIS, marchand de Montignac. 
    Le dit MARCHAIS doit apprendre &agrave; lire et &agrave; &eacute;crire au 
    dit DUCHASTEL</li>
  <li>Accord le 3 ao&ucirc;t 1698 entre Fran&ccedil;ois BALLET, laboureur &agrave; 
    boeufs, Jeanne ANDR&Eacute;, sa femme, et Jean BINAUD, Jeanne BALLET, sa femme, 
    leur gendre et fille, tous du village du Breuil, de Vouharte. Les dits BALLET 
    et ANDR&Eacute; sont condammn&eacute;s &agrave; verser 647 livres &agrave; 
    H&eacute;lie DUBOIS, sieur de la Bernard alors que tous sont en m&ecirc;me 
    communaut&eacute;</li>
  <li>Sommation le 9 ao&ucirc;t 1699 pour Jean TURLAIS, marchand de Vouharte, 
    mari de Georgette VACHIER, veuve de Pierre ESGRON &agrave; Charles BIROT, 
    sieur de la Brouhe d'accepter 25 livres</li>
  <li>PV le 14 ao&ucirc;t 1698 pour Cl&eacute;ment DE CERC&Eacute;, du logis noble 
    de Lugerat, de Montignac des d&eacute;gats d'une pi&egrave;ce de pr&eacute; 
    contre Fran&ccedil;ois BOUFFANAIS dit La Bouisse et Guillaume BALLUTAU</li>
  <li>PV le 27 septembre 1698 pour Guillaume GAULTIER, prieur de Ruffec, cur&eacute; 
    de Vouharte de l'&eacute;tat d'un &quot;gardoire&quot; contre Antoine ANDR&Eacute;, 
    laboureur, Pierre RAVEAU et Jean DUON, laboureurs de Vouharte</li>
  <li>Sommation le 27 septembre 1698 par Jacques BAUD, tixeran, de Vouharte &agrave; 
    Fran&ccedil;oise GASCHET de recevoir la somme de 5 livres pour l'acquisition 
    d'une ruelle</li>
  <li>PV le 17 janvier 1699 pour PENOT, laboureur &agrave; boeufs, de Cellettes 
    des d&eacute;gats commis dans une pi&egrave;ce de pr&eacute; par des boeufs 
    appartenant &agrave; Fran&ccedil;oise BRUNAUD, veuve de Pierre BRUNAUD, Jean 
    et Pierre BRUNAUD, ses enfants</li>
  <li>PV le 15 f&eacute;vrier 1699 pour Fran&ccedil;ois et Pierre PREVERAUD, sieur 
    de Mailloux et des Palluts?, de Montignac de la succession de Fran&ccedil;ois 
    PELTAN, marchand</li>
  <li>Offre le 22 mars 1699 par Pierre COUPRIE, chirurgien, de Montignac &agrave; 
    Pierre MOUSSET, laboureur &agrave; bras, d'une borderie de St-Amant de Boixe, 
    de la valeur des semences plant&eacute;es dans la borderie</li>
  <li>Cession le 5 avril 1699 d'une maison par Cl&eacute;mence PENICHON, veuve 
    de Jacques BOITEAU, du village de Vadalle, d'Aussac &agrave; Louis VIAUD et 
    Marguerite BOYTAUD, du village de la Fich&egrave;re, de St-Amant de Boixe, 
    ses gendre et fille</li>
  <li>PV le 30 juin 1699 pour Jean AUDIER, meunier, du village du Breuil de Vouharte 
    d'une maison acquise de Marguerite MAULDET</li>
  <li>PV le 6 septembre 1699 pour Pierre MIGNOT dit la Prime et Fran&ccedil;ois 
    CL&Eacute;MENT, laboureur, syndics l'ann&eacute;e pr&eacute;sente de St-Amant 
    de Boixe. Les habitants de la paroisse nomment Pierre AMELINE et Mathieu GIRAUD</li>
  <li>PV le 24 novembre 1699 pour Antoine CHEVROUX, tisserand, Ren&eacute;e CAILLETEAU, 
    sa femme, veuve de Fran&ccedil;ois ESNARD de l'&eacute;tat d'une muraille 
    mitoyenne aux h&eacute;ritiers d'Isaac COUPRIE</li>
  <li>PV le 20 avril 1699 pour Fran&ccedil;ois MOREAU, chapelier de l'&eacute;tat 
    d'une maison afferm&eacute;e &agrave; Jean MICHEAU, cordonnier, Fran&ccedil;ois 
    GARDERE, sellier, curateurs des mineurs de d&eacute;funt Jean GARD&Egrave;RE, 
    Pierre Michau et Marie PAPILLON et &agrave; Marguerite DELAGE, tutrice de 
    ses enfants et de Fran&ccedil;ois Laquier?</li>
  <li>PV le 5 janvier 1700 pour Antoine BERTRAND, sieur des Advenaux, de St-Amant 
    de Boixe de la r&eacute;ponse de Jean TERRACHIER dans la maison de Fran&ccedil;ois 
    GARDERE, sellier</li>
  <li>PV le 25 f&eacute;vrier 1700 pour Jean TIFFON dit Gazelot, de Vouharte de 
    la porte de sa maison et de la serrure contre Fran&ccedil;ois MARIDAT et ses 
    deux enfants a&icirc;n&eacute;s, Pierre VOUILLAT et son fils, Jean GOUMARD 
    et autres habitants du village du Breuil</li>
  <li>Nomination le 6 juin 1700 des fabriqueurs de St-Etienne par Jean DE CATHALANY, 
    pr&ecirc;tre religieux, profex de l'abbaye de St-Amant de Jacques FRUCHET, 
    marchand sargier du dit Saint Etienne</li>
  <li>PV le 23 juin 1700 pour Jean PREVERAUD, ecuyer sieur de Nitrat de maisons 
    et terres contre Jean GAUTIER, laboureur &agrave; bras, du village de la Faye, 
    de Tourriers et Louis BOUTILLIER, laboureur &agrave; boeufs, du village de 
    Villeneuve, de Champniers</li>
  <li>Sommation le 9 juillet 1700 pour Fran&ccedil;ois PAPOUNET, laboureur &agrave; 
    boeufs, du village de la Fich&egrave;re, de St-Amant de Boixe &agrave; Jean 
    BIROT, sieur de Belhair, de St-Etienne (Les Montignac) d'accepter une offre 
    de retrait lignagier</li>
  <li>PV le 15 juillet 1700 pour Charles PREVERAUD, sieur de la Boissi&egrave;re, 
    procureur fiscal de la baronnie, de Montignac d'une pi&egrave;ce de terre 
    appartenant &agrave; Pierre THINON, sieur de Seruolle</li>
  <li>PV le 20 juillet 1700 pour Fran&ccedil;ois PAPOUNET, laboureur &agrave; 
    boeufs, du village de Fich&egrave;re, de St-Amant de Boixe d'une pi&egrave;ce 
    de terre contre Jean BIROT, sieur de Belhair</li>
  <li>PV le 26 ao&ucirc;t 1700 pour Jean et autre Jean ROUHET, fr&egrave;res, 
    laboureurs &agrave; boeufs de St-Amant de Boixe des d&eacute;gats dans un 
    pr&eacute; par le b&eacute;tail de Jean MIGNOT dit Petas et Pierre Paponnet, 
    marchand </li>
  <li>PV le 16 septembre 1700 pour Jean De MARCOSSAINE, ecuyer sieur de Puyromain, 
    de St-Cybardeaux de pi&egrave;ces de chenevi&egrave;re contre No&euml;l et 
    Jean CHATON, p&egrave;re et fils, Antoine ANGIBAUD et Jean COUPRIE, son gendre</li>
  <li>Nomination le 8 d&eacute;cembre 1700 des syndics Pierre ? et Jean VACHIER 
    le jeune de St-Amant de Boixe par ses habitants</li>
  <li>Accord le 15 d&eacute;cembre 1700 entre Augustin BOUQUINET, laboureur &agrave; 
    bras, Fran&ccedil;ois BOUQUINET, laboureur, Colas Vau, Perrine BOUQUINET, 
    sa femme, du village de Laumont, de Bignac, Pierre GAUDIN, laboureur, Marguerite 
    BOUQUINET, sa femme, du village de la Fich&egrave;re, de St-Amant de Boixe 
    &agrave; propos de la succession de Hilairet BOUQUINET, p&egrave;re des dits 
    BOUQUINET</li>
  <li>Inventaire le 17 mars 1701 des biens de d&eacute;funte Jean TIFFON, veuve 
    de Pierre CHAUSSAT pour Simon MOUSSET, marchand sargier, du village du Menadaud, 
    de Chebrac, en vue de la dissolution de communaut&eacute; du dit MOUSSET, 
    des enfants de la ditte TIFFON et de Marie PICARD, seconde femme du dit MOUSSET</li>
  <li>Partage le 14 mai 1701 des biens de d&eacute;funts Michel TESTAUD et Fran&ccedil;oise 
    NAUD entre Jean TESTAUD l'a&icirc;n&eacute;, du village de la Chignolle, de 
    Champniers, Jean TESTAUD le jeune, du village de la Geauffreti&egrave;re (jaufertie?) 
    de Soyaux, Louis BARRAUD, laboureur, Jeanne TESTAUD, sa femme, du village 
    de Basse, de St-Genis, leurs enfants</li>
  <li>PV le 25 mai 1701 pour Christophe GORRAIN, marchand boucher, de Montignac 
    de l'&eacute;tat d'une pi&egrave;ce de vigne contre Marie ROUHET, veuve de 
    Louis MOUSSET, Louis, Jacques et Antoine MOUSSET, ses enfants</li>
  <li>Inventaire le 6 juin 1701 des biens de d&eacute;funt Pierre CATHERINEAU, 
    de Bignac pour Marguerite FENIOU, sa veuve en secondes noces</li>
  <li>Inventaire le 14 juin 1701 des biens de d&eacute;funte Jeanne HERRAUD, veuve 
    de Jean MAUDET pour Catherine MAUDET, sa fille, femme de Pierre CATHERINEAU, 
    de Bignac </li>
  <li>PV le 9 juillet 1701 pour Jean BARADEAU et Jean PICHON, laboureurs &agrave; 
    boeufs, du village de la Fich&egrave;re, de St-Amant de Boixe et du village 
    du Tapis, de Montignac de la grande prize des Boitauds</li>
  <li>Accord le 19 juillet 1701 entre Louis BOUYER, Jean BOUYER et Pierre BOUYER, 
    tous du village du Breuil, de Vouharte &agrave; propos de leur communaut&eacute;</li>
  <li>PV le 21 juillet 1701 pour Michel LEBESGUE, marchand, du bourg de Vouharte 
    des d&eacute;gats commis dans une pi&egrave;ce de bl&eacute; par les boeufs 
    de Louis QUENTIN dit Lamairie</li>
  <li>Accord le 23 juillet 1701 entre No&euml;l GEOFFROY, sieur du Portal et Fran&ccedil;ois 
    CORLIEU, tonnelier, tous deux de Vars suite &agrave; une sentence pour le 
    dit GEOFFROY contre le dit CORLIEU pour raison des violences commises par 
    le dit CORLIEU sur le dit GEOFFROY</li>
  <li>PV le 26 juillet 1701 pour Jean BARADEAU, laboureur &agrave; boeufs et Jacques 
    PELLETAN, laboureur, de St-Amant de Boixe des biens saisis de Fran&ccedil;ois 
    PAPOUNET, laboureur &agrave; boeufs, de St-Amant de Boixe</li>
  <li>PV le 27 juillet 1701 pour Jacques MARQUET, chirurgien de Montignac des 
    d&eacute;gats commis dans une pi&egrave;ce de vigne par Pierre CHAMBARAUD, 
    Charles BRUNET et Mathieu TASTON, laboureurs</li>
  <li>Vente le 7 ao&ucirc;t 1701 d'une pi&egrave;ce de terre par Louis NADAUD, 
    tailleur d'habits, de Nanclars, veuf de Marie MAROT &agrave; Fran&ccedil;ois 
    MALLOIRE, charron, du dit Nanclars </li>
  <li>Partage le 29 ao&ucirc;t 1701 des biens de d&eacute;funte Marie SURREAU 
    et d&eacute;funte Marie THINON, entre Jacques MOUSSET, laboureur &agrave; 
    boeufs, veuf de la dite THINON, Simon Moussert, sargier du village du Menadaud, 
    de Chebrac et Henri MOUSSET, laboureur &agrave; boeufs de Vars, enfants du 
    dit Jacques MOUSSET et de la dite THINON. Marie SURREAU est leur grand-m&egrave;re</li>
  <li>Partage le 17 novembre 1701 des biens de d&eacute;funt Genis GUY, marchand 
    tanneur entre Henry GUY, sergent, son h&eacute;ritier du c&ocirc;t&eacute; 
    paternel et Charles DANEDE, marchand, son l&eacute;gataire, tous de Montignac</li>
  <li>PV le 22 novembre 1701 pour Jean THINON avocat en la cour, d'Angoul&ecirc;me 
    des biens de d&eacute;funts Louis AMIAUD et Ester GLORIA</li>
  <li>PV le 28 novembre 1701 pour Antoine MOUSSET, laboureur, Jean Degorce, son 
    parsonnier, collecteurs de St-Amant de Boixe contre Jacques TIFFON, laboureur, 
    du bourg de St-Etienne les Montignac, mari d'Anne CHAPRON</li>
  <li>Inventaire le 5 d&eacute;cembre 1701 des biens de d&eacute;funts Denis GASCHET 
    et Louise GEAUFFROY pour leur fils Pierre GODINEAU</li>
  <li>Inventaire le 29 d&eacute;cembre 1701 des biens de d&eacute;funts Denis 
    GASCHET et Louise GEAUFFROY pour leur fils Pierre GODINEAU</li>
  <li>Accord le 12 janvier 1702 entre Paule THINON, veuve de Fran&ccedil;ois BAREAU, 
    marchand, de Villognon et Jean BAREAU, marchand, du village de Barattau, d'Amb&eacute;rac, 
    afin d'&eacute;viter un proc&egrave;s</li>
    <li>
    Sommation le 17 janvier 1702 par Jacques BINAUD, tonnelier, de Vouharte, pour 
    lui et Fran&ccedil;ois CORLIEU, tonnelier, de Vars &agrave; Michel GORRAIN, 
    sieur des Hormau, marchand tonnelier de Montignac afin qu'il respecte un march&eacute;</li>
  <li>PV le 27 f&eacute;vrier 1702 pour Marie MERCERON, fille de Pierre, marchand 
    de la village d'Angoul&ecirc;me, demeurant au village de Bouffanais, paroisse 
    de Tourriers, d'un l'&eacute;tat d'un chemin contre Jean ALLARD, Elisabeth 
    COURRAUD, sa femme et Jean CL&Eacute;MENT du village de Bouffanais</li>
  <li>PV le 8 avril 1702 pour Michel GORRAIN, sieur de l'Isle de l'&eacute;tat 
    d'une muraille contre Guillaume GAUTIER, prieur de Vouharte, Fran&ccedil;oise 
    BOISSON, veuve de Jean SUDRE dit Pesronne, Guillaume COURTIN, fils de Pierre 
    et Jeanne PASQUIER</li>
  <li>PV le 29 avril 1702 pour Fran&ccedil;ois THOUREAU, marchand du village du 
    Courradeau, de St-Amant de Boixe d'une pi&egrave;ce de terre contre Fran&ccedil;ois 
    BRIAND, laboureur du dit village</li>
  <li>PV le 3 juillet 1702 pour Jean RAIMBAUD, sieur de la Coutille, du village 
    de la Coutille de St Genis les Mouli&egrave;res, des d&eacute;gats commis 
    dans une pi&egrave;ce de pr&eacute; par Jean AIGRON le jeune</li>
  <li>PV le 8 juillet 1702 pour Guillaume FRAN&Ccedil;OIS, laboureur &agrave; 
    boeufs, du village des Fontenelles, de St-Amant de Nou&egrave;re des d&eacute;gats 
    dans une pi&egrave;ce de bl&eacute; par Jacques MARQUAIS, du dit village</li>
  <li>PV le 27 octobre 1702 pour Jean GOULLIARD, marchand, fermier de la seigneurie 
    de Fontguyon, de St-Amant de Nou&egrave;re d'une pi&egrave;ce de bois taillis 
    contre Jean BLANCHON, laboureur &agrave; boeufs, du village de Nigronde, de 
    St-Amant de Nou&egrave;re</li>
  <li>Investissement le 20 novembre 1702 par les religieux de l'abbaye de St-Amant 
    de Boixe, Doms Pierre PREVERAUD, Jean De Cathalany, Fran&ccedil;ois HERRIARD 
    et Jean BONNICHON &agrave; Jean PAPONET, laboureur &agrave; boeufs du village 
    de la Fich&egrave;re : le dit PAPONET cultive des terres du prieur&eacute; 
    de la Fich&egrave;re</li>
  <li>PV le 2 novembre 1702 pour Pierre BONNEMAIN dit Saintonge, du village de 
    Laumont, de Bignac des d&eacute;gats commis dans une pi&egrave;ce de jardin 
    par Jean BONNEMAIN dit Seruolle</li>
  <li>PV le 4 novembre 1702 pour Simon MOUSSET, sargier, du village de Menadaud, 
    de Chebrac des d&eacute;gats commis dans une pi&egrave;ce de jardin par Henri 
    MOUSSET, laboureur &agrave; boeufs</li>
  <li>Partage le 23 novembre 1702 des biens de d&eacute;funt Simon CHAPRON entre 
    Jean CHAPRON, p&ecirc;cheur, Fran&ccedil;ois CHAPRON, laboureur &agrave; bras, 
    du village de la Rivi&egrave;re de Vars, Pierre SEGUIN, gallochier, mari de 
    Marie CHAPRON, du village du Menadaud, paroisse de Chebrac, ses enfants</li>
  <li>Consentement le 26 novembre 1702 par les habitants de Montignac que les 
    collecteurs de tailles Jacques SUDRE et Fran&ccedil;ois ABRAS emploient sur 
    leurs rolles Antoine MOUSSET et Jean DEGORCE</li>
  <li>PV le 9 d&eacute;cembre 1702 des biens de d&eacute;funte Anne FRUCHET pour 
    Michel GORRAIN, sieur des Hermau?, de Montignac</li>
  <li>PV le 18 d&eacute;cembre 1702 pour Andr&eacute; GODINAU dit Cadillat, laboureur 
    &agrave; boeufs, du village des Godinauds, de Bignac d'une pi&egrave;ce de 
    vigne</li>
  <li>PV le 18 d&eacute;cembre 1702 pour Michel GORRAIN, sieur des Hermaux, de 
    Montignac, cessionnaire de Jacques MIGNOT, Pierre Robert? et Pierre ANDRE, 
    fermiers des biens de la succession de d&eacute;funts Fran&ccedil;ois GORRAIN 
    et Marie MANGON de dits biens</li>
  <li>Nomination le 30 novembre 1702 des syndics de Vouharte Michel BONNEMAIN, 
    laboureur et Michel Ballotau, du village du Breuil par ses habitants </li>
  <li>Accord le 26 mars 1703 entre Jean Desports, notaire royal, veuf d'Elizabeth 
    GUIMARD, du village d'Argence, de Champniers et Jean BIROT, fils de d&eacute;funts 
    Abraham BIROT, chirurgien et Marie GUIMARD, de Bignac, Jacques H&eacute;lie 
    GORRAIN, notaire et procureur de Montignac, son curateur. Le CM entre Jean 
    DESPORT et Elisabeth GUIMARD, fille de d&eacute;funts Jean GUIMARD et Marie 
    Couprie a &eacute;t&eacute; enregistr&eacute;e le 17 janvier 1690 devant le 
    notaire Debreme</li>
  <li>Donation mutuelle le 6 avril 1703 entre Fran&ccedil;ois BONNEMAIN, laboureur 
    &agrave; boeufs et Marie MAUDET, sa femme, de Bignac</li>
  <li>Inventaire le 18 mai 1703 des biens de la communaut&eacute; de Michel GORRAIN, 
    marchand et d&eacute;funte Fran&ccedil;oise GUERRY, sa femme</li>
  <li>Sommation le 2 juin 1703 pour Michel GORRAIN, marchand de Vouharte &agrave; 
    Michel TURLAIS, syndic perp&eacute;tuel de Vouharte d'accepter la somme de 
    six livres d'amende des r&eacute;parations de l'&eacute;glise</li>
  <li>PV le 3 juin 1703 pour Jean Bounin, laboureur &agrave; boeufs, du village 
    des Fontenelles, de St-Amant de Nou&egrave;re des d&eacute;gats commis dans 
    une pi&egrave;ce de terre</li>
  <li>PV le 20 ao&ucirc;t 1703 pour Fran&ccedil;ois TIFFON, sieur des Nouyers, 
    cessionnaire de Jeanne ROUHERE, des d&eacute;gats commis dans une pi&egrave;ce 
    de pr&eacute; par Pierre ANDR&Eacute;, de Vouharte</li>
  <li>PV le 8 janvier 1704 pour Louis Chevroux, laboureur &agrave; bras, Anne 
    PAPOUNET, sa femme, Fran&ccedil;oise PAPOUNET, sa belle-soeur, ycelles PAPOUNET 
    h&eacute;riti&egrave;res de Jean PAPOUNET, laboureur d'une pi&egrave;ce de 
    terre, contre Jacques PELTAN, laboureur, de St-Amant de Boixe</li>
  <li>PV le 8 mai 1704 pour Jacques H&eacute;lie GORRAIN, procureur, Pascal MATHIEU, 
    sieur de Pr&eacute;fontaine des arbres &eacute;branch&eacute;s par Jean CHATTON, 
    tonnelier et Guillaume Robert, poissonnier, du village du Tapis</li>
  <li>Accord le 18 ao&ucirc;t 1704 entre Fran&ccedil;oise GARDERE, marchand, de 
    Montignac et Pierre PINAUD, charpentier, Fran&ccedil;oise Rose GARDERE, sa 
    femme, fille de d&eacute;funts Jean GARDERE et Marie PAPILLON, de St-Amant 
    de Boixe. Fran&ccedil;ois GARDERE est curateur de la dite Fran&ccedil;oise 
    Rose.</li>
  <li>Inventaire le 24 septembre 1704 des biens de d&eacute;funt Jacques MARQUET, 
    chirurgien, de Montignac pour Catherine DELAPLANCHE, sa veuve</li>
  <li>Inventaire le 6 octobre 1704 des biens de d&eacute;funt Jacques MOUSSET, 
    laboureur, du village du Menadaud, de Chebrac pour sa veuve Anne DESBINS</li>
  <li>Accord le 4 janvier 1705 entre Jean BIROT, sieur du Vergnaud, fils du premier 
    lit de d&eacute;funt Abraham BIROT, chirurgien, fils de Samuel BIROT, H&eacute;lie 
    GUILLEMOT, garde de monsieur, Jeanne PREVOST, sa femme, veuve du dit Abraham, 
    tous de Bignac et Jean DE POUTIGNAT, sieur d'Amblecourt, Marie BIROT, sa femme, 
    de Villejoubert, Madeleine BIROT, mineure autoris&eacute;e par Jean AMIAUD, 
    les dites Marie et Madeleine BIROT, filles de d&eacute;funt Jean BIROT, sieur 
    de Bellair. Est mentionn&eacute;e Elisabeth BONNEMAIN, m&egrave;re des dits 
    BIROT et femme du dit Samuel</li>
  <li>Inventaire le 26 f&eacute;vrier 1705 des biens de Marguerite BIROT, femme 
    de Michel LESCALIER, chirurgien suite &agrave; leur CM</li>
  <li>Inventaire le 27 f&eacute;vrier 1705 des biens de Michel LESCALIER, chirurgien, 
    mari de Marguerite BIROT suite &agrave; leur CM</li>
  <li>PV le 28 f&eacute;vrier 1705 pour Michel LESCALIER, chirurgien, mari de 
    Marguerite BIROT, de Montignac d'une maison issue de d&eacute;funt Jean BIROT, 
    sieur de Belhair et Anne Couste, p&egrave;re et m&egrave;re de la dite BIROT</li>
  <li>PV le 6 mars 1705 pour Charles GARDERE, sellier, de Montignac, agissant 
    pour Anne DELAYE, sa m&egrave;re des semences enlev&eacute;es par Fran&ccedil;ois 
    MAZEAU des biens de d&eacute;funt Pierre MICHEAU et Marie PAPILLON</li>
  <li>Accord le 29 avril 1705 entre Michel LESCALIER, chirurgien de Montignac, 
    H&eacute;lie et Michel CLEMENT, fr&egrave;res, laboureurs &agrave; bras de 
    St-Amant de Boixe suite &agrave; un mauvais labourage d'une pi&egrave;ce de 
    terre appartenant &agrave; Madeleine BIROT, &eacute;pouse du dit Lescalier 
    par les dits Cl&eacute;ments</li>
  <li>PV le 8 ao&ucirc;t 1705 pour Fran&ccedil;ois GORRAIN, marchand d'une maison 
    h&eacute;rit&eacute;e d'Antoinette RICARD</li>
  <li>D&eacute;claration le 22 f&eacute;vrier 1706 par Jean BAULIEU, laboureur 
    &agrave; bras, du village de Laumond, de Bignac &agrave; Louise JAY, femme 
    de Pierre MESNARD. Le CM de ces derniers a &eacute;t&eacute; enregistr&eacute; 
    le 15 mars 1705 devant Robert</li>
  <li>Accord le 31 mars 1706 entre Philippe BALLET, chirurgien, Jean BALLET, gar&ccedil;on 
    tanneur, tous deux de Montignac. Philippe est le tuteur de Jean qui doit partir 
    &agrave; la ville afin de se perfectionner</li>
  <li>Sommation le 2 novembre 1706 pour Fran&ccedil;ois DEPESREU, marchand, de 
    Mansle &agrave; Marc GEAUFFROY, marchand de Vars de recevoir la somme de trente 
    livres</li>
  <li>PV le 3 d&eacute;cembre 1706 pour Jean BOUNICEAU, avocat, huissier audiencier(?) 
    des eaux et for&ecirc;ts d'Angoumois, de St-Amant de Boixe des d&eacute;gats 
    commis par les bestiaux de Fran&ccedil;ois CHANTELOUBE, laboureur et Jacques 
    AMELINE, menuisier</li>
  <li>Partage le 11 d&eacute;cembre 1707 des biens de d&eacute;funt Henri BOMMAUD, 
    entre Charles DANEDE, laboureur, mari d'Anne BOMMAUD, fille de d&eacute;funt 
    Louis et Jean BERNARD, laboureur, mari de Jeanne BOMMAUD, aussi fille de Louis 
    tous de St-Etienne. Le nom a &eacute;t&eacute; corrig&eacute; une fois GOUMARD. 
    Henri BOMMAUD, fils de feu Jean est cousin germain des BOMMAUD</li>
  <li>Inventaire le 25 juin 1708 des biens de la communaut&eacute; de Marguerite 
    TIFFON, veuve de Jean LAMBERT, du village du Menadaud, de Chebrac suite &agrave; 
    son CM avec Fran&ccedil;ois GODINEAU</li>
  <li>PV le 15 juin 1708 pour Fran&ccedil;ois GODINAUD, laboureur &agrave; boeufs, 
    du village du Menadaud, de Chebrac des biens de la communaut&eacute; de d&eacute;funte 
    Marguerite GODINAUD, sa femme suite &agrave; son CM avec Marguerite TIFFON, 
    veuve de Jean LAMBERT</li>
  <li>Sommation le 16 octobre 1708 par Philippe ANDR&Eacute;, sieur de Puyperoux, 
    de Villejoubert &agrave; Jean BOURGEOIS, laboureur, de Villejoubert afin de 
    lui r&eacute;clamer un tonneau de vin</li>
  <li>PV le 30 novembre 1709 pour Jean MICHEAU, sellier, de Montignac des d&eacute;gats 
    commis dans une pi&egrave;ce de terre par des pierres jet&eacute;es en ycelle 
    par Christophe GORRAIN</li>
  <li>PV le 16 mars 1710 pour Michel GORRAIN, sieur de l'Isle, Marie BOUYER, sa 
    femme des biens de leur communaut&eacute; suite au mariage de Pierre GORRAIN, 
    leur fils avec Marie DE LA BATTUT. Leur CM a &eacute;t&eacute; enregistr&eacute; 
    devant Jeheu du 11 fevrier 1710</li>
  <li>Accord le 28 avril 1710 entre Jacques H&eacute;lie GORRAIN, procureur fiscal 
    de la juridiction de Vouharte, mari d'Anne MATHIEU, de Montigne et Jean GONNIN 
    (ou GOUNIN), laboureur &agrave; boeufs, Fran&ccedil;oise CHAISNE, sa femme 
    du village de Sigogne, de Coulgens car ceux-ci ne peuvent payer la m&eacute;tairie 
    accord&eacute;e par le dit GORRAIN aux dits GOUNIN et CHAISNE</li>
  <li>PV le 10 juillet 1710 pour Fran&ccedil;ois FAURE, sieur de Rancuraud, du 
    bourg d'Aigre des d&eacute;gats commis dans une pi&egrave;ce de pr&eacute; 
    par des &quot;bestiaux&quot; du nomm&eacute; Pierre BOITTEAU</li>
  <li>Reconnaissance le 25 octobre 1710 par Suzanne PIFFRE, veuve de Fran&ccedil;ois 
    BERTHONNAU, laboureur &agrave; bras, &agrave; Jean BETHONNAU, laboureur &agrave; 
    boeufs et Jeanne BLANCHARD, sa femme, fils et brue de la ditte PIFFRE, tous 
    de Tourriers </li>
  <li>PV le 11 d&eacute;cembre 1710 pour Daniel SEGUIN, ecuyer sieur de la Vervante 
    des d&eacute;gats commis dans une chaume par Guillaume MORISSON, bordier et 
    Anne GORRAIN, veuve de Charles BIROT, sieur de la Broue</li>
</ul>
<p>2E4135:</p>
<ul>
  <li>Donation le 28 avril 1711 par Jeanne HUBERT, veuve de Jean BOUQUINET, &agrave; 
    Pierre GODIN, laboureur, Marguerite BOUQUINET, sa femme, tous du village de 
    la Fich&egrave;re, de St-Amant de Boixe. Sont mentionn&eacute;s Fran&ccedil;ois 
    BOUQUINET, fils de la dite Hubert, d&eacute;c&eacute;d&eacute; et Marie GALLOUX, 
    sa femme</li>
  <li>PV le 30 mai 1712 pour Fran&ccedil;ois BERTRAND, archer de la mar&eacute;chauss&eacute;e 
    d'Angoumois, d'Angoul&ecirc;me contre Fran&ccedil;ois MIGNOT et Louis De MARCHOU 
    car ceux-ci n'auraient pas cultiv&eacute; des terres</li>
  <li>PV le 5 juillet 1712 des biens de d&eacute;funt Jean MAILLOCHEAU pour Henriette 
    TEXIER, sa veuve en vue d'une saisie. Les commissaires sont Fran&ccedil;ois 
    DEHIERSAT et S&eacute;bastien ROUHIER, laboureurs &agrave; boeufs, du village 
    du Breuil, de Rouillac et du village de Grosville, de St-Cybardeaux</li>
  <li>PV le 27 octobre 1712 pour Jacques CHEVRIER le jeune, laboureur &agrave; 
    bras, de St-Amant de Boixe, d'une bourrique dont l'oreille a &eacute;t&eacute; 
    coup&eacute;e par Jacques LESIEUR</li>
  <li>Sommation le 5 d&eacute;cembre 1712 pour Louis HUET, marchand, d'Aunac &agrave; 
    Vincent NOUGIER, laboureur &agrave; boeufs, de Tourriers d'accepter son offre 
    de retrait conventionnel</li>
  <li>PV le 19 f&eacute;vrier 1713 des biens de la communaut&eacute; pour Pierre 
    GORRAIN, notaire de Montignac, demeurant &agrave; Vouharte, Marie DE LABATUD, 
    son &eacute;pouse, Michel GORRAIN et Marie BOUYER, ses p&egrave;re et m&egrave;re</li>
  <li>Accord le 22 f&eacute;vrier 1713 entre Michel GORRAIN, sieur de l'Isle, 
    Marie BOUYER sa femme, Pierre GORRAIN, notaire et procureur de Montignac, 
    Marie de Labatud, sa femme, leurs fils et belle-fille tous de Vouharte. Le 
    CM entre Pierre GORRAIN et Marie DE LABATUD a &eacute;t&eacute; enregistr&eacute; 
    le 11 d&eacute;cembre 1708 devant le notaire Jeheu</li>
  <li>Accord le 18 mars 1713 entre Michel GORRAIN, sieur de l'Isle, Marie BOUYER, 
    sa femme, Pierre GORRAIN, notaire et procureur de Montignac, Charles GORRAIN, 
    sieur de l'Esbaupin, les dits Pierre et Charles, fils des dits Michel et Marie 
    BOUYER. Est mentionn&eacute;e Anne GORRAIN, fille des dits Michel et Marie 
    BOUYER, veuve de Charles LEBESGUE, sieur de l'Espine et &agrave; pr&eacute;sent 
    femme de Fran&ccedil;ois DELESCHELLE, notaire de Marcillac</li>
  <li>PV le 20 mars 1713 pour Anne GORRAIN, femme de Fran&ccedil;ois Deleschelle, 
    notaire de Marcillac, des biens de la ditte GORRAIN suite &agrave; son CM 
    du 27 f&eacute;vrier 1713 recu AMIAUD</li>
  <li>Vente le 30 d&eacute;cembre 1713 par Louis Bouffanais &agrave; Jean AMIAUD, 
    l'a&icirc;n&eacute;, syndic perp&eacute;tuel de St-Amant de Boixe et &agrave; 
    d'autres habitants de la ditte paroisse d'une maison qui servira de presbyt&egrave;re 
    &agrave; Honor&eacute; BORELLYS, p&egrave;re cur&eacute; de la ditte paroisse</li>
  <li>PV le 26 janvier 1714 pour Pierre OVY, sieur de Baupr&eacute; et Charles 
    GIRAUD, fils de d&eacute;funt Toussaint GIRAUD, sieur des Prasses, Marie THINON, 
    sa veuve, demeurant au bout du pont de Mansle d'un four afferm&eacute; &agrave; 
    Jean GOUMARD dit le Merle et sommation au dit Derome</li>
  <li>PV le 10 f&eacute;vrier 1714 pour Jean VACHIER, laboureur &agrave; boeufs, 
    du village de la Fich&egrave;re, de St-Amant de Boixe des d&eacute;gats commis 
    par Charles GASCHET, laboureur &agrave; boeufs, du dit village</li>
  <li>PV le 19 avril 1714 des vignes de d&eacute;funte Marie NADAUD pour Jean 
    BOUJAUD, Pierre et Fran&ccedil;ois GASCHET, Jean MIGNOT, laboureurs &agrave; 
    bras, Guillaume MATAR, laboureur, fils d'Elizabeth BUZAT, tous h&eacute;ritiers 
    de la ditte NADAUD</li>
  <li>PV le 18 juin 1714 pour Pierre VOUILLAT, marchand, du bourg d'Anais des 
    dommages commis dans une pi&egrave;ce de jeune vigne par Jean et autre Jean 
    DESHERSE, d'Anais</li>
  <li>Cession le 1er novembre 1714 de 98 livres par les habitants de St-Amant 
    de Boixe &agrave; Honor&eacute; BORELLY, leur cur&eacute; suite &agrave; un 
    abus des collecteurs d'imp&ocirc;ts</li>
  <li>PV le 2 novembre 1714 pour Jean BOISSEAU, sieur de Baupr&eacute;, archer 
    en la mar&eacute;chauss&eacute;e d'Angoumois, des d&eacute;gats commis dans 
    une pi&egrave;ce de terre par Marguerite DEGAIL, Antoine GAUTIER, son fils 
    et Jean BRISSON, fils de Pierre</li>
  <li>Accord le 17 novembre 1714 entre Jean BRIAND, marchand cabaretier du village 
    de Basse, de St-Genis, veuf de Jeanne CROIZET et Michel BONNEMAIN, laboureur, 
    Marie BRIAND, sa femme, son gendre et sa fille &agrave; propos de la succession 
    de Jeanne BRIAND, soeur de la ditte Marie</li>
  <li>Accord le 22 novembre 1714 entre Jean DE ROUFFIGNAC, sergent, Jean GUILLOTEAU, 
    mar&eacute;chal et les habitants de Montignac &agrave; propos d'impositions 
    sur Jacques H&eacute;lie GORRAIN</li>
  <li>Inventaire le 12 d&eacute;cembre 1714 des biens de d&eacute;funts Jacques 
    MOUSSET et Jeanne COUSSEAU pour Louis MOUSSET, laboureur &agrave; boeufs, 
    de St-Etienne, tuteur et curateur de leurs enfants mineurs</li>
  <li>Accord le 18 mai 1715 entre Fran&ccedil;ois JUBERT, tisserand, Louis LEGERON, 
    sa femme et Jacques GUERIN, gallochier, tous de St-Cybardeaux suite &agrave; 
    un proc&egrave;s pour raison d'une muraille batie par le dit GUERIN sur un 
    heraud appartenant aux dits JUBERT et LEGERON</li>
  <li>PV le 26 avril 1717 des biens de d&eacute;funts Pierre BIAIS et Marie REGNIER 
    pour Pierre ROBIN, laboureur &agrave; boeufs, du village de Chez Pouillat, 
    de St-Angeau, tuteur et curateur de leurs enfants mineurs</li>
  <li>PV le 2 ao&ucirc;t 1717 pour Jean BIROT, sieur de la Broue, de Montignac, 
    faisant pour Jacques H&eacute;lie GORRAIN, procureur au si&egrave;ge pr&eacute;sidial 
    d'Angoumois, son oncle des vignes abim&eacute;es par Guillaume MIGNOT, laboureur 
    qui &eacute;tait charg&eacute; de les labourer et biner</li>
  <li>Avis le 12 janvier 1718 entre les habitants de St-Etienne les Montignac 
    &agrave; propos des translations de domicile et cons&eacute;quences sur le 
    paiement de la taille</li>
  <li>Inventaire le 10 mars 1718 des biens de d&eacute;funts Louis LURAT et Marguerite 
    MOUSSET pour Jean MOUSSET, marchand voiturier, du village de la Groue, de 
    Marsac, Jean LURAT, laboureur &agrave; boeufs, du village du Tapis, de Montignac, 
    fr&egrave;re consanguin des enfants mineurs des dits Lurat et MOUSSET</li>
  <li>Accord le 20 mars 1718 entre Philippe MAUDE, sieur de la Bord et de la Claveli&egrave;re, 
    du logis de la Claveli&egrave;re, d'Anais et Pierre VOUILLAT, marchand, d'Anais 
    suite &agrave; un proc&egrave;s pour cause d'un arbre coup&eacute; par le 
    dit MAUDE</li>
  <li>Accord le 25 mars 1718 entre Marguerite TIFFON, veuve de Fran&ccedil;ois 
    GODINAUD, du village du Menadaud, de Chebrac et Pierre GODINAUD, laboureur 
    du village de St-Etienne les Montignac, son fils suite &agrave; un probl&egrave;me 
    de succession</li>
  <li>Assembl&eacute;e le 20 novembre 1718 des habitants d'Anais &agrave; propos 
    d'une nouvelle mani&egrave;re de payer la taille (2 exemplaires)</li>
  <li>PV le 23 juillet 1719 pour Jacques H&eacute;lie GORRAIN, d'Angoul&ecirc;me, 
    aux droits de Jean BIROT, ad(?)re de la dime de Vouharte des fonds recueillis 
    de la paroisse de Chebrac</li>
  <li>PV le 19 ao&ucirc;t 1719 pour Antoine FURAUD, sieur des Fontenelles, de 
    St-Amant de Boixe des d&eacute;gats dans une pi&egrave;ce de terre contre 
    Jean ROUHET dit Lagarde</li>
  <li>PV le 9 septembre 1719 pour Fran&ccedil;ois FENIOU, laboureur &agrave; boeufs, 
    des Fontenelles, de St-Amant de Nou&egrave;re des d&eacute;gats commis par 
    Jacques et Jean MARQUAIS</li>
  <li>Nomination le 19 novembre 1719 du syndic Jacques FROUGIER, laboureur par 
    les habitants de Villejoubert</li>
  <li>PV le 20 mars 1720 pour Jean CHOLLET, marchand, du village des Croix, de 
    St-Amant de Boixe, des d&eacute;gats commis dans une pi&egrave;ce de terre 
    par Pierre DE ROUFFIGNAC, sieur du dit nom</li>
  <li>PV le 21 mars 1720 pour Anne PREVERAUD, veuve de Daniel SEGUIN, ecuyer sieur 
    de la Vervante, de Montignac des batiments arrant&eacute;s &agrave; feu Jean 
    CHATTON et Anne GOUMARD, sa femme</li>
  <li>Sommation le 19 octobre 1720 pour Jean ROY, dit Le Coq, marchand, Jean ROY, 
    marchand, son p&egrave;re, Jeanne BENOIT, sa m&egrave;re, de Ste Catherine 
    de ?, de St-Cybardeaux &agrave; Fran&ccedil;ois ROY, marchand, fr&egrave;re 
    du dit Jean ROY p&egrave;re, du village de la Gach&egrave;re, de Rouillac 
    et &agrave; Michel BRIAND, Jean JAY, ses gendres d'accepter certaines sommes 
    d'argent</li>
  <li>D&eacute;claration le 26 octobre 1720 par Pierre BONNET, marchand, de Villognon, 
    mari de Fran&ccedil;oise GRATEREAU, &agrave; Pierre Maudet, de Bignac &agrave; 
    propos d'un remboursement</li>
  <li>Sommation le 29 octobre 1720 par Pierre BONNET, marchand, de Villognon et 
    Fran&ccedil;oise GRATREAU sa femme &agrave; Fran&ccedil;ois MAUDET, du lieu 
    de Sigogne, de Coulgens</li>
  <li>Sommation le 29 octobre 1720 par Pierre BONNET, marchand, de Villognon, 
    et Fran&ccedil;oise GRATREAU sa femme &agrave; Fran&ccedil;ois SEGUIN, marchand, 
    du bourg de St-Amant</li>
  <li>PV le 6 novembre 1720 pour Antoine FURAUD, sieur des Fontenelles, de St-Amant 
    de Boixe d'une maison issue de la dot de demoiselle LOIZEL, donn&eacute;e 
    par Charles LOIZEL, sieur de la Douhe, son p&egrave;re</li>
  <li>PV le 10 d&eacute;cembre 1720 pour Antoine SURAUD, sieur des Fontenelles?, 
    de St-Amant de Boixe des d&eacute;gats commis dans une pi&egrave;ce de vigne 
    par les chevaux et poulins de Charles LOIZEL, sieur de la Douhe, Fran&ccedil;oise 
    GASCHET et Fran&ccedil;ois AMELINE</li>
  <li>Accord le 25 juillet 1721 entre Claude MENACHAUD, tailleur d'habits et Charlotte 
    GASCHET, veuve de Pierre TASTON, tous du village du Tapis de Montignac suite 
    au proc&egrave;s pour raison des d&eacute;gats caus&eacute;s par les vaches 
    du dit TASTON dans une pi&egrave;ce de terre du dit MENACHAUD</li>
  <li>Accord le 9 d&eacute;cembre 1721 entre Antoine et Jean PAPOUNET, laboureurs, 
    fils de d&eacute;funts Jacques et Etienne PAPOUNET, eux-m&ecirc;mes, fils 
    de d&eacute;funt Jacques PAPOUNET, d'Aigre et Etienne MOUSSET, laboureur &agrave; 
    boeufs, l'a&icirc;n&eacute;, fils de feu Jean MOUSSET dit la Grange, Etienne 
    MOUSSET, laboureur &agrave; bras, le jeune, fils de feu Jacques MOUSSET, de 
    St-Amant de Boixe et Villejoubert suite &agrave; une cession faite par Jacques 
    PAPOUNET &agrave; Jean MOUSSET dit Lagrange</li>
  <li>PV le 2 mai 1722 pour Jean Fran&ccedil;ois HERIARD, sieur de Pr&eacute;fontaine, 
    licenci&eacute; en loi, avocat au parlement, juge s&eacute;n&eacute;chal et 
    accesseur de la baronnie, d'Aussac d'une pi&egrave;ce de pr&eacute; que franchissent 
    r&eacute;guli&egrave;rement les habitants d'Aussac</li>
  <li>PV le 12 ao&ucirc;t 1722 pour Marie GRATTREAU, veuve de St-Amant de Boixe, 
    des d&eacute;gats commis dans une pi&egrave;ce de terre par Ren&eacute;e LHERIAUD, 
    Jean Trutaud, son fils, Pierre GUILLOTEAU, sieur de la Trouve et Jean GALLOPIN 
    dit Boisrousseau, de St-Amant de Boixe</li>
  <li>PV le 14 septembre 1722 pour Antoine SURAUD, sieur des Fontenelles, de St-Amant 
    de Boixe des d&eacute;gats dans une pi&egrave;ce de terre ou pr&eacute; par 
    le cheval d'Etienne AUDHOIN, marchand</li>
  <li>PV le 21 novembre 1722 pour Jean ROLLET, marchand, de Villejoubert d'une 
    pi&egrave;ce de terre suite &agrave; une sentence contre Pierre PESTIS, marchand</li>
  <li>D&eacute;claration le 24 d&eacute;cembre 1722 par Jean PLEXAIS, laboureur 
    &agrave; boeufs, Pierre FOUCAUD, p&ecirc;cheur, Pierre LHERIAUD, tous du village 
    de Tapis, collecteurs de taille de Montignac de habitants de celui-ci suite 
    &agrave; une requ&ecirc;te de Guillaume Bernard devant l'&eacute;lection de 
    Cognac</li>
  <li>PV le 4 janvier 1723 pour Pascal PREVOST, sieur du Marquisat, Jacques PREVOST, 
    sieur de Grand pr&eacute;, du bourg de Douzat et du village de Chez Bouet, 
    de la paroisse de Douzat des d&eacute;gats dans une pi&egrave;ce de pr&eacute; 
    commis par Pierre et H&eacute;lie COUSTE, p&egrave;re et fils</li>
  <li>PV le 4 janvier 1723 pour Jean ROLLET, marchand, de Villejoubert des d&eacute;gats 
    dans une pi&egrave;ce de terre par Pierre PETIS, marchand, de Villejoubert</li>
  <li>PV le 11 mars 1723 pour Olivier DE GORRIE, ecuyer sieur du Bouchet<br>
    , mari de Marie Anne Mathurine DESERS&Eacute;, fille de Cl&eacute;ment DESERS&Eacute;, 
    de l'&eacute;tat d'une vigne donn&eacute;e en dot par le dit DESERS&Eacute; 
    &agrave; sa fille. Leur CM a &eacute;t&eacute; dress&eacute; devant FRUCHET 
    le 29 ao&ucirc;t 1718.</li>
  <li>Inventaire le 31 mai 1723 des biens de d&eacute;funts Antoine et Marie ROY 
    pour Jean MANGON, mari de Marie PAPONET, h&eacute;riti&egrave;re des dits 
    ROY, Jean RAFFET, laboureur &agrave; boeufs, Jeanne BOYREAU</li>
  <li>PV le 1er septembre 1723 pour Pascal MATHIEU, sieur du Roc des d&eacute;gats 
    commis dans une pi&egrave;ce de terre en la paroisse de St-Amant de Nou&egrave;re 
    par Pierre DUCHAISNE?, fils de Joseph, Jacques CROIZET, fils de Louis, dit 
    le cordonnier, Jean PREVOST, fils de feu Charles, dit le Galland, du bourg 
    de St-Genis</li>
  <li>PV le 16 octobre 1723 pour Pierre GORRAIN notaire, procureur de Montignac 
    et greffier de Vouharte des d&eacute;gats commis dans une pi&egrave;ce de 
    terre par les boeufs de Pierre COURTIN dit Rousseau</li>
  <li>Accord le 23 janvier 1724 entre Mathurin VEAU, marchand, de St-Genis et 
    Jean JUIN l'a&icirc;n&eacute;, du village de bois Raymond, de St-Amant de 
    Nou&egrave;re suite aux troubles caus&eacute;s par Fran&ccedil;ois DUZAIS 
    et Philippe FOUBERT</li>
  <li>Donation le 23 janvier 1724 par Louis SAUTON, laboureur &agrave; boeufs, 
    &quot;vieux et caduc&quot; &agrave; Jean SAUTON, laboureur &agrave; boeufs, 
    son fils, tous du village du Breuil, de Vouharte</li>
  <li>Cession le 18 juillet 1724 d'une concession de s&eacute;pulture par Claude 
    DURIVAL, ecuyer pr&ecirc;tre prieur des prieur&eacute;s de St-Etienne les 
    Montignac &agrave; Fran&ccedil;ois PREVERAUD, seigneur du Maillou, de Saint-Etienne 
    les Montignac</li>
  <li>PV le 3 ao&ucirc;t 1725 pour Bernard Faure, sieur de Rancuraud, de St-Amant 
    de Boixe d&eacute;s d&eacute;gats dans une pi&egrave;ce de pr&eacute; contre 
    Jean ROUHET dit Lagarde et Pierre DE ROUFFIGNAT, son gendre, tonnelier</li>
  <li>PV le 18 mai 1726 pour Jean AMIAUD le jeune, procureur au si&egrave;ge de 
    Montignac, du village de la Fich&egrave;re, de St-Amant de Boixe d'une pi&egrave;ce 
    de vigne troubl&eacute;e par Fran&ccedil;ois TIFFON, laboureur &agrave; bras 
    du dit village</li>
  <li>Donation le 23 mai 1726 entre Jacques GASCHET, poissonnier, 78 ans, &agrave; 
    Jacques COUPRIE, laboureur &agrave; bras, Marie GASCHET, sa femme, son gendre 
    et sa fille, du village du Breuil, de Vouharte</li>
  <li>PV le 18 juin 1726 pour Pierre PIERREDAU, laboureur, du village du Breuil, 
    de Rouillac de lieux suite &agrave; une instance intent&eacute;e par Jean 
    PELLAN, laboureur, du village de Villairs, de Rouillac </li>
  <li>PV le 18 juillet 1726 de prise de possession pour Fran&ccedil;oise AUTY, 
    du village de Nigronde, de St-Amant de Nou&egrave;re, contr H&eacute;lie JEAN, 
    Antoine BESSON et Jean FOUCAUD qui se sont empar&eacute;s des h&eacute;r&eacute;dit&eacute;s 
    de Joseph AUTY, p&egrave;re de la dite Fran&ccedil;oise et de ceux de Marguerite 
    BESSON, sa m&egrave;re</li>
</ul>
<p>2E4136:</p>
<ul>
  <li>Testament le 21 f&eacute;vrier 1732 de Marguerite BEAUDEL, s&eacute;par&eacute;e 
    quant aux biens de Louis SAUVAGE dit Le Rousseau, &acirc;g&eacute;e de 42 
    ans du village de Vadalle, d'Aussac</li>
  <li>PV le 20 juin 1732 pour Jacques BUROLLEAU, boucher, au droit de Jean et 
    Louis BINAUD, ses beau-p&egrave;re et oncle, Pierre FRADONNET, Fran&ccedil;ois 
    SALMON, mari de Marie FRADONNET, les dits FRADONNET, fils de d&eacute;funt 
    Daniel FRADONNET, fils de d&eacute;funt Pierre FRADONNET et Marie BINAUD, 
    tous de Xambes, Louis, Michel et Fran&ccedil;ois LESIEUR, fils de Louise BINAUD, 
    fille de d&eacute;funt Brice, Fran&ccedil;ois BINAUD, laboureur, du village 
    de Puyperoux, de Villejoubert, fils de d&eacute;funt Fran&ccedil;ois, fils 
    aussi fils du feu Brice d'une pi&egrave;ce de terre accapar&eacute;e par Jean 
    et autre Jean DELABORDE, p&egrave;re et fils</li>
  <li>PV le 26 juillet 1732 pour Jean VACHIER, marchand, de village de la Fich&egrave;re, 
    d'une grange issue du partage de d&eacute;funt Jean VACHIER, son p&egrave;re, 
    Antoinette GENEURE, sa femme, et Jean, Marie et Marguerite VACHIER ses fr&egrave;re 
    et soeurs</li>
  <li>PV le 5 novembre 1732 pour Jean AMIAUD, notaire royal, Marie AMIAUD, sa 
    soeur, h&eacute;ritiers de d&eacute;funt Jean AMIAUD, notaire, leur p&egrave;re, 
    et Marie MARCHAIS, leur m&egrave;re tous les deux de Lign&eacute; contre Jean 
    VACHIER, du village de la Fichi&egrave;re</li>
  <li>Accord le 14 mars 1733 entre Guillaume DALLANCON, sieur du nom, Genevi&egrave;ve 
    DALLANCON, son &eacute;pouse, Anne DALLANCON, fille majeure, Pierre SEGUIN 
    dit Lamarche, laboureur &agrave; bras, tous du bourg de Vouharte &agrave; 
    propos des terres appartenant &agrave; Jacques TIFFON, a&iuml;eul des dits 
    DALLANCON et occup&eacute;es par le dit SEGUIN. Il est fait r&eacute;f&eacute;rence 
    &agrave; des actes anciens de 1633</li>
  <li>Inventaire le 28 mars 1733 des biens de d&eacute;funts Jean GASCHET et Jeanne 
    Simon pour leurs enfants mineurs et leur curateur Michel SIMON, p&ecirc;cheur 
    de Vouharte</li>
  <li>PV le 9 juin 1733 pour Pierre PECHILLON, laboureur &agrave; bras, du village 
    des Brousses, de St-amant de Nou&egrave;re des biens des enfants mineurs de 
    d&eacute;funts Jacques ROUHIER et Marie MOUSSET, du village du Menadaud, de 
    Chebrac</li>
  <li>PV le 23 septembre 1733 pour Michel GOBEAU, marchand et Jean NOUGIER, laboureurs 
    &agrave; boeufs, de Villejoubert d'une pi&egrave;ce de vigne occup&eacute;e 
    par Anne DAVID, veuve de Jean DUMOUSSEAU</li>
  <li>PV le 30 septembre 1733 pour Fran&ccedil;ois PENOT, laboureur &agrave; boeufs, 
    de Cellettes d'une charge de vendange renvers&eacute;e par Charlotte DE LA 
    GRELI&Egrave;RE, femme de Louis DENIS, Louis et Jean DENIS, ses enfants </li>
  <li>Inventaire le 13 novembre 1733 des biens de d&eacute;funts Pierre MAUDET 
    et Fran&ccedil;oise MOUSSET pour Jean MAUDET, laboureur &agrave; bras, de 
    Montignac, tuteur et curateur de leurs enfants mineurs</li>
  <li>Accord le 2 janvier 1734 entre Jean MAUDET, laboureur &agrave; bras, tuteur 
    des enfants mineurs de d&eacute;funts Pierre MAUDET et Fran&ccedil;oise MOUSSET, 
    de Montignac et Marguerite MIGNOT, veuve du dit MAUDET, de St-Amant de Boixe 
    suite &agrave; un probl&egrave;me de succession</li>
  <li>PV le 4 janvier 1734 pour Paul MAIGNEN, sieur de Cerceville, juge s&eacute;n&eacute;chal 
    du prieur&eacute; de Lanville et Fran&ccedil;ois MAIGNEN, licenci&eacute; 
    en droit, juges acesseurs de la principaut&eacute; de Marcillac des arbres 
    coup&eacute;s par Jacques Couprie dit Negret, du village de Breuil</li>
  <li>Accord le premier mars 1734 entre Jean AMIAUD, notaire et greffier de la 
    baronnie de Montignac, du village de la Fich&egrave;re, de St-Amant de Boixe 
    et Jean PLEXAIS, laboureur &agrave; boeufs, du village du Tapis, de Montignac 
    suite au foss&eacute; du dit AMIAUD combl&eacute; par le dit PLEXAIS</li>
  <li>Inventaire le 10 mars 1734 des biens de Fran&ccedil;ois TEXIER, de Tourriers, 
    pour sa veuve Anne POITEVIN</li>
  <li>Inventaire le 29 mars 1734 des biens de d&eacute;funts Jean PINAUD dit Guyot 
    et Marguerite CALLIER, du village de la Fich&egrave;re, de St-Amant de Boixe, 
    pour Jean PINAUD dit Rougeaud, laboureur &agrave; bras, tuteur et curateur 
    des enfants mineurs des dits PINAUD et CALLIER</li>
  <li>Inventaire le 28 avril 1734 des biens de d&eacute;funts Fran&ccedil;ois 
    TRIJEAU et Marie COURTIN pour Pierre COURTIN, laboureur, de Vouharte, tuteur 
    et curateur de leur fils mineur </li>
  <li>Accord le 31 avril 1734 entre Charles PREVERAULD, sieur de la Boissi&egrave;re, 
    procureur fiscal de Montignac, de Montignac et Denis CHAMBAREAU, laboureur 
    &agrave; bras, du village de la Fich&egrave;re, de St-Amant de Boixe suite 
    &agrave; un proc&egrave;s pour cause d'un &eacute;vrier du dit CHAMBAREAU 
    dont son ouverture donne sur le jardin du dit PREVERAULD</li>
  <li>PV le 20 mai 1734 pour Pierre COURTIN, laboureur, de Vouharte, curateur 
    du fils de d&eacute;funts Fran&ccedil;ois TRIJAU et Marie COURTIN des meubles 
    de leur succession</li>
  <li>PV le 8 juillet 1734 pour Fran&ccedil;oise GRATRAUD, de Villognon, Cl&eacute;ment 
    DEGAIL, son m&eacute;tayer, du bourg de Coulonges des d&eacute;gats dans les 
    bl&eacute;s de deux pi&egrave;ces de terre commis par une jument appartenant 
    &agrave; Pierre GUERRIN, fils d'Antoine, laboureur de Coulonges</li>
  <li>PV le 14 ao&ucirc;t 1734 pour Pierre JOUMIER, marchand, du village de la 
    Fich&egrave;re, de St-Amant de Boixe des d&eacute;gats commis dans ses vignes 
    par des boeufs appartenant &agrave; Jean MOUSSET dit le Frizat?, du bourg 
    de St-Etienne (Les Montignac)</li>
  <li>Sommation le 18 ao&ucirc;t 1734 pour Charles BOISSOT, laboureur, de Xambes 
    &agrave; Philippe MAURAT, laboureur, de Xambes de lui remettre des futs de 
    barriques</li>
  <li>Sommation le 12 septembre 1734 pour Louis COMBAUD, meunier, Marie BIARD, 
    sa femme, des moulins de Villognon &agrave; Fran&ccedil;oise GRATRAUD, veuve 
    de Pierre BONNET, marchand, Cl&eacute;ment BONNET, notaire de Montignac, et 
    Marie BONNET, ses enfants, de Villognon de luui d&eacute;livrer des roues 
    pour r&eacute;parer les moulins</li>
  <li>PV le 5 octobre 1734 pour Jean AMIAUD, notaire, du village de la Fich&egrave;re, 
    de St-Amant de Boixe, des foss&eacute;s abattus par douze vaches et trois 
    juments appartenant &agrave; Pierre GROS, Marie CAROT, sa femme, Louis QUIESSARD, 
    Marie MENACHAUD, sa femme, Jean PLEXAIS, L&eacute;onarde FOUCAUD, sa tante</li>
  <li>Sommation le 15 mai 1735 pour Marie RENAUD, veuve de Pierre CL&Eacute;MENT, 
    fils de d&eacute;funt Michel, de St-Amant de Boixe &agrave; Pierre RENAUD, 
    son fr&egrave;re et Pierre BIDET, son beau-fr&egrave;re de lui remettre la 
    clef de certains b&acirc;timents. Le CM entre Pierre CL&Eacute;MENT et Marie 
    RENAUD a &eacute;t&eacute; enregistr&eacute; le 21 mai 1719 devant Boylevin 
  </li>
  <li>PV le 3 octobre 1735 pour Jacques LHERIAUD, laboureur &agrave; bras, de 
    St-Amant de Boixe, des raisins coup&eacute;s et emport&eacute;s par Fran&ccedil;ois 
    RAVON dit Le Boisme</li>
  <li>PV le 4 novembre 1735 pour Jean GODICHON dit Basset, laboureur &agrave; 
    bras, de Xambes des d&eacute;gats occasionn&eacute;s par deux boeufs appartenant 
    &agrave; Charles BOISSEAU, sieur du dit nom</li>
  <li>Inventaire le premier f&eacute;vrier 1736 des biens de Louis GUILLIEN dit 
    La Bont&eacute;, sergier pour Pierre GOUMARD, journalier, Marie GUILLIEN, 
    d'Aussac, son gendre et sa fille en vue de la dissolution de leur communaut&eacute;</li>
  <li>Sommation le 8 ao&ucirc;t 1736 pour Guillaume MOREAU, laboureur, de Cellettes 
    &agrave; Fran&ccedil;ois PENOT, laboureur et Fran&ccedil;oise LOISEAU, sa 
    femme, Jean et autre Jean PENOT, leurs enfants, de Cellettes d'accepter une 
    offre de retrait lignagier</li>
  <li>PV de perquisition le 17 septembre 1736 pour Fran&ccedil;ois DUBOIS, sieur 
    de la Bernarde et Pierre BENOIST, sieur de Baupr&eacute;, fermiers des dimes 
    et revenus de l'abbaye de St-Amant de Boixe contre Jean et Pierre PESTIS, 
    fr&egrave;res, de Villejoubert suite aux gerbes voll&eacute;es &agrave; Antoine 
    DUMOUSSEAU, dismeur de Villejoubert</li>
  <li>PV le 30 octobre 1736 pour Jean CALLIER, tonnelier, de St-Amant de Boixe 
    des d&eacute;gats dans un jardin par une cheval et une jument appartenant 
    &agrave; Fran&ccedil;ois BARRADEAU</li>
  <li>Abandon d'h&eacute;ritage le 14 janvier 1737 par Marguerite BOUQUINET, veuve 
    de Pierre GODIN, laboureur &agrave; bras, du village de la Fich&egrave;re, 
    de St-Amant de Boixe &agrave; Jean THINON, sieur de Ceruolle, huissier aux 
    tailles de l'&eacute;lection d'Angoul&ecirc;me, d'Angoul&ecirc;me, son cr&eacute;ancier</li>
  <li>Sommation le 23 janvier 1737 par Etienne BONNET, marchand, d'Aussac &agrave; 
    Jean SAUTON, laboureur &agrave; boeufs de Nanclars suite &agrave; une sentence 
    concernant un retrait lignagier</li>
  <li>Sommation le 3 juin 1737 pour Jeanne QUILLET, veuve d'Etienne BONNET, Louis 
    BONNET, son fils, Antoine, Fran&ccedil;ois et Simone BONNET, ses autres enfants, 
    d'Aussac &agrave; Jean SAUTON, laboureur &agrave; boeufs, de Nanclars d'accepter 
    48 livres 15 sols en r&eacute;glement du retrait lignagier d'une pi&egrave;ce 
    acquise de Louis BONNET le jeune et Marie TOUPET</li>
  <li>Sommation le 19 septembre 1737 pour Anne PICHON, veuve de Jacques CHAUSSEPIED, 
    Jacques, Marie et Charles CHAUSSEPIED, ses enfants, de Xambes &agrave; Jean 
    JOURNAUD, laboureur &agrave; bras, Marie PIET, sa femme, Jean CHAUSSEPIED 
    et Ren&eacute;e JOURNAUD, leur fils et nore (!), de Villognon d'accepter la 
    somme de 285 livres de la constitution dotalle du dit CHAUSSEPIED. Son CM 
    avec Ren&eacute;e JOURNAUD a &eacute;t&eacute; enregistr&eacute; le 12 mai 
    1730 devant Mallet</li>
  <li>Inventaire le 19 janvier 1741 de la communaut&eacute; de Fran&ccedil;ois 
    QUANTIN, journalier, de Vervant et d&eacute;funte Ren&eacute;e SEGUIN, sa 
    femme. Son testament a &eacute;t&eacute; enregistr&eacute; le 29 d&eacute;cembre 
    1739 devant Mallet</li>
  <li>Inventaire le 14 novembre 1744 des biens de d&eacute;funt Antoine GROS, 
    journalier, de Montignac pour sa veuve Marguerite MARQUET</li>
</ul>
<p><br>
  Non photographi&eacute;s:</p>
<ul>
  <li>Inventaire des meubles et effets de Daniel SEGUIN, sieur de la Vervante 
    en 1720</li>
  <li>Recollement des meubles de d&eacute;funte Marie MOUSSET fait au requis de 
    Louis MOUSSET en 1724</li>
  <li>PV fait au requis d'Etienne AUDOIN marchand du 4 ao&ucirc;t 1733</li>
  <li>PV fait au requis de Fran&ccedil;ois GIRAUDEAU, marchand du 12 ao&ucirc;t 
    1733</li>
  <li>PV fait au requis de Jacques GOBAUD et Jean Nougier du 18 septembre 1733</li>
  <li>PV fait au requis de Simon MOUSSET du 25 septembre 1733</li>
  <li>PV de vente de meubles fait au requis de Jean MAUDET du 1er d&eacute;cembre 
    1733</li>
  <li>PV fait au requis de Pierre MIGNOT du 16 d&eacute;cembre 1733</li>
</ul>

 <h4><big><b><u>
          <a name="malletf">Mallet F 1704-1718</a></u></b></big></h4><h4>
<p>2E4205</p> 
<ul>
  <li>Inventaire le 11 d&eacute;cembre 1704 de la communaut&eacute; de Jean BRETHON, 
    laboureur, Marie MANGON, sa femme, Jean BOURGEOIS, charpentier, Marie BRETHON, 
    sa femme, veuve d'Antoine CHESNE suite au CM du dit BOURGEOIS et de la dite 
    BRETHON, tous de Villejoubert</li>
  <li>Sommation le 18 f&eacute;vrier 1705 pour Jean GENESTRE, Jacques et Mathieu 
    GENESTRE, ses enfants, tireurs de table, du village de la Place, de la paroisse 
    de St-Georges sur Couzeau?, de la province de Lionnois &agrave; Fran&ccedil;ois 
    THOUREAU dit Deslis, de Montignac</li>
  <li>Vente le 18 juin 1705 par Etienne MOUSSET, laboureur &agrave; boeufs &agrave; 
    Jean MALLOIRE, laboureur &agrave; boeufs, tous de Nanclars, de pi&egrave;ces 
    de terres</li>
  <li>Proc&egrave;s verbal le 7 septembre 1705 de la seigneurie de Nanclars pour 
    Fran&ccedil;ois DEPERUT et Antoine DUPUY, son gendre, marchands de Mansle</li>
  <li>Sommation le 31 ao&ucirc;t 1706 par Martial NADAUD, mar&eacute;chal de St-Amant 
    de Boixe &agrave; Jean GALLOPIN dit Boisrousseau, de St-Amant de lui d&eacute;livrer 
    une cuve &agrave; faire vin</li>
  <li>Partage le 12 septembre 1706 de la communaut&eacute; de Fran&ccedil;ois 
    VAUVIEILLE l'a&icirc;n&eacute;, laboureur, Louise AUGIER, sa femme, Fran&ccedil;ois 
    VAUVIEILLE le Jeune, leur fils, , mari de Marie BARUSSEAU, tous du village 
    de Vadalle, paroisse d'Aussac</li>
  <li>Acte capitulaire des habitants de Tourriers le 20 f&eacute;vrier 1707</li>
  <li>Accord le 17 mars 1708 entre dame Marie GEOFFROY, veuve de Robert PAILLIER, 
    sieur du Perat, Jean PAILLIER, son fils et Marie DUPRAT, fils de Pierre, tous 
    de Xambes: Marie DUPRAT est tomb&eacute;e enceinte du dit PAILLIER pour raison 
    d'une &quot;copulation charnelle&quot;</li>
  <li>Partage le 5 avril 1708 des biens de d&eacute;funt Charles MORAIN, fils 
    de Catherine CLEMENT, d&eacute;c&eacute;d&eacute; au service du roi entre 
    Jean BOUNICEAU, huissier, son h&eacute;ritier donataire et Michel et H&eacute;lie 
    CLEMENT, fr&egrave;res, Pierre et Fran&ccedil;ois RAVON, fr&egrave;res, Jacquette 
    et Fran&ccedil;oise CLEMENT, leurs femmes. Catherine CLEMENT est la cousine 
    germaine des dits CLEMENT</li>
  <li>Accord le 20 avril 1708 entre Jean LORAND, gallochier, Jeanne BRUNET, sa 
    femme, fille de Marguerite JOUATTEAU et Fran&ccedil;ois JUGE, gallochier, 
    Marguerite MIRGALLET, sa femme, tous de Nanclars, suite &agrave; un probl&egrave;me 
    de muraille</li>
  <li>Proc&egrave;s verbal le 20 ao&ucirc;t 1708 pour Raymond GOUNIN, sieur de 
    la Coste, du village d'Esnord, de St-Ciers des d&eacute;gats sur les bles 
    d'une pi&egrave;ce de terre faits par les oies de Philippe GOBEAU </li>
  <li>Accord le 26 ao&ucirc;t 1708 entre Marthe AIGRON, femme s&eacute;par&eacute;e 
    quant aux biens de Jean DE ROUFFIGNAT, sieur de la Treille, de Montignac et 
    Louis BONNET, marchand, mari de Marguerite SAUVAGE, Jeanne BONNET, veuve de 
    Jean SAUVAGE, du village de Vadalle, paroisse d'Aussac</li>
  <li>Inventaire le 3 novembre 1708 des biens de d&eacute;funt Fran&ccedil;ois 
    PAPOUNET, du village de la Fich&egrave;re, de St-Amant de Boixe pour Marguerite 
    PELLETAN, sa veuve </li>
  <li>Acte d'appel le 5 d&eacute;cembre 1708 au requis de plusieurs habitants 
    de Tourriers </li>
  <li>Accord le 6 janvier 1709 entre Jacques GUY, sieur de la Rouze, syndic perp&eacute;tuel 
    de la paroisse de Montignac et les habitants de Montignac</li>
  <li>Accord le 23 janvier 1709 entre Jean LURAND, laboureur, mari de Marie AMIAUD, 
    veuve d'Etienne BOUYER et Pierre BOUYER, tous de Xambes sur un probl&egrave;me 
    d'h&eacute;ritage</li>
  <li>Sommation le 6 avril 1709 par Vincent NOUGIER et Jean BRETHOUMEAU, marchands, 
    de Tourriers &agrave; Louis HUET, marchand, de Tourriers de leur d&eacute;livrer 
    du bl&eacute;</li>
  <li>Inventaire le 23 juin 1709 des biens de d&eacute;funt Pierre MIGNOT, tailleur 
    d'habits pour Catherine DE MARCHOU, sa veuve, Pierre MIGNOT, charpentier, 
    Marie MIGNOT, leurs enfants, tous de St-Amant de Boixe, Pierre GAUTREAU le 
    jeune, praticien, de St-Amant de Boixe, Marguerite MIGNOT, sa femme, Jauvant 
    BERNAUD, mar&eacute;chal, de Villejoubert, mari de Fran&ccedil;oise MIGNOT, 
    les dittes MIGNOT, aussi filles du dit feu et de la ditte DE MARCHOU</li>
  <li>Partage le 20 juillet 1709 des biens de d&eacute;ffunt Marguerite RENAUD 
    pour Fran&ccedil;ois MAROT, laboureur &agrave; bras, son mari, Fran&ccedil;ois 
    MALLOIRE, laboureur &agrave; boeufs, Jacquette MAROT, sa femme, Jeanne MAROT, 
    tous de Nanclars et Jean PERAUD dit La Plante, laboureur &agrave; boeufs, 
    Marie MAROT, sa femme, de Cellettes</li>
  <li>Accord le 1 ao&ucirc;t 1709 entre Jean LAYDET, marchand, du village des 
    Loges, de Villognon et Louis PARTEAU l'a&icirc;n&eacute;, laboureur &agrave; 
    boeufs, Marie ROCHIER, sa femme , de Villognon suite &agrave; une instance 
    commenc&eacute;e devant le juge s&eacute;n&eacute;chal de Montignac</li>
  <li>Partage le 29 octobre 1709 des biens de Louise DUPONT, veuve de Jacques 
    MIGNOT entre Pierre et Fran&ccedil;ois MIGNOT, Guillaume MOULINIER, tisserand, 
    Marie MIGNOT, sa femme, tous de St-Amant de Boixe et Jacques MIGNOT, laboureur, 
    du village de Chez Rochereau, de St-Cybardeaux, ses enfants</li>
  <li>Inventaire le 26 novembre 1709 des biens de feu Fran&ccedil;ois TRUTAUD, 
    pour Jacques TRUTAUD, laboureur &agrave; bras, de St-Amant de Boixe, son fils</li>
  <li>Licitation le premier 1710 par Jean COULAUD, marchand, Henriette THINON, 
    sa femme, du village des Boitaux, de Montignac &agrave; Jean THINON, praticien, 
    du village de la Fich&egrave;re, de St-Amant de Boixe, les dits THINON, fils 
    de d&eacute;funts Pierre THINON et Catherine LOIZEL</li>
  <li>Sommation le 2 mai 1710 par Jean QUENTIN, laboureur &agrave; boeufs, du 
    village de Grobot, de St-Genis &agrave; Jean BLOIN le jeune de faire une r&eacute;trocession 
    de lieu</li>
  <li>Accord le 5 mai 1710 entre Fran&ccedil;ois DUSOUCHET, pr&ecirc;tre de Notre-Dame 
    de Montignac, Philippe BALLET, chirurgien, Charles GUILLEMOT, sergent royal, 
    fabriqueurs de la paroisse de Montignac et Jean THOUREAU, marchand, et Fran&ccedil;oise 
    VINCENT, sa femme, celle-ci h&eacute;riti&egrave;re de Jean VINCENT, ancien 
    cur&eacute; de Montignac</li>
  <li>Inventaire le 12 mai 1710 de la communaut&eacute; de Marie JOURNAUD, de 
    Villognon avec Jean THORIN, son premier mari, et de sa communaut&eacute; de 
    Marc PERAUD, son second mari</li>
  <li>Accord le 25 Ao&ucirc;t 1710 entre Jacques AMIAUD, sieur des Renthes, marchand, 
    fils de d&eacute;funt Jean AMIAUD le jeune, notaire et procureur de Montignac, 
    demeurant &agrave; Montignac Jean BAUD,dit la Routte, laboureur et Pierre 
    SIMON le Jeune, laboureur de Vouharte</li>
  <li>Inventaire le 11 d&eacute;cembre 1710 des biens de d&eacute;funts Antoine 
    GIET, tisserand et Louise CHATON sa femme, du village d'Orgeville pour Pierre 
    CHATON, laboureur, du village d'Orgeville, Jean CHATON, tonnelier, du village 
    du Tapis, de Montignac, Jean PELLON, laboureur, du village de Ste-Catherine, 
    d'Echallat, Pierre MILLEBERT, laboureur d'Aussac. Leur fille mineure, Fran&ccedil;oise 
    GIET est &eacute;lev&eacute;e par Pierre CHATON</li>
</ul>
<p>2E4206</p>
<ul>
  <li>Sommation le 22 f&eacute;vrier 1711 par Jacques GUY, sieur de la Ronze, 
    de Montignac aux habitants de Montignac de tirer au sort un soldat de milice</li>
  <li>Sommation le 16 mars 1711 par Jacques GUY, sieur de la Ronze, de Montignac 
    aux habitants de Montignac de tirer au sort un soldat de milice</li>
  <li>Partage le 24 mars 1711 des biens de d&eacute;funt Pierre MOREAU entre Pierre 
    MOREAU, Fran&ccedil;ois ROUSSEAU, son beau-p&egrave;re, laboureur, Marie GAUVIN, 
    veuve de Pierre MOREAU, Jean SOUDIERE, laboureur, Marie MOREAU, sa femme, 
    tous de Vouharte</li>
  <li>Inventaire le 26 mars 1711 des biens de feu Pierre SURREAU, du lieu de la 
    Trenoue, de Chebrac, pour Marie BOIREAU, sa veuve et Antoine SURREAU, son 
    fils avec d&eacute;ffunte Yollande GINDREAU</li>
  <li>Inventaire le 20 avril 1711 des meubles d&eacute;laiss&eacute;s par Charles 
    GUILLEMOT, sergent royal fait &agrave; la r&eacute;quisition de Henriette 
    AURAIN, sa veuve et de H&eacute;lie et Marguerite GUILLEMOT, ses enfants de 
    son premier mariage avec Marie CHASTENET, tous de Montignac</li>
  <li>Partage le 2 avril 1712 des biens de feu Charles GUILLEMOT, sergent royal 
    pour Henriette AURAIN, sa veuve, Jean et Marie GUILLEMOT, ses enfants, H&eacute;liet 
    et Magueritte GUILLEMOT, enfants du dit feu et de d&eacute;funte Marie CHASTENET, 
    sa premi&egrave;re femme, tous de Montignac</li>
  <li>Accord le 10 avril 1712 entre Jean MOUSSET, laboureur, Marie AUBOUIN, sa 
    femme, du village du Tapis, de Montignac, Fran&ccedil;ois ROUSSEAU, laboureur, 
    mari de Jacquette AUBOUIN, veuve de Gaspard MOREAU, Pierre MOREAU, fils du 
    dit Gaspard et de la ditte AUBOUIN, Jean SOUDIERE, laboureur, Marie MOREAU, 
    sa femme, aussi fille du dit Gaspard et de la ditte AUBOUIN, tous de Vouharte</li>
  <li>Accord le 20 avril 1712 entre Louis JOURDIN, laboureur, h&eacute;ritier 
    de Pierre JOURDIN, son fr&egrave;re, fils de Marie MIGNOT, de Villognon et 
    Fran&ccedil;ois MOREAU, Madeleine NADAUD, sa femme, de Mansle suite &agrave; 
    une instance pendante devant la justice de Montignac</li>
  <li>Accord le 20 octobre 1712 entre Michel BLANCHARD, tisserand et Jean BLANCHARD, 
    son fils, laboureur &agrave; boeufs, mari de Marguerite LAIR, fille de Louis 
    LAIR et Jeanne DESHERCE, tous deux du village de Bouffanais, de la paroisse 
    de Tourriers</li>
  <li>Accord le 8 d&eacute;cembre 1712 entre Fran&ccedil;ois MICHAUD, marchand 
    et Jean GUILLEMOT, praticien, tous de Montignac suite &agrave; une instance 
    criminelle intent&eacute;e par le dit MICHAUD contre le dit GUILLEMOT</li>
  <li>Licitation le 29 d&eacute;cembre 1712 par Fran&ccedil;ois BONNET, marchand, 
    veuf de Jeanne COMPAIN et Marguerite COMPAIN, du village de Vadalle, d'Aussac 
    &agrave; Fran&ccedil;ois GALLOUX, marchand, du village du Treillis, de Jauldes, 
    veuf de Madeleine COMPAIN les dittes COMPAIN, tous enfants de d&eacute;funts 
    Pierre COMPAIN et Fran&ccedil;oise GUILLEN</li>
  <li>Accord le premier mai 1713 entre Jean AMIAUD l'a&icirc;n&eacute;, notaire 
    et procureur de Montignac et Pierre LESPINOUX dit Jozet et Louis DUMAS, laboureurs 
    &agrave; bras, tous de St-Amant de Boixe</li>
  <li>Accord le 7 juin 1714 entre Pierre DECOUPTS , laboureur &agrave; bras, cessionnaire 
    de <br>
    Jean, Jacques et Andr&eacute;e POUTHIER, fr&egrave;res et soeur, du village 
    de Nitrat, de St-Amant de Boixe et Pierre MERGEAU, laboureur &agrave; bras, 
    de St-Amant de Boixe, veuf de Marie POUTHIER</li>
  <li>Accord le 5 novembre 1713 entre Antoine SURREAU, laboureur, fils de feu 
    Pierre ,Yollande GINDREAU, &eacute;mancip&eacute;e et autoris&eacute;e par 
    Henri MOUSSET, son curateur et Jean GODINEAU, laboureur, Marie BOIREAU, sa 
    femme, veuve du dit Pierre SURREAU, tous du village de Menadaud, de Chebrac</li>
  <li>Inventaire le 5 f&eacute;vrier 1714 de la communaut&eacute; entre Catherine 
    CLAVEAU, veuve de Jean THOUREAU dit Soldat, Jean THOUREAU, laboureur &agrave; 
    bras, son fils, tous de St-Amant de Boixe suite au CM du dit THOUREAU avec 
    Marie TIFFON</li>
  <li>Accord le 3 mars 1714 entre Jean THINON le jeune, praticien, du village 
    de la Fich&egrave;re, de St-Amant de Boixe et Jean RAVION, marchand de St-Etienne 
    les Montignac, suite &agrave; une sentence rendue par le juge de Montignac</li>
  <li>Inventaire le 15 avril 1714 des biens de d&eacute;funts Louis MOUSSET et 
    Marie ROUHET entre Antoine MOUSSET, laboureur &agrave; boeufs, Jeanne COUSSEAU, 
    veuve de Jacques MOUSSET, Louis MOUSSET, laboureur &agrave; boeufs, mari de 
    Marie MOUSSET, fille du dit feu Jacques et de la ditte COUSSEAU, tous de St-Etienne 
    les Montignac</li>
  <li>Sommation le 16 avril 1714 par Philippe ANDRE, sieur de Puyperoux, de Villejoubert 
    aux habitants de Montignac afin de nommer un nouveau collecteur de tailles 
  </li>
  <li>Inventaire le 26 avril 1714 des biens de d&eacute;funt Philippe CHARRUAUD, 
    du village de Terrebourg, de St-Angeau pour Florance ALLINEAU, sa veuve</li>
  <li>Inventaire le 9 ao&ucirc;t 1714 de la communaut&eacute; de Jean NOUGIER, 
    fils de Jacques, Marie TOURNIER, sa femme, Jacques NOUGIER, Antoinette BAUDRY, 
    sa femme, de Villejoubert</li>
  <li>Cession le 30 septembre 1714 par Guillaume ROBERT, meunier, Marie RENAUD, 
    sa femme, du moulin de Brechignat, de Vouharte &agrave; Antoine RENAUD, Catherine 
    GUERNAUD, sa femme, de Nanclars des successions de d&eacute;funts Antoine 
    RENAUD et Marie MAROT, p&egrave;re et m&egrave;re de la dite RENAUD</li>
  <li>Accord le premier octobre 1714 entre Louis MICHEAU dit Laroche, Louis MICHEAU 
    dit des Versennes et Louis MICHEAU dit Boisfort, laboureurs, Louis ROCHIER, 
    ma&ccedil;on, mari d'Anne MICHEAU et Louis JOURNAUD, laboureur &agrave; boeufs, 
    mari de Jacquette MICHEAU, tous de Villognon suite au retour du dit Laroche, 
    revenant du service du roi</li>
  <li>Partage le premier octobre 1714 des biens de d&eacute;funts Jean PENICHON 
    et Fran&ccedil;oise PETIT entre Jean MOUREAU, laboureur &agrave; bras, mari 
    de Fran&ccedil;oise PENICHON, Fran&ccedil;ois PRADEAU, laboureur &agrave; 
    bras, mari d'Antoinette PENICHON, les dittes PENICHON, filles des dits PENICHON 
    et PETIT, tous du village de Chez Bourrier, d'Aussac</li>
  <li>Sommation le 12 d&eacute;cembre 1714 par Jean BOUQUINET, laboureur et Pierre 
    BOIREAU, tailleur d'habits du village de Bouffanais, de Tourriers &agrave; 
    Louis TEXIER, marchand, du bourg de Tourriers</li>
  <li>Accord le 18 janvier 1715 entre Pierre HUET dit Buchille, laboureur, faisant 
    pour lui et Jacques HUET, son fr&egrave;re, enfants de d&eacute;funt Jacques 
    HUET, tous de deux de Villejobert, Vincent NOUGIER, laboureur &agrave; boeufs, 
    de Tourriers, Jacques HUET, laboureur, faisant pour Jean HUET, son fr&egrave;re, 
    fils de d&eacute;funt Antoine HUET dit Ridoullant et Jacques NADAUD, marchand, 
    de Villejoubert</li>
  <li>Transport de fonds par licitation le 21 mars 1715 &agrave; Antoine LEVEQUOT, 
    laboureur, de la barre d'Andonne, de Villejoubert par Marie LEVEQUOT, sa soeur, 
    veuve de Fran&ccedil;ois BOISSOT, du village de Fen&ecirc;tre, de Tourriers</li>
  <li>Inventaire le 15 avril 1715 des biens de la communaut&eacute; entre Pierre 
    BUROLLEAU, marchand, Jacques BUROLLEAU, marchand boucher, son fils, Louise 
    BINEAU, femme du dit Jacques, tous de Xambes</li>
  <li>Accord le 15 juin 1715 entre Fran&ccedil;ois FAURE, sieur de Grand Maison, 
    intendant des maisons et affaires de monseigneur Fran&ccedil;ois duc de la 
    Rochefoucauld, demeurant &agrave; Villognon et Jean CAILLIER, tonnelier, de 
    St-Amant de Boixe suite &agrave; des d&eacute;gradations commis par le dit 
    CAILLIER dans la for&ecirc;t de la Boixe</li>
  <li>Partage le 16 juin 1715 des biens de d&eacute;funts Antoine RENAUD et Marie 
    MAROT entre leurs enfants Antoine RENAUD, laboureur, Catherine GUERNAUD, sa 
    femme, le dit Antoine agissant de son chef et de celui de Marie RENAUD, femme 
    de Guillaume ROBERT, Michel RENAUD, laboureur, tous de Nanclars, Jean BLANCHARD, 
    laboureur &agrave; boeufs du village de Bouffanais, de Tourriers, Madeleine 
    RENAUD, sa femme</li>
  <li>Accord le 21 mars 1716 entre Jean CHARRUAUD dit Braudou, charpentier, Marie 
    CHARRUAUD, veuve de Pierre DE FONTROUBADE, Mathias PIET, laboureur, Anne CHARRUAUD, 
    sa femme, tous de Nanclars et enfants de d&eacute;funts Michel CHARRUAUD et 
    Antoinette CAZIN</li>
  <li>Accord le 15 mai 1716 entre ? ROBAIN, tailleur d'habits, du moulin de la 
    Court, de Ste-Colombe, Marguerite ALLARD, veuve de Berthoum&eacute; DELALEU, 
    Fran&ccedil;ois ROCHIER, son gendre suite &agrave; un proc&egrave;s</li>
  <li>Reconnaissance le 16 ao&ucirc;t 1716 par Antoine et Charles MAROT &agrave; 
    Jean MARTIN de Nanclars</li>
  <li>Acord le 6 septembre 1716 entre Marie FRANCOIS, veuve de Benoit MARQUAIS, 
    fille de d&eacute;funt Guillaume FRANCOIS, &eacute;tant aux droits de Pascal, 
    Mathieu dit Roch, Jean BIAIS, Antoine MARQUAIS dit Bonne Ann&eacute;e, Fran&ccedil;ois 
    BERNARD, Guillaume QUANTIN, son gendre, Guillaume MARQUAIS et Mathieu CRESTE, 
    Marguerite MARQUAIS, tous du village des Fontenelles, de St-Amant de Nou&egrave;re</li>
  <li>Accord le 26 novembre 1716 entre Jean et Thomas NORMANDIN, fr&egrave;res, 
    laboureurs &agrave; boeufs, du village de Villers, de Rouillac suites &agrave; 
    des sentences des duch&eacute;s de Montignac et La Rochefoucauld</li>
  <li>Accord le 23 mai 1717 entre Jean GUYONNET, marchand mar&eacute;chal, de 
    Montignac et Pierre ROOLLET et Pierre HUET, dit Buchille, laboureurs de Villejoubert 
    suite &agrave; une instance criminelle</li>
  <li>Accord le 6 d&eacute;cembre 1717 entre Michel BOIREAU, charpentier, du village 
    de Bouffanais, de Tourriers, veuf d'Antoinette BEANDEL, Louis BEANDEL, marchand, 
    Pierre SAUVAGE dit Lerousseau, marchand, faisant pour Louis SAUVAGE et Marguerite 
    BEANDEL, ses fils et nore, tous deux du village de Vadalle, d'Aussac, Nicolas 
    BASSET, marchand, exer&ccedil;ant les droits d'Anne BEANDEL, sa femme, du 
    village de Nombli&egrave;re, d'Anais </li>
</ul>
<p>Non photographi&eacute;s:</p>
<ul>
  <li>Inventaire le 30 juin 1710 des meubles et effets d'H&eacute;lie DUBOIS, 
    sieur de la Bernarde et de sa communaut&eacute; avec d&eacute;funte demoiselle 
    Marie RONDRAILH, vivant son &eacute;pouse</li>
  <li>Partage le 2 novembre 1710 entre Jean, Pierre, Marguerite, Anne, Marie et 
    Catherine BOUNICEAU</li>
</ul>

    <h4><big><b><u>
          <a name="fumeau">Fumeau</a></u></b></big></h4><h4>
    <ul type=disc><li>Vente par Anne Galland, veuve de Fran�ois Bounin, de St-Angeau et Pierre Bounin son fils, de Champniers � Jean Amiaud, procureur fiscal de Tusson et notaire et procureur postulant de Montignac, demeurant � St-Amant de Boixe le 20 juin 1680 (12 pages)</li><li>Vente par Fran�ois Mesnard, sargetier de Vars � Pierre De Ligoure, avocat, juge de Vars le 5 f�vrier 1682</li> <li>Reconnaissance par Jean DeLigoure, licenci� en droit � Marie Redon, veuve de Fran�ois de St-Martin, de Vars le 11 juin 1682</li><li>Vente par Marie Redon, veuve de Fran�ois de St-Martin, de Vars � Pierre De Ligoure, avocat et juge assesseur de Vars le 20 janvier 1683</li><li>Testament d'Abel De Ligoure, de Vars le 9 d�cembre 1688</li><li>Ferme par Jean Thoureau, sieur de Chesnevert, de Montignac � Simon Mousset sargier de Chebrac le 5 juillet 1699</li><li>Inventaire de feu Jean Vodichon pour Jean Chambaud, marchand et Anne Vodichon sa femme, fille du d�funt le 1er juin 1699</li><li>Reconnaissance par Charles De Marchou, laboureur � b�ufs de Montignac, sa femme Marie Dulong, fille Jean Dulong le Jeune et d�ffunte Catherine Vivier � Jean Hesriard, sieur de Chesne Escot ?, juge de Montignac, aux droits de Suzanne Gallopin, veuve de Pierre Mignot d'Aussac le 20 novembre 1699 </li><li>Vente par Marguerite Allard, veuve de Martin Cl�ment, de Tourriers � Vincent Nougier, laboureur � b�ufs de Tourriers le 21 mars 1700</li><li>Reconnaissance par Philippe Allebert, marchand du bourg d'Enord ? � Guillaume Allebert, de Vars, son fils et Louise Grateraud sa femme, fille de Jeanne Paillier le 21 octobre 1702</li><li>Accord entre Jean Gontier, laboureur de Marsac, Jeanne Delage sa femme et Andr�e Giraud, veuve de Jean Verit, de Jauldes le 25 janvier 1701</li>
    </ul></h4><h4><big><b><u>
          <a name="fumeau">Fumeau (mais premi�re page uniquement)</a></u></b></big></h4><h4>
    <ul type=disc><li>Inventaire des biens d'Antoine Berthouneau, laboureur de Villejoubert pour sa femme Fran�oise Buherne le 15 f�vrier 1694</li><li>Inventaire des biens de Jean De Bonneuil pour sa veuve Anne Pasquet, de Vars en vue de son remariage avec Jean Bouyer, fils de Jean, laboureur de Xambes  le 20 avril 1702</li>
    </ul></h4><h4><big><b><u>
          <a name="gorrain">Gorrain</a></u></b></big></h4><h4>
    <ul type=disc><li>Quittance de Julien Regnier et Fran�oise Biron, sa femme, fille de feu Fran�oise Guillen, de Montignac � Louis Faure, laboureur � bras de Montignac, et son fr�re Jean, fils de feu Isabelle Mounier le 14 janvier 1670</li><li>Cession de Pierre Gardere, sellier de Montignac � Jacques Auraing, sieur de Bastebaud, de Bignac le 1er mai 1670</li><li>Ferme par Fran�ois Quessard de laboureur � bras de St-Amant de Boixe � Antoine Cl�ment, gallochier de St-Amant de Boixe le 10 ao�t 1670</li><li>Ferme par Abraham Auraing, chirurgien de Montignac � Pierre Micheau, cordonnier de Montignac le 22 d�cembre 1670</li><li>Vente de Jean Morand, fils de feu Denis, laboureur � bras de St-Amant de Boixe � Jean Morand texier de St-Amant de Boixe et Fran�ois Esnard, fils de Pierre, laboureur � bras de Montignac le 24 octobre 1671</li><li>Accord entre Jean Morand, fils de feu Denis, laboureur � bras de St-Amant de Boixe avec Jean Morand, texier de St-Amant et Fran�ois Esnard, fils de Pierre de Montignac le 24 octobre 1671</li><li>Vente de Guy Berthonneau, marchand de Puyreaux � Pierre Briand, sieur du Fouilloux, de Vouharte le 4 d�cembre 1671</li><li>Arrantement par Georges Briand, laboureur � bras de St-Amant de Boixe � Pierre De Lamaschiere, laboureur � bras de St-Amant de Boixe le 8 d�cembre 1671</li><li>Ferme par Charles Preveraud, sieur de Peuxm�ans de Montignac � Antoine Cl�ment, marchand d'Anais le 29 juin 1674</li><li>Vente de Louis Gratereau, praticien de Coulonges et Charles Gratereau marchand de Xambes � Jean Ballet, marchand de Montignac le 20 novembre 1674</li><li>Partage des biens de d�funts Martial Boutillier et Jeanne Piffre entre Guillaume Noireau, sargier du faubourg de St-Cybard les Angoul�me, mari d'Anne Boutillier, Annet Ducluzeau, sieur de Maisonneuve, de Busserolles en Perigord, mari de Marie de Boutillier, Jean Berard, marchand de Vars, mari d'autre Marie Boutillier, Jean Boutillier, laboureur � boeufs de Tourriers et Louis Boutillier laboureur � boeufs de Champniers le 17 f�vrier 1675</li><li>Quittance de Catherine Morand, veuve de Pierre Esnard et son fils Fran�ois Esnard de Montignac � Jacquette Durouzier femme de ce dernier le 3 juin 1675</li><li>Vente de Denis Bouhier, fils de feu Pierre, sargier de Dirac et son fr�re Pierre, mar�chal � Xambes � Jean Sauvet, sieur de la Coste marchand � Montignac le 12 juin 1675</li><li>Ferme par Louis Morice de Tremouille de Talmon � Pierre Tiffon, sieur des Brousses, de St-Groux, Catherine Rouhier sa femme et Michel Martain, sieur de Fontrobain, de Mansle sa femme Jeanne Tiffon le 18 juillet 1675</li><li>Ferme par Pierre Gaydet, sieur de la Rivi�re, veuf de Fran�oise De Cazemajour � Philippe Chossepied, laboureur � b�ufs de Xambes le 17 novembre 1675</li><li>Reconnaissance de Jean Chaisne dit La Fosse, fils de feu Guy, laboureur � b�ufs de St-Angeau � Jacques De Cazemajour, sieur du Maisne Bertaud et Jean Tizon, sieur de Sigogne de Fontclaireau le 1er mai 1676</li><li>Inventaire des biens de feu Louis Mousset de Chebrac pour son fils Pierre charpentier de Marsac le 11 juin 1677</li><li>Accord entre Antoine Chaisne, fils de Jean, laboureur � boeufs et Geoffroy Couchaud, fils de feu Fran�ois, laboureur � bras, tous deux de Vouharte le 19 d�cembre 1677</li><li>Reconnaissance de Jean Pallot, laboureur � bras de Montignac, fils de Tiphaine Crespeau et sa femme Marie Fougi�re, � Jean Desport, fils de feu Paul notaire royal du village d'Argence (Champniers ?) le 13 mars 1678</li><li>Arrentement par Fran�ois Birot, �cuyer sieur d'Amblecourt, de Vouharte � Michel Moreau, laboureur � boeufs du village de Vindelle le 12 mars 1679</li><li>Partage des biens de feu Jacques Viault entre Jean Viault, laboureur � bras, fils du dit feu et feu Catherine Chaton, Louis Viault, fils du dit feu et de d�funte Jeanne De Genat, laboureur � bras, Fran�ois Robert, Suzanne Viault sa femme, fille du dit feu et de d�funte Jeanne De Genat le 11 janvier 1683</li><li>Accord entre Fran�ois Chaisne dit Suisse, laboureur � bras de Coulgens et Benjamin Augier, laboureur de Vadalle, mari de Catherine Chaisne, fille de feu Jean le 22 janvier 1683</li><li>M�tairie par Isaac Pappot, sieur de Bois Rousseau, avocat, de Montignac � Louis et Simon Mousset fr�res et leurs femmes Denise et Jeanne Barangier le 24 f�vrier 1684</li><li>Accord entre H�lie Dubois, sieur de la Bernarde, procureur fiscal de Montignac et Marie Baratte, veuve de Jean Treillaud, sergent royal, d'Angoul�me le 6 ao�t 1684</li><li>Arrentement par Pierre Bauny, notaire de Montignac � Louis Viaud, laboureur � bras de St-Amant de Boixe le 11 novembre 1685</li><li>M�tairie par Isaac Couprie, chirurgien de Montignac � Jean Foucaud, laboureur de Vouharte le 12 mai 1686</li><li>Vente de Pierre et H�lie Arnaud, fr�res, laboureurs � boeufs du Maine de Boixe � Louis Gratereau, praticien de Coulonges le 12 septembre 1688</li><li>Arrentement par H�lie Dubois, sieur de la Bernarde, procureur fiscal de Montignac � Blaise Rochier, ma�on de St-Amant de Boixe le 24 f�vrier 1691</li><li>Vente de Fran�ois Godineau, fils de feu Fran�ois, laboureur � b�ufs de Chebrac � Louis Godineau, laboureur � b�ufs de St-Genis le 16 avril 1691</li><li>Accord entre Jean De Chaumont, pr�tre de Vervant et Abraham Trutaud, sergent royal, fils de d�funt Jean Trutaud dit Caput et Anne Delage le 1er mai 1691</li><li>Cession de Pierre Maudet, texier de Montignac � Fran�ois Godineau, laboureur � boeufs de Chebrac le 29 juillet 1691</li><li>Inventaire des biens de feu Antoine Delaborde de Xambes pour Jeanne Morand sa veuve et Jean et Louis Delaborde ses enfants le 29 ao�t 1691</li><li>Arrentement par Abraham Seguin, sieur des Loges, de Montignac � Fran�ois Ravon, laboureur � bras de St-Amant de Boixe le 1er juillet 1691</li><li>Accord entre Jean Morand dit Petit Jean, laboureur � bras de St-Amant de Boixe et sa soeur Jeanne, enfants de feu Jean Morand et de Marguerite Fourestier le 12 mars 1692</li><li>Accord entre Jean Peraud dit Valon, fils de feu Marguerite Prevost, David Prevost, tailleur d'habits et Catherine Denis sa femme tous de Cellettes avec Jean et Jacques Gaschet, fr�res, p�cheurs de Vouharte, fils de feu Jacques et Toussainte Raveau le 18 mars 1692</li><li>Cession d'Abraham Seguin, sieur des loges, de Montignac en faveur de Jacques Preveraud, sieur de Beaumont, de Villefagnan, Anne Seguin sa femme, Jean Babain, sieur de Ranville, d'Angoul�me, Ester Seguin sa femme et Daniel Seguin, sieur de la Vervante,de Montignac ses enfants le 11 ao�t 1692</li><li>Partage des biens d'Arnaud Esnard de St-Amant de Boixe entre sa veuve Marguerite Estachon, ses enfants Jean et Fran�ois Esnard  et Bastienne Esnard fille de son premier mariage avec Mich�le Durandeau le 8 septembre 1692</li><li>Testament de Jean Morand, fils de feu Jacques, de St-Amant de Boixe en faveur de Jean et Jeanne Morand, enfants de Denis son oncle et L�onarde Charraud le 15 d�cembre 1692</li><li>Vente de Jean Amiaud, l'a�n�, notaire et procureur postulant de Montignac, de St-Amant de Boixe � Marie Gratereau, veuve de Jean Guignier, sa belle-soeur de St-Amant de Boixe le 4 mars 1693</li><li>Accord entre Jean Constantin, sieur de la Treille, chirurgien d'Anais et Louis Delacroix, charpentier d'Aussac le 5 mai 1693</li><li>Vente de Fran�ois Boiteau, laboureur � bras de St-Amant de Boixe et sa femme Louise Gaschet � Fran�ois Boucquinet, laboureur � bras de St-Amant de Boixe le 18 mai 1693</li><li>Testament de Jeanne Morand, fille de Jean et Marguerite Fourestier pour Antoinette, Madeleine, Pierre enfants de son fr�re Jean (�poux de Marie Chambaud?) le 30 janvier 1700</li><li>Renonciation de Etienne Bonnet, marchand d'Aussac et Jeanne Quillet sa femme aux biens de feu Marie Martin m�re de celle-ci en faveur de Jean Gontier et Jeanne Quillet sa femme le 3 mars 1703</li><li>Proc�s Verbal pour Louis Bonnet, marchand d'Aussac le 24 avril 1703</li><li>Accord entre Louis Bonnet marchand et Jean Navarre, laboureur, Jeanne Couraud sa femme, Laurent Pesre?, ma�on, Jeanne Navarre sa femme, Jean Navarre, fils de Guillaume, tous de Vadalle le 22 mai 1703</li><li>Arrentement par Andr� Brebion, laboureur � boeufs de Balzac et Marie Matard sa femme � Marguerite Barate et Mathias Albert, gallochier son gendre de Champniers le 23 septembre 1708</li><li>Vente de Jean Nadaud, laboureur � b�ufs de Coulonges et sa femme Marguerite Degail � Jacques Laidet, marchand d'Amb�rac le 14 mars 1717         * Vente de Cl�ment Gratereau, praticien de Coulonges � Pierre Bouhier, fils de Collas, de Coulonges le 26 f�vrier 1724</li>
    </ul></h4><h4><big><b><u>
          <a name="gorrain">Gorrain (mais premi�re page uniquement)</a></u></b></big></h4><h4>
    <ul type=disc><li>Partage des biens de feu H�liot Amiaud entre Louis Amiaud, laboureur � boeufs de Vervant, Antoine Quentin le jeune, fils d'Antoine et feu Jeanne Amiaud, laboureur � boeufs de Vervant, Louis De Marchou l'a�n�, Louis de Marchou le jeune, laboureur � boeufs, Fran�ois De Marchou, charpentier, Marie De Marchou, veuve de Fran�ois Bouquinet de St-Amant de Boixe et Fran�ois Poinsonnet, laboureur � b�ufs de Lux�, mari de Jeanne De Marchou le 24 mars 1673</li><li>Ferme par Pierre Gaydet de St-Amant de Boixe � Philippe Chossepied, laboureur � b�ufs de Xambes le 17 novembre 1675 (Tr�s floue)</li> <li>Inventaire des biens de feu Charles Gaidet pour Pierre Gaydet, sieur de la Rivi�re, Louise Gaidet, veuve de Jean Loisel, sieur du Treuil, Jean Vinsonneau, fils de feu No�l et Fran�oise Gaydet ses neveux et ni�ces le 20 mars 1679</li><li>Inventaire des biens de Louis De Marchou et sa femme Louise Pasquereau le 3 f�vrier 1684 pour Jean De Marchou, leur fils �mancip�</li><li>Proc�s Verbal pour Pierre et Jean Giraudeau, marchands de St-Genis le 28 ao�t 1705</li><li>Partage des biens de feux Jean Tiffon et Anne Morand de St-Amant de Boixe le 30 janvier 1706</li>
    </ul> 
    <ul type=disc>
    <p>
          <br> 
          </h4><h4><big><b><u>
                  <a name="bauny">Bauny</a></u></b></big>
          
          <p>Le notaire Bauny est un notaire tr�s lisible. On remarque des actes concernant des personnes ext�rieures au canton de St-Amant de Boixe :
          
          </p>
      </ul></h4><h4>
     <ul type=disc>
        <li>Abraham Dulignon, marchand tanneur de la Rochefoucauld</li>    <li>Fran&ccedil;ois Sciquaire, sieur des Houmes? ou Hommes, Ester Veyret, sa femme de Montemb&oelig;uf, Jean Dessalis, sieur des Martres, d'Agonac en Perigord</li>   
  <li>Accord le 8 d&eacute;cembre 1652 entre H&eacute;lie Guy, sieur des Essards, de Montignac et Jean Guillen dit Baffert?, charpentier de Vadalle</li>    <li>Accord le 2 juillet 1653 entre Abel De Ligoure, sieur de Beauregard, conseiller du roi, d'Angoul&ecirc;me &agrave; Jean Chastenet, marchand de Montignac </li>    <li>Accord le 9 mars 1657 entre Jean Delafont, cordonnier, d'Angoul&ecirc;me et Simon Chatton, mar&eacute;chal, de St-Cybardeau</li>    <li>Accord le 18 octobre 1658 entre Pierre Copperie, chirurgien, de Montignac et Abraham Dulignon, marchand tanneur, de la Rochefoucauld, mari de Madeleine Martin</li>    <li>Acord le 20 juin 1667 entre Isaac Couprie, chirurgien de Montignac, fils de feus Daniel et Marie Nadault, Jean Guynard, restaurateur de corps humains,fils      de feus Jean Guynard et Marie Guittet, Marie Coupre, sa femme, de Bignac,       Isaac Fruchet, marchand, Marie Guynard sa femme (8 pages)</li>    <li>Accord      le 11 d&eacute;cembre 1662 entre Mathurin Tiffon, laboureur &agrave; bras, de Vouharte,      fils de feu Th&eacute;ophile et Laurence Mathieu et Pierre Tiffon, son fr&egrave;re,       meunier, de la Chapelle</li>    <li>Accord      le 3 mai 1664 entre Etienne Touzeau, papetier, de St-Michel d'Entraigues      et Jean Mignot, mari de Penotte Mallet, Jean Chevroux, tailleur d'habits,      mari de Catherine Mallet, filles de feus Jean Mallet et Catherine Rouhet,       de St-Amant de Boixe</li>    <li>Accord      le 23 ao&ucirc;t 1666 entre Jean Mangon, cessionnaire de Ren&eacute;e Mangon, sa soeur,      veuve de Jean Rouhet, et Simone Gastineau, veuve de Huriel Mathieu, Michel       Mathieu son fils, laboureur &agrave; bras de Xambes</li>    <li>Accord      le 25 octobre 1667 entre Fran&ccedil;ois Thinon, fils de Guillaume, veuf de      Lucette Dupond, fille de feu Philipon et Jeanne Fran&ccedil;ois et Jeanne       Fran&ccedil;ois, Fran&ccedil;ois Dupond, son fils laboureur &agrave; bras, tous de Montignac</li>    <li>Accord      le 31 janvier 1670 entre Jean Ballot, laboureur &agrave; boeufs, de St-Angeau      fils de feu Jean et Pierre et Raymond Gobeau, de St-Ciers, fils de feu       L&eacute;onard Gobeau</li>    <li>Accord      le 3 f&eacute;vrier 1671 entre Louis Gratereau, sergent et Pierre Delarge,       laboureur &agrave; bras, tous deux de Coulonges</li>    <li>Accord      le 6 janvier 1673 entre Pierre Giraudeau, laboureur &agrave; bras,de Vars, fils      de feu Jacques et Antoine Giraudeau dit La Pradelle, laboureur &agrave; bras, de       Marsac, son fr&egrave;re, mari de Fran&ccedil;oise Boiteau</li>    <li>Accord      le 17 avril entre Pierre Nadault, tailleur d'habits et Jean Nadault le      jeune, aussi tailleur d'habits, son fr&egrave;re, tous de la Chapelle, fils de       d&eacute;funte Lucresse Moreau, h&eacute;riti&egrave;re de Philippe Galloux, sa tante</li>    <li>Accord      le 5 juin 1675 entre Louis Grattereau, praticien, de Coulonges, veuf de      Marie Giraud, fille de feus Fran&ccedil;ois Giraud et Judicq Martonneau, fille de      Gauthier Martonneau, lui-m&ecirc;me fils d'Antoine Martonneau, et Charles      Grattereau, de Xambes, sieur des Ousches, retrocessionnaire de Robert Paillier,      sieur du Pertat, cessionnaire de Jean Paillier, sieur de la Prade, Antoine      Degail, le jeune, laboureur &agrave; boeufs, de Coulonges, h&eacute;ritier de Michel       Vouillat, son a&iuml;eul</li>    <li>Accord      le 13 septembre 1676 entre Louis Grattereau, sergent et Jean Delaage, Simone       Vouillat, sa femme, tous de Coulonges</li>    <li>Accord      le 3 septembre 1677 entre Jean Barangier, laboureur &agrave; boeufs, de Vars et       Jean Lheriaud dit Galune, de Tourriers, Jacquette Buherne, sa femme</li>    <li>Accord      le 8 septembre 1677 entre Thomas Cherbounier, laboureur &agrave; boeufs, Antoine      son fils, de Montignac et Antoine Quantin dit La Mairie, laboureur &agrave;      boeufs, de Vervant suite au mauvais traitement d'un boeuf d'Antoine       Quentin </li>    <li>Accord      le 13 septembre 1677 entre Fran&ccedil;ois De La Maschi&egrave;re, boucher, Anne      Boissot, sa femme et Pierre Pinaud, vitrier et cabaretier, tous de       Montignac</li>    <li>Accord      le 9 juin 1678 entre Fran&ccedil;ois Godin, laboureur &agrave; bras, de Montignac, veuf      de Jeanne Estachon, Arnaud Esnard, laboureur &agrave; bras, Bastienne Estachon,       femme de Jean Regon dit Mazarin tous les deux de St-Amant de Boixe</li>    <li>Accord      le 5 d&eacute;cembre 1678 entre Anne Delaage, veuve de Jean Trutaud dit Capput et      Fran&ccedil;ois Nadaud, mar&eacute;chal, tous de St-Amant de Boixe suite au       &quot;meutre&quot; d'une anesse</li>    <li>Accord      le 28 avril 1679 entre Gilles David, mar&eacute;chal de Jauldes, Simon Pouillat,      laboureur &agrave; boeufs de St-Angeau et Jean Galloux, laboureur &agrave; bras de       Jauldes sur les biens des mineurs de feus Pierre Billat et Marie Pouillat</li>    <li>Accord      le 25 ao&ucirc;t 1679 entre Michel Tiffon, tonnelier, Suzanne Pallot, sa femme,      fille de Tiphaine Crespeau et Jean Pallot, aussi son fils, tonnelier,       Marie Fougi&egrave;re, sa femmme, tous de Montignac</li>    <li>Accord      le 21 juin 1680 entre Jean Bouhier dit Manosdon, laboureur &agrave; boeufs de la      Chapelle, Marguerite Bineau, sa femme et Philippe Chaussepied, laboureur &agrave;       boeufs, de Xambes, Marguerite Bouyer sa femme</li>    <li>Accord      le 17 d&eacute;cembre 1683 entre Jean Fabveraud, marchand de Lanville et Jean       Rouhet dit Lagarde, de St-Amant de Boixe</li>    <li>Accord      le 6 mars 1684 entre Jean Mignot, fils de feu Pierre, texier en toile,      Fran&ccedil;oise Nadaud, sa femme et Pierre Pappounet, marchand, fils de Pierre      dit Canichou, Esmerie Trutaud sa femme, tous de St-Amant de Boixe suite &agrave;       un probl&egrave;me de voisinage</li>    <li>Accord      le 25 avril 1686 entre Jacob Bouhier, laboureur &agrave; boeufs, Madeleine      Chauveau, sa femme et Pierre Bouhier dit Cadet, laboureur &agrave; boeufs, veuf      de Jeanne Pillet, tous de Coulonges, enfants de d&eacute;funts Michel Bouhier et       Marthe? Priot</li>    <li>Accord      le 21 avril 1688 entre Pierre Bire, sergent royal, Marie Geoffroy, sa      femme et Fran&ccedil;ois Deleschelle, marchand, Michelle Collain, sa femme, tous      de Mansle suite aux exc&egrave;s commis par la ditte Collain sur la ditte       Geoffroy</li>    <li>Accord      le 27 avril 1689 entre Louis Binaud, notaire, de Bignac et Antoine et       H&eacute;lie Chaisne, fr&egrave;res, laboureurs &agrave; boeufs, de Vouharte</li>    <li>Accord      le 11 juin 1690 entre Louise Rabotteau, de Tourriers, veuve de Jean      Pouthier, tailleur d'habits, donataire de Jean Goumard dit Mouricaud, son      oncle, Jean Goumard, Marie Goumard, de Brie, sa soeur, Jean Goumard le      Jeune, de St-Amant de Boixe, leur cousin, Jean Boytaud, de Vars, fils de       feus Pierre et Catherine Petit, </li>    <li>Annonce      d'une vente aux ench&egrave;res le 29 janvier 1679 par Gilles David, mar&eacute;chal de      Jauldes et Simon Pouillat, laboureur &agrave; boeufs, de St-Angeau des biens des       mineurs de feus Pierre Billat et Marie Pouillat </li>    <li>Apprentissage      le 4 juillet 1666 du m&eacute;tier de chirurgien par Ren&eacute; Aurain, chirurgien de       Montignac &agrave; Pierre Aurain, de Bignac</li>    <li>Arentement      le 20 juin 1649 par Jean Gaultier, sieur de Puyperoux, de Montignac &agrave; Jean       Journaud, laboureur &agrave; bras, de St-Amant de Boixe (2 exemplaires)</li>    <li>Autre      arentement le 20 juin 1649 par Jean Gaultier, sieur de Puyperoux, de       Montignac &agrave; Jean Journaud, laboureur &agrave; bras, de St-Amant de Boixe</li>    <li>Arentement      le 29 septembre 1652 par Genis Guy, sieur de la Brousse, de Chebrac &agrave;       Pierre De La Maschi&egrave;re, fils de Pierre, de Montignac</li>    <li>Arentement      le 22 d&eacute;cembre 1652 par Pierre Biot, p&ecirc;cheur, de Montignac, Anne Mignot,       sa femme, &agrave; Jean Journaud, laboureur &agrave; bras, de St-Amant de Boixe </li>    <li>Arentement      le 13 f&eacute;vrier 1654 par Pierre Thinon, sieur des Voutes, de Vervant &agrave; Jean       Journaud, laboureur &agrave; bras, de St-Amant de Boixe</li>    <li>Arentement      le 2 avril 1673 par Abraham Seguin, de Montignac &agrave; Jean Bouquinet, dit La      Ruyne, charpentier, Louis Viaud, laboureur &agrave; bras, tous deux de St-Amant       de Boixe</li>    <li>Cession      le 31 mars 1657 par Fran&ccedil;ois Chadoutaud &agrave; Abraham Seguin, sieur des Loges,       tous deux de Montignac</li>    <li>Cession      le 29 janvier 1663 par Antoine Thinon, texier &agrave; Pierre Thinon, son fr&egrave;re,       texier en linge, veuf de Marie Fruchet, tous de Montignac </li>    <li>Cession      le 12 juin 1672 par Antoine Quentin, laboureur &agrave; boeufs, pour Fran&ccedil;ois et      Louis Amyaud,ses oncles, Fran&ccedil;ois Poinsonnet, laboureur &agrave; boeufs, de Lux&eacute;,      mari de Jeanne De Marchou, Louis De Marchou, charpentier, Fran&ccedil;ois De      Marchou, charpentier, son fr&egrave;re, autre Louis De Marchou, son fr&egrave;re, Marie      De Marchou, veuve de Fran&ccedil;ois Bouquinet dit Roquet, tous de St-Amant de      Boixe &agrave; Louis Bouquinet, fils de feu Louis, laboureur &agrave; bras, de St-Amant      de Boixe, Marie Quantin, sa femme, parents de Julienne, Antoine, Louis et       Marguerite Bouquinet, </li>    <li>Compte      le 26 juillet 1651 entre Pierre Thinon, sieur des Voustes et Antoine       Quantin dit Lamairie, tous les deux de Vervant</li>    <li>Compte       rendu le 8 janvier 1670 des tailles de St-Amant de Boixe (17 photos)</li>    <li>Compte      le 18 novembre 1682 des tailles de la paroisse de St-Amant de Boixe (6       photos)</li>    <li>D&eacute;claration      le 25 mars 1657 par Jacques Tiffon, sieur des Nouhiers, juge de Vouharte, de      Montignac suite &agrave; l'inclusion &quot;abusive&quot; de Marie Pascaud, veuve      de Jean de St-Amant, &eacute;cuyer sieur de la Gagnerie dans les tailles de       St-Amant de Boixe </li>    <li>D&eacute;claration      le 11 octobre 1682 de Jacob Bouhier, laboureur de Coulonges aux habitants       de Coulonges suite &agrave; un mauvais calcul des tailles</li>    <li>Diminution      de l'imposition le 16 novembre 1677 de la paroisse de Xambes pour l'ann&eacute;e       1678</li>    <li>Don      mutuel le 25 juillet 1672 entre Ren&eacute; Aurain, chirurgien et Marthe Ancelin,       mari et femme, de Montignac</li>    <li>Donation      le 6 janvier 1654 par Martine Boitaud, veuve de Pierre Menachaud &agrave; Louis       Mousset l'a&icirc;n&eacute;, tous deux de Chebrac</li>    <li>Donation      le 11 ao&ucirc;t 1669 par Jacques Redon, laboureur &agrave; boeufs, Marthe Nougier, sa      femme &agrave; Marie Redon, leur fille, femme de Jacques Bachellon, laboureur &agrave;       boeufs, tous de Villejoubert</li>    <li>Donation      le 19 mars 1680 par Fran&ccedil;ois Nadault l'a&icirc;n&eacute;, fils de feu Guillaume, de      Coulonges &agrave; Pierre et Nicolas Bouhier, fils de Jacob, laboureurs &agrave; boeufs       de Coulonges</li>    <li>Donation      le 28 ao&ucirc;t 1689 par Jean Hesraud, laboureur &agrave; boeufs, Marguerite      Barangier, sa femme &agrave; Philippe Hesraud, laboureur &agrave; boeufs, leur fils,       tous du village d'Asni&egrave;res</li>    <li>Echange      le 8 janvier 1651 entre Jean Gaurin, marchand, de Montignac et Jean       Bouhier, laboureur &agrave; boeufs, de Coulonges</li>    <li>Echange      le 1er septembre 1652 entre Jean Chastenet, marchand et Pierre Chastenet,       marchand, son fils, tous deux de Montignac</li>    <li>Echange      le 18 avril 1655 entre Andr&eacute; Goumard, laboureur &agrave; boeufs, et Michel Lotte,       Louise Barradeau, sa femme, tous de Vouharte</li>    <li>Echange      le 1er septembre 1658 entre Michel Quantin, laboureur &agrave; bras, de Vervant       et Guillaume Chollet, laboureur &agrave; bras, de Montignac</li>    <li>Echange      le 2 novembre 1658 entre Jean Goumard, laboureur &agrave; bras, Jean Pouthier,      tailleur d'habits, de Tourriers et Philippe Decoustz, tailleur d'habits,       de St-Amant de Boixe, Andr&eacute;e Pouthier, sa femme</li>    <li>Echange      le 12 mars 1659 entre Jacques Huet, subsitut du procureur fiscal de       Montignac, et Pierre Chastenet, marchand, de Montignac</li>    <li>Echange      le 8 d&eacute;cembre 1663 entre Pierre Copperie, chirurgien, de Montignac et      Michel et Pierre Verdier, fr&egrave;res, marchands, maris de Fran&ccedil;oise et       Marguerite Duneaud, de Montignac</li>    <li>Echange      le 31 mars 1666 entre Fran&ccedil;oise Guy, veuve de Jean Birot, sieur de      Servolle et Fran&ccedil;oise Foucaud, veuve de Hesliot Bouyer dit le Villain,       Daniel Bouhier, son fils, laboureur &agrave; bras, de Xambes</li>    <li>Echange      le 12 f&eacute;vrier 1668 entre Antoine Bouquinet, laboureur &agrave; bras et Pierre       Petignot, laboureur &agrave; bras, tous deux de St-Amant de Boixe</li>    <li>Echange      le 24 juin 1673 entre Michel Mossion dit Petit Pr&eacute;, laboureur &agrave; boeufs,      Louis et Jean Journaud, fr&egrave;res, Martin Martaguet le Jeune,mari d'Emerie       Lurand, Jean Aigron, mari de Marie Journaud, tous de Villognon</li>    <li>Ferme      le 5 avril 1649 par Antoine Robert, tailleur d'habits, de Montignac &agrave;       Michel Charruaud, laboureur &agrave; bras, de Montignac (2 exemplaires)</li>    <li>Ferme      le 28 mai 1652 par Pierre Birot, sieur du Vignault, pour Abraham Aurain,       sieur de Bois Pineau &agrave; Antoine Guillen, h&ocirc;tellier, d'Aussac</li>    <li>Ferme      le 15 juillet 1663 par Jean Gesmond, procureur fiscal de Genac, de       Montignac &agrave; Antoine Quentin, dit Lamairie, laboureur &agrave; boeufs, de Vervant</li>    <li>Inventaire      le 31 janvier 1657 des biens de d&eacute;funts Pierre Mallet, charpentier, et      Marie Nadault sa femme, de St-Amant de Boixe pour Isabelle Mallet, leur       fille</li>    <li>Inventaire      le 11 ao&ucirc;t 1669 pour Jean Biot le Jeune, fils de Jean, veuf de Denise       Gaurin, de Montignac suite &agrave; son mariage avec Margueritte Cathellineau</li>    <li>Inventaire      le 25 mars 1675 du b&eacute;tail et charrettes en vue d'une m&eacute;tairie donn&eacute;s par      Louis Gratereau, praticien &agrave; Jacob Bouhier, Madeleine Chauveau, sa femme,       tous de Coulonges (7 pages)</li>    <li>M&eacute;tairie      le 27 avril 1672 par Louis Gratereau, praticien, veuf de Catherine Birot &agrave;      Jacob Bouhier, laboureur &agrave; boeufs et Madeleine Chauveau, sa femme, tous de       Coulonges</li>    <li>Nomination       le 7 juin 1657 des collecteurs de taille de la paroisse de Chebrac</li>    <li>Nomination      le 10 janvier 1666 des collecteurs de taille de la paroisse de St-Amant de       Boixe</li>    <li>Nomination       le 11 janvier 1666 des syndics de la paroisse de Coulonges</li>    <li>Nomination       le 1 janvier 1667 des syndics de la paroisse de Coulonges</li>    <li>Partage      le 26 avril 1650 des biens de feus Michel Pouthier et Marie Pappounet      entre Michel Pouthier, tailleur d'habits de Montignac, autrel Michel      Pouthier, tailleur d'habits de Vitrac?, Jean Pouthier, tailleur d'habits       de Tourriers, leurs enfants</li>    <li>Partage      le 16 mars 1653 des biens de feue Marie Pappounet, veuve de Michel      Pouthier entre Philippe Decoustz, tailleur d'habits, Andr&eacute; Pouthier, sa      femme, de St-Amant-de-Boixe, Michel Pouthier, tailleur d'habits, de       Montignac, Jean Pouthier, tailleur d'habits, de Tourriers ses enfants </li>    <li>Partage      le 26 d&eacute;cembre 1653 des biens de feu Phiare? Sureau entre Jacques Sureaud,      de Bignac, Jean Sureau, Simon Mousset, mari de Marie Sureau, Fran&ccedil;ois       Godineau, mari de Anne Sureau, tous de Chebrac </li>    <li>Partage      le 1er janvier 1656 des biens de feue Ren&eacute;e Blanchard entre Fran&ccedil;ois,      autre Fran&ccedil;ois, Arnaud Papounet, laboureur &agrave; bras, fr&egrave;res de St-Amant de       Boixe</li>    <li>Partage      le 4 novembre 1658 entre Tiffaine Crespeau, veuve de Denis Pallot, Jean      Pallot son fils et Michel Tiffon, charpentier, Suzanne Pallot sa femme,       fille de la dite Tiffaine Crespeau et Denis Pallot, tous de Montignac</li>    <li>Partage      le 4 mai 1664 des biens de feus Antoine Fougi&egrave;re et Anne Crespeau entre       Louise Fougi&egrave;re et Marie Fougi&egrave;re, veuve d'Antoine Fougi&egrave;re, leurs filles </li>    <li>Partage      le 3 d&eacute;cembre 1664 des biens de feus Antoine Chollet et Fran&ccedil;oise Crespeau      entre Jean Chollet, sargier, Marie Charruaud, sa femme et Fran&ccedil;ois?      Thoureau?, farinier, L&eacute;onarde Chollet, sa femme, tous de Montignac (6       pages)</li>    <li>Partage      le 23 mars 1665 entre Charles Thinon, notaire de Montignac et Pierre      Birot, sieur de la Brouhe, Marie Thinon, sa femme, tous de Montignac (6       pages)</li>    <li>Partage      le 23 mars 1665 entre Pierre Birot, sieur de la Brouhe, Marie Thinon, sa       femme et Marguerite Thinon sa soeur, tous de Montignac</li>    <li>Partage      le 1er f&eacute;vrier 1666 des biens de feus P&iuml;erre Maudet et Marie Chappron      entre Pierre Maudet, Jeanne Sudre, sa femme, Jean Millon, Madeleine      Maudet, sa femme, Pierre Petignot, veuf de Marie Maudet, Pierre Maudet,       tous de Vars (5 pages)</li>    <li>Partage      le 2 juin 1667 des biens de feu Simon Levequot et Marie Boissot entre Jean      Levequot, laboureur &agrave; bras, de Tourriers, Jeanne Levequot, veuve de Jean       Regnier, de Vars (2 exemplaires de 7 et 11 pages)</li>    <li>Partage      le 27 mars 1672 des biens de feus Jean Tiffon dit la Misse et Marguerite      Labb&eacute; entre leurs enfants Pierre et Jean Thinon, laboureur &agrave; bras, de       Montignac, Jean Biot, p&ecirc;cheur, de Montignac, Jeanne Tiffon, sa femme</li>    <li>Partage      le 13 janvier 1675 des biens des parents de Pierre Aurain, sieur de Bois       Pinaud,Marie et Jeanne Aurain, fr&egrave;re et soeurs, de Bignac</li>    <li>Partage      le 9 janvier 1685 des biens de feue Anne Vallette, veuve de Jean Gorrain      entre Fran&ccedil;ois Gorrain, marchand, de Montignac, Jean Gorrain, procureur      fiscal de Vouharte, de St-Amant de Boixe et Michel Gorrain, marchand, de       Montignac, leurs enfants</li>    <li>Partage      le 25 avril 1689 des biens de feu Suzanne Mignot, veuve de Jean Journaud      entre ses neveux Jean Tiffon dit La Misse, laboureur &agrave; bras, de Montignac,      veuf de Marie Biot, Jean Tiffon, dit Menut, p&ecirc;cheur, de Montignac, veuf de      Denise Biot, Etienne Delage, marchand chapelier, d'Angoul&ecirc;me, mari de      Madeleine Chauveau, Pierre Chauveau, laboureur &agrave; bras, de Linars,fr&egrave;re de       la pr&eacute;c&eacute;dente </li>    <li>Proc&egrave;s      verbal le 12 janvier 1657 pour Jeanne Touchard, de Montignac, veuve de       Jean Aurain marchand, s'opposant &agrave; la vente de ses meubles</li>    <li>Proc&egrave;s      verbal le 20 f&eacute;vrier 1664 pour Antoine Boutillier, archer de la      mar&eacute;chauss&eacute;e d'Angoumois, des biens de de Marie Bertrand, sa femme fille       de feus Abraham Betrand et Catherine Doussin (11 Pages)</li>    <li>Proc&egrave;s      verbal le 16 juin 1665 d'une maison ced&eacute;e par Charles Thinon &agrave; Pierre Birot,      sieur de la Brouhe, Marie Thinon, sa femme, soeur du dit Charles, tous de       Montignac</li>    <li>Proc&egrave;s      verbal le 6 janvier 1667 pour Jean Audebert et Louis Robareau, syndics de       Coulonges contre Denis et Jean Vouillats, p&egrave;re et fils</li>    <li>Quittance      le 8 mars 1665 par Jacques Aigron, sieur de la Motthe, de Montignac &agrave;       Michel Charruaud, laboureur &agrave; bras de Montignac</li>    <li>R&eacute;clamation      le 25 mars 1657 par Fran&ccedil;ois Bohier, &eacute;cuyer sieur de Nanclars aux       habitants de St-Amant de Boixe &agrave; propos de l'&eacute;galement des tailles (5 pages)</li>    <li>Reconnaissance      le 4 octobre 1666 par Pierre Lurand, sergent d'une compagnie franche de      Montpellier, &agrave; Jacques et Gaston Lurand, laboureurs &agrave; boeufs, de       Villognon, ses fr&egrave;res (2 exemplaires)</li>    <li>Reconnaissance      le 6 d&eacute;cembre 1668 par Michel Hugon, laboureur &agrave; boeufs, Marie Godineau,      sa femme, de Bignac &agrave; Joseph Hugon, notaire, de Puyreaux, fils de d&eacute;funts       Michel Hugon et Jacquette Geneure</li>    <li>Reconnaissance      le 25 mars 1675 par Louis Gratereau, praticien, cessionnaire de Pierre      Pichon, notaire de Pierre Billochon, p&ecirc;cheur, fils de feu Pierre, tous de       Coulonges </li>    <li>Reconnaissance      le 16 juin 1675 par Charles Gratereau, sieur des Ousches, de Xambes, r&eacute;trocessionnaire      de Robert Paillier, sieur du Perat, cessionnaire de Jean Paillier, sieur      de la Prade, fils de feu Brice Paillier, sieur de la Prade &agrave; Jean      Vouillat, laboureur &agrave; boeufs, de Coulonges, fils de feu Denis, fils de feu       Michel</li>    <li>Reconnaissance      le 13 mars 1686 par Cl&eacute;ment De Cerc&eacute;, ecuyer sieur de Porfoucaud, fils de      Catherine Noussier &agrave; Jacob Bouhier, Madeleine Chauveau sa femme et Pierre       Bouhier, leur fils tous de Coulonges</li>    <li>Reconnaissance      le 23 novembre 1686 par Cl&eacute;ment Deserc&eacute;, &eacute;cuyer sieur de Portfoucaud, fils      de feu Charles &agrave; Louis De Mascurau, sieur de Moret, de Villognon, mari      d'Elisabeth Raymond, fille de d&eacute;funts Mathieu Raymond et de Ren&eacute;e de      Massougne et Fran&ccedil;ois Sciquaire d'Eynaud?, sieur des Houmes?, mari de       Suzannet Veret, de Montemboeuf (8 pages)</li>    <li>Renonciation      le 27 d&eacute;cembre 1670 de communaut&eacute; par Jeanne et Henriette Aurain &agrave; Ren&eacute;       Aurain, maitre chirurgien, leur fr&egrave;re, de Montignac</li>    <li>Retrocession?      le 23 novembre 1686 par Fran&ccedil;ois Sciquaire, sieur des Houmes?, et Suzanne      Veyret, sa femme, de Montemboeuf, &agrave; Jean Desallis, sieur des Martres, Jean      De Serset,ecuyer sieur de Parfaucault, d'Angoul&ecirc;me et Jean Ballet, sieur       du Petit Pr&eacute;, de Montignac</li>    <li>Rolle       des tailles en novembre 1677 de la paroisse de Chebrac (9 fichiers)</li>    <li>Rolle      des tailles le 18 novembre 1682 de la paroisse de St-Amant de Boixe       (l'acte est reli&eacute;, tout n'est pas visible : 18 pages)</li>    <li>Rolle      des tailles le 27 d&eacute;cembre 1672 de l'enclave de Sigogne, Terrebourg et       Villars (6 pages)</li>    <li>Sentence      le 21 janvier 1678 par Jacques Trutaud, fils de Fran&ccedil;ois, laboureur contre       Pierre Mignot d(it) Petas</li>    <li>Sommation      le 5 d&eacute;cembre 1652 par Jean Loysel, sieur du Treuil et Pierre Gaydet,      sieur de la Rivi&egrave;re, Samuel Dubois, tous de St-Amant de Boixe aux       collecteurs de St-Amant de Boixe</li>    <li>Sommation      le 19 ao&ucirc;t 1655 par les collecteurs de taille de Chebrac aux habitants de       celui-ci &agrave; propos des tailles de Jacques Noblet</li>    <li>Sommation      le 29 ao&ucirc;t 1665 par Simon Lurat, laboureur &agrave; boeufs de Chebrac, &agrave; Julien       Lurat, de Vars, son fr&egrave;re</li>    <li>Tailles       le 3 f&eacute;vrier 1669 de la paroisse de Coulonges </li>    <li>Vente      le 20 septembre 1648 par Th&eacute;ophile Goulmard, laboureur &agrave; boeufs de      Vouharte &agrave; Marie Nadault, veuve de Daniel Copperye, chirurgien, Isaac et       Marie Copperye, ses enfants, tous de Montignac</li>    <li>Vente      le 28 d&eacute;cembre 1648 par Jacques Chollet, laboureur &agrave; bras, de St-Genis,      Marie Charruaud sa femme &agrave; Michel Charruaud, laboureur &agrave; bras, de       Montignac</li>    <li>Vente      le 25 mars 1649 par Genis Guy l'ain&eacute;, marchand tanneur, Ester Veret, sa       femme &agrave; Isaac Guy, sieur de la Tresnouhe, tous de Montignac </li>    <li>Vente      le 16 juillet 1649 par Pierre Nougier, l'a&icirc;n&eacute;, laboureur, de Villejoubert       &agrave; Jean Gaultier, sieur de Puyperoux, de Montignac</li>    <li>Vente      le 4 d&eacute;cembre 1649 par Jean Dulong, laboureur &agrave; boeufs, de Montignac,       Vincente Bouhier, sa femme &agrave; Jean Rouhet, de St-Amant de Boixe</li>    <li>Vente      le 30 d&eacute;cembre 1650 par Fran&ccedil;ois Quentin, dit Franciquot, laboureur &agrave;       Antoine Quantin, dit Lamairie, laboureur &agrave; boeufs, tous deux de Vervant</li>    <li>Vente      le 1er septembre 1652 par Jean Chastenet, marchand, de Montignac &agrave;       Guillaume Vivier, laboureur &agrave; boeufs, de Vars</li>    <li>Vente      le 11 novembre 1652 par Michel Aiguillon, marchand d'Angoul&ecirc;me, Jean      Grezillier, Antoinette Aiguillon, sa femme, Pierre Picard, Marie      Aiguillon, sa femme, de Marsac &agrave; Mathurin Charruaud, texier en toile, de       St-Genis</li>    <li>Vente      le 9 f&eacute;vrier 1653 par Jean Chastenet, marchand de Montignac &agrave; Etienne       Touzeau, papetier, de Chebrac</li>    <li>Vente      le 24 f&eacute;vrier 1655 par Romain et Fran&ccedil;ois Sudre, laboureur &agrave; boeufs, de      Vervant et Michel Quentin, laboureur &agrave; boeufs de St-Amant de Boixe &agrave; Liot      Amiaud, laboureur, de St-Amant de Boixe, veuf de Jeanne Sudre, soeur des       dits Sudre</li>    <li>Vente      le 25 f&eacute;vrier 1657 par les anciens protestants Jean Preveraud, ecuyer      sieur du Breuilh, juge s&eacute;n&eacute;chal, de Montignac, Jozias Birot, ecuyer sieur      de Servolle, de Montignac, Isaac Pappot, sieur de Bois Rousseau, avocat au      pr&eacute;sidial d'Angoumois, Michel Seguin, Samuel Dubois, sieur de la Brenarde,      Jean Amiaud, de St-Amant de Boixe, Fran&ccedil;ois Birot, sieur d'Amblecourt, de       Vouharte &agrave; Samuel Birot, sieur de la Roumie?, de Bignac</li>    <li>Vente      le 20 avril 1657 par Jean Amiaud, notaire, de St-Amant de Boixe &agrave; Jean       Mazotan, le jeune, laboureur &agrave; bras, de Xambes</li>    <li>Vente      le 29 septembre 1658 par Jean Goumard, laboureur &agrave; bras, de Tourriers &agrave;       Pierre et Jean Taston, fr&egrave;res, laboureurs &agrave; boeufs, de Montignac</li>    <li>Vente      le 19 mars 1663 par Jean Gaschet, sargetier, Catherine Morant, sa femme &agrave;       Jean Cl&eacute;mant dit Redon</li>    <li>Vente      le 9 f&eacute;vrier 1665 par Arnaud Corlieu, fils de feu Louis, marchand, de      Maraichanie? en Saintonges, &agrave; Michel Charruaud, laboureur &agrave; bras, de       Montignac</li>    <li>Vente      le 31 mai 1681 par Simon Peltan, charpentier, Jeanne Mallet, fille de feus      Mass&eacute; Mallet et Fran&ccedil;oise Ravaneau &agrave; Jean Vachier, laboureur &agrave; boeufs,       fils de feu Vincent, tous de St-Amant de Boixe</li>    <li>Vente      le 6 janvier 1683 par Pierre Chastenet, marchand, Marguerite Moulin,sa      femme, Charles Guillemot, sergent royal, Marie Chastenet, sa femme,      Fran&ccedil;ois Plansson, tailleur d'habits, Fran&ccedil;oise Chastenet sa femme, tous      de Montignac, Pierre Moulin de Marsac, Catherine Chastenet, sa femme &agrave;       Isaac Fruchet, marchand, Marie Guinard, sa femme, de Montignac (9 pages)</li>    <li>Vente      le 2 octobre 1684 par Jean Berthoumeau, laboureur &agrave; bras, de Tourriers &agrave;       Pierre Bouniceau, notaire, de St-Amant de Boixe </li>  
    </ul></h4>
  <h4 align="center"><big>Les actes suivants n'ont pas �t� photographi�s mais seulement r�f�renc�s :</big></h4><h4>  
    <ul type=disc>    <li>Accord      le 6 f&eacute;vrier 1681 (ou 1682) entre Fran&ccedil;ois Bordet, marchand et Pierre       Bordet, Marie Thoureau, sa femme</li>    <li>Cession      le 7 septembre 1664 par Pierre Yver sieur de Luarnet? &agrave; Jacques Huet, sieur       de la Bouche</li>    <li>Inventaire      des meubles le 20 juillet 1685 par Marie Guinard, veuve en secondes noces       d'Isaac Fruchet</li>    <li>Partage      le 30 mars 1672 entre Jacques Bouhier, Marie Gros, sa femme et Pierre,       Jean, Antoine Gros, fr&egrave;res</li>    <li>Partage      du 17 juin 1675 (&agrave; d&eacute;faut 1673) entre Pierre Gros, Marie Bouyer et Antoine       Gros, Adrienne Gros sa femme</li>    <li>Partage      du 8 juin 1688 entre Fran&ccedil;ois David, Marie Decoustz, sa femme, Pierre et       Louise Decoustz, autoris&eacute;e par Gabriel Seguin, son cousin</li>    <li>Rolle       le 21 d&eacute;cembre 1675 (imp&ocirc;ts) de la paroisse de Xambes pour l'ann&eacute;e 1676</li>    <li>Rapport      des proclamations le 31 janvier 1679 fait par Gilles David, mar&eacute;chal et      Simon Pouillat, tuteurs et curateurs des mineurs de d&eacute;funts Pierre Billat       et Marie Pouillat</li>    <li>Vente      le 5 novembre 1673 par Daniel Bouhier dit Le Villain, Jean Bouhier, dit      Mercet son fr&egrave;re &agrave; Perrette Vauvert, femme de Jean Thinon, sieur des       Couri&egrave;res, avocat au parlement</li>  
    </ul></h4><h4>  
    <p>&nbsp;
    </p></h4><h4><big><b><u>
          <a name="nonreper">Actes non r�pertori�s</a></u></b></big></h4><h4>
    <ul type=disc><li>la nomination des collecteurs de taille, les soldats de milice pour les paroisses d'Anais, Aussac, Bignac, Chebrac, Coulonges, Jauldes, Montignac, St-Amant de Boixe, Tourriers, Vervant, Villejoubert, Villognon, Vouharte, Xambes...</li><li>la famille Dulong de Montignac-Charente</li><li>les Gratereau et Clement autour de St-Amant de Boixe</li>
    </ul><h4><big><b><u>
            <a name="bouniceau">Bouniceau</a></u></b></big></h4><h4>  
      <ul type=disc><li>Cession et partage des biens de Marie Mangon, veuve de Pierre Chevrier � Etienne Chevrier, marchand son fils, Simon Mangon, menuisier, Catherine Chevrier sa femme et fille de la dite Mangon, Simon Nadaud, fils de Fran�ois tous de St-Amant de Boixe le 16 ao�t 1649</li><li>Ferme par H�lie Delavergne, de Dignac � Jacques Lurand, charpentier de Villognon le 28 octobre 1649</li><li>Transaction entre Mathieu Raymond �cuyer sieur de Villognon et Pierre Tiffon, Jeanne Regnier sa femme, H�lie Peraud, Jeanne Tiffon sa femme tous de Villognon du 17 novembre 1649</li><li>Proc�s verbal du logement de Jean Bareau, fermier du prieur� de Villognon le 18 ao�t 1650</li><li>Partage des biens de Marguerite Buerne entre Pierre Lambert, charpentier,  Pierre Gratereau dit Cadet, Charlotte Gesmond sa femme et fille de la dite Buerne et Jean Tamplard dit clec, veuf de Antoine Gesmond, petite fille de Marguerite Buerne, tous de St-Amant de Boixe le 25 avril 1651</li><li>Vente par Fran�ois Dubois, laboureur � bras de Vouharte � Pierre Dubois, p�cheur de Vouharte le 13 juin 1655</li><li>Partage des biens de d�funts Fran�ois Papounet et Marguerite Cl�ment entre Isabelle, Pierre Papounet, Jean Mosdet, Mich�le Papounet sa femme tous de St-Amant de Boixe et Jean Courault, Mathurine Papounet sa femme du village des Courault le 8 d�cembre 1656</li><li>Ferme par Jean Loisel, sieur du Treuil, �conome de l�abbaye de St-Amant de Boixe � Fran�ois Morand tailleur d�habits, Pierre Mallet, boucher, Jean Morand, recouvreur, Fran�ois De La Maschiere, Pierre et Michel Toureau fr�res, Fran�ois Mignot dit La Planche, texier, Jean Gallopin, Marie Mignot, veuve de Jean Fougiere, Pierre Ravon, Jean Toureau, Vincent Papounet et Simon Margeau tous de St-Amant de Boixe le 17 juin 1657</li><li>Vente par Fran�oise Foucaud, veuve d�H�lie Bouyer dit Viller ?, Daniel Bouyer son fils, laboureur � boeufs de Xambes � Jozias Bouyer, laboureur � boeufs de Xambes le 21 juillet 1658</li><li>Inventaire des biens de Pierre Raveau de Vouharte pour sa veuve Toussainte Jolly en vue de son mariage avec Jean Gadras d�Amb�rac le 3 mai 1658</li><li>Ferme par Jean Loisel, sieur du Treuil, de St-Amant de Boixe pour Gabriel Bonichon, religieux de l�abbaye de St-Amant de Boixe � Jean Gallopin l�a�n�, Jean Cl�ment, Pierre, Jean, Michel Toureau et Simon Bouffanais, texier tous de St-Amant le 26 mai 1658</li><li>Cession entre H�lie Mignot, laboureur � bras, Mich�le Trutaud sa femme et Simon Mignot, laboureur � bras, Fran�oise Mosdet sa femme, tous de St-Amant de Boixe le 6 f�vrier 1659</li><li>Partage entre H�lie Bouyer, fils de Daniel laboureur de Jauldes  et Jean Bouyer, laboureur de Xambes son fr�re, Fran�ois Bouyer fils du dit Daniel de Xambes, Antoinette Ballet sa veuve le 22 avril 1659</li><li>Testament d�Etienne Grollier, cur� de Cellettes en faveur l��glise de Cellettes le 12 f�vrier 1660</li><li>Ferme par Jean Loisel, sieur du Treuil, de St-Amant de Boixe � Jean et H�lie Bouyer, fr�res, laboureurs � boeufs, Jean Guillot, laboureur � bras, Jeanne Barradeau sa femme, Fran�ois Foucaud dit Castor, sa femme, laboureur � bras, Marie Arnaud sa femme, tous de Xambes le 27  janvier 1662</li><li>Acte en latin concernant Joseph Lantier du 6 janvier 1663</li><li>Ferme par Mathieu Gervay, procureur d�Ignace Gaubette � Jean Morand dit Cagnon, recouvreur de St-Amant de Boixe le 22 juin 1663</li><li>Partage des biens de d�funte Marie Trutaud, veuve de Jean Mignot entre Fran�ois, Pierre, Jean Mignot fr�res, Simon Nadaud, Ren�e Mignot sa femme le 17 juillet 1663</li><li>Ferme par Charles De Mayol, abb� de St-Amant de Boixe � Fran�oise Peraud le jeune, laboureur � bras de Cellettes le 20 janvier 1664</li><li>Inventaire d�Etienne Grollier, cur� de Cellettes, agonisant le 7 avril 1664</li><li>Vente par David Prevaud, tailleur d�habits, Christine Denis sa femme, Arnaud et Benjamin Peraud, p�re et fils, laboureur � boeufs de Cellettes � Louis Audoin, laboureur � bras de Xambes le dernier f�vrier 1665</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, �conome de l�abbaye de St-Amant de Boixe �  Jean Pesraud, fils d�Arnaud, laboureur � boeufs de Cellettes le 9 ao�t 1665</li><li>Quittance par Mathieu Gervay, agent g�n�ral de Charles De Mayol � Ren� Magnan, procureur fiscal de Luxe le 12 ao�t 1665</li><li>M�tairie par Isaac Dulaux, chevalier seigneur de Cellettes � Jean et autre Jean Partaud, p�re et fils, laboureurs � boeufs de Villognon le 24 avril 1666</li><li>Ferme par Charles Flamen, �cuyer sieur de Lugerat, Villognon, Mailloux, de Montignac � Jean Morand, texier de St-Amant de Boixe le 24 mai 1666</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, �conome de l�abbaye de St-Amant de Boixe � Jean et autre Jean Bouffanais, p�re et fils, tisserands en linge, Pierre et Michel Toureau, Fran�ois Delamaschiere, Jean Pinaud fils de Guiot, Pierre Mousnier, Pierre Bouffanais, Michel Mallet, Pierre Papounet l�a�n�, Pierre et Jacques Mignot fr�res, Jean Toureau, Jeam Amyaud, fils de Louis, Pierre Mignot Frelaud, Arnaud Gallopin, Jean Papounet et L�onard Bouffanais tous de St-Amant de Boixe le 27 juin 1666</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, agent des affaires de Charles De Mayol, abb� de l�abbaye de St-Amant de Boixe � Jean Loisel, sieur du Treuil de St-Amant de Boixe et Pierre Boylevin, huissier de Champniers le 1er juillet 1666</li><li>Cession par Gabriel Bonichon, religieux et Mathieu Gervay, agent des affaires de Charles De Mayol, abb� de l�abbaye de St-Amant de Boixe � Arnaud Peraud, laboureur � boeufs de Cellettes le 14 septembre 1666</li><li>Arrentement par Marie Mignot, veuve de Martin Heriard � Jean Morand dit Cagnon, recouvreur, tous de St-Amant de Boixe le 17 f�vrier 1667</li><li>Partage des biens de Charles et Marie Thinon entre Pierre Thinon, greffier de Montignac et Marguerite Thinon leurs fr�re et soeur le 6 avril 1667</li><li>Quittance par le notaire Bouniceau � Antoine Quentin de Vervant le 11 septembre 1667</li><li>Ferme par Gabriel Bonichon, Pierre Preveraud, Jean Cathalany, religieux de l�abbaye de St-Amant de Boixe � Jean Renon ?, laboureur � bras de St-Amant de Boixe le 29 octobre 1667</li><li>Testament d�Emerie Gallopin, fille de d�funt Charles et Mathurine Gratereau, de St-Amant de Boixe en faveur de Louis Gallopin son fr�re le 3 avril 1668</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, intendant de l�abbaye de St-Amant de Boixe � Jean Cl�ment, Simon Nadaud, Fran�ois Cailteau, Jean Pinaud dit Mouraud, Pierre Mignot dit Petas, Michel Gratereau, Jean Mignot fils de Jean, Pierre Mallet fils de Michel, Jean Toureau, Pierre Toureau, Michel Toureau, Jean Morand Cagnon l�a�n�, Arnaud Gallopin, Fran�ois Morand le jeune, Jean Gaschet et Simon Bouffanais tous de St-Amant  le 17 juin 1668</li><li>Vente le 28 f�vrier 1669 par Antoine Quantin dit Lamairie, laboureur � boeufs, de Vervant, Jeanne Amyaud, sa femme � Jacques Heriard, sieur du Rondeau, de St-Amant de Boixe, repr�sent� par Louis Audoin, laboureur � boeufs, de Xambes</li><li>Accord le 6 mai 1669 entre Catherine Pichon, veuve de Louis Masotan, de Xambes et Nicolas Bouyer, tailleur d'habits, Laurent Bouhier, bastier, Anne Bouhier, h�ritiers de Marie Masotan, leur m�re, de la Rochefoucauld</li><li>Arrentement par Philippe Dulaux, chevalier de Cellettes � Jean Partau l�a�n�, laboureur � boeufs de Villognon le 22 mai 1669</li><li>Echange le 16 juin 1669 entre Raymond Guillen dit Giraudeau, laboureur � boeufs et Jean Guillen dit Bodillou, laboureur � bras, tous deux d'Aussac</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, intendant de l�abbaye de St-Amant de Boixe � Bernard Morand, fils de Pierre, Fran�ois Quessard, Jean Gaschet, Pierre Thoureau l�a�n�,Denis Lheriaud, Fran�ois Seguin, Pierre Mallet, fils de Michel, Fran�ois Cailteau, Jean et Fran�ois Morand, p�re et fils, Jean Toureau, Charles Ameline, Jean Lheriaud, Pierre Delamachiere, Arnaud Gallopin, Jean Aubineau, Roch Gratereau, tous de St-Amant de Boixe le 21 juin 1669</li><li>Testament le 3 janvier 1669 de Ren�e Mangon, veuve de Jean Rouhet, notaire, de St-Amant de Boixe en faveur de Marguerite Gratreau, sa m�re  et Jean Mangon, son fr�re</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, agent des affaires de Charles De Mayol, abb� de l�abbaye de St-Amant de Boixe � Bernard Morand le jeune, Jean Toureau, Michel Mallet, Denis Lheriaud, Jean Lheriaud, Fran�ois Seguin, Jean Morand, fils de Jean, Fran�ois Cailleteau, Roch Gratereau, Jean Gaschet, Jean Aubineau, Fran�ois Quessard, Jean Bouffanais, fils a�n� d�autre Jean, Jean Cl�ment dit Redon, Pierre Gaultereau, fils de Pierre, tous de St-Amant le 10 juillet 1669</li><li>Echange entre Marc Gourdin, �cuyer sieur du Puy et de Villognon, d�Angoul�me et Louis Bernardeau, laboureur � boeuf de Villognon, veuf de Jeanne Geoffroy et Baptiste Rochier, tailleur de pierres de Villognon, curateur de Marie Rochier, fille de d�funts Jean et Marie Chossat le 20 octobre 1669</li><li>Testament le 3 mai 1670 de Jean Parteau l'ain�, laboureur � boeufs de Villognon, veuf de Fleurique Micheau en faveur de Jean Parteau, son fils a�n�</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, �conome de l�abbaye de St-Amant de Boixe � Michel Gratereau, Fran�ois Cailteau, Jean Toureau, Nicolas Mallet, Simon Margeau, Fran�ois Trutaud, Pierre Matard, Pierre Audureau, Pierre Mousnier, Pierre Gaulteau, Pierre Ravon, Bernard Morand le jeune, Jean Aubineau, Fran�ois De La Maschiere, Antoine Masquet tous de St-Amant de Boixe le 22 juin 1670</li><li>Accord le 12 juillet 1670 entre Antoine, autre Antoine, Fran�ois Quentin, p�re et enfants, laboureur � boeufs de Vervant et Louis Plantevigne, marchand, de Marcillac, Pierre et Jean Laurand, p�re et fils, laboureurs � boeufs, de Villognon suite aux exc�s commis par les dits Plantevigne et Laurand sur les dits Quentin</li><li>Procuration par Jean Dommegne, religieux de l�abbaye de St-Amant de Boixe � Pierre Guy, procureur au si�ge pr�sidial d�Angoumois le 8 mars 1671</li><li>Sommation par Mathieu Gervay, agent g�n�ral de Charles De Mayol � Pierre Gaydet, sieur de la Rivi�re le 13 avril 1671</li><li>Partage des biens de Marguerite Gratereau, veuve Mangon pour Pierre Rouhet, laboureur � boeufs de St-Amant de Boixe, Marie Mangon, sa femme, fille de la d�funte et Jean Moreau, laboureur � bras de Marcillac, Ren�e Mangon sa femme, petite fille de la d�funte le 27 avril 1671 (11 pages)</li><li>Vente Jean Faule, fils de Louis, marchand de Nanclars � son fr�re Pierre Faule, laboureur � bras de Nanclars le 6 mai 1671</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, �conome de l�abbaye de St-Amant de Boixe �  Pierre Dalmagne, Fran�ois Quessard, Bernard Morand le jeune, Pierre Ravon, Jean Morand l�a�n�, Jean Toureau, Michel Mallet, L�onard Giraud, Pierre Matard, Fran�ois Seguin, Jean Mignot, Jean Gaschet, Antoine Toureau, Guillaume Mallet, Jean Morand le jeune, Pierre Toureau, Jean Chevrier, Jacques Ravon le jeune et Arnaud Gallopin, laboureurs de St-Amant de Boixe le 25 juin 1672</li><li>Dissolution de communaut� entre Jean Thinon, texier en linge et sa soeur, enfants de feu Isaac Thinon et de Catherine Large le 11 novembre 1672</li><li>Testament de Pierre Thibier, cur� de Xambes en faveur de Marie Godichon, fille de Jean, de Xambes le 7 janvier 1673</li><li>Ferme par Gabriel Bonichon, religieux et Mathieu Gervay, �conome de l�abbaye de St-Amant de Boixe �  Jean Lheriaud, Denis Lheriaud dit La Fleur, Jean et Pierre Morand p�re et fils Pierre Gaultereau l�a�n�, Pierre Dalmagne, Fran�ois Seguin, Jean et Antoine Toureau, Fran�ois De La Maschiere, Pierre Ravon, Antoine Masquet, Michel Grateraud, Jean Pinaud Mouraud, Arnaud Gallopin, Jean Gaschet, Guillaume et Nicolas Mallets tous de St-Amant de Boixe le 10 juin 1673</li><li>Ferme par Gabriel Bonichon, religieux de l�abbaye de St-Amant de Boixe �  Jean Pesraud, fils d�Arnaud, laboureur � boeufs de Cellettes le 27 octobre 1673</li><li>Partage des biens de feu Madeleine Thinon entre Jean, Fran�ois, Louis Morand, tailleur d�habits de St-Amant de Boixe, Marie Morand, veuve de Fran�ois Plantivet, de St-Amant, Michel David, laboureur � boeufs de Pranzac, Denise Morand sa femme, les dits Morand enfants de la ditte feue Thinon le 16 avril 1674</li><li>Arrentement par Jean Morand, fils a�n� d�autre Jean, laboureur � bras de St-Amant de Boixe � son fr�re Jean Morand le Jeune, laboureur � bras de St-Amant de Boixe le 21 octobre 1674</li><li>Ferme par Pierre Perrel, notaire royal  � diff�rents habitants de St-Amant de Boixe le 15 avril 1674</li>   <li>Ferme par Gabriel Bonichon, religieux de l�abbaye de St-Amant de Boixe �  Jean Pesraud, fils d�Arnaud, laboureur � boeufs de Cellettes le 8 d�cembre 1674</li><li>Partage en Fran�ois Amiaud, laboureur � bras de St-Front et Antoine Quantin, fils d�Antoine et d�funte Jeanne Amiaud, h�ritiers de Hellein Amiaud leur oncle le 23 juin 1674</li><li>Arrentement par Jean Morand, fils a�n� de Jean, laboureur � bras de St-Amant de Boixe � Jean Morand le jeune, son fr�re laboureur � bras de St-Amant de Boixe le 21 octobre 1674</li><li>Testament de Marie Fouillade de Tourriers, en faveur de Jean Allard, fils de Fran�ois Allard son mari le 14 janvier 1677</li><li>Accord entre Pierre Courtin, laboureur � boeufs, curateur de Pierre Tiffon, fils de feu Jean Tiffon dit Janot et de Marie Courtin, Jeanne Renon, veuve en secondes noces du dit Jean Tiffon, Pierre Aigron, laboureur � boeufs, tous de Vouharte le 12 mai 1678</li><li>Ferme par Jean Gourdin, �cuyer sieur de la Faye, de Tourriers � Jean Martinetz, cur� de Tourriers le 4 juin 1678</li><li>Testament Jean Bouhier dit Gros Jean, fils de Daniel, de Xambes en faveur de Marguerite Foucaud sa femme le 17 janvier 1679</li><li>Reconnaissance par Pierre Gaultereau, praticien, Etienne Mallet et Etienne Audoin, laboureur � bras de St-Amant de Boixe � Charles De Mayol, abb� de St-Amant de Boixe le 24 mars 1679</li><li>Inventaire des biens de Jean Bireau, de Montignac pour sa veuve Catherine Mousset du 19 mai 1679 (acte dans les 4 premi�res liasses de Bouniceau, probablement 2E4116)</li><li>Ferme par Pierre Perrel, notaire royal d�Argental en Forest pour Charles De Mayol, abb� de St-Amant de Boixe � Jean Chevrier, Pierre Toureau l�a�n�, dit Tout, Pierre Toureau chapelier, Simon Toureau, Bernard Morand dit Bernachon, Nicolas Mallet, Fran�ois Trutaud, Pierre Matard, Jean Amiaud tous laboureurs � bras, Fran�ois Morand dit Cagnon tisserand, Louis Morand tailleur d�habits, Pierre Mousnier Bayou dit Bobian ?, Antoine Masquet, Pierre Morand dit Cagnon, Jean Gaschet, laboureur � bras, Marie Trutaud, veuve de Jean Aubineau, Jean De Chanteloube, laboureur � bras le 29 juin 1679</li><li>Ferme par Marc Gourdin, �cuyer sieur du Puy, d�Angoul�me pour Fran�ois Preveraud, prieur de Nanclars � Fran�ois Malloire, charron de Nanclars le 28 avril 1680</li><li>Curatelle des enfants de d�funt Jean Partau, fils de feu Jean, veuf de Jeanne Salmon, de Villognon pour Jacquette Bourabier sa veuve, Louis Micheau, notaire, Louis Journaud, fils de Gaston, laboureur � boeufs, Jacob Lurant, fils de Gaston tous de Villognon, Fran�ois Caillier, laboureur � boeufs de Luxe et le 24 juin 1680</li><li>Acte de compte entre Isaac Delaux, chevalieur seigneur de Cellettes et Antoine et Aymar Billonnet, p�re et fils, laboureurs � boeufs de Cellettes le 19 mars 1681</li><li>Ferme par Isaac Dulaux, chevalier seigneur de Cellettes � Louis Partau, laboureur � boeufs, fils de Jean, Marie Rochier sa femme et Jean Journaud, laboureur � boeufs fils de Martin, Fran�oise Martaguet sa femme de Villognon le 19 mars 1681</li><li>Compte entre les religieux de l'abbaye de St-Amant de Boixe le 6 novembre 1681</li><li>Accord entre Jean Martinesche, cur� de Tourriers et Jean Gourdin, sieur de la Faye de la Barre d'Andonne, de Tourriers le 4 octobre 1682</li><li>Ferme par Jean Gourdin, �cuyer sieur de la Faye, de Tourriers pour Fran�ois Preveraud, prieur de Nanclars � Fran�ois Malloire, charron de Nanclars le 23 avril 1683 </li><li>Partage des biens de Pierre Boissot, �poux de Marguerite Gesmond de Tourriers entre ses cousins germains Simon et Jean Boissot, laboureur � bras de Tourriers, Louis Roux, laboureur � boeufs d�Aussac, Jeanne Fouillade sa femme, Berthomm� Mirgallet, laboureur � bras de St-Angeau, Catherine Fouillade sa femme le 8 d�cembre 1683</li><li>Ferme par Jean Gourdin, �cuyer sieur de la Faye de la Barre d�Andonne, de Tourriers � Louis Debordes, marchand de Nanclars le 13 mai 1684</li><li>Quittance de Fran�ois Miniere, laboureur � boeufs  de Lux�, fils de feu Ren�e Fumeau � Louis Morand, tailleur d�habits de St-Amant de Boixe le 25 avril 1685</li><li>Arrentement entre Marie Bounet, veuve de Bertrand Nougier, Vincent Nougier, laboureur � bras de Villejoubert son fils et Guillen Mazay, couvreur, Fran�oise Trutaud sa femme, Pierre Frougier, couvreur et Antoinette Regnier sa femme le 23 mai 1686</li><li>Reconnaissance par Jean Gourdin, �cuyer sieur de la Faye de la Barre d�Andonne � L�onard Ladvenat le 3 avril 1687 (Floue)</li><li>Cession par Pierre Duprat, laboureur � bras de Xambes Madeleine Bouyer sa femme � Pierre Thinon greffier de Montignac le 25 janvier 1688</li><li>Reconnaissance par Charles Loisel, sieur de la Dhoue, Marie Morand, veuve de Pierre Toureau, Fran�oise Giroud, veuve de L�onard Giraud, Pierre Toureau l�a�n� dit Letras ?, Pierre Mignot dit La Prime, Guillaume Berthon, Anne Delage, veuve de Jean Trutaud dit Caput �  Charles De Mayol, abb� de St-Amant de Boixe le 12 f�vrier 1688</li><li>Accord entre Jean Heriard, procureur au si�ge pr�sidial d'Angoumois et Olivier, Louis, Fran�ois, p�re et enfants, marchands d'Aussac le 23 novembre 1688</li><li>Reconnaissance de Nicolas Martaguet, laboureur � bras de Villognon � Charles De Mayol, abb� de St-Amant de Boixe le 25 mars 1691</li><li>Hommage par Jean Gourdin, �cuyer sieur de la Faye, de St-Amant de Boixe � l�abbaye de St-Amant le 30 mai 1691</li><li>Reconnaissance par Jean Piat, laboureur � bras et Pierre Billochon, poissonnier, de Coulonges �  Charles De Mayol, abb� de St-Amant de Boixe le 16 ao�t 1692</li><li>Reconnaissance par Louis Binaud, tonnelier de Marcillac, Pierre Fradonnet et Jean Delaborde, laboureurs � bras de Xambes � Mr De Mayol, abb� de St-Amant de Boixe le 20 d�cembre 1692</li><li>Ferme par Pierre Loisel, sieur de la Motte, Pierre Preveraud, Jean Cathalany, Gabriel Bonichon, religieux de l'abbaye de St-Amant de Boixe � Marc Gourdin, �cuyer sieur du Puy et de Villognon, d'Angoul�me le 15 f�vrier 1693
        <br></li>
        
      </h4>
    <h4 align="center"><big>Les actes suivants <b>
          <font color="#000000">n
          </font></b>'ont<b>
          <font color="#000000"> pas 
          </font></b>�t� photographi�s mais seulement r�f�renc�s :</big></h4><h4>
      <ul type=disc> <li>Accord     le 6 f�vrier 1681 (ou 1682) entre Fran�ois Bordet, marchand et Pierre      Bordet, Marie Thoureau, sa femme</li> <li>Cession     le 7 septembre 1664 par Pierre Yver sieur de Luarnet? � Jacques Huet, sieur      de la Bouche</li> <li>Inventaire     des meubles le 20 juillet 1685 par Marie Guinard, veuve en secondes noces      d'Isaac Fruchet</li> <li>Partage     le 30 mars 1672 entre Jacques Bouhier, Marie Gros, sa femme et Pierre,      Jean, Antoine Gros, fr�res</li> <li>Partage     du 17 juin 1675 (� d�faut 1673) entre Pierre Gros, Marie Bouyer et Antoine      Gros, Adrienne Gros sa femme</li> <li>Partage     du 8 juin 1688 entre Fran�ois David, Marie Decoustz, sa femme, Pierre et      Louise Decoustz, autoris�e par Gabriel Seguin, son cousin</li> <li>Rolle      le 21 d�cembre 1675 (imp�ts) de la paroisse de Xambes pour l'ann�e 1676</li> <li>Rapport     des proclamations le 31 janvier 1679 fait par Gilles David, mar�chal et     Simon Pouillat, tuteurs et curateurs des mineurs de d�funts Pierre Billat      et Marie Pouillat</li> <li>Vente     le 5 novembre 1673 par Daniel Bouhier dit Le Villain, Jean Bouhier, dit     Mercet son fr�re � Perrette Vauvert, femme de Jean Thinon, sieur des      Couri�res, avocat au parlement</li>
      </ul></h4><h4><big><b><u>
            <a name="Pappot">Notaire Pappot </a></u></b></big></h4>
    <br><h4>Voici ci-dessous une liste de photos d'actes notari&eacute;s issus du notaire Pappot faites lors d'une visite en Charente.
      <br>Il ne s'agit pas d'un inventaire exhaustif.
      <br>
      <br>Ce notaire a essentiellement exerc&eacute; sur le canton de St-Amant de Boixe, mais on retrouve deux actes hors de cette zone :
      <br>
      <ul><li>un accord du 20 novembre 1641 concernant la femme de Jean Vidaud, tailleur d'habits de la Rochelle</li><li>une procuration du 10 septembre 1691 concernant Pierre Besson?, soldat de milice, de la paroisse de St-Estephe
        <br></li>
      </ul>
      <br>
      Le reste des actes se trouve ici:
      <br>
      <ul type=disc> <li>Accord le 15 janvier 1625 entre Pierre Birot, marchand mercier et Antoine Chollet, marchand, tous de Montignac</li><li>Accord le 4 f&eacute;vrier 1625 entre Pierre Birot, marchand mercier de Montignac et Amant Pouthier dit Poutillon de Coulonges</li><li>Accord le 2 Juin 1625 entre Michel Pappounet et Jean Bouquinet, fils de feu Colas, tous de Coulgens (acte flou)</li><li>Accord le 10 juillet 1625 entre Jean Thinon, Pierre Favereau,Jean Chapron, cordonnier avec Isaac Pappot faisant pour Fran&ccedil;ois Pappot, son fr&egrave;re 
      <br></li><li>Accord le 1er novembre 1625 entre Isaac Pappot, substitut demonsieur le procureur g&eacute;n&eacute;ral et Jean Verit, marchand, tous deux de Montignac</li><li>Accord le 28&nbsp; d&eacute;cembre 1625 entre Michel Pouthier, tailleurd'habits, Marguerite Pouthier, femme de Pierre Pappot, tous de Montignac (photo floue)</li><li>Accord le 5 novembre 1628 entre Denis Pineau, laboureur &agrave; b&#339;ufs,Marie Huet, sa femme et Simone Huet, veuve de Cybard Pineau, tous de Montignac</li><li>Accord le 30 novembre 1628 entre Jean Trutaud dit Caput, mari deMarie Thomiou? et Guillaume, Antoine et Pierre Thomiou? de St-Amant de Boixe (photo floue)</li><li>Accord? le 27 octobre 1629 entre Pierre Birot, avocat d'Angoul&ecirc;me etJean Gesmond, fils de Gustin et&nbsp; Bertrand Guimard, de Villejoubert</li><li>Accord le 6 d&eacute;cembre 1630 entre Jean Goulmard, de Vouharte,Guillaume Goulmard de Coulonges, h&eacute;ritiers de Fran&ccedil;oise Goumard, femmede Nicolas Marvaud, leur s&#339;ur et Nicolas Marvau d'Anais, Fran&ccedil;ois Rabotteau de Tourriers (7 pages)</li><li>Accord le 6 juillet 1631 entre Fran&ccedil;ois Mallet, sergent, deCellettes et Pierre Coirard, le jeune, fils d'autre Pierre, de Fontclaireau (photos tr&egrave;s floues)</li><li>Accord le 18 ao&ucirc;t 1631 entre Fran&ccedil;ois Mallet, notaire, de St-Amant de Boixe et Michel Seguin, notaire, de Montignac</li><li>Accord le 2 f&eacute;vrier 1633 entre Isaac Menaget, marchand d'Angeou et Alain Maistre, sieur du petit bois, d'Aussac</li><li>Accord le 17 octobre 1634 suite &agrave; des injures entre Jean Birot,marchand et Aymar Boissot, Anne Boissot sa soeur, femme de Pierre Robert, tous de Montignac</li><li>Accord le 25 avril 1637 entre Simon Mangon, menuisier et Fran&ccedil;oisMallet dit Le Cadet suite aux exc&egrave;s commis par celui-ci sur le dit Mangon</li><li>Accord le 6 octobre 1637 entre H&eacute;liot Pichon, laboureur &agrave; bras de Xambes et Jacques Reddon, laboureur &agrave; bras de Villejoubert</li><li>Accord le 12 d&eacute;cembre 1637 entre Guy Berthonneau et Pierre Gesmond dit Bitaud? et Michel Papponnet 
      <br></li><li>Accord le 2 mai 1638 entre Marie Chauveau, veuve de JeanCousseau, femme de Jean Seguin, de Chebrac et Fran&ccedil;ois Pappot, sieur de la Seguine</li><li>Accord le 22 juillet 1639 entre Pierre et Antoine Moreau, fr&egrave;res,laboureurs &agrave; bras, de Vindelle &agrave; Jean Nadaud, texier en linge, de Coulonges, veuf de Elisabeth Aubry, relicte de Aiguilin? Gesmond</li><li>Accord le 4 novembre 1639 entre Pierre Corlieu l'a&icirc;n&eacute;, charpentier de St-Amant de Boixe et Jacques Viaulx</li><li>Accord le 28 janvier 1640 entre Pierre Gratereau, notaire deSt-Amant de Boixe et Matias? Menacheau, mari de Marguerite Heberard, veuve de Gabriel Guymard de Montignac (4 pages)</li><li>Accord le 9 mars 1641 entre Jean Pappot, marchand de Montignac etCatherine Delavergne, veuve de Jean Bordereau, femme de Jean Micheau, sargier de Montignac</li><li>Accord le 24 juillet 1641 entre Jacob Cl&eacute;ment, charpentier et Jean Chevroux dit Charbonneau, marchand, tous deux de St-Amant de Boixe</li><li>Accord le 20 novembre 1641 entre Jeanne Trillard (ou Villard?),femme de Jacques Vidaud, tailleur d'habits, de la Rochelle avec Jean? Poteau, marchand, Anne Thorin? sa femme (8 pages)</li><li>Accord le 18 mai 1642 entre Louis Mangon, charpentier et Fran&ccedil;ois Mallet dit ? , marchand h&ocirc;telier?, tous de St-Amant de Boixe</li><li>Accord le 22 mai 1642 entre Marie Mallet, fille de Jean Mallet,l'a&icirc;n&eacute;, veuve de Jean Bergeron, fils de Guillaume?, et le dit Guillaume? Bergeron</li><li>Accord le 25 juin 1642 entre Charles? Gesmond, procureur fiscalde Genac, de Montignac et Jeanne Fumeau, veuve d'Etienne Bouthillier, de Vars</li><li>Accord le 29 juillet 1642 entre Jean Marin, laboureur &agrave; boeufs de Coulonges et Jean Bineau dit Prenarchal? de Xambes</li><li>Accord le 16 d&eacute;cembre 1642 entre Catherin Picard, laboureur &agrave; b&#339;ufs et Raymond Guillen, laboureur &agrave; boeufs, tous deux d'Aussac</li><li>Accord le 5 janvier 1643 entre Nicolas Maravaud? pour son gendreFran&ccedil;ois Rabotteau de Tourriers, Pierre Allard, Antoine Banlin, Antoine Bouquinet et Antoine Allard de Tourriers</li><li>Accord le 13 juillet 1643 entre Louis Corlieu, laboureur &agrave; boeufs, de Marsac et Michel Charruaud, laboureur, de Montignac</li><li>Accord le 28 octobre 1644 entre Pierre Quantain, Jacques Sureau et Mathurin Chollet, Antoine Mousset, syndics de Chebrac</li><li>Accord le 14 novembre 1644 entre Jean Pouthier, laboureur &agrave;boeufs, de Chebrac, veuf de Mich&egrave;le Mignot et Amante Trutaud, veuve deJean Mignot, Fran&ccedil;ois Mignot, texier en toile, son fils, de St-Amant de Boixe</li><li>Accord le 6 f&eacute;vrier 1645 entre Louis Dexmier, sieur de Chenon etJean Tizon &eacute;cuyer sieur de Sigogne, Jeanne Fils? Sa femme, tous de Coulgens (Seconde page floue et illisible sur quatre)</li><li>Accord le 26 janvier 1647 entre Antoine Banlin, laboureur &agrave;boeufs, collecteur de tailles de Tourriers, Jean Fruchet sargetier de Montignac et Martial de Boutillier de Tourriers</li><li>Accord le 2 f&eacute;vrier 1651 entre Pierre Lambert, souchier,Marguerite Buherne sa femme et Pierre Gratereau, marchand, Charlotte Gesmond sa femme, de Villejoubert</li><li>Accord le 9 mars 1656 entre Pierre Dubois le Jeune d'Angoul&ecirc;me et les bouchers de Montignac</li><li>Accord le 20 septembre 1656 entre Jean Thinon, conseiller du roi,veuf de Paule Bradents, de Montignac et Jean Thinon, avocat, d'Angoul&ecirc;me, son fils a&icirc;n&eacute; (8 pages)</li><li>Accord le 23 f&eacute;vrier 1659 concernant la succession de MartialMenacheau entre Jean Guillot de Xambes, mari de Jeanne Barradeau, JeanPiat de St-Amant-de-Boixe, Marie Fradonnet sa femme, Fran&ccedil;ois etNicolas Binaux, Martin Naveaux, mari de Nicole Fradonnet, Guillaume Chollet, de Montignac, mari de Jeanne Menacheau</li><li>Accord le 6 mai 1668 entre Marthe, Anne Guilloteau, soeurs,filles de d&eacute;funt Pierre Guilloteau, sieur de la Trouve et Jean Trutaud dit Caput, marchand et sa fille Anne Trutaud, de St-Amant de Boixe</li><li>Accord le 22 septembre 1668 entre Paul Simonet, merandier de la for&ecirc;t de la Boixe et Pierre Picougnier, laboureur &agrave; boeufs d'Aussac</li><li>Accord le 24 mai 1669 entre Michel Marquet le Jeune, mari deMarguerite Martin, laboureur &agrave; boeufs de Puyreaux et Olivier Guillien, fils de Raymond, laboureur &agrave; boeufs de Vadalle</li><li>Accord le 29 ao&ucirc;t 1669 entre L&eacute;onard Lavenat, m&eacute;randier et Louis Sauvage, tous deux de Vadalle</li><li>Accord le 19 d&eacute;cembre 1669 entre Antoine Pingenet, sieur de Chanbernard, receveur des aides de l'&eacute;lection de Cognac et Isaac Gaurain</li><li>Apprentissage le 20 novembre 1628 par Pierre Mangon, menuisier &agrave; Fran&ccedil;ois Mallet, le jeune?, fils de Fran&ccedil;ois, tous de St-Amant de Boixe</li><li>Arentement le 19 octobre 1639 entre Fran&ccedil;oise Baud, veuve dePierre Rousseau, de Montignac et Jean Morand, laboureur &agrave; bras, Marie Morin sa femm, de St-Amant de Boixe</li><li>Arentement le 29 mars 1651 par Laurent Boiraud, laboureur &agrave; bras, de Vars &agrave; Jean Cl&eacute;ment, laboureur &agrave; bras, d'Anais</li><li>Arentement le 27 janvier 1658 entre Fran&ccedil;ois Morand, recouvreur,de Montignac et Micheau Thoureau dit Jout, laboureur &agrave; bras de St-Amant de Boixe</li><li>Arentement le 12 octobre 1659 par Marie Marsaud, fille de feusPierre et Mathe De Villemandy, de Montignac &agrave; Jean Charruaud, fils de Gilles, laboureur &agrave; bras de Montignac</li><li>Arentement le 27 mai 1668 par Jacques Huet, notaire &agrave; Michel Charruaud, laboureur &agrave; bras, tous deux de Montignac</li><li>Arentement le 11 juin 1672 par Pierre Thinon, greffier, de Montignac &agrave; Denis Lheriaud, texier, de St-Amant de Boixe</li><li>Arentement le 26 octobre 1673 entre Jozias Birot, &eacute;cuyer sieur deServolle et les autres h&eacute;ritiers de Fran&ccedil;ois Birot &eacute;cuyer sieur du Treuil &agrave; Jean Verit, marchand sargier, tous de Montignac</li><li>Arentement le 22 mai 1674 par Pierre Chastenet, marchand &agrave; Louis Thinon, recouvreur, tous deux de Montignac</li><li>Association le 30 mai 1644 entre Pierre Nougier l'a&iuml;n&eacute;, laboureur avec Charles Buherne, tailleur d'habits, tous deux de Villejoubert</li><li>Bail le 18 juin 1638 par Fran&ccedil;ois Caillet, sieur de Segolain?, de Villefagnan &agrave; Jean Daude de Tourriers?</li><li>Cession le 13 d&eacute;cembre 1640 par H&eacute;liot Aigron, laboureur &agrave; boeufs de Tourriers &agrave; Jean Meslier, de St-Genis</li><li>Cession le 22 septembre 1628 par Guy Allard, laboureur &agrave; boeufsde Tourriers, mari de Marguerite Lambert, fille de d&eacute;funts Daniel et Marguerite Chabert &agrave; Amant? Lambert, marchand grenottier de Villejoubert</li><li>Cession le 3 mai 1644 par Raymond Guillen laboureur &agrave; boeufsd'Aussac et Fran&ccedil;ois Foucaud de Coulgens &agrave; Jacques Amblard de St-Amant de Boixe</li><li>Cession le 8 juin 1648 par Jeanne Brumaud, veuve de Jean Guy, procureur de Montignac &agrave; Isaac Pappot, juge de St-Genis</li><li>Cession le 30 septembre 1637 par Fran&ccedil;ois Caillet, sieur de Segolain, de Cellettes &agrave; Antoine Denis, laboureur &agrave; bras de Cellettes</li><li>Cession le 13 juillet 1629 par Marguerite Matignon, veuve de Jean Masquet, &agrave;&nbsp; Fran&ccedil;ois Delauny, marchand, tous deux de Montignac</li><li>Cession le 12 ao&ucirc;t 1674 par Pierre Preveraux, religieux &#8220;proffex&#8221;de l'abbaye de St-Amant de Boixe &agrave; Jacques Gaschet, tailleur d'habits de St-Amant de Boixe</li><li>D&eacute;claration le 26 mai 1641 par Simon Gratereau et Pierre Pinaud aux habitants de la paroisse de St-Amant de Boixe</li><li>Don mutuel le 5 f&eacute;vrier 1625 entre Jean Laudoys, cordonnier et Marie Thomiou, sa femme (premi&egrave;re page floue)</li><li>Don mutuel le 12 mai 1640 entre Jean Fruschet, marchand sargieret Catherine Delavergne, veuve de Jean Bardereau?, femme de Joseph Micheau?, tous deux de Montignac</li><li>Don mutuel le 31 d&eacute;cembre 1641 entre Martial Menacheau, charpentier et Marguerite Heberard, sa femme de Montignac</li><li>Don mutuel le 4 d&eacute;cembre 1658 entre Jean Deleschelle, serrurier et Catherine Bugeon sa femme, de Montignac</li><li>Echange le 17&nbsp; juin 1642 entre Jean Aigron, de Tourriers, sonfr&egrave;re Heliot Aigron, Guillemette Thomiou? sa femme, de Tourriers et Denis Pallot, boucher, Thiphaine Crespeau sa femme de Montignac</li><li>Echange le 22 avril 1631 entre Guillaume Berthon, laboureur &agrave;boeufs et Fran&ccedil;ois Fouillade, fils de feu Pierre, laboureur &agrave; bras d'Aussac</li><li>Echange le 21&nbsp; d&eacute;cembre 1646 entre Hilairet Bouquinet l'ain&eacute;, deVouharte, et Jean Morand le Jeune, fils d'autre Jean, de St-Amant de Boixe</li><li>Echange le 11 f&eacute;vrier 1629 entre Fran&ccedil;ois Delauny de Montignac et Fran&ccedil;ois Mallet, fils de Jacob, charpentier, de St-Amant de Boixe</li><li>Echange le 4 janvier 1644 entre Antoine Fouschier, laboureur &agrave;bras et Jean Aigron, laboureur &agrave; bras, tous deux du village de Bouffanais &agrave; Tourriers</li><li>Echange le 19 f&eacute;vrier 1630 entre Daniel Fougerat, marchandgrenotier de St-Amant de BoixeEt Fran&ccedil;ois Fougerat son fr&egrave;re, laboureur &agrave; bras de St-Angeau</li><li>Echange le 27 ao&ucirc;t 1656 entre Joseph? Guy, marchand et Jean De La Maschi&egrave;re, laboureur &agrave; bras, tous deux de Montignac</li><li>Echange le 1er f&eacute;vrier 1657 entre Jean Morand, fils de feuPierre, laboureur &agrave; bras et Fran&ccedil;ois Boiteau, laboureur &agrave; bras, tous deux de St-Amant de Boixe</li><li>Echange le 20 juillet 1659 entre Jean Trichard, maitre es artslib&eacute;raux de Montignac et Jean Chappron, p&ecirc;cheur, fils de feu Fran&ccedil;ois dit Petit Champ, de Vars</li><li>Echange le 19 f&eacute;vrier 1668 entre Pierre Chastenet, marchand, deMontignac et Simon Mignot, laboureur &agrave; bras, Fran&ccedil;oise Maudet, sa femme, de St-Amant de Boixe</li><li>Echange le 2 avril 1651 entre Guy Berthouneau, marchand, deVillejoubert et Pierre Mallet, boucher, de St-Amant de Boixe (2 exemplaires : 4 et 5 pages)</li><li>Echange le 22 avril 1632 entre Fran&ccedil;ois Mallet, fils de Jacob,laboureur &agrave; bras et Daniel Fougerat, marchand, tous deux de St-Amant de Boixe</li><li>Echange le 16 juillet 1656 entre Jacques Mallet, notaire, de St-Amant de Boixe et Abraham Seguin de Montignac</li><li>Echange le 28 mars 1629 entre Fran&ccedil;ois, fils de feu Jacob,charpentier et et Jean Vachier, charpentier, tous deux de St-Amant de Boixe</li><li>Echange le 1er novembre 1656 entre Jacques Huet, notaire, de Montignac et Michel Quentin, laboureur, de Vervant</li><li>Echange le 18 novembre 1657 entre Jacques Huet, notaire, de Montignac et Antoine Quantin, laboureur &agrave; boeufs, de Vervant</li><li>Echange le 26 janvier 1631 entre Pierre Pinaud, sieur dePuyrichard, marchand et Fran&ccedil;ois Rouhet, laboureur &agrave; bras, tous deux de St-Amant de Boixe 
      <br></li><li>Echange le 19 juin 1628 entre Jean Bounisseau, notaire, de St-Amant de Boixe et Jean Thinon, notaire, de Montignac</li><li>Echange le 22 juillet 1638 entre Pierre Thinon, fils de feuPierre, avec Fran&ccedil;ois Trutaud, laboureur &agrave; bras, tous deux de St-Amant de Boixe</li><li>Echange le 26 d&eacute;cembre 1659 entre Isaac Couprie, chirurgien de Montignac et Jean Trutaud dit Caput de Montignac</li><li>Echange le 26 juillet 1647 entre Jean Preveraud, sieur du Breuil, de Montignac et Simon Trutaud, laboureur &agrave; bras de St-Amant de Boixe</li><li>Echange le 2 juin 1626 entre Simon Trutaud, laboureur &agrave; bras et Pierre Aigron?, laboureur &agrave; bras, tous deux de St-Amant de Boixe</li><li>Ferme le 15 juin 1657 de Guy Berthounneau, marchand de Puyreaux &agrave; Jean Rouzille, laboureur de St-Genis</li><li>Ferme le 18 juillet 1666 de Fran&ccedil;ois Birot, sieur du Treuil, de Montignac &agrave; Antoine et Jean Lurat, fr&egrave;res, laboureurs &agrave; boeufs de Vars</li><li>Ferme le 26 mai 1673 par Jean Gesmond, sieur des Rochoux &Agrave; Louis Rouhier, fils de feu Jozias de Xambes</li><li>Ferme le 11 novembre 1627 par Jean Gireaudeau, laboureur &agrave; bras, de St-Amant de Boixe &agrave; Simon Charrault, laboureur &agrave; bras de Balzac</li><li>Ferme le 14 ao&ucirc;t 1638 par Fran&ccedil;ois Mallo, marchad de Montignac &agrave; Jean Chevroux, marchand et Pierre Mallet de St-Amant de Boixe</li><li>Ferme le 20 d&eacute;cembre 1638 par Fran&ccedil;ois Mallo, marchand de Montignac &agrave; Michel Saulton, marchand de Nanclars</li><li>Ferme d'un moulin le 26 avril 1645 par Genis Guy, sieur de la Brousse, de Chebrac &agrave; Vincent Bouchier?; papetier de Chebrac?</li><li>Ferme le 24 juin 1668 par Vincent Nougier, laboureur &agrave; boeufs, d'Aussac &agrave; Joseph Guy, marchand de Montignac</li><li>Ferme le 20 d&eacute;cembre 1646 par Fran&ccedil;ois Papot, sieur de la Seguine, de Vouharte &agrave; Jean Matte, marchand boucher de Montignac</li><li>Ferme le 22 f&eacute;vrier 1639 par Jean Preveraud, juge s&eacute;n&eacute;chal de labaronnie de Montignac et y demeurant &agrave; Pierre Mesmin, tailleur d'habits de St-Ciers</li><li>Ferme le 24 ao&ucirc;t 1630 par Jean Preveraud, juge s&eacute;n&eacute;chal deMontignac et y demeurant &agrave; Jean Morand, laboureur &agrave; bras, de St-Amant de Boixe</li><li>Ferme le 31 mars 1651 par Jean Verit, marchand, de Montignac &agrave; Guy Berthounneau, marchand de Villejoubert</li><li>Ferme le 6 ao&ucirc;t 1634 par Jean Verit, marchand, de Montignac &agrave; Jacques Laidet, marchand de Verdille</li><li>Ferme le 2 f&eacute;vrier 1645 par Raymond Vivier, marchand, de Montignac &agrave; Michel Chadouteau, laboureur &agrave; boeufs, de Mansle</li><li>Ferme le 14 juillet 1641 par Abraham Aurain, sieur de BoisPineau, Charles Bouyer, sieur de l'Esbeaupin, Samuel Dubois, praticien, tous de Montignac &agrave; Jacob Cl&eacute;ment, charpentier, de St-Amant de Boixe</li><li>Ferme le 31 mars 1651 par Abraham Aurain, sieur de Bois Pineau, de Montignac &agrave; Guy Berthouneau, marchand de Villejoubert</li><li>Ferme le 16 juillet 1673 par Pierre Chastenet, marchand de Montignac &agrave; Louis Boumard, laboureur &agrave; bras, de Montignac</li><li>Ferme le 25 juillet 1643 par Jacob Cl&eacute;ment, de St-Amant de Boixe &agrave; Amant Bonnemain?, p&ecirc;cheur de Bignac</li><li>Ferme le 19 juillet 1643 par Jacob Cl&eacute;ment, de St-Amant de Boixe &agrave; Louis Trichard, charpentier de Chebrac</li><li>Ferme le 29 juin 1668 par Jean Foucaud et Pierre Tiffon,laboureurs &agrave; bras, de Montignac &agrave; Andr&eacute; Goumard, laboureur &agrave; boeufs de Vouharte</li><li>Ferme le 6 mars 1668 par Michel Gratereau, marchand de St-Amant de Boixe &agrave; Roch Barraud, marchand de St-Ciers</li><li>Ferme le 11 avril 1655 par Jean Journaud, laboureur, de St-Amant de Boixe &agrave; Pierre Biot, p&ecirc;cheur de Montignac</li><li>Ferme le 14 avril 1639 par Jean Leriget, sieur deChateaugaillard?, de Ruffec, pour Antoine Arnaud, receveur g&eacute;n&eacute;ral des aides d'Angoul&ecirc;me &agrave; Fran&ccedil;ois Mallet dit Le Petit?, de St-Amant de Boixe</li><li>Ferme le 18 juillet 1633 par Fran&ccedil;ois Mallet, marchand, Denis Pallot Pierre Sauvet, boucher &agrave; Jean Robareau dit Lorge 
      <br></li><li>Ferme le 19 juin 1668 des "droits de vin" par Pierre Birot, sieurde la Brouhe, de Montignac, pour Jean De Malmanche, commis des aides et autres droits de Montignac &agrave; H&eacute;lie Verdier, h&ocirc;tellier de Vars</li><li>Ferme le 26 novembre 1657 par Michel Quantin, laboureur &agrave; bras, de Vervant &agrave; Jean Audoin, laboureur &agrave; bras, de St-Amant de Boixe</li><li>Ferme le 30 d&eacute;cembre 1644 par Fran&ccedil;ois Thinon, de Montignac pourJean Leriget, sieur de Chateaugaillard, &agrave; Daniel Couste, marchand de Mansle</li><li>Ferme le 19 octobre 1644 du droit de vin par Fran&ccedil;ois Thinon, deMontignac pour Jean Leriget, sieur de Chateaugaillard &agrave; Benjamin Derome de Cellettes</li><li>Ferme le 11 mars 1646 du droit de vin par Fran&ccedil;ois Thinon,huissier, de Montignac pour Jean Leriget, sieur de Chateaugaillard &agrave; Gaspard Laborde, du bourg de Xambes</li><li>Ferme le 21 d&eacute;cembre 1645 du droit de vin par Fran&ccedil;ois Thinon, deMontignac pour Jean Leriget, sieur de Chateaugaillard &agrave; Jean Mousset dit Lanclou, et sa femme Madeleine Renauld? du bourg de Chebrac</li><li>Ferme le 4 f&eacute;vrier 1644 du droit de vin par Fran&ccedil;ois Thinon, deMontignac pour Jean Leriget, sieur de Chateaugaillard &agrave; Jean Quillet, h&ocirc;telier, de Nanclars</li><li>Ferme le 17 mars 1658 par Michel Lotte, texier en toille, LouiseBarradeau, sa femme, de Vouharte &agrave; Jacques Viaud, laboureur &agrave; bras de St-Amant de Boixe</li><li>Ferme le 26 janvier 1659 par Jean Mousset, fils de Jean,laboureur de Montignac &agrave; Jacques Viaud, laboureur &agrave; bras, de St-Amant de Boixe</li><li>Ferme le 26 mai 1644 par Jacques Viaud, laboureur &agrave; bras, de Montignac &agrave; Jean Seguin, l'a&icirc;n&eacute;, laboureur &agrave; boeufs, de Chebrac</li><li>Inventaire le 20 septembre 1624 des biens de d&eacute;funt Louis Thomiou pour ses enfants Fran&ccedil;ois, Louis, Jacquette et Marie (6 pages)</li><li>Inventaire le 10 juin 1628 des biens de feu Jean Audebert ditChaigneau, de Villognon pour Louis Pappot et Jeanne De St-Amant, veuve de Jean Gaidet (2 pages)</li><li>&#8220;Licitation&#8221; le 18 octobre 1639 entre Louis Thonin? (ou Thomiou),Fran&ccedil;ois Thonien?, laboureur &agrave; bras, de Montignac, Jacquette Thonien,femme de H&eacute;liot Pichon, de Xambes, enfants de d&eacute;funts Louis Thonin et Tiffaine Pappot</li><li>M&eacute;tairie le 5 juin 1626 par Catherine Raymond, dame du Chatelard,veuve de Jean Dumergne?, &agrave; Jean Lheriaud l'a&icirc;n&eacute;, laboureur &agrave; boeufs, tous de St-Amant de Boixe</li><li>M&eacute;tairie le 7 avril 1641 par Jean Preveraud, sieur de la Piterne,juge s&eacute;n&eacute;chal de Montignac &agrave; Gaston et Martin Journaud, fr&egrave;res, laboureur &agrave; boeufs de Villognon (5 pages)</li><li>Nomination le 8 d&eacute;cembre 1634 des syndics de St-Amant de Boixe pour Simon Gratereau</li><li>Nomination le 10 novembre 1680 des syndics de Xambes 
      <br></li><li>Nomination le 28 octobre 1683 des collecteurs de tailles de St-Amant de Boixe</li><li>Partage le 28 mars 1629 des biens de d&eacute;funts Jacob Mallet etFran&ccedil;oise Bouffanais entre Fran&ccedil;ois Mallet, Mass&eacute; Mallet, Jean Mallet,laboureur &agrave; bras, Marie Mallet, femme de Jean Vachier leurs enfants (13 pages)</li><li>Partage le 21 d&eacute;cembre 1630 des biens de d&eacute;funt Antoine Breuil,pour Jean Bouhier, de Xambes, Mich&egrave;le Rolland, sa femme, veuve du ditBreuil et Jean Regnon, fils de H&eacute;lliot, de Villejoubert, Fran&ccedil;oise Breuil sa femmme (6 pages)</li><li>Partage le 2 mars 1633 des biens de d&eacute;funte Jean Coupprie pourGenis Guy, marchand de Montignac et Marie Guy, femme de Jean Massicot?, de St-Genis ses enfants (5 pages)</li><li>Partage le 12 f&eacute;vrier 1633 des biens de d&eacute;ffunts Fran&ccedil;ois Moussetet Marie Pelletan entre Louis Mousset le Jeune, charpentier de Chebracet Jean Mousset, fils de feu Colas, veuf de Perrine Mousset, aussi de Chebrac (4 pages)
      <br>Partage le 3 juillet 1646 des biens de feus Guillaume Goumard etHilaire Boytaud entre Andr&eacute; Goumard, laboureur &agrave; boeufs, son fr&egrave;re Th&eacute;ophile, laboureur&agrave; boeufs, tous deux de Vouharte (9 pages)</li><li>Partage le 2 novembre 1648 des biens de Pierre Tiffon,charpentier, veuf de Tiffaine Martin, de Montignac entre ses enfantsJean Tiffon, sargier et Marie Tiffon, femme de Pierre Micheau, cordonnier (5 pages)</li><li>Partage le 4 novembre 1650 des biens de feue Ren&eacute;e Constant entrePierre Chastenet, marchand, Jean Chastenet le jeune, marchand, tousdeux de Montignac, Genis Ynour?, marchand boucher d'Angouleme, Marie Chatenet sa femme, enfants de la ditte Constant (6 pages)</li><li>Partage le 12 mai 1675 de d&eacute;funts Jean Lesvecquot et Jeanne Luratentre Fran&ccedil;ois Boissot, charpentier, Marie Lesvecquot sa femme, AntoineLesvecquot, Marie Lesvecquot la jeune leurs enfants, tous demeurant au village de Fen&ecirc;tre de Tourriers (7 pages)</li><li>Proc&egrave;s verbal le 23 avril 1633 de la d&eacute;molition d'un banc pour Jean Verit, fils de Jean, marchand sellier</li><li>Proc&egrave;s verbal le 22 juin 1644 de la seigneurie du chatelard pour Jacques Amblard, notaire et Charles Saoul, marchand (8 pages)</li><li>Proc&egrave;s verbal le 18 ao&ucirc;t 1644 de batiments d'Aussac pour Olivier Bonnet, marchand d'Aussac? (4 pages)</li><li>Proc&egrave;s verbal le 11 mars 1673 de l'&eacute;tat d'une maison lou&eacute;e &agrave;Fran&ccedil;ois Mallet dit Petit pour Pierre Thinon, greffier, de Montignac et Catherine Loisel sa femme</li><li>Proc&egrave;s verbal le 10 mars 1684 de l'&eacute;tat d'une muraille pourAbraham Seguin, curateur des enfants de feu Fran&ccedil;ois Guy, sieur des Avenaux</li><li>Proc&egrave;s verbal le 1er septembre 1684 pour Jacques Bouhier,armurier, Marguerite Buherne, sa femme contre Jean Gourdin ecuyer sieur de la Faye pour violence</li><li>Procuration le 11 d&eacute;cembre 1625 par Jean Thinon, notaire, PierreFauvereau, charron, Jean Chapron, cordonnier, tous assesseurs des tailles de Montignac &agrave; (nom en blanc) (deux exemplaires)</li><li>Procuration le 7 juin 1640 par Marie Raymond, de Montignac &agrave; Pierre Tiffon, tonnelier, son mari</li><li>Procuration du 10 septembre 1691 de Pierre Besson?, soldat demilice de St-Estephe, &agrave; Toussaint Besson, son fr&egrave;re de St-Estephe, fils de d&eacute;funts Philippe Besson et Christine Clemenceau</li><li>Retrocession le 7 d&eacute;cembre 1641 par Jean Rouhet, notaire, deSt-Amant de Boixe &agrave; Jean et Fran&ccedil;ois Quentin, fr&egrave;res, laboureurs &agrave; bras, de Vervant</li><li>Quittance le 7 juillet 1647 par Fran&ccedil;ois Mallet dit La Petite?Ferme?, syndic de Jacob Cl&eacute;ment l'a&icirc;n&eacute; et Claude Pappounnet, sa femme &agrave; Fran&ccedil;ois Raymond, laboureur &agrave; bras, gendre des pr&eacute;c&eacute;dents</li><li>Quittance le 25? juillet 1657 par Antoine Huet, Cl&eacute;ment Montagneet Pierre Tournerie, laboureurs de Villejoubert &agrave; Guy Berthonneau, tailleur d'habits de Villejoubert</li><li>Quittance le 24 juin 1675 par Pierre Chastenet, marchand, de Montignac &agrave; Fran&ccedil;ois Pelletan, marchand, de Montignac 
      <br></li><li>Quittance le 25 ao&ucirc;t 1683 par Marie Biraud, veuve de Jean Seguindit le Gallant, de St-Amant de Boixe &agrave; Louis Grattereau, praticien de Coulonges</li><li>Reconnaissance le 13 juin 1639 par H&eacute;lie Yver, horlogerd'Angoul&ecirc;me &agrave; Pierre Aurain, marchand, de Montignac, mari de Marie Paccaud</li><li>Reconnaissance le 29 juillet 1640 par Fran&ccedil;ois Rouhet, laboureur&agrave; boeufs &agrave; Simon Audureau, laboureur &agrave; bras, tous deux de St-Amant de Boixe</li><li>Reconnaissance le 16 juin 1642 par Jeanne Plantivet, veuve deJean Barriere?, de Marcillac &agrave; Jean Plantivet, Fran&ccedil;ois Plantivet, Fran&ccedil;ois Trutaud, mari de</li><li>Ren&eacute;e Plantivet, Pierre Thinon, mari de Marie Plantivet</li><li>Reconnaissance le 13 f&eacute;vrier 1646 par Michel Charruaud, laboureur &agrave; bras, de Montignac &agrave; Abraham Yver, de Montignac</li><li>Reconnaissance le 6 mars 1648 par Pierre Peraud dit Verdelle,laboureur &agrave; bras, de St-Amant de Boixe &agrave; Charles Saoul, marchand, de St-Amant de Boixe</li><li>Reconnaissance le 31 mars 1651 du partage des biens de leursparents par Romain Barradeau, laboureur, Louis Barradeau, laboureur, Louise Barradeau,</li><li>Michel Lotte, son mari, tous de Vouharte</li><li>Reconnaissance le 26 juin 1651 par Jean Tiffon, fils de feu Michel et Misse Foucaud &agrave; Marguerite Labb&eacute; sa femme</li><li>Reconnaissance le 26 septembre 1655 par Jean Pelletan, marchandsaulnier, de Chebrac &agrave; Fran&ccedil;ois Pelletan, marchand saulnier, son fils, de Montignac</li><li>Reconnaissance le 3 d&eacute;cembre 1659 par Jacques Viauld, laboureur &agrave; bras de Montignac &agrave; Pierre Birot, avocat au si&egrave;ge pr&eacute;sidial d'Angoumois</li><li>Reconnaissance le 27 mars 1672 par Pierre Bauny, en nom de feueIsabelle Guy, veuve de Samuel Aurain, Jacques Marchais, JacquetteAurain sa femme &agrave; Jean Morand l'a&icirc;n&eacute;, laboureur &agrave; bras, de St-Amant de Boixe</li><li>Reconnaissance le 8 juillet 1680 par Jean Lizee le Jeune,laboureur &agrave; bras d'Anais &agrave; Jeanne Delafarge, veuve de Nicolas De Martineau, conseiller du roi</li><li>Vente le 10 janvier 1634 par Jean Bouhier l'a&icirc;n&eacute;, fils de feuMicheau, laboureur &agrave; bras, Mich&egrave;le Rolland sa femme, de Xambes &agrave; Jean Preveraud, sieur de la Piterne, licenci&eacute; en loi, de Montignac 
      <br></li><li>Vente le 28 avril 1632 par Jean Bouhier l'a&icirc;n&eacute;, fils de feuMicheau, laboureur &agrave; bras, Mich&egrave;le Rolland sa femme, de Xambes &agrave; Jean Preveraud, sieur de la Piterne, juge de Montignac</li><li>Vente le 26 avril 1633 par Fran&ccedil;ois Bounamy, laboureur &agrave; boeufs, Marguerite Dumont, sa femme, de Brie &agrave; Mery Godeau, marchand de Brie</li><li>Vente le 26 avril 1648 par Pierre Gibouin, marchand, Fran&ccedil;oisBiot, sa femme, de Champnier &agrave; Jean Delafa, tailleur d'habits, natif de la Tour Blanche, de Montignac</li><li>Vente le 3 avril 1658 par Antoine Gindreau, marchand de Marsac &agrave; Louis Bonnet, marchand d'Aussac</li><li>Vente le 13 f&eacute;vrier 1668 par Jean Goumard, laboureur &agrave; bras, deSt-Amant de Boixe &agrave; Jean Levequot, laboureur &agrave; bras du village de Fen&ecirc;tre, de Tourriers</li><li>Vente le 22 juillet 1676 par Jean Guy, sergent de Montignac &agrave; Fran&ccedil;ois Verit, marchand sargier, de Montignac</li><li>Vente le 2 f&eacute;vrier 1655 par Jean Lurat l'a&icirc;n&eacute;, laboureur &agrave;boeufs, de Villejoubert &agrave; Julien Lurat le jeune, texier en linge, de Vars</li><li>Vente le 15 mars 1661 d'une maison par Jean Lurat dit Gounot,laboureur &agrave; bras &agrave; Antoine, autre Antoine, Jean, Julien Lurat, tous fr&egrave;res de Vars</li><li>Vente le 23 septembre 1650 par Jean Mazotan le jeune, laboureur &agrave; bras, de Xambes &agrave; Pierre Bouniceau, notaire de St-Amant de Boixe</li><li>Vente le 2 f&eacute;vrier 1633 par Isaac Mesnage, marchand de Bourgueil? en Anjou &agrave; Alain Maistre, sieur du Petit? bois, d'Aussac</li><li>Vente le 14 septembre 1683 par Jacques Morand, laboureur &agrave; bras,Fran&ccedil;oise Mallet sa femme, de St-Amant de Boixe &agrave; Jean Menacheau, tailleur d'habits de Montignac</li><li>Vente le 18 mars 1631 par Jean Quessard, dit Castard?, laboureur &agrave; bras &agrave; Pierre Amiaud, notaire, tous deux de St-Amant de Boixe</li><li>Vente le 18 octobre 1673 par Fran&ccedil;ois Quessard, laboureur &agrave; bras de St-Amant de Boixe &agrave; Fran&ccedil;ois Gaschet, mar&eacute;chal de Montignac</li><li>Vente le 17 octobre 1628 par Pierre Sauvet, marchand de Montignac &agrave; Mathurin Barreau?, laboureur &agrave; bras de Maine de Boixe</li><li>Vente le 9 mars 1659 par Abraham Seguin, sieur des Loges, deMontignac &agrave; Gilles Nougier et Guillaume Berthon, fils de feu Olivier, de Villejoubert</li><li>Vente le 29 janvier 1655 par Jean Vergnaud, laboureur &agrave; bras &agrave; Blais Bruneau, laboureur &agrave; boeufs, tous deux de Cellettes</li><li>Vente le 3 mai 1651 par Louis De Marchou le Jeune, laboureur &agrave;bras de St-Amant de Boixe, Michel Charruaud et Pierre Foucaud, laboureurs, de Montignac &agrave; Michel Seguin, notaire, de Montignac</li><li>Vente le 20 janvier 1675 par Pierre Chastenet, marchand &agrave; Fran&ccedil;ois Biot, fils de feu Jean, laboureur, tous deux de Montignac</li><li>Vente le 18 ao&ucirc;t 1673 par Pierre Bourger, marchand, de Marcillac &agrave; Pierre Chastenet, marchand, de Montignac</li><li>Vente le 8 avril 1674 par Pierre Chastenet, marchand &agrave; Isaac Couprie, chirurgien, tous deux de Montignac</li><li>Vente le 23 septembre 1674 par Pierre Chastenet, marchand &agrave; Fran&ccedil;ois Pelletan, marchand, tous deux de Montignac</li><li>Vente le 9 d&eacute;cembre 1674 par Pierre Chastenet, marchand &agrave; Pierre Ravion, marchand sargier, tous deux de Montignac</li><li>Vente le 15 septembre 1674 par Louis Gratereau, praticien, de Coulonges &agrave; Pierre Pappot dit Caignaud, laboureur, de Montignac</li><li>Vente le 17 juillet 1684 par Fran&ccedil;ois Lhote, laboureur &agrave; bras,Marie Tourboureaud sa femme &agrave; Charles Gratereau, sieur des Ousches, tous de Xambes</li><li>Vente le 17 janvier 1632 par Jean Noblet, cur&eacute; de Chebrac &agrave; Pierre Lheriaud, laboureur &agrave; bras, de Vars</li><li>Vente le 10 novembre 1628 par Olivier Chapron, cordonnier, de Montignac &agrave; Fran&ccedil;ois Mallet, fils de Jacob, de St-Amant de Boixe</li><li>Vente le 2 avril 1651 par Jean Goumard le Jeune, laboureur &agrave;bras, de Villejoubert &agrave; Pierre Mallet, boucher, de St-Amant de Boixedes biens patrimoniaux de d&eacute;funte Mich&egrave;le Laurand, veuve de Fran&ccedil;ois Mallet dit La Bouillit (2 exemplaires)</li><li>Vente le 7 novembre 1640 par Jeanne Thoureau, veuve de Fran&ccedil;oisMallet, fils d'Hilaire &agrave; Louis Mangon, charpentier, tous de St-Amant de Boixe</li><li>Vente le 1er novembre 1656 par Michel Quantin, laboureur &agrave; bras de Vervant &agrave; Isaac Copprie, chirurgien, de Montignac</li><li>Vente le 14 mars 1633 par Fran&ccedil;ois Berard, marchand &agrave; Jean Trutaud dit Caput, laboureur &agrave; bras, tous deux de St-Amant de Boixe</li><li>Vente le 13 avril 1632 par Heliot Mignot, laboureur &agrave; bras &agrave; Jean Trutaud dit Caput, tous deux de St-Amant de Boixe</li><li>Vente le 27 mai 1631 par Fran&ccedil;ois Trutaud, fils de feu Simon,laboureur &agrave; bras, de St-Amant de Boixe &agrave; Jean Preveraud, sieur de la Piterne, juge de</li><li>Montignac</li><li>Vente le 2 mai 1630 par Jacques Viault, laboureur &agrave; bras de Montignac &agrave; Pierre Birot l'a&icirc;n&eacute;, avocat au pr&eacute;sidial d'Angoumois</li><li>Vente le 2 juin 1630 par Jacques Viault, laboureur &agrave; bras &agrave; Fran&ccedil;ois Tiffon, sargier, tous deux de Montignac 
      <br></li>
      </ul></h4>
    <br>
    <br><h1>Notaire Gounin de Coulgens</h1> 
    <p><big><b><u>
            <a name="gounin">Gounin</a></u></b></big>
    </p><h4>
      <ul type=disc><li>Accord le 24 f�vrier 1638 entre L�onnet Constantin, notaire, de St-Ciers et Simon Foucaud, Pierre Pouillat, Michel Billonnet, collecteurs de l'enclave de Sigogne, Terrebourg et Villars</li><li>Accord le 4 juin 1638 entre Louis Gounin, marchand, de Coulgens et Jean Gibaud, marchand, de la paroisse de la Madeleine suite � la vente d'une cavalle</li><li>Accord le 10 mai 1655 entre Vallier Gounin, sieur de la Gorse?, de Coulgens et Michel Quesmand, pour Jean Quesmand, son fr�re, de Coulgens sur un droit de passage</li><li>Accord le 1er juin 1655 entre Jean Gounin, sieur de la Riouze, de Coulgens et Jean Blanchard, fils de Jean, de Jauldes</li><li>Accord le 21 juin 1655 entre Jean Tizon, �cuyer sieur de Sigogne, de Sigogne et Roch Fureau, sieur de Villemallet, de Coulgens</li><li>Accord le 10 d�cembre 1655 entre Fran�ois Gounin, sieur de la Fond, de Coulgens, et Vallieur Gounin, sieur de la Gorse?, de Coulgens, Pierre Ramade, sieur de la Vance, de Mouton</li><li>Accord le 17 juin 1671 entre Louis Gounin, marchand, de Coulgens, S�bastien Gallan, laboureur, de St-Angeau, Michel Grimaud?, Jean Robin, Antoine Festix, Bastien Gallan, Bastien Fouchier et bien d'autres</li><li>Accord le 9 juillet 1671 entre Jean Gounin, sieur de la Martini�re, fils de d�funts Fran�ois et Yolande Vigier, de Coulgens pour ses soeurs Fran�oise, Marie, autre Fran�oise et Antoine Mesnard, laboureur � boeufs de St-Angeau . Sont mentionn�s : Fran�ois Gounin, sieur de la Fon, d�ffunt Roch Fureau,</li> sieur de Villemallet, veufs de Yolande et Fran�oise Vigier<li>Accord le 31 d�cembre 1671 entre Jean Fureau, garde des eaux et for�ts, et Antoinette Fureau, sa soeur, tous de la Rochette</li><li>Accord le 22 novembre 1674 entre Marguerite Roy, veuve de Jean Festix, de Nanclars et Michel Festix, laboureur, de St-Angeau</li><li>Accord le 29 octobre 1684 entre Marie Bouyer, veuve de Mathurin Furreau (ou Surreau), de Jauldes et Jean Deloyseau, voiturier, de Jauldes, veuf de Fran�oise Furreau </li><li>Acte le 9 juillet 1656 entre les habitants de St-Angeau � propos des tailles?</li><li>Don mutuel le 22 octobre 1652 entre Pierre Grellier et Anne Rouhet, mari et femme, de Coulgens</li><li>Donation le 14 f�vrier 1653 par Jean Fran�ois et Janette Petix, sa femme � Jean Galoux l'a�n�, laboureur � b�ufs, tous de Jauldes</li><li>Donation le 20 d�cembre 1671 par Jean Fureau, garde des eaux et for�ts � Antoinette Fureau, sa s�ur, tous de la Rochette</li><li>Echange le 10 octobre 1636 entre Vincent Fureau, laboureur � boeufs, et Marguerite Ferrand, femme de Fran�ois Fureau, fils du dit Vincent, tous de La Rochette</li><li>Echange le 14 f�vrier 1639 entre Louis Gounin, marchand de St-Angeau et Anne? Lambert, de St-Angeau</li><li>Echange le 17 janvier 1652 entre L�onnet Constantin, notaire, de St-Angeau et Jean De La Sotti�re, l'a�n�, de St-Angeau</li><li>Echange le 30 mai 1655 entre Jean Festix, marchand et Pasquet Festix, son fils, tous deux de St-Angeau</li><li>Echange le 3 octobre 1655 entre Jean Gounin, sieur de la Riouze, Martin Petiteau et Jean Vallade, tisserand en linge, tous deux de Coulgens</li><li>Echange le 11 d�cembre 1659 entre Fran�ois Gounin, sieur de la Fon et Vall�rien Raymond, sieur de la Prade, tous deux de Coulgens</li><li>Echange le 4 d�cembre 1662 entre Fran�ois et Jean Fureau, fr�res, laboureurs, tous deux de la Rochette</li><li>Echange le 22 septembre 1669 entre Fran�ois Constantin, archer, de St-Ciers et Jacques Barraud, marchand, de Coulgens</li><li>Echange le 3 juin 1670 entre Isac Corgnol, ecuyer sieur du Bois d'Avairan?, de Jauldes et Pierre Grassin, laboureur, de St-Angeau</li><li>Ferme le 2 juin 1653 par Pierre Gounin, notaire royal � Vall�rien Raymond, marchand, tous deux de Coulgens</li><li>Ferme le 3 mai 1655 par Pierre Le Greze, �cuyer sieur de Devezeau, de St-Angeau � Vallier Gounin, sieur de la Gorse, de Coulgens</li><li>Ferme le 19 septembre 1655 par Fran�ois Marionneau, laboureur, de Coulgens, mari de Agn�s Pestix � Pierre Festy, laboureur, de La Rochette</li><li>Inventaire le 23 septembre 1671 des biens de feu Jean Fureau, marchand de La Rochette pour sa veuve Marie Babaud et Jean Fureau, son fils, garde des eaux et des for�ts, tous de la Rochette (23 pages)</li><li>Location le 5 d�cembre 1638 par S�bastien Dupuy, tailleur d'habits, de St-Angeau � Jean Gounin, dit Cadet?, de Coulgens</li><li>M�tairie le 15 mars 1656 par Vallier Gounin, sieur de la Gorze, de Coulgens � Michel Dotteau et Toussaint Pouillat, son gendre, laboureurs de Coulgens</li><li>M�tairie le 3 juin 1670 par Isaac Corgnol, �cuyer sieur du bois, de Jauldes � Pierre, Fran�ois et autre Fran�ois Grassin, laboureurs, p�re et fils, de St-Angeau</li><li>M�tairie le 19 mars 1671 par Fran�ois Constantin, archer, de St-Ciers � Louis Gounin, laboureur � bras, de Coulgens</li><li>Offre le 28 avril 1655 par Roch Fureau, sieur de Villemallet, de Coulgens � Gourdin? Dexmier, sieur de la Barri�re</li><li>Partage le 13 janvier 1655 des biens de d�funts Olivier Bourrier (ou Bourrut) et Fran�oise Boissot, sa femme entre Mathelin Bourrier, laboureur, Antoinette Bourrier, femme de Pierre Alineau, d'Aussac, Jean Chesne, fils de Fran�ois, de Coulgens, pour Jeanne et Anne Chesne, ses filles du premier lit, leurs enfants (7 pages)</li><li>Partage le 11 septembre 1674 des biens communs entre Fran�ois Fureau, laboureur � bras et Marguerite Moreau, sa femme s�par�e de biens, tous deux de la Rochette</li><li>Protestation le 14 ao�t 1638 par Jean Chauvin?, tonnelier de Segonzac � Louis Gounin, dit le Taillis?, marchand, de Coulgens (2 exemplaires)</li><li>Proc�s verbal le 19 novembre 1655 pour Jeanne Chazeau, veuve de Guillaume Sallat, sergent royal concernant Pierre Gounin, notaire royal</li><li>Proc�s verbal le 14 ? 1655 pour Fran�ois Gounin sieur de la Fon, Vallier Gounin, sieur de la Gorze, son fr�re, h�ritiers de Vallier Gounin, leur p�re concernant Jean Gounin, sieur de la Riouze, tous deux de Coulgens</li><li>Proc�s verbal le 30 juillet 1668 pour Fran�ois Fureau, marchand, de la paroisse des Pins contre Jean et Pierre Fureau, p�re et fils, marchands</li> <li>Quittance le 2 octobre 1644 par Jean Nadaud, laboureur, de la Rochette � Isabelle Gounin, veuve de L�onet Nadaud, de Coulgens</li><li>Quittance le 1er avril 1655 par Roch Fureau, sieur de Villemallet, de Coulgens � Jean De Rouffignac, sieur de la Treille, de St-Ciers?</li><li>Reconnaissance le 12 septembre 1668 par Pierre Gounin, marchand, de Coulgens � Antoine Guillen, marchand de Coulgens</li><li>Sommation le 19 f�vrier 1639 par Jean Raymond, Pierre Petiteau et Jean Lemaire?, collecteurs de Coulgens � Pierre Benoyt et Fran�ois Gounin, notaires royaux</li><li>Vente le 25 f�vrier 1638 par Uriel Resnaud, laboureur � bras, de Nanclars �  Simon Foucaud, laboureur � boeufs, de Coulgens</li> <li>Vente le 12 avril 1645 par Vallier David, laboureur, laboureur, Marguerite Festix, sa femme � Louis Gounin, dit le Taillis?, tous de Coulgens</li><li>Vente le 20 janvier 1652 par Nadaud Poyrier, laboureur � boeufs, d'Agris � Fran�ois Fureau, laboureur, de la Rochette</li><li>Vente le 23 septembre 1652 par Guillaume Penigaud, laboureur, Jacques Tingaud, mari de Charloette Penigaud, son gendre, de Ste-Colombe � Jean Festy, laboureur � boeufs, de St-Angeau</li><li>Vente le 19 mars 1653 par Jacques Gounin, marchand, de St-Angeau � Jean Fureau, fils de Jean, garde des eaux et for�ts, de la Rochette</li><li>Vente le 7 f�vrier 1655 par Martin Bounamy, laboureur, de Jauldes � Jean Gounin, sieur de la Riouze, repr�sent� par Martin Petiteau, son grand-p�re, de Coulgens</li><li>Vente le 27 mai 1655 par Blais Brebion, laboureur � boeufs, de Brie � Jean Gounin, sieur de la Riouze, de Coulgens (2 exemplaires)</li><li>Vente le 10 octobre 1655 par Fran�ois Caillier, veuve de Martin Bounamy, de Jauldes � Jean Gounin, sieur de la Riouze, de Coulgens</li><li>Vente le 19 octobre 1656 par Jean Gounin, sieur de la Riouze � Pierre? Gounin, notaire royal, son fr�re</li><li>Vente le 15 avril 1666 par Pierre Gounin, marchand, dit la Bille?, Jeanne Nicaud, sa femme � Pierre Benoist, laboureur, dit le Rousseau, tous de Coulgens</li><li>Vente le 5 octobre 1671 par Fran�ois Gounin, sieur de la Fon, du bourg de Marcillac? � Louis Perrois?, laboureur � bras, de Coulgens</li> <li>Vente aux ench�res le 23 d�cembre 1654 des biens de d�funt Louis Gounin dit le Taillis? (5 pages) pour Louis Gounin, sieur de la Gane, curateur des enfants mineurs, Pierre Ganteil?, greffier de St-Genis, mari de Marie Gounin (5 pages) </li><li>Vente (sans date) par Fran�ois Fureau, laboureur, de la Rochette pour Georges Fureau son fr�re � L�onnet? Constantin, notaire, de St-Ciers</li><li>Vente (sans date) par Fran�ois Grellier, Pierre De Presigoud, son gendre?, de Ste-Colombe � Roch Fureau, sieur de Villemallet et Fran�ois Gounin, sieur de la Fon, de Coulgens </li>
      </ul></h4>
    </div><h1>Notaire  de Xambes</h1><h4><big><b><u>
            <a name="mallet_xambes">Mallet</a></u></b></big></h4><h4>
      <ul type=disc>  <li>Reconnaissance le 18 f&eacute;vrier 1675 par Fran&ccedil;ois Piet, charpentier     et Jeanne Quentin, sa femme, veuve de Fran&ccedil;ois Poinsonnet, du village     d'Echoisy, de Cellettes &agrave; Fran&ccedil;oise Poinsonnet, laboureur &agrave;      boeufs, du village des Loges, de Lux&eacute;</li>  <li>Accord le 19 mars 1675 entre Jean Denis, laboureur &agrave; bras, de Cellettes,     Jeanne Prevost, sa femme, celle-ci en droit de Christine Denis, femme de David     Prevost, de Cellettes, Pierre Denis, laboureur &agrave; boeufs, de Xambes,     Fran&ccedil;ois Quentin, laboureur &agrave; boeufs de Vervant, Marie Denis,     sa femme, les dits Denis, tous enfants de d&eacute;funte Marie Bruneau, leur      m&egrave;re </li>  <li>Proc&egrave;s verbal le 3 avril 1675 pour Catherin Picard, laboureur &agrave;     boeufs, du village de Ravaud, d'Aussac d'une pi&egrave;ce de terre d&eacute;pendant      du prieur&eacute; du Ravaud</li>  <li>Proc&egrave;s verbal d'une maison le 11 avril 1675 pour Martial Binaud,     tonnelier, de St-Amant de Boixe arrent&eacute;e &agrave; Pierre Bouniceau      et Jean Amiaud le jeune, fils d'autre Jean, notaires de St-Amant de Boixe</li>  <li>Ferme le 3 mai 1675 par Antoine Quentin, laboureur &agrave; boeufs aux droits     de Louis Bouffanais, fermier des biens de d&eacute;funts Antoine Pichon et     Pierre Bouhier dit Brigaille, de Vervant &agrave; Jean Bouquet, laboureur      &agrave; bras, de Xambes</li>  <li>Ferme le 3 mai 1675 par Antoine Quentin, laboureur &agrave; boeufs aux droits     de Louis Bouffanais, fermier des biens de d&eacute;funts Antoine Pichon et     Pierre Bouhier dit Brigaille, de Vervant &agrave; Denis Aubert, laboureur      &agrave; bras, de Xambes</li>  <li>Vente le 17 mai 1675 d'une pi&egrave;ce de terre par Pierre Thinon dit le     Jeune, texier en toile &agrave; Pierre Birot, sieur de la Brouhe, tous de      Montignac</li>  <li>Assignation d'une somme de 60 livres le 24 juillet 1675 par Fran&ccedil;ois     Foucaud, laboureur &agrave; boeufs, et Pierre Foucaud, laboureur &agrave;     boeufs, son fils, Anne Mesnard, sa femme, tous du village de Sigogne, de Coulgens      sur une pi&egrave;ce de terre</li>  <li>Arrentement le 11 ao&ucirc;t 1675 d'une petite place par Amant Gratereau,     sieur de Vervant, capitaine du ch&acirc;teau de Montignac, de Vervant &agrave;      Nicolas Paziot, laboureur &agrave; bras, de Vervant</li>  <li>Ferme le 18 ao&ucirc;t 1675 d'une maison parJean Thinon, avocat au parlement,      d'Angoul&ecirc;me &agrave; Louis Froumageau, laboureur &agrave; bras, de Xambes</li>  <li>Partage le 21 septembre 1675 des biens de d&eacute;funts Fran&ccedil;ois     Poinsonnet et Catherine Enard, entre Jeanne Demarchou, veuve de Fran&ccedil;ois     Poinsonnet, subrogeant Jacquette Poinsonnet, femme de Baptiste Rochier, les     dits Poinsonnet, filles de dits Poinsonnet et Enard, du village des Loges,     de Lux&eacute;, Fran&ccedil;ois Piet, laboureur &agrave; boeufs, Jeanne Quentin,     sa femme, veuve de Fran&ccedil;ois Poinsonnet, fils des dits Poinsonnet et     Enard, agissant pour Marguerite Poinsonnet, sa fille et du dit feu, du village     d'Echoisy, de Cellettes et Louis Poinsonnet, laboureur &agrave; boeufs, fils      des dits Poinsonnet et Enard, du village des Loges, de Lux&eacute;</li>  <li>Echange le 26 novembre 1675 de lieux entre Jean Thinon, avocat au parlement,     d'Angoul&ecirc;me et Fran&ccedil;ois Guymard, laboureur &agrave; boeufs, de      Vervant</li>  <li>Ferme le 9 janvier 1676 d'un droit de guet par Amant Gratereau, sieur de     Vervant, capitaine du ch&acirc;teau, de Montignac, de Vervant &agrave; Mathurin      Delaborde, sergent du duch&eacute; de la Rochefoucauld, de Xambes</li>  <li>Arrentement le 3 avril 1676 d'une pi&egrave;ce de terre par Jean Thinon,     avocat, d'Angoul&ecirc;me &agrave; Pierre Fradonnet, laboureur &agrave; bras,      de Xambes</li>  <li>Vente le 13 avril 1676 d'une pi&egrave;ce de terre par Charles Bouhier,     sieur de Lesbaupin, de St-Etienne les Montignac &agrave; Jean Chaumond, pr&ecirc;tre      cur&eacute; de Vervant</li>  <li>Acte de compte le 22 mai 1676 entre Jean Guillen, marchand sargetier, fils     de Jean Guillen dit Petit Jean, de Vadalle, mari de Marie Tamplard, fille     de d&eacute;funt Pierre Tamplard et Pierre Dupuy, Antoinette Denis, veuve      de Jean Tamplard, marchand voiturier, de Villejoubert</li>  <li>Partage le 26 mai 1676 des biens de d&eacute;funts Pierre Picard et Catherine     Rossignoux entre H&eacute;lie Mounier, laboureur &agrave; bras, Catherine     Berthoum&eacute;, sa femme, veuve de Pierre Picard, subrog&eacute;e en place     de Jeanne Picard, soeur germaine du dit Pierre, fille des dits Picard et Rossignoux,     de Coulonges et Augustin Martaguet, laboureur &agrave; bras, Catherine Picard,     sa femme, de Villognon, Jacques Peraud, sargier, Ren&eacute;e Picard, sa femme,      de Gourville, les dites Picard, filles du dit Pierre</li>  <li>Echange le 31 mai 1676 entre Olivier Vigan, pr&ecirc;tre cur&eacute; de     Villognon et Louis Guyot, &eacute;cuyer sieur de la Motte, Fran&ccedil;ois     Raymond, &eacute;cuyer sieur des Moli&egrave;res, Nicolas Martaguet, tisserand,     Jeanne Trigaud, sa femme, H&eacute;lie Journaud, laboureur, Augustin Martaguet,      laboureur &agrave; bras, tous de Villognon</li>  <li>Renoncement d'un leg le 6 juin 1676 par Jean Mesnard, laboureur &agrave;     boeufs, du village de Moussac, d'Agris, veuf de Marguerite Foucaud au profit     de Pierre Foucaud, laboureur &agrave; boeufs, du village de Sigogne, paroisse     de Coulgens, Jean Brousse, Marie Foucaud, sa femme, fille de Fran&ccedil;ois      Foucaud et d&eacute;funte Clemence Guillen, du village de Vadalle</li>  <li>Echange le 5 ao&ucirc;t 1676 de lieux entre Pierre Thinon, greffier, de      Montignac et Jean Pichon dit Fontainon, laboureur &agrave; bras, de Xambes</li>  <li>Echange le 25 ao&ucirc;t 1676 de lieux entre Pierre Thinon, greffier, de      Montignac et Jean Pichon dit Fontenon, laboureur &agrave; bras, de Xambes</li>  <li>Arrentement le 28 ao&ucirc;t 1676 de trois pi&egrave;ces de vigne par Charles     Gratereau, sieur des Ousches, garde de la pleine de Vervant &agrave; Pierre      Foucaud, laboureur &agrave; bras, fils de feu Fran&ccedil;ois dit Chaumeun?</li>  <li>Partage le 8 octobre 1676 entre Jean Pappounet, laboureur &agrave; boeufs,     et Pierre Pappounet, son fr&egrave;re, pour Fran&ccedil;oise Lambert, sa belle-soeur,      tous du village du Ravaud, d'Aussac</li>  <li>Partage le 22 octobre 1676 des biens de d&eacute;funte Suzanne Cl&eacute;menceau     entre Gabriel Alineau, laboureur &agrave; bras et Jean Alineau, laboureur      &agrave; bras, ses enfants, tous deux de Vadalle</li>  <li>Echange le 29 octobre 1676 de lieux entre Pierre Thinon, greffier, de Montignac      et Denis? Brisson, laboureur &agrave; bras, de Xambes</li>  <li>Accord le 15 novembre 1676 entre Fran&ccedil;ois Petit, tailleur d'habits     et Antoine Jameau, laboureur &agrave; boeufs suite &agrave; un proc&egrave;s    </li>  <li>Inventaire le 23 novembre 1676 des biens de feu Jean Roux pour sa veuve      Marguerite Amyaud, de Xambes</li>  <li>Echange le 6 d&eacute;cembre 1676 de pi&egrave;ces de vigne entre Jean Thinon,     avocat au parlement, d'Angoul&ecirc;me et Louis Bouhier dit le Grison, laboureur      &agrave; boeufs, de Xambes</li>  <li>Echange le 10 janvier 1677 de terres entre Jean Thinon, avocat, d'Angoul&ecirc;me     et Blays Bouhier, laboureur de Coulonges, Jean Bouhier, laboureur, de Xambes,      les dits Bouhier fr&egrave;res</li>  <li>Vente le 21 f&eacute;vrier 1677 d'une pi&egrave;ce de pr&eacute; par Jean     Tiffon dit Gros Jean, laboureur &agrave; boeufs du village du Fouilloux, de      la Chapelle &agrave; Jean Raveau, fils d'Etienne, laboureur, de Coulonges</li>  <li>Cession le 28 f&eacute;vrier 1677 d'une somme par Perrette Vauvert, veuve     de Jean Thinon, avocat, de Vervant &agrave; Jean Thinon, avocat au pr&eacute;sidial      d'Angoul&ecirc;me, son fils</li>  <li>Echange de lieux le 7 mars 1677 entre Jean Tiffon, fils d'H&eacute;lie,     laboureur &agrave; bras, de Coulonges et Fran&ccedil;ois Raveau, laboureur      &agrave; bras, de Vouharte</li>  <li>Partage le 14 mars 1677 des biens de d&eacute;funte Jeanne Sudre, veuve     de Charles Mathieu entre Pierre Catherineau, laboureur &agrave; boeufs, mari     d'Antoinette Mathieu, de Xambes, Jean Tiffon dit Gaselot, p&ecirc;cheur pour     Fran&ccedil;ois et Paule Tiffon, ses enfants de feue Marie Mathieu sa femme,      de Vouharte, les dits Mathieu, enfants de la dite Sudre</li>  <li>Vente le 25 mars 1677 d'une pi&egrave;ce de terre par Jean Thinon, avocat     au parlement, d'Angoul&ecirc;me &agrave; Louis Froumajeau, laboureur &agrave;      bras, de Xambes</li>  <li>Reconnaissance le 21 avril 1677 par Louis Bonnet, laboureur &agrave; boeufs,      d'Aussac &agrave; Olivier Bonnet, marchand, d'Aussac, son fr&egrave;re</li>  <li>Echange le 1er mai 1677 entre Marc Gourdin, &eacute;cuyer sieur du Puy et     de Villognon, de la cath&eacute;drale St-Pierre d'Angoul&ecirc;me et Gaston      Lurant, laboureur, Jacob Lurant, laboureur, son fils, les dits Lurant de Villognon</li>  <li>Inventaire le 31 mai 1677 des biens de Jacques Godichon, laboureur &agrave;     bras, de Xambes, veuf de Suzanne Foucaud en vue de son mariage avec Marie     Froumageau, fille de Louis Froumageau et de d&eacute;ffunte Rad&eacute;gonde     Bouhier pour Antoinette Godichon, fille du dit Jacques et la d&eacute;funte      Foucaud</li>  <li>Sommation le 6 septembre 1677 par Louis Audoin, laboureur &agrave; boeufs,     fils d'autre Louis, de Xambes contre Colas Condat, fils a&icirc;n&eacute;      de Paul, de Villognon afin qu'il restitue un boeuf</li>  <li>Vente le 22 septembre 1677 d'une pi&egrave;ce de terre par Jean Thinon,     avocat au parlement, d'Angoul&ecirc;me &agrave; Pierre Bouhier, mar&eacute;chal,      de Xambes</li>  <li>Echange le 25 d&eacute;cembre 1677 de lieux entre Fran&ccedil;ois Guillen     dit Perdriau, marchand, de Vadalle, mari de Madeleine Tamplard et Jacques     Regnier, laboureur &agrave; boeufs, Anne Berton, sa femme, fille de d&eacute;funt      Olivier Berton, de Villejoubert</li>  <li>Inventaire le 30 octobre 1677 de la communaut&eacute; de Pierre Courtin,     laboureur &agrave; boeufs, de Vouharte et sa d&eacute;funte femme Jeanne Tiffon,     fille de d&eacute;funt Pierre Tiffon et Marie Andr&eacute; pour la dite Andr&eacute;,     &agrave; pr&eacute;sent, femme de Michel Mathieu, laboureur &agrave; boeufs,      de Vouharte</li>  <li>Echange le 10 novembre 1677 de lieux entre Jean Thinon, avocat au parlement,      d'Angoul&ecirc;me et Jean Godichon, laboureur &agrave; boeufs, de Xambes</li>  <li>Echange le 6 d&eacute;cembre 1677 de lieux entre Raymond Guillen l'a&icirc;n&eacute;,     laboureur &agrave; boeufs, d'Aussac et Jean Guillen dit Petit Jean, laboureur      &agrave; bras, de Vadalle</li>  <li>Echange le 6 d&eacute;cembre 1677 de lieux entre Olivier Guillen, laboureur      &agrave; boeufs et L&eacute;onard Ladvenat, m&eacute;randier, tous de Vadalle</li>  <li>Delaissement le 11 d&eacute;cembre 1677 par Jean Giberteau, laboureur &agrave;     bras, Antoinette Martaguet, sa femme &agrave; Antoine Delage, veuve de d&eacute;funt      Jean Giberteau, fils des dits Giberteau et Martaguet, tous de Villognon</li>  <li>Cession le 3 janvier 1678 des droits de r&eacute;paration contre Fran&ccedil;ois     Nadaud, fils de Denis et Pierre Guerin, tailleur d'habits, de Coulonges par     Jean et Michel Delage, p&egrave;re et fils, Simone Vouillac et Jacquette Nadaud,     leurs femmes, tous de Coulonges &agrave; Louis Gratereau, sieur de la Ronze,      de Coulonges</li>  <li>Cession le 6 janvier 1678 d'une pi&egrave;ce de terre par Charles Gratereau,     sieur des Ousches, garde de monseigneur le duc de la Rochefoucauld &agrave;      Pierre Mousset, tous de Xambes?</li>  <li>Inventaire le 25 f&eacute;vrier 1678 des biens de d&eacute;funt Gervais      Yier pour sa femme Marguerite Denis,de Xambes</li>  <li>M&eacute;tairie le 6 mars 1678 d'une m&eacute;tairie de Coulonges par Louis     Gratreau, sieur de la Ronze, de Coulonges &agrave; Mathias Nadaud, Marguerite     Pasiot, sa femme, Abraham Nadaud, fils du dit Mathias, Suzanne Nadaud, sa      femme, tous de Coulonges</li>  <li>Vente le 6 avril 1678 d'une pi&egrave;ce de terre par H&eacute;lie Arnaud,     ma&ccedil;on et Jeanne Aumont, sa femme &agrave; Louis Gratereau, sieur de      la Ronze, tous de Coulonges</li>  <li>Arrentement le 15 avril 1678 d'une pi&egrave;ce de terre par Fran&ccedil;ois     Gaurrain, marchand, de Montignac &agrave; Fran&ccedil;ois Tiffon, laboureur,      de Vouharte</li>  <li>Vente le 30 avril 1678 d'une pi&egrave;ce de jardin par Mathurine Pichon,     veuve de Nicolas Bouhier, et Louis Bouhier, son fils &agrave; Charles Gratreau,      sieur des Ouches, garde de monseigneur, tous de Xambes</li>  <li>Compte le 23 mai 1688 entre Pierre Thinon, greffier de la baronnie, Catherine     Loisel, sa femme de Montignac et Pierre Duprat, laboureur &agrave; bras, mari      de Madeleine Bouhier, fille de feu Jean, fils de feu Daniel, de Xambes</li>  <li>Inventaire le 9 juin 1678 des biens d'Antoinette Delage, de Villognon en     vue de son mariage avec Fran&ccedil;ois Martineau, laboureur, fils d'autre      Fran&ccedil;ois, laboureur &agrave; bras, de Marcillac</li>  <li>Vente le 9 juin 1678 d'une pi&egrave;ce de terre par Louis Gratreau, sieur      de la Ronze &agrave; Jean Raveau, laboureur &agrave; boeufs, tous de Coulonges</li>  <li>Accord le 24 juin 1678 entre Marguerite Amiaud, veuve de Jean Roux de Xambes     et H&eacute;lie Gauvin, laboureur &agrave; boeufs, de Xambes, Jeanne Roux,      sa femme, fille de la dite Amiaud</li>  <li>Echange le 24 juin 1678 de lieux entre Pierre Gauttereau, sergent du duch&eacute;     de la Rochefoucauld, Marie Gratreau, sa femme, de St-Amant de Boixe et Louis     Gallopin, laboureur &agrave; bras, Jacquette Mallet, sa femme, de St-Amant      de Boixe</li>  <li>Proc&egrave;s verbal le 2 ao&ucirc;t 1678 pour Louis Audoin, laboureur,     de Xambes des biens et domaines de Jeanne Gauvin, veuve de Fran&ccedil;ois      Gros dit Brunet, de Xambes</li>  <li>Vente le 7 ao&ucirc;t 1678 d'une pi&egrave;ce de terre par Pierre Bouhier,      mar&eacute;chal, de Xambes &agrave; Jean Thinon, avocat au parlement, d'Angoul&ecirc;me</li>  <li>Echange le 16 novembre 1678 de lieux entre Pierre Guillen, laboureur &agrave;      bras, de Vadalle et Olivier Guillen, laboureur &agrave; boeufs, de Vadalle</li>  <li>Partage le 8 d&eacute;cembre 1678 entre Olivier Blanchon, p&ecirc;cheur     et laboureur, Antoinette Miniere, sa femme, de Villognon et Antoine Bertrand     pour Fran&ccedil;oise Blanchon, sa femme et Jacques Blanchon et Paule Bertrand,      tous de Villognon</li>  <li>Vente le 25 f&eacute;vrier 1679 d'une pi&egrave;ce de terre par Jean Tiffon     dit Gros Jean, laboureur, de la Chapelle &agrave; Louis Gratereau, praticien,      de Coulonges</li>  <li>Partage le 7 avril 1679 par Jean Quentin dit Venjean, veuf de Anne Noblet     &agrave; Fran&ccedil;ois Quentin dit Quentin, Fran&ccedil;ois Quentin dit     Courtebotte, curateurs aux biens des enfants de d&eacute;funts Jacques Quentin     et Marie Bernard, Jean Quentin, fils du dit Jean, Ren&eacute; Fouchereau,     Marguerite Quentin, sa femme, Pierre Piat, Marie Quentin, sa femme, les dits      Quentin, enfants des dits Quentin dit Venjean et Anne Noblet</li>  <li>Vente le 4 juin 1679 d'une pi&egrave;ce de terre par Pierre Chanbonneau,     tailleur d'habits, du bourg de Fouqueure &agrave; Charles Gratereau, sieur      des Ouches, garde de monseigneur le duc de la Rochefoucauld, de Xambes</li>  <li>Vente le 1er juillet 1679 de deux pi&egrave;ces de terre par Charles Mathieu,     laboureur de Xambes, m&eacute;tayer de La Chapelle &agrave; Jean Thinon, avocat      au parlement, d'Angoul&ecirc;me</li>  <li>Proc&egrave;s verbal le 17 juillet 1679 des biens de feu Jean Gautier, sieur     de Puyp&eacute;roux, de Montignac pour Jean Andr&eacute;, sieur du Mesniou,      femme de Suzanne Bauny, fille de Suzanne Gautier, tante du dit feu Gautier</li>  <li>Partage le 18 juillet 1679 d'une grange de Vervant entre Antoine Bertrand,     fils de feu Guillaume, de Vervant, Jacob Bertrand, son fr&egrave;re, Pierre      Maucaffin, mari de Jeanne Bertrand</li>  <li>Promesse le 22 juillet 1679 d'indemnisation par Antoine Lebesgue, sieur     de la Pinaute, maitre de la poste de St-Cybardeaux, de St-Cybardeaux &agrave;     Charles Gratreau, sieur des Ousches, garde de monseigneur de La Rochefoucauld,      mari de Marie Paillier, de Xambes</li>  <li>Ferme le 15 ao&ucirc;t 1679 d'une maison par Louis Gratereau, praticien,     de Coulonges et Charles Gratereau, sieur des Ousches, l'un des gardes de monseigneur     de La Rochefoucauld &agrave; Pierre Mignot dit La Prime, laboureur, de St-Amant      de Boixe</li>  <li>Accord le 21 septembre 1679 entre Antoine Boissot, laboureur, de Xambes     et Jean Fraigneau, Jean Vodichon, Daniel Bouyer et Charles Pichon, collecteurs      de Xambes &agrave; propos de malversations</li>  <li>Accord le 25 octobre 1679 entre Jeanne Trigaud, veuve de Nicolas Martaguet,     texier en toile et Augustin Martaguet, laboureurs &agrave; bras, fils d'Augustin,     Nicolas Martaguet, fils de feu Gaston, Jacques Lurant fils d'autre Jean et     de d&eacute;funte Laurence Martaguet, Martin Martaguet, mari d'Emerie Lurand,     soeur germaine de Jacques Lurant, tous de Villognon. Les dits Nicolas, Augustin,      Laurence Martaguet son fr&egrave;res et soeurs.</li>  <li>Partage le 3 novembre 1679 des biens de d&eacute;funts Fran&ccedil;ois Bruneau     et Denise Aubrye entre Jean Bruneau, laboureur &agrave; bras, Jean Guerroy,     Jacquette Bruneau sa femme, Emard Billonnet, veuf de ? Bruneau pour Jean Billonnet,     son fils, tous de Cellettes, les dits Bruneau, enfants des dits Bruneau et      Denise Aubrye</li>  <li>Sommation le 22 novembre 1679 par Fran&ccedil;ois Saulton, charron, de Nanclars     contre L&eacute;onard Ladvenat, du village de Vadalle afin que celui-ci restitue      une obligation &agrave; propos de roues de charretes</li>  <li>Arrentement le 26 janvier 1680 d'une pi&egrave;ce de chenevaud par H&eacute;lie     Dubois, sieur de la Bernarde, procureur fiscal, de St-Etienne les Montignac     &agrave; Charles Gratereau, sieur des Ousches, garde de monseigneur de la      Rochefoucauld, de Xambes</li>  <li>Reconnaissance le 18 f&eacute;vrier 1680 par Simon Boys, tailleur d'habits,     Jeanne Bergerat, sa femme, Pierre Boyreau, tailleur d'habits, Marie Gratreau,     sa femme, fille et nore des dits Boys et Bergerat, tous du village de Cherves,     de Jauldes &agrave; Louis Gratreau, praticien, de Coulonges, veuf de Catherine      Biraud. La dite Marie Gratreau est fille du dit Louis et de la dite Biraud</li>  <li>Accord le 4 mars 1680 entre Louis Gratereau, praticien, de Coulonges et     Mathurin Delaborde, huissier, de Xambes suite &agrave; un diff&eacute;rent      sur leurs affaires communes</li>  <li>Affirmation le 25 mars 1680 pour Antoine Tiffon, charpentier d'Angers contre     Pierre Gros dit Chapelier, laboureur &agrave; boeufs, de Coulonges, son fr&egrave;re      ut&eacute;rin</li>  <li>Inventaire le 19 mars 1680 des biens de feu Augustin Martaguet, de Villognon     pour Catherine Picard, sa femme et Guillaume Binaud, charpentier, oncle de     Marie Martaguet, fille du dit Augustin et de d&eacute;funte Catherine Binaud,      premi&egrave;re femme du dit Martaguet</li>  <li>Ferme le 20 mars 1680 par Pierre? Pesnaud et Marguerite Bonnin, sa femme,     de Marcillac? &agrave; Fran&ccedil;ois Quentin, fils de feu Antoine dit Lamerie,      de Vervant</li>  <li>Cession le 3 mai 1680 par Fran&ccedil;ois Quentin dit Longesme, laboureur     &agrave; boeufs de Vervant &agrave; Th&eacute;odore Maignan, sieur du Breuil,      de Marcillac</li>  <li>Proc&egrave;s verbal le 13 juin 1680 pour Pierre Papounnet le Jeune, marchand,      de St-Amant de Boixe contre Jean Mignot son voisin &agrave; propos d'un &eacute;gout</li>  <li>Proc&egrave;s verbal le 20 ao&ucirc;t 1680 pour Antoine et Louis Boissot,     laboureurs de Xambes contre Pierre Boissot et Fran&ccedil;oise Bouyer, sa      femme, de Xambes, le dit Pierre, leur fils et fr&egrave;re</li>  <li>Don mutuel le 8 octobre 1680 entre Charles Clochard, laboureur &agrave;      bras et Catherine Lherme, sa femme, du village d'Echoisy, de Cellettes</li>  <li>Vente le 26 octobre 1680 par Fran&ccedil;ois Bareau, marchand et Louis Bernard,     marchand, de Villognon &agrave; Louis Journaud, fils de feu Gaston, laboureur     &agrave; boeufs, de Villognon de droits de r&eacute;paration civile et criminelle     contre Fran&ccedil;ois Condat, Fran&ccedil;ois Marot, Nicolas Martaguet et      Fran&ccedil;ois Thorin</li>  <li>Arrentement le 3 novembre 1680 de biens h&eacute;rit&eacute;s par Charlotte     Amiaud, fille de feu Louis, de Vervant &agrave; Pierre Thinon, sieur des Voustes,      fils Me Jean Thinon, avocat au parlement d'Angoul&ecirc;me</li>  <li>Vente des biens, domaines et h&eacute;ritage le 1er d&eacute;cembre 1680     par Jacques Arnaud, laboureur &agrave; bras, Marie Raveau, sa femme, d'Amb&eacute;rac     &agrave; Jean Andr&eacute; l'a&icirc;n&eacute;, fils de d&eacute;funt Jean,      du village du Fouilloux, de La Chapelle</li>  <li>Partage le 6 janvier 1681 entre Jean Hermant, laboureur &agrave; bras, Marie     Gobeau, sa femme, veuve de Mathurin Ballotteau, de Mansle, Jacques Ballotteau,     veuf de Suzanne Gobeau, les dits feu Mathurin Ballotteau, Jacques Ballotteau     subrog&eacute;s aux droits de Fran&ccedil;oise et Martine Gobeau, femmes d'H&eacute;liot     et Philippe Ballotteau dans les successions de Denis Gobeau et Denise Prudhomme     et Pierre Combaud, laboureur &agrave; boeufs, mari de Louise Ballotteau, fille      de feue Suzanne Gobeau, demeurant au village d'Echoisy, de Cellettes</li>  <li>Inventaire le 14 janvier 1681 des biens de d&eacute;funte Denise Merlet,      pour son mari Jean Tiffon dit Gazelot, p&ecirc;cheur de Vouharte</li>  <li>Reconnaisance le 21 janvier 1681 par Louis Bourabier, Pierre Malmanche,     maitre pallier, Marie Bourrabier, sa femme, h&eacute;ritiers de Jeanne Biart,      de Fouqueure &agrave; Fran&ccedil;ois Barreau, marchand, de Villognon</li>  <li>Inventaire le 30 janvier 1681 des biens de Jean Durand, 70 ans ou environ,     cur&eacute; de Vouharte en vue de son retrait chez Jean Raveau, fils de feu      Ren&eacute;, laboureur &agrave; bras, de Vouharte</li>  <li>Vente d'une pi&egrave;ce de terre le 2 f&eacute;vrier 1681 par Louis Bouhier     dit Grison, laboureur, de Xambes &agrave; Michel Festis, marchand, du village      de Fougi&egrave;re, de St-Angeau</li>  <li>Inventaire le 4 f&eacute;vrier 1681 des biens de d&eacute;funt Jean Durand      pour Jean Ducluseau, cur&eacute; de Notre Dame de Vouharte</li>  <li>Ferme le 26 mars 1681 par Jean De Rouffignat, praticien, mari de Marie Bounin,     de Coulgens &agrave; Fran&ccedil;ois Quantin dit Quantin, laboureur &agrave;      boeufs de Vouharte</li>  <li>Sommation le 3 mai 1681 par Pierre Journaud, laboureur &agrave; boeufs,     Pierre Bouyer, mar&eacute;chal contre Jean Combaud, fils de feu Guillaume,      tous de Villognon, &agrave; propos d'un compte sur la taille</li>  <li>Inventaire le 11 mai 1681 des biens de d&eacute;funts Jean Larriv&eacute;,     natif de Rioux en Saintonges et Gabrielle Chollet, sa femme, native de Rouillac     pour Andr&eacute; Faveraud, laboureur &agrave; bras, du village du Fouilloux,      de La Chapelle, mari de Michelle Chollet, soeur de la ditte Gabrielle</li>  <li>Accord le 8 juin 1681 entre Marc Gourdin, &eacute;cuyer sieur Dupuy, chanoine     de St-Pierre d'Angoul&ecirc;me et Jean Giraudeau, H&eacute;lie Renoleau, Jean     Roquart, laboureur &agrave; boeufs de Lux&eacute; suite &agrave; la coupe      de fagots dans la pi&egrave;ce du dit Gourdin</li>  <li>Promesse le 15 juin 1681 d'indemnit&eacute; par Charlotte Amiaud de Vervant      &agrave; Pierre Thinon, sieur des Voustes, d'Angoul&ecirc;me</li>  <li>Reconnaissance le 24 juin 1681 par les habitants de Villognon &agrave; Jean      Vincent leur pr&ecirc;tre et cur&eacute;</li>  <li>Reconnaissance le 24 juin 1681 par Louis Guyot &eacute;cuyer sieur de la     Motte, Jean Giberteau, Pierre Bouhier, mar&eacute;chal, Fran&ccedil;ois Ducluzeau     et Louis Giberteau, tous de Villognon &agrave; Jean Vincent, leur pr&ecirc;tre      et cur&eacute;</li>  <li>Reconnaissance le 24 juin 1681 par Louis Guyot &eacute;cuyer sieur de la     Motte, Marguerite Giberteau, veuve de Louis Desherce, Pierre Bouhier, mar&eacute;chal,      tous de Villognon &agrave; Jean Vincent leur pr&ecirc;tre et cur&eacute;</li>  <li>Arrentement le 6 ao&ucirc;t 1681 par Fran&ccedil;ois Gounin, sieur des Vilars,     du village de Sigogne, de Coulgens &agrave; Pierre Sauvage, laboureur &agrave;      boeufs de Vadalle</li>  <li>Bail le 26 ao&ucirc;t 1681 par Michel Mathieu, ma&icirc;tre es arts lib&eacute;raux     &agrave; Bernard Menacheau, Michelle Condat, sa femme et fr&egrave;re consanguine     du dit Mathieu, tous deux enfants de d&eacute;funte Simone Gastineau, demeurant      tous &agrave; Xambes</li>  <li>Sommation le 26 ao&ucirc;t 1681 par Michel Martin, sieur de Font Robin,     greffier de Mansle contre Vincent Paziot, laboureur &agrave; boeufs, Marie     Surget, sa femme, de Vervant &agrave; propos de l'entretien de deux vaches      et d'un veau </li>  <li>Partage le 18 octobre 1681 des biens de d&eacute;funte Jeanne Lhoumeau entre     Jean Bouhier dit Menaudon, laboureur &agrave; boeufs, veuf de Jeanne Lhoumeau,     pour Jacques et Emerie Bouhier, ses enfants de la ditte Lhoumeau, du village     de la Sangle, de la Chapelle et Jean Bouhier, son fils de la dite Lhoumeau,      du village des Courauds, de Maine de Boixe</li>  <li>Proc&egrave;s verbal le 19 novembre 1681 pour Jean Thinon, avocat au parlement,     d'Angoul&ecirc;me contre Antoine et Fran&ccedil;ois Quentin, fils de feu Antoine,     laboureurs de Vervant afin qu'ils se d&eacute;sistent de deux pi&egrave;ces      de terre</li>  <li>Vente d'une maison le 16 d&eacute;cembre 1681 par Jean Andr&eacute;, fils     de Fran&ccedil;ois, laboureur &agrave; boeufs, Fran&ccedil;ois Andr&eacute;,     son jeune fils, laboureur, Jeanne Coste, sa femme &agrave; Jean Andr&eacute;,      fils du dit Jean, tous de Vouharte</li>  <li>Vente le 23 janvier 1682 d'une pi&egrave;ce de chenevaud par Charles Gratereau,     sieur des Ouches, garde de monseigneur le duc de la Rochefoucauld, de Xambes      &agrave; Etienne Audhouin, laboureur, de St-Amant de Boixe</li>  <li>D&eacute;claration le 3 f&eacute;vrier 1682 par Jean Poutard, laboureur     &agrave; bras, de Vouharte, mari d'Elisabeth Seudre, fille de d&eacute;funt      Jean Seudre de lieux d&eacute;pendant du prieur&eacute; de Vouharte</li>  <li>Cession le 18 f&eacute;vrier 1682 du sol principal d'une rente par Jeanne     Picard, veuve de Jacques Berthomm&eacute;, Pierre Mousset, laboureur &agrave;     bras, Louise Berthomm&eacute;, sa femme, h&eacute;riti&egrave;re de Jacques     Berthoumm&eacute;, son fr&egrave;re, de Xambes &agrave; Louis Gratereau, praticien,      de Coulonges</li>  <li>D&eacute;claration le 2 mars 1682 par Fran&ccedil;oise Duchaix, veuve de     Ren&eacute; Gaillard, et Pierre Gaillard, son fils, laboureur &agrave; bras,      tous de Vouharte, de lieux d&eacute;pendant du prieur&eacute; de Vouharte</li>  <li>Accord le 17 mars 1682 entre Jean Thinon, avocat au parlement, d'Angoul&ecirc;me     et Daniel Bouhier dit Le Viller, laboureur de Xambes &agrave; propos de comptes      et d'une pi&egrave;ce de terre</li>  <li>Partage le 20 mars 1682 des biens de d&eacute;funte Jeanne Bonnet, veuve     de Jacques Tiffon, sieur des Noyers, juge de la juridiction de Vouharte entre     Fran&ccedil;ois Tiffon, sieur des Nouhiers, Jean Bot, praticien, Jeanne Tiffon,     sa femme, de Mansle, Genevi&egrave;ve Tiffon, Jacques Fumeau, son mari, procureur     fiscal de la baronnie de Montignac, de Montignac, curateur de Jacquette Tiffon,     Pierre Tiffon, sieur des Brousses, du village de Villerioux, de St-Groux,     curateur de Marie Tiffon, Jean Fumeau, chirurgien de Vars, curateur de Pierre     et Jacques Tiffon, les dits Fran&ccedil;ois, Jeanne, Genevi&egrave;ve, Jacquette,      Marie, Pierre et Jacques Tiffon, enfants de la ditte Bonnet</li>  <li>Accord le 2 juillet 1682 entre Jean Brousse, marchand, Marie Foucaud, sa      femme et Jean Guillen dit la Pointe, Pierre Brousse, marchands, tous de Vadalle</li>  <li>Ferme le 23 ao&ucirc;t 1682 par Fran&ccedil;ois Gratereau, sieur de Grand      Champ &agrave; Fran&ccedil;ois Poinsonnet (photo mal cadr&eacute;e)</li>  <li>Inventaire le 10 septembre 1682 des biens de Jeanne Trigaud, de Villognon      en vue de son mariage avec Pierre Giraudeau, marchand, de Vars</li>  <li>Accord le 5 septembre 1683 entre Fran&ccedil;ois Guillen dit Perdriau, marchand     de Vadalle et Fran&ccedil;ois Malherbe du bourg de Puyr&eacute;aux :Le dit     Guillen pr&eacute;tend avoir aquis des terres de Jean Ducluzeau, mari d'Anne     Petit, Jean Regnaud, Nadalle Petit, sa femme, Jacques Bouffanais, Tisserand,     Jeanne Allineau, sa femme, Antoine Caillier, laboureur, Marie Alineau sa femme,     les dites Petit et Alineau, fille de d&eacute;funte Andr&eacute; Perroit et      souhaite que le dit Malherbe se d&eacute;siste d'une partie de ses terres</li>  <li>Vente le 19 f&eacute;vrier 1684 d'une pi&egrave;ce de terre par Fran&ccedil;oise     Foucaud, veuve d'H&eacute;lie Bouhier dit Le Viller, Daniel et Jacob Bouhiers,     laboureurs &agrave; bras, ses enfants, tous de Xambes &agrave; Jean De Chaumont,      pr&ecirc;tre cur&eacute; de Vervant</li>  <li>Inventaire le 21 ao&ucirc;t 1684 des biens de d&eacute;funt Pierre Delescallier,     cur&eacute; de Vouharte pour ses fr&egrave;res Michel Lescallier, tailleur      d'habits, No&euml;l Lescalier, praticien, son fr&egrave;re, d'Angoul&ecirc;me</li>  <li>Arrentement le 8 d&eacute;cembre 1684 par Jean Andr&eacute;, sieur du Maniou,     mari de Suzanne Bauny, de Marcillac &agrave; Pierre De La Maschi&egrave;re,      fils de Fran&ccedil;ois, laboureur &agrave; bras, de St-Amant de Boixe</li>  <li>Arrentement le 24 f&eacute;vrier 1685 de deux pi&egrave;ces de vigne par     Charles Gratereau, sieur des Ousches, de Xambes &agrave; Louis Gallopin, laboureur,      de St-Amant de Boixe</li>  <li>M&eacute;tairie le 18 mars 1685 par Marie Geoffroy, veuf de Robert Paillier,     sieur Duperat, de Xambes &agrave; Fran&ccedil;ois Quentin, fils de feu Antoine      Dit Lamerrie, laboureur &agrave; boeufs et Marie Denis, sa femme, de Vervant</li>  <li>Quittance le 18 juillet 1685 par Charles Gratereau, sieur des Ouches &agrave;     Fran&ccedil;ois Lotte, laboureur &agrave; bras, Marie Tourebourreau, sa femme,      tous de Xambes</li>  <li>Quittance le 5 mai 1686 par Charles Gratereau, sieur des Ouches, de Xambes      &agrave; Louis Gallopin, laboureur de St-Amant de Boixe</li>  <li>Inventaire le 16 d&eacute;cembre 1686 des biens de d&eacute;funt Antoine     Quantin dit Cadet, laboureur &agrave; boeufs, de Vervant pour sa veuve Jeanne      Bouhier</li>  <li>Inventaire le 7 f&eacute;vrier 1687 des biens de Louis Bouhier dit Le Grizon,      veuf d'Antoinette Bounain, de Xambes pour sa veuve Simone Delalut</li>  <li>Vente le 14 mai 1687 d'une pi&egrave;ce de terre par Pierre Thinon, greffier     et Catherine Loysel, sa femme, de Montignac &agrave; Jean Thinon le jeune,      avocat au parlement, d'Angoul&ecirc;me</li>  <li>Compte le 23 mai 1688 entre Pierre Thinon, greffier de la baronnie, Catherine     Loisel sa femme, de Montignac et Pierre Duprat, laboureur &agrave; bras, mari     de Madeleine Bouhier, fille de d&eacute;funte Jean, fils de d&eacute;funt      Daniel, de Xambes</li>  <li>Vente le 21 juin 1688 d'une pi&egrave;ce de pr&eacute; par Anne Delage,     veuve de Jean Trutaud dit Caput, marchand, Abraham Trutaud, sergent royal,     son fils a&icirc;n&eacute; de St-Amant de Boixe &agrave; Pierre Thinon, sieur      de Voustes, d'Angoul&ecirc;me</li>  <li>Ferme le 29 ao&ucirc;t 1688 par Pierre et H&eacute;lie Arnaud, ma&ccedil;ons,     fr&egrave;res, du village du Couraud, de Maine de Boixe &agrave; Louis Gratreau,      praticien, de Coulonges</li>  <li>R&eacute;siliation de testament le 2 novembre 1688 de Pierre Thinon, laboureur,     du village du Breuil, de Vouharte en faveur de Guillaume Gautier, pr&ecirc;tre      cur&eacute;, de Vouharte et ses successeurs</li>  <li>Vente le 2 novembre 1688 de deux pi&egrave;ces de vigne et d'une pi&egrave;ce     de terre par Pierre Thinon, laboureur &agrave; bras, du village du Breuil,      de Vouharte &agrave; Guillaume Gautier, pr&ecirc;tre de Vouharte, de Vouharte</li>  <li>Cession le 5 f&eacute;vrier 1689 de deux pi&egrave;ces de terre par Pierre     et H&eacute;lie Arnaud, fr&egrave;res, ma&ccedil;ons, du village du Couraud,     de Maine de Boixe, H&eacute;lie Gauvain, laboureur &agrave; bras, Anne Arnaud,     sa femme, de Xambes, pour Marguerite et Madeleine Arnaud, les dits Arnaud,     h&eacute;ritiers de d&eacute;funt H&eacute;lie Arnaud, leur p&egrave;re &agrave;      Louis Gratereau, praticien, de Coulonges</li>  <li>M&eacute;tairie le 2 juillet 1689 par Marc Gourdin, &eacute;cuyer sieur     du Puy, chanoine de la cath&eacute;drale St-Pierre d'Angoul&ecirc;me, d'Angoul&ecirc;me     &agrave; Pierre Denis, laboureur &agrave; boeufs, Marguerite Quentin, sa femme,      du village des Granges, d'Amb&eacute;rac</li>  <li>Arrentement le 9 juillet 1689 d'une pi&egrave;ce de terre par Isaac Dulaux,     chevalier seigneur de Cellettes &agrave; Charles Gratereau, sieur des Ousches,      garde de la for&ecirc;t de la Boixe</li>  <li>Vente le 8 septembre 1689 d'une pi&egrave;ce de jardin par Pierre Martaguet,     laboureur &agrave; bras, Anne Chadillat? , sa femme &agrave; Jean Bouhier,      mar&eacute;chal, tous de Villognon</li>  <li>Arrentement le 17 f&eacute;vrier 1690 d'une masure par Michel Maulde, avocat     au parlement, juge s&eacute;n&eacute;chal de Montignac, d'Angoul&ecirc;me     &agrave; Charles Gratereau, sieur des Ousches, garde de la for&ecirc;t de      la Boixe, de Xambes</li>  <li>Reconnaissance le 3 septembre 1690 entre Pierre Courtin, laboureur &agrave;     boeufs, fils d'Etienne, Marie Caillaud, sa femme, de Vouharte &agrave; Etienne     Caillaud, p&ecirc;cheur, Marie Godet, p&egrave;re et m&egrave;re de la ditte      Caillaud, de La Chapelle</li>  <li>Vente le 1er octobre 1690 d'une pi&egrave;ce de vigne par Jean, Daniel et     Jacob Bouhier, fr&egrave;res, laboureurs &agrave; bras, de Xambes &agrave;      Pierre Lebesgue, greffier, de Vouharte </li>  <li>Arrentement le 18 octobre 1690 par Daniel, Jean et Jacob Bouhier, fr&egrave;res,     laboureurs &agrave; bras, de Xambes &agrave; Uriel Menacheau, laboureur, de      Xambes </li>  <li>D&eacute;claration le 15 d&eacute;cembre 1690 par Fran&ccedil;ois Gastineau,     Charles Pichon, Denis Brisson, Aymard Roux, Pierre Boissot, Ren&eacute; Bouquet     laboureurs et Michel Maulde, juge s&eacute;n&eacute;chal de Montignac, Jeanne     Barradeau, veuve de Jean Guillot, Jeanne Bouhier, veuve d'Antoine Quantin,     Marguerite Godichon, veuve de Louise Audoin et les h&eacute;ritiers de feu      Robert Paillier, sieur du Perat, tous de Xambes de la prise du Puy des Menacheaux</li>  <li>D&eacute;claration le 15 d&eacute;cembre 1690 par Fran&ccedil;ois Gastineau,     Denis Brisson, Charles Pichon, Marguerite Godichon, veuve de Louise Audoin,      tous de Xambes de la prise des Mesnards</li>  <li>Reconnaissance le 10 avril 1691 par Jean Laydet, laboureur &agrave; boeufs,     du village des Loges, de Lux&eacute; &agrave; Charles De Mayol, seigneur abb&eacute;      de l'abbaye de St-Amant de Boixe &agrave; propos d'un droit de p&ecirc;che</li>  <li>Sommation le 31 mai 1691 par Jean De Roufignac, sieur de la Traille, mari     de Marthe Aygron, h&eacute;riti&egrave;re de feu Jacques Aygron, sieur de     la Motte, de Montignac &agrave; Pierre et Marie Couprie, fr&egrave;re et soeur,     enfants de d&eacute;funt Pierre Couprie, chirurgien, du village du Tapis,     de Montignac, le dit Pierre Couprie, ayant eu la gestion et administration      de la ditte Aygron</li>  <li>Vente le 8 novembre 1691 d'une pi&egrave;ce de terre par Pierre Preveraud     et Jean Cathalany pr&ecirc;tre religieux &quot;profaix&quot; de l'abbaye de     St-Amant de Boixe &agrave; Jacques Mignot, laboureur &agrave; bras, tous de      St-Amant de Boixe</li>  <li>Reconnaissance le 30 novembre 1691 d'une rente par Jeanne Moreau, veuve     d'Antoine Delaborde, Jean Delaborde l'a&icirc;n&eacute;, h&ocirc;telier, Jean     Delaborde dit Frize, laboureur &agrave; bras, ses fils et du dit feu, tous     de Xambes &agrave; Pierre Thinon, greffier, de Montignac et Catherine Loisel      sa femme</li>  <li>Accord le 3 d&eacute;cembre 1691 entre Louis Gratereau, praticien, Pierre     Guerain, tailleur d'habits et Jacques Bouyer, laboureur &agrave; boeufs, tous      de Coulonges suite aux abus et malversations du dit Bouyer</li>  <li>Vente le 27 d&eacute;cembre 1691 de trois pi&egrave;ces de terre par Pierre     Thinon, greffier et Catherine Loysel, sa femme, de Montignac &agrave; Jean      Godichon, laboureur &agrave; boeufs, de Xambes</li>  <li>Sommation le 2 avril 1692 par Jeanne Rovere, veuve de Louis Ytier, sieur     de Grand Pr&eacute;, de Mansle contre Antoine Guerin, laboureur &agrave; bras,     de Coulonges suite &agrave; une assignation devant le si&egrave;ge pr&eacute;sidial      d'Angoul&ecirc;me par le dit Guerin contre la ditte Rovere</li>  <li>Inventaire le 1er septembre 1692 des biens de feu Jean Tiffon dit Vouhartant?     pour Pierre Gauttreau, sergent de la Rochefoucauld, curateur &agrave; son     h&eacute;r&eacute;dit&eacute; vacante &agrave; la requ&ecirc;te de Pierre     Nadaud, sergent royal, son cr&eacute;antier, les dits Gauttreau et Nadaud,      de St-Amant de Boixe</li>  <li>Vente le 11 janvier 1693 d'une pi&egrave;ce de vigne par Jean Rouhet dit     La Garde, laboureur &agrave; boeufs &agrave; Anne Seguin, veuve de Samuel      Dubois, du village de la Bernarde, tous de St-Amant de Boixe</li>  <li>Accord le 8 f&eacute;vrier 1693 entre Louis Parteau l'a&icirc;n&eacute;,     laboureur &agrave; bras et Louis Parteau le jeune, tailleur d'habits, tous     de Villognon concernant le testament de Pierre Parteau, fr&egrave;re de Louis      Parteau le jeune en faveur de son oncle Louis Parteau l'a&icirc;n&eacute;</li>  <li>Accord le 5 mars 1693 entre Jean Bouhier, mar&eacute;chal, Fran&ccedil;ois     et Pierre Peraud, laboureurs et Fran&ccedil;ois Derome, tous de Cellettes      (Acte &agrave; moiti&eacute; d&eacute;chir&eacute;)</li>  <li>Partage le 23 mars 1693 des biens de d&eacute;funte Anne Delaglaye entre     Pierre Paziot, laboureur &agrave; bras, Pierre Piat, laboureur &agrave; bras,     Catherine Paziot, sa femme, fille du dit Pierre et de la ditte Delaglaye,      tous de Vervant</li>  <li>Proc&egrave;s verbal de la muraille d'une maison le 3 septembre 1694 pour     Jean Brousse, marchand, de Vadalle, fils de d&eacute;funte Suzanne Biais contre      L&eacute;onard Lavenat et Marguerite Jameau, sa femme</li>  <li>Vente le 3 mai 1693 d'une pi&egrave;ce de terre par H&eacute;lie Gauvin,     laboureur &agrave; bras et Anne Arrnaud, sa femme &agrave; Charles Gratreau,      sieur des Ouches, garde de la for&ecirc;t de Boixe, tous de Xambes</li>  <li>Vente le 16 avril 1694 d'une pi&egrave;ce de vigne par Gaspard Brisson,     laboureur et Marguerite Bouhier, sa femme, de Xambes &agrave; Perrette Vauvert,      veuve de Jean Thinon, avocat au parlement, d'Angoul&ecirc;me</li>  <li>R&eacute;siliation de testament le 9 mai de 1694 par Jean Raveau dit Grand     Jean, laboureur en faveur de Guillaume Gautier, pr&ecirc;tre cur&eacute; de      Vouharte, tous de Vouharte</li>  <li>Quittance le 3 septembre 1694
        <font color="#FF0000"> 
          <font color="#000000">par     Pierre Peraud, laboureur &agrave; bras, Fran&ccedil;oise Dabadie, sa femme      &agrave; Madeleine Garnier, veuve de Pierre Dabadie, 
          </font>
          <font color="#FF0000">
            <font color="#000000">tous      de Cellettes
            </font>
          </font>
          <font color="#000000">, les dits Garnier et Dabadie,      parents de la ditte Dabadie (premi&egrave;re page verte)
          </font>
        </font></li>  <li>R&eacute;silation d'un contrat de vente le 28 septembre 1694 entre Jean     Bareau, marchand du village de Barateau, d'Amb&eacute;rac et Fran&ccedil;ois     Quentin Leclerc, laboureur &agrave; boeufs, Marie Denis, sa femme, du village     de la Sangle, de La Chapelle et vente d'une grange par les dits Quentin et      Denis &agrave; Jean Denis, laboureur &agrave; bras, de Cellettes</li>  <li>Proc&egrave;s verbal le 20 novembre 1694 pour Marie Grimouard, veuve de     Philippe Dulaux, chevalier seigneur du Chanbon, de Cellettes de la charpente      de la maison noble</li>  <li>Ferme le 27 mars 1695 par Marc Guyot, &eacute;cuyer sieur de la Motte de     Villognon d'Alloue &agrave; Louis Parteau l'a&icirc;n&eacute;, laboureur &agrave;      boeufs, Marie Rochier, sa femme, de Villognon</li>  <li>Accord le 26 mai 1695 entre Fran&ccedil;ois Guillen dit Perdriau, marchand,     de Vadalle, Fran&ccedil;ois Guillen dit La Brouhe, Marie De Clerfeuille, sa     femme, du village de la Grange, d'Aussac, Fran&ccedil;oise Sauvage, veuve     de Berthom&eacute; Peillard, pour ses enfants Pierre Peillard, laboureur &agrave;     boeufs et Fran&ccedil;oise Peillard, veuve de Pierre Regnon, du village du      Chesnet, de St-Ciers &agrave; propos d'arr&eacute;rages de rentes</li>  <li>Procuration le 26 mai 1695 par Guillaume Navarre, Jean Vigier, Jean Brousse,     Fran&ccedil;ois Penichon, Jean Guillen dit La Bont&eacute;, Fran&ccedil;ois     Guillen dit La Pointe, Jean Sauvage, fils de Pierre, Jean et Olivier Roux?,     Fran&ccedil;ois Brousse, fils de Pierre, tous laboureurs de Vadalle &agrave;     Fran&ccedil;ois Guillen dit Perdriau, marchand, de Vadalle suite &agrave;      un proc&egrave;s avec Jean Beandel</li>  <li>Proc&egrave;s verbal le 6 ao&ucirc;t 1695 pour Michel Bouhier, mar&eacute;chal,     Jacques Lurand, marchand, de Villognon des bl&eacute;s coup&eacute;s dans      une m&eacute;tairie par Jean Petit, marchand, d'Angoul&ecirc;me</li>  <li>Arrentement le 26 novembre 1695 d'une pi&egrave;ce de terre par Pierre Guillen     dit la Sechi&egrave;re, marchand &agrave;Jean Guillen dit La Bont&eacute;,      marchand, tous de Vadalle</li>  <li>Vente le 11 d&eacute;cembre 1695 d'une pi&egrave;ce de terre par Pierre     Thinon, greffier de Montignac, mari de Catherine Loysel, du village de la     Fich&egrave;re, Fran&ccedil;oise Loysel, veuve de Pierre Boylevin, huissier     audiencier, de St-Amant de Boixe, Jean Bouniceau, huissier audiencier pour     Marie Boylevin, sa femme, de St-Amant de Boixe &agrave; donataires de Jeanne     Loysel, femme en secondes noces de Pierre Bauny &agrave; Toussaint Girault,      marchand, du bout des ponts? de Mansle, de Fontclaireau</li>  <li>Inventaire le 15 avril 1696 des biens de feu Louis Micheau, notaire, pour     Louis Micheau dit Des Versaines, Louis Micheau dit Boyfort, laboureurs &agrave;     boeufs, Louis Journaud, fils de Pierre, laboureur &agrave; boeufs, Jacquette     Micheau, sa femme, et Marie Micheau, les dits Micheau enfants du dit feu Louis      et d&eacute;funte Jeanne Chabot</li>  <li>Vente le 1er mai 1696 d'une pi&egrave;ce de terre par Fran&ccedil;ois, Jacques     et Louis Bouhier, laboureurs, Charles Guerin, laboureur, Hilaire Bouhier,     sa femme, les dits Bouhier, enfants de d&eacute;funt Louis Bouhier, fils de     d&eacute;funts Jozias Bouhier et Marguerite Seudre, de Xambes &agrave; Daniel      Seguin, sieur de la Vervante, de Montignac</li>  <li>Proc&egrave;s verval le 8 juin 1696 des d&eacute;gradations d'une maison     de Vervant pour Perrette Vauvert, veuve de Jean Thinon, avocat au parlement      contre Pierre Thinon, sieur des Voustes, son fils</li>  <li>Proc&egrave;s verbal le 23 d&eacute;cembre 1696 de l'&eacute;tat du prieur&eacute;     pour Jean DeSaljuzan, pr&ecirc;tre de Vervant, et Michel Bouhier, mar&eacute;chal,      de Villognon, fermier du prieur&eacute;</li>  <li>Partage le 10 f&eacute;vrier 1697 entre Michel Marquet, laboureur &agrave;     boeufs, Jeanne Rougier, sa femme, Marie et Jeanne Marquet, ses filles et Jean     Marquet, h&eacute;ritier de d&eacute;funte Marguerite Martin, sa m&egrave;re?,     Jean Martin, son oncle, Antoine Marquet, son fr&egrave;re, Marie Pouillat      sa femme, tous du village de l'Age, de Puyr&eacute;aux</li>  <li>Vente le 10 f&eacute;vrier 1697 de tous les biens &agrave; Vervant de Pierre     Surget, gallochier et Louise Rouhet, sa femme &agrave; Georges Gratreau, sieur     de St-Georges, pour Fran&ccedil;oise Bouhier, veuve de Amant Gratreau, sieur      de Vervant, sa m&egrave;re, tous de Vervant</li>  <li>Vente le 24 mars 1697 d'une pi&egrave;ce de jardin par Anne Seguin, veuve     de Samuel Dubois, sieur de la Bernarde, du village de la Bernarde, de St-Amant     de Boixe &agrave; Marie Gratreau, veuve de Jean Guignier, huissier, de St-Amant      de Boixe</li>  <li>Arrentement le 28 avril 1697 d'une maison par Philippe Maulde, sieur de     Puymenier, h&eacute;ritier de Michel Maulde, avocat au parlement, juge s&eacute;n&eacute;chal,     r&eacute;side au village de Puymeunier, d'Anais &agrave; Charles Gratereau,      sieur des Ousches, garde de la for&ecirc;t de la Boixe, de Xambes</li>  <li>Proc&egrave;s verbal le 6 mai 1697 des lieux arrent&eacute;s par Philippe     Maulde, sieur de Puymenier, du village de Puymeunier, d'Anais,h&eacute;ritier     de Michel Maulde, avocat au parlement &agrave; Charles Gratereau, sieur des      Ousches, garde de la for&ecirc;t de la Boixe, de Xambes</li>  <li>Arrentement le 17 mai 1697 par Marie Gratreau, veuve de Jean Guignier, de     St-Amant de Boixe &agrave; Fran&ccedil;oise Bouhier, veuve d'Amant Gratereau,      capitaine du ch&acirc;teau de Montignac, de Vervant, sa m&egrave;re</li>  <li>Sommation le 1er juillet 1697 de proc&eacute;der &agrave; la r&eacute;fection     de murailles par Perrette Vauvert, veuve de Jean Thinon, avocat au parlement,     pour elle et Jean Thinon, avocat au parlement, son fils &agrave; Fran&ccedil;oise      Bouhier, veuve d'Amant Gratereau</li>  <li>Partage le 20 juillet 1697 entre Fran&ccedil;oise Redont, veuve de Fran&ccedil;ois     Quantin dit Bourg?, Jacques Bouhier, laboureur, Catherine Quentin, fille du      dit Fran&ccedil;ois et de la dite Redont, sa femme, tous de Vervant</li>  <li>M&eacute;tairie le 11 avril 1698 par Fran&ccedil;ois Derome, sieur du dit     nom, de Cellettes et Anne et Marguerite Briand, ses belles-soeurs, du village     du Fouilloux, de la Chapelle &agrave; Louis Quentin, laboureur &agrave; boeufs      et Fran&ccedil;oise Chaussepied, sa femme, de Xambes</li>  <li>Procuration le 29 septembre 1698 de Marie Coulon, veuve de Guillaume Dallancon     Nollaire, du village Touchebaud, de Messeux &agrave; Jean Dallancon, sieur     du Vignaud, son fils, marchand, de Nanteuil en vue du mariage d'Andr&eacute;     Dallancon, sieur des Ousches avec Marie Tiffon, fille de feu Jacques Tiffon      et Jeanne Bonnet</li>  <li>Quittance le 19 octobre 1698 par Jacques Bouhier, laboureur &agrave; boeufs,     Marie Gros, sa femme, Pierre Bouhier leur fils, laboureur, Marie Bouhier sa     femme, tous de Coulonges &agrave; Pierre et Nicolas Bouhier, laboureur &agrave;      boeufs, fr&egrave;res de la dite Marie Bouhier, de Coulonges</li>  <li>Vente le 1er f&eacute;vrier 1699 d'une pi&egrave;ce de pr&eacute; par Charles     Gratreau, sieur des Ouches, garde de monseigneur le duc de la Rochefoucauld     &agrave; Jean Amiaud, notaire de la baronnie de Montignac, de St-Amant de      Boixe </li>  <li>Vente le 1er f&eacute;vrier 1699 d'une pi&egrave;ce de terre par Cl&eacute;ment     Gratreau, praticien, de Coulonges, Pierre Bonnet, marchand, mari de Fran&ccedil;oise     Gratreau, de Villognon, Jacques Bonnet, marchand, mari de Marie Gratreau,     des moulins de Bissac et Jacques Nadaud, marchand, veuf de Nicole Gratreau,     de Villejoubert, les dits Gratreau, tous enfants de d&eacute;funt Louis Gratreau,     sieur de la Ronze &agrave; Marie Gratreau, veuve de Jean Guignier, de St-Amant      de Boixe</li>  <li>Vente le 24 f&eacute;vrier 1699 d'une pi&egrave;ce de pr&eacute; par Marie     Bouhier, femme de Nicolas Poirier, laboureur &agrave; boeufs, de Jauldes,     autre Marie Bouhier, veuve de L&eacute;onnet Joubert,du village du Bois, de     Jauldes et Marguerite Bouhier, femme de Gilles Sourrut?, du village de la     Maladrie, de Rivi&egrave;res &agrave; Charles Gratreau, sieur des Ouches,      de Xambes</li>  <li>Arrentement le 8 janvier 1700 par Pierre Journaud, marchand, de Torsac Villebois,     &agrave; Louis Journaud, son fr&egrave;re, laboureur &agrave; boeufs de Villognon,     tous deux enfants de d&eacute;funts Gaston Journaud et Catherine Berard, des      biens du dit Pierre &agrave; Villognon</li>  <li>Vente le 19 janvier 1700 des h&eacute;ritages de d&eacute;funts Antoine     Guesdon et Juine Bernard par Antoine Piet, marchand et Marguerite Guindon,     sa femme, du village d'Echoisy, de Cellettes &agrave; Fran&ccedil;ois De Clerfeuille,     laboureur &agrave; boeufs et Marie Guesdon, sa femme, de Nanclars, les dites      Guesdon filles des dits d&eacute;funts</li>  <li>Vente le 25 mai 1700 d'une pi&egrave;ce de terre par Pierre Guillen dit     la Sechi&egrave;re, marchand &agrave; Fran&ccedil;ois Guillen, fils de feu      Jean, dit La Pointe, laboureur &agrave; boeufs, tous de Vadalle</li>  <li>Vente le 16 octobre 1700 des biens de d&eacute;funt Antoine Journaud par     Nicolas Journaud, laboureur &agrave; bras et Antoinette L&eacute;gier, sa     femme, de Lux&eacute; &agrave; Pierre Journaud, fils de Pierre, laboureur      de Villognon, le dit Antoine, fils des dits Journaud et L&eacute;gier</li>  <li>Inventaire le 2 d&eacute;cembre 1700 des biens de d&eacute;funt Jean Lurat,     veuf en premi&egrave;res noces de Marie Dubois pour sa veuve Claude Pineau,     de Vouharte, ses enfants Marie et autre Marie Lurat, filles de la ditte Dubois,      Jacques et Jeanne Lurat, enfants de la ditte Pineau</li>  <li>Quittance le 24 janvier 1701 par Pierre Lotte, tailleur d'habits, Marguerite     Mottaix, sa femme &agrave; Vincent Mottaix, leur p&egrave;re et beau-p&egrave;re,      mari de Marie Marchand, tous de Cellettes</li>  <li>Partage le 27 janvier 1701 entre Fran&ccedil;ois Quantin dit Quantin, laboureur     &agrave; boeufs, Fran&ccedil;ois Sudre, laboureur &agrave; boeufs, Marguerite     Quantin, sa femme, tous de Vervant et Pierre Quantin, laboureur &agrave; bras,     de Coulonges, les dits Marguerite et Pierre, fils du dit Fran&ccedil;ois et      d&eacute;funte Louise Piat, sa premi&egrave;re femme</li>  <li>Proc&egrave;s verbal le 4 mars 1701 de la succession de Louis Micheau, notaire      pour Pierre Sauvet, laboureur &agrave; bras</li>  <li>Echange le 15 mai 1701 entre Louis Parteau, tailleur d'habits et Louis Rochier,      ma&ccedil;on, tous les deux de Villognon</li>  <li>Partage le 4 juillet 1701 entre Catherine Guerroy, veuve de Jean Goumard     dit Virondeau, Fran&ccedil;ois Morice, laboureur &agrave; bras, Marthe Grati&eacute;,     sa femme, Jean Goumard l'a&icirc;n&eacute;, Jean Goumard le jeune, fr&egrave;res,     laboureur &agrave; bras, Augustin Bouquinet, laboureur &agrave; bras, Marie     Goumard sa femme, Pierre Estachon, laboureur &agrave; bras, Marguerite Grati&eacute;,     sa femme, tous de Cellettes except&eacute; Augustin Bouquinet, du village      de la Fich&egrave;re, de St-Amant de Boixe</li>  <li>Vente le 14 f&eacute;vrier 1702 d'une pi&egrave;ce de chenevaud par H&eacute;lie      Journaud, texier, &agrave; Pierre Bonnet, marchand, tous de Villognon</li>  <li>Accord le 17 ao&ucirc;t 1703 entre Fran&ccedil;ois Guillen dit La Pointe,     marchand, Fran&ccedil;oise Loiseau, sa femme et Pierre Guillen dit La Pointe,      Catherine Loiseau, sa femme, tous de Vadalle, afin de dissoudre leur communaut&eacute;</li>  <li>Arrentement le 31 decembre 1703 par Jean Mignot, tisserand &agrave; Fran&ccedil;ois     Ravon le Jeune, laboureur &agrave; bras, tous de St-Amant de Boixe d'une pi&egrave;ce      de vigne</li><li>Inventaire le 7 f&eacute;vrier 1704 des biens de d&eacute;funt Antoine Lotte      dit La Ligne pour Marie Peraud, sa veuve, de Cellettes</li>  <li>Partage le 10 f&eacute;vrier 1704 des biens communs appartenant &agrave;     H&eacute;lie Journaud, laboureur et d&eacute;funte Marie Brisson, sa femme     entre Nicolas Journaud, laboureur, son fils, Andr&eacute;e Bernard, sa femme     de Villognon et Pierre Noblet, charpentier, veuf de Gabrielle Journaud, de      Lanville et ses filles Fran&ccedil;oise et Jeanne Noblet</li>  <li>Partage le 16 f&eacute;vrier 1704 des biens de d&eacute;funts Fran&ccedil;ois     Couraud et Louise Robin entre Antoine Couraud, laboureur, Pierre Brun, laboureur,      Ozanne Couraud, de Maine de Boixe, les dits Couraud, enfants des d&eacute;funts</li>  <li>Vente le 25 f&eacute;vrier 1704 par Louis Rochier, ma&ccedil;on, Jeanne     Micheau sa femme &agrave; Michel et Nicolas Condat, fr&egrave;res, laboureurs,      tous de Villognon de trois petites pi&egrave;ces de terre</li>  <li>Don le 3 mars 1704 entre H&eacute;lie Saboureau, laboureur &agrave; bras      et Antoinette Billochon, sa femme, de Lux&eacute;</li>  <li>M&eacute;tairie le 10 avril 1704 par Pierre Lebesgue, procureur fiscal,     de Vouharte &agrave; Michel Bounemain, Fran&ccedil;oise Bineau, sa femme,     Fran&ccedil;oise Bounemain, laboureur &agrave; bras, Genevi&egrave;ve Raveau,      sa femme, tous de Vouharte</li>  <li>Ferme le 13 avril 1704 par Jean Laydet, garde de la plaine de Vervant, de     Villognon pour Marc Guyot, &eacute;cuyer sieur de La Motte &agrave; Louis     Desherces, laboureur, Jeanne Martaguet et Pierre Desherces, laboureur, Marie      Martaguet, sa femme, tous de Villognon</li>  <li>Cession le 8 mai 1704 par Anne Peraud, fille de d&eacute;funts Jean Peraud     dit Vallon, laboureur et Jeanne Goumard, &agrave; Jean Peraud dit Goumard,     son fr&egrave;re germain, laboureur &agrave; boeufs et Elisabeth Bruneau,      sa femme, de tous ses droits dans les successions des dits Peraud et Goumard</li>  <li>Ferme le 1er juin 1704 par Benjamin Derome, marchand &agrave; Jean Goumard      l'a&icirc;n&eacute;, laboureur, Charlotte Bouquinet, sa femme, tous de Cellettes</li>  <li>Vente le 6 juillet 1704 par Jean Poyrier l'a&icirc;n&eacute;, laboureur     &agrave; bras, de Cellettes &agrave; Antoine Turcat, laboureur &agrave; bras,      de Cellettes</li>  <li>Partage le 23 novembre 1704 des biens de d&eacute;funt Pierre Guillen entre     Jacques Pradeau, laboureur &agrave; bras, Marie Guillen sa femme, Amant Genouill&eacute;e,      charpentier, Fran&ccedil;oise Guillen, tous de Vadalle</li>  <li>Partage le 30 novembre 1704 des biens de d&eacute;funts de Fran&ccedil;ois     Raveau et Fran&ccedil;oise Charrousseau entre Pierre Raveau, laboureur &agrave;     bras et Fran&ccedil;ois Bounemain, laboureur &agrave; boeufs, Genevi&egrave;ve      Raveau, sa femme, les dits Raveau, enfants des dits Raveau et Charrousseau</li>  <li>Partage le 6 novembre 1704 entre Pierre Nadaud, laboureur, Catherine Limouzin,     sa femme, veuve de Fran&ccedil;ois Denis, son second mari, de Coulonges et     Allement et Louis Denis, fr&egrave;res, laboureurs &agrave; bras, fr&egrave;res      du dit feu Denis, de Cellettes</li>  <li>Dismission le 1er d&eacute;cembre 1704 par Louis Bonnet, marchand, veuf     de Madeleine Guyonnet &agrave; Fran&ccedil;ois Bonnet, marchand, Georgette     Vachier sa femme, affili&eacute;e &agrave; la place de Madeleine Bonnet, femme      de Jean Vachier le jeune, le dit Fran&ccedil;ois, fils de Louis, tous d'Aussac</li>  <li>Compte le 8 janvier 1705 entre Jean et Jacques Guimard, fr&egrave;res, laboureurs,     du Maine de Boixe et Michel Balloteau, laboureur &agrave; bras, de Vouharte,     Jeanne Balloteau, femme de Fran&ccedil;ois Fouchereau, de Mansle, les dits      Balloteau, fils de feu Philippe Balloteau</li>  <li>Partage le 7 f&eacute;vrier 1705 des biens de d&eacute;funts Guillaume Denis,     Catherine Duzais sa femme entre Allement et Louis Denis, fr&egrave;res, laboureurs     de Cellettes, Catherine Limousin, veuve de Fran&ccedil;ois Denis, leur soeur,     remari&eacute;e avec Pierre Nadaud, de Coulonges, tous les dits Denis enfants     des dits Denis et Duzais. Catherine Limousin est m&egrave;re de Marie, Marthe      et Antoinette Denis</li>  <li>Partage le 8 f&eacute;vrier 1705 des biens de feue Marthe Moreau entre Louis     Bordet, laboureur, sa femme Marie Chaillot et Louis Lambert, laboureur, tous     du Maine de Boixe, les dits Lambert et Chaillot, fr&egrave;re et soeur ut&eacute;rins,      fils et fille de Marthe Moreau</li>  <li>Compte le 1er mars 1705 entre Fran&ccedil;ois Quantain, fils de feu Antoine,     laboureur &agrave; boeufs, de La Chapelle et Jacques Birot, Marie Quantain,      sa femme, son gendre et sa fille, de Vervant</li>  <li>Echange le 12 mars 1705 entre Louis Parteau le Jeune, tailleur d'habits      et Jean Journaud, laboureur &agrave; boeufs, fils de feu Pierre, tous de Villognon</li>  <li>Accord le 29 mars 1705 entre Jean Godichon, laboureur &agrave; boeufs pour     Pierre Godichon et Jacques Godichon, mari de Jacquette Coupprie, ses enfants     de feue L&eacute;onarde Chanbouneau, tous de Xambes et Louis Godichon, laboureur,      de Champniers, mari de Paironne Fontaneau</li>  <li>Accord le 1er mai 1705 entre Antoine Degail, praticien et Antoine Gros,     laboureur &agrave; boeufs, fils de feu Pierre dit Chapelier, tous les deux      de Coulonges suite &agrave; un diff&eacute;rent sur des b&acirc;timents</li>  <li>Partage le 11 mai 1705 des biens de d&eacute;funte Marguerite Fouillade     entre Jean Guymard, laboureur &agrave; boeufs, Jeanne Pistre, sa femme, Jacques     Guymard, laboureur &agrave; boeufs, Jeanne Balloteau, sa femme, tous du Maine      de Boixe, les dits Guymard, enfants de la ditte Fouillade</li>  <li>Partage le 14 mai 1705 des biens entre Louis Roullet, laboureur &agrave;     boeufs, Anne Couraud, sa femme et Fran&ccedil;ois Roullet, laboureur &agrave;     boeufs, leur fils, tous de Maine de Boixe en vue de la dissolution de leur      communaut&eacute; </li>  <li>Ferme le 11 juin 1705 par Fran&ccedil;ois Raymond, &eacute;cuyer sieur des     Moli&egrave;res, Marie Raymond, sa soeur &agrave; Louis Rochier, ma&ccedil;on,      Jeanne Micheau, sa femme, tous de Villognon</li>  <li>Vente le 2 ao&ucirc;t 1705 par Louis Pichon l'a&icirc;n&eacute;, Marguerite     Boissot, sa femme, Louis Pichon, leur fils, Marie Bouyer, sa femme &agrave;      Charles Gratereau, sieur des Ousches, tous de Xambes</li>  <li>Partage le 19 ao&ucirc;t 1705 entre Jean Delage, laboureur &agrave; boeufs,     Marie Combaud sa femme, Giraud Peraud, laboureur &agrave; boeufs, Marie Delage     la Jeune, sa femme, fille des dits Delage et Combaud, de Puyr&eacute;aux.     Est mentionn&eacute;e Marie Delage l'a&icirc;n&eacute;e, fille des dits Delage      et Combaud, femme de L&eacute;on Perrot</li>  <li>PV le 18 septembre 1705 pour Jean Laydet, garde de monseigneur, de Villognon,     fermier de Marc Guyot, sieur de la Motte, des d&eacute;gats dans une pi&egrave;ce      de terre</li>  <li>Accord le 23 novembre 1705 entre Jean Godichon, laboureur &agrave; boeufs     pour Pierre et Jacques Godichon, ses fils de feue L&eacute;onarde Chanbouneau     avec Catherine Godichon, veuve de Gaspard Menacheau, h&eacute;riti&egrave;re      de la dite L&eacute;onarde Chambouneau, sa m&egrave;re, tous de Xambes</li>  <li>Accord le 28 d&eacute;cembre 1705 entre Antoine Martinier, Pierre Martinier,     son fils, Jeanne Quantin, femme de ce dernier, Catherine Martinier, fille     du dit Antoine, Fran&ccedil;ois Martinier, aussi son fils a&icirc;n&eacute;,      tous enfants de Catherine Cl&eacute;ment de Vervant</li>  <li>PV le 28 d&eacute;cembre 1705 pour Antoine Piat, marchand, de Cellettes      d'une maison aquise de Jean Delafont</li>  <li>Quittance le 4 f&eacute;vrier 1706 par Jean Guillen dit Giraudeau, laboureur     &agrave; boeufs, d'Aussac &agrave; Jean Aubin, laboureur &agrave; boeufs,      mari de Simone Plantivet, de Vars</li>  <li>Vente le 4 f&eacute;vrier 1706 par Fran&ccedil;ois Peraud le jeune dit le     Vallon, laboureur &agrave; bras, de Cellettes &agrave; Jean Peraud dit Le      Fort, laboureur &agrave; bras, son fils, de Lux&eacute;, d'une maison</li>  <li>Partage le 5 mars 1706 des biens de d&eacute;funts Jean Baud et Jeanne Boisson     entre Pierre Boisson, p&ecirc;cheur, Jean Beau, fils de feu Pierre Beau, Jean     Beau, son fr&egrave;re, Fran&ccedil;oise Boisson, veuve de Pierre Sudre?,     de Vouharte, Jeanne Boisson, veuve de Jean Tiffon de Coulonges, les dits Baud,     h&eacute;ritiers de d&eacute;funts Jean et Pierre Beau, leurs cousins germains,     h&eacute;ritiers de d&eacute;funts Jacques Beaud, leur cousin germain, Perre      Simon?, laboureur, veuve de feu Jacques Beau de Vouharte</li>  <li>Vente le 30 mai 1706 par Jean Vigier, laboureur &agrave; bras, &agrave;      Jean Guillen dit la Bont&eacute;, sargier, tous de Vadalle
        <br>  </li>  <li>Vente le 6 juin 1706 par Jean et Vincent Guillen, p&egrave;re et fils, laboureur     &agrave; boeufs &agrave; Philippe et Fran&ccedil;ois Raymond, laboureurs &agrave;     bras, fils de d&eacute;funts Jean Raymond et Simone Guillen, les dits Guillen,      oncle et cousin germain des dits Raymond</li>  <li>Reconnaissance le 1er ao&ucirc;t 1706 par Jean Peraud dit Goumard, laboureur     &agrave; boeufs, Elisabeth Bruneau, sa femme, le dit Jean, fils de d&eacute;funt     Jean Peraud, lui-m&ecirc;me fils de d&eacute;funt Arnaud Peraud &agrave; Fran&ccedil;ois     Derome, marchand, cessionnaire de H&eacute;liot Quitton, procureur du roi,      tous de Cellettes except&eacute; le dit Quitton</li>  <li>D&eacute;claration le 19 septembre 1706 par Michel Turlais, sindicq de la     paroisse de Vouharte &agrave; ses habitants en vue de la nomination des collecteurs      de taille</li>  <li>Cession le 2 janvier 1707 par Jean Pesrault, fils de Jean dit La Plante,     Marie Marot, sa femme de Cellettes &agrave; &agrave; Fran&ccedil;ois Maloueire,     laboureur &agrave; boeufs, Jacquette Marot, sa femme, de Nanclars des droits     de la dite Marie dans la succession de d&eacute;funts Fran&ccedil;ois Marot     et Madeleine Renaud, ses p&egrave;re et m&egrave;re (manque la derni&egrave;re      page) </li>  <li>Partage le 15 f&eacute;vrier 1707 des biens entre Fran&ccedil;ois Rollet,     laboureur &agrave; bras, Jeanne Buerne, sa femme, Jean Rollet, voiturier,     fils des pr&eacute;c&eacute;dents, Jacquette Regnier, sa femme, Pierre Rollet,     laboureur, fils des dits Rollet et Buerne, Marie Masdigon, sa femme, tous      de Villejoubert en vue de dissoudre leur communaut&eacute;</li>  <li>Reconnaissance le 9 mars 1707 par Antoine Bernard, laboureur &agrave; boeufs,     Fran&ccedil;ois Bernard, son fils, laboureur &agrave; boeufs, Marie Guillen      sa femme &agrave; Jean Guillen dit La Bont&eacute;, sargier, tous d'Aussac</li>  <li>Reconnaissance le 9 mars 1707 par Jean Guillen dit La Bont&eacute;, sargier,     Marie Tamplard, sa femme, Jean Guillen, laboureur &agrave; bras, son fils,     Jeanne Navarre, sa femme &agrave; Laurent Pere, ma&ccedil;on et Fran&ccedil;oise      Navarre tous du village de Vadalle</li>  <li>Partage le 8 mai 1707 des biens de feu Gaspard Moreau entre sa veuve Jacquette     Aubouin, Pierre Moreau son fils, Jean Soudiere, Marie Moreau, sa femme, fr&egrave;re      du dit Pierre Moreau, tous de Vouharte</li>  <li>Reconnaissance du 16 mai 1707 par Pierre Thinon, sieur des Voustes, de Vervant     &agrave; Jean Boisseau, sieur de Beaupr&eacute;, archer de la mar&eacute;chauss&eacute;e      d'Angoumois, de Xambes</li>  <li>Dismission le 10 juillet 1707 par Fran&ccedil;oise Martin, veuve de Jean     Paziot dit Vervant, &agrave; Raymond Martin, son fr&egrave;re, Marie Martin,     veuve de Jean Fouillade, Pierre De La Courlye, laboureur &agrave; bras, Catherine     Fouillade sa femme, fille de feu Jean Fouillade et la ditte Marie Martin,      tous d'Aussac</li>  <li>Vente aux ench&egrave;res le 15 juillet 1707 par Jean Guillen dit La Bont&eacute;,     aux droits et Marie et Suzanne Guillen, Pierre Guillen, marchand, son fr&egrave;re,     d'Aussac, Antoine Bernard, laboureur &agrave; boeufs, Marie Guillen, d'Aussac     des biens de Jean Guillen dit Petit Jean et Madeleine Nouveau leur p&egrave;re      et m&egrave;re</li>  <li>D&eacute;claration le 4 septembre 1707 par Fran&ccedil;ois Bouhier, laboureur     &agrave; boeufs et fabriqueur de l'&eacute;glise de Villognon &agrave; ses      habitations en vue d'avoir des osties</li>  <li>Partage le 11 septembre 1707 des biens de d&eacute;funt Louis Bernardeau     dit Cadet entre Jacques Bernardeau, son fils et de feue Jeanne Geoffroy, laboureur     &agrave; boeufs, Marie Chaussepied, sa femme, Jean Bernardeau le jeune dit     Cablant, laboureur &agrave; bras, Louis Bernardeau, laboureur &agrave; bras,     tous de Villognon, les dits Jean et Louis Bernardeau, fils du dit feu et de      Ren&eacute;e Brung sa seconde femme </li>  <li>Accord le 19 septembre 1707 entre Jean Nadaud l'a&icirc;n&eacute;, fils     de feu Jean, laboureur &agrave; bras, Jeanne Nadaud sa fille et Jean Bernardeau     Le Jeune dit Cablant, tous de Villognon suite &agrave; &agrave; la grossesse      de la dite Jeanne caus&eacute;e par le dit Jean Bernardeau</li>  <li>Inventaire le 12 d&eacute;cembre 1707 des biens de d&eacute;funt Louis Rolland      pour sa veuve Marie Cousseau, Antoine Rolland, son fils tous du village d'Aussac</li>  <li>Partage le 10 juillet 1707 par Fran&ccedil;oise Martain, veuve de Jean Paziot,     de Vervant de ses biens entre Raymond Martain, laboureur, son fr&egrave;re     Marie Martain, veuve de Jean Fouillade, Pierre Delacourlye, laboureur &agrave;     bras, Catherine Fouillade, sa femme, fille dit Fouillade et de la dite Martain,      tous d'Aussac</li>  <li>Partage le 14 d&eacute;cembre 1707 des biens de d&eacute;funt Pierre Large     entre Jeanne Simon sa veuve, Charles Large, tailleur d'habits, Pierre Large,     laboureur &agrave; bras, ses enfants et Pierre Raveau, laboureur &agrave;      bras, Jacquette Large sa femme, tous de Vouharte</li>  <li>Partage le 23 janvier 1708 des biens de d&eacute;funts Guillaume Couraud     et Marie Bordet entre Pierre Arnaud, laboureur &agrave; boeufs et ma&ccedil;on,     Marie Couraud, sa femme, H&eacute;lie Arnaud, laboureur &agrave; boeufs et     ma&ccedil;on, Fran&ccedil;oise Couraud sa femme, tous de Maine de Boixe, les      dites Marie et Fran&ccedil;oise Couraud, filles des dits Couraud et Bordet</li>  <li>Partage le 16 avril 1708 des biens de feu Pierre Bouhier mar&eacute;chal     entre ses fils Etienne, Jean Bouhier de Xambes et Pierre Bouhier, aussi son      fils, de Vouharte</li>  <li>Rente le 20 avril 1708 par Etienne Bouhier le jeune, fils d'autre Etienne,     laboureur &agrave; boeufs &agrave; L&eacute;onard Ligoure, pr&ecirc;tre, tous      d'Aussac </li>  <li>Accord le 18 octobre 1708 entre Jean Tourbourau, laboureur &agrave; bras,     Jeanne Rouhet, sa femme de Cellettes et Jean Bouquinet le Jeune, laboureur     &agrave; bras, Marie Tourboureau, sa femme, du Maine de Boixe, les dites Tourboureau,      filles de d&eacute;funts Jean Tourbouraud et Jeanne Rouhet</li>  <li>PV le 19 novembre 1708 pour Marc Guyot, chevalier seigneur de Villognon,     Lavergne, Lalande et autres places des biens de ses fermiers Jean Laydet et      Marie Bouhier, sa femme, de Villognon</li>  <li>Vente le 31 d&eacute;cembre 1708 par Jean Nadaud, fils de feu Jean, laboureur      &agrave; Louis Malmanche, tous de Lux&eacute;</li>  <li>Inventaire le 5 f&eacute;vrier 1709 des meubles de Charles Gratereau, sieur     des Ouches, garde de la for&ecirc;t de la Boixe, veuf de Marie Paillier pour      dissoudre sa communaut&eacute; avec ses fils, Robert et Louis Gratereau </li>  <li>Vente le 19 mars 1709 par Louise Barradeau, veuve d'Etienne Seguin &agrave;      Jacques Quantin, laboureur &agrave; boeufs, tous de Vouharte, d'une maison</li>  <li>Partage le 30 juin 1709 des biens de d&eacute;funts Fran&ccedil;ois Thorin     dit la Roze et Jeanne Martaguet entre Louis Thorin, laboureur &agrave; boeufs,     Pierre Barouyers, laboureurs &agrave; bras, Marie Thorin, sa femme, Marc Perault,     laboureur &agrave; bras, Marie Journaud, sa femme, veuve de Jean Thorin, m&egrave;re      de Fran&ccedil;ois et Ren&eacute;e Thorin, ses enfants, tous de Villognon</li>  <li>Accord le 5 juillet 1709 entre Pierre Combaud, laboureur &agrave; boeufs,     de Fouqueure, h&eacute;ritier d'Antoine Combaud, son neveu, fils de Jean et      Marie Piet, veuve du dit Jean et m&egrave;re du dit Antoine, de Cellettes</li>  <li>Partage le 24 juin 1709 des biens de Jeanne Boissot, veuve de Jean Tiffon     entre ses enfants Pierre et Philippe Tiffon, laboureur &agrave; bras, Jean      Bouquet, gallochier, Jeanne Tiffon, sa femme, tous de Coulonges</li>  <li>Partage le 15 juillet 1709 des biens de d&eacute;funts de d&eacute;funts     Guillaume Delagreli&egrave;re et Marie Deleschelle entre Louis Denis, laboureur     &agrave; boeufs, Charlotte Delagreli&egrave;re, sa femme, Antoine Cl&eacute;ment     l'a&icirc;n&eacute;, Antoine Cl&eacute;ment le Jeune, Marie Delagreli&egrave;re,     sa femme, tous de Cellettes, les dites Delagreli&egrave;re filles des dits      Delagreli&egrave;re et Deleschelle</li>  <li>PV le 30 ao&ucirc;t 1709 pour Louis Quentin, laboureur &agrave; boeufs,     Fran&ccedil;oise Chaussepied, sa femme, veuve de Pierre Amiaud, de Xambes      d'une pi&egrave;ce de terre</li>  <li>Accord le 11 ao&ucirc;t 1709 entre Fran&ccedil;ois Condat, laboureur &agrave;     bras, Jean Nadaud, laboureur &agrave; bras, Fran&ccedil;oise Condat sa femme,     les dits Fran&ccedil;ois et Fran&ccedil;oise fr&egrave;re et soeur, h&eacute;ritiers     de Ren&eacute;e Condat leur soeur, veuve de Jean Gibertaud, tous de Villognon      avec Marthe Gueroy, h&eacute;riti&egrave;re de la dite Ren&eacute;, de Cellettes</li>  <li>Renonciation le 14 octobre 1709 de la succession de Madeleine Grassin par     Jean Marquet, laboureur &agrave; boeufs et Marie Pouillat, sa femme, de Puyr&eacute;aux     &agrave; Pierre Pouillat, laboureur &agrave; boeufs, Berthoum&eacute; Biais,     son beau-fr&egrave;re, Elisabeth Pouillat sa soeur, les dits Pouillat tous      fr&egrave;res et soeurs et enfants de d&eacute;funte Madeleine Grassin </li>  <li>Accord le 30 octobre 1709 entre Jean Prevost, marchand et David Duqueroux,     ma&ccedil;on, Anne Prevost, sa femme, les dits Prevots, h&eacute;ritiers de     David Prevost, tailleur d'habits et Christine Denis, leur p&egrave;re et m&egrave;re,      tous de Cellettes suite au d&eacute;c&egrave;s de Christine Denis</li>  <li>Quittance le 15 novembre 1709 par Jean et Pierre Bruneau de Cellettes, Fran&ccedil;oise     Bruneau, Marie Limousin, sa femme, de Mansle &agrave; Fran&ccedil;oise Bruneau,      veuve de Pierre Bruneau, leur m&egrave;re, de Cellettes</li>  <li>Vente le 15 novembre 1709 par Fran&ccedil;ois Mo&iuml;se Chapon, laboureur     &agrave; bras, Jeanne Dusais, sa femme &agrave; Jean Peraud dit La Plante,     laboureur &agrave; boeufs, Antoine Turquat, laboureur &agrave; bras, tous      de Cellettes d'une pi&egrave;ce de terre</li>  <li>Inventaire en 1710 des biens de Louis Gros pour Marguerite Degail, sa veuve,      de Coulonges</li>  <li>Partage le 5 f&eacute;vrier 1710 des biens de d&eacute;funt Charles Foucheraud     et Jeanne Poupard entre Toussaint Foucheraud, laboureur &agrave; boeufs, mari     de Marie Gillet et Guillaume Foucheraud, laboureur &agrave; boeufs, Jeanne     Billochon, sa femme, tous du village de Maine de Boixe. Marie Gillet est affili&eacute;e      en lieu et place d'Elisabeth Foucheraud, femme de Jacques Gillet</li>  <li>Accord le 23 f&eacute;vrier 1710 entre Fran&ccedil;oise Gaschet, veuve de     Pierre Raveau, et Genevi&egrave;ve Raveau, veuve de Pierre Froumentin, tous      de Vouharte</li>  <li>PV le 24 f&eacute;vrier 1710 pour Jacques Rambaud, sieur de Lavaud et Pierre     De Cazemajour, sieur du dit nom de l'&eacute;tait d'une m&eacute;tairie de      Montignac au village du Tapis</li>  <li>PV le 20 juin 1710 pour Pierre Malvaud, laboureur &agrave; bras, de Villejoubert     d'une maison aquise de de Bertrande Augier, veuve d'Antoine Massonnet et Pierre      Massonnet, son fils, de Villejoubert</li>  <li>Inventaire le 1er ao&ucirc;t 1710 des biens de Pierre Guillen dit La Pointe,     marchand voiturier, d'Aussac, veuf de Catherine Loizeau en vue se son mariage     avec Marie Marquet, veuve de Pierre Pappot pour son fils mineur Louis Guillen,      et des biens de la dite Marie Marquet pour son fils Michel Papot</li>  <li>Accord le 10 ao&ucirc;t 1710 entre Pierre Simon le jeune dit Mareuil, laboureur     &agrave; bras, Marie Jolly, sa femme, donataires de Jacques Baud, fils de     Jean Bauld, Jean et autre Jean Bauld, fr&egrave;res enfants de feu Pierre     Baud dit La Routte, Pierre Boisson, p&ecirc;cheur, Jeanne Boisson de Coulonges,     veuve de feu Jean Tiffon, Fran&ccedil;oise Boisson, veuve de feu Pierre Sudre     dit Peronne, les dits Boissons, enfants de feu Jean Boisson et Marguerite      Bauds, tous de Vouharte except&eacute; la ditte Boisson</li>  <li>Partage le 28 ao&ucirc;t 1710 entre Marie Baloteau, veuve de Simon Gr&eacute;silier,     Jean Gresilier, laboureur, Marie Gresilier la jeune, tous de Maine de Boixe     et Jeanne Renon, veuve de Pascal Gresilier, fille de d&eacute;funt Jean Renon     et Marie Boytaud, Antoine Renon, Marie Gresilier l'a&icirc;n&eacute;e, sa      femme, les dits Renon et Gresilier de Champniers</li>  <li>PV le 10 avril 1710 pour Louis Dulaux, &eacute;cuyer chevalier seigneur     Dulaux, de Villognon, fils de d&eacute;funt Isaac Dulaux et Sara Salbert de      deux m&eacute;tairies acquises de son fr&egrave;re Henri Dulaux</li>  <li>Sommation le 5 novembre 1710 par Michel Turlais, laboureur &agrave; boeufs,     collecteur des tailles de Vouharte &agrave; Robert Chaignaud, laboureur &agrave;      bras, de Vouharte et Georgette Sudre sa femme afin qu'ils payent leurs imp&ocirc;ts</li>  <li>PV le 7 f&eacute;vrier 1711 pour Jacques Nadaud, marchand, veuf de Nicole     Gratereau, de Villejoubert contre Antoine Gros, laboureur &agrave; boeufs,      de Coulonges</li>  <li>PV le 18 septembre 1711 pour Pierre Guerin, tailleurs d'habits, de Xambes     des d&eacute;gats caus&eacute;s dans une pi&egrave;ce de terre par une vache     appartenant &agrave; Jean et Pierre Paziot, p&egrave;re et fils, de Vervant      et les boeufs de Nicolas Martaguet de Coulonges</li>  <li>Accord le 28 octobre 1711 entre Antoine Piet, marchand et Jean Piet, laboureur     &agrave; bras, son demi-fr&egrave;re, tous les deux de Cellettes suite &agrave;      une blessure de ce dernier dans la sabli&egrave;re d'Echoisy</li>  <li>Partage le 21 f&eacute;vrier 1712 des biens de d&eacute;funts Robert Perrucaud     et Mathurine Bouhier entre Pierre Perrucaud, laboureur &agrave; bras, leur     fils et Michel Chaignaud, laboureur &agrave; bras, veuf de Fran&ccedil;oise     Perrucaud, h&eacute;riti&egrave;re des dits Perrucaud et Bouhier, tous de      Vouharte </li>  <li>D&eacute;lib&eacute;ration le 10 avril 1712 des habitants de Villognon et      de leur cur&eacute; Bouliere &agrave; propos du plancher de l'&eacute;glise</li>  <li>Partage le 7 janvier 1713 des biens de d&eacute;funts Simon Pouillat et     Madeleine Grassin, et Marguerite Grassin entre Pierre Pouillat, laboureur     &agrave; boeufs, fils des dits Pouillat et Grassin, neveu de la dite Marguerite     Grassin, Marie Biais, sa femme et Barth&eacute;l&eacute;my Biais, laboureur      &agrave; boeufs, veuf d'Elisabeth Pouilllat, fille des dits Pouillat et Grassin</li>  <li>Institution d'h&eacute;ritiers le 7 f&eacute;vrier 1713 par Jean Petis,     marchand, Marguerite Bouniceau, sa femme, de Villejoubert en faveur de leurs     enfants Fran&ccedil;ois, Jean, Pierre, Marguerite, Catherine Petit, femme     de Jean Plantevigne, d'Amb&eacute;rac et Marie Petit, femme d'autre Jean Plantevigne,      d'Amb&eacute;rac </li>  <li>Accord le 1er mai 1713 entre Jacques et Fran&ccedil;ois Quentin, fr&egrave;res,     laboureur &agrave; bras, enfants de Fran&ccedil;ois Quentin dit Bourjois?     , fils de d&eacute;funt Fran&ccedil;ois Quentin dit Bourjois?, Emerie Lurand,     veuve de Jacques Quentin fils du dit d&eacute;funt Fran&ccedil;ois Quentin     dit Bourjois, Jean Lurand dit Martin, Catherine Quentin, sa femme, veuve de     Jacques Bouhier, la dite Quentin, fille du dit d&eacute;funt Fran&ccedil;ois      Quentin, tous de Vervant</li>  <li>Cession le 8 juin 1713 par Jacques Chossepied, laboureur &agrave; bras,     de Xambes, Jacques Bernardaux, son beau-fr&egrave;re, veuf de Marie Chossepied,     les dits Chossepied, enfants de Philippe Chossepied et Marguerite Bouyer,     les dits Chossepied, h&eacute;ritiers de Louis Touchart, fils de d&eacute;funts     Louis Touchard et Marguerite Bouyer, et sa soeur d&eacute;funte Louise Touchard,      de Villognon &agrave; Laurent Touchard, laboureur &agrave; boeufs de Fontenille</li>  <li>Retrocession le 24 f&eacute;vrier 1714 par Fran&ccedil;ois Derome, marchand     &agrave; Jean Peraud, laboureur &agrave; bras, Marguerite Piat sa femme, tous      de Cellettes des droits de succession de Jeanne Bruneau, sa m&egrave;re</li>  <li>Partage le 19 mars 1714 des biens entre Catherine Picart, veuve en secondes     noces de Nicolas Condat, Louis et Nicolas Condat, fils du dit Nicolas et de     d&eacute;funte Louise de Marchou, Marie Journaud, femme du dit Louis Condat,      tous de Coulonges sauf le dit Louis Condat et sa femme, de Villognon</li>  <li>PV le 6 juin 1714 pour Armand Denis, laboureur &agrave; boeufs, des d&eacute;gats     commis dans une pi&egrave;ce de terre lui appartenant contre Jean Garnaud      et Madeleine Ferret</li>  <li>PV le 27 juin 1714 pour Charles Ythier, sieur de la Lazeli&egrave;re?, du      port de la Terne, de Lux&eacute;, de l'&eacute;tat des fractures des portes</li>  <li>Inventaire le 23 juillet 1714 des biens de d&eacute;funt Pierre Duprat Dit     Gallebondaisne, de Xambes pour sa veuve Madeleine Rouyer et ses filles Marie,      Marguerite, autre Marie, Catherine et Madeleine Duprat</li>  <li>Sommation le 2 ao&ucirc;t 1714 par Jean Bonnet, marchand de Villognon suite     &agrave; des d&eacute;gats commis dans une pi&egrave;ce de terre lui appartenant     par une jument et des poulains &agrave; Pierre Barrouyer, &agrave; Louis Micheau      dit Boisfort et les boeufs de Louis Rochier, ma&ccedil;on</li>  <li>Quittance le 21 d&eacute;cembre 1714 par Jean Goumard le Jeune, laboureur     &agrave; boeufs, Marie Clergeau, sa femme &agrave; Pierre Goumard, laboureur     &agrave; boeufs et Elisabeth Corlieu, sa femme, tous de St-Amant de Boixe,      ses parents</li>  <li>PV le 14 janvier 1715 pour Louis Quantin, laboureur &agrave; boeufs, h&eacute;ritier     sous b&eacute;n&eacute;fice d'inventaire de d&eacute;funts Antoine Quantin      dit Lamerrie et Marie Amiaud, ses ayeux, de Xambes</li>  <li>Inventaire le 11 mars 1715 des biens de d&eacute;funt Nicolas Condat, laboureur     &agrave; bras, de Fouqueure, veuf de Fran&ccedil;oise Maignan pour son fr&egrave;re     germain Louis Condat, laboureur &agrave; bras, de Villognon, fils de d&eacute;funt      Nicolas</li>  <li>Accord le 14 mars 1715 entre Pierre Laydet, marchand, de Lanville, veuf     de Marie Billochon, Pierre Laydet, marchand de Villognon, Jean Laydet, tonnelier,     Fran&ccedil;ois Laydet et Marie Laydet, d'Aigre, tous fr&egrave;res et soeurs,      enfants du dit Pierre Laydet et d&eacute;funte Marie Billochon</li>  <li>Inventaire le 29 juillet 1715 des biens de Jean Soudiere, laboureur &agrave;     bras, veuf de Marie Moreau, mari de Marie Lurat, de Vouharte pour ses enfants      Pierre et Jean Soudi&egrave;re</li>  <li>Accord le 29 ao&ucirc;t 1717 entre Pierre Thinon, Michelle Gros sa femme,     Jean Taton, laboureur &agrave; bras, Marguerite Gros, sa femme, tous de Coulonges,      les dites Gros, filles de d&eacute;funts Antoine et Adrienne Gros</li>  <li>Inventaire le 29 avril 1718 des biens de feu Pierre Dubois pour Jean et     Pierre Baud, p&egrave;re et fils, Marie Pineau et Jeanne Dubois, leurs femmes,      la dite Marie Pineau, veuve du dit Pierre Dubois</li>  <li>Compte le 5 juin 1718 entre Pierre Tiffon dit Potaigne, laboureur de Vouharte      et Antoinette Moreau, sa femme, fille d'Antoine Moreau et Marie Panisseau</li>  <li>PV le 14 juin 1718 pour Jacques Pelletan, laboureur &agrave; boeufs, de     St-Amant de Boixe et Pierre Huet dit Buchelle, marchand voiturier de Villejoubert     des d&eacute;gats commis par Jacques Bertrand, laboureur &agrave; bras, de      Vervant sur des terres sasies par Charles Preveraud, sieur de la Boissi&egrave;re</li>  <li>Protestation le 7 juillet 1718 par Pierre Godichon, laboureur de Xambes     contre Pierre Bouhier dit Lab&eacute;gosse afin que ce dernier restitue des      f&egrave;ves et pv des violences de ce dernier</li>  <li>PV le 9 novembre 1718 pour Louis Dulaux, &eacute;cuyer sieur du dit nom,     de Villognon de l'&eacute;tat de fen&ecirc;tre &agrave; cause d'un droit de      servitude pour Louis Journaud, fils de feu Pierre, de Villognon</li>  <li>Partage le 23 mars 1719 entre Jean Guillen, laboureur &agrave; boeufs, dit     Giraudeau, veuf de Marguerite Bonnamy, Vincent Guillen, laboureur &agrave;     boeufs, Charles Faule, laboureur &agrave; bras, Martine Guillen, sa femme,      les dits Vincent et Martine, enfants des dits Guillen et Bonnamy</li>  <li>Cession le 14 mai 1719 entre Jean Robareau, laboureur &agrave; bras, fils     de d&eacute;funt Jean Robareau, lui-m&ecirc;me, fils de d&eacute;funts Jean     Robareau et Jeanne Nadaud, et fils de Jeanne Beneteau, de Marcillac, Antoine     Robareau, laboureur &agrave; bras de Coulonges, Louis Bouhier, laboureur &agrave;     bras, mari de Jeanne Robareau, de Xambes, les dits Antoine et Jeanne Robareau,     fils et h&eacute;ritiers de Denis Robareau, h&eacute;ritier de Jean Robareau      et Jeanne Nadaud, Antoine Billochon, p&ecirc;cheur de Coulonges</li>  <li>Cession le 30 juillet 1719 par Jean Bouhier, laboureur &agrave; bras, fils     de feu Pierre, mar&eacute;chal et Marie Piconnier, du bourg de Xambes &agrave;     Fran&ccedil;ois Pestis, marchand, de Lonnes aux droits de d&eacute;funt Fran&ccedil;ois      Pestis, marchand, de Villejoubert son fr&egrave;re</li>  <li>Delaissement le 18 ao&ucirc;t 1719 par Jean Guillen, laboureur &agrave;     bras dit Giraudeau, d'Aussac, veuf &agrave; ses enfants Vincent et Martine      Guillen </li>  <li>Vente aux ench&egrave;res le 27 ao&ucirc;t 1719 par Antoine Turcat, laboureur     &agrave; bras, Gabrielle Vergnaud, sa femme, de Cellettes et Simon Drouhaud,     veuf en premi&egrave;res noces de Catherine Vergnaud, soeur de la dite Gabrielle,      Andr&eacute;e Drouhaud, de St-Groux des biens des dittes Vergnaud</li>  <li>PV le 14 novembre 1719 pour Louis Delaborde, laboureur &agrave; bras et     Jean Penot, son gendre de Xambes d'une maison arrent&eacute;e par David Duqueroux,      ma&ccedil;on et Anne Prevost sa femme de Cellettes</li>  <li>Vente le 12 avril 1720 par Louis Malmanche, laboureur &agrave; boeufs, Isabelle      Nadaud, sa femme, de Lux&eacute; &agrave; Jean Laydet, marchand, de Villognon</li>  <li>Accord le 12 mars 1721 entre Pierre Vodichon dit St Ermine, laboureur &agrave;     bras, fils de feu Pierre Vodichon dit St Ermine et Charles Pichon, laboureur     &agrave; bras, pour Marguerite Vodichon, sa nore, veuve de feu Louis Pichon,      tous de Xambes</li>
      </ul>
      <h1 align=center>
        <a name="petits_notaires">Petits notaires du canton de St-Amant de Boixe (XVII&egrave;me si&egrave;cle)</a></h1>
      <h2 align="center">
        <font color="#0000FF">Liasses sur Montignac-Charente
        </font></h2><h4>
        <p><big><b><u>Notaire Bridier (2E4131) :</u></b></big>
        </p>
        <ul>  <li>Vente d'une maison et de terres le 2 ao&ucirc;t 1691 par Paule Thinon, veuve     de Fran&ccedil;ois Rabeau?, de Villognon &agrave; Michel Blanchon, charpentier      de Villognon</li>
        </ul>
        <p><big><b><u>Notaire Chereau (2E4132) :</u></b></big>
        </p>
        <ul>  <li>Ferme le 11 juin 1651 par ? Maurin laboureur &agrave; bras de Bouteville?     &agrave; Jean Angibaud, laboureur, fils de d&eacute;funt Jacques, du bourg      d'Herpe?</li>
        </ul>
        <p><big><b><u>Notaire Delaborde (2E4133) : </u></b></big>
        </p>
        <ul>  <li>Ferme des droits de p&ecirc;che le 31 octobre 1676 par Pierre Tiffon, sieur     des Brousses, du village de Villerioux, de St-Groux et Michel Martin, sieur     de Font Robin, de Mansle, fermiers du prieur&eacute; de Vouharte &agrave;      Jean Tiffon dit Gazelot, p&ecirc;cheur, de Vouharte</li>
        </ul>
        <p><big><b><u>Notaire Fayou (2E4140) :</u></b></big>
        </p>
        <ul>  <li>Partage le 8 janvier 1628 des biens de Antoinette ?, femme d'Antoine Denis     l'a&icirc;n&eacute;, laboureur &agrave; boeufs, grand-p&egrave;re et loyal     adminstrateur de Fran&ccedil;oise Denis, fille de d&eacute;funt Bertrand Denis,     fils du dit Antoine, et de Marie Baibel?, Jean Denis de Xambes et Pierre Denis,      les dits Pierre et Jean Denis, fils de la d&eacute;funte et du dit Antoine</li>
        </ul>
        <p><big><b><u>Notaire Feniou (2E4141) :</u></b></big>
        </p>
        <ul>  
        <li>Retrocession le 11 avril 1646 par Marguerite Crasin, veuve de Christophe Jolly d'Angoul�me � Mathurin Porcheron, notaire de St-Amant de Nouh�re des biens de d�funte Ozanne Porcheron</li>

<li>Premi�re page d'une reconnaissance du 16 avril 1647 dont l'encre est d�lav�e concernant Marguerite Papin, veuve d'Abraham Marquet</li>

<li>D�claration le 25 ao�t 1647 par Jean Gillebert, tailleur d'habits et Marguerite Crasin, sa femme, d'Angoul�me � propos de la succession d'Ozanne Porcheron </li>

<li>Vente d'une maison le 4 septembre 1647 par Aubin Bounin, marchand de St Amant de Nouh�re, en charge de Marguerite Crasin, femme de Jean Gillebert � Guillemette Guerin, fille de feu Antoine Guerin, de St Amant de Nouh�re </li>
        </ul> 
         <p><big><b><u>Notaire Fruchet (2E4170) :</u></b></big>
        </p>
        
        <ul>  
        <li>Vente le 7 septembre 1729 par Marie Deleschelle, de Marcillac, veuve de Pierre Baratte, maitre es arts lib�raux, Fran�ois Baratte, sergent d'une compagnie franche de marine, de Rochefort, Marie Baratte, de Marcillac, Jean Aubinaud, marchand boucher de la paroisse d'Asni�res et Jeanne Baratte sa femme � Pierre Jean Andr�, sieur de la Carterie, du bourg de La Chapelle d'une pi�ce de vigne</li>
        <li>Remboursement le 14 septembre 1729 par Fran�ois Deleschelle, sieur de Beauregard, notaire, de Marcillac � Jean Andr�, sieur de la Carterie, du bourg de la Chapelle d'une pi�ce de vigne acquise par le dit Andr� de Marie Deleschelle, veuve de Pierre Baratte, maitre es arts lib�raux, Fran�ois Baratte, sergent d'une compagnie franche de marine, Marie Baratte, Jean Aubinaud et Jeanne Baratte sa femme </li>
        
        </ul>
        
        <p><big><b><u>Notaire Gaschet (2E4175) :</u></b></big>
        </p>
        <ul>  <li>Reconnaissance le 20 f&eacute;vrier 1604 par Jacques Bergeron, mar&eacute;chal     de Xambes &agrave; Jean Raoul, absent mais repr&eacute;sent&eacute; par le      notaire soussign&eacute;</li>  <li>Reconnaissance le 26 d&eacute;cembre 1608 par Fran&ccedil;ois Godichon,      de St-Amant de Boixe &agrave; noble homme Guillaume Du ?, &eacute;cuyer, d'Angoul&ecirc;me</li>
        </ul>
        <p><big><b><u>Notaire Gachet (2E4176) :</u></b></big>
        </p>
        <ul>  
        <li>Proc�s verbal le 18 ao�t 1716 d'une pi�ce de vigne au requis de Pierre De Marchou, laboureur � bras, de St-Amant de Boixe, fils de d�funt Pierre contre Jacques Trutaud (l'acte fait 32 pages)</li>
<li>Partage le 22 f�vrier 1729 de quatre pi�ces de terre entre Ren� Feniou dit La Guerre, Marguerite Feniou sa soeur et Jean Nadaud, tous du village des Brousses, de St-Amant de Nou�re</li>
<li>Quittance le 25 mai 1729 par Marie Priolleau, veuve de Pierre Priolleau, � Pierre Priolleau, marchand, son fils, tous deux du village de Bois Raymond, de St-Cybardeaux</li>
        
        </ul>
        <p><big><b><u>Notaire Gesmond (2E4178) :</u></b></big>
        </p>
        <ul>  <li>Ferme le 2 janvier 1662 par Pierre Birot, sieur du Vignaud, de Montignac      &agrave; Richard Pinaud, h&ocirc;telier, de Genac</li>  <li>Reconnaissance le 24 janvier 1662 par Pierre Vodichon l'a&icirc;n&eacute;,      marchand &agrave; Jean Vodichon, praticien, son fils, tous deux de Montignac</li>  <li>Partage le 30 mai 1662 des biens de d&eacute;funte Jeanne Gaschet pour L&eacute;onard     Baudet, ma&ccedil;on, du village du Tapis, de Montignac, son mari, Jean Beaudet,     ma&ccedil;on, du village du Tapis, son fils, Etienne Rabany, texier en toile,     de Lux&eacute;, mari de Fran&ccedil;oise Beaudet, Guillaume Marseau, du village     du Tapis, mari de Vincente Beaudet, les dits Beaudet, enfants de la ditte      Jeanne Gaschet</li>  <li>Arentement d'une pi&egrave;ce de vigne le 20 avril 1662 par Philippe Large,     laboureur &agrave; bras, de Montignac &agrave; Pierre Salmon l'a&icirc;n&eacute;,      laboureur, du village de la Fich&egrave;re, de St-Amant de Boixe</li>  <li>&quot;Nomination&quot; le 15 juin 1662 de Jean Dommergne, religieux par     Charles De Mayol, abb&eacute; commendataire de l'abbaye de St-Amant de Boixe      (Acte en latin)</li>  <li>Donation le 24 juin 1662 par Jean Dommergne, clerc du dioc&egrave;se de     Vienne, religieux nomm&eacute; &agrave; l'abbaye de St-Amant de Boixe, &agrave;     Pierre Dommergne, bourgeois d'Annonay, son fr&egrave;re, de ses propres biens     et de ceux h&eacute;rit&eacute;s de Jean Dommergne, premier capitaine et commandant      une compagnie d'infanterie du Vieux Navaille?, son oncle</li>
        </ul>
        <p><big><b><u>Notaire Girard (2E4179) :</u></b></big>
        </p>
        <ul>  <li>Accord le 24 avril 1641 entre Guillaume Martin, syndic, Pierre Chollet,     so co-syndics, les habitants de St-Genis les Moli&egrave;res concernant le      &quot;rolle des tailles&quot; de la paroisse</li>  <li>Procuration le 25 f&eacute;vrier 1648 par Guillaume Lemert, marchand chaudronnier,     du village de Chassagny, paroisse de Saint Amadin en Auvergne &agrave; Antoine      Couvidat, notaire et arpenteur</li>
        </ul>
        <p><big><b><u>Notaire Gorrain (2E4185) :</u></b></big>
        </p>
        <ul>  <li>CM le 13/12/1703 entre Louis Paponnet, fils de Jean Paponnet et Marie Durandeau,     de St-Amant de Boixe et Jeanne Gaschet, veuve de Fran&ccedil;oise Enard, fille      de d&eacute;funt Jacques Gaschet et Marguerite Leserf</li>
        </ul>
        <p><big><b><u>Notaire Huet (2E4189) :</u></b></big>
        </p>
        <ul>  <li>Procuration le 6 f&eacute;vrier 1664 par Charles Thinon, procureur de Montignac,     Pierre Thinon, greffier, Marguerite et Marie Thinon, leurs soeurs, tous de     Montignac &agrave; Jacques Bradent, pr&ecirc;tre cur&eacute; de Marillac et     s&eacute;n&eacute;chal de Montbron concernant la succession de Margueritte      Gesmond, leur cousine</li>
        </ul>
        <p><big><b><u>Notaire Mallet (2E4190) :</u></b></big>
        </p>
        <ul>  <li>Partage le 15 octobre 1667 des dettes de d&eacute;funts Vincent Pappounet     et Michelle Cl&eacute;ment entre leurs enfants Jean Pappounet, Pierre Pappounet     tous deux de St-Amant de Boixe et Fran&ccedil;ois Foucaud dit Cassetord, mari      de Louise Pappounet, de Xambes</li>  <li>Reconnaissance le 5 novembre 1674 par Mathurin Delaborde, sergent du duch&eacute;     de la Rochefoucauld et Antoine Delaborde, laboureur &agrave; bras, son fr&egrave;re,     de Xambes &agrave; Amant Gratereau, capitaine du ch&acirc;teau de Montignac,      sieur de Vervant, habitant Vervant</li>
        </ul>
        <p><big><b><u>Notaire Martin (2E4211) :</u></b></big>
        </p>
        <ul>  <li>Double CM le 16/06/1618 entre Lucas? Aubineau, veuf de Toussainte Lambert     de Marcillac et Marguerite Chaton, veuve d'Arnaud Gin, de St-Amant de Nou&egrave;re     et entre Pierre Aubineau, fils Lucas? et Toussainte Lambert, de Marcillac     avec Fran&ccedil;oise Gin, fille de d&eacute;funt Arnaud Gin et Marguerite      Chaton, de St-Amant de Nou&egrave;re</li>
        </ul>
        <p><big><b><u>Notaire Micheau (2E4212) :</u></b></big>
        </p>
        <ul>  <li>Echange de terres le 13 d&eacute;cembre 1688 entre Jean et Marc Leridaux,     fr&egrave;res, laboureurs du village du Marois, d'Amb&eacute;rac et Louis      Parteau, tailleur d'habits, de Villognon</li>  <li>Procuration le dernier f&eacute;vrier 1694 par Jeanne Lorand, veuve de Jean     Bridier, du village des Loges, de Lux&eacute; &agrave; Pierre Bridier, notaire,      de Montignac, son fils</li>
        </ul>
        <p><big><b><u>Notaire Pichon (2E4223) :</u></b></big>
        </p>
        <ul>  <li>Vente le 18 janvier 1656 par Robert Jan, boquetier, Antoinette Bertain,      sa femme, de Fouqueure? &agrave; Pierre Champenille, de Charm&eacute;?</li>  <li>Ferme le 13 avril 1662 par Jean Babain?, de Fouilli&egrave;re? (Fouqueure?)      &agrave; Jeanne Ricard, veuve de Pierre Charpentier, de Villognon</li>  <li>Arentement le 3 f&eacute;vrier 1668 par Louis Gratereau, praticien, de Coulonges      &agrave; Philippe Filloux, laboureur &agrave; bras, de Coulonges</li>  <li>Vente le 22 ao&ucirc;t 1676 par Antoine Sallemon, tailleur d'habits &agrave;      Philippe Paquet, marchand, du village des Piquots, tous d'eux d'Amb&eacute;rac?</li>
        </ul>
        <p><big><b><u>Notaire Pichon (2E4224) :</u></b></big>
        </p>
        <ul>  <li>Procuration le 5 octobre 1674 par Marguerite Aubineau, domestique, de Cellettes      &agrave; Louis Aubineau, son p&egrave;re, d'Amb&eacute;rac</li>
        </ul>
        <p><big><b><u>Notaire Pichon (2E4228) :</u></b></big>
        </p>
        <ul>  <li>Quittance le 16 mars 1662 par Etienne et Jean Raveaux, p&egrave;re et fils      &agrave; Jean Massicot, notaire et son fr&egrave;re (acte fait &agrave; Vouharte)</li>
        </ul>
        <p><big><b><u>Notaire Pinault (2E4225) :</u></b></big>
        </p>
        <ul>  <li>Vente le 15 mars 1636 par Fran&ccedil;ois Rouhet, fille de d&eacute;funt      Simon &agrave; Jean Bouffanais, tisserand, tous deux de St-Amant de Boixe</li>
        </ul>
        <p><big><b><u>Notaire Pouthier (2E4227) :</u></b></big>
        </p>
        <ul>  <li>Reconnaissance le 2 novembre 1656 par Pierre Bouniceau, notaire de Montignac     et Marie Bajot sa femme, tous deux de St-Amant de Boixe &agrave; Paul Bajot,     sieur de la Vigne, notaire de la principaut&eacute; de Marcillac, d'Amb&eacute;rac     Sa femme est Lousie Thibault :Le CM Bouniceau-Bajot a &eacute;t&eacute; enregistr&eacute;      le 18 septembre 1653 devant les notaires Andr&eacute; et Huet de Marcillac</li>
        </ul>
        <p><big><b><u>Notaire Seguin (2E4229) :</u></b></big>
        </p>
        <ul>  <li>Cession le 27 avril 1676 par Jeanne Mousset, veuve de Pierre Duboys, receveur     de la cour de c&eacute;ans?, &agrave; Pierre Duboys, receveur de la cour de     c&eacute;ans?, Samuel Duboys, David Duboys, apothicaire, ses enfants et du     dit feu Duboys, tous de Montignac &agrave; condition que ses enfants l'entretiennent      durant sa vieillesse</li>
        </ul>
        <p><big><b><u>Notaire Seneschal (2E4230) :</u></b></big>
        </p>
        <ul>  <li>Acte pas franchement lisible du 2 novembre 1586 (pas un CM)</li>
        </ul>
        <h2 align="center">
          <font color="#0000FF">Liasses sur Vars
          </font> </h2><h4>
          <p><big><b><u>Notaire Chaussat (2E5874) :</u></b></big>
          </p>
          <ul>  <li>Procuration le 26 octobre 1630 par Jean? Thinon, conseiller? du roi, juge,      de P&eacute;rigueux &agrave; Jean Thinon, conseiller du roi, de Montignac</li>
          </ul>
          <p><big><b><u>Notaire Salmon (2E5905) :</u></b></big>
          </p>
          <ul>  <li>Arentement d'une pi&egrave;ce de vigne le 29 janvier 1679 par Jean Noblet,     charpentier, du village de Tarsac, de St-Satorlin (St-Saturnin?) &agrave;      Julien Dubois, laboureur &agrave; boeufs, du village de Ranzeuil, de Vars</li>
          </ul>
          <p><big><b><u>Notaire Antoine Sebilleau (2E5906) :</u></b></big>
          </p>
          <ul>  <li>Accord le 16 avril 1607 entre Jean Aubert, laboureur &agrave; bras, et Jean     Aubert, son fils et de d&eacute;funte Catherine Raymond sa femme &agrave;     propos de la succession de celle-ci, tous les deux du village du Pourtauld      (Portal ?), de Vars</li>
          </ul></h4>
        <h2 align="center">
          <font color="#0000FF">Liasse sur Xambes
          </font></h2><h4>
          <p><big><b><u>Notaire Tourneur (2E6053) :</u></b></big>
          </p>
          <ul>  <li>Acte le 10 mars 1607 pour Joachim Raoul, sieur de la Chourie?, grand archer     de Saintonges, chanoine de l'&eacute;glise et cath&eacute;drales de Saintes?     contre Jean Berbion, notaire royal en Angoumois, afin que ce dernier d&eacute;livre     une grosse du testament de (BLANC) de Balthasar Dub?, &eacute;cuyer sieur      de ?lothe, de Saintes</li>
          </ul></h4>
        <h4 align="center">Le site de Fabrice Bouffanet : 
          <a href="http://fabrice.bouffanet.free.fr/" target="_blank">Actes notari&eacute;s du Sud Ruffecois</a></h4>
		  </div>
        </body>
        </html>