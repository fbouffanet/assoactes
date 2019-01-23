<?php

//Serveur OVH  
/*
//$gst_serveur_bd  = '178.33.180.71';
$gst_serveur_bd  = '127.0.0.1';
$gst_utilisateur_bd = 'usrgenea16basev4';
$gst_mdp_utilisateur_bd = '2!bTOuMx';
$gst_nom_bd = 'dbgenea16v4';
$gst_administrateur_gbk = 'agcharente';
$gst_mdp_administrateur_gbk = 'fc16hpb9';
$gst_url_site = 'http://adherents.genea16.net';
$gst_url_serveur = "http://adherents.genea16.net";
$gst_rep_site = "/var/www/genea16.net/web/v4";
$gst_url_readhesion = 'http://readhesion.genea16.net';
$gst_url_inscription = 'http://inscription.genea16.net';
$gst_url_interrogation_geneabank = "http://geneabank.genea16.net/index.php";
*/

//Serveur ispconfi-02.genea16.net

$gst_serveur_bd  = "localhost";
$gst_utilisateur_bd = "usrdefaultv4";
$gst_mdp_utilisateur_bd = "nhjpBSG!3";
$gst_nom_bd = "dbgenea16v4";
$gst_url_site = 'https://www.adherents.ispconfig-02.genea16.net';
//$gst_url_site = $_SERVER["SERVER_NAME"];
$gst_url_serveur = "https://www.adherents.ispconfig-02.genea16.net";
//$gst_url_serveur = $_SERVER["SERVER_NAME"];
$gst_rep_site = $_SERVER['DOCUMENT_ROOT']."/v4";
$gst_url_readhesion = 'https://www.adherents.ispconfig-02.genea16.net/Readhesion/';
$gst_url_inscription = 'https://www.adherents.ispconfig-02.genea16.net/Adhesion/';
$gst_url_interrogation_geneabank = "http://geneabank.genea16.net/index.php";
$gst_jeu_de_caracteres_par_defaut = 'latin1';


//GénéaBank
$gst_url_indexes_geneabank = "http://releveur.adherents.ispconfig-02.genea16.net/IndexGeneaBank";
$gst_url_interrogation_geneabank = "http://geneabank.genea16.net/index.php";
$gst_url_reponse_gbk ="http://geneabank.genea16.net/AfficheActes.php";

//$gst_repertoire_indexes_geneabank = "$gst_rep_site/releveur/IndexGeneaBank";
$gst_repertoire_indexes_geneabank = "/var/www/clients/client1/web3/web/releveur/IndexGeneaBank";
$gst_index_couple_geneabank = 'gbkcpl.zip';
$gst_index_patros_geneabank = 'gbkpatros.zip';
$gst_compteurs_adherents_geneabank = 'compteurs_adherent_gbk.txt';
$gst_compteurs_communes_geneabank = 'compteurs_communes_gbk.txt';
$gst_code_dpt_geneabank = 'F16';
$gst_code_region_geneabank = 'PCH';
$gst_code_pays_geneabank = 'FRA';
$gst_pays_geneabank = 'France';
$gst_code_type_geneabank = 'C';
$gst_asso_gbk = 'agcharente';
$gi_nb_demandes_gbk = 100;


//commun V4
$gst_url_adhesion = "$gst_url_site/Adhesion"; 
$gst_url_validation = "$gst_url_adhesion/ValideInscription.php"; 
$gst_url_site = "$gst_url_serveur";  
$gst_url_images = "$gst_url_site/images";
$gst_repertoire_telechargement = "$gst_rep_site/Administration/telechargements";
$gst_repertoire_chargement_actes = '/tmp';
$gst_url_telechargement_actes = $gst_url_site."Administration/telechargements";
$gi_max_taille_upload = 6000000; // Taille maximale d'upload en octets
$gi_nb_max_reponses = 100;
$gst_rep_trombinoscope = "$gst_rep_site/trombinoscope";
$gst_url_trombinoscope = "$gst_url_site/trombinoscope";
$gst_url_sortie = "http://www.genea16.net";
$gst_emails_gestbase = "pascal.frebot@neuf.fr, jeanclaude.mignon@orange.fr, veillon.gensac@free.fr, fbouffanet@yahoo.fr";
$gst_email_agcinfo ='agc-info@genea16.net';

// TD
$gst_rep_photos_td = "$gst_rep_site/TD/photos";
$gst_rep_photos_modifs = "$gst_rep_site/photos";

// Index AD
$gst_repertoire_indexes_AD = "$gst_rep_site/vitrine/IndexAD";
$gst_url_indexes_AD = "http://www.genea16.net/IndexAD";

//$gst_parametres_load_data = 'LOCAL';
$gst_parametres_load_data = '';
$gst_rep_logs = "$gst_rep_site/logs";
$gst_time_zone ='Europe/Paris';
$gi_precision_prenom=7;

?>
