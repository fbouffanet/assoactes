<?php
//http://127.0.0.1:8888/Gestion_Photos.php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits utilitaires
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_RELEVES);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");
?>
<script type='text/javascript'>
function VerifieSuppression(Formulaire,IdfElement)
{
  var chaine="";
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)
      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }
      
  }
  if (chaine=="")
  {
     alert("Pas de photo selectionnee");
  }
  else
  {
   	 Message="Etes-vous sûr de supprimer ces photos :\n"+chaine+"?";
   	 if (confirm(Message))                        
   	 {                                                                                                                                    
        document.forms[Formulaire].submit();                                                           
     }
  }
}
function VerifieChamps(Formulaire)
{
   var fourchette=document.forms[Formulaire].fourchette.value;
   var nbr_photos=document.forms[Formulaire].nbr_photos.value;
   var poids_photos=document.forms[Formulaire].poids_photos.value;
   var dt_prise=document.forms[Formulaire].dt_prise.value;
   var ListeErreurs	= "";
   if (fourchette=="")
   {
      ListeErreurs+="La fourchette est obligatoire\n";
   }
   if (nbr_photos=="")
   {
      ListeErreurs+="Le nombre de photos est obligatoire\n";
   }
   if (nbr_photos!="" && isNaN(nbr_photos))
   {
      ListeErreurs+="Le nombre de photos doit etre un nombre\n";
   }
   if (poids_photos=="")
   {
      ListeErreurs+="Le poids des photos est obligatoire\n";
   }
   if (poids_photos!="" && isNaN(poids_photos))
   {
      ListeErreurs+="Le poids des photos doit etre un nombre\n";
   }
   if (!dt_prise.match("^[0-9]{2}\/[0-9]{2}/[0-9]{4}$"))
   {
      ListeErreurs+="La date de prise n'est pas au format JJ/MM/AAAA\n";
   }
   if (ListeErreurs!= "")
   {
      alert(ListeErreurs);
   }
   else
   {
      document.forms[Formulaire].submit();
   }
   
}
</script>
<?php
print('</head>');
print('<body>');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_photo = (int) $_GET['mod'];
}
else
   $gi_idf_photo = isset ( $_POST['idf_photo']) ? (int) $_POST['idf_photo'] : 0;

$gi_session_num_page_cour =   isset($_SESSION['num_page_photos']) ? $_SESSION['num_page_photos']: 1;
$gi_num_page_cour = empty($_GET['num_page']) ? $gi_session_num_page_cour : $_GET['num_page'];




/**
 * Affiche la liste des communes
 * @param object $pconnexionBD  connexion à la base de données
 * @param string $pst_commune_a_chercher commune à chercher 
 */ 
