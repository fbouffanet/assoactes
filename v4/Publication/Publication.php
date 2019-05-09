<?php
require_once '../Commun/config.php';
require_once '../Commun/constantes.php';
require_once('../Commun/Identification.php');
require_once('../Commun/VerificationDroits.php');
verifie_privilege(DROIT_PUBLICATION);
require_once '../Commun/ConnexionBD.php';
require_once('../Commun/PaginationTableau.php');
require_once '../Commun/commun.php';

$gst_repertoire_publication = $_SERVER['DOCUMENT_ROOT'].'/v4/Publication/telechargements';

print('<!DOCTYPE html>');
print("<head>");
print('<link rel="shortcut icon" href="images/favicon.ico">');
print('<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">');
print('<meta http-equiv="content-language" content="fr">');
print('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
print("<link href='../css/styles.css' type='text/css' rel='stylesheet'>");
print("<link href='../css/bootstrap.min.css' rel='stylesheet'>");
print("<script src='../js/jquery-min.js' type='text/javascript'></script>");
print("<script src='../js/bootstrap.min.js' type='text/javascript'></script>");
print("<script type='text/javascript'>");
print("</script>");
print('<title>Gestion des publications !</title>');
print('</head>');

print("\n<body>");
print('<div class="container">');



/**
 * Exporte les naissances au format Nimègue V3
 * @param object $pconnexionBD lien connexion BD
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune_acte identifiant de la commune à exporter      
 * @param character $pc_idf_type_acte identifiant du type d'acte à exporter (type de naissance)
 * @param array $pa_liste_personnes liste des personnes à exporter (calculées par une requête SQL précédente)
 * @param array $pa_liste_actes liste des actes à exporter (calculées par une requête SQL précédente)  
 * @param object $pf pointeur sur le fichier de sortie
 */
 
function export_nai_nimv3($pconnexionBD,$pi_idf_source,$pi_idf_commune_acte,$pc_idf_type_acte,$pa_liste_personnes,$pa_liste_actes,$pf)
{
// à adapter pour prendre le champ code insee
   list($i_code_insee,$st_nom_commune) = $pconnexionBD->sql_select_liste("select code_insee, nom from commune_acte where idf=$pi_idf_commune_acte");
   $a_profession=$pconnexionBD->liste_valeur_par_clef("select idf, nom from profession");   
   foreach ($pa_liste_personnes as $i_idf_acte => $a_personnes)
   {
      $a_champs = array();
      $i_nb_temoins=0;
      $b_parrain_initialise=false;
      foreach ($a_personnes as $i_idf_personne => $a_personne)      
      {
         list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
               
         switch($i_idf_type_presence) {
         case IDF_PRESENCE_INTV: 
           $a_champs[] = $st_patronyme;
           $a_champs[] = $st_prenom;
           $a_champs[] = $c_sexe;
           $a_champs[] = $st_commentaires;
           if (!empty($i_idf_pere))
           {
             $a_champs[] = $a_personnes[$i_idf_pere][2];
             $a_champs[] = $a_personnes[$i_idf_pere][3];
             $a_champs[] = $a_personnes[$i_idf_pere][8];
             $a_champs[] = empty($a_personnes[$i_idf_pere][7]) ? '' : $a_profession[$a_personnes[$i_idf_pere][7]];
                          
           }
           else
              array_push($a_champs,"","","","");
           if (!empty($i_idf_mere))
           {
              $a_champs[] = $a_personnes[$i_idf_mere][2];
              $a_champs[] = $a_personnes[$i_idf_mere][3];
              $a_champs[] = $a_personnes[$i_idf_mere][8];
              $a_champs[] = empty($a_personnes[$i_idf_mere][7]) ? '' : $a_profession[$a_personnes[$i_idf_mere][7]];
           }
           else
              array_push($a_champs,"","","","");   
           break;
           case IDF_PRESENCE_PARRAIN:
             $a_champs[] = $st_patronyme;
             $a_champs[] = $st_prenom;
             $a_champs[] = $st_commentaires;
             $b_parrain_initialise=true;
             $i_nb_temoins++;
           break;
           case IDF_PRESENCE_MARRAINE:
             // cas pour traiter les actes dont seule la marraine est connue
             if (!$b_parrain_initialise)
             {
                array_push($a_champs,"","","");
                $i_nb_temoins++;
             }
             $a_champs[] = $st_patronyme;
             $a_champs[] = $st_prenom;
             $a_champs[] = $st_commentaires;
             $i_nb_temoins++;
           break;
           }
      }
      list($idf_commune_acte,$idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires) = $pa_liste_actes[$i_idf_acte];
      array_unshift($a_champs,'N',$st_date,$st_date_rep,$st_cote,$st_libre);
      array_unshift($a_champs,""); // nom département  => à améliorer
      array_unshift($a_champs,""); // code département  => à améliorer
      array_unshift($a_champs,"NIMEGUEV3",$i_code_insee,$st_nom_commune);
      // Crée les témoins manquants
      for ($i=$i_nb_temoins;$i<2;$i++)
      {
         array_push($a_champs,"","","");
      }
      $a_champs[]=$st_commentaires;
      $a_champs[]=''; // Numéro d'enregistrement
	 
      fwrite($pf,(implode(';',$a_champs)));
      fwrite($pf,"\r\n");
   }

	/*
	$sql = $connexionBD->sql_select_multiple ("select nom, annee_min,annee_max,nb_actes from stats_commune join type_acte on (idf_type_acte=idf) where idf_source=$pi_idf_source and idf_commune=$gi_idf_commune");
	 //$req = mysql_query($sql);
	 //$data = mysql_fetch_array($req); 
	 //mysql_free_result ($req); 
	 print $sql;
	$dateminifp = $data['annee_min'];
	$datemaxifp = $data['annee_max'];
	$nbactesfp = $data['nb_actes'];
	print "Publication des naissances de la commune <b>". $st_nom_commune." année  ".$dateminifp. " - ".$datemaxifp."  ".$nbactesfp."  actes</b> <br>";
	*/
   
   
   
   print "Publication des naissances de la commune <b> $st_nom_commune</b> <br>";
  
}

/**
 * Exporte les deces au format Nimègue V3
 * @param object $pconnexionBD lien connexion BD
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune_acte identifiant de la commune à exporter      
 * @param character $pc_idf_type_acte identifiant du type d'acte à exporter (type : décès)
 * @param array $pa_liste_personnes liste des personnes à exporter (calculées par une requête SQL précédente)
 * @param array $pa_liste_actes liste des actes à exporter (calculées par une requête SQL précédente)  
 * @param object $pf pointeur sur le fichier de sortie 
 */
 
function export_dec_nimv3($pconnexionBD,$pi_idf_source,$pi_idf_commune_acte,$pc_idf_type_acte,$pa_liste_personnes,$pa_liste_actes,$pf)
{
   // à adapter pour prendre le champ code insee
   list($i_code_insee,$st_nom_commune) = $pconnexionBD->sql_select_liste("select code_insee, nom from commune_acte where idf=$pi_idf_commune_acte");
   $a_commune_personne=$pconnexionBD->liste_valeur_par_clef("select idf, nom from commune_personne");
   $a_profession=$pconnexionBD->liste_valeur_par_clef("select idf, nom from profession");
   $a_conjoint_h=$pconnexionBD->liste_valeur_par_clef("select idf_epoux, idf_epouse from `union` where idf_commune=$pi_idf_commune_acte and idf_source=$pi_idf_source and idf_type_acte=$pc_idf_type_acte");
   $a_conjoint_f=array_flip($a_conjoint_h); 
   foreach ($pa_liste_personnes as $i_idf_acte => $a_personnes)
   {
      $a_champs = array();
      $i_nb_temoins=0;
      foreach ($a_personnes as $i_idf_personne => $a_personne)
      {
         list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;               
         switch($i_idf_type_presence) {
           case IDF_PRESENCE_INTV: 
             $a_champs[] = $st_patronyme;
             $a_champs[] = $st_prenom;
             $a_champs[] = empty($i_idf_origine) ? '' : $a_commune_personne[$i_idf_origine];
             $a_champs[] = $st_date_naissance;   
             $a_champs[] = $c_sexe;
             $a_champs[] = $st_age;
             $a_champs[] = $st_commentaires;
             $a_champs[] = empty($i_idf_profession) ? '' : $a_profession[$i_idf_profession];
			 switch ($c_sexe)
             {
               case 'M':
                 if (array_key_exists($i_idf_personne,$a_conjoint_h))
                 {
                   $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][2];
                   $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][3];
                   $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][8];
                   $a_champs[] = empty($a_personnes[$a_conjoint_h[$i_idf_personne]][7]) ? '' : $a_profession[$a_personnes[$a_conjoint_h[$i_idf_personne]][7]];
                 }
                 else
                    array_push($a_champs,"","","","");
                 break;
                 case 'F':
                 if (array_key_exists($i_idf_personne,$a_conjoint_f))
                 {
                   $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][2];
                   $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][3];
                   $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][8];
                   $a_champs[] = empty($a_personnes[$a_conjoint_f[$i_idf_personne]][7]) ? '' : $a_profession[$a_personnes[$a_conjoint_f[$i_idf_personne]][7]];
                 }
                 else
                    array_push($a_champs,"","","","");
                 break;
                 default:
                    array_push($a_champs,"","","","");    
             }             
             if (!empty($i_idf_pere))
             {
               $a_champs[] = $a_personnes[$i_idf_pere][2];
               $a_champs[] = $a_personnes[$i_idf_pere][3];
               $a_champs[] = $a_personnes[$i_idf_pere][8];
               $a_champs[] = empty($a_personnes[$i_idf_pere][7]) ? '' : $a_profession[$a_personnes[$i_idf_pere][7]];
             }
             else
               array_push($a_champs,"","","","");
             if (!empty($i_idf_mere))
             {
               $a_champs[] = $a_personnes[$i_idf_mere][2];
               $a_champs[] = $a_personnes[$i_idf_mere][3];
               $a_champs[] = $a_personnes[$i_idf_mere][8];
               $a_champs[] = empty($a_personnes[$i_idf_mere][7]) ? '' : $a_profession[$a_personnes[$i_idf_mere][7]];
             }
             else
               array_push($a_champs,"","","","");   
            break;
            case IDF_PRESENCE_TEMOIN:
              $a_champs[] = $st_patronyme;
              $a_champs[] = $st_prenom;
              $a_champs[] = $st_commentaires;
              $i_nb_temoins++;
            break;
         }
      }
      list($idf_commune_acte,$idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires) = $pa_liste_actes[$i_idf_acte];
      array_unshift($a_champs,'D',$st_date,$st_date_rep,$st_cote,$st_libre);
      array_unshift($a_champs,""); // nom département  => à améliorer
      array_unshift($a_champs,""); // code département  => à améliorer
      array_unshift($a_champs,"NIMEGUEV3",$i_code_insee,$st_nom_commune);
      // Crée les témoins manquants
      for ($i=$i_nb_temoins;$i<2;$i++)
      {
         array_push($a_champs,"","","");
      }
      $a_champs[]=$st_commentaires;
      $a_champs[]=''; // Numéro d'enregistrement
      fwrite($pf,(implode(';',$a_champs)));
      fwrite($pf,"\r\n");
   }   
    print "Publication des décès de la commune $st_nom_commune<br> <br>";   
}

