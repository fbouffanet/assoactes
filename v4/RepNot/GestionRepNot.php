<?php

require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');

// La page est reservee uniquement aux gens ayant les droits d'import/export
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_CHARGEMENT);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once('../Commun/commun.php');
require_once('../Commun/phonex.cls.php');

$gst_mode = empty($_POST['mode']) ? 'LISTE': $_POST['mode'] ;
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

switch ($gst_mode) {
 case 'EXPORT' :
   $i_idf_rep =  isset($_POST['idf_rep']) ? (int) $_POST['idf_rep']: 0;
   $st_cote=$connexionBD->sql_select1("select cote from rep_not_desc where idf_repertoire=$i_idf_rep");
   $st_cote = str_replace(' ','_',$st_cote);
   header("Content-type: text/csv");
   header("Expires: 0");
   header("Pragma: public");
   header("Content-disposition: attachment; filename=\"$st_cote.csv\""); 
   exporte_rep_not($connexionBD,$i_idf_rep);
   exit();
 break;
 case 'LISTE_REP':
   $st_requete = "SELECT rnd.nom_notaire,ca.nom,rnd.cote,rnd.publication, concat(adht.prenom,' ',adht.nom), count(rna.idf_acte) FROM rep_not_desc rnd join commune_acte ca on (rnd.idf_commune=ca.idf) left join rep_not_actes rna on (rnd.idf_repertoire=rna.idf_repertoire) left join adherent adht on (rnd.idf_releveur=adht.idf) group by rnd.idf_repertoire order by rnd.nom_notaire,ca.nom";
   header("Content-type: text/csv");
   header("Expires: 0");
   header("Pragma: public");
   header("Content-disposition: attachment; filename=\"liste_rep.csv\"");
   $a_liste_rep=$connexionBD->sql_select_multiple($st_requete);
   $fh = @fopen('php://output', 'w' );       
   if (count($a_liste_rep)>0)
   {
     fputcsv($fh, array("Notaire","Commune","Cote","Publication","Releveur","Nb actes"),SEP_CSV); 
     foreach ($a_liste_rep as $a_ligne)
     {
       fputcsv($fh, $a_ligne,SEP_CSV);           
     }
     fclose($fh);
   }
   exit();
 break;  
}

print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>");
print("<title>Gestion des Repertoires de notaire</title>");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print('<meta http-equiv="content-language" content="fr">');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../Commun/menu.js' type='text/javascript'></script>");


?>
<script type='text/javascript'>

$(document).ready(function() {

$("#modifie_rep_not").validate({ 
    rules: {
      nom_notaire: "required",
      cote: "required",
      },
    messages: {
         nom_notaire: "Le nom du notaire est obligatoire",
         cote: "La cote du notaire est obligatoire" 
       } 
});

$("#ajoute_rep_not").validate({ 
    rules: {
      nom_notaire: "required",
      cote: "required"
    },
    messages: {
         nom_notaire: "Le nom du notaire est obligatoire",
         cote: "La cote du notaire est obligatoire" 
       }
});

$("#import_rep_not").validate({ 
    submitHandler : function(form) {
      if (confirm("Voulez-vous vraiment recharger le répertoire "+$("#idf_rep_import option:selected").text()+' ?')) {
        form.submit();
      }
    },
    rules: {
      RepNotFich: {
        required: true,
        extension: "csv"
      }
    },
    messages: {
       RepNotFich: {
         required: "Choisir un fichier",
         extension: "Un fichier CSV est requis" 
       } 
    }
});

function MajTypeDest (json, textStatus, jqXHR) {
    $('#type_acte_dest').empty();   
    if (json.length>0)
    {
		  $.each(json, function(key, val) {
			 $("#type_acte_dest").append('<option>'+ val +'</option>');   
		  });
    }
	};

$("#type_acte_orig").change(function() {
		$.ajax({
			url: './ajax/type_acte.php',
			data: 'type_excl='+$('#type_acte_orig').val(),
			dataType: 'json',
			cache: false,
			success: MajTypeDest
		});
	});

$("#fusionner_type").validate({ 
    submitHandler : function(form) {
      if (confirm("Voulez-vous vraiment remplacer le type '"+$("#type_acte_orig option:selected").text()+"' par le type '"+$("#type_acte_dest option:selected").text()+ "' ?")) {
        form.submit();
      }
    },
    rules: {
      type_acte_orig: "required",
      type_acte_dest: "required"
    },
    messages: {
         type_acte_orig: "Choisir un type à remplacer",
         type_acte_dest: "Choisir le type de destination"  
    }
});

$("#suppression_repertoires").validate({
  rules: {
    "supp[]": { 
                    required: true, 
                    minlength: 1 
            } 
  },
  messages: {
     "supp[]": "Merci de choisir au moins un répertoire à supprimer"
  },
  submitHandler: function(form) {
    var repertoires='';
    $("input:checkbox").each(function(){
      var $this = $(this);
      if($this.is(":checked")){
        repertoires=repertoires+' '+$this.attr("id");
      }   
    });
    if (confirm('Etes-vous sûr de supprimer les répertoires '+repertoires+' ?')) {
            form.submit();
        }
    }
  });

}); 
</script>
<?php
print('</head>');
print('<body>');


