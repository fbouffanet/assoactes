<?php

require_once('Commun/constantes.php');

print("<Head>\n");
print("<link href='Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('</Head>');

print("<body>");
print("<div align=center><img src=\"./images/LogoAGC.jpg\"></div><br>");
print("<div align=center>");
print("Ce CM est issu d'un r&eacute;pertoire de notaire et n'a pas &eacute;t&eacute; encore relev&eacute;<br>");
//print("Merci de nous contacter afin de connaitre la cote de la liasse correspondante d&eacute;pos&eacute;e aux Archives D&eacute;partementales de la Charente<br><br>");
print("Merci de nous contacter ");
echo '<a href=mailto:'.EMAIL_DIRASSO.'?subject=Rep_Notaire_non_relev&eacute;>'.EMAIL_DIRASSO.'</a>';
print(" afin de connaitre la cote de la liasse correspondante d&eacute;pos&eacute;e aux Archives D&eacute;partementales de la Charente<br><br>");
print("<div class=important>ATTENTION: les liasses d'un notaire sont souvent lacunaires et la mention d'un CM n'implique pas n&eacute;cessairement l'existence du CM dans la liasse.<br>");
print("Par ailleurs, pensez que l'ordre des &eacute;poux est parfois invers&eacute ou peut correspondre &agrave; un mariage double<br>");
print("Par exemple, la mention du CM BARRAUD-COUGNET dans le r&eacute;pertoire peut concerner l'&eacute;poux BARRAUD, l'&eacute;pouse COUGNET ou inversement (voire les deux)");
print("</div><br><br>");
print("Si vous avez l'occasion de vous rendre aux AD pour photographier un CM, pensez qu'en photographiant tous les CM de la liasse, vous ferez des heureux et faciliterez aussi le d&eacute;pouillement syst&eacute;matique de celle-ci");
print("</div>");
print("<form method=post action=".$_SERVER['PHP_SELF']."><br>");
print("<div class=alignCenter><input type=button value=\"Fermer la fenetre\" onClick=\"javascript:window.close()\"></div>");
print("<form>");
print("</body>");
print("</div>");
?>