/**
 * Exporte les mariages au format Nimègue V3
 * @param object $pconnexionBD lien connexion BD
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune_acte identifiant de la commune à exporter      
 * @param character $pc_idf_type_acte identifiant du type d'acte à exporter (type : mariage)
 * @param array $pa_liste_personnes liste des personnes à exporter (calculées par une requête SQL précédente)
 * @param array $pa_liste_actes liste des actes à exporter (calculées par une requête SQL précédente)  
 * @param object $pf pointeur sur le fichier de sortie  
 */
 
function export_mar_nimv3($pconnexionBD,$pi_idf_source,$pi_idf_commune_acte,$pc_idf_type_acte,$pa_liste_personnes,$pa_liste_actes,$pf)
{
  // à adapter pour prendre le champ code insee
  list($i_code_insee,$st_nom_commune) = $pconnexionBD->sql_select_liste("select code_insee, nom from commune_acte where idf=$pi_idf_commune_acte");
  $a_commune_personne=$pconnexionBD->liste_valeur_par_clef("select idf, nom from commune_personne");
  $a_profession=$pconnexionBD->liste_valeur_par_clef("select idf, nom from profession");
  $a_conjoint_h=$pconnexionBD->liste_valeur_par_clef("select idf_epoux, idf_epouse from `union` join `personne` on (idf_epouse=idf) where idf_commune=$pi_idf_commune_acte and idf_source=$pi_idf_source and idf_type_acte=$pc_idf_type_acte and `personne`.idf_type_presence=".IDF_PRESENCE_EXCJT);
  $a_conjoint_f=$pconnexionBD->liste_valeur_par_clef("select idf_epouse, idf_epoux from `union` join `personne` on (idf_epoux=idf) where idf_commune=$pi_idf_commune_acte and idf_source=$pi_idf_source and idf_type_acte=$pc_idf_type_acte and `personne`.idf_type_presence=".IDF_PRESENCE_EXCJT);
  foreach ($pa_liste_personnes as $i_idf_acte => $a_personnes)
  {
    $a_champs = array();
    $i_nb_temoins=0;
    foreach ($a_personnes as $i_idf_personne => $a_personne)
    {
               
      list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
               
      switch($i_idf_type_presence) {
        case IDF_PRESENCE_INTV: 
          $a_champs[] = $st_patronyme;
          $a_champs[] = $st_prenom;
          $a_champs[]=  empty($i_idf_origine) ? '' : $a_commune_personne[$i_idf_origine];
          $a_champs[] = $st_date_naissance;   
          $a_champs[] = $st_age;
          $a_champs[] = $st_commentaires;
          $a_champs[] = empty($i_idf_profession) ? '' : $a_profession[$i_idf_profession];
          switch ($c_sexe)
          {
            case 'M':
              if (array_key_exists($i_idf_personne,$a_conjoint_h))
              {
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][2];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][3];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][8];
              }
              else
                array_push($a_champs,"","","");
            break;
            case 'F':
              if (array_key_exists($i_idf_personne,$a_conjoint_f))
              {
                $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][2];
                $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][3];
                $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][8];                           
              }
              else
                 array_push($a_champs,"","","");
            break;
            default:
              if (array_key_exists($i_idf_personne,$a_conjoint_h))
              {
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][2];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][3];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][8];
              }
              else
                array_push($a_champs,"","","");    
          }             
          if (!empty($i_idf_pere))
          {
             $a_champs[] = $a_personnes[$i_idf_pere][2];
             $a_champs[] = $a_personnes[$i_idf_pere][3];
             $a_champs[] = $a_personnes[$i_idf_pere][8];
             $a_champs[] = empty($a_personnes[$i_idf_pere][7]) ? ''  :$a_profession[$a_personnes[$i_idf_pere][7]];
          }
          else
            array_push($a_champs,"","","","");
          if (!empty($i_idf_mere))
          {
             $a_champs[] = $a_personnes[$i_idf_mere][2];
             $a_champs[] = $a_personnes[$i_idf_mere][3];
             $a_champs[] = $a_personnes[$i_idf_mere][8];
             $a_champs[] = empty($a_personnes[$i_idf_mere][7]) ? '' : $a_profession[$a_personnes[$i_idf_mere][7]];
          }
          else
            array_push($a_champs,"","","","");   
      break;
      case IDF_PRESENCE_TEMOIN:
        $a_champs[] = $st_patronyme;
        $a_champs[] = $st_prenom;
        $a_champs[] = $st_commentaires;
        $i_nb_temoins++;
      break;
    }
  }
  list($idf_commune_acte,$idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires) = $pa_liste_actes[$i_idf_acte];
  array_unshift($a_champs,'M',$st_date,$st_date_rep,$st_cote,$st_libre);
  array_unshift($a_champs,""); // nom département  => à améliorer
  array_unshift($a_champs,""); // code département  => à améliorer
  array_unshift($a_champs,"NIMEGUEV3",$i_code_insee,$st_nom_commune);
  // Crée les témoins manquants
  for ($i=$i_nb_temoins;$i<4;$i++)
  {
     array_push($a_champs,"","","");
  }
  $a_champs[]=$st_commentaires;
  $a_champs[]=''; // Numéro d'enregistrement
  fwrite($pf,(implode(';',$a_champs)));
  fwrite($pf,"\r\n");
  }
  print "Publication des mariages de la commune $st_nom_commune<br> <br>";
}


