<?php

class Patronyme {
  private static $patronyme;
  private $a_patronyme;
  protected $connexionBD;
  private $a_idf_par_patronyme;
   
  private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $this->a_patronyme = array();
      $this->a_idf_par_patronyme = null;  
  }
   
  public static function singleton($pconnexionBD) {
     if (!isset(self::$patronyme)) {
            $c = __CLASS__;
            self::$patronyme = new $c($pconnexionBD);
     }
     return self::$patronyme;
  }
  
  public function ajoute($pst_patronyme) {
     if ($pst_patronyme !='' && !in_array(strval($pst_patronyme),$this->a_patronyme ))
         $this->a_patronyme[]=strval($pst_patronyme);
  }
  
  public function sauve() {
     $a_params_precs=$this->connexionBD->params();
	 $a_patronymes_a_creer = array();
	 if (count($this->a_patronyme)>0)
     {
	   $st_requete = "insert ignore INTO `patronyme` (libelle,phonex) values ";
       $a_colonnes = array();
	   $i=0;
	   $oPhonex = new phonex;
	   foreach ($this->a_patronyme as $st_elem)
       {
		 if (!empty($st_elem))
		 {	 
			$a_colonnes[] = "(:patronyme$i,:phonex$i)";
			$a_patronymes_a_creer[":prof$i"]=$st_elem;
			$oPhonex -> build ($st_elem);
            $sPhonex = $oPhonex -> sString;
			$a_patronymes_a_creer[":phonex$i"]=$sPhonex;
			$i++;
		 }
	   }
	   $st_colonnes = join(',',$a_colonnes);
	   $st_requete .= $st_colonnes;
	   try
	   {
		 $this->connexionBD->initialise_params($a_patronymes_a_creer);  
         $this->connexionBD->execute_requete($st_requete);
		 $this->connexionBD->initialise_params($a_params_precs);
       }
       catch (Exception $e) {
         die('Sauvegarde patronyme impossible: ' . $e->getMessage().": $st_requete");
      }      	  
    }

   }
   
   public function charge_liste_idf_par_nom() {
     if (is_null($this->a_idf_par_patronyme))
        $this->a_idf_par_patronyme = $this->connexionBD->liste_clef_par_valeur("select idf,nom from `patronyme`");
   }
   
   public function vers_idf($pst_nom) {
     $pst_nom = ucfirst(strtolower(trim($pst_nom)));
     if (empty($pst_nom)) return 0;
     if (is_null($this->a_idf_par_patronyme)) $this->charge_liste_idf_par_nom();
     if (array_key_exists(strval($pst_nom),$this->a_idf_par_patronyme))
        return $this->a_idf_par_patronyme[strval($pst_nom)];
     else
     {
        return 16777215; // Max de Mediumint => Marqueur pour d�tecter les erreurs �ventuelles
     }      
   }
}

?>
