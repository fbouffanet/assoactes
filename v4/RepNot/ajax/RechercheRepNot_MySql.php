<?php

require_once('../Commun/config.php');
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once '../Commun/commun.php'; 
require_once('../Commun/VerificationDroits.php'); 
require_once('commun_rep_not.php');

/*
* Affiche la grille de recherche
* @param object $pconnexionBD connexion � la BD
* @param integer $pi_idf_commune identifiant de la commune du notaire
* @param integer $pi_rayon rayon de recherche
* @param string $pst_type_acte type d'acte
* @param integer $pi_annee_min ann�e minimale de l'acte
* @param integer $pi_annee_max ann�e maximale de l'acte
* @param string $pst_nom1 nom du premier intervenant
* @param string $pst_prenom1 pr�nom du premier intervenant
* @param string $pst_nom2 nom du second intervenant
* @param string $pst_prenom2 pr�nom du second intervenant
* @param string $pst_paroisse paroisse objet de l'acte (acte capitulaire)
* @param string $pst_commentaires commentaires de l'acte
* @param string $pb_rech_phonetique recherche phonetique
*/
function affiche_grille_recherche($pconnexionBD,$pi_idf_commune,$pi_rayon,$pst_type_acte,$pi_annee_min,$pi_annee_max,$pst_nom1,$pst_prenom1,$pst_nom2,$pst_prenom2,$pst_paroisse,$pst_commentaires,$pb_rech_phonetique)
{
	$st_requete ="SELECT ca.idf,ca.nom FROM commune_acte ca join rep_not_desc rnd on (ca.idf=rnd.idf_commune) where rnd.publication='O' order by ca.nom";
  $a_communes_notaires = $pconnexionBD->liste_valeur_par_clef($st_requete);
  /*$pst_nom1 = utf8_encode($pst_nom1);
  $pst_prenom1 = utf8_encode($pst_prenom1);
  $pst_nom2 = utf8_encode($pst_nom2);
  $pst_prenom2 = utf8_encode($pst_prenom2);
	*/
  print('<form id="recherche_rep_not" action="'.$_SERVER['PHP_SELF'].'" method="post">');
	print('<input type="hidden" name="mode" value="RECHERCHES">');
  print('<input type="hidden" name="ancienne_page" value="RECHERCHES">');
	print("<fieldset><legend>Notaire</legend><div class=\"align-center\">Commune: <select id=\"idf_commune_notaire\" name=\"idf_commune_notaire\" class=\"js-select-avec-recherche\">");
	$a_communes_notaires[0] = 'Toutes';
	print(chaine_select_options($pi_idf_commune,$a_communes_notaires));
	print("</select></div>");	
	print("<div class=\"align-center\">Rayon de recherche : <input type=text name=rayon size=2 maxlength=2 value=\"$pi_rayon\"> Km</div>");
	print('<div class="align-center">R&eacute;pertoire: <select id="idf_rep" name="idf_rep" class="js-select-avec-recherche">');
	print("</select></div></fieldset>");
	print("<fieldset><legend>Acte</legend><div>Type d'acte:<input type=\"text\" id=\"type_acte\" name=\"type_acte\" maxlength=40 size=20 value=\"$pst_type_acte\"></div>");
	print("<div class=\"align-center\">Ann&eacute;es de <input type=text name=annee_min size =4 value=\"$pi_annee_min\"> &agrave; <input type=text name=annee_max size =4 value=\"$pi_annee_max\"></div>");
	print("<div>");
	print("<span>Nom1: <input type=\"text\" id=\"nom1\" name=\"nom1\" maxlength=40 size=20 value=\"$pst_nom1\"></span>");
	print(" <span>Pr&eacutenom1: <input type=\"text\" id=\"prenom1\" name=\"prenom1\" maxlength=30 size=20 value=\"$pst_prenom1\"></span>");
	print("</div>");
	print("<div>");
	print("<span>Nom2: <input type=\"text\" id=\"nom2\" name=\"nom2\" maxlength=40 size=20 value=\"$pst_nom2\"></span>");
	print(" <span>Pr&eacutenom2: <input type=\"text\" id=\"prenom2\" name=\"prenom2\" maxlength=30 size=20 value=\"$pst_prenom2\"></span>");
	print("</div>");
	print("<div>Paroisse concern&eacute;e par l'acte: <input type=\"text\" id=\"paroisse\" name=\"paroisse\" maxlength=40 size=20 value=\"$pst_paroisse\"></div>");
  print("<div>Recherche libre dans un commentaire: <input type=\"text\" id=\"commentaires\" name=\"commentaires\" maxlength=40 size=20 value=\"$pst_commentaires\"></div>");
  $st_checked = $pb_rech_phonetique ? 'checked="checked"':'';
  print("<div>Recherche phon&eacute;tique dans les patronymes: <input type=\"checkbox\" id=\"rech_phonetique\" name=\"rech_phonetique\" $st_checked value=\"1\"></div>");
	print('<div class=div_centre>Le caract&egrave;re * peut &ecirc;tre utilis&eacute; pour remplacer une partie de mot dans les champs Nom, Pr&eacute;nom et Paroisse. <br>Exemple: BAR* va chercher tous les mots commen&ccedil;ant par BAR</div>');
	print("</fieldset>");
	print("<input type=\"submit\" value=\"Chercher\" class=\"bouton_centre\">");
	//print("<div><input type=\"reset\" value=\"Remise a zero des champs\" class=\"bouton_centre\"></div>");
	print("</form>");
  print('<form id="recherche_rep_not" action="'.$_SERVER['PHP_SELF'].'" method="post">');
  print('<input type="hidden" name="recherche" value="nouvelle">');
  print("<input type=\"submit\" value=\"Vider les champs\" class=\"bouton_centre\">");
  print("</form>");
  
}

  /**
   * Renvoie la partie droite de l'egalite dans la clause de recherche par pr�nom (G�re le joker* ) 
   * @param string $pst_prenom : pr�nom � chercher  
   */
   function clause_droite_prenom($pst_prenom)
   {
     $st_clause = '';
     $pst_prenom= mysql_real_escape_string($pst_prenom);
     if ($pst_prenom!='')
     {   
        if (preg_match('/\*/',$pst_prenom))
           $st_clause = " like '".str_replace('*','%',$pst_prenom)."' collate latin1_german1_ci";
        else
           $st_clause = "= '".str_replace('*','%',$pst_prenom)."' collate latin1_german1_ci";   
     }
     return $st_clause;
   }