/**
 * Exporte les actes divers au format Nimègue V3
 * @param object $pconnexionBD lien connexion BD
 * @param integer $pi_idf_source identifiant de la source
 * @param integer $pi_idf_commune_acte identifiant de la commune à exporter      
 * @param array $pa_liste_personnes liste des personnes à exporter (calculées par une requête SQL précédente)
 * @param array $pa_liste_actes liste des actes à exporter (calculées par une requête SQL précédente)  
 * @param object $pf pointeur sur le fichier de sortie   
 */
 
function export_div_nimv3($pconnexionBD,$pi_idf_source,$pi_idf_commune_acte,$pa_liste_personnes,$pa_liste_actes,$pf)
{
  list($i_code_insee,$st_nom_commune) = $pconnexionBD->sql_select_liste("select code_insee, nom from commune_acte where idf=$pi_idf_commune_acte");
  $a_commune_personne=$pconnexionBD->liste_valeur_par_clef("select idf, nom from commune_personne");
  $a_profession=$pconnexionBD->liste_valeur_par_clef("select idf, nom from profession");
  $a_type_acte=$pconnexionBD->sql_select_multiple_par_idf("select idf, nom,sigle_nimegue from type_acte");
  $a_conjoint_h=$pconnexionBD->liste_valeur_par_clef("select idf_epoux, idf_epouse from `union` join `personne` on (idf_epouse=idf) where idf_commune=$pi_idf_commune_acte and idf_source=$pi_idf_source and idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.") and idf_type_presence=".IDF_PRESENCE_EXCJT);
  $a_conjoint_f=$pconnexionBD->liste_valeur_par_clef("select idf_epouse, idf_epoux from `union` join `personne` on (idf_epoux=idf) where idf_commune=$pi_idf_commune_acte and idf_source=$pi_idf_source and idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.") and idf_type_presence=".IDF_PRESENCE_EXCJT);
  foreach ($pa_liste_personnes as $i_idf_acte => $a_personnes)
  {
    $a_champs = array();
    $i_nb_temoins=0;
    $i_nb_personnes=0;
    foreach ($a_personnes as $i_idf_personne => $a_personne)
    {
               
      list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
               
      switch($i_idf_type_presence) {
        case IDF_PRESENCE_INTV: 
          $a_champs[] = $st_patronyme;
          $a_champs[] = $st_prenom;
          $a_champs[] = $c_sexe;
          $a_champs[] = empty($i_idf_origine) ? '' : $a_commune_personne[$i_idf_origine];
          $a_champs[] = $st_date_naissance;   
          $a_champs[] = $st_age;
          $a_champs[] = $st_commentaires;
          $a_champs[] = empty($i_idf_profession) ? '' : $a_profession[$i_idf_profession];
          switch ($c_sexe)
          {
            case 'M':
              if (array_key_exists($i_idf_personne,$a_conjoint_h))
              {
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][2];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][3];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][8];
              }
              else
                array_push($a_champs,"","","");
            break;
            case 'F':
              if (array_key_exists($i_idf_personne,$a_conjoint_f))
              {
                $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][2];
                $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][3];
                $a_champs[] = $a_personnes[$a_conjoint_f[$i_idf_personne]][8];                           
              }
              else
                 array_push($a_champs,"","","");
              break;
            default:
              if (array_key_exists($i_idf_personne,$a_conjoint_h))
              {
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][2];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][3];
                $a_champs[] = $a_personnes[$a_conjoint_h[$i_idf_personne]][8];
              }
              else
                array_push($a_champs,"","","");    
          }             
          if (!empty($i_idf_pere))
          {
             $a_champs[] = $a_personnes[$i_idf_pere][2];
             $a_champs[] = $a_personnes[$i_idf_pere][3];
             $a_champs[] = $a_personnes[$i_idf_pere][8];
             $a_champs[] = empty($a_personnes[$i_idf_pere][7]) ? ''  :$a_profession[$a_personnes[$i_idf_pere][7]];
          }
          else
            array_push($a_champs,"","","","");
          if (!empty($i_idf_mere))
          {
             $a_champs[] = $a_personnes[$i_idf_mere][2];
             $a_champs[] = $a_personnes[$i_idf_mere][3];
             $a_champs[] = $a_personnes[$i_idf_mere][8];
             $a_champs[] = empty($a_personnes[$i_idf_mere][7]) ? '' : $a_profession[$a_personnes[$i_idf_mere][7]];
          }
          else
            array_push($a_champs,"","","","");   
      break;
      case IDF_PRESENCE_TEMOIN:
        if ($i_nb_personnes==1)
        {
            // Si le premier t‚moin en seconde position, le second intervenant n'a pas ‚t‚ saisi
            // ses champs doivent donc ˆtre compl‚t‚s
            array_push($a_champs,"","","","","","","","","","","","","","","","","","","");                       
        } 
        $a_champs[] = $st_patronyme;
        $a_champs[] = $st_prenom;
        $a_champs[] = $st_commentaires;
        $i_nb_temoins++;
      break;
    }
    $i_nb_personnes++;
  }
  list($idf_commune_acte,$idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires) = $pa_liste_actes[$i_idf_acte];
  list($st_type_acte,$st_sigle_acte) = $a_type_acte[$idf_type_acte];
  array_unshift($a_champs,$st_sigle_acte,$st_type_acte); 
  array_unshift($a_champs,'V',$st_date,$st_date_rep,$st_cote,$st_libre);
  array_unshift($a_champs,""); // nom département  => à améliorer
  array_unshift($a_champs,""); // code département  => à améliorer
  array_unshift($a_champs,"NIMEGUEV3",$i_code_insee,$st_nom_commune);
  // Crée les témoins manquants
  for ($i=$i_nb_temoins;$i<4;$i++)
  {
     array_push($a_champs,"","","");
  }
  $a_champs[]=$st_commentaires;
  $a_champs[]=''; // Numéro d'enregistrement
  fwrite($pf,(implode(';',$a_champs)));
  fwrite($pf,"\r\n");
  }
  print "Publication des divers de la commune $st_nom_commune<br> <br>";
  
}