function menu_liste($pconnexionBD,$pst_commune_a_chercher)
{
   global $gi_num_page_cour;
    $st_requete = "SELECT DISTINCT (left( ca.nom, 1 )) AS init FROM `commune_acte` ca join `photos` p on (p.id_commune=ca.idf) ORDER BY init";
   $a_initiales_communes = $pconnexionBD->sql_select($st_requete);

   
   print("</div><div class=alignCenter>");
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   if ($pst_commune_a_chercher=='')
   {
     $i_session_initiale = isset($_SESSION['initiale_com']) ? $_SESSION['initiale_com'] : $a_initiales_communes[0];
     $gc_initiale = empty($_GET['initiale_com']) ? $i_session_initiale : $_GET['initiale_com'];
   }
   else
   {
      $gc_initiale = strtoupper(substr($pst_commune_a_chercher,0,1));
      if ($gc_initiale=='*') $gc_initiale = $a_initiales_communes[0];
   }
   if (!in_array($gc_initiale,$a_initiales_communes))
      $gc_initiale = $a_initiales_communes[0];
   $_SESSION['initiale_com'] = $gc_initiale;
   $_SESSION['num_page_photos']= $gi_num_page_cour;   
   foreach ($a_initiales_communes as $c_initiale)
   {
     if ($c_initiale==$gc_initiale)
        print("<span style=\"font-weight: bold;\"
>$c_initiale </span>");
     else
        print("<a href=".$_SERVER['PHP_SELF']."?initiale_com=$c_initiale>$c_initiale</a> ");
   }
   print("</div><br>");
   $pst_commune_a_chercher = str_replace('*','%',$pst_commune_a_chercher);  
   $st_requete = ($pst_commune_a_chercher=='') ? "select p.idf,ca.nom,p.fourchette,ca2.libelle from `photos` p join `commune_acte` ca  on (p.id_commune=ca.idf ) join `collection_acte` ca2 on (p.id_collection=ca2.idf) where ca.nom like '$gc_initiale%' order by ca.nom,p.fourchette,ca2.libelle" : "select p.idf,ca.nom,p.fourchette,ca2.libelle from `photos` p join `commune_acte` ca  on (p.id_commune=ca.idf ) join `collection_acte` ca2 on (p.id_collection=ca2.idf) where ca.nom like '$pst_commune_a_chercher' order by ca.nom,p.fourchette,ca2.libelle";
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=\"LISTE\">");
   print("<div align=center>");   
   print('Commune : <input name="commune_a_chercher" value="" size="25" maxlength="25" type="Text">');
   print(' <input type=submit value=Chercher><br>');
   print('<div size="-1">Vous pouvez mettre le caract&egrave;re "*" pour chercher sur une racine (ex.: saint*)</div></div><br>');
   print("</form><form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">"); 
   $a_liste_photos = $pconnexionBD->liste_valeur_par_clef($st_requete);
   $i_nb_photos =count($a_liste_photos); 
   if ($i_nb_photos!=0)
   {        
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_photos,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Commune','Fourchette','Collection','Modifier','Supprimer'));
      $pagination->init_param_bd($pconnexionBD,$st_requete);
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      $pagination->affiche_tableau_edition();
      print("<br>");
      $pagination->affiche_entete_liens_navigation();      
   }
   else
     print("<div align=center>Pas de photos</div>\n");
    
   print("<input type=hidden name=mode value=SUPPRIMER>");
   print("<br><div align=center><input type=button value=\"Supprimer les photos sélectionnées\" ONCLICK=VerifieSuppression(0,\"supp[]\")></div>");   
   print("</form>");  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=MENU_AJOUTER>");  
   print("<div align=center><input type=submit value=\"Ajouter une photo\"></div>");  
   print('</form>');
   print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" >");
   print('<input type="hidden" name="MAX_FILE_SIZE" value="$gi_max_taille_upload" />'); 
   print('<input type="hidden" name="mode" value="CHARGER" />');
   print('<div align=center>Fichier <span class=IMPORTANT>CSV</span> des photos: <input name="Photos" type="file" /></div><br>');
   print('<div align=center><input type="submit" value="Charger les photos"/></div>');
   print('</form>');
}

/**
 * Affiche de la table d'édition
 * @param integer $pi_id_commune identifiant de la commune
 * @param string $pst_fourchette Fourchette de la photo
 * @param integer $pi_id_collection identifiant de la collection
 * @param integer $pi_nbr_photos nombres de photos
 * @param integer $pi_poids poids de photos 
 * @param integer $pid_auteur auteur de photos 
 * @param string $pcrel_pap Relevé papier (O|N)
 * @param string $pcrel_base Relevé Base (O|N)
 * @param string $pcrel_td Relevé TD (O|N) 
 * @param date $pdt_prise Date de prise de vue 
 * @param array $pa_communes liste des communes
 * @param array $pa_collections liste des collections    
 * @param array $pa_adherents liste des auteurs (adhérents) 
 */ 
