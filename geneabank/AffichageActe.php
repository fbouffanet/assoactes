<?php

/**
 * Renvoie la description d'un acte de mariage ou d'un acte divers
 * @param object $pconnexionBD Connexion à la base de données
 * @param array $pa_type_acte Liste des types d'actes indexés par leur identifiant
 * @param array $pa_profession Liste des professons indexées par leur identifiant
 * @param array $pa_commune_personne Liste des communes d'origine des personnes indexées par leur identifiant
 * @param integer $pi_idf_acte identifiant de l'acte à afficher
 * return array Tableau à deux éléments (description de l'acte, commentaires de l'acte,url)       
 */ 
function description_mariage_ou_divers($pconnexionBD,$pa_type_acte,$pa_profession,$pa_commune_personne,$pi_idf_acte)
{
  $st_reponse = '';
  // Affichage des infos de l'acte
  list($i_idf_commune_acte,$st_commune_acte,$i_idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires_acte,$st_permalien)= $pconnexionBD->sql_select_liste("select ca.idf,ca.nom,idf_type_acte,date, date_rep, cote,libre, commentaires,url from acte join commune_acte ca on(ca.idf=acte.idf_commune) where acte.idf=$pi_idf_acte");
  $st_reponse .= "$pa_type_acte[$i_idf_type_acte] à $st_commune_acte le $st_date";
  if ($st_date_rep!='')
     $st_reponse .=" ($st_date_rep)";
  $st_reponse .=" $st_cote $st_libre\n";
  // Récupération des infos de conjoint pour la commune correspondante
  $a_conjointe_epx = array();
  $a_conjoint_epse = array();
  $a_union=$pconnexionBD->sql_select_multiple("select idf_epoux, idf_epouse from `union` join personne epoux on (idf_epoux=epoux.idf) join personne epouse on (idf_epouse=epouse.idf) where `union`.idf_acte=$pi_idf_acte and (epouse.idf_type_presence=".IDF_PRESENCE_EXCJT." or epoux.idf_type_presence=".IDF_PRESENCE_EXCJT.")");
  foreach ($a_union as $a_couple)
  {
     list($i_idf_epx,$i_idf_epse) = $a_couple;
     $a_conjointe_epx[$i_idf_epx]=$i_idf_epse;
     $a_conjoint_epse[$i_idf_epse]=$i_idf_epx;
  }
  // Affichage des infos des personnes
  $a_liste_personnes= $pconnexionBD->sql_select_multiple_par_idf("select p.idf,p.idf_type_presence,p.sexe, p.patronyme,ifnull(prenom.libelle,''),p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p left join prenom on (p.idf_prenom=prenom.idf) where idf_acte=$pi_idf_acte order by p.idf");
  $i_nb_intv=0;
  foreach($a_liste_personnes as $i_idf_pers => $a_personne)
  {
      list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
      switch ($i_idf_type_presence) {
      case IDF_PRESENCE_INTV :
        if ($i_nb_intv==0)
           $st_reponse .="De: ";
        else
           $st_reponse .="Avec: "; 
        $i_nb_intv++;
        $st_reponse .="$st_patronyme $st_prenom ($c_sexe)\n";
        if ($st_commentaires!='')
           $st_reponse .=$st_commentaires."\n";
        // groupe l'origine, la date de naissance, l'âge et la profession sur une même ligne
        $st_ligne= "";                 
        if ($i_idf_origine!=0 && array_key_exists($i_idf_origine,$pa_commune_personne))
           $st_ligne.= " Originaire de $pa_commune_personne[$i_idf_origine]";
        $st_date_naissance = preg_replace('/^\s+$/','',$st_date_naissance);
        if (!preg_match('/^\s*$/',$st_date_naissance))
        {
    	     $st_lib = $c_sexe!='F'? 'Né':'Née';
    	     $st_ligne.= " $st_lib le $st_date_naissance";
        }
        if (!preg_match('/^\s*$/',$st_age))
        {
    	     $st_lib = $c_sexe!='F'? 'Agé':'Agée';
    	     $st_ligne.= " $st_lib de $st_age";
    	     if (preg_match('/^\d+$/',$st_age))
              $st_ligne.= " ans";  
        }
        if ($i_idf_profession!=0 && array_key_exists($i_idf_profession,$pa_profession))
        {
    	     $st_ligne.= " Profession de $pa_profession[$i_idf_profession]";
        }
        if ($st_ligne!='')
           $st_reponse .="$st_ligne\n";
        // Description des parents
        if ($i_idf_pere!=0 || $i_idf_mere!=0)
        {
           $st_lib = $c_sexe!='F'? 'Fs':'Fa';
           $st_reponse .="$st_lib de:";
           if ($i_idf_pere!=0)
           {  
              $st_patro_pere = $a_liste_personnes[$i_idf_pere][2];
              $st_prenom_pere = $a_liste_personnes[$i_idf_pere][3];
              $i_idf_profession_pere = $a_liste_personnes[$i_idf_pere][7];
              $st_commentaire_pere = $a_liste_personnes[$i_idf_pere][8];
              $st_reponse .= " $st_patro_pere $st_prenom_pere";
              if ($i_idf_profession_pere!=0 && array_key_exists($i_idf_profession_pere,$pa_profession))
                 $st_reponse .=" Profession de: $pa_profession[$i_idf_profession_pere]";
              $st_reponse .=" $st_commentaire_pere\n";    
           }
           if ($i_idf_mere!=0)
           {  
              $st_patro_mere = $a_liste_personnes[$i_idf_mere][2];
              $st_prenom_mere = $a_liste_personnes[$i_idf_mere][3];
              $i_idf_profession_mere = $a_liste_personnes[$i_idf_mere][7];
              $st_commentaire_mere = $a_liste_personnes[$i_idf_mere][8];
              if ($st_patro_mere!='' || $st_prenom_mere!='')
              {
                 $st_reponse .="et de: $st_patro_mere $st_prenom_mere";
                 if ($i_idf_profession_mere!=0 && array_key_exists($i_idf_profession_mere,$pa_profession))
                    $st_reponse .=" Profession de: $pa_profession[$i_idf_profession_mere]";
                 $st_reponse .=" $st_commentaire_mere\n";
              }    
           }
        }
        // Calcul de l'ancien conjoint
        $st_patro_cjt='';$st_prenom_cjt='';
        if ($c_sexe=='F')
        {
           if (array_key_exists($i_idf_pers,$a_conjoint_epse))
           {
              $st_patro_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][2];
              $st_prenom_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][3];
              $i_idf_profession_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][7];
              $st_commentaire_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][8];
           }
        }          
        else
        {
          // les cas ? et M sont considérés comme identiques
          
          if (array_key_exists($i_idf_pers,$a_conjointe_epx))
          {
              $st_patro_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][2];
              $st_prenom_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][3];
              $i_idf_profession_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][7];
              $st_commentaire_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][8];                 
          }
        }
        if ($st_patro_cjt!='' || $st_prenom_cjt!='')
        {
          $st_reponse .="Ancien conjoint: $st_patro_cjt $st_prenom_cjt";
          if ($i_idf_profession_cjt!=0)
             $st_reponse .=" Profession de: $pa_profession[$i_idf_profession_cjt]";
          $st_reponse .=" $st_commentaire_cjt\n";
        }    
      break;
      case IDF_PRESENCE_TEMOIN :
        $st_reponse .="Témoin: $st_patronyme $st_prenom $st_commentaires\n";
      break;
      }
   }
   if ($st_commentaires_acte!='')
      $st_reponse .= str_replace('§',"\n",$st_commentaires_acte);
   return array($st_reponse,$st_permalien);   
      
}