/*------------------------------------------------------------------------------
                            Corps du programme
 -----------------------------------------------------------------------------*/
$connexionBD = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);
require_once("../Commun/menu.php");

$gst_mode = empty($_POST['mode']) ? 'FORMULAIRE': $_POST['mode'] ;
$gi_idf_source = empty($_POST['idf_source']) ? '1': $_POST['idf_source'];
//$gi_idf_commune_acte = empty($_POST['idf_commune_acte']) ? $_SESSION['idf_commune_acte']: $_POST['idf_commune_acte'];
$gi_idf_commune_acte = empty($_POST['idf_commune_acte']) ? '0': $_POST['idf_commune_acte'];
//$gi_idf_releveur = empty($_POST['idf_releveur']) ? '0': $_POST['idf_releveur'];
$gc_idf_type_acte = empty($_POST['idf_type_acte']) ? '0': $_POST['idf_type_acte'];
$gi_idf_version_nimegue = empty($_POST['idf_version_nimegue']) ? '' : $_POST['idf_version_nimegue'];

// Rajout PL dates début et fin *************************
$g_pl_date_debut = empty($_POST['pl_date_debut']) ? '': $_POST['pl_date_debut'];
$g_pl_date_fin = empty($_POST['pl_date_fin']) ? '': $_POST['pl_date_fin'];
//*********************************************************

