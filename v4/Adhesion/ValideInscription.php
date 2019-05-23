<?php
//http://127.0.0.1:8888/ValideInscription.php
//http://127.0.0.1:8888/ValideInscription.php?alea=3969&idf_agc=0&idf_prov=4578

$gst_chemin = "../";
//$gst_chemin = "";
require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
//require_once("$gst_chemin/Commun/Identification.php");

// La page est reservee uniquement aux gens ayant les droits utilitaires
//require_once("$gst_chemin/Commun/VerificationDroits.php");
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/commun.php");                    
require_once("$gst_chemin/Commun/Adherent.php"); 

/*---------------------------------------------------------------------------
  Démarrage du programme
  ---------------------------------------------------------------------------*/

$alea = isset( $_GET['alea'])? $_GET['alea'] : '0';
$idf_agc = isset( $_GET['idf_agc'])? $_GET['idf_agc'] : '0';
$idf_prov = isset( $_GET['idf_prov'])? $_GET['idf_prov'] : '0';

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

/*
Lorsque l'adhérent clique sur le lien, le script ValideInscription.php est exécuté
On va vérifier que le clef de la table correspond à la clef fournie
par l'adhérent (clef + numéro d'adhérent).
Si c'est le cas, on poursuit l'inscription sinon, on affiche un message d'erreur.
*/
$st_requete = "select idf, ins_nom, ins_prenom,ins_cp,ins_pays,ins_email_perso from inscription_prov where idf = '$idf_prov' and ins_alea = '$alea'";
$a_retour_prov = $connexionBD->sql_select_liste($st_requete);
if (empty($a_retour_prov))   // Pas d'enregistrement
{
	$mess = "Erreur d'acces a l'inscription provisoire (1)";
  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'Inscription.php';
  header("Location: $gst_url_inscription?erreur=$mess");
  exit;
}	
// On l'a trouvé, on va plus loin
else
{
   list($gi_idf_ins,$gst_nom_ins,$gst_prenom_ins,$gst_cp_ins,$gst_pays_ins,$gst_email_ins)= $a_retour_prov;
   print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
   print("<head>");
   print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
   print('<meta http-equiv="content-language" content="fr">');
   print("<link href='$gst_chemin/Commun/Styles.css' type='text/css' rel='stylesheet'>");
   print("<script src='$gst_chemin/Commun/jquery-min.js' type='text/javascript'></script>");
   print("<script src='$gst_chemin/Commun/menu.js' type='text/javascript'></script>");

   print('<title>Validation de votre Inscription en ligne</title>');
   print('</head>');
   print("<body>\n");
   require_once("$gst_chemin/Commun/menu.php");
   
   $mess = "";
   // Essaye de récupérer l'ancien numéro de l'adhérent si le numéro n'est pas saisie et son adresse email correspond à un adhérent connu
   if (empty($idf_agc))   
	 {
        $st_requete = "select idf,mdp from adherent where email_perso='$gst_email_ins'";
        $a_retour = $connexionBD->sql_select_liste($st_requete);
        if (count($a_retour)>0)
        {
            list($idf_agc,$st_mdp) = $a_retour;
		        $st_requete = "update `inscription_prov` set ins_idf_agc = '$idf_agc',ins_mdp='$st_mdp' where idf = $idf_prov";
            $connexionBD->execute_requete($st_requete);
        }    
   }
   
   if (!empty($idf_agc))   // recherche de l'adhérent
	 {
      $st_requete = "select max(idf) from adherent";
      $i_max_idf = $connexionBD->sql_select1($st_requete);
      $st_requete = "select idf, nom, prenom, statut,annee_cotisation, cp,pays from adherent where idf = $idf_agc";
      $a_retour_adh = $connexionBD->sql_select_liste($st_requete);
		  /*
		  Si l'ancien numéro d'inscription est défini mais n'existe pas
      dans la table des adhérents, on garde également le numéro.
      */
      if (empty($a_retour_adh) && $idf_agc<$i_max_idf )   // numéro agc inexistant
	    {
	      $mess = "Votre inscription sera valid&eacute;e avec le num&eacute;ro ".$idf_agc." que vous avez saisi (2)\n";
	    }
   	  else
	    {
	       list($gi_idf,$gst_nom,$gst_prenom,$gst_status,$gi_annee_cotisation,$gst_cp,$gst_pays) =$a_retour_adh;
         $aujourdhui = getdate();
         /*
         Si l'ancien numéro d'inscription est défini mais est déjà associé
         à un adhérent qui n'est pas suspendu alors on le met à nul.
         L'adhérent sera inscrit sous un nouveau numéro
         Si la date d'inscription est après septembre, on considère qu'il s'agit d'une tentative de réadhésion
         */
         if ($gst_status != 'S' && $aujourdhui['mon']<=9)  // Statut de l'adhérent non suspendu --> on remet à 0 dans l'inscription provisoire
         {
	         $st_requete = "update `inscription_prov` set ins_idf_agc = '0' where idf = $idf_prov";
           $connexionBD->execute_requete($st_requete);
				   $mess = "Votre inscription sera valid&eacute;e avec un nouveau num&eacute;ro (3)\n";
         }
         /*
         Si l'ancien numéro d'inscription est défini et correspond à un
         adhérent suspendu et que les noms et prénoms coincident
         avec le nom de l'adhérent, on garde le numéro sinon on le met à nul
        */
         else                        // Statut de l'adhérent suspendu  --> même nom et prénom alors on garde le numéro
         {
            setlocale(LC_CTYPE, 'fr_FR.UTF8');
            $st_nom_ins = trim(str_replace('-',' ',strtoupper(iconv("cp1252", "ASCII//TRANSLIT",$gst_nom_ins))));
            $st_nom = trim(str_replace('-',' ',strtoupper(iconv("cp1252", "ASCII//TRANSLIT",$gst_nom))));
            $st_prenom_ins = trim(str_replace('-',' ',strtoupper(iconv("cp1252", "ASCII//TRANSLIT",$gst_prenom_ins))));
            $st_prenom = trim(str_replace('-',' ',strtoupper(iconv("cp1252", "ASCII//TRANSLIT",$gst_prenom))));
            
            if ($st_nom_ins == $st_nom &&   // nom et prénom identiques
	            $st_prenom_ins == $st_prenom)
	          {
			        $mess = "Votre inscription sera valid&eacute;e avec le num&eacute;ro ".$idf_agc." que vous avez saisi ou que nous avons retrouv&eacute; (4)";
              $st_requete = "update  `inscription_prov` i_p join `adherent` adh on (i_p.ins_idf_agc=adh.idf) set i_p.ins_mdp=adh.mdp where i_p.ins_idf_agc=$idf_agc ";
              $connexionBD->execute_requete($st_requete); 
			      }
			      else
			      {
              // on remet à 0 dans l'inscription provisoire
		          $st_requete = "update `inscription_prov` set ins_idf_agc = '0' where idf = $idf_prov";
              $connexionBD->execute_requete($st_requete);
				      $mess = "Votre inscription sera valid&eacute;e avec un nouveau num&eacute;ro (5)\n";
	          }
         }
	    }
	 }
   // Tout est ok, on poursuit vers le paiement en ligne de l'inscription.
}
print("<div class=accueil_centre>");
print("<div align=center class=TITRE>Validation de votre inscription</div>\n");
print("<div style=\"text-align: center; font-size: large;\"><br><div>$mess</div><br></div>\n");
print("<form method=\"post\" action=\"Payement.php\">\n");
print("<div><table border=1>\n");
print("<tr><th>Nom</th><td>$gst_nom_ins</td></tr>\n");
print("<tr><th>Pr&eacute;nom</th><td>$gst_prenom_ins</td></tr>\n");
print("<tr><th>Code Postal</th><td>$gst_cp_ins</td></tr>\n");
print("<tr><th>Pays</th><td>$gst_pays_ins</td></tr>\n");
print("</table><br></div>\n");
print("<input type=hidden name=nom value=\"$gst_nom_ins\">\n");
print("<input type=hidden name=prenom value=\"$gst_prenom_ins\">\n");
print("<input type=hidden name=idf_prov value=\"$idf_prov\">\n");
print("<input type=hidden name=idf_agc value=\"$idf_agc\">\n");
print("<input type=hidden name=type value=\"".TYPE_INSCRIPTION."\">\n");
$adherent = new Adherent($connexionBD,$idf_agc);
print($adherent->formulaire_type_inscription($gst_pays_ins,$gst_cp_ins));
print $adherent->formulaire_aides_possibles();
print $adherent->formulaire_origine();
print("<div align=center><br><input type=\"submit\" value=\"Procéder au réglement\"></div></form></div>\n");
print('</body></html>');
?>