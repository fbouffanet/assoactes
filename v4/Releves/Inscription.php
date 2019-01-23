<?php
//http://127.0.0.1:8888/Inscription.php

/*
CREATE TABLE IF NOT EXISTS `inscription_prov`
(
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `ins_date` varchar(10),
  `ins_nom` varchar(25),
  `ins_prenom` varchar(25),
  `ins_adr1` varchar(40),
  `ins_adr2` varchar(40),
  `ins_cp` varchar(5),
  `ins_commune` varchar(25),
  `ins_pays` varchar(25),
  `ins_email_perso` varchar(25),
  `ins_email_forum` varchar(25),
  `ins_site_web` varchar(40),
  `ins_telephone` varchar(14),
  `ins_cache` varchar(1),
  `ins_valid` varchar(1),
   PRIMARY KEY (`idf`)
);
*/

$gst_chemin = "../";
//$gst_chemin = "";
require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/Identification.php");

// La page est reservee uniquement aux gens ayant les droits utilitaires
//require_once("$gst_chemin/Commun/VerificationDroits.php");
//verifie_privilege(DROIT_UTILITAIRES);
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/commun.php");

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='$gst_chemin/Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='$gst_chemin/Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_chemin/Commun/menu.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>

function VerifieChamps(Formulaire)
{
   var nom=document.forms[Formulaire].nom.value;
   var prenom=document.forms[Formulaire].prenom.value;
   var adr1=document.forms[Formulaire].adr1.value;
   var cp=document.forms[Formulaire].cp.value;
   var commune=document.forms[Formulaire].commune.value;
   var email_perso=document.forms[Formulaire].email_perso.value;
   var email_forum=document.forms[Formulaire].email_forum.value;
   var site_web=document.forms[Formulaire].site_web.value;
   var code=document.forms[Formulaire].code.value;
   var captcha=document.forms[Formulaire].captcha.value;
   var email_ptn = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
   var date_ptn = /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/;
   var site_ptn = /^http\:\/\/[\w\.\-]+/;
   var ListeErreurs	= "";

   if (nom=="")
   {
      ListeErreurs+="Le patronyme est obligatoire\n";
   }
   if (prenom=="")
   {
      ListeErreurs+="Le prénom est obligatoire\n";
   }
   if (adr1=="")
   {
      ListeErreurs+="L'adresse est vide. Remplir la première ligne\n";
   }
   if (cp=="")
   {
      ListeErreurs+="Le code postal est vide\n";
   }
   if (commune=="")
   {
      ListeErreurs+="La commune est vide\n";
   }
   if (email_perso!= "" && !email_ptn.test(email_perso))
   {
      ListeErreurs+="Le champ email personnel n'est pas valide\n";
   }   
   if (email_perso== "" && email_forum!= "")
   {
      ListeErreurs+="Le champ email personnel doit aussi etre rempli\n";
   }
   if (email_perso!= "" && email_forum== "")
   {
      ListeErreurs+="Le champ email forum doit aussi etre rempli\n";
   }
   if (site_web !="" && !site_ptn.test(site))
   {
      ListeErreurs+="Le site doit commencer par : http://\n";
   }
   if (email_forum!= "" &&  !email_ptn.test(email_forum))
   {
      ListeErreurs+="Le champ email forum n'est pas valide\n";
   }
   if (code=="")
   {
      ListeErreurs+="La saisie du code est obligatoire\n";
   }
   if (code != "" && code != captcha)
   {
      ListeErreurs+="Vous n'avez pas saisi le bon code\n";
   }

   if (ListeErreurs != "")
   {
      alert (ListeErreurs);
   }
   else
   {
      document.forms[Formulaire].submit();
   }   
}
</script>
<?php
print('<title>Inscription en ligne</title>');
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'GRILLE': $_POST['mode'] ;