$a_sources = $connexionBD->liste_valeur_par_clef("select idf,nom from source order by nom");
$a_communes_acte = $connexionBD->liste_valeur_par_clef("select idf,nom from commune_acte order by nom");
//$a_adherents = $connexionBD->sql_select_multiple_par_idf("select idf,prenom,nom from adherent where annee_cotisation=year(now()) order by nom,prenom");
// Attention, la valeur des types doit correspondre aux constantes qui servent au chargement

$a_versions_nimegue = array('2'=>'Version 2','3'=>'Version 3');
print("<form enctype=\"multipart/form-data\" action=\"".$_SERVER['PHP_SELF']."\" method=\"post\" onSubmit=\"return VerifieChamps(0)\">");
switch($gst_mode)
{
   case 'FORMULAIRE' :
   	 print('<div class="panel panel-primary">');
     print('<div class="panel-heading">Création des publications !</div>');
	 print('<div class="panel-body">');
     print('<input type="hidden" name="mode" value="CHARGEMENT" />');
     print('<div align=center>Source: <select name=idf_source>');
     print(chaine_select_options($gi_idf_source,$a_sources));
     print('</select></div><br>');
     print('<div align=center>Commune: <select name=idf_commune_acte>');
     print(chaine_select_options($gi_idf_commune_acte,$a_communes_acte));
     print('</select></div><br>');
 
     print('</select></div><br>');
     print('<div align=center>Type d\'acte Nimegue : <select name=idf_type_acte>');
     print(chaine_select_options($gc_idf_type_acte,$ga_types_nimegue));
     print('</select></div><br>');

     print('</select></div><br>');
    
// Rajout PL dates début et fin *****************************
print('<div align=center>Année début <input type=text size=4 name=pl_date_debut>');	 
print(' Année fin <input type=text size=4 name=pl_date_fin></div><br><br>');	 
//*********************************************************

     print('<div align=center><input type="button" value="Création de la Publication" onClick="Exporte(0,\'EXPORTV3\')"/></div><br>');     
   break;
   
      
   case 'EXPORTV3' :
   $_SESSION['idf_commune_acte'] = $gi_idf_commune_acte;
   print("<div align=center>");
   switch($gc_idf_type_acte)
   {
      case IDF_NAISSANCE : 
      case IDF_MARIAGE : 
      case IDF_DECES : 
//         $a_liste_actes= $connexionBD->sql_select_multiple_par_idf("select idf,idf_commune,idf_type_acte,date, date_rep, cote,libre, commentaires from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte=$gc_idf_type_acte");

// Rajout PL sur les dates **********************************************
$sqltmp = "select idf,idf_commune,idf_type_acte,date, date_rep, cote,libre, commentaires from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte=$gc_idf_type_acte";			
if (!empty($g_pl_date_debut)) $sqltmp = $sqltmp . " and annee >= '$g_pl_date_debut'";			
if (!empty($g_pl_date_fin)) $sqltmp = $sqltmp . " and annee <= '$g_pl_date_fin'";	
$a_liste_actes= $connexionBD->sql_select_multiple_par_idf($sqltmp);
// Nombre de lignes sélectées
$results= $connexionBD->liste_valeur_par_clef($sqltmp);
$nb_rows = count($results);
// pour récupérer l'année mini et maxi
$sqltmp = "select min(annee) as annee_deb, max(annee) as annee_fin from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte=$gc_idf_type_acte";			
if (!empty($g_pl_date_debut)) $sqltmp = $sqltmp . " and annee >= $g_pl_date_debut";			
if (!empty($g_pl_date_fin)) $sqltmp = $sqltmp . " and annee <= $g_pl_date_fin";
// pour récupérer les années sélectionnées
$row = $connexionBD-> sql_select_liste($sqltmp);
$date_deb = $row[0];
$date_fin = $row[1];
// rajout test si date à 0
if ($date_deb < 1500) 
{
   $sqltmp = "select annee from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte=$gc_idf_type_acte order by annee";		
	while ($row = $connexionBD-> sql_select($sqltmp)) {	
	   if ($row[0] > 1500) {
		   $date_deb = $row[0];
			break;
		}
   } 
}
 //        $a_liste_personnes = $connexionBD->liste_valeur_par_doubles_clefs("select p.idf_acte,p.idf,p.idf_type_presence,p.sexe, p.patronyme,p.prenom,p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p join acte a on (p.idf_acte=a.idf)where a.idf_commune=$gi_idf_commune_acte and a.idf_source=$gi_idf_source and a.idf_type_acte=$gc_idf_type_acte order by p.idf_acte,p.idf");
$sqltmp = "select p.idf_acte,p.idf,p.idf_type_presence,p.sexe, p.patronyme,ifnull(prenom.libelle,''),p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p left join prenom  on (p.idf_prenom=prenom.idf) join acte a on (p.idf_acte=a.idf)where a.idf_commune=$gi_idf_commune_acte and a.idf_source=$gi_idf_source and a.idf_type_acte=$gc_idf_type_acte";
if (!empty($g_pl_date_debut)) $sqltmp = $sqltmp . " and annee >= '$g_pl_date_debut'";			
if (!empty($g_pl_date_fin)) $sqltmp = $sqltmp . " and annee <= '$g_pl_date_fin'";	
$sqltmp = $sqltmp ." order by p.idf_acte,p.idf";
$a_liste_personnes = $connexionBD->liste_valeur_par_doubles_clefs($sqltmp);	
//****************************************************************************		
         break;
			
      case IDF_DIVERS :
//         $a_liste_actes= $connexionBD->sql_select_multiple_par_idf("select idf,idf_commune,idf_type_acte,date, date_rep, cote,libre, commentaires from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.")");

// Rajout PL sur les dates ***********************************************************
// PL 23/04/2014  pour n'avoir que les CM, remplacement de 
$sqltmp = "select idf,idf_commune,idf_type_acte,date, date_rep, cote,libre, commentaires from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.")";			
// par
//$sqltmp = "select idf,idf_commune,idf_type_acte,date, date_rep, cote,libre, commentaires from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte = 2";		// CM --> 2

if (!empty($g_pl_date_debut)) $sqltmp = $sqltmp . " and annee >= $g_pl_date_debut";			
if (!empty($g_pl_date_fin)) $sqltmp = $sqltmp . " and annee <= $g_pl_date_fin";	
$a_liste_actes= $connexionBD->sql_select_multiple_par_idf($sqltmp);
// Nombre de lignes sélectées
$results= $connexionBD->liste_valeur_par_clef($sqltmp);
$nb_rows = count($results);
// pour récupérer l'année mini et maxi
// PL 23/04/2014  pour n'avoir que les CM, remplacement de 
$sqltmp = "select min(annee) as annee_deb, max(annee) as annee_fin from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.")";			
//  par
//$sqltmp = "select min(annee) as annee_deb, max(annee) as annee_fin from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte = 2";		// CM --> 2			

