<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------
if ($_REQUEST['sid']) session_id($_REQUEST['sid']); 

require_once('../Commun/config.php');
require_once('../Commun/Identification.php');
require_once('../Commun/constantes.php');
require_once('../Commun/ConnexionBD.php');
require_once('../commun_indexation.php');

$i_idf_reg = (int) $_POST['idf_reg'];

$st_date = substr(trim($_POST['date']),0,10);
$i_jour_rep = (int) $_POST['jour_rep'];
$i_mois_rep = (int) $_POST['mois_rep'];
$i_annee_rep = (int) $_POST['annee_rep'];
$st_mois_rep = array_key_exists($i_mois_rep,$ga_mois_revolutionnaires_nimegue) ? $ga_mois_revolutionnaires_nimegue[$i_mois_rep] : '';
if (!empty($i_jour_rep) && !empty($st_mois_rep) && !empty($i_annee_rep))
  $st_date_rep = sprintf("%02d/%s/%02d",$i_jour_rep,$st_mois_rep,$i_annee_rep);
else
  $st_date_rep = '';

$st_type_acte = substr(trim($_POST['type_acte']),0,40);

if (array_key_exists($st_type_acte,$ga_types_acte))
{
  $connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
  switch ($st_type_acte)
  {
    case 'N':
    case 'D':
      $c_sexe = substr($_POST['sexe'],0,1);
      $st_patronyme = mb_convert_case(substr(trim($_POST['patronyme']),0,30),MB_CASE_UPPER,"UTF-8");
      $st_prenom = isset($_POST['prenom']) ? mb_convert_case(substr(trim($_POST['prenom']),0,35),MB_CASE_TITLE,"UTF-8"):'';
      $st_patronyme=utf8_decode($st_patronyme);
      $st_prenom=utf8_decode(ucfirst($st_prenom));
      $connexionBD->initialise_params(array(':patronyme'=>$st_patronyme,':prenom'=>$st_prenom));
      $st_requete = "insert into indexation_td_personne(idf_registre,date,date_rep,`type_acte`,sexe,patronyme,prenom) values($i_idf_reg,'$st_date','$st_date_rep','$st_type_acte','$c_sexe',:patronyme,:prenom)";
    break;
    case 'M':
    case 'PM':
      $st_patronyme_epx = mb_convert_case(substr(trim($_POST['patronyme_epx']),0,30),MB_CASE_UPPER,"UTF-8");
      $st_prenom_epx = isset($_POST['prenom_epx']) ? mb_convert_case(substr(trim($_POST['prenom_epx']),0,35),MB_CASE_TITLE,"UTF-8"):'';
       $st_patronyme_epse = mb_convert_case(substr(trim($_POST['patronyme_epse']),0,30),MB_CASE_UPPER,"UTF-8");
      $st_prenom_epse = isset($_POST['prenom_epse']) ? mb_convert_case(substr(trim($_POST['prenom_epse']),0,35),MB_CASE_TITLE,"UTF-8"):'';
      $st_patronyme_epx= $st_patronyme_epx;
      $st_patronyme_epx=utf8_decode($st_patronyme_epx);
      $st_prenom_epx=ucfirst($st_prenom_epx);
      $st_prenom_epx=utf8_decode($st_prenom_epx);
      $st_patronyme_epse= $st_patronyme_epse;
      $st_patronyme_epse=utf8_decode($st_patronyme_epse);
      $st_prenom_epse=ucfirst($st_prenom_epse);
      $st_prenom_epse=utf8_decode($st_prenom_epse);
      $connexionBD->initialise_params(array(':patronyme_epx'=>$st_patronyme_epx,':prenom_epx'=>$st_prenom_epx,':patronyme_epse'=>$st_patronyme_epse,':prenom_epse'=>$st_prenom_epse));
      $st_requete = "insert into indexation_td_couple(idf_registre,date,date_rep,`type_acte`,patronyme_epx,prenom_epx,patronyme_epse,prenom_epse) values($i_idf_reg,'$st_date','$st_date_rep','$st_type_acte',:patronyme_epx,:prenom_epx,:patronyme_epse,:prenom_epse)";
    break;
  }
  $connexionBD->execute_requete($st_requete);
}
?>