// Envoi du mail à l'adhérent
function Envoi_mail ($dt_ins_date, $pst_ins_nom, $pst_ins_prenom, $pst_ins_email_perso)
{
   $jour = sprintf ("%02s/%02s/%4s", substr($dt_ins_date,8,2), substr($dt_ins_date,5,2), substr($dt_ins_date,0,4));
   $headers  = "From: toto@yahoo.fr";
	$sujet    = "Validation inscription";
	$message  = "Bonjour ". $pst_ins_prenom. " " . $pst_ins_nom . ", \n\n";
	$message .= "Vous vous êtes inscrit ce jour, le " .$jour. " à l'AGC\n";
	$message .= "Nous vous remercions et vous demandons de nous confirmer votre inscription à cette adresse : \n\n";
	$message .= " ?? adresse_retour@.. ?? ";

	if (mail($pst_ins_email_perso, $sujet, $message, $headers))
	   echo "<script>alert(\"Un message vient de vous être envoyé sur votre mail \")</script>"; 
	else
	   echo "<script>alert(\"Problème d'envoi sur votre mail \")</script>"; 	
}

/**
 * Affiche de la table d'édition
 
 * @param string $pst_ins_date     uniquement en validation sur l'enregistrement
 * @param string $pst_ins_nom
 * @param string $pst_ins_prenom
 * @param string $pst_ins_adr1
 * @param string $pst_ins_adr2
 * @param string $pst_ins_cp
 * @param string $pst_ins_commune
 * @param string $pst_ins_pays
 * @param string $pst_ins_email_perso
 * @param string $pst_ins_email_forum
 * @param string $pst_ins_site_web
 * @param string $pst_ins_telephone
 * @param string $pst_ins_cache

 */ 
function menu_edition($pst_ins_nom, $pst_ins_prenom, $pst_ins_adr1, $pst_ins_adr2, $pst_ins_cp, $pst_ins_commune, $pst_ins_pays,
                      $pst_ins_email_perso, $pst_ins_email_forum, $pst_ins_site_web, $pst_ins_telephone, $pst_ins_cache)
{
   global $ga_pays;
   print("<div class=gauche_adherent>");
   print("<table border=1><tr><th>Nom</th><td><input type=text maxsize=20 size=20 name=nom value=\"$pst_ins_nom\"></td></tr>");
   print("<tr><th>Pr&eacute;nom</th><td><input type=text maxsize=30 size=20 name=prenom value=\"$pst_ins_prenom\"></td></tr>");
   print("<tr><th>Adresse 1</th><td><input type=text maxsize=40 size=40 name=adr1 value=\"$pst_ins_adr1\"></td></tr>");
   print("<tr><th>Adresse 2</th><td><input type=text maxsize=40 size=40 name=adr2 value=\"$pst_ins_adr2\"></td></tr>");
   print("<tr><th>Code Postal</th><td><input type=text maxsize=5 size=5 name=cp value=\"$pst_ins_cp\"></td></tr>");
   print("<tr><th>Localit&eacute;</th><td><input type=text maxsize=40 size=20 name=commune value=\"$pst_ins_commune\"></td></tr>");
   print("<tr><th>Pays</th><td><select name=pays>");
   for($i=0; $i<sizeof($ga_pays); $i++) 
   {
	   if ($ga_pays[$i] == "France")
         print("<option selected=\"selected\" value=\"$ga_pays[$i]\"> $ga_pays[$i]</option>");
      else
         print("<option  value=\"$ga_pays[$i]\">$ga_pays[$i]</option>");  	
   }
   print("</select></td></tr>");
	print("<tr><th>Email forum</th><td><input type=text maxsize=60 size=40 name=email_forum value=\"$pst_ins_email_forum\"></td></tr>");
	print("<tr><th>Site web</th><td><input type=text maxsize=60 size=40 name=site_web value=\"$pst_ins_site_web\"></td></tr>");
	print("<tr><td colspan=2><input type=checkbox name=confidentiel value=\"$pst_ins_cache\" checked /> (Cochez et l'adresse devient invisible aux adhérents)</td></tr></table></div>");
	
	print("<div class=droite_adherent>");
	print("<table border=1><tr><td colspan=2>Donn&eacute;es accessibles uniquement aux gestionnaires de l'AGC</td></tr>");
	print("<tr><th>Téléphone</th><td><input type=text maxsize=20 size=14 name=telephone value=\"$pst_ins_telephone\"></td></tr>");
	print("<tr><th>Email personnel</th><td><input type=text maxsize=60 size=40 name=email_perso value=\"$pst_ins_email_perso\"></td></tr></table></div>");
	
	print("<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><div class=droite_adherent>");
	print("<table border=1><tr><td colspan=2>Veuillez recopier le code qui suit</td></tr>");
	mt_srand ((float) microtime() * 1000000);
	$captcha = mt_rand(1000,10000);
	print("<tr><th>Code</th><td size=+2> $captcha</td></tr>");
	print("<tr><th>Recopiez le code</th><td><input type=text maxsize=10 size=10 name=code ></td></tr>");
	print("<input type=hidden name=captcha value=\"$captcha\">");
	print("</table></div>");
	
//	print("<div class=bas_adherent_gauche>");
	print("<div top:350px left:30px>");
	print("Votre cotisation :<br>");
	print("- 14 euros tarif simple<br>");
	print("- 32 euros avec le bulletin, 42 euros pour le hors métropole</td></tr>");
	print("</div>");
}