/**
 * Renvoie la description courte d'un acte de mariage ou d'un acte divers
 * @param object $pconnexionBD Connexion à la base de données
 * @param array $pa_type_acte Liste des types d'actes indexés par leur identifiant
 * @param array $pa_profession Liste des professons indexées par leur identifiant
 * @param array $pa_commune_personne Liste des communes d'origine des personnes indexées par leur identifiant
 * @param integer $pi_idf_acte identifiant de l'acte à afficher
 * return array Tableau à deux éléments (description de l'acte, commentaires de l'acte,url)       
 */ 
function description_courte_mariage_ou_divers($pconnexionBD,$pa_type_acte,$pa_profession,$pa_commune_personne,$pi_idf_acte)
{
  $st_reponse = '';
  // Affichage des infos de l'acte
  list($i_idf_commune_acte,$st_commune_acte,$i_idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre)= $pconnexionBD->sql_select_liste("select ca.idf,ca.nom,idf_type_acte,date, date_rep, cote,libre, commentaires,url from acte join commune_acte ca on(ca.idf=acte.idf_commune) where acte.idf=$pi_idf_acte");
  $st_reponse .= "$pa_type_acte[$i_idf_type_acte] à $st_commune_acte le $st_date";
  if ($st_date_rep!='')
     $st_reponse .=" ($st_date_rep)";
  $st_reponse .=" $st_cote $st_libre\n";
  // Récupération des infos de conjoint pour la commune correspondante
  $a_conjointe_epx = array();
  $a_conjoint_epse = array();
  $a_union=$pconnexionBD->sql_select_multiple("select idf_epoux, idf_epouse from `union` join personne epoux on (idf_epoux=epoux.idf) join personne epouse on (idf_epouse=epouse.idf) where `union`.idf_acte=$pi_idf_acte and (epouse.idf_type_presence=".IDF_PRESENCE_EXCJT." or epoux.idf_type_presence=".IDF_PRESENCE_EXCJT.")");
  foreach ($a_union as $a_couple)
  {
     list($i_idf_epx,$i_idf_epse) = $a_couple;
     $a_conjointe_epx[$i_idf_epx]=$i_idf_epse;
     $a_conjoint_epse[$i_idf_epse]=$i_idf_epx;
  }
  // Affichage des infos des personnes
  $a_liste_personnes= $pconnexionBD->sql_select_multiple_par_idf("select p.idf,p.idf_type_presence,p.sexe, p.patronyme,ifnull(prenom.libelle,''),p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p left join prenom on (p.idf_prenom=prenom.idf) where idf_acte=$pi_idf_acte order by p.idf");
  $i_nb_intv=0;
  foreach($a_liste_personnes as $i_idf_pers => $a_personne)
  {
      list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
      switch ($i_idf_type_presence) {
      case IDF_PRESENCE_INTV :
        if ($i_nb_intv==0)
           $st_reponse .="De: ";
        else
           $st_reponse .="Avec: "; 
        $i_nb_intv++;
        $st_reponse .="$st_patronyme $st_prenom ($c_sexe)\n";
        if ($st_commentaires!='')
           $st_reponse .=$st_commentaires."\n";
        // groupe l'origine, la date de naissance, l'êge et la profession sur une même ligne
        $st_ligne= "";                 
        if ($i_idf_origine!=0 && array_key_exists($i_idf_origine,$pa_commune_personne))
           $st_ligne.= " Originaire de $pa_commune_personne[$i_idf_origine]";
        $st_date_naissance = preg_replace('/^\s+$/','',$st_date_naissance);
        if (!preg_match('/^\s*$/',$st_date_naissance))
        {
    	     $st_lib = $c_sexe!='F'? 'Né':'Née';
    	     $st_ligne.= " $st_lib le $st_date_naissance";
        }
        if (!preg_match('/^\s*$/',$st_age))
        {
    	     $st_lib = $c_sexe!='F'? 'Agé':'Agée';
    	     $st_ligne.= " $st_lib de $st_age";
    	     if (preg_match('/^\d+$/',$st_age))
              $st_ligne.= " ans";  
        }
        if ($i_idf_profession!=0 && array_key_exists($i_idf_profession,$pa_profession))
        {
    	     $st_ligne.= " Profession de $pa_profession[$i_idf_profession]";
        }
        if ($st_ligne!='')
           $st_reponse .="$st_ligne\n";
        // Description des parents
        if ($i_idf_pere!=0 || $i_idf_mere!=0)
        {
           $st_lib = $c_sexe!='F'? 'Fs':'Fa';
           $st_reponse .="$st_lib de:";
           if ($i_idf_pere!=0)
           {  
              $st_patro_pere = $a_liste_personnes[$i_idf_pere][2];
              $st_prenom_pere = $a_liste_personnes[$i_idf_pere][3];
              $i_idf_profession_pere = $a_liste_personnes[$i_idf_pere][7];
              $st_commentaire_pere = $a_liste_personnes[$i_idf_pere][8];
              $st_reponse .= " $st_patro_pere $st_prenom_pere";
              if ($i_idf_profession_pere!=0 && array_key_exists($i_idf_profession_pere,$pa_profession))
                 $st_reponse .=" Profession de: $pa_profession[$i_idf_profession_pere]";
              $st_reponse .=" $st_commentaire_pere\n";    
           }
           if ($i_idf_mere!=0)
           {  
              $st_patro_mere = $a_liste_personnes[$i_idf_mere][2];
              $st_prenom_mere = $a_liste_personnes[$i_idf_mere][3];
              $i_idf_profession_mere = $a_liste_personnes[$i_idf_mere][7];
              $st_commentaire_mere = $a_liste_personnes[$i_idf_mere][8];
              if ($st_patro_mere!='' || $st_prenom_mere!='')
              {
                 $st_reponse .="et de: $st_patro_mere $st_prenom_mere";
                 if ($i_idf_profession_mere!=0 && array_key_exists($i_idf_profession_mere,$pa_profession))
                    $st_reponse .=" Profession de: $pa_profession[$i_idf_profession_mere]";
                 $st_reponse .=" $st_commentaire_mere\n";
              }    
           }
        }
        // Calcul de l'ancien conjoint
        $st_patro_cjt='';$st_prenom_cjt='';
        if ($c_sexe=='F')
        {
           if (array_key_exists($i_idf_pers,$a_conjoint_epse))
           {
              $st_patro_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][2];
              $st_prenom_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][3];
              $i_idf_profession_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][7];
              $st_commentaire_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][8];
           }
        }          
        else
        {
          // les cas ? et M sont considérés comme identiques
          
          if (array_key_exists($i_idf_pers,$a_conjointe_epx))
          {
              $st_patro_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][2];
              $st_prenom_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][3];
              $i_idf_profession_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][7];
              $st_commentaire_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][8];                 
          }
        }
        if ($st_patro_cjt!='' || $st_prenom_cjt!='')
        {
          $st_reponse .="Ancien conjoint: $st_patro_cjt $st_prenom_cjt";
          if ($i_idf_profession_cjt!=0)
             $st_reponse .=" Profession de: $pa_profession[$i_idf_profession_cjt]";
          $st_reponse .=" $st_commentaire_cjt\n";
        }    
      break;

      }
   }
   return $st_reponse;   
      
}


