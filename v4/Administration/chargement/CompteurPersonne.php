<?php

class CompteurPersonne {
   private static $compteurPersonne;
   private $i_compteur=0;
   protected $connexionBD;
   
   private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $i_nb_personnes = $this->connexionBD->sql_select1("SELECT count(idf) from personne");
      if ($i_nb_personnes!=0) 
         $this->i_compteur = $this->connexionBD->sql_select1("SELECT max(idf) from personne");
      else
         $this->i_compteur=0;   
   }
   
   public static function singleton($pconnexionBD) {
     if (!isset(self::$compteurPersonne)) {
            $c = __CLASS__;
            self::$compteurPersonne = new $c($pconnexionBD);
     }
     return self::$compteurPersonne;
   }
   
   public function Incremente() {
      $this->i_compteur++;
   }
   
   public function getCompteur() {
      return $this->i_compteur;
   }
   
   public function __clone() {
    trigger_error('Le clônage n\'est pas autorisé.', E_USER_ERROR);
  }
}
?>
