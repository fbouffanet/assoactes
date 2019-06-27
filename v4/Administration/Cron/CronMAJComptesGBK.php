<?php

require_once '/var/www/clients/client1/web12/web/v4/Commun/config.php';
require_once '/var/www/clients/client1/web12/web/v4/Commun/constantes.php';
require_once '/var/www/clients/client1/web12/web/v4/Commun/ConnexionBD.php';
require_once '/var/www/clients/client1/web12/web/v4/Commun/Adherent.php';

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$a_liste_idf=$connexionBD->sql_select("select idf , annee_cotisation, statut from adherent where statut = 'B' or statut = 'I'   and annee_cotisation >=  YEAR( NOW( )) order by idf ");

$st_cmd_gbk = '';
foreach ($a_liste_idf as $i_idf)
{
  $st_cmd_gbk .= "set ".PREFIXE_ADH_GBK.$i_idf." ".NB_POINTS_GBK."\r\n";
}

if (!Adherent::execute_cmd_gbk($st_cmd_gbk))
{
    $st_message_erreur = Adherent::erreur_gbk();
    $st_requete = "select email_perso from adherent adht join privilege p on (adht.idf=p.idf_adherent) where p.droit='".DROIT_GENEABANK."' order by email_perso";
    $a_adresses = $connexionBD->sql_select($st_requete);
    $st_entete  = "From: ".LIB_ASSO."<".EMAIL_DIRASSO.">\n>";
    $st_entete .= "Reply-to: ".LIB_ASSO."<".EMAIL_DIRASSO.">\n";
    $st_entete .= "Cc: ".EMAIL_DIRASSO."\n";
    $st_entete .= "Bcc: fbouffanet@yahoo.fr\n";
    $st_entete .= "Reply-to: ".SIGLE_ASSO." <".EMAIL_DIRASSO.">\n";
    $st_entete .= 'MIME-Version: 1.0' . "\n"; 
    $st_sujet = "Test Comptes GBK";
    $st_sujet = "Erreur lors de la maj des comptes GBK";
    $st_adresses =  join(',',$a_adresses);        
    mail($st_adresses,$st_sujet,$st_message_erreur, $st_entete);
}

?>