if (!empty($g_pl_date_debut)) $sqltmp = $sqltmp . " and annee >= $g_pl_date_debut";			
if (!empty($g_pl_date_fin)) $sqltmp = $sqltmp . " and annee <= $g_pl_date_fin";
// pour récupérer les années sélectionnées
$row = $connexionBD-> sql_select_liste($sqltmp);
$date_deb = $row[0];
$date_fin = $row[1];
// rajout test si date à 0
if ($date_deb < 1500) 
{
   //$sqltmp = "select annee from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte = 2 order by annee";		// CM --> 2
   $sqltmp = "select min(annee) as annee_deb, max(annee) as annee_fin from acte where idf_commune=$gi_idf_commune_acte and idf_source=$gi_idf_source and idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.")";
	while ($row = $connexionBD-> sql_select($sqltmp)) {	
	   if ($row[0] > 1500) {
		   $date_deb = $row[0];
			break;
		}
   } 
}

//         $a_liste_personnes = $connexionBD->liste_valeur_par_doubles_clefs("select p.idf_acte,p.idf,p.idf_type_presence,p.sexe, p.patronyme,p.prenom,p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p join acte a on (p.idf_acte=a.idf) where a.idf_commune=$gi_idf_commune_acte and a.idf_source=$gi_idf_source and a.idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.") order by p.idf_acte,p.idf"); 
// Rajout PL sur les dates
// PL 23/04/2014  pour n'avoir que les CM, remplacement de 
$sqltmp = "select p.idf_acte,p.idf,p.idf_type_presence,p.sexe, p.patronyme,ifnull(prenom.libelle,''),p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p left join prenom on (p.idf_prenom=prenom.idf) join acte a on (p.idf_acte=a.idf) where a.idf_commune=$gi_idf_commune_acte and a.idf_source=$gi_idf_source and a.idf_type_acte not in (".IDF_NAISSANCE.",".IDF_MARIAGE.",".IDF_DECES.")";
//  par
//$sqltmp = "select p.idf_acte,p.idf,p.idf_type_presence,p.sexe, p.patronyme,p.prenom,p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p join acte a on (p.idf_acte=a.idf) where a.idf_commune=$gi_idf_commune_acte and a.idf_source=$gi_idf_source and a.idf_type_acte = 2";		// CM --> 2

