<?php

// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------‌

/**
 * Retourne vrai si la chaine est un patronyme (chaine majuscule)
 * @param string $pst_chaine Chaine à vérifier
 * @return boolean vrai si $pst_chaine est en majuscules 
 */ 
 function est_patronyme($pst_chaine)
 {
    return $pst_chaine==strtoupper($pst_chaine);
 }

/**
 * Retourne vrai si la chaine est un prÚnom (Tous les prénoms simples en minuscules sauf l'initiale en majuscule). Exemple :  Jean-Louis
 * ! est considéré comme un prénom valide (non lisible) 
 * @param string $pst_chaine Chaine à vérifier
 * @return boolean vrai si $pst_chaine est un prénom
 */ 
 function est_prenom($pst_chaine)
 {
    if ($pst_chaine=='!') return true;
    $a_champs = explode('-',$pst_chaine);
    foreach ($a_champs as $st_champ)
    {
       if ($st_champ!=ucfirst(strtolower($st_champ)) || !preg_match("/^[A-Za-zaéèçïöü]+$/",strval($st_champ)))
           return false;
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
  $pst_conjoint = eregi_replace("^Veuve de ","",$pst_conjoint); 
  $pst_conjoint = eregi_replace("^Veuf de ","",$pst_conjoint); 
  $pst_conjoint = eregi_replace("^Veuf ","",$pst_conjoint); 
  $pst_conjoint = eregi_replace("^Veuve ","",$pst_conjoint);
  $pst_conjoint = eregi_replace("^Vve ","",$pst_conjoint);
  $pst_conjoint = eregi_replace("^Vf ","",$pst_conjoint);
  if (ereg(',',$pst_conjoint))
  {
     list($st_restant,$st_cmt_conjoint)=split(",",$pst_conjoint,2);
     $pst_conjoint=$st_restant;
  }
  
  if ($pst_conjoint!='')
  {
     if  (ereg("\x86",$pst_conjoint))
     {
         list($pst_conjoint,$st_lib_dec) = split("\x86",$pst_conjoint,2);
         $pst_conjoint=rtrim($pst_conjoint);
     }
     $a_champs =  preg_split ('/\s+/',$pst_conjoint);
     if (count($a_champs)==2)
     {
        if (est_patronyme($a_champs[0]) && est_prenom($a_champs[1]))
        {
           // le conjoint est de la forme : NOM Prénom
           $st_patro_conjoint = $a_champs[0];
           $st_prenom_conjoint = $a_champs[1];
        }
        elseif (est_patronyme($a_champs[1]) && est_prenom($a_champs[0]))
        {
           // le conjoint est de la forme : Prénom NOM 
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
       // récupération d'un prénom inconnu si un nom est possible
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
 * @param unknown_type $pa_champs Champs à regarder
 * @param unknown_type $pi_indice1 index du premier champ décrivant l'individu 1
 * @param unknown_type $pi_indice2 index du premier champ  décrivant l'individu 2
 * @param unknown_type $pi_longueur_personnes longueur des champs décrivant un individu
 * @return boolean vrai si l'acte est filiatif
 */

function est_informatif($pa_champs,$pi_indice1,$pi_indice2,$pi_longueur_personnes)
{
   $st_chaine = join('',array_slice($pa_champs,$pi_indice1,$pi_longueur_personnes));
   $st_chaine .= join('',array_slice($pa_champs,$pi_indice2,$pi_longueur_personnes));
   #  on considère que l'acte ne comporte pas d'informations si tous ses champs sont vides
   return !preg_match('/^[\s\!\?]*$/',$st_chaine);
}

/**
  *  Rend un prénom propre (Exemple "JEAn-eMILE d'ALENCON" => "Jean-Emile D\'Alencon")
  *  @param string $pst_prenom
 */ 
function nettoie_prenom(&$pst_prenom)
{
	$pst_prenom = ucwords(strtolower($pst_prenom));
	foreach (array('-', '\'', ' ') as $delimiter)
	{
	  if (strpos($pst_prenom , $delimiter)!==false)
	  {
		$pst_prenom = addslashes(implode($delimiter, array_map('ucfirst', explode($delimiter, $pst_prenom))));
	  }
	}
}

/**
 *  Rend un nom propre (Example "d'Elbauve" => "D'ELBAUVE")
 *  @param string $pst_nom
 */ 
function nettoie_nom(&$pst_nom)
{    
   $pst_nom = strtoupper(addslashes($pst_nom));
}

/**
 * Nettoie les commentaires  (suppression des ')
 * @param string  $pst_commentaires commentaire Ó nettoyer 
 */ 
function nettoie_commentaires(&$pst_commentaires)
{   
   $pst_commentaires=addslashes($pst_commentaires);
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