function vers_nom($pst_nom) {
  return sprintf("'%s'",mysql_real_escape_string($pst_nom));
}

/**
* Renvoie la partie droite de l'egalite dans la clause de recherche par patronyme or pr�nom (G�re le joker* ) 
* @param string $pst_nom : patronyme ou pr�nom � chercher  
*/
function clause_droite_nom($pconnexionBD,$pst_nom,$pb_variantes)
{
    $st_clause = '';
    $st_clause = '';
    if (!$pb_variantes || preg_match('/\*/',$pst_nom))
    {
       if (preg_match('/\*/',$pst_nom))
          $st_clause = " like '".str_replace('*','%',mysql_real_escape_string($pst_nom))."'";
       else
          $st_clause = "= '".mysql_real_escape_string($pst_nom)."'";
    } 
    else
    {
      $st_requete = "select rnv1.nom from rep_not_variantes rnv1, rep_not_variantes rnv2 where rnv2.nom = '".mysql_real_escape_string($pst_nom)."'  COLLATE latin1_general_ci and rnv1.idf_groupe=rnv2.idf_groupe";
      $a_variantes=$pconnexionBD->sql_select($st_requete);
      if (count($a_variantes)==0)
           $st_clause = " = '".mysql_real_escape_string($pst_nom)."'";
      else
      {
          $st_variantes=join(',',array_map("vers_nom",$a_variantes));
          $st_clause = " in ($st_variantes) ";
      }
    }
    return $st_clause;
}

/**
* Renvoie la partie droite de l'egalite dans la clause de recherche par patronyme or pr�nom (G�re le joker* ) 
* @param string $pst_nom : patronyme ou pr�nom � chercher  
*/
function clause_commune($pconnexionBD,$pst_nom)
{
    $st_clause = '';
    $st_clause = '';
    if (preg_match('/\*/',$pst_nom))
       $st_clause = " like '".str_replace('*','%',mysql_real_escape_string($pst_nom))."'";
    else
       $st_clause = "= '".mysql_real_escape_string(mysql_real_escape_string($pst_nom))."' COLLATE latin1_german1_ci"; 
    return $st_clause;
}