if (!empty($g_pl_date_debut)) $sqltmp = $sqltmp . " and annee >= $g_pl_date_debut";			
if (!empty($g_pl_date_fin)) $sqltmp = $sqltmp . " and annee <= $g_pl_date_fin";	
$sqltmp = $sqltmp ." order by p.idf_acte,p.idf";
$a_liste_personnes = $connexionBD->liste_valeur_par_doubles_clefs($sqltmp);
//**************************************************************
   }

// PL fichier des dates saisies pour le script aff_pdf ******************************
   $st_export_annee ="$gst_repertoire_publication/ExportAnnee.txt";
	$pa = fopen($st_export_annee, "w");
	$tmp = $date_deb.";".$date_fin.";".$nb_rows;
	fwrite($pa,$tmp);
	fclose($pa);
//**********************************************************************	
	
   $st_export_nimv3 ="$gst_repertoire_publication/ExportNimV3.csv";
   $pf = fopen($st_export_nimv3, "w");
   
   switch ($gc_idf_type_acte) {
      case IDF_NAISSANCE: 
         export_nai_nimv3($connexionBD,$gi_idf_source,$gi_idf_commune_acte,$gc_idf_type_acte,$a_liste_personnes,$a_liste_actes,$pf); 
		$menuDIV = "N";
      break;
      case IDF_DECES:
         export_dec_nimv3($connexionBD,$gi_idf_source,$gi_idf_commune_acte,$gc_idf_type_acte,$a_liste_personnes,$a_liste_actes,$pf);
		 $menuDIV = "N";
      break;
      case IDF_MARIAGE:
         export_mar_nimv3($connexionBD,$gi_idf_source,$gi_idf_commune_acte,$gc_idf_type_acte,$a_liste_personnes,$a_liste_actes,$pf);
		$menuDIV = "N";		 
      break;
      case IDF_DIVERS:
	     export_div_nimv3($connexionBD,$gi_idf_source,$gi_idf_commune_acte,$a_liste_personnes,$a_liste_actes,$pf);
		 $menuDIV = "O";
      break;
   }
   
   fclose($pf);
     
   if (filesize($st_export_nimv3) == 0) {
   print "<br><b>pas de données</b></br>";
   } else {
   print "</br>";
//-------------------
    print ('</form>');
	print ('<form action="aff_pdf.php" method="post">');
	print ('<p>');
	if ($menuDIV == "O") 	
	{
	print "<br><b>Complément du type acte pour les actes divers expl=> Actes Notariés</b></br>";
	print ('<textarea name="TypeActe" rows="1" cols="45"></textarea><br><br>');
	}
	print "<br><b>Info sur la publication expl=> Relevé par:</b></br>";
    print ('<textarea name="message" rows="8" cols="45"></textarea><br>');
    print ('<input type="submit" value="Exportation du PDF" />');
	print ('</p>');
	print ('</form>');
	
//------------------------------------
   //print("<a href=\"aff_pdf.php\"><b>Exportation du PDF</a><br>");
   }
   print('<input type="hidden" name="mode" value="FORMULAIRE"/><br>');   
   print("<input type=submit value=\"Retour\"></div>");

   break;
   
   default : print("mode $gst_mode inconnu");   
}
print('</form>');
print('</body>');

?>