function menu_edition($pi_id_commune,$pst_fourchette,$pi_id_collection,$pi_nbr_photos,$pi_poids,$pid_auteur,$pcrel_pap,$pcrel_base,$pcrel_td,$pdt_prise,$pa_communes,$pa_collections,$pa_adherents)
{
   $a_oui_non = array('O'=>'Oui','N'=>'Non');
	if ($pdt_prise != '') 
	{
	   $pdt_prise = sprintf ("%02s/%02s/%4s", substr($pdt_prise,8,2), substr($pdt_prise,5,2), substr($pdt_prise,0,4));
   }		
   print("<table border=1>");
   print("<tr><th>Commune</th><td><select name=id_commune>".chaine_select_options($pi_id_commune,$pa_communes)."</select></td></tr>");
   print("<tr><th>Fourchette (aaaa-aaaa)</th><td><input type=\"text\" maxsize=20 size=14 name=fourchette value=\"$pst_fourchette\"></td></tr>");
   print("<tr><th>Collection</th><td><select name=id_collection>".chaine_select_options($pi_id_collection,$pa_collections)."</select></td></tr>");
   print("<tr><th>Nombre de photos</th><td><input type=\"text\" maxsize=5 size=5 name=nbr_photos value=\"$pi_nbr_photos\"></td></tr>");
   print("<tr><th>Poids des photos</th><td><input type=\"text\" maxsize=5 size=5 name=poids_photos value=\"$pi_poids\"></td></tr>");
   print("<tr><th>Auteur</th><td><select name=id_auteur>".chaine_select_options($pid_auteur,$pa_adherents)."</select></td></tr>");
   print("<tr><th>Releve Papier</th><td><select name=rel_pap>".chaine_select_options($pcrel_pap,$a_oui_non)."</select></td></tr>");
   print("<tr><th>Releve Base</th><td><select name=rel_base>".chaine_select_options($pcrel_base,$a_oui_non)."</select></td></tr>");
   print("<tr><th>Releve TD</th><td><select name=rel_td>".chaine_select_options($pcrel_td,$a_oui_non)."</select></td></tr>");
   print("<tr><th>Date prise de vue (jj/mm/aaaa)</th><td><input type=\"text\" maxsize=10 size=10 name=dt_prise value=\"$pdt_prise\"></td></tr>");
   print("</table>");
}

/** Affiche le menu de modification d'une collection de photos
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_photo Identifiant de la collection de photo
 * @param array $pa_communes Liste des commmunes
 * @param array $pa_collections Liste des collections
 * @param array $pa_adherents Liste des adhérents
 */ 
