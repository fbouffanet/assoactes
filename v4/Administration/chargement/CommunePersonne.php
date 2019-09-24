<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

class CommunePersonne {
   private static $communePersonne;
   private $a_commune;
   private $a_idf_par_commune;
   protected $connexionBD;
   
   private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $this->a_commune = array();
      $this->a_idf_par_commune = null;  
   }
   
   public static function singleton($pconnexionBD) {
     if (!isset(self::$communePersonne)) {
            $c = __CLASS__;
            self::$communePersonne = new $c($pconnexionBD);
     }
     return self::$communePersonne;
   }
   
   public function ajoute($pst_commune) {
     if ($pst_commune != '' && !in_array(strval(trim($pst_commune)),$this->a_commune ))
         $this->a_commune[]=trim($pst_commune);
   }
   
   public function sauve() {
     $a_params_precs=$this->connexionBD->params();
	 $a_commune_a_creer = array();
	 if (count($this->a_commune)>0)
     {
	   $st_requete = "insert ignore INTO `commune_personne` (nom) values ";
       $a_colonnes = array();
	   $i=0;
	   foreach ($this->a_commune as $st_elem)
       {
         $a_colonnes[] = "(:commune$i)";
		 $a_commune_a_creer[":commune$i"]=$st_elem;
         $i++; 
	   }
	   $st_colonnes = join(',',$a_colonnes);
	   $st_requete .= $st_colonnes;
	   try
	   {
		 $this->connexionBD->initialise_params($a_commune_a_creer);  
         $this->connexionBD->execute_requete($st_requete);
		 $this->connexionBD->initialise_params($a_params_precs);
       }
       catch (Exception $e) {
         die('Sauvegarde CommunePersonne impossible: ' . $e->getMessage().": $st_requete");
      }
	 }  
   }
   
   public function charge_liste_idf_par_nom() {
     if (is_null($this->a_idf_par_commune))
        $this->a_idf_par_commune = $this->connexionBD->liste_clef_par_valeur("select idf,nom from `commune_personne`");
   }
   
   public function vers_idf($pst_nom) {
    if (empty($pst_nom)) return 0;
    if (is_null($this->a_idf_par_commune)) $this->charge_liste_idf_par_nom();
     if (array_key_exists(strval($pst_nom),$this->a_idf_par_commune))
        return $this->a_idf_par_commune[strval($pst_nom)];
     else
        return 16777215; // Max de Mediumint => Marqueur pour d�tecter les erreurs �ventuelles  
   }
   
}

?>
