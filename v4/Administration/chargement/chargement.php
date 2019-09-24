<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association GÃ©nÃ©alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique GÃ©nÃ©rale GPL GNU publiÃ©e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------â€Œ

/**
 * Retourne vrai si la chaine est un patronyme (chaine majuscule)
 * @param string $pst_chaine Chaine Ã“ vÃšrifier
 * @return boolean vrai si $pst_chaine est en majuscules 
 */ 
 function est_patronyme($pst_chaine)
 {
    return $pst_chaine==strtoupper($pst_chaine);
 }

/**
 * Retourne vrai si la chaine est un prÃšnom (Tous les prÃšnoms simples en minuscules sauf l'initiale en majuscule). Exemple :  Jean-Louis
 * ! est considÃšrÃš comme un prÃšnom valide (non lisible) 
 * @param string $pst_chaine Chaine Ã“ vÃšrifier
 * @return boolean vrai si $pst_chaine est un prÃšnom
 */ 
 function est_prenom($pst_chaine)
 {
    if ($pst_chaine=='!') return true;
    $a_champs = explode('-',$pst_chaine);
    foreach ($a_champs as $st_champ)
    {
       if ($st_champ!=ucfirst(strtolower(trim($st_champ))) || !preg_match("/^[ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿA-Za-z]+$/",$st_champ))
           return false;
       //if ($st_champ!=ucfirst(strtolower($st_champ)))
       //    return false;    
    }
    return true;
 }

/** Renvoie les informations du conjoint tirees d'un champ nimegue V2
 * @param string $pst_conjoint
 * @return array(nom_conjoint, prenom_conjoint, commentaires conjoints)  
 */
function infos_conjoint($pst_conjoint)
{  
  $st_patro_conjoint='';
  $st_prenom_conjoint='';
  $st_cmt_conjoint='';
  $st_lib_dec='';
  $pst_conjoint = preg_replace("/^Veuve de /i","",$pst_conjoint); 
  $pst_conjoint = preg_replace("/^Veuf de /i","",$pst_conjoint); 
  $pst_conjoint = preg_replace("/^Veuf /i","",$pst_conjoint); 
  $pst_conjoint = preg_replace("/^Veuve /i","",$pst_conjoint);
  $pst_conjoint = preg_replace("/^Vve /i","",$pst_conjoint);
  $pst_conjoint = preg_replace("/^Vf /i","",$pst_conjoint);
  if (preg_match('/,/',$pst_conjoint))
  {
     list($st_restant,$st_cmt_conjoint)=preg_split('/\,/',$pst_conjoint,2);
     $st_cmt_conjoint = ltrim($st_cmt_conjoint);
     $pst_conjoint=$st_restant;
  }
  
  if ($pst_conjoint!='')
  {
     if  (preg_match("/\x86/",$pst_conjoint))
     {
         list($pst_conjoint,$st_lib_dec) = preg_split("/\x86/",$pst_conjoint,2);
         $pst_conjoint=rtrim($pst_conjoint);
     }
     $a_champs =  preg_split ('/\s+/',$pst_conjoint);
     if (count($a_champs)==2)
     {
        if (est_patronyme($a_champs[0]) && est_prenom($a_champs[1]))
        {
           // le conjoint est de la forme : NOM PrÃšnom
           $st_patro_conjoint = $a_champs[0];
           $st_prenom_conjoint = $a_champs[1];
        }
        elseif (est_patronyme($a_champs[1]) && est_prenom($a_champs[0]))
        {
           // le conjoint est de la forme : PrÃšnom NOM 
           $st_patro_conjoint = $a_champs[1];
           $st_prenom_conjoint = $a_champs[0];
        }
        else
        {
          $st_cmt_conjoint .= $pst_conjoint;
          $st_patro_conjoint = '#';
        }    
     }
     else if (count($a_champs)==1)
     {
       if (est_patronyme($a_champs[0]))
          $st_patro_conjoint = $a_champs[0];
     }
     else
     {
       // Le champ comporte plus de deux mots 
       $a_patro_possible = array();
       $a_prenom_possible = array();
       $a_inconnus = array();
       $a_autres = array();
       /*
       foreach ($a_champs as $st_champ)
       { 
         if ($st_champ=='?')
            $a_inconnus[]='?';
         else if (est_patronyme($st_champ))
            $a_patro_possible[] = $st_champ;
         else if (est_prenom($st_champ))
            $a_prenom_possible[] = $st_champ;
         else
            $a_autres[] = $st_champ;
       }
       */
       $st_champ = array_shift($a_champs);
       $b_patro_init = false;
       $b_prenom_init = false;
       while (!is_null($st_champ))
       {
          if ($st_champ=='?')
          {
            $a_inconnus[]='?';
            $st_champ = array_shift($a_champs);
          }
          else if (est_patronyme($st_champ))
          { 
             // Un patronyme a déjà été trouvé => echec de la conversion
             if ($b_patro_init)
             {
                array_push($a_autres,$a_champs);
                break;
             }
             $b_patro_init = true; 
             while (!is_null($st_champ) && est_patronyme($st_champ))
             {
                //print("PAT=$st_champ\n");
                $a_patro_possible[] = $st_champ;
                $st_champ = array_shift($a_champs);   
             }
          }
          else if (est_prenom($st_champ))
          {
             // Un prénom a déjà été trouvé => echec de la conversion
             if ($b_prenom_init)
             {
                array_push($a_autres,$a_champs);
                break;
             }
             $b_prenom_init = true; 
             while (!is_null($st_champ) && est_prenom($st_champ))
             {
                //print("PRN=$st_champ\n"); 
                $a_prenom_possible[] = $st_champ;
                $st_champ = array_shift($a_champs);
             }
          }
          else
          {
             $a_autres[] = $st_champ;
             $st_champ = array_shift($a_champs); 
          }  
                   
       }
       // rÃšcupÃšration d'un prÃšnom inconnu si un nom est possible
       if (count($a_prenom_possible)==0 && count($a_inconnus)==1 && count($a_patro_possible)>=1)
          $a_prenom_possible[] = '?'; 
       if (count($a_autres)==0 && count($a_patro_possible)>=1 && count($a_prenom_possible)>=1)
       {
          $st_patro_conjoint = join(' ',$a_patro_possible);
          $st_prenom_conjoint = join(' ',$a_prenom_possible);
       }
       else
       {      
         $st_cmt_conjoint .= $pst_conjoint;
         $st_patro_conjoint = '#';
       }  
     }  
  }
  if ($st_lib_dec!='')
      $st_cmt_conjoint.= "\x86$st_lib_dec";
  nettoie_prenom($st_prenom_conjoint);
  nettoie_commentaires($st_cmt_conjoint);
  return array($st_patro_conjoint,$st_prenom_conjoint,$st_cmt_conjoint);
}


