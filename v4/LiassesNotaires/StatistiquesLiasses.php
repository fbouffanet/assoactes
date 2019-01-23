<?php

require_once('../Commun/Identification.php');
require_once('../Commun/commun.php');
require_once('../Commun/constantes.php');
require_once('../Commun/config.php');
require_once('../Commun/ConnexionBD.php');
require_once('../RequeteRecherche.php');
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/Benchmark.inc');
require_once('../Commun/VerificationDroits.php');

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<Head>\n");
print('<meta http-equiv="content-language" content="fr">');
print('<link rel="shortcut icon" href="../images/favicon.ico">');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print('<script type="text/javascript">');
print('		function forcedPopUp(urlSelf, urlBlank){');
print('			window.open(urlBlank);');
print('			window.location.href = urlSelf;');
print('		}');
print('</script>');

print("<script src='../Commun/menu.js' type='text/javascript'></script>");
print("<title>Base AGC: Statistiques sur les liasses notariales</title>");
print('</Head>');

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

$requeteRecherche = new RequeteRecherche($connexionBD);    

require_once('../Commun/menu.php');

/* ------------------------------------------------------
   constitution des requ�tes
*/   
//-----------------------------Ensemble 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%'";
list($i_nb_2E_ante_1793, $i_nb_2E_post_1793, $i_nb_2E_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Relev�s 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse		= liasse.cote_liasse ".
		      "              join liasse_releve			on liasse_releve.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%'";
list($i_nb_2E_releve_ante_1793, $i_nb_2E_releve_post_1793, $i_nb_2E_releve_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Publi�s papier 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates					on liasse_dates.cote_liasse					= liasse.cote_liasse ".
			  "              join liasse_publication_papier		on liasse_publication_papier.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%'";
list($i_nb_2E_publi_ante_1793, $i_nb_2E_publi_post_1793, $i_nb_2E_publi_total) = $connexionBD->sql_select_liste($st_requete);	

//-----------------------------Photographi�s 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse		= liasse.cote_liasse ".
			  "              join liasse_photo			on liasse_photo.cote_liasse		= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%'";
list($i_nb_2E_photo_ante_1793, $i_nb_2E_photo_post_1793, $i_nb_2E_photo_total) = $connexionBD->sql_select_liste($st_requete);	

//-----------------------------R�pertoires 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.idf_forme_liasse = 9";
list($i_nb_2E_repert_ante_1793, $i_nb_2E_repert_post_1793, $i_nb_2E_repert_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------R�pertoires relev�s 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse		= liasse.cote_liasse ".
		      "              join liasse_releve			on liasse_releve.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.idf_forme_liasse = 9";
list($i_nb_2E_repert_releve_ante_1793, $i_nb_2E_repert_releve_post_1793, $i_nb_2E_repert_releve_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------R�pertoires publi�s papier 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates					on liasse_dates.cote_liasse					= liasse.cote_liasse ".
			  "              join liasse_publication_papier		on liasse_publication_papier.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.idf_forme_liasse = 9";
list($i_nb_2E_repert_publi_ante_1793, $i_nb_2E_repert_publi_post_1793, $i_nb_2E_repert_publi_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------R�pertoires photographi�s 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse		= liasse.cote_liasse ".
			  "              join liasse_photo			on liasse_photo.cote_liasse		= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.idf_forme_liasse = 9";
list($i_nb_2E_repert_photo_ante_1793, $i_nb_2E_repert_photo_post_1793, $i_nb_2E_repert_photo_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Non communicables 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.in_liasse_consultable = 0";
list($i_nb_2E_non_comm_ante_1793, $i_nb_2E_non_comm_post_1793, $i_nb_2E_non_comm_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Non communicables relev�s 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse		= liasse.cote_liasse ".
		      "              join liasse_releve			on liasse_releve.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.in_liasse_consultable = 0";
list($i_nb_2E_non_comm_releve_ante_1793, $i_nb_2E_non_comm_releve_post_1793, $i_nb_2E_non_comm_releve_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Non communicables publi�s papier 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates					on liasse_dates.cote_liasse					= liasse.cote_liasse ".
			  "              join liasse_publication_papier		on liasse_publication_papier.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.in_liasse_consultable = 0";
list($i_nb_2E_non_comm_publi_ante_1793, $i_nb_2E_non_comm_publi_post_1793, $i_nb_2E_non_comm_publi_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Non communicables photographi�s 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse		= liasse.cote_liasse ".
			  "              join liasse_photo			on liasse_photo.cote_liasse		= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.in_liasse_consultable = 0";
list($i_nb_2E_non_comm_photo_ante_1793, $i_nb_2E_non_comm_photo_post_1793, $i_nb_2E_non_comm_photo_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Peu de pi�ces 16-2E
$st_requete = "SELECT count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates			on liasse_dates.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse like '2E%' and liasse.idf_forme_liasse = 2";
list($i_nb_2E_peu_ante_1793, $i_nb_2E_peu_post_1793, $i_nb_2E_peu_total) = $connexionBD->sql_select_liste($st_requete);	
			 
//-----------------------------Ensemble autres s�ries
$st_requete = "SELECT substr(liasse.cote_liasse, 1, instr(liasse.cote_liasse, '-')-1) as serie, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then liasse.cote_liasse else null end) as nb_ante_1793, ".
              "       count(distinct case when liasse_dates.date_debut_periode < str_to_date('1793/01/01', '%Y/%m/%d') then null else liasse.cote_liasse end) as nb_post_1793,".
              "       count(distinct liasse.cote_liasse) as nb_tot ".
              "FROM   liasse join liasse_dates	on liasse_dates.cote_liasse	= liasse.cote_liasse ".
		      "WHERE  liasse.cote_liasse not like '2E%' ".
			  "GROUP BY substr(liasse.cote_liasse, 1, instr(liasse.cote_liasse, '-')-1)";
$a_liasses=$connexionBD->sql_select_multiple($st_requete);
			  
/* ------------------------------------------------------
   constitution de la log 
*/   
$gst_adresse_ip = $_SERVER['REMOTE_ADDR'];
$pf=@fopen("$gst_rep_logs/requetes_action_liasse.log",'a');
list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
$i_mois++;
$i_annee+=1900;
$st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
$st_chaine_log = join(';',array($st_date_log,$_SESSION['ident'],'statistiques', ''));
@fwrite($pf,"$st_chaine_log\n"); 
@fclose($pf);

/* ------------------------------------------------------
   affichage de l'ent�te 
*/   
print("<body>");
print("<div class='TITRE'>Statistiques sur les liasses</div><br>");
print("<table border='1' cellpadding='0' cellspacing='0' align='center' width='720'><caption class='TITRE'>AD16 - 2E</caption>");
print('<tr class="SOUSTITRE">'.
      '<td align="center" width="40%">Nombre de liasses</td>'.
      '<td align="center" width="20%">Avant 1793</td>'.
      '<td align="center" width="20%">Depuis 1793</td>'.
      '<td align="center" width="20%">Total</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Ensemble des liasses</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Relev&eacute;es</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_releve_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_releve_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_releve_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Publi&eacute;es papier</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_publi_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_publi_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_publi_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Photographi&eacute;es</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_photo_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_photo_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_photo_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Liasses r&eacute;pertoires</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Relev&eacute;es</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_releve_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_releve_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_releve_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Publi&eacute;es papier</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_publi_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_publi_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_publi_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Photographi&eacute;es</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_photo_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_photo_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_repert_photo_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Liasses non communicables</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Relev&eacute;es</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_releve_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_releve_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_releve_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Publi&eacute;es papier</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_publi_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_publi_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_publi_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Photographi&eacute;es</i></td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_photo_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_photo_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_non_comm_photo_total.'</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Liasses peu de pi&egrave;ces</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_peu_ante_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_peu_post_1793.'</td>'.
      '<td align="center" width="20%">'.$i_nb_2E_peu_total.'</td>'.
	  '</tr>');
print('<tr class="SOUSTITRE">'.
      '<td align="center" width="40%">% sur total</td>'.
      '<td align="center" width="20%">Avant 1793</td>'.
      '<td align="center" width="20%">Depuis 1793</td>'.
      '<td align="center" width="20%">Total</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Relev&eacute;es</i></td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_releve_ante_1793/$i_nb_2E_ante_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_releve_post_1793/$i_nb_2E_post_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_releve_total/$i_nb_2E_total*100,2).' %</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Publi&eacute;es papier</i></td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_publi_ante_1793/$i_nb_2E_ante_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_publi_post_1793/$i_nb_2E_post_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_publi_total/$i_nb_2E_total*100,2).' %</td>'.
	  '</tr>');
print('<tr class="ligne_paire" height="10">'.
      '<td align="center" width="40%"><i>Photographi&eacute;es</i></td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_photo_ante_1793/$i_nb_2E_ante_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_photo_post_1793/$i_nb_2E_post_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_photo_total/$i_nb_2E_total*100,2).' %</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Liasses r&eacute;pertoires</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_repert_ante_1793/$i_nb_2E_ante_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_repert_post_1793/$i_nb_2E_post_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_repert_total/$i_nb_2E_total*100,2).' %</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Liasses non communicables</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_non_comm_ante_1793/$i_nb_2E_ante_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_non_comm_post_1793/$i_nb_2E_post_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_non_comm_total/$i_nb_2E_total*100,2).' %</td>'.
	  '</tr>');
print('<tr class="ligne_impaire" height="10">'.
      '<td align="center" width="40%">Liasses peu de pi&egrave;ces</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_peu_ante_1793/$i_nb_2E_ante_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_peu_post_1793/$i_nb_2E_post_1793*100,2).' %</td>'.
      '<td align="center" width="20%">'.round($i_nb_2E_peu_total/$i_nb_2E_total*100,2).' %</td>'.
	  '</tr>');
print('</table ><br>');
print("<table border='1' cellpadding='0' cellspacing='0' align='center' width='720'><caption class='TITRE'>Autres s&eacute;ries</caption>");
print('<tr class="SOUSTITRE">'.
      '<td align="center" width="40%">S&eacute;rie</td>'.
      '<td align="center" width="20%">Avant 1793</td>'.
      '<td align="center" width="20%">Depuis 1793</td>'.
      '<td align="center" width="20%">Total</td>'.
	  '</tr>');
foreach ($a_liasses as $a_liasse) {
	list($st_serie, $i_nb_autre_ante_1793, $i_nb_autre_post_1793, $i_nb_autre_total) = $a_liasse;
	print('<tr class="ligne_impaire" height="10">'.
		  '<td align="center" width="40%">'.$st_serie.'</td>'.
		  '<td align="center" width="20%">'.$i_nb_autre_ante_1793.'</td>'.
		  '<td align="center" width="20%">'.$i_nb_autre_post_1793.'</td>'.
		  '<td align="center" width="20%">'.$i_nb_autre_total.'</td>'.
		  '</tr>');
	}
print('</table >');
print('<br><div align="center" style="font-size:11px;color:#4f6b72"><i>Liasses relev�es : liasses dont les CM ont �t� retranscrits</i></div>');
print("</body></html>");
?>