/*
* Renvoie la requ�te de recherche en fonction des crit�res s�lectionn�s
* @param object $pconnexionBD connexion � la BD
* @param integer $pi_idf_commune identifiant de la commune du notaire
* @param integer $pi_rayon rayon de recherche
* @param integer $pi_idf_repertoire identifiant du r�pertoire
* @param string $pst_type_acte type d'acte
* @param integer $pi_annee_min ann�e minimale de l'acte
* @param integer $pi_annee_max ann�e maximale de l'acte
* @param string $pst_nom1 nom du premier intervenant
* @param string $pst_prenom1 pr�nom du premier intervenant
* @param string $pst_nom2 nom du second intervenant
* @param string $pst_prenom2 pr�nom du second intervenant
* @param string $pst_paroisse paroisse objet de l'acte (acte capitulaire)
* @param string $pst_commentaires Recherche libre dans le commentaire
* @param boolean  $pb_rech_phonetique Recherche patronymique phon�tique (0|1))
* @return string Requ�te SQL
*/
function requete_recherche($pconnexionBD,$pi_idf_commune,$pi_rayon,$pi_idf_repertoire,$pst_type_acte,$pi_annee_min,$pi_annee_max,$pst_nom1,$pst_prenom1,$pst_nom2,$pst_prenom2,$pst_paroisse,$pst_commentaires,$pb_rech_phonetique)
{
	$a_clauses=array();
	if ($pi_rayon!='' && $pi_idf_commune!=0)
    {
		$a_communes_voisines= $pconnexionBD->liste_valeur_par_clef("select tk.idf_commune2,ca.nom from `tableau_kilometrique` tk join `commune_acte` ca on (tk.idf_commune2=ca.idf) where tk.distance <=$pi_rayon and tk.idf_commune1=$pi_idf_commune and tk.idf_commune2 in (select distinct idf_commune from `rep_not_desc`) order by nom");
		$a_champs = array_keys($a_communes_voisines);
        $a_champs[] = $pi_idf_commune;
		$a_clauses[] = "idf_commune in (".join(',',$a_champs).")";;
	}
	elseif ($pi_idf_commune!=0)
		$a_clauses[]= "idf_commune=$pi_idf_commune";
	if (!empty($pi_idf_repertoire))
		$a_clauses[]= "rnd.idf_repertoire=$pi_idf_repertoire";
	if (!empty($pst_type_acte))
  {
    $pst_type_acte = mysql_real_escape_string($pst_type_acte);
     if (preg_match('/\*/',$pst_type_acte))
           $a_clauses[] = "`type` like '".str_replace('*','%',$pst_type_acte)."' collate latin1_german1_ci";
        else
           $a_clauses[] = "`type`='$pst_type_acte' COLLATE latin1_german1_ci";
	}
  if (!empty($pi_annee_min))
		$a_clauses[]="annee>=$pi_annee_min";
	if ($pi_annee_max != '') 
		$a_clauses[]="annee<=$pi_annee_max";

  $st_requete = "select rna.annee, rna.mois,rna.jour,rna.date_rep,rna.`type`,rna.nom1,rna.prenom1,rna.nom2,rna.prenom2,rna.paroisse,rna.commentaires,rna.page,rnd.nom_notaire,ca.nom,rnd.cote from `rep_not_desc` rnd join `rep_not_actes` rna on (rnd.idf_repertoire=rna.idf_repertoire) join commune_acte ca on (rnd.idf_commune=ca.idf) where rnd.publication='O'";   
	if (!empty($pst_nom1) && !empty($pst_prenom1))
		$a_clauses[]='((nom1'.clause_droite_nom($pconnexionBD,$pst_nom1,$pb_rech_phonetique).' and prenom1'.clause_droite_prenom($pst_prenom1).') or (nom2 '.clause_droite_nom($pconnexionBD,$pst_nom1,$pb_rech_phonetique).' and prenom2'.clause_droite_prenom($pst_prenom1).'))';
	elseif (!empty($pst_nom1))
		$a_clauses[]='(nom1'.clause_droite_nom($pconnexionBD,$pst_nom1,$pb_rech_phonetique).' or nom2'.clause_droite_nom($pconnexionBD,$pst_nom1,$pb_rech_phonetique).')';
	elseif (!empty($pst_prenom1))
	  $a_clauses[]='(prenom1'.clause_droite_prenom($pst_prenom1).' or prenom2'.clause_droite_prenom($pst_prenom1).')';
	if (!empty($pst_nom2) && !empty($pst_prenom2))
		$a_clauses[]='((nom1'.clause_droite_nom($pconnexionBD,$pst_nom2,$pb_rech_phonetique).' and prenom1'.clause_droite_prenom($pst_prenom2).') or (nom2'.clause_droite_nom($pconnexionBD,$pst_nom2,$pb_rech_phonetique).' and prenom2'.clause_droite_prenom($pst_prenom2).'))';
	elseif (!empty($pst_nom2))
		$a_clauses[]='(nom1'.clause_droite_nom($pconnexionBD,$pst_nom2,$pb_rech_phonetique).' or nom2'.clause_droite_nom($pconnexionBD,$pst_nom2,$pb_rech_phonetique).')';
	elseif (!empty($pst_prenom2))
		$a_clauses[]='(prenom1'.clause_droite_prenom($pst_prenom2).' or prenom2'.clause_droite_prenom($pst_prenom2).')';	

  if (!empty($pst_paroisse))
		$a_clauses[]='paroisse'.clause_commune($pconnexionBD,$pst_paroisse);
  if (!empty($pst_commentaires))
		$a_clauses[]="commentaires like '%$pst_commentaires%'";  
	
	if (count($a_clauses)>0)
	{
		$st_clauses = join (' and ',$a_clauses);
		$st_requete = "$st_requete and  $st_clauses";
	}
	$st_requete .= " order by annee, mois, jour";
        //print("R=$st_requete<br>");
	return $st_requete;
}