/**
 * Renvoie vrai si l'acte comporte un élement pouvait apporter une information autre que le nom ou le prénom, faux sinon
 *
 * @param array $pa_champs Champs Ã“ regarder
 * @param integer $pi_indice1 index du premier champ décrivant l'individu 1
 * @param integer $pi_indice2 index du premier champ  décrivant l'individu 2
 * @param integer $pi_longueur_personnes longueur des champs décrivant un individu
 * @return boolean vrai si l'acte est filiatif
 */

function est_informatif($pa_champs,$pi_indice1,$pi_indice2,$pi_longueur_personnes)
{
   $st_chaine = join('',array_slice($pa_champs,$pi_indice1,$pi_longueur_personnes));
   $st_chaine .= join('',array_slice($pa_champs,$pi_indice2,$pi_longueur_personnes));
   #  on considÃžre que l'acte ne comporte pas d'information si tous ses champs sont vides
   return !preg_match('/^[\s\!\?]*$/',$st_chaine);
}

/**
 * Renvoie vrai si l'acte comporte des témoins
 *
 * @param array $pa_champs Champs à regarder

 * @param integer $pi_indice index du premier champ  décrivant le premier témoin
 *  
 * @param integer $pi_longueur_personnes longueur des champs décrivant un individu
 * @param integer $pi_nb_temoins nombre de témoins à vérifier 
 * @return boolean vrai si l'acte est filiatif
 */

function a_temoins($pa_champs,$pi_indice,$pi_longueur_personnes,$pi_nb_temoins)
{
   $st_chaine = join('',array_slice($pa_champs,$pi_indice,$pi_longueur_personnes*$pi_nb_temoins));   
   #  on considère que l'acte ne comporte pas d'informations si tous ses champs sont vides
   return !preg_match('/^[\s\!\?]*$/',$st_chaine);
}


/**
 *  Rend un prÃšnom propre (Example "JEAn eMILE d'ALENCON" => "Jean-Emile-D\'alencon")
 *  remplace tous les "-" par des espaces et considÃ¨re les espaces comme sÃ©parateurs de champs
 *  aprÃ¨s avoir mis des majuscule Ã  chaque prÃ©nom, les recolle en les sÃ©parant par 1 espace
 * pour finir tous les espaces sont remplacÃ©s par un "-"
  *  @param string $pst_prenom
 */ 
function nettoie_prenom(&$pst_prenom)
{
//    $a_prns  = array_map("strtolower",preg_split("/\s/",trim($pst_prenom)));
//    $pst_prenom =join('-',array_map("ucfirst",$a_prns));
	$a_prns  = array_map("strtolower",preg_split("/\s/",$pst_prenom));
	$pst_prenom=join(' ',array_map("ucfirst",$a_prns));
    $a_prns  = array_map("ucfirst",preg_split("/-/",$pst_prenom));
	$pst_prenom=join('-',array_map("ucfirst",$a_prns));
}

/**
 *  Rend un nom propre (Example "d'Elbauve" => "D'ELBAUVE")
 *  @param string $pst_nom
 */ 
function nettoie_nom(&$pst_nom)
{    
    $pst_nom = strtoupper(trim($pst_nom));
}

/**
 * Nettoie les commentaires  (suppression des ')
 * @param string  $pst_commentaires commentaire Ã“ nettoyer 
 */ 
function nettoie_commentaires(&$pst_commentaires)
{   
   $pst_commentaires=addslashes(trim($pst_commentaires));
}

/*
 * Renvoie une chaine sans guillemets
 * @param string $pst_chaine
 * return $pst_chaine
*/
function sans_guillemets($pst_chaine)
{
  return str_replace('"','',$pst_chaine);
}

//print_r(infos_conjoint("Catherine DE MARSAT"));
?>