/**
 * Renvoie la description de l'acte de naissance donné au fromat texte
 * @param object $pconnexionBD Connexion à la base de données
 * @param array  $pa_profession liste des professions indexées par leur identifiant
 * @param integer $pi_idf_acte Identifiant de l'acte
 * return array Tableau à deux éléments (description de l'acte, commentaires de l'acte,permalien)  
 */ 
function description_naissance($pconnexionBD,$pa_profession,$pi_idf_acte) 
{
   $st_description = '';
   list($i_idf_commune_acte,$st_commune_acte,$i_idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires_acte,$st_permalien)= $pconnexionBD->sql_select_liste("select ca.idf,ca.nom,idf_type_acte,date, date_rep, cote,libre, commentaires,url from acte join commune_acte ca on(ca.idf=acte.idf_commune) where acte.idf=$pi_idf_acte");
   $a_union=$pconnexionBD->sql_select_multiple("select idf_epoux, idf_epouse from `union` join personne epoux on (idf_epoux=epoux.idf) join personne epouse on (idf_epouse=epouse.idf) where `union`.idf_acte=$pi_idf_acte and (epouse.idf_type_presence=".IDF_PRESENCE_EXCJT." or epoux.idf_type_presence=".IDF_PRESENCE_EXCJT.")");
   $a_conjointe_epx = array();
   $a_conjoint_epse = array();
   foreach ($a_union as $a_couple) {
      list($i_idf_epx,$i_idf_epse) = $a_couple;
      $a_conjointe_epx[$i_idf_epx]=$i_idf_epse;
      $a_conjoint_epse[$i_idf_epse]=$i_idf_epx;
   }

   $a_liste_personnes= $pconnexionBD->sql_select_multiple_par_idf("select p.idf,p.idf_type_presence,p.sexe, p.patronyme,ifnull(prenom.libelle,''),p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p left join prenom on (p.idf_prenom=prenom.idf) where idf_acte=$pi_idf_acte order by p.idf");

   $st_description .= "° à $st_commune_acte le $st_date";
   if ($st_date_rep!='')
      $st_description .= " ($st_date_rep)";
   $st_description .= " $st_cote $st_libre\n";
   foreach ($a_liste_personnes as $idf_pers => $a_personne)
   {
      list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
      switch ($i_idf_type_presence) {
      case IDF_PRESENCE_INTV :
         $st_description .= "De : $st_patronyme $st_prenom ($c_sexe)\n";
         if ($st_commentaires!='')
            $st_description .="$st_commentaires\n";
         if ($i_idf_pere!=0 || $i_idf_mere!=0)
         {
            $st_lib = $c_sexe!='F'? 'Fs':'Fa';
            $st_description .="$st_lib de :";
            if ($i_idf_pere!=0)
            {  
               $st_patro_pere = $a_liste_personnes[$i_idf_pere][2];
               $st_prenom_pere = $a_liste_personnes[$i_idf_pere][3];
               $i_idf_profession_pere = $a_liste_personnes[$i_idf_pere][7];
               $st_commentaire_pere = $a_liste_personnes[$i_idf_pere][8];
               $st_description .= " $st_patro_pere $st_prenom_pere";
               if ($i_idf_profession_pere!=0)
                   $st_description .= " Profession de: $pa_profession[$i_idf_profession_pere]";
               $st_description .= " $st_commentaire_pere\n";    
            }
            if ($i_idf_mere!=0)
            {  
               $st_patro_mere = $a_liste_personnes[$i_idf_mere][2];
               $st_prenom_mere = $a_liste_personnes[$i_idf_mere][3];
               $i_idf_profession_mere = $a_liste_personnes[$i_idf_mere][7];
               $st_commentaire_mere = $a_liste_personnes[$i_idf_mere][8];
               if ($st_patro_mere!='' || $st_prenom_mere!='')
               {
                  $st_description .= "et de : $st_patro_mere $st_prenom_mere";
                  if ($i_idf_profession_mere!=0)
                     $st_description .= " Profession de: $pa_profession[$i_idf_profession_mere]";
                  $st_description .=" $st_commentaire_mere\n";
               }    
            }
         }   
      break;
      case IDF_PRESENCE_PARRAIN :
        $st_description .="Parrain/témoin: $st_patronyme $st_prenom $st_commentaires\n";
      break;
      case IDF_PRESENCE_MARRAINE :
        $st_description .= "Marraine/témoin: $st_patronyme $st_prenom $st_commentaires\n";
      break;
      }   
   }
   if ($st_commentaires_acte!='')
      $st_commentaires_acte = str_replace('§',"\n",$st_commentaires_acte);  
   return array($st_description,$st_commentaires_acte,$st_permalien);
}