function menu_modifier($pconnexionBD,$pi_idf_photo,$pa_communes,$pa_collections,$pa_adherents)
{
   $st_requete = "select `id_commune`,`fourchette`,`id_collection`,`nbr_photos`,`poids_total`,`id_auteur`,`releve_papier`,`releve_base`,`releve_td`,`date_prise` from `photos` where idf=$pi_idf_photo";
   list($i_id_commune,$st_fourchette,$i_id_collection,$i_nbr_photos,$i_poids,$id_auteur,$crel_pap,$crel_base,$crel_td,$dt_prise)=$pconnexionBD->sql_select_liste($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=MODIFIER>");
   print("<input type=hidden name=idf_photo value=$pi_idf_photo>");
   print("<div align=center>");
   menu_edition($i_id_commune,$st_fourchette,$i_id_collection,$i_nbr_photos,$i_poids,$id_auteur,$crel_pap,$crel_base,$crel_td,$dt_prise,$pa_communes,$pa_collections,$pa_adherents);   
   print("</div><br>");
   print("<div align=center><input type=button value=\"Modifier\" ONCLICK=VerifieChamps(0)></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

/** Affiche le menu d'ajout d'une photo
 * @param array $pa_communes Liste des commmunes
 * @param array $pa_collections Liste des collections
 * @param array $pa_adherents Liste des adhérents
 */ 
function menu_ajouter($pa_communes,$pa_collections,$pa_adherents)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=AJOUTER>");
   print("<div align=center>");
   menu_edition(0,'',0,'','',0,'N','N','N','',$pa_communes,$pa_collections,$pa_adherents);
   print("</div><br>");
   print("<div align=center><input type=button value=\"Ajouter\" ONCLICK=VerifieChamps(0)></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

/**
 * Charge les photos dans la base
 * @param object $pconnexionBD Connexion à la base
 * @param string $pst_parametres_load_data parametres du load data ('local'|'')  
 */ 
function charge_photos($pconnexionBD,$pst_parametres_load_data)
{
   print('<div class=TITRE>Chargement des photos</div><br>');
   $a_stats_nai= $pconnexionBD->liste_valeur_par_clef("select concat(ca.code_insee,lpad(ca.numero_paroisse,1,0)),sc.nb_actes from `stats_commune` sc join `commune_acte` ca on (sc.idf_commune=ca.idf) where sc.idf_type_acte=".IDF_NAISSANCE." and sc.idf_source=1");
   $st_fich_dest = tempnam ("", "photos");
   if (!move_uploaded_file($_FILES['Photos']['tmp_name'],$st_fich_dest)) 
   {
      print("<div CLASS=IMPORTANT>Erreur de t&eacute;l&eacute;chargement :</div><br>");
      switch($_FILES['Photos']['error'])
      { 
           case 2 : print("Fichier trop gros par rapport &agrave; MAX_FILE_SIZE");break;
           default : print("Erreur inconnue");print_r($_FILES);
      }
      exit;
   }   
   $pf=fopen($st_fich_dest,"r") or die("Impossible de lire $st_fich_dest\n");
   $a_paroisses = $pconnexionBD->liste_valeur_par_doubles_clefs("select code_insee,numero_paroisse,idf from commune_acte");
   $a_nature = $pconnexionBD->liste_clef_par_valeur("select idf,libelle from collection_acte");
   $st_fich_sortie = tempnam ("", "photos");
   $sortie = fopen($st_fich_sortie, "w");


   while (( list($i_num_paroisse,$st_nom_paroisse,$st_fourchette,$st_nature,$i_taille,$i_nbre,$st_auteur,$i_idf_adh,$st_date_prise) = fgetcsv($pf, 1000,';')) !== FALSE)
   {
       // Saute les lignes sans numéro de paroisse
       if (!is_numeric($i_num_paroisse))
          continue;
      $i_code_insee = substr($i_num_paroisse,0,5);
      $i_num_paroisse2 = sprintf("%d",substr($i_num_paroisse,5,2));
      $st_nature = trim($st_nature);
      if (isset($a_paroisses[$i_code_insee][$i_num_paroisse2]))
      {
         if (isset($a_nature[$st_nature]))
         {
            // nettoyage des fourchettes
            list($i_annee_deb,$i_annee_fin)=explode('-',$st_fourchette,2);
            $i_annee_deb = trim($i_annee_deb);
            $i_annee_fin = trim($i_annee_fin);
            $st_fourchette = "$i_annee_deb-$i_annee_fin";
            // mise en conformité de la date
            list($i_jour,$i_mois,$i_annee)=explode('/',$st_date_prise,3);
            $st_date_prise = join('-',array($i_annee,$i_mois,$i_jour));
            list($i_idf_paroisse) = $a_paroisses[$i_code_insee][$i_num_paroisse2];
            if ($i_idf_adh=='') $i_idf_adh='\N';
            $st_ligne = join(';',array($i_idf_paroisse,$st_fourchette,$a_nature[$st_nature],$i_taille,$i_nbre,$i_idf_adh,$st_date_prise)) ;
            //print("$st_ligne<br>");
            
            fwrite($sortie,"$st_ligne\n");
         }
         else
         {
            print("<div class=IMPORTANT>Impossible de trouver le type de collection: $st_nature (Commune $st_nom_paroisse)</div><br>");
         }
      }
      else
      {
         print("<div class=IMPORTANT>Impossible de trouver une commune($i_code_insee,$i_num_paroisse)</div><br>");
      }
   }
   fclose($pf);
   fclose($sortie);
   $st_fich_sortie=addslashes($st_fich_sortie);
   $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_sortie' IGNORE INTO TABLE `photos` FIELDS TERMINATED BY ';' LINES TERMINATED BY '\n' (id_commune,fourchette,id_collection,poids_total,nbr_photos,id_auteur,date_prise)";
   try
   {
     $pconnexionBD->execute_requete($st_requete);
   }
   catch (Exception $e) {
       unlink($st_fich_sortie);
       die('Chargement photos impossible: ' . $e->getMessage()."$st_requete");
   }   
   unlink($st_fich_dest);
   unlink($st_fich_sortie); 
   print('<div align=center></div><br>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print('<input type="hidden" name="mode" value="FORMULAIRE" />');
   print('<div align=center><input type="submit" value="RETOUR"/></div>');
   print('</form>'); 
 }   

/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
//require_once("Menu_essai.php");

require_once("../Commun/menu.php");
$gst_commune_a_chercher = isset($_POST['commune_a_chercher']) ? trim($_POST['commune_a_chercher']): '' ;

$gst_parametres_load_data = 'LOCAL';

$ga_communes    =    $connexionBD->liste_valeur_par_clef("select idf,nom from `commune_acte` order by nom");
$ga_collections =    $connexionBD->liste_valeur_par_clef("select idf,libelle from `collection_acte` order by libelle");
$ga_auteurs     =   $connexionBD->liste_valeur_par_clef("select idf,concat(nom,'  ',prenom,' (',idf,')') from adherent order by nom,prenom");

switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD,$gst_commune_a_chercher); 
  break;
  case 'MENU_MODIFIER' :
  menu_modifier($connexionBD,$gi_idf_photo,$ga_communes,$ga_collections,$ga_auteurs);
  break;
  case 'MODIFIER' :
     $i_id_commune = (int) $_POST['id_commune'];
     $st_fourchette = trim($_POST['fourchette']);
     $i_id_collection = (int) $_POST['id_collection'];
     $i_nbr_photos = trim($_POST['nbr_photos']);
     $i_poids_photos = trim($_POST['poids_photos']);
     $i_id_auteur = (int) $_POST['id_auteur'];
     $c_rel_pap = $_POST['rel_pap'];
     $c_rel_base = $_POST['rel_base'];
     $c_rel_td = $_POST['rel_td'];
     list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['dt_prise'],3);
     $c_date_prise = join('-',array($i_annee,$i_mois,$i_jour));
	   $st_requete= "update `photos` set id_commune=$i_id_commune, fourchette='$st_fourchette',id_collection=$i_id_collection,nbr_photos=$i_nbr_photos,poids_total=$i_poids_photos,id_auteur=$i_id_auteur,releve_papier='$c_rel_pap',releve_base='$c_rel_base',releve_td='$c_rel_td', date_prise=$c_date_prise where idf=$gi_idf_photo";
     //print("REQ=$st_requete<br>");
     $connexionBD->execute_requete($st_requete);
     
     menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' : 

  menu_ajouter($ga_communes,$ga_collections,$ga_auteurs);
  break;
  case 'AJOUTER':
     $i_id_commune = (int) $_POST['id_commune'];
     $st_fourchette = trim($_POST['fourchette']);
     $i_id_collection = (int) $_POST['id_collection'];
     $i_nbr_photos = trim($_POST['nbr_photos']);
     $i_poids_photos = trim($_POST['poids_photos']);
     $i_id_auteur = (int) $_POST['id_auteur'];
     $c_rel_pap = $_POST['rel_pap'];
     $c_rel_base = $_POST['rel_base'];
     $c_rel_td = $_POST['rel_td'];
     list($i_jour,$i_mois,$i_annee)=explode('/',$_POST['dt_prise'],3);
     $c_date_prise = join('-',array($i_annee,$i_mois,$i_jour));

     $connexionBD->execute_requete("insert into photos(id_commune,fourchette,id_collection,nbr_photos,poids_total,id_auteur,releve_papier,releve_base,releve_td,date_prise) values($i_id_commune,'$st_fourchette',$i_id_collection,$i_nbr_photos,$i_poids_photos,$i_id_auteur,'$c_rel_pap','$c_rel_base','$c_rel_td','$c_date_prise')");
     menu_liste($connexionBD);
   break;
   case 'SUPPRIMER':
     $a_liste_photos = $_POST['supp'];
     foreach ($a_liste_photos as $i_idf_photo)
     {
	    $r_releve = $connexionBD->sql_select_multiple ("select ph.id_commune, re.id_commune from `photos` ph join `releve_cours` re on (ph.id_commune = re.id_commune) where ph.idf = $i_idf_photo");
		 if  (count ($r_releve) == 0)
		 {
          $connexionBD->execute_requete("delete from `photos` where idf = $i_idf_photo");
       }
		 else
		 {
          print("<div align=center>Les relevés suivants doivent &ecirc;tre supprim&eacute;s auparavant :</div><br>");
			 $l_releve = $connexionBD->sql_select_multiple ("select co.nom, ad.nom, re.fourchette from `commune_acte` co join `releve_cours` re on (re.id_commune = co.idf) join `adherent` ad on (re.id_adherent = ad.idf) join `photos` ph on (re.id_commune = ph.id_commune) where ph.idf = $i_idf_photo");	
          print("<div align=center><table border=1>");
          print("<tr><th>Commune</th><th>Adhérent</th><th>Fourchette</th></tr>\n");
          foreach ($l_releve as $l_relev)
          {
             list($st_commune,$st_adherent, $st_fourchette) = $l_relev;
             print("<tr><td>$st_commune</td><td>$st_adherent</td><td>$st_fourchette</td></tr>\n");
          }
          print("</table></div><br>");          		    
		 }
     }
     menu_liste($connexionBD);
   break;
   case 'CHARGER':
      charge_photos($connexionBD,$gst_parametres_load_data);
      menu_liste($connexionBD);
   break;  
      
}  


print('</body>');



?>