if (isset($_GET['mod']))
{
   $gst_mode='MENU_MODIFIER';
   $gi_idf_repertoire = (int) $_GET['mod'];
}
else
  $gi_idf_repertoire = isset($_POST['idf_repertoire']) ? (int) $_POST['idf_repertoire']:null;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

/* Renvoie la liste des répertoires de notaires
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @return array tableau de (nom_notaire,paroisse, cote, publication, nb actes) indexé par l'identifiant du répertoire
*/
function liste_rep_not($pconnexionBD)
{
  $st_requete = "SELECT rnd.idf_repertoire,rnd.nom_notaire,ca.nom,rnd.cote FROM rep_not_desc rnd join commune_acte ca on (rnd.idf_commune=ca.idf) left join rep_not_actes rna on (rnd.idf_repertoire=rna.idf_repertoire)  order by rnd.nom_notaire,ca.nom";
	$a_liste_repertoires = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
  return $a_liste_repertoires;
}

/**
 * Affiche la liste des communes
 * @param object $pconnexionBD Identifiant de la connexion de base
 */ 
function menu_liste($pconnexionBD)
{
	global $gi_num_page_cour,$gi_max_taille_upload;  
  $st_requete = "SELECT rnd.idf_repertoire,rnd.nom_notaire,ca.nom,rnd.cote,rnd.publication, concat(adht.prenom,' ',adht.nom),count(rna.idf_acte) FROM rep_not_desc rnd join commune_acte ca on (rnd.idf_commune=ca.idf) left join rep_not_actes rna on (rnd.idf_repertoire=rna.idf_repertoire) left join adherent adht on (rnd.idf_releveur=adht.idf) group by rnd.idf_repertoire order by rnd.nom_notaire,ca.nom";
	$a_liste_rep_not =liste_rep_not($pconnexionBD);
  print("<div class=TITRE>Gestion des R&eacute;pertoires de notaire</div>");
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"suppression_repertoires\">");
	$a_liste_repertoires = $pconnexionBD->sql_select_multiple_par_idf($st_requete);
  $i_nb_repertoires=count($a_liste_repertoires);
	if ($i_nb_repertoires!=0)
	{        
		$pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_repertoires,NB_LIGNES_PAR_PAGE,1,array('Notaire','Commune','Cote','Publication','Releveur','Nb Actes','Modifier','Supprimer'));
		$pagination->init_param_bd($pconnexionBD,$st_requete);
		$pagination->init_page_cour($gi_num_page_cour);
		$pagination->affiche_entete_liens_navigation();
		$pagination->affiche_tableau_edition();
	}
	else
		print("<div align=center>Pas de r&eacute;pertoires</div>\n");
	print("<div align=center><input type=hidden name=mode value=\"SUPPRIMER\">");
	print("<br><input type=submit value=\"Supprimer les repertoires selectionnes\" ></div>");   
	print("</form>");  
	print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
	print("<div align=center><br><input type=hidden name=mode value=\"MENU_AJOUTER\">");  
	print("<input type=submit value=\"Ajouter un repertoire\"></div>");  
	print('</form>');
  print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  print('<div align=center><br><input type="hidden" name="mode" value="CALCUL_VARIANTES" />');
  print('<input type="submit" value="(Re)Calculer les variantes"/></div>');
  print('</form>');  
  print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
  print('<fieldset><legend>Export:</legend>');
  print("<div align=center><select name=idf_rep id=idf_rep_export>");
  foreach($a_liste_rep_not as $i_idf_rep => $a_ligne)
  {
      list($st_notaire,$st_paroisse,$st_cote) = $a_ligne;
      print("<option value=\"$i_idf_rep\">$st_notaire - $st_paroisse ($st_cote)</option>");
  }
  print("</div>"); 
  print('<div align=center><br><input type="hidden" name="mode" value="EXPORT" />');
  print('<input type="submit" value="Exporter le répertoire"/></div>');
  print('</fieldset>');
  print('</form>');
  print('<fieldset><legend>Import:</legend>');
  print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"import_rep_not\">");
  print('<div align=center><br><input type="hidden" name="MAX_FILE_SIZE" value="$gi_max_taille_upload" >'); 
  print("<div align=center><select name=idf_rep id=idf_rep_import>");
  foreach($a_liste_rep_not as $i_idf_rep => $a_ligne)
  {
      list($st_notaire,$st_paroisse,$st_cote) = $a_ligne;
      print("<option value=\"$i_idf_rep\">$st_notaire - $st_paroisse ($st_cote)</option>");
  }
  print("</select></div>");
  print('<input type="hidden" name="mode" value="IMPORT" >');
  print('Fichier: <input name="RepNotFich" type="file" id="RepNotFich"><br></div>');
  print('<div align=center><br><input type="submit" value="Charger le fichier répertoire"/></div>');
  print('</form>');
  print('</fieldset>');
  print('<fieldset><legend>Fusion de types:</legend>');
  print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"fusionner_type\">");
  print("<div align=center><input type=hidden name=mode value=\"FUSIONNER_TYPE\">");
  $st_requete ="SELECT distinct `type` from `rep_not_actes` order by `type`";
	$a_types = $pconnexionBD->sql_select($st_requete);
  print("Remplacer le type: <select name=\"type_acte_orig\" id=\"type_acte_orig\"><option></option>");
  foreach ($a_types as $st_type)
  {
    print("<option>$st_type</option>\n");
  }
  print("</select>\n");
  print("par le type: <select name=\"type_acte_dest\" id=\"type_acte_dest\"><option></option>");
  print("</select>\n");
  foreach ($a_types as $st_type)
  print("</div>");
  print("<div align=center><br><input type=submit value=\"Fusionner\" ></div>");
  print('</form>');
  print('</fieldset>');
  print('<fieldset><legend>Liste des r&eacute;pertoires:</legend>');
  print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"exporter_liste\">");
  print("<input type=hidden name=mode value=\"LISTE_REP\">");
  print("<div align=center><br><input type=submit value=\"Exporter la liste des notaires\" ></div>");
  print('</form>');
  print('</fieldset>');
}