/**
 * Renvoie la description de l'acte de naissance donné au fromat texte
 * @param object $pconnexionBD Connexion à la base de données
 * @param array  $pa_profession liste des professions indexées par leur identifiant
 * @param array $pa_commune_personne Liste des communes d'origine des personnes indexées par leur identifiant 
 * @param integer $pi_idf_acte Identifiant de l'acte
 * return array Tableau à deux éléments (description de l'acte, commentaires de l'acte,permalien)  
 */ 
function description_deces($pconnexionBD,$pa_profession,$pa_commune_personne,$pi_idf_acte) 
{
   $st_description = '';
   list($i_idf_commune_acte,$st_commune_acte,$i_idf_type_acte,$st_date,$st_date_rep,$st_cote,$st_libre,$st_commentaires_acte,$st_permalien)= $pconnexionBD->sql_select_liste("select ca.idf,ca.nom,idf_type_acte,date, date_rep, cote,libre, commentaires,url from acte join commune_acte ca on(ca.idf=acte.idf_commune) where acte.idf=$pi_idf_acte");
   $a_union=$pconnexionBD->sql_select_multiple("select idf_epoux, idf_epouse from `union` join personne epoux on (idf_epoux=epoux.idf) join personne epouse on (idf_epouse=epouse.idf) where `union`.idf_acte=$pi_idf_acte and (epouse.idf_type_presence=".IDF_PRESENCE_EXCJT." or epoux.idf_type_presence=".IDF_PRESENCE_EXCJT.")");
   $a_conjointe_epx = array();
   $a_conjoint_epse = array();
   foreach ($a_union as $a_couple) {
      list($i_idf_epx,$i_idf_epse) = $a_couple;
      $a_conjointe_epx[$i_idf_epx]=$i_idf_epse;
      $a_conjoint_epse[$i_idf_epse]=$i_idf_epx;
   }

   $a_liste_personnes= $pconnexionBD->sql_select_multiple_par_idf("select p.idf,p.idf_type_presence,p.sexe, p.patronyme,ifnull(prenom.libelle,''),p.idf_origine,p.date_naissance,p.age,p.idf_profession, p.commentaires,p.idf_pere,p.idf_mere,p.est_decede from personne p left join prenom on (p.idf_prenom=prenom.idf) where idf_acte=$pi_idf_acte order by p.idf");
   $st_description .= "&dagger; à $st_commune_acte le $st_date";
   if ($st_date_rep!='')
      $st_description.= " ($st_date_rep)";
   $st_description.= " $st_cote $st_libre\n";
   foreach ($a_liste_personnes as $i_idf_pers => $a_personne)
   {
      list($i_idf_type_presence,$c_sexe,$st_patronyme,$st_prenom,$i_idf_origine,$st_date_naissance,$st_age,$i_idf_profession,$st_commentaires,$i_idf_pere,$i_idf_mere,$i_est_decede) = $a_personne;
      switch ($i_idf_type_presence) {
      case IDF_PRESENCE_INTV :
        $st_description.= "De: $st_patronyme $st_prenom ($c_sexe)\n";
        if ($st_commentaires!='')
           $st_description.= "$st_commentaires\n";                 
        if ($i_idf_origine!=0)
           $st_description.= " Originaire de $pa_commune_personne[$i_idf_origine]";
        if (!preg_match('/^\s*$/',$st_date_naissance))
        {
    	     $st_lib = $c_sexe!='F'? 'Né':'Née';
    	     $st_description.= " $st_lib le $st_date_naissance";
        }
        if (!preg_match('/^\s*$/',$st_age))
        {
    	     $st_lib = $c_sexe!='F'? 'Agé':'Agée';
    	     $st_description.=" $st_lib de $st_age";
    	     if (preg_match('/^\d+$/',$st_age))
              $st_description.= " ans";  
        }
        if ($i_idf_profession!=0)
        {
    	     $st_description.=" Profession de $pa_profession[$i_idf_profession]";
        }
        $st_description.="\n";   
        if ($i_idf_pere!=0 || $i_idf_mere!=0)
        {
           $st_lib = $c_sexe!='F'? 'Fs':'Fa';
           $st_description.= "$st_lib de :";
           if ($i_idf_pere!=0)
           {  
              $st_patro_pere = $a_liste_personnes[$i_idf_pere][2];
              $st_prenom_pere = $a_liste_personnes[$i_idf_pere][3];
              $i_idf_profession_pere = $a_liste_personnes[$i_idf_pere][7];
              $st_commentaire_pere = $a_liste_personnes[$i_idf_pere][8];
              $st_description.=" $st_patro_pere $st_prenom_pere";
              if ($i_idf_profession_pere!=0)
                 $st_description.= " Profession de: $pa_profession[$i_idf_profession_pere]";
              $st_description.=" $st_commentaire_pere\n";    
           }
           if ($i_idf_mere!=0)
           {  
              $st_patro_mere = $a_liste_personnes[$i_idf_mere][2];
              $st_prenom_mere = $a_liste_personnes[$i_idf_mere][3];
              $i_idf_profession_mere = $a_liste_personnes[$i_idf_mere][7];
              $st_commentaire_mere = $a_liste_personnes[$i_idf_mere][8];
              if ($st_patro_mere!='' || $st_prenom_mere!='')
              {
                 $st_description.= "et de : $st_patro_mere $st_prenom_mere";
                 if ($i_idf_profession_mere!=0)
                    $st_description.=" Profession de: $pa_profession[$i_idf_profession_mere]";
                 $st_description.=" $st_commentaire_mere";
               }    
            }
        }
        $st_description.= "\n";
        // Calcul de l'ancien conjoint
        $st_patro_cjt='';$st_prenom_cjt='';
        if ($c_sexe=='F')
        {                
           if (array_key_exists($i_idf_pers,$a_conjoint_epse))
           {
              $st_patro_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][2];
              $st_prenom_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][3];
              $i_idf_profession_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][7];
              $st_commentaire_cjt = $a_liste_personnes[$a_conjoint_epse[$i_idf_pers]][8];
           }
        }
        else
        {
           if (array_key_exists($i_idf_pers,$a_conjointe_epx))
           {
              $st_patro_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][2];
              $st_prenom_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][3];
              $i_idf_profession_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][7];
              $st_commentaire_cjt = $a_liste_personnes[$a_conjointe_epx[$i_idf_pers]][8];
           }
        }
        if ($st_patro_cjt!='' || $st_prenom_cjt!='')
        {
           $st_description.= "Conjoint: $st_patro_cjt $st_prenom_cjt";
           if ($i_idf_profession_cjt!=0)
              $st_description.=" Profession de: $pa_profession[$i_idf_profession_cjt]";
           $st_description.= " $st_commentaire_cjt";
        }  
        $st_description.= "\n";                 
      break;
      case IDF_PRESENCE_TEMOIN :
        $st_description.= "Témoin: $st_patronyme $st_prenom $st_commentaires\n";
           
      break;
    }     
  }
  if ($st_commentaires_acte!='')
      $st_commentaires_acte = str_replace('§',"\n",$st_commentaires_acte);    
   return array($st_description,$st_commentaires_acte,$st_permalien);
}

?>