/*
* Affiche les r�sultats de recherche
* @param object $pconnexionBD connexion � la BD
* @param integer $pi_idf_commune identifiant de la commune du notaire
* @param integer $pi_rayon rayon de recherche
* @param integer $pi_idf_repertoire identifiant du r�pertoire
* @param string $pst_type_acte type d'acte
* @param integer $pi_annee_min ann�e minimale de l'acte
* @param integer $pi_annee_max ann�e maximale de l'acte
* @param string $pst_nom1 nom du premier intervenant
* @param string $pst_prenom1 pr�nom du premier intervenant
* @param string $pst_nom2 nom du second intervenant
* @param string $pst_prenom2 pr�nom du second intervenant
* @param string $pst_paroisse paroisse objet de l'acte (acte capitulaire)
* @param string $pst_commentaires recherche libre dans commentaires 
* @param boolean  $pb_rech_phonetique Recherche patronymique phon�tique (0|1))
* @param integer $pi_num_page num�ro de la page
*/
function affiche_resultats_recherche($pconnexionBD,$pi_idf_commune,$pi_rayon,$pi_idf_repertoire,$pst_type_acte,$pi_annee_min,$pi_annee_max,$pst_nom1,$pst_prenom1,$pst_nom2,$pst_prenom2,$pst_paroisse,$pst_commentaires,$pb_rech_phonetique,$pi_num_page)
{
	global $ga_mois;
	$a_clauses= array();
	$a_communes_voisines = array();
	$a_tableau_affichage = array();
	$st_requete =requete_recherche($pconnexionBD,$pi_idf_commune,$pi_rayon,$pi_idf_repertoire,$pst_type_acte,$pi_annee_min,$pi_annee_max,$pst_nom1,$pst_prenom1,$pst_nom2,$pst_prenom2,$pst_paroisse,$pst_commentaires,$pb_rech_phonetique);
	//print("Req=$st_requete<br>");
	$a_liste_actes = $pconnexionBD->sql_select_multiple($st_requete);
	$i_nb_total_lignes = count($a_liste_actes);
	$i_nb_pages= ceil($i_nb_total_lignes/NB_LIGNES_PAR_PAGE);
  $i_max_actes = 200;
	if ($i_nb_total_lignes>0)
	{	
		if ($i_nb_total_lignes>$i_max_actes)
		{
			$a_liste_actes=array_slice($a_liste_actes,0,$i_max_actes);
			$i_nb_pages= ceil($i_max_actes/NB_LIGNES_PAR_PAGE);
			print("<div class=INFO>$i_nb_total_lignes actes trouv&eacute;s. Recherche limit&eacute;e aux $i_max_actes premiers</div>");
		}
    else
      print("<div class=INFO>$i_nb_total_lignes actes trouv&eacute;s</div>");	
		print('<form id="recherche_rep_not" action="'.$_SERVER['PHP_SELF'].'" method="post">');
		print('<input type="hidden" name="mode" value="RECHERCHES">');
		if ($i_nb_pages>1)
		{
			print("<div class=\"div_centre\">Page du r&eacute;pertoire: <select id=\"num_page_rep_not\" name=\"num_page_rep_not\">");
			$a_pages=range(1,$i_nb_pages);
			print(chaine_select_options_simple($pi_num_page,$a_pages));
			print("</select></div>");
		}
		print("<br><table border=1 align=center>");
		print("<tr>");
		$a_entetes = array('Date','Type','Intervenant1','Intervenant2','Paroisse','Commentaires','Notaire - Commune (Cote)','Page','DateRep');
		foreach ($a_entetes as $st_cell_entete) {
			print("<th>$st_cell_entete</th>");
		}
		print("</tr>\n");
		$i_limite_inf = ($pi_num_page-1)*NB_LIGNES_PAR_PAGE;
		$a_liste_actes=array_slice($a_liste_actes,$i_limite_inf,NB_LIGNES_PAR_PAGE);
		$i=0;		
		foreach ($a_liste_actes as $a_acte)
		{
			$st_class = ($i%2==0) ? 'ligne_paire':  'ligne_impaire';
			print("<tr class=$st_class>");
			list($i_annee,$i_mois,$i_jour,$st_date_rep,$st_type,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_commentaires,$i_page,$st_notaire,$st_com_notaire,$st_cote) = $a_acte;
      if ($i_annee==9999)
         $st_date="Sans date";
      else
        if (empty($i_jour) && empty($i_mois))
          $st_date =  sprintf("Jour et mois inconnus %4d",$i_annee);
        else if (empty($i_jour))
          $st_date =  sprintf("Jour inconnu %s %4d",$ga_mois[$i_mois],$i_annee);
        else if (empty($i_mois))
          $st_date =  sprintf("%d mois inconnu %4d",$i_jour,$i_annee);
        else   
          $st_date =  sprintf("%d %s %4d",$i_jour,$ga_mois[$i_mois],$i_annee);
			$a_ligne = array($st_date,$st_type,"$st_prenom1 $st_nom1","$st_prenom2 $st_nom2",$st_paroisse,$st_commentaires,sprintf("%s - %s (%s)",$st_notaire,$st_com_notaire,$st_cote),$i_page,$st_date_rep);
			foreach ($a_ligne as $st_champ)
			{
				if ($st_champ!="")
					print("<td>$st_champ</td>");
				else
				print("<td>&nbsp;</td>");   
			}
			print("</tr>\n");
			$i++;
		} 		
		print("</table></form>");
	}
	else
	{
		print("<div>Pas de r&eacute;sultats avec les contraintes d&eacute;finies</div>");
	}
	print('<div class=div_centre>La cote fait r&eacute;f&eacute;rence &agrave; celle du r&eacute;pertoire et non celle de la liasse o&ugrave; se trouve l\'acte</div>');
	print('<form id="recherche_rep_not_retour" action="'.$_SERVER['PHP_SELF'].'" method="post">');
	print('<input type="hidden" name="mode" value="MENU">');
	print("<div class=align-center><input type=\"submit\" value=\"Retour\" class=\"bouton_centre\"></div>");
  print('<input type="hidden" name="ancienne_page" value="RECHERCHES">');
	print("</form>");
	print('<form id="recherche_rep_not_nouveau" action="'.$_SERVER['PHP_SELF'].'" method="post">');
	print('<input type="hidden" name="mode" value="MENU">');
	print('<input type="hidden" name="recherche" value="nouvelle">');
	print("<div ><input type=\"submit\" value=\"Commencer une nouvelle recherche\" class=\"bouton_centre\"></div>");
	print("</form>");
}

