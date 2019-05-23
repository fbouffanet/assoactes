<?php
//http://127.0.0.1:8888/Gestion_Documents.php

$gst_chemin = "../";
//$gst_chemin = "";
require_once("$gst_chemin/Commun/config.php");
require_once("$gst_chemin/Commun/constantes.php");
require_once("$gst_chemin/Commun/Identification.php");

// La page est reservee uniquement aux gens ayant les droits utilitaires
require_once("$gst_chemin/Commun/VerificationDroits.php");
verifie_privilege(DROIT_RELEVES);
require_once("$gst_chemin/Commun/ConnexionBD.php");
require_once("$gst_chemin/Commun/PaginationTableau.php");
require_once("$gst_chemin/Commun/commun.php");

print("<head>");
print('<meta http-equiv="Content-Type" content="text/html; charset=cp1252" />');
print('<meta http-equiv="content-language" content="fr" /> ');
print("<link href='$gst_chemin/Commun/Styles.css' type='text/css' rel='stylesheet'/>");
print("<script src='$gst_chemin/Commun/jquery-min.js' type='text/javascript'></script>");
print("<script src='$gst_chemin/Commun/menu.js' type='text/javascript'></script>");

?>
<script type='text/javascript'>
function VerifieSuppression(Formulaire,IdfElement)
{
  var chaine="";
  if (document.forms[Formulaire].elements[IdfElement].checked)
	{
		  chaine=document.forms[Formulaire].elements[IdfElement].id+"\n";
	}
  for (var i = 0; i < document.forms[Formulaire].elements[IdfElement].length; i++)
  {
      if (document.forms[Formulaire].elements[IdfElement][i].checked)
      {
         chaine+=document.forms[Formulaire].elements[IdfElement][i].id+"\n";
      }    
  }
  if (chaine=="")
  {
     alert("Pas de document selectionne");
  }
  else
  {
   	 Message="Etes-vous sur de supprimer ces documents :\n"+chaine+"?";
   	 if (confirm(Message))                        
   	 {                                                                                                                                    
        document.forms[Formulaire].mode.value= 'SUPPRIMER';
        document.forms[Formulaire].submit();                                                           
     }
  }
}
function VerifieChamps(Formulaire)
{
   var fourchette=document.forms[Formulaire].fourchette.value;
   var quantite=document.forms[Formulaire].quantite.value;
   var ListeErreurs	= "";
   if (fourchette=="")
   {
      ListeErreurs+="La fourchette est obligatoire\n";
   }
 //  if (quantite=="")
 //  {
 //     ListeErreurs+="Le nombre de documents est obligatoire\n";
 //  }
   if (quantite!="" && isNaN(quantite))
   {
      ListeErreurs+="Le nombre de documents doit etre un nombre\n";
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
   $gi_idf = (int) $_GET['mod'];
}
else
   $gi_idf_releve = isset ( $_POST['idf']) ? (int) $_POST['idf'] : 0;

$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

/**
 * Affiche la liste des communes
 * @param object $pconnexionBD  connexion a la base de donnees
 * @param string $pst_commune_a_chercher commune a chercher 
 * @global array  $ga_tbl_support libelle des supports d'acte
 * @global array  $ga_tbl_collection libelle des collections d'acte 
 */ 
function menu_liste($pconnexionBD,$pst_commune_a_chercher)
{
   global $gi_num_page_cour;
   global $ga_tbl_support,$ga_tbl_nature,$ga_tbl_collection;
    $st_requete = "SELECT DISTINCT (left( ca.nom, 1 )) AS init FROM `commune_acte` ca join `documents` p on (p.id_commune=ca.idf) ORDER BY init";
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
   foreach ($a_initiales_communes as $c_initiale)
   {
     if ($c_initiale==$gc_initiale)
        print("<span style=\"font-weight: bold;\">$c_initiale </span>");
     else
        print("<a href=".$_SERVER['PHP_SELF']."?initiale_com=$c_initiale>$c_initiale</a> ");
   }
   print("</div><br>");
   
   $pst_commune_a_chercher = str_replace('*','%',$pst_commune_a_chercher);  
   $st_requete = ($pst_commune_a_chercher=='') ? "select p.idf,ca.nom,p.fourchette, p.nature_acte, p.support, p.collection from `documents` p join `commune_acte` ca on (p.id_commune=ca.idf ) where ca.nom like '$gc_initiale%' order by ca.nom,p.fourchette,p.support" : " select p.idf,ca.nom,p.fourchette, p.support, p.collection  from `documents` p join `commune_acte` ca on (p.id_commune=ca.idf ) where ca.nom like '$pst_commune_a_chercher' order by ca.nom,p.fourchette,p.support";
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=\"LISTE\">");
   print("<div align=center>");   
   print('Commune : <input name="commune_a_chercher" value="" size="25" maxlength="25" type="Text">');
   print(' <input type=submit value=Chercher><br>');
   print('<div size="-1">Vous pouvez mettre le caract&egrave;re "*" pour chercher sur une racine (ex.: saint*)</div></div><br>'); 
   $a_liste_documents = $pconnexionBD->sql_select_multiple($st_requete);
   $a_lignes = array();
   $i_nb_documents = count($a_liste_documents);
   if ($i_nb_documents!=0)
   {  
      // construction du tableau 
      foreach ($a_liste_documents as $a_document)
      {
         list($i_idf_reg,$st_commune,$st_fourchette,$st_nature,$st_support,$st_collection)= $a_document;
         $a_lignes[] = array($st_commune,$st_fourchette,$ga_tbl_nature[$st_nature],$ga_tbl_support[$st_support],$ga_tbl_collection[$st_collection],"<input type=button  value=Modifier onClick=\"document.location.href='".$_SERVER['PHP_SELF']."?mod=$i_idf_reg'\">","<input type=checkbox name=\"supp[]\" id=\"$st_commune-$st_fourchette-$ga_tbl_nature[$st_nature]-$ga_tbl_support[$st_support]-$ga_tbl_collection[$st_collection]\" value=$i_idf_reg>");
      } 
	  
      $pagination = new PaginationTableau($_SERVER['PHP_SELF'],'num_page',$i_nb_documents,NB_LIGNES_PAR_PAGE,DELTA_NAVIGATION,array('Commune','Fourchette','Nature','Support','Collection','Modifier','Supprimer'));
      $pagination->init_page_cour($gi_num_page_cour);
      $pagination->affiche_entete_liens_navigation();
      print("<br>");
      $pagination->affiche_tableau_simple($a_lignes);
      print("<br>");
      $pagination->affiche_entete_liens_navigation();      
   }
   else
     print("<div align=center>Pas de documents</div>\n");
   print("<br><div align=center><input type=button value=\"Supprimer les documents s&eacute;lectionn&eacute;s\" ONCLICK=VerifieSuppression(0,\"supp[]\")></div>");   
   print("</form>");  
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");  
   print("<input type=hidden name=mode value=MENU_AJOUTER>");  
   print("<div align=center><input type=submit value=\"Ajouter un document\"></div>");  
   print('</form>');
}

