<?php

// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association Généalogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique Générale GPL GNU publiée par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

/**
* Renvoie la chaine d'options dans un select HTML
/* @param string $pst_idf_choisi identifiant de l'option choisie
*  @param array $pa_tableau tableau des identiants/valeurs a afficher
*/
function chaine_select_options($pst_idf_choisi,$pa_tableau)
{
   $st_chaine_options = '';
   foreach ($pa_tableau as $st_idf => $st_val)
   {
      $st_chaine_options .= ("$pst_idf_choisi" !='' && "$st_idf"=="$pst_idf_choisi") ? "<option value=\"$st_idf\" selected=\"selected\">$st_val</option>\n": "<option value=\"$st_idf\">$st_val</option>\n";
   }
   return $st_chaine_options;
}

/**
* Renvoie la chaine d'options dans un select HTML (pas de valeur dans le select)
/* @param integer identifiant de l'option choisie
*  @param array $pa_tableau tableau des valeurs a afficher
*/
function chaine_select_options_simple($pst_valeur,$pa_tableau)
{
   $st_chaine_options = '';
   foreach ($pa_tableau as $st_val)
   {
      $st_chaine_options .= ("$pst_valeur" !='' && "$st_val"=="$pst_valeur") ? "<option selected=\"selected\">$st_val</option>\n": "<option >$st_val</option>\n";
   }
   return $st_chaine_options;
}

/**
* Renvoie la chaine d'options dans un select multiple HTML 
/* @param array $pa_selection liste des valeurs déjà sélectionnés
*  @param array $pa_tableau tableau des valeurs a afficher
*/
function chaine_select_options_multiple($pa_selection,$pa_tableau)
{
    $st_chaine_options = '';
    foreach ($pa_tableau as $st_element)
    {       
       if (((count($pa_selection)!=0)) && (in_array("$st_element",$pa_selection,FALSE)))
       {
          $st_chaine_options.="<option selected >$st_element</option>";        
       }
       else
       {
          // Element ne faisant pas partie de la sélection
          $st_chaine_options.="<option >$st_element</option>";
       }    
    }
    
    return $st_chaine_options;
}

/*
* Vérifie que la chaine commence par une voyelle ou non
* @param string $pst_chaine chaine à tester
* @return boolean (vrai si la chaine commence par une voyelle, faux sinon)
*/
function commence_par_une_voyelle($pst_chaine)
{
	switch (mb_strtoupper($pst_chaine[0]))
	{
		case 'A':
		case 'E':
		case 'I':
		case 'O':
		case 'U':
		case 'Y':
			return true;
		break;
		default:
			return false;
	}
}	

?>