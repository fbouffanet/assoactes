<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

class Releveur {
  // Statistique divers � compl�ter
  protected $connexionBD;
  protected $a_releveurs;

  public function __construct($pconnexionBD) {
       $this->connexionBD = $pconnexionBD;
       $this->a_releveurs=array();      
  }
  
  /**
  * Renvoie l'identifiant du releveur correspondant � l'adh�rent identifi� par son identifiant adh�rent
  * S'il n'existe pas, le cr�e  
  * La liste des identifiants releveurs est mis en cache pour �viter les acc�s BD
  *  
  * @param integer $pi_idf_adherent identifiant de l'adh�rent
  * @return integer $i_idf_releveur
  */

  public function idf_releveur($pi_idf_adherent)
  {
      if (empty($pi_idf_adherent)) return null;
      if (array_key_exists($pi_idf_adherent,$this->a_releveurs))
      {
         return $this->a_releveurs[$pi_idf_adherent];
      }
      else
      {
         $st_requete = "select nom, prenom from `adherent` where idf=$pi_idf_adherent";
         list($st_nom,$st_prenom) = $this->connexionBD->sql_select_liste($st_requete);
         $st_requete = "select idf from `releveur` where idf_adherent=$pi_idf_adherent";
         $i_df_releveur = $this->connexionBD->sql_select1($st_requete);
         if (!empty($i_df_releveur))
            $this->a_releveurs[$pi_idf_adherent] = $i_df_releveur;
         else
         {
            $this->connexionBD->execute_requete("insert into `releveur` (idf_adherent,nom,prenom) values ($pi_idf_adherent,'$st_nom','$st_prenom')");
            $this->a_releveurs[$pi_idf_adherent]=$this->connexionBD->dernier_idf_insere();
         }
         return $this->a_releveurs[$pi_idf_adherent];
            
      }       
  }

}
?>