/******************************************************************************/
/*                     CORPS DU PROGRAMME                                     */
/******************************************************************************/        
$gst_mode = empty($_REQUEST['mode']) ? 'MENU' : $_REQUEST['mode'];
      
print('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN"><html>');
print("<head>\n");
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" >');
print("<link href='../Commun/Styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.structure.min.css' type='text/css' rel='stylesheet'>");
print("<link href='../Commun/jquery-ui.theme.min.css' type='text/css' rel='stylesheet'> ");
print("<link href='../Commun/select2.min.css' type='text/css' rel='stylesheet'> ");
print('<meta http-equiv="content-language" content="fr"> ');
print("<script src='../Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='../Commun/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='../Commun/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='../js/jquery-ui.min.js' type='text/javascript'></script>");
print("<script src='../js/select2.min.js' type='text/javascript'></script>");

?>
<script type='text/javascript'>
$(document).ready(function() {
	
	function MajNotaires(json, textStatus, jqXHR) {
		$("#idf_rep").empty();
		$("#idf_rep").append('<option value="0">Tous</option>');
		var rep_crt=<?php if (isset($_SESSION['idf_repertoire'])) print($_SESSION['idf_repertoire']); else print("null");?>;
		$.each(json, function(key,rep) {
      console.log(rep+"\n");			
			if (rep_crt==key)
			{
				$("#idf_rep").append('<option value="' + key + '" selected="selected">' + rep + '</option>');     
			}
			else
			{
				$("#idf_rep").append('<option value="' + key + '">' + rep + '</option>');
			}	  
		});
	}
  
	$.ajax({
       url: 'ajax/notaire.php',
       data: 'idf_commune_notaire='+$('#idf_commune_notaire').val(),
       dataType: 'json',
       success: MajNotaires
    });
	 
	$("#idf_commune_notaire").change(function() {
		$.ajax({
			url: 'ajax/notaire.php',
			data: 'idf_commune_notaire='+$('#idf_commune_notaire').val(),
			dataType: 'json',
			success: MajNotaires
		});
	});

	$('#type_acte').autocomplete({
		source : './ajax/type_acte.php',
		minLength: 2
	});
	$('#nom1').autocomplete({
		source : './ajax/patronyme.php',
		minLength: 2
	});
	$('#nom2').autocomplete({
		source : './ajax/patronyme.php',
		minLength: 2
	});
  $('#prenom1').autocomplete({
		source : './ajax/prenom.php',
		minLength: 2
	});
	$('#prenom2').autocomplete({
		source : './ajax/prenom.php',
		minLength: 2
	});
	$('#paroisse').autocomplete({
		source : './ajax/paroisse.php',
		minLength: 3
	});
  $("#num_page_rep_not").change(function() {
    $('#recherche_rep_not').submit();
  });
	
  $(".js-select-avec-recherche").select2({ width: '100%' });
});

