<?php
// Copyright (C) : Fabrice Bouffanet 2010-2019 (Association G�n�alogique de la Charente)
// Ce programme est libre, vous pouvez le redistribuer et/ou le modifier selon les termes de la
// Licence Publique G�n�rale GPL GNU publi�e par la Free Software Foundation
// Texte de la licence : http://www.gnu.org/copyleft/gpl.html
//-------------------------------------------------------------------

class CompteurActe {
   private static $compteurActe;
   private $i_compteur=0;
   protected $connexionBD;
   
   private function __construct ($pconnexionBD) {
      $this->connexionBD = $pconnexionBD;
      $i_nb_actes = $this->connexionBD->sql_select1("SELECT count(idf) from acte");
      if ($i_nb_actes!=0) 
         $this->i_compteur = $this->connexionBD->sql_select1("SELECT max(idf) from acte");
      else
         $this->i_compteur=0;   
   }
   
   public static function singleton($pconnexionBD) {
     if (!isset(self::$compteurActe)) {
            $c = __CLASS__;
            self::$compteurActe = new $c($pconnexionBD);
     }
     return self::$compteurActe;
   }
   
   public function Incremente() {
      $this->i_compteur++;
   }
   
   public function getCompteur() {
      return $this->i_compteur;
   }
   
   public function __clone() {
    trigger_error('Le cl�nage n\'est pas autoris�.', E_USER_ERROR);
   }
}
?>
