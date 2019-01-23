<?php
require_once('Commun/Identification.php');
require_once('Commun/commun.php');
require_once('Commun/constantes.php');
require_once('Commun/ConnexionBD.php');
print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<link rel="shortcut icon" href="images/favicon.ico">');
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='Commun/menu.js' type='text/javascript'></script>");
print('<title>Base AGC: Aide sur les recherches</title>');
print("</head>");
print('<body style="color: rgb(0, 0, 0); background-color: rgb(247, 247, 240);" >');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("Commun/menu.php");
?>
<p style="text-align: center;" class="MsoNormal">
  <span>
    <img alt="MenuRecherches" style="width: 698px; height: 282px;" src="images/aideV4.JPG">
  </span>
</p>
<div>Cet �cran comporte 3 pav�s&nbsp;: 
</div>
<ul>     
  <li>    
  <div>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Le 1<sup>er</sup> pav� est 
    <span >&nbsp;
    </span>commun aux deux autres pav�s qui sont des modules de recherche. Ce pav� <strong>
      <span style="font-weight: bold;">optionnel
      </span>    </strong>a pour mission d�affiner la recherche et ainsi limiter le nombre de r�ponses obtenues.
  </div>  
  </li>   
</ul>
<ol style="margin-left: 80px;">     
  <li>    
  <div>
    <span >&nbsp;&nbsp;&nbsp; 
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Source&nbsp;: liste de l�origine des actes ( AGC, AGL� )
  </div>  
  </li>     
  <li>    
  <div>
    <span>&nbsp;&nbsp;&nbsp; 
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Type d�acte&nbsp;: rechercher uniquement dans les naissances ou les s�pultures ou les mariages�
  </div>    
  </li>     
  <li>    
  <div>
    <span >&nbsp;&nbsp;&nbsp; 
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Commune/paroisse&nbsp;: la recherche se fait sur la commune s�lectionn�e
  </div>    
  </li>     
  <li>    
  <div>
    <span >&nbsp;&nbsp;&nbsp; 
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Rayon de recherche&nbsp;: cette recherche cible une zone g�ographique de 
    <span >&nbsp;
    </span>(X) kms autour de la paroisse s�lectionn�e
  </div>    
  </li>     
  <li>    
  <div>
    <span >&nbsp;&nbsp;&nbsp; 
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Ann�es&nbsp;: limite la recherche sur une fourchette d�ann�es
  </div>  
  </li>   
</ol>
<div><small>
    <br></small>
</div>
<ul>     
  <li>    
  <div>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Le 2<sup>�me</sup> pav� concerne la recherche par couple
  </div>    
  </li>   
</ul>
<p>
</p>
<ol style="margin-left: 80px;">  
  <li>    
  <div>C�est quoi au juste cette recherche&nbsp;? Il s�agit de rechercher le couple dans tous les actes o� il peut se trouver c�est-�-dire en tant qu��poux et �pouse, p�re et m�re, 
    <span style="font-size: 12pt; font-family: &quot;Times New Roman&quot;,&quot;serif&quot;;">intervenant et ancien conjoint
    </span>. Imaginez un peu les possibilit�s&nbsp;! en 2 clics, en ayant renseign� simplement les deux noms du couple, vous obtenez son mariage, la liste de tous ses enfants (naissance, mariage, d�c�s)
  </div>    
  </li>     
  <li>    
  <div>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Renseignez imp�rativement les noms de l��poux et de l��pouse
  </div>    
  </li>     
  <li>    
  <div>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Recherche par variantes connues&nbsp;: cette option �largit la recherche aux diff�rentes orthographes du patronyme ( exemple&nbsp;: 
    <span >&nbsp;
    </span>
    <span>AIGRETAUD &nbsp;; AIGRETEAUX &nbsp;; 
      <span >&nbsp;
      </span>AIGRETTEAU &nbsp;;     
      <span >&nbsp;
      </span>AIGRETTEAUX &nbsp;; 
      <span >&nbsp;
      </span>AYGRETEAU &nbsp;; AYGRETTEAU&nbsp;; �GRETAU &nbsp;;     
      <span >&nbsp;
      </span>HEGRETEAU ....)&nbsp;
    </span>
  </div>  
  </li>  
  <li>    
  <div>le joker (*) est toujours utilisable et utile car les variantes ne sont pas exaustives. La recherche par variante est desactivable si besoin.
    <span> 
    </span>
  </div>    
  <div>
    <span>
    </span>
  </div>  
  </li>
</ol>
<div>
  <span>
  </span>
</div>
<div>
  <span>
  </span>
</div>
<div style="margin-left: 1px; width: 969px;"><small></small>
  <ul>     
    <li>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Le 3<sup>�me</sup> pav� concerne la recherche d�un individu en particulier
    </li>   
  </ul>
</div>
<ol style="margin-left: 80px;">     
  <li>    
  <div>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Renseignez imp�rativement le nom de la personne
  </div>    
  </li>  
  <li>    
  <div>
    <span >
      <span style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7pt; line-height: normal; font-size-adjust: none; font-stretch: normal;">
      </span>
    </span>Le type de pr�sence permet d'affiner la chercher parmi les intervenants, les parents, les anciens conjoints, les t�moins, les parrain/marraine
  </div>  
  </li>
</ol>
<div style="text-align: center;">
  <span style="font-style: italic; color: red;">Attention seules les 100 premi�res r�ponses son
  </span>
  <span>
    <span style="font-style: italic; color: red;">t affich�es, alors affinez votre recherche
    </span>
    <br>
    Depuis les AM d'Angoul�me et AD sont en ligne, l'AGC proc�de � des indexations, c'est-�-dire que seule la r�f�rence des archives en ligne et not�e dans l'acte.
    <br>Vous pouvez obtenir la cote de l'acte en survolant l'icone correspondante avec le nez la souris comme indiqu� ci-dessous:
    <br>
    <img  alt="R�sultat de recherche" src="images\cote_idx.png">
    <br>
    <img  alt="R�sultat de recherche" src="images\cote_tdi.png">
    <br>
    Ces indexations peuvent �tre consult�es sans aucune limite
    <br>
    <br>Pour consulter le relev� des autres actes, cliquez sur le i en face de l'acte qui vous int�resse comme indiqu� dans l'image ci-dessous.
    <br>
    <br>
    <img style="width: 768px; height: 402px;" alt="R�sultat de recherche" src="images/ResultatRecherchesCouple.jpg">
    
    <br>Une nouvelle fen�tre appara�t. Si ce n'est pas le cas, v�rifiez que votre navigateur n'a pas interdit l'ouverture de la fen�tre.
    <br>Celle-ci se pr�sente ainsi:
    <br>
    <br>
    <img style="width: 600px; height: 626px;" alt="Ajout dans le panier" src="images/details_releve.png">
    <br>
    <br> Par mois, vous disposez de 500 demandes de naissances, 500 demandes de d&eacute;c&eacute;s et 50 demandes d'actes divers (mariage, CM, Testament...)
    <br>
   
  </span>
</div>
</body>
</html>