</script>
<style>
input {
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 2px;
	padding-bottom: 2px;
	margin-left: 5px;
	margin-right: 5px;
	margin-top: 5px;
	margin-bottom: 5px;
}
input.bouton_centre {
	margin-left: auto;
	margin-right: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	display: block;
    position: relative;
}

fieldset {
	margin-left: 20%;
	margin-right: 20%;
	margin-top: 5px;
	margin-bottom: 5px;
	display: block;
    position: relative;
}

input.select_centre {
	margin-left: auto;
	margin-right: auto;
	margin-top: 5px;
	margin-bottom: 5px;
	display: block;
    position: relative;
}
div.div_centre {
	margin-top: 5px;
	margin-bottom: 5px;
	text-align: center;
}
</style>
<?php
print("<title>Recherche dans les r&eacute;pertoires de notaire</title>");
print('</head>');
print('<body>');
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);  
require_once("../Commun/menu.php");
print("<div class=\"TITRE\">Recherche dans les r&eacute;pertoires de notaire</div>");
print("<div class=\"ERREUR\" id=erreur></div>");
print("<div class=\"INFO\" id=info></div>");
$gst_type_recherche         = isset($_REQUEST['recherche']) ? $_REQUEST['recherche'] : '';	

switch ($gst_mode)
{
	case 'MENU':
    unset($_SESSION['num_page_rep_not']);
		if ($gst_type_recherche=='nouvelle')
		{
			$i_idf_commune = 0;
			$i_idf_repertoire = 0;
			$i_rayon= '';
			$st_type_acte='';
			$i_annee_min = '';
			$i_annee_max = '';
			$st_nom1 = '';
			$st_prenom1 = '';
			$st_nom2 = '';
			$st_prenom2 = '';
			$st_paroisse = '';
      $st_commentaires = '';
      $b_rech_phonetique = true;      	
      unset($_SESSION['rech_phonetique']);     	
		}
		else
		{
			$i_idf_commune       = isset($_SESSION['idf_commune_notaire']) ? $_SESSION['idf_commune_notaire']: 0; 
			$i_rayon             = isset($_SESSION['rayon_rep_not']) && !empty($_SESSION['rayon_rep_not'])? $_SESSION['rayon_rep_not']: '';
			$i_idf_repertoire 	 = isset($_SESSION['idf_repertoire']) ? (int) $_SESSION['idf_repertoire'] : '';
			$st_type_acte  		 = isset($_SESSION['type_acte_rep_not']) ? $_SESSION['type_acte_rep_not']: '';
			$i_annee_min         = isset($_SESSION['annee_min_rep_not']) && !empty($_SESSION['annee_min_rep_not']) ? $_SESSION['annee_min_rep_not']: '';
			$i_annee_max         = isset($_SESSION['annee_max_rep_not']) && !empty($_SESSION['annee_max_rep_not'])? $_SESSION['annee_max_rep_not']: '';
			$st_nom1         	 = isset($_SESSION['nom1']) ? $_SESSION['nom1']: '';
			$st_prenom1          = isset($_SESSION['prenom1']) ? $_SESSION['prenom1']: '';
			$st_nom2         	 = isset($_SESSION['nom2']) ? $_SESSION['nom2']: '';
			$st_prenom2          = isset($_SESSION['prenom2']) ? $_SESSION['prenom2']: '';
			$st_paroisse         = isset($_SESSION['paroisse']) ? $_SESSION['paroisse']: '';
      $st_commentaires         = isset($_SESSION['commentaires']) ? $_SESSION['commentaires']: '';
      if (empty($_REQUEST['ancienne_page']))
        $b_rech_phonetique = true;
      else   
        $b_rech_phonetique = isset($_SESSION['rech_phonetique']) ? $_SESSION['rech_phonetique']: false;
        
		  
    }
		$i_num_page=1;
		$_SESSION['num_page_rep_not'] = $i_num_page;
		affiche_grille_recherche($connexionBD,$i_idf_commune,$i_rayon,$st_type_acte,$i_annee_min,$i_annee_max,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_commentaires,$b_rech_phonetique);
	break;
	case 'RECHERCHES':
		$i_session_num_page = isset($_SESSION['num_page_rep_not']) ? $_SESSION['num_page_rep_not'] : 1;
		$i_num_page = empty($_POST['num_page_rep_not']) ? $i_session_num_page : (int) $_POST['num_page_rep_not'];
		$i_session_idf_commune = isset($_SESSION['idf_commune_notaire']) ? $_SESSION['idf_commune_notaire']: null; 
		$i_idf_commune_notaire = isset($_POST['idf_commune_notaire']) ? (int) $_POST['idf_commune_notaire'] : $i_session_idf_commune;
		$i_session_rayon             = isset($_SESSION['rayon_rep_not']) && !empty($_SESSION['rayon_rep_not'])? $_SESSION['rayon_rep_not']: '';
		$i_rayon = isset($_POST['rayon']) ? (int) $_POST['rayon'] : $i_session_rayon;
		$i_session_annee_min         = isset($_SESSION['annee_min_rep_not']) && !empty($_SESSION['annee_min_rep_not']) ? $_SESSION['annee_min_rep_not']: '';
		$i_annee_min = isset($_POST['annee_min']) ? (int) $_POST['annee_min'] : $i_session_annee_min;
		$i_session_annee_max         = isset($_SESSION['annee_max_rep_not']) && !empty($_SESSION['annee_max_rep_not'])? $_SESSION['annee_max_rep_not']: '';
		$i_annee_max = isset($_POST['annee_max']) ? (int) $_POST['annee_max'] : $i_session_annee_max;
		$st_session_type_acte  		 = isset($_SESSION['type_acte_rep_not']) ? $_SESSION['type_acte_rep_not']: '';
		//$st_type_acte = isset($_POST['type_acte']) ? substr(utf8_decode($_POST['type_acte']),0,40) : $st_session_type_acte;
    $st_type_acte = isset($_POST['type_acte']) ? substr($_POST['type_acte'],0,40) : $st_session_type_acte;
		$i_session_idf_repertoire 	 = isset($_SESSION['idf_repertoire']) ? (int) $_SESSION['idf_repertoire'] : '';
		$i_idf_repertoire = isset($_POST['idf_rep']) ? (int) $_POST['idf_rep'] : $i_session_idf_repertoire;
		$st_session_nom1         	 = isset($_SESSION['nom1']) ? $_SESSION['nom1']: '';
		//$st_nom1 = isset($_POST['nom1']) ? utf8_decode(substr($_POST['nom1'],0,40)) : $st_session_nom1;
    $st_nom1 = isset($_POST['nom1']) ? substr($_POST['nom1'],0,40) : $st_session_nom1;
		$st_session_prenom1         	 = isset($_SESSION['prenom1']) ? $_SESSION['prenom1']: '';
		$st_prenom1 = isset($_POST['prenom1']) ? utf8_decode(substr($_POST['prenom1'],0,30)) : $st_session_prenom1;
		$st_session_nom2        	 = isset($_SESSION['nom2']) ? $_SESSION['nom2']: '';
		//$st_nom2 = isset($_POST['nom2']) ? utf8_decode(substr($_POST['nom2'],0,40)) : $st_session_nom2;
    $st_nom2 = isset($_POST['nom2']) ? substr($_POST['nom2'],0,40) : $st_session_nom2;
		$st_session_prenom2         	 = isset($_SESSION['prenom2']) ? $_SESSION['prenom2']: '';
		$st_prenom2 = isset($_POST['prenom2']) ? utf8_decode(substr($_POST['prenom2'],0,30)) : '';
		$st_session_paroisse         = isset($_SESSION['paroisse']) ? $_SESSION['paroisse']: '';
		//$st_paroisse = isset($_POST['paroisse']) ? utf8_decode(substr($_POST['paroisse'],0,40)) : $st_session_paroisse;
    $st_paroisse = isset($_POST['paroisse']) ? substr($_POST['paroisse'],0,40) : $st_session_paroisse;
    $st_session_commentaires         = isset($_SESSION['commentaires']) ? $_SESSION['commentaires']: '';
    $st_commentaires = isset($_POST['commentaires']) ? utf8_decode(substr($_POST['commentaires'],0,40)) : $st_session_commentaires;
    $b_session_rech_phonetique         = isset($_SESSION['rech_phonetique']) ? $_SESSION['rech_phonetique']: false;
    if (empty($_REQUEST['ancienne_page']))
      $b_rech_phonetique = isset($_POST['rech_phonetique'])? true : $b_session_rech_phonetique;
    else
      $b_rech_phonetique = isset($_POST['rech_phonetique'])? true : false;      
		$_SESSION['idf_commune_notaire']    = $i_idf_commune_notaire;
		$_SESSION['idf_repertoire']    		= $i_idf_repertoire;
		$_SESSION['rayon_rep_not']                  = $i_rayon;
		$_SESSION['annee_min_rep_not']				= $i_annee_min;
		$_SESSION['annee_max_rep_not']				= $i_annee_max;
		$_SESSION['type_acte_rep_not'] 				= $st_type_acte;
		$_SESSION['nom1'] 					= $st_nom1;
		$_SESSION['prenom1'] 				= $st_prenom1;
		$_SESSION['nom2'] 					= $st_nom2;
		$_SESSION['prenom2'] 				= $st_prenom2;
		$_SESSION['paroisse'] 				= $st_paroisse;
    $_SESSION['commentaires'] 		= $st_commentaires;
		$_SESSION['rech_phonetique'] 	= $b_rech_phonetique;
    $_SESSION['num_page_rep_not'] 		= $i_num_page;
    $gst_adresse_ip = $_SERVER['REMOTE_ADDR'];
    $pf=@fopen("$gst_rep_logs/requetes_rep_not.log",'a');
    date_default_timezone_set($gst_time_zone);
    list($i_sec,$i_min,$i_heure,$i_jmois,$i_mois,$i_annee,$i_j_sem,$i_j_an,$b_hiver)=localtime();
    $i_mois++;
    $i_annee+=1900;
    $st_date_log = sprintf("%02d/%02d/%04d %02d:%02d:%02d",$i_jmois,$i_mois,$i_annee,$i_heure,$i_min,$i_sec);
    $st_chaine_log = join(';',array($st_date_log,$_SESSION['ident'],$gst_adresse_ip,$i_idf_commune_notaire,$i_rayon,$i_idf_repertoire,$st_type_acte,$i_annee_min,$i_annee_max,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse));
    @fwrite($pf,"$st_chaine_log\n"); 
    @fclose($pf);  
		affiche_resultats_recherche($connexionBD,$i_idf_commune_notaire,$i_rayon,$i_idf_repertoire,$st_type_acte,$i_annee_min,$i_annee_max,$st_nom1,$st_prenom1,$st_nom2,$st_prenom2,$st_paroisse,$st_commentaires,$b_rech_phonetique,$i_num_page);	
	break;
	default:
}

?>