/** Affiche le menu d'ajout d'un adhérent
 */ 
function Saisie_adherent()
{
   print("<BR><div align=center><font size=+3>INSCRIPTION  EN  LIGNE</font></div><BR><BR><br>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=INSCRIPTION>");
   print("<div align=center>");
   menu_edition('','','','','','','','','','','','');
   print("</div><br>");
   print("<br><br><br><br><br><br><div align=center><input type=button value=\"Valider l'inscription\" ONCLICK=VerifieChamps(0)></div>");
   print('</form>');
}

/*---------------------------------------------------------------------------
  Démarrage du programme
  ---------------------------------------------------------------------------*/

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

switch ($gst_mode) {
  case 'GRILLE' : 
     Saisie_adherent(); 
  break;
  case 'INSCRIPTION' : 
     $dt_ins_date = date("Y-m-d");
     $pst_ins_nom = strtoupper(trim($_POST['nom']));
     $pst_ins_prenom = ucfirst(trim($_POST['prenom']));
     $pst_ins_adr1 = trim($_POST['adr1']);
     $pst_ins_adr2 = trim($_POST['adr2']);
     $pst_ins_cp = $_POST['cp'];
     $pst_ins_commune = ucfirst(trim($_POST['commune']));
     $pst_ins_pays = $_POST['pays'];
     $pst_ins_email_perso = trim($_POST['email_perso']);
     $pst_ins_email_forum = trim($_POST['email_forum']);
     $pst_ins_site_web = trim($_POST['site_web']);
     $pst_ins_telephone = trim($_POST['telephone']);
     $pst_ins_cache = $_POST['confidentiel'];
	  $pst_ins_valid = "0";
 
     $connexionBD->execute_requete("insert into inscription_prov(ins_date, ins_nom, ins_prenom, ins_adr1, ins_adr2, ins_cp, ins_commune, ins_pays, 
	                                                              ins_email_perso, ins_email_forum, ins_site_web, ins_telephone, ins_cache, ins_valid) 
	                                 values($dt_ins_date, '$pst_ins_nom', '$pst_ins_prenom', '$pst_ins_adr1', '$pst_ins_adr2', '$pst_ins_cp', '$pst_ins_commune', '$pst_ins_pays',
												      '$pst_ins_email_perso', '$pst_ins_email_forum', '$pst_ins_site_web', '$pst_ins_telephone', '$pst_ins_cache', '$pst_ins_valid')");

     Envoi_mail($dt_ins_date, $pst_ins_nom, $pst_ins_prenom, $pst_ins_email_perso);
     Saisie_adherent();
  break;
}  
print('</body>');
?>