/**
 * Affiche de la table d'édition
 * @param integer $pi_id_commune identifiant de la commune
 * @param integer $pi_type acte identifiant des types d'acte
 * @param integer $pi_nature_acte identifiant la nature de l'acte
 * @param string  $pst_fourchette Fourchette de la photo
 * @param integer $pi_support identifiant de la support de l'acte
 * @param integer $pi_collection identifiant de la collection
 * @param integer $pi_quantite nombres de documents
 * @param string  $pst_auteur auteur de documents 
 * @param array   $pa_communes liste des communes
 * @global array  $ga_tbl_support libelle des supports d'acte
 * @global array  $ga_tbl_collection libelle des collections d'acte
 */ 
function menu_edition($pi_id_commune,$pi_type_acte, $pi_nature_acte,$pst_fourchette,$pi_support,$pi_collection,$pi_quantite,$pst_auteur,$pa_communes)
{
   global $ga_tbl_support,$ga_tbl_nature,$ga_tbl_collection;
   print("<table border=1>");
   print("<tr><th>Commune</th><td><select name=id_commune>".chaine_select_options($pi_id_commune,$pa_communes)."</select></td></tr>");
   $st_checked = $pi_type_acte & 1 ? 'checked' : '';
   print("<tr><th>Type d'acte</th><td><input type=checkbox name=type_acte[] value=\"B\" $st_checked >Bapteme<br>");
   $st_checked = $pi_type_acte & 2 ? 'checked' : '';
   print("<input type=checkbox name=type_acte[] value=\"M\" $st_checked>Mariage<br>");
   $st_checked = $pi_type_acte & 4 ? 'checked' : '';
   print("<input type=checkbox name=type_acte[] value=\"S\" $st_checked>Sepulture<br>");
   $st_checked = $pi_type_acte & 8 ? 'checked' : '';
   print("<input type=checkbox name=type_acte[] value=\"V\" $st_checked>Divers<br></td></tr>");
   print("<tr><th>Fourchette (aaaa-aaaa)</th><td><input type=\"text\" maxsize=20 size=9 name=fourchette value=\"$pst_fourchette\"></td></tr>");
   print("<tr><th>Nature acte</th><td><select name=type_nature>");
   foreach($ga_tbl_nature as $i_index => $st_valeur)
   {
      if ($pi_nature_acte==$i_index)
         print("<option value=\"$i_index\" selected=\"selected\">$st_valeur</option>");
      else
         print("<option value=\"$i_index\">$st_valeur</option>");             
   }
   print("</select></td></tr>");
   print("<tr><th>support</th><td><select name=type_support>");
   foreach($ga_tbl_support as $i_index => $st_valeur)
   {
      if ($pi_support==$i_index)
         print("<option value=\"$i_index\" selected=\"selected\">$st_valeur</option>");
      else
         print("<option value=\"$i_index\">$st_valeur</option>");             
   }
   print("</select></td></tr>");
   print("<tr><th>Collection</th><td><select name=collection>");
   foreach($ga_tbl_collection as $i_index => $st_valeur)
   {
      if ($pi_collection==$i_index)
         print("<option value=\"$i_index\" selected=\"selected\">$st_valeur</option>");
      else
         print("<option value=\"$i_index\">$st_valeur</option>");             
   }
   print("</select></td></tr>");
   print("<tr><th>Nombre de documents</th><td><input type=\"text\" maxsize=5 size=5 name=quantite value=\"$pi_quantite\"></td></tr>");
   print("<tr><th>Auteur</th><td><input type=text name=auteur size=40 value=\"$pst_auteur\"></td></tr>");
   print("</table>");
}

