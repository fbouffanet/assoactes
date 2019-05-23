<?php
//http://127.0.0.1:8888/Inscription.php

/*
CREATE TABLE IF NOT EXISTS `inscription_prov`
(
  `idf` smallint(5) unsigned NOT NULL auto_increment,
  `ins_date` varchar(10),
  `ins_nom` varchar(30),
  `ins_prenom` varchar(20),
  `ins_adr1` varchar(40),
  `ins_adr2` varchar(40),
  `ins_cp` varchar(12),
  `ins_commune` varchar(40),
  `ins_pays` varchar(40),
  `ins_email_perso` varchar(60),
  `ins_site_web` varchar(40),
  `ins_telephone` varchar(15),
  `ins_cache` varchar(1),
  `ins_idf_agc` varchar(10),
  `ins_alea` varchar(5),
  `ins_valid` varchar(1),
  `ins_aide` tinyint,
   PRIMARY KEY (`idf`)
);
*/

$gst_chemin = "../";
//$gst_chemin = dirname($_SERVER['DOCUMENT_ROOT']);
//$gst_chemin = "";
require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/commun.php");
$cryptinstall="crypt/cryptographp.fct.php";
include $cryptinstall;

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='$gst_url_site/Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='$gst_url_site/Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_url_site/Commun/menu.js' type='text/javascript'></script>");
print("<link href='$gst_url_site/Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='$gst_url_site/Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='$gst_url_site/Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<script src='$gst_url_site/Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='$gst_url_site/Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='$gst_url_site/js/jquery-ui.min.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
$(document).ready(function() {
$("#inscription").validate({
	rules: {
     nom: "required",
     prenom: "required",
     adr1: "required",
     cp: "required",
     commune: "required",
     email_perso: {
      required:true,
      email: true
     },
     site_web: "url",
     code: "required"
  },  
  messages: {
		nom: {
			required: "Le patronyme est obligatoire"
		},
		prenom: {
			required: "Le prénom est obligatoire"
		},
    adr1: {
			required: "L'adresse est vide. Remplir la première ligne"
		},
    cp: {
			required: "Le code postal est obligatoire"
		},
    commune: {
			required: "La commune est obligatoire"
		},
    email_perso: {
			required: "L'email est obligatoire",
      email: "Ce n'est pas un email"
		},
    site_web: {
			url: "Ce n'est pas une adresse"
		},
    code: {
			required: "Le code est obligatoire"
		}
	},
  
	submitHandler: function(form) {

			var nom =$("#nom").val().toUpperCase();
      $("#nom").val(nom);
			var prenom=$("#prenom").val();
      prenom= prenom.replace(/^\s+/g,'').replace(/\s+$/g,'');
      prenom=prenom.replace(/\s+/g,'-');
      prenom=prenom.toLowerCase(); 
			$("#prenom").val(prenom);
      alert(nom+'|'+prenom);
      form.submit();
     
	}      
});
});   
</script>
<?php
print('<title>Inscription en ligne</title>');
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'GRILLE': $_POST['mode'] ;
if (get_magic_quotes_gpc())
  if (ini_get('magic_quotes_sybase'))
    $st_erreur = isset( $_GET['erreur']) ? $_GET['erreur'] : '';
  else
     $st_erreur = isset( $_GET['erreur']) ? stripslashes($_GET['erreur']) : '';
else 
    $st_erreur = isset( $_GET['erreur']) ? $_GET['erreur'] : ''; 



if ($st_erreur!="")
{
  // traitement d'une erreur en provenance de valideInscription
  print("<div align=center style=\"color: red;font-size: 16px;\">$st_erreur</div>");
}

/*
* Envoie un mail à l'adhérent
* @param string $pst_ins_nom nom de l'adhérent
* @param string $pst_ins_prenom prénom de l'adhérent
* @param string $pst_ins_email_perso email de l'adhérent
* @param string $pst_ins_idf_agc identifiant AGC provisoire
* @param string $pst_ins_alea alea
* @param string $int_idf_prov Identifiant provisoire
* @global string $gst_url_validation URL de validation
*/
function envoie_mail ($dt_ins_date, $pst_ins_nom, $pst_ins_prenom, $pst_ins_email_perso, $pst_ins_idf_agc, $pst_ins_alea, $int_idf_prov)
{
  global $_SERVER,$gst_url_validation;
  //$gst_serveur = $_SERVER['SERVER_NAME'];
  //$gst_url_rel = dirname($_SERVER['REQUEST_URI']);
  
  $gst_url = basename($_SERVER['PHP_SELF']);
  $jour = sprintf ("%02s/%02s/%4s", substr($dt_ins_date,8,2), substr($dt_ins_date,5,2), substr($dt_ins_date,0,4));

  
  $frontiere = '-----=' . md5(uniqid(mt_rand()));  
  $headers  = "From: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n>";
  $headers .= "Reply-to: Association Genealogique de la Charente <".EMAIL_DIRASSO.">\n";
	$headers .= 'MIME-Version: 1.0' . "\n"; 
  $headers .= 'Content-Type: multipart/alternative; boundary="'.$frontiere.'"';      
   
	$sujet    = "Pre-inscription a l'AGC";
	$st_message_html  = "Bonjour ". $pst_ins_prenom. " " . $pst_ins_nom . ", \n\n";
	$st_message_html .= "Vous vous &ecirc;tes pr&eacute;-inscrit ce jour, le " .$jour. " &agrave; l'AGC\n";
	$st_message_html .= "Nous vous remercions et vous demandons de nous confirmer votre inscription en cliquant sur ce lien suivant: \n\n";
	$st_message_html .= "<a href=\"$gst_url_validation?alea=$pst_ins_alea&amp;idf_agc=$pst_ins_idf_agc&amp;idf_prov=$int_idf_prov\">$gst_url_validation?alea=$pst_ins_alea&amp;idf_agc=$pst_ins_idf_agc&amp;idf_prov=$int_idf_prov</a>";
  $a_time = localtime();
  if ($a_time[4]>5)
  {
      $st_message_html .= "\n\n <div class=IMPORTANT>Toute nouvelle adh&eacute;sion &agrave; l'AGC enregistr&eacute;e (par courrier ou en ligne) apr&egrave;s le 1er octobre comptera pour l'ann&eacute;e suivante. Le temps entre la date d'adh&eacute;sion et la fin de l'ann&eacute;e en cours est donc gracieusement offert par l'Association.</div>\n\n";
  }
  $st_message_html .= "\n\n Les responsables de l'AGC";
  $st_message_html = nl2br($st_message_html);
  $st_message_texte = strip_tags(html_entity_decode($st_message_html)); 
	$st_message = 'This is a multi-part message in MIME format.'."\n\n"; 
  $st_message .= '--'.$frontiere."\n";
  $st_message .= 'Content-Type: text/plain; charset="cp1252"'."\n";
  $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
  $st_message .= $st_message_texte."\r\n";
  $st_message .= '--'.$frontiere."\r\n";
  $st_message .= 'Content-Type: text/html; charset="cp1252"'."\n";
  $st_message .= 'Content-Transfer-Encoding: 8bit'."\n\n";
  $st_message .= $st_message_html."\r\n";
  $st_message .= '--'.$frontiere."--\r\n"; 
  if (mail($pst_ins_email_perso, $sujet, $st_message, $headers))
	   echo "<script>alert(\"Un message vient de vous etre envoye sur votre mail \")</script>"; 
	else
	   echo "<script>alert(\"Probleme d'envoi sur votre mail \")</script>"; 	
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
 * @param string $pst_ins_site_web
 * @param string $pst_ins_telephone
 * @param string $pst_ins_cache
 * @param string $pst_ins_idf_agc

 */ 
function menu_edition($pst_ins_nom, $pst_ins_prenom, $pst_ins_adr1, $pst_ins_adr2, $pst_ins_cp, $pst_ins_commune, $pst_ins_pays,
                      $pst_ins_email_perso, $pst_ins_site_web, $pst_ins_telephone, $pst_ins_cache, $pst_ins_idf_agc)
{
   global $ga_pays,$ga_tarifs;

   print("<div class=gauche_adherent>");
   print("<table border=1><tr><th>Nom</th><td><input type=text maxlength=20 size=20 name=nom id=nom value=\"$pst_ins_nom\"></td></tr>");
   print("<tr><th>Pr&eacute;nom</th><td><input type=text maxlength=30 size=20 name=prenom id=prenom value=\"$pst_ins_prenom\"></td></tr>");
	 print("<tr><th>Num&eacute;ro AGC (si déjà adhérent)</th><td><input type=text maxlength=10 size=10 name=idf_agc value=\"$pst_ins_idf_agc\"></td></tr>");
   print("<tr><th>Adresse 1</th><td><input type=text maxlength=40 size=40 name=adr1 value=\"$pst_ins_adr1\"></td></tr>");
   print("<tr><th>Adresse 2</th><td><input type=text maxlength=40 size=40 name=adr2 value=\"$pst_ins_adr2\"></td></tr>");
   print("<tr><th>Code Postal</th><td><input type=text maxlength=5 size=5 name=cp value=\"$pst_ins_cp\"></td></tr>");
   print("<tr><th>Localit&eacute;</th><td><input type=text maxlength=40 size=20 name=commune value=\"$pst_ins_commune\"></td></tr>");
   print("<tr><th>Pays</th><td><select name=pays>");
   for($i=0; $i<sizeof($ga_pays); $i++) 
   {
	   if ($ga_pays[$i] == "France")
         print("<option selected=\"selected\" value=\"$ga_pays[$i]\"> $ga_pays[$i]</option>");
      else
         print("<option  value=\"$ga_pays[$i]\">$ga_pays[$i]</option>");  	
   }
   print("</select></td></tr>");
	print("<tr><th>Site web</th><td><input type=text maxlength=60 size=40 name=site_web value=\"$pst_ins_site_web\"></td></tr>");

	print("<tr><th>Email personnel</th><td><input type=text maxlength=60 size=40 name=email_perso value=\"$pst_ins_email_perso\"></td></tr>");
  print("<tr><td colspan=2><input type=checkbox name=confidentiel value=\"$pst_ins_cache\" checked /> (Cochez et l'adresse devient invisible aux adhérents)</td></tr></table></div>");
	
	print("<div class=droite_adherent>");
	print("<table border=1><tr><td colspan=2>Donn&eacute;es accessibles uniquement aux gestionnaires de l'AGC</td></tr>");
	print("<tr><th>T&eacute;l&eacute;phone</th><td><input type=text maxlength=20 size=14 name=telephone value=\"$pst_ins_telephone\"></td></tr></table></div>");

	print("<BR><BR><BR><BR><BR><div class=droite_adherent>");
	print("<table border=1><tr><td colspan=2>Veuillez recopier le code qui suit </td></tr>");

  print('<tr><th>Recopiez le code (4 caract&egrave;res uniquement)</th> <td><input type="text" size="4" name="code"></td></tr>');
	print("<tr><th>Code </th><td>");
  dsp_crypt(0,1);
  print("</td></tr>");
    
	print("</table>");
	//print("<div style=\"position: absolute; top:70px; left:560px; width:300px; height:50\">");
	print("<br><br><br><br>");
	print("Votre cotisation :<br><ul>");
	
	print("<li>Cotisation d'adh&eacute;sion minimale: ".$ga_tarifs['internet']." euros<br>");
	print("<li>Avec le bulletin: <br>");
  print($ga_tarifs['bulletin_metro']." euros pour la France,<br>");
  print($ga_tarifs['bulletin_etranger']." euros pour les autres pays (DOM/TOM inclus)");
	print("</ul></div>");
}


/** Affiche le menu d'ajout d'un adhérent
 */ 
function saisie_adherent($pst_ins_nom, $pst_ins_prenom, $pst_ins_adr1, $pst_ins_adr2, $pst_ins_cp, $pst_ins_commune, $pst_ins_pays,
                      $pst_ins_email_perso, $pst_ins_site_web, $pst_ins_telephone, $pst_ins_cache, $pst_ins_idf_agc)
{
   global $gst_url_readhesion;
   print("<div  class=TITRE>INSCRIPTION EN LIGNE</div>");
   print("<div class=IMPORTANT><br><br>Si vous &ecirc;tes d&eacute;j&agrave; adh&eacute;rent cette ann&eacute;e, merci d'utiliser le formulaire de re-adh&eacute;sion depuis l'onglet \"Compte Personnel\" en lieu et place de celui-ci.<br /> Vous pouvez y acc&eacute;der directement en cliquant sur le lien ci-dessous:<br /> <a href=\"$gst_url_readhesion\">$gst_url_readhesion</a><br></div>");
   $a_time = localtime();
   if ($a_time[4]>5)
   {
      print("<div class=IMPORTANT>Toute nouvelle adh&eacute;sion &agrave; l'AGC enregistr&eacute;e (par courrier ou en ligne) apr&egrave;s le 1er octobre comptera pour l'ann&eacute;e suivante. Le temps entre la date d'adh&eacute;sion et la fin de l'ann&eacute;e en cours est donc gracieusement offert par l'Association.<br><br></div>");
   }
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=inscription\">");
   
   print("<div align=center>");
   print("<input type=hidden name=mode value=\"INSCRIPTION\">");
   menu_edition($pst_ins_nom, $pst_ins_prenom, $pst_ins_adr1, $pst_ins_adr2, $pst_ins_cp, $pst_ins_commune, $pst_ins_pays,
                      $pst_ins_email_perso, $pst_ins_site_web, $pst_ins_telephone, $pst_ins_cache, $pst_ins_idf_agc);
   print("<br></div>");
  
   print("<div style=\"position: absolute; top:380px; right:510px; widtch:50px; height:50\"><br>");
   print("<input type=submit value=\"Valider l'inscription\" ></div>");
   print('</form>');
}

/**
 * Met à jour l'inscription dans table temporaire
 * @param string $pst_ins_date Date d'inscription
 * @param string $pst_ins_nom  Nom de l'adhérent
 * @param string $pst_ins_prenom Prénom de l'adhérent
 * @param string $pst_ins_adr1   Ligne Adresse 1
 * @param string $pst_ins_adr2   Ligne Adresse 2
 * @param string $pst_ins_cp     Code Postal
 * @param string $pst_ins_commune  Commune
 * @param string $pst_ins_pays    Pays
 * @param string $pst_ins_email_perso Email adhérent
 * @param string $pst_ins_site_web Site Web
 * @param string $pst_ins_telephone Téléphone
 * @param string $pst_ins_cache   Confidentialité (O|N)
 * @param string $pst_ins_idf_agc Identifiant AGC
 */ 
function preinscrit_adherent($pst_ins_date,$pst_ins_nom,$pst_ins_prenom,$pst_ins_adr1,$pst_ins_adr2,$pst_ins_cp,$pst_ins_commune,$pst_ins_commune,$pst_ins_pays,$pst_ins_email_perso,$pst_ins_site_web,$pst_ins_telephone,$pst_ins_cache,$pst_ins_idf_agc,$pst_ins_alea)
{
   global $connexionBD; 
   
   $pst_ins_nom = mysql_escape_string($pst_ins_nom);
   $pst_ins_prenom = mysql_escape_string($pst_ins_prenom);
   $pst_ins_adr1 = mysql_escape_string($pst_ins_adr1);
   $pst_ins_adr2 = mysql_escape_string($pst_ins_adr2);
   $pst_ins_cp = mysql_escape_string($pst_ins_cp);
   $pst_ins_commune = mysql_escape_string($pst_ins_commune);
   $pst_ins_pays = mysql_escape_string($pst_ins_pays);
   $pst_ins_email_perso = mysql_escape_string($pst_ins_email_perso);
   $pst_ins_site_web = mysql_escape_string($pst_ins_site_web);
   $pst_ins_telephone = mysql_escape_string($pst_ins_telephone);
   $pst_ins_cache = mysql_escape_string($pst_ins_cache);
   	  
	 $pst_ins_valid = "0";
   
   if (strlen($pst_ins_telephone)==10)         
        $pst_ins_telephone = wordwrap($pst_ins_telephone,2,' ',true);

     $connexionBD->execute_requete("insert into inscription_prov(ins_date, ins_nom, ins_prenom, ins_adr1, ins_adr2, ins_cp, ins_commune, ins_pays, 
	                                                              ins_email_perso, ins_site_web, ins_telephone, ins_cache, ins_idf_agc, ins_alea, ins_valid,ins_type) 
	                                 values($pst_ins_date, '$pst_ins_nom', '$pst_ins_prenom', '$pst_ins_adr1', '$pst_ins_adr2', '$pst_ins_cp', '$pst_ins_commune', '$pst_ins_pays',
												      '$pst_ins_email_perso', '$pst_ins_site_web', '$pst_ins_telephone', '$pst_ins_cache', '$pst_ins_idf_agc', '$pst_ins_alea', '$pst_ins_valid','".TYPE_INSCRIPTION."')");
} 
 
/*---------------------------------------------------------------------------     
  Démarrage du programme
  ---------------------------------------------------------------------------*/

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("$gst_chemin/Commun/menu.php");

switch ($gst_mode) {
  case 'GRILLE' : 
     saisie_adherent('','','','','','','','','','','O','0'); 
  break;
  case 'INSCRIPTION' : 
     
     if (get_magic_quotes_gpc())
     {
        if (ini_get('magic_quotes_sybase'))
        {
           $pst_ins_nom = strtoupper(trim($_POST['nom']));
           $pst_ins_prenom = ucfirst(trim($_POST['prenom']));
           $pst_ins_adr1 = trim($_POST['adr1']);
           $pst_ins_adr2 = trim($_POST['adr2']);
           $pst_ins_cp = $_POST['cp'];
           $pst_ins_commune = strtoupper(trim($_POST['commune']));
           $pst_ins_pays = $_POST['pays'];
           $pst_ins_email_perso = trim($_POST['email_perso']);
           $pst_ins_site_web = trim($_POST['site_web']);
           $pst_ins_telephone = trim($_POST['telephone']);
           $pst_ins_cache = $_POST['confidentiel'];
	         $pst_ins_idf_agc = (int) $_POST['idf_agc'];
        }
        else
        {
           $pst_ins_nom = strtoupper(stripslashes(trim($_POST['nom'])));
           $pst_ins_prenom = ucfirst(stripslashes(trim($_POST['prenom'])));
           $pst_ins_adr1 = stripslashes(trim($_POST['adr1']));
           $pst_ins_adr2 = stripslashes(trim($_POST['adr2']));
           $pst_ins_cp = stripslashes($_POST['cp']);
           $pst_ins_commune = strtoupper(stripslashes(trim($_POST['commune'])));
           $pst_ins_pays = stripslashes($_POST['pays']);
           $pst_ins_email_perso = stripslashes(trim($_POST['email_perso']));
           $pst_ins_site_web = stripslashes(trim($_POST['site_web']));
           $pst_ins_telephone = stripslashes(trim($_POST['telephone']));
           $pst_ins_cache = stripslashes($_POST['confidentiel']);
	         $pst_ins_idf_agc = (int) $_POST['idf_agc'];
        }
     }
     else
     {
        $pst_ins_nom = strtoupper(trim($_POST['nom']));
        $pst_ins_prenom = ucfirst(trim($_POST['prenom']));
        $pst_ins_adr1 = trim($_POST['adr1']);
        $pst_ins_adr2 = trim($_POST['adr2']);
        $pst_ins_cp = $_POST['cp'];
        $pst_ins_commune = strtoupper(trim($_POST['commune']));
        $pst_ins_pays = $_POST['pays'];
        $pst_ins_email_perso = trim($_POST['email_perso']);
        $pst_ins_site_web = trim($_POST['site_web']);
        $pst_ins_telephone = trim($_POST['telephone']);
        $pst_ins_cache = $_POST['confidentiel'];
	      $pst_ins_idf_agc = (int) $_POST['idf_agc'];
     }
     if (empty($pst_ins_nom)) die("Nom vide");
     if (empty($pst_ins_prenom)) die("Pr&eacute;om vide");
     if (empty($pst_ins_cp)) die("Code postal vide");
     if (empty($pst_ins_commune)) die("Commune vide");
     if (empty($pst_ins_pays)) die("Pays vide");
     if (empty($pst_ins_email_perso)) die("Email vide");
     mt_srand ((float) microtime() * 1000000);
	   $pst_ins_alea = mt_rand(1000,10000); 
     $dt_ins_date = date("Y-m-d");  
     if (chk_crypt($_POST['code']))
     {
        preinscrit_adherent($dt_ins_date,$pst_ins_nom,$pst_ins_prenom,$pst_ins_adr1,$pst_ins_adr2,$pst_ins_cp,$pst_ins_commune,$pst_ins_commune,$pst_ins_pays,$pst_ins_email_perso,$pst_ins_site_web,$pst_ins_telephone,$pst_ins_cache,$pst_ins_idf_agc,$pst_ins_alea);
        envoie_mail($dt_ins_date, $pst_ins_nom, $pst_ins_prenom, $pst_ins_email_perso, $pst_ins_idf_agc, $pst_ins_alea, $connexionBD->dernier_idf_insere());
        print("<div class=TITRE>Veuillez consulter votre messagerie et suivre les indications du mail qui vous a &eacute;t&eacute; adress&eacute;</div>");
     }
     else
     {
        print("<div class=IMPORTANT>Mauvais code !!!</div>");
        saisie_adherent($pst_ins_nom, $pst_ins_prenom, $pst_ins_adr1, $pst_ins_adr2, $pst_ins_cp, $pst_ins_commune, $pst_ins_pays,$pst_ins_email_perso, $pst_ins_site_web, $pst_ins_telephone, $pst_ins_cache, $pst_ins_idf_agc);
     } 
  break;
}  
print('</body></html>');
?>
