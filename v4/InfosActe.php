<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
require_once('Commun/Identification.php');
require_once('Commun/constantes.php');
require_once('Commun/commun.php');
require_once('Commun/ConnexionBD.php');
require_once('Commun/phonex.cls.php');
require_once('Administration/chargement/Acte.php');
require_once('Administration/chargement/CompteurActe.php');
require_once('Administration/chargement/Personne.php');
require_once('Administration/chargement/CompteurPersonne.php');
require_once('Administration/chargement/Prenom.php');
require_once('Administration/chargement/TypeActe.php');
require_once('Administration/chargement/CommunePersonne.php');
require_once('Administration/chargement/Profession.php');

function getRecapitulatifMessage($pst_type, $pi_max, $pi_compteur){
  switch ($pst_type)
  {
    case IDF_NAISSANCE: $pst_type = "naissance";
    break;
    case IDF_DECES:     $pst_type = "d&eacute;c&eacute;s";
    break;
    default:            $pst_type = "mariages et actes divers";
    break;
  }
  return sprintf("<div class=\"row text-center\">Il vous reste <div class=\"badge badge-warning\">%d</div> demandes de $pst_type dans ce mois</div>", $pi_max-$pi_compteur);
}

function getContentBottom($pst_type, $pst_email_adht, $pi_idf_acte){
   $st_msg ='';
   if (!empty(EMAIL_FORUM))
   {
      $st_prefixe_asso = commence_par_une_voyelle(SIGLE_ASSO) ? "de l'": "du " ;
      switch ($pst_type)
      {
        case IDF_NAISSANCE: $st_msg = "";
        case IDF_DECES:     $st_msg = "";
        default:            $st_msg = "";
        break;
      }
   }
   return $st_msg ;
}

/******************************************************************************/
/*                     CORPS DU PROGRAMME                                     */
/******************************************************************************/

print('<!DOCTYPE html>');
print('<html lang="fr">');
print("<head>\n");
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print('<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >');
print('<meta http-equiv="content-language" content="fr"> ');
print("<link href='css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='js/jquery-min.js' type='text/javascript'></script>");
print("<script src='js/jquery.validate.min.js' type='text/javascript'></script>");
print("<script src='js/additional-methods.min.js' type='text/javascript'></script>");
print("<script src='js/jQuery.print.js' type='text/javascript'></script>");
print("<script src='js/bootstrap.min.js' type='text/javascript'></script>"); 
if (isset($_REQUEST['idf_acte']))
{
  $gi_idf_acte = (int) $_REQUEST['idf_acte'];
}
else
 die("<div class=\"alert alert-danger\">Erreur: L'identifiant de l'acte est manquant</div>");

?>
<script type='text/javascript'>
$(document).ready(function() {

$("#bouton_correction").click(function(){
	 window.open('PropositionModification.php?idf_acte=<?php print $gi_idf_acte; ?>', '_blank');
});

$("#bouton_fermeture").click(function(){
    window.close();
});

$("#bouton_impression").click(function(){
     $("#texte_acte").print({ iframe : false,append : "Relev&eacute; provenant de: <?php print(LIB_ASSO);?>"});
});
});
</script>
<?php
print('<title>Infos acte</title>');
print('</head>');

print('<body>');
print('<div class="container">');

print("<div class=\"text-center\"><img src=\"$gst_logo_association\" alt='Logo ".SIGLE_ASSO."'></div>");

$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);

list($i_idf_adherent,$i_max_nai,$i_max_dec,$i_max_mar_div,$st_prenom_adht,$st_nom_adht,$st_email_adht)=$connexionBD->sql_select_liste("select idf,max_nai,max_dec,max_mar_div,prenom,nom,email_forum from adherent where ident='".$_SESSION['ident']."'");
$i_idf_commune = $connexionBD->sql_select1("select idf_commune from acte where idf=$gi_idf_acte");

$a_profession=$connexionBD->liste_valeur_par_clef("select idf, nom from profession");
list($i_idf_type_acte,$i_idf_commune)=$connexionBD->sql_select_liste("select idf_type_acte,idf_commune from acte where idf=$gi_idf_acte");
$gst_adresse_ip = substr($_SERVER['REMOTE_ADDR'],0,15);


$result = $connexionBD->sql_select_stats_actes($i_idf_adherent, $gi_idf_acte, $i_idf_type_acte);
$i_nb_ddes = $result['counter_type'];
$i_nb_ddes_acte = $result['counter_acte'];

switch ($i_idf_type_acte)
{
	case IDF_NAISSANCE: $i_max = $i_max_nai;
    break;
    case IDF_DECES:     $i_max = $i_max_dec;
    break;
    default:            $i_max = $i_max_mar_div;
    break;
}
if ($i_max-$i_nb_ddes>0)
{
	$o_acte = new Acte($connexionBD, null, null, null, null, null, null);
    $o_acte -> charge($gi_idf_acte);
    $st_description_acte = $o_acte -> versChaine();
    $i_nb_lignes = $o_acte ->getNbLignes();
    $st_permalien=  $o_acte->getUrl();
    print('<div id="texte_acte" class="text-center">');
    print("<textarea rows=$i_nb_lignes cols=80 class=\"form-control\">");
    print($st_description_acte);
    print("</textarea>");
    if(!empty($st_permalien))
      print("<a href=\"$st_permalien\" target=\"_blank\" class=\"btn btn-primary col-xs-4 col-xs-offset-4\"><span class=\"glyphicon glyphicon-picture\"></span>Lien vers les AD<a>");
    print("</div>");

    if($i_nb_ddes_acte == 0){
      $i_nb_ddes++;
      $st_requete = "insert into demandes_adherent(idf_adherent,adresse_ip,idf_commune,idf_acte,idf_type_acte,date_demande) values($i_idf_adherent,'$gst_adresse_ip',$i_idf_commune,$gi_idf_acte,$i_idf_type_acte,now())";
      $connexionBD->execute_requete($st_requete);
    }
    print(getRecapitulatifMessage($i_idf_type_acte, $i_max, $i_nb_ddes));
    print(getContentBottom($i_idf_type_acte, $st_email_adht, $gi_idf_acte));
}
else
{
	print('<div class="alert alert-danger">Vous avez atteint votre quota. Merci d\'attendre le prochain mois</div>');
}
print('<div class="btn-group-vertical btn-group-xs col-xs-8 col-xs-offset-2" role="group" aria-label="Groupe de demandes">');
print('<button type=button id="bouton_impression" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span> Imprimer</button>');  
print('<button type=button id="bouton_correction" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Proposer une correction</button>'); 
print('<button type=button id="bouton_fermeture" class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span> Fermer la fen&ecirc;tre</button>');
print('</div>');
print('</div>');
print('</body></HTML>');

?>