/**
 * Affiche de la table d'édition
 * @param array $pa_communes liste des communes
 * @param array $pa_releveurs liste des releveurs
 * @param integer $pi_idf_repertoire identifiant du répertoire
 * @param string $pst_nom_notaire Nom du notaire
 * @param string $pst_cote Cote du notaire
 * @param integer $pi_idf_commune Identifiant de la commune
 * @param integer $pi_idf_releveur Identifiant du releveur
 * @param character $pc_publication Publication du répertoire ('O'|'N')
 */ 
function menu_edition($pa_communes,$pa_releveurs,$pi_idf_repertoire,$pst_nom_notaire,$pst_cote,$pi_idf_commune,$pi_idf_releveur,$pc_publication)
{
   print("<table border=1>");
   print("<tr><th>Identifiant du r&eacute;pertoire</th><td>$pi_idf_repertoire</td></tr>");
   print("<tr><th>Nom du notaire</th><td><input type=\"text\" maxlength=50 size=30 name=nom_notaire id=nom_notaire value=\"$pst_nom_notaire\"></td></tr>");
   print("<tr><th>Cote du notaire</th><td><input type=\"text\" maxlength=10 size=10 name=cote id=cote value=\"$pst_cote\"></td></tr>");
   print("<tr><th>Commune</th><td><select name=\"idf_commune\">");
   print(chaine_select_options($pi_idf_commune,$pa_communes));
   print("</select></td></tr>");
   print("<tr><th>Releveur</th><td><select name=\"idf_releveur\">");
   print(chaine_select_options($pi_idf_releveur,$pa_releveurs));
   print("</select></td></tr>");
   $st_coche = $pc_publication=='O' ? 'checked' : '';
   print("<tr><th>Publication</th><td><input type=checkbox value='O' name='publication' $st_coche></td></tr>");
   print("</table>");
}

