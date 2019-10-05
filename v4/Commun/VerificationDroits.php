<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

/* config.php, Identification.php  et ConnexionBD doivent avoir ete charges auparavant*/

/**
 * Indique si l'utilisateur identifi� par $pst_ident b�n�ficie du droit $pst_droit  
 * @param string $pst_ident identifiant
 * @param string $st_droit droit � v�rifier
 * @return boolean : vrai si l'utilisateur poss�de le droit indiqu� 
 * @global string $gst_utilisateur_bd utilisateur de la connexion BD
 * @global string $gst_mdp_utilisateur_bd mot de passe pour se connecter � la BD
 * @global string $gst_nom_bd nom de la base de donn�es
 * @global string $gst_serveur_bd serveur de bd     
*/
function a_droits($pst_ident,$pst_droit) 
{
   global $gst_utilisateur_bd, $gst_mdp_utilisateur_bd,$gst_nom_bd,$gst_serveur_bd;
   $connexionBD            = ConnexionBD::singleton($gst_serveur_bd,$gst_utilisateur_bd,$gst_mdp_utilisateur_bd,$gst_nom_bd);	
   $connexionBD->ajoute_params(array(':ident'=>$pst_ident,':droit'=>$pst_droit));
   $st_requete="select count(droit) from privilege join adherent on (adherent.idf=privilege.idf_adherent) where droit=:droit and ident=:ident";
   $i_a_droits=$connexionBD->sql_select1($st_requete);   
   return ($i_a_droits!=0);
} 

/**
 *  Verifie que l'utilisateur connecte a le droit $pst_droit pour visualiser la page, sinon arr�te le script
 *  @param string $pst_droit
 **/ 
function verifie_privilege($pst_droit)
{
  if (isset($_SESSION['ident']))
  {
     if (!a_droits($_SESSION['ident'],$pst_droit))
     {
        print("<h3 align=center><font color=red>Vous n'&ecirc;tes pas autoris&eacute; &agrave; consulter cette page</font></h3>");
        exit(-2);
     }
  }
  else
  {
     print("<h3 align=center><font color=red>Vous n'&ecirc;tes pas autoris&eacute; &agrave; consulter cette page</font></h3>");
     exit(-1);
  }
}  
?>