/** Affiche le menu de modification d'une collection de documents
 * @param object $pconnexionBD Identifiant de la connexion de base
 * @param integer $pi_idf Identifiant de la collection de photo
 * @param array $pa_communes Liste des commmunes
 */ 
function menu_modifier($pconnexionBD,$pi_idf,$pa_communes)
{
   $st_requete = "select `id_commune`,`type_acte`,`nature_acte`,`fourchette`,`support`,`collection`,`quantite`,`auteur` from `documents` where idf=$pi_idf";
   list($i_id_commune,$i_type_acte,$i_nature_acte,$st_fourchette,$i_support,$i_collection,$i_quantite,$st_auteur)=$pconnexionBD->sql_select_liste($st_requete);
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=MODIFIER>");
   print("<input type=hidden name=idf value=$pi_idf>");
   print("<div align=center>");
   menu_edition($i_id_commune,$i_type_acte,$i_nature_acte,$st_fourchette,$i_support,$i_collection,$i_quantite,$st_auteur,$pa_communes);   
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
 */ 
function menu_ajouter($pa_communes)
{
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
   print("<input type=hidden name=mode value=AJOUTER>");
   print("<div align=center>");
   menu_edition(0,0,0,'',0,0,0,'',$pa_communes);
   print("</div><br>");
   print("<div align=center><input type=button value=\"Ajouter\" ONCLICK=VerifieChamps(0)></div>");
   print('</form>');
   print("<form  action=\"".$_SERVER['PHP_SELF']."\" method=\"post\">");
   print("<input type=hidden name=mode value=LISTE>");
   print("<div align=center>");
   print("<div align=center><input type=submit value=\"Annuler\")></div>");
   print('</form>');
}

/*-----------------------------------------------------------------------------
* Corps du programme
-----------------------------------------------------------------------------*/

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
$ga_tbl_support = array( 0=>'', 1=>'Acte authentique', 2=>'Photo', 3=>'Relev&eacute; papier');
$ga_tbl_nature = array( 0=>'', 1=>'RPX catholiques', 2=>'RPX protestants', 3=>'Etat civil', 4=>'Actes Notari&eacute; ');
$ga_tbl_collection = array(0=>'', 1=>'AD Depot communes', 2=>'AD Greffe', 3=>'AD Notaire', 4=>'Mairie', 5=>'AM', 6=>'Internet', 7=>'Notaire Etude', 8=>'Archives Diocesaines', 9=>'F (documents familiaux)');

require_once("$gst_chemin/Commun/menu.php");
$gst_commune_a_chercher = isset($_POST['commune_a_chercher']) ? trim($_POST['commune_a_chercher']): '' ;
$gi_num_page_cour = empty($_GET['num_page']) ? 1 : $_GET['num_page'];

$gst_parametres_load_data = 'LOCAL';

$ga_communes    =    $connexionBD->liste_valeur_par_clef("select idf,nom from `commune_acte` order by nom");


switch ($gst_mode) {
  case 'LISTE' : menu_liste($connexionBD,$gst_commune_a_chercher); 
  break;
  case 'MENU_MODIFIER' :
  menu_modifier($connexionBD,$gi_idf,$ga_communes);
  break;
  case 'MODIFIER' :
 
     $i_id_commune = (int) $_POST['id_commune'];
     $gi_idf = (int) $_POST['idf'] ;
	   $a_types_actes = $_POST['type_acte'];
	   $i_type_acte = 0;
     if (in_array('B',$a_types_actes)) $i_type_acte = $i_type_acte|1;
     if (in_array('M',$a_types_actes)) $i_type_acte = $i_type_acte|2;
     if (in_array('S',$a_types_actes)) $i_type_acte = $i_type_acte|4;
     if (in_array('V',$a_types_actes)) $i_type_acte = $i_type_acte|8; 
     $i_nature_acte = (int) $_POST['type_nature'];
     $st_fourchette = trim($_POST['fourchette']);
     $i_support = (int) $_POST['type_support'];
     $i_collection = (int) $_POST['collection'];
     $i_quantite = trim($_POST['quantite']);
     if (get_magic_quotes_gpc())
     {
        if (ini_get('magic_quotes_sybase'))
            $st_auteur = trim($_POST['auteur']);
        else
            $st_auteur = stripslashes(trim($_POST['auteur']));

     }
     else 
       $st_auteur = trim($_POST['auteur']);  
     $connexionBD->initialise_params(array(':auteur'=>$st_auteur));
	 $st_requete = "update `documents` set id_commune=$i_id_commune, type_acte=$i_type_acte, nature_acte=$i_nature_acte, fourchette='$st_fourchette',support=$i_support, collection=$i_collection,quantite=$i_quantite, auteur=:auteur where idf=$gi_idf";
     $connexionBD->execute_requete($st_requete);
     
     menu_liste($connexionBD,null);  
  break;
  case 'MENU_AJOUTER' : 

  menu_ajouter($ga_communes);
  break;
  case 'AJOUTER':
     $i_id_commune = (int) $_POST['id_commune'];
	   $a_types_actes = $_POST['type_acte'];
	   $i_type_acte = 0;
     if (in_array('B',$a_types_actes)) $i_type_acte = $i_type_acte|1;
     if (in_array('M',$a_types_actes)) $i_type_acte = $i_type_acte|2;
     if (in_array('S',$a_types_actes)) $i_type_acte = $i_type_acte|4;
     if (in_array('V',$a_types_actes)) $i_type_acte = $i_type_acte|8; 
     $i_nature_acte = (int) $_POST['type_nature'];
     $st_fourchette = trim($_POST['fourchette']);
     $i_support = (int) $_POST['type_support'];
     $i_collection = (int) $_POST['collection'];
     $i_quantite = trim($_POST['quantite']);
     if (get_magic_quotes_gpc())
     {
        if (ini_get('magic_quotes_sybase'))
            $st_auteur = trim($_POST['auteur']);
        else
            $st_auteur = stripslashes(trim($_POST['auteur']));

     }
     else 
       $st_auteur = trim($_POST['auteur']);
     $connexionBD->initialise_params(array(':auteur'=>$st_auteur));
     $connexionBD->execute_requete("insert into documents(id_commune,type_acte,nature_acte,fourchette,support,collection,quantite,auteur) values($i_id_commune, $i_type_acte, $i_nature_acte,'$st_fourchette',$i_support,$i_collection,$i_quantite,:auteur)");
     menu_liste($connexionBD,null);
   break;
   case 'SUPPRIMER': 
     $a_liste_documents = $_POST['supp'];
    foreach ($a_liste_documents as $i_idf)
     {
	    $r_chantier = $connexionBD->sql_select ("select * from `chantiers` where id_document = $i_idf");			
		 if  (count ($r_chantier) == 0)
		 {
          $connexionBD->execute_requete("delete from `documents` where idf = $i_idf");
         }
		 else
		 {
          print("<div align=center>Les chantiers suivants doivent &ecirc;tre supprim&eacute;s auparavant :</div><br>");
			 $l_chantier = $connexionBD->sql_select_multiple ("select co.nom, ad.nom, re.fourchette 
			 from `commune_acte` co 
			 join `documents`    re on (re.id_commune = co.idf) 
			 join `chantiers`    ch on (ch.id_document = re.idf) 
			 join `adherent`     ad on (ch.id_releveur = ad.idf) 
			 where re.idf = $i_idf");	
          print("<div align=center><table border=1>");
          print("<tr><th>Commune</th><th>Adh&eacute;rent</th><th>Fourchette</th></tr>\n");
          foreach ($l_chantier as $l_chant)
          {
             list($st_commune,$st_adherent, $st_fourchette) = $l_chant;
             print("<tr><td>$st_commune</td><td>$st_adherent</td><td>$st_fourchette</td></tr>\n");
          }
          print("</table></div><br>");          		    
		 }
     }
     menu_liste($connexionBD,null);
   break;
}  
print('</body>');
?>