/** Affiche le menu de modification d'un répertoire
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_repertoire Identifiant du répertoire à modifier 
 * @param array $pa_communes liste des communes
 * @param array $pa_releveurs liste des releveurs
 */ 
function menu_modifier($pconnexionBD,$pi_idf_repertoire,$pa_communes,$pa_releveurs)
{
   list($st_nom_notaire,$st_cote,$idf_commune,$idf_releveur,$c_publication)=$pconnexionBD->sql_select_liste("select nom_notaire,cote,idf_commune,idf_releveur,publication from `rep_not_desc` where idf_repertoire=$pi_idf_repertoire");  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"modifie_rep_not\">");
   print("<div align=center><input type=hidden name=mode value=MODIFIER>");
   print("<input type=hidden name=idf_repertoire value=$pi_idf_repertoire>");
   menu_edition($pa_communes,$pa_releveurs,$pi_idf_repertoire,$st_nom_notaire,$st_cote,$idf_commune,$idf_releveur,$c_publication);
   print("</div>");
   print("<div align=center><br><input type=submit value=\"Modifier\"></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<div align=center><input type=hidden name=mode value=LISTE>");
   print("<br><input type=submit value=\"Annuler\"></div>");
   print('</form>');
}

/** Affiche le menu d'ajout d'un répertoire
 * @param array $pa_communes liste des communes
 * @param array $pa_releveurs liste des releveurs 
 */ 
function menu_ajouter($pa_communes,$pa_releveurs)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" id=\"ajoute_rep_not\">");
   print("<div align=center><input type=hidden name=mode value=\"AJOUTER\">");
   menu_edition($pa_communes,$pa_releveurs,null,'','',0,0,'N');
   print("</div>");
   print("<div align=center><br><input type=submit value=\"Ajouter\" ></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<div align=center><br><input type=hidden name=mode value=LISTE>");
   print("<input type=submit value=\"Annuler\"></div>");
   print('</form>');
}



/**
 * Calcule les variantes de tous les patronymes commençant par une lettre ou une parenthese
 * @param object $pconnexionBD Connexion à la base 
 * @param string $pst_rep_tmp répertoire temporaire où est stocké le fichier avant chargement en base
 * @global string $gst_jeu_de_caracteres_par_defaut jeu de caractères par défaut
 */
function calcule_variantes($pconnexionBD,$pst_rep_tmp,$pst_parametres_load_data) {
    global $gst_jeu_de_caracteres_par_defaut;
    $ga_patronymes = $pconnexionBD->sql_select("select distinct nom1 as patronyme from rep_not_actes union select distinct nom2 as patronyme from rep_not_actes");
    //$i_precision = 5; 
    //$i_precision = 6;
    //$i_precision = 7; 
    $i_precision = 8;     
    $oPhonex = new phonex;
    $ga_patronymes=array_unique($ga_patronymes);
    $a_groupe_patros  =array();
    foreach($ga_patronymes as $st_patronyme)
    {
       if (empty($st_patronyme))
          continue;
       $st_patronyme_sans_espaces = preg_replace('/\s+/','',$st_patronyme);      
       $oPhonex -> build ($st_patronyme_sans_espaces);
       $sPhonex = trim($oPhonex -> sString);
       $i_phonex =  intval(round($sPhonex * pow(10,$i_precision)));
       if (array_key_exists($i_phonex,$a_groupe_patros))
          $a_groupe_patros[$i_phonex][]= $st_patronyme;
       else
          $a_groupe_patros[$i_phonex]= array($st_patronyme); 
       
    }    
    $i=0;
    $st_fich_temp = tempnam ($pst_rep_tmp, "variantes_rep_not.csv");
    $pf=@fopen($st_fich_temp,"w");
    if ($pf===FALSE)
       die("Ecriture fichier phonex.csv impossible");
    foreach ($a_groupe_patros as $i_idf_groupe => $a_patros)
    {
       if (count($a_patros)>1)
       {
          foreach ($a_patros as $st_patronyme)
          {
             fwrite($pf,"$i;$st_patronyme\n");               
          }
          $i++;
       }
    }
    fclose($pf); 
    usleep(500000);
    chmod($st_fich_temp,0444);
    $st_requete="truncate table `rep_not_variantes`";
    try
    {
      $pconnexionBD->execute_requete($st_requete);
    }
    catch (Exception $e) {
       unlink($st_fich_temp);
       die('Suppression rep_not_variantes impossible: ' . $e->getMessage());
    }   
    $st_fich_temp=addslashes($st_fich_temp);
    $st_requete="LOAD DATA $pst_parametres_load_data INFILE '$st_fich_temp' IGNORE INTO TABLE `rep_not_variantes` CHARACTER SET $gst_jeu_de_caracteres_par_defaut FIELDS TERMINATED BY ';' LINES TERMINATED BY '\n' (idf_groupe,nom)";
     try
     {
       $pconnexionBD->execute_requete($st_requete);
     }
     catch (Exception $e) {
       unlink($st_fich_temp);
       die('Chargement variantes rep_not impossible: ' . $e->getMessage());
     }   
     unlink($st_fich_temp);    
}   

/** Export le contenu du répertoire de notaire spécifié
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf_stat_export identifiant du statut de l'export 
 */ 
function exporte_rep_not($pconnexionBD,$pi_idf_rep)
{
   $st_requete = "select jour,mois,annee,date_rep,type,nom1,prenom1,nom2,prenom2,paroisse,commentaires,page from rep_not_actes rna where rna.idf_repertoire=$pi_idf_rep order by annee,mois,jour";
   $a_liste_actes=$pconnexionBD->sql_select_multiple($st_requete);
   $fh = @fopen('php://output', 'w' );       
   if (count($a_liste_actes)>0)
   {
     fputcsv($fh, array("Date","DateRep","Type","Nom1","Prenom1","Nom2","Prenom2","Paroisse","Commentaires","Page"),SEP_CSV); 
     foreach ($a_liste_actes as $a_ligne)
     {
       list($i_jour,$i_mois,$i_annee,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page) = $a_ligne;
       $st_date=sprintf("%0.2d/%0.2d/%0.4d",$i_jour,$i_mois,$i_annee);
       fputcsv($fh, array($st_date,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page),SEP_CSV);           
     }
     fclose($fh);
   }
}

/**
 *  Charge le ficher dans le répertoire spécifié
 * @param object $pconnexionBD Identifiant de la connexion de base 
 * @param integer $pi_idf_rep Identifiant du répertoire
 * @param string $pst_parametre_load_data Paramètres du Load Data
* @global string $gst_jeu_de_caracteres_par_defaut jeu de caractères par défaut
 */
function importe_rep_not($pconnexionBD,$pi_idf_rep,$pst_parametre_load_data)
{
    global $gst_jeu_de_caracteres_par_defaut;
    global $gst_repertoire_telechargement;
    $st_nom_fich_dest = sprintf("rep_not_%d.txt",$pi_idf_rep);     
    $st_fich_dest = "$gst_repertoire_telechargement/$st_nom_fich_dest";
    if (!move_uploaded_file($_FILES['RepNotFich']['tmp_name'],$st_fich_dest)) 
    {
       print("Erreur de telechargement : impossible de copier en $st_fich_dest:<br>");
       switch($_FILES['RepNotFich']['error'])
       { 
          case 2 : print("Fichier trop gros par rapport a MAX_FILE_SIZE");break;
          default : print("Erreur inconnue");print_r($_FILES);
       }        
       exit;
    }
    chmod($st_fich_dest,0644);
    $fp=fopen($st_fich_dest,"r") or die("Impossible de lire le fichier $st_fich_dest");
    $st_fich_chgt = "$gst_repertoire_telechargement/rep_not_chgt.csv";
    $fp_chgt=fopen($st_fich_chgt,"w") or die("Impossible d'ecrire le fichier $st_fich_chgt");
    while (($a_champs = fgetcsv($fp, 4096, SEP_CSV)) !== FALSE)
    {   
       $i_nb_champs=count($a_champs);
       if ($i_nb_champs==10)
       {      
          list($st_date,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page) = $a_champs;
       
       }
       else if ($i_nb_champs==9)
       {
          list($st_date,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$i_page) = $a_champs;
          $st_cmt='';
       }
       else
       {
          print("Ligne comportant $i_nb_champs colonnes ignor&eacute;e<br>");
          continue;
       }
       if (preg_match('/^Date/',$st_date)) continue;   
       list($i_jour,$i_mois,$i_annee)=explode('/',$st_date);
       fputcsv($fp_chgt,array($pi_idf_rep,$i_jour,$i_mois,$i_annee,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_cmt,$i_page),SEP_CSV);
    }
    fclose($fp);
    fclose($fp_chgt);
    chmod($st_fich_chgt,0644);
    $st_requete = "delete from rep_not_actes  where idf_repertoire=$pi_idf_rep";
    $pconnexionBD->execute_requete($st_requete); 
    $st_requete = "load data $pst_parametre_load_data infile '$st_fich_chgt' into table rep_not_actes CHARACTER SET $gst_jeu_de_caracteres_par_defaut fields terminated by '".SEP_CSV."' OPTIONALLY ENCLOSED BY '\"' lines terminated by '\n' (idf_repertoire,jour,mois,annee,date_rep,type,nom1,prenom1,nom2,prenom2,paroisse,commentaires,page)"; 
    $pconnexionBD->execute_requete($st_requete);
    print('<div align=center class="INFO">Chargement effectu&eacute;</div><br>');
    sleep(1);
    unlink($st_fich_dest); 
    unlink($st_fich_chgt);
}

require_once("../Commun/menu.php");

switch ($gst_mode) {
  case 'LISTE' :
    menu_liste($connexionBD);
       
  break;
  case 'MENU_MODIFIER':
	$st_requete ="SELECT idf,nom FROM commune_acte order by nom";
	$a_communes = $connexionBD->liste_valeur_par_clef($st_requete);
	$st_requete ="SELECT idf, CONCAT(nom,' ',prenom,' (',idf,')') FROM adherent where statut in ('B','I') order by nom,prenom";
	$a_releveurs = $connexionBD->liste_valeur_par_clef($st_requete);  
	menu_modifier($connexionBD,$gi_idf_repertoire,$a_communes,$a_releveurs);
  break;
  case 'MODIFIER' :
	if (isset($_POST['idf_repertoire']))
	{
		$i_idf_repertoire = (int) $_POST['idf_repertoire'];
		$st_notaire = trim($_POST['nom_notaire']);
		$st_notaire = substr($st_notaire,0,50);
		$st_cote = trim($_POST['cote']);
		$st_cote = substr($st_cote,0,10);
		$i_idf_commune = (int) ($_POST['idf_commune']);
		$i_idf_releveur = (int) ($_POST['idf_releveur']);
		$c_publication = isset ($_POST['publication']) ? 'O' : 'N';
    $connexionBD->initialise_params(array(':notaire'=>$st_notaire,':cote'=>$st_cote,':idf_commune'=>$i_idf_commune,':idf_releveur'=>$i_idf_releveur,':publication'=>$c_publication,':idf_repertoire'=>$i_idf_repertoire));
		$st_requete = "update `rep_not_desc` set nom_notaire=:notaire, cote=:cote,idf_commune=:idf_commune,idf_releveur=:idf_releveur,publication=:publication where idf_repertoire=:idf_repertoire";
		$connexionBD->execute_requete($st_requete);
	}
	else
	{
		print("<div class=ERROR>Identifiant de r&eacute;pertoire non sp&eacute;cifi&eacute;</div>");
	}
	menu_liste($connexionBD);  
  break;
  case 'MENU_AJOUTER' :
		$st_requete ="SELECT idf,nom FROM commune_acte order by nom";
		$a_communes = $connexionBD->liste_valeur_par_clef($st_requete);
		$st_requete ="SELECT idf, CONCAT(nom,' ',prenom,' (',idf,')') FROM adherent where statut in ('B','I') order by nom,prenom";
		//print("Req=$st_requete");
		$a_releveurs = $connexionBD->liste_valeur_par_clef($st_requete);
		menu_ajouter($a_communes,$a_releveurs);
  break;
  case 'AJOUTER':
		$st_notaire = trim($_POST['nom_notaire']);
		$st_notaire = substr($st_notaire,0,50);
		$st_cote = trim($_POST['cote']);
		$st_cote = substr($st_cote,0,10);
		$i_idf_commune = (int) ($_POST['idf_commune']);
		$i_idf_releveur = (int) ($_POST['idf_releveur']);
		$c_publication = isset ($_POST['publication']) ? 'O' : 'N';
    $connexionBD->initialise_params(array(':notaire'=>$st_notaire,':cote'=>$st_cote,':idf_commune'=>$i_idf_commune,':idf_releveur'=>$i_idf_releveur,':publication'=>$c_publication));
		$st_requete = "insert into `rep_not_desc`(nom_notaire,cote,idf_commune,idf_releveur,publication) values(:notaire,:cote,:idf_commune,:idf_releveur,:publication)";
		$connexionBD->execute_requete($st_requete);
     menu_liste($connexionBD);
   break;
   case 'SUPPRIMER':
		$a_liste_repertoires = $_POST['supp'];
		foreach ($a_liste_repertoires as $i_idf_repertoire)
		{
			$st_requete ="select count(idf_acte) from `rep_not_actes` rna  join `rep_not_desc` rnd on (rna.idf_repertoire=rnd.idf_repertoire) where rnd.idf_repertoire=$i_idf_repertoire";
			//print("Req=$st_requete<br>");
			$i_nb_actes = $connexionBD->sql_select1($st_requete);
			if ($i_nb_actes==0)
				$connexionBD->execute_requete("delete from `rep_not_desc` where idf_repertoire=$i_idf_repertoire");
			else
				print("<div class=IMPORTANT>Des actes sont d&eacute;j&agrave; index&eacute;s pour ce r&eacute;pertoire</div>");
        }
		menu_liste($connexionBD);
	break;
  case 'CALCUL_VARIANTES':
     calcule_variantes($connexionBD,$gst_repertoire_chargement_actes,$gst_parametres_load_data);
     print("<div class=IMPORTANT>Variantes calcul&eacute;es</div>");
     menu_liste($connexionBD);  
  break;
  case 'IMPORT':
     $i_idf_rep =  isset($_POST['idf_rep']) ? (int) $_POST['idf_rep']: 0;
     importe_rep_not($connexionBD,$i_idf_rep,$gst_parametres_load_data);
     menu_liste($connexionBD);
  break;
  case 'FUSIONNER_TYPE':
     $st_type_acte_orig = trim($_POST['type_acte_orig']);
		 $st_type_acte_orig = substr($st_type_acte_orig,0,40);
     $st_type_acte_dest = trim($_POST['type_acte_dest']);
		 $st_type_acte_dest = substr($st_type_acte_dest,0,40);
     $connexionBD->initialise_params(array(':type_acte_orig'=>$st_type_acte_orig,':type_acte_dest'=>$st_type_acte_dest));
     $st_requete = "update `rep_not_actes` set `type`=:type_acte_dest where `type`=:type_acte_orig";
     try
     {
        $connexionBD->execute_requete($st_requete);
     }
     catch (Exception $e)
     {
      echo 'Exception reçue : ',  $e->getMessage(), "\n";
     }
     print("<div class=IMPORTANT>Remplacement effectu&eacute;</div>");
     menu_liste($connexionBD);
  break;    
}  
print('</body></html>');
?>